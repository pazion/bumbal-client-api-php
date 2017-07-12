<?php
/**
 * RouteOptionsModel
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

namespace BumbalClient/Model;

use \ArrayAccess;

/**
 * RouteOptionsModel Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RouteOptionsModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RouteOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_address_info' => 'bool',
        'include_route_status' => 'bool',
        'include_route_tags' => 'bool',
        'include_driver_info' => 'bool',
        'include_equipment_info_car' => 'bool',
        'include_gps_locations' => 'bool',
        'include_activity_ids' => 'bool',
        'include_latest_position' => 'bool'
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
        'include_address_info' => 'include_address_info',
        'include_route_status' => 'include_route_status',
        'include_route_tags' => 'include_route_tags',
        'include_driver_info' => 'include_driver_info',
        'include_equipment_info_car' => 'include_equipment_info_car',
        'include_gps_locations' => 'include_gps_locations',
        'include_activity_ids' => 'include_activity_ids',
        'include_latest_position' => 'include_latest_position'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_address_info' => 'setIncludeAddressInfo',
        'include_route_status' => 'setIncludeRouteStatus',
        'include_route_tags' => 'setIncludeRouteTags',
        'include_driver_info' => 'setIncludeDriverInfo',
        'include_equipment_info_car' => 'setIncludeEquipmentInfoCar',
        'include_gps_locations' => 'setIncludeGpsLocations',
        'include_activity_ids' => 'setIncludeActivityIds',
        'include_latest_position' => 'setIncludeLatestPosition'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_address_info' => 'getIncludeAddressInfo',
        'include_route_status' => 'getIncludeRouteStatus',
        'include_route_tags' => 'getIncludeRouteTags',
        'include_driver_info' => 'getIncludeDriverInfo',
        'include_equipment_info_car' => 'getIncludeEquipmentInfoCar',
        'include_gps_locations' => 'getIncludeGpsLocations',
        'include_activity_ids' => 'getIncludeActivityIds',
        'include_latest_position' => 'getIncludeLatestPosition'
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
        $this->container['include_address_info'] = isset($data['include_address_info']) ? $data['include_address_info'] : null;
        $this->container['include_route_status'] = isset($data['include_route_status']) ? $data['include_route_status'] : null;
        $this->container['include_route_tags'] = isset($data['include_route_tags']) ? $data['include_route_tags'] : null;
        $this->container['include_driver_info'] = isset($data['include_driver_info']) ? $data['include_driver_info'] : null;
        $this->container['include_equipment_info_car'] = isset($data['include_equipment_info_car']) ? $data['include_equipment_info_car'] : null;
        $this->container['include_gps_locations'] = isset($data['include_gps_locations']) ? $data['include_gps_locations'] : null;
        $this->container['include_activity_ids'] = isset($data['include_activity_ids']) ? $data['include_activity_ids'] : null;
        $this->container['include_latest_position'] = isset($data['include_latest_position']) ? $data['include_latest_position'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['include_address_info'] === null) {
            $invalid_properties[] = "'include_address_info' can't be null";
        }
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
        if ($this->container['include_address_info'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets include_address_info
     * @return bool
     */
    public function getIncludeAddressInfo()
    {
        return $this->container['include_address_info'];
    }

    /**
     * Sets include_address_info
     * @param bool $include_address_info
     * @return $this
     */
    public function setIncludeAddressInfo($include_address_info)
    {
        $this->container['include_address_info'] = $include_address_info;

        return $this;
    }

    /**
     * Gets include_route_status
     * @return bool
     */
    public function getIncludeRouteStatus()
    {
        return $this->container['include_route_status'];
    }

    /**
     * Sets include_route_status
     * @param bool $include_route_status
     * @return $this
     */
    public function setIncludeRouteStatus($include_route_status)
    {
        $this->container['include_route_status'] = $include_route_status;

        return $this;
    }

    /**
     * Gets include_route_tags
     * @return bool
     */
    public function getIncludeRouteTags()
    {
        return $this->container['include_route_tags'];
    }

    /**
     * Sets include_route_tags
     * @param bool $include_route_tags
     * @return $this
     */
    public function setIncludeRouteTags($include_route_tags)
    {
        $this->container['include_route_tags'] = $include_route_tags;

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
     * Gets include_equipment_info_car
     * @return bool
     */
    public function getIncludeEquipmentInfoCar()
    {
        return $this->container['include_equipment_info_car'];
    }

    /**
     * Sets include_equipment_info_car
     * @param bool $include_equipment_info_car
     * @return $this
     */
    public function setIncludeEquipmentInfoCar($include_equipment_info_car)
    {
        $this->container['include_equipment_info_car'] = $include_equipment_info_car;

        return $this;
    }

    /**
     * Gets include_gps_locations
     * @return bool
     */
    public function getIncludeGpsLocations()
    {
        return $this->container['include_gps_locations'];
    }

    /**
     * Sets include_gps_locations
     * @param bool $include_gps_locations
     * @return $this
     */
    public function setIncludeGpsLocations($include_gps_locations)
    {
        $this->container['include_gps_locations'] = $include_gps_locations;

        return $this;
    }

    /**
     * Gets include_activity_ids
     * @return bool
     */
    public function getIncludeActivityIds()
    {
        return $this->container['include_activity_ids'];
    }

    /**
     * Sets include_activity_ids
     * @param bool $include_activity_ids
     * @return $this
     */
    public function setIncludeActivityIds($include_activity_ids)
    {
        $this->container['include_activity_ids'] = $include_activity_ids;

        return $this;
    }

    /**
     * Gets include_latest_position
     * @return bool
     */
    public function getIncludeLatestPosition()
    {
        return $this->container['include_latest_position'];
    }

    /**
     * Sets include_latest_position
     * @param bool $include_latest_position
     * @return $this
     */
    public function setIncludeLatestPosition($include_latest_position)
    {
        $this->container['include_latest_position'] = $include_latest_position;

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
