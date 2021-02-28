# SaleitemSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**external_id** | **string** |  | [optional] 
**sale_id** | **int** |  | [optional] 
**reference_sequential_number** | **int** |  | [optional] 
**reference_text** | **string** |  | [optional] 
**reference_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**uuid** | **string** |  | 
**item_id** | **int** |  | [optional] 
**combination_id** | **int** |  | [optional] 
**prize_id** | **int** |  | [optional] 
**type** | **string** |  | 
**refund_cause_id** | **int** |  | [optional] 
**refund_cause_description** | **string** |  | [optional] 
**name** | **string** | Name of item sold | [optional] 
**barcode** | **string** |  | [optional] 
**sku** | **string** |  | [optional] 
**notes** | **string** |  | [optional] 
**not_discountable** | **bool** |  | [optional] 
**price** | **float** |  | 
**cost** | **float** |  | [optional] 
**vat_perc** | **float** |  | 
**final_price** | **float** | Unit Price  + discount/surcharges | 
**final_net_price** | **float** | Final Price without VAT | 
**quantity** | **float** |  | 
**lastupdate_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**lastupdate_by** | **int** |  | [optional] 
**added_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**seller_id** | **int** |  | 
**seller_name** | **string** |  | 
**category_id** | **int** |  | [optional] 
**category_name** | **string** |  | [optional] 
**department_id** | **int** |  | [optional] 
**department_name** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**price_changes** | [**\Swagger\Client\Model\PricechangeSchema[]**](PricechangeSchema.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

