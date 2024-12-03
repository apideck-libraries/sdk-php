# BalanceSheetUncategorizedItemsAccount

A balance sheet uncategorized items account represents the financial position of a company at a specific point in time.


## Fields

| Field                                  | Type                                   | Required                               | Description                            | Example                                |
| -------------------------------------- | -------------------------------------- | -------------------------------------- | -------------------------------------- | -------------------------------------- |
| `accountId`                            | *?string*                              | :heavy_minus_sign:                     | The unique identifier for the account. | 123456                                 |
| `code`                                 | *?string*                              | :heavy_minus_sign:                     | The account code of the account        | 1100                                   |
| `name`                                 | *?string*                              | :heavy_minus_sign:                     | The name of the account.               | Current assets                         |
| `value`                                | *?float*                               | :heavy_minus_sign:                     | The amount or value of the item        | 1000                                   |
| `items`                                | *mixed*                                | :heavy_minus_sign:                     | A list of balance sheet accounts       |                                        |