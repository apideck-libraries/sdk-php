<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Brick\DateTime\LocalDate;
class InvoiceItem
{
    /**
     * The ID of the item.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Item name
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * A short description of the item
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * User defined item code
     *
     * @var ?string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $code = null;

    /**
     * Item will be available on sales transactions
     *
     * @var ?bool $sold
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sold')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $sold = null;

    /**
     * Item is available for purchase transactions
     *
     * @var ?bool $purchased
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('purchased')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $purchased = null;

    /**
     * Item is inventoried
     *
     * @var ?bool $tracked
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tracked')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $tracked = null;

    /**
     * If true, transactions for this item are taxable
     *
     * @var ?bool $taxable
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('taxable')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $taxable = null;

    /**
     * The date of opening balance if inventory item is tracked - YYYY-MM-DD.
     *
     * @var ?LocalDate $inventoryDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('inventory_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LocalDate $inventoryDate = null;

    /**
     * Item type
     *
     * @var ?InvoiceItemTypeType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\InvoiceItemTypeType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?InvoiceItemTypeType $type = null;

    /**
     *
     * @var ?SalesDetails $salesDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sales_details')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\SalesDetails|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SalesDetails $salesDetails = null;

    /**
     *
     * @var ?PurchaseDetails $purchaseDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('purchase_details')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\PurchaseDetails|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PurchaseDetails $purchaseDetails = null;

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
     *
     * @var ?LinkedLedgerAccount $assetAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('asset_account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedLedgerAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedLedgerAccount $assetAccount = null;

    /**
     *
     * @var ?LinkedLedgerAccount $incomeAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('income_account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedLedgerAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedLedgerAccount $incomeAccount = null;

    /**
     *
     * @var ?LinkedLedgerAccount $expenseAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expense_account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedLedgerAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedLedgerAccount $expenseAccount = null;

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
     *
     * @var ?bool $active
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $active = null;

    /**
     * When custom mappings are configured on the resource, the result is included here.
     *
     * @var ?CustomMappings $customMappings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_mappings')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\CustomMappings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomMappings $customMappings = null;

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
     * The date and time when the object was last updated.
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * The date and time when the object was created.
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources.
     *
     * @var ?array<PassThroughBody> $passThrough
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pass_through')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\PassThroughBody>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $passThrough = null;

    /**
     * @param  ?string  $id
     * @param  ?SalesDetails  $salesDetails
     * @param  ?PurchaseDetails  $purchaseDetails
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $name
     * @param  ?string  $description
     * @param  ?string  $code
     * @param  ?bool  $sold
     * @param  ?bool  $purchased
     * @param  ?bool  $tracked
     * @param  ?bool  $taxable
     * @param  ?LocalDate  $inventoryDate
     * @param  ?InvoiceItemTypeType  $type
     * @param  ?float  $quantity
     * @param  ?float  $unitPrice
     * @param  ?LinkedLedgerAccount  $assetAccount
     * @param  ?LinkedLedgerAccount  $incomeAccount
     * @param  ?LinkedLedgerAccount  $expenseAccount
     * @param  ?DeprecatedLinkedTrackingCategory  $trackingCategory
     * @param  ?array<LinkedTrackingCategory>  $trackingCategories
     * @param  ?bool  $active
     * @param  ?CustomMappings  $customMappings
     * @param  ?string  $rowVersion
     * @param  ?string  $updatedBy
     * @param  ?string  $createdBy
     * @param  ?\DateTime  $updatedAt
     * @param  ?\DateTime  $createdAt
     */
    public function __construct(?string $id = null, ?SalesDetails $salesDetails = null, ?PurchaseDetails $purchaseDetails = null, ?array $passThrough = null, ?string $name = null, ?string $description = null, ?string $code = null, ?bool $sold = null, ?bool $purchased = null, ?bool $tracked = null, ?bool $taxable = null, ?LocalDate $inventoryDate = null, ?InvoiceItemTypeType $type = null, ?float $quantity = null, ?float $unitPrice = null, ?LinkedLedgerAccount $assetAccount = null, ?LinkedLedgerAccount $incomeAccount = null, ?LinkedLedgerAccount $expenseAccount = null, ?DeprecatedLinkedTrackingCategory $trackingCategory = null, ?array $trackingCategories = null, ?bool $active = null, ?CustomMappings $customMappings = null, ?string $rowVersion = null, ?string $updatedBy = null, ?string $createdBy = null, ?\DateTime $updatedAt = null, ?\DateTime $createdAt = null)
    {
        $this->id = $id;
        $this->salesDetails = $salesDetails;
        $this->purchaseDetails = $purchaseDetails;
        $this->passThrough = $passThrough;
        $this->name = $name;
        $this->description = $description;
        $this->code = $code;
        $this->sold = $sold;
        $this->purchased = $purchased;
        $this->tracked = $tracked;
        $this->taxable = $taxable;
        $this->inventoryDate = $inventoryDate;
        $this->type = $type;
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
        $this->assetAccount = $assetAccount;
        $this->incomeAccount = $incomeAccount;
        $this->expenseAccount = $expenseAccount;
        $this->trackingCategory = $trackingCategory;
        $this->trackingCategories = $trackingCategories;
        $this->active = $active;
        $this->customMappings = $customMappings;
        $this->rowVersion = $rowVersion;
        $this->updatedBy = $updatedBy;
        $this->createdBy = $createdBy;
        $this->updatedAt = $updatedAt;
        $this->createdAt = $createdAt;
    }
}