<?php
/**
 * ShippingMethodJsonApiRelationships
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
 * ShippingMethodJsonApiRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingMethodJsonApiRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingMethodJsonApi_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'delivery_time' => '\Swagger\Client\Model\ShippingMethodJsonApiRelationshipsDeliveryTime',
'availability_rule' => '\Swagger\Client\Model\ShippingMethodJsonApiRelationshipsAvailabilityRule',
'prices' => '\Swagger\Client\Model\ShippingMethodJsonApiRelationshipsPrices',
'media' => '\Swagger\Client\Model\ShippingMethodJsonApiRelationshipsMedia',
'tags' => '\Swagger\Client\Model\ShippingMethodJsonApiRelationshipsTags',
'order_deliveries' => '\Swagger\Client\Model\ShippingMethodJsonApiRelationshipsOrderDeliveries',
'sales_channels' => '\Swagger\Client\Model\ShippingMethodJsonApiRelationshipsSalesChannels',
'sales_channel_default_assignments' => '\Swagger\Client\Model\ShippingMethodJsonApiRelationshipsSalesChannelDefaultAssignments',
'tax' => '\Swagger\Client\Model\ShippingMethodJsonApiRelationshipsTax'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'delivery_time' => null,
'availability_rule' => null,
'prices' => null,
'media' => null,
'tags' => null,
'order_deliveries' => null,
'sales_channels' => null,
'sales_channel_default_assignments' => null,
'tax' => null    ];

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
        'delivery_time' => 'deliveryTime',
'availability_rule' => 'availabilityRule',
'prices' => 'prices',
'media' => 'media',
'tags' => 'tags',
'order_deliveries' => 'orderDeliveries',
'sales_channels' => 'salesChannels',
'sales_channel_default_assignments' => 'salesChannelDefaultAssignments',
'tax' => 'tax'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_time' => 'setDeliveryTime',
'availability_rule' => 'setAvailabilityRule',
'prices' => 'setPrices',
'media' => 'setMedia',
'tags' => 'setTags',
'order_deliveries' => 'setOrderDeliveries',
'sales_channels' => 'setSalesChannels',
'sales_channel_default_assignments' => 'setSalesChannelDefaultAssignments',
'tax' => 'setTax'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_time' => 'getDeliveryTime',
'availability_rule' => 'getAvailabilityRule',
'prices' => 'getPrices',
'media' => 'getMedia',
'tags' => 'getTags',
'order_deliveries' => 'getOrderDeliveries',
'sales_channels' => 'getSalesChannels',
'sales_channel_default_assignments' => 'getSalesChannelDefaultAssignments',
'tax' => 'getTax'    ];

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
        $this->container['delivery_time'] = isset($data['delivery_time']) ? $data['delivery_time'] : null;
        $this->container['availability_rule'] = isset($data['availability_rule']) ? $data['availability_rule'] : null;
        $this->container['prices'] = isset($data['prices']) ? $data['prices'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['order_deliveries'] = isset($data['order_deliveries']) ? $data['order_deliveries'] : null;
        $this->container['sales_channels'] = isset($data['sales_channels']) ? $data['sales_channels'] : null;
        $this->container['sales_channel_default_assignments'] = isset($data['sales_channel_default_assignments']) ? $data['sales_channel_default_assignments'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
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
     * Gets delivery_time
     *
     * @return \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsDeliveryTime
     */
    public function getDeliveryTime()
    {
        return $this->container['delivery_time'];
    }

    /**
     * Sets delivery_time
     *
     * @param \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsDeliveryTime $delivery_time delivery_time
     *
     * @return $this
     */
    public function setDeliveryTime($delivery_time)
    {
        $this->container['delivery_time'] = $delivery_time;

        return $this;
    }

    /**
     * Gets availability_rule
     *
     * @return \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsAvailabilityRule
     */
    public function getAvailabilityRule()
    {
        return $this->container['availability_rule'];
    }

    /**
     * Sets availability_rule
     *
     * @param \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsAvailabilityRule $availability_rule availability_rule
     *
     * @return $this
     */
    public function setAvailabilityRule($availability_rule)
    {
        $this->container['availability_rule'] = $availability_rule;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsPrices
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsPrices $prices prices
     *
     * @return $this
     */
    public function setPrices($prices)
    {
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsMedia
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsMedia $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsTags
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsTags $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets order_deliveries
     *
     * @return \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsOrderDeliveries
     */
    public function getOrderDeliveries()
    {
        return $this->container['order_deliveries'];
    }

    /**
     * Sets order_deliveries
     *
     * @param \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsOrderDeliveries $order_deliveries order_deliveries
     *
     * @return $this
     */
    public function setOrderDeliveries($order_deliveries)
    {
        $this->container['order_deliveries'] = $order_deliveries;

        return $this;
    }

    /**
     * Gets sales_channels
     *
     * @return \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsSalesChannels
     */
    public function getSalesChannels()
    {
        return $this->container['sales_channels'];
    }

    /**
     * Sets sales_channels
     *
     * @param \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsSalesChannels $sales_channels sales_channels
     *
     * @return $this
     */
    public function setSalesChannels($sales_channels)
    {
        $this->container['sales_channels'] = $sales_channels;

        return $this;
    }

    /**
     * Gets sales_channel_default_assignments
     *
     * @return \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsSalesChannelDefaultAssignments
     */
    public function getSalesChannelDefaultAssignments()
    {
        return $this->container['sales_channel_default_assignments'];
    }

    /**
     * Sets sales_channel_default_assignments
     *
     * @param \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsSalesChannelDefaultAssignments $sales_channel_default_assignments sales_channel_default_assignments
     *
     * @return $this
     */
    public function setSalesChannelDefaultAssignments($sales_channel_default_assignments)
    {
        $this->container['sales_channel_default_assignments'] = $sales_channel_default_assignments;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsTax
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \Swagger\Client\Model\ShippingMethodJsonApiRelationshipsTax $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

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
