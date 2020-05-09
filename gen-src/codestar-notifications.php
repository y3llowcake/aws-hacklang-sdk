<?hh // strict
namespace slack\aws\codestar-notifications;

interface codestar notifications {
  public function UpdateNotificationRule(UpdateNotificationRuleRequest) Awaitable<Errors\Result<UpdateNotificationRuleResult>>;
  public function DeleteNotificationRule(DeleteNotificationRuleRequest) Awaitable<Errors\Result<DeleteNotificationRuleResult>>;
  public function DeleteTarget(DeleteTargetRequest) Awaitable<Errors\Result<DeleteTargetResult>>;
  public function DescribeNotificationRule(DescribeNotificationRuleRequest) Awaitable<Errors\Result<DescribeNotificationRuleResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResult>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResult>>;
  public function Unsubscribe(UnsubscribeRequest) Awaitable<Errors\Result<UnsubscribeResult>>;
  public function CreateNotificationRule(CreateNotificationRuleRequest) Awaitable<Errors\Result<CreateNotificationRuleResult>>;
  public function ListEventTypes(ListEventTypesRequest) Awaitable<Errors\Result<ListEventTypesResult>>;
  public function ListNotificationRules(ListNotificationRulesRequest) Awaitable<Errors\Result<ListNotificationRulesResult>>;
  public function ListTargets(ListTargetsRequest) Awaitable<Errors\Result<ListTargetsResult>>;
  public function Subscribe(SubscribeRequest) Awaitable<Errors\Result<SubscribeResult>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResult>>;
}

class DeleteTargetResult {
}

class InvalidNextTokenException {
  public Message $message;
}

class ListNotificationRulesResult {
  public NextToken $next_token;
  public NotificationRuleBatch $notification_rules;
}

class ListTargetsFilter {
  public ListTargetsFilterName $name;
  public ListTargetsFilterValue $value;
}

class ResourceNotFoundException {
  public Message $message;
}

class ResourceType {
}

class DeleteNotificationRuleResult {
  public NotificationRuleArn $arn;
}

class LastModifiedTimestamp {
}

class ListEventTypesFilter {
  public ListEventTypesFilterName $name;
  public ListEventTypesFilterValue $value;
}

class ListNotificationRulesFilter {
  public ListNotificationRulesFilterName $name;
  public ListNotificationRulesFilterValue $value;
}

class ListTargetsFilterValue {
}

class NotificationRuleId {
}

class AccessDeniedException {
  public Message $message;
}

class ListNotificationRulesRequest {
  public ListNotificationRulesFilters $filters;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class ListTargetsFilterName {
}

class TagResourceResult {
  public Tags $tags;
}

class TargetStatus {
}

class ListEventTypesFilterValue {
}

class NotificationRuleStatus {
}

class ServiceName {
}

class UnsubscribeResult {
  public NotificationRuleArn $arn;
}

class UntagResourceResult {
}

class ConfigurationException {
  public Message $message;
}

class ListEventTypesFilterName {
}

class ListEventTypesResult {
  public EventTypeBatch $event_types;
  public NextToken $next_token;
}

class NotificationRuleName {
}

class TargetAddress {
}

class ConcurrentModificationException {
  public Message $message;
}

class EventTypeSummary {
  public ResourceType $resource_type;
  public EventTypeId $event_type_id;
  public ServiceName $service_name;
  public EventTypeName $event_type_name;
}

class ListEventTypesRequest {
  public ListEventTypesFilters $filters;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class ListNotificationRulesFilterValue {
}

class NextToken {
}

class ResourceAlreadyExistsException {
  public Message $message;
}

class CreateNotificationRuleResult {
  public NotificationRuleArn $arn;
}

class ListTagsForResourceRequest {
  public NotificationRuleArn $arn;
}

class SubscribeRequest {
  public NotificationRuleArn $arn;
  public Target $target;
  public ClientRequestToken $client_request_token;
}

class TargetSummary {
  public TargetAddress $target_address;
  public TargetType $target_type;
  public TargetStatus $target_status;
}

class DeleteNotificationRuleRequest {
  public NotificationRuleArn $arn;
}

class DetailType {
}

class DeleteTargetRequest {
  public TargetAddress $target_address;
  public ForceUnsubscribeAll $force_unsubscribe_all;
}

class EventTypeName {
}

class ForceUnsubscribeAll {
}

class ListEventTypesFilters {
}

class CreatedTimestamp {
}

class Target {
  public TargetType $target_type;
  public TargetAddress $target_address;
}

class Targets {
}

class UpdateNotificationRuleResult {
}

class CreateNotificationRuleRequest {
  public ClientRequestToken $client_request_token;
  public Tags $tags;
  public NotificationRuleStatus $status;
  public NotificationRuleName $name;
  public EventTypeIds $event_type_ids;
  public NotificationRuleResource $resource;
  public Targets $targets;
  public DetailType $detail_type;
}

class EventTypeId {
}

class ListTargetsResult {
  public TargetsBatch $targets;
  public NextToken $next_token;
}

class NotificationRuleArn {
}

class NotificationRuleSummary {
  public NotificationRuleId $id;
  public NotificationRuleArn $arn;
}

class SubscribeResult {
  public NotificationRuleArn $arn;
}

class TagKeys {
}

class UntagResourceRequest {
  public NotificationRuleArn $arn;
  public TagKeys $tag_keys;
}

class DescribeNotificationRuleResult {
  public CreatedTimestamp $created_timestamp;
  public Tags $tags;
  public NotificationRuleName $name;
  public EventTypeBatch $event_types;
  public TargetsBatch $targets;
  public DetailType $detail_type;
  public NotificationRuleCreatedBy $created_by;
  public NotificationRuleArn $arn;
  public NotificationRuleResource $resource;
  public NotificationRuleStatus $status;
  public LastModifiedTimestamp $last_modified_timestamp;
}

class NotificationRuleCreatedBy {
}

class ValidationException {
  public Message $message;
}

class MaxResults {
}

class EventTypeBatch {
}

class EventTypeIds {
}

class LimitExceededException {
  public Message $message;
}

class ListNotificationRulesFilterName {
}

class ListTargetsFilters {
}

class ClientRequestToken {
}

class TagResourceRequest {
  public NotificationRuleArn $arn;
  public Tags $tags;
}

class Tags {
}

class TargetsBatch {
}

class ListTagsForResourceResult {
  public Tags $tags;
}

class ListTargetsRequest {
  public ListTargetsFilters $filters;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class TagKey {
}

class TagValue {
}

class UpdateNotificationRuleRequest {
  public NotificationRuleArn $arn;
  public NotificationRuleName $name;
  public NotificationRuleStatus $status;
  public EventTypeIds $event_type_ids;
  public Targets $targets;
  public DetailType $detail_type;
}

class DescribeNotificationRuleRequest {
  public NotificationRuleArn $arn;
}

class Message {
}

class NotificationRuleBatch {
}

class NotificationRuleResource {
}

class TargetType {
}

class UnsubscribeRequest {
  public NotificationRuleArn $arn;
  public TargetAddress $target_address;
}

class ListNotificationRulesFilters {
}

