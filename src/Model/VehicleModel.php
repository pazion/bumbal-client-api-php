<?php
/**
 * VehicleModel
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
 * VehicleModel Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VehicleModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'VehicleModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'vehicle_type_id' => 'int',
        'vehicle_type_name' => 'string',
        'name' => 'string',
        'registration_nr' => 'string',
        'applied_capacities' => 'object',
        'capacities' => '\Model\CapacityModel[]',
        'tags' => '\Model\TagModel[]',
        'links' => '\Model\LinkModel[]',
        'meta_data' => '\Model\MetaDataModel[]',
        'files' => '\Model\FileModel[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'updated_by_name' => 'string'
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
        'vehicle_type_id' => 'vehicle_type_id',
        'vehicle_type_name' => 'vehicle_type_name',
        'name' => 'name',
        'registration_nr' => 'registration_nr',
        'applied_capacities' => 'applied_capacities',
        'capacities' => 'capacities',
        'tags' => 'tags',
        'links' => 'links',
        'meta_data' => 'meta_data',
        'files' => 'files',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'updated_by_name' => 'updated_by_name'
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
        'vehicle_type_id' => 'setVehicleTypeId',
        'vehicle_type_name' => 'setVehicleTypeName',
        'name' => 'setName',
        'registration_nr' => 'setRegistrationNr',
        'applied_capacities' => 'setAppliedCapacities',
        'capacities' => 'setCapacities',
        'tags' => 'setTags',
        'links' => 'setLinks',
        'meta_data' => 'setMetaData',
        'files' => 'setFiles',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'updated_by_name' => 'setUpdatedByName'
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
        'vehicle_type_id' => 'getVehicleTypeId',
        'vehicle_type_name' => 'getVehicleTypeName',
        'name' => 'getName',
        'registration_nr' => 'getRegistrationNr',
        'applied_capacities' => 'getAppliedCapacities',
        'capacities' => 'getCapacities',
        'tags' => 'getTags',
        'links' => 'getLinks',
        'meta_data' => 'getMetaData',
        'files' => 'getFiles',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'updated_by_name' => 'getUpdatedByName'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const VEHICLE_TYPE_ID_1 = 1;
    const VEHICLE_TYPE_ID_2 = 2;
    const VEHICLE_TYPE_ID_3 = 3;
    const VEHICLE_TYPE_ID_4 = 4;
    const VEHICLE_TYPE_NAME_CAR = 'car';
    const VEHICLE_TYPE_NAME_SMALL_TRUCK = 'small_truck';
    const VEHICLE_TYPE_NAME_TRUCK = 'truck';
    const VEHICLE_TYPE_NAME_BIKE = 'bike';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getVehicleTypeIdAllowableValues()
    {
        return [
            self::VEHICLE_TYPE_ID_1,
            self::VEHICLE_TYPE_ID_2,
            self::VEHICLE_TYPE_ID_3,
            self::VEHICLE_TYPE_ID_4,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getVehicleTypeNameAllowableValues()
    {
        return [
            self::VEHICLE_TYPE_NAME_CAR,
            self::VEHICLE_TYPE_NAME_SMALL_TRUCK,
            self::VEHICLE_TYPE_NAME_TRUCK,
            self::VEHICLE_TYPE_NAME_BIKE,
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
        $this->container['vehicle_type_id'] = isset($data['vehicle_type_id']) ? $data['vehicle_type_id'] : null;
        $this->container['vehicle_type_name'] = isset($data['vehicle_type_name']) ? $data['vehicle_type_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['registration_nr'] = isset($data['registration_nr']) ? $data['registration_nr'] : null;
        $this->container['applied_capacities'] = isset($data['applied_capacities']) ? $data['applied_capacities'] : null;
        $this->container['capacities'] = isset($data['capacities']) ? $data['capacities'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['updated_by_name'] = isset($data['updated_by_name']) ? $data['updated_by_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("1", "2", "3", "4");
        if (!in_array($this->container['vehicle_type_id'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'vehicle_type_id', must be one of #{allowed_values}.";
        }

        $allowed_values = array("car", "small_truck", "truck", "bike");
        if (!in_array($this->container['vehicle_type_name'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'vehicle_type_name', must be one of #{allowed_values}.";
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
        $allowed_values = array("1", "2", "3", "4");
        if (!in_array($this->container['vehicle_type_id'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("car", "small_truck", "truck", "bike");
        if (!in_array($this->container['vehicle_type_name'], $allowed_values)) {
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
     * @param int $id Unique Identifier
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets vehicle_type_id
     * @return int
     */
    public function getVehicleTypeId()
    {
        return $this->container['vehicle_type_id'];
    }

    /**
     * Sets vehicle_type_id
     * @param int $vehicle_type_id Bumbal id for vehicle_type
     * @return $this
     */
    public function setVehicleTypeId($vehicle_type_id)
    {
        $allowed_values = array('1', '2', '3', '4');
        if (!in_array($vehicle_type_id, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'vehicle_type_id', must be one of '1', '2', '3', '4'");
        }
        $this->container['vehicle_type_id'] = $vehicle_type_id;

        return $this;
    }

    /**
     * Gets vehicle_type_name
     * @return string
     */
    public function getVehicleTypeName()
    {
        return $this->container['vehicle_type_name'];
    }

    /**
     * Sets vehicle_type_name
     * @param string $vehicle_type_name Bumbal id for vehicle_type
     * @return $this
     */
    public function setVehicleTypeName($vehicle_type_name)
    {
        $allowed_values = array('car', 'small_truck', 'truck', 'bike');
        if (!in_array($vehicle_type_name, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'vehicle_type_name', must be one of 'car', 'small_truck', 'truck', 'bike'");
        }
        $this->container['vehicle_type_name'] = $vehicle_type_name;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $registration_nr registration_nr
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
     * @return \Model\CapacityModel[]
     */
    public function getCapacities()
    {
        return $this->container['capacities'];
    }

    /**
     * Sets capacities
     * @param \Model\CapacityModel[] $capacities 
     * @return $this
     */
    public function setCapacities($capacities)
    {
        $this->container['capacities'] = $capacities;

        return $this;
    }

    /**
     * Gets tags
     * @return \Model\TagModel[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param \Model\TagModel[] $tags 
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets links
     * @return \Model\LinkModel[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Model\LinkModel[] $links 
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets meta_data
     * @return \Model\MetaDataModel[]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     * @param \Model\MetaDataModel[] $meta_data 
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets files
     * @return \Model\FileModel[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     * @param \Model\FileModel[] $files 
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at created_at date time
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime $updated_at updated_at date time
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets updated_by_name
     * @return string
     */
    public function getUpdatedByName()
    {
        return $this->container['updated_by_name'];
    }

    /**
     * Sets updated_by_name
     * @param string $updated_by_name Vehicle updated by user full name
     * @return $this
     */
    public function setUpdatedByName($updated_by_name)
    {
        $this->container['updated_by_name'] = $updated_by_name;

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


