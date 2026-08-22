# Accounting.PaymentMethods

## Overview

### Available Operations

* [list](#list) - List Payment Methods
* [create](#create) - Create Payment Method
* [get](#get) - Get Payment Method
* [update](#update) - Update Payment Method
* [delete](#delete) - Delete Payment Method

## list

List Payment Methods

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.paymentMethodsAll" method="get" path="/accounting/payment-methods" -->
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

$request = new Operations\AccountingPaymentMethodsAllRequest(
    serviceId: 'salesforce',
    fields: 'id,updated_at',
    passThrough: [
        'search' => 'San Francisco',
    ],
);

$responses = $sdk->accounting->paymentMethods->list(
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
| `$request`                                                                                                     | [Operations\AccountingPaymentMethodsAllRequest](../../Models/Operations/AccountingPaymentMethodsAllRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingPaymentMethodsAllResponse](../../Models/Operations/AccountingPaymentMethodsAllResponse.md)**

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

Create Payment Method

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.paymentMethodsAdd" method="post" path="/accounting/payment-methods" -->
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

$request = new Operations\AccountingPaymentMethodsAddRequest(
    serviceId: 'salesforce',
    accountingPaymentMethod: new Components\AccountingPaymentMethodInput(
        name: 'Cash',
        type: Components\AccountingPaymentMethodType::Cash,
        status: Components\AccountingPaymentMethodStatus::Active,
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

$response = $sdk->accounting->paymentMethods->create(
    request: $request
);

if ($response->createPaymentMethodResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\AccountingPaymentMethodsAddRequest](../../Models/Operations/AccountingPaymentMethodsAddRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingPaymentMethodsAddResponse](../../Models/Operations/AccountingPaymentMethodsAddResponse.md)**

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

Get Payment Method

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.paymentMethodsOne" method="get" path="/accounting/payment-methods/{id}" -->
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

$request = new Operations\AccountingPaymentMethodsOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->paymentMethods->get(
    request: $request
);

if ($response->getPaymentMethodResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\AccountingPaymentMethodsOneRequest](../../Models/Operations/AccountingPaymentMethodsOneRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingPaymentMethodsOneResponse](../../Models/Operations/AccountingPaymentMethodsOneResponse.md)**

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

Update Payment Method

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.paymentMethodsUpdate" method="patch" path="/accounting/payment-methods/{id}" -->
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

$request = new Operations\AccountingPaymentMethodsUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    accountingPaymentMethod: new Components\AccountingPaymentMethodInput(
        name: 'Cash',
        type: Components\AccountingPaymentMethodType::Cash,
        status: Components\AccountingPaymentMethodStatus::Active,
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

$response = $sdk->accounting->paymentMethods->update(
    request: $request
);

if ($response->updatePaymentMethodResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\AccountingPaymentMethodsUpdateRequest](../../Models/Operations/AccountingPaymentMethodsUpdateRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AccountingPaymentMethodsUpdateResponse](../../Models/Operations/AccountingPaymentMethodsUpdateResponse.md)**

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

Delete Payment Method

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.paymentMethodsDelete" method="delete" path="/accounting/payment-methods/{id}" -->
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

$request = new Operations\AccountingPaymentMethodsDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->paymentMethods->delete(
    request: $request
);

if ($response->deletePaymentMethodResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\AccountingPaymentMethodsDeleteRequest](../../Models/Operations/AccountingPaymentMethodsDeleteRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AccountingPaymentMethodsDeleteResponse](../../Models/Operations/AccountingPaymentMethodsDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |