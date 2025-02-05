<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class CustomerInput
{
    /**
     * $addresses
     *
     * @var ?array<Address> $addresses
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('addresses')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Address>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $addresses = null;

    /**
     * $phoneNumbers
     *
     * @var ?array<PhoneNumber> $phoneNumbers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone_numbers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\PhoneNumber>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $phoneNumbers = null;

    /**
     * $emails
     *
     * @var ?array<Email> $emails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('emails')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Email>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $emails = null;

    /**
     * $websites
     *
     * @var ?array<Website> $websites
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('websites')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Website>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $websites = null;

    /**
     * $bankAccounts
     *
     * @var ?array<BankAccount> $bankAccounts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bank_accounts')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\BankAccount>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $bankAccounts = null;

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
     * Display ID
     *
     * @var ?string $displayId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $displayId = null;

    /**
     * Display name
     *
     * @var ?string $displayName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $displayName = null;

    /**
     * The name of the company.
     *
     * @var ?string $companyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyName = null;

    /**
     * The company or subsidiary id the transaction belongs to
     *
     * @var ?string $companyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyId = null;

    /**
     * The job title of the person.
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * The first name of the person.
     *
     * @var ?string $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('first_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     * Middle name of the person.
     *
     * @var ?string $middleName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('middle_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $middleName = null;

    /**
     * The last name of the person.
     *
     * @var ?string $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     *
     * @var ?string $suffix
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('suffix')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $suffix = null;

    /**
     * Is this an individual or business customer
     *
     * @var ?bool $individual
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('individual')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $individual = null;

    /**
     * If true, indicates this is a Project.
     *
     * @var ?bool $project
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('project')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $project = null;

    /**
     * Some notes about this customer
     *
     * @var ?string $notes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('notes')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $notes = null;

    /**
     *
     * @var ?string $taxNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $taxNumber = null;

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
     *
     * @var ?LinkedLedgerAccountInput $account
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedLedgerAccountInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedLedgerAccountInput $account = null;

    /**
     * The parent customer this entity is linked to.
     *
     * @var ?LinkedParentCustomer $parent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LinkedParentCustomer|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LinkedParentCustomer $parent = null;

    /**
     * Customer status
     *
     * @var ?CustomerStatusStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\CustomerStatusStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomerStatusStatus $status = null;

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
     * A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object.
     *
     * @var ?string $rowVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('row_version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $rowVersion = null;

    /**
     * @param  ?array<Address>  $addresses
     * @param  ?array<PhoneNumber>  $phoneNumbers
     * @param  ?array<Email>  $emails
     * @param  ?array<Website>  $websites
     * @param  ?array<BankAccount>  $bankAccounts
     * @param  ?LinkedTaxRateInput  $taxRate
     * @param  ?array<CustomField>  $customFields
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $displayId
     * @param  ?string  $displayName
     * @param  ?string  $companyName
     * @param  ?string  $companyId
     * @param  ?string  $title
     * @param  ?string  $firstName
     * @param  ?string  $middleName
     * @param  ?string  $lastName
     * @param  ?string  $suffix
     * @param  ?bool  $individual
     * @param  ?bool  $project
     * @param  ?string  $notes
     * @param  ?string  $taxNumber
     * @param  ?Currency  $currency
     * @param  ?LinkedLedgerAccountInput  $account
     * @param  ?LinkedParentCustomer  $parent
     * @param  ?CustomerStatusStatus  $status
     * @param  ?string  $paymentMethod
     * @param  ?string  $channel
     * @param  ?string  $rowVersion
     * @phpstan-pure
     */
    public function __construct(?array $addresses = null, ?array $phoneNumbers = null, ?array $emails = null, ?array $websites = null, ?array $bankAccounts = null, ?LinkedTaxRateInput $taxRate = null, ?array $customFields = null, ?array $passThrough = null, ?string $displayId = null, ?string $displayName = null, ?string $companyName = null, ?string $companyId = null, ?string $title = null, ?string $firstName = null, ?string $middleName = null, ?string $lastName = null, ?string $suffix = null, ?bool $individual = null, ?bool $project = null, ?string $notes = null, ?string $taxNumber = null, ?Currency $currency = null, ?LinkedLedgerAccountInput $account = null, ?LinkedParentCustomer $parent = null, ?CustomerStatusStatus $status = null, ?string $paymentMethod = null, ?string $channel = null, ?string $rowVersion = null)
    {
        $this->addresses = $addresses;
        $this->phoneNumbers = $phoneNumbers;
        $this->emails = $emails;
        $this->websites = $websites;
        $this->bankAccounts = $bankAccounts;
        $this->taxRate = $taxRate;
        $this->customFields = $customFields;
        $this->passThrough = $passThrough;
        $this->displayId = $displayId;
        $this->displayName = $displayName;
        $this->companyName = $companyName;
        $this->companyId = $companyId;
        $this->title = $title;
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->suffix = $suffix;
        $this->individual = $individual;
        $this->project = $project;
        $this->notes = $notes;
        $this->taxNumber = $taxNumber;
        $this->currency = $currency;
        $this->account = $account;
        $this->parent = $parent;
        $this->status = $status;
        $this->paymentMethod = $paymentMethod;
        $this->channel = $channel;
        $this->rowVersion = $rowVersion;
    }
}