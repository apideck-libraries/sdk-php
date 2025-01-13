# TaxRates
(*accounting->taxRates*)

## Overview

### Available Operations

* [create](#create) - Create Tax Rate
* [list](#list) - List Tax Rates
* [delete](#delete) - Delete Tax Rate
* [get](#get) - Get Tax Rate
* [update](#update) - Update Tax Rate

## create

Create Tax Rate

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\AccountingTaxRatesAddRequest(
    taxRate: new Components\TaxRateInput(
        name: 'GST on Purchases',
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
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: true,
            ),
        ],
        id: '1234',
        code: 'ABN',
        description: 'Reduced rate GST Purchases',
        effectiveTaxRate: 10,
        totalTaxRate: 10,
        taxPayableAccountId: '123456',
        taxRemittedAccountId: '123456',
        components: [
            new Components\Components(
                name: 'GST',
                id: '10',
                rate: 10,
                compound: true,
            ),
        ],
        type: 'NONE',
        reportTaxType: 'NONE',
        originalTaxRateId: '12345',
        status: Components\TaxRateStatus::Active,
        rowVersion: '1-12345',
    ),
    serviceId: 'salesforce',
);

$response = $sdk->accounting->taxRates->create(
    request: $request
);

if ($response->createTaxRateResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\AccountingTaxRatesAddRequest](../../Models/Operations/AccountingTaxRatesAddRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingTaxRatesAddResponse](../../Models/Operations/AccountingTaxRatesAddResponse.md)**

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

List Tax Rates. Note: Not all connectors return the actual rate/percentage value. In this case, only the tax code or reference is returned. Connectors Affected: Quickbooks


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\AccountingTaxRatesAllRequest(
    serviceId: 'salesforce',
    filter: new Components\TaxRatesFilter(
        assets: true,
        equity: true,
        expenses: true,
        liabilities: true,
        revenue: true,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->accounting->taxRates->list(
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
| `$request`                                                                                         | [Operations\AccountingTaxRatesAllRequest](../../Models/Operations/AccountingTaxRatesAllRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingTaxRatesAllResponse](../../Models/Operations/AccountingTaxRatesAllResponse.md)**

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

Delete Tax Rate

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

$request = new Operations\AccountingTaxRatesDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->taxRates->delete(
    request: $request
);

if ($response->deleteTaxRateResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingTaxRatesDeleteRequest](../../Models/Operations/AccountingTaxRatesDeleteRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingTaxRatesDeleteResponse](../../Models/Operations/AccountingTaxRatesDeleteResponse.md)**

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

Get Tax Rate. Note: Not all connectors return the actual rate/percentage value. In this case, only the tax code or reference is returned. Support will soon be added to return the actual rate/percentage by doing additional calls in the background to provide the full view of a given tax rate. Connectors Affected: Quickbooks


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

$request = new Operations\AccountingTaxRatesOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->taxRates->get(
    request: $request
);

if ($response->getTaxRateResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\AccountingTaxRatesOneRequest](../../Models/Operations/AccountingTaxRatesOneRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingTaxRatesOneResponse](../../Models/Operations/AccountingTaxRatesOneResponse.md)**

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

Update Tax Rate

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\AccountingTaxRatesUpdateRequest(
    id: '<id>',
    taxRate: new Components\TaxRateInput(
        name: 'GST on Purchases',
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
        id: '1234',
        code: 'ABN',
        description: 'Reduced rate GST Purchases',
        effectiveTaxRate: 10,
        totalTaxRate: 10,
        taxPayableAccountId: '123456',
        taxRemittedAccountId: '123456',
        components: [
            new Components\Components(
                name: 'GST',
                id: '10',
                rate: 10,
                compound: true,
            ),
        ],
        type: 'NONE',
        reportTaxType: 'NONE',
        originalTaxRateId: '12345',
        status: Components\TaxRateStatus::Active,
        rowVersion: '1-12345',
    ),
    serviceId: 'salesforce',
);

$response = $sdk->accounting->taxRates->update(
    request: $request
);

if ($response->updateTaxRateResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingTaxRatesUpdateRequest](../../Models/Operations/AccountingTaxRatesUpdateRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingTaxRatesUpdateResponse](../../Models/Operations/AccountingTaxRatesUpdateResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |