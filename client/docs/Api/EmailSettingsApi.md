# AirEml\EmailSettingsApi

All URIs are relative to https://aireml.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEmailChannel()**](EmailSettingsApi.md#createEmailChannel) | **POST** /api/v1/email/channels | Create a New Email Notification Channel |
| [**createEmailChannelRoutingRule()**](EmailSettingsApi.md#createEmailChannelRoutingRule) | **POST** /api/v1/email/channels/{channel_id}/routing-rules | Create a Routing-rule in the Email Notification Channel |
| [**createEmailSender()**](EmailSettingsApi.md#createEmailSender) | **POST** /api/v1/email/senders | Create a New Email Notification Sender |
| [**createEmailTransport()**](EmailSettingsApi.md#createEmailTransport) | **POST** /api/v1/email/transports | Create a New Email Notification Transport |
| [**deleteEmailChannel()**](EmailSettingsApi.md#deleteEmailChannel) | **DELETE** /api/v1/email/channels/{channel_id} | Delete a Email Notification Channel |
| [**deleteEmailChannelRoutingRule()**](EmailSettingsApi.md#deleteEmailChannelRoutingRule) | **DELETE** /api/v1/email/channels/{channel_id}/routing-rules/{routing_rule_id} | Delete a Routing-rule from the Email Notification Channel |
| [**deleteEmailSender()**](EmailSettingsApi.md#deleteEmailSender) | **DELETE** /api/v1/email/senders/{sender_id} | Delete a Email Notification Sender |
| [**deleteEmailTransport()**](EmailSettingsApi.md#deleteEmailTransport) | **DELETE** /api/v1/email/transports/{transport_id} | Delete a Email Notification Transport |
| [**getEmailChannel()**](EmailSettingsApi.md#getEmailChannel) | **GET** /api/v1/email/channels/{channel_id} | Retrieve an Existing Email Notification Channel |
| [**getEmailChannelRoutingRule()**](EmailSettingsApi.md#getEmailChannelRoutingRule) | **GET** /api/v1/email/channels/{channel_id}/routing-rules/{routing_rule_id} | Retrieve an Existing Routing-rule from the Email Notification Channel |
| [**getEmailSender()**](EmailSettingsApi.md#getEmailSender) | **GET** /api/v1/email/senders/{sender_id} | Retrieve an Existing Email Notification Sender |
| [**getEmailTransport()**](EmailSettingsApi.md#getEmailTransport) | **GET** /api/v1/email/transports/{transport_id} | Retrieve an Existing Email Notification Transport |
| [**listEmailChannelRoutingRules()**](EmailSettingsApi.md#listEmailChannelRoutingRules) | **GET** /api/v1/email/channels/{channel_id}/routing-rules | List All Routing-rules from the Email Notification Channel |
| [**listEmailChannels()**](EmailSettingsApi.md#listEmailChannels) | **GET** /api/v1/email/channels | List All Email Notification Channels |
| [**listEmailSenders()**](EmailSettingsApi.md#listEmailSenders) | **GET** /api/v1/email/senders | List All Email Notification Senders |
| [**listEmailTransports()**](EmailSettingsApi.md#listEmailTransports) | **GET** /api/v1/email/transports | List All Email Notification Transports |
| [**updateEmailChannel()**](EmailSettingsApi.md#updateEmailChannel) | **PUT** /api/v1/email/channels/{channel_id} | Update a Email Notification Channel |
| [**updateEmailChannelRoutingRule()**](EmailSettingsApi.md#updateEmailChannelRoutingRule) | **PUT** /api/v1/email/channels/{channel_id}/routing-rules/{routing_rule_id} | Update a Routing-rule in the Email Notification Channel |
| [**updateEmailSender()**](EmailSettingsApi.md#updateEmailSender) | **PUT** /api/v1/email/senders/{sender_id} | Update a Email Notification Sender |
| [**updateEmailTransport()**](EmailSettingsApi.md#updateEmailTransport) | **PUT** /api/v1/email/transports/{transport_id} | Update a Email Notification Transport |


## `createEmailChannel()`

```php
createEmailChannel($email_channel_request): \AirEml\Model\EmailChannelResponse
```

Create a New Email Notification Channel

To create a new email notification channel in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_channel_request = new \AirEml\Model\EmailChannelRequest(); // \AirEml\Model\EmailChannelRequest

try {
    $result = $apiInstance->createEmailChannel($email_channel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->createEmailChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_channel_request** | [**\AirEml\Model\EmailChannelRequest**](../Model/EmailChannelRequest.md)|  | |

### Return type

[**\AirEml\Model\EmailChannelResponse**](../Model/EmailChannelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailChannelRoutingRule()`

```php
createEmailChannelRoutingRule($channel_id, $email_routing_rule_create_request): \AirEml\Model\EmailChannelRoutingRuleResponse
```

Create a Routing-rule in the Email Notification Channel

Create to a routing-rule in the email notification channel in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Channel
$email_routing_rule_create_request = new \AirEml\Model\EmailRoutingRuleCreateRequest(); // \AirEml\Model\EmailRoutingRuleCreateRequest

try {
    $result = $apiInstance->createEmailChannelRoutingRule($channel_id, $email_routing_rule_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->createEmailChannelRoutingRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| The ID of the Channel | |
| **email_routing_rule_create_request** | [**\AirEml\Model\EmailRoutingRuleCreateRequest**](../Model/EmailRoutingRuleCreateRequest.md)|  | |

### Return type

[**\AirEml\Model\EmailChannelRoutingRuleResponse**](../Model/EmailChannelRoutingRuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailSender()`

```php
createEmailSender($email_sender_create_request): \AirEml\Model\EmailSenderResponse
```

Create a New Email Notification Sender

To create a new email notification sender in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_sender_create_request = new \AirEml\Model\EmailSenderCreateRequest(); // \AirEml\Model\EmailSenderCreateRequest

try {
    $result = $apiInstance->createEmailSender($email_sender_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->createEmailSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_sender_create_request** | [**\AirEml\Model\EmailSenderCreateRequest**](../Model/EmailSenderCreateRequest.md)|  | |

### Return type

[**\AirEml\Model\EmailSenderResponse**](../Model/EmailSenderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailTransport()`

```php
createEmailTransport($email_transport_create_request): \AirEml\Model\EmailTransportResponse
```

Create a New Email Notification Transport

To create a new email notification transport in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_transport_create_request = new \AirEml\Model\EmailTransportCreateRequest(); // \AirEml\Model\EmailTransportCreateRequest

try {
    $result = $apiInstance->createEmailTransport($email_transport_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->createEmailTransport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_transport_create_request** | [**\AirEml\Model\EmailTransportCreateRequest**](../Model/EmailTransportCreateRequest.md)|  | |

### Return type

[**\AirEml\Model\EmailTransportResponse**](../Model/EmailTransportResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailChannel()`

```php
deleteEmailChannel($channel_id)
```

Delete a Email Notification Channel

To delete a email notification channel in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Channel

try {
    $apiInstance->deleteEmailChannel($channel_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->deleteEmailChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| The ID of the Channel | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailChannelRoutingRule()`

```php
deleteEmailChannelRoutingRule($channel_id, $routing_rule_id)
```

Delete a Routing-rule from the Email Notification Channel

To delete a routing-rule from the specific email notification channel in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Channel
$routing_rule_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Routing-rule

try {
    $apiInstance->deleteEmailChannelRoutingRule($channel_id, $routing_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->deleteEmailChannelRoutingRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| The ID of the Channel | |
| **routing_rule_id** | **string**| The ID of the Routing-rule | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailSender()`

```php
deleteEmailSender($sender_id)
```

Delete a Email Notification Sender

To delete a email notification sender in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Sender

try {
    $apiInstance->deleteEmailSender($sender_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->deleteEmailSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_id** | **string**| The ID of the Sender | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailTransport()`

```php
deleteEmailTransport($transport_id)
```

Delete a Email Notification Transport

To delete a email notification transport in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transport_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Transport

try {
    $apiInstance->deleteEmailTransport($transport_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->deleteEmailTransport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transport_id** | **string**| The ID of the Transport | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailChannel()`

```php
getEmailChannel($channel_id): \AirEml\Model\EmailChannelResponse
```

Retrieve an Existing Email Notification Channel

To get details about a specific email notification channel in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Channel

try {
    $result = $apiInstance->getEmailChannel($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->getEmailChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| The ID of the Channel | |

### Return type

[**\AirEml\Model\EmailChannelResponse**](../Model/EmailChannelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailChannelRoutingRule()`

```php
getEmailChannelRoutingRule($channel_id, $routing_rule_id): \AirEml\Model\EmailChannelRoutingRuleResponse
```

Retrieve an Existing Routing-rule from the Email Notification Channel

To get details about the specific routing-rule of the email notification channel in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Channel
$routing_rule_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Routing-rule

try {
    $result = $apiInstance->getEmailChannelRoutingRule($channel_id, $routing_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->getEmailChannelRoutingRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| The ID of the Channel | |
| **routing_rule_id** | **string**| The ID of the Routing-rule | |

### Return type

[**\AirEml\Model\EmailChannelRoutingRuleResponse**](../Model/EmailChannelRoutingRuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailSender()`

```php
getEmailSender($sender_id): \AirEml\Model\EmailSenderResponse
```

Retrieve an Existing Email Notification Sender

To get details about a specific email notification sender in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Sender

try {
    $result = $apiInstance->getEmailSender($sender_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->getEmailSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_id** | **string**| The ID of the Sender | |

### Return type

[**\AirEml\Model\EmailSenderResponse**](../Model/EmailSenderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailTransport()`

```php
getEmailTransport($transport_id): \AirEml\Model\EmailTransportResponse
```

Retrieve an Existing Email Notification Transport

To get details about a specific email notification transport in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transport_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Transport

try {
    $result = $apiInstance->getEmailTransport($transport_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->getEmailTransport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transport_id** | **string**| The ID of the Transport | |

### Return type

[**\AirEml\Model\EmailTransportResponse**](../Model/EmailTransportResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmailChannelRoutingRules()`

```php
listEmailChannelRoutingRules($channel_id, $cursor, $per_page, $order_by): \AirEml\Model\EmailChannelRoutingRulesCollectionResponse
```

List All Routing-rules from the Email Notification Channel

To retrieve a list of all routing-rules from the specific email notification channel in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Channel
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by

try {
    $result = $apiInstance->listEmailChannelRoutingRules($channel_id, $cursor, $per_page, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->listEmailChannelRoutingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| The ID of the Channel | |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |

### Return type

[**\AirEml\Model\EmailChannelRoutingRulesCollectionResponse**](../Model/EmailChannelRoutingRulesCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmailChannels()`

```php
listEmailChannels($cursor, $per_page, $order_by, $name): \AirEml\Model\EmailChannelCollectionResponse
```

List All Email Notification Channels

To retrieve a list of all email notification channels in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by
$name = Example Channel; // string | The filter value for show the records of the channels that have a specific name.

try {
    $result = $apiInstance->listEmailChannels($cursor, $per_page, $order_by, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->listEmailChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |
| **name** | **string**| The filter value for show the records of the channels that have a specific name. | [optional] |

### Return type

[**\AirEml\Model\EmailChannelCollectionResponse**](../Model/EmailChannelCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmailSenders()`

```php
listEmailSenders($cursor, $per_page, $order_by, $name): \AirEml\Model\EmailSenderCollectionResponse
```

List All Email Notification Senders

To retrieve a list of all email notification senders in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by
$name = John Doe; // string | The filter value for show the records of the senders that have a specific name.

try {
    $result = $apiInstance->listEmailSenders($cursor, $per_page, $order_by, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->listEmailSenders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |
| **name** | **string**| The filter value for show the records of the senders that have a specific name. | [optional] |

### Return type

[**\AirEml\Model\EmailSenderCollectionResponse**](../Model/EmailSenderCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmailTransports()`

```php
listEmailTransports($cursor, $per_page, $order_by, $name, $status): \AirEml\Model\EmailTransportCollectionResponse
```

List All Email Notification Transports

To retrieve a list of all email notification transports in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by
$name = SMTP; // string | The filter value for show the records of the transports that have a specific name.
$status = 1; // int | The filter value for show the records of the transports that have a specific status.

try {
    $result = $apiInstance->listEmailTransports($cursor, $per_page, $order_by, $name, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->listEmailTransports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |
| **name** | **string**| The filter value for show the records of the transports that have a specific name. | [optional] |
| **status** | **int**| The filter value for show the records of the transports that have a specific status. | [optional] |

### Return type

[**\AirEml\Model\EmailTransportCollectionResponse**](../Model/EmailTransportCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailChannel()`

```php
updateEmailChannel($channel_id, $email_channel_request): \AirEml\Model\EmailChannelResponse
```

Update a Email Notification Channel

To update details about a specific email notification channel in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Channel
$email_channel_request = new \AirEml\Model\EmailChannelRequest(); // \AirEml\Model\EmailChannelRequest

try {
    $result = $apiInstance->updateEmailChannel($channel_id, $email_channel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->updateEmailChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| The ID of the Channel | |
| **email_channel_request** | [**\AirEml\Model\EmailChannelRequest**](../Model/EmailChannelRequest.md)|  | |

### Return type

[**\AirEml\Model\EmailChannelResponse**](../Model/EmailChannelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailChannelRoutingRule()`

```php
updateEmailChannelRoutingRule($channel_id, $routing_rule_id, $email_routing_rule_update_request): \AirEml\Model\EmailChannelRoutingRuleResponse
```

Update a Routing-rule in the Email Notification Channel

Update to a routing-rule in the email notification channel in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Channel
$routing_rule_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Routing-rule
$email_routing_rule_update_request = new \AirEml\Model\EmailRoutingRuleUpdateRequest(); // \AirEml\Model\EmailRoutingRuleUpdateRequest

try {
    $result = $apiInstance->updateEmailChannelRoutingRule($channel_id, $routing_rule_id, $email_routing_rule_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->updateEmailChannelRoutingRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| The ID of the Channel | |
| **routing_rule_id** | **string**| The ID of the Routing-rule | |
| **email_routing_rule_update_request** | [**\AirEml\Model\EmailRoutingRuleUpdateRequest**](../Model/EmailRoutingRuleUpdateRequest.md)|  | |

### Return type

[**\AirEml\Model\EmailChannelRoutingRuleResponse**](../Model/EmailChannelRoutingRuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailSender()`

```php
updateEmailSender($sender_id, $email_sender_update_request): \AirEml\Model\EmailSenderResponse
```

Update a Email Notification Sender

To update details about a specific email notification sender in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Sender
$email_sender_update_request = new \AirEml\Model\EmailSenderUpdateRequest(); // \AirEml\Model\EmailSenderUpdateRequest

try {
    $result = $apiInstance->updateEmailSender($sender_id, $email_sender_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->updateEmailSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_id** | **string**| The ID of the Sender | |
| **email_sender_update_request** | [**\AirEml\Model\EmailSenderUpdateRequest**](../Model/EmailSenderUpdateRequest.md)|  | |

### Return type

[**\AirEml\Model\EmailSenderResponse**](../Model/EmailSenderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailTransport()`

```php
updateEmailTransport($transport_id, $email_transport_update_request): \AirEml\Model\EmailTransportResponse
```

Update a Email Notification Transport

To update details about a specific email notification transport in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transport_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Transport
$email_transport_update_request = new \AirEml\Model\EmailTransportUpdateRequest(); // \AirEml\Model\EmailTransportUpdateRequest

try {
    $result = $apiInstance->updateEmailTransport($transport_id, $email_transport_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->updateEmailTransport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transport_id** | **string**| The ID of the Transport | |
| **email_transport_update_request** | [**\AirEml\Model\EmailTransportUpdateRequest**](../Model/EmailTransportUpdateRequest.md)|  | |

### Return type

[**\AirEml\Model\EmailTransportResponse**](../Model/EmailTransportResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
