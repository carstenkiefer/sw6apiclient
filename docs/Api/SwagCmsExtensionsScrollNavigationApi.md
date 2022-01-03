# Swagger\Client\SwagCmsExtensionsScrollNavigationApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagCmsExtensionsScrollNavigation**](SwagCmsExtensionsScrollNavigationApi.md#createswagcmsextensionsscrollnavigation) | **POST** /swag-cms-extensions-scroll-navigation | Create a new Swag Cms Extensions Scroll Navigation resources
[**deleteSwagCmsExtensionsScrollNavigation**](SwagCmsExtensionsScrollNavigationApi.md#deleteswagcmsextensionsscrollnavigation) | **DELETE** /swag-cms-extensions-scroll-navigation/{id} | Delete a Swag Cms Extensions Scroll Navigation resource
[**getSwagCmsExtensionsScrollNavigation**](SwagCmsExtensionsScrollNavigationApi.md#getswagcmsextensionsscrollnavigation) | **GET** /swag-cms-extensions-scroll-navigation/{id} | Detailed information about a Swag Cms Extensions Scroll Navigation resource
[**getSwagCmsExtensionsScrollNavigationList**](SwagCmsExtensionsScrollNavigationApi.md#getswagcmsextensionsscrollnavigationlist) | **GET** /swag-cms-extensions-scroll-navigation | List with basic information of Swag Cms Extensions Scroll Navigation resources
[**updateSwagCmsExtensionsScrollNavigation**](SwagCmsExtensionsScrollNavigationApi.md#updateswagcmsextensionsscrollnavigation) | **PATCH** /swag-cms-extensions-scroll-navigation/{id} | Partially update information about a Swag Cms Extensions Scroll Navigation resource

# **createSwagCmsExtensionsScrollNavigation**
> \Swagger\Client\Model\InlineResponse200437 createSwagCmsExtensionsScrollNavigation($body, $_response)

Create a new Swag Cms Extensions Scroll Navigation resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsScrollNavigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagcmsextensionsscrollnavigationBody(); // \Swagger\Client\Model\SwagcmsextensionsscrollnavigationBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagCmsExtensionsScrollNavigation($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsScrollNavigationApi->createSwagCmsExtensionsScrollNavigation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsscrollnavigationBody**](../Model/SwagcmsextensionsscrollnavigationBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200437**](../Model/InlineResponse200437.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagCmsExtensionsScrollNavigation**
> \Swagger\Client\Model\InlineResponse200437 createSwagCmsExtensionsScrollNavigation($body, $_response)

Create a new Swag Cms Extensions Scroll Navigation resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsScrollNavigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagcmsextensionsscrollnavigationBody(); // \Swagger\Client\Model\SwagcmsextensionsscrollnavigationBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagCmsExtensionsScrollNavigation($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsScrollNavigationApi->createSwagCmsExtensionsScrollNavigation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsscrollnavigationBody**](../Model/SwagcmsextensionsscrollnavigationBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200437**](../Model/InlineResponse200437.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagCmsExtensionsScrollNavigation**
> deleteSwagCmsExtensionsScrollNavigation($id, $_response)

Delete a Swag Cms Extensions Scroll Navigation resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsScrollNavigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_scroll_navigation
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagCmsExtensionsScrollNavigation($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsScrollNavigationApi->deleteSwagCmsExtensionsScrollNavigation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_scroll_navigation |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagCmsExtensionsScrollNavigation**
> \Swagger\Client\Model\InlineResponse200437 getSwagCmsExtensionsScrollNavigation($id)

Detailed information about a Swag Cms Extensions Scroll Navigation resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsScrollNavigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_scroll_navigation

try {
    $result = $apiInstance->getSwagCmsExtensionsScrollNavigation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsScrollNavigationApi->getSwagCmsExtensionsScrollNavigation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_scroll_navigation |

### Return type

[**\Swagger\Client\Model\InlineResponse200437**](../Model/InlineResponse200437.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagCmsExtensionsScrollNavigationList**
> \Swagger\Client\Model\InlineResponse200435 getSwagCmsExtensionsScrollNavigationList($limit, $page, $query)

List with basic information of Swag Cms Extensions Scroll Navigation resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsScrollNavigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagCmsExtensionsScrollNavigationList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsScrollNavigationApi->getSwagCmsExtensionsScrollNavigationList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200435**](../Model/InlineResponse200435.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagCmsExtensionsScrollNavigation**
> \Swagger\Client\Model\InlineResponse200437 updateSwagCmsExtensionsScrollNavigation($id, $body, $_response)

Partially update information about a Swag Cms Extensions Scroll Navigation resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsScrollNavigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_scroll_navigation
$body = new \Swagger\Client\Model\SwagcmsextensionsscrollnavigationIdBody(); // \Swagger\Client\Model\SwagcmsextensionsscrollnavigationIdBody | Partially update information about a Swag Cms Extensions Scroll Navigation resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagCmsExtensionsScrollNavigation($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsScrollNavigationApi->updateSwagCmsExtensionsScrollNavigation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_scroll_navigation |
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsscrollnavigationIdBody**](../Model/SwagcmsextensionsscrollnavigationIdBody.md)| Partially update information about a Swag Cms Extensions Scroll Navigation resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200437**](../Model/InlineResponse200437.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagCmsExtensionsScrollNavigation**
> \Swagger\Client\Model\InlineResponse200437 updateSwagCmsExtensionsScrollNavigation($id, $body, $_response)

Partially update information about a Swag Cms Extensions Scroll Navigation resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsScrollNavigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_scroll_navigation
$body = new \Swagger\Client\Model\SwagcmsextensionsscrollnavigationIdBody(); // \Swagger\Client\Model\SwagcmsextensionsscrollnavigationIdBody | Partially update information about a Swag Cms Extensions Scroll Navigation resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagCmsExtensionsScrollNavigation($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsScrollNavigationApi->updateSwagCmsExtensionsScrollNavigation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_scroll_navigation |
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsscrollnavigationIdBody**](../Model/SwagcmsextensionsscrollnavigationIdBody.md)| Partially update information about a Swag Cms Extensions Scroll Navigation resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200437**](../Model/InlineResponse200437.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

