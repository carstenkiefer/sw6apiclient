# Swagger\Client\PayPalApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authorizationDetails**](PayPalApi.md#authorizationdetails) | **GET** /paypal-v2/authorization/{orderTransactionId}/{authorizationId} | 
[**captureAuthorization**](PayPalApi.md#captureauthorization) | **POST** /_action/paypal-v2/capture-authorization/{orderTransactionId}/{authorizationId} | 
[**captureDetails**](PayPalApi.md#capturedetails) | **GET** /paypal-v2/capture/{orderTransactionId}/{captureId} | 
[**disputeDetails**](PayPalApi.md#disputedetails) | **GET** /paypal/dispute/{disputeId} | 
[**disputeList**](PayPalApi.md#disputelist) | **GET** /paypal/dispute | 
[**orderDetails**](PayPalApi.md#orderdetails) | **GET** /paypal-v2/order/{orderTransactionId}/{paypalOrderId} | 
[**paymentDetails**](PayPalApi.md#paymentdetails) | **GET** /paypal/payment-details/{orderId}/{paymentId} | 
[**refundCapture**](PayPalApi.md#refundcapture) | **POST** /_action/paypal-v2/refund-capture/{orderTransactionId}/{captureId}/{paypalOrderId} | 
[**refundDetails**](PayPalApi.md#refunddetails) | **GET** /paypal-v2/refund/{orderTransactionId}/{refundId} | 
[**resourceDetails**](PayPalApi.md#resourcedetails) | **GET** /paypal/resource-details/{resourceType}/{resourceId}/{orderId} | 
[**voidAuthorization**](PayPalApi.md#voidauthorization) | **POST** /_action/paypal-v2/void-authorization/{orderTransactionId}/{authorizationId} | 

# **authorizationDetails**
> \Swagger\Client\Model\SwagPaypalV2OrderAuthorization authorizationDetails($order_transaction_id, $authorization_id)



Loads the authorization details of the given PayPal authorization ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayPalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_transaction_id = "order_transaction_id_example"; // string | ID of the order transaction which contains the PayPal payment
$authorization_id = "authorization_id_example"; // string | ID of the PayPal authorization

try {
    $result = $apiInstance->authorizationDetails($order_transaction_id, $authorization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayPalApi->authorizationDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_transaction_id** | **string**| ID of the order transaction which contains the PayPal payment |
 **authorization_id** | **string**| ID of the PayPal authorization |

### Return type

[**\Swagger\Client\Model\SwagPaypalV2OrderAuthorization**](../Model/SwagPaypalV2OrderAuthorization.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **captureAuthorization**
> \Swagger\Client\Model\SwagPaypalV2OrderCapture captureAuthorization($order_transaction_id, $authorization_id, $body)



Captures the PayPal authorization and sets the state of the Shopware order transaction accordingly

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayPalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_transaction_id = "order_transaction_id_example"; // string | ID of the order transaction which contains the PayPal payment
$authorization_id = "authorization_id_example"; // string | ID of the PayPal authorization
$body = new \Swagger\Client\Model\OrderTransactionIdAuthorizationIdBody(); // \Swagger\Client\Model\OrderTransactionIdAuthorizationIdBody | 

try {
    $result = $apiInstance->captureAuthorization($order_transaction_id, $authorization_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayPalApi->captureAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_transaction_id** | **string**| ID of the order transaction which contains the PayPal payment |
 **authorization_id** | **string**| ID of the PayPal authorization |
 **body** | [**\Swagger\Client\Model\OrderTransactionIdAuthorizationIdBody**](../Model/OrderTransactionIdAuthorizationIdBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SwagPaypalV2OrderCapture**](../Model/SwagPaypalV2OrderCapture.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **captureDetails**
> \Swagger\Client\Model\SwagPaypalV2OrderCapture captureDetails($order_transaction_id, $capture_id)



Loads the capture details of the given PayPal capture ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayPalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_transaction_id = "order_transaction_id_example"; // string | ID of the order transaction which contains the PayPal payment
$capture_id = "capture_id_example"; // string | ID of the PayPal capture

try {
    $result = $apiInstance->captureDetails($order_transaction_id, $capture_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayPalApi->captureDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_transaction_id** | **string**| ID of the order transaction which contains the PayPal payment |
 **capture_id** | **string**| ID of the PayPal capture |

### Return type

[**\Swagger\Client\Model\SwagPaypalV2OrderCapture**](../Model/SwagPaypalV2OrderCapture.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disputeDetails**
> \Swagger\Client\Model\SwagPaypalV1DisputesItem disputeDetails($dispute_id, $sales_channel_id)



Loads the dispute details of the given PayPal dispute ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayPalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dispute_id = "dispute_id_example"; // string | ID of the dispute
$sales_channel_id = "sales_channel_id_example"; // string | ID of the sales channel to which the dispute belongs

try {
    $result = $apiInstance->disputeDetails($dispute_id, $sales_channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayPalApi->disputeDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | **string**| ID of the dispute |
 **sales_channel_id** | **string**| ID of the sales channel to which the dispute belongs | [optional]

### Return type

[**\Swagger\Client\Model\SwagPaypalV1DisputesItem**](../Model/SwagPaypalV1DisputesItem.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disputeList**
> \Swagger\Client\Model\SwagPaypalV1Disputes disputeList($sales_channel_id, $dispute_state_filter)



Loads a list of PayPal disputes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayPalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_channel_id = "sales_channel_id_example"; // string | ID of the sales channel to which the disputes belong
$dispute_state_filter = "dispute_state_filter_example"; // string | Filter for dispute state. Seperate multiple states with a comma. Must one of these values: Swag\\PayPal\\RestApi\\V1\\Api\\Disputes\\Item::DISPUTE_STATES

try {
    $result = $apiInstance->disputeList($sales_channel_id, $dispute_state_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayPalApi->disputeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_channel_id** | **string**| ID of the sales channel to which the disputes belong | [optional]
 **dispute_state_filter** | **string**| Filter for dispute state. Seperate multiple states with a comma. Must one of these values: Swag\\PayPal\\RestApi\\V1\\Api\\Disputes\\Item::DISPUTE_STATES | [optional]

### Return type

[**\Swagger\Client\Model\SwagPaypalV1Disputes**](../Model/SwagPaypalV1Disputes.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderDetails**
> \Swagger\Client\Model\SwagPaypalV2Order orderDetails($order_transaction_id, $paypal_order_id)



Loads the order details of the given PayPal order ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayPalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_transaction_id = "order_transaction_id_example"; // string | ID of the order transaction which contains the PayPal payment
$paypal_order_id = "paypal_order_id_example"; // string | ID of the PayPal order

try {
    $result = $apiInstance->orderDetails($order_transaction_id, $paypal_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayPalApi->orderDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_transaction_id** | **string**| ID of the order transaction which contains the PayPal payment |
 **paypal_order_id** | **string**| ID of the PayPal order |

### Return type

[**\Swagger\Client\Model\SwagPaypalV2Order**](../Model/SwagPaypalV2Order.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentDetails**
> \Swagger\Client\Model\SwagPaypalV1Payment paymentDetails($order_id, $payment_id)



Loads the Payment details of the given PayPal ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayPalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | ID of the order which contains the PayPal payment
$payment_id = "payment_id_example"; // string | ID of the PayPal payment

try {
    $result = $apiInstance->paymentDetails($order_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayPalApi->paymentDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| ID of the order which contains the PayPal payment |
 **payment_id** | **string**| ID of the PayPal payment |

### Return type

[**\Swagger\Client\Model\SwagPaypalV1Payment**](../Model/SwagPaypalV1Payment.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundCapture**
> \Swagger\Client\Model\SwagPaypalV2OrderRefund refundCapture($order_transaction_id, $capture_id, $paypal_order_id, $body)



Refunds the PayPal capture and sets the state of the Shopware order transaction accordingly

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayPalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_transaction_id = "order_transaction_id_example"; // string | ID of the order transaction which contains the PayPal payment
$capture_id = "capture_id_example"; // string | ID of the PayPal capture
$paypal_order_id = "paypal_order_id_example"; // string | ID of the PayPal order
$body = new \Swagger\Client\Model\CaptureIdPaypalOrderIdBody(); // \Swagger\Client\Model\CaptureIdPaypalOrderIdBody | 

try {
    $result = $apiInstance->refundCapture($order_transaction_id, $capture_id, $paypal_order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayPalApi->refundCapture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_transaction_id** | **string**| ID of the order transaction which contains the PayPal payment |
 **capture_id** | **string**| ID of the PayPal capture |
 **paypal_order_id** | **string**| ID of the PayPal order |
 **body** | [**\Swagger\Client\Model\CaptureIdPaypalOrderIdBody**](../Model/CaptureIdPaypalOrderIdBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SwagPaypalV2OrderRefund**](../Model/SwagPaypalV2OrderRefund.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundDetails**
> \Swagger\Client\Model\SwagPaypalV2OrderRefund refundDetails($order_transaction_id, $refund_id)



Loads the refund details of the given PayPal refund ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayPalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_transaction_id = "order_transaction_id_example"; // string | ID of the order transaction which contains the PayPal payment
$refund_id = "refund_id_example"; // string | ID of the PayPal refund

try {
    $result = $apiInstance->refundDetails($order_transaction_id, $refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayPalApi->refundDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_transaction_id** | **string**| ID of the order transaction which contains the PayPal payment |
 **refund_id** | **string**| ID of the PayPal refund |

### Return type

[**\Swagger\Client\Model\SwagPaypalV2OrderRefund**](../Model/SwagPaypalV2OrderRefund.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourceDetails**
> \Swagger\Client\Model\InlineResponse200 resourceDetails($resource_type, $resource_id, $order_id)



Loads the PayPal resource details of the given resource ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayPalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_type = "resource_type_example"; // string | Type of the resource. Possible values: sale, authorization, order, capture, refund
$resource_id = "resource_id_example"; // string | ID of the PayPal resource
$order_id = "order_id_example"; // string | ID of the order which contains the PayPal resource

try {
    $result = $apiInstance->resourceDetails($resource_type, $resource_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayPalApi->resourceDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_type** | **string**| Type of the resource. Possible values: sale, authorization, order, capture, refund |
 **resource_id** | **string**| ID of the PayPal resource |
 **order_id** | **string**| ID of the order which contains the PayPal resource |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voidAuthorization**
> voidAuthorization($order_transaction_id, $authorization_id, $body)



Voids the PayPal authorization and sets the state of the Shopware order transaction accordingly

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayPalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_transaction_id = "order_transaction_id_example"; // string | ID of the order transaction which contains the PayPal payment
$authorization_id = "authorization_id_example"; // string | ID of the PayPal authorization
$body = new \Swagger\Client\Model\OrderTransactionIdAuthorizationIdBody1(); // \Swagger\Client\Model\OrderTransactionIdAuthorizationIdBody1 | 

try {
    $apiInstance->voidAuthorization($order_transaction_id, $authorization_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PayPalApi->voidAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_transaction_id** | **string**| ID of the order transaction which contains the PayPal payment |
 **authorization_id** | **string**| ID of the PayPal authorization |
 **body** | [**\Swagger\Client\Model\OrderTransactionIdAuthorizationIdBody1**](../Model/OrderTransactionIdAuthorizationIdBody1.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

