<?php
/**
 * Card3DsPaymentApi
 * PHP version 5
 *
 * @category Class
 * @package  CpaymentConnector
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CpaymentConnector\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use CpaymentConnector\ApiException;
use CpaymentConnector\Configuration;
use CpaymentConnector\HeaderSelector;
use CpaymentConnector\ObjectSerializer;

/**
 * Card3DsPaymentApi Class Doc Comment
 *
 * @category Class
 * @package  CpaymentConnector
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Card3DsPaymentApi
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
     * Operation v1PaymentsCard3dsPaymentPost
     *
     * Achieve a 3DS payment (CheckEnrollment)
     *
     * @param  string $auth_token Gets or sets the authentication token. (required)
     * @param  \CpaymentConnector\Model\Card3DsPaymentRequest $card3_ds_payment_request All data needed to make a 3DS card payment (optional)
     *
     * @throws \CpaymentConnector\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CpaymentConnector\Model\Card3DsPaymentResponse
     */
    public function v1PaymentsCard3dsPaymentPost($auth_token, $card3_ds_payment_request = null)
    {
        list($response) = $this->v1PaymentsCard3dsPaymentPostWithHttpInfo($auth_token, $card3_ds_payment_request);
        return $response;
    }

    /**
     * Operation v1PaymentsCard3dsPaymentPostWithHttpInfo
     *
     * Achieve a 3DS payment (CheckEnrollment)
     *
     * @param  string $auth_token Gets or sets the authentication token. (required)
     * @param  \CpaymentConnector\Model\Card3DsPaymentRequest $card3_ds_payment_request All data needed to make a 3DS card payment (optional)
     *
     * @throws \CpaymentConnector\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CpaymentConnector\Model\Card3DsPaymentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1PaymentsCard3dsPaymentPostWithHttpInfo($auth_token, $card3_ds_payment_request = null)
    {
        $request = $this->v1PaymentsCard3dsPaymentPostRequest($auth_token, $card3_ds_payment_request);

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
                    if ('\CpaymentConnector\Model\Card3DsPaymentResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CpaymentConnector\Model\Card3DsPaymentResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\CpaymentConnector\Model\Card3DsPaymentResponse';
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
                        '\CpaymentConnector\Model\Card3DsPaymentResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1PaymentsCard3dsPaymentPostAsync
     *
     * Achieve a 3DS payment (CheckEnrollment)
     *
     * @param  string $auth_token Gets or sets the authentication token. (required)
     * @param  \CpaymentConnector\Model\Card3DsPaymentRequest $card3_ds_payment_request All data needed to make a 3DS card payment (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1PaymentsCard3dsPaymentPostAsync($auth_token, $card3_ds_payment_request = null)
    {
        return $this->v1PaymentsCard3dsPaymentPostAsyncWithHttpInfo($auth_token, $card3_ds_payment_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1PaymentsCard3dsPaymentPostAsyncWithHttpInfo
     *
     * Achieve a 3DS payment (CheckEnrollment)
     *
     * @param  string $auth_token Gets or sets the authentication token. (required)
     * @param  \CpaymentConnector\Model\Card3DsPaymentRequest $card3_ds_payment_request All data needed to make a 3DS card payment (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1PaymentsCard3dsPaymentPostAsyncWithHttpInfo($auth_token, $card3_ds_payment_request = null)
    {
        $returnType = '\CpaymentConnector\Model\Card3DsPaymentResponse';
        $request = $this->v1PaymentsCard3dsPaymentPostRequest($auth_token, $card3_ds_payment_request);

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
     * Create request for operation 'v1PaymentsCard3dsPaymentPost'
     *
     * @param  string $auth_token Gets or sets the authentication token. (required)
     * @param  \CpaymentConnector\Model\Card3DsPaymentRequest $card3_ds_payment_request All data needed to make a 3DS card payment (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v1PaymentsCard3dsPaymentPostRequest($auth_token, $card3_ds_payment_request = null)
    {
        // verify the required parameter 'auth_token' is set
        if ($auth_token === null || (is_array($auth_token) && count($auth_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $auth_token when calling v1PaymentsCard3dsPaymentPost'
            );
        }

        $resourcePath = '/v1/payments/card3ds-payment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($auth_token !== null) {
            $headerParams['authToken'] = ObjectSerializer::toHeaderValue($auth_token);
        }


        // body params
        $_tempBody = null;
        if (isset($card3_ds_payment_request)) {
            $_tempBody = $card3_ds_payment_request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']
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
     * Operation v1PaymentsCard3dsPaymentPut
     *
     * Finish the 3DS payment.  Reuse the order references and the paymentRequestId (returned from the POST).
     *
     * @param  string $auth_token Gets or sets the authentication token. (required)
     * @param  \CpaymentConnector\Model\Card3DsPaymentPutRequest $card3_ds_payment_put_request The card payment put request. (optional)
     *
     * @throws \CpaymentConnector\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CpaymentConnector\Model\CardPaymentResponse
     */
    public function v1PaymentsCard3dsPaymentPut($auth_token, $card3_ds_payment_put_request = null)
    {
        list($response) = $this->v1PaymentsCard3dsPaymentPutWithHttpInfo($auth_token, $card3_ds_payment_put_request);
        return $response;
    }

    /**
     * Operation v1PaymentsCard3dsPaymentPutWithHttpInfo
     *
     * Finish the 3DS payment.  Reuse the order references and the paymentRequestId (returned from the POST).
     *
     * @param  string $auth_token Gets or sets the authentication token. (required)
     * @param  \CpaymentConnector\Model\Card3DsPaymentPutRequest $card3_ds_payment_put_request The card payment put request. (optional)
     *
     * @throws \CpaymentConnector\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CpaymentConnector\Model\CardPaymentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1PaymentsCard3dsPaymentPutWithHttpInfo($auth_token, $card3_ds_payment_put_request = null)
    {
        $request = $this->v1PaymentsCard3dsPaymentPutRequest($auth_token, $card3_ds_payment_put_request);

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
                    if ('\CpaymentConnector\Model\CardPaymentResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CpaymentConnector\Model\CardPaymentResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\CpaymentConnector\Model\CardPaymentResponse';
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
                        '\CpaymentConnector\Model\CardPaymentResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1PaymentsCard3dsPaymentPutAsync
     *
     * Finish the 3DS payment.  Reuse the order references and the paymentRequestId (returned from the POST).
     *
     * @param  string $auth_token Gets or sets the authentication token. (required)
     * @param  \CpaymentConnector\Model\Card3DsPaymentPutRequest $card3_ds_payment_put_request The card payment put request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1PaymentsCard3dsPaymentPutAsync($auth_token, $card3_ds_payment_put_request = null)
    {
        return $this->v1PaymentsCard3dsPaymentPutAsyncWithHttpInfo($auth_token, $card3_ds_payment_put_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1PaymentsCard3dsPaymentPutAsyncWithHttpInfo
     *
     * Finish the 3DS payment.  Reuse the order references and the paymentRequestId (returned from the POST).
     *
     * @param  string $auth_token Gets or sets the authentication token. (required)
     * @param  \CpaymentConnector\Model\Card3DsPaymentPutRequest $card3_ds_payment_put_request The card payment put request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1PaymentsCard3dsPaymentPutAsyncWithHttpInfo($auth_token, $card3_ds_payment_put_request = null)
    {
        $returnType = '\CpaymentConnector\Model\CardPaymentResponse';
        $request = $this->v1PaymentsCard3dsPaymentPutRequest($auth_token, $card3_ds_payment_put_request);

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
     * Create request for operation 'v1PaymentsCard3dsPaymentPut'
     *
     * @param  string $auth_token Gets or sets the authentication token. (required)
     * @param  \CpaymentConnector\Model\Card3DsPaymentPutRequest $card3_ds_payment_put_request The card payment put request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v1PaymentsCard3dsPaymentPutRequest($auth_token, $card3_ds_payment_put_request = null)
    {
        // verify the required parameter 'auth_token' is set
        if ($auth_token === null || (is_array($auth_token) && count($auth_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $auth_token when calling v1PaymentsCard3dsPaymentPut'
            );
        }

        $resourcePath = '/v1/payments/card3ds-payment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($auth_token !== null) {
            $headerParams['authToken'] = ObjectSerializer::toHeaderValue($auth_token);
        }


        // body params
        $_tempBody = null;
        if (isset($card3_ds_payment_put_request)) {
            $_tempBody = $card3_ds_payment_put_request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']
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
            'PUT',
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
