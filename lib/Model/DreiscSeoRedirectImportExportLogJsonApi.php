<?php
/**
 * DreiscSeoRedirectImportExportLogJsonApi
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
use \Swagger\Client\ObjectSerializer;

/**
 * DreiscSeoRedirectImportExportLogJsonApi Class Doc Comment
 *
 * @category Class
 * @description Added since version:
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DreiscSeoRedirectImportExportLogJsonApi extends Resource 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DreiscSeoRedirectImportExportLogJsonApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'dreisc_seo_redirect_id' => 'string',
'row_index' => 'int',
'row_value' => 'object',
'errors' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'relationships' => '\Swagger\Client\Model\DreiscSeoRedirectImportExportLogJsonApiRelationships'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'dreisc_seo_redirect_id' => null,
'row_index' => 'int64',
'row_value' => null,
'errors' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'relationships' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'dreisc_seo_redirect_id' => 'dreiscSeoRedirectId',
'row_index' => 'rowIndex',
'row_value' => 'rowValue',
'errors' => 'errors',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'relationships' => 'relationships'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'dreisc_seo_redirect_id' => 'setDreiscSeoRedirectId',
'row_index' => 'setRowIndex',
'row_value' => 'setRowValue',
'errors' => 'setErrors',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'relationships' => 'setRelationships'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'dreisc_seo_redirect_id' => 'getDreiscSeoRedirectId',
'row_index' => 'getRowIndex',
'row_value' => 'getRowValue',
'errors' => 'getErrors',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'relationships' => 'getRelationships'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['dreisc_seo_redirect_id'] = isset($data['dreisc_seo_redirect_id']) ? $data['dreisc_seo_redirect_id'] : null;
        $this->container['row_index'] = isset($data['row_index']) ? $data['row_index'] : null;
        $this->container['row_value'] = isset($data['row_value']) ? $data['row_value'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['relationships'] = isset($data['relationships']) ? $data['relationships'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets dreisc_seo_redirect_id
     *
     * @return string
     */
    public function getDreiscSeoRedirectId()
    {
        return $this->container['dreisc_seo_redirect_id'];
    }

    /**
     * Sets dreisc_seo_redirect_id
     *
     * @param string $dreisc_seo_redirect_id dreisc_seo_redirect_id
     *
     * @return $this
     */
    public function setDreiscSeoRedirectId($dreisc_seo_redirect_id)
    {
        $this->container['dreisc_seo_redirect_id'] = $dreisc_seo_redirect_id;

        return $this;
    }

    /**
     * Gets row_index
     *
     * @return int
     */
    public function getRowIndex()
    {
        return $this->container['row_index'];
    }

    /**
     * Sets row_index
     *
     * @param int $row_index row_index
     *
     * @return $this
     */
    public function setRowIndex($row_index)
    {
        $this->container['row_index'] = $row_index;

        return $this;
    }

    /**
     * Gets row_value
     *
     * @return object
     */
    public function getRowValue()
    {
        return $this->container['row_value'];
    }

    /**
     * Sets row_value
     *
     * @param object $row_value row_value
     *
     * @return $this
     */
    public function setRowValue($row_value)
    {
        $this->container['row_value'] = $row_value;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return object
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param object $errors errors
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

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
     * Gets relationships
     *
     * @return \Swagger\Client\Model\DreiscSeoRedirectImportExportLogJsonApiRelationships
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \Swagger\Client\Model\DreiscSeoRedirectImportExportLogJsonApiRelationships $relationships relationships
     *
     * @return $this
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

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