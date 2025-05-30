# apideck-libraries/sdk-php

Developer-friendly & type-safe Php SDK specifically catered to leverage *apideck-libraries/sdk-php* API.

<div align="left">
    <a href="https://www.speakeasy.com/?utm_source=apideck-libraries/sdk-php&utm_campaign=php"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg" style="width: 100px; height: 28px;" />
    </a>
</div>


<!-- Start Summary [summary] -->
## Summary

Apideck: The Apideck OpenAPI Spec: SDK Optimized

For more information about the API: [Apideck Developer Docs](https://developers.apideck.com)
<!-- End Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents
<!-- $toc-max-depth=2 -->
* [apideck-libraries/sdk-php](#apideck-librariessdk-php)
  * [SDK Installation](#sdk-installation)
  * [SDK Example Usage](#sdk-example-usage)
  * [Authentication](#authentication)
  * [Available Resources and Operations](#available-resources-and-operations)
  * [Pagination](#pagination)
  * [Retries](#retries)
  * [Error Handling](#error-handling)
  * [Server Selection](#server-selection)
* [Development](#development)
  * [Maturity](#maturity)
  * [Contributions](#contributions)

<!-- End Table of Contents [toc] -->

<!-- Start SDK Installation [installation] -->
## SDK Installation

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK and add it as a dependency to an existing `composer.json` file:
```bash
composer require "apideck-libraries/sdk-php"
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

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

$responses = $sdk->accounting->taxRates->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```
<!-- End SDK Example Usage [usage] -->

<!-- Start Authentication [security] -->
## Authentication

### Per-Client Security Schemes

This SDK supports the following security scheme globally:

| Name     | Type | Scheme      |
| -------- | ---- | ----------- |
| `apiKey` | http | HTTP Bearer |

To authenticate with the API the `apiKey` parameter must be set when initializing the SDK. For example:
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

$responses = $sdk->accounting->taxRates->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```
<!-- End Authentication [security] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>

### [accounting](docs/sdks/accounting/README.md)


#### [accounting->agedCreditors](docs/sdks/agedcreditors/README.md)

* [get](docs/sdks/agedcreditors/README.md#get) - Get Aged Creditors

#### [accounting->agedDebtors](docs/sdks/ageddebtors/README.md)

* [get](docs/sdks/ageddebtors/README.md#get) - Get Aged Debtors

#### [accounting->attachments](docs/sdks/attachments/README.md)

* [list](docs/sdks/attachments/README.md#list) - List Attachments
* [upload](docs/sdks/attachments/README.md#upload) - Upload attachment
* [get](docs/sdks/attachments/README.md#get) - Get Attachment
* [delete](docs/sdks/attachments/README.md#delete) - Delete Attachment
* [download](docs/sdks/attachments/README.md#download) - Download Attachment

#### [accounting->balanceSheet](docs/sdks/balancesheet/README.md)

* [get](docs/sdks/balancesheet/README.md#get) - Get BalanceSheet

#### [accounting->bankFeedAccounts](docs/sdks/bankfeedaccounts/README.md)

* [list](docs/sdks/bankfeedaccounts/README.md#list) - List Bank Feed Accounts
* [create](docs/sdks/bankfeedaccounts/README.md#create) - Create Bank Feed Account
* [get](docs/sdks/bankfeedaccounts/README.md#get) - Get Bank Feed Account
* [update](docs/sdks/bankfeedaccounts/README.md#update) - Update Bank Feed Account
* [delete](docs/sdks/bankfeedaccounts/README.md#delete) - Delete Bank Feed Account

#### [accounting->bankFeedStatements](docs/sdks/bankfeedstatements/README.md)

* [list](docs/sdks/bankfeedstatements/README.md#list) - List Bank Feed Statements
* [create](docs/sdks/bankfeedstatements/README.md#create) - Create Bank Feed Statement
* [get](docs/sdks/bankfeedstatements/README.md#get) - Get Bank Feed Statement
* [update](docs/sdks/bankfeedstatements/README.md#update) - Update Bank Feed Statement
* [delete](docs/sdks/bankfeedstatements/README.md#delete) - Delete Bank Feed Statement

#### [accounting->billPayments](docs/sdks/billpayments/README.md)

* [list](docs/sdks/billpayments/README.md#list) - List Bill Payments
* [create](docs/sdks/billpayments/README.md#create) - Create Bill Payment
* [get](docs/sdks/billpayments/README.md#get) - Get Bill Payment
* [update](docs/sdks/billpayments/README.md#update) - Update Bill Payment
* [delete](docs/sdks/billpayments/README.md#delete) - Delete Bill Payment

#### [accounting->bills](docs/sdks/bills/README.md)

* [list](docs/sdks/bills/README.md#list) - List Bills
* [create](docs/sdks/bills/README.md#create) - Create Bill
* [get](docs/sdks/bills/README.md#get) - Get Bill
* [update](docs/sdks/bills/README.md#update) - Update Bill
* [delete](docs/sdks/bills/README.md#delete) - Delete Bill

#### [accounting->companyInfo](docs/sdks/companyinfo/README.md)

* [get](docs/sdks/companyinfo/README.md#get) - Get company info

#### [accounting->creditNotes](docs/sdks/creditnotes/README.md)

* [list](docs/sdks/creditnotes/README.md#list) - List Credit Notes
* [create](docs/sdks/creditnotes/README.md#create) - Create Credit Note
* [get](docs/sdks/creditnotes/README.md#get) - Get Credit Note
* [update](docs/sdks/creditnotes/README.md#update) - Update Credit Note
* [delete](docs/sdks/creditnotes/README.md#delete) - Delete Credit Note

#### [accounting->customers](docs/sdks/customers/README.md)

* [list](docs/sdks/customers/README.md#list) - List Customers
* [create](docs/sdks/customers/README.md#create) - Create Customer
* [get](docs/sdks/customers/README.md#get) - Get Customer
* [update](docs/sdks/customers/README.md#update) - Update Customer
* [delete](docs/sdks/customers/README.md#delete) - Delete Customer

#### [accounting->departments](docs/sdks/departments/README.md)

* [list](docs/sdks/departments/README.md#list) - List Departments
* [create](docs/sdks/departments/README.md#create) - Create Department
* [get](docs/sdks/departments/README.md#get) - Get Department
* [update](docs/sdks/departments/README.md#update) - Update Department
* [delete](docs/sdks/departments/README.md#delete) - Delete Department

#### [accounting->expenses](docs/sdks/expenses/README.md)

* [list](docs/sdks/expenses/README.md#list) - List Expenses
* [create](docs/sdks/expenses/README.md#create) - Create Expense
* [get](docs/sdks/expenses/README.md#get) - Get Expense
* [update](docs/sdks/expenses/README.md#update) - Update Expense
* [delete](docs/sdks/expenses/README.md#delete) - Delete Expense

#### [accounting->invoiceItems](docs/sdks/invoiceitems/README.md)

* [list](docs/sdks/invoiceitems/README.md#list) - List Invoice Items
* [create](docs/sdks/invoiceitems/README.md#create) - Create Invoice Item
* [get](docs/sdks/invoiceitems/README.md#get) - Get Invoice Item
* [update](docs/sdks/invoiceitems/README.md#update) - Update Invoice Item
* [delete](docs/sdks/invoiceitems/README.md#delete) - Delete Invoice Item

#### [accounting->invoices](docs/sdks/invoices/README.md)

* [list](docs/sdks/invoices/README.md#list) - List Invoices
* [create](docs/sdks/invoices/README.md#create) - Create Invoice
* [get](docs/sdks/invoices/README.md#get) - Get Invoice
* [update](docs/sdks/invoices/README.md#update) - Update Invoice
* [delete](docs/sdks/invoices/README.md#delete) - Delete Invoice

#### [accounting->journalEntries](docs/sdks/journalentries/README.md)

* [list](docs/sdks/journalentries/README.md#list) - List Journal Entries
* [create](docs/sdks/journalentries/README.md#create) - Create Journal Entry
* [get](docs/sdks/journalentries/README.md#get) - Get Journal Entry
* [update](docs/sdks/journalentries/README.md#update) - Update Journal Entry
* [delete](docs/sdks/journalentries/README.md#delete) - Delete Journal Entry

#### [accounting->ledgerAccounts](docs/sdks/ledgeraccounts/README.md)

* [list](docs/sdks/ledgeraccounts/README.md#list) - List Ledger Accounts
* [create](docs/sdks/ledgeraccounts/README.md#create) - Create Ledger Account
* [get](docs/sdks/ledgeraccounts/README.md#get) - Get Ledger Account
* [update](docs/sdks/ledgeraccounts/README.md#update) - Update Ledger Account
* [delete](docs/sdks/ledgeraccounts/README.md#delete) - Delete Ledger Account

#### [accounting->locations](docs/sdks/locations/README.md)

* [list](docs/sdks/locations/README.md#list) - List Locations
* [create](docs/sdks/locations/README.md#create) - Create Location
* [get](docs/sdks/locations/README.md#get) - Get Location
* [update](docs/sdks/locations/README.md#update) - Update Location
* [delete](docs/sdks/locations/README.md#delete) - Delete Location

#### [accounting->payments](docs/sdks/payments/README.md)

* [list](docs/sdks/payments/README.md#list) - List Payments
* [create](docs/sdks/payments/README.md#create) - Create Payment
* [get](docs/sdks/payments/README.md#get) - Get Payment
* [update](docs/sdks/payments/README.md#update) - Update Payment
* [delete](docs/sdks/payments/README.md#delete) - Delete Payment

#### [accounting->profitAndLoss](docs/sdks/profitandloss/README.md)

* [get](docs/sdks/profitandloss/README.md#get) - Get Profit and Loss

#### [accounting->purchaseOrders](docs/sdks/purchaseorders/README.md)

* [list](docs/sdks/purchaseorders/README.md#list) - List Purchase Orders
* [create](docs/sdks/purchaseorders/README.md#create) - Create Purchase Order
* [get](docs/sdks/purchaseorders/README.md#get) - Get Purchase Order
* [update](docs/sdks/purchaseorders/README.md#update) - Update Purchase Order
* [delete](docs/sdks/purchaseorders/README.md#delete) - Delete Purchase Order

#### [accounting->subsidiaries](docs/sdks/subsidiaries/README.md)

* [list](docs/sdks/subsidiaries/README.md#list) - List Subsidiaries
* [create](docs/sdks/subsidiaries/README.md#create) - Create Subsidiary
* [get](docs/sdks/subsidiaries/README.md#get) - Get Subsidiary
* [update](docs/sdks/subsidiaries/README.md#update) - Update Subsidiary
* [delete](docs/sdks/subsidiaries/README.md#delete) - Delete Subsidiary

#### [accounting->suppliers](docs/sdks/suppliers/README.md)

* [list](docs/sdks/suppliers/README.md#list) - List Suppliers
* [create](docs/sdks/suppliers/README.md#create) - Create Supplier
* [get](docs/sdks/suppliers/README.md#get) - Get Supplier
* [update](docs/sdks/suppliers/README.md#update) - Update Supplier
* [delete](docs/sdks/suppliers/README.md#delete) - Delete Supplier

#### [accounting->taxRates](docs/sdks/taxrates/README.md)

* [list](docs/sdks/taxrates/README.md#list) - List Tax Rates
* [create](docs/sdks/taxrates/README.md#create) - Create Tax Rate
* [get](docs/sdks/taxrates/README.md#get) - Get Tax Rate
* [update](docs/sdks/taxrates/README.md#update) - Update Tax Rate
* [delete](docs/sdks/taxrates/README.md#delete) - Delete Tax Rate

#### [accounting->trackingCategories](docs/sdks/trackingcategories/README.md)

* [list](docs/sdks/trackingcategories/README.md#list) - List Tracking Categories
* [create](docs/sdks/trackingcategories/README.md#create) - Create Tracking Category
* [get](docs/sdks/trackingcategories/README.md#get) - Get Tracking Category
* [update](docs/sdks/trackingcategories/README.md#update) - Update Tracking Category
* [delete](docs/sdks/trackingcategories/README.md#delete) - Delete Tracking Category


### [ats](docs/sdks/ats/README.md)


#### [ats->applicants](docs/sdks/applicants/README.md)

* [list](docs/sdks/applicants/README.md#list) - List Applicants
* [create](docs/sdks/applicants/README.md#create) - Create Applicant
* [get](docs/sdks/applicants/README.md#get) - Get Applicant
* [update](docs/sdks/applicants/README.md#update) - Update Applicant
* [delete](docs/sdks/applicants/README.md#delete) - Delete Applicant

#### [ats->applications](docs/sdks/applications/README.md)

* [list](docs/sdks/applications/README.md#list) - List Applications
* [create](docs/sdks/applications/README.md#create) - Create Application
* [get](docs/sdks/applications/README.md#get) - Get Application
* [update](docs/sdks/applications/README.md#update) - Update Application
* [delete](docs/sdks/applications/README.md#delete) - Delete Application

#### [ats->jobs](docs/sdks/jobs/README.md)

* [list](docs/sdks/jobs/README.md#list) - List Jobs
* [get](docs/sdks/jobs/README.md#get) - Get Job

### [connector](docs/sdks/connector/README.md)


#### [connector->apiResourceCoverage](docs/sdks/apiresourcecoverage/README.md)

* [get](docs/sdks/apiresourcecoverage/README.md#get) - Get API Resource Coverage

#### [connector->apiResources](docs/sdks/apiresources/README.md)

* [get](docs/sdks/apiresources/README.md#get) - Get API Resource

#### [connector->apis](docs/sdks/apis/README.md)

* [list](docs/sdks/apis/README.md#list) - List APIs
* [get](docs/sdks/apis/README.md#get) - Get API

#### [connector->connectorDocs](docs/sdks/connectordocs/README.md)

* [get](docs/sdks/connectordocs/README.md#get) - Get Connector Doc content

#### [connector->connectorResources](docs/sdks/connectorresources/README.md)

* [get](docs/sdks/connectorresources/README.md#get) - Get Connector Resource

#### [connector->connectors](docs/sdks/connectors/README.md)

* [list](docs/sdks/connectors/README.md#list) - List Connectors
* [get](docs/sdks/connectors/README.md#get) - Get Connector

### [crm](docs/sdks/crm/README.md)


#### [crm->activities](docs/sdks/activities/README.md)

* [list](docs/sdks/activities/README.md#list) - List activities
* [create](docs/sdks/activities/README.md#create) - Create activity
* [get](docs/sdks/activities/README.md#get) - Get activity
* [update](docs/sdks/activities/README.md#update) - Update activity
* [delete](docs/sdks/activities/README.md#delete) - Delete activity

#### [crm->companies](docs/sdks/companies/README.md)

* [list](docs/sdks/companies/README.md#list) - List companies
* [create](docs/sdks/companies/README.md#create) - Create company
* [get](docs/sdks/companies/README.md#get) - Get company
* [update](docs/sdks/companies/README.md#update) - Update company
* [delete](docs/sdks/companies/README.md#delete) - Delete company

#### [crm->contacts](docs/sdks/contacts/README.md)

* [list](docs/sdks/contacts/README.md#list) - List contacts
* [create](docs/sdks/contacts/README.md#create) - Create contact
* [get](docs/sdks/contacts/README.md#get) - Get contact
* [update](docs/sdks/contacts/README.md#update) - Update contact
* [delete](docs/sdks/contacts/README.md#delete) - Delete contact

#### [crm->customObjects](docs/sdks/customobjects/README.md)

* [list](docs/sdks/customobjects/README.md#list) - List custom objects
* [create](docs/sdks/customobjects/README.md#create) - Create custom object
* [get](docs/sdks/customobjects/README.md#get) - Get custom object
* [update](docs/sdks/customobjects/README.md#update) - Update custom object
* [delete](docs/sdks/customobjects/README.md#delete) - Delete custom object

#### [crm->customObjectSchemas](docs/sdks/customobjectschemas/README.md)

* [list](docs/sdks/customobjectschemas/README.md#list) - List custom object schemas
* [create](docs/sdks/customobjectschemas/README.md#create) - Create custom object schema
* [get](docs/sdks/customobjectschemas/README.md#get) - Get custom object schema
* [update](docs/sdks/customobjectschemas/README.md#update) - Update custom object schema
* [delete](docs/sdks/customobjectschemas/README.md#delete) - Delete custom object schema

#### [crm->leads](docs/sdks/leads/README.md)

* [list](docs/sdks/leads/README.md#list) - List leads
* [create](docs/sdks/leads/README.md#create) - Create lead
* [get](docs/sdks/leads/README.md#get) - Get lead
* [update](docs/sdks/leads/README.md#update) - Update lead
* [delete](docs/sdks/leads/README.md#delete) - Delete lead

#### [crm->notes](docs/sdks/notes/README.md)

* [list](docs/sdks/notes/README.md#list) - List notes
* [create](docs/sdks/notes/README.md#create) - Create note
* [get](docs/sdks/notes/README.md#get) - Get note
* [update](docs/sdks/notes/README.md#update) - Update note
* [delete](docs/sdks/notes/README.md#delete) - Delete note

#### [crm->opportunities](docs/sdks/opportunities/README.md)

* [list](docs/sdks/opportunities/README.md#list) - List opportunities
* [create](docs/sdks/opportunities/README.md#create) - Create opportunity
* [get](docs/sdks/opportunities/README.md#get) - Get opportunity
* [update](docs/sdks/opportunities/README.md#update) - Update opportunity
* [delete](docs/sdks/opportunities/README.md#delete) - Delete opportunity

#### [crm->pipelines](docs/sdks/pipelines/README.md)

* [list](docs/sdks/pipelines/README.md#list) - List pipelines
* [create](docs/sdks/pipelines/README.md#create) - Create pipeline
* [get](docs/sdks/pipelines/README.md#get) - Get pipeline
* [update](docs/sdks/pipelines/README.md#update) - Update pipeline
* [delete](docs/sdks/pipelines/README.md#delete) - Delete pipeline

#### [crm->users](docs/sdks/users/README.md)

* [list](docs/sdks/users/README.md#list) - List users
* [create](docs/sdks/users/README.md#create) - Create user
* [get](docs/sdks/users/README.md#get) - Get user
* [update](docs/sdks/users/README.md#update) - Update user
* [delete](docs/sdks/users/README.md#delete) - Delete user

### [ecommerce](docs/sdks/ecommerce/README.md)


#### [ecommerce->customers](docs/sdks/apideckcustomers/README.md)

* [list](docs/sdks/apideckcustomers/README.md#list) - List Customers
* [get](docs/sdks/apideckcustomers/README.md#get) - Get Customer

#### [ecommerce->orders](docs/sdks/orders/README.md)

* [list](docs/sdks/orders/README.md#list) - List Orders
* [get](docs/sdks/orders/README.md#get) - Get Order

#### [ecommerce->products](docs/sdks/products/README.md)

* [list](docs/sdks/products/README.md#list) - List Products
* [get](docs/sdks/products/README.md#get) - Get Product

#### [ecommerce->stores](docs/sdks/stores/README.md)

* [get](docs/sdks/stores/README.md#get) - Get Store

### [fileStorage](docs/sdks/filestorage/README.md)


#### [fileStorage->driveGroups](docs/sdks/drivegroups/README.md)

* [list](docs/sdks/drivegroups/README.md#list) - List DriveGroups
* [create](docs/sdks/drivegroups/README.md#create) - Create DriveGroup
* [get](docs/sdks/drivegroups/README.md#get) - Get DriveGroup
* [update](docs/sdks/drivegroups/README.md#update) - Update DriveGroup
* [delete](docs/sdks/drivegroups/README.md#delete) - Delete DriveGroup

#### [fileStorage->drives](docs/sdks/drives/README.md)

* [list](docs/sdks/drives/README.md#list) - List Drives
* [create](docs/sdks/drives/README.md#create) - Create Drive
* [get](docs/sdks/drives/README.md#get) - Get Drive
* [update](docs/sdks/drives/README.md#update) - Update Drive
* [delete](docs/sdks/drives/README.md#delete) - Delete Drive

#### [fileStorage->files](docs/sdks/files/README.md)

* [list](docs/sdks/files/README.md#list) - List Files
* [search](docs/sdks/files/README.md#search) - Search Files
* [get](docs/sdks/files/README.md#get) - Get File
* [update](docs/sdks/files/README.md#update) - Rename or move File
* [delete](docs/sdks/files/README.md#delete) - Delete File
* [download](docs/sdks/files/README.md#download) - Download File
* [export](docs/sdks/files/README.md#export) - Export File

#### [fileStorage->folders](docs/sdks/folders/README.md)

* [create](docs/sdks/folders/README.md#create) - Create Folder
* [get](docs/sdks/folders/README.md#get) - Get Folder
* [update](docs/sdks/folders/README.md#update) - Rename or move Folder
* [delete](docs/sdks/folders/README.md#delete) - Delete Folder
* [copy](docs/sdks/folders/README.md#copy) - Copy Folder

#### [fileStorage->sharedLinks](docs/sdks/sharedlinks/README.md)

* [list](docs/sdks/sharedlinks/README.md#list) - List SharedLinks
* [create](docs/sdks/sharedlinks/README.md#create) - Create Shared Link
* [get](docs/sdks/sharedlinks/README.md#get) - Get Shared Link
* [update](docs/sdks/sharedlinks/README.md#update) - Update Shared Link
* [delete](docs/sdks/sharedlinks/README.md#delete) - Delete Shared Link

#### [fileStorage->uploadSessions](docs/sdks/uploadsessions/README.md)

* [create](docs/sdks/uploadsessions/README.md#create) - Start Upload Session
* [get](docs/sdks/uploadsessions/README.md#get) - Get Upload Session
* [upload](docs/sdks/uploadsessions/README.md#upload) - Upload part of File to Upload Session
* [delete](docs/sdks/uploadsessions/README.md#delete) - Abort Upload Session
* [finish](docs/sdks/uploadsessions/README.md#finish) - Finish Upload Session

### [hris](docs/sdks/hris/README.md)


#### [hris->companies](docs/sdks/apideckcompanies/README.md)

* [list](docs/sdks/apideckcompanies/README.md#list) - List Companies
* [create](docs/sdks/apideckcompanies/README.md#create) - Create Company
* [get](docs/sdks/apideckcompanies/README.md#get) - Get Company
* [update](docs/sdks/apideckcompanies/README.md#update) - Update Company
* [delete](docs/sdks/apideckcompanies/README.md#delete) - Delete Company

#### [hris->departments](docs/sdks/apideckdepartments/README.md)

* [list](docs/sdks/apideckdepartments/README.md#list) - List Departments
* [create](docs/sdks/apideckdepartments/README.md#create) - Create Department
* [get](docs/sdks/apideckdepartments/README.md#get) - Get Department
* [update](docs/sdks/apideckdepartments/README.md#update) - Update Department
* [delete](docs/sdks/apideckdepartments/README.md#delete) - Delete Department

#### [hris->employeePayrolls](docs/sdks/employeepayrolls/README.md)

* [list](docs/sdks/employeepayrolls/README.md#list) - List Employee Payrolls
* [get](docs/sdks/employeepayrolls/README.md#get) - Get Employee Payroll

#### [hris->employees](docs/sdks/employees/README.md)

* [list](docs/sdks/employees/README.md#list) - List Employees
* [create](docs/sdks/employees/README.md#create) - Create Employee
* [get](docs/sdks/employees/README.md#get) - Get Employee
* [update](docs/sdks/employees/README.md#update) - Update Employee
* [delete](docs/sdks/employees/README.md#delete) - Delete Employee

#### [hris->employeeSchedules](docs/sdks/employeeschedules/README.md)

* [list](docs/sdks/employeeschedules/README.md#list) - List Employee Schedules

#### [hris->payrolls](docs/sdks/payrolls/README.md)

* [list](docs/sdks/payrolls/README.md#list) - List Payroll
* [get](docs/sdks/payrolls/README.md#get) - Get Payroll

#### [hris->timeOffRequests](docs/sdks/timeoffrequests/README.md)

* [list](docs/sdks/timeoffrequests/README.md#list) - List Time Off Requests
* [create](docs/sdks/timeoffrequests/README.md#create) - Create Time Off Request
* [get](docs/sdks/timeoffrequests/README.md#get) - Get Time Off Request
* [update](docs/sdks/timeoffrequests/README.md#update) - Update Time Off Request
* [delete](docs/sdks/timeoffrequests/README.md#delete) - Delete Time Off Request

### [issueTracking](docs/sdks/issuetracking/README.md)


#### [issueTracking->collections](docs/sdks/collections/README.md)

* [list](docs/sdks/collections/README.md#list) - List Collections
* [get](docs/sdks/collections/README.md#get) - Get Collection

#### [issueTracking->collectionTags](docs/sdks/collectiontags/README.md)

* [list](docs/sdks/collectiontags/README.md#list) - List Tags

#### [issueTracking->collectionTicketComments](docs/sdks/collectionticketcomments/README.md)

* [list](docs/sdks/collectionticketcomments/README.md#list) - List Comments
* [create](docs/sdks/collectionticketcomments/README.md#create) - Create Comment
* [get](docs/sdks/collectionticketcomments/README.md#get) - Get Comment
* [update](docs/sdks/collectionticketcomments/README.md#update) - Update Comment
* [delete](docs/sdks/collectionticketcomments/README.md#delete) - Delete Comment

#### [issueTracking->collectionTickets](docs/sdks/collectiontickets/README.md)

* [list](docs/sdks/collectiontickets/README.md#list) - List Tickets
* [create](docs/sdks/collectiontickets/README.md#create) - Create Ticket
* [get](docs/sdks/collectiontickets/README.md#get) - Get Ticket
* [update](docs/sdks/collectiontickets/README.md#update) - Update Ticket
* [delete](docs/sdks/collectiontickets/README.md#delete) - Delete Ticket

#### [issueTracking->collectionUsers](docs/sdks/collectionusers/README.md)

* [list](docs/sdks/collectionusers/README.md#list) - List Users
* [get](docs/sdks/collectionusers/README.md#get) - Get user

### [sms](docs/sdks/sms/README.md)


#### [sms->messages](docs/sdks/messages/README.md)

* [list](docs/sdks/messages/README.md#list) - List Messages
* [create](docs/sdks/messages/README.md#create) - Create Message
* [get](docs/sdks/messages/README.md#get) - Get Message
* [update](docs/sdks/messages/README.md#update) - Update Message
* [delete](docs/sdks/messages/README.md#delete) - Delete Message

### [vault](docs/sdks/vault/README.md)


#### [vault->connectionCustomMappings](docs/sdks/connectioncustommappings/README.md)

* [list](docs/sdks/connectioncustommappings/README.md#list) - List connection custom mappings

#### [vault->connections](docs/sdks/connections/README.md)

* [list](docs/sdks/connections/README.md#list) - Get all connections
* [get](docs/sdks/connections/README.md#get) - Get connection
* [update](docs/sdks/connections/README.md#update) - Update connection
* [delete](docs/sdks/connections/README.md#delete) - Deletes a connection
* [imports](docs/sdks/connections/README.md#imports) - Import connection
* [token](docs/sdks/connections/README.md#token) - Authorize Access Token

#### [vault->connectionSettings](docs/sdks/connectionsettings/README.md)

* [list](docs/sdks/connectionsettings/README.md#list) - Get resource settings
* [update](docs/sdks/connectionsettings/README.md#update) - Update settings

#### [vault->consumerRequestCounts](docs/sdks/consumerrequestcounts/README.md)

* [list](docs/sdks/consumerrequestcounts/README.md#list) - Consumer request counts

#### [vault->consumers](docs/sdks/consumers/README.md)

* [create](docs/sdks/consumers/README.md#create) - Create consumer
* [list](docs/sdks/consumers/README.md#list) - Get all consumers
* [get](docs/sdks/consumers/README.md#get) - Get consumer
* [update](docs/sdks/consumers/README.md#update) - Update consumer
* [delete](docs/sdks/consumers/README.md#delete) - Delete consumer

#### [vault->createCallback](docs/sdks/createcallback/README.md)

* [state](docs/sdks/createcallback/README.md#state) - Create Callback State

#### [vault->customFields](docs/sdks/customfields/README.md)

* [list](docs/sdks/customfields/README.md#list) - Get resource custom fields

#### [vault->customMappings](docs/sdks/custommappings/README.md)

* [list](docs/sdks/custommappings/README.md#list) - List custom mappings

#### [vault->logs](docs/sdks/logs/README.md)

* [list](docs/sdks/logs/README.md#list) - Get all consumer request logs

#### [vault->sessions](docs/sdks/sessions/README.md)

* [create](docs/sdks/sessions/README.md#create) - Create Session

#### [vault->validateConnection](docs/sdks/validateconnection/README.md)

* [state](docs/sdks/validateconnection/README.md#state) - Validate Connection State

### [webhook](docs/sdks/webhook/README.md)


#### [webhook->eventLogs](docs/sdks/eventlogs/README.md)

* [list](docs/sdks/eventlogs/README.md#list) - List event logs

#### [webhook->webhooks](docs/sdks/webhooks/README.md)

* [list](docs/sdks/webhooks/README.md#list) - List webhook subscriptions
* [create](docs/sdks/webhooks/README.md#create) - Create webhook subscription
* [get](docs/sdks/webhooks/README.md#get) - Get webhook subscription
* [update](docs/sdks/webhooks/README.md#update) - Update webhook subscription
* [delete](docs/sdks/webhooks/README.md#delete) - Delete webhook subscription

</details>
<!-- End Available Resources and Operations [operations] -->

<!-- Start Pagination [pagination] -->
## Pagination

Some of the endpoints in this SDK support pagination. To use pagination, you make your SDK calls as usual, but the
returned object will be a `Generator` instead of an individual response.

Working with generators is as simple as iterating over the responses in a `foreach` loop, and you can see an example below:
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

$responses = $sdk->accounting->taxRates->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```
<!-- End Pagination [pagination] -->

<!-- Start Retries [retries] -->
## Retries

Some of the endpoints in this SDK support retries. If you use the SDK without any configuration, it will fall back to the default retry strategy provided by the API. However, the default retry strategy can be overridden on a per-operation basis, or across the entire SDK.

To change the default retry strategy for a single API call, simply provide an `Options` object built with a `RetryConfig` object to the call:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils\Retry;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

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

$responses = $sdk->accounting->taxRates->list(
    request: $request,
    options: Utils\Options->builder()->setRetryConfig(
        new Retry\RetryConfigBackoff(
            initialInterval: 1,
            maxInterval:     50,
            exponent:        1.1,
            maxElapsedTime:  100,
            retryConnectionErrors: false,
        ))->build()
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

If you'd like to override the default retry strategy for all operations that support retries, you can pass a `RetryConfig` object to the `SDKBuilder->setRetryConfig` function when initializing the SDK:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils\Retry;

$sdk = Unify\Apideck::builder()
    ->setRetryConfig(
        new Retry\RetryConfigBackoff(
            initialInterval: 1,
            maxInterval:     50,
            exponent:        1.1,
            maxElapsedTime:  100,
            retryConnectionErrors: false,
        )
  )
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

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

$responses = $sdk->accounting->taxRates->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```
<!-- End Retries [retries] -->

<!-- Start Error Handling [errors] -->
## Error Handling

Handling errors in this SDK should largely match your expectations. All operations return a response object or throw an exception.

By default an API error will raise a `Errors\APIException` exception, which has the following properties:

| Property       | Type                                    | Description           |
|----------------|-----------------------------------------|-----------------------|
| `$message`     | *string*                                | The error message     |
| `$request`     | *?\Psr\Http\Message\RequestInterface*   | The HTTP request      |
| `$response`    | *?\Psr\Http\Message\ResponseInterface * | The HTTP response     |

When custom error responses are specified for an operation, the SDK may also throw their associated exception. You can refer to respective *Errors* tables in SDK docs for more details on possible exception types for each operation. For example, the `list` method throws the following exceptions:

| Error Type                     | Status Code | Content Type     |
| ------------------------------ | ----------- | ---------------- |
| Errors\BadRequestResponse      | 400         | application/json |
| Errors\UnauthorizedResponse    | 401         | application/json |
| Errors\PaymentRequiredResponse | 402         | application/json |
| Errors\NotFoundResponse        | 404         | application/json |
| Errors\UnprocessableResponse   | 422         | application/json |
| Errors\APIException            | 4XX, 5XX    | \*/\*            |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Errors;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

try {
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

    $responses = $sdk->accounting->taxRates->list(
        request: $request
    );

    foreach ($responses as $response) {
        if ($response->httpMeta->response->getStatusCode() === 200) {
            // handle response
        }
    }
} catch (Errors\BadRequestResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\UnauthorizedResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\PaymentRequiredResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\NotFoundResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\UnprocessableResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\APIException $e) {
    // handle default exception
    throw $e;
}
```
<!-- End Error Handling [errors] -->

<!-- Start Server Selection [server] -->
## Server Selection

### Override Server URL Per-Client

The default server can be overridden globally using the `setServerUrl(string $serverUrl)` builder method when initializing the SDK client instance. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Apideck\Unify;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;

$sdk = Unify\Apideck::builder()
    ->setServerURL('https://unify.apideck.com')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setConsumerId('test-consumer')
    ->setAppId('dSBdXd2H6Mqwfg0atXHXYcysLJE9qyn1VwBtXHX')
    ->build();

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

$responses = $sdk->accounting->taxRates->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->httpMeta->response->getStatusCode() === 200) {
        // handle response
    }
}
```

### Override Server URL Per-Operation

The server URL can also be overridden on a per-operation basis, provided a server list was specified for the operation. For example:
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

$request = new Operations\AccountingAttachmentsUploadRequest(
    referenceType: Components\AttachmentReferenceType::Invoice,
    referenceId: '12345',
    serviceId: 'salesforce',
    requestBody: '0x506D4BD16D',
);

$response = $sdk->accounting->attachments->upload(
    request: $request,
    'https://upload.apideck.com'
);

if ($response->createAttachmentResponse !== null) {
    // handle response
}
```
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

There may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically. Any manual changes added to internal files will be overwritten on the next generation. 
We look forward to hearing your feedback. Feel free to open a PR or an issue with a proof of concept and we'll do our best to include it in a future release.