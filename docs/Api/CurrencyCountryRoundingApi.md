# Swagger\Client\CurrencyCountryRoundingApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCurrencyCountryRounding**](CurrencyCountryRoundingApi.md#createcurrencycountryrounding) | **POST** /currency-country-rounding | Create a new Currency Country Rounding resources
[**deleteCurrencyCountryRounding**](CurrencyCountryRoundingApi.md#deletecurrencycountryrounding) | **DELETE** /currency-country-rounding/{id} | Delete a Currency Country Rounding resource
[**getCurrencyCountryRounding**](CurrencyCountryRoundingApi.md#getcurrencycountryrounding) | **GET** /currency-country-rounding/{id} | Detailed information about a Currency Country Rounding resource
[**getCurrencyCountryRoundingList**](CurrencyCountryRoundingApi.md#getcurrencycountryroundinglist) | **GET** /currency-country-rounding | List with basic information of Currency Country Rounding resources
[**updateCurrencyCountryRounding**](CurrencyCountryRoundingApi.md#updatecurrencycountryrounding) | **PATCH** /currency-country-rounding/{id} | Partially update information about a Currency Country Rounding resource

# **createCurrencyCountryRounding**
> \Swagger\Client\Model\InlineResponse20086 createCurrencyCountryRounding($body, $_response)

Create a new Currency Country Rounding resources

Available since: 6.4.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CurrencyCountryRoundingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CurrencycountryroundingBody(); // \Swagger\Client\Model\CurrencycountryroundingBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createCurrencyCountryRounding($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyCountryRoundingApi->createCurrencyCountryRounding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CurrencycountryroundingBody**](../Model/CurrencycountryroundingBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20086**](../Model/InlineResponse20086.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCurrencyCountryRounding**
> \Swagger\Client\Model\InlineResponse20086 createCurrencyCountryRounding($body, $_response)

Create a new Currency Country Rounding resources

Available since: 6.4.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CurrencyCountryRoundingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CurrencycountryroundingBody(); // \Swagger\Client\Model\CurrencycountryroundingBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createCurrencyCountryRounding($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyCountryRoundingApi->createCurrencyCountryRounding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CurrencycountryroundingBody**](../Model/CurrencycountryroundingBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20086**](../Model/InlineResponse20086.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCurrencyCountryRounding**
> deleteCurrencyCountryRounding($id, $_response)

Delete a Currency Country Rounding resource

Available since: 6.4.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CurrencyCountryRoundingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the currency_country_rounding
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteCurrencyCountryRounding($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyCountryRoundingApi->deleteCurrencyCountryRounding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the currency_country_rounding |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrencyCountryRounding**
> \Swagger\Client\Model\InlineResponse20086 getCurrencyCountryRounding($id)

Detailed information about a Currency Country Rounding resource

Available since: 6.4.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CurrencyCountryRoundingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the currency_country_rounding

try {
    $result = $apiInstance->getCurrencyCountryRounding($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyCountryRoundingApi->getCurrencyCountryRounding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the currency_country_rounding |

### Return type

[**\Swagger\Client\Model\InlineResponse20086**](../Model/InlineResponse20086.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrencyCountryRoundingList**
> \Swagger\Client\Model\InlineResponse20084 getCurrencyCountryRoundingList($limit, $page, $query)

List with basic information of Currency Country Rounding resources

Available since: 6.4.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CurrencyCountryRoundingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getCurrencyCountryRoundingList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyCountryRoundingApi->getCurrencyCountryRoundingList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20084**](../Model/InlineResponse20084.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCurrencyCountryRounding**
> \Swagger\Client\Model\InlineResponse20086 updateCurrencyCountryRounding($id, $body, $_response)

Partially update information about a Currency Country Rounding resource

Available since: 6.4.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CurrencyCountryRoundingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the currency_country_rounding
$body = new \Swagger\Client\Model\CurrencycountryroundingIdBody(); // \Swagger\Client\Model\CurrencycountryroundingIdBody | Partially update information about a Currency Country Rounding resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateCurrencyCountryRounding($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyCountryRoundingApi->updateCurrencyCountryRounding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the currency_country_rounding |
 **body** | [**\Swagger\Client\Model\CurrencycountryroundingIdBody**](../Model/CurrencycountryroundingIdBody.md)| Partially update information about a Currency Country Rounding resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20086**](../Model/InlineResponse20086.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCurrencyCountryRounding**
> \Swagger\Client\Model\InlineResponse20086 updateCurrencyCountryRounding($id, $body, $_response)

Partially update information about a Currency Country Rounding resource

Available since: 6.4.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CurrencyCountryRoundingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the currency_country_rounding
$body = new \Swagger\Client\Model\CurrencycountryroundingIdBody(); // \Swagger\Client\Model\CurrencycountryroundingIdBody | Partially update information about a Currency Country Rounding resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateCurrencyCountryRounding($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyCountryRoundingApi->updateCurrencyCountryRounding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the currency_country_rounding |
 **body** | [**\Swagger\Client\Model\CurrencycountryroundingIdBody**](../Model/CurrencycountryroundingIdBody.md)| Partially update information about a Currency Country Rounding resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20086**](../Model/InlineResponse20086.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

