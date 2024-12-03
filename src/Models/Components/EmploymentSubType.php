<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** The work schedule of the employee. */
enum EmploymentSubType: string
{
    case FullTime = 'full_time';
    case PartTime = 'part_time';
    case Hourly = 'hourly';
    case Other = 'other';
    case NotSpecified = 'not_specified';
}
