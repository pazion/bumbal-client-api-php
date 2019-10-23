<?php
/**
 * FileCopyArguments
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
 * FileCopyArguments Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FileCopyArguments implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FileCopyArguments';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'source_file_id' => 'int',
        'target_object_id' => 'int',
        'target_object_type' => 'int'
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
        'source_file_id' => 'source_file_id',
        'target_object_id' => 'target_object_id',
        'target_object_type' => 'target_object_type'
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
        'source_file_id' => 'setSourceFileId',
        'target_object_id' => 'setTargetObjectId',
        'target_object_type' => 'setTargetObjectType'
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
        'source_file_id' => 'getSourceFileId',
        'target_object_id' => 'getTargetObjectId',
        'target_object_type' => 'getTargetObjectType'
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
        $this->container['source_file_id'] = isset($data['source_file_id']) ? $data['source_file_id'] : null;
        $this->container['target_object_id'] = isset($data['target_object_id']) ? $data['target_object_id'] : null;
        $this->container['target_object_type'] = isset($data['target_object_type']) ? $data['target_object_type'] : null;
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
     * Gets source_file_id
     * @return int
     */
    public function getSourceFileId()
    {
        return $this->container['source_file_id'];
    }

    /**
     * Sets source_file_id
     * @param int $source_file_id 
     * @return $this
     */
    public function setSourceFileId($source_file_id)
    {
        $this->container['source_file_id'] = $source_file_id;

        return $this;
    }

    /**
     * Gets target_object_id
     * @return int
     */
    public function getTargetObjectId()
    {
        return $this->container['target_object_id'];
    }

    /**
     * Sets target_object_id
     * @param int $target_object_id 
     * @return $this
     */
    public function setTargetObjectId($target_object_id)
    {
        $this->container['target_object_id'] = $target_object_id;

        return $this;
    }

    /**
     * Gets target_object_type
     * @return int
     */
    public function getTargetObjectType()
    {
        return $this->container['target_object_type'];
    }

    /**
     * Sets target_object_type
     * @param int $target_object_type 
     * @return $this
     */
    public function setTargetObjectType($target_object_type)
    {
        $this->container['target_object_type'] = $target_object_type;

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


