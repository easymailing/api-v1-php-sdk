# Swagger\Client\ListDistributionApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiListDistributionsListGdprGetSubresource**](ListDistributionApi.md#apilistdistributionslistgdprgetsubresource) | **GET** /api/v1/list_distributions/{id}/list_gdpr | Retrieves a ListGdpr resource.
[**apiListDistributionsListSegmentsGetSubresource**](ListDistributionApi.md#apilistdistributionslistsegmentsgetsubresource) | **GET** /api/v1/list_distributions/{id}/list_segments | Retrieves the collection of ListSegment resources.

# **apiListDistributionsListGdprGetSubresource**
> \Swagger\Client\Model\ListGdprJsonld apiListDistributionsListGdprGetSubresource($id)

Retrieves a ListGdpr resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ListDistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiListDistributionsListGdprGetSubresource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListDistributionApi->apiListDistributionsListGdprGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ListGdprJsonld**](../Model/ListGdprJsonld.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiListDistributionsListSegmentsGetSubresource**
> \Swagger\Client\Model\InlineResponse2003 apiListDistributionsListSegmentsGetSubresource($id, $page)

Retrieves the collection of ListSegment resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ListDistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiListDistributionsListSegmentsGetSubresource($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListDistributionApi->apiListDistributionsListSegmentsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

