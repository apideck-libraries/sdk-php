# Vault.ConnectionConsents

## Overview

### Available Operations

* [list](#list) - Get consent records

## list

Get all consent records for a connection

### Example Usage

<!-- UsageSnippet language="php" operationID="vault.connectionConsentsAll" method="get" path="/vault/connections/{unified_api}/{service_id}/consent" -->
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



$response = $sdk->vault->connectionConsents->list(
    serviceId: 'pipedrive',
    unifiedApi: 'crm'

);

if ($response->getConsentRecordsResponse !== null) {
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

**[?Operations\VaultConnectionConsentsAllResponse](../../Models/Operations/VaultConnectionConsentsAllResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |