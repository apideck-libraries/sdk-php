# Email


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `id`                                                          | *?string*                                                     | :heavy_minus_sign:                                            | Unique identifier for the email address                       | 123                                                           |
| `email`                                                       | *?string*                                                     | :heavy_minus_sign:                                            | Email address                                                 | elon@musk.com                                                 |
| `type`                                                        | [?Components\EmailType](../../Models/Components/EmailType.md) | :heavy_minus_sign:                                            | Email type                                                    | primary                                                       |
| `additionalProperties`                                        | array<string, *mixed*>                                        | :heavy_minus_sign:                                            | N/A                                                           |                                                               |