# Swagger\Client\LoyaltyProgramCampaignsApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignsGet**](LoyaltyProgramCampaignsApi.md#campaignsget) | **GET** /campaigns | Get All Campaigns
[**campaignsIdDelete**](LoyaltyProgramCampaignsApi.md#campaignsiddelete) | **DELETE** /campaigns/{id} | Delete existing Campaign
[**campaignsIdGet**](LoyaltyProgramCampaignsApi.md#campaignsidget) | **GET** /campaigns/{id} | Get existing Campaign
[**campaignsIdPut**](LoyaltyProgramCampaignsApi.md#campaignsidput) | **PUT** /campaigns/{id} | Edit existing Campaign
[**campaignsPost**](LoyaltyProgramCampaignsApi.md#campaignspost) | **POST** /campaigns | Add new Campaign

# **campaignsGet**
> \Swagger\Client\Model\ChainsCampaigns campaignsGet($pagination, $per_page, $page)

Get All Campaigns

Returns a Json with data about all campaigns of selected shop.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagination = true; // bool | Pagination parameter
$per_page = 56; // int | Results_per_page
$page = 56; // int | PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1)

try {
    $result = $apiInstance->campaignsGet($pagination, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramCampaignsApi->campaignsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ChainsCampaigns**](../Model/ChainsCampaigns.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsIdDelete**
> campaignsIdDelete($id)

Delete existing Campaign

In this case you must specify the id in the URL, but it is no necessary in the request body

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Campaign that need to be deleted

try {
    $apiInstance->campaignsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramCampaignsApi->campaignsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Campaign that need to be deleted |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsIdGet**
> \Swagger\Client\Model\ChainsCampaigns campaignsIdGet($id)

Get existing Campaign

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Campaign

try {
    $result = $apiInstance->campaignsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramCampaignsApi->campaignsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Campaign |

### Return type

[**\Swagger\Client\Model\ChainsCampaigns**](../Model/ChainsCampaigns.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsIdPut**
> \Swagger\Client\Model\ChainsCampaigns campaignsIdPut($body, $id)

Edit existing Campaign

In this case you must specify the id in the URL and change the data you wanna update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ChainsCampaigns(); // \Swagger\Client\Model\ChainsCampaigns | Object data that need to be updated
$id = "id_example"; // string | id of the Campaign that need to be updated

try {
    $result = $apiInstance->campaignsIdPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramCampaignsApi->campaignsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ChainsCampaigns**](../Model/ChainsCampaigns.md)| Object data that need to be updated |
 **id** | **string**| id of the Campaign that need to be updated |

### Return type

[**\Swagger\Client\Model\ChainsCampaigns**](../Model/ChainsCampaigns.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsPost**
> \Swagger\Client\Model\ChainsCampaigns campaignsPost($body)

Add new Campaign

Returns a Json with the data of the new Campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ChainsCampaigns(); // \Swagger\Client\Model\ChainsCampaigns | Campaign object that needs to be added.

try {
    $result = $apiInstance->campaignsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramCampaignsApi->campaignsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ChainsCampaigns**](../Model/ChainsCampaigns.md)| Campaign object that needs to be added. |

### Return type

[**\Swagger\Client\Model\ChainsCampaigns**](../Model/ChainsCampaigns.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

