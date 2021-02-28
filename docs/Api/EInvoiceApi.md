# Swagger\Client\EInvoiceApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesEInvoiceCheckPost**](EInvoiceApi.md#saleseinvoicecheckpost) | **POST** /sales/e_invoice/check | Check e-invoice status
[**sendEInvoiceIdGet**](EInvoiceApi.md#sendeinvoiceidget) | **GET** /send_e_invoice/{id} | Send e-invoice

# **salesEInvoiceCheckPost**
> \Swagger\Client\Model\InlineResponse2002 salesEInvoiceCheckPost($body)

Check e-invoice status

Return a JSON of the sale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Sales(); // \Swagger\Client\Model\Sales | Object of the Sale

try {
    $result = $apiInstance->salesEInvoiceCheckPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EInvoiceApi->salesEInvoiceCheckPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Sales**](../Model/Sales.md)| Object of the Sale |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendEInvoiceIdGet**
> \Swagger\Client\Model\Sales sendEInvoiceIdGet($id)

Send e-invoice

In this case you must specify the id of the sale in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the sale

try {
    $result = $apiInstance->sendEInvoiceIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EInvoiceApi->sendEInvoiceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the sale |

### Return type

[**\Swagger\Client\Model\Sales**](../Model/Sales.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

