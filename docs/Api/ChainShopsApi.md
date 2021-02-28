# Swagger\Client\ChainShopsApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chainShopsIdGet**](ChainShopsApi.md#chainshopsidget) | **GET** /chain_shops/{id} | Get existing Chain Shop

# **chainShopsIdGet**
> \Swagger\Client\Model\InlineResponse2005 chainShopsIdGet($id)

Get existing Chain Shop

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChainShopsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Shop

try {
    $result = $apiInstance->chainShopsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChainShopsApi->chainShopsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Shop |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

