# TimeOffRequests
(*hris->timeOffRequests*)

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

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

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

$response = $sdk->hris->timeOffRequests->list(
    request: $request
);

if ($response->getTimeOffRequestsResponse !== null) {
    // handle response
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

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\HrisTimeOffRequestsAddRequest(
    timeOffRequest: new Components\TimeOffRequestInput(
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
    ),
    serviceId: 'salesforce',
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

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\HrisTimeOffRequestsOneRequest(
    id: '<id>',
    employeeId: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
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

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\HrisTimeOffRequestsUpdateRequest(
    id: '<id>',
    employeeId: '<id>',
    timeOffRequest: new Components\TimeOffRequestInput(
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
    ),
    serviceId: 'salesforce',
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

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\HrisTimeOffRequestsDeleteRequest(
    id: '<id>',
    employeeId: '<id>',
    serviceId: 'salesforce',
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