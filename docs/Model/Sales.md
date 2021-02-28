# Sales

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**uuid** | **string** |  | [optional] 
**name** | **string** |  | 
**external_id** | **string** |  | [optional] 
**channel** | **string** |  | [optional] 
**sale_number** | **int** |  | [optional] 
**is_summary** | **bool** |  | [optional] 
**notes** | **string** |  | [optional] 
**sale_parent_id** | **int** |  | [optional] 
**sale_parent_uuid** | **string** |  | [optional] 
**order_id** | **int** |  | [optional] 
**order_uuid** | **string** |  | [optional] 
**scloby_shop_id** | **string** | Scloby Pass Shop ID | [optional] 
**assigned_id** | **int** |  | [optional] 
**assigned_name** | **string** |  | [optional] 
**seller_id** | **int** |  | 
**seller_name** | **string** |  | 
**customer_tax_code** | **string** |  | [optional] 
**open_at** | [**\DateTime**](\DateTime.md) |  | 
**closed_at** | [**\DateTime**](\DateTime.md) | Closing (or Storing) date | [optional] 
**lastupdate_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**lastupdate_by** | **int** |  | [optional] 
**status** | **string** | Sale status, can be open, closed or stored | 
**amount** | **float** | Sum of price * quantity + discount/surcharges of all sale_items | [optional] 
**change** | **float** | Payment change (also known as &#x27;resto&#x27;) | [optional] 
**change_type** | **string** | Change type, can be &#x27;cash&#x27;, &#x27;ticket&#x27; or &#x27;other&#x27; | [optional] 
**final_amount** | **float** | Sum of price * quantity + discount/surcharges of all sale_items + discount/surcharges on amount | [optional] 
**final_net_amount** | **float** | Sum of final_price * quantity of all sale_items | [optional] 
**currency** | **string** |  | 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**createdby_id** | **int** |  | [optional] 
**updatedby_id** | **int** |  | [optional] 
**deletedby_id** | **int** |  | [optional] 
**price_changes** | [**\Swagger\Client\Model\PricechangeSchema[]**](PricechangeSchema.md) |  | [optional] 
**sale_items** | [**\Swagger\Client\Model\SaleitemSchema[]**](SaleitemSchema.md) |  | [optional] 
**sale_customer** | [**\Swagger\Client\Model\SalecustomerSchema**](SalecustomerSchema.md) |  | [optional] 
**payments** | [**\Swagger\Client\Model\SalepaymentSchema[]**](SalepaymentSchema.md) |  | [optional] 
**sale_documents** | [**\Swagger\Client\Model\SaledocumentSchema[]**](SaledocumentSchema.md) |  | [optional] 
**e_invoice** | [**\Swagger\Client\Model\SaleeinvoiceSchema**](SaleeinvoiceSchema.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

