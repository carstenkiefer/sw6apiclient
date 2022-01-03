<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'locale_id' => 'string',
'avatar_id' => 'string',
'username' => 'string',
'first_name' => 'string',
'last_name' => 'string',
'title' => 'string',
'email' => 'string',
'active' => 'bool',
'admin' => 'bool',
'last_updated_password_at' => '\DateTime',
'time_zone' => 'string',
'custom_fields' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'locale' => '\Swagger\Client\Model\Locale',
'avatar_media' => '\Swagger\Client\Model\Media',
'media' => '\Swagger\Client\Model\Media',
'access_keys' => '\Swagger\Client\Model\UserAccessKey',
'configs' => '\Swagger\Client\Model\UserConfig',
'state_machine_history_entries' => '\Swagger\Client\Model\StateMachineHistory',
'import_export_log_entries' => '\Swagger\Client\Model\ImportExportLog',
'acl_roles' => '\Swagger\Client\Model\AclRole',
'recovery_user' => '\Swagger\Client\Model\UserRecovery',
'created_orders' => '\Swagger\Client\Model\Order',
'updated_orders' => '\Swagger\Client\Model\Order'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'locale_id' => null,
'avatar_id' => null,
'username' => null,
'first_name' => null,
'last_name' => null,
'title' => null,
'email' => null,
'active' => null,
'admin' => null,
'last_updated_password_at' => 'date-time',
'time_zone' => null,
'custom_fields' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'locale' => null,
'avatar_media' => null,
'media' => null,
'access_keys' => null,
'configs' => null,
'state_machine_history_entries' => null,
'import_export_log_entries' => null,
'acl_roles' => null,
'recovery_user' => null,
'created_orders' => null,
'updated_orders' => null    ];

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
'locale_id' => 'localeId',
'avatar_id' => 'avatarId',
'username' => 'username',
'first_name' => 'firstName',
'last_name' => 'lastName',
'title' => 'title',
'email' => 'email',
'active' => 'active',
'admin' => 'admin',
'last_updated_password_at' => 'lastUpdatedPasswordAt',
'time_zone' => 'timeZone',
'custom_fields' => 'customFields',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'locale' => 'locale',
'avatar_media' => 'avatarMedia',
'media' => 'media',
'access_keys' => 'accessKeys',
'configs' => 'configs',
'state_machine_history_entries' => 'stateMachineHistoryEntries',
'import_export_log_entries' => 'importExportLogEntries',
'acl_roles' => 'aclRoles',
'recovery_user' => 'recoveryUser',
'created_orders' => 'createdOrders',
'updated_orders' => 'updatedOrders'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'locale_id' => 'setLocaleId',
'avatar_id' => 'setAvatarId',
'username' => 'setUsername',
'first_name' => 'setFirstName',
'last_name' => 'setLastName',
'title' => 'setTitle',
'email' => 'setEmail',
'active' => 'setActive',
'admin' => 'setAdmin',
'last_updated_password_at' => 'setLastUpdatedPasswordAt',
'time_zone' => 'setTimeZone',
'custom_fields' => 'setCustomFields',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'locale' => 'setLocale',
'avatar_media' => 'setAvatarMedia',
'media' => 'setMedia',
'access_keys' => 'setAccessKeys',
'configs' => 'setConfigs',
'state_machine_history_entries' => 'setStateMachineHistoryEntries',
'import_export_log_entries' => 'setImportExportLogEntries',
'acl_roles' => 'setAclRoles',
'recovery_user' => 'setRecoveryUser',
'created_orders' => 'setCreatedOrders',
'updated_orders' => 'setUpdatedOrders'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'locale_id' => 'getLocaleId',
'avatar_id' => 'getAvatarId',
'username' => 'getUsername',
'first_name' => 'getFirstName',
'last_name' => 'getLastName',
'title' => 'getTitle',
'email' => 'getEmail',
'active' => 'getActive',
'admin' => 'getAdmin',
'last_updated_password_at' => 'getLastUpdatedPasswordAt',
'time_zone' => 'getTimeZone',
'custom_fields' => 'getCustomFields',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'locale' => 'getLocale',
'avatar_media' => 'getAvatarMedia',
'media' => 'getMedia',
'access_keys' => 'getAccessKeys',
'configs' => 'getConfigs',
'state_machine_history_entries' => 'getStateMachineHistoryEntries',
'import_export_log_entries' => 'getImportExportLogEntries',
'acl_roles' => 'getAclRoles',
'recovery_user' => 'getRecoveryUser',
'created_orders' => 'getCreatedOrders',
'updated_orders' => 'getUpdatedOrders'    ];

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
        $this->container['locale_id'] = isset($data['locale_id']) ? $data['locale_id'] : null;
        $this->container['avatar_id'] = isset($data['avatar_id']) ? $data['avatar_id'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['admin'] = isset($data['admin']) ? $data['admin'] : null;
        $this->container['last_updated_password_at'] = isset($data['last_updated_password_at']) ? $data['last_updated_password_at'] : null;
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['avatar_media'] = isset($data['avatar_media']) ? $data['avatar_media'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['access_keys'] = isset($data['access_keys']) ? $data['access_keys'] : null;
        $this->container['configs'] = isset($data['configs']) ? $data['configs'] : null;
        $this->container['state_machine_history_entries'] = isset($data['state_machine_history_entries']) ? $data['state_machine_history_entries'] : null;
        $this->container['import_export_log_entries'] = isset($data['import_export_log_entries']) ? $data['import_export_log_entries'] : null;
        $this->container['acl_roles'] = isset($data['acl_roles']) ? $data['acl_roles'] : null;
        $this->container['recovery_user'] = isset($data['recovery_user']) ? $data['recovery_user'] : null;
        $this->container['created_orders'] = isset($data['created_orders']) ? $data['created_orders'] : null;
        $this->container['updated_orders'] = isset($data['updated_orders']) ? $data['updated_orders'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['locale_id'] === null) {
            $invalidProperties[] = "'locale_id' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['time_zone'] === null) {
            $invalidProperties[] = "'time_zone' can't be null";
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
     * Gets locale_id
     *
     * @return string
     */
    public function getLocaleId()
    {
        return $this->container['locale_id'];
    }

    /**
     * Sets locale_id
     *
     * @param string $locale_id locale_id
     *
     * @return $this
     */
    public function setLocaleId($locale_id)
    {
        $this->container['locale_id'] = $locale_id;

        return $this;
    }

    /**
     * Gets avatar_id
     *
     * @return string
     */
    public function getAvatarId()
    {
        return $this->container['avatar_id'];
    }

    /**
     * Sets avatar_id
     *
     * @param string $avatar_id avatar_id
     *
     * @return $this
     */
    public function setAvatarId($avatar_id)
    {
        $this->container['avatar_id'] = $avatar_id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * Gets admin
     *
     * @return bool
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin
     *
     * @param bool $admin admin
     *
     * @return $this
     */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;

        return $this;
    }

    /**
     * Gets last_updated_password_at
     *
     * @return \DateTime
     */
    public function getLastUpdatedPasswordAt()
    {
        return $this->container['last_updated_password_at'];
    }

    /**
     * Sets last_updated_password_at
     *
     * @param \DateTime $last_updated_password_at last_updated_password_at
     *
     * @return $this
     */
    public function setLastUpdatedPasswordAt($last_updated_password_at)
    {
        $this->container['last_updated_password_at'] = $last_updated_password_at;

        return $this;
    }

    /**
     * Gets time_zone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string $time_zone time_zone
     *
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

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
     * Gets locale
     *
     * @return \Swagger\Client\Model\Locale
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param \Swagger\Client\Model\Locale $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets avatar_media
     *
     * @return \Swagger\Client\Model\Media
     */
    public function getAvatarMedia()
    {
        return $this->container['avatar_media'];
    }

    /**
     * Sets avatar_media
     *
     * @param \Swagger\Client\Model\Media $avatar_media avatar_media
     *
     * @return $this
     */
    public function setAvatarMedia($avatar_media)
    {
        $this->container['avatar_media'] = $avatar_media;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \Swagger\Client\Model\Media
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \Swagger\Client\Model\Media $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets access_keys
     *
     * @return \Swagger\Client\Model\UserAccessKey
     */
    public function getAccessKeys()
    {
        return $this->container['access_keys'];
    }

    /**
     * Sets access_keys
     *
     * @param \Swagger\Client\Model\UserAccessKey $access_keys access_keys
     *
     * @return $this
     */
    public function setAccessKeys($access_keys)
    {
        $this->container['access_keys'] = $access_keys;

        return $this;
    }

    /**
     * Gets configs
     *
     * @return \Swagger\Client\Model\UserConfig
     */
    public function getConfigs()
    {
        return $this->container['configs'];
    }

    /**
     * Sets configs
     *
     * @param \Swagger\Client\Model\UserConfig $configs configs
     *
     * @return $this
     */
    public function setConfigs($configs)
    {
        $this->container['configs'] = $configs;

        return $this;
    }

    /**
     * Gets state_machine_history_entries
     *
     * @return \Swagger\Client\Model\StateMachineHistory
     */
    public function getStateMachineHistoryEntries()
    {
        return $this->container['state_machine_history_entries'];
    }

    /**
     * Sets state_machine_history_entries
     *
     * @param \Swagger\Client\Model\StateMachineHistory $state_machine_history_entries state_machine_history_entries
     *
     * @return $this
     */
    public function setStateMachineHistoryEntries($state_machine_history_entries)
    {
        $this->container['state_machine_history_entries'] = $state_machine_history_entries;

        return $this;
    }

    /**
     * Gets import_export_log_entries
     *
     * @return \Swagger\Client\Model\ImportExportLog
     */
    public function getImportExportLogEntries()
    {
        return $this->container['import_export_log_entries'];
    }

    /**
     * Sets import_export_log_entries
     *
     * @param \Swagger\Client\Model\ImportExportLog $import_export_log_entries import_export_log_entries
     *
     * @return $this
     */
    public function setImportExportLogEntries($import_export_log_entries)
    {
        $this->container['import_export_log_entries'] = $import_export_log_entries;

        return $this;
    }

    /**
     * Gets acl_roles
     *
     * @return \Swagger\Client\Model\AclRole
     */
    public function getAclRoles()
    {
        return $this->container['acl_roles'];
    }

    /**
     * Sets acl_roles
     *
     * @param \Swagger\Client\Model\AclRole $acl_roles acl_roles
     *
     * @return $this
     */
    public function setAclRoles($acl_roles)
    {
        $this->container['acl_roles'] = $acl_roles;

        return $this;
    }

    /**
     * Gets recovery_user
     *
     * @return \Swagger\Client\Model\UserRecovery
     */
    public function getRecoveryUser()
    {
        return $this->container['recovery_user'];
    }

    /**
     * Sets recovery_user
     *
     * @param \Swagger\Client\Model\UserRecovery $recovery_user recovery_user
     *
     * @return $this
     */
    public function setRecoveryUser($recovery_user)
    {
        $this->container['recovery_user'] = $recovery_user;

        return $this;
    }

    /**
     * Gets created_orders
     *
     * @return \Swagger\Client\Model\Order
     */
    public function getCreatedOrders()
    {
        return $this->container['created_orders'];
    }

    /**
     * Sets created_orders
     *
     * @param \Swagger\Client\Model\Order $created_orders created_orders
     *
     * @return $this
     */
    public function setCreatedOrders($created_orders)
    {
        $this->container['created_orders'] = $created_orders;

        return $this;
    }

    /**
     * Gets updated_orders
     *
     * @return \Swagger\Client\Model\Order
     */
    public function getUpdatedOrders()
    {
        return $this->container['updated_orders'];
    }

    /**
     * Sets updated_orders
     *
     * @param \Swagger\Client\Model\Order $updated_orders updated_orders
     *
     * @return $this
     */
    public function setUpdatedOrders($updated_orders)
    {
        $this->container['updated_orders'] = $updated_orders;

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
