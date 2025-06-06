<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class EcommerceProduct
{
    /**
     * A unique identifier for an object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * An array of options for the product.
     *
     * @var ?array<EcommerceProductOptions> $options
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('options')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\EcommerceProductOptions>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $options = null;

    /**
     * $variants
     *
     * @var ?array<Variants> $variants
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('variants')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Variants>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $variants = null;

    /**
     * An array of tags for the product, used for organization and searching.
     *
     * @var ?array<?string> $tags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string|null>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $tags = null;

    /**
     * An array of categories for the product, used for organization and searching.
     *
     * @var ?array<EcommerceProductCategories> $categories
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('categories')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\EcommerceProductCategories>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $categories = null;

    /**
     * The name of the product as it should be displayed to customers.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * A detailed description of the product.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * The current status of the product (active or archived).
     *
     * @var ?ProductStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ProductStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ProductStatus $status = null;

    /**
     * The price of the product.
     *
     * @var ?string $price
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('price')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $price = null;

    /**
     * The stock keeping unit of the product.
     *
     * @var ?string $sku
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sku')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $sku = null;

    /**
     * The quantity of the product in stock.
     *
     * @var ?string $inventoryQuantity
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('inventory_quantity')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $inventoryQuantity = null;

    /**
     * An array of image URLs for the product.
     *
     * @var ?array<Images> $images
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('images')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Images>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $images = null;

    /**
     * The weight of the product.
     *
     * @var ?string $weight
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('weight')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $weight = null;

    /**
     * The unit of measurement for the weight of the product.
     *
     * @var ?string $weightUnit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('weight_unit')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $weightUnit = null;

    /**
     * When custom mappings are configured on the resource, the result is included here.
     *
     * @var ?array<string, mixed> $customMappings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_mappings')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $customMappings = null;

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
     * @param  ?array<EcommerceProductOptions>  $options
     * @param  ?array<Variants>  $variants
     * @param  ?array<?string>  $tags
     * @param  ?array<EcommerceProductCategories>  $categories
     * @param  ?string  $name
     * @param  ?string  $description
     * @param  ?ProductStatus  $status
     * @param  ?string  $price
     * @param  ?string  $sku
     * @param  ?string  $inventoryQuantity
     * @param  ?array<Images>  $images
     * @param  ?string  $weight
     * @param  ?string  $weightUnit
     * @param  ?array<string, mixed>  $customMappings
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(string $id, ?array $options = null, ?array $variants = null, ?array $tags = null, ?array $categories = null, ?string $name = null, ?string $description = null, ?ProductStatus $status = null, ?string $price = null, ?string $sku = null, ?string $inventoryQuantity = null, ?array $images = null, ?string $weight = null, ?string $weightUnit = null, ?array $customMappings = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->options = $options;
        $this->variants = $variants;
        $this->tags = $tags;
        $this->categories = $categories;
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
        $this->price = $price;
        $this->sku = $sku;
        $this->inventoryQuantity = $inventoryQuantity;
        $this->images = $images;
        $this->weight = $weight;
        $this->weightUnit = $weightUnit;
        $this->customMappings = $customMappings;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}