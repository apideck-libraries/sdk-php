<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class ExpenseInput
{
    /**
     * The unique identifier for the ledger account that this expense should be credited to. 
     *
     * @var string $accountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_id')]
    public string $accountId;

    /**
     * Expense line items linked to this expense.
     *
     * @var array<ExpenseLineItemInput> $lineItems
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('line_items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\ExpenseLineItemInput>')]
    public array $lineItems;

    /**
     * The date of the transaction - YYYY:MM::DDThh:mm:ss.sTZD
     *
     * @var ?\DateTime $transactionDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transaction_date')]
    public ?\DateTime $transactionDate;

    /**
     * The ID of the customer this entity is linked to. Used for expenses that should be marked as billable to customers.
     *
     * @var ?string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerId = null;

    /**
     * The ID of the supplier this entity is linked to.
     *
     * @var ?string $supplierId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('supplier_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $supplierId = null;

    /**
     * The ID of the department this expense is linked to.
     *
     * @var ?string $departmentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('department_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $departmentId = null;

    /**
     *
     * @var ?LinkedTaxRateInput $taxRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_rate')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedTaxRateInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedTaxRateInput $taxRate = null;

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
     * Number.
     *
     * @var ?string $number
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $number = null;

    /**
     * The company or subsidiary id the transaction belongs to
     *
     * @var ?string $companyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyId = null;

    /**
     * The type of payment for the expense.
     *
     * @var ?ExpensePaymentType $paymentType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ExpensePaymentType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ExpensePaymentType $paymentType = null;

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
     * The type of expense.
     *
     * @var ?ExpenseType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ExpenseType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ExpenseType $type = null;

    /**
     * The memo of the expense.
     *
     * @var ?string $memo
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('memo')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $memo = null;

    /**
     * The total amount of the expense line item.
     *
     * @var ?float $totalAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $totalAmount = null;

    /**
     * A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object.
     *
     * @var ?string $rowVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('row_version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $rowVersion = null;

    /**
     * @param  string  $accountId
     * @param  array<ExpenseLineItemInput>  $lineItems
     * @param  ?\DateTime  $transactionDate
     * @param  ?string  $customerId
     * @param  ?string  $supplierId
     * @param  ?string  $departmentId
     * @param  ?LinkedTaxRateInput  $taxRate
     * @param  ?array<CustomField>  $customFields
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $number
     * @param  ?string  $companyId
     * @param  ?ExpensePaymentType  $paymentType
     * @param  ?Currency  $currency
     * @param  ?float  $currencyRate
     * @param  ?ExpenseType  $type
     * @param  ?string  $memo
     * @param  ?float  $totalAmount
     * @param  ?string  $rowVersion
     */
    public function __construct(string $accountId, array $lineItems, ?\DateTime $transactionDate = null, ?string $customerId = null, ?string $supplierId = null, ?string $departmentId = null, ?LinkedTaxRateInput $taxRate = null, ?array $customFields = null, ?array $passThrough = null, ?string $number = null, ?string $companyId = null, ?ExpensePaymentType $paymentType = null, ?Currency $currency = null, ?float $currencyRate = null, ?ExpenseType $type = null, ?string $memo = null, ?float $totalAmount = null, ?string $rowVersion = null)
    {
        $this->accountId = $accountId;
        $this->lineItems = $lineItems;
        $this->transactionDate = $transactionDate;
        $this->customerId = $customerId;
        $this->supplierId = $supplierId;
        $this->departmentId = $departmentId;
        $this->taxRate = $taxRate;
        $this->customFields = $customFields;
        $this->passThrough = $passThrough;
        $this->number = $number;
        $this->companyId = $companyId;
        $this->paymentType = $paymentType;
        $this->currency = $currency;
        $this->currencyRate = $currencyRate;
        $this->type = $type;
        $this->memo = $memo;
        $this->totalAmount = $totalAmount;
        $this->rowVersion = $rowVersion;
    }
}