# GetSalesOrderResponse

Sales Orders


## Fields

| Field                                                          | Type                                                           | Required                                                       | Description                                                    | Example                                                        |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `statusCode`                                                   | *int*                                                          | :heavy_check_mark:                                             | HTTP Response Status Code                                      | 200                                                            |
| `status`                                                       | *string*                                                       | :heavy_check_mark:                                             | HTTP Response Status                                           | OK                                                             |
| `service`                                                      | *string*                                                       | :heavy_check_mark:                                             | Apideck ID of service provider                                 | acumatica                                                      |
| `resource`                                                     | *string*                                                       | :heavy_check_mark:                                             | Unified API resource name                                      | SalesOrders                                                    |
| `operation`                                                    | *string*                                                       | :heavy_check_mark:                                             | Operation performed                                            | one                                                            |
| `data`                                                         | [Components\SalesOrder](../../Models/Components/SalesOrder.md) | :heavy_check_mark:                                             | N/A                                                            |                                                                |
| `meta`                                                         | [?Components\Meta](../../Models/Components/Meta.md)            | :heavy_minus_sign:                                             | Response metadata                                              |                                                                |