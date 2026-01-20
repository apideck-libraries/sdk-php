# Vault.ConnectionConsent

## Overview

### Available Operations

* [update](#update) - Update consent state

## update

Update the consent state of a connection

### Example Usage

<!-- UsageSnippet language="php" operationID="vault.connectionConsentUpdate" method="patch" path="/vault/connections/{unified_api}/{service_id}/consent" -->
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

$request = new Operations\VaultConnectionConsentUpdateRequest(
    serviceId: 'pipedrive',
    unifiedApi: 'crm',
    updateConsentRequest: new Components\UpdateConsentRequest(
        resources: Components\Two::Wildcard,
        granted: true,
    ),
);

$response = $sdk->vault->connectionConsent->update(
    request: $request
);

if ($response->updateConsentResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\VaultConnectionConsentUpdateRequest](../../Models/Operations/VaultConnectionConsentUpdateRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\VaultConnectionConsentUpdateResponse](../../Models/Operations/VaultConnectionConsentUpdateResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |