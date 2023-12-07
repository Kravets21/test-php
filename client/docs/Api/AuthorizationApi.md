# AirEml\AuthorizationApi

All URIs are relative to https://aireml.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAuthTokenForServiceAccount()**](AuthorizationApi.md#createAuthTokenForServiceAccount) | **POST** /api/v1/auth/tokens/service-account | Create Access Token for Service Account |


## `createAuthTokenForServiceAccount()`

```php
createAuthTokenForServiceAccount($auth_token_for_service_account_request): \AirEml\Model\AuthTokenResponse
```

Create Access Token for Service Account

To create an access token for the service account by client id and client secret (machine-to-machine authentication).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AirEml\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_token_for_service_account_request = new \AirEml\Model\AuthTokenForServiceAccountRequest(); // \AirEml\Model\AuthTokenForServiceAccountRequest

try {
    $result = $apiInstance->createAuthTokenForServiceAccount($auth_token_for_service_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->createAuthTokenForServiceAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_token_for_service_account_request** | [**\AirEml\Model\AuthTokenForServiceAccountRequest**](../Model/AuthTokenForServiceAccountRequest.md)|  | |

### Return type

[**\AirEml\Model\AuthTokenResponse**](../Model/AuthTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
