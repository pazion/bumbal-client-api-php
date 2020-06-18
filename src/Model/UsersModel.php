<?php
/**
 * UsersModel
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
 * UsersModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsersModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UsersModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'uuid' => 'string',
        'role_id' => 'int',
        'role_name' => 'string',
        'party_id' => 'int',
        'first_name' => 'string',
        'name_prefix' => 'string',
        'last_name' => 'string',
        'full_name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'lang_code' => 'string',
        'address_id' => 'int',
        'addresses' => '\BumbalClient\Model\AddressModel[]',
        'pause_id' => 'int',
        'removed' => 'bool',
        'active' => 'bool',
        'tags' => '\BumbalClient\Model\TagModel[]',
        'tag_names' => 'string[]',
        'zones' => '\BumbalClient\Model\ZoneModel[]',
        'zone_names' => 'string[]',
        'links' => '\BumbalClient\Model\LinkModel[]',
        'driver_unavailabilities' => '\BumbalClient\Model\DriverUnavailabilityModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'uuid' => null,
        'role_id' => 'int64',
        'role_name' => null,
        'party_id' => 'int64',
        'first_name' => null,
        'name_prefix' => null,
        'last_name' => null,
        'full_name' => null,
        'email' => null,
        'password' => null,
        'lang_code' => null,
        'address_id' => 'int64',
        'addresses' => null,
        'pause_id' => 'int64',
        'removed' => null,
        'active' => null,
        'tags' => null,
        'tag_names' => null,
        'zones' => null,
        'zone_names' => null,
        'links' => null,
        'driver_unavailabilities' => null
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
        'uuid' => 'uuid',
        'role_id' => 'role_id',
        'role_name' => 'role_name',
        'party_id' => 'party_id',
        'first_name' => 'first_name',
        'name_prefix' => 'name_prefix',
        'last_name' => 'last_name',
        'full_name' => 'full_name',
        'email' => 'email',
        'password' => 'password',
        'lang_code' => 'lang_code',
        'address_id' => 'address_id',
        'addresses' => 'addresses',
        'pause_id' => 'pause_id',
        'removed' => 'removed',
        'active' => 'active',
        'tags' => 'tags',
        'tag_names' => 'tag_names',
        'zones' => 'zones',
        'zone_names' => 'zone_names',
        'links' => 'links',
        'driver_unavailabilities' => 'driver_unavailabilities'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'uuid' => 'setUuid',
        'role_id' => 'setRoleId',
        'role_name' => 'setRoleName',
        'party_id' => 'setPartyId',
        'first_name' => 'setFirstName',
        'name_prefix' => 'setNamePrefix',
        'last_name' => 'setLastName',
        'full_name' => 'setFullName',
        'email' => 'setEmail',
        'password' => 'setPassword',
        'lang_code' => 'setLangCode',
        'address_id' => 'setAddressId',
        'addresses' => 'setAddresses',
        'pause_id' => 'setPauseId',
        'removed' => 'setRemoved',
        'active' => 'setActive',
        'tags' => 'setTags',
        'tag_names' => 'setTagNames',
        'zones' => 'setZones',
        'zone_names' => 'setZoneNames',
        'links' => 'setLinks',
        'driver_unavailabilities' => 'setDriverUnavailabilities'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'uuid' => 'getUuid',
        'role_id' => 'getRoleId',
        'role_name' => 'getRoleName',
        'party_id' => 'getPartyId',
        'first_name' => 'getFirstName',
        'name_prefix' => 'getNamePrefix',
        'last_name' => 'getLastName',
        'full_name' => 'getFullName',
        'email' => 'getEmail',
        'password' => 'getPassword',
        'lang_code' => 'getLangCode',
        'address_id' => 'getAddressId',
        'addresses' => 'getAddresses',
        'pause_id' => 'getPauseId',
        'removed' => 'getRemoved',
        'active' => 'getActive',
        'tags' => 'getTags',
        'tag_names' => 'getTagNames',
        'zones' => 'getZones',
        'zone_names' => 'getZoneNames',
        'links' => 'getLinks',
        'driver_unavailabilities' => 'getDriverUnavailabilities'
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

    const ROLE_NAME_GUEST = 'Guest';
    const ROLE_NAME_DRIVER = 'Driver';
    const ROLE_NAME_PLANNER = 'Planner';
    const ROLE_NAME_MANAGER = 'Manager';
    const ROLE_NAME_ADMIN = 'Admin';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRoleNameAllowableValues()
    {
        return [
            self::ROLE_NAME_GUEST,
            self::ROLE_NAME_DRIVER,
            self::ROLE_NAME_PLANNER,
            self::ROLE_NAME_MANAGER,
            self::ROLE_NAME_ADMIN,
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['role_id'] = isset($data['role_id']) ? $data['role_id'] : null;
        $this->container['role_name'] = isset($data['role_name']) ? $data['role_name'] : null;
        $this->container['party_id'] = isset($data['party_id']) ? $data['party_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['name_prefix'] = isset($data['name_prefix']) ? $data['name_prefix'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['lang_code'] = isset($data['lang_code']) ? $data['lang_code'] : null;
        $this->container['address_id'] = isset($data['address_id']) ? $data['address_id'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['pause_id'] = isset($data['pause_id']) ? $data['pause_id'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['tag_names'] = isset($data['tag_names']) ? $data['tag_names'] : null;
        $this->container['zones'] = isset($data['zones']) ? $data['zones'] : null;
        $this->container['zone_names'] = isset($data['zone_names']) ? $data['zone_names'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['driver_unavailabilities'] = isset($data['driver_unavailabilities']) ? $data['driver_unavailabilities'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getRoleNameAllowableValues();
        if (!in_array($this->container['role_name'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'role_name', must be one of '%s'",
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

        $allowed_values = $this->getRoleNameAllowableValues();
        if (!in_array($this->container['role_name'], $allowed_values)) {
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
     * Gets uuid
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     * @param string $uuid unique per user
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets role_id
     * @return int
     */
    public function getRoleId()
    {
        return $this->container['role_id'];
    }

    /**
     * Sets role_id
     * @param int $role_id id of the user role, 1: Guest, 2: Driver, 3: Planner, 4: Manager, 5: Admin
     * @return $this
     */
    public function setRoleId($role_id)
    {
        $this->container['role_id'] = $role_id;

        return $this;
    }

    /**
     * Gets role_name
     * @return string
     */
    public function getRoleName()
    {
        return $this->container['role_name'];
    }

    /**
     * Sets role_name
     * @param string $role_name Role name
     * @return $this
     */
    public function setRoleName($role_name)
    {
        $allowed_values = $this->getRoleNameAllowableValues();
        if (!is_null($role_name) && !in_array($role_name, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'role_name', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['role_name'] = $role_name;

        return $this;
    }

    /**
     * Gets party_id
     * @return int
     */
    public function getPartyId()
    {
        return $this->container['party_id'];
    }

    /**
     * Sets party_id
     * @param int $party_id Associated Party ID
     * @return $this
     */
    public function setPartyId($party_id)
    {
        $this->container['party_id'] = $party_id;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name First name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets name_prefix
     * @return string
     */
    public function getNamePrefix()
    {
        return $this->container['name_prefix'];
    }

    /**
     * Sets name_prefix
     * @param string $name_prefix Name prefix
     * @return $this
     */
    public function setNamePrefix($name_prefix)
    {
        $this->container['name_prefix'] = $name_prefix;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name Last name
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets full_name
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     * @param string $full_name Full name
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email user email (used for login)
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password user password (set only, no read)
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets lang_code
     * @return string
     */
    public function getLangCode()
    {
        return $this->container['lang_code'];
    }

    /**
     * Sets lang_code
     * @param string $lang_code lang code (nl = default)
     * @return $this
     */
    public function setLangCode($lang_code)
    {
        $this->container['lang_code'] = $lang_code;

        return $this;
    }

    /**
     * Gets address_id
     * @return int
     */
    public function getAddressId()
    {
        return $this->container['address_id'];
    }

    /**
     * Sets address_id
     * @param int $address_id id of the user address
     * @return $this
     */
    public function setAddressId($address_id)
    {
        $this->container['address_id'] = $address_id;

        return $this;
    }

    /**
     * Gets addresses
     * @return \BumbalClient\Model\AddressModel[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     * @param \BumbalClient\Model\AddressModel[] $addresses user address (mostly interesting for drivers)
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets pause_id
     * @return int
     */
    public function getPauseId()
    {
        return $this->container['pause_id'];
    }

    /**
     * Sets pause_id
     * @param int $pause_id id of the pause to be applied by default for new user routes
     * @return $this
     */
    public function setPauseId($pause_id)
    {
        $this->container['pause_id'] = $pause_id;

        return $this;
    }

    /**
     * Gets removed
     * @return bool
     */
    public function getRemoved()
    {
        return $this->container['removed'];
    }

    /**
     * Sets removed
     * @param bool $removed Whether user is removed or not
     * @return $this
     */
    public function setRemoved($removed)
    {
        $this->container['removed'] = $removed;

        return $this;
    }

    /**
     * Gets active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param bool $active Whether user is still active or not
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * Gets tag_names
     * @return string[]
     */
    public function getTagNames()
    {
        return $this->container['tag_names'];
    }

    /**
     * Sets tag_names
     * @param string[] $tag_names Tag names
     * @return $this
     */
    public function setTagNames($tag_names)
    {
        $this->container['tag_names'] = $tag_names;

        return $this;
    }

    /**
     * Gets zones
     * @return \BumbalClient\Model\ZoneModel[]
     */
    public function getZones()
    {
        return $this->container['zones'];
    }

    /**
     * Sets zones
     * @param \BumbalClient\Model\ZoneModel[] $zones 
     * @return $this
     */
    public function setZones($zones)
    {
        $this->container['zones'] = $zones;

        return $this;
    }

    /**
     * Gets zone_names
     * @return string[]
     */
    public function getZoneNames()
    {
        return $this->container['zone_names'];
    }

    /**
     * Sets zone_names
     * @param string[] $zone_names Zone names
     * @return $this
     */
    public function setZoneNames($zone_names)
    {
        $this->container['zone_names'] = $zone_names;

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
     * Gets driver_unavailabilities
     * @return \BumbalClient\Model\DriverUnavailabilityModel[]
     */
    public function getDriverUnavailabilities()
    {
        return $this->container['driver_unavailabilities'];
    }

    /**
     * Sets driver_unavailabilities
     * @param \BumbalClient\Model\DriverUnavailabilityModel[] $driver_unavailabilities 
     * @return $this
     */
    public function setDriverUnavailabilities($driver_unavailabilities)
    {
        $this->container['driver_unavailabilities'] = $driver_unavailabilities;

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


