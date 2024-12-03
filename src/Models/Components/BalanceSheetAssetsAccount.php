<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** BalanceSheetAssetsAccount - A balance sheet assets account represents the financial position of a company at a specific point in time. */
class BalanceSheetAssetsAccount
{
    /**
     * The unique identifier for the account.
     *
     * @var ?string $accountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountId = null;

    /**
     * The account code of the account
     *
     * @var ?string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $code = null;

    /**
     * The name of the account.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The amount or value of the item
     *
     * @var ?float $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $value = null;

    /**
     * A list of balance sheet accounts
     *
     * @var mixed $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('mixed')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public mixed $items = null;

    /**
     * @param  ?string  $accountId
     * @param  ?string  $code
     * @param  ?string  $name
     * @param  ?float  $value
     * @param  mixed  $items
     */
    public function __construct(?string $accountId = null, ?string $code = null, ?string $name = null, ?float $value = null, mixed $items = null)
    {
        $this->accountId = $accountId;
        $this->code = $code;
        $this->name = $name;
        $this->value = $value;
        $this->items = $items;
    }
}