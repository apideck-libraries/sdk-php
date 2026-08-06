# Crm.ListMembers

## Overview

### Available Operations

* [list](#list) - List list members

## list

Retrieve the records that belong to a List. Returns a paginated set of members, each carrying the downstream record `id` and its `object_type`. Use this to enumerate the contents of a List (for example the contacts or companies a HubSpot list contains) instead of dropping to the proxy.


### Example Usage

<!-- UsageSnippet language="php" operationID="crm.listMembersAll" method="get" path="/crm/lists/{id}/members" -->
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

$request = new Operations\CrmListMembersAllRequest(
    id: '<id>',
    serviceId: 'salesforce',
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$responses = $sdk->crm->listMembers->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CrmListMembersAllRequest](../../Models/Operations/CrmListMembersAllRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CrmListMembersAllResponse](../../Models/Operations/CrmListMembersAllResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequestResponse      | 400                            | application/json               |
| Errors\UnauthorizedResponse    | 401                            | application/json               |
| Errors\PaymentRequiredResponse | 402                            | application/json               |
| Errors\NotFoundResponse        | 404                            | application/json               |
| Errors\UnprocessableResponse   | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |