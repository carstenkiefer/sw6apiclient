<?php
/**
 * StateMachineTransitionJsonApiRelationships
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
 * StateMachineTransitionJsonApiRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StateMachineTransitionJsonApiRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StateMachineTransitionJsonApi_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'state_machine' => '\Swagger\Client\Model\StateMachineTransitionJsonApiRelationshipsStateMachine',
'from_state_machine_state' => '\Swagger\Client\Model\StateMachineTransitionJsonApiRelationshipsFromStateMachineState',
'to_state_machine_state' => '\Swagger\Client\Model\StateMachineTransitionJsonApiRelationshipsToStateMachineState'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'state_machine' => null,
'from_state_machine_state' => null,
'to_state_machine_state' => null    ];

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
        'state_machine' => 'stateMachine',
'from_state_machine_state' => 'fromStateMachineState',
'to_state_machine_state' => 'toStateMachineState'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state_machine' => 'setStateMachine',
'from_state_machine_state' => 'setFromStateMachineState',
'to_state_machine_state' => 'setToStateMachineState'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state_machine' => 'getStateMachine',
'from_state_machine_state' => 'getFromStateMachineState',
'to_state_machine_state' => 'getToStateMachineState'    ];

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
        $this->container['state_machine'] = isset($data['state_machine']) ? $data['state_machine'] : null;
        $this->container['from_state_machine_state'] = isset($data['from_state_machine_state']) ? $data['from_state_machine_state'] : null;
        $this->container['to_state_machine_state'] = isset($data['to_state_machine_state']) ? $data['to_state_machine_state'] : null;
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
     * Gets state_machine
     *
     * @return \Swagger\Client\Model\StateMachineTransitionJsonApiRelationshipsStateMachine
     */
    public function getStateMachine()
    {
        return $this->container['state_machine'];
    }

    /**
     * Sets state_machine
     *
     * @param \Swagger\Client\Model\StateMachineTransitionJsonApiRelationshipsStateMachine $state_machine state_machine
     *
     * @return $this
     */
    public function setStateMachine($state_machine)
    {
        $this->container['state_machine'] = $state_machine;

        return $this;
    }

    /**
     * Gets from_state_machine_state
     *
     * @return \Swagger\Client\Model\StateMachineTransitionJsonApiRelationshipsFromStateMachineState
     */
    public function getFromStateMachineState()
    {
        return $this->container['from_state_machine_state'];
    }

    /**
     * Sets from_state_machine_state
     *
     * @param \Swagger\Client\Model\StateMachineTransitionJsonApiRelationshipsFromStateMachineState $from_state_machine_state from_state_machine_state
     *
     * @return $this
     */
    public function setFromStateMachineState($from_state_machine_state)
    {
        $this->container['from_state_machine_state'] = $from_state_machine_state;

        return $this;
    }

    /**
     * Gets to_state_machine_state
     *
     * @return \Swagger\Client\Model\StateMachineTransitionJsonApiRelationshipsToStateMachineState
     */
    public function getToStateMachineState()
    {
        return $this->container['to_state_machine_state'];
    }

    /**
     * Sets to_state_machine_state
     *
     * @param \Swagger\Client\Model\StateMachineTransitionJsonApiRelationshipsToStateMachineState $to_state_machine_state to_state_machine_state
     *
     * @return $this
     */
    public function setToStateMachineState($to_state_machine_state)
    {
        $this->container['to_state_machine_state'] = $to_state_machine_state;

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
