# Consumers
(*vault->consumers*)

## Overview

### Available Operations

* [create](#create) - Create consumer
* [list](#list) - Get all consumers
* [get](#get) - Get consumer
* [update](#update) - Update consumer
* [delete](#delete) - Delete consumer

## create

Create a consumer

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;

$sdk = Unify\Apideck::builder()
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$consumer = new Components\ConsumerInput(
    consumerId: 'test_consumer_id',
    metadata: new Components\ConsumerMetadata(
        accountName: 'SpaceX',
        userName: 'Elon Musk',
        email: 'elon@musk.com',
        image: 'https://www.spacex.com/static/images/share.jpg',
    ),
);

$response = $sdk->vault->consumers->create(
    consumer: $consumer
);

if ($response->createConsumerResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                            | Type                                                                 | Required                                                             | Description                                                          | Example                                                              |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `consumer`                                                           | [Components\ConsumerInput](../../Models/Components/ConsumerInput.md) | :heavy_check_mark:                                                   | N/A                                                                  |                                                                      |
| `appId`                                                              | *?string*                                                            | :heavy_minus_sign:                                                   | The ID of your Unify application                                     | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX                              |

### Response

**[?Operations\VaultConsumersAddResponse](../../Models/Operations/VaultConsumersAddResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## list

This endpoint includes all application consumers, along with an aggregated count of requests made.


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;

$sdk = Unify\Apideck::builder()
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->vault->consumers->list(
    limit: 20
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      | Example                                                                                                          |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `appId`                                                                                                          | *?string*                                                                                                        | :heavy_minus_sign:                                                                                               | The ID of your Unify application                                                                                 | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX                                                                          |
| `cursor`                                                                                                         | *?string*                                                                                                        | :heavy_minus_sign:                                                                                               | Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |                                                                                                                  |
| `limit`                                                                                                          | *?int*                                                                                                           | :heavy_minus_sign:                                                                                               | Number of results to return. Minimum 1, Maximum 200, Default 20                                                  |                                                                                                                  |

### Response

**[?Operations\VaultConsumersAllResponse](../../Models/Operations/VaultConsumersAllResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## get

Consumer detail including their aggregated counts with the connections they have authorized.


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;

$sdk = Unify\Apideck::builder()
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->vault->consumers->get(
    consumerId: 'test_user_id'
);

if ($response->getConsumerResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                               | Type                                    | Required                                | Description                             | Example                                 |
| --------------------------------------- | --------------------------------------- | --------------------------------------- | --------------------------------------- | --------------------------------------- |
| `consumerId`                            | *string*                                | :heavy_check_mark:                      | ID of the consumer to return            | test_user_id                            |
| `appId`                                 | *?string*                               | :heavy_minus_sign:                      | The ID of your Unify application        | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX |

### Response

**[?Operations\VaultConsumersOneResponse](../../Models/Operations/VaultConsumersOneResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## update

Update consumer metadata such as name and email.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;

$sdk = Unify\Apideck::builder()
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$updateConsumerRequest = new Components\UpdateConsumerRequest(
    metadata: new Components\ConsumerMetadata(
        accountName: 'SpaceX',
        userName: 'Elon Musk',
        email: 'elon@musk.com',
        image: 'https://www.spacex.com/static/images/share.jpg',
    ),
);

$response = $sdk->vault->consumers->update(
    consumerId: 'test_user_id',
    updateConsumerRequest: $updateConsumerRequest

);

if ($response->updateConsumerResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          | Example                                                                              |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `consumerId`                                                                         | *string*                                                                             | :heavy_check_mark:                                                                   | ID of the consumer to return                                                         | test_user_id                                                                         |
| `updateConsumerRequest`                                                              | [Components\UpdateConsumerRequest](../../Models/Components/UpdateConsumerRequest.md) | :heavy_check_mark:                                                                   | N/A                                                                                  |                                                                                      |
| `appId`                                                                              | *?string*                                                                            | :heavy_minus_sign:                                                                   | The ID of your Unify application                                                     | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX                                              |

### Response

**[?Operations\VaultConsumersUpdateResponse](../../Models/Operations/VaultConsumersUpdateResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## delete

Delete consumer and all their connections, including credentials.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;

$sdk = Unify\Apideck::builder()
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->vault->consumers->delete(
    consumerId: 'test_user_id'
);

if ($response->deleteConsumerResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                               | Type                                    | Required                                | Description                             | Example                                 |
| --------------------------------------- | --------------------------------------- | --------------------------------------- | --------------------------------------- | --------------------------------------- |
| `consumerId`                            | *string*                                | :heavy_check_mark:                      | ID of the consumer to return            | test_user_id                            |
| `appId`                                 | *?string*                               | :heavy_minus_sign:                      | The ID of your Unify application        | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX |

### Response

**[?Operations\VaultConsumersDeleteResponse](../../Models/Operations/VaultConsumersDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |