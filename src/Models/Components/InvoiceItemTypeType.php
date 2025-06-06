<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** Item type */
enum InvoiceItemTypeType: string
{
    case Inventory = 'inventory';
    case NonInventory = 'non_inventory';
    case Service = 'service';
    case Description = 'description';
    case Other = 'other';
}
