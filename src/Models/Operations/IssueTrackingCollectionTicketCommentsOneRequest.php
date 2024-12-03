<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class IssueTrackingCollectionTicketCommentsOneRequest
{
    /**
     * ID of the record you are acting upon.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

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
     * Number of results to return. Minimum 1, Maximum 200, Default 20
     *
     * @var ?int $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;

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
     * The 'fields' parameter allows API users to specify the fields they want to include in the API response. If this parameter is not present, the API will return all available fields. If this parameter is present, only the fields specified in the comma-separated string will be included in the response. Nested properties can also be requested by using a dot notation. <br /><br />Example: `fields=name,email,addresses.city`<br /><br />In the example above, the response will only include the fields "name", "email" and "addresses.city". If any other fields are available, they will be excluded.
     *
     * @var ?string $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?string $fields = null;

    /**
     * @param  string  $id
     * @param  string  $collectionId
     * @param  string  $ticketId
     * @param  ?bool  $raw
     * @param  ?string  $consumerId
     * @param  ?string  $appId
     * @param  ?string  $serviceId
     * @param  ?int  $limit
     * @param  ?string  $cursor
     * @param  ?string  $fields
     */
    public function __construct(string $id, string $collectionId, string $ticketId, ?string $consumerId = null, ?string $appId = null, ?string $serviceId = null, ?string $cursor = null, ?string $fields = null, ?bool $raw = false, ?int $limit = 20)
    {
        $this->id = $id;
        $this->collectionId = $collectionId;
        $this->ticketId = $ticketId;
        $this->raw = $raw;
        $this->consumerId = $consumerId;
        $this->appId = $appId;
        $this->serviceId = $serviceId;
        $this->limit = $limit;
        $this->cursor = $cursor;
        $this->fields = $fields;
    }
}