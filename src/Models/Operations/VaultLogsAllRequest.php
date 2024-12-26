<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
use Apideck\Unify\Utils\SpeakeasyMetadata;
class VaultLogsAllRequest
{
    /**
     * The ID of your Unify application
     *
     * @var ?string $appId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-apideck-app-id')]
    public ?string $appId = null;

    /**
     * ID of the consumer which you want to get or push data from
     *
     * @var ?string $consumerId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-apideck-consumer-id')]
    public ?string $consumerId = null;

    /**
     * Filter results
     *
     * @var ?Components\LogsFilter $filter
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=filter')]
    public ?Components\LogsFilter $filter = null;

    /**
     * Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response.
     *
     * @var ?string $cursor
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=cursor')]
    public ?string $cursor = null;

    /**
     * Number of results to return. Minimum 1, Maximum 200, Default 20
     *
     * @var ?int $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;

    /**
     * @param  ?string  $appId
     * @param  ?string  $consumerId
     * @param  ?Components\LogsFilter  $filter
     * @param  ?int  $limit
     * @param  ?string  $cursor
     */
    public function __construct(?string $appId = null, ?string $consumerId = null, ?Components\LogsFilter $filter = null, ?string $cursor = null, ?int $limit = 20)
    {
        $this->appId = $appId;
        $this->consumerId = $consumerId;
        $this->filter = $filter;
        $this->cursor = $cursor;
        $this->limit = $limit;
    }
}