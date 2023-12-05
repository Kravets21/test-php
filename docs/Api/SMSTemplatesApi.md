# OpenAPI\Client\SMSTemplatesApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSmsTemplate()**](SMSTemplatesApi.md#createSmsTemplate) | **POST** /api/v1/sms/templates | Create a New SMS Template |
| [**deleteSmsTemplate()**](SMSTemplatesApi.md#deleteSmsTemplate) | **DELETE** /api/v1/sms/templates/{template_id} | Delete a SMS Template |
| [**deleteSmsTemplateContent()**](SMSTemplatesApi.md#deleteSmsTemplateContent) | **DELETE** /api/v1/sms/templates/{template_id}/contents/{template_content_locale} | Delete a Content from the SMS Template |
| [**getSmsTemplate()**](SMSTemplatesApi.md#getSmsTemplate) | **GET** /api/v1/sms/templates/{template_id} | Retrieve an Existing SMS Template |
| [**getSmsTemplateContent()**](SMSTemplatesApi.md#getSmsTemplateContent) | **GET** /api/v1/sms/templates/{template_id}/contents/{template_content_locale} | Retrieve an Existing Content from the SMS Template |
| [**listSmsTemplateContents()**](SMSTemplatesApi.md#listSmsTemplateContents) | **GET** /api/v1/sms/templates/{template_id}/contents | List All Contents from the SMS Template |
| [**listSmsTemplates()**](SMSTemplatesApi.md#listSmsTemplates) | **GET** /api/v1/sms/templates | List All SMS Templates |
| [**saveSmsTemplateContent()**](SMSTemplatesApi.md#saveSmsTemplateContent) | **POST** /api/v1/sms/templates/{template_id}/contents/{template_content_locale} | Save a Content in the SMS Template |
| [**updateSmsTemplate()**](SMSTemplatesApi.md#updateSmsTemplate) | **PUT** /api/v1/sms/templates/{template_id} | Update a SMS Template |
| [**updateSmsTemplateContent()**](SMSTemplatesApi.md#updateSmsTemplateContent) | **PUT** /api/v1/sms/templates/{template_id}/contents/{template_content_locale} | Update a Content in the SMS Notification Template |


## `createSmsTemplate()`

```php
createSmsTemplate($sms_template_request): \OpenAPI\Client\Model\SmsTemplateResponse
```

Create a New SMS Template

To create a new sms template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sms_template_request = new \OpenAPI\Client\Model\SmsTemplateRequest(); // \OpenAPI\Client\Model\SmsTemplateRequest

try {
    $result = $apiInstance->createSmsTemplate($sms_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSTemplatesApi->createSmsTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_template_request** | [**\OpenAPI\Client\Model\SmsTemplateRequest**](../Model/SmsTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SmsTemplateResponse**](../Model/SmsTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSmsTemplate()`

```php
deleteSmsTemplate($template_id)
```

Delete a SMS Template

To delete a sms template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template

try {
    $apiInstance->deleteSmsTemplate($template_id);
} catch (Exception $e) {
    echo 'Exception when calling SMSTemplatesApi->deleteSmsTemplate: ', $e->getMessage(), PHP_EOL;
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

## `deleteSmsTemplateContent()`

```php
deleteSmsTemplateContent($template_id, $template_content_locale)
```

Delete a Content from the SMS Template

To delete a content from the specific sms template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$template_content_locale = en; // LocaleCode | The locale of the Template Content

try {
    $apiInstance->deleteSmsTemplateContent($template_id, $template_content_locale);
} catch (Exception $e) {
    echo 'Exception when calling SMSTemplatesApi->deleteSmsTemplateContent: ', $e->getMessage(), PHP_EOL;
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

## `getSmsTemplate()`

```php
getSmsTemplate($template_id): \OpenAPI\Client\Model\SmsTemplateResponse
```

Retrieve an Existing SMS Template

To get details about a specific sms template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template

try {
    $result = $apiInstance->getSmsTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSTemplatesApi->getSmsTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |

### Return type

[**\OpenAPI\Client\Model\SmsTemplateResponse**](../Model/SmsTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmsTemplateContent()`

```php
getSmsTemplateContent($template_id, $template_content_locale): \OpenAPI\Client\Model\SmsTemplateContentResponse
```

Retrieve an Existing Content from the SMS Template

To get details about the specific content of the sms template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$template_content_locale = en; // LocaleCode | The locale of the Template Content

try {
    $result = $apiInstance->getSmsTemplateContent($template_id, $template_content_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSTemplatesApi->getSmsTemplateContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |
| **template_content_locale** | [**LocaleCode**](../Model/.md)| The locale of the Template Content | |

### Return type

[**\OpenAPI\Client\Model\SmsTemplateContentResponse**](../Model/SmsTemplateContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSmsTemplateContents()`

```php
listSmsTemplateContents($template_id, $cursor, $per_page, $order_by): \OpenAPI\Client\Model\SmsTemplateContentCollectionResponse
```

List All Contents from the SMS Template

To retrieve a list of all contents from the specific sms template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by

try {
    $result = $apiInstance->listSmsTemplateContents($template_id, $cursor, $per_page, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSTemplatesApi->listSmsTemplateContents: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\SmsTemplateContentCollectionResponse**](../Model/SmsTemplateContentCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSmsTemplates()`

```php
listSmsTemplates($cursor, $per_page, $order_by, $name, $status): \OpenAPI\Client\Model\SmsTemplateCollectionResponse
```

List All SMS Templates

To retrieve a list of all sms templates in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by
$name = welcome_to_documentation; // string | The name of the Template
$status = 1; // int | The status of the Template

try {
    $result = $apiInstance->listSmsTemplates($cursor, $per_page, $order_by, $name, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSTemplatesApi->listSmsTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |
| **name** | **string**| The name of the Template | [optional] |
| **status** | **int**| The status of the Template | [optional] |

### Return type

[**\OpenAPI\Client\Model\SmsTemplateCollectionResponse**](../Model/SmsTemplateCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveSmsTemplateContent()`

```php
saveSmsTemplateContent($template_id, $template_content_locale, $sms_template_content_request): \OpenAPI\Client\Model\SmsTemplateContentResponse
```

Save a Content in the SMS Template

To save content of the sms template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$template_content_locale = en; // LocaleCode | The locale of the Template Content
$sms_template_content_request = new \OpenAPI\Client\Model\SmsTemplateContentRequest(); // \OpenAPI\Client\Model\SmsTemplateContentRequest

try {
    $result = $apiInstance->saveSmsTemplateContent($template_id, $template_content_locale, $sms_template_content_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSTemplatesApi->saveSmsTemplateContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |
| **template_content_locale** | [**LocaleCode**](../Model/.md)| The locale of the Template Content | |
| **sms_template_content_request** | [**\OpenAPI\Client\Model\SmsTemplateContentRequest**](../Model/SmsTemplateContentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SmsTemplateContentResponse**](../Model/SmsTemplateContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSmsTemplate()`

```php
updateSmsTemplate($template_id, $sms_template_request): \OpenAPI\Client\Model\SmsTemplateResponse
```

Update a SMS Template

To update details about a specific sms template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$sms_template_request = new \OpenAPI\Client\Model\SmsTemplateRequest(); // \OpenAPI\Client\Model\SmsTemplateRequest

try {
    $result = $apiInstance->updateSmsTemplate($template_id, $sms_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSTemplatesApi->updateSmsTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |
| **sms_template_request** | [**\OpenAPI\Client\Model\SmsTemplateRequest**](../Model/SmsTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SmsTemplateResponse**](../Model/SmsTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSmsTemplateContent()`

```php
updateSmsTemplateContent($template_id, $template_content_locale, $sms_template_content_request): \OpenAPI\Client\Model\SmsTemplateContentResponse
```

Update a Content in the SMS Notification Template

Update to a content in the SMS notification template in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SMSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Template
$template_content_locale = en; // LocaleCode | The locale of the Template Content
$sms_template_content_request = new \OpenAPI\Client\Model\SmsTemplateContentRequest(); // \OpenAPI\Client\Model\SmsTemplateContentRequest

try {
    $result = $apiInstance->updateSmsTemplateContent($template_id, $template_content_locale, $sms_template_content_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSTemplatesApi->updateSmsTemplateContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the Template | |
| **template_content_locale** | [**LocaleCode**](../Model/.md)| The locale of the Template Content | |
| **sms_template_content_request** | [**\OpenAPI\Client\Model\SmsTemplateContentRequest**](../Model/SmsTemplateContentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SmsTemplateContentResponse**](../Model/SmsTemplateContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
