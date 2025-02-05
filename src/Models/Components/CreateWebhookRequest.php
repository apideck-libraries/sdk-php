<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class CreateWebhookRequest
{
    /**
     * Name of Apideck Unified API
     *
     * @var UnifiedApiId $unifiedApi
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unified_api')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\UnifiedApiId')]
    public UnifiedApiId $unifiedApi;

    /**
     * The status of the webhook.
     *
     * @var Status $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Status')]
    public Status $status;

    /**
     * The delivery url of the webhook endpoint.
     *
     * @var string $deliveryUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('delivery_url')]
    public string $deliveryUrl;

    /**
     * The list of subscribed events for this webhook. [`*`] indicates that all events are enabled.
     *
     * @var array<WebhookEventType> $events
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('events')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\WebhookEventType>')]
    public array $events;

    /**
     * A description of the object.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * @param  UnifiedApiId  $unifiedApi
     * @param  Status  $status
     * @param  string  $deliveryUrl
     * @param  array<WebhookEventType>  $events
     * @param  ?string  $description
     * @phpstan-pure
     */
    public function __construct(UnifiedApiId $unifiedApi, Status $status, string $deliveryUrl, array $events, ?string $description = null)
    {
        $this->unifiedApi = $unifiedApi;
        $this->status = $status;
        $this->deliveryUrl = $deliveryUrl;
        $this->events = $events;
        $this->description = $description;
    }
}