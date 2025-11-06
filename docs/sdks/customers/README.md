# Customers
(*accounting->customers*)

## Overview

### Available Operations

* [list](#list) - List Customers
* [create](#create) - Create Customer
* [get](#get) - Get Customer
* [update](#update) - Update Customer
* [delete](#delete) - Delete Customer

## list

List Customers

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.customersAll" method="get" path="/accounting/customers" -->
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

$request = new Operations\AccountingCustomersAllRequest(
    serviceId: 'salesforce',
    filter: new Components\CustomersFilter(
        companyName: 'SpaceX',
        displayName: 'Elon Musk',
        firstName: 'Elon',
        lastName: 'Musk',
        email: 'elon@musk.com',
        status: Components\CustomersFilterStatus::Active,
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
        supplierId: '123',
    ),
    sort: new Components\CustomersSort(
        by: Components\CustomersSortBy::UpdatedAt,
        direction: Components\SortDirection::Desc,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->accounting->customers->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\AccountingCustomersAllRequest](../../Models/Operations/AccountingCustomersAllRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\AccountingCustomersAllResponse](../../Models/Operations/AccountingCustomersAllResponse.md)**

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

Create Customer

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.customersAdd" method="post" path="/accounting/customers" -->
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

$request = new Operations\AccountingCustomersAddRequest(
    serviceId: 'salesforce',
    customer: new Components\CustomerInput(
        displayId: 'EMP00101',
        displayName: 'Windsurf Shop',
        companyName: 'SpaceX',
        companyId: '12345',
        title: 'CEO',
        firstName: 'Elon',
        middleName: 'D.',
        lastName: 'Musk',
        suffix: 'Jr.',
        individual: true,
        project: false,
        addresses: [
            new Components\Address(
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
        ],
        phoneNumbers: [
            new Components\PhoneNumber(
                id: '12345',
                countryCode: '1',
                areaCode: '323',
                number: '111-111-1111',
                extension: '105',
                type: Components\PhoneNumberType::Primary,
            ),
        ],
        emails: [
            new Components\Email(
                id: '123',
                email: 'elon@musk.com',
                type: Components\EmailType::Primary,
            ),
        ],
        websites: [
            new Components\Website(
                id: '12345',
                url: 'http://example.com',
                type: Components\WebsiteType::Primary,
            ),
            new Components\Website(
                id: '12345',
                url: 'http://example.com',
                type: Components\WebsiteType::Primary,
            ),
            new Components\Website(
                id: '12345',
                url: 'http://example.com',
                type: Components\WebsiteType::Primary,
            ),
        ],
        bankAccounts: [
            new Components\BankAccount(
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
            new Components\BankAccount(
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
        ],
        notes: 'Some notes about this customer',
        taxRate: new Components\LinkedTaxRateInput(
            id: '123456',
            rate: 10,
        ),
        taxNumber: 'US123945459',
        currency: Components\Currency::Usd,
        account: new Components\LinkedLedgerAccount(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
        parent: new Components\LinkedParentCustomer(
            id: '12345',
            name: 'Windsurf Shop',
        ),
        status: Components\CustomerStatusStatus::Active,
        paymentMethod: 'cash',
        channel: 'email',
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: null,
            ),
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: null,
            ),
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: null,
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

$response = $sdk->accounting->customers->create(
    request: $request
);

if ($response->createCustomerResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\AccountingCustomersAddRequest](../../Models/Operations/AccountingCustomersAddRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\AccountingCustomersAddResponse](../../Models/Operations/AccountingCustomersAddResponse.md)**

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

Get Customer

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.customersOne" method="get" path="/accounting/customers/{id}" -->
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

$request = new Operations\AccountingCustomersOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->customers->get(
    request: $request
);

if ($response->getCustomerResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\AccountingCustomersOneRequest](../../Models/Operations/AccountingCustomersOneRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\AccountingCustomersOneResponse](../../Models/Operations/AccountingCustomersOneResponse.md)**

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

Update Customer

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.customersUpdate" method="patch" path="/accounting/customers/{id}" -->
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

$request = new Operations\AccountingCustomersUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    customer: new Components\CustomerInput(
        displayId: 'EMP00101',
        displayName: 'Windsurf Shop',
        companyName: 'SpaceX',
        companyId: '12345',
        title: 'CEO',
        firstName: 'Elon',
        middleName: 'D.',
        lastName: 'Musk',
        suffix: 'Jr.',
        individual: true,
        project: false,
        addresses: [
            new Components\Address(
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
        ],
        phoneNumbers: [
            new Components\PhoneNumber(
                id: '12345',
                countryCode: '1',
                areaCode: '323',
                number: '111-111-1111',
                extension: '105',
                type: Components\PhoneNumberType::Primary,
            ),
            new Components\PhoneNumber(
                id: '12345',
                countryCode: '1',
                areaCode: '323',
                number: '111-111-1111',
                extension: '105',
                type: Components\PhoneNumberType::Primary,
            ),
        ],
        emails: [
            new Components\Email(
                id: '123',
                email: 'elon@musk.com',
                type: Components\EmailType::Primary,
            ),
        ],
        websites: [
            new Components\Website(
                id: '12345',
                url: 'http://example.com',
                type: Components\WebsiteType::Primary,
            ),
            new Components\Website(
                id: '12345',
                url: 'http://example.com',
                type: Components\WebsiteType::Primary,
            ),
            new Components\Website(
                id: '12345',
                url: 'http://example.com',
                type: Components\WebsiteType::Primary,
            ),
        ],
        bankAccounts: [
            new Components\BankAccount(
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
            new Components\BankAccount(
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
            new Components\BankAccount(
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
        ],
        notes: 'Some notes about this customer',
        taxRate: new Components\LinkedTaxRateInput(
            id: '123456',
            rate: 10,
        ),
        taxNumber: 'US123945459',
        currency: Components\Currency::Usd,
        account: new Components\LinkedLedgerAccount(
            id: '123456',
            nominalCode: 'N091',
            code: '453',
        ),
        parent: new Components\LinkedParentCustomer(
            id: '12345',
            name: 'Windsurf Shop',
        ),
        status: Components\CustomerStatusStatus::Active,
        paymentMethod: 'cash',
        channel: 'email',
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
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

$response = $sdk->accounting->customers->update(
    request: $request
);

if ($response->updateCustomerResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\AccountingCustomersUpdateRequest](../../Models/Operations/AccountingCustomersUpdateRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AccountingCustomersUpdateResponse](../../Models/Operations/AccountingCustomersUpdateResponse.md)**

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

Delete Customer

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.customersDelete" method="delete" path="/accounting/customers/{id}" -->
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

$request = new Operations\AccountingCustomersDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->customers->delete(
    request: $request
);

if ($response->deleteCustomerResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\AccountingCustomersDeleteRequest](../../Models/Operations/AccountingCustomersDeleteRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AccountingCustomersDeleteResponse](../../Models/Operations/AccountingCustomersDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |