<?php
/**
 * RouteModel
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

namespace BumbalClient\Model;

use \ArrayAccess;

/**
 * RouteModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RouteModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RouteModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'nr' => 'string',
        'name' => 'string',
        'status_name' => 'string',
        'status_id' => 'int',
        'nr_of_stops' => 'int',
        'driver_id' => 'int',
        'driver_link' => '\BumbalClient\Model\LinkModel[]',
        'car_id' => 'int',
        'car_link' => '\BumbalClient\Model\LinkModel[]',
        'trailer_id' => 'int',
        'trailer_link' => '\BumbalClient\Model\LinkModel[]',
        'earliest_date_time' => '\DateTime',
        'latest_date_time' => '\DateTime',
        'gps_locations' => '\BumbalClient\Model\GPSLocationModel[]',
        'latest_known_position' => '\BumbalClient\Model\GPSLocationModel',
        'recurrence_id' => 'int',
        'recurrence_nr' => 'int',
        'overdue' => 'bool',
        'blocked' => 'bool',
        'start_address' => '\BumbalClient\Model\AddressModel',
        'end_address' => '\BumbalClient\Model\AddressModel',
        'activity_ids' => 'object',
        'links' => '\BumbalClient\Model\LinkModel[]',
        'meta_data' => '\BumbalClient\Model\MetaDataModel[]',
        'notes' => '\BumbalClient\Model\NoteModel[]',
        'files' => '\BumbalClient\Model\FileModel[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'nr' => null,
        'name' => null,
        'status_name' => null,
        'status_id' => 'int64',
        'nr_of_stops' => null,
        'driver_id' => null,
        'driver_link' => null,
        'car_id' => null,
        'car_link' => null,
        'trailer_id' => null,
        'trailer_link' => null,
        'earliest_date_time' => 'date-time',
        'latest_date_time' => 'date-time',
        'gps_locations' => null,
        'latest_known_position' => null,
        'recurrence_id' => null,
        'recurrence_nr' => null,
        'overdue' => null,
        'blocked' => null,
        'start_address' => null,
        'end_address' => null,
        'activity_ids' => null,
        'links' => null,
        'meta_data' => null,
        'notes' => null,
        'files' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
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
        'nr' => 'nr',
        'name' => 'name',
        'status_name' => 'status_name',
        'status_id' => 'status_id',
        'nr_of_stops' => 'nr_of_stops',
        'driver_id' => 'driver_id',
        'driver_link' => 'driver_link',
        'car_id' => 'car_id',
        'car_link' => 'car_link',
        'trailer_id' => 'trailer_id',
        'trailer_link' => 'trailer_link',
        'earliest_date_time' => 'earliest_date_time',
        'latest_date_time' => 'latest_date_time',
        'gps_locations' => 'gps_locations',
        'latest_known_position' => 'latest_known_position',
        'recurrence_id' => 'recurrence_id',
        'recurrence_nr' => 'recurrence_nr',
        'overdue' => 'overdue',
        'blocked' => 'blocked',
        'start_address' => 'start_address',
        'end_address' => 'end_address',
        'activity_ids' => 'activity_ids',
        'links' => 'links',
        'meta_data' => 'meta_data',
        'notes' => 'notes',
        'files' => 'files',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'nr' => 'setNr',
        'name' => 'setName',
        'status_name' => 'setStatusName',
        'status_id' => 'setStatusId',
        'nr_of_stops' => 'setNrOfStops',
        'driver_id' => 'setDriverId',
        'driver_link' => 'setDriverLink',
        'car_id' => 'setCarId',
        'car_link' => 'setCarLink',
        'trailer_id' => 'setTrailerId',
        'trailer_link' => 'setTrailerLink',
        'earliest_date_time' => 'setEarliestDateTime',
        'latest_date_time' => 'setLatestDateTime',
        'gps_locations' => 'setGpsLocations',
        'latest_known_position' => 'setLatestKnownPosition',
        'recurrence_id' => 'setRecurrenceId',
        'recurrence_nr' => 'setRecurrenceNr',
        'overdue' => 'setOverdue',
        'blocked' => 'setBlocked',
        'start_address' => 'setStartAddress',
        'end_address' => 'setEndAddress',
        'activity_ids' => 'setActivityIds',
        'links' => 'setLinks',
        'meta_data' => 'setMetaData',
        'notes' => 'setNotes',
        'files' => 'setFiles',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'nr' => 'getNr',
        'name' => 'getName',
        'status_name' => 'getStatusName',
        'status_id' => 'getStatusId',
        'nr_of_stops' => 'getNrOfStops',
        'driver_id' => 'getDriverId',
        'driver_link' => 'getDriverLink',
        'car_id' => 'getCarId',
        'car_link' => 'getCarLink',
        'trailer_id' => 'getTrailerId',
        'trailer_link' => 'getTrailerLink',
        'earliest_date_time' => 'getEarliestDateTime',
        'latest_date_time' => 'getLatestDateTime',
        'gps_locations' => 'getGpsLocations',
        'latest_known_position' => 'getLatestKnownPosition',
        'recurrence_id' => 'getRecurrenceId',
        'recurrence_nr' => 'getRecurrenceNr',
        'overdue' => 'getOverdue',
        'blocked' => 'getBlocked',
        'start_address' => 'getStartAddress',
        'end_address' => 'getEndAddress',
        'activity_ids' => 'getActivityIds',
        'links' => 'getLinks',
        'meta_data' => 'getMetaData',
        'notes' => 'getNotes',
        'files' => 'getFiles',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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

    const STATUS_NAME_CANCELLED = 'route_cancelled';
    const STATUS_NAME_PLANNED = 'route_planned';
    const STATUS_NAME_IN_PROGRESS = 'route_in_progress';
    const STATUS_NAME_EXECUTED = 'route_executed';
    const STATUS_ID_29 = 29;
    const STATUS_ID_1 = 1;
    const STATUS_ID_2 = 2;
    const STATUS_ID_8 = 8;
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusNameAllowableValues()
    {
        return [
            self::STATUS_NAME_CANCELLED,
            self::STATUS_NAME_PLANNED,
            self::STATUS_NAME_IN_PROGRESS,
            self::STATUS_NAME_EXECUTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusIdAllowableValues()
    {
        return [
            self::STATUS_ID_29,
            self::STATUS_ID_1,
            self::STATUS_ID_2,
            self::STATUS_ID_8,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status_name'] = isset($data['status_name']) ? $data['status_name'] : null;
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['nr_of_stops'] = isset($data['nr_of_stops']) ? $data['nr_of_stops'] : null;
        $this->container['driver_id'] = isset($data['driver_id']) ? $data['driver_id'] : null;
        $this->container['driver_link'] = isset($data['driver_link']) ? $data['driver_link'] : null;
        $this->container['car_id'] = isset($data['car_id']) ? $data['car_id'] : null;
        $this->container['car_link'] = isset($data['car_link']) ? $data['car_link'] : null;
        $this->container['trailer_id'] = isset($data['trailer_id']) ? $data['trailer_id'] : null;
        $this->container['trailer_link'] = isset($data['trailer_link']) ? $data['trailer_link'] : null;
        $this->container['earliest_date_time'] = isset($data['earliest_date_time']) ? $data['earliest_date_time'] : null;
        $this->container['latest_date_time'] = isset($data['latest_date_time']) ? $data['latest_date_time'] : null;
        $this->container['gps_locations'] = isset($data['gps_locations']) ? $data['gps_locations'] : null;
        $this->container['latest_known_position'] = isset($data['latest_known_position']) ? $data['latest_known_position'] : null;
        $this->container['recurrence_id'] = isset($data['recurrence_id']) ? $data['recurrence_id'] : null;
        $this->container['recurrence_nr'] = isset($data['recurrence_nr']) ? $data['recurrence_nr'] : null;
        $this->container['overdue'] = isset($data['overdue']) ? $data['overdue'] : null;
        $this->container['blocked'] = isset($data['blocked']) ? $data['blocked'] : null;
        $this->container['start_address'] = isset($data['start_address']) ? $data['start_address'] : null;
        $this->container['end_address'] = isset($data['end_address']) ? $data['end_address'] : null;
        $this->container['activity_ids'] = isset($data['activity_ids']) ? $data['activity_ids'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
        $allowed_values = $this->getStatusNameAllowableValues();
        if (!in_array($this->container['status_name'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status_name', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getStatusIdAllowableValues();
        if (!in_array($this->container['status_id'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status_id', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        if ($this->container['id'] === null) {
            return false;
        }
        $allowed_values = $this->getStatusNameAllowableValues();
        if (!in_array($this->container['status_name'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getStatusIdAllowableValues();
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
     * @param int $id Unique ID of Route
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
     * @param string $nr Non-Unique number of Route
     * @return $this
     */
    public function setNr($nr)
    {
        $this->container['nr'] = $nr;

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
     * @param string $name Description
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $status_name Route Status
     * @return $this
     */
    public function setStatusName($status_name)
    {
        $allowed_values = $this->getStatusNameAllowableValues();
        if (!is_null($status_name) && !in_array($status_name, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status_name', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status_name'] = $status_name;

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
     * @param int $status_id Status ID of Route, 29:route_cancelled, 1:route_planned, 2:route_in_progress, 8:route_executed
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $allowed_values = $this->getStatusIdAllowableValues();
        if (!is_null($status_id) && !in_array($status_id, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status_id', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets nr_of_stops
     * @return int
     */
    public function getNrOfStops()
    {
        return $this->container['nr_of_stops'];
    }

    /**
     * Sets nr_of_stops
     * @param int $nr_of_stops number of stops on this route (excluding start_route and end_route activities)
     * @return $this
     */
    public function setNrOfStops($nr_of_stops)
    {
        $this->container['nr_of_stops'] = $nr_of_stops;

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
     * @param int $driver_id 
     * @return $this
     */
    public function setDriverId($driver_id)
    {
        $this->container['driver_id'] = $driver_id;

        return $this;
    }

    /**
     * Gets driver_link
     * @return \BumbalClient\Model\LinkModel[]
     */
    public function getDriverLink()
    {
        return $this->container['driver_link'];
    }

    /**
     * Sets driver_link
     * @param \BumbalClient\Model\LinkModel[] $driver_link 
     * @return $this
     */
    public function setDriverLink($driver_link)
    {
        $this->container['driver_link'] = $driver_link;

        return $this;
    }

    /**
     * Gets car_id
     * @return int
     */
    public function getCarId()
    {
        return $this->container['car_id'];
    }

    /**
     * Sets car_id
     * @param int $car_id 
     * @return $this
     */
    public function setCarId($car_id)
    {
        $this->container['car_id'] = $car_id;

        return $this;
    }

    /**
     * Gets car_link
     * @return \BumbalClient\Model\LinkModel[]
     */
    public function getCarLink()
    {
        return $this->container['car_link'];
    }

    /**
     * Sets car_link
     * @param \BumbalClient\Model\LinkModel[] $car_link 
     * @return $this
     */
    public function setCarLink($car_link)
    {
        $this->container['car_link'] = $car_link;

        return $this;
    }

    /**
     * Gets trailer_id
     * @return int
     */
    public function getTrailerId()
    {
        return $this->container['trailer_id'];
    }

    /**
     * Sets trailer_id
     * @param int $trailer_id 
     * @return $this
     */
    public function setTrailerId($trailer_id)
    {
        $this->container['trailer_id'] = $trailer_id;

        return $this;
    }

    /**
     * Gets trailer_link
     * @return \BumbalClient\Model\LinkModel[]
     */
    public function getTrailerLink()
    {
        return $this->container['trailer_link'];
    }

    /**
     * Sets trailer_link
     * @param \BumbalClient\Model\LinkModel[] $trailer_link 
     * @return $this
     */
    public function setTrailerLink($trailer_link)
    {
        $this->container['trailer_link'] = $trailer_link;

        return $this;
    }

    /**
     * Gets earliest_date_time
     * @return \DateTime
     */
    public function getEarliestDateTime()
    {
        return $this->container['earliest_date_time'];
    }

    /**
     * Sets earliest_date_time
     * @param \DateTime $earliest_date_time 
     * @return $this
     */
    public function setEarliestDateTime($earliest_date_time)
    {
        $this->container['earliest_date_time'] = $earliest_date_time;

        return $this;
    }

    /**
     * Gets latest_date_time
     * @return \DateTime
     */
    public function getLatestDateTime()
    {
        return $this->container['latest_date_time'];
    }

    /**
     * Sets latest_date_time
     * @param \DateTime $latest_date_time 
     * @return $this
     */
    public function setLatestDateTime($latest_date_time)
    {
        $this->container['latest_date_time'] = $latest_date_time;

        return $this;
    }

    /**
     * Gets gps_locations
     * @return \BumbalClient\Model\GPSLocationModel[]
     */
    public function getGpsLocations()
    {
        return $this->container['gps_locations'];
    }

    /**
     * Sets gps_locations
     * @param \BumbalClient\Model\GPSLocationModel[] $gps_locations 
     * @return $this
     */
    public function setGpsLocations($gps_locations)
    {
        $this->container['gps_locations'] = $gps_locations;

        return $this;
    }

    /**
     * Gets latest_known_position
     * @return \BumbalClient\Model\GPSLocationModel
     */
    public function getLatestKnownPosition()
    {
        return $this->container['latest_known_position'];
    }

    /**
     * Sets latest_known_position
     * @param \BumbalClient\Model\GPSLocationModel $latest_known_position 
     * @return $this
     */
    public function setLatestKnownPosition($latest_known_position)
    {
        $this->container['latest_known_position'] = $latest_known_position;

        return $this;
    }

    /**
     * Gets recurrence_id
     * @return int
     */
    public function getRecurrenceId()
    {
        return $this->container['recurrence_id'];
    }

    /**
     * Sets recurrence_id
     * @param int $recurrence_id id of recurrence where route belongs to
     * @return $this
     */
    public function setRecurrenceId($recurrence_id)
    {
        $this->container['recurrence_id'] = $recurrence_id;

        return $this;
    }

    /**
     * Gets recurrence_nr
     * @return int
     */
    public function getRecurrenceNr()
    {
        return $this->container['recurrence_nr'];
    }

    /**
     * Sets recurrence_nr
     * @param int $recurrence_nr nr within recurrence where route belongs to
     * @return $this
     */
    public function setRecurrenceNr($recurrence_nr)
    {
        $this->container['recurrence_nr'] = $recurrence_nr;

        return $this;
    }

    /**
     * Gets overdue
     * @return bool
     */
    public function getOverdue()
    {
        return $this->container['overdue'];
    }

    /**
     * Sets overdue
     * @param bool $overdue whether any activity on route is overdue
     * @return $this
     */
    public function setOverdue($overdue)
    {
        $this->container['overdue'] = $overdue;

        return $this;
    }

    /**
     * Gets blocked
     * @return bool
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     * @param bool $blocked a blocked route can not be auto-filled by customer calendars
     * @return $this
     */
    public function setBlocked($blocked)
    {
        $this->container['blocked'] = $blocked;

        return $this;
    }

    /**
     * Gets start_address
     * @return \BumbalClient\Model\AddressModel
     */
    public function getStartAddress()
    {
        return $this->container['start_address'];
    }

    /**
     * Sets start_address
     * @param \BumbalClient\Model\AddressModel $start_address 
     * @return $this
     */
    public function setStartAddress($start_address)
    {
        $this->container['start_address'] = $start_address;

        return $this;
    }

    /**
     * Gets end_address
     * @return \BumbalClient\Model\AddressModel
     */
    public function getEndAddress()
    {
        return $this->container['end_address'];
    }

    /**
     * Sets end_address
     * @param \BumbalClient\Model\AddressModel $end_address 
     * @return $this
     */
    public function setEndAddress($end_address)
    {
        $this->container['end_address'] = $end_address;

        return $this;
    }

    /**
     * Gets activity_ids
     * @return object
     */
    public function getActivityIds()
    {
        return $this->container['activity_ids'];
    }

    /**
     * Sets activity_ids
     * @param object $activity_ids 
     * @return $this
     */
    public function setActivityIds($activity_ids)
    {
        $this->container['activity_ids'] = $activity_ids;

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
     * Gets notes
     * @return \BumbalClient\Model\NoteModel[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param \BumbalClient\Model\NoteModel[] $notes 
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

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


