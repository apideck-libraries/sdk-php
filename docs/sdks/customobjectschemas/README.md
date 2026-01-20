# Crm.CustomObjectSchemas

## Overview

### Available Operations

* [list](#list) - List custom object schemas
* [create](#create) - Create custom object schema
* [get](#get) - Get custom object schema
* [update](#update) - Update custom object schema
* [delete](#delete) - Delete custom object schema

## list

List custom object schemas

### Example Usage

<!-- UsageSnippet language="php" operationID="crm.customObjectSchemasAll" method="get" path="/crm/custom-object-schemas" -->
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

$request = new Operations\CrmCustomObjectSchemasAllRequest(
    serviceId: 'salesforce',
    passThrough: [
        'search' => 'San Francisco',
    ],
);

$responses = $sdk->crm->customObjectSchemas->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CrmCustomObjectSchemasAllRequest](../../Models/Operations/CrmCustomObjectSchemasAllRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\CrmCustomObjectSchemasAllResponse](../../Models/Operations/CrmCustomObjectSchemasAllResponse.md)**

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

Create custom object schema

### Example Usage

<!-- UsageSnippet language="php" operationID="crm.customObjectSchemasAdd" method="post" path="/crm/custom-object-schemas" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\CrmCustomObjectSchemasAddRequest(
    serviceId: 'salesforce',
    customObjectSchema: new Components\CustomObjectSchemaInput(
        name: 'project',
        description: 'This schema defines a project custom object',
        fields: [
            new Components\Fields(
                id: 'field_123',
                name: 'project_name',
                description: 'Name of the project',
                type: Components\CustomObjectSchemaType::String,
                required: true,
                options: [
                    new Components\CustomObjectSchemaOptions(
                        value: 'option1',
                        label: 'Option 1',
                    ),
                ],
                defaultValue: 'New Project',
            ),
        ],
        visible: true,
        active: true,
        passThrough: [
            new Components\PassThroughBody(
                serviceId: '<id>',
                extendPaths: [
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                ],
            ),
            new Components\PassThroughBody(
                serviceId: '<id>',
                extendPaths: [
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                ],
            ),
        ],
    ),
);

$response = $sdk->crm->customObjectSchemas->create(
    request: $request
);

if ($response->createCustomObjectSchemaResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CrmCustomObjectSchemasAddRequest](../../Models/Operations/CrmCustomObjectSchemasAddRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\CrmCustomObjectSchemasAddResponse](../../Models/Operations/CrmCustomObjectSchemasAddResponse.md)**

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

Get custom object schema

### Example Usage

<!-- UsageSnippet language="php" operationID="crm.customObjectSchemasOne" method="get" path="/crm/custom-object-schemas/{id}" -->
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

$request = new Operations\CrmCustomObjectSchemasOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->crm->customObjectSchemas->get(
    request: $request
);

if ($response->getCustomObjectSchemaResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CrmCustomObjectSchemasOneRequest](../../Models/Operations/CrmCustomObjectSchemasOneRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\CrmCustomObjectSchemasOneResponse](../../Models/Operations/CrmCustomObjectSchemasOneResponse.md)**

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

Update custom object schema

### Example Usage

<!-- UsageSnippet language="php" operationID="crm.customObjectSchemasUpdate" method="patch" path="/crm/custom-object-schemas/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\CrmCustomObjectSchemasUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    customObjectSchema: new Components\CustomObjectSchemaInput(
        name: 'project',
        description: 'This schema defines a project custom object',
        fields: [
            new Components\Fields(
                id: 'field_123',
                name: 'project_name',
                description: 'Name of the project',
                type: Components\CustomObjectSchemaType::String,
                required: true,
                options: [
                    new Components\CustomObjectSchemaOptions(
                        value: 'option1',
                        label: 'Option 1',
                    ),
                    new Components\CustomObjectSchemaOptions(
                        value: 'option1',
                        label: 'Option 1',
                    ),
                ],
                defaultValue: 'New Project',
            ),
            new Components\Fields(
                id: 'field_123',
                name: 'project_name',
                description: 'Name of the project',
                type: Components\CustomObjectSchemaType::String,
                required: true,
                options: [
                    new Components\CustomObjectSchemaOptions(
                        value: 'option1',
                        label: 'Option 1',
                    ),
                    new Components\CustomObjectSchemaOptions(
                        value: 'option1',
                        label: 'Option 1',
                    ),
                ],
                defaultValue: 'New Project',
            ),
            new Components\Fields(
                id: 'field_123',
                name: 'project_name',
                description: 'Name of the project',
                type: Components\CustomObjectSchemaType::String,
                required: true,
                options: [
                    new Components\CustomObjectSchemaOptions(
                        value: 'option1',
                        label: 'Option 1',
                    ),
                    new Components\CustomObjectSchemaOptions(
                        value: 'option1',
                        label: 'Option 1',
                    ),
                ],
                defaultValue: 'New Project',
            ),
        ],
        visible: true,
        active: true,
        passThrough: [
            new Components\PassThroughBody(
                serviceId: '<id>',
                extendPaths: [
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                ],
            ),
            new Components\PassThroughBody(
                serviceId: '<id>',
                extendPaths: [
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                ],
            ),
            new Components\PassThroughBody(
                serviceId: '<id>',
                extendPaths: [
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                    new Components\ExtendPaths(
                        path: '$.nested.property',
                        value: [
                            'TaxClassificationRef' => [
                                'value' => 'EUC-99990201-V1-00020000',
                            ],
                        ],
                    ),
                ],
            ),
        ],
    ),
);

$response = $sdk->crm->customObjectSchemas->update(
    request: $request
);

if ($response->updateCustomObjectSchemaResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\CrmCustomObjectSchemasUpdateRequest](../../Models/Operations/CrmCustomObjectSchemasUpdateRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\CrmCustomObjectSchemasUpdateResponse](../../Models/Operations/CrmCustomObjectSchemasUpdateResponse.md)**

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

Delete custom object schema

### Example Usage

<!-- UsageSnippet language="php" operationID="crm.customObjectSchemasDelete" method="delete" path="/crm/custom-object-schemas/{id}" -->
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

$request = new Operations\CrmCustomObjectSchemasDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->crm->customObjectSchemas->delete(
    request: $request
);

if ($response->deleteCustomObjectSchemaResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\CrmCustomObjectSchemasDeleteRequest](../../Models/Operations/CrmCustomObjectSchemasDeleteRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\CrmCustomObjectSchemasDeleteResponse](../../Models/Operations/CrmCustomObjectSchemasDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |