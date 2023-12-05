# # PushTemplateContentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The is a title of the push notification. |
**body** | **string** | The is a body of the push notification. |
**icon** | **string** | The notification&#39;s icon. Sets the notification icon to myicon for drawable resource myicon. If you don&#39;t send this key in the request, FCM displays the launcher icon specified in your app manifest. | [optional]
**image** | **string** | Contains the URL of an image that is going to be downloaded on the device and displayed in a notification. JPEG, PNG, BMP have full support across platforms. Animated GIF and video only work on iOS. WebP and HEIF have varying levels of support across platforms and platform versions. Android has 1MB image size limit. | [optional]
**link** | **string** | The link to open when the user clicks on the notification. For all URL values, HTTPS is required. | [optional]
**data** | **array<string,string>** | The additional data used for send push notification if user wants to add some custom data in request | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
