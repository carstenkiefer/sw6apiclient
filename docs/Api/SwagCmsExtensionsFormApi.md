# Swagger\Client\SwagCmsExtensionsFormApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagCmsExtensionsForm**](SwagCmsExtensionsFormApi.md#createswagcmsextensionsform) | **POST** /swag-cms-extensions-form | Create a new Swag Cms Extensions Form resources
[**deleteSwagCmsExtensionsForm**](SwagCmsExtensionsFormApi.md#deleteswagcmsextensionsform) | **DELETE** /swag-cms-extensions-form/{id} | Delete a Swag Cms Extensions Form resource
[**getSwagCmsExtensionsForm**](SwagCmsExtensionsFormApi.md#getswagcmsextensionsform) | **GET** /swag-cms-extensions-form/{id} | Detailed information about a Swag Cms Extensions Form resource
[**getSwagCmsExtensionsFormList**](SwagCmsExtensionsFormApi.md#getswagcmsextensionsformlist) | **GET** /swag-cms-extensions-form | List with basic information of Swag Cms Extensions Form resources
[**updateSwagCmsExtensionsForm**](SwagCmsExtensionsFormApi.md#updateswagcmsextensionsform) | **PATCH** /swag-cms-extensions-form/{id} | Partially update information about a Swag Cms Extensions Form resource

# **createSwagCmsExtensionsForm**
> \Swagger\Client\Model\InlineResponse200425 createSwagCmsExtensionsForm($body, $_response)

Create a new Swag Cms Extensions Form resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsFormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagcmsextensionsformBody(); // \Swagger\Client\Model\SwagcmsextensionsformBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagCmsExtensionsForm($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsFormApi->createSwagCmsExtensionsForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsformBody**](../Model/SwagcmsextensionsformBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200425**](../Model/InlineResponse200425.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagCmsExtensionsForm**
> \Swagger\Client\Model\InlineResponse200425 createSwagCmsExtensionsForm($body, $_response)

Create a new Swag Cms Extensions Form resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsFormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagcmsextensionsformBody(); // \Swagger\Client\Model\SwagcmsextensionsformBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagCmsExtensionsForm($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsFormApi->createSwagCmsExtensionsForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsformBody**](../Model/SwagcmsextensionsformBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200425**](../Model/InlineResponse200425.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagCmsExtensionsForm**
> deleteSwagCmsExtensionsForm($id, $_response)

Delete a Swag Cms Extensions Form resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsFormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_form
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagCmsExtensionsForm($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsFormApi->deleteSwagCmsExtensionsForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_form |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagCmsExtensionsForm**
> \Swagger\Client\Model\InlineResponse200425 getSwagCmsExtensionsForm($id)

Detailed information about a Swag Cms Extensions Form resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsFormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_form

try {
    $result = $apiInstance->getSwagCmsExtensionsForm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsFormApi->getSwagCmsExtensionsForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_form |

### Return type

[**\Swagger\Client\Model\InlineResponse200425**](../Model/InlineResponse200425.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagCmsExtensionsFormList**
> \Swagger\Client\Model\InlineResponse200423 getSwagCmsExtensionsFormList($limit, $page, $query)

List with basic information of Swag Cms Extensions Form resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsFormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagCmsExtensionsFormList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsFormApi->getSwagCmsExtensionsFormList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200423**](../Model/InlineResponse200423.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagCmsExtensionsForm**
> \Swagger\Client\Model\InlineResponse200425 updateSwagCmsExtensionsForm($id, $body, $_response)

Partially update information about a Swag Cms Extensions Form resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsFormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_form
$body = new \Swagger\Client\Model\SwagcmsextensionsformIdBody(); // \Swagger\Client\Model\SwagcmsextensionsformIdBody | Partially update information about a Swag Cms Extensions Form resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagCmsExtensionsForm($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsFormApi->updateSwagCmsExtensionsForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_form |
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsformIdBody**](../Model/SwagcmsextensionsformIdBody.md)| Partially update information about a Swag Cms Extensions Form resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200425**](../Model/InlineResponse200425.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagCmsExtensionsForm**
> \Swagger\Client\Model\InlineResponse200425 updateSwagCmsExtensionsForm($id, $body, $_response)

Partially update information about a Swag Cms Extensions Form resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsFormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_form
$body = new \Swagger\Client\Model\SwagcmsextensionsformIdBody(); // \Swagger\Client\Model\SwagcmsextensionsformIdBody | Partially update information about a Swag Cms Extensions Form resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagCmsExtensionsForm($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsFormApi->updateSwagCmsExtensionsForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_form |
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsformIdBody**](../Model/SwagcmsextensionsformIdBody.md)| Partially update information about a Swag Cms Extensions Form resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200425**](../Model/InlineResponse200425.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

