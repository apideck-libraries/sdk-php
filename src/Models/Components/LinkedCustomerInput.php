<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** LinkedCustomerInput - The customer this entity is linked to. */
class LinkedCustomerInput
{
    /**
     * The ID of the customer this entity is linked to.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * The name of the customer. Deprecated, use display_name instead.
     *
     * @var ?string $name
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The email address of the customer.
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     * The display name of the customer.
     *
     * @var ?string $displayName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $displayName = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?string  $email
     * @param  ?string  $displayName
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $name = null, ?string $email = null, ?string $displayName = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->displayName = $displayName;
    }
}