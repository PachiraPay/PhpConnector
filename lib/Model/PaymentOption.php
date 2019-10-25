<?php
/**
 * PaymentOption
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
 * PaymentOption Class Doc Comment
 *
 * @category Class
 * @description All payment option data
 * @package  Cpayment.Connector
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_option_ref' => 'string',
        'name' => 'string',
        'active' => 'bool',
        'min_amount' => 'int',
        'max_amount' => 'int',
        'stored_cards_enabled' => 'bool',
        'payment_schedule_rules' => '\Cpayment.Connector\Model\PaymentScheduleRule[]',
        'payment_fees' => '\Cpayment.Connector\Model\PaymentFee[]',
        'payment_cards' => '\Cpayment.Connector\Model\PaymentCard[]',
        'loan_offers' => '\Cpayment.Connector\Model\LoanOffer[]',
        'acquiring_banks' => '\Cpayment.Connector\Model\AcquiringBank[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'payment_option_ref' => null,
        'name' => null,
        'active' => null,
        'min_amount' => 'int64',
        'max_amount' => 'int64',
        'stored_cards_enabled' => null,
        'payment_schedule_rules' => null,
        'payment_fees' => null,
        'payment_cards' => null,
        'loan_offers' => null,
        'acquiring_banks' => null
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
        'payment_option_ref' => 'paymentOptionRef',
        'name' => 'name',
        'active' => 'active',
        'min_amount' => 'minAmount',
        'max_amount' => 'maxAmount',
        'stored_cards_enabled' => 'storedCardsEnabled',
        'payment_schedule_rules' => 'paymentScheduleRules',
        'payment_fees' => 'paymentFees',
        'payment_cards' => 'paymentCards',
        'loan_offers' => 'loanOffers',
        'acquiring_banks' => 'acquiringBanks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_option_ref' => 'setPaymentOptionRef',
        'name' => 'setName',
        'active' => 'setActive',
        'min_amount' => 'setMinAmount',
        'max_amount' => 'setMaxAmount',
        'stored_cards_enabled' => 'setStoredCardsEnabled',
        'payment_schedule_rules' => 'setPaymentScheduleRules',
        'payment_fees' => 'setPaymentFees',
        'payment_cards' => 'setPaymentCards',
        'loan_offers' => 'setLoanOffers',
        'acquiring_banks' => 'setAcquiringBanks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_option_ref' => 'getPaymentOptionRef',
        'name' => 'getName',
        'active' => 'getActive',
        'min_amount' => 'getMinAmount',
        'max_amount' => 'getMaxAmount',
        'stored_cards_enabled' => 'getStoredCardsEnabled',
        'payment_schedule_rules' => 'getPaymentScheduleRules',
        'payment_fees' => 'getPaymentFees',
        'payment_cards' => 'getPaymentCards',
        'loan_offers' => 'getLoanOffers',
        'acquiring_banks' => 'getAcquiringBanks'
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
        $this->container['payment_option_ref'] = isset($data['payment_option_ref']) ? $data['payment_option_ref'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['min_amount'] = isset($data['min_amount']) ? $data['min_amount'] : null;
        $this->container['max_amount'] = isset($data['max_amount']) ? $data['max_amount'] : null;
        $this->container['stored_cards_enabled'] = isset($data['stored_cards_enabled']) ? $data['stored_cards_enabled'] : null;
        $this->container['payment_schedule_rules'] = isset($data['payment_schedule_rules']) ? $data['payment_schedule_rules'] : null;
        $this->container['payment_fees'] = isset($data['payment_fees']) ? $data['payment_fees'] : null;
        $this->container['payment_cards'] = isset($data['payment_cards']) ? $data['payment_cards'] : null;
        $this->container['loan_offers'] = isset($data['loan_offers']) ? $data['loan_offers'] : null;
        $this->container['acquiring_banks'] = isset($data['acquiring_banks']) ? $data['acquiring_banks'] : null;
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
     * Gets payment_option_ref
     *
     * @return string|null
     */
    public function getPaymentOptionRef()
    {
        return $this->container['payment_option_ref'];
    }

    /**
     * Sets payment_option_ref
     *
     * @param string|null $payment_option_ref The payment option reference
     *
     * @return $this
     */
    public function setPaymentOptionRef($payment_option_ref)
    {
        $this->container['payment_option_ref'] = $payment_option_ref;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The payment option name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Indicates if the payment option is active or not
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets min_amount
     *
     * @return int|null
     */
    public function getMinAmount()
    {
        return $this->container['min_amount'];
    }

    /**
     * Sets min_amount
     *
     * @param int|null $min_amount The minimum amount allowed
     *
     * @return $this
     */
    public function setMinAmount($min_amount)
    {
        $this->container['min_amount'] = $min_amount;

        return $this;
    }

    /**
     * Gets max_amount
     *
     * @return int|null
     */
    public function getMaxAmount()
    {
        return $this->container['max_amount'];
    }

    /**
     * Sets max_amount
     *
     * @param int|null $max_amount The maximum amount allowed
     *
     * @return $this
     */
    public function setMaxAmount($max_amount)
    {
        $this->container['max_amount'] = $max_amount;

        return $this;
    }

    /**
     * Gets stored_cards_enabled
     *
     * @return bool|null
     */
    public function getStoredCardsEnabled()
    {
        return $this->container['stored_cards_enabled'];
    }

    /**
     * Sets stored_cards_enabled
     *
     * @param bool|null $stored_cards_enabled Indicates if stored cards are enabled or not
     *
     * @return $this
     */
    public function setStoredCardsEnabled($stored_cards_enabled)
    {
        $this->container['stored_cards_enabled'] = $stored_cards_enabled;

        return $this;
    }

    /**
     * Gets payment_schedule_rules
     *
     * @return \Cpayment.Connector\Model\PaymentScheduleRule[]|null
     */
    public function getPaymentScheduleRules()
    {
        return $this->container['payment_schedule_rules'];
    }

    /**
     * Sets payment_schedule_rules
     *
     * @param \Cpayment.Connector\Model\PaymentScheduleRule[]|null $payment_schedule_rules All payment schedule rules data
     *
     * @return $this
     */
    public function setPaymentScheduleRules($payment_schedule_rules)
    {
        $this->container['payment_schedule_rules'] = $payment_schedule_rules;

        return $this;
    }

    /**
     * Gets payment_fees
     *
     * @return \Cpayment.Connector\Model\PaymentFee[]|null
     */
    public function getPaymentFees()
    {
        return $this->container['payment_fees'];
    }

    /**
     * Sets payment_fees
     *
     * @param \Cpayment.Connector\Model\PaymentFee[]|null $payment_fees All payment fees data
     *
     * @return $this
     */
    public function setPaymentFees($payment_fees)
    {
        $this->container['payment_fees'] = $payment_fees;

        return $this;
    }

    /**
     * Gets payment_cards
     *
     * @return \Cpayment.Connector\Model\PaymentCard[]|null
     */
    public function getPaymentCards()
    {
        return $this->container['payment_cards'];
    }

    /**
     * Sets payment_cards
     *
     * @param \Cpayment.Connector\Model\PaymentCard[]|null $payment_cards All payment cards data
     *
     * @return $this
     */
    public function setPaymentCards($payment_cards)
    {
        $this->container['payment_cards'] = $payment_cards;

        return $this;
    }

    /**
     * Gets loan_offers
     *
     * @return \Cpayment.Connector\Model\LoanOffer[]|null
     */
    public function getLoanOffers()
    {
        return $this->container['loan_offers'];
    }

    /**
     * Sets loan_offers
     *
     * @param \Cpayment.Connector\Model\LoanOffer[]|null $loan_offers All loan offers data
     *
     * @return $this
     */
    public function setLoanOffers($loan_offers)
    {
        $this->container['loan_offers'] = $loan_offers;

        return $this;
    }

    /**
     * Gets acquiring_banks
     *
     * @return \Cpayment.Connector\Model\AcquiringBank[]|null
     */
    public function getAcquiringBanks()
    {
        return $this->container['acquiring_banks'];
    }

    /**
     * Sets acquiring_banks
     *
     * @param \Cpayment.Connector\Model\AcquiringBank[]|null $acquiring_banks All acquiring banks data
     *
     * @return $this
     */
    public function setAcquiringBanks($acquiring_banks)
    {
        $this->container['acquiring_banks'] = $acquiring_banks;

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


