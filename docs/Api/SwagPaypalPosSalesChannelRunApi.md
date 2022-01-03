# Swagger\Client\SwagPaypalPosSalesChannelRunApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagPaypalPosSalesChannelRun**](SwagPaypalPosSalesChannelRunApi.md#createswagpaypalpossaleschannelrun) | **POST** /swag-paypal-pos-sales-channel-run | Create a new Swag Paypal Pos Sales Channel Run resources
[**deleteSwagPaypalPosSalesChannelRun**](SwagPaypalPosSalesChannelRunApi.md#deleteswagpaypalpossaleschannelrun) | **DELETE** /swag-paypal-pos-sales-channel-run/{id} | Delete a Swag Paypal Pos Sales Channel Run resource
[**getSwagPaypalPosSalesChannelRun**](SwagPaypalPosSalesChannelRunApi.md#getswagpaypalpossaleschannelrun) | **GET** /swag-paypal-pos-sales-channel-run/{id} | Detailed information about a Swag Paypal Pos Sales Channel Run resource
[**getSwagPaypalPosSalesChannelRunList**](SwagPaypalPosSalesChannelRunApi.md#getswagpaypalpossaleschannelrunlist) | **GET** /swag-paypal-pos-sales-channel-run | List with basic information of Swag Paypal Pos Sales Channel Run resources
[**updateSwagPaypalPosSalesChannelRun**](SwagPaypalPosSalesChannelRunApi.md#updateswagpaypalpossaleschannelrun) | **PATCH** /swag-paypal-pos-sales-channel-run/{id} | Partially update information about a Swag Paypal Pos Sales Channel Run resource

# **createSwagPaypalPosSalesChannelRun**
> \Swagger\Client\Model\InlineResponse200470 createSwagPaypalPosSalesChannelRun($body, $_response)

Create a new Swag Paypal Pos Sales Channel Run resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagpaypalpossaleschannelrunBody(); // \Swagger\Client\Model\SwagpaypalpossaleschannelrunBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagPaypalPosSalesChannelRun($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelRunApi->createSwagPaypalPosSalesChannelRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagpaypalpossaleschannelrunBody**](../Model/SwagpaypalpossaleschannelrunBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200470**](../Model/InlineResponse200470.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagPaypalPosSalesChannelRun**
> \Swagger\Client\Model\InlineResponse200470 createSwagPaypalPosSalesChannelRun($body, $_response)

Create a new Swag Paypal Pos Sales Channel Run resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagpaypalpossaleschannelrunBody(); // \Swagger\Client\Model\SwagpaypalpossaleschannelrunBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagPaypalPosSalesChannelRun($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelRunApi->createSwagPaypalPosSalesChannelRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagpaypalpossaleschannelrunBody**](../Model/SwagpaypalpossaleschannelrunBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200470**](../Model/InlineResponse200470.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagPaypalPosSalesChannelRun**
> deleteSwagPaypalPosSalesChannelRun($id, $_response)

Delete a Swag Paypal Pos Sales Channel Run resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_paypal_pos_sales_channel_run
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagPaypalPosSalesChannelRun($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelRunApi->deleteSwagPaypalPosSalesChannelRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_paypal_pos_sales_channel_run |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagPaypalPosSalesChannelRun**
> \Swagger\Client\Model\InlineResponse200470 getSwagPaypalPosSalesChannelRun($id)

Detailed information about a Swag Paypal Pos Sales Channel Run resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_paypal_pos_sales_channel_run

try {
    $result = $apiInstance->getSwagPaypalPosSalesChannelRun($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelRunApi->getSwagPaypalPosSalesChannelRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_paypal_pos_sales_channel_run |

### Return type

[**\Swagger\Client\Model\InlineResponse200470**](../Model/InlineResponse200470.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagPaypalPosSalesChannelRunList**
> \Swagger\Client\Model\InlineResponse200468 getSwagPaypalPosSalesChannelRunList($limit, $page, $query)

List with basic information of Swag Paypal Pos Sales Channel Run resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagPaypalPosSalesChannelRunList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelRunApi->getSwagPaypalPosSalesChannelRunList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200468**](../Model/InlineResponse200468.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagPaypalPosSalesChannelRun**
> \Swagger\Client\Model\InlineResponse200470 updateSwagPaypalPosSalesChannelRun($id, $body, $_response)

Partially update information about a Swag Paypal Pos Sales Channel Run resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_paypal_pos_sales_channel_run
$body = new \Swagger\Client\Model\SwagpaypalpossaleschannelrunIdBody(); // \Swagger\Client\Model\SwagpaypalpossaleschannelrunIdBody | Partially update information about a Swag Paypal Pos Sales Channel Run resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagPaypalPosSalesChannelRun($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelRunApi->updateSwagPaypalPosSalesChannelRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_paypal_pos_sales_channel_run |
 **body** | [**\Swagger\Client\Model\SwagpaypalpossaleschannelrunIdBody**](../Model/SwagpaypalpossaleschannelrunIdBody.md)| Partially update information about a Swag Paypal Pos Sales Channel Run resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200470**](../Model/InlineResponse200470.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagPaypalPosSalesChannelRun**
> \Swagger\Client\Model\InlineResponse200470 updateSwagPaypalPosSalesChannelRun($id, $body, $_response)

Partially update information about a Swag Paypal Pos Sales Channel Run resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagPaypalPosSalesChannelRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_paypal_pos_sales_channel_run
$body = new \Swagger\Client\Model\SwagpaypalpossaleschannelrunIdBody(); // \Swagger\Client\Model\SwagpaypalpossaleschannelrunIdBody | Partially update information about a Swag Paypal Pos Sales Channel Run resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagPaypalPosSalesChannelRun($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagPaypalPosSalesChannelRunApi->updateSwagPaypalPosSalesChannelRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_paypal_pos_sales_channel_run |
 **body** | [**\Swagger\Client\Model\SwagpaypalpossaleschannelrunIdBody**](../Model/SwagpaypalpossaleschannelrunIdBody.md)| Partially update information about a Swag Paypal Pos Sales Channel Run resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200470**](../Model/InlineResponse200470.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

