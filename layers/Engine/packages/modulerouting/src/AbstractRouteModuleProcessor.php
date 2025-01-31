<?php

declare(strict_types=1);

namespace PoP\ModuleRouting;

use PoP\Hooks\HooksAPIInterface;

abstract class AbstractRouteModuleProcessor
{
    function __construct(
        protected HooksAPIInterface $hooksAPI
    ) {
    }

    /**
     * @return string[]
     */
    public function getGroups(): array
    {
        return array();
    }

    /**
     * @return array<string, array<string, array<array>>>
     */
    public function getModulesVarsPropertiesByNatureAndRoute(): array
    {
        return array();
    }

    /**
     * @return array<string, array<array>>
     */
    public function getModulesVarsPropertiesByNature(): array
    {
        return array();
    }

    /**
     * @return array<string, string[]>
     */
    public function getModulesVarsProperties(): array
    {
        return array();
    }
}
