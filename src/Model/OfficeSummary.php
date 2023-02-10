<?php
/**
 * OfficeSummary
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

use \ArrayAccess;
use DocuSign\Rooms\ObjectSerializer;

/**
 * OfficeSummary Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Rooms
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OfficeSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OfficeSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'office_id' => '?int',
        'name' => '?string',
        'region_id' => '?int',
        'address1' => '?string',
        'address2' => '?string',
        'city' => '?string',
        'state_id' => '?string',
        'postal_code' => '?string',
        'country_id' => '?string',
        'time_zone_id' => '?string',
        'phone' => '?string',
        'created_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'office_id' => 'int32',
        'name' => null,
        'region_id' => 'int32',
        'address1' => null,
        'address2' => null,
        'city' => null,
        'state_id' => null,
        'postal_code' => null,
        'country_id' => null,
        'time_zone_id' => null,
        'phone' => null,
        'created_date' => 'date-time'
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
        'office_id' => 'officeId',
        'name' => 'name',
        'region_id' => 'regionId',
        'address1' => 'address1',
        'address2' => 'address2',
        'city' => 'city',
        'state_id' => 'stateId',
        'postal_code' => 'postalCode',
        'country_id' => 'countryId',
        'time_zone_id' => 'timeZoneId',
        'phone' => 'phone',
        'created_date' => 'createdDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'office_id' => 'setOfficeId',
        'name' => 'setName',
        'region_id' => 'setRegionId',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'state_id' => 'setStateId',
        'postal_code' => 'setPostalCode',
        'country_id' => 'setCountryId',
        'time_zone_id' => 'setTimeZoneId',
        'phone' => 'setPhone',
        'created_date' => 'setCreatedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'office_id' => 'getOfficeId',
        'name' => 'getName',
        'region_id' => 'getRegionId',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'state_id' => 'getStateId',
        'postal_code' => 'getPostalCode',
        'country_id' => 'getCountryId',
        'time_zone_id' => 'getTimeZoneId',
        'phone' => 'getPhone',
        'created_date' => 'getCreatedDate'
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
        $this->container['office_id'] = isset($data['office_id']) ? $data['office_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['region_id'] = isset($data['region_id']) ? $data['region_id'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state_id'] = isset($data['state_id']) ? $data['state_id'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
        $this->container['time_zone_id'] = isset($data['time_zone_id']) ? $data['time_zone_id'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
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
     * Gets region_id
     *
     * @return ?int
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     *
     * @param ?int $region_id region_id
     *
     * @return $this
     */
    public function setRegionId($region_id)
    {
        $this->container['region_id'] = $region_id;

        return $this;
    }

    /**
     * Gets address1
     *
     * @return ?string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param ?string $address1 address1
     *
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return ?string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param ?string $address2 address2
     *
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return ?string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param ?string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state_id
     *
     * @return ?string
     */
    public function getStateId()
    {
        return $this->container['state_id'];
    }

    /**
     * Sets state_id
     *
     * @param ?string $state_id state_id
     *
     * @return $this
     */
    public function setStateId($state_id)
    {
        $this->container['state_id'] = $state_id;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return ?string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param ?string $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country_id
     *
     * @return ?string
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param ?string $country_id country_id
     *
     * @return $this
     */
    public function setCountryId($country_id)
    {
        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets time_zone_id
     *
     * @return ?string
     */
    public function getTimeZoneId()
    {
        return $this->container['time_zone_id'];
    }

    /**
     * Sets time_zone_id
     *
     * @param ?string $time_zone_id time_zone_id
     *
     * @return $this
     */
    public function setTimeZoneId($time_zone_id)
    {
        $this->container['time_zone_id'] = $time_zone_id;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return ?string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param ?string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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

