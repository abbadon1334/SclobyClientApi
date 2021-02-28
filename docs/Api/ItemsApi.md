# Swagger\Client\ItemsApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**itemsGet**](ItemsApi.md#itemsget) | **GET** /items | GET All items
[**itemsIdDelete**](ItemsApi.md#itemsiddelete) | **DELETE** /items/{id} | Delete existing Item
[**itemsIdGet**](ItemsApi.md#itemsidget) | **GET** /items/{id} | Get existing item
[**itemsIdPut**](ItemsApi.md#itemsidput) | **PUT** /items/{id} | Edit existing item
[**itemsPost**](ItemsApi.md#itemspost) | **POST** /items | Add new Item

# **itemsGet**
> \Swagger\Client\Model\Items itemsGet($pagination, $per_page, $page)

GET All items

Returns a Json with data about all items of selected shop.  Paginated by default (per_page=1000)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagination = true; // bool | Pagination param
$per_page = 56; // int | results_per_page
$page = 56; // int | PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1)

try {
    $result = $apiInstance->itemsGet($pagination, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pagination** | **bool**| Pagination param | [optional]
 **per_page** | **int**| results_per_page | [optional]
 **page** | **int**| PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1) | [optional]

### Return type

[**\Swagger\Client\Model\Items**](../Model/Items.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsIdDelete**
> itemsIdDelete($id)

Delete existing Item

In this case you must specify the id in the URL, but it is no necessary in the request body

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the item that need to be deleted

try {
    $apiInstance->itemsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the item that need to be deleted |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsIdGet**
> \Swagger\Client\Model\Items itemsIdGet($id)

Get existing item

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the item

try {
    $result = $apiInstance->itemsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the item |

### Return type

[**\Swagger\Client\Model\Items**](../Model/Items.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsIdPut**
> \Swagger\Client\Model\Items itemsIdPut($body, $id)

Edit existing item

In this case you must specify the id in the URL and change the data you wanna update.  As every scloby resource, you can do a PUT request. First of all you have to save the original content of the resource (simply doing a GET request), edit what do you want, and resend it in a PUT request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Items(); // \Swagger\Client\Model\Items | Object data that need to be updated
$id = "id_example"; // string | id of the item that need to be updated

try {
    $result = $apiInstance->itemsIdPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Items**](../Model/Items.md)| Object data that need to be updated |
 **id** | **string**| id of the item that need to be updated |

### Return type

[**\Swagger\Client\Model\Items**](../Model/Items.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsPost**
> \Swagger\Client\Model\Items itemsPost($body)

Add new Item

You must know first the **department id** and the **category id**. The category id can be not set, in this case its value will be null, and the item will be shown in the section No category of the app. If the item is a restaurant item you must know if he has **allergens** and insert the ids in the **allergents** node of json. If this item has **ingredients**, you can specify the **components** ids.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Items(); // \Swagger\Client\Model\Items | Item object that needs to be added.

try {
    $result = $apiInstance->itemsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Items**](../Model/Items.md)| Item object that needs to be added. |

### Return type

[**\Swagger\Client\Model\Items**](../Model/Items.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

