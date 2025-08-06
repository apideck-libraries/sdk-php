# ConnectionCustomMappings
(*vault->connectionCustomMappings*)

## Overview

### Available Operations

* [list](#list) - List connection custom mappings

## list

This endpoint returns a list of custom mappings for a connection.

### Example Usage

<!-- UsageSnippet language="php" operationID="vault.connectionCustomMappingsAll" method="get" path="/vault/connections/{unified_api}/{service_id}/{resource}/custom-mappings" -->
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

$request = new Operations\VaultConnectionCustomMappingsAllRequest(
    unifiedApi: 'crm',
    serviceId: 'pipedrive',
    resource: 'leads',
    resourceId: '1234',
);

$response = $sdk->vault->connectionCustomMappings->list(
    request: $request
);

if ($response->getCustomMappingsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [Operations\VaultConnectionCustomMappingsAllRequest](../../Models/Operations/VaultConnectionCustomMappingsAllRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |

### Response

**[?Operations\VaultConnectionCustomMappingsAllResponse](../../Models/Operations/VaultConnectionCustomMappingsAllResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |