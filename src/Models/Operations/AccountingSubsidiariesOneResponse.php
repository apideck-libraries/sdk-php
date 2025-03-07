<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class AccountingSubsidiariesOneResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * Subsidiary
     *
     * @var ?Components\GetSubsidiaryResponse $getSubsidiaryResponse
     */
    public ?Components\GetSubsidiaryResponse $getSubsidiaryResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\GetSubsidiaryResponse  $getSubsidiaryResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     * @phpstan-pure
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\GetSubsidiaryResponse $getSubsidiaryResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->getSubsidiaryResponse = $getSubsidiaryResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
}