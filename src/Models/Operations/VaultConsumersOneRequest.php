<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class VaultConsumersOneRequest
{
    /**
     * ID of the consumer to return
     *
     * @var string $consumerId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=consumer_id')]
    public string $consumerId;

    /**
     * The ID of your Unify application
     *
     * @var ?string $appId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-apideck-app-id')]
    public ?string $appId = null;

    /**
     * @param  string  $consumerId
     * @param  ?string  $appId
     */
    public function __construct(string $consumerId, ?string $appId = null)
    {
        $this->consumerId = $consumerId;
        $this->appId = $appId;
    }
}