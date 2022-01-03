# Swagger\Client\SwagCmsExtensionsBlockRuleApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagCmsExtensionsBlockRule**](SwagCmsExtensionsBlockRuleApi.md#createswagcmsextensionsblockrule) | **POST** /swag-cms-extensions-block-rule | Create a new Swag Cms Extensions Block Rule resources
[**deleteSwagCmsExtensionsBlockRule**](SwagCmsExtensionsBlockRuleApi.md#deleteswagcmsextensionsblockrule) | **DELETE** /swag-cms-extensions-block-rule/{id} | Delete a Swag Cms Extensions Block Rule resource
[**getSwagCmsExtensionsBlockRule**](SwagCmsExtensionsBlockRuleApi.md#getswagcmsextensionsblockrule) | **GET** /swag-cms-extensions-block-rule/{id} | Detailed information about a Swag Cms Extensions Block Rule resource
[**getSwagCmsExtensionsBlockRuleList**](SwagCmsExtensionsBlockRuleApi.md#getswagcmsextensionsblockrulelist) | **GET** /swag-cms-extensions-block-rule | List with basic information of Swag Cms Extensions Block Rule resources
[**updateSwagCmsExtensionsBlockRule**](SwagCmsExtensionsBlockRuleApi.md#updateswagcmsextensionsblockrule) | **PATCH** /swag-cms-extensions-block-rule/{id} | Partially update information about a Swag Cms Extensions Block Rule resource

# **createSwagCmsExtensionsBlockRule**
> \Swagger\Client\Model\InlineResponse200422 createSwagCmsExtensionsBlockRule($body, $_response)

Create a new Swag Cms Extensions Block Rule resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsBlockRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagcmsextensionsblockruleBody(); // \Swagger\Client\Model\SwagcmsextensionsblockruleBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagCmsExtensionsBlockRule($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsBlockRuleApi->createSwagCmsExtensionsBlockRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsblockruleBody**](../Model/SwagcmsextensionsblockruleBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200422**](../Model/InlineResponse200422.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagCmsExtensionsBlockRule**
> \Swagger\Client\Model\InlineResponse200422 createSwagCmsExtensionsBlockRule($body, $_response)

Create a new Swag Cms Extensions Block Rule resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsBlockRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagcmsextensionsblockruleBody(); // \Swagger\Client\Model\SwagcmsextensionsblockruleBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagCmsExtensionsBlockRule($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsBlockRuleApi->createSwagCmsExtensionsBlockRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsblockruleBody**](../Model/SwagcmsextensionsblockruleBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200422**](../Model/InlineResponse200422.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagCmsExtensionsBlockRule**
> deleteSwagCmsExtensionsBlockRule($id, $_response)

Delete a Swag Cms Extensions Block Rule resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsBlockRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_block_rule
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagCmsExtensionsBlockRule($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsBlockRuleApi->deleteSwagCmsExtensionsBlockRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_block_rule |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagCmsExtensionsBlockRule**
> \Swagger\Client\Model\InlineResponse200422 getSwagCmsExtensionsBlockRule($id)

Detailed information about a Swag Cms Extensions Block Rule resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsBlockRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_block_rule

try {
    $result = $apiInstance->getSwagCmsExtensionsBlockRule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsBlockRuleApi->getSwagCmsExtensionsBlockRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_block_rule |

### Return type

[**\Swagger\Client\Model\InlineResponse200422**](../Model/InlineResponse200422.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagCmsExtensionsBlockRuleList**
> \Swagger\Client\Model\InlineResponse200420 getSwagCmsExtensionsBlockRuleList($limit, $page, $query)

List with basic information of Swag Cms Extensions Block Rule resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsBlockRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagCmsExtensionsBlockRuleList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsBlockRuleApi->getSwagCmsExtensionsBlockRuleList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200420**](../Model/InlineResponse200420.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagCmsExtensionsBlockRule**
> \Swagger\Client\Model\InlineResponse200422 updateSwagCmsExtensionsBlockRule($id, $body, $_response)

Partially update information about a Swag Cms Extensions Block Rule resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsBlockRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_block_rule
$body = new \Swagger\Client\Model\SwagcmsextensionsblockruleIdBody(); // \Swagger\Client\Model\SwagcmsextensionsblockruleIdBody | Partially update information about a Swag Cms Extensions Block Rule resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagCmsExtensionsBlockRule($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsBlockRuleApi->updateSwagCmsExtensionsBlockRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_block_rule |
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsblockruleIdBody**](../Model/SwagcmsextensionsblockruleIdBody.md)| Partially update information about a Swag Cms Extensions Block Rule resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200422**](../Model/InlineResponse200422.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagCmsExtensionsBlockRule**
> \Swagger\Client\Model\InlineResponse200422 updateSwagCmsExtensionsBlockRule($id, $body, $_response)

Partially update information about a Swag Cms Extensions Block Rule resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsBlockRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_block_rule
$body = new \Swagger\Client\Model\SwagcmsextensionsblockruleIdBody(); // \Swagger\Client\Model\SwagcmsextensionsblockruleIdBody | Partially update information about a Swag Cms Extensions Block Rule resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagCmsExtensionsBlockRule($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsBlockRuleApi->updateSwagCmsExtensionsBlockRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_block_rule |
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsblockruleIdBody**](../Model/SwagcmsextensionsblockruleIdBody.md)| Partially update information about a Swag Cms Extensions Block Rule resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200422**](../Model/InlineResponse200422.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

