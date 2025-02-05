<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** SessionSettings - Settings to change the way the Vault is displayed. */
class SessionSettings
{
    /**
     * Provide the IDs of the Unified APIs you want to be visible. Leaving it empty or omitting this field will show all Unified APIs.
     *
     * @var ?array<UnifiedApiId> $unifiedApis
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unified_apis')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\UnifiedApiId>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $unifiedApis = null;

    /**
     * Hide actions from your users in [Vault](/apis/vault/reference#section/Get-Started). Actions in `allow_actions` will be shown on a connection in Vault.
     *
     * Available actions are: `delete`, `disconnect`, `reauthorize` and `disable`.
     * Empty array will hide all actions. By default all actions are visible.
     *
     * @var ?array<AllowActions> $allowActions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allow_actions')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\AllowActions>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $allowActions = null;

    /**
     * A boolean that controls the display of the configurable resources for an integration. When set to true, the resource configuration options will be hidden and not shown to the user. When set to false, the resource configuration options will be displayed to the user.
     *
     * @var ?bool $hideResourceSettings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hide_resource_settings')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hideResourceSettings = null;

    /**
     * Configure [Vault](/apis/vault/reference#section/Get-Started) to show a banner informing the logged in user is in a test environment.
     *
     * @var ?bool $sandboxMode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sandbox_mode')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $sandboxMode = null;

    /**
     * Configure [Vault](/apis/vault/reference#section/Get-Started) to run in isolation mode, meaning it only shows the connection settings and hides the navigation items.
     *
     * @var ?bool $isolationMode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('isolation_mode')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isolationMode = null;

    /**
     * The duration of time the session is valid for (maximum 1 week).
     *
     * @var ?string $sessionLength
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('session_length')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $sessionLength = null;

    /**
     * Configure [Vault](/apis/vault/reference#section/Get-Started) to show the logs page. Defaults to `true`.
     *
     * @var ?bool $showLogs
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('show_logs')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $showLogs = null;

    /**
     * Configure [Vault](/apis/vault/reference#section/Get-Started) to show the suggestions page. Defaults to `false`.
     *
     * @var ?bool $showSuggestions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('show_suggestions')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $showSuggestions = null;

    /**
     * Configure [Vault](/apis/vault/reference#section/Get-Started) to show the sidebar. Defaults to `true`.
     *
     * @var ?bool $showSidebar
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('show_sidebar')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $showSidebar = null;

    /**
     * Automatically redirect to redirect uri after the connection has been configured as callable. Defaults to `false`.
     *
     * @var ?bool $autoRedirect
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('auto_redirect')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $autoRedirect = null;

    /**
     * Hide Apideck connection guides in [Vault](/apis/vault/reference#section/Get-Started). Defaults to `false`.
     *
     * @var ?bool $hideGuides
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hide_guides')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hideGuides = null;

    /**
     * @param  ?array<UnifiedApiId>  $unifiedApis
     * @param  ?bool  $hideResourceSettings
     * @param  ?bool  $sandboxMode
     * @param  ?bool  $isolationMode
     * @param  ?string  $sessionLength
     * @param  ?bool  $showLogs
     * @param  ?bool  $showSuggestions
     * @param  ?bool  $showSidebar
     * @param  ?bool  $autoRedirect
     * @param  ?bool  $hideGuides
     * @param  ?array<AllowActions>  $allowActions
     * @phpstan-pure
     */
    public function __construct(?array $unifiedApis = null, ?array $allowActions = null, ?bool $hideResourceSettings = false, ?bool $sandboxMode = false, ?bool $isolationMode = false, ?string $sessionLength = '1h', ?bool $showLogs = true, ?bool $showSuggestions = false, ?bool $showSidebar = true, ?bool $autoRedirect = false, ?bool $hideGuides = false)
    {
        $this->unifiedApis = $unifiedApis;
        $this->allowActions = $allowActions;
        $this->hideResourceSettings = $hideResourceSettings;
        $this->sandboxMode = $sandboxMode;
        $this->isolationMode = $isolationMode;
        $this->sessionLength = $sessionLength;
        $this->showLogs = $showLogs;
        $this->showSuggestions = $showSuggestions;
        $this->showSidebar = $showSidebar;
        $this->autoRedirect = $autoRedirect;
        $this->hideGuides = $hideGuides;
    }
}