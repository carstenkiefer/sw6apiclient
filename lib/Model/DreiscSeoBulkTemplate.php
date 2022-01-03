<?php
/**
 * DreiscSeoBulkTemplate
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
 * DreiscSeoBulkTemplate Class Doc Comment
 *
 * @category Class
 * @description Added since version:
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DreiscSeoBulkTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DreiscSeoBulkTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'area' => 'string',
'seo_option' => 'string',
'name' => 'string',
'spaceless' => 'bool',
'template' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'dreisc_seo_bulks' => '\Swagger\Client\Model\DreiscSeoBulk'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'area' => null,
'seo_option' => null,
'name' => null,
'spaceless' => null,
'template' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'dreisc_seo_bulks' => null    ];

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
'area' => 'area',
'seo_option' => 'seoOption',
'name' => 'name',
'spaceless' => 'spaceless',
'template' => 'template',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'dreisc_seo_bulks' => 'dreiscSeoBulks'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'area' => 'setArea',
'seo_option' => 'setSeoOption',
'name' => 'setName',
'spaceless' => 'setSpaceless',
'template' => 'setTemplate',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'dreisc_seo_bulks' => 'setDreiscSeoBulks'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'area' => 'getArea',
'seo_option' => 'getSeoOption',
'name' => 'getName',
'spaceless' => 'getSpaceless',
'template' => 'getTemplate',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'dreisc_seo_bulks' => 'getDreiscSeoBulks'    ];

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
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['seo_option'] = isset($data['seo_option']) ? $data['seo_option'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['spaceless'] = isset($data['spaceless']) ? $data['spaceless'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['dreisc_seo_bulks'] = isset($data['dreisc_seo_bulks']) ? $data['dreisc_seo_bulks'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['area'] === null) {
            $invalidProperties[] = "'area' can't be null";
        }
        if ($this->container['seo_option'] === null) {
            $invalidProperties[] = "'seo_option' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param string $area area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets seo_option
     *
     * @return string
     */
    public function getSeoOption()
    {
        return $this->container['seo_option'];
    }

    /**
     * Sets seo_option
     *
     * @param string $seo_option seo_option
     *
     * @return $this
     */
    public function setSeoOption($seo_option)
    {
        $this->container['seo_option'] = $seo_option;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets spaceless
     *
     * @return bool
     */
    public function getSpaceless()
    {
        return $this->container['spaceless'];
    }

    /**
     * Sets spaceless
     *
     * @param bool $spaceless spaceless
     *
     * @return $this
     */
    public function setSpaceless($spaceless)
    {
        $this->container['spaceless'] = $spaceless;

        return $this;
    }

    /**
     * Gets template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param string $template template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

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
     * Gets dreisc_seo_bulks
     *
     * @return \Swagger\Client\Model\DreiscSeoBulk
     */
    public function getDreiscSeoBulks()
    {
        return $this->container['dreisc_seo_bulks'];
    }

    /**
     * Sets dreisc_seo_bulks
     *
     * @param \Swagger\Client\Model\DreiscSeoBulk $dreisc_seo_bulks dreisc_seo_bulks
     *
     * @return $this
     */
    public function setDreiscSeoBulks($dreisc_seo_bulks)
    {
        $this->container['dreisc_seo_bulks'] = $dreisc_seo_bulks;

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