# EmployeeSchedules
(*hris->employeeSchedules*)

## Overview

### Available Operations

* [list](#list) - List Employee Schedules

## list

List schedules for employee, a schedule is a work pattern, not the actual worked hours, for an employee.

### Example Usage

<!-- UsageSnippet language="php" operationID="hris.employeeSchedulesAll" method="get" path="/hris/schedules/employees/{employee_id}" -->
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

$request = new Operations\HrisEmployeeSchedulesAllRequest(
    employeeId: '<id>',
    serviceId: 'salesforce',
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$response = $sdk->hris->employeeSchedules->list(
    request: $request
);

if ($response->getEmployeeSchedulesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\HrisEmployeeSchedulesAllRequest](../../Models/Operations/HrisEmployeeSchedulesAllRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\HrisEmployeeSchedulesAllResponse](../../Models/Operations/HrisEmployeeSchedulesAllResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |