<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class HrisTimeOffRequestsUpdateResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * TimeOffRequests
     *
     * @var ?Components\UpdateTimeOffRequestResponse $updateTimeOffRequestResponse
     */
    public ?Components\UpdateTimeOffRequestResponse $updateTimeOffRequestResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\UpdateTimeOffRequestResponse  $updateTimeOffRequestResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     * @phpstan-pure
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\UpdateTimeOffRequestResponse $updateTimeOffRequestResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->updateTimeOffRequestResponse = $updateTimeOffRequestResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
}