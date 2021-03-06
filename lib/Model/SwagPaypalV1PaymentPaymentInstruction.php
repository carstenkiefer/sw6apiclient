<?php
/**
 * SwagPaypalV1PaymentPaymentInstruction
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
 * SwagPaypalV1PaymentPaymentInstruction Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SwagPaypalV1PaymentPaymentInstruction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'swag_paypal_v1_payment_payment_instruction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reference_number' => 'string',
'recipient_banking_instruction' => '\Swagger\Client\Model\SwagPaypalV1PaymentRecipientBankingInstruction',
'amount' => '\Swagger\Client\Model\SwagPaypalV1CommonValue',
'payment_due_date' => 'string',
'instruction_type' => 'string',
'links' => '\Swagger\Client\Model\SwagPaypalV1CommonLink[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reference_number' => null,
'recipient_banking_instruction' => null,
'amount' => null,
'payment_due_date' => null,
'instruction_type' => null,
'links' => null    ];

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
        'reference_number' => 'referenceNumber',
'recipient_banking_instruction' => 'recipientBankingInstruction',
'amount' => 'amount',
'payment_due_date' => 'paymentDueDate',
'instruction_type' => 'instructionType',
'links' => 'links'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference_number' => 'setReferenceNumber',
'recipient_banking_instruction' => 'setRecipientBankingInstruction',
'amount' => 'setAmount',
'payment_due_date' => 'setPaymentDueDate',
'instruction_type' => 'setInstructionType',
'links' => 'setLinks'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference_number' => 'getReferenceNumber',
'recipient_banking_instruction' => 'getRecipientBankingInstruction',
'amount' => 'getAmount',
'payment_due_date' => 'getPaymentDueDate',
'instruction_type' => 'getInstructionType',
'links' => 'getLinks'    ];

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
        $this->container['reference_number'] = isset($data['reference_number']) ? $data['reference_number'] : null;
        $this->container['recipient_banking_instruction'] = isset($data['recipient_banking_instruction']) ? $data['recipient_banking_instruction'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['payment_due_date'] = isset($data['payment_due_date']) ? $data['payment_due_date'] : null;
        $this->container['instruction_type'] = isset($data['instruction_type']) ? $data['instruction_type'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
     * Gets reference_number
     *
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string $reference_number reference_number
     *
     * @return $this
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets recipient_banking_instruction
     *
     * @return \Swagger\Client\Model\SwagPaypalV1PaymentRecipientBankingInstruction
     */
    public function getRecipientBankingInstruction()
    {
        return $this->container['recipient_banking_instruction'];
    }

    /**
     * Sets recipient_banking_instruction
     *
     * @param \Swagger\Client\Model\SwagPaypalV1PaymentRecipientBankingInstruction $recipient_banking_instruction recipient_banking_instruction
     *
     * @return $this
     */
    public function setRecipientBankingInstruction($recipient_banking_instruction)
    {
        $this->container['recipient_banking_instruction'] = $recipient_banking_instruction;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \Swagger\Client\Model\SwagPaypalV1CommonValue
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Swagger\Client\Model\SwagPaypalV1CommonValue $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets payment_due_date
     *
     * @return string
     */
    public function getPaymentDueDate()
    {
        return $this->container['payment_due_date'];
    }

    /**
     * Sets payment_due_date
     *
     * @param string $payment_due_date payment_due_date
     *
     * @return $this
     */
    public function setPaymentDueDate($payment_due_date)
    {
        $this->container['payment_due_date'] = $payment_due_date;

        return $this;
    }

    /**
     * Gets instruction_type
     *
     * @return string
     */
    public function getInstructionType()
    {
        return $this->container['instruction_type'];
    }

    /**
     * Sets instruction_type
     *
     * @param string $instruction_type instruction_type
     *
     * @return $this
     */
    public function setInstructionType($instruction_type)
    {
        $this->container['instruction_type'] = $instruction_type;

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
