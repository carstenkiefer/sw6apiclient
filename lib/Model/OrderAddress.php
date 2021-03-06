<?php
/**
 * OrderAddress
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
 * OrderAddress Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'version_id' => 'string',
'country_id' => 'string',
'country_state_id' => 'string',
'order_id' => 'string',
'order_version_id' => 'string',
'salutation_id' => 'string',
'first_name' => 'string',
'last_name' => 'string',
'street' => 'string',
'zipcode' => 'string',
'city' => 'string',
'company' => 'string',
'department' => 'string',
'title' => 'string',
'vat_id' => 'string',
'phone_number' => 'string',
'additional_address_line1' => 'string',
'additional_address_line2' => 'string',
'custom_fields' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'country' => '\Swagger\Client\Model\Country',
'country_state' => '\Swagger\Client\Model\CountryState',
'order' => '\Swagger\Client\Model\Order',
'order_deliveries' => '\Swagger\Client\Model\OrderDelivery',
'salutation' => '\Swagger\Client\Model\Salutation'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'version_id' => null,
'country_id' => null,
'country_state_id' => null,
'order_id' => null,
'order_version_id' => null,
'salutation_id' => null,
'first_name' => null,
'last_name' => null,
'street' => null,
'zipcode' => null,
'city' => null,
'company' => null,
'department' => null,
'title' => null,
'vat_id' => null,
'phone_number' => null,
'additional_address_line1' => null,
'additional_address_line2' => null,
'custom_fields' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'country' => null,
'country_state' => null,
'order' => null,
'order_deliveries' => null,
'salutation' => null    ];

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
'version_id' => 'versionId',
'country_id' => 'countryId',
'country_state_id' => 'countryStateId',
'order_id' => 'orderId',
'order_version_id' => 'orderVersionId',
'salutation_id' => 'salutationId',
'first_name' => 'firstName',
'last_name' => 'lastName',
'street' => 'street',
'zipcode' => 'zipcode',
'city' => 'city',
'company' => 'company',
'department' => 'department',
'title' => 'title',
'vat_id' => 'vatId',
'phone_number' => 'phoneNumber',
'additional_address_line1' => 'additionalAddressLine1',
'additional_address_line2' => 'additionalAddressLine2',
'custom_fields' => 'customFields',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'country' => 'country',
'country_state' => 'countryState',
'order' => 'order',
'order_deliveries' => 'orderDeliveries',
'salutation' => 'salutation'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'version_id' => 'setVersionId',
'country_id' => 'setCountryId',
'country_state_id' => 'setCountryStateId',
'order_id' => 'setOrderId',
'order_version_id' => 'setOrderVersionId',
'salutation_id' => 'setSalutationId',
'first_name' => 'setFirstName',
'last_name' => 'setLastName',
'street' => 'setStreet',
'zipcode' => 'setZipcode',
'city' => 'setCity',
'company' => 'setCompany',
'department' => 'setDepartment',
'title' => 'setTitle',
'vat_id' => 'setVatId',
'phone_number' => 'setPhoneNumber',
'additional_address_line1' => 'setAdditionalAddressLine1',
'additional_address_line2' => 'setAdditionalAddressLine2',
'custom_fields' => 'setCustomFields',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'country' => 'setCountry',
'country_state' => 'setCountryState',
'order' => 'setOrder',
'order_deliveries' => 'setOrderDeliveries',
'salutation' => 'setSalutation'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'version_id' => 'getVersionId',
'country_id' => 'getCountryId',
'country_state_id' => 'getCountryStateId',
'order_id' => 'getOrderId',
'order_version_id' => 'getOrderVersionId',
'salutation_id' => 'getSalutationId',
'first_name' => 'getFirstName',
'last_name' => 'getLastName',
'street' => 'getStreet',
'zipcode' => 'getZipcode',
'city' => 'getCity',
'company' => 'getCompany',
'department' => 'getDepartment',
'title' => 'getTitle',
'vat_id' => 'getVatId',
'phone_number' => 'getPhoneNumber',
'additional_address_line1' => 'getAdditionalAddressLine1',
'additional_address_line2' => 'getAdditionalAddressLine2',
'custom_fields' => 'getCustomFields',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'country' => 'getCountry',
'country_state' => 'getCountryState',
'order' => 'getOrder',
'order_deliveries' => 'getOrderDeliveries',
'salutation' => 'getSalutation'    ];

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
        $this->container['version_id'] = isset($data['version_id']) ? $data['version_id'] : null;
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
        $this->container['country_state_id'] = isset($data['country_state_id']) ? $data['country_state_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['order_version_id'] = isset($data['order_version_id']) ? $data['order_version_id'] : null;
        $this->container['salutation_id'] = isset($data['salutation_id']) ? $data['salutation_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['zipcode'] = isset($data['zipcode']) ? $data['zipcode'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['vat_id'] = isset($data['vat_id']) ? $data['vat_id'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['additional_address_line1'] = isset($data['additional_address_line1']) ? $data['additional_address_line1'] : null;
        $this->container['additional_address_line2'] = isset($data['additional_address_line2']) ? $data['additional_address_line2'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['country_state'] = isset($data['country_state']) ? $data['country_state'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['order_deliveries'] = isset($data['order_deliveries']) ? $data['order_deliveries'] : null;
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['country_id'] === null) {
            $invalidProperties[] = "'country_id' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['salutation_id'] === null) {
            $invalidProperties[] = "'salutation_id' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
        }
        if ($this->container['zipcode'] === null) {
            $invalidProperties[] = "'zipcode' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
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
     * Gets country_id
     *
     * @return string
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param string $country_id country_id
     *
     * @return $this
     */
    public function setCountryId($country_id)
    {
        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets country_state_id
     *
     * @return string
     */
    public function getCountryStateId()
    {
        return $this->container['country_state_id'];
    }

    /**
     * Sets country_state_id
     *
     * @param string $country_state_id country_state_id
     *
     * @return $this
     */
    public function setCountryStateId($country_state_id)
    {
        $this->container['country_state_id'] = $country_state_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_version_id
     *
     * @return string
     */
    public function getOrderVersionId()
    {
        return $this->container['order_version_id'];
    }

    /**
     * Sets order_version_id
     *
     * @param string $order_version_id order_version_id
     *
     * @return $this
     */
    public function setOrderVersionId($order_version_id)
    {
        $this->container['order_version_id'] = $order_version_id;

        return $this;
    }

    /**
     * Gets salutation_id
     *
     * @return string
     */
    public function getSalutationId()
    {
        return $this->container['salutation_id'];
    }

    /**
     * Sets salutation_id
     *
     * @param string $salutation_id salutation_id
     *
     * @return $this
     */
    public function setSalutationId($salutation_id)
    {
        $this->container['salutation_id'] = $salutation_id;

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
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string $zipcode zipcode
     *
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string $department department
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

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
     * Gets vat_id
     *
     * @return string
     */
    public function getVatId()
    {
        return $this->container['vat_id'];
    }

    /**
     * Sets vat_id
     *
     * @param string $vat_id vat_id
     *
     * @return $this
     */
    public function setVatId($vat_id)
    {
        $this->container['vat_id'] = $vat_id;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number phone_number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets additional_address_line1
     *
     * @return string
     */
    public function getAdditionalAddressLine1()
    {
        return $this->container['additional_address_line1'];
    }

    /**
     * Sets additional_address_line1
     *
     * @param string $additional_address_line1 additional_address_line1
     *
     * @return $this
     */
    public function setAdditionalAddressLine1($additional_address_line1)
    {
        $this->container['additional_address_line1'] = $additional_address_line1;

        return $this;
    }

    /**
     * Gets additional_address_line2
     *
     * @return string
     */
    public function getAdditionalAddressLine2()
    {
        return $this->container['additional_address_line2'];
    }

    /**
     * Sets additional_address_line2
     *
     * @param string $additional_address_line2 additional_address_line2
     *
     * @return $this
     */
    public function setAdditionalAddressLine2($additional_address_line2)
    {
        $this->container['additional_address_line2'] = $additional_address_line2;

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
     * Gets country
     *
     * @return \Swagger\Client\Model\Country
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Swagger\Client\Model\Country $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_state
     *
     * @return \Swagger\Client\Model\CountryState
     */
    public function getCountryState()
    {
        return $this->container['country_state'];
    }

    /**
     * Sets country_state
     *
     * @param \Swagger\Client\Model\CountryState $country_state country_state
     *
     * @return $this
     */
    public function setCountryState($country_state)
    {
        $this->container['country_state'] = $country_state;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \Swagger\Client\Model\Order
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Swagger\Client\Model\Order $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets order_deliveries
     *
     * @return \Swagger\Client\Model\OrderDelivery
     */
    public function getOrderDeliveries()
    {
        return $this->container['order_deliveries'];
    }

    /**
     * Sets order_deliveries
     *
     * @param \Swagger\Client\Model\OrderDelivery $order_deliveries order_deliveries
     *
     * @return $this
     */
    public function setOrderDeliveries($order_deliveries)
    {
        $this->container['order_deliveries'] = $order_deliveries;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return \Swagger\Client\Model\Salutation
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param \Swagger\Client\Model\Salutation $salutation salutation
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

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
