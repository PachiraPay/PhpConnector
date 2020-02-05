<?php
/**
 * StoredPaymentMethod
 *
 * PHP version 5
 *
 * @category Class
 * @package  pachirapay
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

namespace pachirapay\Model;

use \ArrayAccess;
use \pachirapay\ObjectSerializer;

/**
 * StoredPaymentMethod Class Doc Comment
 *
 * @category Class
 * @package  pachirapay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StoredPaymentMethod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StoredPaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'last_transaction_date' => '\DateTime',
        'payment_method_expiration_date' => '\DateTime',
        'holder_birth_date' => '\DateTime',
        'method_subtype' => 'string',
        'method_type' => 'string',
        'customer_ref' => 'string',
        'payment_method_ref' => 'string',
        'stored_payment_method_id' => 'string',
        'truncated_payment_method_number' => 'string',
        'label' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'last_transaction_date' => 'date-time',
        'payment_method_expiration_date' => 'date-time',
        'holder_birth_date' => 'date-time',
        'method_subtype' => null,
        'method_type' => null,
        'customer_ref' => null,
        'payment_method_ref' => null,
        'stored_payment_method_id' => null,
        'truncated_payment_method_number' => null,
        'label' => null
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
        'last_transaction_date' => 'lastTransactionDate',
        'payment_method_expiration_date' => 'paymentMethodExpirationDate',
        'holder_birth_date' => 'holderBirthDate',
        'method_subtype' => 'methodSubtype',
        'method_type' => 'methodType',
        'customer_ref' => 'customerRef',
        'payment_method_ref' => 'paymentMethodRef',
        'stored_payment_method_id' => 'storedPaymentMethodId',
        'truncated_payment_method_number' => 'truncatedPaymentMethodNumber',
        'label' => 'Label'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'last_transaction_date' => 'setLastTransactionDate',
        'payment_method_expiration_date' => 'setPaymentMethodExpirationDate',
        'holder_birth_date' => 'setHolderBirthDate',
        'method_subtype' => 'setMethodSubtype',
        'method_type' => 'setMethodType',
        'customer_ref' => 'setCustomerRef',
        'payment_method_ref' => 'setPaymentMethodRef',
        'stored_payment_method_id' => 'setStoredPaymentMethodId',
        'truncated_payment_method_number' => 'setTruncatedPaymentMethodNumber',
        'label' => 'setLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'last_transaction_date' => 'getLastTransactionDate',
        'payment_method_expiration_date' => 'getPaymentMethodExpirationDate',
        'holder_birth_date' => 'getHolderBirthDate',
        'method_subtype' => 'getMethodSubtype',
        'method_type' => 'getMethodType',
        'customer_ref' => 'getCustomerRef',
        'payment_method_ref' => 'getPaymentMethodRef',
        'stored_payment_method_id' => 'getStoredPaymentMethodId',
        'truncated_payment_method_number' => 'getTruncatedPaymentMethodNumber',
        'label' => 'getLabel'
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
        $this->container['last_transaction_date'] = isset($data['last_transaction_date']) ? $data['last_transaction_date'] : null;
        $this->container['payment_method_expiration_date'] = isset($data['payment_method_expiration_date']) ? $data['payment_method_expiration_date'] : null;
        $this->container['holder_birth_date'] = isset($data['holder_birth_date']) ? $data['holder_birth_date'] : null;
        $this->container['method_subtype'] = isset($data['method_subtype']) ? $data['method_subtype'] : null;
        $this->container['method_type'] = isset($data['method_type']) ? $data['method_type'] : null;
        $this->container['customer_ref'] = isset($data['customer_ref']) ? $data['customer_ref'] : null;
        $this->container['payment_method_ref'] = isset($data['payment_method_ref']) ? $data['payment_method_ref'] : null;
        $this->container['stored_payment_method_id'] = isset($data['stored_payment_method_id']) ? $data['stored_payment_method_id'] : null;
        $this->container['truncated_payment_method_number'] = isset($data['truncated_payment_method_number']) ? $data['truncated_payment_method_number'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
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
     * Gets last_transaction_date
     *
     * @return \DateTime|null
     */
    public function getLastTransactionDate()
    {
        return $this->container['last_transaction_date'];
    }

    /**
     * Sets last_transaction_date
     *
     * @param \DateTime|null $last_transaction_date The last transaction date associated
     *
     * @return $this
     */
    public function setLastTransactionDate($last_transaction_date)
    {
        $this->container['last_transaction_date'] = $last_transaction_date;

        return $this;
    }

    /**
     * Gets payment_method_expiration_date
     *
     * @return \DateTime|null
     */
    public function getPaymentMethodExpirationDate()
    {
        return $this->container['payment_method_expiration_date'];
    }

    /**
     * Sets payment_method_expiration_date
     *
     * @param \DateTime|null $payment_method_expiration_date The expiration date
     *
     * @return $this
     */
    public function setPaymentMethodExpirationDate($payment_method_expiration_date)
    {
        $this->container['payment_method_expiration_date'] = $payment_method_expiration_date;

        return $this;
    }

    /**
     * Gets holder_birth_date
     *
     * @return \DateTime|null
     */
    public function getHolderBirthDate()
    {
        return $this->container['holder_birth_date'];
    }

    /**
     * Sets holder_birth_date
     *
     * @param \DateTime|null $holder_birth_date The holder birth date
     *
     * @return $this
     */
    public function setHolderBirthDate($holder_birth_date)
    {
        $this->container['holder_birth_date'] = $holder_birth_date;

        return $this;
    }

    /**
     * Gets method_subtype
     *
     * @return string|null
     */
    public function getMethodSubtype()
    {
        return $this->container['method_subtype'];
    }

    /**
     * Sets method_subtype
     *
     * @param string|null $method_subtype The payment method subtype
     *
     * @return $this
     */
    public function setMethodSubtype($method_subtype)
    {
        $this->container['method_subtype'] = $method_subtype;

        return $this;
    }

    /**
     * Gets method_type
     *
     * @return string|null
     */
    public function getMethodType()
    {
        return $this->container['method_type'];
    }

    /**
     * Sets method_type
     *
     * @param string|null $method_type The payment method type
     *
     * @return $this
     */
    public function setMethodType($method_type)
    {
        $this->container['method_type'] = $method_type;

        return $this;
    }

    /**
     * Gets customer_ref
     *
     * @return string|null
     */
    public function getCustomerRef()
    {
        return $this->container['customer_ref'];
    }

    /**
     * Sets customer_ref
     *
     * @param string|null $customer_ref The customer ref
     *
     * @return $this
     */
    public function setCustomerRef($customer_ref)
    {
        $this->container['customer_ref'] = $customer_ref;

        return $this;
    }

    /**
     * Gets payment_method_ref
     *
     * @return string|null
     */
    public function getPaymentMethodRef()
    {
        return $this->container['payment_method_ref'];
    }

    /**
     * Sets payment_method_ref
     *
     * @param string|null $payment_method_ref The payment method ref
     *
     * @return $this
     */
    public function setPaymentMethodRef($payment_method_ref)
    {
        $this->container['payment_method_ref'] = $payment_method_ref;

        return $this;
    }

    /**
     * Gets stored_payment_method_id
     *
     * @return string|null
     */
    public function getStoredPaymentMethodId()
    {
        return $this->container['stored_payment_method_id'];
    }

    /**
     * Sets stored_payment_method_id
     *
     * @param string|null $stored_payment_method_id The stored payment method identifier
     *
     * @return $this
     */
    public function setStoredPaymentMethodId($stored_payment_method_id)
    {
        $this->container['stored_payment_method_id'] = $stored_payment_method_id;

        return $this;
    }

    /**
     * Gets truncated_payment_method_number
     *
     * @return string|null
     */
    public function getTruncatedPaymentMethodNumber()
    {
        return $this->container['truncated_payment_method_number'];
    }

    /**
     * Sets truncated_payment_method_number
     *
     * @param string|null $truncated_payment_method_number The truncated payment method number
     *
     * @return $this
     */
    public function setTruncatedPaymentMethodNumber($truncated_payment_method_number)
    {
        $this->container['truncated_payment_method_number'] = $truncated_payment_method_number;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label The Label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

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

