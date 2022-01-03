# OrderLineItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**version_id** | **string** |  | [optional] 
**order_id** | **string** |  | 
**order_version_id** | **string** |  | [optional] 
**product_id** | **string** |  | [optional] 
**product_version_id** | **string** |  | [optional] 
**parent_id** | **string** |  | [optional] 
**parent_version_id** | **string** |  | [optional] 
**cover_id** | **string** |  | [optional] 
**identifier** | **string** |  | 
**referenced_id** | **string** |  | [optional] 
**quantity** | **int** |  | 
**label** | **string** |  | 
**payload** | **object** |  | [optional] 
**good** | **bool** |  | [optional] 
**removable** | **bool** |  | [optional] 
**stackable** | **bool** |  | [optional] 
**position** | **int** |  | 
**price** | [**\Swagger\Client\Model\OrderJsonApiShippingCosts**](OrderJsonApiShippingCosts.md) |  | 
**price_definition** | **object** |  | [optional] 
**unit_price** | **float** |  | [optional] 
**total_price** | **float** |  | [optional] 
**description** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**custom_fields** | **object** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**cover** | [**\Swagger\Client\Model\Media**](Media.md) |  | [optional] 
**order** | [**\Swagger\Client\Model\Order**](Order.md) |  | [optional] 
**product** | [**\Swagger\Client\Model\Product**](Product.md) |  | [optional] 
**order_delivery_positions** | [**\Swagger\Client\Model\OrderDeliveryPosition**](OrderDeliveryPosition.md) |  | [optional] 
**parent** | [**\Swagger\Client\Model\OrderLineItem**](OrderLineItem.md) |  | [optional] 
**children** | [**\Swagger\Client\Model\OrderLineItem**](OrderLineItem.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

