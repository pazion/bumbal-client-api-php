<?php
/**
 * PackageTypeFiltersModel
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
 * PackageTypeFiltersModel Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PackageTypeFiltersModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PackageTypeFiltersModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'updated_at_since' => '\DateTime',
        'updated_at_till' => '\DateTime',
        'id' => 'int[]',
        'nr' => 'string[]',
        'status_id' => 'int[]',
        'status_name' => 'string[]',
        'nr_of_packages' => 'float',
        'package_type_name' => 'string[]',
        'package_type_id' => 'int[]',
        'applied_capacities' => 'object',
        'capacities' => '\Model\CapacityModel[]',
        'barcode' => 'string[]',
        'adr' => 'bool',
        'adr_class' => 'int[]',
        'adr_un_nr' => 'int[]',
        'temp' => 'bool',
        'temp_min' => 'float',
        'temp_max' => 'float',
        'hs_code' => 'string[]',
        'description' => 'string',
        'links' => '\Model\LinkModel[]',
        'activity_links' => '\Model\LinkModel[]',
        'activity_id' => 'int[]'
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
        'updated_at_since' => 'updated_at_since',
        'updated_at_till' => 'updated_at_till',
        'id' => 'id',
        'nr' => 'nr',
        'status_id' => 'status_id',
        'status_name' => 'status_name',
        'nr_of_packages' => 'nr_of_packages',
        'package_type_name' => 'package_type_name',
        'package_type_id' => 'package_type_id',
        'applied_capacities' => 'applied_capacities',
        'capacities' => 'capacities',
        'barcode' => 'barcode',
        'adr' => 'ADR',
        'adr_class' => 'ADR_class',
        'adr_un_nr' => 'ADR_UN_nr',
        'temp' => 'temp',
        'temp_min' => 'temp_min',
        'temp_max' => 'temp_max',
        'hs_code' => 'hs_code',
        'description' => 'description',
        'links' => 'links',
        'activity_links' => 'activity_links',
        'activity_id' => 'activity_id'
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
        'updated_at_since' => 'setUpdatedAtSince',
        'updated_at_till' => 'setUpdatedAtTill',
        'id' => 'setId',
        'nr' => 'setNr',
        'status_id' => 'setStatusId',
        'status_name' => 'setStatusName',
        'nr_of_packages' => 'setNrOfPackages',
        'package_type_name' => 'setPackageTypeName',
        'package_type_id' => 'setPackageTypeId',
        'applied_capacities' => 'setAppliedCapacities',
        'capacities' => 'setCapacities',
        'barcode' => 'setBarcode',
        'adr' => 'setAdr',
        'adr_class' => 'setAdrClass',
        'adr_un_nr' => 'setAdrUnNr',
        'temp' => 'setTemp',
        'temp_min' => 'setTempMin',
        'temp_max' => 'setTempMax',
        'hs_code' => 'setHsCode',
        'description' => 'setDescription',
        'links' => 'setLinks',
        'activity_links' => 'setActivityLinks',
        'activity_id' => 'setActivityId'
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
        'updated_at_since' => 'getUpdatedAtSince',
        'updated_at_till' => 'getUpdatedAtTill',
        'id' => 'getId',
        'nr' => 'getNr',
        'status_id' => 'getStatusId',
        'status_name' => 'getStatusName',
        'nr_of_packages' => 'getNrOfPackages',
        'package_type_name' => 'getPackageTypeName',
        'package_type_id' => 'getPackageTypeId',
        'applied_capacities' => 'getAppliedCapacities',
        'capacities' => 'getCapacities',
        'barcode' => 'getBarcode',
        'adr' => 'getAdr',
        'adr_class' => 'getAdrClass',
        'adr_un_nr' => 'getAdrUnNr',
        'temp' => 'getTemp',
        'temp_min' => 'getTempMin',
        'temp_max' => 'getTempMax',
        'hs_code' => 'getHsCode',
        'description' => 'getDescription',
        'links' => 'getLinks',
        'activity_links' => 'getActivityLinks',
        'activity_id' => 'getActivityId'
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
        $this->container['updated_at_since'] = isset($data['updated_at_since']) ? $data['updated_at_since'] : null;
        $this->container['updated_at_till'] = isset($data['updated_at_till']) ? $data['updated_at_till'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['nr'] = isset($data['nr']) ? $data['nr'] : null;
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['status_name'] = isset($data['status_name']) ? $data['status_name'] : null;
        $this->container['nr_of_packages'] = isset($data['nr_of_packages']) ? $data['nr_of_packages'] : null;
        $this->container['package_type_name'] = isset($data['package_type_name']) ? $data['package_type_name'] : null;
        $this->container['package_type_id'] = isset($data['package_type_id']) ? $data['package_type_id'] : null;
        $this->container['applied_capacities'] = isset($data['applied_capacities']) ? $data['applied_capacities'] : null;
        $this->container['capacities'] = isset($data['capacities']) ? $data['capacities'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['adr'] = isset($data['adr']) ? $data['adr'] : null;
        $this->container['adr_class'] = isset($data['adr_class']) ? $data['adr_class'] : null;
        $this->container['adr_un_nr'] = isset($data['adr_un_nr']) ? $data['adr_un_nr'] : null;
        $this->container['temp'] = isset($data['temp']) ? $data['temp'] : null;
        $this->container['temp_min'] = isset($data['temp_min']) ? $data['temp_min'] : null;
        $this->container['temp_max'] = isset($data['temp_max']) ? $data['temp_max'] : null;
        $this->container['hs_code'] = isset($data['hs_code']) ? $data['hs_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['activity_links'] = isset($data['activity_links']) ? $data['activity_links'] : null;
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
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
     * Gets updated_at_since
     * @return \DateTime
     */
    public function getUpdatedAtSince()
    {
        return $this->container['updated_at_since'];
    }

    /**
     * Sets updated_at_since
     * @param \DateTime $updated_at_since Show updated since
     * @return $this
     */
    public function setUpdatedAtSince($updated_at_since)
    {
        $this->container['updated_at_since'] = $updated_at_since;

        return $this;
    }

    /**
     * Gets updated_at_till
     * @return \DateTime
     */
    public function getUpdatedAtTill()
    {
        return $this->container['updated_at_till'];
    }

    /**
     * Sets updated_at_till
     * @param \DateTime $updated_at_till Show updated till
     * @return $this
     */
    public function setUpdatedAtTill($updated_at_till)
    {
        $this->container['updated_at_till'] = $updated_at_till;

        return $this;
    }

    /**
     * Gets id
     * @return int[]
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int[] $id Bumbal package line id's
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets nr
     * @return string[]
     */
    public function getNr()
    {
        return $this->container['nr'];
    }

    /**
     * Sets nr
     * @param string[] $nr PackageType numbers
     * @return $this
     */
    public function setNr($nr)
    {
        $this->container['nr'] = $nr;

        return $this;
    }

    /**
     * Gets status_id
     * @return int[]
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     * @param int[] $status_id StatusIds of PackageType, 31: package_line_cancelled, 23: package_line_incomplete, 24: package_line_new, 42: package_line_awaiting, 25: package_line_accepted, 10: package_line_planned, 11: package_line_in_progress, 12: package_line_executed
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets status_name
     * @return string[]
     */
    public function getStatusName()
    {
        return $this->container['status_name'];
    }

    /**
     * Sets status_name
     * @param string[] $status_name PackageType Status
     * @return $this
     */
    public function setStatusName($status_name)
    {
        $this->container['status_name'] = $status_name;

        return $this;
    }

    /**
     * Gets nr_of_packages
     * @return float
     */
    public function getNrOfPackages()
    {
        return $this->container['nr_of_packages'];
    }

    /**
     * Sets nr_of_packages
     * @param float $nr_of_packages Number of packages in package line
     * @return $this
     */
    public function setNrOfPackages($nr_of_packages)
    {
        $this->container['nr_of_packages'] = $nr_of_packages;

        return $this;
    }

    /**
     * Gets package_type_name
     * @return string[]
     */
    public function getPackageTypeName()
    {
        return $this->container['package_type_name'];
    }

    /**
     * Sets package_type_name
     * @param string[] $package_type_name Type of the Packages
     * @return $this
     */
    public function setPackageTypeName($package_type_name)
    {
        $this->container['package_type_name'] = $package_type_name;

        return $this;
    }

    /**
     * Gets package_type_id
     * @return int[]
     */
    public function getPackageTypeId()
    {
        return $this->container['package_type_id'];
    }

    /**
     * Sets package_type_id
     * @param int[] $package_type_id ID of the package type for the packages
     * @return $this
     */
    public function setPackageTypeId($package_type_id)
    {
        $this->container['package_type_id'] = $package_type_id;

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
     * Gets barcode
     * @return string[]
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     * @param string[] $barcode barcode for packages
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets adr
     * @return bool
     */
    public function getAdr()
    {
        return $this->container['adr'];
    }

    /**
     * Sets adr
     * @param bool $adr boolean for whether or not the packages in package line should be considered as ADR
     * @return $this
     */
    public function setAdr($adr)
    {
        $this->container['adr'] = $adr;

        return $this;
    }

    /**
     * Gets adr_class
     * @return int[]
     */
    public function getAdrClass()
    {
        return $this->container['adr_class'];
    }

    /**
     * Sets adr_class
     * @param int[] $adr_class ADR class of packages in package line
     * @return $this
     */
    public function setAdrClass($adr_class)
    {
        $this->container['adr_class'] = $adr_class;

        return $this;
    }

    /**
     * Gets adr_un_nr
     * @return int[]
     */
    public function getAdrUnNr()
    {
        return $this->container['adr_un_nr'];
    }

    /**
     * Sets adr_un_nr
     * @param int[] $adr_un_nr ADR UN Nr of packages in package line
     * @return $this
     */
    public function setAdrUnNr($adr_un_nr)
    {
        $this->container['adr_un_nr'] = $adr_un_nr;

        return $this;
    }

    /**
     * Gets temp
     * @return bool
     */
    public function getTemp()
    {
        return $this->container['temp'];
    }

    /**
     * Sets temp
     * @param bool $temp boolean for whether or not the packages in package line should be considered as temperature dependent
     * @return $this
     */
    public function setTemp($temp)
    {
        $this->container['temp'] = $temp;

        return $this;
    }

    /**
     * Gets temp_min
     * @return float
     */
    public function getTempMin()
    {
        return $this->container['temp_min'];
    }

    /**
     * Sets temp_min
     * @param float $temp_min minimum temperature for packages in package line
     * @return $this
     */
    public function setTempMin($temp_min)
    {
        $this->container['temp_min'] = $temp_min;

        return $this;
    }

    /**
     * Gets temp_max
     * @return float
     */
    public function getTempMax()
    {
        return $this->container['temp_max'];
    }

    /**
     * Sets temp_max
     * @param float $temp_max maximum temperature for packages in package line
     * @return $this
     */
    public function setTempMax($temp_max)
    {
        $this->container['temp_max'] = $temp_max;

        return $this;
    }

    /**
     * Gets hs_code
     * @return string[]
     */
    public function getHsCode()
    {
        return $this->container['hs_code'];
    }

    /**
     * Sets hs_code
     * @param string[] $hs_code Harmonized System code for packages
     * @return $this
     */
    public function setHsCode($hs_code)
    {
        $this->container['hs_code'] = $hs_code;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description description of this package_line
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets activity_links
     * @return \Model\LinkModel[]
     */
    public function getActivityLinks()
    {
        return $this->container['activity_links'];
    }

    /**
     * Sets activity_links
     * @param \Model\LinkModel[] $activity_links
     * @return $this
     */
    public function setActivityLinks($activity_links)
    {
        $this->container['activity_links'] = $activity_links;

        return $this;
    }

    /**
     * Gets activity_id
     * @return int[]
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /**
     * Sets activity_id
     * @param int[] $activity_id Activity id
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

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


