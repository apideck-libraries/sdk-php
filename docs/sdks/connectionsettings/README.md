# ConnectionSettings
(*vault->connectionSettings*)

## Overview

### Available Operations

* [list](#list) - Get resource settings
* [update](#update) - Update settings

## list

This endpoint returns custom settings and their defaults required by connection for a given resource.


### Example Usage

<!-- UsageSnippet language="php" operationID="vault.connectionSettingsAll" method="get" path="/vault/connections/{unified_api}/{service_id}/{resource}/config" -->
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

$request = new Operations\VaultConnectionSettingsAllRequest(
    unifiedApi: 'crm',
    serviceId: 'pipedrive',
    resource: 'leads',
);

$response = $sdk->vault->connectionSettings->list(
    request: $request
);

if ($response->getConnectionResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\VaultConnectionSettingsAllRequest](../../Models/Operations/VaultConnectionSettingsAllRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\VaultConnectionSettingsAllResponse](../../Models/Operations/VaultConnectionSettingsAllResponse.md)**

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

Update default values for a connection's resource settings

### Example Usage

<!-- UsageSnippet language="php" operationID="vault.connectionSettingsUpdate" method="patch" path="/vault/connections/{unified_api}/{service_id}/{resource}/config" -->
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

$request = new Operations\VaultConnectionSettingsUpdateRequest(
    serviceId: 'pipedrive',
    unifiedApi: 'crm',
    resource: 'leads',
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
        ],
    ),
);

$response = $sdk->vault->connectionSettings->update(
    request: $request
);

if ($response->updateConnectionResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\VaultConnectionSettingsUpdateRequest](../../Models/Operations/VaultConnectionSettingsUpdateRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\VaultConnectionSettingsUpdateResponse](../../Models/Operations/VaultConnectionSettingsUpdateResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |