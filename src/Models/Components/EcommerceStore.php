<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class EcommerceStore
{
    /**
     * A unique identifier for an object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The store's name
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The store's website URL
     *
     * @var ?string $storeUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('store_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $storeUrl = null;

    /**
     * The store's admin login URL
     *
     * @var ?string $adminUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('admin_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $adminUrl = null;

    /**
     * When custom mappings are configured on the resource, the result is included here.
     *
     * @var ?CustomMappings $customMappings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_mappings')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\CustomMappings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomMappings $customMappings = null;

    /**
     * The date and time when the object was created.
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * The date and time when the object was last updated.
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  string  $id
     * @param  ?string  $name
     * @param  ?string  $storeUrl
     * @param  ?string  $adminUrl
     * @param  ?CustomMappings  $customMappings
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(string $id, ?string $name = null, ?string $storeUrl = null, ?string $adminUrl = null, ?CustomMappings $customMappings = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->storeUrl = $storeUrl;
        $this->adminUrl = $adminUrl;
        $this->customMappings = $customMappings;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}