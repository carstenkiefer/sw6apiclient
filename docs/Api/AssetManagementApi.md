# Swagger\Client\AssetManagementApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**upload**](AssetManagementApi.md#upload) | **POST** /_action/media/{mediaId}/upload | Upload a file to a media entity

# **upload**
> upload($extension, $media_id, $body, $file_name)

Upload a file to a media entity

Adds a new file to a media entity. If the entity has an existing file, it will be replaced.  The are two methods of providing a file to this route:  * Use a typical file upload and provide the file in the request  * Fetch the file from an url. This only works if the `shopware.media.enable_url_upload_feature` variable is set to true in the shop environment. To use file upload via url, the content type has to be `application/json` and the parameter `url` has to be provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$extension = "extension_example"; // string | Extension of the uploaded file. For example `png`
$media_id = "media_id_example"; // string | Identifier of the media entity.
$body = new \Swagger\Client\Model\Object(); // Object | 
$file_name = "file_name_example"; // string | Name of the uploaded file. If not provided the media identifier will be used as name

try {
    $apiInstance->upload($extension, $media_id, $body, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->upload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extension** | **string**| Extension of the uploaded file. For example &#x60;png&#x60; |
 **media_id** | **string**| Identifier of the media entity. |
 **body** | **Object**|  | [optional]
 **file_name** | **string**| Name of the uploaded file. If not provided the media identifier will be used as name | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/octet-stream, application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upload**
> upload($extension, $media_id, $body, $file_name)

Upload a file to a media entity

Adds a new file to a media entity. If the entity has an existing file, it will be replaced.  The are two methods of providing a file to this route:  * Use a typical file upload and provide the file in the request  * Fetch the file from an url. This only works if the `shopware.media.enable_url_upload_feature` variable is set to true in the shop environment. To use file upload via url, the content type has to be `application/json` and the parameter `url` has to be provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$extension = "extension_example"; // string | Extension of the uploaded file. For example `png`
$media_id = "media_id_example"; // string | Identifier of the media entity.
$body = new \Swagger\Client\Model\Object(); // Object | 
$file_name = "file_name_example"; // string | Name of the uploaded file. If not provided the media identifier will be used as name

try {
    $apiInstance->upload($extension, $media_id, $body, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->upload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extension** | **string**| Extension of the uploaded file. For example &#x60;png&#x60; |
 **media_id** | **string**| Identifier of the media entity. |
 **body** | **Object**|  | [optional]
 **file_name** | **string**| Name of the uploaded file. If not provided the media identifier will be used as name | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/octet-stream, application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

