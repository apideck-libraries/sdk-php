<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class InvoiceItemSalesDetails
{
    /**
     *
     * @var ?float $unitPrice
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unit_price')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $unitPrice = null;

    /**
     * Description of the unit type the item is sold as, ie: kg, hour.
     *
     * @var ?string $unitOfMeasure
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unit_of_measure')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $unitOfMeasure = null;

    /**
     * Amounts are including tax
     *
     * @var ?bool $taxInclusive
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_inclusive')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $taxInclusive = null;

    /**
     *
     * @var ?LinkedTaxRateInput $taxRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_rate')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedTaxRateInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedTaxRateInput $taxRate = null;

    /**
     * @param  ?LinkedTaxRateInput  $taxRate
     * @param  ?float  $unitPrice
     * @param  ?string  $unitOfMeasure
     * @param  ?bool  $taxInclusive
     */
    public function __construct(?LinkedTaxRateInput $taxRate = null, ?float $unitPrice = null, ?string $unitOfMeasure = null, ?bool $taxInclusive = null)
    {
        $this->taxRate = $taxRate;
        $this->unitPrice = $unitPrice;
        $this->unitOfMeasure = $unitOfMeasure;
        $this->taxInclusive = $taxInclusive;
    }
}