# # ResponseCheckMultipleSchemaDataInnerRedemptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redeemSkuCodes** | [**\Dayonevn\MerchantSDK\Model\ResponseCheckMultipleSchemaDataInnerRedemptionsRedeemSkuCodesInner[]**](ResponseCheckMultipleSchemaDataInnerRedemptionsRedeemSkuCodesInner.md) | Contains redeemed SKU information of the voucher (for voucher type is conditional and support sku) | [optional]
**redemptionValue** | **int** | Actual redemption value of voucher type &#x3D; conditional | [optional]
**usedStore** | [**\Dayonevn\MerchantSDK\Model\ResponseCheckMultipleSchemaDataInnerRedemptionsUsedStore**](ResponseCheckMultipleSchemaDataInnerRedemptionsUsedStore.md) |  | [optional]
**usedDate** | **string** | Date voucher marked as used in case the voucher has been redeemed. Format (YYYY-MM-DD HH:MM:SS) | [optional]
**billNumber** | **string** | Bill number for which voucher used/reserved | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
