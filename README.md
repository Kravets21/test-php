# OpenAPIClient-php

airEml - API (full)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost:8080*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AudienceApi* | [**attachAudienceUserContact**](docs/Api/AudienceApi.md#attachaudienceusercontact) | **POST** /api/v1/audience/users/{audience_user_id}/contacts/{audience_contact_type} | Attach a Contact to the Audience User
*AudienceApi* | [**attachAudienceUserTag**](docs/Api/AudienceApi.md#attachaudienceusertag) | **POST** /api/v1/audience/users/{audience_user_id}/tags/{audience_tag_name} | Attach a Tag to the Audience User
*AudienceApi* | [**createAudienceSegment**](docs/Api/AudienceApi.md#createaudiencesegment) | **POST** /api/v1/audience/segments | Create a New Segment
*AudienceApi* | [**createAudienceSegmentFilter**](docs/Api/AudienceApi.md#createaudiencesegmentfilter) | **POST** /api/v1/audience/segments/{audience_segment_id}/filters | Create a New Segment Filter
*AudienceApi* | [**createAudienceTag**](docs/Api/AudienceApi.md#createaudiencetag) | **POST** /api/v1/audience/tags | Create a New Tag
*AudienceApi* | [**createAudienceUser**](docs/Api/AudienceApi.md#createaudienceuser) | **POST** /api/v1/audience/users | Create a New User
*AudienceApi* | [**deleteAudienceSegment**](docs/Api/AudienceApi.md#deleteaudiencesegment) | **DELETE** /api/v1/audience/segments/{audience_segment_id} | Delete a Segment
*AudienceApi* | [**deleteAudienceSegmentFilter**](docs/Api/AudienceApi.md#deleteaudiencesegmentfilter) | **DELETE** /api/v1/audience/segments/{audience_segment_id}/filters/{audience_filter_id} | Delete a Filter from the Audience Segment
*AudienceApi* | [**deleteAudienceTag**](docs/Api/AudienceApi.md#deleteaudiencetag) | **DELETE** /api/v1/audience/tags/{audience_tag_id} | Delete a Tag
*AudienceApi* | [**deleteAudienceUser**](docs/Api/AudienceApi.md#deleteaudienceuser) | **DELETE** /api/v1/audience/users/{audience_user_id} | Delete a User
*AudienceApi* | [**deleteAudienceUserContact**](docs/Api/AudienceApi.md#deleteaudienceusercontact) | **DELETE** /api/v1/audience/users/{audience_user_id}/contacts/{audience_contact_type} | Delete a Contact from the Audience User
*AudienceApi* | [**deleteAudienceUserTag**](docs/Api/AudienceApi.md#deleteaudienceusertag) | **DELETE** /api/v1/audience/users/{audience_user_id}/tags/{audience_tag_name} | Delete a Tag from the Audience User
*AudienceApi* | [**getAudienceSegment**](docs/Api/AudienceApi.md#getaudiencesegment) | **GET** /api/v1/audience/segments/{audience_segment_id} | Retrieve an Existing Segment
*AudienceApi* | [**getAudienceSegmentFilter**](docs/Api/AudienceApi.md#getaudiencesegmentfilter) | **GET** /api/v1/audience/segments/{audience_segment_id}/filters/{audience_filter_id} | Retrieve an Existing Filter from the Audience Segment
*AudienceApi* | [**getAudienceTag**](docs/Api/AudienceApi.md#getaudiencetag) | **GET** /api/v1/audience/tags/{audience_tag_id} | Retrieve an Existing Tag
*AudienceApi* | [**getAudienceUser**](docs/Api/AudienceApi.md#getaudienceuser) | **GET** /api/v1/audience/users/{audience_user_id} | Retrieve an Existing User
*AudienceApi* | [**listAudienceSegmentFilters**](docs/Api/AudienceApi.md#listaudiencesegmentfilters) | **GET** /api/v1/audience/segments/{audience_segment_id}/filters | List All Filters from the Segment
*AudienceApi* | [**listAudienceSegments**](docs/Api/AudienceApi.md#listaudiencesegments) | **GET** /api/v1/audience/segments | List All Segments
*AudienceApi* | [**listAudienceTags**](docs/Api/AudienceApi.md#listaudiencetags) | **GET** /api/v1/audience/tags | List All Tags
*AudienceApi* | [**listAudienceUserSegments**](docs/Api/AudienceApi.md#listaudienceusersegments) | **GET** /api/v1/audience/users/{audience_user_id}/segments | List All Segments from the User
*AudienceApi* | [**listAudienceUsers**](docs/Api/AudienceApi.md#listaudienceusers) | **GET** /api/v1/audience/users | List All Users
*AudienceApi* | [**postFilterCounts**](docs/Api/AudienceApi.md#postfiltercounts) | **POST** /api/v1/audience/filters/counts | Get Filter Counts
*AudienceApi* | [**updateAssignActiveStatusToAudienceSegment**](docs/Api/AudienceApi.md#updateassignactivestatustoaudiencesegment) | **PUT** /api/v1/audience/segments/{audience_segment_id}/activate | Activate a Segment
*AudienceApi* | [**updateAssignInactiveStatusToAudienceSegment**](docs/Api/AudienceApi.md#updateassigninactivestatustoaudiencesegment) | **PUT** /api/v1/audience/segments/{audience_segment_id}/deactivate | Deactivate a Segment
*AudienceApi* | [**updateAudienceSegment**](docs/Api/AudienceApi.md#updateaudiencesegment) | **PUT** /api/v1/audience/segments/{audience_segment_id} | Update a Segment
*AudienceApi* | [**updateAudienceSegmentFilter**](docs/Api/AudienceApi.md#updateaudiencesegmentfilter) | **PUT** /api/v1/audience/segments/{audience_segment_id}/filters/{audience_filter_id} | Update a Filter in the Audience Segment
*AudienceApi* | [**updateAudienceTag**](docs/Api/AudienceApi.md#updateaudiencetag) | **PUT** /api/v1/audience/tags/{audience_tag_id} | Update a Tag
*AudienceApi* | [**updateAudienceUser**](docs/Api/AudienceApi.md#updateaudienceuser) | **PUT** /api/v1/audience/users/{audience_user_id} | Update a User
*AuthorizationApi* | [**createAuthTokenForServiceAccount**](docs/Api/AuthorizationApi.md#createauthtokenforserviceaccount) | **POST** /api/v1/auth/tokens/service-account | Create Access Token for Service Account
*EmailSettingsApi* | [**createEmailChannel**](docs/Api/EmailSettingsApi.md#createemailchannel) | **POST** /api/v1/email/channels | Create a New Email Notification Channel
*EmailSettingsApi* | [**createEmailChannelRoutingRule**](docs/Api/EmailSettingsApi.md#createemailchannelroutingrule) | **POST** /api/v1/email/channels/{channel_id}/routing-rules | Create a Routing-rule in the Email Notification Channel
*EmailSettingsApi* | [**createEmailSender**](docs/Api/EmailSettingsApi.md#createemailsender) | **POST** /api/v1/email/senders | Create a New Email Notification Sender
*EmailSettingsApi* | [**createEmailTransport**](docs/Api/EmailSettingsApi.md#createemailtransport) | **POST** /api/v1/email/transports | Create a New Email Notification Transport
*EmailSettingsApi* | [**deleteEmailChannel**](docs/Api/EmailSettingsApi.md#deleteemailchannel) | **DELETE** /api/v1/email/channels/{channel_id} | Delete a Email Notification Channel
*EmailSettingsApi* | [**deleteEmailChannelRoutingRule**](docs/Api/EmailSettingsApi.md#deleteemailchannelroutingrule) | **DELETE** /api/v1/email/channels/{channel_id}/routing-rules/{routing_rule_id} | Delete a Routing-rule from the Email Notification Channel
*EmailSettingsApi* | [**deleteEmailSender**](docs/Api/EmailSettingsApi.md#deleteemailsender) | **DELETE** /api/v1/email/senders/{sender_id} | Delete a Email Notification Sender
*EmailSettingsApi* | [**deleteEmailTransport**](docs/Api/EmailSettingsApi.md#deleteemailtransport) | **DELETE** /api/v1/email/transports/{transport_id} | Delete a Email Notification Transport
*EmailSettingsApi* | [**getEmailChannel**](docs/Api/EmailSettingsApi.md#getemailchannel) | **GET** /api/v1/email/channels/{channel_id} | Retrieve an Existing Email Notification Channel
*EmailSettingsApi* | [**getEmailChannelRoutingRule**](docs/Api/EmailSettingsApi.md#getemailchannelroutingrule) | **GET** /api/v1/email/channels/{channel_id}/routing-rules/{routing_rule_id} | Retrieve an Existing Routing-rule from the Email Notification Channel
*EmailSettingsApi* | [**getEmailSender**](docs/Api/EmailSettingsApi.md#getemailsender) | **GET** /api/v1/email/senders/{sender_id} | Retrieve an Existing Email Notification Sender
*EmailSettingsApi* | [**getEmailTransport**](docs/Api/EmailSettingsApi.md#getemailtransport) | **GET** /api/v1/email/transports/{transport_id} | Retrieve an Existing Email Notification Transport
*EmailSettingsApi* | [**listEmailChannelRoutingRules**](docs/Api/EmailSettingsApi.md#listemailchannelroutingrules) | **GET** /api/v1/email/channels/{channel_id}/routing-rules | List All Routing-rules from the Email Notification Channel
*EmailSettingsApi* | [**listEmailChannels**](docs/Api/EmailSettingsApi.md#listemailchannels) | **GET** /api/v1/email/channels | List All Email Notification Channels
*EmailSettingsApi* | [**listEmailSenders**](docs/Api/EmailSettingsApi.md#listemailsenders) | **GET** /api/v1/email/senders | List All Email Notification Senders
*EmailSettingsApi* | [**listEmailTransports**](docs/Api/EmailSettingsApi.md#listemailtransports) | **GET** /api/v1/email/transports | List All Email Notification Transports
*EmailSettingsApi* | [**updateEmailChannel**](docs/Api/EmailSettingsApi.md#updateemailchannel) | **PUT** /api/v1/email/channels/{channel_id} | Update a Email Notification Channel
*EmailSettingsApi* | [**updateEmailChannelRoutingRule**](docs/Api/EmailSettingsApi.md#updateemailchannelroutingrule) | **PUT** /api/v1/email/channels/{channel_id}/routing-rules/{routing_rule_id} | Update a Routing-rule in the Email Notification Channel
*EmailSettingsApi* | [**updateEmailSender**](docs/Api/EmailSettingsApi.md#updateemailsender) | **PUT** /api/v1/email/senders/{sender_id} | Update a Email Notification Sender
*EmailSettingsApi* | [**updateEmailTransport**](docs/Api/EmailSettingsApi.md#updateemailtransport) | **PUT** /api/v1/email/transports/{transport_id} | Update a Email Notification Transport
*EmailTemplatesApi* | [**createEmailTemplate**](docs/Api/EmailTemplatesApi.md#createemailtemplate) | **POST** /api/v1/email/templates | Create a New Email Notification Template
*EmailTemplatesApi* | [**createEmailTemplateContent**](docs/Api/EmailTemplatesApi.md#createemailtemplatecontent) | **POST** /api/v1/email/templates/{template_id}/contents/{template_content_locale} | Create a Content in the Email Notification Template
*EmailTemplatesApi* | [**deleteEmailTemplate**](docs/Api/EmailTemplatesApi.md#deleteemailtemplate) | **DELETE** /api/v1/email/templates/{template_id} | Delete a Email Notification Template
*EmailTemplatesApi* | [**deleteEmailTemplateContent**](docs/Api/EmailTemplatesApi.md#deleteemailtemplatecontent) | **DELETE** /api/v1/email/templates/{template_id}/contents/{template_content_locale} | Delete a Content from the Email Notification Template
*EmailTemplatesApi* | [**getEmailTemplate**](docs/Api/EmailTemplatesApi.md#getemailtemplate) | **GET** /api/v1/email/templates/{template_id} | Retrieve an Existing Email Notification Template
*EmailTemplatesApi* | [**getEmailTemplateContent**](docs/Api/EmailTemplatesApi.md#getemailtemplatecontent) | **GET** /api/v1/email/templates/{template_id}/contents/{template_content_locale} | Retrieve an Existing Content from the Email Notification Template
*EmailTemplatesApi* | [**listEmailTemplateContents**](docs/Api/EmailTemplatesApi.md#listemailtemplatecontents) | **GET** /api/v1/email/templates/{template_id}/contents | List All Contents from the Email Notification Template
*EmailTemplatesApi* | [**listEmailTemplates**](docs/Api/EmailTemplatesApi.md#listemailtemplates) | **GET** /api/v1/email/templates | List All Email Notification Templates
*EmailTemplatesApi* | [**updateEmailTemplate**](docs/Api/EmailTemplatesApi.md#updateemailtemplate) | **PUT** /api/v1/email/templates/{template_id} | Update a Email Notification Template
*EmailTemplatesApi* | [**updateEmailTemplateContent**](docs/Api/EmailTemplatesApi.md#updateemailtemplatecontent) | **PUT** /api/v1/email/templates/{template_id}/contents/{template_content_locale} | Update a Content in the Email Notification Template
*NotificationsApi* | [**getEmailNotification**](docs/Api/NotificationsApi.md#getemailnotification) | **GET** /api/v1/email/notifications/{notification_id} | Retrieve an Existing Email Notification
*NotificationsApi* | [**getEmailNotificationStates**](docs/Api/NotificationsApi.md#getemailnotificationstates) | **GET** /api/v1/email/notifications/{notification_id}/states | Retrieve an Existing Email Notification States
*NotificationsApi* | [**getPushNotification**](docs/Api/NotificationsApi.md#getpushnotification) | **GET** /api/v1/push/notifications/{notification_id} | Retrieve an Existing Push Notification
*NotificationsApi* | [**getPushNotificationStates**](docs/Api/NotificationsApi.md#getpushnotificationstates) | **GET** /api/v1/push/notifications/{notification_id}/states | Retrieve an Existing Push Notification States
*NotificationsApi* | [**getSmsNotification**](docs/Api/NotificationsApi.md#getsmsnotification) | **GET** /api/v1/sms/notifications/{notification_id} | Retrieve an Existing SMS Notification
*NotificationsApi* | [**getSmsNotificationStates**](docs/Api/NotificationsApi.md#getsmsnotificationstates) | **GET** /api/v1/sms/notifications/{notification_id}/states | Retrieve an Existing Sms Notification States
*NotificationsApi* | [**listEmailNotifications**](docs/Api/NotificationsApi.md#listemailnotifications) | **GET** /api/v1/email/notifications | List All Email Notifications
*NotificationsApi* | [**listPushNotifications**](docs/Api/NotificationsApi.md#listpushnotifications) | **GET** /api/v1/push/notifications | List All Push Notifications
*NotificationsApi* | [**listSmsNotifications**](docs/Api/NotificationsApi.md#listsmsnotifications) | **GET** /api/v1/sms/notifications | List All SMS Notifications
*PushSettingsApi* | [**createPushPlatform**](docs/Api/PushSettingsApi.md#createpushplatform) | **POST** /api/v1/push/platforms | Create a New Push Notification Platform
*PushSettingsApi* | [**deletePushPlatforms**](docs/Api/PushSettingsApi.md#deletepushplatforms) | **DELETE** /api/v1/push/platforms/{platform_id} | Delete a Push Notification Platform
*PushSettingsApi* | [**getPushPlatform**](docs/Api/PushSettingsApi.md#getpushplatform) | **GET** /api/v1/push/platforms/{platform_id} | Retrieve an Existing Push Notification Platform
*PushSettingsApi* | [**listPushPlatforms**](docs/Api/PushSettingsApi.md#listpushplatforms) | **GET** /api/v1/push/platforms | List All Push Notification Platforms
*PushSettingsApi* | [**updatePushPlatform**](docs/Api/PushSettingsApi.md#updatepushplatform) | **PUT** /api/v1/push/platforms/{platform_id} | Update a Push Notification Platform
*PushTemplatesApi* | [**createPushTemplate**](docs/Api/PushTemplatesApi.md#createpushtemplate) | **POST** /api/v1/push/templates | Create a New Push Notification Template
*PushTemplatesApi* | [**createPushTemplateContent**](docs/Api/PushTemplatesApi.md#createpushtemplatecontent) | **POST** /api/v1/push/templates/{template_id}/contents/{template_content_locale} | Create a Content in the Push Notification Template
*PushTemplatesApi* | [**deletePushTemplate**](docs/Api/PushTemplatesApi.md#deletepushtemplate) | **DELETE** /api/v1/push/templates/{template_id} | Delete a Push Notification Template
*PushTemplatesApi* | [**deletePushTemplateContent**](docs/Api/PushTemplatesApi.md#deletepushtemplatecontent) | **DELETE** /api/v1/push/templates/{template_id}/contents/{template_content_locale} | Delete a Content from the Push Notification Template
*PushTemplatesApi* | [**getPushTemplate**](docs/Api/PushTemplatesApi.md#getpushtemplate) | **GET** /api/v1/push/templates/{template_id} | Retrieve an Existing Push Notification Template
*PushTemplatesApi* | [**getPushTemplateContent**](docs/Api/PushTemplatesApi.md#getpushtemplatecontent) | **GET** /api/v1/push/templates/{template_id}/contents/{template_content_locale} | Retrieve an Existing Content from the Push Notification Template
*PushTemplatesApi* | [**listPushTemplateContents**](docs/Api/PushTemplatesApi.md#listpushtemplatecontents) | **GET** /api/v1/push/templates/{template_id}/contents | List All Contents from the Push Notification Template
*PushTemplatesApi* | [**listPushTemplates**](docs/Api/PushTemplatesApi.md#listpushtemplates) | **GET** /api/v1/push/templates | List All Push Notification Templates
*PushTemplatesApi* | [**updatePushTemplate**](docs/Api/PushTemplatesApi.md#updatepushtemplate) | **PUT** /api/v1/push/templates/{template_id} | Update a Push Notification Template
*PushTemplatesApi* | [**updatePushTemplateContent**](docs/Api/PushTemplatesApi.md#updatepushtemplatecontent) | **PUT** /api/v1/push/templates/{template_id}/contents/{template_content_locale} | Update a Content in the Push Notification Template
*SMSSettingsApi* | [**createSmsChannel**](docs/Api/SMSSettingsApi.md#createsmschannel) | **POST** /api/v1/sms/channels | Create a New SMS Channel
*SMSSettingsApi* | [**createSmsTransport**](docs/Api/SMSSettingsApi.md#createsmstransport) | **POST** /api/v1/sms/transports | Create a New SMS Transport
*SMSSettingsApi* | [**deleteSmsChannel**](docs/Api/SMSSettingsApi.md#deletesmschannel) | **DELETE** /api/v1/sms/channels/{channel_id} | Delete a SMS Channel
*SMSSettingsApi* | [**deleteSmsRoutingRule**](docs/Api/SMSSettingsApi.md#deletesmsroutingrule) | **DELETE** /api/v1/sms/channels/{channel_id}/rules/{routing_rule_id} | Delete a SMS Channel Rule
*SMSSettingsApi* | [**deleteSmsTransport**](docs/Api/SMSSettingsApi.md#deletesmstransport) | **DELETE** /api/v1/sms/transports/{transport_id} | Delete a SMS Transport
*SMSSettingsApi* | [**getSmsChannel**](docs/Api/SMSSettingsApi.md#getsmschannel) | **GET** /api/v1/sms/channels/{channel_id} | Retrieve an Existing SMS Channel
*SMSSettingsApi* | [**getSmsRoutingRule**](docs/Api/SMSSettingsApi.md#getsmsroutingrule) | **GET** /api/v1/sms/channels/{channel_id}/rules/{routing_rule_id} | Retrieve an Existing SMS Channel Rule
*SMSSettingsApi* | [**getSmsSender**](docs/Api/SMSSettingsApi.md#getsmssender) | **GET** /api/v1/sms/transports/{transport_id}/senders/{sender_id} | Retrieve an Existing Number from the SMS Transport
*SMSSettingsApi* | [**getSmsTransport**](docs/Api/SMSSettingsApi.md#getsmstransport) | **GET** /api/v1/sms/transports/{transport_id} | Retrieve an Existing SMS Transport
*SMSSettingsApi* | [**getWebhookByTransport**](docs/Api/SMSSettingsApi.md#getwebhookbytransport) | **GET** /api/v1/sms/transports/{transport_id}/generate-webhook | Webhook url generated by transport
*SMSSettingsApi* | [**listAllSmsSenders**](docs/Api/SMSSettingsApi.md#listallsmssenders) | **GET** /api/v1/sms/transports/all/senders | List All SMS Transport Numbers
*SMSSettingsApi* | [**listSmsChannels**](docs/Api/SMSSettingsApi.md#listsmschannels) | **GET** /api/v1/sms/channels | List All SMS Channels
*SMSSettingsApi* | [**listSmsChannelsRules**](docs/Api/SMSSettingsApi.md#listsmschannelsrules) | **GET** /api/v1/sms/channels/{channel_id}/rules | List of all Rules from the SMS Channel
*SMSSettingsApi* | [**listSmsSenders**](docs/Api/SMSSettingsApi.md#listsmssenders) | **GET** /api/v1/sms/transports/{transport_id}/senders | List All Numbers from the SMS Transport
*SMSSettingsApi* | [**listSmsTransports**](docs/Api/SMSSettingsApi.md#listsmstransports) | **GET** /api/v1/sms/transports | List All SMS Transports
*SMSSettingsApi* | [**saveSmsRoutingRule**](docs/Api/SMSSettingsApi.md#savesmsroutingrule) | **POST** /api/v1/sms/channels/{channel_id}/rules | Save a parameters SMS Channel Rule
*SMSSettingsApi* | [**updateSmsChannel**](docs/Api/SMSSettingsApi.md#updatesmschannel) | **PUT** /api/v1/sms/channels/{channel_id} | Update a SMS Channel
*SMSSettingsApi* | [**updateSmsRoutingRule**](docs/Api/SMSSettingsApi.md#updatesmsroutingrule) | **PUT** /api/v1/sms/channels/{channel_id}/rules/{routing_rule_id} | Update a SMS Channel Rule
*SMSSettingsApi* | [**updateSmsTransport**](docs/Api/SMSSettingsApi.md#updatesmstransport) | **PUT** /api/v1/sms/transports/{transport_id} | Update a SMS Transport
*SMSTemplatesApi* | [**createSmsTemplate**](docs/Api/SMSTemplatesApi.md#createsmstemplate) | **POST** /api/v1/sms/templates | Create a New SMS Template
*SMSTemplatesApi* | [**deleteSmsTemplate**](docs/Api/SMSTemplatesApi.md#deletesmstemplate) | **DELETE** /api/v1/sms/templates/{template_id} | Delete a SMS Template
*SMSTemplatesApi* | [**deleteSmsTemplateContent**](docs/Api/SMSTemplatesApi.md#deletesmstemplatecontent) | **DELETE** /api/v1/sms/templates/{template_id}/contents/{template_content_locale} | Delete a Content from the SMS Template
*SMSTemplatesApi* | [**getSmsTemplate**](docs/Api/SMSTemplatesApi.md#getsmstemplate) | **GET** /api/v1/sms/templates/{template_id} | Retrieve an Existing SMS Template
*SMSTemplatesApi* | [**getSmsTemplateContent**](docs/Api/SMSTemplatesApi.md#getsmstemplatecontent) | **GET** /api/v1/sms/templates/{template_id}/contents/{template_content_locale} | Retrieve an Existing Content from the SMS Template
*SMSTemplatesApi* | [**listSmsTemplateContents**](docs/Api/SMSTemplatesApi.md#listsmstemplatecontents) | **GET** /api/v1/sms/templates/{template_id}/contents | List All Contents from the SMS Template
*SMSTemplatesApi* | [**listSmsTemplates**](docs/Api/SMSTemplatesApi.md#listsmstemplates) | **GET** /api/v1/sms/templates | List All SMS Templates
*SMSTemplatesApi* | [**saveSmsTemplateContent**](docs/Api/SMSTemplatesApi.md#savesmstemplatecontent) | **POST** /api/v1/sms/templates/{template_id}/contents/{template_content_locale} | Save a Content in the SMS Template
*SMSTemplatesApi* | [**updateSmsTemplate**](docs/Api/SMSTemplatesApi.md#updatesmstemplate) | **PUT** /api/v1/sms/templates/{template_id} | Update a SMS Template
*SMSTemplatesApi* | [**updateSmsTemplateContent**](docs/Api/SMSTemplatesApi.md#updatesmstemplatecontent) | **PUT** /api/v1/sms/templates/{template_id}/contents/{template_content_locale} | Update a Content in the SMS Notification Template
*SendingApi* | [**sendEmail**](docs/Api/SendingApi.md#sendemail) | **POST** /api/v1/email/send | Send Email
*SendingApi* | [**sendEmailBatch**](docs/Api/SendingApi.md#sendemailbatch) | **POST** /api/v1/email/send/batch | Send Email Batch
*SendingApi* | [**sendPush**](docs/Api/SendingApi.md#sendpush) | **POST** /api/v1/push/send | Send Push Notification
*SendingApi* | [**sendSmsBatchNotification**](docs/Api/SendingApi.md#sendsmsbatchnotification) | **POST** /api/v1/sms/send/batch | Send SMS Batch Notification
*SendingApi* | [**sendSmsNotification**](docs/Api/SendingApi.md#sendsmsnotification) | **POST** /api/v1/sms/send | Send SMS Notification
*WebhooksApi* | [**createWebhookSubscription**](docs/Api/WebhooksApi.md#createwebhooksubscription) | **POST** /api/v1/webhook/subscriptions | Create a New Subscription
*WebhooksApi* | [**deleteWebhookSubscription**](docs/Api/WebhooksApi.md#deletewebhooksubscription) | **DELETE** /api/v1/webhook/subscriptions/{webhook_subscription_id} | Delete a webhook subscription
*WebhooksApi* | [**getWebhookSubscription**](docs/Api/WebhooksApi.md#getwebhooksubscription) | **GET** /api/v1/webhook/subscriptions/{webhook_subscription_id} | Retrieve an Existing webhook subscription
*WebhooksApi* | [**listWebhookEvents**](docs/Api/WebhooksApi.md#listwebhookevents) | **GET** /api/v1/webhook/events | List All Webhook events
*WebhooksApi* | [**listWebhookSubscriptions**](docs/Api/WebhooksApi.md#listwebhooksubscriptions) | **GET** /api/v1/webhook/subscriptions | List All webhook Subscriptions
*WebhooksApi* | [**updateWebhookSubscription**](docs/Api/WebhooksApi.md#updatewebhooksubscription) | **PUT** /api/v1/webhook/subscriptions/{webhook_subscription_id} | Update a webhook subscription

## Models

- [AudienceFilter](docs/Model/AudienceFilter.md)
- [AudienceFilterCollectionResponse](docs/Model/AudienceFilterCollectionResponse.md)
- [AudienceFilterCountsRequest](docs/Model/AudienceFilterCountsRequest.md)
- [AudienceFilterRequest](docs/Model/AudienceFilterRequest.md)
- [AudienceFilterResponse](docs/Model/AudienceFilterResponse.md)
- [AudienceRule](docs/Model/AudienceRule.md)
- [AudienceRuleProperty](docs/Model/AudienceRuleProperty.md)
- [AudienceSegment](docs/Model/AudienceSegment.md)
- [AudienceSegmentCollectionResponse](docs/Model/AudienceSegmentCollectionResponse.md)
- [AudienceSegmentRequest](docs/Model/AudienceSegmentRequest.md)
- [AudienceSegmentResponse](docs/Model/AudienceSegmentResponse.md)
- [AudienceTag](docs/Model/AudienceTag.md)
- [AudienceTagCollectionResponse](docs/Model/AudienceTagCollectionResponse.md)
- [AudienceTagRequest](docs/Model/AudienceTagRequest.md)
- [AudienceTagResponse](docs/Model/AudienceTagResponse.md)
- [AudienceUser](docs/Model/AudienceUser.md)
- [AudienceUserCollectionResponse](docs/Model/AudienceUserCollectionResponse.md)
- [AudienceUserContact](docs/Model/AudienceUserContact.md)
- [AudienceUserContactRequest](docs/Model/AudienceUserContactRequest.md)
- [AudienceUserRequest](docs/Model/AudienceUserRequest.md)
- [AudienceUserResponse](docs/Model/AudienceUserResponse.md)
- [AudienceUserSegment](docs/Model/AudienceUserSegment.md)
- [AudienceUserSegmentCollectionResponse](docs/Model/AudienceUserSegmentCollectionResponse.md)
- [AudienceUserTag](docs/Model/AudienceUserTag.md)
- [AuthToken](docs/Model/AuthToken.md)
- [AuthTokenForServiceAccountRequest](docs/Model/AuthTokenForServiceAccountRequest.md)
- [AuthTokenResponse](docs/Model/AuthTokenResponse.md)
- [Collection](docs/Model/Collection.md)
- [CollectionLinks](docs/Model/CollectionLinks.md)
- [CollectionMeta](docs/Model/CollectionMeta.md)
- [CountryCode](docs/Model/CountryCode.md)
- [EmailChannel](docs/Model/EmailChannel.md)
- [EmailChannelCollectionResponse](docs/Model/EmailChannelCollectionResponse.md)
- [EmailChannelRequest](docs/Model/EmailChannelRequest.md)
- [EmailChannelResponse](docs/Model/EmailChannelResponse.md)
- [EmailChannelRoutingRuleResponse](docs/Model/EmailChannelRoutingRuleResponse.md)
- [EmailChannelRoutingRules](docs/Model/EmailChannelRoutingRules.md)
- [EmailChannelRoutingRulesCollectionResponse](docs/Model/EmailChannelRoutingRulesCollectionResponse.md)
- [EmailNotification](docs/Model/EmailNotification.md)
- [EmailNotificationClick](docs/Model/EmailNotificationClick.md)
- [EmailNotificationCollectionResponse](docs/Model/EmailNotificationCollectionResponse.md)
- [EmailNotificationDetails](docs/Model/EmailNotificationDetails.md)
- [EmailNotificationOpen](docs/Model/EmailNotificationOpen.md)
- [EmailNotificationResponse](docs/Model/EmailNotificationResponse.md)
- [EmailNotificationStateInner](docs/Model/EmailNotificationStateInner.md)
- [EmailNotificationStateResponse](docs/Model/EmailNotificationStateResponse.md)
- [EmailRoutingRuleCreateRequest](docs/Model/EmailRoutingRuleCreateRequest.md)
- [EmailRoutingRuleUpdateRequest](docs/Model/EmailRoutingRuleUpdateRequest.md)
- [EmailSendBatchRequest](docs/Model/EmailSendBatchRequest.md)
- [EmailSendBatchResponse](docs/Model/EmailSendBatchResponse.md)
- [EmailSendBatchResponseDataInner](docs/Model/EmailSendBatchResponseDataInner.md)
- [EmailSendRequest](docs/Model/EmailSendRequest.md)
- [EmailSendRequestAttachmentsInner](docs/Model/EmailSendRequestAttachmentsInner.md)
- [EmailSendRequestFrom](docs/Model/EmailSendRequestFrom.md)
- [EmailSendRequestTemplate](docs/Model/EmailSendRequestTemplate.md)
- [EmailSendRequestTo](docs/Model/EmailSendRequestTo.md)
- [EmailSendResponse](docs/Model/EmailSendResponse.md)
- [EmailSendResponseData](docs/Model/EmailSendResponseData.md)
- [EmailSender](docs/Model/EmailSender.md)
- [EmailSenderCollectionResponse](docs/Model/EmailSenderCollectionResponse.md)
- [EmailSenderCreateRequest](docs/Model/EmailSenderCreateRequest.md)
- [EmailSenderResponse](docs/Model/EmailSenderResponse.md)
- [EmailSenderUpdateRequest](docs/Model/EmailSenderUpdateRequest.md)
- [EmailTemplate](docs/Model/EmailTemplate.md)
- [EmailTemplateCollectionResponse](docs/Model/EmailTemplateCollectionResponse.md)
- [EmailTemplateContent](docs/Model/EmailTemplateContent.md)
- [EmailTemplateContentCollectionResponse](docs/Model/EmailTemplateContentCollectionResponse.md)
- [EmailTemplateContentCreateRequest](docs/Model/EmailTemplateContentCreateRequest.md)
- [EmailTemplateContentResponse](docs/Model/EmailTemplateContentResponse.md)
- [EmailTemplateContentUpdateRequest](docs/Model/EmailTemplateContentUpdateRequest.md)
- [EmailTemplateContentVariablesSettingsInner](docs/Model/EmailTemplateContentVariablesSettingsInner.md)
- [EmailTemplateContentVariablesSettingsInnerRecipientProperty](docs/Model/EmailTemplateContentVariablesSettingsInnerRecipientProperty.md)
- [EmailTemplateCreateRequest](docs/Model/EmailTemplateCreateRequest.md)
- [EmailTemplateResponse](docs/Model/EmailTemplateResponse.md)
- [EmailTemplateUpdateRequest](docs/Model/EmailTemplateUpdateRequest.md)
- [EmailTransport](docs/Model/EmailTransport.md)
- [EmailTransportCollectionResponse](docs/Model/EmailTransportCollectionResponse.md)
- [EmailTransportCreateRequest](docs/Model/EmailTransportCreateRequest.md)
- [EmailTransportResponse](docs/Model/EmailTransportResponse.md)
- [EmailTransportUpdateRequest](docs/Model/EmailTransportUpdateRequest.md)
- [Error](docs/Model/Error.md)
- [ErrorMultiple](docs/Model/ErrorMultiple.md)
- [Event](docs/Model/Event.md)
- [EventResponse](docs/Model/EventResponse.md)
- [LocaleCode](docs/Model/LocaleCode.md)
- [PostFilterCounts200Response](docs/Model/PostFilterCounts200Response.md)
- [PostFilterCounts200ResponseData](docs/Model/PostFilterCounts200ResponseData.md)
- [PushNotification](docs/Model/PushNotification.md)
- [PushNotificationCollectionResponse](docs/Model/PushNotificationCollectionResponse.md)
- [PushNotificationResponse](docs/Model/PushNotificationResponse.md)
- [PushNotificationSendRequest](docs/Model/PushNotificationSendRequest.md)
- [PushNotificationSendRequestTemplate](docs/Model/PushNotificationSendRequestTemplate.md)
- [PushNotificationSendRequestTo](docs/Model/PushNotificationSendRequestTo.md)
- [PushNotificationSentResponse](docs/Model/PushNotificationSentResponse.md)
- [PushNotificationStateResponse](docs/Model/PushNotificationStateResponse.md)
- [PushPlatform](docs/Model/PushPlatform.md)
- [PushPlatformCollectionResponse](docs/Model/PushPlatformCollectionResponse.md)
- [PushPlatformRequest](docs/Model/PushPlatformRequest.md)
- [PushPlatformResponse](docs/Model/PushPlatformResponse.md)
- [PushTemplate](docs/Model/PushTemplate.md)
- [PushTemplateCollectionResponse](docs/Model/PushTemplateCollectionResponse.md)
- [PushTemplateContent](docs/Model/PushTemplateContent.md)
- [PushTemplateContentCollectionResponse](docs/Model/PushTemplateContentCollectionResponse.md)
- [PushTemplateContentRequest](docs/Model/PushTemplateContentRequest.md)
- [PushTemplateContentResponse](docs/Model/PushTemplateContentResponse.md)
- [PushTemplateRequest](docs/Model/PushTemplateRequest.md)
- [PushTemplateResponse](docs/Model/PushTemplateResponse.md)
- [PushTemplateUpdateRequest](docs/Model/PushTemplateUpdateRequest.md)
- [SmsChannel](docs/Model/SmsChannel.md)
- [SmsChannelCollectionResponse](docs/Model/SmsChannelCollectionResponse.md)
- [SmsChannelRequest](docs/Model/SmsChannelRequest.md)
- [SmsChannelResponse](docs/Model/SmsChannelResponse.md)
- [SmsMultipleNotificationSentResponse](docs/Model/SmsMultipleNotificationSentResponse.md)
- [SmsNotification](docs/Model/SmsNotification.md)
- [SmsNotificationCollectionResponse](docs/Model/SmsNotificationCollectionResponse.md)
- [SmsNotificationResponse](docs/Model/SmsNotificationResponse.md)
- [SmsNotificationSendMultipleRequest](docs/Model/SmsNotificationSendMultipleRequest.md)
- [SmsNotificationSendRequest](docs/Model/SmsNotificationSendRequest.md)
- [SmsNotificationSendRequestTemplate](docs/Model/SmsNotificationSendRequestTemplate.md)
- [SmsNotificationSendRequestTo](docs/Model/SmsNotificationSendRequestTo.md)
- [SmsNotificationSentResponse](docs/Model/SmsNotificationSentResponse.md)
- [SmsNotificationStateResponse](docs/Model/SmsNotificationStateResponse.md)
- [SmsRoutingRule](docs/Model/SmsRoutingRule.md)
- [SmsRoutingRuleCollectionResponse](docs/Model/SmsRoutingRuleCollectionResponse.md)
- [SmsRoutingRuleRequest](docs/Model/SmsRoutingRuleRequest.md)
- [SmsRoutingRuleResponse](docs/Model/SmsRoutingRuleResponse.md)
- [SmsSender](docs/Model/SmsSender.md)
- [SmsSenderCollectionResponse](docs/Model/SmsSenderCollectionResponse.md)
- [SmsSenderResponse](docs/Model/SmsSenderResponse.md)
- [SmsTemplate](docs/Model/SmsTemplate.md)
- [SmsTemplateCollectionResponse](docs/Model/SmsTemplateCollectionResponse.md)
- [SmsTemplateContent](docs/Model/SmsTemplateContent.md)
- [SmsTemplateContentCollectionResponse](docs/Model/SmsTemplateContentCollectionResponse.md)
- [SmsTemplateContentRequest](docs/Model/SmsTemplateContentRequest.md)
- [SmsTemplateContentResponse](docs/Model/SmsTemplateContentResponse.md)
- [SmsTemplateRequest](docs/Model/SmsTemplateRequest.md)
- [SmsTemplateResponse](docs/Model/SmsTemplateResponse.md)
- [SmsTransport](docs/Model/SmsTransport.md)
- [SmsTransportCollectionResponse](docs/Model/SmsTransportCollectionResponse.md)
- [SmsTransportCreateRequest](docs/Model/SmsTransportCreateRequest.md)
- [SmsTransportResponse](docs/Model/SmsTransportResponse.md)
- [SmsTransportUpdateRequest](docs/Model/SmsTransportUpdateRequest.md)
- [Subscription](docs/Model/Subscription.md)
- [SubscriptionCollectionResponse](docs/Model/SubscriptionCollectionResponse.md)
- [SubscriptionCreateRequest](docs/Model/SubscriptionCreateRequest.md)
- [SubscriptionResponse](docs/Model/SubscriptionResponse.md)
- [SubscriptionUpdateRequest](docs/Model/SubscriptionUpdateRequest.md)
- [TransportWebhookGenerateResponse](docs/Model/TransportWebhookGenerateResponse.md)
- [TransportWebhookGenerateResponseData](docs/Model/TransportWebhookGenerateResponseData.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
