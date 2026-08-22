# RefundType

Type of refund. `refund_receipt` for itemized refunds with product/service lines and payment (QBO RefundReceipt; also NetSuite's apply-list-based CustomerRefund). `cash_refund` for cash-out refunds with GL distribution or allocations (Sage Intacct). `credit_note_refund` for refunds applied against a credit note (Zoho Books). `sale_refund` for itemized refunds tied to a cash sale or return authorization, without an apply-list (NetSuite CashRefund) — NetSuite's apply-list-based CustomerRefund reports as `refund_receipt` instead.


## Values

| Name               | Value              |
| ------------------ | ------------------ |
| `RefundReceipt`    | refund_receipt     |
| `CashRefund`       | cash_refund        |
| `CreditNoteRefund` | credit_note_refund |
| `SaleRefund`       | sale_refund        |