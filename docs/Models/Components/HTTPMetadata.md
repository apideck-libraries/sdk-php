# HTTPMetadata


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `response`                                                                                                   | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_check_mark:                                                                                           | Raw HTTP response; suitable for custom response parsing                                                      |
| `request`                                                                                                    | *\Psr\Http\Message\RequestInterface*                                                                         | :heavy_check_mark:                                                                                           | Raw HTTP request; suitable for debugging                                                                     |