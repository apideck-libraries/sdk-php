<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
use Apideck\Unify\Utils\SpeakeasyMetadata;
class AccountingAttachmentsUploadRequest
{
    /**
     * The reference type of the document.
     *
     * @var Components\AttachmentReferenceType $referenceType
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=reference_type')]
    public Components\AttachmentReferenceType $referenceType;

    /**
     * The reference id of the object to retrieve.
     *
     * @var string $referenceId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=reference_id')]
    public string $referenceId;

    /**
     *
     * @var string $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=*/*')]
    public string $requestBody;

    /**
     * Metadata to attach to the attachment file (JSON string)
     *
     * @var ?string $xApideckMetadata
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-apideck-metadata')]
    public ?string $xApideckMetadata = null;

    /**
     * ID of the consumer which you want to get or push data from
     *
     * @var ?string $consumerId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-apideck-consumer-id')]
    public ?string $consumerId = null;

    /**
     * The ID of your Unify application
     *
     * @var ?string $appId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-apideck-app-id')]
    public ?string $appId = null;

    /**
     * Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API.
     *
     * @var ?string $serviceId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-apideck-service-id')]
    public ?string $serviceId = null;

    /**
     * Include raw response. Mostly used for debugging purposes
     *
     * @var ?bool $raw
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=raw')]
    public ?bool $raw = null;

    /**
     * @param  Components\AttachmentReferenceType  $referenceType
     * @param  string  $referenceId
     * @param  string  $requestBody
     * @param  ?bool  $raw
     * @param  ?string  $xApideckMetadata
     * @param  ?string  $consumerId
     * @param  ?string  $appId
     * @param  ?string  $serviceId
     * @phpstan-pure
     */
    public function __construct(Components\AttachmentReferenceType $referenceType, string $referenceId, string $requestBody, ?string $xApideckMetadata = null, ?string $consumerId = null, ?string $appId = null, ?string $serviceId = null, ?bool $raw = false)
    {
        $this->referenceType = $referenceType;
        $this->referenceId = $referenceId;
        $this->requestBody = $requestBody;
        $this->xApideckMetadata = $xApideckMetadata;
        $this->consumerId = $consumerId;
        $this->appId = $appId;
        $this->serviceId = $serviceId;
        $this->raw = $raw;
    }
}