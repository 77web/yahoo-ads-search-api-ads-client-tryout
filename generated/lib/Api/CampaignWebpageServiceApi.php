<?php
/**
 * CampaignWebpageServiceApi
 * PHP version 5
 *
 * @category Class
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Yahoo!広告 検索広告 API リファレンス β版 / Yahoo! Ads Search Ads API Reference β Version
 *
 * <ja>Yahoo!広告 検索広告 APIのWebサービスについて説明します。<br> 「Try it out」のご利用には、事前にアプリケーションの登録が必要です。また、アプリケーションのリダイレクトURIの1つに<br> https://yahoojp-marketing.github.io/ads-search-api-documents/oauth2-redirect.htmlを登録してください。 </ja><br> <br> <en>Search Ads API Web Services supported in Yahoo! Ads API.<br> When you use \"Try it out\", you need to register your application in advance.<br> As one of redirect URI for application, you need to set \"https://yahoojp-marketing.github.io/ads-search-api-documents/oauth2-redirect.html\". </en>
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace YahooAdsSearchApi\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use YahooAdsSearchApi\Client\ApiException;
use YahooAdsSearchApi\Client\Configuration;
use YahooAdsSearchApi\Client\HeaderSelector;
use YahooAdsSearchApi\Client\ObjectSerializer;

/**
 * CampaignWebpageServiceApi Class Doc Comment
 *
 * @category Class
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignWebpageServiceApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation campaignWebpageServiceAddPost
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation $campaign_webpage_service_operation campaign_webpage_service_operation (optional)
     *
     * @throws \YahooAdsSearchApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return |\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse
     */
    public function campaignWebpageServiceAddPost($campaign_webpage_service_operation = null)
    {
        list($response) = $this->campaignWebpageServiceAddPostWithHttpInfo($campaign_webpage_service_operation);
        return $response;
    }

    /**
     * Operation campaignWebpageServiceAddPostWithHttpInfo
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation $campaign_webpage_service_operation (optional)
     *
     * @throws \YahooAdsSearchApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of |\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function campaignWebpageServiceAddPostWithHttpInfo($campaign_webpage_service_operation = null)
    {
        $request = $this->campaignWebpageServiceAddPostRequest($campaign_webpage_service_operation);

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
            switch($statusCode) {
                case 200:
                    if ('\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation campaignWebpageServiceAddPostAsync
     *
     * 
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation $campaign_webpage_service_operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function campaignWebpageServiceAddPostAsync($campaign_webpage_service_operation = null)
    {
        return $this->campaignWebpageServiceAddPostAsyncWithHttpInfo($campaign_webpage_service_operation)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation campaignWebpageServiceAddPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation $campaign_webpage_service_operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function campaignWebpageServiceAddPostAsyncWithHttpInfo($campaign_webpage_service_operation = null)
    {
        $returnType = '\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse';
        $request = $this->campaignWebpageServiceAddPostRequest($campaign_webpage_service_operation);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
     * Create request for operation 'campaignWebpageServiceAddPost'
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation $campaign_webpage_service_operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function campaignWebpageServiceAddPostRequest($campaign_webpage_service_operation = null)
    {

        $resourcePath = '/CampaignWebpageService/add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($campaign_webpage_service_operation)) {
            $_tempBody = $campaign_webpage_service_operation;
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
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
     * Operation campaignWebpageServiceGetPost
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceSelector $campaign_webpage_service_selector campaign_webpage_service_selector (optional)
     *
     * @throws \YahooAdsSearchApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return |\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceGetResponse
     */
    public function campaignWebpageServiceGetPost($campaign_webpage_service_selector = null)
    {
        list($response) = $this->campaignWebpageServiceGetPostWithHttpInfo($campaign_webpage_service_selector);
        return $response;
    }

    /**
     * Operation campaignWebpageServiceGetPostWithHttpInfo
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceSelector $campaign_webpage_service_selector (optional)
     *
     * @throws \YahooAdsSearchApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of |\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceGetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function campaignWebpageServiceGetPostWithHttpInfo($campaign_webpage_service_selector = null)
    {
        $request = $this->campaignWebpageServiceGetPostRequest($campaign_webpage_service_selector);

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
            switch($statusCode) {
                case 200:
                    if ('\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceGetResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceGetResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceGetResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceGetResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation campaignWebpageServiceGetPostAsync
     *
     * 
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceSelector $campaign_webpage_service_selector (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function campaignWebpageServiceGetPostAsync($campaign_webpage_service_selector = null)
    {
        return $this->campaignWebpageServiceGetPostAsyncWithHttpInfo($campaign_webpage_service_selector)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation campaignWebpageServiceGetPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceSelector $campaign_webpage_service_selector (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function campaignWebpageServiceGetPostAsyncWithHttpInfo($campaign_webpage_service_selector = null)
    {
        $returnType = '\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceGetResponse';
        $request = $this->campaignWebpageServiceGetPostRequest($campaign_webpage_service_selector);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
     * Create request for operation 'campaignWebpageServiceGetPost'
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceSelector $campaign_webpage_service_selector (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function campaignWebpageServiceGetPostRequest($campaign_webpage_service_selector = null)
    {

        $resourcePath = '/CampaignWebpageService/get';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($campaign_webpage_service_selector)) {
            $_tempBody = $campaign_webpage_service_selector;
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
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
     * Operation campaignWebpageServiceRemovePost
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation $campaign_webpage_service_operation campaign_webpage_service_operation (optional)
     *
     * @throws \YahooAdsSearchApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return |\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse
     */
    public function campaignWebpageServiceRemovePost($campaign_webpage_service_operation = null)
    {
        list($response) = $this->campaignWebpageServiceRemovePostWithHttpInfo($campaign_webpage_service_operation);
        return $response;
    }

    /**
     * Operation campaignWebpageServiceRemovePostWithHttpInfo
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation $campaign_webpage_service_operation (optional)
     *
     * @throws \YahooAdsSearchApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of |\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function campaignWebpageServiceRemovePostWithHttpInfo($campaign_webpage_service_operation = null)
    {
        $request = $this->campaignWebpageServiceRemovePostRequest($campaign_webpage_service_operation);

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
            switch($statusCode) {
                case 200:
                    if ('\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation campaignWebpageServiceRemovePostAsync
     *
     * 
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation $campaign_webpage_service_operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function campaignWebpageServiceRemovePostAsync($campaign_webpage_service_operation = null)
    {
        return $this->campaignWebpageServiceRemovePostAsyncWithHttpInfo($campaign_webpage_service_operation)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation campaignWebpageServiceRemovePostAsyncWithHttpInfo
     *
     * 
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation $campaign_webpage_service_operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function campaignWebpageServiceRemovePostAsyncWithHttpInfo($campaign_webpage_service_operation = null)
    {
        $returnType = '\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse';
        $request = $this->campaignWebpageServiceRemovePostRequest($campaign_webpage_service_operation);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
     * Create request for operation 'campaignWebpageServiceRemovePost'
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation $campaign_webpage_service_operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function campaignWebpageServiceRemovePostRequest($campaign_webpage_service_operation = null)
    {

        $resourcePath = '/CampaignWebpageService/remove';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($campaign_webpage_service_operation)) {
            $_tempBody = $campaign_webpage_service_operation;
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
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
