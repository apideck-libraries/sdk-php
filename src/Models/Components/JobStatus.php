<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** The status of the job. */
enum JobStatus: string
{
    case Draft = 'draft';
    case Internal = 'internal';
    case Published = 'published';
    case Completed = 'completed';
    case OnHold = 'on-hold';
    case Private = 'private';
}
