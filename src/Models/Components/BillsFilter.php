<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class BillsFilter
{
    /**
     *
     * @var ?\DateTime $updatedSince
     */
    #[SpeakeasyMetadata('queryParam:name=updated_since,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $updatedSince = null;

    /**
     * @param  ?\DateTime  $updatedSince
     * @phpstan-pure
     */
    public function __construct(?\DateTime $updatedSince = null)
    {
        $this->updatedSince = $updatedSince;
    }
}