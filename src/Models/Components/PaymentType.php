<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** Type of payment */
enum PaymentType: string
{
    case AccountsReceivable = 'accounts_receivable';
    case AccountsPayable = 'accounts_payable';
    case AccountsReceivableCredit = 'accounts_receivable_credit';
    case AccountsPayableCredit = 'accounts_payable_credit';
    case AccountsReceivableOverpayment = 'accounts_receivable_overpayment';
    case AccountsPayableOverpayment = 'accounts_payable_overpayment';
    case AccountsReceivablePrepayment = 'accounts_receivable_prepayment';
    case AccountsPayablePrepayment = 'accounts_payable_prepayment';
}
