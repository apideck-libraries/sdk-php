# InvoicesFilter


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `updatedSince`                                                | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | N/A                                                           | 2020-09-30T07:43:32.000Z                                      |
| `createdSince`                                                | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | N/A                                                           | 2020-09-30T07:43:32.000Z                                      |
| `number`                                                      | *?string*                                                     | :heavy_minus_sign:                                            | Invoice number to search for                                  | OIT00546                                                      |
| `supplierId`                                                  | *?string*                                                     | :heavy_minus_sign:                                            | Supplier ID to filter invoices by                             | 123                                                           |