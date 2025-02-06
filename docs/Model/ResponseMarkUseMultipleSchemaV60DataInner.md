# # ResponseMarkUseMultipleSchemaV60DataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Voucher code | [optional]
**product** | [**\OpenAPI\Client\Model\ResponseCheckMultipleSchemaV60DataInnerProduct**](ResponseCheckMultipleSchemaV60DataInnerProduct.md) |  | [optional]
**state** | **int** | State of voucher | [optional]
**usedDate** | **string** | Date voucher marked as used in case the voucher has been redeemed. Format (YYYY-MM-DD HH:MM:SS) | [optional]
**usedStore** | [**\OpenAPI\Client\Model\ResponseMarkUseMultipleSchemaV60DataInnerUsedStore**](ResponseMarkUseMultipleSchemaV60DataInnerUsedStore.md) |  | [optional]
**voucherType** | **string** | Voucher type, standard or redeemable_sku | [optional]
**skusConditionVi** | **string** | Voucher SKU terms and conditions description in Vietnamese | [optional]
**skusConditionEn** | **string** | Voucher SKU terms and conditions description in English | [optional]
**redeemSku** | [**\OpenAPI\Client\Model\ResponseCheckMultipleSchemaV60DataInnerRedeemSku**](ResponseCheckMultipleSchemaV60DataInnerRedeemSku.md) |  | [optional]
**redeemableSkus** | **string[]** | List of redeemable SKUs of the voucher code. For voucher type &#x3D; redeemable_sku, bill number must contain at least 1 redeemable SKU of the voucher. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
