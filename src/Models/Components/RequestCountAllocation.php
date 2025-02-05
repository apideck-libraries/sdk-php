<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class RequestCountAllocation
{
    /**
     *
     * @var ?float $unify
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unify')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $unify = null;

    /**
     *
     * @var ?float $proxy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('proxy')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $proxy = null;

    /**
     *
     * @var ?float $vault
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('vault')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $vault = null;

    /**
     * @param  ?float  $unify
     * @param  ?float  $proxy
     * @param  ?float  $vault
     * @phpstan-pure
     */
    public function __construct(?float $unify = null, ?float $proxy = null, ?float $vault = null)
    {
        $this->unify = $unify;
        $this->proxy = $proxy;
        $this->vault = $vault;
    }
}