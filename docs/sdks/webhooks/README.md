# Webhooks
(*webhook->webhooks*)

## Overview

### Available Operations

* [list](#list) - List webhook subscriptions
* [create](#create) - Create webhook subscription
* [get](#get) - Get webhook subscription
* [update](#update) - Update webhook subscription
* [delete](#delete) - Delete webhook subscription

## list

List all webhook subscriptions

### Example Usage

<!-- UsageSnippet language="php" operationID="webhook.webhooksAll" method="get" path="/webhook/webhooks" -->
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



$responses = $sdk->webhook->webhooks->list(
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

## create

Create a webhook subscription to receive events.

**Delivery URL Validation**: The provided `delivery_url` will be validated synchronously by sending an HTTP POST request with an HMAC signature. If validation fails (network error, timeout, non-2xx response), the webhook will still be created but with `status: "disabled"` and `disabled_reason: "delivery_url_validation_failed"`.

**Important**: Always check the `status` and `disabled_reason` fields in the response to ensure the webhook is active.


### Example Usage

<!-- UsageSnippet language="php" operationID="webhook.webhooksAdd" method="post" path="/webhook/webhooks" -->
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

$createWebhookRequest = new Components\CreateWebhookRequest(
    description: 'A description',
    unifiedApi: Components\UnifiedApiId::Crm,
    status: Components\Status::Enabled,
    deliveryUrl: 'https://example.com/my/webhook/endpoint',
    events: [
        Components\WebhookEventType::VaultConnectionCreated,
        Components\WebhookEventType::VaultConnectionUpdated,
    ],
);

$response = $sdk->webhook->webhooks->create(
    createWebhookRequest: $createWebhookRequest
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

## get

Get the webhook subscription details

### Example Usage

<!-- UsageSnippet language="php" operationID="webhook.webhooksOne" method="get" path="/webhook/webhooks/{id}" -->
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



$response = $sdk->webhook->webhooks->get(
    id: '<id>'
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

Update a webhook subscription.

**Delivery URL Validation**: When updating the `delivery_url`, it will be validated synchronously by sending an HTTP POST request with an HMAC signature. If validation fails (network error, timeout, non-2xx response), the webhook will still be updated but with `status: "disabled"` and `disabled_reason: "delivery_url_validation_failed"`. Validation only occurs when the URL is changed.

**Important**: Always check the `status` and `disabled_reason` fields in the response to ensure the webhook is active.


### Example Usage

<!-- UsageSnippet language="php" operationID="webhook.webhooksUpdate" method="patch" path="/webhook/webhooks/{id}" -->
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

$updateWebhookRequest = new Components\UpdateWebhookRequest(
    description: 'A description',
    status: Components\Status::Enabled,
    deliveryUrl: 'https://example.com/my/webhook/endpoint',
    events: [
        Components\WebhookEventType::VaultConnectionCreated,
        Components\WebhookEventType::VaultConnectionUpdated,
    ],
);

$response = $sdk->webhook->webhooks->update(
    id: '<id>',
    updateWebhookRequest: $updateWebhookRequest

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

## delete

Delete a webhook subscription

### Example Usage

<!-- UsageSnippet language="php" operationID="webhook.webhooksDelete" method="delete" path="/webhook/webhooks/{id}" -->
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



$response = $sdk->webhook->webhooks->delete(
    id: '<id>'
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