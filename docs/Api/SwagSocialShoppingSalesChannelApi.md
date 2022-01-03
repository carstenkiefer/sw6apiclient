# Swagger\Client\SwagSocialShoppingSalesChannelApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagSocialShoppingSalesChannel**](SwagSocialShoppingSalesChannelApi.md#createswagsocialshoppingsaleschannel) | **POST** /swag-social-shopping-sales-channel | Create a new Swag Social Shopping Sales Channel resources
[**deleteSwagSocialShoppingSalesChannel**](SwagSocialShoppingSalesChannelApi.md#deleteswagsocialshoppingsaleschannel) | **DELETE** /swag-social-shopping-sales-channel/{id} | Delete a Swag Social Shopping Sales Channel resource
[**getSwagSocialShoppingSalesChannel**](SwagSocialShoppingSalesChannelApi.md#getswagsocialshoppingsaleschannel) | **GET** /swag-social-shopping-sales-channel/{id} | Detailed information about a Swag Social Shopping Sales Channel resource
[**getSwagSocialShoppingSalesChannelList**](SwagSocialShoppingSalesChannelApi.md#getswagsocialshoppingsaleschannellist) | **GET** /swag-social-shopping-sales-channel | List with basic information of Swag Social Shopping Sales Channel resources
[**updateSwagSocialShoppingSalesChannel**](SwagSocialShoppingSalesChannelApi.md#updateswagsocialshoppingsaleschannel) | **PATCH** /swag-social-shopping-sales-channel/{id} | Partially update information about a Swag Social Shopping Sales Channel resource

# **createSwagSocialShoppingSalesChannel**
> \Swagger\Client\Model\InlineResponse200479 createSwagSocialShoppingSalesChannel($body, $_response)

Create a new Swag Social Shopping Sales Channel resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagSocialShoppingSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagsocialshoppingsaleschannelBody(); // \Swagger\Client\Model\SwagsocialshoppingsaleschannelBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagSocialShoppingSalesChannel($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagSocialShoppingSalesChannelApi->createSwagSocialShoppingSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagsocialshoppingsaleschannelBody**](../Model/SwagsocialshoppingsaleschannelBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200479**](../Model/InlineResponse200479.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagSocialShoppingSalesChannel**
> \Swagger\Client\Model\InlineResponse200479 createSwagSocialShoppingSalesChannel($body, $_response)

Create a new Swag Social Shopping Sales Channel resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagSocialShoppingSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagsocialshoppingsaleschannelBody(); // \Swagger\Client\Model\SwagsocialshoppingsaleschannelBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagSocialShoppingSalesChannel($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagSocialShoppingSalesChannelApi->createSwagSocialShoppingSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagsocialshoppingsaleschannelBody**](../Model/SwagsocialshoppingsaleschannelBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200479**](../Model/InlineResponse200479.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagSocialShoppingSalesChannel**
> deleteSwagSocialShoppingSalesChannel($id, $_response)

Delete a Swag Social Shopping Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagSocialShoppingSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_social_shopping_sales_channel
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagSocialShoppingSalesChannel($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagSocialShoppingSalesChannelApi->deleteSwagSocialShoppingSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_social_shopping_sales_channel |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagSocialShoppingSalesChannel**
> \Swagger\Client\Model\InlineResponse200479 getSwagSocialShoppingSalesChannel($id)

Detailed information about a Swag Social Shopping Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagSocialShoppingSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_social_shopping_sales_channel

try {
    $result = $apiInstance->getSwagSocialShoppingSalesChannel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagSocialShoppingSalesChannelApi->getSwagSocialShoppingSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_social_shopping_sales_channel |

### Return type

[**\Swagger\Client\Model\InlineResponse200479**](../Model/InlineResponse200479.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagSocialShoppingSalesChannelList**
> \Swagger\Client\Model\InlineResponse200477 getSwagSocialShoppingSalesChannelList($limit, $page, $query)

List with basic information of Swag Social Shopping Sales Channel resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagSocialShoppingSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagSocialShoppingSalesChannelList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagSocialShoppingSalesChannelApi->getSwagSocialShoppingSalesChannelList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200477**](../Model/InlineResponse200477.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagSocialShoppingSalesChannel**
> \Swagger\Client\Model\InlineResponse200479 updateSwagSocialShoppingSalesChannel($id, $body, $_response)

Partially update information about a Swag Social Shopping Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagSocialShoppingSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_social_shopping_sales_channel
$body = new \Swagger\Client\Model\SwagsocialshoppingsaleschannelIdBody(); // \Swagger\Client\Model\SwagsocialshoppingsaleschannelIdBody | Partially update information about a Swag Social Shopping Sales Channel resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagSocialShoppingSalesChannel($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagSocialShoppingSalesChannelApi->updateSwagSocialShoppingSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_social_shopping_sales_channel |
 **body** | [**\Swagger\Client\Model\SwagsocialshoppingsaleschannelIdBody**](../Model/SwagsocialshoppingsaleschannelIdBody.md)| Partially update information about a Swag Social Shopping Sales Channel resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200479**](../Model/InlineResponse200479.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagSocialShoppingSalesChannel**
> \Swagger\Client\Model\InlineResponse200479 updateSwagSocialShoppingSalesChannel($id, $body, $_response)

Partially update information about a Swag Social Shopping Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagSocialShoppingSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_social_shopping_sales_channel
$body = new \Swagger\Client\Model\SwagsocialshoppingsaleschannelIdBody(); // \Swagger\Client\Model\SwagsocialshoppingsaleschannelIdBody | Partially update information about a Swag Social Shopping Sales Channel resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagSocialShoppingSalesChannel($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagSocialShoppingSalesChannelApi->updateSwagSocialShoppingSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_social_shopping_sales_channel |
 **body** | [**\Swagger\Client\Model\SwagsocialshoppingsaleschannelIdBody**](../Model/SwagsocialshoppingsaleschannelIdBody.md)| Partially update information about a Swag Social Shopping Sales Channel resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200479**](../Model/InlineResponse200479.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

