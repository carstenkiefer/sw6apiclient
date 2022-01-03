# Sw6ApiClient
This endpoint reference contains an overview of all endpoints comprising the Shopware Admin API. 

- API version: 6.4.7.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/carstenkiefer/sw6apiclient.git"
    }
  ],
  "require": {
    "carstenkiefer/sw6apiclient": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AclRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AclroleBody(); // \Swagger\Client\Model\AclroleBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createAclRole($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclRoleApi->createAclRole: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AclRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the acl_role
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteAclRole($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling AclRoleApi->deleteAclRole: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AclRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the acl_role

try {
    $result = $apiInstance->getAclRole($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclRoleApi->getAclRole: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AclRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getAclRoleList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclRoleApi->getAclRoleList: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AclRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the acl_role
$body = new \Swagger\Client\Model\AclroleIdBody(); // \Swagger\Client\Model\AclroleIdBody | Partially update information about a Acl Role resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateAclRole($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclRoleApi->updateAclRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sw6.localhost/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AclRoleApi* | [**createAclRole**](docs/Api/AclRoleApi.md#createaclrole) | **POST** /acl-role | Create a new Acl Role resources
*AclRoleApi* | [**deleteAclRole**](docs/Api/AclRoleApi.md#deleteaclrole) | **DELETE** /acl-role/{id} | Delete a Acl Role resource
*AclRoleApi* | [**getAclRole**](docs/Api/AclRoleApi.md#getaclrole) | **GET** /acl-role/{id} | Detailed information about a Acl Role resource
*AclRoleApi* | [**getAclRoleList**](docs/Api/AclRoleApi.md#getaclrolelist) | **GET** /acl-role | List with basic information of Acl Role resources
*AclRoleApi* | [**updateAclRole**](docs/Api/AclRoleApi.md#updateaclrole) | **PATCH** /acl-role/{id} | Partially update information about a Acl Role resource
*AcrisCookieApi* | [**createAcrisCookie**](docs/Api/AcrisCookieApi.md#createacriscookie) | **POST** /acris-cookie | Create a new Acris Cookie resources
*AcrisCookieApi* | [**deleteAcrisCookie**](docs/Api/AcrisCookieApi.md#deleteacriscookie) | **DELETE** /acris-cookie/{id} | Delete a Acris Cookie resource
*AcrisCookieApi* | [**getAcrisCookie**](docs/Api/AcrisCookieApi.md#getacriscookie) | **GET** /acris-cookie/{id} | Detailed information about a Acris Cookie resource
*AcrisCookieApi* | [**getAcrisCookieList**](docs/Api/AcrisCookieApi.md#getacriscookielist) | **GET** /acris-cookie | List with basic information of Acris Cookie resources
*AcrisCookieApi* | [**updateAcrisCookie**](docs/Api/AcrisCookieApi.md#updateacriscookie) | **PATCH** /acris-cookie/{id} | Partially update information about a Acris Cookie resource
*AcrisCookieGroupApi* | [**createAcrisCookieGroup**](docs/Api/AcrisCookieGroupApi.md#createacriscookiegroup) | **POST** /acris-cookie-group | Create a new Acris Cookie Group resources
*AcrisCookieGroupApi* | [**deleteAcrisCookieGroup**](docs/Api/AcrisCookieGroupApi.md#deleteacriscookiegroup) | **DELETE** /acris-cookie-group/{id} | Delete a Acris Cookie Group resource
*AcrisCookieGroupApi* | [**getAcrisCookieGroup**](docs/Api/AcrisCookieGroupApi.md#getacriscookiegroup) | **GET** /acris-cookie-group/{id} | Detailed information about a Acris Cookie Group resource
*AcrisCookieGroupApi* | [**getAcrisCookieGroupList**](docs/Api/AcrisCookieGroupApi.md#getacriscookiegrouplist) | **GET** /acris-cookie-group | List with basic information of Acris Cookie Group resources
*AcrisCookieGroupApi* | [**updateAcrisCookieGroup**](docs/Api/AcrisCookieGroupApi.md#updateacriscookiegroup) | **PATCH** /acris-cookie-group/{id} | Partially update information about a Acris Cookie Group resource
*AppApi* | [**createApp**](docs/Api/AppApi.md#createapp) | **POST** /app | Create a new App resources
*AppApi* | [**deleteApp**](docs/Api/AppApi.md#deleteapp) | **DELETE** /app/{id} | Delete a App resource
*AppApi* | [**getApp**](docs/Api/AppApi.md#getapp) | **GET** /app/{id} | Detailed information about a App resource
*AppApi* | [**getAppList**](docs/Api/AppApi.md#getapplist) | **GET** /app | List with basic information of App resources
*AppApi* | [**updateApp**](docs/Api/AppApi.md#updateapp) | **PATCH** /app/{id} | Partially update information about a App resource
*AppActionButtonApi* | [**createAppActionButton**](docs/Api/AppActionButtonApi.md#createappactionbutton) | **POST** /app-action-button | Create a new App Action Button resources
*AppActionButtonApi* | [**deleteAppActionButton**](docs/Api/AppActionButtonApi.md#deleteappactionbutton) | **DELETE** /app-action-button/{id} | Delete a App Action Button resource
*AppActionButtonApi* | [**getAppActionButton**](docs/Api/AppActionButtonApi.md#getappactionbutton) | **GET** /app-action-button/{id} | Detailed information about a App Action Button resource
*AppActionButtonApi* | [**getAppActionButtonList**](docs/Api/AppActionButtonApi.md#getappactionbuttonlist) | **GET** /app-action-button | List with basic information of App Action Button resources
*AppActionButtonApi* | [**updateAppActionButton**](docs/Api/AppActionButtonApi.md#updateappactionbutton) | **PATCH** /app-action-button/{id} | Partially update information about a App Action Button resource
*AppCmsBlockApi* | [**createAppCmsBlock**](docs/Api/AppCmsBlockApi.md#createappcmsblock) | **POST** /app-cms-block | Create a new App Cms Block resources
*AppCmsBlockApi* | [**deleteAppCmsBlock**](docs/Api/AppCmsBlockApi.md#deleteappcmsblock) | **DELETE** /app-cms-block/{id} | Delete a App Cms Block resource
*AppCmsBlockApi* | [**getAppCmsBlock**](docs/Api/AppCmsBlockApi.md#getappcmsblock) | **GET** /app-cms-block/{id} | Detailed information about a App Cms Block resource
*AppCmsBlockApi* | [**getAppCmsBlockList**](docs/Api/AppCmsBlockApi.md#getappcmsblocklist) | **GET** /app-cms-block | List with basic information of App Cms Block resources
*AppCmsBlockApi* | [**updateAppCmsBlock**](docs/Api/AppCmsBlockApi.md#updateappcmsblock) | **PATCH** /app-cms-block/{id} | Partially update information about a App Cms Block resource
*AppPaymentMethodApi* | [**createAppPaymentMethod**](docs/Api/AppPaymentMethodApi.md#createapppaymentmethod) | **POST** /app-payment-method | Create a new App Payment Method resources
*AppPaymentMethodApi* | [**deleteAppPaymentMethod**](docs/Api/AppPaymentMethodApi.md#deleteapppaymentmethod) | **DELETE** /app-payment-method/{id} | Delete a App Payment Method resource
*AppPaymentMethodApi* | [**getAppPaymentMethod**](docs/Api/AppPaymentMethodApi.md#getapppaymentmethod) | **GET** /app-payment-method/{id} | Detailed information about a App Payment Method resource
*AppPaymentMethodApi* | [**getAppPaymentMethodList**](docs/Api/AppPaymentMethodApi.md#getapppaymentmethodlist) | **GET** /app-payment-method | List with basic information of App Payment Method resources
*AppPaymentMethodApi* | [**updateAppPaymentMethod**](docs/Api/AppPaymentMethodApi.md#updateapppaymentmethod) | **PATCH** /app-payment-method/{id} | Partially update information about a App Payment Method resource
*AppTemplateApi* | [**createAppTemplate**](docs/Api/AppTemplateApi.md#createapptemplate) | **POST** /app-template | Create a new App Template resources
*AppTemplateApi* | [**deleteAppTemplate**](docs/Api/AppTemplateApi.md#deleteapptemplate) | **DELETE** /app-template/{id} | Delete a App Template resource
*AppTemplateApi* | [**getAppTemplate**](docs/Api/AppTemplateApi.md#getapptemplate) | **GET** /app-template/{id} | Detailed information about a App Template resource
*AppTemplateApi* | [**getAppTemplateList**](docs/Api/AppTemplateApi.md#getapptemplatelist) | **GET** /app-template | List with basic information of App Template resources
*AppTemplateApi* | [**updateAppTemplate**](docs/Api/AppTemplateApi.md#updateapptemplate) | **PATCH** /app-template/{id} | Partially update information about a App Template resource
*AssetManagementApi* | [**upload**](docs/Api/AssetManagementApi.md#upload) | **POST** /_action/media/{mediaId}/upload | Upload a file to a media entity
*AuthorizationAuthenticationApi* | [**token**](docs/Api/AuthorizationAuthenticationApi.md#token) | **POST** /oauth/token | Fetch an access token
*BfCategoryMappingApi* | [**createBfCategoryMapping**](docs/Api/BfCategoryMappingApi.md#createbfcategorymapping) | **POST** /bf-category-mapping | Create a new Bf Category Mapping resources
*BfCategoryMappingApi* | [**deleteBfCategoryMapping**](docs/Api/BfCategoryMappingApi.md#deletebfcategorymapping) | **DELETE** /bf-category-mapping/{id} | Delete a Bf Category Mapping resource
*BfCategoryMappingApi* | [**getBfCategoryMapping**](docs/Api/BfCategoryMappingApi.md#getbfcategorymapping) | **GET** /bf-category-mapping/{id} | Detailed information about a Bf Category Mapping resource
*BfCategoryMappingApi* | [**getBfCategoryMappingList**](docs/Api/BfCategoryMappingApi.md#getbfcategorymappinglist) | **GET** /bf-category-mapping | List with basic information of Bf Category Mapping resources
*BfCategoryMappingApi* | [**updateBfCategoryMapping**](docs/Api/BfCategoryMappingApi.md#updatebfcategorymapping) | **PATCH** /bf-category-mapping/{id} | Partially update information about a Bf Category Mapping resource
*BfConfigApi* | [**createBfConfig**](docs/Api/BfConfigApi.md#createbfconfig) | **POST** /bf-config | Create a new Bf Config resources
*BfConfigApi* | [**deleteBfConfig**](docs/Api/BfConfigApi.md#deletebfconfig) | **DELETE** /bf-config/{id} | Delete a Bf Config resource
*BfConfigApi* | [**getBfConfig**](docs/Api/BfConfigApi.md#getbfconfig) | **GET** /bf-config/{id} | Detailed information about a Bf Config resource
*BfConfigApi* | [**getBfConfigList**](docs/Api/BfConfigApi.md#getbfconfiglist) | **GET** /bf-config | List with basic information of Bf Config resources
*BfConfigApi* | [**updateBfConfig**](docs/Api/BfConfigApi.md#updatebfconfig) | **PATCH** /bf-config/{id} | Partially update information about a Bf Config resource
*BfMarketplaceApi* | [**createBfMarketplace**](docs/Api/BfMarketplaceApi.md#createbfmarketplace) | **POST** /bf-marketplace | Create a new Bf Marketplace resources
*BfMarketplaceApi* | [**deleteBfMarketplace**](docs/Api/BfMarketplaceApi.md#deletebfmarketplace) | **DELETE** /bf-marketplace/{id} | Delete a Bf Marketplace resource
*BfMarketplaceApi* | [**getBfMarketplace**](docs/Api/BfMarketplaceApi.md#getbfmarketplace) | **GET** /bf-marketplace/{id} | Detailed information about a Bf Marketplace resource
*BfMarketplaceApi* | [**getBfMarketplaceList**](docs/Api/BfMarketplaceApi.md#getbfmarketplacelist) | **GET** /bf-marketplace | List with basic information of Bf Marketplace resources
*BfMarketplaceApi* | [**updateBfMarketplace**](docs/Api/BfMarketplaceApi.md#updatebfmarketplace) | **PATCH** /bf-marketplace/{id} | Partially update information about a Bf Marketplace resource
*BfMarketplaceSettingsApi* | [**createBfMarketplaceSettings**](docs/Api/BfMarketplaceSettingsApi.md#createbfmarketplacesettings) | **POST** /bf-marketplace-settings | Create a new Bf Marketplace Settings resources
*BfMarketplaceSettingsApi* | [**deleteBfMarketplaceSettings**](docs/Api/BfMarketplaceSettingsApi.md#deletebfmarketplacesettings) | **DELETE** /bf-marketplace-settings/{id} | Delete a Bf Marketplace Settings resource
*BfMarketplaceSettingsApi* | [**getBfMarketplaceSettings**](docs/Api/BfMarketplaceSettingsApi.md#getbfmarketplacesettings) | **GET** /bf-marketplace-settings/{id} | Detailed information about a Bf Marketplace Settings resource
*BfMarketplaceSettingsApi* | [**getBfMarketplaceSettingsList**](docs/Api/BfMarketplaceSettingsApi.md#getbfmarketplacesettingslist) | **GET** /bf-marketplace-settings | List with basic information of Bf Marketplace Settings resources
*BfMarketplaceSettingsApi* | [**updateBfMarketplaceSettings**](docs/Api/BfMarketplaceSettingsApi.md#updatebfmarketplacesettings) | **PATCH** /bf-marketplace-settings/{id} | Partially update information about a Bf Marketplace Settings resource
*BfProductToDeleteApi* | [**createBfProductToDelete**](docs/Api/BfProductToDeleteApi.md#createbfproducttodelete) | **POST** /bf-product-to-delete | Create a new Bf Product To Delete resources
*BfProductToDeleteApi* | [**deleteBfProductToDelete**](docs/Api/BfProductToDeleteApi.md#deletebfproducttodelete) | **DELETE** /bf-product-to-delete/{id} | Delete a Bf Product To Delete resource
*BfProductToDeleteApi* | [**getBfProductToDelete**](docs/Api/BfProductToDeleteApi.md#getbfproducttodelete) | **GET** /bf-product-to-delete/{id} | Detailed information about a Bf Product To Delete resource
*BfProductToDeleteApi* | [**getBfProductToDeleteList**](docs/Api/BfProductToDeleteApi.md#getbfproducttodeletelist) | **GET** /bf-product-to-delete | List with basic information of Bf Product To Delete resources
*BfProductToDeleteApi* | [**updateBfProductToDelete**](docs/Api/BfProductToDeleteApi.md#updatebfproducttodelete) | **PATCH** /bf-product-to-delete/{id} | Partially update information about a Bf Product To Delete resource
*BfSupportApi* | [**createBfSupport**](docs/Api/BfSupportApi.md#createbfsupport) | **POST** /bf-support | Create a new Bf Support resources
*BfSupportApi* | [**deleteBfSupport**](docs/Api/BfSupportApi.md#deletebfsupport) | **DELETE** /bf-support/{id} | Delete a Bf Support resource
*BfSupportApi* | [**getBfSupport**](docs/Api/BfSupportApi.md#getbfsupport) | **GET** /bf-support/{id} | Detailed information about a Bf Support resource
*BfSupportApi* | [**getBfSupportList**](docs/Api/BfSupportApi.md#getbfsupportlist) | **GET** /bf-support | List with basic information of Bf Support resources
*BfSupportApi* | [**updateBfSupport**](docs/Api/BfSupportApi.md#updatebfsupport) | **PATCH** /bf-support/{id} | Partially update information about a Bf Support resource
*BulkOperationsApi* | [**sync**](docs/Api/BulkOperationsApi.md#sync) | **POST** /_action/sync | Bulk edit entities
*CategoryApi* | [**createCategory**](docs/Api/CategoryApi.md#createcategory) | **POST** /category | Create a new Category resources
*CategoryApi* | [**deleteCategory**](docs/Api/CategoryApi.md#deletecategory) | **DELETE** /category/{id} | Delete a Category resource
*CategoryApi* | [**getCategory**](docs/Api/CategoryApi.md#getcategory) | **GET** /category/{id} | Detailed information about a Category resource
*CategoryApi* | [**getCategoryList**](docs/Api/CategoryApi.md#getcategorylist) | **GET** /category | List with basic information of Category resources
*CategoryApi* | [**updateCategory**](docs/Api/CategoryApi.md#updatecategory) | **PATCH** /category/{id} | Partially update information about a Category resource
*CmsBlockApi* | [**createCmsBlock**](docs/Api/CmsBlockApi.md#createcmsblock) | **POST** /cms-block | Create a new Cms Block resources
*CmsBlockApi* | [**deleteCmsBlock**](docs/Api/CmsBlockApi.md#deletecmsblock) | **DELETE** /cms-block/{id} | Delete a Cms Block resource
*CmsBlockApi* | [**getCmsBlock**](docs/Api/CmsBlockApi.md#getcmsblock) | **GET** /cms-block/{id} | Detailed information about a Cms Block resource
*CmsBlockApi* | [**getCmsBlockList**](docs/Api/CmsBlockApi.md#getcmsblocklist) | **GET** /cms-block | List with basic information of Cms Block resources
*CmsBlockApi* | [**updateCmsBlock**](docs/Api/CmsBlockApi.md#updatecmsblock) | **PATCH** /cms-block/{id} | Partially update information about a Cms Block resource
*CmsPageApi* | [**createCmsPage**](docs/Api/CmsPageApi.md#createcmspage) | **POST** /cms-page | Create a new Cms Page resources
*CmsPageApi* | [**deleteCmsPage**](docs/Api/CmsPageApi.md#deletecmspage) | **DELETE** /cms-page/{id} | Delete a Cms Page resource
*CmsPageApi* | [**getCmsPage**](docs/Api/CmsPageApi.md#getcmspage) | **GET** /cms-page/{id} | Detailed information about a Cms Page resource
*CmsPageApi* | [**getCmsPageList**](docs/Api/CmsPageApi.md#getcmspagelist) | **GET** /cms-page | List with basic information of Cms Page resources
*CmsPageApi* | [**updateCmsPage**](docs/Api/CmsPageApi.md#updatecmspage) | **PATCH** /cms-page/{id} | Partially update information about a Cms Page resource
*CmsPageActivityApi* | [**createCmsPageActivity**](docs/Api/CmsPageActivityApi.md#createcmspageactivity) | **POST** /cms-page-activity | Create a new Cms Page Activity resources
*CmsPageActivityApi* | [**deleteCmsPageActivity**](docs/Api/CmsPageActivityApi.md#deletecmspageactivity) | **DELETE** /cms-page-activity/{id} | Delete a Cms Page Activity resource
*CmsPageActivityApi* | [**getCmsPageActivity**](docs/Api/CmsPageActivityApi.md#getcmspageactivity) | **GET** /cms-page-activity/{id} | Detailed information about a Cms Page Activity resource
*CmsPageActivityApi* | [**getCmsPageActivityList**](docs/Api/CmsPageActivityApi.md#getcmspageactivitylist) | **GET** /cms-page-activity | List with basic information of Cms Page Activity resources
*CmsPageActivityApi* | [**updateCmsPageActivity**](docs/Api/CmsPageActivityApi.md#updatecmspageactivity) | **PATCH** /cms-page-activity/{id} | Partially update information about a Cms Page Activity resource
*CmsPageDraftApi* | [**createCmsPageDraft**](docs/Api/CmsPageDraftApi.md#createcmspagedraft) | **POST** /cms-page-draft | Create a new Cms Page Draft resources
*CmsPageDraftApi* | [**deleteCmsPageDraft**](docs/Api/CmsPageDraftApi.md#deletecmspagedraft) | **DELETE** /cms-page-draft/{id} | Delete a Cms Page Draft resource
*CmsPageDraftApi* | [**getCmsPageDraft**](docs/Api/CmsPageDraftApi.md#getcmspagedraft) | **GET** /cms-page-draft/{id} | Detailed information about a Cms Page Draft resource
*CmsPageDraftApi* | [**getCmsPageDraftList**](docs/Api/CmsPageDraftApi.md#getcmspagedraftlist) | **GET** /cms-page-draft | List with basic information of Cms Page Draft resources
*CmsPageDraftApi* | [**updateCmsPageDraft**](docs/Api/CmsPageDraftApi.md#updatecmspagedraft) | **PATCH** /cms-page-draft/{id} | Partially update information about a Cms Page Draft resource
*CmsSectionApi* | [**createCmsSection**](docs/Api/CmsSectionApi.md#createcmssection) | **POST** /cms-section | Create a new Cms Section resources
*CmsSectionApi* | [**deleteCmsSection**](docs/Api/CmsSectionApi.md#deletecmssection) | **DELETE** /cms-section/{id} | Delete a Cms Section resource
*CmsSectionApi* | [**getCmsSection**](docs/Api/CmsSectionApi.md#getcmssection) | **GET** /cms-section/{id} | Detailed information about a Cms Section resource
*CmsSectionApi* | [**getCmsSectionList**](docs/Api/CmsSectionApi.md#getcmssectionlist) | **GET** /cms-section | List with basic information of Cms Section resources
*CmsSectionApi* | [**updateCmsSection**](docs/Api/CmsSectionApi.md#updatecmssection) | **PATCH** /cms-section/{id} | Partially update information about a Cms Section resource
*CmsSlotApi* | [**createCmsSlot**](docs/Api/CmsSlotApi.md#createcmsslot) | **POST** /cms-slot | Create a new Cms Slot resources
*CmsSlotApi* | [**deleteCmsSlot**](docs/Api/CmsSlotApi.md#deletecmsslot) | **DELETE** /cms-slot/{id} | Delete a Cms Slot resource
*CmsSlotApi* | [**getCmsSlot**](docs/Api/CmsSlotApi.md#getcmsslot) | **GET** /cms-slot/{id} | Detailed information about a Cms Slot resource
*CmsSlotApi* | [**getCmsSlotList**](docs/Api/CmsSlotApi.md#getcmsslotlist) | **GET** /cms-slot | List with basic information of Cms Slot resources
*CmsSlotApi* | [**updateCmsSlot**](docs/Api/CmsSlotApi.md#updatecmsslot) | **PATCH** /cms-slot/{id} | Partially update information about a Cms Slot resource
*CountryApi* | [**createCountry**](docs/Api/CountryApi.md#createcountry) | **POST** /country | Create a new Country resources
*CountryApi* | [**deleteCountry**](docs/Api/CountryApi.md#deletecountry) | **DELETE** /country/{id} | Delete a Country resource
*CountryApi* | [**getCountry**](docs/Api/CountryApi.md#getcountry) | **GET** /country/{id} | Detailed information about a Country resource
*CountryApi* | [**getCountryList**](docs/Api/CountryApi.md#getcountrylist) | **GET** /country | List with basic information of Country resources
*CountryApi* | [**updateCountry**](docs/Api/CountryApi.md#updatecountry) | **PATCH** /country/{id} | Partially update information about a Country resource
*CountryStateApi* | [**createCountryState**](docs/Api/CountryStateApi.md#createcountrystate) | **POST** /country-state | Create a new Country State resources
*CountryStateApi* | [**deleteCountryState**](docs/Api/CountryStateApi.md#deletecountrystate) | **DELETE** /country-state/{id} | Delete a Country State resource
*CountryStateApi* | [**getCountryState**](docs/Api/CountryStateApi.md#getcountrystate) | **GET** /country-state/{id} | Detailed information about a Country State resource
*CountryStateApi* | [**getCountryStateList**](docs/Api/CountryStateApi.md#getcountrystatelist) | **GET** /country-state | List with basic information of Country State resources
*CountryStateApi* | [**updateCountryState**](docs/Api/CountryStateApi.md#updatecountrystate) | **PATCH** /country-state/{id} | Partially update information about a Country State resource
*CurrencyApi* | [**createCurrency**](docs/Api/CurrencyApi.md#createcurrency) | **POST** /currency | Create a new Currency resources
*CurrencyApi* | [**deleteCurrency**](docs/Api/CurrencyApi.md#deletecurrency) | **DELETE** /currency/{id} | Delete a Currency resource
*CurrencyApi* | [**getCurrency**](docs/Api/CurrencyApi.md#getcurrency) | **GET** /currency/{id} | Detailed information about a Currency resource
*CurrencyApi* | [**getCurrencyList**](docs/Api/CurrencyApi.md#getcurrencylist) | **GET** /currency | List with basic information of Currency resources
*CurrencyApi* | [**updateCurrency**](docs/Api/CurrencyApi.md#updatecurrency) | **PATCH** /currency/{id} | Partially update information about a Currency resource
*CurrencyCountryRoundingApi* | [**createCurrencyCountryRounding**](docs/Api/CurrencyCountryRoundingApi.md#createcurrencycountryrounding) | **POST** /currency-country-rounding | Create a new Currency Country Rounding resources
*CurrencyCountryRoundingApi* | [**deleteCurrencyCountryRounding**](docs/Api/CurrencyCountryRoundingApi.md#deletecurrencycountryrounding) | **DELETE** /currency-country-rounding/{id} | Delete a Currency Country Rounding resource
*CurrencyCountryRoundingApi* | [**getCurrencyCountryRounding**](docs/Api/CurrencyCountryRoundingApi.md#getcurrencycountryrounding) | **GET** /currency-country-rounding/{id} | Detailed information about a Currency Country Rounding resource
*CurrencyCountryRoundingApi* | [**getCurrencyCountryRoundingList**](docs/Api/CurrencyCountryRoundingApi.md#getcurrencycountryroundinglist) | **GET** /currency-country-rounding | List with basic information of Currency Country Rounding resources
*CurrencyCountryRoundingApi* | [**updateCurrencyCountryRounding**](docs/Api/CurrencyCountryRoundingApi.md#updatecurrencycountryrounding) | **PATCH** /currency-country-rounding/{id} | Partially update information about a Currency Country Rounding resource
*CustomFieldApi* | [**createCustomField**](docs/Api/CustomFieldApi.md#createcustomfield) | **POST** /custom-field | Create a new Custom Field resources
*CustomFieldApi* | [**deleteCustomField**](docs/Api/CustomFieldApi.md#deletecustomfield) | **DELETE** /custom-field/{id} | Delete a Custom Field resource
*CustomFieldApi* | [**getCustomField**](docs/Api/CustomFieldApi.md#getcustomfield) | **GET** /custom-field/{id} | Detailed information about a Custom Field resource
*CustomFieldApi* | [**getCustomFieldList**](docs/Api/CustomFieldApi.md#getcustomfieldlist) | **GET** /custom-field | List with basic information of Custom Field resources
*CustomFieldApi* | [**updateCustomField**](docs/Api/CustomFieldApi.md#updatecustomfield) | **PATCH** /custom-field/{id} | Partially update information about a Custom Field resource
*CustomFieldSetApi* | [**createCustomFieldSet**](docs/Api/CustomFieldSetApi.md#createcustomfieldset) | **POST** /custom-field-set | Create a new Custom Field Set resources
*CustomFieldSetApi* | [**deleteCustomFieldSet**](docs/Api/CustomFieldSetApi.md#deletecustomfieldset) | **DELETE** /custom-field-set/{id} | Delete a Custom Field Set resource
*CustomFieldSetApi* | [**getCustomFieldSet**](docs/Api/CustomFieldSetApi.md#getcustomfieldset) | **GET** /custom-field-set/{id} | Detailed information about a Custom Field Set resource
*CustomFieldSetApi* | [**getCustomFieldSetList**](docs/Api/CustomFieldSetApi.md#getcustomfieldsetlist) | **GET** /custom-field-set | List with basic information of Custom Field Set resources
*CustomFieldSetApi* | [**updateCustomFieldSet**](docs/Api/CustomFieldSetApi.md#updatecustomfieldset) | **PATCH** /custom-field-set/{id} | Partially update information about a Custom Field Set resource
*CustomFieldSetRelationApi* | [**createCustomFieldSetRelation**](docs/Api/CustomFieldSetRelationApi.md#createcustomfieldsetrelation) | **POST** /custom-field-set-relation | Create a new Custom Field Set Relation resources
*CustomFieldSetRelationApi* | [**deleteCustomFieldSetRelation**](docs/Api/CustomFieldSetRelationApi.md#deletecustomfieldsetrelation) | **DELETE** /custom-field-set-relation/{id} | Delete a Custom Field Set Relation resource
*CustomFieldSetRelationApi* | [**getCustomFieldSetRelation**](docs/Api/CustomFieldSetRelationApi.md#getcustomfieldsetrelation) | **GET** /custom-field-set-relation/{id} | Detailed information about a Custom Field Set Relation resource
*CustomFieldSetRelationApi* | [**getCustomFieldSetRelationList**](docs/Api/CustomFieldSetRelationApi.md#getcustomfieldsetrelationlist) | **GET** /custom-field-set-relation | List with basic information of Custom Field Set Relation resources
*CustomFieldSetRelationApi* | [**updateCustomFieldSetRelation**](docs/Api/CustomFieldSetRelationApi.md#updatecustomfieldsetrelation) | **PATCH** /custom-field-set-relation/{id} | Partially update information about a Custom Field Set Relation resource
*CustomerApi* | [**createCustomer**](docs/Api/CustomerApi.md#createcustomer) | **POST** /customer | Create a new Customer resources
*CustomerApi* | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | **DELETE** /customer/{id} | Delete a Customer resource
*CustomerApi* | [**getCustomer**](docs/Api/CustomerApi.md#getcustomer) | **GET** /customer/{id} | Detailed information about a Customer resource
*CustomerApi* | [**getCustomerList**](docs/Api/CustomerApi.md#getcustomerlist) | **GET** /customer | List with basic information of Customer resources
*CustomerApi* | [**updateCustomer**](docs/Api/CustomerApi.md#updatecustomer) | **PATCH** /customer/{id} | Partially update information about a Customer resource
*CustomerAddressApi* | [**createCustomerAddress**](docs/Api/CustomerAddressApi.md#createcustomeraddress) | **POST** /customer-address | Create a new Customer Address resources
*CustomerAddressApi* | [**deleteCustomerAddress**](docs/Api/CustomerAddressApi.md#deletecustomeraddress) | **DELETE** /customer-address/{id} | Delete a Customer Address resource
*CustomerAddressApi* | [**getCustomerAddress**](docs/Api/CustomerAddressApi.md#getcustomeraddress) | **GET** /customer-address/{id} | Detailed information about a Customer Address resource
*CustomerAddressApi* | [**getCustomerAddressList**](docs/Api/CustomerAddressApi.md#getcustomeraddresslist) | **GET** /customer-address | List with basic information of Customer Address resources
*CustomerAddressApi* | [**updateCustomerAddress**](docs/Api/CustomerAddressApi.md#updatecustomeraddress) | **PATCH** /customer-address/{id} | Partially update information about a Customer Address resource
*CustomerGroupApi* | [**createCustomerGroup**](docs/Api/CustomerGroupApi.md#createcustomergroup) | **POST** /customer-group | Create a new Customer Group resources
*CustomerGroupApi* | [**deleteCustomerGroup**](docs/Api/CustomerGroupApi.md#deletecustomergroup) | **DELETE** /customer-group/{id} | Delete a Customer Group resource
*CustomerGroupApi* | [**getCustomerGroup**](docs/Api/CustomerGroupApi.md#getcustomergroup) | **GET** /customer-group/{id} | Detailed information about a Customer Group resource
*CustomerGroupApi* | [**getCustomerGroupList**](docs/Api/CustomerGroupApi.md#getcustomergrouplist) | **GET** /customer-group | List with basic information of Customer Group resources
*CustomerGroupApi* | [**updateCustomerGroup**](docs/Api/CustomerGroupApi.md#updatecustomergroup) | **PATCH** /customer-group/{id} | Partially update information about a Customer Group resource
*CustomerRecoveryApi* | [**createCustomerRecovery**](docs/Api/CustomerRecoveryApi.md#createcustomerrecovery) | **POST** /customer-recovery | Create a new Customer Recovery resources
*CustomerRecoveryApi* | [**deleteCustomerRecovery**](docs/Api/CustomerRecoveryApi.md#deletecustomerrecovery) | **DELETE** /customer-recovery/{id} | Delete a Customer Recovery resource
*CustomerRecoveryApi* | [**getCustomerRecovery**](docs/Api/CustomerRecoveryApi.md#getcustomerrecovery) | **GET** /customer-recovery/{id} | Detailed information about a Customer Recovery resource
*CustomerRecoveryApi* | [**getCustomerRecoveryList**](docs/Api/CustomerRecoveryApi.md#getcustomerrecoverylist) | **GET** /customer-recovery | List with basic information of Customer Recovery resources
*CustomerRecoveryApi* | [**updateCustomerRecovery**](docs/Api/CustomerRecoveryApi.md#updatecustomerrecovery) | **PATCH** /customer-recovery/{id} | Partially update information about a Customer Recovery resource
*CustomerWishlistApi* | [**createCustomerWishlist**](docs/Api/CustomerWishlistApi.md#createcustomerwishlist) | **POST** /customer-wishlist | Create a new Customer Wishlist resources
*CustomerWishlistApi* | [**deleteCustomerWishlist**](docs/Api/CustomerWishlistApi.md#deletecustomerwishlist) | **DELETE** /customer-wishlist/{id} | Delete a Customer Wishlist resource
*CustomerWishlistApi* | [**getCustomerWishlist**](docs/Api/CustomerWishlistApi.md#getcustomerwishlist) | **GET** /customer-wishlist/{id} | Detailed information about a Customer Wishlist resource
*CustomerWishlistApi* | [**getCustomerWishlistList**](docs/Api/CustomerWishlistApi.md#getcustomerwishlistlist) | **GET** /customer-wishlist | List with basic information of Customer Wishlist resources
*CustomerWishlistApi* | [**updateCustomerWishlist**](docs/Api/CustomerWishlistApi.md#updatecustomerwishlist) | **PATCH** /customer-wishlist/{id} | Partially update information about a Customer Wishlist resource
*CustomerWishlistProductApi* | [**createCustomerWishlistProduct**](docs/Api/CustomerWishlistProductApi.md#createcustomerwishlistproduct) | **POST** /customer-wishlist-product | Create a new Customer Wishlist Product resources
*CustomerWishlistProductApi* | [**deleteCustomerWishlistProduct**](docs/Api/CustomerWishlistProductApi.md#deletecustomerwishlistproduct) | **DELETE** /customer-wishlist-product/{id} | Delete a Customer Wishlist Product resource
*CustomerWishlistProductApi* | [**getCustomerWishlistProduct**](docs/Api/CustomerWishlistProductApi.md#getcustomerwishlistproduct) | **GET** /customer-wishlist-product/{id} | Detailed information about a Customer Wishlist Product resource
*CustomerWishlistProductApi* | [**getCustomerWishlistProductList**](docs/Api/CustomerWishlistProductApi.md#getcustomerwishlistproductlist) | **GET** /customer-wishlist-product | List with basic information of Customer Wishlist Product resources
*CustomerWishlistProductApi* | [**updateCustomerWishlistProduct**](docs/Api/CustomerWishlistProductApi.md#updatecustomerwishlistproduct) | **PATCH** /customer-wishlist-product/{id} | Partially update information about a Customer Wishlist Product resource
*DatabaseMigrationsApi* | [**migrate**](docs/Api/DatabaseMigrationsApi.md#migrate) | **POST** /_action/database/migrate | Execute migrations
*DatabaseMigrationsApi* | [**migrateDestructive**](docs/Api/DatabaseMigrationsApi.md#migratedestructive) | **POST** /_action/database/migrate-destructive | Execute destructive migrations
*DatabaseMigrationsApi* | [**syncMigrations**](docs/Api/DatabaseMigrationsApi.md#syncmigrations) | **POST** /_action/database/sync-migration | Sync migrations to the database
*DeadMessageApi* | [**createDeadMessage**](docs/Api/DeadMessageApi.md#createdeadmessage) | **POST** /dead-message | Create a new Dead Message resources
*DeadMessageApi* | [**deleteDeadMessage**](docs/Api/DeadMessageApi.md#deletedeadmessage) | **DELETE** /dead-message/{id} | Delete a Dead Message resource
*DeadMessageApi* | [**getDeadMessage**](docs/Api/DeadMessageApi.md#getdeadmessage) | **GET** /dead-message/{id} | Detailed information about a Dead Message resource
*DeadMessageApi* | [**getDeadMessageList**](docs/Api/DeadMessageApi.md#getdeadmessagelist) | **GET** /dead-message | List with basic information of Dead Message resources
*DeadMessageApi* | [**updateDeadMessage**](docs/Api/DeadMessageApi.md#updatedeadmessage) | **PATCH** /dead-message/{id} | Partially update information about a Dead Message resource
*DeliveryTimeApi* | [**createDeliveryTime**](docs/Api/DeliveryTimeApi.md#createdeliverytime) | **POST** /delivery-time | Create a new Delivery Time resources
*DeliveryTimeApi* | [**deleteDeliveryTime**](docs/Api/DeliveryTimeApi.md#deletedeliverytime) | **DELETE** /delivery-time/{id} | Delete a Delivery Time resource
*DeliveryTimeApi* | [**getDeliveryTime**](docs/Api/DeliveryTimeApi.md#getdeliverytime) | **GET** /delivery-time/{id} | Detailed information about a Delivery Time resource
*DeliveryTimeApi* | [**getDeliveryTimeList**](docs/Api/DeliveryTimeApi.md#getdeliverytimelist) | **GET** /delivery-time | List with basic information of Delivery Time resources
*DeliveryTimeApi* | [**updateDeliveryTime**](docs/Api/DeliveryTimeApi.md#updatedeliverytime) | **PATCH** /delivery-time/{id} | Partially update information about a Delivery Time resource
*DneCustomJsCssApi* | [**createDneCustomJsCss**](docs/Api/DneCustomJsCssApi.md#creatednecustomjscss) | **POST** /dne-custom-js-css | Create a new Dne Custom Js Css resources
*DneCustomJsCssApi* | [**deleteDneCustomJsCss**](docs/Api/DneCustomJsCssApi.md#deletednecustomjscss) | **DELETE** /dne-custom-js-css/{id} | Delete a Dne Custom Js Css resource
*DneCustomJsCssApi* | [**getDneCustomJsCss**](docs/Api/DneCustomJsCssApi.md#getdnecustomjscss) | **GET** /dne-custom-js-css/{id} | Detailed information about a Dne Custom Js Css resource
*DneCustomJsCssApi* | [**getDneCustomJsCssList**](docs/Api/DneCustomJsCssApi.md#getdnecustomjscsslist) | **GET** /dne-custom-js-css | List with basic information of Dne Custom Js Css resources
*DneCustomJsCssApi* | [**updateDneCustomJsCss**](docs/Api/DneCustomJsCssApi.md#updatednecustomjscss) | **PATCH** /dne-custom-js-css/{id} | Partially update information about a Dne Custom Js Css resource
*DocumentApi* | [**createDocument**](docs/Api/DocumentApi.md#createdocument) | **POST** /document | Create a new Document resources
*DocumentApi* | [**deleteDocument**](docs/Api/DocumentApi.md#deletedocument) | **DELETE** /document/{id} | Delete a Document resource
*DocumentApi* | [**getDocument**](docs/Api/DocumentApi.md#getdocument) | **GET** /document/{id} | Detailed information about a Document resource
*DocumentApi* | [**getDocumentList**](docs/Api/DocumentApi.md#getdocumentlist) | **GET** /document | List with basic information of Document resources
*DocumentApi* | [**updateDocument**](docs/Api/DocumentApi.md#updatedocument) | **PATCH** /document/{id} | Partially update information about a Document resource
*DocumentBaseConfigApi* | [**createDocumentBaseConfig**](docs/Api/DocumentBaseConfigApi.md#createdocumentbaseconfig) | **POST** /document-base-config | Create a new Document Base Config resources
*DocumentBaseConfigApi* | [**deleteDocumentBaseConfig**](docs/Api/DocumentBaseConfigApi.md#deletedocumentbaseconfig) | **DELETE** /document-base-config/{id} | Delete a Document Base Config resource
*DocumentBaseConfigApi* | [**getDocumentBaseConfig**](docs/Api/DocumentBaseConfigApi.md#getdocumentbaseconfig) | **GET** /document-base-config/{id} | Detailed information about a Document Base Config resource
*DocumentBaseConfigApi* | [**getDocumentBaseConfigList**](docs/Api/DocumentBaseConfigApi.md#getdocumentbaseconfiglist) | **GET** /document-base-config | List with basic information of Document Base Config resources
*DocumentBaseConfigApi* | [**updateDocumentBaseConfig**](docs/Api/DocumentBaseConfigApi.md#updatedocumentbaseconfig) | **PATCH** /document-base-config/{id} | Partially update information about a Document Base Config resource
*DocumentBaseConfigSalesChannelApi* | [**createDocumentBaseConfigSalesChannel**](docs/Api/DocumentBaseConfigSalesChannelApi.md#createdocumentbaseconfigsaleschannel) | **POST** /document-base-config-sales-channel | Create a new Document Base Config Sales Channel resources
*DocumentBaseConfigSalesChannelApi* | [**deleteDocumentBaseConfigSalesChannel**](docs/Api/DocumentBaseConfigSalesChannelApi.md#deletedocumentbaseconfigsaleschannel) | **DELETE** /document-base-config-sales-channel/{id} | Delete a Document Base Config Sales Channel resource
*DocumentBaseConfigSalesChannelApi* | [**getDocumentBaseConfigSalesChannel**](docs/Api/DocumentBaseConfigSalesChannelApi.md#getdocumentbaseconfigsaleschannel) | **GET** /document-base-config-sales-channel/{id} | Detailed information about a Document Base Config Sales Channel resource
*DocumentBaseConfigSalesChannelApi* | [**getDocumentBaseConfigSalesChannelList**](docs/Api/DocumentBaseConfigSalesChannelApi.md#getdocumentbaseconfigsaleschannellist) | **GET** /document-base-config-sales-channel | List with basic information of Document Base Config Sales Channel resources
*DocumentBaseConfigSalesChannelApi* | [**updateDocumentBaseConfigSalesChannel**](docs/Api/DocumentBaseConfigSalesChannelApi.md#updatedocumentbaseconfigsaleschannel) | **PATCH** /document-base-config-sales-channel/{id} | Partially update information about a Document Base Config Sales Channel resource
*DocumentManagementApi* | [**createDocument**](docs/Api/DocumentManagementApi.md#createdocument) | **POST** /_action/order/{orderId}/document/{documentTypeName} | Create a document for an order
*DocumentManagementApi* | [**downloadDocument**](docs/Api/DocumentManagementApi.md#downloaddocument) | **GET** /_action/document/{documentId}/{deepLinkCode} | Download a document
*DocumentManagementApi* | [**numberRangeReserve**](docs/Api/DocumentManagementApi.md#numberrangereserve) | **GET** /_action/number-range/reserve/{type}/{saleschannel?} | Reserve or preview a document number
*DocumentManagementApi* | [**uploadToDocument**](docs/Api/DocumentManagementApi.md#uploadtodocument) | **POST** /_action/document/{documentId}/upload | Upload a file for a document
*DocumentTypeApi* | [**createDocumentType**](docs/Api/DocumentTypeApi.md#createdocumenttype) | **POST** /document-type | Create a new Document Type resources
*DocumentTypeApi* | [**deleteDocumentType**](docs/Api/DocumentTypeApi.md#deletedocumenttype) | **DELETE** /document-type/{id} | Delete a Document Type resource
*DocumentTypeApi* | [**getDocumentType**](docs/Api/DocumentTypeApi.md#getdocumenttype) | **GET** /document-type/{id} | Detailed information about a Document Type resource
*DocumentTypeApi* | [**getDocumentTypeList**](docs/Api/DocumentTypeApi.md#getdocumenttypelist) | **GET** /document-type | List with basic information of Document Type resources
*DocumentTypeApi* | [**updateDocumentType**](docs/Api/DocumentTypeApi.md#updatedocumenttype) | **PATCH** /document-type/{id} | Partially update information about a Document Type resource
*DreiscSeoBulkApi* | [**createDreiscSeoBulk**](docs/Api/DreiscSeoBulkApi.md#createdreiscseobulk) | **POST** /dreisc-seo-bulk | Create a new Dreisc Seo Bulk resources
*DreiscSeoBulkApi* | [**deleteDreiscSeoBulk**](docs/Api/DreiscSeoBulkApi.md#deletedreiscseobulk) | **DELETE** /dreisc-seo-bulk/{id} | Delete a Dreisc Seo Bulk resource
*DreiscSeoBulkApi* | [**getDreiscSeoBulk**](docs/Api/DreiscSeoBulkApi.md#getdreiscseobulk) | **GET** /dreisc-seo-bulk/{id} | Detailed information about a Dreisc Seo Bulk resource
*DreiscSeoBulkApi* | [**getDreiscSeoBulkList**](docs/Api/DreiscSeoBulkApi.md#getdreiscseobulklist) | **GET** /dreisc-seo-bulk | List with basic information of Dreisc Seo Bulk resources
*DreiscSeoBulkApi* | [**updateDreiscSeoBulk**](docs/Api/DreiscSeoBulkApi.md#updatedreiscseobulk) | **PATCH** /dreisc-seo-bulk/{id} | Partially update information about a Dreisc Seo Bulk resource
*DreiscSeoBulkTemplateApi* | [**createDreiscSeoBulkTemplate**](docs/Api/DreiscSeoBulkTemplateApi.md#createdreiscseobulktemplate) | **POST** /dreisc-seo-bulk-template | Create a new Dreisc Seo Bulk Template resources
*DreiscSeoBulkTemplateApi* | [**deleteDreiscSeoBulkTemplate**](docs/Api/DreiscSeoBulkTemplateApi.md#deletedreiscseobulktemplate) | **DELETE** /dreisc-seo-bulk-template/{id} | Delete a Dreisc Seo Bulk Template resource
*DreiscSeoBulkTemplateApi* | [**getDreiscSeoBulkTemplate**](docs/Api/DreiscSeoBulkTemplateApi.md#getdreiscseobulktemplate) | **GET** /dreisc-seo-bulk-template/{id} | Detailed information about a Dreisc Seo Bulk Template resource
*DreiscSeoBulkTemplateApi* | [**getDreiscSeoBulkTemplateList**](docs/Api/DreiscSeoBulkTemplateApi.md#getdreiscseobulktemplatelist) | **GET** /dreisc-seo-bulk-template | List with basic information of Dreisc Seo Bulk Template resources
*DreiscSeoBulkTemplateApi* | [**updateDreiscSeoBulkTemplate**](docs/Api/DreiscSeoBulkTemplateApi.md#updatedreiscseobulktemplate) | **PATCH** /dreisc-seo-bulk-template/{id} | Partially update information about a Dreisc Seo Bulk Template resource
*DreiscSeoRedirectApi* | [**createDreiscSeoRedirect**](docs/Api/DreiscSeoRedirectApi.md#createdreiscseoredirect) | **POST** /dreisc-seo-redirect | Create a new Dreisc Seo Redirect resources
*DreiscSeoRedirectApi* | [**deleteDreiscSeoRedirect**](docs/Api/DreiscSeoRedirectApi.md#deletedreiscseoredirect) | **DELETE** /dreisc-seo-redirect/{id} | Delete a Dreisc Seo Redirect resource
*DreiscSeoRedirectApi* | [**getDreiscSeoRedirect**](docs/Api/DreiscSeoRedirectApi.md#getdreiscseoredirect) | **GET** /dreisc-seo-redirect/{id} | Detailed information about a Dreisc Seo Redirect resource
*DreiscSeoRedirectApi* | [**getDreiscSeoRedirectList**](docs/Api/DreiscSeoRedirectApi.md#getdreiscseoredirectlist) | **GET** /dreisc-seo-redirect | List with basic information of Dreisc Seo Redirect resources
*DreiscSeoRedirectApi* | [**updateDreiscSeoRedirect**](docs/Api/DreiscSeoRedirectApi.md#updatedreiscseoredirect) | **PATCH** /dreisc-seo-redirect/{id} | Partially update information about a Dreisc Seo Redirect resource
*DreiscSeoRedirectImportExportFileApi* | [**createDreiscSeoRedirectImportExportFile**](docs/Api/DreiscSeoRedirectImportExportFileApi.md#createdreiscseoredirectimportexportfile) | **POST** /dreisc-seo-redirect-import-export-file | Create a new Dreisc Seo Redirect Import Export File resources
*DreiscSeoRedirectImportExportFileApi* | [**deleteDreiscSeoRedirectImportExportFile**](docs/Api/DreiscSeoRedirectImportExportFileApi.md#deletedreiscseoredirectimportexportfile) | **DELETE** /dreisc-seo-redirect-import-export-file/{id} | Delete a Dreisc Seo Redirect Import Export File resource
*DreiscSeoRedirectImportExportFileApi* | [**getDreiscSeoRedirectImportExportFile**](docs/Api/DreiscSeoRedirectImportExportFileApi.md#getdreiscseoredirectimportexportfile) | **GET** /dreisc-seo-redirect-import-export-file/{id} | Detailed information about a Dreisc Seo Redirect Import Export File resource
*DreiscSeoRedirectImportExportFileApi* | [**getDreiscSeoRedirectImportExportFileList**](docs/Api/DreiscSeoRedirectImportExportFileApi.md#getdreiscseoredirectimportexportfilelist) | **GET** /dreisc-seo-redirect-import-export-file | List with basic information of Dreisc Seo Redirect Import Export File resources
*DreiscSeoRedirectImportExportFileApi* | [**updateDreiscSeoRedirectImportExportFile**](docs/Api/DreiscSeoRedirectImportExportFileApi.md#updatedreiscseoredirectimportexportfile) | **PATCH** /dreisc-seo-redirect-import-export-file/{id} | Partially update information about a Dreisc Seo Redirect Import Export File resource
*DreiscSeoRedirectImportExportLogApi* | [**createDreiscSeoRedirectImportExportLog**](docs/Api/DreiscSeoRedirectImportExportLogApi.md#createdreiscseoredirectimportexportlog) | **POST** /dreisc-seo-redirect-import-export-log | Create a new Dreisc Seo Redirect Import Export Log resources
*DreiscSeoRedirectImportExportLogApi* | [**deleteDreiscSeoRedirectImportExportLog**](docs/Api/DreiscSeoRedirectImportExportLogApi.md#deletedreiscseoredirectimportexportlog) | **DELETE** /dreisc-seo-redirect-import-export-log/{id} | Delete a Dreisc Seo Redirect Import Export Log resource
*DreiscSeoRedirectImportExportLogApi* | [**getDreiscSeoRedirectImportExportLog**](docs/Api/DreiscSeoRedirectImportExportLogApi.md#getdreiscseoredirectimportexportlog) | **GET** /dreisc-seo-redirect-import-export-log/{id} | Detailed information about a Dreisc Seo Redirect Import Export Log resource
*DreiscSeoRedirectImportExportLogApi* | [**getDreiscSeoRedirectImportExportLogList**](docs/Api/DreiscSeoRedirectImportExportLogApi.md#getdreiscseoredirectimportexportloglist) | **GET** /dreisc-seo-redirect-import-export-log | List with basic information of Dreisc Seo Redirect Import Export Log resources
*DreiscSeoRedirectImportExportLogApi* | [**updateDreiscSeoRedirectImportExportLog**](docs/Api/DreiscSeoRedirectImportExportLogApi.md#updatedreiscseoredirectimportexportlog) | **PATCH** /dreisc-seo-redirect-import-export-log/{id} | Partially update information about a Dreisc Seo Redirect Import Export Log resource
*DreiscSeoSettingApi* | [**createDreiscSeoSetting**](docs/Api/DreiscSeoSettingApi.md#createdreiscseosetting) | **POST** /dreisc-seo-setting | Create a new Dreisc Seo Setting resources
*DreiscSeoSettingApi* | [**deleteDreiscSeoSetting**](docs/Api/DreiscSeoSettingApi.md#deletedreiscseosetting) | **DELETE** /dreisc-seo-setting/{id} | Delete a Dreisc Seo Setting resource
*DreiscSeoSettingApi* | [**getDreiscSeoSetting**](docs/Api/DreiscSeoSettingApi.md#getdreiscseosetting) | **GET** /dreisc-seo-setting/{id} | Detailed information about a Dreisc Seo Setting resource
*DreiscSeoSettingApi* | [**getDreiscSeoSettingList**](docs/Api/DreiscSeoSettingApi.md#getdreiscseosettinglist) | **GET** /dreisc-seo-setting | List with basic information of Dreisc Seo Setting resources
*DreiscSeoSettingApi* | [**updateDreiscSeoSetting**](docs/Api/DreiscSeoSettingApi.md#updatedreiscseosetting) | **PATCH** /dreisc-seo-setting/{id} | Partially update information about a Dreisc Seo Setting resource
*EventActionApi* | [**createEventAction**](docs/Api/EventActionApi.md#createeventaction) | **POST** /event-action | Create a new Event Action resources
*EventActionApi* | [**deleteEventAction**](docs/Api/EventActionApi.md#deleteeventaction) | **DELETE** /event-action/{id} | Delete a Event Action resource
*EventActionApi* | [**getEventAction**](docs/Api/EventActionApi.md#geteventaction) | **GET** /event-action/{id} | Detailed information about a Event Action resource
*EventActionApi* | [**getEventActionList**](docs/Api/EventActionApi.md#geteventactionlist) | **GET** /event-action | List with basic information of Event Action resources
*EventActionApi* | [**updateEventAction**](docs/Api/EventActionApi.md#updateeventaction) | **PATCH** /event-action/{id} | Partially update information about a Event Action resource
*FlowApi* | [**createFlow**](docs/Api/FlowApi.md#createflow) | **POST** /flow | Create a new Flow resources
*FlowApi* | [**deleteFlow**](docs/Api/FlowApi.md#deleteflow) | **DELETE** /flow/{id} | Delete a Flow resource
*FlowApi* | [**getFlow**](docs/Api/FlowApi.md#getflow) | **GET** /flow/{id} | Detailed information about a Flow resource
*FlowApi* | [**getFlowList**](docs/Api/FlowApi.md#getflowlist) | **GET** /flow | List with basic information of Flow resources
*FlowApi* | [**updateFlow**](docs/Api/FlowApi.md#updateflow) | **PATCH** /flow/{id} | Partially update information about a Flow resource
*FlowSequenceApi* | [**createFlowSequence**](docs/Api/FlowSequenceApi.md#createflowsequence) | **POST** /flow-sequence | Create a new Flow Sequence resources
*FlowSequenceApi* | [**deleteFlowSequence**](docs/Api/FlowSequenceApi.md#deleteflowsequence) | **DELETE** /flow-sequence/{id} | Delete a Flow Sequence resource
*FlowSequenceApi* | [**getFlowSequence**](docs/Api/FlowSequenceApi.md#getflowsequence) | **GET** /flow-sequence/{id} | Detailed information about a Flow Sequence resource
*FlowSequenceApi* | [**getFlowSequenceList**](docs/Api/FlowSequenceApi.md#getflowsequencelist) | **GET** /flow-sequence | List with basic information of Flow Sequence resources
*FlowSequenceApi* | [**updateFlowSequence**](docs/Api/FlowSequenceApi.md#updateflowsequence) | **PATCH** /flow-sequence/{id} | Partially update information about a Flow Sequence resource
*ImportExportFileApi* | [**createImportExportFile**](docs/Api/ImportExportFileApi.md#createimportexportfile) | **POST** /import-export-file | Create a new Import Export File resources
*ImportExportFileApi* | [**deleteImportExportFile**](docs/Api/ImportExportFileApi.md#deleteimportexportfile) | **DELETE** /import-export-file/{id} | Delete a Import Export File resource
*ImportExportFileApi* | [**getImportExportFile**](docs/Api/ImportExportFileApi.md#getimportexportfile) | **GET** /import-export-file/{id} | Detailed information about a Import Export File resource
*ImportExportFileApi* | [**getImportExportFileList**](docs/Api/ImportExportFileApi.md#getimportexportfilelist) | **GET** /import-export-file | List with basic information of Import Export File resources
*ImportExportFileApi* | [**updateImportExportFile**](docs/Api/ImportExportFileApi.md#updateimportexportfile) | **PATCH** /import-export-file/{id} | Partially update information about a Import Export File resource
*ImportExportLogApi* | [**createImportExportLog**](docs/Api/ImportExportLogApi.md#createimportexportlog) | **POST** /import-export-log | Create a new Import Export Log resources
*ImportExportLogApi* | [**deleteImportExportLog**](docs/Api/ImportExportLogApi.md#deleteimportexportlog) | **DELETE** /import-export-log/{id} | Delete a Import Export Log resource
*ImportExportLogApi* | [**getImportExportLog**](docs/Api/ImportExportLogApi.md#getimportexportlog) | **GET** /import-export-log/{id} | Detailed information about a Import Export Log resource
*ImportExportLogApi* | [**getImportExportLogList**](docs/Api/ImportExportLogApi.md#getimportexportloglist) | **GET** /import-export-log | List with basic information of Import Export Log resources
*ImportExportLogApi* | [**updateImportExportLog**](docs/Api/ImportExportLogApi.md#updateimportexportlog) | **PATCH** /import-export-log/{id} | Partially update information about a Import Export Log resource
*ImportExportProfileApi* | [**createImportExportProfile**](docs/Api/ImportExportProfileApi.md#createimportexportprofile) | **POST** /import-export-profile | Create a new Import Export Profile resources
*ImportExportProfileApi* | [**deleteImportExportProfile**](docs/Api/ImportExportProfileApi.md#deleteimportexportprofile) | **DELETE** /import-export-profile/{id} | Delete a Import Export Profile resource
*ImportExportProfileApi* | [**getImportExportProfile**](docs/Api/ImportExportProfileApi.md#getimportexportprofile) | **GET** /import-export-profile/{id} | Detailed information about a Import Export Profile resource
*ImportExportProfileApi* | [**getImportExportProfileList**](docs/Api/ImportExportProfileApi.md#getimportexportprofilelist) | **GET** /import-export-profile | List with basic information of Import Export Profile resources
*ImportExportProfileApi* | [**updateImportExportProfile**](docs/Api/ImportExportProfileApi.md#updateimportexportprofile) | **PATCH** /import-export-profile/{id} | Partially update information about a Import Export Profile resource
*IntegrationApi* | [**createIntegration**](docs/Api/IntegrationApi.md#createintegration) | **POST** /integration | Create a new Integration resources
*IntegrationApi* | [**deleteIntegration**](docs/Api/IntegrationApi.md#deleteintegration) | **DELETE** /integration/{id} | Delete a Integration resource
*IntegrationApi* | [**getIntegration**](docs/Api/IntegrationApi.md#getintegration) | **GET** /integration/{id} | Detailed information about a Integration resource
*IntegrationApi* | [**getIntegrationList**](docs/Api/IntegrationApi.md#getintegrationlist) | **GET** /integration | List with basic information of Integration resources
*IntegrationApi* | [**updateIntegration**](docs/Api/IntegrationApi.md#updateintegration) | **PATCH** /integration/{id} | Partially update information about a Integration resource
*LandingPageApi* | [**createLandingPage**](docs/Api/LandingPageApi.md#createlandingpage) | **POST** /landing-page | Create a new Landing Page resources
*LandingPageApi* | [**deleteLandingPage**](docs/Api/LandingPageApi.md#deletelandingpage) | **DELETE** /landing-page/{id} | Delete a Landing Page resource
*LandingPageApi* | [**getLandingPage**](docs/Api/LandingPageApi.md#getlandingpage) | **GET** /landing-page/{id} | Detailed information about a Landing Page resource
*LandingPageApi* | [**getLandingPageList**](docs/Api/LandingPageApi.md#getlandingpagelist) | **GET** /landing-page | List with basic information of Landing Page resources
*LandingPageApi* | [**updateLandingPage**](docs/Api/LandingPageApi.md#updatelandingpage) | **PATCH** /landing-page/{id} | Partially update information about a Landing Page resource
*LanguageApi* | [**createLanguage**](docs/Api/LanguageApi.md#createlanguage) | **POST** /language | Create a new Language resources
*LanguageApi* | [**deleteLanguage**](docs/Api/LanguageApi.md#deletelanguage) | **DELETE** /language/{id} | Delete a Language resource
*LanguageApi* | [**getLanguage**](docs/Api/LanguageApi.md#getlanguage) | **GET** /language/{id} | Detailed information about a Language resource
*LanguageApi* | [**getLanguageList**](docs/Api/LanguageApi.md#getlanguagelist) | **GET** /language | List with basic information of Language resources
*LanguageApi* | [**updateLanguage**](docs/Api/LanguageApi.md#updatelanguage) | **PATCH** /language/{id} | Partially update information about a Language resource
*LenzPlatformClpApi* | [**createLenzPlatformClp**](docs/Api/LenzPlatformClpApi.md#createlenzplatformclp) | **POST** /lenz-platform-clp | Create a new Lenz Platform Clp resources
*LenzPlatformClpApi* | [**deleteLenzPlatformClp**](docs/Api/LenzPlatformClpApi.md#deletelenzplatformclp) | **DELETE** /lenz-platform-clp/{id} | Delete a Lenz Platform Clp resource
*LenzPlatformClpApi* | [**getLenzPlatformClp**](docs/Api/LenzPlatformClpApi.md#getlenzplatformclp) | **GET** /lenz-platform-clp/{id} | Detailed information about a Lenz Platform Clp resource
*LenzPlatformClpApi* | [**getLenzPlatformClpList**](docs/Api/LenzPlatformClpApi.md#getlenzplatformclplist) | **GET** /lenz-platform-clp | List with basic information of Lenz Platform Clp resources
*LenzPlatformClpApi* | [**updateLenzPlatformClp**](docs/Api/LenzPlatformClpApi.md#updatelenzplatformclp) | **PATCH** /lenz-platform-clp/{id} | Partially update information about a Lenz Platform Clp resource
*LocaleApi* | [**createLocale**](docs/Api/LocaleApi.md#createlocale) | **POST** /locale | Create a new Locale resources
*LocaleApi* | [**deleteLocale**](docs/Api/LocaleApi.md#deletelocale) | **DELETE** /locale/{id} | Delete a Locale resource
*LocaleApi* | [**getLocale**](docs/Api/LocaleApi.md#getlocale) | **GET** /locale/{id} | Detailed information about a Locale resource
*LocaleApi* | [**getLocaleList**](docs/Api/LocaleApi.md#getlocalelist) | **GET** /locale | List with basic information of Locale resources
*LocaleApi* | [**updateLocale**](docs/Api/LocaleApi.md#updatelocale) | **PATCH** /locale/{id} | Partially update information about a Locale resource
*LogEntryApi* | [**createLogEntry**](docs/Api/LogEntryApi.md#createlogentry) | **POST** /log-entry | Create a new Log Entry resources
*LogEntryApi* | [**deleteLogEntry**](docs/Api/LogEntryApi.md#deletelogentry) | **DELETE** /log-entry/{id} | Delete a Log Entry resource
*LogEntryApi* | [**getLogEntry**](docs/Api/LogEntryApi.md#getlogentry) | **GET** /log-entry/{id} | Detailed information about a Log Entry resource
*LogEntryApi* | [**getLogEntryList**](docs/Api/LogEntryApi.md#getlogentrylist) | **GET** /log-entry | List with basic information of Log Entry resources
*LogEntryApi* | [**updateLogEntry**](docs/Api/LogEntryApi.md#updatelogentry) | **PATCH** /log-entry/{id} | Partially update information about a Log Entry resource
*MailHeaderFooterApi* | [**createMailHeaderFooter**](docs/Api/MailHeaderFooterApi.md#createmailheaderfooter) | **POST** /mail-header-footer | Create a new Mail Header Footer resources
*MailHeaderFooterApi* | [**deleteMailHeaderFooter**](docs/Api/MailHeaderFooterApi.md#deletemailheaderfooter) | **DELETE** /mail-header-footer/{id} | Delete a Mail Header Footer resource
*MailHeaderFooterApi* | [**getMailHeaderFooter**](docs/Api/MailHeaderFooterApi.md#getmailheaderfooter) | **GET** /mail-header-footer/{id} | Detailed information about a Mail Header Footer resource
*MailHeaderFooterApi* | [**getMailHeaderFooterList**](docs/Api/MailHeaderFooterApi.md#getmailheaderfooterlist) | **GET** /mail-header-footer | List with basic information of Mail Header Footer resources
*MailHeaderFooterApi* | [**updateMailHeaderFooter**](docs/Api/MailHeaderFooterApi.md#updatemailheaderfooter) | **PATCH** /mail-header-footer/{id} | Partially update information about a Mail Header Footer resource
*MailOperationsApi* | [**build**](docs/Api/MailOperationsApi.md#build) | **POST** /_action/mail-template/build | Preview a mail template
*MailOperationsApi* | [**send**](docs/Api/MailOperationsApi.md#send) | **POST** /_action/mail-template/send | Send a mail
*MailOperationsApi* | [**validate**](docs/Api/MailOperationsApi.md#validate) | **POST** /_action/mail-template/validate | Validate a mail content
*MailTemplateApi* | [**createMailTemplate**](docs/Api/MailTemplateApi.md#createmailtemplate) | **POST** /mail-template | Create a new Mail Template resources
*MailTemplateApi* | [**deleteMailTemplate**](docs/Api/MailTemplateApi.md#deletemailtemplate) | **DELETE** /mail-template/{id} | Delete a Mail Template resource
*MailTemplateApi* | [**getMailTemplate**](docs/Api/MailTemplateApi.md#getmailtemplate) | **GET** /mail-template/{id} | Detailed information about a Mail Template resource
*MailTemplateApi* | [**getMailTemplateList**](docs/Api/MailTemplateApi.md#getmailtemplatelist) | **GET** /mail-template | List with basic information of Mail Template resources
*MailTemplateApi* | [**updateMailTemplate**](docs/Api/MailTemplateApi.md#updatemailtemplate) | **PATCH** /mail-template/{id} | Partially update information about a Mail Template resource
*MailTemplateTypeApi* | [**createMailTemplateType**](docs/Api/MailTemplateTypeApi.md#createmailtemplatetype) | **POST** /mail-template-type | Create a new Mail Template Type resources
*MailTemplateTypeApi* | [**deleteMailTemplateType**](docs/Api/MailTemplateTypeApi.md#deletemailtemplatetype) | **DELETE** /mail-template-type/{id} | Delete a Mail Template Type resource
*MailTemplateTypeApi* | [**getMailTemplateType**](docs/Api/MailTemplateTypeApi.md#getmailtemplatetype) | **GET** /mail-template-type/{id} | Detailed information about a Mail Template Type resource
*MailTemplateTypeApi* | [**getMailTemplateTypeList**](docs/Api/MailTemplateTypeApi.md#getmailtemplatetypelist) | **GET** /mail-template-type | List with basic information of Mail Template Type resources
*MailTemplateTypeApi* | [**updateMailTemplateType**](docs/Api/MailTemplateTypeApi.md#updatemailtemplatetype) | **PATCH** /mail-template-type/{id} | Partially update information about a Mail Template Type resource
*MainCategoryApi* | [**createMainCategory**](docs/Api/MainCategoryApi.md#createmaincategory) | **POST** /main-category | Create a new Main Category resources
*MainCategoryApi* | [**deleteMainCategory**](docs/Api/MainCategoryApi.md#deletemaincategory) | **DELETE** /main-category/{id} | Delete a Main Category resource
*MainCategoryApi* | [**getMainCategory**](docs/Api/MainCategoryApi.md#getmaincategory) | **GET** /main-category/{id} | Detailed information about a Main Category resource
*MainCategoryApi* | [**getMainCategoryList**](docs/Api/MainCategoryApi.md#getmaincategorylist) | **GET** /main-category | List with basic information of Main Category resources
*MainCategoryApi* | [**updateMainCategory**](docs/Api/MainCategoryApi.md#updatemaincategory) | **PATCH** /main-category/{id} | Partially update information about a Main Category resource
*MediaApi* | [**createMedia**](docs/Api/MediaApi.md#createmedia) | **POST** /media | Create a new Media resources
*MediaApi* | [**deleteMedia**](docs/Api/MediaApi.md#deletemedia) | **DELETE** /media/{id} | Delete a Media resource
*MediaApi* | [**getMedia**](docs/Api/MediaApi.md#getmedia) | **GET** /media/{id} | Detailed information about a Media resource
*MediaApi* | [**getMediaList**](docs/Api/MediaApi.md#getmedialist) | **GET** /media | List with basic information of Media resources
*MediaApi* | [**updateMedia**](docs/Api/MediaApi.md#updatemedia) | **PATCH** /media/{id} | Partially update information about a Media resource
*MediaDefaultFolderApi* | [**createMediaDefaultFolder**](docs/Api/MediaDefaultFolderApi.md#createmediadefaultfolder) | **POST** /media-default-folder | Create a new Media Default Folder resources
*MediaDefaultFolderApi* | [**deleteMediaDefaultFolder**](docs/Api/MediaDefaultFolderApi.md#deletemediadefaultfolder) | **DELETE** /media-default-folder/{id} | Delete a Media Default Folder resource
*MediaDefaultFolderApi* | [**getMediaDefaultFolder**](docs/Api/MediaDefaultFolderApi.md#getmediadefaultfolder) | **GET** /media-default-folder/{id} | Detailed information about a Media Default Folder resource
*MediaDefaultFolderApi* | [**getMediaDefaultFolderList**](docs/Api/MediaDefaultFolderApi.md#getmediadefaultfolderlist) | **GET** /media-default-folder | List with basic information of Media Default Folder resources
*MediaDefaultFolderApi* | [**updateMediaDefaultFolder**](docs/Api/MediaDefaultFolderApi.md#updatemediadefaultfolder) | **PATCH** /media-default-folder/{id} | Partially update information about a Media Default Folder resource
*MediaFolderApi* | [**createMediaFolder**](docs/Api/MediaFolderApi.md#createmediafolder) | **POST** /media-folder | Create a new Media Folder resources
*MediaFolderApi* | [**deleteMediaFolder**](docs/Api/MediaFolderApi.md#deletemediafolder) | **DELETE** /media-folder/{id} | Delete a Media Folder resource
*MediaFolderApi* | [**getMediaFolder**](docs/Api/MediaFolderApi.md#getmediafolder) | **GET** /media-folder/{id} | Detailed information about a Media Folder resource
*MediaFolderApi* | [**getMediaFolderList**](docs/Api/MediaFolderApi.md#getmediafolderlist) | **GET** /media-folder | List with basic information of Media Folder resources
*MediaFolderApi* | [**updateMediaFolder**](docs/Api/MediaFolderApi.md#updatemediafolder) | **PATCH** /media-folder/{id} | Partially update information about a Media Folder resource
*MediaFolderConfigurationApi* | [**createMediaFolderConfiguration**](docs/Api/MediaFolderConfigurationApi.md#createmediafolderconfiguration) | **POST** /media-folder-configuration | Create a new Media Folder Configuration resources
*MediaFolderConfigurationApi* | [**deleteMediaFolderConfiguration**](docs/Api/MediaFolderConfigurationApi.md#deletemediafolderconfiguration) | **DELETE** /media-folder-configuration/{id} | Delete a Media Folder Configuration resource
*MediaFolderConfigurationApi* | [**getMediaFolderConfiguration**](docs/Api/MediaFolderConfigurationApi.md#getmediafolderconfiguration) | **GET** /media-folder-configuration/{id} | Detailed information about a Media Folder Configuration resource
*MediaFolderConfigurationApi* | [**getMediaFolderConfigurationList**](docs/Api/MediaFolderConfigurationApi.md#getmediafolderconfigurationlist) | **GET** /media-folder-configuration | List with basic information of Media Folder Configuration resources
*MediaFolderConfigurationApi* | [**updateMediaFolderConfiguration**](docs/Api/MediaFolderConfigurationApi.md#updatemediafolderconfiguration) | **PATCH** /media-folder-configuration/{id} | Partially update information about a Media Folder Configuration resource
*MediaThumbnailApi* | [**createMediaThumbnail**](docs/Api/MediaThumbnailApi.md#createmediathumbnail) | **POST** /media-thumbnail | Create a new Media Thumbnail resources
*MediaThumbnailApi* | [**deleteMediaThumbnail**](docs/Api/MediaThumbnailApi.md#deletemediathumbnail) | **DELETE** /media-thumbnail/{id} | Delete a Media Thumbnail resource
*MediaThumbnailApi* | [**getMediaThumbnail**](docs/Api/MediaThumbnailApi.md#getmediathumbnail) | **GET** /media-thumbnail/{id} | Detailed information about a Media Thumbnail resource
*MediaThumbnailApi* | [**getMediaThumbnailList**](docs/Api/MediaThumbnailApi.md#getmediathumbnaillist) | **GET** /media-thumbnail | List with basic information of Media Thumbnail resources
*MediaThumbnailApi* | [**updateMediaThumbnail**](docs/Api/MediaThumbnailApi.md#updatemediathumbnail) | **PATCH** /media-thumbnail/{id} | Partially update information about a Media Thumbnail resource
*MediaThumbnailSizeApi* | [**createMediaThumbnailSize**](docs/Api/MediaThumbnailSizeApi.md#createmediathumbnailsize) | **POST** /media-thumbnail-size | Create a new Media Thumbnail Size resources
*MediaThumbnailSizeApi* | [**deleteMediaThumbnailSize**](docs/Api/MediaThumbnailSizeApi.md#deletemediathumbnailsize) | **DELETE** /media-thumbnail-size/{id} | Delete a Media Thumbnail Size resource
*MediaThumbnailSizeApi* | [**getMediaThumbnailSize**](docs/Api/MediaThumbnailSizeApi.md#getmediathumbnailsize) | **GET** /media-thumbnail-size/{id} | Detailed information about a Media Thumbnail Size resource
*MediaThumbnailSizeApi* | [**getMediaThumbnailSizeList**](docs/Api/MediaThumbnailSizeApi.md#getmediathumbnailsizelist) | **GET** /media-thumbnail-size | List with basic information of Media Thumbnail Size resources
*MediaThumbnailSizeApi* | [**updateMediaThumbnailSize**](docs/Api/MediaThumbnailSizeApi.md#updatemediathumbnailsize) | **PATCH** /media-thumbnail-size/{id} | Partially update information about a Media Thumbnail Size resource
*MessageQueueStatsApi* | [**createMessageQueueStats**](docs/Api/MessageQueueStatsApi.md#createmessagequeuestats) | **POST** /message-queue-stats | Create a new Message Queue Stats resources
*MessageQueueStatsApi* | [**deleteMessageQueueStats**](docs/Api/MessageQueueStatsApi.md#deletemessagequeuestats) | **DELETE** /message-queue-stats/{id} | Delete a Message Queue Stats resource
*MessageQueueStatsApi* | [**getMessageQueueStats**](docs/Api/MessageQueueStatsApi.md#getmessagequeuestats) | **GET** /message-queue-stats/{id} | Detailed information about a Message Queue Stats resource
*MessageQueueStatsApi* | [**getMessageQueueStatsList**](docs/Api/MessageQueueStatsApi.md#getmessagequeuestatslist) | **GET** /message-queue-stats | List with basic information of Message Queue Stats resources
*MessageQueueStatsApi* | [**updateMessageQueueStats**](docs/Api/MessageQueueStatsApi.md#updatemessagequeuestats) | **PATCH** /message-queue-stats/{id} | Partially update information about a Message Queue Stats resource
*NewsletterRecipientApi* | [**createNewsletterRecipient**](docs/Api/NewsletterRecipientApi.md#createnewsletterrecipient) | **POST** /newsletter-recipient | Create a new Newsletter Recipient resources
*NewsletterRecipientApi* | [**deleteNewsletterRecipient**](docs/Api/NewsletterRecipientApi.md#deletenewsletterrecipient) | **DELETE** /newsletter-recipient/{id} | Delete a Newsletter Recipient resource
*NewsletterRecipientApi* | [**getNewsletterRecipient**](docs/Api/NewsletterRecipientApi.md#getnewsletterrecipient) | **GET** /newsletter-recipient/{id} | Detailed information about a Newsletter Recipient resource
*NewsletterRecipientApi* | [**getNewsletterRecipientList**](docs/Api/NewsletterRecipientApi.md#getnewsletterrecipientlist) | **GET** /newsletter-recipient | List with basic information of Newsletter Recipient resources
*NewsletterRecipientApi* | [**updateNewsletterRecipient**](docs/Api/NewsletterRecipientApi.md#updatenewsletterrecipient) | **PATCH** /newsletter-recipient/{id} | Partially update information about a Newsletter Recipient resource
*NumberRangeApi* | [**createNumberRange**](docs/Api/NumberRangeApi.md#createnumberrange) | **POST** /number-range | Create a new Number Range resources
*NumberRangeApi* | [**deleteNumberRange**](docs/Api/NumberRangeApi.md#deletenumberrange) | **DELETE** /number-range/{id} | Delete a Number Range resource
*NumberRangeApi* | [**getNumberRange**](docs/Api/NumberRangeApi.md#getnumberrange) | **GET** /number-range/{id} | Detailed information about a Number Range resource
*NumberRangeApi* | [**getNumberRangeList**](docs/Api/NumberRangeApi.md#getnumberrangelist) | **GET** /number-range | List with basic information of Number Range resources
*NumberRangeApi* | [**updateNumberRange**](docs/Api/NumberRangeApi.md#updatenumberrange) | **PATCH** /number-range/{id} | Partially update information about a Number Range resource
*NumberRangeSalesChannelApi* | [**createNumberRangeSalesChannel**](docs/Api/NumberRangeSalesChannelApi.md#createnumberrangesaleschannel) | **POST** /number-range-sales-channel | Create a new Number Range Sales Channel resources
*NumberRangeSalesChannelApi* | [**deleteNumberRangeSalesChannel**](docs/Api/NumberRangeSalesChannelApi.md#deletenumberrangesaleschannel) | **DELETE** /number-range-sales-channel/{id} | Delete a Number Range Sales Channel resource
*NumberRangeSalesChannelApi* | [**getNumberRangeSalesChannel**](docs/Api/NumberRangeSalesChannelApi.md#getnumberrangesaleschannel) | **GET** /number-range-sales-channel/{id} | Detailed information about a Number Range Sales Channel resource
*NumberRangeSalesChannelApi* | [**getNumberRangeSalesChannelList**](docs/Api/NumberRangeSalesChannelApi.md#getnumberrangesaleschannellist) | **GET** /number-range-sales-channel | List with basic information of Number Range Sales Channel resources
*NumberRangeSalesChannelApi* | [**updateNumberRangeSalesChannel**](docs/Api/NumberRangeSalesChannelApi.md#updatenumberrangesaleschannel) | **PATCH** /number-range-sales-channel/{id} | Partially update information about a Number Range Sales Channel resource
*NumberRangeStateApi* | [**createNumberRangeState**](docs/Api/NumberRangeStateApi.md#createnumberrangestate) | **POST** /number-range-state | Create a new Number Range State resources
*NumberRangeStateApi* | [**deleteNumberRangeState**](docs/Api/NumberRangeStateApi.md#deletenumberrangestate) | **DELETE** /number-range-state/{id} | Delete a Number Range State resource
*NumberRangeStateApi* | [**getNumberRangeState**](docs/Api/NumberRangeStateApi.md#getnumberrangestate) | **GET** /number-range-state/{id} | Detailed information about a Number Range State resource
*NumberRangeStateApi* | [**getNumberRangeStateList**](docs/Api/NumberRangeStateApi.md#getnumberrangestatelist) | **GET** /number-range-state | List with basic information of Number Range State resources
*NumberRangeStateApi* | [**updateNumberRangeState**](docs/Api/NumberRangeStateApi.md#updatenumberrangestate) | **PATCH** /number-range-state/{id} | Partially update information about a Number Range State resource
*NumberRangeTypeApi* | [**createNumberRangeType**](docs/Api/NumberRangeTypeApi.md#createnumberrangetype) | **POST** /number-range-type | Create a new Number Range Type resources
*NumberRangeTypeApi* | [**deleteNumberRangeType**](docs/Api/NumberRangeTypeApi.md#deletenumberrangetype) | **DELETE** /number-range-type/{id} | Delete a Number Range Type resource
*NumberRangeTypeApi* | [**getNumberRangeType**](docs/Api/NumberRangeTypeApi.md#getnumberrangetype) | **GET** /number-range-type/{id} | Detailed information about a Number Range Type resource
*NumberRangeTypeApi* | [**getNumberRangeTypeList**](docs/Api/NumberRangeTypeApi.md#getnumberrangetypelist) | **GET** /number-range-type | List with basic information of Number Range Type resources
*NumberRangeTypeApi* | [**updateNumberRangeType**](docs/Api/NumberRangeTypeApi.md#updatenumberrangetype) | **PATCH** /number-range-type/{id} | Partially update information about a Number Range Type resource
*OrderApi* | [**createOrder**](docs/Api/OrderApi.md#createorder) | **POST** /order | Create a new Order resources
*OrderApi* | [**deleteOrder**](docs/Api/OrderApi.md#deleteorder) | **DELETE** /order/{id} | Delete a Order resource
*OrderApi* | [**getOrder**](docs/Api/OrderApi.md#getorder) | **GET** /order/{id} | Detailed information about a Order resource
*OrderApi* | [**getOrderList**](docs/Api/OrderApi.md#getorderlist) | **GET** /order | List with basic information of Order resources
*OrderApi* | [**updateOrder**](docs/Api/OrderApi.md#updateorder) | **PATCH** /order/{id} | Partially update information about a Order resource
*OrderAddressApi* | [**createOrderAddress**](docs/Api/OrderAddressApi.md#createorderaddress) | **POST** /order-address | Create a new Order Address resources
*OrderAddressApi* | [**deleteOrderAddress**](docs/Api/OrderAddressApi.md#deleteorderaddress) | **DELETE** /order-address/{id} | Delete a Order Address resource
*OrderAddressApi* | [**getOrderAddress**](docs/Api/OrderAddressApi.md#getorderaddress) | **GET** /order-address/{id} | Detailed information about a Order Address resource
*OrderAddressApi* | [**getOrderAddressList**](docs/Api/OrderAddressApi.md#getorderaddresslist) | **GET** /order-address | List with basic information of Order Address resources
*OrderAddressApi* | [**updateOrderAddress**](docs/Api/OrderAddressApi.md#updateorderaddress) | **PATCH** /order-address/{id} | Partially update information about a Order Address resource
*OrderCustomerApi* | [**createOrderCustomer**](docs/Api/OrderCustomerApi.md#createordercustomer) | **POST** /order-customer | Create a new Order Customer resources
*OrderCustomerApi* | [**deleteOrderCustomer**](docs/Api/OrderCustomerApi.md#deleteordercustomer) | **DELETE** /order-customer/{id} | Delete a Order Customer resource
*OrderCustomerApi* | [**getOrderCustomer**](docs/Api/OrderCustomerApi.md#getordercustomer) | **GET** /order-customer/{id} | Detailed information about a Order Customer resource
*OrderCustomerApi* | [**getOrderCustomerList**](docs/Api/OrderCustomerApi.md#getordercustomerlist) | **GET** /order-customer | List with basic information of Order Customer resources
*OrderCustomerApi* | [**updateOrderCustomer**](docs/Api/OrderCustomerApi.md#updateordercustomer) | **PATCH** /order-customer/{id} | Partially update information about a Order Customer resource
*OrderDeliveryApi* | [**createOrderDelivery**](docs/Api/OrderDeliveryApi.md#createorderdelivery) | **POST** /order-delivery | Create a new Order Delivery resources
*OrderDeliveryApi* | [**deleteOrderDelivery**](docs/Api/OrderDeliveryApi.md#deleteorderdelivery) | **DELETE** /order-delivery/{id} | Delete a Order Delivery resource
*OrderDeliveryApi* | [**getOrderDelivery**](docs/Api/OrderDeliveryApi.md#getorderdelivery) | **GET** /order-delivery/{id} | Detailed information about a Order Delivery resource
*OrderDeliveryApi* | [**getOrderDeliveryList**](docs/Api/OrderDeliveryApi.md#getorderdeliverylist) | **GET** /order-delivery | List with basic information of Order Delivery resources
*OrderDeliveryApi* | [**updateOrderDelivery**](docs/Api/OrderDeliveryApi.md#updateorderdelivery) | **PATCH** /order-delivery/{id} | Partially update information about a Order Delivery resource
*OrderDeliveryPositionApi* | [**createOrderDeliveryPosition**](docs/Api/OrderDeliveryPositionApi.md#createorderdeliveryposition) | **POST** /order-delivery-position | Create a new Order Delivery Position resources
*OrderDeliveryPositionApi* | [**deleteOrderDeliveryPosition**](docs/Api/OrderDeliveryPositionApi.md#deleteorderdeliveryposition) | **DELETE** /order-delivery-position/{id} | Delete a Order Delivery Position resource
*OrderDeliveryPositionApi* | [**getOrderDeliveryPosition**](docs/Api/OrderDeliveryPositionApi.md#getorderdeliveryposition) | **GET** /order-delivery-position/{id} | Detailed information about a Order Delivery Position resource
*OrderDeliveryPositionApi* | [**getOrderDeliveryPositionList**](docs/Api/OrderDeliveryPositionApi.md#getorderdeliverypositionlist) | **GET** /order-delivery-position | List with basic information of Order Delivery Position resources
*OrderDeliveryPositionApi* | [**updateOrderDeliveryPosition**](docs/Api/OrderDeliveryPositionApi.md#updateorderdeliveryposition) | **PATCH** /order-delivery-position/{id} | Partially update information about a Order Delivery Position resource
*OrderLineItemApi* | [**createOrderLineItem**](docs/Api/OrderLineItemApi.md#createorderlineitem) | **POST** /order-line-item | Create a new Order Line Item resources
*OrderLineItemApi* | [**deleteOrderLineItem**](docs/Api/OrderLineItemApi.md#deleteorderlineitem) | **DELETE** /order-line-item/{id} | Delete a Order Line Item resource
*OrderLineItemApi* | [**getOrderLineItem**](docs/Api/OrderLineItemApi.md#getorderlineitem) | **GET** /order-line-item/{id} | Detailed information about a Order Line Item resource
*OrderLineItemApi* | [**getOrderLineItemList**](docs/Api/OrderLineItemApi.md#getorderlineitemlist) | **GET** /order-line-item | List with basic information of Order Line Item resources
*OrderLineItemApi* | [**updateOrderLineItem**](docs/Api/OrderLineItemApi.md#updateorderlineitem) | **PATCH** /order-line-item/{id} | Partially update information about a Order Line Item resource
*OrderManagementApi* | [**orderDeliveryStateTransition**](docs/Api/OrderManagementApi.md#orderdeliverystatetransition) | **POST** /_action/order_delivery/{orderDeliveryId}/state/{transition} | Transition an order delivery to a new state
*OrderManagementApi* | [**orderStateTransition**](docs/Api/OrderManagementApi.md#orderstatetransition) | **POST** /_action/order/{orderId}/state/{transition} | Transition an order to a new state
*OrderManagementApi* | [**orderTransactionStateTransition**](docs/Api/OrderManagementApi.md#ordertransactionstatetransition) | **POST** /_action/order_transaction/{orderTransactionId}/state/{transition} | Transition an order transaction to a new state
*OrderTransactionApi* | [**createOrderTransaction**](docs/Api/OrderTransactionApi.md#createordertransaction) | **POST** /order-transaction | Create a new Order Transaction resources
*OrderTransactionApi* | [**deleteOrderTransaction**](docs/Api/OrderTransactionApi.md#deleteordertransaction) | **DELETE** /order-transaction/{id} | Delete a Order Transaction resource
*OrderTransactionApi* | [**getOrderTransaction**](docs/Api/OrderTransactionApi.md#getordertransaction) | **GET** /order-transaction/{id} | Detailed information about a Order Transaction resource
*OrderTransactionApi* | [**getOrderTransactionList**](docs/Api/OrderTransactionApi.md#getordertransactionlist) | **GET** /order-transaction | List with basic information of Order Transaction resources
*OrderTransactionApi* | [**updateOrderTransaction**](docs/Api/OrderTransactionApi.md#updateordertransaction) | **PATCH** /order-transaction/{id} | Partially update information about a Order Transaction resource
*PayPalApi* | [**authorizationDetails**](docs/Api/PayPalApi.md#authorizationdetails) | **GET** /paypal-v2/authorization/{orderTransactionId}/{authorizationId} | 
*PayPalApi* | [**captureAuthorization**](docs/Api/PayPalApi.md#captureauthorization) | **POST** /_action/paypal-v2/capture-authorization/{orderTransactionId}/{authorizationId} | 
*PayPalApi* | [**captureDetails**](docs/Api/PayPalApi.md#capturedetails) | **GET** /paypal-v2/capture/{orderTransactionId}/{captureId} | 
*PayPalApi* | [**disputeDetails**](docs/Api/PayPalApi.md#disputedetails) | **GET** /paypal/dispute/{disputeId} | 
*PayPalApi* | [**disputeList**](docs/Api/PayPalApi.md#disputelist) | **GET** /paypal/dispute | 
*PayPalApi* | [**orderDetails**](docs/Api/PayPalApi.md#orderdetails) | **GET** /paypal-v2/order/{orderTransactionId}/{paypalOrderId} | 
*PayPalApi* | [**paymentDetails**](docs/Api/PayPalApi.md#paymentdetails) | **GET** /paypal/payment-details/{orderId}/{paymentId} | 
*PayPalApi* | [**refundCapture**](docs/Api/PayPalApi.md#refundcapture) | **POST** /_action/paypal-v2/refund-capture/{orderTransactionId}/{captureId}/{paypalOrderId} | 
*PayPalApi* | [**refundDetails**](docs/Api/PayPalApi.md#refunddetails) | **GET** /paypal-v2/refund/{orderTransactionId}/{refundId} | 
*PayPalApi* | [**resourceDetails**](docs/Api/PayPalApi.md#resourcedetails) | **GET** /paypal/resource-details/{resourceType}/{resourceId}/{orderId} | 
*PayPalApi* | [**voidAuthorization**](docs/Api/PayPalApi.md#voidauthorization) | **POST** /_action/paypal-v2/void-authorization/{orderTransactionId}/{authorizationId} | 
*PaymentMethodApi* | [**createPaymentMethod**](docs/Api/PaymentMethodApi.md#createpaymentmethod) | **POST** /payment-method | Create a new Payment Method resources
*PaymentMethodApi* | [**deletePaymentMethod**](docs/Api/PaymentMethodApi.md#deletepaymentmethod) | **DELETE** /payment-method/{id} | Delete a Payment Method resource
*PaymentMethodApi* | [**getPaymentMethod**](docs/Api/PaymentMethodApi.md#getpaymentmethod) | **GET** /payment-method/{id} | Detailed information about a Payment Method resource
*PaymentMethodApi* | [**getPaymentMethodList**](docs/Api/PaymentMethodApi.md#getpaymentmethodlist) | **GET** /payment-method | List with basic information of Payment Method resources
*PaymentMethodApi* | [**updatePaymentMethod**](docs/Api/PaymentMethodApi.md#updatepaymentmethod) | **PATCH** /payment-method/{id} | Partially update information about a Payment Method resource
*PluginApi* | [**createPlugin**](docs/Api/PluginApi.md#createplugin) | **POST** /plugin | Create a new Plugin resources
*PluginApi* | [**deletePlugin**](docs/Api/PluginApi.md#deleteplugin) | **DELETE** /plugin/{id} | Delete a Plugin resource
*PluginApi* | [**getPlugin**](docs/Api/PluginApi.md#getplugin) | **GET** /plugin/{id} | Detailed information about a Plugin resource
*PluginApi* | [**getPluginList**](docs/Api/PluginApi.md#getpluginlist) | **GET** /plugin | List with basic information of Plugin resources
*PluginApi* | [**updatePlugin**](docs/Api/PluginApi.md#updateplugin) | **PATCH** /plugin/{id} | Partially update information about a Plugin resource
*ProductApi* | [**createProduct**](docs/Api/ProductApi.md#createproduct) | **POST** /product | Create a new Product resources
*ProductApi* | [**deleteProduct**](docs/Api/ProductApi.md#deleteproduct) | **DELETE** /product/{id} | Delete a Product resource
*ProductApi* | [**getProduct**](docs/Api/ProductApi.md#getproduct) | **GET** /product/{id} | Detailed information about a Product resource
*ProductApi* | [**getProductList**](docs/Api/ProductApi.md#getproductlist) | **GET** /product | List with basic information of Product resources
*ProductApi* | [**updateProduct**](docs/Api/ProductApi.md#updateproduct) | **PATCH** /product/{id} | Partially update information about a Product resource
*ProductConfiguratorSettingApi* | [**createProductConfiguratorSetting**](docs/Api/ProductConfiguratorSettingApi.md#createproductconfiguratorsetting) | **POST** /product-configurator-setting | Create a new Product Configurator Setting resources
*ProductConfiguratorSettingApi* | [**deleteProductConfiguratorSetting**](docs/Api/ProductConfiguratorSettingApi.md#deleteproductconfiguratorsetting) | **DELETE** /product-configurator-setting/{id} | Delete a Product Configurator Setting resource
*ProductConfiguratorSettingApi* | [**getProductConfiguratorSetting**](docs/Api/ProductConfiguratorSettingApi.md#getproductconfiguratorsetting) | **GET** /product-configurator-setting/{id} | Detailed information about a Product Configurator Setting resource
*ProductConfiguratorSettingApi* | [**getProductConfiguratorSettingList**](docs/Api/ProductConfiguratorSettingApi.md#getproductconfiguratorsettinglist) | **GET** /product-configurator-setting | List with basic information of Product Configurator Setting resources
*ProductConfiguratorSettingApi* | [**updateProductConfiguratorSetting**](docs/Api/ProductConfiguratorSettingApi.md#updateproductconfiguratorsetting) | **PATCH** /product-configurator-setting/{id} | Partially update information about a Product Configurator Setting resource
*ProductCrossSellingApi* | [**createProductCrossSelling**](docs/Api/ProductCrossSellingApi.md#createproductcrossselling) | **POST** /product-cross-selling | Create a new Product Cross Selling resources
*ProductCrossSellingApi* | [**deleteProductCrossSelling**](docs/Api/ProductCrossSellingApi.md#deleteproductcrossselling) | **DELETE** /product-cross-selling/{id} | Delete a Product Cross Selling resource
*ProductCrossSellingApi* | [**getProductCrossSelling**](docs/Api/ProductCrossSellingApi.md#getproductcrossselling) | **GET** /product-cross-selling/{id} | Detailed information about a Product Cross Selling resource
*ProductCrossSellingApi* | [**getProductCrossSellingList**](docs/Api/ProductCrossSellingApi.md#getproductcrosssellinglist) | **GET** /product-cross-selling | List with basic information of Product Cross Selling resources
*ProductCrossSellingApi* | [**updateProductCrossSelling**](docs/Api/ProductCrossSellingApi.md#updateproductcrossselling) | **PATCH** /product-cross-selling/{id} | Partially update information about a Product Cross Selling resource
*ProductCrossSellingAssignedProductsApi* | [**createProductCrossSellingAssignedProducts**](docs/Api/ProductCrossSellingAssignedProductsApi.md#createproductcrosssellingassignedproducts) | **POST** /product-cross-selling-assigned-products | Create a new Product Cross Selling Assigned Products resources
*ProductCrossSellingAssignedProductsApi* | [**deleteProductCrossSellingAssignedProducts**](docs/Api/ProductCrossSellingAssignedProductsApi.md#deleteproductcrosssellingassignedproducts) | **DELETE** /product-cross-selling-assigned-products/{id} | Delete a Product Cross Selling Assigned Products resource
*ProductCrossSellingAssignedProductsApi* | [**getProductCrossSellingAssignedProducts**](docs/Api/ProductCrossSellingAssignedProductsApi.md#getproductcrosssellingassignedproducts) | **GET** /product-cross-selling-assigned-products/{id} | Detailed information about a Product Cross Selling Assigned Products resource
*ProductCrossSellingAssignedProductsApi* | [**getProductCrossSellingAssignedProductsList**](docs/Api/ProductCrossSellingAssignedProductsApi.md#getproductcrosssellingassignedproductslist) | **GET** /product-cross-selling-assigned-products | List with basic information of Product Cross Selling Assigned Products resources
*ProductCrossSellingAssignedProductsApi* | [**updateProductCrossSellingAssignedProducts**](docs/Api/ProductCrossSellingAssignedProductsApi.md#updateproductcrosssellingassignedproducts) | **PATCH** /product-cross-selling-assigned-products/{id} | Partially update information about a Product Cross Selling Assigned Products resource
*ProductExportApi* | [**createProductExport**](docs/Api/ProductExportApi.md#createproductexport) | **POST** /product-export | Create a new Product Export resources
*ProductExportApi* | [**deleteProductExport**](docs/Api/ProductExportApi.md#deleteproductexport) | **DELETE** /product-export/{id} | Delete a Product Export resource
*ProductExportApi* | [**getProductExport**](docs/Api/ProductExportApi.md#getproductexport) | **GET** /product-export/{id} | Detailed information about a Product Export resource
*ProductExportApi* | [**getProductExportList**](docs/Api/ProductExportApi.md#getproductexportlist) | **GET** /product-export | List with basic information of Product Export resources
*ProductExportApi* | [**updateProductExport**](docs/Api/ProductExportApi.md#updateproductexport) | **PATCH** /product-export/{id} | Partially update information about a Product Export resource
*ProductFeatureSetApi* | [**createProductFeatureSet**](docs/Api/ProductFeatureSetApi.md#createproductfeatureset) | **POST** /product-feature-set | Create a new Product Feature Set resources
*ProductFeatureSetApi* | [**deleteProductFeatureSet**](docs/Api/ProductFeatureSetApi.md#deleteproductfeatureset) | **DELETE** /product-feature-set/{id} | Delete a Product Feature Set resource
*ProductFeatureSetApi* | [**getProductFeatureSet**](docs/Api/ProductFeatureSetApi.md#getproductfeatureset) | **GET** /product-feature-set/{id} | Detailed information about a Product Feature Set resource
*ProductFeatureSetApi* | [**getProductFeatureSetList**](docs/Api/ProductFeatureSetApi.md#getproductfeaturesetlist) | **GET** /product-feature-set | List with basic information of Product Feature Set resources
*ProductFeatureSetApi* | [**updateProductFeatureSet**](docs/Api/ProductFeatureSetApi.md#updateproductfeatureset) | **PATCH** /product-feature-set/{id} | Partially update information about a Product Feature Set resource
*ProductKeywordDictionaryApi* | [**createProductKeywordDictionary**](docs/Api/ProductKeywordDictionaryApi.md#createproductkeyworddictionary) | **POST** /product-keyword-dictionary | Create a new Product Keyword Dictionary resources
*ProductKeywordDictionaryApi* | [**deleteProductKeywordDictionary**](docs/Api/ProductKeywordDictionaryApi.md#deleteproductkeyworddictionary) | **DELETE** /product-keyword-dictionary/{id} | Delete a Product Keyword Dictionary resource
*ProductKeywordDictionaryApi* | [**getProductKeywordDictionary**](docs/Api/ProductKeywordDictionaryApi.md#getproductkeyworddictionary) | **GET** /product-keyword-dictionary/{id} | Detailed information about a Product Keyword Dictionary resource
*ProductKeywordDictionaryApi* | [**getProductKeywordDictionaryList**](docs/Api/ProductKeywordDictionaryApi.md#getproductkeyworddictionarylist) | **GET** /product-keyword-dictionary | List with basic information of Product Keyword Dictionary resources
*ProductKeywordDictionaryApi* | [**updateProductKeywordDictionary**](docs/Api/ProductKeywordDictionaryApi.md#updateproductkeyworddictionary) | **PATCH** /product-keyword-dictionary/{id} | Partially update information about a Product Keyword Dictionary resource
*ProductManufacturerApi* | [**createProductManufacturer**](docs/Api/ProductManufacturerApi.md#createproductmanufacturer) | **POST** /product-manufacturer | Create a new Product Manufacturer resources
*ProductManufacturerApi* | [**deleteProductManufacturer**](docs/Api/ProductManufacturerApi.md#deleteproductmanufacturer) | **DELETE** /product-manufacturer/{id} | Delete a Product Manufacturer resource
*ProductManufacturerApi* | [**getProductManufacturer**](docs/Api/ProductManufacturerApi.md#getproductmanufacturer) | **GET** /product-manufacturer/{id} | Detailed information about a Product Manufacturer resource
*ProductManufacturerApi* | [**getProductManufacturerList**](docs/Api/ProductManufacturerApi.md#getproductmanufacturerlist) | **GET** /product-manufacturer | List with basic information of Product Manufacturer resources
*ProductManufacturerApi* | [**updateProductManufacturer**](docs/Api/ProductManufacturerApi.md#updateproductmanufacturer) | **PATCH** /product-manufacturer/{id} | Partially update information about a Product Manufacturer resource
*ProductMediaApi* | [**createProductMedia**](docs/Api/ProductMediaApi.md#createproductmedia) | **POST** /product-media | Create a new Product Media resources
*ProductMediaApi* | [**deleteProductMedia**](docs/Api/ProductMediaApi.md#deleteproductmedia) | **DELETE** /product-media/{id} | Delete a Product Media resource
*ProductMediaApi* | [**getProductMedia**](docs/Api/ProductMediaApi.md#getproductmedia) | **GET** /product-media/{id} | Detailed information about a Product Media resource
*ProductMediaApi* | [**getProductMediaList**](docs/Api/ProductMediaApi.md#getproductmedialist) | **GET** /product-media | List with basic information of Product Media resources
*ProductMediaApi* | [**updateProductMedia**](docs/Api/ProductMediaApi.md#updateproductmedia) | **PATCH** /product-media/{id} | Partially update information about a Product Media resource
*ProductPriceApi* | [**createProductPrice**](docs/Api/ProductPriceApi.md#createproductprice) | **POST** /product-price | Create a new Product Price resources
*ProductPriceApi* | [**deleteProductPrice**](docs/Api/ProductPriceApi.md#deleteproductprice) | **DELETE** /product-price/{id} | Delete a Product Price resource
*ProductPriceApi* | [**getProductPrice**](docs/Api/ProductPriceApi.md#getproductprice) | **GET** /product-price/{id} | Detailed information about a Product Price resource
*ProductPriceApi* | [**getProductPriceList**](docs/Api/ProductPriceApi.md#getproductpricelist) | **GET** /product-price | List with basic information of Product Price resources
*ProductPriceApi* | [**updateProductPrice**](docs/Api/ProductPriceApi.md#updateproductprice) | **PATCH** /product-price/{id} | Partially update information about a Product Price resource
*ProductReviewApi* | [**createProductReview**](docs/Api/ProductReviewApi.md#createproductreview) | **POST** /product-review | Create a new Product Review resources
*ProductReviewApi* | [**deleteProductReview**](docs/Api/ProductReviewApi.md#deleteproductreview) | **DELETE** /product-review/{id} | Delete a Product Review resource
*ProductReviewApi* | [**getProductReview**](docs/Api/ProductReviewApi.md#getproductreview) | **GET** /product-review/{id} | Detailed information about a Product Review resource
*ProductReviewApi* | [**getProductReviewList**](docs/Api/ProductReviewApi.md#getproductreviewlist) | **GET** /product-review | List with basic information of Product Review resources
*ProductReviewApi* | [**updateProductReview**](docs/Api/ProductReviewApi.md#updateproductreview) | **PATCH** /product-review/{id} | Partially update information about a Product Review resource
*ProductSearchConfigApi* | [**createProductSearchConfig**](docs/Api/ProductSearchConfigApi.md#createproductsearchconfig) | **POST** /product-search-config | Create a new Product Search Config resources
*ProductSearchConfigApi* | [**deleteProductSearchConfig**](docs/Api/ProductSearchConfigApi.md#deleteproductsearchconfig) | **DELETE** /product-search-config/{id} | Delete a Product Search Config resource
*ProductSearchConfigApi* | [**getProductSearchConfig**](docs/Api/ProductSearchConfigApi.md#getproductsearchconfig) | **GET** /product-search-config/{id} | Detailed information about a Product Search Config resource
*ProductSearchConfigApi* | [**getProductSearchConfigList**](docs/Api/ProductSearchConfigApi.md#getproductsearchconfiglist) | **GET** /product-search-config | List with basic information of Product Search Config resources
*ProductSearchConfigApi* | [**updateProductSearchConfig**](docs/Api/ProductSearchConfigApi.md#updateproductsearchconfig) | **PATCH** /product-search-config/{id} | Partially update information about a Product Search Config resource
*ProductSearchConfigFieldApi* | [**createProductSearchConfigField**](docs/Api/ProductSearchConfigFieldApi.md#createproductsearchconfigfield) | **POST** /product-search-config-field | Create a new Product Search Config Field resources
*ProductSearchConfigFieldApi* | [**deleteProductSearchConfigField**](docs/Api/ProductSearchConfigFieldApi.md#deleteproductsearchconfigfield) | **DELETE** /product-search-config-field/{id} | Delete a Product Search Config Field resource
*ProductSearchConfigFieldApi* | [**getProductSearchConfigField**](docs/Api/ProductSearchConfigFieldApi.md#getproductsearchconfigfield) | **GET** /product-search-config-field/{id} | Detailed information about a Product Search Config Field resource
*ProductSearchConfigFieldApi* | [**getProductSearchConfigFieldList**](docs/Api/ProductSearchConfigFieldApi.md#getproductsearchconfigfieldlist) | **GET** /product-search-config-field | List with basic information of Product Search Config Field resources
*ProductSearchConfigFieldApi* | [**updateProductSearchConfigField**](docs/Api/ProductSearchConfigFieldApi.md#updateproductsearchconfigfield) | **PATCH** /product-search-config-field/{id} | Partially update information about a Product Search Config Field resource
*ProductSearchKeywordApi* | [**createProductSearchKeyword**](docs/Api/ProductSearchKeywordApi.md#createproductsearchkeyword) | **POST** /product-search-keyword | Create a new Product Search Keyword resources
*ProductSearchKeywordApi* | [**deleteProductSearchKeyword**](docs/Api/ProductSearchKeywordApi.md#deleteproductsearchkeyword) | **DELETE** /product-search-keyword/{id} | Delete a Product Search Keyword resource
*ProductSearchKeywordApi* | [**getProductSearchKeyword**](docs/Api/ProductSearchKeywordApi.md#getproductsearchkeyword) | **GET** /product-search-keyword/{id} | Detailed information about a Product Search Keyword resource
*ProductSearchKeywordApi* | [**getProductSearchKeywordList**](docs/Api/ProductSearchKeywordApi.md#getproductsearchkeywordlist) | **GET** /product-search-keyword | List with basic information of Product Search Keyword resources
*ProductSearchKeywordApi* | [**updateProductSearchKeyword**](docs/Api/ProductSearchKeywordApi.md#updateproductsearchkeyword) | **PATCH** /product-search-keyword/{id} | Partially update information about a Product Search Keyword resource
*ProductSortingApi* | [**createProductSorting**](docs/Api/ProductSortingApi.md#createproductsorting) | **POST** /product-sorting | Create a new Product Sorting resources
*ProductSortingApi* | [**deleteProductSorting**](docs/Api/ProductSortingApi.md#deleteproductsorting) | **DELETE** /product-sorting/{id} | Delete a Product Sorting resource
*ProductSortingApi* | [**getProductSorting**](docs/Api/ProductSortingApi.md#getproductsorting) | **GET** /product-sorting/{id} | Detailed information about a Product Sorting resource
*ProductSortingApi* | [**getProductSortingList**](docs/Api/ProductSortingApi.md#getproductsortinglist) | **GET** /product-sorting | List with basic information of Product Sorting resources
*ProductSortingApi* | [**updateProductSorting**](docs/Api/ProductSortingApi.md#updateproductsorting) | **PATCH** /product-sorting/{id} | Partially update information about a Product Sorting resource
*ProductStreamApi* | [**createProductStream**](docs/Api/ProductStreamApi.md#createproductstream) | **POST** /product-stream | Create a new Product Stream resources
*ProductStreamApi* | [**deleteProductStream**](docs/Api/ProductStreamApi.md#deleteproductstream) | **DELETE** /product-stream/{id} | Delete a Product Stream resource
*ProductStreamApi* | [**getProductStream**](docs/Api/ProductStreamApi.md#getproductstream) | **GET** /product-stream/{id} | Detailed information about a Product Stream resource
*ProductStreamApi* | [**getProductStreamList**](docs/Api/ProductStreamApi.md#getproductstreamlist) | **GET** /product-stream | List with basic information of Product Stream resources
*ProductStreamApi* | [**updateProductStream**](docs/Api/ProductStreamApi.md#updateproductstream) | **PATCH** /product-stream/{id} | Partially update information about a Product Stream resource
*ProductStreamFilterApi* | [**createProductStreamFilter**](docs/Api/ProductStreamFilterApi.md#createproductstreamfilter) | **POST** /product-stream-filter | Create a new Product Stream Filter resources
*ProductStreamFilterApi* | [**deleteProductStreamFilter**](docs/Api/ProductStreamFilterApi.md#deleteproductstreamfilter) | **DELETE** /product-stream-filter/{id} | Delete a Product Stream Filter resource
*ProductStreamFilterApi* | [**getProductStreamFilter**](docs/Api/ProductStreamFilterApi.md#getproductstreamfilter) | **GET** /product-stream-filter/{id} | Detailed information about a Product Stream Filter resource
*ProductStreamFilterApi* | [**getProductStreamFilterList**](docs/Api/ProductStreamFilterApi.md#getproductstreamfilterlist) | **GET** /product-stream-filter | List with basic information of Product Stream Filter resources
*ProductStreamFilterApi* | [**updateProductStreamFilter**](docs/Api/ProductStreamFilterApi.md#updateproductstreamfilter) | **PATCH** /product-stream-filter/{id} | Partially update information about a Product Stream Filter resource
*ProductVisibilityApi* | [**createProductVisibility**](docs/Api/ProductVisibilityApi.md#createproductvisibility) | **POST** /product-visibility | Create a new Product Visibility resources
*ProductVisibilityApi* | [**deleteProductVisibility**](docs/Api/ProductVisibilityApi.md#deleteproductvisibility) | **DELETE** /product-visibility/{id} | Delete a Product Visibility resource
*ProductVisibilityApi* | [**getProductVisibility**](docs/Api/ProductVisibilityApi.md#getproductvisibility) | **GET** /product-visibility/{id} | Detailed information about a Product Visibility resource
*ProductVisibilityApi* | [**getProductVisibilityList**](docs/Api/ProductVisibilityApi.md#getproductvisibilitylist) | **GET** /product-visibility | List with basic information of Product Visibility resources
*ProductVisibilityApi* | [**updateProductVisibility**](docs/Api/ProductVisibilityApi.md#updateproductvisibility) | **PATCH** /product-visibility/{id} | Partially update information about a Product Visibility resource
*PromotionApi* | [**createPromotion**](docs/Api/PromotionApi.md#createpromotion) | **POST** /promotion | Create a new Promotion resources
*PromotionApi* | [**deletePromotion**](docs/Api/PromotionApi.md#deletepromotion) | **DELETE** /promotion/{id} | Delete a Promotion resource
*PromotionApi* | [**getPromotion**](docs/Api/PromotionApi.md#getpromotion) | **GET** /promotion/{id} | Detailed information about a Promotion resource
*PromotionApi* | [**getPromotionList**](docs/Api/PromotionApi.md#getpromotionlist) | **GET** /promotion | List with basic information of Promotion resources
*PromotionApi* | [**updatePromotion**](docs/Api/PromotionApi.md#updatepromotion) | **PATCH** /promotion/{id} | Partially update information about a Promotion resource
*PromotionDiscountApi* | [**createPromotionDiscount**](docs/Api/PromotionDiscountApi.md#createpromotiondiscount) | **POST** /promotion-discount | Create a new Promotion Discount resources
*PromotionDiscountApi* | [**deletePromotionDiscount**](docs/Api/PromotionDiscountApi.md#deletepromotiondiscount) | **DELETE** /promotion-discount/{id} | Delete a Promotion Discount resource
*PromotionDiscountApi* | [**getPromotionDiscount**](docs/Api/PromotionDiscountApi.md#getpromotiondiscount) | **GET** /promotion-discount/{id} | Detailed information about a Promotion Discount resource
*PromotionDiscountApi* | [**getPromotionDiscountList**](docs/Api/PromotionDiscountApi.md#getpromotiondiscountlist) | **GET** /promotion-discount | List with basic information of Promotion Discount resources
*PromotionDiscountApi* | [**updatePromotionDiscount**](docs/Api/PromotionDiscountApi.md#updatepromotiondiscount) | **PATCH** /promotion-discount/{id} | Partially update information about a Promotion Discount resource
*PromotionDiscountPricesApi* | [**createPromotionDiscountPrices**](docs/Api/PromotionDiscountPricesApi.md#createpromotiondiscountprices) | **POST** /promotion-discount-prices | Create a new Promotion Discount Prices resources
*PromotionDiscountPricesApi* | [**deletePromotionDiscountPrices**](docs/Api/PromotionDiscountPricesApi.md#deletepromotiondiscountprices) | **DELETE** /promotion-discount-prices/{id} | Delete a Promotion Discount Prices resource
*PromotionDiscountPricesApi* | [**getPromotionDiscountPrices**](docs/Api/PromotionDiscountPricesApi.md#getpromotiondiscountprices) | **GET** /promotion-discount-prices/{id} | Detailed information about a Promotion Discount Prices resource
*PromotionDiscountPricesApi* | [**getPromotionDiscountPricesList**](docs/Api/PromotionDiscountPricesApi.md#getpromotiondiscountpriceslist) | **GET** /promotion-discount-prices | List with basic information of Promotion Discount Prices resources
*PromotionDiscountPricesApi* | [**updatePromotionDiscountPrices**](docs/Api/PromotionDiscountPricesApi.md#updatepromotiondiscountprices) | **PATCH** /promotion-discount-prices/{id} | Partially update information about a Promotion Discount Prices resource
*PromotionIndividualCodeApi* | [**createPromotionIndividualCode**](docs/Api/PromotionIndividualCodeApi.md#createpromotionindividualcode) | **POST** /promotion-individual-code | Create a new Promotion Individual Code resources
*PromotionIndividualCodeApi* | [**deletePromotionIndividualCode**](docs/Api/PromotionIndividualCodeApi.md#deletepromotionindividualcode) | **DELETE** /promotion-individual-code/{id} | Delete a Promotion Individual Code resource
*PromotionIndividualCodeApi* | [**getPromotionIndividualCode**](docs/Api/PromotionIndividualCodeApi.md#getpromotionindividualcode) | **GET** /promotion-individual-code/{id} | Detailed information about a Promotion Individual Code resource
*PromotionIndividualCodeApi* | [**getPromotionIndividualCodeList**](docs/Api/PromotionIndividualCodeApi.md#getpromotionindividualcodelist) | **GET** /promotion-individual-code | List with basic information of Promotion Individual Code resources
*PromotionIndividualCodeApi* | [**updatePromotionIndividualCode**](docs/Api/PromotionIndividualCodeApi.md#updatepromotionindividualcode) | **PATCH** /promotion-individual-code/{id} | Partially update information about a Promotion Individual Code resource
*PromotionSalesChannelApi* | [**createPromotionSalesChannel**](docs/Api/PromotionSalesChannelApi.md#createpromotionsaleschannel) | **POST** /promotion-sales-channel | Create a new Promotion Sales Channel resources
*PromotionSalesChannelApi* | [**deletePromotionSalesChannel**](docs/Api/PromotionSalesChannelApi.md#deletepromotionsaleschannel) | **DELETE** /promotion-sales-channel/{id} | Delete a Promotion Sales Channel resource
*PromotionSalesChannelApi* | [**getPromotionSalesChannel**](docs/Api/PromotionSalesChannelApi.md#getpromotionsaleschannel) | **GET** /promotion-sales-channel/{id} | Detailed information about a Promotion Sales Channel resource
*PromotionSalesChannelApi* | [**getPromotionSalesChannelList**](docs/Api/PromotionSalesChannelApi.md#getpromotionsaleschannellist) | **GET** /promotion-sales-channel | List with basic information of Promotion Sales Channel resources
*PromotionSalesChannelApi* | [**updatePromotionSalesChannel**](docs/Api/PromotionSalesChannelApi.md#updatepromotionsaleschannel) | **PATCH** /promotion-sales-channel/{id} | Partially update information about a Promotion Sales Channel resource
*PromotionSetgroupApi* | [**createPromotionSetgroup**](docs/Api/PromotionSetgroupApi.md#createpromotionsetgroup) | **POST** /promotion-setgroup | Create a new Promotion Setgroup resources
*PromotionSetgroupApi* | [**deletePromotionSetgroup**](docs/Api/PromotionSetgroupApi.md#deletepromotionsetgroup) | **DELETE** /promotion-setgroup/{id} | Delete a Promotion Setgroup resource
*PromotionSetgroupApi* | [**getPromotionSetgroup**](docs/Api/PromotionSetgroupApi.md#getpromotionsetgroup) | **GET** /promotion-setgroup/{id} | Detailed information about a Promotion Setgroup resource
*PromotionSetgroupApi* | [**getPromotionSetgroupList**](docs/Api/PromotionSetgroupApi.md#getpromotionsetgrouplist) | **GET** /promotion-setgroup | List with basic information of Promotion Setgroup resources
*PromotionSetgroupApi* | [**updatePromotionSetgroup**](docs/Api/PromotionSetgroupApi.md#updatepromotionsetgroup) | **PATCH** /promotion-setgroup/{id} | Partially update information about a Promotion Setgroup resource
*PropertyGroupApi* | [**createPropertyGroup**](docs/Api/PropertyGroupApi.md#createpropertygroup) | **POST** /property-group | Create a new Property Group resources
*PropertyGroupApi* | [**deletePropertyGroup**](docs/Api/PropertyGroupApi.md#deletepropertygroup) | **DELETE** /property-group/{id} | Delete a Property Group resource
*PropertyGroupApi* | [**getPropertyGroup**](docs/Api/PropertyGroupApi.md#getpropertygroup) | **GET** /property-group/{id} | Detailed information about a Property Group resource
*PropertyGroupApi* | [**getPropertyGroupList**](docs/Api/PropertyGroupApi.md#getpropertygrouplist) | **GET** /property-group | List with basic information of Property Group resources
*PropertyGroupApi* | [**updatePropertyGroup**](docs/Api/PropertyGroupApi.md#updatepropertygroup) | **PATCH** /property-group/{id} | Partially update information about a Property Group resource
*PropertyGroupOptionApi* | [**createPropertyGroupOption**](docs/Api/PropertyGroupOptionApi.md#createpropertygroupoption) | **POST** /property-group-option | Create a new Property Group Option resources
*PropertyGroupOptionApi* | [**deletePropertyGroupOption**](docs/Api/PropertyGroupOptionApi.md#deletepropertygroupoption) | **DELETE** /property-group-option/{id} | Delete a Property Group Option resource
*PropertyGroupOptionApi* | [**getPropertyGroupOption**](docs/Api/PropertyGroupOptionApi.md#getpropertygroupoption) | **GET** /property-group-option/{id} | Detailed information about a Property Group Option resource
*PropertyGroupOptionApi* | [**getPropertyGroupOptionList**](docs/Api/PropertyGroupOptionApi.md#getpropertygroupoptionlist) | **GET** /property-group-option | List with basic information of Property Group Option resources
*PropertyGroupOptionApi* | [**updatePropertyGroupOption**](docs/Api/PropertyGroupOptionApi.md#updatepropertygroupoption) | **PATCH** /property-group-option/{id} | Partially update information about a Property Group Option resource
*RlAbBannerApi* | [**createRlAbBanner**](docs/Api/RlAbBannerApi.md#createrlabbanner) | **POST** /rl-ab-banner | Create a new Rl Ab Banner resources
*RlAbBannerApi* | [**deleteRlAbBanner**](docs/Api/RlAbBannerApi.md#deleterlabbanner) | **DELETE** /rl-ab-banner/{id} | Delete a Rl Ab Banner resource
*RlAbBannerApi* | [**getRlAbBanner**](docs/Api/RlAbBannerApi.md#getrlabbanner) | **GET** /rl-ab-banner/{id} | Detailed information about a Rl Ab Banner resource
*RlAbBannerApi* | [**getRlAbBannerList**](docs/Api/RlAbBannerApi.md#getrlabbannerlist) | **GET** /rl-ab-banner | List with basic information of Rl Ab Banner resources
*RlAbBannerApi* | [**updateRlAbBanner**](docs/Api/RlAbBannerApi.md#updaterlabbanner) | **PATCH** /rl-ab-banner/{id} | Partially update information about a Rl Ab Banner resource
*RuleApi* | [**createRule**](docs/Api/RuleApi.md#createrule) | **POST** /rule | Create a new Rule resources
*RuleApi* | [**deleteRule**](docs/Api/RuleApi.md#deleterule) | **DELETE** /rule/{id} | Delete a Rule resource
*RuleApi* | [**getRule**](docs/Api/RuleApi.md#getrule) | **GET** /rule/{id} | Detailed information about a Rule resource
*RuleApi* | [**getRuleList**](docs/Api/RuleApi.md#getrulelist) | **GET** /rule | List with basic information of Rule resources
*RuleApi* | [**updateRule**](docs/Api/RuleApi.md#updaterule) | **PATCH** /rule/{id} | Partially update information about a Rule resource
*RuleConditionApi* | [**createRuleCondition**](docs/Api/RuleConditionApi.md#createrulecondition) | **POST** /rule-condition | Create a new Rule Condition resources
*RuleConditionApi* | [**deleteRuleCondition**](docs/Api/RuleConditionApi.md#deleterulecondition) | **DELETE** /rule-condition/{id} | Delete a Rule Condition resource
*RuleConditionApi* | [**getRuleCondition**](docs/Api/RuleConditionApi.md#getrulecondition) | **GET** /rule-condition/{id} | Detailed information about a Rule Condition resource
*RuleConditionApi* | [**getRuleConditionList**](docs/Api/RuleConditionApi.md#getruleconditionlist) | **GET** /rule-condition | List with basic information of Rule Condition resources
*RuleConditionApi* | [**updateRuleCondition**](docs/Api/RuleConditionApi.md#updaterulecondition) | **PATCH** /rule-condition/{id} | Partially update information about a Rule Condition resource
*SPluginNetzpStagingApi* | [**createSPluginNetzpStaging**](docs/Api/SPluginNetzpStagingApi.md#createspluginnetzpstaging) | **POST** /s-plugin-netzp-staging | Create a new S Plugin Netzp Staging resources
*SPluginNetzpStagingApi* | [**deleteSPluginNetzpStaging**](docs/Api/SPluginNetzpStagingApi.md#deletespluginnetzpstaging) | **DELETE** /s-plugin-netzp-staging/{id} | Delete a S Plugin Netzp Staging resource
*SPluginNetzpStagingApi* | [**getSPluginNetzpStaging**](docs/Api/SPluginNetzpStagingApi.md#getspluginnetzpstaging) | **GET** /s-plugin-netzp-staging/{id} | Detailed information about a S Plugin Netzp Staging resource
*SPluginNetzpStagingApi* | [**getSPluginNetzpStagingList**](docs/Api/SPluginNetzpStagingApi.md#getspluginnetzpstaginglist) | **GET** /s-plugin-netzp-staging | List with basic information of S Plugin Netzp Staging resources
*SPluginNetzpStagingApi* | [**updateSPluginNetzpStaging**](docs/Api/SPluginNetzpStagingApi.md#updatespluginnetzpstaging) | **PATCH** /s-plugin-netzp-staging/{id} | Partially update information about a S Plugin Netzp Staging resource
*SalesChannelApi* | [**createSalesChannel**](docs/Api/SalesChannelApi.md#createsaleschannel) | **POST** /sales-channel | Create a new Sales Channel resources
*SalesChannelApi* | [**deleteSalesChannel**](docs/Api/SalesChannelApi.md#deletesaleschannel) | **DELETE** /sales-channel/{id} | Delete a Sales Channel resource
*SalesChannelApi* | [**getSalesChannel**](docs/Api/SalesChannelApi.md#getsaleschannel) | **GET** /sales-channel/{id} | Detailed information about a Sales Channel resource
*SalesChannelApi* | [**getSalesChannelList**](docs/Api/SalesChannelApi.md#getsaleschannellist) | **GET** /sales-channel | List with basic information of Sales Channel resources
*SalesChannelApi* | [**updateSalesChannel**](docs/Api/SalesChannelApi.md#updatesaleschannel) | **PATCH** /sales-channel/{id} | Partially update information about a Sales Channel resource
*SalesChannelAnalyticsApi* | [**createSalesChannelAnalytics**](docs/Api/SalesChannelAnalyticsApi.md#createsaleschannelanalytics) | **POST** /sales-channel-analytics | Create a new Sales Channel Analytics resources
*SalesChannelAnalyticsApi* | [**deleteSalesChannelAnalytics**](docs/Api/SalesChannelAnalyticsApi.md#deletesaleschannelanalytics) | **DELETE** /sales-channel-analytics/{id} | Delete a Sales Channel Analytics resource
*SalesChannelAnalyticsApi* | [**getSalesChannelAnalytics**](docs/Api/SalesChannelAnalyticsApi.md#getsaleschannelanalytics) | **GET** /sales-channel-analytics/{id} | Detailed information about a Sales Channel Analytics resource
*SalesChannelAnalyticsApi* | [**getSalesChannelAnalyticsList**](docs/Api/SalesChannelAnalyticsApi.md#getsaleschannelanalyticslist) | **GET** /sales-channel-analytics | List with basic information of Sales Channel Analytics resources
*SalesChannelAnalyticsApi* | [**updateSalesChannelAnalytics**](docs/Api/SalesChannelAnalyticsApi.md#updatesaleschannelanalytics) | **PATCH** /sales-channel-analytics/{id} | Partially update information about a Sales Channel Analytics resource
*SalesChannelDomainApi* | [**createSalesChannelDomain**](docs/Api/SalesChannelDomainApi.md#createsaleschanneldomain) | **POST** /sales-channel-domain | Create a new Sales Channel Domain resources
*SalesChannelDomainApi* | [**deleteSalesChannelDomain**](docs/Api/SalesChannelDomainApi.md#deletesaleschanneldomain) | **DELETE** /sales-channel-domain/{id} | Delete a Sales Channel Domain resource
*SalesChannelDomainApi* | [**getSalesChannelDomain**](docs/Api/SalesChannelDomainApi.md#getsaleschanneldomain) | **GET** /sales-channel-domain/{id} | Detailed information about a Sales Channel Domain resource
*SalesChannelDomainApi* | [**getSalesChannelDomainList**](docs/Api/SalesChannelDomainApi.md#getsaleschanneldomainlist) | **GET** /sales-channel-domain | List with basic information of Sales Channel Domain resources
*SalesChannelDomainApi* | [**updateSalesChannelDomain**](docs/Api/SalesChannelDomainApi.md#updatesaleschanneldomain) | **PATCH** /sales-channel-domain/{id} | Partially update information about a Sales Channel Domain resource
*SalesChannelTypeApi* | [**createSalesChannelType**](docs/Api/SalesChannelTypeApi.md#createsaleschanneltype) | **POST** /sales-channel-type | Create a new Sales Channel Type resources
*SalesChannelTypeApi* | [**deleteSalesChannelType**](docs/Api/SalesChannelTypeApi.md#deletesaleschanneltype) | **DELETE** /sales-channel-type/{id} | Delete a Sales Channel Type resource
*SalesChannelTypeApi* | [**getSalesChannelType**](docs/Api/SalesChannelTypeApi.md#getsaleschanneltype) | **GET** /sales-channel-type/{id} | Detailed information about a Sales Channel Type resource
*SalesChannelTypeApi* | [**getSalesChannelTypeList**](docs/Api/SalesChannelTypeApi.md#getsaleschanneltypelist) | **GET** /sales-channel-type | List with basic information of Sales Channel Type resources
*SalesChannelTypeApi* | [**updateSalesChannelType**](docs/Api/SalesChannelTypeApi.md#updatesaleschanneltype) | **PATCH** /sales-channel-type/{id} | Partially update information about a Sales Channel Type resource
*SalutationApi* | [**createSalutation**](docs/Api/SalutationApi.md#createsalutation) | **POST** /salutation | Create a new Salutation resources
*SalutationApi* | [**deleteSalutation**](docs/Api/SalutationApi.md#deletesalutation) | **DELETE** /salutation/{id} | Delete a Salutation resource
*SalutationApi* | [**getSalutation**](docs/Api/SalutationApi.md#getsalutation) | **GET** /salutation/{id} | Detailed information about a Salutation resource
*SalutationApi* | [**getSalutationList**](docs/Api/SalutationApi.md#getsalutationlist) | **GET** /salutation | List with basic information of Salutation resources
*SalutationApi* | [**updateSalutation**](docs/Api/SalutationApi.md#updatesalutation) | **PATCH** /salutation/{id} | Partially update information about a Salutation resource
*SasBlogAuthorApi* | [**createSasBlogAuthor**](docs/Api/SasBlogAuthorApi.md#createsasblogauthor) | **POST** /sas-blog-author | Create a new Sas Blog Author resources
*SasBlogAuthorApi* | [**deleteSasBlogAuthor**](docs/Api/SasBlogAuthorApi.md#deletesasblogauthor) | **DELETE** /sas-blog-author/{id} | Delete a Sas Blog Author resource
*SasBlogAuthorApi* | [**getSasBlogAuthor**](docs/Api/SasBlogAuthorApi.md#getsasblogauthor) | **GET** /sas-blog-author/{id} | Detailed information about a Sas Blog Author resource
*SasBlogAuthorApi* | [**getSasBlogAuthorList**](docs/Api/SasBlogAuthorApi.md#getsasblogauthorlist) | **GET** /sas-blog-author | List with basic information of Sas Blog Author resources
*SasBlogAuthorApi* | [**updateSasBlogAuthor**](docs/Api/SasBlogAuthorApi.md#updatesasblogauthor) | **PATCH** /sas-blog-author/{id} | Partially update information about a Sas Blog Author resource
*SasBlogCategoryApi* | [**createSasBlogCategory**](docs/Api/SasBlogCategoryApi.md#createsasblogcategory) | **POST** /sas-blog-category | Create a new Sas Blog Category resources
*SasBlogCategoryApi* | [**deleteSasBlogCategory**](docs/Api/SasBlogCategoryApi.md#deletesasblogcategory) | **DELETE** /sas-blog-category/{id} | Delete a Sas Blog Category resource
*SasBlogCategoryApi* | [**getSasBlogCategory**](docs/Api/SasBlogCategoryApi.md#getsasblogcategory) | **GET** /sas-blog-category/{id} | Detailed information about a Sas Blog Category resource
*SasBlogCategoryApi* | [**getSasBlogCategoryList**](docs/Api/SasBlogCategoryApi.md#getsasblogcategorylist) | **GET** /sas-blog-category | List with basic information of Sas Blog Category resources
*SasBlogCategoryApi* | [**updateSasBlogCategory**](docs/Api/SasBlogCategoryApi.md#updatesasblogcategory) | **PATCH** /sas-blog-category/{id} | Partially update information about a Sas Blog Category resource
*SasBlogEntriesApi* | [**createSasBlogEntries**](docs/Api/SasBlogEntriesApi.md#createsasblogentries) | **POST** /sas-blog-entries | Create a new Sas Blog Entries resources
*SasBlogEntriesApi* | [**deleteSasBlogEntries**](docs/Api/SasBlogEntriesApi.md#deletesasblogentries) | **DELETE** /sas-blog-entries/{id} | Delete a Sas Blog Entries resource
*SasBlogEntriesApi* | [**getSasBlogEntries**](docs/Api/SasBlogEntriesApi.md#getsasblogentries) | **GET** /sas-blog-entries/{id} | Detailed information about a Sas Blog Entries resource
*SasBlogEntriesApi* | [**getSasBlogEntriesList**](docs/Api/SasBlogEntriesApi.md#getsasblogentrieslist) | **GET** /sas-blog-entries | List with basic information of Sas Blog Entries resources
*SasBlogEntriesApi* | [**updateSasBlogEntries**](docs/Api/SasBlogEntriesApi.md#updatesasblogentries) | **PATCH** /sas-blog-entries/{id} | Partially update information about a Sas Blog Entries resource
*ScheduledTaskApi* | [**createScheduledTask**](docs/Api/ScheduledTaskApi.md#createscheduledtask) | **POST** /scheduled-task | Create a new Scheduled Task resources
*ScheduledTaskApi* | [**deleteScheduledTask**](docs/Api/ScheduledTaskApi.md#deletescheduledtask) | **DELETE** /scheduled-task/{id} | Delete a Scheduled Task resource
*ScheduledTaskApi* | [**getScheduledTask**](docs/Api/ScheduledTaskApi.md#getscheduledtask) | **GET** /scheduled-task/{id} | Detailed information about a Scheduled Task resource
*ScheduledTaskApi* | [**getScheduledTaskList**](docs/Api/ScheduledTaskApi.md#getscheduledtasklist) | **GET** /scheduled-task | List with basic information of Scheduled Task resources
*ScheduledTaskApi* | [**updateScheduledTask**](docs/Api/ScheduledTaskApi.md#updatescheduledtask) | **PATCH** /scheduled-task/{id} | Partially update information about a Scheduled Task resource
*ScriptApi* | [**createScript**](docs/Api/ScriptApi.md#createscript) | **POST** /script | Create a new Script resources
*ScriptApi* | [**deleteScript**](docs/Api/ScriptApi.md#deletescript) | **DELETE** /script/{id} | Delete a Script resource
*ScriptApi* | [**getScript**](docs/Api/ScriptApi.md#getscript) | **GET** /script/{id} | Detailed information about a Script resource
*ScriptApi* | [**getScriptList**](docs/Api/ScriptApi.md#getscriptlist) | **GET** /script | List with basic information of Script resources
*ScriptApi* | [**updateScript**](docs/Api/ScriptApi.md#updatescript) | **PATCH** /script/{id} | Partially update information about a Script resource
*SeoUrlApi* | [**createSeoUrl**](docs/Api/SeoUrlApi.md#createseourl) | **POST** /seo-url | Create a new Seo Url resources
*SeoUrlApi* | [**deleteSeoUrl**](docs/Api/SeoUrlApi.md#deleteseourl) | **DELETE** /seo-url/{id} | Delete a Seo Url resource
*SeoUrlApi* | [**getSeoUrl**](docs/Api/SeoUrlApi.md#getseourl) | **GET** /seo-url/{id} | Detailed information about a Seo Url resource
*SeoUrlApi* | [**getSeoUrlList**](docs/Api/SeoUrlApi.md#getseourllist) | **GET** /seo-url | List with basic information of Seo Url resources
*SeoUrlApi* | [**updateSeoUrl**](docs/Api/SeoUrlApi.md#updateseourl) | **PATCH** /seo-url/{id} | Partially update information about a Seo Url resource
*SeoUrlTemplateApi* | [**createSeoUrlTemplate**](docs/Api/SeoUrlTemplateApi.md#createseourltemplate) | **POST** /seo-url-template | Create a new Seo Url Template resources
*SeoUrlTemplateApi* | [**deleteSeoUrlTemplate**](docs/Api/SeoUrlTemplateApi.md#deleteseourltemplate) | **DELETE** /seo-url-template/{id} | Delete a Seo Url Template resource
*SeoUrlTemplateApi* | [**getSeoUrlTemplate**](docs/Api/SeoUrlTemplateApi.md#getseourltemplate) | **GET** /seo-url-template/{id} | Detailed information about a Seo Url Template resource
*SeoUrlTemplateApi* | [**getSeoUrlTemplateList**](docs/Api/SeoUrlTemplateApi.md#getseourltemplatelist) | **GET** /seo-url-template | List with basic information of Seo Url Template resources
*SeoUrlTemplateApi* | [**updateSeoUrlTemplate**](docs/Api/SeoUrlTemplateApi.md#updateseourltemplate) | **PATCH** /seo-url-template/{id} | Partially update information about a Seo Url Template resource
*ShippingMethodApi* | [**createShippingMethod**](docs/Api/ShippingMethodApi.md#createshippingmethod) | **POST** /shipping-method | Create a new Shipping Method resources
*ShippingMethodApi* | [**deleteShippingMethod**](docs/Api/ShippingMethodApi.md#deleteshippingmethod) | **DELETE** /shipping-method/{id} | Delete a Shipping Method resource
*ShippingMethodApi* | [**getShippingMethod**](docs/Api/ShippingMethodApi.md#getshippingmethod) | **GET** /shipping-method/{id} | Detailed information about a Shipping Method resource
*ShippingMethodApi* | [**getShippingMethodList**](docs/Api/ShippingMethodApi.md#getshippingmethodlist) | **GET** /shipping-method | List with basic information of Shipping Method resources
*ShippingMethodApi* | [**updateShippingMethod**](docs/Api/ShippingMethodApi.md#updateshippingmethod) | **PATCH** /shipping-method/{id} | Partially update information about a Shipping Method resource
*ShippingMethodPriceApi* | [**createShippingMethodPrice**](docs/Api/ShippingMethodPriceApi.md#createshippingmethodprice) | **POST** /shipping-method-price | Create a new Shipping Method Price resources
*ShippingMethodPriceApi* | [**deleteShippingMethodPrice**](docs/Api/ShippingMethodPriceApi.md#deleteshippingmethodprice) | **DELETE** /shipping-method-price/{id} | Delete a Shipping Method Price resource
*ShippingMethodPriceApi* | [**getShippingMethodPrice**](docs/Api/ShippingMethodPriceApi.md#getshippingmethodprice) | **GET** /shipping-method-price/{id} | Detailed information about a Shipping Method Price resource
*ShippingMethodPriceApi* | [**getShippingMethodPriceList**](docs/Api/ShippingMethodPriceApi.md#getshippingmethodpricelist) | **GET** /shipping-method-price | List with basic information of Shipping Method Price resources
*ShippingMethodPriceApi* | [**updateShippingMethodPrice**](docs/Api/ShippingMethodPriceApi.md#updateshippingmethodprice) | **PATCH** /shipping-method-price/{id} | Partially update information about a Shipping Method Price resource
*SnippetApi* | [**createSnippet**](docs/Api/SnippetApi.md#createsnippet) | **POST** /snippet | Create a new Snippet resources
*SnippetApi* | [**deleteSnippet**](docs/Api/SnippetApi.md#deletesnippet) | **DELETE** /snippet/{id} | Delete a Snippet resource
*SnippetApi* | [**getSnippet**](docs/Api/SnippetApi.md#getsnippet) | **GET** /snippet/{id} | Detailed information about a Snippet resource
*SnippetApi* | [**getSnippetList**](docs/Api/SnippetApi.md#getsnippetlist) | **GET** /snippet | List with basic information of Snippet resources
*SnippetApi* | [**updateSnippet**](docs/Api/SnippetApi.md#updatesnippet) | **PATCH** /snippet/{id} | Partially update information about a Snippet resource
*SnippetSetApi* | [**createSnippetSet**](docs/Api/SnippetSetApi.md#createsnippetset) | **POST** /snippet-set | Create a new Snippet Set resources
*SnippetSetApi* | [**deleteSnippetSet**](docs/Api/SnippetSetApi.md#deletesnippetset) | **DELETE** /snippet-set/{id} | Delete a Snippet Set resource
*SnippetSetApi* | [**getSnippetSet**](docs/Api/SnippetSetApi.md#getsnippetset) | **GET** /snippet-set/{id} | Detailed information about a Snippet Set resource
*SnippetSetApi* | [**getSnippetSetList**](docs/Api/SnippetSetApi.md#getsnippetsetlist) | **GET** /snippet-set | List with basic information of Snippet Set resources
*SnippetSetApi* | [**updateSnippetSet**](docs/Api/SnippetSetApi.md#updatesnippetset) | **PATCH** /snippet-set/{id} | Partially update information about a Snippet Set resource
*StateMachineApi* | [**createStateMachine**](docs/Api/StateMachineApi.md#createstatemachine) | **POST** /state-machine | Create a new State Machine resources
*StateMachineApi* | [**deleteStateMachine**](docs/Api/StateMachineApi.md#deletestatemachine) | **DELETE** /state-machine/{id} | Delete a State Machine resource
*StateMachineApi* | [**getStateMachine**](docs/Api/StateMachineApi.md#getstatemachine) | **GET** /state-machine/{id} | Detailed information about a State Machine resource
*StateMachineApi* | [**getStateMachineList**](docs/Api/StateMachineApi.md#getstatemachinelist) | **GET** /state-machine | List with basic information of State Machine resources
*StateMachineApi* | [**updateStateMachine**](docs/Api/StateMachineApi.md#updatestatemachine) | **PATCH** /state-machine/{id} | Partially update information about a State Machine resource
*StateMachineHistoryApi* | [**createStateMachineHistory**](docs/Api/StateMachineHistoryApi.md#createstatemachinehistory) | **POST** /state-machine-history | Create a new State Machine History resources
*StateMachineHistoryApi* | [**deleteStateMachineHistory**](docs/Api/StateMachineHistoryApi.md#deletestatemachinehistory) | **DELETE** /state-machine-history/{id} | Delete a State Machine History resource
*StateMachineHistoryApi* | [**getStateMachineHistory**](docs/Api/StateMachineHistoryApi.md#getstatemachinehistory) | **GET** /state-machine-history/{id} | Detailed information about a State Machine History resource
*StateMachineHistoryApi* | [**getStateMachineHistoryList**](docs/Api/StateMachineHistoryApi.md#getstatemachinehistorylist) | **GET** /state-machine-history | List with basic information of State Machine History resources
*StateMachineHistoryApi* | [**updateStateMachineHistory**](docs/Api/StateMachineHistoryApi.md#updatestatemachinehistory) | **PATCH** /state-machine-history/{id} | Partially update information about a State Machine History resource
*StateMachineStateApi* | [**createStateMachineState**](docs/Api/StateMachineStateApi.md#createstatemachinestate) | **POST** /state-machine-state | Create a new State Machine State resources
*StateMachineStateApi* | [**deleteStateMachineState**](docs/Api/StateMachineStateApi.md#deletestatemachinestate) | **DELETE** /state-machine-state/{id} | Delete a State Machine State resource
*StateMachineStateApi* | [**getStateMachineState**](docs/Api/StateMachineStateApi.md#getstatemachinestate) | **GET** /state-machine-state/{id} | Detailed information about a State Machine State resource
*StateMachineStateApi* | [**getStateMachineStateList**](docs/Api/StateMachineStateApi.md#getstatemachinestatelist) | **GET** /state-machine-state | List with basic information of State Machine State resources
*StateMachineStateApi* | [**updateStateMachineState**](docs/Api/StateMachineStateApi.md#updatestatemachinestate) | **PATCH** /state-machine-state/{id} | Partially update information about a State Machine State resource
*StateMachineTransitionApi* | [**createStateMachineTransition**](docs/Api/StateMachineTransitionApi.md#createstatemachinetransition) | **POST** /state-machine-transition | Create a new State Machine Transition resources
*StateMachineTransitionApi* | [**deleteStateMachineTransition**](docs/Api/StateMachineTransitionApi.md#deletestatemachinetransition) | **DELETE** /state-machine-transition/{id} | Delete a State Machine Transition resource
*StateMachineTransitionApi* | [**getStateMachineTransition**](docs/Api/StateMachineTransitionApi.md#getstatemachinetransition) | **GET** /state-machine-transition/{id} | Detailed information about a State Machine Transition resource
*StateMachineTransitionApi* | [**getStateMachineTransitionList**](docs/Api/StateMachineTransitionApi.md#getstatemachinetransitionlist) | **GET** /state-machine-transition | List with basic information of State Machine Transition resources
*StateMachineTransitionApi* | [**updateStateMachineTransition**](docs/Api/StateMachineTransitionApi.md#updatestatemachinetransition) | **PATCH** /state-machine-transition/{id} | Partially update information about a State Machine Transition resource
*SwagAmazonPayPaymentNotificationApi* | [**createSwagAmazonPayPaymentNotification**](docs/Api/SwagAmazonPayPaymentNotificationApi.md#createswagamazonpaypaymentnotification) | **POST** /swag-amazon-pay-payment-notification | Create a new Swag Amazon Pay Payment Notification resources
*SwagAmazonPayPaymentNotificationApi* | [**deleteSwagAmazonPayPaymentNotification**](docs/Api/SwagAmazonPayPaymentNotificationApi.md#deleteswagamazonpaypaymentnotification) | **DELETE** /swag-amazon-pay-payment-notification/{id} | Delete a Swag Amazon Pay Payment Notification resource
*SwagAmazonPayPaymentNotificationApi* | [**getSwagAmazonPayPaymentNotification**](docs/Api/SwagAmazonPayPaymentNotificationApi.md#getswagamazonpaypaymentnotification) | **GET** /swag-amazon-pay-payment-notification/{id} | Detailed information about a Swag Amazon Pay Payment Notification resource
*SwagAmazonPayPaymentNotificationApi* | [**getSwagAmazonPayPaymentNotificationList**](docs/Api/SwagAmazonPayPaymentNotificationApi.md#getswagamazonpaypaymentnotificationlist) | **GET** /swag-amazon-pay-payment-notification | List with basic information of Swag Amazon Pay Payment Notification resources
*SwagAmazonPayPaymentNotificationApi* | [**updateSwagAmazonPayPaymentNotification**](docs/Api/SwagAmazonPayPaymentNotificationApi.md#updateswagamazonpaypaymentnotification) | **PATCH** /swag-amazon-pay-payment-notification/{id} | Partially update information about a Swag Amazon Pay Payment Notification resource
*SwagAmazonPaySignupTokenApi* | [**createSwagAmazonPaySignupToken**](docs/Api/SwagAmazonPaySignupTokenApi.md#createswagamazonpaysignuptoken) | **POST** /swag-amazon-pay-signup-token | Create a new Swag Amazon Pay Signup Token resources
*SwagAmazonPaySignupTokenApi* | [**deleteSwagAmazonPaySignupToken**](docs/Api/SwagAmazonPaySignupTokenApi.md#deleteswagamazonpaysignuptoken) | **DELETE** /swag-amazon-pay-signup-token/{id} | Delete a Swag Amazon Pay Signup Token resource
*SwagAmazonPaySignupTokenApi* | [**getSwagAmazonPaySignupToken**](docs/Api/SwagAmazonPaySignupTokenApi.md#getswagamazonpaysignuptoken) | **GET** /swag-amazon-pay-signup-token/{id} | Detailed information about a Swag Amazon Pay Signup Token resource
*SwagAmazonPaySignupTokenApi* | [**getSwagAmazonPaySignupTokenList**](docs/Api/SwagAmazonPaySignupTokenApi.md#getswagamazonpaysignuptokenlist) | **GET** /swag-amazon-pay-signup-token | List with basic information of Swag Amazon Pay Signup Token resources
*SwagAmazonPaySignupTokenApi* | [**updateSwagAmazonPaySignupToken**](docs/Api/SwagAmazonPaySignupTokenApi.md#updateswagamazonpaysignuptoken) | **PATCH** /swag-amazon-pay-signup-token/{id} | Partially update information about a Swag Amazon Pay Signup Token resource
*SwagCmsExtensionsBlockRuleApi* | [**createSwagCmsExtensionsBlockRule**](docs/Api/SwagCmsExtensionsBlockRuleApi.md#createswagcmsextensionsblockrule) | **POST** /swag-cms-extensions-block-rule | Create a new Swag Cms Extensions Block Rule resources
*SwagCmsExtensionsBlockRuleApi* | [**deleteSwagCmsExtensionsBlockRule**](docs/Api/SwagCmsExtensionsBlockRuleApi.md#deleteswagcmsextensionsblockrule) | **DELETE** /swag-cms-extensions-block-rule/{id} | Delete a Swag Cms Extensions Block Rule resource
*SwagCmsExtensionsBlockRuleApi* | [**getSwagCmsExtensionsBlockRule**](docs/Api/SwagCmsExtensionsBlockRuleApi.md#getswagcmsextensionsblockrule) | **GET** /swag-cms-extensions-block-rule/{id} | Detailed information about a Swag Cms Extensions Block Rule resource
*SwagCmsExtensionsBlockRuleApi* | [**getSwagCmsExtensionsBlockRuleList**](docs/Api/SwagCmsExtensionsBlockRuleApi.md#getswagcmsextensionsblockrulelist) | **GET** /swag-cms-extensions-block-rule | List with basic information of Swag Cms Extensions Block Rule resources
*SwagCmsExtensionsBlockRuleApi* | [**updateSwagCmsExtensionsBlockRule**](docs/Api/SwagCmsExtensionsBlockRuleApi.md#updateswagcmsextensionsblockrule) | **PATCH** /swag-cms-extensions-block-rule/{id} | Partially update information about a Swag Cms Extensions Block Rule resource
*SwagCmsExtensionsFormApi* | [**createSwagCmsExtensionsForm**](docs/Api/SwagCmsExtensionsFormApi.md#createswagcmsextensionsform) | **POST** /swag-cms-extensions-form | Create a new Swag Cms Extensions Form resources
*SwagCmsExtensionsFormApi* | [**deleteSwagCmsExtensionsForm**](docs/Api/SwagCmsExtensionsFormApi.md#deleteswagcmsextensionsform) | **DELETE** /swag-cms-extensions-form/{id} | Delete a Swag Cms Extensions Form resource
*SwagCmsExtensionsFormApi* | [**getSwagCmsExtensionsForm**](docs/Api/SwagCmsExtensionsFormApi.md#getswagcmsextensionsform) | **GET** /swag-cms-extensions-form/{id} | Detailed information about a Swag Cms Extensions Form resource
*SwagCmsExtensionsFormApi* | [**getSwagCmsExtensionsFormList**](docs/Api/SwagCmsExtensionsFormApi.md#getswagcmsextensionsformlist) | **GET** /swag-cms-extensions-form | List with basic information of Swag Cms Extensions Form resources
*SwagCmsExtensionsFormApi* | [**updateSwagCmsExtensionsForm**](docs/Api/SwagCmsExtensionsFormApi.md#updateswagcmsextensionsform) | **PATCH** /swag-cms-extensions-form/{id} | Partially update information about a Swag Cms Extensions Form resource
*SwagCmsExtensionsFormGroupApi* | [**createSwagCmsExtensionsFormGroup**](docs/Api/SwagCmsExtensionsFormGroupApi.md#createswagcmsextensionsformgroup) | **POST** /swag-cms-extensions-form-group | Create a new Swag Cms Extensions Form Group resources
*SwagCmsExtensionsFormGroupApi* | [**deleteSwagCmsExtensionsFormGroup**](docs/Api/SwagCmsExtensionsFormGroupApi.md#deleteswagcmsextensionsformgroup) | **DELETE** /swag-cms-extensions-form-group/{id} | Delete a Swag Cms Extensions Form Group resource
*SwagCmsExtensionsFormGroupApi* | [**getSwagCmsExtensionsFormGroup**](docs/Api/SwagCmsExtensionsFormGroupApi.md#getswagcmsextensionsformgroup) | **GET** /swag-cms-extensions-form-group/{id} | Detailed information about a Swag Cms Extensions Form Group resource
*SwagCmsExtensionsFormGroupApi* | [**getSwagCmsExtensionsFormGroupList**](docs/Api/SwagCmsExtensionsFormGroupApi.md#getswagcmsextensionsformgrouplist) | **GET** /swag-cms-extensions-form-group | List with basic information of Swag Cms Extensions Form Group resources
*SwagCmsExtensionsFormGroupApi* | [**updateSwagCmsExtensionsFormGroup**](docs/Api/SwagCmsExtensionsFormGroupApi.md#updateswagcmsextensionsformgroup) | **PATCH** /swag-cms-extensions-form-group/{id} | Partially update information about a Swag Cms Extensions Form Group resource
*SwagCmsExtensionsFormGroupFieldApi* | [**createSwagCmsExtensionsFormGroupField**](docs/Api/SwagCmsExtensionsFormGroupFieldApi.md#createswagcmsextensionsformgroupfield) | **POST** /swag-cms-extensions-form-group-field | Create a new Swag Cms Extensions Form Group Field resources
*SwagCmsExtensionsFormGroupFieldApi* | [**deleteSwagCmsExtensionsFormGroupField**](docs/Api/SwagCmsExtensionsFormGroupFieldApi.md#deleteswagcmsextensionsformgroupfield) | **DELETE** /swag-cms-extensions-form-group-field/{id} | Delete a Swag Cms Extensions Form Group Field resource
*SwagCmsExtensionsFormGroupFieldApi* | [**getSwagCmsExtensionsFormGroupField**](docs/Api/SwagCmsExtensionsFormGroupFieldApi.md#getswagcmsextensionsformgroupfield) | **GET** /swag-cms-extensions-form-group-field/{id} | Detailed information about a Swag Cms Extensions Form Group Field resource
*SwagCmsExtensionsFormGroupFieldApi* | [**getSwagCmsExtensionsFormGroupFieldList**](docs/Api/SwagCmsExtensionsFormGroupFieldApi.md#getswagcmsextensionsformgroupfieldlist) | **GET** /swag-cms-extensions-form-group-field | List with basic information of Swag Cms Extensions Form Group Field resources
*SwagCmsExtensionsFormGroupFieldApi* | [**updateSwagCmsExtensionsFormGroupField**](docs/Api/SwagCmsExtensionsFormGroupFieldApi.md#updateswagcmsextensionsformgroupfield) | **PATCH** /swag-cms-extensions-form-group-field/{id} | Partially update information about a Swag Cms Extensions Form Group Field resource
*SwagCmsExtensionsQuickviewApi* | [**createSwagCmsExtensionsQuickview**](docs/Api/SwagCmsExtensionsQuickviewApi.md#createswagcmsextensionsquickview) | **POST** /swag-cms-extensions-quickview | Create a new Swag Cms Extensions Quickview resources
*SwagCmsExtensionsQuickviewApi* | [**deleteSwagCmsExtensionsQuickview**](docs/Api/SwagCmsExtensionsQuickviewApi.md#deleteswagcmsextensionsquickview) | **DELETE** /swag-cms-extensions-quickview/{id} | Delete a Swag Cms Extensions Quickview resource
*SwagCmsExtensionsQuickviewApi* | [**getSwagCmsExtensionsQuickview**](docs/Api/SwagCmsExtensionsQuickviewApi.md#getswagcmsextensionsquickview) | **GET** /swag-cms-extensions-quickview/{id} | Detailed information about a Swag Cms Extensions Quickview resource
*SwagCmsExtensionsQuickviewApi* | [**getSwagCmsExtensionsQuickviewList**](docs/Api/SwagCmsExtensionsQuickviewApi.md#getswagcmsextensionsquickviewlist) | **GET** /swag-cms-extensions-quickview | List with basic information of Swag Cms Extensions Quickview resources
*SwagCmsExtensionsQuickviewApi* | [**updateSwagCmsExtensionsQuickview**](docs/Api/SwagCmsExtensionsQuickviewApi.md#updateswagcmsextensionsquickview) | **PATCH** /swag-cms-extensions-quickview/{id} | Partially update information about a Swag Cms Extensions Quickview resource
*SwagCmsExtensionsScrollNavigationApi* | [**createSwagCmsExtensionsScrollNavigation**](docs/Api/SwagCmsExtensionsScrollNavigationApi.md#createswagcmsextensionsscrollnavigation) | **POST** /swag-cms-extensions-scroll-navigation | Create a new Swag Cms Extensions Scroll Navigation resources
*SwagCmsExtensionsScrollNavigationApi* | [**deleteSwagCmsExtensionsScrollNavigation**](docs/Api/SwagCmsExtensionsScrollNavigationApi.md#deleteswagcmsextensionsscrollnavigation) | **DELETE** /swag-cms-extensions-scroll-navigation/{id} | Delete a Swag Cms Extensions Scroll Navigation resource
*SwagCmsExtensionsScrollNavigationApi* | [**getSwagCmsExtensionsScrollNavigation**](docs/Api/SwagCmsExtensionsScrollNavigationApi.md#getswagcmsextensionsscrollnavigation) | **GET** /swag-cms-extensions-scroll-navigation/{id} | Detailed information about a Swag Cms Extensions Scroll Navigation resource
*SwagCmsExtensionsScrollNavigationApi* | [**getSwagCmsExtensionsScrollNavigationList**](docs/Api/SwagCmsExtensionsScrollNavigationApi.md#getswagcmsextensionsscrollnavigationlist) | **GET** /swag-cms-extensions-scroll-navigation | List with basic information of Swag Cms Extensions Scroll Navigation resources
*SwagCmsExtensionsScrollNavigationApi* | [**updateSwagCmsExtensionsScrollNavigation**](docs/Api/SwagCmsExtensionsScrollNavigationApi.md#updateswagcmsextensionsscrollnavigation) | **PATCH** /swag-cms-extensions-scroll-navigation/{id} | Partially update information about a Swag Cms Extensions Scroll Navigation resource
*SwagCmsExtensionsScrollNavigationPageSettingsApi* | [**createSwagCmsExtensionsScrollNavigationPageSettings**](docs/Api/SwagCmsExtensionsScrollNavigationPageSettingsApi.md#createswagcmsextensionsscrollnavigationpagesettings) | **POST** /swag-cms-extensions-scroll-navigation-page-settings | Create a new Swag Cms Extensions Scroll Navigation Page Settings resources
*SwagCmsExtensionsScrollNavigationPageSettingsApi* | [**deleteSwagCmsExtensionsScrollNavigationPageSettings**](docs/Api/SwagCmsExtensionsScrollNavigationPageSettingsApi.md#deleteswagcmsextensionsscrollnavigationpagesettings) | **DELETE** /swag-cms-extensions-scroll-navigation-page-settings/{id} | Delete a Swag Cms Extensions Scroll Navigation Page Settings resource
*SwagCmsExtensionsScrollNavigationPageSettingsApi* | [**getSwagCmsExtensionsScrollNavigationPageSettings**](docs/Api/SwagCmsExtensionsScrollNavigationPageSettingsApi.md#getswagcmsextensionsscrollnavigationpagesettings) | **GET** /swag-cms-extensions-scroll-navigation-page-settings/{id} | Detailed information about a Swag Cms Extensions Scroll Navigation Page Settings resource
*SwagCmsExtensionsScrollNavigationPageSettingsApi* | [**getSwagCmsExtensionsScrollNavigationPageSettingsList**](docs/Api/SwagCmsExtensionsScrollNavigationPageSettingsApi.md#getswagcmsextensionsscrollnavigationpagesettingslist) | **GET** /swag-cms-extensions-scroll-navigation-page-settings | List with basic information of Swag Cms Extensions Scroll Navigation Page Settings resources
*SwagCmsExtensionsScrollNavigationPageSettingsApi* | [**updateSwagCmsExtensionsScrollNavigationPageSettings**](docs/Api/SwagCmsExtensionsScrollNavigationPageSettingsApi.md#updateswagcmsextensionsscrollnavigationpagesettings) | **PATCH** /swag-cms-extensions-scroll-navigation-page-settings/{id} | Partially update information about a Swag Cms Extensions Scroll Navigation Page Settings resource
*SwagLanguagePackLanguageApi* | [**createSwagLanguagePackLanguage**](docs/Api/SwagLanguagePackLanguageApi.md#createswaglanguagepacklanguage) | **POST** /swag-language-pack-language | Create a new Swag Language Pack Language resources
*SwagLanguagePackLanguageApi* | [**deleteSwagLanguagePackLanguage**](docs/Api/SwagLanguagePackLanguageApi.md#deleteswaglanguagepacklanguage) | **DELETE** /swag-language-pack-language/{id} | Delete a Swag Language Pack Language resource
*SwagLanguagePackLanguageApi* | [**getSwagLanguagePackLanguage**](docs/Api/SwagLanguagePackLanguageApi.md#getswaglanguagepacklanguage) | **GET** /swag-language-pack-language/{id} | Detailed information about a Swag Language Pack Language resource
*SwagLanguagePackLanguageApi* | [**getSwagLanguagePackLanguageList**](docs/Api/SwagLanguagePackLanguageApi.md#getswaglanguagepacklanguagelist) | **GET** /swag-language-pack-language | List with basic information of Swag Language Pack Language resources
*SwagLanguagePackLanguageApi* | [**updateSwagLanguagePackLanguage**](docs/Api/SwagLanguagePackLanguageApi.md#updateswaglanguagepacklanguage) | **PATCH** /swag-language-pack-language/{id} | Partially update information about a Swag Language Pack Language resource
*SwagMigrationConnectionApi* | [**createSwagMigrationConnection**](docs/Api/SwagMigrationConnectionApi.md#createswagmigrationconnection) | **POST** /swag-migration-connection | Create a new Swag Migration Connection resources
*SwagMigrationConnectionApi* | [**deleteSwagMigrationConnection**](docs/Api/SwagMigrationConnectionApi.md#deleteswagmigrationconnection) | **DELETE** /swag-migration-connection/{id} | Delete a Swag Migration Connection resource
*SwagMigrationConnectionApi* | [**getSwagMigrationConnection**](docs/Api/SwagMigrationConnectionApi.md#getswagmigrationconnection) | **GET** /swag-migration-connection/{id} | Detailed information about a Swag Migration Connection resource
*SwagMigrationConnectionApi* | [**getSwagMigrationConnectionList**](docs/Api/SwagMigrationConnectionApi.md#getswagmigrationconnectionlist) | **GET** /swag-migration-connection | List with basic information of Swag Migration Connection resources
*SwagMigrationConnectionApi* | [**updateSwagMigrationConnection**](docs/Api/SwagMigrationConnectionApi.md#updateswagmigrationconnection) | **PATCH** /swag-migration-connection/{id} | Partially update information about a Swag Migration Connection resource
*SwagMigrationDataApi* | [**createSwagMigrationData**](docs/Api/SwagMigrationDataApi.md#createswagmigrationdata) | **POST** /swag-migration-data | Create a new Swag Migration Data resources
*SwagMigrationDataApi* | [**deleteSwagMigrationData**](docs/Api/SwagMigrationDataApi.md#deleteswagmigrationdata) | **DELETE** /swag-migration-data/{id} | Delete a Swag Migration Data resource
*SwagMigrationDataApi* | [**getSwagMigrationData**](docs/Api/SwagMigrationDataApi.md#getswagmigrationdata) | **GET** /swag-migration-data/{id} | Detailed information about a Swag Migration Data resource
*SwagMigrationDataApi* | [**getSwagMigrationDataList**](docs/Api/SwagMigrationDataApi.md#getswagmigrationdatalist) | **GET** /swag-migration-data | List with basic information of Swag Migration Data resources
*SwagMigrationDataApi* | [**updateSwagMigrationData**](docs/Api/SwagMigrationDataApi.md#updateswagmigrationdata) | **PATCH** /swag-migration-data/{id} | Partially update information about a Swag Migration Data resource
*SwagMigrationGeneralSettingApi* | [**createSwagMigrationGeneralSetting**](docs/Api/SwagMigrationGeneralSettingApi.md#createswagmigrationgeneralsetting) | **POST** /swag-migration-general-setting | Create a new Swag Migration General Setting resources
*SwagMigrationGeneralSettingApi* | [**deleteSwagMigrationGeneralSetting**](docs/Api/SwagMigrationGeneralSettingApi.md#deleteswagmigrationgeneralsetting) | **DELETE** /swag-migration-general-setting/{id} | Delete a Swag Migration General Setting resource
*SwagMigrationGeneralSettingApi* | [**getSwagMigrationGeneralSetting**](docs/Api/SwagMigrationGeneralSettingApi.md#getswagmigrationgeneralsetting) | **GET** /swag-migration-general-setting/{id} | Detailed information about a Swag Migration General Setting resource
*SwagMigrationGeneralSettingApi* | [**getSwagMigrationGeneralSettingList**](docs/Api/SwagMigrationGeneralSettingApi.md#getswagmigrationgeneralsettinglist) | **GET** /swag-migration-general-setting | List with basic information of Swag Migration General Setting resources
*SwagMigrationGeneralSettingApi* | [**updateSwagMigrationGeneralSetting**](docs/Api/SwagMigrationGeneralSettingApi.md#updateswagmigrationgeneralsetting) | **PATCH** /swag-migration-general-setting/{id} | Partially update information about a Swag Migration General Setting resource
*SwagMigrationLoggingApi* | [**createSwagMigrationLogging**](docs/Api/SwagMigrationLoggingApi.md#createswagmigrationlogging) | **POST** /swag-migration-logging | Create a new Swag Migration Logging resources
*SwagMigrationLoggingApi* | [**deleteSwagMigrationLogging**](docs/Api/SwagMigrationLoggingApi.md#deleteswagmigrationlogging) | **DELETE** /swag-migration-logging/{id} | Delete a Swag Migration Logging resource
*SwagMigrationLoggingApi* | [**getSwagMigrationLogging**](docs/Api/SwagMigrationLoggingApi.md#getswagmigrationlogging) | **GET** /swag-migration-logging/{id} | Detailed information about a Swag Migration Logging resource
*SwagMigrationLoggingApi* | [**getSwagMigrationLoggingList**](docs/Api/SwagMigrationLoggingApi.md#getswagmigrationlogginglist) | **GET** /swag-migration-logging | List with basic information of Swag Migration Logging resources
*SwagMigrationLoggingApi* | [**updateSwagMigrationLogging**](docs/Api/SwagMigrationLoggingApi.md#updateswagmigrationlogging) | **PATCH** /swag-migration-logging/{id} | Partially update information about a Swag Migration Logging resource
*SwagMigrationMappingApi* | [**createSwagMigrationMapping**](docs/Api/SwagMigrationMappingApi.md#createswagmigrationmapping) | **POST** /swag-migration-mapping | Create a new Swag Migration Mapping resources
*SwagMigrationMappingApi* | [**deleteSwagMigrationMapping**](docs/Api/SwagMigrationMappingApi.md#deleteswagmigrationmapping) | **DELETE** /swag-migration-mapping/{id} | Delete a Swag Migration Mapping resource
*SwagMigrationMappingApi* | [**getSwagMigrationMapping**](docs/Api/SwagMigrationMappingApi.md#getswagmigrationmapping) | **GET** /swag-migration-mapping/{id} | Detailed information about a Swag Migration Mapping resource
*SwagMigrationMappingApi* | [**getSwagMigrationMappingList**](docs/Api/SwagMigrationMappingApi.md#getswagmigrationmappinglist) | **GET** /swag-migration-mapping | List with basic information of Swag Migration Mapping resources
*SwagMigrationMappingApi* | [**updateSwagMigrationMapping**](docs/Api/SwagMigrationMappingApi.md#updateswagmigrationmapping) | **PATCH** /swag-migration-mapping/{id} | Partially update information about a Swag Migration Mapping resource
*SwagMigrationMediaFileApi* | [**createSwagMigrationMediaFile**](docs/Api/SwagMigrationMediaFileApi.md#createswagmigrationmediafile) | **POST** /swag-migration-media-file | Create a new Swag Migration Media File resources
*SwagMigrationMediaFileApi* | [**deleteSwagMigrationMediaFile**](docs/Api/SwagMigrationMediaFileApi.md#deleteswagmigrationmediafile) | **DELETE** /swag-migration-media-file/{id} | Delete a Swag Migration Media File resource
*SwagMigrationMediaFileApi* | [**getSwagMigrationMediaFile**](docs/Api/SwagMigrationMediaFileApi.md#getswagmigrationmediafile) | **GET** /swag-migration-media-file/{id} | Detailed information about a Swag Migration Media File resource
*SwagMigrationMediaFileApi* | [**getSwagMigrationMediaFileList**](docs/Api/SwagMigrationMediaFileApi.md#getswagmigrationmediafilelist) | **GET** /swag-migration-media-file | List with basic information of Swag Migration Media File resources
*SwagMigrationMediaFileApi* | [**updateSwagMigrationMediaFile**](docs/Api/SwagMigrationMediaFileApi.md#updateswagmigrationmediafile) | **PATCH** /swag-migration-media-file/{id} | Partially update information about a Swag Migration Media File resource
*SwagMigrationRunApi* | [**createSwagMigrationRun**](docs/Api/SwagMigrationRunApi.md#createswagmigrationrun) | **POST** /swag-migration-run | Create a new Swag Migration Run resources
*SwagMigrationRunApi* | [**deleteSwagMigrationRun**](docs/Api/SwagMigrationRunApi.md#deleteswagmigrationrun) | **DELETE** /swag-migration-run/{id} | Delete a Swag Migration Run resource
*SwagMigrationRunApi* | [**getSwagMigrationRun**](docs/Api/SwagMigrationRunApi.md#getswagmigrationrun) | **GET** /swag-migration-run/{id} | Detailed information about a Swag Migration Run resource
*SwagMigrationRunApi* | [**getSwagMigrationRunList**](docs/Api/SwagMigrationRunApi.md#getswagmigrationrunlist) | **GET** /swag-migration-run | List with basic information of Swag Migration Run resources
*SwagMigrationRunApi* | [**updateSwagMigrationRun**](docs/Api/SwagMigrationRunApi.md#updateswagmigrationrun) | **PATCH** /swag-migration-run/{id} | Partially update information about a Swag Migration Run resource
*SwagPaypalPosSalesChannelApi* | [**createSwagPaypalPosSalesChannel**](docs/Api/SwagPaypalPosSalesChannelApi.md#createswagpaypalpossaleschannel) | **POST** /swag-paypal-pos-sales-channel | Create a new Swag Paypal Pos Sales Channel resources
*SwagPaypalPosSalesChannelApi* | [**deleteSwagPaypalPosSalesChannel**](docs/Api/SwagPaypalPosSalesChannelApi.md#deleteswagpaypalpossaleschannel) | **DELETE** /swag-paypal-pos-sales-channel/{id} | Delete a Swag Paypal Pos Sales Channel resource
*SwagPaypalPosSalesChannelApi* | [**getSwagPaypalPosSalesChannel**](docs/Api/SwagPaypalPosSalesChannelApi.md#getswagpaypalpossaleschannel) | **GET** /swag-paypal-pos-sales-channel/{id} | Detailed information about a Swag Paypal Pos Sales Channel resource
*SwagPaypalPosSalesChannelApi* | [**getSwagPaypalPosSalesChannelList**](docs/Api/SwagPaypalPosSalesChannelApi.md#getswagpaypalpossaleschannellist) | **GET** /swag-paypal-pos-sales-channel | List with basic information of Swag Paypal Pos Sales Channel resources
*SwagPaypalPosSalesChannelApi* | [**updateSwagPaypalPosSalesChannel**](docs/Api/SwagPaypalPosSalesChannelApi.md#updateswagpaypalpossaleschannel) | **PATCH** /swag-paypal-pos-sales-channel/{id} | Partially update information about a Swag Paypal Pos Sales Channel resource
*SwagPaypalPosSalesChannelRunApi* | [**createSwagPaypalPosSalesChannelRun**](docs/Api/SwagPaypalPosSalesChannelRunApi.md#createswagpaypalpossaleschannelrun) | **POST** /swag-paypal-pos-sales-channel-run | Create a new Swag Paypal Pos Sales Channel Run resources
*SwagPaypalPosSalesChannelRunApi* | [**deleteSwagPaypalPosSalesChannelRun**](docs/Api/SwagPaypalPosSalesChannelRunApi.md#deleteswagpaypalpossaleschannelrun) | **DELETE** /swag-paypal-pos-sales-channel-run/{id} | Delete a Swag Paypal Pos Sales Channel Run resource
*SwagPaypalPosSalesChannelRunApi* | [**getSwagPaypalPosSalesChannelRun**](docs/Api/SwagPaypalPosSalesChannelRunApi.md#getswagpaypalpossaleschannelrun) | **GET** /swag-paypal-pos-sales-channel-run/{id} | Detailed information about a Swag Paypal Pos Sales Channel Run resource
*SwagPaypalPosSalesChannelRunApi* | [**getSwagPaypalPosSalesChannelRunList**](docs/Api/SwagPaypalPosSalesChannelRunApi.md#getswagpaypalpossaleschannelrunlist) | **GET** /swag-paypal-pos-sales-channel-run | List with basic information of Swag Paypal Pos Sales Channel Run resources
*SwagPaypalPosSalesChannelRunApi* | [**updateSwagPaypalPosSalesChannelRun**](docs/Api/SwagPaypalPosSalesChannelRunApi.md#updateswagpaypalpossaleschannelrun) | **PATCH** /swag-paypal-pos-sales-channel-run/{id} | Partially update information about a Swag Paypal Pos Sales Channel Run resource
*SwagPaypalPosSalesChannelRunLogApi* | [**createSwagPaypalPosSalesChannelRunLog**](docs/Api/SwagPaypalPosSalesChannelRunLogApi.md#createswagpaypalpossaleschannelrunlog) | **POST** /swag-paypal-pos-sales-channel-run-log | Create a new Swag Paypal Pos Sales Channel Run Log resources
*SwagPaypalPosSalesChannelRunLogApi* | [**deleteSwagPaypalPosSalesChannelRunLog**](docs/Api/SwagPaypalPosSalesChannelRunLogApi.md#deleteswagpaypalpossaleschannelrunlog) | **DELETE** /swag-paypal-pos-sales-channel-run-log/{id} | Delete a Swag Paypal Pos Sales Channel Run Log resource
*SwagPaypalPosSalesChannelRunLogApi* | [**getSwagPaypalPosSalesChannelRunLog**](docs/Api/SwagPaypalPosSalesChannelRunLogApi.md#getswagpaypalpossaleschannelrunlog) | **GET** /swag-paypal-pos-sales-channel-run-log/{id} | Detailed information about a Swag Paypal Pos Sales Channel Run Log resource
*SwagPaypalPosSalesChannelRunLogApi* | [**getSwagPaypalPosSalesChannelRunLogList**](docs/Api/SwagPaypalPosSalesChannelRunLogApi.md#getswagpaypalpossaleschannelrunloglist) | **GET** /swag-paypal-pos-sales-channel-run-log | List with basic information of Swag Paypal Pos Sales Channel Run Log resources
*SwagPaypalPosSalesChannelRunLogApi* | [**updateSwagPaypalPosSalesChannelRunLog**](docs/Api/SwagPaypalPosSalesChannelRunLogApi.md#updateswagpaypalpossaleschannelrunlog) | **PATCH** /swag-paypal-pos-sales-channel-run-log/{id} | Partially update information about a Swag Paypal Pos Sales Channel Run Log resource
*SwagSocialShoppingProductErrorApi* | [**createSwagSocialShoppingProductError**](docs/Api/SwagSocialShoppingProductErrorApi.md#createswagsocialshoppingproducterror) | **POST** /swag-social-shopping-product-error | Create a new Swag Social Shopping Product Error resources
*SwagSocialShoppingProductErrorApi* | [**deleteSwagSocialShoppingProductError**](docs/Api/SwagSocialShoppingProductErrorApi.md#deleteswagsocialshoppingproducterror) | **DELETE** /swag-social-shopping-product-error/{id} | Delete a Swag Social Shopping Product Error resource
*SwagSocialShoppingProductErrorApi* | [**getSwagSocialShoppingProductError**](docs/Api/SwagSocialShoppingProductErrorApi.md#getswagsocialshoppingproducterror) | **GET** /swag-social-shopping-product-error/{id} | Detailed information about a Swag Social Shopping Product Error resource
*SwagSocialShoppingProductErrorApi* | [**getSwagSocialShoppingProductErrorList**](docs/Api/SwagSocialShoppingProductErrorApi.md#getswagsocialshoppingproducterrorlist) | **GET** /swag-social-shopping-product-error | List with basic information of Swag Social Shopping Product Error resources
*SwagSocialShoppingProductErrorApi* | [**updateSwagSocialShoppingProductError**](docs/Api/SwagSocialShoppingProductErrorApi.md#updateswagsocialshoppingproducterror) | **PATCH** /swag-social-shopping-product-error/{id} | Partially update information about a Swag Social Shopping Product Error resource
*SwagSocialShoppingSalesChannelApi* | [**createSwagSocialShoppingSalesChannel**](docs/Api/SwagSocialShoppingSalesChannelApi.md#createswagsocialshoppingsaleschannel) | **POST** /swag-social-shopping-sales-channel | Create a new Swag Social Shopping Sales Channel resources
*SwagSocialShoppingSalesChannelApi* | [**deleteSwagSocialShoppingSalesChannel**](docs/Api/SwagSocialShoppingSalesChannelApi.md#deleteswagsocialshoppingsaleschannel) | **DELETE** /swag-social-shopping-sales-channel/{id} | Delete a Swag Social Shopping Sales Channel resource
*SwagSocialShoppingSalesChannelApi* | [**getSwagSocialShoppingSalesChannel**](docs/Api/SwagSocialShoppingSalesChannelApi.md#getswagsocialshoppingsaleschannel) | **GET** /swag-social-shopping-sales-channel/{id} | Detailed information about a Swag Social Shopping Sales Channel resource
*SwagSocialShoppingSalesChannelApi* | [**getSwagSocialShoppingSalesChannelList**](docs/Api/SwagSocialShoppingSalesChannelApi.md#getswagsocialshoppingsaleschannellist) | **GET** /swag-social-shopping-sales-channel | List with basic information of Swag Social Shopping Sales Channel resources
*SwagSocialShoppingSalesChannelApi* | [**updateSwagSocialShoppingSalesChannel**](docs/Api/SwagSocialShoppingSalesChannelApi.md#updateswagsocialshoppingsaleschannel) | **PATCH** /swag-social-shopping-sales-channel/{id} | Partially update information about a Swag Social Shopping Sales Channel resource
*SystemConfigApi* | [**createSystemConfig**](docs/Api/SystemConfigApi.md#createsystemconfig) | **POST** /system-config | Create a new System Config resources
*SystemConfigApi* | [**deleteSystemConfig**](docs/Api/SystemConfigApi.md#deletesystemconfig) | **DELETE** /system-config/{id} | Delete a System Config resource
*SystemConfigApi* | [**getSystemConfig**](docs/Api/SystemConfigApi.md#getsystemconfig) | **GET** /system-config/{id} | Detailed information about a System Config resource
*SystemConfigApi* | [**getSystemConfigList**](docs/Api/SystemConfigApi.md#getsystemconfiglist) | **GET** /system-config | List with basic information of System Config resources
*SystemConfigApi* | [**updateSystemConfig**](docs/Api/SystemConfigApi.md#updatesystemconfig) | **PATCH** /system-config/{id} | Partially update information about a System Config resource
*SystemInfoHealthcheckApi* | [**apiInfo**](docs/Api/SystemInfoHealthcheckApi.md#apiinfo) | **GET** /_info/openapi3.json | Get OpenAPI Specification
*SystemInfoHealthcheckApi* | [**businessEvents**](docs/Api/SystemInfoHealthcheckApi.md#businessevents) | **GET** /_info/events.json | Get Business events
*SystemInfoHealthcheckApi* | [**config**](docs/Api/SystemInfoHealthcheckApi.md#config) | **GET** /_info/config | Get API information
*SystemInfoHealthcheckApi* | [**flowActions**](docs/Api/SystemInfoHealthcheckApi.md#flowactions) | **GET** /_info/flow-actions.json | Get actions for flow builder
*SystemInfoHealthcheckApi* | [**infoShopwareVersion**](docs/Api/SystemInfoHealthcheckApi.md#infoshopwareversion) | **GET** /_info/version | Get the Shopware version
*SystemOperationsApi* | [**clearCache**](docs/Api/SystemOperationsApi.md#clearcache) | **DELETE** /_action/cache | Clear caches
*SystemOperationsApi* | [**clearCacheAndScheduleWarmUp**](docs/Api/SystemOperationsApi.md#clearcacheandschedulewarmup) | **DELETE** /_action/cache_warmup | Clear and warm up caches
*SystemOperationsApi* | [**clearContainerCache**](docs/Api/SystemOperationsApi.md#clearcontainercache) | **DELETE** /_action/container_cache | Clear container caches
*SystemOperationsApi* | [**clearOldCacheFolders**](docs/Api/SystemOperationsApi.md#clearoldcachefolders) | **DELETE** /_action/cleanup | Clear old cache folders
*SystemOperationsApi* | [**consumeMessages**](docs/Api/SystemOperationsApi.md#consumemessages) | **POST** /_action/message-queue/consume | Consume messages from the message queue.
*SystemOperationsApi* | [**getMinRunInterval**](docs/Api/SystemOperationsApi.md#getminruninterval) | **GET** /_action/scheduled-task/min-run-interval | Get the minimum schedules task interval
*SystemOperationsApi* | [**index**](docs/Api/SystemOperationsApi.md#index) | **POST** /_action/index | Run indexer
*SystemOperationsApi* | [**indexing**](docs/Api/SystemOperationsApi.md#indexing) | **POST** /_action/indexing | Run indexer
*SystemOperationsApi* | [**indexing_0**](docs/Api/SystemOperationsApi.md#indexing_0) | **POST** /_action/indexing/products | Send product indexing message
*SystemOperationsApi* | [**info**](docs/Api/SystemOperationsApi.md#info) | **GET** /_action/cache_info | Get cache information
*SystemOperationsApi* | [**iterate**](docs/Api/SystemOperationsApi.md#iterate) | **POST** /_action/indexing/{indexer} | Iterate an indexer
*SystemOperationsApi* | [**runScheduledTasks**](docs/Api/SystemOperationsApi.md#runscheduledtasks) | **POST** /_action/scheduled-task/run | Run scheduled tasks.
*TagApi* | [**createTag**](docs/Api/TagApi.md#createtag) | **POST** /tag | Create a new Tag resources
*TagApi* | [**deleteTag**](docs/Api/TagApi.md#deletetag) | **DELETE** /tag/{id} | Delete a Tag resource
*TagApi* | [**getTag**](docs/Api/TagApi.md#gettag) | **GET** /tag/{id} | Detailed information about a Tag resource
*TagApi* | [**getTagList**](docs/Api/TagApi.md#gettaglist) | **GET** /tag | List with basic information of Tag resources
*TagApi* | [**updateTag**](docs/Api/TagApi.md#updatetag) | **PATCH** /tag/{id} | Partially update information about a Tag resource
*TaxApi* | [**createTax**](docs/Api/TaxApi.md#createtax) | **POST** /tax | Create a new Tax resources
*TaxApi* | [**deleteTax**](docs/Api/TaxApi.md#deletetax) | **DELETE** /tax/{id} | Delete a Tax resource
*TaxApi* | [**getTax**](docs/Api/TaxApi.md#gettax) | **GET** /tax/{id} | Detailed information about a Tax resource
*TaxApi* | [**getTaxList**](docs/Api/TaxApi.md#gettaxlist) | **GET** /tax | List with basic information of Tax resources
*TaxApi* | [**updateTax**](docs/Api/TaxApi.md#updatetax) | **PATCH** /tax/{id} | Partially update information about a Tax resource
*TaxRuleApi* | [**createTaxRule**](docs/Api/TaxRuleApi.md#createtaxrule) | **POST** /tax-rule | Create a new Tax Rule resources
*TaxRuleApi* | [**deleteTaxRule**](docs/Api/TaxRuleApi.md#deletetaxrule) | **DELETE** /tax-rule/{id} | Delete a Tax Rule resource
*TaxRuleApi* | [**getTaxRule**](docs/Api/TaxRuleApi.md#gettaxrule) | **GET** /tax-rule/{id} | Detailed information about a Tax Rule resource
*TaxRuleApi* | [**getTaxRuleList**](docs/Api/TaxRuleApi.md#gettaxrulelist) | **GET** /tax-rule | List with basic information of Tax Rule resources
*TaxRuleApi* | [**updateTaxRule**](docs/Api/TaxRuleApi.md#updatetaxrule) | **PATCH** /tax-rule/{id} | Partially update information about a Tax Rule resource
*TaxRuleTypeApi* | [**createTaxRuleType**](docs/Api/TaxRuleTypeApi.md#createtaxruletype) | **POST** /tax-rule-type | Create a new Tax Rule Type resources
*TaxRuleTypeApi* | [**deleteTaxRuleType**](docs/Api/TaxRuleTypeApi.md#deletetaxruletype) | **DELETE** /tax-rule-type/{id} | Delete a Tax Rule Type resource
*TaxRuleTypeApi* | [**getTaxRuleType**](docs/Api/TaxRuleTypeApi.md#gettaxruletype) | **GET** /tax-rule-type/{id} | Detailed information about a Tax Rule Type resource
*TaxRuleTypeApi* | [**getTaxRuleTypeList**](docs/Api/TaxRuleTypeApi.md#gettaxruletypelist) | **GET** /tax-rule-type | List with basic information of Tax Rule Type resources
*TaxRuleTypeApi* | [**updateTaxRuleType**](docs/Api/TaxRuleTypeApi.md#updatetaxruletype) | **PATCH** /tax-rule-type/{id} | Partially update information about a Tax Rule Type resource
*ThemeApi* | [**createTheme**](docs/Api/ThemeApi.md#createtheme) | **POST** /theme | Create a new Theme resources
*ThemeApi* | [**deleteTheme**](docs/Api/ThemeApi.md#deletetheme) | **DELETE** /theme/{id} | Delete a Theme resource
*ThemeApi* | [**getTheme**](docs/Api/ThemeApi.md#gettheme) | **GET** /theme/{id} | Detailed information about a Theme resource
*ThemeApi* | [**getThemeList**](docs/Api/ThemeApi.md#getthemelist) | **GET** /theme | List with basic information of Theme resources
*ThemeApi* | [**updateTheme**](docs/Api/ThemeApi.md#updatetheme) | **PATCH** /theme/{id} | Partially update information about a Theme resource
*UnitApi* | [**createUnit**](docs/Api/UnitApi.md#createunit) | **POST** /unit | Create a new Unit resources
*UnitApi* | [**deleteUnit**](docs/Api/UnitApi.md#deleteunit) | **DELETE** /unit/{id} | Delete a Unit resource
*UnitApi* | [**getUnit**](docs/Api/UnitApi.md#getunit) | **GET** /unit/{id} | Detailed information about a Unit resource
*UnitApi* | [**getUnitList**](docs/Api/UnitApi.md#getunitlist) | **GET** /unit | List with basic information of Unit resources
*UnitApi* | [**updateUnit**](docs/Api/UnitApi.md#updateunit) | **PATCH** /unit/{id} | Partially update information about a Unit resource
*UserApi* | [**createUser**](docs/Api/UserApi.md#createuser) | **POST** /user | Create a new User resources
*UserApi* | [**deleteUser**](docs/Api/UserApi.md#deleteuser) | **DELETE** /user/{id} | Delete a User resource
*UserApi* | [**getUser**](docs/Api/UserApi.md#getuser) | **GET** /user/{id} | Detailed information about a User resource
*UserApi* | [**getUserList**](docs/Api/UserApi.md#getuserlist) | **GET** /user | List with basic information of User resources
*UserApi* | [**updateUser**](docs/Api/UserApi.md#updateuser) | **PATCH** /user/{id} | Partially update information about a User resource
*UserAccessKeyApi* | [**createUserAccessKey**](docs/Api/UserAccessKeyApi.md#createuseraccesskey) | **POST** /user-access-key | Create a new User Access Key resources
*UserAccessKeyApi* | [**deleteUserAccessKey**](docs/Api/UserAccessKeyApi.md#deleteuseraccesskey) | **DELETE** /user-access-key/{id} | Delete a User Access Key resource
*UserAccessKeyApi* | [**getUserAccessKey**](docs/Api/UserAccessKeyApi.md#getuseraccesskey) | **GET** /user-access-key/{id} | Detailed information about a User Access Key resource
*UserAccessKeyApi* | [**getUserAccessKeyList**](docs/Api/UserAccessKeyApi.md#getuseraccesskeylist) | **GET** /user-access-key | List with basic information of User Access Key resources
*UserAccessKeyApi* | [**updateUserAccessKey**](docs/Api/UserAccessKeyApi.md#updateuseraccesskey) | **PATCH** /user-access-key/{id} | Partially update information about a User Access Key resource
*UserConfigApi* | [**createUserConfig**](docs/Api/UserConfigApi.md#createuserconfig) | **POST** /user-config | Create a new User Config resources
*UserConfigApi* | [**deleteUserConfig**](docs/Api/UserConfigApi.md#deleteuserconfig) | **DELETE** /user-config/{id} | Delete a User Config resource
*UserConfigApi* | [**getUserConfig**](docs/Api/UserConfigApi.md#getuserconfig) | **GET** /user-config/{id} | Detailed information about a User Config resource
*UserConfigApi* | [**getUserConfigList**](docs/Api/UserConfigApi.md#getuserconfiglist) | **GET** /user-config | List with basic information of User Config resources
*UserConfigApi* | [**updateUserConfig**](docs/Api/UserConfigApi.md#updateuserconfig) | **PATCH** /user-config/{id} | Partially update information about a User Config resource
*UserRecoveryApi* | [**createUserRecovery**](docs/Api/UserRecoveryApi.md#createuserrecovery) | **POST** /user-recovery | Create a new User Recovery resources
*UserRecoveryApi* | [**deleteUserRecovery**](docs/Api/UserRecoveryApi.md#deleteuserrecovery) | **DELETE** /user-recovery/{id} | Delete a User Recovery resource
*UserRecoveryApi* | [**getUserRecovery**](docs/Api/UserRecoveryApi.md#getuserrecovery) | **GET** /user-recovery/{id} | Detailed information about a User Recovery resource
*UserRecoveryApi* | [**getUserRecoveryList**](docs/Api/UserRecoveryApi.md#getuserrecoverylist) | **GET** /user-recovery | List with basic information of User Recovery resources
*UserRecoveryApi* | [**updateUserRecovery**](docs/Api/UserRecoveryApi.md#updateuserrecovery) | **PATCH** /user-recovery/{id} | Partially update information about a User Recovery resource
*WebhookApi* | [**createWebhook**](docs/Api/WebhookApi.md#createwebhook) | **POST** /webhook | Create a new Webhook resources
*WebhookApi* | [**deleteWebhook**](docs/Api/WebhookApi.md#deletewebhook) | **DELETE** /webhook/{id} | Delete a Webhook resource
*WebhookApi* | [**getWebhook**](docs/Api/WebhookApi.md#getwebhook) | **GET** /webhook/{id} | Detailed information about a Webhook resource
*WebhookApi* | [**getWebhookList**](docs/Api/WebhookApi.md#getwebhooklist) | **GET** /webhook | List with basic information of Webhook resources
*WebhookApi* | [**updateWebhook**](docs/Api/WebhookApi.md#updatewebhook) | **PATCH** /webhook/{id} | Partially update information about a Webhook resource
*WebhookEventLogApi* | [**createWebhookEventLog**](docs/Api/WebhookEventLogApi.md#createwebhookeventlog) | **POST** /webhook-event-log | Create a new Webhook Event Log resources
*WebhookEventLogApi* | [**deleteWebhookEventLog**](docs/Api/WebhookEventLogApi.md#deletewebhookeventlog) | **DELETE** /webhook-event-log/{id} | Delete a Webhook Event Log resource
*WebhookEventLogApi* | [**getWebhookEventLog**](docs/Api/WebhookEventLogApi.md#getwebhookeventlog) | **GET** /webhook-event-log/{id} | Detailed information about a Webhook Event Log resource
*WebhookEventLogApi* | [**getWebhookEventLogList**](docs/Api/WebhookEventLogApi.md#getwebhookeventloglist) | **GET** /webhook-event-log | List with basic information of Webhook Event Log resources
*WebhookEventLogApi* | [**updateWebhookEventLog**](docs/Api/WebhookEventLogApi.md#updatewebhookeventlog) | **PATCH** /webhook-event-log/{id} | Partially update information about a Webhook Event Log resource

## Documentation For Models

 - [AclRole](docs/Model/AclRole.md)
 - [AclRoleJsonApi](docs/Model/AclRoleJsonApi.md)
 - [AclRoleJsonApiRelationships](docs/Model/AclRoleJsonApiRelationships.md)
 - [AclRoleJsonApiRelationshipsApp](docs/Model/AclRoleJsonApiRelationshipsApp.md)
 - [AclRoleJsonApiRelationshipsAppData](docs/Model/AclRoleJsonApiRelationshipsAppData.md)
 - [AclRoleJsonApiRelationshipsAppLinks](docs/Model/AclRoleJsonApiRelationshipsAppLinks.md)
 - [AclRoleJsonApiRelationshipsIntegrations](docs/Model/AclRoleJsonApiRelationshipsIntegrations.md)
 - [AclRoleJsonApiRelationshipsIntegrationsData](docs/Model/AclRoleJsonApiRelationshipsIntegrationsData.md)
 - [AclRoleJsonApiRelationshipsIntegrationsLinks](docs/Model/AclRoleJsonApiRelationshipsIntegrationsLinks.md)
 - [AclRoleJsonApiRelationshipsUsers](docs/Model/AclRoleJsonApiRelationshipsUsers.md)
 - [AclRoleJsonApiRelationshipsUsersData](docs/Model/AclRoleJsonApiRelationshipsUsersData.md)
 - [AclRoleJsonApiRelationshipsUsersLinks](docs/Model/AclRoleJsonApiRelationshipsUsersLinks.md)
 - [AclUserRole](docs/Model/AclUserRole.md)
 - [AclroleBody](docs/Model/AclroleBody.md)
 - [AclroleIdBody](docs/Model/AclroleIdBody.md)
 - [AcrisCookie](docs/Model/AcrisCookie.md)
 - [AcrisCookieGroup](docs/Model/AcrisCookieGroup.md)
 - [AcrisCookieGroupJsonApi](docs/Model/AcrisCookieGroupJsonApi.md)
 - [AcrisCookieGroupJsonApiRelationships](docs/Model/AcrisCookieGroupJsonApiRelationships.md)
 - [AcrisCookieGroupJsonApiRelationshipsCookies](docs/Model/AcrisCookieGroupJsonApiRelationshipsCookies.md)
 - [AcrisCookieGroupJsonApiRelationshipsCookiesData](docs/Model/AcrisCookieGroupJsonApiRelationshipsCookiesData.md)
 - [AcrisCookieGroupJsonApiRelationshipsCookiesLinks](docs/Model/AcrisCookieGroupJsonApiRelationshipsCookiesLinks.md)
 - [AcrisCookieJsonApi](docs/Model/AcrisCookieJsonApi.md)
 - [AcrisCookieJsonApiRelationships](docs/Model/AcrisCookieJsonApiRelationships.md)
 - [AcrisCookieJsonApiRelationshipsCookieGroup](docs/Model/AcrisCookieJsonApiRelationshipsCookieGroup.md)
 - [AcrisCookieJsonApiRelationshipsCookieGroupData](docs/Model/AcrisCookieJsonApiRelationshipsCookieGroupData.md)
 - [AcrisCookieJsonApiRelationshipsCookieGroupLinks](docs/Model/AcrisCookieJsonApiRelationshipsCookieGroupLinks.md)
 - [AcrisCookieJsonApiRelationshipsSalesChannels](docs/Model/AcrisCookieJsonApiRelationshipsSalesChannels.md)
 - [AcrisCookieJsonApiRelationshipsSalesChannelsData](docs/Model/AcrisCookieJsonApiRelationshipsSalesChannelsData.md)
 - [AcrisCookieJsonApiRelationshipsSalesChannelsLinks](docs/Model/AcrisCookieJsonApiRelationshipsSalesChannelsLinks.md)
 - [AcrisCookieSalesChannel](docs/Model/AcrisCookieSalesChannel.md)
 - [AcriscookieBody](docs/Model/AcriscookieBody.md)
 - [AcriscookieIdBody](docs/Model/AcriscookieIdBody.md)
 - [AcriscookiegroupBody](docs/Model/AcriscookiegroupBody.md)
 - [AcriscookiegroupIdBody](docs/Model/AcriscookiegroupIdBody.md)
 - [ActionIndexBody](docs/Model/ActionIndexBody.md)
 - [ActionSyncBody](docs/Model/ActionSyncBody.md)
 - [ActionmailtemplatebuildMailTemplate](docs/Model/ActionmailtemplatebuildMailTemplate.md)
 - [ActionmailtemplatebuildMailTemplateType](docs/Model/ActionmailtemplatebuildMailTemplateType.md)
 - [ActionmailtemplatesendBinAttachments](docs/Model/ActionmailtemplatesendBinAttachments.md)
 - [ActionorderorderIddocumentdocumentTypeNameConfig](docs/Model/ActionorderorderIddocumentdocumentTypeNameConfig.md)
 - [AllOfrelationshipLinksSelf](docs/Model/AllOfrelationshipLinksSelf.md)
 - [AllOfsuccessLinks](docs/Model/AllOfsuccessLinks.md)
 - [AnyOfrelationships](docs/Model/AnyOfrelationships.md)
 - [App](docs/Model/App.md)
 - [AppActionButton](docs/Model/AppActionButton.md)
 - [AppActionButtonJsonApi](docs/Model/AppActionButtonJsonApi.md)
 - [AppActionButtonJsonApiRelationships](docs/Model/AppActionButtonJsonApiRelationships.md)
 - [AppActionButtonJsonApiRelationshipsApp](docs/Model/AppActionButtonJsonApiRelationshipsApp.md)
 - [AppActionButtonJsonApiRelationshipsAppData](docs/Model/AppActionButtonJsonApiRelationshipsAppData.md)
 - [AppActionButtonJsonApiRelationshipsAppLinks](docs/Model/AppActionButtonJsonApiRelationshipsAppLinks.md)
 - [AppBody](docs/Model/AppBody.md)
 - [AppCmsBlock](docs/Model/AppCmsBlock.md)
 - [AppCmsBlockJsonApi](docs/Model/AppCmsBlockJsonApi.md)
 - [AppCmsBlockJsonApiRelationships](docs/Model/AppCmsBlockJsonApiRelationships.md)
 - [AppCmsBlockJsonApiRelationshipsApp](docs/Model/AppCmsBlockJsonApiRelationshipsApp.md)
 - [AppCmsBlockJsonApiRelationshipsAppData](docs/Model/AppCmsBlockJsonApiRelationshipsAppData.md)
 - [AppCmsBlockJsonApiRelationshipsAppLinks](docs/Model/AppCmsBlockJsonApiRelationshipsAppLinks.md)
 - [AppIdBody](docs/Model/AppIdBody.md)
 - [AppJsonApi](docs/Model/AppJsonApi.md)
 - [AppJsonApiRelationships](docs/Model/AppJsonApiRelationships.md)
 - [AppJsonApiRelationshipsAclRole](docs/Model/AppJsonApiRelationshipsAclRole.md)
 - [AppJsonApiRelationshipsAclRoleData](docs/Model/AppJsonApiRelationshipsAclRoleData.md)
 - [AppJsonApiRelationshipsAclRoleLinks](docs/Model/AppJsonApiRelationshipsAclRoleLinks.md)
 - [AppJsonApiRelationshipsActionButtons](docs/Model/AppJsonApiRelationshipsActionButtons.md)
 - [AppJsonApiRelationshipsActionButtonsData](docs/Model/AppJsonApiRelationshipsActionButtonsData.md)
 - [AppJsonApiRelationshipsActionButtonsLinks](docs/Model/AppJsonApiRelationshipsActionButtonsLinks.md)
 - [AppJsonApiRelationshipsCmsBlocks](docs/Model/AppJsonApiRelationshipsCmsBlocks.md)
 - [AppJsonApiRelationshipsCmsBlocksData](docs/Model/AppJsonApiRelationshipsCmsBlocksData.md)
 - [AppJsonApiRelationshipsCmsBlocksLinks](docs/Model/AppJsonApiRelationshipsCmsBlocksLinks.md)
 - [AppJsonApiRelationshipsCustomFieldSets](docs/Model/AppJsonApiRelationshipsCustomFieldSets.md)
 - [AppJsonApiRelationshipsCustomFieldSetsData](docs/Model/AppJsonApiRelationshipsCustomFieldSetsData.md)
 - [AppJsonApiRelationshipsCustomFieldSetsLinks](docs/Model/AppJsonApiRelationshipsCustomFieldSetsLinks.md)
 - [AppJsonApiRelationshipsIntegration](docs/Model/AppJsonApiRelationshipsIntegration.md)
 - [AppJsonApiRelationshipsIntegrationData](docs/Model/AppJsonApiRelationshipsIntegrationData.md)
 - [AppJsonApiRelationshipsIntegrationLinks](docs/Model/AppJsonApiRelationshipsIntegrationLinks.md)
 - [AppJsonApiRelationshipsPaymentMethods](docs/Model/AppJsonApiRelationshipsPaymentMethods.md)
 - [AppJsonApiRelationshipsPaymentMethodsData](docs/Model/AppJsonApiRelationshipsPaymentMethodsData.md)
 - [AppJsonApiRelationshipsPaymentMethodsLinks](docs/Model/AppJsonApiRelationshipsPaymentMethodsLinks.md)
 - [AppJsonApiRelationshipsTemplates](docs/Model/AppJsonApiRelationshipsTemplates.md)
 - [AppJsonApiRelationshipsTemplatesData](docs/Model/AppJsonApiRelationshipsTemplatesData.md)
 - [AppJsonApiRelationshipsTemplatesLinks](docs/Model/AppJsonApiRelationshipsTemplatesLinks.md)
 - [AppJsonApiRelationshipsWebhooks](docs/Model/AppJsonApiRelationshipsWebhooks.md)
 - [AppJsonApiRelationshipsWebhooksData](docs/Model/AppJsonApiRelationshipsWebhooksData.md)
 - [AppJsonApiRelationshipsWebhooksLinks](docs/Model/AppJsonApiRelationshipsWebhooksLinks.md)
 - [AppPaymentMethod](docs/Model/AppPaymentMethod.md)
 - [AppPaymentMethodJsonApi](docs/Model/AppPaymentMethodJsonApi.md)
 - [AppPaymentMethodJsonApiRelationships](docs/Model/AppPaymentMethodJsonApiRelationships.md)
 - [AppPaymentMethodJsonApiRelationshipsApp](docs/Model/AppPaymentMethodJsonApiRelationshipsApp.md)
 - [AppPaymentMethodJsonApiRelationshipsAppData](docs/Model/AppPaymentMethodJsonApiRelationshipsAppData.md)
 - [AppPaymentMethodJsonApiRelationshipsAppLinks](docs/Model/AppPaymentMethodJsonApiRelationshipsAppLinks.md)
 - [AppPaymentMethodJsonApiRelationshipsOriginalMedia](docs/Model/AppPaymentMethodJsonApiRelationshipsOriginalMedia.md)
 - [AppPaymentMethodJsonApiRelationshipsOriginalMediaData](docs/Model/AppPaymentMethodJsonApiRelationshipsOriginalMediaData.md)
 - [AppPaymentMethodJsonApiRelationshipsOriginalMediaLinks](docs/Model/AppPaymentMethodJsonApiRelationshipsOriginalMediaLinks.md)
 - [AppPaymentMethodJsonApiRelationshipsPaymentMethod](docs/Model/AppPaymentMethodJsonApiRelationshipsPaymentMethod.md)
 - [AppPaymentMethodJsonApiRelationshipsPaymentMethodData](docs/Model/AppPaymentMethodJsonApiRelationshipsPaymentMethodData.md)
 - [AppPaymentMethodJsonApiRelationshipsPaymentMethodLinks](docs/Model/AppPaymentMethodJsonApiRelationshipsPaymentMethodLinks.md)
 - [AppTemplate](docs/Model/AppTemplate.md)
 - [AppTemplateJsonApi](docs/Model/AppTemplateJsonApi.md)
 - [AppTemplateJsonApiRelationships](docs/Model/AppTemplateJsonApiRelationships.md)
 - [AppTemplateJsonApiRelationshipsApp](docs/Model/AppTemplateJsonApiRelationshipsApp.md)
 - [AppTemplateJsonApiRelationshipsAppData](docs/Model/AppTemplateJsonApiRelationshipsAppData.md)
 - [AppTemplateJsonApiRelationshipsAppLinks](docs/Model/AppTemplateJsonApiRelationshipsAppLinks.md)
 - [AppactionbuttonBody](docs/Model/AppactionbuttonBody.md)
 - [AppactionbuttonIdBody](docs/Model/AppactionbuttonIdBody.md)
 - [AppcmsblockBody](docs/Model/AppcmsblockBody.md)
 - [AppcmsblockIdBody](docs/Model/AppcmsblockIdBody.md)
 - [ApppaymentmethodBody](docs/Model/ApppaymentmethodBody.md)
 - [ApppaymentmethodIdBody](docs/Model/ApppaymentmethodIdBody.md)
 - [ApptemplateBody](docs/Model/ApptemplateBody.md)
 - [ApptemplateIdBody](docs/Model/ApptemplateIdBody.md)
 - [Attributes](docs/Model/Attributes.md)
 - [BfCategoryMapping](docs/Model/BfCategoryMapping.md)
 - [BfCategoryMappingJsonApi](docs/Model/BfCategoryMappingJsonApi.md)
 - [BfConfig](docs/Model/BfConfig.md)
 - [BfConfigJsonApi](docs/Model/BfConfigJsonApi.md)
 - [BfMarketplace](docs/Model/BfMarketplace.md)
 - [BfMarketplaceJsonApi](docs/Model/BfMarketplaceJsonApi.md)
 - [BfMarketplaceJsonApiRelationships](docs/Model/BfMarketplaceJsonApiRelationships.md)
 - [BfMarketplaceJsonApiRelationshipsMarketplaceSettings](docs/Model/BfMarketplaceJsonApiRelationshipsMarketplaceSettings.md)
 - [BfMarketplaceJsonApiRelationshipsMarketplaceSettingsData](docs/Model/BfMarketplaceJsonApiRelationshipsMarketplaceSettingsData.md)
 - [BfMarketplaceJsonApiRelationshipsMarketplaceSettingsLinks](docs/Model/BfMarketplaceJsonApiRelationshipsMarketplaceSettingsLinks.md)
 - [BfMarketplaceJsonApiRelationshipsSalesChannels](docs/Model/BfMarketplaceJsonApiRelationshipsSalesChannels.md)
 - [BfMarketplaceJsonApiRelationshipsSalesChannelsData](docs/Model/BfMarketplaceJsonApiRelationshipsSalesChannelsData.md)
 - [BfMarketplaceJsonApiRelationshipsSalesChannelsLinks](docs/Model/BfMarketplaceJsonApiRelationshipsSalesChannelsLinks.md)
 - [BfMarketplaceSalesChannel](docs/Model/BfMarketplaceSalesChannel.md)
 - [BfMarketplaceSettings](docs/Model/BfMarketplaceSettings.md)
 - [BfMarketplaceSettingsJsonApi](docs/Model/BfMarketplaceSettingsJsonApi.md)
 - [BfMarketplaceSettingsJsonApiRelationships](docs/Model/BfMarketplaceSettingsJsonApiRelationships.md)
 - [BfMarketplaceSettingsJsonApiRelationshipsCountry](docs/Model/BfMarketplaceSettingsJsonApiRelationshipsCountry.md)
 - [BfMarketplaceSettingsJsonApiRelationshipsCountryData](docs/Model/BfMarketplaceSettingsJsonApiRelationshipsCountryData.md)
 - [BfMarketplaceSettingsJsonApiRelationshipsCountryLinks](docs/Model/BfMarketplaceSettingsJsonApiRelationshipsCountryLinks.md)
 - [BfMarketplaceSettingsJsonApiRelationshipsCurrency](docs/Model/BfMarketplaceSettingsJsonApiRelationshipsCurrency.md)
 - [BfMarketplaceSettingsJsonApiRelationshipsCurrencyData](docs/Model/BfMarketplaceSettingsJsonApiRelationshipsCurrencyData.md)
 - [BfMarketplaceSettingsJsonApiRelationshipsCurrencyLinks](docs/Model/BfMarketplaceSettingsJsonApiRelationshipsCurrencyLinks.md)
 - [BfMarketplaceSettingsJsonApiRelationshipsLanguage](docs/Model/BfMarketplaceSettingsJsonApiRelationshipsLanguage.md)
 - [BfMarketplaceSettingsJsonApiRelationshipsLanguageData](docs/Model/BfMarketplaceSettingsJsonApiRelationshipsLanguageData.md)
 - [BfMarketplaceSettingsJsonApiRelationshipsLanguageLinks](docs/Model/BfMarketplaceSettingsJsonApiRelationshipsLanguageLinks.md)
 - [BfMarketplaceSettingsJsonApiRelationshipsMarketplace](docs/Model/BfMarketplaceSettingsJsonApiRelationshipsMarketplace.md)
 - [BfMarketplaceSettingsJsonApiRelationshipsMarketplaceData](docs/Model/BfMarketplaceSettingsJsonApiRelationshipsMarketplaceData.md)
 - [BfMarketplaceSettingsJsonApiRelationshipsMarketplaceLinks](docs/Model/BfMarketplaceSettingsJsonApiRelationshipsMarketplaceLinks.md)
 - [BfProductToDelete](docs/Model/BfProductToDelete.md)
 - [BfProductToDeleteJsonApi](docs/Model/BfProductToDeleteJsonApi.md)
 - [BfSupport](docs/Model/BfSupport.md)
 - [BfSupportJsonApi](docs/Model/BfSupportJsonApi.md)
 - [BfcategorymappingBody](docs/Model/BfcategorymappingBody.md)
 - [BfcategorymappingIdBody](docs/Model/BfcategorymappingIdBody.md)
 - [BfconfigBody](docs/Model/BfconfigBody.md)
 - [BfconfigIdBody](docs/Model/BfconfigIdBody.md)
 - [BfmarketplaceBody](docs/Model/BfmarketplaceBody.md)
 - [BfmarketplaceIdBody](docs/Model/BfmarketplaceIdBody.md)
 - [BfmarketplacesettingsBody](docs/Model/BfmarketplacesettingsBody.md)
 - [BfmarketplacesettingsIdBody](docs/Model/BfmarketplacesettingsIdBody.md)
 - [BfproducttodeleteBody](docs/Model/BfproducttodeleteBody.md)
 - [BfproducttodeleteIdBody](docs/Model/BfproducttodeleteIdBody.md)
 - [BfsupportBody](docs/Model/BfsupportBody.md)
 - [BfsupportIdBody](docs/Model/BfsupportIdBody.md)
 - [BusinessEventsResponse](docs/Model/BusinessEventsResponse.md)
 - [BusinessEventsResponseInner](docs/Model/BusinessEventsResponseInner.md)
 - [CaptureIdPaypalOrderIdBody](docs/Model/CaptureIdPaypalOrderIdBody.md)
 - [Category](docs/Model/Category.md)
 - [CategoryBody](docs/Model/CategoryBody.md)
 - [CategoryIdBody](docs/Model/CategoryIdBody.md)
 - [CategoryJsonApi](docs/Model/CategoryJsonApi.md)
 - [CategoryJsonApiRelationships](docs/Model/CategoryJsonApiRelationships.md)
 - [CategoryJsonApiRelationshipsChildren](docs/Model/CategoryJsonApiRelationshipsChildren.md)
 - [CategoryJsonApiRelationshipsChildrenData](docs/Model/CategoryJsonApiRelationshipsChildrenData.md)
 - [CategoryJsonApiRelationshipsChildrenLinks](docs/Model/CategoryJsonApiRelationshipsChildrenLinks.md)
 - [CategoryJsonApiRelationshipsCmsPage](docs/Model/CategoryJsonApiRelationshipsCmsPage.md)
 - [CategoryJsonApiRelationshipsCmsPageData](docs/Model/CategoryJsonApiRelationshipsCmsPageData.md)
 - [CategoryJsonApiRelationshipsCmsPageLinks](docs/Model/CategoryJsonApiRelationshipsCmsPageLinks.md)
 - [CategoryJsonApiRelationshipsFooterSalesChannels](docs/Model/CategoryJsonApiRelationshipsFooterSalesChannels.md)
 - [CategoryJsonApiRelationshipsFooterSalesChannelsData](docs/Model/CategoryJsonApiRelationshipsFooterSalesChannelsData.md)
 - [CategoryJsonApiRelationshipsFooterSalesChannelsLinks](docs/Model/CategoryJsonApiRelationshipsFooterSalesChannelsLinks.md)
 - [CategoryJsonApiRelationshipsMainCategories](docs/Model/CategoryJsonApiRelationshipsMainCategories.md)
 - [CategoryJsonApiRelationshipsMainCategoriesData](docs/Model/CategoryJsonApiRelationshipsMainCategoriesData.md)
 - [CategoryJsonApiRelationshipsMainCategoriesLinks](docs/Model/CategoryJsonApiRelationshipsMainCategoriesLinks.md)
 - [CategoryJsonApiRelationshipsMedia](docs/Model/CategoryJsonApiRelationshipsMedia.md)
 - [CategoryJsonApiRelationshipsMediaData](docs/Model/CategoryJsonApiRelationshipsMediaData.md)
 - [CategoryJsonApiRelationshipsMediaLinks](docs/Model/CategoryJsonApiRelationshipsMediaLinks.md)
 - [CategoryJsonApiRelationshipsNavigationSalesChannels](docs/Model/CategoryJsonApiRelationshipsNavigationSalesChannels.md)
 - [CategoryJsonApiRelationshipsNavigationSalesChannelsData](docs/Model/CategoryJsonApiRelationshipsNavigationSalesChannelsData.md)
 - [CategoryJsonApiRelationshipsNavigationSalesChannelsLinks](docs/Model/CategoryJsonApiRelationshipsNavigationSalesChannelsLinks.md)
 - [CategoryJsonApiRelationshipsNestedProducts](docs/Model/CategoryJsonApiRelationshipsNestedProducts.md)
 - [CategoryJsonApiRelationshipsNestedProductsData](docs/Model/CategoryJsonApiRelationshipsNestedProductsData.md)
 - [CategoryJsonApiRelationshipsNestedProductsLinks](docs/Model/CategoryJsonApiRelationshipsNestedProductsLinks.md)
 - [CategoryJsonApiRelationshipsParent](docs/Model/CategoryJsonApiRelationshipsParent.md)
 - [CategoryJsonApiRelationshipsParentData](docs/Model/CategoryJsonApiRelationshipsParentData.md)
 - [CategoryJsonApiRelationshipsParentLinks](docs/Model/CategoryJsonApiRelationshipsParentLinks.md)
 - [CategoryJsonApiRelationshipsProductStream](docs/Model/CategoryJsonApiRelationshipsProductStream.md)
 - [CategoryJsonApiRelationshipsProductStreamData](docs/Model/CategoryJsonApiRelationshipsProductStreamData.md)
 - [CategoryJsonApiRelationshipsProductStreamLinks](docs/Model/CategoryJsonApiRelationshipsProductStreamLinks.md)
 - [CategoryJsonApiRelationshipsProducts](docs/Model/CategoryJsonApiRelationshipsProducts.md)
 - [CategoryJsonApiRelationshipsProductsData](docs/Model/CategoryJsonApiRelationshipsProductsData.md)
 - [CategoryJsonApiRelationshipsProductsLinks](docs/Model/CategoryJsonApiRelationshipsProductsLinks.md)
 - [CategoryJsonApiRelationshipsSeoUrls](docs/Model/CategoryJsonApiRelationshipsSeoUrls.md)
 - [CategoryJsonApiRelationshipsSeoUrlsData](docs/Model/CategoryJsonApiRelationshipsSeoUrlsData.md)
 - [CategoryJsonApiRelationshipsSeoUrlsLinks](docs/Model/CategoryJsonApiRelationshipsSeoUrlsLinks.md)
 - [CategoryJsonApiRelationshipsServiceSalesChannels](docs/Model/CategoryJsonApiRelationshipsServiceSalesChannels.md)
 - [CategoryJsonApiRelationshipsServiceSalesChannelsData](docs/Model/CategoryJsonApiRelationshipsServiceSalesChannelsData.md)
 - [CategoryJsonApiRelationshipsServiceSalesChannelsLinks](docs/Model/CategoryJsonApiRelationshipsServiceSalesChannelsLinks.md)
 - [CategoryJsonApiRelationshipsTags](docs/Model/CategoryJsonApiRelationshipsTags.md)
 - [CategoryJsonApiRelationshipsTagsData](docs/Model/CategoryJsonApiRelationshipsTagsData.md)
 - [CategoryJsonApiRelationshipsTagsLinks](docs/Model/CategoryJsonApiRelationshipsTagsLinks.md)
 - [CategoryTag](docs/Model/CategoryTag.md)
 - [CmsBlock](docs/Model/CmsBlock.md)
 - [CmsBlockJsonApi](docs/Model/CmsBlockJsonApi.md)
 - [CmsBlockJsonApiRelationships](docs/Model/CmsBlockJsonApiRelationships.md)
 - [CmsBlockJsonApiRelationshipsBackgroundMedia](docs/Model/CmsBlockJsonApiRelationshipsBackgroundMedia.md)
 - [CmsBlockJsonApiRelationshipsBackgroundMediaData](docs/Model/CmsBlockJsonApiRelationshipsBackgroundMediaData.md)
 - [CmsBlockJsonApiRelationshipsBackgroundMediaLinks](docs/Model/CmsBlockJsonApiRelationshipsBackgroundMediaLinks.md)
 - [CmsBlockJsonApiRelationshipsSection](docs/Model/CmsBlockJsonApiRelationshipsSection.md)
 - [CmsBlockJsonApiRelationshipsSectionData](docs/Model/CmsBlockJsonApiRelationshipsSectionData.md)
 - [CmsBlockJsonApiRelationshipsSectionLinks](docs/Model/CmsBlockJsonApiRelationshipsSectionLinks.md)
 - [CmsBlockJsonApiRelationshipsSlots](docs/Model/CmsBlockJsonApiRelationshipsSlots.md)
 - [CmsBlockJsonApiRelationshipsSlotsData](docs/Model/CmsBlockJsonApiRelationshipsSlotsData.md)
 - [CmsBlockJsonApiRelationshipsSlotsLinks](docs/Model/CmsBlockJsonApiRelationshipsSlotsLinks.md)
 - [CmsPage](docs/Model/CmsPage.md)
 - [CmsPageActivity](docs/Model/CmsPageActivity.md)
 - [CmsPageActivityJsonApi](docs/Model/CmsPageActivityJsonApi.md)
 - [CmsPageActivityJsonApiRelationships](docs/Model/CmsPageActivityJsonApiRelationships.md)
 - [CmsPageActivityJsonApiRelationshipsCmsPage](docs/Model/CmsPageActivityJsonApiRelationshipsCmsPage.md)
 - [CmsPageActivityJsonApiRelationshipsCmsPageData](docs/Model/CmsPageActivityJsonApiRelationshipsCmsPageData.md)
 - [CmsPageActivityJsonApiRelationshipsCmsPageLinks](docs/Model/CmsPageActivityJsonApiRelationshipsCmsPageLinks.md)
 - [CmsPageActivityJsonApiRelationshipsUser](docs/Model/CmsPageActivityJsonApiRelationshipsUser.md)
 - [CmsPageActivityJsonApiRelationshipsUserData](docs/Model/CmsPageActivityJsonApiRelationshipsUserData.md)
 - [CmsPageActivityJsonApiRelationshipsUserLinks](docs/Model/CmsPageActivityJsonApiRelationshipsUserLinks.md)
 - [CmsPageDraft](docs/Model/CmsPageDraft.md)
 - [CmsPageDraftJsonApi](docs/Model/CmsPageDraftJsonApi.md)
 - [CmsPageDraftJsonApiRelationships](docs/Model/CmsPageDraftJsonApiRelationships.md)
 - [CmsPageDraftJsonApiRelationshipsCmsPage](docs/Model/CmsPageDraftJsonApiRelationshipsCmsPage.md)
 - [CmsPageDraftJsonApiRelationshipsCmsPageData](docs/Model/CmsPageDraftJsonApiRelationshipsCmsPageData.md)
 - [CmsPageDraftJsonApiRelationshipsCmsPageLinks](docs/Model/CmsPageDraftJsonApiRelationshipsCmsPageLinks.md)
 - [CmsPageDraftJsonApiRelationshipsPreviewMedia](docs/Model/CmsPageDraftJsonApiRelationshipsPreviewMedia.md)
 - [CmsPageDraftJsonApiRelationshipsPreviewMediaData](docs/Model/CmsPageDraftJsonApiRelationshipsPreviewMediaData.md)
 - [CmsPageDraftJsonApiRelationshipsPreviewMediaLinks](docs/Model/CmsPageDraftJsonApiRelationshipsPreviewMediaLinks.md)
 - [CmsPageDraftJsonApiRelationshipsUser](docs/Model/CmsPageDraftJsonApiRelationshipsUser.md)
 - [CmsPageDraftJsonApiRelationshipsUserData](docs/Model/CmsPageDraftJsonApiRelationshipsUserData.md)
 - [CmsPageDraftJsonApiRelationshipsUserLinks](docs/Model/CmsPageDraftJsonApiRelationshipsUserLinks.md)
 - [CmsPageJsonApi](docs/Model/CmsPageJsonApi.md)
 - [CmsPageJsonApiConfig](docs/Model/CmsPageJsonApiConfig.md)
 - [CmsPageJsonApiRelationships](docs/Model/CmsPageJsonApiRelationships.md)
 - [CmsPageJsonApiRelationshipsCategories](docs/Model/CmsPageJsonApiRelationshipsCategories.md)
 - [CmsPageJsonApiRelationshipsCategoriesData](docs/Model/CmsPageJsonApiRelationshipsCategoriesData.md)
 - [CmsPageJsonApiRelationshipsCategoriesLinks](docs/Model/CmsPageJsonApiRelationshipsCategoriesLinks.md)
 - [CmsPageJsonApiRelationshipsHomeSalesChannels](docs/Model/CmsPageJsonApiRelationshipsHomeSalesChannels.md)
 - [CmsPageJsonApiRelationshipsHomeSalesChannelsData](docs/Model/CmsPageJsonApiRelationshipsHomeSalesChannelsData.md)
 - [CmsPageJsonApiRelationshipsHomeSalesChannelsLinks](docs/Model/CmsPageJsonApiRelationshipsHomeSalesChannelsLinks.md)
 - [CmsPageJsonApiRelationshipsLandingPages](docs/Model/CmsPageJsonApiRelationshipsLandingPages.md)
 - [CmsPageJsonApiRelationshipsLandingPagesData](docs/Model/CmsPageJsonApiRelationshipsLandingPagesData.md)
 - [CmsPageJsonApiRelationshipsLandingPagesLinks](docs/Model/CmsPageJsonApiRelationshipsLandingPagesLinks.md)
 - [CmsPageJsonApiRelationshipsPreviewMedia](docs/Model/CmsPageJsonApiRelationshipsPreviewMedia.md)
 - [CmsPageJsonApiRelationshipsPreviewMediaData](docs/Model/CmsPageJsonApiRelationshipsPreviewMediaData.md)
 - [CmsPageJsonApiRelationshipsPreviewMediaLinks](docs/Model/CmsPageJsonApiRelationshipsPreviewMediaLinks.md)
 - [CmsPageJsonApiRelationshipsProducts](docs/Model/CmsPageJsonApiRelationshipsProducts.md)
 - [CmsPageJsonApiRelationshipsProductsData](docs/Model/CmsPageJsonApiRelationshipsProductsData.md)
 - [CmsPageJsonApiRelationshipsProductsLinks](docs/Model/CmsPageJsonApiRelationshipsProductsLinks.md)
 - [CmsPageJsonApiRelationshipsSections](docs/Model/CmsPageJsonApiRelationshipsSections.md)
 - [CmsPageJsonApiRelationshipsSectionsData](docs/Model/CmsPageJsonApiRelationshipsSectionsData.md)
 - [CmsPageJsonApiRelationshipsSectionsLinks](docs/Model/CmsPageJsonApiRelationshipsSectionsLinks.md)
 - [CmsSection](docs/Model/CmsSection.md)
 - [CmsSectionJsonApi](docs/Model/CmsSectionJsonApi.md)
 - [CmsSectionJsonApiRelationships](docs/Model/CmsSectionJsonApiRelationships.md)
 - [CmsSectionJsonApiRelationshipsBackgroundMedia](docs/Model/CmsSectionJsonApiRelationshipsBackgroundMedia.md)
 - [CmsSectionJsonApiRelationshipsBackgroundMediaData](docs/Model/CmsSectionJsonApiRelationshipsBackgroundMediaData.md)
 - [CmsSectionJsonApiRelationshipsBackgroundMediaLinks](docs/Model/CmsSectionJsonApiRelationshipsBackgroundMediaLinks.md)
 - [CmsSectionJsonApiRelationshipsBlocks](docs/Model/CmsSectionJsonApiRelationshipsBlocks.md)
 - [CmsSectionJsonApiRelationshipsBlocksData](docs/Model/CmsSectionJsonApiRelationshipsBlocksData.md)
 - [CmsSectionJsonApiRelationshipsBlocksLinks](docs/Model/CmsSectionJsonApiRelationshipsBlocksLinks.md)
 - [CmsSectionJsonApiRelationshipsPage](docs/Model/CmsSectionJsonApiRelationshipsPage.md)
 - [CmsSectionJsonApiRelationshipsPageData](docs/Model/CmsSectionJsonApiRelationshipsPageData.md)
 - [CmsSectionJsonApiRelationshipsPageLinks](docs/Model/CmsSectionJsonApiRelationshipsPageLinks.md)
 - [CmsSlot](docs/Model/CmsSlot.md)
 - [CmsSlotJsonApi](docs/Model/CmsSlotJsonApi.md)
 - [CmsSlotJsonApiRelationships](docs/Model/CmsSlotJsonApiRelationships.md)
 - [CmsSlotJsonApiRelationshipsBlock](docs/Model/CmsSlotJsonApiRelationshipsBlock.md)
 - [CmsSlotJsonApiRelationshipsBlockData](docs/Model/CmsSlotJsonApiRelationshipsBlockData.md)
 - [CmsSlotJsonApiRelationshipsBlockLinks](docs/Model/CmsSlotJsonApiRelationshipsBlockLinks.md)
 - [CmsblockBody](docs/Model/CmsblockBody.md)
 - [CmsblockIdBody](docs/Model/CmsblockIdBody.md)
 - [CmspageBody](docs/Model/CmspageBody.md)
 - [CmspageIdBody](docs/Model/CmspageIdBody.md)
 - [CmspageactivityBody](docs/Model/CmspageactivityBody.md)
 - [CmspageactivityIdBody](docs/Model/CmspageactivityIdBody.md)
 - [CmspagedraftBody](docs/Model/CmspagedraftBody.md)
 - [CmspagedraftIdBody](docs/Model/CmspagedraftIdBody.md)
 - [CmssectionBody](docs/Model/CmssectionBody.md)
 - [CmssectionIdBody](docs/Model/CmssectionIdBody.md)
 - [CmsslotBody](docs/Model/CmsslotBody.md)
 - [CmsslotIdBody](docs/Model/CmsslotIdBody.md)
 - [Country](docs/Model/Country.md)
 - [CountryBody](docs/Model/CountryBody.md)
 - [CountryIdBody](docs/Model/CountryIdBody.md)
 - [CountryJsonApi](docs/Model/CountryJsonApi.md)
 - [CountryJsonApiCustomerTax](docs/Model/CountryJsonApiCustomerTax.md)
 - [CountryJsonApiRelationships](docs/Model/CountryJsonApiRelationships.md)
 - [CountryJsonApiRelationshipsCurrencyCountryRoundings](docs/Model/CountryJsonApiRelationshipsCurrencyCountryRoundings.md)
 - [CountryJsonApiRelationshipsCurrencyCountryRoundingsData](docs/Model/CountryJsonApiRelationshipsCurrencyCountryRoundingsData.md)
 - [CountryJsonApiRelationshipsCurrencyCountryRoundingsLinks](docs/Model/CountryJsonApiRelationshipsCurrencyCountryRoundingsLinks.md)
 - [CountryJsonApiRelationshipsCustomerAddresses](docs/Model/CountryJsonApiRelationshipsCustomerAddresses.md)
 - [CountryJsonApiRelationshipsCustomerAddressesData](docs/Model/CountryJsonApiRelationshipsCustomerAddressesData.md)
 - [CountryJsonApiRelationshipsCustomerAddressesLinks](docs/Model/CountryJsonApiRelationshipsCustomerAddressesLinks.md)
 - [CountryJsonApiRelationshipsOrderAddresses](docs/Model/CountryJsonApiRelationshipsOrderAddresses.md)
 - [CountryJsonApiRelationshipsOrderAddressesData](docs/Model/CountryJsonApiRelationshipsOrderAddressesData.md)
 - [CountryJsonApiRelationshipsOrderAddressesLinks](docs/Model/CountryJsonApiRelationshipsOrderAddressesLinks.md)
 - [CountryJsonApiRelationshipsSalesChannelDefaultAssignments](docs/Model/CountryJsonApiRelationshipsSalesChannelDefaultAssignments.md)
 - [CountryJsonApiRelationshipsSalesChannelDefaultAssignmentsData](docs/Model/CountryJsonApiRelationshipsSalesChannelDefaultAssignmentsData.md)
 - [CountryJsonApiRelationshipsSalesChannelDefaultAssignmentsLinks](docs/Model/CountryJsonApiRelationshipsSalesChannelDefaultAssignmentsLinks.md)
 - [CountryJsonApiRelationshipsSalesChannels](docs/Model/CountryJsonApiRelationshipsSalesChannels.md)
 - [CountryJsonApiRelationshipsSalesChannelsData](docs/Model/CountryJsonApiRelationshipsSalesChannelsData.md)
 - [CountryJsonApiRelationshipsSalesChannelsLinks](docs/Model/CountryJsonApiRelationshipsSalesChannelsLinks.md)
 - [CountryJsonApiRelationshipsStates](docs/Model/CountryJsonApiRelationshipsStates.md)
 - [CountryJsonApiRelationshipsStatesData](docs/Model/CountryJsonApiRelationshipsStatesData.md)
 - [CountryJsonApiRelationshipsStatesLinks](docs/Model/CountryJsonApiRelationshipsStatesLinks.md)
 - [CountryJsonApiRelationshipsTaxRules](docs/Model/CountryJsonApiRelationshipsTaxRules.md)
 - [CountryJsonApiRelationshipsTaxRulesData](docs/Model/CountryJsonApiRelationshipsTaxRulesData.md)
 - [CountryJsonApiRelationshipsTaxRulesLinks](docs/Model/CountryJsonApiRelationshipsTaxRulesLinks.md)
 - [CountryState](docs/Model/CountryState.md)
 - [CountryStateJsonApi](docs/Model/CountryStateJsonApi.md)
 - [CountryStateJsonApiRelationships](docs/Model/CountryStateJsonApiRelationships.md)
 - [CountryStateJsonApiRelationshipsCountry](docs/Model/CountryStateJsonApiRelationshipsCountry.md)
 - [CountryStateJsonApiRelationshipsCountryData](docs/Model/CountryStateJsonApiRelationshipsCountryData.md)
 - [CountryStateJsonApiRelationshipsCountryLinks](docs/Model/CountryStateJsonApiRelationshipsCountryLinks.md)
 - [CountryStateJsonApiRelationshipsCustomerAddresses](docs/Model/CountryStateJsonApiRelationshipsCustomerAddresses.md)
 - [CountryStateJsonApiRelationshipsCustomerAddressesData](docs/Model/CountryStateJsonApiRelationshipsCustomerAddressesData.md)
 - [CountryStateJsonApiRelationshipsCustomerAddressesLinks](docs/Model/CountryStateJsonApiRelationshipsCustomerAddressesLinks.md)
 - [CountryStateJsonApiRelationshipsOrderAddresses](docs/Model/CountryStateJsonApiRelationshipsOrderAddresses.md)
 - [CountryStateJsonApiRelationshipsOrderAddressesData](docs/Model/CountryStateJsonApiRelationshipsOrderAddressesData.md)
 - [CountryStateJsonApiRelationshipsOrderAddressesLinks](docs/Model/CountryStateJsonApiRelationshipsOrderAddressesLinks.md)
 - [CountrystateBody](docs/Model/CountrystateBody.md)
 - [CountrystateIdBody](docs/Model/CountrystateIdBody.md)
 - [Currency](docs/Model/Currency.md)
 - [CurrencyBody](docs/Model/CurrencyBody.md)
 - [CurrencyCountryRounding](docs/Model/CurrencyCountryRounding.md)
 - [CurrencyCountryRoundingJsonApi](docs/Model/CurrencyCountryRoundingJsonApi.md)
 - [CurrencyCountryRoundingJsonApiRelationships](docs/Model/CurrencyCountryRoundingJsonApiRelationships.md)
 - [CurrencyCountryRoundingJsonApiRelationshipsCountry](docs/Model/CurrencyCountryRoundingJsonApiRelationshipsCountry.md)
 - [CurrencyCountryRoundingJsonApiRelationshipsCountryData](docs/Model/CurrencyCountryRoundingJsonApiRelationshipsCountryData.md)
 - [CurrencyCountryRoundingJsonApiRelationshipsCountryLinks](docs/Model/CurrencyCountryRoundingJsonApiRelationshipsCountryLinks.md)
 - [CurrencyCountryRoundingJsonApiRelationshipsCurrency](docs/Model/CurrencyCountryRoundingJsonApiRelationshipsCurrency.md)
 - [CurrencyCountryRoundingJsonApiRelationshipsCurrencyData](docs/Model/CurrencyCountryRoundingJsonApiRelationshipsCurrencyData.md)
 - [CurrencyCountryRoundingJsonApiRelationshipsCurrencyLinks](docs/Model/CurrencyCountryRoundingJsonApiRelationshipsCurrencyLinks.md)
 - [CurrencyIdBody](docs/Model/CurrencyIdBody.md)
 - [CurrencyJsonApi](docs/Model/CurrencyJsonApi.md)
 - [CurrencyJsonApiItemRounding](docs/Model/CurrencyJsonApiItemRounding.md)
 - [CurrencyJsonApiRelationships](docs/Model/CurrencyJsonApiRelationships.md)
 - [CurrencyJsonApiRelationshipsCountryRoundings](docs/Model/CurrencyJsonApiRelationshipsCountryRoundings.md)
 - [CurrencyJsonApiRelationshipsCountryRoundingsData](docs/Model/CurrencyJsonApiRelationshipsCountryRoundingsData.md)
 - [CurrencyJsonApiRelationshipsCountryRoundingsLinks](docs/Model/CurrencyJsonApiRelationshipsCountryRoundingsLinks.md)
 - [CurrencyJsonApiRelationshipsOrders](docs/Model/CurrencyJsonApiRelationshipsOrders.md)
 - [CurrencyJsonApiRelationshipsOrdersData](docs/Model/CurrencyJsonApiRelationshipsOrdersData.md)
 - [CurrencyJsonApiRelationshipsOrdersLinks](docs/Model/CurrencyJsonApiRelationshipsOrdersLinks.md)
 - [CurrencyJsonApiRelationshipsProductExports](docs/Model/CurrencyJsonApiRelationshipsProductExports.md)
 - [CurrencyJsonApiRelationshipsProductExportsData](docs/Model/CurrencyJsonApiRelationshipsProductExportsData.md)
 - [CurrencyJsonApiRelationshipsProductExportsLinks](docs/Model/CurrencyJsonApiRelationshipsProductExportsLinks.md)
 - [CurrencyJsonApiRelationshipsPromotionDiscountPrices](docs/Model/CurrencyJsonApiRelationshipsPromotionDiscountPrices.md)
 - [CurrencyJsonApiRelationshipsPromotionDiscountPricesData](docs/Model/CurrencyJsonApiRelationshipsPromotionDiscountPricesData.md)
 - [CurrencyJsonApiRelationshipsPromotionDiscountPricesLinks](docs/Model/CurrencyJsonApiRelationshipsPromotionDiscountPricesLinks.md)
 - [CurrencyJsonApiRelationshipsSalesChannelDefaultAssignments](docs/Model/CurrencyJsonApiRelationshipsSalesChannelDefaultAssignments.md)
 - [CurrencyJsonApiRelationshipsSalesChannelDefaultAssignmentsData](docs/Model/CurrencyJsonApiRelationshipsSalesChannelDefaultAssignmentsData.md)
 - [CurrencyJsonApiRelationshipsSalesChannelDefaultAssignmentsLinks](docs/Model/CurrencyJsonApiRelationshipsSalesChannelDefaultAssignmentsLinks.md)
 - [CurrencyJsonApiRelationshipsSalesChannelDomains](docs/Model/CurrencyJsonApiRelationshipsSalesChannelDomains.md)
 - [CurrencyJsonApiRelationshipsSalesChannelDomainsData](docs/Model/CurrencyJsonApiRelationshipsSalesChannelDomainsData.md)
 - [CurrencyJsonApiRelationshipsSalesChannelDomainsLinks](docs/Model/CurrencyJsonApiRelationshipsSalesChannelDomainsLinks.md)
 - [CurrencyJsonApiRelationshipsSalesChannels](docs/Model/CurrencyJsonApiRelationshipsSalesChannels.md)
 - [CurrencyJsonApiRelationshipsSalesChannelsData](docs/Model/CurrencyJsonApiRelationshipsSalesChannelsData.md)
 - [CurrencyJsonApiRelationshipsSalesChannelsLinks](docs/Model/CurrencyJsonApiRelationshipsSalesChannelsLinks.md)
 - [CurrencycountryroundingBody](docs/Model/CurrencycountryroundingBody.md)
 - [CurrencycountryroundingIdBody](docs/Model/CurrencycountryroundingIdBody.md)
 - [CustomField](docs/Model/CustomField.md)
 - [CustomFieldJsonApi](docs/Model/CustomFieldJsonApi.md)
 - [CustomFieldJsonApiRelationships](docs/Model/CustomFieldJsonApiRelationships.md)
 - [CustomFieldJsonApiRelationshipsCustomFieldSet](docs/Model/CustomFieldJsonApiRelationshipsCustomFieldSet.md)
 - [CustomFieldJsonApiRelationshipsCustomFieldSetData](docs/Model/CustomFieldJsonApiRelationshipsCustomFieldSetData.md)
 - [CustomFieldJsonApiRelationshipsCustomFieldSetLinks](docs/Model/CustomFieldJsonApiRelationshipsCustomFieldSetLinks.md)
 - [CustomFieldJsonApiRelationshipsProductSearchConfigFields](docs/Model/CustomFieldJsonApiRelationshipsProductSearchConfigFields.md)
 - [CustomFieldJsonApiRelationshipsProductSearchConfigFieldsData](docs/Model/CustomFieldJsonApiRelationshipsProductSearchConfigFieldsData.md)
 - [CustomFieldJsonApiRelationshipsProductSearchConfigFieldsLinks](docs/Model/CustomFieldJsonApiRelationshipsProductSearchConfigFieldsLinks.md)
 - [CustomFieldSet](docs/Model/CustomFieldSet.md)
 - [CustomFieldSetJsonApi](docs/Model/CustomFieldSetJsonApi.md)
 - [CustomFieldSetJsonApiRelationships](docs/Model/CustomFieldSetJsonApiRelationships.md)
 - [CustomFieldSetJsonApiRelationshipsApp](docs/Model/CustomFieldSetJsonApiRelationshipsApp.md)
 - [CustomFieldSetJsonApiRelationshipsAppData](docs/Model/CustomFieldSetJsonApiRelationshipsAppData.md)
 - [CustomFieldSetJsonApiRelationshipsAppLinks](docs/Model/CustomFieldSetJsonApiRelationshipsAppLinks.md)
 - [CustomFieldSetJsonApiRelationshipsCustomFields](docs/Model/CustomFieldSetJsonApiRelationshipsCustomFields.md)
 - [CustomFieldSetJsonApiRelationshipsCustomFieldsData](docs/Model/CustomFieldSetJsonApiRelationshipsCustomFieldsData.md)
 - [CustomFieldSetJsonApiRelationshipsCustomFieldsLinks](docs/Model/CustomFieldSetJsonApiRelationshipsCustomFieldsLinks.md)
 - [CustomFieldSetJsonApiRelationshipsProducts](docs/Model/CustomFieldSetJsonApiRelationshipsProducts.md)
 - [CustomFieldSetJsonApiRelationshipsProductsData](docs/Model/CustomFieldSetJsonApiRelationshipsProductsData.md)
 - [CustomFieldSetJsonApiRelationshipsProductsLinks](docs/Model/CustomFieldSetJsonApiRelationshipsProductsLinks.md)
 - [CustomFieldSetJsonApiRelationshipsRelations](docs/Model/CustomFieldSetJsonApiRelationshipsRelations.md)
 - [CustomFieldSetJsonApiRelationshipsRelationsData](docs/Model/CustomFieldSetJsonApiRelationshipsRelationsData.md)
 - [CustomFieldSetJsonApiRelationshipsRelationsLinks](docs/Model/CustomFieldSetJsonApiRelationshipsRelationsLinks.md)
 - [CustomFieldSetRelation](docs/Model/CustomFieldSetRelation.md)
 - [CustomFieldSetRelationJsonApi](docs/Model/CustomFieldSetRelationJsonApi.md)
 - [CustomFieldSetRelationJsonApiRelationships](docs/Model/CustomFieldSetRelationJsonApiRelationships.md)
 - [CustomFieldSetRelationJsonApiRelationshipsCustomFieldSet](docs/Model/CustomFieldSetRelationJsonApiRelationshipsCustomFieldSet.md)
 - [CustomFieldSetRelationJsonApiRelationshipsCustomFieldSetData](docs/Model/CustomFieldSetRelationJsonApiRelationshipsCustomFieldSetData.md)
 - [CustomFieldSetRelationJsonApiRelationshipsCustomFieldSetLinks](docs/Model/CustomFieldSetRelationJsonApiRelationshipsCustomFieldSetLinks.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerAddress](docs/Model/CustomerAddress.md)
 - [CustomerAddressJsonApi](docs/Model/CustomerAddressJsonApi.md)
 - [CustomerAddressJsonApiRelationships](docs/Model/CustomerAddressJsonApiRelationships.md)
 - [CustomerAddressJsonApiRelationshipsCountry](docs/Model/CustomerAddressJsonApiRelationshipsCountry.md)
 - [CustomerAddressJsonApiRelationshipsCountryData](docs/Model/CustomerAddressJsonApiRelationshipsCountryData.md)
 - [CustomerAddressJsonApiRelationshipsCountryLinks](docs/Model/CustomerAddressJsonApiRelationshipsCountryLinks.md)
 - [CustomerAddressJsonApiRelationshipsCountryState](docs/Model/CustomerAddressJsonApiRelationshipsCountryState.md)
 - [CustomerAddressJsonApiRelationshipsCountryStateData](docs/Model/CustomerAddressJsonApiRelationshipsCountryStateData.md)
 - [CustomerAddressJsonApiRelationshipsCountryStateLinks](docs/Model/CustomerAddressJsonApiRelationshipsCountryStateLinks.md)
 - [CustomerAddressJsonApiRelationshipsCustomer](docs/Model/CustomerAddressJsonApiRelationshipsCustomer.md)
 - [CustomerAddressJsonApiRelationshipsCustomerData](docs/Model/CustomerAddressJsonApiRelationshipsCustomerData.md)
 - [CustomerAddressJsonApiRelationshipsCustomerLinks](docs/Model/CustomerAddressJsonApiRelationshipsCustomerLinks.md)
 - [CustomerAddressJsonApiRelationshipsSalutation](docs/Model/CustomerAddressJsonApiRelationshipsSalutation.md)
 - [CustomerAddressJsonApiRelationshipsSalutationData](docs/Model/CustomerAddressJsonApiRelationshipsSalutationData.md)
 - [CustomerAddressJsonApiRelationshipsSalutationLinks](docs/Model/CustomerAddressJsonApiRelationshipsSalutationLinks.md)
 - [CustomerBody](docs/Model/CustomerBody.md)
 - [CustomerGroup](docs/Model/CustomerGroup.md)
 - [CustomerGroupJsonApi](docs/Model/CustomerGroupJsonApi.md)
 - [CustomerGroupJsonApiRelationships](docs/Model/CustomerGroupJsonApiRelationships.md)
 - [CustomerGroupJsonApiRelationshipsCustomers](docs/Model/CustomerGroupJsonApiRelationshipsCustomers.md)
 - [CustomerGroupJsonApiRelationshipsCustomersData](docs/Model/CustomerGroupJsonApiRelationshipsCustomersData.md)
 - [CustomerGroupJsonApiRelationshipsCustomersLinks](docs/Model/CustomerGroupJsonApiRelationshipsCustomersLinks.md)
 - [CustomerGroupJsonApiRelationshipsRegistrationSalesChannels](docs/Model/CustomerGroupJsonApiRelationshipsRegistrationSalesChannels.md)
 - [CustomerGroupJsonApiRelationshipsRegistrationSalesChannelsData](docs/Model/CustomerGroupJsonApiRelationshipsRegistrationSalesChannelsData.md)
 - [CustomerGroupJsonApiRelationshipsRegistrationSalesChannelsLinks](docs/Model/CustomerGroupJsonApiRelationshipsRegistrationSalesChannelsLinks.md)
 - [CustomerGroupJsonApiRelationshipsSalesChannels](docs/Model/CustomerGroupJsonApiRelationshipsSalesChannels.md)
 - [CustomerGroupJsonApiRelationshipsSalesChannelsData](docs/Model/CustomerGroupJsonApiRelationshipsSalesChannelsData.md)
 - [CustomerGroupJsonApiRelationshipsSalesChannelsLinks](docs/Model/CustomerGroupJsonApiRelationshipsSalesChannelsLinks.md)
 - [CustomerGroupRegistrationSalesChannels](docs/Model/CustomerGroupRegistrationSalesChannels.md)
 - [CustomerIdBody](docs/Model/CustomerIdBody.md)
 - [CustomerJsonApi](docs/Model/CustomerJsonApi.md)
 - [CustomerJsonApiRelationships](docs/Model/CustomerJsonApiRelationships.md)
 - [CustomerJsonApiRelationshipsAddresses](docs/Model/CustomerJsonApiRelationshipsAddresses.md)
 - [CustomerJsonApiRelationshipsAddressesData](docs/Model/CustomerJsonApiRelationshipsAddressesData.md)
 - [CustomerJsonApiRelationshipsAddressesLinks](docs/Model/CustomerJsonApiRelationshipsAddressesLinks.md)
 - [CustomerJsonApiRelationshipsBoundSalesChannel](docs/Model/CustomerJsonApiRelationshipsBoundSalesChannel.md)
 - [CustomerJsonApiRelationshipsBoundSalesChannelData](docs/Model/CustomerJsonApiRelationshipsBoundSalesChannelData.md)
 - [CustomerJsonApiRelationshipsBoundSalesChannelLinks](docs/Model/CustomerJsonApiRelationshipsBoundSalesChannelLinks.md)
 - [CustomerJsonApiRelationshipsDefaultBillingAddress](docs/Model/CustomerJsonApiRelationshipsDefaultBillingAddress.md)
 - [CustomerJsonApiRelationshipsDefaultBillingAddressData](docs/Model/CustomerJsonApiRelationshipsDefaultBillingAddressData.md)
 - [CustomerJsonApiRelationshipsDefaultBillingAddressLinks](docs/Model/CustomerJsonApiRelationshipsDefaultBillingAddressLinks.md)
 - [CustomerJsonApiRelationshipsDefaultPaymentMethod](docs/Model/CustomerJsonApiRelationshipsDefaultPaymentMethod.md)
 - [CustomerJsonApiRelationshipsDefaultPaymentMethodData](docs/Model/CustomerJsonApiRelationshipsDefaultPaymentMethodData.md)
 - [CustomerJsonApiRelationshipsDefaultPaymentMethodLinks](docs/Model/CustomerJsonApiRelationshipsDefaultPaymentMethodLinks.md)
 - [CustomerJsonApiRelationshipsDefaultShippingAddress](docs/Model/CustomerJsonApiRelationshipsDefaultShippingAddress.md)
 - [CustomerJsonApiRelationshipsDefaultShippingAddressData](docs/Model/CustomerJsonApiRelationshipsDefaultShippingAddressData.md)
 - [CustomerJsonApiRelationshipsDefaultShippingAddressLinks](docs/Model/CustomerJsonApiRelationshipsDefaultShippingAddressLinks.md)
 - [CustomerJsonApiRelationshipsGroup](docs/Model/CustomerJsonApiRelationshipsGroup.md)
 - [CustomerJsonApiRelationshipsGroupData](docs/Model/CustomerJsonApiRelationshipsGroupData.md)
 - [CustomerJsonApiRelationshipsGroupLinks](docs/Model/CustomerJsonApiRelationshipsGroupLinks.md)
 - [CustomerJsonApiRelationshipsLanguage](docs/Model/CustomerJsonApiRelationshipsLanguage.md)
 - [CustomerJsonApiRelationshipsLanguageData](docs/Model/CustomerJsonApiRelationshipsLanguageData.md)
 - [CustomerJsonApiRelationshipsLanguageLinks](docs/Model/CustomerJsonApiRelationshipsLanguageLinks.md)
 - [CustomerJsonApiRelationshipsLastPaymentMethod](docs/Model/CustomerJsonApiRelationshipsLastPaymentMethod.md)
 - [CustomerJsonApiRelationshipsLastPaymentMethodData](docs/Model/CustomerJsonApiRelationshipsLastPaymentMethodData.md)
 - [CustomerJsonApiRelationshipsLastPaymentMethodLinks](docs/Model/CustomerJsonApiRelationshipsLastPaymentMethodLinks.md)
 - [CustomerJsonApiRelationshipsOrderCustomers](docs/Model/CustomerJsonApiRelationshipsOrderCustomers.md)
 - [CustomerJsonApiRelationshipsOrderCustomersData](docs/Model/CustomerJsonApiRelationshipsOrderCustomersData.md)
 - [CustomerJsonApiRelationshipsOrderCustomersLinks](docs/Model/CustomerJsonApiRelationshipsOrderCustomersLinks.md)
 - [CustomerJsonApiRelationshipsProductReviews](docs/Model/CustomerJsonApiRelationshipsProductReviews.md)
 - [CustomerJsonApiRelationshipsProductReviewsData](docs/Model/CustomerJsonApiRelationshipsProductReviewsData.md)
 - [CustomerJsonApiRelationshipsProductReviewsLinks](docs/Model/CustomerJsonApiRelationshipsProductReviewsLinks.md)
 - [CustomerJsonApiRelationshipsPromotions](docs/Model/CustomerJsonApiRelationshipsPromotions.md)
 - [CustomerJsonApiRelationshipsPromotionsData](docs/Model/CustomerJsonApiRelationshipsPromotionsData.md)
 - [CustomerJsonApiRelationshipsPromotionsLinks](docs/Model/CustomerJsonApiRelationshipsPromotionsLinks.md)
 - [CustomerJsonApiRelationshipsRecoveryCustomer](docs/Model/CustomerJsonApiRelationshipsRecoveryCustomer.md)
 - [CustomerJsonApiRelationshipsRecoveryCustomerData](docs/Model/CustomerJsonApiRelationshipsRecoveryCustomerData.md)
 - [CustomerJsonApiRelationshipsRecoveryCustomerLinks](docs/Model/CustomerJsonApiRelationshipsRecoveryCustomerLinks.md)
 - [CustomerJsonApiRelationshipsRequestedGroup](docs/Model/CustomerJsonApiRelationshipsRequestedGroup.md)
 - [CustomerJsonApiRelationshipsRequestedGroupData](docs/Model/CustomerJsonApiRelationshipsRequestedGroupData.md)
 - [CustomerJsonApiRelationshipsRequestedGroupLinks](docs/Model/CustomerJsonApiRelationshipsRequestedGroupLinks.md)
 - [CustomerJsonApiRelationshipsSalesChannel](docs/Model/CustomerJsonApiRelationshipsSalesChannel.md)
 - [CustomerJsonApiRelationshipsSalesChannelData](docs/Model/CustomerJsonApiRelationshipsSalesChannelData.md)
 - [CustomerJsonApiRelationshipsSalesChannelLinks](docs/Model/CustomerJsonApiRelationshipsSalesChannelLinks.md)
 - [CustomerJsonApiRelationshipsSalutation](docs/Model/CustomerJsonApiRelationshipsSalutation.md)
 - [CustomerJsonApiRelationshipsSalutationData](docs/Model/CustomerJsonApiRelationshipsSalutationData.md)
 - [CustomerJsonApiRelationshipsSalutationLinks](docs/Model/CustomerJsonApiRelationshipsSalutationLinks.md)
 - [CustomerJsonApiRelationshipsTags](docs/Model/CustomerJsonApiRelationshipsTags.md)
 - [CustomerJsonApiRelationshipsTagsData](docs/Model/CustomerJsonApiRelationshipsTagsData.md)
 - [CustomerJsonApiRelationshipsTagsLinks](docs/Model/CustomerJsonApiRelationshipsTagsLinks.md)
 - [CustomerJsonApiRelationshipsWishlists](docs/Model/CustomerJsonApiRelationshipsWishlists.md)
 - [CustomerJsonApiRelationshipsWishlistsData](docs/Model/CustomerJsonApiRelationshipsWishlistsData.md)
 - [CustomerJsonApiRelationshipsWishlistsLinks](docs/Model/CustomerJsonApiRelationshipsWishlistsLinks.md)
 - [CustomerRecovery](docs/Model/CustomerRecovery.md)
 - [CustomerRecoveryJsonApi](docs/Model/CustomerRecoveryJsonApi.md)
 - [CustomerRecoveryJsonApiRelationships](docs/Model/CustomerRecoveryJsonApiRelationships.md)
 - [CustomerRecoveryJsonApiRelationshipsCustomer](docs/Model/CustomerRecoveryJsonApiRelationshipsCustomer.md)
 - [CustomerRecoveryJsonApiRelationshipsCustomerData](docs/Model/CustomerRecoveryJsonApiRelationshipsCustomerData.md)
 - [CustomerRecoveryJsonApiRelationshipsCustomerLinks](docs/Model/CustomerRecoveryJsonApiRelationshipsCustomerLinks.md)
 - [CustomerTag](docs/Model/CustomerTag.md)
 - [CustomerWishlist](docs/Model/CustomerWishlist.md)
 - [CustomerWishlistJsonApi](docs/Model/CustomerWishlistJsonApi.md)
 - [CustomerWishlistJsonApiRelationships](docs/Model/CustomerWishlistJsonApiRelationships.md)
 - [CustomerWishlistJsonApiRelationshipsCustomer](docs/Model/CustomerWishlistJsonApiRelationshipsCustomer.md)
 - [CustomerWishlistJsonApiRelationshipsCustomerData](docs/Model/CustomerWishlistJsonApiRelationshipsCustomerData.md)
 - [CustomerWishlistJsonApiRelationshipsCustomerLinks](docs/Model/CustomerWishlistJsonApiRelationshipsCustomerLinks.md)
 - [CustomerWishlistJsonApiRelationshipsProducts](docs/Model/CustomerWishlistJsonApiRelationshipsProducts.md)
 - [CustomerWishlistJsonApiRelationshipsProductsData](docs/Model/CustomerWishlistJsonApiRelationshipsProductsData.md)
 - [CustomerWishlistJsonApiRelationshipsProductsLinks](docs/Model/CustomerWishlistJsonApiRelationshipsProductsLinks.md)
 - [CustomerWishlistJsonApiRelationshipsSalesChannel](docs/Model/CustomerWishlistJsonApiRelationshipsSalesChannel.md)
 - [CustomerWishlistJsonApiRelationshipsSalesChannelData](docs/Model/CustomerWishlistJsonApiRelationshipsSalesChannelData.md)
 - [CustomerWishlistJsonApiRelationshipsSalesChannelLinks](docs/Model/CustomerWishlistJsonApiRelationshipsSalesChannelLinks.md)
 - [CustomerWishlistProduct](docs/Model/CustomerWishlistProduct.md)
 - [CustomerWishlistProductJsonApi](docs/Model/CustomerWishlistProductJsonApi.md)
 - [CustomerWishlistProductJsonApiRelationships](docs/Model/CustomerWishlistProductJsonApiRelationships.md)
 - [CustomerWishlistProductJsonApiRelationshipsProduct](docs/Model/CustomerWishlistProductJsonApiRelationshipsProduct.md)
 - [CustomerWishlistProductJsonApiRelationshipsProductData](docs/Model/CustomerWishlistProductJsonApiRelationshipsProductData.md)
 - [CustomerWishlistProductJsonApiRelationshipsProductLinks](docs/Model/CustomerWishlistProductJsonApiRelationshipsProductLinks.md)
 - [CustomerWishlistProductJsonApiRelationshipsWishlist](docs/Model/CustomerWishlistProductJsonApiRelationshipsWishlist.md)
 - [CustomerWishlistProductJsonApiRelationshipsWishlistData](docs/Model/CustomerWishlistProductJsonApiRelationshipsWishlistData.md)
 - [CustomerWishlistProductJsonApiRelationshipsWishlistLinks](docs/Model/CustomerWishlistProductJsonApiRelationshipsWishlistLinks.md)
 - [CustomeraddressBody](docs/Model/CustomeraddressBody.md)
 - [CustomeraddressIdBody](docs/Model/CustomeraddressIdBody.md)
 - [CustomergroupBody](docs/Model/CustomergroupBody.md)
 - [CustomergroupIdBody](docs/Model/CustomergroupIdBody.md)
 - [CustomerrecoveryBody](docs/Model/CustomerrecoveryBody.md)
 - [CustomerrecoveryIdBody](docs/Model/CustomerrecoveryIdBody.md)
 - [CustomerwishlistBody](docs/Model/CustomerwishlistBody.md)
 - [CustomerwishlistIdBody](docs/Model/CustomerwishlistIdBody.md)
 - [CustomerwishlistproductBody](docs/Model/CustomerwishlistproductBody.md)
 - [CustomerwishlistproductIdBody](docs/Model/CustomerwishlistproductIdBody.md)
 - [CustomfieldBody](docs/Model/CustomfieldBody.md)
 - [CustomfieldIdBody](docs/Model/CustomfieldIdBody.md)
 - [CustomfieldsetBody](docs/Model/CustomfieldsetBody.md)
 - [CustomfieldsetIdBody](docs/Model/CustomfieldsetIdBody.md)
 - [CustomfieldsetrelationBody](docs/Model/CustomfieldsetrelationBody.md)
 - [CustomfieldsetrelationIdBody](docs/Model/CustomfieldsetrelationIdBody.md)
 - [Data](docs/Model/Data.md)
 - [DatabaseMigrateBody](docs/Model/DatabaseMigrateBody.md)
 - [DatabaseMigratedestructiveBody](docs/Model/DatabaseMigratedestructiveBody.md)
 - [DatabaseSyncmigrationBody](docs/Model/DatabaseSyncmigrationBody.md)
 - [DeadMessage](docs/Model/DeadMessage.md)
 - [DeadMessageJsonApi](docs/Model/DeadMessageJsonApi.md)
 - [DeadMessageJsonApiRelationships](docs/Model/DeadMessageJsonApiRelationships.md)
 - [DeadMessageJsonApiRelationshipsScheduledTask](docs/Model/DeadMessageJsonApiRelationshipsScheduledTask.md)
 - [DeadMessageJsonApiRelationshipsScheduledTaskData](docs/Model/DeadMessageJsonApiRelationshipsScheduledTaskData.md)
 - [DeadMessageJsonApiRelationshipsScheduledTaskLinks](docs/Model/DeadMessageJsonApiRelationshipsScheduledTaskLinks.md)
 - [DeadmessageBody](docs/Model/DeadmessageBody.md)
 - [DeadmessageIdBody](docs/Model/DeadmessageIdBody.md)
 - [DeliveryTime](docs/Model/DeliveryTime.md)
 - [DeliveryTimeJsonApi](docs/Model/DeliveryTimeJsonApi.md)
 - [DeliveryTimeJsonApiRelationships](docs/Model/DeliveryTimeJsonApiRelationships.md)
 - [DeliveryTimeJsonApiRelationshipsProducts](docs/Model/DeliveryTimeJsonApiRelationshipsProducts.md)
 - [DeliveryTimeJsonApiRelationshipsProductsData](docs/Model/DeliveryTimeJsonApiRelationshipsProductsData.md)
 - [DeliveryTimeJsonApiRelationshipsProductsLinks](docs/Model/DeliveryTimeJsonApiRelationshipsProductsLinks.md)
 - [DeliveryTimeJsonApiRelationshipsShippingMethods](docs/Model/DeliveryTimeJsonApiRelationshipsShippingMethods.md)
 - [DeliveryTimeJsonApiRelationshipsShippingMethodsData](docs/Model/DeliveryTimeJsonApiRelationshipsShippingMethodsData.md)
 - [DeliveryTimeJsonApiRelationshipsShippingMethodsLinks](docs/Model/DeliveryTimeJsonApiRelationshipsShippingMethodsLinks.md)
 - [DeliverytimeBody](docs/Model/DeliverytimeBody.md)
 - [DeliverytimeIdBody](docs/Model/DeliverytimeIdBody.md)
 - [DneCustomJsCss](docs/Model/DneCustomJsCss.md)
 - [DneCustomJsCssJsonApi](docs/Model/DneCustomJsCssJsonApi.md)
 - [DneCustomJsCssJsonApiRelationships](docs/Model/DneCustomJsCssJsonApiRelationships.md)
 - [DneCustomJsCssJsonApiRelationshipsSalesChannels](docs/Model/DneCustomJsCssJsonApiRelationshipsSalesChannels.md)
 - [DneCustomJsCssJsonApiRelationshipsSalesChannelsData](docs/Model/DneCustomJsCssJsonApiRelationshipsSalesChannelsData.md)
 - [DneCustomJsCssJsonApiRelationshipsSalesChannelsLinks](docs/Model/DneCustomJsCssJsonApiRelationshipsSalesChannelsLinks.md)
 - [DneCustomJsCssSalesChannel](docs/Model/DneCustomJsCssSalesChannel.md)
 - [DnecustomjscssBody](docs/Model/DnecustomjscssBody.md)
 - [DnecustomjscssIdBody](docs/Model/DnecustomjscssIdBody.md)
 - [Document](docs/Model/Document.md)
 - [DocumentBaseConfig](docs/Model/DocumentBaseConfig.md)
 - [DocumentBaseConfigJsonApi](docs/Model/DocumentBaseConfigJsonApi.md)
 - [DocumentBaseConfigJsonApiRelationships](docs/Model/DocumentBaseConfigJsonApiRelationships.md)
 - [DocumentBaseConfigJsonApiRelationshipsDocumentType](docs/Model/DocumentBaseConfigJsonApiRelationshipsDocumentType.md)
 - [DocumentBaseConfigJsonApiRelationshipsDocumentTypeData](docs/Model/DocumentBaseConfigJsonApiRelationshipsDocumentTypeData.md)
 - [DocumentBaseConfigJsonApiRelationshipsDocumentTypeLinks](docs/Model/DocumentBaseConfigJsonApiRelationshipsDocumentTypeLinks.md)
 - [DocumentBaseConfigJsonApiRelationshipsLogo](docs/Model/DocumentBaseConfigJsonApiRelationshipsLogo.md)
 - [DocumentBaseConfigJsonApiRelationshipsLogoData](docs/Model/DocumentBaseConfigJsonApiRelationshipsLogoData.md)
 - [DocumentBaseConfigJsonApiRelationshipsLogoLinks](docs/Model/DocumentBaseConfigJsonApiRelationshipsLogoLinks.md)
 - [DocumentBaseConfigJsonApiRelationshipsSalesChannels](docs/Model/DocumentBaseConfigJsonApiRelationshipsSalesChannels.md)
 - [DocumentBaseConfigJsonApiRelationshipsSalesChannelsData](docs/Model/DocumentBaseConfigJsonApiRelationshipsSalesChannelsData.md)
 - [DocumentBaseConfigJsonApiRelationshipsSalesChannelsLinks](docs/Model/DocumentBaseConfigJsonApiRelationshipsSalesChannelsLinks.md)
 - [DocumentBaseConfigSalesChannel](docs/Model/DocumentBaseConfigSalesChannel.md)
 - [DocumentBaseConfigSalesChannelJsonApi](docs/Model/DocumentBaseConfigSalesChannelJsonApi.md)
 - [DocumentBaseConfigSalesChannelJsonApiRelationships](docs/Model/DocumentBaseConfigSalesChannelJsonApiRelationships.md)
 - [DocumentBaseConfigSalesChannelJsonApiRelationshipsDocumentBaseConfig](docs/Model/DocumentBaseConfigSalesChannelJsonApiRelationshipsDocumentBaseConfig.md)
 - [DocumentBaseConfigSalesChannelJsonApiRelationshipsDocumentBaseConfigData](docs/Model/DocumentBaseConfigSalesChannelJsonApiRelationshipsDocumentBaseConfigData.md)
 - [DocumentBaseConfigSalesChannelJsonApiRelationshipsDocumentBaseConfigLinks](docs/Model/DocumentBaseConfigSalesChannelJsonApiRelationshipsDocumentBaseConfigLinks.md)
 - [DocumentBaseConfigSalesChannelJsonApiRelationshipsDocumentType](docs/Model/DocumentBaseConfigSalesChannelJsonApiRelationshipsDocumentType.md)
 - [DocumentBaseConfigSalesChannelJsonApiRelationshipsDocumentTypeData](docs/Model/DocumentBaseConfigSalesChannelJsonApiRelationshipsDocumentTypeData.md)
 - [DocumentBaseConfigSalesChannelJsonApiRelationshipsDocumentTypeLinks](docs/Model/DocumentBaseConfigSalesChannelJsonApiRelationshipsDocumentTypeLinks.md)
 - [DocumentBaseConfigSalesChannelJsonApiRelationshipsSalesChannel](docs/Model/DocumentBaseConfigSalesChannelJsonApiRelationshipsSalesChannel.md)
 - [DocumentBaseConfigSalesChannelJsonApiRelationshipsSalesChannelData](docs/Model/DocumentBaseConfigSalesChannelJsonApiRelationshipsSalesChannelData.md)
 - [DocumentBaseConfigSalesChannelJsonApiRelationshipsSalesChannelLinks](docs/Model/DocumentBaseConfigSalesChannelJsonApiRelationshipsSalesChannelLinks.md)
 - [DocumentBody](docs/Model/DocumentBody.md)
 - [DocumentDocumentTypeNameBody](docs/Model/DocumentDocumentTypeNameBody.md)
 - [DocumentIdBody](docs/Model/DocumentIdBody.md)
 - [DocumentIdUploadBody](docs/Model/DocumentIdUploadBody.md)
 - [DocumentJsonApi](docs/Model/DocumentJsonApi.md)
 - [DocumentJsonApiRelationships](docs/Model/DocumentJsonApiRelationships.md)
 - [DocumentJsonApiRelationshipsDependentDocuments](docs/Model/DocumentJsonApiRelationshipsDependentDocuments.md)
 - [DocumentJsonApiRelationshipsDependentDocumentsData](docs/Model/DocumentJsonApiRelationshipsDependentDocumentsData.md)
 - [DocumentJsonApiRelationshipsDependentDocumentsLinks](docs/Model/DocumentJsonApiRelationshipsDependentDocumentsLinks.md)
 - [DocumentJsonApiRelationshipsDocumentMediaFile](docs/Model/DocumentJsonApiRelationshipsDocumentMediaFile.md)
 - [DocumentJsonApiRelationshipsDocumentMediaFileData](docs/Model/DocumentJsonApiRelationshipsDocumentMediaFileData.md)
 - [DocumentJsonApiRelationshipsDocumentMediaFileLinks](docs/Model/DocumentJsonApiRelationshipsDocumentMediaFileLinks.md)
 - [DocumentJsonApiRelationshipsDocumentType](docs/Model/DocumentJsonApiRelationshipsDocumentType.md)
 - [DocumentJsonApiRelationshipsDocumentTypeData](docs/Model/DocumentJsonApiRelationshipsDocumentTypeData.md)
 - [DocumentJsonApiRelationshipsDocumentTypeLinks](docs/Model/DocumentJsonApiRelationshipsDocumentTypeLinks.md)
 - [DocumentJsonApiRelationshipsOrder](docs/Model/DocumentJsonApiRelationshipsOrder.md)
 - [DocumentJsonApiRelationshipsOrderData](docs/Model/DocumentJsonApiRelationshipsOrderData.md)
 - [DocumentJsonApiRelationshipsOrderLinks](docs/Model/DocumentJsonApiRelationshipsOrderLinks.md)
 - [DocumentJsonApiRelationshipsReferencedDocument](docs/Model/DocumentJsonApiRelationshipsReferencedDocument.md)
 - [DocumentJsonApiRelationshipsReferencedDocumentData](docs/Model/DocumentJsonApiRelationshipsReferencedDocumentData.md)
 - [DocumentJsonApiRelationshipsReferencedDocumentLinks](docs/Model/DocumentJsonApiRelationshipsReferencedDocumentLinks.md)
 - [DocumentType](docs/Model/DocumentType.md)
 - [DocumentTypeJsonApi](docs/Model/DocumentTypeJsonApi.md)
 - [DocumentTypeJsonApiRelationships](docs/Model/DocumentTypeJsonApiRelationships.md)
 - [DocumentTypeJsonApiRelationshipsDocumentBaseConfigSalesChannels](docs/Model/DocumentTypeJsonApiRelationshipsDocumentBaseConfigSalesChannels.md)
 - [DocumentTypeJsonApiRelationshipsDocumentBaseConfigSalesChannelsData](docs/Model/DocumentTypeJsonApiRelationshipsDocumentBaseConfigSalesChannelsData.md)
 - [DocumentTypeJsonApiRelationshipsDocumentBaseConfigSalesChannelsLinks](docs/Model/DocumentTypeJsonApiRelationshipsDocumentBaseConfigSalesChannelsLinks.md)
 - [DocumentTypeJsonApiRelationshipsDocumentBaseConfigs](docs/Model/DocumentTypeJsonApiRelationshipsDocumentBaseConfigs.md)
 - [DocumentTypeJsonApiRelationshipsDocumentBaseConfigsData](docs/Model/DocumentTypeJsonApiRelationshipsDocumentBaseConfigsData.md)
 - [DocumentTypeJsonApiRelationshipsDocumentBaseConfigsLinks](docs/Model/DocumentTypeJsonApiRelationshipsDocumentBaseConfigsLinks.md)
 - [DocumentTypeJsonApiRelationshipsDocuments](docs/Model/DocumentTypeJsonApiRelationshipsDocuments.md)
 - [DocumentTypeJsonApiRelationshipsDocumentsData](docs/Model/DocumentTypeJsonApiRelationshipsDocumentsData.md)
 - [DocumentTypeJsonApiRelationshipsDocumentsLinks](docs/Model/DocumentTypeJsonApiRelationshipsDocumentsLinks.md)
 - [DocumentbaseconfigBody](docs/Model/DocumentbaseconfigBody.md)
 - [DocumentbaseconfigIdBody](docs/Model/DocumentbaseconfigIdBody.md)
 - [DocumentbaseconfigsaleschannelBody](docs/Model/DocumentbaseconfigsaleschannelBody.md)
 - [DocumentbaseconfigsaleschannelIdBody](docs/Model/DocumentbaseconfigsaleschannelIdBody.md)
 - [DocumenttypeBody](docs/Model/DocumenttypeBody.md)
 - [DocumenttypeIdBody](docs/Model/DocumenttypeIdBody.md)
 - [DreiscSeoBulk](docs/Model/DreiscSeoBulk.md)
 - [DreiscSeoBulkJsonApi](docs/Model/DreiscSeoBulkJsonApi.md)
 - [DreiscSeoBulkJsonApiRelationships](docs/Model/DreiscSeoBulkJsonApiRelationships.md)
 - [DreiscSeoBulkJsonApiRelationshipsCategory](docs/Model/DreiscSeoBulkJsonApiRelationshipsCategory.md)
 - [DreiscSeoBulkJsonApiRelationshipsCategoryData](docs/Model/DreiscSeoBulkJsonApiRelationshipsCategoryData.md)
 - [DreiscSeoBulkJsonApiRelationshipsCategoryLinks](docs/Model/DreiscSeoBulkJsonApiRelationshipsCategoryLinks.md)
 - [DreiscSeoBulkJsonApiRelationshipsDreiscSeoBulkTemplate](docs/Model/DreiscSeoBulkJsonApiRelationshipsDreiscSeoBulkTemplate.md)
 - [DreiscSeoBulkJsonApiRelationshipsDreiscSeoBulkTemplateData](docs/Model/DreiscSeoBulkJsonApiRelationshipsDreiscSeoBulkTemplateData.md)
 - [DreiscSeoBulkJsonApiRelationshipsDreiscSeoBulkTemplateLinks](docs/Model/DreiscSeoBulkJsonApiRelationshipsDreiscSeoBulkTemplateLinks.md)
 - [DreiscSeoBulkJsonApiRelationshipsLanguage](docs/Model/DreiscSeoBulkJsonApiRelationshipsLanguage.md)
 - [DreiscSeoBulkJsonApiRelationshipsLanguageData](docs/Model/DreiscSeoBulkJsonApiRelationshipsLanguageData.md)
 - [DreiscSeoBulkJsonApiRelationshipsLanguageLinks](docs/Model/DreiscSeoBulkJsonApiRelationshipsLanguageLinks.md)
 - [DreiscSeoBulkJsonApiRelationshipsSalesChannel](docs/Model/DreiscSeoBulkJsonApiRelationshipsSalesChannel.md)
 - [DreiscSeoBulkJsonApiRelationshipsSalesChannelData](docs/Model/DreiscSeoBulkJsonApiRelationshipsSalesChannelData.md)
 - [DreiscSeoBulkJsonApiRelationshipsSalesChannelLinks](docs/Model/DreiscSeoBulkJsonApiRelationshipsSalesChannelLinks.md)
 - [DreiscSeoBulkTemplate](docs/Model/DreiscSeoBulkTemplate.md)
 - [DreiscSeoBulkTemplateJsonApi](docs/Model/DreiscSeoBulkTemplateJsonApi.md)
 - [DreiscSeoBulkTemplateJsonApiRelationships](docs/Model/DreiscSeoBulkTemplateJsonApiRelationships.md)
 - [DreiscSeoBulkTemplateJsonApiRelationshipsDreiscSeoBulks](docs/Model/DreiscSeoBulkTemplateJsonApiRelationshipsDreiscSeoBulks.md)
 - [DreiscSeoBulkTemplateJsonApiRelationshipsDreiscSeoBulksData](docs/Model/DreiscSeoBulkTemplateJsonApiRelationshipsDreiscSeoBulksData.md)
 - [DreiscSeoBulkTemplateJsonApiRelationshipsDreiscSeoBulksLinks](docs/Model/DreiscSeoBulkTemplateJsonApiRelationshipsDreiscSeoBulksLinks.md)
 - [DreiscSeoRedirect](docs/Model/DreiscSeoRedirect.md)
 - [DreiscSeoRedirectImportExportFile](docs/Model/DreiscSeoRedirectImportExportFile.md)
 - [DreiscSeoRedirectImportExportFileJsonApi](docs/Model/DreiscSeoRedirectImportExportFileJsonApi.md)
 - [DreiscSeoRedirectImportExportLog](docs/Model/DreiscSeoRedirectImportExportLog.md)
 - [DreiscSeoRedirectImportExportLogJsonApi](docs/Model/DreiscSeoRedirectImportExportLogJsonApi.md)
 - [DreiscSeoRedirectImportExportLogJsonApiRelationships](docs/Model/DreiscSeoRedirectImportExportLogJsonApiRelationships.md)
 - [DreiscSeoRedirectImportExportLogJsonApiRelationshipsDreiscSeoRedirect](docs/Model/DreiscSeoRedirectImportExportLogJsonApiRelationshipsDreiscSeoRedirect.md)
 - [DreiscSeoRedirectImportExportLogJsonApiRelationshipsDreiscSeoRedirectData](docs/Model/DreiscSeoRedirectImportExportLogJsonApiRelationshipsDreiscSeoRedirectData.md)
 - [DreiscSeoRedirectImportExportLogJsonApiRelationshipsDreiscSeoRedirectLinks](docs/Model/DreiscSeoRedirectImportExportLogJsonApiRelationshipsDreiscSeoRedirectLinks.md)
 - [DreiscSeoRedirectJsonApi](docs/Model/DreiscSeoRedirectJsonApi.md)
 - [DreiscSeoRedirectJsonApiRelationships](docs/Model/DreiscSeoRedirectJsonApiRelationships.md)
 - [DreiscSeoRedirectJsonApiRelationshipsDeviatingRedirectSalesChannelDomain](docs/Model/DreiscSeoRedirectJsonApiRelationshipsDeviatingRedirectSalesChannelDomain.md)
 - [DreiscSeoRedirectJsonApiRelationshipsDeviatingRedirectSalesChannelDomainData](docs/Model/DreiscSeoRedirectJsonApiRelationshipsDeviatingRedirectSalesChannelDomainData.md)
 - [DreiscSeoRedirectJsonApiRelationshipsDeviatingRedirectSalesChannelDomainLinks](docs/Model/DreiscSeoRedirectJsonApiRelationshipsDeviatingRedirectSalesChannelDomainLinks.md)
 - [DreiscSeoRedirectJsonApiRelationshipsRedirectCategory](docs/Model/DreiscSeoRedirectJsonApiRelationshipsRedirectCategory.md)
 - [DreiscSeoRedirectJsonApiRelationshipsRedirectCategoryData](docs/Model/DreiscSeoRedirectJsonApiRelationshipsRedirectCategoryData.md)
 - [DreiscSeoRedirectJsonApiRelationshipsRedirectCategoryLinks](docs/Model/DreiscSeoRedirectJsonApiRelationshipsRedirectCategoryLinks.md)
 - [DreiscSeoRedirectJsonApiRelationshipsRedirectProduct](docs/Model/DreiscSeoRedirectJsonApiRelationshipsRedirectProduct.md)
 - [DreiscSeoRedirectJsonApiRelationshipsRedirectProductData](docs/Model/DreiscSeoRedirectJsonApiRelationshipsRedirectProductData.md)
 - [DreiscSeoRedirectJsonApiRelationshipsRedirectProductLinks](docs/Model/DreiscSeoRedirectJsonApiRelationshipsRedirectProductLinks.md)
 - [DreiscSeoRedirectJsonApiRelationshipsRedirectSalesChannelDomain](docs/Model/DreiscSeoRedirectJsonApiRelationshipsRedirectSalesChannelDomain.md)
 - [DreiscSeoRedirectJsonApiRelationshipsRedirectSalesChannelDomainData](docs/Model/DreiscSeoRedirectJsonApiRelationshipsRedirectSalesChannelDomainData.md)
 - [DreiscSeoRedirectJsonApiRelationshipsRedirectSalesChannelDomainLinks](docs/Model/DreiscSeoRedirectJsonApiRelationshipsRedirectSalesChannelDomainLinks.md)
 - [DreiscSeoRedirectJsonApiRelationshipsSourceCategory](docs/Model/DreiscSeoRedirectJsonApiRelationshipsSourceCategory.md)
 - [DreiscSeoRedirectJsonApiRelationshipsSourceCategoryData](docs/Model/DreiscSeoRedirectJsonApiRelationshipsSourceCategoryData.md)
 - [DreiscSeoRedirectJsonApiRelationshipsSourceCategoryLinks](docs/Model/DreiscSeoRedirectJsonApiRelationshipsSourceCategoryLinks.md)
 - [DreiscSeoRedirectJsonApiRelationshipsSourceProduct](docs/Model/DreiscSeoRedirectJsonApiRelationshipsSourceProduct.md)
 - [DreiscSeoRedirectJsonApiRelationshipsSourceProductData](docs/Model/DreiscSeoRedirectJsonApiRelationshipsSourceProductData.md)
 - [DreiscSeoRedirectJsonApiRelationshipsSourceProductLinks](docs/Model/DreiscSeoRedirectJsonApiRelationshipsSourceProductLinks.md)
 - [DreiscSeoRedirectJsonApiRelationshipsSourceSalesChannelDomain](docs/Model/DreiscSeoRedirectJsonApiRelationshipsSourceSalesChannelDomain.md)
 - [DreiscSeoRedirectJsonApiRelationshipsSourceSalesChannelDomainData](docs/Model/DreiscSeoRedirectJsonApiRelationshipsSourceSalesChannelDomainData.md)
 - [DreiscSeoRedirectJsonApiRelationshipsSourceSalesChannelDomainLinks](docs/Model/DreiscSeoRedirectJsonApiRelationshipsSourceSalesChannelDomainLinks.md)
 - [DreiscSeoSetting](docs/Model/DreiscSeoSetting.md)
 - [DreiscSeoSettingJsonApi](docs/Model/DreiscSeoSettingJsonApi.md)
 - [DreiscSeoSettingJsonApiRelationships](docs/Model/DreiscSeoSettingJsonApiRelationships.md)
 - [DreiscSeoSettingJsonApiRelationshipsSalesChannel](docs/Model/DreiscSeoSettingJsonApiRelationshipsSalesChannel.md)
 - [DreiscSeoSettingJsonApiRelationshipsSalesChannelData](docs/Model/DreiscSeoSettingJsonApiRelationshipsSalesChannelData.md)
 - [DreiscSeoSettingJsonApiRelationshipsSalesChannelLinks](docs/Model/DreiscSeoSettingJsonApiRelationshipsSalesChannelLinks.md)
 - [DreiscseobulkBody](docs/Model/DreiscseobulkBody.md)
 - [DreiscseobulkIdBody](docs/Model/DreiscseobulkIdBody.md)
 - [DreiscseobulktemplateBody](docs/Model/DreiscseobulktemplateBody.md)
 - [DreiscseobulktemplateIdBody](docs/Model/DreiscseobulktemplateIdBody.md)
 - [DreiscseoredirectBody](docs/Model/DreiscseoredirectBody.md)
 - [DreiscseoredirectIdBody](docs/Model/DreiscseoredirectIdBody.md)
 - [DreiscseoredirectimportexportfileBody](docs/Model/DreiscseoredirectimportexportfileBody.md)
 - [DreiscseoredirectimportexportfileIdBody](docs/Model/DreiscseoredirectimportexportfileIdBody.md)
 - [DreiscseoredirectimportexportlogBody](docs/Model/DreiscseoredirectimportexportlogBody.md)
 - [DreiscseoredirectimportexportlogIdBody](docs/Model/DreiscseoredirectimportexportlogIdBody.md)
 - [DreiscseosettingBody](docs/Model/DreiscseosettingBody.md)
 - [DreiscseosettingIdBody](docs/Model/DreiscseosettingIdBody.md)
 - [Error](docs/Model/Error.md)
 - [ErrorSource](docs/Model/ErrorSource.md)
 - [EventAction](docs/Model/EventAction.md)
 - [EventActionJsonApi](docs/Model/EventActionJsonApi.md)
 - [EventActionJsonApiRelationships](docs/Model/EventActionJsonApiRelationships.md)
 - [EventActionJsonApiRelationshipsRules](docs/Model/EventActionJsonApiRelationshipsRules.md)
 - [EventActionJsonApiRelationshipsRulesData](docs/Model/EventActionJsonApiRelationshipsRulesData.md)
 - [EventActionJsonApiRelationshipsRulesLinks](docs/Model/EventActionJsonApiRelationshipsRulesLinks.md)
 - [EventActionJsonApiRelationshipsSalesChannels](docs/Model/EventActionJsonApiRelationshipsSalesChannels.md)
 - [EventActionJsonApiRelationshipsSalesChannelsData](docs/Model/EventActionJsonApiRelationshipsSalesChannelsData.md)
 - [EventActionJsonApiRelationshipsSalesChannelsLinks](docs/Model/EventActionJsonApiRelationshipsSalesChannelsLinks.md)
 - [EventActionRule](docs/Model/EventActionRule.md)
 - [EventActionSalesChannel](docs/Model/EventActionSalesChannel.md)
 - [EventactionBody](docs/Model/EventactionBody.md)
 - [EventactionIdBody](docs/Model/EventactionIdBody.md)
 - [Failure](docs/Model/Failure.md)
 - [Flow](docs/Model/Flow.md)
 - [FlowBody](docs/Model/FlowBody.md)
 - [FlowBulderActionsResponse](docs/Model/FlowBulderActionsResponse.md)
 - [FlowBulderActionsResponseInner](docs/Model/FlowBulderActionsResponseInner.md)
 - [FlowIdBody](docs/Model/FlowIdBody.md)
 - [FlowJsonApi](docs/Model/FlowJsonApi.md)
 - [FlowJsonApiRelationships](docs/Model/FlowJsonApiRelationships.md)
 - [FlowJsonApiRelationshipsSequences](docs/Model/FlowJsonApiRelationshipsSequences.md)
 - [FlowJsonApiRelationshipsSequencesData](docs/Model/FlowJsonApiRelationshipsSequencesData.md)
 - [FlowJsonApiRelationshipsSequencesLinks](docs/Model/FlowJsonApiRelationshipsSequencesLinks.md)
 - [FlowSequence](docs/Model/FlowSequence.md)
 - [FlowSequenceJsonApi](docs/Model/FlowSequenceJsonApi.md)
 - [FlowSequenceJsonApiRelationships](docs/Model/FlowSequenceJsonApiRelationships.md)
 - [FlowSequenceJsonApiRelationshipsChildren](docs/Model/FlowSequenceJsonApiRelationshipsChildren.md)
 - [FlowSequenceJsonApiRelationshipsChildrenData](docs/Model/FlowSequenceJsonApiRelationshipsChildrenData.md)
 - [FlowSequenceJsonApiRelationshipsChildrenLinks](docs/Model/FlowSequenceJsonApiRelationshipsChildrenLinks.md)
 - [FlowSequenceJsonApiRelationshipsFlow](docs/Model/FlowSequenceJsonApiRelationshipsFlow.md)
 - [FlowSequenceJsonApiRelationshipsFlowData](docs/Model/FlowSequenceJsonApiRelationshipsFlowData.md)
 - [FlowSequenceJsonApiRelationshipsFlowLinks](docs/Model/FlowSequenceJsonApiRelationshipsFlowLinks.md)
 - [FlowSequenceJsonApiRelationshipsParent](docs/Model/FlowSequenceJsonApiRelationshipsParent.md)
 - [FlowSequenceJsonApiRelationshipsParentData](docs/Model/FlowSequenceJsonApiRelationshipsParentData.md)
 - [FlowSequenceJsonApiRelationshipsParentLinks](docs/Model/FlowSequenceJsonApiRelationshipsParentLinks.md)
 - [FlowSequenceJsonApiRelationshipsRule](docs/Model/FlowSequenceJsonApiRelationshipsRule.md)
 - [FlowSequenceJsonApiRelationshipsRuleData](docs/Model/FlowSequenceJsonApiRelationshipsRuleData.md)
 - [FlowSequenceJsonApiRelationshipsRuleLinks](docs/Model/FlowSequenceJsonApiRelationshipsRuleLinks.md)
 - [FlowsequenceBody](docs/Model/FlowsequenceBody.md)
 - [FlowsequenceIdBody](docs/Model/FlowsequenceIdBody.md)
 - [ImportExportFile](docs/Model/ImportExportFile.md)
 - [ImportExportFileJsonApi](docs/Model/ImportExportFileJsonApi.md)
 - [ImportExportFileJsonApiRelationships](docs/Model/ImportExportFileJsonApiRelationships.md)
 - [ImportExportFileJsonApiRelationshipsLog](docs/Model/ImportExportFileJsonApiRelationshipsLog.md)
 - [ImportExportFileJsonApiRelationshipsLogData](docs/Model/ImportExportFileJsonApiRelationshipsLogData.md)
 - [ImportExportFileJsonApiRelationshipsLogLinks](docs/Model/ImportExportFileJsonApiRelationshipsLogLinks.md)
 - [ImportExportLog](docs/Model/ImportExportLog.md)
 - [ImportExportLogJsonApi](docs/Model/ImportExportLogJsonApi.md)
 - [ImportExportLogJsonApiRelationships](docs/Model/ImportExportLogJsonApiRelationships.md)
 - [ImportExportLogJsonApiRelationshipsFailedImportLog](docs/Model/ImportExportLogJsonApiRelationshipsFailedImportLog.md)
 - [ImportExportLogJsonApiRelationshipsFailedImportLogData](docs/Model/ImportExportLogJsonApiRelationshipsFailedImportLogData.md)
 - [ImportExportLogJsonApiRelationshipsFailedImportLogLinks](docs/Model/ImportExportLogJsonApiRelationshipsFailedImportLogLinks.md)
 - [ImportExportLogJsonApiRelationshipsFile](docs/Model/ImportExportLogJsonApiRelationshipsFile.md)
 - [ImportExportLogJsonApiRelationshipsFileData](docs/Model/ImportExportLogJsonApiRelationshipsFileData.md)
 - [ImportExportLogJsonApiRelationshipsFileLinks](docs/Model/ImportExportLogJsonApiRelationshipsFileLinks.md)
 - [ImportExportLogJsonApiRelationshipsInvalidRecordsLog](docs/Model/ImportExportLogJsonApiRelationshipsInvalidRecordsLog.md)
 - [ImportExportLogJsonApiRelationshipsInvalidRecordsLogData](docs/Model/ImportExportLogJsonApiRelationshipsInvalidRecordsLogData.md)
 - [ImportExportLogJsonApiRelationshipsInvalidRecordsLogLinks](docs/Model/ImportExportLogJsonApiRelationshipsInvalidRecordsLogLinks.md)
 - [ImportExportLogJsonApiRelationshipsProfile](docs/Model/ImportExportLogJsonApiRelationshipsProfile.md)
 - [ImportExportLogJsonApiRelationshipsProfileData](docs/Model/ImportExportLogJsonApiRelationshipsProfileData.md)
 - [ImportExportLogJsonApiRelationshipsProfileLinks](docs/Model/ImportExportLogJsonApiRelationshipsProfileLinks.md)
 - [ImportExportLogJsonApiRelationshipsUser](docs/Model/ImportExportLogJsonApiRelationshipsUser.md)
 - [ImportExportLogJsonApiRelationshipsUserData](docs/Model/ImportExportLogJsonApiRelationshipsUserData.md)
 - [ImportExportLogJsonApiRelationshipsUserLinks](docs/Model/ImportExportLogJsonApiRelationshipsUserLinks.md)
 - [ImportExportProfile](docs/Model/ImportExportProfile.md)
 - [ImportExportProfileJsonApi](docs/Model/ImportExportProfileJsonApi.md)
 - [ImportExportProfileJsonApiRelationships](docs/Model/ImportExportProfileJsonApiRelationships.md)
 - [ImportExportProfileJsonApiRelationshipsImportExportLogs](docs/Model/ImportExportProfileJsonApiRelationshipsImportExportLogs.md)
 - [ImportExportProfileJsonApiRelationshipsImportExportLogsData](docs/Model/ImportExportProfileJsonApiRelationshipsImportExportLogsData.md)
 - [ImportExportProfileJsonApiRelationshipsImportExportLogsLinks](docs/Model/ImportExportProfileJsonApiRelationshipsImportExportLogsLinks.md)
 - [ImportexportfileBody](docs/Model/ImportexportfileBody.md)
 - [ImportexportfileIdBody](docs/Model/ImportexportfileIdBody.md)
 - [ImportexportlogBody](docs/Model/ImportexportlogBody.md)
 - [ImportexportlogIdBody](docs/Model/ImportexportlogIdBody.md)
 - [ImportexportprofileBody](docs/Model/ImportexportprofileBody.md)
 - [ImportexportprofileIdBody](docs/Model/ImportexportprofileIdBody.md)
 - [IndexingIndexerBody](docs/Model/IndexingIndexerBody.md)
 - [Info](docs/Model/Info.md)
 - [InfoConfigResponse](docs/Model/InfoConfigResponse.md)
 - [InfoConfigResponseAdminWorker](docs/Model/InfoConfigResponseAdminWorker.md)
 - [InfoConfigResponseBundles](docs/Model/InfoConfigResponseBundles.md)
 - [InfoConfigResponseSettings](docs/Model/InfoConfigResponseSettings.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse200100](docs/Model/InlineResponse200100.md)
 - [InlineResponse200101](docs/Model/InlineResponse200101.md)
 - [InlineResponse200102](docs/Model/InlineResponse200102.md)
 - [InlineResponse200103](docs/Model/InlineResponse200103.md)
 - [InlineResponse200104](docs/Model/InlineResponse200104.md)
 - [InlineResponse200105](docs/Model/InlineResponse200105.md)
 - [InlineResponse200106](docs/Model/InlineResponse200106.md)
 - [InlineResponse200107](docs/Model/InlineResponse200107.md)
 - [InlineResponse200108](docs/Model/InlineResponse200108.md)
 - [InlineResponse200109](docs/Model/InlineResponse200109.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse200110](docs/Model/InlineResponse200110.md)
 - [InlineResponse200111](docs/Model/InlineResponse200111.md)
 - [InlineResponse200112](docs/Model/InlineResponse200112.md)
 - [InlineResponse200113](docs/Model/InlineResponse200113.md)
 - [InlineResponse200114](docs/Model/InlineResponse200114.md)
 - [InlineResponse200115](docs/Model/InlineResponse200115.md)
 - [InlineResponse200116](docs/Model/InlineResponse200116.md)
 - [InlineResponse200117](docs/Model/InlineResponse200117.md)
 - [InlineResponse200118](docs/Model/InlineResponse200118.md)
 - [InlineResponse200119](docs/Model/InlineResponse200119.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse200120](docs/Model/InlineResponse200120.md)
 - [InlineResponse200121](docs/Model/InlineResponse200121.md)
 - [InlineResponse200122](docs/Model/InlineResponse200122.md)
 - [InlineResponse200123](docs/Model/InlineResponse200123.md)
 - [InlineResponse200124](docs/Model/InlineResponse200124.md)
 - [InlineResponse200125](docs/Model/InlineResponse200125.md)
 - [InlineResponse200126](docs/Model/InlineResponse200126.md)
 - [InlineResponse200127](docs/Model/InlineResponse200127.md)
 - [InlineResponse200128](docs/Model/InlineResponse200128.md)
 - [InlineResponse200129](docs/Model/InlineResponse200129.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse200130](docs/Model/InlineResponse200130.md)
 - [InlineResponse200131](docs/Model/InlineResponse200131.md)
 - [InlineResponse200132](docs/Model/InlineResponse200132.md)
 - [InlineResponse200133](docs/Model/InlineResponse200133.md)
 - [InlineResponse200134](docs/Model/InlineResponse200134.md)
 - [InlineResponse200135](docs/Model/InlineResponse200135.md)
 - [InlineResponse200136](docs/Model/InlineResponse200136.md)
 - [InlineResponse200137](docs/Model/InlineResponse200137.md)
 - [InlineResponse200138](docs/Model/InlineResponse200138.md)
 - [InlineResponse200139](docs/Model/InlineResponse200139.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse200140](docs/Model/InlineResponse200140.md)
 - [InlineResponse200141](docs/Model/InlineResponse200141.md)
 - [InlineResponse200142](docs/Model/InlineResponse200142.md)
 - [InlineResponse200143](docs/Model/InlineResponse200143.md)
 - [InlineResponse200144](docs/Model/InlineResponse200144.md)
 - [InlineResponse200145](docs/Model/InlineResponse200145.md)
 - [InlineResponse200146](docs/Model/InlineResponse200146.md)
 - [InlineResponse200147](docs/Model/InlineResponse200147.md)
 - [InlineResponse200148](docs/Model/InlineResponse200148.md)
 - [InlineResponse200149](docs/Model/InlineResponse200149.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse200150](docs/Model/InlineResponse200150.md)
 - [InlineResponse200151](docs/Model/InlineResponse200151.md)
 - [InlineResponse200152](docs/Model/InlineResponse200152.md)
 - [InlineResponse200153](docs/Model/InlineResponse200153.md)
 - [InlineResponse200154](docs/Model/InlineResponse200154.md)
 - [InlineResponse200155](docs/Model/InlineResponse200155.md)
 - [InlineResponse200156](docs/Model/InlineResponse200156.md)
 - [InlineResponse200157](docs/Model/InlineResponse200157.md)
 - [InlineResponse200158](docs/Model/InlineResponse200158.md)
 - [InlineResponse200159](docs/Model/InlineResponse200159.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse200160](docs/Model/InlineResponse200160.md)
 - [InlineResponse200161](docs/Model/InlineResponse200161.md)
 - [InlineResponse200162](docs/Model/InlineResponse200162.md)
 - [InlineResponse200163](docs/Model/InlineResponse200163.md)
 - [InlineResponse200164](docs/Model/InlineResponse200164.md)
 - [InlineResponse200165](docs/Model/InlineResponse200165.md)
 - [InlineResponse200166](docs/Model/InlineResponse200166.md)
 - [InlineResponse200167](docs/Model/InlineResponse200167.md)
 - [InlineResponse200168](docs/Model/InlineResponse200168.md)
 - [InlineResponse200169](docs/Model/InlineResponse200169.md)
 - [InlineResponse20017](docs/Model/InlineResponse20017.md)
 - [InlineResponse200170](docs/Model/InlineResponse200170.md)
 - [InlineResponse200171](docs/Model/InlineResponse200171.md)
 - [InlineResponse200172](docs/Model/InlineResponse200172.md)
 - [InlineResponse200173](docs/Model/InlineResponse200173.md)
 - [InlineResponse200174](docs/Model/InlineResponse200174.md)
 - [InlineResponse200175](docs/Model/InlineResponse200175.md)
 - [InlineResponse200176](docs/Model/InlineResponse200176.md)
 - [InlineResponse200177](docs/Model/InlineResponse200177.md)
 - [InlineResponse200178](docs/Model/InlineResponse200178.md)
 - [InlineResponse200179](docs/Model/InlineResponse200179.md)
 - [InlineResponse20018](docs/Model/InlineResponse20018.md)
 - [InlineResponse200180](docs/Model/InlineResponse200180.md)
 - [InlineResponse200181](docs/Model/InlineResponse200181.md)
 - [InlineResponse200182](docs/Model/InlineResponse200182.md)
 - [InlineResponse200183](docs/Model/InlineResponse200183.md)
 - [InlineResponse200184](docs/Model/InlineResponse200184.md)
 - [InlineResponse200185](docs/Model/InlineResponse200185.md)
 - [InlineResponse200186](docs/Model/InlineResponse200186.md)
 - [InlineResponse200187](docs/Model/InlineResponse200187.md)
 - [InlineResponse200188](docs/Model/InlineResponse200188.md)
 - [InlineResponse200189](docs/Model/InlineResponse200189.md)
 - [InlineResponse20019](docs/Model/InlineResponse20019.md)
 - [InlineResponse200190](docs/Model/InlineResponse200190.md)
 - [InlineResponse200191](docs/Model/InlineResponse200191.md)
 - [InlineResponse200192](docs/Model/InlineResponse200192.md)
 - [InlineResponse200193](docs/Model/InlineResponse200193.md)
 - [InlineResponse200194](docs/Model/InlineResponse200194.md)
 - [InlineResponse200195](docs/Model/InlineResponse200195.md)
 - [InlineResponse200196](docs/Model/InlineResponse200196.md)
 - [InlineResponse200197](docs/Model/InlineResponse200197.md)
 - [InlineResponse200198](docs/Model/InlineResponse200198.md)
 - [InlineResponse200199](docs/Model/InlineResponse200199.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse20020](docs/Model/InlineResponse20020.md)
 - [InlineResponse200200](docs/Model/InlineResponse200200.md)
 - [InlineResponse200201](docs/Model/InlineResponse200201.md)
 - [InlineResponse200202](docs/Model/InlineResponse200202.md)
 - [InlineResponse200203](docs/Model/InlineResponse200203.md)
 - [InlineResponse200204](docs/Model/InlineResponse200204.md)
 - [InlineResponse200205](docs/Model/InlineResponse200205.md)
 - [InlineResponse200206](docs/Model/InlineResponse200206.md)
 - [InlineResponse200207](docs/Model/InlineResponse200207.md)
 - [InlineResponse200208](docs/Model/InlineResponse200208.md)
 - [InlineResponse200209](docs/Model/InlineResponse200209.md)
 - [InlineResponse20021](docs/Model/InlineResponse20021.md)
 - [InlineResponse200210](docs/Model/InlineResponse200210.md)
 - [InlineResponse200211](docs/Model/InlineResponse200211.md)
 - [InlineResponse200212](docs/Model/InlineResponse200212.md)
 - [InlineResponse200213](docs/Model/InlineResponse200213.md)
 - [InlineResponse200214](docs/Model/InlineResponse200214.md)
 - [InlineResponse200215](docs/Model/InlineResponse200215.md)
 - [InlineResponse200216](docs/Model/InlineResponse200216.md)
 - [InlineResponse200217](docs/Model/InlineResponse200217.md)
 - [InlineResponse200218](docs/Model/InlineResponse200218.md)
 - [InlineResponse200219](docs/Model/InlineResponse200219.md)
 - [InlineResponse20022](docs/Model/InlineResponse20022.md)
 - [InlineResponse200220](docs/Model/InlineResponse200220.md)
 - [InlineResponse200221](docs/Model/InlineResponse200221.md)
 - [InlineResponse200222](docs/Model/InlineResponse200222.md)
 - [InlineResponse200223](docs/Model/InlineResponse200223.md)
 - [InlineResponse200224](docs/Model/InlineResponse200224.md)
 - [InlineResponse200225](docs/Model/InlineResponse200225.md)
 - [InlineResponse200226](docs/Model/InlineResponse200226.md)
 - [InlineResponse200227](docs/Model/InlineResponse200227.md)
 - [InlineResponse200228](docs/Model/InlineResponse200228.md)
 - [InlineResponse200229](docs/Model/InlineResponse200229.md)
 - [InlineResponse20023](docs/Model/InlineResponse20023.md)
 - [InlineResponse200230](docs/Model/InlineResponse200230.md)
 - [InlineResponse200231](docs/Model/InlineResponse200231.md)
 - [InlineResponse200232](docs/Model/InlineResponse200232.md)
 - [InlineResponse200233](docs/Model/InlineResponse200233.md)
 - [InlineResponse200234](docs/Model/InlineResponse200234.md)
 - [InlineResponse200235](docs/Model/InlineResponse200235.md)
 - [InlineResponse200236](docs/Model/InlineResponse200236.md)
 - [InlineResponse200237](docs/Model/InlineResponse200237.md)
 - [InlineResponse200238](docs/Model/InlineResponse200238.md)
 - [InlineResponse200239](docs/Model/InlineResponse200239.md)
 - [InlineResponse20024](docs/Model/InlineResponse20024.md)
 - [InlineResponse200240](docs/Model/InlineResponse200240.md)
 - [InlineResponse200241](docs/Model/InlineResponse200241.md)
 - [InlineResponse200242](docs/Model/InlineResponse200242.md)
 - [InlineResponse200243](docs/Model/InlineResponse200243.md)
 - [InlineResponse200244](docs/Model/InlineResponse200244.md)
 - [InlineResponse200245](docs/Model/InlineResponse200245.md)
 - [InlineResponse200246](docs/Model/InlineResponse200246.md)
 - [InlineResponse200247](docs/Model/InlineResponse200247.md)
 - [InlineResponse200248](docs/Model/InlineResponse200248.md)
 - [InlineResponse200249](docs/Model/InlineResponse200249.md)
 - [InlineResponse20025](docs/Model/InlineResponse20025.md)
 - [InlineResponse200250](docs/Model/InlineResponse200250.md)
 - [InlineResponse200251](docs/Model/InlineResponse200251.md)
 - [InlineResponse200252](docs/Model/InlineResponse200252.md)
 - [InlineResponse200253](docs/Model/InlineResponse200253.md)
 - [InlineResponse200254](docs/Model/InlineResponse200254.md)
 - [InlineResponse200255](docs/Model/InlineResponse200255.md)
 - [InlineResponse200256](docs/Model/InlineResponse200256.md)
 - [InlineResponse200257](docs/Model/InlineResponse200257.md)
 - [InlineResponse200258](docs/Model/InlineResponse200258.md)
 - [InlineResponse200259](docs/Model/InlineResponse200259.md)
 - [InlineResponse20026](docs/Model/InlineResponse20026.md)
 - [InlineResponse200260](docs/Model/InlineResponse200260.md)
 - [InlineResponse200261](docs/Model/InlineResponse200261.md)
 - [InlineResponse200262](docs/Model/InlineResponse200262.md)
 - [InlineResponse200263](docs/Model/InlineResponse200263.md)
 - [InlineResponse200264](docs/Model/InlineResponse200264.md)
 - [InlineResponse200265](docs/Model/InlineResponse200265.md)
 - [InlineResponse200266](docs/Model/InlineResponse200266.md)
 - [InlineResponse200267](docs/Model/InlineResponse200267.md)
 - [InlineResponse200268](docs/Model/InlineResponse200268.md)
 - [InlineResponse200269](docs/Model/InlineResponse200269.md)
 - [InlineResponse20027](docs/Model/InlineResponse20027.md)
 - [InlineResponse200270](docs/Model/InlineResponse200270.md)
 - [InlineResponse200271](docs/Model/InlineResponse200271.md)
 - [InlineResponse200272](docs/Model/InlineResponse200272.md)
 - [InlineResponse200273](docs/Model/InlineResponse200273.md)
 - [InlineResponse200274](docs/Model/InlineResponse200274.md)
 - [InlineResponse200275](docs/Model/InlineResponse200275.md)
 - [InlineResponse200276](docs/Model/InlineResponse200276.md)
 - [InlineResponse200277](docs/Model/InlineResponse200277.md)
 - [InlineResponse200278](docs/Model/InlineResponse200278.md)
 - [InlineResponse200279](docs/Model/InlineResponse200279.md)
 - [InlineResponse20028](docs/Model/InlineResponse20028.md)
 - [InlineResponse200280](docs/Model/InlineResponse200280.md)
 - [InlineResponse200281](docs/Model/InlineResponse200281.md)
 - [InlineResponse200282](docs/Model/InlineResponse200282.md)
 - [InlineResponse200283](docs/Model/InlineResponse200283.md)
 - [InlineResponse200284](docs/Model/InlineResponse200284.md)
 - [InlineResponse200285](docs/Model/InlineResponse200285.md)
 - [InlineResponse200286](docs/Model/InlineResponse200286.md)
 - [InlineResponse200287](docs/Model/InlineResponse200287.md)
 - [InlineResponse200288](docs/Model/InlineResponse200288.md)
 - [InlineResponse200289](docs/Model/InlineResponse200289.md)
 - [InlineResponse20029](docs/Model/InlineResponse20029.md)
 - [InlineResponse200290](docs/Model/InlineResponse200290.md)
 - [InlineResponse200291](docs/Model/InlineResponse200291.md)
 - [InlineResponse200292](docs/Model/InlineResponse200292.md)
 - [InlineResponse200293](docs/Model/InlineResponse200293.md)
 - [InlineResponse200294](docs/Model/InlineResponse200294.md)
 - [InlineResponse200295](docs/Model/InlineResponse200295.md)
 - [InlineResponse200296](docs/Model/InlineResponse200296.md)
 - [InlineResponse200297](docs/Model/InlineResponse200297.md)
 - [InlineResponse200298](docs/Model/InlineResponse200298.md)
 - [InlineResponse200299](docs/Model/InlineResponse200299.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse20030](docs/Model/InlineResponse20030.md)
 - [InlineResponse200300](docs/Model/InlineResponse200300.md)
 - [InlineResponse200301](docs/Model/InlineResponse200301.md)
 - [InlineResponse200302](docs/Model/InlineResponse200302.md)
 - [InlineResponse200303](docs/Model/InlineResponse200303.md)
 - [InlineResponse200304](docs/Model/InlineResponse200304.md)
 - [InlineResponse200305](docs/Model/InlineResponse200305.md)
 - [InlineResponse200306](docs/Model/InlineResponse200306.md)
 - [InlineResponse200307](docs/Model/InlineResponse200307.md)
 - [InlineResponse200308](docs/Model/InlineResponse200308.md)
 - [InlineResponse200309](docs/Model/InlineResponse200309.md)
 - [InlineResponse20031](docs/Model/InlineResponse20031.md)
 - [InlineResponse200310](docs/Model/InlineResponse200310.md)
 - [InlineResponse200311](docs/Model/InlineResponse200311.md)
 - [InlineResponse200312](docs/Model/InlineResponse200312.md)
 - [InlineResponse200313](docs/Model/InlineResponse200313.md)
 - [InlineResponse200314](docs/Model/InlineResponse200314.md)
 - [InlineResponse200315](docs/Model/InlineResponse200315.md)
 - [InlineResponse200316](docs/Model/InlineResponse200316.md)
 - [InlineResponse200317](docs/Model/InlineResponse200317.md)
 - [InlineResponse200318](docs/Model/InlineResponse200318.md)
 - [InlineResponse200319](docs/Model/InlineResponse200319.md)
 - [InlineResponse20032](docs/Model/InlineResponse20032.md)
 - [InlineResponse200320](docs/Model/InlineResponse200320.md)
 - [InlineResponse200321](docs/Model/InlineResponse200321.md)
 - [InlineResponse200322](docs/Model/InlineResponse200322.md)
 - [InlineResponse200323](docs/Model/InlineResponse200323.md)
 - [InlineResponse200324](docs/Model/InlineResponse200324.md)
 - [InlineResponse200325](docs/Model/InlineResponse200325.md)
 - [InlineResponse200326](docs/Model/InlineResponse200326.md)
 - [InlineResponse200327](docs/Model/InlineResponse200327.md)
 - [InlineResponse200328](docs/Model/InlineResponse200328.md)
 - [InlineResponse200329](docs/Model/InlineResponse200329.md)
 - [InlineResponse20033](docs/Model/InlineResponse20033.md)
 - [InlineResponse200330](docs/Model/InlineResponse200330.md)
 - [InlineResponse200331](docs/Model/InlineResponse200331.md)
 - [InlineResponse200332](docs/Model/InlineResponse200332.md)
 - [InlineResponse200333](docs/Model/InlineResponse200333.md)
 - [InlineResponse200334](docs/Model/InlineResponse200334.md)
 - [InlineResponse200335](docs/Model/InlineResponse200335.md)
 - [InlineResponse200336](docs/Model/InlineResponse200336.md)
 - [InlineResponse200337](docs/Model/InlineResponse200337.md)
 - [InlineResponse200338](docs/Model/InlineResponse200338.md)
 - [InlineResponse200339](docs/Model/InlineResponse200339.md)
 - [InlineResponse20034](docs/Model/InlineResponse20034.md)
 - [InlineResponse200340](docs/Model/InlineResponse200340.md)
 - [InlineResponse200341](docs/Model/InlineResponse200341.md)
 - [InlineResponse200342](docs/Model/InlineResponse200342.md)
 - [InlineResponse200343](docs/Model/InlineResponse200343.md)
 - [InlineResponse200344](docs/Model/InlineResponse200344.md)
 - [InlineResponse200345](docs/Model/InlineResponse200345.md)
 - [InlineResponse200346](docs/Model/InlineResponse200346.md)
 - [InlineResponse200347](docs/Model/InlineResponse200347.md)
 - [InlineResponse200348](docs/Model/InlineResponse200348.md)
 - [InlineResponse200349](docs/Model/InlineResponse200349.md)
 - [InlineResponse20035](docs/Model/InlineResponse20035.md)
 - [InlineResponse200350](docs/Model/InlineResponse200350.md)
 - [InlineResponse200351](docs/Model/InlineResponse200351.md)
 - [InlineResponse200352](docs/Model/InlineResponse200352.md)
 - [InlineResponse200353](docs/Model/InlineResponse200353.md)
 - [InlineResponse200354](docs/Model/InlineResponse200354.md)
 - [InlineResponse200355](docs/Model/InlineResponse200355.md)
 - [InlineResponse200356](docs/Model/InlineResponse200356.md)
 - [InlineResponse200357](docs/Model/InlineResponse200357.md)
 - [InlineResponse200358](docs/Model/InlineResponse200358.md)
 - [InlineResponse200359](docs/Model/InlineResponse200359.md)
 - [InlineResponse20036](docs/Model/InlineResponse20036.md)
 - [InlineResponse200360](docs/Model/InlineResponse200360.md)
 - [InlineResponse200361](docs/Model/InlineResponse200361.md)
 - [InlineResponse200362](docs/Model/InlineResponse200362.md)
 - [InlineResponse200363](docs/Model/InlineResponse200363.md)
 - [InlineResponse200364](docs/Model/InlineResponse200364.md)
 - [InlineResponse200365](docs/Model/InlineResponse200365.md)
 - [InlineResponse200366](docs/Model/InlineResponse200366.md)
 - [InlineResponse200367](docs/Model/InlineResponse200367.md)
 - [InlineResponse200368](docs/Model/InlineResponse200368.md)
 - [InlineResponse200369](docs/Model/InlineResponse200369.md)
 - [InlineResponse20037](docs/Model/InlineResponse20037.md)
 - [InlineResponse200370](docs/Model/InlineResponse200370.md)
 - [InlineResponse200371](docs/Model/InlineResponse200371.md)
 - [InlineResponse200372](docs/Model/InlineResponse200372.md)
 - [InlineResponse200373](docs/Model/InlineResponse200373.md)
 - [InlineResponse200374](docs/Model/InlineResponse200374.md)
 - [InlineResponse200375](docs/Model/InlineResponse200375.md)
 - [InlineResponse200376](docs/Model/InlineResponse200376.md)
 - [InlineResponse200377](docs/Model/InlineResponse200377.md)
 - [InlineResponse200378](docs/Model/InlineResponse200378.md)
 - [InlineResponse200379](docs/Model/InlineResponse200379.md)
 - [InlineResponse20038](docs/Model/InlineResponse20038.md)
 - [InlineResponse200380](docs/Model/InlineResponse200380.md)
 - [InlineResponse200381](docs/Model/InlineResponse200381.md)
 - [InlineResponse200382](docs/Model/InlineResponse200382.md)
 - [InlineResponse200383](docs/Model/InlineResponse200383.md)
 - [InlineResponse200384](docs/Model/InlineResponse200384.md)
 - [InlineResponse200385](docs/Model/InlineResponse200385.md)
 - [InlineResponse200386](docs/Model/InlineResponse200386.md)
 - [InlineResponse200387](docs/Model/InlineResponse200387.md)
 - [InlineResponse200388](docs/Model/InlineResponse200388.md)
 - [InlineResponse200389](docs/Model/InlineResponse200389.md)
 - [InlineResponse20039](docs/Model/InlineResponse20039.md)
 - [InlineResponse200390](docs/Model/InlineResponse200390.md)
 - [InlineResponse200391](docs/Model/InlineResponse200391.md)
 - [InlineResponse200392](docs/Model/InlineResponse200392.md)
 - [InlineResponse200393](docs/Model/InlineResponse200393.md)
 - [InlineResponse200394](docs/Model/InlineResponse200394.md)
 - [InlineResponse200395](docs/Model/InlineResponse200395.md)
 - [InlineResponse200396](docs/Model/InlineResponse200396.md)
 - [InlineResponse200397](docs/Model/InlineResponse200397.md)
 - [InlineResponse200398](docs/Model/InlineResponse200398.md)
 - [InlineResponse200399](docs/Model/InlineResponse200399.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse20040](docs/Model/InlineResponse20040.md)
 - [InlineResponse200400](docs/Model/InlineResponse200400.md)
 - [InlineResponse200401](docs/Model/InlineResponse200401.md)
 - [InlineResponse200402](docs/Model/InlineResponse200402.md)
 - [InlineResponse200403](docs/Model/InlineResponse200403.md)
 - [InlineResponse200404](docs/Model/InlineResponse200404.md)
 - [InlineResponse200405](docs/Model/InlineResponse200405.md)
 - [InlineResponse200406](docs/Model/InlineResponse200406.md)
 - [InlineResponse200407](docs/Model/InlineResponse200407.md)
 - [InlineResponse200408](docs/Model/InlineResponse200408.md)
 - [InlineResponse200409](docs/Model/InlineResponse200409.md)
 - [InlineResponse20041](docs/Model/InlineResponse20041.md)
 - [InlineResponse200410](docs/Model/InlineResponse200410.md)
 - [InlineResponse200411](docs/Model/InlineResponse200411.md)
 - [InlineResponse200412](docs/Model/InlineResponse200412.md)
 - [InlineResponse200413](docs/Model/InlineResponse200413.md)
 - [InlineResponse200414](docs/Model/InlineResponse200414.md)
 - [InlineResponse200415](docs/Model/InlineResponse200415.md)
 - [InlineResponse200416](docs/Model/InlineResponse200416.md)
 - [InlineResponse200417](docs/Model/InlineResponse200417.md)
 - [InlineResponse200418](docs/Model/InlineResponse200418.md)
 - [InlineResponse200419](docs/Model/InlineResponse200419.md)
 - [InlineResponse20042](docs/Model/InlineResponse20042.md)
 - [InlineResponse200420](docs/Model/InlineResponse200420.md)
 - [InlineResponse200421](docs/Model/InlineResponse200421.md)
 - [InlineResponse200422](docs/Model/InlineResponse200422.md)
 - [InlineResponse200423](docs/Model/InlineResponse200423.md)
 - [InlineResponse200424](docs/Model/InlineResponse200424.md)
 - [InlineResponse200425](docs/Model/InlineResponse200425.md)
 - [InlineResponse200426](docs/Model/InlineResponse200426.md)
 - [InlineResponse200427](docs/Model/InlineResponse200427.md)
 - [InlineResponse200428](docs/Model/InlineResponse200428.md)
 - [InlineResponse200429](docs/Model/InlineResponse200429.md)
 - [InlineResponse20043](docs/Model/InlineResponse20043.md)
 - [InlineResponse200430](docs/Model/InlineResponse200430.md)
 - [InlineResponse200431](docs/Model/InlineResponse200431.md)
 - [InlineResponse200432](docs/Model/InlineResponse200432.md)
 - [InlineResponse200433](docs/Model/InlineResponse200433.md)
 - [InlineResponse200434](docs/Model/InlineResponse200434.md)
 - [InlineResponse200435](docs/Model/InlineResponse200435.md)
 - [InlineResponse200436](docs/Model/InlineResponse200436.md)
 - [InlineResponse200437](docs/Model/InlineResponse200437.md)
 - [InlineResponse200438](docs/Model/InlineResponse200438.md)
 - [InlineResponse200439](docs/Model/InlineResponse200439.md)
 - [InlineResponse20044](docs/Model/InlineResponse20044.md)
 - [InlineResponse200440](docs/Model/InlineResponse200440.md)
 - [InlineResponse200441](docs/Model/InlineResponse200441.md)
 - [InlineResponse200442](docs/Model/InlineResponse200442.md)
 - [InlineResponse200443](docs/Model/InlineResponse200443.md)
 - [InlineResponse200444](docs/Model/InlineResponse200444.md)
 - [InlineResponse200445](docs/Model/InlineResponse200445.md)
 - [InlineResponse200446](docs/Model/InlineResponse200446.md)
 - [InlineResponse200447](docs/Model/InlineResponse200447.md)
 - [InlineResponse200448](docs/Model/InlineResponse200448.md)
 - [InlineResponse200449](docs/Model/InlineResponse200449.md)
 - [InlineResponse20045](docs/Model/InlineResponse20045.md)
 - [InlineResponse200450](docs/Model/InlineResponse200450.md)
 - [InlineResponse200451](docs/Model/InlineResponse200451.md)
 - [InlineResponse200452](docs/Model/InlineResponse200452.md)
 - [InlineResponse200453](docs/Model/InlineResponse200453.md)
 - [InlineResponse200454](docs/Model/InlineResponse200454.md)
 - [InlineResponse200455](docs/Model/InlineResponse200455.md)
 - [InlineResponse200456](docs/Model/InlineResponse200456.md)
 - [InlineResponse200457](docs/Model/InlineResponse200457.md)
 - [InlineResponse200458](docs/Model/InlineResponse200458.md)
 - [InlineResponse200459](docs/Model/InlineResponse200459.md)
 - [InlineResponse20046](docs/Model/InlineResponse20046.md)
 - [InlineResponse200460](docs/Model/InlineResponse200460.md)
 - [InlineResponse200461](docs/Model/InlineResponse200461.md)
 - [InlineResponse200462](docs/Model/InlineResponse200462.md)
 - [InlineResponse200463](docs/Model/InlineResponse200463.md)
 - [InlineResponse200464](docs/Model/InlineResponse200464.md)
 - [InlineResponse200465](docs/Model/InlineResponse200465.md)
 - [InlineResponse200466](docs/Model/InlineResponse200466.md)
 - [InlineResponse200467](docs/Model/InlineResponse200467.md)
 - [InlineResponse200468](docs/Model/InlineResponse200468.md)
 - [InlineResponse200469](docs/Model/InlineResponse200469.md)
 - [InlineResponse20047](docs/Model/InlineResponse20047.md)
 - [InlineResponse200470](docs/Model/InlineResponse200470.md)
 - [InlineResponse200471](docs/Model/InlineResponse200471.md)
 - [InlineResponse200472](docs/Model/InlineResponse200472.md)
 - [InlineResponse200473](docs/Model/InlineResponse200473.md)
 - [InlineResponse200474](docs/Model/InlineResponse200474.md)
 - [InlineResponse200475](docs/Model/InlineResponse200475.md)
 - [InlineResponse200476](docs/Model/InlineResponse200476.md)
 - [InlineResponse200477](docs/Model/InlineResponse200477.md)
 - [InlineResponse200478](docs/Model/InlineResponse200478.md)
 - [InlineResponse200479](docs/Model/InlineResponse200479.md)
 - [InlineResponse20048](docs/Model/InlineResponse20048.md)
 - [InlineResponse200480](docs/Model/InlineResponse200480.md)
 - [InlineResponse200481](docs/Model/InlineResponse200481.md)
 - [InlineResponse200482](docs/Model/InlineResponse200482.md)
 - [InlineResponse200483](docs/Model/InlineResponse200483.md)
 - [InlineResponse200484](docs/Model/InlineResponse200484.md)
 - [InlineResponse200485](docs/Model/InlineResponse200485.md)
 - [InlineResponse200486](docs/Model/InlineResponse200486.md)
 - [InlineResponse200487](docs/Model/InlineResponse200487.md)
 - [InlineResponse200488](docs/Model/InlineResponse200488.md)
 - [InlineResponse200489](docs/Model/InlineResponse200489.md)
 - [InlineResponse20049](docs/Model/InlineResponse20049.md)
 - [InlineResponse200490](docs/Model/InlineResponse200490.md)
 - [InlineResponse200491](docs/Model/InlineResponse200491.md)
 - [InlineResponse200492](docs/Model/InlineResponse200492.md)
 - [InlineResponse200493](docs/Model/InlineResponse200493.md)
 - [InlineResponse200494](docs/Model/InlineResponse200494.md)
 - [InlineResponse200495](docs/Model/InlineResponse200495.md)
 - [InlineResponse200496](docs/Model/InlineResponse200496.md)
 - [InlineResponse200497](docs/Model/InlineResponse200497.md)
 - [InlineResponse200498](docs/Model/InlineResponse200498.md)
 - [InlineResponse200499](docs/Model/InlineResponse200499.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse20050](docs/Model/InlineResponse20050.md)
 - [InlineResponse200500](docs/Model/InlineResponse200500.md)
 - [InlineResponse200501](docs/Model/InlineResponse200501.md)
 - [InlineResponse200502](docs/Model/InlineResponse200502.md)
 - [InlineResponse200503](docs/Model/InlineResponse200503.md)
 - [InlineResponse200504](docs/Model/InlineResponse200504.md)
 - [InlineResponse200505](docs/Model/InlineResponse200505.md)
 - [InlineResponse200506](docs/Model/InlineResponse200506.md)
 - [InlineResponse200507](docs/Model/InlineResponse200507.md)
 - [InlineResponse200508](docs/Model/InlineResponse200508.md)
 - [InlineResponse200509](docs/Model/InlineResponse200509.md)
 - [InlineResponse20051](docs/Model/InlineResponse20051.md)
 - [InlineResponse200510](docs/Model/InlineResponse200510.md)
 - [InlineResponse200511](docs/Model/InlineResponse200511.md)
 - [InlineResponse200512](docs/Model/InlineResponse200512.md)
 - [InlineResponse200513](docs/Model/InlineResponse200513.md)
 - [InlineResponse200514](docs/Model/InlineResponse200514.md)
 - [InlineResponse200515](docs/Model/InlineResponse200515.md)
 - [InlineResponse200516](docs/Model/InlineResponse200516.md)
 - [InlineResponse200517](docs/Model/InlineResponse200517.md)
 - [InlineResponse200518](docs/Model/InlineResponse200518.md)
 - [InlineResponse20052](docs/Model/InlineResponse20052.md)
 - [InlineResponse20053](docs/Model/InlineResponse20053.md)
 - [InlineResponse20054](docs/Model/InlineResponse20054.md)
 - [InlineResponse20055](docs/Model/InlineResponse20055.md)
 - [InlineResponse20056](docs/Model/InlineResponse20056.md)
 - [InlineResponse20057](docs/Model/InlineResponse20057.md)
 - [InlineResponse20058](docs/Model/InlineResponse20058.md)
 - [InlineResponse20059](docs/Model/InlineResponse20059.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse20060](docs/Model/InlineResponse20060.md)
 - [InlineResponse20061](docs/Model/InlineResponse20061.md)
 - [InlineResponse20062](docs/Model/InlineResponse20062.md)
 - [InlineResponse20063](docs/Model/InlineResponse20063.md)
 - [InlineResponse20064](docs/Model/InlineResponse20064.md)
 - [InlineResponse20065](docs/Model/InlineResponse20065.md)
 - [InlineResponse20066](docs/Model/InlineResponse20066.md)
 - [InlineResponse20067](docs/Model/InlineResponse20067.md)
 - [InlineResponse20068](docs/Model/InlineResponse20068.md)
 - [InlineResponse20069](docs/Model/InlineResponse20069.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse20070](docs/Model/InlineResponse20070.md)
 - [InlineResponse20071](docs/Model/InlineResponse20071.md)
 - [InlineResponse20072](docs/Model/InlineResponse20072.md)
 - [InlineResponse20073](docs/Model/InlineResponse20073.md)
 - [InlineResponse20074](docs/Model/InlineResponse20074.md)
 - [InlineResponse20075](docs/Model/InlineResponse20075.md)
 - [InlineResponse20076](docs/Model/InlineResponse20076.md)
 - [InlineResponse20077](docs/Model/InlineResponse20077.md)
 - [InlineResponse20078](docs/Model/InlineResponse20078.md)
 - [InlineResponse20079](docs/Model/InlineResponse20079.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse20080](docs/Model/InlineResponse20080.md)
 - [InlineResponse20081](docs/Model/InlineResponse20081.md)
 - [InlineResponse20082](docs/Model/InlineResponse20082.md)
 - [InlineResponse20083](docs/Model/InlineResponse20083.md)
 - [InlineResponse20084](docs/Model/InlineResponse20084.md)
 - [InlineResponse20085](docs/Model/InlineResponse20085.md)
 - [InlineResponse20086](docs/Model/InlineResponse20086.md)
 - [InlineResponse20087](docs/Model/InlineResponse20087.md)
 - [InlineResponse20088](docs/Model/InlineResponse20088.md)
 - [InlineResponse20089](docs/Model/InlineResponse20089.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse20090](docs/Model/InlineResponse20090.md)
 - [InlineResponse20091](docs/Model/InlineResponse20091.md)
 - [InlineResponse20092](docs/Model/InlineResponse20092.md)
 - [InlineResponse20093](docs/Model/InlineResponse20093.md)
 - [InlineResponse20094](docs/Model/InlineResponse20094.md)
 - [InlineResponse20095](docs/Model/InlineResponse20095.md)
 - [InlineResponse20096](docs/Model/InlineResponse20096.md)
 - [InlineResponse20097](docs/Model/InlineResponse20097.md)
 - [InlineResponse20098](docs/Model/InlineResponse20098.md)
 - [InlineResponse20099](docs/Model/InlineResponse20099.md)
 - [Integration](docs/Model/Integration.md)
 - [IntegrationBody](docs/Model/IntegrationBody.md)
 - [IntegrationIdBody](docs/Model/IntegrationIdBody.md)
 - [IntegrationJsonApi](docs/Model/IntegrationJsonApi.md)
 - [IntegrationJsonApiRelationships](docs/Model/IntegrationJsonApiRelationships.md)
 - [IntegrationJsonApiRelationshipsAclRoles](docs/Model/IntegrationJsonApiRelationshipsAclRoles.md)
 - [IntegrationJsonApiRelationshipsAclRolesData](docs/Model/IntegrationJsonApiRelationshipsAclRolesData.md)
 - [IntegrationJsonApiRelationshipsAclRolesLinks](docs/Model/IntegrationJsonApiRelationshipsAclRolesLinks.md)
 - [IntegrationJsonApiRelationshipsApp](docs/Model/IntegrationJsonApiRelationshipsApp.md)
 - [IntegrationJsonApiRelationshipsAppData](docs/Model/IntegrationJsonApiRelationshipsAppData.md)
 - [IntegrationJsonApiRelationshipsAppLinks](docs/Model/IntegrationJsonApiRelationshipsAppLinks.md)
 - [IntegrationRole](docs/Model/IntegrationRole.md)
 - [Jsonapi](docs/Model/Jsonapi.md)
 - [LandingPage](docs/Model/LandingPage.md)
 - [LandingPageJsonApi](docs/Model/LandingPageJsonApi.md)
 - [LandingPageJsonApiRelationships](docs/Model/LandingPageJsonApiRelationships.md)
 - [LandingPageJsonApiRelationshipsCmsPage](docs/Model/LandingPageJsonApiRelationshipsCmsPage.md)
 - [LandingPageJsonApiRelationshipsCmsPageData](docs/Model/LandingPageJsonApiRelationshipsCmsPageData.md)
 - [LandingPageJsonApiRelationshipsCmsPageLinks](docs/Model/LandingPageJsonApiRelationshipsCmsPageLinks.md)
 - [LandingPageJsonApiRelationshipsSalesChannels](docs/Model/LandingPageJsonApiRelationshipsSalesChannels.md)
 - [LandingPageJsonApiRelationshipsSalesChannelsData](docs/Model/LandingPageJsonApiRelationshipsSalesChannelsData.md)
 - [LandingPageJsonApiRelationshipsSalesChannelsLinks](docs/Model/LandingPageJsonApiRelationshipsSalesChannelsLinks.md)
 - [LandingPageJsonApiRelationshipsSeoUrls](docs/Model/LandingPageJsonApiRelationshipsSeoUrls.md)
 - [LandingPageJsonApiRelationshipsSeoUrlsData](docs/Model/LandingPageJsonApiRelationshipsSeoUrlsData.md)
 - [LandingPageJsonApiRelationshipsSeoUrlsLinks](docs/Model/LandingPageJsonApiRelationshipsSeoUrlsLinks.md)
 - [LandingPageJsonApiRelationshipsTags](docs/Model/LandingPageJsonApiRelationshipsTags.md)
 - [LandingPageJsonApiRelationshipsTagsData](docs/Model/LandingPageJsonApiRelationshipsTagsData.md)
 - [LandingPageJsonApiRelationshipsTagsLinks](docs/Model/LandingPageJsonApiRelationshipsTagsLinks.md)
 - [LandingPageSalesChannel](docs/Model/LandingPageSalesChannel.md)
 - [LandingPageTag](docs/Model/LandingPageTag.md)
 - [LandingpageBody](docs/Model/LandingpageBody.md)
 - [LandingpageIdBody](docs/Model/LandingpageIdBody.md)
 - [Language](docs/Model/Language.md)
 - [LanguageBody](docs/Model/LanguageBody.md)
 - [LanguageIdBody](docs/Model/LanguageIdBody.md)
 - [LanguageJsonApi](docs/Model/LanguageJsonApi.md)
 - [LanguageJsonApiRelationships](docs/Model/LanguageJsonApiRelationships.md)
 - [LanguageJsonApiRelationshipsChildren](docs/Model/LanguageJsonApiRelationshipsChildren.md)
 - [LanguageJsonApiRelationshipsChildrenData](docs/Model/LanguageJsonApiRelationshipsChildrenData.md)
 - [LanguageJsonApiRelationshipsChildrenLinks](docs/Model/LanguageJsonApiRelationshipsChildrenLinks.md)
 - [LanguageJsonApiRelationshipsCustomers](docs/Model/LanguageJsonApiRelationshipsCustomers.md)
 - [LanguageJsonApiRelationshipsCustomersData](docs/Model/LanguageJsonApiRelationshipsCustomersData.md)
 - [LanguageJsonApiRelationshipsCustomersLinks](docs/Model/LanguageJsonApiRelationshipsCustomersLinks.md)
 - [LanguageJsonApiRelationshipsLocale](docs/Model/LanguageJsonApiRelationshipsLocale.md)
 - [LanguageJsonApiRelationshipsLocaleData](docs/Model/LanguageJsonApiRelationshipsLocaleData.md)
 - [LanguageJsonApiRelationshipsLocaleLinks](docs/Model/LanguageJsonApiRelationshipsLocaleLinks.md)
 - [LanguageJsonApiRelationshipsNewsletterRecipients](docs/Model/LanguageJsonApiRelationshipsNewsletterRecipients.md)
 - [LanguageJsonApiRelationshipsNewsletterRecipientsData](docs/Model/LanguageJsonApiRelationshipsNewsletterRecipientsData.md)
 - [LanguageJsonApiRelationshipsNewsletterRecipientsLinks](docs/Model/LanguageJsonApiRelationshipsNewsletterRecipientsLinks.md)
 - [LanguageJsonApiRelationshipsOrders](docs/Model/LanguageJsonApiRelationshipsOrders.md)
 - [LanguageJsonApiRelationshipsOrdersData](docs/Model/LanguageJsonApiRelationshipsOrdersData.md)
 - [LanguageJsonApiRelationshipsOrdersLinks](docs/Model/LanguageJsonApiRelationshipsOrdersLinks.md)
 - [LanguageJsonApiRelationshipsParent](docs/Model/LanguageJsonApiRelationshipsParent.md)
 - [LanguageJsonApiRelationshipsParentData](docs/Model/LanguageJsonApiRelationshipsParentData.md)
 - [LanguageJsonApiRelationshipsParentLinks](docs/Model/LanguageJsonApiRelationshipsParentLinks.md)
 - [LanguageJsonApiRelationshipsProductKeywordDictionaries](docs/Model/LanguageJsonApiRelationshipsProductKeywordDictionaries.md)
 - [LanguageJsonApiRelationshipsProductKeywordDictionariesData](docs/Model/LanguageJsonApiRelationshipsProductKeywordDictionariesData.md)
 - [LanguageJsonApiRelationshipsProductKeywordDictionariesLinks](docs/Model/LanguageJsonApiRelationshipsProductKeywordDictionariesLinks.md)
 - [LanguageJsonApiRelationshipsProductReviews](docs/Model/LanguageJsonApiRelationshipsProductReviews.md)
 - [LanguageJsonApiRelationshipsProductReviewsData](docs/Model/LanguageJsonApiRelationshipsProductReviewsData.md)
 - [LanguageJsonApiRelationshipsProductReviewsLinks](docs/Model/LanguageJsonApiRelationshipsProductReviewsLinks.md)
 - [LanguageJsonApiRelationshipsProductSearchConfig](docs/Model/LanguageJsonApiRelationshipsProductSearchConfig.md)
 - [LanguageJsonApiRelationshipsProductSearchConfigData](docs/Model/LanguageJsonApiRelationshipsProductSearchConfigData.md)
 - [LanguageJsonApiRelationshipsProductSearchConfigLinks](docs/Model/LanguageJsonApiRelationshipsProductSearchConfigLinks.md)
 - [LanguageJsonApiRelationshipsProductSearchKeywords](docs/Model/LanguageJsonApiRelationshipsProductSearchKeywords.md)
 - [LanguageJsonApiRelationshipsProductSearchKeywordsData](docs/Model/LanguageJsonApiRelationshipsProductSearchKeywordsData.md)
 - [LanguageJsonApiRelationshipsProductSearchKeywordsLinks](docs/Model/LanguageJsonApiRelationshipsProductSearchKeywordsLinks.md)
 - [LanguageJsonApiRelationshipsSalesChannelDefaultAssignments](docs/Model/LanguageJsonApiRelationshipsSalesChannelDefaultAssignments.md)
 - [LanguageJsonApiRelationshipsSalesChannelDefaultAssignmentsData](docs/Model/LanguageJsonApiRelationshipsSalesChannelDefaultAssignmentsData.md)
 - [LanguageJsonApiRelationshipsSalesChannelDefaultAssignmentsLinks](docs/Model/LanguageJsonApiRelationshipsSalesChannelDefaultAssignmentsLinks.md)
 - [LanguageJsonApiRelationshipsSalesChannelDomains](docs/Model/LanguageJsonApiRelationshipsSalesChannelDomains.md)
 - [LanguageJsonApiRelationshipsSalesChannelDomainsData](docs/Model/LanguageJsonApiRelationshipsSalesChannelDomainsData.md)
 - [LanguageJsonApiRelationshipsSalesChannelDomainsLinks](docs/Model/LanguageJsonApiRelationshipsSalesChannelDomainsLinks.md)
 - [LanguageJsonApiRelationshipsSalesChannels](docs/Model/LanguageJsonApiRelationshipsSalesChannels.md)
 - [LanguageJsonApiRelationshipsSalesChannelsData](docs/Model/LanguageJsonApiRelationshipsSalesChannelsData.md)
 - [LanguageJsonApiRelationshipsSalesChannelsLinks](docs/Model/LanguageJsonApiRelationshipsSalesChannelsLinks.md)
 - [LanguageJsonApiRelationshipsTranslationCode](docs/Model/LanguageJsonApiRelationshipsTranslationCode.md)
 - [LanguageJsonApiRelationshipsTranslationCodeData](docs/Model/LanguageJsonApiRelationshipsTranslationCodeData.md)
 - [LanguageJsonApiRelationshipsTranslationCodeLinks](docs/Model/LanguageJsonApiRelationshipsTranslationCodeLinks.md)
 - [LenzPlatformClp](docs/Model/LenzPlatformClp.md)
 - [LenzPlatformClpJsonApi](docs/Model/LenzPlatformClpJsonApi.md)
 - [LenzPlatformClpJsonApiRelationships](docs/Model/LenzPlatformClpJsonApiRelationships.md)
 - [LenzPlatformClpJsonApiRelationshipsProducts](docs/Model/LenzPlatformClpJsonApiRelationshipsProducts.md)
 - [LenzPlatformClpJsonApiRelationshipsProductsData](docs/Model/LenzPlatformClpJsonApiRelationshipsProductsData.md)
 - [LenzPlatformClpJsonApiRelationshipsProductsLinks](docs/Model/LenzPlatformClpJsonApiRelationshipsProductsLinks.md)
 - [LenzPlatformClpProduct](docs/Model/LenzPlatformClpProduct.md)
 - [LenzplatformclpBody](docs/Model/LenzplatformclpBody.md)
 - [LenzplatformclpIdBody](docs/Model/LenzplatformclpIdBody.md)
 - [Link](docs/Model/Link.md)
 - [Linkage](docs/Model/Linkage.md)
 - [Links](docs/Model/Links.md)
 - [Locale](docs/Model/Locale.md)
 - [LocaleBody](docs/Model/LocaleBody.md)
 - [LocaleIdBody](docs/Model/LocaleIdBody.md)
 - [LocaleJsonApi](docs/Model/LocaleJsonApi.md)
 - [LocaleJsonApiRelationships](docs/Model/LocaleJsonApiRelationships.md)
 - [LocaleJsonApiRelationshipsLanguages](docs/Model/LocaleJsonApiRelationshipsLanguages.md)
 - [LocaleJsonApiRelationshipsLanguagesData](docs/Model/LocaleJsonApiRelationshipsLanguagesData.md)
 - [LocaleJsonApiRelationshipsLanguagesLinks](docs/Model/LocaleJsonApiRelationshipsLanguagesLinks.md)
 - [LocaleJsonApiRelationshipsUsers](docs/Model/LocaleJsonApiRelationshipsUsers.md)
 - [LocaleJsonApiRelationshipsUsersData](docs/Model/LocaleJsonApiRelationshipsUsersData.md)
 - [LocaleJsonApiRelationshipsUsersLinks](docs/Model/LocaleJsonApiRelationshipsUsersLinks.md)
 - [LogEntry](docs/Model/LogEntry.md)
 - [LogEntryJsonApi](docs/Model/LogEntryJsonApi.md)
 - [LogentryBody](docs/Model/LogentryBody.md)
 - [LogentryIdBody](docs/Model/LogentryIdBody.md)
 - [MailHeaderFooter](docs/Model/MailHeaderFooter.md)
 - [MailHeaderFooterJsonApi](docs/Model/MailHeaderFooterJsonApi.md)
 - [MailHeaderFooterJsonApiRelationships](docs/Model/MailHeaderFooterJsonApiRelationships.md)
 - [MailHeaderFooterJsonApiRelationshipsSalesChannels](docs/Model/MailHeaderFooterJsonApiRelationshipsSalesChannels.md)
 - [MailHeaderFooterJsonApiRelationshipsSalesChannelsData](docs/Model/MailHeaderFooterJsonApiRelationshipsSalesChannelsData.md)
 - [MailHeaderFooterJsonApiRelationshipsSalesChannelsLinks](docs/Model/MailHeaderFooterJsonApiRelationshipsSalesChannelsLinks.md)
 - [MailTemplate](docs/Model/MailTemplate.md)
 - [MailTemplateJsonApi](docs/Model/MailTemplateJsonApi.md)
 - [MailTemplateJsonApiRelationships](docs/Model/MailTemplateJsonApiRelationships.md)
 - [MailTemplateJsonApiRelationshipsMailTemplateType](docs/Model/MailTemplateJsonApiRelationshipsMailTemplateType.md)
 - [MailTemplateJsonApiRelationshipsMailTemplateTypeData](docs/Model/MailTemplateJsonApiRelationshipsMailTemplateTypeData.md)
 - [MailTemplateJsonApiRelationshipsMailTemplateTypeLinks](docs/Model/MailTemplateJsonApiRelationshipsMailTemplateTypeLinks.md)
 - [MailTemplateJsonApiRelationshipsMedia](docs/Model/MailTemplateJsonApiRelationshipsMedia.md)
 - [MailTemplateJsonApiRelationshipsMediaData](docs/Model/MailTemplateJsonApiRelationshipsMediaData.md)
 - [MailTemplateJsonApiRelationshipsMediaLinks](docs/Model/MailTemplateJsonApiRelationshipsMediaLinks.md)
 - [MailTemplateMedia](docs/Model/MailTemplateMedia.md)
 - [MailTemplateType](docs/Model/MailTemplateType.md)
 - [MailTemplateTypeJsonApi](docs/Model/MailTemplateTypeJsonApi.md)
 - [MailTemplateTypeJsonApiRelationships](docs/Model/MailTemplateTypeJsonApiRelationships.md)
 - [MailTemplateTypeJsonApiRelationshipsMailTemplates](docs/Model/MailTemplateTypeJsonApiRelationshipsMailTemplates.md)
 - [MailTemplateTypeJsonApiRelationshipsMailTemplatesData](docs/Model/MailTemplateTypeJsonApiRelationshipsMailTemplatesData.md)
 - [MailTemplateTypeJsonApiRelationshipsMailTemplatesLinks](docs/Model/MailTemplateTypeJsonApiRelationshipsMailTemplatesLinks.md)
 - [MailheaderfooterBody](docs/Model/MailheaderfooterBody.md)
 - [MailheaderfooterIdBody](docs/Model/MailheaderfooterIdBody.md)
 - [MailtemplateBody](docs/Model/MailtemplateBody.md)
 - [MailtemplateBuildBody](docs/Model/MailtemplateBuildBody.md)
 - [MailtemplateIdBody](docs/Model/MailtemplateIdBody.md)
 - [MailtemplateSendBody](docs/Model/MailtemplateSendBody.md)
 - [MailtemplateValidateBody](docs/Model/MailtemplateValidateBody.md)
 - [MailtemplatetypeBody](docs/Model/MailtemplatetypeBody.md)
 - [MailtemplatetypeIdBody](docs/Model/MailtemplatetypeIdBody.md)
 - [MainCategory](docs/Model/MainCategory.md)
 - [MainCategoryJsonApi](docs/Model/MainCategoryJsonApi.md)
 - [MainCategoryJsonApiRelationships](docs/Model/MainCategoryJsonApiRelationships.md)
 - [MainCategoryJsonApiRelationshipsCategory](docs/Model/MainCategoryJsonApiRelationshipsCategory.md)
 - [MainCategoryJsonApiRelationshipsCategoryData](docs/Model/MainCategoryJsonApiRelationshipsCategoryData.md)
 - [MainCategoryJsonApiRelationshipsCategoryLinks](docs/Model/MainCategoryJsonApiRelationshipsCategoryLinks.md)
 - [MainCategoryJsonApiRelationshipsProduct](docs/Model/MainCategoryJsonApiRelationshipsProduct.md)
 - [MainCategoryJsonApiRelationshipsProductData](docs/Model/MainCategoryJsonApiRelationshipsProductData.md)
 - [MainCategoryJsonApiRelationshipsProductLinks](docs/Model/MainCategoryJsonApiRelationshipsProductLinks.md)
 - [MainCategoryJsonApiRelationshipsSalesChannel](docs/Model/MainCategoryJsonApiRelationshipsSalesChannel.md)
 - [MainCategoryJsonApiRelationshipsSalesChannelData](docs/Model/MainCategoryJsonApiRelationshipsSalesChannelData.md)
 - [MainCategoryJsonApiRelationshipsSalesChannelLinks](docs/Model/MainCategoryJsonApiRelationshipsSalesChannelLinks.md)
 - [MaincategoryBody](docs/Model/MaincategoryBody.md)
 - [MaincategoryIdBody](docs/Model/MaincategoryIdBody.md)
 - [Media](docs/Model/Media.md)
 - [MediaBody](docs/Model/MediaBody.md)
 - [MediaDefaultFolder](docs/Model/MediaDefaultFolder.md)
 - [MediaDefaultFolderJsonApi](docs/Model/MediaDefaultFolderJsonApi.md)
 - [MediaDefaultFolderJsonApiRelationships](docs/Model/MediaDefaultFolderJsonApiRelationships.md)
 - [MediaDefaultFolderJsonApiRelationshipsFolder](docs/Model/MediaDefaultFolderJsonApiRelationshipsFolder.md)
 - [MediaDefaultFolderJsonApiRelationshipsFolderData](docs/Model/MediaDefaultFolderJsonApiRelationshipsFolderData.md)
 - [MediaDefaultFolderJsonApiRelationshipsFolderLinks](docs/Model/MediaDefaultFolderJsonApiRelationshipsFolderLinks.md)
 - [MediaFolder](docs/Model/MediaFolder.md)
 - [MediaFolderConfiguration](docs/Model/MediaFolderConfiguration.md)
 - [MediaFolderConfigurationJsonApi](docs/Model/MediaFolderConfigurationJsonApi.md)
 - [MediaFolderConfigurationJsonApiRelationships](docs/Model/MediaFolderConfigurationJsonApiRelationships.md)
 - [MediaFolderConfigurationJsonApiRelationshipsMediaFolders](docs/Model/MediaFolderConfigurationJsonApiRelationshipsMediaFolders.md)
 - [MediaFolderConfigurationJsonApiRelationshipsMediaFoldersData](docs/Model/MediaFolderConfigurationJsonApiRelationshipsMediaFoldersData.md)
 - [MediaFolderConfigurationJsonApiRelationshipsMediaFoldersLinks](docs/Model/MediaFolderConfigurationJsonApiRelationshipsMediaFoldersLinks.md)
 - [MediaFolderConfigurationJsonApiRelationshipsMediaThumbnailSizes](docs/Model/MediaFolderConfigurationJsonApiRelationshipsMediaThumbnailSizes.md)
 - [MediaFolderConfigurationJsonApiRelationshipsMediaThumbnailSizesData](docs/Model/MediaFolderConfigurationJsonApiRelationshipsMediaThumbnailSizesData.md)
 - [MediaFolderConfigurationJsonApiRelationshipsMediaThumbnailSizesLinks](docs/Model/MediaFolderConfigurationJsonApiRelationshipsMediaThumbnailSizesLinks.md)
 - [MediaFolderConfigurationMediaThumbnailSize](docs/Model/MediaFolderConfigurationMediaThumbnailSize.md)
 - [MediaFolderJsonApi](docs/Model/MediaFolderJsonApi.md)
 - [MediaFolderJsonApiRelationships](docs/Model/MediaFolderJsonApiRelationships.md)
 - [MediaFolderJsonApiRelationshipsChildren](docs/Model/MediaFolderJsonApiRelationshipsChildren.md)
 - [MediaFolderJsonApiRelationshipsChildrenData](docs/Model/MediaFolderJsonApiRelationshipsChildrenData.md)
 - [MediaFolderJsonApiRelationshipsChildrenLinks](docs/Model/MediaFolderJsonApiRelationshipsChildrenLinks.md)
 - [MediaFolderJsonApiRelationshipsConfiguration](docs/Model/MediaFolderJsonApiRelationshipsConfiguration.md)
 - [MediaFolderJsonApiRelationshipsConfigurationData](docs/Model/MediaFolderJsonApiRelationshipsConfigurationData.md)
 - [MediaFolderJsonApiRelationshipsConfigurationLinks](docs/Model/MediaFolderJsonApiRelationshipsConfigurationLinks.md)
 - [MediaFolderJsonApiRelationshipsDefaultFolder](docs/Model/MediaFolderJsonApiRelationshipsDefaultFolder.md)
 - [MediaFolderJsonApiRelationshipsDefaultFolderData](docs/Model/MediaFolderJsonApiRelationshipsDefaultFolderData.md)
 - [MediaFolderJsonApiRelationshipsDefaultFolderLinks](docs/Model/MediaFolderJsonApiRelationshipsDefaultFolderLinks.md)
 - [MediaFolderJsonApiRelationshipsMedia](docs/Model/MediaFolderJsonApiRelationshipsMedia.md)
 - [MediaFolderJsonApiRelationshipsMediaData](docs/Model/MediaFolderJsonApiRelationshipsMediaData.md)
 - [MediaFolderJsonApiRelationshipsMediaLinks](docs/Model/MediaFolderJsonApiRelationshipsMediaLinks.md)
 - [MediaFolderJsonApiRelationshipsParent](docs/Model/MediaFolderJsonApiRelationshipsParent.md)
 - [MediaFolderJsonApiRelationshipsParentData](docs/Model/MediaFolderJsonApiRelationshipsParentData.md)
 - [MediaFolderJsonApiRelationshipsParentLinks](docs/Model/MediaFolderJsonApiRelationshipsParentLinks.md)
 - [MediaIdBody](docs/Model/MediaIdBody.md)
 - [MediaIdUploadBody](docs/Model/MediaIdUploadBody.md)
 - [MediaJsonApi](docs/Model/MediaJsonApi.md)
 - [MediaJsonApiRelationships](docs/Model/MediaJsonApiRelationships.md)
 - [MediaJsonApiRelationshipsAppPaymentMethods](docs/Model/MediaJsonApiRelationshipsAppPaymentMethods.md)
 - [MediaJsonApiRelationshipsAppPaymentMethodsData](docs/Model/MediaJsonApiRelationshipsAppPaymentMethodsData.md)
 - [MediaJsonApiRelationshipsAppPaymentMethodsLinks](docs/Model/MediaJsonApiRelationshipsAppPaymentMethodsLinks.md)
 - [MediaJsonApiRelationshipsAvatarUser](docs/Model/MediaJsonApiRelationshipsAvatarUser.md)
 - [MediaJsonApiRelationshipsAvatarUserData](docs/Model/MediaJsonApiRelationshipsAvatarUserData.md)
 - [MediaJsonApiRelationshipsAvatarUserLinks](docs/Model/MediaJsonApiRelationshipsAvatarUserLinks.md)
 - [MediaJsonApiRelationshipsCategories](docs/Model/MediaJsonApiRelationshipsCategories.md)
 - [MediaJsonApiRelationshipsCategoriesData](docs/Model/MediaJsonApiRelationshipsCategoriesData.md)
 - [MediaJsonApiRelationshipsCategoriesLinks](docs/Model/MediaJsonApiRelationshipsCategoriesLinks.md)
 - [MediaJsonApiRelationshipsCmsBlocks](docs/Model/MediaJsonApiRelationshipsCmsBlocks.md)
 - [MediaJsonApiRelationshipsCmsBlocksData](docs/Model/MediaJsonApiRelationshipsCmsBlocksData.md)
 - [MediaJsonApiRelationshipsCmsBlocksLinks](docs/Model/MediaJsonApiRelationshipsCmsBlocksLinks.md)
 - [MediaJsonApiRelationshipsCmsPages](docs/Model/MediaJsonApiRelationshipsCmsPages.md)
 - [MediaJsonApiRelationshipsCmsPagesData](docs/Model/MediaJsonApiRelationshipsCmsPagesData.md)
 - [MediaJsonApiRelationshipsCmsPagesLinks](docs/Model/MediaJsonApiRelationshipsCmsPagesLinks.md)
 - [MediaJsonApiRelationshipsCmsSections](docs/Model/MediaJsonApiRelationshipsCmsSections.md)
 - [MediaJsonApiRelationshipsCmsSectionsData](docs/Model/MediaJsonApiRelationshipsCmsSectionsData.md)
 - [MediaJsonApiRelationshipsCmsSectionsLinks](docs/Model/MediaJsonApiRelationshipsCmsSectionsLinks.md)
 - [MediaJsonApiRelationshipsDocumentBaseConfigs](docs/Model/MediaJsonApiRelationshipsDocumentBaseConfigs.md)
 - [MediaJsonApiRelationshipsDocumentBaseConfigsData](docs/Model/MediaJsonApiRelationshipsDocumentBaseConfigsData.md)
 - [MediaJsonApiRelationshipsDocumentBaseConfigsLinks](docs/Model/MediaJsonApiRelationshipsDocumentBaseConfigsLinks.md)
 - [MediaJsonApiRelationshipsDocuments](docs/Model/MediaJsonApiRelationshipsDocuments.md)
 - [MediaJsonApiRelationshipsDocumentsData](docs/Model/MediaJsonApiRelationshipsDocumentsData.md)
 - [MediaJsonApiRelationshipsDocumentsLinks](docs/Model/MediaJsonApiRelationshipsDocumentsLinks.md)
 - [MediaJsonApiRelationshipsMailTemplateMedia](docs/Model/MediaJsonApiRelationshipsMailTemplateMedia.md)
 - [MediaJsonApiRelationshipsMailTemplateMediaData](docs/Model/MediaJsonApiRelationshipsMailTemplateMediaData.md)
 - [MediaJsonApiRelationshipsMailTemplateMediaLinks](docs/Model/MediaJsonApiRelationshipsMailTemplateMediaLinks.md)
 - [MediaJsonApiRelationshipsMediaFolder](docs/Model/MediaJsonApiRelationshipsMediaFolder.md)
 - [MediaJsonApiRelationshipsMediaFolderData](docs/Model/MediaJsonApiRelationshipsMediaFolderData.md)
 - [MediaJsonApiRelationshipsMediaFolderLinks](docs/Model/MediaJsonApiRelationshipsMediaFolderLinks.md)
 - [MediaJsonApiRelationshipsOrderLineItems](docs/Model/MediaJsonApiRelationshipsOrderLineItems.md)
 - [MediaJsonApiRelationshipsOrderLineItemsData](docs/Model/MediaJsonApiRelationshipsOrderLineItemsData.md)
 - [MediaJsonApiRelationshipsOrderLineItemsLinks](docs/Model/MediaJsonApiRelationshipsOrderLineItemsLinks.md)
 - [MediaJsonApiRelationshipsPaymentMethods](docs/Model/MediaJsonApiRelationshipsPaymentMethods.md)
 - [MediaJsonApiRelationshipsPaymentMethodsData](docs/Model/MediaJsonApiRelationshipsPaymentMethodsData.md)
 - [MediaJsonApiRelationshipsPaymentMethodsLinks](docs/Model/MediaJsonApiRelationshipsPaymentMethodsLinks.md)
 - [MediaJsonApiRelationshipsProductConfiguratorSettings](docs/Model/MediaJsonApiRelationshipsProductConfiguratorSettings.md)
 - [MediaJsonApiRelationshipsProductConfiguratorSettingsData](docs/Model/MediaJsonApiRelationshipsProductConfiguratorSettingsData.md)
 - [MediaJsonApiRelationshipsProductConfiguratorSettingsLinks](docs/Model/MediaJsonApiRelationshipsProductConfiguratorSettingsLinks.md)
 - [MediaJsonApiRelationshipsProductManufacturers](docs/Model/MediaJsonApiRelationshipsProductManufacturers.md)
 - [MediaJsonApiRelationshipsProductManufacturersData](docs/Model/MediaJsonApiRelationshipsProductManufacturersData.md)
 - [MediaJsonApiRelationshipsProductManufacturersLinks](docs/Model/MediaJsonApiRelationshipsProductManufacturersLinks.md)
 - [MediaJsonApiRelationshipsProductMedia](docs/Model/MediaJsonApiRelationshipsProductMedia.md)
 - [MediaJsonApiRelationshipsProductMediaData](docs/Model/MediaJsonApiRelationshipsProductMediaData.md)
 - [MediaJsonApiRelationshipsProductMediaLinks](docs/Model/MediaJsonApiRelationshipsProductMediaLinks.md)
 - [MediaJsonApiRelationshipsPropertyGroupOptions](docs/Model/MediaJsonApiRelationshipsPropertyGroupOptions.md)
 - [MediaJsonApiRelationshipsPropertyGroupOptionsData](docs/Model/MediaJsonApiRelationshipsPropertyGroupOptionsData.md)
 - [MediaJsonApiRelationshipsPropertyGroupOptionsLinks](docs/Model/MediaJsonApiRelationshipsPropertyGroupOptionsLinks.md)
 - [MediaJsonApiRelationshipsShippingMethods](docs/Model/MediaJsonApiRelationshipsShippingMethods.md)
 - [MediaJsonApiRelationshipsShippingMethodsData](docs/Model/MediaJsonApiRelationshipsShippingMethodsData.md)
 - [MediaJsonApiRelationshipsShippingMethodsLinks](docs/Model/MediaJsonApiRelationshipsShippingMethodsLinks.md)
 - [MediaJsonApiRelationshipsTags](docs/Model/MediaJsonApiRelationshipsTags.md)
 - [MediaJsonApiRelationshipsTagsData](docs/Model/MediaJsonApiRelationshipsTagsData.md)
 - [MediaJsonApiRelationshipsTagsLinks](docs/Model/MediaJsonApiRelationshipsTagsLinks.md)
 - [MediaJsonApiRelationshipsThumbnails](docs/Model/MediaJsonApiRelationshipsThumbnails.md)
 - [MediaJsonApiRelationshipsThumbnailsData](docs/Model/MediaJsonApiRelationshipsThumbnailsData.md)
 - [MediaJsonApiRelationshipsThumbnailsLinks](docs/Model/MediaJsonApiRelationshipsThumbnailsLinks.md)
 - [MediaJsonApiRelationshipsUser](docs/Model/MediaJsonApiRelationshipsUser.md)
 - [MediaJsonApiRelationshipsUserData](docs/Model/MediaJsonApiRelationshipsUserData.md)
 - [MediaJsonApiRelationshipsUserLinks](docs/Model/MediaJsonApiRelationshipsUserLinks.md)
 - [MediaTag](docs/Model/MediaTag.md)
 - [MediaThumbnail](docs/Model/MediaThumbnail.md)
 - [MediaThumbnailJsonApi](docs/Model/MediaThumbnailJsonApi.md)
 - [MediaThumbnailJsonApiRelationships](docs/Model/MediaThumbnailJsonApiRelationships.md)
 - [MediaThumbnailJsonApiRelationshipsMedia](docs/Model/MediaThumbnailJsonApiRelationshipsMedia.md)
 - [MediaThumbnailJsonApiRelationshipsMediaData](docs/Model/MediaThumbnailJsonApiRelationshipsMediaData.md)
 - [MediaThumbnailJsonApiRelationshipsMediaLinks](docs/Model/MediaThumbnailJsonApiRelationshipsMediaLinks.md)
 - [MediaThumbnailSize](docs/Model/MediaThumbnailSize.md)
 - [MediaThumbnailSizeJsonApi](docs/Model/MediaThumbnailSizeJsonApi.md)
 - [MediaThumbnailSizeJsonApiRelationships](docs/Model/MediaThumbnailSizeJsonApiRelationships.md)
 - [MediaThumbnailSizeJsonApiRelationshipsMediaFolderConfigurations](docs/Model/MediaThumbnailSizeJsonApiRelationshipsMediaFolderConfigurations.md)
 - [MediaThumbnailSizeJsonApiRelationshipsMediaFolderConfigurationsData](docs/Model/MediaThumbnailSizeJsonApiRelationshipsMediaFolderConfigurationsData.md)
 - [MediaThumbnailSizeJsonApiRelationshipsMediaFolderConfigurationsLinks](docs/Model/MediaThumbnailSizeJsonApiRelationshipsMediaFolderConfigurationsLinks.md)
 - [MediadefaultfolderBody](docs/Model/MediadefaultfolderBody.md)
 - [MediadefaultfolderIdBody](docs/Model/MediadefaultfolderIdBody.md)
 - [MediafolderBody](docs/Model/MediafolderBody.md)
 - [MediafolderIdBody](docs/Model/MediafolderIdBody.md)
 - [MediafolderconfigurationBody](docs/Model/MediafolderconfigurationBody.md)
 - [MediafolderconfigurationIdBody](docs/Model/MediafolderconfigurationIdBody.md)
 - [MediathumbnailBody](docs/Model/MediathumbnailBody.md)
 - [MediathumbnailIdBody](docs/Model/MediathumbnailIdBody.md)
 - [MediathumbnailsizeBody](docs/Model/MediathumbnailsizeBody.md)
 - [MediathumbnailsizeIdBody](docs/Model/MediathumbnailsizeIdBody.md)
 - [MessageQueueStats](docs/Model/MessageQueueStats.md)
 - [MessageQueueStatsJsonApi](docs/Model/MessageQueueStatsJsonApi.md)
 - [MessagequeueConsumeBody](docs/Model/MessagequeueConsumeBody.md)
 - [MessagequeuestatsBody](docs/Model/MessagequeuestatsBody.md)
 - [MessagequeuestatsIdBody](docs/Model/MessagequeuestatsIdBody.md)
 - [Meta](docs/Model/Meta.md)
 - [NewsletterRecipient](docs/Model/NewsletterRecipient.md)
 - [NewsletterRecipientJsonApi](docs/Model/NewsletterRecipientJsonApi.md)
 - [NewsletterRecipientJsonApiRelationships](docs/Model/NewsletterRecipientJsonApiRelationships.md)
 - [NewsletterRecipientJsonApiRelationshipsLanguage](docs/Model/NewsletterRecipientJsonApiRelationshipsLanguage.md)
 - [NewsletterRecipientJsonApiRelationshipsLanguageData](docs/Model/NewsletterRecipientJsonApiRelationshipsLanguageData.md)
 - [NewsletterRecipientJsonApiRelationshipsLanguageLinks](docs/Model/NewsletterRecipientJsonApiRelationshipsLanguageLinks.md)
 - [NewsletterRecipientJsonApiRelationshipsSalesChannel](docs/Model/NewsletterRecipientJsonApiRelationshipsSalesChannel.md)
 - [NewsletterRecipientJsonApiRelationshipsSalesChannelData](docs/Model/NewsletterRecipientJsonApiRelationshipsSalesChannelData.md)
 - [NewsletterRecipientJsonApiRelationshipsSalesChannelLinks](docs/Model/NewsletterRecipientJsonApiRelationshipsSalesChannelLinks.md)
 - [NewsletterRecipientJsonApiRelationshipsSalutation](docs/Model/NewsletterRecipientJsonApiRelationshipsSalutation.md)
 - [NewsletterRecipientJsonApiRelationshipsSalutationData](docs/Model/NewsletterRecipientJsonApiRelationshipsSalutationData.md)
 - [NewsletterRecipientJsonApiRelationshipsSalutationLinks](docs/Model/NewsletterRecipientJsonApiRelationshipsSalutationLinks.md)
 - [NewsletterRecipientJsonApiRelationshipsTags](docs/Model/NewsletterRecipientJsonApiRelationshipsTags.md)
 - [NewsletterRecipientJsonApiRelationshipsTagsData](docs/Model/NewsletterRecipientJsonApiRelationshipsTagsData.md)
 - [NewsletterRecipientJsonApiRelationshipsTagsLinks](docs/Model/NewsletterRecipientJsonApiRelationshipsTagsLinks.md)
 - [NewsletterRecipientTag](docs/Model/NewsletterRecipientTag.md)
 - [NewsletterrecipientBody](docs/Model/NewsletterrecipientBody.md)
 - [NewsletterrecipientIdBody](docs/Model/NewsletterrecipientIdBody.md)
 - [NumberRange](docs/Model/NumberRange.md)
 - [NumberRangeJsonApi](docs/Model/NumberRangeJsonApi.md)
 - [NumberRangeJsonApiRelationships](docs/Model/NumberRangeJsonApiRelationships.md)
 - [NumberRangeJsonApiRelationshipsNumberRangeSalesChannels](docs/Model/NumberRangeJsonApiRelationshipsNumberRangeSalesChannels.md)
 - [NumberRangeJsonApiRelationshipsNumberRangeSalesChannelsData](docs/Model/NumberRangeJsonApiRelationshipsNumberRangeSalesChannelsData.md)
 - [NumberRangeJsonApiRelationshipsNumberRangeSalesChannelsLinks](docs/Model/NumberRangeJsonApiRelationshipsNumberRangeSalesChannelsLinks.md)
 - [NumberRangeJsonApiRelationshipsState](docs/Model/NumberRangeJsonApiRelationshipsState.md)
 - [NumberRangeJsonApiRelationshipsStateData](docs/Model/NumberRangeJsonApiRelationshipsStateData.md)
 - [NumberRangeJsonApiRelationshipsStateLinks](docs/Model/NumberRangeJsonApiRelationshipsStateLinks.md)
 - [NumberRangeJsonApiRelationshipsType](docs/Model/NumberRangeJsonApiRelationshipsType.md)
 - [NumberRangeJsonApiRelationshipsTypeData](docs/Model/NumberRangeJsonApiRelationshipsTypeData.md)
 - [NumberRangeJsonApiRelationshipsTypeLinks](docs/Model/NumberRangeJsonApiRelationshipsTypeLinks.md)
 - [NumberRangeSalesChannel](docs/Model/NumberRangeSalesChannel.md)
 - [NumberRangeSalesChannelJsonApi](docs/Model/NumberRangeSalesChannelJsonApi.md)
 - [NumberRangeSalesChannelJsonApiRelationships](docs/Model/NumberRangeSalesChannelJsonApiRelationships.md)
 - [NumberRangeSalesChannelJsonApiRelationshipsNumberRange](docs/Model/NumberRangeSalesChannelJsonApiRelationshipsNumberRange.md)
 - [NumberRangeSalesChannelJsonApiRelationshipsNumberRangeData](docs/Model/NumberRangeSalesChannelJsonApiRelationshipsNumberRangeData.md)
 - [NumberRangeSalesChannelJsonApiRelationshipsNumberRangeLinks](docs/Model/NumberRangeSalesChannelJsonApiRelationshipsNumberRangeLinks.md)
 - [NumberRangeSalesChannelJsonApiRelationshipsNumberRangeType](docs/Model/NumberRangeSalesChannelJsonApiRelationshipsNumberRangeType.md)
 - [NumberRangeSalesChannelJsonApiRelationshipsNumberRangeTypeData](docs/Model/NumberRangeSalesChannelJsonApiRelationshipsNumberRangeTypeData.md)
 - [NumberRangeSalesChannelJsonApiRelationshipsNumberRangeTypeLinks](docs/Model/NumberRangeSalesChannelJsonApiRelationshipsNumberRangeTypeLinks.md)
 - [NumberRangeSalesChannelJsonApiRelationshipsSalesChannel](docs/Model/NumberRangeSalesChannelJsonApiRelationshipsSalesChannel.md)
 - [NumberRangeSalesChannelJsonApiRelationshipsSalesChannelData](docs/Model/NumberRangeSalesChannelJsonApiRelationshipsSalesChannelData.md)
 - [NumberRangeSalesChannelJsonApiRelationshipsSalesChannelLinks](docs/Model/NumberRangeSalesChannelJsonApiRelationshipsSalesChannelLinks.md)
 - [NumberRangeState](docs/Model/NumberRangeState.md)
 - [NumberRangeStateJsonApi](docs/Model/NumberRangeStateJsonApi.md)
 - [NumberRangeStateJsonApiRelationships](docs/Model/NumberRangeStateJsonApiRelationships.md)
 - [NumberRangeStateJsonApiRelationshipsNumberRange](docs/Model/NumberRangeStateJsonApiRelationshipsNumberRange.md)
 - [NumberRangeStateJsonApiRelationshipsNumberRangeData](docs/Model/NumberRangeStateJsonApiRelationshipsNumberRangeData.md)
 - [NumberRangeStateJsonApiRelationshipsNumberRangeLinks](docs/Model/NumberRangeStateJsonApiRelationshipsNumberRangeLinks.md)
 - [NumberRangeType](docs/Model/NumberRangeType.md)
 - [NumberRangeTypeJsonApi](docs/Model/NumberRangeTypeJsonApi.md)
 - [NumberRangeTypeJsonApiRelationships](docs/Model/NumberRangeTypeJsonApiRelationships.md)
 - [NumberRangeTypeJsonApiRelationshipsNumberRangeSalesChannels](docs/Model/NumberRangeTypeJsonApiRelationshipsNumberRangeSalesChannels.md)
 - [NumberRangeTypeJsonApiRelationshipsNumberRangeSalesChannelsData](docs/Model/NumberRangeTypeJsonApiRelationshipsNumberRangeSalesChannelsData.md)
 - [NumberRangeTypeJsonApiRelationshipsNumberRangeSalesChannelsLinks](docs/Model/NumberRangeTypeJsonApiRelationshipsNumberRangeSalesChannelsLinks.md)
 - [NumberRangeTypeJsonApiRelationshipsNumberRanges](docs/Model/NumberRangeTypeJsonApiRelationshipsNumberRanges.md)
 - [NumberRangeTypeJsonApiRelationshipsNumberRangesData](docs/Model/NumberRangeTypeJsonApiRelationshipsNumberRangesData.md)
 - [NumberRangeTypeJsonApiRelationshipsNumberRangesLinks](docs/Model/NumberRangeTypeJsonApiRelationshipsNumberRangesLinks.md)
 - [NumberrangeBody](docs/Model/NumberrangeBody.md)
 - [NumberrangeIdBody](docs/Model/NumberrangeIdBody.md)
 - [NumberrangesaleschannelBody](docs/Model/NumberrangesaleschannelBody.md)
 - [NumberrangesaleschannelIdBody](docs/Model/NumberrangesaleschannelIdBody.md)
 - [NumberrangestateBody](docs/Model/NumberrangestateBody.md)
 - [NumberrangestateIdBody](docs/Model/NumberrangestateIdBody.md)
 - [NumberrangetypeBody](docs/Model/NumberrangetypeBody.md)
 - [NumberrangetypeIdBody](docs/Model/NumberrangetypeIdBody.md)
 - [OauthTokenBody](docs/Model/OauthTokenBody.md)
 - [OneOfdata](docs/Model/OneOfdata.md)
 - [OneOfinlineResponse200](docs/Model/OneOfinlineResponse200.md)
 - [OneOflink](docs/Model/OneOflink.md)
 - [Order](docs/Model/Order.md)
 - [OrderAddress](docs/Model/OrderAddress.md)
 - [OrderAddressJsonApi](docs/Model/OrderAddressJsonApi.md)
 - [OrderAddressJsonApiRelationships](docs/Model/OrderAddressJsonApiRelationships.md)
 - [OrderAddressJsonApiRelationshipsCountry](docs/Model/OrderAddressJsonApiRelationshipsCountry.md)
 - [OrderAddressJsonApiRelationshipsCountryData](docs/Model/OrderAddressJsonApiRelationshipsCountryData.md)
 - [OrderAddressJsonApiRelationshipsCountryLinks](docs/Model/OrderAddressJsonApiRelationshipsCountryLinks.md)
 - [OrderAddressJsonApiRelationshipsCountryState](docs/Model/OrderAddressJsonApiRelationshipsCountryState.md)
 - [OrderAddressJsonApiRelationshipsCountryStateData](docs/Model/OrderAddressJsonApiRelationshipsCountryStateData.md)
 - [OrderAddressJsonApiRelationshipsCountryStateLinks](docs/Model/OrderAddressJsonApiRelationshipsCountryStateLinks.md)
 - [OrderAddressJsonApiRelationshipsOrder](docs/Model/OrderAddressJsonApiRelationshipsOrder.md)
 - [OrderAddressJsonApiRelationshipsOrderData](docs/Model/OrderAddressJsonApiRelationshipsOrderData.md)
 - [OrderAddressJsonApiRelationshipsOrderDeliveries](docs/Model/OrderAddressJsonApiRelationshipsOrderDeliveries.md)
 - [OrderAddressJsonApiRelationshipsOrderDeliveriesData](docs/Model/OrderAddressJsonApiRelationshipsOrderDeliveriesData.md)
 - [OrderAddressJsonApiRelationshipsOrderDeliveriesLinks](docs/Model/OrderAddressJsonApiRelationshipsOrderDeliveriesLinks.md)
 - [OrderAddressJsonApiRelationshipsOrderLinks](docs/Model/OrderAddressJsonApiRelationshipsOrderLinks.md)
 - [OrderAddressJsonApiRelationshipsSalutation](docs/Model/OrderAddressJsonApiRelationshipsSalutation.md)
 - [OrderAddressJsonApiRelationshipsSalutationData](docs/Model/OrderAddressJsonApiRelationshipsSalutationData.md)
 - [OrderAddressJsonApiRelationshipsSalutationLinks](docs/Model/OrderAddressJsonApiRelationshipsSalutationLinks.md)
 - [OrderBody](docs/Model/OrderBody.md)
 - [OrderCustomer](docs/Model/OrderCustomer.md)
 - [OrderCustomerJsonApi](docs/Model/OrderCustomerJsonApi.md)
 - [OrderCustomerJsonApiRelationships](docs/Model/OrderCustomerJsonApiRelationships.md)
 - [OrderCustomerJsonApiRelationshipsCustomer](docs/Model/OrderCustomerJsonApiRelationshipsCustomer.md)
 - [OrderCustomerJsonApiRelationshipsCustomerData](docs/Model/OrderCustomerJsonApiRelationshipsCustomerData.md)
 - [OrderCustomerJsonApiRelationshipsCustomerLinks](docs/Model/OrderCustomerJsonApiRelationshipsCustomerLinks.md)
 - [OrderCustomerJsonApiRelationshipsOrder](docs/Model/OrderCustomerJsonApiRelationshipsOrder.md)
 - [OrderCustomerJsonApiRelationshipsOrderData](docs/Model/OrderCustomerJsonApiRelationshipsOrderData.md)
 - [OrderCustomerJsonApiRelationshipsOrderLinks](docs/Model/OrderCustomerJsonApiRelationshipsOrderLinks.md)
 - [OrderCustomerJsonApiRelationshipsSalutation](docs/Model/OrderCustomerJsonApiRelationshipsSalutation.md)
 - [OrderCustomerJsonApiRelationshipsSalutationData](docs/Model/OrderCustomerJsonApiRelationshipsSalutationData.md)
 - [OrderCustomerJsonApiRelationshipsSalutationLinks](docs/Model/OrderCustomerJsonApiRelationshipsSalutationLinks.md)
 - [OrderDelivery](docs/Model/OrderDelivery.md)
 - [OrderDeliveryJsonApi](docs/Model/OrderDeliveryJsonApi.md)
 - [OrderDeliveryJsonApiRelationships](docs/Model/OrderDeliveryJsonApiRelationships.md)
 - [OrderDeliveryJsonApiRelationshipsOrder](docs/Model/OrderDeliveryJsonApiRelationshipsOrder.md)
 - [OrderDeliveryJsonApiRelationshipsOrderData](docs/Model/OrderDeliveryJsonApiRelationshipsOrderData.md)
 - [OrderDeliveryJsonApiRelationshipsOrderLinks](docs/Model/OrderDeliveryJsonApiRelationshipsOrderLinks.md)
 - [OrderDeliveryJsonApiRelationshipsPositions](docs/Model/OrderDeliveryJsonApiRelationshipsPositions.md)
 - [OrderDeliveryJsonApiRelationshipsPositionsData](docs/Model/OrderDeliveryJsonApiRelationshipsPositionsData.md)
 - [OrderDeliveryJsonApiRelationshipsPositionsLinks](docs/Model/OrderDeliveryJsonApiRelationshipsPositionsLinks.md)
 - [OrderDeliveryJsonApiRelationshipsShippingMethod](docs/Model/OrderDeliveryJsonApiRelationshipsShippingMethod.md)
 - [OrderDeliveryJsonApiRelationshipsShippingMethodData](docs/Model/OrderDeliveryJsonApiRelationshipsShippingMethodData.md)
 - [OrderDeliveryJsonApiRelationshipsShippingMethodLinks](docs/Model/OrderDeliveryJsonApiRelationshipsShippingMethodLinks.md)
 - [OrderDeliveryJsonApiRelationshipsShippingOrderAddress](docs/Model/OrderDeliveryJsonApiRelationshipsShippingOrderAddress.md)
 - [OrderDeliveryJsonApiRelationshipsShippingOrderAddressData](docs/Model/OrderDeliveryJsonApiRelationshipsShippingOrderAddressData.md)
 - [OrderDeliveryJsonApiRelationshipsShippingOrderAddressLinks](docs/Model/OrderDeliveryJsonApiRelationshipsShippingOrderAddressLinks.md)
 - [OrderDeliveryJsonApiRelationshipsStateMachineState](docs/Model/OrderDeliveryJsonApiRelationshipsStateMachineState.md)
 - [OrderDeliveryJsonApiRelationshipsStateMachineStateData](docs/Model/OrderDeliveryJsonApiRelationshipsStateMachineStateData.md)
 - [OrderDeliveryJsonApiRelationshipsStateMachineStateLinks](docs/Model/OrderDeliveryJsonApiRelationshipsStateMachineStateLinks.md)
 - [OrderDeliveryPosition](docs/Model/OrderDeliveryPosition.md)
 - [OrderDeliveryPositionJsonApi](docs/Model/OrderDeliveryPositionJsonApi.md)
 - [OrderDeliveryPositionJsonApiRelationships](docs/Model/OrderDeliveryPositionJsonApiRelationships.md)
 - [OrderDeliveryPositionJsonApiRelationshipsOrderDelivery](docs/Model/OrderDeliveryPositionJsonApiRelationshipsOrderDelivery.md)
 - [OrderDeliveryPositionJsonApiRelationshipsOrderDeliveryData](docs/Model/OrderDeliveryPositionJsonApiRelationshipsOrderDeliveryData.md)
 - [OrderDeliveryPositionJsonApiRelationshipsOrderDeliveryLinks](docs/Model/OrderDeliveryPositionJsonApiRelationshipsOrderDeliveryLinks.md)
 - [OrderDeliveryPositionJsonApiRelationshipsOrderLineItem](docs/Model/OrderDeliveryPositionJsonApiRelationshipsOrderLineItem.md)
 - [OrderDeliveryPositionJsonApiRelationshipsOrderLineItemData](docs/Model/OrderDeliveryPositionJsonApiRelationshipsOrderLineItemData.md)
 - [OrderDeliveryPositionJsonApiRelationshipsOrderLineItemLinks](docs/Model/OrderDeliveryPositionJsonApiRelationshipsOrderLineItemLinks.md)
 - [OrderIdBody](docs/Model/OrderIdBody.md)
 - [OrderJsonApi](docs/Model/OrderJsonApi.md)
 - [OrderJsonApiPrice](docs/Model/OrderJsonApiPrice.md)
 - [OrderJsonApiRelationships](docs/Model/OrderJsonApiRelationships.md)
 - [OrderJsonApiRelationshipsAddresses](docs/Model/OrderJsonApiRelationshipsAddresses.md)
 - [OrderJsonApiRelationshipsAddressesData](docs/Model/OrderJsonApiRelationshipsAddressesData.md)
 - [OrderJsonApiRelationshipsAddressesLinks](docs/Model/OrderJsonApiRelationshipsAddressesLinks.md)
 - [OrderJsonApiRelationshipsBillingAddress](docs/Model/OrderJsonApiRelationshipsBillingAddress.md)
 - [OrderJsonApiRelationshipsBillingAddressData](docs/Model/OrderJsonApiRelationshipsBillingAddressData.md)
 - [OrderJsonApiRelationshipsBillingAddressLinks](docs/Model/OrderJsonApiRelationshipsBillingAddressLinks.md)
 - [OrderJsonApiRelationshipsCreatedBy](docs/Model/OrderJsonApiRelationshipsCreatedBy.md)
 - [OrderJsonApiRelationshipsCreatedByData](docs/Model/OrderJsonApiRelationshipsCreatedByData.md)
 - [OrderJsonApiRelationshipsCreatedByLinks](docs/Model/OrderJsonApiRelationshipsCreatedByLinks.md)
 - [OrderJsonApiRelationshipsCurrency](docs/Model/OrderJsonApiRelationshipsCurrency.md)
 - [OrderJsonApiRelationshipsCurrencyData](docs/Model/OrderJsonApiRelationshipsCurrencyData.md)
 - [OrderJsonApiRelationshipsCurrencyLinks](docs/Model/OrderJsonApiRelationshipsCurrencyLinks.md)
 - [OrderJsonApiRelationshipsDeliveries](docs/Model/OrderJsonApiRelationshipsDeliveries.md)
 - [OrderJsonApiRelationshipsDeliveriesData](docs/Model/OrderJsonApiRelationshipsDeliveriesData.md)
 - [OrderJsonApiRelationshipsDeliveriesLinks](docs/Model/OrderJsonApiRelationshipsDeliveriesLinks.md)
 - [OrderJsonApiRelationshipsDocuments](docs/Model/OrderJsonApiRelationshipsDocuments.md)
 - [OrderJsonApiRelationshipsDocumentsData](docs/Model/OrderJsonApiRelationshipsDocumentsData.md)
 - [OrderJsonApiRelationshipsDocumentsLinks](docs/Model/OrderJsonApiRelationshipsDocumentsLinks.md)
 - [OrderJsonApiRelationshipsLanguage](docs/Model/OrderJsonApiRelationshipsLanguage.md)
 - [OrderJsonApiRelationshipsLanguageData](docs/Model/OrderJsonApiRelationshipsLanguageData.md)
 - [OrderJsonApiRelationshipsLanguageLinks](docs/Model/OrderJsonApiRelationshipsLanguageLinks.md)
 - [OrderJsonApiRelationshipsLineItems](docs/Model/OrderJsonApiRelationshipsLineItems.md)
 - [OrderJsonApiRelationshipsLineItemsData](docs/Model/OrderJsonApiRelationshipsLineItemsData.md)
 - [OrderJsonApiRelationshipsLineItemsLinks](docs/Model/OrderJsonApiRelationshipsLineItemsLinks.md)
 - [OrderJsonApiRelationshipsOrderCustomer](docs/Model/OrderJsonApiRelationshipsOrderCustomer.md)
 - [OrderJsonApiRelationshipsOrderCustomerData](docs/Model/OrderJsonApiRelationshipsOrderCustomerData.md)
 - [OrderJsonApiRelationshipsOrderCustomerLinks](docs/Model/OrderJsonApiRelationshipsOrderCustomerLinks.md)
 - [OrderJsonApiRelationshipsSalesChannel](docs/Model/OrderJsonApiRelationshipsSalesChannel.md)
 - [OrderJsonApiRelationshipsSalesChannelData](docs/Model/OrderJsonApiRelationshipsSalesChannelData.md)
 - [OrderJsonApiRelationshipsSalesChannelLinks](docs/Model/OrderJsonApiRelationshipsSalesChannelLinks.md)
 - [OrderJsonApiRelationshipsStateMachineState](docs/Model/OrderJsonApiRelationshipsStateMachineState.md)
 - [OrderJsonApiRelationshipsStateMachineStateData](docs/Model/OrderJsonApiRelationshipsStateMachineStateData.md)
 - [OrderJsonApiRelationshipsStateMachineStateLinks](docs/Model/OrderJsonApiRelationshipsStateMachineStateLinks.md)
 - [OrderJsonApiRelationshipsTags](docs/Model/OrderJsonApiRelationshipsTags.md)
 - [OrderJsonApiRelationshipsTagsData](docs/Model/OrderJsonApiRelationshipsTagsData.md)
 - [OrderJsonApiRelationshipsTagsLinks](docs/Model/OrderJsonApiRelationshipsTagsLinks.md)
 - [OrderJsonApiRelationshipsTransactions](docs/Model/OrderJsonApiRelationshipsTransactions.md)
 - [OrderJsonApiRelationshipsTransactionsData](docs/Model/OrderJsonApiRelationshipsTransactionsData.md)
 - [OrderJsonApiRelationshipsTransactionsLinks](docs/Model/OrderJsonApiRelationshipsTransactionsLinks.md)
 - [OrderJsonApiRelationshipsUpdatedBy](docs/Model/OrderJsonApiRelationshipsUpdatedBy.md)
 - [OrderJsonApiRelationshipsUpdatedByData](docs/Model/OrderJsonApiRelationshipsUpdatedByData.md)
 - [OrderJsonApiRelationshipsUpdatedByLinks](docs/Model/OrderJsonApiRelationshipsUpdatedByLinks.md)
 - [OrderJsonApiShippingCosts](docs/Model/OrderJsonApiShippingCosts.md)
 - [OrderJsonApiShippingCostsListPrice](docs/Model/OrderJsonApiShippingCostsListPrice.md)
 - [OrderLineItem](docs/Model/OrderLineItem.md)
 - [OrderLineItemJsonApi](docs/Model/OrderLineItemJsonApi.md)
 - [OrderLineItemJsonApiRelationships](docs/Model/OrderLineItemJsonApiRelationships.md)
 - [OrderLineItemJsonApiRelationshipsChildren](docs/Model/OrderLineItemJsonApiRelationshipsChildren.md)
 - [OrderLineItemJsonApiRelationshipsChildrenData](docs/Model/OrderLineItemJsonApiRelationshipsChildrenData.md)
 - [OrderLineItemJsonApiRelationshipsChildrenLinks](docs/Model/OrderLineItemJsonApiRelationshipsChildrenLinks.md)
 - [OrderLineItemJsonApiRelationshipsCover](docs/Model/OrderLineItemJsonApiRelationshipsCover.md)
 - [OrderLineItemJsonApiRelationshipsCoverData](docs/Model/OrderLineItemJsonApiRelationshipsCoverData.md)
 - [OrderLineItemJsonApiRelationshipsCoverLinks](docs/Model/OrderLineItemJsonApiRelationshipsCoverLinks.md)
 - [OrderLineItemJsonApiRelationshipsOrder](docs/Model/OrderLineItemJsonApiRelationshipsOrder.md)
 - [OrderLineItemJsonApiRelationshipsOrderData](docs/Model/OrderLineItemJsonApiRelationshipsOrderData.md)
 - [OrderLineItemJsonApiRelationshipsOrderDeliveryPositions](docs/Model/OrderLineItemJsonApiRelationshipsOrderDeliveryPositions.md)
 - [OrderLineItemJsonApiRelationshipsOrderDeliveryPositionsData](docs/Model/OrderLineItemJsonApiRelationshipsOrderDeliveryPositionsData.md)
 - [OrderLineItemJsonApiRelationshipsOrderDeliveryPositionsLinks](docs/Model/OrderLineItemJsonApiRelationshipsOrderDeliveryPositionsLinks.md)
 - [OrderLineItemJsonApiRelationshipsOrderLinks](docs/Model/OrderLineItemJsonApiRelationshipsOrderLinks.md)
 - [OrderLineItemJsonApiRelationshipsParent](docs/Model/OrderLineItemJsonApiRelationshipsParent.md)
 - [OrderLineItemJsonApiRelationshipsParentData](docs/Model/OrderLineItemJsonApiRelationshipsParentData.md)
 - [OrderLineItemJsonApiRelationshipsParentLinks](docs/Model/OrderLineItemJsonApiRelationshipsParentLinks.md)
 - [OrderLineItemJsonApiRelationshipsProduct](docs/Model/OrderLineItemJsonApiRelationshipsProduct.md)
 - [OrderLineItemJsonApiRelationshipsProductData](docs/Model/OrderLineItemJsonApiRelationshipsProductData.md)
 - [OrderLineItemJsonApiRelationshipsProductLinks](docs/Model/OrderLineItemJsonApiRelationshipsProductLinks.md)
 - [OrderTag](docs/Model/OrderTag.md)
 - [OrderTransaction](docs/Model/OrderTransaction.md)
 - [OrderTransactionIdAuthorizationIdBody](docs/Model/OrderTransactionIdAuthorizationIdBody.md)
 - [OrderTransactionIdAuthorizationIdBody1](docs/Model/OrderTransactionIdAuthorizationIdBody1.md)
 - [OrderTransactionJsonApi](docs/Model/OrderTransactionJsonApi.md)
 - [OrderTransactionJsonApiRelationships](docs/Model/OrderTransactionJsonApiRelationships.md)
 - [OrderTransactionJsonApiRelationshipsOrder](docs/Model/OrderTransactionJsonApiRelationshipsOrder.md)
 - [OrderTransactionJsonApiRelationshipsOrderData](docs/Model/OrderTransactionJsonApiRelationshipsOrderData.md)
 - [OrderTransactionJsonApiRelationshipsOrderLinks](docs/Model/OrderTransactionJsonApiRelationshipsOrderLinks.md)
 - [OrderTransactionJsonApiRelationshipsPaymentMethod](docs/Model/OrderTransactionJsonApiRelationshipsPaymentMethod.md)
 - [OrderTransactionJsonApiRelationshipsPaymentMethodData](docs/Model/OrderTransactionJsonApiRelationshipsPaymentMethodData.md)
 - [OrderTransactionJsonApiRelationshipsPaymentMethodLinks](docs/Model/OrderTransactionJsonApiRelationshipsPaymentMethodLinks.md)
 - [OrderTransactionJsonApiRelationshipsStateMachineState](docs/Model/OrderTransactionJsonApiRelationshipsStateMachineState.md)
 - [OrderTransactionJsonApiRelationshipsStateMachineStateData](docs/Model/OrderTransactionJsonApiRelationshipsStateMachineStateData.md)
 - [OrderTransactionJsonApiRelationshipsStateMachineStateLinks](docs/Model/OrderTransactionJsonApiRelationshipsStateMachineStateLinks.md)
 - [OrderaddressBody](docs/Model/OrderaddressBody.md)
 - [OrderaddressIdBody](docs/Model/OrderaddressIdBody.md)
 - [OrdercustomerBody](docs/Model/OrdercustomerBody.md)
 - [OrdercustomerIdBody](docs/Model/OrdercustomerIdBody.md)
 - [OrderdeliveryBody](docs/Model/OrderdeliveryBody.md)
 - [OrderdeliveryIdBody](docs/Model/OrderdeliveryIdBody.md)
 - [OrderdeliverypositionBody](docs/Model/OrderdeliverypositionBody.md)
 - [OrderdeliverypositionIdBody](docs/Model/OrderdeliverypositionIdBody.md)
 - [OrderlineitemBody](docs/Model/OrderlineitemBody.md)
 - [OrderlineitemIdBody](docs/Model/OrderlineitemIdBody.md)
 - [OrdertransactionBody](docs/Model/OrdertransactionBody.md)
 - [OrdertransactionIdBody](docs/Model/OrdertransactionIdBody.md)
 - [Pagination](docs/Model/Pagination.md)
 - [PaymentMethod](docs/Model/PaymentMethod.md)
 - [PaymentMethodJsonApi](docs/Model/PaymentMethodJsonApi.md)
 - [PaymentMethodJsonApiRelationships](docs/Model/PaymentMethodJsonApiRelationships.md)
 - [PaymentMethodJsonApiRelationshipsAppPaymentMethod](docs/Model/PaymentMethodJsonApiRelationshipsAppPaymentMethod.md)
 - [PaymentMethodJsonApiRelationshipsAppPaymentMethodData](docs/Model/PaymentMethodJsonApiRelationshipsAppPaymentMethodData.md)
 - [PaymentMethodJsonApiRelationshipsAppPaymentMethodLinks](docs/Model/PaymentMethodJsonApiRelationshipsAppPaymentMethodLinks.md)
 - [PaymentMethodJsonApiRelationshipsAvailabilityRule](docs/Model/PaymentMethodJsonApiRelationshipsAvailabilityRule.md)
 - [PaymentMethodJsonApiRelationshipsAvailabilityRuleData](docs/Model/PaymentMethodJsonApiRelationshipsAvailabilityRuleData.md)
 - [PaymentMethodJsonApiRelationshipsAvailabilityRuleLinks](docs/Model/PaymentMethodJsonApiRelationshipsAvailabilityRuleLinks.md)
 - [PaymentMethodJsonApiRelationshipsCustomers](docs/Model/PaymentMethodJsonApiRelationshipsCustomers.md)
 - [PaymentMethodJsonApiRelationshipsCustomersData](docs/Model/PaymentMethodJsonApiRelationshipsCustomersData.md)
 - [PaymentMethodJsonApiRelationshipsCustomersLinks](docs/Model/PaymentMethodJsonApiRelationshipsCustomersLinks.md)
 - [PaymentMethodJsonApiRelationshipsMedia](docs/Model/PaymentMethodJsonApiRelationshipsMedia.md)
 - [PaymentMethodJsonApiRelationshipsMediaData](docs/Model/PaymentMethodJsonApiRelationshipsMediaData.md)
 - [PaymentMethodJsonApiRelationshipsMediaLinks](docs/Model/PaymentMethodJsonApiRelationshipsMediaLinks.md)
 - [PaymentMethodJsonApiRelationshipsOrderTransactions](docs/Model/PaymentMethodJsonApiRelationshipsOrderTransactions.md)
 - [PaymentMethodJsonApiRelationshipsOrderTransactionsData](docs/Model/PaymentMethodJsonApiRelationshipsOrderTransactionsData.md)
 - [PaymentMethodJsonApiRelationshipsOrderTransactionsLinks](docs/Model/PaymentMethodJsonApiRelationshipsOrderTransactionsLinks.md)
 - [PaymentMethodJsonApiRelationshipsPlugin](docs/Model/PaymentMethodJsonApiRelationshipsPlugin.md)
 - [PaymentMethodJsonApiRelationshipsPluginData](docs/Model/PaymentMethodJsonApiRelationshipsPluginData.md)
 - [PaymentMethodJsonApiRelationshipsPluginLinks](docs/Model/PaymentMethodJsonApiRelationshipsPluginLinks.md)
 - [PaymentMethodJsonApiRelationshipsSalesChannelDefaultAssignments](docs/Model/PaymentMethodJsonApiRelationshipsSalesChannelDefaultAssignments.md)
 - [PaymentMethodJsonApiRelationshipsSalesChannelDefaultAssignmentsData](docs/Model/PaymentMethodJsonApiRelationshipsSalesChannelDefaultAssignmentsData.md)
 - [PaymentMethodJsonApiRelationshipsSalesChannelDefaultAssignmentsLinks](docs/Model/PaymentMethodJsonApiRelationshipsSalesChannelDefaultAssignmentsLinks.md)
 - [PaymentMethodJsonApiRelationshipsSalesChannels](docs/Model/PaymentMethodJsonApiRelationshipsSalesChannels.md)
 - [PaymentMethodJsonApiRelationshipsSalesChannelsData](docs/Model/PaymentMethodJsonApiRelationshipsSalesChannelsData.md)
 - [PaymentMethodJsonApiRelationshipsSalesChannelsLinks](docs/Model/PaymentMethodJsonApiRelationshipsSalesChannelsLinks.md)
 - [PaymentmethodBody](docs/Model/PaymentmethodBody.md)
 - [PaymentmethodIdBody](docs/Model/PaymentmethodIdBody.md)
 - [Plugin](docs/Model/Plugin.md)
 - [PluginBody](docs/Model/PluginBody.md)
 - [PluginIdBody](docs/Model/PluginIdBody.md)
 - [PluginJsonApi](docs/Model/PluginJsonApi.md)
 - [PluginJsonApiRelationships](docs/Model/PluginJsonApiRelationships.md)
 - [PluginJsonApiRelationshipsPaymentMethods](docs/Model/PluginJsonApiRelationshipsPaymentMethods.md)
 - [PluginJsonApiRelationshipsPaymentMethodsData](docs/Model/PluginJsonApiRelationshipsPaymentMethodsData.md)
 - [PluginJsonApiRelationshipsPaymentMethodsLinks](docs/Model/PluginJsonApiRelationshipsPaymentMethodsLinks.md)
 - [Product](docs/Model/Product.md)
 - [ProductBody](docs/Model/ProductBody.md)
 - [ProductCategory](docs/Model/ProductCategory.md)
 - [ProductCategoryTree](docs/Model/ProductCategoryTree.md)
 - [ProductConfiguratorSetting](docs/Model/ProductConfiguratorSetting.md)
 - [ProductConfiguratorSettingJsonApi](docs/Model/ProductConfiguratorSettingJsonApi.md)
 - [ProductConfiguratorSettingJsonApiRelationships](docs/Model/ProductConfiguratorSettingJsonApiRelationships.md)
 - [ProductConfiguratorSettingJsonApiRelationshipsMedia](docs/Model/ProductConfiguratorSettingJsonApiRelationshipsMedia.md)
 - [ProductConfiguratorSettingJsonApiRelationshipsMediaData](docs/Model/ProductConfiguratorSettingJsonApiRelationshipsMediaData.md)
 - [ProductConfiguratorSettingJsonApiRelationshipsMediaLinks](docs/Model/ProductConfiguratorSettingJsonApiRelationshipsMediaLinks.md)
 - [ProductConfiguratorSettingJsonApiRelationshipsOption](docs/Model/ProductConfiguratorSettingJsonApiRelationshipsOption.md)
 - [ProductConfiguratorSettingJsonApiRelationshipsOptionData](docs/Model/ProductConfiguratorSettingJsonApiRelationshipsOptionData.md)
 - [ProductConfiguratorSettingJsonApiRelationshipsOptionLinks](docs/Model/ProductConfiguratorSettingJsonApiRelationshipsOptionLinks.md)
 - [ProductConfiguratorSettingJsonApiRelationshipsProduct](docs/Model/ProductConfiguratorSettingJsonApiRelationshipsProduct.md)
 - [ProductConfiguratorSettingJsonApiRelationshipsProductData](docs/Model/ProductConfiguratorSettingJsonApiRelationshipsProductData.md)
 - [ProductConfiguratorSettingJsonApiRelationshipsProductLinks](docs/Model/ProductConfiguratorSettingJsonApiRelationshipsProductLinks.md)
 - [ProductCrossSelling](docs/Model/ProductCrossSelling.md)
 - [ProductCrossSellingAssignedProducts](docs/Model/ProductCrossSellingAssignedProducts.md)
 - [ProductCrossSellingAssignedProductsJsonApi](docs/Model/ProductCrossSellingAssignedProductsJsonApi.md)
 - [ProductCrossSellingAssignedProductsJsonApiRelationships](docs/Model/ProductCrossSellingAssignedProductsJsonApiRelationships.md)
 - [ProductCrossSellingAssignedProductsJsonApiRelationshipsCrossSelling](docs/Model/ProductCrossSellingAssignedProductsJsonApiRelationshipsCrossSelling.md)
 - [ProductCrossSellingAssignedProductsJsonApiRelationshipsCrossSellingData](docs/Model/ProductCrossSellingAssignedProductsJsonApiRelationshipsCrossSellingData.md)
 - [ProductCrossSellingAssignedProductsJsonApiRelationshipsCrossSellingLinks](docs/Model/ProductCrossSellingAssignedProductsJsonApiRelationshipsCrossSellingLinks.md)
 - [ProductCrossSellingAssignedProductsJsonApiRelationshipsProduct](docs/Model/ProductCrossSellingAssignedProductsJsonApiRelationshipsProduct.md)
 - [ProductCrossSellingAssignedProductsJsonApiRelationshipsProductData](docs/Model/ProductCrossSellingAssignedProductsJsonApiRelationshipsProductData.md)
 - [ProductCrossSellingAssignedProductsJsonApiRelationshipsProductLinks](docs/Model/ProductCrossSellingAssignedProductsJsonApiRelationshipsProductLinks.md)
 - [ProductCrossSellingJsonApi](docs/Model/ProductCrossSellingJsonApi.md)
 - [ProductCrossSellingJsonApiRelationships](docs/Model/ProductCrossSellingJsonApiRelationships.md)
 - [ProductCrossSellingJsonApiRelationshipsAssignedProducts](docs/Model/ProductCrossSellingJsonApiRelationshipsAssignedProducts.md)
 - [ProductCrossSellingJsonApiRelationshipsAssignedProductsData](docs/Model/ProductCrossSellingJsonApiRelationshipsAssignedProductsData.md)
 - [ProductCrossSellingJsonApiRelationshipsAssignedProductsLinks](docs/Model/ProductCrossSellingJsonApiRelationshipsAssignedProductsLinks.md)
 - [ProductCrossSellingJsonApiRelationshipsProduct](docs/Model/ProductCrossSellingJsonApiRelationshipsProduct.md)
 - [ProductCrossSellingJsonApiRelationshipsProductData](docs/Model/ProductCrossSellingJsonApiRelationshipsProductData.md)
 - [ProductCrossSellingJsonApiRelationshipsProductLinks](docs/Model/ProductCrossSellingJsonApiRelationshipsProductLinks.md)
 - [ProductCrossSellingJsonApiRelationshipsProductStream](docs/Model/ProductCrossSellingJsonApiRelationshipsProductStream.md)
 - [ProductCrossSellingJsonApiRelationshipsProductStreamData](docs/Model/ProductCrossSellingJsonApiRelationshipsProductStreamData.md)
 - [ProductCrossSellingJsonApiRelationshipsProductStreamLinks](docs/Model/ProductCrossSellingJsonApiRelationshipsProductStreamLinks.md)
 - [ProductCustomFieldSet](docs/Model/ProductCustomFieldSet.md)
 - [ProductExport](docs/Model/ProductExport.md)
 - [ProductExportJsonApi](docs/Model/ProductExportJsonApi.md)
 - [ProductExportJsonApiRelationships](docs/Model/ProductExportJsonApiRelationships.md)
 - [ProductExportJsonApiRelationshipsCurrency](docs/Model/ProductExportJsonApiRelationshipsCurrency.md)
 - [ProductExportJsonApiRelationshipsCurrencyData](docs/Model/ProductExportJsonApiRelationshipsCurrencyData.md)
 - [ProductExportJsonApiRelationshipsCurrencyLinks](docs/Model/ProductExportJsonApiRelationshipsCurrencyLinks.md)
 - [ProductExportJsonApiRelationshipsProductStream](docs/Model/ProductExportJsonApiRelationshipsProductStream.md)
 - [ProductExportJsonApiRelationshipsProductStreamData](docs/Model/ProductExportJsonApiRelationshipsProductStreamData.md)
 - [ProductExportJsonApiRelationshipsProductStreamLinks](docs/Model/ProductExportJsonApiRelationshipsProductStreamLinks.md)
 - [ProductExportJsonApiRelationshipsSalesChannel](docs/Model/ProductExportJsonApiRelationshipsSalesChannel.md)
 - [ProductExportJsonApiRelationshipsSalesChannelData](docs/Model/ProductExportJsonApiRelationshipsSalesChannelData.md)
 - [ProductExportJsonApiRelationshipsSalesChannelDomain](docs/Model/ProductExportJsonApiRelationshipsSalesChannelDomain.md)
 - [ProductExportJsonApiRelationshipsSalesChannelDomainData](docs/Model/ProductExportJsonApiRelationshipsSalesChannelDomainData.md)
 - [ProductExportJsonApiRelationshipsSalesChannelDomainLinks](docs/Model/ProductExportJsonApiRelationshipsSalesChannelDomainLinks.md)
 - [ProductExportJsonApiRelationshipsSalesChannelLinks](docs/Model/ProductExportJsonApiRelationshipsSalesChannelLinks.md)
 - [ProductExportJsonApiRelationshipsStorefrontSalesChannel](docs/Model/ProductExportJsonApiRelationshipsStorefrontSalesChannel.md)
 - [ProductExportJsonApiRelationshipsStorefrontSalesChannelData](docs/Model/ProductExportJsonApiRelationshipsStorefrontSalesChannelData.md)
 - [ProductExportJsonApiRelationshipsStorefrontSalesChannelLinks](docs/Model/ProductExportJsonApiRelationshipsStorefrontSalesChannelLinks.md)
 - [ProductFeatureSet](docs/Model/ProductFeatureSet.md)
 - [ProductFeatureSetJsonApi](docs/Model/ProductFeatureSetJsonApi.md)
 - [ProductFeatureSetJsonApiRelationships](docs/Model/ProductFeatureSetJsonApiRelationships.md)
 - [ProductFeatureSetJsonApiRelationshipsProducts](docs/Model/ProductFeatureSetJsonApiRelationshipsProducts.md)
 - [ProductFeatureSetJsonApiRelationshipsProductsData](docs/Model/ProductFeatureSetJsonApiRelationshipsProductsData.md)
 - [ProductFeatureSetJsonApiRelationshipsProductsLinks](docs/Model/ProductFeatureSetJsonApiRelationshipsProductsLinks.md)
 - [ProductIdBody](docs/Model/ProductIdBody.md)
 - [ProductJsonApi](docs/Model/ProductJsonApi.md)
 - [ProductJsonApiRelationships](docs/Model/ProductJsonApiRelationships.md)
 - [ProductJsonApiRelationshipsCanonicalProduct](docs/Model/ProductJsonApiRelationshipsCanonicalProduct.md)
 - [ProductJsonApiRelationshipsCanonicalProductData](docs/Model/ProductJsonApiRelationshipsCanonicalProductData.md)
 - [ProductJsonApiRelationshipsCanonicalProductLinks](docs/Model/ProductJsonApiRelationshipsCanonicalProductLinks.md)
 - [ProductJsonApiRelationshipsCategories](docs/Model/ProductJsonApiRelationshipsCategories.md)
 - [ProductJsonApiRelationshipsCategoriesData](docs/Model/ProductJsonApiRelationshipsCategoriesData.md)
 - [ProductJsonApiRelationshipsCategoriesLinks](docs/Model/ProductJsonApiRelationshipsCategoriesLinks.md)
 - [ProductJsonApiRelationshipsCategoriesRo](docs/Model/ProductJsonApiRelationshipsCategoriesRo.md)
 - [ProductJsonApiRelationshipsCategoriesRoData](docs/Model/ProductJsonApiRelationshipsCategoriesRoData.md)
 - [ProductJsonApiRelationshipsCategoriesRoLinks](docs/Model/ProductJsonApiRelationshipsCategoriesRoLinks.md)
 - [ProductJsonApiRelationshipsChildren](docs/Model/ProductJsonApiRelationshipsChildren.md)
 - [ProductJsonApiRelationshipsChildrenData](docs/Model/ProductJsonApiRelationshipsChildrenData.md)
 - [ProductJsonApiRelationshipsChildrenLinks](docs/Model/ProductJsonApiRelationshipsChildrenLinks.md)
 - [ProductJsonApiRelationshipsCmsPage](docs/Model/ProductJsonApiRelationshipsCmsPage.md)
 - [ProductJsonApiRelationshipsCmsPageData](docs/Model/ProductJsonApiRelationshipsCmsPageData.md)
 - [ProductJsonApiRelationshipsCmsPageLinks](docs/Model/ProductJsonApiRelationshipsCmsPageLinks.md)
 - [ProductJsonApiRelationshipsConfiguratorSettings](docs/Model/ProductJsonApiRelationshipsConfiguratorSettings.md)
 - [ProductJsonApiRelationshipsConfiguratorSettingsData](docs/Model/ProductJsonApiRelationshipsConfiguratorSettingsData.md)
 - [ProductJsonApiRelationshipsConfiguratorSettingsLinks](docs/Model/ProductJsonApiRelationshipsConfiguratorSettingsLinks.md)
 - [ProductJsonApiRelationshipsCover](docs/Model/ProductJsonApiRelationshipsCover.md)
 - [ProductJsonApiRelationshipsCoverData](docs/Model/ProductJsonApiRelationshipsCoverData.md)
 - [ProductJsonApiRelationshipsCoverLinks](docs/Model/ProductJsonApiRelationshipsCoverLinks.md)
 - [ProductJsonApiRelationshipsCrossSellingAssignedProducts](docs/Model/ProductJsonApiRelationshipsCrossSellingAssignedProducts.md)
 - [ProductJsonApiRelationshipsCrossSellingAssignedProductsData](docs/Model/ProductJsonApiRelationshipsCrossSellingAssignedProductsData.md)
 - [ProductJsonApiRelationshipsCrossSellingAssignedProductsLinks](docs/Model/ProductJsonApiRelationshipsCrossSellingAssignedProductsLinks.md)
 - [ProductJsonApiRelationshipsCrossSellings](docs/Model/ProductJsonApiRelationshipsCrossSellings.md)
 - [ProductJsonApiRelationshipsCrossSellingsData](docs/Model/ProductJsonApiRelationshipsCrossSellingsData.md)
 - [ProductJsonApiRelationshipsCrossSellingsLinks](docs/Model/ProductJsonApiRelationshipsCrossSellingsLinks.md)
 - [ProductJsonApiRelationshipsCustomFieldSets](docs/Model/ProductJsonApiRelationshipsCustomFieldSets.md)
 - [ProductJsonApiRelationshipsCustomFieldSetsData](docs/Model/ProductJsonApiRelationshipsCustomFieldSetsData.md)
 - [ProductJsonApiRelationshipsCustomFieldSetsLinks](docs/Model/ProductJsonApiRelationshipsCustomFieldSetsLinks.md)
 - [ProductJsonApiRelationshipsDeliveryTime](docs/Model/ProductJsonApiRelationshipsDeliveryTime.md)
 - [ProductJsonApiRelationshipsDeliveryTimeData](docs/Model/ProductJsonApiRelationshipsDeliveryTimeData.md)
 - [ProductJsonApiRelationshipsDeliveryTimeLinks](docs/Model/ProductJsonApiRelationshipsDeliveryTimeLinks.md)
 - [ProductJsonApiRelationshipsFeatureSet](docs/Model/ProductJsonApiRelationshipsFeatureSet.md)
 - [ProductJsonApiRelationshipsFeatureSetData](docs/Model/ProductJsonApiRelationshipsFeatureSetData.md)
 - [ProductJsonApiRelationshipsFeatureSetLinks](docs/Model/ProductJsonApiRelationshipsFeatureSetLinks.md)
 - [ProductJsonApiRelationshipsMainCategories](docs/Model/ProductJsonApiRelationshipsMainCategories.md)
 - [ProductJsonApiRelationshipsMainCategoriesData](docs/Model/ProductJsonApiRelationshipsMainCategoriesData.md)
 - [ProductJsonApiRelationshipsMainCategoriesLinks](docs/Model/ProductJsonApiRelationshipsMainCategoriesLinks.md)
 - [ProductJsonApiRelationshipsManufacturer](docs/Model/ProductJsonApiRelationshipsManufacturer.md)
 - [ProductJsonApiRelationshipsManufacturerData](docs/Model/ProductJsonApiRelationshipsManufacturerData.md)
 - [ProductJsonApiRelationshipsManufacturerLinks](docs/Model/ProductJsonApiRelationshipsManufacturerLinks.md)
 - [ProductJsonApiRelationshipsMedia](docs/Model/ProductJsonApiRelationshipsMedia.md)
 - [ProductJsonApiRelationshipsMediaData](docs/Model/ProductJsonApiRelationshipsMediaData.md)
 - [ProductJsonApiRelationshipsMediaLinks](docs/Model/ProductJsonApiRelationshipsMediaLinks.md)
 - [ProductJsonApiRelationshipsOptions](docs/Model/ProductJsonApiRelationshipsOptions.md)
 - [ProductJsonApiRelationshipsOptionsData](docs/Model/ProductJsonApiRelationshipsOptionsData.md)
 - [ProductJsonApiRelationshipsOptionsLinks](docs/Model/ProductJsonApiRelationshipsOptionsLinks.md)
 - [ProductJsonApiRelationshipsOrderLineItems](docs/Model/ProductJsonApiRelationshipsOrderLineItems.md)
 - [ProductJsonApiRelationshipsOrderLineItemsData](docs/Model/ProductJsonApiRelationshipsOrderLineItemsData.md)
 - [ProductJsonApiRelationshipsOrderLineItemsLinks](docs/Model/ProductJsonApiRelationshipsOrderLineItemsLinks.md)
 - [ProductJsonApiRelationshipsParent](docs/Model/ProductJsonApiRelationshipsParent.md)
 - [ProductJsonApiRelationshipsParentData](docs/Model/ProductJsonApiRelationshipsParentData.md)
 - [ProductJsonApiRelationshipsParentLinks](docs/Model/ProductJsonApiRelationshipsParentLinks.md)
 - [ProductJsonApiRelationshipsPrices](docs/Model/ProductJsonApiRelationshipsPrices.md)
 - [ProductJsonApiRelationshipsPricesData](docs/Model/ProductJsonApiRelationshipsPricesData.md)
 - [ProductJsonApiRelationshipsPricesLinks](docs/Model/ProductJsonApiRelationshipsPricesLinks.md)
 - [ProductJsonApiRelationshipsProductReviews](docs/Model/ProductJsonApiRelationshipsProductReviews.md)
 - [ProductJsonApiRelationshipsProductReviewsData](docs/Model/ProductJsonApiRelationshipsProductReviewsData.md)
 - [ProductJsonApiRelationshipsProductReviewsLinks](docs/Model/ProductJsonApiRelationshipsProductReviewsLinks.md)
 - [ProductJsonApiRelationshipsProperties](docs/Model/ProductJsonApiRelationshipsProperties.md)
 - [ProductJsonApiRelationshipsPropertiesData](docs/Model/ProductJsonApiRelationshipsPropertiesData.md)
 - [ProductJsonApiRelationshipsPropertiesLinks](docs/Model/ProductJsonApiRelationshipsPropertiesLinks.md)
 - [ProductJsonApiRelationshipsSearchKeywords](docs/Model/ProductJsonApiRelationshipsSearchKeywords.md)
 - [ProductJsonApiRelationshipsSearchKeywordsData](docs/Model/ProductJsonApiRelationshipsSearchKeywordsData.md)
 - [ProductJsonApiRelationshipsSearchKeywordsLinks](docs/Model/ProductJsonApiRelationshipsSearchKeywordsLinks.md)
 - [ProductJsonApiRelationshipsSeoUrls](docs/Model/ProductJsonApiRelationshipsSeoUrls.md)
 - [ProductJsonApiRelationshipsSeoUrlsData](docs/Model/ProductJsonApiRelationshipsSeoUrlsData.md)
 - [ProductJsonApiRelationshipsSeoUrlsLinks](docs/Model/ProductJsonApiRelationshipsSeoUrlsLinks.md)
 - [ProductJsonApiRelationshipsStreams](docs/Model/ProductJsonApiRelationshipsStreams.md)
 - [ProductJsonApiRelationshipsStreamsData](docs/Model/ProductJsonApiRelationshipsStreamsData.md)
 - [ProductJsonApiRelationshipsStreamsLinks](docs/Model/ProductJsonApiRelationshipsStreamsLinks.md)
 - [ProductJsonApiRelationshipsTags](docs/Model/ProductJsonApiRelationshipsTags.md)
 - [ProductJsonApiRelationshipsTagsData](docs/Model/ProductJsonApiRelationshipsTagsData.md)
 - [ProductJsonApiRelationshipsTagsLinks](docs/Model/ProductJsonApiRelationshipsTagsLinks.md)
 - [ProductJsonApiRelationshipsTax](docs/Model/ProductJsonApiRelationshipsTax.md)
 - [ProductJsonApiRelationshipsTaxData](docs/Model/ProductJsonApiRelationshipsTaxData.md)
 - [ProductJsonApiRelationshipsTaxLinks](docs/Model/ProductJsonApiRelationshipsTaxLinks.md)
 - [ProductJsonApiRelationshipsUnit](docs/Model/ProductJsonApiRelationshipsUnit.md)
 - [ProductJsonApiRelationshipsUnitData](docs/Model/ProductJsonApiRelationshipsUnitData.md)
 - [ProductJsonApiRelationshipsUnitLinks](docs/Model/ProductJsonApiRelationshipsUnitLinks.md)
 - [ProductJsonApiRelationshipsVisibilities](docs/Model/ProductJsonApiRelationshipsVisibilities.md)
 - [ProductJsonApiRelationshipsVisibilitiesData](docs/Model/ProductJsonApiRelationshipsVisibilitiesData.md)
 - [ProductJsonApiRelationshipsVisibilitiesLinks](docs/Model/ProductJsonApiRelationshipsVisibilitiesLinks.md)
 - [ProductJsonApiRelationshipsWishlists](docs/Model/ProductJsonApiRelationshipsWishlists.md)
 - [ProductJsonApiRelationshipsWishlistsData](docs/Model/ProductJsonApiRelationshipsWishlistsData.md)
 - [ProductJsonApiRelationshipsWishlistsLinks](docs/Model/ProductJsonApiRelationshipsWishlistsLinks.md)
 - [ProductKeywordDictionary](docs/Model/ProductKeywordDictionary.md)
 - [ProductKeywordDictionaryJsonApi](docs/Model/ProductKeywordDictionaryJsonApi.md)
 - [ProductKeywordDictionaryJsonApiRelationships](docs/Model/ProductKeywordDictionaryJsonApiRelationships.md)
 - [ProductKeywordDictionaryJsonApiRelationshipsLanguage](docs/Model/ProductKeywordDictionaryJsonApiRelationshipsLanguage.md)
 - [ProductKeywordDictionaryJsonApiRelationshipsLanguageData](docs/Model/ProductKeywordDictionaryJsonApiRelationshipsLanguageData.md)
 - [ProductKeywordDictionaryJsonApiRelationshipsLanguageLinks](docs/Model/ProductKeywordDictionaryJsonApiRelationshipsLanguageLinks.md)
 - [ProductManufacturer](docs/Model/ProductManufacturer.md)
 - [ProductManufacturerJsonApi](docs/Model/ProductManufacturerJsonApi.md)
 - [ProductManufacturerJsonApiRelationships](docs/Model/ProductManufacturerJsonApiRelationships.md)
 - [ProductManufacturerJsonApiRelationshipsMedia](docs/Model/ProductManufacturerJsonApiRelationshipsMedia.md)
 - [ProductManufacturerJsonApiRelationshipsMediaData](docs/Model/ProductManufacturerJsonApiRelationshipsMediaData.md)
 - [ProductManufacturerJsonApiRelationshipsMediaLinks](docs/Model/ProductManufacturerJsonApiRelationshipsMediaLinks.md)
 - [ProductManufacturerJsonApiRelationshipsProducts](docs/Model/ProductManufacturerJsonApiRelationshipsProducts.md)
 - [ProductManufacturerJsonApiRelationshipsProductsData](docs/Model/ProductManufacturerJsonApiRelationshipsProductsData.md)
 - [ProductManufacturerJsonApiRelationshipsProductsLinks](docs/Model/ProductManufacturerJsonApiRelationshipsProductsLinks.md)
 - [ProductMedia](docs/Model/ProductMedia.md)
 - [ProductMediaJsonApi](docs/Model/ProductMediaJsonApi.md)
 - [ProductMediaJsonApiRelationships](docs/Model/ProductMediaJsonApiRelationships.md)
 - [ProductMediaJsonApiRelationshipsMedia](docs/Model/ProductMediaJsonApiRelationshipsMedia.md)
 - [ProductMediaJsonApiRelationshipsMediaData](docs/Model/ProductMediaJsonApiRelationshipsMediaData.md)
 - [ProductMediaJsonApiRelationshipsMediaLinks](docs/Model/ProductMediaJsonApiRelationshipsMediaLinks.md)
 - [ProductMediaJsonApiRelationshipsProduct](docs/Model/ProductMediaJsonApiRelationshipsProduct.md)
 - [ProductMediaJsonApiRelationshipsProductData](docs/Model/ProductMediaJsonApiRelationshipsProductData.md)
 - [ProductMediaJsonApiRelationshipsProductLinks](docs/Model/ProductMediaJsonApiRelationshipsProductLinks.md)
 - [ProductOption](docs/Model/ProductOption.md)
 - [ProductPrice](docs/Model/ProductPrice.md)
 - [ProductPriceJsonApi](docs/Model/ProductPriceJsonApi.md)
 - [ProductPriceJsonApiRelationships](docs/Model/ProductPriceJsonApiRelationships.md)
 - [ProductPriceJsonApiRelationshipsProduct](docs/Model/ProductPriceJsonApiRelationshipsProduct.md)
 - [ProductPriceJsonApiRelationshipsProductData](docs/Model/ProductPriceJsonApiRelationshipsProductData.md)
 - [ProductPriceJsonApiRelationshipsProductLinks](docs/Model/ProductPriceJsonApiRelationshipsProductLinks.md)
 - [ProductPriceJsonApiRelationshipsRule](docs/Model/ProductPriceJsonApiRelationshipsRule.md)
 - [ProductPriceJsonApiRelationshipsRuleData](docs/Model/ProductPriceJsonApiRelationshipsRuleData.md)
 - [ProductPriceJsonApiRelationshipsRuleLinks](docs/Model/ProductPriceJsonApiRelationshipsRuleLinks.md)
 - [ProductProperty](docs/Model/ProductProperty.md)
 - [ProductReview](docs/Model/ProductReview.md)
 - [ProductReviewJsonApi](docs/Model/ProductReviewJsonApi.md)
 - [ProductReviewJsonApiRelationships](docs/Model/ProductReviewJsonApiRelationships.md)
 - [ProductReviewJsonApiRelationshipsCustomer](docs/Model/ProductReviewJsonApiRelationshipsCustomer.md)
 - [ProductReviewJsonApiRelationshipsCustomerData](docs/Model/ProductReviewJsonApiRelationshipsCustomerData.md)
 - [ProductReviewJsonApiRelationshipsCustomerLinks](docs/Model/ProductReviewJsonApiRelationshipsCustomerLinks.md)
 - [ProductReviewJsonApiRelationshipsLanguage](docs/Model/ProductReviewJsonApiRelationshipsLanguage.md)
 - [ProductReviewJsonApiRelationshipsLanguageData](docs/Model/ProductReviewJsonApiRelationshipsLanguageData.md)
 - [ProductReviewJsonApiRelationshipsLanguageLinks](docs/Model/ProductReviewJsonApiRelationshipsLanguageLinks.md)
 - [ProductReviewJsonApiRelationshipsProduct](docs/Model/ProductReviewJsonApiRelationshipsProduct.md)
 - [ProductReviewJsonApiRelationshipsProductData](docs/Model/ProductReviewJsonApiRelationshipsProductData.md)
 - [ProductReviewJsonApiRelationshipsProductLinks](docs/Model/ProductReviewJsonApiRelationshipsProductLinks.md)
 - [ProductReviewJsonApiRelationshipsSalesChannel](docs/Model/ProductReviewJsonApiRelationshipsSalesChannel.md)
 - [ProductReviewJsonApiRelationshipsSalesChannelData](docs/Model/ProductReviewJsonApiRelationshipsSalesChannelData.md)
 - [ProductReviewJsonApiRelationshipsSalesChannelLinks](docs/Model/ProductReviewJsonApiRelationshipsSalesChannelLinks.md)
 - [ProductSearchConfig](docs/Model/ProductSearchConfig.md)
 - [ProductSearchConfigField](docs/Model/ProductSearchConfigField.md)
 - [ProductSearchConfigFieldJsonApi](docs/Model/ProductSearchConfigFieldJsonApi.md)
 - [ProductSearchConfigFieldJsonApiRelationships](docs/Model/ProductSearchConfigFieldJsonApiRelationships.md)
 - [ProductSearchConfigFieldJsonApiRelationshipsCustomField](docs/Model/ProductSearchConfigFieldJsonApiRelationshipsCustomField.md)
 - [ProductSearchConfigFieldJsonApiRelationshipsCustomFieldData](docs/Model/ProductSearchConfigFieldJsonApiRelationshipsCustomFieldData.md)
 - [ProductSearchConfigFieldJsonApiRelationshipsCustomFieldLinks](docs/Model/ProductSearchConfigFieldJsonApiRelationshipsCustomFieldLinks.md)
 - [ProductSearchConfigFieldJsonApiRelationshipsSearchConfig](docs/Model/ProductSearchConfigFieldJsonApiRelationshipsSearchConfig.md)
 - [ProductSearchConfigFieldJsonApiRelationshipsSearchConfigData](docs/Model/ProductSearchConfigFieldJsonApiRelationshipsSearchConfigData.md)
 - [ProductSearchConfigFieldJsonApiRelationshipsSearchConfigLinks](docs/Model/ProductSearchConfigFieldJsonApiRelationshipsSearchConfigLinks.md)
 - [ProductSearchConfigJsonApi](docs/Model/ProductSearchConfigJsonApi.md)
 - [ProductSearchConfigJsonApiRelationships](docs/Model/ProductSearchConfigJsonApiRelationships.md)
 - [ProductSearchConfigJsonApiRelationshipsConfigFields](docs/Model/ProductSearchConfigJsonApiRelationshipsConfigFields.md)
 - [ProductSearchConfigJsonApiRelationshipsConfigFieldsData](docs/Model/ProductSearchConfigJsonApiRelationshipsConfigFieldsData.md)
 - [ProductSearchConfigJsonApiRelationshipsConfigFieldsLinks](docs/Model/ProductSearchConfigJsonApiRelationshipsConfigFieldsLinks.md)
 - [ProductSearchConfigJsonApiRelationshipsLanguage](docs/Model/ProductSearchConfigJsonApiRelationshipsLanguage.md)
 - [ProductSearchConfigJsonApiRelationshipsLanguageData](docs/Model/ProductSearchConfigJsonApiRelationshipsLanguageData.md)
 - [ProductSearchConfigJsonApiRelationshipsLanguageLinks](docs/Model/ProductSearchConfigJsonApiRelationshipsLanguageLinks.md)
 - [ProductSearchKeyword](docs/Model/ProductSearchKeyword.md)
 - [ProductSearchKeywordJsonApi](docs/Model/ProductSearchKeywordJsonApi.md)
 - [ProductSearchKeywordJsonApiRelationships](docs/Model/ProductSearchKeywordJsonApiRelationships.md)
 - [ProductSearchKeywordJsonApiRelationshipsLanguage](docs/Model/ProductSearchKeywordJsonApiRelationshipsLanguage.md)
 - [ProductSearchKeywordJsonApiRelationshipsLanguageData](docs/Model/ProductSearchKeywordJsonApiRelationshipsLanguageData.md)
 - [ProductSearchKeywordJsonApiRelationshipsLanguageLinks](docs/Model/ProductSearchKeywordJsonApiRelationshipsLanguageLinks.md)
 - [ProductSearchKeywordJsonApiRelationshipsProduct](docs/Model/ProductSearchKeywordJsonApiRelationshipsProduct.md)
 - [ProductSearchKeywordJsonApiRelationshipsProductData](docs/Model/ProductSearchKeywordJsonApiRelationshipsProductData.md)
 - [ProductSearchKeywordJsonApiRelationshipsProductLinks](docs/Model/ProductSearchKeywordJsonApiRelationshipsProductLinks.md)
 - [ProductSorting](docs/Model/ProductSorting.md)
 - [ProductSortingJsonApi](docs/Model/ProductSortingJsonApi.md)
 - [ProductStream](docs/Model/ProductStream.md)
 - [ProductStreamFilter](docs/Model/ProductStreamFilter.md)
 - [ProductStreamFilterJsonApi](docs/Model/ProductStreamFilterJsonApi.md)
 - [ProductStreamFilterJsonApiRelationships](docs/Model/ProductStreamFilterJsonApiRelationships.md)
 - [ProductStreamFilterJsonApiRelationshipsParent](docs/Model/ProductStreamFilterJsonApiRelationshipsParent.md)
 - [ProductStreamFilterJsonApiRelationshipsParentData](docs/Model/ProductStreamFilterJsonApiRelationshipsParentData.md)
 - [ProductStreamFilterJsonApiRelationshipsParentLinks](docs/Model/ProductStreamFilterJsonApiRelationshipsParentLinks.md)
 - [ProductStreamFilterJsonApiRelationshipsProductStream](docs/Model/ProductStreamFilterJsonApiRelationshipsProductStream.md)
 - [ProductStreamFilterJsonApiRelationshipsProductStreamData](docs/Model/ProductStreamFilterJsonApiRelationshipsProductStreamData.md)
 - [ProductStreamFilterJsonApiRelationshipsProductStreamLinks](docs/Model/ProductStreamFilterJsonApiRelationshipsProductStreamLinks.md)
 - [ProductStreamFilterJsonApiRelationshipsQueries](docs/Model/ProductStreamFilterJsonApiRelationshipsQueries.md)
 - [ProductStreamFilterJsonApiRelationshipsQueriesData](docs/Model/ProductStreamFilterJsonApiRelationshipsQueriesData.md)
 - [ProductStreamFilterJsonApiRelationshipsQueriesLinks](docs/Model/ProductStreamFilterJsonApiRelationshipsQueriesLinks.md)
 - [ProductStreamJsonApi](docs/Model/ProductStreamJsonApi.md)
 - [ProductStreamJsonApiRelationships](docs/Model/ProductStreamJsonApiRelationships.md)
 - [ProductStreamJsonApiRelationshipsCategories](docs/Model/ProductStreamJsonApiRelationshipsCategories.md)
 - [ProductStreamJsonApiRelationshipsCategoriesData](docs/Model/ProductStreamJsonApiRelationshipsCategoriesData.md)
 - [ProductStreamJsonApiRelationshipsCategoriesLinks](docs/Model/ProductStreamJsonApiRelationshipsCategoriesLinks.md)
 - [ProductStreamJsonApiRelationshipsFilters](docs/Model/ProductStreamJsonApiRelationshipsFilters.md)
 - [ProductStreamJsonApiRelationshipsFiltersData](docs/Model/ProductStreamJsonApiRelationshipsFiltersData.md)
 - [ProductStreamJsonApiRelationshipsFiltersLinks](docs/Model/ProductStreamJsonApiRelationshipsFiltersLinks.md)
 - [ProductStreamJsonApiRelationshipsProductCrossSellings](docs/Model/ProductStreamJsonApiRelationshipsProductCrossSellings.md)
 - [ProductStreamJsonApiRelationshipsProductCrossSellingsData](docs/Model/ProductStreamJsonApiRelationshipsProductCrossSellingsData.md)
 - [ProductStreamJsonApiRelationshipsProductCrossSellingsLinks](docs/Model/ProductStreamJsonApiRelationshipsProductCrossSellingsLinks.md)
 - [ProductStreamJsonApiRelationshipsProductExports](docs/Model/ProductStreamJsonApiRelationshipsProductExports.md)
 - [ProductStreamJsonApiRelationshipsProductExportsData](docs/Model/ProductStreamJsonApiRelationshipsProductExportsData.md)
 - [ProductStreamJsonApiRelationshipsProductExportsLinks](docs/Model/ProductStreamJsonApiRelationshipsProductExportsLinks.md)
 - [ProductStreamMapping](docs/Model/ProductStreamMapping.md)
 - [ProductTag](docs/Model/ProductTag.md)
 - [ProductVisibility](docs/Model/ProductVisibility.md)
 - [ProductVisibilityJsonApi](docs/Model/ProductVisibilityJsonApi.md)
 - [ProductVisibilityJsonApiRelationships](docs/Model/ProductVisibilityJsonApiRelationships.md)
 - [ProductVisibilityJsonApiRelationshipsProduct](docs/Model/ProductVisibilityJsonApiRelationshipsProduct.md)
 - [ProductVisibilityJsonApiRelationshipsProductData](docs/Model/ProductVisibilityJsonApiRelationshipsProductData.md)
 - [ProductVisibilityJsonApiRelationshipsProductLinks](docs/Model/ProductVisibilityJsonApiRelationshipsProductLinks.md)
 - [ProductVisibilityJsonApiRelationshipsSalesChannel](docs/Model/ProductVisibilityJsonApiRelationshipsSalesChannel.md)
 - [ProductVisibilityJsonApiRelationshipsSalesChannelData](docs/Model/ProductVisibilityJsonApiRelationshipsSalesChannelData.md)
 - [ProductVisibilityJsonApiRelationshipsSalesChannelLinks](docs/Model/ProductVisibilityJsonApiRelationshipsSalesChannelLinks.md)
 - [ProductconfiguratorsettingBody](docs/Model/ProductconfiguratorsettingBody.md)
 - [ProductconfiguratorsettingIdBody](docs/Model/ProductconfiguratorsettingIdBody.md)
 - [ProductcrosssellingBody](docs/Model/ProductcrosssellingBody.md)
 - [ProductcrosssellingIdBody](docs/Model/ProductcrosssellingIdBody.md)
 - [ProductcrosssellingassignedproductsBody](docs/Model/ProductcrosssellingassignedproductsBody.md)
 - [ProductcrosssellingassignedproductsIdBody](docs/Model/ProductcrosssellingassignedproductsIdBody.md)
 - [ProductexportBody](docs/Model/ProductexportBody.md)
 - [ProductexportIdBody](docs/Model/ProductexportIdBody.md)
 - [ProductfeaturesetBody](docs/Model/ProductfeaturesetBody.md)
 - [ProductfeaturesetIdBody](docs/Model/ProductfeaturesetIdBody.md)
 - [ProductkeyworddictionaryBody](docs/Model/ProductkeyworddictionaryBody.md)
 - [ProductkeyworddictionaryIdBody](docs/Model/ProductkeyworddictionaryIdBody.md)
 - [ProductmanufacturerBody](docs/Model/ProductmanufacturerBody.md)
 - [ProductmanufacturerIdBody](docs/Model/ProductmanufacturerIdBody.md)
 - [ProductmediaBody](docs/Model/ProductmediaBody.md)
 - [ProductmediaIdBody](docs/Model/ProductmediaIdBody.md)
 - [ProductpriceBody](docs/Model/ProductpriceBody.md)
 - [ProductpriceIdBody](docs/Model/ProductpriceIdBody.md)
 - [ProductreviewBody](docs/Model/ProductreviewBody.md)
 - [ProductreviewIdBody](docs/Model/ProductreviewIdBody.md)
 - [ProductsearchconfigBody](docs/Model/ProductsearchconfigBody.md)
 - [ProductsearchconfigIdBody](docs/Model/ProductsearchconfigIdBody.md)
 - [ProductsearchconfigfieldBody](docs/Model/ProductsearchconfigfieldBody.md)
 - [ProductsearchconfigfieldIdBody](docs/Model/ProductsearchconfigfieldIdBody.md)
 - [ProductsearchkeywordBody](docs/Model/ProductsearchkeywordBody.md)
 - [ProductsearchkeywordIdBody](docs/Model/ProductsearchkeywordIdBody.md)
 - [ProductsortingBody](docs/Model/ProductsortingBody.md)
 - [ProductsortingIdBody](docs/Model/ProductsortingIdBody.md)
 - [ProductstreamBody](docs/Model/ProductstreamBody.md)
 - [ProductstreamIdBody](docs/Model/ProductstreamIdBody.md)
 - [ProductstreamfilterBody](docs/Model/ProductstreamfilterBody.md)
 - [ProductstreamfilterIdBody](docs/Model/ProductstreamfilterIdBody.md)
 - [ProductvisibilityBody](docs/Model/ProductvisibilityBody.md)
 - [ProductvisibilityIdBody](docs/Model/ProductvisibilityIdBody.md)
 - [Promotion](docs/Model/Promotion.md)
 - [PromotionBody](docs/Model/PromotionBody.md)
 - [PromotionCartRule](docs/Model/PromotionCartRule.md)
 - [PromotionDiscount](docs/Model/PromotionDiscount.md)
 - [PromotionDiscountJsonApi](docs/Model/PromotionDiscountJsonApi.md)
 - [PromotionDiscountJsonApiRelationships](docs/Model/PromotionDiscountJsonApiRelationships.md)
 - [PromotionDiscountJsonApiRelationshipsDiscountRules](docs/Model/PromotionDiscountJsonApiRelationshipsDiscountRules.md)
 - [PromotionDiscountJsonApiRelationshipsDiscountRulesData](docs/Model/PromotionDiscountJsonApiRelationshipsDiscountRulesData.md)
 - [PromotionDiscountJsonApiRelationshipsDiscountRulesLinks](docs/Model/PromotionDiscountJsonApiRelationshipsDiscountRulesLinks.md)
 - [PromotionDiscountJsonApiRelationshipsPromotion](docs/Model/PromotionDiscountJsonApiRelationshipsPromotion.md)
 - [PromotionDiscountJsonApiRelationshipsPromotionData](docs/Model/PromotionDiscountJsonApiRelationshipsPromotionData.md)
 - [PromotionDiscountJsonApiRelationshipsPromotionDiscountPrices](docs/Model/PromotionDiscountJsonApiRelationshipsPromotionDiscountPrices.md)
 - [PromotionDiscountJsonApiRelationshipsPromotionDiscountPricesData](docs/Model/PromotionDiscountJsonApiRelationshipsPromotionDiscountPricesData.md)
 - [PromotionDiscountJsonApiRelationshipsPromotionDiscountPricesLinks](docs/Model/PromotionDiscountJsonApiRelationshipsPromotionDiscountPricesLinks.md)
 - [PromotionDiscountJsonApiRelationshipsPromotionLinks](docs/Model/PromotionDiscountJsonApiRelationshipsPromotionLinks.md)
 - [PromotionDiscountPrices](docs/Model/PromotionDiscountPrices.md)
 - [PromotionDiscountPricesJsonApi](docs/Model/PromotionDiscountPricesJsonApi.md)
 - [PromotionDiscountPricesJsonApiRelationships](docs/Model/PromotionDiscountPricesJsonApiRelationships.md)
 - [PromotionDiscountPricesJsonApiRelationshipsCurrency](docs/Model/PromotionDiscountPricesJsonApiRelationshipsCurrency.md)
 - [PromotionDiscountPricesJsonApiRelationshipsCurrencyData](docs/Model/PromotionDiscountPricesJsonApiRelationshipsCurrencyData.md)
 - [PromotionDiscountPricesJsonApiRelationshipsCurrencyLinks](docs/Model/PromotionDiscountPricesJsonApiRelationshipsCurrencyLinks.md)
 - [PromotionDiscountPricesJsonApiRelationshipsPromotionDiscount](docs/Model/PromotionDiscountPricesJsonApiRelationshipsPromotionDiscount.md)
 - [PromotionDiscountPricesJsonApiRelationshipsPromotionDiscountData](docs/Model/PromotionDiscountPricesJsonApiRelationshipsPromotionDiscountData.md)
 - [PromotionDiscountPricesJsonApiRelationshipsPromotionDiscountLinks](docs/Model/PromotionDiscountPricesJsonApiRelationshipsPromotionDiscountLinks.md)
 - [PromotionDiscountRule](docs/Model/PromotionDiscountRule.md)
 - [PromotionIdBody](docs/Model/PromotionIdBody.md)
 - [PromotionIndividualCode](docs/Model/PromotionIndividualCode.md)
 - [PromotionIndividualCodeJsonApi](docs/Model/PromotionIndividualCodeJsonApi.md)
 - [PromotionIndividualCodeJsonApiRelationships](docs/Model/PromotionIndividualCodeJsonApiRelationships.md)
 - [PromotionIndividualCodeJsonApiRelationshipsPromotion](docs/Model/PromotionIndividualCodeJsonApiRelationshipsPromotion.md)
 - [PromotionIndividualCodeJsonApiRelationshipsPromotionData](docs/Model/PromotionIndividualCodeJsonApiRelationshipsPromotionData.md)
 - [PromotionIndividualCodeJsonApiRelationshipsPromotionLinks](docs/Model/PromotionIndividualCodeJsonApiRelationshipsPromotionLinks.md)
 - [PromotionJsonApi](docs/Model/PromotionJsonApi.md)
 - [PromotionJsonApiRelationships](docs/Model/PromotionJsonApiRelationships.md)
 - [PromotionJsonApiRelationshipsCartRules](docs/Model/PromotionJsonApiRelationshipsCartRules.md)
 - [PromotionJsonApiRelationshipsCartRulesData](docs/Model/PromotionJsonApiRelationshipsCartRulesData.md)
 - [PromotionJsonApiRelationshipsCartRulesLinks](docs/Model/PromotionJsonApiRelationshipsCartRulesLinks.md)
 - [PromotionJsonApiRelationshipsDiscounts](docs/Model/PromotionJsonApiRelationshipsDiscounts.md)
 - [PromotionJsonApiRelationshipsDiscountsData](docs/Model/PromotionJsonApiRelationshipsDiscountsData.md)
 - [PromotionJsonApiRelationshipsDiscountsLinks](docs/Model/PromotionJsonApiRelationshipsDiscountsLinks.md)
 - [PromotionJsonApiRelationshipsIndividualCodes](docs/Model/PromotionJsonApiRelationshipsIndividualCodes.md)
 - [PromotionJsonApiRelationshipsIndividualCodesData](docs/Model/PromotionJsonApiRelationshipsIndividualCodesData.md)
 - [PromotionJsonApiRelationshipsIndividualCodesLinks](docs/Model/PromotionJsonApiRelationshipsIndividualCodesLinks.md)
 - [PromotionJsonApiRelationshipsOrderRules](docs/Model/PromotionJsonApiRelationshipsOrderRules.md)
 - [PromotionJsonApiRelationshipsOrderRulesData](docs/Model/PromotionJsonApiRelationshipsOrderRulesData.md)
 - [PromotionJsonApiRelationshipsOrderRulesLinks](docs/Model/PromotionJsonApiRelationshipsOrderRulesLinks.md)
 - [PromotionJsonApiRelationshipsPersonaCustomers](docs/Model/PromotionJsonApiRelationshipsPersonaCustomers.md)
 - [PromotionJsonApiRelationshipsPersonaCustomersData](docs/Model/PromotionJsonApiRelationshipsPersonaCustomersData.md)
 - [PromotionJsonApiRelationshipsPersonaCustomersLinks](docs/Model/PromotionJsonApiRelationshipsPersonaCustomersLinks.md)
 - [PromotionJsonApiRelationshipsPersonaRules](docs/Model/PromotionJsonApiRelationshipsPersonaRules.md)
 - [PromotionJsonApiRelationshipsPersonaRulesData](docs/Model/PromotionJsonApiRelationshipsPersonaRulesData.md)
 - [PromotionJsonApiRelationshipsPersonaRulesLinks](docs/Model/PromotionJsonApiRelationshipsPersonaRulesLinks.md)
 - [PromotionJsonApiRelationshipsSalesChannels](docs/Model/PromotionJsonApiRelationshipsSalesChannels.md)
 - [PromotionJsonApiRelationshipsSalesChannelsData](docs/Model/PromotionJsonApiRelationshipsSalesChannelsData.md)
 - [PromotionJsonApiRelationshipsSalesChannelsLinks](docs/Model/PromotionJsonApiRelationshipsSalesChannelsLinks.md)
 - [PromotionJsonApiRelationshipsSetgroups](docs/Model/PromotionJsonApiRelationshipsSetgroups.md)
 - [PromotionJsonApiRelationshipsSetgroupsData](docs/Model/PromotionJsonApiRelationshipsSetgroupsData.md)
 - [PromotionJsonApiRelationshipsSetgroupsLinks](docs/Model/PromotionJsonApiRelationshipsSetgroupsLinks.md)
 - [PromotionOrderRule](docs/Model/PromotionOrderRule.md)
 - [PromotionPersonaCustomer](docs/Model/PromotionPersonaCustomer.md)
 - [PromotionPersonaRule](docs/Model/PromotionPersonaRule.md)
 - [PromotionSalesChannel](docs/Model/PromotionSalesChannel.md)
 - [PromotionSalesChannelJsonApi](docs/Model/PromotionSalesChannelJsonApi.md)
 - [PromotionSalesChannelJsonApiRelationships](docs/Model/PromotionSalesChannelJsonApiRelationships.md)
 - [PromotionSalesChannelJsonApiRelationshipsPromotion](docs/Model/PromotionSalesChannelJsonApiRelationshipsPromotion.md)
 - [PromotionSalesChannelJsonApiRelationshipsPromotionData](docs/Model/PromotionSalesChannelJsonApiRelationshipsPromotionData.md)
 - [PromotionSalesChannelJsonApiRelationshipsPromotionLinks](docs/Model/PromotionSalesChannelJsonApiRelationshipsPromotionLinks.md)
 - [PromotionSalesChannelJsonApiRelationshipsSalesChannel](docs/Model/PromotionSalesChannelJsonApiRelationshipsSalesChannel.md)
 - [PromotionSalesChannelJsonApiRelationshipsSalesChannelData](docs/Model/PromotionSalesChannelJsonApiRelationshipsSalesChannelData.md)
 - [PromotionSalesChannelJsonApiRelationshipsSalesChannelLinks](docs/Model/PromotionSalesChannelJsonApiRelationshipsSalesChannelLinks.md)
 - [PromotionSetgroup](docs/Model/PromotionSetgroup.md)
 - [PromotionSetgroupJsonApi](docs/Model/PromotionSetgroupJsonApi.md)
 - [PromotionSetgroupJsonApiRelationships](docs/Model/PromotionSetgroupJsonApiRelationships.md)
 - [PromotionSetgroupJsonApiRelationshipsPromotion](docs/Model/PromotionSetgroupJsonApiRelationshipsPromotion.md)
 - [PromotionSetgroupJsonApiRelationshipsPromotionData](docs/Model/PromotionSetgroupJsonApiRelationshipsPromotionData.md)
 - [PromotionSetgroupJsonApiRelationshipsPromotionLinks](docs/Model/PromotionSetgroupJsonApiRelationshipsPromotionLinks.md)
 - [PromotionSetgroupJsonApiRelationshipsSetGroupRules](docs/Model/PromotionSetgroupJsonApiRelationshipsSetGroupRules.md)
 - [PromotionSetgroupJsonApiRelationshipsSetGroupRulesData](docs/Model/PromotionSetgroupJsonApiRelationshipsSetGroupRulesData.md)
 - [PromotionSetgroupJsonApiRelationshipsSetGroupRulesLinks](docs/Model/PromotionSetgroupJsonApiRelationshipsSetGroupRulesLinks.md)
 - [PromotionSetgroupRule](docs/Model/PromotionSetgroupRule.md)
 - [PromotiondiscountBody](docs/Model/PromotiondiscountBody.md)
 - [PromotiondiscountIdBody](docs/Model/PromotiondiscountIdBody.md)
 - [PromotiondiscountpricesBody](docs/Model/PromotiondiscountpricesBody.md)
 - [PromotiondiscountpricesIdBody](docs/Model/PromotiondiscountpricesIdBody.md)
 - [PromotionindividualcodeBody](docs/Model/PromotionindividualcodeBody.md)
 - [PromotionindividualcodeIdBody](docs/Model/PromotionindividualcodeIdBody.md)
 - [PromotionsaleschannelBody](docs/Model/PromotionsaleschannelBody.md)
 - [PromotionsaleschannelIdBody](docs/Model/PromotionsaleschannelIdBody.md)
 - [PromotionsetgroupBody](docs/Model/PromotionsetgroupBody.md)
 - [PromotionsetgroupIdBody](docs/Model/PromotionsetgroupIdBody.md)
 - [PropertyGroup](docs/Model/PropertyGroup.md)
 - [PropertyGroupJsonApi](docs/Model/PropertyGroupJsonApi.md)
 - [PropertyGroupJsonApiRelationships](docs/Model/PropertyGroupJsonApiRelationships.md)
 - [PropertyGroupJsonApiRelationshipsOptions](docs/Model/PropertyGroupJsonApiRelationshipsOptions.md)
 - [PropertyGroupJsonApiRelationshipsOptionsData](docs/Model/PropertyGroupJsonApiRelationshipsOptionsData.md)
 - [PropertyGroupJsonApiRelationshipsOptionsLinks](docs/Model/PropertyGroupJsonApiRelationshipsOptionsLinks.md)
 - [PropertyGroupOption](docs/Model/PropertyGroupOption.md)
 - [PropertyGroupOptionJsonApi](docs/Model/PropertyGroupOptionJsonApi.md)
 - [PropertyGroupOptionJsonApiRelationships](docs/Model/PropertyGroupOptionJsonApiRelationships.md)
 - [PropertyGroupOptionJsonApiRelationshipsGroup](docs/Model/PropertyGroupOptionJsonApiRelationshipsGroup.md)
 - [PropertyGroupOptionJsonApiRelationshipsGroupData](docs/Model/PropertyGroupOptionJsonApiRelationshipsGroupData.md)
 - [PropertyGroupOptionJsonApiRelationshipsGroupLinks](docs/Model/PropertyGroupOptionJsonApiRelationshipsGroupLinks.md)
 - [PropertyGroupOptionJsonApiRelationshipsMedia](docs/Model/PropertyGroupOptionJsonApiRelationshipsMedia.md)
 - [PropertyGroupOptionJsonApiRelationshipsMediaData](docs/Model/PropertyGroupOptionJsonApiRelationshipsMediaData.md)
 - [PropertyGroupOptionJsonApiRelationshipsMediaLinks](docs/Model/PropertyGroupOptionJsonApiRelationshipsMediaLinks.md)
 - [PropertyGroupOptionJsonApiRelationshipsProductConfiguratorSettings](docs/Model/PropertyGroupOptionJsonApiRelationshipsProductConfiguratorSettings.md)
 - [PropertyGroupOptionJsonApiRelationshipsProductConfiguratorSettingsData](docs/Model/PropertyGroupOptionJsonApiRelationshipsProductConfiguratorSettingsData.md)
 - [PropertyGroupOptionJsonApiRelationshipsProductConfiguratorSettingsLinks](docs/Model/PropertyGroupOptionJsonApiRelationshipsProductConfiguratorSettingsLinks.md)
 - [PropertyGroupOptionJsonApiRelationshipsProductOptions](docs/Model/PropertyGroupOptionJsonApiRelationshipsProductOptions.md)
 - [PropertyGroupOptionJsonApiRelationshipsProductOptionsData](docs/Model/PropertyGroupOptionJsonApiRelationshipsProductOptionsData.md)
 - [PropertyGroupOptionJsonApiRelationshipsProductOptionsLinks](docs/Model/PropertyGroupOptionJsonApiRelationshipsProductOptionsLinks.md)
 - [PropertyGroupOptionJsonApiRelationshipsProductProperties](docs/Model/PropertyGroupOptionJsonApiRelationshipsProductProperties.md)
 - [PropertyGroupOptionJsonApiRelationshipsProductPropertiesData](docs/Model/PropertyGroupOptionJsonApiRelationshipsProductPropertiesData.md)
 - [PropertyGroupOptionJsonApiRelationshipsProductPropertiesLinks](docs/Model/PropertyGroupOptionJsonApiRelationshipsProductPropertiesLinks.md)
 - [PropertygroupBody](docs/Model/PropertygroupBody.md)
 - [PropertygroupIdBody](docs/Model/PropertygroupIdBody.md)
 - [PropertygroupoptionBody](docs/Model/PropertygroupoptionBody.md)
 - [PropertygroupoptionIdBody](docs/Model/PropertygroupoptionIdBody.md)
 - [RelationshipLinks](docs/Model/RelationshipLinks.md)
 - [RelationshipToMany](docs/Model/RelationshipToMany.md)
 - [RelationshipToOne](docs/Model/RelationshipToOne.md)
 - [Relationships](docs/Model/Relationships.md)
 - [Resource](docs/Model/Resource.md)
 - [RlAbBanner](docs/Model/RlAbBanner.md)
 - [RlAbBannerJsonApi](docs/Model/RlAbBannerJsonApi.md)
 - [RlabbannerBody](docs/Model/RlabbannerBody.md)
 - [RlabbannerIdBody](docs/Model/RlabbannerIdBody.md)
 - [Rule](docs/Model/Rule.md)
 - [RuleBody](docs/Model/RuleBody.md)
 - [RuleCondition](docs/Model/RuleCondition.md)
 - [RuleConditionJsonApi](docs/Model/RuleConditionJsonApi.md)
 - [RuleConditionJsonApiRelationships](docs/Model/RuleConditionJsonApiRelationships.md)
 - [RuleConditionJsonApiRelationshipsChildren](docs/Model/RuleConditionJsonApiRelationshipsChildren.md)
 - [RuleConditionJsonApiRelationshipsChildrenData](docs/Model/RuleConditionJsonApiRelationshipsChildrenData.md)
 - [RuleConditionJsonApiRelationshipsChildrenLinks](docs/Model/RuleConditionJsonApiRelationshipsChildrenLinks.md)
 - [RuleConditionJsonApiRelationshipsParent](docs/Model/RuleConditionJsonApiRelationshipsParent.md)
 - [RuleConditionJsonApiRelationshipsParentData](docs/Model/RuleConditionJsonApiRelationshipsParentData.md)
 - [RuleConditionJsonApiRelationshipsParentLinks](docs/Model/RuleConditionJsonApiRelationshipsParentLinks.md)
 - [RuleConditionJsonApiRelationshipsRule](docs/Model/RuleConditionJsonApiRelationshipsRule.md)
 - [RuleConditionJsonApiRelationshipsRuleData](docs/Model/RuleConditionJsonApiRelationshipsRuleData.md)
 - [RuleConditionJsonApiRelationshipsRuleLinks](docs/Model/RuleConditionJsonApiRelationshipsRuleLinks.md)
 - [RuleIdBody](docs/Model/RuleIdBody.md)
 - [RuleJsonApi](docs/Model/RuleJsonApi.md)
 - [RuleJsonApiRelationships](docs/Model/RuleJsonApiRelationships.md)
 - [RuleJsonApiRelationshipsCartPromotions](docs/Model/RuleJsonApiRelationshipsCartPromotions.md)
 - [RuleJsonApiRelationshipsCartPromotionsData](docs/Model/RuleJsonApiRelationshipsCartPromotionsData.md)
 - [RuleJsonApiRelationshipsCartPromotionsLinks](docs/Model/RuleJsonApiRelationshipsCartPromotionsLinks.md)
 - [RuleJsonApiRelationshipsConditions](docs/Model/RuleJsonApiRelationshipsConditions.md)
 - [RuleJsonApiRelationshipsConditionsData](docs/Model/RuleJsonApiRelationshipsConditionsData.md)
 - [RuleJsonApiRelationshipsConditionsLinks](docs/Model/RuleJsonApiRelationshipsConditionsLinks.md)
 - [RuleJsonApiRelationshipsEventActions](docs/Model/RuleJsonApiRelationshipsEventActions.md)
 - [RuleJsonApiRelationshipsEventActionsData](docs/Model/RuleJsonApiRelationshipsEventActionsData.md)
 - [RuleJsonApiRelationshipsEventActionsLinks](docs/Model/RuleJsonApiRelationshipsEventActionsLinks.md)
 - [RuleJsonApiRelationshipsFlowSequences](docs/Model/RuleJsonApiRelationshipsFlowSequences.md)
 - [RuleJsonApiRelationshipsFlowSequencesData](docs/Model/RuleJsonApiRelationshipsFlowSequencesData.md)
 - [RuleJsonApiRelationshipsFlowSequencesLinks](docs/Model/RuleJsonApiRelationshipsFlowSequencesLinks.md)
 - [RuleJsonApiRelationshipsOrderPromotions](docs/Model/RuleJsonApiRelationshipsOrderPromotions.md)
 - [RuleJsonApiRelationshipsOrderPromotionsData](docs/Model/RuleJsonApiRelationshipsOrderPromotionsData.md)
 - [RuleJsonApiRelationshipsOrderPromotionsLinks](docs/Model/RuleJsonApiRelationshipsOrderPromotionsLinks.md)
 - [RuleJsonApiRelationshipsPaymentMethods](docs/Model/RuleJsonApiRelationshipsPaymentMethods.md)
 - [RuleJsonApiRelationshipsPaymentMethodsData](docs/Model/RuleJsonApiRelationshipsPaymentMethodsData.md)
 - [RuleJsonApiRelationshipsPaymentMethodsLinks](docs/Model/RuleJsonApiRelationshipsPaymentMethodsLinks.md)
 - [RuleJsonApiRelationshipsPersonaPromotions](docs/Model/RuleJsonApiRelationshipsPersonaPromotions.md)
 - [RuleJsonApiRelationshipsPersonaPromotionsData](docs/Model/RuleJsonApiRelationshipsPersonaPromotionsData.md)
 - [RuleJsonApiRelationshipsPersonaPromotionsLinks](docs/Model/RuleJsonApiRelationshipsPersonaPromotionsLinks.md)
 - [RuleJsonApiRelationshipsProductPrices](docs/Model/RuleJsonApiRelationshipsProductPrices.md)
 - [RuleJsonApiRelationshipsProductPricesData](docs/Model/RuleJsonApiRelationshipsProductPricesData.md)
 - [RuleJsonApiRelationshipsProductPricesLinks](docs/Model/RuleJsonApiRelationshipsProductPricesLinks.md)
 - [RuleJsonApiRelationshipsPromotionDiscounts](docs/Model/RuleJsonApiRelationshipsPromotionDiscounts.md)
 - [RuleJsonApiRelationshipsPromotionDiscountsData](docs/Model/RuleJsonApiRelationshipsPromotionDiscountsData.md)
 - [RuleJsonApiRelationshipsPromotionDiscountsLinks](docs/Model/RuleJsonApiRelationshipsPromotionDiscountsLinks.md)
 - [RuleJsonApiRelationshipsPromotionSetGroups](docs/Model/RuleJsonApiRelationshipsPromotionSetGroups.md)
 - [RuleJsonApiRelationshipsPromotionSetGroupsData](docs/Model/RuleJsonApiRelationshipsPromotionSetGroupsData.md)
 - [RuleJsonApiRelationshipsPromotionSetGroupsLinks](docs/Model/RuleJsonApiRelationshipsPromotionSetGroupsLinks.md)
 - [RuleJsonApiRelationshipsShippingMethodPriceCalculations](docs/Model/RuleJsonApiRelationshipsShippingMethodPriceCalculations.md)
 - [RuleJsonApiRelationshipsShippingMethodPriceCalculationsData](docs/Model/RuleJsonApiRelationshipsShippingMethodPriceCalculationsData.md)
 - [RuleJsonApiRelationshipsShippingMethodPriceCalculationsLinks](docs/Model/RuleJsonApiRelationshipsShippingMethodPriceCalculationsLinks.md)
 - [RuleJsonApiRelationshipsShippingMethodPrices](docs/Model/RuleJsonApiRelationshipsShippingMethodPrices.md)
 - [RuleJsonApiRelationshipsShippingMethodPricesData](docs/Model/RuleJsonApiRelationshipsShippingMethodPricesData.md)
 - [RuleJsonApiRelationshipsShippingMethodPricesLinks](docs/Model/RuleJsonApiRelationshipsShippingMethodPricesLinks.md)
 - [RuleJsonApiRelationshipsShippingMethods](docs/Model/RuleJsonApiRelationshipsShippingMethods.md)
 - [RuleJsonApiRelationshipsShippingMethodsData](docs/Model/RuleJsonApiRelationshipsShippingMethodsData.md)
 - [RuleJsonApiRelationshipsShippingMethodsLinks](docs/Model/RuleJsonApiRelationshipsShippingMethodsLinks.md)
 - [RuleconditionBody](docs/Model/RuleconditionBody.md)
 - [RuleconditionIdBody](docs/Model/RuleconditionIdBody.md)
 - [SPluginNetzpStaging](docs/Model/SPluginNetzpStaging.md)
 - [SPluginNetzpStagingJsonApi](docs/Model/SPluginNetzpStagingJsonApi.md)
 - [SalesChannel](docs/Model/SalesChannel.md)
 - [SalesChannelAnalytics](docs/Model/SalesChannelAnalytics.md)
 - [SalesChannelAnalyticsJsonApi](docs/Model/SalesChannelAnalyticsJsonApi.md)
 - [SalesChannelAnalyticsJsonApiRelationships](docs/Model/SalesChannelAnalyticsJsonApiRelationships.md)
 - [SalesChannelAnalyticsJsonApiRelationshipsSalesChannel](docs/Model/SalesChannelAnalyticsJsonApiRelationshipsSalesChannel.md)
 - [SalesChannelAnalyticsJsonApiRelationshipsSalesChannelData](docs/Model/SalesChannelAnalyticsJsonApiRelationshipsSalesChannelData.md)
 - [SalesChannelAnalyticsJsonApiRelationshipsSalesChannelLinks](docs/Model/SalesChannelAnalyticsJsonApiRelationshipsSalesChannelLinks.md)
 - [SalesChannelCountry](docs/Model/SalesChannelCountry.md)
 - [SalesChannelCurrency](docs/Model/SalesChannelCurrency.md)
 - [SalesChannelDomain](docs/Model/SalesChannelDomain.md)
 - [SalesChannelDomainJsonApi](docs/Model/SalesChannelDomainJsonApi.md)
 - [SalesChannelDomainJsonApiRelationships](docs/Model/SalesChannelDomainJsonApiRelationships.md)
 - [SalesChannelDomainJsonApiRelationshipsCurrency](docs/Model/SalesChannelDomainJsonApiRelationshipsCurrency.md)
 - [SalesChannelDomainJsonApiRelationshipsCurrencyData](docs/Model/SalesChannelDomainJsonApiRelationshipsCurrencyData.md)
 - [SalesChannelDomainJsonApiRelationshipsCurrencyLinks](docs/Model/SalesChannelDomainJsonApiRelationshipsCurrencyLinks.md)
 - [SalesChannelDomainJsonApiRelationshipsLanguage](docs/Model/SalesChannelDomainJsonApiRelationshipsLanguage.md)
 - [SalesChannelDomainJsonApiRelationshipsLanguageData](docs/Model/SalesChannelDomainJsonApiRelationshipsLanguageData.md)
 - [SalesChannelDomainJsonApiRelationshipsLanguageLinks](docs/Model/SalesChannelDomainJsonApiRelationshipsLanguageLinks.md)
 - [SalesChannelDomainJsonApiRelationshipsProductExports](docs/Model/SalesChannelDomainJsonApiRelationshipsProductExports.md)
 - [SalesChannelDomainJsonApiRelationshipsProductExportsData](docs/Model/SalesChannelDomainJsonApiRelationshipsProductExportsData.md)
 - [SalesChannelDomainJsonApiRelationshipsProductExportsLinks](docs/Model/SalesChannelDomainJsonApiRelationshipsProductExportsLinks.md)
 - [SalesChannelDomainJsonApiRelationshipsSalesChannel](docs/Model/SalesChannelDomainJsonApiRelationshipsSalesChannel.md)
 - [SalesChannelDomainJsonApiRelationshipsSalesChannelData](docs/Model/SalesChannelDomainJsonApiRelationshipsSalesChannelData.md)
 - [SalesChannelDomainJsonApiRelationshipsSalesChannelDefaultHreflang](docs/Model/SalesChannelDomainJsonApiRelationshipsSalesChannelDefaultHreflang.md)
 - [SalesChannelDomainJsonApiRelationshipsSalesChannelDefaultHreflangData](docs/Model/SalesChannelDomainJsonApiRelationshipsSalesChannelDefaultHreflangData.md)
 - [SalesChannelDomainJsonApiRelationshipsSalesChannelDefaultHreflangLinks](docs/Model/SalesChannelDomainJsonApiRelationshipsSalesChannelDefaultHreflangLinks.md)
 - [SalesChannelDomainJsonApiRelationshipsSalesChannelLinks](docs/Model/SalesChannelDomainJsonApiRelationshipsSalesChannelLinks.md)
 - [SalesChannelDomainJsonApiRelationshipsSnippetSet](docs/Model/SalesChannelDomainJsonApiRelationshipsSnippetSet.md)
 - [SalesChannelDomainJsonApiRelationshipsSnippetSetData](docs/Model/SalesChannelDomainJsonApiRelationshipsSnippetSetData.md)
 - [SalesChannelDomainJsonApiRelationshipsSnippetSetLinks](docs/Model/SalesChannelDomainJsonApiRelationshipsSnippetSetLinks.md)
 - [SalesChannelJsonApi](docs/Model/SalesChannelJsonApi.md)
 - [SalesChannelJsonApiRelationships](docs/Model/SalesChannelJsonApiRelationships.md)
 - [SalesChannelJsonApiRelationshipsAnalytics](docs/Model/SalesChannelJsonApiRelationshipsAnalytics.md)
 - [SalesChannelJsonApiRelationshipsAnalyticsData](docs/Model/SalesChannelJsonApiRelationshipsAnalyticsData.md)
 - [SalesChannelJsonApiRelationshipsAnalyticsLinks](docs/Model/SalesChannelJsonApiRelationshipsAnalyticsLinks.md)
 - [SalesChannelJsonApiRelationshipsBoundCustomers](docs/Model/SalesChannelJsonApiRelationshipsBoundCustomers.md)
 - [SalesChannelJsonApiRelationshipsBoundCustomersData](docs/Model/SalesChannelJsonApiRelationshipsBoundCustomersData.md)
 - [SalesChannelJsonApiRelationshipsBoundCustomersLinks](docs/Model/SalesChannelJsonApiRelationshipsBoundCustomersLinks.md)
 - [SalesChannelJsonApiRelationshipsCountries](docs/Model/SalesChannelJsonApiRelationshipsCountries.md)
 - [SalesChannelJsonApiRelationshipsCountriesData](docs/Model/SalesChannelJsonApiRelationshipsCountriesData.md)
 - [SalesChannelJsonApiRelationshipsCountriesLinks](docs/Model/SalesChannelJsonApiRelationshipsCountriesLinks.md)
 - [SalesChannelJsonApiRelationshipsCountry](docs/Model/SalesChannelJsonApiRelationshipsCountry.md)
 - [SalesChannelJsonApiRelationshipsCountryData](docs/Model/SalesChannelJsonApiRelationshipsCountryData.md)
 - [SalesChannelJsonApiRelationshipsCountryLinks](docs/Model/SalesChannelJsonApiRelationshipsCountryLinks.md)
 - [SalesChannelJsonApiRelationshipsCurrencies](docs/Model/SalesChannelJsonApiRelationshipsCurrencies.md)
 - [SalesChannelJsonApiRelationshipsCurrenciesData](docs/Model/SalesChannelJsonApiRelationshipsCurrenciesData.md)
 - [SalesChannelJsonApiRelationshipsCurrenciesLinks](docs/Model/SalesChannelJsonApiRelationshipsCurrenciesLinks.md)
 - [SalesChannelJsonApiRelationshipsCurrency](docs/Model/SalesChannelJsonApiRelationshipsCurrency.md)
 - [SalesChannelJsonApiRelationshipsCurrencyData](docs/Model/SalesChannelJsonApiRelationshipsCurrencyData.md)
 - [SalesChannelJsonApiRelationshipsCurrencyLinks](docs/Model/SalesChannelJsonApiRelationshipsCurrencyLinks.md)
 - [SalesChannelJsonApiRelationshipsCustomerGroup](docs/Model/SalesChannelJsonApiRelationshipsCustomerGroup.md)
 - [SalesChannelJsonApiRelationshipsCustomerGroupData](docs/Model/SalesChannelJsonApiRelationshipsCustomerGroupData.md)
 - [SalesChannelJsonApiRelationshipsCustomerGroupLinks](docs/Model/SalesChannelJsonApiRelationshipsCustomerGroupLinks.md)
 - [SalesChannelJsonApiRelationshipsCustomerGroupsRegistrations](docs/Model/SalesChannelJsonApiRelationshipsCustomerGroupsRegistrations.md)
 - [SalesChannelJsonApiRelationshipsCustomerGroupsRegistrationsData](docs/Model/SalesChannelJsonApiRelationshipsCustomerGroupsRegistrationsData.md)
 - [SalesChannelJsonApiRelationshipsCustomerGroupsRegistrationsLinks](docs/Model/SalesChannelJsonApiRelationshipsCustomerGroupsRegistrationsLinks.md)
 - [SalesChannelJsonApiRelationshipsCustomers](docs/Model/SalesChannelJsonApiRelationshipsCustomers.md)
 - [SalesChannelJsonApiRelationshipsCustomersData](docs/Model/SalesChannelJsonApiRelationshipsCustomersData.md)
 - [SalesChannelJsonApiRelationshipsCustomersLinks](docs/Model/SalesChannelJsonApiRelationshipsCustomersLinks.md)
 - [SalesChannelJsonApiRelationshipsDocumentBaseConfigSalesChannels](docs/Model/SalesChannelJsonApiRelationshipsDocumentBaseConfigSalesChannels.md)
 - [SalesChannelJsonApiRelationshipsDocumentBaseConfigSalesChannelsData](docs/Model/SalesChannelJsonApiRelationshipsDocumentBaseConfigSalesChannelsData.md)
 - [SalesChannelJsonApiRelationshipsDocumentBaseConfigSalesChannelsLinks](docs/Model/SalesChannelJsonApiRelationshipsDocumentBaseConfigSalesChannelsLinks.md)
 - [SalesChannelJsonApiRelationshipsDomains](docs/Model/SalesChannelJsonApiRelationshipsDomains.md)
 - [SalesChannelJsonApiRelationshipsDomainsData](docs/Model/SalesChannelJsonApiRelationshipsDomainsData.md)
 - [SalesChannelJsonApiRelationshipsDomainsLinks](docs/Model/SalesChannelJsonApiRelationshipsDomainsLinks.md)
 - [SalesChannelJsonApiRelationshipsEventActions](docs/Model/SalesChannelJsonApiRelationshipsEventActions.md)
 - [SalesChannelJsonApiRelationshipsEventActionsData](docs/Model/SalesChannelJsonApiRelationshipsEventActionsData.md)
 - [SalesChannelJsonApiRelationshipsEventActionsLinks](docs/Model/SalesChannelJsonApiRelationshipsEventActionsLinks.md)
 - [SalesChannelJsonApiRelationshipsFooterCategory](docs/Model/SalesChannelJsonApiRelationshipsFooterCategory.md)
 - [SalesChannelJsonApiRelationshipsFooterCategoryData](docs/Model/SalesChannelJsonApiRelationshipsFooterCategoryData.md)
 - [SalesChannelJsonApiRelationshipsFooterCategoryLinks](docs/Model/SalesChannelJsonApiRelationshipsFooterCategoryLinks.md)
 - [SalesChannelJsonApiRelationshipsHomeCmsPage](docs/Model/SalesChannelJsonApiRelationshipsHomeCmsPage.md)
 - [SalesChannelJsonApiRelationshipsHomeCmsPageData](docs/Model/SalesChannelJsonApiRelationshipsHomeCmsPageData.md)
 - [SalesChannelJsonApiRelationshipsHomeCmsPageLinks](docs/Model/SalesChannelJsonApiRelationshipsHomeCmsPageLinks.md)
 - [SalesChannelJsonApiRelationshipsHreflangDefaultDomain](docs/Model/SalesChannelJsonApiRelationshipsHreflangDefaultDomain.md)
 - [SalesChannelJsonApiRelationshipsHreflangDefaultDomainData](docs/Model/SalesChannelJsonApiRelationshipsHreflangDefaultDomainData.md)
 - [SalesChannelJsonApiRelationshipsHreflangDefaultDomainLinks](docs/Model/SalesChannelJsonApiRelationshipsHreflangDefaultDomainLinks.md)
 - [SalesChannelJsonApiRelationshipsLandingPages](docs/Model/SalesChannelJsonApiRelationshipsLandingPages.md)
 - [SalesChannelJsonApiRelationshipsLandingPagesData](docs/Model/SalesChannelJsonApiRelationshipsLandingPagesData.md)
 - [SalesChannelJsonApiRelationshipsLandingPagesLinks](docs/Model/SalesChannelJsonApiRelationshipsLandingPagesLinks.md)
 - [SalesChannelJsonApiRelationshipsLanguage](docs/Model/SalesChannelJsonApiRelationshipsLanguage.md)
 - [SalesChannelJsonApiRelationshipsLanguageData](docs/Model/SalesChannelJsonApiRelationshipsLanguageData.md)
 - [SalesChannelJsonApiRelationshipsLanguageLinks](docs/Model/SalesChannelJsonApiRelationshipsLanguageLinks.md)
 - [SalesChannelJsonApiRelationshipsLanguages](docs/Model/SalesChannelJsonApiRelationshipsLanguages.md)
 - [SalesChannelJsonApiRelationshipsLanguagesData](docs/Model/SalesChannelJsonApiRelationshipsLanguagesData.md)
 - [SalesChannelJsonApiRelationshipsLanguagesLinks](docs/Model/SalesChannelJsonApiRelationshipsLanguagesLinks.md)
 - [SalesChannelJsonApiRelationshipsMailHeaderFooter](docs/Model/SalesChannelJsonApiRelationshipsMailHeaderFooter.md)
 - [SalesChannelJsonApiRelationshipsMailHeaderFooterData](docs/Model/SalesChannelJsonApiRelationshipsMailHeaderFooterData.md)
 - [SalesChannelJsonApiRelationshipsMailHeaderFooterLinks](docs/Model/SalesChannelJsonApiRelationshipsMailHeaderFooterLinks.md)
 - [SalesChannelJsonApiRelationshipsMainCategories](docs/Model/SalesChannelJsonApiRelationshipsMainCategories.md)
 - [SalesChannelJsonApiRelationshipsMainCategoriesData](docs/Model/SalesChannelJsonApiRelationshipsMainCategoriesData.md)
 - [SalesChannelJsonApiRelationshipsMainCategoriesLinks](docs/Model/SalesChannelJsonApiRelationshipsMainCategoriesLinks.md)
 - [SalesChannelJsonApiRelationshipsNavigationCategory](docs/Model/SalesChannelJsonApiRelationshipsNavigationCategory.md)
 - [SalesChannelJsonApiRelationshipsNavigationCategoryData](docs/Model/SalesChannelJsonApiRelationshipsNavigationCategoryData.md)
 - [SalesChannelJsonApiRelationshipsNavigationCategoryLinks](docs/Model/SalesChannelJsonApiRelationshipsNavigationCategoryLinks.md)
 - [SalesChannelJsonApiRelationshipsNewsletterRecipients](docs/Model/SalesChannelJsonApiRelationshipsNewsletterRecipients.md)
 - [SalesChannelJsonApiRelationshipsNewsletterRecipientsData](docs/Model/SalesChannelJsonApiRelationshipsNewsletterRecipientsData.md)
 - [SalesChannelJsonApiRelationshipsNewsletterRecipientsLinks](docs/Model/SalesChannelJsonApiRelationshipsNewsletterRecipientsLinks.md)
 - [SalesChannelJsonApiRelationshipsNumberRangeSalesChannels](docs/Model/SalesChannelJsonApiRelationshipsNumberRangeSalesChannels.md)
 - [SalesChannelJsonApiRelationshipsNumberRangeSalesChannelsData](docs/Model/SalesChannelJsonApiRelationshipsNumberRangeSalesChannelsData.md)
 - [SalesChannelJsonApiRelationshipsNumberRangeSalesChannelsLinks](docs/Model/SalesChannelJsonApiRelationshipsNumberRangeSalesChannelsLinks.md)
 - [SalesChannelJsonApiRelationshipsOrders](docs/Model/SalesChannelJsonApiRelationshipsOrders.md)
 - [SalesChannelJsonApiRelationshipsOrdersData](docs/Model/SalesChannelJsonApiRelationshipsOrdersData.md)
 - [SalesChannelJsonApiRelationshipsOrdersLinks](docs/Model/SalesChannelJsonApiRelationshipsOrdersLinks.md)
 - [SalesChannelJsonApiRelationshipsPaymentMethod](docs/Model/SalesChannelJsonApiRelationshipsPaymentMethod.md)
 - [SalesChannelJsonApiRelationshipsPaymentMethodData](docs/Model/SalesChannelJsonApiRelationshipsPaymentMethodData.md)
 - [SalesChannelJsonApiRelationshipsPaymentMethodLinks](docs/Model/SalesChannelJsonApiRelationshipsPaymentMethodLinks.md)
 - [SalesChannelJsonApiRelationshipsPaymentMethods](docs/Model/SalesChannelJsonApiRelationshipsPaymentMethods.md)
 - [SalesChannelJsonApiRelationshipsPaymentMethodsData](docs/Model/SalesChannelJsonApiRelationshipsPaymentMethodsData.md)
 - [SalesChannelJsonApiRelationshipsPaymentMethodsLinks](docs/Model/SalesChannelJsonApiRelationshipsPaymentMethodsLinks.md)
 - [SalesChannelJsonApiRelationshipsProductExports](docs/Model/SalesChannelJsonApiRelationshipsProductExports.md)
 - [SalesChannelJsonApiRelationshipsProductExportsData](docs/Model/SalesChannelJsonApiRelationshipsProductExportsData.md)
 - [SalesChannelJsonApiRelationshipsProductExportsLinks](docs/Model/SalesChannelJsonApiRelationshipsProductExportsLinks.md)
 - [SalesChannelJsonApiRelationshipsProductReviews](docs/Model/SalesChannelJsonApiRelationshipsProductReviews.md)
 - [SalesChannelJsonApiRelationshipsProductReviewsData](docs/Model/SalesChannelJsonApiRelationshipsProductReviewsData.md)
 - [SalesChannelJsonApiRelationshipsProductReviewsLinks](docs/Model/SalesChannelJsonApiRelationshipsProductReviewsLinks.md)
 - [SalesChannelJsonApiRelationshipsProductVisibilities](docs/Model/SalesChannelJsonApiRelationshipsProductVisibilities.md)
 - [SalesChannelJsonApiRelationshipsProductVisibilitiesData](docs/Model/SalesChannelJsonApiRelationshipsProductVisibilitiesData.md)
 - [SalesChannelJsonApiRelationshipsProductVisibilitiesLinks](docs/Model/SalesChannelJsonApiRelationshipsProductVisibilitiesLinks.md)
 - [SalesChannelJsonApiRelationshipsPromotionSalesChannels](docs/Model/SalesChannelJsonApiRelationshipsPromotionSalesChannels.md)
 - [SalesChannelJsonApiRelationshipsPromotionSalesChannelsData](docs/Model/SalesChannelJsonApiRelationshipsPromotionSalesChannelsData.md)
 - [SalesChannelJsonApiRelationshipsPromotionSalesChannelsLinks](docs/Model/SalesChannelJsonApiRelationshipsPromotionSalesChannelsLinks.md)
 - [SalesChannelJsonApiRelationshipsSeoUrlTemplates](docs/Model/SalesChannelJsonApiRelationshipsSeoUrlTemplates.md)
 - [SalesChannelJsonApiRelationshipsSeoUrlTemplatesData](docs/Model/SalesChannelJsonApiRelationshipsSeoUrlTemplatesData.md)
 - [SalesChannelJsonApiRelationshipsSeoUrlTemplatesLinks](docs/Model/SalesChannelJsonApiRelationshipsSeoUrlTemplatesLinks.md)
 - [SalesChannelJsonApiRelationshipsSeoUrls](docs/Model/SalesChannelJsonApiRelationshipsSeoUrls.md)
 - [SalesChannelJsonApiRelationshipsSeoUrlsData](docs/Model/SalesChannelJsonApiRelationshipsSeoUrlsData.md)
 - [SalesChannelJsonApiRelationshipsSeoUrlsLinks](docs/Model/SalesChannelJsonApiRelationshipsSeoUrlsLinks.md)
 - [SalesChannelJsonApiRelationshipsServiceCategory](docs/Model/SalesChannelJsonApiRelationshipsServiceCategory.md)
 - [SalesChannelJsonApiRelationshipsServiceCategoryData](docs/Model/SalesChannelJsonApiRelationshipsServiceCategoryData.md)
 - [SalesChannelJsonApiRelationshipsServiceCategoryLinks](docs/Model/SalesChannelJsonApiRelationshipsServiceCategoryLinks.md)
 - [SalesChannelJsonApiRelationshipsShippingMethod](docs/Model/SalesChannelJsonApiRelationshipsShippingMethod.md)
 - [SalesChannelJsonApiRelationshipsShippingMethodData](docs/Model/SalesChannelJsonApiRelationshipsShippingMethodData.md)
 - [SalesChannelJsonApiRelationshipsShippingMethodLinks](docs/Model/SalesChannelJsonApiRelationshipsShippingMethodLinks.md)
 - [SalesChannelJsonApiRelationshipsShippingMethods](docs/Model/SalesChannelJsonApiRelationshipsShippingMethods.md)
 - [SalesChannelJsonApiRelationshipsShippingMethodsData](docs/Model/SalesChannelJsonApiRelationshipsShippingMethodsData.md)
 - [SalesChannelJsonApiRelationshipsShippingMethodsLinks](docs/Model/SalesChannelJsonApiRelationshipsShippingMethodsLinks.md)
 - [SalesChannelJsonApiRelationshipsSystemConfigs](docs/Model/SalesChannelJsonApiRelationshipsSystemConfigs.md)
 - [SalesChannelJsonApiRelationshipsSystemConfigsData](docs/Model/SalesChannelJsonApiRelationshipsSystemConfigsData.md)
 - [SalesChannelJsonApiRelationshipsSystemConfigsLinks](docs/Model/SalesChannelJsonApiRelationshipsSystemConfigsLinks.md)
 - [SalesChannelJsonApiRelationshipsType](docs/Model/SalesChannelJsonApiRelationshipsType.md)
 - [SalesChannelJsonApiRelationshipsTypeData](docs/Model/SalesChannelJsonApiRelationshipsTypeData.md)
 - [SalesChannelJsonApiRelationshipsTypeLinks](docs/Model/SalesChannelJsonApiRelationshipsTypeLinks.md)
 - [SalesChannelJsonApiRelationshipsWishlists](docs/Model/SalesChannelJsonApiRelationshipsWishlists.md)
 - [SalesChannelJsonApiRelationshipsWishlistsData](docs/Model/SalesChannelJsonApiRelationshipsWishlistsData.md)
 - [SalesChannelJsonApiRelationshipsWishlistsLinks](docs/Model/SalesChannelJsonApiRelationshipsWishlistsLinks.md)
 - [SalesChannelLanguage](docs/Model/SalesChannelLanguage.md)
 - [SalesChannelPaymentMethod](docs/Model/SalesChannelPaymentMethod.md)
 - [SalesChannelShippingMethod](docs/Model/SalesChannelShippingMethod.md)
 - [SalesChannelType](docs/Model/SalesChannelType.md)
 - [SalesChannelTypeJsonApi](docs/Model/SalesChannelTypeJsonApi.md)
 - [SalesChannelTypeJsonApiRelationships](docs/Model/SalesChannelTypeJsonApiRelationships.md)
 - [SalesChannelTypeJsonApiRelationshipsSalesChannels](docs/Model/SalesChannelTypeJsonApiRelationshipsSalesChannels.md)
 - [SalesChannelTypeJsonApiRelationshipsSalesChannelsData](docs/Model/SalesChannelTypeJsonApiRelationshipsSalesChannelsData.md)
 - [SalesChannelTypeJsonApiRelationshipsSalesChannelsLinks](docs/Model/SalesChannelTypeJsonApiRelationshipsSalesChannelsLinks.md)
 - [SaleschannelBody](docs/Model/SaleschannelBody.md)
 - [SaleschannelIdBody](docs/Model/SaleschannelIdBody.md)
 - [SaleschannelanalyticsBody](docs/Model/SaleschannelanalyticsBody.md)
 - [SaleschannelanalyticsIdBody](docs/Model/SaleschannelanalyticsIdBody.md)
 - [SaleschanneldomainBody](docs/Model/SaleschanneldomainBody.md)
 - [SaleschanneldomainIdBody](docs/Model/SaleschanneldomainIdBody.md)
 - [SaleschanneltypeBody](docs/Model/SaleschanneltypeBody.md)
 - [SaleschanneltypeIdBody](docs/Model/SaleschanneltypeIdBody.md)
 - [Salutation](docs/Model/Salutation.md)
 - [SalutationBody](docs/Model/SalutationBody.md)
 - [SalutationIdBody](docs/Model/SalutationIdBody.md)
 - [SalutationJsonApi](docs/Model/SalutationJsonApi.md)
 - [SalutationJsonApiRelationships](docs/Model/SalutationJsonApiRelationships.md)
 - [SalutationJsonApiRelationshipsCustomerAddresses](docs/Model/SalutationJsonApiRelationshipsCustomerAddresses.md)
 - [SalutationJsonApiRelationshipsCustomerAddressesData](docs/Model/SalutationJsonApiRelationshipsCustomerAddressesData.md)
 - [SalutationJsonApiRelationshipsCustomerAddressesLinks](docs/Model/SalutationJsonApiRelationshipsCustomerAddressesLinks.md)
 - [SalutationJsonApiRelationshipsCustomers](docs/Model/SalutationJsonApiRelationshipsCustomers.md)
 - [SalutationJsonApiRelationshipsCustomersData](docs/Model/SalutationJsonApiRelationshipsCustomersData.md)
 - [SalutationJsonApiRelationshipsCustomersLinks](docs/Model/SalutationJsonApiRelationshipsCustomersLinks.md)
 - [SalutationJsonApiRelationshipsNewsletterRecipients](docs/Model/SalutationJsonApiRelationshipsNewsletterRecipients.md)
 - [SalutationJsonApiRelationshipsNewsletterRecipientsData](docs/Model/SalutationJsonApiRelationshipsNewsletterRecipientsData.md)
 - [SalutationJsonApiRelationshipsNewsletterRecipientsLinks](docs/Model/SalutationJsonApiRelationshipsNewsletterRecipientsLinks.md)
 - [SalutationJsonApiRelationshipsOrderAddresses](docs/Model/SalutationJsonApiRelationshipsOrderAddresses.md)
 - [SalutationJsonApiRelationshipsOrderAddressesData](docs/Model/SalutationJsonApiRelationshipsOrderAddressesData.md)
 - [SalutationJsonApiRelationshipsOrderAddressesLinks](docs/Model/SalutationJsonApiRelationshipsOrderAddressesLinks.md)
 - [SalutationJsonApiRelationshipsOrderCustomers](docs/Model/SalutationJsonApiRelationshipsOrderCustomers.md)
 - [SalutationJsonApiRelationshipsOrderCustomersData](docs/Model/SalutationJsonApiRelationshipsOrderCustomersData.md)
 - [SalutationJsonApiRelationshipsOrderCustomersLinks](docs/Model/SalutationJsonApiRelationshipsOrderCustomersLinks.md)
 - [SasBlogAuthor](docs/Model/SasBlogAuthor.md)
 - [SasBlogAuthorJsonApi](docs/Model/SasBlogAuthorJsonApi.md)
 - [SasBlogAuthorJsonApiRelationships](docs/Model/SasBlogAuthorJsonApiRelationships.md)
 - [SasBlogAuthorJsonApiRelationshipsBlogs](docs/Model/SasBlogAuthorJsonApiRelationshipsBlogs.md)
 - [SasBlogAuthorJsonApiRelationshipsBlogsData](docs/Model/SasBlogAuthorJsonApiRelationshipsBlogsData.md)
 - [SasBlogAuthorJsonApiRelationshipsBlogsLinks](docs/Model/SasBlogAuthorJsonApiRelationshipsBlogsLinks.md)
 - [SasBlogAuthorJsonApiRelationshipsMedia](docs/Model/SasBlogAuthorJsonApiRelationshipsMedia.md)
 - [SasBlogAuthorJsonApiRelationshipsMediaData](docs/Model/SasBlogAuthorJsonApiRelationshipsMediaData.md)
 - [SasBlogAuthorJsonApiRelationshipsMediaLinks](docs/Model/SasBlogAuthorJsonApiRelationshipsMediaLinks.md)
 - [SasBlogAuthorJsonApiRelationshipsSalutation](docs/Model/SasBlogAuthorJsonApiRelationshipsSalutation.md)
 - [SasBlogAuthorJsonApiRelationshipsSalutationData](docs/Model/SasBlogAuthorJsonApiRelationshipsSalutationData.md)
 - [SasBlogAuthorJsonApiRelationshipsSalutationLinks](docs/Model/SasBlogAuthorJsonApiRelationshipsSalutationLinks.md)
 - [SasBlogBlogCategory](docs/Model/SasBlogBlogCategory.md)
 - [SasBlogCategory](docs/Model/SasBlogCategory.md)
 - [SasBlogCategoryJsonApi](docs/Model/SasBlogCategoryJsonApi.md)
 - [SasBlogCategoryJsonApiRelationships](docs/Model/SasBlogCategoryJsonApiRelationships.md)
 - [SasBlogCategoryJsonApiRelationshipsBlogs](docs/Model/SasBlogCategoryJsonApiRelationshipsBlogs.md)
 - [SasBlogCategoryJsonApiRelationshipsBlogsData](docs/Model/SasBlogCategoryJsonApiRelationshipsBlogsData.md)
 - [SasBlogCategoryJsonApiRelationshipsBlogsLinks](docs/Model/SasBlogCategoryJsonApiRelationshipsBlogsLinks.md)
 - [SasBlogCategoryJsonApiRelationshipsChildren](docs/Model/SasBlogCategoryJsonApiRelationshipsChildren.md)
 - [SasBlogCategoryJsonApiRelationshipsChildrenData](docs/Model/SasBlogCategoryJsonApiRelationshipsChildrenData.md)
 - [SasBlogCategoryJsonApiRelationshipsChildrenLinks](docs/Model/SasBlogCategoryJsonApiRelationshipsChildrenLinks.md)
 - [SasBlogCategoryJsonApiRelationshipsFooterSalesChannels](docs/Model/SasBlogCategoryJsonApiRelationshipsFooterSalesChannels.md)
 - [SasBlogCategoryJsonApiRelationshipsFooterSalesChannelsData](docs/Model/SasBlogCategoryJsonApiRelationshipsFooterSalesChannelsData.md)
 - [SasBlogCategoryJsonApiRelationshipsFooterSalesChannelsLinks](docs/Model/SasBlogCategoryJsonApiRelationshipsFooterSalesChannelsLinks.md)
 - [SasBlogCategoryJsonApiRelationshipsNavigationSalesChannels](docs/Model/SasBlogCategoryJsonApiRelationshipsNavigationSalesChannels.md)
 - [SasBlogCategoryJsonApiRelationshipsNavigationSalesChannelsData](docs/Model/SasBlogCategoryJsonApiRelationshipsNavigationSalesChannelsData.md)
 - [SasBlogCategoryJsonApiRelationshipsNavigationSalesChannelsLinks](docs/Model/SasBlogCategoryJsonApiRelationshipsNavigationSalesChannelsLinks.md)
 - [SasBlogCategoryJsonApiRelationshipsParent](docs/Model/SasBlogCategoryJsonApiRelationshipsParent.md)
 - [SasBlogCategoryJsonApiRelationshipsParentData](docs/Model/SasBlogCategoryJsonApiRelationshipsParentData.md)
 - [SasBlogCategoryJsonApiRelationshipsParentLinks](docs/Model/SasBlogCategoryJsonApiRelationshipsParentLinks.md)
 - [SasBlogCategoryJsonApiRelationshipsServiceSalesChannels](docs/Model/SasBlogCategoryJsonApiRelationshipsServiceSalesChannels.md)
 - [SasBlogCategoryJsonApiRelationshipsServiceSalesChannelsData](docs/Model/SasBlogCategoryJsonApiRelationshipsServiceSalesChannelsData.md)
 - [SasBlogCategoryJsonApiRelationshipsServiceSalesChannelsLinks](docs/Model/SasBlogCategoryJsonApiRelationshipsServiceSalesChannelsLinks.md)
 - [SasBlogEntries](docs/Model/SasBlogEntries.md)
 - [SasBlogEntriesJsonApi](docs/Model/SasBlogEntriesJsonApi.md)
 - [SasBlogEntriesJsonApiRelationships](docs/Model/SasBlogEntriesJsonApiRelationships.md)
 - [SasBlogEntriesJsonApiRelationshipsAuthor](docs/Model/SasBlogEntriesJsonApiRelationshipsAuthor.md)
 - [SasBlogEntriesJsonApiRelationshipsAuthorData](docs/Model/SasBlogEntriesJsonApiRelationshipsAuthorData.md)
 - [SasBlogEntriesJsonApiRelationshipsAuthorLinks](docs/Model/SasBlogEntriesJsonApiRelationshipsAuthorLinks.md)
 - [SasBlogEntriesJsonApiRelationshipsBlogCategories](docs/Model/SasBlogEntriesJsonApiRelationshipsBlogCategories.md)
 - [SasBlogEntriesJsonApiRelationshipsBlogCategoriesData](docs/Model/SasBlogEntriesJsonApiRelationshipsBlogCategoriesData.md)
 - [SasBlogEntriesJsonApiRelationshipsBlogCategoriesLinks](docs/Model/SasBlogEntriesJsonApiRelationshipsBlogCategoriesLinks.md)
 - [SasBlogEntriesJsonApiRelationshipsMedia](docs/Model/SasBlogEntriesJsonApiRelationshipsMedia.md)
 - [SasBlogEntriesJsonApiRelationshipsMediaData](docs/Model/SasBlogEntriesJsonApiRelationshipsMediaData.md)
 - [SasBlogEntriesJsonApiRelationshipsMediaLinks](docs/Model/SasBlogEntriesJsonApiRelationshipsMediaLinks.md)
 - [SasblogauthorBody](docs/Model/SasblogauthorBody.md)
 - [SasblogauthorIdBody](docs/Model/SasblogauthorIdBody.md)
 - [SasblogcategoryBody](docs/Model/SasblogcategoryBody.md)
 - [SasblogcategoryIdBody](docs/Model/SasblogcategoryIdBody.md)
 - [SasblogentriesBody](docs/Model/SasblogentriesBody.md)
 - [SasblogentriesIdBody](docs/Model/SasblogentriesIdBody.md)
 - [ScheduledTask](docs/Model/ScheduledTask.md)
 - [ScheduledTaskJsonApi](docs/Model/ScheduledTaskJsonApi.md)
 - [ScheduledTaskJsonApiRelationships](docs/Model/ScheduledTaskJsonApiRelationships.md)
 - [ScheduledTaskJsonApiRelationshipsDeadMessages](docs/Model/ScheduledTaskJsonApiRelationshipsDeadMessages.md)
 - [ScheduledTaskJsonApiRelationshipsDeadMessagesData](docs/Model/ScheduledTaskJsonApiRelationshipsDeadMessagesData.md)
 - [ScheduledTaskJsonApiRelationshipsDeadMessagesLinks](docs/Model/ScheduledTaskJsonApiRelationshipsDeadMessagesLinks.md)
 - [ScheduledtaskBody](docs/Model/ScheduledtaskBody.md)
 - [ScheduledtaskIdBody](docs/Model/ScheduledtaskIdBody.md)
 - [Script](docs/Model/Script.md)
 - [ScriptBody](docs/Model/ScriptBody.md)
 - [ScriptIdBody](docs/Model/ScriptIdBody.md)
 - [ScriptJsonApi](docs/Model/ScriptJsonApi.md)
 - [ScriptJsonApiRelationships](docs/Model/ScriptJsonApiRelationships.md)
 - [ScriptJsonApiRelationshipsApp](docs/Model/ScriptJsonApiRelationshipsApp.md)
 - [ScriptJsonApiRelationshipsAppData](docs/Model/ScriptJsonApiRelationshipsAppData.md)
 - [ScriptJsonApiRelationshipsAppLinks](docs/Model/ScriptJsonApiRelationshipsAppLinks.md)
 - [SeoUrl](docs/Model/SeoUrl.md)
 - [SeoUrlJsonApi](docs/Model/SeoUrlJsonApi.md)
 - [SeoUrlJsonApiRelationships](docs/Model/SeoUrlJsonApiRelationships.md)
 - [SeoUrlJsonApiRelationshipsLanguage](docs/Model/SeoUrlJsonApiRelationshipsLanguage.md)
 - [SeoUrlJsonApiRelationshipsLanguageData](docs/Model/SeoUrlJsonApiRelationshipsLanguageData.md)
 - [SeoUrlJsonApiRelationshipsLanguageLinks](docs/Model/SeoUrlJsonApiRelationshipsLanguageLinks.md)
 - [SeoUrlJsonApiRelationshipsSalesChannel](docs/Model/SeoUrlJsonApiRelationshipsSalesChannel.md)
 - [SeoUrlJsonApiRelationshipsSalesChannelData](docs/Model/SeoUrlJsonApiRelationshipsSalesChannelData.md)
 - [SeoUrlJsonApiRelationshipsSalesChannelLinks](docs/Model/SeoUrlJsonApiRelationshipsSalesChannelLinks.md)
 - [SeoUrlTemplate](docs/Model/SeoUrlTemplate.md)
 - [SeoUrlTemplateJsonApi](docs/Model/SeoUrlTemplateJsonApi.md)
 - [SeoUrlTemplateJsonApiRelationships](docs/Model/SeoUrlTemplateJsonApiRelationships.md)
 - [SeoUrlTemplateJsonApiRelationshipsSalesChannel](docs/Model/SeoUrlTemplateJsonApiRelationshipsSalesChannel.md)
 - [SeoUrlTemplateJsonApiRelationshipsSalesChannelData](docs/Model/SeoUrlTemplateJsonApiRelationshipsSalesChannelData.md)
 - [SeoUrlTemplateJsonApiRelationshipsSalesChannelLinks](docs/Model/SeoUrlTemplateJsonApiRelationshipsSalesChannelLinks.md)
 - [SeourlBody](docs/Model/SeourlBody.md)
 - [SeourlIdBody](docs/Model/SeourlIdBody.md)
 - [SeourltemplateBody](docs/Model/SeourltemplateBody.md)
 - [SeourltemplateIdBody](docs/Model/SeourltemplateIdBody.md)
 - [ShippingMethod](docs/Model/ShippingMethod.md)
 - [ShippingMethodJsonApi](docs/Model/ShippingMethodJsonApi.md)
 - [ShippingMethodJsonApiRelationships](docs/Model/ShippingMethodJsonApiRelationships.md)
 - [ShippingMethodJsonApiRelationshipsAvailabilityRule](docs/Model/ShippingMethodJsonApiRelationshipsAvailabilityRule.md)
 - [ShippingMethodJsonApiRelationshipsAvailabilityRuleData](docs/Model/ShippingMethodJsonApiRelationshipsAvailabilityRuleData.md)
 - [ShippingMethodJsonApiRelationshipsAvailabilityRuleLinks](docs/Model/ShippingMethodJsonApiRelationshipsAvailabilityRuleLinks.md)
 - [ShippingMethodJsonApiRelationshipsDeliveryTime](docs/Model/ShippingMethodJsonApiRelationshipsDeliveryTime.md)
 - [ShippingMethodJsonApiRelationshipsDeliveryTimeData](docs/Model/ShippingMethodJsonApiRelationshipsDeliveryTimeData.md)
 - [ShippingMethodJsonApiRelationshipsDeliveryTimeLinks](docs/Model/ShippingMethodJsonApiRelationshipsDeliveryTimeLinks.md)
 - [ShippingMethodJsonApiRelationshipsMedia](docs/Model/ShippingMethodJsonApiRelationshipsMedia.md)
 - [ShippingMethodJsonApiRelationshipsMediaData](docs/Model/ShippingMethodJsonApiRelationshipsMediaData.md)
 - [ShippingMethodJsonApiRelationshipsMediaLinks](docs/Model/ShippingMethodJsonApiRelationshipsMediaLinks.md)
 - [ShippingMethodJsonApiRelationshipsOrderDeliveries](docs/Model/ShippingMethodJsonApiRelationshipsOrderDeliveries.md)
 - [ShippingMethodJsonApiRelationshipsOrderDeliveriesData](docs/Model/ShippingMethodJsonApiRelationshipsOrderDeliveriesData.md)
 - [ShippingMethodJsonApiRelationshipsOrderDeliveriesLinks](docs/Model/ShippingMethodJsonApiRelationshipsOrderDeliveriesLinks.md)
 - [ShippingMethodJsonApiRelationshipsPrices](docs/Model/ShippingMethodJsonApiRelationshipsPrices.md)
 - [ShippingMethodJsonApiRelationshipsPricesData](docs/Model/ShippingMethodJsonApiRelationshipsPricesData.md)
 - [ShippingMethodJsonApiRelationshipsPricesLinks](docs/Model/ShippingMethodJsonApiRelationshipsPricesLinks.md)
 - [ShippingMethodJsonApiRelationshipsSalesChannelDefaultAssignments](docs/Model/ShippingMethodJsonApiRelationshipsSalesChannelDefaultAssignments.md)
 - [ShippingMethodJsonApiRelationshipsSalesChannelDefaultAssignmentsData](docs/Model/ShippingMethodJsonApiRelationshipsSalesChannelDefaultAssignmentsData.md)
 - [ShippingMethodJsonApiRelationshipsSalesChannelDefaultAssignmentsLinks](docs/Model/ShippingMethodJsonApiRelationshipsSalesChannelDefaultAssignmentsLinks.md)
 - [ShippingMethodJsonApiRelationshipsSalesChannels](docs/Model/ShippingMethodJsonApiRelationshipsSalesChannels.md)
 - [ShippingMethodJsonApiRelationshipsSalesChannelsData](docs/Model/ShippingMethodJsonApiRelationshipsSalesChannelsData.md)
 - [ShippingMethodJsonApiRelationshipsSalesChannelsLinks](docs/Model/ShippingMethodJsonApiRelationshipsSalesChannelsLinks.md)
 - [ShippingMethodJsonApiRelationshipsTags](docs/Model/ShippingMethodJsonApiRelationshipsTags.md)
 - [ShippingMethodJsonApiRelationshipsTagsData](docs/Model/ShippingMethodJsonApiRelationshipsTagsData.md)
 - [ShippingMethodJsonApiRelationshipsTagsLinks](docs/Model/ShippingMethodJsonApiRelationshipsTagsLinks.md)
 - [ShippingMethodJsonApiRelationshipsTax](docs/Model/ShippingMethodJsonApiRelationshipsTax.md)
 - [ShippingMethodJsonApiRelationshipsTaxData](docs/Model/ShippingMethodJsonApiRelationshipsTaxData.md)
 - [ShippingMethodJsonApiRelationshipsTaxLinks](docs/Model/ShippingMethodJsonApiRelationshipsTaxLinks.md)
 - [ShippingMethodPrice](docs/Model/ShippingMethodPrice.md)
 - [ShippingMethodPriceJsonApi](docs/Model/ShippingMethodPriceJsonApi.md)
 - [ShippingMethodPriceJsonApiRelationships](docs/Model/ShippingMethodPriceJsonApiRelationships.md)
 - [ShippingMethodPriceJsonApiRelationshipsCalculationRule](docs/Model/ShippingMethodPriceJsonApiRelationshipsCalculationRule.md)
 - [ShippingMethodPriceJsonApiRelationshipsCalculationRuleData](docs/Model/ShippingMethodPriceJsonApiRelationshipsCalculationRuleData.md)
 - [ShippingMethodPriceJsonApiRelationshipsCalculationRuleLinks](docs/Model/ShippingMethodPriceJsonApiRelationshipsCalculationRuleLinks.md)
 - [ShippingMethodPriceJsonApiRelationshipsRule](docs/Model/ShippingMethodPriceJsonApiRelationshipsRule.md)
 - [ShippingMethodPriceJsonApiRelationshipsRuleData](docs/Model/ShippingMethodPriceJsonApiRelationshipsRuleData.md)
 - [ShippingMethodPriceJsonApiRelationshipsRuleLinks](docs/Model/ShippingMethodPriceJsonApiRelationshipsRuleLinks.md)
 - [ShippingMethodPriceJsonApiRelationshipsShippingMethod](docs/Model/ShippingMethodPriceJsonApiRelationshipsShippingMethod.md)
 - [ShippingMethodPriceJsonApiRelationshipsShippingMethodData](docs/Model/ShippingMethodPriceJsonApiRelationshipsShippingMethodData.md)
 - [ShippingMethodPriceJsonApiRelationshipsShippingMethodLinks](docs/Model/ShippingMethodPriceJsonApiRelationshipsShippingMethodLinks.md)
 - [ShippingMethodTag](docs/Model/ShippingMethodTag.md)
 - [ShippingmethodBody](docs/Model/ShippingmethodBody.md)
 - [ShippingmethodIdBody](docs/Model/ShippingmethodIdBody.md)
 - [ShippingmethodpriceBody](docs/Model/ShippingmethodpriceBody.md)
 - [ShippingmethodpriceIdBody](docs/Model/ShippingmethodpriceIdBody.md)
 - [Snippet](docs/Model/Snippet.md)
 - [SnippetBody](docs/Model/SnippetBody.md)
 - [SnippetIdBody](docs/Model/SnippetIdBody.md)
 - [SnippetJsonApi](docs/Model/SnippetJsonApi.md)
 - [SnippetJsonApiRelationships](docs/Model/SnippetJsonApiRelationships.md)
 - [SnippetJsonApiRelationshipsSet](docs/Model/SnippetJsonApiRelationshipsSet.md)
 - [SnippetJsonApiRelationshipsSetData](docs/Model/SnippetJsonApiRelationshipsSetData.md)
 - [SnippetJsonApiRelationshipsSetLinks](docs/Model/SnippetJsonApiRelationshipsSetLinks.md)
 - [SnippetSet](docs/Model/SnippetSet.md)
 - [SnippetSetJsonApi](docs/Model/SnippetSetJsonApi.md)
 - [SnippetSetJsonApiRelationships](docs/Model/SnippetSetJsonApiRelationships.md)
 - [SnippetSetJsonApiRelationshipsSalesChannelDomains](docs/Model/SnippetSetJsonApiRelationshipsSalesChannelDomains.md)
 - [SnippetSetJsonApiRelationshipsSalesChannelDomainsData](docs/Model/SnippetSetJsonApiRelationshipsSalesChannelDomainsData.md)
 - [SnippetSetJsonApiRelationshipsSalesChannelDomainsLinks](docs/Model/SnippetSetJsonApiRelationshipsSalesChannelDomainsLinks.md)
 - [SnippetSetJsonApiRelationshipsSnippets](docs/Model/SnippetSetJsonApiRelationshipsSnippets.md)
 - [SnippetSetJsonApiRelationshipsSnippetsData](docs/Model/SnippetSetJsonApiRelationshipsSnippetsData.md)
 - [SnippetSetJsonApiRelationshipsSnippetsLinks](docs/Model/SnippetSetJsonApiRelationshipsSnippetsLinks.md)
 - [SnippetsetBody](docs/Model/SnippetsetBody.md)
 - [SnippetsetIdBody](docs/Model/SnippetsetIdBody.md)
 - [SpluginnetzpstagingBody](docs/Model/SpluginnetzpstagingBody.md)
 - [SpluginnetzpstagingIdBody](docs/Model/SpluginnetzpstagingIdBody.md)
 - [StateMachine](docs/Model/StateMachine.md)
 - [StateMachineHistory](docs/Model/StateMachineHistory.md)
 - [StateMachineHistoryJsonApi](docs/Model/StateMachineHistoryJsonApi.md)
 - [StateMachineHistoryJsonApiRelationships](docs/Model/StateMachineHistoryJsonApiRelationships.md)
 - [StateMachineHistoryJsonApiRelationshipsFromStateMachineState](docs/Model/StateMachineHistoryJsonApiRelationshipsFromStateMachineState.md)
 - [StateMachineHistoryJsonApiRelationshipsFromStateMachineStateData](docs/Model/StateMachineHistoryJsonApiRelationshipsFromStateMachineStateData.md)
 - [StateMachineHistoryJsonApiRelationshipsFromStateMachineStateLinks](docs/Model/StateMachineHistoryJsonApiRelationshipsFromStateMachineStateLinks.md)
 - [StateMachineHistoryJsonApiRelationshipsStateMachine](docs/Model/StateMachineHistoryJsonApiRelationshipsStateMachine.md)
 - [StateMachineHistoryJsonApiRelationshipsStateMachineData](docs/Model/StateMachineHistoryJsonApiRelationshipsStateMachineData.md)
 - [StateMachineHistoryJsonApiRelationshipsStateMachineLinks](docs/Model/StateMachineHistoryJsonApiRelationshipsStateMachineLinks.md)
 - [StateMachineHistoryJsonApiRelationshipsToStateMachineState](docs/Model/StateMachineHistoryJsonApiRelationshipsToStateMachineState.md)
 - [StateMachineHistoryJsonApiRelationshipsToStateMachineStateData](docs/Model/StateMachineHistoryJsonApiRelationshipsToStateMachineStateData.md)
 - [StateMachineHistoryJsonApiRelationshipsToStateMachineStateLinks](docs/Model/StateMachineHistoryJsonApiRelationshipsToStateMachineStateLinks.md)
 - [StateMachineHistoryJsonApiRelationshipsUser](docs/Model/StateMachineHistoryJsonApiRelationshipsUser.md)
 - [StateMachineHistoryJsonApiRelationshipsUserData](docs/Model/StateMachineHistoryJsonApiRelationshipsUserData.md)
 - [StateMachineHistoryJsonApiRelationshipsUserLinks](docs/Model/StateMachineHistoryJsonApiRelationshipsUserLinks.md)
 - [StateMachineJsonApi](docs/Model/StateMachineJsonApi.md)
 - [StateMachineJsonApiRelationships](docs/Model/StateMachineJsonApiRelationships.md)
 - [StateMachineJsonApiRelationshipsHistoryEntries](docs/Model/StateMachineJsonApiRelationshipsHistoryEntries.md)
 - [StateMachineJsonApiRelationshipsHistoryEntriesData](docs/Model/StateMachineJsonApiRelationshipsHistoryEntriesData.md)
 - [StateMachineJsonApiRelationshipsHistoryEntriesLinks](docs/Model/StateMachineJsonApiRelationshipsHistoryEntriesLinks.md)
 - [StateMachineJsonApiRelationshipsStates](docs/Model/StateMachineJsonApiRelationshipsStates.md)
 - [StateMachineJsonApiRelationshipsStatesData](docs/Model/StateMachineJsonApiRelationshipsStatesData.md)
 - [StateMachineJsonApiRelationshipsStatesLinks](docs/Model/StateMachineJsonApiRelationshipsStatesLinks.md)
 - [StateMachineJsonApiRelationshipsTransitions](docs/Model/StateMachineJsonApiRelationshipsTransitions.md)
 - [StateMachineJsonApiRelationshipsTransitionsData](docs/Model/StateMachineJsonApiRelationshipsTransitionsData.md)
 - [StateMachineJsonApiRelationshipsTransitionsLinks](docs/Model/StateMachineJsonApiRelationshipsTransitionsLinks.md)
 - [StateMachineState](docs/Model/StateMachineState.md)
 - [StateMachineStateJsonApi](docs/Model/StateMachineStateJsonApi.md)
 - [StateMachineStateJsonApiRelationships](docs/Model/StateMachineStateJsonApiRelationships.md)
 - [StateMachineStateJsonApiRelationshipsFromStateMachineHistoryEntries](docs/Model/StateMachineStateJsonApiRelationshipsFromStateMachineHistoryEntries.md)
 - [StateMachineStateJsonApiRelationshipsFromStateMachineHistoryEntriesData](docs/Model/StateMachineStateJsonApiRelationshipsFromStateMachineHistoryEntriesData.md)
 - [StateMachineStateJsonApiRelationshipsFromStateMachineHistoryEntriesLinks](docs/Model/StateMachineStateJsonApiRelationshipsFromStateMachineHistoryEntriesLinks.md)
 - [StateMachineStateJsonApiRelationshipsFromStateMachineTransitions](docs/Model/StateMachineStateJsonApiRelationshipsFromStateMachineTransitions.md)
 - [StateMachineStateJsonApiRelationshipsFromStateMachineTransitionsData](docs/Model/StateMachineStateJsonApiRelationshipsFromStateMachineTransitionsData.md)
 - [StateMachineStateJsonApiRelationshipsFromStateMachineTransitionsLinks](docs/Model/StateMachineStateJsonApiRelationshipsFromStateMachineTransitionsLinks.md)
 - [StateMachineStateJsonApiRelationshipsOrderDeliveries](docs/Model/StateMachineStateJsonApiRelationshipsOrderDeliveries.md)
 - [StateMachineStateJsonApiRelationshipsOrderDeliveriesData](docs/Model/StateMachineStateJsonApiRelationshipsOrderDeliveriesData.md)
 - [StateMachineStateJsonApiRelationshipsOrderDeliveriesLinks](docs/Model/StateMachineStateJsonApiRelationshipsOrderDeliveriesLinks.md)
 - [StateMachineStateJsonApiRelationshipsOrderTransactions](docs/Model/StateMachineStateJsonApiRelationshipsOrderTransactions.md)
 - [StateMachineStateJsonApiRelationshipsOrderTransactionsData](docs/Model/StateMachineStateJsonApiRelationshipsOrderTransactionsData.md)
 - [StateMachineStateJsonApiRelationshipsOrderTransactionsLinks](docs/Model/StateMachineStateJsonApiRelationshipsOrderTransactionsLinks.md)
 - [StateMachineStateJsonApiRelationshipsOrders](docs/Model/StateMachineStateJsonApiRelationshipsOrders.md)
 - [StateMachineStateJsonApiRelationshipsOrdersData](docs/Model/StateMachineStateJsonApiRelationshipsOrdersData.md)
 - [StateMachineStateJsonApiRelationshipsOrdersLinks](docs/Model/StateMachineStateJsonApiRelationshipsOrdersLinks.md)
 - [StateMachineStateJsonApiRelationshipsStateMachine](docs/Model/StateMachineStateJsonApiRelationshipsStateMachine.md)
 - [StateMachineStateJsonApiRelationshipsStateMachineData](docs/Model/StateMachineStateJsonApiRelationshipsStateMachineData.md)
 - [StateMachineStateJsonApiRelationshipsStateMachineLinks](docs/Model/StateMachineStateJsonApiRelationshipsStateMachineLinks.md)
 - [StateMachineStateJsonApiRelationshipsToStateMachineHistoryEntries](docs/Model/StateMachineStateJsonApiRelationshipsToStateMachineHistoryEntries.md)
 - [StateMachineStateJsonApiRelationshipsToStateMachineHistoryEntriesData](docs/Model/StateMachineStateJsonApiRelationshipsToStateMachineHistoryEntriesData.md)
 - [StateMachineStateJsonApiRelationshipsToStateMachineHistoryEntriesLinks](docs/Model/StateMachineStateJsonApiRelationshipsToStateMachineHistoryEntriesLinks.md)
 - [StateMachineStateJsonApiRelationshipsToStateMachineTransitions](docs/Model/StateMachineStateJsonApiRelationshipsToStateMachineTransitions.md)
 - [StateMachineStateJsonApiRelationshipsToStateMachineTransitionsData](docs/Model/StateMachineStateJsonApiRelationshipsToStateMachineTransitionsData.md)
 - [StateMachineStateJsonApiRelationshipsToStateMachineTransitionsLinks](docs/Model/StateMachineStateJsonApiRelationshipsToStateMachineTransitionsLinks.md)
 - [StateMachineTransition](docs/Model/StateMachineTransition.md)
 - [StateMachineTransitionJsonApi](docs/Model/StateMachineTransitionJsonApi.md)
 - [StateMachineTransitionJsonApiRelationships](docs/Model/StateMachineTransitionJsonApiRelationships.md)
 - [StateMachineTransitionJsonApiRelationshipsFromStateMachineState](docs/Model/StateMachineTransitionJsonApiRelationshipsFromStateMachineState.md)
 - [StateMachineTransitionJsonApiRelationshipsFromStateMachineStateData](docs/Model/StateMachineTransitionJsonApiRelationshipsFromStateMachineStateData.md)
 - [StateMachineTransitionJsonApiRelationshipsFromStateMachineStateLinks](docs/Model/StateMachineTransitionJsonApiRelationshipsFromStateMachineStateLinks.md)
 - [StateMachineTransitionJsonApiRelationshipsStateMachine](docs/Model/StateMachineTransitionJsonApiRelationshipsStateMachine.md)
 - [StateMachineTransitionJsonApiRelationshipsStateMachineData](docs/Model/StateMachineTransitionJsonApiRelationshipsStateMachineData.md)
 - [StateMachineTransitionJsonApiRelationshipsStateMachineLinks](docs/Model/StateMachineTransitionJsonApiRelationshipsStateMachineLinks.md)
 - [StateMachineTransitionJsonApiRelationshipsToStateMachineState](docs/Model/StateMachineTransitionJsonApiRelationshipsToStateMachineState.md)
 - [StateMachineTransitionJsonApiRelationshipsToStateMachineStateData](docs/Model/StateMachineTransitionJsonApiRelationshipsToStateMachineStateData.md)
 - [StateMachineTransitionJsonApiRelationshipsToStateMachineStateLinks](docs/Model/StateMachineTransitionJsonApiRelationshipsToStateMachineStateLinks.md)
 - [StateTransitionBody](docs/Model/StateTransitionBody.md)
 - [StateTransitionBody1](docs/Model/StateTransitionBody1.md)
 - [StateTransitionBody2](docs/Model/StateTransitionBody2.md)
 - [StatemachineBody](docs/Model/StatemachineBody.md)
 - [StatemachineIdBody](docs/Model/StatemachineIdBody.md)
 - [StatemachinehistoryBody](docs/Model/StatemachinehistoryBody.md)
 - [StatemachinehistoryIdBody](docs/Model/StatemachinehistoryIdBody.md)
 - [StatemachinestateBody](docs/Model/StatemachinestateBody.md)
 - [StatemachinestateIdBody](docs/Model/StatemachinestateIdBody.md)
 - [StatemachinetransitionBody](docs/Model/StatemachinetransitionBody.md)
 - [StatemachinetransitionIdBody](docs/Model/StatemachinetransitionIdBody.md)
 - [Success](docs/Model/Success.md)
 - [SwagAmazonPayPaymentNotification](docs/Model/SwagAmazonPayPaymentNotification.md)
 - [SwagAmazonPayPaymentNotificationJsonApi](docs/Model/SwagAmazonPayPaymentNotificationJsonApi.md)
 - [SwagAmazonPayPaymentNotificationJsonApiRelationships](docs/Model/SwagAmazonPayPaymentNotificationJsonApiRelationships.md)
 - [SwagAmazonPayPaymentNotificationJsonApiRelationshipsOrderTransaction](docs/Model/SwagAmazonPayPaymentNotificationJsonApiRelationshipsOrderTransaction.md)
 - [SwagAmazonPayPaymentNotificationJsonApiRelationshipsOrderTransactionData](docs/Model/SwagAmazonPayPaymentNotificationJsonApiRelationshipsOrderTransactionData.md)
 - [SwagAmazonPayPaymentNotificationJsonApiRelationshipsOrderTransactionLinks](docs/Model/SwagAmazonPayPaymentNotificationJsonApiRelationshipsOrderTransactionLinks.md)
 - [SwagAmazonPaySignupToken](docs/Model/SwagAmazonPaySignupToken.md)
 - [SwagAmazonPaySignupTokenJsonApi](docs/Model/SwagAmazonPaySignupTokenJsonApi.md)
 - [SwagCmsExtensionsBlockRule](docs/Model/SwagCmsExtensionsBlockRule.md)
 - [SwagCmsExtensionsBlockRuleJsonApi](docs/Model/SwagCmsExtensionsBlockRuleJsonApi.md)
 - [SwagCmsExtensionsBlockRuleJsonApiRelationships](docs/Model/SwagCmsExtensionsBlockRuleJsonApiRelationships.md)
 - [SwagCmsExtensionsBlockRuleJsonApiRelationshipsCmsBlock](docs/Model/SwagCmsExtensionsBlockRuleJsonApiRelationshipsCmsBlock.md)
 - [SwagCmsExtensionsBlockRuleJsonApiRelationshipsCmsBlockData](docs/Model/SwagCmsExtensionsBlockRuleJsonApiRelationshipsCmsBlockData.md)
 - [SwagCmsExtensionsBlockRuleJsonApiRelationshipsCmsBlockLinks](docs/Model/SwagCmsExtensionsBlockRuleJsonApiRelationshipsCmsBlockLinks.md)
 - [SwagCmsExtensionsBlockRuleJsonApiRelationshipsVisibilityRule](docs/Model/SwagCmsExtensionsBlockRuleJsonApiRelationshipsVisibilityRule.md)
 - [SwagCmsExtensionsBlockRuleJsonApiRelationshipsVisibilityRuleData](docs/Model/SwagCmsExtensionsBlockRuleJsonApiRelationshipsVisibilityRuleData.md)
 - [SwagCmsExtensionsBlockRuleJsonApiRelationshipsVisibilityRuleLinks](docs/Model/SwagCmsExtensionsBlockRuleJsonApiRelationshipsVisibilityRuleLinks.md)
 - [SwagCmsExtensionsForm](docs/Model/SwagCmsExtensionsForm.md)
 - [SwagCmsExtensionsFormGroup](docs/Model/SwagCmsExtensionsFormGroup.md)
 - [SwagCmsExtensionsFormGroupField](docs/Model/SwagCmsExtensionsFormGroupField.md)
 - [SwagCmsExtensionsFormGroupFieldJsonApi](docs/Model/SwagCmsExtensionsFormGroupFieldJsonApi.md)
 - [SwagCmsExtensionsFormGroupFieldJsonApiRelationships](docs/Model/SwagCmsExtensionsFormGroupFieldJsonApiRelationships.md)
 - [SwagCmsExtensionsFormGroupFieldJsonApiRelationshipsGroup](docs/Model/SwagCmsExtensionsFormGroupFieldJsonApiRelationshipsGroup.md)
 - [SwagCmsExtensionsFormGroupFieldJsonApiRelationshipsGroupData](docs/Model/SwagCmsExtensionsFormGroupFieldJsonApiRelationshipsGroupData.md)
 - [SwagCmsExtensionsFormGroupFieldJsonApiRelationshipsGroupLinks](docs/Model/SwagCmsExtensionsFormGroupFieldJsonApiRelationshipsGroupLinks.md)
 - [SwagCmsExtensionsFormGroupJsonApi](docs/Model/SwagCmsExtensionsFormGroupJsonApi.md)
 - [SwagCmsExtensionsFormGroupJsonApiRelationships](docs/Model/SwagCmsExtensionsFormGroupJsonApiRelationships.md)
 - [SwagCmsExtensionsFormGroupJsonApiRelationshipsFields](docs/Model/SwagCmsExtensionsFormGroupJsonApiRelationshipsFields.md)
 - [SwagCmsExtensionsFormGroupJsonApiRelationshipsFieldsData](docs/Model/SwagCmsExtensionsFormGroupJsonApiRelationshipsFieldsData.md)
 - [SwagCmsExtensionsFormGroupJsonApiRelationshipsFieldsLinks](docs/Model/SwagCmsExtensionsFormGroupJsonApiRelationshipsFieldsLinks.md)
 - [SwagCmsExtensionsFormGroupJsonApiRelationshipsForm](docs/Model/SwagCmsExtensionsFormGroupJsonApiRelationshipsForm.md)
 - [SwagCmsExtensionsFormGroupJsonApiRelationshipsFormData](docs/Model/SwagCmsExtensionsFormGroupJsonApiRelationshipsFormData.md)
 - [SwagCmsExtensionsFormGroupJsonApiRelationshipsFormLinks](docs/Model/SwagCmsExtensionsFormGroupJsonApiRelationshipsFormLinks.md)
 - [SwagCmsExtensionsFormJsonApi](docs/Model/SwagCmsExtensionsFormJsonApi.md)
 - [SwagCmsExtensionsFormJsonApiRelationships](docs/Model/SwagCmsExtensionsFormJsonApiRelationships.md)
 - [SwagCmsExtensionsFormJsonApiRelationshipsCmsSlot](docs/Model/SwagCmsExtensionsFormJsonApiRelationshipsCmsSlot.md)
 - [SwagCmsExtensionsFormJsonApiRelationshipsCmsSlotData](docs/Model/SwagCmsExtensionsFormJsonApiRelationshipsCmsSlotData.md)
 - [SwagCmsExtensionsFormJsonApiRelationshipsCmsSlotLinks](docs/Model/SwagCmsExtensionsFormJsonApiRelationshipsCmsSlotLinks.md)
 - [SwagCmsExtensionsFormJsonApiRelationshipsGroups](docs/Model/SwagCmsExtensionsFormJsonApiRelationshipsGroups.md)
 - [SwagCmsExtensionsFormJsonApiRelationshipsGroupsData](docs/Model/SwagCmsExtensionsFormJsonApiRelationshipsGroupsData.md)
 - [SwagCmsExtensionsFormJsonApiRelationshipsGroupsLinks](docs/Model/SwagCmsExtensionsFormJsonApiRelationshipsGroupsLinks.md)
 - [SwagCmsExtensionsFormJsonApiRelationshipsMailTemplate](docs/Model/SwagCmsExtensionsFormJsonApiRelationshipsMailTemplate.md)
 - [SwagCmsExtensionsFormJsonApiRelationshipsMailTemplateData](docs/Model/SwagCmsExtensionsFormJsonApiRelationshipsMailTemplateData.md)
 - [SwagCmsExtensionsFormJsonApiRelationshipsMailTemplateLinks](docs/Model/SwagCmsExtensionsFormJsonApiRelationshipsMailTemplateLinks.md)
 - [SwagCmsExtensionsQuickview](docs/Model/SwagCmsExtensionsQuickview.md)
 - [SwagCmsExtensionsQuickviewJsonApi](docs/Model/SwagCmsExtensionsQuickviewJsonApi.md)
 - [SwagCmsExtensionsQuickviewJsonApiRelationships](docs/Model/SwagCmsExtensionsQuickviewJsonApiRelationships.md)
 - [SwagCmsExtensionsQuickviewJsonApiRelationshipsCmsBlock](docs/Model/SwagCmsExtensionsQuickviewJsonApiRelationshipsCmsBlock.md)
 - [SwagCmsExtensionsQuickviewJsonApiRelationshipsCmsBlockData](docs/Model/SwagCmsExtensionsQuickviewJsonApiRelationshipsCmsBlockData.md)
 - [SwagCmsExtensionsQuickviewJsonApiRelationshipsCmsBlockLinks](docs/Model/SwagCmsExtensionsQuickviewJsonApiRelationshipsCmsBlockLinks.md)
 - [SwagCmsExtensionsScrollNavigation](docs/Model/SwagCmsExtensionsScrollNavigation.md)
 - [SwagCmsExtensionsScrollNavigationJsonApi](docs/Model/SwagCmsExtensionsScrollNavigationJsonApi.md)
 - [SwagCmsExtensionsScrollNavigationJsonApiRelationships](docs/Model/SwagCmsExtensionsScrollNavigationJsonApiRelationships.md)
 - [SwagCmsExtensionsScrollNavigationJsonApiRelationshipsCmsSection](docs/Model/SwagCmsExtensionsScrollNavigationJsonApiRelationshipsCmsSection.md)
 - [SwagCmsExtensionsScrollNavigationJsonApiRelationshipsCmsSectionData](docs/Model/SwagCmsExtensionsScrollNavigationJsonApiRelationshipsCmsSectionData.md)
 - [SwagCmsExtensionsScrollNavigationJsonApiRelationshipsCmsSectionLinks](docs/Model/SwagCmsExtensionsScrollNavigationJsonApiRelationshipsCmsSectionLinks.md)
 - [SwagCmsExtensionsScrollNavigationPageSettings](docs/Model/SwagCmsExtensionsScrollNavigationPageSettings.md)
 - [SwagCmsExtensionsScrollNavigationPageSettingsJsonApi](docs/Model/SwagCmsExtensionsScrollNavigationPageSettingsJsonApi.md)
 - [SwagCmsExtensionsScrollNavigationPageSettingsJsonApiRelationships](docs/Model/SwagCmsExtensionsScrollNavigationPageSettingsJsonApiRelationships.md)
 - [SwagCmsExtensionsScrollNavigationPageSettingsJsonApiRelationshipsCmsPage](docs/Model/SwagCmsExtensionsScrollNavigationPageSettingsJsonApiRelationshipsCmsPage.md)
 - [SwagCmsExtensionsScrollNavigationPageSettingsJsonApiRelationshipsCmsPageData](docs/Model/SwagCmsExtensionsScrollNavigationPageSettingsJsonApiRelationshipsCmsPageData.md)
 - [SwagCmsExtensionsScrollNavigationPageSettingsJsonApiRelationshipsCmsPageLinks](docs/Model/SwagCmsExtensionsScrollNavigationPageSettingsJsonApiRelationshipsCmsPageLinks.md)
 - [SwagLanguagePackLanguage](docs/Model/SwagLanguagePackLanguage.md)
 - [SwagLanguagePackLanguageJsonApi](docs/Model/SwagLanguagePackLanguageJsonApi.md)
 - [SwagLanguagePackLanguageJsonApiRelationships](docs/Model/SwagLanguagePackLanguageJsonApiRelationships.md)
 - [SwagLanguagePackLanguageJsonApiRelationshipsLanguage](docs/Model/SwagLanguagePackLanguageJsonApiRelationshipsLanguage.md)
 - [SwagLanguagePackLanguageJsonApiRelationshipsLanguageData](docs/Model/SwagLanguagePackLanguageJsonApiRelationshipsLanguageData.md)
 - [SwagLanguagePackLanguageJsonApiRelationshipsLanguageLinks](docs/Model/SwagLanguagePackLanguageJsonApiRelationshipsLanguageLinks.md)
 - [SwagMigrationConnection](docs/Model/SwagMigrationConnection.md)
 - [SwagMigrationConnectionJsonApi](docs/Model/SwagMigrationConnectionJsonApi.md)
 - [SwagMigrationConnectionJsonApiRelationships](docs/Model/SwagMigrationConnectionJsonApiRelationships.md)
 - [SwagMigrationConnectionJsonApiRelationshipsMappings](docs/Model/SwagMigrationConnectionJsonApiRelationshipsMappings.md)
 - [SwagMigrationConnectionJsonApiRelationshipsMappingsData](docs/Model/SwagMigrationConnectionJsonApiRelationshipsMappingsData.md)
 - [SwagMigrationConnectionJsonApiRelationshipsMappingsLinks](docs/Model/SwagMigrationConnectionJsonApiRelationshipsMappingsLinks.md)
 - [SwagMigrationConnectionJsonApiRelationshipsRuns](docs/Model/SwagMigrationConnectionJsonApiRelationshipsRuns.md)
 - [SwagMigrationConnectionJsonApiRelationshipsRunsData](docs/Model/SwagMigrationConnectionJsonApiRelationshipsRunsData.md)
 - [SwagMigrationConnectionJsonApiRelationshipsRunsLinks](docs/Model/SwagMigrationConnectionJsonApiRelationshipsRunsLinks.md)
 - [SwagMigrationConnectionJsonApiRelationshipsSettings](docs/Model/SwagMigrationConnectionJsonApiRelationshipsSettings.md)
 - [SwagMigrationConnectionJsonApiRelationshipsSettingsData](docs/Model/SwagMigrationConnectionJsonApiRelationshipsSettingsData.md)
 - [SwagMigrationConnectionJsonApiRelationshipsSettingsLinks](docs/Model/SwagMigrationConnectionJsonApiRelationshipsSettingsLinks.md)
 - [SwagMigrationData](docs/Model/SwagMigrationData.md)
 - [SwagMigrationDataJsonApi](docs/Model/SwagMigrationDataJsonApi.md)
 - [SwagMigrationDataJsonApiRelationships](docs/Model/SwagMigrationDataJsonApiRelationships.md)
 - [SwagMigrationDataJsonApiRelationshipsRun](docs/Model/SwagMigrationDataJsonApiRelationshipsRun.md)
 - [SwagMigrationDataJsonApiRelationshipsRunData](docs/Model/SwagMigrationDataJsonApiRelationshipsRunData.md)
 - [SwagMigrationDataJsonApiRelationshipsRunLinks](docs/Model/SwagMigrationDataJsonApiRelationshipsRunLinks.md)
 - [SwagMigrationGeneralSetting](docs/Model/SwagMigrationGeneralSetting.md)
 - [SwagMigrationGeneralSettingJsonApi](docs/Model/SwagMigrationGeneralSettingJsonApi.md)
 - [SwagMigrationGeneralSettingJsonApiRelationships](docs/Model/SwagMigrationGeneralSettingJsonApiRelationships.md)
 - [SwagMigrationGeneralSettingJsonApiRelationshipsSelectedConnection](docs/Model/SwagMigrationGeneralSettingJsonApiRelationshipsSelectedConnection.md)
 - [SwagMigrationGeneralSettingJsonApiRelationshipsSelectedConnectionData](docs/Model/SwagMigrationGeneralSettingJsonApiRelationshipsSelectedConnectionData.md)
 - [SwagMigrationGeneralSettingJsonApiRelationshipsSelectedConnectionLinks](docs/Model/SwagMigrationGeneralSettingJsonApiRelationshipsSelectedConnectionLinks.md)
 - [SwagMigrationLogging](docs/Model/SwagMigrationLogging.md)
 - [SwagMigrationLoggingJsonApi](docs/Model/SwagMigrationLoggingJsonApi.md)
 - [SwagMigrationLoggingJsonApiRelationships](docs/Model/SwagMigrationLoggingJsonApiRelationships.md)
 - [SwagMigrationLoggingJsonApiRelationshipsRun](docs/Model/SwagMigrationLoggingJsonApiRelationshipsRun.md)
 - [SwagMigrationLoggingJsonApiRelationshipsRunData](docs/Model/SwagMigrationLoggingJsonApiRelationshipsRunData.md)
 - [SwagMigrationLoggingJsonApiRelationshipsRunLinks](docs/Model/SwagMigrationLoggingJsonApiRelationshipsRunLinks.md)
 - [SwagMigrationMapping](docs/Model/SwagMigrationMapping.md)
 - [SwagMigrationMappingJsonApi](docs/Model/SwagMigrationMappingJsonApi.md)
 - [SwagMigrationMappingJsonApiRelationships](docs/Model/SwagMigrationMappingJsonApiRelationships.md)
 - [SwagMigrationMappingJsonApiRelationshipsConnection](docs/Model/SwagMigrationMappingJsonApiRelationshipsConnection.md)
 - [SwagMigrationMappingJsonApiRelationshipsConnectionData](docs/Model/SwagMigrationMappingJsonApiRelationshipsConnectionData.md)
 - [SwagMigrationMappingJsonApiRelationshipsConnectionLinks](docs/Model/SwagMigrationMappingJsonApiRelationshipsConnectionLinks.md)
 - [SwagMigrationMediaFile](docs/Model/SwagMigrationMediaFile.md)
 - [SwagMigrationMediaFileJsonApi](docs/Model/SwagMigrationMediaFileJsonApi.md)
 - [SwagMigrationMediaFileJsonApiRelationships](docs/Model/SwagMigrationMediaFileJsonApiRelationships.md)
 - [SwagMigrationMediaFileJsonApiRelationshipsRun](docs/Model/SwagMigrationMediaFileJsonApiRelationshipsRun.md)
 - [SwagMigrationMediaFileJsonApiRelationshipsRunData](docs/Model/SwagMigrationMediaFileJsonApiRelationshipsRunData.md)
 - [SwagMigrationMediaFileJsonApiRelationshipsRunLinks](docs/Model/SwagMigrationMediaFileJsonApiRelationshipsRunLinks.md)
 - [SwagMigrationRun](docs/Model/SwagMigrationRun.md)
 - [SwagMigrationRunJsonApi](docs/Model/SwagMigrationRunJsonApi.md)
 - [SwagMigrationRunJsonApiRelationships](docs/Model/SwagMigrationRunJsonApiRelationships.md)
 - [SwagMigrationRunJsonApiRelationshipsConnection](docs/Model/SwagMigrationRunJsonApiRelationshipsConnection.md)
 - [SwagMigrationRunJsonApiRelationshipsConnectionData](docs/Model/SwagMigrationRunJsonApiRelationshipsConnectionData.md)
 - [SwagMigrationRunJsonApiRelationshipsConnectionLinks](docs/Model/SwagMigrationRunJsonApiRelationshipsConnectionLinks.md)
 - [SwagMigrationRunJsonApiRelationshipsData](docs/Model/SwagMigrationRunJsonApiRelationshipsData.md)
 - [SwagMigrationRunJsonApiRelationshipsDataData](docs/Model/SwagMigrationRunJsonApiRelationshipsDataData.md)
 - [SwagMigrationRunJsonApiRelationshipsDataLinks](docs/Model/SwagMigrationRunJsonApiRelationshipsDataLinks.md)
 - [SwagMigrationRunJsonApiRelationshipsLogs](docs/Model/SwagMigrationRunJsonApiRelationshipsLogs.md)
 - [SwagMigrationRunJsonApiRelationshipsLogsData](docs/Model/SwagMigrationRunJsonApiRelationshipsLogsData.md)
 - [SwagMigrationRunJsonApiRelationshipsLogsLinks](docs/Model/SwagMigrationRunJsonApiRelationshipsLogsLinks.md)
 - [SwagMigrationRunJsonApiRelationshipsMediaFiles](docs/Model/SwagMigrationRunJsonApiRelationshipsMediaFiles.md)
 - [SwagMigrationRunJsonApiRelationshipsMediaFilesData](docs/Model/SwagMigrationRunJsonApiRelationshipsMediaFilesData.md)
 - [SwagMigrationRunJsonApiRelationshipsMediaFilesLinks](docs/Model/SwagMigrationRunJsonApiRelationshipsMediaFilesLinks.md)
 - [SwagPaypalPosSalesChannel](docs/Model/SwagPaypalPosSalesChannel.md)
 - [SwagPaypalPosSalesChannelInventory](docs/Model/SwagPaypalPosSalesChannelInventory.md)
 - [SwagPaypalPosSalesChannelJsonApi](docs/Model/SwagPaypalPosSalesChannelJsonApi.md)
 - [SwagPaypalPosSalesChannelJsonApiRelationships](docs/Model/SwagPaypalPosSalesChannelJsonApiRelationships.md)
 - [SwagPaypalPosSalesChannelJsonApiRelationshipsProductStream](docs/Model/SwagPaypalPosSalesChannelJsonApiRelationshipsProductStream.md)
 - [SwagPaypalPosSalesChannelJsonApiRelationshipsProductStreamData](docs/Model/SwagPaypalPosSalesChannelJsonApiRelationshipsProductStreamData.md)
 - [SwagPaypalPosSalesChannelJsonApiRelationshipsProductStreamLinks](docs/Model/SwagPaypalPosSalesChannelJsonApiRelationshipsProductStreamLinks.md)
 - [SwagPaypalPosSalesChannelJsonApiRelationshipsSalesChannel](docs/Model/SwagPaypalPosSalesChannelJsonApiRelationshipsSalesChannel.md)
 - [SwagPaypalPosSalesChannelJsonApiRelationshipsSalesChannelData](docs/Model/SwagPaypalPosSalesChannelJsonApiRelationshipsSalesChannelData.md)
 - [SwagPaypalPosSalesChannelJsonApiRelationshipsSalesChannelLinks](docs/Model/SwagPaypalPosSalesChannelJsonApiRelationshipsSalesChannelLinks.md)
 - [SwagPaypalPosSalesChannelMedia](docs/Model/SwagPaypalPosSalesChannelMedia.md)
 - [SwagPaypalPosSalesChannelProduct](docs/Model/SwagPaypalPosSalesChannelProduct.md)
 - [SwagPaypalPosSalesChannelRun](docs/Model/SwagPaypalPosSalesChannelRun.md)
 - [SwagPaypalPosSalesChannelRunJsonApi](docs/Model/SwagPaypalPosSalesChannelRunJsonApi.md)
 - [SwagPaypalPosSalesChannelRunJsonApiRelationships](docs/Model/SwagPaypalPosSalesChannelRunJsonApiRelationships.md)
 - [SwagPaypalPosSalesChannelRunJsonApiRelationshipsLogs](docs/Model/SwagPaypalPosSalesChannelRunJsonApiRelationshipsLogs.md)
 - [SwagPaypalPosSalesChannelRunJsonApiRelationshipsLogsData](docs/Model/SwagPaypalPosSalesChannelRunJsonApiRelationshipsLogsData.md)
 - [SwagPaypalPosSalesChannelRunJsonApiRelationshipsLogsLinks](docs/Model/SwagPaypalPosSalesChannelRunJsonApiRelationshipsLogsLinks.md)
 - [SwagPaypalPosSalesChannelRunLog](docs/Model/SwagPaypalPosSalesChannelRunLog.md)
 - [SwagPaypalPosSalesChannelRunLogJsonApi](docs/Model/SwagPaypalPosSalesChannelRunLogJsonApi.md)
 - [SwagPaypalPosSalesChannelRunLogJsonApiRelationships](docs/Model/SwagPaypalPosSalesChannelRunLogJsonApiRelationships.md)
 - [SwagPaypalPosSalesChannelRunLogJsonApiRelationshipsPosSalesChannelRun](docs/Model/SwagPaypalPosSalesChannelRunLogJsonApiRelationshipsPosSalesChannelRun.md)
 - [SwagPaypalPosSalesChannelRunLogJsonApiRelationshipsPosSalesChannelRunData](docs/Model/SwagPaypalPosSalesChannelRunLogJsonApiRelationshipsPosSalesChannelRunData.md)
 - [SwagPaypalPosSalesChannelRunLogJsonApiRelationshipsPosSalesChannelRunLinks](docs/Model/SwagPaypalPosSalesChannelRunLogJsonApiRelationshipsPosSalesChannelRunLinks.md)
 - [SwagPaypalV1Capture](docs/Model/SwagPaypalV1Capture.md)
 - [SwagPaypalV1CommonAddress](docs/Model/SwagPaypalV1CommonAddress.md)
 - [SwagPaypalV1CommonAmount](docs/Model/SwagPaypalV1CommonAmount.md)
 - [SwagPaypalV1CommonDetails](docs/Model/SwagPaypalV1CommonDetails.md)
 - [SwagPaypalV1CommonLink](docs/Model/SwagPaypalV1CommonLink.md)
 - [SwagPaypalV1CommonMoney](docs/Model/SwagPaypalV1CommonMoney.md)
 - [SwagPaypalV1CommonValue](docs/Model/SwagPaypalV1CommonValue.md)
 - [SwagPaypalV1CreateWebhooks](docs/Model/SwagPaypalV1CreateWebhooks.md)
 - [SwagPaypalV1CreateWebhooksEventType](docs/Model/SwagPaypalV1CreateWebhooksEventType.md)
 - [SwagPaypalV1Disputes](docs/Model/SwagPaypalV1Disputes.md)
 - [SwagPaypalV1DisputesAdjudication](docs/Model/SwagPaypalV1DisputesAdjudication.md)
 - [SwagPaypalV1DisputesCommonBuyer](docs/Model/SwagPaypalV1DisputesCommonBuyer.md)
 - [SwagPaypalV1DisputesCommonItem](docs/Model/SwagPaypalV1DisputesCommonItem.md)
 - [SwagPaypalV1DisputesCommonProductDetails](docs/Model/SwagPaypalV1DisputesCommonProductDetails.md)
 - [SwagPaypalV1DisputesCommonReturnDetails](docs/Model/SwagPaypalV1DisputesCommonReturnDetails.md)
 - [SwagPaypalV1DisputesCommonSeller](docs/Model/SwagPaypalV1DisputesCommonSeller.md)
 - [SwagPaypalV1DisputesCommonServiceDetails](docs/Model/SwagPaypalV1DisputesCommonServiceDetails.md)
 - [SwagPaypalV1DisputesCommonSubReason](docs/Model/SwagPaypalV1DisputesCommonSubReason.md)
 - [SwagPaypalV1DisputesCommonTransaction](docs/Model/SwagPaypalV1DisputesCommonTransaction.md)
 - [SwagPaypalV1DisputesCommunicationDetails](docs/Model/SwagPaypalV1DisputesCommunicationDetails.md)
 - [SwagPaypalV1DisputesDisputeOutcome](docs/Model/SwagPaypalV1DisputesDisputeOutcome.md)
 - [SwagPaypalV1DisputesDisputedTransaction](docs/Model/SwagPaypalV1DisputesDisputedTransaction.md)
 - [SwagPaypalV1DisputesEvidence](docs/Model/SwagPaypalV1DisputesEvidence.md)
 - [SwagPaypalV1DisputesEvidenceDocument](docs/Model/SwagPaypalV1DisputesEvidenceDocument.md)
 - [SwagPaypalV1DisputesEvidenceInfo](docs/Model/SwagPaypalV1DisputesEvidenceInfo.md)
 - [SwagPaypalV1DisputesEvidenceRefundId](docs/Model/SwagPaypalV1DisputesEvidenceRefundId.md)
 - [SwagPaypalV1DisputesEvidenceTrackingInfo](docs/Model/SwagPaypalV1DisputesEvidenceTrackingInfo.md)
 - [SwagPaypalV1DisputesExtensions](docs/Model/SwagPaypalV1DisputesExtensions.md)
 - [SwagPaypalV1DisputesExtensionsAggredRefundDetails](docs/Model/SwagPaypalV1DisputesExtensionsAggredRefundDetails.md)
 - [SwagPaypalV1DisputesExtensionsBillingDisputeProperties](docs/Model/SwagPaypalV1DisputesExtensionsBillingDisputeProperties.md)
 - [SwagPaypalV1DisputesExtensionsCanceledRecurringBilling](docs/Model/SwagPaypalV1DisputesExtensionsCanceledRecurringBilling.md)
 - [SwagPaypalV1DisputesExtensionsCancellationDetails](docs/Model/SwagPaypalV1DisputesExtensionsCancellationDetails.md)
 - [SwagPaypalV1DisputesExtensionsCretidNotProcessed](docs/Model/SwagPaypalV1DisputesExtensionsCretidNotProcessed.md)
 - [SwagPaypalV1DisputesExtensionsDuplicateTransaction](docs/Model/SwagPaypalV1DisputesExtensionsDuplicateTransaction.md)
 - [SwagPaypalV1DisputesExtensionsIncorrectTransactionAmount](docs/Model/SwagPaypalV1DisputesExtensionsIncorrectTransactionAmount.md)
 - [SwagPaypalV1DisputesExtensionsMerchandizeDisputeProperties](docs/Model/SwagPaypalV1DisputesExtensionsMerchandizeDisputeProperties.md)
 - [SwagPaypalV1DisputesExtensionsPaymentByOtherMeans](docs/Model/SwagPaypalV1DisputesExtensionsPaymentByOtherMeans.md)
 - [SwagPaypalV1DisputesItem](docs/Model/SwagPaypalV1DisputesItem.md)
 - [SwagPaypalV1DisputesMessage](docs/Model/SwagPaypalV1DisputesMessage.md)
 - [SwagPaypalV1DisputesMoneyMovement](docs/Model/SwagPaypalV1DisputesMoneyMovement.md)
 - [SwagPaypalV1DisputesOffer](docs/Model/SwagPaypalV1DisputesOffer.md)
 - [SwagPaypalV1DisputesOfferHistory](docs/Model/SwagPaypalV1DisputesOfferHistory.md)
 - [SwagPaypalV1DisputesPartnerAction](docs/Model/SwagPaypalV1DisputesPartnerAction.md)
 - [SwagPaypalV1DisputesRefundDetails](docs/Model/SwagPaypalV1DisputesRefundDetails.md)
 - [SwagPaypalV1DisputesSupportingInfo](docs/Model/SwagPaypalV1DisputesSupportingInfo.md)
 - [SwagPaypalV1DoVoid](docs/Model/SwagPaypalV1DoVoid.md)
 - [SwagPaypalV1MerchantStatus](docs/Model/SwagPaypalV1MerchantStatus.md)
 - [SwagPaypalV1OauthCredentials](docs/Model/SwagPaypalV1OauthCredentials.md)
 - [SwagPaypalV1Patch](docs/Model/SwagPaypalV1Patch.md)
 - [SwagPaypalV1Payment](docs/Model/SwagPaypalV1Payment.md)
 - [SwagPaypalV1PaymentApplicationContext](docs/Model/SwagPaypalV1PaymentApplicationContext.md)
 - [SwagPaypalV1PaymentExecutePayerInfo](docs/Model/SwagPaypalV1PaymentExecutePayerInfo.md)
 - [SwagPaypalV1PaymentPayer](docs/Model/SwagPaypalV1PaymentPayer.md)
 - [SwagPaypalV1PaymentPayerInfo](docs/Model/SwagPaypalV1PaymentPayerInfo.md)
 - [SwagPaypalV1PaymentPayerInfoShippingAddress](docs/Model/SwagPaypalV1PaymentPayerInfoShippingAddress.md)
 - [SwagPaypalV1PaymentPaymentInstruction](docs/Model/SwagPaypalV1PaymentPaymentInstruction.md)
 - [SwagPaypalV1PaymentRecipientBankingInstruction](docs/Model/SwagPaypalV1PaymentRecipientBankingInstruction.md)
 - [SwagPaypalV1PaymentRedirectUrls](docs/Model/SwagPaypalV1PaymentRedirectUrls.md)
 - [SwagPaypalV1PaymentTransaction](docs/Model/SwagPaypalV1PaymentTransaction.md)
 - [SwagPaypalV1PaymentTransactionAbstractRelatedResource](docs/Model/SwagPaypalV1PaymentTransactionAbstractRelatedResource.md)
 - [SwagPaypalV1PaymentTransactionAuthorization](docs/Model/SwagPaypalV1PaymentTransactionAuthorization.md)
 - [SwagPaypalV1PaymentTransactionCapture](docs/Model/SwagPaypalV1PaymentTransactionCapture.md)
 - [SwagPaypalV1PaymentTransactionItem](docs/Model/SwagPaypalV1PaymentTransactionItem.md)
 - [SwagPaypalV1PaymentTransactionItemList](docs/Model/SwagPaypalV1PaymentTransactionItemList.md)
 - [SwagPaypalV1PaymentTransactionOrder](docs/Model/SwagPaypalV1PaymentTransactionOrder.md)
 - [SwagPaypalV1PaymentTransactionPayee](docs/Model/SwagPaypalV1PaymentTransactionPayee.md)
 - [SwagPaypalV1PaymentTransactionRefund](docs/Model/SwagPaypalV1PaymentTransactionRefund.md)
 - [SwagPaypalV1PaymentTransactionRelatedResource](docs/Model/SwagPaypalV1PaymentTransactionRelatedResource.md)
 - [SwagPaypalV1PaymentTransactionSale](docs/Model/SwagPaypalV1PaymentTransactionSale.md)
 - [SwagPaypalV1PaymentTransactionShippingAddress](docs/Model/SwagPaypalV1PaymentTransactionShippingAddress.md)
 - [SwagPaypalV1Plan](docs/Model/SwagPaypalV1Plan.md)
 - [SwagPaypalV1PlanBillingCycle](docs/Model/SwagPaypalV1PlanBillingCycle.md)
 - [SwagPaypalV1PlanFrequency](docs/Model/SwagPaypalV1PlanFrequency.md)
 - [SwagPaypalV1PlanPaymentPreferences](docs/Model/SwagPaypalV1PlanPaymentPreferences.md)
 - [SwagPaypalV1PlanPricingScheme](docs/Model/SwagPaypalV1PlanPricingScheme.md)
 - [SwagPaypalV1PlanTaxes](docs/Model/SwagPaypalV1PlanTaxes.md)
 - [SwagPaypalV1Product](docs/Model/SwagPaypalV1Product.md)
 - [SwagPaypalV1Refund](docs/Model/SwagPaypalV1Refund.md)
 - [SwagPaypalV1Subscription](docs/Model/SwagPaypalV1Subscription.md)
 - [SwagPaypalV1SubscriptionApplicationContext](docs/Model/SwagPaypalV1SubscriptionApplicationContext.md)
 - [SwagPaypalV1SubscriptionBillingInfo](docs/Model/SwagPaypalV1SubscriptionBillingInfo.md)
 - [SwagPaypalV1SubscriptionCycleExecution](docs/Model/SwagPaypalV1SubscriptionCycleExecution.md)
 - [SwagPaypalV1SubscriptionLastPayment](docs/Model/SwagPaypalV1SubscriptionLastPayment.md)
 - [SwagPaypalV1SubscriptionName](docs/Model/SwagPaypalV1SubscriptionName.md)
 - [SwagPaypalV1SubscriptionShippingAddress](docs/Model/SwagPaypalV1SubscriptionShippingAddress.md)
 - [SwagPaypalV1SubscriptionShippingAddressAddress](docs/Model/SwagPaypalV1SubscriptionShippingAddressAddress.md)
 - [SwagPaypalV1SubscriptionShippingAddressName](docs/Model/SwagPaypalV1SubscriptionShippingAddressName.md)
 - [SwagPaypalV1SubscriptionSubscriber](docs/Model/SwagPaypalV1SubscriptionSubscriber.md)
 - [SwagPaypalV1Token](docs/Model/SwagPaypalV1Token.md)
 - [SwagPaypalV1Webhook](docs/Model/SwagPaypalV1Webhook.md)
 - [SwagPaypalV1WebhookResource](docs/Model/SwagPaypalV1WebhookResource.md)
 - [SwagPaypalV2CommonAddress](docs/Model/SwagPaypalV2CommonAddress.md)
 - [SwagPaypalV2CommonLink](docs/Model/SwagPaypalV2CommonLink.md)
 - [SwagPaypalV2CommonMoney](docs/Model/SwagPaypalV2CommonMoney.md)
 - [SwagPaypalV2Order](docs/Model/SwagPaypalV2Order.md)
 - [SwagPaypalV2OrderAmount](docs/Model/SwagPaypalV2OrderAmount.md)
 - [SwagPaypalV2OrderApplicationContext](docs/Model/SwagPaypalV2OrderApplicationContext.md)
 - [SwagPaypalV2OrderAuthorization](docs/Model/SwagPaypalV2OrderAuthorization.md)
 - [SwagPaypalV2OrderAuthorizationSellerProtection](docs/Model/SwagPaypalV2OrderAuthorizationSellerProtection.md)
 - [SwagPaypalV2OrderBreakdown](docs/Model/SwagPaypalV2OrderBreakdown.md)
 - [SwagPaypalV2OrderCapture](docs/Model/SwagPaypalV2OrderCapture.md)
 - [SwagPaypalV2OrderCaptureSellerProtection](docs/Model/SwagPaypalV2OrderCaptureSellerProtection.md)
 - [SwagPaypalV2OrderCaptureSellerReceivableBreakdown](docs/Model/SwagPaypalV2OrderCaptureSellerReceivableBreakdown.md)
 - [SwagPaypalV2OrderDisplayData](docs/Model/SwagPaypalV2OrderDisplayData.md)
 - [SwagPaypalV2OrderItem](docs/Model/SwagPaypalV2OrderItem.md)
 - [SwagPaypalV2OrderName](docs/Model/SwagPaypalV2OrderName.md)
 - [SwagPaypalV2OrderPayee](docs/Model/SwagPaypalV2OrderPayee.md)
 - [SwagPaypalV2OrderPayer](docs/Model/SwagPaypalV2OrderPayer.md)
 - [SwagPaypalV2OrderPayment](docs/Model/SwagPaypalV2OrderPayment.md)
 - [SwagPaypalV2OrderPayments](docs/Model/SwagPaypalV2OrderPayments.md)
 - [SwagPaypalV2OrderPhone](docs/Model/SwagPaypalV2OrderPhone.md)
 - [SwagPaypalV2OrderPhoneNumber](docs/Model/SwagPaypalV2OrderPhoneNumber.md)
 - [SwagPaypalV2OrderPurchaseUnit](docs/Model/SwagPaypalV2OrderPurchaseUnit.md)
 - [SwagPaypalV2OrderRefund](docs/Model/SwagPaypalV2OrderRefund.md)
 - [SwagPaypalV2OrderRefundSellerPaypableBreakdown](docs/Model/SwagPaypalV2OrderRefundSellerPaypableBreakdown.md)
 - [SwagPaypalV2OrderShipping](docs/Model/SwagPaypalV2OrderShipping.md)
 - [SwagPaypalV2OrderShippingName](docs/Model/SwagPaypalV2OrderShippingName.md)
 - [SwagPaypalV2Patch](docs/Model/SwagPaypalV2Patch.md)
 - [SwagPaypalV2Referral](docs/Model/SwagPaypalV2Referral.md)
 - [SwagPaypalV2ReferralAddress](docs/Model/SwagPaypalV2ReferralAddress.md)
 - [SwagPaypalV2ReferralApiIntegrationPreference](docs/Model/SwagPaypalV2ReferralApiIntegrationPreference.md)
 - [SwagPaypalV2ReferralBusinessEntity](docs/Model/SwagPaypalV2ReferralBusinessEntity.md)
 - [SwagPaypalV2ReferralLegalConsent](docs/Model/SwagPaypalV2ReferralLegalConsent.md)
 - [SwagPaypalV2ReferralOperation](docs/Model/SwagPaypalV2ReferralOperation.md)
 - [SwagPaypalV2ReferralPartnerConfigOverride](docs/Model/SwagPaypalV2ReferralPartnerConfigOverride.md)
 - [SwagPaypalV2ReferralRestApiIntegration](docs/Model/SwagPaypalV2ReferralRestApiIntegration.md)
 - [SwagPaypalV2ReferralThirdPartyDetails](docs/Model/SwagPaypalV2ReferralThirdPartyDetails.md)
 - [SwagPaypalV2Webhook](docs/Model/SwagPaypalV2Webhook.md)
 - [SwagSequenceWebhookEventLog](docs/Model/SwagSequenceWebhookEventLog.md)
 - [SwagSocialShoppingProductError](docs/Model/SwagSocialShoppingProductError.md)
 - [SwagSocialShoppingProductErrorJsonApi](docs/Model/SwagSocialShoppingProductErrorJsonApi.md)
 - [SwagSocialShoppingProductErrorJsonApiRelationships](docs/Model/SwagSocialShoppingProductErrorJsonApiRelationships.md)
 - [SwagSocialShoppingProductErrorJsonApiRelationshipsProduct](docs/Model/SwagSocialShoppingProductErrorJsonApiRelationshipsProduct.md)
 - [SwagSocialShoppingProductErrorJsonApiRelationshipsProductData](docs/Model/SwagSocialShoppingProductErrorJsonApiRelationshipsProductData.md)
 - [SwagSocialShoppingProductErrorJsonApiRelationshipsProductLinks](docs/Model/SwagSocialShoppingProductErrorJsonApiRelationshipsProductLinks.md)
 - [SwagSocialShoppingProductErrorJsonApiRelationshipsSalesChannel](docs/Model/SwagSocialShoppingProductErrorJsonApiRelationshipsSalesChannel.md)
 - [SwagSocialShoppingProductErrorJsonApiRelationshipsSalesChannelData](docs/Model/SwagSocialShoppingProductErrorJsonApiRelationshipsSalesChannelData.md)
 - [SwagSocialShoppingProductErrorJsonApiRelationshipsSalesChannelLinks](docs/Model/SwagSocialShoppingProductErrorJsonApiRelationshipsSalesChannelLinks.md)
 - [SwagSocialShoppingSalesChannel](docs/Model/SwagSocialShoppingSalesChannel.md)
 - [SwagSocialShoppingSalesChannelJsonApi](docs/Model/SwagSocialShoppingSalesChannelJsonApi.md)
 - [SwagSocialShoppingSalesChannelJsonApiRelationships](docs/Model/SwagSocialShoppingSalesChannelJsonApiRelationships.md)
 - [SwagSocialShoppingSalesChannelJsonApiRelationshipsCurrency](docs/Model/SwagSocialShoppingSalesChannelJsonApiRelationshipsCurrency.md)
 - [SwagSocialShoppingSalesChannelJsonApiRelationshipsCurrencyData](docs/Model/SwagSocialShoppingSalesChannelJsonApiRelationshipsCurrencyData.md)
 - [SwagSocialShoppingSalesChannelJsonApiRelationshipsCurrencyLinks](docs/Model/SwagSocialShoppingSalesChannelJsonApiRelationshipsCurrencyLinks.md)
 - [SwagSocialShoppingSalesChannelJsonApiRelationshipsProductStream](docs/Model/SwagSocialShoppingSalesChannelJsonApiRelationshipsProductStream.md)
 - [SwagSocialShoppingSalesChannelJsonApiRelationshipsProductStreamData](docs/Model/SwagSocialShoppingSalesChannelJsonApiRelationshipsProductStreamData.md)
 - [SwagSocialShoppingSalesChannelJsonApiRelationshipsProductStreamLinks](docs/Model/SwagSocialShoppingSalesChannelJsonApiRelationshipsProductStreamLinks.md)
 - [SwagSocialShoppingSalesChannelJsonApiRelationshipsSalesChannel](docs/Model/SwagSocialShoppingSalesChannelJsonApiRelationshipsSalesChannel.md)
 - [SwagSocialShoppingSalesChannelJsonApiRelationshipsSalesChannelData](docs/Model/SwagSocialShoppingSalesChannelJsonApiRelationshipsSalesChannelData.md)
 - [SwagSocialShoppingSalesChannelJsonApiRelationshipsSalesChannelDomain](docs/Model/SwagSocialShoppingSalesChannelJsonApiRelationshipsSalesChannelDomain.md)
 - [SwagSocialShoppingSalesChannelJsonApiRelationshipsSalesChannelDomainData](docs/Model/SwagSocialShoppingSalesChannelJsonApiRelationshipsSalesChannelDomainData.md)
 - [SwagSocialShoppingSalesChannelJsonApiRelationshipsSalesChannelDomainLinks](docs/Model/SwagSocialShoppingSalesChannelJsonApiRelationshipsSalesChannelDomainLinks.md)
 - [SwagSocialShoppingSalesChannelJsonApiRelationshipsSalesChannelLinks](docs/Model/SwagSocialShoppingSalesChannelJsonApiRelationshipsSalesChannelLinks.md)
 - [SwagamazonpaypaymentnotificationBody](docs/Model/SwagamazonpaypaymentnotificationBody.md)
 - [SwagamazonpaypaymentnotificationIdBody](docs/Model/SwagamazonpaypaymentnotificationIdBody.md)
 - [SwagamazonpaysignuptokenBody](docs/Model/SwagamazonpaysignuptokenBody.md)
 - [SwagamazonpaysignuptokenIdBody](docs/Model/SwagamazonpaysignuptokenIdBody.md)
 - [SwagcmsextensionsblockruleBody](docs/Model/SwagcmsextensionsblockruleBody.md)
 - [SwagcmsextensionsblockruleIdBody](docs/Model/SwagcmsextensionsblockruleIdBody.md)
 - [SwagcmsextensionsformBody](docs/Model/SwagcmsextensionsformBody.md)
 - [SwagcmsextensionsformIdBody](docs/Model/SwagcmsextensionsformIdBody.md)
 - [SwagcmsextensionsformgroupBody](docs/Model/SwagcmsextensionsformgroupBody.md)
 - [SwagcmsextensionsformgroupIdBody](docs/Model/SwagcmsextensionsformgroupIdBody.md)
 - [SwagcmsextensionsformgroupfieldBody](docs/Model/SwagcmsextensionsformgroupfieldBody.md)
 - [SwagcmsextensionsformgroupfieldIdBody](docs/Model/SwagcmsextensionsformgroupfieldIdBody.md)
 - [SwagcmsextensionsquickviewBody](docs/Model/SwagcmsextensionsquickviewBody.md)
 - [SwagcmsextensionsquickviewIdBody](docs/Model/SwagcmsextensionsquickviewIdBody.md)
 - [SwagcmsextensionsscrollnavigationBody](docs/Model/SwagcmsextensionsscrollnavigationBody.md)
 - [SwagcmsextensionsscrollnavigationIdBody](docs/Model/SwagcmsextensionsscrollnavigationIdBody.md)
 - [SwagcmsextensionsscrollnavigationpagesettingsBody](docs/Model/SwagcmsextensionsscrollnavigationpagesettingsBody.md)
 - [SwagcmsextensionsscrollnavigationpagesettingsIdBody](docs/Model/SwagcmsextensionsscrollnavigationpagesettingsIdBody.md)
 - [SwaglanguagepacklanguageBody](docs/Model/SwaglanguagepacklanguageBody.md)
 - [SwaglanguagepacklanguageIdBody](docs/Model/SwaglanguagepacklanguageIdBody.md)
 - [SwagmigrationconnectionBody](docs/Model/SwagmigrationconnectionBody.md)
 - [SwagmigrationconnectionIdBody](docs/Model/SwagmigrationconnectionIdBody.md)
 - [SwagmigrationdataBody](docs/Model/SwagmigrationdataBody.md)
 - [SwagmigrationdataIdBody](docs/Model/SwagmigrationdataIdBody.md)
 - [SwagmigrationgeneralsettingBody](docs/Model/SwagmigrationgeneralsettingBody.md)
 - [SwagmigrationgeneralsettingIdBody](docs/Model/SwagmigrationgeneralsettingIdBody.md)
 - [SwagmigrationloggingBody](docs/Model/SwagmigrationloggingBody.md)
 - [SwagmigrationloggingIdBody](docs/Model/SwagmigrationloggingIdBody.md)
 - [SwagmigrationmappingBody](docs/Model/SwagmigrationmappingBody.md)
 - [SwagmigrationmappingIdBody](docs/Model/SwagmigrationmappingIdBody.md)
 - [SwagmigrationmediafileBody](docs/Model/SwagmigrationmediafileBody.md)
 - [SwagmigrationmediafileIdBody](docs/Model/SwagmigrationmediafileIdBody.md)
 - [SwagmigrationrunBody](docs/Model/SwagmigrationrunBody.md)
 - [SwagmigrationrunIdBody](docs/Model/SwagmigrationrunIdBody.md)
 - [SwagpaypalpossaleschannelBody](docs/Model/SwagpaypalpossaleschannelBody.md)
 - [SwagpaypalpossaleschannelIdBody](docs/Model/SwagpaypalpossaleschannelIdBody.md)
 - [SwagpaypalpossaleschannelrunBody](docs/Model/SwagpaypalpossaleschannelrunBody.md)
 - [SwagpaypalpossaleschannelrunIdBody](docs/Model/SwagpaypalpossaleschannelrunIdBody.md)
 - [SwagpaypalpossaleschannelrunlogBody](docs/Model/SwagpaypalpossaleschannelrunlogBody.md)
 - [SwagpaypalpossaleschannelrunlogIdBody](docs/Model/SwagpaypalpossaleschannelrunlogIdBody.md)
 - [SwagsocialshoppingproducterrorBody](docs/Model/SwagsocialshoppingproducterrorBody.md)
 - [SwagsocialshoppingproducterrorIdBody](docs/Model/SwagsocialshoppingproducterrorIdBody.md)
 - [SwagsocialshoppingsaleschannelBody](docs/Model/SwagsocialshoppingsaleschannelBody.md)
 - [SwagsocialshoppingsaleschannelIdBody](docs/Model/SwagsocialshoppingsaleschannelIdBody.md)
 - [SystemConfig](docs/Model/SystemConfig.md)
 - [SystemConfigJsonApi](docs/Model/SystemConfigJsonApi.md)
 - [SystemConfigJsonApiConfigurationValue](docs/Model/SystemConfigJsonApiConfigurationValue.md)
 - [SystemConfigJsonApiRelationships](docs/Model/SystemConfigJsonApiRelationships.md)
 - [SystemConfigJsonApiRelationshipsSalesChannel](docs/Model/SystemConfigJsonApiRelationshipsSalesChannel.md)
 - [SystemConfigJsonApiRelationshipsSalesChannelData](docs/Model/SystemConfigJsonApiRelationshipsSalesChannelData.md)
 - [SystemConfigJsonApiRelationshipsSalesChannelLinks](docs/Model/SystemConfigJsonApiRelationshipsSalesChannelLinks.md)
 - [SystemconfigBody](docs/Model/SystemconfigBody.md)
 - [SystemconfigIdBody](docs/Model/SystemconfigIdBody.md)
 - [Tag](docs/Model/Tag.md)
 - [TagBody](docs/Model/TagBody.md)
 - [TagIdBody](docs/Model/TagIdBody.md)
 - [TagJsonApi](docs/Model/TagJsonApi.md)
 - [TagJsonApiRelationships](docs/Model/TagJsonApiRelationships.md)
 - [TagJsonApiRelationshipsCategories](docs/Model/TagJsonApiRelationshipsCategories.md)
 - [TagJsonApiRelationshipsCategoriesData](docs/Model/TagJsonApiRelationshipsCategoriesData.md)
 - [TagJsonApiRelationshipsCategoriesLinks](docs/Model/TagJsonApiRelationshipsCategoriesLinks.md)
 - [TagJsonApiRelationshipsCustomers](docs/Model/TagJsonApiRelationshipsCustomers.md)
 - [TagJsonApiRelationshipsCustomersData](docs/Model/TagJsonApiRelationshipsCustomersData.md)
 - [TagJsonApiRelationshipsCustomersLinks](docs/Model/TagJsonApiRelationshipsCustomersLinks.md)
 - [TagJsonApiRelationshipsLandingPages](docs/Model/TagJsonApiRelationshipsLandingPages.md)
 - [TagJsonApiRelationshipsLandingPagesData](docs/Model/TagJsonApiRelationshipsLandingPagesData.md)
 - [TagJsonApiRelationshipsLandingPagesLinks](docs/Model/TagJsonApiRelationshipsLandingPagesLinks.md)
 - [TagJsonApiRelationshipsMedia](docs/Model/TagJsonApiRelationshipsMedia.md)
 - [TagJsonApiRelationshipsMediaData](docs/Model/TagJsonApiRelationshipsMediaData.md)
 - [TagJsonApiRelationshipsMediaLinks](docs/Model/TagJsonApiRelationshipsMediaLinks.md)
 - [TagJsonApiRelationshipsNewsletterRecipients](docs/Model/TagJsonApiRelationshipsNewsletterRecipients.md)
 - [TagJsonApiRelationshipsNewsletterRecipientsData](docs/Model/TagJsonApiRelationshipsNewsletterRecipientsData.md)
 - [TagJsonApiRelationshipsNewsletterRecipientsLinks](docs/Model/TagJsonApiRelationshipsNewsletterRecipientsLinks.md)
 - [TagJsonApiRelationshipsOrders](docs/Model/TagJsonApiRelationshipsOrders.md)
 - [TagJsonApiRelationshipsOrdersData](docs/Model/TagJsonApiRelationshipsOrdersData.md)
 - [TagJsonApiRelationshipsOrdersLinks](docs/Model/TagJsonApiRelationshipsOrdersLinks.md)
 - [TagJsonApiRelationshipsProducts](docs/Model/TagJsonApiRelationshipsProducts.md)
 - [TagJsonApiRelationshipsProductsData](docs/Model/TagJsonApiRelationshipsProductsData.md)
 - [TagJsonApiRelationshipsProductsLinks](docs/Model/TagJsonApiRelationshipsProductsLinks.md)
 - [TagJsonApiRelationshipsShippingMethods](docs/Model/TagJsonApiRelationshipsShippingMethods.md)
 - [TagJsonApiRelationshipsShippingMethodsData](docs/Model/TagJsonApiRelationshipsShippingMethodsData.md)
 - [TagJsonApiRelationshipsShippingMethodsLinks](docs/Model/TagJsonApiRelationshipsShippingMethodsLinks.md)
 - [Tax](docs/Model/Tax.md)
 - [TaxBody](docs/Model/TaxBody.md)
 - [TaxIdBody](docs/Model/TaxIdBody.md)
 - [TaxJsonApi](docs/Model/TaxJsonApi.md)
 - [TaxJsonApiRelationships](docs/Model/TaxJsonApiRelationships.md)
 - [TaxJsonApiRelationshipsProducts](docs/Model/TaxJsonApiRelationshipsProducts.md)
 - [TaxJsonApiRelationshipsProductsData](docs/Model/TaxJsonApiRelationshipsProductsData.md)
 - [TaxJsonApiRelationshipsProductsLinks](docs/Model/TaxJsonApiRelationshipsProductsLinks.md)
 - [TaxJsonApiRelationshipsRules](docs/Model/TaxJsonApiRelationshipsRules.md)
 - [TaxJsonApiRelationshipsRulesData](docs/Model/TaxJsonApiRelationshipsRulesData.md)
 - [TaxJsonApiRelationshipsRulesLinks](docs/Model/TaxJsonApiRelationshipsRulesLinks.md)
 - [TaxJsonApiRelationshipsShippingMethods](docs/Model/TaxJsonApiRelationshipsShippingMethods.md)
 - [TaxJsonApiRelationshipsShippingMethodsData](docs/Model/TaxJsonApiRelationshipsShippingMethodsData.md)
 - [TaxJsonApiRelationshipsShippingMethodsLinks](docs/Model/TaxJsonApiRelationshipsShippingMethodsLinks.md)
 - [TaxRule](docs/Model/TaxRule.md)
 - [TaxRuleJsonApi](docs/Model/TaxRuleJsonApi.md)
 - [TaxRuleJsonApiData](docs/Model/TaxRuleJsonApiData.md)
 - [TaxRuleJsonApiRelationships](docs/Model/TaxRuleJsonApiRelationships.md)
 - [TaxRuleJsonApiRelationshipsCountry](docs/Model/TaxRuleJsonApiRelationshipsCountry.md)
 - [TaxRuleJsonApiRelationshipsCountryData](docs/Model/TaxRuleJsonApiRelationshipsCountryData.md)
 - [TaxRuleJsonApiRelationshipsCountryLinks](docs/Model/TaxRuleJsonApiRelationshipsCountryLinks.md)
 - [TaxRuleJsonApiRelationshipsTax](docs/Model/TaxRuleJsonApiRelationshipsTax.md)
 - [TaxRuleJsonApiRelationshipsTaxData](docs/Model/TaxRuleJsonApiRelationshipsTaxData.md)
 - [TaxRuleJsonApiRelationshipsTaxLinks](docs/Model/TaxRuleJsonApiRelationshipsTaxLinks.md)
 - [TaxRuleJsonApiRelationshipsType](docs/Model/TaxRuleJsonApiRelationshipsType.md)
 - [TaxRuleJsonApiRelationshipsTypeData](docs/Model/TaxRuleJsonApiRelationshipsTypeData.md)
 - [TaxRuleJsonApiRelationshipsTypeLinks](docs/Model/TaxRuleJsonApiRelationshipsTypeLinks.md)
 - [TaxRuleType](docs/Model/TaxRuleType.md)
 - [TaxRuleTypeJsonApi](docs/Model/TaxRuleTypeJsonApi.md)
 - [TaxRuleTypeJsonApiRelationships](docs/Model/TaxRuleTypeJsonApiRelationships.md)
 - [TaxRuleTypeJsonApiRelationshipsRules](docs/Model/TaxRuleTypeJsonApiRelationshipsRules.md)
 - [TaxRuleTypeJsonApiRelationshipsRulesData](docs/Model/TaxRuleTypeJsonApiRelationshipsRulesData.md)
 - [TaxRuleTypeJsonApiRelationshipsRulesLinks](docs/Model/TaxRuleTypeJsonApiRelationshipsRulesLinks.md)
 - [TaxruleBody](docs/Model/TaxruleBody.md)
 - [TaxruleIdBody](docs/Model/TaxruleIdBody.md)
 - [TaxruletypeBody](docs/Model/TaxruletypeBody.md)
 - [TaxruletypeIdBody](docs/Model/TaxruletypeIdBody.md)
 - [Theme](docs/Model/Theme.md)
 - [ThemeBody](docs/Model/ThemeBody.md)
 - [ThemeIdBody](docs/Model/ThemeIdBody.md)
 - [ThemeJsonApi](docs/Model/ThemeJsonApi.md)
 - [ThemeJsonApiRelationships](docs/Model/ThemeJsonApiRelationships.md)
 - [ThemeJsonApiRelationshipsChildThemes](docs/Model/ThemeJsonApiRelationshipsChildThemes.md)
 - [ThemeJsonApiRelationshipsChildThemesData](docs/Model/ThemeJsonApiRelationshipsChildThemesData.md)
 - [ThemeJsonApiRelationshipsChildThemesLinks](docs/Model/ThemeJsonApiRelationshipsChildThemesLinks.md)
 - [ThemeJsonApiRelationshipsMedia](docs/Model/ThemeJsonApiRelationshipsMedia.md)
 - [ThemeJsonApiRelationshipsMediaData](docs/Model/ThemeJsonApiRelationshipsMediaData.md)
 - [ThemeJsonApiRelationshipsMediaLinks](docs/Model/ThemeJsonApiRelationshipsMediaLinks.md)
 - [ThemeJsonApiRelationshipsPreviewMedia](docs/Model/ThemeJsonApiRelationshipsPreviewMedia.md)
 - [ThemeJsonApiRelationshipsPreviewMediaData](docs/Model/ThemeJsonApiRelationshipsPreviewMediaData.md)
 - [ThemeJsonApiRelationshipsPreviewMediaLinks](docs/Model/ThemeJsonApiRelationshipsPreviewMediaLinks.md)
 - [ThemeJsonApiRelationshipsSalesChannels](docs/Model/ThemeJsonApiRelationshipsSalesChannels.md)
 - [ThemeJsonApiRelationshipsSalesChannelsData](docs/Model/ThemeJsonApiRelationshipsSalesChannelsData.md)
 - [ThemeJsonApiRelationshipsSalesChannelsLinks](docs/Model/ThemeJsonApiRelationshipsSalesChannelsLinks.md)
 - [ThemeMedia](docs/Model/ThemeMedia.md)
 - [ThemeSalesChannel](docs/Model/ThemeSalesChannel.md)
 - [Unit](docs/Model/Unit.md)
 - [UnitBody](docs/Model/UnitBody.md)
 - [UnitIdBody](docs/Model/UnitIdBody.md)
 - [UnitJsonApi](docs/Model/UnitJsonApi.md)
 - [UnitJsonApiRelationships](docs/Model/UnitJsonApiRelationships.md)
 - [UnitJsonApiRelationshipsProducts](docs/Model/UnitJsonApiRelationshipsProducts.md)
 - [UnitJsonApiRelationshipsProductsData](docs/Model/UnitJsonApiRelationshipsProductsData.md)
 - [UnitJsonApiRelationshipsProductsLinks](docs/Model/UnitJsonApiRelationshipsProductsLinks.md)
 - [User](docs/Model/User.md)
 - [UserAccessKey](docs/Model/UserAccessKey.md)
 - [UserAccessKeyJsonApi](docs/Model/UserAccessKeyJsonApi.md)
 - [UserAccessKeyJsonApiRelationships](docs/Model/UserAccessKeyJsonApiRelationships.md)
 - [UserAccessKeyJsonApiRelationshipsUser](docs/Model/UserAccessKeyJsonApiRelationshipsUser.md)
 - [UserAccessKeyJsonApiRelationshipsUserData](docs/Model/UserAccessKeyJsonApiRelationshipsUserData.md)
 - [UserAccessKeyJsonApiRelationshipsUserLinks](docs/Model/UserAccessKeyJsonApiRelationshipsUserLinks.md)
 - [UserBody](docs/Model/UserBody.md)
 - [UserConfig](docs/Model/UserConfig.md)
 - [UserConfigJsonApi](docs/Model/UserConfigJsonApi.md)
 - [UserConfigJsonApiRelationships](docs/Model/UserConfigJsonApiRelationships.md)
 - [UserConfigJsonApiRelationshipsUser](docs/Model/UserConfigJsonApiRelationshipsUser.md)
 - [UserConfigJsonApiRelationshipsUserData](docs/Model/UserConfigJsonApiRelationshipsUserData.md)
 - [UserConfigJsonApiRelationshipsUserLinks](docs/Model/UserConfigJsonApiRelationshipsUserLinks.md)
 - [UserIdBody](docs/Model/UserIdBody.md)
 - [UserJsonApi](docs/Model/UserJsonApi.md)
 - [UserJsonApiRelationships](docs/Model/UserJsonApiRelationships.md)
 - [UserJsonApiRelationshipsAccessKeys](docs/Model/UserJsonApiRelationshipsAccessKeys.md)
 - [UserJsonApiRelationshipsAccessKeysData](docs/Model/UserJsonApiRelationshipsAccessKeysData.md)
 - [UserJsonApiRelationshipsAccessKeysLinks](docs/Model/UserJsonApiRelationshipsAccessKeysLinks.md)
 - [UserJsonApiRelationshipsAclRoles](docs/Model/UserJsonApiRelationshipsAclRoles.md)
 - [UserJsonApiRelationshipsAclRolesData](docs/Model/UserJsonApiRelationshipsAclRolesData.md)
 - [UserJsonApiRelationshipsAclRolesLinks](docs/Model/UserJsonApiRelationshipsAclRolesLinks.md)
 - [UserJsonApiRelationshipsAvatarMedia](docs/Model/UserJsonApiRelationshipsAvatarMedia.md)
 - [UserJsonApiRelationshipsAvatarMediaData](docs/Model/UserJsonApiRelationshipsAvatarMediaData.md)
 - [UserJsonApiRelationshipsAvatarMediaLinks](docs/Model/UserJsonApiRelationshipsAvatarMediaLinks.md)
 - [UserJsonApiRelationshipsConfigs](docs/Model/UserJsonApiRelationshipsConfigs.md)
 - [UserJsonApiRelationshipsConfigsData](docs/Model/UserJsonApiRelationshipsConfigsData.md)
 - [UserJsonApiRelationshipsConfigsLinks](docs/Model/UserJsonApiRelationshipsConfigsLinks.md)
 - [UserJsonApiRelationshipsCreatedOrders](docs/Model/UserJsonApiRelationshipsCreatedOrders.md)
 - [UserJsonApiRelationshipsCreatedOrdersData](docs/Model/UserJsonApiRelationshipsCreatedOrdersData.md)
 - [UserJsonApiRelationshipsCreatedOrdersLinks](docs/Model/UserJsonApiRelationshipsCreatedOrdersLinks.md)
 - [UserJsonApiRelationshipsImportExportLogEntries](docs/Model/UserJsonApiRelationshipsImportExportLogEntries.md)
 - [UserJsonApiRelationshipsImportExportLogEntriesData](docs/Model/UserJsonApiRelationshipsImportExportLogEntriesData.md)
 - [UserJsonApiRelationshipsImportExportLogEntriesLinks](docs/Model/UserJsonApiRelationshipsImportExportLogEntriesLinks.md)
 - [UserJsonApiRelationshipsLocale](docs/Model/UserJsonApiRelationshipsLocale.md)
 - [UserJsonApiRelationshipsLocaleData](docs/Model/UserJsonApiRelationshipsLocaleData.md)
 - [UserJsonApiRelationshipsLocaleLinks](docs/Model/UserJsonApiRelationshipsLocaleLinks.md)
 - [UserJsonApiRelationshipsMedia](docs/Model/UserJsonApiRelationshipsMedia.md)
 - [UserJsonApiRelationshipsMediaData](docs/Model/UserJsonApiRelationshipsMediaData.md)
 - [UserJsonApiRelationshipsMediaLinks](docs/Model/UserJsonApiRelationshipsMediaLinks.md)
 - [UserJsonApiRelationshipsRecoveryUser](docs/Model/UserJsonApiRelationshipsRecoveryUser.md)
 - [UserJsonApiRelationshipsRecoveryUserData](docs/Model/UserJsonApiRelationshipsRecoveryUserData.md)
 - [UserJsonApiRelationshipsRecoveryUserLinks](docs/Model/UserJsonApiRelationshipsRecoveryUserLinks.md)
 - [UserJsonApiRelationshipsStateMachineHistoryEntries](docs/Model/UserJsonApiRelationshipsStateMachineHistoryEntries.md)
 - [UserJsonApiRelationshipsStateMachineHistoryEntriesData](docs/Model/UserJsonApiRelationshipsStateMachineHistoryEntriesData.md)
 - [UserJsonApiRelationshipsStateMachineHistoryEntriesLinks](docs/Model/UserJsonApiRelationshipsStateMachineHistoryEntriesLinks.md)
 - [UserJsonApiRelationshipsUpdatedOrders](docs/Model/UserJsonApiRelationshipsUpdatedOrders.md)
 - [UserJsonApiRelationshipsUpdatedOrdersData](docs/Model/UserJsonApiRelationshipsUpdatedOrdersData.md)
 - [UserJsonApiRelationshipsUpdatedOrdersLinks](docs/Model/UserJsonApiRelationshipsUpdatedOrdersLinks.md)
 - [UserRecovery](docs/Model/UserRecovery.md)
 - [UserRecoveryJsonApi](docs/Model/UserRecoveryJsonApi.md)
 - [UserRecoveryJsonApiRelationships](docs/Model/UserRecoveryJsonApiRelationships.md)
 - [UserRecoveryJsonApiRelationshipsUser](docs/Model/UserRecoveryJsonApiRelationshipsUser.md)
 - [UserRecoveryJsonApiRelationshipsUserData](docs/Model/UserRecoveryJsonApiRelationshipsUserData.md)
 - [UserRecoveryJsonApiRelationshipsUserLinks](docs/Model/UserRecoveryJsonApiRelationshipsUserLinks.md)
 - [UseraccesskeyBody](docs/Model/UseraccesskeyBody.md)
 - [UseraccesskeyIdBody](docs/Model/UseraccesskeyIdBody.md)
 - [UserconfigBody](docs/Model/UserconfigBody.md)
 - [UserconfigIdBody](docs/Model/UserconfigIdBody.md)
 - [UserrecoveryBody](docs/Model/UserrecoveryBody.md)
 - [UserrecoveryIdBody](docs/Model/UserrecoveryIdBody.md)
 - [Webhook](docs/Model/Webhook.md)
 - [WebhookBody](docs/Model/WebhookBody.md)
 - [WebhookEventLog](docs/Model/WebhookEventLog.md)
 - [WebhookEventLogJsonApi](docs/Model/WebhookEventLogJsonApi.md)
 - [WebhookIdBody](docs/Model/WebhookIdBody.md)
 - [WebhookJsonApi](docs/Model/WebhookJsonApi.md)
 - [WebhookJsonApiRelationships](docs/Model/WebhookJsonApiRelationships.md)
 - [WebhookJsonApiRelationshipsApp](docs/Model/WebhookJsonApiRelationshipsApp.md)
 - [WebhookJsonApiRelationshipsAppData](docs/Model/WebhookJsonApiRelationshipsAppData.md)
 - [WebhookJsonApiRelationshipsAppLinks](docs/Model/WebhookJsonApiRelationshipsAppLinks.md)
 - [WebhookeventlogBody](docs/Model/WebhookeventlogBody.md)
 - [WebhookeventlogIdBody](docs/Model/WebhookeventlogIdBody.md)

## Documentation For Authorization


## oAuth

- **Type**: OAuth
- **Flow**: password
- **Authorization URL**: 
- **Scopes**: 
 - **write**: Full write access


## Author



