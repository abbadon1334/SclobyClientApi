# OrderitemSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**uuid** | **string** |  | 
**order_id** | **int** |  | [optional] 
**item_id** | **int** |  | [optional] 
**name** | **string** | Original Name of item sold | [optional] 
**order_name** | **string** | Name you want to print into kitchen tickets | [optional] 
**category_id** | **int** |  | [optional] 
**category_name** | **string** |  | [optional] 
**notes** | **string** |  | [optional] 
**half_portion** | **bool** |  | [optional] 
**price** | **float** |  | 
**cost** | **float** |  | [optional] 
**net_price** | **float** |  | 
**vat_perc** | **float** |  | 
**final_price** | **float** | Price with VAT (ingredients or variations price differences are included) | 
**final_net_price** | **float** | Price without VAT (ingredients or variations price differences are included) | 
**quantity** | **int** |  | 
**unit** | **string** |  | [optional] 
**exit** | **int** | Item exit, can be null or from 1 to 10 | [optional] 
**lastupdate_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**lastupdate_by** | **int** |  | [optional] 
**added_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**operator_id** | **int** |  | 
**operator_name** | **string** |  | 
**department_id** | **int** |  | [optional] 
**department_name** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**variations** | [**\Swagger\Client\Model\OrderitemvariationSchema[]**](OrderitemvariationSchema.md) |  | [optional] 
**ingredients** | [**\Swagger\Client\Model\OrderitemingredientSchema[]**](OrderitemingredientSchema.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

