<?php
/**
 * Card3DsAuthorizeWithAuthDataRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  CpaymentConnector
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

namespace CpaymentConnector\Model;

use \ArrayAccess;
use \CpaymentConnector\ObjectSerializer;

/**
 * Card3DsAuthorizeWithAuthDataRequest Class Doc Comment
 *
 * @category Class
 * @description Authorization / payment request with authentication data
 * @package  CpaymentConnector
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Card3DsAuthorizeWithAuthDataRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Card3DsAuthorizeWithAuthDataRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'context' => '\CpaymentConnector\Model\CardPaymentContextData',
        'options' => '\CpaymentConnector\Model\Options',
        'order' => '\CpaymentConnector\Model\Order',
        'authentication_data' => 'map[string,string]',
        'validation_mode' => '\CpaymentConnector\Model\ValidationModeOverride',
        'notification_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'context' => null,
        'options' => null,
        'order' => null,
        'authentication_data' => null,
        'validation_mode' => null,
        'notification_url' => null
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
        'context' => 'context',
        'options' => 'options',
        'order' => 'order',
        'authentication_data' => 'authenticationData',
        'validation_mode' => 'validationMode',
        'notification_url' => 'notificationUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
        'options' => 'setOptions',
        'order' => 'setOrder',
        'authentication_data' => 'setAuthenticationData',
        'validation_mode' => 'setValidationMode',
        'notification_url' => 'setNotificationUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
        'options' => 'getOptions',
        'order' => 'getOrder',
        'authentication_data' => 'getAuthenticationData',
        'validation_mode' => 'getValidationMode',
        'notification_url' => 'getNotificationUrl'
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
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['authentication_data'] = isset($data['authentication_data']) ? $data['authentication_data'] : null;
        $this->container['validation_mode'] = isset($data['validation_mode']) ? $data['validation_mode'] : null;
        $this->container['notification_url'] = isset($data['notification_url']) ? $data['notification_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['context'] === null) {
            $invalidProperties[] = "'context' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['authentication_data'] === null) {
            $invalidProperties[] = "'authentication_data' can't be null";
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
     * Gets context
     *
     * @return \CpaymentConnector\Model\CardPaymentContextData
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param \CpaymentConnector\Model\CardPaymentContextData $context context
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \CpaymentConnector\Model\Options|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \CpaymentConnector\Model\Options|null $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \CpaymentConnector\Model\Order
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \CpaymentConnector\Model\Order $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets authentication_data
     *
     * @return map[string,string]
     */
    public function getAuthenticationData()
    {
        return $this->container['authentication_data'];
    }

    /**
     * Sets authentication_data
     *
     * @param map[string,string] $authentication_data All authentication data, as a dictionary of multiple key/value pairs.
     *
     * @return $this
     */
    public function setAuthenticationData($authentication_data)
    {
        $this->container['authentication_data'] = $authentication_data;

        return $this;
    }

    /**
     * Gets validation_mode
     *
     * @return \CpaymentConnector\Model\ValidationModeOverride|null
     */
    public function getValidationMode()
    {
        return $this->container['validation_mode'];
    }

    /**
     * Sets validation_mode
     *
     * @param \CpaymentConnector\Model\ValidationModeOverride|null $validation_mode validation_mode
     *
     * @return $this
     */
    public function setValidationMode($validation_mode)
    {
        $this->container['validation_mode'] = $validation_mode;

        return $this;
    }

    /**
     * Gets notification_url
     *
     * @return string|null
     */
    public function getNotificationUrl()
    {
        return $this->container['notification_url'];
    }

    /**
     * Sets notification_url
     *
     * @param string|null $notification_url Url for the notification of the payment
     *
     * @return $this
     */
    public function setNotificationUrl($notification_url)
    {
        $this->container['notification_url'] = $notification_url;

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


