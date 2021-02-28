# Swagger\Client\PrintersApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**printersGet**](PrintersApi.md#printersget) | **GET** /printers | Get All Printers
[**printersIdDelete**](PrintersApi.md#printersiddelete) | **DELETE** /printers/{id} | Delete existing Printer
[**printersIdGet**](PrintersApi.md#printersidget) | **GET** /printers/{id} | Get existing Printer
[**printersIdPut**](PrintersApi.md#printersidput) | **PUT** /printers/{id} | Edit existing Printer
[**printersPost**](PrintersApi.md#printerspost) | **POST** /printers | Add new Printer

# **printersGet**
> \Swagger\Client\Model\Printers printersGet($pagination, $per_page, $page)

Get All Printers

Returns a Json with data about all Printers of selected shop.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PrintersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagination = true; // bool | Pagination parameter
$per_page = 56; // int | Results_per_page
$page = 56; // int | PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1)

try {
    $result = $apiInstance->printersGet($pagination, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrintersApi->printersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pagination** | **bool**| Pagination parameter | [optional]
 **per_page** | **int**| Results_per_page | [optional]
 **page** | **int**| PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1) | [optional]

### Return type

[**\Swagger\Client\Model\Printers**](../Model/Printers.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **printersIdDelete**
> printersIdDelete($id)

Delete existing Printer

In this case you must specify the id in the URL, but it is no necessary in the request body

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PrintersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Printer that need to be deleted

try {
    $apiInstance->printersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PrintersApi->printersIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Printer that need to be deleted |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **printersIdGet**
> \Swagger\Client\Model\Printers printersIdGet($id)

Get existing Printer

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PrintersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Printer

try {
    $result = $apiInstance->printersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrintersApi->printersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Printer |

### Return type

[**\Swagger\Client\Model\Printers**](../Model/Printers.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **printersIdPut**
> \Swagger\Client\Model\Printers printersIdPut($body, $id)

Edit existing Printer

In this case you must specify the id in the URL and change the data you wanna update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PrintersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Printers(); // \Swagger\Client\Model\Printers | Object data that need to be updated
$id = "id_example"; // string | id of the Printer that need to be updated

try {
    $result = $apiInstance->printersIdPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrintersApi->printersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Printers**](../Model/Printers.md)| Object data that need to be updated |
 **id** | **string**| id of the Printer that need to be updated |

### Return type

[**\Swagger\Client\Model\Printers**](../Model/Printers.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **printersPost**
> \Swagger\Client\Model\Printers printersPost($body)

Add new Printer

Returns a Json with the data of the new Printer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PrintersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Printers(); // \Swagger\Client\Model\Printers | Printer object that needs to be added.

try {
    $result = $apiInstance->printersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrintersApi->printersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Printers**](../Model/Printers.md)| Printer object that needs to be added. |

### Return type

[**\Swagger\Client\Model\Printers**](../Model/Printers.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

