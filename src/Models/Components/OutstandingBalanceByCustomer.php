<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class OutstandingBalanceByCustomer
{
    /**
     * Unique identifier for the customer.
     *
     * @var ?string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerId = null;

    /**
     * Full name of the customer.
     *
     * @var ?string $customerName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerName = null;

    /**
     * $outstandingBalancesByCurrency
     *
     * @var ?array<OutstandingBalanceByCurrency> $outstandingBalancesByCurrency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('outstanding_balances_by_currency')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\OutstandingBalanceByCurrency>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $outstandingBalancesByCurrency = null;

    /**
     * @param  ?string  $customerId
     * @param  ?string  $customerName
     * @param  ?array<OutstandingBalanceByCurrency>  $outstandingBalancesByCurrency
     * @phpstan-pure
     */
    public function __construct(?string $customerId = null, ?string $customerName = null, ?array $outstandingBalancesByCurrency = null)
    {
        $this->customerId = $customerId;
        $this->customerName = $customerName;
        $this->outstandingBalancesByCurrency = $outstandingBalancesByCurrency;
    }
}