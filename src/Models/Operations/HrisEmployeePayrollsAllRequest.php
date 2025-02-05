<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
use Apideck\Unify\Utils\SpeakeasyMetadata;
class HrisEmployeePayrollsAllRequest
{
    /**
     * ID of the employee you are acting upon.
     *
     * @var string $employeeId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=employee_id')]
    public string $employeeId;

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
     * Apply filters
     *
     * @var ?Components\PayrollsFilter $filter
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=filter')]
    public ?Components\PayrollsFilter $filter = null;

    /**
     * Optional unmapped key/values that will be passed through to downstream as query parameters. Ie: ?pass_through[search]=leads becomes ?search=leads
     *
     * @var ?array<string, mixed> $passThrough
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=pass_through')]
    public ?array $passThrough = null;

    /**
     * The 'fields' parameter allows API users to specify the fields they want to include in the API response. If this parameter is not present, the API will return all available fields. If this parameter is present, only the fields specified in the comma-separated string will be included in the response. Nested properties can also be requested by using a dot notation. <br /><br />Example: `fields=name,email,addresses.city`<br /><br />In the example above, the response will only include the fields "name", "email" and "addresses.city". If any other fields are available, they will be excluded.
     *
     * @var ?string $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?string $fields = null;

    /**
     * Include raw response. Mostly used for debugging purposes
     *
     * @var ?bool $raw
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=raw')]
    public ?bool $raw = null;

    /**
     * @param  string  $employeeId
     * @param  ?bool  $raw
     * @param  ?string  $consumerId
     * @param  ?string  $appId
     * @param  ?string  $serviceId
     * @param  ?Components\PayrollsFilter  $filter
     * @param  ?array<string, mixed>  $passThrough
     * @param  ?string  $fields
     * @phpstan-pure
     */
    public function __construct(string $employeeId, ?string $consumerId = null, ?string $appId = null, ?string $serviceId = null, ?Components\PayrollsFilter $filter = null, ?array $passThrough = null, ?string $fields = null, ?bool $raw = false)
    {
        $this->employeeId = $employeeId;
        $this->consumerId = $consumerId;
        $this->appId = $appId;
        $this->serviceId = $serviceId;
        $this->filter = $filter;
        $this->passThrough = $passThrough;
        $this->fields = $fields;
        $this->raw = $raw;
    }
}