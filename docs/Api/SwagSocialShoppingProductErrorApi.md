# Swagger\Client\SwagSocialShoppingProductErrorApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagSocialShoppingProductError**](SwagSocialShoppingProductErrorApi.md#createswagsocialshoppingproducterror) | **POST** /swag-social-shopping-product-error | Create a new Swag Social Shopping Product Error resources
[**deleteSwagSocialShoppingProductError**](SwagSocialShoppingProductErrorApi.md#deleteswagsocialshoppingproducterror) | **DELETE** /swag-social-shopping-product-error/{id} | Delete a Swag Social Shopping Product Error resource
[**getSwagSocialShoppingProductError**](SwagSocialShoppingProductErrorApi.md#getswagsocialshoppingproducterror) | **GET** /swag-social-shopping-product-error/{id} | Detailed information about a Swag Social Shopping Product Error resource
[**getSwagSocialShoppingProductErrorList**](SwagSocialShoppingProductErrorApi.md#getswagsocialshoppingproducterrorlist) | **GET** /swag-social-shopping-product-error | List with basic information of Swag Social Shopping Product Error resources
[**updateSwagSocialShoppingProductError**](SwagSocialShoppingProductErrorApi.md#updateswagsocialshoppingproducterror) | **PATCH** /swag-social-shopping-product-error/{id} | Partially update information about a Swag Social Shopping Product Error resource

# **createSwagSocialShoppingProductError**
> \Swagger\Client\Model\InlineResponse200476 createSwagSocialShoppingProductError($body, $_response)

Create a new Swag Social Shopping Product Error resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagSocialShoppingProductErrorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagsocialshoppingproducterrorBody(); // \Swagger\Client\Model\SwagsocialshoppingproducterrorBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagSocialShoppingProductError($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagSocialShoppingProductErrorApi->createSwagSocialShoppingProductError: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagsocialshoppingproducterrorBody**](../Model/SwagsocialshoppingproducterrorBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200476**](../Model/InlineResponse200476.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagSocialShoppingProductError**
> \Swagger\Client\Model\InlineResponse200476 createSwagSocialShoppingProductError($body, $_response)

Create a new Swag Social Shopping Product Error resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagSocialShoppingProductErrorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagsocialshoppingproducterrorBody(); // \Swagger\Client\Model\SwagsocialshoppingproducterrorBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagSocialShoppingProductError($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagSocialShoppingProductErrorApi->createSwagSocialShoppingProductError: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagsocialshoppingproducterrorBody**](../Model/SwagsocialshoppingproducterrorBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200476**](../Model/InlineResponse200476.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagSocialShoppingProductError**
> deleteSwagSocialShoppingProductError($id, $_response)

Delete a Swag Social Shopping Product Error resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagSocialShoppingProductErrorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_social_shopping_product_error
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagSocialShoppingProductError($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagSocialShoppingProductErrorApi->deleteSwagSocialShoppingProductError: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_social_shopping_product_error |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagSocialShoppingProductError**
> \Swagger\Client\Model\InlineResponse200476 getSwagSocialShoppingProductError($id)

Detailed information about a Swag Social Shopping Product Error resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagSocialShoppingProductErrorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_social_shopping_product_error

try {
    $result = $apiInstance->getSwagSocialShoppingProductError($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagSocialShoppingProductErrorApi->getSwagSocialShoppingProductError: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_social_shopping_product_error |

### Return type

[**\Swagger\Client\Model\InlineResponse200476**](../Model/InlineResponse200476.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagSocialShoppingProductErrorList**
> \Swagger\Client\Model\InlineResponse200474 getSwagSocialShoppingProductErrorList($limit, $page, $query)

List with basic information of Swag Social Shopping Product Error resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagSocialShoppingProductErrorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagSocialShoppingProductErrorList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagSocialShoppingProductErrorApi->getSwagSocialShoppingProductErrorList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200474**](../Model/InlineResponse200474.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagSocialShoppingProductError**
> \Swagger\Client\Model\InlineResponse200476 updateSwagSocialShoppingProductError($id, $body, $_response)

Partially update information about a Swag Social Shopping Product Error resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagSocialShoppingProductErrorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_social_shopping_product_error
$body = new \Swagger\Client\Model\SwagsocialshoppingproducterrorIdBody(); // \Swagger\Client\Model\SwagsocialshoppingproducterrorIdBody | Partially update information about a Swag Social Shopping Product Error resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagSocialShoppingProductError($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagSocialShoppingProductErrorApi->updateSwagSocialShoppingProductError: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_social_shopping_product_error |
 **body** | [**\Swagger\Client\Model\SwagsocialshoppingproducterrorIdBody**](../Model/SwagsocialshoppingproducterrorIdBody.md)| Partially update information about a Swag Social Shopping Product Error resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200476**](../Model/InlineResponse200476.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagSocialShoppingProductError**
> \Swagger\Client\Model\InlineResponse200476 updateSwagSocialShoppingProductError($id, $body, $_response)

Partially update information about a Swag Social Shopping Product Error resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagSocialShoppingProductErrorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_social_shopping_product_error
$body = new \Swagger\Client\Model\SwagsocialshoppingproducterrorIdBody(); // \Swagger\Client\Model\SwagsocialshoppingproducterrorIdBody | Partially update information about a Swag Social Shopping Product Error resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagSocialShoppingProductError($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagSocialShoppingProductErrorApi->updateSwagSocialShoppingProductError: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_social_shopping_product_error |
 **body** | [**\Swagger\Client\Model\SwagsocialshoppingproducterrorIdBody**](../Model/SwagsocialshoppingproducterrorIdBody.md)| Partially update information about a Swag Social Shopping Product Error resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200476**](../Model/InlineResponse200476.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

