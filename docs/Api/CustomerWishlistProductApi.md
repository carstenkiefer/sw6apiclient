# Swagger\Client\CustomerWishlistProductApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomerWishlistProduct**](CustomerWishlistProductApi.md#createcustomerwishlistproduct) | **POST** /customer-wishlist-product | Create a new Customer Wishlist Product resources
[**deleteCustomerWishlistProduct**](CustomerWishlistProductApi.md#deletecustomerwishlistproduct) | **DELETE** /customer-wishlist-product/{id} | Delete a Customer Wishlist Product resource
[**getCustomerWishlistProduct**](CustomerWishlistProductApi.md#getcustomerwishlistproduct) | **GET** /customer-wishlist-product/{id} | Detailed information about a Customer Wishlist Product resource
[**getCustomerWishlistProductList**](CustomerWishlistProductApi.md#getcustomerwishlistproductlist) | **GET** /customer-wishlist-product | List with basic information of Customer Wishlist Product resources
[**updateCustomerWishlistProduct**](CustomerWishlistProductApi.md#updatecustomerwishlistproduct) | **PATCH** /customer-wishlist-product/{id} | Partially update information about a Customer Wishlist Product resource

# **createCustomerWishlistProduct**
> \Swagger\Client\Model\InlineResponse200113 createCustomerWishlistProduct($body, $_response)

Create a new Customer Wishlist Product resources

Available since: 6.3.4.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomerWishlistProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CustomerwishlistproductBody(); // \Swagger\Client\Model\CustomerwishlistproductBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createCustomerWishlistProduct($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistProductApi->createCustomerWishlistProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerwishlistproductBody**](../Model/CustomerwishlistproductBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200113**](../Model/InlineResponse200113.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomerWishlistProduct**
> \Swagger\Client\Model\InlineResponse200113 createCustomerWishlistProduct($body, $_response)

Create a new Customer Wishlist Product resources

Available since: 6.3.4.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomerWishlistProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CustomerwishlistproductBody(); // \Swagger\Client\Model\CustomerwishlistproductBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createCustomerWishlistProduct($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistProductApi->createCustomerWishlistProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerwishlistproductBody**](../Model/CustomerwishlistproductBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200113**](../Model/InlineResponse200113.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomerWishlistProduct**
> deleteCustomerWishlistProduct($id, $_response)

Delete a Customer Wishlist Product resource

Available since: 6.3.4.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomerWishlistProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the customer_wishlist_product
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteCustomerWishlistProduct($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistProductApi->deleteCustomerWishlistProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the customer_wishlist_product |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerWishlistProduct**
> \Swagger\Client\Model\InlineResponse200113 getCustomerWishlistProduct($id)

Detailed information about a Customer Wishlist Product resource

Available since: 6.3.4.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomerWishlistProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the customer_wishlist_product

try {
    $result = $apiInstance->getCustomerWishlistProduct($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistProductApi->getCustomerWishlistProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the customer_wishlist_product |

### Return type

[**\Swagger\Client\Model\InlineResponse200113**](../Model/InlineResponse200113.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerWishlistProductList**
> \Swagger\Client\Model\InlineResponse200111 getCustomerWishlistProductList($limit, $page, $query)

List with basic information of Customer Wishlist Product resources

Available since: 6.3.4.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomerWishlistProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getCustomerWishlistProductList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistProductApi->getCustomerWishlistProductList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200111**](../Model/InlineResponse200111.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerWishlistProduct**
> \Swagger\Client\Model\InlineResponse200113 updateCustomerWishlistProduct($id, $body, $_response)

Partially update information about a Customer Wishlist Product resource

Available since: 6.3.4.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomerWishlistProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the customer_wishlist_product
$body = new \Swagger\Client\Model\CustomerwishlistproductIdBody(); // \Swagger\Client\Model\CustomerwishlistproductIdBody | Partially update information about a Customer Wishlist Product resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateCustomerWishlistProduct($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistProductApi->updateCustomerWishlistProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the customer_wishlist_product |
 **body** | [**\Swagger\Client\Model\CustomerwishlistproductIdBody**](../Model/CustomerwishlistproductIdBody.md)| Partially update information about a Customer Wishlist Product resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200113**](../Model/InlineResponse200113.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerWishlistProduct**
> \Swagger\Client\Model\InlineResponse200113 updateCustomerWishlistProduct($id, $body, $_response)

Partially update information about a Customer Wishlist Product resource

Available since: 6.3.4.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomerWishlistProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the customer_wishlist_product
$body = new \Swagger\Client\Model\CustomerwishlistproductIdBody(); // \Swagger\Client\Model\CustomerwishlistproductIdBody | Partially update information about a Customer Wishlist Product resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateCustomerWishlistProduct($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistProductApi->updateCustomerWishlistProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the customer_wishlist_product |
 **body** | [**\Swagger\Client\Model\CustomerwishlistproductIdBody**](../Model/CustomerwishlistproductIdBody.md)| Partially update information about a Customer Wishlist Product resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200113**](../Model/InlineResponse200113.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

