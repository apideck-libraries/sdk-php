<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class FileStorageFilesExportRequest
{
    /**
     * ID of the record you are acting upon.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     * File format to export this file to. A list of available file formats for the current file is available as `export_formats` on the File resource.
     *
     * @var string $format
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=format')]
    public string $format;

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
     * The 'fields' parameter allows API users to specify the fields they want to include in the API response. If this parameter is not present, the API will return all available fields. If this parameter is present, only the fields specified in the comma-separated string will be included in the response. Nested properties can also be requested by using a dot notation. <br /><br />Example: `fields=name,email,addresses.city`<br /><br />In the example above, the response will only include the fields "name", "email" and "addresses.city". If any other fields are available, they will be excluded.
     *
     * @var ?string $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?string $fields = null;

    /**
     * @param  string  $id
     * @param  string  $format
     * @param  ?string  $consumerId
     * @param  ?string  $appId
     * @param  ?string  $serviceId
     * @param  ?string  $fields
     * @phpstan-pure
     */
    public function __construct(string $id, string $format, ?string $consumerId = null, ?string $appId = null, ?string $serviceId = null, ?string $fields = null)
    {
        $this->id = $id;
        $this->format = $format;
        $this->consumerId = $consumerId;
        $this->appId = $appId;
        $this->serviceId = $serviceId;
        $this->fields = $fields;
    }
}