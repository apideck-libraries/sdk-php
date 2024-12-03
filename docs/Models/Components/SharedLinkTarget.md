# SharedLinkTarget


## Fields

| Field                                                       | Type                                                        | Required                                                    | Description                                                 | Example                                                     |
| ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- |
| `id`                                                        | *string*                                                    | :heavy_check_mark:                                          | A unique identifier for an object.                          | 12345                                                       |
| `name`                                                      | *?string*                                                   | :heavy_minus_sign:                                          | The name of the file                                        | sample.jpg                                                  |
| `type`                                                      | [?Components\FileType](../../Models/Components/FileType.md) | :heavy_minus_sign:                                          | The type of resource. Could be file, folder or url          | file                                                        |