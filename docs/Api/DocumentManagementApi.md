# Swagger\Client\DocumentManagementApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDocument**](DocumentManagementApi.md#createdocument) | **POST** /_action/order/{orderId}/document/{documentTypeName} | Create a document for an order
[**downloadDocument**](DocumentManagementApi.md#downloaddocument) | **GET** /_action/document/{documentId}/{deepLinkCode} | Download a document
[**numberRangeReserve**](DocumentManagementApi.md#numberrangereserve) | **GET** /_action/number-range/reserve/{type}/{saleschannel?} | Reserve or preview a document number
[**uploadToDocument**](DocumentManagementApi.md#uploadtodocument) | **POST** /_action/document/{documentId}/upload | Upload a file for a document

# **createDocument**
> \Swagger\Client\Model\InlineResponse2001 createDocument($order_id, $document_type_name, $body, $file_type)

Create a document for an order

Creates a document for an order. A document can for example be an invoice or a delivery note.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | Identifier of the order the document should be generated for
$document_type_name = "document_type_name_example"; // string | `technicalName` of the document type. Available types can be fetched with the `/api/document-type` endpoint.
$body = new \Swagger\Client\Model\DocumentDocumentTypeNameBody(); // \Swagger\Client\Model\DocumentDocumentTypeNameBody | 
$file_type = "pdf"; // string | Filetype of the document beeing created

try {
    $result = $apiInstance->createDocument($order_id, $document_type_name, $body, $file_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Identifier of the order the document should be generated for |
 **document_type_name** | **string**| &#x60;technicalName&#x60; of the document type. Available types can be fetched with the &#x60;/api/document-type&#x60; endpoint. |
 **body** | [**\Swagger\Client\Model\DocumentDocumentTypeNameBody**](../Model/DocumentDocumentTypeNameBody.md)|  | [optional]
 **file_type** | **string**| Filetype of the document beeing created | [optional] [default to pdf]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadDocument**
> string downloadDocument($document_id, $deep_link_code, $download)

Download a document

Download a document by its identifier and deep link code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = "document_id_example"; // string | Identifier of the document to be downloaded.
$deep_link_code = "deep_link_code_example"; // string | A unique hash code which was generated when the document was created.
$download = false; // bool | This parameter controls the `Content-Disposition` header. If set to `true` the header will be set to `attachment` else `inline`.

try {
    $result = $apiInstance->downloadDocument($document_id, $deep_link_code, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->downloadDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**| Identifier of the document to be downloaded. |
 **deep_link_code** | **string**| A unique hash code which was generated when the document was created. |
 **download** | **bool**| This parameter controls the &#x60;Content-Disposition&#x60; header. If set to &#x60;true&#x60; the header will be set to &#x60;attachment&#x60; else &#x60;inline&#x60;. | [optional] [default to false]

### Return type

**string**

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numberRangeReserve**
> \Swagger\Client\Model\InlineResponse20011 numberRangeReserve($type, $saleschannel, $preview)

Reserve or preview a document number

This endpoint provides functionality to reserve or preview a document number which can be used to create a new document using the `/_action/order/{orderId}/document/{documentTypeName}` endpoint.  The number generated by the endpoint will be reserved and the number pointer will be incremented with every call. For preview purposes, you can add the `?preview=1` parameter to the request. In that case, the number will not be incremented.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | `technicalName` of the document type (e.g. `document_invoice`). Available types can be fetched with the `/api/document-type endpoint`.
$saleschannel = "saleschannel_example"; // string | Sales channel for the number range. Number ranges can be defined per sales channel, so you can pass a sales channel ID here.
$preview = true; // bool | If this parameter has a true value, the number will not actually be incremented, but only previewed.

try {
    $result = $apiInstance->numberRangeReserve($type, $saleschannel, $preview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->numberRangeReserve: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| &#x60;technicalName&#x60; of the document type (e.g. &#x60;document_invoice&#x60;). Available types can be fetched with the &#x60;/api/document-type endpoint&#x60;. |
 **saleschannel** | **string**| Sales channel for the number range. Number ranges can be defined per sales channel, so you can pass a sales channel ID here. |
 **preview** | **bool**| If this parameter has a true value, the number will not actually be incremented, but only previewed. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadToDocument**
> \Swagger\Client\Model\InlineResponse2001 uploadToDocument($file_name, $extension, $document_id, $body)

Upload a file for a document

Uploads a file for a document. This prevents the document from beeing dynamically generated and delivers the uploaded file instead, when the document is downloaded.  Note: * The document is required to be `static` * A document can only have one media file  The are two methods of providing a file to this route:  * Use a typical file upload and provide the file in the request  * Fetch the file from an url. This only works if the `shopware.media.enable_url_upload_feature` variable is set to true in the shop environment. To use file upload via url, the content type has to be `application/json` and the parameter `url` has to be provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_name = "file_name_example"; // string | Name of the uploaded file.
$extension = "extension_example"; // string | Extension of the uploaded file. For example `pdf`
$document_id = "document_id_example"; // string | Identifier of the document the new file should be added to.
$body = new \Swagger\Client\Model\Object(); // Object | 

try {
    $result = $apiInstance->uploadToDocument($file_name, $extension, $document_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->uploadToDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Name of the uploaded file. |
 **extension** | **string**| Extension of the uploaded file. For example &#x60;pdf&#x60; |
 **document_id** | **string**| Identifier of the document the new file should be added to. |
 **body** | **Object**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/octet-stream, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadToDocument**
> \Swagger\Client\Model\InlineResponse2001 uploadToDocument($file_name, $extension, $document_id, $body)

Upload a file for a document

Uploads a file for a document. This prevents the document from beeing dynamically generated and delivers the uploaded file instead, when the document is downloaded.  Note: * The document is required to be `static` * A document can only have one media file  The are two methods of providing a file to this route:  * Use a typical file upload and provide the file in the request  * Fetch the file from an url. This only works if the `shopware.media.enable_url_upload_feature` variable is set to true in the shop environment. To use file upload via url, the content type has to be `application/json` and the parameter `url` has to be provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_name = "file_name_example"; // string | Name of the uploaded file.
$extension = "extension_example"; // string | Extension of the uploaded file. For example `pdf`
$document_id = "document_id_example"; // string | Identifier of the document the new file should be added to.
$body = new \Swagger\Client\Model\Object(); // Object | 

try {
    $result = $apiInstance->uploadToDocument($file_name, $extension, $document_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->uploadToDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Name of the uploaded file. |
 **extension** | **string**| Extension of the uploaded file. For example &#x60;pdf&#x60; |
 **document_id** | **string**| Identifier of the document the new file should be added to. |
 **body** | **Object**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/octet-stream, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

