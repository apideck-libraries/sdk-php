<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Brick\DateTime\LocalDate;
class EmployeeInput
{
    /**
     *
     * @var ?PersonInput $partner
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('partner')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\PersonInput|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PersonInput $partner = null;

    /**
     *
     * @var ?EmploymentRole $employmentRole
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employment_role')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\EmploymentRole|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmploymentRole $employmentRole = null;

    /**
     *
     * @var ?Manager $manager
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('manager')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Manager|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Manager $manager = null;

    /**
     * $languages
     *
     * @var ?array<?string> $languages
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('languages')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string|null>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $languages = null;

    /**
     * $nationalities
     *
     * @var ?array<?string> $nationalities
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('nationalities')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string|null>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $nationalities = null;

    /**
     * $addresses
     *
     * @var ?array<Address> $addresses
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('addresses')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Address>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $addresses = null;

    /**
     * $phoneNumbers
     *
     * @var ?array<PhoneNumber> $phoneNumbers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone_numbers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\PhoneNumber>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $phoneNumbers = null;

    /**
     * $emails
     *
     * @var ?array<Email> $emails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('emails')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\Email>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $emails = null;

    /**
     * $customFields
     *
     * @var ?array<CustomField> $customFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\CustomField>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $customFields = null;

    /**
     * $socialLinks
     *
     * @var ?array<SocialLink> $socialLinks
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('social_links')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\SocialLink>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $socialLinks = null;

    /**
     * $bankAccounts
     *
     * @var ?array<BankAccount> $bankAccounts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bank_accounts')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\BankAccount>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $bankAccounts = null;

    /**
     *
     * @var ?ProbationPeriod $probationPeriod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('probation_period')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\ProbationPeriod|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ProbationPeriod $probationPeriod = null;

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
     * The name used to display the employee, often a combination of their first and last names.
     *
     * @var ?string $displayName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $displayName = null;

    /**
     * The name the employee prefers to be addressed by, which may be different from their legal name.
     *
     * @var ?string $preferredName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('preferred_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $preferredName = null;

    /**
     * The initials of the person, usually derived from their first, middle, and last names.
     *
     * @var ?string $initials
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('initials')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $initials = null;

    /**
     * A formal salutation for the person. For example, 'Mr', 'Mrs'
     *
     * @var ?string $salutation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('salutation')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $salutation = null;

    /**
     * The job title of the person.
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * The marital status of the employee.
     *
     * @var ?string $maritalStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('marital_status')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $maritalStatus = null;

    /**
     * The division the person is currently in. Usually a collection of departments or teams or regions.
     *
     * @var ?string $division
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('division')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $division = null;

    /**
     * Unique identifier of the division this employee belongs to.
     *
     * @var ?string $divisionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('division_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $divisionId = null;

    /**
     * The department the person is currently in. [Deprecated](https://developers.apideck.com/changelog) in favor of the dedicated department_id and department_name field.
     *
     * @var ?string $department
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('department')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $department = null;

    /**
     * Unique identifier of the department ID this employee belongs to.
     *
     * @var ?string $departmentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('department_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $departmentId = null;

    /**
     * Name of the department this employee belongs to.
     *
     * @var ?string $departmentName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('department_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $departmentName = null;

    /**
     * The team the person is currently in.
     *
     * @var ?Team $team
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('team')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\Team|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Team $team = null;

    /**
     * The unique identifier of the company.
     *
     * @var ?string $companyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyId = null;

    /**
     * The name of the company.
     *
     * @var ?string $companyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyName = null;

    /**
     * A Start Date is the date that the employee started working at the company
     *
     * @var ?string $employmentStartDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employment_start_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $employmentStartDate = null;

    /**
     * An End Date is the date that the employee ended working at the company
     *
     * @var ?string $employmentEndDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employment_end_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $employmentEndDate = null;

    /**
     * The reason because the employment ended.
     *
     * @var ?LeavingReason $leavingReason
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('leaving_reason')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\LeavingReason|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LeavingReason $leavingReason = null;

    /**
     * An Employee Number, Employee ID or Employee Code, is a unique number that has been assigned to each individual staff member within a company.
     *
     * @var ?string $employeeNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employee_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $employeeNumber = null;

    /**
     * The employment status of the employee, indicating whether they are currently employed, inactive, terminated, or in another status.
     *
     * @var ?EmploymentStatus $employmentStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employment_status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Apideck\Unify\Models\Components\EmploymentStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmploymentStatus $employmentStatus = null;

    /**
     * The ethnicity of the employee
     *
     * @var ?string $ethnicity
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ethnicity')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ethnicity = null;

    /**
     * Direct reports is an array of ids that reflect the individuals in an organizational hierarchy who are directly supervised by this specific employee.
     *
     * @var ?array<string> $directReports
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('direct_reports')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $directReports = null;

    /**
     * A unique identifier assigned by the government. This field is considered sensitive information and may be subject to special security and privacy restrictions.
     *
     * @var ?string $socialSecurityNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('social_security_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $socialSecurityNumber = null;

    /**
     * The date of birth of the person.
     *
     * @var ?LocalDate $birthday
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('birthday')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LocalDate $birthday = null;

    /**
     * The date the person deceased.
     *
     * @var ?LocalDate $deceasedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deceased_on')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LocalDate $deceasedOn = null;

    /**
     * Country code according to ISO 3166-1 alpha-2.
     *
     * @var ?string $countryOfBirth
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country_of_birth')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $countryOfBirth = null;

    /**
     * A description of the object.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

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
     * The preferred pronouns of the person.
     *
     * @var ?string $pronouns
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pronouns')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $pronouns = null;

    /**
     * language code according to ISO 639-1. For the United States - EN
     *
     * @var ?string $preferredLanguage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('preferred_language')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $preferredLanguage = null;

    /**
     * The URL of the photo of a person.
     *
     * @var ?string $photoUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('photo_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $photoUrl = null;

    /**
     * The time zone related to the resource. The value is a string containing a standard time zone identifier, e.g. Europe/London.
     *
     * @var ?string $timezone
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timezone')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $timezone = null;

    /**
     * When the employee is imported as a new hire, this field indicates what system (e.g. the name of the ATS) this employee was imported from.
     *
     * @var ?string $source
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $source = null;

    /**
     * Unique identifier of the employee in the system this employee was imported from (e.g. the ID in the ATS).
     *
     * @var ?string $sourceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $sourceId = null;

    /**
     *
     * @var ?string $recordUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('record_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $recordUrl = null;

    /**
     * $jobs
     *
     * @var ?array<EmployeeJobInput> $jobs
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('jobs')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\EmployeeJobInput>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $jobs = null;

    /**
     * $compensations
     *
     * @var ?array<EmployeeCompensationInput> $compensations
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('compensations')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Apideck\Unify\Models\Components\EmployeeCompensationInput>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $compensations = null;

    /**
     * Indicates if the employee works from a remote location.
     *
     * @var ?bool $worksRemote
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('works_remote')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $worksRemote = null;

    /**
     *
     * @var ?string $taxCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $taxCode = null;

    /**
     *
     * @var ?string $taxId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $taxId = null;

    /**
     * Indicate the employee's dietary preference.
     *
     * @var ?string $dietaryPreference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('dietary_preference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $dietaryPreference = null;

    /**
     * Indicate the employee's food allergies.
     *
     * @var ?array<string> $foodAllergies
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('food_allergies')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $foodAllergies = null;

    /**
     * $tags
     *
     * @var ?array<string> $tags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $tags = null;

    /**
     * A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object.
     *
     * @var ?string $rowVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('row_version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $rowVersion = null;

    /**
     * Flag to indicate if the object is deleted.
     *
     * @var ?bool $deleted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deleted')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $deleted = null;

    /**
     * @param  ?PersonInput  $partner
     * @param  ?EmploymentRole  $employmentRole
     * @param  ?Manager  $manager
     * @param  ?array<?string>  $languages
     * @param  ?array<?string>  $nationalities
     * @param  ?array<Address>  $addresses
     * @param  ?array<PhoneNumber>  $phoneNumbers
     * @param  ?array<Email>  $emails
     * @param  ?array<CustomField>  $customFields
     * @param  ?array<SocialLink>  $socialLinks
     * @param  ?array<BankAccount>  $bankAccounts
     * @param  ?ProbationPeriod  $probationPeriod
     * @param  ?array<PassThroughBody>  $passThrough
     * @param  ?string  $id
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $middleName
     * @param  ?string  $displayName
     * @param  ?string  $preferredName
     * @param  ?string  $initials
     * @param  ?string  $salutation
     * @param  ?string  $title
     * @param  ?string  $maritalStatus
     * @param  ?string  $division
     * @param  ?string  $divisionId
     * @param  ?string  $department
     * @param  ?string  $departmentId
     * @param  ?string  $departmentName
     * @param  ?Team  $team
     * @param  ?string  $companyId
     * @param  ?string  $companyName
     * @param  ?string  $employmentStartDate
     * @param  ?string  $employmentEndDate
     * @param  ?LeavingReason  $leavingReason
     * @param  ?string  $employeeNumber
     * @param  ?EmploymentStatus  $employmentStatus
     * @param  ?string  $ethnicity
     * @param  ?array<string>  $directReports
     * @param  ?string  $socialSecurityNumber
     * @param  ?LocalDate  $birthday
     * @param  ?LocalDate  $deceasedOn
     * @param  ?string  $countryOfBirth
     * @param  ?string  $description
     * @param  ?Gender  $gender
     * @param  ?string  $pronouns
     * @param  ?string  $preferredLanguage
     * @param  ?string  $photoUrl
     * @param  ?string  $timezone
     * @param  ?string  $source
     * @param  ?string  $sourceId
     * @param  ?string  $recordUrl
     * @param  ?array<EmployeeJobInput>  $jobs
     * @param  ?array<EmployeeCompensationInput>  $compensations
     * @param  ?bool  $worksRemote
     * @param  ?string  $taxCode
     * @param  ?string  $taxId
     * @param  ?string  $dietaryPreference
     * @param  ?array<string>  $foodAllergies
     * @param  ?array<string>  $tags
     * @param  ?string  $rowVersion
     * @param  ?bool  $deleted
     * @phpstan-pure
     */
    public function __construct(?PersonInput $partner = null, ?EmploymentRole $employmentRole = null, ?Manager $manager = null, ?array $languages = null, ?array $nationalities = null, ?array $addresses = null, ?array $phoneNumbers = null, ?array $emails = null, ?array $customFields = null, ?array $socialLinks = null, ?array $bankAccounts = null, ?ProbationPeriod $probationPeriod = null, ?array $passThrough = null, ?string $id = null, ?string $firstName = null, ?string $lastName = null, ?string $middleName = null, ?string $displayName = null, ?string $preferredName = null, ?string $initials = null, ?string $salutation = null, ?string $title = null, ?string $maritalStatus = null, ?string $division = null, ?string $divisionId = null, ?string $department = null, ?string $departmentId = null, ?string $departmentName = null, ?Team $team = null, ?string $companyId = null, ?string $companyName = null, ?string $employmentStartDate = null, ?string $employmentEndDate = null, ?LeavingReason $leavingReason = null, ?string $employeeNumber = null, ?EmploymentStatus $employmentStatus = null, ?string $ethnicity = null, ?array $directReports = null, ?string $socialSecurityNumber = null, ?LocalDate $birthday = null, ?LocalDate $deceasedOn = null, ?string $countryOfBirth = null, ?string $description = null, ?Gender $gender = null, ?string $pronouns = null, ?string $preferredLanguage = null, ?string $photoUrl = null, ?string $timezone = null, ?string $source = null, ?string $sourceId = null, ?string $recordUrl = null, ?array $jobs = null, ?array $compensations = null, ?bool $worksRemote = null, ?string $taxCode = null, ?string $taxId = null, ?string $dietaryPreference = null, ?array $foodAllergies = null, ?array $tags = null, ?string $rowVersion = null, ?bool $deleted = null)
    {
        $this->partner = $partner;
        $this->employmentRole = $employmentRole;
        $this->manager = $manager;
        $this->languages = $languages;
        $this->nationalities = $nationalities;
        $this->addresses = $addresses;
        $this->phoneNumbers = $phoneNumbers;
        $this->emails = $emails;
        $this->customFields = $customFields;
        $this->socialLinks = $socialLinks;
        $this->bankAccounts = $bankAccounts;
        $this->probationPeriod = $probationPeriod;
        $this->passThrough = $passThrough;
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->displayName = $displayName;
        $this->preferredName = $preferredName;
        $this->initials = $initials;
        $this->salutation = $salutation;
        $this->title = $title;
        $this->maritalStatus = $maritalStatus;
        $this->division = $division;
        $this->divisionId = $divisionId;
        $this->department = $department;
        $this->departmentId = $departmentId;
        $this->departmentName = $departmentName;
        $this->team = $team;
        $this->companyId = $companyId;
        $this->companyName = $companyName;
        $this->employmentStartDate = $employmentStartDate;
        $this->employmentEndDate = $employmentEndDate;
        $this->leavingReason = $leavingReason;
        $this->employeeNumber = $employeeNumber;
        $this->employmentStatus = $employmentStatus;
        $this->ethnicity = $ethnicity;
        $this->directReports = $directReports;
        $this->socialSecurityNumber = $socialSecurityNumber;
        $this->birthday = $birthday;
        $this->deceasedOn = $deceasedOn;
        $this->countryOfBirth = $countryOfBirth;
        $this->description = $description;
        $this->gender = $gender;
        $this->pronouns = $pronouns;
        $this->preferredLanguage = $preferredLanguage;
        $this->photoUrl = $photoUrl;
        $this->timezone = $timezone;
        $this->source = $source;
        $this->sourceId = $sourceId;
        $this->recordUrl = $recordUrl;
        $this->jobs = $jobs;
        $this->compensations = $compensations;
        $this->worksRemote = $worksRemote;
        $this->taxCode = $taxCode;
        $this->taxId = $taxId;
        $this->dietaryPreference = $dietaryPreference;
        $this->foodAllergies = $foodAllergies;
        $this->tags = $tags;
        $this->rowVersion = $rowVersion;
        $this->deleted = $deleted;
    }
}