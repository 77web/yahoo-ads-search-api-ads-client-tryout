<?php
/**
 * CampaignCriterionServiceApi
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
 * CampaignCriterionServiceApi Class Doc Comment
 *
 * @category Class
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignCriterionServiceApi
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
     * Operation campaignCriterionServiceAddPost
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation $campaign_criterion_service_operation campaign_criterion_service_operation (optional)
     *
     * @throws \YahooAdsSearchApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return |\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse
     */
    public function campaignCriterionServiceAddPost($campaign_criterion_service_operation = null)
    {
        list($response) = $this->campaignCriterionServiceAddPostWithHttpInfo($campaign_criterion_service_operation);
        return $response;
    }

    /**
     * Operation campaignCriterionServiceAddPostWithHttpInfo
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation $campaign_criterion_service_operation (optional)
     *
     * @throws \YahooAdsSearchApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of |\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function campaignCriterionServiceAddPostWithHttpInfo($campaign_criterion_service_operation = null)
    {
        $request = $this->campaignCriterionServiceAddPostRequest($campaign_criterion_service_operation);

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
                    if ('\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse';
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
                        '\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation campaignCriterionServiceAddPostAsync
     *
     * 
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation $campaign_criterion_service_operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function campaignCriterionServiceAddPostAsync($campaign_criterion_service_operation = null)
    {
        return $this->campaignCriterionServiceAddPostAsyncWithHttpInfo($campaign_criterion_service_operation)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation campaignCriterionServiceAddPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation $campaign_criterion_service_operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function campaignCriterionServiceAddPostAsyncWithHttpInfo($campaign_criterion_service_operation = null)
    {
        $returnType = '\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse';
        $request = $this->campaignCriterionServiceAddPostRequest($campaign_criterion_service_operation);

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
     * Create request for operation 'campaignCriterionServiceAddPost'
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation $campaign_criterion_service_operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function campaignCriterionServiceAddPostRequest($campaign_criterion_service_operation = null)
    {

        $resourcePath = '/CampaignCriterionService/add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($campaign_criterion_service_operation)) {
            $_tempBody = $campaign_criterion_service_operation;
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
     * Operation campaignCriterionServiceGetPost
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceSelector $campaign_criterion_service_selector campaign_criterion_service_selector (optional)
     *
     * @throws \YahooAdsSearchApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return |\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceGetResponse
     */
    public function campaignCriterionServiceGetPost($campaign_criterion_service_selector = null)
    {
        list($response) = $this->campaignCriterionServiceGetPostWithHttpInfo($campaign_criterion_service_selector);
        return $response;
    }

    /**
     * Operation campaignCriterionServiceGetPostWithHttpInfo
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceSelector $campaign_criterion_service_selector (optional)
     *
     * @throws \YahooAdsSearchApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of |\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceGetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function campaignCriterionServiceGetPostWithHttpInfo($campaign_criterion_service_selector = null)
    {
        $request = $this->campaignCriterionServiceGetPostRequest($campaign_criterion_service_selector);

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
                    if ('\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceGetResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceGetResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceGetResponse';
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
                        '\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceGetResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation campaignCriterionServiceGetPostAsync
     *
     * 
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceSelector $campaign_criterion_service_selector (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function campaignCriterionServiceGetPostAsync($campaign_criterion_service_selector = null)
    {
        return $this->campaignCriterionServiceGetPostAsyncWithHttpInfo($campaign_criterion_service_selector)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation campaignCriterionServiceGetPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceSelector $campaign_criterion_service_selector (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function campaignCriterionServiceGetPostAsyncWithHttpInfo($campaign_criterion_service_selector = null)
    {
        $returnType = '\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceGetResponse';
        $request = $this->campaignCriterionServiceGetPostRequest($campaign_criterion_service_selector);

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
     * Create request for operation 'campaignCriterionServiceGetPost'
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceSelector $campaign_criterion_service_selector (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function campaignCriterionServiceGetPostRequest($campaign_criterion_service_selector = null)
    {

        $resourcePath = '/CampaignCriterionService/get';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($campaign_criterion_service_selector)) {
            $_tempBody = $campaign_criterion_service_selector;
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
     * Operation campaignCriterionServiceRemovePost
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation $campaign_criterion_service_operation campaign_criterion_service_operation (optional)
     *
     * @throws \YahooAdsSearchApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return |\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse
     */
    public function campaignCriterionServiceRemovePost($campaign_criterion_service_operation = null)
    {
        list($response) = $this->campaignCriterionServiceRemovePostWithHttpInfo($campaign_criterion_service_operation);
        return $response;
    }

    /**
     * Operation campaignCriterionServiceRemovePostWithHttpInfo
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation $campaign_criterion_service_operation (optional)
     *
     * @throws \YahooAdsSearchApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of |\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function campaignCriterionServiceRemovePostWithHttpInfo($campaign_criterion_service_operation = null)
    {
        $request = $this->campaignCriterionServiceRemovePostRequest($campaign_criterion_service_operation);

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
                    if ('\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse';
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
                        '\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation campaignCriterionServiceRemovePostAsync
     *
     * 
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation $campaign_criterion_service_operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function campaignCriterionServiceRemovePostAsync($campaign_criterion_service_operation = null)
    {
        return $this->campaignCriterionServiceRemovePostAsyncWithHttpInfo($campaign_criterion_service_operation)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation campaignCriterionServiceRemovePostAsyncWithHttpInfo
     *
     * 
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation $campaign_criterion_service_operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function campaignCriterionServiceRemovePostAsyncWithHttpInfo($campaign_criterion_service_operation = null)
    {
        $returnType = '\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse';
        $request = $this->campaignCriterionServiceRemovePostRequest($campaign_criterion_service_operation);

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
     * Create request for operation 'campaignCriterionServiceRemovePost'
     *
     * @param  \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation $campaign_criterion_service_operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function campaignCriterionServiceRemovePostRequest($campaign_criterion_service_operation = null)
    {

        $resourcePath = '/CampaignCriterionService/remove';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($campaign_criterion_service_operation)) {
            $_tempBody = $campaign_criterion_service_operation;
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
