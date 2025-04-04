<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class InvoiceLineItem
{
    /**
     * Row ID
     *
     * @var ?string $rowId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('row_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $rowId = null;

    /**
     *
     * @var ?LinkedInvoiceItem $item
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('item')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedInvoiceItem|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedInvoiceItem $item = null;

    /**
     *
     * @var ?LinkedTaxRate $taxRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_rate')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedTaxRate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedTaxRate $taxRate = null;

    /**
     * $customFields
     *
     * @var ?array<CustomField> $customFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\CustomField>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $customFields = null;

    /**
     * A unique identifier for an object.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * User defined item code
     *
     * @var ?string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $code = null;

    /**
     * Line number of the resource
     *
     * @var ?int $lineNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('line_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $lineNumber = null;

    /**
     * User defined description
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * Item type
     *
     * @var ?InvoiceLineItemType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\InvoiceLineItemType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?InvoiceLineItemType $type = null;

    /**
     * Tax amount
     *
     * @var ?float $taxAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $taxAmount = null;

    /**
     * Total amount of the line item
     *
     * @var ?float $totalAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $totalAmount = null;

    /**
     *
     * @var ?float $quantity
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('quantity')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $quantity = null;

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
     * Discount percentage applied to the line item when supported downstream.
     *
     * @var ?float $discountPercentage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discount_percentage')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $discountPercentage = null;

    /**
     * Discount amount applied to the line item when supported downstream.
     *
     * @var ?float $discountAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discount_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $discountAmount = null;

    /**
     * The ID of the location
     *
     * @var ?string $locationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $locationId = null;

    /**
     * The ID of the department
     *
     * @var ?string $departmentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('department_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $departmentId = null;

    /**
     * A list of linked tracking categories.
     *
     * @var ?array<?LinkedTrackingCategory> $trackingCategories
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tracking_categories')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\LinkedTrackingCategory|null>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $trackingCategories = null;

    /**
     *
     * @var ?LinkedLedgerAccount $ledgerAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ledger_account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedLedgerAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedLedgerAccount $ledgerAccount = null;

    /**
     * A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object.
     *
     * @var ?string $rowVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('row_version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $rowVersion = null;

    /**
     * The user who last updated the object.
     *
     * @var ?string $updatedBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_by')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $updatedBy = null;

    /**
     * The user who created the object.
     *
     * @var ?string $createdBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_by')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdBy = null;

    /**
     * The date and time when the object was created.
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * The date and time when the object was last updated.
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?string  $rowId
     * @param  ?LinkedInvoiceItem  $item
     * @param  ?LinkedTaxRate  $taxRate
     * @param  ?array<CustomField>  $customFields
     * @param  ?string  $id
     * @param  ?string  $code
     * @param  ?int  $lineNumber
     * @param  ?string  $description
     * @param  ?InvoiceLineItemType  $type
     * @param  ?float  $taxAmount
     * @param  ?float  $totalAmount
     * @param  ?float  $quantity
     * @param  ?float  $unitPrice
     * @param  ?string  $unitOfMeasure
     * @param  ?float  $discountPercentage
     * @param  ?float  $discountAmount
     * @param  ?string  $locationId
     * @param  ?string  $departmentId
     * @param  ?array<?LinkedTrackingCategory>  $trackingCategories
     * @param  ?LinkedLedgerAccount  $ledgerAccount
     * @param  ?string  $rowVersion
     * @param  ?string  $updatedBy
     * @param  ?string  $createdBy
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(?string $rowId = null, ?LinkedInvoiceItem $item = null, ?LinkedTaxRate $taxRate = null, ?array $customFields = null, ?string $id = null, ?string $code = null, ?int $lineNumber = null, ?string $description = null, ?InvoiceLineItemType $type = null, ?float $taxAmount = null, ?float $totalAmount = null, ?float $quantity = null, ?float $unitPrice = null, ?string $unitOfMeasure = null, ?float $discountPercentage = null, ?float $discountAmount = null, ?string $locationId = null, ?string $departmentId = null, ?array $trackingCategories = null, ?LinkedLedgerAccount $ledgerAccount = null, ?string $rowVersion = null, ?string $updatedBy = null, ?string $createdBy = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->rowId = $rowId;
        $this->item = $item;
        $this->taxRate = $taxRate;
        $this->customFields = $customFields;
        $this->id = $id;
        $this->code = $code;
        $this->lineNumber = $lineNumber;
        $this->description = $description;
        $this->type = $type;
        $this->taxAmount = $taxAmount;
        $this->totalAmount = $totalAmount;
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
        $this->unitOfMeasure = $unitOfMeasure;
        $this->discountPercentage = $discountPercentage;
        $this->discountAmount = $discountAmount;
        $this->locationId = $locationId;
        $this->departmentId = $departmentId;
        $this->trackingCategories = $trackingCategories;
        $this->ledgerAccount = $ledgerAccount;
        $this->rowVersion = $rowVersion;
        $this->updatedBy = $updatedBy;
        $this->createdBy = $createdBy;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}