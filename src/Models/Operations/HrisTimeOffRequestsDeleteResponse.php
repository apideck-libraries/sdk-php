<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class HrisTimeOffRequestsDeleteResponse
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
     * @var ?Components\DeleteTimeOffRequestResponse $deleteTimeOffRequestResponse
     */
    public ?Components\DeleteTimeOffRequestResponse $deleteTimeOffRequestResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\DeleteTimeOffRequestResponse  $deleteTimeOffRequestResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     * @phpstan-pure
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\DeleteTimeOffRequestResponse $deleteTimeOffRequestResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->deleteTimeOffRequestResponse = $deleteTimeOffRequestResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
}