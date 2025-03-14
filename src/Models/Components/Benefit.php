<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class Benefit
{
    /**
     * The name of the benefit.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The amount deducted for benefit.
     *
     * @var ?float $employeeDeduction
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employee_deduction')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $employeeDeduction = null;

    /**
     * The amount of employer contribution.
     *
     * @var ?float $employerContribution
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employer_contribution')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $employerContribution = null;

    /**
     * @param  ?string  $name
     * @param  ?float  $employeeDeduction
     * @param  ?float  $employerContribution
     * @phpstan-pure
     */
    public function __construct(?string $name = null, ?float $employeeDeduction = null, ?float $employerContribution = null)
    {
        $this->name = $name;
        $this->employeeDeduction = $employeeDeduction;
        $this->employerContribution = $employerContribution;
    }
}