<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** Indicates if the webhook has has been disabled as it reached its retry limit or if account is over the usage allocated by it's plan. */
enum DisabledReason: string
{
    case None = 'none';
    case RetryLimit = 'retry_limit';
    case UsageLimit = 'usage_limit';
}
