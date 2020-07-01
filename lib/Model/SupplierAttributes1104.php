<?php
/**
 * SupplierAttributes1104
 *
 * PHP version 5
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 */

namespace Douyin\Open\Model;

use \ArrayAccess;
use \Douyin\Open\ObjectSerializer;

/**
 * SupplierAttributes1104 Class Doc Comment
 *
 * @category Class
 * @description 酒店政策
 * @package  Douyin\Open
 * @author   抖音小开
 */
class SupplierAttributes1104 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Supplier_attributes1104';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'check_in_time' => 'string',
'check_out_time' => 'string',
'breakfast' => '\Douyin\Open\Model\SupplierAttributes1104Breakfast',
'child' => 'string',
'pet' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'check_in_time' => null,
'check_out_time' => null,
'breakfast' => null,
'child' => null,
'pet' => null    ];

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
        'check_in_time' => 'check_in_time',
'check_out_time' => 'check_out_time',
'breakfast' => 'breakfast',
'child' => 'child',
'pet' => 'pet'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'check_in_time' => 'setCheckInTime',
'check_out_time' => 'setCheckOutTime',
'breakfast' => 'setBreakfast',
'child' => 'setChild',
'pet' => 'setPet'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'check_in_time' => 'getCheckInTime',
'check_out_time' => 'getCheckOutTime',
'breakfast' => 'getBreakfast',
'child' => 'getChild',
'pet' => 'getPet'    ];

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
        $this->container['check_in_time'] = isset($data['check_in_time']) ? $data['check_in_time'] : null;
        $this->container['check_out_time'] = isset($data['check_out_time']) ? $data['check_out_time'] : null;
        $this->container['breakfast'] = isset($data['breakfast']) ? $data['breakfast'] : null;
        $this->container['child'] = isset($data['child']) ? $data['child'] : null;
        $this->container['pet'] = isset($data['pet']) ? $data['pet'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['check_in_time'] === null) {
            $invalidProperties[] = "'check_in_time' can't be null";
        }
        if ($this->container['check_out_time'] === null) {
            $invalidProperties[] = "'check_out_time' can't be null";
        }
        if ($this->container['breakfast'] === null) {
            $invalidProperties[] = "'breakfast' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets check_in_time
     *
     * @return string
     */
    public function getCheckInTime()
    {
        return $this->container['check_in_time'];
    }

    /**
     * Sets check_in_time
     *
     * @param string $check_in_time 入住时间(HH:mm)
     *
     * @return $this
     */
    public function setCheckInTime($check_in_time)
    {
        $this->container['check_in_time'] = $check_in_time;

        return $this;
    }

    /**
     * Gets check_out_time
     *
     * @return string
     */
    public function getCheckOutTime()
    {
        return $this->container['check_out_time'];
    }

    /**
     * Sets check_out_time
     *
     * @param string $check_out_time 离店时间(HH:mm)
     *
     * @return $this
     */
    public function setCheckOutTime($check_out_time)
    {
        $this->container['check_out_time'] = $check_out_time;

        return $this;
    }

    /**
     * Gets breakfast
     *
     * @return \Douyin\Open\Model\SupplierAttributes1104Breakfast
     */
    public function getBreakfast()
    {
        return $this->container['breakfast'];
    }

    /**
     * Sets breakfast
     *
     * @param \Douyin\Open\Model\SupplierAttributes1104Breakfast $breakfast breakfast
     *
     * @return $this
     */
    public function setBreakfast($breakfast)
    {
        $this->container['breakfast'] = $breakfast;

        return $this;
    }

    /**
     * Gets child
     *
     * @return string
     */
    public function getChild()
    {
        return $this->container['child'];
    }

    /**
     * Sets child
     *
     * @param string $child 儿童政策(<=500字)
     *
     * @return $this
     */
    public function setChild($child)
    {
        $this->container['child'] = $child;

        return $this;
    }

    /**
     * Gets pet
     *
     * @return string
     */
    public function getPet()
    {
        return $this->container['pet'];
    }

    /**
     * Sets pet
     *
     * @param string $pet 宠物政策(<=500字)
     *
     * @return $this
     */
    public function setPet($pet)
    {
        $this->container['pet'] = $pet;

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
