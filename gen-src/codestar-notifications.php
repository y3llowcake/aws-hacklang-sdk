<?hh // strict
namespace slack\aws\codestar-notifications;

interface codestar notifications {
  public function CreateNotificationRule(CreateNotificationRuleRequest) Awaitable<Errors\Result<CreateNotificationRuleResult>>;
  public function DeleteNotificationRule(DeleteNotificationRuleRequest) Awaitable<Errors\Result<DeleteNotificationRuleResult>>;
  public function DeleteTarget(DeleteTargetRequest) Awaitable<Errors\Result<DeleteTargetResult>>;
  public function DescribeNotificationRule(DescribeNotificationRuleRequest) Awaitable<Errors\Result<DescribeNotificationRuleResult>>;
  public function ListEventTypes(ListEventTypesRequest) Awaitable<Errors\Result<ListEventTypesResult>>;
  public function ListNotificationRules(ListNotificationRulesRequest) Awaitable<Errors\Result<ListNotificationRulesResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResult>>;
  public function ListTargets(ListTargetsRequest) Awaitable<Errors\Result<ListTargetsResult>>;
  public function Subscribe(SubscribeRequest) Awaitable<Errors\Result<SubscribeResult>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResult>>;
  public function Unsubscribe(UnsubscribeRequest) Awaitable<Errors\Result<UnsubscribeResult>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResult>>;
  public function UpdateNotificationRule(UpdateNotificationRuleRequest) Awaitable<Errors\Result<UpdateNotificationRuleResult>>;
}

class AccessDeniedException {
  public Message $message;
}

class ClientRequestToken {
}

class ConcurrentModificationException {
  public Message $message;
}

class ConfigurationException {
  public Message $message;
}

class CreateNotificationRuleRequest {
  public ClientRequestToken $client_request_token;
  public DetailType $detail_type;
  public EventTypeIds $event_type_ids;
  public NotificationRuleName $name;
  public NotificationRuleResource $resource;
  public NotificationRuleStatus $status;
  public Tags $tags;
  public Targets $targets;
}

class CreateNotificationRuleResult {
  public NotificationRuleArn $arn;
}

class CreatedTimestamp {
}

class DeleteNotificationRuleRequest {
  public NotificationRuleArn $arn;
}

class DeleteNotificationRuleResult {
  public NotificationRuleArn $arn;
}

class DeleteTargetRequest {
  public ForceUnsubscribeAll $force_unsubscribe_all;
  public TargetAddress $target_address;
}

class DeleteTargetResult {
}

class DescribeNotificationRuleRequest {
  public NotificationRuleArn $arn;
}

class DescribeNotificationRuleResult {
  public NotificationRuleArn $arn;
  public NotificationRuleCreatedBy $created_by;
  public CreatedTimestamp $created_timestamp;
  public DetailType $detail_type;
  public EventTypeBatch $event_types;
  public LastModifiedTimestamp $last_modified_timestamp;
  public NotificationRuleName $name;
  public NotificationRuleResource $resource;
  public NotificationRuleStatus $status;
  public Tags $tags;
  public TargetsBatch $targets;
}

class DetailType {
}

class EventTypeBatch {
}

class EventTypeId {
}

class EventTypeIds {
}

class EventTypeName {
}

class EventTypeSummary {
  public EventTypeId $event_type_id;
  public EventTypeName $event_type_name;
  public ResourceType $resource_type;
  public ServiceName $service_name;
}

class ForceUnsubscribeAll {
}

class InvalidNextTokenException {
  public Message $message;
}

class LastModifiedTimestamp {
}

class LimitExceededException {
  public Message $message;
}

class ListEventTypesFilter {
  public ListEventTypesFilterName $name;
  public ListEventTypesFilterValue $value;
}

class ListEventTypesFilterName {
}

class ListEventTypesFilterValue {
}

class ListEventTypesFilters {
}

class ListEventTypesRequest {
  public ListEventTypesFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListEventTypesResult {
  public EventTypeBatch $event_types;
  public NextToken $next_token;
}

class ListNotificationRulesFilter {
  public ListNotificationRulesFilterName $name;
  public ListNotificationRulesFilterValue $value;
}

class ListNotificationRulesFilterName {
}

class ListNotificationRulesFilterValue {
}

class ListNotificationRulesFilters {
}

class ListNotificationRulesRequest {
  public ListNotificationRulesFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListNotificationRulesResult {
  public NextToken $next_token;
  public NotificationRuleBatch $notification_rules;
}

class ListTagsForResourceRequest {
  public NotificationRuleArn $arn;
}

class ListTagsForResourceResult {
  public Tags $tags;
}

class ListTargetsFilter {
  public ListTargetsFilterName $name;
  public ListTargetsFilterValue $value;
}

class ListTargetsFilterName {
}

class ListTargetsFilterValue {
}

class ListTargetsFilters {
}

class ListTargetsRequest {
  public ListTargetsFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListTargetsResult {
  public NextToken $next_token;
  public TargetsBatch $targets;
}

class MaxResults {
}

class Message {
}

class NextToken {
}

class NotificationRuleArn {
}

class NotificationRuleBatch {
}

class NotificationRuleCreatedBy {
}

class NotificationRuleId {
}

class NotificationRuleName {
}

class NotificationRuleResource {
}

class NotificationRuleStatus {
}

class NotificationRuleSummary {
  public NotificationRuleArn $arn;
  public NotificationRuleId $id;
}

class ResourceAlreadyExistsException {
  public Message $message;
}

class ResourceNotFoundException {
  public Message $message;
}

class ResourceType {
}

class ServiceName {
}

class SubscribeRequest {
  public NotificationRuleArn $arn;
  public ClientRequestToken $client_request_token;
  public Target $target;
}

class SubscribeResult {
  public NotificationRuleArn $arn;
}

class TagKey {
}

class TagKeys {
}

class TagResourceRequest {
  public NotificationRuleArn $arn;
  public Tags $tags;
}

class TagResourceResult {
  public Tags $tags;
}

class TagValue {
}

class Tags {
}

class Target {
  public TargetAddress $target_address;
  public TargetType $target_type;
}

class TargetAddress {
}

class TargetStatus {
}

class TargetSummary {
  public TargetAddress $target_address;
  public TargetStatus $target_status;
  public TargetType $target_type;
}

class TargetType {
}

class Targets {
}

class TargetsBatch {
}

class UnsubscribeRequest {
  public NotificationRuleArn $arn;
  public TargetAddress $target_address;
}

class UnsubscribeResult {
  public NotificationRuleArn $arn;
}

class UntagResourceRequest {
  public NotificationRuleArn $arn;
  public TagKeys $tag_keys;
}

class UntagResourceResult {
}

class UpdateNotificationRuleRequest {
  public NotificationRuleArn $arn;
  public DetailType $detail_type;
  public EventTypeIds $event_type_ids;
  public NotificationRuleName $name;
  public NotificationRuleStatus $status;
  public Targets $targets;
}

class UpdateNotificationRuleResult {
}

class ValidationException {
  public Message $message;
}

