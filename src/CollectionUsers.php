<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify;

use Apideck\Unify\Hooks\HookContext;
use Apideck\Unify\Models\Components;
use Apideck\Unify\Models\Operations;
use Apideck\Unify\Utils\Options;
use Apideck\Unify\Utils\Retry;
use Apideck\Unify\Utils\Retry\RetryUtils;
use Speakeasy\Serializer\DeserializationContext;

class CollectionUsers
{
    private SDKConfiguration $sdkConfiguration;
    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(public SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }
    /**
     * @param  string  $baseUrl
     * @param  array<string, string>  $urlVariables
     *
     * @return string
     */
    public function getUrl(string $baseUrl, array $urlVariables): string
    {
        $serverDetails = $this->sdkConfiguration->getServerDetails();

        if ($baseUrl == null) {
            $baseUrl = $serverDetails->baseUrl;
        }

        if ($urlVariables == null) {
            $urlVariables = $serverDetails->options;
        }

        return Utils\Utils::templateUrl($baseUrl, $urlVariables);
    }

    /**
     * List Users
     *
     * List Users
     *
     * @param  Operations\IssueTrackingCollectionUsersAllRequest  $request
     * @return Operations\IssueTrackingCollectionUsersAllResponse
     * @throws \Apideck\Unify\Models\Errors\APIException
     */
    private function listIndividual(Operations\IssueTrackingCollectionUsersAllRequest $request, ?Options $options = null): Operations\IssueTrackingCollectionUsersAllResponse
    {
        $retryConfig = null;
        if ($options) {
            $retryConfig = $options->retryConfig;
        }
        if ($retryConfig === null && $this->sdkConfiguration->retryConfig) {
            $retryConfig = $this->sdkConfiguration->retryConfig;
        } else {
            $retryConfig = new Retry\RetryConfigBackoff(
                initialIntervalMs: 500,
                maxIntervalMs: 60000,
                exponent: 1.5,
                maxElapsedTimeMs: 3600000,
                retryConnectionErrors: true,
            );
        }
        $retryCodes = null;
        if ($options) {
            $retryCodes = $options->retryCodes;
        }
        if ($retryCodes === null) {
            $retryCodes = [
                '408',
                '500',
                '502',
                '503',
                '504',
            ];
        }
        $baseUrl = $this->sdkConfiguration->getTemplatedServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/issue-tracking/collections/{collection_id}/users', Operations\IssueTrackingCollectionUsersAllRequest::class, $request, $this->sdkConfiguration->globals);
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];

        $qp = Utils\Utils::getQueryParams(Operations\IssueTrackingCollectionUsersAllRequest::class, $request, $urlOverride, $this->sdkConfiguration->globals);
        $httpOptions = array_merge_recursive($httpOptions, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $httpOptions)) {
            $httpOptions['headers'] = [];
        }
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        $hookContext = new HookContext($this->sdkConfiguration, $baseUrl, 'issueTracking.collectionUsersAll', [], $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions['query'] = Utils\QueryParameters::standardizeQueryParams($httpRequest, $qp);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = RetryUtils::retryWrapper(fn () => $this->sdkConfiguration->client->send($httpRequest, $httpOptions), $retryConfig, $retryCodes);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (Utils\Utils::matchStatusCodes($statusCode, ['400', '401', '402', '404', '422', '4XX', '5XX'])) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if (Utils\Utils::matchStatusCodes($statusCode, ['200'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Apideck\Unify\Models\Components\GetCollectionUsersResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\IssueTrackingCollectionUsersAllResponse(
                    httpMeta: new Components\HTTPMetadata(
                        response: $httpResponse,
                        request: $httpRequest
                    ),
                    getCollectionUsersResponse: $obj
                );
                $sdk = $this;

                $response->next = function () use ($sdk, $responseData, $request): ?Operations\IssueTrackingCollectionUsersAllResponse {
                    $jsonObject = new \JsonPath\JsonObject($responseData);
                    $nextCursor = $jsonObject->get('$.meta.cursors.next');
                    if ($nextCursor == null) {
                        return null;
                    } else {
                        $nextCursor = $nextCursor[0];
                        if ($nextCursor == null) {
                            return null;
                        }
                    }

                    return $sdk->listIndividual(
                        request: new Operations\IssueTrackingCollectionUsersAllRequest(
                            collectionId: $request != null ? $request->collectionId : '',
                            raw: $request != null ? $request->raw : null,
                            consumerId: $request != null ? $request->consumerId : null,
                            appId: $request != null ? $request->appId : null,
                            serviceId: $request != null ? $request->serviceId : null,
                            cursor: $nextCursor,
                            limit: $request != null ? $request->limit : null,
                            passThrough: $request != null ? $request->passThrough : null,
                            fields: $request != null ? $request->fields : null,
                        ),
                    );
                };


                return $response;
            } else {
                throw new \Apideck\Unify\Models\Errors\APIException('Unknown content type received', $httpRequest, $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['400'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Apideck\Unify\Models\Errors\BadRequestResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Apideck\Unify\Models\Errors\APIException('Unknown content type received', $httpRequest, $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['401'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Apideck\Unify\Models\Errors\UnauthorizedResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Apideck\Unify\Models\Errors\APIException('Unknown content type received', $httpRequest, $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['402'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Apideck\Unify\Models\Errors\PaymentRequiredResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Apideck\Unify\Models\Errors\APIException('Unknown content type received', $httpRequest, $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['404'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Apideck\Unify\Models\Errors\NotFoundResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Apideck\Unify\Models\Errors\APIException('Unknown content type received', $httpRequest, $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['422'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Apideck\Unify\Models\Errors\UnprocessableResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Apideck\Unify\Models\Errors\APIException('Unknown content type received', $httpRequest, $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['4XX'])) {
            throw new \Apideck\Unify\Models\Errors\APIException('API error occurred', $httpRequest, $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['5XX'])) {
            throw new \Apideck\Unify\Models\Errors\APIException('API error occurred', $httpRequest, $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Apideck\Unify\Models\Components\UnexpectedErrorResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\IssueTrackingCollectionUsersAllResponse(
                    httpMeta: new Components\HTTPMetadata(
                        response: $httpResponse,
                        request: $httpRequest
                    ),
                    unexpectedErrorResponse: $obj
                );
                $sdk = $this;

                $response->next = function () use ($sdk, $responseData, $request): ?Operations\IssueTrackingCollectionUsersAllResponse {
                    $jsonObject = new \JsonPath\JsonObject($responseData);
                    $nextCursor = $jsonObject->get('$.meta.cursors.next');
                    if ($nextCursor == null) {
                        return null;
                    } else {
                        $nextCursor = $nextCursor[0];
                        if ($nextCursor == null) {
                            return null;
                        }
                    }

                    return $sdk->listIndividual(
                        request: new Operations\IssueTrackingCollectionUsersAllRequest(
                            collectionId: $request != null ? $request->collectionId : '',
                            raw: $request != null ? $request->raw : null,
                            consumerId: $request != null ? $request->consumerId : null,
                            appId: $request != null ? $request->appId : null,
                            serviceId: $request != null ? $request->serviceId : null,
                            cursor: $nextCursor,
                            limit: $request != null ? $request->limit : null,
                            passThrough: $request != null ? $request->passThrough : null,
                            fields: $request != null ? $request->fields : null,
                        ),
                    );
                };


                return $response;
            } else {
                throw new \Apideck\Unify\Models\Errors\APIException('Unknown content type received', $httpRequest, $httpResponse);
            }
        }
    }
    /**
     * List Users
     *
     * List Users
     *
     * @param  Operations\IssueTrackingCollectionUsersAllRequest  $request
     * @return \Generator<Operations\IssueTrackingCollectionUsersAllResponse>
     * @throws \Apideck\Unify\Models\Errors\APIException
     */
    public function list(Operations\IssueTrackingCollectionUsersAllRequest $request, ?Options $options = null): \Generator
    {
        $res = $this->listIndividual($request, $options);
        while ($res !== null) {
            yield $res;
            $res = $res->next($res);
        }
    }

    /**
     * Get user
     *
     * Get user
     *
     * @param  Operations\IssueTrackingCollectionUsersOneRequest  $request
     * @return Operations\IssueTrackingCollectionUsersOneResponse
     * @throws \Apideck\Unify\Models\Errors\APIException
     */
    public function get(Operations\IssueTrackingCollectionUsersOneRequest $request, ?Options $options = null): Operations\IssueTrackingCollectionUsersOneResponse
    {
        $retryConfig = null;
        if ($options) {
            $retryConfig = $options->retryConfig;
        }
        if ($retryConfig === null && $this->sdkConfiguration->retryConfig) {
            $retryConfig = $this->sdkConfiguration->retryConfig;
        } else {
            $retryConfig = new Retry\RetryConfigBackoff(
                initialIntervalMs: 500,
                maxIntervalMs: 60000,
                exponent: 1.5,
                maxElapsedTimeMs: 3600000,
                retryConnectionErrors: true,
            );
        }
        $retryCodes = null;
        if ($options) {
            $retryCodes = $options->retryCodes;
        }
        if ($retryCodes === null) {
            $retryCodes = [
                '408',
                '500',
                '502',
                '503',
                '504',
            ];
        }
        $baseUrl = $this->sdkConfiguration->getTemplatedServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/issue-tracking/collections/{collection_id}/users/{id}', Operations\IssueTrackingCollectionUsersOneRequest::class, $request, $this->sdkConfiguration->globals);
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];

        $qp = Utils\Utils::getQueryParams(Operations\IssueTrackingCollectionUsersOneRequest::class, $request, $urlOverride, $this->sdkConfiguration->globals);
        $httpOptions = array_merge_recursive($httpOptions, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $httpOptions)) {
            $httpOptions['headers'] = [];
        }
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        $hookContext = new HookContext($this->sdkConfiguration, $baseUrl, 'issueTracking.collectionUsersOne', [], $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions['query'] = Utils\QueryParameters::standardizeQueryParams($httpRequest, $qp);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = RetryUtils::retryWrapper(fn () => $this->sdkConfiguration->client->send($httpRequest, $httpOptions), $retryConfig, $retryCodes);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (Utils\Utils::matchStatusCodes($statusCode, ['400', '401', '402', '404', '422', '4XX', '5XX'])) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if (Utils\Utils::matchStatusCodes($statusCode, ['200'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Apideck\Unify\Models\Components\GetCollectionUserResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\IssueTrackingCollectionUsersOneResponse(
                    httpMeta: new Components\HTTPMetadata(
                        response: $httpResponse,
                        request: $httpRequest
                    ),
                    getCollectionUserResponse: $obj
                );

                return $response;
            } else {
                throw new \Apideck\Unify\Models\Errors\APIException('Unknown content type received', $httpRequest, $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['400'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Apideck\Unify\Models\Errors\BadRequestResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Apideck\Unify\Models\Errors\APIException('Unknown content type received', $httpRequest, $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['401'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Apideck\Unify\Models\Errors\UnauthorizedResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Apideck\Unify\Models\Errors\APIException('Unknown content type received', $httpRequest, $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['402'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Apideck\Unify\Models\Errors\PaymentRequiredResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Apideck\Unify\Models\Errors\APIException('Unknown content type received', $httpRequest, $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['404'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Apideck\Unify\Models\Errors\NotFoundResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Apideck\Unify\Models\Errors\APIException('Unknown content type received', $httpRequest, $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['422'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Apideck\Unify\Models\Errors\UnprocessableResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Apideck\Unify\Models\Errors\APIException('Unknown content type received', $httpRequest, $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['4XX'])) {
            throw new \Apideck\Unify\Models\Errors\APIException('API error occurred', $httpRequest, $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['5XX'])) {
            throw new \Apideck\Unify\Models\Errors\APIException('API error occurred', $httpRequest, $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Apideck\Unify\Models\Components\UnexpectedErrorResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\IssueTrackingCollectionUsersOneResponse(
                    httpMeta: new Components\HTTPMetadata(
                        response: $httpResponse,
                        request: $httpRequest
                    ),
                    unexpectedErrorResponse: $obj
                );

                return $response;
            } else {
                throw new \Apideck\Unify\Models\Errors\APIException('Unknown content type received', $httpRequest, $httpResponse);
            }
        }
    }

}