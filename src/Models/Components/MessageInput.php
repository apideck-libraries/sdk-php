<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class MessageInput
{
    /**
     * The phone number that initiated the message.
     *
     * @var string $from
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('from')]
    public string $from;

    /**
     * The phone number that received the message.
     *
     * @var string $to
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('to')]
    public string $to;

    /**
     *
     * @var ?string $subject
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subject')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subject = null;

    /**
     * The message text.
     *
     * @var string $body
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('body')]
    public string $body;

    /**
     * Set to sms for SMS messages and mms for MMS messages.
     *
     * @var ?MessageType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\MessageType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?MessageType $type = null;

    /**
     * The scheduled date and time of the message.
     *
     * @var ?\DateTime $scheduledAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scheduled_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $scheduledAt = null;

    /**
     * Define a webhook to receive delivery notifications.
     *
     * @var ?string $webhookUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('webhook_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $webhookUrl = null;

    /**
     * A client reference.
     *
     * @var ?string $reference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reference = null;

    /**
     * The ID of the Messaging Service used with the message. In case of Plivo this links to the Powerpack ID.
     *
     * @var ?string $messagingServiceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('messaging_service_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $messagingServiceId = null;

    /**
     * The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources.
     *
     * @var ?array<PassThroughBody> $passThrough
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pass_through')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\PassThroughBody>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $passThrough = null;

    /**
     * @param  string  $from
     * @param  string  $to
     * @param  string  $body
     * @param  ?string  $subject
     * @param  ?MessageType  $type
     * @param  ?\DateTime  $scheduledAt
     * @param  ?string  $webhookUrl
     * @param  ?string  $reference
     * @param  ?string  $messagingServiceId
     * @param  ?array<PassThroughBody>  $passThrough
     */
    public function __construct(string $from, string $to, string $body, ?string $subject = null, ?MessageType $type = null, ?\DateTime $scheduledAt = null, ?string $webhookUrl = null, ?string $reference = null, ?string $messagingServiceId = null, ?array $passThrough = null)
    {
        $this->from = $from;
        $this->to = $to;
        $this->body = $body;
        $this->subject = $subject;
        $this->type = $type;
        $this->scheduledAt = $scheduledAt;
        $this->webhookUrl = $webhookUrl;
        $this->reference = $reference;
        $this->messagingServiceId = $messagingServiceId;
        $this->passThrough = $passThrough;
    }
}