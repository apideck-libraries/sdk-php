<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class TimeOffRequestInput
{
    /**
     *
     * @var ?Notes $notes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('notes')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Notes|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Notes $notes = null;

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
     * The policy type of the time off request
     *
     * @var ?string $policyType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('policy_type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $policyType = null;

    /**
     * ID of the employee
     *
     * @var ?string $employeeId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employee_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $employeeId = null;

    /**
     * ID of the policy
     *
     * @var ?string $policyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('policy_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $policyId = null;

    /**
     * The status of the time off request.
     *
     * @var ?TimeOffRequestStatusStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\TimeOffRequestStatusStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TimeOffRequestStatusStatus $status = null;

    /**
     * Description of the time off request.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * The start date of the time off request.
     *
     * @var ?string $startDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $startDate = null;

    /**
     * The end date of the time off request.
     *
     * @var ?string $endDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('end_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $endDate = null;

    /**
     * The date the request was made.
     *
     * @var ?string $requestDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('request_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $requestDate = null;

    /**
     * The type of request
     *
     * @var ?RequestType $requestType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('request_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\RequestType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?RequestType $requestType = null;

    /**
     * The date the request was approved
     *
     * @var ?string $approvalDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('approval_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $approvalDate = null;

    /**
     * The unit of time off requested. Possible values include: `hours`, `days`, or `other`.
     *
     * @var ?Units $units
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('units')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Units|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Units $units = null;

    /**
     * The amount of time off requested.
     *
     * @var ?float $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $amount = null;

    /**
     * The day part of the time off request.
     *
     * @var ?string $dayPart
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('day_part')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $dayPart = null;

    /**
     * @param  ?Notes  $notes
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $policyType
     * @param  ?string  $employeeId
     * @param  ?string  $policyId
     * @param  ?TimeOffRequestStatusStatus  $status
     * @param  ?string  $description
     * @param  ?string  $startDate
     * @param  ?string  $endDate
     * @param  ?string  $requestDate
     * @param  ?RequestType  $requestType
     * @param  ?string  $approvalDate
     * @param  ?Units  $units
     * @param  ?float  $amount
     * @param  ?string  $dayPart
     * @phpstan-pure
     */
    public function __construct(?Notes $notes = null, ?array $passThrough = null, ?string $policyType = null, ?string $employeeId = null, ?string $policyId = null, ?TimeOffRequestStatusStatus $status = null, ?string $description = null, ?string $startDate = null, ?string $endDate = null, ?string $requestDate = null, ?RequestType $requestType = null, ?string $approvalDate = null, ?Units $units = null, ?float $amount = null, ?string $dayPart = null)
    {
        $this->notes = $notes;
        $this->passThrough = $passThrough;
        $this->policyType = $policyType;
        $this->employeeId = $employeeId;
        $this->policyId = $policyId;
        $this->status = $status;
        $this->description = $description;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->requestDate = $requestDate;
        $this->requestType = $requestType;
        $this->approvalDate = $approvalDate;
        $this->units = $units;
        $this->amount = $amount;
        $this->dayPart = $dayPart;
    }
}