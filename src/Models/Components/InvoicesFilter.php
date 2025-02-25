<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class InvoicesFilter
{
    /**
     *
     * @var ?\DateTime $updatedSince
     */
    #[SpeakeasyMetadata('queryParam:name=updated_since,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $updatedSince = null;

    /**
     *
     * @var ?\DateTime $createdSince
     */
    #[SpeakeasyMetadata('queryParam:name=created_since,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $createdSince = null;

    /**
     * Invoice number to search for
     *
     * @var ?string $number
     */
    #[SpeakeasyMetadata('queryParam:name=number')]
    public ?string $number = null;

    /**
     * @param  ?\DateTime  $updatedSince
     * @param  ?\DateTime  $createdSince
     * @param  ?string  $number
     * @phpstan-pure
     */
    public function __construct(?\DateTime $updatedSince = null, ?\DateTime $createdSince = null, ?string $number = null)
    {
        $this->updatedSince = $updatedSince;
        $this->createdSince = $createdSince;
        $this->number = $number;
    }
}