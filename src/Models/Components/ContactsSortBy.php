<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** The field on which to sort the Contacts */
enum ContactsSortBy: string
{
    case CreatedAt = 'created_at';
    case UpdatedAt = 'updated_at';
    case Name = 'name';
    case FirstName = 'first_name';
    case LastName = 'last_name';
    case Email = 'email';
}
