# Swagger\Client\LoyaltyProgramPointsMovementsApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fidelitiesMovementsGet**](LoyaltyProgramPointsMovementsApi.md#fidelitiesmovementsget) | **GET** /fidelities_movements | Get All Fidelity Movements
[**fidelitiesMovementsIdGet**](LoyaltyProgramPointsMovementsApi.md#fidelitiesmovementsidget) | **GET** /fidelities_movements/{id} | Get existing Fidelity Movement
[**fidelitiesMovementsPost**](LoyaltyProgramPointsMovementsApi.md#fidelitiesmovementspost) | **POST** /fidelities_movements | Add new Fidelity Movement

# **fidelitiesMovementsGet**
> \Swagger\Client\Model\ChainsFidelitiesMovements fidelitiesMovementsGet($pagination, $per_page, $page)

Get All Fidelity Movements

Returns a Json with data about all fidelity movements of selected shop.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramPointsMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagination = true; // bool | Pagination parameter
$per_page = 56; // int | Results_per_page
$page = 56; // int | PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1)

try {
    $result = $apiInstance->fidelitiesMovementsGet($pagination, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramPointsMovementsApi->fidelitiesMovementsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ChainsFidelitiesMovements**](../Model/ChainsFidelitiesMovements.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fidelitiesMovementsIdGet**
> \Swagger\Client\Model\ChainsFidelitiesMovements fidelitiesMovementsIdGet($id)

Get existing Fidelity Movement

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramPointsMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Fidelity Movement

try {
    $result = $apiInstance->fidelitiesMovementsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramPointsMovementsApi->fidelitiesMovementsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Fidelity Movement |

### Return type

[**\Swagger\Client\Model\ChainsFidelitiesMovements**](../Model/ChainsFidelitiesMovements.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fidelitiesMovementsPost**
> \Swagger\Client\Model\ChainsFidelitiesMovements fidelitiesMovementsPost($body)

Add new Fidelity Movement

Returns a Json with the data of the new Fidelity Movement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramPointsMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ChainsFidelitiesMovements(); // \Swagger\Client\Model\ChainsFidelitiesMovements | Fidelity Movement object that needs to be added.

try {
    $result = $apiInstance->fidelitiesMovementsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramPointsMovementsApi->fidelitiesMovementsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ChainsFidelitiesMovements**](../Model/ChainsFidelitiesMovements.md)| Fidelity Movement object that needs to be added. |

### Return type

[**\Swagger\Client\Model\ChainsFidelitiesMovements**](../Model/ChainsFidelitiesMovements.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

