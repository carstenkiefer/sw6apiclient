<?php
/**
 * PromotionJsonApiRelationships
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
 * PromotionJsonApiRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PromotionJsonApiRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PromotionJsonApi_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'setgroups' => '\Swagger\Client\Model\PromotionJsonApiRelationshipsSetgroups',
'sales_channels' => '\Swagger\Client\Model\PromotionJsonApiRelationshipsSalesChannels',
'discounts' => '\Swagger\Client\Model\PromotionJsonApiRelationshipsDiscounts',
'individual_codes' => '\Swagger\Client\Model\PromotionJsonApiRelationshipsIndividualCodes',
'persona_rules' => '\Swagger\Client\Model\PromotionJsonApiRelationshipsPersonaRules',
'persona_customers' => '\Swagger\Client\Model\PromotionJsonApiRelationshipsPersonaCustomers',
'order_rules' => '\Swagger\Client\Model\PromotionJsonApiRelationshipsOrderRules',
'cart_rules' => '\Swagger\Client\Model\PromotionJsonApiRelationshipsCartRules'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'setgroups' => null,
'sales_channels' => null,
'discounts' => null,
'individual_codes' => null,
'persona_rules' => null,
'persona_customers' => null,
'order_rules' => null,
'cart_rules' => null    ];

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
        'setgroups' => 'setgroups',
'sales_channels' => 'salesChannels',
'discounts' => 'discounts',
'individual_codes' => 'individualCodes',
'persona_rules' => 'personaRules',
'persona_customers' => 'personaCustomers',
'order_rules' => 'orderRules',
'cart_rules' => 'cartRules'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'setgroups' => 'setSetgroups',
'sales_channels' => 'setSalesChannels',
'discounts' => 'setDiscounts',
'individual_codes' => 'setIndividualCodes',
'persona_rules' => 'setPersonaRules',
'persona_customers' => 'setPersonaCustomers',
'order_rules' => 'setOrderRules',
'cart_rules' => 'setCartRules'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'setgroups' => 'getSetgroups',
'sales_channels' => 'getSalesChannels',
'discounts' => 'getDiscounts',
'individual_codes' => 'getIndividualCodes',
'persona_rules' => 'getPersonaRules',
'persona_customers' => 'getPersonaCustomers',
'order_rules' => 'getOrderRules',
'cart_rules' => 'getCartRules'    ];

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
        $this->container['setgroups'] = isset($data['setgroups']) ? $data['setgroups'] : null;
        $this->container['sales_channels'] = isset($data['sales_channels']) ? $data['sales_channels'] : null;
        $this->container['discounts'] = isset($data['discounts']) ? $data['discounts'] : null;
        $this->container['individual_codes'] = isset($data['individual_codes']) ? $data['individual_codes'] : null;
        $this->container['persona_rules'] = isset($data['persona_rules']) ? $data['persona_rules'] : null;
        $this->container['persona_customers'] = isset($data['persona_customers']) ? $data['persona_customers'] : null;
        $this->container['order_rules'] = isset($data['order_rules']) ? $data['order_rules'] : null;
        $this->container['cart_rules'] = isset($data['cart_rules']) ? $data['cart_rules'] : null;
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
     * Gets setgroups
     *
     * @return \Swagger\Client\Model\PromotionJsonApiRelationshipsSetgroups
     */
    public function getSetgroups()
    {
        return $this->container['setgroups'];
    }

    /**
     * Sets setgroups
     *
     * @param \Swagger\Client\Model\PromotionJsonApiRelationshipsSetgroups $setgroups setgroups
     *
     * @return $this
     */
    public function setSetgroups($setgroups)
    {
        $this->container['setgroups'] = $setgroups;

        return $this;
    }

    /**
     * Gets sales_channels
     *
     * @return \Swagger\Client\Model\PromotionJsonApiRelationshipsSalesChannels
     */
    public function getSalesChannels()
    {
        return $this->container['sales_channels'];
    }

    /**
     * Sets sales_channels
     *
     * @param \Swagger\Client\Model\PromotionJsonApiRelationshipsSalesChannels $sales_channels sales_channels
     *
     * @return $this
     */
    public function setSalesChannels($sales_channels)
    {
        $this->container['sales_channels'] = $sales_channels;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \Swagger\Client\Model\PromotionJsonApiRelationshipsDiscounts
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \Swagger\Client\Model\PromotionJsonApiRelationshipsDiscounts $discounts discounts
     *
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets individual_codes
     *
     * @return \Swagger\Client\Model\PromotionJsonApiRelationshipsIndividualCodes
     */
    public function getIndividualCodes()
    {
        return $this->container['individual_codes'];
    }

    /**
     * Sets individual_codes
     *
     * @param \Swagger\Client\Model\PromotionJsonApiRelationshipsIndividualCodes $individual_codes individual_codes
     *
     * @return $this
     */
    public function setIndividualCodes($individual_codes)
    {
        $this->container['individual_codes'] = $individual_codes;

        return $this;
    }

    /**
     * Gets persona_rules
     *
     * @return \Swagger\Client\Model\PromotionJsonApiRelationshipsPersonaRules
     */
    public function getPersonaRules()
    {
        return $this->container['persona_rules'];
    }

    /**
     * Sets persona_rules
     *
     * @param \Swagger\Client\Model\PromotionJsonApiRelationshipsPersonaRules $persona_rules persona_rules
     *
     * @return $this
     */
    public function setPersonaRules($persona_rules)
    {
        $this->container['persona_rules'] = $persona_rules;

        return $this;
    }

    /**
     * Gets persona_customers
     *
     * @return \Swagger\Client\Model\PromotionJsonApiRelationshipsPersonaCustomers
     */
    public function getPersonaCustomers()
    {
        return $this->container['persona_customers'];
    }

    /**
     * Sets persona_customers
     *
     * @param \Swagger\Client\Model\PromotionJsonApiRelationshipsPersonaCustomers $persona_customers persona_customers
     *
     * @return $this
     */
    public function setPersonaCustomers($persona_customers)
    {
        $this->container['persona_customers'] = $persona_customers;

        return $this;
    }

    /**
     * Gets order_rules
     *
     * @return \Swagger\Client\Model\PromotionJsonApiRelationshipsOrderRules
     */
    public function getOrderRules()
    {
        return $this->container['order_rules'];
    }

    /**
     * Sets order_rules
     *
     * @param \Swagger\Client\Model\PromotionJsonApiRelationshipsOrderRules $order_rules order_rules
     *
     * @return $this
     */
    public function setOrderRules($order_rules)
    {
        $this->container['order_rules'] = $order_rules;

        return $this;
    }

    /**
     * Gets cart_rules
     *
     * @return \Swagger\Client\Model\PromotionJsonApiRelationshipsCartRules
     */
    public function getCartRules()
    {
        return $this->container['cart_rules'];
    }

    /**
     * Sets cart_rules
     *
     * @param \Swagger\Client\Model\PromotionJsonApiRelationshipsCartRules $cart_rules cart_rules
     *
     * @return $this
     */
    public function setCartRules($cart_rules)
    {
        $this->container['cart_rules'] = $cart_rules;

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
