<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class TrackingCategory
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
     * A unique identifier for an object.
     *
     * @var ?string $parentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentId = null;

    /**
     * The name of the tracking category.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The code of the tracking category.
     *
     * @var ?string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $code = null;

    /**
     * Based on the status some functionality is enabled or disabled.
     *
     * @var ?TrackingCategoryStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\TrackingCategoryStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TrackingCategoryStatus $status = null;

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
     * A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object.
     *
     * @var ?string $rowVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('row_version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $rowVersion = null;

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
     * The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources.
     *
     * @var ?array<PassThroughBody> $passThrough
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pass_through')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\PassThroughBody>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $passThrough = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?TrackingCategoryStatus  $status
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $parentId
     * @param  ?string  $code
     * @param  ?CustomMappings  $customMappings
     * @param  ?string  $rowVersion
     * @param  ?string  $updatedBy
     * @param  ?string  $createdBy
     * @param  ?\DateTime  $updatedAt
     * @param  ?\DateTime  $createdAt
     */
    public function __construct(?string $id = null, ?string $name = null, ?TrackingCategoryStatus $status = null, ?array $passThrough = null, ?string $parentId = null, ?string $code = null, ?CustomMappings $customMappings = null, ?string $rowVersion = null, ?string $updatedBy = null, ?string $createdBy = null, ?\DateTime $updatedAt = null, ?\DateTime $createdAt = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->passThrough = $passThrough;
        $this->parentId = $parentId;
        $this->code = $code;
        $this->customMappings = $customMappings;
        $this->rowVersion = $rowVersion;
        $this->updatedBy = $updatedBy;
        $this->createdBy = $createdBy;
        $this->updatedAt = $updatedAt;
        $this->createdAt = $createdAt;
    }
}