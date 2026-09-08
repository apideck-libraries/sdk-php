# Accounting.BillCreditNotes

## Overview

### Available Operations

* [list](#list) - List Bill Credit Notes
* [create](#create) - Create Bill Credit Note
* [get](#get) - Get Bill Credit Note
* [update](#update) - Update Bill Credit Note
* [delete](#delete) - Delete Bill Credit Note

## list

List Bill Credit Notes

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.billCreditNotesAll" method="get" path="/accounting/bill-credit-notes" -->
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

$request = new Operations\AccountingBillCreditNotesAllRequest(
    serviceId: 'salesforce',
    companyId: '12345',
    filter: new Components\BillCreditNotesFilter(
        ids: '12345,67890',
        idSince: '1',
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
        createdSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
        number: 'OIT00546',
        supplierId: '123abc',
    ),
    sort: new Components\BillCreditNotesSort(
        by: Components\BillCreditNotesSortBy::UpdatedAt,
        direction: Components\SortDirection::Desc,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->accounting->billCreditNotes->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\AccountingBillCreditNotesAllRequest](../../Models/Operations/AccountingBillCreditNotesAllRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\AccountingBillCreditNotesAllResponse](../../Models/Operations/AccountingBillCreditNotesAllResponse.md)**

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

Create Bill Credit Note

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.billCreditNotesAdd" method="post" path="/accounting/bill-credit-notes" -->
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

$request = new Operations\AccountingBillCreditNotesAddRequest(
    serviceId: 'salesforce',
    companyId: '12345',
    billCreditNote: new Components\BillCreditNoteInput(
        number: 'OIT00546',
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
        ),
        subsidiary: new Components\LinkedSubsidiaryInput(
            displayId: '123456',
            name: 'Acme Inc.',
        ),
        location: new Components\LinkedLocationInput(
            id: '123456',
            displayId: '123456',
            name: 'New York Office',
        ),
        department: new Components\LinkedDepartmentInput(
            displayId: '123456',
            name: 'Acme Inc.',
        ),
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        taxInclusive: true,
        subTotal: 27500,
        totalAmount: 49.99,
        totalTax: 2500,
        taxCode: '1234',
        balance: 27500,
        remainingCredit: 27500,
        status: Components\BillCreditNoteStatus::Authorised,
        reference: '123456',
        dateIssued: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        datePaid: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        type: Components\BillCreditNoteType::AccountsPayableCredit,
        account: new Components\LinkedLedgerAccount(
            id: '123456',
            name: 'Bank account',
            nominalCode: 'N091',
            code: '453',
            parentId: '123456',
            displayId: '123456',
        ),
        lineItems: [
            new Components\BillCreditNoteLineItemInput(
                rowId: '12345',
                code: '120-C',
                lineNumber: 1,
                description: 'Returned goods credit',
                type: Components\LineItemType::ExpenseAccount,
                taxAmount: 27.5,
                totalAmount: 27500,
                quantity: 1,
                unitPrice: 27500.5,
                unitOfMeasure: 'pc.',
                discountPercentage: 0.01,
                discountAmount: 19.99,
                serviceDate: LocalDate::parse('2024-01-15'),
                location: new Components\LinkedLocationInput(
                    id: '123456',
                    displayId: '123456',
                    name: 'New York Office',
                ),
                department: null,
                item: new Components\LinkedInvoiceItem(
                    id: '12344',
                    code: '120-C',
                    name: 'Model Y',
                ),
                taxRate: new Components\LinkedTaxRateInput(
                    id: '123456',
                    code: 'N-T',
                    rate: 10,
                ),
                ledgerAccount: new Components\LinkedLedgerAccount(
                    id: '123456',
                    name: 'Bank account',
                    nominalCode: 'N091',
                    code: '453',
                    parentId: '123456',
                    displayId: '123456',
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
                rowVersion: '1-12345',
            ),
        ],
        allocations: [
            new Components\AllocationInput(
                id: '123456',
                amount: 49.99,
                allocationId: '123456',
            ),
        ],
        note: 'Some notes about this bill credit note',
        terms: 'Some terms about this bill credit note',
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

$response = $sdk->accounting->billCreditNotes->create(
    request: $request
);

if ($response->createBillCreditNoteResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\AccountingBillCreditNotesAddRequest](../../Models/Operations/AccountingBillCreditNotesAddRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\AccountingBillCreditNotesAddResponse](../../Models/Operations/AccountingBillCreditNotesAddResponse.md)**

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

Get Bill Credit Note

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.billCreditNotesOne" method="get" path="/accounting/bill-credit-notes/{id}" -->
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

$request = new Operations\AccountingBillCreditNotesOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    companyId: '12345',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->billCreditNotes->get(
    request: $request
);

if ($response->getBillCreditNoteResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\AccountingBillCreditNotesOneRequest](../../Models/Operations/AccountingBillCreditNotesOneRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\AccountingBillCreditNotesOneResponse](../../Models/Operations/AccountingBillCreditNotesOneResponse.md)**

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

Update Bill Credit Note

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.billCreditNotesUpdate" method="patch" path="/accounting/bill-credit-notes/{id}" -->
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

$request = new Operations\AccountingBillCreditNotesUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    billCreditNote: new Components\BillCreditNoteInput(
        number: 'OIT00546',
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
        ),
        subsidiary: new Components\LinkedSubsidiaryInput(
            displayId: '123456',
            name: 'Acme Inc.',
        ),
        location: new Components\LinkedLocationInput(
            id: '123456',
            displayId: '123456',
            name: 'New York Office',
        ),
        department: new Components\LinkedDepartmentInput(
            displayId: '123456',
            name: 'Acme Inc.',
        ),
        currency: Components\Currency::Usd,
        currencyRate: 0.69,
        taxInclusive: true,
        subTotal: 27500,
        totalAmount: 49.99,
        totalTax: 2500,
        taxCode: '1234',
        balance: 27500,
        remainingCredit: 27500,
        status: Components\BillCreditNoteStatus::Authorised,
        reference: '123456',
        dateIssued: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        datePaid: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        type: Components\BillCreditNoteType::AccountsPayableCredit,
        account: new Components\LinkedLedgerAccount(
            id: '123456',
            name: 'Bank account',
            nominalCode: 'N091',
            code: '453',
            parentId: '123456',
            displayId: '123456',
        ),
        lineItems: [
            new Components\BillCreditNoteLineItemInput(
                rowId: '12345',
                code: '120-C',
                lineNumber: 1,
                description: 'Returned goods credit',
                type: Components\LineItemType::ExpenseAccount,
                taxAmount: 27.5,
                totalAmount: 27500,
                quantity: 1,
                unitPrice: 27500.5,
                unitOfMeasure: 'pc.',
                discountPercentage: 0.01,
                discountAmount: 19.99,
                serviceDate: LocalDate::parse('2024-01-15'),
                location: new Components\LinkedLocationInput(
                    id: '123456',
                    displayId: '123456',
                    name: 'New York Office',
                ),
                department: new Components\LinkedDepartmentInput(
                    displayId: '123456',
                    name: 'Acme Inc.',
                ),
                item: new Components\LinkedInvoiceItem(
                    id: '12344',
                    code: '120-C',
                    name: 'Model Y',
                ),
                taxRate: new Components\LinkedTaxRateInput(
                    id: '123456',
                    code: 'N-T',
                    rate: 10,
                ),
                ledgerAccount: new Components\LinkedLedgerAccount(
                    id: '123456',
                    name: 'Bank account',
                    nominalCode: 'N091',
                    code: '453',
                    parentId: '123456',
                    displayId: '123456',
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
                rowVersion: '1-12345',
            ),
        ],
        allocations: [
            new Components\AllocationInput(
                id: '123456',
                amount: 49.99,
                allocationId: '123456',
            ),
        ],
        note: 'Some notes about this bill credit note',
        terms: 'Some terms about this bill credit note',
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

$response = $sdk->accounting->billCreditNotes->update(
    request: $request
);

if ($response->updateBillCreditNoteResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\AccountingBillCreditNotesUpdateRequest](../../Models/Operations/AccountingBillCreditNotesUpdateRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\AccountingBillCreditNotesUpdateResponse](../../Models/Operations/AccountingBillCreditNotesUpdateResponse.md)**

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

Delete Bill Credit Note

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.billCreditNotesDelete" method="delete" path="/accounting/bill-credit-notes/{id}" -->
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

$request = new Operations\AccountingBillCreditNotesDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->billCreditNotes->delete(
    request: $request
);

if ($response->deleteBillCreditNoteResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\AccountingBillCreditNotesDeleteRequest](../../Models/Operations/AccountingBillCreditNotesDeleteRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\AccountingBillCreditNotesDeleteResponse](../../Models/Operations/AccountingBillCreditNotesDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |