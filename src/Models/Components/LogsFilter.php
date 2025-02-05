<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class LogsFilter
{
    /**
     *
     * @var ?string $connectorId
     */
    #[SpeakeasyMetadata('queryParam:name=connector_id')]
    public ?string $connectorId = null;

    /**
     *
     * @var ?float $statusCode
     */
    #[SpeakeasyMetadata('queryParam:name=status_code')]
    public ?float $statusCode = null;

    /**
     *
     * @var ?string $excludeUnifiedApis
     */
    #[SpeakeasyMetadata('queryParam:name=exclude_unified_apis')]
    public ?string $excludeUnifiedApis = null;

    /**
     * @param  ?string  $connectorId
     * @param  ?float  $statusCode
     * @param  ?string  $excludeUnifiedApis
     * @phpstan-pure
     */
    public function __construct(?string $connectorId = null, ?float $statusCode = null, ?string $excludeUnifiedApis = null)
    {
        $this->connectorId = $connectorId;
        $this->statusCode = $statusCode;
        $this->excludeUnifiedApis = $excludeUnifiedApis;
    }
}