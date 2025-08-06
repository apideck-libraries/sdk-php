# GetQuoteResponse

Quotes


## Fields

| Field                                                | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `statusCode`                                         | *int*                                                | :heavy_check_mark:                                   | HTTP Response Status Code                            | 200                                                  |
| `status`                                             | *string*                                             | :heavy_check_mark:                                   | HTTP Response Status                                 | OK                                                   |
| `service`                                            | *string*                                             | :heavy_check_mark:                                   | Apideck ID of service provider                       | quickbooks                                           |
| `resource`                                           | *string*                                             | :heavy_check_mark:                                   | Unified API resource name                            | Quotes                                               |
| `operation`                                          | *string*                                             | :heavy_check_mark:                                   | Operation performed                                  | one                                                  |
| `data`                                               | [Components\Quote](../../Models/Components/Quote.md) | :heavy_check_mark:                                   | N/A                                                  |                                                      |