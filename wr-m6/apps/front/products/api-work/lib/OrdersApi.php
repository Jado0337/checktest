<?php
/**
 * OrdersApi
 * PHP version 5
 *
 * @category Class
 * @package  RoyalMail\ClickAndDrop\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelShipper & Royal Mail Public API
 *
 * Import your orders, retrieve your orders and generate labels.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.24-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RoyalMail\ClickAndDrop\Rest\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use RoyalMail\ClickAndDrop\Rest\Api\ApiException;
use RoyalMail\ClickAndDrop\Rest\Api\Configuration;
use RoyalMail\ClickAndDrop\Rest\Api\HeaderSelector;
use RoyalMail\ClickAndDrop\Rest\Api\ObjectSerializer;

/**
 * OrdersApi Class Doc Comment
 *
 * @category Class
 * @package  RoyalMail\ClickAndDrop\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrdersApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createOrdersAsync
     *
     * Create orders
     *
     * @param  \RoyalMail\ClickAndDrop\Rest\Api\Models\CreateOrdersRequest $request request (required)
     *
     * @throws \RoyalMail\ClickAndDrop\Rest\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \RoyalMail\ClickAndDrop\Rest\Api\Models\CreateOrdersResponse
     */
    public function createOrdersAsync($request)
    {
        list($response) = $this->createOrdersAsyncWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation createOrdersAsyncWithHttpInfo
     *
     * Create orders
     *
     * @param  \RoyalMail\ClickAndDrop\Rest\Api\Models\CreateOrdersRequest $request (required)
     *
     * @throws \RoyalMail\ClickAndDrop\Rest\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \RoyalMail\ClickAndDrop\Rest\Api\Models\CreateOrdersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createOrdersAsyncWithHttpInfo($request)
    {
        $returnType = '\RoyalMail\ClickAndDrop\Rest\Api\Models\CreateOrdersResponse';
        $request = $this->createOrdersAsyncRequest($request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\ClickAndDrop\Rest\Api\Models\CreateOrdersResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\ClickAndDrop\Rest\Api\Models\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\ClickAndDrop\Rest\Api\Models\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createOrdersAsyncAsync
     *
     * Create orders
     *
     * @param  \RoyalMail\ClickAndDrop\Rest\Api\Models\CreateOrdersRequest $request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrdersAsyncAsync($request)
    {
        return $this->createOrdersAsyncAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createOrdersAsyncAsyncWithHttpInfo
     *
     * Create orders
     *
     * @param  \RoyalMail\ClickAndDrop\Rest\Api\Models\CreateOrdersRequest $request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrdersAsyncAsyncWithHttpInfo($request)
    {
        $returnType = '\RoyalMail\ClickAndDrop\Rest\Api\Models\CreateOrdersResponse';
        $request = $this->createOrdersAsyncRequest($request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createOrdersAsync'
     *
     * @param  \RoyalMail\ClickAndDrop\Rest\Api\Models\CreateOrdersRequest $request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createOrdersAsyncRequest($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling createOrdersAsync'
            );
        }

        $resourcePath = '/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getOrdersAsync
     *
     * Retrieve orders
     *
     * @param  string $orderIdentifiers Order Identifier or several Order Identifiers separated by semicolon (required)
     *
     * @throws \RoyalMail\ClickAndDrop\Rest\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \RoyalMail\ClickAndDrop\Rest\Api\Models\GetOrderInfoResource[]
     */
    public function getOrdersAsync($orderIdentifiers)
    {
        list($response) = $this->getOrdersAsyncWithHttpInfo($orderIdentifiers);
        return $response;
    }

    /**
     * Operation getOrdersAsyncWithHttpInfo
     *
     * Retrieve orders
     *
     * @param  string $orderIdentifiers Order Identifier or several Order Identifiers separated by semicolon (required)
     *
     * @throws \RoyalMail\ClickAndDrop\Rest\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \RoyalMail\ClickAndDrop\Rest\Api\Models\GetOrderInfoResource[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrdersAsyncWithHttpInfo($orderIdentifiers)
    {
        $returnType = '\RoyalMail\ClickAndDrop\Rest\Api\Models\GetOrderInfoResource[]';
        $request = $this->getOrdersAsyncRequest($orderIdentifiers);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\ClickAndDrop\Rest\Api\Models\GetOrderInfoResource[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\ClickAndDrop\Rest\Api\Models\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\ClickAndDrop\Rest\Api\Models\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOrdersAsyncAsync
     *
     * Retrieve orders
     *
     * @param  string $orderIdentifiers Order Identifier or several Order Identifiers separated by semicolon (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrdersAsyncAsync($orderIdentifiers)
    {
        return $this->getOrdersAsyncAsyncWithHttpInfo($orderIdentifiers)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrdersAsyncAsyncWithHttpInfo
     *
     * Retrieve orders
     *
     * @param  string $orderIdentifiers Order Identifier or several Order Identifiers separated by semicolon (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrdersAsyncAsyncWithHttpInfo($orderIdentifiers)
    {
        $returnType = '\RoyalMail\ClickAndDrop\Rest\Api\Models\GetOrderInfoResource[]';
        $request = $this->getOrdersAsyncRequest($orderIdentifiers);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getOrdersAsync'
     *
     * @param  string $orderIdentifiers Order Identifier or several Order Identifiers separated by semicolon (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrdersAsyncRequest($orderIdentifiers)
    {
        // verify the required parameter 'orderIdentifiers' is set
        if ($orderIdentifiers === null || (is_array($orderIdentifiers) && count($orderIdentifiers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $orderIdentifiers when calling getOrdersAsync'
            );
        }

        $resourcePath = '/orders/{orderIdentifiers}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($orderIdentifiers !== null) {
            $resourcePath = str_replace(
                '{' . 'orderIdentifiers' . '}',
                ObjectSerializer::toPathValue($orderIdentifiers),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getOrdersWithDetailsAsync
     *
     * Retrieve orders details
     *
     * @param  string $orderIdentifiers Order Identifier or several Order Identifiers separated by semicolon (required)
     *
     * @throws \RoyalMail\ClickAndDrop\Rest\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \RoyalMail\ClickAndDrop\Rest\Api\Models\GetOrderDetailsResource[]
     */
    public function getOrdersWithDetailsAsync($orderIdentifiers)
    {
        list($response) = $this->getOrdersWithDetailsAsyncWithHttpInfo($orderIdentifiers);
        return $response;
    }

    /**
     * Operation getOrdersWithDetailsAsyncWithHttpInfo
     *
     * Retrieve orders details
     *
     * @param  string $orderIdentifiers Order Identifier or several Order Identifiers separated by semicolon (required)
     *
     * @throws \RoyalMail\ClickAndDrop\Rest\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \RoyalMail\ClickAndDrop\Rest\Api\Models\GetOrderDetailsResource[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrdersWithDetailsAsyncWithHttpInfo($orderIdentifiers)
    {
        $returnType = '\RoyalMail\ClickAndDrop\Rest\Api\Models\GetOrderDetailsResource[]';
        $request = $this->getOrdersWithDetailsAsyncRequest($orderIdentifiers);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\ClickAndDrop\Rest\Api\Models\GetOrderDetailsResource[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\ClickAndDrop\Rest\Api\Models\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RoyalMail\ClickAndDrop\Rest\Api\Models\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOrdersWithDetailsAsyncAsync
     *
     * Retrieve orders details
     *
     * @param  string $orderIdentifiers Order Identifier or several Order Identifiers separated by semicolon (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrdersWithDetailsAsyncAsync($orderIdentifiers)
    {
        return $this->getOrdersWithDetailsAsyncAsyncWithHttpInfo($orderIdentifiers)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrdersWithDetailsAsyncAsyncWithHttpInfo
     *
     * Retrieve orders details
     *
     * @param  string $orderIdentifiers Order Identifier or several Order Identifiers separated by semicolon (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrdersWithDetailsAsyncAsyncWithHttpInfo($orderIdentifiers)
    {
        $returnType = '\RoyalMail\ClickAndDrop\Rest\Api\Models\GetOrderDetailsResource[]';
        $request = $this->getOrdersWithDetailsAsyncRequest($orderIdentifiers);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getOrdersWithDetailsAsync'
     *
     * @param  string $orderIdentifiers Order Identifier or several Order Identifiers separated by semicolon (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrdersWithDetailsAsyncRequest($orderIdentifiers)
    {
        // verify the required parameter 'orderIdentifiers' is set
        if ($orderIdentifiers === null || (is_array($orderIdentifiers) && count($orderIdentifiers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $orderIdentifiers when calling getOrdersWithDetailsAsync'
            );
        }

        $resourcePath = '/orders/{orderIdentifiers}/full';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($orderIdentifiers !== null) {
            $resourcePath = str_replace(
                '{' . 'orderIdentifiers' . '}',
                ObjectSerializer::toPathValue($orderIdentifiers),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}