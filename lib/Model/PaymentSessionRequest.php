<?php
/**
 * PaymentSessionRequest
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
 * PaymentSessionRequest Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  CpaymentConnector
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentSessionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentSessionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchant_id' => 'int',
        'merchant_site_id' => 'string',
        'customer' => '\CpaymentConnector\Model\Customer',
        'order_data' => '\CpaymentConnector\Model\OrderData',
        'stored_card_data' => '\CpaymentConnector\Model\StoredCard[]',
        'allow_card_storage' => 'bool',
        'forced_card_option_ref' => 'string',
        'force_card_storage' => 'bool',
        'force_immediate_stored_card_payment' => 'bool',
        'configuration' => '\CpaymentConnector\Model\Configuration'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'merchant_id' => 'int32',
        'merchant_site_id' => null,
        'customer' => null,
        'order_data' => null,
        'stored_card_data' => null,
        'allow_card_storage' => null,
        'forced_card_option_ref' => null,
        'force_card_storage' => null,
        'force_immediate_stored_card_payment' => null,
        'configuration' => null
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
        'customer' => 'customer',
        'order_data' => 'orderData',
        'stored_card_data' => 'storedCardData',
        'allow_card_storage' => 'allowCardStorage',
        'forced_card_option_ref' => 'forcedCardOptionRef',
        'force_card_storage' => 'forceCardStorage',
        'force_immediate_stored_card_payment' => 'forceImmediateStoredCardPayment',
        'configuration' => 'configuration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_id' => 'setMerchantId',
        'merchant_site_id' => 'setMerchantSiteId',
        'customer' => 'setCustomer',
        'order_data' => 'setOrderData',
        'stored_card_data' => 'setStoredCardData',
        'allow_card_storage' => 'setAllowCardStorage',
        'forced_card_option_ref' => 'setForcedCardOptionRef',
        'force_card_storage' => 'setForceCardStorage',
        'force_immediate_stored_card_payment' => 'setForceImmediateStoredCardPayment',
        'configuration' => 'setConfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_id' => 'getMerchantId',
        'merchant_site_id' => 'getMerchantSiteId',
        'customer' => 'getCustomer',
        'order_data' => 'getOrderData',
        'stored_card_data' => 'getStoredCardData',
        'allow_card_storage' => 'getAllowCardStorage',
        'forced_card_option_ref' => 'getForcedCardOptionRef',
        'force_card_storage' => 'getForceCardStorage',
        'force_immediate_stored_card_payment' => 'getForceImmediateStoredCardPayment',
        'configuration' => 'getConfiguration'
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
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['order_data'] = isset($data['order_data']) ? $data['order_data'] : null;
        $this->container['stored_card_data'] = isset($data['stored_card_data']) ? $data['stored_card_data'] : null;
        $this->container['allow_card_storage'] = isset($data['allow_card_storage']) ? $data['allow_card_storage'] : null;
        $this->container['forced_card_option_ref'] = isset($data['forced_card_option_ref']) ? $data['forced_card_option_ref'] : null;
        $this->container['force_card_storage'] = isset($data['force_card_storage']) ? $data['force_card_storage'] : null;
        $this->container['force_immediate_stored_card_payment'] = isset($data['force_immediate_stored_card_payment']) ? $data['force_immediate_stored_card_payment'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
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
     * Gets merchant_id
     *
     * @return int|null
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param int|null $merchant_id MerchantId
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
     * @return string|null
     */
    public function getMerchantSiteId()
    {
        return $this->container['merchant_site_id'];
    }

    /**
     * Sets merchant_site_id
     *
     * @param string|null $merchant_site_id MerchantSiteId
     *
     * @return $this
     */
    public function setMerchantSiteId($merchant_site_id)
    {
        $this->container['merchant_site_id'] = $merchant_site_id;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \CpaymentConnector\Model\Customer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \CpaymentConnector\Model\Customer|null $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets order_data
     *
     * @return \CpaymentConnector\Model\OrderData|null
     */
    public function getOrderData()
    {
        return $this->container['order_data'];
    }

    /**
     * Sets order_data
     *
     * @param \CpaymentConnector\Model\OrderData|null $order_data order_data
     *
     * @return $this
     */
    public function setOrderData($order_data)
    {
        $this->container['order_data'] = $order_data;

        return $this;
    }

    /**
     * Gets stored_card_data
     *
     * @return \CpaymentConnector\Model\StoredCard[]|null
     */
    public function getStoredCardData()
    {
        return $this->container['stored_card_data'];
    }

    /**
     * Sets stored_card_data
     *
     * @param \CpaymentConnector\Model\StoredCard[]|null $stored_card_data StoredCardData
     *
     * @return $this
     */
    public function setStoredCardData($stored_card_data)
    {
        $this->container['stored_card_data'] = $stored_card_data;

        return $this;
    }

    /**
     * Gets allow_card_storage
     *
     * @return bool|null
     */
    public function getAllowCardStorage()
    {
        return $this->container['allow_card_storage'];
    }

    /**
     * Sets allow_card_storage
     *
     * @param bool|null $allow_card_storage Gets or sets a value indicating whether [allow card storage].
     *
     * @return $this
     */
    public function setAllowCardStorage($allow_card_storage)
    {
        $this->container['allow_card_storage'] = $allow_card_storage;

        return $this;
    }

    /**
     * Gets forced_card_option_ref
     *
     * @return string|null
     */
    public function getForcedCardOptionRef()
    {
        return $this->container['forced_card_option_ref'];
    }

    /**
     * Sets forced_card_option_ref
     *
     * @param string|null $forced_card_option_ref Gets or sets a value indicating whether [forced card option reference].
     *
     * @return $this
     */
    public function setForcedCardOptionRef($forced_card_option_ref)
    {
        $this->container['forced_card_option_ref'] = $forced_card_option_ref;

        return $this;
    }

    /**
     * Gets force_card_storage
     *
     * @return bool|null
     */
    public function getForceCardStorage()
    {
        return $this->container['force_card_storage'];
    }

    /**
     * Sets force_card_storage
     *
     * @param bool|null $force_card_storage Gets or sets a value indicating whether [forced card storage].
     *
     * @return $this
     */
    public function setForceCardStorage($force_card_storage)
    {
        $this->container['force_card_storage'] = $force_card_storage;

        return $this;
    }

    /**
     * Gets force_immediate_stored_card_payment
     *
     * @return bool|null
     */
    public function getForceImmediateStoredCardPayment()
    {
        return $this->container['force_immediate_stored_card_payment'];
    }

    /**
     * Sets force_immediate_stored_card_payment
     *
     * @param bool|null $force_immediate_stored_card_payment Gets or sets a value indicating whether [forced immediate stored card].
     *
     * @return $this
     */
    public function setForceImmediateStoredCardPayment($force_immediate_stored_card_payment)
    {
        $this->container['force_immediate_stored_card_payment'] = $force_immediate_stored_card_payment;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \CpaymentConnector\Model\Configuration|null
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \CpaymentConnector\Model\Configuration|null $configuration configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

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


