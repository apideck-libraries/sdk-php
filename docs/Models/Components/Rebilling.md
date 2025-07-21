# Rebilling

Rebilling metadata for this line item.


## Fields

| Field                                                               | Type                                                                | Required                                                            | Description                                                         | Example                                                             |
| ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- |
| `rebillable`                                                        | *?bool*                                                             | :heavy_minus_sign:                                                  | Whether this line item is eligible for rebilling.                   | true                                                                |
| `rebillStatus`                                                      | [?Components\RebillStatus](../../Models/Components/RebillStatus.md) | :heavy_minus_sign:                                                  | Status of the rebilling process for this line item.                 | billed                                                              |
| `linkedTransactionId`                                               | *?string*                                                           | :heavy_minus_sign:                                                  | The ID of the transaction this line item was rebilled to.           | txn_abc123                                                          |
| `linkedTransactionLineId`                                           | *?string*                                                           | :heavy_minus_sign:                                                  | The ID of the line item in the rebilled transaction.                | line_xyz789                                                         |