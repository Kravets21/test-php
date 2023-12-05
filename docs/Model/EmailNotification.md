# # EmailNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the Notification. | [optional]
**locale** | [**\OpenAPI\Client\Model\LocaleCode**](LocaleCode.md) |  | [optional]
**recipient_id** | **string** | The ID of recipient. | [optional]
**to_name** | **string** | The name of the recipient. | [optional]
**to_email_address** | **string** | The email address of the recipient. | [optional]
**from_name** | **string** | The name of the sender. | [optional]
**from_email_address** | **string** | The email address of the sender. | [optional]
**status** | **int** | The state of the Notification status.  - 1: Notification Accepted  - 2: Notification Blocked  - 3: Notification Sent  - 4: Notification Not Sent  - 5: Notification Delivered  - 6: Notification Not Delivered | [optional]
**custom_params** | **object** | The custom parameters of the notification. | [optional]
**created_at** | **\DateTime** | The datetime when the Notification was created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
