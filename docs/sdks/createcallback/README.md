# Vault.CreateCallback

## Overview

### Available Operations

* [state](#state) - Create Callback State

## state

This endpoint creates a callback state that can be used to issue requests to the callback endpoint.


### Example Usage

<!-- UsageSnippet language="php" operationID="vault.createCallbackState" method="post" path="/vault/connections/{unified_api}/{service_id}/callback-state" -->
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

$request = new Operations\VaultCreateCallbackStateRequest(
    serviceId: 'pipedrive',
    unifiedApi: 'crm',
    createCallbackState: new Components\CreateCallbackState(
        redirectUri: 'https://example.com/callback',
    ),
);

$response = $sdk->vault->createCallback->state(
    request: $request
);

if ($response->createCallbackStateResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\VaultCreateCallbackStateRequest](../../Models/Operations/VaultCreateCallbackStateRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\VaultCreateCallbackStateResponse](../../Models/Operations/VaultCreateCallbackStateResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |