<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** The type of the activity */
enum ActivityType: string
{
    case Call = 'call';
    case Meeting = 'meeting';
    case Email = 'email';
    case Note = 'note';
    case Task = 'task';
    case Deadline = 'deadline';
    case SendLetter = 'send-letter';
    case SendQuote = 'send-quote';
    case Other = 'other';
}
