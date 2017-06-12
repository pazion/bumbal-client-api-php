<?php
/**
 * CommunicationOptionsModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
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

namespace BumbalClient\Model;

use \ArrayAccess;

/**
 * CommunicationOptionsModel Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CommunicationOptionsModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CommunicationOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_phone_nrs' => 'bool',
        'include_address_tags' => 'bool',
        'include_party_info' => 'bool',
        'include_address_type_ids' => 'bool'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'include_phone_nrs' => 'include_phone_nrs',
        'include_address_tags' => 'include_address_tags',
        'include_party_info' => 'include_party_info',
        'include_address_type_ids' => 'include_address_type_ids'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_phone_nrs' => 'setIncludePhoneNrs',
        'include_address_tags' => 'setIncludeAddressTags',
        'include_party_info' => 'setIncludePartyInfo',
        'include_address_type_ids' => 'setIncludeAddressTypeIds'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_phone_nrs' => 'getIncludePhoneNrs',
        'include_address_tags' => 'getIncludeAddressTags',
        'include_party_info' => 'getIncludePartyInfo',
        'include_address_type_ids' => 'getIncludeAddressTypeIds'
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
        $this->container['include_phone_nrs'] = isset($data['include_phone_nrs']) ? $data['include_phone_nrs'] : null;
        $this->container['include_address_tags'] = isset($data['include_address_tags']) ? $data['include_address_tags'] : null;
        $this->container['include_party_info'] = isset($data['include_party_info']) ? $data['include_party_info'] : null;
        $this->container['include_address_type_ids'] = isset($data['include_address_type_ids']) ? $data['include_address_type_ids'] : null;
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
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets include_phone_nrs
     * @return bool
     */
    public function getIncludePhoneNrs()
    {
        return $this->container['include_phone_nrs'];
    }

    /**
     * Sets include_phone_nrs
     * @param bool $include_phone_nrs 
     * @return $this
     */
    public function setIncludePhoneNrs($include_phone_nrs)
    {
        $this->container['include_phone_nrs'] = $include_phone_nrs;

        return $this;
    }

    /**
     * Gets include_address_tags
     * @return bool
     */
    public function getIncludeAddressTags()
    {
        return $this->container['include_address_tags'];
    }

    /**
     * Sets include_address_tags
     * @param bool $include_address_tags 
     * @return $this
     */
    public function setIncludeAddressTags($include_address_tags)
    {
        $this->container['include_address_tags'] = $include_address_tags;

        return $this;
    }

    /**
     * Gets include_party_info
     * @return bool
     */
    public function getIncludePartyInfo()
    {
        return $this->container['include_party_info'];
    }

    /**
     * Sets include_party_info
     * @param bool $include_party_info 
     * @return $this
     */
    public function setIncludePartyInfo($include_party_info)
    {
        $this->container['include_party_info'] = $include_party_info;

        return $this;
    }

    /**
     * Gets include_address_type_ids
     * @return bool
     */
    public function getIncludeAddressTypeIds()
    {
        return $this->container['include_address_type_ids'];
    }

    /**
     * Sets include_address_type_ids
     * @param bool $include_address_type_ids 
     * @return $this
     */
    public function setIncludeAddressTypeIds($include_address_type_ids)
    {
        $this->container['include_address_type_ids'] = $include_address_type_ids;

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
