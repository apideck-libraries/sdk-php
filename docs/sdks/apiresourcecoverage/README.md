# ApiResourceCoverage
(*connector->apiResourceCoverage*)

## Overview

### Available Operations

* [get](#get) - Get API Resource Coverage

## get

Get API Resource Coverage

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();



$response = $sdk->connector->apiResourceCoverage->get(
    id: '<id>',
    resourceId: '<id>',
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX'

);

if ($response->getApiResourceCoverageResponse !== null) {
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

**[?Operations\ConnectorApiResourceCoverageOneResponse](../../Models/Operations/ConnectorApiResourceCoverageOneResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |