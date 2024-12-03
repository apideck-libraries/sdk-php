# GetApisResponse

Apis


## Fields

| Field                                                       | Type                                                        | Required                                                    | Description                                                 | Example                                                     |
| ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- |
| `statusCode`                                                | *int*                                                       | :heavy_check_mark:                                          | HTTP Response Status Code                                   | 200                                                         |
| `status`                                                    | *string*                                                    | :heavy_check_mark:                                          | HTTP Response Status                                        | OK                                                          |
| `data`                                                      | array<[Components\Api](../../Models/Components/Api.md)>     | :heavy_check_mark:                                          | N/A                                                         |                                                             |
| `meta`                                                      | [?Components\Meta](../../Models/Components/Meta.md)         | :heavy_minus_sign:                                          | Response metadata                                           |                                                             |
| `links`                                                     | [?Components\Links](../../Models/Components/Links.md)       | :heavy_minus_sign:                                          | Links to navigate to previous or next pages through the API |                                                             |