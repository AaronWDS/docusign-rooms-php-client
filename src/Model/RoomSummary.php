<?php
/**
 * RoomSummary
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

namespace DocuSign\Rooms\Model;

use \ArrayAccess;
use DocuSign\Rooms\ObjectSerializer;

/**
 * RoomSummary Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Rooms
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign Rooms PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RoomSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RoomSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'room_id' => '?int',
        'name' => '?string',
        'office_id' => '?int',
        'created_date' => '\DateTime',
        'submitted_for_review_date' => '\DateTime',
        'closed_date' => '\DateTime',
        'rejected_date' => '\DateTime',
        'created_by_user_id' => '?int',
        'rejected_by_user_id' => '?int',
        'closed_status_id' => '?string',
        'field_data_last_updated_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'room_id' => 'int32',
        'name' => null,
        'office_id' => 'int32',
        'created_date' => 'date-time',
        'submitted_for_review_date' => 'date-time',
        'closed_date' => 'date-time',
        'rejected_date' => 'date-time',
        'created_by_user_id' => 'int32',
        'rejected_by_user_id' => 'int32',
        'closed_status_id' => null,
        'field_data_last_updated_date' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'room_id' => 'roomId',
        'name' => 'name',
        'office_id' => 'officeId',
        'created_date' => 'createdDate',
        'submitted_for_review_date' => 'submittedForReviewDate',
        'closed_date' => 'closedDate',
        'rejected_date' => 'rejectedDate',
        'created_by_user_id' => 'createdByUserId',
        'rejected_by_user_id' => 'rejectedByUserId',
        'closed_status_id' => 'closedStatusId',
        'field_data_last_updated_date' => 'fieldDataLastUpdatedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'room_id' => 'setRoomId',
        'name' => 'setName',
        'office_id' => 'setOfficeId',
        'created_date' => 'setCreatedDate',
        'submitted_for_review_date' => 'setSubmittedForReviewDate',
        'closed_date' => 'setClosedDate',
        'rejected_date' => 'setRejectedDate',
        'created_by_user_id' => 'setCreatedByUserId',
        'rejected_by_user_id' => 'setRejectedByUserId',
        'closed_status_id' => 'setClosedStatusId',
        'field_data_last_updated_date' => 'setFieldDataLastUpdatedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'room_id' => 'getRoomId',
        'name' => 'getName',
        'office_id' => 'getOfficeId',
        'created_date' => 'getCreatedDate',
        'submitted_for_review_date' => 'getSubmittedForReviewDate',
        'closed_date' => 'getClosedDate',
        'rejected_date' => 'getRejectedDate',
        'created_by_user_id' => 'getCreatedByUserId',
        'rejected_by_user_id' => 'getRejectedByUserId',
        'closed_status_id' => 'getClosedStatusId',
        'field_data_last_updated_date' => 'getFieldDataLastUpdatedDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['room_id'] = isset($data['room_id']) ? $data['room_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['office_id'] = isset($data['office_id']) ? $data['office_id'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['submitted_for_review_date'] = isset($data['submitted_for_review_date']) ? $data['submitted_for_review_date'] : null;
        $this->container['closed_date'] = isset($data['closed_date']) ? $data['closed_date'] : null;
        $this->container['rejected_date'] = isset($data['rejected_date']) ? $data['rejected_date'] : null;
        $this->container['created_by_user_id'] = isset($data['created_by_user_id']) ? $data['created_by_user_id'] : null;
        $this->container['rejected_by_user_id'] = isset($data['rejected_by_user_id']) ? $data['rejected_by_user_id'] : null;
        $this->container['closed_status_id'] = isset($data['closed_status_id']) ? $data['closed_status_id'] : null;
        $this->container['field_data_last_updated_date'] = isset($data['field_data_last_updated_date']) ? $data['field_data_last_updated_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets room_id
     *
     * @return ?int
     */
    public function getRoomId()
    {
        return $this->container['room_id'];
    }

    /**
     * Sets room_id
     *
     * @param ?int $room_id room_id
     *
     * @return $this
     */
    public function setRoomId($room_id)
    {
        $this->container['room_id'] = $room_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return ?string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param ?string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets office_id
     *
     * @return ?int
     */
    public function getOfficeId()
    {
        return $this->container['office_id'];
    }

    /**
     * Sets office_id
     *
     * @param ?int $office_id office_id
     *
     * @return $this
     */
    public function setOfficeId($office_id)
    {
        $this->container['office_id'] = $office_id;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date created_date
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets submitted_for_review_date
     *
     * @return \DateTime
     */
    public function getSubmittedForReviewDate()
    {
        return $this->container['submitted_for_review_date'];
    }

    /**
     * Sets submitted_for_review_date
     *
     * @param \DateTime $submitted_for_review_date submitted_for_review_date
     *
     * @return $this
     */
    public function setSubmittedForReviewDate($submitted_for_review_date)
    {
        $this->container['submitted_for_review_date'] = $submitted_for_review_date;

        return $this;
    }

    /**
     * Gets closed_date
     *
     * @return \DateTime
     */
    public function getClosedDate()
    {
        return $this->container['closed_date'];
    }

    /**
     * Sets closed_date
     *
     * @param \DateTime $closed_date closed_date
     *
     * @return $this
     */
    public function setClosedDate($closed_date)
    {
        $this->container['closed_date'] = $closed_date;

        return $this;
    }

    /**
     * Gets rejected_date
     *
     * @return \DateTime
     */
    public function getRejectedDate()
    {
        return $this->container['rejected_date'];
    }

    /**
     * Sets rejected_date
     *
     * @param \DateTime $rejected_date rejected_date
     *
     * @return $this
     */
    public function setRejectedDate($rejected_date)
    {
        $this->container['rejected_date'] = $rejected_date;

        return $this;
    }

    /**
     * Gets created_by_user_id
     *
     * @return ?int
     */
    public function getCreatedByUserId()
    {
        return $this->container['created_by_user_id'];
    }

    /**
     * Sets created_by_user_id
     *
     * @param ?int $created_by_user_id created_by_user_id
     *
     * @return $this
     */
    public function setCreatedByUserId($created_by_user_id)
    {
        $this->container['created_by_user_id'] = $created_by_user_id;

        return $this;
    }

    /**
     * Gets rejected_by_user_id
     *
     * @return ?int
     */
    public function getRejectedByUserId()
    {
        return $this->container['rejected_by_user_id'];
    }

    /**
     * Sets rejected_by_user_id
     *
     * @param ?int $rejected_by_user_id rejected_by_user_id
     *
     * @return $this
     */
    public function setRejectedByUserId($rejected_by_user_id)
    {
        $this->container['rejected_by_user_id'] = $rejected_by_user_id;

        return $this;
    }

    /**
     * Gets closed_status_id
     *
     * @return ?string
     */
    public function getClosedStatusId()
    {
        return $this->container['closed_status_id'];
    }

    /**
     * Sets closed_status_id
     *
     * @param ?string $closed_status_id closed_status_id
     *
     * @return $this
     */
    public function setClosedStatusId($closed_status_id)
    {
        $this->container['closed_status_id'] = $closed_status_id;

        return $this;
    }

    /**
     * Gets field_data_last_updated_date
     *
     * @return \DateTime
     */
    public function getFieldDataLastUpdatedDate()
    {
        return $this->container['field_data_last_updated_date'];
    }

    /**
     * Sets field_data_last_updated_date
     *
     * @param \DateTime $field_data_last_updated_date field_data_last_updated_date
     *
     * @return $this
     */
    public function setFieldDataLastUpdatedDate($field_data_last_updated_date)
    {
        $this->container['field_data_last_updated_date'] = $field_data_last_updated_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

