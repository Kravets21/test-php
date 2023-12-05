# OpenAPI\Client\AudienceApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachAudienceUserContact()**](AudienceApi.md#attachAudienceUserContact) | **POST** /api/v1/audience/users/{audience_user_id}/contacts/{audience_contact_type} | Attach a Contact to the Audience User |
| [**attachAudienceUserTag()**](AudienceApi.md#attachAudienceUserTag) | **POST** /api/v1/audience/users/{audience_user_id}/tags/{audience_tag_name} | Attach a Tag to the Audience User |
| [**createAudienceSegment()**](AudienceApi.md#createAudienceSegment) | **POST** /api/v1/audience/segments | Create a New Segment |
| [**createAudienceSegmentFilter()**](AudienceApi.md#createAudienceSegmentFilter) | **POST** /api/v1/audience/segments/{audience_segment_id}/filters | Create a New Segment Filter |
| [**createAudienceTag()**](AudienceApi.md#createAudienceTag) | **POST** /api/v1/audience/tags | Create a New Tag |
| [**createAudienceUser()**](AudienceApi.md#createAudienceUser) | **POST** /api/v1/audience/users | Create a New User |
| [**deleteAudienceSegment()**](AudienceApi.md#deleteAudienceSegment) | **DELETE** /api/v1/audience/segments/{audience_segment_id} | Delete a Segment |
| [**deleteAudienceSegmentFilter()**](AudienceApi.md#deleteAudienceSegmentFilter) | **DELETE** /api/v1/audience/segments/{audience_segment_id}/filters/{audience_filter_id} | Delete a Filter from the Audience Segment |
| [**deleteAudienceTag()**](AudienceApi.md#deleteAudienceTag) | **DELETE** /api/v1/audience/tags/{audience_tag_id} | Delete a Tag |
| [**deleteAudienceUser()**](AudienceApi.md#deleteAudienceUser) | **DELETE** /api/v1/audience/users/{audience_user_id} | Delete a User |
| [**deleteAudienceUserContact()**](AudienceApi.md#deleteAudienceUserContact) | **DELETE** /api/v1/audience/users/{audience_user_id}/contacts/{audience_contact_type} | Delete a Contact from the Audience User |
| [**deleteAudienceUserTag()**](AudienceApi.md#deleteAudienceUserTag) | **DELETE** /api/v1/audience/users/{audience_user_id}/tags/{audience_tag_name} | Delete a Tag from the Audience User |
| [**getAudienceSegment()**](AudienceApi.md#getAudienceSegment) | **GET** /api/v1/audience/segments/{audience_segment_id} | Retrieve an Existing Segment |
| [**getAudienceSegmentFilter()**](AudienceApi.md#getAudienceSegmentFilter) | **GET** /api/v1/audience/segments/{audience_segment_id}/filters/{audience_filter_id} | Retrieve an Existing Filter from the Audience Segment |
| [**getAudienceTag()**](AudienceApi.md#getAudienceTag) | **GET** /api/v1/audience/tags/{audience_tag_id} | Retrieve an Existing Tag |
| [**getAudienceUser()**](AudienceApi.md#getAudienceUser) | **GET** /api/v1/audience/users/{audience_user_id} | Retrieve an Existing User |
| [**listAudienceSegmentFilters()**](AudienceApi.md#listAudienceSegmentFilters) | **GET** /api/v1/audience/segments/{audience_segment_id}/filters | List All Filters from the Segment |
| [**listAudienceSegments()**](AudienceApi.md#listAudienceSegments) | **GET** /api/v1/audience/segments | List All Segments |
| [**listAudienceTags()**](AudienceApi.md#listAudienceTags) | **GET** /api/v1/audience/tags | List All Tags |
| [**listAudienceUserSegments()**](AudienceApi.md#listAudienceUserSegments) | **GET** /api/v1/audience/users/{audience_user_id}/segments | List All Segments from the User |
| [**listAudienceUsers()**](AudienceApi.md#listAudienceUsers) | **GET** /api/v1/audience/users | List All Users |
| [**postFilterCounts()**](AudienceApi.md#postFilterCounts) | **POST** /api/v1/audience/filters/counts | Get Filter Counts |
| [**updateAssignActiveStatusToAudienceSegment()**](AudienceApi.md#updateAssignActiveStatusToAudienceSegment) | **PUT** /api/v1/audience/segments/{audience_segment_id}/activate | Activate a Segment |
| [**updateAssignInactiveStatusToAudienceSegment()**](AudienceApi.md#updateAssignInactiveStatusToAudienceSegment) | **PUT** /api/v1/audience/segments/{audience_segment_id}/deactivate | Deactivate a Segment |
| [**updateAudienceSegment()**](AudienceApi.md#updateAudienceSegment) | **PUT** /api/v1/audience/segments/{audience_segment_id} | Update a Segment |
| [**updateAudienceSegmentFilter()**](AudienceApi.md#updateAudienceSegmentFilter) | **PUT** /api/v1/audience/segments/{audience_segment_id}/filters/{audience_filter_id} | Update a Filter in the Audience Segment |
| [**updateAudienceTag()**](AudienceApi.md#updateAudienceTag) | **PUT** /api/v1/audience/tags/{audience_tag_id} | Update a Tag |
| [**updateAudienceUser()**](AudienceApi.md#updateAudienceUser) | **PUT** /api/v1/audience/users/{audience_user_id} | Update a User |


## `attachAudienceUserContact()`

```php
attachAudienceUserContact($audience_user_id, $audience_contact_type, $audience_user_contact_request)
```

Attach a Contact to the Audience User

To attach a contact to the audience user in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_user_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the User
$audience_contact_type = 1; // int | The type of the Contact
$audience_user_contact_request = new \OpenAPI\Client\Model\AudienceUserContactRequest(); // \OpenAPI\Client\Model\AudienceUserContactRequest

try {
    $apiInstance->attachAudienceUserContact($audience_user_id, $audience_contact_type, $audience_user_contact_request);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->attachAudienceUserContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_user_id** | **string**| The ID of the User | |
| **audience_contact_type** | **int**| The type of the Contact | |
| **audience_user_contact_request** | [**\OpenAPI\Client\Model\AudienceUserContactRequest**](../Model/AudienceUserContactRequest.md)|  | |

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

## `attachAudienceUserTag()`

```php
attachAudienceUserTag($audience_user_id, $audience_tag_name)
```

Attach a Tag to the Audience User

To attach a tag to the audience user in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_user_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the User
$audience_tag_name = paid_users; // string | The name of the Tag

try {
    $apiInstance->attachAudienceUserTag($audience_user_id, $audience_tag_name);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->attachAudienceUserTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_user_id** | **string**| The ID of the User | |
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

## `createAudienceSegment()`

```php
createAudienceSegment($audience_segment_request): \OpenAPI\Client\Model\AudienceSegmentResponse
```

Create a New Segment

To create a new segment in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_segment_request = new \OpenAPI\Client\Model\AudienceSegmentRequest(); // \OpenAPI\Client\Model\AudienceSegmentRequest

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
| **audience_segment_request** | [**\OpenAPI\Client\Model\AudienceSegmentRequest**](../Model/AudienceSegmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AudienceSegmentResponse**](../Model/AudienceSegmentResponse.md)

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
createAudienceSegmentFilter($audience_segment_id, $audience_filter_request): \OpenAPI\Client\Model\AudienceFilterResponse
```

Create a New Segment Filter

To create a new filter for the audience segment in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_segment_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Segment
$audience_filter_request = new \OpenAPI\Client\Model\AudienceFilterRequest(); // \OpenAPI\Client\Model\AudienceFilterRequest

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
| **audience_filter_request** | [**\OpenAPI\Client\Model\AudienceFilterRequest**](../Model/AudienceFilterRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AudienceFilterResponse**](../Model/AudienceFilterResponse.md)

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
createAudienceTag($audience_tag_request): \OpenAPI\Client\Model\AudienceTagResponse
```

Create a New Tag

To create a new tag in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_tag_request = new \OpenAPI\Client\Model\AudienceTagRequest(); // \OpenAPI\Client\Model\AudienceTagRequest

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
| **audience_tag_request** | [**\OpenAPI\Client\Model\AudienceTagRequest**](../Model/AudienceTagRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AudienceTagResponse**](../Model/AudienceTagResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAudienceUser()`

```php
createAudienceUser($audience_user_request): \OpenAPI\Client\Model\AudienceUserResponse
```

Create a New User

To create a new user in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_user_request = new \OpenAPI\Client\Model\AudienceUserRequest(); // \OpenAPI\Client\Model\AudienceUserRequest

try {
    $result = $apiInstance->createAudienceUser($audience_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->createAudienceUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_user_request** | [**\OpenAPI\Client\Model\AudienceUserRequest**](../Model/AudienceUserRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AudienceUserResponse**](../Model/AudienceUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
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



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
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



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
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



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
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

## `deleteAudienceUser()`

```php
deleteAudienceUser($audience_user_id)
```

Delete a User

To delete a user from your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_user_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the User

try {
    $apiInstance->deleteAudienceUser($audience_user_id);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->deleteAudienceUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_user_id** | **string**| The ID of the User | |

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

## `deleteAudienceUserContact()`

```php
deleteAudienceUserContact($audience_user_id, $audience_contact_type)
```

Delete a Contact from the Audience User

To delete a contact from the specific audience user in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_user_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the User
$audience_contact_type = 1; // int | The type of the Contact

try {
    $apiInstance->deleteAudienceUserContact($audience_user_id, $audience_contact_type);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->deleteAudienceUserContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_user_id** | **string**| The ID of the User | |
| **audience_contact_type** | **int**| The type of the Contact | |

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

## `deleteAudienceUserTag()`

```php
deleteAudienceUserTag($audience_user_id, $audience_tag_name)
```

Delete a Tag from the Audience User

To delete a tag from the specific audience user in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_user_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the User
$audience_tag_name = paid_users; // string | The name of the Tag

try {
    $apiInstance->deleteAudienceUserTag($audience_user_id, $audience_tag_name);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->deleteAudienceUserTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_user_id** | **string**| The ID of the User | |
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

## `getAudienceSegment()`

```php
getAudienceSegment($audience_segment_id): \OpenAPI\Client\Model\AudienceSegmentResponse
```

Retrieve an Existing Segment

To get details about a specific segment in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
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

[**\OpenAPI\Client\Model\AudienceSegmentResponse**](../Model/AudienceSegmentResponse.md)

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
getAudienceSegmentFilter($audience_segment_id, $audience_filter_id): \OpenAPI\Client\Model\AudienceFilterResponse
```

Retrieve an Existing Filter from the Audience Segment

To get details about the specific filter of the audience segment in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
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

[**\OpenAPI\Client\Model\AudienceFilterResponse**](../Model/AudienceFilterResponse.md)

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
getAudienceTag($audience_tag_id): \OpenAPI\Client\Model\AudienceTagResponse
```

Retrieve an Existing Tag

To get details about a specific tag in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
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

[**\OpenAPI\Client\Model\AudienceTagResponse**](../Model/AudienceTagResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAudienceUser()`

```php
getAudienceUser($audience_user_id): \OpenAPI\Client\Model\AudienceUserResponse
```

Retrieve an Existing User

To get details about a specific user in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_user_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the User

try {
    $result = $apiInstance->getAudienceUser($audience_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getAudienceUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_user_id** | **string**| The ID of the User | |

### Return type

[**\OpenAPI\Client\Model\AudienceUserResponse**](../Model/AudienceUserResponse.md)

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
listAudienceSegmentFilters($audience_segment_id, $cursor, $per_page, $order_by): \OpenAPI\Client\Model\AudienceFilterCollectionResponse
```

List All Filters from the Segment

To retrieve a list of all filters from the specific audience segment in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
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

[**\OpenAPI\Client\Model\AudienceFilterCollectionResponse**](../Model/AudienceFilterCollectionResponse.md)

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
listAudienceSegments($cursor, $per_page, $order_by, $name): \OpenAPI\Client\Model\AudienceSegmentCollectionResponse
```

List All Segments

To retrieve a list of all segments from your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
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

[**\OpenAPI\Client\Model\AudienceSegmentCollectionResponse**](../Model/AudienceSegmentCollectionResponse.md)

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
listAudienceTags($cursor, $per_page, $order_by, $name): \OpenAPI\Client\Model\AudienceTagCollectionResponse
```

List All Tags

To retrieve a list of all tags from your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
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

[**\OpenAPI\Client\Model\AudienceTagCollectionResponse**](../Model/AudienceTagCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAudienceUserSegments()`

```php
listAudienceUserSegments($audience_user_id, $cursor, $per_page, $order_by): \OpenAPI\Client\Model\AudienceUserSegmentCollectionResponse
```

List All Segments from the User

To retrieve a list of all segments from the specific audience user in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_user_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the User
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by

try {
    $result = $apiInstance->listAudienceUserSegments($audience_user_id, $cursor, $per_page, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->listAudienceUserSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_user_id** | **string**| The ID of the User | |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |

### Return type

[**\OpenAPI\Client\Model\AudienceUserSegmentCollectionResponse**](../Model/AudienceUserSegmentCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAudienceUsers()`

```php
listAudienceUsers($cursor, $per_page, $order_by, $external_id): \OpenAPI\Client\Model\AudienceUserCollectionResponse
```

List All Users

To retrieve a list of all users from your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cursor = eyJjcmVhdGVkX2F0IjoiMjAyMy0wMS0xOCAxMjo1ODoyMyIsImlkIjoiYWRhM2NkMGItODE2YS0zMDc2LWEyOGUtNzYyMjNkNTRlNDMyIiwiX3BvaW50c1RvTmV4dEl0ZW1zIjpmYWxzZX0; // string | Which 'cursor' of paginated results to return.
$per_page = 2; // int | Number of items returned per page
$order_by = latest; // string | The field to order the results by
$external_id = 123456789; // string | The external id of the User

try {
    $result = $apiInstance->listAudienceUsers($cursor, $per_page, $order_by, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->listAudienceUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Which &#39;cursor&#39; of paginated results to return. | [optional] |
| **per_page** | **int**| Number of items returned per page | [optional] [default to 20] |
| **order_by** | **string**| The field to order the results by | [optional] |
| **external_id** | **string**| The external id of the User | [optional] |

### Return type

[**\OpenAPI\Client\Model\AudienceUserCollectionResponse**](../Model/AudienceUserCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFilterCounts()`

```php
postFilterCounts($audience_filter_counts_request): \OpenAPI\Client\Model\PostFilterCounts200Response
```

Get Filter Counts

To get the number of recipients based on the filters applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_filter_counts_request = new \OpenAPI\Client\Model\AudienceFilterCountsRequest(); // \OpenAPI\Client\Model\AudienceFilterCountsRequest

try {
    $result = $apiInstance->postFilterCounts($audience_filter_counts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->postFilterCounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_filter_counts_request** | [**\OpenAPI\Client\Model\AudienceFilterCountsRequest**](../Model/AudienceFilterCountsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PostFilterCounts200Response**](../Model/PostFilterCounts200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
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



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
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



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
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

## `updateAudienceSegment()`

```php
updateAudienceSegment($audience_segment_id, $audience_segment_request): \OpenAPI\Client\Model\AudienceSegmentResponse
```

Update a Segment

To update details about a specific segment in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_segment_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Segment
$audience_segment_request = new \OpenAPI\Client\Model\AudienceSegmentRequest(); // \OpenAPI\Client\Model\AudienceSegmentRequest

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
| **audience_segment_request** | [**\OpenAPI\Client\Model\AudienceSegmentRequest**](../Model/AudienceSegmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AudienceSegmentResponse**](../Model/AudienceSegmentResponse.md)

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
updateAudienceSegmentFilter($audience_segment_id, $audience_filter_id, $audience_filter_request): \OpenAPI\Client\Model\AudienceFilterResponse
```

Update a Filter in the Audience Segment

To update details about specific filter in the audience segment in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_segment_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Segment
$audience_filter_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Filter
$audience_filter_request = new \OpenAPI\Client\Model\AudienceFilterRequest(); // \OpenAPI\Client\Model\AudienceFilterRequest

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
| **audience_filter_request** | [**\OpenAPI\Client\Model\AudienceFilterRequest**](../Model/AudienceFilterRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AudienceFilterResponse**](../Model/AudienceFilterResponse.md)

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
updateAudienceTag($audience_tag_id, $audience_tag_request): \OpenAPI\Client\Model\AudienceTagResponse
```

Update a Tag

To update details about a specific tag in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_tag_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the Tag
$audience_tag_request = new \OpenAPI\Client\Model\AudienceTagRequest(); // \OpenAPI\Client\Model\AudienceTagRequest

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
| **audience_tag_request** | [**\OpenAPI\Client\Model\AudienceTagRequest**](../Model/AudienceTagRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AudienceTagResponse**](../Model/AudienceTagResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAudienceUser()`

```php
updateAudienceUser($audience_user_id, $audience_user_request): \OpenAPI\Client\Model\AudienceUserResponse
```

Update a User

To update details about a specific user in your audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$audience_user_id = 00112233-4455-6677-8899-aabbccddeeff; // string | The ID of the User
$audience_user_request = new \OpenAPI\Client\Model\AudienceUserRequest(); // \OpenAPI\Client\Model\AudienceUserRequest

try {
    $result = $apiInstance->updateAudienceUser($audience_user_id, $audience_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->updateAudienceUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_user_id** | **string**| The ID of the User | |
| **audience_user_request** | [**\OpenAPI\Client\Model\AudienceUserRequest**](../Model/AudienceUserRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AudienceUserResponse**](../Model/AudienceUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
