<?php
/**
 * CustomerJsonApiRelationships
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
 * CustomerJsonApiRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerJsonApiRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerJsonApi_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'group' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsGroup',
'default_payment_method' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsDefaultPaymentMethod',
'sales_channel' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsSalesChannel',
'language' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsLanguage',
'last_payment_method' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsLastPaymentMethod',
'default_billing_address' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsDefaultBillingAddress',
'default_shipping_address' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsDefaultShippingAddress',
'salutation' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsSalutation',
'addresses' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsAddresses',
'order_customers' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsOrderCustomers',
'tags' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsTags',
'promotions' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsPromotions',
'product_reviews' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsProductReviews',
'recovery_customer' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsRecoveryCustomer',
'requested_group' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsRequestedGroup',
'bound_sales_channel' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsBoundSalesChannel',
'wishlists' => '\Swagger\Client\Model\CustomerJsonApiRelationshipsWishlists'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'group' => null,
'default_payment_method' => null,
'sales_channel' => null,
'language' => null,
'last_payment_method' => null,
'default_billing_address' => null,
'default_shipping_address' => null,
'salutation' => null,
'addresses' => null,
'order_customers' => null,
'tags' => null,
'promotions' => null,
'product_reviews' => null,
'recovery_customer' => null,
'requested_group' => null,
'bound_sales_channel' => null,
'wishlists' => null    ];

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
        'group' => 'group',
'default_payment_method' => 'defaultPaymentMethod',
'sales_channel' => 'salesChannel',
'language' => 'language',
'last_payment_method' => 'lastPaymentMethod',
'default_billing_address' => 'defaultBillingAddress',
'default_shipping_address' => 'defaultShippingAddress',
'salutation' => 'salutation',
'addresses' => 'addresses',
'order_customers' => 'orderCustomers',
'tags' => 'tags',
'promotions' => 'promotions',
'product_reviews' => 'productReviews',
'recovery_customer' => 'recoveryCustomer',
'requested_group' => 'requestedGroup',
'bound_sales_channel' => 'boundSalesChannel',
'wishlists' => 'wishlists'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group' => 'setGroup',
'default_payment_method' => 'setDefaultPaymentMethod',
'sales_channel' => 'setSalesChannel',
'language' => 'setLanguage',
'last_payment_method' => 'setLastPaymentMethod',
'default_billing_address' => 'setDefaultBillingAddress',
'default_shipping_address' => 'setDefaultShippingAddress',
'salutation' => 'setSalutation',
'addresses' => 'setAddresses',
'order_customers' => 'setOrderCustomers',
'tags' => 'setTags',
'promotions' => 'setPromotions',
'product_reviews' => 'setProductReviews',
'recovery_customer' => 'setRecoveryCustomer',
'requested_group' => 'setRequestedGroup',
'bound_sales_channel' => 'setBoundSalesChannel',
'wishlists' => 'setWishlists'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group' => 'getGroup',
'default_payment_method' => 'getDefaultPaymentMethod',
'sales_channel' => 'getSalesChannel',
'language' => 'getLanguage',
'last_payment_method' => 'getLastPaymentMethod',
'default_billing_address' => 'getDefaultBillingAddress',
'default_shipping_address' => 'getDefaultShippingAddress',
'salutation' => 'getSalutation',
'addresses' => 'getAddresses',
'order_customers' => 'getOrderCustomers',
'tags' => 'getTags',
'promotions' => 'getPromotions',
'product_reviews' => 'getProductReviews',
'recovery_customer' => 'getRecoveryCustomer',
'requested_group' => 'getRequestedGroup',
'bound_sales_channel' => 'getBoundSalesChannel',
'wishlists' => 'getWishlists'    ];

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
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['default_payment_method'] = isset($data['default_payment_method']) ? $data['default_payment_method'] : null;
        $this->container['sales_channel'] = isset($data['sales_channel']) ? $data['sales_channel'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['last_payment_method'] = isset($data['last_payment_method']) ? $data['last_payment_method'] : null;
        $this->container['default_billing_address'] = isset($data['default_billing_address']) ? $data['default_billing_address'] : null;
        $this->container['default_shipping_address'] = isset($data['default_shipping_address']) ? $data['default_shipping_address'] : null;
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['order_customers'] = isset($data['order_customers']) ? $data['order_customers'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['promotions'] = isset($data['promotions']) ? $data['promotions'] : null;
        $this->container['product_reviews'] = isset($data['product_reviews']) ? $data['product_reviews'] : null;
        $this->container['recovery_customer'] = isset($data['recovery_customer']) ? $data['recovery_customer'] : null;
        $this->container['requested_group'] = isset($data['requested_group']) ? $data['requested_group'] : null;
        $this->container['bound_sales_channel'] = isset($data['bound_sales_channel']) ? $data['bound_sales_channel'] : null;
        $this->container['wishlists'] = isset($data['wishlists']) ? $data['wishlists'] : null;
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
     * Gets group
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsGroup
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsGroup $group group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets default_payment_method
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsDefaultPaymentMethod
     */
    public function getDefaultPaymentMethod()
    {
        return $this->container['default_payment_method'];
    }

    /**
     * Sets default_payment_method
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsDefaultPaymentMethod $default_payment_method default_payment_method
     *
     * @return $this
     */
    public function setDefaultPaymentMethod($default_payment_method)
    {
        $this->container['default_payment_method'] = $default_payment_method;

        return $this;
    }

    /**
     * Gets sales_channel
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsSalesChannel
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsSalesChannel $sales_channel sales_channel
     *
     * @return $this
     */
    public function setSalesChannel($sales_channel)
    {
        $this->container['sales_channel'] = $sales_channel;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsLanguage
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsLanguage $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets last_payment_method
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsLastPaymentMethod
     */
    public function getLastPaymentMethod()
    {
        return $this->container['last_payment_method'];
    }

    /**
     * Sets last_payment_method
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsLastPaymentMethod $last_payment_method last_payment_method
     *
     * @return $this
     */
    public function setLastPaymentMethod($last_payment_method)
    {
        $this->container['last_payment_method'] = $last_payment_method;

        return $this;
    }

    /**
     * Gets default_billing_address
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsDefaultBillingAddress
     */
    public function getDefaultBillingAddress()
    {
        return $this->container['default_billing_address'];
    }

    /**
     * Sets default_billing_address
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsDefaultBillingAddress $default_billing_address default_billing_address
     *
     * @return $this
     */
    public function setDefaultBillingAddress($default_billing_address)
    {
        $this->container['default_billing_address'] = $default_billing_address;

        return $this;
    }

    /**
     * Gets default_shipping_address
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsDefaultShippingAddress
     */
    public function getDefaultShippingAddress()
    {
        return $this->container['default_shipping_address'];
    }

    /**
     * Sets default_shipping_address
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsDefaultShippingAddress $default_shipping_address default_shipping_address
     *
     * @return $this
     */
    public function setDefaultShippingAddress($default_shipping_address)
    {
        $this->container['default_shipping_address'] = $default_shipping_address;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsSalutation
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsSalutation $salutation salutation
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsAddresses
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsAddresses $addresses addresses
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets order_customers
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsOrderCustomers
     */
    public function getOrderCustomers()
    {
        return $this->container['order_customers'];
    }

    /**
     * Sets order_customers
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsOrderCustomers $order_customers order_customers
     *
     * @return $this
     */
    public function setOrderCustomers($order_customers)
    {
        $this->container['order_customers'] = $order_customers;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsTags
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsTags $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets promotions
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsPromotions
     */
    public function getPromotions()
    {
        return $this->container['promotions'];
    }

    /**
     * Sets promotions
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsPromotions $promotions promotions
     *
     * @return $this
     */
    public function setPromotions($promotions)
    {
        $this->container['promotions'] = $promotions;

        return $this;
    }

    /**
     * Gets product_reviews
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsProductReviews
     */
    public function getProductReviews()
    {
        return $this->container['product_reviews'];
    }

    /**
     * Sets product_reviews
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsProductReviews $product_reviews product_reviews
     *
     * @return $this
     */
    public function setProductReviews($product_reviews)
    {
        $this->container['product_reviews'] = $product_reviews;

        return $this;
    }

    /**
     * Gets recovery_customer
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsRecoveryCustomer
     */
    public function getRecoveryCustomer()
    {
        return $this->container['recovery_customer'];
    }

    /**
     * Sets recovery_customer
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsRecoveryCustomer $recovery_customer recovery_customer
     *
     * @return $this
     */
    public function setRecoveryCustomer($recovery_customer)
    {
        $this->container['recovery_customer'] = $recovery_customer;

        return $this;
    }

    /**
     * Gets requested_group
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsRequestedGroup
     */
    public function getRequestedGroup()
    {
        return $this->container['requested_group'];
    }

    /**
     * Sets requested_group
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsRequestedGroup $requested_group requested_group
     *
     * @return $this
     */
    public function setRequestedGroup($requested_group)
    {
        $this->container['requested_group'] = $requested_group;

        return $this;
    }

    /**
     * Gets bound_sales_channel
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsBoundSalesChannel
     */
    public function getBoundSalesChannel()
    {
        return $this->container['bound_sales_channel'];
    }

    /**
     * Sets bound_sales_channel
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsBoundSalesChannel $bound_sales_channel bound_sales_channel
     *
     * @return $this
     */
    public function setBoundSalesChannel($bound_sales_channel)
    {
        $this->container['bound_sales_channel'] = $bound_sales_channel;

        return $this;
    }

    /**
     * Gets wishlists
     *
     * @return \Swagger\Client\Model\CustomerJsonApiRelationshipsWishlists
     */
    public function getWishlists()
    {
        return $this->container['wishlists'];
    }

    /**
     * Sets wishlists
     *
     * @param \Swagger\Client\Model\CustomerJsonApiRelationshipsWishlists $wishlists wishlists
     *
     * @return $this
     */
    public function setWishlists($wishlists)
    {
        $this->container['wishlists'] = $wishlists;

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