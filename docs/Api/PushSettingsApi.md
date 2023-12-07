# AirEml\PushSettingsApi

All URIs are relative to https://aireml.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPushPlatform()**](PushSettingsApi.md#createPushPlatform) | **POST** /api/v1/push/platforms | Create a New Push Notification Platform |
| [**listPushPlatforms()**](PushSettingsApi.md#listPushPlatforms) | **GET** /api/v1/push/platforms | List All Push Notification Platforms |


## `createPushPlatform()`

```php
createPushPlatform($push_platform_request): \AirEml\Model\PushPlatformResponse
```

Create a New Push Notification Platform

To create a new push notification platform in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\PushSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$push_platform_request = new \AirEml\Model\PushPlatformRequest(); // \AirEml\Model\PushPlatformRequest

try {
    $result = $apiInstance->createPushPlatform($push_platform_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushSettingsApi->createPushPlatform: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **push_platform_request** | [**\AirEml\Model\PushPlatformRequest**](../Model/PushPlatformRequest.md)|  | |

### Return type

[**\AirEml\Model\PushPlatformResponse**](../Model/PushPlatformResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPushPlatforms()`

```php
listPushPlatforms($cursor, $per_page, $order_by, $status): \AirEml\Model\PushPlatformCollectionResponse
```

List All Push Notification Platforms

To retrieve a list of all push notification platforms in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\PushSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by
$status = 1; // int | The filter value for show the records of the platforms that have a specific status.

try {
    $result = $apiInstance->listPushPlatforms($cursor, $per_page, $order_by, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushSettingsApi->listPushPlatforms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |
| **status** | **int**| The filter value for show the records of the platforms that have a specific status. | [optional] |

### Return type

[**\AirEml\Model\PushPlatformCollectionResponse**](../Model/PushPlatformCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
