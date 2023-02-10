<?php
/**
 * RoomUserSortingOption
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

namespace DocuSign\Rooms\Model;
use DocuSign\Rooms\ObjectSerializer;

/**
 * RoomUserSortingOption Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Rooms
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RoomUserSortingOption
{
    /**
     * Possible values of this enum
     */
    const FIRST_NAME_ASC = 'FirstNameAsc';
    const LAST_NAME_ASC = 'LastNameAsc';
    const EMAIL_ASC = 'EmailAsc';
    const FIRST_NAME_DESC = 'FirstNameDesc';
    const LAST_NAME_DESC = 'LastNameDesc';
    const EMAIL_DESC = 'EmailDesc';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIRST_NAME_ASC,
            self::LAST_NAME_ASC,
            self::EMAIL_ASC,
            self::FIRST_NAME_DESC,
            self::LAST_NAME_DESC,
            self::EMAIL_DESC,
        ];
    }
}

