<?php
/**
 * StateMachineHistory
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
 * StateMachineHistory Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StateMachineHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StateMachineHistory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'state_machine_id' => 'string',
'entity_name' => 'string',
'entity_id' => 'object',
'from_state_id' => 'string',
'to_state_id' => 'string',
'transition_action_name' => 'string',
'user_id' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'state_machine' => '\Swagger\Client\Model\StateMachine',
'from_state_machine_state' => '\Swagger\Client\Model\StateMachineState',
'to_state_machine_state' => '\Swagger\Client\Model\StateMachineState',
'user' => '\Swagger\Client\Model\User'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'state_machine_id' => null,
'entity_name' => null,
'entity_id' => null,
'from_state_id' => null,
'to_state_id' => null,
'transition_action_name' => null,
'user_id' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'state_machine' => null,
'from_state_machine_state' => null,
'to_state_machine_state' => null,
'user' => null    ];

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
'state_machine_id' => 'stateMachineId',
'entity_name' => 'entityName',
'entity_id' => 'entityId',
'from_state_id' => 'fromStateId',
'to_state_id' => 'toStateId',
'transition_action_name' => 'transitionActionName',
'user_id' => 'userId',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'state_machine' => 'stateMachine',
'from_state_machine_state' => 'fromStateMachineState',
'to_state_machine_state' => 'toStateMachineState',
'user' => 'user'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'state_machine_id' => 'setStateMachineId',
'entity_name' => 'setEntityName',
'entity_id' => 'setEntityId',
'from_state_id' => 'setFromStateId',
'to_state_id' => 'setToStateId',
'transition_action_name' => 'setTransitionActionName',
'user_id' => 'setUserId',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'state_machine' => 'setStateMachine',
'from_state_machine_state' => 'setFromStateMachineState',
'to_state_machine_state' => 'setToStateMachineState',
'user' => 'setUser'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'state_machine_id' => 'getStateMachineId',
'entity_name' => 'getEntityName',
'entity_id' => 'getEntityId',
'from_state_id' => 'getFromStateId',
'to_state_id' => 'getToStateId',
'transition_action_name' => 'getTransitionActionName',
'user_id' => 'getUserId',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'state_machine' => 'getStateMachine',
'from_state_machine_state' => 'getFromStateMachineState',
'to_state_machine_state' => 'getToStateMachineState',
'user' => 'getUser'    ];

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
        $this->container['state_machine_id'] = isset($data['state_machine_id']) ? $data['state_machine_id'] : null;
        $this->container['entity_name'] = isset($data['entity_name']) ? $data['entity_name'] : null;
        $this->container['entity_id'] = isset($data['entity_id']) ? $data['entity_id'] : null;
        $this->container['from_state_id'] = isset($data['from_state_id']) ? $data['from_state_id'] : null;
        $this->container['to_state_id'] = isset($data['to_state_id']) ? $data['to_state_id'] : null;
        $this->container['transition_action_name'] = isset($data['transition_action_name']) ? $data['transition_action_name'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['state_machine'] = isset($data['state_machine']) ? $data['state_machine'] : null;
        $this->container['from_state_machine_state'] = isset($data['from_state_machine_state']) ? $data['from_state_machine_state'] : null;
        $this->container['to_state_machine_state'] = isset($data['to_state_machine_state']) ? $data['to_state_machine_state'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['state_machine_id'] === null) {
            $invalidProperties[] = "'state_machine_id' can't be null";
        }
        if ($this->container['entity_name'] === null) {
            $invalidProperties[] = "'entity_name' can't be null";
        }
        if ($this->container['entity_id'] === null) {
            $invalidProperties[] = "'entity_id' can't be null";
        }
        if ($this->container['from_state_id'] === null) {
            $invalidProperties[] = "'from_state_id' can't be null";
        }
        if ($this->container['to_state_id'] === null) {
            $invalidProperties[] = "'to_state_id' can't be null";
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
     * Gets state_machine_id
     *
     * @return string
     */
    public function getStateMachineId()
    {
        return $this->container['state_machine_id'];
    }

    /**
     * Sets state_machine_id
     *
     * @param string $state_machine_id state_machine_id
     *
     * @return $this
     */
    public function setStateMachineId($state_machine_id)
    {
        $this->container['state_machine_id'] = $state_machine_id;

        return $this;
    }

    /**
     * Gets entity_name
     *
     * @return string
     */
    public function getEntityName()
    {
        return $this->container['entity_name'];
    }

    /**
     * Sets entity_name
     *
     * @param string $entity_name entity_name
     *
     * @return $this
     */
    public function setEntityName($entity_name)
    {
        $this->container['entity_name'] = $entity_name;

        return $this;
    }

    /**
     * Gets entity_id
     *
     * @return object
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     *
     * @param object $entity_id entity_id
     *
     * @return $this
     */
    public function setEntityId($entity_id)
    {
        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets from_state_id
     *
     * @return string
     */
    public function getFromStateId()
    {
        return $this->container['from_state_id'];
    }

    /**
     * Sets from_state_id
     *
     * @param string $from_state_id from_state_id
     *
     * @return $this
     */
    public function setFromStateId($from_state_id)
    {
        $this->container['from_state_id'] = $from_state_id;

        return $this;
    }

    /**
     * Gets to_state_id
     *
     * @return string
     */
    public function getToStateId()
    {
        return $this->container['to_state_id'];
    }

    /**
     * Sets to_state_id
     *
     * @param string $to_state_id to_state_id
     *
     * @return $this
     */
    public function setToStateId($to_state_id)
    {
        $this->container['to_state_id'] = $to_state_id;

        return $this;
    }

    /**
     * Gets transition_action_name
     *
     * @return string
     */
    public function getTransitionActionName()
    {
        return $this->container['transition_action_name'];
    }

    /**
     * Sets transition_action_name
     *
     * @param string $transition_action_name transition_action_name
     *
     * @return $this
     */
    public function setTransitionActionName($transition_action_name)
    {
        $this->container['transition_action_name'] = $transition_action_name;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
     * Gets state_machine
     *
     * @return \Swagger\Client\Model\StateMachine
     */
    public function getStateMachine()
    {
        return $this->container['state_machine'];
    }

    /**
     * Sets state_machine
     *
     * @param \Swagger\Client\Model\StateMachine $state_machine state_machine
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
     * @return \Swagger\Client\Model\StateMachineState
     */
    public function getFromStateMachineState()
    {
        return $this->container['from_state_machine_state'];
    }

    /**
     * Sets from_state_machine_state
     *
     * @param \Swagger\Client\Model\StateMachineState $from_state_machine_state from_state_machine_state
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
     * @return \Swagger\Client\Model\StateMachineState
     */
    public function getToStateMachineState()
    {
        return $this->container['to_state_machine_state'];
    }

    /**
     * Sets to_state_machine_state
     *
     * @param \Swagger\Client\Model\StateMachineState $to_state_machine_state to_state_machine_state
     *
     * @return $this
     */
    public function setToStateMachineState($to_state_machine_state)
    {
        $this->container['to_state_machine_state'] = $to_state_machine_state;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Swagger\Client\Model\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Swagger\Client\Model\User $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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
