<?php
/**
 * CapacitytypeApi
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace API;

use \BumbalClient\Configuration;
use \BumbalClient\ApiClient;
use \BumbalClient\ApiException;
use \BumbalClient\ObjectSerializer;

/**
 * CapacitytypeApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CapacitytypeApi
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
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://localhost/api/v2');
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
     * @return CapacitytypeApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteCapacityType
     *
     * Delete a capacity-type
     *
     * @param int $capacity_type_id ID of the capacity-type to delete (required)
     * @return \Model\ApiResponse
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function deleteCapacityType($capacity_type_id)
    {
        list($response) = $this->deleteCapacityTypeWithHttpInfo($capacity_type_id);
        return $response;
    }

    /**
     * Operation deleteCapacityTypeWithHttpInfo
     *
     * Delete a capacity-type
     *
     * @param int $capacity_type_id ID of the capacity-type to delete (required)
     * @return Array of \Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function deleteCapacityTypeWithHttpInfo($capacity_type_id)
    {
        // verify the required parameter 'capacity_type_id' is set
        if ($capacity_type_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $capacity_type_id when calling deleteCapacityType');
        }
        // parse inputs
        $resourcePath = "/capacity-type/{capacityTypeId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/xml'));

        // path params
        if ($capacity_type_id !== null) {
            $resourcePath = str_replace(
                "{" . "capacityTypeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($capacity_type_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Model\ApiResponse',
                '/capacity-type/{capacityTypeId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveCapacityType
     *
     * Find capacity-type by ID
     *
     * @param int $capacity_type_id ID of capacity-type to return (required)
     * @param bool $include_uom Include uom object (optional, default to false)
     * @param bool $include_uom_group Include uom group (optional, default to false)
     * @param bool $include_uom_name Include uom name (optional, default to false)
     * @return \Model\CapacityTypeModel
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function retrieveCapacityType($capacity_type_id, $include_uom = null, $include_uom_group = null, $include_uom_name = null)
    {
        list($response) = $this->retrieveCapacityTypeWithHttpInfo($capacity_type_id, $include_uom, $include_uom_group, $include_uom_name);
        return $response;
    }

    /**
     * Operation retrieveCapacityTypeWithHttpInfo
     *
     * Find capacity-type by ID
     *
     * @param int $capacity_type_id ID of capacity-type to return (required)
     * @param bool $include_uom Include uom object (optional, default to false)
     * @param bool $include_uom_group Include uom group (optional, default to false)
     * @param bool $include_uom_name Include uom name (optional, default to false)
     * @return Array of \Model\CapacityTypeModel, HTTP status code, HTTP response headers (array of strings)
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function retrieveCapacityTypeWithHttpInfo($capacity_type_id, $include_uom = null, $include_uom_group = null, $include_uom_name = null)
    {
        // verify the required parameter 'capacity_type_id' is set
        if ($capacity_type_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $capacity_type_id when calling retrieveCapacityType');
        }
        // parse inputs
        $resourcePath = "/capacity-type/{capacityTypeId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/xml'));

        // query params
        if ($include_uom !== null) {
            $queryParams['include_uom'] = $this->apiClient->getSerializer()->toQueryValue($include_uom);
        }
        // query params
        if ($include_uom_group !== null) {
            $queryParams['include_uom_group'] = $this->apiClient->getSerializer()->toQueryValue($include_uom_group);
        }
        // query params
        if ($include_uom_name !== null) {
            $queryParams['include_uom_name'] = $this->apiClient->getSerializer()->toQueryValue($include_uom_name);
        }
        // path params
        if ($capacity_type_id !== null) {
            $resourcePath = str_replace(
                "{" . "capacityTypeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($capacity_type_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                '\Model\CapacityTypeModel',
                '/capacity-type/{capacityTypeId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Model\CapacityTypeModel', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Model\CapacityTypeModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListCapacityType
     *
     * Retrieve List of CapacityTypes
     *
     * @param \Model\CapacityTypeRetrieveListArguments $arguments CapacityType RetrieveList Arguments (required)
     * @return \Model\CapacityTypeListResponse
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function retrieveListCapacityType($arguments)
    {
        list($response) = $this->retrieveListCapacityTypeWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListCapacityTypeWithHttpInfo
     *
     * Retrieve List of CapacityTypes
     *
     * @param \Model\CapacityTypeRetrieveListArguments $arguments CapacityType RetrieveList Arguments (required)
     * @return Array of \Model\CapacityTypeListResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function retrieveListCapacityTypeWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListCapacityType');
        }
        // parse inputs
        $resourcePath = "/capacity-type";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/xml'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

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
                '\Model\CapacityTypeListResponse',
                '/capacity-type'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Model\CapacityTypeListResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Model\CapacityTypeListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setCapacityType
     *
     * Set (create or update) an CapacityType
     *
     * @param \Model\CapacityTypeModel $body CapacityType model (optional)
     * @return \Model\ApiResponse
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function setCapacityType($body = null)
    {
        list($response) = $this->setCapacityTypeWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation setCapacityTypeWithHttpInfo
     *
     * Set (create or update) an CapacityType
     *
     * @param \Model\CapacityTypeModel $body CapacityType model (optional)
     * @return Array of \Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function setCapacityTypeWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/capacity-type/set";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/xml'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

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
                '\Model\ApiResponse',
                '/capacity-type/set'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
