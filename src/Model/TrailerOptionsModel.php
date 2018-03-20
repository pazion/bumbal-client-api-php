<?php
/**
 * TrailerOptionsModel
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
 * TrailerOptionsModel Class Doc Comment
 *
 * @category Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TrailerOptionsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TrailerOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_trailer_tags' => 'bool',
        'include_trailer_meta_data' => 'bool',
        'include_trailer_links' => 'bool',
        'include_updated_by_name' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_trailer_tags' => null,
        'include_trailer_meta_data' => null,
        'include_trailer_links' => null,
        'include_updated_by_name' => null
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
        'include_trailer_tags' => 'include_trailer_tags',
        'include_trailer_meta_data' => 'include_trailer_meta_data',
        'include_trailer_links' => 'include_trailer_links',
        'include_updated_by_name' => 'include_updated_by_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'include_trailer_tags' => 'setIncludeTrailerTags',
        'include_trailer_meta_data' => 'setIncludeTrailerMetaData',
        'include_trailer_links' => 'setIncludeTrailerLinks',
        'include_updated_by_name' => 'setIncludeUpdatedByName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'include_trailer_tags' => 'getIncludeTrailerTags',
        'include_trailer_meta_data' => 'getIncludeTrailerMetaData',
        'include_trailer_links' => 'getIncludeTrailerLinks',
        'include_updated_by_name' => 'getIncludeUpdatedByName'
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
        $this->container['include_trailer_tags'] = isset($data['include_trailer_tags']) ? $data['include_trailer_tags'] : null;
        $this->container['include_trailer_meta_data'] = isset($data['include_trailer_meta_data']) ? $data['include_trailer_meta_data'] : null;
        $this->container['include_trailer_links'] = isset($data['include_trailer_links']) ? $data['include_trailer_links'] : null;
        $this->container['include_updated_by_name'] = isset($data['include_updated_by_name']) ? $data['include_updated_by_name'] : null;
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
     * Gets include_trailer_tags
     *
     * @return bool
     */
    public function getIncludeTrailerTags()
    {
        return $this->container['include_trailer_tags'];
    }

    /**
     * Sets include_trailer_tags
     *
     * @param bool $include_trailer_tags 
     *
     * @return $this
     */
    public function setIncludeTrailerTags($include_trailer_tags)
    {
        $this->container['include_trailer_tags'] = $include_trailer_tags;

        return $this;
    }

    /**
     * Gets include_trailer_meta_data
     *
     * @return bool
     */
    public function getIncludeTrailerMetaData()
    {
        return $this->container['include_trailer_meta_data'];
    }

    /**
     * Sets include_trailer_meta_data
     *
     * @param bool $include_trailer_meta_data 
     *
     * @return $this
     */
    public function setIncludeTrailerMetaData($include_trailer_meta_data)
    {
        $this->container['include_trailer_meta_data'] = $include_trailer_meta_data;

        return $this;
    }

    /**
     * Gets include_trailer_links
     *
     * @return bool
     */
    public function getIncludeTrailerLinks()
    {
        return $this->container['include_trailer_links'];
    }

    /**
     * Sets include_trailer_links
     *
     * @param bool $include_trailer_links 
     *
     * @return $this
     */
    public function setIncludeTrailerLinks($include_trailer_links)
    {
        $this->container['include_trailer_links'] = $include_trailer_links;

        return $this;
    }

    /**
     * Gets include_updated_by_name
     *
     * @return bool
     */
    public function getIncludeUpdatedByName()
    {
        return $this->container['include_updated_by_name'];
    }

    /**
     * Sets include_updated_by_name
     *
     * @param bool $include_updated_by_name 
     *
     * @return $this
     */
    public function setIncludeUpdatedByName($include_updated_by_name)
    {
        $this->container['include_updated_by_name'] = $include_updated_by_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
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
     * @param  integer $offset Offset
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
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
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

