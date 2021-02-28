# Swagger\Client\CustomerOrdersApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersGet**](CustomerOrdersApi.md#ordersget) | **GET** /orders | Get All Orders
[**ordersIdDelete**](CustomerOrdersApi.md#ordersiddelete) | **DELETE** /orders/{id} | Delete existing Order
[**ordersIdGet**](CustomerOrdersApi.md#ordersidget) | **GET** /orders/{id} | Get existing Order
[**ordersIdPut**](CustomerOrdersApi.md#ordersidput) | **PUT** /orders/{id} | Edit existing Order
[**ordersPost**](CustomerOrdersApi.md#orderspost) | **POST** /orders | Add new Order

# **ordersGet**
> \Swagger\Client\Model\Orders ordersGet($pagination, $per_page, $page)

Get All Orders

Returns a Json with all orders of selected shop.  Paginated by default (per_page=1000).    **Orders status**  An order can be in open or closed status. If is open it can be edited. Each order can contain a 'previus_order' that is the previous version of the order, before last save (parcheggia) or print.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomerOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagination = true; // bool | Pagination parameter
$per_page = 56; // int | Results_per_page
$page = 56; // int | PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1)

try {
    $result = $apiInstance->ordersGet($pagination, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerOrdersApi->ordersGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\Orders**](../Model/Orders.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersIdDelete**
> ordersIdDelete($id)

Delete existing Order

In this case you must specify the id in the URL, but it is no necessary in the request body

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomerOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Order that need to be deleted

try {
    $apiInstance->ordersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerOrdersApi->ordersIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Order that need to be deleted |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersIdGet**
> \Swagger\Client\Model\Orders ordersIdGet($id)

Get existing Order

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomerOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the order

try {
    $result = $apiInstance->ordersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerOrdersApi->ordersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the order |

### Return type

[**\Swagger\Client\Model\Orders**](../Model/Orders.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersIdPut**
> \Swagger\Client\Model\Orders ordersIdPut($body, $id)

Edit existing Order

In this case you must specify the id in the URL and change the data you wanna update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomerOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Orders(); // \Swagger\Client\Model\Orders | Object data that need to be updated
$id = "id_example"; // string | id of the Order that need to be updated

try {
    $result = $apiInstance->ordersIdPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerOrdersApi->ordersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Orders**](../Model/Orders.md)| Object data that need to be updated |
 **id** | **string**| id of the Order that need to be updated |

### Return type

[**\Swagger\Client\Model\Orders**](../Model/Orders.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersPost**
> \Swagger\Client\Model\Orders ordersPost($body)

Add new Order

Returns a Json with the data of the new Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomerOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Orders(); // \Swagger\Client\Model\Orders | Order object that needs to be added.

try {
    $result = $apiInstance->ordersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerOrdersApi->ordersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Orders**](../Model/Orders.md)| Order object that needs to be added. |

### Return type

[**\Swagger\Client\Model\Orders**](../Model/Orders.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

