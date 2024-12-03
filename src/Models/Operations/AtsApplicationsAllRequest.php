<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class AtsApplicationsAllRequest
{
    /**
     * Include raw response. Mostly used for debugging purposes
     *
     * @var ?bool $raw
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=raw')]
    public ?bool $raw = null;

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
     * Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API.
     *
     * @var ?string $serviceId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-apideck-service-id')]
    public ?string $serviceId = null;

    /**
     * Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response.
     *
     * @var ?string $cursor
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=cursor')]
    public ?string $cursor = null;

    /**
     * Optional unmapped key/values that will be passed through to downstream as query parameters. Ie: ?pass_through[search]=leads becomes ?search=leads
     *
     * @var ?array<string, mixed> $passThrough
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=pass_through')]
    public ?array $passThrough = null;

    /**
     * Number of results to return. Minimum 1, Maximum 200, Default 20
     *
     * @var ?int $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;

    /**
     * @param  ?bool  $raw
     * @param  ?string  $consumerId
     * @param  ?string  $appId
     * @param  ?string  $serviceId
     * @param  ?array<string, mixed>  $passThrough
     * @param  ?int  $limit
     * @param  ?string  $cursor
     */
    public function __construct(?string $consumerId = null, ?string $appId = null, ?string $serviceId = null, ?array $passThrough = null, ?string $cursor = null, ?bool $raw = false, ?int $limit = 20)
    {
        $this->raw = $raw;
        $this->consumerId = $consumerId;
        $this->appId = $appId;
        $this->serviceId = $serviceId;
        $this->passThrough = $passThrough;
        $this->limit = $limit;
        $this->cursor = $cursor;
    }
}