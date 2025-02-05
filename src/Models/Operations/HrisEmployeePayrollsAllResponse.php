<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class HrisEmployeePayrollsAllResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * EmployeePayrolls
     *
     * @var ?Components\GetEmployeePayrollsResponse $getEmployeePayrollsResponse
     */
    public ?Components\GetEmployeePayrollsResponse $getEmployeePayrollsResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\GetEmployeePayrollsResponse  $getEmployeePayrollsResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     * @phpstan-pure
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\GetEmployeePayrollsResponse $getEmployeePayrollsResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->getEmployeePayrollsResponse = $getEmployeePayrollsResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
}