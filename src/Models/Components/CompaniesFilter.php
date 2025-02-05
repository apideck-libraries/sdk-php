<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class CompaniesFilter
{
    /**
     * Name of the company to filter on
     *
     * @var ?string $name
     */
    #[SpeakeasyMetadata('queryParam:name=name')]
    public ?string $name = null;

    /**
     * @param  ?string  $name
     * @phpstan-pure
     */
    public function __construct(?string $name = null)
    {
        $this->name = $name;
    }
}