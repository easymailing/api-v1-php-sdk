# Swagger\Client\TemplateApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTemplateItem**](TemplateApi.md#deletetemplateitem) | **DELETE** /api/v1/templates/{id} | Removes the Template resource.
[**getTemplateCollection**](TemplateApi.md#gettemplatecollection) | **GET** /api/v1/templates | Retrieves the collection of Template resources.
[**getTemplateItem**](TemplateApi.md#gettemplateitem) | **GET** /api/v1/templates/{id} | Retrieves a Template resource.
[**postTemplateCollection**](TemplateApi.md#posttemplatecollection) | **POST** /api/v1/templates | Creates a Template resource.
[**putTemplateItem**](TemplateApi.md#puttemplateitem) | **PUT** /api/v1/templates/{id} | Replaces the Template resource.

# **deleteTemplateItem**
> deleteTemplateItem($id)

Removes the Template resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteTemplateItem($id);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->deleteTemplateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateCollection**
> \Swagger\Client\Model\InlineResponse2008 getTemplateCollection($page)

Retrieves the collection of Template resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getTemplateCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->getTemplateCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateItem**
> \Swagger\Client\Model\TemplateJsonldTemplateRead getTemplateItem($id)

Retrieves a Template resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getTemplateItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->getTemplateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TemplateJsonldTemplateRead**](../Model/TemplateJsonldTemplateRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTemplateCollection**
> \Swagger\Client\Model\TemplateJsonldTemplateRead postTemplateCollection($body)

Creates a Template resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TemplateJsonldTemplateTest(); // \Swagger\Client\Model\TemplateJsonldTemplateTest | The new Template resource

try {
    $result = $apiInstance->postTemplateCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->postTemplateCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TemplateJsonldTemplateTest**](../Model/TemplateJsonldTemplateTest.md)| The new Template resource | [optional]

### Return type

[**\Swagger\Client\Model\TemplateJsonldTemplateRead**](../Model/TemplateJsonldTemplateRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTemplateCollection**
> \Swagger\Client\Model\TemplateJsonldTemplateRead postTemplateCollection($body)

Creates a Template resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TemplateTemplateTest(); // \Swagger\Client\Model\TemplateTemplateTest | The new Template resource

try {
    $result = $apiInstance->postTemplateCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->postTemplateCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TemplateTemplateTest**](../Model/TemplateTemplateTest.md)| The new Template resource | [optional]

### Return type

[**\Swagger\Client\Model\TemplateJsonldTemplateRead**](../Model/TemplateJsonldTemplateRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTemplateItem**
> \Swagger\Client\Model\TemplateJsonldTemplateRead putTemplateItem($id, $body)

Replaces the Template resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\TemplateJsonldTemplateTest(); // \Swagger\Client\Model\TemplateJsonldTemplateTest | The updated Template resource

try {
    $result = $apiInstance->putTemplateItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->putTemplateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\TemplateJsonldTemplateTest**](../Model/TemplateJsonldTemplateTest.md)| The updated Template resource | [optional]

### Return type

[**\Swagger\Client\Model\TemplateJsonldTemplateRead**](../Model/TemplateJsonldTemplateRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTemplateItem**
> \Swagger\Client\Model\TemplateJsonldTemplateRead putTemplateItem($id, $body)

Replaces the Template resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\TemplateTemplateTest(); // \Swagger\Client\Model\TemplateTemplateTest | The updated Template resource

try {
    $result = $apiInstance->putTemplateItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->putTemplateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\TemplateTemplateTest**](../Model/TemplateTemplateTest.md)| The updated Template resource | [optional]

### Return type

[**\Swagger\Client\Model\TemplateJsonldTemplateRead**](../Model/TemplateJsonldTemplateRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

