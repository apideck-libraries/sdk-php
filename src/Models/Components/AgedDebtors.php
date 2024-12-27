<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Brick\DateTime\LocalDate;
class AgedDebtors
{
    /**
     * The exact date and time the report was generated.
     *
     * @var ?\DateTime $reportGeneratedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('report_generated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $reportGeneratedAt = null;

    /**
     * The cutoff date for transactions included in the report.
     *
     * @var ?LocalDate $reportAsOfDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('report_as_of_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LocalDate $reportAsOfDate = null;

    /**
     * $outstandingBalances
     *
     * @var ?array<OutstandingBalanceByCustomer> $outstandingBalances
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('outstanding_balances')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\OutstandingBalanceByCustomer>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $outstandingBalances = null;

    /**
     * Number of aging periods shown in the report.
     *
     * @var ?int $periodCount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('period_count')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $periodCount = null;

    /**
     * Length of each aging period in days.
     *
     * @var ?int $periodLength
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('period_length')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $periodLength = null;

    /**
     * @param  ?\DateTime  $reportGeneratedAt
     * @param  ?LocalDate  $reportAsOfDate
     * @param  ?int  $periodCount
     * @param  ?int  $periodLength
     * @param  ?array<OutstandingBalanceByCustomer>  $outstandingBalances
     */
    public function __construct(?\DateTime $reportGeneratedAt = null, ?LocalDate $reportAsOfDate = null, ?array $outstandingBalances = null, ?int $periodCount = 4, ?int $periodLength = 30)
    {
        $this->reportGeneratedAt = $reportGeneratedAt;
        $this->reportAsOfDate = $reportAsOfDate;
        $this->outstandingBalances = $outstandingBalances;
        $this->periodCount = $periodCount;
        $this->periodLength = $periodLength;
    }
}