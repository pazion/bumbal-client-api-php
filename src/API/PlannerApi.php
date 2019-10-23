<?php
/**
 * PlannerApi
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
 * PlannerApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlannerApi
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
     * @return PlannerApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addActivitiesToRoute
     *
     * Add Activities To Route
     *
     * @return \Model\ApiResponse
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function addActivitiesToRoute()
    {
        list($response) = $this->addActivitiesToRouteWithHttpInfo();
        return $response;
    }

    /**
     * Operation addActivitiesToRouteWithHttpInfo
     *
     * Add Activities To Route
     *
     * @return Array of \Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function addActivitiesToRouteWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/planner/add-activities-to-route";
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
                '/planner/add-activities-to-route'
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
     * Operation applyPlanning
     *
     * Apply a planning schema
     *
     * @param \Model\ApplyPlanningArguments $arguments Request Arguments (required)
     * @return \Model\ApiResponse
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function applyPlanning($arguments)
    {
        list($response) = $this->applyPlanningWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation applyPlanningWithHttpInfo
     *
     * Apply a planning schema
     *
     * @param \Model\ApplyPlanningArguments $arguments Request Arguments (required)
     * @return Array of \Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function applyPlanningWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling applyPlanning');
        }
        // parse inputs
        $resourcePath = "/planner/apply-planning-route";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Model\ApiResponse',
                '/planner/apply-planning-route'
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
     * Operation autoPlan
     *
     * Plan a certain activity in any fitting route
     *
     * @param \Model\AutoPlanArguments $arguments Request Arguments (required)
     * @return \Model\ApiResponse
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function autoPlan($arguments)
    {
        list($response) = $this->autoPlanWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation autoPlanWithHttpInfo
     *
     * Plan a certain activity in any fitting route
     *
     * @param \Model\AutoPlanArguments $arguments Request Arguments (required)
     * @return Array of \Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function autoPlanWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling autoPlan');
        }
        // parse inputs
        $resourcePath = "/planner/auto-plan";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Model\ApiResponse',
                '/planner/auto-plan'
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
     * Operation autoPlanResult
     *
     * Fetch current result for a auto plan Request. This could be done, in progress or cancelled.
     *
     * @param \Model\AutoPlanArguments $arguments Request Arguments (required)
     * @return \Model\ApiResponse
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function autoPlanResult($arguments)
    {
        list($response) = $this->autoPlanResultWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation autoPlanResultWithHttpInfo
     *
     * Fetch current result for a auto plan Request. This could be done, in progress or cancelled.
     *
     * @param \Model\AutoPlanArguments $arguments Request Arguments (required)
     * @return Array of \Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function autoPlanResultWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling autoPlanResult');
        }
        // parse inputs
        $resourcePath = "/planner/auto-plan-result";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Model\ApiResponse',
                '/planner/auto-plan-result'
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
     * Operation changeActivitySequence
     *
     * Change Activity Sequence
     *
     * @return \Model\ApiResponse
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function changeActivitySequence()
    {
        list($response) = $this->changeActivitySequenceWithHttpInfo();
        return $response;
    }

    /**
     * Operation changeActivitySequenceWithHttpInfo
     *
     * Change Activity Sequence
     *
     * @return Array of \Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function changeActivitySequenceWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/planner/change-activity-sequence";
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
                '/planner/change-activity-sequence'
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
     * Operation checkAvailability
     *
     * check availability in planning for a certain set of activity properties
     *
     * @param \Model\CheckAvailabilityArguments $arguments Request Arguments (required)
     * @return \Model\ApiResponse
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function checkAvailability($arguments)
    {
        list($response) = $this->checkAvailabilityWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation checkAvailabilityWithHttpInfo
     *
     * check availability in planning for a certain set of activity properties
     *
     * @param \Model\CheckAvailabilityArguments $arguments Request Arguments (required)
     * @return Array of \Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function checkAvailabilityWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling checkAvailability');
        }
        // parse inputs
        $resourcePath = "/planner/check-availability";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Model\ApiResponse',
                '/planner/check-availability'
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
     * Operation checkAvailabilityResult
     *
     * Fetch current result for a checkAvailability Request. This could be done, in progress or cancelled.
     *
     * @param \Model\CheckAvailabilityArguments $arguments Request Arguments (required)
     * @return \Model\ApiResponse
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function checkAvailabilityResult($arguments)
    {
        list($response) = $this->checkAvailabilityResultWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation checkAvailabilityResultWithHttpInfo
     *
     * Fetch current result for a checkAvailability Request. This could be done, in progress or cancelled.
     *
     * @param \Model\CheckAvailabilityArguments $arguments Request Arguments (required)
     * @return Array of \Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function checkAvailabilityResultWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling checkAvailabilityResult');
        }
        // parse inputs
        $resourcePath = "/planner/check-availability-result";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Model\ApiResponse',
                '/planner/check-availability-result'
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
     * Operation lockActivities
     *
     * Lock Activities on Route
     *
     * @return \Model\ApiResponse
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function lockActivities()
    {
        list($response) = $this->lockActivitiesWithHttpInfo();
        return $response;
    }

    /**
     * Operation lockActivitiesWithHttpInfo
     *
     * Lock Activities on Route
     *
     * @return Array of \Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function lockActivitiesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/planner/lock-activities";
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
                '/planner/lock-activities'
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
     * Operation removeActivitiesFromRoute
     *
     * Remove Activities From Route
     *
     * @param \Model\RemoveActivitiesFromRouteArguments $arguments Request Arguments (required)
     * @return \Model\ApiResponse
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function removeActivitiesFromRoute($arguments)
    {
        list($response) = $this->removeActivitiesFromRouteWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation removeActivitiesFromRouteWithHttpInfo
     *
     * Remove Activities From Route
     *
     * @param \Model\RemoveActivitiesFromRouteArguments $arguments Request Arguments (required)
     * @return Array of \Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function removeActivitiesFromRouteWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling removeActivitiesFromRoute');
        }
        // parse inputs
        $resourcePath = "/planner/remove-activities-from-route";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Model\ApiResponse',
                '/planner/remove-activities-from-route'
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
