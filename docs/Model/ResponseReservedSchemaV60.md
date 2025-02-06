# # ResponseReservedSchemaV60

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** |  | [optional]
**returnCode** | **string** | Result code if failed. Default is null | [optional]
**messageEn** | **string** | Message notification in English | [optional]
**messageVi** | **string** | Message notification in Vietnamese | [optional]
**usedStore** | [**\OpenAPI\Client\Model\ResponseReservedSchemaV60UsedStore**](ResponseReservedSchemaV60UsedStore.md) |  | [optional]
**billNumber** | **string** | Bill number | [optional]
**data** | [**\OpenAPI\Client\Model\ResponseReservedSchemaV60DataInner[]**](ResponseReservedSchemaV60DataInner.md) | Detail items of voucher, if result is failed, response will return the first voucher code which is invalid | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
