<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class Department
{
    /**
     * A unique identifier for an object.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources.
     *
     * @var ?array<PassThroughBody> $passThrough
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pass_through')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\PassThroughBody>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $passThrough = null;

    /**
     * Parent ID
     *
     * @var ?string $parentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentId = null;

    /**
     * Department name
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $code = null;

    /**
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

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
     * The user who last updated the object.
     *
     * @var ?string $updatedBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_by')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $updatedBy = null;

    /**
     * The user who created the object.
     *
     * @var ?string $createdBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_by')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdBy = null;

    /**
     * The date and time when the object was last updated.
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * The date and time when the object was created.
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * @param  ?string  $id
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $parentId
     * @param  ?string  $name
     * @param  ?string  $code
     * @param  ?string  $description
     * @param  ?CustomMappings  $customMappings
     * @param  ?string  $updatedBy
     * @param  ?string  $createdBy
     * @param  ?\DateTime  $updatedAt
     * @param  ?\DateTime  $createdAt
     */
    public function __construct(?string $id = null, ?array $passThrough = null, ?string $parentId = null, ?string $name = null, ?string $code = null, ?string $description = null, ?CustomMappings $customMappings = null, ?string $updatedBy = null, ?string $createdBy = null, ?\DateTime $updatedAt = null, ?\DateTime $createdAt = null)
    {
        $this->id = $id;
        $this->passThrough = $passThrough;
        $this->parentId = $parentId;
        $this->name = $name;
        $this->code = $code;
        $this->description = $description;
        $this->customMappings = $customMappings;
        $this->updatedBy = $updatedBy;
        $this->createdBy = $createdBy;
        $this->updatedAt = $updatedAt;
        $this->createdAt = $createdAt;
    }
}