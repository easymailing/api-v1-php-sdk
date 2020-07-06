# Swagger\Client\CampaignApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCampaignItem**](CampaignApi.md#deletecampaignitem) | **DELETE** /api/v1/campaigns/{id} | Removes the Campaign resource.
[**getCampaignCollection**](CampaignApi.md#getcampaigncollection) | **GET** /api/v1/campaigns | Retrieves the collection of Campaign resources.
[**getCampaignItem**](CampaignApi.md#getcampaignitem) | **GET** /api/v1/campaigns/{id} | Retrieves a Campaign resource.
[**postCampaignCollection**](CampaignApi.md#postcampaigncollection) | **POST** /api/v1/campaigns | Creates a Campaign resource.
[**putCampaignItem**](CampaignApi.md#putcampaignitem) | **PUT** /api/v1/campaigns/{id} | Replaces the Campaign resource.
[**scheduleCampaignItem**](CampaignApi.md#schedulecampaignitem) | **PUT** /api/v1/campaign/{id}/actions/schedule | Schedule a campaign
[**sendNowCampaignItem**](CampaignApi.md#sendnowcampaignitem) | **PUT** /api/v1/campaign/{id}/actions/send_now | Send a campaign immediately

# **deleteCampaignItem**
> deleteCampaignItem($id)

Removes the Campaign resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteCampaignItem($id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteCampaignItem: ', $e->getMessage(), PHP_EOL;
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

# **getCampaignCollection**
> \Swagger\Client\Model\InlineResponse200 getCampaignCollection($page)

Retrieves the collection of Campaign resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getCampaignCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaignCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaignItem**
> \Swagger\Client\Model\CampaignJsonldCampaignRead getCampaignItem($id)

Retrieves a Campaign resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getCampaignItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaignItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CampaignJsonldCampaignRead**](../Model/CampaignJsonldCampaignRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCampaignCollection**
> \Swagger\Client\Model\CampaignJsonldCampaignRead postCampaignCollection($body)

Creates a Campaign resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CampaignJsonldCampaignCreate(); // \Swagger\Client\Model\CampaignJsonldCampaignCreate | The new Campaign resource

try {
    $result = $apiInstance->postCampaignCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postCampaignCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CampaignJsonldCampaignCreate**](../Model/CampaignJsonldCampaignCreate.md)| The new Campaign resource | [optional]

### Return type

[**\Swagger\Client\Model\CampaignJsonldCampaignRead**](../Model/CampaignJsonldCampaignRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCampaignCollection**
> \Swagger\Client\Model\CampaignJsonldCampaignRead postCampaignCollection($body)

Creates a Campaign resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CampaignCampaignCreate(); // \Swagger\Client\Model\CampaignCampaignCreate | The new Campaign resource

try {
    $result = $apiInstance->postCampaignCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postCampaignCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CampaignCampaignCreate**](../Model/CampaignCampaignCreate.md)| The new Campaign resource | [optional]

### Return type

[**\Swagger\Client\Model\CampaignJsonldCampaignRead**](../Model/CampaignJsonldCampaignRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCampaignItem**
> \Swagger\Client\Model\CampaignJsonldCampaignRead putCampaignItem($id, $body)

Replaces the Campaign resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\CampaignJsonldCampaignUpdate(); // \Swagger\Client\Model\CampaignJsonldCampaignUpdate | The updated Campaign resource

try {
    $result = $apiInstance->putCampaignItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putCampaignItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\CampaignJsonldCampaignUpdate**](../Model/CampaignJsonldCampaignUpdate.md)| The updated Campaign resource | [optional]

### Return type

[**\Swagger\Client\Model\CampaignJsonldCampaignRead**](../Model/CampaignJsonldCampaignRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCampaignItem**
> \Swagger\Client\Model\CampaignJsonldCampaignRead putCampaignItem($id, $body)

Replaces the Campaign resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\CampaignCampaignUpdate(); // \Swagger\Client\Model\CampaignCampaignUpdate | The updated Campaign resource

try {
    $result = $apiInstance->putCampaignItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putCampaignItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\CampaignCampaignUpdate**](../Model/CampaignCampaignUpdate.md)| The updated Campaign resource | [optional]

### Return type

[**\Swagger\Client\Model\CampaignJsonldCampaignRead**](../Model/CampaignJsonldCampaignRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleCampaignItem**
> scheduleCampaignItem($body, $id)

Schedule a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 
$id = "id_example"; // string | 

try {
    $apiInstance->scheduleCampaignItem($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->scheduleCampaignItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)|  |
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendNowCampaignItem**
> sendNowCampaignItem($body, $id)

Send a campaign immediately

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | 
$id = "id_example"; // string | 

try {
    $apiInstance->sendNowCampaignItem($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->sendNowCampaignItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)|  |
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

