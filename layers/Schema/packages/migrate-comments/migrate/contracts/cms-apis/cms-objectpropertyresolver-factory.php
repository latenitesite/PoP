<?php
namespace PoPSchema\Comments;

class ObjectPropertyResolverFactory
{
    protected static $instance;

    public static function setInstance(ObjectPropertyResolver $instance)
    {
        self::$instance = $instance;
    }

    public static function getInstance(): ObjectPropertyResolver
    {
        return self::$instance;
    }
}
