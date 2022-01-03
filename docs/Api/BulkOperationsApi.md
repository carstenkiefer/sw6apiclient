# Swagger\Client\BulkOperationsApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync**](BulkOperationsApi.md#sync) | **POST** /_action/sync | Bulk edit entities

# **sync**
> \Swagger\Client\Model\InlineResponse2007 sync($body, $fail_on_error, $single_operation, $indexing_behavior)

Bulk edit entities

Starts a sync process for the list of provided actions. This can be inserts, upserts, updates and deletes on different entities.  to an asynchronous process in the background. You can control the behaviour with the `single-operation` and `indexing-behavior` header.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BulkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\ActionSyncBody()); // \Swagger\Client\Model\ActionSyncBody[] | 
$fail_on_error = true; // bool | To continue upcoming actions on errors, set the `fail-on-error` header to `false`.
$single_operation = false; // bool | Controls weather the data is written at once or in seperate transactions. - `true`: Data will be written in a single transaction
$indexing_behavior = "indexing_behavior_example"; // string | Controls the indexing behavior. - `disable-indexing`: Data indexing is completely disabled

try {
    $result = $apiInstance->sync($body, $fail_on_error, $single_operation, $indexing_behavior);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkOperationsApi->sync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ActionSyncBody[]**](../Model/ActionSyncBody.md)|  |
 **fail_on_error** | **bool**| To continue upcoming actions on errors, set the &#x60;fail-on-error&#x60; header to &#x60;false&#x60;. | [optional] [default to true]
 **single_operation** | **bool**| Controls weather the data is written at once or in seperate transactions. - &#x60;true&#x60;: Data will be written in a single transaction | [optional] [default to false]
 **indexing_behavior** | **string**| Controls the indexing behavior. - &#x60;disable-indexing&#x60;: Data indexing is completely disabled | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

