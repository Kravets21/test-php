# OpenAPI\Client\SendingApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sendEmail()**](SendingApi.md#sendEmail) | **POST** /api/v1/email/send | Send Email |
| [**sendEmailBatch()**](SendingApi.md#sendEmailBatch) | **POST** /api/v1/email/send/batch | Send Email Batch |
| [**sendPush()**](SendingApi.md#sendPush) | **POST** /api/v1/push/send | Send Push Notification |
| [**sendSmsBatchNotification()**](SendingApi.md#sendSmsBatchNotification) | **POST** /api/v1/sms/send/batch | Send SMS Batch Notification |
| [**sendSmsNotification()**](SendingApi.md#sendSmsNotification) | **POST** /api/v1/sms/send | Send SMS Notification |


## `sendEmail()`

```php
sendEmail($email_send_request): \OpenAPI\Client\Model\EmailSendResponse
```

Send Email

To send an email notification using your workspace resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_send_request = new \OpenAPI\Client\Model\EmailSendRequest(); // \OpenAPI\Client\Model\EmailSendRequest

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
| **email_send_request** | [**\OpenAPI\Client\Model\EmailSendRequest**](../Model/EmailSendRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmailSendResponse**](../Model/EmailSendResponse.md)

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
sendEmailBatch($email_send_batch_request): \OpenAPI\Client\Model\EmailSendBatchResponse
```

Send Email Batch

To send batch of email notifications using your workspace resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_send_batch_request = new \OpenAPI\Client\Model\EmailSendBatchRequest(); // \OpenAPI\Client\Model\EmailSendBatchRequest

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
| **email_send_batch_request** | [**\OpenAPI\Client\Model\EmailSendBatchRequest**](../Model/EmailSendBatchRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmailSendBatchResponse**](../Model/EmailSendBatchResponse.md)

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
sendPush($push_notification_send_request): \OpenAPI\Client\Model\PushNotificationSentResponse
```

Send Push Notification

To send a new push notification using your workspace resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$push_notification_send_request = new \OpenAPI\Client\Model\PushNotificationSendRequest(); // \OpenAPI\Client\Model\PushNotificationSendRequest

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
| **push_notification_send_request** | [**\OpenAPI\Client\Model\PushNotificationSendRequest**](../Model/PushNotificationSendRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PushNotificationSentResponse**](../Model/PushNotificationSentResponse.md)

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
sendSmsBatchNotification($sms_notification_send_multiple_request): \OpenAPI\Client\Model\SmsMultipleNotificationSentResponse
```

Send SMS Batch Notification

To send a new sms batch notification using your workspace resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sms_notification_send_multiple_request = new \OpenAPI\Client\Model\SmsNotificationSendMultipleRequest(); // \OpenAPI\Client\Model\SmsNotificationSendMultipleRequest

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
| **sms_notification_send_multiple_request** | [**\OpenAPI\Client\Model\SmsNotificationSendMultipleRequest**](../Model/SmsNotificationSendMultipleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SmsMultipleNotificationSentResponse**](../Model/SmsMultipleNotificationSentResponse.md)

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
sendSmsNotification($sms_notification_send_request): \OpenAPI\Client\Model\SmsNotificationSentResponse
```

Send SMS Notification

To send a new sms notification using your workspace resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sms_notification_send_request = new \OpenAPI\Client\Model\SmsNotificationSendRequest(); // \OpenAPI\Client\Model\SmsNotificationSendRequest

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
| **sms_notification_send_request** | [**\OpenAPI\Client\Model\SmsNotificationSendRequest**](../Model/SmsNotificationSendRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SmsNotificationSentResponse**](../Model/SmsNotificationSentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
