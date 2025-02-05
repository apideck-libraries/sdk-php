<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class VaultConsumerRequestCountsAllResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * Consumers Request Counts within Date Range
     *
     * @var ?Components\ConsumerRequestCountsInDateRangeResponse $consumerRequestCountsInDateRangeResponse
     */
    public ?Components\ConsumerRequestCountsInDateRangeResponse $consumerRequestCountsInDateRangeResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\ConsumerRequestCountsInDateRangeResponse  $consumerRequestCountsInDateRangeResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     * @phpstan-pure
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\ConsumerRequestCountsInDateRangeResponse $consumerRequestCountsInDateRangeResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->consumerRequestCountsInDateRangeResponse = $consumerRequestCountsInDateRangeResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
}