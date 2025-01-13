# ApiResources
(*connector->apiResources*)

## Overview

### Available Operations

* [get](#get) - Get API Resource

## get

Get API Resource

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



$response = $sdk->connector->apiResources->get(
    id: '<id>',
    resourceId: '<id>',
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX'

);

if ($response->getApiResourceResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                               | Type                                    | Required                                | Description                             | Example                                 |
| --------------------------------------- | --------------------------------------- | --------------------------------------- | --------------------------------------- | --------------------------------------- |
| `id`                                    | *string*                                | :heavy_check_mark:                      | ID of the record you are acting upon.   |                                         |
| `resourceId`                            | *string*                                | :heavy_check_mark:                      | ID of the resource you are acting upon. |                                         |
| `appId`                                 | *?string*                               | :heavy_minus_sign:                      | The ID of your Unify application        | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX |

### Response

**[?Operations\ConnectorApiResourcesOneResponse](../../Models/Operations/ConnectorApiResourcesOneResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |