# Swagger\Client\FlowSequenceApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFlowSequence**](FlowSequenceApi.md#createflowsequence) | **POST** /flow-sequence | Create a new Flow Sequence resources
[**deleteFlowSequence**](FlowSequenceApi.md#deleteflowsequence) | **DELETE** /flow-sequence/{id} | Delete a Flow Sequence resource
[**getFlowSequence**](FlowSequenceApi.md#getflowsequence) | **GET** /flow-sequence/{id} | Detailed information about a Flow Sequence resource
[**getFlowSequenceList**](FlowSequenceApi.md#getflowsequencelist) | **GET** /flow-sequence | List with basic information of Flow Sequence resources
[**updateFlowSequence**](FlowSequenceApi.md#updateflowsequence) | **PATCH** /flow-sequence/{id} | Partially update information about a Flow Sequence resource

# **createFlowSequence**
> \Swagger\Client\Model\InlineResponse200161 createFlowSequence($body, $_response)

Create a new Flow Sequence resources

Available since: 6.4.6.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FlowSequenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\FlowsequenceBody(); // \Swagger\Client\Model\FlowsequenceBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createFlowSequence($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowSequenceApi->createFlowSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlowsequenceBody**](../Model/FlowsequenceBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200161**](../Model/InlineResponse200161.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFlowSequence**
> \Swagger\Client\Model\InlineResponse200161 createFlowSequence($body, $_response)

Create a new Flow Sequence resources

Available since: 6.4.6.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FlowSequenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\FlowsequenceBody(); // \Swagger\Client\Model\FlowsequenceBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createFlowSequence($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowSequenceApi->createFlowSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlowsequenceBody**](../Model/FlowsequenceBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200161**](../Model/InlineResponse200161.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFlowSequence**
> deleteFlowSequence($id, $_response)

Delete a Flow Sequence resource

Available since: 6.4.6.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FlowSequenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the flow_sequence
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteFlowSequence($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling FlowSequenceApi->deleteFlowSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the flow_sequence |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowSequence**
> \Swagger\Client\Model\InlineResponse200161 getFlowSequence($id)

Detailed information about a Flow Sequence resource

Available since: 6.4.6.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FlowSequenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the flow_sequence

try {
    $result = $apiInstance->getFlowSequence($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowSequenceApi->getFlowSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the flow_sequence |

### Return type

[**\Swagger\Client\Model\InlineResponse200161**](../Model/InlineResponse200161.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowSequenceList**
> \Swagger\Client\Model\InlineResponse200159 getFlowSequenceList($limit, $page, $query)

List with basic information of Flow Sequence resources

Available since: 6.4.6.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FlowSequenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getFlowSequenceList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowSequenceApi->getFlowSequenceList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200159**](../Model/InlineResponse200159.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFlowSequence**
> \Swagger\Client\Model\InlineResponse200161 updateFlowSequence($id, $body, $_response)

Partially update information about a Flow Sequence resource

Available since: 6.4.6.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FlowSequenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the flow_sequence
$body = new \Swagger\Client\Model\FlowsequenceIdBody(); // \Swagger\Client\Model\FlowsequenceIdBody | Partially update information about a Flow Sequence resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateFlowSequence($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowSequenceApi->updateFlowSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the flow_sequence |
 **body** | [**\Swagger\Client\Model\FlowsequenceIdBody**](../Model/FlowsequenceIdBody.md)| Partially update information about a Flow Sequence resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200161**](../Model/InlineResponse200161.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFlowSequence**
> \Swagger\Client\Model\InlineResponse200161 updateFlowSequence($id, $body, $_response)

Partially update information about a Flow Sequence resource

Available since: 6.4.6.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FlowSequenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the flow_sequence
$body = new \Swagger\Client\Model\FlowsequenceIdBody(); // \Swagger\Client\Model\FlowsequenceIdBody | Partially update information about a Flow Sequence resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateFlowSequence($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowSequenceApi->updateFlowSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the flow_sequence |
 **body** | [**\Swagger\Client\Model\FlowsequenceIdBody**](../Model/FlowsequenceIdBody.md)| Partially update information about a Flow Sequence resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200161**](../Model/InlineResponse200161.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

