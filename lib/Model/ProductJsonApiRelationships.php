<?php
/**
 * ProductJsonApiRelationships
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
 * ProductJsonApiRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductJsonApiRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductJsonApi_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parent' => '\Swagger\Client\Model\ProductJsonApiRelationshipsParent',
'children' => '\Swagger\Client\Model\ProductJsonApiRelationshipsChildren',
'delivery_time' => '\Swagger\Client\Model\ProductJsonApiRelationshipsDeliveryTime',
'tax' => '\Swagger\Client\Model\ProductJsonApiRelationshipsTax',
'manufacturer' => '\Swagger\Client\Model\ProductJsonApiRelationshipsManufacturer',
'unit' => '\Swagger\Client\Model\ProductJsonApiRelationshipsUnit',
'cover' => '\Swagger\Client\Model\ProductJsonApiRelationshipsCover',
'feature_set' => '\Swagger\Client\Model\ProductJsonApiRelationshipsFeatureSet',
'cms_page' => '\Swagger\Client\Model\ProductJsonApiRelationshipsCmsPage',
'canonical_product' => '\Swagger\Client\Model\ProductJsonApiRelationshipsCanonicalProduct',
'prices' => '\Swagger\Client\Model\ProductJsonApiRelationshipsPrices',
'media' => '\Swagger\Client\Model\ProductJsonApiRelationshipsMedia',
'cross_sellings' => '\Swagger\Client\Model\ProductJsonApiRelationshipsCrossSellings',
'cross_selling_assigned_products' => '\Swagger\Client\Model\ProductJsonApiRelationshipsCrossSellingAssignedProducts',
'configurator_settings' => '\Swagger\Client\Model\ProductJsonApiRelationshipsConfiguratorSettings',
'visibilities' => '\Swagger\Client\Model\ProductJsonApiRelationshipsVisibilities',
'search_keywords' => '\Swagger\Client\Model\ProductJsonApiRelationshipsSearchKeywords',
'product_reviews' => '\Swagger\Client\Model\ProductJsonApiRelationshipsProductReviews',
'main_categories' => '\Swagger\Client\Model\ProductJsonApiRelationshipsMainCategories',
'seo_urls' => '\Swagger\Client\Model\ProductJsonApiRelationshipsSeoUrls',
'order_line_items' => '\Swagger\Client\Model\ProductJsonApiRelationshipsOrderLineItems',
'wishlists' => '\Swagger\Client\Model\ProductJsonApiRelationshipsWishlists',
'options' => '\Swagger\Client\Model\ProductJsonApiRelationshipsOptions',
'properties' => '\Swagger\Client\Model\ProductJsonApiRelationshipsProperties',
'categories' => '\Swagger\Client\Model\ProductJsonApiRelationshipsCategories',
'streams' => '\Swagger\Client\Model\ProductJsonApiRelationshipsStreams',
'categories_ro' => '\Swagger\Client\Model\ProductJsonApiRelationshipsCategoriesRo',
'tags' => '\Swagger\Client\Model\ProductJsonApiRelationshipsTags',
'custom_field_sets' => '\Swagger\Client\Model\ProductJsonApiRelationshipsCustomFieldSets'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parent' => null,
'children' => null,
'delivery_time' => null,
'tax' => null,
'manufacturer' => null,
'unit' => null,
'cover' => null,
'feature_set' => null,
'cms_page' => null,
'canonical_product' => null,
'prices' => null,
'media' => null,
'cross_sellings' => null,
'cross_selling_assigned_products' => null,
'configurator_settings' => null,
'visibilities' => null,
'search_keywords' => null,
'product_reviews' => null,
'main_categories' => null,
'seo_urls' => null,
'order_line_items' => null,
'wishlists' => null,
'options' => null,
'properties' => null,
'categories' => null,
'streams' => null,
'categories_ro' => null,
'tags' => null,
'custom_field_sets' => null    ];

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
        'parent' => 'parent',
'children' => 'children',
'delivery_time' => 'deliveryTime',
'tax' => 'tax',
'manufacturer' => 'manufacturer',
'unit' => 'unit',
'cover' => 'cover',
'feature_set' => 'featureSet',
'cms_page' => 'cmsPage',
'canonical_product' => 'canonicalProduct',
'prices' => 'prices',
'media' => 'media',
'cross_sellings' => 'crossSellings',
'cross_selling_assigned_products' => 'crossSellingAssignedProducts',
'configurator_settings' => 'configuratorSettings',
'visibilities' => 'visibilities',
'search_keywords' => 'searchKeywords',
'product_reviews' => 'productReviews',
'main_categories' => 'mainCategories',
'seo_urls' => 'seoUrls',
'order_line_items' => 'orderLineItems',
'wishlists' => 'wishlists',
'options' => 'options',
'properties' => 'properties',
'categories' => 'categories',
'streams' => 'streams',
'categories_ro' => 'categoriesRo',
'tags' => 'tags',
'custom_field_sets' => 'customFieldSets'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parent' => 'setParent',
'children' => 'setChildren',
'delivery_time' => 'setDeliveryTime',
'tax' => 'setTax',
'manufacturer' => 'setManufacturer',
'unit' => 'setUnit',
'cover' => 'setCover',
'feature_set' => 'setFeatureSet',
'cms_page' => 'setCmsPage',
'canonical_product' => 'setCanonicalProduct',
'prices' => 'setPrices',
'media' => 'setMedia',
'cross_sellings' => 'setCrossSellings',
'cross_selling_assigned_products' => 'setCrossSellingAssignedProducts',
'configurator_settings' => 'setConfiguratorSettings',
'visibilities' => 'setVisibilities',
'search_keywords' => 'setSearchKeywords',
'product_reviews' => 'setProductReviews',
'main_categories' => 'setMainCategories',
'seo_urls' => 'setSeoUrls',
'order_line_items' => 'setOrderLineItems',
'wishlists' => 'setWishlists',
'options' => 'setOptions',
'properties' => 'setProperties',
'categories' => 'setCategories',
'streams' => 'setStreams',
'categories_ro' => 'setCategoriesRo',
'tags' => 'setTags',
'custom_field_sets' => 'setCustomFieldSets'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parent' => 'getParent',
'children' => 'getChildren',
'delivery_time' => 'getDeliveryTime',
'tax' => 'getTax',
'manufacturer' => 'getManufacturer',
'unit' => 'getUnit',
'cover' => 'getCover',
'feature_set' => 'getFeatureSet',
'cms_page' => 'getCmsPage',
'canonical_product' => 'getCanonicalProduct',
'prices' => 'getPrices',
'media' => 'getMedia',
'cross_sellings' => 'getCrossSellings',
'cross_selling_assigned_products' => 'getCrossSellingAssignedProducts',
'configurator_settings' => 'getConfiguratorSettings',
'visibilities' => 'getVisibilities',
'search_keywords' => 'getSearchKeywords',
'product_reviews' => 'getProductReviews',
'main_categories' => 'getMainCategories',
'seo_urls' => 'getSeoUrls',
'order_line_items' => 'getOrderLineItems',
'wishlists' => 'getWishlists',
'options' => 'getOptions',
'properties' => 'getProperties',
'categories' => 'getCategories',
'streams' => 'getStreams',
'categories_ro' => 'getCategoriesRo',
'tags' => 'getTags',
'custom_field_sets' => 'getCustomFieldSets'    ];

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
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['delivery_time'] = isset($data['delivery_time']) ? $data['delivery_time'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['manufacturer'] = isset($data['manufacturer']) ? $data['manufacturer'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['cover'] = isset($data['cover']) ? $data['cover'] : null;
        $this->container['feature_set'] = isset($data['feature_set']) ? $data['feature_set'] : null;
        $this->container['cms_page'] = isset($data['cms_page']) ? $data['cms_page'] : null;
        $this->container['canonical_product'] = isset($data['canonical_product']) ? $data['canonical_product'] : null;
        $this->container['prices'] = isset($data['prices']) ? $data['prices'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['cross_sellings'] = isset($data['cross_sellings']) ? $data['cross_sellings'] : null;
        $this->container['cross_selling_assigned_products'] = isset($data['cross_selling_assigned_products']) ? $data['cross_selling_assigned_products'] : null;
        $this->container['configurator_settings'] = isset($data['configurator_settings']) ? $data['configurator_settings'] : null;
        $this->container['visibilities'] = isset($data['visibilities']) ? $data['visibilities'] : null;
        $this->container['search_keywords'] = isset($data['search_keywords']) ? $data['search_keywords'] : null;
        $this->container['product_reviews'] = isset($data['product_reviews']) ? $data['product_reviews'] : null;
        $this->container['main_categories'] = isset($data['main_categories']) ? $data['main_categories'] : null;
        $this->container['seo_urls'] = isset($data['seo_urls']) ? $data['seo_urls'] : null;
        $this->container['order_line_items'] = isset($data['order_line_items']) ? $data['order_line_items'] : null;
        $this->container['wishlists'] = isset($data['wishlists']) ? $data['wishlists'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['streams'] = isset($data['streams']) ? $data['streams'] : null;
        $this->container['categories_ro'] = isset($data['categories_ro']) ? $data['categories_ro'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['custom_field_sets'] = isset($data['custom_field_sets']) ? $data['custom_field_sets'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets parent
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsParent
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsParent $parent parent
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsChildren
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsChildren $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets delivery_time
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsDeliveryTime
     */
    public function getDeliveryTime()
    {
        return $this->container['delivery_time'];
    }

    /**
     * Sets delivery_time
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsDeliveryTime $delivery_time delivery_time
     *
     * @return $this
     */
    public function setDeliveryTime($delivery_time)
    {
        $this->container['delivery_time'] = $delivery_time;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsTax
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsTax $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsManufacturer
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsManufacturer $manufacturer manufacturer
     *
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsUnit
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsUnit $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets cover
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsCover
     */
    public function getCover()
    {
        return $this->container['cover'];
    }

    /**
     * Sets cover
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsCover $cover cover
     *
     * @return $this
     */
    public function setCover($cover)
    {
        $this->container['cover'] = $cover;

        return $this;
    }

    /**
     * Gets feature_set
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsFeatureSet
     */
    public function getFeatureSet()
    {
        return $this->container['feature_set'];
    }

    /**
     * Sets feature_set
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsFeatureSet $feature_set feature_set
     *
     * @return $this
     */
    public function setFeatureSet($feature_set)
    {
        $this->container['feature_set'] = $feature_set;

        return $this;
    }

    /**
     * Gets cms_page
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsCmsPage
     */
    public function getCmsPage()
    {
        return $this->container['cms_page'];
    }

    /**
     * Sets cms_page
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsCmsPage $cms_page cms_page
     *
     * @return $this
     */
    public function setCmsPage($cms_page)
    {
        $this->container['cms_page'] = $cms_page;

        return $this;
    }

    /**
     * Gets canonical_product
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsCanonicalProduct
     */
    public function getCanonicalProduct()
    {
        return $this->container['canonical_product'];
    }

    /**
     * Sets canonical_product
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsCanonicalProduct $canonical_product canonical_product
     *
     * @return $this
     */
    public function setCanonicalProduct($canonical_product)
    {
        $this->container['canonical_product'] = $canonical_product;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsPrices
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsPrices $prices prices
     *
     * @return $this
     */
    public function setPrices($prices)
    {
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsMedia
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsMedia $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets cross_sellings
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsCrossSellings
     */
    public function getCrossSellings()
    {
        return $this->container['cross_sellings'];
    }

    /**
     * Sets cross_sellings
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsCrossSellings $cross_sellings cross_sellings
     *
     * @return $this
     */
    public function setCrossSellings($cross_sellings)
    {
        $this->container['cross_sellings'] = $cross_sellings;

        return $this;
    }

    /**
     * Gets cross_selling_assigned_products
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsCrossSellingAssignedProducts
     */
    public function getCrossSellingAssignedProducts()
    {
        return $this->container['cross_selling_assigned_products'];
    }

    /**
     * Sets cross_selling_assigned_products
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsCrossSellingAssignedProducts $cross_selling_assigned_products cross_selling_assigned_products
     *
     * @return $this
     */
    public function setCrossSellingAssignedProducts($cross_selling_assigned_products)
    {
        $this->container['cross_selling_assigned_products'] = $cross_selling_assigned_products;

        return $this;
    }

    /**
     * Gets configurator_settings
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsConfiguratorSettings
     */
    public function getConfiguratorSettings()
    {
        return $this->container['configurator_settings'];
    }

    /**
     * Sets configurator_settings
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsConfiguratorSettings $configurator_settings configurator_settings
     *
     * @return $this
     */
    public function setConfiguratorSettings($configurator_settings)
    {
        $this->container['configurator_settings'] = $configurator_settings;

        return $this;
    }

    /**
     * Gets visibilities
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsVisibilities
     */
    public function getVisibilities()
    {
        return $this->container['visibilities'];
    }

    /**
     * Sets visibilities
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsVisibilities $visibilities visibilities
     *
     * @return $this
     */
    public function setVisibilities($visibilities)
    {
        $this->container['visibilities'] = $visibilities;

        return $this;
    }

    /**
     * Gets search_keywords
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsSearchKeywords
     */
    public function getSearchKeywords()
    {
        return $this->container['search_keywords'];
    }

    /**
     * Sets search_keywords
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsSearchKeywords $search_keywords search_keywords
     *
     * @return $this
     */
    public function setSearchKeywords($search_keywords)
    {
        $this->container['search_keywords'] = $search_keywords;

        return $this;
    }

    /**
     * Gets product_reviews
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsProductReviews
     */
    public function getProductReviews()
    {
        return $this->container['product_reviews'];
    }

    /**
     * Sets product_reviews
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsProductReviews $product_reviews product_reviews
     *
     * @return $this
     */
    public function setProductReviews($product_reviews)
    {
        $this->container['product_reviews'] = $product_reviews;

        return $this;
    }

    /**
     * Gets main_categories
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsMainCategories
     */
    public function getMainCategories()
    {
        return $this->container['main_categories'];
    }

    /**
     * Sets main_categories
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsMainCategories $main_categories main_categories
     *
     * @return $this
     */
    public function setMainCategories($main_categories)
    {
        $this->container['main_categories'] = $main_categories;

        return $this;
    }

    /**
     * Gets seo_urls
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsSeoUrls
     */
    public function getSeoUrls()
    {
        return $this->container['seo_urls'];
    }

    /**
     * Sets seo_urls
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsSeoUrls $seo_urls seo_urls
     *
     * @return $this
     */
    public function setSeoUrls($seo_urls)
    {
        $this->container['seo_urls'] = $seo_urls;

        return $this;
    }

    /**
     * Gets order_line_items
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsOrderLineItems
     */
    public function getOrderLineItems()
    {
        return $this->container['order_line_items'];
    }

    /**
     * Sets order_line_items
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsOrderLineItems $order_line_items order_line_items
     *
     * @return $this
     */
    public function setOrderLineItems($order_line_items)
    {
        $this->container['order_line_items'] = $order_line_items;

        return $this;
    }

    /**
     * Gets wishlists
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsWishlists
     */
    public function getWishlists()
    {
        return $this->container['wishlists'];
    }

    /**
     * Sets wishlists
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsWishlists $wishlists wishlists
     *
     * @return $this
     */
    public function setWishlists($wishlists)
    {
        $this->container['wishlists'] = $wishlists;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsOptions
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsOptions $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsProperties
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsProperties $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsCategories
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsCategories $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets streams
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsStreams
     */
    public function getStreams()
    {
        return $this->container['streams'];
    }

    /**
     * Sets streams
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsStreams $streams streams
     *
     * @return $this
     */
    public function setStreams($streams)
    {
        $this->container['streams'] = $streams;

        return $this;
    }

    /**
     * Gets categories_ro
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsCategoriesRo
     */
    public function getCategoriesRo()
    {
        return $this->container['categories_ro'];
    }

    /**
     * Sets categories_ro
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsCategoriesRo $categories_ro categories_ro
     *
     * @return $this
     */
    public function setCategoriesRo($categories_ro)
    {
        $this->container['categories_ro'] = $categories_ro;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsTags
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsTags $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets custom_field_sets
     *
     * @return \Swagger\Client\Model\ProductJsonApiRelationshipsCustomFieldSets
     */
    public function getCustomFieldSets()
    {
        return $this->container['custom_field_sets'];
    }

    /**
     * Sets custom_field_sets
     *
     * @param \Swagger\Client\Model\ProductJsonApiRelationshipsCustomFieldSets $custom_field_sets custom_field_sets
     *
     * @return $this
     */
    public function setCustomFieldSets($custom_field_sets)
    {
        $this->container['custom_field_sets'] = $custom_field_sets;

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
