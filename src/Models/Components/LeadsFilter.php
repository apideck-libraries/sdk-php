<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class LeadsFilter
{
    /**
     * Name of the lead to filter on
     *
     * @var ?string $name
     */
    #[SpeakeasyMetadata('queryParam:name=name')]
    public ?string $name = null;

    /**
     * First name of the lead to filter on
     *
     * @var ?string $firstName
     */
    #[SpeakeasyMetadata('queryParam:name=first_name')]
    public ?string $firstName = null;

    /**
     * Last name of the lead to filter on
     *
     * @var ?string $lastName
     */
    #[SpeakeasyMetadata('queryParam:name=last_name')]
    public ?string $lastName = null;

    /**
     * E-mail of the lead to filter on
     *
     * @var ?string $email
     */
    #[SpeakeasyMetadata('queryParam:name=email')]
    public ?string $email = null;

    /**
     * Phone number of the lead to filter on
     *
     * @var ?string $phoneNumber
     */
    #[SpeakeasyMetadata('queryParam:name=phone_number')]
    public ?string $phoneNumber = null;

    /**
     * @param  ?string  $name
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $email
     * @param  ?string  $phoneNumber
     * @phpstan-pure
     */
    public function __construct(?string $name = null, ?string $firstName = null, ?string $lastName = null, ?string $email = null, ?string $phoneNumber = null)
    {
        $this->name = $name;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
    }
}