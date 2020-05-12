<?hh // strict
namespace slack\aws\sns;

interface SNS {
  public function AddPermission(AddPermissionInput $in): Awaitable<\Errors\Error>;
  public function CheckIfPhoneNumberIsOptedOut(CheckIfPhoneNumberIsOptedOutInput $in): Awaitable<\Errors\Result<CheckIfPhoneNumberIsOptedOutResponse>>;
  public function ConfirmSubscription(ConfirmSubscriptionInput $in): Awaitable<\Errors\Result<ConfirmSubscriptionResponse>>;
  public function CreatePlatformApplication(CreatePlatformApplicationInput $in): Awaitable<\Errors\Result<CreatePlatformApplicationResponse>>;
  public function CreatePlatformEndpoint(CreatePlatformEndpointInput $in): Awaitable<\Errors\Result<CreateEndpointResponse>>;
  public function CreateTopic(CreateTopicInput $in): Awaitable<\Errors\Result<CreateTopicResponse>>;
  public function DeleteEndpoint(DeleteEndpointInput $in): Awaitable<\Errors\Error>;
  public function DeletePlatformApplication(DeletePlatformApplicationInput $in): Awaitable<\Errors\Error>;
  public function DeleteTopic(DeleteTopicInput $in): Awaitable<\Errors\Error>;
  public function GetEndpointAttributes(GetEndpointAttributesInput $in): Awaitable<\Errors\Result<GetEndpointAttributesResponse>>;
  public function GetPlatformApplicationAttributes(GetPlatformApplicationAttributesInput $in): Awaitable<\Errors\Result<GetPlatformApplicationAttributesResponse>>;
  public function GetSMSAttributes(GetSMSAttributesInput $in): Awaitable<\Errors\Result<GetSMSAttributesResponse>>;
  public function GetSubscriptionAttributes(GetSubscriptionAttributesInput $in): Awaitable<\Errors\Result<GetSubscriptionAttributesResponse>>;
  public function GetTopicAttributes(GetTopicAttributesInput $in): Awaitable<\Errors\Result<GetTopicAttributesResponse>>;
  public function ListEndpointsByPlatformApplication(ListEndpointsByPlatformApplicationInput $in): Awaitable<\Errors\Result<ListEndpointsByPlatformApplicationResponse>>;
  public function ListPhoneNumbersOptedOut(ListPhoneNumbersOptedOutInput $in): Awaitable<\Errors\Result<ListPhoneNumbersOptedOutResponse>>;
  public function ListPlatformApplications(ListPlatformApplicationsInput $in): Awaitable<\Errors\Result<ListPlatformApplicationsResponse>>;
  public function ListSubscriptions(ListSubscriptionsInput $in): Awaitable<\Errors\Result<ListSubscriptionsResponse>>;
  public function ListSubscriptionsByTopic(ListSubscriptionsByTopicInput $in): Awaitable<\Errors\Result<ListSubscriptionsByTopicResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListTopics(ListTopicsInput $in): Awaitable<\Errors\Result<ListTopicsResponse>>;
  public function OptInPhoneNumber(OptInPhoneNumberInput $in): Awaitable<\Errors\Result<OptInPhoneNumberResponse>>;
  public function Publish(PublishInput $in): Awaitable<\Errors\Result<PublishResponse>>;
  public function RemovePermission(RemovePermissionInput $in): Awaitable<\Errors\Error>;
  public function SetEndpointAttributes(SetEndpointAttributesInput $in): Awaitable<\Errors\Error>;
  public function SetPlatformApplicationAttributes(SetPlatformApplicationAttributesInput $in): Awaitable<\Errors\Error>;
  public function SetSMSAttributes(SetSMSAttributesInput $in): Awaitable<\Errors\Result<SetSMSAttributesResponse>>;
  public function SetSubscriptionAttributes(SetSubscriptionAttributesInput $in): Awaitable<\Errors\Error>;
  public function SetTopicAttributes(SetTopicAttributesInput $in): Awaitable<\Errors\Error>;
  public function Subscribe(SubscribeInput $in): Awaitable<\Errors\Result<SubscribeResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function Unsubscribe(UnsubscribeInput $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
}

type ActionsList = vec<action>;

class AddPermissionInput {
  public ?DelegatesList $aws_account_id;
  public ?ActionsList $action_name;
  public ?label $label;
  public ?topicARN $topic_arn;

  public function __construct(shape(
    ?'aws_account_id' => ?DelegatesList,
    ?'action_name' => ?ActionsList,
    ?'label' => ?label,
    ?'topic_arn' => ?topicARN,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? vec[];
    $this->action_name = $s['action_name'] ?? vec[];
    $this->label = $s['label'] ?? '';
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

type AmazonResourceName = string;

class AuthorizationErrorException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Binary = string;

class CheckIfPhoneNumberIsOptedOutInput {
  public ?PhoneNumber $phone_number;

  public function __construct(shape(
    ?'phone_number' => ?PhoneNumber,
  ) $s = shape()) {
    $this->phone_number = $s['phone_number'] ?? '';
  }
}

class CheckIfPhoneNumberIsOptedOutResponse {
  public ?boolean $is_opted_out;

  public function __construct(shape(
    ?'is_opted_out' => ?boolean,
  ) $s = shape()) {
    $this->is_opted_out = $s['is_opted_out'] ?? false;
  }
}

class ConcurrentAccessException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ConfirmSubscriptionInput {
  public ?authenticateOnUnsubscribe $authenticate_on_unsubscribe;
  public ?token $token;
  public ?topicARN $topic_arn;

  public function __construct(shape(
    ?'authenticate_on_unsubscribe' => ?authenticateOnUnsubscribe,
    ?'token' => ?token,
    ?'topic_arn' => ?topicARN,
  ) $s = shape()) {
    $this->authenticate_on_unsubscribe = $s['authenticate_on_unsubscribe'] ?? '';
    $this->token = $s['token'] ?? '';
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

class ConfirmSubscriptionResponse {
  public ?subscriptionARN $subscription_arn;

  public function __construct(shape(
    ?'subscription_arn' => ?subscriptionARN,
  ) $s = shape()) {
    $this->subscription_arn = $s['subscription_arn'] ?? '';
  }
}

class CreateEndpointResponse {
  public string $endpoint_arn;

  public function __construct(shape(
    ?'endpoint_arn' => string,
  ) $s = shape()) {
    $this->endpoint_arn = $s['endpoint_arn'] ?? '';
  }
}

class CreatePlatformApplicationInput {
  public ?MapStringToString $attributes;
  public string $name;
  public string $platform;

  public function __construct(shape(
    ?'attributes' => ?MapStringToString,
    ?'name' => string,
    ?'platform' => string,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->name = $s['name'] ?? '';
    $this->platform = $s['platform'] ?? '';
  }
}

class CreatePlatformApplicationResponse {
  public string $platform_application_arn;

  public function __construct(shape(
    ?'platform_application_arn' => string,
  ) $s = shape()) {
    $this->platform_application_arn = $s['platform_application_arn'] ?? '';
  }
}

class CreatePlatformEndpointInput {
  public ?MapStringToString $attributes;
  public string $custom_user_data;
  public string $platform_application_arn;
  public string $token;

  public function __construct(shape(
    ?'attributes' => ?MapStringToString,
    ?'custom_user_data' => string,
    ?'platform_application_arn' => string,
    ?'token' => string,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->custom_user_data = $s['custom_user_data'] ?? '';
    $this->platform_application_arn = $s['platform_application_arn'] ?? '';
    $this->token = $s['token'] ?? '';
  }
}

class CreateTopicInput {
  public ?TopicAttributesMap $attributes;
  public ?topicName $name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'attributes' => ?TopicAttributesMap,
    ?'name' => ?topicName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateTopicResponse {
  public ?topicARN $topic_arn;

  public function __construct(shape(
    ?'topic_arn' => ?topicARN,
  ) $s = shape()) {
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

type DelegatesList = vec<delegate>;

class DeleteEndpointInput {
  public string $endpoint_arn;

  public function __construct(shape(
    ?'endpoint_arn' => string,
  ) $s = shape()) {
    $this->endpoint_arn = $s['endpoint_arn'] ?? '';
  }
}

class DeletePlatformApplicationInput {
  public string $platform_application_arn;

  public function __construct(shape(
    ?'platform_application_arn' => string,
  ) $s = shape()) {
    $this->platform_application_arn = $s['platform_application_arn'] ?? '';
  }
}

class DeleteTopicInput {
  public ?topicARN $topic_arn;

  public function __construct(shape(
    ?'topic_arn' => ?topicARN,
  ) $s = shape()) {
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

class Endpoint {
  public ?MapStringToString $attributes;
  public string $endpoint_arn;

  public function __construct(shape(
    ?'attributes' => ?MapStringToString,
    ?'endpoint_arn' => string,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->endpoint_arn = $s['endpoint_arn'] ?? '';
  }
}

class EndpointDisabledException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class FilterPolicyLimitExceededException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class GetEndpointAttributesInput {
  public string $endpoint_arn;

  public function __construct(shape(
    ?'endpoint_arn' => string,
  ) $s = shape()) {
    $this->endpoint_arn = $s['endpoint_arn'] ?? '';
  }
}

class GetEndpointAttributesResponse {
  public ?MapStringToString $attributes;

  public function __construct(shape(
    ?'attributes' => ?MapStringToString,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
  }
}

class GetPlatformApplicationAttributesInput {
  public string $platform_application_arn;

  public function __construct(shape(
    ?'platform_application_arn' => string,
  ) $s = shape()) {
    $this->platform_application_arn = $s['platform_application_arn'] ?? '';
  }
}

class GetPlatformApplicationAttributesResponse {
  public ?MapStringToString $attributes;

  public function __construct(shape(
    ?'attributes' => ?MapStringToString,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
  }
}

class GetSMSAttributesInput {
  public ?ListString $attributes;

  public function __construct(shape(
    ?'attributes' => ?ListString,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

class GetSMSAttributesResponse {
  public ?MapStringToString $attributes;

  public function __construct(shape(
    ?'attributes' => ?MapStringToString,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
  }
}

class GetSubscriptionAttributesInput {
  public ?subscriptionARN $subscription_arn;

  public function __construct(shape(
    ?'subscription_arn' => ?subscriptionARN,
  ) $s = shape()) {
    $this->subscription_arn = $s['subscription_arn'] ?? '';
  }
}

class GetSubscriptionAttributesResponse {
  public ?SubscriptionAttributesMap $attributes;

  public function __construct(shape(
    ?'attributes' => ?SubscriptionAttributesMap,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
  }
}

class GetTopicAttributesInput {
  public ?topicARN $topic_arn;

  public function __construct(shape(
    ?'topic_arn' => ?topicARN,
  ) $s = shape()) {
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

class GetTopicAttributesResponse {
  public ?TopicAttributesMap $attributes;

  public function __construct(shape(
    ?'attributes' => ?TopicAttributesMap,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
  }
}

class InternalErrorException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterValueException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidSecurityException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KMSAccessDeniedException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KMSDisabledException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KMSInvalidStateException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KMSNotFoundException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KMSOptInRequired {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KMSThrottlingException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListEndpointsByPlatformApplicationInput {
  public string $next_token;
  public string $platform_application_arn;

  public function __construct(shape(
    ?'next_token' => string,
    ?'platform_application_arn' => string,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->platform_application_arn = $s['platform_application_arn'] ?? '';
  }
}

class ListEndpointsByPlatformApplicationResponse {
  public ?ListOfEndpoints $endpoints;
  public string $next_token;

  public function __construct(shape(
    ?'endpoints' => ?ListOfEndpoints,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->endpoints = $s['endpoints'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type ListOfEndpoints = vec<Endpoint>;

type ListOfPlatformApplications = vec<PlatformApplication>;

class ListPhoneNumbersOptedOutInput {
  public ?string $next_token;

  public function __construct(shape(
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPhoneNumbersOptedOutResponse {
  public ?string $next_token;
  public ?PhoneNumberList $phone_numbers;

  public function __construct(shape(
    ?'next_token' => ?string,
    ?'phone_numbers' => ?PhoneNumberList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->phone_numbers = $s['phone_numbers'] ?? vec[];
  }
}

class ListPlatformApplicationsInput {
  public string $next_token;

  public function __construct(shape(
    ?'next_token' => string,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPlatformApplicationsResponse {
  public string $next_token;
  public ?ListOfPlatformApplications $platform_applications;

  public function __construct(shape(
    ?'next_token' => string,
    ?'platform_applications' => ?ListOfPlatformApplications,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->platform_applications = $s['platform_applications'] ?? vec[];
  }
}

type ListString = vec<String>;

class ListSubscriptionsByTopicInput {
  public ?nextToken $next_token;
  public ?topicARN $topic_arn;

  public function __construct(shape(
    ?'next_token' => ?nextToken,
    ?'topic_arn' => ?topicARN,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

class ListSubscriptionsByTopicResponse {
  public ?nextToken $next_token;
  public ?SubscriptionsList $subscriptions;

  public function __construct(shape(
    ?'next_token' => ?nextToken,
    ?'subscriptions' => ?SubscriptionsList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->subscriptions = $s['subscriptions'] ?? vec[];
  }
}

class ListSubscriptionsInput {
  public ?nextToken $next_token;

  public function __construct(shape(
    ?'next_token' => ?nextToken,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSubscriptionsResponse {
  public ?nextToken $next_token;
  public ?SubscriptionsList $subscriptions;

  public function __construct(shape(
    ?'next_token' => ?nextToken,
    ?'subscriptions' => ?SubscriptionsList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->subscriptions = $s['subscriptions'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?AmazonResourceName $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagList $tags;

  public function __construct(shape(
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ListTopicsInput {
  public ?nextToken $next_token;

  public function __construct(shape(
    ?'next_token' => ?nextToken,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTopicsResponse {
  public ?nextToken $next_token;
  public ?TopicsList $topics;

  public function __construct(shape(
    ?'next_token' => ?nextToken,
    ?'topics' => ?TopicsList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->topics = $s['topics'] ?? vec[];
  }
}

type MapStringToString = dict<String, String>;

type MessageAttributeMap = dict<String, MessageAttributeValue>;

class MessageAttributeValue {
  public ?Binary $binary_value;
  public string $data_type;
  public string $string_value;

  public function __construct(shape(
    ?'binary_value' => ?Binary,
    ?'data_type' => string,
    ?'string_value' => string,
  ) $s = shape()) {
    $this->binary_value = $s['binary_value'] ?? '';
    $this->data_type = $s['data_type'] ?? '';
    $this->string_value = $s['string_value'] ?? '';
  }
}

class NotFoundException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class OptInPhoneNumberInput {
  public ?PhoneNumber $phone_number;

  public function __construct(shape(
    ?'phone_number' => ?PhoneNumber,
  ) $s = shape()) {
    $this->phone_number = $s['phone_number'] ?? '';
  }
}

class OptInPhoneNumberResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type PhoneNumber = string;

type PhoneNumberList = vec<PhoneNumber>;

class PlatformApplication {
  public ?MapStringToString $attributes;
  public string $platform_application_arn;

  public function __construct(shape(
    ?'attributes' => ?MapStringToString,
    ?'platform_application_arn' => string,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->platform_application_arn = $s['platform_application_arn'] ?? '';
  }
}

class PlatformApplicationDisabledException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PublishInput {
  public ?message $message;
  public ?MessageAttributeMap $message_attributes;
  public ?messageStructure $message_structure;
  public string $phone_number;
  public ?subject $subject;
  public string $target_arn;
  public ?topicARN $topic_arn;

  public function __construct(shape(
    ?'message' => ?message,
    ?'message_attributes' => ?MessageAttributeMap,
    ?'message_structure' => ?messageStructure,
    ?'phone_number' => string,
    ?'subject' => ?subject,
    ?'target_arn' => string,
    ?'topic_arn' => ?topicARN,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->message_attributes = $s['message_attributes'] ?? dict[];
    $this->message_structure = $s['message_structure'] ?? '';
    $this->phone_number = $s['phone_number'] ?? '';
    $this->subject = $s['subject'] ?? '';
    $this->target_arn = $s['target_arn'] ?? '';
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

class PublishResponse {
  public ?messageId $message_id;

  public function __construct(shape(
    ?'message_id' => ?messageId,
  ) $s = shape()) {
    $this->message_id = $s['message_id'] ?? '';
  }
}

class RemovePermissionInput {
  public ?label $label;
  public ?topicARN $topic_arn;

  public function __construct(shape(
    ?'label' => ?label,
    ?'topic_arn' => ?topicARN,
  ) $s = shape()) {
    $this->label = $s['label'] ?? '';
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

class ResourceNotFoundException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class SetEndpointAttributesInput {
  public ?MapStringToString $attributes;
  public string $endpoint_arn;

  public function __construct(shape(
    ?'attributes' => ?MapStringToString,
    ?'endpoint_arn' => string,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->endpoint_arn = $s['endpoint_arn'] ?? '';
  }
}

class SetPlatformApplicationAttributesInput {
  public ?MapStringToString $attributes;
  public string $platform_application_arn;

  public function __construct(shape(
    ?'attributes' => ?MapStringToString,
    ?'platform_application_arn' => string,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->platform_application_arn = $s['platform_application_arn'] ?? '';
  }
}

class SetSMSAttributesInput {
  public ?MapStringToString $attributes;

  public function __construct(shape(
    ?'attributes' => ?MapStringToString,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
  }
}

class SetSMSAttributesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SetSubscriptionAttributesInput {
  public ?attributeName $attribute_name;
  public ?attributeValue $attribute_value;
  public ?subscriptionARN $subscription_arn;

  public function __construct(shape(
    ?'attribute_name' => ?attributeName,
    ?'attribute_value' => ?attributeValue,
    ?'subscription_arn' => ?subscriptionARN,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->attribute_value = $s['attribute_value'] ?? '';
    $this->subscription_arn = $s['subscription_arn'] ?? '';
  }
}

class SetTopicAttributesInput {
  public ?attributeName $attribute_name;
  public ?attributeValue $attribute_value;
  public ?topicARN $topic_arn;

  public function __construct(shape(
    ?'attribute_name' => ?attributeName,
    ?'attribute_value' => ?attributeValue,
    ?'topic_arn' => ?topicARN,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->attribute_value = $s['attribute_value'] ?? '';
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

class StaleTagException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type String = string;

class SubscribeInput {
  public ?SubscriptionAttributesMap $attributes;
  public ?endpoint $endpoint;
  public ?protocol $protocol;
  public ?boolean $return_subscription_arn;
  public ?topicARN $topic_arn;

  public function __construct(shape(
    ?'attributes' => ?SubscriptionAttributesMap,
    ?'endpoint' => ?endpoint,
    ?'protocol' => ?protocol,
    ?'return_subscription_arn' => ?boolean,
    ?'topic_arn' => ?topicARN,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->endpoint = $s['endpoint'] ?? '';
    $this->protocol = $s['protocol'] ?? '';
    $this->return_subscription_arn = $s['return_subscription_arn'] ?? false;
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

class SubscribeResponse {
  public ?subscriptionARN $subscription_arn;

  public function __construct(shape(
    ?'subscription_arn' => ?subscriptionARN,
  ) $s = shape()) {
    $this->subscription_arn = $s['subscription_arn'] ?? '';
  }
}

class Subscription {
  public ?endpoint $endpoint;
  public ?account $owner;
  public ?protocol $protocol;
  public ?subscriptionARN $subscription_arn;
  public ?topicARN $topic_arn;

  public function __construct(shape(
    ?'endpoint' => ?endpoint,
    ?'owner' => ?account,
    ?'protocol' => ?protocol,
    ?'subscription_arn' => ?subscriptionARN,
    ?'topic_arn' => ?topicARN,
  ) $s = shape()) {
    $this->endpoint = $s['endpoint'] ?? '';
    $this->owner = $s['owner'] ?? '';
    $this->protocol = $s['protocol'] ?? '';
    $this->subscription_arn = $s['subscription_arn'] ?? '';
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

type SubscriptionAttributesMap = dict<attributeName, attributeValue>;

class SubscriptionLimitExceededException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type SubscriptionsList = vec<Subscription>;

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

class TagLimitExceededException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TagList = vec<Tag>;

class TagPolicyException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TagResourceRequest {
  public ?AmazonResourceName $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class ThrottledException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Topic {
  public ?topicARN $topic_arn;

  public function __construct(shape(
    ?'topic_arn' => ?topicARN,
  ) $s = shape()) {
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

type TopicAttributesMap = dict<attributeName, attributeValue>;

class TopicLimitExceededException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TopicsList = vec<Topic>;

class UnsubscribeInput {
  public ?subscriptionARN $subscription_arn;

  public function __construct(shape(
    ?'subscription_arn' => ?subscriptionARN,
  ) $s = shape()) {
    $this->subscription_arn = $s['subscription_arn'] ?? '';
  }
}

class UntagResourceRequest {
  public ?AmazonResourceName $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type account = string;

type action = string;

type attributeName = string;

type attributeValue = string;

type authenticateOnUnsubscribe = string;

type boolean = bool;

type delegate = string;

type endpoint = string;

type label = string;

type message = string;

type messageId = string;

type messageStructure = string;

type nextToken = string;

type protocol = string;

type string = string;

type subject = string;

type subscriptionARN = string;

type token = string;

type topicARN = string;

type topicName = string;

