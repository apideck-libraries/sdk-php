# Employees
(*hris->employees*)

## Overview

### Available Operations

* [list](#list) - List Employees
* [create](#create) - Create Employee
* [get](#get) - Get Employee
* [update](#update) - Update Employee
* [delete](#delete) - Delete Employee

## list

Apideck operates as a stateless Unified API, which means that the list endpoint only provides a portion of the employee model. This is due to the fact that most HRIS systems do not readily provide all data in every call. However, you can access the complete employee model through an employee detail call.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\HrisEmployeesAllRequest(
    serviceId: 'salesforce',
    filter: new Components\EmployeesFilter(
        companyId: '1234',
        email: 'elon@tesla.com',
        firstName: 'Elon',
        title: 'Manager',
        lastName: 'Musk',
        managerId: '1234',
        employmentStatus: Components\EmployeesFilterEmploymentStatus::Active,
        employeeNumber: '123456-AB',
        departmentId: '1234',
        city: 'San Francisco',
        country: 'US',
    ),
    sort: new Components\EmployeesSort(
        by: Components\EmployeesSortBy::CreatedAt,
        direction: Components\SortDirection::Desc,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->hris->employees->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\HrisEmployeesAllRequest](../../Models/Operations/HrisEmployeesAllRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\HrisEmployeesAllResponse](../../Models/Operations/HrisEmployeesAllResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## create

Create Employee

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Brick\DateTime\LocalDate;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\HrisEmployeesAddRequest(
    serviceId: 'salesforce',
    employee: new Components\EmployeeInput(
        id: '12345',
        firstName: 'Elon',
        lastName: 'Musk',
        middleName: 'D.',
        displayName: 'Technoking',
        preferredName: 'Elon Musk',
        initials: 'EM',
        salutation: 'Mr',
        title: 'CEO',
        maritalStatus: 'married',
        partner: new Components\PersonInput(
            firstName: 'Elon',
            lastName: 'Musk',
            middleName: 'D.',
            gender: Components\Gender::Male,
            initials: 'EM',
            birthday: LocalDate::parse('2000-08-12'),
            deceasedOn: LocalDate::parse('2000-08-12'),
        ),
        division: 'Europe',
        divisionId: '12345',
        departmentId: '12345',
        departmentName: '12345',
        team: new Components\Team(
            id: '1234',
            name: 'Full Stack Engineers',
        ),
        companyId: '23456',
        companyName: 'SpaceX',
        employmentStartDate: '2021-10-26',
        employmentEndDate: '2028-10-26',
        leavingReason: Components\LeavingReason::Resigned,
        employeeNumber: '123456-AB',
        employmentStatus: Components\EmploymentStatus::Active,
        ethnicity: 'African American',
        manager: new Components\Manager(
            id: '12345',
            name: 'Elon Musk',
            firstName: 'Elon',
            lastName: 'Musk',
            email: 'elon@musk.com',
            employmentStatus: Components\EmploymentStatus::Active,
        ),
        directReports: [
            'a0d636c6-43b3-4bde-8c70-85b707d992f4',
            'a98lfd96-43b3-4bde-8c70-85b707d992e6',
        ],
        socialSecurityNumber: '123456789',
        birthday: LocalDate::parse('2000-08-12'),
        deceasedOn: LocalDate::parse('2000-08-12'),
        countryOfBirth: 'US',
        description: 'A description',
        gender: Components\Gender::Male,
        pronouns: 'she,her',
        preferredLanguage: 'EN',
        languages: [
            'EN',
        ],
        nationalities: [
            'US',
        ],
        photoUrl: 'https://unavatar.io/elon-musk',
        timezone: 'Europe/London',
        source: 'lever',
        sourceId: '12345',
        recordUrl: 'https://app.intercom.io/contacts/12345',
        jobs: [
            new Components\EmployeeJobInput(
                title: 'CEO',
                role: 'Sales',
                startDate: LocalDate::parse('2020-08-12'),
                endDate: LocalDate::parse('2020-08-12'),
                compensationRate: 72000,
                currency: Components\Currency::Usd,
                paymentUnit: Components\PaymentUnit::Year,
                hiredAt: LocalDate::parse('2020-08-12'),
                isPrimary: true,
                isManager: true,
                status: Components\EmployeeJobStatus::Active,
                location: new Components\Address(
                    id: '123',
                    type: Components\Type::Primary,
                    string: '25 Spring Street, Blackburn, VIC 3130',
                    name: 'HQ US',
                    line1: 'Main street',
                    line2: 'apt #',
                    line3: 'Suite #',
                    line4: 'delivery instructions',
                    streetNumber: '25',
                    city: 'San Francisco',
                    state: 'CA',
                    postalCode: '94104',
                    country: 'US',
                    latitude: '40.759211',
                    longitude: '-73.984638',
                    county: 'Santa Clara',
                    contactName: 'Elon Musk',
                    salutation: 'Mr',
                    phoneNumber: '111-111-1111',
                    fax: '122-111-1111',
                    email: 'elon@musk.com',
                    website: 'https://elonmusk.com',
                    notes: 'Address notes or delivery instructions.',
                    rowVersion: '1-12345',
                ),
            ),
            new Components\EmployeeJobInput(
                title: 'CEO',
                role: 'Sales',
                startDate: LocalDate::parse('2020-08-12'),
                endDate: LocalDate::parse('2020-08-12'),
                compensationRate: 72000,
                currency: Components\Currency::Usd,
                paymentUnit: Components\PaymentUnit::Year,
                hiredAt: LocalDate::parse('2020-08-12'),
                isPrimary: true,
                isManager: true,
                status: Components\EmployeeJobStatus::Active,
                location: new Components\Address(
                    id: '123',
                    type: Components\Type::Primary,
                    string: '25 Spring Street, Blackburn, VIC 3130',
                    name: 'HQ US',
                    line1: 'Main street',
                    line2: 'apt #',
                    line3: 'Suite #',
                    line4: 'delivery instructions',
                    streetNumber: '25',
                    city: 'San Francisco',
                    state: 'CA',
                    postalCode: '94104',
                    country: 'US',
                    latitude: '40.759211',
                    longitude: '-73.984638',
                    county: 'Santa Clara',
                    contactName: 'Elon Musk',
                    salutation: 'Mr',
                    phoneNumber: '111-111-1111',
                    fax: '122-111-1111',
                    email: 'elon@musk.com',
                    website: 'https://elonmusk.com',
                    notes: 'Address notes or delivery instructions.',
                    rowVersion: '1-12345',
                ),
            ),
            new Components\EmployeeJobInput(
                title: 'CEO',
                role: 'Sales',
                startDate: LocalDate::parse('2020-08-12'),
                endDate: LocalDate::parse('2020-08-12'),
                compensationRate: 72000,
                currency: Components\Currency::Usd,
                paymentUnit: Components\PaymentUnit::Year,
                hiredAt: LocalDate::parse('2020-08-12'),
                isPrimary: true,
                isManager: true,
                status: Components\EmployeeJobStatus::Active,
                location: new Components\Address(
                    id: '123',
                    type: Components\Type::Primary,
                    string: '25 Spring Street, Blackburn, VIC 3130',
                    name: 'HQ US',
                    line1: 'Main street',
                    line2: 'apt #',
                    line3: 'Suite #',
                    line4: 'delivery instructions',
                    streetNumber: '25',
                    city: 'San Francisco',
                    state: 'CA',
                    postalCode: '94104',
                    country: 'US',
                    latitude: '40.759211',
                    longitude: '-73.984638',
                    county: 'Santa Clara',
                    contactName: 'Elon Musk',
                    salutation: 'Mr',
                    phoneNumber: '111-111-1111',
                    fax: '122-111-1111',
                    email: 'elon@musk.com',
                    website: 'https://elonmusk.com',
                    notes: 'Address notes or delivery instructions.',
                    rowVersion: '1-12345',
                ),
            ),
        ],
        compensations: [
            new Components\EmployeeCompensationInput(
                rate: 50,
                paymentUnit: Components\PaymentUnit::Hour,
                flsaStatus: Components\FlsaStatus::Nonexempt,
                effectiveDate: '2021-06-11',
            ),
        ],
        worksRemote: true,
        addresses: [
            new Components\Address(
                id: '123',
                type: Components\Type::Primary,
                string: '25 Spring Street, Blackburn, VIC 3130',
                name: 'HQ US',
                line1: 'Main street',
                line2: 'apt #',
                line3: 'Suite #',
                line4: 'delivery instructions',
                streetNumber: '25',
                city: 'San Francisco',
                state: 'CA',
                postalCode: '94104',
                country: 'US',
                latitude: '40.759211',
                longitude: '-73.984638',
                county: 'Santa Clara',
                contactName: 'Elon Musk',
                salutation: 'Mr',
                phoneNumber: '111-111-1111',
                fax: '122-111-1111',
                email: 'elon@musk.com',
                website: 'https://elonmusk.com',
                notes: 'Address notes or delivery instructions.',
                rowVersion: '1-12345',
            ),
            new Components\Address(
                id: '123',
                type: Components\Type::Primary,
                string: '25 Spring Street, Blackburn, VIC 3130',
                name: 'HQ US',
                line1: 'Main street',
                line2: 'apt #',
                line3: 'Suite #',
                line4: 'delivery instructions',
                streetNumber: '25',
                city: 'San Francisco',
                state: 'CA',
                postalCode: '94104',
                country: 'US',
                latitude: '40.759211',
                longitude: '-73.984638',
                county: 'Santa Clara',
                contactName: 'Elon Musk',
                salutation: 'Mr',
                phoneNumber: '111-111-1111',
                fax: '122-111-1111',
                email: 'elon@musk.com',
                website: 'https://elonmusk.com',
                notes: 'Address notes or delivery instructions.',
                rowVersion: '1-12345',
            ),
        ],
        phoneNumbers: [
            new Components\PhoneNumber(
                id: '12345',
                countryCode: '1',
                areaCode: '323',
                number: '111-111-1111',
                extension: '105',
                type: Components\PhoneNumberType::Primary,
            ),
        ],
        emails: [
            new Components\Email(
                id: '123',
                email: 'elon@musk.com',
                type: Components\EmailType::Primary,
            ),
        ],
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        socialLinks: [
            new Components\SocialLink(
                id: '12345',
                url: 'https://www.twitter.com/apideck',
                type: 'twitter',
            ),
            new Components\SocialLink(
                id: '12345',
                url: 'https://www.twitter.com/apideck',
                type: 'twitter',
            ),
        ],
        bankAccounts: [
            new Components\BankAccount(
                bankName: 'Monzo',
                accountNumber: '123465',
                accountName: 'SPACEX LLC',
                accountType: Components\AccountType::CreditCard,
                iban: 'CH2989144532982975332',
                bic: 'AUDSCHGGXXX',
                routingNumber: '012345678',
                bsbNumber: '062-001',
                branchIdentifier: '001',
                bankCode: 'BNH',
                currency: Components\Currency::Usd,
            ),
            new Components\BankAccount(
                bankName: 'Monzo',
                accountNumber: '123465',
                accountName: 'SPACEX LLC',
                accountType: Components\AccountType::CreditCard,
                iban: 'CH2989144532982975332',
                bic: 'AUDSCHGGXXX',
                routingNumber: '012345678',
                bsbNumber: '062-001',
                branchIdentifier: '001',
                bankCode: 'BNH',
                currency: Components\Currency::Usd,
            ),
            new Components\BankAccount(
                bankName: 'Monzo',
                accountNumber: '123465',
                accountName: 'SPACEX LLC',
                accountType: Components\AccountType::CreditCard,
                iban: 'CH2989144532982975332',
                bic: 'AUDSCHGGXXX',
                routingNumber: '012345678',
                bsbNumber: '062-001',
                branchIdentifier: '001',
                bankCode: 'BNH',
                currency: Components\Currency::Usd,
            ),
        ],
        taxCode: '1111',
        taxId: '234-32-0000',
        dietaryPreference: 'Veggie',
        foodAllergies: [
            'No allergies',
        ],
        probationPeriod: new Components\ProbationPeriod(
            startDate: LocalDate::parse('2021-10-01'),
            endDate: LocalDate::parse('2021-11-28'),
        ),
        tags: [
            'New',
        ],
        rowVersion: '1-12345',
        deleted: true,
        passThrough: [
            new Components\PassThroughBody(
                serviceId: '<id>',
                extendPaths: [
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                ],
            ),
            new Components\PassThroughBody(
                serviceId: '<id>',
                extendPaths: [
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                ],
            ),
            new Components\PassThroughBody(
                serviceId: '<id>',
                extendPaths: [
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                ],
            ),
        ],
    ),
);

$response = $sdk->hris->employees->create(
    request: $request
);

if ($response->createEmployeeResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\HrisEmployeesAddRequest](../../Models/Operations/HrisEmployeesAddRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\HrisEmployeesAddResponse](../../Models/Operations/HrisEmployeesAddResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## get

Get Employee

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\HrisEmployeesOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
    filter: new Components\EmployeesOneFilter(
        companyId: '1234',
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
);

$response = $sdk->hris->employees->get(
    request: $request
);

if ($response->getEmployeeResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\HrisEmployeesOneRequest](../../Models/Operations/HrisEmployeesOneRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\HrisEmployeesOneResponse](../../Models/Operations/HrisEmployeesOneResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## update

Update Employee

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Brick\DateTime\LocalDate;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\HrisEmployeesUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    employee: new Components\EmployeeInput(
        id: '12345',
        firstName: 'Elon',
        lastName: 'Musk',
        middleName: 'D.',
        displayName: 'Technoking',
        preferredName: 'Elon Musk',
        initials: 'EM',
        salutation: 'Mr',
        title: 'CEO',
        maritalStatus: 'married',
        partner: new Components\PersonInput(
            firstName: 'Elon',
            lastName: 'Musk',
            middleName: 'D.',
            gender: Components\Gender::Male,
            initials: 'EM',
            birthday: LocalDate::parse('2000-08-12'),
            deceasedOn: LocalDate::parse('2000-08-12'),
        ),
        division: 'Europe',
        divisionId: '12345',
        departmentId: '12345',
        departmentName: '12345',
        team: new Components\Team(
            id: '1234',
            name: 'Full Stack Engineers',
        ),
        companyId: '23456',
        companyName: 'SpaceX',
        employmentStartDate: '2021-10-26',
        employmentEndDate: '2028-10-26',
        leavingReason: Components\LeavingReason::Resigned,
        employeeNumber: '123456-AB',
        employmentStatus: Components\EmploymentStatus::Active,
        ethnicity: 'African American',
        manager: new Components\Manager(
            id: '12345',
            name: 'Elon Musk',
            firstName: 'Elon',
            lastName: 'Musk',
            email: 'elon@musk.com',
            employmentStatus: Components\EmploymentStatus::Active,
        ),
        directReports: [
            'a0d636c6-43b3-4bde-8c70-85b707d992f4',
            'a98lfd96-43b3-4bde-8c70-85b707d992e6',
        ],
        socialSecurityNumber: '123456789',
        birthday: LocalDate::parse('2000-08-12'),
        deceasedOn: LocalDate::parse('2000-08-12'),
        countryOfBirth: 'US',
        description: 'A description',
        gender: Components\Gender::Male,
        pronouns: 'she,her',
        preferredLanguage: 'EN',
        languages: [
            'EN',
        ],
        nationalities: [
            'US',
        ],
        photoUrl: 'https://unavatar.io/elon-musk',
        timezone: 'Europe/London',
        source: 'lever',
        sourceId: '12345',
        recordUrl: 'https://app.intercom.io/contacts/12345',
        jobs: [
            new Components\EmployeeJobInput(
                title: 'CEO',
                role: 'Sales',
                startDate: LocalDate::parse('2020-08-12'),
                endDate: LocalDate::parse('2020-08-12'),
                compensationRate: 72000,
                currency: Components\Currency::Usd,
                paymentUnit: Components\PaymentUnit::Year,
                hiredAt: LocalDate::parse('2020-08-12'),
                isPrimary: true,
                isManager: true,
                status: Components\EmployeeJobStatus::Active,
                location: new Components\Address(
                    id: '123',
                    type: Components\Type::Primary,
                    string: '25 Spring Street, Blackburn, VIC 3130',
                    name: 'HQ US',
                    line1: 'Main street',
                    line2: 'apt #',
                    line3: 'Suite #',
                    line4: 'delivery instructions',
                    streetNumber: '25',
                    city: 'San Francisco',
                    state: 'CA',
                    postalCode: '94104',
                    country: 'US',
                    latitude: '40.759211',
                    longitude: '-73.984638',
                    county: 'Santa Clara',
                    contactName: 'Elon Musk',
                    salutation: 'Mr',
                    phoneNumber: '111-111-1111',
                    fax: '122-111-1111',
                    email: 'elon@musk.com',
                    website: 'https://elonmusk.com',
                    notes: 'Address notes or delivery instructions.',
                    rowVersion: '1-12345',
                ),
            ),
        ],
        compensations: [
            new Components\EmployeeCompensationInput(
                rate: 50,
                paymentUnit: Components\PaymentUnit::Hour,
                flsaStatus: Components\FlsaStatus::Nonexempt,
                effectiveDate: '2021-06-11',
            ),
        ],
        worksRemote: true,
        addresses: [
            new Components\Address(
                id: '123',
                type: Components\Type::Primary,
                string: '25 Spring Street, Blackburn, VIC 3130',
                name: 'HQ US',
                line1: 'Main street',
                line2: 'apt #',
                line3: 'Suite #',
                line4: 'delivery instructions',
                streetNumber: '25',
                city: 'San Francisco',
                state: 'CA',
                postalCode: '94104',
                country: 'US',
                latitude: '40.759211',
                longitude: '-73.984638',
                county: 'Santa Clara',
                contactName: 'Elon Musk',
                salutation: 'Mr',
                phoneNumber: '111-111-1111',
                fax: '122-111-1111',
                email: 'elon@musk.com',
                website: 'https://elonmusk.com',
                notes: 'Address notes or delivery instructions.',
                rowVersion: '1-12345',
            ),
        ],
        phoneNumbers: [
            new Components\PhoneNumber(
                id: '12345',
                countryCode: '1',
                areaCode: '323',
                number: '111-111-1111',
                extension: '105',
                type: Components\PhoneNumberType::Primary,
            ),
            new Components\PhoneNumber(
                id: '12345',
                countryCode: '1',
                areaCode: '323',
                number: '111-111-1111',
                extension: '105',
                type: Components\PhoneNumberType::Primary,
            ),
        ],
        emails: [
            new Components\Email(
                id: '123',
                email: 'elon@musk.com',
                type: Components\EmailType::Primary,
            ),
        ],
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        socialLinks: [
            new Components\SocialLink(
                id: '12345',
                url: 'https://www.twitter.com/apideck',
                type: 'twitter',
            ),
            new Components\SocialLink(
                id: '12345',
                url: 'https://www.twitter.com/apideck',
                type: 'twitter',
            ),
        ],
        bankAccounts: [
            new Components\BankAccount(
                bankName: 'Monzo',
                accountNumber: '123465',
                accountName: 'SPACEX LLC',
                accountType: Components\AccountType::CreditCard,
                iban: 'CH2989144532982975332',
                bic: 'AUDSCHGGXXX',
                routingNumber: '012345678',
                bsbNumber: '062-001',
                branchIdentifier: '001',
                bankCode: 'BNH',
                currency: Components\Currency::Usd,
            ),
        ],
        taxCode: '1111',
        taxId: '234-32-0000',
        dietaryPreference: 'Veggie',
        foodAllergies: [
            'No allergies',
        ],
        probationPeriod: new Components\ProbationPeriod(
            startDate: LocalDate::parse('2021-10-01'),
            endDate: LocalDate::parse('2021-11-28'),
        ),
        tags: [
            'New',
        ],
        rowVersion: '1-12345',
        deleted: true,
        passThrough: [
            new Components\PassThroughBody(
                serviceId: '<id>',
                extendPaths: [
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                ],
            ),
            new Components\PassThroughBody(
                serviceId: '<id>',
                extendPaths: [
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                ],
            ),
        ],
    ),
);

$response = $sdk->hris->employees->update(
    request: $request
);

if ($response->updateEmployeeResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\HrisEmployeesUpdateRequest](../../Models/Operations/HrisEmployeesUpdateRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\HrisEmployeesUpdateResponse](../../Models/Operations/HrisEmployeesUpdateResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## delete

Delete Employee

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\HrisEmployeesDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->hris->employees->delete(
    request: $request
);

if ($response->deleteEmployeeResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\HrisEmployeesDeleteRequest](../../Models/Operations/HrisEmployeesDeleteRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\HrisEmployeesDeleteResponse](../../Models/Operations/HrisEmployeesDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |