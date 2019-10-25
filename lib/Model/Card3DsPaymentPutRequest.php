<?php
/**
 * Card3DsPaymentPutRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Cpayment.Connector
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cpayment.Connector\Model;

use \ArrayAccess;
use \Cpayment.Connector\ObjectSerializer;

/**
 * Card3DsPaymentPutRequest Class Doc Comment
 *
 * @category Class
 * @description The CardPayment Request for the PUT
 * @package  Cpayment.Connector
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Card3DsPaymentPutRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Card3DsPaymentPutRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchant_id' => 'int',
        'merchant_site_id' => 'string',
        'payment_request_id' => 'string',
        'order_ref' => 'string',
        'order_tag' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'merchant_id' => 'int32',
        'merchant_site_id' => null,
        'payment_request_id' => null,
        'order_ref' => null,
        'order_tag' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'merchant_id' => 'merchantId',
        'merchant_site_id' => 'merchantSiteId',
        'payment_request_id' => 'paymentRequestId',
        'order_ref' => 'orderRef',
        'order_tag' => 'orderTag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_id' => 'setMerchantId',
        'merchant_site_id' => 'setMerchantSiteId',
        'payment_request_id' => 'setPaymentRequestId',
        'order_ref' => 'setOrderRef',
        'order_tag' => 'setOrderTag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_id' => 'getMerchantId',
        'merchant_site_id' => 'getMerchantSiteId',
        'payment_request_id' => 'getPaymentRequestId',
        'order_ref' => 'getOrderRef',
        'order_tag' => 'getOrderTag'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['merchant_site_id'] = isset($data['merchant_site_id']) ? $data['merchant_site_id'] : null;
        $this->container['payment_request_id'] = isset($data['payment_request_id']) ? $data['payment_request_id'] : null;
        $this->container['order_ref'] = isset($data['order_ref']) ? $data['order_ref'] : null;
        $this->container['order_tag'] = isset($data['order_tag']) ? $data['order_tag'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
        }
        if ($this->container['merchant_site_id'] === null) {
            $invalidProperties[] = "'merchant_site_id' can't be null";
        }
        if ($this->container['payment_request_id'] === null) {
            $invalidProperties[] = "'payment_request_id' can't be null";
        }
        if ($this->container['order_ref'] === null) {
            $invalidProperties[] = "'order_ref' can't be null";
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
     * Gets merchant_id
     *
     * @return int
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param int $merchant_id The merchant identifier
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets merchant_site_id
     *
     * @return string
     */
    public function getMerchantSiteId()
    {
        return $this->container['merchant_site_id'];
    }

    /**
     * Sets merchant_site_id
     *
     * @param string $merchant_site_id The merchant site identifier
     *
     * @return $this
     */
    public function setMerchantSiteId($merchant_site_id)
    {
        $this->container['merchant_site_id'] = $merchant_site_id;

        return $this;
    }

    /**
     * Gets payment_request_id
     *
     * @return string
     */
    public function getPaymentRequestId()
    {
        return $this->container['payment_request_id'];
    }

    /**
     * Sets payment_request_id
     *
     * @param string $payment_request_id The payment session identifier (guid), use it for 3DS payment
     *
     * @return $this
     */
    public function setPaymentRequestId($payment_request_id)
    {
        $this->container['payment_request_id'] = $payment_request_id;

        return $this;
    }

    /**
     * Gets order_ref
     *
     * @return string
     */
    public function getOrderRef()
    {
        return $this->container['order_ref'];
    }

    /**
     * Sets order_ref
     *
     * @param string $order_ref The order reference linked to the schedule and transaction
     *
     * @return $this
     */
    public function setOrderRef($order_ref)
    {
        $this->container['order_ref'] = $order_ref;

        return $this;
    }

    /**
     * Gets order_tag
     *
     * @return string|null
     */
    public function getOrderTag()
    {
        return $this->container['order_tag'];
    }

    /**
     * Sets order_tag
     *
     * @param string|null $order_tag The order tag is a label for the schedule
     *
     * @return $this
     */
    public function setOrderTag($order_tag)
    {
        $this->container['order_tag'] = $order_tag;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


