# # Subscription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier for webhook subscription resource | [optional]
**description** | **string** | A short explanation, what about this webhook subscription | [optional]
**events** | **string[]** | List of events which webhook subscription subscribed | [optional]
**metadata** | **object** |  | [optional]
**status** | **int** | The status of the webhook subscription. Every digit matters:   1 - active,   2 - inactive. | [optional]
**url** | **string** | The url address to where need make post request | [optional]
**created_at** | **\DateTime** | The datetime when the webhook subscription was created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
