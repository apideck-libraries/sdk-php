<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** Which Unified Api request was made to. */
enum UnifiedApi: string
{
    case Crm = 'crm';
    case Lead = 'lead';
    case Proxy = 'proxy';
    case Vault = 'vault';
    case Accounting = 'accounting';
    case Hris = 'hris';
    case Ats = 'ats';
    case Ecommerce = 'ecommerce';
    case IssueTracking = 'issue-tracking';
    case Pos = 'pos';
    case FileStorage = 'file-storage';
    case Sms = 'sms';
}
