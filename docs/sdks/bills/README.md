# Accounting.Bills

## Overview

### Available Operations

* [list](#list) - List Bills
* [create](#create) - Create Bill
* [get](#get) - Get Bill
* [update](#update) - Update Bill
* [delete](#delete) - Delete Bill

## list

List Bills

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.billsAll" method="get" path="/accounting/bills" -->
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

$request = new Operations\AccountingBillsAllRequest(
    serviceId: 'salesforce',
    filter: new Components\BillsFilter(
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
    ),
    sort: new Components\BillsSort(
        by: Components\By::UpdatedAt,
        direction: Components\SortDirection::Desc,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->accounting->bills->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\AccountingBillsAllRequest](../../Models/Operations/AccountingBillsAllRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\AccountingBillsAllResponse](../../Models/Operations/AccountingBillsAllResponse.md)**

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

Create Bill

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.billsAdd" method="post" path="/accounting/bills" -->
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

$request = new Operations\AccountingBillsAddRequest(
    serviceId: 'salesforce',
    bill: new Components\BillInput(
        billNumber: '10001',
        supplier: new Components\LinkedSupplierInput(
            id: '12345',
            displayName: 'Windsurf Shop',
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
        ),
        companyId: '12345',
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        taxInclusive: true,
        billDate: LocalDate::parse('2020-09-30'),
        dueDate: LocalDate::parse('2020-10-30'),
        paidDate: LocalDate::parse('2020-10-30'),
        poNumber: '90000117',
        reference: '123456',
        lineItems: [
            new Components\BillLineItemInput(
                rowId: '12345',
                code: '120-C',
                lineNumber: 1,
                description: 'Model Y is a fully electric, mid-size SUV, with seating for up to seven, dual motor AWD and unparalleled protection.',
                type: Components\LineItemType::ExpenseAccount,
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
                ledgerAccount: new Components\LinkedLedgerAccount(
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
                    new Components\LinkedTrackingCategory(
                        id: '123456',
                        name: 'New York',
                    ),
                ],
                rowVersion: '1-12345',
            ),
        ],
        terms: 'Net 30 days',
        balance: 27500,
        deposit: 0,
        subTotal: 27500,
        totalTax: 2500,
        total: 27500,
        taxCode: '1234',
        notes: 'Some notes about this bill.',
        status: Components\BillStatus::Draft,
        ledgerAccount: new Components\LinkedLedgerAccount(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
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
        discountPercentage: 5.5,
        sourceDocumentUrl: 'https://www.invoicesolution.com/bill/123456',
        trackingCategories: null,
        rowVersion: '1-12345',
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
            new Components\CustomField1(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
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
        accountingPeriod: '01-24',
    ),
);

$response = $sdk->accounting->bills->create(
    request: $request
);

if ($response->createBillResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\AccountingBillsAddRequest](../../Models/Operations/AccountingBillsAddRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\AccountingBillsAddResponse](../../Models/Operations/AccountingBillsAddResponse.md)**

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

Get Bill

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.billsOne" method="get" path="/accounting/bills/{id}" -->
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

$request = new Operations\AccountingBillsOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->bills->get(
    request: $request
);

if ($response->getBillResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\AccountingBillsOneRequest](../../Models/Operations/AccountingBillsOneRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\AccountingBillsOneResponse](../../Models/Operations/AccountingBillsOneResponse.md)**

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

Update Bill

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.billsUpdate" method="patch" path="/accounting/bills/{id}" -->
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

$request = new Operations\AccountingBillsUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    bill: new Components\BillInput(
        billNumber: '10001',
        supplier: new Components\LinkedSupplierInput(
            id: '12345',
            displayName: 'Windsurf Shop',
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
        ),
        companyId: '12345',
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        taxInclusive: true,
        billDate: LocalDate::parse('2020-09-30'),
        dueDate: LocalDate::parse('2020-10-30'),
        paidDate: LocalDate::parse('2020-10-30'),
        poNumber: '90000117',
        reference: '123456',
        lineItems: [
            new Components\BillLineItemInput(
                rowId: '12345',
                code: '120-C',
                lineNumber: 1,
                description: 'Model Y is a fully electric, mid-size SUV, with seating for up to seven, dual motor AWD and unparalleled protection.',
                type: Components\LineItemType::ExpenseAccount,
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
                ledgerAccount: new Components\LinkedLedgerAccount(
                    id: '123456',
                    nominalCode: 'N091',
                    code: '453',
                ),
                trackingCategories: [
                    new Components\LinkedTrackingCategory(
                        id: '123456',
                        name: 'New York',
                    ),
                ],
                rowVersion: '1-12345',
            ),
            new Components\BillLineItemInput(
                rowId: '12345',
                code: '120-C',
                lineNumber: 1,
                description: 'Model Y is a fully electric, mid-size SUV, with seating for up to seven, dual motor AWD and unparalleled protection.',
                type: Components\LineItemType::ExpenseAccount,
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
                ledgerAccount: new Components\LinkedLedgerAccount(
                    id: '123456',
                    nominalCode: 'N091',
                    code: '453',
                ),
                trackingCategories: [
                    new Components\LinkedTrackingCategory(
                        id: '123456',
                        name: 'New York',
                    ),
                ],
                rowVersion: '1-12345',
            ),
        ],
        terms: 'Net 30 days',
        balance: 27500,
        deposit: 0,
        subTotal: 27500,
        totalTax: 2500,
        total: 27500,
        taxCode: '1234',
        notes: 'Some notes about this bill.',
        status: Components\BillStatus::Draft,
        ledgerAccount: new Components\LinkedLedgerAccount(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
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
        discountPercentage: 5.5,
        sourceDocumentUrl: 'https://www.invoicesolution.com/bill/123456',
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
            ),
        ],
        rowVersion: '1-12345',
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
        accountingPeriod: '01-24',
    ),
);

$response = $sdk->accounting->bills->update(
    request: $request
);

if ($response->updateBillResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\AccountingBillsUpdateRequest](../../Models/Operations/AccountingBillsUpdateRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingBillsUpdateResponse](../../Models/Operations/AccountingBillsUpdateResponse.md)**

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

Delete Bill

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.billsDelete" method="delete" path="/accounting/bills/{id}" -->
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

$request = new Operations\AccountingBillsDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->bills->delete(
    request: $request
);

if ($response->deleteBillResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\AccountingBillsDeleteRequest](../../Models/Operations/AccountingBillsDeleteRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AccountingBillsDeleteResponse](../../Models/Operations/AccountingBillsDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |