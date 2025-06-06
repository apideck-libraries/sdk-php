<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class WebhookSubscription
{
    /**
     * The ID of the downstream service
     *
     * @var ?string $downstreamId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('downstream_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $downstreamId = null;

    /**
     * The list of Unify Events this connection is subscribed to
     *
     * @var ?array<string> $unifyEventTypes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unify_event_types')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $unifyEventTypes = null;

    /**
     * The list of downstream Events this connection is subscribed to
     *
     * @var ?array<string> $downstreamEventTypes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('downstream_event_types')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $downstreamEventTypes = null;

    /**
     * The URL the downstream is sending to when the event is triggered
     *
     * @var ?string $executeUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('execute_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $executeUrl = null;

    /**
     * The date and time the webhook subscription was created downstream
     *
     * @var ?string $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdAt = null;

    /**
     * @param  ?string  $downstreamId
     * @param  ?array<string>  $unifyEventTypes
     * @param  ?array<string>  $downstreamEventTypes
     * @param  ?string  $executeUrl
     * @param  ?string  $createdAt
     * @phpstan-pure
     */
    public function __construct(?string $downstreamId = null, ?array $unifyEventTypes = null, ?array $downstreamEventTypes = null, ?string $executeUrl = null, ?string $createdAt = null)
    {
        $this->downstreamId = $downstreamId;
        $this->unifyEventTypes = $unifyEventTypes;
        $this->downstreamEventTypes = $downstreamEventTypes;
        $this->executeUrl = $executeUrl;
        $this->createdAt = $createdAt;
    }
}