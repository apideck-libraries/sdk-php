# Accounting.LedgerAccounts

## Overview

### Available Operations

* [list](#list) - List Ledger Accounts
* [create](#create) - Create Ledger Account
* [get](#get) - Get Ledger Account
* [update](#update) - Update Ledger Account
* [delete](#delete) - Delete Ledger Account

## list

List Ledger Accounts

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.ledgerAccountsAll" method="get" path="/accounting/ledger-accounts" -->
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

$request = new Operations\AccountingLedgerAccountsAllRequest(
    serviceId: 'salesforce',
    filter: new Components\LedgerAccountsFilter(
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
    ),
    sort: new Components\LedgerAccountsSort(
        by: Components\LedgerAccountsSortBy::UpdatedAt,
        direction: Components\SortDirection::Desc,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->accounting->ledgerAccounts->list(
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
| `$request`                                                                                                     | [Operations\AccountingLedgerAccountsAllRequest](../../Models/Operations/AccountingLedgerAccountsAllRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingLedgerAccountsAllResponse](../../Models/Operations/AccountingLedgerAccountsAllResponse.md)**

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

Create Ledger Account

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.ledgerAccountsAdd" method="post" path="/accounting/ledger-accounts" -->
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

$request = new Operations\AccountingLedgerAccountsAddRequest(
    serviceId: 'salesforce',
    ledgerAccount: new Components\LedgerAccountInput(
        displayId: '1-12345',
        code: '453',
        classification: Components\LedgerAccountClassification::Asset,
        type: Components\LedgerAccountType::Bank,
        subType: 'CHECKING_ACCOUNT',
        name: 'Bank account',
        fullyQualifiedName: 'Asset.Bank.Checking_Account',
        description: 'Main checking account',
        openingBalance: 75000,
        currentBalance: 20000,
        currency: Components\Currency::Usd,
        taxType: 'NONE',
        taxRate: new Components\LinkedTaxRateInput(
            id: '123456',
            rate: 10,
        ),
        level: 1,
        active: true,
        status: Components\AccountStatus::Active,
        header: true,
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
        parentAccount: new Components\ParentAccount(
            id: '12345',
            name: 'Bank Accounts',
            displayId: '1-1100',
        ),
        subAccount: false,
        lastReconciliationDate: LocalDate::parse('2020-09-30'),
        customFields: [
            new Components\CustomField1(
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

$response = $sdk->accounting->ledgerAccounts->create(
    request: $request
);

if ($response->createLedgerAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\AccountingLedgerAccountsAddRequest](../../Models/Operations/AccountingLedgerAccountsAddRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingLedgerAccountsAddResponse](../../Models/Operations/AccountingLedgerAccountsAddResponse.md)**

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

Get Ledger Account

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.ledgerAccountsOne" method="get" path="/accounting/ledger-accounts/{id}" -->
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

$request = new Operations\AccountingLedgerAccountsOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->ledgerAccounts->get(
    request: $request
);

if ($response->getLedgerAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\AccountingLedgerAccountsOneRequest](../../Models/Operations/AccountingLedgerAccountsOneRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingLedgerAccountsOneResponse](../../Models/Operations/AccountingLedgerAccountsOneResponse.md)**

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

Update Ledger Account

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.ledgerAccountsUpdate" method="patch" path="/accounting/ledger-accounts/{id}" -->
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

$request = new Operations\AccountingLedgerAccountsUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    ledgerAccount: new Components\LedgerAccountInput(
        displayId: '1-12345',
        code: '453',
        classification: Components\LedgerAccountClassification::Asset,
        type: Components\LedgerAccountType::Bank,
        subType: 'CHECKING_ACCOUNT',
        name: 'Bank account',
        fullyQualifiedName: 'Asset.Bank.Checking_Account',
        description: 'Main checking account',
        openingBalance: 75000,
        currentBalance: 20000,
        currency: Components\Currency::Usd,
        taxType: 'NONE',
        taxRate: new Components\LinkedTaxRateInput(
            id: '123456',
            rate: 10,
        ),
        level: 1,
        active: true,
        status: Components\AccountStatus::Active,
        header: true,
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
        parentAccount: new Components\ParentAccount(
            id: '12345',
            name: 'Bank Accounts',
            displayId: '1-1100',
        ),
        subAccount: false,
        lastReconciliationDate: LocalDate::parse('2020-09-30'),
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

$response = $sdk->accounting->ledgerAccounts->update(
    request: $request
);

if ($response->updateLedgerAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\AccountingLedgerAccountsUpdateRequest](../../Models/Operations/AccountingLedgerAccountsUpdateRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AccountingLedgerAccountsUpdateResponse](../../Models/Operations/AccountingLedgerAccountsUpdateResponse.md)**

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

Delete Ledger Account

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.ledgerAccountsDelete" method="delete" path="/accounting/ledger-accounts/{id}" -->
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

$request = new Operations\AccountingLedgerAccountsDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->ledgerAccounts->delete(
    request: $request
);

if ($response->deleteLedgerAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\AccountingLedgerAccountsDeleteRequest](../../Models/Operations/AccountingLedgerAccountsDeleteRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AccountingLedgerAccountsDeleteResponse](../../Models/Operations/AccountingLedgerAccountsDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |