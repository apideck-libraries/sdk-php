<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class Email
{
    /**
     * Email address
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    public ?string $email;

    /**
     * Unique identifier for the email address
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Email type
     *
     * @var ?EmailType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\EmailType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmailType $type = null;

    /**
     * @param  ?string  $email
     * @param  ?string  $id
     * @param  ?EmailType  $type
     * @phpstan-pure
     */
    public function __construct(?string $email = null, ?string $id = null, ?EmailType $type = null)
    {
        $this->email = $email;
        $this->id = $id;
        $this->type = $type;
    }
}