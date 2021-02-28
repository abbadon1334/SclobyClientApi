# Swagger\Client\LoyaltyProgramPrizesApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**prizesGet**](LoyaltyProgramPrizesApi.md#prizesget) | **GET** /prizes | Get All Prizes
[**prizesIdDelete**](LoyaltyProgramPrizesApi.md#prizesiddelete) | **DELETE** /prizes/{id} | Delete existing Prize
[**prizesIdGet**](LoyaltyProgramPrizesApi.md#prizesidget) | **GET** /prizes/{id} | Get existing Prize
[**prizesIdPut**](LoyaltyProgramPrizesApi.md#prizesidput) | **PUT** /prizes/{id} | Edit existing Prize
[**prizesPost**](LoyaltyProgramPrizesApi.md#prizespost) | **POST** /prizes | Add new Prize

# **prizesGet**
> \Swagger\Client\Model\ChainsRules prizesGet($pagination, $per_page, $page)

Get All Prizes

Returns a Json with data about all prizes of selected shop.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramPrizesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagination = true; // bool | Pagination parameter
$per_page = 56; // int | Results_per_page
$page = 56; // int | PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1)

try {
    $result = $apiInstance->prizesGet($pagination, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramPrizesApi->prizesGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ChainsRules**](../Model/ChainsRules.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **prizesIdDelete**
> prizesIdDelete($id)

Delete existing Prize

In this case you must specify the id in the URL, but it is no necessary in the request body

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramPrizesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Prize that need to be deleted

try {
    $apiInstance->prizesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramPrizesApi->prizesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Prize that need to be deleted |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **prizesIdGet**
> \Swagger\Client\Model\ChainsPrizes prizesIdGet($id)

Get existing Prize

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramPrizesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Prize

try {
    $result = $apiInstance->prizesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramPrizesApi->prizesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Prize |

### Return type

[**\Swagger\Client\Model\ChainsPrizes**](../Model/ChainsPrizes.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **prizesIdPut**
> \Swagger\Client\Model\ChainsPrizes prizesIdPut($body, $id)

Edit existing Prize

In this case you must specify the id in the URL and change the data you wanna update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramPrizesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ChainsPrizes(); // \Swagger\Client\Model\ChainsPrizes | Object data that need to be updated
$id = "id_example"; // string | id of the Prize that need to be updated

try {
    $result = $apiInstance->prizesIdPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramPrizesApi->prizesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ChainsPrizes**](../Model/ChainsPrizes.md)| Object data that need to be updated |
 **id** | **string**| id of the Prize that need to be updated |

### Return type

[**\Swagger\Client\Model\ChainsPrizes**](../Model/ChainsPrizes.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **prizesPost**
> \Swagger\Client\Model\InlineResponse2012 prizesPost($body)

Add new Prize

Returns a Json with the data of the new Prize

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramPrizesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ChainsPrizes(); // \Swagger\Client\Model\ChainsPrizes | Prize object that needs to be added.

try {
    $result = $apiInstance->prizesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramPrizesApi->prizesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ChainsPrizes**](../Model/ChainsPrizes.md)| Prize object that needs to be added. |

### Return type

[**\Swagger\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

