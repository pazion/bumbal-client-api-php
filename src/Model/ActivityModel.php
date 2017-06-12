<?php
/**
 * ActivityModel
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
 * ActivityModel Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ActivityModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ActivityModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'nr' => 'string',
        'activity_type_name' => 'string',
        'activity_type_id' => 'int',
        'status_id' => 'int',
        'status_name' => 'string',
        'instructions' => '\BumbalClient\Model\InstructionModel[]',
        'remarks' => 'string',
        'locked' => 'bool',
        'top_priority' => 'bool',
        'sequence_nr' => 'int',
        'reference' => 'string',
        'description' => 'string',
        'date_time_from' => '\DateTime',
        'date_time_to' => '\DateTime',
        'duration' => 'int',
        'route_id' => 'string',
        'route_nr' => 'string',
        'route_name' => 'string',
        'route_date_time_from' => '\DateTime',
        'route_date_time_to' => '\DateTime',
        'route_earliest_date_time' => '\DateTime',
        'route_latest_date_time' => '\DateTime',
        'route_status_id' => 'int',
        'route_status_name' => 'int',
        'route_nr_of_stops' => 'int',
        'route_overdue' => 'bool',
        'driver_id' => 'int',
        'driver_first_name' => 'string',
        'driver_last_name' => 'string',
        'driver_name_prefix' => 'string',
        'driver_full_name' => 'string',
        'driver_email' => 'string',
        'address' => '\BumbalClient\Model\AddressModel',
        'tags' => '\BumbalClient\Model\TagModel[]',
        'package_lines' => '\BumbalClient\Model\PackageLineModel[]',
        'time_slots' => '\BumbalClient\Model\TimeSlotModel[]',
        'links' => '\BumbalClient\Model\LinkModel[]',
        'communication' => '\BumbalClient\Model\CommunicationModel',
        'meta_data' => 'object',
        'meta_data_objects' => '\BumbalClient\Model\MetaDataModel[]',
        'files' => '\BumbalClient\Model\FileModel[]'
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
        'nr' => 'nr',
        'activity_type_name' => 'activity_type_name',
        'activity_type_id' => 'activity_type_id',
        'status_id' => 'status_id',
        'status_name' => 'status_name',
        'instructions' => 'instructions',
        'remarks' => 'remarks',
        'locked' => 'locked',
        'top_priority' => 'top_priority',
        'sequence_nr' => 'sequence_nr',
        'reference' => 'reference',
        'description' => 'description',
        'date_time_from' => 'date_time_from',
        'date_time_to' => 'date_time_to',
        'duration' => 'duration',
        'route_id' => 'route_id',
        'route_nr' => 'route_nr',
        'route_name' => 'route_name',
        'route_date_time_from' => 'route_date_time_from',
        'route_date_time_to' => 'route_date_time_to',
        'route_earliest_date_time' => 'route_earliest_date_time',
        'route_latest_date_time' => 'route_latest_date_time',
        'route_status_id' => 'route_status_id',
        'route_status_name' => 'route_status_name',
        'route_nr_of_stops' => 'route_nr_of_stops',
        'route_overdue' => 'route_overdue',
        'driver_id' => 'driver_id',
        'driver_first_name' => 'driver_first_name',
        'driver_last_name' => 'driver_last_name',
        'driver_name_prefix' => 'driver_name_prefix',
        'driver_full_name' => 'driver_full_name',
        'driver_email' => 'driver_email',
        'address' => 'address',
        'tags' => 'tags',
        'package_lines' => 'package_lines',
        'time_slots' => 'time_slots',
        'links' => 'links',
        'communication' => 'communication',
        'meta_data' => 'meta_data',
        'meta_data_objects' => 'meta_data_objects',
        'files' => 'files'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'nr' => 'setNr',
        'activity_type_name' => 'setActivityTypeName',
        'activity_type_id' => 'setActivityTypeId',
        'status_id' => 'setStatusId',
        'status_name' => 'setStatusName',
        'instructions' => 'setInstructions',
        'remarks' => 'setRemarks',
        'locked' => 'setLocked',
        'top_priority' => 'setTopPriority',
        'sequence_nr' => 'setSequenceNr',
        'reference' => 'setReference',
        'description' => 'setDescription',
        'date_time_from' => 'setDateTimeFrom',
        'date_time_to' => 'setDateTimeTo',
        'duration' => 'setDuration',
        'route_id' => 'setRouteId',
        'route_nr' => 'setRouteNr',
        'route_name' => 'setRouteName',
        'route_date_time_from' => 'setRouteDateTimeFrom',
        'route_date_time_to' => 'setRouteDateTimeTo',
        'route_earliest_date_time' => 'setRouteEarliestDateTime',
        'route_latest_date_time' => 'setRouteLatestDateTime',
        'route_status_id' => 'setRouteStatusId',
        'route_status_name' => 'setRouteStatusName',
        'route_nr_of_stops' => 'setRouteNrOfStops',
        'route_overdue' => 'setRouteOverdue',
        'driver_id' => 'setDriverId',
        'driver_first_name' => 'setDriverFirstName',
        'driver_last_name' => 'setDriverLastName',
        'driver_name_prefix' => 'setDriverNamePrefix',
        'driver_full_name' => 'setDriverFullName',
        'driver_email' => 'setDriverEmail',
        'address' => 'setAddress',
        'tags' => 'setTags',
        'package_lines' => 'setPackageLines',
        'time_slots' => 'setTimeSlots',
        'links' => 'setLinks',
        'communication' => 'setCommunication',
        'meta_data' => 'setMetaData',
        'meta_data_objects' => 'setMetaDataObjects',
        'files' => 'setFiles'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'nr' => 'getNr',
        'activity_type_name' => 'getActivityTypeName',
        'activity_type_id' => 'getActivityTypeId',
        'status_id' => 'getStatusId',
        'status_name' => 'getStatusName',
        'instructions' => 'getInstructions',
        'remarks' => 'getRemarks',
        'locked' => 'getLocked',
        'top_priority' => 'getTopPriority',
        'sequence_nr' => 'getSequenceNr',
        'reference' => 'getReference',
        'description' => 'getDescription',
        'date_time_from' => 'getDateTimeFrom',
        'date_time_to' => 'getDateTimeTo',
        'duration' => 'getDuration',
        'route_id' => 'getRouteId',
        'route_nr' => 'getRouteNr',
        'route_name' => 'getRouteName',
        'route_date_time_from' => 'getRouteDateTimeFrom',
        'route_date_time_to' => 'getRouteDateTimeTo',
        'route_earliest_date_time' => 'getRouteEarliestDateTime',
        'route_latest_date_time' => 'getRouteLatestDateTime',
        'route_status_id' => 'getRouteStatusId',
        'route_status_name' => 'getRouteStatusName',
        'route_nr_of_stops' => 'getRouteNrOfStops',
        'route_overdue' => 'getRouteOverdue',
        'driver_id' => 'getDriverId',
        'driver_first_name' => 'getDriverFirstName',
        'driver_last_name' => 'getDriverLastName',
        'driver_name_prefix' => 'getDriverNamePrefix',
        'driver_full_name' => 'getDriverFullName',
        'driver_email' => 'getDriverEmail',
        'address' => 'getAddress',
        'tags' => 'getTags',
        'package_lines' => 'getPackageLines',
        'time_slots' => 'getTimeSlots',
        'links' => 'getLinks',
        'communication' => 'getCommunication',
        'meta_data' => 'getMetaData',
        'meta_data_objects' => 'getMetaDataObjects',
        'files' => 'getFiles'
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

    const ACTIVITY_TYPE_NAME_PICKUP = 'pickup';
    const ACTIVITY_TYPE_NAME_DROPOFF = 'dropoff';
    const ACTIVITY_TYPE_NAME_ROUTE_START = 'route_start';
    const ACTIVITY_TYPE_NAME_ROUTE_END = 'route_end';
    const ACTIVITY_TYPE_NAME_STOP = 'stop';
    const ACTIVITY_TYPE_NAME_COMBI = 'combi';
    const STATUS_NAME_NEW = 'activity_new';
    const STATUS_NAME_ACCEPTED = 'activity_accepted';
    const STATUS_NAME_PLANNED = 'activity_planned';
    const STATUS_NAME_IN_PROGRESS = 'activity_in_progress';
    const STATUS_NAME_EXECUTED = 'activity_executed';
    const STATUS_NAME_CANCELLED = 'activity_cancelled';
    const STATUS_NAME_AWAITING = 'activity_awaiting';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getActivityTypeNameAllowableValues()
    {
        return [
            self::ACTIVITY_TYPE_NAME_PICKUP,
            self::ACTIVITY_TYPE_NAME_DROPOFF,
            self::ACTIVITY_TYPE_NAME_ROUTE_START,
            self::ACTIVITY_TYPE_NAME_ROUTE_END,
            self::ACTIVITY_TYPE_NAME_STOP,
            self::ACTIVITY_TYPE_NAME_COMBI,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusNameAllowableValues()
    {
        return [
            self::STATUS_NAME_NEW,
            self::STATUS_NAME_ACCEPTED,
            self::STATUS_NAME_PLANNED,
            self::STATUS_NAME_IN_PROGRESS,
            self::STATUS_NAME_EXECUTED,
            self::STATUS_NAME_CANCELLED,
            self::STATUS_NAME_AWAITING,
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
        $this->container['nr'] = isset($data['nr']) ? $data['nr'] : null;
        $this->container['activity_type_name'] = isset($data['activity_type_name']) ? $data['activity_type_name'] : null;
        $this->container['activity_type_id'] = isset($data['activity_type_id']) ? $data['activity_type_id'] : null;
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['status_name'] = isset($data['status_name']) ? $data['status_name'] : null;
        $this->container['instructions'] = isset($data['instructions']) ? $data['instructions'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['top_priority'] = isset($data['top_priority']) ? $data['top_priority'] : null;
        $this->container['sequence_nr'] = isset($data['sequence_nr']) ? $data['sequence_nr'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['date_time_from'] = isset($data['date_time_from']) ? $data['date_time_from'] : null;
        $this->container['date_time_to'] = isset($data['date_time_to']) ? $data['date_time_to'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['route_id'] = isset($data['route_id']) ? $data['route_id'] : null;
        $this->container['route_nr'] = isset($data['route_nr']) ? $data['route_nr'] : null;
        $this->container['route_name'] = isset($data['route_name']) ? $data['route_name'] : null;
        $this->container['route_date_time_from'] = isset($data['route_date_time_from']) ? $data['route_date_time_from'] : null;
        $this->container['route_date_time_to'] = isset($data['route_date_time_to']) ? $data['route_date_time_to'] : null;
        $this->container['route_earliest_date_time'] = isset($data['route_earliest_date_time']) ? $data['route_earliest_date_time'] : null;
        $this->container['route_latest_date_time'] = isset($data['route_latest_date_time']) ? $data['route_latest_date_time'] : null;
        $this->container['route_status_id'] = isset($data['route_status_id']) ? $data['route_status_id'] : null;
        $this->container['route_status_name'] = isset($data['route_status_name']) ? $data['route_status_name'] : null;
        $this->container['route_nr_of_stops'] = isset($data['route_nr_of_stops']) ? $data['route_nr_of_stops'] : null;
        $this->container['route_overdue'] = isset($data['route_overdue']) ? $data['route_overdue'] : null;
        $this->container['driver_id'] = isset($data['driver_id']) ? $data['driver_id'] : null;
        $this->container['driver_first_name'] = isset($data['driver_first_name']) ? $data['driver_first_name'] : null;
        $this->container['driver_last_name'] = isset($data['driver_last_name']) ? $data['driver_last_name'] : null;
        $this->container['driver_name_prefix'] = isset($data['driver_name_prefix']) ? $data['driver_name_prefix'] : null;
        $this->container['driver_full_name'] = isset($data['driver_full_name']) ? $data['driver_full_name'] : null;
        $this->container['driver_email'] = isset($data['driver_email']) ? $data['driver_email'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['package_lines'] = isset($data['package_lines']) ? $data['package_lines'] : null;
        $this->container['time_slots'] = isset($data['time_slots']) ? $data['time_slots'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['communication'] = isset($data['communication']) ? $data['communication'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['meta_data_objects'] = isset($data['meta_data_objects']) ? $data['meta_data_objects'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
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
        $allowed_values = ["pickup", "dropoff", "route_start", "route_end", "stop", "combi"];
        if (!in_array($this->container['activity_type_name'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'activity_type_name', must be one of 'pickup', 'dropoff', 'route_start', 'route_end', 'stop', 'combi'.";
        }

        if ($this->container['activity_type_id'] === null) {
            $invalid_properties[] = "'activity_type_id' can't be null";
        }
        $allowed_values = ["activity_new", "activity_accepted", "activity_planned", "activity_in_progress", "activity_executed", "activity_cancelled", "activity_awaiting"];
        if (!in_array($this->container['status_name'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status_name', must be one of 'activity_new', 'activity_accepted', 'activity_planned', 'activity_in_progress', 'activity_executed', 'activity_cancelled', 'activity_awaiting'.";
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
        $allowed_values = ["pickup", "dropoff", "route_start", "route_end", "stop", "combi"];
        if (!in_array($this->container['activity_type_name'], $allowed_values)) {
            return false;
        }
        if ($this->container['activity_type_id'] === null) {
            return false;
        }
        $allowed_values = ["activity_new", "activity_accepted", "activity_planned", "activity_in_progress", "activity_executed", "activity_cancelled", "activity_awaiting"];
        if (!in_array($this->container['status_name'], $allowed_values)) {
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
     * Gets nr
     * @return string
     */
    public function getNr()
    {
        return $this->container['nr'];
    }

    /**
     * Sets nr
     * @param string $nr Number of this Activity
     * @return $this
     */
    public function setNr($nr)
    {
        $this->container['nr'] = $nr;

        return $this;
    }

    /**
     * Gets activity_type_name
     * @return string
     */
    public function getActivityTypeName()
    {
        return $this->container['activity_type_name'];
    }

    /**
     * Sets activity_type_name
     * @param string $activity_type_name Type of this Activity
     * @return $this
     */
    public function setActivityTypeName($activity_type_name)
    {
        $allowed_values = array('pickup', 'dropoff', 'route_start', 'route_end', 'stop', 'combi');
        if (!is_null($activity_type_name) && (!in_array($activity_type_name, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'activity_type_name', must be one of 'pickup', 'dropoff', 'route_start', 'route_end', 'stop', 'combi'");
        }
        $this->container['activity_type_name'] = $activity_type_name;

        return $this;
    }

    /**
     * Gets activity_type_id
     * @return int
     */
    public function getActivityTypeId()
    {
        return $this->container['activity_type_id'];
    }

    /**
     * Sets activity_type_id
     * @param int $activity_type_id TypeID of this Activity
     * @return $this
     */
    public function setActivityTypeId($activity_type_id)
    {
        $this->container['activity_type_id'] = $activity_type_id;

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
     * @param int $status_id StatusId of this Activity, 28: activity_cancelled, 20: activity_incomplete, 21: activity_new, 39: activity_awaiting, 22: activity_accepted, 3: activity_planned, 4: activity_in_progress, 9: activity_executed
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets status_name
     * @return string
     */
    public function getStatusName()
    {
        return $this->container['status_name'];
    }

    /**
     * Sets status_name
     * @param string $status_name Activity Status
     * @return $this
     */
    public function setStatusName($status_name)
    {
        $allowed_values = array('activity_new', 'activity_accepted', 'activity_planned', 'activity_in_progress', 'activity_executed', 'activity_cancelled', 'activity_awaiting');
        if (!is_null($status_name) && (!in_array($status_name, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status_name', must be one of 'activity_new', 'activity_accepted', 'activity_planned', 'activity_in_progress', 'activity_executed', 'activity_cancelled', 'activity_awaiting'");
        }
        $this->container['status_name'] = $status_name;

        return $this;
    }

    /**
     * Gets instructions
     * @return \BumbalClient\Model\InstructionModel[]
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     * @param \BumbalClient\Model\InstructionModel[] $instructions 
     * @return $this
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

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
     * @param string $remarks Remarks about this activity
     * @return $this
     */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets locked
     * @return bool
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     * @param bool $locked Activity locked on a Route
     * @return $this
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets top_priority
     * @return bool
     */
    public function getTopPriority()
    {
        return $this->container['top_priority'];
    }

    /**
     * Sets top_priority
     * @param bool $top_priority Activity has top priority
     * @return $this
     */
    public function setTopPriority($top_priority)
    {
        $this->container['top_priority'] = $top_priority;

        return $this;
    }

    /**
     * Gets sequence_nr
     * @return int
     */
    public function getSequenceNr()
    {
        return $this->container['sequence_nr'];
    }

    /**
     * Sets sequence_nr
     * @param int $sequence_nr Sequence number on Route
     * @return $this
     */
    public function setSequenceNr($sequence_nr)
    {
        $this->container['sequence_nr'] = $sequence_nr;

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
     * @param string $reference Reference of this activity
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
     * @param string $description description of this activity
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param \DateTime $date_time_from Earliest date-time
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
     * @param \DateTime $date_time_to latest date-time
     * @return $this
     */
    public function setDateTimeTo($date_time_to)
    {
        $this->container['date_time_to'] = $date_time_to;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration Duration of this activity in minutes
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets route_id
     * @return string
     */
    public function getRouteId()
    {
        return $this->container['route_id'];
    }

    /**
     * Sets route_id
     * @param string $route_id Route ID (unique)
     * @return $this
     */
    public function setRouteId($route_id)
    {
        $this->container['route_id'] = $route_id;

        return $this;
    }

    /**
     * Gets route_nr
     * @return string
     */
    public function getRouteNr()
    {
        return $this->container['route_nr'];
    }

    /**
     * Sets route_nr
     * @param string $route_nr Route Number (not unique)
     * @return $this
     */
    public function setRouteNr($route_nr)
    {
        $this->container['route_nr'] = $route_nr;

        return $this;
    }

    /**
     * Gets route_name
     * @return string
     */
    public function getRouteName()
    {
        return $this->container['route_name'];
    }

    /**
     * Sets route_name
     * @param string $route_name Route name
     * @return $this
     */
    public function setRouteName($route_name)
    {
        $this->container['route_name'] = $route_name;

        return $this;
    }

    /**
     * Gets route_date_time_from
     * @return \DateTime
     */
    public function getRouteDateTimeFrom()
    {
        return $this->container['route_date_time_from'];
    }

    /**
     * Sets route_date_time_from
     * @param \DateTime $route_date_time_from Start date-time of route
     * @return $this
     */
    public function setRouteDateTimeFrom($route_date_time_from)
    {
        $this->container['route_date_time_from'] = $route_date_time_from;

        return $this;
    }

    /**
     * Gets route_date_time_to
     * @return \DateTime
     */
    public function getRouteDateTimeTo()
    {
        return $this->container['route_date_time_to'];
    }

    /**
     * Sets route_date_time_to
     * @param \DateTime $route_date_time_to End date-time of route
     * @return $this
     */
    public function setRouteDateTimeTo($route_date_time_to)
    {
        $this->container['route_date_time_to'] = $route_date_time_to;

        return $this;
    }

    /**
     * Gets route_earliest_date_time
     * @return \DateTime
     */
    public function getRouteEarliestDateTime()
    {
        return $this->container['route_earliest_date_time'];
    }

    /**
     * Sets route_earliest_date_time
     * @param \DateTime $route_earliest_date_time Earliest date-time of route
     * @return $this
     */
    public function setRouteEarliestDateTime($route_earliest_date_time)
    {
        $this->container['route_earliest_date_time'] = $route_earliest_date_time;

        return $this;
    }

    /**
     * Gets route_latest_date_time
     * @return \DateTime
     */
    public function getRouteLatestDateTime()
    {
        return $this->container['route_latest_date_time'];
    }

    /**
     * Sets route_latest_date_time
     * @param \DateTime $route_latest_date_time Latest date-time of route
     * @return $this
     */
    public function setRouteLatestDateTime($route_latest_date_time)
    {
        $this->container['route_latest_date_time'] = $route_latest_date_time;

        return $this;
    }

    /**
     * Gets route_status_id
     * @return int
     */
    public function getRouteStatusId()
    {
        return $this->container['route_status_id'];
    }

    /**
     * Sets route_status_id
     * @param int $route_status_id Status ID of this Route
     * @return $this
     */
    public function setRouteStatusId($route_status_id)
    {
        $this->container['route_status_id'] = $route_status_id;

        return $this;
    }

    /**
     * Gets route_status_name
     * @return int
     */
    public function getRouteStatusName()
    {
        return $this->container['route_status_name'];
    }

    /**
     * Sets route_status_name
     * @param int $route_status_name Status Name of this Route
     * @return $this
     */
    public function setRouteStatusName($route_status_name)
    {
        $this->container['route_status_name'] = $route_status_name;

        return $this;
    }

    /**
     * Gets route_nr_of_stops
     * @return int
     */
    public function getRouteNrOfStops()
    {
        return $this->container['route_nr_of_stops'];
    }

    /**
     * Sets route_nr_of_stops
     * @param int $route_nr_of_stops Number of stops on this route
     * @return $this
     */
    public function setRouteNrOfStops($route_nr_of_stops)
    {
        $this->container['route_nr_of_stops'] = $route_nr_of_stops;

        return $this;
    }

    /**
     * Gets route_overdue
     * @return bool
     */
    public function getRouteOverdue()
    {
        return $this->container['route_overdue'];
    }

    /**
     * Sets route_overdue
     * @param bool $route_overdue Route is overdue
     * @return $this
     */
    public function setRouteOverdue($route_overdue)
    {
        $this->container['route_overdue'] = $route_overdue;

        return $this;
    }

    /**
     * Gets driver_id
     * @return int
     */
    public function getDriverId()
    {
        return $this->container['driver_id'];
    }

    /**
     * Sets driver_id
     * @param int $driver_id Driver ID connected to this route/activity
     * @return $this
     */
    public function setDriverId($driver_id)
    {
        $this->container['driver_id'] = $driver_id;

        return $this;
    }

    /**
     * Gets driver_first_name
     * @return string
     */
    public function getDriverFirstName()
    {
        return $this->container['driver_first_name'];
    }

    /**
     * Sets driver_first_name
     * @param string $driver_first_name Driver first name
     * @return $this
     */
    public function setDriverFirstName($driver_first_name)
    {
        $this->container['driver_first_name'] = $driver_first_name;

        return $this;
    }

    /**
     * Gets driver_last_name
     * @return string
     */
    public function getDriverLastName()
    {
        return $this->container['driver_last_name'];
    }

    /**
     * Sets driver_last_name
     * @param string $driver_last_name Driver last name
     * @return $this
     */
    public function setDriverLastName($driver_last_name)
    {
        $this->container['driver_last_name'] = $driver_last_name;

        return $this;
    }

    /**
     * Gets driver_name_prefix
     * @return string
     */
    public function getDriverNamePrefix()
    {
        return $this->container['driver_name_prefix'];
    }

    /**
     * Sets driver_name_prefix
     * @param string $driver_name_prefix Driver prefix
     * @return $this
     */
    public function setDriverNamePrefix($driver_name_prefix)
    {
        $this->container['driver_name_prefix'] = $driver_name_prefix;

        return $this;
    }

    /**
     * Gets driver_full_name
     * @return string
     */
    public function getDriverFullName()
    {
        return $this->container['driver_full_name'];
    }

    /**
     * Sets driver_full_name
     * @param string $driver_full_name Driver full name
     * @return $this
     */
    public function setDriverFullName($driver_full_name)
    {
        $this->container['driver_full_name'] = $driver_full_name;

        return $this;
    }

    /**
     * Gets driver_email
     * @return string
     */
    public function getDriverEmail()
    {
        return $this->container['driver_email'];
    }

    /**
     * Sets driver_email
     * @param string $driver_email Driver email
     * @return $this
     */
    public function setDriverEmail($driver_email)
    {
        $this->container['driver_email'] = $driver_email;

        return $this;
    }

    /**
     * Gets address
     * @return \BumbalClient\Model\AddressModel
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \BumbalClient\Model\AddressModel $address 
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets tags
     * @return \BumbalClient\Model\TagModel[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param \BumbalClient\Model\TagModel[] $tags 
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets package_lines
     * @return \BumbalClient\Model\PackageLineModel[]
     */
    public function getPackageLines()
    {
        return $this->container['package_lines'];
    }

    /**
     * Sets package_lines
     * @param \BumbalClient\Model\PackageLineModel[] $package_lines 
     * @return $this
     */
    public function setPackageLines($package_lines)
    {
        $this->container['package_lines'] = $package_lines;

        return $this;
    }

    /**
     * Gets time_slots
     * @return \BumbalClient\Model\TimeSlotModel[]
     */
    public function getTimeSlots()
    {
        return $this->container['time_slots'];
    }

    /**
     * Sets time_slots
     * @param \BumbalClient\Model\TimeSlotModel[] $time_slots 
     * @return $this
     */
    public function setTimeSlots($time_slots)
    {
        $this->container['time_slots'] = $time_slots;

        return $this;
    }

    /**
     * Gets links
     * @return \BumbalClient\Model\LinkModel[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \BumbalClient\Model\LinkModel[] $links 
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets communication
     * @return \BumbalClient\Model\CommunicationModel
     */
    public function getCommunication()
    {
        return $this->container['communication'];
    }

    /**
     * Sets communication
     * @param \BumbalClient\Model\CommunicationModel $communication 
     * @return $this
     */
    public function setCommunication($communication)
    {
        $this->container['communication'] = $communication;

        return $this;
    }

    /**
     * Gets meta_data
     * @return object
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     * @param object $meta_data 
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets meta_data_objects
     * @return \BumbalClient\Model\MetaDataModel[]
     */
    public function getMetaDataObjects()
    {
        return $this->container['meta_data_objects'];
    }

    /**
     * Sets meta_data_objects
     * @param \BumbalClient\Model\MetaDataModel[] $meta_data_objects 
     * @return $this
     */
    public function setMetaDataObjects($meta_data_objects)
    {
        $this->container['meta_data_objects'] = $meta_data_objects;

        return $this;
    }

    /**
     * Gets files
     * @return \BumbalClient\Model\FileModel[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     * @param \BumbalClient\Model\FileModel[] $files 
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

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
