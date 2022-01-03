# Swagger\Client\SwagMigrationConnectionApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagMigrationConnection**](SwagMigrationConnectionApi.md#createswagmigrationconnection) | **POST** /swag-migration-connection | Create a new Swag Migration Connection resources
[**deleteSwagMigrationConnection**](SwagMigrationConnectionApi.md#deleteswagmigrationconnection) | **DELETE** /swag-migration-connection/{id} | Delete a Swag Migration Connection resource
[**getSwagMigrationConnection**](SwagMigrationConnectionApi.md#getswagmigrationconnection) | **GET** /swag-migration-connection/{id} | Detailed information about a Swag Migration Connection resource
[**getSwagMigrationConnectionList**](SwagMigrationConnectionApi.md#getswagmigrationconnectionlist) | **GET** /swag-migration-connection | List with basic information of Swag Migration Connection resources
[**updateSwagMigrationConnection**](SwagMigrationConnectionApi.md#updateswagmigrationconnection) | **PATCH** /swag-migration-connection/{id} | Partially update information about a Swag Migration Connection resource

# **createSwagMigrationConnection**
> \Swagger\Client\Model\InlineResponse200446 createSwagMigrationConnection($body, $_response)

Create a new Swag Migration Connection resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagmigrationconnectionBody(); // \Swagger\Client\Model\SwagmigrationconnectionBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagMigrationConnection($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationConnectionApi->createSwagMigrationConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagmigrationconnectionBody**](../Model/SwagmigrationconnectionBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200446**](../Model/InlineResponse200446.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagMigrationConnection**
> \Swagger\Client\Model\InlineResponse200446 createSwagMigrationConnection($body, $_response)

Create a new Swag Migration Connection resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagmigrationconnectionBody(); // \Swagger\Client\Model\SwagmigrationconnectionBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagMigrationConnection($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationConnectionApi->createSwagMigrationConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagmigrationconnectionBody**](../Model/SwagmigrationconnectionBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200446**](../Model/InlineResponse200446.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagMigrationConnection**
> deleteSwagMigrationConnection($id, $_response)

Delete a Swag Migration Connection resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_connection
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagMigrationConnection($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationConnectionApi->deleteSwagMigrationConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_connection |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagMigrationConnection**
> \Swagger\Client\Model\InlineResponse200446 getSwagMigrationConnection($id)

Detailed information about a Swag Migration Connection resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_connection

try {
    $result = $apiInstance->getSwagMigrationConnection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationConnectionApi->getSwagMigrationConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_connection |

### Return type

[**\Swagger\Client\Model\InlineResponse200446**](../Model/InlineResponse200446.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagMigrationConnectionList**
> \Swagger\Client\Model\InlineResponse200444 getSwagMigrationConnectionList($limit, $page, $query)

List with basic information of Swag Migration Connection resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagMigrationConnectionList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationConnectionApi->getSwagMigrationConnectionList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200444**](../Model/InlineResponse200444.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagMigrationConnection**
> \Swagger\Client\Model\InlineResponse200446 updateSwagMigrationConnection($id, $body, $_response)

Partially update information about a Swag Migration Connection resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_connection
$body = new \Swagger\Client\Model\SwagmigrationconnectionIdBody(); // \Swagger\Client\Model\SwagmigrationconnectionIdBody | Partially update information about a Swag Migration Connection resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagMigrationConnection($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationConnectionApi->updateSwagMigrationConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_connection |
 **body** | [**\Swagger\Client\Model\SwagmigrationconnectionIdBody**](../Model/SwagmigrationconnectionIdBody.md)| Partially update information about a Swag Migration Connection resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200446**](../Model/InlineResponse200446.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagMigrationConnection**
> \Swagger\Client\Model\InlineResponse200446 updateSwagMigrationConnection($id, $body, $_response)

Partially update information about a Swag Migration Connection resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_connection
$body = new \Swagger\Client\Model\SwagmigrationconnectionIdBody(); // \Swagger\Client\Model\SwagmigrationconnectionIdBody | Partially update information about a Swag Migration Connection resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagMigrationConnection($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationConnectionApi->updateSwagMigrationConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_connection |
 **body** | [**\Swagger\Client\Model\SwagmigrationconnectionIdBody**](../Model/SwagmigrationconnectionIdBody.md)| Partially update information about a Swag Migration Connection resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200446**](../Model/InlineResponse200446.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

