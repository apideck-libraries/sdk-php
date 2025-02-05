<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class AccountingTrackingCategoriesDeleteResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * Tracking category deleted
     *
     * @var ?Components\DeleteTrackingCategoryResponse $deleteTrackingCategoryResponse
     */
    public ?Components\DeleteTrackingCategoryResponse $deleteTrackingCategoryResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\DeleteTrackingCategoryResponse  $deleteTrackingCategoryResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     * @phpstan-pure
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\DeleteTrackingCategoryResponse $deleteTrackingCategoryResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->deleteTrackingCategoryResponse = $deleteTrackingCategoryResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
}