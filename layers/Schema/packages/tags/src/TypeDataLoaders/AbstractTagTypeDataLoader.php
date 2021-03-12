<?php

declare(strict_types=1);

namespace PoPSchema\Tags\TypeDataLoaders;

use PoPSchema\Tags\ComponentContracts\TagAPIRequestedContractTrait;
use PoP\LooseContracts\Facades\NameResolverFacade;
use PoP\ComponentModel\TypeDataLoaders\AbstractTypeQueryableDataLoader;
use PoPSchema\SchemaCommons\DataLoading\ReturnTypes;
use PoPSchema\Tags\ModuleProcessors\FieldDataloads;

abstract class AbstractTagTypeDataLoader extends AbstractTypeQueryableDataLoader
{
    use TagAPIRequestedContractTrait;

    public function getFilterDataloadingModule(): ?array
    {
        return [FieldDataloads::class, FieldDataloads::MODULE_DATALOAD_RELATIONALFIELDS_TAGLIST];
    }

    public function getObjects(array $ids): array
    {
        $query = array(
            'include' => $ids
        );
        $tagapi = $this->getTypeAPI();
        return $tagapi->getTags($query);
    }

    public function getDataFromIdsQuery(array $ids): array
    {
        $query = array(
            'include' => $ids
        );
        return $query;
    }

    protected function getOrderbyDefault()
    {
        return NameResolverFacade::getInstance()->getName('popcms:dbcolumn:orderby:tags:count');
    }

    protected function getOrderDefault()
    {
        return 'DESC';
    }

    public function executeQuery($query, array $options = [])
    {
        $tagapi = $this->getTypeAPI();
        return $tagapi->getTags($query, $options);
    }

    public function executeQueryIds($query): array
    {
        // $query['fields'] = 'ids';
        $options = [
            'return-type' => ReturnTypes::IDS,
        ];
        return (array)$this->executeQuery($query, $options);
    }
}
