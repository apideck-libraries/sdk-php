<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class CreditNoteInput
{
    /**
     * Amount of transaction
     *
     * @var float $totalAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_amount')]
    public float $totalAmount;

    /**
     * Status of credit notes
     *
     * @var ?CreditNoteStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\CreditNoteStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreditNoteStatus $status = null;

    /**
     * Date credit note issued - YYYY:MM::DDThh:mm:ss.sTZD
     *
     * @var ?\DateTime $dateIssued
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('date_issued')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $dateIssued = null;

    /**
     * Type of payment
     *
     * @var ?CreditNoteType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\CreditNoteType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreditNoteType $type = null;

    /**
     * $lineItems
     *
     * @var ?array<InvoiceLineItemInput> $lineItems
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('line_items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\InvoiceLineItemInput>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $lineItems = null;

    /**
     * $allocations
     *
     * @var ?array<AllocationInput> $allocations
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allocations')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\AllocationInput>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $allocations = null;

    /**
     *
     * @var ?Address $billingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Address|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Address $billingAddress = null;

    /**
     *
     * @var ?Address $shippingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('shipping_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Address|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Address $shippingAddress = null;

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
     * Credit note number.
     *
     * @var ?string $number
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $number = null;

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
     * Sub-total amount, normally before tax.
     *
     * @var ?float $subTotal
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sub_total')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $subTotal = null;

    /**
     * Total tax amount applied to this invoice.
     *
     * @var ?float $totalTax
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_tax')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $totalTax = null;

    /**
     * Applicable tax id/code override if tax is not supplied on a line item basis.
     *
     * @var ?string $taxCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $taxCode = null;

    /**
     * The balance reflecting any payments made against the transaction.
     *
     * @var ?float $balance
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('balance')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $balance = null;

    /**
     * Indicates the total credit amount still available to apply towards the payment.
     *
     * @var ?float $remainingCredit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remaining_credit')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $remainingCredit = null;

    /**
     * Optional reference message ie: Debit remittance detail.
     *
     * @var ?string $reference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reference = null;

    /**
     * Date credit note paid - YYYY:MM::DDThh:mm:ss.sTZD
     *
     * @var ?\DateTime $datePaid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('date_paid')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $datePaid = null;

    /**
     *
     * @var ?LinkedLedgerAccountInput $account
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedLedgerAccountInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedLedgerAccountInput $account = null;

    /**
     * Optional note to be associated with the credit note.
     *
     * @var ?string $note
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('note')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $note = null;

    /**
     * Optional terms to be associated with the credit note.
     *
     * @var ?string $terms
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('terms')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $terms = null;

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
     * A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object.
     *
     * @var ?string $rowVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('row_version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $rowVersion = null;

    /**
     * @param  float  $totalAmount
     * @param  ?CreditNoteStatus  $status
     * @param  ?\DateTime  $dateIssued
     * @param  ?CreditNoteType  $type
     * @param  ?array<InvoiceLineItemInput>  $lineItems
     * @param  ?array<AllocationInput>  $allocations
     * @param  ?Address  $billingAddress
     * @param  ?Address  $shippingAddress
     * @param  ?array<CustomField>  $customFields
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $number
     * @param  ?LinkedCustomerInput  $customer
     * @param  ?string  $companyId
     * @param  ?Currency  $currency
     * @param  ?float  $currencyRate
     * @param  ?bool  $taxInclusive
     * @param  ?float  $subTotal
     * @param  ?float  $totalTax
     * @param  ?string  $taxCode
     * @param  ?float  $balance
     * @param  ?float  $remainingCredit
     * @param  ?string  $reference
     * @param  ?\DateTime  $datePaid
     * @param  ?LinkedLedgerAccountInput  $account
     * @param  ?string  $note
     * @param  ?string  $terms
     * @param  ?array<?LinkedTrackingCategory>  $trackingCategories
     * @param  ?string  $rowVersion
     * @phpstan-pure
     */
    public function __construct(float $totalAmount, ?CreditNoteStatus $status = null, ?\DateTime $dateIssued = null, ?CreditNoteType $type = null, ?array $lineItems = null, ?array $allocations = null, ?Address $billingAddress = null, ?Address $shippingAddress = null, ?array $customFields = null, ?array $passThrough = null, ?string $number = null, ?LinkedCustomerInput $customer = null, ?string $companyId = null, ?Currency $currency = null, ?float $currencyRate = null, ?bool $taxInclusive = null, ?float $subTotal = null, ?float $totalTax = null, ?string $taxCode = null, ?float $balance = null, ?float $remainingCredit = null, ?string $reference = null, ?\DateTime $datePaid = null, ?LinkedLedgerAccountInput $account = null, ?string $note = null, ?string $terms = null, ?array $trackingCategories = null, ?string $rowVersion = null)
    {
        $this->totalAmount = $totalAmount;
        $this->status = $status;
        $this->dateIssued = $dateIssued;
        $this->type = $type;
        $this->lineItems = $lineItems;
        $this->allocations = $allocations;
        $this->billingAddress = $billingAddress;
        $this->shippingAddress = $shippingAddress;
        $this->customFields = $customFields;
        $this->passThrough = $passThrough;
        $this->number = $number;
        $this->customer = $customer;
        $this->companyId = $companyId;
        $this->currency = $currency;
        $this->currencyRate = $currencyRate;
        $this->taxInclusive = $taxInclusive;
        $this->subTotal = $subTotal;
        $this->totalTax = $totalTax;
        $this->taxCode = $taxCode;
        $this->balance = $balance;
        $this->remainingCredit = $remainingCredit;
        $this->reference = $reference;
        $this->datePaid = $datePaid;
        $this->account = $account;
        $this->note = $note;
        $this->terms = $terms;
        $this->trackingCategories = $trackingCategories;
        $this->rowVersion = $rowVersion;
    }
}