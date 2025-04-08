# GotIt Merchant SDK
SDK Technical document for Merchant APIs


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

namespace App\Http\Controllers;

use OpenAPI\Client\Api\GotItMerchantApi;
use OpenAPI\Client\Model\RequestCheckMultipleBodySchema;
use OpenAPI\Client\Model\RequestMarkUseMultipleBodySchema;
use OpenAPI\Client\Model\RequestReservedBodySchema;
use OpenAPI\Client\Model\RequestUnReservedBodySchema;

class ApiController extends Controller
{
    public function index(
        GotItMerchantApi $api,
        RequestCheckMultipleBodySchema $bodySchema,
        RequestReservedBodySchema $reservedBodySchema,
        RequestUnReservedBodySchema $unReservedBodySchema,
        RequestMarkUseMultipleBodySchema $markUseMultipleBodySchema
    ) {
        // Change domain API if needed
        $api->getConfig()->setHost('https://openapi-stg.gotit.vn');
        
        // Below is sample data
        $codes = ['079888311234', '059996784321'];
        $pin = '1212';
        $sku = 'SKU001';

        // Check multiple body
        $bodySchema->setPin($pin);
        $bodySchema->setCodes($codes);
        $bodySchema->setBillNumber('BILL123456');
        $skuInfo = new \OpenAPI\Client\Model\RequestCheckMultipleBodySchemaSkusInfoInner();
        $skuInfo->setSku($sku);
        $skuInfo->setQuantity(1);
        $skuInfo->setPrice(100000);
        $bodySchema->setSkusInfo([$skuInfo]);

        // Reserved body
        $reservedBodySchema->setPin($pin);
        $reservedBodySchema->setCodes($codes);
        $reservedBodySchema->setBillNumber('BILL123456');
        $reservedBodySchema->setSkusInfo([$skuInfo]);

        // UnReserved body
        $unReservedBodySchema->setPin($pin);
        $unReservedBodySchema->setCodes($codes);
        $unReservedBodySchema->setBillNumber('BILL123456');
        $unReservedBodySchema->setSkusInfo([$skuInfo]);

        // Mark used body
        $markUseMultipleBodySchema->setPin($pin);
        $markUseMultipleBodySchema->setCodes($codes);
        $markUseMultipleBodySchema->setBillNumber('BILL123456');
        $markUseMultipleBodySchema->setSkusInfo([$skuInfo]);

        // Step 2: Call the API
        try {
            // Check codes
            //$response = $api->checkMultiple($bodySchemaV60);

            // Reserved codes
            //$response = $api->reserved($reservedBodySchemaV60);

            // UnReserved codes
            //$response = $api->unreserved($unReservedBodySchemaV60);

            // Mark use multiple
            //$response = $api->useMultiple($markUseMultipleBodySchemaV60);

            return response()->json($response);
        } catch (\OpenAPI\Client\ApiException $e) {
            return response()->json([
                'error' => "Error from Merchant API"
            ], 500);
        }
    }
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

