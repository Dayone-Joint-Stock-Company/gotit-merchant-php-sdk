# # RequestReservedBodySchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pin** | **string** | Store pin | [optional]
**codes** | **string[]** | Array of 10-16 characters Got It voucher codes | [optional]
**billNumber** | **string** | Bill number will apply vouchers | [optional]
**totalBill** | **int** | Total bill amount | [optional]
**billCreatedAt** | **string** | Bill creation time. Format: YYYY-MM-DD HH:MM:SS | [optional]
**skusInfo** | [**\Dayonevn\MerchantSDK\Model\RequestCheckMultipleBodySchemaSkusInfoInner[]**](RequestCheckMultipleBodySchemaSkusInfoInner.md) | SKU information in bill_number | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
