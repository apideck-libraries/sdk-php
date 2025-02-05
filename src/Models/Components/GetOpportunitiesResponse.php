<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** GetOpportunitiesResponse - Opportunities */
class GetOpportunitiesResponse
{
    /**
     * HTTP Response Status Code
     *
     * @var int $statusCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status_code')]
    public int $statusCode;

    /**
     * HTTP Response Status
     *
     * @var string $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    public string $status;

    /**
     * Apideck ID of service provider
     *
     * @var string $service
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('service')]
    public string $service;

    /**
     * Unified API resource name
     *
     * @var string $resource
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('resource')]
    public string $resource;

    /**
     * Operation performed
     *
     * @var string $operation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('operation')]
    public string $operation;

    /**
     * $data
     *
     * @var array<Opportunity> $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Opportunity>')]
    public array $data;

    /**
     * Response metadata
     *
     * @var ?Meta $meta
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('meta')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Meta|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Meta $meta = null;

    /**
     * Links to navigate to previous or next pages through the API
     *
     * @var ?Links $links
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('links')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Links|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Links $links = null;

    /**
     * @param  int  $statusCode
     * @param  string  $status
     * @param  string  $service
     * @param  string  $resource
     * @param  string  $operation
     * @param  array<Opportunity>  $data
     * @param  ?Meta  $meta
     * @param  ?Links  $links
     * @phpstan-pure
     */
    public function __construct(int $statusCode, string $status, string $service, string $resource, string $operation, array $data, ?Meta $meta = null, ?Links $links = null)
    {
        $this->statusCode = $statusCode;
        $this->status = $status;
        $this->service = $service;
        $this->resource = $resource;
        $this->operation = $operation;
        $this->data = $data;
        $this->meta = $meta;
        $this->links = $links;
    }
}