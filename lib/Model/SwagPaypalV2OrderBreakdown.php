<?php
/**
 * SwagPaypalV2OrderBreakdown
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
 * SwagPaypalV2OrderBreakdown Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SwagPaypalV2OrderBreakdown implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'swag_paypal_v2_order_breakdown';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_total' => '\Swagger\Client\Model\SwagPaypalV2CommonMoney',
'shipping' => '\Swagger\Client\Model\SwagPaypalV2CommonMoney',
'handling' => '\Swagger\Client\Model\SwagPaypalV2CommonMoney',
'tax_total' => '\Swagger\Client\Model\SwagPaypalV2CommonMoney',
'insurance' => '\Swagger\Client\Model\SwagPaypalV2CommonMoney',
'shipping_discount' => '\Swagger\Client\Model\SwagPaypalV2CommonMoney',
'discount' => '\Swagger\Client\Model\SwagPaypalV2CommonMoney'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_total' => null,
'shipping' => null,
'handling' => null,
'tax_total' => null,
'insurance' => null,
'shipping_discount' => null,
'discount' => null    ];

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
        'item_total' => 'itemTotal',
'shipping' => 'shipping',
'handling' => 'handling',
'tax_total' => 'taxTotal',
'insurance' => 'insurance',
'shipping_discount' => 'shippingDiscount',
'discount' => 'discount'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_total' => 'setItemTotal',
'shipping' => 'setShipping',
'handling' => 'setHandling',
'tax_total' => 'setTaxTotal',
'insurance' => 'setInsurance',
'shipping_discount' => 'setShippingDiscount',
'discount' => 'setDiscount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_total' => 'getItemTotal',
'shipping' => 'getShipping',
'handling' => 'getHandling',
'tax_total' => 'getTaxTotal',
'insurance' => 'getInsurance',
'shipping_discount' => 'getShippingDiscount',
'discount' => 'getDiscount'    ];

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
        $this->container['item_total'] = isset($data['item_total']) ? $data['item_total'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['handling'] = isset($data['handling']) ? $data['handling'] : null;
        $this->container['tax_total'] = isset($data['tax_total']) ? $data['tax_total'] : null;
        $this->container['insurance'] = isset($data['insurance']) ? $data['insurance'] : null;
        $this->container['shipping_discount'] = isset($data['shipping_discount']) ? $data['shipping_discount'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
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
     * Gets item_total
     *
     * @return \Swagger\Client\Model\SwagPaypalV2CommonMoney
     */
    public function getItemTotal()
    {
        return $this->container['item_total'];
    }

    /**
     * Sets item_total
     *
     * @param \Swagger\Client\Model\SwagPaypalV2CommonMoney $item_total item_total
     *
     * @return $this
     */
    public function setItemTotal($item_total)
    {
        $this->container['item_total'] = $item_total;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \Swagger\Client\Model\SwagPaypalV2CommonMoney
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \Swagger\Client\Model\SwagPaypalV2CommonMoney $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets handling
     *
     * @return \Swagger\Client\Model\SwagPaypalV2CommonMoney
     */
    public function getHandling()
    {
        return $this->container['handling'];
    }

    /**
     * Sets handling
     *
     * @param \Swagger\Client\Model\SwagPaypalV2CommonMoney $handling handling
     *
     * @return $this
     */
    public function setHandling($handling)
    {
        $this->container['handling'] = $handling;

        return $this;
    }

    /**
     * Gets tax_total
     *
     * @return \Swagger\Client\Model\SwagPaypalV2CommonMoney
     */
    public function getTaxTotal()
    {
        return $this->container['tax_total'];
    }

    /**
     * Sets tax_total
     *
     * @param \Swagger\Client\Model\SwagPaypalV2CommonMoney $tax_total tax_total
     *
     * @return $this
     */
    public function setTaxTotal($tax_total)
    {
        $this->container['tax_total'] = $tax_total;

        return $this;
    }

    /**
     * Gets insurance
     *
     * @return \Swagger\Client\Model\SwagPaypalV2CommonMoney
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     *
     * @param \Swagger\Client\Model\SwagPaypalV2CommonMoney $insurance insurance
     *
     * @return $this
     */
    public function setInsurance($insurance)
    {
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets shipping_discount
     *
     * @return \Swagger\Client\Model\SwagPaypalV2CommonMoney
     */
    public function getShippingDiscount()
    {
        return $this->container['shipping_discount'];
    }

    /**
     * Sets shipping_discount
     *
     * @param \Swagger\Client\Model\SwagPaypalV2CommonMoney $shipping_discount shipping_discount
     *
     * @return $this
     */
    public function setShippingDiscount($shipping_discount)
    {
        $this->container['shipping_discount'] = $shipping_discount;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \Swagger\Client\Model\SwagPaypalV2CommonMoney
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \Swagger\Client\Model\SwagPaypalV2CommonMoney $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

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
