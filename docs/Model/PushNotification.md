# # PushNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the Notification. | [optional]
**locale** | [**\AirEml\Model\LocaleCode**](LocaleCode.md) |  | [optional]
**token** | **string** | The recipient token of the Notification. | [optional]
**recipient_id** | **string** | The ID of recipient. | [optional]
**status** | **int** | The state of the Notification status.  - 1: Notification Accepted  - 2: Notification Blocked  - 3: Notification Sent  - 4: Notification Not Sent  - 5: Notification Delivered  - 6: Notification Not Delivered | [optional]
**custom_params** | **object** | The custom parameters of the Notification. | [optional]
**delivered_at** | **\DateTime** | The datetime when the Notification was delivered. | [optional]
**opened_at** | **\DateTime** | The datetime when the Notification was opened. | [optional]
**created_at** | **\DateTime** | The datetime when the Notification was created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
