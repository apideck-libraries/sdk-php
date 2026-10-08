# Accounting.SalesOrders

## Overview

### Available Operations

* [list](#list) - List Sales Orders
* [create](#create) - Create Sales Order
* [get](#get) - Get Sales Order
* [update](#update) - Update Sales Order
* [delete](#delete) - Delete Sales Order

## list

List Sales Orders

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.salesOrdersAll" method="get" path="/accounting/sales-orders" -->
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

$request = new Operations\AccountingSalesOrdersAllRequest(
    serviceId: 'salesforce',
    companyId: '12345',
    filter: new Components\SalesOrdersFilter(
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
        createdSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
        number: 'SO000123',
        customerId: '123abc',
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
);

$responses = $sdk->accounting->salesOrders->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingSalesOrdersAllRequest](../../Models/Operations/AccountingSalesOrdersAllRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingSalesOrdersAllResponse](../../Models/Operations/AccountingSalesOrdersAllResponse.md)**

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

Create Sales Order

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.salesOrdersAdd" method="post" path="/accounting/sales-orders" -->
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

$request = new Operations\AccountingSalesOrdersAddRequest(
    serviceId: 'salesforce',
    companyId: '12345',
    salesOrder: new Components\SalesOrderInput(
        number: 'SO000123',
        customer: new Components\LinkedCustomerInput(
            id: '12345',
            displayName: 'Windsurf Shop',
            email: 'boring@boring.com',
        ),
        quoteId: '123456',
        companyId: '12345',
        departmentId: '12345',
        locationId: '12345',
        projectId: '12345',
        subsidiaryId: '12345',
        orderDate: LocalDate::parse('2020-09-30'),
        deliveryDate: LocalDate::parse('2020-10-15'),
        orderType: 'SO',
        terms: 'Net 30',
        termsId: '12345',
        poNumber: '90000117',
        reference: 'INV-2024-001',
        status: Components\SalesOrderStatus::Open,
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        taxInclusive: true,
        subTotal: 27500,
        totalTax: 2500,
        taxCode: '1234',
        discountPercentage: 5.5,
        discountAmount: 25,
        total: 30000,
        shippingMethod: 'FEDEX',
        paymentMethod: 'cash',
        customerMemo: 'Thank you for your order!',
        notes: 'Ship with next consignment',
        lineItems: [
            new Components\InvoiceLineItemInput(
                id: '12345',
                rowId: '12345',
                code: '120-C',
                lineNumber: 1,
                description: 'Model Y is a fully electric, mid-size SUV, with seating for up to seven, dual motor AWD and unparalleled protection.',
                type: Components\InvoiceLineItemType::SalesItem,
                taxAmount: 27500,
                totalAmount: 27500,
                quantity: 1,
                unitPrice: 27500.5,
                unitOfMeasure: 'pc.',
                discountPercentage: 0.01,
                discountAmount: 19.99,
                serviceDate: LocalDate::parse('2024-01-15'),
                categoryId: '12345',
                locationId: '12345',
                departmentId: '12345',
                subsidiaryId: '12345',
                shippingId: '12345',
                memo: 'Some memo',
                prepaid: true,
                item: new Components\LinkedInvoiceItem(
                    id: '12344',
                    code: '120-C',
                    name: 'Model Y',
                ),
                taxApplicableOn: 'Domestic_Purchase_of_Goods_and_Services',
                taxRecoverability: 'Fully_Recoverable',
                taxMethod: 'Due_to_Supplier',
                worktags: [
                    new Components\LinkedWorktag(
                        id: '123456',
                        value: 'New York',
                    ),
                ],
                taxRate: new Components\LinkedTaxRateInput(
                    id: '123456',
                    code: 'N-T',
                    rate: 10,
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
                ledgerAccount: new Components\LinkedLedgerAccount(
                    id: '123456',
                    name: 'Bank account',
                    nominalCode: 'N091',
                    code: '453',
                    parentId: '123456',
                    displayId: '123456',
                ),
                customFields: [
                    new Components\CustomField1(
                        id: '2389328923893298',
                        name: 'employee_level',
                        refName: 'Marketing',
                        description: 'Employee Level',
                        value: 'Uses Salesforce and Marketo',
                    ),
                ],
                rowVersion: '1-12345',
            ),
        ],
        billingAddress: new Components\Address(
            id: '123',
            type: Components\Type::Primary,
            string: '25 Spring Street, Blackburn, VIC 3130',
            name: 'HQ US',
            line1: 'Main street',
            line2: 'apt #',
            line3: 'Suite #',
            line4: 'delivery instructions',
            line5: 'Attention: Finance Dept',
            streetNumber: '25',
            city: 'San Francisco',
            state: 'CA',
            postalCode: '94104',
            country: 'US',
            latitude: '40.759211',
            longitude: '-73.984638',
            county: 'Santa Clara',
            contactName: 'Elon Musk',
            salutation: 'Mr',
            phoneNumber: '111-111-1111',
            fax: '122-111-1111',
            email: 'elon@musk.com',
            website: 'https://elonmusk.com',
            notes: 'Address notes or delivery instructions.',
            rowVersion: '1-12345',
        ),
        shippingAddress: new Components\Address(
            id: '123',
            type: Components\Type::Primary,
            string: '25 Spring Street, Blackburn, VIC 3130',
            name: 'HQ US',
            line1: 'Main street',
            line2: 'apt #',
            line3: 'Suite #',
            line4: 'delivery instructions',
            line5: 'Attention: Finance Dept',
            streetNumber: '25',
            city: 'San Francisco',
            state: 'CA',
            postalCode: '94104',
            country: 'US',
            latitude: '40.759211',
            longitude: '-73.984638',
            county: 'Santa Clara',
            contactName: 'Elon Musk',
            salutation: 'Mr',
            phoneNumber: '111-111-1111',
            fax: '122-111-1111',
            email: 'elon@musk.com',
            website: 'https://elonmusk.com',
            notes: 'Address notes or delivery instructions.',
            rowVersion: '1-12345',
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
        templateId: '123456',
        sourceDocumentUrl: 'https://www.ordersolution.com/order/123456',
        customFields: [
            new Components\CustomField1(
                id: '2389328923893298',
                name: 'employee_level',
                refName: 'Marketing',
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

$response = $sdk->accounting->salesOrders->create(
    request: $request
);

if ($response->createSalesOrderResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingSalesOrdersAddRequest](../../Models/Operations/AccountingSalesOrdersAddRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingSalesOrdersAddResponse](../../Models/Operations/AccountingSalesOrdersAddResponse.md)**

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

Get Sales Order

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.salesOrdersOne" method="get" path="/accounting/sales-orders/{id}" -->
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

$request = new Operations\AccountingSalesOrdersOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    companyId: '12345',
);

$response = $sdk->accounting->salesOrders->get(
    request: $request
);

if ($response->getSalesOrderResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingSalesOrdersOneRequest](../../Models/Operations/AccountingSalesOrdersOneRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingSalesOrdersOneResponse](../../Models/Operations/AccountingSalesOrdersOneResponse.md)**

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

Update Sales Order

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.salesOrdersUpdate" method="patch" path="/accounting/sales-orders/{id}" -->
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

$request = new Operations\AccountingSalesOrdersUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    companyId: '12345',
    salesOrder: new Components\SalesOrderInput(
        number: 'SO000123',
        customer: new Components\LinkedCustomerInput(
            id: '12345',
            displayName: 'Windsurf Shop',
            email: 'boring@boring.com',
        ),
        quoteId: '123456',
        companyId: '12345',
        departmentId: '12345',
        locationId: '12345',
        projectId: '12345',
        subsidiaryId: '12345',
        orderDate: LocalDate::parse('2020-09-30'),
        deliveryDate: LocalDate::parse('2020-10-15'),
        orderType: 'SO',
        terms: 'Net 30',
        termsId: '12345',
        poNumber: '90000117',
        reference: 'INV-2024-001',
        status: Components\SalesOrderStatus::Open,
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        taxInclusive: true,
        subTotal: 27500,
        totalTax: 2500,
        taxCode: '1234',
        discountPercentage: 5.5,
        discountAmount: 25,
        total: 30000,
        shippingMethod: 'FEDEX',
        paymentMethod: 'cash',
        customerMemo: 'Thank you for your order!',
        notes: 'Ship with next consignment',
        lineItems: [
            new Components\InvoiceLineItemInput(
                id: '12345',
                rowId: '12345',
                code: '120-C',
                lineNumber: 1,
                description: 'Model Y is a fully electric, mid-size SUV, with seating for up to seven, dual motor AWD and unparalleled protection.',
                type: Components\InvoiceLineItemType::SalesItem,
                taxAmount: 27500,
                totalAmount: 27500,
                quantity: 1,
                unitPrice: 27500.5,
                unitOfMeasure: 'pc.',
                discountPercentage: 0.01,
                discountAmount: 19.99,
                serviceDate: LocalDate::parse('2024-01-15'),
                categoryId: '12345',
                locationId: '12345',
                departmentId: '12345',
                subsidiaryId: '12345',
                shippingId: '12345',
                memo: 'Some memo',
                prepaid: true,
                item: new Components\LinkedInvoiceItem(
                    id: '12344',
                    code: '120-C',
                    name: 'Model Y',
                ),
                taxApplicableOn: 'Domestic_Purchase_of_Goods_and_Services',
                taxRecoverability: 'Fully_Recoverable',
                taxMethod: 'Due_to_Supplier',
                worktags: [
                    new Components\LinkedWorktag(
                        id: '123456',
                        value: 'New York',
                    ),
                ],
                taxRate: new Components\LinkedTaxRateInput(
                    id: '123456',
                    code: 'N-T',
                    rate: 10,
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
                ledgerAccount: new Components\LinkedLedgerAccount(
                    id: '123456',
                    name: 'Bank account',
                    nominalCode: 'N091',
                    code: '453',
                    parentId: '123456',
                    displayId: '123456',
                ),
                customFields: [
                    new Components\CustomField1(
                        id: '2389328923893298',
                        name: 'employee_level',
                        refName: 'Marketing',
                        description: 'Employee Level',
                        value: 'Uses Salesforce and Marketo',
                    ),
                ],
                rowVersion: '1-12345',
            ),
        ],
        billingAddress: new Components\Address(
            id: '123',
            type: Components\Type::Primary,
            string: '25 Spring Street, Blackburn, VIC 3130',
            name: 'HQ US',
            line1: 'Main street',
            line2: 'apt #',
            line3: 'Suite #',
            line4: 'delivery instructions',
            line5: 'Attention: Finance Dept',
            streetNumber: '25',
            city: 'San Francisco',
            state: 'CA',
            postalCode: '94104',
            country: 'US',
            latitude: '40.759211',
            longitude: '-73.984638',
            county: 'Santa Clara',
            contactName: 'Elon Musk',
            salutation: 'Mr',
            phoneNumber: '111-111-1111',
            fax: '122-111-1111',
            email: 'elon@musk.com',
            website: 'https://elonmusk.com',
            notes: 'Address notes or delivery instructions.',
            rowVersion: '1-12345',
        ),
        shippingAddress: new Components\Address(
            id: '123',
            type: Components\Type::Primary,
            string: '25 Spring Street, Blackburn, VIC 3130',
            name: 'HQ US',
            line1: 'Main street',
            line2: 'apt #',
            line3: 'Suite #',
            line4: 'delivery instructions',
            line5: 'Attention: Finance Dept',
            streetNumber: '25',
            city: 'San Francisco',
            state: 'CA',
            postalCode: '94104',
            country: 'US',
            latitude: '40.759211',
            longitude: '-73.984638',
            county: 'Santa Clara',
            contactName: 'Elon Musk',
            salutation: 'Mr',
            phoneNumber: '111-111-1111',
            fax: '122-111-1111',
            email: 'elon@musk.com',
            website: 'https://elonmusk.com',
            notes: 'Address notes or delivery instructions.',
            rowVersion: '1-12345',
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
        templateId: '123456',
        sourceDocumentUrl: 'https://www.ordersolution.com/order/123456',
        customFields: [
            new Components\CustomField1(
                id: '2389328923893298',
                name: 'employee_level',
                refName: 'Marketing',
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

$response = $sdk->accounting->salesOrders->update(
    request: $request
);

if ($response->updateSalesOrderResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\AccountingSalesOrdersUpdateRequest](../../Models/Operations/AccountingSalesOrdersUpdateRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingSalesOrdersUpdateResponse](../../Models/Operations/AccountingSalesOrdersUpdateResponse.md)**

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

Delete Sales Order

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.salesOrdersDelete" method="delete" path="/accounting/sales-orders/{id}" -->
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

$request = new Operations\AccountingSalesOrdersDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
    companyId: '12345',
);

$response = $sdk->accounting->salesOrders->delete(
    request: $request
);

if ($response->deleteSalesOrderResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\AccountingSalesOrdersDeleteRequest](../../Models/Operations/AccountingSalesOrdersDeleteRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingSalesOrdersDeleteResponse](../../Models/Operations/AccountingSalesOrdersDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |