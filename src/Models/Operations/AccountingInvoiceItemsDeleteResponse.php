<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class AccountingInvoiceItemsDeleteResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * InvoiceItems
     *
     * @var ?Components\DeleteTaxRateResponse $deleteTaxRateResponse
     */
    public ?Components\DeleteTaxRateResponse $deleteTaxRateResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\DeleteTaxRateResponse  $deleteTaxRateResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\DeleteTaxRateResponse $deleteTaxRateResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->deleteTaxRateResponse = $deleteTaxRateResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
}