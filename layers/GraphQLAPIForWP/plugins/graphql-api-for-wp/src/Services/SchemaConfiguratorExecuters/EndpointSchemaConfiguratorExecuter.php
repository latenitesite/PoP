<?php

declare(strict_types=1);

namespace GraphQLAPI\GraphQLAPI\Services\SchemaConfiguratorExecuters;

use GraphQLAPI\GraphQLAPI\Services\CustomPostTypes\GraphQLEndpointCustomPostType;
use GraphQLAPI\GraphQLAPI\Services\SchemaConfigurators\EndpointSchemaConfigurator;
use GraphQLAPI\GraphQLAPI\Services\SchemaConfigurators\SchemaConfiguratorInterface;

class EndpointSchemaConfiguratorExecuter extends AbstractLoadingCPTSchemaConfiguratorExecuter
{
    protected EndpointSchemaConfigurator $endpointSchemaConfigurator;

    function __construct(
        EndpointSchemaConfigurator $endpointSchemaConfigurator
    ) {
        $this->endpointSchemaConfigurator = $endpointSchemaConfigurator;
    }

    protected function getPostType(): string
    {
        return GraphQLEndpointCustomPostType::CUSTOM_POST_TYPE;
    }

    protected function getSchemaConfigurator(): SchemaConfiguratorInterface
    {
        return $this->endpointSchemaConfigurator;
    }
}
