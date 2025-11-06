# InvoiceItems
(*accounting->invoiceItems*)

## Overview

### Available Operations

* [list](#list) - List Invoice Items
* [create](#create) - Create Invoice Item
* [get](#get) - Get Invoice Item
* [update](#update) - Update Invoice Item
* [delete](#delete) - Delete Invoice Item

## list

List Invoice Items

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.invoiceItemsAll" method="get" path="/accounting/invoice-items" -->
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

$request = new Operations\AccountingInvoiceItemsAllRequest(
    serviceId: 'salesforce',
    filter: new Components\InvoiceItemsFilter(
        name: 'Widgets Large',
        type: Components\InvoiceItemType::Service,
    ),
    sort: new Components\InvoiceItemsSort(
        by: Components\InvoiceItemsSortBy::UpdatedAt,
        direction: Components\SortDirection::Desc,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->accounting->invoiceItems->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\AccountingInvoiceItemsAllRequest](../../Models/Operations/AccountingInvoiceItemsAllRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AccountingInvoiceItemsAllResponse](../../Models/Operations/AccountingInvoiceItemsAllResponse.md)**

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

Create Invoice Item

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.invoiceItemsAdd" method="post" path="/accounting/invoice-items" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Brick\DateTime\LocalDate;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\AccountingInvoiceItemsAddRequest(
    serviceId: 'salesforce',
    invoiceItem: new Components\InvoiceItemInput(
        name: 'Model Y',
        description: 'Model Y is a fully electric, mid-size SUV, with seating for up to seven, dual motor AWD and unparalleled protection.',
        code: '120-C',
        sold: true,
        purchased: true,
        tracked: true,
        taxable: true,
        inventoryDate: LocalDate::parse('2020-10-30'),
        type: Components\InvoiceItemTypeType::Inventory,
        salesDetails: new Components\InvoiceItemSalesDetails(
            unitPrice: 27500.5,
            unitOfMeasure: 'pc.',
            taxInclusive: true,
            taxRate: new Components\LinkedTaxRateInput(
                id: '123456',
                rate: 10,
            ),
        ),
        purchaseDetails: new Components\InvoiceItemPurchaseDetails(
            unitPrice: 27500.5,
            unitOfMeasure: 'pc.',
            taxInclusive: true,
            taxRate: new Components\LinkedTaxRateInput(
                id: '123456',
                rate: 10,
            ),
        ),
        quantity: 1,
        unitPrice: 27500.5,
        assetAccount: new Components\LinkedLedgerAccount(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
        incomeAccount: new Components\LinkedLedgerAccount(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
        expenseAccount: new Components\LinkedLedgerAccount(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
        trackingCategories: null,
        active: true,
        departmentId: '12345',
        locationId: '12345',
        subsidiaryId: '12345',
        taxScheduleId: '123456',
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

$response = $sdk->accounting->invoiceItems->create(
    request: $request
);

if ($response->createInvoiceItemResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\AccountingInvoiceItemsAddRequest](../../Models/Operations/AccountingInvoiceItemsAddRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AccountingInvoiceItemsAddResponse](../../Models/Operations/AccountingInvoiceItemsAddResponse.md)**

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

Get Invoice Item

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.invoiceItemsOne" method="get" path="/accounting/invoice-items/{id}" -->
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

$request = new Operations\AccountingInvoiceItemsOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
    filter: new Components\InvoiceItemFilter(
        type: Components\InvoiceItemFilterInvoiceItemType::Service,
    ),
);

$response = $sdk->accounting->invoiceItems->get(
    request: $request
);

if ($response->getInvoiceItemResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\AccountingInvoiceItemsOneRequest](../../Models/Operations/AccountingInvoiceItemsOneRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AccountingInvoiceItemsOneResponse](../../Models/Operations/AccountingInvoiceItemsOneResponse.md)**

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

Update Invoice Item

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.invoiceItemsUpdate" method="patch" path="/accounting/invoice-items/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Brick\DateTime\LocalDate;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\AccountingInvoiceItemsUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    invoiceItem: new Components\InvoiceItemInput(
        name: 'Model Y',
        description: 'Model Y is a fully electric, mid-size SUV, with seating for up to seven, dual motor AWD and unparalleled protection.',
        code: '120-C',
        sold: true,
        purchased: true,
        tracked: true,
        taxable: true,
        inventoryDate: LocalDate::parse('2020-10-30'),
        type: Components\InvoiceItemTypeType::Inventory,
        salesDetails: new Components\InvoiceItemSalesDetails(
            unitPrice: 27500.5,
            unitOfMeasure: 'pc.',
            taxInclusive: true,
            taxRate: new Components\LinkedTaxRateInput(
                id: '123456',
                rate: 10,
            ),
        ),
        purchaseDetails: new Components\InvoiceItemPurchaseDetails(
            unitPrice: 27500.5,
            unitOfMeasure: 'pc.',
            taxInclusive: true,
            taxRate: new Components\LinkedTaxRateInput(
                id: '123456',
                rate: 10,
            ),
        ),
        quantity: 1,
        unitPrice: 27500.5,
        assetAccount: new Components\LinkedLedgerAccount(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
        incomeAccount: null,
        expenseAccount: new Components\LinkedLedgerAccount(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
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
        active: true,
        departmentId: '12345',
        locationId: '12345',
        subsidiaryId: '12345',
        taxScheduleId: '123456',
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

$response = $sdk->accounting->invoiceItems->update(
    request: $request
);

if ($response->updateInvoiceItemsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\AccountingInvoiceItemsUpdateRequest](../../Models/Operations/AccountingInvoiceItemsUpdateRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\AccountingInvoiceItemsUpdateResponse](../../Models/Operations/AccountingInvoiceItemsUpdateResponse.md)**

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

Delete Invoice Item

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.invoiceItemsDelete" method="delete" path="/accounting/invoice-items/{id}" -->
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

$request = new Operations\AccountingInvoiceItemsDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->invoiceItems->delete(
    request: $request
);

if ($response->deleteTaxRateResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\AccountingInvoiceItemsDeleteRequest](../../Models/Operations/AccountingInvoiceItemsDeleteRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\AccountingInvoiceItemsDeleteResponse](../../Models/Operations/AccountingInvoiceItemsDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |