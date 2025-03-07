<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** Permissions - Permissions the current user has on this file. */
class Permissions
{
    /**
     * Whether the current user can download this file.
     *
     * @var ?bool $download
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('download')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $download = null;

    /**
     * @param  ?bool  $download
     * @phpstan-pure
     */
    public function __construct(?bool $download = null)
    {
        $this->download = $download;
    }
}