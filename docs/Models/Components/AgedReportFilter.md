# AgedReportFilter


## Fields

| Field                                                     | Type                                                      | Required                                                  | Description                                               | Example                                                   |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| `customerId`                                              | *?string*                                                 | :heavy_minus_sign:                                        | Filter by customer id                                     | 123abc                                                    |
| `supplierId`                                              | *?string*                                                 | :heavy_minus_sign:                                        | Filter by supplier id                                     | 123abc                                                    |
| `reportAsOfDate`                                          | *?string*                                                 | :heavy_minus_sign:                                        | The cutoff date for considering transactions              | 2024-01-01                                                |
| `periodCount`                                             | *?int*                                                    | :heavy_minus_sign:                                        | Number of periods to split the aged creditors report into | 3                                                         |
| `periodLength`                                            | *?int*                                                    | :heavy_minus_sign:                                        | Length of each period in days                             | 30                                                        |