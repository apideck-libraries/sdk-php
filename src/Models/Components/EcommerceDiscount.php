<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** EcommerceDiscount - An object representing a discount applied to an ecommerce order or product. */
class EcommerceDiscount
{
    /**
     * The code used to apply the discount.
     *
     * @var ?string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $code = null;

    /**
     * The fixed amount of the discount.
     *
     * @var ?string $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $amount = null;

    /**
     * The percentage of the discount.
     *
     * @var ?string $percentage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('percentage')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $percentage = null;

    /**
     * @param  ?string  $code
     * @param  ?string  $amount
     * @param  ?string  $percentage
     * @phpstan-pure
     */
    public function __construct(?string $code = null, ?string $amount = null, ?string $percentage = null)
    {
        $this->code = $code;
        $this->amount = $amount;
        $this->percentage = $percentage;
    }
}