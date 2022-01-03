# Swagger\Client\WebhookEventLogApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebhookEventLog**](WebhookEventLogApi.md#createwebhookeventlog) | **POST** /webhook-event-log | Create a new Webhook Event Log resources
[**deleteWebhookEventLog**](WebhookEventLogApi.md#deletewebhookeventlog) | **DELETE** /webhook-event-log/{id} | Delete a Webhook Event Log resource
[**getWebhookEventLog**](WebhookEventLogApi.md#getwebhookeventlog) | **GET** /webhook-event-log/{id} | Detailed information about a Webhook Event Log resource
[**getWebhookEventLogList**](WebhookEventLogApi.md#getwebhookeventloglist) | **GET** /webhook-event-log | List with basic information of Webhook Event Log resources
[**updateWebhookEventLog**](WebhookEventLogApi.md#updatewebhookeventlog) | **PATCH** /webhook-event-log/{id} | Partially update information about a Webhook Event Log resource

# **createWebhookEventLog**
> \Swagger\Client\Model\InlineResponse200518 createWebhookEventLog($body, $_response)

Create a new Webhook Event Log resources

Available since: 6.4.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\WebhookEventLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\WebhookeventlogBody(); // \Swagger\Client\Model\WebhookeventlogBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createWebhookEventLog($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventLogApi->createWebhookEventLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WebhookeventlogBody**](../Model/WebhookeventlogBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200518**](../Model/InlineResponse200518.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createWebhookEventLog**
> \Swagger\Client\Model\InlineResponse200518 createWebhookEventLog($body, $_response)

Create a new Webhook Event Log resources

Available since: 6.4.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\WebhookEventLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\WebhookeventlogBody(); // \Swagger\Client\Model\WebhookeventlogBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createWebhookEventLog($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventLogApi->createWebhookEventLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WebhookeventlogBody**](../Model/WebhookeventlogBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200518**](../Model/InlineResponse200518.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebhookEventLog**
> deleteWebhookEventLog($id, $_response)

Delete a Webhook Event Log resource

Available since: 6.4.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\WebhookEventLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the webhook_event_log
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteWebhookEventLog($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventLogApi->deleteWebhookEventLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the webhook_event_log |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookEventLog**
> \Swagger\Client\Model\InlineResponse200518 getWebhookEventLog($id)

Detailed information about a Webhook Event Log resource

Available since: 6.4.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\WebhookEventLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the webhook_event_log

try {
    $result = $apiInstance->getWebhookEventLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventLogApi->getWebhookEventLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the webhook_event_log |

### Return type

[**\Swagger\Client\Model\InlineResponse200518**](../Model/InlineResponse200518.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookEventLogList**
> \Swagger\Client\Model\InlineResponse200516 getWebhookEventLogList($limit, $page, $query)

List with basic information of Webhook Event Log resources

Available since: 6.4.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\WebhookEventLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getWebhookEventLogList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventLogApi->getWebhookEventLogList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200516**](../Model/InlineResponse200516.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhookEventLog**
> \Swagger\Client\Model\InlineResponse200518 updateWebhookEventLog($id, $body, $_response)

Partially update information about a Webhook Event Log resource

Available since: 6.4.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\WebhookEventLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the webhook_event_log
$body = new \Swagger\Client\Model\WebhookeventlogIdBody(); // \Swagger\Client\Model\WebhookeventlogIdBody | Partially update information about a Webhook Event Log resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateWebhookEventLog($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventLogApi->updateWebhookEventLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the webhook_event_log |
 **body** | [**\Swagger\Client\Model\WebhookeventlogIdBody**](../Model/WebhookeventlogIdBody.md)| Partially update information about a Webhook Event Log resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200518**](../Model/InlineResponse200518.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhookEventLog**
> \Swagger\Client\Model\InlineResponse200518 updateWebhookEventLog($id, $body, $_response)

Partially update information about a Webhook Event Log resource

Available since: 6.4.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\WebhookEventLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the webhook_event_log
$body = new \Swagger\Client\Model\WebhookeventlogIdBody(); // \Swagger\Client\Model\WebhookeventlogIdBody | Partially update information about a Webhook Event Log resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateWebhookEventLog($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventLogApi->updateWebhookEventLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the webhook_event_log |
 **body** | [**\Swagger\Client\Model\WebhookeventlogIdBody**](../Model/WebhookeventlogIdBody.md)| Partially update information about a Webhook Event Log resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200518**](../Model/InlineResponse200518.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

