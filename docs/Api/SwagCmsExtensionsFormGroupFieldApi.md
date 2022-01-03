# Swagger\Client\SwagCmsExtensionsFormGroupFieldApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSwagCmsExtensionsFormGroupField**](SwagCmsExtensionsFormGroupFieldApi.md#createswagcmsextensionsformgroupfield) | **POST** /swag-cms-extensions-form-group-field | Create a new Swag Cms Extensions Form Group Field resources
[**deleteSwagCmsExtensionsFormGroupField**](SwagCmsExtensionsFormGroupFieldApi.md#deleteswagcmsextensionsformgroupfield) | **DELETE** /swag-cms-extensions-form-group-field/{id} | Delete a Swag Cms Extensions Form Group Field resource
[**getSwagCmsExtensionsFormGroupField**](SwagCmsExtensionsFormGroupFieldApi.md#getswagcmsextensionsformgroupfield) | **GET** /swag-cms-extensions-form-group-field/{id} | Detailed information about a Swag Cms Extensions Form Group Field resource
[**getSwagCmsExtensionsFormGroupFieldList**](SwagCmsExtensionsFormGroupFieldApi.md#getswagcmsextensionsformgroupfieldlist) | **GET** /swag-cms-extensions-form-group-field | List with basic information of Swag Cms Extensions Form Group Field resources
[**updateSwagCmsExtensionsFormGroupField**](SwagCmsExtensionsFormGroupFieldApi.md#updateswagcmsextensionsformgroupfield) | **PATCH** /swag-cms-extensions-form-group-field/{id} | Partially update information about a Swag Cms Extensions Form Group Field resource

# **createSwagCmsExtensionsFormGroupField**
> \Swagger\Client\Model\InlineResponse200431 createSwagCmsExtensionsFormGroupField($body, $_response)

Create a new Swag Cms Extensions Form Group Field resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsFormGroupFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagcmsextensionsformgroupfieldBody(); // \Swagger\Client\Model\SwagcmsextensionsformgroupfieldBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagCmsExtensionsFormGroupField($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsFormGroupFieldApi->createSwagCmsExtensionsFormGroupField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsformgroupfieldBody**](../Model/SwagcmsextensionsformgroupfieldBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200431**](../Model/InlineResponse200431.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwagCmsExtensionsFormGroupField**
> \Swagger\Client\Model\InlineResponse200431 createSwagCmsExtensionsFormGroupField($body, $_response)

Create a new Swag Cms Extensions Form Group Field resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsFormGroupFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SwagcmsextensionsformgroupfieldBody(); // \Swagger\Client\Model\SwagcmsextensionsformgroupfieldBody | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSwagCmsExtensionsFormGroupField($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsFormGroupFieldApi->createSwagCmsExtensionsFormGroupField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsformgroupfieldBody**](../Model/SwagcmsextensionsformgroupfieldBody.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200431**](../Model/InlineResponse200431.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSwagCmsExtensionsFormGroupField**
> deleteSwagCmsExtensionsFormGroupField($id, $_response)

Delete a Swag Cms Extensions Form Group Field resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsFormGroupFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_form_group_field
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSwagCmsExtensionsFormGroupField($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsFormGroupFieldApi->deleteSwagCmsExtensionsFormGroupField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_form_group_field |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagCmsExtensionsFormGroupField**
> \Swagger\Client\Model\InlineResponse200431 getSwagCmsExtensionsFormGroupField($id)

Detailed information about a Swag Cms Extensions Form Group Field resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsFormGroupFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_form_group_field

try {
    $result = $apiInstance->getSwagCmsExtensionsFormGroupField($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsFormGroupFieldApi->getSwagCmsExtensionsFormGroupField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_form_group_field |

### Return type

[**\Swagger\Client\Model\InlineResponse200431**](../Model/InlineResponse200431.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwagCmsExtensionsFormGroupFieldList**
> \Swagger\Client\Model\InlineResponse200429 getSwagCmsExtensionsFormGroupFieldList($limit, $page, $query)

List with basic information of Swag Cms Extensions Form Group Field resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsFormGroupFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSwagCmsExtensionsFormGroupFieldList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsFormGroupFieldApi->getSwagCmsExtensionsFormGroupFieldList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200429**](../Model/InlineResponse200429.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagCmsExtensionsFormGroupField**
> \Swagger\Client\Model\InlineResponse200431 updateSwagCmsExtensionsFormGroupField($id, $body, $_response)

Partially update information about a Swag Cms Extensions Form Group Field resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsFormGroupFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_form_group_field
$body = new \Swagger\Client\Model\SwagcmsextensionsformgroupfieldIdBody(); // \Swagger\Client\Model\SwagcmsextensionsformgroupfieldIdBody | Partially update information about a Swag Cms Extensions Form Group Field resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagCmsExtensionsFormGroupField($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsFormGroupFieldApi->updateSwagCmsExtensionsFormGroupField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_form_group_field |
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsformgroupfieldIdBody**](../Model/SwagcmsextensionsformgroupfieldIdBody.md)| Partially update information about a Swag Cms Extensions Form Group Field resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200431**](../Model/InlineResponse200431.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwagCmsExtensionsFormGroupField**
> \Swagger\Client\Model\InlineResponse200431 updateSwagCmsExtensionsFormGroupField($id, $body, $_response)

Partially update information about a Swag Cms Extensions Form Group Field resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SwagCmsExtensionsFormGroupFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier for the swag_cms_extensions_form_group_field
$body = new \Swagger\Client\Model\SwagcmsextensionsformgroupfieldIdBody(); // \Swagger\Client\Model\SwagcmsextensionsformgroupfieldIdBody | Partially update information about a Swag Cms Extensions Form Group Field resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSwagCmsExtensionsFormGroupField($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwagCmsExtensionsFormGroupFieldApi->updateSwagCmsExtensionsFormGroupField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the swag_cms_extensions_form_group_field |
 **body** | [**\Swagger\Client\Model\SwagcmsextensionsformgroupfieldIdBody**](../Model/SwagcmsextensionsformgroupfieldIdBody.md)| Partially update information about a Swag Cms Extensions Form Group Field resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200431**](../Model/InlineResponse200431.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

