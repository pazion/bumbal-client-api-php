<?php
/**
 * NoteOptionsModel
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
 * NoteOptionsModel Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NoteOptionsModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NoteOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'include_note_tags' => 'bool',
        'include_note_tag_type_link_ids' => 'bool',
        'include_note_object_link_ids' => 'bool',
        'include_note_files' => 'bool',
        'include_updated_by' => 'bool',
        'include_record_info' => 'bool'
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
        'include_note_tags' => 'include_note_tags',
        'include_note_tag_type_link_ids' => 'include_note_tag_type_link_ids',
        'include_note_object_link_ids' => 'include_note_object_link_ids',
        'include_note_files' => 'include_note_files',
        'include_updated_by' => 'include_updated_by',
        'include_record_info' => 'include_record_info'
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
        'include_note_tags' => 'setIncludeNoteTags',
        'include_note_tag_type_link_ids' => 'setIncludeNoteTagTypeLinkIds',
        'include_note_object_link_ids' => 'setIncludeNoteObjectLinkIds',
        'include_note_files' => 'setIncludeNoteFiles',
        'include_updated_by' => 'setIncludeUpdatedBy',
        'include_record_info' => 'setIncludeRecordInfo'
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
        'include_note_tags' => 'getIncludeNoteTags',
        'include_note_tag_type_link_ids' => 'getIncludeNoteTagTypeLinkIds',
        'include_note_object_link_ids' => 'getIncludeNoteObjectLinkIds',
        'include_note_files' => 'getIncludeNoteFiles',
        'include_updated_by' => 'getIncludeUpdatedBy',
        'include_record_info' => 'getIncludeRecordInfo'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['include_note_tags'] = isset($data['include_note_tags']) ? $data['include_note_tags'] : null;
        $this->container['include_note_tag_type_link_ids'] = isset($data['include_note_tag_type_link_ids']) ? $data['include_note_tag_type_link_ids'] : null;
        $this->container['include_note_object_link_ids'] = isset($data['include_note_object_link_ids']) ? $data['include_note_object_link_ids'] : null;
        $this->container['include_note_files'] = isset($data['include_note_files']) ? $data['include_note_files'] : null;
        $this->container['include_updated_by'] = isset($data['include_updated_by']) ? $data['include_updated_by'] : null;
        $this->container['include_record_info'] = isset($data['include_record_info']) ? $data['include_record_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets include_note_tags
     * @return bool
     */
    public function getIncludeNoteTags()
    {
        return $this->container['include_note_tags'];
    }

    /**
     * Sets include_note_tags
     * @param bool $include_note_tags 
     * @return $this
     */
    public function setIncludeNoteTags($include_note_tags)
    {
        $this->container['include_note_tags'] = $include_note_tags;

        return $this;
    }

    /**
     * Gets include_note_tag_type_link_ids
     * @return bool
     */
    public function getIncludeNoteTagTypeLinkIds()
    {
        return $this->container['include_note_tag_type_link_ids'];
    }

    /**
     * Sets include_note_tag_type_link_ids
     * @param bool $include_note_tag_type_link_ids 
     * @return $this
     */
    public function setIncludeNoteTagTypeLinkIds($include_note_tag_type_link_ids)
    {
        $this->container['include_note_tag_type_link_ids'] = $include_note_tag_type_link_ids;

        return $this;
    }

    /**
     * Gets include_note_object_link_ids
     * @return bool
     */
    public function getIncludeNoteObjectLinkIds()
    {
        return $this->container['include_note_object_link_ids'];
    }

    /**
     * Sets include_note_object_link_ids
     * @param bool $include_note_object_link_ids 
     * @return $this
     */
    public function setIncludeNoteObjectLinkIds($include_note_object_link_ids)
    {
        $this->container['include_note_object_link_ids'] = $include_note_object_link_ids;

        return $this;
    }

    /**
     * Gets include_note_files
     * @return bool
     */
    public function getIncludeNoteFiles()
    {
        return $this->container['include_note_files'];
    }

    /**
     * Sets include_note_files
     * @param bool $include_note_files 
     * @return $this
     */
    public function setIncludeNoteFiles($include_note_files)
    {
        $this->container['include_note_files'] = $include_note_files;

        return $this;
    }

    /**
     * Gets include_updated_by
     * @return bool
     */
    public function getIncludeUpdatedBy()
    {
        return $this->container['include_updated_by'];
    }

    /**
     * Sets include_updated_by
     * @param bool $include_updated_by 
     * @return $this
     */
    public function setIncludeUpdatedBy($include_updated_by)
    {
        $this->container['include_updated_by'] = $include_updated_by;

        return $this;
    }

    /**
     * Gets include_record_info
     * @return bool
     */
    public function getIncludeRecordInfo()
    {
        return $this->container['include_record_info'];
    }

    /**
     * Sets include_record_info
     * @param bool $include_record_info 
     * @return $this
     */
    public function setIncludeRecordInfo($include_record_info)
    {
        $this->container['include_record_info'] = $include_record_info;

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


