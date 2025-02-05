<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** ConsumerMetadata - The metadata of the consumer. This is used to display the consumer in the sidebar. This is optional, but recommended. */
class ConsumerMetadata
{
    /**
     * The name of the account as shown in the sidebar.
     *
     * @var ?string $accountName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountName = null;

    /**
     * The name of the user as shown in the sidebar.
     *
     * @var ?string $userName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $userName = null;

    /**
     * The email of the user as shown in the sidebar.
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     * The avatar of the user in the sidebar. Must be a valid URL
     *
     * @var ?string $image
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('image')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $image = null;

    /**
     * @param  ?string  $accountName
     * @param  ?string  $userName
     * @param  ?string  $email
     * @param  ?string  $image
     * @phpstan-pure
     */
    public function __construct(?string $accountName = null, ?string $userName = null, ?string $email = null, ?string $image = null)
    {
        $this->accountName = $accountName;
        $this->userName = $userName;
        $this->email = $email;
        $this->image = $image;
    }
}