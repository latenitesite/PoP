<?php

declare(strict_types=1);

namespace PoPSchema\Posts\ModuleProcessors;

use PoP\API\ModuleProcessors\AbstractRelationalFieldDataloadModuleProcessor;
use PoP\ComponentModel\QueryInputOutputHandlers\ListQueryInputOutputHandler;
use PoPSchema\Posts\ModuleProcessors\FilterInnerModuleProcessor;
use PoPSchema\Posts\TypeResolvers\PostTypeResolver;
use PoPSchema\QueriedObject\ModuleProcessors\QueriedDBObjectModuleProcessorTrait;

class FieldDataloadModuleProcessor extends AbstractRelationalFieldDataloadModuleProcessor
{
    use QueriedDBObjectModuleProcessorTrait;

    public const MODULE_DATALOAD_RELATIONALFIELDS_SINGLEPOST = 'dataload-relationalfields-singlepost';
    public const MODULE_DATALOAD_RELATIONALFIELDS_POSTLIST = 'dataload-relationalfields-postlist';
    public const MODULE_DATALOAD_RELATIONALFIELDS_POSTCOUNT = 'dataload-relationalfields-postcount';
    public const MODULE_DATALOAD_RELATIONALFIELDS_ADMINPOSTLIST = 'dataload-relationalfields-adminpostlist';
    public const MODULE_DATALOAD_RELATIONALFIELDS_ADMINPOSTCOUNT = 'dataload-relationalfields-adminpostcount';

    public function getModulesToProcess(): array
    {
        return array(
            [self::class, self::MODULE_DATALOAD_RELATIONALFIELDS_SINGLEPOST],
            [self::class, self::MODULE_DATALOAD_RELATIONALFIELDS_POSTLIST],
            [self::class, self::MODULE_DATALOAD_RELATIONALFIELDS_POSTCOUNT],
            [self::class, self::MODULE_DATALOAD_RELATIONALFIELDS_ADMINPOSTLIST],
            [self::class, self::MODULE_DATALOAD_RELATIONALFIELDS_ADMINPOSTCOUNT],
        );
    }

    public function getDBObjectIDOrIDs(array $module, array &$props, &$data_properties): string | int | array
    {
        switch ($module[1]) {
            case self::MODULE_DATALOAD_RELATIONALFIELDS_SINGLEPOST:
                return $this->getQueriedDBObjectID($module, $props, $data_properties);
        }

        return parent::getDBObjectIDOrIDs($module, $props, $data_properties);
    }

    public function getTypeResolverClass(array $module): ?string
    {
        switch ($module[1]) {
            case self::MODULE_DATALOAD_RELATIONALFIELDS_SINGLEPOST:
            case self::MODULE_DATALOAD_RELATIONALFIELDS_POSTLIST:
            case self::MODULE_DATALOAD_RELATIONALFIELDS_POSTCOUNT:
            case self::MODULE_DATALOAD_RELATIONALFIELDS_ADMINPOSTLIST:
            case self::MODULE_DATALOAD_RELATIONALFIELDS_ADMINPOSTCOUNT:
                return PostTypeResolver::class;
        }

        return parent::getTypeResolverClass($module);
    }

    public function getQueryInputOutputHandlerClass(array $module): ?string
    {
        switch ($module[1]) {
            case self::MODULE_DATALOAD_RELATIONALFIELDS_POSTLIST:
            case self::MODULE_DATALOAD_RELATIONALFIELDS_ADMINPOSTLIST:
                return ListQueryInputOutputHandler::class;
        }

        return parent::getQueryInputOutputHandlerClass($module);
    }

    public function getFilterSubmodule(array $module): ?array
    {
        switch ($module[1]) {
            case self::MODULE_DATALOAD_RELATIONALFIELDS_POSTLIST:
                return [FilterInnerModuleProcessor::class, FilterInnerModuleProcessor::MODULE_FILTERINNER_POSTS];
            case self::MODULE_DATALOAD_RELATIONALFIELDS_POSTCOUNT:
                return [FilterInnerModuleProcessor::class, FilterInnerModuleProcessor::MODULE_FILTERINNER_POSTCOUNT];
            case self::MODULE_DATALOAD_RELATIONALFIELDS_ADMINPOSTLIST:
                return [FilterInnerModuleProcessor::class, FilterInnerModuleProcessor::MODULE_FILTERINNER_ADMINPOSTS];
            case self::MODULE_DATALOAD_RELATIONALFIELDS_ADMINPOSTCOUNT:
                return [FilterInnerModuleProcessor::class, FilterInnerModuleProcessor::MODULE_FILTERINNER_ADMINPOSTCOUNT];
        }

        return parent::getFilterSubmodule($module);
    }
}



