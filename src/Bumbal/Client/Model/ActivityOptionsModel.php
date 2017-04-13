<?php
/**
 * ActivityOptionsModel
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
 * Bumbal Client API
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

namespace Bumbal\Client\Model;

use \ArrayAccess;

/**
 * ActivityOptionsModel Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ActivityOptionsModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ActivityOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_activity_status' => 'bool',
        'include_activity_type_name' => 'bool',
        'include_activity_meta_data' => 'bool',
        'include_address_object' => 'bool',
        'include_time_slots' => 'bool',
        'include_time_slot_tags' => 'bool',
        'include_route_info' => 'bool',
        'include_driver_info' => 'bool',
        'include_activity_communication' => 'bool',
        'include_activity_links' => 'bool'
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
        'include_activity_status' => 'include_activity_status',
        'include_activity_type_name' => 'include_activity_type_name',
        'include_activity_meta_data' => 'include_activity_meta_data',
        'include_address_object' => 'include_address_object',
        'include_time_slots' => 'include_time_slots',
        'include_time_slot_tags' => 'include_time_slot_tags',
        'include_route_info' => 'include_route_info',
        'include_driver_info' => 'include_driver_info',
        'include_activity_communication' => 'include_activity_communication',
        'include_activity_links' => 'include_activity_links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_activity_status' => 'setIncludeActivityStatus',
        'include_activity_type_name' => 'setIncludeActivityTypeName',
        'include_activity_meta_data' => 'setIncludeActivityMetaData',
        'include_address_object' => 'setIncludeAddressObject',
        'include_time_slots' => 'setIncludeTimeSlots',
        'include_time_slot_tags' => 'setIncludeTimeSlotTags',
        'include_route_info' => 'setIncludeRouteInfo',
        'include_driver_info' => 'setIncludeDriverInfo',
        'include_activity_communication' => 'setIncludeActivityCommunication',
        'include_activity_links' => 'setIncludeActivityLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_activity_status' => 'getIncludeActivityStatus',
        'include_activity_type_name' => 'getIncludeActivityTypeName',
        'include_activity_meta_data' => 'getIncludeActivityMetaData',
        'include_address_object' => 'getIncludeAddressObject',
        'include_time_slots' => 'getIncludeTimeSlots',
        'include_time_slot_tags' => 'getIncludeTimeSlotTags',
        'include_route_info' => 'getIncludeRouteInfo',
        'include_driver_info' => 'getIncludeDriverInfo',
        'include_activity_communication' => 'getIncludeActivityCommunication',
        'include_activity_links' => 'getIncludeActivityLinks'
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
        $this->container['include_activity_status'] = isset($data['include_activity_status']) ? $data['include_activity_status'] : null;
        $this->container['include_activity_type_name'] = isset($data['include_activity_type_name']) ? $data['include_activity_type_name'] : null;
        $this->container['include_activity_meta_data'] = isset($data['include_activity_meta_data']) ? $data['include_activity_meta_data'] : null;
        $this->container['include_address_object'] = isset($data['include_address_object']) ? $data['include_address_object'] : null;
        $this->container['include_time_slots'] = isset($data['include_time_slots']) ? $data['include_time_slots'] : null;
        $this->container['include_time_slot_tags'] = isset($data['include_time_slot_tags']) ? $data['include_time_slot_tags'] : null;
        $this->container['include_route_info'] = isset($data['include_route_info']) ? $data['include_route_info'] : null;
        $this->container['include_driver_info'] = isset($data['include_driver_info']) ? $data['include_driver_info'] : null;
        $this->container['include_activity_communication'] = isset($data['include_activity_communication']) ? $data['include_activity_communication'] : null;
        $this->container['include_activity_links'] = isset($data['include_activity_links']) ? $data['include_activity_links'] : null;
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
     * Gets include_activity_status
     * @return bool
     */
    public function getIncludeActivityStatus()
    {
        return $this->container['include_activity_status'];
    }

    /**
     * Sets include_activity_status
     * @param bool $include_activity_status
     * @return $this
     */
    public function setIncludeActivityStatus($include_activity_status)
    {
        $this->container['include_activity_status'] = $include_activity_status;

        return $this;
    }

    /**
     * Gets include_activity_type_name
     * @return bool
     */
    public function getIncludeActivityTypeName()
    {
        return $this->container['include_activity_type_name'];
    }

    /**
     * Sets include_activity_type_name
     * @param bool $include_activity_type_name
     * @return $this
     */
    public function setIncludeActivityTypeName($include_activity_type_name)
    {
        $this->container['include_activity_type_name'] = $include_activity_type_name;

        return $this;
    }

    /**
     * Gets include_activity_meta_data
     * @return bool
     */
    public function getIncludeActivityMetaData()
    {
        return $this->container['include_activity_meta_data'];
    }

    /**
     * Sets include_activity_meta_data
     * @param bool $include_activity_meta_data
     * @return $this
     */
    public function setIncludeActivityMetaData($include_activity_meta_data)
    {
        $this->container['include_activity_meta_data'] = $include_activity_meta_data;

        return $this;
    }

    /**
     * Gets include_address_object
     * @return bool
     */
    public function getIncludeAddressObject()
    {
        return $this->container['include_address_object'];
    }

    /**
     * Sets include_address_object
     * @param bool $include_address_object
     * @return $this
     */
    public function setIncludeAddressObject($include_address_object)
    {
        $this->container['include_address_object'] = $include_address_object;

        return $this;
    }

    /**
     * Gets include_time_slots
     * @return bool
     */
    public function getIncludeTimeSlots()
    {
        return $this->container['include_time_slots'];
    }

    /**
     * Sets include_time_slots
     * @param bool $include_time_slots
     * @return $this
     */
    public function setIncludeTimeSlots($include_time_slots)
    {
        $this->container['include_time_slots'] = $include_time_slots;

        return $this;
    }

    /**
     * Gets include_time_slot_tags
     * @return bool
     */
    public function getIncludeTimeSlotTags()
    {
        return $this->container['include_time_slot_tags'];
    }

    /**
     * Sets include_time_slot_tags
     * @param bool $include_time_slot_tags
     * @return $this
     */
    public function setIncludeTimeSlotTags($include_time_slot_tags)
    {
        $this->container['include_time_slot_tags'] = $include_time_slot_tags;

        return $this;
    }

    /**
     * Gets include_route_info
     * @return bool
     */
    public function getIncludeRouteInfo()
    {
        return $this->container['include_route_info'];
    }

    /**
     * Sets include_route_info
     * @param bool $include_route_info
     * @return $this
     */
    public function setIncludeRouteInfo($include_route_info)
    {
        $this->container['include_route_info'] = $include_route_info;

        return $this;
    }

    /**
     * Gets include_driver_info
     * @return bool
     */
    public function getIncludeDriverInfo()
    {
        return $this->container['include_driver_info'];
    }

    /**
     * Sets include_driver_info
     * @param bool $include_driver_info
     * @return $this
     */
    public function setIncludeDriverInfo($include_driver_info)
    {
        $this->container['include_driver_info'] = $include_driver_info;

        return $this;
    }

    /**
     * Gets include_activity_communication
     * @return bool
     */
    public function getIncludeActivityCommunication()
    {
        return $this->container['include_activity_communication'];
    }

    /**
     * Sets include_activity_communication
     * @param bool $include_activity_communication
     * @return $this
     */
    public function setIncludeActivityCommunication($include_activity_communication)
    {
        $this->container['include_activity_communication'] = $include_activity_communication;

        return $this;
    }

    /**
     * Gets include_activity_links
     * @return bool
     */
    public function getIncludeActivityLinks()
    {
        return $this->container['include_activity_links'];
    }

    /**
     * Sets include_activity_links
     * @param bool $include_activity_links
     * @return $this
     */
    public function setIncludeActivityLinks($include_activity_links)
    {
        $this->container['include_activity_links'] = $include_activity_links;

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
