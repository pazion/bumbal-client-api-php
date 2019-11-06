<?php
/**
 * EquipmentModel
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

namespace BumbalClient\Model;

use \ArrayAccess;

/**
 * EquipmentModel Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
    protected static $swaggerTypes = array(
        'id' => 'int',
        'equipment_type' => 'string',
        'info' => 'string',
        'registration_nr' => 'string',
        'applied_capacities' => 'object',
        'capacities' => '\BumbalClient\Model\CapacityModel[]',
        'meta_data' => '\BumbalClient\Model\MetaDataModel[]'
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
        'id' => 'id',
        'equipment_type' => 'equipment_type',
        'info' => 'info',
        'registration_nr' => 'registration_nr',
        'applied_capacities' => 'applied_capacities',
        'capacities' => 'capacities',
        'meta_data' => 'meta_data'
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
        'id' => 'setId',
        'equipment_type' => 'setEquipmentType',
        'info' => 'setInfo',
        'registration_nr' => 'setRegistrationNr',
        'applied_capacities' => 'setAppliedCapacities',
        'capacities' => 'setCapacities',
        'meta_data' => 'setMetaData'
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
        'id' => 'getId',
        'equipment_type' => 'getEquipmentType',
        'info' => 'getInfo',
        'registration_nr' => 'getRegistrationNr',
        'applied_capacities' => 'getAppliedCapacities',
        'capacities' => 'getCapacities',
        'meta_data' => 'getMetaData'
    );

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
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['equipment_type'] = isset($data['equipment_type']) ? $data['equipment_type'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['registration_nr'] = isset($data['registration_nr']) ? $data['registration_nr'] : null;
        $this->container['applied_capacities'] = isset($data['applied_capacities']) ? $data['applied_capacities'] : null;
        $this->container['capacities'] = isset($data['capacities']) ? $data['capacities'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("car", "trailer", "other");
        if (!in_array($this->container['equipment_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'equipment_type', must be one of #{allowed_values}.";
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
        $allowed_values = array("car", "trailer", "other");
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
        if (!in_array($equipment_type, $allowed_values)) {
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
     * Gets applied_capacities
     * @return object
     */
    public function getAppliedCapacities()
    {
        return $this->container['applied_capacities'];
    }

    /**
     * Sets applied_capacities
     * @param object $applied_capacities 
     * @return $this
     */
    public function setAppliedCapacities($applied_capacities)
    {
        $this->container['applied_capacities'] = $applied_capacities;

        return $this;
    }

    /**
     * Gets capacities
     * @return \BumbalClient\Model\CapacityModel[]
     */
    public function getCapacities()
    {
        return $this->container['capacities'];
    }

    /**
     * Sets capacities
     * @param \BumbalClient\Model\CapacityModel[] $capacities 
     * @return $this
     */
    public function setCapacities($capacities)
    {
        $this->container['capacities'] = $capacities;

        return $this;
    }

    /**
     * Gets meta_data
     * @return \BumbalClient\Model\MetaDataModel[]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     * @param \BumbalClient\Model\MetaDataModel[] $meta_data 
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

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


