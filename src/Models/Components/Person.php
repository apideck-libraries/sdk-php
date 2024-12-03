<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Brick\DateTime\LocalDate;
class Person
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
     * When custom mappings are configured on the resource, the result is included here.
     *
     * @var ?CustomMappings $customMappings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_mappings')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\CustomMappings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomMappings $customMappings = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $middleName
     * @param  ?Gender  $gender
     * @param  ?string  $initials
     * @param  ?LocalDate  $birthday
     * @param  ?LocalDate  $deceasedOn
     * @param  ?CustomMappings  $customMappings
     */
    public function __construct(?string $id = null, ?string $firstName = null, ?string $lastName = null, ?string $middleName = null, ?Gender $gender = null, ?string $initials = null, ?LocalDate $birthday = null, ?LocalDate $deceasedOn = null, ?CustomMappings $customMappings = null)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->gender = $gender;
        $this->initials = $initials;
        $this->birthday = $birthday;
        $this->deceasedOn = $deceasedOn;
        $this->customMappings = $customMappings;
    }
}