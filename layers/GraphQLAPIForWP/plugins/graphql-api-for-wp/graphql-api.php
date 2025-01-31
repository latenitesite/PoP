<?php
/*
Plugin Name: GraphQL API for WordPress
Plugin URI: https://graphql-api.com
Description: Transform your WordPress site into a GraphQL server.
Version: 0.8.0
Requires at least: 5.4
Requires PHP: 8.0
Author: Leonardo Losoviz
Author URI: https://leoloso.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
Text Domain: graphql-api
Domain Path: /languages
GitHub Plugin URI: GraphQLAPI/graphql-api-for-wp-dist
*/

use GraphQLAPI\GraphQLAPI\Plugin;
use GraphQLAPI\GraphQLAPI\PluginEnvironment;
use GraphQLAPI\GraphQLAPI\PluginInfo;

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Make sure this plugin is not duplicated.
 * For instance, if zip file already exists in Downloads folder, then
 * the newly downloaded file will be renamed (eg: graphql-api(2).zip)
 * and the plugin will exist twice, as graphql-api/... and graphql-api2/...
 */
if (class_exists(PluginInfo::class)) {
    \add_action('admin_notices', function () {
        _e(sprintf(
            '<div class="notice notice-error">' .
                '<p>%s</p>' .
            '</div>',
            sprintf(
                __('Plugin <strong>%s</strong> is already installed with version <code>%s</code>, so version <code>%s</code> has not been loaded. Please deactivate all versions, remove the older version, and activate again the latest version of the plugin.', 'graphql-api'),
                __('GraphQL API for WordPress', 'graphql-api'),
                PluginInfo::get('version'),
                '0.8.0'
            )
        ));
    });
    return;
}

/**
 * Load translations
 */
\add_action('init', function (): void {
    load_plugin_textdomain('graphql-api', false, plugin_basename(__FILE__) . '/languages');
});

// Check Composer's autoload has been generated
$autoloadFile = __DIR__ . '/vendor/autoload.php';
if (!file_exists($autoloadFile)) {
    \add_action('admin_notices', function () {
        _e(sprintf(
            '<div class="notice notice-error">' .
                '<p>%s</p>' .
            '</div>',
            __('Dependencies for <strong>GraphQL API for WordPress</strong> are missing. Please install them by running <code>composer install</code> on the plugin\'s root folder. Until then, the plugin will be disabled.', 'graphql-api')
        ));
    });
    return;
}

// Load Composer’s autoloader
require_once($autoloadFile);

// Initialize the Plugin information
PluginInfo::init([
    'version' => '0.8.0',
    'file' => __FILE__,
    'baseName' => plugin_basename(__FILE__),
    'slug' => 'graphql-api',
    'dir' => dirname(__FILE__),
    'url' => plugin_dir_url(__FILE__),
    /**
     * Where to store the config cache,
     * for both /service-containers and /config-via-symfony-cache
     * (config persistent cache: component model configuration + schema)
     */
    'cache-dir' => PluginEnvironment::getCacheDir(),
]);

// Create and set-up the plugin instance
(new Plugin(__FILE__))->setup();
