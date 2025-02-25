<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class FormField
{
    /**
     * The unique identifier of the form field.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * The label of the field
     *
     * @var ?string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     *
     * @var ?FormFieldType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\FormFieldType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?FormFieldType $type = null;

    /**
     * Indicates if the form field is required, which means it must be filled in before the form can be submitted
     *
     * @var ?bool $required
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('required')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $required = null;

    /**
     *
     * @var ?bool $customField
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_field')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $customField = null;

    /**
     * $options
     *
     * @var ?array<SimpleFormFieldOption|FormFieldOptionGroup> $options
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('options')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\SimpleFormFieldOption|\Apideck\Unify\Models\Components\FormFieldOptionGroup>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $options = null;

    /**
     * The placeholder for the form field
     *
     * @var ?string $placeholder
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('placeholder')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $placeholder = null;

    /**
     * The description of the form field
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * Indicates if the form field is displayed in a “read-only” mode.
     *
     * @var ?bool $disabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('disabled')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $disabled = null;

    /**
     * Indicates if the form field is not displayed but the value that is being stored on the connection.
     *
     * @var ?bool $hidden
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hidden')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hidden = null;

    /**
     * When the setting is deprecated, it should be hidden from the user interface. The value will still be stored on the connection for the sake of backwards compatibility.
     *
     * @var ?bool $deprecated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deprecated')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $deprecated = null;

    /**
     * Indicates if the form field contains sensitive data, which will display the value as a masked input.
     *
     * @var ?bool $sensitive
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sensitive')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $sensitive = null;

    /**
     * Prefix to display in front of the form field.
     *
     * @var ?string $prefix
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('prefix')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $prefix = null;

    /**
     * Suffix to display next to the form field.
     *
     * @var ?string $suffix
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('suffix')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $suffix = null;

    /**
     * Only applicable to select fields. Allow the user to add a custom value though the option select if the desired value is not in the option select list.
     *
     * @var ?bool $allowCustomValues
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allow_custom_values')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $allowCustomValues = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $label
     * @param  ?FormFieldType  $type
     * @param  ?bool  $required
     * @param  ?bool  $customField
     * @param  ?bool  $allowCustomValues
     * @param  ?array<SimpleFormFieldOption|FormFieldOptionGroup>  $options
     * @param  ?string  $placeholder
     * @param  ?string  $description
     * @param  ?bool  $disabled
     * @param  ?bool  $hidden
     * @param  ?bool  $deprecated
     * @param  ?bool  $sensitive
     * @param  ?string  $prefix
     * @param  ?string  $suffix
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $label = null, ?FormFieldType $type = null, ?bool $required = null, ?bool $customField = null, ?array $options = null, ?string $placeholder = null, ?string $description = null, ?bool $disabled = null, ?bool $hidden = null, ?bool $deprecated = null, ?bool $sensitive = null, ?string $prefix = null, ?string $suffix = null, ?bool $allowCustomValues = false)
    {
        $this->id = $id;
        $this->label = $label;
        $this->type = $type;
        $this->required = $required;
        $this->customField = $customField;
        $this->options = $options;
        $this->placeholder = $placeholder;
        $this->description = $description;
        $this->disabled = $disabled;
        $this->hidden = $hidden;
        $this->deprecated = $deprecated;
        $this->sensitive = $sensitive;
        $this->prefix = $prefix;
        $this->suffix = $suffix;
        $this->allowCustomValues = $allowCustomValues;
    }
}