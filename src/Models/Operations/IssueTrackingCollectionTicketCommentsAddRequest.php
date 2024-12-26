<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
use Apideck\Unify\Utils\SpeakeasyMetadata;
class IssueTrackingCollectionTicketCommentsAddRequest
{
    /**
     * The collection ID
     *
     * @var string $collectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=collection_id')]
    public string $collectionId;

    /**
     * ID of the ticket you are acting upon.
     *
     * @var string $ticketId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ticket_id')]
    public string $ticketId;

    /**
     *
     * @var Components\CollectionTicketCommentInput $collectionTicketComment
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CollectionTicketCommentInput $collectionTicketComment;

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
     * @param  string  $ticketId
     * @param  Components\CollectionTicketCommentInput  $collectionTicketComment
     * @param  ?bool  $raw
     * @param  ?string  $consumerId
     * @param  ?string  $appId
     * @param  ?string  $serviceId
     */
    public function __construct(string $collectionId, string $ticketId, Components\CollectionTicketCommentInput $collectionTicketComment, ?string $consumerId = null, ?string $appId = null, ?string $serviceId = null, ?bool $raw = false)
    {
        $this->collectionId = $collectionId;
        $this->ticketId = $ticketId;
        $this->collectionTicketComment = $collectionTicketComment;
        $this->consumerId = $consumerId;
        $this->appId = $appId;
        $this->serviceId = $serviceId;
        $this->raw = $raw;
    }
}