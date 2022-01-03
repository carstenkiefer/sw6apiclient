# Swagger\Client\SwagCmsExtensionsQuickviewApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagCmsExtensionsQuickview**](SwagCmsExtensionsQuickviewApi.md#createswagcmsextensionsquickview) | **POST** /swag-cms-extensions-quickview | Create a new Swag Cms Extensions Quickview resources
[**deleteSwagCmsExtensionsQuickview**](SwagCmsExtensionsQuickviewApi.md#deleteswagcmsextensionsquickview) | **DELETE** /swag-cms-extensions-quickview/{id} | Delete a Swag Cms Extensions Quickview resource
[**getSwagCmsExtensionsQuickview**](SwagCmsExtensionsQuickviewApi.md#getswagcmsextensionsquickview) | **GET** /swag-cms-extensions-quickview/{id} | Detailed information about a Swag Cms Extensions Quickview resource
[**getSwagCmsExtensionsQuickviewList**](SwagCmsExtensionsQuickviewApi.md#getswagcmsextensionsquickviewlist) | **GET** /swag-cms-extensions-quickview | List with basic information of Swag Cms Extensions Quickview resources
[**updateSwagCmsExtensionsQuickview**](SwagCmsExtensionsQuickviewApi.md#updateswagcmsextensionsquickview) | **PATCH** /swag-cms-extensions-quickview/{id} | Partially update information about a Swag Cms Extensions Quickview resource

# **createSwagCmsExtensionsQuickview**
> \Swagger\Client\Model\InlineResponse200434 createSwagCmsExtensionsQuickview($body, $_response)

Create a new Swag Cms Extensions Quickview resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsQuickviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagcmsextensionsquickviewBody(); // \Swagger\Client\Model\SwagcmsextensionsquickviewBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagCmsExtensionsQuickview($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsQuickviewApi->createSwagCmsExtensionsQuickview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsquickviewBody**](../Model/SwagcmsextensionsquickviewBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200434**](../Model/InlineResponse200434.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagCmsExtensionsQuickview**
> \Swagger\Client\Model\InlineResponse200434 createSwagCmsExtensionsQuickview($body, $_response)

Create a new Swag Cms Extensions Quickview resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsQuickviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagcmsextensionsquickviewBody(); // \Swagger\Client\Model\SwagcmsextensionsquickviewBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagCmsExtensionsQuickview($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsQuickviewApi->createSwagCmsExtensionsQuickview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsquickviewBody**](../Model/SwagcmsextensionsquickviewBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200434**](../Model/InlineResponse200434.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagCmsExtensionsQuickview**
> deleteSwagCmsExtensionsQuickview($id, $_response)

Delete a Swag Cms Extensions Quickview resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsQuickviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_quickview
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagCmsExtensionsQuickview($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsQuickviewApi->deleteSwagCmsExtensionsQuickview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_quickview |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagCmsExtensionsQuickview**
> \Swagger\Client\Model\InlineResponse200434 getSwagCmsExtensionsQuickview($id)

Detailed information about a Swag Cms Extensions Quickview resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsQuickviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_quickview

try {
    $result = $apiInstance->getSwagCmsExtensionsQuickview($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsQuickviewApi->getSwagCmsExtensionsQuickview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_quickview |

### Return type

[**\Swagger\Client\Model\InlineResponse200434**](../Model/InlineResponse200434.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagCmsExtensionsQuickviewList**
> \Swagger\Client\Model\InlineResponse200432 getSwagCmsExtensionsQuickviewList($limit, $page, $query)

List with basic information of Swag Cms Extensions Quickview resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsQuickviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagCmsExtensionsQuickviewList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsQuickviewApi->getSwagCmsExtensionsQuickviewList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200432**](../Model/InlineResponse200432.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagCmsExtensionsQuickview**
> \Swagger\Client\Model\InlineResponse200434 updateSwagCmsExtensionsQuickview($id, $body, $_response)

Partially update information about a Swag Cms Extensions Quickview resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsQuickviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_quickview
$body = new \Swagger\Client\Model\SwagcmsextensionsquickviewIdBody(); // \Swagger\Client\Model\SwagcmsextensionsquickviewIdBody | Partially update information about a Swag Cms Extensions Quickview resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagCmsExtensionsQuickview($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsQuickviewApi->updateSwagCmsExtensionsQuickview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_quickview |
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsquickviewIdBody**](../Model/SwagcmsextensionsquickviewIdBody.md)| Partially update information about a Swag Cms Extensions Quickview resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200434**](../Model/InlineResponse200434.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagCmsExtensionsQuickview**
> \Swagger\Client\Model\InlineResponse200434 updateSwagCmsExtensionsQuickview($id, $body, $_response)

Partially update information about a Swag Cms Extensions Quickview resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsQuickviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_quickview
$body = new \Swagger\Client\Model\SwagcmsextensionsquickviewIdBody(); // \Swagger\Client\Model\SwagcmsextensionsquickviewIdBody | Partially update information about a Swag Cms Extensions Quickview resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagCmsExtensionsQuickview($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsQuickviewApi->updateSwagCmsExtensionsQuickview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_quickview |
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsquickviewIdBody**](../Model/SwagcmsextensionsquickviewIdBody.md)| Partially update information about a Swag Cms Extensions Quickview resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200434**](../Model/InlineResponse200434.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

