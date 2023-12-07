# # AudienceRecipientRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | An external identifier of the Recipient. This is optional and can be used to link the Recipient to an external system. | [optional]
**timezone** | **string** | The timezone of the Recipient. This is optional and can be used to set the timezone of the Recipient. | [optional]
**language** | [**\AirEml\Model\LocaleCode**](LocaleCode.md) |  | [optional]
**last_login_at** | **\DateTime** | Datetime of last login of the Recipient. | [optional]
**logins_count** | **int** | The number of logins of the Recipient. | [optional]
**custom_fields** | **array<string,string>** | A json object of the custom data of the Recipient. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
