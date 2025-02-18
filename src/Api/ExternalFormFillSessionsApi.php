<?php
declare(strict_types=1);

/**
 * ExternalFormFillSessionsApi.
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
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

namespace DocuSign\Rooms\Api\ExternalFormFillSessionsApi;



namespace DocuSign\Rooms\Api;

use DocuSign\Rooms\Client\ApiClient;
use DocuSign\Rooms\Client\ApiException;
use DocuSign\Rooms\Configuration;
use DocuSign\Rooms\ObjectSerializer;

/**
 * ExternalFormFillSessionsApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExternalFormFillSessionsApi
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
     * Operation createExternalFormFillSession
     *
     * Creates an external form fill session.
     *
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param \DocuSign\Rooms\Model\ExternalFormFillSessionForCreate $body Request body that accepts the &#x60;roomId&#x60; and &#x60;formId&#x60; or &#x60;formIds&#x60; that you specify in the &#x60;formFillSessionForCreate&#x60; request body. User may supply up to 10 &#x60;formIds&#x60;. Eventually, &#x60;formId&#x60; will be deprecated (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\ExternalFormFillSession
     */
    public function createExternalFormFillSession($account_id, $body = null)
    {
        list($response) = $this->createExternalFormFillSessionWithHttpInfo($account_id, $body);
        return $response;
    }

    /**
     * Operation createExternalFormFillSessionWithHttpInfo
     *
     * Creates an external form fill session.
     *
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param \DocuSign\Rooms\Model\ExternalFormFillSessionForCreate $body Request body that accepts the &#x60;roomId&#x60; and &#x60;formId&#x60; or &#x60;formIds&#x60; that you specify in the &#x60;formFillSessionForCreate&#x60; request body. User may supply up to 10 &#x60;formIds&#x60;. Eventually, &#x60;formId&#x60; will be deprecated (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\ExternalFormFillSession, HTTP status code, HTTP response headers (array of strings)
     */
    public function createExternalFormFillSessionWithHttpInfo($account_id, $body = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling createExternalFormFillSession');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/external_form_fill_sessions";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json', 'application/xml', 'text/xml']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json', 'application/xml', 'text/xml', 'application/_*+xml']);


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
                '\DocuSign\Rooms\Model\ExternalFormFillSession',
                '/v2/accounts/{accountId}/external_form_fill_sessions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\ExternalFormFillSession', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\ExternalFormFillSession', $e->getResponseHeaders());
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
