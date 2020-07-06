# Swagger\Client\AuthenticationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postCredentialsItem**](AuthenticationApi.md#postcredentialsitem) | **POST** /api/v1/authentication_token | Get JWT token to login.
[**putCredentialsItem**](AuthenticationApi.md#putcredentialsitem) | **PUT** /api/v1/authentication_token | Refresh JWT token.

# **postCredentialsItem**
> \Swagger\Client\Model\Token postCredentialsItem($body)

Get JWT token to login.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Credentials(); // \Swagger\Client\Model\Credentials | Create new JWT Token

try {
    $result = $apiInstance->postCredentialsItem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postCredentialsItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Credentials**](../Model/Credentials.md)| Create new JWT Token | [optional]

### Return type

[**\Swagger\Client\Model\Token**](../Model/Token.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCredentialsItem**
> \Swagger\Client\Model\Token putCredentialsItem($body)

Refresh JWT token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Credentials(); // \Swagger\Client\Model\Credentials | Create new JWT Token

try {
    $result = $apiInstance->putCredentialsItem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->putCredentialsItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Credentials**](../Model/Credentials.md)| Create new JWT Token | [optional]

### Return type

[**\Swagger\Client\Model\Token**](../Model/Token.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

