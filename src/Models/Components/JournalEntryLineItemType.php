<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** Debit entries are considered positive, and credit entries are considered negative. */
enum JournalEntryLineItemType: string
{
    case Debit = 'debit';
    case Credit = 'credit';
}
