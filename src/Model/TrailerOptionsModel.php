<?php
/**
 * TrailerOptionsModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Model;

use \ArrayAccess;

/**
 * TrailerOptionsModel Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TrailerOptionsModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TrailerOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'include_trailer_tags' => 'bool',
        'include_trailer_meta_data' => 'bool',
        'include_trailer_links' => 'bool',
        'include_updated_by_name' => 'bool'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'include_trailer_tags' => 'include_trailer_tags',
        'include_trailer_meta_data' => 'include_trailer_meta_data',
        'include_trailer_links' => 'include_trailer_links',
        'include_updated_by_name' => 'include_updated_by_name'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'include_trailer_tags' => 'setIncludeTrailerTags',
        'include_trailer_meta_data' => 'setIncludeTrailerMetaData',
        'include_trailer_links' => 'setIncludeTrailerLinks',
        'include_updated_by_name' => 'setIncludeUpdatedByName'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'include_trailer_tags' => 'getIncludeTrailerTags',
        'include_trailer_meta_data' => 'getIncludeTrailerMetaData',
        'include_trailer_links' => 'getIncludeTrailerLinks',
        'include_updated_by_name' => 'getIncludeUpdatedByName'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['include_trailer_tags'] = isset($data['include_trailer_tags']) ? $data['include_trailer_tags'] : null;
        $this->container['include_trailer_meta_data'] = isset($data['include_trailer_meta_data']) ? $data['include_trailer_meta_data'] : null;
        $this->container['include_trailer_links'] = isset($data['include_trailer_links']) ? $data['include_trailer_links'] : null;
        $this->container['include_updated_by_name'] = isset($data['include_updated_by_name']) ? $data['include_updated_by_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets include_trailer_tags
     * @return bool
     */
    public function getIncludeTrailerTags()
    {
        return $this->container['include_trailer_tags'];
    }

    /**
     * Sets include_trailer_tags
     * @param bool $include_trailer_tags 
     * @return $this
     */
    public function setIncludeTrailerTags($include_trailer_tags)
    {
        $this->container['include_trailer_tags'] = $include_trailer_tags;

        return $this;
    }

    /**
     * Gets include_trailer_meta_data
     * @return bool
     */
    public function getIncludeTrailerMetaData()
    {
        return $this->container['include_trailer_meta_data'];
    }

    /**
     * Sets include_trailer_meta_data
     * @param bool $include_trailer_meta_data 
     * @return $this
     */
    public function setIncludeTrailerMetaData($include_trailer_meta_data)
    {
        $this->container['include_trailer_meta_data'] = $include_trailer_meta_data;

        return $this;
    }

    /**
     * Gets include_trailer_links
     * @return bool
     */
    public function getIncludeTrailerLinks()
    {
        return $this->container['include_trailer_links'];
    }

    /**
     * Sets include_trailer_links
     * @param bool $include_trailer_links 
     * @return $this
     */
    public function setIncludeTrailerLinks($include_trailer_links)
    {
        $this->container['include_trailer_links'] = $include_trailer_links;

        return $this;
    }

    /**
     * Gets include_updated_by_name
     * @return bool
     */
    public function getIncludeUpdatedByName()
    {
        return $this->container['include_updated_by_name'];
    }

    /**
     * Sets include_updated_by_name
     * @param bool $include_updated_by_name 
     * @return $this
     */
    public function setIncludeUpdatedByName($include_updated_by_name)
    {
        $this->container['include_updated_by_name'] = $include_updated_by_name;

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


