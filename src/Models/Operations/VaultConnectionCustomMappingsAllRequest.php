<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class VaultConnectionCustomMappingsAllRequest
{
    /**
     * Unified API
     *
     * @var string $unifiedApi
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=unified_api')]
    public string $unifiedApi;

    /**
     * Service ID of the resource to return
     *
     * @var string $serviceId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=service_id')]
    public string $serviceId;

    /**
     * Name of the resource (plural)
     *
     * @var string $resource
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=resource')]
    public string $resource;

    /**
     * ID of the consumer which you want to get or push data from
     *
     * @var ?string $consumerId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-apideck-consumer-id')]
    public ?string $consumerId = null;

    /**
     * The ID of your Unify application
     *
     * @var ?string $appId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-apideck-app-id')]
    public ?string $appId = null;

    /**
     * This is the id of the resource you want to fetch when listing custom fields. For example, if you want to fetch custom fields for a specific contact, you would use the contact id.
     *
     * @var ?string $resourceId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=resource_id')]
    public ?string $resourceId = null;

    /**
     * @param  string  $unifiedApi
     * @param  string  $serviceId
     * @param  string  $resource
     * @param  ?string  $consumerId
     * @param  ?string  $appId
     * @param  ?string  $resourceId
     */
    public function __construct(string $unifiedApi, string $serviceId, string $resource, ?string $consumerId = null, ?string $appId = null, ?string $resourceId = null)
    {
        $this->unifiedApi = $unifiedApi;
        $this->serviceId = $serviceId;
        $this->resource = $resource;
        $this->consumerId = $consumerId;
        $this->appId = $appId;
        $this->resourceId = $resourceId;
    }
}