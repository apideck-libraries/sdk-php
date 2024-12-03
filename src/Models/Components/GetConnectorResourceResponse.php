<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** GetConnectorResourceResponse - ConnectorResources */
class GetConnectorResourceResponse
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
     * @var ConnectorResource $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ConnectorResource')]
    public ConnectorResource $data;

    /**
     * Response metadata
     *
     * @var ?Meta $meta
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('meta')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Meta|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Meta $meta = null;

    /**
     * Links to navigate to previous or next pages through the API
     *
     * @var ?Links $links
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('links')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Links|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Links $links = null;

    /**
     * @param  int  $statusCode
     * @param  string  $status
     * @param  ConnectorResource  $data
     * @param  ?Meta  $meta
     * @param  ?Links  $links
     */
    public function __construct(int $statusCode, string $status, ConnectorResource $data, ?Meta $meta = null, ?Links $links = null)
    {
        $this->statusCode = $statusCode;
        $this->status = $status;
        $this->data = $data;
        $this->meta = $meta;
        $this->links = $links;
    }
}