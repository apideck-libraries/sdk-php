<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class PhoneNumber
{
    /**
     * The phone number
     *
     * @var string $number
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('number')]
    public string $number;

    /**
     * Unique identifier of the phone number
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * The country code of the phone number, e.g. +1
     *
     * @var ?string $countryCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $countryCode = null;

    /**
     * The area code of the phone number, e.g. 323
     *
     * @var ?string $areaCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('area_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $areaCode = null;

    /**
     * The extension of the phone number
     *
     * @var ?string $extension
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('extension')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $extension = null;

    /**
     * The type of phone number
     *
     * @var ?PhoneNumberType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\PhoneNumberType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PhoneNumberType $type = null;

    /**
     * @param  string  $number
     * @param  ?string  $id
     * @param  ?string  $countryCode
     * @param  ?string  $areaCode
     * @param  ?string  $extension
     * @param  ?PhoneNumberType  $type
     * @phpstan-pure
     */
    public function __construct(string $number, ?string $id = null, ?string $countryCode = null, ?string $areaCode = null, ?string $extension = null, ?PhoneNumberType $type = null)
    {
        $this->number = $number;
        $this->id = $id;
        $this->countryCode = $countryCode;
        $this->areaCode = $areaCode;
        $this->extension = $extension;
        $this->type = $type;
    }
}