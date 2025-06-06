<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class PaymentInput
{
    /**
     * The total amount of the transaction or record
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
     * @var ?PaymentType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\PaymentType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PaymentType $type = null;

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
     * Type of accounts receivable account.
     *
     * @var ?string $accountsReceivableAccountType
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accounts_receivable_account_type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountsReceivableAccountType = null;

    /**
     * Unique identifier for the account to allocate payment to.
     *
     * @var ?string $accountsReceivableAccountId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accounts_receivable_account_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountsReceivableAccountId = null;

    /**
     *
     * @var ?LinkedLedgerAccountInput $account
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedLedgerAccountInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedLedgerAccountInput $account = null;

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
     * @var ?DeprecatedLinkedSupplierInput $supplier
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('supplier')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\DeprecatedLinkedSupplierInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?DeprecatedLinkedSupplierInput $supplier = null;

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
     * @param  ?float  $totalAmount
     * @param  ?\DateTime  $transactionDate
     * @param  ?PaymentStatus  $status
     * @param  ?PaymentType  $type
     * @param  ?array<AllocationInput>  $allocations
     * @param  ?array<CustomField>  $customFields
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?Currency  $currency
     * @param  ?float  $currencyRate
     * @param  ?string  $reference
     * @param  ?string  $paymentMethod
     * @param  ?string  $paymentMethodReference
     * @param  ?string  $paymentMethodId
     * @param  ?string  $accountsReceivableAccountType
     * @param  ?string  $accountsReceivableAccountId
     * @param  ?LinkedLedgerAccountInput  $account
     * @param  ?LinkedCustomerInput  $customer
     * @param  ?DeprecatedLinkedSupplierInput  $supplier
     * @param  ?string  $companyId
     * @param  ?bool  $reconciled
     * @param  ?string  $note
     * @param  ?string  $number
     * @param  ?array<?LinkedTrackingCategory>  $trackingCategories
     * @param  ?string  $rowVersion
     * @param  ?string  $displayId
     * @phpstan-pure
     */
    public function __construct(?float $totalAmount = null, ?\DateTime $transactionDate = null, ?PaymentStatus $status = null, ?PaymentType $type = null, ?array $allocations = null, ?array $customFields = null, ?array $passThrough = null, ?Currency $currency = null, ?float $currencyRate = null, ?string $reference = null, ?string $paymentMethod = null, ?string $paymentMethodReference = null, ?string $paymentMethodId = null, ?string $accountsReceivableAccountType = null, ?string $accountsReceivableAccountId = null, ?LinkedLedgerAccountInput $account = null, ?LinkedCustomerInput $customer = null, ?DeprecatedLinkedSupplierInput $supplier = null, ?string $companyId = null, ?bool $reconciled = null, ?string $note = null, ?string $number = null, ?array $trackingCategories = null, ?string $rowVersion = null, ?string $displayId = null)
    {
        $this->totalAmount = $totalAmount;
        $this->transactionDate = $transactionDate;
        $this->status = $status;
        $this->type = $type;
        $this->allocations = $allocations;
        $this->customFields = $customFields;
        $this->passThrough = $passThrough;
        $this->currency = $currency;
        $this->currencyRate = $currencyRate;
        $this->reference = $reference;
        $this->paymentMethod = $paymentMethod;
        $this->paymentMethodReference = $paymentMethodReference;
        $this->paymentMethodId = $paymentMethodId;
        $this->accountsReceivableAccountType = $accountsReceivableAccountType;
        $this->accountsReceivableAccountId = $accountsReceivableAccountId;
        $this->account = $account;
        $this->customer = $customer;
        $this->supplier = $supplier;
        $this->companyId = $companyId;
        $this->reconciled = $reconciled;
        $this->note = $note;
        $this->number = $number;
        $this->trackingCategories = $trackingCategories;
        $this->rowVersion = $rowVersion;
        $this->displayId = $displayId;
    }
}