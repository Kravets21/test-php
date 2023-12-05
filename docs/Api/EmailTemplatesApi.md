# OpenAPI\Client\EmailTemplatesApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEmailTemplate()**](EmailTemplatesApi.md#createEmailTemplate) | **POST** /api/v1/email/templates | Create a New Email Notification Template |
| [**createEmailTemplateContent()**](EmailTemplatesApi.md#createEmailTemplateContent) | **POST** /api/v1/email/templates/{template_id}/contents/{template_content_locale} | Create a Content in the Email Notification Template |
| [**deleteEmailTemplate()**](EmailTemplatesApi.md#deleteEmailTemplate) | **DELETE** /api/v1/email/templates/{template_id} | Delete a Email Notification Template |
| [**deleteEmailTemplateContent()**](EmailTemplatesApi.md#deleteEmailTemplateContent) | **DELETE** /api/v1/email/templates/{template_id}/contents/{template_content_locale} | Delete a Content from the Email Notification Template |
| [**getEmailTemplate()**](EmailTemplatesApi.md#getEmailTemplate) | **GET** /api/v1/email/templates/{template_id} | Retrieve an Existing Email Notification Template |
| [**getEmailTemplateContent()**](EmailTemplatesApi.md#getEmailTemplateContent) | **GET** /api/v1/email/templates/{template_id}/contents/{template_content_locale} | Retrieve an Existing Content from the Email Notification Template |
| [**listEmailTemplateContents()**](EmailTemplatesApi.md#listEmailTemplateContents) | **GET** /api/v1/email/templates/{template_id}/contents | List All Contents from the Email Notification Template |
| [**listEmailTemplates()**](EmailTemplatesApi.md#listEmailTemplates) | **GET** /api/v1/email/templates | List All Email Notification Templates |
| [**updateEmailTemplate()**](EmailTemplatesApi.md#updateEmailTemplate) | **PUT** /api/v1/email/templates/{template_id} | Update a Email Notification Template |
| [**updateEmailTemplateContent()**](EmailTemplatesApi.md#updateEmailTemplateContent) | **PUT** /api/v1/email/templates/{template_id}/contents/{template_content_locale} | Update a Content in the Email Notification Template |


## `createEmailTemplate()`

```php
createEmailTemplate($email_template_create_request): \OpenAPI\Client\Model\EmailTemplateResponse
```

Create a New Email Notification Template

To create a new email notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_template_create_request = new \OpenAPI\Client\Model\EmailTemplateCreateRequest(); // \OpenAPI\Client\Model\EmailTemplateCreateRequest

try {
    $result = $apiInstance->createEmailTemplate($email_template_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->createEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_template_create_request** | [**\OpenAPI\Client\Model\EmailTemplateCreateRequest**](../Model/EmailTemplateCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EmailTemplateResponse**](../Model/EmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailTemplateContent()`

```php
createEmailTemplateContent($template_id, $template_content_locale, $email_template_content_create_request): \OpenAPI\Client\Model\EmailTemplateContentResponse
```

Create a Content in the Email Notification Template

Create to a content in the email notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$template_content_locale = en; // LocaleCode | The locale of the Template Content
$email_template_content_create_request = new \OpenAPI\Client\Model\EmailTemplateContentCreateRequest(); // \OpenAPI\Client\Model\EmailTemplateContentCreateRequest

try {
    $result = $apiInstance->createEmailTemplateContent($template_id, $template_content_locale, $email_template_content_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->createEmailTemplateContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |
| **template_content_locale** | [**LocaleCode**](../Model/.md)| The locale of the Template Content | |
| **email_template_content_create_request** | [**\OpenAPI\Client\Model\EmailTemplateContentCreateRequest**](../Model/EmailTemplateContentCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EmailTemplateContentResponse**](../Model/EmailTemplateContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailTemplate()`

```php
deleteEmailTemplate($template_id)
```

Delete a Email Notification Template

To delete a email notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template

try {
    $apiInstance->deleteEmailTemplate($template_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->deleteEmailTemplate: ', $e->getMessage(), PHP_EOL;
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

## `deleteEmailTemplateContent()`

```php
deleteEmailTemplateContent($template_id, $template_content_locale)
```

Delete a Content from the Email Notification Template

To delete a content from the specific email notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$template_content_locale = en; // LocaleCode | The locale of the Template Content

try {
    $apiInstance->deleteEmailTemplateContent($template_id, $template_content_locale);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->deleteEmailTemplateContent: ', $e->getMessage(), PHP_EOL;
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

## `getEmailTemplate()`

```php
getEmailTemplate($template_id): \OpenAPI\Client\Model\EmailTemplateResponse
```

Retrieve an Existing Email Notification Template

To get details about a specific email notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template

try {
    $result = $apiInstance->getEmailTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->getEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |

### Return type

[**\OpenAPI\Client\Model\EmailTemplateResponse**](../Model/EmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailTemplateContent()`

```php
getEmailTemplateContent($template_id, $template_content_locale): \OpenAPI\Client\Model\EmailTemplateContentResponse
```

Retrieve an Existing Content from the Email Notification Template

To get details about the specific content of the email notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$template_content_locale = en; // LocaleCode | The locale of the Template Content

try {
    $result = $apiInstance->getEmailTemplateContent($template_id, $template_content_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->getEmailTemplateContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |
| **template_content_locale** | [**LocaleCode**](../Model/.md)| The locale of the Template Content | |

### Return type

[**\OpenAPI\Client\Model\EmailTemplateContentResponse**](../Model/EmailTemplateContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmailTemplateContents()`

```php
listEmailTemplateContents($template_id, $cursor, $per_page, $order_by): \OpenAPI\Client\Model\EmailTemplateContentCollectionResponse
```

List All Contents from the Email Notification Template

To retrieve a list of all contents from the specific email notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by

try {
    $result = $apiInstance->listEmailTemplateContents($template_id, $cursor, $per_page, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->listEmailTemplateContents: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\EmailTemplateContentCollectionResponse**](../Model/EmailTemplateContentCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmailTemplates()`

```php
listEmailTemplates($cursor, $per_page, $order_by, $name, $status): \OpenAPI\Client\Model\EmailTemplateCollectionResponse
```

List All Email Notification Templates

To retrieve a list of all email notification templates in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by
$name = welcome_to_documentation; // string | The name of the Template.
$status = active; // string | The status of the Template.

try {
    $result = $apiInstance->listEmailTemplates($cursor, $per_page, $order_by, $name, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->listEmailTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |
| **name** | **string**| The name of the Template. | [optional] |
| **status** | **string**| The status of the Template. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmailTemplateCollectionResponse**](../Model/EmailTemplateCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailTemplate()`

```php
updateEmailTemplate($template_id, $email_template_update_request): \OpenAPI\Client\Model\EmailTemplateResponse
```

Update a Email Notification Template

To update details about a specific email notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$email_template_update_request = new \OpenAPI\Client\Model\EmailTemplateUpdateRequest(); // \OpenAPI\Client\Model\EmailTemplateUpdateRequest

try {
    $result = $apiInstance->updateEmailTemplate($template_id, $email_template_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->updateEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |
| **email_template_update_request** | [**\OpenAPI\Client\Model\EmailTemplateUpdateRequest**](../Model/EmailTemplateUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EmailTemplateResponse**](../Model/EmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailTemplateContent()`

```php
updateEmailTemplateContent($template_id, $template_content_locale, $email_template_content_update_request): \OpenAPI\Client\Model\EmailTemplateContentResponse
```

Update a Content in the Email Notification Template

Update to a content in the email notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$template_content_locale = en; // LocaleCode | The locale of the Template Content
$email_template_content_update_request = new \OpenAPI\Client\Model\EmailTemplateContentUpdateRequest(); // \OpenAPI\Client\Model\EmailTemplateContentUpdateRequest

try {
    $result = $apiInstance->updateEmailTemplateContent($template_id, $template_content_locale, $email_template_content_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->updateEmailTemplateContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |
| **template_content_locale** | [**LocaleCode**](../Model/.md)| The locale of the Template Content | |
| **email_template_content_update_request** | [**\OpenAPI\Client\Model\EmailTemplateContentUpdateRequest**](../Model/EmailTemplateContentUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EmailTemplateContentResponse**](../Model/EmailTemplateContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
