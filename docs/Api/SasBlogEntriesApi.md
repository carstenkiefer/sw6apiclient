# Swagger\Client\SasBlogEntriesApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSasBlogEntries**](SasBlogEntriesApi.md#createsasblogentries) | **POST** /sas-blog-entries | Create a new Sas Blog Entries resources
[**deleteSasBlogEntries**](SasBlogEntriesApi.md#deletesasblogentries) | **DELETE** /sas-blog-entries/{id} | Delete a Sas Blog Entries resource
[**getSasBlogEntries**](SasBlogEntriesApi.md#getsasblogentries) | **GET** /sas-blog-entries/{id} | Detailed information about a Sas Blog Entries resource
[**getSasBlogEntriesList**](SasBlogEntriesApi.md#getsasblogentrieslist) | **GET** /sas-blog-entries | List with basic information of Sas Blog Entries resources
[**updateSasBlogEntries**](SasBlogEntriesApi.md#updatesasblogentries) | **PATCH** /sas-blog-entries/{id} | Partially update information about a Sas Blog Entries resource

# **createSasBlogEntries**
> \Swagger\Client\Model\InlineResponse200377 createSasBlogEntries($body, $_response)

Create a new Sas Blog Entries resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SasBlogEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SasblogentriesBody(); // \Swagger\Client\Model\SasblogentriesBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSasBlogEntries($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SasBlogEntriesApi->createSasBlogEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SasblogentriesBody**](../Model/SasblogentriesBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200377**](../Model/InlineResponse200377.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSasBlogEntries**
> \Swagger\Client\Model\InlineResponse200377 createSasBlogEntries($body, $_response)

Create a new Sas Blog Entries resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SasBlogEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SasblogentriesBody(); // \Swagger\Client\Model\SasblogentriesBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSasBlogEntries($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SasBlogEntriesApi->createSasBlogEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SasblogentriesBody**](../Model/SasblogentriesBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200377**](../Model/InlineResponse200377.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSasBlogEntries**
> deleteSasBlogEntries($id, $_response)

Delete a Sas Blog Entries resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SasBlogEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the sas_blog_entries
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSasBlogEntries($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SasBlogEntriesApi->deleteSasBlogEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the sas_blog_entries |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSasBlogEntries**
> \Swagger\Client\Model\InlineResponse200377 getSasBlogEntries($id)

Detailed information about a Sas Blog Entries resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SasBlogEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the sas_blog_entries

try {
    $result = $apiInstance->getSasBlogEntries($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SasBlogEntriesApi->getSasBlogEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the sas_blog_entries |

### Return type

[**\Swagger\Client\Model\InlineResponse200377**](../Model/InlineResponse200377.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSasBlogEntriesList**
> \Swagger\Client\Model\InlineResponse200375 getSasBlogEntriesList($limit, $page, $query)

List with basic information of Sas Blog Entries resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SasBlogEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSasBlogEntriesList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SasBlogEntriesApi->getSasBlogEntriesList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200375**](../Model/InlineResponse200375.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSasBlogEntries**
> \Swagger\Client\Model\InlineResponse200377 updateSasBlogEntries($id, $body, $_response)

Partially update information about a Sas Blog Entries resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SasBlogEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the sas_blog_entries
$body = new \Swagger\Client\Model\SasblogentriesIdBody(); // \Swagger\Client\Model\SasblogentriesIdBody | Partially update information about a Sas Blog Entries resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSasBlogEntries($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SasBlogEntriesApi->updateSasBlogEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the sas_blog_entries |
 **body** | [**\Swagger\Client\Model\SasblogentriesIdBody**](../Model/SasblogentriesIdBody.md)| Partially update information about a Sas Blog Entries resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200377**](../Model/InlineResponse200377.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSasBlogEntries**
> \Swagger\Client\Model\InlineResponse200377 updateSasBlogEntries($id, $body, $_response)

Partially update information about a Sas Blog Entries resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SasBlogEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the sas_blog_entries
$body = new \Swagger\Client\Model\SasblogentriesIdBody(); // \Swagger\Client\Model\SasblogentriesIdBody | Partially update information about a Sas Blog Entries resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSasBlogEntries($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SasBlogEntriesApi->updateSasBlogEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the sas_blog_entries |
 **body** | [**\Swagger\Client\Model\SasblogentriesIdBody**](../Model/SasblogentriesIdBody.md)| Partially update information about a Sas Blog Entries resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200377**](../Model/InlineResponse200377.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

