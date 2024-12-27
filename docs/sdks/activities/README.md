# Activities
(*crm->activities*)

## Overview

### Available Operations

* [create](#create) - Create activity
* [list](#list) - List activities
* [delete](#delete) - Delete activity
* [get](#get) - Get activity
* [update](#update) - Update activity

## create

Create activity

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

$request = new Operations\CrmActivitiesAddRequest(
    activity: new Components\ActivityInput(
        type: Components\ActivityType::Meeting,
        locationAddress: new Components\Address(
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
        recurrent: false,
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: true,
            ),
        ],
        attendees: [
            new Components\ActivityAttendeeInput(
                name: 'Elon Musk',
                firstName: 'Elon',
                middleName: 'D.',
                lastName: 'Musk',
                prefix: 'Mr.',
                suffix: 'PhD',
                emailAddress: 'elon@musk.com',
                isOrganizer: true,
                status: Components\ActivityAttendeeStatus::Accepted,
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
        activityDatetime: '2021-05-01T12:00:00.000Z',
        durationSeconds: 1800,
        userId: '12345',
        accountId: '12345',
        contactId: '12345',
        companyId: '12345',
        opportunityId: '12345',
        leadId: '12345',
        ownerId: '12345',
        campaignId: '12345',
        caseId: '12345',
        assetId: '12345',
        contractId: '12345',
        productId: '12345',
        solutionId: '12345',
        customObjectId: '12345',
        title: 'Meeting',
        description: 'More info about the meeting',
        note: 'An internal note about the meeting',
        location: 'Space',
        allDayEvent: false,
        private: true,
        groupEvent: true,
        eventSubType: 'debrief',
        groupEventType: 'Proposed',
        child: false,
        archived: false,
        deleted: false,
        showAs: Components\ShowAs::Busy,
        done: false,
        startDatetime: '2021-05-01T12:00:00.000Z',
        endDatetime: '2021-05-01T12:30:00.000Z',
        activityDate: '2021-05-01',
        endDate: '2021-05-01',
        reminderDatetime: '2021-05-01T17:00:00.000Z',
        reminderSet: false,
        videoConferenceUrl: 'https://us02web.zoom.us/j/88120759396',
        videoConferenceId: 'zoom:88120759396',
    ),
    serviceId: 'salesforce',
);

$response = $sdk->crm->activities->create(
    request: $request
);

if ($response->createActivityResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CrmActivitiesAddRequest](../../Models/Operations/CrmActivitiesAddRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CrmActivitiesAddResponse](../../Models/Operations/CrmActivitiesAddResponse.md)**

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

List activities

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$request = new Operations\CrmActivitiesAllRequest(
    serviceId: 'salesforce',
    filter: new Components\ActivitiesFilter(
        updatedSince: Utils\Utils::parseDateTime('2020-09-30T07:43:32.000Z'),
    ),
    sort: new Components\ActivitiesSort(
        by: Components\ActivitiesSortBy::CreatedAt,
        direction: Components\SortDirection::Desc,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->crm->activities->list(
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
| `$request`                                                                               | [Operations\CrmActivitiesAllRequest](../../Models/Operations/CrmActivitiesAllRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CrmActivitiesAllResponse](../../Models/Operations/CrmActivitiesAllResponse.md)**

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

Delete activity

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

$request = new Operations\CrmActivitiesDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->crm->activities->delete(
    request: $request
);

if ($response->deleteActivityResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CrmActivitiesDeleteRequest](../../Models/Operations/CrmActivitiesDeleteRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CrmActivitiesDeleteResponse](../../Models/Operations/CrmActivitiesDeleteResponse.md)**

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

Get activity

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

$request = new Operations\CrmActivitiesOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->crm->activities->get(
    request: $request
);

if ($response->getActivityResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CrmActivitiesOneRequest](../../Models/Operations/CrmActivitiesOneRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CrmActivitiesOneResponse](../../Models/Operations/CrmActivitiesOneResponse.md)**

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

Update activity

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

$request = new Operations\CrmActivitiesUpdateRequest(
    id: '<id>',
    activity: new Components\ActivityInput(
        type: Components\ActivityType::Meeting,
        locationAddress: new Components\Address(
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
        recurrent: false,
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
        attendees: [
            new Components\ActivityAttendeeInput(
                name: 'Elon Musk',
                firstName: 'Elon',
                middleName: 'D.',
                lastName: 'Musk',
                prefix: 'Mr.',
                suffix: 'PhD',
                emailAddress: 'elon@musk.com',
                isOrganizer: true,
                status: Components\ActivityAttendeeStatus::Accepted,
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
        activityDatetime: '2021-05-01T12:00:00.000Z',
        durationSeconds: 1800,
        userId: '12345',
        accountId: '12345',
        contactId: '12345',
        companyId: '12345',
        opportunityId: '12345',
        leadId: '12345',
        ownerId: '12345',
        campaignId: '12345',
        caseId: '12345',
        assetId: '12345',
        contractId: '12345',
        productId: '12345',
        solutionId: '12345',
        customObjectId: '12345',
        title: 'Meeting',
        description: 'More info about the meeting',
        note: 'An internal note about the meeting',
        location: 'Space',
        allDayEvent: false,
        private: true,
        groupEvent: true,
        eventSubType: 'debrief',
        groupEventType: 'Proposed',
        child: false,
        archived: false,
        deleted: false,
        showAs: Components\ShowAs::Busy,
        done: false,
        startDatetime: '2021-05-01T12:00:00.000Z',
        endDatetime: '2021-05-01T12:30:00.000Z',
        activityDate: '2021-05-01',
        endDate: '2021-05-01',
        reminderDatetime: '2021-05-01T17:00:00.000Z',
        reminderSet: false,
        videoConferenceUrl: 'https://us02web.zoom.us/j/88120759396',
        videoConferenceId: 'zoom:88120759396',
    ),
    serviceId: 'salesforce',
);

$response = $sdk->crm->activities->update(
    request: $request
);

if ($response->updateActivityResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CrmActivitiesUpdateRequest](../../Models/Operations/CrmActivitiesUpdateRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CrmActivitiesUpdateResponse](../../Models/Operations/CrmActivitiesUpdateResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |