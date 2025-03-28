<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class ActivityAttendee
{
    /**
     * Unique identifier for the attendee
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Full name of the attendee
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * First name of the attendee
     *
     * @var ?string $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('first_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     * Middle name of the attendee
     *
     * @var ?string $middleName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('middle_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $middleName = null;

    /**
     * Last name of the attendee
     *
     * @var ?string $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     * Prefix of the attendee
     *
     * @var ?string $prefix
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('prefix')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $prefix = null;

    /**
     * Suffix of the attendee
     *
     * @var ?string $suffix
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('suffix')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $suffix = null;

    /**
     * Email address of the attendee
     *
     * @var ?string $emailAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email_address')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $emailAddress = null;

    /**
     * Whether the attendee is the organizer of the activity
     *
     * @var ?bool $isOrganizer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_organizer')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isOrganizer = null;

    /**
     * Status of the attendee
     *
     * @var ?ActivityAttendeeStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ActivityAttendeeStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ActivityAttendeeStatus $status = null;

    /**
     * The identifier for a related user
     *
     * @var ?string $userId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $userId = null;

    /**
     * The identifier for a related contact
     *
     * @var ?string $contactId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contact_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $contactId = null;

    /**
     * The last time the attendee was updated (ISO 8601)
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * The time the attendee was created (ISO 8601)
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?string  $firstName
     * @param  ?string  $middleName
     * @param  ?string  $lastName
     * @param  ?string  $prefix
     * @param  ?string  $suffix
     * @param  ?string  $emailAddress
     * @param  ?bool  $isOrganizer
     * @param  ?ActivityAttendeeStatus  $status
     * @param  ?string  $userId
     * @param  ?string  $contactId
     * @param  ?\DateTime  $updatedAt
     * @param  ?\DateTime  $createdAt
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $name = null, ?string $firstName = null, ?string $middleName = null, ?string $lastName = null, ?string $prefix = null, ?string $suffix = null, ?string $emailAddress = null, ?bool $isOrganizer = null, ?ActivityAttendeeStatus $status = null, ?string $userId = null, ?string $contactId = null, ?\DateTime $updatedAt = null, ?\DateTime $createdAt = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->prefix = $prefix;
        $this->suffix = $suffix;
        $this->emailAddress = $emailAddress;
        $this->isOrganizer = $isOrganizer;
        $this->status = $status;
        $this->userId = $userId;
        $this->contactId = $contactId;
        $this->updatedAt = $updatedAt;
        $this->createdAt = $createdAt;
    }
}