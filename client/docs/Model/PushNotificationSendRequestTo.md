# # PushNotificationSendRequestTo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | The external ID of recipient. This field creates a single recipient across different transports (email, push, SMS). | [optional]
**recipient_id** | **string** | The ID of recipient. This allows to send notification to existing recipient. If the recipient does not exist or does not have fields for sending push, then sending is blocked. The message.token or recipient_id parameter must be specified. | [optional]
**token** | **string** | The Token of recipient. | [optional]
**platform** | **string** | The Recipient push token platform. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
