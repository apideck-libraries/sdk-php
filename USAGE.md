<!-- Start SDK Example Usage [usage] -->
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

$request = new Operations\AccountingTaxRatesAddRequest(
    taxRate: new Components\TaxRateInput(
        name: 'GST on Purchases',
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
        customFields: [
            new Components\CustomField(
                id: '2389328923893298',
                name: 'employee_level',
                description: 'Employee Level',
                value: true,
            ),
        ],
        id: '1234',
        code: 'ABN',
        description: 'Reduced rate GST Purchases',
        effectiveTaxRate: 10,
        totalTaxRate: 10,
        taxPayableAccountId: '123456',
        taxRemittedAccountId: '123456',
        components: [
            new Components\Components(
                name: 'GST',
                id: '10',
                rate: 10,
                compound: true,
            ),
        ],
        type: 'NONE',
        reportTaxType: 'NONE',
        originalTaxRateId: '12345',
        status: Components\TaxRateStatus::Active,
        rowVersion: '1-12345',
    ),
    serviceId: 'salesforce',
);

$response = $sdk->accounting->taxRates->create(
    request: $request
);

if ($response->createTaxRateResponse !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->