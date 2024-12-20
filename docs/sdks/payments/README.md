# Payments
(*accounting->payments*)

## Overview

### Available Operations

* [create](#create) - Create Payment
* [list](#list) - List Payments
* [delete](#delete) - Delete Payment
* [get](#get) - Get Payment
* [update](#update) - Update Payment

## create

Create Payment

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AccountingPaymentsAddRequest(
    payment: new Components\PaymentInput(
        totalAmount: 49.99,
        transactionDate: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        status: Components\PaymentStatus::Authorised,
        type: Components\PaymentType::AccountsReceivable,
        allocations: [
            new Components\AllocationInput(
                id: '123456',
                allocationId: '123456',
                amount: 49.99,
            ),
        ],
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: true,
            ),
        ],
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
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        reference: '123456',
        paymentMethod: 'cash',
        paymentMethodReference: '123456',
        paymentMethodId: '12345',
        account: new Components\LinkedLedgerAccountInput(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
        customer: new Components\LinkedCustomerInput(
            id: '12345',
            email: 'boring@boring.com',
            displayName: 'Windsurf Shop',
        ),
        companyId: '12345',
        reconciled: true,
        note: 'Some notes about this transaction',
        number: '123456',
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
            ),
        ],
        rowVersion: '1-12345',
        displayId: '123456',
    ),
    serviceId: 'salesforce',
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

## list

List Payments

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AccountingPaymentsAllRequest(
    serviceId: 'salesforce',
    filter: new Components\PaymentsFilter(
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
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
    if ($response->statusCode === 200) {
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

## delete

Delete Payment

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

## get

Get Payment

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

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AccountingPaymentsUpdateRequest(
    id: '<id>',
    payment: new Components\PaymentInput(
        totalAmount: 49.99,
        transactionDate: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        status: Components\PaymentStatus::Authorised,
        type: Components\PaymentType::AccountsReceivable,
        allocations: [
            new Components\AllocationInput(
                id: '123456',
                allocationId: '123456',
                amount: 49.99,
            ),
        ],
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: [
                    new Components\Six(),
                ],
            ),
        ],
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
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        reference: '123456',
        paymentMethod: 'cash',
        paymentMethodReference: '123456',
        paymentMethodId: '12345',
        account: new Components\LinkedLedgerAccountInput(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
        customer: new Components\LinkedCustomerInput(
            id: '12345',
            email: 'boring@boring.com',
            displayName: 'Windsurf Shop',
        ),
        companyId: '12345',
        reconciled: true,
        note: 'Some notes about this transaction',
        number: '123456',
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
            ),
        ],
        rowVersion: '1-12345',
        displayId: '123456',
    ),
    serviceId: 'salesforce',
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