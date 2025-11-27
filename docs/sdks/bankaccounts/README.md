# BankAccounts
(*accounting->bankAccounts*)

## Overview

### Available Operations

* [list](#list) - List Bank Accounts
* [create](#create) - Create Bank Account
* [get](#get) - Get Bank Account
* [update](#update) - Update Bank Account
* [delete](#delete) - Delete Bank Account

## list

List Bank Accounts

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.bankAccountsAll" method="get" path="/accounting/bank-accounts" -->
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

$request = new Operations\AccountingBankAccountsAllRequest(
    serviceId: 'salesforce',
    filter: new Components\BankAccountsFilter(
        name: 'Main Operating',
        accountType: Components\BankAccountsFilterAccountType::Checking,
        status: Components\BankAccountsFilterStatus::Active,
    ),
    sort: new Components\BankAccountsSort(),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->accounting->bankAccounts->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\AccountingBankAccountsAllRequest](../../Models/Operations/AccountingBankAccountsAllRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AccountingBankAccountsAllResponse](../../Models/Operations/AccountingBankAccountsAllResponse.md)**

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

Create Bank Account

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.bankAccountsAdd" method="post" path="/accounting/bank-accounts" -->
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

$request = new Operations\AccountingBankAccountsAddRequest(
    serviceId: 'salesforce',
    accountingBankAccount: new Components\AccountingBankAccountInput(
        displayId: 'BA-001',
        name: 'Main Operating Account',
        accountNumber: '123465',
        accountType: Components\AccountingBankAccountAccountType::Checking,
        ledgerAccount: new Components\LinkedLedgerAccount(
            id: '123456',
            name: 'Bank account',
            nominalCode: 'N091',
            code: '453',
            parentId: '123456',
            displayId: '123456',
        ),
        bankName: 'Chase Bank',
        currency: Components\Currency::Usd,
        balance: 25000,
        availableBalance: 24500,
        overdraftLimit: 5000,
        routingNumber: '021000021',
        iban: 'GB33BUKB20201555555555',
        bic: 'CHASUS33',
        bsbNumber: '062-001',
        branchIdentifier: '001',
        bankCode: 'BNH',
        country: 'US',
        status: Components\AccountingBankAccountStatus::Active,
        description: 'Primary operating account for daily transactions',
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
    ),
);

$response = $sdk->accounting->bankAccounts->create(
    request: $request
);

if ($response->createBankAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\AccountingBankAccountsAddRequest](../../Models/Operations/AccountingBankAccountsAddRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AccountingBankAccountsAddResponse](../../Models/Operations/AccountingBankAccountsAddResponse.md)**

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

Get Bank Account

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.bankAccountsOne" method="get" path="/accounting/bank-accounts/{id}" -->
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

$request = new Operations\AccountingBankAccountsOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->bankAccounts->get(
    request: $request
);

if ($response->getBankAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\AccountingBankAccountsOneRequest](../../Models/Operations/AccountingBankAccountsOneRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AccountingBankAccountsOneResponse](../../Models/Operations/AccountingBankAccountsOneResponse.md)**

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

Update Bank Account

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.bankAccountsUpdate" method="patch" path="/accounting/bank-accounts/{id}" -->
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

$request = new Operations\AccountingBankAccountsUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    accountingBankAccount: new Components\AccountingBankAccountInput(
        displayId: 'BA-001',
        name: 'Main Operating Account',
        accountNumber: '123465',
        accountType: Components\AccountingBankAccountAccountType::Checking,
        ledgerAccount: new Components\LinkedLedgerAccount(
            id: '123456',
            name: 'Bank account',
            nominalCode: 'N091',
            code: '453',
            parentId: '123456',
            displayId: '123456',
        ),
        bankName: 'Chase Bank',
        currency: Components\Currency::Usd,
        balance: 25000,
        availableBalance: 24500,
        overdraftLimit: 5000,
        routingNumber: '021000021',
        iban: 'GB33BUKB20201555555555',
        bic: 'CHASUS33',
        bsbNumber: '062-001',
        branchIdentifier: '001',
        bankCode: 'BNH',
        country: 'US',
        status: Components\AccountingBankAccountStatus::Active,
        description: 'Primary operating account for daily transactions',
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
    ),
);

$response = $sdk->accounting->bankAccounts->update(
    request: $request
);

if ($response->updateBankAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\AccountingBankAccountsUpdateRequest](../../Models/Operations/AccountingBankAccountsUpdateRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\AccountingBankAccountsUpdateResponse](../../Models/Operations/AccountingBankAccountsUpdateResponse.md)**

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

Delete Bank Account

### Example Usage

<!-- UsageSnippet language="php" operationID="accounting.bankAccountsDelete" method="delete" path="/accounting/bank-accounts/{id}" -->
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

$request = new Operations\AccountingBankAccountsDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->bankAccounts->delete(
    request: $request
);

if ($response->deleteBankAccountResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\AccountingBankAccountsDeleteRequest](../../Models/Operations/AccountingBankAccountsDeleteRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\AccountingBankAccountsDeleteResponse](../../Models/Operations/AccountingBankAccountsDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |