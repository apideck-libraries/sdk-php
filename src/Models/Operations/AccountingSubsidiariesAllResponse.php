<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class AccountingSubsidiariesAllResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * Subsidiaries
     *
     * @var ?Components\GetSubsidiariesResponse $getSubsidiariesResponse
     */
    public ?Components\GetSubsidiariesResponse $getSubsidiariesResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @var \Closure(string): ?AccountingSubsidiariesAllResponse $next
     */
    public \Closure $next;
    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\GetSubsidiariesResponse  $getSubsidiariesResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\GetSubsidiariesResponse $getSubsidiariesResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->getSubsidiariesResponse = $getSubsidiariesResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
    /**
     * @param  string  $name
     * @param  array<mixed>  $args
     * @return ?AccountingSubsidiariesAllResponse
     */
    public function __call($name, $args): ?AccountingSubsidiariesAllResponse
    {
        if ($name === 'next') {
            return call_user_func_array($this->next, $args);
        }

        return null;
    }
}