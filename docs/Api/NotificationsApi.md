# AirEml\NotificationsApi

All URIs are relative to https://aireml.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEmailNotification()**](NotificationsApi.md#getEmailNotification) | **GET** /api/v1/email/notifications/{notification_id} | Retrieve an Existing Email Notification |
| [**getEmailNotificationStates()**](NotificationsApi.md#getEmailNotificationStates) | **GET** /api/v1/email/notifications/{notification_id}/states | Retrieve an Existing Email Notification States |
| [**getPushNotification()**](NotificationsApi.md#getPushNotification) | **GET** /api/v1/push/notifications/{notification_id} | Retrieve an Existing Push Notification |
| [**getPushNotificationStates()**](NotificationsApi.md#getPushNotificationStates) | **GET** /api/v1/push/notifications/{notification_id}/states | Retrieve an Existing Push Notification States |
| [**getSmsNotification()**](NotificationsApi.md#getSmsNotification) | **GET** /api/v1/sms/notifications/{notification_id} | Retrieve an Existing SMS Notification |
| [**getSmsNotificationStates()**](NotificationsApi.md#getSmsNotificationStates) | **GET** /api/v1/sms/notifications/{notification_id}/states | Retrieve an Existing Sms Notification States |
| [**listEmailNotifications()**](NotificationsApi.md#listEmailNotifications) | **GET** /api/v1/email/notifications | List All Email Notifications |
| [**listPushNotifications()**](NotificationsApi.md#listPushNotifications) | **GET** /api/v1/push/notifications | List All Push Notifications |
| [**listSmsNotifications()**](NotificationsApi.md#listSmsNotifications) | **GET** /api/v1/sms/notifications | List All SMS Notifications |


## `getEmailNotification()`

```php
getEmailNotification($notification_id): \AirEml\Model\EmailNotificationResponse
```

Retrieve an Existing Email Notification

To get details about a specific email notification in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$notification_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Notification

try {
    $result = $apiInstance->getEmailNotification($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getEmailNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_id** | **string**| The ID of the Notification | |

### Return type

[**\AirEml\Model\EmailNotificationResponse**](../Model/EmailNotificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailNotificationStates()`

```php
getEmailNotificationStates($notification_id): \AirEml\Model\EmailNotificationStateResponse
```

Retrieve an Existing Email Notification States

To get details about a specific email notification status states in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$notification_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Notification

try {
    $result = $apiInstance->getEmailNotificationStates($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getEmailNotificationStates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_id** | **string**| The ID of the Notification | |

### Return type

[**\AirEml\Model\EmailNotificationStateResponse**](../Model/EmailNotificationStateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPushNotification()`

```php
getPushNotification($notification_id): \AirEml\Model\PushNotificationResponse
```

Retrieve an Existing Push Notification

To get details about a specific push notification in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$notification_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Notification

try {
    $result = $apiInstance->getPushNotification($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getPushNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_id** | **string**| The ID of the Notification | |

### Return type

[**\AirEml\Model\PushNotificationResponse**](../Model/PushNotificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPushNotificationStates()`

```php
getPushNotificationStates($notification_id): \AirEml\Model\PushNotificationStateResponse
```

Retrieve an Existing Push Notification States

To get details about a specific push notification status states in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$notification_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Notification

try {
    $result = $apiInstance->getPushNotificationStates($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getPushNotificationStates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_id** | **string**| The ID of the Notification | |

### Return type

[**\AirEml\Model\PushNotificationStateResponse**](../Model/PushNotificationStateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmsNotification()`

```php
getSmsNotification($notification_id): \AirEml\Model\SmsNotificationResponse
```

Retrieve an Existing SMS Notification

To get details about a specific sms notification in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$notification_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Notification

try {
    $result = $apiInstance->getSmsNotification($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getSmsNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_id** | **string**| The ID of the Notification | |

### Return type

[**\AirEml\Model\SmsNotificationResponse**](../Model/SmsNotificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmsNotificationStates()`

```php
getSmsNotificationStates($notification_id): \AirEml\Model\SmsNotificationStateResponse
```

Retrieve an Existing Sms Notification States

To get details about a specific sms notification status states in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$notification_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Notification

try {
    $result = $apiInstance->getSmsNotificationStates($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getSmsNotificationStates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_id** | **string**| The ID of the Notification | |

### Return type

[**\AirEml\Model\SmsNotificationStateResponse**](../Model/SmsNotificationStateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmailNotifications()`

```php
listEmailNotifications($cursor, $per_page, $order_by, $to_email_address, $template_id, $template_name, $recipient_id): \AirEml\Model\EmailNotificationCollectionResponse
```

List All Email Notifications

To retrieve a list of all email notifications in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by
$to_email_address = example@axample.com; // string | The email address of the Notification
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The template id of the Notification
$template_name = welcome_to_documentation; // string | The template name of the Notification
$recipient_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The recipient id of the Notification

try {
    $result = $apiInstance->listEmailNotifications($cursor, $per_page, $order_by, $to_email_address, $template_id, $template_name, $recipient_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->listEmailNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |
| **to_email_address** | **string**| The email address of the Notification | [optional] |
| **template_id** | **string**| The template id of the Notification | [optional] |
| **template_name** | **string**| The template name of the Notification | [optional] |
| **recipient_id** | **string**| The recipient id of the Notification | [optional] |

### Return type

[**\AirEml\Model\EmailNotificationCollectionResponse**](../Model/EmailNotificationCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPushNotifications()`

```php
listPushNotifications($cursor, $per_page, $order_by, $recipient_id, $token, $template_id, $template_name): \AirEml\Model\PushNotificationCollectionResponse
```

List All Push Notifications

To retrieve a list of all push notifications in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by
$recipient_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The recipient id of the Notification
$token = 01234567890:ABCDEFGpERNZ7em...aB06VJ-ABCD_XB34UgMJ6_abc_mJqnne8KxuHYxmemu21othozA3hqdNpKcmMr; // string | The device token of the Notification
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The template id of the Notification
$template_name = welcome_to_documentation; // string | The template name of the Notification

try {
    $result = $apiInstance->listPushNotifications($cursor, $per_page, $order_by, $recipient_id, $token, $template_id, $template_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->listPushNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |
| **recipient_id** | **string**| The recipient id of the Notification | [optional] |
| **token** | **string**| The device token of the Notification | [optional] |
| **template_id** | **string**| The template id of the Notification | [optional] |
| **template_name** | **string**| The template name of the Notification | [optional] |

### Return type

[**\AirEml\Model\PushNotificationCollectionResponse**](../Model/PushNotificationCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSmsNotifications()`

```php
listSmsNotifications($cursor, $per_page, $order_by, $template_name, $template_id, $from_number, $to_number, $recipient_id): \AirEml\Model\SmsNotificationCollectionResponse
```

List All SMS Notifications

To retrieve a list of all sms notifications in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by
$template_name = welcome_to_documentation; // string | To filter records by the template name of the Notification.
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The template id of the Notification
$from_number = +17779091327; // string | The filter value for getting records with provided from number.
$to_number = +19379091324; // string | The filter value for show the records of the notifications that have a similar to number.
$recipient_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The recipient id of the Notification

try {
    $result = $apiInstance->listSmsNotifications($cursor, $per_page, $order_by, $template_name, $template_id, $from_number, $to_number, $recipient_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->listSmsNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |
| **template_name** | **string**| To filter records by the template name of the Notification. | [optional] |
| **template_id** | **string**| The template id of the Notification | [optional] |
| **from_number** | **string**| The filter value for getting records with provided from number. | [optional] |
| **to_number** | **string**| The filter value for show the records of the notifications that have a similar to number. | [optional] |
| **recipient_id** | **string**| The recipient id of the Notification | [optional] |

### Return type

[**\AirEml\Model\SmsNotificationCollectionResponse**](../Model/SmsNotificationCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
