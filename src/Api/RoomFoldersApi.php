<?php
/**
 * RoomFoldersApi
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team
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
 * Swagger Codegen version: 2.4.13-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\Rooms\Api\RoomFoldersApi;

class GetRoomFoldersOptions
{
    /**
      * $start_position Position of the first item in the total results. Defaults to 0.
      * @var int
      */
    protected $start_position;

    /**
     * Gets start_position
     * @return int
     */
    public function getStartPosition()
    {
        return $this->start_position;
    }
  
    /**
     * Sets start_position
     * @param int $start_position Position of the first item in the total results. Defaults to 0.
     * @return $this
     */
    public function setStartPosition($start_position)
    {
        $this->start_position = $start_position;
        return $this;
    }
    /**
      * $count Number of room folders to return. Defaults to the maximum which is 100.
      * @var int
      */
    protected $count;

    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
  
    /**
     * Sets count
     * @param int $count Number of room folders to return. Defaults to the maximum which is 100.
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }
}


namespace DocuSign\Rooms\Api;

use \DocuSign\Rooms\Client\ApiClient;
use \DocuSign\Rooms\Client\ApiException;
use \DocuSign\Rooms\Configuration;
use \DocuSign\Rooms\ObjectSerializer;

/**
 * RoomFoldersApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoomFoldersApi
{
    /**
     * API Client
     *
     * @var \DocuSign\Rooms\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \DocuSign\Rooms\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\DocuSign\Rooms\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \DocuSign\Rooms\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \DocuSign\Rooms\Client\ApiClient $apiClient set the API client
     *
     * @return RoomFoldersApi
     */
    public function setApiClient(\DocuSign\Rooms\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getRoomFolders
     *
     * Gets room folders accessible to the calling user.
     *
    * @param int $room_id The room id from which to retrieve folders.
    * @param string $account_id 
     * @param  $options Options for modifying the behavior of the function. (optional)
     * @throws \DocuSign\Rooms\Client\ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\RoomFolderList
     */
    public function getRoomFolders($room_id, $account_id, RoomFoldersApi\GetRoomFoldersOptions $options = null)
    {
        list($response) = $this->getRoomFoldersWithHttpInfo($room_id, $account_id, $options);
        return $response;
    }

    /**
     * Operation getRoomFoldersWithHttpInfo
     *
     * Gets room folders accessible to the calling user.
     *
    * @param int $room_id The room id from which to retrieve folders.
    * @param string $account_id 
     * @param  $options Options for modifying the behavior of the function. (optional)
     * @throws \DocuSign\Rooms\Client\ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\RoomFolderList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRoomFoldersWithHttpInfo($room_id, $account_id, RoomFoldersApi\GetRoomFoldersOptions $options = null)
    {
        // verify the required parameter 'room_id' is set
        if ($room_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $room_id when calling getRoomFolders');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getRoomFolders');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/rooms/{roomId}/room_folders";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        if ($options != null)
        {
        // query params
        // query params
        if ($options->getStartPosition() !== null) {
            $queryParams['startPosition'] = $this->apiClient->getSerializer()->toQueryValue($options->getStartPosition());
        }
        // query params
        if ($options->getCount() !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($options->getCount());
        }
        }

        // path params
        if ($room_id !== null) {
            $resourcePath = str_replace(
                "{" . "roomId" . "}",
                $this->apiClient->getSerializer()->toPathValue($room_id),
                $resourcePath
            );
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "accountId" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
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
                '\DocuSign\Rooms\Model\RoomFolderList',
                '/v2/accounts/{accountId}/rooms/{roomId}/room_folders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\RoomFolderList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\RoomFolderList', $e->getResponseHeaders());
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
