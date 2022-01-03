<?php
/**
 * CmsPageDraftJsonApi
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
 * CmsPageDraftJsonApi Class Doc Comment
 *
 * @category Class
 * @description Added since version:
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CmsPageDraftJsonApi extends Resource 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CmsPageDraftJsonApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'draft_version' => 'string',
'deep_link_code' => 'string',
'name' => 'string',
'page_id' => 'string',
'cms_page_version_id' => 'string',
'owner_id' => 'string',
'preview_media_id' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'relationships' => '\Swagger\Client\Model\CmsPageDraftJsonApiRelationships'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'draft_version' => null,
'deep_link_code' => null,
'name' => null,
'page_id' => null,
'cms_page_version_id' => null,
'owner_id' => null,
'preview_media_id' => null,
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
'draft_version' => 'draftVersion',
'deep_link_code' => 'deepLinkCode',
'name' => 'name',
'page_id' => 'pageId',
'cms_page_version_id' => 'cmsPageVersionId',
'owner_id' => 'ownerId',
'preview_media_id' => 'previewMediaId',
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
'draft_version' => 'setDraftVersion',
'deep_link_code' => 'setDeepLinkCode',
'name' => 'setName',
'page_id' => 'setPageId',
'cms_page_version_id' => 'setCmsPageVersionId',
'owner_id' => 'setOwnerId',
'preview_media_id' => 'setPreviewMediaId',
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
'draft_version' => 'getDraftVersion',
'deep_link_code' => 'getDeepLinkCode',
'name' => 'getName',
'page_id' => 'getPageId',
'cms_page_version_id' => 'getCmsPageVersionId',
'owner_id' => 'getOwnerId',
'preview_media_id' => 'getPreviewMediaId',
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
        $this->container['draft_version'] = isset($data['draft_version']) ? $data['draft_version'] : null;
        $this->container['deep_link_code'] = isset($data['deep_link_code']) ? $data['deep_link_code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['page_id'] = isset($data['page_id']) ? $data['page_id'] : null;
        $this->container['cms_page_version_id'] = isset($data['cms_page_version_id']) ? $data['cms_page_version_id'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['preview_media_id'] = isset($data['preview_media_id']) ? $data['preview_media_id'] : null;
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

        if ($this->container['draft_version'] === null) {
            $invalidProperties[] = "'draft_version' can't be null";
        }
        if ($this->container['deep_link_code'] === null) {
            $invalidProperties[] = "'deep_link_code' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
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
     * Gets deep_link_code
     *
     * @return string
     */
    public function getDeepLinkCode()
    {
        return $this->container['deep_link_code'];
    }

    /**
     * Sets deep_link_code
     *
     * @param string $deep_link_code deep_link_code
     *
     * @return $this
     */
    public function setDeepLinkCode($deep_link_code)
    {
        $this->container['deep_link_code'] = $deep_link_code;

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
     * Gets owner_id
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string $owner_id owner_id
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets preview_media_id
     *
     * @return string
     */
    public function getPreviewMediaId()
    {
        return $this->container['preview_media_id'];
    }

    /**
     * Sets preview_media_id
     *
     * @param string $preview_media_id preview_media_id
     *
     * @return $this
     */
    public function setPreviewMediaId($preview_media_id)
    {
        $this->container['preview_media_id'] = $preview_media_id;

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
     * @return \Swagger\Client\Model\CmsPageDraftJsonApiRelationships
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \Swagger\Client\Model\CmsPageDraftJsonApiRelationships $relationships relationships
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