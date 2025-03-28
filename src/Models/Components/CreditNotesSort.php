<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class CreditNotesSort
{
    /**
     * The field on which to sort the Customers
     *
     * @var ?CreditNotesSortBy $by
     */
    #[SpeakeasyMetadata('queryParam:name=by')]
    public ?CreditNotesSortBy $by = null;

    /**
     * The direction in which to sort the results
     *
     * @var ?SortDirection $direction
     */
    #[SpeakeasyMetadata('queryParam:name=direction')]
    public ?SortDirection $direction = null;

    /**
     * @param  ?CreditNotesSortBy  $by
     * @param  ?SortDirection  $direction
     * @phpstan-pure
     */
    public function __construct(?CreditNotesSortBy $by = null, ?SortDirection $direction = SortDirection::Asc)
    {
        $this->by = $by;
        $this->direction = $direction;
    }
}