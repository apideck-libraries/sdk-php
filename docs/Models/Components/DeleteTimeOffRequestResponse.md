# DeleteTimeOffRequestResponse

TimeOffRequests


## Fields

| Field                                                        | Type                                                         | Required                                                     | Description                                                  | Example                                                      |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `statusCode`                                                 | *int*                                                        | :heavy_check_mark:                                           | HTTP Response Status Code                                    | 200                                                          |
| `status`                                                     | *string*                                                     | :heavy_check_mark:                                           | HTTP Response Status                                         | OK                                                           |
| `service`                                                    | *string*                                                     | :heavy_check_mark:                                           | Apideck ID of service provider                               | bamboohr                                                     |
| `resource`                                                   | *string*                                                     | :heavy_check_mark:                                           | Unified API resource name                                    | time-off-requests                                            |
| `operation`                                                  | *string*                                                     | :heavy_check_mark:                                           | Operation performed                                          | delete                                                       |
| `data`                                                       | [Components\UnifiedId](../../Models/Components/UnifiedId.md) | :heavy_check_mark:                                           | N/A                                                          |                                                              |