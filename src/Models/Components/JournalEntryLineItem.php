<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class JournalEntryLineItem
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
     * A unique identifier for an object.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?LinkedTaxRate $taxRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_rate')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedTaxRate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedTaxRate $taxRate = null;

    /**
     *
     * @var ?LinkedLedgerAccount $ledgerAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ledger_account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedLedgerAccount|null')]
    public ?LinkedLedgerAccount $ledgerAccount;

    /**
     * A unique identifier for an object.
     *
     * @var ?string $departmentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('department_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $departmentId = null;

    /**
     * A unique identifier for an object.
     *
     * @var ?string $locationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $locationId = null;

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
     * @var ?LinkedCustomer $customer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedCustomer|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedCustomer $customer = null;

    /**
     * The supplier this entity is linked to.
     *
     * @var ?LinkedSupplier $supplier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('supplier')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedSupplier|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedSupplier $supplier = null;

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
     * @param  ?string  $id
     * @param  ?LinkedTaxRate  $taxRate
     * @param  ?LinkedLedgerAccount  $ledgerAccount
     * @param  ?string  $departmentId
     * @param  ?string  $locationId
     * @param  ?string  $description
     * @param  ?float  $taxAmount
     * @param  ?float  $subTotal
     * @param  ?float  $totalAmount
     * @param  ?DeprecatedLinkedTrackingCategory  $trackingCategory
     * @param  ?array<LinkedTrackingCategory>  $trackingCategories
     * @param  ?LinkedCustomer  $customer
     * @param  ?LinkedSupplier  $supplier
     * @param  ?int  $lineNumber
     * @phpstan-pure
     */
    public function __construct(JournalEntryLineItemType $type, ?string $id = null, ?LinkedTaxRate $taxRate = null, ?LinkedLedgerAccount $ledgerAccount = null, ?string $departmentId = null, ?string $locationId = null, ?string $description = null, ?float $taxAmount = null, ?float $subTotal = null, ?float $totalAmount = null, ?DeprecatedLinkedTrackingCategory $trackingCategory = null, ?array $trackingCategories = null, ?LinkedCustomer $customer = null, ?LinkedSupplier $supplier = null, ?int $lineNumber = null)
    {
        $this->type = $type;
        $this->id = $id;
        $this->taxRate = $taxRate;
        $this->ledgerAccount = $ledgerAccount;
        $this->departmentId = $departmentId;
        $this->locationId = $locationId;
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