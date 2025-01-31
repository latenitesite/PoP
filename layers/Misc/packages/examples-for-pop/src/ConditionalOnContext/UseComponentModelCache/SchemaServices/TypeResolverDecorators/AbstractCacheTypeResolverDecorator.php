<?php

declare(strict_types=1);

namespace Leoloso\ExamplesForPoP\ConditionalOnContext\UseComponentModelCache\SchemaServices\TypeResolverDecorators;

use PoP\AccessControl\TypeResolverDecorators\AbstractPublicSchemaTypeResolverDecorator;
use PoP\ComponentModel\DirectiveResolvers\DirectiveResolverInterface;
use PoP\ComponentModel\TypeResolvers\TypeResolverInterface;
use PoP\Engine\ConditionalOnContext\UseComponentModelCache\SchemaServices\DirectiveResolvers\SaveCacheDirectiveResolver;

/**
 * Add directive @cache to fields expensive to calculate
 */
abstract class AbstractCacheTypeResolverDecorator extends AbstractPublicSchemaTypeResolverDecorator
{
    /**
     * Time that the cache is valid
     * By default, it caches for 1 hour
     */
    protected function getTime(): ?int
    {
        // By default, cache it for 1 hour (3600 seconds)
        return 3600;
    }

    /**
     * Get the fields to cache. Function to override
     */
    protected function getFieldNamesToCache(): array
    {
        return [];
    }

    /**
     * Get the directives to cache. Function to override
     */
    protected function getDirectiveNamesToCache(): array
    {
        return [];
    }

    /**
     * Get the cache directive
     */
    protected function getCacheDirective(): array
    {
        /** @var DirectiveResolverInterface */
        $saveCacheDirectiveResolver = $this->instanceManager->getInstance(SaveCacheDirectiveResolver::class);
        return $this->fieldQueryInterpreter->getDirective(
            $saveCacheDirectiveResolver->getDirectiveName(),
            [
                'time' => $this->getTime(),
            ]
        );
    }

    /**
     * Cache fields
     */
    public function getMandatoryDirectivesForFields(TypeResolverInterface $typeResolver): array
    {
        $mandatoryDirectivesForFields = [];
        if ($fieldNames = $this->getFieldNamesToCache()) {
            $cacheDirective = $this->getCacheDirective();
            foreach ($fieldNames as $fieldName) {
                $mandatoryDirectivesForFields[$fieldName] = [
                    $cacheDirective,
                ];
            }
        }
        return $mandatoryDirectivesForFields;
    }

    /**
     * Cache directives
     */
    public function getSucceedingMandatoryDirectivesForDirectives(TypeResolverInterface $typeResolver): array
    {
        $mandatoryDirectivesForDirectives = [];
        if ($directiveNames = $this->getDirectiveNamesToCache()) {
            $cacheDirective = $this->getCacheDirective();
            foreach ($directiveNames as $directiveName) {
                $mandatoryDirectivesForDirectives[$directiveName] = [
                    $cacheDirective,
                ];
            }
        }
        return $mandatoryDirectivesForDirectives;
    }
}
