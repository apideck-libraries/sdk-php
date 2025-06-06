<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class CrmCustomObjectsAllResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * Custom objects
     *
     * @var ?Components\GetCustomObjectsResponse $getCustomObjectsResponse
     */
    public ?Components\GetCustomObjectsResponse $getCustomObjectsResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @var \Closure(string): ?CrmCustomObjectsAllResponse $next
     */
    public \Closure $next;
    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\GetCustomObjectsResponse  $getCustomObjectsResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     * @phpstan-pure
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\GetCustomObjectsResponse $getCustomObjectsResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->getCustomObjectsResponse = $getCustomObjectsResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
    /**
     * @param  string  $name
     * @param  array<mixed>  $args
     * @return ?CrmCustomObjectsAllResponse
     */
    public function __call($name, $args): ?CrmCustomObjectsAllResponse
    {
        if ($name === 'next') {
            return call_user_func_array($this->next, $args);
        }

        return null;
    }
}