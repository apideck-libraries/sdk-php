# Accounting.ExpenseCategories

## Overview

### Available Operations

* [list](#list) - List Expense Categories
* [create](#create) - Create Expense Category
* [get](#get) - Get Expense Category
* [update](#update) - Update Expense Category
* [delete](#delete) - Delete Expense Category

## list

List Expense Categories

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.expenseCategoriesAll" method="get" path="/accounting/expense-categories" -->
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

$request = new Operations\AccountingExpenseCategoriesAllRequest(
    serviceId: 'salesforce',
    fields: 'id,updated_at',
    filter: new Components\ExpenseCategoriesFilter(
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
        status: Components\ExpenseCategoriesFilterStatus::Active,
    ),
);

$responses = $sdk->accounting->expenseCategories->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\AccountingExpenseCategoriesAllRequest](../../Models/Operations/AccountingExpenseCategoriesAllRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AccountingExpenseCategoriesAllResponse](../../Models/Operations/AccountingExpenseCategoriesAllResponse.md)**

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

Create Expense Category

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.expenseCategoriesAdd" method="post" path="/accounting/expense-categories" -->
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

$request = new Operations\AccountingExpenseCategoriesAddRequest(
    serviceId: 'salesforce',
    expenseCategory: new Components\ExpenseCategoryInput(
        displayId: '123456',
        name: 'Travel',
        code: 'TRAVEL-001',
        description: 'Travel-related expenses including flights, hotels, and ground transportation.',
        status: Components\ExpenseCategoryStatus::Active,
        account: new Components\LinkedLedgerAccount(
            id: '123456',
            name: 'Bank account',
            nominalCode: 'N091',
            code: '453',
            parentId: '123456',
            displayId: '123456',
        ),
        offsetAccount: new Components\LinkedLedgerAccount(
            id: '123456',
            name: 'Bank account',
            nominalCode: 'N091',
            code: '453',
            parentId: '123456',
            displayId: '123456',
        ),
        taxRate: new Components\LinkedTaxRateInput(
            id: '123456',
            code: 'N-T',
            rate: 10,
        ),
        rateRequired: false,
        defaultRate: 0.67,
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

$response = $sdk->accounting->expenseCategories->create(
    request: $request
);

if ($response->createExpenseCategoryResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\AccountingExpenseCategoriesAddRequest](../../Models/Operations/AccountingExpenseCategoriesAddRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AccountingExpenseCategoriesAddResponse](../../Models/Operations/AccountingExpenseCategoriesAddResponse.md)**

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

Get Expense Category

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.expenseCategoriesOne" method="get" path="/accounting/expense-categories/{id}" -->
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

$request = new Operations\AccountingExpenseCategoriesOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->expenseCategories->get(
    request: $request
);

if ($response->getExpenseCategoryResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\AccountingExpenseCategoriesOneRequest](../../Models/Operations/AccountingExpenseCategoriesOneRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AccountingExpenseCategoriesOneResponse](../../Models/Operations/AccountingExpenseCategoriesOneResponse.md)**

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

Update Expense Category

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.expenseCategoriesUpdate" method="patch" path="/accounting/expense-categories/{id}" -->
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

$request = new Operations\AccountingExpenseCategoriesUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    expenseCategory: new Components\ExpenseCategoryInput(
        displayId: '123456',
        name: 'Travel',
        code: 'TRAVEL-001',
        description: 'Travel-related expenses including flights, hotels, and ground transportation.',
        status: Components\ExpenseCategoryStatus::Active,
        account: new Components\LinkedLedgerAccount(
            id: '123456',
            name: 'Bank account',
            nominalCode: 'N091',
            code: '453',
            parentId: '123456',
            displayId: '123456',
        ),
        offsetAccount: new Components\LinkedLedgerAccount(
            id: '123456',
            name: 'Bank account',
            nominalCode: 'N091',
            code: '453',
            parentId: '123456',
            displayId: '123456',
        ),
        taxRate: new Components\LinkedTaxRateInput(
            id: '123456',
            code: 'N-T',
            rate: 10,
        ),
        rateRequired: false,
        defaultRate: 0.67,
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

$response = $sdk->accounting->expenseCategories->update(
    request: $request
);

if ($response->updateExpenseCategoryResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [Operations\AccountingExpenseCategoriesUpdateRequest](../../Models/Operations/AccountingExpenseCategoriesUpdateRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |

### Response

**[?Operations\AccountingExpenseCategoriesUpdateResponse](../../Models/Operations/AccountingExpenseCategoriesUpdateResponse.md)**

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

Delete Expense Category

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.expenseCategoriesDelete" method="delete" path="/accounting/expense-categories/{id}" -->
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

$request = new Operations\AccountingExpenseCategoriesDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->expenseCategories->delete(
    request: $request
);

if ($response->deleteExpenseCategoryResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [Operations\AccountingExpenseCategoriesDeleteRequest](../../Models/Operations/AccountingExpenseCategoriesDeleteRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |

### Response

**[?Operations\AccountingExpenseCategoriesDeleteResponse](../../Models/Operations/AccountingExpenseCategoriesDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |