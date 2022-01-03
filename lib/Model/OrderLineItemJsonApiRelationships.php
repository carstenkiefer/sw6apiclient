<?php
/**
 * OrderLineItemJsonApiRelationships
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
 * OrderLineItemJsonApiRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderLineItemJsonApiRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderLineItemJsonApi_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cover' => '\Swagger\Client\Model\OrderLineItemJsonApiRelationshipsCover',
'order' => '\Swagger\Client\Model\OrderLineItemJsonApiRelationshipsOrder',
'product' => '\Swagger\Client\Model\OrderLineItemJsonApiRelationshipsProduct',
'order_delivery_positions' => '\Swagger\Client\Model\OrderLineItemJsonApiRelationshipsOrderDeliveryPositions',
'parent' => '\Swagger\Client\Model\OrderLineItemJsonApiRelationshipsParent',
'children' => '\Swagger\Client\Model\OrderLineItemJsonApiRelationshipsChildren'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cover' => null,
'order' => null,
'product' => null,
'order_delivery_positions' => null,
'parent' => null,
'children' => null    ];

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
        'cover' => 'cover',
'order' => 'order',
'product' => 'product',
'order_delivery_positions' => 'orderDeliveryPositions',
'parent' => 'parent',
'children' => 'children'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cover' => 'setCover',
'order' => 'setOrder',
'product' => 'setProduct',
'order_delivery_positions' => 'setOrderDeliveryPositions',
'parent' => 'setParent',
'children' => 'setChildren'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cover' => 'getCover',
'order' => 'getOrder',
'product' => 'getProduct',
'order_delivery_positions' => 'getOrderDeliveryPositions',
'parent' => 'getParent',
'children' => 'getChildren'    ];

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
        $this->container['cover'] = isset($data['cover']) ? $data['cover'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['order_delivery_positions'] = isset($data['order_delivery_positions']) ? $data['order_delivery_positions'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
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
     * Gets cover
     *
     * @return \Swagger\Client\Model\OrderLineItemJsonApiRelationshipsCover
     */
    public function getCover()
    {
        return $this->container['cover'];
    }

    /**
     * Sets cover
     *
     * @param \Swagger\Client\Model\OrderLineItemJsonApiRelationshipsCover $cover cover
     *
     * @return $this
     */
    public function setCover($cover)
    {
        $this->container['cover'] = $cover;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \Swagger\Client\Model\OrderLineItemJsonApiRelationshipsOrder
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Swagger\Client\Model\OrderLineItemJsonApiRelationshipsOrder $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Swagger\Client\Model\OrderLineItemJsonApiRelationshipsProduct
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Swagger\Client\Model\OrderLineItemJsonApiRelationshipsProduct $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets order_delivery_positions
     *
     * @return \Swagger\Client\Model\OrderLineItemJsonApiRelationshipsOrderDeliveryPositions
     */
    public function getOrderDeliveryPositions()
    {
        return $this->container['order_delivery_positions'];
    }

    /**
     * Sets order_delivery_positions
     *
     * @param \Swagger\Client\Model\OrderLineItemJsonApiRelationshipsOrderDeliveryPositions $order_delivery_positions order_delivery_positions
     *
     * @return $this
     */
    public function setOrderDeliveryPositions($order_delivery_positions)
    {
        $this->container['order_delivery_positions'] = $order_delivery_positions;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \Swagger\Client\Model\OrderLineItemJsonApiRelationshipsParent
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Swagger\Client\Model\OrderLineItemJsonApiRelationshipsParent $parent parent
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \Swagger\Client\Model\OrderLineItemJsonApiRelationshipsChildren
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \Swagger\Client\Model\OrderLineItemJsonApiRelationshipsChildren $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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
