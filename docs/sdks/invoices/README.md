# Invoices
(*accounting->invoices*)

## Overview

### Available Operations

* [list](#list) - List Invoices
* [create](#create) - Create Invoice
* [get](#get) - Get Invoice
* [update](#update) - Update Invoice
* [delete](#delete) - Delete Invoice

## list

List Invoices

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

$request = new Operations\AccountingInvoicesAllRequest(
    serviceId: 'salesforce',
    filter: new Components\InvoicesFilter(
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
        createdSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
        number: 'OIT00546',
    ),
    sort: new Components\InvoicesSort(
        by: Components\InvoicesSortBy::UpdatedAt,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->accounting->invoices->list(
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
| `$request`                                                                                         | [Operations\AccountingInvoicesAllRequest](../../Models/Operations/AccountingInvoicesAllRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingInvoicesAllResponse](../../Models/Operations/AccountingInvoicesAllResponse.md)**

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

Create Invoice

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

$request = new Operations\AccountingInvoicesAddRequest(
    serviceId: 'salesforce',
    invoice: new Components\InvoiceInput(
        type: Components\InvoiceType::Service,
        number: 'OIT00546',
        customer: new Components\LinkedCustomerInput(
            id: '12345',
            displayName: 'Windsurf Shop',
            email: 'boring@boring.com',
        ),
        companyId: '12345',
        invoiceDate: LocalDate::parse('2020-09-30'),
        dueDate: LocalDate::parse('2020-09-30'),
        terms: 'Net 30 days',
        poNumber: '90000117',
        reference: '123456',
        status: Components\InvoiceStatus::Draft,
        invoiceSent: true,
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        taxInclusive: true,
        subTotal: 27500,
        totalTax: 2500,
        taxCode: '1234',
        discountPercentage: 5.5,
        discountAmount: 25,
        total: 27500,
        balance: 27500,
        deposit: 0,
        customerMemo: 'Thank you for your business and have a great day!',
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
            ),
        ],
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
                locationId: '12345',
                departmentId: '12345',
                item: new Components\LinkedInvoiceItem(
                    id: '12344',
                    code: '120-C',
                    name: 'Model Y',
                ),
                taxRate: new Components\LinkedTaxRateInput(
                    id: '123456',
                    rate: 10,
                ),
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
                customFields: [
                    new Components\CustomField(
                        id: '2389328923893298',
                        name: 'employee_level',
                        description: 'Employee Level',
                        value: true,
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
        templateId: '123456',
        sourceDocumentUrl: 'https://www.invoicesolution.com/invoice/123456',
        paymentMethod: 'cash',
        channel: 'email',
        language: 'EN',
        accountingByRow: false,
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
        ledgerAccount: new Components\LinkedLedgerAccountInput(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: new Components\Four(),
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

$response = $sdk->accounting->invoices->create(
    request: $request
);

if ($response->createInvoiceResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\AccountingInvoicesAddRequest](../../Models/Operations/AccountingInvoicesAddRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingInvoicesAddResponse](../../Models/Operations/AccountingInvoicesAddResponse.md)**

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

Get Invoice

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

$request = new Operations\AccountingInvoicesOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->invoices->get(
    request: $request
);

if ($response->getInvoiceResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\AccountingInvoicesOneRequest](../../Models/Operations/AccountingInvoicesOneRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingInvoicesOneResponse](../../Models/Operations/AccountingInvoicesOneResponse.md)**

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

Update Invoice

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

$request = new Operations\AccountingInvoicesUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    invoice: new Components\InvoiceInput(
        type: Components\InvoiceType::Service,
        number: 'OIT00546',
        customer: new Components\LinkedCustomerInput(
            id: '12345',
            displayName: 'Windsurf Shop',
            email: 'boring@boring.com',
        ),
        companyId: '12345',
        invoiceDate: LocalDate::parse('2020-09-30'),
        dueDate: LocalDate::parse('2020-09-30'),
        terms: 'Net 30 days',
        poNumber: '90000117',
        reference: '123456',
        status: Components\InvoiceStatus::Draft,
        invoiceSent: true,
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        taxInclusive: true,
        subTotal: 27500,
        totalTax: 2500,
        taxCode: '1234',
        discountPercentage: 5.5,
        discountAmount: 25,
        total: 27500,
        balance: 27500,
        deposit: 0,
        customerMemo: 'Thank you for your business and have a great day!',
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
            ),
        ],
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
                locationId: '12345',
                departmentId: '12345',
                item: new Components\LinkedInvoiceItem(
                    id: '12344',
                    code: '120-C',
                    name: 'Model Y',
                ),
                taxRate: new Components\LinkedTaxRateInput(
                    id: '123456',
                    rate: 10,
                ),
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
        templateId: '123456',
        sourceDocumentUrl: 'https://www.invoicesolution.com/invoice/123456',
        paymentMethod: 'cash',
        channel: 'email',
        language: 'EN',
        accountingByRow: false,
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
        ledgerAccount: new Components\LinkedLedgerAccountInput(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: new Components\Four(),
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

$response = $sdk->accounting->invoices->update(
    request: $request
);

if ($response->updateInvoiceResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingInvoicesUpdateRequest](../../Models/Operations/AccountingInvoicesUpdateRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingInvoicesUpdateResponse](../../Models/Operations/AccountingInvoicesUpdateResponse.md)**

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

Delete Invoice

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

$request = new Operations\AccountingInvoicesDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->invoices->delete(
    request: $request
);

if ($response->deleteInvoiceResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingInvoicesDeleteRequest](../../Models/Operations/AccountingInvoicesDeleteRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingInvoicesDeleteResponse](../../Models/Operations/AccountingInvoicesDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |