# Swagger\Client\SwagLanguagePackLanguageApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagLanguagePackLanguage**](SwagLanguagePackLanguageApi.md#createswaglanguagepacklanguage) | **POST** /swag-language-pack-language | Create a new Swag Language Pack Language resources
[**deleteSwagLanguagePackLanguage**](SwagLanguagePackLanguageApi.md#deleteswaglanguagepacklanguage) | **DELETE** /swag-language-pack-language/{id} | Delete a Swag Language Pack Language resource
[**getSwagLanguagePackLanguage**](SwagLanguagePackLanguageApi.md#getswaglanguagepacklanguage) | **GET** /swag-language-pack-language/{id} | Detailed information about a Swag Language Pack Language resource
[**getSwagLanguagePackLanguageList**](SwagLanguagePackLanguageApi.md#getswaglanguagepacklanguagelist) | **GET** /swag-language-pack-language | List with basic information of Swag Language Pack Language resources
[**updateSwagLanguagePackLanguage**](SwagLanguagePackLanguageApi.md#updateswaglanguagepacklanguage) | **PATCH** /swag-language-pack-language/{id} | Partially update information about a Swag Language Pack Language resource

# **createSwagLanguagePackLanguage**
> \Swagger\Client\Model\InlineResponse200443 createSwagLanguagePackLanguage($body, $_response)

Create a new Swag Language Pack Language resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagLanguagePackLanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwaglanguagepacklanguageBody(); // \Swagger\Client\Model\SwaglanguagepacklanguageBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagLanguagePackLanguage($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagLanguagePackLanguageApi->createSwagLanguagePackLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwaglanguagepacklanguageBody**](../Model/SwaglanguagepacklanguageBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200443**](../Model/InlineResponse200443.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagLanguagePackLanguage**
> \Swagger\Client\Model\InlineResponse200443 createSwagLanguagePackLanguage($body, $_response)

Create a new Swag Language Pack Language resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagLanguagePackLanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwaglanguagepacklanguageBody(); // \Swagger\Client\Model\SwaglanguagepacklanguageBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagLanguagePackLanguage($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagLanguagePackLanguageApi->createSwagLanguagePackLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwaglanguagepacklanguageBody**](../Model/SwaglanguagepacklanguageBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200443**](../Model/InlineResponse200443.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagLanguagePackLanguage**
> deleteSwagLanguagePackLanguage($id, $_response)

Delete a Swag Language Pack Language resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagLanguagePackLanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_language_pack_language
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagLanguagePackLanguage($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagLanguagePackLanguageApi->deleteSwagLanguagePackLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_language_pack_language |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagLanguagePackLanguage**
> \Swagger\Client\Model\InlineResponse200443 getSwagLanguagePackLanguage($id)

Detailed information about a Swag Language Pack Language resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagLanguagePackLanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_language_pack_language

try {
    $result = $apiInstance->getSwagLanguagePackLanguage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagLanguagePackLanguageApi->getSwagLanguagePackLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_language_pack_language |

### Return type

[**\Swagger\Client\Model\InlineResponse200443**](../Model/InlineResponse200443.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagLanguagePackLanguageList**
> \Swagger\Client\Model\InlineResponse200441 getSwagLanguagePackLanguageList($limit, $page, $query)

List with basic information of Swag Language Pack Language resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagLanguagePackLanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagLanguagePackLanguageList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagLanguagePackLanguageApi->getSwagLanguagePackLanguageList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200441**](../Model/InlineResponse200441.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagLanguagePackLanguage**
> \Swagger\Client\Model\InlineResponse200443 updateSwagLanguagePackLanguage($id, $body, $_response)

Partially update information about a Swag Language Pack Language resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagLanguagePackLanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_language_pack_language
$body = new \Swagger\Client\Model\SwaglanguagepacklanguageIdBody(); // \Swagger\Client\Model\SwaglanguagepacklanguageIdBody | Partially update information about a Swag Language Pack Language resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagLanguagePackLanguage($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagLanguagePackLanguageApi->updateSwagLanguagePackLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_language_pack_language |
 **body** | [**\Swagger\Client\Model\SwaglanguagepacklanguageIdBody**](../Model/SwaglanguagepacklanguageIdBody.md)| Partially update information about a Swag Language Pack Language resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200443**](../Model/InlineResponse200443.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagLanguagePackLanguage**
> \Swagger\Client\Model\InlineResponse200443 updateSwagLanguagePackLanguage($id, $body, $_response)

Partially update information about a Swag Language Pack Language resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagLanguagePackLanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_language_pack_language
$body = new \Swagger\Client\Model\SwaglanguagepacklanguageIdBody(); // \Swagger\Client\Model\SwaglanguagepacklanguageIdBody | Partially update information about a Swag Language Pack Language resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagLanguagePackLanguage($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagLanguagePackLanguageApi->updateSwagLanguagePackLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_language_pack_language |
 **body** | [**\Swagger\Client\Model\SwaglanguagepacklanguageIdBody**](../Model/SwaglanguagepacklanguageIdBody.md)| Partially update information about a Swag Language Pack Language resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200443**](../Model/InlineResponse200443.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

