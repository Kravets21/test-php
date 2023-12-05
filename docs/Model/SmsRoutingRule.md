# # SmsRoutingRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the routing rules. | [optional]
**sender_id** | **string** | The unique identifier of the Sender. | [optional]
**is_reserved** | **bool** | You can mark your number as Spare true and use it when main number can&#39;t send sms. | [optional]
**alpha_number** | **string** | You can use short alias, text Alphanumeric Sender ID instead digital number | [optional]
**priority** | **int** | Priority number will try to send sms firstly. | [optional]
**status** | **int** | The status of the Routing-rule. Every digit matters: 1 - active, 2 - inactive. | [optional]
**country_code** | [**\OpenAPI\Client\Model\CountryCode**](CountryCode.md) |  | [optional]
**excluded_countries** | [**\OpenAPI\Client\Model\CountryCode[]**](CountryCode.md) | List of excluded to send countries. | [optional]
**created_at** | **\DateTime** | The datetime when the Channel Rule was created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
