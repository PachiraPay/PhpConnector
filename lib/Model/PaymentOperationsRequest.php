<?php
/**
 * PaymentOperationsRequest
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
 * PaymentOperationsRequest Class Doc Comment
 *
 * @category Class
 * @description All Payment Operation data for the request
 * @package  CpaymentConnector
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentOperationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentOperationsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchant_id' => 'int',
        'merchant_site_id' => 'string',
        'attempt' => 'int',
        'rank' => 'int',
        'amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'merchant_id' => 'int32',
        'merchant_site_id' => null,
        'attempt' => 'int32',
        'rank' => 'int32',
        'amount' => 'int64'
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
        'attempt' => 'attempt',
        'rank' => 'rank',
        'amount' => 'amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_id' => 'setMerchantId',
        'merchant_site_id' => 'setMerchantSiteId',
        'attempt' => 'setAttempt',
        'rank' => 'setRank',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_id' => 'getMerchantId',
        'merchant_site_id' => 'getMerchantSiteId',
        'attempt' => 'getAttempt',
        'rank' => 'getRank',
        'amount' => 'getAmount'
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
        $this->container['attempt'] = isset($data['attempt']) ? $data['attempt'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
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
        if ($this->container['attempt'] === null) {
            $invalidProperties[] = "'attempt' can't be null";
        }
        if ($this->container['rank'] === null) {
            $invalidProperties[] = "'rank' can't be null";
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
     * @param string $merchant_site_id The merchant site identifier.
     *
     * @return $this
     */
    public function setMerchantSiteId($merchant_site_id)
    {
        $this->container['merchant_site_id'] = $merchant_site_id;

        return $this;
    }

    /**
     * Gets attempt
     *
     * @return int
     */
    public function getAttempt()
    {
        return $this->container['attempt'];
    }

    /**
     * Sets attempt
     *
     * @param int $attempt The number of attempts (useful for CAPTURE).
     *
     * @return $this
     */
    public function setAttempt($attempt)
    {
        $this->container['attempt'] = $attempt;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int $rank The rank concerned by the operation
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount The amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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


