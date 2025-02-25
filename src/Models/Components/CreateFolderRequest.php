<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class CreateFolderRequest
{
    /**
     * The name of the folder.
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * The parent folder to create the new file within. This can be an ID or a path depending on the downstream folder. Please see the connector section below to see downstream specific gotchas.
     *
     * @var string $parentFolderId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_folder_id')]
    public string $parentFolderId;

    /**
     * Optional description of the folder.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * ID of the drive to create the folder in.
     *
     * @var ?string $driveId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('drive_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $driveId = null;

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
     * @param  string  $name
     * @param  string  $parentFolderId
     * @param  ?string  $description
     * @param  ?string  $driveId
     * @param  ?array<PassThroughBody>  $passThrough
     * @phpstan-pure
     */
    public function __construct(string $name, string $parentFolderId, ?string $description = null, ?string $driveId = null, ?array $passThrough = null)
    {
        $this->name = $name;
        $this->parentFolderId = $parentFolderId;
        $this->description = $description;
        $this->driveId = $driveId;
        $this->passThrough = $passThrough;
    }
}