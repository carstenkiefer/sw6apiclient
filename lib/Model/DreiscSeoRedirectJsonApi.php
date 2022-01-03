<?php
/**
 * DreiscSeoRedirectJsonApi
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
 * DreiscSeoRedirectJsonApi Class Doc Comment
 *
 * @category Class
 * @description Added since version:
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DreiscSeoRedirectJsonApi extends Resource 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DreiscSeoRedirectJsonApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'active' => 'bool',
'redirect_http_status_code' => 'string',
'source_type' => 'string',
'has_source_sales_channel_domain_restriction' => 'bool',
'source_sales_channel_domain_restriction_ids' => 'object[]',
'source_sales_channel_domain_id' => 'string',
'source_path' => 'string',
'source_product_id' => 'string',
'source_product_version_id' => 'string',
'source_category_id' => 'string',
'source_category_version_id' => 'string',
'redirect_type' => 'string',
'redirect_url' => 'string',
'redirect_sales_channel_domain_id' => 'string',
'redirect_path' => 'string',
'redirect_product_id' => 'string',
'redirect_product_version_id' => 'string',
'redirect_category_id' => 'string',
'redirect_category_version_id' => 'string',
'has_deviating_redirect_sales_channel_domain' => 'bool',
'deviating_redirect_sales_channel_domain_id' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'relationships' => '\Swagger\Client\Model\DreiscSeoRedirectJsonApiRelationships'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'active' => null,
'redirect_http_status_code' => null,
'source_type' => null,
'has_source_sales_channel_domain_restriction' => null,
'source_sales_channel_domain_restriction_ids' => null,
'source_sales_channel_domain_id' => null,
'source_path' => null,
'source_product_id' => null,
'source_product_version_id' => null,
'source_category_id' => null,
'source_category_version_id' => null,
'redirect_type' => null,
'redirect_url' => null,
'redirect_sales_channel_domain_id' => null,
'redirect_path' => null,
'redirect_product_id' => null,
'redirect_product_version_id' => null,
'redirect_category_id' => null,
'redirect_category_version_id' => null,
'has_deviating_redirect_sales_channel_domain' => null,
'deviating_redirect_sales_channel_domain_id' => null,
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
'active' => 'active',
'redirect_http_status_code' => 'redirectHttpStatusCode',
'source_type' => 'sourceType',
'has_source_sales_channel_domain_restriction' => 'hasSourceSalesChannelDomainRestriction',
'source_sales_channel_domain_restriction_ids' => 'sourceSalesChannelDomainRestrictionIds',
'source_sales_channel_domain_id' => 'sourceSalesChannelDomainId',
'source_path' => 'sourcePath',
'source_product_id' => 'sourceProductId',
'source_product_version_id' => 'sourceProductVersionId',
'source_category_id' => 'sourceCategoryId',
'source_category_version_id' => 'sourceCategoryVersionId',
'redirect_type' => 'redirectType',
'redirect_url' => 'redirectUrl',
'redirect_sales_channel_domain_id' => 'redirectSalesChannelDomainId',
'redirect_path' => 'redirectPath',
'redirect_product_id' => 'redirectProductId',
'redirect_product_version_id' => 'redirectProductVersionId',
'redirect_category_id' => 'redirectCategoryId',
'redirect_category_version_id' => 'redirectCategoryVersionId',
'has_deviating_redirect_sales_channel_domain' => 'hasDeviatingRedirectSalesChannelDomain',
'deviating_redirect_sales_channel_domain_id' => 'deviatingRedirectSalesChannelDomainId',
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
'active' => 'setActive',
'redirect_http_status_code' => 'setRedirectHttpStatusCode',
'source_type' => 'setSourceType',
'has_source_sales_channel_domain_restriction' => 'setHasSourceSalesChannelDomainRestriction',
'source_sales_channel_domain_restriction_ids' => 'setSourceSalesChannelDomainRestrictionIds',
'source_sales_channel_domain_id' => 'setSourceSalesChannelDomainId',
'source_path' => 'setSourcePath',
'source_product_id' => 'setSourceProductId',
'source_product_version_id' => 'setSourceProductVersionId',
'source_category_id' => 'setSourceCategoryId',
'source_category_version_id' => 'setSourceCategoryVersionId',
'redirect_type' => 'setRedirectType',
'redirect_url' => 'setRedirectUrl',
'redirect_sales_channel_domain_id' => 'setRedirectSalesChannelDomainId',
'redirect_path' => 'setRedirectPath',
'redirect_product_id' => 'setRedirectProductId',
'redirect_product_version_id' => 'setRedirectProductVersionId',
'redirect_category_id' => 'setRedirectCategoryId',
'redirect_category_version_id' => 'setRedirectCategoryVersionId',
'has_deviating_redirect_sales_channel_domain' => 'setHasDeviatingRedirectSalesChannelDomain',
'deviating_redirect_sales_channel_domain_id' => 'setDeviatingRedirectSalesChannelDomainId',
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
'active' => 'getActive',
'redirect_http_status_code' => 'getRedirectHttpStatusCode',
'source_type' => 'getSourceType',
'has_source_sales_channel_domain_restriction' => 'getHasSourceSalesChannelDomainRestriction',
'source_sales_channel_domain_restriction_ids' => 'getSourceSalesChannelDomainRestrictionIds',
'source_sales_channel_domain_id' => 'getSourceSalesChannelDomainId',
'source_path' => 'getSourcePath',
'source_product_id' => 'getSourceProductId',
'source_product_version_id' => 'getSourceProductVersionId',
'source_category_id' => 'getSourceCategoryId',
'source_category_version_id' => 'getSourceCategoryVersionId',
'redirect_type' => 'getRedirectType',
'redirect_url' => 'getRedirectUrl',
'redirect_sales_channel_domain_id' => 'getRedirectSalesChannelDomainId',
'redirect_path' => 'getRedirectPath',
'redirect_product_id' => 'getRedirectProductId',
'redirect_product_version_id' => 'getRedirectProductVersionId',
'redirect_category_id' => 'getRedirectCategoryId',
'redirect_category_version_id' => 'getRedirectCategoryVersionId',
'has_deviating_redirect_sales_channel_domain' => 'getHasDeviatingRedirectSalesChannelDomain',
'deviating_redirect_sales_channel_domain_id' => 'getDeviatingRedirectSalesChannelDomainId',
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['redirect_http_status_code'] = isset($data['redirect_http_status_code']) ? $data['redirect_http_status_code'] : null;
        $this->container['source_type'] = isset($data['source_type']) ? $data['source_type'] : null;
        $this->container['has_source_sales_channel_domain_restriction'] = isset($data['has_source_sales_channel_domain_restriction']) ? $data['has_source_sales_channel_domain_restriction'] : null;
        $this->container['source_sales_channel_domain_restriction_ids'] = isset($data['source_sales_channel_domain_restriction_ids']) ? $data['source_sales_channel_domain_restriction_ids'] : null;
        $this->container['source_sales_channel_domain_id'] = isset($data['source_sales_channel_domain_id']) ? $data['source_sales_channel_domain_id'] : null;
        $this->container['source_path'] = isset($data['source_path']) ? $data['source_path'] : null;
        $this->container['source_product_id'] = isset($data['source_product_id']) ? $data['source_product_id'] : null;
        $this->container['source_product_version_id'] = isset($data['source_product_version_id']) ? $data['source_product_version_id'] : null;
        $this->container['source_category_id'] = isset($data['source_category_id']) ? $data['source_category_id'] : null;
        $this->container['source_category_version_id'] = isset($data['source_category_version_id']) ? $data['source_category_version_id'] : null;
        $this->container['redirect_type'] = isset($data['redirect_type']) ? $data['redirect_type'] : null;
        $this->container['redirect_url'] = isset($data['redirect_url']) ? $data['redirect_url'] : null;
        $this->container['redirect_sales_channel_domain_id'] = isset($data['redirect_sales_channel_domain_id']) ? $data['redirect_sales_channel_domain_id'] : null;
        $this->container['redirect_path'] = isset($data['redirect_path']) ? $data['redirect_path'] : null;
        $this->container['redirect_product_id'] = isset($data['redirect_product_id']) ? $data['redirect_product_id'] : null;
        $this->container['redirect_product_version_id'] = isset($data['redirect_product_version_id']) ? $data['redirect_product_version_id'] : null;
        $this->container['redirect_category_id'] = isset($data['redirect_category_id']) ? $data['redirect_category_id'] : null;
        $this->container['redirect_category_version_id'] = isset($data['redirect_category_version_id']) ? $data['redirect_category_version_id'] : null;
        $this->container['has_deviating_redirect_sales_channel_domain'] = isset($data['has_deviating_redirect_sales_channel_domain']) ? $data['has_deviating_redirect_sales_channel_domain'] : null;
        $this->container['deviating_redirect_sales_channel_domain_id'] = isset($data['deviating_redirect_sales_channel_domain_id']) ? $data['deviating_redirect_sales_channel_domain_id'] : null;
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
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets redirect_http_status_code
     *
     * @return string
     */
    public function getRedirectHttpStatusCode()
    {
        return $this->container['redirect_http_status_code'];
    }

    /**
     * Sets redirect_http_status_code
     *
     * @param string $redirect_http_status_code redirect_http_status_code
     *
     * @return $this
     */
    public function setRedirectHttpStatusCode($redirect_http_status_code)
    {
        $this->container['redirect_http_status_code'] = $redirect_http_status_code;

        return $this;
    }

    /**
     * Gets source_type
     *
     * @return string
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type
     *
     * @param string $source_type source_type
     *
     * @return $this
     */
    public function setSourceType($source_type)
    {
        $this->container['source_type'] = $source_type;

        return $this;
    }

    /**
     * Gets has_source_sales_channel_domain_restriction
     *
     * @return bool
     */
    public function getHasSourceSalesChannelDomainRestriction()
    {
        return $this->container['has_source_sales_channel_domain_restriction'];
    }

    /**
     * Sets has_source_sales_channel_domain_restriction
     *
     * @param bool $has_source_sales_channel_domain_restriction has_source_sales_channel_domain_restriction
     *
     * @return $this
     */
    public function setHasSourceSalesChannelDomainRestriction($has_source_sales_channel_domain_restriction)
    {
        $this->container['has_source_sales_channel_domain_restriction'] = $has_source_sales_channel_domain_restriction;

        return $this;
    }

    /**
     * Gets source_sales_channel_domain_restriction_ids
     *
     * @return object[]
     */
    public function getSourceSalesChannelDomainRestrictionIds()
    {
        return $this->container['source_sales_channel_domain_restriction_ids'];
    }

    /**
     * Sets source_sales_channel_domain_restriction_ids
     *
     * @param object[] $source_sales_channel_domain_restriction_ids source_sales_channel_domain_restriction_ids
     *
     * @return $this
     */
    public function setSourceSalesChannelDomainRestrictionIds($source_sales_channel_domain_restriction_ids)
    {
        $this->container['source_sales_channel_domain_restriction_ids'] = $source_sales_channel_domain_restriction_ids;

        return $this;
    }

    /**
     * Gets source_sales_channel_domain_id
     *
     * @return string
     */
    public function getSourceSalesChannelDomainId()
    {
        return $this->container['source_sales_channel_domain_id'];
    }

    /**
     * Sets source_sales_channel_domain_id
     *
     * @param string $source_sales_channel_domain_id source_sales_channel_domain_id
     *
     * @return $this
     */
    public function setSourceSalesChannelDomainId($source_sales_channel_domain_id)
    {
        $this->container['source_sales_channel_domain_id'] = $source_sales_channel_domain_id;

        return $this;
    }

    /**
     * Gets source_path
     *
     * @return string
     */
    public function getSourcePath()
    {
        return $this->container['source_path'];
    }

    /**
     * Sets source_path
     *
     * @param string $source_path source_path
     *
     * @return $this
     */
    public function setSourcePath($source_path)
    {
        $this->container['source_path'] = $source_path;

        return $this;
    }

    /**
     * Gets source_product_id
     *
     * @return string
     */
    public function getSourceProductId()
    {
        return $this->container['source_product_id'];
    }

    /**
     * Sets source_product_id
     *
     * @param string $source_product_id source_product_id
     *
     * @return $this
     */
    public function setSourceProductId($source_product_id)
    {
        $this->container['source_product_id'] = $source_product_id;

        return $this;
    }

    /**
     * Gets source_product_version_id
     *
     * @return string
     */
    public function getSourceProductVersionId()
    {
        return $this->container['source_product_version_id'];
    }

    /**
     * Sets source_product_version_id
     *
     * @param string $source_product_version_id source_product_version_id
     *
     * @return $this
     */
    public function setSourceProductVersionId($source_product_version_id)
    {
        $this->container['source_product_version_id'] = $source_product_version_id;

        return $this;
    }

    /**
     * Gets source_category_id
     *
     * @return string
     */
    public function getSourceCategoryId()
    {
        return $this->container['source_category_id'];
    }

    /**
     * Sets source_category_id
     *
     * @param string $source_category_id source_category_id
     *
     * @return $this
     */
    public function setSourceCategoryId($source_category_id)
    {
        $this->container['source_category_id'] = $source_category_id;

        return $this;
    }

    /**
     * Gets source_category_version_id
     *
     * @return string
     */
    public function getSourceCategoryVersionId()
    {
        return $this->container['source_category_version_id'];
    }

    /**
     * Sets source_category_version_id
     *
     * @param string $source_category_version_id source_category_version_id
     *
     * @return $this
     */
    public function setSourceCategoryVersionId($source_category_version_id)
    {
        $this->container['source_category_version_id'] = $source_category_version_id;

        return $this;
    }

    /**
     * Gets redirect_type
     *
     * @return string
     */
    public function getRedirectType()
    {
        return $this->container['redirect_type'];
    }

    /**
     * Sets redirect_type
     *
     * @param string $redirect_type redirect_type
     *
     * @return $this
     */
    public function setRedirectType($redirect_type)
    {
        $this->container['redirect_type'] = $redirect_type;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string $redirect_url redirect_url
     *
     * @return $this
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets redirect_sales_channel_domain_id
     *
     * @return string
     */
    public function getRedirectSalesChannelDomainId()
    {
        return $this->container['redirect_sales_channel_domain_id'];
    }

    /**
     * Sets redirect_sales_channel_domain_id
     *
     * @param string $redirect_sales_channel_domain_id redirect_sales_channel_domain_id
     *
     * @return $this
     */
    public function setRedirectSalesChannelDomainId($redirect_sales_channel_domain_id)
    {
        $this->container['redirect_sales_channel_domain_id'] = $redirect_sales_channel_domain_id;

        return $this;
    }

    /**
     * Gets redirect_path
     *
     * @return string
     */
    public function getRedirectPath()
    {
        return $this->container['redirect_path'];
    }

    /**
     * Sets redirect_path
     *
     * @param string $redirect_path redirect_path
     *
     * @return $this
     */
    public function setRedirectPath($redirect_path)
    {
        $this->container['redirect_path'] = $redirect_path;

        return $this;
    }

    /**
     * Gets redirect_product_id
     *
     * @return string
     */
    public function getRedirectProductId()
    {
        return $this->container['redirect_product_id'];
    }

    /**
     * Sets redirect_product_id
     *
     * @param string $redirect_product_id redirect_product_id
     *
     * @return $this
     */
    public function setRedirectProductId($redirect_product_id)
    {
        $this->container['redirect_product_id'] = $redirect_product_id;

        return $this;
    }

    /**
     * Gets redirect_product_version_id
     *
     * @return string
     */
    public function getRedirectProductVersionId()
    {
        return $this->container['redirect_product_version_id'];
    }

    /**
     * Sets redirect_product_version_id
     *
     * @param string $redirect_product_version_id redirect_product_version_id
     *
     * @return $this
     */
    public function setRedirectProductVersionId($redirect_product_version_id)
    {
        $this->container['redirect_product_version_id'] = $redirect_product_version_id;

        return $this;
    }

    /**
     * Gets redirect_category_id
     *
     * @return string
     */
    public function getRedirectCategoryId()
    {
        return $this->container['redirect_category_id'];
    }

    /**
     * Sets redirect_category_id
     *
     * @param string $redirect_category_id redirect_category_id
     *
     * @return $this
     */
    public function setRedirectCategoryId($redirect_category_id)
    {
        $this->container['redirect_category_id'] = $redirect_category_id;

        return $this;
    }

    /**
     * Gets redirect_category_version_id
     *
     * @return string
     */
    public function getRedirectCategoryVersionId()
    {
        return $this->container['redirect_category_version_id'];
    }

    /**
     * Sets redirect_category_version_id
     *
     * @param string $redirect_category_version_id redirect_category_version_id
     *
     * @return $this
     */
    public function setRedirectCategoryVersionId($redirect_category_version_id)
    {
        $this->container['redirect_category_version_id'] = $redirect_category_version_id;

        return $this;
    }

    /**
     * Gets has_deviating_redirect_sales_channel_domain
     *
     * @return bool
     */
    public function getHasDeviatingRedirectSalesChannelDomain()
    {
        return $this->container['has_deviating_redirect_sales_channel_domain'];
    }

    /**
     * Sets has_deviating_redirect_sales_channel_domain
     *
     * @param bool $has_deviating_redirect_sales_channel_domain has_deviating_redirect_sales_channel_domain
     *
     * @return $this
     */
    public function setHasDeviatingRedirectSalesChannelDomain($has_deviating_redirect_sales_channel_domain)
    {
        $this->container['has_deviating_redirect_sales_channel_domain'] = $has_deviating_redirect_sales_channel_domain;

        return $this;
    }

    /**
     * Gets deviating_redirect_sales_channel_domain_id
     *
     * @return string
     */
    public function getDeviatingRedirectSalesChannelDomainId()
    {
        return $this->container['deviating_redirect_sales_channel_domain_id'];
    }

    /**
     * Sets deviating_redirect_sales_channel_domain_id
     *
     * @param string $deviating_redirect_sales_channel_domain_id deviating_redirect_sales_channel_domain_id
     *
     * @return $this
     */
    public function setDeviatingRedirectSalesChannelDomainId($deviating_redirect_sales_channel_domain_id)
    {
        $this->container['deviating_redirect_sales_channel_domain_id'] = $deviating_redirect_sales_channel_domain_id;

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
     * @return \Swagger\Client\Model\DreiscSeoRedirectJsonApiRelationships
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \Swagger\Client\Model\DreiscSeoRedirectJsonApiRelationships $relationships relationships
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
