# Swagger\Client\VatRatesApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vatGet**](VatRatesApi.md#vatget) | **GET** /vat | Get All VAT Rates
[**vatIdDelete**](VatRatesApi.md#vatiddelete) | **DELETE** /vat/{id} | Delete existing Vat rate
[**vatIdGet**](VatRatesApi.md#vatidget) | **GET** /vat/{id} | Get existing Vat
[**vatIdPut**](VatRatesApi.md#vatidput) | **PUT** /vat/{id} | Edit existing Vat
[**vatPost**](VatRatesApi.md#vatpost) | **POST** /vat | Add new Vat rate

# **vatGet**
> \Swagger\Client\Model\Vat vatGet()

Get All VAT Rates

Returns a Json with data about all vat rates ('Aliquote IVA' in Italy) of selected shop.  VAT Rates can be 4 at maximum.  Not Paginated by default

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\VatRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->vatGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VatRatesApi->vatGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Vat**](../Model/Vat.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vatIdDelete**
> vatIdDelete($id)

Delete existing Vat rate

In this case you must specify the id in the URL, but it is no necessary in the request body

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\VatRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Vat that need to be deleted

try {
    $apiInstance->vatIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling VatRatesApi->vatIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Vat that need to be deleted |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vatIdGet**
> \Swagger\Client\Model\Vat vatIdGet($id)

Get existing Vat

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\VatRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the vat

try {
    $result = $apiInstance->vatIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VatRatesApi->vatIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the vat |

### Return type

[**\Swagger\Client\Model\Vat**](../Model/Vat.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vatIdPut**
> \Swagger\Client\Model\Vat vatIdPut($body, $id)

Edit existing Vat

In this case you must specify the id in the URL and change the data you wanna update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\VatRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Vat(); // \Swagger\Client\Model\Vat | Object data that need to be updated
$id = "id_example"; // string | id of the Vat that need to be updated

try {
    $result = $apiInstance->vatIdPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VatRatesApi->vatIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Vat**](../Model/Vat.md)| Object data that need to be updated |
 **id** | **string**| id of the Vat that need to be updated |

### Return type

[**\Swagger\Client\Model\Vat**](../Model/Vat.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vatPost**
> \Swagger\Client\Model\Vat vatPost($body)

Add new Vat rate

NB: You have to specify the **id** you want to assign.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\VatRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Vat(); // \Swagger\Client\Model\Vat | Vat object that needs to be added.

try {
    $result = $apiInstance->vatPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VatRatesApi->vatPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Vat**](../Model/Vat.md)| Vat object that needs to be added. |

### Return type

[**\Swagger\Client\Model\Vat**](../Model/Vat.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

