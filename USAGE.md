<!-- Start SDK Example Usage [usage] -->
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

$request = new Operations\AccountingTaxRatesAllRequest(
    serviceId: 'salesforce',
    filter: new Components\TaxRatesFilter(
        assets: true,
        equity: true,
        expenses: true,
        liabilities: true,
        revenue: true,
    ),
    passThrough: [
        'search' => 'San Francisco',
    ],
    fields: 'id,updated_at',
);

$response = $sdk->accounting->taxRates->list(
    request: $request
);

if ($response->getTaxRatesResponse !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->