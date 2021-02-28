# Swagger\Client\LoyaltyProgramRulesApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rulesGet**](LoyaltyProgramRulesApi.md#rulesget) | **GET** /rules | Get All Rules
[**rulesIdDelete**](LoyaltyProgramRulesApi.md#rulesiddelete) | **DELETE** /rules/{id} | Delete existing Rule
[**rulesIdGet**](LoyaltyProgramRulesApi.md#rulesidget) | **GET** /rules/{id} | Get existing Rule
[**rulesIdPut**](LoyaltyProgramRulesApi.md#rulesidput) | **PUT** /rules/{id} | Edit existing Rule
[**rulesPost**](LoyaltyProgramRulesApi.md#rulespost) | **POST** /rules | Add new Rule

# **rulesGet**
> \Swagger\Client\Model\ChainsRules rulesGet($pagination, $per_page, $page)

Get All Rules

Returns a Json with data about all rules of selected shop.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagination = true; // bool | Pagination parameter
$per_page = 56; // int | Results_per_page
$page = 56; // int | PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1)

try {
    $result = $apiInstance->rulesGet($pagination, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramRulesApi->rulesGet: ', $e->getMessage(), PHP_EOL;
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

# **rulesIdDelete**
> rulesIdDelete($id)

Delete existing Rule

In this case you must specify the id in the URL, but it is no necessary in the request body

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Rule that need to be deleted

try {
    $apiInstance->rulesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramRulesApi->rulesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Rule that need to be deleted |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rulesIdGet**
> \Swagger\Client\Model\ChainsRules rulesIdGet($id)

Get existing Rule

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Rule

try {
    $result = $apiInstance->rulesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramRulesApi->rulesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Rule |

### Return type

[**\Swagger\Client\Model\ChainsRules**](../Model/ChainsRules.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rulesIdPut**
> \Swagger\Client\Model\ChainsRules rulesIdPut($body, $id)

Edit existing Rule

In this case you must specify the id in the URL and change the data you wanna update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ChainsRules(); // \Swagger\Client\Model\ChainsRules | Object data that need to be updated
$id = "id_example"; // string | id of the Rule that need to be updated

try {
    $result = $apiInstance->rulesIdPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramRulesApi->rulesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ChainsRules**](../Model/ChainsRules.md)| Object data that need to be updated |
 **id** | **string**| id of the Rule that need to be updated |

### Return type

[**\Swagger\Client\Model\ChainsRules**](../Model/ChainsRules.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rulesPost**
> \Swagger\Client\Model\ChainsRules rulesPost($body)

Add new Rule

Returns a Json with the data of the new Rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LoyaltyProgramRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ChainsRules(); // \Swagger\Client\Model\ChainsRules | Rule object that needs to be added.

try {
    $result = $apiInstance->rulesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyProgramRulesApi->rulesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ChainsRules**](../Model/ChainsRules.md)| Rule object that needs to be added. |

### Return type

[**\Swagger\Client\Model\ChainsRules**](../Model/ChainsRules.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

