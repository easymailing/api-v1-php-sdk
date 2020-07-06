# Swagger\Client\AudienceApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getListDistributionCollection**](AudienceApi.md#getlistdistributioncollection) | **GET** /api/v1/list_distributions | Retrieves the collection of ListDistribution resources.
[**getListDistributionItem**](AudienceApi.md#getlistdistributionitem) | **GET** /api/v1/list_distributions/{id} | Retrieves a ListDistribution resource.
[**getListFieldCollection**](AudienceApi.md#getlistfieldcollection) | **GET** /api/v1/list_fields | Retrieves the collection of ListField resources.
[**getListFieldItem**](AudienceApi.md#getlistfielditem) | **GET** /api/v1/list_fields/{id} | Retrieves a ListField resource.
[**getListFieldValueCollection**](AudienceApi.md#getlistfieldvaluecollection) | **GET** /api/v1/list_field_values | Retrieves the collection of ListFieldValue resources.
[**getListFieldValueItem**](AudienceApi.md#getlistfieldvalueitem) | **GET** /api/v1/list_field_values/{id} | Retrieves a ListFieldValue resource.
[**getListSegmentCollection**](AudienceApi.md#getlistsegmentcollection) | **GET** /api/v1/list_segments | Retrieves the collection of ListSegment resources.
[**getListSegmentItem**](AudienceApi.md#getlistsegmentitem) | **GET** /api/v1/list_segments/{id} | Retrieves a ListSegment resource.
[**postListFieldCollection**](AudienceApi.md#postlistfieldcollection) | **POST** /api/v1/list_fields | Creates a ListField resource.

# **getListDistributionCollection**
> \Swagger\Client\Model\InlineResponse2002 getListDistributionCollection($page)

Retrieves the collection of ListDistribution resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getListDistributionCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getListDistributionCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListDistributionItem**
> \Swagger\Client\Model\ListDistributionListDistributionOutputJsonldListDistributionRead getListDistributionItem($id)

Retrieves a ListDistribution resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getListDistributionItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getListDistributionItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ListDistributionListDistributionOutputJsonldListDistributionRead**](../Model/ListDistributionListDistributionOutputJsonldListDistributionRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListFieldCollection**
> \Swagger\Client\Model\InlineResponse2005 getListFieldCollection($page)

Retrieves the collection of ListField resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getListFieldCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getListFieldCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListFieldItem**
> \Swagger\Client\Model\ListFieldListFieldOutputJsonldListFieldRead getListFieldItem($id)

Retrieves a ListField resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getListFieldItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getListFieldItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ListFieldListFieldOutputJsonldListFieldRead**](../Model/ListFieldListFieldOutputJsonldListFieldRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListFieldValueCollection**
> \Swagger\Client\Model\InlineResponse2004 getListFieldValueCollection($page)

Retrieves the collection of ListFieldValue resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getListFieldValueCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getListFieldValueCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListFieldValueItem**
> \Swagger\Client\Model\ListFieldValueListFieldValueOutputJsonldListFieldValueRead getListFieldValueItem($id)

Retrieves a ListFieldValue resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getListFieldValueItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getListFieldValueItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ListFieldValueListFieldValueOutputJsonldListFieldValueRead**](../Model/ListFieldValueListFieldValueOutputJsonldListFieldValueRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListSegmentCollection**
> \Swagger\Client\Model\InlineResponse2003 getListSegmentCollection($page)

Retrieves the collection of ListSegment resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getListSegmentCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getListSegmentCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListSegmentItem**
> \Swagger\Client\Model\ListSegmentJsonldListSegmentRead getListSegmentItem($id)

Retrieves a ListSegment resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getListSegmentItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getListSegmentItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ListSegmentJsonldListSegmentRead**](../Model/ListSegmentJsonldListSegmentRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postListFieldCollection**
> \Swagger\Client\Model\ListFieldListFieldOutputJsonldListFieldRead postListFieldCollection($body)

Creates a ListField resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ListFieldListFieldInputJsonldListFieldWrite(); // \Swagger\Client\Model\ListFieldListFieldInputJsonldListFieldWrite | The new ListField resource

try {
    $result = $apiInstance->postListFieldCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->postListFieldCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ListFieldListFieldInputJsonldListFieldWrite**](../Model/ListFieldListFieldInputJsonldListFieldWrite.md)| The new ListField resource | [optional]

### Return type

[**\Swagger\Client\Model\ListFieldListFieldOutputJsonldListFieldRead**](../Model/ListFieldListFieldOutputJsonldListFieldRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postListFieldCollection**
> \Swagger\Client\Model\ListFieldListFieldOutputJsonldListFieldRead postListFieldCollection($body)

Creates a ListField resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ListFieldListFieldInputListFieldWrite(); // \Swagger\Client\Model\ListFieldListFieldInputListFieldWrite | The new ListField resource

try {
    $result = $apiInstance->postListFieldCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->postListFieldCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ListFieldListFieldInputListFieldWrite**](../Model/ListFieldListFieldInputListFieldWrite.md)| The new ListField resource | [optional]

### Return type

[**\Swagger\Client\Model\ListFieldListFieldOutputJsonldListFieldRead**](../Model/ListFieldListFieldOutputJsonldListFieldRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

