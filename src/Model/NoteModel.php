<?php
/**
 * NoteModel
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
 * NoteModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NoteModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NoteModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'object_type' => 'object',
        'object_type_name' => 'object',
        'object_id' => 'int',
        'object_link' => '\BumbalClient\Model\LinkModel',
        'note_category_id' => 'int',
        'note_category_name' => 'string',
        'visible_for_driver' => 'bool',
        'title' => 'string',
        'updated_by_name' => 'string',
        'content' => 'string',
        'links' => '\BumbalClient\Model\LinkModel[]',
        'meta_data' => '\BumbalClient\Model\MetaDataModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'object_type' => null,
        'object_type_name' => null,
        'object_id' => null,
        'object_link' => null,
        'note_category_id' => null,
        'note_category_name' => null,
        'visible_for_driver' => null,
        'title' => null,
        'updated_by_name' => null,
        'content' => null,
        'links' => null,
        'meta_data' => null
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
        'object_type' => 'object_type',
        'object_type_name' => 'object_type_name',
        'object_id' => 'object_id',
        'object_link' => 'object_link',
        'note_category_id' => 'note_category_id',
        'note_category_name' => 'note_category_name',
        'visible_for_driver' => 'visible_for_driver',
        'title' => 'title',
        'updated_by_name' => 'updated_by_name',
        'content' => 'content',
        'links' => 'links',
        'meta_data' => 'meta_data'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'object_type' => 'setObjectType',
        'object_type_name' => 'setObjectTypeName',
        'object_id' => 'setObjectId',
        'object_link' => 'setObjectLink',
        'note_category_id' => 'setNoteCategoryId',
        'note_category_name' => 'setNoteCategoryName',
        'visible_for_driver' => 'setVisibleForDriver',
        'title' => 'setTitle',
        'updated_by_name' => 'setUpdatedByName',
        'content' => 'setContent',
        'links' => 'setLinks',
        'meta_data' => 'setMetaData'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'object_type' => 'getObjectType',
        'object_type_name' => 'getObjectTypeName',
        'object_id' => 'getObjectId',
        'object_link' => 'getObjectLink',
        'note_category_id' => 'getNoteCategoryId',
        'note_category_name' => 'getNoteCategoryName',
        'visible_for_driver' => 'getVisibleForDriver',
        'title' => 'getTitle',
        'updated_by_name' => 'getUpdatedByName',
        'content' => 'getContent',
        'links' => 'getLinks',
        'meta_data' => 'getMetaData'
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
        $this->container['object_type'] = isset($data['object_type']) ? $data['object_type'] : null;
        $this->container['object_type_name'] = isset($data['object_type_name']) ? $data['object_type_name'] : null;
        $this->container['object_id'] = isset($data['object_id']) ? $data['object_id'] : null;
        $this->container['object_link'] = isset($data['object_link']) ? $data['object_link'] : null;
        $this->container['note_category_id'] = isset($data['note_category_id']) ? $data['note_category_id'] : null;
        $this->container['note_category_name'] = isset($data['note_category_name']) ? $data['note_category_name'] : null;
        $this->container['visible_for_driver'] = isset($data['visible_for_driver']) ? $data['visible_for_driver'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['updated_by_name'] = isset($data['updated_by_name']) ? $data['updated_by_name'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
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
     * @param int $id Unique Identifier
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object_type
     * @return object
     */
    public function getObjectType()
    {
        return $this->container['object_type'];
    }

    /**
     * Sets object_type
     * @param object $object_type Object type IDs available for this note
     * @return $this
     */
    public function setObjectType($object_type)
    {
        $this->container['object_type'] = $object_type;

        return $this;
    }

    /**
     * Gets object_type_name
     * @return object
     */
    public function getObjectTypeName()
    {
        return $this->container['object_type_name'];
    }

    /**
     * Sets object_type_name
     * @param object $object_type_name Object type names available for this note
     * @return $this
     */
    public function setObjectTypeName($object_type_name)
    {
        $this->container['object_type_name'] = $object_type_name;

        return $this;
    }

    /**
     * Gets object_id
     * @return int
     */
    public function getObjectId()
    {
        return $this->container['object_id'];
    }

    /**
     * Sets object_id
     * @param int $object_id Object ID
     * @return $this
     */
    public function setObjectId($object_id)
    {
        $this->container['object_id'] = $object_id;

        return $this;
    }

    /**
     * Gets object_link
     * @return \BumbalClient\Model\LinkModel
     */
    public function getObjectLink()
    {
        return $this->container['object_link'];
    }

    /**
     * Sets object_link
     * @param \BumbalClient\Model\LinkModel $object_link 
     * @return $this
     */
    public function setObjectLink($object_link)
    {
        $this->container['object_link'] = $object_link;

        return $this;
    }

    /**
     * Gets note_category_id
     * @return int
     */
    public function getNoteCategoryId()
    {
        return $this->container['note_category_id'];
    }

    /**
     * Sets note_category_id
     * @param int $note_category_id Note category id
     * @return $this
     */
    public function setNoteCategoryId($note_category_id)
    {
        $this->container['note_category_id'] = $note_category_id;

        return $this;
    }

    /**
     * Gets note_category_name
     * @return string
     */
    public function getNoteCategoryName()
    {
        return $this->container['note_category_name'];
    }

    /**
     * Sets note_category_name
     * @param string $note_category_name Note category name
     * @return $this
     */
    public function setNoteCategoryName($note_category_name)
    {
        $this->container['note_category_name'] = $note_category_name;

        return $this;
    }

    /**
     * Gets visible_for_driver
     * @return bool
     */
    public function getVisibleForDriver()
    {
        return $this->container['visible_for_driver'];
    }

    /**
     * Sets visible_for_driver
     * @param bool $visible_for_driver Notition is visible in driver App
     * @return $this
     */
    public function setVisibleForDriver($visible_for_driver)
    {
        $this->container['visible_for_driver'] = $visible_for_driver;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Note title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets updated_by_name
     * @return string
     */
    public function getUpdatedByName()
    {
        return $this->container['updated_by_name'];
    }

    /**
     * Sets updated_by_name
     * @param string $updated_by_name Note updated by user full name
     * @return $this
     */
    public function setUpdatedByName($updated_by_name)
    {
        $this->container['updated_by_name'] = $updated_by_name;

        return $this;
    }

    /**
     * Gets content
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param string $content Note content
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

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


