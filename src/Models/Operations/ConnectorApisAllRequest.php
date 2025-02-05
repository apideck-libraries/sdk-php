<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
use Apideck\Unify\Utils\SpeakeasyMetadata;
class ConnectorApisAllRequest
{
    /**
     * The ID of your Unify application
     *
     * @var ?string $appId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-apideck-app-id')]
    public ?string $appId = null;

    /**
     * Apply filters
     *
     * @var ?Components\ApisFilter $filter
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=filter')]
    public ?Components\ApisFilter $filter = null;

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
     * @param  ?int  $limit
     * @param  ?Components\ApisFilter  $filter
     * @param  ?string  $cursor
     * @phpstan-pure
     */
    public function __construct(?string $appId = null, ?Components\ApisFilter $filter = null, ?string $cursor = null, ?int $limit = 20)
    {
        $this->appId = $appId;
        $this->filter = $filter;
        $this->cursor = $cursor;
        $this->limit = $limit;
    }
}