<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class BalanceSheet
{
    /**
     * $reports
     *
     * @var array<Reports> $reports
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reports')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Reports>')]
    public array $reports;

    /**
     * @param  array<Reports>  $reports
     */
    public function __construct(array $reports)
    {
        $this->reports = $reports;
    }
}