<?php
/**
 * CmsPageActivityJsonApi
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
 * CmsPageActivityJsonApi Class Doc Comment
 *
 * @category Class
 * @description Added since version:
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CmsPageActivityJsonApi extends Resource 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CmsPageActivityJsonApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'page_id' => 'string',
'cms_page_version_id' => 'string',
'user_id' => 'string',
'draft_version' => 'string',
'name' => 'string',
'details' => 'object',
'is_merged' => 'bool',
'is_discarded' => 'bool',
'is_released_as_new' => 'bool',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'relationships' => '\Swagger\Client\Model\CmsPageActivityJsonApiRelationships'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'page_id' => null,
'cms_page_version_id' => null,
'user_id' => null,
'draft_version' => null,
'name' => null,
'details' => null,
'is_merged' => null,
'is_discarded' => null,
'is_released_as_new' => null,
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
'page_id' => 'pageId',
'cms_page_version_id' => 'cmsPageVersionId',
'user_id' => 'userId',
'draft_version' => 'draftVersion',
'name' => 'name',
'details' => 'details',
'is_merged' => 'isMerged',
'is_discarded' => 'isDiscarded',
'is_released_as_new' => 'isReleasedAsNew',
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
'page_id' => 'setPageId',
'cms_page_version_id' => 'setCmsPageVersionId',
'user_id' => 'setUserId',
'draft_version' => 'setDraftVersion',
'name' => 'setName',
'details' => 'setDetails',
'is_merged' => 'setIsMerged',
'is_discarded' => 'setIsDiscarded',
'is_released_as_new' => 'setIsReleasedAsNew',
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
'page_id' => 'getPageId',
'cms_page_version_id' => 'getCmsPageVersionId',
'user_id' => 'getUserId',
'draft_version' => 'getDraftVersion',
'name' => 'getName',
'details' => 'getDetails',
'is_merged' => 'getIsMerged',
'is_discarded' => 'getIsDiscarded',
'is_released_as_new' => 'getIsReleasedAsNew',
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
        $this->container['page_id'] = isset($data['page_id']) ? $data['page_id'] : null;
        $this->container['cms_page_version_id'] = isset($data['cms_page_version_id']) ? $data['cms_page_version_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['draft_version'] = isset($data['draft_version']) ? $data['draft_version'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['is_merged'] = isset($data['is_merged']) ? $data['is_merged'] : null;
        $this->container['is_discarded'] = isset($data['is_discarded']) ? $data['is_discarded'] : null;
        $this->container['is_released_as_new'] = isset($data['is_released_as_new']) ? $data['is_released_as_new'] : null;
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

        if ($this->container['page_id'] === null) {
            $invalidProperties[] = "'page_id' can't be null";
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
     * Gets page_id
     *
     * @return string
     */
    public function getPageId()
    {
        return $this->container['page_id'];
    }

    /**
     * Sets page_id
     *
     * @param string $page_id page_id
     *
     * @return $this
     */
    public function setPageId($page_id)
    {
        $this->container['page_id'] = $page_id;

        return $this;
    }

    /**
     * Gets cms_page_version_id
     *
     * @return string
     */
    public function getCmsPageVersionId()
    {
        return $this->container['cms_page_version_id'];
    }

    /**
     * Sets cms_page_version_id
     *
     * @param string $cms_page_version_id cms_page_version_id
     *
     * @return $this
     */
    public function setCmsPageVersionId($cms_page_version_id)
    {
        $this->container['cms_page_version_id'] = $cms_page_version_id;

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
     * Gets draft_version
     *
     * @return string
     */
    public function getDraftVersion()
    {
        return $this->container['draft_version'];
    }

    /**
     * Sets draft_version
     *
     * @param string $draft_version draft_version
     *
     * @return $this
     */
    public function setDraftVersion($draft_version)
    {
        $this->container['draft_version'] = $draft_version;

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
     * Gets details
     *
     * @return object
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param object $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets is_merged
     *
     * @return bool
     */
    public function getIsMerged()
    {
        return $this->container['is_merged'];
    }

    /**
     * Sets is_merged
     *
     * @param bool $is_merged is_merged
     *
     * @return $this
     */
    public function setIsMerged($is_merged)
    {
        $this->container['is_merged'] = $is_merged;

        return $this;
    }

    /**
     * Gets is_discarded
     *
     * @return bool
     */
    public function getIsDiscarded()
    {
        return $this->container['is_discarded'];
    }

    /**
     * Sets is_discarded
     *
     * @param bool $is_discarded is_discarded
     *
     * @return $this
     */
    public function setIsDiscarded($is_discarded)
    {
        $this->container['is_discarded'] = $is_discarded;

        return $this;
    }

    /**
     * Gets is_released_as_new
     *
     * @return bool
     */
    public function getIsReleasedAsNew()
    {
        return $this->container['is_released_as_new'];
    }

    /**
     * Sets is_released_as_new
     *
     * @param bool $is_released_as_new is_released_as_new
     *
     * @return $this
     */
    public function setIsReleasedAsNew($is_released_as_new)
    {
        $this->container['is_released_as_new'] = $is_released_as_new;

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
     * @return \Swagger\Client\Model\CmsPageActivityJsonApiRelationships
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \Swagger\Client\Model\CmsPageActivityJsonApiRelationships $relationships relationships
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
