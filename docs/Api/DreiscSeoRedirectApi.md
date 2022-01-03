# Swagger\Client\DreiscSeoRedirectApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDreiscSeoRedirect**](DreiscSeoRedirectApi.md#createdreiscseoredirect) | **POST** /dreisc-seo-redirect | Create a new Dreisc Seo Redirect resources
[**deleteDreiscSeoRedirect**](DreiscSeoRedirectApi.md#deletedreiscseoredirect) | **DELETE** /dreisc-seo-redirect/{id} | Delete a Dreisc Seo Redirect resource
[**getDreiscSeoRedirect**](DreiscSeoRedirectApi.md#getdreiscseoredirect) | **GET** /dreisc-seo-redirect/{id} | Detailed information about a Dreisc Seo Redirect resource
[**getDreiscSeoRedirectList**](DreiscSeoRedirectApi.md#getdreiscseoredirectlist) | **GET** /dreisc-seo-redirect | List with basic information of Dreisc Seo Redirect resources
[**updateDreiscSeoRedirect**](DreiscSeoRedirectApi.md#updatedreiscseoredirect) | **PATCH** /dreisc-seo-redirect/{id} | Partially update information about a Dreisc Seo Redirect resource

# **createDreiscSeoRedirect**
> \Swagger\Client\Model\InlineResponse200143 createDreiscSeoRedirect($body, $_response)

Create a new Dreisc Seo Redirect resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DreiscseoredirectBody(); // \Swagger\Client\Model\DreiscseoredirectBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDreiscSeoRedirect($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectApi->createDreiscSeoRedirect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DreiscseoredirectBody**](../Model/DreiscseoredirectBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200143**](../Model/InlineResponse200143.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDreiscSeoRedirect**
> \Swagger\Client\Model\InlineResponse200143 createDreiscSeoRedirect($body, $_response)

Create a new Dreisc Seo Redirect resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DreiscseoredirectBody(); // \Swagger\Client\Model\DreiscseoredirectBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDreiscSeoRedirect($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectApi->createDreiscSeoRedirect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DreiscseoredirectBody**](../Model/DreiscseoredirectBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200143**](../Model/InlineResponse200143.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDreiscSeoRedirect**
> deleteDreiscSeoRedirect($id, $_response)

Delete a Dreisc Seo Redirect resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_redirect
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteDreiscSeoRedirect($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectApi->deleteDreiscSeoRedirect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_redirect |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDreiscSeoRedirect**
> \Swagger\Client\Model\InlineResponse200143 getDreiscSeoRedirect($id)

Detailed information about a Dreisc Seo Redirect resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_redirect

try {
    $result = $apiInstance->getDreiscSeoRedirect($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectApi->getDreiscSeoRedirect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_redirect |

### Return type

[**\Swagger\Client\Model\InlineResponse200143**](../Model/InlineResponse200143.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDreiscSeoRedirectList**
> \Swagger\Client\Model\InlineResponse200141 getDreiscSeoRedirectList($limit, $page, $query)

List with basic information of Dreisc Seo Redirect resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getDreiscSeoRedirectList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectApi->getDreiscSeoRedirectList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200141**](../Model/InlineResponse200141.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDreiscSeoRedirect**
> \Swagger\Client\Model\InlineResponse200143 updateDreiscSeoRedirect($id, $body, $_response)

Partially update information about a Dreisc Seo Redirect resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_redirect
$body = new \Swagger\Client\Model\DreiscseoredirectIdBody(); // \Swagger\Client\Model\DreiscseoredirectIdBody | Partially update information about a Dreisc Seo Redirect resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDreiscSeoRedirect($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectApi->updateDreiscSeoRedirect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_redirect |
 **body** | [**\Swagger\Client\Model\DreiscseoredirectIdBody**](../Model/DreiscseoredirectIdBody.md)| Partially update information about a Dreisc Seo Redirect resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200143**](../Model/InlineResponse200143.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDreiscSeoRedirect**
> \Swagger\Client\Model\InlineResponse200143 updateDreiscSeoRedirect($id, $body, $_response)

Partially update information about a Dreisc Seo Redirect resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoRedirectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_redirect
$body = new \Swagger\Client\Model\DreiscseoredirectIdBody(); // \Swagger\Client\Model\DreiscseoredirectIdBody | Partially update information about a Dreisc Seo Redirect resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDreiscSeoRedirect($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoRedirectApi->updateDreiscSeoRedirect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_redirect |
 **body** | [**\Swagger\Client\Model\DreiscseoredirectIdBody**](../Model/DreiscseoredirectIdBody.md)| Partially update information about a Dreisc Seo Redirect resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200143**](../Model/InlineResponse200143.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

