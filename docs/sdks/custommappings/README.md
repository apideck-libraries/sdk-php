# CustomMappings
(*vault->customMappings*)

## Overview

### Available Operations

* [list](#list) - List custom mappings

## list

This endpoint returns a list of custom mappings.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();



$response = $sdk->vault->customMappings->list(
    unifiedApi: 'crm',
    serviceId: 'pipedrive',
    consumerId: 'test-consumer',
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX'

);

if ($response->getCustomMappingsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                  | Type                                                       | Required                                                   | Description                                                | Example                                                    |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `unifiedApi`                                               | *string*                                                   | :heavy_check_mark:                                         | Unified API                                                | crm                                                        |
| `serviceId`                                                | *string*                                                   | :heavy_check_mark:                                         | Service ID of the resource to return                       | pipedrive                                                  |
| `consumerId`                                               | *?string*                                                  | :heavy_minus_sign:                                         | ID of the consumer which you want to get or push data from | test-consumer                                              |
| `appId`                                                    | *?string*                                                  | :heavy_minus_sign:                                         | The ID of your Unify application                           | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX                    |

### Response

**[?Operations\VaultCustomMappingsAllResponse](../../Models/Operations/VaultCustomMappingsAllResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |