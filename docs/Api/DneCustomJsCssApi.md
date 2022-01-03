# Swagger\Client\DneCustomJsCssApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDneCustomJsCss**](DneCustomJsCssApi.md#creatednecustomjscss) | **POST** /dne-custom-js-css | Create a new Dne Custom Js Css resources
[**deleteDneCustomJsCss**](DneCustomJsCssApi.md#deletednecustomjscss) | **DELETE** /dne-custom-js-css/{id} | Delete a Dne Custom Js Css resource
[**getDneCustomJsCss**](DneCustomJsCssApi.md#getdnecustomjscss) | **GET** /dne-custom-js-css/{id} | Detailed information about a Dne Custom Js Css resource
[**getDneCustomJsCssList**](DneCustomJsCssApi.md#getdnecustomjscsslist) | **GET** /dne-custom-js-css | List with basic information of Dne Custom Js Css resources
[**updateDneCustomJsCss**](DneCustomJsCssApi.md#updatednecustomjscss) | **PATCH** /dne-custom-js-css/{id} | Partially update information about a Dne Custom Js Css resource

# **createDneCustomJsCss**
> \Swagger\Client\Model\InlineResponse200122 createDneCustomJsCss($body, $_response)

Create a new Dne Custom Js Css resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DneCustomJsCssApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DnecustomjscssBody(); // \Swagger\Client\Model\DnecustomjscssBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDneCustomJsCss($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DneCustomJsCssApi->createDneCustomJsCss: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DnecustomjscssBody**](../Model/DnecustomjscssBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200122**](../Model/InlineResponse200122.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDneCustomJsCss**
> \Swagger\Client\Model\InlineResponse200122 createDneCustomJsCss($body, $_response)

Create a new Dne Custom Js Css resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DneCustomJsCssApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DnecustomjscssBody(); // \Swagger\Client\Model\DnecustomjscssBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDneCustomJsCss($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DneCustomJsCssApi->createDneCustomJsCss: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DnecustomjscssBody**](../Model/DnecustomjscssBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200122**](../Model/InlineResponse200122.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDneCustomJsCss**
> deleteDneCustomJsCss($id, $_response)

Delete a Dne Custom Js Css resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DneCustomJsCssApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dne_custom_js_css
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteDneCustomJsCss($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling DneCustomJsCssApi->deleteDneCustomJsCss: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dne_custom_js_css |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDneCustomJsCss**
> \Swagger\Client\Model\InlineResponse200122 getDneCustomJsCss($id)

Detailed information about a Dne Custom Js Css resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DneCustomJsCssApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dne_custom_js_css

try {
    $result = $apiInstance->getDneCustomJsCss($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DneCustomJsCssApi->getDneCustomJsCss: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dne_custom_js_css |

### Return type

[**\Swagger\Client\Model\InlineResponse200122**](../Model/InlineResponse200122.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDneCustomJsCssList**
> \Swagger\Client\Model\InlineResponse200120 getDneCustomJsCssList($limit, $page, $query)

List with basic information of Dne Custom Js Css resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DneCustomJsCssApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getDneCustomJsCssList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DneCustomJsCssApi->getDneCustomJsCssList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200120**](../Model/InlineResponse200120.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDneCustomJsCss**
> \Swagger\Client\Model\InlineResponse200122 updateDneCustomJsCss($id, $body, $_response)

Partially update information about a Dne Custom Js Css resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DneCustomJsCssApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dne_custom_js_css
$body = new \Swagger\Client\Model\DnecustomjscssIdBody(); // \Swagger\Client\Model\DnecustomjscssIdBody | Partially update information about a Dne Custom Js Css resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDneCustomJsCss($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DneCustomJsCssApi->updateDneCustomJsCss: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dne_custom_js_css |
 **body** | [**\Swagger\Client\Model\DnecustomjscssIdBody**](../Model/DnecustomjscssIdBody.md)| Partially update information about a Dne Custom Js Css resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200122**](../Model/InlineResponse200122.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDneCustomJsCss**
> \Swagger\Client\Model\InlineResponse200122 updateDneCustomJsCss($id, $body, $_response)

Partially update information about a Dne Custom Js Css resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DneCustomJsCssApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dne_custom_js_css
$body = new \Swagger\Client\Model\DnecustomjscssIdBody(); // \Swagger\Client\Model\DnecustomjscssIdBody | Partially update information about a Dne Custom Js Css resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDneCustomJsCss($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DneCustomJsCssApi->updateDneCustomJsCss: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dne_custom_js_css |
 **body** | [**\Swagger\Client\Model\DnecustomjscssIdBody**](../Model/DnecustomjscssIdBody.md)| Partially update information about a Dne Custom Js Css resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200122**](../Model/InlineResponse200122.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

