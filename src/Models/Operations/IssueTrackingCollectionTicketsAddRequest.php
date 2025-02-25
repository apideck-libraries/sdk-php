<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
use Apideck\Unify\Utils\SpeakeasyMetadata;
class IssueTrackingCollectionTicketsAddRequest
{
    /**
     * The collection ID
     *
     * @var string $collectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=collection_id')]
    public string $collectionId;

    /**
     *
     * @var Components\TicketInput $ticket
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\TicketInput $ticket;

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
     * Include raw response. Mostly used for debugging purposes
     *
     * @var ?bool $raw
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=raw')]
    public ?bool $raw = null;

    /**
     * @param  string  $collectionId
     * @param  Components\TicketInput  $ticket
     * @param  ?bool  $raw
     * @param  ?string  $consumerId
     * @param  ?string  $appId
     * @param  ?string  $serviceId
     * @phpstan-pure
     */
    public function __construct(string $collectionId, Components\TicketInput $ticket, ?string $consumerId = null, ?string $appId = null, ?string $serviceId = null, ?bool $raw = false)
    {
        $this->collectionId = $collectionId;
        $this->ticket = $ticket;
        $this->consumerId = $consumerId;
        $this->appId = $appId;
        $this->serviceId = $serviceId;
        $this->raw = $raw;
    }
}