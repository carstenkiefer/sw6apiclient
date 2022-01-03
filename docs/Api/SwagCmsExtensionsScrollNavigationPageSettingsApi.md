# Swagger\Client\SwagCmsExtensionsScrollNavigationPageSettingsApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagCmsExtensionsScrollNavigationPageSettings**](SwagCmsExtensionsScrollNavigationPageSettingsApi.md#createswagcmsextensionsscrollnavigationpagesettings) | **POST** /swag-cms-extensions-scroll-navigation-page-settings | Create a new Swag Cms Extensions Scroll Navigation Page Settings resources
[**deleteSwagCmsExtensionsScrollNavigationPageSettings**](SwagCmsExtensionsScrollNavigationPageSettingsApi.md#deleteswagcmsextensionsscrollnavigationpagesettings) | **DELETE** /swag-cms-extensions-scroll-navigation-page-settings/{id} | Delete a Swag Cms Extensions Scroll Navigation Page Settings resource
[**getSwagCmsExtensionsScrollNavigationPageSettings**](SwagCmsExtensionsScrollNavigationPageSettingsApi.md#getswagcmsextensionsscrollnavigationpagesettings) | **GET** /swag-cms-extensions-scroll-navigation-page-settings/{id} | Detailed information about a Swag Cms Extensions Scroll Navigation Page Settings resource
[**getSwagCmsExtensionsScrollNavigationPageSettingsList**](SwagCmsExtensionsScrollNavigationPageSettingsApi.md#getswagcmsextensionsscrollnavigationpagesettingslist) | **GET** /swag-cms-extensions-scroll-navigation-page-settings | List with basic information of Swag Cms Extensions Scroll Navigation Page Settings resources
[**updateSwagCmsExtensionsScrollNavigationPageSettings**](SwagCmsExtensionsScrollNavigationPageSettingsApi.md#updateswagcmsextensionsscrollnavigationpagesettings) | **PATCH** /swag-cms-extensions-scroll-navigation-page-settings/{id} | Partially update information about a Swag Cms Extensions Scroll Navigation Page Settings resource

# **createSwagCmsExtensionsScrollNavigationPageSettings**
> \Swagger\Client\Model\InlineResponse200440 createSwagCmsExtensionsScrollNavigationPageSettings($body, $_response)

Create a new Swag Cms Extensions Scroll Navigation Page Settings resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsScrollNavigationPageSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagcmsextensionsscrollnavigationpagesettingsBody(); // \Swagger\Client\Model\SwagcmsextensionsscrollnavigationpagesettingsBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagCmsExtensionsScrollNavigationPageSettings($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsScrollNavigationPageSettingsApi->createSwagCmsExtensionsScrollNavigationPageSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsscrollnavigationpagesettingsBody**](../Model/SwagcmsextensionsscrollnavigationpagesettingsBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200440**](../Model/InlineResponse200440.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagCmsExtensionsScrollNavigationPageSettings**
> \Swagger\Client\Model\InlineResponse200440 createSwagCmsExtensionsScrollNavigationPageSettings($body, $_response)

Create a new Swag Cms Extensions Scroll Navigation Page Settings resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsScrollNavigationPageSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagcmsextensionsscrollnavigationpagesettingsBody(); // \Swagger\Client\Model\SwagcmsextensionsscrollnavigationpagesettingsBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagCmsExtensionsScrollNavigationPageSettings($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsScrollNavigationPageSettingsApi->createSwagCmsExtensionsScrollNavigationPageSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsscrollnavigationpagesettingsBody**](../Model/SwagcmsextensionsscrollnavigationpagesettingsBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200440**](../Model/InlineResponse200440.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagCmsExtensionsScrollNavigationPageSettings**
> deleteSwagCmsExtensionsScrollNavigationPageSettings($id, $_response)

Delete a Swag Cms Extensions Scroll Navigation Page Settings resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsScrollNavigationPageSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_scroll_navigation_page_settings
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagCmsExtensionsScrollNavigationPageSettings($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsScrollNavigationPageSettingsApi->deleteSwagCmsExtensionsScrollNavigationPageSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_scroll_navigation_page_settings |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagCmsExtensionsScrollNavigationPageSettings**
> \Swagger\Client\Model\InlineResponse200440 getSwagCmsExtensionsScrollNavigationPageSettings($id)

Detailed information about a Swag Cms Extensions Scroll Navigation Page Settings resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsScrollNavigationPageSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_scroll_navigation_page_settings

try {
    $result = $apiInstance->getSwagCmsExtensionsScrollNavigationPageSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsScrollNavigationPageSettingsApi->getSwagCmsExtensionsScrollNavigationPageSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_scroll_navigation_page_settings |

### Return type

[**\Swagger\Client\Model\InlineResponse200440**](../Model/InlineResponse200440.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagCmsExtensionsScrollNavigationPageSettingsList**
> \Swagger\Client\Model\InlineResponse200438 getSwagCmsExtensionsScrollNavigationPageSettingsList($limit, $page, $query)

List with basic information of Swag Cms Extensions Scroll Navigation Page Settings resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsScrollNavigationPageSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagCmsExtensionsScrollNavigationPageSettingsList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsScrollNavigationPageSettingsApi->getSwagCmsExtensionsScrollNavigationPageSettingsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Max amount of resources to be returned in a page | [optional]
 **page** | **int**| The page to be returned | [optional]
 **query** | **string**| Encoded SwagQL in JSON | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200438**](../Model/InlineResponse200438.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagCmsExtensionsScrollNavigationPageSettings**
> \Swagger\Client\Model\InlineResponse200440 updateSwagCmsExtensionsScrollNavigationPageSettings($id, $body, $_response)

Partially update information about a Swag Cms Extensions Scroll Navigation Page Settings resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsScrollNavigationPageSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_scroll_navigation_page_settings
$body = new \Swagger\Client\Model\SwagcmsextensionsscrollnavigationpagesettingsIdBody(); // \Swagger\Client\Model\SwagcmsextensionsscrollnavigationpagesettingsIdBody | Partially update information about a Swag Cms Extensions Scroll Navigation Page Settings resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagCmsExtensionsScrollNavigationPageSettings($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsScrollNavigationPageSettingsApi->updateSwagCmsExtensionsScrollNavigationPageSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_scroll_navigation_page_settings |
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsscrollnavigationpagesettingsIdBody**](../Model/SwagcmsextensionsscrollnavigationpagesettingsIdBody.md)| Partially update information about a Swag Cms Extensions Scroll Navigation Page Settings resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200440**](../Model/InlineResponse200440.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagCmsExtensionsScrollNavigationPageSettings**
> \Swagger\Client\Model\InlineResponse200440 updateSwagCmsExtensionsScrollNavigationPageSettings($id, $body, $_response)

Partially update information about a Swag Cms Extensions Scroll Navigation Page Settings resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsScrollNavigationPageSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_scroll_navigation_page_settings
$body = new \Swagger\Client\Model\SwagcmsextensionsscrollnavigationpagesettingsIdBody(); // \Swagger\Client\Model\SwagcmsextensionsscrollnavigationpagesettingsIdBody | Partially update information about a Swag Cms Extensions Scroll Navigation Page Settings resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagCmsExtensionsScrollNavigationPageSettings($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsScrollNavigationPageSettingsApi->updateSwagCmsExtensionsScrollNavigationPageSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_scroll_navigation_page_settings |
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsscrollnavigationpagesettingsIdBody**](../Model/SwagcmsextensionsscrollnavigationpagesettingsIdBody.md)| Partially update information about a Swag Cms Extensions Scroll Navigation Page Settings resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200440**](../Model/InlineResponse200440.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

