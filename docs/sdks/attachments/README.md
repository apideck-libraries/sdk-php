# Attachments
(*accounting->attachments*)

## Overview

### Available Operations

* [list](#list) - List Attachments
* [delete](#delete) - Delete Attachment
* [download](#download) - Download Attachment
* [get](#get) - Get Attachment

## list

List Attachments

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AccountingAttachmentsAllRequest(
    referenceType: Components\AttachmentReferenceType::Invoice,
    referenceId: '12345',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$responses = $sdk->accounting->attachments->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingAttachmentsAllRequest](../../Models/Operations/AccountingAttachmentsAllRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingAttachmentsAllResponse](../../Models/Operations/AccountingAttachmentsAllResponse.md)**

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

Delete Attachment

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AccountingAttachmentsDeleteRequest(
    referenceType: Components\AttachmentReferenceType::Invoice,
    referenceId: '12345',
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->accounting->attachments->delete(
    request: $request
);

if ($response->deleteAttachmentResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\AccountingAttachmentsDeleteRequest](../../Models/Operations/AccountingAttachmentsDeleteRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AccountingAttachmentsDeleteResponse](../../Models/Operations/AccountingAttachmentsDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## download

Download Attachment

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AccountingAttachmentsDownloadRequest(
    referenceType: Components\AttachmentReferenceType::Invoice,
    referenceId: '12345',
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->attachments->download(
    request: $request
);

if ($response->getAttachmentDownloadResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\AccountingAttachmentsDownloadRequest](../../Models/Operations/AccountingAttachmentsDownloadRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\AccountingAttachmentsDownloadResponse](../../Models/Operations/AccountingAttachmentsDownloadResponse.md)**

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

Get Attachment

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AccountingAttachmentsOneRequest(
    referenceType: Components\AttachmentReferenceType::Invoice,
    referenceId: '12345',
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->accounting->attachments->get(
    request: $request
);

if ($response->getAttachmentResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AccountingAttachmentsOneRequest](../../Models/Operations/AccountingAttachmentsOneRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AccountingAttachmentsOneResponse](../../Models/Operations/AccountingAttachmentsOneResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |