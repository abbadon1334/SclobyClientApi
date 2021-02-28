# Swagger\Client\SalesApi

All URIs are relative to *https://api.scloby.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesGet**](SalesApi.md#salesget) | **GET** /sales | Get All Sales
[**salesIdDelete**](SalesApi.md#salesiddelete) | **DELETE** /sales/{id} | Delete existing Sale
[**salesIdGet**](SalesApi.md#salesidget) | **GET** /sales/{id} | Get existing Sale
[**salesIdPut**](SalesApi.md#salesidput) | **PUT** /sales/{id} | Edit existing Sale
[**salesPost**](SalesApi.md#salespost) | **POST** /sales | Add new Sale

# **salesGet**
> \Swagger\Client\Model\Sales salesGet($pagination, $per_page, $page)

Get All Sales

Returns a Json with data about all sales of selected shop.  Paginated by default (per_page=1000)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagination = true; // bool | Pagination parameter
$per_page = 56; // int | Results_per_page
$page = 56; // int | PAGE_NUMBER(starting from 0 to TOTAL_PAGE-1)

try {
    $result = $apiInstance->salesGet($pagination, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\Sales**](../Model/Sales.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesIdDelete**
> salesIdDelete($id)

Delete existing Sale

In this case you must specify the id in the URL, but it is no necessary in the request body

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the Sale that need to be deleted

try {
    $apiInstance->salesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the Sale that need to be deleted |

### Return type

void (empty response body)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesIdGet**
> \Swagger\Client\Model\Sales salesIdGet($id)

Get existing Sale

In this case you must specify the id in the URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the sale

try {
    $result = $apiInstance->salesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the sale |

### Return type

[**\Swagger\Client\Model\Sales**](../Model/Sales.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesIdPut**
> \Swagger\Client\Model\Sales salesIdPut($body, $id)

Edit existing Sale

In this case you must specify the id in the URL and change the data you wanna update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Sales(); // \Swagger\Client\Model\Sales | Object data that need to be updated
$id = "id_example"; // string | id of the Sale that need to be updated

try {
    $result = $apiInstance->salesIdPut($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Sales**](../Model/Sales.md)| Object data that need to be updated |
 **id** | **string**| id of the Sale that need to be updated |

### Return type

[**\Swagger\Client\Model\Sales**](../Model/Sales.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesPost**
> \Swagger\Client\Model\Sales salesPost($body)

Add new Sale

Returns a Json with the data of the new Sale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth2AuthCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Sales(); // \Swagger\Client\Model\Sales | **Sale.sale_items attributes explanaion**

A sale contains an array named sale_items, that contains the items (and its discount/surcharges) you want to sell.



Each item has the following important attributes:

- **department_id**: The integer id of department (see /departments endpoint) related to this item, it is very important because the italian fiscal printers want to know exactly which is the department for each item sold, because for each department there is a VAT percentage ( see /vat endpoint ) that the printer know for its internal fiscal aggregates.

- **department_name**: The name of related department.

- **vat_perc**: The VAT percentage for this related department.

- **item_id**: The integer id of item sold (not necessary but useful).

- **name**: The name of the item sold,

- **price**: Unit price of this item (before surcharge and discount).

- **quantity**: Sold quantity of this item, can be decimal and negative in refund case.

- **type**: Can be 'Sale' (quantity > 0), 'refund' (quantity < 0) or 'gift' (price = 0)

- **uuid**: That identifies univocally the sale item (in UUID standard format).

- **price_changes**: Each sale item can have an array of discount/surcharges that is called price_changes, and is applied to price in the order specified by each index.Each price_change is composed by:

 1. **description**: A textual description of this discount/surcharge.

 2. **index**: An integer number that is used for order apply.

 3. **type**: Can be: 

 - **discount_fix**: Is if a fixed value discount, for example a discount of 1.00 €.

- **discount_perc**: If is a percentage discount, for example 10 % discount.

 - **surcharge_fix**: If is a fixed value surcharge, for example a surcharge of 1.00 €.

 - **surcharge_perc**: If is a percentage value surchage, for example a surcharge of 10 %. 

 4. **value**: Value of this discount/surcharge.

 Example:

 - Case of 1.00 € discount/surcharge (discount_fix/surcharge_fix), 'value':1.00

- Case of 10 % discount/surcharge (discount_perc/surcharge_perc), 'value':10.00

 - **final_price**:  Unit price, with applied its surcharge and discounts and a quota of global discount/surcharges (in sale document), VAT included Example. 

  If a sale item has quantity 2, a price and 2 price_changes: 1st element discount_perc (index = 1) and 2nd element surcharge_fix (index = 0), and 1 global discount_fix and 1 global discount_perc



 var partial_final_price = sale_item.price sale_item.quantity

 [ sale_item.price_changes[1].index = 0 ] partial_final_price = partial_final_price + sale_item.price_changes[1].value

  [ sale_item.price_changes[1].index = 1 ] partial_final_price = partial_final_price ( 1 - sale_item.price_changes[0].value/100 )

Partial final price with global discount/surcharge quota:var total_discounted = sale.amount - sale.price_changes[0].value

   total_discounted += sale.amount - (sale.amount * sale.price_changes[1].value/100)

   var total_discount = sale.amount - total_discounted

 partial_final_price = partial_final_price - (total_discount * partial_final_price / sale.amount)sale_item.final_price = partial_final_price / sale_item.quantity


- final_net_price: Unit price, with applied surcharge and discounts, VAT excluded sale_item.final_net_price = sale_item.final_price / ( 1 + sale_item.vat_perc)

 **Sale attributes explanation**

A sale is composed by a group of general attributes, in particular we must put attention on sale amounts, global discounts and surcharges:

 - **price_changes**: Each sale can have an array of discount/surcharges that is called price_changes, and is applied to amount in the order specified by each index.

Each price_change is composed by:

 1. **description**: A textual description of this discount/surcharge.

2. **index**: An integer number that is used for order apply.

 3. **type**: can be: 

 **discount_fix**: Is if a fixed value discount, for example a discount of 1.00 €

**discount_perc**: If is a percentage discount, for example 10 % discount

**surcharge_fix**: If is a fixed value surcharge, for example a surcharge of 1.00 €.

**surcharge_perc**: If is a percentage value surchage, for example a surcharge of 10 %


4. **value**: Value of this discount/surcharge. Example: 


  1. Case of 1.00 € discount/surcharge (discount_fix/surcharge_fix), 'value':1.00

 2.Case of 10 % discount/surcharge (discount_perc/surcharge_perc), 'value':10.00

 **amount**: Sum of price quantity + discount/surcharges of all sale_items, global discount/surcharges (that is applied on amount*) is excluded.

 Example 1: If a sale has 3 items sale_items in sale items array, each with 1 discount_fix:

  sale.amount = sale.sale_items[0].quantity * sale.sale_items[0].price - sale.sale_items[0].price_changes[0].value + sale.sale_items[1].quantity * sale.sale_items[1].price - sale.sale_items[1].price_changes[0].value +sale.sale_items[2].quantity * sale.sale_items[2].price - sale.sale_items[0].price_changes[0].value

 Example 2:If a sale has 2 items sale_items in sale items array, each with 1 discount_perc (index = 0) and 1 surcharge_fix (index = 1):

var partial_item_1 = sale.sale_items[0].quantity * sale.sale_items[0].price partial_item_1 = partial_item_1 - sale.sale_items[0].price_changes[0].value partial_item_1 = partial_item_1 * ( 1 + sale.sale_items[0].price_changes[1].value/10 )

  var partial_item_2 = sale.sale_items[1].quantity * sale.sale_items[1].price partial_item_2 = partial_item_2 - sale.sale_items[1].price_changes[0].value partial_item_2 = partial_item_2 * ( 1 + sale.sale_items[1].price_changes[1].value/100 ) 

 sale.amount = partial_item_1 + partial_item_2


 - **final_amount**: Sum of (price quantity) + discount/surcharges of all sale_items, global discount/surcharges (that is applied on amount*) is included.

 Example 1A) If a sale has 3 items sale_items in sale items array, each with 1 discount_fix (like example 1), and 3 global price_changes (first with type = discount_perc and index = 0, second with type = surcharge_fix and index = 1, third with type = surcharge_perc and index = 2):

 sale.final_amount = sale.amount * ( 1 - sale.price_changes[0].value/100)

sale.final_amount = sale.final_amount + sale.price_change[1].value

sale.final_amount = sale.final_amount * ( 1 + sale.price_change[1].value/100 )


 **final_net_amount**: Is the sum of each sale_item_net_price.


Sale POST Data example

try {
    $result = $apiInstance->salesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Sales**](../Model/Sales.md)| **Sale.sale_items attributes explanaion**

A sale contains an array named sale_items, that contains the items (and its discount/surcharges) you want to sell.



Each item has the following important attributes:

- **department_id**: The integer id of department (see /departments endpoint) related to this item, it is very important because the italian fiscal printers want to know exactly which is the department for each item sold, because for each department there is a VAT percentage ( see /vat endpoint ) that the printer know for its internal fiscal aggregates.

- **department_name**: The name of related department.

- **vat_perc**: The VAT percentage for this related department.

- **item_id**: The integer id of item sold (not necessary but useful).

- **name**: The name of the item sold,

- **price**: Unit price of this item (before surcharge and discount).

- **quantity**: Sold quantity of this item, can be decimal and negative in refund case.

- **type**: Can be &#x27;Sale&#x27; (quantity &gt; 0), &#x27;refund&#x27; (quantity &lt; 0) or &#x27;gift&#x27; (price &#x3D; 0)

- **uuid**: That identifies univocally the sale item (in UUID standard format).

- **price_changes**: Each sale item can have an array of discount/surcharges that is called price_changes, and is applied to price in the order specified by each index.Each price_change is composed by:

 1. **description**: A textual description of this discount/surcharge.

 2. **index**: An integer number that is used for order apply.

 3. **type**: Can be: 

 - **discount_fix**: Is if a fixed value discount, for example a discount of 1.00 €.

- **discount_perc**: If is a percentage discount, for example 10 % discount.

 - **surcharge_fix**: If is a fixed value surcharge, for example a surcharge of 1.00 €.

 - **surcharge_perc**: If is a percentage value surchage, for example a surcharge of 10 %. 

 4. **value**: Value of this discount/surcharge.

 Example:

 - Case of 1.00 € discount/surcharge (discount_fix/surcharge_fix), &#x27;value&#x27;:1.00

- Case of 10 % discount/surcharge (discount_perc/surcharge_perc), &#x27;value&#x27;:10.00

 - **final_price**:  Unit price, with applied its surcharge and discounts and a quota of global discount/surcharges (in sale document), VAT included Example. 

  If a sale item has quantity 2, a price and 2 price_changes: 1st element discount_perc (index &#x3D; 1) and 2nd element surcharge_fix (index &#x3D; 0), and 1 global discount_fix and 1 global discount_perc



 var partial_final_price &#x3D; sale_item.price sale_item.quantity

 [ sale_item.price_changes[1].index &#x3D; 0 ] partial_final_price &#x3D; partial_final_price + sale_item.price_changes[1].value

  [ sale_item.price_changes[1].index &#x3D; 1 ] partial_final_price &#x3D; partial_final_price ( 1 - sale_item.price_changes[0].value/100 )

Partial final price with global discount/surcharge quota:var total_discounted &#x3D; sale.amount - sale.price_changes[0].value

   total_discounted +&#x3D; sale.amount - (sale.amount * sale.price_changes[1].value/100)

   var total_discount &#x3D; sale.amount - total_discounted

 partial_final_price &#x3D; partial_final_price - (total_discount * partial_final_price / sale.amount)sale_item.final_price &#x3D; partial_final_price / sale_item.quantity


- final_net_price: Unit price, with applied surcharge and discounts, VAT excluded sale_item.final_net_price &#x3D; sale_item.final_price / ( 1 + sale_item.vat_perc)

 **Sale attributes explanation**

A sale is composed by a group of general attributes, in particular we must put attention on sale amounts, global discounts and surcharges:

 - **price_changes**: Each sale can have an array of discount/surcharges that is called price_changes, and is applied to amount in the order specified by each index.

Each price_change is composed by:

 1. **description**: A textual description of this discount/surcharge.

2. **index**: An integer number that is used for order apply.

 3. **type**: can be: 

 **discount_fix**: Is if a fixed value discount, for example a discount of 1.00 €

**discount_perc**: If is a percentage discount, for example 10 % discount

**surcharge_fix**: If is a fixed value surcharge, for example a surcharge of 1.00 €.

**surcharge_perc**: If is a percentage value surchage, for example a surcharge of 10 %


4. **value**: Value of this discount/surcharge. Example: 


  1. Case of 1.00 € discount/surcharge (discount_fix/surcharge_fix), &#x27;value&#x27;:1.00

 2.Case of 10 % discount/surcharge (discount_perc/surcharge_perc), &#x27;value&#x27;:10.00

 **amount**: Sum of price quantity + discount/surcharges of all sale_items, global discount/surcharges (that is applied on amount*) is excluded.

 Example 1: If a sale has 3 items sale_items in sale items array, each with 1 discount_fix:

  sale.amount &#x3D; sale.sale_items[0].quantity * sale.sale_items[0].price - sale.sale_items[0].price_changes[0].value + sale.sale_items[1].quantity * sale.sale_items[1].price - sale.sale_items[1].price_changes[0].value +sale.sale_items[2].quantity * sale.sale_items[2].price - sale.sale_items[0].price_changes[0].value

 Example 2:If a sale has 2 items sale_items in sale items array, each with 1 discount_perc (index &#x3D; 0) and 1 surcharge_fix (index &#x3D; 1):

var partial_item_1 &#x3D; sale.sale_items[0].quantity * sale.sale_items[0].price partial_item_1 &#x3D; partial_item_1 - sale.sale_items[0].price_changes[0].value partial_item_1 &#x3D; partial_item_1 * ( 1 + sale.sale_items[0].price_changes[1].value/10 )

  var partial_item_2 &#x3D; sale.sale_items[1].quantity * sale.sale_items[1].price partial_item_2 &#x3D; partial_item_2 - sale.sale_items[1].price_changes[0].value partial_item_2 &#x3D; partial_item_2 * ( 1 + sale.sale_items[1].price_changes[1].value/100 ) 

 sale.amount &#x3D; partial_item_1 + partial_item_2


 - **final_amount**: Sum of (price quantity) + discount/surcharges of all sale_items, global discount/surcharges (that is applied on amount*) is included.

 Example 1A) If a sale has 3 items sale_items in sale items array, each with 1 discount_fix (like example 1), and 3 global price_changes (first with type &#x3D; discount_perc and index &#x3D; 0, second with type &#x3D; surcharge_fix and index &#x3D; 1, third with type &#x3D; surcharge_perc and index &#x3D; 2):

 sale.final_amount &#x3D; sale.amount * ( 1 - sale.price_changes[0].value/100)

sale.final_amount &#x3D; sale.final_amount + sale.price_change[1].value

sale.final_amount &#x3D; sale.final_amount * ( 1 + sale.price_change[1].value/100 )


 **final_net_amount**: Is the sum of each sale_item_net_price.


Sale POST Data example |

### Return type

[**\Swagger\Client\Model\Sales**](../Model/Sales.md)

### Authorization

[oAuth2AuthCode](../../README.md#oAuth2AuthCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

