# Swagger\Client\ConfigurationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDataManagerItem**](ConfigurationApi.md#deletedatamanageritem) | **DELETE** /api/v1/data_managers/{id} | Removes the DataManager resource.
[**deleteSenderItem**](ConfigurationApi.md#deletesenderitem) | **DELETE** /api/v1/senders/{id} | Removes the Sender resource.
[**deleteTreatmentPurposeItem**](ConfigurationApi.md#deletetreatmentpurposeitem) | **DELETE** /api/v1/treatment_purposes/{id} | Removes the TreatmentPurpose resource.
[**getDataManagerCollection**](ConfigurationApi.md#getdatamanagercollection) | **GET** /api/v1/data_managers | Retrieves the collection of DataManager resources.
[**getDataManagerItem**](ConfigurationApi.md#getdatamanageritem) | **GET** /api/v1/data_managers/{id} | Retrieves a DataManager resource.
[**getSenderCollection**](ConfigurationApi.md#getsendercollection) | **GET** /api/v1/senders | Retrieves the collection of Sender resources.
[**getSenderItem**](ConfigurationApi.md#getsenderitem) | **GET** /api/v1/senders/{id} | Retrieves a Sender resource.
[**getTreatmentPurposeCollection**](ConfigurationApi.md#gettreatmentpurposecollection) | **GET** /api/v1/treatment_purposes | Retrieves the collection of TreatmentPurpose resources.
[**getTreatmentPurposeItem**](ConfigurationApi.md#gettreatmentpurposeitem) | **GET** /api/v1/treatment_purposes/{id} | Retrieves a TreatmentPurpose resource.
[**postDataManagerCollection**](ConfigurationApi.md#postdatamanagercollection) | **POST** /api/v1/data_managers | Creates a DataManager resource.
[**postSenderCollection**](ConfigurationApi.md#postsendercollection) | **POST** /api/v1/senders | Creates a Sender resource.
[**postTreatmentPurposeCollection**](ConfigurationApi.md#posttreatmentpurposecollection) | **POST** /api/v1/treatment_purposes | Creates a TreatmentPurpose resource.

# **deleteDataManagerItem**
> deleteDataManagerItem($id)

Removes the DataManager resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteDataManagerItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->deleteDataManagerItem: ', $e->getMessage(), PHP_EOL;
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

# **deleteSenderItem**
> deleteSenderItem($id)

Removes the Sender resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteSenderItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->deleteSenderItem: ', $e->getMessage(), PHP_EOL;
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

# **deleteTreatmentPurposeItem**
> deleteTreatmentPurposeItem($id)

Removes the TreatmentPurpose resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteTreatmentPurposeItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->deleteTreatmentPurposeItem: ', $e->getMessage(), PHP_EOL;
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

# **getDataManagerCollection**
> \Swagger\Client\Model\InlineResponse2001 getDataManagerCollection($page)

Retrieves the collection of DataManager resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getDataManagerCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getDataManagerCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataManagerItem**
> \Swagger\Client\Model\DataManagerJsonldDataManagerRead getDataManagerItem($id)

Retrieves a DataManager resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getDataManagerItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getDataManagerItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DataManagerJsonldDataManagerRead**](../Model/DataManagerJsonldDataManagerRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenderCollection**
> \Swagger\Client\Model\InlineResponse2006 getSenderCollection($page)

Retrieves the collection of Sender resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getSenderCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getSenderCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenderItem**
> \Swagger\Client\Model\SenderJsonldSenderReadCampaignRead getSenderItem($id)

Retrieves a Sender resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getSenderItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getSenderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SenderJsonldSenderReadCampaignRead**](../Model/SenderJsonldSenderReadCampaignRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTreatmentPurposeCollection**
> \Swagger\Client\Model\InlineResponse2009 getTreatmentPurposeCollection($page)

Retrieves the collection of TreatmentPurpose resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getTreatmentPurposeCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getTreatmentPurposeCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTreatmentPurposeItem**
> \Swagger\Client\Model\TreatmentPurposeJsonldTreatmentPurposeRead getTreatmentPurposeItem($id)

Retrieves a TreatmentPurpose resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getTreatmentPurposeItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getTreatmentPurposeItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TreatmentPurposeJsonldTreatmentPurposeRead**](../Model/TreatmentPurposeJsonldTreatmentPurposeRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDataManagerCollection**
> \Swagger\Client\Model\DataManagerJsonldDataManagerRead postDataManagerCollection($body)

Creates a DataManager resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DataManagerJsonldDataManagerWrite(); // \Swagger\Client\Model\DataManagerJsonldDataManagerWrite | The new DataManager resource

try {
    $result = $apiInstance->postDataManagerCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->postDataManagerCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DataManagerJsonldDataManagerWrite**](../Model/DataManagerJsonldDataManagerWrite.md)| The new DataManager resource | [optional]

### Return type

[**\Swagger\Client\Model\DataManagerJsonldDataManagerRead**](../Model/DataManagerJsonldDataManagerRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDataManagerCollection**
> \Swagger\Client\Model\DataManagerJsonldDataManagerRead postDataManagerCollection($body)

Creates a DataManager resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DataManagerDataManagerWrite(); // \Swagger\Client\Model\DataManagerDataManagerWrite | The new DataManager resource

try {
    $result = $apiInstance->postDataManagerCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->postDataManagerCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DataManagerDataManagerWrite**](../Model/DataManagerDataManagerWrite.md)| The new DataManager resource | [optional]

### Return type

[**\Swagger\Client\Model\DataManagerJsonldDataManagerRead**](../Model/DataManagerJsonldDataManagerRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSenderCollection**
> \Swagger\Client\Model\SenderJsonldSenderReadCampaignRead postSenderCollection($body)

Creates a Sender resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SenderJsonldSenderWrite(); // \Swagger\Client\Model\SenderJsonldSenderWrite | The new Sender resource

try {
    $result = $apiInstance->postSenderCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->postSenderCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SenderJsonldSenderWrite**](../Model/SenderJsonldSenderWrite.md)| The new Sender resource | [optional]

### Return type

[**\Swagger\Client\Model\SenderJsonldSenderReadCampaignRead**](../Model/SenderJsonldSenderReadCampaignRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSenderCollection**
> \Swagger\Client\Model\SenderJsonldSenderReadCampaignRead postSenderCollection($body)

Creates a Sender resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SenderSenderWrite(); // \Swagger\Client\Model\SenderSenderWrite | The new Sender resource

try {
    $result = $apiInstance->postSenderCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->postSenderCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SenderSenderWrite**](../Model/SenderSenderWrite.md)| The new Sender resource | [optional]

### Return type

[**\Swagger\Client\Model\SenderJsonldSenderReadCampaignRead**](../Model/SenderJsonldSenderReadCampaignRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTreatmentPurposeCollection**
> \Swagger\Client\Model\TreatmentPurposeJsonldTreatmentPurposeRead postTreatmentPurposeCollection($body)

Creates a TreatmentPurpose resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TreatmentPurposeJsonldTreatmentPurposeWrite(); // \Swagger\Client\Model\TreatmentPurposeJsonldTreatmentPurposeWrite | The new TreatmentPurpose resource

try {
    $result = $apiInstance->postTreatmentPurposeCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->postTreatmentPurposeCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TreatmentPurposeJsonldTreatmentPurposeWrite**](../Model/TreatmentPurposeJsonldTreatmentPurposeWrite.md)| The new TreatmentPurpose resource | [optional]

### Return type

[**\Swagger\Client\Model\TreatmentPurposeJsonldTreatmentPurposeRead**](../Model/TreatmentPurposeJsonldTreatmentPurposeRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTreatmentPurposeCollection**
> \Swagger\Client\Model\TreatmentPurposeJsonldTreatmentPurposeRead postTreatmentPurposeCollection($body)

Creates a TreatmentPurpose resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TreatmentPurposeTreatmentPurposeWrite(); // \Swagger\Client\Model\TreatmentPurposeTreatmentPurposeWrite | The new TreatmentPurpose resource

try {
    $result = $apiInstance->postTreatmentPurposeCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->postTreatmentPurposeCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TreatmentPurposeTreatmentPurposeWrite**](../Model/TreatmentPurposeTreatmentPurposeWrite.md)| The new TreatmentPurpose resource | [optional]

### Return type

[**\Swagger\Client\Model\TreatmentPurposeJsonldTreatmentPurposeRead**](../Model/TreatmentPurposeJsonldTreatmentPurposeRead.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

