# Connections
(*vault->connections*)

## Overview

### Available Operations

* [list](#list) - Get all connections
* [get](#get) - Get connection
* [update](#update) - Update connection
* [delete](#delete) - Deletes a connection
* [imports](#imports) - Import connection
* [token](#token) - Authorize Access Token

## list

This endpoint includes all the configured integrations and contains the required assets
to build an integrations page where your users can install integrations.
OAuth2 supported integrations will contain authorize and revoke links to handle the authentication flows.


### Example Usage

<!-- UsageSnippet language="php" operationID="vault.connectionsAll" method="get" path="/vault/connections" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->vault->connections->list(
    api: 'crm',
    configured: true

);

if ($response->getConnectionsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                      | Type                                                           | Required                                                       | Description                                                    | Example                                                        |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `consumerId`                                                   | *?string*                                                      | :heavy_minus_sign:                                             | ID of the consumer which you want to get or push data from     | test-consumer                                                  |
| `appId`                                                        | *?string*                                                      | :heavy_minus_sign:                                             | The ID of your Unify application                               | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX                        |
| `api`                                                          | *?string*                                                      | :heavy_minus_sign:                                             | Scope results to Unified API                                   | crm                                                            |
| `configured`                                                   | *?bool*                                                        | :heavy_minus_sign:                                             | Scopes results to connections that have been configured or not | true                                                           |

### Response

**[?Operations\VaultConnectionsAllResponse](../../Models/Operations/VaultConnectionsAllResponse.md)**

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

Get a connection

### Example Usage

<!-- UsageSnippet language="php" operationID="vault.connectionsOne" method="get" path="/vault/connections/{unified_api}/{service_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->vault->connections->get(
    serviceId: 'pipedrive',
    unifiedApi: 'crm'

);

if ($response->getConnectionResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                  | Type                                                       | Required                                                   | Description                                                | Example                                                    |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `serviceId`                                                | *string*                                                   | :heavy_check_mark:                                         | Service ID of the resource to return                       | pipedrive                                                  |
| `unifiedApi`                                               | *string*                                                   | :heavy_check_mark:                                         | Unified API                                                | crm                                                        |
| `consumerId`                                               | *?string*                                                  | :heavy_minus_sign:                                         | ID of the consumer which you want to get or push data from | test-consumer                                              |
| `appId`                                                    | *?string*                                                  | :heavy_minus_sign:                                         | The ID of your Unify application                           | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX                    |

### Response

**[?Operations\VaultConnectionsOneResponse](../../Models/Operations/VaultConnectionsOneResponse.md)**

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

Update a connection

### Example Usage

<!-- UsageSnippet language="php" operationID="vault.connectionsUpdate" method="patch" path="/vault/connections/{unified_api}/{service_id}" -->
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

$request = new Operations\VaultConnectionsUpdateRequest(
    serviceId: 'pipedrive',
    unifiedApi: 'crm',
    connection: new Components\ConnectionInput(
        enabled: true,
        settings: [
            'instance_url' => 'https://eu28.salesforce.com',
            'api_key' => '12345xxxxxx',
        ],
        metadata: [
            'account' => [
                'name' => 'My Company',
                'id' => 'c01458a5-7276-41ce-bc19-639906b0450a',
            ],
            'plan' => 'enterprise',
        ],
        configuration: [
            new Components\ConnectionConfiguration(
                resource: 'leads',
                defaults: [
                    new Components\ConnectionDefaults(
                        id: 'ProductInterest',
                        options: [
                            new Components\FormFieldOptionGroup(
                                label: 'General Channel',
                                options: [],
                                optionType: Components\FormFieldOptionGroupOptionType::Group,
                            ),
                            new Components\SimpleFormFieldOption(
                                label: 'General Channel',
                                optionType: Components\OptionType::Simple,
                            ),
                        ],
                        value: 'GC5000 series',
                    ),
                    new Components\ConnectionDefaults(
                        id: 'ProductInterest',
                        options: [
                            new Components\FormFieldOptionGroup(
                                label: 'General Channel',
                                options: [],
                                optionType: Components\FormFieldOptionGroupOptionType::Group,
                            ),
                            new Components\SimpleFormFieldOption(
                                label: 'General Channel',
                                optionType: Components\OptionType::Simple,
                            ),
                        ],
                        value: 'GC5000 series',
                    ),
                ],
            ),
            new Components\ConnectionConfiguration(
                resource: 'leads',
                defaults: [
                    new Components\ConnectionDefaults(
                        id: 'ProductInterest',
                        options: [
                            new Components\FormFieldOptionGroup(
                                label: 'General Channel',
                                options: [],
                                optionType: Components\FormFieldOptionGroupOptionType::Group,
                            ),
                            new Components\SimpleFormFieldOption(
                                label: 'General Channel',
                                optionType: Components\OptionType::Simple,
                            ),
                        ],
                        value: 'GC5000 series',
                    ),
                    new Components\ConnectionDefaults(
                        id: 'ProductInterest',
                        options: [
                            new Components\FormFieldOptionGroup(
                                label: 'General Channel',
                                options: [],
                                optionType: Components\FormFieldOptionGroupOptionType::Group,
                            ),
                            new Components\SimpleFormFieldOption(
                                label: 'General Channel',
                                optionType: Components\OptionType::Simple,
                            ),
                        ],
                        value: 'GC5000 series',
                    ),
                ],
            ),
        ],
        customMappings: [
            new Components\CustomMappingInput(
                value: '$.root.training.first_aid',
            ),
            new Components\CustomMappingInput(
                value: '$.root.training.first_aid',
            ),
            new Components\CustomMappingInput(
                value: '$.root.training.first_aid',
            ),
        ],
    ),
);

$response = $sdk->vault->connections->update(
    request: $request
);

if ($response->updateConnectionResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\VaultConnectionsUpdateRequest](../../Models/Operations/VaultConnectionsUpdateRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\VaultConnectionsUpdateResponse](../../Models/Operations/VaultConnectionsUpdateResponse.md)**

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

Deletes a connection

### Example Usage

<!-- UsageSnippet language="php" operationID="vault.connectionsDelete" method="delete" path="/vault/connections/{unified_api}/{service_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->vault->connections->delete(
    serviceId: 'pipedrive',
    unifiedApi: 'crm'

);

if ($response->unexpectedErrorResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                  | Type                                                       | Required                                                   | Description                                                | Example                                                    |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `serviceId`                                                | *string*                                                   | :heavy_check_mark:                                         | Service ID of the resource to return                       | pipedrive                                                  |
| `unifiedApi`                                               | *string*                                                   | :heavy_check_mark:                                         | Unified API                                                | crm                                                        |
| `consumerId`                                               | *?string*                                                  | :heavy_minus_sign:                                         | ID of the consumer which you want to get or push data from | test-consumer                                              |
| `appId`                                                    | *?string*                                                  | :heavy_minus_sign:                                         | The ID of your Unify application                           | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX                    |

### Response

**[?Operations\VaultConnectionsDeleteResponse](../../Models/Operations/VaultConnectionsDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## imports

Import an authorized connection.


### Example Usage

<!-- UsageSnippet language="php" operationID="vault.connectionsImport" method="post" path="/vault/connections/{unified_api}/{service_id}/import" -->
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

$request = new Operations\VaultConnectionsImportRequest(
    serviceId: 'pipedrive',
    unifiedApi: 'crm',
    connectionImportData: new Components\ConnectionImportData(
        credentials: new Components\Credentials(
            refreshToken: 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.cThIIoDvwdueQB468K5xDc5633seEFoqwxjF_xSJyQQ',
            accessToken: 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c',
        ),
        settings: [
            'instance_url' => 'https://eu28.salesforce.com',
        ],
        metadata: [
            'account' => [
                'name' => 'My Company',
                'id' => 'c01458a5-7276-41ce-bc19-639906b0450a',
            ],
            'plan' => 'enterprise',
        ],
    ),
);

$response = $sdk->vault->connections->imports(
    request: $request
);

if ($response->createConnectionResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\VaultConnectionsImportRequest](../../Models/Operations/VaultConnectionsImportRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\VaultConnectionsImportResponse](../../Models/Operations/VaultConnectionsImportResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## token

Triggers exchanging persisted connection credentials for an access token and store it in Vault. Currently supported for connections with the `client_credentials` or `password` OAuth grant type.

Note:
  - Do not include any credentials in the request body. This operation does not persist changes, but only triggers the exchange of persisted connection credentials for an access token.
  - The access token will not be returned in the response. A 200 response code indicates the authorization was successful and that a valid access token was stored on the connection.
  - The access token will be used for subsequent API requests.


### Example Usage

<!-- UsageSnippet language="php" operationID="vault.connectionsToken" method="post" path="/vault/connections/{unified_api}/{service_id}/token" -->
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

$request = new Operations\VaultConnectionsTokenRequest(
    serviceId: 'pipedrive',
    unifiedApi: 'crm',
);

$response = $sdk->vault->connections->token(
    request: $request
);

if ($response->getConnectionResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\VaultConnectionsTokenRequest](../../Models/Operations/VaultConnectionsTokenRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\VaultConnectionsTokenResponse](../../Models/Operations/VaultConnectionsTokenResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |