# # RequestMarkUseMultipleBodySchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pin** | **string** | Store pin | [optional]
**codes** | **string[]** | Array of 10-16 characters Got It voucher codes | [optional]
**billNumber** | **string** | Bill number will apply vouchers | [optional]
**totalBill** | **int** | Total bill amount | [optional]
**skipReservedWhenMarkUsed** | **bool** | When true the system will execute the flow without reserve | [optional]
**skusInfo** | [**\Dayonevn\Model\RequestCheckMultipleBodySchemaSkusInfoInner[]**](RequestCheckMultipleBodySchemaSkusInfoInner.md) | SKU information in bill_number | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
