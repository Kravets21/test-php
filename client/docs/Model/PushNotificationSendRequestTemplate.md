# # PushNotificationSendRequestTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the template to use for the notification. The id or name parameter must be specified. | [optional]
**name** | **string** | The name of the template to use for the notification. The id or name parameter must be specified. | [optional]
**locale** | **string** | The locale of the template to use for the notification. | [optional]
**variables** | **object** | The parameters used to replace placeholders of the Template Content Where key - is a placeholder name, and value - is a placeholder value. If the value is not provided, the placeholder will use the default value from the Template Content. | [optional]
**data** | **array<string,string>** | The additional data used for send push notification if user wants to add some custom data in request | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
