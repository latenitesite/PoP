<?php

declare(strict_types=1);

namespace Leoloso\ExamplesForPoP\DirectiveResolvers;

use PoP\ComponentModel\TypeResolvers\TypeResolverInterface;
use PoP\ComponentModel\DirectiveResolvers\AbstractGlobalDirectiveResolver;

class MakeTitleVersion010DirectiveResolver extends AbstractGlobalDirectiveResolver
{
    public function getDirectiveName(): string
    {
        return 'makeTitle';
    }

    public function getPriorityToAttachToClasses(): int
    {
        // Higher priority => Process before the latest version fieldResolver
        return 20;
    }

    public function getSchemaDirectiveVersion(TypeResolverInterface $typeResolver): ?string
    {
        return '0.1.0';
    }

    public function decideCanProcessBasedOnVersionConstraint(TypeResolverInterface $typeResolver): bool
    {
        return true;
    }

    public function resolveDirective(
        TypeResolverInterface $typeResolver,
        array &$idsDataFields,
        array &$succeedingPipelineIDsDataFields,
        array &$succeedingPipelineDirectiveResolverInstances,
        array &$resultIDItems,
        array &$unionDBKeyIDs,
        array &$dbItems,
        array &$previousDBItems,
        array &$variables,
        array &$messages,
        array &$dbErrors,
        array &$dbWarnings,
        array &$dbDeprecations,
        array &$dbNotices,
        array &$dbTraces,
        array &$schemaErrors,
        array &$schemaWarnings,
        array &$schemaDeprecations,
        array &$schemaNotices,
        array &$schemaTraces
    ): void {
        foreach ($idsDataFields as $id => $dataFields) {
            foreach ($dataFields['direct'] as $field) {
                $fieldOutputKey = $this->fieldQueryInterpreter->getFieldOutputKey($field);
                $dbItems[$id][$fieldOutputKey] = ucwords($dbItems[$id][$fieldOutputKey]);
            }
        }
    }
    public function getSchemaDirectiveDescription(TypeResolverInterface $typeResolver): ?string
    {
        return $this->translationAPI->__('Convert a string to Title Case', 'examples-for-pop');
    }
}
