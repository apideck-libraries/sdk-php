<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class Folder
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
     * The name of the folder
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * Optional description of the folder
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * The full path of the folder (includes the folder name)
     *
     * @var ?string $path
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('path')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $path = null;

    /**
     * The size of the folder in bytes
     *
     * @var ?int $size
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('size')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $size = null;

    /**
     *
     * @var ?Owner $owner
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('owner')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Owner|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Owner $owner = null;

    /**
     * The parent folders of the file, starting from the root
     *
     * @var array<LinkedFolder> $parentFolders
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_folders')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\LinkedFolder>')]
    public array $parentFolders;

    /**
     * Whether the list of parent folder is complete. Some connectors only return the direct parent of a folder
     *
     * @var ?bool $parentFoldersComplete
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_folders_complete')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $parentFoldersComplete = null;

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
     * @param  string  $name
     * @param  array<LinkedFolder>  $parentFolders
     * @param  ?string  $id
     * @param  ?Owner  $owner
     * @param  ?bool  $parentFoldersComplete
     * @param  ?string  $description
     * @param  ?string  $path
     * @param  ?int  $size
     * @param  ?CustomMappings  $customMappings
     * @param  ?string  $updatedBy
     * @param  ?string  $createdBy
     * @param  ?\DateTime  $updatedAt
     * @param  ?\DateTime  $createdAt
     */
    public function __construct(string $name, array $parentFolders, ?string $id = null, ?Owner $owner = null, ?bool $parentFoldersComplete = null, ?string $description = null, ?string $path = null, ?int $size = null, ?CustomMappings $customMappings = null, ?string $updatedBy = null, ?string $createdBy = null, ?\DateTime $updatedAt = null, ?\DateTime $createdAt = null)
    {
        $this->name = $name;
        $this->parentFolders = $parentFolders;
        $this->id = $id;
        $this->owner = $owner;
        $this->parentFoldersComplete = $parentFoldersComplete;
        $this->description = $description;
        $this->path = $path;
        $this->size = $size;
        $this->customMappings = $customMappings;
        $this->updatedBy = $updatedBy;
        $this->createdBy = $createdBy;
        $this->updatedAt = $updatedAt;
        $this->createdAt = $createdAt;
    }
}