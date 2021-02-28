# PrinterSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**name** | **string** |  | 
**ip_address** | **string** |  | [optional] 
**subnet_mask** | **string** |  | [optional] 
**gateway** | **string** |  | [optional] 
**mac_address_bt** | **string** |  | [optional] 
**ssl** | **bool** |  | [optional] 
**port** | **int** |  | [optional] 
**driver** | **string** | Driver type, can be escpos, rch, epson | 
**connection_type** | **string** | Connection type, can be &#x27;ws&#x27; (webservice) or &#x27;bt&#x27; (bluetooth) | [optional] 
**type** | **string** | printer type, can be fiscal or nonfiscal | 
**print_fiscal_receipt** | **bool** | true if can print fiscal receipts, false otherwise | [optional] 
**print_receipt** | **bool** | true if can print receipts, false otherwise | [optional] 
**print_invoice** | **bool** | true if can print invoices, false otherwise | [optional] 
**print_receipt_invoice** | **bool** | true if can print invoices based on a previously printed receipt, false otherwise | [optional] 
**print_summary_invoice** | **bool** | true if can print summary invoices | [optional] 
**print_summary_e_nrc** | **bool** | true if can print summary non claimed e-invoices | [optional] 
**print_summary_e_rc** | **bool** | true if can print summary claimed e-invoices | [optional] 
**print_shipping_invoice** | **bool** | true if can print shipping invoices | [optional] 
**print_e_invoice** | **bool** | true if can print e-invoices | [optional] 
**print_generic_receipt** | **bool** | true if can print generic receipts | [optional] 
**print_generic_invoice** | **bool** | true if can print generic invoices | [optional] 
**print_generic_document** | **bool** | true if can print generic documents | [optional] 
**receipt_format** | **string** | receipt format, for ex. 10 or 20 lines | [optional] 
**columns** | **int** |  | [optional] 
**top_space** | **int** |  | [optional] 
**bottom_space** | **int** |  | [optional] 
**enable_buzzer** | **bool** |  | [optional] 
**invoice_prefix** | **string** |  | [optional] 
**printer_number** | **int** |  | [optional] 
**configuration** | **string** |  | [optional] 
**configuration_pending** | **bool** |  | [optional] 
**configured_at** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

