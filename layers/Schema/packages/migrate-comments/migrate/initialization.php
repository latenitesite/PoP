<?php
namespace PoPSchema\Comments;

class Initialization
{
    public function initialize()
    {
        load_plugin_textdomain('pop-comments', false, dirname(plugin_basename(__FILE__)).'/languages');

        /**
         * Constants/Configuration for functionalities needed by the plug-in
         */
        include_once 'config/load.php';

        /**
         * Load the Contracts
         */
        include_once 'contracts/load.php';
    }
}
