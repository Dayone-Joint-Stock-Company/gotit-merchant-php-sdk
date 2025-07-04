# Dayonevn\MerchantSDK\GotItMerchantApi

All URIs are relative to https://openapi-stg.gotit.vn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkMultiple()**](GotItMerchantApi.md#checkMultiple) | **POST** /merchant/v6.0/checkmultiple | Check multiple vouchers are valid or not |
| [**reserved()**](GotItMerchantApi.md#reserved) | **POST** /merchant/v6.0/reserved | Reserved multiple vouchers for a fixed bill number. |
| [**unreserved()**](GotItMerchantApi.md#unreserved) | **POST** /merchant/v6.0/unreserved | Reserved multiple vouchers for a fixed bill number. |
| [**useMultiple()**](GotItMerchantApi.md#useMultiple) | **POST** /merchant/v6.0/usemultiple | Reserved multiple vouchers for a fixed bill number. |


## `checkMultiple()`

```php
checkMultiple($requestCheckMultipleBodySchema): \Dayonevn\MerchantSDK\Model\ResponseCheckMultipleSchema
```

Check multiple vouchers are valid or not

Check multiple vouchers are valid or not

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Dayonevn\MerchantSDK\Api\GotItMerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestCheckMultipleBodySchema = new \Dayonevn\MerchantSDK\Model\RequestCheckMultipleBodySchema(); // \Dayonevn\MerchantSDK\Model\RequestCheckMultipleBodySchema

try {
    $result = $apiInstance->checkMultiple($requestCheckMultipleBodySchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GotItMerchantApi->checkMultiple: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestCheckMultipleBodySchema** | [**\Dayonevn\MerchantSDK\Model\RequestCheckMultipleBodySchema**](../Model/RequestCheckMultipleBodySchema.md)|  | [optional] |

### Return type

[**\Dayonevn\MerchantSDK\Model\ResponseCheckMultipleSchema**](../Model/ResponseCheckMultipleSchema.md)

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
reserved($requestReservedBodySchema): \Dayonevn\MerchantSDK\Model\ResponseReservedSchema
```

Reserved multiple vouchers for a fixed bill number.

Reserved multiple vouchers for a fixed bill number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Dayonevn\MerchantSDK\Api\GotItMerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestReservedBodySchema = new \Dayonevn\MerchantSDK\Model\RequestReservedBodySchema(); // \Dayonevn\MerchantSDK\Model\RequestReservedBodySchema

try {
    $result = $apiInstance->reserved($requestReservedBodySchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GotItMerchantApi->reserved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestReservedBodySchema** | [**\Dayonevn\MerchantSDK\Model\RequestReservedBodySchema**](../Model/RequestReservedBodySchema.md)|  | [optional] |

### Return type

[**\Dayonevn\MerchantSDK\Model\ResponseReservedSchema**](../Model/ResponseReservedSchema.md)

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
unreserved($requestUnReservedBodySchema): \Dayonevn\MerchantSDK\Model\ResponseUnReservedSchema
```

Reserved multiple vouchers for a fixed bill number.

Reserved multiple vouchers for a fixed bill number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Dayonevn\MerchantSDK\Api\GotItMerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestUnReservedBodySchema = new \Dayonevn\MerchantSDK\Model\RequestUnReservedBodySchema(); // \Dayonevn\MerchantSDK\Model\RequestUnReservedBodySchema

try {
    $result = $apiInstance->unreserved($requestUnReservedBodySchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GotItMerchantApi->unreserved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestUnReservedBodySchema** | [**\Dayonevn\MerchantSDK\Model\RequestUnReservedBodySchema**](../Model/RequestUnReservedBodySchema.md)|  | [optional] |

### Return type

[**\Dayonevn\MerchantSDK\Model\ResponseUnReservedSchema**](../Model/ResponseUnReservedSchema.md)

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
useMultiple($requestMarkUseMultipleBodySchema): \Dayonevn\MerchantSDK\Model\ResponseMarkUseMultipleSchema
```

Reserved multiple vouchers for a fixed bill number.

Reserved multiple vouchers for a fixed bill number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Dayonevn\MerchantSDK\Api\GotItMerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestMarkUseMultipleBodySchema = new \Dayonevn\MerchantSDK\Model\RequestMarkUseMultipleBodySchema(); // \Dayonevn\MerchantSDK\Model\RequestMarkUseMultipleBodySchema

try {
    $result = $apiInstance->useMultiple($requestMarkUseMultipleBodySchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GotItMerchantApi->useMultiple: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestMarkUseMultipleBodySchema** | [**\Dayonevn\MerchantSDK\Model\RequestMarkUseMultipleBodySchema**](../Model/RequestMarkUseMultipleBodySchema.md)|  | [optional] |

### Return type

[**\Dayonevn\MerchantSDK\Model\ResponseMarkUseMultipleSchema**](../Model/ResponseMarkUseMultipleSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
