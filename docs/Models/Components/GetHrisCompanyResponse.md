# GetHrisCompanyResponse

Company


## Fields

| Field                                                            | Type                                                             | Required                                                         | Description                                                      | Example                                                          |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `statusCode`                                                     | *int*                                                            | :heavy_check_mark:                                               | HTTP Response Status Code                                        | 200                                                              |
| `status`                                                         | *string*                                                         | :heavy_check_mark:                                               | HTTP Response Status                                             | OK                                                               |
| `service`                                                        | *string*                                                         | :heavy_check_mark:                                               | Apideck ID of service provider                                   | undefined                                                        |
| `resource`                                                       | *string*                                                         | :heavy_check_mark:                                               | Unified API resource name                                        | Companies                                                        |
| `operation`                                                      | *string*                                                         | :heavy_check_mark:                                               | Operation performed                                              | one                                                              |
| `data`                                                           | [Components\HrisCompany](../../Models/Components/HrisCompany.md) | :heavy_check_mark:                                               | N/A                                                              |                                                                  |