# Swagger\Client\SwagMigrationMappingApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagMigrationMapping**](SwagMigrationMappingApi.md#createswagmigrationmapping) | **POST** /swag-migration-mapping | Create a new Swag Migration Mapping resources
[**deleteSwagMigrationMapping**](SwagMigrationMappingApi.md#deleteswagmigrationmapping) | **DELETE** /swag-migration-mapping/{id} | Delete a Swag Migration Mapping resource
[**getSwagMigrationMapping**](SwagMigrationMappingApi.md#getswagmigrationmapping) | **GET** /swag-migration-mapping/{id} | Detailed information about a Swag Migration Mapping resource
[**getSwagMigrationMappingList**](SwagMigrationMappingApi.md#getswagmigrationmappinglist) | **GET** /swag-migration-mapping | List with basic information of Swag Migration Mapping resources
[**updateSwagMigrationMapping**](SwagMigrationMappingApi.md#updateswagmigrationmapping) | **PATCH** /swag-migration-mapping/{id} | Partially update information about a Swag Migration Mapping resource

# **createSwagMigrationMapping**
> \Swagger\Client\Model\InlineResponse200458 createSwagMigrationMapping($body, $_response)

Create a new Swag Migration Mapping resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationMappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagmigrationmappingBody(); // \Swagger\Client\Model\SwagmigrationmappingBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagMigrationMapping($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationMappingApi->createSwagMigrationMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagmigrationmappingBody**](../Model/SwagmigrationmappingBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200458**](../Model/InlineResponse200458.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagMigrationMapping**
> \Swagger\Client\Model\InlineResponse200458 createSwagMigrationMapping($body, $_response)

Create a new Swag Migration Mapping resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationMappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagmigrationmappingBody(); // \Swagger\Client\Model\SwagmigrationmappingBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagMigrationMapping($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationMappingApi->createSwagMigrationMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagmigrationmappingBody**](../Model/SwagmigrationmappingBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200458**](../Model/InlineResponse200458.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagMigrationMapping**
> deleteSwagMigrationMapping($id, $_response)

Delete a Swag Migration Mapping resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationMappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_mapping
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagMigrationMapping($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationMappingApi->deleteSwagMigrationMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_mapping |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagMigrationMapping**
> \Swagger\Client\Model\InlineResponse200458 getSwagMigrationMapping($id)

Detailed information about a Swag Migration Mapping resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationMappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_mapping

try {
    $result = $apiInstance->getSwagMigrationMapping($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationMappingApi->getSwagMigrationMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_mapping |

### Return type

[**\Swagger\Client\Model\InlineResponse200458**](../Model/InlineResponse200458.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagMigrationMappingList**
> \Swagger\Client\Model\InlineResponse200456 getSwagMigrationMappingList($limit, $page, $query)

List with basic information of Swag Migration Mapping resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationMappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagMigrationMappingList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationMappingApi->getSwagMigrationMappingList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200456**](../Model/InlineResponse200456.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagMigrationMapping**
> \Swagger\Client\Model\InlineResponse200458 updateSwagMigrationMapping($id, $body, $_response)

Partially update information about a Swag Migration Mapping resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationMappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_mapping
$body = new \Swagger\Client\Model\SwagmigrationmappingIdBody(); // \Swagger\Client\Model\SwagmigrationmappingIdBody | Partially update information about a Swag Migration Mapping resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagMigrationMapping($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationMappingApi->updateSwagMigrationMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_mapping |
 **body** | [**\Swagger\Client\Model\SwagmigrationmappingIdBody**](../Model/SwagmigrationmappingIdBody.md)| Partially update information about a Swag Migration Mapping resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200458**](../Model/InlineResponse200458.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagMigrationMapping**
> \Swagger\Client\Model\InlineResponse200458 updateSwagMigrationMapping($id, $body, $_response)

Partially update information about a Swag Migration Mapping resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationMappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_mapping
$body = new \Swagger\Client\Model\SwagmigrationmappingIdBody(); // \Swagger\Client\Model\SwagmigrationmappingIdBody | Partially update information about a Swag Migration Mapping resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagMigrationMapping($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationMappingApi->updateSwagMigrationMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_mapping |
 **body** | [**\Swagger\Client\Model\SwagmigrationmappingIdBody**](../Model/SwagmigrationmappingIdBody.md)| Partially update information about a Swag Migration Mapping resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200458**](../Model/InlineResponse200458.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

