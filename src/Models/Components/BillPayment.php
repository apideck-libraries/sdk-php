<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class BillPayment
{
    /**
     * A unique identifier for an object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The total amount of the transaction
     *
     * @var ?float $totalAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_amount')]
    public ?float $totalAmount;

    /**
     * The date of the transaction - YYYY:MM::DDThh:mm:ss.sTZD
     *
     * @var ?\DateTime $transactionDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transaction_date')]
    public ?\DateTime $transactionDate;

    /**
     * Status of payment
     *
     * @var ?PaymentStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\PaymentStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PaymentStatus $status = null;

    /**
     * Type of payment
     *
     * @var ?BillPaymentType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\BillPaymentType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BillPaymentType $type = null;

    /**
     * $allocations
     *
     * @var ?array<Allocations> $allocations
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allocations')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Allocations>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $allocations = null;

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
     * Optional transaction reference message ie: Debit remittance detail.
     *
     * @var ?string $reference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reference = null;

    /**
     * Payment method used for the transaction, such as cash, credit card, bank transfer, or check
     *
     * @var ?string $paymentMethod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_method')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $paymentMethod = null;

    /**
     * Optional reference message returned by payment method on processing
     *
     * @var ?string $paymentMethodReference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_method_reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $paymentMethodReference = null;

    /**
     * A unique identifier for an object.
     *
     * @var ?string $paymentMethodId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_method_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $paymentMethodId = null;

    /**
     *
     * @var ?LinkedLedgerAccount $account
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedLedgerAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedLedgerAccount $account = null;

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
     * Indicates if the transaction has been reconciled.
     *
     * @var ?bool $reconciled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reconciled')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $reconciled = null;

    /**
     * Note associated with the transaction
     *
     * @var ?string $note
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('note')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $note = null;

    /**
     * Number associated with the transaction
     *
     * @var ?string $number
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $number = null;

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
     * Id to be displayed.
     *
     * @var ?string $displayId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $displayId = null;

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
     * @param  string  $id
     * @param  ?float  $totalAmount
     * @param  ?\DateTime  $transactionDate
     * @param  ?PaymentStatus  $status
     * @param  ?BillPaymentType  $type
     * @param  ?array<Allocations>  $allocations
     * @param  ?array<CustomField>  $customFields
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $downstreamId
     * @param  ?Currency  $currency
     * @param  ?float  $currencyRate
     * @param  ?string  $reference
     * @param  ?string  $paymentMethod
     * @param  ?string  $paymentMethodReference
     * @param  ?string  $paymentMethodId
     * @param  ?LinkedLedgerAccount  $account
     * @param  ?LinkedSupplier  $supplier
     * @param  ?string  $companyId
     * @param  ?bool  $reconciled
     * @param  ?string  $note
     * @param  ?string  $number
     * @param  ?array<?LinkedTrackingCategory>  $trackingCategories
     * @param  ?string  $rowVersion
     * @param  ?string  $displayId
     * @param  ?CustomMappings  $customMappings
     * @param  ?string  $updatedBy
     * @param  ?string  $createdBy
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(string $id, ?float $totalAmount = null, ?\DateTime $transactionDate = null, ?PaymentStatus $status = null, ?BillPaymentType $type = null, ?array $allocations = null, ?array $customFields = null, ?array $passThrough = null, ?string $downstreamId = null, ?Currency $currency = null, ?float $currencyRate = null, ?string $reference = null, ?string $paymentMethod = null, ?string $paymentMethodReference = null, ?string $paymentMethodId = null, ?LinkedLedgerAccount $account = null, ?LinkedSupplier $supplier = null, ?string $companyId = null, ?bool $reconciled = null, ?string $note = null, ?string $number = null, ?array $trackingCategories = null, ?string $rowVersion = null, ?string $displayId = null, ?CustomMappings $customMappings = null, ?string $updatedBy = null, ?string $createdBy = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->totalAmount = $totalAmount;
        $this->transactionDate = $transactionDate;
        $this->status = $status;
        $this->type = $type;
        $this->allocations = $allocations;
        $this->customFields = $customFields;
        $this->passThrough = $passThrough;
        $this->downstreamId = $downstreamId;
        $this->currency = $currency;
        $this->currencyRate = $currencyRate;
        $this->reference = $reference;
        $this->paymentMethod = $paymentMethod;
        $this->paymentMethodReference = $paymentMethodReference;
        $this->paymentMethodId = $paymentMethodId;
        $this->account = $account;
        $this->supplier = $supplier;
        $this->companyId = $companyId;
        $this->reconciled = $reconciled;
        $this->note = $note;
        $this->number = $number;
        $this->trackingCategories = $trackingCategories;
        $this->rowVersion = $rowVersion;
        $this->displayId = $displayId;
        $this->customMappings = $customMappings;
        $this->updatedBy = $updatedBy;
        $this->createdBy = $createdBy;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}