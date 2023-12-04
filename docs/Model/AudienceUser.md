# # AudienceUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the User. | [optional]
**external_id** | **string** | An external identifier of the User. This is optional and can be used to link the User to an external system. | [optional]
**timezone** | **string** | The timezone of the User. This is optional and can be used to set the timezone of the User. | [optional]
**language** | [**\OpenAPI\Client\Model\LocaleCode**](LocaleCode.md) |  | [optional]
**last_activity_at** | **\DateTime** | Datetime of last activity of the User. | [optional]
**last_activity_type** | **string** | The last activity type of the User. | [optional]
**last_activity_event** | **string** | The last activity event of the User. | [optional]
**data** | **array<string,string>** | A json object of the custom data of the User. | [optional]
**contacts** | [**\OpenAPI\Client\Model\AudienceUserContact[]**](AudienceUserContact.md) | The contacts of the User. | [optional]
**tags** | [**\OpenAPI\Client\Model\AudienceUserTag[]**](AudienceUserTag.md) | The tags of the User. | [optional]
**created_at** | **\DateTime** | The datetime when the User was created. | [optional]
**updated_at** | **\DateTime** | The datetime when the User was updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
