# Customer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**group_id** | **string** |  | 
**default_payment_method_id** | **string** |  | 
**sales_channel_id** | **string** |  | 
**language_id** | **string** |  | 
**last_payment_method_id** | **string** |  | [optional] 
**default_billing_address_id** | **string** |  | 
**default_shipping_address_id** | **string** |  | 
**auto_increment** | **int** |  | [optional] 
**customer_number** | **string** |  | 
**salutation_id** | **string** |  | [optional] 
**first_name** | **string** |  | 
**last_name** | **string** |  | 
**company** | **string** |  | [optional] 
**email** | **string** |  | 
**title** | **string** |  | [optional] 
**vat_ids** | **string[]** |  | [optional] 
**affiliate_code** | **string** |  | [optional] 
**campaign_code** | **string** |  | [optional] 
**active** | **bool** |  | [optional] 
**double_opt_in_registration** | **bool** |  | [optional] 
**double_opt_in_email_sent_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**double_opt_in_confirm_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**hash** | **string** |  | [optional] 
**guest** | **bool** |  | [optional] 
**first_login** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_login** | [**\DateTime**](\DateTime.md) |  | [optional] 
**newsletter** | **bool** |  | [optional] 
**birthday** | **string** |  | [optional] 
**last_order_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**order_count** | **int** |  | [optional] 
**order_total_amount** | **float** |  | [optional] 
**custom_fields** | **object** |  | [optional] 
**remote_address** | **string** |  | [optional] 
**tag_ids** | **string[]** |  | [optional] 
**requested_group_id** | **string** |  | [optional] 
**bound_sales_channel_id** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**group** | [**\Swagger\Client\Model\CustomerGroup**](CustomerGroup.md) |  | [optional] 
**default_payment_method** | [**\Swagger\Client\Model\PaymentMethod**](PaymentMethod.md) |  | [optional] 
**sales_channel** | [**\Swagger\Client\Model\SalesChannel**](SalesChannel.md) |  | [optional] 
**language** | [**\Swagger\Client\Model\Language**](Language.md) |  | [optional] 
**last_payment_method** | [**\Swagger\Client\Model\PaymentMethod**](PaymentMethod.md) |  | [optional] 
**default_billing_address** | [**\Swagger\Client\Model\CustomerAddress**](CustomerAddress.md) |  | [optional] 
**default_shipping_address** | [**\Swagger\Client\Model\CustomerAddress**](CustomerAddress.md) |  | [optional] 
**salutation** | [**\Swagger\Client\Model\Salutation**](Salutation.md) |  | [optional] 
**addresses** | [**\Swagger\Client\Model\CustomerAddress**](CustomerAddress.md) |  | [optional] 
**order_customers** | [**\Swagger\Client\Model\OrderCustomer**](OrderCustomer.md) |  | [optional] 
**tags** | [**\Swagger\Client\Model\Tag**](Tag.md) |  | [optional] 
**promotions** | [**\Swagger\Client\Model\Promotion**](Promotion.md) |  | [optional] 
**product_reviews** | [**\Swagger\Client\Model\ProductReview**](ProductReview.md) |  | [optional] 
**recovery_customer** | [**\Swagger\Client\Model\CustomerRecovery**](CustomerRecovery.md) |  | [optional] 
**requested_group** | [**\Swagger\Client\Model\CustomerGroup**](CustomerGroup.md) |  | [optional] 
**bound_sales_channel** | [**\Swagger\Client\Model\SalesChannel**](SalesChannel.md) |  | [optional] 
**wishlists** | [**\Swagger\Client\Model\CustomerWishlist**](CustomerWishlist.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

