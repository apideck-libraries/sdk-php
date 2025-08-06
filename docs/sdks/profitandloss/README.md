# ProfitAndLoss
(*accounting->profitAndLoss*)

## Overview

### Available Operations

* [get](#get) - Get Profit and Loss

## get

Get Profit and Loss

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.profitAndLossOne" method="get" path="/accounting/profit-and-loss" -->
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

$request = new Operations\AccountingProfitAndLossOneRequest(
    serviceId: 'salesforce',
    filter: new Components\ProfitAndLossFilter(
        customerId: '123abc',
        startDate: '2021-01-01',
        endDate: '2021-12-31',
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$response = $sdk->accounting->profitAndLoss->get(
    request: $request
);

if ($response->getProfitAndLossResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\AccountingProfitAndLossOneRequest](../../Models/Operations/AccountingProfitAndLossOneRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\AccountingProfitAndLossOneResponse](../../Models/Operations/AccountingProfitAndLossOneResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |