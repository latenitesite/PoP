<?php
define('POP_EMAILFRAME_DEFAULT', 'default');
define('POP_EMAILTEMPLATE_BUTTON', 'button.html');

use PoP\Translation\Facades\TranslationAPIFacade;
use PoP\Hooks\Facades\HooksAPIFacade;
use PoP\ComponentModel\Misc\GeneralUtils;
use PoP\LooseContracts\Facades\NameResolverFacade;
use PoPSchema\CustomPostMedia\Misc\MediaHelpers;
use PoPSchema\EverythingElse\Misc\TagHelpers;
use PoPSchema\CustomPosts\Facades\CustomPostTypeAPIFacade;
use PoP\Engine\Facades\CMS\CMSServiceFacade;
use PoPSchema\PostTags\Facades\PostTagTypeAPIFacade;

class PoP_EmailSender_Templates_Simple extends PoP_EmailSender_Templates
{
    public function getName()
    {
        return POP_EMAILFRAME_DEFAULT;
    }

    public function getEmailframeHeader(/*$frame, */$title, $emails, $names, $template)
    {

        // Message
        if ($names) {
            return sprintf(
                TranslationAPIFacade::getInstance()->__('<p>Hi %s,</p>', 'pop-emailsender'),
                implode(', ', $names)
            );
        }
        return TranslationAPIFacade::getInstance()->__('<p>Howdy!</p>', 'pop-emailsender');
    }

    public function getEmailframeFooter(/*$frame, */$title, $emails, $names, $template)
    {
        $cmsengineapi = \PoP\Engine\FunctionAPIFactory::getInstance();
        $cmsapplicationapi = \PoP\Application\FunctionAPIFactory::getInstance();
        $url = GeneralUtils::maybeAddTrailingSlash($cmsengineapi->getHomeURL());
        return sprintf(
            '<p><a href="%s">%s</a><br/>%s</p>',
            $url,
            $cmsapplicationapi->getSiteName(),
            $cmsapplicationapi->getSiteDescription()
        );
    }

    public function getUserhtml($user_id)
    {
        $cmsusersapi = \PoPSchema\Users\FunctionAPIFactory::getInstance();
        $author_url = $cmsusersapi->getUserURL($user_id);
        $author_name = $cmsusersapi->getUserDisplayName($user_id);
        $avatar = gdGetAvatar($user_id, GD_AVATAR_SIZE_60);
        $avatar_html = sprintf(
            '<a href="%1$s"><img src="%2$s" width="%3$s" height="%3$s"></a>',
            $author_url,
            $avatar['src'],
            $avatar['size']
        );
        $name_html = sprintf(
            '<h3 style="display: block;"><a href="%s">%s</a></h3>%s',
            $author_url,
            $author_name,
            gdGetUserShortdescription($user_id)
        );

        $userhtml_styles = HooksAPIFacade::getInstance()->applyFilters('sendemail_get_userhtml:userhtml_styles', array('width: 100%'));
        $user_html = sprintf(
            '<table cellpadding=10 cellspacing=0 border=0 style="%s">'.
            '<tr valign="top">'.
            '<td width="%s" valign="top">%s</td><td valign="top">%s</td>'
            .'</tr>'.
            '</table>',
            implode(';', $userhtml_styles),
            $avatar['size'],
            $avatar_html,
            $name_html
        );

        return $user_html;
    }

    public function getPosthtml($post_id)
    {
        $cmsmediaapi = \PoPSchema\Media\FunctionAPIFactory::getInstance();
        $customPostTypeAPI = CustomPostTypeAPIFacade::getInstance();
        $post_url = $customPostTypeAPI->getPermalink($post_id);
        $post_title = $customPostTypeAPI->getTitle($post_id);
        $post_excerpt = $customPostTypeAPI->getExcerpt($post_id);
        $thumb = $cmsmediaapi->getMediaSrc(MediaHelpers::getThumbId($post_id), 'thumb-sm');
        $thumb_html = sprintf(
            '<a href="%1$s"><img src="%2$s" width="%3$s" height="%4$s"></a>',
            $post_url,
            $thumb[0],
            $thumb[1],
            $thumb[2]
        );
        $title_html = sprintf(
            '<h3 style="display: block;"><a href="%s">%s</a></h3>',
            $post_url,
            $post_title
        );

        $posthtml_styles = HooksAPIFacade::getInstance()->applyFilters('sendemail_get_userhtml:posthtml_styles', array('width: 100%'));
        $post_html = sprintf(
            '<table cellpadding=10 cellspacing=0 border=0 style="%s">'.
            '<tr valign="top">'.
            '<td width="%s" valign="top">%s</td><td valign="top"><div>%s</div><div>%s</div></td>'
            .'</tr>'.
            '</table>',
            implode(';', $posthtml_styles),
            $thumb[1],
            $thumb_html,
            $title_html,
            $post_excerpt
        );

        return $post_html;
    }

    public function getCommenthtml($comment)
    {
        $cmsengineapi = \PoP\Engine\FunctionAPIFactory::getInstance();
        $cmscommentsresolver = \PoPSchema\Comments\ObjectPropertyResolverFactory::getInstance();
        $avatar = gdGetAvatar($cmscommentsresolver->getCommentUserId($comment), GD_AVATAR_SIZE_40);
        $avatar_html = sprintf(
            '<a href="%1$s"><img src="%2$s" width="%3$s" height="%3$s"></a>',
            $comment->comment_author_url,
            $avatar['src'],
            $avatar['size']
        );

        $comment_styles = HooksAPIFacade::getInstance()->applyFilters('sendemailToUsersFromComment:comment_styles', array('width: 100%'));
        $cmsService = CMSServiceFacade::getInstance();
        $comment_html = sprintf(
            '<table cellpadding=10 cellspacing=0 border=0 style="%s">'.
            '<tr valign="top">'.
            '<td width="%s" valign="top">%s</td><td valign="top"><a href="%s">%s</a>&nbsp;<small>%s</small><br/>%s</td>'
            .'</tr>'.
            '</table>',
            implode(';', $comment_styles),
            $avatar['size'],
            $avatar_html,
            $comment->comment_author_url,
            $comment->comment_author,
            $cmsengineapi->getDate($cmsService->getOption(NameResolverFacade::getInstance()->getName('popcms:option:dateFormat')), $cmscommentsresolver->getCommentDateGmt($comment)),
            $cmscommentsresolver->getCommentContent($comment)
        );

        return $comment_html;
    }

    public function getCommentcontenthtml($comment)
    {
        $cmscommentsapi = \PoPSchema\Comments\FunctionAPIFactory::getInstance();
        $customPostTypeAPI = CustomPostTypeAPIFacade::getInstance();
        $cmscommentsresolver = \PoPSchema\Comments\ObjectPropertyResolverFactory::getInstance();
        $post_id = $cmscommentsresolver->getCommentPostId($comment);
        $url = $customPostTypeAPI->getPermalink($post_id);
        if ($cmscommentsresolver->getCommentParent($comment)) {
            $parent = $cmscommentsapi->getComment($cmscommentsresolver->getCommentParent($comment));
        }

        $content = $this->getCommenthtml($comment);
        $content .= '<br/>';
        if ($parent) {
            $content .= sprintf(
                '<em>%s</em>',
                TranslationAPIFacade::getInstance()->__('In response to:', 'pop-emailsender')
            );
            $content .= $this->getCommenthtml($parent);
            $content .= '<br/>';
        }

        $btn_title = TranslationAPIFacade::getInstance()->__('Click here to reply the comment', 'pop-emailsender');
        $content .= $this->getButtonhtml($btn_title, $url);

        return $content;
    }

    public function getTaghtml($tag_id)
    {
        $postTagTypeAPI = PostTagTypeAPIFacade::getInstance();
        $tag = $postTagTypeAPI->getTag($tag_id);
        $tag_url = $postTagTypeAPI->getTagURL($tag_id);
        $tagname_html = sprintf(
            '<h3 style="display: block;"><a href="%s">%s</a></h3>',
            $tag_url,
            TagHelpers::getTagSymbolNameDescription($tag)
        );
        $userhtml_styles = HooksAPIFacade::getInstance()->applyFilters('sendemail_get_userhtml:userhtml_styles', array('width: 100%'));
        $tag_html = sprintf(
            '<table cellpadding=10 cellspacing=0 border=0 style="%s">'.
            '<tr valign="top">'.
            '<td valign="top">%s</td>'
            .'</tr>'.
            '</table>',
            implode(';', $userhtml_styles),
            $tagname_html
        );

        return $tag_html;
    }

    public function getWebsitehtml()
    {
        $cmsengineapi = \PoP\Engine\FunctionAPIFactory::getInstance();
        $cmsapplicationapi = \PoP\Application\FunctionAPIFactory::getInstance();
        return sprintf(
            '<a href="%s">%s</a>',
            $cmsengineapi->getSiteURL(),
            $cmsapplicationapi->getSiteName()
        );
    }

    public function getButtonhtml($title, $url)
    {
        $template = '';
        foreach ($this->getModuleFolders() as $template_folder) {
            if (file_exists($template_folder . POP_EMAILTEMPLATE_BUTTON)) {
                $template = $template_folder . POP_EMAILTEMPLATE_BUTTON;
                break;
            }
        }

        if ($template) {
            ob_start();
            include $template;
            $button = ob_get_clean();
            return str_replace(
                array('{{TITLE}}', '{{URL}}'),
                array($title, $url),
                $button
            );
        }

        return '';
    }
}

/**
 * Initialization
 */
new PoP_EmailSender_Templates_Simple();
