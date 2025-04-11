# PaymentAllocations


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `id`                                                          | *?string*                                                     | :heavy_minus_sign:                                            | ID of the payment                                             | 123456                                                        |
| `allocatedAmount`                                             | *?float*                                                      | :heavy_minus_sign:                                            | Amount of the payment allocated to the invoice                | 1000                                                          |
| `date`                                                        | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | Date of the payment                                           | 2020-09-30T07:43:32.000Z                                      |