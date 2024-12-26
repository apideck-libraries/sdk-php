<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class TicketInput
{
    /**
     * $assignees
     *
     * @var ?array<AssigneeInput> $assignees
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('assignees')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\AssigneeInput>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $assignees = null;

    /**
     * $tags
     *
     * @var ?array<CollectionTagInput> $tags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\CollectionTagInput>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $tags = null;

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
     * The ticket's parent ID
     *
     * @var ?string $parentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentId = null;

    /**
     * The ticket's type
     *
     * @var ?string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $type = null;

    /**
     * Subject of the ticket
     *
     * @var ?string $subject
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subject')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subject = null;

    /**
     * The ticket's description. HTML version of description is mapped if supported by the third-party platform
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * The current status of the ticket. Possible values include: open, in_progress, closed, or - in cases where there is no clear mapping - the original value passed through.
     *
     * @var ?string $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $status = null;

    /**
     * Priority of the ticket
     *
     * @var ?Priority $priority
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('priority')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Priority|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Priority $priority = null;

    /**
     * Due date of the ticket
     *
     * @var ?\DateTime $dueDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('due_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $dueDate = null;

    /**
     * @param  ?array<AssigneeInput>  $assignees
     * @param  ?array<CollectionTagInput>  $tags
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $parentId
     * @param  ?string  $type
     * @param  ?string  $subject
     * @param  ?string  $description
     * @param  ?string  $status
     * @param  ?Priority  $priority
     * @param  ?\DateTime  $dueDate
     */
    public function __construct(?array $assignees = null, ?array $tags = null, ?array $passThrough = null, ?string $parentId = null, ?string $type = null, ?string $subject = null, ?string $description = null, ?string $status = null, ?Priority $priority = null, ?\DateTime $dueDate = null)
    {
        $this->assignees = $assignees;
        $this->tags = $tags;
        $this->passThrough = $passThrough;
        $this->parentId = $parentId;
        $this->type = $type;
        $this->subject = $subject;
        $this->description = $description;
        $this->status = $status;
        $this->priority = $priority;
        $this->dueDate = $dueDate;
    }
}