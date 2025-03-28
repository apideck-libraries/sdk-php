<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** LinkedSupplier - The supplier this entity is linked to. */
class LinkedSupplier
{
    /**
     * The ID of the supplier this entity is linked to.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?Address $address
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Address|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Address $address = null;

    /**
     * The display ID of the supplier.
     *
     * @var ?string $displayId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $displayId = null;

    /**
     * The display name of the supplier.
     *
     * @var ?string $displayName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $displayName = null;

    /**
     * The company name of the supplier.
     *
     * @var ?string $companyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyName = null;

    /**
     * @param  ?string  $id
     * @param  ?Address  $address
     * @param  ?string  $displayId
     * @param  ?string  $displayName
     * @param  ?string  $companyName
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?Address $address = null, ?string $displayId = null, ?string $displayName = null, ?string $companyName = null)
    {
        $this->id = $id;
        $this->address = $address;
        $this->displayId = $displayId;
        $this->displayName = $displayName;
        $this->companyName = $companyName;
    }
}