# # SmsNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the Notification. | [optional]
**locale** | **string** | The locale of the Notification. | [optional]
**price** | **string** | The price of the SMS. | [optional]
**sender_id** | **string** | The ID of sender. | [optional]
**recipient_id** | **string** | The ID of recipient. | [optional]
**message_sid** | **string** | The unique identifier of the SMS. | [optional]
**to_number** | **string** | The phone number to send the SMS to. | [optional]
**status** | **int** | The state of the Notification status.  - 1: Notification Accepted  - 2: Notification Blocked  - 3: Notification Sent  - 4: Notification Not Sent  - 5: Notification Delivered  - 6: Notification Not Delivered | [optional]
**custom_params** | **object** | The custom parameters of the notification. | [optional]
**created_at** | **\DateTime** | The datetime when the Notification was created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
