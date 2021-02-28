# Orders

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**uuid** | **string** |  | [optional] 
**order_parent_id** | **int** |  | [optional] 
**order_parent_uuid** | **string** |  | [optional] 
**name** | **string** |  | 
**type** | **string** | Order type, can be normal or take_away | 
**paid** | **bool** |  | [optional] 
**external_id** | **string** |  | [optional] 
**channel** | **string** |  | [optional] 
**notes** | **string** |  | [optional] 
**status** | **string** | Order status, can be open, checkout, closed or missed | 
**amount** | **float** | Sum of final_price of all order_items | [optional] 
**net_amount** | **float** | Sum of final_net_price of all order_items | [optional] 
**room_id** | **int** |  | [optional] 
**room_name** | **string** |  | [optional] 
**table_id** | **int** |  | [optional] 
**table_name** | **string** |  | [optional] 
**operator_id** | **int** |  | 
**operator_name** | **string** |  | 
**lastupdate_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**lastupdate_by** | **int** |  | [optional] 
**order_number** | **int** |  | [optional] 
**covers** | **int** |  | [optional] 
**open_at** | [**\DateTime**](\DateTime.md) |  | 
**checkout_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**closed_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**deliver_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_sent_by** | **int** |  | [optional] 
**last_sent_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**previous** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**createdby_id** | **int** |  | [optional] 
**updatedby_id** | **int** |  | [optional] 
**deletedby_id** | **int** |  | [optional] 
**previous_order** | **object** |  | [optional] 
**order_items** | [**\Swagger\Client\Model\OrderitemSchema[]**](OrderitemSchema.md) |  | [optional] 
**order_customer** | [**\Swagger\Client\Model\OrdercustomerSchema**](OrdercustomerSchema.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

