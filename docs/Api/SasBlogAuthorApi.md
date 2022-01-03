# Swagger\Client\SasBlogAuthorApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSasBlogAuthor**](SasBlogAuthorApi.md#createsasblogauthor) | **POST** /sas-blog-author | Create a new Sas Blog Author resources
[**deleteSasBlogAuthor**](SasBlogAuthorApi.md#deletesasblogauthor) | **DELETE** /sas-blog-author/{id} | Delete a Sas Blog Author resource
[**getSasBlogAuthor**](SasBlogAuthorApi.md#getsasblogauthor) | **GET** /sas-blog-author/{id} | Detailed information about a Sas Blog Author resource
[**getSasBlogAuthorList**](SasBlogAuthorApi.md#getsasblogauthorlist) | **GET** /sas-blog-author | List with basic information of Sas Blog Author resources
[**updateSasBlogAuthor**](SasBlogAuthorApi.md#updatesasblogauthor) | **PATCH** /sas-blog-author/{id} | Partially update information about a Sas Blog Author resource

# **createSasBlogAuthor**
> \Swagger\Client\Model\InlineResponse200371 createSasBlogAuthor($body, $_response)

Create a new Sas Blog Author resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SasBlogAuthorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SasblogauthorBody(); // \Swagger\Client\Model\SasblogauthorBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSasBlogAuthor($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SasBlogAuthorApi->createSasBlogAuthor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SasblogauthorBody**](../Model/SasblogauthorBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200371**](../Model/InlineResponse200371.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSasBlogAuthor**
> \Swagger\Client\Model\InlineResponse200371 createSasBlogAuthor($body, $_response)

Create a new Sas Blog Author resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SasBlogAuthorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SasblogauthorBody(); // \Swagger\Client\Model\SasblogauthorBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSasBlogAuthor($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SasBlogAuthorApi->createSasBlogAuthor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SasblogauthorBody**](../Model/SasblogauthorBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200371**](../Model/InlineResponse200371.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSasBlogAuthor**
> deleteSasBlogAuthor($id, $_response)

Delete a Sas Blog Author resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SasBlogAuthorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the sas_blog_author
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSasBlogAuthor($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SasBlogAuthorApi->deleteSasBlogAuthor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the sas_blog_author |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSasBlogAuthor**
> \Swagger\Client\Model\InlineResponse200371 getSasBlogAuthor($id)

Detailed information about a Sas Blog Author resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SasBlogAuthorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the sas_blog_author

try {
    $result = $apiInstance->getSasBlogAuthor($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SasBlogAuthorApi->getSasBlogAuthor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the sas_blog_author |

### Return type

[**\Swagger\Client\Model\InlineResponse200371**](../Model/InlineResponse200371.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSasBlogAuthorList**
> \Swagger\Client\Model\InlineResponse200369 getSasBlogAuthorList($limit, $page, $query)

List with basic information of Sas Blog Author resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SasBlogAuthorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSasBlogAuthorList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SasBlogAuthorApi->getSasBlogAuthorList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200369**](../Model/InlineResponse200369.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSasBlogAuthor**
> \Swagger\Client\Model\InlineResponse200371 updateSasBlogAuthor($id, $body, $_response)

Partially update information about a Sas Blog Author resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SasBlogAuthorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the sas_blog_author
$body = new \Swagger\Client\Model\SasblogauthorIdBody(); // \Swagger\Client\Model\SasblogauthorIdBody | Partially update information about a Sas Blog Author resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSasBlogAuthor($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SasBlogAuthorApi->updateSasBlogAuthor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the sas_blog_author |
 **body** | [**\Swagger\Client\Model\SasblogauthorIdBody**](../Model/SasblogauthorIdBody.md)| Partially update information about a Sas Blog Author resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200371**](../Model/InlineResponse200371.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSasBlogAuthor**
> \Swagger\Client\Model\InlineResponse200371 updateSasBlogAuthor($id, $body, $_response)

Partially update information about a Sas Blog Author resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SasBlogAuthorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the sas_blog_author
$body = new \Swagger\Client\Model\SasblogauthorIdBody(); // \Swagger\Client\Model\SasblogauthorIdBody | Partially update information about a Sas Blog Author resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSasBlogAuthor($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SasBlogAuthorApi->updateSasBlogAuthor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the sas_blog_author |
 **body** | [**\Swagger\Client\Model\SasblogauthorIdBody**](../Model/SasblogauthorIdBody.md)| Partially update information about a Sas Blog Author resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200371**](../Model/InlineResponse200371.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

