# Swagger\Client\DreiscSeoSettingApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDreiscSeoSetting**](DreiscSeoSettingApi.md#createdreiscseosetting) | **POST** /dreisc-seo-setting | Create a new Dreisc Seo Setting resources
[**deleteDreiscSeoSetting**](DreiscSeoSettingApi.md#deletedreiscseosetting) | **DELETE** /dreisc-seo-setting/{id} | Delete a Dreisc Seo Setting resource
[**getDreiscSeoSetting**](DreiscSeoSettingApi.md#getdreiscseosetting) | **GET** /dreisc-seo-setting/{id} | Detailed information about a Dreisc Seo Setting resource
[**getDreiscSeoSettingList**](DreiscSeoSettingApi.md#getdreiscseosettinglist) | **GET** /dreisc-seo-setting | List with basic information of Dreisc Seo Setting resources
[**updateDreiscSeoSetting**](DreiscSeoSettingApi.md#updatedreiscseosetting) | **PATCH** /dreisc-seo-setting/{id} | Partially update information about a Dreisc Seo Setting resource

# **createDreiscSeoSetting**
> \Swagger\Client\Model\InlineResponse200152 createDreiscSeoSetting($body, $_response)

Create a new Dreisc Seo Setting resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DreiscseosettingBody(); // \Swagger\Client\Model\DreiscseosettingBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDreiscSeoSetting($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoSettingApi->createDreiscSeoSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DreiscseosettingBody**](../Model/DreiscseosettingBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200152**](../Model/InlineResponse200152.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDreiscSeoSetting**
> \Swagger\Client\Model\InlineResponse200152 createDreiscSeoSetting($body, $_response)

Create a new Dreisc Seo Setting resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DreiscseosettingBody(); // \Swagger\Client\Model\DreiscseosettingBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDreiscSeoSetting($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoSettingApi->createDreiscSeoSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DreiscseosettingBody**](../Model/DreiscseosettingBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200152**](../Model/InlineResponse200152.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDreiscSeoSetting**
> deleteDreiscSeoSetting($id, $_response)

Delete a Dreisc Seo Setting resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_setting
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteDreiscSeoSetting($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoSettingApi->deleteDreiscSeoSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_setting |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDreiscSeoSetting**
> \Swagger\Client\Model\InlineResponse200152 getDreiscSeoSetting($id)

Detailed information about a Dreisc Seo Setting resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_setting

try {
    $result = $apiInstance->getDreiscSeoSetting($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoSettingApi->getDreiscSeoSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_setting |

### Return type

[**\Swagger\Client\Model\InlineResponse200152**](../Model/InlineResponse200152.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDreiscSeoSettingList**
> \Swagger\Client\Model\InlineResponse200150 getDreiscSeoSettingList($limit, $page, $query)

List with basic information of Dreisc Seo Setting resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getDreiscSeoSettingList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoSettingApi->getDreiscSeoSettingList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200150**](../Model/InlineResponse200150.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDreiscSeoSetting**
> \Swagger\Client\Model\InlineResponse200152 updateDreiscSeoSetting($id, $body, $_response)

Partially update information about a Dreisc Seo Setting resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_setting
$body = new \Swagger\Client\Model\DreiscseosettingIdBody(); // \Swagger\Client\Model\DreiscseosettingIdBody | Partially update information about a Dreisc Seo Setting resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDreiscSeoSetting($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoSettingApi->updateDreiscSeoSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_setting |
 **body** | [**\Swagger\Client\Model\DreiscseosettingIdBody**](../Model/DreiscseosettingIdBody.md)| Partially update information about a Dreisc Seo Setting resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200152**](../Model/InlineResponse200152.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDreiscSeoSetting**
> \Swagger\Client\Model\InlineResponse200152 updateDreiscSeoSetting($id, $body, $_response)

Partially update information about a Dreisc Seo Setting resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DreiscSeoSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the dreisc_seo_setting
$body = new \Swagger\Client\Model\DreiscseosettingIdBody(); // \Swagger\Client\Model\DreiscseosettingIdBody | Partially update information about a Dreisc Seo Setting resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDreiscSeoSetting($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DreiscSeoSettingApi->updateDreiscSeoSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the dreisc_seo_setting |
 **body** | [**\Swagger\Client\Model\DreiscseosettingIdBody**](../Model/DreiscseosettingIdBody.md)| Partially update information about a Dreisc Seo Setting resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200152**](../Model/InlineResponse200152.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

