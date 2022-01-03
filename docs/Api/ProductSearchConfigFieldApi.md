# Swagger\Client\ProductSearchConfigFieldApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductSearchConfigField**](ProductSearchConfigFieldApi.md#createproductsearchconfigfield) | **POST** /product-search-config-field | Create a new Product Search Config Field resources
[**deleteProductSearchConfigField**](ProductSearchConfigFieldApi.md#deleteproductsearchconfigfield) | **DELETE** /product-search-config-field/{id} | Delete a Product Search Config Field resource
[**getProductSearchConfigField**](ProductSearchConfigFieldApi.md#getproductsearchconfigfield) | **GET** /product-search-config-field/{id} | Detailed information about a Product Search Config Field resource
[**getProductSearchConfigFieldList**](ProductSearchConfigFieldApi.md#getproductsearchconfigfieldlist) | **GET** /product-search-config-field | List with basic information of Product Search Config Field resources
[**updateProductSearchConfigField**](ProductSearchConfigFieldApi.md#updateproductsearchconfigfield) | **PATCH** /product-search-config-field/{id} | Partially update information about a Product Search Config Field resource

# **createProductSearchConfigField**
> \Swagger\Client\Model\InlineResponse200302 createProductSearchConfigField($body, $_response)

Create a new Product Search Config Field resources

Available since: 6.3.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductSearchConfigFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductsearchconfigfieldBody(); // \Swagger\Client\Model\ProductsearchconfigfieldBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductSearchConfigField($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchConfigFieldApi->createProductSearchConfigField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductsearchconfigfieldBody**](../Model/ProductsearchconfigfieldBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200302**](../Model/InlineResponse200302.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductSearchConfigField**
> \Swagger\Client\Model\InlineResponse200302 createProductSearchConfigField($body, $_response)

Create a new Product Search Config Field resources

Available since: 6.3.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductSearchConfigFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductsearchconfigfieldBody(); // \Swagger\Client\Model\ProductsearchconfigfieldBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductSearchConfigField($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchConfigFieldApi->createProductSearchConfigField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductsearchconfigfieldBody**](../Model/ProductsearchconfigfieldBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200302**](../Model/InlineResponse200302.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductSearchConfigField**
> deleteProductSearchConfigField($id, $_response)

Delete a Product Search Config Field resource

Available since: 6.3.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductSearchConfigFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the product_search_config_field
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteProductSearchConfigField($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchConfigFieldApi->deleteProductSearchConfigField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_search_config_field |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductSearchConfigField**
> \Swagger\Client\Model\InlineResponse200302 getProductSearchConfigField($id)

Detailed information about a Product Search Config Field resource

Available since: 6.3.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductSearchConfigFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the product_search_config_field

try {
    $result = $apiInstance->getProductSearchConfigField($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchConfigFieldApi->getProductSearchConfigField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_search_config_field |

### Return type

[**\Swagger\Client\Model\InlineResponse200302**](../Model/InlineResponse200302.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductSearchConfigFieldList**
> \Swagger\Client\Model\InlineResponse200300 getProductSearchConfigFieldList($limit, $page, $query)

List with basic information of Product Search Config Field resources

Available since: 6.3.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductSearchConfigFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getProductSearchConfigFieldList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchConfigFieldApi->getProductSearchConfigFieldList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200300**](../Model/InlineResponse200300.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductSearchConfigField**
> \Swagger\Client\Model\InlineResponse200302 updateProductSearchConfigField($id, $body, $_response)

Partially update information about a Product Search Config Field resource

Available since: 6.3.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductSearchConfigFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the product_search_config_field
$body = new \Swagger\Client\Model\ProductsearchconfigfieldIdBody(); // \Swagger\Client\Model\ProductsearchconfigfieldIdBody | Partially update information about a Product Search Config Field resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductSearchConfigField($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchConfigFieldApi->updateProductSearchConfigField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_search_config_field |
 **body** | [**\Swagger\Client\Model\ProductsearchconfigfieldIdBody**](../Model/ProductsearchconfigfieldIdBody.md)| Partially update information about a Product Search Config Field resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200302**](../Model/InlineResponse200302.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductSearchConfigField**
> \Swagger\Client\Model\InlineResponse200302 updateProductSearchConfigField($id, $body, $_response)

Partially update information about a Product Search Config Field resource

Available since: 6.3.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductSearchConfigFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the product_search_config_field
$body = new \Swagger\Client\Model\ProductsearchconfigfieldIdBody(); // \Swagger\Client\Model\ProductsearchconfigfieldIdBody | Partially update information about a Product Search Config Field resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductSearchConfigField($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchConfigFieldApi->updateProductSearchConfigField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_search_config_field |
 **body** | [**\Swagger\Client\Model\ProductsearchconfigfieldIdBody**](../Model/ProductsearchconfigfieldIdBody.md)| Partially update information about a Product Search Config Field resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200302**](../Model/InlineResponse200302.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

