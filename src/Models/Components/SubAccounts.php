<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class SubAccounts
{
    /**
     * The ID of the sub account.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * The name of the sub account.
     *
     * @var ?string $accountSubName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_sub_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountSubName = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $accountSubName
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $accountSubName = null)
    {
        $this->id = $id;
        $this->accountSubName = $accountSubName;
    }
}