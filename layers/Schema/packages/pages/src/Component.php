<?php

declare(strict_types=1);

namespace PoPSchema\Pages;

use PoP\Root\Component\AbstractComponent;
use PoP\RESTAPI\Component as RESTAPIComponent;
use PoP\API\Component as APIComponent;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    /**
     * Classes from PoP components that must be initialized before this component
     *
     * @return string[]
     */
    public static function getDependedComponentClasses(): array
    {
        return [
            \PoPSchema\CustomPosts\Component::class,
        ];
    }

    /**
     * All conditional component classes that this component depends upon, to initialize them
     */
    public static function getDependedConditionalComponentClasses(): array
    {
        return [
            \PoP\API\Component::class,
            \PoP\RESTAPI\Component::class,
        ];
    }

    public static function getDependedMigrationPlugins(): array
    {
        $packageName = basename(dirname(__DIR__));
        $folder = dirname(__DIR__, 2);
        return [
            $folder . '/migrate-' . $packageName . '/initialize.php',
        ];
    }

    /**
     * Initialize services
     *
     * @param array<string, mixed> $configuration
     * @param string[] $skipSchemaComponentClasses
     */
    protected static function initializeContainerServices(
        array $configuration = [],
        bool $skipSchema = false,
        array $skipSchemaComponentClasses = []
    ): void {
        ComponentConfiguration::setConfiguration($configuration);
        self::initServices(dirname(__DIR__));
        self::initSchemaServices(dirname(__DIR__), $skipSchema);
        if (ComponentConfiguration::addPageTypeToCustomPostUnionTypes()) {
            self::initSchemaServices(dirname(__DIR__), $skipSchema, '/ConditionalOnContext/AddPageTypeToCustomPostUnionTypes');
        }
        if (class_exists(APIComponent::class) && APIComponent::isEnabled()) {
            self::initServices(dirname(__DIR__), '/ConditionalOnComponent/API');
        }
        if (class_exists(RESTAPIComponent::class) && RESTAPIComponent::isEnabled()) {
            self::initServices(dirname(__DIR__), '/ConditionalOnComponent/RESTAPI');
        }
    }
}
