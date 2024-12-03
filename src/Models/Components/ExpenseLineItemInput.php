<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class ExpenseLineItemInput
{
    /**
     * A list of linked tracking categories.
     *
     * @var ?array<LinkedTrackingCategory> $trackingCategories
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tracking_categories')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\LinkedTrackingCategory>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $trackingCategories = null;

    /**
     * The unique identifier for the ledger account.
     *
     * @var ?string $accountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountId = null;

    /**
     * The ID of the customer this expense item is linked to.
     *
     * @var ?string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerId = null;

    /**
     * The ID of the department this expense item is linked to.
     *
     * @var ?string $departmentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('department_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $departmentId = null;

    /**
     * The ID of the location this expense item is linked to.
     *
     * @var ?string $locationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $locationId = null;

    /**
     *
     * @var ?LinkedTaxRateInput $taxRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_rate')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedTaxRateInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedTaxRateInput $taxRate = null;

    /**
     * The expense line item description
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * The total amount of the expense line item.
     *
     * @var ?float $totalAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_amount')]
    public ?float $totalAmount;

    /**
     * Boolean that indicates if the line item is billable or not.
     *
     * @var ?bool $billable
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billable')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $billable = null;

    /**
     * @param  ?string  $accountId
     * @param  ?string  $customerId
     * @param  ?string  $departmentId
     * @param  ?string  $locationId
     * @param  ?LinkedTaxRateInput  $taxRate
     * @param  ?float  $totalAmount
     * @param  ?bool  $billable
     * @param  ?array<LinkedTrackingCategory>  $trackingCategories
     * @param  ?string  $description
     */
    public function __construct(?string $accountId = null, ?string $customerId = null, ?string $departmentId = null, ?string $locationId = null, ?LinkedTaxRateInput $taxRate = null, ?float $totalAmount = null, ?bool $billable = null, ?array $trackingCategories = null, ?string $description = null)
    {
        $this->accountId = $accountId;
        $this->customerId = $customerId;
        $this->departmentId = $departmentId;
        $this->locationId = $locationId;
        $this->taxRate = $taxRate;
        $this->totalAmount = $totalAmount;
        $this->billable = $billable;
        $this->trackingCategories = $trackingCategories;
        $this->description = $description;
    }
}