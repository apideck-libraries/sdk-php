# Proxy

## Overview

### Available Operations

* [get](#get) - GET
* [options](#options) - OPTIONS
* [post](#post) - POST
* [put](#put) - PUT
* [patch](#patch) - PATCH
* [delete](#delete) - DELETE

## get

Proxies a downstream GET request to a service and injects the necessary credentials into a request stored in Vault. This allows you to have an additional security layer and logging without needing to rely on Unify for normalization.
**Note**: Vault will proxy all data to the downstream URL and method/verb in the headers.


### Example Usage

<!-- UsageSnippet language="php" operationID="proxy.getProxy" method="get" path="/proxy" -->
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

$request = new Operations\ProxyGetProxyRequest(
    serviceId: 'close',
    unifiedApi: 'hris',
    downstreamUrl: 'https://api.close.com/api/v1/lead',
    downstreamAuthorization: 'Bearer <token>',
);

$response = $sdk->proxy->get(
    request: $request
);

if ($response->responseJson !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ProxyGetProxyRequest](../../Models/Operations/ProxyGetProxyRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ProxyGetProxyResponse](../../Models/Operations/ProxyGetProxyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\Unauthorized | 401                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## options

Proxies a downstream OPTION request to a service and injects the necessary credentials into a request stored in Vault. This allows you to have an additional security layer and logging without needing to rely on Unify for normalization.
**Note**: Vault will proxy all data to the downstream URL and method/verb in the headers.


### Example Usage

<!-- UsageSnippet language="php" operationID="proxy.optionsProxy" method="options" path="/proxy" -->
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

$request = new Operations\ProxyOptionsProxyRequest(
    serviceId: 'close',
    unifiedApi: 'hris',
    downstreamUrl: 'https://api.close.com/api/v1/lead',
    downstreamAuthorization: 'Bearer <token>',
);

$response = $sdk->proxy->options(
    request: $request
);

if ($response->responseJson !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ProxyOptionsProxyRequest](../../Models/Operations/ProxyOptionsProxyRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ProxyOptionsProxyResponse](../../Models/Operations/ProxyOptionsProxyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\Unauthorized | 401                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## post

Proxies a downstream POST request to a service and injects the necessary credentials into a request stored in Vault. This allows you to have an additional security layer and logging without needing to rely on Unify for normalization.
**Note**: Vault will proxy all data to the downstream URL and method/verb in the headers.


### Example Usage

<!-- UsageSnippet language="php" operationID="proxy.postProxy" method="post" path="/proxy" -->
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

$request = new Operations\ProxyPostProxyRequest(
    serviceId: 'close',
    unifiedApi: 'hris',
    downstreamUrl: 'https://api.close.com/api/v1/lead',
    downstreamAuthorization: 'Bearer <token>',
);

$response = $sdk->proxy->post(
    request: $request
);

if ($response->responseJson !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ProxyPostProxyRequest](../../Models/Operations/ProxyPostProxyRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ProxyPostProxyResponse](../../Models/Operations/ProxyPostProxyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\Unauthorized | 401                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## put

Proxies a downstream PUT request to a service and injects the necessary credentials into a request stored in Vault. This allows you to have an additional security layer and logging without needing to rely on Unify for normalization.
**Note**: Vault will proxy all data to the downstream URL and method/verb in the headers.


### Example Usage

<!-- UsageSnippet language="php" operationID="proxy.putProxy" method="put" path="/proxy" -->
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

$request = new Operations\ProxyPutProxyRequest(
    serviceId: 'close',
    unifiedApi: 'hris',
    downstreamUrl: 'https://api.close.com/api/v1/lead',
    downstreamAuthorization: 'Bearer <token>',
);

$response = $sdk->proxy->put(
    request: $request
);

if ($response->responseJson !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ProxyPutProxyRequest](../../Models/Operations/ProxyPutProxyRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ProxyPutProxyResponse](../../Models/Operations/ProxyPutProxyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\Unauthorized | 401                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## patch

Proxies a downstream PATCH request to a service and injects the necessary credentials into a request stored in Vault. This allows you to have an additional security layer and logging without needing to rely on Unify for normalization.
**Note**: Vault will proxy all data to the downstream URL and method/verb in the headers.


### Example Usage

<!-- UsageSnippet language="php" operationID="proxy.patchProxy" method="patch" path="/proxy" -->
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

$request = new Operations\ProxyPatchProxyRequest(
    serviceId: 'close',
    unifiedApi: 'hris',
    downstreamUrl: 'https://api.close.com/api/v1/lead',
    downstreamAuthorization: 'Bearer <token>',
);

$response = $sdk->proxy->patch(
    request: $request
);

if ($response->responseJson !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ProxyPatchProxyRequest](../../Models/Operations/ProxyPatchProxyRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ProxyPatchProxyResponse](../../Models/Operations/ProxyPatchProxyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\Unauthorized | 401                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## delete

Proxies a downstream DELETE request to a service and injects the necessary credentials into a request stored in Vault. This allows you to have an additional security layer and logging without needing to rely on Unify for normalization.
**Note**: Vault will proxy all data to the downstream URL and method/verb in the headers.


### Example Usage

<!-- UsageSnippet language="php" operationID="proxy.deleteProxy" method="delete" path="/proxy" -->
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

$request = new Operations\ProxyDeleteProxyRequest(
    serviceId: 'close',
    unifiedApi: 'hris',
    downstreamUrl: 'https://api.close.com/api/v1/lead',
    downstreamAuthorization: 'Bearer <token>',
);

$response = $sdk->proxy->delete(
    request: $request
);

if ($response->responseJson !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ProxyDeleteProxyRequest](../../Models/Operations/ProxyDeleteProxyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ProxyDeleteProxyResponse](../../Models/Operations/ProxyDeleteProxyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\Unauthorized | 401                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |