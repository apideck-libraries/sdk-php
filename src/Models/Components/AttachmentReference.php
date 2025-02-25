<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class AttachmentReference
{
    /**
     *
     * @var ?AttachmentReferenceType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\AttachmentReferenceType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AttachmentReferenceType $type = null;

    /**
     * A unique identifier for an object.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * @param  ?AttachmentReferenceType  $type
     * @param  ?string  $id
     * @phpstan-pure
     */
    public function __construct(?AttachmentReferenceType $type = null, ?string $id = null)
    {
        $this->type = $type;
        $this->id = $id;
    }
}