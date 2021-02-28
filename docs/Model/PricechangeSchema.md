# PricechangeSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**index** | **int** |  | 
**type** | **string** | Type of price_change, can be discount_fix, discount_perc, surcharge_fix, surcharge_perc | 
**value** | **float** | Value of discount/surcharge, for percentage values use 10.50 for 10.5% | 
**description** | **string** | Discount/surcharge description | 
**sale_id** | **int** |  | [optional] 
**sale_item_id** | **int** |  | [optional] 
**rule_id** | **int** |  | [optional] 
**rule_name** | **string** |  | [optional] 
**prize_id** | **int** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

