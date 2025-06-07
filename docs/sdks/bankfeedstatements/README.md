# BankFeedStatements
(*accounting->bankFeedStatements*)

## Overview

### Available Operations

* [list](#list) - List Bank Feed Statements
* [create](#create) - Create Bank Feed Statement
* [get](#get) - Get Bank Feed Statement
* [update](#update) - Update Bank Feed Statement
* [delete](#delete) - Delete Bank Feed Statement

## list

List Bank Feed Statements

### Example Usage

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

$request = new Operations\AccountingBankFeedStatementsAllRequest(
    serviceId: 'salesforce',
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->accounting->bankFeedStatements->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\AccountingBankFeedStatementsAllRequest](../../Models/Operations/AccountingBankFeedStatementsAllRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\AccountingBankFeedStatementsAllResponse](../../Models/Operations/AccountingBankFeedStatementsAllResponse.md)**

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

Create Bank Feed Statement

### Example Usage

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

$request = new Operations\AccountingBankFeedStatementsAddRequest(
    serviceId: 'salesforce',
    bankFeedStatement: new Components\BankFeedStatementInput(
        bankFeedAccountId: 'acc_456',
        status: Components\StatementStatus::Pending,
        startDate: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        endDate: Utils\Utils::parseDateTime('2025-01-31T12:00:00.000Z'),
        startBalance: 10500.25,
        startBalanceCreditOrDebit: Components\CreditOrDebit::Debit,
        endBalance: 9800.5,
        endBalanceCreditOrDebit: Components\CreditOrDebit::Debit,
        transactions: [
            new Components\Transactions(
                postedDate: Utils\Utils::parseDateTime('2025-01-15T12:00:00.000Z'),
                description: 'Payment received from ACME Corp',
                amount: 250,
                creditOrDebit: Components\CreditOrDebit::Debit,
                sourceTransactionId: 'txn_987',
                counterparty: 'ACME Corp',
                reference: 'INV-2025-01',
                transactionType: Components\BankFeedStatementTransactionType::Payment,
            ),
            new Components\Transactions(
                postedDate: Utils\Utils::parseDateTime('2025-01-15T12:00:00.000Z'),
                description: 'Payment received from ACME Corp',
                amount: 250,
                creditOrDebit: Components\CreditOrDebit::Debit,
                sourceTransactionId: 'txn_987',
                counterparty: 'ACME Corp',
                reference: 'INV-2025-01',
                transactionType: Components\BankFeedStatementTransactionType::Payment,
            ),
            new Components\Transactions(
                postedDate: Utils\Utils::parseDateTime('2025-01-15T12:00:00.000Z'),
                description: 'Payment received from ACME Corp',
                amount: 250,
                creditOrDebit: Components\CreditOrDebit::Debit,
                sourceTransactionId: 'txn_987',
                counterparty: 'ACME Corp',
                reference: 'INV-2025-01',
                transactionType: Components\BankFeedStatementTransactionType::Payment,
            ),
        ],
    ),
);

$response = $sdk->accounting->bankFeedStatements->create(
    request: $request
);

if ($response->createBankFeedStatementResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\AccountingBankFeedStatementsAddRequest](../../Models/Operations/AccountingBankFeedStatementsAddRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\AccountingBankFeedStatementsAddResponse](../../Models/Operations/AccountingBankFeedStatementsAddResponse.md)**

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

Get Bank Feed Statement

### Example Usage

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

$request = new Operations\AccountingBankFeedStatementsOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->bankFeedStatements->get(
    request: $request
);

if ($response->getBankFeedStatementResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\AccountingBankFeedStatementsOneRequest](../../Models/Operations/AccountingBankFeedStatementsOneRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\AccountingBankFeedStatementsOneResponse](../../Models/Operations/AccountingBankFeedStatementsOneResponse.md)**

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

Update Bank Feed Statement

### Example Usage

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

$request = new Operations\AccountingBankFeedStatementsUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    bankFeedStatement: new Components\BankFeedStatementInput(
        bankFeedAccountId: 'acc_456',
        status: Components\StatementStatus::Pending,
        startDate: Utils\Utils::parseDateTime('2021-05-01T12:00:00.000Z'),
        endDate: Utils\Utils::parseDateTime('2025-01-31T12:00:00.000Z'),
        startBalance: 10500.25,
        startBalanceCreditOrDebit: Components\CreditOrDebit::Debit,
        endBalance: 9800.5,
        endBalanceCreditOrDebit: Components\CreditOrDebit::Debit,
        transactions: [
            new Components\Transactions(
                postedDate: Utils\Utils::parseDateTime('2025-01-15T12:00:00.000Z'),
                description: 'Payment received from ACME Corp',
                amount: 250,
                creditOrDebit: Components\CreditOrDebit::Debit,
                sourceTransactionId: 'txn_987',
                counterparty: 'ACME Corp',
                reference: 'INV-2025-01',
                transactionType: Components\BankFeedStatementTransactionType::Payment,
            ),
            new Components\Transactions(
                postedDate: Utils\Utils::parseDateTime('2025-01-15T12:00:00.000Z'),
                description: 'Payment received from ACME Corp',
                amount: 250,
                creditOrDebit: Components\CreditOrDebit::Debit,
                sourceTransactionId: 'txn_987',
                counterparty: 'ACME Corp',
                reference: 'INV-2025-01',
                transactionType: Components\BankFeedStatementTransactionType::Payment,
            ),
        ],
    ),
);

$response = $sdk->accounting->bankFeedStatements->update(
    request: $request
);

if ($response->updateBankFeedStatementResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [Operations\AccountingBankFeedStatementsUpdateRequest](../../Models/Operations/AccountingBankFeedStatementsUpdateRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |

### Response

**[?Operations\AccountingBankFeedStatementsUpdateResponse](../../Models/Operations/AccountingBankFeedStatementsUpdateResponse.md)**

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

Delete Bank Feed Statement

### Example Usage

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

$request = new Operations\AccountingBankFeedStatementsDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->bankFeedStatements->delete(
    request: $request
);

if ($response->deleteBankFeedStatementResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [Operations\AccountingBankFeedStatementsDeleteRequest](../../Models/Operations/AccountingBankFeedStatementsDeleteRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |

### Response

**[?Operations\AccountingBankFeedStatementsDeleteResponse](../../Models/Operations/AccountingBankFeedStatementsDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |