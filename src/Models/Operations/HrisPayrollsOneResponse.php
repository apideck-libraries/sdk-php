<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class HrisPayrollsOneResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * Payrolls
     *
     * @var ?Components\GetPayrollResponse $getPayrollResponse
     */
    public ?Components\GetPayrollResponse $getPayrollResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\GetPayrollResponse  $getPayrollResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\GetPayrollResponse $getPayrollResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->getPayrollResponse = $getPayrollResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
}