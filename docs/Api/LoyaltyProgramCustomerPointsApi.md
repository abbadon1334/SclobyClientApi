# Swagger\Client\LoyaltyProgramCustomerPointsApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fidelitiesPointsIdGet**](LoyaltyProgramCustomerPointsApi.md#fidelitiespointsidget) | **GET** /fidelities_points/{id} | Get existing Fidelity Point

# **fidelitiesPointsIdGet**
> \Swagger\Client\Model\InlineResponse2004 fidelitiesPointsIdGet($id)

Get existing Fidelity Point

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramCustomerPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Fidelity Point

try {
    $result = $apiInstance->fidelitiesPointsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramCustomerPointsApi->fidelitiesPointsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Fidelity Point |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

