<?php
/**
 * RouteApi
 * PHP version 5
 *
 * @category Class
 * @package  Bumbal\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Client API
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

namespace Bumbal\Client\API;

use \Bumbal\Client\ApiClient;
use \Bumbal\Client\ApiException;
use \Bumbal\Client\Configuration;
use \Bumbal\Client\ObjectSerializer;

/**
 * RouteApi Class Doc Comment
 *
 * @category Class
 * @package  Bumbal\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RouteApi
{
    /**
     * API Client
     *
     * @var \Bumbal\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Bumbal\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Bumbal\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost/api/v2');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Bumbal\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Bumbal\Client\ApiClient $apiClient set the API client
     *
     * @return RouteApi
     */
    public function setApiClient(\Bumbal\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createRoute
     *
     * Add a new Route
     *
     * @param \Bumbal\Client\Model\RouteModel $body Route object that needs to be created (optional)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return \Bumbal\Client\Model\ApiResponse
     */
    public function createRoute($body = null)
    {
        list($response) = $this->createRouteWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createRouteWithHttpInfo
     *
     * Add a new Route
     *
     * @param \Bumbal\Client\Model\RouteModel $body Route object that needs to be created (optional)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return array of \Bumbal\Client\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createRouteWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/route";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Bumbal\Client\Model\ApiResponse',
                '/route'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Bumbal\Client\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Bumbal\Client\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteRoute
     *
     * Delete an Route
     *
     * @param int $route_id ID of route to update (required)
     * @param bool $cancel_activities Cancel activities on Route (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return \Bumbal\Client\Model\ApiResponse
     */
    public function deleteRoute($route_id, $cancel_activities)
    {
        list($response) = $this->deleteRouteWithHttpInfo($route_id, $cancel_activities);
        return $response;
    }

    /**
     * Operation deleteRouteWithHttpInfo
     *
     * Delete an Route
     *
     * @param int $route_id ID of route to update (required)
     * @param bool $cancel_activities Cancel activities on Route (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return array of \Bumbal\Client\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteRouteWithHttpInfo($route_id, $cancel_activities)
    {
        // verify the required parameter 'route_id' is set
        if ($route_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $route_id when calling deleteRoute');
        }
        // verify the required parameter 'cancel_activities' is set
        if ($cancel_activities === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cancel_activities when calling deleteRoute');
        }
        // parse inputs
        $resourcePath = "/route/{routeId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // query params
        if ($cancel_activities !== null) {
            $queryParams['cancel_activities'] = $this->apiClient->getSerializer()->toQueryValue($cancel_activities);
        }
        // path params
        if ($route_id !== null) {
            $resourcePath = str_replace(
                "{" . "routeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($route_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Bumbal\Client\Model\ApiResponse',
                '/route/{routeId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Bumbal\Client\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Bumbal\Client\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListRoute
     *
     * Retrieve List of Routes
     *
     * @param \Bumbal\Client\Model\RouteRetrieveListArguments $arguments Route RetrieveList Arguments (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return \Bumbal\Client\Model\RouteModel[]
     */
    public function retrieveListRoute($arguments)
    {
        list($response) = $this->retrieveListRouteWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListRouteWithHttpInfo
     *
     * Retrieve List of Routes
     *
     * @param \Bumbal\Client\Model\RouteRetrieveListArguments $arguments Route RetrieveList Arguments (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return array of \Bumbal\Client\Model\RouteModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListRouteWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListRoute');
        }
        // parse inputs
        $resourcePath = "/route";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Bumbal\Client\Model\RouteModel[]',
                '/route'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Bumbal\Client\Model\RouteModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Bumbal\Client\Model\RouteModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveRoute
     *
     * Retrieve a Route
     *
     * @param int $route_id ID of route to retrieve (required)
     * @param bool $include_address_info Include Address info (required)
     * @param bool $include_route_status Include Status Name (required)
     * @param bool $include_route_tags Include Tags (required)
     * @param bool $include_driver_info Include Driver info (required)
     * @param bool $include_equipment_info_car Include Equipment info car (required)
     * @param bool $include_gps_locations Include GPS locations (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return \Bumbal\Client\Model\RouteModel
     */
    public function retrieveRoute($route_id, $include_address_info, $include_route_status, $include_route_tags, $include_driver_info, $include_equipment_info_car, $include_gps_locations)
    {
        list($response) = $this->retrieveRouteWithHttpInfo($route_id, $include_address_info, $include_route_status, $include_route_tags, $include_driver_info, $include_equipment_info_car, $include_gps_locations);
        return $response;
    }

    /**
     * Operation retrieveRouteWithHttpInfo
     *
     * Retrieve a Route
     *
     * @param int $route_id ID of route to retrieve (required)
     * @param bool $include_address_info Include Address info (required)
     * @param bool $include_route_status Include Status Name (required)
     * @param bool $include_route_tags Include Tags (required)
     * @param bool $include_driver_info Include Driver info (required)
     * @param bool $include_equipment_info_car Include Equipment info car (required)
     * @param bool $include_gps_locations Include GPS locations (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return array of \Bumbal\Client\Model\RouteModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveRouteWithHttpInfo($route_id, $include_address_info, $include_route_status, $include_route_tags, $include_driver_info, $include_equipment_info_car, $include_gps_locations)
    {
        // verify the required parameter 'route_id' is set
        if ($route_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $route_id when calling retrieveRoute');
        }
        // verify the required parameter 'include_address_info' is set
        if ($include_address_info === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_address_info when calling retrieveRoute');
        }
        // verify the required parameter 'include_route_status' is set
        if ($include_route_status === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_route_status when calling retrieveRoute');
        }
        // verify the required parameter 'include_route_tags' is set
        if ($include_route_tags === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_route_tags when calling retrieveRoute');
        }
        // verify the required parameter 'include_driver_info' is set
        if ($include_driver_info === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_driver_info when calling retrieveRoute');
        }
        // verify the required parameter 'include_equipment_info_car' is set
        if ($include_equipment_info_car === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_equipment_info_car when calling retrieveRoute');
        }
        // verify the required parameter 'include_gps_locations' is set
        if ($include_gps_locations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_gps_locations when calling retrieveRoute');
        }
        // parse inputs
        $resourcePath = "/route/{routeId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // query params
        if ($include_address_info !== null) {
            $queryParams['include_address_info'] = $this->apiClient->getSerializer()->toQueryValue($include_address_info);
        }
        // query params
        if ($include_route_status !== null) {
            $queryParams['include_route_status'] = $this->apiClient->getSerializer()->toQueryValue($include_route_status);
        }
        // query params
        if ($include_route_tags !== null) {
            $queryParams['include_route_tags'] = $this->apiClient->getSerializer()->toQueryValue($include_route_tags);
        }
        // query params
        if ($include_driver_info !== null) {
            $queryParams['include_driver_info'] = $this->apiClient->getSerializer()->toQueryValue($include_driver_info);
        }
        // query params
        if ($include_equipment_info_car !== null) {
            $queryParams['include_equipment_info_car'] = $this->apiClient->getSerializer()->toQueryValue($include_equipment_info_car);
        }
        // query params
        if ($include_gps_locations !== null) {
            $queryParams['include_gps_locations'] = $this->apiClient->getSerializer()->toQueryValue($include_gps_locations);
        }
        // path params
        if ($route_id !== null) {
            $resourcePath = str_replace(
                "{" . "routeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($route_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Bumbal\Client\Model\RouteModel',
                '/route/{routeId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Bumbal\Client\Model\RouteModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Bumbal\Client\Model\RouteModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateRoute
     *
     * Update a Route
     *
     * @param int $route_id ID of route to update (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return \Bumbal\Client\Model\ApiResponse
     */
    public function updateRoute($route_id)
    {
        list($response) = $this->updateRouteWithHttpInfo($route_id);
        return $response;
    }

    /**
     * Operation updateRouteWithHttpInfo
     *
     * Update a Route
     *
     * @param int $route_id ID of route to update (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return array of \Bumbal\Client\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateRouteWithHttpInfo($route_id)
    {
        // verify the required parameter 'route_id' is set
        if ($route_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $route_id when calling updateRoute');
        }
        // parse inputs
        $resourcePath = "/route/{routeId}";
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
        if ($route_id !== null) {
            $resourcePath = str_replace(
                "{" . "routeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($route_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Bumbal\Client\Model\ApiResponse',
                '/route/{routeId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Bumbal\Client\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Bumbal\Client\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
