# AirEml\WebhooksApi

All URIs are relative to https://aireml.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebhookSubscription()**](WebhooksApi.md#createWebhookSubscription) | **POST** /api/v1/webhook/subscriptions | Create a New Subscription |
| [**deleteWebhookSubscription()**](WebhooksApi.md#deleteWebhookSubscription) | **DELETE** /api/v1/webhook/subscriptions/{webhook_subscription_id} | Delete a webhook subscription |
| [**getWebhookSubscription()**](WebhooksApi.md#getWebhookSubscription) | **GET** /api/v1/webhook/subscriptions/{webhook_subscription_id} | Retrieve an Existing webhook subscription |
| [**listWebhookEvents()**](WebhooksApi.md#listWebhookEvents) | **GET** /api/v1/webhook/events | List All Webhook events |
| [**listWebhookSubscriptions()**](WebhooksApi.md#listWebhookSubscriptions) | **GET** /api/v1/webhook/subscriptions | List All webhook Subscriptions |
| [**updateWebhookSubscription()**](WebhooksApi.md#updateWebhookSubscription) | **PUT** /api/v1/webhook/subscriptions/{webhook_subscription_id} | Update a webhook subscription |


## `createWebhookSubscription()`

```php
createWebhookSubscription($subscription_create_request): \AirEml\Model\SubscriptionResponse
```

Create a New Subscription

To create a new subscription in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_create_request = new \AirEml\Model\SubscriptionCreateRequest(); // \AirEml\Model\SubscriptionCreateRequest

try {
    $result = $apiInstance->createWebhookSubscription($subscription_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_create_request** | [**\AirEml\Model\SubscriptionCreateRequest**](../Model/SubscriptionCreateRequest.md)|  | |

### Return type

[**\AirEml\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhookSubscription()`

```php
deleteWebhookSubscription($webhook_subscription_id)
```

Delete a webhook subscription

To delete a webhook subscription in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webhook_subscription_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Webhook subscription

try {
    $apiInstance->deleteWebhookSubscription($webhook_subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_subscription_id** | **string**| The ID of the Webhook subscription | |

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

## `getWebhookSubscription()`

```php
getWebhookSubscription($webhook_subscription_id): \AirEml\Model\SubscriptionResponse
```

Retrieve an Existing webhook subscription

To get details about a specific subscription in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webhook_subscription_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Webhook subscription

try {
    $result = $apiInstance->getWebhookSubscription($webhook_subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_subscription_id** | **string**| The ID of the Webhook subscription | |

### Return type

[**\AirEml\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhookEvents()`

```php
listWebhookEvents(): \AirEml\Model\EventResponse
```

List All Webhook events

To retrieve a list of all webhook events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listWebhookEvents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listWebhookEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AirEml\Model\EventResponse**](../Model/EventResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhookSubscriptions()`

```php
listWebhookSubscriptions($cursor, $per_page, $order_by, $search, $status): \AirEml\Model\SubscriptionCollectionResponse
```

List All webhook Subscriptions

To retrieve a list of all webhook subscriptions in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by
$search = example_subscription; // string | The name of the Subscription.
$status = 1; // int | The status of the Subscription.

try {
    $result = $apiInstance->listWebhookSubscriptions($cursor, $per_page, $order_by, $search, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listWebhookSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |
| **search** | **string**| The name of the Subscription. | [optional] |
| **status** | **int**| The status of the Subscription. | [optional] |

### Return type

[**\AirEml\Model\SubscriptionCollectionResponse**](../Model/SubscriptionCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhookSubscription()`

```php
updateWebhookSubscription($webhook_subscription_id, $subscription_update_request): \AirEml\Model\SubscriptionResponse
```

Update a webhook subscription

To update details about a specific webhook subscription in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webhook_subscription_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the webhook subscription
$subscription_update_request = new \AirEml\Model\SubscriptionUpdateRequest(); // \AirEml\Model\SubscriptionUpdateRequest

try {
    $result = $apiInstance->updateWebhookSubscription($webhook_subscription_id, $subscription_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_subscription_id** | **string**| The ID of the webhook subscription | |
| **subscription_update_request** | [**\AirEml\Model\SubscriptionUpdateRequest**](../Model/SubscriptionUpdateRequest.md)|  | |

### Return type

[**\AirEml\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
