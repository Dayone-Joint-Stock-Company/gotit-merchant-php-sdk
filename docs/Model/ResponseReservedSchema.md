# # ResponseReservedSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** |  | [optional]
**returnCode** | **string** | Result code if failed. In case of successful request: value is null | [optional]
**messageEn** | **string** | Message notification in English | [optional]
**messageVi** | **string** | Message notification in Vietnamese | [optional]
**usedStore** | [**\Dayonevn\MerchantSDK\Model\ResponseReservedSchemaUsedStore**](ResponseReservedSchemaUsedStore.md) |  | [optional]
**billNumber** | **string** | Bill number | [optional]
**data** | [**\Dayonevn\MerchantSDK\Model\ResponseReservedSchemaDataInner[]**](ResponseReservedSchemaDataInner.md) | Detail items of voucher, if result is failed, response will return the first voucher code which is invalid | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
