# Swagger\Client\SwagPaypalPosSalesChannelRunLogApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagPaypalPosSalesChannelRunLog**](SwagPaypalPosSalesChannelRunLogApi.md#createswagpaypalpossaleschannelrunlog) | **POST** /swag-paypal-pos-sales-channel-run-log | Create a new Swag Paypal Pos Sales Channel Run Log resources
[**deleteSwagPaypalPosSalesChannelRunLog**](SwagPaypalPosSalesChannelRunLogApi.md#deleteswagpaypalpossaleschannelrunlog) | **DELETE** /swag-paypal-pos-sales-channel-run-log/{id} | Delete a Swag Paypal Pos Sales Channel Run Log resource
[**getSwagPaypalPosSalesChannelRunLog**](SwagPaypalPosSalesChannelRunLogApi.md#getswagpaypalpossaleschannelrunlog) | **GET** /swag-paypal-pos-sales-channel-run-log/{id} | Detailed information about a Swag Paypal Pos Sales Channel Run Log resource
[**getSwagPaypalPosSalesChannelRunLogList**](SwagPaypalPosSalesChannelRunLogApi.md#getswagpaypalpossaleschannelrunloglist) | **GET** /swag-paypal-pos-sales-channel-run-log | List with basic information of Swag Paypal Pos Sales Channel Run Log resources
[**updateSwagPaypalPosSalesChannelRunLog**](SwagPaypalPosSalesChannelRunLogApi.md#updateswagpaypalpossaleschannelrunlog) | **PATCH** /swag-paypal-pos-sales-channel-run-log/{id} | Partially update information about a Swag Paypal Pos Sales Channel Run Log resource

# **createSwagPaypalPosSalesChannelRunLog**
> \Swagger\Client\Model\InlineResponse200473 createSwagPaypalPosSalesChannelRunLog($body, $_response)

Create a new Swag Paypal Pos Sales Channel Run Log resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelRunLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagpaypalpossaleschannelrunlogBody(); // \Swagger\Client\Model\SwagpaypalpossaleschannelrunlogBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagPaypalPosSalesChannelRunLog($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelRunLogApi->createSwagPaypalPosSalesChannelRunLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagpaypalpossaleschannelrunlogBody**](../Model/SwagpaypalpossaleschannelrunlogBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200473**](../Model/InlineResponse200473.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagPaypalPosSalesChannelRunLog**
> \Swagger\Client\Model\InlineResponse200473 createSwagPaypalPosSalesChannelRunLog($body, $_response)

Create a new Swag Paypal Pos Sales Channel Run Log resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelRunLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagpaypalpossaleschannelrunlogBody(); // \Swagger\Client\Model\SwagpaypalpossaleschannelrunlogBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagPaypalPosSalesChannelRunLog($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelRunLogApi->createSwagPaypalPosSalesChannelRunLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagpaypalpossaleschannelrunlogBody**](../Model/SwagpaypalpossaleschannelrunlogBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200473**](../Model/InlineResponse200473.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagPaypalPosSalesChannelRunLog**
> deleteSwagPaypalPosSalesChannelRunLog($id, $_response)

Delete a Swag Paypal Pos Sales Channel Run Log resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelRunLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_paypal_pos_sales_channel_run_log
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagPaypalPosSalesChannelRunLog($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelRunLogApi->deleteSwagPaypalPosSalesChannelRunLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_paypal_pos_sales_channel_run_log |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagPaypalPosSalesChannelRunLog**
> \Swagger\Client\Model\InlineResponse200473 getSwagPaypalPosSalesChannelRunLog($id)

Detailed information about a Swag Paypal Pos Sales Channel Run Log resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelRunLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_paypal_pos_sales_channel_run_log

try {
    $result = $apiInstance->getSwagPaypalPosSalesChannelRunLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelRunLogApi->getSwagPaypalPosSalesChannelRunLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_paypal_pos_sales_channel_run_log |

### Return type

[**\Swagger\Client\Model\InlineResponse200473**](../Model/InlineResponse200473.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagPaypalPosSalesChannelRunLogList**
> \Swagger\Client\Model\InlineResponse200471 getSwagPaypalPosSalesChannelRunLogList($limit, $page, $query)

List with basic information of Swag Paypal Pos Sales Channel Run Log resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelRunLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagPaypalPosSalesChannelRunLogList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelRunLogApi->getSwagPaypalPosSalesChannelRunLogList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200471**](../Model/InlineResponse200471.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagPaypalPosSalesChannelRunLog**
> \Swagger\Client\Model\InlineResponse200473 updateSwagPaypalPosSalesChannelRunLog($id, $body, $_response)

Partially update information about a Swag Paypal Pos Sales Channel Run Log resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelRunLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_paypal_pos_sales_channel_run_log
$body = new \Swagger\Client\Model\SwagpaypalpossaleschannelrunlogIdBody(); // \Swagger\Client\Model\SwagpaypalpossaleschannelrunlogIdBody | Partially update information about a Swag Paypal Pos Sales Channel Run Log resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagPaypalPosSalesChannelRunLog($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelRunLogApi->updateSwagPaypalPosSalesChannelRunLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_paypal_pos_sales_channel_run_log |
 **body** | [**\Swagger\Client\Model\SwagpaypalpossaleschannelrunlogIdBody**](../Model/SwagpaypalpossaleschannelrunlogIdBody.md)| Partially update information about a Swag Paypal Pos Sales Channel Run Log resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200473**](../Model/InlineResponse200473.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagPaypalPosSalesChannelRunLog**
> \Swagger\Client\Model\InlineResponse200473 updateSwagPaypalPosSalesChannelRunLog($id, $body, $_response)

Partially update information about a Swag Paypal Pos Sales Channel Run Log resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelRunLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_paypal_pos_sales_channel_run_log
$body = new \Swagger\Client\Model\SwagpaypalpossaleschannelrunlogIdBody(); // \Swagger\Client\Model\SwagpaypalpossaleschannelrunlogIdBody | Partially update information about a Swag Paypal Pos Sales Channel Run Log resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagPaypalPosSalesChannelRunLog($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelRunLogApi->updateSwagPaypalPosSalesChannelRunLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_paypal_pos_sales_channel_run_log |
 **body** | [**\Swagger\Client\Model\SwagpaypalpossaleschannelrunlogIdBody**](../Model/SwagpaypalpossaleschannelrunlogIdBody.md)| Partially update information about a Swag Paypal Pos Sales Channel Run Log resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200473**](../Model/InlineResponse200473.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

