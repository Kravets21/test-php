# # EmailNotificationStateInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **int** | The state of the Notification status.  - 1: Notification Accepted  - 2: Notification Blocked  - 3: Notification Sent  - 4: Notification Not Sent  - 5: Notification Delivered  - 6: Notification Not Delivered | [optional]
**reason** | **string** | The message of the Notification status. Contains the error message if the Notification was not sent or additional information about status state. | [optional]
**data** | **object** | Json string Data about this notification state step.  Helps to debug or understanding problem or just information. Notice: fields can be differently depends status and errors. | [optional]
**time** | **\DateTime** | The datetime when the Notification Status was updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
