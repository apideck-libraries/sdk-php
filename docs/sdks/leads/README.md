# Leads
(*crm->leads*)

## Overview

### Available Operations

* [create](#create) - Create lead
* [list](#list) - List leads
* [delete](#delete) - Delete lead
* [get](#get) - Get lead
* [update](#update) - Update lead

## create

Create lead

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\CrmLeadsAddRequest(
    lead: new Components\LeadInput(
        name: 'Elon Musk',
        companyName: 'Spacex',
        websites: [
            new Components\Website(
                url: 'http://example.com',
                id: '12345',
                type: Components\WebsiteType::Primary,
            ),
        ],
        addresses: [
            new Components\Address(
                id: '123',
                type: Components\Type::Primary,
                string: '25 Spring Street, Blackburn, VIC 3130',
                name: 'HQ US',
                line1: 'Main street',
                line2: 'apt #',
                line3: 'Suite #',
                line4: 'delivery instructions',
                streetNumber: '25',
                city: 'San Francisco',
                state: 'CA',
                postalCode: '94104',
                country: 'US',
                latitude: '40.759211',
                longitude: '-73.984638',
                county: 'Santa Clara',
                contactName: 'Elon Musk',
                salutation: 'Mr',
                phoneNumber: '111-111-1111',
                fax: '122-111-1111',
                email: 'elon@musk.com',
                website: 'https://elonmusk.com',
                notes: 'Address notes or delivery instructions.',
                rowVersion: '1-12345',
            ),
        ],
        socialLinks: [
            new Components\SocialLink(
                url: 'https://www.twitter.com/apideck',
                id: '12345',
                type: 'twitter',
            ),
        ],
        phoneNumbers: [
            new Components\PhoneNumber(
                number: '111-111-1111',
                id: '12345',
                countryCode: '1',
                areaCode: '323',
                extension: '105',
                type: Components\PhoneNumberType::Primary,
            ),
        ],
        emails: [
            new Components\Email(
                email: 'elon@musk.com',
                id: '123',
                type: Components\EmailType::Primary,
            ),
        ],
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: true,
            ),
        ],
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
        ],
        ownerId: '54321',
        ownerName: 'John Doe',
        companyId: '2',
        leadId: '2',
        leadSource: 'Cold Call',
        firstName: 'Elon',
        lastName: 'Musk',
        description: 'A thinker',
        prefix: 'Sir',
        title: 'CEO',
        language: 'EN',
        status: 'New',
        monetaryAmount: 75000,
        currency: Components\Currency::Usd,
        fax: '+12129876543',
        tags: [
            'New',
        ],
    ),
    consumerId: 'test-consumer',
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX',
    serviceId: 'salesforce',
);

$response = $sdk->crm->leads->create(
    request: $request
);

if ($response->createLeadResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\CrmLeadsAddRequest](../../Models/Operations/CrmLeadsAddRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\CrmLeadsAddResponse](../../Models/Operations/CrmLeadsAddResponse.md)**

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

List leads

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\CrmLeadsAllRequest(
    consumerId: 'test-consumer',
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX',
    serviceId: 'salesforce',
    filter: new Components\LeadsFilter(
        firstName: 'Elon',
        lastName: 'Musk',
        email: 'elon@tesla.com',
        phoneNumber: '1234567890',
    ),
    sort: new Components\LeadsSort(
        by: Components\LeadsSortBy::CreatedAt,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->crm->leads->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\CrmLeadsAllRequest](../../Models/Operations/CrmLeadsAllRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\CrmLeadsAllResponse](../../Models/Operations/CrmLeadsAllResponse.md)**

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

Delete lead

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\CrmLeadsDeleteRequest(
    id: '<id>',
    consumerId: 'test-consumer',
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX',
    serviceId: 'salesforce',
);

$response = $sdk->crm->leads->delete(
    request: $request
);

if ($response->deleteLeadResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CrmLeadsDeleteRequest](../../Models/Operations/CrmLeadsDeleteRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CrmLeadsDeleteResponse](../../Models/Operations/CrmLeadsDeleteResponse.md)**

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

Get lead

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\CrmLeadsOneRequest(
    id: '<id>',
    consumerId: 'test-consumer',
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->crm->leads->get(
    request: $request
);

if ($response->getLeadResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\CrmLeadsOneRequest](../../Models/Operations/CrmLeadsOneRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\CrmLeadsOneResponse](../../Models/Operations/CrmLeadsOneResponse.md)**

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

Update lead

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

$request = new Operations\CrmLeadsUpdateRequest(
    id: '<id>',
    lead: new Components\LeadInput(
        name: 'Elon Musk',
        companyName: 'Spacex',
        websites: [
            new Components\Website(
                url: 'http://example.com',
                id: '12345',
                type: Components\WebsiteType::Primary,
            ),
        ],
        addresses: [
            new Components\Address(
                id: '123',
                type: Components\Type::Primary,
                string: '25 Spring Street, Blackburn, VIC 3130',
                name: 'HQ US',
                line1: 'Main street',
                line2: 'apt #',
                line3: 'Suite #',
                line4: 'delivery instructions',
                streetNumber: '25',
                city: 'San Francisco',
                state: 'CA',
                postalCode: '94104',
                country: 'US',
                latitude: '40.759211',
                longitude: '-73.984638',
                county: 'Santa Clara',
                contactName: 'Elon Musk',
                salutation: 'Mr',
                phoneNumber: '111-111-1111',
                fax: '122-111-1111',
                email: 'elon@musk.com',
                website: 'https://elonmusk.com',
                notes: 'Address notes or delivery instructions.',
                rowVersion: '1-12345',
            ),
        ],
        socialLinks: [
            new Components\SocialLink(
                url: 'https://www.twitter.com/apideck',
                id: '12345',
                type: 'twitter',
            ),
        ],
        phoneNumbers: [
            new Components\PhoneNumber(
                number: '111-111-1111',
                id: '12345',
                countryCode: '1',
                areaCode: '323',
                extension: '105',
                type: Components\PhoneNumberType::Primary,
            ),
        ],
        emails: [
            new Components\Email(
                email: 'elon@musk.com',
                id: '123',
                type: Components\EmailType::Primary,
            ),
        ],
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: [
                    new Components\Six(),
                ],
            ),
        ],
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
        ],
        ownerId: '54321',
        ownerName: 'John Doe',
        companyId: '2',
        leadId: '2',
        leadSource: 'Cold Call',
        firstName: 'Elon',
        lastName: 'Musk',
        description: 'A thinker',
        prefix: 'Sir',
        title: 'CEO',
        language: 'EN',
        status: 'New',
        monetaryAmount: 75000,
        currency: Components\Currency::Usd,
        fax: '+12129876543',
        tags: [
            'New',
        ],
    ),
    consumerId: 'test-consumer',
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX',
    serviceId: 'salesforce',
);

$response = $sdk->crm->leads->update(
    request: $request
);

if ($response->updateLeadResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CrmLeadsUpdateRequest](../../Models/Operations/CrmLeadsUpdateRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CrmLeadsUpdateResponse](../../Models/Operations/CrmLeadsUpdateResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |