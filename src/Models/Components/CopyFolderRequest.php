<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class CopyFolderRequest
{
    /**
     * The parent folder to create the new file within. This can be an ID or a path depending on the downstream folder. Please see the connector section below to see downstream specific gotchas.
     *
     * @var string $parentFolderId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_folder_id')]
    public string $parentFolderId;

    /**
     * The name of the folder.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

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
     * @param  string  $parentFolderId
     * @param  ?string  $name
     * @param  ?array<PassThroughBody>  $passThrough
     * @phpstan-pure
     */
    public function __construct(string $parentFolderId, ?string $name = null, ?array $passThrough = null)
    {
        $this->parentFolderId = $parentFolderId;
        $this->name = $name;
        $this->passThrough = $passThrough;
    }
}