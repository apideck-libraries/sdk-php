<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class Activity
{
    /**
     * The unique identifier of the activity
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * The type of the activity
     *
     * @var ?ActivityType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ActivityType|null')]
    public ?ActivityType $type;

    /**
     *
     * @var ?Address $locationAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Address|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Address $locationAddress = null;

    /**
     * Whether the activity is recurrent or not
     *
     * @var ?bool $recurrent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('recurrent')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $recurrent = null;

    /**
     * Custom fields of the activity
     *
     * @var ?array<CustomField> $customFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\CustomField>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $customFields = null;

    /**
     * $attendees
     *
     * @var ?array<ActivityAttendee> $attendees
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('attendees')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\ActivityAttendee>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $attendees = null;

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
     * The third-party API ID of original entity
     *
     * @var ?string $downstreamId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('downstream_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $downstreamId = null;

    /**
     * The date and time of the activity
     *
     * @var ?string $activityDatetime
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('activity_datetime')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $activityDatetime = null;

    /**
     * The duration of the activity in seconds
     *
     * @var ?int $durationSeconds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration_seconds')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $durationSeconds = null;

    /**
     * The user related to the activity
     *
     * @var ?string $userId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $userId = null;

    /**
     * The account related to the activity
     *
     * @var ?string $accountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountId = null;

    /**
     * The contact related to the activity
     *
     * @var ?string $contactId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contact_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $contactId = null;

    /**
     * The company related to the activity
     *
     * @var ?string $companyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyId = null;

    /**
     * The opportunity related to the activity
     *
     * @var ?string $opportunityId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('opportunity_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $opportunityId = null;

    /**
     * The lead related to the activity
     *
     * @var ?string $leadId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lead_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $leadId = null;

    /**
     * The owner of the activity
     *
     * @var ?string $ownerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('owner_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ownerId = null;

    /**
     * The campaign related to the activity
     *
     * @var ?string $campaignId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('campaign_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $campaignId = null;

    /**
     * The case related to the activity
     *
     * @var ?string $caseId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('case_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $caseId = null;

    /**
     * The asset related to the activity
     *
     * @var ?string $assetId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('asset_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $assetId = null;

    /**
     * The contract related to the activity
     *
     * @var ?string $contractId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contract_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $contractId = null;

    /**
     * The product related to the activity
     *
     * @var ?string $productId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $productId = null;

    /**
     * The solution related to the activity
     *
     * @var ?string $solutionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('solution_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $solutionId = null;

    /**
     * The custom object related to the activity
     *
     * @var ?string $customObjectId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_object_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customObjectId = null;

    /**
     * The title of the activity
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * A description of the activity
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * An internal note about the activity
     *
     * @var ?string $note
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('note')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $note = null;

    /**
     * The location of the activity
     *
     * @var ?string $location
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $location = null;

    /**
     * Whether the Activity is an all day event or not
     *
     * @var ?bool $allDayEvent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('all_day_event')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $allDayEvent = null;

    /**
     * Whether the Activity is private or not
     *
     * @var ?bool $private
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('private')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $private = null;

    /**
     * Whether the Activity is a group event or not
     *
     * @var ?bool $groupEvent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('group_event')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $groupEvent = null;

    /**
     * The sub type of the group event
     *
     * @var ?string $eventSubType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('event_sub_type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $eventSubType = null;

    /**
     * The type of the group event
     *
     * @var ?string $groupEventType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('group_event_type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $groupEventType = null;

    /**
     * Whether the activity is a child of another activity or not
     *
     * @var ?bool $child
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('child')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $child = null;

    /**
     * Whether the activity is archived or not
     *
     * @var ?bool $archived
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('archived')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $archived = null;

    /**
     * Whether the activity is deleted or not
     *
     * @var ?bool $deleted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deleted')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $deleted = null;

    /**
     *
     * @var ?ShowAs $showAs
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('show_as')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ShowAs|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ShowAs $showAs = null;

    /**
     * Whether the Activity is done or not
     *
     * @var ?bool $done
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('done')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $done = null;

    /**
     * The start date and time of the activity
     *
     * @var ?string $startDatetime
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_datetime')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $startDatetime = null;

    /**
     * The end date and time of the activity
     *
     * @var ?string $endDatetime
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('end_datetime')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $endDatetime = null;

    /**
     * The duration of the activity in minutes
     *
     * @var ?int $durationMinutes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration_minutes')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $durationMinutes = null;

    /**
     * The date of the activity
     *
     * @var ?string $activityDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('activity_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $activityDate = null;

    /**
     * The end date of the activity
     *
     * @var ?string $endDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('end_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $endDate = null;

    /**
     * The date and time of the reminder
     *
     * @var ?string $reminderDatetime
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reminder_datetime')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reminderDatetime = null;

    /**
     * Whether the reminder is set or not
     *
     * @var ?bool $reminderSet
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reminder_set')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $reminderSet = null;

    /**
     * The URL of the video conference
     *
     * @var ?string $videoConferenceUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('video_conference_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $videoConferenceUrl = null;

    /**
     * The ID of the video conference
     *
     * @var ?string $videoConferenceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('video_conference_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $videoConferenceId = null;

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
     * The user who last updated the activity
     *
     * @var ?string $updatedBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_by')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $updatedBy = null;

    /**
     * The user who created the activity
     *
     * @var ?string $createdBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_by')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdBy = null;

    /**
     * The date and time when the activity was last updated
     *
     * @var ?string $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $updatedAt = null;

    /**
     * The date and time when the activity was created
     *
     * @var ?string $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdAt = null;

    /**
     * @param  ?string  $id
     * @param  ?ActivityType  $type
     * @param  ?Address  $locationAddress
     * @param  ?bool  $recurrent
     * @param  ?array<CustomField>  $customFields
     * @param  ?array<ActivityAttendee>  $attendees
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $downstreamId
     * @param  ?string  $activityDatetime
     * @param  ?int  $durationSeconds
     * @param  ?string  $userId
     * @param  ?string  $accountId
     * @param  ?string  $contactId
     * @param  ?string  $companyId
     * @param  ?string  $opportunityId
     * @param  ?string  $leadId
     * @param  ?string  $ownerId
     * @param  ?string  $campaignId
     * @param  ?string  $caseId
     * @param  ?string  $assetId
     * @param  ?string  $contractId
     * @param  ?string  $productId
     * @param  ?string  $solutionId
     * @param  ?string  $customObjectId
     * @param  ?string  $title
     * @param  ?string  $description
     * @param  ?string  $note
     * @param  ?string  $location
     * @param  ?bool  $allDayEvent
     * @param  ?bool  $private
     * @param  ?bool  $groupEvent
     * @param  ?string  $eventSubType
     * @param  ?string  $groupEventType
     * @param  ?bool  $child
     * @param  ?bool  $archived
     * @param  ?bool  $deleted
     * @param  ?ShowAs  $showAs
     * @param  ?bool  $done
     * @param  ?string  $startDatetime
     * @param  ?string  $endDatetime
     * @param  ?int  $durationMinutes
     * @param  ?string  $activityDate
     * @param  ?string  $endDate
     * @param  ?string  $reminderDatetime
     * @param  ?bool  $reminderSet
     * @param  ?string  $videoConferenceUrl
     * @param  ?string  $videoConferenceId
     * @param  ?CustomMappings  $customMappings
     * @param  ?string  $updatedBy
     * @param  ?string  $createdBy
     * @param  ?string  $updatedAt
     * @param  ?string  $createdAt
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?ActivityType $type = null, ?Address $locationAddress = null, ?bool $recurrent = null, ?array $customFields = null, ?array $attendees = null, ?array $passThrough = null, ?string $downstreamId = null, ?string $activityDatetime = null, ?int $durationSeconds = null, ?string $userId = null, ?string $accountId = null, ?string $contactId = null, ?string $companyId = null, ?string $opportunityId = null, ?string $leadId = null, ?string $ownerId = null, ?string $campaignId = null, ?string $caseId = null, ?string $assetId = null, ?string $contractId = null, ?string $productId = null, ?string $solutionId = null, ?string $customObjectId = null, ?string $title = null, ?string $description = null, ?string $note = null, ?string $location = null, ?bool $allDayEvent = null, ?bool $private = null, ?bool $groupEvent = null, ?string $eventSubType = null, ?string $groupEventType = null, ?bool $child = null, ?bool $archived = null, ?bool $deleted = null, ?ShowAs $showAs = null, ?bool $done = null, ?string $startDatetime = null, ?string $endDatetime = null, ?int $durationMinutes = null, ?string $activityDate = null, ?string $endDate = null, ?string $reminderDatetime = null, ?bool $reminderSet = null, ?string $videoConferenceUrl = null, ?string $videoConferenceId = null, ?CustomMappings $customMappings = null, ?string $updatedBy = null, ?string $createdBy = null, ?string $updatedAt = null, ?string $createdAt = null)
    {
        $this->id = $id;
        $this->type = $type;
        $this->locationAddress = $locationAddress;
        $this->recurrent = $recurrent;
        $this->customFields = $customFields;
        $this->attendees = $attendees;
        $this->passThrough = $passThrough;
        $this->downstreamId = $downstreamId;
        $this->activityDatetime = $activityDatetime;
        $this->durationSeconds = $durationSeconds;
        $this->userId = $userId;
        $this->accountId = $accountId;
        $this->contactId = $contactId;
        $this->companyId = $companyId;
        $this->opportunityId = $opportunityId;
        $this->leadId = $leadId;
        $this->ownerId = $ownerId;
        $this->campaignId = $campaignId;
        $this->caseId = $caseId;
        $this->assetId = $assetId;
        $this->contractId = $contractId;
        $this->productId = $productId;
        $this->solutionId = $solutionId;
        $this->customObjectId = $customObjectId;
        $this->title = $title;
        $this->description = $description;
        $this->note = $note;
        $this->location = $location;
        $this->allDayEvent = $allDayEvent;
        $this->private = $private;
        $this->groupEvent = $groupEvent;
        $this->eventSubType = $eventSubType;
        $this->groupEventType = $groupEventType;
        $this->child = $child;
        $this->archived = $archived;
        $this->deleted = $deleted;
        $this->showAs = $showAs;
        $this->done = $done;
        $this->startDatetime = $startDatetime;
        $this->endDatetime = $endDatetime;
        $this->durationMinutes = $durationMinutes;
        $this->activityDate = $activityDate;
        $this->endDate = $endDate;
        $this->reminderDatetime = $reminderDatetime;
        $this->reminderSet = $reminderSet;
        $this->videoConferenceUrl = $videoConferenceUrl;
        $this->videoConferenceId = $videoConferenceId;
        $this->customMappings = $customMappings;
        $this->updatedBy = $updatedBy;
        $this->createdBy = $createdBy;
        $this->updatedAt = $updatedAt;
        $this->createdAt = $createdAt;
    }
}