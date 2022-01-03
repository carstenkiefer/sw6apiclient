<?php
/**
 * CmsSectionJsonApi
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
 * CmsSectionJsonApi Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CmsSectionJsonApi extends Resource 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CmsSectionJsonApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'position' => 'int',
'type' => 'string',
'locked' => 'bool',
'name' => 'string',
'sizing_mode' => 'string',
'mobile_behavior' => 'string',
'background_color' => 'string',
'background_media_id' => 'string',
'background_media_mode' => 'string',
'css_class' => 'string',
'page_id' => 'string',
'custom_fields' => 'object',
'version_id' => 'string',
'cms_page_version_id' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'relationships' => '\Swagger\Client\Model\CmsSectionJsonApiRelationships'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'position' => 'int64',
'type' => null,
'locked' => null,
'name' => null,
'sizing_mode' => null,
'mobile_behavior' => null,
'background_color' => null,
'background_media_id' => null,
'background_media_mode' => null,
'css_class' => null,
'page_id' => null,
'custom_fields' => null,
'version_id' => null,
'cms_page_version_id' => null,
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
'position' => 'position',
'type' => 'type',
'locked' => 'locked',
'name' => 'name',
'sizing_mode' => 'sizingMode',
'mobile_behavior' => 'mobileBehavior',
'background_color' => 'backgroundColor',
'background_media_id' => 'backgroundMediaId',
'background_media_mode' => 'backgroundMediaMode',
'css_class' => 'cssClass',
'page_id' => 'pageId',
'custom_fields' => 'customFields',
'version_id' => 'versionId',
'cms_page_version_id' => 'cmsPageVersionId',
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
'position' => 'setPosition',
'type' => 'setType',
'locked' => 'setLocked',
'name' => 'setName',
'sizing_mode' => 'setSizingMode',
'mobile_behavior' => 'setMobileBehavior',
'background_color' => 'setBackgroundColor',
'background_media_id' => 'setBackgroundMediaId',
'background_media_mode' => 'setBackgroundMediaMode',
'css_class' => 'setCssClass',
'page_id' => 'setPageId',
'custom_fields' => 'setCustomFields',
'version_id' => 'setVersionId',
'cms_page_version_id' => 'setCmsPageVersionId',
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
'position' => 'getPosition',
'type' => 'getType',
'locked' => 'getLocked',
'name' => 'getName',
'sizing_mode' => 'getSizingMode',
'mobile_behavior' => 'getMobileBehavior',
'background_color' => 'getBackgroundColor',
'background_media_id' => 'getBackgroundMediaId',
'background_media_mode' => 'getBackgroundMediaMode',
'css_class' => 'getCssClass',
'page_id' => 'getPageId',
'custom_fields' => 'getCustomFields',
'version_id' => 'getVersionId',
'cms_page_version_id' => 'getCmsPageVersionId',
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
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sizing_mode'] = isset($data['sizing_mode']) ? $data['sizing_mode'] : null;
        $this->container['mobile_behavior'] = isset($data['mobile_behavior']) ? $data['mobile_behavior'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['background_media_id'] = isset($data['background_media_id']) ? $data['background_media_id'] : null;
        $this->container['background_media_mode'] = isset($data['background_media_mode']) ? $data['background_media_mode'] : null;
        $this->container['css_class'] = isset($data['css_class']) ? $data['css_class'] : null;
        $this->container['page_id'] = isset($data['page_id']) ? $data['page_id'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['version_id'] = isset($data['version_id']) ? $data['version_id'] : null;
        $this->container['cms_page_version_id'] = isset($data['cms_page_version_id']) ? $data['cms_page_version_id'] : null;
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

        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return bool
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param bool $locked locked
     *
     * @return $this
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

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
     * Gets sizing_mode
     *
     * @return string
     */
    public function getSizingMode()
    {
        return $this->container['sizing_mode'];
    }

    /**
     * Sets sizing_mode
     *
     * @param string $sizing_mode sizing_mode
     *
     * @return $this
     */
    public function setSizingMode($sizing_mode)
    {
        $this->container['sizing_mode'] = $sizing_mode;

        return $this;
    }

    /**
     * Gets mobile_behavior
     *
     * @return string
     */
    public function getMobileBehavior()
    {
        return $this->container['mobile_behavior'];
    }

    /**
     * Sets mobile_behavior
     *
     * @param string $mobile_behavior mobile_behavior
     *
     * @return $this
     */
    public function setMobileBehavior($mobile_behavior)
    {
        $this->container['mobile_behavior'] = $mobile_behavior;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string $background_color background_color
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets background_media_id
     *
     * @return string
     */
    public function getBackgroundMediaId()
    {
        return $this->container['background_media_id'];
    }

    /**
     * Sets background_media_id
     *
     * @param string $background_media_id background_media_id
     *
     * @return $this
     */
    public function setBackgroundMediaId($background_media_id)
    {
        $this->container['background_media_id'] = $background_media_id;

        return $this;
    }

    /**
     * Gets background_media_mode
     *
     * @return string
     */
    public function getBackgroundMediaMode()
    {
        return $this->container['background_media_mode'];
    }

    /**
     * Sets background_media_mode
     *
     * @param string $background_media_mode background_media_mode
     *
     * @return $this
     */
    public function setBackgroundMediaMode($background_media_mode)
    {
        $this->container['background_media_mode'] = $background_media_mode;

        return $this;
    }

    /**
     * Gets css_class
     *
     * @return string
     */
    public function getCssClass()
    {
        return $this->container['css_class'];
    }

    /**
     * Sets css_class
     *
     * @param string $css_class css_class
     *
     * @return $this
     */
    public function setCssClass($css_class)
    {
        $this->container['css_class'] = $css_class;

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
     * Gets custom_fields
     *
     * @return object
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets version_id
     *
     * @return string
     */
    public function getVersionId()
    {
        return $this->container['version_id'];
    }

    /**
     * Sets version_id
     *
     * @param string $version_id version_id
     *
     * @return $this
     */
    public function setVersionId($version_id)
    {
        $this->container['version_id'] = $version_id;

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
     * @return \Swagger\Client\Model\CmsSectionJsonApiRelationships
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \Swagger\Client\Model\CmsSectionJsonApiRelationships $relationships relationships
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
