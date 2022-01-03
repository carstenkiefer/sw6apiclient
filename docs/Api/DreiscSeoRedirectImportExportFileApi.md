# Swagger\Client\DreiscSeoRedirectImportExportFileApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDreiscSeoRedirectImportExportFile**](DreiscSeoRedirectImportExportFileApi.md#createdreiscseoredirectimportexportfile) | **POST** /dreisc-seo-redirect-import-export-file | Create a new Dreisc Seo Redirect Import Export File resources
[**deleteDreiscSeoRedirectImportExportFile**](DreiscSeoRedirectImportExportFileApi.md#deletedreiscseoredirectimportexportfile) | **DELETE** /dreisc-seo-redirect-import-export-file/{id} | Delete a Dreisc Seo Redirect Import Export File resource
[**getDreiscSeoRedirectImportExportFile**](DreiscSeoRedirectImportExportFileApi.md#getdreiscseoredirectimportexportfile) | **GET** /dreisc-seo-redirect-import-export-file/{id} | Detailed information about a Dreisc Seo Redirect Import Export File resource
[**getDreiscSeoRedirectImportExportFileList**](DreiscSeoRedirectImportExportFileApi.md#getdreiscseoredirectimportexportfilelist) | **GET** /dreisc-seo-redirect-import-export-file | List with basic information of Dreisc Seo Redirect Import Export File resources
[**updateDreiscSeoRedirectImportExportFile**](DreiscSeoRedirectImportExportFileApi.md#updatedreiscseoredirectimportexportfile) | **PATCH** /dreisc-seo-redirect-import-export-file/{id} | Partially update information about a Dreisc Seo Redirect Import Export File resource

# **createDreiscSeoRedirectImportExportFile**
> \Swagger\Client\Model\InlineResponse200146 createDreiscSeoRedirectImportExportFile($body, $_response)

Create a new Dreisc Seo Redirect Import Export File resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectImportExportFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DreiscseoredirectimportexportfileBody(); // \Swagger\Client\Model\DreiscseoredirectimportexportfileBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDreiscSeoRedirectImportExportFile($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectImportExportFileApi->createDreiscSeoRedirectImportExportFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DreiscseoredirectimportexportfileBody**](../Model/DreiscseoredirectimportexportfileBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200146**](../Model/InlineResponse200146.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDreiscSeoRedirectImportExportFile**
> \Swagger\Client\Model\InlineResponse200146 createDreiscSeoRedirectImportExportFile($body, $_response)

Create a new Dreisc Seo Redirect Import Export File resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectImportExportFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DreiscseoredirectimportexportfileBody(); // \Swagger\Client\Model\DreiscseoredirectimportexportfileBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDreiscSeoRedirectImportExportFile($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectImportExportFileApi->createDreiscSeoRedirectImportExportFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DreiscseoredirectimportexportfileBody**](../Model/DreiscseoredirectimportexportfileBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200146**](../Model/InlineResponse200146.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDreiscSeoRedirectImportExportFile**
> deleteDreiscSeoRedirectImportExportFile($id, $_response)

Delete a Dreisc Seo Redirect Import Export File resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectImportExportFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_redirect_import_export_file
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteDreiscSeoRedirectImportExportFile($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectImportExportFileApi->deleteDreiscSeoRedirectImportExportFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_redirect_import_export_file |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDreiscSeoRedirectImportExportFile**
> \Swagger\Client\Model\InlineResponse200146 getDreiscSeoRedirectImportExportFile($id)

Detailed information about a Dreisc Seo Redirect Import Export File resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectImportExportFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_redirect_import_export_file

try {
    $result = $apiInstance->getDreiscSeoRedirectImportExportFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectImportExportFileApi->getDreiscSeoRedirectImportExportFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_redirect_import_export_file |

### Return type

[**\Swagger\Client\Model\InlineResponse200146**](../Model/InlineResponse200146.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDreiscSeoRedirectImportExportFileList**
> \Swagger\Client\Model\InlineResponse200144 getDreiscSeoRedirectImportExportFileList($limit, $page, $query)

List with basic information of Dreisc Seo Redirect Import Export File resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectImportExportFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getDreiscSeoRedirectImportExportFileList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectImportExportFileApi->getDreiscSeoRedirectImportExportFileList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200144**](../Model/InlineResponse200144.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDreiscSeoRedirectImportExportFile**
> \Swagger\Client\Model\InlineResponse200146 updateDreiscSeoRedirectImportExportFile($id, $body, $_response)

Partially update information about a Dreisc Seo Redirect Import Export File resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectImportExportFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_redirect_import_export_file
$body = new \Swagger\Client\Model\DreiscseoredirectimportexportfileIdBody(); // \Swagger\Client\Model\DreiscseoredirectimportexportfileIdBody | Partially update information about a Dreisc Seo Redirect Import Export File resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDreiscSeoRedirectImportExportFile($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectImportExportFileApi->updateDreiscSeoRedirectImportExportFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_redirect_import_export_file |
 **body** | [**\Swagger\Client\Model\DreiscseoredirectimportexportfileIdBody**](../Model/DreiscseoredirectimportexportfileIdBody.md)| Partially update information about a Dreisc Seo Redirect Import Export File resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200146**](../Model/InlineResponse200146.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDreiscSeoRedirectImportExportFile**
> \Swagger\Client\Model\InlineResponse200146 updateDreiscSeoRedirectImportExportFile($id, $body, $_response)

Partially update information about a Dreisc Seo Redirect Import Export File resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectImportExportFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_redirect_import_export_file
$body = new \Swagger\Client\Model\DreiscseoredirectimportexportfileIdBody(); // \Swagger\Client\Model\DreiscseoredirectimportexportfileIdBody | Partially update information about a Dreisc Seo Redirect Import Export File resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDreiscSeoRedirectImportExportFile($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectImportExportFileApi->updateDreiscSeoRedirectImportExportFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_redirect_import_export_file |
 **body** | [**\Swagger\Client\Model\DreiscseoredirectimportexportfileIdBody**](../Model/DreiscseoredirectimportexportfileIdBody.md)| Partially update information about a Dreisc Seo Redirect Import Export File resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200146**](../Model/InlineResponse200146.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

