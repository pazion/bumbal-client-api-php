<?php
/**
 * UsersOptionsModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
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
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\BumbalClient\Model;

use \ArrayAccess;
use \BumbalClient\ObjectSerializer;

/**
 * UsersOptionsModel Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsersOptionsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UsersOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_addresses' => 'bool',
        'include_user_meta_data' => 'bool',
        'include_user_tags' => 'bool',
        'include_party_name' => 'bool',
        'include_zones' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_addresses' => null,
        'include_user_meta_data' => null,
        'include_user_tags' => null,
        'include_party_name' => null,
        'include_zones' => null
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
        'include_addresses' => 'include_addresses',
        'include_user_meta_data' => 'include_user_meta_data',
        'include_user_tags' => 'include_user_tags',
        'include_party_name' => 'include_party_name',
        'include_zones' => 'include_zones'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'include_addresses' => 'setIncludeAddresses',
        'include_user_meta_data' => 'setIncludeUserMetaData',
        'include_user_tags' => 'setIncludeUserTags',
        'include_party_name' => 'setIncludePartyName',
        'include_zones' => 'setIncludeZones'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'include_addresses' => 'getIncludeAddresses',
        'include_user_meta_data' => 'getIncludeUserMetaData',
        'include_user_tags' => 'getIncludeUserTags',
        'include_party_name' => 'getIncludePartyName',
        'include_zones' => 'getIncludeZones'
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
        $this->container['include_addresses'] = isset($data['include_addresses']) ? $data['include_addresses'] : null;
        $this->container['include_user_meta_data'] = isset($data['include_user_meta_data']) ? $data['include_user_meta_data'] : null;
        $this->container['include_user_tags'] = isset($data['include_user_tags']) ? $data['include_user_tags'] : null;
        $this->container['include_party_name'] = isset($data['include_party_name']) ? $data['include_party_name'] : null;
        $this->container['include_zones'] = isset($data['include_zones']) ? $data['include_zones'] : null;
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

        return true;
    }


    /**
     * Gets include_addresses
     *
     * @return bool
     */
    public function getIncludeAddresses()
    {
        return $this->container['include_addresses'];
    }

    /**
     * Sets include_addresses
     *
     * @param bool $include_addresses 
     *
     * @return $this
     */
    public function setIncludeAddresses($include_addresses)
    {
        $this->container['include_addresses'] = $include_addresses;

        return $this;
    }

    /**
     * Gets include_user_meta_data
     *
     * @return bool
     */
    public function getIncludeUserMetaData()
    {
        return $this->container['include_user_meta_data'];
    }

    /**
     * Sets include_user_meta_data
     *
     * @param bool $include_user_meta_data 
     *
     * @return $this
     */
    public function setIncludeUserMetaData($include_user_meta_data)
    {
        $this->container['include_user_meta_data'] = $include_user_meta_data;

        return $this;
    }

    /**
     * Gets include_user_tags
     *
     * @return bool
     */
    public function getIncludeUserTags()
    {
        return $this->container['include_user_tags'];
    }

    /**
     * Sets include_user_tags
     *
     * @param bool $include_user_tags 
     *
     * @return $this
     */
    public function setIncludeUserTags($include_user_tags)
    {
        $this->container['include_user_tags'] = $include_user_tags;

        return $this;
    }

    /**
     * Gets include_party_name
     *
     * @return bool
     */
    public function getIncludePartyName()
    {
        return $this->container['include_party_name'];
    }

    /**
     * Sets include_party_name
     *
     * @param bool $include_party_name 
     *
     * @return $this
     */
    public function setIncludePartyName($include_party_name)
    {
        $this->container['include_party_name'] = $include_party_name;

        return $this;
    }

    /**
     * Gets include_zones
     *
     * @return bool
     */
    public function getIncludeZones()
    {
        return $this->container['include_zones'];
    }

    /**
     * Sets include_zones
     *
     * @param bool $include_zones 
     *
     * @return $this
     */
    public function setIncludeZones($include_zones)
    {
        $this->container['include_zones'] = $include_zones;

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


