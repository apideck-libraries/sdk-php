<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class FileStorageDrivesOneResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * Drives
     *
     * @var ?Components\GetDriveResponse $getDriveResponse
     */
    public ?Components\GetDriveResponse $getDriveResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\GetDriveResponse  $getDriveResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     * @phpstan-pure
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\GetDriveResponse $getDriveResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->getDriveResponse = $getDriveResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
}