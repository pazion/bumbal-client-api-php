<?php
/**
 * ZoneRangeModel
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
 * ZoneRangeModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ZoneRangeModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ZoneRangeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'zipcode_from' => 'int',
        'zipcode_to' => 'int',
        'iso_country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'zipcode_from' => 'int64',
        'zipcode_to' => 'int64',
        'iso_country' => null
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
        'zipcode_from' => 'zipcode_from',
        'zipcode_to' => 'zipcode_to',
        'iso_country' => 'iso_country'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'zipcode_from' => 'setZipcodeFrom',
        'zipcode_to' => 'setZipcodeTo',
        'iso_country' => 'setIsoCountry'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'zipcode_from' => 'getZipcodeFrom',
        'zipcode_to' => 'getZipcodeTo',
        'iso_country' => 'getIsoCountry'
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
        $this->container['zipcode_from'] = isset($data['zipcode_from']) ? $data['zipcode_from'] : null;
        $this->container['zipcode_to'] = isset($data['zipcode_to']) ? $data['zipcode_to'] : null;
        $this->container['iso_country'] = isset($data['iso_country']) ? $data['iso_country'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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
     * @param int $id Unique Zone type ID
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets zipcode_from
     * @return int
     */
    public function getZipcodeFrom()
    {
        return $this->container['zipcode_from'];
    }

    /**
     * Sets zipcode_from
     * @param int $zipcode_from Zipcode range start
     * @return $this
     */
    public function setZipcodeFrom($zipcode_from)
    {
        $this->container['zipcode_from'] = $zipcode_from;

        return $this;
    }

    /**
     * Gets zipcode_to
     * @return int
     */
    public function getZipcodeTo()
    {
        return $this->container['zipcode_to'];
    }

    /**
     * Sets zipcode_to
     * @param int $zipcode_to Zipcode range end
     * @return $this
     */
    public function setZipcodeTo($zipcode_to)
    {
        $this->container['zipcode_to'] = $zipcode_to;

        return $this;
    }

    /**
     * Gets iso_country
     * @return string
     */
    public function getIsoCountry()
    {
        return $this->container['iso_country'];
    }

    /**
     * Sets iso_country
     * @param string $iso_country 
     * @return $this
     */
    public function setIsoCountry($iso_country)
    {
        $this->container['iso_country'] = $iso_country;

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


