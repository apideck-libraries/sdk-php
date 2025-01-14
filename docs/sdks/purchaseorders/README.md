# PurchaseOrders
(*accounting->purchaseOrders*)

## Overview

### Available Operations

* [create](#create) - Create Purchase Order
* [list](#list) - List Purchase Orders
* [delete](#delete) - Delete Purchase Order
* [get](#get) - Get Purchase Order
* [update](#update) - Update Purchase Order

## create

Create Purchase Order

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Brick\DateTime\LocalDate;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\AccountingPurchaseOrdersAddRequest(
    purchaseOrder: new Components\PurchaseOrderInput(
        lineItems: [
            new Components\InvoiceLineItemInput(
                rowId: '12345',
                item: new Components\LinkedInvoiceItem(
                    id: '12344',
                    code: '120-C',
                    name: 'Model Y',
                ),
                taxRate: new Components\LinkedTaxRateInput(
                    id: '123456',
                    rate: 10,
                ),
                customFields: [
                    new Components\CustomField(
                        id: '2389328923893298',
                        name: 'employee_level',
                        description: 'Employee Level',
                        value: true,
                    ),
                ],
                id: '12345',
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
                locationId: '1234',
                departmentId: '1234',
                trackingCategories: [
                    new Components\LinkedTrackingCategory(
                        id: '123456',
                        name: 'New York',
                    ),
                ],
                ledgerAccount: new Components\LinkedLedgerAccountInput(
                    id: '123456',
                    nominalCode: 'N091',
                    code: '453',
                ),
                rowVersion: '1-12345',
            ),
        ],
        shippingAddress: new Components\Address(
            id: '123',
            type: Components\Type::Primary,
            string: '25 Spring Street, Blackburn, VIC 3130',
            name: 'HQ US',
            line1: 'Main street',
            line2: 'apt #',
            line3: 'Suite #',
            line4: 'delivery instructions',
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
        bankAccount: new Components\BankAccount(
            bankName: 'Monzo',
            accountNumber: '123465',
            accountName: 'SPACEX LLC',
            accountType: Components\AccountType::CreditCard,
            iban: 'CH2989144532982975332',
            bic: 'AUDSCHGGXXX',
            routingNumber: '012345678',
            bsbNumber: '062-001',
            branchIdentifier: '001',
            bankCode: 'BNH',
            currency: Components\Currency::Usd,
        ),
        dueDate: LocalDate::parse('2020-10-30'),
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
        poNumber: '90000117',
        reference: '123456',
        supplier: new Components\LinkedSupplierInput(
            id: '12345',
            address: new Components\Address(
                id: '123',
                type: Components\Type::Primary,
                string: '25 Spring Street, Blackburn, VIC 3130',
                name: 'HQ US',
                line1: 'Main street',
                line2: 'apt #',
                line3: 'Suite #',
                line4: 'delivery instructions',
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
            displayName: 'Windsurf Shop',
        ),
        companyId: '12345',
        status: Components\PurchaseOrderStatus::Open,
        issuedDate: LocalDate::parse('2020-09-30'),
        deliveryDate: LocalDate::parse('2020-09-30'),
        expectedArrivalDate: LocalDate::parse('2020-09-30'),
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        subTotal: 27500,
        totalTax: 2500,
        total: 27500,
        taxInclusive: true,
        ledgerAccount: new Components\LinkedLedgerAccountInput(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
        templateId: '123456',
        discountPercentage: 5.5,
        accountingByRow: false,
        paymentMethod: 'cash',
        taxCode: '1234',
        channel: 'email',
        memo: 'Thank you for the partnership and have a great day!',
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
            ),
        ],
        rowVersion: '1-12345',
    ),
    serviceId: 'salesforce',
);

$response = $sdk->accounting->purchaseOrders->create(
    request: $request
);

if ($response->createPurchaseOrderResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\AccountingPurchaseOrdersAddRequest](../../Models/Operations/AccountingPurchaseOrdersAddRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingPurchaseOrdersAddResponse](../../Models/Operations/AccountingPurchaseOrdersAddResponse.md)**

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

List Purchase Orders

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\AccountingPurchaseOrdersAllRequest(
    serviceId: 'salesforce',
    passThrough: [
        'search' => 'San Francisco',
    ],
    filter: new Components\PurchaseOrdersFilter(
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
        supplierId: '1234',
    ),
    sort: new Components\PurchaseOrdersSort(
        by: Components\PurchaseOrdersSortBy::UpdatedAt,
        direction: Components\SortDirection::Desc,
    ),
);

$responses = $sdk->accounting->purchaseOrders->list(
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
| `$request`                                                                                                     | [Operations\AccountingPurchaseOrdersAllRequest](../../Models/Operations/AccountingPurchaseOrdersAllRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingPurchaseOrdersAllResponse](../../Models/Operations/AccountingPurchaseOrdersAllResponse.md)**

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

Delete Purchase Order

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

$request = new Operations\AccountingPurchaseOrdersDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->purchaseOrders->delete(
    request: $request
);

if ($response->deletePurchaseOrderResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\AccountingPurchaseOrdersDeleteRequest](../../Models/Operations/AccountingPurchaseOrdersDeleteRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AccountingPurchaseOrdersDeleteResponse](../../Models/Operations/AccountingPurchaseOrdersDeleteResponse.md)**

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

Get Purchase Order

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

$request = new Operations\AccountingPurchaseOrdersOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->purchaseOrders->get(
    request: $request
);

if ($response->getPurchaseOrderResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\AccountingPurchaseOrdersOneRequest](../../Models/Operations/AccountingPurchaseOrdersOneRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingPurchaseOrdersOneResponse](../../Models/Operations/AccountingPurchaseOrdersOneResponse.md)**

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

Update Purchase Order

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Brick\DateTime\LocalDate;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\AccountingPurchaseOrdersUpdateRequest(
    id: '<id>',
    purchaseOrder: new Components\PurchaseOrderInput(
        lineItems: [
            new Components\InvoiceLineItemInput(
                rowId: '12345',
                item: new Components\LinkedInvoiceItem(
                    id: '12344',
                    code: '120-C',
                    name: 'Model Y',
                ),
                taxRate: new Components\LinkedTaxRateInput(
                    id: '123456',
                    rate: 10,
                ),
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
                id: '12345',
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
                locationId: '1234',
                departmentId: '1234',
                trackingCategories: [
                    new Components\LinkedTrackingCategory(
                        id: '123456',
                        name: 'New York',
                    ),
                ],
                ledgerAccount: new Components\LinkedLedgerAccountInput(
                    id: '123456',
                    nominalCode: 'N091',
                    code: '453',
                ),
                rowVersion: '1-12345',
            ),
        ],
        shippingAddress: new Components\Address(
            id: '123',
            type: Components\Type::Primary,
            string: '25 Spring Street, Blackburn, VIC 3130',
            name: 'HQ US',
            line1: 'Main street',
            line2: 'apt #',
            line3: 'Suite #',
            line4: 'delivery instructions',
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
        bankAccount: new Components\BankAccount(
            bankName: 'Monzo',
            accountNumber: '123465',
            accountName: 'SPACEX LLC',
            accountType: Components\AccountType::CreditCard,
            iban: 'CH2989144532982975332',
            bic: 'AUDSCHGGXXX',
            routingNumber: '012345678',
            bsbNumber: '062-001',
            branchIdentifier: '001',
            bankCode: 'BNH',
            currency: Components\Currency::Usd,
        ),
        dueDate: LocalDate::parse('2020-10-30'),
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
        poNumber: '90000117',
        reference: '123456',
        supplier: new Components\LinkedSupplierInput(
            id: '12345',
            address: new Components\Address(
                id: '123',
                type: Components\Type::Primary,
                string: '25 Spring Street, Blackburn, VIC 3130',
                name: 'HQ US',
                line1: 'Main street',
                line2: 'apt #',
                line3: 'Suite #',
                line4: 'delivery instructions',
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
            displayName: 'Windsurf Shop',
        ),
        companyId: '12345',
        status: Components\PurchaseOrderStatus::Open,
        issuedDate: LocalDate::parse('2020-09-30'),
        deliveryDate: LocalDate::parse('2020-09-30'),
        expectedArrivalDate: LocalDate::parse('2020-09-30'),
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        subTotal: 27500,
        totalTax: 2500,
        total: 27500,
        taxInclusive: true,
        ledgerAccount: new Components\LinkedLedgerAccountInput(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
        templateId: '123456',
        discountPercentage: 5.5,
        accountingByRow: false,
        paymentMethod: 'cash',
        taxCode: '1234',
        channel: 'email',
        memo: 'Thank you for the partnership and have a great day!',
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
            ),
        ],
        rowVersion: '1-12345',
    ),
    serviceId: 'salesforce',
);

$response = $sdk->accounting->purchaseOrders->update(
    request: $request
);

if ($response->updatePurchaseOrderResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\AccountingPurchaseOrdersUpdateRequest](../../Models/Operations/AccountingPurchaseOrdersUpdateRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AccountingPurchaseOrdersUpdateResponse](../../Models/Operations/AccountingPurchaseOrdersUpdateResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |