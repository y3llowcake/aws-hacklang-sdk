<?hh // strict
namespace slack\aws\sns;

interface SNS {
  public function AddPermission(AddPermissionInput) Awaitable<Errors\Error>;
  public function CheckIfPhoneNumberIsOptedOut(CheckIfPhoneNumberIsOptedOutInput) Awaitable<Errors\Result<CheckIfPhoneNumberIsOptedOutResponse>>;
  public function ConfirmSubscription(ConfirmSubscriptionInput) Awaitable<Errors\Result<ConfirmSubscriptionResponse>>;
  public function CreatePlatformApplication(CreatePlatformApplicationInput) Awaitable<Errors\Result<CreatePlatformApplicationResponse>>;
  public function CreatePlatformEndpoint(CreatePlatformEndpointInput) Awaitable<Errors\Result<CreateEndpointResponse>>;
  public function CreateTopic(CreateTopicInput) Awaitable<Errors\Result<CreateTopicResponse>>;
  public function DeleteEndpoint(DeleteEndpointInput) Awaitable<Errors\Error>;
  public function DeletePlatformApplication(DeletePlatformApplicationInput) Awaitable<Errors\Error>;
  public function DeleteTopic(DeleteTopicInput) Awaitable<Errors\Error>;
  public function GetEndpointAttributes(GetEndpointAttributesInput) Awaitable<Errors\Result<GetEndpointAttributesResponse>>;
  public function GetPlatformApplicationAttributes(GetPlatformApplicationAttributesInput) Awaitable<Errors\Result<GetPlatformApplicationAttributesResponse>>;
  public function GetSMSAttributes(GetSMSAttributesInput) Awaitable<Errors\Result<GetSMSAttributesResponse>>;
  public function GetSubscriptionAttributes(GetSubscriptionAttributesInput) Awaitable<Errors\Result<GetSubscriptionAttributesResponse>>;
  public function GetTopicAttributes(GetTopicAttributesInput) Awaitable<Errors\Result<GetTopicAttributesResponse>>;
  public function ListEndpointsByPlatformApplication(ListEndpointsByPlatformApplicationInput) Awaitable<Errors\Result<ListEndpointsByPlatformApplicationResponse>>;
  public function ListPhoneNumbersOptedOut(ListPhoneNumbersOptedOutInput) Awaitable<Errors\Result<ListPhoneNumbersOptedOutResponse>>;
  public function ListPlatformApplications(ListPlatformApplicationsInput) Awaitable<Errors\Result<ListPlatformApplicationsResponse>>;
  public function ListSubscriptions(ListSubscriptionsInput) Awaitable<Errors\Result<ListSubscriptionsResponse>>;
  public function ListSubscriptionsByTopic(ListSubscriptionsByTopicInput) Awaitable<Errors\Result<ListSubscriptionsByTopicResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTopics(ListTopicsInput) Awaitable<Errors\Result<ListTopicsResponse>>;
  public function OptInPhoneNumber(OptInPhoneNumberInput) Awaitable<Errors\Result<OptInPhoneNumberResponse>>;
  public function Publish(PublishInput) Awaitable<Errors\Result<PublishResponse>>;
  public function RemovePermission(RemovePermissionInput) Awaitable<Errors\Error>;
  public function SetEndpointAttributes(SetEndpointAttributesInput) Awaitable<Errors\Error>;
  public function SetPlatformApplicationAttributes(SetPlatformApplicationAttributesInput) Awaitable<Errors\Error>;
  public function SetSMSAttributes(SetSMSAttributesInput) Awaitable<Errors\Result<SetSMSAttributesResponse>>;
  public function SetSubscriptionAttributes(SetSubscriptionAttributesInput) Awaitable<Errors\Error>;
  public function SetTopicAttributes(SetTopicAttributesInput) Awaitable<Errors\Error>;
  public function Subscribe(SubscribeInput) Awaitable<Errors\Result<SubscribeResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function Unsubscribe(UnsubscribeInput) Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
}

class ActionsList {
}

class AddPermissionInput {
  public DelegatesList $aws_account_id;
  public ActionsList $action_name;
  public label $label;
  public topicARN $topic_arn;
}

class AmazonResourceName {
}

class AuthorizationErrorException {
  public string $message;
}

class Binary {
}

class CheckIfPhoneNumberIsOptedOutInput {
  public PhoneNumber $phone_number;
}

class CheckIfPhoneNumberIsOptedOutResponse {
  public boolean $is_opted_out;
}

class ConcurrentAccessException {
  public string $message;
}

class ConfirmSubscriptionInput {
  public authenticateOnUnsubscribe $authenticate_on_unsubscribe;
  public token $token;
  public topicARN $topic_arn;
}

class ConfirmSubscriptionResponse {
  public subscriptionARN $subscription_arn;
}

class CreateEndpointResponse {
  public string $endpoint_arn;
}

class CreatePlatformApplicationInput {
  public MapStringToString $attributes;
  public string $name;
  public string $platform;
}

class CreatePlatformApplicationResponse {
  public string $platform_application_arn;
}

class CreatePlatformEndpointInput {
  public MapStringToString $attributes;
  public string $custom_user_data;
  public string $platform_application_arn;
  public string $token;
}

class CreateTopicInput {
  public TopicAttributesMap $attributes;
  public topicName $name;
  public TagList $tags;
}

class CreateTopicResponse {
  public topicARN $topic_arn;
}

class DelegatesList {
}

class DeleteEndpointInput {
  public string $endpoint_arn;
}

class DeletePlatformApplicationInput {
  public string $platform_application_arn;
}

class DeleteTopicInput {
  public topicARN $topic_arn;
}

class Endpoint {
  public MapStringToString $attributes;
  public string $endpoint_arn;
}

class EndpointDisabledException {
  public string $message;
}

class FilterPolicyLimitExceededException {
  public string $message;
}

class GetEndpointAttributesInput {
  public string $endpoint_arn;
}

class GetEndpointAttributesResponse {
  public MapStringToString $attributes;
}

class GetPlatformApplicationAttributesInput {
  public string $platform_application_arn;
}

class GetPlatformApplicationAttributesResponse {
  public MapStringToString $attributes;
}

class GetSMSAttributesInput {
  public ListString $attributes;
}

class GetSMSAttributesResponse {
  public MapStringToString $attributes;
}

class GetSubscriptionAttributesInput {
  public subscriptionARN $subscription_arn;
}

class GetSubscriptionAttributesResponse {
  public SubscriptionAttributesMap $attributes;
}

class GetTopicAttributesInput {
  public topicARN $topic_arn;
}

class GetTopicAttributesResponse {
  public TopicAttributesMap $attributes;
}

class InternalErrorException {
  public string $message;
}

class InvalidParameterException {
  public string $message;
}

class InvalidParameterValueException {
  public string $message;
}

class InvalidSecurityException {
  public string $message;
}

class KMSAccessDeniedException {
  public string $message;
}

class KMSDisabledException {
  public string $message;
}

class KMSInvalidStateException {
  public string $message;
}

class KMSNotFoundException {
  public string $message;
}

class KMSOptInRequired {
  public string $message;
}

class KMSThrottlingException {
  public string $message;
}

class ListEndpointsByPlatformApplicationInput {
  public string $next_token;
  public string $platform_application_arn;
}

class ListEndpointsByPlatformApplicationResponse {
  public ListOfEndpoints $endpoints;
  public string $next_token;
}

class ListOfEndpoints {
}

class ListOfPlatformApplications {
}

class ListPhoneNumbersOptedOutInput {
  public string $next_token;
}

class ListPhoneNumbersOptedOutResponse {
  public string $next_token;
  public PhoneNumberList $phone_numbers;
}

class ListPlatformApplicationsInput {
  public string $next_token;
}

class ListPlatformApplicationsResponse {
  public string $next_token;
  public ListOfPlatformApplications $platform_applications;
}

class ListString {
}

class ListSubscriptionsByTopicInput {
  public nextToken $next_token;
  public topicARN $topic_arn;
}

class ListSubscriptionsByTopicResponse {
  public nextToken $next_token;
  public SubscriptionsList $subscriptions;
}

class ListSubscriptionsInput {
  public nextToken $next_token;
}

class ListSubscriptionsResponse {
  public nextToken $next_token;
  public SubscriptionsList $subscriptions;
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class ListTopicsInput {
  public nextToken $next_token;
}

class ListTopicsResponse {
  public nextToken $next_token;
  public TopicsList $topics;
}

class MapStringToString {
}

class MessageAttributeMap {
}

class MessageAttributeValue {
  public Binary $binary_value;
  public string $data_type;
  public string $string_value;
}

class NotFoundException {
  public string $message;
}

class OptInPhoneNumberInput {
  public PhoneNumber $phone_number;
}

class OptInPhoneNumberResponse {
}

class PhoneNumber {
}

class PhoneNumberList {
}

class PlatformApplication {
  public MapStringToString $attributes;
  public string $platform_application_arn;
}

class PlatformApplicationDisabledException {
  public string $message;
}

class PublishInput {
  public message $message;
  public MessageAttributeMap $message_attributes;
  public messageStructure $message_structure;
  public string $phone_number;
  public subject $subject;
  public string $target_arn;
  public topicARN $topic_arn;
}

class PublishResponse {
  public messageId $message_id;
}

class RemovePermissionInput {
  public label $label;
  public topicARN $topic_arn;
}

class ResourceNotFoundException {
  public string $message;
}

class SetEndpointAttributesInput {
  public MapStringToString $attributes;
  public string $endpoint_arn;
}

class SetPlatformApplicationAttributesInput {
  public MapStringToString $attributes;
  public string $platform_application_arn;
}

class SetSMSAttributesInput {
  public MapStringToString $attributes;
}

class SetSMSAttributesResponse {
}

class SetSubscriptionAttributesInput {
  public attributeName $attribute_name;
  public attributeValue $attribute_value;
  public subscriptionARN $subscription_arn;
}

class SetTopicAttributesInput {
  public attributeName $attribute_name;
  public attributeValue $attribute_value;
  public topicARN $topic_arn;
}

class StaleTagException {
  public string $message;
}

class String {
}

class SubscribeInput {
  public SubscriptionAttributesMap $attributes;
  public endpoint $endpoint;
  public protocol $protocol;
  public boolean $return_subscription_arn;
  public topicARN $topic_arn;
}

class SubscribeResponse {
  public subscriptionARN $subscription_arn;
}

class Subscription {
  public endpoint $endpoint;
  public account $owner;
  public protocol $protocol;
  public subscriptionARN $subscription_arn;
  public topicARN $topic_arn;
}

class SubscriptionAttributesMap {
}

class SubscriptionLimitExceededException {
  public string $message;
}

class SubscriptionsList {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagLimitExceededException {
  public string $message;
}

class TagList {
}

class TagPolicyException {
  public string $message;
}

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class ThrottledException {
  public string $message;
}

class Topic {
  public topicARN $topic_arn;
}

class TopicAttributesMap {
}

class TopicLimitExceededException {
  public string $message;
}

class TopicsList {
}

class UnsubscribeInput {
  public subscriptionARN $subscription_arn;
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class account {
}

class action {
}

class attributeName {
}

class attributeValue {
}

class authenticateOnUnsubscribe {
}

class boolean {
}

class delegate {
}

class endpoint {
}

class label {
}

class message {
}

class messageId {
}

class messageStructure {
}

class nextToken {
}

class protocol {
}

class string {
}

class subject {
}

class subscriptionARN {
}

class token {
}

class topicARN {
}

class topicName {
}

