<?php
/**
 * DeadMessage
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
 * DeadMessage Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeadMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeadMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'original_message_class' => 'string',
'handler_class' => 'string',
'encrypted' => 'bool',
'error_count' => 'int',
'next_execution_time' => '\DateTime',
'exception' => 'string',
'exception_message' => 'string',
'exception_file' => 'string',
'exception_line' => 'int',
'scheduled_task_id' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'scheduled_task' => '\Swagger\Client\Model\ScheduledTask'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'original_message_class' => null,
'handler_class' => null,
'encrypted' => null,
'error_count' => 'int64',
'next_execution_time' => 'date-time',
'exception' => null,
'exception_message' => null,
'exception_file' => null,
'exception_line' => 'int64',
'scheduled_task_id' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'scheduled_task' => null    ];

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
'original_message_class' => 'originalMessageClass',
'handler_class' => 'handlerClass',
'encrypted' => 'encrypted',
'error_count' => 'errorCount',
'next_execution_time' => 'nextExecutionTime',
'exception' => 'exception',
'exception_message' => 'exceptionMessage',
'exception_file' => 'exceptionFile',
'exception_line' => 'exceptionLine',
'scheduled_task_id' => 'scheduledTaskId',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'scheduled_task' => 'scheduledTask'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'original_message_class' => 'setOriginalMessageClass',
'handler_class' => 'setHandlerClass',
'encrypted' => 'setEncrypted',
'error_count' => 'setErrorCount',
'next_execution_time' => 'setNextExecutionTime',
'exception' => 'setException',
'exception_message' => 'setExceptionMessage',
'exception_file' => 'setExceptionFile',
'exception_line' => 'setExceptionLine',
'scheduled_task_id' => 'setScheduledTaskId',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'scheduled_task' => 'setScheduledTask'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'original_message_class' => 'getOriginalMessageClass',
'handler_class' => 'getHandlerClass',
'encrypted' => 'getEncrypted',
'error_count' => 'getErrorCount',
'next_execution_time' => 'getNextExecutionTime',
'exception' => 'getException',
'exception_message' => 'getExceptionMessage',
'exception_file' => 'getExceptionFile',
'exception_line' => 'getExceptionLine',
'scheduled_task_id' => 'getScheduledTaskId',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'scheduled_task' => 'getScheduledTask'    ];

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
        $this->container['original_message_class'] = isset($data['original_message_class']) ? $data['original_message_class'] : null;
        $this->container['handler_class'] = isset($data['handler_class']) ? $data['handler_class'] : null;
        $this->container['encrypted'] = isset($data['encrypted']) ? $data['encrypted'] : null;
        $this->container['error_count'] = isset($data['error_count']) ? $data['error_count'] : null;
        $this->container['next_execution_time'] = isset($data['next_execution_time']) ? $data['next_execution_time'] : null;
        $this->container['exception'] = isset($data['exception']) ? $data['exception'] : null;
        $this->container['exception_message'] = isset($data['exception_message']) ? $data['exception_message'] : null;
        $this->container['exception_file'] = isset($data['exception_file']) ? $data['exception_file'] : null;
        $this->container['exception_line'] = isset($data['exception_line']) ? $data['exception_line'] : null;
        $this->container['scheduled_task_id'] = isset($data['scheduled_task_id']) ? $data['scheduled_task_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['scheduled_task'] = isset($data['scheduled_task']) ? $data['scheduled_task'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['original_message_class'] === null) {
            $invalidProperties[] = "'original_message_class' can't be null";
        }
        if ($this->container['handler_class'] === null) {
            $invalidProperties[] = "'handler_class' can't be null";
        }
        if ($this->container['encrypted'] === null) {
            $invalidProperties[] = "'encrypted' can't be null";
        }
        if ($this->container['error_count'] === null) {
            $invalidProperties[] = "'error_count' can't be null";
        }
        if ($this->container['next_execution_time'] === null) {
            $invalidProperties[] = "'next_execution_time' can't be null";
        }
        if ($this->container['exception'] === null) {
            $invalidProperties[] = "'exception' can't be null";
        }
        if ($this->container['exception_message'] === null) {
            $invalidProperties[] = "'exception_message' can't be null";
        }
        if ($this->container['exception_file'] === null) {
            $invalidProperties[] = "'exception_file' can't be null";
        }
        if ($this->container['exception_line'] === null) {
            $invalidProperties[] = "'exception_line' can't be null";
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
     * Gets original_message_class
     *
     * @return string
     */
    public function getOriginalMessageClass()
    {
        return $this->container['original_message_class'];
    }

    /**
     * Sets original_message_class
     *
     * @param string $original_message_class original_message_class
     *
     * @return $this
     */
    public function setOriginalMessageClass($original_message_class)
    {
        $this->container['original_message_class'] = $original_message_class;

        return $this;
    }

    /**
     * Gets handler_class
     *
     * @return string
     */
    public function getHandlerClass()
    {
        return $this->container['handler_class'];
    }

    /**
     * Sets handler_class
     *
     * @param string $handler_class handler_class
     *
     * @return $this
     */
    public function setHandlerClass($handler_class)
    {
        $this->container['handler_class'] = $handler_class;

        return $this;
    }

    /**
     * Gets encrypted
     *
     * @return bool
     */
    public function getEncrypted()
    {
        return $this->container['encrypted'];
    }

    /**
     * Sets encrypted
     *
     * @param bool $encrypted encrypted
     *
     * @return $this
     */
    public function setEncrypted($encrypted)
    {
        $this->container['encrypted'] = $encrypted;

        return $this;
    }

    /**
     * Gets error_count
     *
     * @return int
     */
    public function getErrorCount()
    {
        return $this->container['error_count'];
    }

    /**
     * Sets error_count
     *
     * @param int $error_count error_count
     *
     * @return $this
     */
    public function setErrorCount($error_count)
    {
        $this->container['error_count'] = $error_count;

        return $this;
    }

    /**
     * Gets next_execution_time
     *
     * @return \DateTime
     */
    public function getNextExecutionTime()
    {
        return $this->container['next_execution_time'];
    }

    /**
     * Sets next_execution_time
     *
     * @param \DateTime $next_execution_time next_execution_time
     *
     * @return $this
     */
    public function setNextExecutionTime($next_execution_time)
    {
        $this->container['next_execution_time'] = $next_execution_time;

        return $this;
    }

    /**
     * Gets exception
     *
     * @return string
     */
    public function getException()
    {
        return $this->container['exception'];
    }

    /**
     * Sets exception
     *
     * @param string $exception exception
     *
     * @return $this
     */
    public function setException($exception)
    {
        $this->container['exception'] = $exception;

        return $this;
    }

    /**
     * Gets exception_message
     *
     * @return string
     */
    public function getExceptionMessage()
    {
        return $this->container['exception_message'];
    }

    /**
     * Sets exception_message
     *
     * @param string $exception_message exception_message
     *
     * @return $this
     */
    public function setExceptionMessage($exception_message)
    {
        $this->container['exception_message'] = $exception_message;

        return $this;
    }

    /**
     * Gets exception_file
     *
     * @return string
     */
    public function getExceptionFile()
    {
        return $this->container['exception_file'];
    }

    /**
     * Sets exception_file
     *
     * @param string $exception_file exception_file
     *
     * @return $this
     */
    public function setExceptionFile($exception_file)
    {
        $this->container['exception_file'] = $exception_file;

        return $this;
    }

    /**
     * Gets exception_line
     *
     * @return int
     */
    public function getExceptionLine()
    {
        return $this->container['exception_line'];
    }

    /**
     * Sets exception_line
     *
     * @param int $exception_line exception_line
     *
     * @return $this
     */
    public function setExceptionLine($exception_line)
    {
        $this->container['exception_line'] = $exception_line;

        return $this;
    }

    /**
     * Gets scheduled_task_id
     *
     * @return string
     */
    public function getScheduledTaskId()
    {
        return $this->container['scheduled_task_id'];
    }

    /**
     * Sets scheduled_task_id
     *
     * @param string $scheduled_task_id scheduled_task_id
     *
     * @return $this
     */
    public function setScheduledTaskId($scheduled_task_id)
    {
        $this->container['scheduled_task_id'] = $scheduled_task_id;

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
     * Gets scheduled_task
     *
     * @return \Swagger\Client\Model\ScheduledTask
     */
    public function getScheduledTask()
    {
        return $this->container['scheduled_task'];
    }

    /**
     * Sets scheduled_task
     *
     * @param \Swagger\Client\Model\ScheduledTask $scheduled_task scheduled_task
     *
     * @return $this
     */
    public function setScheduledTask($scheduled_task)
    {
        $this->container['scheduled_task'] = $scheduled_task;

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
