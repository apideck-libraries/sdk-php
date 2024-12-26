<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Brick\DateTime\LocalDate;
class Opportunity
{
    /**
     * The title or name of the opportunity.
     *
     * @var string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    public string $title;

    /**
     * A unique identifier for the opportunity.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * The unique identifier of the primary contact associated with the opportunity.
     *
     * @var ?string $primaryContactId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('primary_contact_id')]
    public ?string $primaryContactId;

    /**
     * An array of unique identifiers of all contacts associated with the opportunity.
     *
     * @var ?array<string> $contactIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contact_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $contactIds = null;

    /**
     * $customFields
     *
     * @var ?array<CustomField> $customFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\CustomField>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $customFields = null;

    /**
     * Indicates whether the opportunity has been deleted.
     *
     * @var ?bool $deleted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deleted')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $deleted = null;

    /**
     * The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources.
     *
     * @var ?array<PassThroughBody> $passThrough
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pass_through')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\PassThroughBody>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $passThrough = null;

    /**
     * A description of the opportunity.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * The type of the opportunity
     *
     * @var ?string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $type = null;

    /**
     * The monetary value associated with the opportunity
     *
     * @var ?float $monetaryAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('monetary_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $monetaryAmount = null;

    /**
     * Indicates the associated currency for an amount of money. Values correspond to [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217).
     *
     * @var ?Currency $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Currency|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Currency $currency = null;

    /**
     * The probability of winning the opportunity, expressed as a percentage.
     *
     * @var ?float $winProbability
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('win_probability')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $winProbability = null;

    /**
     * The expected revenue from the opportunity
     *
     * @var ?float $expectedRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expected_revenue')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $expectedRevenue = null;

    /**
     * The actual closing date for the opportunity. If close_date is null, the opportunity is not closed yet.
     *
     * @var ?LocalDate $closeDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('close_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LocalDate $closeDate = null;

    /**
     * The unique identifier of the reason why the opportunity was lost.
     *
     * @var ?string $lossReasonId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('loss_reason_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lossReasonId = null;

    /**
     * The reason why the opportunity was lost.
     *
     * @var ?string $lossReason
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('loss_reason')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lossReason = null;

    /**
     * The unique identifier of the reason why the opportunity was won.
     *
     * @var ?string $wonReasonId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('won_reason_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $wonReasonId = null;

    /**
     * The reason why the opportunity was won.
     *
     * @var ?string $wonReason
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('won_reason')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $wonReason = null;

    /**
     * The unique identifier of the pipeline associated with the opportunity
     *
     * @var ?string $pipelineId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pipeline_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $pipelineId = null;

    /**
     * The unique identifier of the stage in the pipeline associated with the opportunity.
     *
     * @var ?string $pipelineStageId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pipeline_stage_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $pipelineStageId = null;

    /**
     * The unique identifier of the source of the opportunity.
     *
     * @var ?string $sourceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $sourceId = null;

    /**
     * The unique identifier of the lead associated with the opportunity.
     *
     * @var ?string $leadId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lead_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $leadId = null;

    /**
     * The source of the lead associated with the opportunity.
     *
     * @var ?string $leadSource
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lead_source')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $leadSource = null;

    /**
     * The unique identifier of the contact associated with the opportunity.
     *
     * @var ?string $contactId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contact_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $contactId = null;

    /**
     * The unique identifier of the company associated with the opportunity.
     *
     * @var ?string $companyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyId = null;

    /**
     * The name of the company associated with the opportunity.
     *
     * @var ?string $companyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyName = null;

    /**
     * The unique identifier of the user who owns the opportunity.
     *
     * @var ?string $ownerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('owner_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ownerId = null;

    /**
     * The priority level of the opportunity.
     *
     * @var ?string $priority
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('priority')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $priority = null;

    /**
     * The current status of the opportunity.
     *
     * @var ?string $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $status = null;

    /**
     * The unique identifier of the current status of the opportunity.
     *
     * @var ?string $statusId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $statusId = null;

    /**
     * $tags
     *
     * @var ?array<string> $tags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $tags = null;

    /**
     * The number of interactions with the opportunity.
     *
     * @var ?float $interactionCount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('interaction_count')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $interactionCount = null;

    /**
     * The date and time when the stage of the opportunity was last changed.
     *
     * @var ?\DateTime $stageLastChangedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('stage_last_changed_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $stageLastChangedAt = null;

    /**
     * The date and time of the last activity associated with the opportunity.
     *
     * @var ?string $lastActivityAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_activity_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastActivityAt = null;

    /**
     * The date and time when the stage of the opportunity was last changed.
     *
     * @var ?\DateTime $dateStageChanged
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('date_stage_changed')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $dateStageChanged = null;

    /**
     * The date and time when the opportunity was last contacted.
     *
     * @var ?\DateTime $dateLastContacted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('date_last_contacted')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $dateLastContacted = null;

    /**
     * The date and time when the lead associated with the opportunity was created.
     *
     * @var ?\DateTime $dateLeadCreated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('date_lead_created')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $dateLeadCreated = null;

    /**
     * When custom mappings are configured on the resource, the result is included here.
     *
     * @var ?CustomMappings $customMappings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_mappings')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\CustomMappings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomMappings $customMappings = null;

    /**
     * The unique identifier of the user who last updated the opportunity.
     *
     * @var ?string $updatedBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_by')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $updatedBy = null;

    /**
     * The unique identifier of the user who created the opportunity.
     *
     * @var ?string $createdBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_by')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdBy = null;

    /**
     * The date and time when the opportunity was last updated.
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * The date and time when the opportunity was created.
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * @param  string  $title
     * @param  ?string  $id
     * @param  ?string  $primaryContactId
     * @param  ?array<string>  $contactIds
     * @param  ?array<CustomField>  $customFields
     * @param  ?bool  $deleted
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $description
     * @param  ?string  $type
     * @param  ?float  $monetaryAmount
     * @param  ?Currency  $currency
     * @param  ?float  $winProbability
     * @param  ?float  $expectedRevenue
     * @param  ?LocalDate  $closeDate
     * @param  ?string  $lossReasonId
     * @param  ?string  $lossReason
     * @param  ?string  $wonReasonId
     * @param  ?string  $wonReason
     * @param  ?string  $pipelineId
     * @param  ?string  $pipelineStageId
     * @param  ?string  $sourceId
     * @param  ?string  $leadId
     * @param  ?string  $leadSource
     * @param  ?string  $contactId
     * @param  ?string  $companyId
     * @param  ?string  $companyName
     * @param  ?string  $ownerId
     * @param  ?string  $priority
     * @param  ?string  $status
     * @param  ?string  $statusId
     * @param  ?array<string>  $tags
     * @param  ?float  $interactionCount
     * @param  ?\DateTime  $stageLastChangedAt
     * @param  ?string  $lastActivityAt
     * @param  ?\DateTime  $dateStageChanged
     * @param  ?\DateTime  $dateLastContacted
     * @param  ?\DateTime  $dateLeadCreated
     * @param  ?CustomMappings  $customMappings
     * @param  ?string  $updatedBy
     * @param  ?string  $createdBy
     * @param  ?\DateTime  $updatedAt
     * @param  ?\DateTime  $createdAt
     */
    public function __construct(string $title, ?string $id = null, ?string $primaryContactId = null, ?array $contactIds = null, ?array $customFields = null, ?bool $deleted = null, ?array $passThrough = null, ?string $description = null, ?string $type = null, ?float $monetaryAmount = null, ?Currency $currency = null, ?float $winProbability = null, ?float $expectedRevenue = null, ?LocalDate $closeDate = null, ?string $lossReasonId = null, ?string $lossReason = null, ?string $wonReasonId = null, ?string $wonReason = null, ?string $pipelineId = null, ?string $pipelineStageId = null, ?string $sourceId = null, ?string $leadId = null, ?string $leadSource = null, ?string $contactId = null, ?string $companyId = null, ?string $companyName = null, ?string $ownerId = null, ?string $priority = null, ?string $status = null, ?string $statusId = null, ?array $tags = null, ?float $interactionCount = null, ?\DateTime $stageLastChangedAt = null, ?string $lastActivityAt = null, ?\DateTime $dateStageChanged = null, ?\DateTime $dateLastContacted = null, ?\DateTime $dateLeadCreated = null, ?CustomMappings $customMappings = null, ?string $updatedBy = null, ?string $createdBy = null, ?\DateTime $updatedAt = null, ?\DateTime $createdAt = null)
    {
        $this->title = $title;
        $this->id = $id;
        $this->primaryContactId = $primaryContactId;
        $this->contactIds = $contactIds;
        $this->customFields = $customFields;
        $this->deleted = $deleted;
        $this->passThrough = $passThrough;
        $this->description = $description;
        $this->type = $type;
        $this->monetaryAmount = $monetaryAmount;
        $this->currency = $currency;
        $this->winProbability = $winProbability;
        $this->expectedRevenue = $expectedRevenue;
        $this->closeDate = $closeDate;
        $this->lossReasonId = $lossReasonId;
        $this->lossReason = $lossReason;
        $this->wonReasonId = $wonReasonId;
        $this->wonReason = $wonReason;
        $this->pipelineId = $pipelineId;
        $this->pipelineStageId = $pipelineStageId;
        $this->sourceId = $sourceId;
        $this->leadId = $leadId;
        $this->leadSource = $leadSource;
        $this->contactId = $contactId;
        $this->companyId = $companyId;
        $this->companyName = $companyName;
        $this->ownerId = $ownerId;
        $this->priority = $priority;
        $this->status = $status;
        $this->statusId = $statusId;
        $this->tags = $tags;
        $this->interactionCount = $interactionCount;
        $this->stageLastChangedAt = $stageLastChangedAt;
        $this->lastActivityAt = $lastActivityAt;
        $this->dateStageChanged = $dateStageChanged;
        $this->dateLastContacted = $dateLastContacted;
        $this->dateLeadCreated = $dateLeadCreated;
        $this->customMappings = $customMappings;
        $this->updatedBy = $updatedBy;
        $this->createdBy = $createdBy;
        $this->updatedAt = $updatedAt;
        $this->createdAt = $createdAt;
    }
}