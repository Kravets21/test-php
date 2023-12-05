# OpenAPI\Client\PushTemplatesApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPushTemplate()**](PushTemplatesApi.md#createPushTemplate) | **POST** /api/v1/push/templates | Create a New Push Notification Template |
| [**createPushTemplateContent()**](PushTemplatesApi.md#createPushTemplateContent) | **POST** /api/v1/push/templates/{template_id}/contents/{template_content_locale} | Create a Content in the Push Notification Template |
| [**deletePushTemplate()**](PushTemplatesApi.md#deletePushTemplate) | **DELETE** /api/v1/push/templates/{template_id} | Delete a Push Notification Template |
| [**deletePushTemplateContent()**](PushTemplatesApi.md#deletePushTemplateContent) | **DELETE** /api/v1/push/templates/{template_id}/contents/{template_content_locale} | Delete a Content from the Push Notification Template |
| [**getPushTemplate()**](PushTemplatesApi.md#getPushTemplate) | **GET** /api/v1/push/templates/{template_id} | Retrieve an Existing Push Notification Template |
| [**getPushTemplateContent()**](PushTemplatesApi.md#getPushTemplateContent) | **GET** /api/v1/push/templates/{template_id}/contents/{template_content_locale} | Retrieve an Existing Content from the Push Notification Template |
| [**listPushTemplateContents()**](PushTemplatesApi.md#listPushTemplateContents) | **GET** /api/v1/push/templates/{template_id}/contents | List All Contents from the Push Notification Template |
| [**listPushTemplates()**](PushTemplatesApi.md#listPushTemplates) | **GET** /api/v1/push/templates | List All Push Notification Templates |
| [**updatePushTemplate()**](PushTemplatesApi.md#updatePushTemplate) | **PUT** /api/v1/push/templates/{template_id} | Update a Push Notification Template |
| [**updatePushTemplateContent()**](PushTemplatesApi.md#updatePushTemplateContent) | **PUT** /api/v1/push/templates/{template_id}/contents/{template_content_locale} | Update a Content in the Push Notification Template |


## `createPushTemplate()`

```php
createPushTemplate($push_template_request): \OpenAPI\Client\Model\PushTemplateResponse
```

Create a New Push Notification Template

To create a new push notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PushTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$push_template_request = new \OpenAPI\Client\Model\PushTemplateRequest(); // \OpenAPI\Client\Model\PushTemplateRequest

try {
    $result = $apiInstance->createPushTemplate($push_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushTemplatesApi->createPushTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **push_template_request** | [**\OpenAPI\Client\Model\PushTemplateRequest**](../Model/PushTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PushTemplateResponse**](../Model/PushTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPushTemplateContent()`

```php
createPushTemplateContent($template_id, $template_content_locale, $push_template_content_request): \OpenAPI\Client\Model\PushTemplateContentResponse
```

Create a Content in the Push Notification Template

To create a content in the push notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PushTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$template_content_locale = en; // LocaleCode | The locale of the Template Content
$push_template_content_request = new \OpenAPI\Client\Model\PushTemplateContentRequest(); // \OpenAPI\Client\Model\PushTemplateContentRequest

try {
    $result = $apiInstance->createPushTemplateContent($template_id, $template_content_locale, $push_template_content_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushTemplatesApi->createPushTemplateContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |
| **template_content_locale** | [**LocaleCode**](../Model/.md)| The locale of the Template Content | |
| **push_template_content_request** | [**\OpenAPI\Client\Model\PushTemplateContentRequest**](../Model/PushTemplateContentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PushTemplateContentResponse**](../Model/PushTemplateContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePushTemplate()`

```php
deletePushTemplate($template_id)
```

Delete a Push Notification Template

To delete a push notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PushTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template

try {
    $apiInstance->deletePushTemplate($template_id);
} catch (Exception $e) {
    echo 'Exception when calling PushTemplatesApi->deletePushTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |

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

## `deletePushTemplateContent()`

```php
deletePushTemplateContent($template_id, $template_content_locale)
```

Delete a Content from the Push Notification Template

To delete a content from the specific push notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PushTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$template_content_locale = en; // LocaleCode | The locale of the Template Content

try {
    $apiInstance->deletePushTemplateContent($template_id, $template_content_locale);
} catch (Exception $e) {
    echo 'Exception when calling PushTemplatesApi->deletePushTemplateContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |
| **template_content_locale** | [**LocaleCode**](../Model/.md)| The locale of the Template Content | |

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

## `getPushTemplate()`

```php
getPushTemplate($template_id): \OpenAPI\Client\Model\PushTemplateResponse
```

Retrieve an Existing Push Notification Template

To get details about a specific push notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PushTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template

try {
    $result = $apiInstance->getPushTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushTemplatesApi->getPushTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |

### Return type

[**\OpenAPI\Client\Model\PushTemplateResponse**](../Model/PushTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPushTemplateContent()`

```php
getPushTemplateContent($template_id, $template_content_locale): \OpenAPI\Client\Model\PushTemplateContentResponse
```

Retrieve an Existing Content from the Push Notification Template

To get details about the specific content of the push notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PushTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$template_content_locale = en; // LocaleCode | The locale of the Template Content

try {
    $result = $apiInstance->getPushTemplateContent($template_id, $template_content_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushTemplatesApi->getPushTemplateContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |
| **template_content_locale** | [**LocaleCode**](../Model/.md)| The locale of the Template Content | |

### Return type

[**\OpenAPI\Client\Model\PushTemplateContentResponse**](../Model/PushTemplateContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPushTemplateContents()`

```php
listPushTemplateContents($template_id, $cursor, $per_page, $order_by): \OpenAPI\Client\Model\PushTemplateContentCollectionResponse
```

List All Contents from the Push Notification Template

To retrieve a list of all contents from the specific push notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PushTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by

try {
    $result = $apiInstance->listPushTemplateContents($template_id, $cursor, $per_page, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushTemplatesApi->listPushTemplateContents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |

### Return type

[**\OpenAPI\Client\Model\PushTemplateContentCollectionResponse**](../Model/PushTemplateContentCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPushTemplates()`

```php
listPushTemplates($cursor, $per_page, $order_by, $name, $status): \OpenAPI\Client\Model\PushTemplateCollectionResponse
```

List All Push Notification Templates

To retrieve a list of all push notification templates in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PushTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by
$name = welcome_to_documentation; // string | The name of the Template.
$status = 1; // int | The status of the Template.

try {
    $result = $apiInstance->listPushTemplates($cursor, $per_page, $order_by, $name, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushTemplatesApi->listPushTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |
| **name** | **string**| The name of the Template. | [optional] |
| **status** | **int**| The status of the Template. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PushTemplateCollectionResponse**](../Model/PushTemplateCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePushTemplate()`

```php
updatePushTemplate($template_id, $push_template_update_request): \OpenAPI\Client\Model\PushTemplateResponse
```

Update a Push Notification Template

To update details about a specific push notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PushTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$push_template_update_request = new \OpenAPI\Client\Model\PushTemplateUpdateRequest(); // \OpenAPI\Client\Model\PushTemplateUpdateRequest

try {
    $result = $apiInstance->updatePushTemplate($template_id, $push_template_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushTemplatesApi->updatePushTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |
| **push_template_update_request** | [**\OpenAPI\Client\Model\PushTemplateUpdateRequest**](../Model/PushTemplateUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PushTemplateResponse**](../Model/PushTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePushTemplateContent()`

```php
updatePushTemplateContent($template_id, $template_content_locale, $push_template_content_request): \OpenAPI\Client\Model\PushTemplateContentResponse
```

Update a Content in the Push Notification Template

Update to a content in the push notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PushTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$template_content_locale = en; // LocaleCode | The locale of the Template Content
$push_template_content_request = new \OpenAPI\Client\Model\PushTemplateContentRequest(); // \OpenAPI\Client\Model\PushTemplateContentRequest

try {
    $result = $apiInstance->updatePushTemplateContent($template_id, $template_content_locale, $push_template_content_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushTemplatesApi->updatePushTemplateContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |
| **template_content_locale** | [**LocaleCode**](../Model/.md)| The locale of the Template Content | |
| **push_template_content_request** | [**\OpenAPI\Client\Model\PushTemplateContentRequest**](../Model/PushTemplateContentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PushTemplateContentResponse**](../Model/PushTemplateContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
