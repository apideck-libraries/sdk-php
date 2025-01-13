# Webhooks
(*webhook->webhooks*)

## Overview

### Available Operations

* [create](#create) - Create webhook subscription
* [list](#list) - List webhook subscriptions
* [delete](#delete) - Delete webhook subscription
* [get](#get) - Get webhook subscription
* [update](#update) - Update webhook subscription

## create

Create a webhook subscription to receive events

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

$createWebhookRequest = new Components\CreateWebhookRequest(
    unifiedApi: Components\UnifiedApiId::Crm,
    status: Components\Status::Enabled,
    deliveryUrl: 'https://example.com/my/webhook/endpoint',
    events: [
        Components\WebhookEventType::VaultConnectionCreated,
        Components\WebhookEventType::VaultConnectionUpdated,
    ],
    description: 'A description',
);

$response = $sdk->webhook->webhooks->create(
    createWebhookRequest: $createWebhookRequest,
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX'

);

if ($response->createWebhookResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        | Example                                                                            |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `createWebhookRequest`                                                             | [Components\CreateWebhookRequest](../../Models/Components/CreateWebhookRequest.md) | :heavy_check_mark:                                                                 | N/A                                                                                |                                                                                    |
| `appId`                                                                            | *?string*                                                                          | :heavy_minus_sign:                                                                 | The ID of your Unify application                                                   | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX                                            |

### Response

**[?Operations\WebhookWebhooksAddResponse](../../Models/Operations/WebhookWebhooksAddResponse.md)**

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

List all webhook subscriptions

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



$responses = $sdk->webhook->webhooks->list(
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX',
    limit: 20,
    cursor: '<value>'

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
| `limit`                                                                                                          | *?int*                                                                                                           | :heavy_minus_sign:                                                                                               | Number of results to return. Minimum 1, Maximum 200, Default 20                                                  |                                                                                                                  |
| `cursor`                                                                                                         | *?string*                                                                                                        | :heavy_minus_sign:                                                                                               | Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |                                                                                                                  |

### Response

**[?Operations\WebhookWebhooksAllResponse](../../Models/Operations/WebhookWebhooksAllResponse.md)**

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

Delete a webhook subscription

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



$response = $sdk->webhook->webhooks->delete(
    id: '<id>',
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX'

);

if ($response->deleteWebhookResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        | Example                                                                                            |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `id`                                                                                               | *string*                                                                                           | :heavy_check_mark:                                                                                 | JWT Webhook token that represents the unifiedApi and applicationId associated to the event source. |                                                                                                    |
| `appId`                                                                                            | *?string*                                                                                          | :heavy_minus_sign:                                                                                 | The ID of your Unify application                                                                   | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX                                                            |

### Response

**[?Operations\WebhookWebhooksDeleteResponse](../../Models/Operations/WebhookWebhooksDeleteResponse.md)**

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

Get the webhook subscription details

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



$response = $sdk->webhook->webhooks->get(
    id: '<id>',
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX'

);

if ($response->getWebhookResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        | Example                                                                                            |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `id`                                                                                               | *string*                                                                                           | :heavy_check_mark:                                                                                 | JWT Webhook token that represents the unifiedApi and applicationId associated to the event source. |                                                                                                    |
| `appId`                                                                                            | *?string*                                                                                          | :heavy_minus_sign:                                                                                 | The ID of your Unify application                                                                   | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX                                                            |

### Response

**[?Operations\WebhookWebhooksOneResponse](../../Models/Operations/WebhookWebhooksOneResponse.md)**

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

Update a webhook subscription

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

$updateWebhookRequest = new Components\UpdateWebhookRequest(
    status: Components\Status::Enabled,
    deliveryUrl: 'https://example.com/my/webhook/endpoint',
    events: [
        Components\WebhookEventType::VaultConnectionCreated,
        Components\WebhookEventType::VaultConnectionUpdated,
    ],
    description: 'A description',
);

$response = $sdk->webhook->webhooks->update(
    id: '<id>',
    updateWebhookRequest: $updateWebhookRequest,
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX'

);

if ($response->updateWebhookResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        | Example                                                                                            |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `id`                                                                                               | *string*                                                                                           | :heavy_check_mark:                                                                                 | JWT Webhook token that represents the unifiedApi and applicationId associated to the event source. |                                                                                                    |
| `updateWebhookRequest`                                                                             | [Components\UpdateWebhookRequest](../../Models/Components/UpdateWebhookRequest.md)                 | :heavy_check_mark:                                                                                 | N/A                                                                                                |                                                                                                    |
| `appId`                                                                                            | *?string*                                                                                          | :heavy_minus_sign:                                                                                 | The ID of your Unify application                                                                   | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX                                                            |

### Response

**[?Operations\WebhookWebhooksUpdateResponse](../../Models/Operations/WebhookWebhooksUpdateResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |