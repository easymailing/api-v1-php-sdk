# Swagger\Client\SuscriberApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSuscriberCollection**](SuscriberApi.md#getsuscribercollection) | **GET** /api/v1/suscribers | Retrieves the collection of Suscriber resources.
[**getSuscriberItem**](SuscriberApi.md#getsuscriberitem) | **GET** /api/v1/suscribers/{id} | Retrieves a Suscriber resource.
[**postSuscriberCollection**](SuscriberApi.md#postsuscribercollection) | **POST** /api/v1/suscribers | Creates a Suscriber resource.
[**putSuscriberItem**](SuscriberApi.md#putsuscriberitem) | **PUT** /api/v1/suscribers/{id} | Replaces the Suscriber resource.

# **getSuscriberCollection**
> \Swagger\Client\Model\InlineResponse2007 getSuscriberCollection($page)

Retrieves the collection of Suscriber resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SuscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getSuscriberCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuscriberApi->getSuscriberCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSuscriberItem**
> \Swagger\Client\Model\SuscriberSuscriberOutputJsonldSuscriberRead getSuscriberItem($id)

Retrieves a Suscriber resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SuscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getSuscriberItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuscriberApi->getSuscriberItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SuscriberSuscriberOutputJsonldSuscriberRead**](../Model/SuscriberSuscriberOutputJsonldSuscriberRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSuscriberCollection**
> \Swagger\Client\Model\SuscriberSuscriberOutputJsonldSuscriberRead postSuscriberCollection($body)

Creates a Suscriber resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SuscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SuscriberSuscriberInputJsonldSuscriberWrite(); // \Swagger\Client\Model\SuscriberSuscriberInputJsonldSuscriberWrite | The new Suscriber resource

try {
    $result = $apiInstance->postSuscriberCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuscriberApi->postSuscriberCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SuscriberSuscriberInputJsonldSuscriberWrite**](../Model/SuscriberSuscriberInputJsonldSuscriberWrite.md)| The new Suscriber resource | [optional]

### Return type

[**\Swagger\Client\Model\SuscriberSuscriberOutputJsonldSuscriberRead**](../Model/SuscriberSuscriberOutputJsonldSuscriberRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSuscriberCollection**
> \Swagger\Client\Model\SuscriberSuscriberOutputJsonldSuscriberRead postSuscriberCollection($body)

Creates a Suscriber resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SuscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SuscriberSuscriberInputSuscriberWrite(); // \Swagger\Client\Model\SuscriberSuscriberInputSuscriberWrite | The new Suscriber resource

try {
    $result = $apiInstance->postSuscriberCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuscriberApi->postSuscriberCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SuscriberSuscriberInputSuscriberWrite**](../Model/SuscriberSuscriberInputSuscriberWrite.md)| The new Suscriber resource | [optional]

### Return type

[**\Swagger\Client\Model\SuscriberSuscriberOutputJsonldSuscriberRead**](../Model/SuscriberSuscriberOutputJsonldSuscriberRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSuscriberItem**
> \Swagger\Client\Model\SuscriberSuscriberOutputJsonldSuscriberRead putSuscriberItem($id, $body)

Replaces the Suscriber resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SuscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\SuscriberSuscriberInputJsonldSuscriberWrite(); // \Swagger\Client\Model\SuscriberSuscriberInputJsonldSuscriberWrite | The updated Suscriber resource

try {
    $result = $apiInstance->putSuscriberItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuscriberApi->putSuscriberItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\SuscriberSuscriberInputJsonldSuscriberWrite**](../Model/SuscriberSuscriberInputJsonldSuscriberWrite.md)| The updated Suscriber resource | [optional]

### Return type

[**\Swagger\Client\Model\SuscriberSuscriberOutputJsonldSuscriberRead**](../Model/SuscriberSuscriberOutputJsonldSuscriberRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSuscriberItem**
> \Swagger\Client\Model\SuscriberSuscriberOutputJsonldSuscriberRead putSuscriberItem($id, $body)

Replaces the Suscriber resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SuscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\SuscriberSuscriberInputSuscriberWrite(); // \Swagger\Client\Model\SuscriberSuscriberInputSuscriberWrite | The updated Suscriber resource

try {
    $result = $apiInstance->putSuscriberItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuscriberApi->putSuscriberItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\SuscriberSuscriberInputSuscriberWrite**](../Model/SuscriberSuscriberInputSuscriberWrite.md)| The updated Suscriber resource | [optional]

### Return type

[**\Swagger\Client\Model\SuscriberSuscriberOutputJsonldSuscriberRead**](../Model/SuscriberSuscriberOutputJsonldSuscriberRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

