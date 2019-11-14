<?php
/**
 * AddressApi
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Client Api
 *
 * Bumbal API documentation
 *
 * OpenAPI spec version: 2.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\BumbalClient\API;

use \BumbalClient\ApiClient;
use \BumbalClient\ApiException;
use \BumbalClient\Configuration;
use \BumbalClient\ObjectSerializer;

/**
 * AddressApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressApi
{
    /**
     * API Client
     *
     * @var \BumbalClient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BumbalClient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\BumbalClient\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \BumbalClient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \BumbalClient\ApiClient $apiClient set the API client
     *
     * @return AddressApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation retrieveAddress
     *
     * Retrieve a Address
     *
     * @param int $address_id ID of address to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\BumbalClient\Model\AddressModel
     */
    public function retrieveAddress($address_id)
    {
        list($response) = $this->retrieveAddressWithHttpInfo($address_id);
        return $response;
    }

    /**
     * Operation retrieveAddressWithHttpInfo
     *
     * Retrieve a Address
     *
     * @param int $address_id ID of address to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\BumbalClient\Model\AddressModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveAddressWithHttpInfo($address_id)
    {
        // verify the required parameter 'address_id' is set
        if ($address_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $address_id when calling retrieveAddress');
        }
        // parse inputs
        $resourcePath = "/address/{addressId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($address_id !== null) {
            $resourcePath = str_replace(
                "{" . "addressId" . "}",
                $this->apiClient->getSerializer()->toPathValue($address_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\BumbalClient\Model\AddressModel',
                '/address/{addressId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\BumbalClient\Model\AddressModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\BumbalClient\Model\AddressModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListAddress
     *
     * Retrieve List of Addresses
     *
     * @param \BumbalClient\BumbalClient\Model\AddressRetrieveListArguments $arguments Address RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\BumbalClient\Model\AddressListResponse
     */
    public function retrieveListAddress($arguments)
    {
        list($response) = $this->retrieveListAddressWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListAddressWithHttpInfo
     *
     * Retrieve List of Addresses
     *
     * @param \BumbalClient\BumbalClient\Model\AddressRetrieveListArguments $arguments Address RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\BumbalClient\Model\AddressListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListAddressWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListAddress');
        }
        // parse inputs
        $resourcePath = "/address";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($arguments)) {
            $_tempBody = $arguments;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\BumbalClient\Model\AddressListResponse',
                '/address'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\BumbalClient\Model\AddressListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\BumbalClient\Model\AddressListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation reverseGeoCodeAddress
     *
     * Reverse Geo Code a address
     *
     * @param \BumbalClient\BumbalClient\Model\AddressReverseGeoCodeArguments $arguments Address Reverse GeoCode Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\BumbalClient\Model\AddressReverseGeoCodeResponse
     */
    public function reverseGeoCodeAddress($arguments)
    {
        list($response) = $this->reverseGeoCodeAddressWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation reverseGeoCodeAddressWithHttpInfo
     *
     * Reverse Geo Code a address
     *
     * @param \BumbalClient\BumbalClient\Model\AddressReverseGeoCodeArguments $arguments Address Reverse GeoCode Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\BumbalClient\Model\AddressReverseGeoCodeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function reverseGeoCodeAddressWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling reverseGeoCodeAddress');
        }
        // parse inputs
        $resourcePath = "/address/reverse-geo-code";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($arguments)) {
            $_tempBody = $arguments;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\BumbalClient\Model\AddressReverseGeoCodeResponse',
                '/address/reverse-geo-code'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\BumbalClient\Model\AddressReverseGeoCodeResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\BumbalClient\Model\AddressReverseGeoCodeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setAddress
     *
     * Add a new Address
     *
     * @param \BumbalClient\BumbalClient\Model\AddressModel $body Address object that needs to be created (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\BumbalClient\Model\ApiResponse
     */
    public function setAddress($body = null)
    {
        list($response) = $this->setAddressWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation setAddressWithHttpInfo
     *
     * Add a new Address
     *
     * @param \BumbalClient\BumbalClient\Model\AddressModel $body Address object that needs to be created (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setAddressWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/address/set";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\BumbalClient\Model\ApiResponse',
                '/address/set'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
