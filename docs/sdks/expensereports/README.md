# Accounting.ExpenseReports

## Overview

### Available Operations

* [list](#list) - List Expense Reports
* [create](#create) - Create Expense Report
* [get](#get) - Get Expense Report
* [update](#update) - Update Expense Report
* [delete](#delete) - Delete Expense Report

## list

List Expense Reports

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.expenseReportsAll" method="get" path="/accounting/expense-reports" -->
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

$request = new Operations\AccountingExpenseReportsAllRequest(
    serviceId: 'salesforce',
    fields: 'id,updated_at',
    filter: new Components\ExpenseReportsFilter(
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
        status: Components\ExpenseReportsFilterStatus::Submitted,
    ),
);

$responses = $sdk->accounting->expenseReports->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\AccountingExpenseReportsAllRequest](../../Models/Operations/AccountingExpenseReportsAllRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingExpenseReportsAllResponse](../../Models/Operations/AccountingExpenseReportsAllResponse.md)**

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

Create Expense Report

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.expenseReportsAdd" method="post" path="/accounting/expense-reports" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils;
use Brick\DateTime\LocalDate;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\AccountingExpenseReportsAddRequest(
    serviceId: 'salesforce',
    expenseReport: new Components\ExpenseReportInput(
        displayId: '123456',
        number: 'ER-001',
        title: 'Q1 Business Travel',
        employee: new Components\ExpenseReportEmployee(
            id: '12345',
            displayName: 'John Doe',
        ),
        status: Components\ExpenseReportStatus::Submitted,
        transactionDate: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        postingDate: LocalDate::parse('2024-06-01'),
        dueDate: LocalDate::parse('2024-06-15'),
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        subTotal: 250,
        totalTax: 25,
        totalAmount: 1250.75,
        reimbursableAmount: 1100,
        memo: 'Business travel expenses for Q1 client meetings',
        department: new Components\LinkedDepartmentInput(
            displayId: '123456',
            name: 'Acme Inc.',
        ),
        location: new Components\LinkedLocationInput(
            id: '123456',
            displayId: '123456',
            name: 'New York Office',
        ),
        account: null,
        accountingPeriod: new Components\AccountingPeriod(
            id: '12345',
            name: 'Q1 2024',
        ),
        lineItems: [],
        subsidiary: new Components\LinkedSubsidiaryInput(
            displayId: '123456',
            name: 'Acme Inc.',
        ),
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                code: '100',
                name: 'New York',
                parentId: '123456',
                parentName: 'New York',
            ),
        ],
        taxInclusive: true,
        approvedBy: new Components\ApprovedBy(
            id: '12345',
            displayName: 'Jane Smith',
        ),
        customFields: [
            new Components\CustomField1(
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

$response = $sdk->accounting->expenseReports->create(
    request: $request
);

if ($response->createExpenseReportResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\AccountingExpenseReportsAddRequest](../../Models/Operations/AccountingExpenseReportsAddRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingExpenseReportsAddResponse](../../Models/Operations/AccountingExpenseReportsAddResponse.md)**

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

Get Expense Report

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.expenseReportsOne" method="get" path="/accounting/expense-reports/{id}" -->
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

$request = new Operations\AccountingExpenseReportsOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->expenseReports->get(
    request: $request
);

if ($response->getExpenseReportResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\AccountingExpenseReportsOneRequest](../../Models/Operations/AccountingExpenseReportsOneRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingExpenseReportsOneResponse](../../Models/Operations/AccountingExpenseReportsOneResponse.md)**

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

Update Expense Report

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.expenseReportsUpdate" method="patch" path="/accounting/expense-reports/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils;
use Brick\DateTime\LocalDate;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\AccountingExpenseReportsUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    expenseReport: new Components\ExpenseReportInput(
        displayId: '123456',
        number: 'ER-001',
        title: 'Q1 Business Travel',
        employee: new Components\ExpenseReportEmployee(
            id: '12345',
            displayName: 'John Doe',
        ),
        status: Components\ExpenseReportStatus::Submitted,
        transactionDate: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        postingDate: LocalDate::parse('2024-06-01'),
        dueDate: LocalDate::parse('2024-06-15'),
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        subTotal: 250,
        totalTax: 25,
        totalAmount: 1250.75,
        reimbursableAmount: 1100,
        memo: 'Business travel expenses for Q1 client meetings',
        department: new Components\LinkedDepartmentInput(
            displayId: '123456',
            name: 'Acme Inc.',
        ),
        location: new Components\LinkedLocationInput(
            id: '123456',
            displayId: '123456',
            name: 'New York Office',
        ),
        account: new Components\LinkedLedgerAccount(
            id: '123456',
            name: 'Bank account',
            nominalCode: 'N091',
            code: '453',
            parentId: '123456',
            displayId: '123456',
        ),
        accountingPeriod: new Components\AccountingPeriod(
            id: '12345',
            name: 'Q1 2024',
        ),
        lineItems: [],
        subsidiary: new Components\LinkedSubsidiaryInput(
            displayId: '123456',
            name: 'Acme Inc.',
        ),
        trackingCategories: null,
        taxInclusive: true,
        approvedBy: new Components\ApprovedBy(
            id: '12345',
            displayName: 'Jane Smith',
        ),
        customFields: [
            new Components\CustomField1(
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

$response = $sdk->accounting->expenseReports->update(
    request: $request
);

if ($response->updateExpenseReportResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\AccountingExpenseReportsUpdateRequest](../../Models/Operations/AccountingExpenseReportsUpdateRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AccountingExpenseReportsUpdateResponse](../../Models/Operations/AccountingExpenseReportsUpdateResponse.md)**

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

Delete Expense Report

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.expenseReportsDelete" method="delete" path="/accounting/expense-reports/{id}" -->
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

$request = new Operations\AccountingExpenseReportsDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->expenseReports->delete(
    request: $request
);

if ($response->deleteExpenseReportResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\AccountingExpenseReportsDeleteRequest](../../Models/Operations/AccountingExpenseReportsDeleteRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AccountingExpenseReportsDeleteResponse](../../Models/Operations/AccountingExpenseReportsDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |