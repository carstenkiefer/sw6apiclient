# Swagger\Client\OrderManagementApi

All URIs are relative to *http://sw6.hoefer-shop.de/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderDeliveryStateTransition**](OrderManagementApi.md#orderdeliverystatetransition) | **POST** /_action/order_delivery/{orderDeliveryId}/state/{transition} | Transition an order delivery to a new state
[**orderStateTransition**](OrderManagementApi.md#orderstatetransition) | **POST** /_action/order/{orderId}/state/{transition} | Transition an order to a new state
[**orderTransactionStateTransition**](OrderManagementApi.md#ordertransactionstatetransition) | **POST** /_action/order_transaction/{orderTransactionId}/state/{transition} | Transition an order transaction to a new state

# **orderDeliveryStateTransition**
> orderDeliveryStateTransition($order_delivery_id, $transition, $body)

Transition an order delivery to a new state

Changes the order delivery state and informs the customer via email if configured.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_delivery_id = "order_delivery_id_example"; // string | Identifier of the order delivery.
$transition = "transition_example"; // string | The `action_name` of the `state_machine_transition`. For example `process` if the order state should change from open to in progress.  Note: If you choose a transition which is not possible, you will get an error that lists possible transition for the actual state.
$body = new \Swagger\Client\Model\StateTransitionBody2(); // \Swagger\Client\Model\StateTransitionBody2 | 

try {
    $apiInstance->orderDeliveryStateTransition($order_delivery_id, $transition, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderDeliveryStateTransition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_delivery_id** | **string**| Identifier of the order delivery. |
 **transition** | **string**| The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition which is not possible, you will get an error that lists possible transition for the actual state. |
 **body** | [**\Swagger\Client\Model\StateTransitionBody2**](../Model/StateTransitionBody2.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderStateTransition**
> orderStateTransition($order_id, $transition, $body)

Transition an order to a new state

Changes the order state and informs the customer via email if configured.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | Identifier of the order.
$transition = "transition_example"; // string | The `action_name` of the `state_machine_transition`. For example `process` if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state.
$body = new \Swagger\Client\Model\StateTransitionBody(); // \Swagger\Client\Model\StateTransitionBody | 

try {
    $apiInstance->orderStateTransition($order_id, $transition, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderStateTransition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Identifier of the order. |
 **transition** | **string**| The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state. |
 **body** | [**\Swagger\Client\Model\StateTransitionBody**](../Model/StateTransitionBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderTransactionStateTransition**
> orderTransactionStateTransition($order_transaction_id, $transition, $body)

Transition an order transaction to a new state

Changes the order transaction state and informs the customer via email if configured.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_transaction_id = "order_transaction_id_example"; // string | Identifier of the order transaction.
$transition = "transition_example"; // string | The `action_name` of the `state_machine_transition`. For example `process` if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state.
$body = new \Swagger\Client\Model\StateTransitionBody1(); // \Swagger\Client\Model\StateTransitionBody1 | 

try {
    $apiInstance->orderTransactionStateTransition($order_transaction_id, $transition, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderTransactionStateTransition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_transaction_id** | **string**| Identifier of the order transaction. |
 **transition** | **string**| The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state. |
 **body** | [**\Swagger\Client\Model\StateTransitionBody1**](../Model/StateTransitionBody1.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

