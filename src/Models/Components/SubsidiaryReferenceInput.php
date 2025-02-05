<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class SubsidiaryReferenceInput
{
    /**
     * The name of the company.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * @param  ?string  $name
     * @phpstan-pure
     */
    public function __construct(?string $name = null)
    {
        $this->name = $name;
    }
}