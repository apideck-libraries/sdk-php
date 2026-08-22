# Accounting.SalesReceipts

## Overview

### Available Operations

* [list](#list) - List Sales Receipts
* [create](#create) - Create Sales Receipt
* [get](#get) - Get Sales Receipt
* [update](#update) - Update Sales Receipt
* [delete](#delete) - Delete Sales Receipt

## list

List Sales Receipts

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.salesReceiptsAll" method="get" path="/accounting/sales-receipts" -->
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

$request = new Operations\AccountingSalesReceiptsAllRequest(
    serviceId: 'salesforce',
    companyId: '12345',
    filter: new Components\SalesReceiptsFilter(
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
        customerId: '123abc',
    ),
    sort: new Components\SalesReceiptsSort(
        by: Components\SalesReceiptsSortBy::UpdatedAt,
        direction: Components\SortDirection::Desc,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->accounting->salesReceipts->list(
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
| `$request`                                                                                                   | [Operations\AccountingSalesReceiptsAllRequest](../../Models/Operations/AccountingSalesReceiptsAllRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\AccountingSalesReceiptsAllResponse](../../Models/Operations/AccountingSalesReceiptsAllResponse.md)**

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

Create Sales Receipt

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.salesReceiptsAdd" method="post" path="/accounting/sales-receipts" -->
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

$request = new Operations\AccountingSalesReceiptsAddRequest(
    serviceId: 'salesforce',
    companyId: '12345',
    salesReceipt: new Components\SalesReceiptInput(
        number: 'SR-00001',
        customer: new Components\LinkedCustomerInput(
            id: '12345',
            displayName: 'Windsurf Shop',
            email: 'boring@boring.com',
        ),
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        taxInclusive: true,
        subTotal: 250,
        totalAmount: 49.99,
        totalTax: 25,
        transactionDate: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        paymentMethod: 'cash',
        paymentMethodReference: '123456',
        paymentMethodId: '12345',
        account: new Components\LinkedLedgerAccount(
            id: '123456',
            name: 'Bank account',
            nominalCode: 'N091',
            code: '453',
            parentId: '123456',
            displayId: '123456',
        ),
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
        taxCode: '1234',
        discountPercentage: 5.5,
        discountAmount: 25,
        note: 'Thank you for your purchase',
        customerMemo: 'Thank you for your business and have a great day!',
        reference: 'REF-123456',
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
        department: new Components\LinkedDepartmentInput(
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

$response = $sdk->accounting->salesReceipts->create(
    request: $request
);

if ($response->createSalesReceiptResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\AccountingSalesReceiptsAddRequest](../../Models/Operations/AccountingSalesReceiptsAddRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\AccountingSalesReceiptsAddResponse](../../Models/Operations/AccountingSalesReceiptsAddResponse.md)**

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

Get Sales Receipt

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.salesReceiptsOne" method="get" path="/accounting/sales-receipts/{id}" -->
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

$request = new Operations\AccountingSalesReceiptsOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    companyId: '12345',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->salesReceipts->get(
    request: $request
);

if ($response->getSalesReceiptResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\AccountingSalesReceiptsOneRequest](../../Models/Operations/AccountingSalesReceiptsOneRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\AccountingSalesReceiptsOneResponse](../../Models/Operations/AccountingSalesReceiptsOneResponse.md)**

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

Update Sales Receipt

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.salesReceiptsUpdate" method="patch" path="/accounting/sales-receipts/{id}" -->
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

$request = new Operations\AccountingSalesReceiptsUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    companyId: '12345',
    salesReceipt: new Components\SalesReceiptInput(
        number: 'SR-00001',
        customer: new Components\LinkedCustomerInput(
            id: '12345',
            displayName: 'Windsurf Shop',
            email: 'boring@boring.com',
        ),
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        taxInclusive: true,
        subTotal: 250,
        totalAmount: 49.99,
        totalTax: 25,
        transactionDate: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        paymentMethod: 'cash',
        paymentMethodReference: '123456',
        paymentMethodId: '12345',
        account: new Components\LinkedLedgerAccount(
            id: '123456',
            name: 'Bank account',
            nominalCode: 'N091',
            code: '453',
            parentId: '123456',
            displayId: '123456',
        ),
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
        taxCode: '1234',
        discountPercentage: 5.5,
        discountAmount: 25,
        note: 'Thank you for your purchase',
        customerMemo: 'Thank you for your business and have a great day!',
        reference: 'REF-123456',
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
        department: new Components\LinkedDepartmentInput(
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

$response = $sdk->accounting->salesReceipts->update(
    request: $request
);

if ($response->updateSalesReceiptResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\AccountingSalesReceiptsUpdateRequest](../../Models/Operations/AccountingSalesReceiptsUpdateRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\AccountingSalesReceiptsUpdateResponse](../../Models/Operations/AccountingSalesReceiptsUpdateResponse.md)**

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

Delete Sales Receipt

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.salesReceiptsDelete" method="delete" path="/accounting/sales-receipts/{id}" -->
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

$request = new Operations\AccountingSalesReceiptsDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
    companyId: '12345',
);

$response = $sdk->accounting->salesReceipts->delete(
    request: $request
);

if ($response->deleteSalesReceiptResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\AccountingSalesReceiptsDeleteRequest](../../Models/Operations/AccountingSalesReceiptsDeleteRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\AccountingSalesReceiptsDeleteResponse](../../Models/Operations/AccountingSalesReceiptsDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |