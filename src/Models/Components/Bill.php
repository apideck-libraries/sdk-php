<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Brick\DateTime\LocalDate;
class Bill
{
    /**
     * A unique identifier for an object.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Date bill was issued - YYYY-MM-DD.
     *
     * @var ?LocalDate $billDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bill_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LocalDate $billDate = null;

    /**
     * The due date is the date on which a payment is scheduled to be received - YYYY-MM-DD.
     *
     * @var ?LocalDate $dueDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('due_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LocalDate $dueDate = null;

    /**
     * $lineItems
     *
     * @var ?array<BillLineItem> $lineItems
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('line_items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\BillLineItem>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $lineItems = null;

    /**
     *
     * @var ?BankAccount $bankAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bank_account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\BankAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BankAccount $bankAccount = null;

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
     * The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources.
     *
     * @var ?array<PassThroughBody> $passThrough
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pass_through')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\PassThroughBody>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $passThrough = null;

    /**
     * The third-party API ID of original entity
     *
     * @var ?string $downstreamId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('downstream_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $downstreamId = null;

    /**
     * Reference to supplier bill number
     *
     * @var ?string $billNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bill_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $billNumber = null;

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
     * The company or subsidiary id the transaction belongs to
     *
     * @var ?string $companyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyId = null;

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
     * Currency Exchange Rate at the time entity was recorded/generated.
     *
     * @var ?float $currencyRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency_rate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $currencyRate = null;

    /**
     * Amounts are including tax
     *
     * @var ?bool $taxInclusive
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_inclusive')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $taxInclusive = null;

    /**
     * The paid date is the date on which a payment was sent to the supplier - YYYY-MM-DD.
     *
     * @var ?LocalDate $paidDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paid_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LocalDate $paidDate = null;

    /**
     * A PO Number uniquely identifies a purchase order and is generally defined by the buyer. The buyer will match the PO number in the invoice to the Purchase Order.
     *
     * @var ?string $poNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('po_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $poNumber = null;

    /**
     * Optional bill reference.
     *
     * @var ?string $reference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reference = null;

    /**
     * Terms of payment.
     *
     * @var ?string $terms
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('terms')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $terms = null;

    /**
     * Balance of bill due.
     *
     * @var ?float $balance
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('balance')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $balance = null;

    /**
     * Amount of deposit made to this bill.
     *
     * @var ?float $deposit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deposit')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $deposit = null;

    /**
     * Sub-total amount, normally before tax.
     *
     * @var ?float $subTotal
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sub_total')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $subTotal = null;

    /**
     * Total tax amount applied to this bill.
     *
     * @var ?float $totalTax
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_tax')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $totalTax = null;

    /**
     * Total amount of bill, including tax.
     *
     * @var ?float $total
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $total = null;

    /**
     * Applicable tax id/code override if tax is not supplied on a line item basis.
     *
     * @var ?string $taxCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $taxCode = null;

    /**
     *
     * @var ?string $notes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('notes')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $notes = null;

    /**
     * Invoice status
     *
     * @var ?BillStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\BillStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BillStatus $status = null;

    /**
     *
     * @var ?LinkedLedgerAccount $ledgerAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ledger_account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedLedgerAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedLedgerAccount $ledgerAccount = null;

    /**
     * Payment method used for the transaction, such as cash, credit card, bank transfer, or check
     *
     * @var ?string $paymentMethod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_method')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $paymentMethod = null;

    /**
     * The channel through which the transaction is processed.
     *
     * @var ?string $channel
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('channel')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $channel = null;

    /**
     * language code according to ISO 639-1. For the United States - EN
     *
     * @var ?string $language
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('language')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $language = null;

    /**
     * Indicates if accounting by row is used (true) or not (false). Accounting by row means that a separate ledger transaction is created for each row.
     *
     * @var ?bool $accountingByRow
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accounting_by_row')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $accountingByRow = null;

    /**
     * Discount percentage applied to this transaction.
     *
     * @var ?float $discountPercentage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discount_percentage')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $discountPercentage = null;

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
     * A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object.
     *
     * @var ?string $rowVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('row_version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $rowVersion = null;

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
     * Accounting period
     *
     * @var ?string $accountingPeriod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accounting_period')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountingPeriod = null;

    /**
     * @param  ?string  $id
     * @param  ?LocalDate  $billDate
     * @param  ?LocalDate  $dueDate
     * @param  ?array<BillLineItem>  $lineItems
     * @param  ?BankAccount  $bankAccount
     * @param  ?array<CustomField>  $customFields
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $downstreamId
     * @param  ?string  $billNumber
     * @param  ?LinkedSupplier  $supplier
     * @param  ?string  $companyId
     * @param  ?Currency  $currency
     * @param  ?float  $currencyRate
     * @param  ?bool  $taxInclusive
     * @param  ?LocalDate  $paidDate
     * @param  ?string  $poNumber
     * @param  ?string  $reference
     * @param  ?string  $terms
     * @param  ?float  $balance
     * @param  ?float  $deposit
     * @param  ?float  $subTotal
     * @param  ?float  $totalTax
     * @param  ?float  $total
     * @param  ?string  $taxCode
     * @param  ?string  $notes
     * @param  ?BillStatus  $status
     * @param  ?LinkedLedgerAccount  $ledgerAccount
     * @param  ?string  $paymentMethod
     * @param  ?string  $channel
     * @param  ?string  $language
     * @param  ?bool  $accountingByRow
     * @param  ?float  $discountPercentage
     * @param  ?array<LinkedTrackingCategory>  $trackingCategories
     * @param  ?string  $updatedBy
     * @param  ?string  $createdBy
     * @param  ?\DateTime  $updatedAt
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $rowVersion
     * @param  ?CustomMappings  $customMappings
     * @param  ?string  $accountingPeriod
     */
    public function __construct(?string $id = null, ?LocalDate $billDate = null, ?LocalDate $dueDate = null, ?array $lineItems = null, ?BankAccount $bankAccount = null, ?array $customFields = null, ?array $passThrough = null, ?string $downstreamId = null, ?string $billNumber = null, ?LinkedSupplier $supplier = null, ?string $companyId = null, ?Currency $currency = null, ?float $currencyRate = null, ?bool $taxInclusive = null, ?LocalDate $paidDate = null, ?string $poNumber = null, ?string $reference = null, ?string $terms = null, ?float $balance = null, ?float $deposit = null, ?float $subTotal = null, ?float $totalTax = null, ?float $total = null, ?string $taxCode = null, ?string $notes = null, ?BillStatus $status = null, ?LinkedLedgerAccount $ledgerAccount = null, ?string $paymentMethod = null, ?string $channel = null, ?string $language = null, ?bool $accountingByRow = null, ?float $discountPercentage = null, ?array $trackingCategories = null, ?string $updatedBy = null, ?string $createdBy = null, ?\DateTime $updatedAt = null, ?\DateTime $createdAt = null, ?string $rowVersion = null, ?CustomMappings $customMappings = null, ?string $accountingPeriod = null)
    {
        $this->id = $id;
        $this->billDate = $billDate;
        $this->dueDate = $dueDate;
        $this->lineItems = $lineItems;
        $this->bankAccount = $bankAccount;
        $this->customFields = $customFields;
        $this->passThrough = $passThrough;
        $this->downstreamId = $downstreamId;
        $this->billNumber = $billNumber;
        $this->supplier = $supplier;
        $this->companyId = $companyId;
        $this->currency = $currency;
        $this->currencyRate = $currencyRate;
        $this->taxInclusive = $taxInclusive;
        $this->paidDate = $paidDate;
        $this->poNumber = $poNumber;
        $this->reference = $reference;
        $this->terms = $terms;
        $this->balance = $balance;
        $this->deposit = $deposit;
        $this->subTotal = $subTotal;
        $this->totalTax = $totalTax;
        $this->total = $total;
        $this->taxCode = $taxCode;
        $this->notes = $notes;
        $this->status = $status;
        $this->ledgerAccount = $ledgerAccount;
        $this->paymentMethod = $paymentMethod;
        $this->channel = $channel;
        $this->language = $language;
        $this->accountingByRow = $accountingByRow;
        $this->discountPercentage = $discountPercentage;
        $this->trackingCategories = $trackingCategories;
        $this->updatedBy = $updatedBy;
        $this->createdBy = $createdBy;
        $this->updatedAt = $updatedAt;
        $this->createdAt = $createdAt;
        $this->rowVersion = $rowVersion;
        $this->customMappings = $customMappings;
        $this->accountingPeriod = $accountingPeriod;
    }
}