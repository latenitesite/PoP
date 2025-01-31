<?php

declare(strict_types=1);

namespace PoPSchema\TranslateDirective\Container\CompilerPasses;

use PoP\Root\Container\CompilerPasses\AbstractCompilerPass;
use PoP\Root\Container\ContainerBuilderWrapperInterface;
use PoPSchema\TranslateDirective\Environment;
use PoPSchema\TranslateDirective\Translation\TranslationServiceInterface;

class ConfigureTranslationServiceCompilerPass extends AbstractCompilerPass
{
    /**
     * GraphQL persisted query for Introspection query
     */
    protected function doProcess(ContainerBuilderWrapperInterface $containerBuilderWrapper): void
    {
        // If there is a default translation provider, inject it into the service
        if ($defaultTranslationProvider = Environment::getDefaultTranslationProvider()) {
            $translationServiceDefinition = $containerBuilderWrapper->getDefinition(TranslationServiceInterface::class);
            $translationServiceDefinition->addMethodCall(
                'setDefaultProvider',
                [
                    $defaultTranslationProvider
                ]
            );
        }
    }
}
