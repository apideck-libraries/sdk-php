<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class Components
{
    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?float $rate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('rate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $rate = null;

    /**
     *
     * @var ?bool $compound
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('compound')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $compound = null;

    /**
     * @param  ?string  $name
     * @param  ?string  $id
     * @param  ?float  $rate
     * @param  ?bool  $compound
     * @phpstan-pure
     */
    public function __construct(?string $name = null, ?string $id = null, ?float $rate = null, ?bool $compound = null)
    {
        $this->name = $name;
        $this->id = $id;
        $this->rate = $rate;
        $this->compound = $compound;
    }
}