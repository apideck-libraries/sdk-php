<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class JournalEntry
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
     * Requires a minimum of 2 line items that sum to 0
     *
     * @var ?array<JournalEntryLineItem> $lineItems
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('line_items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\JournalEntryLineItem>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $lineItems = null;

    /**
     * This is the date on which the journal entry was added. This can be different from the creation date and can also be backdated.
     *
     * @var ?\DateTime $postedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('posted_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $postedAt = null;

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
     * Journal entry title
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * Currency Exchange Rate at the time entity was recorded/generated.
     *
     * @var ?float $currencyRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency_rate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $currencyRate = null;

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
     * The company or subsidiary id the transaction belongs to
     *
     * @var ?string $companyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyId = null;

    /**
     * Journal entry status
     *
     * @var ?JournalEntryStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\JournalEntryStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?JournalEntryStatus $status = null;

    /**
     * Reference for the journal entry.
     *
     * @var ?string $memo
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('memo')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $memo = null;

    /**
     * Journal symbol of the entry. For example IND for indirect costs
     *
     * @var ?string $journalSymbol
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('journal_symbol')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $journalSymbol = null;

    /**
     * The specific category of tax associated with a transaction like sales or purchase
     *
     * @var ?string $taxType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $taxType = null;

    /**
     * Applicable tax id/code override if tax is not supplied on a line item basis.
     *
     * @var ?string $taxCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $taxCode = null;

    /**
     * Journal entry number.
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
     * Accounting period
     *
     * @var ?string $accountingPeriod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accounting_period')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountingPeriod = null;

    /**
     * When custom mappings are configured on the resource, the result is included here.
     *
     * @var ?array<string, mixed> $customMappings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_mappings')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $customMappings = null;

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
     * @param  ?string  $id
     * @param  ?array<JournalEntryLineItem>  $lineItems
     * @param  ?\DateTime  $postedAt
     * @param  ?array<CustomField>  $customFields
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $title
     * @param  ?float  $currencyRate
     * @param  ?Currency  $currency
     * @param  ?string  $companyId
     * @param  ?JournalEntryStatus  $status
     * @param  ?string  $memo
     * @param  ?string  $journalSymbol
     * @param  ?string  $taxType
     * @param  ?string  $taxCode
     * @param  ?string  $number
     * @param  ?array<?LinkedTrackingCategory>  $trackingCategories
     * @param  ?string  $accountingPeriod
     * @param  ?array<string, mixed>  $customMappings
     * @param  ?string  $updatedBy
     * @param  ?string  $createdBy
     * @param  ?\DateTime  $updatedAt
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $rowVersion
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?array $lineItems = null, ?\DateTime $postedAt = null, ?array $customFields = null, ?array $passThrough = null, ?string $title = null, ?float $currencyRate = null, ?Currency $currency = null, ?string $companyId = null, ?JournalEntryStatus $status = null, ?string $memo = null, ?string $journalSymbol = null, ?string $taxType = null, ?string $taxCode = null, ?string $number = null, ?array $trackingCategories = null, ?string $accountingPeriod = null, ?array $customMappings = null, ?string $updatedBy = null, ?string $createdBy = null, ?\DateTime $updatedAt = null, ?\DateTime $createdAt = null, ?string $rowVersion = null)
    {
        $this->id = $id;
        $this->lineItems = $lineItems;
        $this->postedAt = $postedAt;
        $this->customFields = $customFields;
        $this->passThrough = $passThrough;
        $this->title = $title;
        $this->currencyRate = $currencyRate;
        $this->currency = $currency;
        $this->companyId = $companyId;
        $this->status = $status;
        $this->memo = $memo;
        $this->journalSymbol = $journalSymbol;
        $this->taxType = $taxType;
        $this->taxCode = $taxCode;
        $this->number = $number;
        $this->trackingCategories = $trackingCategories;
        $this->accountingPeriod = $accountingPeriod;
        $this->customMappings = $customMappings;
        $this->updatedBy = $updatedBy;
        $this->createdBy = $createdBy;
        $this->updatedAt = $updatedAt;
        $this->createdAt = $createdAt;
        $this->rowVersion = $rowVersion;
    }
}