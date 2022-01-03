# Swagger\Client\SwagMigrationMediaFileApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagMigrationMediaFile**](SwagMigrationMediaFileApi.md#createswagmigrationmediafile) | **POST** /swag-migration-media-file | Create a new Swag Migration Media File resources
[**deleteSwagMigrationMediaFile**](SwagMigrationMediaFileApi.md#deleteswagmigrationmediafile) | **DELETE** /swag-migration-media-file/{id} | Delete a Swag Migration Media File resource
[**getSwagMigrationMediaFile**](SwagMigrationMediaFileApi.md#getswagmigrationmediafile) | **GET** /swag-migration-media-file/{id} | Detailed information about a Swag Migration Media File resource
[**getSwagMigrationMediaFileList**](SwagMigrationMediaFileApi.md#getswagmigrationmediafilelist) | **GET** /swag-migration-media-file | List with basic information of Swag Migration Media File resources
[**updateSwagMigrationMediaFile**](SwagMigrationMediaFileApi.md#updateswagmigrationmediafile) | **PATCH** /swag-migration-media-file/{id} | Partially update information about a Swag Migration Media File resource

# **createSwagMigrationMediaFile**
> \Swagger\Client\Model\InlineResponse200461 createSwagMigrationMediaFile($body, $_response)

Create a new Swag Migration Media File resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationMediaFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagmigrationmediafileBody(); // \Swagger\Client\Model\SwagmigrationmediafileBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagMigrationMediaFile($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationMediaFileApi->createSwagMigrationMediaFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagmigrationmediafileBody**](../Model/SwagmigrationmediafileBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200461**](../Model/InlineResponse200461.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagMigrationMediaFile**
> \Swagger\Client\Model\InlineResponse200461 createSwagMigrationMediaFile($body, $_response)

Create a new Swag Migration Media File resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationMediaFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagmigrationmediafileBody(); // \Swagger\Client\Model\SwagmigrationmediafileBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagMigrationMediaFile($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationMediaFileApi->createSwagMigrationMediaFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagmigrationmediafileBody**](../Model/SwagmigrationmediafileBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200461**](../Model/InlineResponse200461.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagMigrationMediaFile**
> deleteSwagMigrationMediaFile($id, $_response)

Delete a Swag Migration Media File resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationMediaFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_media_file
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagMigrationMediaFile($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationMediaFileApi->deleteSwagMigrationMediaFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_media_file |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagMigrationMediaFile**
> \Swagger\Client\Model\InlineResponse200461 getSwagMigrationMediaFile($id)

Detailed information about a Swag Migration Media File resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationMediaFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_media_file

try {
    $result = $apiInstance->getSwagMigrationMediaFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationMediaFileApi->getSwagMigrationMediaFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_media_file |

### Return type

[**\Swagger\Client\Model\InlineResponse200461**](../Model/InlineResponse200461.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagMigrationMediaFileList**
> \Swagger\Client\Model\InlineResponse200459 getSwagMigrationMediaFileList($limit, $page, $query)

List with basic information of Swag Migration Media File resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationMediaFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagMigrationMediaFileList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationMediaFileApi->getSwagMigrationMediaFileList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200459**](../Model/InlineResponse200459.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagMigrationMediaFile**
> \Swagger\Client\Model\InlineResponse200461 updateSwagMigrationMediaFile($id, $body, $_response)

Partially update information about a Swag Migration Media File resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationMediaFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_media_file
$body = new \Swagger\Client\Model\SwagmigrationmediafileIdBody(); // \Swagger\Client\Model\SwagmigrationmediafileIdBody | Partially update information about a Swag Migration Media File resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagMigrationMediaFile($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationMediaFileApi->updateSwagMigrationMediaFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_media_file |
 **body** | [**\Swagger\Client\Model\SwagmigrationmediafileIdBody**](../Model/SwagmigrationmediafileIdBody.md)| Partially update information about a Swag Migration Media File resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200461**](../Model/InlineResponse200461.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagMigrationMediaFile**
> \Swagger\Client\Model\InlineResponse200461 updateSwagMigrationMediaFile($id, $body, $_response)

Partially update information about a Swag Migration Media File resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationMediaFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_media_file
$body = new \Swagger\Client\Model\SwagmigrationmediafileIdBody(); // \Swagger\Client\Model\SwagmigrationmediafileIdBody | Partially update information about a Swag Migration Media File resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagMigrationMediaFile($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationMediaFileApi->updateSwagMigrationMediaFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_media_file |
 **body** | [**\Swagger\Client\Model\SwagmigrationmediafileIdBody**](../Model/SwagmigrationmediafileIdBody.md)| Partially update information about a Swag Migration Media File resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200461**](../Model/InlineResponse200461.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

