<?php
/**
 * SwagCmsExtensionsForm
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
 * SwagCmsExtensionsForm Class Doc Comment
 *
 * @category Class
 * @description Added since version:
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SwagCmsExtensionsForm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SwagCmsExtensionsForm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'cms_slot_id' => 'string',
'cms_slot_version_id' => 'string',
'is_template' => 'bool',
'technical_name' => 'string',
'title' => 'string',
'success_message' => 'string',
'receivers' => 'object',
'mail_template_id' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'translated' => 'object',
'groups' => '\Swagger\Client\Model\SwagCmsExtensionsFormGroup',
'cms_slot' => '\Swagger\Client\Model\CmsSlot',
'mail_template' => '\Swagger\Client\Model\MailTemplate'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'cms_slot_id' => null,
'cms_slot_version_id' => null,
'is_template' => null,
'technical_name' => null,
'title' => null,
'success_message' => null,
'receivers' => null,
'mail_template_id' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'translated' => null,
'groups' => null,
'cms_slot' => null,
'mail_template' => null    ];

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
'cms_slot_id' => 'cmsSlotId',
'cms_slot_version_id' => 'cmsSlotVersionId',
'is_template' => 'isTemplate',
'technical_name' => 'technicalName',
'title' => 'title',
'success_message' => 'successMessage',
'receivers' => 'receivers',
'mail_template_id' => 'mailTemplateId',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'translated' => 'translated',
'groups' => 'groups',
'cms_slot' => 'cmsSlot',
'mail_template' => 'mailTemplate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'cms_slot_id' => 'setCmsSlotId',
'cms_slot_version_id' => 'setCmsSlotVersionId',
'is_template' => 'setIsTemplate',
'technical_name' => 'setTechnicalName',
'title' => 'setTitle',
'success_message' => 'setSuccessMessage',
'receivers' => 'setReceivers',
'mail_template_id' => 'setMailTemplateId',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'translated' => 'setTranslated',
'groups' => 'setGroups',
'cms_slot' => 'setCmsSlot',
'mail_template' => 'setMailTemplate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'cms_slot_id' => 'getCmsSlotId',
'cms_slot_version_id' => 'getCmsSlotVersionId',
'is_template' => 'getIsTemplate',
'technical_name' => 'getTechnicalName',
'title' => 'getTitle',
'success_message' => 'getSuccessMessage',
'receivers' => 'getReceivers',
'mail_template_id' => 'getMailTemplateId',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'translated' => 'getTranslated',
'groups' => 'getGroups',
'cms_slot' => 'getCmsSlot',
'mail_template' => 'getMailTemplate'    ];

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
        $this->container['cms_slot_id'] = isset($data['cms_slot_id']) ? $data['cms_slot_id'] : null;
        $this->container['cms_slot_version_id'] = isset($data['cms_slot_version_id']) ? $data['cms_slot_version_id'] : null;
        $this->container['is_template'] = isset($data['is_template']) ? $data['is_template'] : null;
        $this->container['technical_name'] = isset($data['technical_name']) ? $data['technical_name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['success_message'] = isset($data['success_message']) ? $data['success_message'] : null;
        $this->container['receivers'] = isset($data['receivers']) ? $data['receivers'] : null;
        $this->container['mail_template_id'] = isset($data['mail_template_id']) ? $data['mail_template_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['translated'] = isset($data['translated']) ? $data['translated'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['cms_slot'] = isset($data['cms_slot']) ? $data['cms_slot'] : null;
        $this->container['mail_template'] = isset($data['mail_template']) ? $data['mail_template'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_template'] === null) {
            $invalidProperties[] = "'is_template' can't be null";
        }
        if ($this->container['technical_name'] === null) {
            $invalidProperties[] = "'technical_name' can't be null";
        }
        if ($this->container['mail_template_id'] === null) {
            $invalidProperties[] = "'mail_template_id' can't be null";
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
     * Gets cms_slot_id
     *
     * @return string
     */
    public function getCmsSlotId()
    {
        return $this->container['cms_slot_id'];
    }

    /**
     * Sets cms_slot_id
     *
     * @param string $cms_slot_id cms_slot_id
     *
     * @return $this
     */
    public function setCmsSlotId($cms_slot_id)
    {
        $this->container['cms_slot_id'] = $cms_slot_id;

        return $this;
    }

    /**
     * Gets cms_slot_version_id
     *
     * @return string
     */
    public function getCmsSlotVersionId()
    {
        return $this->container['cms_slot_version_id'];
    }

    /**
     * Sets cms_slot_version_id
     *
     * @param string $cms_slot_version_id cms_slot_version_id
     *
     * @return $this
     */
    public function setCmsSlotVersionId($cms_slot_version_id)
    {
        $this->container['cms_slot_version_id'] = $cms_slot_version_id;

        return $this;
    }

    /**
     * Gets is_template
     *
     * @return bool
     */
    public function getIsTemplate()
    {
        return $this->container['is_template'];
    }

    /**
     * Sets is_template
     *
     * @param bool $is_template is_template
     *
     * @return $this
     */
    public function setIsTemplate($is_template)
    {
        $this->container['is_template'] = $is_template;

        return $this;
    }

    /**
     * Gets technical_name
     *
     * @return string
     */
    public function getTechnicalName()
    {
        return $this->container['technical_name'];
    }

    /**
     * Sets technical_name
     *
     * @param string $technical_name technical_name
     *
     * @return $this
     */
    public function setTechnicalName($technical_name)
    {
        $this->container['technical_name'] = $technical_name;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets success_message
     *
     * @return string
     */
    public function getSuccessMessage()
    {
        return $this->container['success_message'];
    }

    /**
     * Sets success_message
     *
     * @param string $success_message success_message
     *
     * @return $this
     */
    public function setSuccessMessage($success_message)
    {
        $this->container['success_message'] = $success_message;

        return $this;
    }

    /**
     * Gets receivers
     *
     * @return object
     */
    public function getReceivers()
    {
        return $this->container['receivers'];
    }

    /**
     * Sets receivers
     *
     * @param object $receivers receivers
     *
     * @return $this
     */
    public function setReceivers($receivers)
    {
        $this->container['receivers'] = $receivers;

        return $this;
    }

    /**
     * Gets mail_template_id
     *
     * @return string
     */
    public function getMailTemplateId()
    {
        return $this->container['mail_template_id'];
    }

    /**
     * Sets mail_template_id
     *
     * @param string $mail_template_id mail_template_id
     *
     * @return $this
     */
    public function setMailTemplateId($mail_template_id)
    {
        $this->container['mail_template_id'] = $mail_template_id;

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
     * Gets translated
     *
     * @return object
     */
    public function getTranslated()
    {
        return $this->container['translated'];
    }

    /**
     * Sets translated
     *
     * @param object $translated translated
     *
     * @return $this
     */
    public function setTranslated($translated)
    {
        $this->container['translated'] = $translated;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \Swagger\Client\Model\SwagCmsExtensionsFormGroup
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \Swagger\Client\Model\SwagCmsExtensionsFormGroup $groups groups
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets cms_slot
     *
     * @return \Swagger\Client\Model\CmsSlot
     */
    public function getCmsSlot()
    {
        return $this->container['cms_slot'];
    }

    /**
     * Sets cms_slot
     *
     * @param \Swagger\Client\Model\CmsSlot $cms_slot cms_slot
     *
     * @return $this
     */
    public function setCmsSlot($cms_slot)
    {
        $this->container['cms_slot'] = $cms_slot;

        return $this;
    }

    /**
     * Gets mail_template
     *
     * @return \Swagger\Client\Model\MailTemplate
     */
    public function getMailTemplate()
    {
        return $this->container['mail_template'];
    }

    /**
     * Sets mail_template
     *
     * @param \Swagger\Client\Model\MailTemplate $mail_template mail_template
     *
     * @return $this
     */
    public function setMailTemplate($mail_template)
    {
        $this->container['mail_template'] = $mail_template;

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
