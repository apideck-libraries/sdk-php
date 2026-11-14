# Error

Why the operation is unsupported. Absent when there is no reason to give (the connector does not implement the operation). A string when the connector states a reason. An object `{ reason, error }` when a batch request is refused: `reason` is a stable code, `error` a human-readable explanation.


## Supported Types

### `string`

```php
/**
* @var string
*/
string $value = /* values here */
```

### `Errors\Error2`

```php
/**
* @var \Apideck\Unify\Models\Errors\Error2
*/
Errors\Error2 $value = /* values here */
```

