<?php
/**
 * EquipmentModel
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
 * EquipmentModel Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EquipmentModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EquipmentModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'equipment_type' => 'string',
        'info' => 'string',
        'registration_nr' => 'string',
        'capacity_volume' => 'float',
        'capacity_loading_meter' => 'float',
        'capacity_weight' => 'float'
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
        'id' => 'id',
        'equipment_type' => 'equipment_type',
        'info' => 'info',
        'registration_nr' => 'registration_nr',
        'capacity_volume' => 'capacity_volume',
        'capacity_loading_meter' => 'capacity_loading_meter',
        'capacity_weight' => 'capacity_weight'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'equipment_type' => 'setEquipmentType',
        'info' => 'setInfo',
        'registration_nr' => 'setRegistrationNr',
        'capacity_volume' => 'setCapacityVolume',
        'capacity_loading_meter' => 'setCapacityLoadingMeter',
        'capacity_weight' => 'setCapacityWeight'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'equipment_type' => 'getEquipmentType',
        'info' => 'getInfo',
        'registration_nr' => 'getRegistrationNr',
        'capacity_volume' => 'getCapacityVolume',
        'capacity_loading_meter' => 'getCapacityLoadingMeter',
        'capacity_weight' => 'getCapacityWeight'
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

    const EQUIPMENT_TYPE_CAR = 'car';
    const EQUIPMENT_TYPE_TRAILER = 'trailer';
    const EQUIPMENT_TYPE_OTHER = 'other';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEquipmentTypeAllowableValues()
    {
        return [
            self::EQUIPMENT_TYPE_CAR,
            self::EQUIPMENT_TYPE_TRAILER,
            self::EQUIPMENT_TYPE_OTHER,
        ];
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
        $this->container['equipment_type'] = isset($data['equipment_type']) ? $data['equipment_type'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['registration_nr'] = isset($data['registration_nr']) ? $data['registration_nr'] : null;
        $this->container['capacity_volume'] = isset($data['capacity_volume']) ? $data['capacity_volume'] : null;
        $this->container['capacity_loading_meter'] = isset($data['capacity_loading_meter']) ? $data['capacity_loading_meter'] : null;
        $this->container['capacity_weight'] = isset($data['capacity_weight']) ? $data['capacity_weight'] : null;
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
        if ($this->container['equipment_type'] === null) {
            $invalid_properties[] = "'equipment_type' can't be null";
        }
        $allowed_values = ["car", "trailer", "other"];
        if (!in_array($this->container['equipment_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'equipment_type', must be one of 'car', 'trailer', 'other'.";
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
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['equipment_type'] === null) {
            return false;
        }
        $allowed_values = ["car", "trailer", "other"];
        if (!in_array($this->container['equipment_type'], $allowed_values)) {
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
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets equipment_type
     * @return string
     */
    public function getEquipmentType()
    {
        return $this->container['equipment_type'];
    }

    /**
     * Sets equipment_type
     * @param string $equipment_type Equipment Type
     * @return $this
     */
    public function setEquipmentType($equipment_type)
    {
        $allowed_values = array('car', 'trailer', 'other');
        if ((!in_array($equipment_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'equipment_type', must be one of 'car', 'trailer', 'other'");
        }
        $this->container['equipment_type'] = $equipment_type;

        return $this;
    }

    /**
     * Gets info
     * @return string
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     * @param string $info
     * @return $this
     */
    public function setInfo($info)
    {
        $this->container['info'] = $info;

        return $this;
    }

    /**
     * Gets registration_nr
     * @return string
     */
    public function getRegistrationNr()
    {
        return $this->container['registration_nr'];
    }

    /**
     * Sets registration_nr
     * @param string $registration_nr
     * @return $this
     */
    public function setRegistrationNr($registration_nr)
    {
        $this->container['registration_nr'] = $registration_nr;

        return $this;
    }

    /**
     * Gets capacity_volume
     * @return float
     */
    public function getCapacityVolume()
    {
        return $this->container['capacity_volume'];
    }

    /**
     * Sets capacity_volume
     * @param float $capacity_volume
     * @return $this
     */
    public function setCapacityVolume($capacity_volume)
    {
        $this->container['capacity_volume'] = $capacity_volume;

        return $this;
    }

    /**
     * Gets capacity_loading_meter
     * @return float
     */
    public function getCapacityLoadingMeter()
    {
        return $this->container['capacity_loading_meter'];
    }

    /**
     * Sets capacity_loading_meter
     * @param float $capacity_loading_meter
     * @return $this
     */
    public function setCapacityLoadingMeter($capacity_loading_meter)
    {
        $this->container['capacity_loading_meter'] = $capacity_loading_meter;

        return $this;
    }

    /**
     * Gets capacity_weight
     * @return float
     */
    public function getCapacityWeight()
    {
        return $this->container['capacity_weight'];
    }

    /**
     * Sets capacity_weight
     * @param float $capacity_weight
     * @return $this
     */
    public function setCapacityWeight($capacity_weight)
    {
        $this->container['capacity_weight'] = $capacity_weight;

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
