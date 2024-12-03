<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class SimpleFormFieldOption
{
    /**
     *
     * @var ?string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     *
     * @var string|int|float|bool|array<mixed>|null $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|int|float|bool|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|int|float|bool|array|null $value = null;

    /**
     * @param  ?string  $label
     * @param  string|int|float|bool|array<mixed>|null  $value
     */
    public function __construct(?string $label = null, string|int|float|bool|array|null $value = null)
    {
        $this->label = $label;
        $this->value = $value;
    }
}