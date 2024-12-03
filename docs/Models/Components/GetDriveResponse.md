# GetDriveResponse

Drives


## Fields

| Field                                                | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `statusCode`                                         | *int*                                                | :heavy_check_mark:                                   | HTTP Response Status Code                            | 200                                                  |
| `status`                                             | *string*                                             | :heavy_check_mark:                                   | HTTP Response Status                                 | OK                                                   |
| `service`                                            | *string*                                             | :heavy_check_mark:                                   | Apideck ID of service provider                       | google-drive                                         |
| `resource`                                           | *string*                                             | :heavy_check_mark:                                   | Unified API resource name                            | Drives                                               |
| `operation`                                          | *string*                                             | :heavy_check_mark:                                   | Operation performed                                  | one                                                  |
| `data`                                               | [Components\Drive](../../Models/Components/Drive.md) | :heavy_check_mark:                                   | N/A                                                  |                                                      |