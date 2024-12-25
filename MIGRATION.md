# Migration Guide


This guide helps you migrate from the previous `apideck-libraries/php-sdk` SDK to the new `apideck-libraries/sdk-php` SDK.


## Key Changes

1. **Package Name and Installation**

```
# Old package
composer require apideck-libraries/php-sdk

# New package
composer require apideck-libraries/sdk-php
```


2. **SDK Initialization**

```
// Old SDK
use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;

$config = new ApideckConfiguration('<api-key>', '<application-id>', '<consumer-id>');
$apideck = new Apideck($config);

// New SDK
use Apideck\Unify;

$sdk = Unify\Apideck::builder()
    ->setConsumerId('test-consumer')
    ->setAppId('your-app-id')
    ->setSecurity('your-api-key')
    ->build();
```

3. **Method Naming Changes**

```
// Old SDK
$crmApi = $apideck->getCrmApi();
$response = $crmApi->contactsAll(false, null, null, $serviceId, null, 10);

// New SDK
$response = $sdk->crm->contacts->list(
    new Operations\CrmContactsAllRequest(
        serviceId: 'salesforce',
        filter: new Components\ContactsFilter(
            firstName: 'John',
            lastName: 'Doe'
        )
    )
);
```

4. ** Response Structure**

```
// Old SDK
$response = $crmApi->contactsAll();
$data = $response->getData();

// New SDK
$response = $sdk->crm->contacts->list($request);
if ($response->getContactsResponse !== null) {
    // handle response
}
```

5. **Method Naming Convention Changes**

| Old Method | New Method |
|------------|------------|
| contactsAll | contacts->list |
| contactsAdd | contacts->create |
| contactsOne | contacts->get |
| contactsUpdate | contacts->update |
| contactsDelete | contacts->delete |
...

6. **Error Handling**

```
// Old SDK
try {
    $response = $crmApi->contactsAll();
} catch (\Exception $e) {
    echo $e->getMessage();
}

// New SDK
try {
    $response = $sdk->crm->contacts->list($request);
} catch (Errors\BadRequestResponse $e) {
    // handle $e->$container data
} catch (Errors\UnauthorizedResponse $e) {
    // handle $e->$container data
} catch (Errors\APIException $e) {
    // handle default exception
}
```

For more details on error handling, please refer to the [Error Handling Documentation](https://github.com/apideck-libraries/sdk-php?tab=readme-ov-file#error-handling).


## Breaking Changes

- Package name has changed from `apideck-libraries/php-sdk` to `apideck-libraries/sdk-php`
- Configuration and initialization process has been completely revamped
- All API method names have been restructured for consistency and better organization
- Response structure now includes typed response wrappers
- Error handling has been improved with specific error types
- Method calls now require structured request objects

## Need help?

If you encounter any issues during migration:

1. Checkout out our [documentation](https://github.com/apideck-libraries/sdk-php/tree/main?tab=readme-ov-file#apideck-librariessdk-php)
2. Open an issue on our [GitHub repository](https://github.com/apideck-libraries/sdk-php/issues)
3. Contact our support at `support@apideck.com`

