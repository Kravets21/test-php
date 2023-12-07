# # PushTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the Template. | [optional]
**channel_id** | **string** | The unique identifier of the Channel. | [optional]
**name** | **string** | The name of the Template. | [optional]
**badge** | **int** | The badge number to display on the app icon. | [optional]
**priority** | **int** | The notification delivery priority. Pass 2 to send the notification immediately, or pass 1 to send the notification at a time that conserves the battery on the user&#39;s device. | [optional]
**ttl** | **int** | The time-to-live (TTL) value, in seconds, for the notification. The TTL value is the amount of time that FCM attempts to deliver the notification. If the notification is not delivered within the TTL value, FCM no longer attempts to deliver the notification. | [optional]
**status** | **int** | The status of the Template. Every digit matters: 1 - active, 2 - inactive. | [optional]
**locales** | **string[]** | List of locales available for this Template. | [optional]
**created_at** | **\DateTime** | The datetime when the Template was created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
