<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Brick\DateTime\LocalDate;
class PersonInput
{
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
     * The gender represents the gender identity of a person.
     *
     * @var ?Gender $gender
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('gender')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Gender|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Gender $gender = null;

    /**
     * Initials of the person
     *
     * @var ?string $initials
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('initials')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $initials = null;

    /**
     * Date of birth
     *
     * @var ?LocalDate $birthday
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('birthday')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LocalDate $birthday = null;

    /**
     * Date of death
     *
     * @var ?LocalDate $deceasedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deceased_on')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LocalDate $deceasedOn = null;

    /**
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $middleName
     * @param  ?Gender  $gender
     * @param  ?string  $initials
     * @param  ?LocalDate  $birthday
     * @param  ?LocalDate  $deceasedOn
     */
    public function __construct(?string $firstName = null, ?string $lastName = null, ?string $middleName = null, ?Gender $gender = null, ?string $initials = null, ?LocalDate $birthday = null, ?LocalDate $deceasedOn = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->gender = $gender;
        $this->initials = $initials;
        $this->birthday = $birthday;
        $this->deceasedOn = $deceasedOn;
    }
}