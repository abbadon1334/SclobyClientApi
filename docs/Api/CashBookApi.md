# Swagger\Client\CashBookApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cashMovementsGet**](CashBookApi.md#cashmovementsget) | **GET** /cash_movements | Get All Cash Movements
[**cashMovementsIdDelete**](CashBookApi.md#cashmovementsiddelete) | **DELETE** /cash_movements/{id} | Delete existing Cash Movement
[**cashMovementsIdGet**](CashBookApi.md#cashmovementsidget) | **GET** /cash_movements/{id} | Get existing Cash Movement
[**cashMovementsIdPut**](CashBookApi.md#cashmovementsidput) | **PUT** /cash_movements/{id} | Edit existing Cash Movement
[**cashMovementsPost**](CashBookApi.md#cashmovementspost) | **POST** /cash_movements | Add new Cash movement

# **cashMovementsGet**
> \Swagger\Client\Model\CashMovements cashMovementsGet($pagination, $per_page, $page)

Get All Cash Movements

Returns a Json with data about all cash movements of selected shop.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CashBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagination = true; // bool | Pagination parameter
$per_page = 56; // int | Results_per_page
$page = 56; // int | PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1)

try {
    $result = $apiInstance->cashMovementsGet($pagination, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashBookApi->cashMovementsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CashMovements**](../Model/CashMovements.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cashMovementsIdDelete**
> cashMovementsIdDelete($id)

Delete existing Cash Movement

In this case you must specify the id in the URL, but it is no necessary in the request body

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CashBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Cash Movement that need to be deleted

try {
    $apiInstance->cashMovementsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CashBookApi->cashMovementsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Cash Movement that need to be deleted |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cashMovementsIdGet**
> \Swagger\Client\Model\CashMovements cashMovementsIdGet($id)

Get existing Cash Movement

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CashBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Cash Movement

try {
    $result = $apiInstance->cashMovementsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashBookApi->cashMovementsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Cash Movement |

### Return type

[**\Swagger\Client\Model\CashMovements**](../Model/CashMovements.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cashMovementsIdPut**
> \Swagger\Client\Model\CashMovements cashMovementsIdPut($body, $id)

Edit existing Cash Movement

In this case you must specify the id in the URL and change the data you wanna update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CashBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CashMovements(); // \Swagger\Client\Model\CashMovements | Object data that need to be updated
$id = "id_example"; // string | id of the Cash Movement that need to be updated

try {
    $result = $apiInstance->cashMovementsIdPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashBookApi->cashMovementsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CashMovements**](../Model/CashMovements.md)| Object data that need to be updated |
 **id** | **string**| id of the Cash Movement that need to be updated |

### Return type

[**\Swagger\Client\Model\CashMovements**](../Model/CashMovements.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cashMovementsPost**
> \Swagger\Client\Model\CashMovements cashMovementsPost($body)

Add new Cash movement

Returns a Json with the data of the new Cash movement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CashBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CashMovements(); // \Swagger\Client\Model\CashMovements | Cash movement object that needs to be added.

try {
    $result = $apiInstance->cashMovementsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashBookApi->cashMovementsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CashMovements**](../Model/CashMovements.md)| Cash movement object that needs to be added. |

### Return type

[**\Swagger\Client\Model\CashMovements**](../Model/CashMovements.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

