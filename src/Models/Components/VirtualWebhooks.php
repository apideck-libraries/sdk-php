<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** VirtualWebhooks - Virtual webhook config for the connector. */
class VirtualWebhooks
{
    /**
     * The rate at which requests for resources will be made to downstream.
     *
     * @var RequestRate $requestRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('request_rate')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\RequestRate')]
    public RequestRate $requestRate;

    /**
     * The resources that will be requested from downstream.
     *
     * @var ?array<string, WebhookSupportResources> $resources
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('resources')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, \Apideck\Unify\Models\Components\WebhookSupportResources>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $resources = null;

    /**
     * @param  RequestRate  $requestRate
     * @param  ?array<string, WebhookSupportResources>  $resources
     * @phpstan-pure
     */
    public function __construct(RequestRate $requestRate, ?array $resources = null)
    {
        $this->requestRate = $requestRate;
        $this->resources = $resources;
    }
}