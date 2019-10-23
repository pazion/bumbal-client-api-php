<?php
/**
 * CommunicationApi
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
 * CommunicationApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommunicationApi
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
     * @return CommunicationApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation retrieveActivityCommunication
     *
     * Retrieve Activity
     *
     * @param int $activity_id ActivityId (required)
     * @return \Model\ApiResponse
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function retrieveActivityCommunication($activity_id)
    {
        list($response) = $this->retrieveActivityCommunicationWithHttpInfo($activity_id);
        return $response;
    }

    /**
     * Operation retrieveActivityCommunicationWithHttpInfo
     *
     * Retrieve Activity
     *
     * @param int $activity_id ActivityId (required)
     * @return Array of \Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function retrieveActivityCommunicationWithHttpInfo($activity_id)
    {
        // verify the required parameter 'activity_id' is set
        if ($activity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $activity_id when calling retrieveActivityCommunication');
        }
        // parse inputs
        $resourcePath = "/communication/retrieve-activity";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/xml','multipart/form-data'));

        // query params
        if ($activity_id !== null) {
            $queryParams['activityId'] = $this->apiClient->getSerializer()->toQueryValue($activity_id);
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Model\ApiResponse',
                '/communication/retrieve-activity'
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
     * Operation triggerMessageCommunication
     *
     * Trigger Message to Communication
     *
     * @param int $activity_id ActivityId (required)
     * @param string $message_type MessageType (required)
     * @param bool $check_preference checkPreference (required)
     * @return \Model\ApiResponse
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function triggerMessageCommunication($activity_id, $message_type, $check_preference)
    {
        list($response) = $this->triggerMessageCommunicationWithHttpInfo($activity_id, $message_type, $check_preference);
        return $response;
    }

    /**
     * Operation triggerMessageCommunicationWithHttpInfo
     *
     * Trigger Message to Communication
     *
     * @param int $activity_id ActivityId (required)
     * @param string $message_type MessageType (required)
     * @param bool $check_preference checkPreference (required)
     * @return Array of \Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \BumbalClient\ApiException on non-2xx response
     */
    public function triggerMessageCommunicationWithHttpInfo($activity_id, $message_type, $check_preference)
    {
        // verify the required parameter 'activity_id' is set
        if ($activity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $activity_id when calling triggerMessageCommunication');
        }
        // verify the required parameter 'message_type' is set
        if ($message_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $message_type when calling triggerMessageCommunication');
        }
        // verify the required parameter 'check_preference' is set
        if ($check_preference === null) {
            throw new \InvalidArgumentException('Missing the required parameter $check_preference when calling triggerMessageCommunication');
        }
        // parse inputs
        $resourcePath = "/communication/trigger-message";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/xml','multipart/form-data'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($activity_id !== null) {
            $formParams['activityId'] = $this->apiClient->getSerializer()->toFormValue($activity_id);
        }
        // form params
        if ($message_type !== null) {
            $formParams['messageType'] = $this->apiClient->getSerializer()->toFormValue($message_type);
        }
        // form params
        if ($check_preference !== null) {
            $formParams['checkPreference'] = $this->apiClient->getSerializer()->toFormValue($check_preference);
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
                '/communication/trigger-message'
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
