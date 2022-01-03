# OrderDelivery

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**version_id** | **string** |  | [optional] 
**order_id** | **string** |  | 
**order_version_id** | **string** |  | [optional] 
**shipping_order_address_id** | **string** |  | 
**shipping_order_address_version_id** | **string** |  | [optional] 
**shipping_method_id** | **string** |  | 
**state_id** | **string** |  | 
**tracking_codes** | **string[]** |  | 
**shipping_date_earliest** | [**\DateTime**](\DateTime.md) |  | 
**shipping_date_latest** | [**\DateTime**](\DateTime.md) |  | 
**shipping_costs** | [**\Swagger\Client\Model\OrderJsonApiShippingCosts**](OrderJsonApiShippingCosts.md) |  | [optional] 
**custom_fields** | **object** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**state_machine_state** | [**\Swagger\Client\Model\StateMachineState**](StateMachineState.md) |  | [optional] 
**order** | [**\Swagger\Client\Model\Order**](Order.md) |  | [optional] 
**shipping_order_address** | [**\Swagger\Client\Model\OrderAddress**](OrderAddress.md) |  | [optional] 
**shipping_method** | [**\Swagger\Client\Model\ShippingMethod**](ShippingMethod.md) |  | [optional] 
**positions** | [**\Swagger\Client\Model\OrderDeliveryPosition**](OrderDeliveryPosition.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

