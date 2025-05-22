# Contacts
(*crm->contacts*)

## Overview

### Available Operations

* [list](#list) - List contacts
* [create](#create) - Create contact
* [get](#get) - Get contact
* [update](#update) - Update contact
* [delete](#delete) - Delete contact

## list

List contacts

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

$request = new Operations\CrmContactsAllRequest(
    serviceId: 'salesforce',
    filter: new Components\ContactsFilter(
        firstName: 'Elon',
        lastName: 'Musk',
        email: 'elon@tesla.com',
        companyId: '12345',
        ownerId: '12345',
    ),
    sort: new Components\ContactsSort(
        by: Components\ContactsSortBy::CreatedAt,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->crm->contacts->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CrmContactsAllRequest](../../Models/Operations/CrmContactsAllRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CrmContactsAllResponse](../../Models/Operations/CrmContactsAllResponse.md)**

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

Create contact

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

$request = new Operations\CrmContactsAddRequest(
    serviceId: 'salesforce',
    contact: new Components\ContactInput(
        name: 'Elon Musk',
        ownerId: '54321',
        type: Components\ContactType::Personal,
        companyId: '23456',
        companyName: '23456',
        leadId: '34567',
        firstName: 'Elon',
        middleName: 'D.',
        lastName: 'Musk',
        prefix: 'Mr.',
        suffix: 'PhD',
        title: 'CEO',
        department: 'Engineering',
        language: 'EN',
        gender: Components\ContactGender::Female,
        birthday: '2000-08-12',
        photoUrl: 'https://unavatar.io/elon-musk',
        leadSource: 'Cold Call',
        fax: '+12129876543',
        description: 'Internal champion',
        currentBalance: 10.5,
        status: 'open',
        active: true,
        websites: [
            new Components\Website(
                id: '12345',
                url: 'http://example.com',
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
                id: '12345',
                url: 'https://www.twitter.com/apideck',
                type: 'twitter',
            ),
        ],
        phoneNumbers: [
            new Components\PhoneNumber(
                id: '12345',
                countryCode: '1',
                areaCode: '323',
                number: '111-111-1111',
                extension: '105',
                type: Components\PhoneNumberType::Primary,
            ),
        ],
        emails: [
            new Components\Email(
                id: '123',
                email: 'elon@musk.com',
                type: Components\EmailType::Primary,
            ),
        ],
        emailDomain: 'gmail.com',
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        tags: [
            'New',
        ],
        opportunityIds: [
            '12345',
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
    ),
);

$response = $sdk->crm->contacts->create(
    request: $request
);

if ($response->createContactResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CrmContactsAddRequest](../../Models/Operations/CrmContactsAddRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CrmContactsAddResponse](../../Models/Operations/CrmContactsAddResponse.md)**

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

Get contact

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

$request = new Operations\CrmContactsOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
    filter: new Components\ContactsFilter(
        firstName: 'Elon',
        lastName: 'Musk',
        email: 'elon@tesla.com',
        companyId: '12345',
        ownerId: '12345',
    ),
);

$response = $sdk->crm->contacts->get(
    request: $request
);

if ($response->getContactResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CrmContactsOneRequest](../../Models/Operations/CrmContactsOneRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CrmContactsOneResponse](../../Models/Operations/CrmContactsOneResponse.md)**

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

Update contact

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

$request = new Operations\CrmContactsUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    contact: new Components\ContactInput(
        name: 'Elon Musk',
        ownerId: '54321',
        type: Components\ContactType::Personal,
        companyId: '23456',
        companyName: '23456',
        leadId: '34567',
        firstName: 'Elon',
        middleName: 'D.',
        lastName: 'Musk',
        prefix: 'Mr.',
        suffix: 'PhD',
        title: 'CEO',
        department: 'Engineering',
        language: 'EN',
        gender: Components\ContactGender::Female,
        birthday: '2000-08-12',
        photoUrl: 'https://unavatar.io/elon-musk',
        leadSource: 'Cold Call',
        fax: '+12129876543',
        description: 'Internal champion',
        currentBalance: 10.5,
        status: 'open',
        active: true,
        websites: [
            new Components\Website(
                id: '12345',
                url: 'http://example.com',
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
                id: '12345',
                url: 'https://www.twitter.com/apideck',
                type: 'twitter',
            ),
        ],
        phoneNumbers: [
            new Components\PhoneNumber(
                id: '12345',
                countryCode: '1',
                areaCode: '323',
                number: '111-111-1111',
                extension: '105',
                type: Components\PhoneNumberType::Primary,
            ),
        ],
        emails: [
            new Components\Email(
                id: '123',
                email: 'elon@musk.com',
                type: Components\EmailType::Primary,
            ),
        ],
        emailDomain: 'gmail.com',
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        tags: [
            'New',
        ],
        opportunityIds: [
            '12345',
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
    ),
);

$response = $sdk->crm->contacts->update(
    request: $request
);

if ($response->updateContactResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CrmContactsUpdateRequest](../../Models/Operations/CrmContactsUpdateRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CrmContactsUpdateResponse](../../Models/Operations/CrmContactsUpdateResponse.md)**

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

Delete contact

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

$request = new Operations\CrmContactsDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->crm->contacts->delete(
    request: $request
);

if ($response->deleteContactResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CrmContactsDeleteRequest](../../Models/Operations/CrmContactsDeleteRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CrmContactsDeleteResponse](../../Models/Operations/CrmContactsDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |