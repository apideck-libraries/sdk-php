<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class ConnectorConnectorsOneResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * Connectors
     *
     * @var ?Components\GetConnectorResponse $getConnectorResponse
     */
    public ?Components\GetConnectorResponse $getConnectorResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\GetConnectorResponse  $getConnectorResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\GetConnectorResponse $getConnectorResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->getConnectorResponse = $getConnectorResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
}