# Sessions
(*vault->sessions*)

## Overview

### Available Operations

* [create](#create) - Create Session

## create

Making a POST request to this endpoint will initiate a Hosted Vault session. Redirect the consumer to the returned
URL to allow temporary access to manage their integrations and settings.

Note: This is a short lived token that will expire after 1 hour (TTL: 3600).


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->setSecurity($security)->build();

$session = new Components\Session(
    consumerMetadata: new Components\ConsumerMetadata(
        accountName: 'SpaceX',
        userName: 'Elon Musk',
        email: 'elon@musk.com',
        image: 'https://www.spacex.com/static/images/share.jpg',
    ),
    redirectUri: 'https://mysaas.com/dashboard',
    settings: new Components\SessionSettings(
        unifiedApis: [
            Components\UnifiedApiId::Crm,
        ],
        sessionLength: '30m',
    ),
    theme: new Components\Theme(
        favicon: 'https://res.cloudinary.com/apideck/icons/intercom',
        logo: 'https://res.cloudinary.com/apideck/icons/intercom',
        primaryColor: '#286efa',
        sidepanelBackgroundColor: '#286efa',
        sidepanelTextColor: '#FFFFFF',
        vaultName: 'Intercom',
        privacyUrl: 'https://compliance.apideck.com/privacy-policy',
        termsUrl: 'https://www.termsfeed.com/terms-conditions/957c85c1b089ae9e3219c83eff65377e',
    ),
    customConsumerSettings: [
        'feature_flag_1' => true,
        'tax_rates' => [
            [
                'id' => '6',
                'label' => '6%',
            ],
            [
                'id' => '21',
                'label' => '21%',
            ],
        ],
    ],
);

$response = $sdk->vault->sessions->create(
    consumerId: 'test-consumer',
    appId: 'dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX',
    session: $session

);

if ($response->createSessionResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                  | Type                                                       | Required                                                   | Description                                                | Example                                                    |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `consumerId`                                               | *?string*                                                  | :heavy_minus_sign:                                         | ID of the consumer which you want to get or push data from | test-consumer                                              |
| `appId`                                                    | *?string*                                                  | :heavy_minus_sign:                                         | The ID of your Unify application                           | dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX                    |
| `session`                                                  | [?Components\Session](../../Models/Components/Session.md)  | :heavy_minus_sign:                                         | Additional redirect uri and/or consumer metadata           |                                                            |

### Response

**[?Operations\VaultSessionsCreateResponse](../../Models/Operations/VaultSessionsCreateResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |