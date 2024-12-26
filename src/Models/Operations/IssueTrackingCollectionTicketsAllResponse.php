<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class IssueTrackingCollectionTicketsAllResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var \Psr\Http\Message\ResponseInterface $rawResponse
     */
    public \Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * List Tickets
     *
     * @var ?Components\GetTicketsResponse $getTicketsResponse
     */
    public ?Components\GetTicketsResponse $getTicketsResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @var \Closure(string): ?IssueTrackingCollectionTicketsAllResponse $next
     */
    public \Closure $next;
    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?Components\GetTicketsResponse  $getTicketsResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Components\GetTicketsResponse $getTicketsResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->getTicketsResponse = $getTicketsResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
    /**
     * @param  string  $name
     * @param  array<mixed>  $args
     * @return ?IssueTrackingCollectionTicketsAllResponse
     */
    public function __call($name, $args): ?IssueTrackingCollectionTicketsAllResponse
    {
        if ($name === 'next') {
            return call_user_func_array($this->next, $args);
        }

        return null;
    }
}