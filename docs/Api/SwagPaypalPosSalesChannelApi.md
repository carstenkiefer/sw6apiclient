# Swagger\Client\SwagPaypalPosSalesChannelApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagPaypalPosSalesChannel**](SwagPaypalPosSalesChannelApi.md#createswagpaypalpossaleschannel) | **POST** /swag-paypal-pos-sales-channel | Create a new Swag Paypal Pos Sales Channel resources
[**deleteSwagPaypalPosSalesChannel**](SwagPaypalPosSalesChannelApi.md#deleteswagpaypalpossaleschannel) | **DELETE** /swag-paypal-pos-sales-channel/{id} | Delete a Swag Paypal Pos Sales Channel resource
[**getSwagPaypalPosSalesChannel**](SwagPaypalPosSalesChannelApi.md#getswagpaypalpossaleschannel) | **GET** /swag-paypal-pos-sales-channel/{id} | Detailed information about a Swag Paypal Pos Sales Channel resource
[**getSwagPaypalPosSalesChannelList**](SwagPaypalPosSalesChannelApi.md#getswagpaypalpossaleschannellist) | **GET** /swag-paypal-pos-sales-channel | List with basic information of Swag Paypal Pos Sales Channel resources
[**updateSwagPaypalPosSalesChannel**](SwagPaypalPosSalesChannelApi.md#updateswagpaypalpossaleschannel) | **PATCH** /swag-paypal-pos-sales-channel/{id} | Partially update information about a Swag Paypal Pos Sales Channel resource

# **createSwagPaypalPosSalesChannel**
> \Swagger\Client\Model\InlineResponse200467 createSwagPaypalPosSalesChannel($body, $_response)

Create a new Swag Paypal Pos Sales Channel resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagpaypalpossaleschannelBody(); // \Swagger\Client\Model\SwagpaypalpossaleschannelBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagPaypalPosSalesChannel($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelApi->createSwagPaypalPosSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagpaypalpossaleschannelBody**](../Model/SwagpaypalpossaleschannelBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200467**](../Model/InlineResponse200467.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagPaypalPosSalesChannel**
> \Swagger\Client\Model\InlineResponse200467 createSwagPaypalPosSalesChannel($body, $_response)

Create a new Swag Paypal Pos Sales Channel resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagpaypalpossaleschannelBody(); // \Swagger\Client\Model\SwagpaypalpossaleschannelBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagPaypalPosSalesChannel($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelApi->createSwagPaypalPosSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagpaypalpossaleschannelBody**](../Model/SwagpaypalpossaleschannelBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200467**](../Model/InlineResponse200467.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagPaypalPosSalesChannel**
> deleteSwagPaypalPosSalesChannel($id, $_response)

Delete a Swag Paypal Pos Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_paypal_pos_sales_channel
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagPaypalPosSalesChannel($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelApi->deleteSwagPaypalPosSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_paypal_pos_sales_channel |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagPaypalPosSalesChannel**
> \Swagger\Client\Model\InlineResponse200467 getSwagPaypalPosSalesChannel($id)

Detailed information about a Swag Paypal Pos Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_paypal_pos_sales_channel

try {
    $result = $apiInstance->getSwagPaypalPosSalesChannel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelApi->getSwagPaypalPosSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_paypal_pos_sales_channel |

### Return type

[**\Swagger\Client\Model\InlineResponse200467**](../Model/InlineResponse200467.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagPaypalPosSalesChannelList**
> \Swagger\Client\Model\InlineResponse200465 getSwagPaypalPosSalesChannelList($limit, $page, $query)

List with basic information of Swag Paypal Pos Sales Channel resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagPaypalPosSalesChannelList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelApi->getSwagPaypalPosSalesChannelList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200465**](../Model/InlineResponse200465.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagPaypalPosSalesChannel**
> \Swagger\Client\Model\InlineResponse200467 updateSwagPaypalPosSalesChannel($id, $body, $_response)

Partially update information about a Swag Paypal Pos Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_paypal_pos_sales_channel
$body = new \Swagger\Client\Model\SwagpaypalpossaleschannelIdBody(); // \Swagger\Client\Model\SwagpaypalpossaleschannelIdBody | Partially update information about a Swag Paypal Pos Sales Channel resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagPaypalPosSalesChannel($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelApi->updateSwagPaypalPosSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_paypal_pos_sales_channel |
 **body** | [**\Swagger\Client\Model\SwagpaypalpossaleschannelIdBody**](../Model/SwagpaypalpossaleschannelIdBody.md)| Partially update information about a Swag Paypal Pos Sales Channel resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200467**](../Model/InlineResponse200467.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagPaypalPosSalesChannel**
> \Swagger\Client\Model\InlineResponse200467 updateSwagPaypalPosSalesChannel($id, $body, $_response)

Partially update information about a Swag Paypal Pos Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_paypal_pos_sales_channel
$body = new \Swagger\Client\Model\SwagpaypalpossaleschannelIdBody(); // \Swagger\Client\Model\SwagpaypalpossaleschannelIdBody | Partially update information about a Swag Paypal Pos Sales Channel resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagPaypalPosSalesChannel($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelApi->updateSwagPaypalPosSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_paypal_pos_sales_channel |
 **body** | [**\Swagger\Client\Model\SwagpaypalpossaleschannelIdBody**](../Model/SwagpaypalpossaleschannelIdBody.md)| Partially update information about a Swag Paypal Pos Sales Channel resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200467**](../Model/InlineResponse200467.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

