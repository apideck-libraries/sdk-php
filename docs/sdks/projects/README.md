# Projects
(*accounting->projects*)

## Overview

### Available Operations

* [list](#list) - List projects
* [create](#create) - Create project
* [get](#get) - Get project
* [update](#update) - Update project
* [delete](#delete) - Delete project

## list

List projects

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.projectsAll" method="get" path="/accounting/projects" -->
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

$request = new Operations\AccountingProjectsAllRequest(
    serviceId: 'salesforce',
    filter: new Components\ProjectsFilter(
        name: 'Website Redesign',
        status: Components\ProjectStatus::Active,
        customerId: '12345',
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
    ),
    sort: new Components\ProjectsSort(
        by: Components\ProjectsSortSortBy::Name,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->accounting->projects->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\AccountingProjectsAllRequest](../../Models/Operations/AccountingProjectsAllRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingProjectsAllResponse](../../Models/Operations/AccountingProjectsAllResponse.md)**

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

Create project

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.projectsAdd" method="post" path="/accounting/projects" -->
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

$request = new Operations\AccountingProjectsAddRequest(
    serviceId: 'salesforce',
    project: new Components\ProjectInput(
        name: 'Website Redesign Project',
        displayId: 'PROJ-001',
        referenceId: 'WD-REF-2024-001',
        description: 'Complete redesign of the company website including new branding and improved user experience',
        status: Components\ProjectProjectStatus::Active,
        active: true,
        projectType: Components\ProjectType::ClientProject,
        priority: Components\Priority::High,
        completionPercentage: 75.5,
        startDate: LocalDate::parse('2024-01-15'),
        endDate: LocalDate::parse('2024-06-30'),
        customer: new Components\LinkedCustomerInput(
            id: '12345',
            displayName: 'Windsurf Shop',
            email: 'boring@boring.com',
        ),
        department: new Components\ProjectDepartment(
            id: 'DEPT-001',
            name: 'Marketing',
        ),
        companyId: '12345',
        ownerId: '12345',
        parentProject: new Components\ParentProject(
            id: 'PROJ-PARENT-001',
            name: 'Company Website Overhaul',
        ),
        currency: Components\Currency::Usd,
        budgetAmount: 50000,
        approvedAmount: 48000,
        budgetHours: 400,
        hourlyRate: 125,
        billingMethod: Components\BillingMethod::TimeAndMaterials,
        phase: Components\ProjectPhase::Execution,
        taxRate: new Components\LinkedTaxRateInput(
            id: '123456',
            rate: 10,
        ),
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
                parentId: '123456',
                parentName: 'New York',
            ),
        ],
        tags: [
            'website',
            'redesign',
            'urgent',
        ],
        notes: 'Client has requested modern design with mobile-first approach',
        contractNumber: 'CNT-2024-001',
        profitMargin: 15.5,
        scheduleStatus: Components\ScheduleStatus::OnSchedule,
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
        teamSize: 8,
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        rowVersion: '1-12345',
    ),
);

$response = $sdk->accounting->projects->create(
    request: $request
);

if ($response->createProjectResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\AccountingProjectsAddRequest](../../Models/Operations/AccountingProjectsAddRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingProjectsAddResponse](../../Models/Operations/AccountingProjectsAddResponse.md)**

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

Get project

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.projectsOne" method="get" path="/accounting/projects/{id}" -->
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

$request = new Operations\AccountingProjectsOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->projects->get(
    request: $request
);

if ($response->getProjectResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\AccountingProjectsOneRequest](../../Models/Operations/AccountingProjectsOneRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingProjectsOneResponse](../../Models/Operations/AccountingProjectsOneResponse.md)**

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

Update project

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.projectsUpdate" method="patch" path="/accounting/projects/{id}" -->
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

$request = new Operations\AccountingProjectsUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    project: new Components\ProjectInput(
        name: 'Website Redesign Project',
        displayId: 'PROJ-001',
        referenceId: 'WD-REF-2024-001',
        description: 'Complete redesign of the company website including new branding and improved user experience',
        status: Components\ProjectProjectStatus::Active,
        active: true,
        projectType: Components\ProjectType::ClientProject,
        priority: Components\Priority::High,
        completionPercentage: 75.5,
        startDate: LocalDate::parse('2024-01-15'),
        endDate: LocalDate::parse('2024-06-30'),
        customer: null,
        department: new Components\ProjectDepartment(
            id: 'DEPT-001',
            name: 'Marketing',
        ),
        companyId: '12345',
        ownerId: '12345',
        parentProject: new Components\ParentProject(
            id: 'PROJ-PARENT-001',
            name: 'Company Website Overhaul',
        ),
        currency: Components\Currency::Usd,
        budgetAmount: 50000,
        approvedAmount: 48000,
        budgetHours: 400,
        hourlyRate: 125,
        billingMethod: Components\BillingMethod::TimeAndMaterials,
        phase: Components\ProjectPhase::Execution,
        taxRate: new Components\LinkedTaxRateInput(
            id: '123456',
            rate: 10,
        ),
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
                parentId: '123456',
                parentName: 'New York',
            ),
        ],
        tags: [
            'website',
            'redesign',
            'urgent',
        ],
        notes: 'Client has requested modern design with mobile-first approach',
        contractNumber: 'CNT-2024-001',
        profitMargin: 15.5,
        scheduleStatus: Components\ScheduleStatus::OnSchedule,
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
        teamSize: 8,
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        rowVersion: '1-12345',
    ),
);

$response = $sdk->accounting->projects->update(
    request: $request
);

if ($response->updateProjectResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingProjectsUpdateRequest](../../Models/Operations/AccountingProjectsUpdateRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingProjectsUpdateResponse](../../Models/Operations/AccountingProjectsUpdateResponse.md)**

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

Delete project

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.projectsDelete" method="delete" path="/accounting/projects/{id}" -->
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

$request = new Operations\AccountingProjectsDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->projects->delete(
    request: $request
);

if ($response->deleteProjectResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingProjectsDeleteRequest](../../Models/Operations/AccountingProjectsDeleteRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingProjectsDeleteResponse](../../Models/Operations/AccountingProjectsDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |