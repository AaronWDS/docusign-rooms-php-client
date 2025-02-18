<?php
declare(strict_types=1);

/**
 * OfficesApi.
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

namespace DocuSign\Rooms\Api\OfficesApi;


/**
 * GetOfficesOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetOfficesOptions
{
    /**
      * $count Number of offices to include in the response, (Default 100)
      * @var ?int
      */
    protected ?int $count = null;

    /**
     * Gets count
     *
     * @return ?int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Sets count
     * @param ?int $count Number of offices to include in the response, (Default 100)
     *
     * @return self
     */
    public function setCount(?int $count): self
    {
        $this->count = $count;
        return $this;
    }
    /**
      * $start_position Position in the overall list of offices to begin results.
      * @var ?int
      */
    protected ?int $start_position = null;

    /**
     * Gets start_position
     *
     * @return ?int
     */
    public function getStartPosition(): ?int
    {
        return $this->start_position;
    }

    /**
     * Sets start_position
     * @param ?int $start_position Position in the overall list of offices to begin results.
     *
     * @return self
     */
    public function setStartPosition(?int $start_position): self
    {
        $this->start_position = $start_position;
        return $this;
    }
    /**
      * $only_accessible When true, the response only includes offices accessible to the calling user.
      * @var ?bool
      */
    protected ?bool $only_accessible = null;

    /**
     * Gets only_accessible
     *
     * @return ?bool
     */
    public function getOnlyAccessible(): ?bool
    {
        return $this->only_accessible;
    }

    /**
     * Sets only_accessible
     * @param ?bool $only_accessible When true, the response only includes offices accessible to the calling user.
     *
     * @return self
     */
    public function setOnlyAccessible(?bool $only_accessible): self
    {
        $this->only_accessible = $only_accessible;
        return $this;
    }
    /**
      * $search When specified, the response only includes offices whose names includes the specified search string.
      * @var ?string
      */
    protected ?string $search = null;

    /**
     * Gets search
     *
     * @return ?string
     */
    public function getSearch(): ?string
    {
        return $this->search;
    }

    /**
     * Sets search
     * @param ?string $search When specified, the response only includes offices whose names includes the specified search string.
     *
     * @return self
     */
    public function setSearch(?string $search): self
    {
        $this->search = $search;
        return $this;
    }
}



namespace DocuSign\Rooms\Api;

use DocuSign\Rooms\Client\ApiClient;
use DocuSign\Rooms\Client\ApiException;
use DocuSign\Rooms\Configuration;
use DocuSign\Rooms\ObjectSerializer;

/**
 * OfficesApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OfficesApi
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
     * Operation createOffice
     *
     * Create an office.
     *
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param \DocuSign\Rooms\Model\OfficeForCreate $body Creates an office with given name and other details like Region,Address (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\Office
     */
    public function createOffice($account_id, $body = null)
    {
        list($response) = $this->createOfficeWithHttpInfo($account_id, $body);
        return $response;
    }

    /**
     * Operation createOfficeWithHttpInfo
     *
     * Create an office.
     *
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param \DocuSign\Rooms\Model\OfficeForCreate $body Creates an office with given name and other details like Region,Address (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\Office, HTTP status code, HTTP response headers (array of strings)
     */
    public function createOfficeWithHttpInfo($account_id, $body = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling createOffice');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/offices";
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
                '\DocuSign\Rooms\Model\Office',
                '/v2/accounts/{accountId}/offices'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\Office', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\Office', $e->getResponseHeaders());
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
     * Operation deleteOffice
     *
     * Delete an office.
     *
     * @param ?int $office_id Office ID to be deleted
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     *
     * @throws ApiException on non-2xx response
     * @return mixed
     */
    public function deleteOffice($office_id, $account_id)
    {
        list($response) = $this->deleteOfficeWithHttpInfo($office_id, $account_id);
        return $response;
    }

    /**
     * Operation deleteOfficeWithHttpInfo
     *
     * Delete an office.
     *
     * @param ?int $office_id Office ID to be deleted
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     *
     * @throws ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteOfficeWithHttpInfo($office_id, $account_id): array
    {
        // verify the required parameter 'office_id' is set
        if ($office_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $office_id when calling deleteOffice');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling deleteOffice');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/offices/{officeId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json', 'application/xml', 'text/xml']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);


        // path params
        if ($office_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "officeId", $office_id);
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
                '/v2/accounts/{accountId}/offices/{officeId}'
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
     * Operation getOffice
     *
     * Get information about the office with the given officeId.
     *
     * @param ?int $office_id The id of the office.
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\Office
     */
    public function getOffice($office_id, $account_id)
    {
        list($response) = $this->getOfficeWithHttpInfo($office_id, $account_id);
        return $response;
    }

    /**
     * Operation getOfficeWithHttpInfo
     *
     * Get information about the office with the given officeId.
     *
     * @param ?int $office_id The id of the office.
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\Office, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOfficeWithHttpInfo($office_id, $account_id): array
    {
        // verify the required parameter 'office_id' is set
        if ($office_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $office_id when calling getOffice');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getOffice');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/offices/{officeId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json', 'application/xml', 'text/xml']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);


        // path params
        if ($office_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "officeId", $office_id);
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
                '\DocuSign\Rooms\Model\Office',
                '/v2/accounts/{accountId}/offices/{officeId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\Office', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\Office', $e->getResponseHeaders());
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
     * Operation getOffices
     *
     * Get all offices.
     *
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param  \DocuSign\Rooms\Api\OfficesApi\GetOfficesOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\OfficeSummaryList
     */
    public function getOffices($account_id, \DocuSign\Rooms\Api\OfficesApi\GetOfficesOptions $options = null)
    {
        list($response) = $this->getOfficesWithHttpInfo($account_id, $options);
        return $response;
    }

    /**
     * Operation getOfficesWithHttpInfo
     *
     * Get all offices.
     *
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param  \DocuSign\Rooms\Api\OfficesApi\GetOfficesOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\OfficeSummaryList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOfficesWithHttpInfo($account_id, \DocuSign\Rooms\Api\OfficesApi\GetOfficesOptions $options = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getOffices');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/offices";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json', 'application/xml', 'text/xml']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);

        if ($options != null)
        {
            // query params
            if ($options->getCount() != 'null') {
                $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($options->getCount());
            }
            if ($options->getStartPosition() != 'null') {
                $queryParams['startPosition'] = $this->apiClient->getSerializer()->toQueryValue($options->getStartPosition());
            }
            if ($options->getOnlyAccessible() != 'null') {
                $queryParams['onlyAccessible'] = $this->apiClient->getSerializer()->toQueryValue($options->getOnlyAccessible());
            }
            if ($options->getSearch() != 'null') {
                $queryParams['search'] = $this->apiClient->getSerializer()->toQueryValue($options->getSearch());
            }
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
                '\DocuSign\Rooms\Model\OfficeSummaryList',
                '/v2/accounts/{accountId}/offices'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\OfficeSummaryList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\OfficeSummaryList', $e->getResponseHeaders());
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
     * Operation getReferenceCounts
     *
     * Lists the number of objects of each type that reference the office.
     *
     * @param ?int $office_id ID of the office
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\OfficeReferenceCountList
     */
    public function getReferenceCounts($office_id, $account_id)
    {
        list($response) = $this->getReferenceCountsWithHttpInfo($office_id, $account_id);
        return $response;
    }

    /**
     * Operation getReferenceCountsWithHttpInfo
     *
     * Lists the number of objects of each type that reference the office.
     *
     * @param ?int $office_id ID of the office
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\OfficeReferenceCountList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReferenceCountsWithHttpInfo($office_id, $account_id): array
    {
        // verify the required parameter 'office_id' is set
        if ($office_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $office_id when calling getReferenceCounts');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getReferenceCounts');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/offices/{officeId}/reference_counts";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json', 'application/xml', 'text/xml']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);


        // path params
        if ($office_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "officeId", $office_id);
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
                '\DocuSign\Rooms\Model\OfficeReferenceCountList',
                '/v2/accounts/{accountId}/offices/{officeId}/reference_counts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\OfficeReferenceCountList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\OfficeReferenceCountList', $e->getResponseHeaders());
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
