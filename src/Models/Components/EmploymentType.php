<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** The type of employment relationship the employee has with the organization. */
enum EmploymentType: string
{
    case Contractor = 'contractor';
    case Employee = 'employee';
    case Freelance = 'freelance';
    case Temp = 'temp';
    case Internship = 'internship';
    case Other = 'other';
}
