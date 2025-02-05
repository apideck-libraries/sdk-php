<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class AccountingLedgerAccountsUpdateResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * LedgerAccount updated
     *
     * @var ?Components\UpdateLedgerAccountResponse $updateLedgerAccountResponse
     */
    public ?Components\UpdateLedgerAccountResponse $updateLedgerAccountResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\UpdateLedgerAccountResponse  $updateLedgerAccountResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     * @phpstan-pure
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\UpdateLedgerAccountResponse $updateLedgerAccountResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->updateLedgerAccountResponse = $updateLedgerAccountResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
}