# Swagger\Client\LenzPlatformClpApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLenzPlatformClp**](LenzPlatformClpApi.md#createlenzplatformclp) | **POST** /lenz-platform-clp | Create a new Lenz Platform Clp resources
[**deleteLenzPlatformClp**](LenzPlatformClpApi.md#deletelenzplatformclp) | **DELETE** /lenz-platform-clp/{id} | Delete a Lenz Platform Clp resource
[**getLenzPlatformClp**](LenzPlatformClpApi.md#getlenzplatformclp) | **GET** /lenz-platform-clp/{id} | Detailed information about a Lenz Platform Clp resource
[**getLenzPlatformClpList**](LenzPlatformClpApi.md#getlenzplatformclplist) | **GET** /lenz-platform-clp | List with basic information of Lenz Platform Clp resources
[**updateLenzPlatformClp**](LenzPlatformClpApi.md#updatelenzplatformclp) | **PATCH** /lenz-platform-clp/{id} | Partially update information about a Lenz Platform Clp resource

# **createLenzPlatformClp**
> \Swagger\Client\Model\InlineResponse200182 createLenzPlatformClp($body, $_response)

Create a new Lenz Platform Clp resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LenzPlatformClpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LenzplatformclpBody(); // \Swagger\Client\Model\LenzplatformclpBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createLenzPlatformClp($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LenzPlatformClpApi->createLenzPlatformClp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LenzplatformclpBody**](../Model/LenzplatformclpBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200182**](../Model/InlineResponse200182.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLenzPlatformClp**
> \Swagger\Client\Model\InlineResponse200182 createLenzPlatformClp($body, $_response)

Create a new Lenz Platform Clp resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LenzPlatformClpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LenzplatformclpBody(); // \Swagger\Client\Model\LenzplatformclpBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createLenzPlatformClp($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LenzPlatformClpApi->createLenzPlatformClp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LenzplatformclpBody**](../Model/LenzplatformclpBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200182**](../Model/InlineResponse200182.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLenzPlatformClp**
> deleteLenzPlatformClp($id, $_response)

Delete a Lenz Platform Clp resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LenzPlatformClpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the lenz_platform_clp
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteLenzPlatformClp($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling LenzPlatformClpApi->deleteLenzPlatformClp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the lenz_platform_clp |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLenzPlatformClp**
> \Swagger\Client\Model\InlineResponse200182 getLenzPlatformClp($id)

Detailed information about a Lenz Platform Clp resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LenzPlatformClpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the lenz_platform_clp

try {
    $result = $apiInstance->getLenzPlatformClp($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LenzPlatformClpApi->getLenzPlatformClp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the lenz_platform_clp |

### Return type

[**\Swagger\Client\Model\InlineResponse200182**](../Model/InlineResponse200182.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLenzPlatformClpList**
> \Swagger\Client\Model\InlineResponse200180 getLenzPlatformClpList($limit, $page, $query)

List with basic information of Lenz Platform Clp resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LenzPlatformClpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getLenzPlatformClpList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LenzPlatformClpApi->getLenzPlatformClpList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200180**](../Model/InlineResponse200180.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLenzPlatformClp**
> \Swagger\Client\Model\InlineResponse200182 updateLenzPlatformClp($id, $body, $_response)

Partially update information about a Lenz Platform Clp resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LenzPlatformClpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the lenz_platform_clp
$body = new \Swagger\Client\Model\LenzplatformclpIdBody(); // \Swagger\Client\Model\LenzplatformclpIdBody | Partially update information about a Lenz Platform Clp resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateLenzPlatformClp($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LenzPlatformClpApi->updateLenzPlatformClp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the lenz_platform_clp |
 **body** | [**\Swagger\Client\Model\LenzplatformclpIdBody**](../Model/LenzplatformclpIdBody.md)| Partially update information about a Lenz Platform Clp resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200182**](../Model/InlineResponse200182.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLenzPlatformClp**
> \Swagger\Client\Model\InlineResponse200182 updateLenzPlatformClp($id, $body, $_response)

Partially update information about a Lenz Platform Clp resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LenzPlatformClpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the lenz_platform_clp
$body = new \Swagger\Client\Model\LenzplatformclpIdBody(); // \Swagger\Client\Model\LenzplatformclpIdBody | Partially update information about a Lenz Platform Clp resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateLenzPlatformClp($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LenzPlatformClpApi->updateLenzPlatformClp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the lenz_platform_clp |
 **body** | [**\Swagger\Client\Model\LenzplatformclpIdBody**](../Model/LenzplatformclpIdBody.md)| Partially update information about a Lenz Platform Clp resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200182**](../Model/InlineResponse200182.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

