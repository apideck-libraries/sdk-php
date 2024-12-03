<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class EmployeeCompensation
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
     * The ID of the job to which the compensation belongs.
     *
     * @var ?string $jobId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('job_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $jobId = null;

    /**
     * The amount paid per payment unit.
     *
     * @var ?float $rate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('rate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $rate = null;

    /**
     * Unit of measurement for employee compensation.
     *
     * @var ?PaymentUnit $paymentUnit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_unit')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\PaymentUnit|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PaymentUnit $paymentUnit = null;

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
     * The FLSA status for this compensation.
     *
     * @var ?FlsaStatus $flsaStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('flsa_status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\FlsaStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?FlsaStatus $flsaStatus = null;

    /**
     * The date on which a change to an employee's compensation takes effect.
     *
     * @var ?string $effectiveDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('effective_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $effectiveDate = null;

    /**
     * Frequency of employee compensation.
     *
     * @var ?PaymentFrequency $paymentFrequency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_frequency')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\PaymentFrequency|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PaymentFrequency $paymentFrequency = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $jobId
     * @param  ?float  $rate
     * @param  ?PaymentUnit  $paymentUnit
     * @param  ?Currency  $currency
     * @param  ?FlsaStatus  $flsaStatus
     * @param  ?string  $effectiveDate
     * @param  ?PaymentFrequency  $paymentFrequency
     */
    public function __construct(?string $id = null, ?string $jobId = null, ?float $rate = null, ?PaymentUnit $paymentUnit = null, ?Currency $currency = null, ?FlsaStatus $flsaStatus = null, ?string $effectiveDate = null, ?PaymentFrequency $paymentFrequency = null)
    {
        $this->id = $id;
        $this->jobId = $jobId;
        $this->rate = $rate;
        $this->paymentUnit = $paymentUnit;
        $this->currency = $currency;
        $this->flsaStatus = $flsaStatus;
        $this->effectiveDate = $effectiveDate;
        $this->paymentFrequency = $paymentFrequency;
    }
}