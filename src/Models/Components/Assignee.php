<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class Assignee
{
    /**
     * A unique identifier for an object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var ?string $username
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('username')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $username = null;

    /**
     * @param  string  $id
     * @param  ?string  $username
     * @phpstan-pure
     */
    public function __construct(string $id, ?string $username = null)
    {
        $this->id = $id;
        $this->username = $username;
    }
}