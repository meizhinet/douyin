<?php
/**
 * PoiOrderSyncBody
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
 * PoiOrderSyncBody Class Doc Comment
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */
class PoiOrderSyncBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PoiOrderSyncBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mini_app' => '\Douyin\Open\Model\PoiOrderSyncResponse',
'order_type' => 'int',
'date_time' => 'int',
'order_detail' => 'string',
'ext_shop_info' => '\Douyin\Open\Model\ExtShopInfo'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mini_app' => null,
'order_type' => null,
'date_time' => null,
'order_detail' => null,
'ext_shop_info' => null    ];

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
        'mini_app' => 'mini_app',
'order_type' => 'order_type',
'date_time' => 'date_time',
'order_detail' => 'order_detail',
'ext_shop_info' => 'ext_shop_info'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mini_app' => 'setMiniApp',
'order_type' => 'setOrderType',
'date_time' => 'setDateTime',
'order_detail' => 'setOrderDetail',
'ext_shop_info' => 'setExtShopInfo'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mini_app' => 'getMiniApp',
'order_type' => 'getOrderType',
'date_time' => 'getDateTime',
'order_detail' => 'getOrderDetail',
'ext_shop_info' => 'getExtShopInfo'    ];

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

    const ORDER_TYPE_201 = 201;
const ORDER_TYPE_202 = 202;
const ORDER_TYPE_203 = 203;
const ORDER_TYPE_9001 = 9001;
const ORDER_TYPE_9101 = 9101;
const ORDER_TYPE_9201 = 9201;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderTypeAllowableValues()
    {
        return [
            self::ORDER_TYPE_201,
self::ORDER_TYPE_202,
self::ORDER_TYPE_203,
self::ORDER_TYPE_9001,
self::ORDER_TYPE_9101,
self::ORDER_TYPE_9201,        ];
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
        $this->container['mini_app'] = isset($data['mini_app']) ? $data['mini_app'] : null;
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['date_time'] = isset($data['date_time']) ? $data['date_time'] : null;
        $this->container['order_detail'] = isset($data['order_detail']) ? $data['order_detail'] : null;
        $this->container['ext_shop_info'] = isset($data['ext_shop_info']) ? $data['ext_shop_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order_type'] === null) {
            $invalidProperties[] = "'order_type' can't be null";
        }
        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!is_null($this->container['order_type']) && !in_array($this->container['order_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'order_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['date_time'] === null) {
            $invalidProperties[] = "'date_time' can't be null";
        }
        if ($this->container['order_detail'] === null) {
            $invalidProperties[] = "'order_detail' can't be null";
        }
        if ($this->container['ext_shop_info'] === null) {
            $invalidProperties[] = "'ext_shop_info' can't be null";
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
     * Gets mini_app
     *
     * @return \Douyin\Open\Model\PoiOrderSyncResponse
     */
    public function getMiniApp()
    {
        return $this->container['mini_app'];
    }

    /**
     * Sets mini_app
     *
     * @param \Douyin\Open\Model\PoiOrderSyncResponse $mini_app mini_app
     *
     * @return $this
     */
    public function setMiniApp($mini_app)
    {
        $this->container['mini_app'] = $mini_app;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return int
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param int $order_type 订单类型- 201 预约点餐订单, 202 餐厅预定订单, 203 餐厅排队订单, 9001 景区门票订单, 9101 团购券订单, 9201 在线预约订单
     *
     * @return $this
     */
    public function setOrderType($order_type)
    {
        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!in_array($order_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'order_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets date_time
     *
     * @return int
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /**
     * Sets date_time
     *
     * @param int $date_time 发送请求的时间，精确到毫秒
     *
     * @return $this
     */
    public function setDateTime($date_time)
    {
        $this->container['date_time'] = $date_time;

        return $this;
    }

    /**
     * Gets order_detail
     *
     * @return string
     */
    public function getOrderDetail()
    {
        return $this->container['order_detail'];
    }

    /**
     * Sets order_detail
     *
     * @param string $order_detail 订单的细节，不同的订单业务有不同的结构体，请具体询问业务方字段结构
     *
     * @return $this
     */
    public function setOrderDetail($order_detail)
    {
        $this->container['order_detail'] = $order_detail;

        return $this;
    }

    /**
     * Gets ext_shop_info
     *
     * @return \Douyin\Open\Model\ExtShopInfo
     */
    public function getExtShopInfo()
    {
        return $this->container['ext_shop_info'];
    }

    /**
     * Sets ext_shop_info
     *
     * @param \Douyin\Open\Model\ExtShopInfo $ext_shop_info ext_shop_info
     *
     * @return $this
     */
    public function setExtShopInfo($ext_shop_info)
    {
        $this->container['ext_shop_info'] = $ext_shop_info;

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
