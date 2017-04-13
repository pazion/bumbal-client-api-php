<?php
/**
 * AssignmentModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bumbal\Client
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
 * AssignmentModel Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Bumbal\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AssignmentModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AssignmentModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'status_id' => 'int',
        'nr' => 'string',
        'reference' => 'string',
        'description' => 'string',
        'remarks' => 'string',
        'date_time_from' => '\DateTime',
        'date_time_to' => '\DateTime'
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
        'status_id' => 'status_id',
        'nr' => 'nr',
        'reference' => 'reference',
        'description' => 'description',
        'remarks' => 'remarks',
        'date_time_from' => 'date_time_from',
        'date_time_to' => 'date_time_to'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status_id' => 'setStatusId',
        'nr' => 'setNr',
        'reference' => 'setReference',
        'description' => 'setDescription',
        'remarks' => 'setRemarks',
        'date_time_from' => 'setDateTimeFrom',
        'date_time_to' => 'setDateTimeTo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status_id' => 'getStatusId',
        'nr' => 'getNr',
        'reference' => 'getReference',
        'description' => 'getDescription',
        'remarks' => 'getRemarks',
        'date_time_from' => 'getDateTimeFrom',
        'date_time_to' => 'getDateTimeTo'
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

    const STATUS_ID_13 = 13;
    const STATUS_ID_14 = 14;
    const STATUS_ID_19 = 19;
    const STATUS_ID_30 = 30;
    const STATUS_ID_40 = 40;
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusIdAllowableValues()
    {
        return [
            self::STATUS_ID_13,
            self::STATUS_ID_14,
            self::STATUS_ID_19,
            self::STATUS_ID_30,
            self::STATUS_ID_40,
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
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['nr'] = isset($data['nr']) ? $data['nr'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['date_time_from'] = isset($data['date_time_from']) ? $data['date_time_from'] : null;
        $this->container['date_time_to'] = isset($data['date_time_to']) ? $data['date_time_to'] : null;
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
        if ($this->container['status_id'] === null) {
            $invalid_properties[] = "'status_id' can't be null";
        }
        $allowed_values = ["13", "14", "19", "30", "40"];
        if (!in_array($this->container['status_id'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status_id', must be one of '13', '14', '19', '30', '40'.";
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
        if ($this->container['status_id'] === null) {
            return false;
        }
        $allowed_values = ["13", "14", "19", "30", "40"];
        if (!in_array($this->container['status_id'], $allowed_values)) {
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
     * @param int $id Unique ID of this Assignment
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status_id
     * @return int
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     * @param int $status_id Status ID of this Assignment
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $allowed_values = array('13', '14', '19', '30', '40');
        if ((!in_array($status_id, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status_id', must be one of '13', '14', '19', '30', '40'");
        }
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets nr
     * @return string
     */
    public function getNr()
    {
        return $this->container['nr'];
    }

    /**
     * Sets nr
     * @param string $nr Non-Unique number of this Assignment
     * @return $this
     */
    public function setNr($nr)
    {
        $this->container['nr'] = $nr;

        return $this;
    }

    /**
     * Gets reference
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     * @param string $reference Reference text of this Assignment
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

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
     * @param string $description Description text of this Assignment
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets remarks
     * @return string
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks
     * @param string $remarks Remarks about this Assignment
     * @return $this
     */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets date_time_from
     * @return \DateTime
     */
    public function getDateTimeFrom()
    {
        return $this->container['date_time_from'];
    }

    /**
     * Sets date_time_from
     * @param \DateTime $date_time_from Earliest start time of all Activities is this Assignment
     * @return $this
     */
    public function setDateTimeFrom($date_time_from)
    {
        $this->container['date_time_from'] = $date_time_from;

        return $this;
    }

    /**
     * Gets date_time_to
     * @return \DateTime
     */
    public function getDateTimeTo()
    {
        return $this->container['date_time_to'];
    }

    /**
     * Sets date_time_to
     * @param \DateTime $date_time_to Latest end time of all Activities is this Assignment
     * @return $this
     */
    public function setDateTimeTo($date_time_to)
    {
        $this->container['date_time_to'] = $date_time_to;

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
            return json_encode(\Bumbal\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Bumbal\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
