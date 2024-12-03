<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class EmployeesFilter
{
    /**
     * Company ID to filter on
     *
     * @var ?string $companyId
     */
    #[SpeakeasyMetadata('queryParam:name=company_id')]
    public ?string $companyId = null;

    /**
     * Email to filter on
     *
     * @var ?string $email
     */
    #[SpeakeasyMetadata('queryParam:name=email')]
    public ?string $email = null;

    /**
     * First Name to filter on
     *
     * @var ?string $firstName
     */
    #[SpeakeasyMetadata('queryParam:name=first_name')]
    public ?string $firstName = null;

    /**
     * Job title to filter on
     *
     * @var ?string $title
     */
    #[SpeakeasyMetadata('queryParam:name=title')]
    public ?string $title = null;

    /**
     * Last Name to filter on
     *
     * @var ?string $lastName
     */
    #[SpeakeasyMetadata('queryParam:name=last_name')]
    public ?string $lastName = null;

    /**
     * Manager id to filter on
     *
     * @var ?string $managerId
     */
    #[SpeakeasyMetadata('queryParam:name=manager_id')]
    public ?string $managerId = null;

    /**
     * Employment status to filter on
     *
     * @var ?EmployeesFilterEmploymentStatus $employmentStatus
     */
    #[SpeakeasyMetadata('queryParam:name=employment_status')]
    public ?EmployeesFilterEmploymentStatus $employmentStatus = null;

    /**
     * Employee number to filter on
     *
     * @var ?string $employeeNumber
     */
    #[SpeakeasyMetadata('queryParam:name=employee_number')]
    public ?string $employeeNumber = null;

    /**
     * ID of the department to filter on
     *
     * @var ?string $departmentId
     */
    #[SpeakeasyMetadata('queryParam:name=department_id')]
    public ?string $departmentId = null;

    /**
     * @param  ?string  $companyId
     * @param  ?string  $email
     * @param  ?string  $firstName
     * @param  ?string  $title
     * @param  ?string  $lastName
     * @param  ?string  $managerId
     * @param  ?EmployeesFilterEmploymentStatus  $employmentStatus
     * @param  ?string  $employeeNumber
     * @param  ?string  $departmentId
     */
    public function __construct(?string $companyId = null, ?string $email = null, ?string $firstName = null, ?string $title = null, ?string $lastName = null, ?string $managerId = null, ?EmployeesFilterEmploymentStatus $employmentStatus = null, ?string $employeeNumber = null, ?string $departmentId = null)
    {
        $this->companyId = $companyId;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->title = $title;
        $this->lastName = $lastName;
        $this->managerId = $managerId;
        $this->employmentStatus = $employmentStatus;
        $this->employeeNumber = $employeeNumber;
        $this->departmentId = $departmentId;
    }
}