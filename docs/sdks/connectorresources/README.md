# ConnectorResources
(*connector->connectorResources*)

## Overview

### Available Operations

* [get](#get) - Get Connector Resource

## get

Get Connector Resource

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();



$response = $sdk->connector->connectorResources->get(
    id: '<id>',
    resourceId: '<id>',
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX',
    unifiedApi: Components\UnifiedApiId::Crm

);

if ($response->getConnectorResourceResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             | Example                                                                                                 |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                    | *string*                                                                                                | :heavy_check_mark:                                                                                      | ID of the record you are acting upon.                                                                   |                                                                                                         |
| `resourceId`                                                                                            | *string*                                                                                                | :heavy_check_mark:                                                                                      | ID of the resource you are acting upon.                                                                 |                                                                                                         |
| `appId`                                                                                                 | *?string*                                                                                               | :heavy_minus_sign:                                                                                      | The ID of your Unify application                                                                        | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX                                                                 |
| `unifiedApi`                                                                                            | [?Components\UnifiedApiId](../../Models/Components/UnifiedApiId.md)                                     | :heavy_minus_sign:                                                                                      | Specify unified API for the connector resource. This is useful when a resource appears in multiple APIs | crm                                                                                                     |

### Response

**[?Operations\ConnectorConnectorResourcesOneResponse](../../Models/Operations/ConnectorConnectorResourcesOneResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |