# Accounting.Employees

## Overview

### Available Operations

* [list](#list) - List Employees
* [create](#create) - Create Employee
* [get](#get) - Get Employee
* [update](#update) - Update Employee
* [delete](#delete) - Delete Employee

## list

List Employees

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.employeesAll" method="get" path="/accounting/employees" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\AccountingEmployeesAllRequest(
    serviceId: 'salesforce',
    fields: 'id,updated_at',
    filter: new Components\AccountingEmployeesFilter(
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
        status: Components\AccountingEmployeesFilterStatus::Active,
    ),
);

$responses = $sdk->accounting->employees->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\AccountingEmployeesAllRequest](../../Models/Operations/AccountingEmployeesAllRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\AccountingEmployeesAllResponse](../../Models/Operations/AccountingEmployeesAllResponse.md)**

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

<!-- UsageSnippet language="php" operationID="accounting.employeesAdd" method="post" path="/accounting/employees" -->
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

$request = new Operations\AccountingEmployeesAddRequest(
    serviceId: 'salesforce',
    accountingEmployee: new Components\AccountingEmployeeInput(
        displayId: '123456',
        firstName: 'John',
        lastName: 'Doe',
        displayName: 'John Doe',
        emails: [
            new Components\Email(
                id: '123',
                email: 'elon@musk.com',
                type: Components\EmailType::Primary,
            ),
        ],
        employeeNumber: 'EMP-001',
        jobTitle: 'Senior Accountant',
        status: Components\EmployeeStatus::Active,
        isContractor: false,
        department: new Components\LinkedDepartmentInput(
            displayId: '123456',
            name: 'Acme Inc.',
        ),
        location: new Components\LinkedLocationInput(
            id: '123456',
            displayId: '123456',
            name: 'New York Office',
        ),
        manager: new Components\AccountingEmployeeManager(
            id: '12345',
            name: 'Jane Smith',
        ),
        hireDate: LocalDate::parse('2020-01-15'),
        terminationDate: LocalDate::parse('2025-12-31'),
        gender: Components\Gender::Male,
        birthDate: LocalDate::parse('1990-05-20'),
        subsidiary: new Components\LinkedSubsidiaryInput(
            displayId: '123456',
            name: 'Acme Inc.',
        ),
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                code: '100',
                name: 'New York',
                parentId: '123456',
                parentName: 'New York',
            ),
        ],
        currency: Components\Currency::Usd,
        notes: 'Some notes about this employee',
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
                line5: 'Attention: Finance Dept',
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
        customFields: [
            new Components\CustomField1(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        rowVersion: '1-12345',
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
        ],
    ),
);

$response = $sdk->accounting->employees->create(
    request: $request
);

if ($response->createAccountingEmployeeResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\AccountingEmployeesAddRequest](../../Models/Operations/AccountingEmployeesAddRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\AccountingEmployeesAddResponse](../../Models/Operations/AccountingEmployeesAddResponse.md)**

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

<!-- UsageSnippet language="php" operationID="accounting.employeesOne" method="get" path="/accounting/employees/{id}" -->
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

$request = new Operations\AccountingEmployeesOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->employees->get(
    request: $request
);

if ($response->getAccountingEmployeeResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\AccountingEmployeesOneRequest](../../Models/Operations/AccountingEmployeesOneRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\AccountingEmployeesOneResponse](../../Models/Operations/AccountingEmployeesOneResponse.md)**

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

<!-- UsageSnippet language="php" operationID="accounting.employeesUpdate" method="patch" path="/accounting/employees/{id}" -->
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

$request = new Operations\AccountingEmployeesUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    accountingEmployee: new Components\AccountingEmployeeInput(
        displayId: '123456',
        firstName: 'John',
        lastName: 'Doe',
        displayName: 'John Doe',
        emails: [
            new Components\Email(
                id: '123',
                email: 'elon@musk.com',
                type: Components\EmailType::Primary,
            ),
        ],
        employeeNumber: 'EMP-001',
        jobTitle: 'Senior Accountant',
        status: Components\EmployeeStatus::Active,
        isContractor: false,
        department: new Components\LinkedDepartmentInput(
            displayId: '123456',
            name: 'Acme Inc.',
        ),
        location: new Components\LinkedLocationInput(
            id: '123456',
            displayId: '123456',
            name: 'New York Office',
        ),
        manager: new Components\AccountingEmployeeManager(
            id: '12345',
            name: 'Jane Smith',
        ),
        hireDate: LocalDate::parse('2020-01-15'),
        terminationDate: LocalDate::parse('2025-12-31'),
        gender: Components\Gender::Male,
        birthDate: LocalDate::parse('1990-05-20'),
        subsidiary: new Components\LinkedSubsidiaryInput(
            displayId: '123456',
            name: 'Acme Inc.',
        ),
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                code: '100',
                name: 'New York',
                parentId: '123456',
                parentName: 'New York',
            ),
        ],
        currency: Components\Currency::Usd,
        notes: 'Some notes about this employee',
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
                line5: 'Attention: Finance Dept',
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
        customFields: [
            new Components\CustomField1(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        rowVersion: '1-12345',
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
        ],
    ),
);

$response = $sdk->accounting->employees->update(
    request: $request
);

if ($response->updateAccountingEmployeeResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\AccountingEmployeesUpdateRequest](../../Models/Operations/AccountingEmployeesUpdateRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AccountingEmployeesUpdateResponse](../../Models/Operations/AccountingEmployeesUpdateResponse.md)**

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

<!-- UsageSnippet language="php" operationID="accounting.employeesDelete" method="delete" path="/accounting/employees/{id}" -->
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

$request = new Operations\AccountingEmployeesDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->employees->delete(
    request: $request
);

if ($response->deleteAccountingEmployeeResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\AccountingEmployeesDeleteRequest](../../Models/Operations/AccountingEmployeesDeleteRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AccountingEmployeesDeleteResponse](../../Models/Operations/AccountingEmployeesDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |