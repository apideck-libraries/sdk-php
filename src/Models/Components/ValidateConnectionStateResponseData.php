<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class ValidateConnectionStateResponseData
{
    /**
     * The unique identifier of the connection.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * [Connection state flow](#section/Connection-state)
     *
     * @var ?ConnectionState $state
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('state')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ConnectionState|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ConnectionState $state = null;

    /**
     * @param  ?string  $id
     * @param  ?ConnectionState  $state
     */
    public function __construct(?string $id = null, ?ConnectionState $state = null)
    {
        $this->id = $id;
        $this->state = $state;
    }
}