<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Brick\DateTime\LocalDate;
class InvoiceInput
{
    /**
     * Invoice type
     *
     * @var ?InvoiceType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\InvoiceType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?InvoiceType $type = null;

    /**
     * Invoice number.
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
     * Date invoice was issued - YYYY-MM-DD.
     *
     * @var ?LocalDate $invoiceDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invoice_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LocalDate $invoiceDate = null;

    /**
     * The invoice due date is the date on which a payment or invoice is scheduled to be received by the seller - YYYY-MM-DD.
     *
     * @var ?LocalDate $dueDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('due_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LocalDate $dueDate = null;

    /**
     * Terms of payment.
     *
     * @var ?string $terms
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('terms')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $terms = null;

    /**
     * A PO Number uniquely identifies a purchase order and is generally defined by the buyer. The buyer will match the PO number in the invoice to the Purchase Order.
     *
     * @var ?string $poNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('po_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $poNumber = null;

    /**
     * Optional invoice reference.
     *
     * @var ?string $reference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reference = null;

    /**
     * Invoice status
     *
     * @var ?InvoiceStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\InvoiceStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?InvoiceStatus $status = null;

    /**
     * Invoice sent to contact/customer.
     *
     * @var ?bool $invoiceSent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invoice_sent')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $invoiceSent = null;

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
     * Discount percentage applied to this invoice.
     *
     * @var ?float $discountPercentage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discount_percentage')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $discountPercentage = null;

    /**
     * Discount amount applied to this invoice.
     *
     * @var ?float $discountAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discount_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $discountAmount = null;

    /**
     * Total amount of invoice, including tax.
     *
     * @var ?float $total
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $total = null;

    /**
     * Balance of invoice due.
     *
     * @var ?float $balance
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('balance')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $balance = null;

    /**
     * Amount of deposit made to this invoice.
     *
     * @var ?float $deposit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deposit')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $deposit = null;

    /**
     * Customer memo
     *
     * @var ?string $customerMemo
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_memo')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerMemo = null;

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
     * $lineItems
     *
     * @var ?array<InvoiceLineItemInput> $lineItems
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('line_items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\InvoiceLineItemInput>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $lineItems = null;

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
     * Optional invoice template
     *
     * @var ?string $templateId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('template_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $templateId = null;

    /**
     * URL link to a source document - shown as 'Go to [appName]' in the downstream app. Currently only supported for Xero.
     *
     * @var ?string $sourceDocumentUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_document_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $sourceDocumentUrl = null;

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
     *
     * @var ?BankAccount $bankAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bank_account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\BankAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BankAccount $bankAccount = null;

    /**
     *
     * @var ?LinkedLedgerAccountInput $ledgerAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ledger_account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedLedgerAccountInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedLedgerAccountInput $ledgerAccount = null;

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
     * @param  ?bool  $invoiceSent
     * @param  ?array<InvoiceLineItemInput>  $lineItems
     * @param  ?Address  $billingAddress
     * @param  ?Address  $shippingAddress
     * @param  ?BankAccount  $bankAccount
     * @param  ?array<CustomField>  $customFields
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?InvoiceType  $type
     * @param  ?string  $number
     * @param  ?LinkedCustomerInput  $customer
     * @param  ?string  $companyId
     * @param  ?LocalDate  $invoiceDate
     * @param  ?LocalDate  $dueDate
     * @param  ?string  $terms
     * @param  ?string  $poNumber
     * @param  ?string  $reference
     * @param  ?InvoiceStatus  $status
     * @param  ?Currency  $currency
     * @param  ?float  $currencyRate
     * @param  ?bool  $taxInclusive
     * @param  ?float  $subTotal
     * @param  ?float  $totalTax
     * @param  ?string  $taxCode
     * @param  ?float  $discountPercentage
     * @param  ?float  $discountAmount
     * @param  ?float  $total
     * @param  ?float  $balance
     * @param  ?float  $deposit
     * @param  ?string  $customerMemo
     * @param  ?DeprecatedLinkedTrackingCategory  $trackingCategory
     * @param  ?array<LinkedTrackingCategory>  $trackingCategories
     * @param  ?string  $templateId
     * @param  ?string  $sourceDocumentUrl
     * @param  ?string  $paymentMethod
     * @param  ?string  $channel
     * @param  ?string  $language
     * @param  ?bool  $accountingByRow
     * @param  ?LinkedLedgerAccountInput  $ledgerAccount
     * @param  ?string  $rowVersion
     */
    public function __construct(?bool $invoiceSent = null, ?array $lineItems = null, ?Address $billingAddress = null, ?Address $shippingAddress = null, ?BankAccount $bankAccount = null, ?array $customFields = null, ?array $passThrough = null, ?InvoiceType $type = null, ?string $number = null, ?LinkedCustomerInput $customer = null, ?string $companyId = null, ?LocalDate $invoiceDate = null, ?LocalDate $dueDate = null, ?string $terms = null, ?string $poNumber = null, ?string $reference = null, ?InvoiceStatus $status = null, ?Currency $currency = null, ?float $currencyRate = null, ?bool $taxInclusive = null, ?float $subTotal = null, ?float $totalTax = null, ?string $taxCode = null, ?float $discountPercentage = null, ?float $discountAmount = null, ?float $total = null, ?float $balance = null, ?float $deposit = null, ?string $customerMemo = null, ?DeprecatedLinkedTrackingCategory $trackingCategory = null, ?array $trackingCategories = null, ?string $templateId = null, ?string $sourceDocumentUrl = null, ?string $paymentMethod = null, ?string $channel = null, ?string $language = null, ?bool $accountingByRow = null, ?LinkedLedgerAccountInput $ledgerAccount = null, ?string $rowVersion = null)
    {
        $this->invoiceSent = $invoiceSent;
        $this->lineItems = $lineItems;
        $this->billingAddress = $billingAddress;
        $this->shippingAddress = $shippingAddress;
        $this->bankAccount = $bankAccount;
        $this->customFields = $customFields;
        $this->passThrough = $passThrough;
        $this->type = $type;
        $this->number = $number;
        $this->customer = $customer;
        $this->companyId = $companyId;
        $this->invoiceDate = $invoiceDate;
        $this->dueDate = $dueDate;
        $this->terms = $terms;
        $this->poNumber = $poNumber;
        $this->reference = $reference;
        $this->status = $status;
        $this->currency = $currency;
        $this->currencyRate = $currencyRate;
        $this->taxInclusive = $taxInclusive;
        $this->subTotal = $subTotal;
        $this->totalTax = $totalTax;
        $this->taxCode = $taxCode;
        $this->discountPercentage = $discountPercentage;
        $this->discountAmount = $discountAmount;
        $this->total = $total;
        $this->balance = $balance;
        $this->deposit = $deposit;
        $this->customerMemo = $customerMemo;
        $this->trackingCategory = $trackingCategory;
        $this->trackingCategories = $trackingCategories;
        $this->templateId = $templateId;
        $this->sourceDocumentUrl = $sourceDocumentUrl;
        $this->paymentMethod = $paymentMethod;
        $this->channel = $channel;
        $this->language = $language;
        $this->accountingByRow = $accountingByRow;
        $this->ledgerAccount = $ledgerAccount;
        $this->rowVersion = $rowVersion;
    }
}