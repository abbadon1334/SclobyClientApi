# Swagger\Client\WarehouseStockMovementsApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**stockMovementsGet**](WarehouseStockMovementsApi.md#stockmovementsget) | **GET** /stock_movements | Get All Stock Movements
[**stockMovementsIdDelete**](WarehouseStockMovementsApi.md#stockmovementsiddelete) | **DELETE** /stock_movements/{id} | Delete existing Stock Movement
[**stockMovementsIdGet**](WarehouseStockMovementsApi.md#stockmovementsidget) | **GET** /stock_movements/{id} | Get existing stock movement
[**stockMovementsIdPut**](WarehouseStockMovementsApi.md#stockmovementsidput) | **PUT** /stock_movements/{id} | Edit existing Stock Movement
[**stockMovementsPost**](WarehouseStockMovementsApi.md#stockmovementspost) | **POST** /stock_movements | Add new Stock Movements

# **stockMovementsGet**
> \Swagger\Client\Model\StockMovements stockMovementsGet($pagination, $per_page, $page)

Get All Stock Movements

Returns a Json with data about all stock movements of selected shop.  Paginated by default (default per_page = 1000)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\WarehouseStockMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagination = true; // bool | Pagination parameter
$per_page = 56; // int | Results_per_page
$page = 56; // int | PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1)

try {
    $result = $apiInstance->stockMovementsGet($pagination, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementsApi->stockMovementsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\StockMovements**](../Model/StockMovements.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stockMovementsIdDelete**
> stockMovementsIdDelete($id)

Delete existing Stock Movement

In this case you must specify the id in the URL, but it is no necessary in the request body

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\WarehouseStockMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Stock Movement that need to be deleted

try {
    $apiInstance->stockMovementsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementsApi->stockMovementsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Stock Movement that need to be deleted |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stockMovementsIdGet**
> \Swagger\Client\Model\StockMovements stockMovementsIdGet($id)

Get existing stock movement

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\WarehouseStockMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the stock movement

try {
    $result = $apiInstance->stockMovementsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementsApi->stockMovementsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the stock movement |

### Return type

[**\Swagger\Client\Model\StockMovements**](../Model/StockMovements.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stockMovementsIdPut**
> \Swagger\Client\Model\StockMovements stockMovementsIdPut($body, $id)

Edit existing Stock Movement

In this case you must specify the id in the URL and change the data you wanna update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\WarehouseStockMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\StockMovements(); // \Swagger\Client\Model\StockMovements | Object data that need to be updated
$id = "id_example"; // string | id of the stock movement that need to be updated

try {
    $result = $apiInstance->stockMovementsIdPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementsApi->stockMovementsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\StockMovements**](../Model/StockMovements.md)| Object data that need to be updated |
 **id** | **string**| id of the stock movement that need to be updated |

### Return type

[**\Swagger\Client\Model\StockMovements**](../Model/StockMovements.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stockMovementsPost**
> \Swagger\Client\Model\StockMovements stockMovementsPost($body)

Add new Stock Movements

Returns a Json with the data of the new Stock Movements.  **Stock movements type**  Each Stock Movement can be one of these three types: - load (increase quantity) - unload (decrease quantity) - setup (set quantity)  and can be referred to: - Item (item_id is not null and raw_material is null) - Raw Material (raw_material_id is not null and item_id is null)   **Stock movements causes**  Load causes: - buy - refund - gift - replacement - production   Unload causes: - sale - gift - move - damage - theft - replacement - waste

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\WarehouseStockMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\StockMovements(); // \Swagger\Client\Model\StockMovements | Item object that needs to be added.

try {
    $result = $apiInstance->stockMovementsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementsApi->stockMovementsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\StockMovements**](../Model/StockMovements.md)| Item object that needs to be added. |

### Return type

[**\Swagger\Client\Model\StockMovements**](../Model/StockMovements.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

