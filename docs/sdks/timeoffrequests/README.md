# Hris.TimeOffRequests

## Overview

### Available Operations

* [list](#list) - List Time Off Requests
* [create](#create) - Create Time Off Request
* [get](#get) - Get Time Off Request
* [update](#update) - Update Time Off Request
* [delete](#delete) - Delete Time Off Request

## list

List Time Off Requests

### Example Usage

<!-- UsageSnippet language="php" operationID="hris.timeOffRequestsAll" method="get" path="/hris/time-off-requests" -->
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

$request = new Operations\HrisTimeOffRequestsAllRequest(
    serviceId: 'salesforce',
    filter: new Components\TimeOffRequestsFilter(
        startDate: '2022-04-08',
        endDate: '2022-04-21',
        updatedSince: '2020-09-30T07:43:32.000Z',
        employeeId: '1234',
        timeOffRequestStatus: Components\TimeOffRequestStatus::Approved,
        companyId: '1234',
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->hris->timeOffRequests->list(
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
| `$request`                                                                                           | [Operations\HrisTimeOffRequestsAllRequest](../../Models/Operations/HrisTimeOffRequestsAllRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\HrisTimeOffRequestsAllResponse](../../Models/Operations/HrisTimeOffRequestsAllResponse.md)**

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

Create Time Off Request

### Example Usage

<!-- UsageSnippet language="php" operationID="hris.timeOffRequestsAdd" method="post" path="/hris/time-off-requests" -->
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

$request = new Operations\HrisTimeOffRequestsAddRequest(
    serviceId: 'salesforce',
    timeOffRequest: new Components\TimeOffRequestInput(
        employeeId: '12345',
        policyId: '12345',
        status: Components\TimeOffRequestStatusStatus::Approved,
        description: 'Enjoying some sun.',
        startDate: '2022-04-01',
        endDate: '2022-04-01',
        requestDate: '2022-03-21',
        requestType: Components\RequestType::Vacation,
        approvalDate: '2022-03-21',
        units: Components\Units::Hours,
        amount: 3.5,
        dayPart: 'morning',
        notes: new Components\Notes(
            employee: 'Relaxing on the beach for a few hours.',
            manager: 'Enjoy!',
        ),
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
        policyType: 'sick',
    ),
);

$response = $sdk->hris->timeOffRequests->create(
    request: $request
);

if ($response->createTimeOffRequestResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\HrisTimeOffRequestsAddRequest](../../Models/Operations/HrisTimeOffRequestsAddRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\HrisTimeOffRequestsAddResponse](../../Models/Operations/HrisTimeOffRequestsAddResponse.md)**

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

Get Time Off Request

### Example Usage

<!-- UsageSnippet language="php" operationID="hris.timeOffRequestsOne" method="get" path="/hris/time-off-requests/employees/{employee_id}/time-off-requests/{id}" -->
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

$request = new Operations\HrisTimeOffRequestsOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
    employeeId: '<id>',
);

$response = $sdk->hris->timeOffRequests->get(
    request: $request
);

if ($response->getTimeOffRequestResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\HrisTimeOffRequestsOneRequest](../../Models/Operations/HrisTimeOffRequestsOneRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\HrisTimeOffRequestsOneResponse](../../Models/Operations/HrisTimeOffRequestsOneResponse.md)**

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

Update Time Off Request

### Example Usage

<!-- UsageSnippet language="php" operationID="hris.timeOffRequestsUpdate" method="patch" path="/hris/time-off-requests/employees/{employee_id}/time-off-requests/{id}" -->
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

$request = new Operations\HrisTimeOffRequestsUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    employeeId: '<id>',
    timeOffRequest: new Components\TimeOffRequestInput(
        employeeId: '12345',
        policyId: '12345',
        status: Components\TimeOffRequestStatusStatus::Approved,
        description: 'Enjoying some sun.',
        startDate: '2022-04-01',
        endDate: '2022-04-01',
        requestDate: '2022-03-21',
        requestType: Components\RequestType::Vacation,
        approvalDate: '2022-03-21',
        units: Components\Units::Hours,
        amount: 3.5,
        dayPart: 'morning',
        notes: new Components\Notes(
            employee: 'Relaxing on the beach for a few hours.',
            manager: 'Enjoy!',
        ),
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
        policyType: 'sick',
    ),
);

$response = $sdk->hris->timeOffRequests->update(
    request: $request
);

if ($response->updateTimeOffRequestResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\HrisTimeOffRequestsUpdateRequest](../../Models/Operations/HrisTimeOffRequestsUpdateRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\HrisTimeOffRequestsUpdateResponse](../../Models/Operations/HrisTimeOffRequestsUpdateResponse.md)**

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

Delete Time Off Request

### Example Usage

<!-- UsageSnippet language="php" operationID="hris.timeOffRequestsDelete" method="delete" path="/hris/time-off-requests/employees/{employee_id}/time-off-requests/{id}" -->
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

$request = new Operations\HrisTimeOffRequestsDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
    employeeId: '<id>',
);

$response = $sdk->hris->timeOffRequests->delete(
    request: $request
);

if ($response->deleteTimeOffRequestResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\HrisTimeOffRequestsDeleteRequest](../../Models/Operations/HrisTimeOffRequestsDeleteRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\HrisTimeOffRequestsDeleteResponse](../../Models/Operations/HrisTimeOffRequestsDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |