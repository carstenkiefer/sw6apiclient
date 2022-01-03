# Swagger\Client\MessageQueueStatsApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMessageQueueStats**](MessageQueueStatsApi.md#createmessagequeuestats) | **POST** /message-queue-stats | Create a new Message Queue Stats resources
[**deleteMessageQueueStats**](MessageQueueStatsApi.md#deletemessagequeuestats) | **DELETE** /message-queue-stats/{id} | Delete a Message Queue Stats resource
[**getMessageQueueStats**](MessageQueueStatsApi.md#getmessagequeuestats) | **GET** /message-queue-stats/{id} | Detailed information about a Message Queue Stats resource
[**getMessageQueueStatsList**](MessageQueueStatsApi.md#getmessagequeuestatslist) | **GET** /message-queue-stats | List with basic information of Message Queue Stats resources
[**updateMessageQueueStats**](MessageQueueStatsApi.md#updatemessagequeuestats) | **PATCH** /message-queue-stats/{id} | Partially update information about a Message Queue Stats resource

# **createMessageQueueStats**
> \Swagger\Client\Model\InlineResponse200221 createMessageQueueStats($body, $_response)

Create a new Message Queue Stats resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageQueueStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MessagequeuestatsBody(); // \Swagger\Client\Model\MessagequeuestatsBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMessageQueueStats($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageQueueStatsApi->createMessageQueueStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MessagequeuestatsBody**](../Model/MessagequeuestatsBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200221**](../Model/InlineResponse200221.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMessageQueueStats**
> \Swagger\Client\Model\InlineResponse200221 createMessageQueueStats($body, $_response)

Create a new Message Queue Stats resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageQueueStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MessagequeuestatsBody(); // \Swagger\Client\Model\MessagequeuestatsBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMessageQueueStats($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageQueueStatsApi->createMessageQueueStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MessagequeuestatsBody**](../Model/MessagequeuestatsBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200221**](../Model/InlineResponse200221.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMessageQueueStats**
> deleteMessageQueueStats($id, $_response)

Delete a Message Queue Stats resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageQueueStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the message_queue_stats
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteMessageQueueStats($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling MessageQueueStatsApi->deleteMessageQueueStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the message_queue_stats |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageQueueStats**
> \Swagger\Client\Model\InlineResponse200221 getMessageQueueStats($id)

Detailed information about a Message Queue Stats resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageQueueStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the message_queue_stats

try {
    $result = $apiInstance->getMessageQueueStats($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageQueueStatsApi->getMessageQueueStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the message_queue_stats |

### Return type

[**\Swagger\Client\Model\InlineResponse200221**](../Model/InlineResponse200221.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageQueueStatsList**
> \Swagger\Client\Model\InlineResponse200219 getMessageQueueStatsList($limit, $page, $query)

List with basic information of Message Queue Stats resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageQueueStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getMessageQueueStatsList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageQueueStatsApi->getMessageQueueStatsList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200219**](../Model/InlineResponse200219.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMessageQueueStats**
> \Swagger\Client\Model\InlineResponse200221 updateMessageQueueStats($id, $body, $_response)

Partially update information about a Message Queue Stats resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageQueueStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the message_queue_stats
$body = new \Swagger\Client\Model\MessagequeuestatsIdBody(); // \Swagger\Client\Model\MessagequeuestatsIdBody | Partially update information about a Message Queue Stats resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMessageQueueStats($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageQueueStatsApi->updateMessageQueueStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the message_queue_stats |
 **body** | [**\Swagger\Client\Model\MessagequeuestatsIdBody**](../Model/MessagequeuestatsIdBody.md)| Partially update information about a Message Queue Stats resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200221**](../Model/InlineResponse200221.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMessageQueueStats**
> \Swagger\Client\Model\InlineResponse200221 updateMessageQueueStats($id, $body, $_response)

Partially update information about a Message Queue Stats resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageQueueStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the message_queue_stats
$body = new \Swagger\Client\Model\MessagequeuestatsIdBody(); // \Swagger\Client\Model\MessagequeuestatsIdBody | Partially update information about a Message Queue Stats resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMessageQueueStats($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageQueueStatsApi->updateMessageQueueStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the message_queue_stats |
 **body** | [**\Swagger\Client\Model\MessagequeuestatsIdBody**](../Model/MessagequeuestatsIdBody.md)| Partially update information about a Message Queue Stats resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200221**](../Model/InlineResponse200221.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

