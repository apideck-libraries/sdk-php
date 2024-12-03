<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class HrisCompanyInput
{
    /**
     *
     * @var ?string $legalName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('legal_name')]
    public ?string $legalName;

    /**
     *
     * @var ?string $displayName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $displayName = null;

    /**
     *
     * @var ?string $subdomain
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subdomain')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subdomain = null;

    /**
     *
     * @var ?HrisCompanyStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\HrisCompanyStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisCompanyStatus $status = null;

    /**
     * An Company Number, Company ID or Company Code, is a unique number that has been assigned to each company.
     *
     * @var ?string $companyNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyNumber = null;

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
     *
     * @var ?string $debtorId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('debtor_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $debtorId = null;

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
     * @param  ?string  $legalName
     * @param  ?HrisCompanyStatus  $status
     * @param  ?array<Address>  $addresses
     * @param  ?array<PhoneNumber>  $phoneNumbers
     * @param  ?array<Email>  $emails
     * @param  ?array<Website>  $websites
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $displayName
     * @param  ?string  $subdomain
     * @param  ?string  $companyNumber
     * @param  ?Currency  $currency
     * @param  ?string  $debtorId
     */
    public function __construct(?string $legalName = null, ?HrisCompanyStatus $status = null, ?array $addresses = null, ?array $phoneNumbers = null, ?array $emails = null, ?array $websites = null, ?array $passThrough = null, ?string $displayName = null, ?string $subdomain = null, ?string $companyNumber = null, ?Currency $currency = null, ?string $debtorId = null)
    {
        $this->legalName = $legalName;
        $this->status = $status;
        $this->addresses = $addresses;
        $this->phoneNumbers = $phoneNumbers;
        $this->emails = $emails;
        $this->websites = $websites;
        $this->passThrough = $passThrough;
        $this->displayName = $displayName;
        $this->subdomain = $subdomain;
        $this->companyNumber = $companyNumber;
        $this->currency = $currency;
        $this->debtorId = $debtorId;
    }
}