# Swagger\Client\ListGdprApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiListDistributionsListGdprGetSubresource**](ListGdprApi.md#apilistdistributionslistgdprgetsubresource) | **GET** /api/v1/list_distributions/{id}/list_gdpr | Retrieves a ListGdpr resource.

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


$apiInstance = new Swagger\Client\Api\ListGdprApi(
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
    echo 'Exception when calling ListGdprApi->apiListDistributionsListGdprGetSubresource: ', $e->getMessage(), PHP_EOL;
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

