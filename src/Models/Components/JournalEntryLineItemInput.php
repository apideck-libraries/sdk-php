<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class JournalEntryLineItemInput
{
    /**
     * Debit entries are considered positive, and credit entries are considered negative.
     *
     * @var JournalEntryLineItemType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\JournalEntryLineItemType')]
    public JournalEntryLineItemType $type;

    /**
     *
     * @var ?LinkedTaxRateInput $taxRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_rate')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedTaxRateInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedTaxRateInput $taxRate = null;

    /**
     *
     * @var ?LinkedLedgerAccountInput $ledgerAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ledger_account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedLedgerAccountInput|null')]
    public ?LinkedLedgerAccountInput $ledgerAccount;

    /**
     * User defined description
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * Tax amount
     *
     * @var ?float $taxAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $taxAmount = null;

    /**
     * Sub-total amount, normally before tax.
     *
     * @var ?float $subTotal
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sub_total')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $subTotal = null;

    /**
     * Debit entries are considered positive, and credit entries are considered negative.
     *
     * @var ?float $totalAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $totalAmount = null;

    /**
     *
     * @var ?DeprecatedLinkedTrackingCategory $trackingCategory
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tracking_category')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\DeprecatedLinkedTrackingCategory|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?DeprecatedLinkedTrackingCategory $trackingCategory = null;

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
     * The customer this entity is linked to.
     *
     * @var ?LinkedCustomerInput $customer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedCustomerInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedCustomerInput $customer = null;

    /**
     * The supplier this entity is linked to.
     *
     * @var ?LinkedSupplierInput $supplier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('supplier')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedSupplierInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedSupplierInput $supplier = null;

    /**
     * Line number of the resource
     *
     * @var ?int $lineNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('line_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $lineNumber = null;

    /**
     * @param  JournalEntryLineItemType  $type
     * @param  ?LinkedTaxRateInput  $taxRate
     * @param  ?LinkedLedgerAccountInput  $ledgerAccount
     * @param  ?string  $description
     * @param  ?float  $taxAmount
     * @param  ?float  $subTotal
     * @param  ?float  $totalAmount
     * @param  ?DeprecatedLinkedTrackingCategory  $trackingCategory
     * @param  ?array<LinkedTrackingCategory>  $trackingCategories
     * @param  ?LinkedCustomerInput  $customer
     * @param  ?LinkedSupplierInput  $supplier
     * @param  ?int  $lineNumber
     */
    public function __construct(JournalEntryLineItemType $type, ?LinkedTaxRateInput $taxRate = null, ?LinkedLedgerAccountInput $ledgerAccount = null, ?string $description = null, ?float $taxAmount = null, ?float $subTotal = null, ?float $totalAmount = null, ?DeprecatedLinkedTrackingCategory $trackingCategory = null, ?array $trackingCategories = null, ?LinkedCustomerInput $customer = null, ?LinkedSupplierInput $supplier = null, ?int $lineNumber = null)
    {
        $this->type = $type;
        $this->taxRate = $taxRate;
        $this->ledgerAccount = $ledgerAccount;
        $this->description = $description;
        $this->taxAmount = $taxAmount;
        $this->subTotal = $subTotal;
        $this->totalAmount = $totalAmount;
        $this->trackingCategory = $trackingCategory;
        $this->trackingCategories = $trackingCategories;
        $this->customer = $customer;
        $this->supplier = $supplier;
        $this->lineNumber = $lineNumber;
    }
}