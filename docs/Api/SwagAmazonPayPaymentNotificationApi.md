# Swagger\Client\SwagAmazonPayPaymentNotificationApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagAmazonPayPaymentNotification**](SwagAmazonPayPaymentNotificationApi.md#createswagamazonpaypaymentnotification) | **POST** /swag-amazon-pay-payment-notification | Create a new Swag Amazon Pay Payment Notification resources
[**deleteSwagAmazonPayPaymentNotification**](SwagAmazonPayPaymentNotificationApi.md#deleteswagamazonpaypaymentnotification) | **DELETE** /swag-amazon-pay-payment-notification/{id} | Delete a Swag Amazon Pay Payment Notification resource
[**getSwagAmazonPayPaymentNotification**](SwagAmazonPayPaymentNotificationApi.md#getswagamazonpaypaymentnotification) | **GET** /swag-amazon-pay-payment-notification/{id} | Detailed information about a Swag Amazon Pay Payment Notification resource
[**getSwagAmazonPayPaymentNotificationList**](SwagAmazonPayPaymentNotificationApi.md#getswagamazonpaypaymentnotificationlist) | **GET** /swag-amazon-pay-payment-notification | List with basic information of Swag Amazon Pay Payment Notification resources
[**updateSwagAmazonPayPaymentNotification**](SwagAmazonPayPaymentNotificationApi.md#updateswagamazonpaypaymentnotification) | **PATCH** /swag-amazon-pay-payment-notification/{id} | Partially update information about a Swag Amazon Pay Payment Notification resource

# **createSwagAmazonPayPaymentNotification**
> \Swagger\Client\Model\InlineResponse200416 createSwagAmazonPayPaymentNotification($body, $_response)

Create a new Swag Amazon Pay Payment Notification resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagAmazonPayPaymentNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagamazonpaypaymentnotificationBody(); // \Swagger\Client\Model\SwagamazonpaypaymentnotificationBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagAmazonPayPaymentNotification($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagAmazonPayPaymentNotificationApi->createSwagAmazonPayPaymentNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagamazonpaypaymentnotificationBody**](../Model/SwagamazonpaypaymentnotificationBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200416**](../Model/InlineResponse200416.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagAmazonPayPaymentNotification**
> \Swagger\Client\Model\InlineResponse200416 createSwagAmazonPayPaymentNotification($body, $_response)

Create a new Swag Amazon Pay Payment Notification resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagAmazonPayPaymentNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagamazonpaypaymentnotificationBody(); // \Swagger\Client\Model\SwagamazonpaypaymentnotificationBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagAmazonPayPaymentNotification($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagAmazonPayPaymentNotificationApi->createSwagAmazonPayPaymentNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagamazonpaypaymentnotificationBody**](../Model/SwagamazonpaypaymentnotificationBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200416**](../Model/InlineResponse200416.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagAmazonPayPaymentNotification**
> deleteSwagAmazonPayPaymentNotification($id, $_response)

Delete a Swag Amazon Pay Payment Notification resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagAmazonPayPaymentNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_amazon_pay_payment_notification
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagAmazonPayPaymentNotification($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagAmazonPayPaymentNotificationApi->deleteSwagAmazonPayPaymentNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_amazon_pay_payment_notification |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagAmazonPayPaymentNotification**
> \Swagger\Client\Model\InlineResponse200416 getSwagAmazonPayPaymentNotification($id)

Detailed information about a Swag Amazon Pay Payment Notification resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagAmazonPayPaymentNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_amazon_pay_payment_notification

try {
    $result = $apiInstance->getSwagAmazonPayPaymentNotification($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagAmazonPayPaymentNotificationApi->getSwagAmazonPayPaymentNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_amazon_pay_payment_notification |

### Return type

[**\Swagger\Client\Model\InlineResponse200416**](../Model/InlineResponse200416.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagAmazonPayPaymentNotificationList**
> \Swagger\Client\Model\InlineResponse200414 getSwagAmazonPayPaymentNotificationList($limit, $page, $query)

List with basic information of Swag Amazon Pay Payment Notification resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagAmazonPayPaymentNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagAmazonPayPaymentNotificationList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagAmazonPayPaymentNotificationApi->getSwagAmazonPayPaymentNotificationList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200414**](../Model/InlineResponse200414.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagAmazonPayPaymentNotification**
> \Swagger\Client\Model\InlineResponse200416 updateSwagAmazonPayPaymentNotification($id, $body, $_response)

Partially update information about a Swag Amazon Pay Payment Notification resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagAmazonPayPaymentNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_amazon_pay_payment_notification
$body = new \Swagger\Client\Model\SwagamazonpaypaymentnotificationIdBody(); // \Swagger\Client\Model\SwagamazonpaypaymentnotificationIdBody | Partially update information about a Swag Amazon Pay Payment Notification resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagAmazonPayPaymentNotification($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagAmazonPayPaymentNotificationApi->updateSwagAmazonPayPaymentNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_amazon_pay_payment_notification |
 **body** | [**\Swagger\Client\Model\SwagamazonpaypaymentnotificationIdBody**](../Model/SwagamazonpaypaymentnotificationIdBody.md)| Partially update information about a Swag Amazon Pay Payment Notification resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200416**](../Model/InlineResponse200416.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagAmazonPayPaymentNotification**
> \Swagger\Client\Model\InlineResponse200416 updateSwagAmazonPayPaymentNotification($id, $body, $_response)

Partially update information about a Swag Amazon Pay Payment Notification resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagAmazonPayPaymentNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_amazon_pay_payment_notification
$body = new \Swagger\Client\Model\SwagamazonpaypaymentnotificationIdBody(); // \Swagger\Client\Model\SwagamazonpaypaymentnotificationIdBody | Partially update information about a Swag Amazon Pay Payment Notification resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagAmazonPayPaymentNotification($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagAmazonPayPaymentNotificationApi->updateSwagAmazonPayPaymentNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_amazon_pay_payment_notification |
 **body** | [**\Swagger\Client\Model\SwagamazonpaypaymentnotificationIdBody**](../Model/SwagamazonpaypaymentnotificationIdBody.md)| Partially update information about a Swag Amazon Pay Payment Notification resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200416**](../Model/InlineResponse200416.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

