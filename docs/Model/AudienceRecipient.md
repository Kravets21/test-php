# # AudienceRecipient

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the Recipient. | [optional]
**external_id** | **string** | An external identifier of the Recipient. This is optional and can be used to link the Recipient to an external system. | [optional]
**timezone** | **string** | The timezone of the Recipient. This is optional and can be used to set the timezone of the Recipient. | [optional]
**language** | [**\AirEml\Model\LocaleCode**](LocaleCode.md) |  | [optional]
**last_activity_at** | **\DateTime** | Datetime of last activity of the Recipient. | [optional]
**last_activity_type** | **string** | The last activity type of the Recipient. | [optional]
**last_activity_event** | **string** | The last activity event of the Recipient. | [optional]
**last_login_at** | **\DateTime** | Datetime of last login of the Recipient. | [optional]
**logins_count** | **int** | The number of logins of the Recipient. | [optional]
**custom_fields** | **array<string,string>** | A json object of the custom data of the Recipient. | [optional]
**contacts** | [**\AirEml\Model\AudienceRecipientContact[]**](AudienceRecipientContact.md) | The contacts of the Recipient. | [optional]
**tags** | [**\AirEml\Model\AudienceRecipientTag[]**](AudienceRecipientTag.md) | The tags of the Recipient. | [optional]
**status** | **int** | The status of the Recipient. Every digit matters: 1 - active, 2 - inactive. | [optional]
**created_at** | **\DateTime** | The datetime when the Recipient was created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
