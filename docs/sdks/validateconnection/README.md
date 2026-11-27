# Vault.ValidateConnection

## Overview

### Available Operations

* [state](#state) - Validate Connection State

## state

This endpoint checks a connection again and returns its updated state.
For OAuth2 connectors and custom connectors with an OAuth grant (except connectors used only for authentication), this operation first forces the refresh flow for an access token regardless of its expiry.
Then, for connectors that support connection validation (`validation_support: true`), it sends the connector's validation request with the stored credentials.
The validation request is not sent when the connection is disabled, does not have the settings that the request needs, or still needs OAuth authorization.
When the connector has no OAuth refresh and no connection validation, nothing is sent to the integration, and the state is computed from the stored connection.
When the integration rejects the forced token refresh with a non-recoverable error, and no other process saved a newer token in the meantime, the connection is marked as not valid, `vault.connection.token_refresh.failed` is triggered, and the operation returns an error. Its `state` becomes `invalid` only when the connector supports connection validation and no refresh-token retention is active (`credentials_expire_at` is not a future time).

The result is saved on the connection. When the connection `state` changes, `vault.connection.updated` is triggered, and `vault.connection.callable` too when the connection becomes callable. Use this operation to check an `invalid` connection again: reading the connection does not check it.

Note:
  - Do not include any credentials in the request body. The operation uses the credentials stored on the connection.
  - If a refresh token flow was performed and successful, the new access token will then be used for subsequent API requests.
  - A connection that is waiting for confirmation is returned with its stored state, without a refresh or a validation request.


### Example Usage

<!-- UsageSnippet language="php" operationID="vault.validateConnectionState" method="post" path="/vault/connections/{unified_api}/{service_id}/validate" -->
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

$request = new Operations\VaultValidateConnectionStateRequest(
    serviceId: 'pipedrive',
    unifiedApi: 'crm',
);

$response = $sdk->vault->validateConnection->state(
    request: $request
);

if ($response->validateConnectionStateResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\VaultValidateConnectionStateRequest](../../Models/Operations/VaultValidateConnectionStateRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\VaultValidateConnectionStateResponse](../../Models/Operations/VaultValidateConnectionStateResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |