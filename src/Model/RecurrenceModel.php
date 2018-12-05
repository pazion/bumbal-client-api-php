<?php
/**
 * RecurrenceModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
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
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\BumbalClient\Model;

use \ArrayAccess;
use \BumbalClient\ObjectSerializer;

/**
 * RecurrenceModel Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecurrenceModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RecurrenceModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'type_id' => 'int',
        'type_name' => 'int',
        'recurrence_type_name' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'period_id' => 'int',
        'recurrence_period_name' => 'string',
        'frequency' => 'int',
        'count' => 'int',
        'show_ahead' => 'int',
        'current' => 'int',
        'summary' => 'string',
        'next_run' => '\DateTime',
        'last_run' => '\DateTime',
        'tags' => '\BumbalClient\BumbalClient\Model\TagModel[]',
        'meta_data' => '\BumbalClient\BumbalClient\Model\MetaDataModel[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'updated_by_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'type_id' => null,
        'type_name' => null,
        'recurrence_type_name' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'period_id' => null,
        'recurrence_period_name' => null,
        'frequency' => 'int64',
        'count' => 'int64',
        'show_ahead' => 'int64',
        'current' => 'int64',
        'summary' => null,
        'next_run' => 'date-time',
        'last_run' => 'date-time',
        'tags' => null,
        'meta_data' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'updated_by_name' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'type_id' => 'type_id',
        'type_name' => 'type_name',
        'recurrence_type_name' => 'recurrence_type_name',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'period_id' => 'period_id',
        'recurrence_period_name' => 'recurrence_period_name',
        'frequency' => 'frequency',
        'count' => 'count',
        'show_ahead' => 'show_ahead',
        'current' => 'current',
        'summary' => 'summary',
        'next_run' => 'next_run',
        'last_run' => 'last_run',
        'tags' => 'tags',
        'meta_data' => 'meta_data',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'updated_by_name' => 'updated_by_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'type_id' => 'setTypeId',
        'type_name' => 'setTypeName',
        'recurrence_type_name' => 'setRecurrenceTypeName',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'period_id' => 'setPeriodId',
        'recurrence_period_name' => 'setRecurrencePeriodName',
        'frequency' => 'setFrequency',
        'count' => 'setCount',
        'show_ahead' => 'setShowAhead',
        'current' => 'setCurrent',
        'summary' => 'setSummary',
        'next_run' => 'setNextRun',
        'last_run' => 'setLastRun',
        'tags' => 'setTags',
        'meta_data' => 'setMetaData',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'updated_by_name' => 'setUpdatedByName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'type_id' => 'getTypeId',
        'type_name' => 'getTypeName',
        'recurrence_type_name' => 'getRecurrenceTypeName',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'period_id' => 'getPeriodId',
        'recurrence_period_name' => 'getRecurrencePeriodName',
        'frequency' => 'getFrequency',
        'count' => 'getCount',
        'show_ahead' => 'getShowAhead',
        'current' => 'getCurrent',
        'summary' => 'getSummary',
        'next_run' => 'getNextRun',
        'last_run' => 'getLastRun',
        'tags' => 'getTags',
        'meta_data' => 'getMetaData',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'updated_by_name' => 'getUpdatedByName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const RECURRENCE_TYPE_NAME_ACTIVITY = 'activity';
    const RECURRENCE_TYPE_NAME_ROUTE = 'route';
    const RECURRENCE_PERIOD_NAME_DAY = 'day';
    const RECURRENCE_PERIOD_NAME_WEEK = 'week';
    const RECURRENCE_PERIOD_NAME_MONTH = 'month';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecurrenceTypeNameAllowableValues()
    {
        return [
            self::RECURRENCE_TYPE_NAME_ACTIVITY,
            self::RECURRENCE_TYPE_NAME_ROUTE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecurrencePeriodNameAllowableValues()
    {
        return [
            self::RECURRENCE_PERIOD_NAME_DAY,
            self::RECURRENCE_PERIOD_NAME_WEEK,
            self::RECURRENCE_PERIOD_NAME_MONTH,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['type_name'] = isset($data['type_name']) ? $data['type_name'] : null;
        $this->container['recurrence_type_name'] = isset($data['recurrence_type_name']) ? $data['recurrence_type_name'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['period_id'] = isset($data['period_id']) ? $data['period_id'] : null;
        $this->container['recurrence_period_name'] = isset($data['recurrence_period_name']) ? $data['recurrence_period_name'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['show_ahead'] = isset($data['show_ahead']) ? $data['show_ahead'] : null;
        $this->container['current'] = isset($data['current']) ? $data['current'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['next_run'] = isset($data['next_run']) ? $data['next_run'] : null;
        $this->container['last_run'] = isset($data['last_run']) ? $data['last_run'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['updated_by_name'] = isset($data['updated_by_name']) ? $data['updated_by_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRecurrenceTypeNameAllowableValues();
        if (!in_array($this->container['recurrence_type_name'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'recurrence_type_name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRecurrencePeriodNameAllowableValues();
        if (!in_array($this->container['recurrence_period_name'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'recurrence_period_name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowedValues = $this->getRecurrenceTypeNameAllowableValues();
        if (!in_array($this->container['recurrence_type_name'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getRecurrencePeriodNameAllowableValues();
        if (!in_array($this->container['recurrence_period_name'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Unique Identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Recurrence name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id recurrence type_id, 11:activity, 24:route
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets type_name
     *
     * @return int
     */
    public function getTypeName()
    {
        return $this->container['type_name'];
    }

    /**
     * Sets type_name
     *
     * @param int $type_name recurrence type_name, activity, route
     *
     * @return $this
     */
    public function setTypeName($type_name)
    {
        $this->container['type_name'] = $type_name;

        return $this;
    }

    /**
     * Gets recurrence_type_name
     *
     * @return string
     */
    public function getRecurrenceTypeName()
    {
        return $this->container['recurrence_type_name'];
    }

    /**
     * Sets recurrence_type_name
     *
     * @param string $recurrence_type_name recurrence typename, activity or route
     *
     * @return $this
     */
    public function setRecurrenceTypeName($recurrence_type_name)
    {
        $allowedValues = $this->getRecurrenceTypeNameAllowableValues();
        if (!is_null($recurrence_type_name) && !in_array($recurrence_type_name, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'recurrence_type_name', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recurrence_type_name'] = $recurrence_type_name;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Start date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date End date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets period_id
     *
     * @return int
     */
    public function getPeriodId()
    {
        return $this->container['period_id'];
    }

    /**
     * Sets period_id
     *
     * @param int $period_id recurrence period_id, 1:day, 2:week, 3:month
     *
     * @return $this
     */
    public function setPeriodId($period_id)
    {
        $this->container['period_id'] = $period_id;

        return $this;
    }

    /**
     * Gets recurrence_period_name
     *
     * @return string
     */
    public function getRecurrencePeriodName()
    {
        return $this->container['recurrence_period_name'];
    }

    /**
     * Sets recurrence_period_name
     *
     * @param string $recurrence_period_name recurrence period name: day, week or month
     *
     * @return $this
     */
    public function setRecurrencePeriodName($recurrence_period_name)
    {
        $allowedValues = $this->getRecurrencePeriodNameAllowableValues();
        if (!is_null($recurrence_period_name) && !in_array($recurrence_period_name, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'recurrence_period_name', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recurrence_period_name'] = $recurrence_period_name;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return int
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param int $frequency period frequency of recurrence (2 = repeat each 2 days/weeks/months)
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count nr of last recurrence to be created
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets show_ahead
     *
     * @return int
     */
    public function getShowAhead()
    {
        return $this->container['show_ahead'];
    }

    /**
     * Sets show_ahead
     *
     * @param int $show_ahead nr of recurrences to show ahead in system
     *
     * @return $this
     */
    public function setShowAhead($show_ahead)
    {
        $this->container['show_ahead'] = $show_ahead;

        return $this;
    }

    /**
     * Gets current
     *
     * @return int
     */
    public function getCurrent()
    {
        return $this->container['current'];
    }

    /**
     * Sets current
     *
     * @param int $current last created recurrence nr
     *
     * @return $this
     */
    public function setCurrent($current)
    {
        $this->container['current'] = $current;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string $summary summary of recurrence
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets next_run
     *
     * @return \DateTime
     */
    public function getNextRun()
    {
        return $this->container['next_run'];
    }

    /**
     * Sets next_run
     *
     * @param \DateTime $next_run Next date on which a new recurrence will be added
     *
     * @return $this
     */
    public function setNextRun($next_run)
    {
        $this->container['next_run'] = $next_run;

        return $this;
    }

    /**
     * Gets last_run
     *
     * @return \DateTime
     */
    public function getLastRun()
    {
        return $this->container['last_run'];
    }

    /**
     * Sets last_run
     *
     * @param \DateTime $last_run Last date on which a new recurrence was added
     *
     * @return $this
     */
    public function setLastRun($last_run)
    {
        $this->container['last_run'] = $last_run;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \BumbalClient\BumbalClient\Model\TagModel[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \BumbalClient\BumbalClient\Model\TagModel[] $tags 
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets meta_data
     *
     * @return \BumbalClient\BumbalClient\Model\MetaDataModel[]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param \BumbalClient\BumbalClient\Model\MetaDataModel[] $meta_data 
     *
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at date time
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at date time
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets updated_by_name
     *
     * @return string
     */
    public function getUpdatedByName()
    {
        return $this->container['updated_by_name'];
    }

    /**
     * Sets updated_by_name
     *
     * @param string $updated_by_name Recurrence updated by user full name
     *
     * @return $this
     */
    public function setUpdatedByName($updated_by_name)
    {
        $this->container['updated_by_name'] = $updated_by_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


