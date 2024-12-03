<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class Connector
{
    /**
     * ID of the connector.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Name of the connector.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * Status of the connector. Connectors with status live or beta are callable.
     *
     * @var ?ConnectorStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ConnectorStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ConnectorStatus $status = null;

    /**
     * A description of the object.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * Link to a small square icon for the connector.
     *
     * @var ?string $iconUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('icon_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $iconUrl = null;

    /**
     * Link to the full logo for the connector.
     *
     * @var ?string $logoUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('logo_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $logoUrl = null;

    /**
     * Link to the connector's website.
     *
     * @var ?string $websiteUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('website_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $websiteUrl = null;

    /**
     * Link to the connector's signup page.
     *
     * @var ?string $signupUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('signup_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $signupUrl = null;

    /**
     * Link to the connector's partner program signup page.
     *
     * @var ?string $partnerSignupUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('partner_signup_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $partnerSignupUrl = null;

    /**
     * Set to `true` when the connector offers a free trial. Use `signup_url` to sign up for a free trial
     *
     * @var ?bool $freeTrialAvailable
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('free_trial_available')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $freeTrialAvailable = null;

    /**
     * Type of authorization used by the connector
     *
     * @var ?ConnectorAuthType $authType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('auth_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ConnectorAuthType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ConnectorAuthType $authType = null;

    /**
     * Indicates whether a connector only supports authentication. In this case the connector is not mapped to a Unified API, but can be used with the Proxy API
     *
     * @var ?bool $authOnly
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('auth_only')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $authOnly = null;

    /**
     * Set to `true` when connector was implemented from downstream docs only and without API access. This state indicates that integration will require Apideck support, and access to downstream API to validate mapping quality.
     *
     * @var ?bool $blindMapped
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('blind_mapped')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $blindMapped = null;

    /**
     * OAuth grant type used by the connector. More info: https://oauth.net/2/grant-types
     *
     * @var ?ConnectorOauthGrantType $oauthGrantType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('oauth_grant_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ConnectorOauthGrantType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ConnectorOauthGrantType $oauthGrantType = null;

    /**
     * Location of the OAuth client credentials. For most connectors the OAuth client credentials are stored on integration and managed by the application owner. For others they are stored on connection and managed by the consumer in Vault.
     *
     * @var ?OauthCredentialsSource $oauthCredentialsSource
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('oauth_credentials_source')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\OauthCredentialsSource|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OauthCredentialsSource $oauthCredentialsSource = null;

    /**
     * List of OAuth Scopes available for this connector.
     *
     * @var ?array<OauthScopes> $oauthScopes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('oauth_scopes')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\OauthScopes>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $oauthScopes = null;

    /**
     * Set to `true` when connector allows the definition of custom scopes.
     *
     * @var ?bool $customScopes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_scopes')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $customScopes = null;

    /**
     * Indicates whether Apideck Sandbox OAuth credentials are available.
     *
     * @var ?bool $hasSandboxCredentials
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('has_sandbox_credentials')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasSandboxCredentials = null;

    /**
     * $settings
     *
     * @var ?array<ConnectorSetting> $settings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('settings')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\ConnectorSetting>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $settings = null;

    /**
     * Service provider identifier
     *
     * @var ?string $serviceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('service_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $serviceId = null;

    /**
     * List of Unified APIs that feature this connector.
     *
     * @var ?array<UnifiedApis> $unifiedApis
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unified_apis')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\UnifiedApis>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $unifiedApis = null;

    /**
     * List of resources that are supported on the connector.
     *
     * @var ?array<LinkedConnectorResource> $supportedResources
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('supported_resources')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\LinkedConnectorResource>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $supportedResources = null;

    /**
     * List of resources that have settings that can be configured.
     *
     * @var ?array<string> $configurableResources
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('configurable_resources')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $configurableResources = null;

    /**
     * List of events that are supported on the connector across all Unified APIs.
     *
     * @var ?array<ConnectorEvent> $supportedEvents
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('supported_events')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\ConnectorEvent>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $supportedEvents = null;

    /**
     * How webhooks are supported for the connector. Sometimes the connector natively supports webhooks, other times Apideck virtualizes them based on polling.
     *
     * @var ?WebhookSupport $webhookSupport
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('webhook_support')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\WebhookSupport|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?WebhookSupport $webhookSupport = null;

    /**
     * When a connector has schema_support, a call can be made to retrieve a json schema that describes a downstream resource.
     *
     * @var ?SchemaSupport $schemaSupport
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('schema_support')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\SchemaSupport|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SchemaSupport $schemaSupport = null;

    /**
     * $docs
     *
     * @var ?array<ConnectorDoc> $docs
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('docs')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\ConnectorDoc>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $docs = null;

    /**
     *
     * @var ?TlsSupport $tlsSupport
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tls_support')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\TlsSupport|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TlsSupport $tlsSupport = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?ConnectorStatus  $status
     * @param  ?string  $iconUrl
     * @param  ?string  $logoUrl
     * @param  ?string  $websiteUrl
     * @param  ?string  $signupUrl
     * @param  ?string  $partnerSignupUrl
     * @param  ?bool  $freeTrialAvailable
     * @param  ?ConnectorAuthType  $authType
     * @param  ?bool  $authOnly
     * @param  ?bool  $blindMapped
     * @param  ?ConnectorOauthGrantType  $oauthGrantType
     * @param  ?OauthCredentialsSource  $oauthCredentialsSource
     * @param  ?array<OauthScopes>  $oauthScopes
     * @param  ?bool  $customScopes
     * @param  ?bool  $hasSandboxCredentials
     * @param  ?array<ConnectorSetting>  $settings
     * @param  ?string  $serviceId
     * @param  ?array<UnifiedApis>  $unifiedApis
     * @param  ?array<LinkedConnectorResource>  $supportedResources
     * @param  ?array<string>  $configurableResources
     * @param  ?array<ConnectorEvent>  $supportedEvents
     * @param  ?WebhookSupport  $webhookSupport
     * @param  ?SchemaSupport  $schemaSupport
     * @param  ?array<ConnectorDoc>  $docs
     * @param  ?TlsSupport  $tlsSupport
     * @param  ?string  $description
     */
    public function __construct(?string $id = null, ?string $name = null, ?ConnectorStatus $status = null, ?string $iconUrl = null, ?string $logoUrl = null, ?string $websiteUrl = null, ?string $signupUrl = null, ?string $partnerSignupUrl = null, ?bool $freeTrialAvailable = null, ?ConnectorAuthType $authType = null, ?bool $authOnly = null, ?bool $blindMapped = null, ?ConnectorOauthGrantType $oauthGrantType = null, ?OauthCredentialsSource $oauthCredentialsSource = null, ?array $oauthScopes = null, ?bool $customScopes = null, ?bool $hasSandboxCredentials = null, ?array $settings = null, ?string $serviceId = null, ?array $unifiedApis = null, ?array $supportedResources = null, ?array $configurableResources = null, ?array $supportedEvents = null, ?WebhookSupport $webhookSupport = null, ?SchemaSupport $schemaSupport = null, ?array $docs = null, ?TlsSupport $tlsSupport = null, ?string $description = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->iconUrl = $iconUrl;
        $this->logoUrl = $logoUrl;
        $this->websiteUrl = $websiteUrl;
        $this->signupUrl = $signupUrl;
        $this->partnerSignupUrl = $partnerSignupUrl;
        $this->freeTrialAvailable = $freeTrialAvailable;
        $this->authType = $authType;
        $this->authOnly = $authOnly;
        $this->blindMapped = $blindMapped;
        $this->oauthGrantType = $oauthGrantType;
        $this->oauthCredentialsSource = $oauthCredentialsSource;
        $this->oauthScopes = $oauthScopes;
        $this->customScopes = $customScopes;
        $this->hasSandboxCredentials = $hasSandboxCredentials;
        $this->settings = $settings;
        $this->serviceId = $serviceId;
        $this->unifiedApis = $unifiedApis;
        $this->supportedResources = $supportedResources;
        $this->configurableResources = $configurableResources;
        $this->supportedEvents = $supportedEvents;
        $this->webhookSupport = $webhookSupport;
        $this->schemaSupport = $schemaSupport;
        $this->docs = $docs;
        $this->tlsSupport = $tlsSupport;
        $this->description = $description;
    }
}