# ValidateConnection
(*vault->validateConnection*)

## Overview

### Available Operations

* [state](#state) - Validate Connection State

## state

This endpoint validates the current state of a given connection. This will perform different checks based on the connection auth type. For basic and apiKey auth types, the presence of required fields is checked.
For connectors that implement OAuth2, this operation forces the refresh flow for an access token regardless of its expiry.

Note:
  - Do not include any credentials in the request body. This operation does not persist changes, but only triggers the validation of connection state.
  - If a refresh token flow was performed and successful, the new access token will then be used for subsequent API requests.


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