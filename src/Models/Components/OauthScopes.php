<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class OauthScopes
{
    /**
     * ID of the OAuth scope.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Label of the OAuth scope.
     *
     * @var ?string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     * List of Unified APIs that request this OAuth Scope by default. Application owners can customize the requested scopes.
     *
     * @var ?array<string> $defaultApis
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('default_apis')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $defaultApis = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $label
     * @param  ?array<string>  $defaultApis
     */
    public function __construct(?string $id = null, ?string $label = null, ?array $defaultApis = null)
    {
        $this->id = $id;
        $this->label = $label;
        $this->defaultApis = $defaultApis;
    }
}