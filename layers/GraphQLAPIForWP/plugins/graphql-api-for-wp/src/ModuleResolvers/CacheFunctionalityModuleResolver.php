<?php

declare(strict_types=1);

namespace GraphQLAPI\GraphQLAPI\ModuleResolvers;

use GraphQLAPI\GraphQLAPI\Plugin;
use GraphQLAPI\GraphQLAPI\ModuleResolvers\ModuleResolverTrait;
use GraphQLAPI\GraphQLAPI\ModuleResolvers\SchemaConfigurationFunctionalityModuleResolver;
use GraphQLAPI\GraphQLAPI\PluginEnvironment;
use GraphQLAPI\GraphQLAPI\Services\ModuleTypeResolvers\ModuleTypeResolver;

/**
 * The cache modules have different behavior depending on the environment:
 * - "development": visible, disabled by default
 * - "production": hidden, enabled by default
 *
 * @author Leonardo Losoviz <leo@getpop.org>
 */
class CacheFunctionalityModuleResolver extends AbstractCacheFunctionalityModuleResolver
{
    use ModuleResolverTrait;

    public const CONFIGURATION_CACHE = Plugin::NAMESPACE . '\configuration-cache';
    public const SCHEMA_CACHE = Plugin::NAMESPACE . '\schema-cache';

    /**
     * @return string[]
     */
    public function getModulesToResolve(): array
    {
        return [
            self::CONFIGURATION_CACHE,
            self::SCHEMA_CACHE,
        ];
    }

    /**
     * The priority to display the modules from this resolver in the Modules page.
     * The higher the number, the earlier it shows
     */
    public function getPriority(): int
    {
        return 130;
    }

    /**
     * Enable to customize a specific UI for the module
     */
    public function getModuleType(string $module): string
    {
        return ModuleTypeResolver::PERFORMANCE;
    }

    public function areRequirementsSatisfied(string $module): bool
    {
        switch ($module) {
            case self::CONFIGURATION_CACHE:
                /**
                 * Caching is enabled only if global caching is enabled
                 */
                return PluginEnvironment::isCachingEnabled();
        }
        return parent::areRequirementsSatisfied($module);
    }

    /**
     * @return array<array> List of entries that must be satisfied, each entry is an array where at least 1 module must be satisfied
     */
    public function getDependedModuleLists(string $module): array
    {
        switch ($module) {
            case self::CONFIGURATION_CACHE:
                return [];
            case self::SCHEMA_CACHE:
                return [
                    [
                        self::CONFIGURATION_CACHE,
                    ],
                    [
                        $this->moduleRegistry->getInverseDependency(SchemaConfigurationFunctionalityModuleResolver::PUBLIC_PRIVATE_SCHEMA),
                    ],
                ];
        }
        return parent::getDependedModuleLists($module);
    }

    public function getName(string $module): string
    {
        $names = [
            self::CONFIGURATION_CACHE => \__('Configuration Cache', 'graphql-api'),
            self::SCHEMA_CACHE => \__('Schema Cache', 'graphql-api'),
        ];
        return $names[$module] ?? $module;
    }

    public function getDescription(string $module): string
    {
        switch ($module) {
            case self::CONFIGURATION_CACHE:
                return \__('Cache the generated application configuration to disk. Available unless global caching is disabled (via environment variable, or constant in wp-config.php)', 'graphql-api');
            case self::SCHEMA_CACHE:
                return \__('Cache the generated schema to disk', 'graphql-api');
        }
        return parent::getDescription($module);
    }
}
