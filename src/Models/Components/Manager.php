<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class Manager
{
    /**
     * A unique identifier for an object.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * The name of the manager, often a combination of their first and last names.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

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
     * The email address of the manager.
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     * The employment status of the employee, indicating whether they are currently employed, inactive, terminated, or in another status.
     *
     * @var ?EmploymentStatus $employmentStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employment_status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\EmploymentStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmploymentStatus $employmentStatus = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $email
     * @param  ?EmploymentStatus  $employmentStatus
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $name = null, ?string $firstName = null, ?string $lastName = null, ?string $email = null, ?EmploymentStatus $employmentStatus = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->employmentStatus = $employmentStatus;
    }
}