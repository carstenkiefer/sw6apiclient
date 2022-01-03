# Swagger\Client\SPluginNetzpStagingApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSPluginNetzpStaging**](SPluginNetzpStagingApi.md#createspluginnetzpstaging) | **POST** /s-plugin-netzp-staging | Create a new S Plugin Netzp Staging resources
[**deleteSPluginNetzpStaging**](SPluginNetzpStagingApi.md#deletespluginnetzpstaging) | **DELETE** /s-plugin-netzp-staging/{id} | Delete a S Plugin Netzp Staging resource
[**getSPluginNetzpStaging**](SPluginNetzpStagingApi.md#getspluginnetzpstaging) | **GET** /s-plugin-netzp-staging/{id} | Detailed information about a S Plugin Netzp Staging resource
[**getSPluginNetzpStagingList**](SPluginNetzpStagingApi.md#getspluginnetzpstaginglist) | **GET** /s-plugin-netzp-staging | List with basic information of S Plugin Netzp Staging resources
[**updateSPluginNetzpStaging**](SPluginNetzpStagingApi.md#updatespluginnetzpstaging) | **PATCH** /s-plugin-netzp-staging/{id} | Partially update information about a S Plugin Netzp Staging resource

# **createSPluginNetzpStaging**
> \Swagger\Client\Model\InlineResponse200353 createSPluginNetzpStaging($body, $_response)

Create a new S Plugin Netzp Staging resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SPluginNetzpStagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SpluginnetzpstagingBody(); // \Swagger\Client\Model\SpluginnetzpstagingBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSPluginNetzpStaging($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SPluginNetzpStagingApi->createSPluginNetzpStaging: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SpluginnetzpstagingBody**](../Model/SpluginnetzpstagingBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200353**](../Model/InlineResponse200353.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSPluginNetzpStaging**
> \Swagger\Client\Model\InlineResponse200353 createSPluginNetzpStaging($body, $_response)

Create a new S Plugin Netzp Staging resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SPluginNetzpStagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SpluginnetzpstagingBody(); // \Swagger\Client\Model\SpluginnetzpstagingBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSPluginNetzpStaging($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SPluginNetzpStagingApi->createSPluginNetzpStaging: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SpluginnetzpstagingBody**](../Model/SpluginnetzpstagingBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200353**](../Model/InlineResponse200353.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSPluginNetzpStaging**
> deleteSPluginNetzpStaging($id, $_response)

Delete a S Plugin Netzp Staging resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SPluginNetzpStagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the s_plugin_netzp_staging
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSPluginNetzpStaging($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SPluginNetzpStagingApi->deleteSPluginNetzpStaging: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the s_plugin_netzp_staging |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSPluginNetzpStaging**
> \Swagger\Client\Model\InlineResponse200353 getSPluginNetzpStaging($id)

Detailed information about a S Plugin Netzp Staging resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SPluginNetzpStagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the s_plugin_netzp_staging

try {
    $result = $apiInstance->getSPluginNetzpStaging($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SPluginNetzpStagingApi->getSPluginNetzpStaging: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the s_plugin_netzp_staging |

### Return type

[**\Swagger\Client\Model\InlineResponse200353**](../Model/InlineResponse200353.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSPluginNetzpStagingList**
> \Swagger\Client\Model\InlineResponse200351 getSPluginNetzpStagingList($limit, $page, $query)

List with basic information of S Plugin Netzp Staging resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SPluginNetzpStagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSPluginNetzpStagingList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SPluginNetzpStagingApi->getSPluginNetzpStagingList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200351**](../Model/InlineResponse200351.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSPluginNetzpStaging**
> \Swagger\Client\Model\InlineResponse200353 updateSPluginNetzpStaging($id, $body, $_response)

Partially update information about a S Plugin Netzp Staging resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SPluginNetzpStagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the s_plugin_netzp_staging
$body = new \Swagger\Client\Model\SpluginnetzpstagingIdBody(); // \Swagger\Client\Model\SpluginnetzpstagingIdBody | Partially update information about a S Plugin Netzp Staging resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSPluginNetzpStaging($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SPluginNetzpStagingApi->updateSPluginNetzpStaging: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the s_plugin_netzp_staging |
 **body** | [**\Swagger\Client\Model\SpluginnetzpstagingIdBody**](../Model/SpluginnetzpstagingIdBody.md)| Partially update information about a S Plugin Netzp Staging resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200353**](../Model/InlineResponse200353.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSPluginNetzpStaging**
> \Swagger\Client\Model\InlineResponse200353 updateSPluginNetzpStaging($id, $body, $_response)

Partially update information about a S Plugin Netzp Staging resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SPluginNetzpStagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the s_plugin_netzp_staging
$body = new \Swagger\Client\Model\SpluginnetzpstagingIdBody(); // \Swagger\Client\Model\SpluginnetzpstagingIdBody | Partially update information about a S Plugin Netzp Staging resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSPluginNetzpStaging($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SPluginNetzpStagingApi->updateSPluginNetzpStaging: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the s_plugin_netzp_staging |
 **body** | [**\Swagger\Client\Model\SpluginnetzpstagingIdBody**](../Model/SpluginnetzpstagingIdBody.md)| Partially update information about a S Plugin Netzp Staging resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200353**](../Model/InlineResponse200353.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

