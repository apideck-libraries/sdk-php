# Applicants
(*ats->applicants*)

## Overview

### Available Operations

* [create](#create) - Create Applicant
* [list](#list) - List Applicants
* [delete](#delete) - Delete Applicant
* [get](#get) - Get Applicant
* [update](#update) - Update Applicant

## create

Create Applicant

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Brick\DateTime\LocalDate;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AtsApplicantsAddRequest(
    applicant: new Components\ApplicantInput(
        name: 'Elon Musk',
        coverLetter: 'I submit this application to express my sincere interest in the API developer position. In the previous role, I was responsible for leadership and ...',
        headline: 'PepsiCo, Inc, Central Perk',
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
        websites: [
            new Components\Websites(
                url: 'http://example.com',
                id: '12345',
                type: Components\ApplicantType::Primary,
            ),
        ],
        socialLinks: [
            new Components\SocialLinks(
                url: 'https://www.twitter.com/apideck',
                id: '12345',
                type: 'twitter',
            ),
        ],
        stageId: '12345',
        recruiterId: '12345',
        coordinatorId: '12345',
        confidential: false,
        anonymized: true,
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
        firstName: 'Elon',
        lastName: 'Musk',
        middleName: 'D.',
        initials: 'EM',
        birthday: LocalDate::parse('2000-08-12'),
        photoUrl: 'https://unavatar.io/elon-musk',
        title: 'CEO',
        applicationIds: [
            'a0d636c6-43b3-4bde-8c70-85b707d992f4',
            'a98lfd96-43b3-4bde-8c70-85b707d992e6',
        ],
        applications: [
            'a0d636c6-43b3-4bde-8c70-85b707d992f4',
            'a98lfd96-43b3-4bde-8c70-85b707d992e6',
        ],
        followers: [
            'a0d636c6-43b3-4bde-8c70-85b707d992f4',
            'a98lfd96-43b3-4bde-8c70-85b707d992e6',
        ],
        sources: [
            'Job site',
        ],
        tags: [
            'New',
        ],
        archived: false,
        ownerId: '54321',
        recordUrl: 'https://app.intercom.io/contacts/12345',
        deleted: true,
    ),
    serviceId: 'salesforce',
);

$response = $sdk->ats->applicants->create(
    request: $request
);

if ($response->createApplicantResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\AtsApplicantsAddRequest](../../Models/Operations/AtsApplicantsAddRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\AtsApplicantsAddResponse](../../Models/Operations/AtsApplicantsAddResponse.md)**

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

List Applicants

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

$request = new Operations\AtsApplicantsAllRequest(
    serviceId: 'salesforce',
    filter: new Components\ApplicantsFilter(
        jobId: '1234',
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->ats->applicants->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\AtsApplicantsAllRequest](../../Models/Operations/AtsApplicantsAllRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\AtsApplicantsAllResponse](../../Models/Operations/AtsApplicantsAllResponse.md)**

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

Delete Applicant

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AtsApplicantsDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->ats->applicants->delete(
    request: $request
);

if ($response->deleteApplicantResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\AtsApplicantsDeleteRequest](../../Models/Operations/AtsApplicantsDeleteRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\AtsApplicantsDeleteResponse](../../Models/Operations/AtsApplicantsDeleteResponse.md)**

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

Get Applicant

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AtsApplicantsOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->ats->applicants->get(
    request: $request
);

if ($response->getApplicantResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\AtsApplicantsOneRequest](../../Models/Operations/AtsApplicantsOneRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\AtsApplicantsOneResponse](../../Models/Operations/AtsApplicantsOneResponse.md)**

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

Update Applicant

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Brick\DateTime\LocalDate;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\AtsApplicantsUpdateRequest(
    id: '<id>',
    applicant: new Components\ApplicantInput(
        name: 'Elon Musk',
        coverLetter: 'I submit this application to express my sincere interest in the API developer position. In the previous role, I was responsible for leadership and ...',
        headline: 'PepsiCo, Inc, Central Perk',
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
        websites: [
            new Components\Websites(
                url: 'http://example.com',
                id: '12345',
                type: Components\ApplicantType::Primary,
            ),
        ],
        socialLinks: [
            new Components\SocialLinks(
                url: 'https://www.twitter.com/apideck',
                id: '12345',
                type: 'twitter',
            ),
        ],
        stageId: '12345',
        recruiterId: '12345',
        coordinatorId: '12345',
        confidential: false,
        anonymized: true,
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
        firstName: 'Elon',
        lastName: 'Musk',
        middleName: 'D.',
        initials: 'EM',
        birthday: LocalDate::parse('2000-08-12'),
        photoUrl: 'https://unavatar.io/elon-musk',
        title: 'CEO',
        applicationIds: [
            'a0d636c6-43b3-4bde-8c70-85b707d992f4',
            'a98lfd96-43b3-4bde-8c70-85b707d992e6',
        ],
        applications: [
            'a0d636c6-43b3-4bde-8c70-85b707d992f4',
            'a98lfd96-43b3-4bde-8c70-85b707d992e6',
        ],
        followers: [
            'a0d636c6-43b3-4bde-8c70-85b707d992f4',
            'a98lfd96-43b3-4bde-8c70-85b707d992e6',
        ],
        sources: [
            'Job site',
        ],
        tags: [
            'New',
        ],
        archived: false,
        ownerId: '54321',
        recordUrl: 'https://app.intercom.io/contacts/12345',
        deleted: true,
    ),
    serviceId: 'salesforce',
);

$response = $sdk->ats->applicants->update(
    request: $request
);

if ($response->updateApplicantResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\AtsApplicantsUpdateRequest](../../Models/Operations/AtsApplicantsUpdateRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\AtsApplicantsUpdateResponse](../../Models/Operations/AtsApplicantsUpdateResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |