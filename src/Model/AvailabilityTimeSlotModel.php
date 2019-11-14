<?php
/**
 * AvailabilityTimeSlotModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swaagger Codegen team
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
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\BumbalClient\Model;

use \ArrayAccess;

/**
 * AvailabilityTimeSlotModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AvailabilityTimeSlotModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AvailabilityTimeSlotModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'key' => 'string',
        'date_time_from' => '\DateTime',
        'date_time_to' => '\DateTime',
        'proposed_plan_date_time_from' => '\DateTime',
        'proposed_plan_date_time_to' => '\DateTime',
        'proposed_driver' => '\BumbalClient\BumbalClient\Model\DriverModel',
        'impact' => '\BumbalClient\BumbalClient\Model\AvailabilityTimeSlotImpactModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'key' => null,
        'date_time_from' => 'date-time',
        'date_time_to' => 'date-time',
        'proposed_plan_date_time_from' => 'date-time',
        'proposed_plan_date_time_to' => 'date-time',
        'proposed_driver' => null,
        'impact' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'key' => 'key',
        'date_time_from' => 'date_time_from',
        'date_time_to' => 'date_time_to',
        'proposed_plan_date_time_from' => 'proposed_plan_date_time_from',
        'proposed_plan_date_time_to' => 'proposed_plan_date_time_to',
        'proposed_driver' => 'proposed_driver',
        'impact' => 'impact'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'key' => 'setKey',
        'date_time_from' => 'setDateTimeFrom',
        'date_time_to' => 'setDateTimeTo',
        'proposed_plan_date_time_from' => 'setProposedPlanDateTimeFrom',
        'proposed_plan_date_time_to' => 'setProposedPlanDateTimeTo',
        'proposed_driver' => 'setProposedDriver',
        'impact' => 'setImpact'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'key' => 'getKey',
        'date_time_from' => 'getDateTimeFrom',
        'date_time_to' => 'getDateTimeTo',
        'proposed_plan_date_time_from' => 'getProposedPlanDateTimeFrom',
        'proposed_plan_date_time_to' => 'getProposedPlanDateTimeTo',
        'proposed_driver' => 'getProposedDriver',
        'impact' => 'getImpact'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['date_time_from'] = isset($data['date_time_from']) ? $data['date_time_from'] : null;
        $this->container['date_time_to'] = isset($data['date_time_to']) ? $data['date_time_to'] : null;
        $this->container['proposed_plan_date_time_from'] = isset($data['proposed_plan_date_time_from']) ? $data['proposed_plan_date_time_from'] : null;
        $this->container['proposed_plan_date_time_to'] = isset($data['proposed_plan_date_time_to']) ? $data['proposed_plan_date_time_to'] : null;
        $this->container['proposed_driver'] = isset($data['proposed_driver']) ? $data['proposed_driver'] : null;
        $this->container['impact'] = isset($data['impact']) ? $data['impact'] : null;
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
     * @return bool True if all properties are valid
     */
    public function valid()
    {

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
     * Gets key
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param string $key unique key per analyzed time slot, uuid type
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

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
     * @param \DateTime $date_time_from
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
     * @param \DateTime $date_time_to
     * @return $this
     */
    public function setDateTimeTo($date_time_to)
    {
        $this->container['date_time_to'] = $date_time_to;

        return $this;
    }

    /**
     * Gets proposed_plan_date_time_from
     * @return \DateTime
     */
    public function getProposedPlanDateTimeFrom()
    {
        return $this->container['proposed_plan_date_time_from'];
    }

    /**
     * Sets proposed_plan_date_time_from
     * @param \DateTime $proposed_plan_date_time_from
     * @return $this
     */
    public function setProposedPlanDateTimeFrom($proposed_plan_date_time_from)
    {
        $this->container['proposed_plan_date_time_from'] = $proposed_plan_date_time_from;

        return $this;
    }

    /**
     * Gets proposed_plan_date_time_to
     * @return \DateTime
     */
    public function getProposedPlanDateTimeTo()
    {
        return $this->container['proposed_plan_date_time_to'];
    }

    /**
     * Sets proposed_plan_date_time_to
     * @param \DateTime $proposed_plan_date_time_to
     * @return $this
     */
    public function setProposedPlanDateTimeTo($proposed_plan_date_time_to)
    {
        $this->container['proposed_plan_date_time_to'] = $proposed_plan_date_time_to;

        return $this;
    }

    /**
     * Gets proposed_driver
     * @return \BumbalClient\BumbalClient\Model\DriverModel
     */
    public function getProposedDriver()
    {
        return $this->container['proposed_driver'];
    }

    /**
     * Sets proposed_driver
     * @param \BumbalClient\BumbalClient\Model\DriverModel $proposed_driver
     * @return $this
     */
    public function setProposedDriver($proposed_driver)
    {
        $this->container['proposed_driver'] = $proposed_driver;

        return $this;
    }

    /**
     * Gets impact
     * @return \BumbalClient\BumbalClient\Model\AvailabilityTimeSlotImpactModel[]
     */
    public function getImpact()
    {
        return $this->container['impact'];
    }

    /**
     * Sets impact
     * @param \BumbalClient\BumbalClient\Model\AvailabilityTimeSlotImpactModel[] $impact
     * @return $this
     */
    public function setImpact($impact)
    {
        $this->container['impact'] = $impact;

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


