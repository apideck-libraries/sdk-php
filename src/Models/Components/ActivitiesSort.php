<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class ActivitiesSort
{
    /**
     * The field on which to sort the Activities
     *
     * @var ?ActivitiesSortBy $by
     */
    #[SpeakeasyMetadata('queryParam:name=by')]
    public ?ActivitiesSortBy $by = null;

    /**
     * The direction in which to sort the results
     *
     * @var ?SortDirection $direction
     */
    #[SpeakeasyMetadata('queryParam:name=direction')]
    public ?SortDirection $direction = null;

    /**
     * @param  ?ActivitiesSortBy  $by
     * @param  ?SortDirection  $direction
     * @phpstan-pure
     */
    public function __construct(?ActivitiesSortBy $by = null, ?SortDirection $direction = SortDirection::Asc)
    {
        $this->by = $by;
        $this->direction = $direction;
    }
}