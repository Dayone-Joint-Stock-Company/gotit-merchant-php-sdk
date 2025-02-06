# OpenAPI\Client\MerchantApiV60Api

All URIs are relative to https://openapi-stg.gotit.vn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkMultiple()**](MerchantApiV60Api.md#checkMultiple) | **POST** /merchant/v6.0/checkmultiple | Check multiple vouchers are valid or not |
| [**reserved()**](MerchantApiV60Api.md#reserved) | **POST** /merchant/v6.0/reserved | Reserved multiple vouchers for a fixed bill number. |
| [**unreserved()**](MerchantApiV60Api.md#unreserved) | **POST** /merchant/v6.0/unreserved | Reserved multiple vouchers for a fixed bill number. |
| [**useMultiple()**](MerchantApiV60Api.md#useMultiple) | **POST** /merchant/v6.0/usemultiple | Reserved multiple vouchers for a fixed bill number. |


## `checkMultiple()`

```php
checkMultiple($requestCheckMultipleBodySchemaV60): \OpenAPI\Client\Model\ResponseCheckMultipleSchemaV60
```

Check multiple vouchers are valid or not

Check multiple vouchers are valid or not

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApiV60Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestCheckMultipleBodySchemaV60 = new \OpenAPI\Client\Model\RequestCheckMultipleBodySchemaV60(); // \OpenAPI\Client\Model\RequestCheckMultipleBodySchemaV60

try {
    $result = $apiInstance->checkMultiple($requestCheckMultipleBodySchemaV60);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApiV60Api->checkMultiple: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestCheckMultipleBodySchemaV60** | [**\OpenAPI\Client\Model\RequestCheckMultipleBodySchemaV60**](../Model/RequestCheckMultipleBodySchemaV60.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseCheckMultipleSchemaV60**](../Model/ResponseCheckMultipleSchemaV60.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reserved()`

```php
reserved($requestReservedBodySchemaV60): \OpenAPI\Client\Model\ResponseReservedSchemaV60
```

Reserved multiple vouchers for a fixed bill number.

Reserved multiple vouchers for a fixed bill number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApiV60Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestReservedBodySchemaV60 = new \OpenAPI\Client\Model\RequestReservedBodySchemaV60(); // \OpenAPI\Client\Model\RequestReservedBodySchemaV60

try {
    $result = $apiInstance->reserved($requestReservedBodySchemaV60);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApiV60Api->reserved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestReservedBodySchemaV60** | [**\OpenAPI\Client\Model\RequestReservedBodySchemaV60**](../Model/RequestReservedBodySchemaV60.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseReservedSchemaV60**](../Model/ResponseReservedSchemaV60.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unreserved()`

```php
unreserved($requestUnReservedBodySchemaV60): \OpenAPI\Client\Model\ResponseUnReservedSchemaV60
```

Reserved multiple vouchers for a fixed bill number.

Reserved multiple vouchers for a fixed bill number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApiV60Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestUnReservedBodySchemaV60 = new \OpenAPI\Client\Model\RequestUnReservedBodySchemaV60(); // \OpenAPI\Client\Model\RequestUnReservedBodySchemaV60

try {
    $result = $apiInstance->unreserved($requestUnReservedBodySchemaV60);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApiV60Api->unreserved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestUnReservedBodySchemaV60** | [**\OpenAPI\Client\Model\RequestUnReservedBodySchemaV60**](../Model/RequestUnReservedBodySchemaV60.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseUnReservedSchemaV60**](../Model/ResponseUnReservedSchemaV60.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `useMultiple()`

```php
useMultiple($requestMarkUseMultipleBodySchemaV60): \OpenAPI\Client\Model\ResponseMarkUseMultipleSchemaV60
```

Reserved multiple vouchers for a fixed bill number.

Reserved multiple vouchers for a fixed bill number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MerchantApiV60Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestMarkUseMultipleBodySchemaV60 = new \OpenAPI\Client\Model\RequestMarkUseMultipleBodySchemaV60(); // \OpenAPI\Client\Model\RequestMarkUseMultipleBodySchemaV60

try {
    $result = $apiInstance->useMultiple($requestMarkUseMultipleBodySchemaV60);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApiV60Api->useMultiple: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestMarkUseMultipleBodySchemaV60** | [**\OpenAPI\Client\Model\RequestMarkUseMultipleBodySchemaV60**](../Model/RequestMarkUseMultipleBodySchemaV60.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseMarkUseMultipleSchemaV60**](../Model/ResponseMarkUseMultipleSchemaV60.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
