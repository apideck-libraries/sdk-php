<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class ConnectorApisAllResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * Apis
     *
     * @var ?Components\GetApisResponse $getApisResponse
     */
    public ?Components\GetApisResponse $getApisResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @var \Closure(string): ?ConnectorApisAllResponse $next
     */
    public \Closure $next;
    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\GetApisResponse  $getApisResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     * @phpstan-pure
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\GetApisResponse $getApisResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->getApisResponse = $getApisResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
    /**
     * @param  string  $name
     * @param  array<mixed>  $args
     * @return ?ConnectorApisAllResponse
     */
    public function __call($name, $args): ?ConnectorApisAllResponse
    {
        if ($name === 'next') {
            return call_user_func_array($this->next, $args);
        }

        return null;
    }
}