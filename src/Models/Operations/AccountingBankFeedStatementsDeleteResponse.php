<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class AccountingBankFeedStatementsDeleteResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * Bank Feed Statements
     *
     * @var ?Components\DeleteBankFeedStatementResponse $deleteBankFeedStatementResponse
     */
    public ?Components\DeleteBankFeedStatementResponse $deleteBankFeedStatementResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\DeleteBankFeedStatementResponse  $deleteBankFeedStatementResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     * @phpstan-pure
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\DeleteBankFeedStatementResponse $deleteBankFeedStatementResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->deleteBankFeedStatementResponse = $deleteBankFeedStatementResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
}