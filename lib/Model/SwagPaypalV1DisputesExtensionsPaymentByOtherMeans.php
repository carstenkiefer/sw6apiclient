<?php
/**
 * SwagPaypalV1DisputesExtensionsPaymentByOtherMeans
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
 * SwagPaypalV1DisputesExtensionsPaymentByOtherMeans Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SwagPaypalV1DisputesExtensionsPaymentByOtherMeans implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'swag_paypal_v1_disputes_extensions_payment_by_other_means';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'charge_different_from_original' => 'bool',
'received_duplicate' => 'bool',
'payment_method' => 'string',
'payment_instrument_suffix' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'charge_different_from_original' => null,
'received_duplicate' => null,
'payment_method' => null,
'payment_instrument_suffix' => null    ];

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
        'charge_different_from_original' => 'chargeDifferentFromOriginal',
'received_duplicate' => 'receivedDuplicate',
'payment_method' => 'paymentMethod',
'payment_instrument_suffix' => 'paymentInstrumentSuffix'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'charge_different_from_original' => 'setChargeDifferentFromOriginal',
'received_duplicate' => 'setReceivedDuplicate',
'payment_method' => 'setPaymentMethod',
'payment_instrument_suffix' => 'setPaymentInstrumentSuffix'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'charge_different_from_original' => 'getChargeDifferentFromOriginal',
'received_duplicate' => 'getReceivedDuplicate',
'payment_method' => 'getPaymentMethod',
'payment_instrument_suffix' => 'getPaymentInstrumentSuffix'    ];

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
        $this->container['charge_different_from_original'] = isset($data['charge_different_from_original']) ? $data['charge_different_from_original'] : null;
        $this->container['received_duplicate'] = isset($data['received_duplicate']) ? $data['received_duplicate'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['payment_instrument_suffix'] = isset($data['payment_instrument_suffix']) ? $data['payment_instrument_suffix'] : null;
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
     * Gets charge_different_from_original
     *
     * @return bool
     */
    public function getChargeDifferentFromOriginal()
    {
        return $this->container['charge_different_from_original'];
    }

    /**
     * Sets charge_different_from_original
     *
     * @param bool $charge_different_from_original charge_different_from_original
     *
     * @return $this
     */
    public function setChargeDifferentFromOriginal($charge_different_from_original)
    {
        $this->container['charge_different_from_original'] = $charge_different_from_original;

        return $this;
    }

    /**
     * Gets received_duplicate
     *
     * @return bool
     */
    public function getReceivedDuplicate()
    {
        return $this->container['received_duplicate'];
    }

    /**
     * Sets received_duplicate
     *
     * @param bool $received_duplicate received_duplicate
     *
     * @return $this
     */
    public function setReceivedDuplicate($received_duplicate)
    {
        $this->container['received_duplicate'] = $received_duplicate;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_instrument_suffix
     *
     * @return string
     */
    public function getPaymentInstrumentSuffix()
    {
        return $this->container['payment_instrument_suffix'];
    }

    /**
     * Sets payment_instrument_suffix
     *
     * @param string $payment_instrument_suffix payment_instrument_suffix
     *
     * @return $this
     */
    public function setPaymentInstrumentSuffix($payment_instrument_suffix)
    {
        $this->container['payment_instrument_suffix'] = $payment_instrument_suffix;

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