# AgedDebtors
(*accounting->agedDebtors*)

## Overview

### Available Operations

* [get](#get) - Get Aged Debtors

## get

Get Aged Debtors

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.agedDebtorsOne" method="get" path="/accounting/aged-debtors" -->
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

$request = new Operations\AccountingAgedDebtorsOneRequest(
    serviceId: 'salesforce',
    filter: new Components\AgedReportFilter(
        customerId: '123abc',
        supplierId: '123abc',
        reportAsOfDate: '2024-01-01',
        periodCount: 3,
        periodLength: 30,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$response = $sdk->accounting->agedDebtors->get(
    request: $request
);

if ($response->getAgedDebtorsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingAgedDebtorsOneRequest](../../Models/Operations/AccountingAgedDebtorsOneRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingAgedDebtorsOneResponse](../../Models/Operations/AccountingAgedDebtorsOneResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |