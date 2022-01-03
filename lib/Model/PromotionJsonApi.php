<?php
/**
 * PromotionJsonApi
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
 * PromotionJsonApi Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PromotionJsonApi extends Resource 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PromotionJsonApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'name' => 'string',
'active' => 'bool',
'valid_from' => '\DateTime',
'valid_until' => '\DateTime',
'max_redemptions_global' => 'int',
'max_redemptions_per_customer' => 'int',
'exclusive' => 'bool',
'code' => 'string',
'use_codes' => 'bool',
'use_individual_codes' => 'bool',
'individual_code_pattern' => 'string',
'use_set_groups' => 'bool',
'customer_restriction' => 'bool',
'prevent_combination' => 'bool',
'order_count' => 'int',
'orders_per_customer_count' => 'object',
'exclusion_ids' => 'string[]',
'custom_fields' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'translated' => 'object',
'relationships' => '\Swagger\Client\Model\PromotionJsonApiRelationships'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'active' => null,
'valid_from' => 'date-time',
'valid_until' => 'date-time',
'max_redemptions_global' => 'int64',
'max_redemptions_per_customer' => 'int64',
'exclusive' => null,
'code' => null,
'use_codes' => null,
'use_individual_codes' => null,
'individual_code_pattern' => null,
'use_set_groups' => null,
'customer_restriction' => null,
'prevent_combination' => null,
'order_count' => 'int64',
'orders_per_customer_count' => null,
'exclusion_ids' => null,
'custom_fields' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'translated' => null,
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
'name' => 'name',
'active' => 'active',
'valid_from' => 'validFrom',
'valid_until' => 'validUntil',
'max_redemptions_global' => 'maxRedemptionsGlobal',
'max_redemptions_per_customer' => 'maxRedemptionsPerCustomer',
'exclusive' => 'exclusive',
'code' => 'code',
'use_codes' => 'useCodes',
'use_individual_codes' => 'useIndividualCodes',
'individual_code_pattern' => 'individualCodePattern',
'use_set_groups' => 'useSetGroups',
'customer_restriction' => 'customerRestriction',
'prevent_combination' => 'preventCombination',
'order_count' => 'orderCount',
'orders_per_customer_count' => 'ordersPerCustomerCount',
'exclusion_ids' => 'exclusionIds',
'custom_fields' => 'customFields',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'translated' => 'translated',
'relationships' => 'relationships'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'active' => 'setActive',
'valid_from' => 'setValidFrom',
'valid_until' => 'setValidUntil',
'max_redemptions_global' => 'setMaxRedemptionsGlobal',
'max_redemptions_per_customer' => 'setMaxRedemptionsPerCustomer',
'exclusive' => 'setExclusive',
'code' => 'setCode',
'use_codes' => 'setUseCodes',
'use_individual_codes' => 'setUseIndividualCodes',
'individual_code_pattern' => 'setIndividualCodePattern',
'use_set_groups' => 'setUseSetGroups',
'customer_restriction' => 'setCustomerRestriction',
'prevent_combination' => 'setPreventCombination',
'order_count' => 'setOrderCount',
'orders_per_customer_count' => 'setOrdersPerCustomerCount',
'exclusion_ids' => 'setExclusionIds',
'custom_fields' => 'setCustomFields',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'translated' => 'setTranslated',
'relationships' => 'setRelationships'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'active' => 'getActive',
'valid_from' => 'getValidFrom',
'valid_until' => 'getValidUntil',
'max_redemptions_global' => 'getMaxRedemptionsGlobal',
'max_redemptions_per_customer' => 'getMaxRedemptionsPerCustomer',
'exclusive' => 'getExclusive',
'code' => 'getCode',
'use_codes' => 'getUseCodes',
'use_individual_codes' => 'getUseIndividualCodes',
'individual_code_pattern' => 'getIndividualCodePattern',
'use_set_groups' => 'getUseSetGroups',
'customer_restriction' => 'getCustomerRestriction',
'prevent_combination' => 'getPreventCombination',
'order_count' => 'getOrderCount',
'orders_per_customer_count' => 'getOrdersPerCustomerCount',
'exclusion_ids' => 'getExclusionIds',
'custom_fields' => 'getCustomFields',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'translated' => 'getTranslated',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['valid_from'] = isset($data['valid_from']) ? $data['valid_from'] : null;
        $this->container['valid_until'] = isset($data['valid_until']) ? $data['valid_until'] : null;
        $this->container['max_redemptions_global'] = isset($data['max_redemptions_global']) ? $data['max_redemptions_global'] : null;
        $this->container['max_redemptions_per_customer'] = isset($data['max_redemptions_per_customer']) ? $data['max_redemptions_per_customer'] : null;
        $this->container['exclusive'] = isset($data['exclusive']) ? $data['exclusive'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['use_codes'] = isset($data['use_codes']) ? $data['use_codes'] : null;
        $this->container['use_individual_codes'] = isset($data['use_individual_codes']) ? $data['use_individual_codes'] : null;
        $this->container['individual_code_pattern'] = isset($data['individual_code_pattern']) ? $data['individual_code_pattern'] : null;
        $this->container['use_set_groups'] = isset($data['use_set_groups']) ? $data['use_set_groups'] : null;
        $this->container['customer_restriction'] = isset($data['customer_restriction']) ? $data['customer_restriction'] : null;
        $this->container['prevent_combination'] = isset($data['prevent_combination']) ? $data['prevent_combination'] : null;
        $this->container['order_count'] = isset($data['order_count']) ? $data['order_count'] : null;
        $this->container['orders_per_customer_count'] = isset($data['orders_per_customer_count']) ? $data['orders_per_customer_count'] : null;
        $this->container['exclusion_ids'] = isset($data['exclusion_ids']) ? $data['exclusion_ids'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['translated'] = isset($data['translated']) ? $data['translated'] : null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['exclusive'] === null) {
            $invalidProperties[] = "'exclusive' can't be null";
        }
        if ($this->container['use_codes'] === null) {
            $invalidProperties[] = "'use_codes' can't be null";
        }
        if ($this->container['use_individual_codes'] === null) {
            $invalidProperties[] = "'use_individual_codes' can't be null";
        }
        if ($this->container['use_set_groups'] === null) {
            $invalidProperties[] = "'use_set_groups' can't be null";
        }
        if ($this->container['prevent_combination'] === null) {
            $invalidProperties[] = "'prevent_combination' can't be null";
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
     * Gets valid_from
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->container['valid_from'];
    }

    /**
     * Sets valid_from
     *
     * @param \DateTime $valid_from valid_from
     *
     * @return $this
     */
    public function setValidFrom($valid_from)
    {
        $this->container['valid_from'] = $valid_from;

        return $this;
    }

    /**
     * Gets valid_until
     *
     * @return \DateTime
     */
    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }

    /**
     * Sets valid_until
     *
     * @param \DateTime $valid_until valid_until
     *
     * @return $this
     */
    public function setValidUntil($valid_until)
    {
        $this->container['valid_until'] = $valid_until;

        return $this;
    }

    /**
     * Gets max_redemptions_global
     *
     * @return int
     */
    public function getMaxRedemptionsGlobal()
    {
        return $this->container['max_redemptions_global'];
    }

    /**
     * Sets max_redemptions_global
     *
     * @param int $max_redemptions_global max_redemptions_global
     *
     * @return $this
     */
    public function setMaxRedemptionsGlobal($max_redemptions_global)
    {
        $this->container['max_redemptions_global'] = $max_redemptions_global;

        return $this;
    }

    /**
     * Gets max_redemptions_per_customer
     *
     * @return int
     */
    public function getMaxRedemptionsPerCustomer()
    {
        return $this->container['max_redemptions_per_customer'];
    }

    /**
     * Sets max_redemptions_per_customer
     *
     * @param int $max_redemptions_per_customer max_redemptions_per_customer
     *
     * @return $this
     */
    public function setMaxRedemptionsPerCustomer($max_redemptions_per_customer)
    {
        $this->container['max_redemptions_per_customer'] = $max_redemptions_per_customer;

        return $this;
    }

    /**
     * Gets exclusive
     *
     * @return bool
     */
    public function getExclusive()
    {
        return $this->container['exclusive'];
    }

    /**
     * Sets exclusive
     *
     * @param bool $exclusive exclusive
     *
     * @return $this
     */
    public function setExclusive($exclusive)
    {
        $this->container['exclusive'] = $exclusive;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets use_codes
     *
     * @return bool
     */
    public function getUseCodes()
    {
        return $this->container['use_codes'];
    }

    /**
     * Sets use_codes
     *
     * @param bool $use_codes use_codes
     *
     * @return $this
     */
    public function setUseCodes($use_codes)
    {
        $this->container['use_codes'] = $use_codes;

        return $this;
    }

    /**
     * Gets use_individual_codes
     *
     * @return bool
     */
    public function getUseIndividualCodes()
    {
        return $this->container['use_individual_codes'];
    }

    /**
     * Sets use_individual_codes
     *
     * @param bool $use_individual_codes use_individual_codes
     *
     * @return $this
     */
    public function setUseIndividualCodes($use_individual_codes)
    {
        $this->container['use_individual_codes'] = $use_individual_codes;

        return $this;
    }

    /**
     * Gets individual_code_pattern
     *
     * @return string
     */
    public function getIndividualCodePattern()
    {
        return $this->container['individual_code_pattern'];
    }

    /**
     * Sets individual_code_pattern
     *
     * @param string $individual_code_pattern individual_code_pattern
     *
     * @return $this
     */
    public function setIndividualCodePattern($individual_code_pattern)
    {
        $this->container['individual_code_pattern'] = $individual_code_pattern;

        return $this;
    }

    /**
     * Gets use_set_groups
     *
     * @return bool
     */
    public function getUseSetGroups()
    {
        return $this->container['use_set_groups'];
    }

    /**
     * Sets use_set_groups
     *
     * @param bool $use_set_groups use_set_groups
     *
     * @return $this
     */
    public function setUseSetGroups($use_set_groups)
    {
        $this->container['use_set_groups'] = $use_set_groups;

        return $this;
    }

    /**
     * Gets customer_restriction
     *
     * @return bool
     */
    public function getCustomerRestriction()
    {
        return $this->container['customer_restriction'];
    }

    /**
     * Sets customer_restriction
     *
     * @param bool $customer_restriction customer_restriction
     *
     * @return $this
     */
    public function setCustomerRestriction($customer_restriction)
    {
        $this->container['customer_restriction'] = $customer_restriction;

        return $this;
    }

    /**
     * Gets prevent_combination
     *
     * @return bool
     */
    public function getPreventCombination()
    {
        return $this->container['prevent_combination'];
    }

    /**
     * Sets prevent_combination
     *
     * @param bool $prevent_combination prevent_combination
     *
     * @return $this
     */
    public function setPreventCombination($prevent_combination)
    {
        $this->container['prevent_combination'] = $prevent_combination;

        return $this;
    }

    /**
     * Gets order_count
     *
     * @return int
     */
    public function getOrderCount()
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     *
     * @param int $order_count order_count
     *
     * @return $this
     */
    public function setOrderCount($order_count)
    {
        $this->container['order_count'] = $order_count;

        return $this;
    }

    /**
     * Gets orders_per_customer_count
     *
     * @return object
     */
    public function getOrdersPerCustomerCount()
    {
        return $this->container['orders_per_customer_count'];
    }

    /**
     * Sets orders_per_customer_count
     *
     * @param object $orders_per_customer_count orders_per_customer_count
     *
     * @return $this
     */
    public function setOrdersPerCustomerCount($orders_per_customer_count)
    {
        $this->container['orders_per_customer_count'] = $orders_per_customer_count;

        return $this;
    }

    /**
     * Gets exclusion_ids
     *
     * @return string[]
     */
    public function getExclusionIds()
    {
        return $this->container['exclusion_ids'];
    }

    /**
     * Sets exclusion_ids
     *
     * @param string[] $exclusion_ids exclusion_ids
     *
     * @return $this
     */
    public function setExclusionIds($exclusion_ids)
    {
        $this->container['exclusion_ids'] = $exclusion_ids;

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
     * Gets relationships
     *
     * @return \Swagger\Client\Model\PromotionJsonApiRelationships
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \Swagger\Client\Model\PromotionJsonApiRelationships $relationships relationships
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