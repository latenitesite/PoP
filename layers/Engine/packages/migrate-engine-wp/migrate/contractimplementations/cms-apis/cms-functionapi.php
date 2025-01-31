<?php
namespace PoP\Engine\WP;

class FunctionAPI extends \PoP\Engine\FunctionAPI_Base
{
    public function redirect($url)
    {
        wp_redirect($url);
    }

    public function getVersion()
    {
        return get_bloginfo('version');
    }

    public function getHomeURL(string $path = ''): string
    {
        return home_url($path);
    }

    public function getSiteURL(): string
    {
        return get_site_url();
    }

    public function getContentDir()
    {
        return WP_CONTENT_DIR;
    }

    public function getContentURL()
    {
        return WP_CONTENT_URL;
    }

    public function getDate($format, $date) {
        return mysql2date($format, $date);
    }
}

/**
 * Initialize
 */
new FunctionAPI();
