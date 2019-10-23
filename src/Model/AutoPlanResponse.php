<?php
/**
 * AutoPlanResponse
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
 * AutoPlanResponse Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AutoPlanResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AutoPlanResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'token' => 'string',
        'status' => 'string',
        'affected_activities' => '\Model\ActivityModel[]',
        'unavailable_timewindows' => '\Model\TimeSlotModel[]',
        'latest_analyzed_date' => '\DateTime'
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
        'token' => 'token',
        'status' => 'status',
        'affected_activities' => 'affected_activities',
        'unavailable_timewindows' => 'unavailable_timewindows',
        'latest_analyzed_date' => 'latest_analyzed_date'
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
        'token' => 'setToken',
        'status' => 'setStatus',
        'affected_activities' => 'setAffectedActivities',
        'unavailable_timewindows' => 'setUnavailableTimewindows',
        'latest_analyzed_date' => 'setLatestAnalyzedDate'
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
        'token' => 'getToken',
        'status' => 'getStatus',
        'affected_activities' => 'getAffectedActivities',
        'unavailable_timewindows' => 'getUnavailableTimewindows',
        'latest_analyzed_date' => 'getLatestAnalyzedDate'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_NOT_READY = 'not_ready';
    const STATUS_DONE = 'done';
    const STATUS_CANCELLED = 'cancelled';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NOT_READY,
            self::STATUS_DONE,
            self::STATUS_CANCELLED,
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
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['affected_activities'] = isset($data['affected_activities']) ? $data['affected_activities'] : null;
        $this->container['unavailable_timewindows'] = isset($data['unavailable_timewindows']) ? $data['unavailable_timewindows'] : null;
        $this->container['latest_analyzed_date'] = isset($data['latest_analyzed_date']) ? $data['latest_analyzed_date'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("not_ready", "done", "cancelled");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
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
        $allowed_values = array("not_ready", "done", "cancelled");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     * @param string $token token for the auto plan job
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status current status for request
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('not_ready', 'done', 'cancelled');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'not_ready', 'done', 'cancelled'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets affected_activities
     * @return \Model\ActivityModel[]
     */
    public function getAffectedActivities()
    {
        return $this->container['affected_activities'];
    }

    /**
     * Sets affected_activities
     * @param \Model\ActivityModel[] $affected_activities 
     * @return $this
     */
    public function setAffectedActivities($affected_activities)
    {
        $this->container['affected_activities'] = $affected_activities;

        return $this;
    }

    /**
     * Gets unavailable_timewindows
     * @return \Model\TimeSlotModel[]
     */
    public function getUnavailableTimewindows()
    {
        return $this->container['unavailable_timewindows'];
    }

    /**
     * Sets unavailable_timewindows
     * @param \Model\TimeSlotModel[] $unavailable_timewindows 
     * @return $this
     */
    public function setUnavailableTimewindows($unavailable_timewindows)
    {
        $this->container['unavailable_timewindows'] = $unavailable_timewindows;

        return $this;
    }

    /**
     * Gets latest_analyzed_date
     * @return \DateTime
     */
    public function getLatestAnalyzedDate()
    {
        return $this->container['latest_analyzed_date'];
    }

    /**
     * Sets latest_analyzed_date
     * @param \DateTime $latest_analyzed_date 
     * @return $this
     */
    public function setLatestAnalyzedDate($latest_analyzed_date)
    {
        $this->container['latest_analyzed_date'] = $latest_analyzed_date;

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


