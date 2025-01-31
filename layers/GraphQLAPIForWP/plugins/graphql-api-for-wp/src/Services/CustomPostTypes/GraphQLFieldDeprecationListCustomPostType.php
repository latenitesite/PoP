<?php

declare(strict_types=1);

namespace GraphQLAPI\GraphQLAPI\Services\CustomPostTypes;

use GraphQLAPI\GraphQLAPI\Services\Blocks\FieldDeprecationBlock;
use GraphQLAPI\GraphQLAPI\ModuleResolvers\VersioningFunctionalityModuleResolver;
use GraphQLAPI\GraphQLAPI\Services\CustomPostTypes\AbstractCustomPostType;

class GraphQLFieldDeprecationListCustomPostType extends AbstractCustomPostType
{
    /**
     * Custom Post Type name
     */
    public const CUSTOM_POST_TYPE = 'graphql-deprec-list';

    /**
     * Custom Post Type name
     */
    protected function getCustomPostType(): string
    {
        return self::CUSTOM_POST_TYPE;
    }

    /**
     * Module that enables this PostType
     */
    public function getEnablingModule(): ?string
    {
        return VersioningFunctionalityModuleResolver::FIELD_DEPRECATION;
    }

    /**
     * The position on which to add the CPT on the menu.
     */
    protected function getMenuPosition(): int
    {
        return 6;
    }

    /**
     * Custom post type name
     */
    public function getPostTypeName(): string
    {
        return \__('Field Deprecation List', 'graphql-api');
    }

    /**
     * Custom Post Type plural name
     *
     * @param bool $uppercase Indicate if the name must be uppercase (for starting a sentence) or, otherwise, lowercase
     */
    protected function getPostTypePluralNames(bool $uppercase): string
    {
        return \__('Field Deprecation Lists', 'graphql-api');
    }

    /**
     * Indicate if, whenever this CPT is saved/updated,
     * the timestamp must be regenerated
     */
    protected function regenerateTimestampOnSave(): bool
    {
        return true;
    }

    /**
     * Indicate if the excerpt must be used as the CPT's description and rendered when rendering the post
     */
    public function usePostExcerptAsDescription(): bool
    {
        return true;
    }

    /**
     * Gutenberg templates to lock down the Custom Post Type to
     *
     * @return array<array> Every element is an array with template name in first pos, and attributes then
     */
    protected function getGutenbergTemplate(): array
    {
        /**
         * @var FieldDeprecationBlock
         */
        $fieldDeprecationBlock = $this->instanceManager->getInstance(FieldDeprecationBlock::class);
        return [
            [$fieldDeprecationBlock->getBlockFullName()],
        ];
    }
}
