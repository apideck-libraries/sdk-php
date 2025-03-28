<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class ApplicationInput
{
    /**
     *
     * @var ?string $applicantId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('applicant_id')]
    public ?string $applicantId;

    /**
     *
     * @var ?string $jobId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('job_id')]
    public ?string $jobId;

    /**
     *
     * @var ?Stage $stage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('stage')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Stage|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Stage $stage = null;

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
     *
     * @var ?ApplicationStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ApplicationStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ApplicationStatus $status = null;

    /**
     * @param  ?string  $applicantId
     * @param  ?string  $jobId
     * @param  ?Stage  $stage
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?ApplicationStatus  $status
     * @phpstan-pure
     */
    public function __construct(?string $applicantId = null, ?string $jobId = null, ?Stage $stage = null, ?array $passThrough = null, ?ApplicationStatus $status = null)
    {
        $this->applicantId = $applicantId;
        $this->jobId = $jobId;
        $this->stage = $stage;
        $this->passThrough = $passThrough;
        $this->status = $status;
    }
}