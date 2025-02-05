<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** GetAccountingDepartmentResponse - Location */
class GetAccountingDepartmentResponse
{
    /**
     * HTTP Response Status Code
     *
     * @var int $statusCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status_code')]
    public int $statusCode;

    /**
     * HTTP Response Status
     *
     * @var string $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    public string $status;

    /**
     * Apideck ID of service provider
     *
     * @var string $service
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('service')]
    public string $service;

    /**
     * Unified API resource name
     *
     * @var string $resource
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('resource')]
    public string $resource;

    /**
     * Operation performed
     *
     * @var string $operation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('operation')]
    public string $operation;

    /**
     *
     * @var AccountingDepartment $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\AccountingDepartment')]
    public AccountingDepartment $data;

    /**
     * @param  int  $statusCode
     * @param  string  $status
     * @param  string  $service
     * @param  string  $resource
     * @param  string  $operation
     * @param  AccountingDepartment  $data
     * @phpstan-pure
     */
    public function __construct(int $statusCode, string $status, string $service, string $resource, string $operation, AccountingDepartment $data)
    {
        $this->statusCode = $statusCode;
        $this->status = $status;
        $this->service = $service;
        $this->resource = $resource;
        $this->operation = $operation;
        $this->data = $data;
    }
}