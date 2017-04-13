<?php
/**
 * CommunicationModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bumbal\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Client API
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

namespace Bumbal\Client\Model;

use \ArrayAccess;

/**
 * CommunicationModel Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Bumbal\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CommunicationModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CommunicationModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'saywhen' => 'bool',
        'send_invite' => 'bool',
        'send_eta' => 'bool',
        'email' => 'string',
        'phone_nr' => 'string'
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
        'saywhen' => 'saywhen',
        'send_invite' => 'send_invite',
        'send_eta' => 'send_eta',
        'email' => 'email',
        'phone_nr' => 'phone_nr'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'saywhen' => 'setSaywhen',
        'send_invite' => 'setSendInvite',
        'send_eta' => 'setSendEta',
        'email' => 'setEmail',
        'phone_nr' => 'setPhoneNr'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'saywhen' => 'getSaywhen',
        'send_invite' => 'getSendInvite',
        'send_eta' => 'getSendEta',
        'email' => 'getEmail',
        'phone_nr' => 'getPhoneNr'
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
        $this->container['saywhen'] = isset($data['saywhen']) ? $data['saywhen'] : null;
        $this->container['send_invite'] = isset($data['send_invite']) ? $data['send_invite'] : null;
        $this->container['send_eta'] = isset($data['send_eta']) ? $data['send_eta'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone_nr'] = isset($data['phone_nr']) ? $data['phone_nr'] : null;
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
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets saywhen
     * @return bool
     */
    public function getSaywhen()
    {
        return $this->container['saywhen'];
    }

    /**
     * Sets saywhen
     * @param bool $saywhen Make use of SayWhen
     * @return $this
     */
    public function setSaywhen($saywhen)
    {
        $this->container['saywhen'] = $saywhen;

        return $this;
    }

    /**
     * Gets send_invite
     * @return bool
     */
    public function getSendInvite()
    {
        return $this->container['send_invite'];
    }

    /**
     * Sets send_invite
     * @param bool $send_invite Send an invitation to make an appointment
     * @return $this
     */
    public function setSendInvite($send_invite)
    {
        $this->container['send_invite'] = $send_invite;

        return $this;
    }

    /**
     * Gets send_eta
     * @return bool
     */
    public function getSendEta()
    {
        return $this->container['send_eta'];
    }

    /**
     * Sets send_eta
     * @param bool $send_eta Send ETA messages
     * @return $this
     */
    public function setSendEta($send_eta)
    {
        $this->container['send_eta'] = $send_eta;

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
     * @param string $email The email address to which to communicate
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone_nr
     * @return string
     */
    public function getPhoneNr()
    {
        return $this->container['phone_nr'];
    }

    /**
     * Sets phone_nr
     * @param string $phone_nr The phone number to which to communicate
     * @return $this
     */
    public function setPhoneNr($phone_nr)
    {
        $this->container['phone_nr'] = $phone_nr;

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
            return json_encode(\Bumbal\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Bumbal\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
