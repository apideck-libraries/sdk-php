# Accounting.Payments

## Overview

### Available Operations

* [list](#list) - List Payments
* [create](#create) - Create Payment
* [get](#get) - Get Payment
* [update](#update) - Update Payment
* [delete](#delete) - Delete Payment

## list

List Payments

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.paymentsAll" method="get" path="/accounting/payments" -->
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

$request = new Operations\AccountingPaymentsAllRequest(
    serviceId: 'salesforce',
    filter: new Components\PaymentsFilter(
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
        invoiceId: '123',
    ),
    sort: new Components\PaymentsSort(
        by: Components\PaymentsSortBy::UpdatedAt,
        direction: Components\SortDirection::Desc,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->accounting->payments->list(
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
| `$request`                                                                                         | [Operations\AccountingPaymentsAllRequest](../../Models/Operations/AccountingPaymentsAllRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingPaymentsAllResponse](../../Models/Operations/AccountingPaymentsAllResponse.md)**

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

Create Payment

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.paymentsAdd" method="post" path="/accounting/payments" -->
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

$request = new Operations\AccountingPaymentsAddRequest(
    serviceId: 'salesforce',
    payment: new Components\PaymentInput(
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        totalAmount: 49.99,
        reference: '123456',
        paymentMethod: 'cash',
        paymentMethodReference: '123456',
        paymentMethodId: '12345',
        account: new Components\LinkedLedgerAccount(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
        transactionDate: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        customer: new Components\LinkedCustomerInput(
            id: '12345',
            displayName: 'Windsurf Shop',
            email: 'boring@boring.com',
        ),
        companyId: '12345',
        reconciled: true,
        status: Components\PaymentStatus::Authorised,
        type: Components\PaymentType::AccountsReceivable,
        allocations: [
            new Components\AllocationInput(
                id: '123456',
                amount: 49.99,
                allocationId: '123456',
            ),
            new Components\AllocationInput(
                id: '123456',
                amount: 49.99,
                allocationId: '123456',
            ),
            new Components\AllocationInput(
                id: '123456',
                amount: 49.99,
                allocationId: '123456',
            ),
        ],
        note: 'Some notes about this transaction',
        number: '123456',
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
            ),
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
            ),
        ],
        customFields: [
            new Components\CustomField1(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        rowVersion: '1-12345',
        displayId: '123456',
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
                ],
            ),
        ],
    ),
);

$response = $sdk->accounting->payments->create(
    request: $request
);

if ($response->createPaymentResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\AccountingPaymentsAddRequest](../../Models/Operations/AccountingPaymentsAddRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingPaymentsAddResponse](../../Models/Operations/AccountingPaymentsAddResponse.md)**

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

Get Payment

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.paymentsOne" method="get" path="/accounting/payments/{id}" -->
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

$request = new Operations\AccountingPaymentsOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->payments->get(
    request: $request
);

if ($response->getPaymentResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\AccountingPaymentsOneRequest](../../Models/Operations/AccountingPaymentsOneRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingPaymentsOneResponse](../../Models/Operations/AccountingPaymentsOneResponse.md)**

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

Update Payment

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.paymentsUpdate" method="patch" path="/accounting/payments/{id}" -->
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

$request = new Operations\AccountingPaymentsUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    payment: new Components\PaymentInput(
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        totalAmount: 49.99,
        reference: '123456',
        paymentMethod: 'cash',
        paymentMethodReference: '123456',
        paymentMethodId: '12345',
        account: new Components\LinkedLedgerAccount(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
        transactionDate: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        customer: new Components\LinkedCustomerInput(
            id: '12345',
            displayName: 'Windsurf Shop',
            email: 'boring@boring.com',
        ),
        companyId: '12345',
        reconciled: true,
        status: Components\PaymentStatus::Authorised,
        type: Components\PaymentType::AccountsReceivable,
        allocations: [
            new Components\AllocationInput(
                id: '123456',
                amount: 49.99,
                allocationId: '123456',
            ),
            new Components\AllocationInput(
                id: '123456',
                amount: 49.99,
                allocationId: '123456',
            ),
        ],
        note: 'Some notes about this transaction',
        number: '123456',
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
            ),
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
            ),
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
            ),
        ],
        customFields: [
            new Components\CustomField1(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
            new Components\CustomField1(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        rowVersion: '1-12345',
        displayId: '123456',
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

$response = $sdk->accounting->payments->update(
    request: $request
);

if ($response->updatePaymentResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingPaymentsUpdateRequest](../../Models/Operations/AccountingPaymentsUpdateRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingPaymentsUpdateResponse](../../Models/Operations/AccountingPaymentsUpdateResponse.md)**

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

Delete Payment

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.paymentsDelete" method="delete" path="/accounting/payments/{id}" -->
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

$request = new Operations\AccountingPaymentsDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->payments->delete(
    request: $request
);

if ($response->deletePaymentResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingPaymentsDeleteRequest](../../Models/Operations/AccountingPaymentsDeleteRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingPaymentsDeleteResponse](../../Models/Operations/AccountingPaymentsDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |