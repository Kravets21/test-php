# # SmsNotificationSendRequestTo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | The phone number to send the SMS to. The number or recipient_id parameter must be specified. | [optional]
**external_id** | **string** | The external ID of recipient. This field creates a single recipient across different transports (email, push, SMS). | [optional]
**recipient_id** | **string** | The ID of recipient. This allows to send notification to existing recipient. If the recipient does not exist or does not have fields for sending push, then sending is blocked. The number or recipient_id parameter must be specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
