<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** The type of request */
enum RequestType: string
{
    case Vacation = 'vacation';
    case Sick = 'sick';
    case Personal = 'personal';
    case JuryDuty = 'jury_duty';
    case Volunteer = 'volunteer';
    case Bereavement = 'bereavement';
    case Other = 'other';
}
