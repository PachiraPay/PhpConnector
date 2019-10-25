<?php
/**
 * PaymentScheduleRule
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
 * PaymentScheduleRule Class Doc Comment
 *
 * @category Class
 * @description All payment schedule data
 * @package  Cpayment.Connector
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentScheduleRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentScheduleRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rank' => 'int',
        'name' => 'int',
        'date_delay' => 'int',
        'is_bond_rank' => 'bool',
        'threshold_day' => 'int',
        'first_due_day' => 'int',
        'first_due_month_delay' => 'int',
        'second_due_day' => 'int',
        'second_due_month_delay' => 'int',
        'has_fees' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'rank' => 'int32',
        'name' => 'int32',
        'date_delay' => 'int32',
        'is_bond_rank' => null,
        'threshold_day' => 'int32',
        'first_due_day' => 'int32',
        'first_due_month_delay' => 'int32',
        'second_due_day' => 'int32',
        'second_due_month_delay' => 'int32',
        'has_fees' => null
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
        'rank' => 'rank',
        'name' => 'name',
        'date_delay' => 'dateDelay',
        'is_bond_rank' => 'isBondRank',
        'threshold_day' => 'thresholdDay',
        'first_due_day' => 'firstDueDay',
        'first_due_month_delay' => 'firstDueMonthDelay',
        'second_due_day' => 'secondDueDay',
        'second_due_month_delay' => 'secondDueMonthDelay',
        'has_fees' => 'hasFees'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rank' => 'setRank',
        'name' => 'setName',
        'date_delay' => 'setDateDelay',
        'is_bond_rank' => 'setIsBondRank',
        'threshold_day' => 'setThresholdDay',
        'first_due_day' => 'setFirstDueDay',
        'first_due_month_delay' => 'setFirstDueMonthDelay',
        'second_due_day' => 'setSecondDueDay',
        'second_due_month_delay' => 'setSecondDueMonthDelay',
        'has_fees' => 'setHasFees'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rank' => 'getRank',
        'name' => 'getName',
        'date_delay' => 'getDateDelay',
        'is_bond_rank' => 'getIsBondRank',
        'threshold_day' => 'getThresholdDay',
        'first_due_day' => 'getFirstDueDay',
        'first_due_month_delay' => 'getFirstDueMonthDelay',
        'second_due_day' => 'getSecondDueDay',
        'second_due_month_delay' => 'getSecondDueMonthDelay',
        'has_fees' => 'getHasFees'
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
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['date_delay'] = isset($data['date_delay']) ? $data['date_delay'] : null;
        $this->container['is_bond_rank'] = isset($data['is_bond_rank']) ? $data['is_bond_rank'] : null;
        $this->container['threshold_day'] = isset($data['threshold_day']) ? $data['threshold_day'] : null;
        $this->container['first_due_day'] = isset($data['first_due_day']) ? $data['first_due_day'] : null;
        $this->container['first_due_month_delay'] = isset($data['first_due_month_delay']) ? $data['first_due_month_delay'] : null;
        $this->container['second_due_day'] = isset($data['second_due_day']) ? $data['second_due_day'] : null;
        $this->container['second_due_month_delay'] = isset($data['second_due_month_delay']) ? $data['second_due_month_delay'] : null;
        $this->container['has_fees'] = isset($data['has_fees']) ? $data['has_fees'] : null;
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
     * Gets rank
     *
     * @return int|null
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int|null $rank The rank
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets name
     *
     * @return int|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param int|null $name The amount distribution weight
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets date_delay
     *
     * @return int|null
     */
    public function getDateDelay()
    {
        return $this->container['date_delay'];
    }

    /**
     * Sets date_delay
     *
     * @param int|null $date_delay The date delay
     *
     * @return $this
     */
    public function setDateDelay($date_delay)
    {
        $this->container['date_delay'] = $date_delay;

        return $this;
    }

    /**
     * Gets is_bond_rank
     *
     * @return bool|null
     */
    public function getIsBondRank()
    {
        return $this->container['is_bond_rank'];
    }

    /**
     * Sets is_bond_rank
     *
     * @param bool|null $is_bond_rank Indicates if the rank is bonded or not
     *
     * @return $this
     */
    public function setIsBondRank($is_bond_rank)
    {
        $this->container['is_bond_rank'] = $is_bond_rank;

        return $this;
    }

    /**
     * Gets threshold_day
     *
     * @return int|null
     */
    public function getThresholdDay()
    {
        return $this->container['threshold_day'];
    }

    /**
     * Sets threshold_day
     *
     * @param int|null $threshold_day The threshold day
     *
     * @return $this
     */
    public function setThresholdDay($threshold_day)
    {
        $this->container['threshold_day'] = $threshold_day;

        return $this;
    }

    /**
     * Gets first_due_day
     *
     * @return int|null
     */
    public function getFirstDueDay()
    {
        return $this->container['first_due_day'];
    }

    /**
     * Sets first_due_day
     *
     * @param int|null $first_due_day The first due day
     *
     * @return $this
     */
    public function setFirstDueDay($first_due_day)
    {
        $this->container['first_due_day'] = $first_due_day;

        return $this;
    }

    /**
     * Gets first_due_month_delay
     *
     * @return int|null
     */
    public function getFirstDueMonthDelay()
    {
        return $this->container['first_due_month_delay'];
    }

    /**
     * Sets first_due_month_delay
     *
     * @param int|null $first_due_month_delay The first due month delay
     *
     * @return $this
     */
    public function setFirstDueMonthDelay($first_due_month_delay)
    {
        $this->container['first_due_month_delay'] = $first_due_month_delay;

        return $this;
    }

    /**
     * Gets second_due_day
     *
     * @return int|null
     */
    public function getSecondDueDay()
    {
        return $this->container['second_due_day'];
    }

    /**
     * Sets second_due_day
     *
     * @param int|null $second_due_day The second due day
     *
     * @return $this
     */
    public function setSecondDueDay($second_due_day)
    {
        $this->container['second_due_day'] = $second_due_day;

        return $this;
    }

    /**
     * Gets second_due_month_delay
     *
     * @return int|null
     */
    public function getSecondDueMonthDelay()
    {
        return $this->container['second_due_month_delay'];
    }

    /**
     * Sets second_due_month_delay
     *
     * @param int|null $second_due_month_delay The second due month delay
     *
     * @return $this
     */
    public function setSecondDueMonthDelay($second_due_month_delay)
    {
        $this->container['second_due_month_delay'] = $second_due_month_delay;

        return $this;
    }

    /**
     * Gets has_fees
     *
     * @return bool|null
     */
    public function getHasFees()
    {
        return $this->container['has_fees'];
    }

    /**
     * Sets has_fees
     *
     * @param bool|null $has_fees Indicates if the schedule rule has fees or not
     *
     * @return $this
     */
    public function setHasFees($has_fees)
    {
        $this->container['has_fees'] = $has_fees;

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


