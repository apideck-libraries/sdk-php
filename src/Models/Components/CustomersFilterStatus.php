<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** Status of customer to filter on */
enum CustomersFilterStatus: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Archived = 'archived';
    case All = 'all';
}
