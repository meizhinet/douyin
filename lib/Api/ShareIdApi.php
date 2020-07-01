<?php
/**
 * ShareIdApi
 * PHP version 5
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 */
/**
 * NOTE: 由抖音小开自动生成，请勿修改
 */

namespace Douyin\Open\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Douyin\Open\ApiException;
use Douyin\Open\Configuration;
use Douyin\Open\HeaderSelector;
use Douyin\Open\ObjectSerializer;

/**
 * ShareIdApi Class Doc Comment
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */
class ShareIdApi
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
     * Operation shareIdGet
     *
     * 获取share-id
     *
     * @param  string $access_token 调用/oauth/client_token/生成的token，此token不需要用户授权。 (required)
     * @param  bool $need_callback 如果需要知道视频分享成功的结果，need_callback设置为true (optional)
     * @param  string $source_style_id 多来源样式id（暂未开放） (optional)
     * @param  string $default_hashtag 追踪分享默认hashtag (optional)
     * @param  string $link_param 分享来源url附加参数（暂未开放） (optional)
     *
     * @throws \Douyin\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Douyin\Open\Model\ShareidResponse
     */
    public function shareIdGet($access_token, $need_callback = null, $source_style_id = null, $default_hashtag = null, $link_param = null)
    {
        list($response) = $this->shareIdGetWithHttpInfo($access_token, $need_callback, $source_style_id, $default_hashtag, $link_param);
        return $response;
    }

    /**
     * Operation shareIdGetWithHttpInfo
     *
     * 获取share-id
     *
     * @param  string $access_token 调用/oauth/client_token/生成的token，此token不需要用户授权。 (required)
     * @param  bool $need_callback 如果需要知道视频分享成功的结果，need_callback设置为true (optional)
     * @param  string $source_style_id 多来源样式id（暂未开放） (optional)
     * @param  string $default_hashtag 追踪分享默认hashtag (optional)
     * @param  string $link_param 分享来源url附加参数（暂未开放） (optional)
     *
     * @throws \Douyin\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Douyin\Open\Model\ShareidResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function shareIdGetWithHttpInfo($access_token, $need_callback = null, $source_style_id = null, $default_hashtag = null, $link_param = null)
    {
        $returnType = '\Douyin\Open\Model\ShareidResponse';
        $request = $this->shareIdGetRequest($access_token, $need_callback, $source_style_id, $default_hashtag, $link_param);

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
                        '\Douyin\Open\Model\ShareidResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'shareIdGet'
     *
     * @param  string $access_token 调用/oauth/client_token/生成的token，此token不需要用户授权。 (required)
     * @param  bool $need_callback 如果需要知道视频分享成功的结果，need_callback设置为true (optional)
     * @param  string $source_style_id 多来源样式id（暂未开放） (optional)
     * @param  string $default_hashtag 追踪分享默认hashtag (optional)
     * @param  string $link_param 分享来源url附加参数（暂未开放） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function shareIdGetRequest($access_token, $need_callback = null, $source_style_id = null, $default_hashtag = null, $link_param = null)
    {
        // verify the required parameter 'access_token' is set
        if ($access_token === null || (is_array($access_token) && count($access_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $access_token when calling shareIdGet'
            );
        }

        $resourcePath = '/share-id/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = ObjectSerializer::toQueryValue($access_token);
        }
        // query params
        if ($need_callback !== null) {
            $queryParams['need_callback'] = ObjectSerializer::toQueryValue($need_callback);
        }
        // query params
        if ($source_style_id !== null) {
            $queryParams['source_style_id'] = ObjectSerializer::toQueryValue($source_style_id);
        }
        // query params
        if ($default_hashtag !== null) {
            $queryParams['default_hashtag'] = ObjectSerializer::toQueryValue($default_hashtag);
        }
        // query params
        if ($link_param !== null) {
            $queryParams['link_param'] = ObjectSerializer::toQueryValue($link_param);
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