# Swagger\Client\ShiftsApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookingShiftsGet**](ShiftsApi.md#bookingshiftsget) | **GET** /booking_shifts | GET All Shifts
[**bookingShiftsIdDelete**](ShiftsApi.md#bookingshiftsiddelete) | **DELETE** /booking_shifts/{id} | Delete existing shift
[**bookingShiftsIdGet**](ShiftsApi.md#bookingshiftsidget) | **GET** /booking_shifts/{id} | Get existing Shift
[**bookingShiftsIdPut**](ShiftsApi.md#bookingshiftsidput) | **PUT** /booking_shifts/{id} | Edit existing shift
[**bookingShiftsPost**](ShiftsApi.md#bookingshiftspost) | **POST** /booking_shifts | Add Shift

# **bookingShiftsGet**
> \Swagger\Client\Model\BookingShifts bookingShiftsGet($pagination, $per_page, $page)

GET All Shifts

Returns a Json with data about all Shifts of selected shop.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ShiftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagination = true; // bool | Pagination parameter
$per_page = 56; // int | Results_per_page
$page = 56; // int | PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1)

try {
    $result = $apiInstance->bookingShiftsGet($pagination, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShiftsApi->bookingShiftsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\BookingShifts**](../Model/BookingShifts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingShiftsIdDelete**
> bookingShiftsIdDelete($id)

Delete existing shift

In this case you must specify the id in the URL, but it is no necessary in the request body

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ShiftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the shift that need to be deleted

try {
    $apiInstance->bookingShiftsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ShiftsApi->bookingShiftsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the shift that need to be deleted |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingShiftsIdGet**
> \Swagger\Client\Model\BookingShifts bookingShiftsIdGet($id)

Get existing Shift

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ShiftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the shift

try {
    $result = $apiInstance->bookingShiftsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShiftsApi->bookingShiftsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the shift |

### Return type

[**\Swagger\Client\Model\BookingShifts**](../Model/BookingShifts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingShiftsIdPut**
> \Swagger\Client\Model\InlineResponse200 bookingShiftsIdPut($body, $id)

Edit existing shift

In this case you must specify the id in the URL and change the data you wanna update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ShiftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BookingShifts(); // \Swagger\Client\Model\BookingShifts | Object data that need to be updated
$id = "id_example"; // string | id of the shift that need to be updated

try {
    $result = $apiInstance->bookingShiftsIdPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShiftsApi->bookingShiftsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BookingShifts**](../Model/BookingShifts.md)| Object data that need to be updated |
 **id** | **string**| id of the shift that need to be updated |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingShiftsPost**
> \Swagger\Client\Model\BookingShifts bookingShiftsPost($body)

Add Shift

Returns a Json with the data of the new shift

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ShiftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BookingShifts(); // \Swagger\Client\Model\BookingShifts | Shift object that needs to be added to the selected shop.

try {
    $result = $apiInstance->bookingShiftsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShiftsApi->bookingShiftsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BookingShifts**](../Model/BookingShifts.md)| Shift object that needs to be added to the selected shop. |

### Return type

[**\Swagger\Client\Model\BookingShifts**](../Model/BookingShifts.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

