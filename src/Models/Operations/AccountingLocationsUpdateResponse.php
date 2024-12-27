<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class AccountingLocationsUpdateResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * Location
     *
     * @var ?Components\UpdateAccountingLocationResponse $updateAccountingLocationResponse
     */
    public ?Components\UpdateAccountingLocationResponse $updateAccountingLocationResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\UpdateAccountingLocationResponse  $updateAccountingLocationResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\UpdateAccountingLocationResponse $updateAccountingLocationResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->updateAccountingLocationResponse = $updateAccountingLocationResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
}