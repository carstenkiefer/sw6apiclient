# Swagger\Client\SwagAmazonPaySignupTokenApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagAmazonPaySignupToken**](SwagAmazonPaySignupTokenApi.md#createswagamazonpaysignuptoken) | **POST** /swag-amazon-pay-signup-token | Create a new Swag Amazon Pay Signup Token resources
[**deleteSwagAmazonPaySignupToken**](SwagAmazonPaySignupTokenApi.md#deleteswagamazonpaysignuptoken) | **DELETE** /swag-amazon-pay-signup-token/{id} | Delete a Swag Amazon Pay Signup Token resource
[**getSwagAmazonPaySignupToken**](SwagAmazonPaySignupTokenApi.md#getswagamazonpaysignuptoken) | **GET** /swag-amazon-pay-signup-token/{id} | Detailed information about a Swag Amazon Pay Signup Token resource
[**getSwagAmazonPaySignupTokenList**](SwagAmazonPaySignupTokenApi.md#getswagamazonpaysignuptokenlist) | **GET** /swag-amazon-pay-signup-token | List with basic information of Swag Amazon Pay Signup Token resources
[**updateSwagAmazonPaySignupToken**](SwagAmazonPaySignupTokenApi.md#updateswagamazonpaysignuptoken) | **PATCH** /swag-amazon-pay-signup-token/{id} | Partially update information about a Swag Amazon Pay Signup Token resource

# **createSwagAmazonPaySignupToken**
> \Swagger\Client\Model\InlineResponse200419 createSwagAmazonPaySignupToken($body, $_response)

Create a new Swag Amazon Pay Signup Token resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagAmazonPaySignupTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagamazonpaysignuptokenBody(); // \Swagger\Client\Model\SwagamazonpaysignuptokenBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagAmazonPaySignupToken($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagAmazonPaySignupTokenApi->createSwagAmazonPaySignupToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagamazonpaysignuptokenBody**](../Model/SwagamazonpaysignuptokenBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200419**](../Model/InlineResponse200419.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagAmazonPaySignupToken**
> \Swagger\Client\Model\InlineResponse200419 createSwagAmazonPaySignupToken($body, $_response)

Create a new Swag Amazon Pay Signup Token resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagAmazonPaySignupTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagamazonpaysignuptokenBody(); // \Swagger\Client\Model\SwagamazonpaysignuptokenBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagAmazonPaySignupToken($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagAmazonPaySignupTokenApi->createSwagAmazonPaySignupToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagamazonpaysignuptokenBody**](../Model/SwagamazonpaysignuptokenBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200419**](../Model/InlineResponse200419.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagAmazonPaySignupToken**
> deleteSwagAmazonPaySignupToken($id, $_response)

Delete a Swag Amazon Pay Signup Token resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagAmazonPaySignupTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_amazon_pay_signup_token
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagAmazonPaySignupToken($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagAmazonPaySignupTokenApi->deleteSwagAmazonPaySignupToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_amazon_pay_signup_token |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagAmazonPaySignupToken**
> \Swagger\Client\Model\InlineResponse200419 getSwagAmazonPaySignupToken($id)

Detailed information about a Swag Amazon Pay Signup Token resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagAmazonPaySignupTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_amazon_pay_signup_token

try {
    $result = $apiInstance->getSwagAmazonPaySignupToken($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagAmazonPaySignupTokenApi->getSwagAmazonPaySignupToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_amazon_pay_signup_token |

### Return type

[**\Swagger\Client\Model\InlineResponse200419**](../Model/InlineResponse200419.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagAmazonPaySignupTokenList**
> \Swagger\Client\Model\InlineResponse200417 getSwagAmazonPaySignupTokenList($limit, $page, $query)

List with basic information of Swag Amazon Pay Signup Token resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagAmazonPaySignupTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagAmazonPaySignupTokenList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagAmazonPaySignupTokenApi->getSwagAmazonPaySignupTokenList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200417**](../Model/InlineResponse200417.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagAmazonPaySignupToken**
> \Swagger\Client\Model\InlineResponse200419 updateSwagAmazonPaySignupToken($id, $body, $_response)

Partially update information about a Swag Amazon Pay Signup Token resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagAmazonPaySignupTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_amazon_pay_signup_token
$body = new \Swagger\Client\Model\SwagamazonpaysignuptokenIdBody(); // \Swagger\Client\Model\SwagamazonpaysignuptokenIdBody | Partially update information about a Swag Amazon Pay Signup Token resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagAmazonPaySignupToken($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagAmazonPaySignupTokenApi->updateSwagAmazonPaySignupToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_amazon_pay_signup_token |
 **body** | [**\Swagger\Client\Model\SwagamazonpaysignuptokenIdBody**](../Model/SwagamazonpaysignuptokenIdBody.md)| Partially update information about a Swag Amazon Pay Signup Token resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200419**](../Model/InlineResponse200419.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagAmazonPaySignupToken**
> \Swagger\Client\Model\InlineResponse200419 updateSwagAmazonPaySignupToken($id, $body, $_response)

Partially update information about a Swag Amazon Pay Signup Token resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagAmazonPaySignupTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_amazon_pay_signup_token
$body = new \Swagger\Client\Model\SwagamazonpaysignuptokenIdBody(); // \Swagger\Client\Model\SwagamazonpaysignuptokenIdBody | Partially update information about a Swag Amazon Pay Signup Token resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagAmazonPaySignupToken($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagAmazonPaySignupTokenApi->updateSwagAmazonPaySignupToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_amazon_pay_signup_token |
 **body** | [**\Swagger\Client\Model\SwagamazonpaysignuptokenIdBody**](../Model/SwagamazonpaysignuptokenIdBody.md)| Partially update information about a Swag Amazon Pay Signup Token resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200419**](../Model/InlineResponse200419.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

