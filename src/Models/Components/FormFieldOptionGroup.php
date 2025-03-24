<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class FormFieldOptionGroup
{
    /**
     *
     * @var string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    public string $label;

    /**
     * $options
     *
     * @var array<SimpleFormFieldOption> $options
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('options')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\SimpleFormFieldOption>')]
    public array $options;

    /**
     *
     * @var FormFieldOptionGroupOptionType $optionType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('option_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\FormFieldOptionGroupOptionType')]
    public FormFieldOptionGroupOptionType $optionType;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * @param  string  $label
     * @param  array<SimpleFormFieldOption>  $options
     * @param  FormFieldOptionGroupOptionType  $optionType
     * @param  ?string  $id
     * @phpstan-pure
     */
    public function __construct(string $label, array $options, FormFieldOptionGroupOptionType $optionType, ?string $id = null)
    {
        $this->label = $label;
        $this->options = $options;
        $this->optionType = $optionType;
        $this->id = $id;
    }
}