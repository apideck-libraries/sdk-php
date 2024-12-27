# Jobs
(*ats->jobs*)

## Overview

### Available Operations

* [list](#list) - List Jobs
* [get](#get) - Get Job

## list

List Jobs

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

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

## get

Get Job

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

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