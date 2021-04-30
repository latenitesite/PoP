<?php

declare(strict_types=1);

namespace PoPSitesWassup\SocialNetworkMutations\MutationResolvers;

use PoP\Translation\Facades\TranslationAPIFacade;
use PoP\Hooks\Facades\HooksAPIFacade;
use PoPSchema\CustomPosts\Facades\CustomPostTypeAPIFacade;
use PoP\ComponentModel\State\ApplicationState;

class UndoUpvoteCustomPostMutationResolver extends AbstractUpvoteOrUndoUpvoteCustomPostMutationResolver
{
    public function validateErrors(array $form_data): ?array
    {
        $errors = parent::validateErrors($form_data);
        if (!$errors) {
            $vars = ApplicationState::getVars();
            $customPostTypeAPI = CustomPostTypeAPIFacade::getInstance();
            $user_id = $vars['global-userstate']['current-user-id'];
            $target_id = $form_data['target_id'];

            // Check that the logged in user does currently follow that user
            $value = \PoPSchema\UserMeta\Utils::getUserMeta($user_id, \GD_METAKEY_PROFILE_UPVOTESPOSTS);
            if (!in_array($target_id, $value)) {
                $errors[] = sprintf(
                    $this->translationAPI->__('You had not up-voted <em><strong>%s</strong></em>.', 'pop-coreprocessors'),
                    $customPostTypeAPI->getTitle($target_id)
                );
            }
        }
        return $errors;
    }

    /**
     * Function to override
     */
    protected function additionals($target_id, $form_data)
    {
        parent::additionals($target_id, $form_data);
        $this->hooksAPI->doAction('gd_undoupvotepost', $target_id, $form_data);
    }

    protected function update($form_data): string | int
    {
        $vars = ApplicationState::getVars();
        $user_id = $vars['global-userstate']['current-user-id'];
        $target_id = $form_data['target_id'];

        // Update value
        \PoPSchema\UserMeta\Utils::deleteUserMeta($user_id, \GD_METAKEY_PROFILE_UPVOTESPOSTS, $target_id);
        \PoPSchema\CustomPostMeta\Utils::deleteCustomPostMeta($target_id, \GD_METAKEY_POST_UPVOTEDBY, $user_id);

        // Update the count
        $count = \PoPSchema\CustomPostMeta\Utils::getCustomPostMeta($target_id, \GD_METAKEY_POST_UPVOTECOUNT, true);
        $count = $count ? $count : 0;
        \PoPSchema\CustomPostMeta\Utils::updateCustomPostMeta($target_id, \GD_METAKEY_POST_UPVOTECOUNT, ($count - 1), true);

        return parent::update($form_data);
    }

    /**
     * Function to be called by the opposite function (Up-vote/Down-vote)
     */
    public function undo($form_data)
    {
        return $this->update($form_data);
    }
}
