<?php
/**
 * ActivityApi
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
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

namespace BumbalClient\API;

use \BumbalClient\ApiClient;
use \BumbalClient\ApiException;
use \BumbalClient\Configuration;
use \BumbalClient\ObjectSerializer;

/**
 * ActivityApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivityApi
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
            $apiClient->getConfig()->setHost('https://localhost/api/v2');
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
     * @return ActivityApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createActivity
     *
     * Create or update an Activity
     *
     * @param \BumbalClient\Model\ActivityModel $body Activity object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function createActivity($body = null)
    {
        list($response) = $this->createActivityWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createActivityWithHttpInfo
     *
     * Create or update an Activity
     *
     * @param \BumbalClient\Model\ActivityModel $body Activity object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createActivityWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/activity";
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
                '\BumbalClient\Model\ApiResponse',
                '/activity'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteActivity
     *
     * Delete an activity
     *
     * @param int $activity_id ID of the activity to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function deleteActivity($activity_id)
    {
        list($response) = $this->deleteActivityWithHttpInfo($activity_id);
        return $response;
    }

    /**
     * Operation deleteActivityWithHttpInfo
     *
     * Delete an activity
     *
     * @param int $activity_id ID of the activity to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteActivityWithHttpInfo($activity_id)
    {
        // verify the required parameter 'activity_id' is set
        if ($activity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $activity_id when calling deleteActivity');
        }
        // parse inputs
        $resourcePath = "/activity/{activityId}";
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
        if ($activity_id !== null) {
            $resourcePath = str_replace(
                "{" . "activityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($activity_id),
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
                '\BumbalClient\Model\ApiResponse',
                '/activity/{activityId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveActivity
     *
     * Find activity by ID
     *
     * @param int $activity_id ID of activity to return (required)
     * @param bool $include_activity_status Show the text value of the status (required)
     * @param bool $include_activity_type_name Show the text value of the activity type (required)
     * @param bool $include_activity_meta_data Include meta data connected to this Activity (required)
     * @param bool $include_address_object Include address data (required)
     * @param bool $include_time_slots Include TimeSlots (required)
     * @param bool $include_time_slot_tags Include tags from TimeSlots (required)
     * @param bool $include_route_info Include route data (required)
     * @param bool $include_driver_info Include driver data (required)
     * @param bool $include_activity_communication Include Communication Settings (required)
     * @param bool $include_activity_links Include Link Data (required)
     * @param bool $include_package_lines_info Include PackageLines (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ActivityModel
     */
    public function retrieveActivity($activity_id, $include_activity_status, $include_activity_type_name, $include_activity_meta_data, $include_address_object, $include_time_slots, $include_time_slot_tags, $include_route_info, $include_driver_info, $include_activity_communication, $include_activity_links, $include_package_lines_info)
    {
        list($response) = $this->retrieveActivityWithHttpInfo($activity_id, $include_activity_status, $include_activity_type_name, $include_activity_meta_data, $include_address_object, $include_time_slots, $include_time_slot_tags, $include_route_info, $include_driver_info, $include_activity_communication, $include_activity_links, $include_package_lines_info);
        return $response;
    }

    /**
     * Operation retrieveActivityWithHttpInfo
     *
     * Find activity by ID
     *
     * @param int $activity_id ID of activity to return (required)
     * @param bool $include_activity_status Show the text value of the status (required)
     * @param bool $include_activity_type_name Show the text value of the activity type (required)
     * @param bool $include_activity_meta_data Include meta data connected to this Activity (required)
     * @param bool $include_address_object Include address data (required)
     * @param bool $include_time_slots Include TimeSlots (required)
     * @param bool $include_time_slot_tags Include tags from TimeSlots (required)
     * @param bool $include_route_info Include route data (required)
     * @param bool $include_driver_info Include driver data (required)
     * @param bool $include_activity_communication Include Communication Settings (required)
     * @param bool $include_activity_links Include Link Data (required)
     * @param bool $include_package_lines_info Include PackageLines (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ActivityModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveActivityWithHttpInfo($activity_id, $include_activity_status, $include_activity_type_name, $include_activity_meta_data, $include_address_object, $include_time_slots, $include_time_slot_tags, $include_route_info, $include_driver_info, $include_activity_communication, $include_activity_links, $include_package_lines_info)
    {
        // verify the required parameter 'activity_id' is set
        if ($activity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $activity_id when calling retrieveActivity');
        }
        // verify the required parameter 'include_activity_status' is set
        if ($include_activity_status === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_activity_status when calling retrieveActivity');
        }
        // verify the required parameter 'include_activity_type_name' is set
        if ($include_activity_type_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_activity_type_name when calling retrieveActivity');
        }
        // verify the required parameter 'include_activity_meta_data' is set
        if ($include_activity_meta_data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_activity_meta_data when calling retrieveActivity');
        }
        // verify the required parameter 'include_address_object' is set
        if ($include_address_object === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_address_object when calling retrieveActivity');
        }
        // verify the required parameter 'include_time_slots' is set
        if ($include_time_slots === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_time_slots when calling retrieveActivity');
        }
        // verify the required parameter 'include_time_slot_tags' is set
        if ($include_time_slot_tags === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_time_slot_tags when calling retrieveActivity');
        }
        // verify the required parameter 'include_route_info' is set
        if ($include_route_info === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_route_info when calling retrieveActivity');
        }
        // verify the required parameter 'include_driver_info' is set
        if ($include_driver_info === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_driver_info when calling retrieveActivity');
        }
        // verify the required parameter 'include_activity_communication' is set
        if ($include_activity_communication === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_activity_communication when calling retrieveActivity');
        }
        // verify the required parameter 'include_activity_links' is set
        if ($include_activity_links === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_activity_links when calling retrieveActivity');
        }
        // verify the required parameter 'include_package_lines_info' is set
        if ($include_package_lines_info === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_package_lines_info when calling retrieveActivity');
        }
        // parse inputs
        $resourcePath = "/activity/{activityId}";
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
        if ($include_activity_status !== null) {
            $queryParams['include_activity_status'] = $this->apiClient->getSerializer()->toQueryValue($include_activity_status);
        }
        // query params
        if ($include_activity_type_name !== null) {
            $queryParams['include_activity_type_name'] = $this->apiClient->getSerializer()->toQueryValue($include_activity_type_name);
        }
        // query params
        if ($include_activity_meta_data !== null) {
            $queryParams['include_activity_meta_data'] = $this->apiClient->getSerializer()->toQueryValue($include_activity_meta_data);
        }
        // query params
        if ($include_address_object !== null) {
            $queryParams['include_address_object'] = $this->apiClient->getSerializer()->toQueryValue($include_address_object);
        }
        // query params
        if ($include_time_slots !== null) {
            $queryParams['include_time_slots'] = $this->apiClient->getSerializer()->toQueryValue($include_time_slots);
        }
        // query params
        if ($include_time_slot_tags !== null) {
            $queryParams['include_time_slot_tags'] = $this->apiClient->getSerializer()->toQueryValue($include_time_slot_tags);
        }
        // query params
        if ($include_route_info !== null) {
            $queryParams['include_route_info'] = $this->apiClient->getSerializer()->toQueryValue($include_route_info);
        }
        // query params
        if ($include_driver_info !== null) {
            $queryParams['include_driver_info'] = $this->apiClient->getSerializer()->toQueryValue($include_driver_info);
        }
        // query params
        if ($include_activity_communication !== null) {
            $queryParams['include_activity_communication'] = $this->apiClient->getSerializer()->toQueryValue($include_activity_communication);
        }
        // query params
        if ($include_activity_links !== null) {
            $queryParams['include_activity_links'] = $this->apiClient->getSerializer()->toQueryValue($include_activity_links);
        }
        // query params
        if ($include_package_lines_info !== null) {
            $queryParams['include_package_lines_info'] = $this->apiClient->getSerializer()->toQueryValue($include_package_lines_info);
        }
        // path params
        if ($activity_id !== null) {
            $resourcePath = str_replace(
                "{" . "activityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($activity_id),
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
                '\BumbalClient\Model\ActivityModel',
                '/activity/{activityId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ActivityModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ActivityModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListActivity
     *
     * Retrieve List of Activities
     *
     * @param \BumbalClient\Model\ActivityRetrieveListArguments $arguments Activity RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ActivityModel[]
     */
    public function retrieveListActivity($arguments)
    {
        list($response) = $this->retrieveListActivityWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListActivityWithHttpInfo
     *
     * Retrieve List of Activities
     *
     * @param \BumbalClient\Model\ActivityRetrieveListArguments $arguments Activity RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ActivityModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListActivityWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListActivity');
        }
        // parse inputs
        $resourcePath = "/activity";
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
                '\BumbalClient\Model\ActivityModel[]',
                '/activity'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ActivityModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ActivityModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setActivity
     *
     * Set (create or update) an Activity
     *
     * @param \BumbalClient\Model\ActivityModel $body Activity object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function setActivity($body = null)
    {
        list($response) = $this->setActivityWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation setActivityWithHttpInfo
     *
     * Set (create or update) an Activity
     *
     * @param \BumbalClient\Model\ActivityModel $body Activity object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setActivityWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/activity/set";
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
                '\BumbalClient\Model\ApiResponse',
                '/activity/set'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateActivity
     *
     * Update a activity
     *
     * @param int $activity_id ID of activity to update (required)
     * @param \BumbalClient\Model\ActivityModel $body Activity object that needs to be updated (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function updateActivity($activity_id, $body = null)
    {
        list($response) = $this->updateActivityWithHttpInfo($activity_id, $body);
        return $response;
    }

    /**
     * Operation updateActivityWithHttpInfo
     *
     * Update a activity
     *
     * @param int $activity_id ID of activity to update (required)
     * @param \BumbalClient\Model\ActivityModel $body Activity object that needs to be updated (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateActivityWithHttpInfo($activity_id, $body = null)
    {
        // verify the required parameter 'activity_id' is set
        if ($activity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $activity_id when calling updateActivity');
        }
        // parse inputs
        $resourcePath = "/activity/{activityId}";
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
        if ($activity_id !== null) {
            $resourcePath = str_replace(
                "{" . "activityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($activity_id),
                $resourcePath
            );
        }
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/activity/{activityId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
