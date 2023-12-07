# AirEml\SendingApi

All URIs are relative to https://aireml.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sendEmail()**](SendingApi.md#sendEmail) | **POST** /api/v1/email/send | Send Email |
| [**sendEmailBatch()**](SendingApi.md#sendEmailBatch) | **POST** /api/v1/email/send/batch | Send Email Batch |
| [**sendPush()**](SendingApi.md#sendPush) | **POST** /api/v1/push/send | Send Push Notification |
| [**sendSmsBatchNotification()**](SendingApi.md#sendSmsBatchNotification) | **POST** /api/v1/sms/send/batch | Send SMS Batch Notification |
| [**sendSmsNotification()**](SendingApi.md#sendSmsNotification) | **POST** /api/v1/sms/send | Send SMS Notification |


## `sendEmail()`

```php
sendEmail($email_send_request): \AirEml\Model\EmailSendResponse
```

Send Email

To send an email notification using your workspace resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\SendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_send_request = new \AirEml\Model\EmailSendRequest(); // \AirEml\Model\EmailSendRequest

try {
    $result = $apiInstance->sendEmail($email_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendingApi->sendEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_send_request** | [**\AirEml\Model\EmailSendRequest**](../Model/EmailSendRequest.md)|  | [optional] |

### Return type

[**\AirEml\Model\EmailSendResponse**](../Model/EmailSendResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEmailBatch()`

```php
sendEmailBatch($email_send_batch_request): \AirEml\Model\EmailSendBatchResponse
```

Send Email Batch

To send batch of email notifications using your workspace resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\SendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_send_batch_request = new \AirEml\Model\EmailSendBatchRequest(); // \AirEml\Model\EmailSendBatchRequest

try {
    $result = $apiInstance->sendEmailBatch($email_send_batch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendingApi->sendEmailBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_send_batch_request** | [**\AirEml\Model\EmailSendBatchRequest**](../Model/EmailSendBatchRequest.md)|  | [optional] |

### Return type

[**\AirEml\Model\EmailSendBatchResponse**](../Model/EmailSendBatchResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendPush()`

```php
sendPush($push_notification_send_request): \AirEml\Model\PushNotificationSentResponse
```

Send Push Notification

To send a new push notification using your workspace resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\SendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$push_notification_send_request = new \AirEml\Model\PushNotificationSendRequest(); // \AirEml\Model\PushNotificationSendRequest

try {
    $result = $apiInstance->sendPush($push_notification_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendingApi->sendPush: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **push_notification_send_request** | [**\AirEml\Model\PushNotificationSendRequest**](../Model/PushNotificationSendRequest.md)|  | [optional] |

### Return type

[**\AirEml\Model\PushNotificationSentResponse**](../Model/PushNotificationSentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendSmsBatchNotification()`

```php
sendSmsBatchNotification($sms_notification_send_multiple_request): \AirEml\Model\SmsMultipleNotificationSentResponse
```

Send SMS Batch Notification

To send a new sms batch notification using your workspace resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\SendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sms_notification_send_multiple_request = new \AirEml\Model\SmsNotificationSendMultipleRequest(); // \AirEml\Model\SmsNotificationSendMultipleRequest

try {
    $result = $apiInstance->sendSmsBatchNotification($sms_notification_send_multiple_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendingApi->sendSmsBatchNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_notification_send_multiple_request** | [**\AirEml\Model\SmsNotificationSendMultipleRequest**](../Model/SmsNotificationSendMultipleRequest.md)|  | |

### Return type

[**\AirEml\Model\SmsMultipleNotificationSentResponse**](../Model/SmsMultipleNotificationSentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendSmsNotification()`

```php
sendSmsNotification($sms_notification_send_request): \AirEml\Model\SmsNotificationSentResponse
```

Send SMS Notification

To send a new sms notification using your workspace resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\SendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sms_notification_send_request = new \AirEml\Model\SmsNotificationSendRequest(); // \AirEml\Model\SmsNotificationSendRequest

try {
    $result = $apiInstance->sendSmsNotification($sms_notification_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendingApi->sendSmsNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_notification_send_request** | [**\AirEml\Model\SmsNotificationSendRequest**](../Model/SmsNotificationSendRequest.md)|  | |

### Return type

[**\AirEml\Model\SmsNotificationSentResponse**](../Model/SmsNotificationSentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
