# JournalEntries
(*accounting->journalEntries*)

## Overview

### Available Operations

* [create](#create) - Create Journal Entry
* [list](#list) - List Journal Entries
* [delete](#delete) - Delete Journal Entry
* [get](#get) - Get Journal Entry
* [update](#update) - Update Journal Entry

## create

Create Journal Entry

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AccountingJournalEntriesAddRequest(
    journalEntry: new Components\JournalEntryInput(
        lineItems: [
            new Components\JournalEntryLineItemInput(
                type: Components\JournalEntryLineItemType::Debit,
                taxRate: new Components\LinkedTaxRateInput(
                    id: '123456',
                    rate: 10,
                ),
                ledgerAccount: new Components\LinkedLedgerAccountInput(
                    id: '123456',
                    nominalCode: 'N091',
                    code: '453',
                ),
                description: 'Model Y is a fully electric, mid-size SUV, with seating for up to seven, dual motor AWD and unparalleled protection.',
                taxAmount: 27500,
                subTotal: 27500,
                totalAmount: 27500,
                trackingCategories: [
                    new Components\LinkedTrackingCategory(
                        id: '123456',
                        name: 'New York',
                    ),
                ],
                customer: new Components\LinkedCustomerInput(
                    id: '12345',
                    email: 'boring@boring.com',
                    displayName: 'Windsurf Shop',
                ),
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
                lineNumber: 1,
            ),
        ],
        postedAt: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
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
        title: 'Purchase Invoice-Inventory (USD): 2019/02/01 Batch Summary Entry',
        currencyRate: 0.69,
        currency: Components\Currency::Usd,
        companyId: '12345',
        memo: 'Thank you for your business and have a great day!',
        journalSymbol: 'IND',
        taxType: 'sales',
        taxCode: '1234',
        number: 'OIT00546',
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
            ),
        ],
        accountingPeriod: '01-24',
        rowVersion: '1-12345',
    ),
    serviceId: 'salesforce',
);

$response = $sdk->accounting->journalEntries->create(
    request: $request
);

if ($response->createJournalEntryResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\AccountingJournalEntriesAddRequest](../../Models/Operations/AccountingJournalEntriesAddRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingJournalEntriesAddResponse](../../Models/Operations/AccountingJournalEntriesAddResponse.md)**

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

List Journal Entries

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AccountingJournalEntriesAllRequest(
    serviceId: 'salesforce',
    filter: new Components\JournalEntriesFilter(
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
    ),
    sort: new Components\JournalEntriesSort(
        by: Components\JournalEntriesSortBy::UpdatedAt,
        direction: Components\SortDirection::Desc,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->accounting->journalEntries->list(
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
| `$request`                                                                                                     | [Operations\AccountingJournalEntriesAllRequest](../../Models/Operations/AccountingJournalEntriesAllRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingJournalEntriesAllResponse](../../Models/Operations/AccountingJournalEntriesAllResponse.md)**

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

Delete Journal Entry

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AccountingJournalEntriesDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->journalEntries->delete(
    request: $request
);

if ($response->deleteJournalEntryResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\AccountingJournalEntriesDeleteRequest](../../Models/Operations/AccountingJournalEntriesDeleteRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AccountingJournalEntriesDeleteResponse](../../Models/Operations/AccountingJournalEntriesDeleteResponse.md)**

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

Get Journal Entry

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AccountingJournalEntriesOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->journalEntries->get(
    request: $request
);

if ($response->getJournalEntryResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\AccountingJournalEntriesOneRequest](../../Models/Operations/AccountingJournalEntriesOneRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingJournalEntriesOneResponse](../../Models/Operations/AccountingJournalEntriesOneResponse.md)**

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

Update Journal Entry

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AccountingJournalEntriesUpdateRequest(
    id: '<id>',
    journalEntry: new Components\JournalEntryInput(
        lineItems: [
            new Components\JournalEntryLineItemInput(
                type: Components\JournalEntryLineItemType::Debit,
                taxRate: new Components\LinkedTaxRateInput(
                    id: '123456',
                    rate: 10,
                ),
                ledgerAccount: new Components\LinkedLedgerAccountInput(
                    id: '123456',
                    nominalCode: 'N091',
                    code: '453',
                ),
                description: 'Model Y is a fully electric, mid-size SUV, with seating for up to seven, dual motor AWD and unparalleled protection.',
                taxAmount: 27500,
                subTotal: 27500,
                totalAmount: 27500,
                trackingCategories: [
                    new Components\LinkedTrackingCategory(
                        id: '123456',
                        name: 'New York',
                    ),
                ],
                customer: new Components\LinkedCustomerInput(
                    id: '12345',
                    email: 'boring@boring.com',
                    displayName: 'Windsurf Shop',
                ),
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
                lineNumber: 1,
            ),
        ],
        postedAt: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
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
        title: 'Purchase Invoice-Inventory (USD): 2019/02/01 Batch Summary Entry',
        currencyRate: 0.69,
        currency: Components\Currency::Usd,
        companyId: '12345',
        memo: 'Thank you for your business and have a great day!',
        journalSymbol: 'IND',
        taxType: 'sales',
        taxCode: '1234',
        number: 'OIT00546',
        trackingCategories: [
            new Components\LinkedTrackingCategory(
                id: '123456',
                name: 'New York',
            ),
        ],
        accountingPeriod: '01-24',
        rowVersion: '1-12345',
    ),
    serviceId: 'salesforce',
);

$response = $sdk->accounting->journalEntries->update(
    request: $request
);

if ($response->updateJournalEntryResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\AccountingJournalEntriesUpdateRequest](../../Models/Operations/AccountingJournalEntriesUpdateRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AccountingJournalEntriesUpdateResponse](../../Models/Operations/AccountingJournalEntriesUpdateResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |