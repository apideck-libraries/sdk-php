# Ats.Jobs

## Overview

### Available Operations

* [list](#list) - List Jobs
* [create](#create) - Create Job
* [get](#get) - Get Job
* [update](#update) - Update Job
* [delete](#delete) - Delete Job

## list

List Jobs

### Example Usage

<!-- UsageSnippet language="php" operationID="ats.jobsAll" method="get" path="/ats/jobs" -->
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

$request = new Operations\AtsJobsAllRequest(
    serviceId: 'salesforce',
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->ats->jobs->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\AtsJobsAllRequest](../../Models/Operations/AtsJobsAllRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\AtsJobsAllResponse](../../Models/Operations/AtsJobsAllResponse.md)**

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

Create Job

### Example Usage

<!-- UsageSnippet language="php" operationID="ats.jobsAdd" method="post" path="/ats/jobs" -->
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

$request = new Operations\AtsJobsAddRequest(
    serviceId: 'salesforce',
    job: new Components\JobInput(
        slug: 'ceo',
        title: 'CEO',
        sequence: 3,
        visibility: Components\Visibility::Internal,
        status: Components\JobStatus::Completed,
        code: '123-OC',
        language: 'EN',
        employmentTerms: Components\EmploymentTerms::FullTime,
        experience: 'Director/ Vice President',
        location: 'San Francisco',
        remote: true,
        requisitionId: 'abc123',
        department: new Components\DepartmentInput(
            name: 'R&D',
            code: '2',
            description: 'R&D',
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
        branch: new Components\JobBranch(
            name: 'HQ NY',
        ),
        recruiters: [
            'a0d636c6-43b3-4bde-8c70-85b707d992f4',
        ],
        hiringManagers: [
            '123456',
        ],
        followers: [
            'a0d636c6-43b3-4bde-8c70-85b707d992f4',
            'a98lfd96-43b3-4bde-8c70-85b707d992e6',
        ],
        description: 'A description',
        blocks: [
            new Components\Blocks(
                title: 'string',
                content: 'string',
            ),
        ],
        closing: 'The closing section of the job description',
        closingDate: LocalDate::parse('2020-10-30'),
        salary: new Components\Salary(
            min: 8000,
            max: 10000,
            currency: Components\Currency::Usd,
            interval: 'year',
        ),
        links: [
            new Components\JobLinks(
                type: Components\JobType::JobPortal,
                url: 'https://app.intercom.io/contacts/12345',
            ),
        ],
        confidential: false,
        availableToEmployees: false,
        tags: [
            'New',
        ],
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
        customFields: [
            new Components\CustomField1(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        deleted: true,
        ownerId: '54321',
    ),
);

$response = $sdk->ats->jobs->create(
    request: $request
);

if ($response->createJobResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\AtsJobsAddRequest](../../Models/Operations/AtsJobsAddRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\AtsJobsAddResponse](../../Models/Operations/AtsJobsAddResponse.md)**

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

Get Job

### Example Usage

<!-- UsageSnippet language="php" operationID="ats.jobsOne" method="get" path="/ats/jobs/{id}" -->
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

$request = new Operations\AtsJobsOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->ats->jobs->get(
    request: $request
);

if ($response->getJobResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\AtsJobsOneRequest](../../Models/Operations/AtsJobsOneRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\AtsJobsOneResponse](../../Models/Operations/AtsJobsOneResponse.md)**

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

Update Job

### Example Usage

<!-- UsageSnippet language="php" operationID="ats.jobsUpdate" method="patch" path="/ats/jobs/{id}" -->
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

$request = new Operations\AtsJobsUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    job: new Components\JobInput(
        slug: 'ceo',
        title: 'CEO',
        sequence: 3,
        visibility: Components\Visibility::Internal,
        status: Components\JobStatus::Completed,
        code: '123-OC',
        language: 'EN',
        employmentTerms: Components\EmploymentTerms::FullTime,
        experience: 'Director/ Vice President',
        location: 'San Francisco',
        remote: true,
        requisitionId: 'abc123',
        department: new Components\DepartmentInput(
            name: 'R&D',
            code: '2',
            description: 'R&D',
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
        branch: new Components\JobBranch(
            name: 'HQ NY',
        ),
        recruiters: [
            'a0d636c6-43b3-4bde-8c70-85b707d992f4',
        ],
        hiringManagers: [
            '123456',
        ],
        followers: [
            'a0d636c6-43b3-4bde-8c70-85b707d992f4',
            'a98lfd96-43b3-4bde-8c70-85b707d992e6',
        ],
        description: 'A description',
        blocks: [
            new Components\Blocks(
                title: 'string',
                content: 'string',
            ),
        ],
        closing: 'The closing section of the job description',
        closingDate: LocalDate::parse('2020-10-30'),
        salary: new Components\Salary(
            min: 8000,
            max: 10000,
            currency: Components\Currency::Usd,
            interval: 'year',
        ),
        links: [
            new Components\JobLinks(
                type: Components\JobType::JobPortal,
                url: 'https://app.intercom.io/contacts/12345',
            ),
        ],
        confidential: false,
        availableToEmployees: false,
        tags: [
            'New',
        ],
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
        customFields: [
            new Components\CustomField1(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        deleted: true,
        ownerId: '54321',
    ),
);

$response = $sdk->ats->jobs->update(
    request: $request
);

if ($response->updateJobResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\AtsJobsUpdateRequest](../../Models/Operations/AtsJobsUpdateRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\AtsJobsUpdateResponse](../../Models/Operations/AtsJobsUpdateResponse.md)**

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

Delete Job

### Example Usage

<!-- UsageSnippet language="php" operationID="ats.jobsDelete" method="delete" path="/ats/jobs/{id}" -->
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

$request = new Operations\AtsJobsDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->ats->jobs->delete(
    request: $request
);

if ($response->deleteJobResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\AtsJobsDeleteRequest](../../Models/Operations/AtsJobsDeleteRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\AtsJobsDeleteResponse](../../Models/Operations/AtsJobsDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |