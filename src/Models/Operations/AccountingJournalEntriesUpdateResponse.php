<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Operations;

use Apideck\Unify\Models\Components;
class AccountingJournalEntriesUpdateResponse
{
    /**
     *
     * @var Components\HTTPMetadata $httpMeta
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?Components\HTTPMetadata $httpMeta;

    /**
     * JournalEntries
     *
     * @var ?Components\UpdateJournalEntryResponse $updateJournalEntryResponse
     */
    public ?Components\UpdateJournalEntryResponse $updateJournalEntryResponse = null;

    /**
     * Unexpected error
     *
     * @var ?Components\UnexpectedErrorResponse $unexpectedErrorResponse
     */
    public ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null;

    /**
     * @param  Components\HTTPMetadata  $httpMeta
     * @param  ?Components\UpdateJournalEntryResponse  $updateJournalEntryResponse
     * @param  ?Components\UnexpectedErrorResponse  $unexpectedErrorResponse
     * @phpstan-pure
     */
    public function __construct(Components\HTTPMetadata $httpMeta, ?Components\UpdateJournalEntryResponse $updateJournalEntryResponse = null, ?Components\UnexpectedErrorResponse $unexpectedErrorResponse = null)
    {
        $this->httpMeta = $httpMeta;
        $this->updateJournalEntryResponse = $updateJournalEntryResponse;
        $this->unexpectedErrorResponse = $unexpectedErrorResponse;
    }
}