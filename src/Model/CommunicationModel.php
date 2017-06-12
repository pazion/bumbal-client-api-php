<?php
/**
 * CommunicationModel
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
 * CommunicationModel Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CommunicationModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CommunicationModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'saywhen' => 'bool',
        'send_invite' => 'bool',
        'send_planned' => 'bool',
        'send_eta' => 'bool',
        'send_executed' => 'bool',
        'send_cancelled' => 'bool',
        'saywhen_status_name' => 'string'
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
        'saywhen' => 'saywhen',
        'send_invite' => 'send_invite',
        'send_planned' => 'send_planned',
        'send_eta' => 'send_eta',
        'send_executed' => 'send_executed',
        'send_cancelled' => 'send_cancelled',
        'saywhen_status_name' => 'saywhen_status_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'saywhen' => 'setSaywhen',
        'send_invite' => 'setSendInvite',
        'send_planned' => 'setSendPlanned',
        'send_eta' => 'setSendEta',
        'send_executed' => 'setSendExecuted',
        'send_cancelled' => 'setSendCancelled',
        'saywhen_status_name' => 'setSaywhenStatusName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'saywhen' => 'getSaywhen',
        'send_invite' => 'getSendInvite',
        'send_planned' => 'getSendPlanned',
        'send_eta' => 'getSendEta',
        'send_executed' => 'getSendExecuted',
        'send_cancelled' => 'getSendCancelled',
        'saywhen_status_name' => 'getSaywhenStatusName'
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

    const SAYWHEN_STATUS_NAME_CANCELLED = 'cancelled';
    const SAYWHEN_STATUS_NAME_OFFERED = 'offered';
    const SAYWHEN_STATUS_NAME_PREFFED = 'preffed';
    const SAYWHEN_STATUS_NAME_CONFIRMED = 'confirmed';
    const SAYWHEN_STATUS_NAME_ACCEPTED = 'accepted';
    const SAYWHEN_STATUS_NAME_PLANNED = 'planned';
    const SAYWHEN_STATUS_NAME_SCHEDULED = 'scheduled';
    const SAYWHEN_STATUS_NAME_STARTED = 'started';
    const SAYWHEN_STATUS_NAME_COMPLETED = 'completed';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSaywhenStatusNameAllowableValues()
    {
        return [
            self::SAYWHEN_STATUS_NAME_CANCELLED,
            self::SAYWHEN_STATUS_NAME_OFFERED,
            self::SAYWHEN_STATUS_NAME_PREFFED,
            self::SAYWHEN_STATUS_NAME_CONFIRMED,
            self::SAYWHEN_STATUS_NAME_ACCEPTED,
            self::SAYWHEN_STATUS_NAME_PLANNED,
            self::SAYWHEN_STATUS_NAME_SCHEDULED,
            self::SAYWHEN_STATUS_NAME_STARTED,
            self::SAYWHEN_STATUS_NAME_COMPLETED,
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
        $this->container['saywhen'] = isset($data['saywhen']) ? $data['saywhen'] : null;
        $this->container['send_invite'] = isset($data['send_invite']) ? $data['send_invite'] : null;
        $this->container['send_planned'] = isset($data['send_planned']) ? $data['send_planned'] : null;
        $this->container['send_eta'] = isset($data['send_eta']) ? $data['send_eta'] : null;
        $this->container['send_executed'] = isset($data['send_executed']) ? $data['send_executed'] : null;
        $this->container['send_cancelled'] = isset($data['send_cancelled']) ? $data['send_cancelled'] : null;
        $this->container['saywhen_status_name'] = isset($data['saywhen_status_name']) ? $data['saywhen_status_name'] : null;
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
        $allowed_values = ["cancelled", "offered", "preffed", "confirmed", "accepted", "planned", "scheduled", "started", "completed"];
        if (!in_array($this->container['saywhen_status_name'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'saywhen_status_name', must be one of 'cancelled', 'offered', 'preffed', 'confirmed', 'accepted', 'planned', 'scheduled', 'started', 'completed'.";
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
        $allowed_values = ["cancelled", "offered", "preffed", "confirmed", "accepted", "planned", "scheduled", "started", "completed"];
        if (!in_array($this->container['saywhen_status_name'], $allowed_values)) {
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
     * Gets saywhen
     * @return bool
     */
    public function getSaywhen()
    {
        return $this->container['saywhen'];
    }

    /**
     * Sets saywhen
     * @param bool $saywhen Whether or not activity should be synced with Saywhen
     * @return $this
     */
    public function setSaywhen($saywhen)
    {
        $this->container['saywhen'] = $saywhen;

        return $this;
    }

    /**
     * Gets send_invite
     * @return bool
     */
    public function getSendInvite()
    {
        return $this->container['send_invite'];
    }

    /**
     * Sets send_invite
     * @param bool $send_invite Send invite
     * @return $this
     */
    public function setSendInvite($send_invite)
    {
        $this->container['send_invite'] = $send_invite;

        return $this;
    }

    /**
     * Gets send_planned
     * @return bool
     */
    public function getSendPlanned()
    {
        return $this->container['send_planned'];
    }

    /**
     * Sets send_planned
     * @param bool $send_planned Send planned notice
     * @return $this
     */
    public function setSendPlanned($send_planned)
    {
        $this->container['send_planned'] = $send_planned;

        return $this;
    }

    /**
     * Gets send_eta
     * @return bool
     */
    public function getSendEta()
    {
        return $this->container['send_eta'];
    }

    /**
     * Sets send_eta
     * @param bool $send_eta Send eta notice
     * @return $this
     */
    public function setSendEta($send_eta)
    {
        $this->container['send_eta'] = $send_eta;

        return $this;
    }

    /**
     * Gets send_executed
     * @return bool
     */
    public function getSendExecuted()
    {
        return $this->container['send_executed'];
    }

    /**
     * Sets send_executed
     * @param bool $send_executed Send executed notice
     * @return $this
     */
    public function setSendExecuted($send_executed)
    {
        $this->container['send_executed'] = $send_executed;

        return $this;
    }

    /**
     * Gets send_cancelled
     * @return bool
     */
    public function getSendCancelled()
    {
        return $this->container['send_cancelled'];
    }

    /**
     * Sets send_cancelled
     * @param bool $send_cancelled Send cancelled notice
     * @return $this
     */
    public function setSendCancelled($send_cancelled)
    {
        $this->container['send_cancelled'] = $send_cancelled;

        return $this;
    }

    /**
     * Gets saywhen_status_name
     * @return string
     */
    public function getSaywhenStatusName()
    {
        return $this->container['saywhen_status_name'];
    }

    /**
     * Sets saywhen_status_name
     * @param string $saywhen_status_name Saywhen Status name
     * @return $this
     */
    public function setSaywhenStatusName($saywhen_status_name)
    {
        $allowed_values = array('cancelled', 'offered', 'preffed', 'confirmed', 'accepted', 'planned', 'scheduled', 'started', 'completed');
        if (!is_null($saywhen_status_name) && (!in_array($saywhen_status_name, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'saywhen_status_name', must be one of 'cancelled', 'offered', 'preffed', 'confirmed', 'accepted', 'planned', 'scheduled', 'started', 'completed'");
        }
        $this->container['saywhen_status_name'] = $saywhen_status_name;

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
