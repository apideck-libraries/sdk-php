<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class CustomMapping
{
    /**
     * Target Field ID
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Target Field name to use as a label
     *
     * @var ?string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     * Target Field Mapping value
     *
     * @var ?string $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $value = null;

    /**
     * Target Field Key
     *
     * @var ?string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $key = null;

    /**
     * Target Field Mapping is required
     *
     * @var ?bool $required
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('required')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $required = null;

    /**
     * This mapping represents a finder for a custom field
     *
     * @var ?bool $customField
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_field')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $customField = null;

    /**
     * Target Field description
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * Consumer ID
     *
     * @var ?string $consumerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('consumer_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $consumerId = null;

    /**
     * Target Field Mapping example value from downstream
     *
     * @var ?string $example
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('example')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $example = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $label
     * @param  ?string  $value
     * @param  ?string  $key
     * @param  ?bool  $required
     * @param  ?bool  $customField
     * @param  ?string  $description
     * @param  ?string  $consumerId
     * @param  ?string  $example
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $label = null, ?string $value = null, ?string $key = null, ?bool $required = null, ?bool $customField = null, ?string $description = null, ?string $consumerId = null, ?string $example = null)
    {
        $this->id = $id;
        $this->label = $label;
        $this->value = $value;
        $this->key = $key;
        $this->required = $required;
        $this->customField = $customField;
        $this->description = $description;
        $this->consumerId = $consumerId;
        $this->example = $example;
    }
}