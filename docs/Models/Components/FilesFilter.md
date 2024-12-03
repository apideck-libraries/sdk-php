# FilesFilter


## Fields

| Field                                                              | Type                                                               | Required                                                           | Description                                                        | Example                                                            |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `driveId`                                                          | *?string*                                                          | :heavy_minus_sign:                                                 | ID of the drive to filter on                                       | 1234                                                               |
| `folderId`                                                         | *?string*                                                          | :heavy_minus_sign:                                                 | ID of the folder to filter on. The root folder has an alias "root" | root                                                               |
| `shared`                                                           | *?bool*                                                            | :heavy_minus_sign:                                                 | Only return files and folders that are shared                      | true                                                               |