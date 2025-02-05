<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** Price - Price of the message. */
class Price
{
    /**
     *
     * @var ?string $perUnit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('per_unit')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $perUnit = null;

    /**
     *
     * @var ?string $totalAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $totalAmount = null;

    /**
     * Indicates the associated currency for an amount of money. Values correspond to [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217).
     *
     * @var ?Currency $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Currency|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Currency $currency = null;

    /**
     * @param  ?string  $perUnit
     * @param  ?string  $totalAmount
     * @param  ?Currency  $currency
     * @phpstan-pure
     */
    public function __construct(?string $perUnit = null, ?string $totalAmount = null, ?Currency $currency = null)
    {
        $this->perUnit = $perUnit;
        $this->totalAmount = $totalAmount;
        $this->currency = $currency;
    }
}