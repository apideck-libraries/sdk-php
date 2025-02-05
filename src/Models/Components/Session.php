<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class Session
{
    /**
     * The metadata of the consumer. This is used to display the consumer in the sidebar. This is optional, but recommended.
     *
     * @var ?ConsumerMetadata $consumerMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('consumer_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ConsumerMetadata|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ConsumerMetadata $consumerMetadata = null;

    /**
     * The URL to redirect the user to after the session has been configured.
     *
     * @var ?string $redirectUri
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('redirect_uri')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $redirectUri = null;

    /**
     * Settings to change the way the Vault is displayed.
     *
     * @var ?SessionSettings $settings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('settings')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\SessionSettings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SessionSettings $settings = null;

    /**
     * Theming options to change the look and feel of Vault.
     *
     * @var ?Theme $theme
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('theme')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Theme|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Theme $theme = null;

    /**
     * Custom consumer settings that are passed as part of the session.
     *
     * @var ?array<string, mixed> $customConsumerSettings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_consumer_settings')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $customConsumerSettings = null;

    /**
     * @param  ?ConsumerMetadata  $consumerMetadata
     * @param  ?string  $redirectUri
     * @param  ?SessionSettings  $settings
     * @param  ?Theme  $theme
     * @param  ?array<string, mixed>  $customConsumerSettings
     * @phpstan-pure
     */
    public function __construct(?ConsumerMetadata $consumerMetadata = null, ?string $redirectUri = null, ?SessionSettings $settings = null, ?Theme $theme = null, ?array $customConsumerSettings = null)
    {
        $this->consumerMetadata = $consumerMetadata;
        $this->redirectUri = $redirectUri;
        $this->settings = $settings;
        $this->theme = $theme;
        $this->customConsumerSettings = $customConsumerSettings;
    }
}