<?php
/**
 * AddressModel
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
 * AddressModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AddressModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AddressModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'address_id' => 'int',
        'party_id' => 'int',
        'code' => 'string',
        'summary' => 'string',
        'full_name' => 'string',
        'name_1' => 'string',
        'name_2' => 'string',
        'street_1' => 'string',
        'street_2' => 'string',
        'full_addressline' => 'string',
        'house_nr' => 'string',
        'house_nr_addendum' => 'string',
        'zipcode' => 'string',
        'city' => 'string',
        'state' => 'string',
        'iso_country' => 'string',
        'country_name' => 'string',
        'time_from' => 'string',
        'time_to' => 'string',
        'duration' => 'int',
        'address_type_names' => 'string[]',
        'emails' => '\BumbalClient\BumbalClient\Model\EmailModel[]',
        'phone_nrs' => '\BumbalClient\BumbalClient\Model\PhoneNrModel[]',
        'latitude' => 'string',
        'longitude' => 'string',
        'contact_person' => 'string',
        'user_id' => 'int',
        'links' => '\BumbalClient\BumbalClient\Model\LinkModel[]',
        'meta_data' => '\BumbalClient\BumbalClient\Model\MetaDataModel[]',
        'notes' => '\BumbalClient\BumbalClient\Model\NoteModel[]',
        'files' => '\BumbalClient\BumbalClient\Model\FileModel[]',
        'tag_names' => 'string[]',
        'tags' => '\BumbalClient\BumbalClient\Model\TagModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'address_id' => 'int64',
        'party_id' => null,
        'code' => null,
        'summary' => null,
        'full_name' => null,
        'name_1' => null,
        'name_2' => null,
        'street_1' => null,
        'street_2' => null,
        'full_addressline' => null,
        'house_nr' => null,
        'house_nr_addendum' => null,
        'zipcode' => null,
        'city' => null,
        'state' => null,
        'iso_country' => null,
        'country_name' => null,
        'time_from' => null,
        'time_to' => null,
        'duration' => null,
        'address_type_names' => null,
        'emails' => null,
        'phone_nrs' => null,
        'latitude' => null,
        'longitude' => null,
        'contact_person' => null,
        'user_id' => null,
        'links' => null,
        'meta_data' => null,
        'notes' => null,
        'files' => null,
        'tag_names' => null,
        'tags' => null
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
        'address_id' => 'address_id',
        'party_id' => 'party_id',
        'code' => 'code',
        'summary' => 'summary',
        'full_name' => 'full_name',
        'name_1' => 'name_1',
        'name_2' => 'name_2',
        'street_1' => 'street_1',
        'street_2' => 'street_2',
        'full_addressline' => 'full_addressline',
        'house_nr' => 'house_nr',
        'house_nr_addendum' => 'house_nr_addendum',
        'zipcode' => 'zipcode',
        'city' => 'city',
        'state' => 'state',
        'iso_country' => 'iso_country',
        'country_name' => 'country_name',
        'time_from' => 'time_from',
        'time_to' => 'time_to',
        'duration' => 'duration',
        'address_type_names' => 'address_type_names',
        'emails' => 'emails',
        'phone_nrs' => 'phone_nrs',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'contact_person' => 'contact_person',
        'user_id' => 'user_id',
        'links' => 'links',
        'meta_data' => 'meta_data',
        'notes' => 'notes',
        'files' => 'files',
        'tag_names' => 'tag_names',
        'tags' => 'tags'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'address_id' => 'setAddressId',
        'party_id' => 'setPartyId',
        'code' => 'setCode',
        'summary' => 'setSummary',
        'full_name' => 'setFullName',
        'name_1' => 'setName1',
        'name_2' => 'setName2',
        'street_1' => 'setStreet1',
        'street_2' => 'setStreet2',
        'full_addressline' => 'setFullAddressline',
        'house_nr' => 'setHouseNr',
        'house_nr_addendum' => 'setHouseNrAddendum',
        'zipcode' => 'setZipcode',
        'city' => 'setCity',
        'state' => 'setState',
        'iso_country' => 'setIsoCountry',
        'country_name' => 'setCountryName',
        'time_from' => 'setTimeFrom',
        'time_to' => 'setTimeTo',
        'duration' => 'setDuration',
        'address_type_names' => 'setAddressTypeNames',
        'emails' => 'setEmails',
        'phone_nrs' => 'setPhoneNrs',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'contact_person' => 'setContactPerson',
        'user_id' => 'setUserId',
        'links' => 'setLinks',
        'meta_data' => 'setMetaData',
        'notes' => 'setNotes',
        'files' => 'setFiles',
        'tag_names' => 'setTagNames',
        'tags' => 'setTags'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'address_id' => 'getAddressId',
        'party_id' => 'getPartyId',
        'code' => 'getCode',
        'summary' => 'getSummary',
        'full_name' => 'getFullName',
        'name_1' => 'getName1',
        'name_2' => 'getName2',
        'street_1' => 'getStreet1',
        'street_2' => 'getStreet2',
        'full_addressline' => 'getFullAddressline',
        'house_nr' => 'getHouseNr',
        'house_nr_addendum' => 'getHouseNrAddendum',
        'zipcode' => 'getZipcode',
        'city' => 'getCity',
        'state' => 'getState',
        'iso_country' => 'getIsoCountry',
        'country_name' => 'getCountryName',
        'time_from' => 'getTimeFrom',
        'time_to' => 'getTimeTo',
        'duration' => 'getDuration',
        'address_type_names' => 'getAddressTypeNames',
        'emails' => 'getEmails',
        'phone_nrs' => 'getPhoneNrs',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'contact_person' => 'getContactPerson',
        'user_id' => 'getUserId',
        'links' => 'getLinks',
        'meta_data' => 'getMetaData',
        'notes' => 'getNotes',
        'files' => 'getFiles',
        'tag_names' => 'getTagNames',
        'tags' => 'getTags'
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
        $this->container['address_id'] = isset($data['address_id']) ? $data['address_id'] : null;
        $this->container['party_id'] = isset($data['party_id']) ? $data['party_id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['name_1'] = isset($data['name_1']) ? $data['name_1'] : null;
        $this->container['name_2'] = isset($data['name_2']) ? $data['name_2'] : null;
        $this->container['street_1'] = isset($data['street_1']) ? $data['street_1'] : null;
        $this->container['street_2'] = isset($data['street_2']) ? $data['street_2'] : null;
        $this->container['full_addressline'] = isset($data['full_addressline']) ? $data['full_addressline'] : null;
        $this->container['house_nr'] = isset($data['house_nr']) ? $data['house_nr'] : null;
        $this->container['house_nr_addendum'] = isset($data['house_nr_addendum']) ? $data['house_nr_addendum'] : null;
        $this->container['zipcode'] = isset($data['zipcode']) ? $data['zipcode'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['iso_country'] = isset($data['iso_country']) ? $data['iso_country'] : null;
        $this->container['country_name'] = isset($data['country_name']) ? $data['country_name'] : null;
        $this->container['time_from'] = isset($data['time_from']) ? $data['time_from'] : null;
        $this->container['time_to'] = isset($data['time_to']) ? $data['time_to'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['address_type_names'] = isset($data['address_type_names']) ? $data['address_type_names'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['phone_nrs'] = isset($data['phone_nrs']) ? $data['phone_nrs'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['contact_person'] = isset($data['contact_person']) ? $data['contact_person'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['tag_names'] = isset($data['tag_names']) ? $data['tag_names'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
     * Gets address_id
     * @return int
     */
    public function getAddressId()
    {
        return $this->container['address_id'];
    }

    /**
     * Sets address_id
     * @param int $address_id
     * @return $this
     */
    public function setAddressId($address_id)
    {
        $this->container['address_id'] = $address_id;

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
     * @param int $party_id
     * @return $this
     */
    public function setPartyId($party_id)
    {
        $this->container['party_id'] = $party_id;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets summary
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     * @param string $summary
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

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
     * @param string $full_name
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets name_1
     * @return string
     */
    public function getName1()
    {
        return $this->container['name_1'];
    }

    /**
     * Sets name_1
     * @param string $name_1
     * @return $this
     */
    public function setName1($name_1)
    {
        $this->container['name_1'] = $name_1;

        return $this;
    }

    /**
     * Gets name_2
     * @return string
     */
    public function getName2()
    {
        return $this->container['name_2'];
    }

    /**
     * Sets name_2
     * @param string $name_2
     * @return $this
     */
    public function setName2($name_2)
    {
        $this->container['name_2'] = $name_2;

        return $this;
    }

    /**
     * Gets street_1
     * @return string
     */
    public function getStreet1()
    {
        return $this->container['street_1'];
    }

    /**
     * Sets street_1
     * @param string $street_1
     * @return $this
     */
    public function setStreet1($street_1)
    {
        $this->container['street_1'] = $street_1;

        return $this;
    }

    /**
     * Gets street_2
     * @return string
     */
    public function getStreet2()
    {
        return $this->container['street_2'];
    }

    /**
     * Sets street_2
     * @param string $street_2
     * @return $this
     */
    public function setStreet2($street_2)
    {
        $this->container['street_2'] = $street_2;

        return $this;
    }

    /**
     * Gets full_addressline
     * @return string
     */
    public function getFullAddressline()
    {
        return $this->container['full_addressline'];
    }

    /**
     * Sets full_addressline
     * @param string $full_addressline
     * @return $this
     */
    public function setFullAddressline($full_addressline)
    {
        $this->container['full_addressline'] = $full_addressline;

        return $this;
    }

    /**
     * Gets house_nr
     * @return string
     */
    public function getHouseNr()
    {
        return $this->container['house_nr'];
    }

    /**
     * Sets house_nr
     * @param string $house_nr
     * @return $this
     */
    public function setHouseNr($house_nr)
    {
        $this->container['house_nr'] = $house_nr;

        return $this;
    }

    /**
     * Gets house_nr_addendum
     * @return string
     */
    public function getHouseNrAddendum()
    {
        return $this->container['house_nr_addendum'];
    }

    /**
     * Sets house_nr_addendum
     * @param string $house_nr_addendum
     * @return $this
     */
    public function setHouseNrAddendum($house_nr_addendum)
    {
        $this->container['house_nr_addendum'] = $house_nr_addendum;

        return $this;
    }

    /**
     * Gets zipcode
     * @return string
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     * @param string $zipcode
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets iso_country
     * @return string
     */
    public function getIsoCountry()
    {
        return $this->container['iso_country'];
    }

    /**
     * Sets iso_country
     * @param string $iso_country
     * @return $this
     */
    public function setIsoCountry($iso_country)
    {
        $this->container['iso_country'] = $iso_country;

        return $this;
    }

    /**
     * Gets country_name
     * @return string
     */
    public function getCountryName()
    {
        return $this->container['country_name'];
    }

    /**
     * Sets country_name
     * @param string $country_name
     * @return $this
     */
    public function setCountryName($country_name)
    {
        $this->container['country_name'] = $country_name;

        return $this;
    }

    /**
     * Gets time_from
     * @return string
     */
    public function getTimeFrom()
    {
        return $this->container['time_from'];
    }

    /**
     * Sets time_from
     * @param string $time_from
     * @return $this
     */
    public function setTimeFrom($time_from)
    {
        $this->container['time_from'] = $time_from;

        return $this;
    }

    /**
     * Gets time_to
     * @return string
     */
    public function getTimeTo()
    {
        return $this->container['time_to'];
    }

    /**
     * Sets time_to
     * @param string $time_to
     * @return $this
     */
    public function setTimeTo($time_to)
    {
        $this->container['time_to'] = $time_to;

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
     * @param int $duration Default duration for activities on this address in minutes
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets address_type_names
     * @return string[]
     */
    public function getAddressTypeNames()
    {
        return $this->container['address_type_names'];
    }

    /**
     * Sets address_type_names
     * @param string[] $address_type_names Address Type names
     * @return $this
     */
    public function setAddressTypeNames($address_type_names)
    {
        $this->container['address_type_names'] = $address_type_names;

        return $this;
    }

    /**
     * Gets emails
     * @return \BumbalClient\BumbalClient\Model\EmailModel[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     * @param \BumbalClient\BumbalClient\Model\EmailModel[] $emails
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets phone_nrs
     * @return \BumbalClient\BumbalClient\Model\PhoneNrModel[]
     */
    public function getPhoneNrs()
    {
        return $this->container['phone_nrs'];
    }

    /**
     * Sets phone_nrs
     * @param \BumbalClient\BumbalClient\Model\PhoneNrModel[] $phone_nrs
     * @return $this
     */
    public function setPhoneNrs($phone_nrs)
    {
        $this->container['phone_nrs'] = $phone_nrs;

        return $this;
    }

    /**
     * Gets latitude
     * @return string
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     * @param string $latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     * @return string
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     * @param string $longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets contact_person
     * @return string
     */
    public function getContactPerson()
    {
        return $this->container['contact_person'];
    }

    /**
     * Sets contact_person
     * @param string $contact_person
     * @return $this
     */
    public function setContactPerson($contact_person)
    {
        $this->container['contact_person'] = $contact_person;

        return $this;
    }

    /**
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param int $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets links
     * @return \BumbalClient\BumbalClient\Model\LinkModel[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \BumbalClient\BumbalClient\Model\LinkModel[] $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets meta_data
     * @return \BumbalClient\BumbalClient\Model\MetaDataModel[]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     * @param \BumbalClient\BumbalClient\Model\MetaDataModel[] $meta_data
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets notes
     * @return \BumbalClient\BumbalClient\Model\NoteModel[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param \BumbalClient\BumbalClient\Model\NoteModel[] $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets files
     * @return \BumbalClient\BumbalClient\Model\FileModel[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     * @param \BumbalClient\BumbalClient\Model\FileModel[] $files
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

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
     * Gets tags
     * @return \BumbalClient\BumbalClient\Model\TagModel[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param \BumbalClient\BumbalClient\Model\TagModel[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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


