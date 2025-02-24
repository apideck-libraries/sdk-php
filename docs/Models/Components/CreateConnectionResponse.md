# CreateConnectionResponse

Connection created


## Fields

| Field                                                                   | Type                                                                    | Required                                                                | Description                                                             | Example                                                                 |
| ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- |
| `statusCode`                                                            | *int*                                                                   | :heavy_check_mark:                                                      | HTTP Response Status Code                                               | 201                                                                     |
| `status`                                                                | *string*                                                                | :heavy_check_mark:                                                      | HTTP Response Status                                                    | OK                                                                      |
| `data`                                                                  | [Components\Connection](../../Models/Components/Connection.md)          | :heavy_check_mark:                                                      | N/A                                                                     |                                                                         |
| `raw`                                                                   | array<string, *mixed*>                                                  | :heavy_minus_sign:                                                      | Raw response from the integration when raw=true query param is provided |                                                                         |