<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class SuppliersSort
{
    /**
     * The field on which to sort the Suppliers
     *
     * @var ?SuppliersSortBy $by
     */
    #[SpeakeasyMetadata('queryParam:name=by')]
    public ?SuppliersSortBy $by = null;

    /**
     * The direction in which to sort the results
     *
     * @var ?SortDirection $direction
     */
    #[SpeakeasyMetadata('queryParam:name=direction')]
    public ?SortDirection $direction = null;

    /**
     * @param  ?SuppliersSortBy  $by
     * @param  ?SortDirection  $direction
     * @phpstan-pure
     */
    public function __construct(?SuppliersSortBy $by = null, ?SortDirection $direction = SortDirection::Asc)
    {
        $this->by = $by;
        $this->direction = $direction;
    }
}