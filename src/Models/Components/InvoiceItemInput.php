<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Brick\DateTime\LocalDate;
class InvoiceItemInput
{
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
     * @var ?InvoiceItemSalesDetails $salesDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sales_details')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\InvoiceItemSalesDetails|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?InvoiceItemSalesDetails $salesDetails = null;

    /**
     *
     * @var ?InvoiceItemPurchaseDetails $purchaseDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('purchase_details')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\InvoiceItemPurchaseDetails|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?InvoiceItemPurchaseDetails $purchaseDetails = null;

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
     * @var ?LinkedLedgerAccountInput $assetAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('asset_account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedLedgerAccountInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedLedgerAccountInput $assetAccount = null;

    /**
     *
     * @var ?LinkedLedgerAccountInput $incomeAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('income_account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedLedgerAccountInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedLedgerAccountInput $incomeAccount = null;

    /**
     *
     * @var ?LinkedLedgerAccountInput $expenseAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expense_account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedLedgerAccountInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedLedgerAccountInput $expenseAccount = null;

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
     * A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object.
     *
     * @var ?string $rowVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('row_version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $rowVersion = null;

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
     * @param  ?InvoiceItemSalesDetails  $salesDetails
     * @param  ?InvoiceItemPurchaseDetails  $purchaseDetails
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
     * @param  ?LinkedLedgerAccountInput  $assetAccount
     * @param  ?LinkedLedgerAccountInput  $incomeAccount
     * @param  ?LinkedLedgerAccountInput  $expenseAccount
     * @param  ?DeprecatedLinkedTrackingCategory  $trackingCategory
     * @param  ?array<LinkedTrackingCategory>  $trackingCategories
     * @param  ?bool  $active
     * @param  ?string  $rowVersion
     */
    public function __construct(?InvoiceItemSalesDetails $salesDetails = null, ?InvoiceItemPurchaseDetails $purchaseDetails = null, ?array $passThrough = null, ?string $name = null, ?string $description = null, ?string $code = null, ?bool $sold = null, ?bool $purchased = null, ?bool $tracked = null, ?bool $taxable = null, ?LocalDate $inventoryDate = null, ?InvoiceItemTypeType $type = null, ?float $quantity = null, ?float $unitPrice = null, ?LinkedLedgerAccountInput $assetAccount = null, ?LinkedLedgerAccountInput $incomeAccount = null, ?LinkedLedgerAccountInput $expenseAccount = null, ?DeprecatedLinkedTrackingCategory $trackingCategory = null, ?array $trackingCategories = null, ?bool $active = null, ?string $rowVersion = null)
    {
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
        $this->rowVersion = $rowVersion;
    }
}