<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** Expenses - The operating expenses accounts */
class Expenses
{
    /**
     *
     * @var mixed $records
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('records')]
    #[\Speakeasy\Serializer\Annotation\Type('mixed')]
    public mixed $records;

    /**
     * A unique identifier for an object.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

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
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * The aggregated total of all accounts within this category.
     *
     * @var ?float $total
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total')]
    public ?float $total;

    /**
     * The type of profit and loss
     *
     * @var ?ProfitAndLossType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ProfitAndLossType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ProfitAndLossType $type = null;

    /**
     * @param  mixed  $records
     * @param  ?string  $id
     * @param  ?string  $code
     * @param  ?string  $title
     * @param  ?float  $total
     * @param  ?ProfitAndLossType  $type
     * @phpstan-pure
     */
    public function __construct(mixed $records, ?string $id = null, ?string $code = null, ?string $title = null, ?float $total = null, ?ProfitAndLossType $type = null)
    {
        $this->records = $records;
        $this->id = $id;
        $this->code = $code;
        $this->title = $title;
        $this->total = $total;
        $this->type = $type;
    }
}