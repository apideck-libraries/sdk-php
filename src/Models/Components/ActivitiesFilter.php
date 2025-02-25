<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class ActivitiesFilter
{
    /**
     * Company ID to filter on
     *
     * @var ?string $companyId
     */
    #[SpeakeasyMetadata('queryParam:name=company_id')]
    public ?string $companyId = null;

    /**
     * Owner ID to filter on
     *
     * @var ?string $ownerId
     */
    #[SpeakeasyMetadata('queryParam:name=owner_id')]
    public ?string $ownerId = null;

    /**
     * Primary contact ID to filter on
     *
     * @var ?string $contactId
     */
    #[SpeakeasyMetadata('queryParam:name=contact_id')]
    public ?string $contactId = null;

    /**
     *
     * @var ?\DateTime $updatedSince
     */
    #[SpeakeasyMetadata('queryParam:name=updated_since,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $updatedSince = null;

    /**
     * Type to filter on
     *
     * @var ?string $type
     */
    #[SpeakeasyMetadata('queryParam:name=type')]
    public ?string $type = null;

    /**
     * @param  ?string  $companyId
     * @param  ?string  $ownerId
     * @param  ?string  $contactId
     * @param  ?\DateTime  $updatedSince
     * @param  ?string  $type
     * @phpstan-pure
     */
    public function __construct(?string $companyId = null, ?string $ownerId = null, ?string $contactId = null, ?\DateTime $updatedSince = null, ?string $type = null)
    {
        $this->companyId = $companyId;
        $this->ownerId = $ownerId;
        $this->contactId = $contactId;
        $this->updatedSince = $updatedSince;
        $this->type = $type;
    }
}