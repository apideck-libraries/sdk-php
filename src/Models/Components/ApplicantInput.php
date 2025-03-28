<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Brick\DateTime\LocalDate;
class ApplicantInput
{
    /**
     * The name of an applicant.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $coverLetter
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cover_letter')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $coverLetter = null;

    /**
     * Typically a list of previous companies where the contact has worked or schools that the contact has attended
     *
     * @var ?string $headline
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('headline')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $headline = null;

    /**
     * $emails
     *
     * @var ?array<Email> $emails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('emails')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Email>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $emails = null;

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
     * $phoneNumbers
     *
     * @var ?array<PhoneNumber> $phoneNumbers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone_numbers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\PhoneNumber>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $phoneNumbers = null;

    /**
     * $addresses
     *
     * @var ?array<Address> $addresses
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('addresses')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Address>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $addresses = null;

    /**
     * $websites
     *
     * @var ?array<Websites> $websites
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('websites')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Websites>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $websites = null;

    /**
     * $socialLinks
     *
     * @var ?array<SocialLinks> $socialLinks
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('social_links')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\SocialLinks>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $socialLinks = null;

    /**
     *
     * @var ?string $stageId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('stage_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $stageId = null;

    /**
     *
     * @var ?string $recruiterId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('recruiter_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $recruiterId = null;

    /**
     *
     * @var ?string $coordinatorId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('coordinator_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $coordinatorId = null;

    /**
     *
     * @var ?bool $confidential
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('confidential')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $confidential = null;

    /**
     *
     * @var ?bool $anonymized
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('anonymized')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $anonymized = null;

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
     * The first name of the person.
     *
     * @var ?string $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('first_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     * The last name of the person.
     *
     * @var ?string $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     * Middle name of the person.
     *
     * @var ?string $middleName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('middle_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $middleName = null;

    /**
     * The initials of the person, usually derived from their first, middle, and last names.
     *
     * @var ?string $initials
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('initials')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $initials = null;

    /**
     * The date of birth of the person.
     *
     * @var ?LocalDate $birthday
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('birthday')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LocalDate $birthday = null;

    /**
     * The URL of the photo of a person.
     *
     * @var ?string $photoUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('photo_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $photoUrl = null;

    /**
     * The job title of the person.
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * $applicationIds
     *
     * @var ?array<string> $applicationIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('application_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $applicationIds = null;

    /**
     * $applications
     *
     * @var ?array<string> $applications
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('applications')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $applications = null;

    /**
     * $followers
     *
     * @var ?array<string> $followers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('followers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $followers = null;

    /**
     * $sources
     *
     * @var ?array<string> $sources
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sources')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $sources = null;

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
     *
     * @var ?bool $archived
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('archived')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $archived = null;

    /**
     *
     * @var ?string $ownerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('owner_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ownerId = null;

    /**
     *
     * @var ?string $recordUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('record_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $recordUrl = null;

    /**
     * Flag to indicate if the object is deleted.
     *
     * @var ?bool $deleted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deleted')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $deleted = null;

    /**
     * @param  ?string  $name
     * @param  ?string  $coverLetter
     * @param  ?string  $headline
     * @param  ?array<Email>  $emails
     * @param  ?array<CustomField>  $customFields
     * @param  ?array<PhoneNumber>  $phoneNumbers
     * @param  ?array<Address>  $addresses
     * @param  ?array<Websites>  $websites
     * @param  ?array<SocialLinks>  $socialLinks
     * @param  ?string  $stageId
     * @param  ?string  $recruiterId
     * @param  ?string  $coordinatorId
     * @param  ?bool  $confidential
     * @param  ?bool  $anonymized
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $middleName
     * @param  ?string  $initials
     * @param  ?LocalDate  $birthday
     * @param  ?string  $photoUrl
     * @param  ?string  $title
     * @param  ?array<string>  $applicationIds
     * @param  ?array<string>  $applications
     * @param  ?array<string>  $followers
     * @param  ?array<string>  $sources
     * @param  ?array<string>  $tags
     * @param  ?bool  $archived
     * @param  ?string  $ownerId
     * @param  ?string  $recordUrl
     * @param  ?bool  $deleted
     * @phpstan-pure
     */
    public function __construct(?string $name = null, ?string $coverLetter = null, ?string $headline = null, ?array $emails = null, ?array $customFields = null, ?array $phoneNumbers = null, ?array $addresses = null, ?array $websites = null, ?array $socialLinks = null, ?string $stageId = null, ?string $recruiterId = null, ?string $coordinatorId = null, ?bool $confidential = null, ?bool $anonymized = null, ?array $passThrough = null, ?string $firstName = null, ?string $lastName = null, ?string $middleName = null, ?string $initials = null, ?LocalDate $birthday = null, ?string $photoUrl = null, ?string $title = null, ?array $applicationIds = null, ?array $applications = null, ?array $followers = null, ?array $sources = null, ?array $tags = null, ?bool $archived = null, ?string $ownerId = null, ?string $recordUrl = null, ?bool $deleted = null)
    {
        $this->name = $name;
        $this->coverLetter = $coverLetter;
        $this->headline = $headline;
        $this->emails = $emails;
        $this->customFields = $customFields;
        $this->phoneNumbers = $phoneNumbers;
        $this->addresses = $addresses;
        $this->websites = $websites;
        $this->socialLinks = $socialLinks;
        $this->stageId = $stageId;
        $this->recruiterId = $recruiterId;
        $this->coordinatorId = $coordinatorId;
        $this->confidential = $confidential;
        $this->anonymized = $anonymized;
        $this->passThrough = $passThrough;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->initials = $initials;
        $this->birthday = $birthday;
        $this->photoUrl = $photoUrl;
        $this->title = $title;
        $this->applicationIds = $applicationIds;
        $this->applications = $applications;
        $this->followers = $followers;
        $this->sources = $sources;
        $this->tags = $tags;
        $this->archived = $archived;
        $this->ownerId = $ownerId;
        $this->recordUrl = $recordUrl;
        $this->deleted = $deleted;
    }
}