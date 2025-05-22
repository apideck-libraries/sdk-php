# Expenses
(*accounting->expenses*)

## Overview

### Available Operations

* [list](#list) - List Expenses
* [create](#create) - Create Expense
* [get](#get) - Get Expense
* [update](#update) - Update Expense
* [delete](#delete) - Delete Expense

## list

List Expenses

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\AccountingExpensesAllRequest(
    serviceId: 'salesforce',
);

$responses = $sdk->accounting->expenses->list(
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
| `$request`                                                                                         | [Operations\AccountingExpensesAllRequest](../../Models/Operations/AccountingExpensesAllRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingExpensesAllResponse](../../Models/Operations/AccountingExpensesAllResponse.md)**

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

Create Expense

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\AccountingExpensesAddRequest(
    serviceId: 'salesforce',
    expense: new Components\ExpenseInput(
        number: 'OIT00546',
        transactionDate: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        accountId: '123456',
        customerId: '12345',
        supplierId: '12345',
        companyId: '12345',
        departmentId: '12345',
        paymentType: Components\ExpensePaymentType::Cash,
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        type: Components\ExpenseType::Expense,
        memo: 'For travel expenses incurred on 2024-05-15',
        taxRate: new Components\LinkedTaxRateInput(
            id: '123456',
            rate: 10,
        ),
        totalAmount: 275,
        lineItems: [
            new Components\ExpenseLineItemInput(
                trackingCategories: [
                    new Components\LinkedTrackingCategory(
                        id: '123456',
                        name: 'New York',
                    ),
                ],
                accountId: '123456',
                customerId: '12345',
                departmentId: '12345',
                locationId: '12345',
                subsidiaryId: '12345',
                taxRate: new Components\LinkedTaxRateInput(
                    id: '123456',
                    rate: 10,
                ),
                description: 'Travel US.',
                totalAmount: 275,
                billable: true,
                lineNumber: 1,
            ),
        ],
        customFields: [
            new Components\CustomField(
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

$response = $sdk->accounting->expenses->create(
    request: $request
);

if ($response->createExpenseResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\AccountingExpensesAddRequest](../../Models/Operations/AccountingExpensesAddRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingExpensesAddResponse](../../Models/Operations/AccountingExpensesAddResponse.md)**

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

Get Expense

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\AccountingExpensesOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->expenses->get(
    request: $request
);

if ($response->getExpenseResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\AccountingExpensesOneRequest](../../Models/Operations/AccountingExpensesOneRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingExpensesOneResponse](../../Models/Operations/AccountingExpensesOneResponse.md)**

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

Update Expense

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\AccountingExpensesUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    expense: new Components\ExpenseInput(
        number: 'OIT00546',
        transactionDate: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        accountId: '123456',
        customerId: '12345',
        supplierId: '12345',
        companyId: '12345',
        departmentId: '12345',
        paymentType: Components\ExpensePaymentType::Cash,
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        type: Components\ExpenseType::Expense,
        memo: 'For travel expenses incurred on 2024-05-15',
        taxRate: new Components\LinkedTaxRateInput(
            id: '123456',
            rate: 10,
        ),
        totalAmount: 275,
        lineItems: [
            new Components\ExpenseLineItemInput(
                trackingCategories: [
                    new Components\LinkedTrackingCategory(
                        id: '123456',
                        name: 'New York',
                    ),
                ],
                accountId: '123456',
                customerId: '12345',
                departmentId: '12345',
                locationId: '12345',
                subsidiaryId: '12345',
                taxRate: new Components\LinkedTaxRateInput(
                    id: '123456',
                    rate: 10,
                ),
                description: 'Travel US.',
                totalAmount: 275,
                billable: true,
                lineNumber: 1,
            ),
        ],
        customFields: [
            new Components\CustomField(
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

$response = $sdk->accounting->expenses->update(
    request: $request
);

if ($response->updateExpenseResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingExpensesUpdateRequest](../../Models/Operations/AccountingExpensesUpdateRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingExpensesUpdateResponse](../../Models/Operations/AccountingExpensesUpdateResponse.md)**

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

Delete Expense

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\AccountingExpensesDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->expenses->delete(
    request: $request
);

if ($response->deleteExpenseResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingExpensesDeleteRequest](../../Models/Operations/AccountingExpensesDeleteRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingExpensesDeleteResponse](../../Models/Operations/AccountingExpensesDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |