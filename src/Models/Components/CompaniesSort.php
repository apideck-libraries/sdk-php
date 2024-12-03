<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class CompaniesSort
{
    /**
     * The field on which to sort the Companies
     *
     * @var ?CompaniesSortBy $by
     */
    #[SpeakeasyMetadata('queryParam:name=by')]
    public ?CompaniesSortBy $by = null;

    /**
     * The direction in which to sort the results
     *
     * @var ?SortDirection $direction
     */
    #[SpeakeasyMetadata('queryParam:name=direction')]
    public ?SortDirection $direction = null;

    /**
     * @param  ?CompaniesSortBy  $by
     * @param  ?SortDirection  $direction
     */
    public function __construct(?CompaniesSortBy $by = null, ?SortDirection $direction = SortDirection::Asc)
    {
        $this->by = $by;
        $this->direction = $direction;
    }
}