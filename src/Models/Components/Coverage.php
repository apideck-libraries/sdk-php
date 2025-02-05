<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class Coverage
{
    /**
     * ID of the resource in the Connector's API (downstream)
     *
     * @var ?string $downstreamId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('downstream_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $downstreamId = null;

    /**
     * Name of the resource in the Connector's API (downstream)
     *
     * @var ?string $downstreamName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('downstream_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $downstreamName = null;

    /**
     * Indicates if pagination (cursor and limit parameters) is supported on the list endpoint of the resource.
     *
     * @var ?bool $paginationSupported
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pagination_supported')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $paginationSupported = null;

    /**
     *
     * @var ?PaginationCoverage $pagination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pagination')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\PaginationCoverage|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PaginationCoverage $pagination = null;

    /**
     * List of supported operations on the resource.
     *
     * @var ?array<string> $supportedOperations
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('supported_operations')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $supportedOperations = null;

    /**
     * Supported filters on the list endpoint of the resource.
     *
     * @var ?array<string> $supportedFilters
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('supported_filters')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $supportedFilters = null;

    /**
     * Supported sorting properties on the list endpoint of the resource.
     *
     * @var ?array<string> $supportedSortBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('supported_sort_by')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $supportedSortBy = null;

    /**
     * Supported fields on the detail endpoint.
     *
     * @var ?array<SupportedProperty> $supportedFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('supported_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\SupportedProperty>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $supportedFields = null;

    /**
     * Supported fields on the list endpoint.
     *
     * @var ?array<SupportedProperty> $supportedListFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('supported_list_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\SupportedProperty>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $supportedListFields = null;

    /**
     * @param  ?string  $downstreamId
     * @param  ?string  $downstreamName
     * @param  ?bool  $paginationSupported
     * @param  ?PaginationCoverage  $pagination
     * @param  ?array<string>  $supportedOperations
     * @param  ?array<string>  $supportedFilters
     * @param  ?array<string>  $supportedSortBy
     * @param  ?array<SupportedProperty>  $supportedFields
     * @param  ?array<SupportedProperty>  $supportedListFields
     * @phpstan-pure
     */
    public function __construct(?string $downstreamId = null, ?string $downstreamName = null, ?bool $paginationSupported = null, ?PaginationCoverage $pagination = null, ?array $supportedOperations = null, ?array $supportedFilters = null, ?array $supportedSortBy = null, ?array $supportedFields = null, ?array $supportedListFields = null)
    {
        $this->downstreamId = $downstreamId;
        $this->downstreamName = $downstreamName;
        $this->paginationSupported = $paginationSupported;
        $this->pagination = $pagination;
        $this->supportedOperations = $supportedOperations;
        $this->supportedFilters = $supportedFilters;
        $this->supportedSortBy = $supportedSortBy;
        $this->supportedFields = $supportedFields;
        $this->supportedListFields = $supportedListFields;
    }
}