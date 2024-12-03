# GetNoteResponse

Note


## Fields

| Field                                              | Type                                               | Required                                           | Description                                        | Example                                            |
| -------------------------------------------------- | -------------------------------------------------- | -------------------------------------------------- | -------------------------------------------------- | -------------------------------------------------- |
| `statusCode`                                       | *int*                                              | :heavy_check_mark:                                 | HTTP Response Status Code                          | 200                                                |
| `status`                                           | *string*                                           | :heavy_check_mark:                                 | HTTP Response Status                               | OK                                                 |
| `service`                                          | *string*                                           | :heavy_check_mark:                                 | Apideck ID of service provider                     | zoho-crm                                           |
| `resource`                                         | *string*                                           | :heavy_check_mark:                                 | Unified API resource name                          | notes                                              |
| `operation`                                        | *string*                                           | :heavy_check_mark:                                 | Operation performed                                | one                                                |
| `data`                                             | [Components\Note](../../Models/Components/Note.md) | :heavy_check_mark:                                 | N/A                                                |                                                    |