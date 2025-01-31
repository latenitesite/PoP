<?php

declare(strict_types=1);

namespace PoP\Application\ModuleProcessors;

use PoP\API\ModuleProcessors\AddAPIQueryToSourcesModuleProcessorTrait;
use PoP\Application\ModuleProcessors\DataloadingConstants;
use PoP\ComponentModel\Environment;
use PoP\ComponentModel\State\ApplicationState;
use PoP\Application\Constants\Actions;

abstract class AbstractModuleProcessor extends \PoP\ConfigurationComponentModel\ModuleProcessors\AbstractModuleProcessor implements ModuleProcessorInterface
{
    use AddAPIQueryToSourcesModuleProcessorTrait;

    public function getDatasetmeta(array $module, array &$props, array $data_properties, $dataaccess_checkpoint_validation, $actionexecution_checkpoint_validation, $executed, $dbObjectIDOrIDs): array
    {
        $ret = parent::getDatasetmeta($module, $props, $data_properties, $dataaccess_checkpoint_validation, $actionexecution_checkpoint_validation, $executed, $dbObjectIDOrIDs);

        if ($query_multidomain_urls = $this->getDataloadMultidomainQuerySources($module, $props)) {
            $ret['multidomaindataloadsources'] = $query_multidomain_urls;
            unset($ret['dataloadsource']);
        }
        // if ($data_properties[DataloadingConstants::EXTERNALLOAD] ?? null) {
        //     $ret['externalload'] = true;
        // }
        if ($data_properties[DataloadingConstants::LAZYLOAD] ?? null) {
            $ret['lazyload'] = true;
        }

        return $ret;
    }

    public function getModelPropsForDescendantDatasetmodules(array $module, array &$props): array
    {
        $ret = parent::getModelPropsForDescendantDatasetmodules($module, $props);

        // If this module loads data, then add several properties
        if ($this->moduleLoadsData($module)) {
            if ($this->queriesExternalDomain($module, $props)) {
                $ret['external-domain'] = true;
            }

            // If it is multidomain, add a flag for inner layouts to know and react
            if ($this->isMultidomain($module, $props)) {
                $ret['multidomain'] = true;
            }
        }

        return $ret;
    }

    protected function addHeaddatasetmoduleDataProperties(&$ret, array $module, array &$props)
    {
        parent::addHeaddatasetmoduleDataProperties($ret, $module, $props);

        $vars = ApplicationState::getVars();

        // Is the component lazy-load?
        $ret[DataloadingConstants::LAZYLOAD] = $this->isLazyload($module, $props);

        // Do not load data when doing lazy load, unless passing URL param ?action=loadlazy, which is needed to initialize the lazy components.
        // Do not load data for Search page (initially, before the query was submitted)
        // Do not load data when querying data from another domain, since evidently we don't have that data in this application, then the load must be triggered from the client
        $ret[DataloadingConstants::SKIPDATALOAD] =
            (
                $ret[DataloadingConstants::LAZYLOAD] &&
                !in_array(Actions::LOADLAZY, $vars['actions'])
            ) ||
            $ret[DataloadingConstants::EXTERNALLOAD] ||
            $this->getProp($module, $props, 'skip-data-load');

        // Use Mock DB Object Data for the Skeleton Screen
        $ret[DataloadingConstants::USEMOCKDBOBJECTDATA] = $this->getProp($module, $props, 'use-mock-dbobject-data') ?? false;

        // Loading data from a different application?
        $ret[DataloadingConstants::EXTERNALLOAD] = $this->queriesExternalDomain($module, $props);
    }

    public function getDataloadMultidomainQuerySources(array $module, array &$props): array
    {
        $sources = $this->getDataloadMultidomainSources($module, $props);
        // If this website and the external one have the same software installed, then the external application can already retrieve the needed data
        // Otherwise, this website needs to explicitly request what data is needed to the external one
        if (Environment::externalSitesRunSameSoftware()) {
            return $sources;
        }
        return $this->addAPIQueryToSources($sources, $module, $props);
    }

    public function getDataloadMultidomainSources(array $module, array &$props): array
    {
        if ($sources = $this->getProp($module, $props, 'dataload-multidomain-sources')) {
            return is_array($sources) ? $sources : [$sources];
        }

        return [];
    }

    public function queriesExternalDomain(array $module, array &$props): bool
    {
        if ($sources = $this->getDataloadMultidomainSources($module, $props)) {
            $cmsengineapi = \PoP\Engine\FunctionAPIFactory::getInstance();
            $domain = $cmsengineapi->getSiteURL();
            foreach ($sources as $source) {
                if (substr($source, 0, strlen($domain)) != $domain) {
                    return true;
                }
            }
        }

        return false;
    }

    public function isMultidomain(array $module, array &$props): bool
    {
        if (!$this->queriesExternalDomain($module, $props)) {
            return false;
        }

        $multidomain_urls = $this->getDataloadMultidomainSources($module, $props);
        return is_array($multidomain_urls) && count($multidomain_urls) >= 2;
    }

    public function isLazyload(array $module, array &$props): bool
    {
        return $this->getProp($module, $props, 'lazy-load') ?? false;
    }

    public function initModelProps(array $module, array &$props): void
    {
        // If it is a dataloading module, then set all the props related to data
        if ($this->moduleLoadsData($module)) {
            // If it is multidomain, add a flag for inner layouts to know and react
            if ($this->isMultidomain($module, $props)) {
                // $this->add_general_prop($props, 'is-multidomain', true);
                $this->appendProp($module, $props, 'class', 'pop-multidomain');
            }
        }

        parent::initModelProps($module, $props);
    }
}
