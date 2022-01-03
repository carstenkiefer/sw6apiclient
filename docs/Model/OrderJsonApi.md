# OrderJsonApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**version_id** | **string** |  | [optional] 
**auto_increment** | **int** |  | [optional] 
**order_number** | **string** |  | [optional] 
**billing_address_id** | **string** |  | 
**billing_address_version_id** | **string** |  | [optional] 
**currency_id** | **string** |  | 
**language_id** | **string** |  | 
**sales_channel_id** | **string** |  | 
**order_date_time** | [**\DateTime**](\DateTime.md) |  | 
**order_date** | **string** |  | [optional] 
**price** | [**\Swagger\Client\Model\OrderJsonApiPrice**](OrderJsonApiPrice.md) |  | [optional] 
**amount_total** | **float** |  | [optional] 
**amount_net** | **float** |  | [optional] 
**position_price** | **float** |  | [optional] 
**tax_status** | **string** |  | [optional] 
**shipping_costs** | [**\Swagger\Client\Model\OrderJsonApiShippingCosts**](OrderJsonApiShippingCosts.md) |  | [optional] 
**shipping_total** | **float** |  | [optional] 
**currency_factor** | **float** |  | 
**deep_link_code** | **string** |  | [optional] 
**affiliate_code** | **string** |  | [optional] 
**campaign_code** | **string** |  | [optional] 
**customer_comment** | **string** |  | [optional] 
**state_id** | **string** |  | 
**rule_ids** | **string[]** |  | [optional] 
**custom_fields** | **object** |  | [optional] 
**created_by_id** | **string** |  | [optional] 
**updated_by_id** | **string** |  | [optional] 
**item_rounding** | [**\Swagger\Client\Model\CurrencyJsonApiItemRounding**](CurrencyJsonApiItemRounding.md) |  | [optional] 
**total_rounding** | [**\Swagger\Client\Model\CurrencyJsonApiItemRounding**](CurrencyJsonApiItemRounding.md) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**relationships** | [**\Swagger\Client\Model\OrderJsonApiRelationships**](OrderJsonApiRelationships.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

