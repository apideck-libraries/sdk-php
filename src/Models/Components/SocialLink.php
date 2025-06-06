<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class SocialLink
{
    /**
     * URL of the social link, e.g. https://www.twitter.com/apideck
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     * Unique identifier of the social link
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Type of the social link, e.g. twitter
     *
     * @var ?string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $type = null;

    /**
     * @param  string  $url
     * @param  ?string  $id
     * @param  ?string  $type
     * @phpstan-pure
     */
    public function __construct(string $url, ?string $id = null, ?string $type = null)
    {
        $this->url = $url;
        $this->id = $id;
        $this->type = $type;
    }
}