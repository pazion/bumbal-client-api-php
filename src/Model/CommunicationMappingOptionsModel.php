<?php
/**
 * CommunicationMappingOptionsModel
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
 * CommunicationMappingOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CommunicationMappingOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CommunicationMappingOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_meta_data' => 'bool',
        'include_templates' => 'bool',
        'include_record_info' => 'bool',
        'include_communication_delivery_method_name' => 'bool',
        'include_communication_message_type_name' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_meta_data' => null,
        'include_templates' => null,
        'include_record_info' => null,
        'include_communication_delivery_method_name' => null,
        'include_communication_message_type_name' => null
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
        'include_meta_data' => 'include_meta_data',
        'include_templates' => 'include_templates',
        'include_record_info' => 'include_record_info',
        'include_communication_delivery_method_name' => 'include_communication_delivery_method_name',
        'include_communication_message_type_name' => 'include_communication_message_type_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_meta_data' => 'setIncludeMetaData',
        'include_templates' => 'setIncludeTemplates',
        'include_record_info' => 'setIncludeRecordInfo',
        'include_communication_delivery_method_name' => 'setIncludeCommunicationDeliveryMethodName',
        'include_communication_message_type_name' => 'setIncludeCommunicationMessageTypeName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_meta_data' => 'getIncludeMetaData',
        'include_templates' => 'getIncludeTemplates',
        'include_record_info' => 'getIncludeRecordInfo',
        'include_communication_delivery_method_name' => 'getIncludeCommunicationDeliveryMethodName',
        'include_communication_message_type_name' => 'getIncludeCommunicationMessageTypeName'
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
        $this->container['include_meta_data'] = isset($data['include_meta_data']) ? $data['include_meta_data'] : null;
        $this->container['include_templates'] = isset($data['include_templates']) ? $data['include_templates'] : null;
        $this->container['include_record_info'] = isset($data['include_record_info']) ? $data['include_record_info'] : null;
        $this->container['include_communication_delivery_method_name'] = isset($data['include_communication_delivery_method_name']) ? $data['include_communication_delivery_method_name'] : null;
        $this->container['include_communication_message_type_name'] = isset($data['include_communication_message_type_name']) ? $data['include_communication_message_type_name'] : null;
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
     * Gets include_meta_data
     * @return bool
     */
    public function getIncludeMetaData()
    {
        return $this->container['include_meta_data'];
    }

    /**
     * Sets include_meta_data
     * @param bool $include_meta_data 
     * @return $this
     */
    public function setIncludeMetaData($include_meta_data)
    {
        $this->container['include_meta_data'] = $include_meta_data;

        return $this;
    }

    /**
     * Gets include_templates
     * @return bool
     */
    public function getIncludeTemplates()
    {
        return $this->container['include_templates'];
    }

    /**
     * Sets include_templates
     * @param bool $include_templates 
     * @return $this
     */
    public function setIncludeTemplates($include_templates)
    {
        $this->container['include_templates'] = $include_templates;

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
     * Gets include_communication_delivery_method_name
     * @return bool
     */
    public function getIncludeCommunicationDeliveryMethodName()
    {
        return $this->container['include_communication_delivery_method_name'];
    }

    /**
     * Sets include_communication_delivery_method_name
     * @param bool $include_communication_delivery_method_name 
     * @return $this
     */
    public function setIncludeCommunicationDeliveryMethodName($include_communication_delivery_method_name)
    {
        $this->container['include_communication_delivery_method_name'] = $include_communication_delivery_method_name;

        return $this;
    }

    /**
     * Gets include_communication_message_type_name
     * @return bool
     */
    public function getIncludeCommunicationMessageTypeName()
    {
        return $this->container['include_communication_message_type_name'];
    }

    /**
     * Sets include_communication_message_type_name
     * @param bool $include_communication_message_type_name 
     * @return $this
     */
    public function setIncludeCommunicationMessageTypeName($include_communication_message_type_name)
    {
        $this->container['include_communication_message_type_name'] = $include_communication_message_type_name;

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


