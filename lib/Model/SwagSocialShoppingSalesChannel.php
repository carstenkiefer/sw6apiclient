<?php
/**
 * SwagSocialShoppingSalesChannel
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
 * SwagSocialShoppingSalesChannel Class Doc Comment
 *
 * @category Class
 * @description Added since version:
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SwagSocialShoppingSalesChannel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SwagSocialShoppingSalesChannel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'sales_channel_id' => 'string',
'sales_channel_domain_id' => 'string',
'product_stream_id' => 'string',
'currency_id' => 'string',
'network' => 'string',
'configuration' => 'object',
'is_validating' => 'bool',
'last_validation' => '\DateTime',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'sales_channel' => '\Swagger\Client\Model\SalesChannel',
'product_stream' => '\Swagger\Client\Model\ProductStream',
'sales_channel_domain' => '\Swagger\Client\Model\SalesChannelDomain',
'currency' => '\Swagger\Client\Model\Currency'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'sales_channel_id' => null,
'sales_channel_domain_id' => null,
'product_stream_id' => null,
'currency_id' => null,
'network' => null,
'configuration' => null,
'is_validating' => null,
'last_validation' => 'date-time',
'created_at' => 'date-time',
'updated_at' => 'date-time',
'sales_channel' => null,
'product_stream' => null,
'sales_channel_domain' => null,
'currency' => null    ];

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
        'id' => 'id',
'sales_channel_id' => 'salesChannelId',
'sales_channel_domain_id' => 'salesChannelDomainId',
'product_stream_id' => 'productStreamId',
'currency_id' => 'currencyId',
'network' => 'network',
'configuration' => 'configuration',
'is_validating' => 'isValidating',
'last_validation' => 'lastValidation',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'sales_channel' => 'salesChannel',
'product_stream' => 'productStream',
'sales_channel_domain' => 'salesChannelDomain',
'currency' => 'currency'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'sales_channel_id' => 'setSalesChannelId',
'sales_channel_domain_id' => 'setSalesChannelDomainId',
'product_stream_id' => 'setProductStreamId',
'currency_id' => 'setCurrencyId',
'network' => 'setNetwork',
'configuration' => 'setConfiguration',
'is_validating' => 'setIsValidating',
'last_validation' => 'setLastValidation',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'sales_channel' => 'setSalesChannel',
'product_stream' => 'setProductStream',
'sales_channel_domain' => 'setSalesChannelDomain',
'currency' => 'setCurrency'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'sales_channel_id' => 'getSalesChannelId',
'sales_channel_domain_id' => 'getSalesChannelDomainId',
'product_stream_id' => 'getProductStreamId',
'currency_id' => 'getCurrencyId',
'network' => 'getNetwork',
'configuration' => 'getConfiguration',
'is_validating' => 'getIsValidating',
'last_validation' => 'getLastValidation',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'sales_channel' => 'getSalesChannel',
'product_stream' => 'getProductStream',
'sales_channel_domain' => 'getSalesChannelDomain',
'currency' => 'getCurrency'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sales_channel_id'] = isset($data['sales_channel_id']) ? $data['sales_channel_id'] : null;
        $this->container['sales_channel_domain_id'] = isset($data['sales_channel_domain_id']) ? $data['sales_channel_domain_id'] : null;
        $this->container['product_stream_id'] = isset($data['product_stream_id']) ? $data['product_stream_id'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['is_validating'] = isset($data['is_validating']) ? $data['is_validating'] : null;
        $this->container['last_validation'] = isset($data['last_validation']) ? $data['last_validation'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['sales_channel'] = isset($data['sales_channel']) ? $data['sales_channel'] : null;
        $this->container['product_stream'] = isset($data['product_stream']) ? $data['product_stream'] : null;
        $this->container['sales_channel_domain'] = isset($data['sales_channel_domain']) ? $data['sales_channel_domain'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sales_channel_id'] === null) {
            $invalidProperties[] = "'sales_channel_id' can't be null";
        }
        if ($this->container['sales_channel_domain_id'] === null) {
            $invalidProperties[] = "'sales_channel_domain_id' can't be null";
        }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sales_channel_id
     *
     * @return string
     */
    public function getSalesChannelId()
    {
        return $this->container['sales_channel_id'];
    }

    /**
     * Sets sales_channel_id
     *
     * @param string $sales_channel_id sales_channel_id
     *
     * @return $this
     */
    public function setSalesChannelId($sales_channel_id)
    {
        $this->container['sales_channel_id'] = $sales_channel_id;

        return $this;
    }

    /**
     * Gets sales_channel_domain_id
     *
     * @return string
     */
    public function getSalesChannelDomainId()
    {
        return $this->container['sales_channel_domain_id'];
    }

    /**
     * Sets sales_channel_domain_id
     *
     * @param string $sales_channel_domain_id sales_channel_domain_id
     *
     * @return $this
     */
    public function setSalesChannelDomainId($sales_channel_domain_id)
    {
        $this->container['sales_channel_domain_id'] = $sales_channel_domain_id;

        return $this;
    }

    /**
     * Gets product_stream_id
     *
     * @return string
     */
    public function getProductStreamId()
    {
        return $this->container['product_stream_id'];
    }

    /**
     * Sets product_stream_id
     *
     * @param string $product_stream_id product_stream_id
     *
     * @return $this
     */
    public function setProductStreamId($product_stream_id)
    {
        $this->container['product_stream_id'] = $product_stream_id;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string $currency_id currency_id
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets network
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string $network network
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return object
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param object $configuration configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets is_validating
     *
     * @return bool
     */
    public function getIsValidating()
    {
        return $this->container['is_validating'];
    }

    /**
     * Sets is_validating
     *
     * @param bool $is_validating is_validating
     *
     * @return $this
     */
    public function setIsValidating($is_validating)
    {
        $this->container['is_validating'] = $is_validating;

        return $this;
    }

    /**
     * Gets last_validation
     *
     * @return \DateTime
     */
    public function getLastValidation()
    {
        return $this->container['last_validation'];
    }

    /**
     * Sets last_validation
     *
     * @param \DateTime $last_validation last_validation
     *
     * @return $this
     */
    public function setLastValidation($last_validation)
    {
        $this->container['last_validation'] = $last_validation;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets sales_channel
     *
     * @return \Swagger\Client\Model\SalesChannel
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param \Swagger\Client\Model\SalesChannel $sales_channel sales_channel
     *
     * @return $this
     */
    public function setSalesChannel($sales_channel)
    {
        $this->container['sales_channel'] = $sales_channel;

        return $this;
    }

    /**
     * Gets product_stream
     *
     * @return \Swagger\Client\Model\ProductStream
     */
    public function getProductStream()
    {
        return $this->container['product_stream'];
    }

    /**
     * Sets product_stream
     *
     * @param \Swagger\Client\Model\ProductStream $product_stream product_stream
     *
     * @return $this
     */
    public function setProductStream($product_stream)
    {
        $this->container['product_stream'] = $product_stream;

        return $this;
    }

    /**
     * Gets sales_channel_domain
     *
     * @return \Swagger\Client\Model\SalesChannelDomain
     */
    public function getSalesChannelDomain()
    {
        return $this->container['sales_channel_domain'];
    }

    /**
     * Sets sales_channel_domain
     *
     * @param \Swagger\Client\Model\SalesChannelDomain $sales_channel_domain sales_channel_domain
     *
     * @return $this
     */
    public function setSalesChannelDomain($sales_channel_domain)
    {
        $this->container['sales_channel_domain'] = $sales_channel_domain;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Swagger\Client\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Swagger\Client\Model\Currency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
