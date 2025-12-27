# Crm.Companies

## Overview

### Available Operations

* [list](#list) - List companies
* [create](#create) - Create company
* [get](#get) - Get company
* [update](#update) - Update company
* [delete](#delete) - Delete company

## list

List companies

### Example Usage

<!-- UsageSnippet language="php" operationID="crm.companiesAll" method="get" path="/crm/companies" -->
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

$request = new Operations\CrmCompaniesAllRequest(
    serviceId: 'salesforce',
    filter: new Components\CompaniesFilter(
        name: 'SpaceX',
    ),
    sort: new Components\CompaniesSort(
        by: Components\CompaniesSortBy::CreatedAt,
        direction: Components\SortDirection::Desc,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->crm->companies->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CrmCompaniesAllRequest](../../Models/Operations/CrmCompaniesAllRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CrmCompaniesAllResponse](../../Models/Operations/CrmCompaniesAllResponse.md)**

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

Create company

### Example Usage

<!-- UsageSnippet language="php" operationID="crm.companiesAdd" method="post" path="/crm/companies" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Brick\DateTime\LocalDate;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\CrmCompaniesAddRequest(
    serviceId: 'salesforce',
    company1: new Components\Company1Input(
        name: 'SpaceX',
        ownerId: '12345',
        image: 'https://www.spacex.com/static/images/share.jpg',
        description: 'Space Exploration Technologies Corp. is an American aerospace manufacturer, space transportation services and communications company headquartered in Hawthorne, California.',
        vatNumber: 'BE0689615164',
        currency: Components\Currency::Usd,
        status: 'Open',
        fax: '+12129876543',
        annualRevenue: '+$35m',
        numberOfEmployees: '500-1000',
        industry: 'Apparel',
        ownership: 'Public',
        salesTaxNumber: '12456EN',
        payeeNumber: '78932EN',
        abnOrTfn: '46 115 614 695',
        abnBranch: '123',
        acn: 'XXX XXX XXX',
        firstName: 'Elon',
        lastName: 'Musk',
        bankAccounts: [
            new Components\BankAccount1(
                bankName: 'Monzo',
                accountNumber: '123465',
                accountName: 'SPACEX LLC',
                accountType: Components\BankAccount1AccountType::CreditCard,
                iban: 'CH2989144532982975332',
                bic: 'AUDSCHGGXXX',
                routingNumber: '012345678',
                bsbNumber: '062-001',
                branchIdentifier: '001',
                bankCode: 'BNH',
                currency: Components\Currency::Usd,
            ),
            new Components\BankAccount1(
                bankName: 'Monzo',
                accountNumber: '123465',
                accountName: 'SPACEX LLC',
                accountType: Components\BankAccount1AccountType::CreditCard,
                iban: 'CH2989144532982975332',
                bic: 'AUDSCHGGXXX',
                routingNumber: '012345678',
                bsbNumber: '062-001',
                branchIdentifier: '001',
                bankCode: 'BNH',
                currency: Components\Currency::Usd,
            ),
            new Components\BankAccount1(
                bankName: 'Monzo',
                accountNumber: '123465',
                accountName: 'SPACEX LLC',
                accountType: Components\BankAccount1AccountType::CreditCard,
                iban: 'CH2989144532982975332',
                bic: 'AUDSCHGGXXX',
                routingNumber: '012345678',
                bsbNumber: '062-001',
                branchIdentifier: '001',
                bankCode: 'BNH',
                currency: Components\Currency::Usd,
            ),
        ],
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
            new Components\PhoneNumber(
                id: '12345',
                countryCode: '1',
                areaCode: '323',
                number: '111-111-1111',
                extension: '105',
                type: Components\PhoneNumberType::Primary,
            ),
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
        rowType: new Components\CompanyRowType(
            id: '12345',
            name: 'Customer Account',
        ),
        customFields: [
            new Components\CustomField1(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
            new Components\CustomField1(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        tags: [
            'New',
        ],
        readOnly: false,
        salutation: 'Mr',
        birthday: LocalDate::parse('2000-08-12'),
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

$response = $sdk->crm->companies->create(
    request: $request
);

if ($response->createCompanyResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CrmCompaniesAddRequest](../../Models/Operations/CrmCompaniesAddRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CrmCompaniesAddResponse](../../Models/Operations/CrmCompaniesAddResponse.md)**

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

Get company

### Example Usage

<!-- UsageSnippet language="php" operationID="crm.companiesOne" method="get" path="/crm/companies/{id}" -->
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

$request = new Operations\CrmCompaniesOneRequest(
    id: '<id>',
    serviceId: 'salesforce',
    fields: 'id,updated_at',
);

$response = $sdk->crm->companies->get(
    request: $request
);

if ($response->getCompanyResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CrmCompaniesOneRequest](../../Models/Operations/CrmCompaniesOneRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CrmCompaniesOneResponse](../../Models/Operations/CrmCompaniesOneResponse.md)**

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

Update company

### Example Usage

<!-- UsageSnippet language="php" operationID="crm.companiesUpdate" method="patch" path="/crm/companies/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Brick\DateTime\LocalDate;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\CrmCompaniesUpdateRequest(
    id: '<id>',
    serviceId: 'salesforce',
    company1: new Components\Company1Input(
        name: 'SpaceX',
        ownerId: '12345',
        image: 'https://www.spacex.com/static/images/share.jpg',
        description: 'Space Exploration Technologies Corp. is an American aerospace manufacturer, space transportation services and communications company headquartered in Hawthorne, California.',
        vatNumber: 'BE0689615164',
        currency: Components\Currency::Usd,
        status: 'Open',
        fax: '+12129876543',
        annualRevenue: '+$35m',
        numberOfEmployees: '500-1000',
        industry: 'Apparel',
        ownership: 'Public',
        salesTaxNumber: '12456EN',
        payeeNumber: '78932EN',
        abnOrTfn: '46 115 614 695',
        abnBranch: '123',
        acn: 'XXX XXX XXX',
        firstName: 'Elon',
        lastName: 'Musk',
        bankAccounts: [
            new Components\BankAccount1(
                bankName: 'Monzo',
                accountNumber: '123465',
                accountName: 'SPACEX LLC',
                accountType: Components\BankAccount1AccountType::CreditCard,
                iban: 'CH2989144532982975332',
                bic: 'AUDSCHGGXXX',
                routingNumber: '012345678',
                bsbNumber: '062-001',
                branchIdentifier: '001',
                bankCode: 'BNH',
                currency: Components\Currency::Usd,
            ),
        ],
        websites: [
            new Components\Website(
                id: '12345',
                url: 'http://example.com',
                type: Components\WebsiteType::Primary,
            ),
            new Components\Website(
                id: '12345',
                url: 'http://example.com',
                type: Components\WebsiteType::Primary,
            ),
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
        rowType: new Components\CompanyRowType(
            id: '12345',
            name: 'Customer Account',
        ),
        customFields: [
            new Components\CustomField1(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
            new Components\CustomField1(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: 'Uses Salesforce and Marketo',
            ),
        ],
        tags: [
            'New',
        ],
        readOnly: false,
        salutation: 'Mr',
        birthday: LocalDate::parse('2000-08-12'),
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

$response = $sdk->crm->companies->update(
    request: $request
);

if ($response->updateCompanyResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CrmCompaniesUpdateRequest](../../Models/Operations/CrmCompaniesUpdateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CrmCompaniesUpdateResponse](../../Models/Operations/CrmCompaniesUpdateResponse.md)**

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

Delete company

### Example Usage

<!-- UsageSnippet language="php" operationID="crm.companiesDelete" method="delete" path="/crm/companies/{id}" -->
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

$request = new Operations\CrmCompaniesDeleteRequest(
    id: '<id>',
    serviceId: 'salesforce',
);

$response = $sdk->crm->companies->delete(
    request: $request
);

if ($response->deleteCompanyResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CrmCompaniesDeleteRequest](../../Models/Operations/CrmCompaniesDeleteRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CrmCompaniesDeleteResponse](../../Models/Operations/CrmCompaniesDeleteResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |