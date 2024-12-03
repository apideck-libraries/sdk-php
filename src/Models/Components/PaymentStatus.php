<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** Status of payment */
enum PaymentStatus: string
{
    case Authorised = 'authorised';
    case Paid = 'paid';
    case Voided = 'voided';
    case Deleted = 'deleted';
}
