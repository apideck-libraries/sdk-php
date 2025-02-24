<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** UpdateWebhookResponse - Webhooks */
class UpdateWebhookResponse
{
    /**
     * HTTP Response Status Code
     *
     * @var int $statusCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status_code')]
    public int $statusCode;

    /**
     * HTTP Response Status
     *
     * @var string $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    public string $status;

    /**
     *
     * @var Webhook $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Webhook')]
    public Webhook $data;

    /**
     * Raw response from the integration when raw=true query param is provided
     *
     * @var ?array<string, mixed> $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('_raw')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     * @param  int  $statusCode
     * @param  string  $status
     * @param  Webhook  $data
     * @param  ?array<string, mixed>  $raw
     * @phpstan-pure
     */
    public function __construct(int $statusCode, string $status, Webhook $data, ?array $raw = null)
    {
        $this->statusCode = $statusCode;
        $this->status = $status;
        $this->data = $data;
        $this->raw = $raw;
    }
}