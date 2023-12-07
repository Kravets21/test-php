# AirEml\AudienceApi

All URIs are relative to https://aireml.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachAudienceRecipientContact()**](AudienceApi.md#attachAudienceRecipientContact) | **POST** /api/v1/audience/recipients/{audience_recipient_id}/contacts/{audience_contact_type} | Attach a Contact to the Audience Recipient |
| [**attachAudienceRecipientTag()**](AudienceApi.md#attachAudienceRecipientTag) | **POST** /api/v1/audience/recipients/{audience_recipient_id}/tags/{audience_tag_name} | Attach a Tag to the Audience Recipient |
| [**createAudienceRecipient()**](AudienceApi.md#createAudienceRecipient) | **POST** /api/v1/audience/recipients | Create a New Recipient |
| [**createAudienceSegment()**](AudienceApi.md#createAudienceSegment) | **POST** /api/v1/audience/segments | Create a New Segment |
| [**createAudienceSegmentFilter()**](AudienceApi.md#createAudienceSegmentFilter) | **POST** /api/v1/audience/segments/{audience_segment_id}/filters | Create a New Segment Filter |
| [**createAudienceTag()**](AudienceApi.md#createAudienceTag) | **POST** /api/v1/audience/tags | Create a New Tag |
| [**deleteAudienceRecipient()**](AudienceApi.md#deleteAudienceRecipient) | **DELETE** /api/v1/audience/recipients/{audience_recipient_id} | Delete a Recipient |
| [**deleteAudienceRecipientContact()**](AudienceApi.md#deleteAudienceRecipientContact) | **DELETE** /api/v1/audience/recipients/{audience_recipient_id}/contacts/{audience_contact_type} | Delete a Contact from the Audience Recipient |
| [**deleteAudienceRecipientTag()**](AudienceApi.md#deleteAudienceRecipientTag) | **DELETE** /api/v1/audience/recipients/{audience_recipient_id}/tags/{audience_tag_name} | Delete a Tag from the Audience Recipient |
| [**deleteAudienceSegment()**](AudienceApi.md#deleteAudienceSegment) | **DELETE** /api/v1/audience/segments/{audience_segment_id} | Delete a Segment |
| [**deleteAudienceSegmentFilter()**](AudienceApi.md#deleteAudienceSegmentFilter) | **DELETE** /api/v1/audience/segments/{audience_segment_id}/filters/{audience_filter_id} | Delete a Filter from the Audience Segment |
| [**deleteAudienceTag()**](AudienceApi.md#deleteAudienceTag) | **DELETE** /api/v1/audience/tags/{audience_tag_id} | Delete a Tag |
| [**getAudienceRecipient()**](AudienceApi.md#getAudienceRecipient) | **GET** /api/v1/audience/recipients/{audience_recipient_id} | Retrieve an Existing Recipient |
| [**getAudienceSegment()**](AudienceApi.md#getAudienceSegment) | **GET** /api/v1/audience/segments/{audience_segment_id} | Retrieve an Existing Segment |
| [**getAudienceSegmentFilter()**](AudienceApi.md#getAudienceSegmentFilter) | **GET** /api/v1/audience/segments/{audience_segment_id}/filters/{audience_filter_id} | Retrieve an Existing Filter from the Audience Segment |
| [**getAudienceTag()**](AudienceApi.md#getAudienceTag) | **GET** /api/v1/audience/tags/{audience_tag_id} | Retrieve an Existing Tag |
| [**listAudienceRecipientSegments()**](AudienceApi.md#listAudienceRecipientSegments) | **GET** /api/v1/audience/recipients/{audience_recipient_id}/segments | List All Segments from the Recipient |
| [**listAudienceRecipients()**](AudienceApi.md#listAudienceRecipients) | **GET** /api/v1/audience/recipients | List All Recipients |
| [**listAudienceSegmentFilters()**](AudienceApi.md#listAudienceSegmentFilters) | **GET** /api/v1/audience/segments/{audience_segment_id}/filters | List All Filters from the Segment |
| [**listAudienceSegments()**](AudienceApi.md#listAudienceSegments) | **GET** /api/v1/audience/segments | List All Segments |
| [**listAudienceTags()**](AudienceApi.md#listAudienceTags) | **GET** /api/v1/audience/tags | List All Tags |
| [**updateAssignActiveStatusToAudienceSegment()**](AudienceApi.md#updateAssignActiveStatusToAudienceSegment) | **PUT** /api/v1/audience/segments/{audience_segment_id}/activate | Activate a Segment |
| [**updateAssignInactiveStatusToAudienceSegment()**](AudienceApi.md#updateAssignInactiveStatusToAudienceSegment) | **PUT** /api/v1/audience/segments/{audience_segment_id}/deactivate | Deactivate a Segment |
| [**updateAudienceRecipient()**](AudienceApi.md#updateAudienceRecipient) | **PUT** /api/v1/audience/recipients/{audience_recipient_id} | Update a Recipient |
| [**updateAudienceSegment()**](AudienceApi.md#updateAudienceSegment) | **PUT** /api/v1/audience/segments/{audience_segment_id} | Update a Segment |
| [**updateAudienceSegmentFilter()**](AudienceApi.md#updateAudienceSegmentFilter) | **PUT** /api/v1/audience/segments/{audience_segment_id}/filters/{audience_filter_id} | Update a Filter in the Audience Segment |
| [**updateAudienceTag()**](AudienceApi.md#updateAudienceTag) | **PUT** /api/v1/audience/tags/{audience_tag_id} | Update a Tag |


## `attachAudienceRecipientContact()`

```php
attachAudienceRecipientContact($audience_recipient_id, $audience_contact_type, $audience_recipient_contact_request)
```

Attach a Contact to the Audience Recipient

To attach a contact to the audience recipient in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_recipient_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Recipient
$audience_contact_type = email; // string | The type of the Contact
$audience_recipient_contact_request = new \AirEml\Model\AudienceRecipientContactRequest(); // \AirEml\Model\AudienceRecipientContactRequest

try {
    $apiInstance->attachAudienceRecipientContact($audience_recipient_id, $audience_contact_type, $audience_recipient_contact_request);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->attachAudienceRecipientContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_recipient_id** | **string**| The ID of the Recipient | |
| **audience_contact_type** | **string**| The type of the Contact | |
| **audience_recipient_contact_request** | [**\AirEml\Model\AudienceRecipientContactRequest**](../Model/AudienceRecipientContactRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachAudienceRecipientTag()`

```php
attachAudienceRecipientTag($audience_recipient_id, $audience_tag_name)
```

Attach a Tag to the Audience Recipient

To attach a tag to the audience recipient in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_recipient_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Recipient
$audience_tag_name = paid_recipients; // string | The name of the Tag

try {
    $apiInstance->attachAudienceRecipientTag($audience_recipient_id, $audience_tag_name);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->attachAudienceRecipientTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_recipient_id** | **string**| The ID of the Recipient | |
| **audience_tag_name** | **string**| The name of the Tag | |

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

## `createAudienceRecipient()`

```php
createAudienceRecipient($audience_recipient_request): \AirEml\Model\AudienceRecipientResponse
```

Create a New Recipient

To create a new recipient in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_recipient_request = new \AirEml\Model\AudienceRecipientRequest(); // \AirEml\Model\AudienceRecipientRequest

try {
    $result = $apiInstance->createAudienceRecipient($audience_recipient_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->createAudienceRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_recipient_request** | [**\AirEml\Model\AudienceRecipientRequest**](../Model/AudienceRecipientRequest.md)|  | |

### Return type

[**\AirEml\Model\AudienceRecipientResponse**](../Model/AudienceRecipientResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAudienceSegment()`

```php
createAudienceSegment($audience_segment_request): \AirEml\Model\AudienceSegmentResponse
```

Create a New Segment

To create a new segment in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_segment_request = new \AirEml\Model\AudienceSegmentRequest(); // \AirEml\Model\AudienceSegmentRequest

try {
    $result = $apiInstance->createAudienceSegment($audience_segment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->createAudienceSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_request** | [**\AirEml\Model\AudienceSegmentRequest**](../Model/AudienceSegmentRequest.md)|  | |

### Return type

[**\AirEml\Model\AudienceSegmentResponse**](../Model/AudienceSegmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAudienceSegmentFilter()`

```php
createAudienceSegmentFilter($audience_segment_id, $audience_filter_request): \AirEml\Model\AudienceFilterResponse
```

Create a New Segment Filter

To create a new filter for the audience segment in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_segment_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Segment
$audience_filter_request = new \AirEml\Model\AudienceFilterRequest(); // \AirEml\Model\AudienceFilterRequest

try {
    $result = $apiInstance->createAudienceSegmentFilter($audience_segment_id, $audience_filter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->createAudienceSegmentFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_id** | **string**| The ID of the Segment | |
| **audience_filter_request** | [**\AirEml\Model\AudienceFilterRequest**](../Model/AudienceFilterRequest.md)|  | |

### Return type

[**\AirEml\Model\AudienceFilterResponse**](../Model/AudienceFilterResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAudienceTag()`

```php
createAudienceTag($audience_tag_request): \AirEml\Model\AudienceTagResponse
```

Create a New Tag

To create a new tag in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_tag_request = new \AirEml\Model\AudienceTagRequest(); // \AirEml\Model\AudienceTagRequest

try {
    $result = $apiInstance->createAudienceTag($audience_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->createAudienceTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_tag_request** | [**\AirEml\Model\AudienceTagRequest**](../Model/AudienceTagRequest.md)|  | |

### Return type

[**\AirEml\Model\AudienceTagResponse**](../Model/AudienceTagResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAudienceRecipient()`

```php
deleteAudienceRecipient($audience_recipient_id)
```

Delete a Recipient

To delete a recipient from your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_recipient_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Recipient

try {
    $apiInstance->deleteAudienceRecipient($audience_recipient_id);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->deleteAudienceRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_recipient_id** | **string**| The ID of the Recipient | |

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

## `deleteAudienceRecipientContact()`

```php
deleteAudienceRecipientContact($audience_recipient_id, $audience_contact_type)
```

Delete a Contact from the Audience Recipient

To delete a contact from the specific audience recipient in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_recipient_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Recipient
$audience_contact_type = email; // string | The type of the Contact

try {
    $apiInstance->deleteAudienceRecipientContact($audience_recipient_id, $audience_contact_type);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->deleteAudienceRecipientContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_recipient_id** | **string**| The ID of the Recipient | |
| **audience_contact_type** | **string**| The type of the Contact | |

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

## `deleteAudienceRecipientTag()`

```php
deleteAudienceRecipientTag($audience_recipient_id, $audience_tag_name)
```

Delete a Tag from the Audience Recipient

To delete a tag from the specific audience recipient in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_recipient_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Recipient
$audience_tag_name = paid_recipients; // string | The name of the Tag

try {
    $apiInstance->deleteAudienceRecipientTag($audience_recipient_id, $audience_tag_name);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->deleteAudienceRecipientTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_recipient_id** | **string**| The ID of the Recipient | |
| **audience_tag_name** | **string**| The name of the Tag | |

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

## `deleteAudienceSegment()`

```php
deleteAudienceSegment($audience_segment_id)
```

Delete a Segment

To delete a segment from your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_segment_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Segment

try {
    $apiInstance->deleteAudienceSegment($audience_segment_id);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->deleteAudienceSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_id** | **string**| The ID of the Segment | |

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

## `deleteAudienceSegmentFilter()`

```php
deleteAudienceSegmentFilter($audience_segment_id, $audience_filter_id)
```

Delete a Filter from the Audience Segment

To delete a filter from the specific audience segment in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_segment_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Segment
$audience_filter_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Filter

try {
    $apiInstance->deleteAudienceSegmentFilter($audience_segment_id, $audience_filter_id);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->deleteAudienceSegmentFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_id** | **string**| The ID of the Segment | |
| **audience_filter_id** | **string**| The ID of the Filter | |

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

## `deleteAudienceTag()`

```php
deleteAudienceTag($audience_tag_id)
```

Delete a Tag

To delete a tag from your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_tag_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Tag

try {
    $apiInstance->deleteAudienceTag($audience_tag_id);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->deleteAudienceTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_tag_id** | **string**| The ID of the Tag | |

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

## `getAudienceRecipient()`

```php
getAudienceRecipient($audience_recipient_id): \AirEml\Model\AudienceRecipientResponse
```

Retrieve an Existing Recipient

To get details about a specific recipient in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_recipient_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Recipient

try {
    $result = $apiInstance->getAudienceRecipient($audience_recipient_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getAudienceRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_recipient_id** | **string**| The ID of the Recipient | |

### Return type

[**\AirEml\Model\AudienceRecipientResponse**](../Model/AudienceRecipientResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAudienceSegment()`

```php
getAudienceSegment($audience_segment_id): \AirEml\Model\AudienceSegmentResponse
```

Retrieve an Existing Segment

To get details about a specific segment in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_segment_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Segment

try {
    $result = $apiInstance->getAudienceSegment($audience_segment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getAudienceSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_id** | **string**| The ID of the Segment | |

### Return type

[**\AirEml\Model\AudienceSegmentResponse**](../Model/AudienceSegmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAudienceSegmentFilter()`

```php
getAudienceSegmentFilter($audience_segment_id, $audience_filter_id): \AirEml\Model\AudienceFilterResponse
```

Retrieve an Existing Filter from the Audience Segment

To get details about the specific filter of the audience segment in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_segment_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Segment
$audience_filter_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Filter

try {
    $result = $apiInstance->getAudienceSegmentFilter($audience_segment_id, $audience_filter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getAudienceSegmentFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_id** | **string**| The ID of the Segment | |
| **audience_filter_id** | **string**| The ID of the Filter | |

### Return type

[**\AirEml\Model\AudienceFilterResponse**](../Model/AudienceFilterResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAudienceTag()`

```php
getAudienceTag($audience_tag_id): \AirEml\Model\AudienceTagResponse
```

Retrieve an Existing Tag

To get details about a specific tag in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_tag_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Tag

try {
    $result = $apiInstance->getAudienceTag($audience_tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getAudienceTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_tag_id** | **string**| The ID of the Tag | |

### Return type

[**\AirEml\Model\AudienceTagResponse**](../Model/AudienceTagResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAudienceRecipientSegments()`

```php
listAudienceRecipientSegments($audience_recipient_id, $cursor, $per_page, $order_by): \AirEml\Model\AudienceRecipientSegmentCollectionResponse
```

List All Segments from the Recipient

To retrieve a list of all segments from the specific audience recipient in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_recipient_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Recipient
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by

try {
    $result = $apiInstance->listAudienceRecipientSegments($audience_recipient_id, $cursor, $per_page, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->listAudienceRecipientSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_recipient_id** | **string**| The ID of the Recipient | |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |

### Return type

[**\AirEml\Model\AudienceRecipientSegmentCollectionResponse**](../Model/AudienceRecipientSegmentCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAudienceRecipients()`

```php
listAudienceRecipients($cursor, $per_page, $order_by, $external_id, $recipient_id, $contact_address): \AirEml\Model\AudienceRecipientCollectionResponse
```

List All Recipients

To retrieve a list of all recipients from your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by
$external_id = 123456789; // string | The external id of the Recipient
$recipient_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Recipient
$contact_address = john.doe@example.com; // string | The Contact Address of the Recipient

try {
    $result = $apiInstance->listAudienceRecipients($cursor, $per_page, $order_by, $external_id, $recipient_id, $contact_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->listAudienceRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |
| **external_id** | **string**| The external id of the Recipient | [optional] |
| **recipient_id** | **string**| The ID of the Recipient | [optional] |
| **contact_address** | **string**| The Contact Address of the Recipient | [optional] |

### Return type

[**\AirEml\Model\AudienceRecipientCollectionResponse**](../Model/AudienceRecipientCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAudienceSegmentFilters()`

```php
listAudienceSegmentFilters($audience_segment_id, $cursor, $per_page, $order_by): \AirEml\Model\AudienceFilterCollectionResponse
```

List All Filters from the Segment

To retrieve a list of all filters from the specific audience segment in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_segment_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Segment
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by

try {
    $result = $apiInstance->listAudienceSegmentFilters($audience_segment_id, $cursor, $per_page, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->listAudienceSegmentFilters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_id** | **string**| The ID of the Segment | |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |

### Return type

[**\AirEml\Model\AudienceFilterCollectionResponse**](../Model/AudienceFilterCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAudienceSegments()`

```php
listAudienceSegments($cursor, $per_page, $order_by, $name): \AirEml\Model\AudienceSegmentCollectionResponse
```

List All Segments

To retrieve a list of all segments from your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by
$name = paid; // string | The name of the Segment

try {
    $result = $apiInstance->listAudienceSegments($cursor, $per_page, $order_by, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->listAudienceSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |
| **name** | **string**| The name of the Segment | [optional] |

### Return type

[**\AirEml\Model\AudienceSegmentCollectionResponse**](../Model/AudienceSegmentCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAudienceTags()`

```php
listAudienceTags($cursor, $per_page, $order_by, $name): \AirEml\Model\AudienceTagCollectionResponse
```

List All Tags

To retrieve a list of all tags from your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by
$name = paid; // string | The name of the Tag

try {
    $result = $apiInstance->listAudienceTags($cursor, $per_page, $order_by, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->listAudienceTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |
| **name** | **string**| The name of the Tag | [optional] |

### Return type

[**\AirEml\Model\AudienceTagCollectionResponse**](../Model/AudienceTagCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAssignActiveStatusToAudienceSegment()`

```php
updateAssignActiveStatusToAudienceSegment($audience_segment_id)
```

Activate a Segment

To activate a segment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_segment_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Segment

try {
    $apiInstance->updateAssignActiveStatusToAudienceSegment($audience_segment_id);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->updateAssignActiveStatusToAudienceSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_id** | **string**| The ID of the Segment | |

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

## `updateAssignInactiveStatusToAudienceSegment()`

```php
updateAssignInactiveStatusToAudienceSegment($audience_segment_id)
```

Deactivate a Segment

To deactivate a segment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_segment_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Segment

try {
    $apiInstance->updateAssignInactiveStatusToAudienceSegment($audience_segment_id);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->updateAssignInactiveStatusToAudienceSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_id** | **string**| The ID of the Segment | |

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

## `updateAudienceRecipient()`

```php
updateAudienceRecipient($audience_recipient_id, $audience_recipient_request): \AirEml\Model\AudienceRecipientResponse
```

Update a Recipient

To update details about a specific recipient in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_recipient_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Recipient
$audience_recipient_request = new \AirEml\Model\AudienceRecipientRequest(); // \AirEml\Model\AudienceRecipientRequest

try {
    $result = $apiInstance->updateAudienceRecipient($audience_recipient_id, $audience_recipient_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->updateAudienceRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_recipient_id** | **string**| The ID of the Recipient | |
| **audience_recipient_request** | [**\AirEml\Model\AudienceRecipientRequest**](../Model/AudienceRecipientRequest.md)|  | |

### Return type

[**\AirEml\Model\AudienceRecipientResponse**](../Model/AudienceRecipientResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAudienceSegment()`

```php
updateAudienceSegment($audience_segment_id, $audience_segment_request): \AirEml\Model\AudienceSegmentResponse
```

Update a Segment

To update details about a specific segment in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_segment_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Segment
$audience_segment_request = new \AirEml\Model\AudienceSegmentRequest(); // \AirEml\Model\AudienceSegmentRequest

try {
    $result = $apiInstance->updateAudienceSegment($audience_segment_id, $audience_segment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->updateAudienceSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_id** | **string**| The ID of the Segment | |
| **audience_segment_request** | [**\AirEml\Model\AudienceSegmentRequest**](../Model/AudienceSegmentRequest.md)|  | |

### Return type

[**\AirEml\Model\AudienceSegmentResponse**](../Model/AudienceSegmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAudienceSegmentFilter()`

```php
updateAudienceSegmentFilter($audience_segment_id, $audience_filter_id, $audience_filter_request): \AirEml\Model\AudienceFilterResponse
```

Update a Filter in the Audience Segment

To update details about specific filter in the audience segment in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_segment_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Segment
$audience_filter_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Filter
$audience_filter_request = new \AirEml\Model\AudienceFilterRequest(); // \AirEml\Model\AudienceFilterRequest

try {
    $result = $apiInstance->updateAudienceSegmentFilter($audience_segment_id, $audience_filter_id, $audience_filter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->updateAudienceSegmentFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_id** | **string**| The ID of the Segment | |
| **audience_filter_id** | **string**| The ID of the Filter | |
| **audience_filter_request** | [**\AirEml\Model\AudienceFilterRequest**](../Model/AudienceFilterRequest.md)|  | |

### Return type

[**\AirEml\Model\AudienceFilterResponse**](../Model/AudienceFilterResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAudienceTag()`

```php
updateAudienceTag($audience_tag_id, $audience_tag_request): \AirEml\Model\AudienceTagResponse
```

Update a Tag

To update details about a specific tag in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_tag_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Tag
$audience_tag_request = new \AirEml\Model\AudienceTagRequest(); // \AirEml\Model\AudienceTagRequest

try {
    $result = $apiInstance->updateAudienceTag($audience_tag_id, $audience_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->updateAudienceTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_tag_id** | **string**| The ID of the Tag | |
| **audience_tag_request** | [**\AirEml\Model\AudienceTagRequest**](../Model/AudienceTagRequest.md)|  | |

### Return type

[**\AirEml\Model\AudienceTagResponse**](../Model/AudienceTagResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
