# Swagger\Client\DreiscSeoBulkApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDreiscSeoBulk**](DreiscSeoBulkApi.md#createdreiscseobulk) | **POST** /dreisc-seo-bulk | Create a new Dreisc Seo Bulk resources
[**deleteDreiscSeoBulk**](DreiscSeoBulkApi.md#deletedreiscseobulk) | **DELETE** /dreisc-seo-bulk/{id} | Delete a Dreisc Seo Bulk resource
[**getDreiscSeoBulk**](DreiscSeoBulkApi.md#getdreiscseobulk) | **GET** /dreisc-seo-bulk/{id} | Detailed information about a Dreisc Seo Bulk resource
[**getDreiscSeoBulkList**](DreiscSeoBulkApi.md#getdreiscseobulklist) | **GET** /dreisc-seo-bulk | List with basic information of Dreisc Seo Bulk resources
[**updateDreiscSeoBulk**](DreiscSeoBulkApi.md#updatedreiscseobulk) | **PATCH** /dreisc-seo-bulk/{id} | Partially update information about a Dreisc Seo Bulk resource

# **createDreiscSeoBulk**
> \Swagger\Client\Model\InlineResponse200137 createDreiscSeoBulk($body, $_response)

Create a new Dreisc Seo Bulk resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoBulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DreiscseobulkBody(); // \Swagger\Client\Model\DreiscseobulkBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDreiscSeoBulk($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoBulkApi->createDreiscSeoBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DreiscseobulkBody**](../Model/DreiscseobulkBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200137**](../Model/InlineResponse200137.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDreiscSeoBulk**
> \Swagger\Client\Model\InlineResponse200137 createDreiscSeoBulk($body, $_response)

Create a new Dreisc Seo Bulk resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoBulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DreiscseobulkBody(); // \Swagger\Client\Model\DreiscseobulkBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDreiscSeoBulk($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoBulkApi->createDreiscSeoBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DreiscseobulkBody**](../Model/DreiscseobulkBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200137**](../Model/InlineResponse200137.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDreiscSeoBulk**
> deleteDreiscSeoBulk($id, $_response)

Delete a Dreisc Seo Bulk resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoBulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_bulk
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteDreiscSeoBulk($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoBulkApi->deleteDreiscSeoBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_bulk |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDreiscSeoBulk**
> \Swagger\Client\Model\InlineResponse200137 getDreiscSeoBulk($id)

Detailed information about a Dreisc Seo Bulk resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoBulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_bulk

try {
    $result = $apiInstance->getDreiscSeoBulk($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoBulkApi->getDreiscSeoBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_bulk |

### Return type

[**\Swagger\Client\Model\InlineResponse200137**](../Model/InlineResponse200137.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDreiscSeoBulkList**
> \Swagger\Client\Model\InlineResponse200135 getDreiscSeoBulkList($limit, $page, $query)

List with basic information of Dreisc Seo Bulk resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoBulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getDreiscSeoBulkList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoBulkApi->getDreiscSeoBulkList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200135**](../Model/InlineResponse200135.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDreiscSeoBulk**
> \Swagger\Client\Model\InlineResponse200137 updateDreiscSeoBulk($id, $body, $_response)

Partially update information about a Dreisc Seo Bulk resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoBulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_bulk
$body = new \Swagger\Client\Model\DreiscseobulkIdBody(); // \Swagger\Client\Model\DreiscseobulkIdBody | Partially update information about a Dreisc Seo Bulk resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDreiscSeoBulk($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoBulkApi->updateDreiscSeoBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_bulk |
 **body** | [**\Swagger\Client\Model\DreiscseobulkIdBody**](../Model/DreiscseobulkIdBody.md)| Partially update information about a Dreisc Seo Bulk resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200137**](../Model/InlineResponse200137.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDreiscSeoBulk**
> \Swagger\Client\Model\InlineResponse200137 updateDreiscSeoBulk($id, $body, $_response)

Partially update information about a Dreisc Seo Bulk resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoBulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_bulk
$body = new \Swagger\Client\Model\DreiscseobulkIdBody(); // \Swagger\Client\Model\DreiscseobulkIdBody | Partially update information about a Dreisc Seo Bulk resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDreiscSeoBulk($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoBulkApi->updateDreiscSeoBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_bulk |
 **body** | [**\Swagger\Client\Model\DreiscseobulkIdBody**](../Model/DreiscseobulkIdBody.md)| Partially update information about a Dreisc Seo Bulk resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200137**](../Model/InlineResponse200137.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

