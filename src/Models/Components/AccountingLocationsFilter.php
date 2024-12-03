<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class AccountingLocationsFilter
{
    /**
     * Id of the subsidiary to search for
     *
     * @var ?string $subsidiary
     */
    #[SpeakeasyMetadata('queryParam:name=subsidiary')]
    public ?string $subsidiary = null;

    /**
     * @param  ?string  $subsidiary
     */
    public function __construct(?string $subsidiary = null)
    {
        $this->subsidiary = $subsidiary;
    }
}