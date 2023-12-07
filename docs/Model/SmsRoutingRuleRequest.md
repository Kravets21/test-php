# # SmsRoutingRuleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_id** | **string** | The unique identifier of the Sender. |
**country_code** | [**\AirEml\Model\LocaleCode**](LocaleCode.md) |  | [optional]
**excluded_countries** | [**\AirEml\Model\LocaleCode[]**](LocaleCode.md) |  | [optional]
**is_reserved** | **bool** | You can mark your number true and use it when main number can&#39;t send sms | [optional]
**alpha_number** | **string** | You can use short alias, text Alphanumeric Sender ID instead digital number | [optional]
**priority** | **int** | Priority number will try to send sms firstly | [optional]
**status** | **int** | The status of the Routing-rule. Every digit matters: 1 - active, 2 - inactive. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
