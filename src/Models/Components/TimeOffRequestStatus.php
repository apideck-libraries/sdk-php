<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** Time off request status to filter on */
enum TimeOffRequestStatus: string
{
    case Requested = 'requested';
    case Approved = 'approved';
    case Declined = 'declined';
    case Cancelled = 'cancelled';
    case Deleted = 'deleted';
    case Other = 'other';
}
