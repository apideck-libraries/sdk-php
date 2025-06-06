<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class AccountingBankFeedAccountsAllResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * Bank Feed Accounts
     *
     * @var ?Components\GetBankFeedAccountsResponse $getBankFeedAccountsResponse
     */
    public ?Components\GetBankFeedAccountsResponse $getBankFeedAccountsResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @var \Closure(string): ?AccountingBankFeedAccountsAllResponse $next
     */
    public \Closure $next;
    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\GetBankFeedAccountsResponse  $getBankFeedAccountsResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     * @phpstan-pure
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\GetBankFeedAccountsResponse $getBankFeedAccountsResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->getBankFeedAccountsResponse = $getBankFeedAccountsResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
    /**
     * @param  string  $name
     * @param  array<mixed>  $args
     * @return ?AccountingBankFeedAccountsAllResponse
     */
    public function __call($name, $args): ?AccountingBankFeedAccountsAllResponse
    {
        if ($name === 'next') {
            return call_user_func_array($this->next, $args);
        }

        return null;
    }
}