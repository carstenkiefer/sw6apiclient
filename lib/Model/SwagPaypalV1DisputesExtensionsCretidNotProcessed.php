<?php
/**
 * SwagPaypalV1DisputesExtensionsCretidNotProcessed
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
 * SwagPaypalV1DisputesExtensionsCretidNotProcessed Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SwagPaypalV1DisputesExtensionsCretidNotProcessed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'swag_paypal_v1_disputes_extensions_cretid_not_processed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'issue_type' => 'string',
'expected_refund' => '\Swagger\Client\Model\SwagPaypalV1CommonMoney',
'cancellation_details' => '\Swagger\Client\Model\SwagPaypalV1DisputesExtensionsCancellationDetails',
'product_details' => '\Swagger\Client\Model\SwagPaypalV1DisputesCommonProductDetails',
'service_details' => '\Swagger\Client\Model\SwagPaypalV1DisputesCommonServiceDetails',
'agreed_refund_details' => '\Swagger\Client\Model\SwagPaypalV1DisputesExtensionsAggredRefundDetails'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'issue_type' => null,
'expected_refund' => null,
'cancellation_details' => null,
'product_details' => null,
'service_details' => null,
'agreed_refund_details' => null    ];

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
        'issue_type' => 'issueType',
'expected_refund' => 'expectedRefund',
'cancellation_details' => 'cancellationDetails',
'product_details' => 'productDetails',
'service_details' => 'serviceDetails',
'agreed_refund_details' => 'agreedRefundDetails'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'issue_type' => 'setIssueType',
'expected_refund' => 'setExpectedRefund',
'cancellation_details' => 'setCancellationDetails',
'product_details' => 'setProductDetails',
'service_details' => 'setServiceDetails',
'agreed_refund_details' => 'setAgreedRefundDetails'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'issue_type' => 'getIssueType',
'expected_refund' => 'getExpectedRefund',
'cancellation_details' => 'getCancellationDetails',
'product_details' => 'getProductDetails',
'service_details' => 'getServiceDetails',
'agreed_refund_details' => 'getAgreedRefundDetails'    ];

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
        $this->container['issue_type'] = isset($data['issue_type']) ? $data['issue_type'] : null;
        $this->container['expected_refund'] = isset($data['expected_refund']) ? $data['expected_refund'] : null;
        $this->container['cancellation_details'] = isset($data['cancellation_details']) ? $data['cancellation_details'] : null;
        $this->container['product_details'] = isset($data['product_details']) ? $data['product_details'] : null;
        $this->container['service_details'] = isset($data['service_details']) ? $data['service_details'] : null;
        $this->container['agreed_refund_details'] = isset($data['agreed_refund_details']) ? $data['agreed_refund_details'] : null;
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
     * Gets issue_type
     *
     * @return string
     */
    public function getIssueType()
    {
        return $this->container['issue_type'];
    }

    /**
     * Sets issue_type
     *
     * @param string $issue_type issue_type
     *
     * @return $this
     */
    public function setIssueType($issue_type)
    {
        $this->container['issue_type'] = $issue_type;

        return $this;
    }

    /**
     * Gets expected_refund
     *
     * @return \Swagger\Client\Model\SwagPaypalV1CommonMoney
     */
    public function getExpectedRefund()
    {
        return $this->container['expected_refund'];
    }

    /**
     * Sets expected_refund
     *
     * @param \Swagger\Client\Model\SwagPaypalV1CommonMoney $expected_refund expected_refund
     *
     * @return $this
     */
    public function setExpectedRefund($expected_refund)
    {
        $this->container['expected_refund'] = $expected_refund;

        return $this;
    }

    /**
     * Gets cancellation_details
     *
     * @return \Swagger\Client\Model\SwagPaypalV1DisputesExtensionsCancellationDetails
     */
    public function getCancellationDetails()
    {
        return $this->container['cancellation_details'];
    }

    /**
     * Sets cancellation_details
     *
     * @param \Swagger\Client\Model\SwagPaypalV1DisputesExtensionsCancellationDetails $cancellation_details cancellation_details
     *
     * @return $this
     */
    public function setCancellationDetails($cancellation_details)
    {
        $this->container['cancellation_details'] = $cancellation_details;

        return $this;
    }

    /**
     * Gets product_details
     *
     * @return \Swagger\Client\Model\SwagPaypalV1DisputesCommonProductDetails
     */
    public function getProductDetails()
    {
        return $this->container['product_details'];
    }

    /**
     * Sets product_details
     *
     * @param \Swagger\Client\Model\SwagPaypalV1DisputesCommonProductDetails $product_details product_details
     *
     * @return $this
     */
    public function setProductDetails($product_details)
    {
        $this->container['product_details'] = $product_details;

        return $this;
    }

    /**
     * Gets service_details
     *
     * @return \Swagger\Client\Model\SwagPaypalV1DisputesCommonServiceDetails
     */
    public function getServiceDetails()
    {
        return $this->container['service_details'];
    }

    /**
     * Sets service_details
     *
     * @param \Swagger\Client\Model\SwagPaypalV1DisputesCommonServiceDetails $service_details service_details
     *
     * @return $this
     */
    public function setServiceDetails($service_details)
    {
        $this->container['service_details'] = $service_details;

        return $this;
    }

    /**
     * Gets agreed_refund_details
     *
     * @return \Swagger\Client\Model\SwagPaypalV1DisputesExtensionsAggredRefundDetails
     */
    public function getAgreedRefundDetails()
    {
        return $this->container['agreed_refund_details'];
    }

    /**
     * Sets agreed_refund_details
     *
     * @param \Swagger\Client\Model\SwagPaypalV1DisputesExtensionsAggredRefundDetails $agreed_refund_details agreed_refund_details
     *
     * @return $this
     */
    public function setAgreedRefundDetails($agreed_refund_details)
    {
        $this->container['agreed_refund_details'] = $agreed_refund_details;

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
