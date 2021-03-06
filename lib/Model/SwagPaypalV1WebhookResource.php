<?php
/**
 * SwagPaypalV1WebhookResource
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
 * SwagPaypalV1WebhookResource Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SwagPaypalV1WebhookResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'swag_paypal_v1_webhook_resource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'parent_payment' => 'string',
'billing_agreement_id' => 'string',
'sale_id' => 'string',
'refund_reason_code' => 'string',
'update_time' => 'string',
'amount' => '\Swagger\Client\Model\SwagPaypalV1CommonAmount',
'payment_mode' => 'string',
'create_time' => 'string',
'clearing_time' => 'string',
'protection_eligibility_type' => 'string',
'protection_eligibility' => 'string',
'transaction_fee' => '\Swagger\Client\Model\SwagPaypalV1CommonValue',
'invoice_number' => 'string',
'links' => '\Swagger\Client\Model\SwagPaypalV1CommonLink[]',
'state' => 'string',
'merchant_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'parent_payment' => null,
'billing_agreement_id' => null,
'sale_id' => null,
'refund_reason_code' => null,
'update_time' => null,
'amount' => null,
'payment_mode' => null,
'create_time' => null,
'clearing_time' => null,
'protection_eligibility_type' => null,
'protection_eligibility' => null,
'transaction_fee' => null,
'invoice_number' => null,
'links' => null,
'state' => null,
'merchant_id' => null    ];

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
'parent_payment' => 'parentPayment',
'billing_agreement_id' => 'billingAgreementId',
'sale_id' => 'saleId',
'refund_reason_code' => 'refundReasonCode',
'update_time' => 'updateTime',
'amount' => 'amount',
'payment_mode' => 'paymentMode',
'create_time' => 'createTime',
'clearing_time' => 'clearingTime',
'protection_eligibility_type' => 'protectionEligibilityType',
'protection_eligibility' => 'protectionEligibility',
'transaction_fee' => 'transactionFee',
'invoice_number' => 'invoiceNumber',
'links' => 'links',
'state' => 'state',
'merchant_id' => 'merchantId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'parent_payment' => 'setParentPayment',
'billing_agreement_id' => 'setBillingAgreementId',
'sale_id' => 'setSaleId',
'refund_reason_code' => 'setRefundReasonCode',
'update_time' => 'setUpdateTime',
'amount' => 'setAmount',
'payment_mode' => 'setPaymentMode',
'create_time' => 'setCreateTime',
'clearing_time' => 'setClearingTime',
'protection_eligibility_type' => 'setProtectionEligibilityType',
'protection_eligibility' => 'setProtectionEligibility',
'transaction_fee' => 'setTransactionFee',
'invoice_number' => 'setInvoiceNumber',
'links' => 'setLinks',
'state' => 'setState',
'merchant_id' => 'setMerchantId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'parent_payment' => 'getParentPayment',
'billing_agreement_id' => 'getBillingAgreementId',
'sale_id' => 'getSaleId',
'refund_reason_code' => 'getRefundReasonCode',
'update_time' => 'getUpdateTime',
'amount' => 'getAmount',
'payment_mode' => 'getPaymentMode',
'create_time' => 'getCreateTime',
'clearing_time' => 'getClearingTime',
'protection_eligibility_type' => 'getProtectionEligibilityType',
'protection_eligibility' => 'getProtectionEligibility',
'transaction_fee' => 'getTransactionFee',
'invoice_number' => 'getInvoiceNumber',
'links' => 'getLinks',
'state' => 'getState',
'merchant_id' => 'getMerchantId'    ];

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
        $this->container['parent_payment'] = isset($data['parent_payment']) ? $data['parent_payment'] : null;
        $this->container['billing_agreement_id'] = isset($data['billing_agreement_id']) ? $data['billing_agreement_id'] : null;
        $this->container['sale_id'] = isset($data['sale_id']) ? $data['sale_id'] : null;
        $this->container['refund_reason_code'] = isset($data['refund_reason_code']) ? $data['refund_reason_code'] : null;
        $this->container['update_time'] = isset($data['update_time']) ? $data['update_time'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['payment_mode'] = isset($data['payment_mode']) ? $data['payment_mode'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['clearing_time'] = isset($data['clearing_time']) ? $data['clearing_time'] : null;
        $this->container['protection_eligibility_type'] = isset($data['protection_eligibility_type']) ? $data['protection_eligibility_type'] : null;
        $this->container['protection_eligibility'] = isset($data['protection_eligibility']) ? $data['protection_eligibility'] : null;
        $this->container['transaction_fee'] = isset($data['transaction_fee']) ? $data['transaction_fee'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
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
     * Gets parent_payment
     *
     * @return string
     */
    public function getParentPayment()
    {
        return $this->container['parent_payment'];
    }

    /**
     * Sets parent_payment
     *
     * @param string $parent_payment parent_payment
     *
     * @return $this
     */
    public function setParentPayment($parent_payment)
    {
        $this->container['parent_payment'] = $parent_payment;

        return $this;
    }

    /**
     * Gets billing_agreement_id
     *
     * @return string
     */
    public function getBillingAgreementId()
    {
        return $this->container['billing_agreement_id'];
    }

    /**
     * Sets billing_agreement_id
     *
     * @param string $billing_agreement_id billing_agreement_id
     *
     * @return $this
     */
    public function setBillingAgreementId($billing_agreement_id)
    {
        $this->container['billing_agreement_id'] = $billing_agreement_id;

        return $this;
    }

    /**
     * Gets sale_id
     *
     * @return string
     */
    public function getSaleId()
    {
        return $this->container['sale_id'];
    }

    /**
     * Sets sale_id
     *
     * @param string $sale_id sale_id
     *
     * @return $this
     */
    public function setSaleId($sale_id)
    {
        $this->container['sale_id'] = $sale_id;

        return $this;
    }

    /**
     * Gets refund_reason_code
     *
     * @return string
     */
    public function getRefundReasonCode()
    {
        return $this->container['refund_reason_code'];
    }

    /**
     * Sets refund_reason_code
     *
     * @param string $refund_reason_code refund_reason_code
     *
     * @return $this
     */
    public function setRefundReasonCode($refund_reason_code)
    {
        $this->container['refund_reason_code'] = $refund_reason_code;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param string $update_time update_time
     *
     * @return $this
     */
    public function setUpdateTime($update_time)
    {
        $this->container['update_time'] = $update_time;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \Swagger\Client\Model\SwagPaypalV1CommonAmount
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Swagger\Client\Model\SwagPaypalV1CommonAmount $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets payment_mode
     *
     * @return string
     */
    public function getPaymentMode()
    {
        return $this->container['payment_mode'];
    }

    /**
     * Sets payment_mode
     *
     * @param string $payment_mode payment_mode
     *
     * @return $this
     */
    public function setPaymentMode($payment_mode)
    {
        $this->container['payment_mode'] = $payment_mode;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param string $create_time create_time
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets clearing_time
     *
     * @return string
     */
    public function getClearingTime()
    {
        return $this->container['clearing_time'];
    }

    /**
     * Sets clearing_time
     *
     * @param string $clearing_time clearing_time
     *
     * @return $this
     */
    public function setClearingTime($clearing_time)
    {
        $this->container['clearing_time'] = $clearing_time;

        return $this;
    }

    /**
     * Gets protection_eligibility_type
     *
     * @return string
     */
    public function getProtectionEligibilityType()
    {
        return $this->container['protection_eligibility_type'];
    }

    /**
     * Sets protection_eligibility_type
     *
     * @param string $protection_eligibility_type protection_eligibility_type
     *
     * @return $this
     */
    public function setProtectionEligibilityType($protection_eligibility_type)
    {
        $this->container['protection_eligibility_type'] = $protection_eligibility_type;

        return $this;
    }

    /**
     * Gets protection_eligibility
     *
     * @return string
     */
    public function getProtectionEligibility()
    {
        return $this->container['protection_eligibility'];
    }

    /**
     * Sets protection_eligibility
     *
     * @param string $protection_eligibility protection_eligibility
     *
     * @return $this
     */
    public function setProtectionEligibility($protection_eligibility)
    {
        $this->container['protection_eligibility'] = $protection_eligibility;

        return $this;
    }

    /**
     * Gets transaction_fee
     *
     * @return \Swagger\Client\Model\SwagPaypalV1CommonValue
     */
    public function getTransactionFee()
    {
        return $this->container['transaction_fee'];
    }

    /**
     * Sets transaction_fee
     *
     * @param \Swagger\Client\Model\SwagPaypalV1CommonValue $transaction_fee transaction_fee
     *
     * @return $this
     */
    public function setTransactionFee($transaction_fee)
    {
        $this->container['transaction_fee'] = $transaction_fee;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number invoice_number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Swagger\Client\Model\SwagPaypalV1CommonLink[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Swagger\Client\Model\SwagPaypalV1CommonLink[] $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string $merchant_id merchant_id
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

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
