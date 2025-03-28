<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class LinkedFolder
{
    /**
     * A unique identifier for an object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The name of the folder
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * @param  string  $id
     * @param  ?string  $name
     * @phpstan-pure
     */
    public function __construct(string $id, ?string $name = null)
    {
        $this->id = $id;
        $this->name = $name;
    }
}