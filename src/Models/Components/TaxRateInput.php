<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class TaxRateInput
{
    /**
     * Name assigned to identify this tax rate.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

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
     * The subsidiaries this belongs to.
     *
     * @var ?array<Subsidiaries> $subsidiaries
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subsidiaries')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Subsidiaries>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $subsidiaries = null;

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
     * ID assigned to identify this tax rate.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Tax code assigned to identify this tax rate.
     *
     * @var ?string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $code = null;

    /**
     * Description of tax rate
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * Effective tax rate
     *
     * @var ?float $effectiveTaxRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('effective_tax_rate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $effectiveTaxRate = null;

    /**
     * Not compounded sum of the components of a tax rate
     *
     * @var ?float $totalTaxRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_tax_rate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $totalTaxRate = null;

    /**
     * Unique identifier for the account for tax collected.
     *
     * @var ?string $taxPayableAccountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_payable_account_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $taxPayableAccountId = null;

    /**
     * Unique identifier for the account for tax remitted.
     *
     * @var ?string $taxRemittedAccountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_remitted_account_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $taxRemittedAccountId = null;

    /**
     * $components
     *
     * @var ?array<Components> $components
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('components')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Components>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $components = null;

    /**
     * Tax type used to indicate the source of tax collected or paid
     *
     * @var ?string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $type = null;

    /**
     * Report Tax type to aggregate tax collected or paid for reporting purposes
     *
     * @var ?string $reportTaxType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('report_tax_type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reportTaxType = null;

    /**
     * ID of the original tax rate from which the new tax rate is derived. Helps to understand the relationship between corresponding tax rate entities.
     *
     * @var ?string $originalTaxRateId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('original_tax_rate_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $originalTaxRateId = null;

    /**
     * Tax rate status
     *
     * @var ?TaxRateStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\TaxRateStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TaxRateStatus $status = null;

    /**
     * A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object.
     *
     * @var ?string $rowVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('row_version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $rowVersion = null;

    /**
     * @param  ?string  $name
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?array<Subsidiaries>  $subsidiaries
     * @param  ?array<CustomField>  $customFields
     * @param  ?string  $id
     * @param  ?string  $code
     * @param  ?string  $description
     * @param  ?float  $effectiveTaxRate
     * @param  ?float  $totalTaxRate
     * @param  ?string  $taxPayableAccountId
     * @param  ?string  $taxRemittedAccountId
     * @param  ?array<Components>  $components
     * @param  ?string  $type
     * @param  ?string  $reportTaxType
     * @param  ?string  $originalTaxRateId
     * @param  ?TaxRateStatus  $status
     * @param  ?string  $rowVersion
     * @phpstan-pure
     */
    public function __construct(?string $name = null, ?array $passThrough = null, ?array $subsidiaries = null, ?array $customFields = null, ?string $id = null, ?string $code = null, ?string $description = null, ?float $effectiveTaxRate = null, ?float $totalTaxRate = null, ?string $taxPayableAccountId = null, ?string $taxRemittedAccountId = null, ?array $components = null, ?string $type = null, ?string $reportTaxType = null, ?string $originalTaxRateId = null, ?TaxRateStatus $status = null, ?string $rowVersion = null)
    {
        $this->name = $name;
        $this->passThrough = $passThrough;
        $this->subsidiaries = $subsidiaries;
        $this->customFields = $customFields;
        $this->id = $id;
        $this->code = $code;
        $this->description = $description;
        $this->effectiveTaxRate = $effectiveTaxRate;
        $this->totalTaxRate = $totalTaxRate;
        $this->taxPayableAccountId = $taxPayableAccountId;
        $this->taxRemittedAccountId = $taxRemittedAccountId;
        $this->components = $components;
        $this->type = $type;
        $this->reportTaxType = $reportTaxType;
        $this->originalTaxRateId = $originalTaxRateId;
        $this->status = $status;
        $this->rowVersion = $rowVersion;
    }
}