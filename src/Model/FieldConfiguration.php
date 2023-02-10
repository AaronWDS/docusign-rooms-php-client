<?php
/**
 * FieldConfiguration
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
 * FieldConfiguration Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Rooms
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FieldConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FieldConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_value' => 'double',
        'min_value' => 'double',
        'multiple_of' => 'double',
        'max_length' => '?int',
        'min_length' => '?int',
        'pattern' => '?string',
        'is_publisher' => '?bool',
        'depends_on' => '\DocuSign\Rooms\Model\DependsOn[]',
        'options' => '\DocuSign\Rooms\Model\SelectListFieldOption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_value' => 'double',
        'min_value' => 'double',
        'multiple_of' => 'double',
        'max_length' => 'int32',
        'min_length' => 'int32',
        'pattern' => null,
        'is_publisher' => null,
        'depends_on' => null,
        'options' => null
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
        'max_value' => 'maxValue',
        'min_value' => 'minValue',
        'multiple_of' => 'multipleOf',
        'max_length' => 'maxLength',
        'min_length' => 'minLength',
        'pattern' => 'pattern',
        'is_publisher' => 'isPublisher',
        'depends_on' => 'dependsOn',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_value' => 'setMaxValue',
        'min_value' => 'setMinValue',
        'multiple_of' => 'setMultipleOf',
        'max_length' => 'setMaxLength',
        'min_length' => 'setMinLength',
        'pattern' => 'setPattern',
        'is_publisher' => 'setIsPublisher',
        'depends_on' => 'setDependsOn',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_value' => 'getMaxValue',
        'min_value' => 'getMinValue',
        'multiple_of' => 'getMultipleOf',
        'max_length' => 'getMaxLength',
        'min_length' => 'getMinLength',
        'pattern' => 'getPattern',
        'is_publisher' => 'getIsPublisher',
        'depends_on' => 'getDependsOn',
        'options' => 'getOptions'
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
        $this->container['max_value'] = isset($data['max_value']) ? $data['max_value'] : null;
        $this->container['min_value'] = isset($data['min_value']) ? $data['min_value'] : null;
        $this->container['multiple_of'] = isset($data['multiple_of']) ? $data['multiple_of'] : null;
        $this->container['max_length'] = isset($data['max_length']) ? $data['max_length'] : null;
        $this->container['min_length'] = isset($data['min_length']) ? $data['min_length'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['is_publisher'] = isset($data['is_publisher']) ? $data['is_publisher'] : null;
        $this->container['depends_on'] = isset($data['depends_on']) ? $data['depends_on'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
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
     * Gets max_value
     *
     * @return double
     */
    public function getMaxValue()
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     *
     * @param double $max_value max_value
     *
     * @return $this
     */
    public function setMaxValue($max_value)
    {
        $this->container['max_value'] = $max_value;

        return $this;
    }

    /**
     * Gets min_value
     *
     * @return double
     */
    public function getMinValue()
    {
        return $this->container['min_value'];
    }

    /**
     * Sets min_value
     *
     * @param double $min_value min_value
     *
     * @return $this
     */
    public function setMinValue($min_value)
    {
        $this->container['min_value'] = $min_value;

        return $this;
    }

    /**
     * Gets multiple_of
     *
     * @return double
     */
    public function getMultipleOf()
    {
        return $this->container['multiple_of'];
    }

    /**
     * Sets multiple_of
     *
     * @param double $multiple_of multiple_of
     *
     * @return $this
     */
    public function setMultipleOf($multiple_of)
    {
        $this->container['multiple_of'] = $multiple_of;

        return $this;
    }

    /**
     * Gets max_length
     *
     * @return ?int
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param ?int $max_length max_length
     *
     * @return $this
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets min_length
     *
     * @return ?int
     */
    public function getMinLength()
    {
        return $this->container['min_length'];
    }

    /**
     * Sets min_length
     *
     * @param ?int $min_length min_length
     *
     * @return $this
     */
    public function setMinLength($min_length)
    {
        $this->container['min_length'] = $min_length;

        return $this;
    }

    /**
     * Gets pattern
     *
     * @return ?string
     */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
     * Sets pattern
     *
     * @param ?string $pattern pattern
     *
     * @return $this
     */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;

        return $this;
    }

    /**
     * Gets is_publisher
     *
     * @return ?bool
     */
    public function getIsPublisher()
    {
        return $this->container['is_publisher'];
    }

    /**
     * Sets is_publisher
     *
     * @param ?bool $is_publisher is_publisher
     *
     * @return $this
     */
    public function setIsPublisher($is_publisher)
    {
        $this->container['is_publisher'] = $is_publisher;

        return $this;
    }

    /**
     * Gets depends_on
     *
     * @return \DocuSign\Rooms\Model\DependsOn[]
     */
    public function getDependsOn()
    {
        return $this->container['depends_on'];
    }

    /**
     * Sets depends_on
     *
     * @param \DocuSign\Rooms\Model\DependsOn[] $depends_on depends_on
     *
     * @return $this
     */
    public function setDependsOn($depends_on)
    {
        $this->container['depends_on'] = $depends_on;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \DocuSign\Rooms\Model\SelectListFieldOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \DocuSign\Rooms\Model\SelectListFieldOption[] $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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

