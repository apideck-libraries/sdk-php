<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Errors;


use Apideck\Unify\Utils;
/** UnauthorizedResponse - Unauthorized */
class UnauthorizedResponse
{
    /**
     * HTTP status code
     *
     * @var ?float $statusCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $statusCode = null;

    /**
     * Contains an explanation of the status_code as defined in HTTP/1.1 standard (RFC 7231)
     *
     * @var ?string $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $error = null;

    /**
     * The type of error returned
     *
     * @var ?string $typeName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $typeName = null;

    /**
     * A human-readable message providing more details about the error.
     *
     * @var ?string $message
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('message')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $message = null;

    /**
     * Contains parameter or domain specific information related to the error and why it occurred.
     *
     * @var string|array<string, mixed>|null $detail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('detail')]
    #[\Speakeasy\Serializer\Annotation\Type('string|array<string, mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|array|null $detail = null;

    /**
     * Link to documentation of error type
     *
     * @var ?string $ref
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ref')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ref = null;

    /**
     * @param  ?float  $statusCode
     * @param  ?string  $error
     * @param  ?string  $typeName
     * @param  ?string  $message
     * @param  string|array<string, mixed>|null  $detail
     * @param  ?string  $ref
     */
    public function __construct(?float $statusCode = null, ?string $error = null, ?string $typeName = null, ?string $message = null, string|array|null $detail = null, ?string $ref = null)
    {
        $this->statusCode = $statusCode;
        $this->error = $error;
        $this->typeName = $typeName;
        $this->message = $message;
        $this->detail = $detail;
        $this->ref = $ref;
    }

    public function toException(): UnauthorizedResponseThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new UnauthorizedResponseThrowable($message, (int) $code, $this);
    }
}