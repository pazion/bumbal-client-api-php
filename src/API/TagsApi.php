<?php
/**
 * TagsApi
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
 * TagsApi Class Doc Comment
 *
 * @category Class
 * @package  Bumbal\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TagsApi
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
     * @return TagsApi
     */
    public function setApiClient(\Bumbal\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createTag
     *
     * Add a new Tag
     *
     * @param \Bumbal\Client\Model\TagModel $body Tag object that needs to be created (optional)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return \Bumbal\Client\Model\ApiResponse
     */
    public function createTag($body = null)
    {
        list($response) = $this->createTagWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createTagWithHttpInfo
     *
     * Add a new Tag
     *
     * @param \Bumbal\Client\Model\TagModel $body Tag object that needs to be created (optional)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return array of \Bumbal\Client\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTagWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/tags";
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
                '/tags'
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
     * Operation deleteTag
     *
     * Delete a Tag
     *
     * @param int $tag_id ID of tag to delete (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return \Bumbal\Client\Model\ApiResponse
     */
    public function deleteTag($tag_id)
    {
        list($response) = $this->deleteTagWithHttpInfo($tag_id);
        return $response;
    }

    /**
     * Operation deleteTagWithHttpInfo
     *
     * Delete a Tag
     *
     * @param int $tag_id ID of tag to delete (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return array of \Bumbal\Client\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteTagWithHttpInfo($tag_id)
    {
        // verify the required parameter 'tag_id' is set
        if ($tag_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tag_id when calling deleteTag');
        }
        // parse inputs
        $resourcePath = "/tags/{tagId}";
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
        if ($tag_id !== null) {
            $resourcePath = str_replace(
                "{" . "tagId" . "}",
                $this->apiClient->getSerializer()->toPathValue($tag_id),
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
                '/tags/{tagId}'
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
     * Operation retrieveListTags
     *
     * Retrieve List of Tags
     *
     * @param \Bumbal\Client\Model\TagsRetrieveListArguments $arguments Tags RetrieveList Arguments (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return \Bumbal\Client\Model\TagModel[]
     */
    public function retrieveListTags($arguments)
    {
        list($response) = $this->retrieveListTagsWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListTagsWithHttpInfo
     *
     * Retrieve List of Tags
     *
     * @param \Bumbal\Client\Model\TagsRetrieveListArguments $arguments Tags RetrieveList Arguments (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return array of \Bumbal\Client\Model\TagModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListTagsWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListTags');
        }
        // parse inputs
        $resourcePath = "/tags";
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
                '\Bumbal\Client\Model\TagModel[]',
                '/tags'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Bumbal\Client\Model\TagModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Bumbal\Client\Model\TagModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveTag
     *
     * Retrieve a Tag
     *
     * @param int $tag_id ID of tag to retrieve (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return \Bumbal\Client\Model\TagModel
     */
    public function retrieveTag($tag_id)
    {
        list($response) = $this->retrieveTagWithHttpInfo($tag_id);
        return $response;
    }

    /**
     * Operation retrieveTagWithHttpInfo
     *
     * Retrieve a Tag
     *
     * @param int $tag_id ID of tag to retrieve (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return array of \Bumbal\Client\Model\TagModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveTagWithHttpInfo($tag_id)
    {
        // verify the required parameter 'tag_id' is set
        if ($tag_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tag_id when calling retrieveTag');
        }
        // parse inputs
        $resourcePath = "/tags/{tagId}";
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
        if ($tag_id !== null) {
            $resourcePath = str_replace(
                "{" . "tagId" . "}",
                $this->apiClient->getSerializer()->toPathValue($tag_id),
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
                '\Bumbal\Client\Model\TagModel',
                '/tags/{tagId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Bumbal\Client\Model\TagModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Bumbal\Client\Model\TagModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateTag
     *
     * Update a Tag
     *
     * @param int $tag_id ID of tag to update (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return \Bumbal\Client\Model\ApiResponse
     */
    public function updateTag($tag_id)
    {
        list($response) = $this->updateTagWithHttpInfo($tag_id);
        return $response;
    }

    /**
     * Operation updateTagWithHttpInfo
     *
     * Update a Tag
     *
     * @param int $tag_id ID of tag to update (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return array of \Bumbal\Client\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateTagWithHttpInfo($tag_id)
    {
        // verify the required parameter 'tag_id' is set
        if ($tag_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tag_id when calling updateTag');
        }
        // parse inputs
        $resourcePath = "/tags/{tagId}";
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
        if ($tag_id !== null) {
            $resourcePath = str_replace(
                "{" . "tagId" . "}",
                $this->apiClient->getSerializer()->toPathValue($tag_id),
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
                '/tags/{tagId}'
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
