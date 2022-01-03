# Swagger\Client\SwagMigrationRunApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagMigrationRun**](SwagMigrationRunApi.md#createswagmigrationrun) | **POST** /swag-migration-run | Create a new Swag Migration Run resources
[**deleteSwagMigrationRun**](SwagMigrationRunApi.md#deleteswagmigrationrun) | **DELETE** /swag-migration-run/{id} | Delete a Swag Migration Run resource
[**getSwagMigrationRun**](SwagMigrationRunApi.md#getswagmigrationrun) | **GET** /swag-migration-run/{id} | Detailed information about a Swag Migration Run resource
[**getSwagMigrationRunList**](SwagMigrationRunApi.md#getswagmigrationrunlist) | **GET** /swag-migration-run | List with basic information of Swag Migration Run resources
[**updateSwagMigrationRun**](SwagMigrationRunApi.md#updateswagmigrationrun) | **PATCH** /swag-migration-run/{id} | Partially update information about a Swag Migration Run resource

# **createSwagMigrationRun**
> \Swagger\Client\Model\InlineResponse200464 createSwagMigrationRun($body, $_response)

Create a new Swag Migration Run resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagmigrationrunBody(); // \Swagger\Client\Model\SwagmigrationrunBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagMigrationRun($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationRunApi->createSwagMigrationRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagmigrationrunBody**](../Model/SwagmigrationrunBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200464**](../Model/InlineResponse200464.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagMigrationRun**
> \Swagger\Client\Model\InlineResponse200464 createSwagMigrationRun($body, $_response)

Create a new Swag Migration Run resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagmigrationrunBody(); // \Swagger\Client\Model\SwagmigrationrunBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagMigrationRun($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationRunApi->createSwagMigrationRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagmigrationrunBody**](../Model/SwagmigrationrunBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200464**](../Model/InlineResponse200464.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagMigrationRun**
> deleteSwagMigrationRun($id, $_response)

Delete a Swag Migration Run resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_run
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagMigrationRun($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationRunApi->deleteSwagMigrationRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_run |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagMigrationRun**
> \Swagger\Client\Model\InlineResponse200464 getSwagMigrationRun($id)

Detailed information about a Swag Migration Run resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_run

try {
    $result = $apiInstance->getSwagMigrationRun($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationRunApi->getSwagMigrationRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_run |

### Return type

[**\Swagger\Client\Model\InlineResponse200464**](../Model/InlineResponse200464.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagMigrationRunList**
> \Swagger\Client\Model\InlineResponse200462 getSwagMigrationRunList($limit, $page, $query)

List with basic information of Swag Migration Run resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagMigrationRunList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationRunApi->getSwagMigrationRunList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200462**](../Model/InlineResponse200462.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagMigrationRun**
> \Swagger\Client\Model\InlineResponse200464 updateSwagMigrationRun($id, $body, $_response)

Partially update information about a Swag Migration Run resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_run
$body = new \Swagger\Client\Model\SwagmigrationrunIdBody(); // \Swagger\Client\Model\SwagmigrationrunIdBody | Partially update information about a Swag Migration Run resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagMigrationRun($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationRunApi->updateSwagMigrationRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_run |
 **body** | [**\Swagger\Client\Model\SwagmigrationrunIdBody**](../Model/SwagmigrationrunIdBody.md)| Partially update information about a Swag Migration Run resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200464**](../Model/InlineResponse200464.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagMigrationRun**
> \Swagger\Client\Model\InlineResponse200464 updateSwagMigrationRun($id, $body, $_response)

Partially update information about a Swag Migration Run resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagMigrationRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_migration_run
$body = new \Swagger\Client\Model\SwagmigrationrunIdBody(); // \Swagger\Client\Model\SwagmigrationrunIdBody | Partially update information about a Swag Migration Run resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagMigrationRun($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagMigrationRunApi->updateSwagMigrationRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_migration_run |
 **body** | [**\Swagger\Client\Model\SwagmigrationrunIdBody**](../Model/SwagmigrationrunIdBody.md)| Partially update information about a Swag Migration Run resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200464**](../Model/InlineResponse200464.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

