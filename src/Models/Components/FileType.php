<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


/** The type of resource. Could be file, folder or url */
enum FileType: string
{
    case File = 'file';
    case Folder = 'folder';
    case Url = 'url';
}
