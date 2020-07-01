<?php
/**
 * WebsiteContact
 *
 * PHP version 5
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */

/**
 * 获取应用推送事件订阅状态
 *
 * 通过access_token查询该应用事件订阅状态
 *
 * OpenAPI spec version: 1.0.0
 * 
 */

namespace Douyin\Open\Model;

use \ArrayAccess;
use \Douyin\Open\ObjectSerializer;

/**
 * WebsiteContact Class Doc Comment
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */
class WebsiteContact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'website_contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'event' => 'string',
'from_user_id' => 'string',
'to_user_id' => 'string',
'client_key' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'event' => null,
'from_user_id' => null,
'to_user_id' => null,
'client_key' => null    ];

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
        'event' => 'event',
'from_user_id' => 'from_user_id',
'to_user_id' => 'to_user_id',
'client_key' => 'client_key'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event' => 'setEvent',
'from_user_id' => 'setFromUserId',
'to_user_id' => 'setToUserId',
'client_key' => 'setClientKey'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event' => 'getEvent',
'from_user_id' => 'getFromUserId',
'to_user_id' => 'getToUserId',
'client_key' => 'getClientKey'    ];

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
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['from_user_id'] = isset($data['from_user_id']) ? $data['from_user_id'] : null;
        $this->container['to_user_id'] = isset($data['to_user_id']) ? $data['to_user_id'] : null;
        $this->container['client_key'] = isset($data['client_key']) ? $data['client_key'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets event
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string $event 事件名为website_contact
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets from_user_id
     *
     * @return string
     */
    public function getFromUserId()
    {
        return $this->container['from_user_id'];
    }

    /**
     * Sets from_user_id
     *
     * @param string $from_user_id 事件发起用户user_id
     *
     * @return $this
     */
    public function setFromUserId($from_user_id)
    {
        $this->container['from_user_id'] = $from_user_id;

        return $this;
    }

    /**
     * Gets to_user_id
     *
     * @return string
     */
    public function getToUserId()
    {
        return $this->container['to_user_id'];
    }

    /**
     * Sets to_user_id
     *
     * @param string $to_user_id 事件接收用户user_id
     *
     * @return $this
     */
    public function setToUserId($to_user_id)
    {
        $this->container['to_user_id'] = $to_user_id;

        return $this;
    }

    /**
     * Gets client_key
     *
     * @return string
     */
    public function getClientKey()
    {
        return $this->container['client_key'];
    }

    /**
     * Sets client_key
     *
     * @param string $client_key 使用应用的client_key
     *
     * @return $this
     */
    public function setClientKey($client_key)
    {
        $this->container['client_key'] = $client_key;

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
