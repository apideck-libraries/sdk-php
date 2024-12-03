# ConnectorEvent

Unify event that is supported on the connector. Events are delivered via Webhooks.


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       | Example                                                           |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `eventType`                                                       | *?string*                                                         | :heavy_minus_sign:                                                | Unify event type                                                  | employee.created                                                  |
| `eventSource`                                                     | [?Components\EventSource](../../Models/Components/EventSource.md) | :heavy_minus_sign:                                                | Unify event source                                                | native                                                            |
| `downstreamEventType`                                             | *?string*                                                         | :heavy_minus_sign:                                                | Downstream event type                                             | person_created                                                    |
| `resources`                                                       | array<*string*>                                                   | :heavy_minus_sign:                                                | N/A                                                               |                                                                   |
| `entityType`                                                      | *?string*                                                         | :heavy_minus_sign:                                                | Unify entity type                                                 | employee                                                          |