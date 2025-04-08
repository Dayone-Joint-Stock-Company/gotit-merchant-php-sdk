# OpenAPIClient-php

Technical document APIs for Merchant APIs


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Dayone-Joint-Stock-Company/gotit-merchant-php-sdk.git"
    }
  ],
  "require": {
    "dayonevn/gotit-merchant-php-sdk": "^1.0"
  }
}
```

Then run `composer install`

## Getting Started

Simple usage looks like:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\GotItMerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestCheckMultipleBodySchema = new \OpenAPI\Client\Model\RequestCheckMultipleBodySchema(); // \OpenAPI\Client\Model\RequestCheckMultipleBodySchema

try {
    $result = $apiInstance->checkMultiple($requestCheckMultipleBodySchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GotItMerchantApi->checkMultiple: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://openapi-stg.gotit.vn*. For production please change to *https://openapi.gotit.vn*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*GotItMerchantApi* | [**checkMultiple**](docs/Api/GotItMerchantApi.md#checkmultiple) | **POST** /merchant/v6.0/checkmultiple | Check multiple vouchers are valid or not
*GotItMerchantApi* | [**reserved**](docs/Api/GotItMerchantApi.md#reserved) | **POST** /merchant/v6.0/reserved | Reserved multiple vouchers for a fixed bill number.
*GotItMerchantApi* | [**unreserved**](docs/Api/GotItMerchantApi.md#unreserved) | **POST** /merchant/v6.0/unreserved | Reserved multiple vouchers for a fixed bill number.
*GotItMerchantApi* | [**useMultiple**](docs/Api/GotItMerchantApi.md#usemultiple) | **POST** /merchant/v6.0/usemultiple | Reserved multiple vouchers for a fixed bill number.

## Models

- [RequestCheckMultipleBodySchema](docs/Model/RequestCheckMultipleBodySchema.md)
- [RequestCheckMultipleBodySchemaSkusInfoInner](docs/Model/RequestCheckMultipleBodySchemaSkusInfoInner.md)
- [RequestMarkUseMultipleBodySchema](docs/Model/RequestMarkUseMultipleBodySchema.md)
- [RequestReservedBodySchema](docs/Model/RequestReservedBodySchema.md)
- [RequestUnReservedBodySchema](docs/Model/RequestUnReservedBodySchema.md)
- [ResponseCheckMultipleSchema](docs/Model/ResponseCheckMultipleSchema.md)
- [ResponseCheckMultipleSchemaDataInner](docs/Model/ResponseCheckMultipleSchemaDataInner.md)
- [ResponseCheckMultipleSchemaDataInnerConditions](docs/Model/ResponseCheckMultipleSchemaDataInnerConditions.md)
- [ResponseCheckMultipleSchemaDataInnerRedemptions](docs/Model/ResponseCheckMultipleSchemaDataInnerRedemptions.md)
- [ResponseCheckMultipleSchemaDataInnerRedemptionsRedeemSkuCodesInner](docs/Model/ResponseCheckMultipleSchemaDataInnerRedemptionsRedeemSkuCodesInner.md)
- [ResponseCheckMultipleSchemaDataInnerRedemptionsUsedStore](docs/Model/ResponseCheckMultipleSchemaDataInnerRedemptionsUsedStore.md)
- [ResponseMarkUseMultipleSchema](docs/Model/ResponseMarkUseMultipleSchema.md)
- [ResponseMarkUseMultipleSchemaDataInner](docs/Model/ResponseMarkUseMultipleSchemaDataInner.md)
- [ResponseMarkUseMultipleSchemaDataInnerConditions](docs/Model/ResponseMarkUseMultipleSchemaDataInnerConditions.md)
- [ResponseMarkUseMultipleSchemaDataInnerRedemptions](docs/Model/ResponseMarkUseMultipleSchemaDataInnerRedemptions.md)
- [ResponseReservedSchema](docs/Model/ResponseReservedSchema.md)
- [ResponseReservedSchemaDataInner](docs/Model/ResponseReservedSchemaDataInner.md)
- [ResponseReservedSchemaDataInnerRedemptions](docs/Model/ResponseReservedSchemaDataInnerRedemptions.md)
- [ResponseReservedSchemaUsedStore](docs/Model/ResponseReservedSchemaUsedStore.md)
- [ResponseUnReservedSchema](docs/Model/ResponseUnReservedSchema.md)
- [ResponseUnReservedSchemaDataInner](docs/Model/ResponseUnReservedSchemaDataInner.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
vendor/bin/phpunit vendor/dayonevn/gotit-merchant-php-sdk/test/Api/GotItMerchantApiTest.php
```

