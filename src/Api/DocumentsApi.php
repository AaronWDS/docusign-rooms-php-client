<?php
declare(strict_types=1);

/**
 * DocumentsApi.
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign Rooms PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign Rooms API - v2
 *
 * An API for an integrator to access the features of DocuSign Rooms
 *
 * OpenAPI spec version: v2
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\Rooms\Api\DocumentsApi;


/**
 * GetDocumentOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign Rooms PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetDocumentOptions
{
    /**
      * $include_contents When set to **true**, includes the contents of the document in the `base64Contents` property of the response. The default value is **false**.
      * @var ?bool
      */
    protected ?bool $include_contents = null;

    /**
     * Gets include_contents
     *
     * @return ?bool
     */
    public function getIncludeContents(): ?bool
    {
        return $this->include_contents;
    }

    /**
     * Sets include_contents
     * @param ?bool $include_contents When set to **true**, includes the contents of the document in the `base64Contents` property of the response. The default value is **false**.
     *
     * @return self
     */
    public function setIncludeContents(?bool $include_contents): self
    {
        $this->include_contents = $include_contents;
        return $this;
    }
}



namespace DocuSign\Rooms\Api;

use DocuSign\Rooms\Client\ApiClient;
use DocuSign\Rooms\Client\ApiException;
use DocuSign\Rooms\Configuration;
use DocuSign\Rooms\ObjectSerializer;

/**
 * DocumentsApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign Rooms PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentsApi
{
    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected ApiClient $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     *
     * @return void
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?? new ApiClient();
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient(): ApiClient
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return self
     */
    public function setApiClient(ApiClient $apiClient): self
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
    * Update $resourcePath with $
    *
    * @param string $resourcePath the resource path to use
    * @param string $baseName the base name param
    * @param string $paramName the parameter name
    *
    * @return string
    */
    public function updateResourcePath(string $resourcePath, string $baseName, string $paramName): string
    {
        return str_replace(
            "{" . $baseName . "}",
            $this->apiClient->getSerializer()->toPathValue($paramName),
            $resourcePath
        );
    }


    /**
     * Operation createDocumentUser
     *
     * Grants access to a document for a user.
     *
     * @param ?int $document_id The id of the document.
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param \DocuSign\Rooms\Model\DocumentUserForCreate $body  (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\DocumentUser
     */
    public function createDocumentUser($document_id, $account_id, $body = null)
    {
        list($response) = $this->createDocumentUserWithHttpInfo($document_id, $account_id, $body);
        return $response;
    }

    /**
     * Operation createDocumentUserWithHttpInfo
     *
     * Grants access to a document for a user.
     *
     * @param ?int $document_id The id of the document.
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param \DocuSign\Rooms\Model\DocumentUserForCreate $body  (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\DocumentUser, HTTP status code, HTTP response headers (array of strings)
     */
    public function createDocumentUserWithHttpInfo($document_id, $account_id, $body = null): array
    {
        // verify the required parameter 'document_id' is set
        if ($document_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $document_id when calling createDocumentUser');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling createDocumentUser');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/documents/{documentId}/users";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);


        // path params
        if ($document_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "documentId", $document_id);
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
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
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\Rooms\Model\DocumentUser',
                '/v2/accounts/{accountId}/documents/{documentId}/users'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\DocumentUser', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\DocumentUser', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\ApiError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\ApiError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteDocument
     *
     * Deletes a document.
     *
     * @param ?int $document_id The ID of the document.
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     *
     * @throws ApiException on non-2xx response
     * @return mixed
     */
    public function deleteDocument($document_id, $account_id)
    {
        list($response) = $this->deleteDocumentWithHttpInfo($document_id, $account_id);
        return $response;
    }

    /**
     * Operation deleteDocumentWithHttpInfo
     *
     * Deletes a document.
     *
     * @param ?int $document_id The ID of the document.
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     *
     * @throws ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteDocumentWithHttpInfo($document_id, $account_id): array
    {
        // verify the required parameter 'document_id' is set
        if ($document_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $document_id when calling deleteDocument');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling deleteDocument');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/documents/{documentId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);


        // path params
        if ($document_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "documentId", $document_id);
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
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
                '/v2/accounts/{accountId}/documents/{documentId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\ApiError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\ApiError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getDocument
     *
     * Get information about the Document with the given DocumentId.
     *
     * @param ?int $document_id The id of the document.
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param  \DocuSign\Rooms\Api\DocumentsApi\GetDocumentOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\Document
     */
    public function getDocument($document_id, $account_id, \DocuSign\Rooms\Api\DocumentsApi\GetDocumentOptions $options = null)
    {
        list($response) = $this->getDocumentWithHttpInfo($document_id, $account_id, $options);
        return $response;
    }

    /**
     * Operation getDocumentWithHttpInfo
     *
     * Get information about the Document with the given DocumentId.
     *
     * @param ?int $document_id The id of the document.
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param  \DocuSign\Rooms\Api\DocumentsApi\GetDocumentOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\Document, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDocumentWithHttpInfo($document_id, $account_id, \DocuSign\Rooms\Api\DocumentsApi\GetDocumentOptions $options = null): array
    {
        // verify the required parameter 'document_id' is set
        if ($document_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $document_id when calling getDocument');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getDocument');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/documents/{documentId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);

        if ($options != null)
        {
            // query params
            if ($options->getIncludeContents() != 'null') {
                $queryParams['includeContents'] = $this->apiClient->getSerializer()->toQueryValue($options->getIncludeContents());
            }
        }

        // path params
        if ($document_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "documentId", $document_id);
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\Rooms\Model\Document',
                '/v2/accounts/{accountId}/documents/{documentId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\Document', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\Document', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\ApiError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\ApiError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
