<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class VaultConnectionsTokenRequest
{
    /**
     * Service ID of the resource to return
     *
     * @var string $serviceId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=service_id')]
    public string $serviceId;

    /**
     * Unified API
     *
     * @var string $unifiedApi
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=unified_api')]
    public string $unifiedApi;

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
     *
     * @var ?VaultConnectionsTokenRequestBody $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?VaultConnectionsTokenRequestBody $requestBody = null;

    /**
     * @param  string  $serviceId
     * @param  string  $unifiedApi
     * @param  ?string  $consumerId
     * @param  ?string  $appId
     * @param  ?VaultConnectionsTokenRequestBody  $requestBody
     */
    public function __construct(string $serviceId, string $unifiedApi, ?string $consumerId = null, ?string $appId = null, ?VaultConnectionsTokenRequestBody $requestBody = null)
    {
        $this->serviceId = $serviceId;
        $this->unifiedApi = $unifiedApi;
        $this->consumerId = $consumerId;
        $this->appId = $appId;
        $this->requestBody = $requestBody;
    }
}