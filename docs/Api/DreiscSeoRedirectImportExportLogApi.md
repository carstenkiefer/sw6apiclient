# Swagger\Client\DreiscSeoRedirectImportExportLogApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDreiscSeoRedirectImportExportLog**](DreiscSeoRedirectImportExportLogApi.md#createdreiscseoredirectimportexportlog) | **POST** /dreisc-seo-redirect-import-export-log | Create a new Dreisc Seo Redirect Import Export Log resources
[**deleteDreiscSeoRedirectImportExportLog**](DreiscSeoRedirectImportExportLogApi.md#deletedreiscseoredirectimportexportlog) | **DELETE** /dreisc-seo-redirect-import-export-log/{id} | Delete a Dreisc Seo Redirect Import Export Log resource
[**getDreiscSeoRedirectImportExportLog**](DreiscSeoRedirectImportExportLogApi.md#getdreiscseoredirectimportexportlog) | **GET** /dreisc-seo-redirect-import-export-log/{id} | Detailed information about a Dreisc Seo Redirect Import Export Log resource
[**getDreiscSeoRedirectImportExportLogList**](DreiscSeoRedirectImportExportLogApi.md#getdreiscseoredirectimportexportloglist) | **GET** /dreisc-seo-redirect-import-export-log | List with basic information of Dreisc Seo Redirect Import Export Log resources
[**updateDreiscSeoRedirectImportExportLog**](DreiscSeoRedirectImportExportLogApi.md#updatedreiscseoredirectimportexportlog) | **PATCH** /dreisc-seo-redirect-import-export-log/{id} | Partially update information about a Dreisc Seo Redirect Import Export Log resource

# **createDreiscSeoRedirectImportExportLog**
> \Swagger\Client\Model\InlineResponse200149 createDreiscSeoRedirectImportExportLog($body, $_response)

Create a new Dreisc Seo Redirect Import Export Log resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DreiscseoredirectimportexportlogBody(); // \Swagger\Client\Model\DreiscseoredirectimportexportlogBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDreiscSeoRedirectImportExportLog($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectImportExportLogApi->createDreiscSeoRedirectImportExportLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DreiscseoredirectimportexportlogBody**](../Model/DreiscseoredirectimportexportlogBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200149**](../Model/InlineResponse200149.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDreiscSeoRedirectImportExportLog**
> \Swagger\Client\Model\InlineResponse200149 createDreiscSeoRedirectImportExportLog($body, $_response)

Create a new Dreisc Seo Redirect Import Export Log resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DreiscseoredirectimportexportlogBody(); // \Swagger\Client\Model\DreiscseoredirectimportexportlogBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDreiscSeoRedirectImportExportLog($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectImportExportLogApi->createDreiscSeoRedirectImportExportLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DreiscseoredirectimportexportlogBody**](../Model/DreiscseoredirectimportexportlogBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200149**](../Model/InlineResponse200149.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDreiscSeoRedirectImportExportLog**
> deleteDreiscSeoRedirectImportExportLog($id, $_response)

Delete a Dreisc Seo Redirect Import Export Log resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_redirect_import_export_log
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteDreiscSeoRedirectImportExportLog($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectImportExportLogApi->deleteDreiscSeoRedirectImportExportLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_redirect_import_export_log |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDreiscSeoRedirectImportExportLog**
> \Swagger\Client\Model\InlineResponse200149 getDreiscSeoRedirectImportExportLog($id)

Detailed information about a Dreisc Seo Redirect Import Export Log resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_redirect_import_export_log

try {
    $result = $apiInstance->getDreiscSeoRedirectImportExportLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectImportExportLogApi->getDreiscSeoRedirectImportExportLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_redirect_import_export_log |

### Return type

[**\Swagger\Client\Model\InlineResponse200149**](../Model/InlineResponse200149.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDreiscSeoRedirectImportExportLogList**
> \Swagger\Client\Model\InlineResponse200147 getDreiscSeoRedirectImportExportLogList($limit, $page, $query)

List with basic information of Dreisc Seo Redirect Import Export Log resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getDreiscSeoRedirectImportExportLogList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectImportExportLogApi->getDreiscSeoRedirectImportExportLogList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200147**](../Model/InlineResponse200147.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDreiscSeoRedirectImportExportLog**
> \Swagger\Client\Model\InlineResponse200149 updateDreiscSeoRedirectImportExportLog($id, $body, $_response)

Partially update information about a Dreisc Seo Redirect Import Export Log resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_redirect_import_export_log
$body = new \Swagger\Client\Model\DreiscseoredirectimportexportlogIdBody(); // \Swagger\Client\Model\DreiscseoredirectimportexportlogIdBody | Partially update information about a Dreisc Seo Redirect Import Export Log resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDreiscSeoRedirectImportExportLog($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectImportExportLogApi->updateDreiscSeoRedirectImportExportLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_redirect_import_export_log |
 **body** | [**\Swagger\Client\Model\DreiscseoredirectimportexportlogIdBody**](../Model/DreiscseoredirectimportexportlogIdBody.md)| Partially update information about a Dreisc Seo Redirect Import Export Log resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200149**](../Model/InlineResponse200149.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDreiscSeoRedirectImportExportLog**
> \Swagger\Client\Model\InlineResponse200149 updateDreiscSeoRedirectImportExportLog($id, $body, $_response)

Partially update information about a Dreisc Seo Redirect Import Export Log resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_redirect_import_export_log
$body = new \Swagger\Client\Model\DreiscseoredirectimportexportlogIdBody(); // \Swagger\Client\Model\DreiscseoredirectimportexportlogIdBody | Partially update information about a Dreisc Seo Redirect Import Export Log resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDreiscSeoRedirectImportExportLog($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectImportExportLogApi->updateDreiscSeoRedirectImportExportLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_redirect_import_export_log |
 **body** | [**\Swagger\Client\Model\DreiscseoredirectimportexportlogIdBody**](../Model/DreiscseoredirectimportexportlogIdBody.md)| Partially update information about a Dreisc Seo Redirect Import Export Log resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200149**](../Model/InlineResponse200149.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

