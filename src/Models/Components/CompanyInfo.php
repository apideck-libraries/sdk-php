<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Brick\DateTime\LocalDate;
class CompanyInfo
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
     * The name of the company.
     *
     * @var ?string $companyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyName = null;

    /**
     * Based on the status some functionality is enabled or disabled.
     *
     * @var ?CompanyStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\CompanyStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CompanyStatus $status = null;

    /**
     * The legal name of the company
     *
     * @var ?string $legalName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('legal_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $legalName = null;

    /**
     * country code according to ISO 3166-1 alpha-2.
     *
     * @var ?string $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $country = null;

    /**
     *
     * @var ?string $salesTaxNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sales_tax_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $salesTaxNumber = null;

    /**
     * Whether sales tax is calculated automatically for the company
     *
     * @var ?bool $automatedSalesTax
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('automated_sales_tax')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $automatedSalesTax = null;

    /**
     * Whether sales tax is enabled for the company
     *
     * @var ?bool $salesTaxEnabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sales_tax_enabled')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $salesTaxEnabled = null;

    /**
     *
     * @var ?TaxRate $defaultSalesTax
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('default_sales_tax')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\TaxRate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TaxRate $defaultSalesTax = null;

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
     * language code according to ISO 639-1. For the United States - EN
     *
     * @var ?string $language
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('language')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $language = null;

    /**
     * The start month of fiscal year.
     *
     * @var ?TheStartMonthOfFiscalYear $fiscalYearStartMonth
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('fiscal_year_start_month')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\TheStartMonthOfFiscalYear|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TheStartMonthOfFiscalYear $fiscalYearStartMonth = null;

    /**
     * Date when company file was created
     *
     * @var ?LocalDate $companyStartDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_start_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LocalDate $companyStartDate = null;

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
     * @param  ?string  $id
     * @param  ?CompanyStatus  $status
     * @param  ?string  $legalName
     * @param  ?bool  $automatedSalesTax
     * @param  ?bool  $salesTaxEnabled
     * @param  ?TaxRate  $defaultSalesTax
     * @param  ?TheStartMonthOfFiscalYear  $fiscalYearStartMonth
     * @param  ?LocalDate  $companyStartDate
     * @param  ?array<Address>  $addresses
     * @param  ?array<PhoneNumber>  $phoneNumbers
     * @param  ?array<Email>  $emails
     * @param  ?string  $companyName
     * @param  ?string  $country
     * @param  ?string  $salesTaxNumber
     * @param  ?Currency  $currency
     * @param  ?string  $language
     * @param  ?CustomMappings  $customMappings
     * @param  ?string  $rowVersion
     * @param  ?string  $updatedBy
     * @param  ?string  $createdBy
     * @param  ?\DateTime  $updatedAt
     * @param  ?\DateTime  $createdAt
     */
    public function __construct(?string $id = null, ?CompanyStatus $status = null, ?string $legalName = null, ?bool $automatedSalesTax = null, ?bool $salesTaxEnabled = null, ?TaxRate $defaultSalesTax = null, ?TheStartMonthOfFiscalYear $fiscalYearStartMonth = null, ?LocalDate $companyStartDate = null, ?array $addresses = null, ?array $phoneNumbers = null, ?array $emails = null, ?string $companyName = null, ?string $country = null, ?string $salesTaxNumber = null, ?Currency $currency = null, ?string $language = null, ?CustomMappings $customMappings = null, ?string $rowVersion = null, ?string $updatedBy = null, ?string $createdBy = null, ?\DateTime $updatedAt = null, ?\DateTime $createdAt = null)
    {
        $this->id = $id;
        $this->status = $status;
        $this->legalName = $legalName;
        $this->automatedSalesTax = $automatedSalesTax;
        $this->salesTaxEnabled = $salesTaxEnabled;
        $this->defaultSalesTax = $defaultSalesTax;
        $this->fiscalYearStartMonth = $fiscalYearStartMonth;
        $this->companyStartDate = $companyStartDate;
        $this->addresses = $addresses;
        $this->phoneNumbers = $phoneNumbers;
        $this->emails = $emails;
        $this->companyName = $companyName;
        $this->country = $country;
        $this->salesTaxNumber = $salesTaxNumber;
        $this->currency = $currency;
        $this->language = $language;
        $this->customMappings = $customMappings;
        $this->rowVersion = $rowVersion;
        $this->updatedBy = $updatedBy;
        $this->createdBy = $createdBy;
        $this->updatedAt = $updatedAt;
        $this->createdAt = $createdAt;
    }
}