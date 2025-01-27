<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class InvoiceItemsSort
{
    /**
     * The field on which to sort the Invoice Items
     *
     * @var ?InvoiceItemsSortBy $by
     */
    #[SpeakeasyMetadata('queryParam:name=by')]
    public ?InvoiceItemsSortBy $by = null;

    /**
     * The direction in which to sort the results
     *
     * @var ?SortDirection $direction
     */
    #[SpeakeasyMetadata('queryParam:name=direction')]
    public ?SortDirection $direction = null;

    /**
     * @param  ?InvoiceItemsSortBy  $by
     * @param  ?SortDirection  $direction
     */
    public function __construct(?InvoiceItemsSortBy $by = null, ?SortDirection $direction = SortDirection::Asc)
    {
        $this->by = $by;
        $this->direction = $direction;
    }
}