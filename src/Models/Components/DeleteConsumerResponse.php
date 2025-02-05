<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** DeleteConsumerResponse - Consumer deleted */
class DeleteConsumerResponse
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
     * @var DeleteConsumerResponseData $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\DeleteConsumerResponseData')]
    public DeleteConsumerResponseData $data;

    /**
     * @param  int  $statusCode
     * @param  string  $status
     * @param  DeleteConsumerResponseData  $data
     * @phpstan-pure
     */
    public function __construct(int $statusCode, string $status, DeleteConsumerResponseData $data)
    {
        $this->statusCode = $statusCode;
        $this->status = $status;
        $this->data = $data;
    }
}