# Swagger\Client\RawMaterialsApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rawMaterialsGet**](RawMaterialsApi.md#rawmaterialsget) | **GET** /raw_materials | Get All Raw Materials
[**rawMaterialsIdDelete**](RawMaterialsApi.md#rawmaterialsiddelete) | **DELETE** /raw_materials/{id} | Delete existing Raw material
[**rawMaterialsIdGet**](RawMaterialsApi.md#rawmaterialsidget) | **GET** /raw_materials/{id} | Get existing raw Material
[**rawMaterialsIdPut**](RawMaterialsApi.md#rawmaterialsidput) | **PUT** /raw_materials/{id} | Edit existing Raw material
[**rawMaterialsPost**](RawMaterialsApi.md#rawmaterialspost) | **POST** /raw_materials | Add new Raw material

# **rawMaterialsGet**
> \Swagger\Client\Model\RawMaterial rawMaterialsGet($pagination, $per_page, $page)

Get All Raw Materials

Return a JSON with data about all Raw materials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RawMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagination = true; // bool | Pagination parameter
$per_page = 56; // int | Results_per_page
$page = 56; // int | PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1)

try {
    $result = $apiInstance->rawMaterialsGet($pagination, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RawMaterialsApi->rawMaterialsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RawMaterial**](../Model/RawMaterial.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rawMaterialsIdDelete**
> rawMaterialsIdDelete($id)

Delete existing Raw material

In this case you must specify the id in the URL, but it is no necessary in the request body

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RawMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the raw material that need to be deleted

try {
    $apiInstance->rawMaterialsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling RawMaterialsApi->rawMaterialsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the raw material that need to be deleted |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rawMaterialsIdGet**
> \Swagger\Client\Model\RawMaterial rawMaterialsIdGet($id)

Get existing raw Material

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RawMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Raw material

try {
    $result = $apiInstance->rawMaterialsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RawMaterialsApi->rawMaterialsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Raw material |

### Return type

[**\Swagger\Client\Model\RawMaterial**](../Model/RawMaterial.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rawMaterialsIdPut**
> \Swagger\Client\Model\RawMaterial rawMaterialsIdPut($body, $id)

Edit existing Raw material

In this case you must specify the id in the URL and change the data you wanna update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RawMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RawMaterial(); // \Swagger\Client\Model\RawMaterial | Object data that need to be updated
$id = "id_example"; // string | id of the raw material that need to be updated

try {
    $result = $apiInstance->rawMaterialsIdPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RawMaterialsApi->rawMaterialsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RawMaterial**](../Model/RawMaterial.md)| Object data that need to be updated |
 **id** | **string**| id of the raw material that need to be updated |

### Return type

[**\Swagger\Client\Model\RawMaterial**](../Model/RawMaterial.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rawMaterialsPost**
> \Swagger\Client\Model\RawMaterial rawMaterialsPost($body)

Add new Raw material

Returns a Json with the data of the new raw material

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RawMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RawMaterial(); // \Swagger\Client\Model\RawMaterial | Item object that needs to be added.

try {
    $result = $apiInstance->rawMaterialsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RawMaterialsApi->rawMaterialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RawMaterial**](../Model/RawMaterial.md)| Item object that needs to be added. |

### Return type

[**\Swagger\Client\Model\RawMaterial**](../Model/RawMaterial.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

