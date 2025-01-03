# GetCollectionResponse

Get a Collection


## Fields

| Field                                                          | Type                                                           | Required                                                       | Description                                                    | Example                                                        |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `statusCode`                                                   | *int*                                                          | :heavy_check_mark:                                             | HTTP Response Status Code                                      | 200                                                            |
| `status`                                                       | *string*                                                       | :heavy_check_mark:                                             | HTTP Response Status                                           | OK                                                             |
| `service`                                                      | *string*                                                       | :heavy_check_mark:                                             | Apideck ID of service provider                                 | jira                                                           |
| `resource`                                                     | *string*                                                       | :heavy_check_mark:                                             | Unified API resource name                                      | Tickets                                                        |
| `operation`                                                    | *string*                                                       | :heavy_check_mark:                                             | Operation performed                                            | one                                                            |
| `data`                                                         | [Components\Collection](../../Models/Components/Collection.md) | :heavy_check_mark:                                             | N/A                                                            |                                                                |