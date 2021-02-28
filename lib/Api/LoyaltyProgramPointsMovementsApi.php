<?php
/**
 * LoyaltyProgramPointsMovementsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Scloby Api
 *
 * <a href='https://developer.scloby.com/apidoc/assets/documentation.json' target='_blank'>https://developer.scloby.com/apidoc/assets/documentation.json</a>  **Introduction**  **The authentication token is issued via Oauth2 standard ( https://oauth.net)**    You can apply for a Scloby test account on our developer portal **https://developer.scloby.com**   Here is your **ClientId** and **ClientSecret** for tests:    **client_id**: SclobyApiDocs    **client_secret**: DdyPNPvfPOGa0Izjct0C   **All data is JSON format, and the Content-Type header of POST/PUT request must be set to application/json.**  **Search Parameters**  You can perform a search in a collection using all first level properties in combination with some parameter, or specifying a value:    property = VALUE if you are searching for all items with a specific property value    property_since = MIN_VALUE if you are searching for all items with property value greater (or equal) than MIN_VALUE     property_max   = MAX_VALUE if you are searching for all items with property value smaller (or equal)than MAX_VALUE   property_like  = LIKE_VALUE if you are searching for a substring content.   You can use property_since and property_max in order to simulate **between** operator If you are using *equal* operator, all other operators for that parameter *will be ingnored*   If you are using _max or _since operator in strings, the alphabetical ordering will be used
 *
 * OpenAPI spec version: 2.0.0
 * Contact: dev@scloby.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * LoyaltyProgramPointsMovementsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyProgramPointsMovementsApi
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
     * Operation fidelitiesMovementsGet
     *
     * Get All Fidelity Movements
     *
     * @param  bool $pagination Pagination parameter (optional)
     * @param  int $per_page Results_per_page (optional)
     * @param  int $page PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\ChainsFidelitiesMovements
     */
    public function fidelitiesMovementsGet($pagination = null, $per_page = null, $page = null)
    {
        list($response) = $this->fidelitiesMovementsGetWithHttpInfo($pagination, $per_page, $page);
        return $response;
    }

    /**
     * Operation fidelitiesMovementsGetWithHttpInfo
     *
     * Get All Fidelity Movements
     *
     * @param  bool $pagination Pagination parameter (optional)
     * @param  int $per_page Results_per_page (optional)
     * @param  int $page PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\ChainsFidelitiesMovements, HTTP status code, HTTP response headers (array of strings)
     */
    public function fidelitiesMovementsGetWithHttpInfo($pagination = null, $per_page = null, $page = null)
    {
        $returnType = '\Swagger\Client\Model\ChainsFidelitiesMovements';
        $request = $this->fidelitiesMovementsGetRequest($pagination, $per_page, $page);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\Swagger\Client\Model\ChainsFidelitiesMovements',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation fidelitiesMovementsGetAsync
     *
     * Get All Fidelity Movements
     *
     * @param  bool $pagination Pagination parameter (optional)
     * @param  int $per_page Results_per_page (optional)
     * @param  int $page PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fidelitiesMovementsGetAsync($pagination = null, $per_page = null, $page = null)
    {
        return $this->fidelitiesMovementsGetAsyncWithHttpInfo($pagination, $per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fidelitiesMovementsGetAsyncWithHttpInfo
     *
     * Get All Fidelity Movements
     *
     * @param  bool $pagination Pagination parameter (optional)
     * @param  int $per_page Results_per_page (optional)
     * @param  int $page PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fidelitiesMovementsGetAsyncWithHttpInfo($pagination = null, $per_page = null, $page = null)
    {
        $returnType = '\Swagger\Client\Model\ChainsFidelitiesMovements';
        $request = $this->fidelitiesMovementsGetRequest($pagination, $per_page, $page);

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
     * Create request for operation 'fidelitiesMovementsGet'
     *
     * @param  bool $pagination Pagination parameter (optional)
     * @param  int $per_page Results_per_page (optional)
     * @param  int $page PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function fidelitiesMovementsGetRequest($pagination = null, $per_page = null, $page = null)
    {

        $resourcePath = '/fidelities_movements';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($pagination !== null) {
            $queryParams['pagination'] = ObjectSerializer::toQueryValue($pagination, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
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
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation fidelitiesMovementsIdGet
     *
     * Get existing Fidelity Movement
     *
     * @param  string $id id of the Fidelity Movement (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\ChainsFidelitiesMovements
     */
    public function fidelitiesMovementsIdGet($id)
    {
        list($response) = $this->fidelitiesMovementsIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation fidelitiesMovementsIdGetWithHttpInfo
     *
     * Get existing Fidelity Movement
     *
     * @param  string $id id of the Fidelity Movement (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\ChainsFidelitiesMovements, HTTP status code, HTTP response headers (array of strings)
     */
    public function fidelitiesMovementsIdGetWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\ChainsFidelitiesMovements';
        $request = $this->fidelitiesMovementsIdGetRequest($id);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\Swagger\Client\Model\ChainsFidelitiesMovements',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation fidelitiesMovementsIdGetAsync
     *
     * Get existing Fidelity Movement
     *
     * @param  string $id id of the Fidelity Movement (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fidelitiesMovementsIdGetAsync($id)
    {
        return $this->fidelitiesMovementsIdGetAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fidelitiesMovementsIdGetAsyncWithHttpInfo
     *
     * Get existing Fidelity Movement
     *
     * @param  string $id id of the Fidelity Movement (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fidelitiesMovementsIdGetAsyncWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\ChainsFidelitiesMovements';
        $request = $this->fidelitiesMovementsIdGetRequest($id);

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
     * Create request for operation 'fidelitiesMovementsIdGet'
     *
     * @param  string $id id of the Fidelity Movement (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function fidelitiesMovementsIdGetRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling fidelitiesMovementsIdGet'
            );
        }

        $resourcePath = '/fidelities_movements/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation fidelitiesMovementsPost
     *
     * Add new Fidelity Movement
     *
     * @param  \Swagger\Client\Model\ChainsFidelitiesMovements $body Fidelity Movement object that needs to be added. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\ChainsFidelitiesMovements
     */
    public function fidelitiesMovementsPost($body)
    {
        list($response) = $this->fidelitiesMovementsPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation fidelitiesMovementsPostWithHttpInfo
     *
     * Add new Fidelity Movement
     *
     * @param  \Swagger\Client\Model\ChainsFidelitiesMovements $body Fidelity Movement object that needs to be added. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\ChainsFidelitiesMovements, HTTP status code, HTTP response headers (array of strings)
     */
    public function fidelitiesMovementsPostWithHttpInfo($body)
    {
        $returnType = '\Swagger\Client\Model\ChainsFidelitiesMovements';
        $request = $this->fidelitiesMovementsPostRequest($body);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ChainsFidelitiesMovements',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation fidelitiesMovementsPostAsync
     *
     * Add new Fidelity Movement
     *
     * @param  \Swagger\Client\Model\ChainsFidelitiesMovements $body Fidelity Movement object that needs to be added. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fidelitiesMovementsPostAsync($body)
    {
        return $this->fidelitiesMovementsPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fidelitiesMovementsPostAsyncWithHttpInfo
     *
     * Add new Fidelity Movement
     *
     * @param  \Swagger\Client\Model\ChainsFidelitiesMovements $body Fidelity Movement object that needs to be added. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fidelitiesMovementsPostAsyncWithHttpInfo($body)
    {
        $returnType = '\Swagger\Client\Model\ChainsFidelitiesMovements';
        $request = $this->fidelitiesMovementsPostRequest($body);

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
     * Create request for operation 'fidelitiesMovementsPost'
     *
     * @param  \Swagger\Client\Model\ChainsFidelitiesMovements $body Fidelity Movement object that needs to be added. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function fidelitiesMovementsPostRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling fidelitiesMovementsPost'
            );
        }

        $resourcePath = '/fidelities_movements';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
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
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
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
