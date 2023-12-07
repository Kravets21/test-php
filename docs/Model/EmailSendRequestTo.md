# # EmailSendRequestTo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The full name to which the notification is sent. | [optional]
**email_address** | **string** | The email address to which the notification is sent. The email_address or recipient_id parameter must be specified. | [optional]
**external_id** | **string** | The external ID of recipient. This field creates a single recipient across different transports (email, push, SMS). | [optional]
**recipient_id** | **string** | The ID of recipient. This allows to send notification to existing recipient. If the recipient does not exist or does not have fields for sending email, then sending is blocked. The email_address or recipient_id parameter must be specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
