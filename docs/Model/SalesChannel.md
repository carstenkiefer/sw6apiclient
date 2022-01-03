# SalesChannel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**type_id** | **string** |  | 
**language_id** | **string** |  | 
**customer_group_id** | **string** |  | 
**currency_id** | **string** |  | 
**payment_method_id** | **string** |  | 
**shipping_method_id** | **string** |  | 
**country_id** | **string** |  | 
**analytics_id** | **string** |  | [optional] 
**navigation_category_id** | **string** |  | 
**navigation_category_version_id** | **string** |  | [optional] 
**navigation_category_depth** | **int** |  | [optional] 
**footer_category_id** | **string** |  | [optional] 
**footer_category_version_id** | **string** |  | [optional] 
**service_category_id** | **string** |  | [optional] 
**service_category_version_id** | **string** |  | [optional] 
**mail_header_footer_id** | **string** |  | [optional] 
**hreflang_default_domain_id** | **string** |  | [optional] 
**name** | **string** |  | 
**short_name** | **string** |  | [optional] 
**tax_calculation_type** | **string** |  | [optional] 
**access_key** | **string** |  | 
**configuration** | **object** |  | [optional] 
**active** | **bool** |  | [optional] 
**hreflang_active** | **bool** |  | [optional] 
**maintenance** | **bool** |  | [optional] 
**maintenance_ip_whitelist** | **object[]** |  | [optional] 
**custom_fields** | **object** |  | [optional] 
**payment_method_ids** | **string[]** |  | [optional] 
**home_cms_page_id** | **string** |  | [optional] 
**home_cms_page_version_id** | **string** |  | [optional] 
**home_slot_config** | **object** |  | [optional] 
**home_enabled** | **bool** |  | 
**home_name** | **string** |  | [optional] 
**home_meta_title** | **string** |  | [optional] 
**home_meta_description** | **string** |  | [optional] 
**home_keywords** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**translated** | **object** |  | [optional] 
**currencies** | [**\Swagger\Client\Model\Currency**](Currency.md) |  | [optional] 
**languages** | [**\Swagger\Client\Model\Language**](Language.md) |  | [optional] 
**countries** | [**\Swagger\Client\Model\Country**](Country.md) |  | [optional] 
**payment_methods** | [**\Swagger\Client\Model\PaymentMethod**](PaymentMethod.md) |  | [optional] 
**shipping_methods** | [**\Swagger\Client\Model\ShippingMethod**](ShippingMethod.md) |  | [optional] 
**type** | [**\Swagger\Client\Model\SalesChannelType**](SalesChannelType.md) |  | [optional] 
**language** | [**\Swagger\Client\Model\Language**](Language.md) |  | [optional] 
**customer_group** | [**\Swagger\Client\Model\CustomerGroup**](CustomerGroup.md) |  | [optional] 
**currency** | [**\Swagger\Client\Model\Currency**](Currency.md) |  | [optional] 
**payment_method** | [**\Swagger\Client\Model\PaymentMethod**](PaymentMethod.md) |  | [optional] 
**shipping_method** | [**\Swagger\Client\Model\ShippingMethod**](ShippingMethod.md) |  | [optional] 
**country** | [**\Swagger\Client\Model\Country**](Country.md) |  | [optional] 
**orders** | [**\Swagger\Client\Model\Order**](Order.md) |  | [optional] 
**customers** | [**\Swagger\Client\Model\Customer**](Customer.md) |  | [optional] 
**home_cms_page** | [**\Swagger\Client\Model\CmsPage**](CmsPage.md) |  | [optional] 
**domains** | [**\Swagger\Client\Model\SalesChannelDomain**](SalesChannelDomain.md) |  | [optional] 
**system_configs** | [**\Swagger\Client\Model\SystemConfig**](SystemConfig.md) |  | [optional] 
**navigation_category** | [**\Swagger\Client\Model\Category**](Category.md) |  | [optional] 
**footer_category** | [**\Swagger\Client\Model\Category**](Category.md) |  | [optional] 
**service_category** | [**\Swagger\Client\Model\Category**](Category.md) |  | [optional] 
**product_visibilities** | [**\Swagger\Client\Model\ProductVisibility**](ProductVisibility.md) |  | [optional] 
**hreflang_default_domain** | [**\Swagger\Client\Model\SalesChannelDomain**](SalesChannelDomain.md) |  | [optional] 
**mail_header_footer** | [**\Swagger\Client\Model\MailHeaderFooter**](MailHeaderFooter.md) |  | [optional] 
**newsletter_recipients** | [**\Swagger\Client\Model\NewsletterRecipient**](NewsletterRecipient.md) |  | [optional] 
**number_range_sales_channels** | [**\Swagger\Client\Model\NumberRangeSalesChannel**](NumberRangeSalesChannel.md) |  | [optional] 
**promotion_sales_channels** | [**\Swagger\Client\Model\PromotionSalesChannel**](PromotionSalesChannel.md) |  | [optional] 
**document_base_config_sales_channels** | [**\Swagger\Client\Model\DocumentBaseConfigSalesChannel**](DocumentBaseConfigSalesChannel.md) |  | [optional] 
**product_reviews** | [**\Swagger\Client\Model\ProductReview**](ProductReview.md) |  | [optional] 
**seo_urls** | [**\Swagger\Client\Model\SeoUrl**](SeoUrl.md) |  | [optional] 
**seo_url_templates** | [**\Swagger\Client\Model\SeoUrlTemplate**](SeoUrlTemplate.md) |  | [optional] 
**main_categories** | [**\Swagger\Client\Model\MainCategory**](MainCategory.md) |  | [optional] 
**product_exports** | [**\Swagger\Client\Model\ProductExport**](ProductExport.md) |  | [optional] 
**analytics** | [**\Swagger\Client\Model\SalesChannelAnalytics**](SalesChannelAnalytics.md) |  | [optional] 
**customer_groups_registrations** | [**\Swagger\Client\Model\CustomerGroup**](CustomerGroup.md) |  | [optional] 
**event_actions** | [**\Swagger\Client\Model\EventAction**](EventAction.md) |  | [optional] 
**landing_pages** | [**\Swagger\Client\Model\LandingPage**](LandingPage.md) |  | [optional] 
**bound_customers** | [**\Swagger\Client\Model\Customer**](Customer.md) |  | [optional] 
**wishlists** | [**\Swagger\Client\Model\CustomerWishlist**](CustomerWishlist.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

