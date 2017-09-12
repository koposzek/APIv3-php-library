<?php
/**
 * AttributesApi
 * PHP version 5
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SendinBlue\Client\Api;

use \SendinBlue\Client\ApiClient;
use \SendinBlue\Client\ApiException;
use \SendinBlue\Client\Configuration;
use \SendinBlue\Client\ObjectSerializer;

/**
 * AttributesApi Class Doc Comment
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AttributesApi
{
    /**
     * API Client
     *
     * @var \SendinBlue\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \SendinBlue\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\SendinBlue\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \SendinBlue\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \SendinBlue\Client\ApiClient $apiClient set the API client
     *
     * @return AttributesApi
     */
    public function setApiClient(\SendinBlue\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createAttribute
     *
     * Creates contact attributes
     *
     * @param \SendinBlue\Client\Model\CreateAttribute $createAttribute Values to create an attribute (required)
     * @throws \SendinBlue\Client\ApiException on non-2xx response
     * @return \SendinBlue\Client\Model\CreateModel
     */
    public function createAttribute($createAttribute)
    {
        list($response) = $this->createAttributeWithHttpInfo($createAttribute);
        return $response;
    }

    /**
     * Operation createAttributeWithHttpInfo
     *
     * Creates contact attributes
     *
     * @param \SendinBlue\Client\Model\CreateAttribute $createAttribute Values to create an attribute (required)
     * @throws \SendinBlue\Client\ApiException on non-2xx response
     * @return array of \SendinBlue\Client\Model\CreateModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function createAttributeWithHttpInfo($createAttribute)
    {
        // verify the required parameter 'createAttribute' is set
        if ($createAttribute === null) {
            throw new \InvalidArgumentException('Missing the required parameter $createAttribute when calling createAttribute');
        }
        // parse inputs
        $resourcePath = "/contacts/attributes";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($createAttribute)) {
            $_tempBody = $createAttribute;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SendinBlue\Client\Model\CreateModel',
                '/contacts/attributes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SendinBlue\Client\Model\CreateModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SendinBlue\Client\Model\CreateModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SendinBlue\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteAttribute
     *
     * Deletes an attribute
     *
     * @param string $attributeId id of the attribute (required)
     * @throws \SendinBlue\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteAttribute($attributeId)
    {
        list($response) = $this->deleteAttributeWithHttpInfo($attributeId);
        return $response;
    }

    /**
     * Operation deleteAttributeWithHttpInfo
     *
     * Deletes an attribute
     *
     * @param string $attributeId id of the attribute (required)
     * @throws \SendinBlue\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteAttributeWithHttpInfo($attributeId)
    {
        // verify the required parameter 'attributeId' is set
        if ($attributeId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attributeId when calling deleteAttribute');
        }
        // parse inputs
        $resourcePath = "/contacts/attributes/{attributeId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($attributeId !== null) {
            $resourcePath = str_replace(
                "{" . "attributeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($attributeId),
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
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/contacts/attributes/{attributeId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SendinBlue\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SendinBlue\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAttributes
     *
     * Lists all attributes
     *
     * @throws \SendinBlue\Client\ApiException on non-2xx response
     * @return \SendinBlue\Client\Model\GetAttributes
     */
    public function getAttributes()
    {
        list($response) = $this->getAttributesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getAttributesWithHttpInfo
     *
     * Lists all attributes
     *
     * @throws \SendinBlue\Client\ApiException on non-2xx response
     * @return array of \SendinBlue\Client\Model\GetAttributes, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAttributesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/contacts/attributes";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SendinBlue\Client\Model\GetAttributes',
                '/contacts/attributes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SendinBlue\Client\Model\GetAttributes', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SendinBlue\Client\Model\GetAttributes', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
