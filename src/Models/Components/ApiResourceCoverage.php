<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class ApiResourceCoverage
{
    /**
     * ID of the resource, typically a lowercased version of name.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Name of the resource (plural)
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * Status of the resource. Resources with status live or beta are callable.
     *
     * @var ?ResourceStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ResourceStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ResourceStatus $status = null;

    /**
     * $coverage
     *
     * @var ?array<Coverage> $coverage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('coverage')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Coverage>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $coverage = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?ResourceStatus  $status
     * @param  ?array<Coverage>  $coverage
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $name = null, ?ResourceStatus $status = null, ?array $coverage = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->coverage = $coverage;
    }
}