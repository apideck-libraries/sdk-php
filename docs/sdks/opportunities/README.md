# Opportunities
(*crm->opportunities*)

## Overview

### Available Operations

* [list](#list) - List opportunities
* [create](#create) - Create opportunity
* [get](#get) - Get opportunity
* [update](#update) - Update opportunity
* [delete](#delete) - Delete opportunity

## list

List opportunities

### Example Usage

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

$request = new Operations\CrmOpportunitiesAllRequest(
    serviceId: 'salesforce',
    filter: new Components\OpportunitiesFilter(
        status: 'Completed',
        monetaryAmount: 75000,
    ),
    sort: new Components\OpportunitiesSort(
        by: Components\OpportunitiesSortBy::CreatedAt,
        direction: Components\SortDirection::Desc,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->crm->opportunities->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CrmOpportunitiesAllRequest](../../Models/Operations/CrmOpportunitiesAllRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CrmOpportunitiesAllResponse](../../Models/Operations/CrmOpportunitiesAllResponse.md)**

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

Create opportunity

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils;
use Brick\DateTime\LocalDate;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\CrmOpportunitiesAddRequest(
    serviceId: 'salesforce',
    opportunity: new Components\OpportunityInput(
        title: 'New Rocket',
        primaryContactId: '12345',
        description: 'Opportunities are created for People and Companies that are interested in buying your products or services. Create Opportunities for People and Companies to move them through one of your Pipelines.',
        type: 'Existing Customer - Upgrade',
        monetaryAmount: 75000,
        currency: Components\Currency::Usd,
        winProbability: 40,
        closeDate: LocalDate::parse('2020-10-30'),
        lossReasonId: '12345',
        lossReason: 'No budget',
        wonReasonId: '12345',
        wonReason: 'Best pitch',
        pipelineId: '12345',
        pipelineStageId: '12345',
        sourceId: '12345',
        leadId: '12345',
        leadSource: 'Website',
        contactId: '12345',
        contactIds: [
            '12345',
        ],
        companyId: '12345',
        companyName: 'Copper',
        ownerId: '12345',
        priority: 'None',
        status: 'Open',
        statusId: '12345',
        tags: [
            'New',
        ],
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        stageLastChangedAt: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
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
                ],
            ),
        ],
    ),
);

$response = $sdk->crm->opportunities->create(
    request: $request
);

if ($response->createOpportunityResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CrmOpportunitiesAddRequest](../../Models/Operations/CrmOpportunitiesAddRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CrmOpportunitiesAddResponse](../../Models/Operations/CrmOpportunitiesAddResponse.md)**

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

Get opportunity

### Example Usage

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

$request = new Operations\CrmOpportunitiesOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->crm->opportunities->get(
    request: $request
);

if ($response->getOpportunityResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CrmOpportunitiesOneRequest](../../Models/Operations/CrmOpportunitiesOneRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CrmOpportunitiesOneResponse](../../Models/Operations/CrmOpportunitiesOneResponse.md)**

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

Update opportunity

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils;
use Brick\DateTime\LocalDate;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\CrmOpportunitiesUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    opportunity: new Components\OpportunityInput(
        title: 'New Rocket',
        primaryContactId: '12345',
        description: 'Opportunities are created for People and Companies that are interested in buying your products or services. Create Opportunities for People and Companies to move them through one of your Pipelines.',
        type: 'Existing Customer - Upgrade',
        monetaryAmount: 75000,
        currency: Components\Currency::Usd,
        winProbability: 40,
        closeDate: LocalDate::parse('2020-10-30'),
        lossReasonId: '12345',
        lossReason: 'No budget',
        wonReasonId: '12345',
        wonReason: 'Best pitch',
        pipelineId: '12345',
        pipelineStageId: '12345',
        sourceId: '12345',
        leadId: '12345',
        leadSource: 'Website',
        contactId: '12345',
        contactIds: [
            '12345',
        ],
        companyId: '12345',
        companyName: 'Copper',
        ownerId: '12345',
        priority: 'None',
        status: 'Open',
        statusId: '12345',
        tags: [
            'New',
        ],
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        stageLastChangedAt: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
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
        ],
    ),
);

$response = $sdk->crm->opportunities->update(
    request: $request
);

if ($response->updateOpportunityResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CrmOpportunitiesUpdateRequest](../../Models/Operations/CrmOpportunitiesUpdateRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CrmOpportunitiesUpdateResponse](../../Models/Operations/CrmOpportunitiesUpdateResponse.md)**

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

Delete opportunity

### Example Usage

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

$request = new Operations\CrmOpportunitiesDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->crm->opportunities->delete(
    request: $request
);

if ($response->deleteOpportunityResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CrmOpportunitiesDeleteRequest](../../Models/Operations/CrmOpportunitiesDeleteRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CrmOpportunitiesDeleteResponse](../../Models/Operations/CrmOpportunitiesDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |