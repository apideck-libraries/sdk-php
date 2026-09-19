# Accounting.GoodsReceipts

## Overview

### Available Operations

* [list](#list) - List Goods Receipts
* [get](#get) - Get Goods Receipt

## list

List Goods Receipts

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.goodsReceiptsAll" method="get" path="/accounting/goods-receipts" -->
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

$request = new Operations\AccountingGoodsReceiptsAllRequest(
    serviceId: 'salesforce',
    companyId: '12345',
    filter: new Components\GoodsReceiptsFilter(
        updatedSince: Utils\Utils::parseDateTime('2026-09-01T07:43:32.000Z'),
        supplierId: '123abc',
        purchaseOrderId: '123456',
    ),
    sort: new Components\GoodsReceiptsSort(
        by: Components\GoodsReceiptsSortBy::UpdatedAt,
        direction: Components\SortDirection::Desc,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->accounting->goodsReceipts->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\AccountingGoodsReceiptsAllRequest](../../Models/Operations/AccountingGoodsReceiptsAllRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\AccountingGoodsReceiptsAllResponse](../../Models/Operations/AccountingGoodsReceiptsAllResponse.md)**

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

Get Goods Receipt

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.goodsReceiptsOne" method="get" path="/accounting/goods-receipts/{id}" -->
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

$request = new Operations\AccountingGoodsReceiptsOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    companyId: '12345',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->goodsReceipts->get(
    request: $request
);

if ($response->getGoodsReceiptResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\AccountingGoodsReceiptsOneRequest](../../Models/Operations/AccountingGoodsReceiptsOneRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\AccountingGoodsReceiptsOneResponse](../../Models/Operations/AccountingGoodsReceiptsOneResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |