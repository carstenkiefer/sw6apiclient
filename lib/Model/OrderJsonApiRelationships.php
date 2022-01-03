<?php
/**
 * OrderJsonApiRelationships
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
 * OrderJsonApiRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderJsonApiRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderJsonApi_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'state_machine_state' => '\Swagger\Client\Model\OrderJsonApiRelationshipsStateMachineState',
'order_customer' => '\Swagger\Client\Model\OrderJsonApiRelationshipsOrderCustomer',
'currency' => '\Swagger\Client\Model\OrderJsonApiRelationshipsCurrency',
'language' => '\Swagger\Client\Model\OrderJsonApiRelationshipsLanguage',
'sales_channel' => '\Swagger\Client\Model\OrderJsonApiRelationshipsSalesChannel',
'addresses' => '\Swagger\Client\Model\OrderJsonApiRelationshipsAddresses',
'billing_address' => '\Swagger\Client\Model\OrderJsonApiRelationshipsBillingAddress',
'deliveries' => '\Swagger\Client\Model\OrderJsonApiRelationshipsDeliveries',
'line_items' => '\Swagger\Client\Model\OrderJsonApiRelationshipsLineItems',
'transactions' => '\Swagger\Client\Model\OrderJsonApiRelationshipsTransactions',
'documents' => '\Swagger\Client\Model\OrderJsonApiRelationshipsDocuments',
'tags' => '\Swagger\Client\Model\OrderJsonApiRelationshipsTags',
'created_by' => '\Swagger\Client\Model\OrderJsonApiRelationshipsCreatedBy',
'updated_by' => '\Swagger\Client\Model\OrderJsonApiRelationshipsUpdatedBy'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'state_machine_state' => null,
'order_customer' => null,
'currency' => null,
'language' => null,
'sales_channel' => null,
'addresses' => null,
'billing_address' => null,
'deliveries' => null,
'line_items' => null,
'transactions' => null,
'documents' => null,
'tags' => null,
'created_by' => null,
'updated_by' => null    ];

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
        'state_machine_state' => 'stateMachineState',
'order_customer' => 'orderCustomer',
'currency' => 'currency',
'language' => 'language',
'sales_channel' => 'salesChannel',
'addresses' => 'addresses',
'billing_address' => 'billingAddress',
'deliveries' => 'deliveries',
'line_items' => 'lineItems',
'transactions' => 'transactions',
'documents' => 'documents',
'tags' => 'tags',
'created_by' => 'createdBy',
'updated_by' => 'updatedBy'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state_machine_state' => 'setStateMachineState',
'order_customer' => 'setOrderCustomer',
'currency' => 'setCurrency',
'language' => 'setLanguage',
'sales_channel' => 'setSalesChannel',
'addresses' => 'setAddresses',
'billing_address' => 'setBillingAddress',
'deliveries' => 'setDeliveries',
'line_items' => 'setLineItems',
'transactions' => 'setTransactions',
'documents' => 'setDocuments',
'tags' => 'setTags',
'created_by' => 'setCreatedBy',
'updated_by' => 'setUpdatedBy'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state_machine_state' => 'getStateMachineState',
'order_customer' => 'getOrderCustomer',
'currency' => 'getCurrency',
'language' => 'getLanguage',
'sales_channel' => 'getSalesChannel',
'addresses' => 'getAddresses',
'billing_address' => 'getBillingAddress',
'deliveries' => 'getDeliveries',
'line_items' => 'getLineItems',
'transactions' => 'getTransactions',
'documents' => 'getDocuments',
'tags' => 'getTags',
'created_by' => 'getCreatedBy',
'updated_by' => 'getUpdatedBy'    ];

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
        $this->container['state_machine_state'] = isset($data['state_machine_state']) ? $data['state_machine_state'] : null;
        $this->container['order_customer'] = isset($data['order_customer']) ? $data['order_customer'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['sales_channel'] = isset($data['sales_channel']) ? $data['sales_channel'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        $this->container['deliveries'] = isset($data['deliveries']) ? $data['deliveries'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['transactions'] = isset($data['transactions']) ? $data['transactions'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['updated_by'] = isset($data['updated_by']) ? $data['updated_by'] : null;
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
     * Gets state_machine_state
     *
     * @return \Swagger\Client\Model\OrderJsonApiRelationshipsStateMachineState
     */
    public function getStateMachineState()
    {
        return $this->container['state_machine_state'];
    }

    /**
     * Sets state_machine_state
     *
     * @param \Swagger\Client\Model\OrderJsonApiRelationshipsStateMachineState $state_machine_state state_machine_state
     *
     * @return $this
     */
    public function setStateMachineState($state_machine_state)
    {
        $this->container['state_machine_state'] = $state_machine_state;

        return $this;
    }

    /**
     * Gets order_customer
     *
     * @return \Swagger\Client\Model\OrderJsonApiRelationshipsOrderCustomer
     */
    public function getOrderCustomer()
    {
        return $this->container['order_customer'];
    }

    /**
     * Sets order_customer
     *
     * @param \Swagger\Client\Model\OrderJsonApiRelationshipsOrderCustomer $order_customer order_customer
     *
     * @return $this
     */
    public function setOrderCustomer($order_customer)
    {
        $this->container['order_customer'] = $order_customer;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Swagger\Client\Model\OrderJsonApiRelationshipsCurrency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Swagger\Client\Model\OrderJsonApiRelationshipsCurrency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \Swagger\Client\Model\OrderJsonApiRelationshipsLanguage
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Swagger\Client\Model\OrderJsonApiRelationshipsLanguage $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets sales_channel
     *
     * @return \Swagger\Client\Model\OrderJsonApiRelationshipsSalesChannel
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param \Swagger\Client\Model\OrderJsonApiRelationshipsSalesChannel $sales_channel sales_channel
     *
     * @return $this
     */
    public function setSalesChannel($sales_channel)
    {
        $this->container['sales_channel'] = $sales_channel;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Swagger\Client\Model\OrderJsonApiRelationshipsAddresses
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Swagger\Client\Model\OrderJsonApiRelationshipsAddresses $addresses addresses
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \Swagger\Client\Model\OrderJsonApiRelationshipsBillingAddress
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Swagger\Client\Model\OrderJsonApiRelationshipsBillingAddress $billing_address billing_address
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets deliveries
     *
     * @return \Swagger\Client\Model\OrderJsonApiRelationshipsDeliveries
     */
    public function getDeliveries()
    {
        return $this->container['deliveries'];
    }

    /**
     * Sets deliveries
     *
     * @param \Swagger\Client\Model\OrderJsonApiRelationshipsDeliveries $deliveries deliveries
     *
     * @return $this
     */
    public function setDeliveries($deliveries)
    {
        $this->container['deliveries'] = $deliveries;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Swagger\Client\Model\OrderJsonApiRelationshipsLineItems
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Swagger\Client\Model\OrderJsonApiRelationshipsLineItems $line_items line_items
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return \Swagger\Client\Model\OrderJsonApiRelationshipsTransactions
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \Swagger\Client\Model\OrderJsonApiRelationshipsTransactions $transactions transactions
     *
     * @return $this
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \Swagger\Client\Model\OrderJsonApiRelationshipsDocuments
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Swagger\Client\Model\OrderJsonApiRelationshipsDocuments $documents documents
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Swagger\Client\Model\OrderJsonApiRelationshipsTags
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Swagger\Client\Model\OrderJsonApiRelationshipsTags $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return \Swagger\Client\Model\OrderJsonApiRelationshipsCreatedBy
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param \Swagger\Client\Model\OrderJsonApiRelationshipsCreatedBy $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets updated_by
     *
     * @return \Swagger\Client\Model\OrderJsonApiRelationshipsUpdatedBy
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     *
     * @param \Swagger\Client\Model\OrderJsonApiRelationshipsUpdatedBy $updated_by updated_by
     *
     * @return $this
     */
    public function setUpdatedBy($updated_by)
    {
        $this->container['updated_by'] = $updated_by;

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
