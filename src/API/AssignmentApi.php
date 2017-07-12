<?php
/**
 * AssignmentApi
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

namespace BumbalClient/API;

use \BumbalClient\ApiClient;
use \BumbalClient\ApiException;
use \BumbalClient\Configuration;
use \BumbalClient\ObjectSerializer;

/**
 * AssignmentApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssignmentApi
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
     * @return AssignmentApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createAssignment
     *
     * Add a new Assignment
     *
     * @param \BumbalClient/Model\AssignmentModel $body Assignment object that needs to be created (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient/Model\ApiResponse
     */
    public function createAssignment($body)
    {
        list($response) = $this->createAssignmentWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createAssignmentWithHttpInfo
     *
     * Add a new Assignment
     *
     * @param \BumbalClient/Model\AssignmentModel $body Assignment object that needs to be created (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient/Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createAssignmentWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createAssignment');
        }
        // parse inputs
        $resourcePath = "/assignment";
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
                '\BumbalClient/Model\ApiResponse',
                '/assignment'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient/Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient/Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteAssignment
     *
     * Delete an Assignment
     *
     * @param int $assignment_id ID of assignment to update (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient/Model\ApiResponse
     */
    public function deleteAssignment($assignment_id)
    {
        list($response) = $this->deleteAssignmentWithHttpInfo($assignment_id);
        return $response;
    }

    /**
     * Operation deleteAssignmentWithHttpInfo
     *
     * Delete an Assignment
     *
     * @param int $assignment_id ID of assignment to update (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient/Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteAssignmentWithHttpInfo($assignment_id)
    {
        // verify the required parameter 'assignment_id' is set
        if ($assignment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $assignment_id when calling deleteAssignment');
        }
        // parse inputs
        $resourcePath = "/assignment/{assignmentId}";
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
        if ($assignment_id !== null) {
            $resourcePath = str_replace(
                "{" . "assignmentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($assignment_id),
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
                '\BumbalClient/Model\ApiResponse',
                '/assignment/{assignmentId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient/Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient/Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveAssignment
     *
     * Retrieve a Assignment
     *
     * @param int $assignment_id ID of assignment to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient/Model\AssignmentModel
     */
    public function retrieveAssignment($assignment_id)
    {
        list($response) = $this->retrieveAssignmentWithHttpInfo($assignment_id);
        return $response;
    }

    /**
     * Operation retrieveAssignmentWithHttpInfo
     *
     * Retrieve a Assignment
     *
     * @param int $assignment_id ID of assignment to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient/Model\AssignmentModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveAssignmentWithHttpInfo($assignment_id)
    {
        // verify the required parameter 'assignment_id' is set
        if ($assignment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $assignment_id when calling retrieveAssignment');
        }
        // parse inputs
        $resourcePath = "/assignment/{assignmentId}";
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
        if ($assignment_id !== null) {
            $resourcePath = str_replace(
                "{" . "assignmentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($assignment_id),
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
                '\BumbalClient/Model\AssignmentModel',
                '/assignment/{assignmentId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient/Model\AssignmentModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient/Model\AssignmentModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListAssignment
     *
     * Retrieve List of Assignments
     *
     * @param \BumbalClient/Model\AssignmentRetrieveListArguments $arguments Assignment RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient/Model\AssignmentModel[]
     */
    public function retrieveListAssignment($arguments)
    {
        list($response) = $this->retrieveListAssignmentWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListAssignmentWithHttpInfo
     *
     * Retrieve List of Assignments
     *
     * @param \BumbalClient/Model\AssignmentRetrieveListArguments $arguments Assignment RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient/Model\AssignmentModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListAssignmentWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListAssignment');
        }
        // parse inputs
        $resourcePath = "/assignment";
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
                '\BumbalClient/Model\AssignmentModel[]',
                '/assignment'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient/Model\AssignmentModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient/Model\AssignmentModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateAssignment
     *
     * Update a Assignment
     *
     * @param int $assignment_id ID of assignment to update (required)
     * @param \BumbalClient/Model\AssignmentModel $body Assignment object that needs to be updated (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient/Model\ApiResponse
     */
    public function updateAssignment($assignment_id, $body)
    {
        list($response) = $this->updateAssignmentWithHttpInfo($assignment_id, $body);
        return $response;
    }

    /**
     * Operation updateAssignmentWithHttpInfo
     *
     * Update a Assignment
     *
     * @param int $assignment_id ID of assignment to update (required)
     * @param \BumbalClient/Model\AssignmentModel $body Assignment object that needs to be updated (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient/Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateAssignmentWithHttpInfo($assignment_id, $body)
    {
        // verify the required parameter 'assignment_id' is set
        if ($assignment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $assignment_id when calling updateAssignment');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateAssignment');
        }
        // parse inputs
        $resourcePath = "/assignment/{assignmentId}";
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
        if ($assignment_id !== null) {
            $resourcePath = str_replace(
                "{" . "assignmentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($assignment_id),
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
                '\BumbalClient/Model\ApiResponse',
                '/assignment/{assignmentId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient/Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient/Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
