# ConnectorDocs
(*connector->connectorDocs*)

## Overview

### Available Operations

* [get](#get) - Get Connector Doc content

## get

Get Connector Doc content

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();



$response = $sdk->connector->connectorDocs->get(
    id: '<id>',
    docId: 'application_owner+oauth_credentials',
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX'

);

if ($response->getConnectorDocResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                               | Type                                    | Required                                | Description                             | Example                                 |
| --------------------------------------- | --------------------------------------- | --------------------------------------- | --------------------------------------- | --------------------------------------- |
| `id`                                    | *string*                                | :heavy_check_mark:                      | ID of the record you are acting upon.   |                                         |
| `docId`                                 | *string*                                | :heavy_check_mark:                      | ID of the Doc                           | application_owner+oauth_credentials     |
| `appId`                                 | *?string*                               | :heavy_minus_sign:                      | The ID of your Unify application        | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX |

### Response

**[?Operations\ConnectorConnectorDocsOneResponse](../../Models/Operations/ConnectorConnectorDocsOneResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |