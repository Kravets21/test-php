# # EmailTemplateContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**locale** | [**\OpenAPI\Client\Model\LocaleCode**](LocaleCode.md) |  | [optional]
**subject** | **string** | The is a subject of the email notification. | [optional]
**text_plain** | **string** | The is a text body of the email notification. | [optional]
**text_html** | **string** | The is a html body of the email notification. Must be valid HTML. | [optional]
**text_amp** | **string** | The is a amp body of the email notification. | [optional]
**builder_html** | **string** | This is settings for UI Template Builder. Must be valid JSON. | [optional]
**variables_settings** | [**\OpenAPI\Client\Model\EmailTemplateContentVariablesSettingsInner[]**](EmailTemplateContentVariablesSettingsInner.md) |  | [optional]
**created_at** | **\DateTime** | The datetime when the Template Content was created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
