<?php

declare(strict_types=1);

namespace PoPSchema\CommentMutations\MutationResolvers;

use PoP\ComponentModel\ErrorHandling\Error;
use PoP\ComponentModel\Misc\GeneralUtils;
use PoP\ComponentModel\MutationResolvers\AbstractMutationResolver;
use PoP\ComponentModel\State\ApplicationState;
use PoPSchema\CommentMutations\Facades\CommentTypeMutationAPIFacade;
use PoPSchema\UserStateMutations\MutationResolvers\ValidateUserLoggedInMutationResolverTrait;

/**
 * Add a comment to a custom post. Currently, the user must be logged-in.
 * @todo: Support non-logged-in users to add comments.
 */
class AddCommentToCustomPostMutationResolver extends AbstractMutationResolver
{
    use ValidateUserLoggedInMutationResolverTrait;

    public function validateErrors(array $form_data): ?array
    {
        $errors = [];

        // Check that the user is logged-in
        $this->validateUserIsLoggedIn($errors);
        if ($errors) {
            return $errors;
        }

        // Either provide the customPostID, or retrieve it from the parent comment
        if ((!isset($form_data[MutationInputProperties::CUSTOMPOST_ID]) || !$form_data[MutationInputProperties::CUSTOMPOST_ID]) && (!isset($form_data[MutationInputProperties::PARENT_COMMENT_ID]) || !$form_data[MutationInputProperties::PARENT_COMMENT_ID])) {
            $errors[] = $this->translationAPI->__('The custom post ID is missing.', 'comment-mutations');
        }
        if (!isset($form_data[MutationInputProperties::COMMENT]) || !$form_data[MutationInputProperties::COMMENT]) {
            $errors[] = $this->translationAPI->__('The comment is empty.', 'comment-mutations');
        }
        return $errors;
    }

    protected function additionals(string | int $comment_id, array $form_data): void
    {
        $this->hooksAPI->doAction('gd_addcomment', $comment_id, $form_data);
    }

    protected function getCommentData(array $form_data): array
    {
        // TODO: Integrate with `mustHaveUserAccountToAddComment`
        $cmsusersapi = \PoPSchema\Users\FunctionAPIFactory::getInstance();
        $vars = ApplicationState::getVars();
        $user_id = $vars['global-userstate']['current-user-id'];
        $author_url = $cmsusersapi->getUserURL($user_id);
        $comment_data = array(
            'userID' => $user_id,
            'author' => $cmsusersapi->getUserDisplayName($user_id),
            'authorEmail' => $cmsusersapi->getUserEmail($user_id),
            'author-URL' => $author_url,
            'author-IP' => $_SERVER['REMOTE_ADDR'],
            'agent' => $_SERVER['HTTP_USER_AGENT'],
            'content' => $form_data[MutationInputProperties::COMMENT],
            'parent' => $form_data[MutationInputProperties::PARENT_COMMENT_ID],
            'customPostID' => $form_data[MutationInputProperties::CUSTOMPOST_ID]
        );

        // If the parent comment is provided and the custom post is not,
        // then retrieve it from there
        if (isset($comment_data['parent']) && !isset($comment_data['customPostID'])) {
            $cmscommentsapi = \PoPSchema\Comments\FunctionAPIFactory::getInstance();
            $cmscommentsresolver = \PoPSchema\Comments\ObjectPropertyResolverFactory::getInstance();
            $parentComment = $cmscommentsapi->getComment($comment_data['parent']);
            $comment_data['customPostID'] = $cmscommentsresolver->getCommentPostId($parentComment);
        }

        return $comment_data;
    }

    protected function insertComment(array $comment_data): string | int | Error
    {
        $commentTypeMutationAPI = CommentTypeMutationAPIFacade::getInstance();
        return $commentTypeMutationAPI->insertComment($comment_data);
    }

    public function execute(array $form_data): mixed
    {
        $comment_data = $this->getCommentData($form_data);
        $comment_id = $this->insertComment($comment_data);
        if (GeneralUtils::isError($comment_id)) {
            return $comment_id;
        }

        // Allow for additional operations (eg: set Action categories)
        $this->additionals($comment_id, $form_data);

        return $comment_id;
    }
}
