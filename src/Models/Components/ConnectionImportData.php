<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class ConnectionImportData
{
    /**
     *
     * @var ?Credentials $credentials
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('credentials')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Credentials|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Credentials $credentials = null;

    /**
     * Connection settings. Values will persist to `form_fields` with corresponding id
     *
     * @var ?ConnectionImportDataSettings $settings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('settings')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ConnectionImportDataSettings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ConnectionImportDataSettings $settings = null;

    /**
     * Attach your own consumer specific metadata
     *
     * @var ?array<string, mixed> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     * @param  ?Credentials  $credentials
     * @param  ?ConnectionImportDataSettings  $settings
     * @param  ?array<string, mixed>  $metadata
     * @phpstan-pure
     */
    public function __construct(?Credentials $credentials = null, ?ConnectionImportDataSettings $settings = null, ?array $metadata = null)
    {
        $this->credentials = $credentials;
        $this->settings = $settings;
        $this->metadata = $metadata;
    }
}