# Swagger\Client\BfMarketplaceSettingsApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBfMarketplaceSettings**](BfMarketplaceSettingsApi.md#createbfmarketplacesettings) | **POST** /bf-marketplace-settings | Create a new Bf Marketplace Settings resources
[**deleteBfMarketplaceSettings**](BfMarketplaceSettingsApi.md#deletebfmarketplacesettings) | **DELETE** /bf-marketplace-settings/{id} | Delete a Bf Marketplace Settings resource
[**getBfMarketplaceSettings**](BfMarketplaceSettingsApi.md#getbfmarketplacesettings) | **GET** /bf-marketplace-settings/{id} | Detailed information about a Bf Marketplace Settings resource
[**getBfMarketplaceSettingsList**](BfMarketplaceSettingsApi.md#getbfmarketplacesettingslist) | **GET** /bf-marketplace-settings | List with basic information of Bf Marketplace Settings resources
[**updateBfMarketplaceSettings**](BfMarketplaceSettingsApi.md#updatebfmarketplacesettings) | **PATCH** /bf-marketplace-settings/{id} | Partially update information about a Bf Marketplace Settings resource

# **createBfMarketplaceSettings**
> \Swagger\Client\Model\InlineResponse20047 createBfMarketplaceSettings($body, $_response)

Create a new Bf Marketplace Settings resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BfMarketplaceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BfmarketplacesettingsBody(); // \Swagger\Client\Model\BfmarketplacesettingsBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createBfMarketplaceSettings($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BfMarketplaceSettingsApi->createBfMarketplaceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BfmarketplacesettingsBody**](../Model/BfmarketplacesettingsBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBfMarketplaceSettings**
> \Swagger\Client\Model\InlineResponse20047 createBfMarketplaceSettings($body, $_response)

Create a new Bf Marketplace Settings resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BfMarketplaceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BfmarketplacesettingsBody(); // \Swagger\Client\Model\BfmarketplacesettingsBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createBfMarketplaceSettings($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BfMarketplaceSettingsApi->createBfMarketplaceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BfmarketplacesettingsBody**](../Model/BfmarketplacesettingsBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBfMarketplaceSettings**
> deleteBfMarketplaceSettings($id, $_response)

Delete a Bf Marketplace Settings resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BfMarketplaceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the bf_marketplace_settings
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteBfMarketplaceSettings($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling BfMarketplaceSettingsApi->deleteBfMarketplaceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the bf_marketplace_settings |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBfMarketplaceSettings**
> \Swagger\Client\Model\InlineResponse20047 getBfMarketplaceSettings($id)

Detailed information about a Bf Marketplace Settings resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BfMarketplaceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the bf_marketplace_settings

try {
    $result = $apiInstance->getBfMarketplaceSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BfMarketplaceSettingsApi->getBfMarketplaceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the bf_marketplace_settings |

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBfMarketplaceSettingsList**
> \Swagger\Client\Model\InlineResponse20045 getBfMarketplaceSettingsList($limit, $page, $query)

List with basic information of Bf Marketplace Settings resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BfMarketplaceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getBfMarketplaceSettingsList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BfMarketplaceSettingsApi->getBfMarketplaceSettingsList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBfMarketplaceSettings**
> \Swagger\Client\Model\InlineResponse20047 updateBfMarketplaceSettings($id, $body, $_response)

Partially update information about a Bf Marketplace Settings resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BfMarketplaceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the bf_marketplace_settings
$body = new \Swagger\Client\Model\BfmarketplacesettingsIdBody(); // \Swagger\Client\Model\BfmarketplacesettingsIdBody | Partially update information about a Bf Marketplace Settings resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateBfMarketplaceSettings($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BfMarketplaceSettingsApi->updateBfMarketplaceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the bf_marketplace_settings |
 **body** | [**\Swagger\Client\Model\BfmarketplacesettingsIdBody**](../Model/BfmarketplacesettingsIdBody.md)| Partially update information about a Bf Marketplace Settings resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBfMarketplaceSettings**
> \Swagger\Client\Model\InlineResponse20047 updateBfMarketplaceSettings($id, $body, $_response)

Partially update information about a Bf Marketplace Settings resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BfMarketplaceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the bf_marketplace_settings
$body = new \Swagger\Client\Model\BfmarketplacesettingsIdBody(); // \Swagger\Client\Model\BfmarketplacesettingsIdBody | Partially update information about a Bf Marketplace Settings resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateBfMarketplaceSettings($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BfMarketplaceSettingsApi->updateBfMarketplaceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the bf_marketplace_settings |
 **body** | [**\Swagger\Client\Model\BfmarketplacesettingsIdBody**](../Model/BfmarketplacesettingsIdBody.md)| Partially update information about a Bf Marketplace Settings resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

