<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class User
{
    /**
     * $emails
     *
     * @var array<Email> $emails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('emails')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Email>')]
    public array $emails;

    /**
     * The unique identifier for the user
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

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
     * $phoneNumbers
     *
     * @var ?array<PhoneNumber> $phoneNumbers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone_numbers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\PhoneNumber>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $phoneNumbers = null;

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
     * The parent user id
     *
     * @var ?string $parentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentId = null;

    /**
     * The username of the user
     *
     * @var ?string $username
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('username')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $username = null;

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
     * The job title of the person.
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * The division the person is currently in. Usually a collection of departments or teams or regions.
     *
     * @var ?string $division
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('division')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $division = null;

    /**
     * The department the person is currently in. [Deprecated](https://developers.apideck.com/changelog) in favor of the dedicated department_id and department_name field.
     *
     * @var ?string $department
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('department')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $department = null;

    /**
     * The name of the company.
     *
     * @var ?string $companyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyName = null;

    /**
     * An Employee Number, Employee ID or Employee Code, is a unique number that has been assigned to each individual staff member within a company.
     *
     * @var ?string $employeeNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employee_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $employeeNumber = null;

    /**
     * A description of the object.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * The URL of the user's avatar
     *
     * @var ?string $image
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('image')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $image = null;

    /**
     * language code according to ISO 639-1. For the United States - EN
     *
     * @var ?string $language
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('language')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $language = null;

    /**
     * The status of the user
     *
     * @var ?string $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $status = null;

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
     * The date and time when the user was last updated.
     *
     * @var ?string $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $updatedAt = null;

    /**
     * The date and time when the user was created.
     *
     * @var ?string $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdAt = null;

    /**
     * @param  array<Email>  $emails
     * @param  ?string  $id
     * @param  ?array<Address>  $addresses
     * @param  ?array<PhoneNumber>  $phoneNumbers
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $parentId
     * @param  ?string  $username
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $title
     * @param  ?string  $division
     * @param  ?string  $department
     * @param  ?string  $companyName
     * @param  ?string  $employeeNumber
     * @param  ?string  $description
     * @param  ?string  $image
     * @param  ?string  $language
     * @param  ?string  $status
     * @param  ?CustomMappings  $customMappings
     * @param  ?string  $updatedAt
     * @param  ?string  $createdAt
     */
    public function __construct(array $emails, ?string $id = null, ?array $addresses = null, ?array $phoneNumbers = null, ?array $passThrough = null, ?string $parentId = null, ?string $username = null, ?string $firstName = null, ?string $lastName = null, ?string $title = null, ?string $division = null, ?string $department = null, ?string $companyName = null, ?string $employeeNumber = null, ?string $description = null, ?string $image = null, ?string $language = null, ?string $status = null, ?CustomMappings $customMappings = null, ?string $updatedAt = null, ?string $createdAt = null)
    {
        $this->emails = $emails;
        $this->id = $id;
        $this->addresses = $addresses;
        $this->phoneNumbers = $phoneNumbers;
        $this->passThrough = $passThrough;
        $this->parentId = $parentId;
        $this->username = $username;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->title = $title;
        $this->division = $division;
        $this->department = $department;
        $this->companyName = $companyName;
        $this->employeeNumber = $employeeNumber;
        $this->description = $description;
        $this->image = $image;
        $this->language = $language;
        $this->status = $status;
        $this->customMappings = $customMappings;
        $this->updatedAt = $updatedAt;
        $this->createdAt = $createdAt;
    }
}