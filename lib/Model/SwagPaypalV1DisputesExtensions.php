<?php
/**
 * SwagPaypalV1DisputesExtensions
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
 * SwagPaypalV1DisputesExtensions Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SwagPaypalV1DisputesExtensions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'swag_paypal_v1_disputes_extensions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant_contacted' => 'bool',
'merchant_contacted_outcome' => 'string',
'merchant_contacted_time' => 'string',
'merchant_contacted_mode' => 'string',
'buyer_contacted_time' => 'string',
'buyer_contacted_channel' => 'string',
'billing_dispute_properties' => '\Swagger\Client\Model\SwagPaypalV1DisputesExtensionsBillingDisputeProperties',
'merchandize_dispute_properties' => '\Swagger\Client\Model\SwagPaypalV1DisputesExtensionsMerchandizeDisputeProperties'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant_contacted' => null,
'merchant_contacted_outcome' => null,
'merchant_contacted_time' => null,
'merchant_contacted_mode' => null,
'buyer_contacted_time' => null,
'buyer_contacted_channel' => null,
'billing_dispute_properties' => null,
'merchandize_dispute_properties' => null    ];

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
        'merchant_contacted' => 'merchantContacted',
'merchant_contacted_outcome' => 'merchantContactedOutcome',
'merchant_contacted_time' => 'merchantContactedTime',
'merchant_contacted_mode' => 'merchantContactedMode',
'buyer_contacted_time' => 'buyerContactedTime',
'buyer_contacted_channel' => 'buyerContactedChannel',
'billing_dispute_properties' => 'billingDisputeProperties',
'merchandize_dispute_properties' => 'merchandizeDisputeProperties'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_contacted' => 'setMerchantContacted',
'merchant_contacted_outcome' => 'setMerchantContactedOutcome',
'merchant_contacted_time' => 'setMerchantContactedTime',
'merchant_contacted_mode' => 'setMerchantContactedMode',
'buyer_contacted_time' => 'setBuyerContactedTime',
'buyer_contacted_channel' => 'setBuyerContactedChannel',
'billing_dispute_properties' => 'setBillingDisputeProperties',
'merchandize_dispute_properties' => 'setMerchandizeDisputeProperties'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_contacted' => 'getMerchantContacted',
'merchant_contacted_outcome' => 'getMerchantContactedOutcome',
'merchant_contacted_time' => 'getMerchantContactedTime',
'merchant_contacted_mode' => 'getMerchantContactedMode',
'buyer_contacted_time' => 'getBuyerContactedTime',
'buyer_contacted_channel' => 'getBuyerContactedChannel',
'billing_dispute_properties' => 'getBillingDisputeProperties',
'merchandize_dispute_properties' => 'getMerchandizeDisputeProperties'    ];

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
        $this->container['merchant_contacted'] = isset($data['merchant_contacted']) ? $data['merchant_contacted'] : null;
        $this->container['merchant_contacted_outcome'] = isset($data['merchant_contacted_outcome']) ? $data['merchant_contacted_outcome'] : null;
        $this->container['merchant_contacted_time'] = isset($data['merchant_contacted_time']) ? $data['merchant_contacted_time'] : null;
        $this->container['merchant_contacted_mode'] = isset($data['merchant_contacted_mode']) ? $data['merchant_contacted_mode'] : null;
        $this->container['buyer_contacted_time'] = isset($data['buyer_contacted_time']) ? $data['buyer_contacted_time'] : null;
        $this->container['buyer_contacted_channel'] = isset($data['buyer_contacted_channel']) ? $data['buyer_contacted_channel'] : null;
        $this->container['billing_dispute_properties'] = isset($data['billing_dispute_properties']) ? $data['billing_dispute_properties'] : null;
        $this->container['merchandize_dispute_properties'] = isset($data['merchandize_dispute_properties']) ? $data['merchandize_dispute_properties'] : null;
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
     * Gets merchant_contacted
     *
     * @return bool
     */
    public function getMerchantContacted()
    {
        return $this->container['merchant_contacted'];
    }

    /**
     * Sets merchant_contacted
     *
     * @param bool $merchant_contacted merchant_contacted
     *
     * @return $this
     */
    public function setMerchantContacted($merchant_contacted)
    {
        $this->container['merchant_contacted'] = $merchant_contacted;

        return $this;
    }

    /**
     * Gets merchant_contacted_outcome
     *
     * @return string
     */
    public function getMerchantContactedOutcome()
    {
        return $this->container['merchant_contacted_outcome'];
    }

    /**
     * Sets merchant_contacted_outcome
     *
     * @param string $merchant_contacted_outcome merchant_contacted_outcome
     *
     * @return $this
     */
    public function setMerchantContactedOutcome($merchant_contacted_outcome)
    {
        $this->container['merchant_contacted_outcome'] = $merchant_contacted_outcome;

        return $this;
    }

    /**
     * Gets merchant_contacted_time
     *
     * @return string
     */
    public function getMerchantContactedTime()
    {
        return $this->container['merchant_contacted_time'];
    }

    /**
     * Sets merchant_contacted_time
     *
     * @param string $merchant_contacted_time merchant_contacted_time
     *
     * @return $this
     */
    public function setMerchantContactedTime($merchant_contacted_time)
    {
        $this->container['merchant_contacted_time'] = $merchant_contacted_time;

        return $this;
    }

    /**
     * Gets merchant_contacted_mode
     *
     * @return string
     */
    public function getMerchantContactedMode()
    {
        return $this->container['merchant_contacted_mode'];
    }

    /**
     * Sets merchant_contacted_mode
     *
     * @param string $merchant_contacted_mode merchant_contacted_mode
     *
     * @return $this
     */
    public function setMerchantContactedMode($merchant_contacted_mode)
    {
        $this->container['merchant_contacted_mode'] = $merchant_contacted_mode;

        return $this;
    }

    /**
     * Gets buyer_contacted_time
     *
     * @return string
     */
    public function getBuyerContactedTime()
    {
        return $this->container['buyer_contacted_time'];
    }

    /**
     * Sets buyer_contacted_time
     *
     * @param string $buyer_contacted_time buyer_contacted_time
     *
     * @return $this
     */
    public function setBuyerContactedTime($buyer_contacted_time)
    {
        $this->container['buyer_contacted_time'] = $buyer_contacted_time;

        return $this;
    }

    /**
     * Gets buyer_contacted_channel
     *
     * @return string
     */
    public function getBuyerContactedChannel()
    {
        return $this->container['buyer_contacted_channel'];
    }

    /**
     * Sets buyer_contacted_channel
     *
     * @param string $buyer_contacted_channel buyer_contacted_channel
     *
     * @return $this
     */
    public function setBuyerContactedChannel($buyer_contacted_channel)
    {
        $this->container['buyer_contacted_channel'] = $buyer_contacted_channel;

        return $this;
    }

    /**
     * Gets billing_dispute_properties
     *
     * @return \Swagger\Client\Model\SwagPaypalV1DisputesExtensionsBillingDisputeProperties
     */
    public function getBillingDisputeProperties()
    {
        return $this->container['billing_dispute_properties'];
    }

    /**
     * Sets billing_dispute_properties
     *
     * @param \Swagger\Client\Model\SwagPaypalV1DisputesExtensionsBillingDisputeProperties $billing_dispute_properties billing_dispute_properties
     *
     * @return $this
     */
    public function setBillingDisputeProperties($billing_dispute_properties)
    {
        $this->container['billing_dispute_properties'] = $billing_dispute_properties;

        return $this;
    }

    /**
     * Gets merchandize_dispute_properties
     *
     * @return \Swagger\Client\Model\SwagPaypalV1DisputesExtensionsMerchandizeDisputeProperties
     */
    public function getMerchandizeDisputeProperties()
    {
        return $this->container['merchandize_dispute_properties'];
    }

    /**
     * Sets merchandize_dispute_properties
     *
     * @param \Swagger\Client\Model\SwagPaypalV1DisputesExtensionsMerchandizeDisputeProperties $merchandize_dispute_properties merchandize_dispute_properties
     *
     * @return $this
     */
    public function setMerchandizeDisputeProperties($merchandize_dispute_properties)
    {
        $this->container['merchandize_dispute_properties'] = $merchandize_dispute_properties;

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
