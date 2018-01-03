<?php
/**
 * CapacityModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Client Api
 *
 * Bumbal API documentation
 *
 * OpenAPI spec version: 2.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\Model;

use \ArrayAccess;

/**
 * CapacityModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CapacityModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CapacityModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'capacity_type_id' => 'int',
        'capacity_type' => '\BumbalClient\Model\CapacityTypeModel[]',
        'capacity_value' => 'string',
        'unit_values' => 'object',
        'total_values' => 'object',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'capacity_type_id' => null,
        'capacity_type' => null,
        'capacity_value' => null,
        'unit_values' => null,
        'total_values' => null,
        'value' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'capacity_type_id' => 'capacity_type_id',
        'capacity_type' => 'capacity_type',
        'capacity_value' => 'capacity_value',
        'unit_values' => 'unit_values',
        'total_values' => 'total_values',
        'value' => 'value'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'capacity_type_id' => 'setCapacityTypeId',
        'capacity_type' => 'setCapacityType',
        'capacity_value' => 'setCapacityValue',
        'unit_values' => 'setUnitValues',
        'total_values' => 'setTotalValues',
        'value' => 'setValue'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'capacity_type_id' => 'getCapacityTypeId',
        'capacity_type' => 'getCapacityType',
        'capacity_value' => 'getCapacityValue',
        'unit_values' => 'getUnitValues',
        'total_values' => 'getTotalValues',
        'value' => 'getValue'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['capacity_type_id'] = isset($data['capacity_type_id']) ? $data['capacity_type_id'] : null;
        $this->container['capacity_type'] = isset($data['capacity_type']) ? $data['capacity_type'] : null;
        $this->container['capacity_value'] = isset($data['capacity_value']) ? $data['capacity_value'] : null;
        $this->container['unit_values'] = isset($data['unit_values']) ? $data['unit_values'] : null;
        $this->container['total_values'] = isset($data['total_values']) ? $data['total_values'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Unique ID
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets capacity_type_id
     * @return int
     */
    public function getCapacityTypeId()
    {
        return $this->container['capacity_type_id'];
    }

    /**
     * Sets capacity_type_id
     * @param int $capacity_type_id id for capacity type
     * @return $this
     */
    public function setCapacityTypeId($capacity_type_id)
    {
        $this->container['capacity_type_id'] = $capacity_type_id;

        return $this;
    }

    /**
     * Gets capacity_type
     * @return \BumbalClient\Model\CapacityTypeModel[]
     */
    public function getCapacityType()
    {
        return $this->container['capacity_type'];
    }

    /**
     * Sets capacity_type
     * @param \BumbalClient\Model\CapacityTypeModel[] $capacity_type
     * @return $this
     */
    public function setCapacityType($capacity_type)
    {
        $this->container['capacity_type'] = $capacity_type;

        return $this;
    }

    /**
     * Gets capacity_value
     * @return string
     */
    public function getCapacityValue()
    {
        return $this->container['capacity_value'];
    }

    /**
     * Sets capacity_value
     * @param string $capacity_value Capacity value
     * @return $this
     */
    public function setCapacityValue($capacity_value)
    {
        $this->container['capacity_value'] = $capacity_value;

        return $this;
    }

    /**
     * Gets unit_values
     * @return object
     */
    public function getUnitValues()
    {
        return $this->container['unit_values'];
    }

    /**
     * Sets unit_values
     * @param object $unit_values
     * @return $this
     */
    public function setUnitValues($unit_values)
    {
        $this->container['unit_values'] = $unit_values;

        return $this;
    }

    /**
     * Gets total_values
     * @return object
     */
    public function getTotalValues()
    {
        return $this->container['total_values'];
    }

    /**
     * Sets total_values
     * @param object $total_values
     * @return $this
     */
    public function setTotalValues($total_values)
    {
        $this->container['total_values'] = $total_values;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value Value
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


