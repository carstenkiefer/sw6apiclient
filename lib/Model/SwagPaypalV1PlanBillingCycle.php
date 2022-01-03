<?php
/**
 * SwagPaypalV1PlanBillingCycle
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shopware Admin API
 *
 * This endpoint reference contains an overview of all endpoints comprising the Shopware Admin API.  For a better overview, all CRUD-endpoints are hidden by default. If you want to show also CRUD-endpoints add the query parameter `type=jsonapi`.
 *
 * OpenAPI spec version: 6.4.7.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.31
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * SwagPaypalV1PlanBillingCycle Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SwagPaypalV1PlanBillingCycle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'swag_paypal_v1_plan_billing_cycle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'frequency' => '\Swagger\Client\Model\SwagPaypalV1PlanFrequency',
'tenure_type' => 'string',
'sequence' => 'int',
'pricing_scheme' => '\Swagger\Client\Model\SwagPaypalV1PlanPricingScheme',
'total_cycles' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'frequency' => null,
'tenure_type' => null,
'sequence' => null,
'pricing_scheme' => null,
'total_cycles' => null    ];

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
        'frequency' => 'frequency',
'tenure_type' => 'tenureType',
'sequence' => 'sequence',
'pricing_scheme' => 'pricingScheme',
'total_cycles' => 'totalCycles'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'frequency' => 'setFrequency',
'tenure_type' => 'setTenureType',
'sequence' => 'setSequence',
'pricing_scheme' => 'setPricingScheme',
'total_cycles' => 'setTotalCycles'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'frequency' => 'getFrequency',
'tenure_type' => 'getTenureType',
'sequence' => 'getSequence',
'pricing_scheme' => 'getPricingScheme',
'total_cycles' => 'getTotalCycles'    ];

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
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['tenure_type'] = isset($data['tenure_type']) ? $data['tenure_type'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['pricing_scheme'] = isset($data['pricing_scheme']) ? $data['pricing_scheme'] : null;
        $this->container['total_cycles'] = isset($data['total_cycles']) ? $data['total_cycles'] : null;
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
     * Gets frequency
     *
     * @return \Swagger\Client\Model\SwagPaypalV1PlanFrequency
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param \Swagger\Client\Model\SwagPaypalV1PlanFrequency $frequency frequency
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets tenure_type
     *
     * @return string
     */
    public function getTenureType()
    {
        return $this->container['tenure_type'];
    }

    /**
     * Sets tenure_type
     *
     * @param string $tenure_type tenure_type
     *
     * @return $this
     */
    public function setTenureType($tenure_type)
    {
        $this->container['tenure_type'] = $tenure_type;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int $sequence sequence
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets pricing_scheme
     *
     * @return \Swagger\Client\Model\SwagPaypalV1PlanPricingScheme
     */
    public function getPricingScheme()
    {
        return $this->container['pricing_scheme'];
    }

    /**
     * Sets pricing_scheme
     *
     * @param \Swagger\Client\Model\SwagPaypalV1PlanPricingScheme $pricing_scheme pricing_scheme
     *
     * @return $this
     */
    public function setPricingScheme($pricing_scheme)
    {
        $this->container['pricing_scheme'] = $pricing_scheme;

        return $this;
    }

    /**
     * Gets total_cycles
     *
     * @return int
     */
    public function getTotalCycles()
    {
        return $this->container['total_cycles'];
    }

    /**
     * Sets total_cycles
     *
     * @param int $total_cycles total_cycles
     *
     * @return $this
     */
    public function setTotalCycles($total_cycles)
    {
        $this->container['total_cycles'] = $total_cycles;

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