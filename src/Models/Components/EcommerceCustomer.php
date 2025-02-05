<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class EcommerceCustomer
{
    /**
     * A unique identifier for an object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * An array of addresses for the customer.
     *
     * @var ?array<Addresses> $addresses
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('addresses')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Addresses>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $addresses = null;

    /**
     * $orders
     *
     * @var ?array<LinkedEcommerceOrder> $orders
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('orders')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\LinkedEcommerceOrder>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $orders = null;

    /**
     * Full name of the customer
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * First name of the customer
     *
     * @var ?string $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('first_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     * Last name of the customer
     *
     * @var ?string $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     * Company name of the customer
     *
     * @var ?string $companyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyName = null;

    /**
     * The current status of the customer
     *
     * @var ?CustomerStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\CustomerStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomerStatus $status = null;

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
     * An array of email addresses for the customer.
     *
     * @var ?array<Email> $emails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('emails')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Email>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $emails = null;

    /**
     * An array of phone numbers for the customer.
     *
     * @var ?array<PhoneNumber> $phoneNumbers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone_numbers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\PhoneNumber>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $phoneNumbers = null;

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
     * The date and time when the object was created.
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * The date and time when the object was last updated.
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  string  $id
     * @param  ?array<Addresses>  $addresses
     * @param  ?array<LinkedEcommerceOrder>  $orders
     * @param  ?string  $name
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $companyName
     * @param  ?CustomerStatus  $status
     * @param  ?Currency  $currency
     * @param  ?array<Email>  $emails
     * @param  ?array<PhoneNumber>  $phoneNumbers
     * @param  ?CustomMappings  $customMappings
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(string $id, ?array $addresses = null, ?array $orders = null, ?string $name = null, ?string $firstName = null, ?string $lastName = null, ?string $companyName = null, ?CustomerStatus $status = null, ?Currency $currency = null, ?array $emails = null, ?array $phoneNumbers = null, ?CustomMappings $customMappings = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->addresses = $addresses;
        $this->orders = $orders;
        $this->name = $name;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->companyName = $companyName;
        $this->status = $status;
        $this->currency = $currency;
        $this->emails = $emails;
        $this->phoneNumbers = $phoneNumbers;
        $this->customMappings = $customMappings;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}