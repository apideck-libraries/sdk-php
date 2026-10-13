# Accounting.TrialBalance

## Overview

### Available Operations

* [get](#get) - Get Trial Balance

## get

Get the trial balance as of a date. Read-only.

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.trialBalanceOne" method="get" path="/accounting/trial-balance" -->
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

$request = new Operations\AccountingTrialBalanceOneRequest(
    serviceId: 'salesforce',
    companyId: '12345',
    passThrough: [
        'search' => 'San Francisco',
    ],
    filter: new Components\TrialBalanceFilter(
        endDate: '2025-12-31',
        accountingMethod: Components\TrialBalanceFilterAccountingMethod::Accrual,
    ),
);

$response = $sdk->accounting->trialBalance->get(
    request: $request
);

if ($response->getTrialBalanceResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\AccountingTrialBalanceOneRequest](../../Models/Operations/AccountingTrialBalanceOneRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AccountingTrialBalanceOneResponse](../../Models/Operations/AccountingTrialBalanceOneResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |