# Swagger\Client\PrepaidCreditMovementsApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**prepaidCustomersGet**](PrepaidCreditMovementsApi.md#prepaidcustomersget) | **GET** /prepaid_customers | Get list of Prepaid Customers
[**prepaidMovementsIdGet**](PrepaidCreditMovementsApi.md#prepaidmovementsidget) | **GET** /prepaid_movements/{id} | Get existing Prepaid Movement
[**prepaidMovementsPost**](PrepaidCreditMovementsApi.md#prepaidmovementspost) | **POST** /prepaid_movements | Add new Prepaid Movement

# **prepaidCustomersGet**
> prepaidCustomersGet($pagination, $per_page, $page)

Get list of Prepaid Customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PrepaidCreditMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagination = true; // bool | Pagination parameter
$per_page = 56; // int | Results_per_page
$page = 56; // int | PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1)

try {
    $apiInstance->prepaidCustomersGet($pagination, $per_page, $page);
} catch (Exception $e) {
    echo 'Exception when calling PrepaidCreditMovementsApi->prepaidCustomersGet: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **prepaidMovementsIdGet**
> \Swagger\Client\Model\ChainPrepaidMovements prepaidMovementsIdGet($id)

Get existing Prepaid Movement

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PrepaidCreditMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Prepaid Movement

try {
    $result = $apiInstance->prepaidMovementsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaidCreditMovementsApi->prepaidMovementsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Prepaid Movement |

### Return type

[**\Swagger\Client\Model\ChainPrepaidMovements**](../Model/ChainPrepaidMovements.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **prepaidMovementsPost**
> \Swagger\Client\Model\ChainPrepaidMovements prepaidMovementsPost($body, $pagination, $per_page, $page)

Add new Prepaid Movement

Returns a Json with the data of the new Prepaid Movement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PrepaidCreditMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ChainPrepaidMovements(); // \Swagger\Client\Model\ChainPrepaidMovements | Prepaid Movement object that needs to be added.
$pagination = true; // bool | Pagination parameter
$per_page = 56; // int | Results_per_page
$page = 56; // int | PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1)

try {
    $result = $apiInstance->prepaidMovementsPost($body, $pagination, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaidCreditMovementsApi->prepaidMovementsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ChainPrepaidMovements**](../Model/ChainPrepaidMovements.md)| Prepaid Movement object that needs to be added. |
 **pagination** | **bool**| Pagination parameter | [optional]
 **per_page** | **int**| Results_per_page | [optional]
 **page** | **int**| PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1) | [optional]

### Return type

[**\Swagger\Client\Model\ChainPrepaidMovements**](../Model/ChainPrepaidMovements.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

