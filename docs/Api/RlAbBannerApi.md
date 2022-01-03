# Swagger\Client\RlAbBannerApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRlAbBanner**](RlAbBannerApi.md#createrlabbanner) | **POST** /rl-ab-banner | Create a new Rl Ab Banner resources
[**deleteRlAbBanner**](RlAbBannerApi.md#deleterlabbanner) | **DELETE** /rl-ab-banner/{id} | Delete a Rl Ab Banner resource
[**getRlAbBanner**](RlAbBannerApi.md#getrlabbanner) | **GET** /rl-ab-banner/{id} | Detailed information about a Rl Ab Banner resource
[**getRlAbBannerList**](RlAbBannerApi.md#getrlabbannerlist) | **GET** /rl-ab-banner | List with basic information of Rl Ab Banner resources
[**updateRlAbBanner**](RlAbBannerApi.md#updaterlabbanner) | **PATCH** /rl-ab-banner/{id} | Partially update information about a Rl Ab Banner resource

# **createRlAbBanner**
> \Swagger\Client\Model\InlineResponse200344 createRlAbBanner($body, $_response)

Create a new Rl Ab Banner resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RlAbBannerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RlabbannerBody(); // \Swagger\Client\Model\RlabbannerBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createRlAbBanner($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RlAbBannerApi->createRlAbBanner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RlabbannerBody**](../Model/RlabbannerBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200344**](../Model/InlineResponse200344.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRlAbBanner**
> \Swagger\Client\Model\InlineResponse200344 createRlAbBanner($body, $_response)

Create a new Rl Ab Banner resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RlAbBannerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RlabbannerBody(); // \Swagger\Client\Model\RlabbannerBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createRlAbBanner($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RlAbBannerApi->createRlAbBanner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RlabbannerBody**](../Model/RlabbannerBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200344**](../Model/InlineResponse200344.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRlAbBanner**
> deleteRlAbBanner($id, $_response)

Delete a Rl Ab Banner resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RlAbBannerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the rl_ab_banner
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteRlAbBanner($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling RlAbBannerApi->deleteRlAbBanner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the rl_ab_banner |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRlAbBanner**
> \Swagger\Client\Model\InlineResponse200344 getRlAbBanner($id)

Detailed information about a Rl Ab Banner resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RlAbBannerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the rl_ab_banner

try {
    $result = $apiInstance->getRlAbBanner($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RlAbBannerApi->getRlAbBanner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the rl_ab_banner |

### Return type

[**\Swagger\Client\Model\InlineResponse200344**](../Model/InlineResponse200344.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRlAbBannerList**
> \Swagger\Client\Model\InlineResponse200342 getRlAbBannerList($limit, $page, $query)

List with basic information of Rl Ab Banner resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RlAbBannerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getRlAbBannerList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RlAbBannerApi->getRlAbBannerList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200342**](../Model/InlineResponse200342.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRlAbBanner**
> \Swagger\Client\Model\InlineResponse200344 updateRlAbBanner($id, $body, $_response)

Partially update information about a Rl Ab Banner resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RlAbBannerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the rl_ab_banner
$body = new \Swagger\Client\Model\RlabbannerIdBody(); // \Swagger\Client\Model\RlabbannerIdBody | Partially update information about a Rl Ab Banner resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateRlAbBanner($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RlAbBannerApi->updateRlAbBanner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the rl_ab_banner |
 **body** | [**\Swagger\Client\Model\RlabbannerIdBody**](../Model/RlabbannerIdBody.md)| Partially update information about a Rl Ab Banner resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200344**](../Model/InlineResponse200344.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRlAbBanner**
> \Swagger\Client\Model\InlineResponse200344 updateRlAbBanner($id, $body, $_response)

Partially update information about a Rl Ab Banner resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RlAbBannerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the rl_ab_banner
$body = new \Swagger\Client\Model\RlabbannerIdBody(); // \Swagger\Client\Model\RlabbannerIdBody | Partially update information about a Rl Ab Banner resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateRlAbBanner($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RlAbBannerApi->updateRlAbBanner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the rl_ab_banner |
 **body** | [**\Swagger\Client\Model\RlabbannerIdBody**](../Model/RlabbannerIdBody.md)| Partially update information about a Rl Ab Banner resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200344**](../Model/InlineResponse200344.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

