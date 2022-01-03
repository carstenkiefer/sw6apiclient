# Swagger\Client\MailOperationsApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**build**](MailOperationsApi.md#build) | **POST** /_action/mail-template/build | Preview a mail template
[**send**](MailOperationsApi.md#send) | **POST** /_action/mail-template/send | Send a mail
[**validate**](MailOperationsApi.md#validate) | **POST** /_action/mail-template/validate | Validate a mail content

# **build**
> string build($body)

Preview a mail template

Generates a preview of a mail template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MailOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MailtemplateBuildBody(); // \Swagger\Client\Model\MailtemplateBuildBody | 

try {
    $result = $apiInstance->build($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailOperationsApi->build: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MailtemplateBuildBody**](../Model/MailtemplateBuildBody.md)|  |

### Return type

**string**

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **send**
> \Swagger\Client\Model\InlineResponse2002 send($body)

Send a mail

Generates a mail from a mail template and sends it to the customer.  Take a look at the `salesChannel` entity for possible values. For example `{{ salesChannel.name }}` can be used.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MailOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MailtemplateSendBody(); // \Swagger\Client\Model\MailtemplateSendBody | 

try {
    $result = $apiInstance->send($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailOperationsApi->send: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MailtemplateSendBody**](../Model/MailtemplateSendBody.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validate**
> validate($body)

Validate a mail content

Validates if content for a mail can be rendered without sending an email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MailOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MailtemplateValidateBody(); // \Swagger\Client\Model\MailtemplateValidateBody | 

try {
    $apiInstance->validate($body);
} catch (Exception $e) {
    echo 'Exception when calling MailOperationsApi->validate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MailtemplateValidateBody**](../Model/MailtemplateValidateBody.md)|  |

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

