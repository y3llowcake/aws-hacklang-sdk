<?hh // strict
namespace slack\aws\events;

interface CloudWatch Events {
  public function EnableRule(EnableRuleRequest) Awaitable<Errors\Error>;
  public function ListPartnerEventSources(ListPartnerEventSourcesRequest) Awaitable<Errors\Result<ListPartnerEventSourcesResponse>>;
  public function ListRules(ListRulesRequest) Awaitable<Errors\Result<ListRulesResponse>>;
  public function PutTargets(PutTargetsRequest) Awaitable<Errors\Result<PutTargetsResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function CreateEventBus(CreateEventBusRequest) Awaitable<Errors\Result<CreateEventBusResponse>>;
  public function ListEventBuses(ListEventBusesRequest) Awaitable<Errors\Result<ListEventBusesResponse>>;
  public function ListEventSources(ListEventSourcesRequest) Awaitable<Errors\Result<ListEventSourcesResponse>>;
  public function ListPartnerEventSourceAccounts(ListPartnerEventSourceAccountsRequest) Awaitable<Errors\Result<ListPartnerEventSourceAccountsResponse>>;
  public function ListTargetsByRule(ListTargetsByRuleRequest) Awaitable<Errors\Result<ListTargetsByRuleResponse>>;
  public function PutRule(PutRuleRequest) Awaitable<Errors\Result<PutRuleResponse>>;
  public function DescribeEventBus(DescribeEventBusRequest) Awaitable<Errors\Result<DescribeEventBusResponse>>;
  public function DeleteRule(DeleteRuleRequest) Awaitable<Errors\Error>;
  public function DescribeEventSource(DescribeEventSourceRequest) Awaitable<Errors\Result<DescribeEventSourceResponse>>;
  public function PutPartnerEvents(PutPartnerEventsRequest) Awaitable<Errors\Result<PutPartnerEventsResponse>>;
  public function DeactivateEventSource(DeactivateEventSourceRequest) Awaitable<Errors\Error>;
  public function DeletePartnerEventSource(DeletePartnerEventSourceRequest) Awaitable<Errors\Error>;
  public function DescribeRule(DescribeRuleRequest) Awaitable<Errors\Result<DescribeRuleResponse>>;
  public function PutPermission(PutPermissionRequest) Awaitable<Errors\Error>;
  public function RemovePermission(RemovePermissionRequest) Awaitable<Errors\Error>;
  public function TestEventPattern(TestEventPatternRequest) Awaitable<Errors\Result<TestEventPatternResponse>>;
  public function DeleteEventBus(DeleteEventBusRequest) Awaitable<Errors\Error>;
  public function RemoveTargets(RemoveTargetsRequest) Awaitable<Errors\Result<RemoveTargetsResponse>>;
  public function DescribePartnerEventSource(DescribePartnerEventSourceRequest) Awaitable<Errors\Result<DescribePartnerEventSourceResponse>>;
  public function CreatePartnerEventSource(CreatePartnerEventSourceRequest) Awaitable<Errors\Result<CreatePartnerEventSourceResponse>>;
  public function ActivateEventSource(ActivateEventSourceRequest) Awaitable<Errors\Error>;
  public function ListRuleNamesByTarget(ListRuleNamesByTargetRequest) Awaitable<Errors\Result<ListRuleNamesByTargetResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutEvents(PutEventsRequest) Awaitable<Errors\Result<PutEventsResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function DisableRule(DisableRuleRequest) Awaitable<Errors\Error>;
}

class ListRuleNamesByTargetRequest {
  public TargetArn $target_arn;
  public EventBusName $event_bus_name;
  public NextToken $next_token;
  public LimitMax100 $limit;
}

class PutRuleResponse {
  public RuleArn $rule_arn;
}

class DescribeRuleResponse {
  public RuleName $name;
  public RuleState $state;
  public RuleDescription $description;
  public RoleArn $role_arn;
  public EventBusName $event_bus_name;
  public RuleArn $arn;
  public EventPattern $event_pattern;
  public ScheduleExpression $schedule_expression;
  public ManagedBy $managed_by;
}

class DeactivateEventSourceRequest {
  public EventSourceName $name;
}

class DeleteEventBusRequest {
  public EventBusName $name;
}

class DescribeEventSourceResponse {
  public Timestamp $expiration_time;
  public string $name;
  public EventSourceState $state;
  public string $arn;
  public string $created_by;
  public Timestamp $creation_time;
}

class ListPartnerEventSourcesResponse {
  public PartnerEventSourceList $partner_event_sources;
  public NextToken $next_token;
}

class PartnerEventSource {
  public string $arn;
  public string $name;
}

class BatchParameters {
  public string $job_definition;
  public string $job_name;
  public BatchArrayProperties $array_properties;
  public BatchRetryStrategy $retry_strategy;
}

class RuleNameList {
}

class TagList {
}

class Target {
  public RunCommandParameters $run_command_parameters;
  public KinesisParameters $kinesis_parameters;
  public TargetArn $arn;
  public RoleArn $role_arn;
  public TargetInput $input;
  public TargetInputPath $input_path;
  public InputTransformer $input_transformer;
  public EcsParameters $ecs_parameters;
  public BatchParameters $batch_parameters;
  public TargetId $id;
  public SqsParameters $sqs_parameters;
}

class UntagResourceRequest {
  public TagKeyList $tag_keys;
  public Arn $resource_arn;
}

class LaunchType {
}

class PolicyLengthExceededException {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class KinesisParameters {
  public TargetPartitionKeyPath $partition_key_path;
}

class Principal {
}

class RunCommandTargetValues {
}

class DisableRuleRequest {
  public RuleName $name;
  public EventBusName $event_bus_name;
}

class EventBusName {
}

class ListEventBusesResponse {
  public EventBusList $event_buses;
  public NextToken $next_token;
}

class PutPartnerEventsResultEntryList {
}

class CreateEventBusRequest {
  public EventBusName $name;
  public EventSourceName $event_source_name;
  public TagList $tags;
}

class ListPartnerEventSourceAccountsRequest {
  public EventSourceName $event_source_name;
  public NextToken $next_token;
  public LimitMax100 $limit;
}

class RemoveTargetsResultEntryList {
}

class EventId {
}

class EventResource {
}

class EventSource {
  public string $arn;
  public string $created_by;
  public Timestamp $creation_time;
  public Timestamp $expiration_time;
  public string $name;
  public EventSourceState $state;
}

class ListRuleNamesByTargetResponse {
  public RuleNameList $rule_names;
  public NextToken $next_token;
}

class ListTargetsByRuleResponse {
  public TargetList $targets;
  public NextToken $next_token;
}

class PartnerEventSourceList {
}

class String {
}

class TargetIdList {
}

class EnableRuleRequest {
  public RuleName $name;
  public EventBusName $event_bus_name;
}

class PutPartnerEventsRequest {
  public PutPartnerEventsRequestEntryList $entries;
}

class RunCommandTargetKey {
}

class ScheduleExpression {
}

class TagResourceResponse {
}

class ListPartnerEventSourcesRequest {
  public PartnerEventSourceNamePrefix $name_prefix;
  public NextToken $next_token;
  public LimitMax100 $limit;
}

class ErrorCode {
}

class EventSourceName {
}

class ManagedBy {
}

class PutEventsRequestEntry {
  public EventTime $time;
  public string $source;
  public EventResourceList $resources;
  public string $detail_type;
  public string $detail;
  public NonPartnerEventBusName $event_bus_name;
}

class PutPartnerEventsResponse {
  public int $failed_entry_count;
  public PutPartnerEventsResultEntryList $entries;
}

class PutPermissionRequest {
  public Principal $principal;
  public StatementId $statement_id;
  public Condition $condition;
  public NonPartnerEventBusName $event_bus_name;
  public Action $action;
}

class TagResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;
}

class AwsVpcConfiguration {
  public StringList $security_groups;
  public AssignPublicIp $assign_public_ip;
  public StringList $subnets;
}

class TransformerPaths {
}

class TransformerInput {
}

class NextToken {
}

class RunCommandTargets {
}

class StatementId {
}

class TagValue {
}

class ListRulesRequest {
  public RuleName $name_prefix;
  public EventBusName $event_bus_name;
  public NextToken $next_token;
  public LimitMax100 $limit;
}

class EventTime {
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class PartnerEventSourceAccountList {
}

class PutEventsResultEntryList {
}

class Timestamp {
}

class DescribeEventBusResponse {
  public string $name;
  public string $arn;
  public string $policy;
}

class ManagedRuleException {
}

class PartnerEventSourceNamePrefix {
}

class PutTargetsRequest {
  public RuleName $rule;
  public EventBusName $event_bus_name;
  public TargetList $targets;
}

class PutTargetsResultEntry {
  public TargetId $target_id;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class TestEventPatternRequest {
  public EventPattern $event_pattern;
  public string $event;
}

class EventBus {
  public string $policy;
  public string $name;
  public string $arn;
}

class DescribePartnerEventSourceResponse {
  public string $name;
  public string $arn;
}

class ListRulesResponse {
  public RuleResponseList $rules;
  public NextToken $next_token;
}

class PutEventsResultEntry {
  public EventId $event_id;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class RemoveTargetsResultEntry {
  public TargetId $target_id;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class Rule {
  public ScheduleExpression $schedule_expression;
  public EventBusName $event_bus_name;
  public RoleArn $role_arn;
  public ManagedBy $managed_by;
  public RuleName $name;
  public RuleArn $arn;
  public EventPattern $event_pattern;
  public RuleState $state;
  public RuleDescription $description;
}

class RunCommandParameters {
  public RunCommandTargets $run_command_targets;
}

class BatchRetryStrategy {
  public int $attempts;
}

class ListTargetsByRuleRequest {
  public NextToken $next_token;
  public LimitMax100 $limit;
  public RuleName $rule;
  public EventBusName $event_bus_name;
}

class PutTargetsResponse {
  public int $failed_entry_count;
  public PutTargetsResultEntryList $failed_entries;
}

class ConcurrentModificationException {
}

class InputTransformerPathKey {
}

class ListEventBusesRequest {
  public EventBusName $name_prefix;
  public NextToken $next_token;
  public LimitMax100 $limit;
}

class RuleName {
}

class RuleResponseList {
}

class TagKey {
}

class TargetId {
}

class BatchArrayProperties {
  public int $size;
}

class PutEventsResponse {
  public int $failed_entry_count;
  public PutEventsResultEntryList $entries;
}

class ListEventSourcesRequest {
  public LimitMax100 $limit;
  public EventSourceNamePrefix $name_prefix;
  public NextToken $next_token;
}

class NonPartnerEventBusName {
}

class TargetInputPath {
}

class DeletePartnerEventSourceRequest {
  public EventSourceName $name;
  public AccountId $account;
}

class DescribeEventBusRequest {
  public EventBusName $name;
}

class EventSourceState {
}

class InternalException {
}

class PutPartnerEventsResultEntry {
  public EventId $event_id;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class PutRuleRequest {
  public EventPattern $event_pattern;
  public RuleState $state;
  public RuleDescription $description;
  public RoleArn $role_arn;
  public TagList $tags;
  public EventBusName $event_bus_name;
  public RuleName $name;
  public ScheduleExpression $schedule_expression;
}

class RuleDescription {
}

class TagKeyList {
}

class Condition {
  public string $key;
  public string $value;
  public string $type;
}

class TargetInput {
}

class CreatePartnerEventSourceResponse {
  public string $event_source_arn;
}

class EcsParameters {
  public LimitMin1 $task_count;
  public LaunchType $launch_type;
  public NetworkConfiguration $network_configuration;
  public string $platform_version;
  public string $group;
  public Arn $task_definition_arn;
}

class EventResourceList {
}

class PutEventsRequestEntryList {
}

class RunCommandTarget {
  public RunCommandTargetKey $key;
  public RunCommandTargetValues $values;
}

class SqsParameters {
  public MessageGroupId $message_group_id;
}

class AccountId {
}

class EventSourceNamePrefix {
}

class Integer {
}

class InvalidStateException {
}

class LimitMin1 {
}

class RoleArn {
}

class EventSourceList {
}

class CreateEventBusResponse {
  public string $event_bus_arn;
}

class RemovePermissionRequest {
  public StatementId $statement_id;
  public NonPartnerEventBusName $event_bus_name;
}

class Arn {
}

class ErrorMessage {
}

class NetworkConfiguration {
  public AwsVpcConfiguration $awsvpc_configuration;
}

class AssignPublicIp {
}

class MessageGroupId {
}

class PutTargetsResultEntryList {
}

class RemoveTargetsResponse {
  public int $failed_entry_count;
  public RemoveTargetsResultEntryList $failed_entries;
}

class CreatePartnerEventSourceRequest {
  public EventSourceName $name;
  public AccountId $account;
}

class DescribeRuleRequest {
  public RuleName $name;
  public EventBusName $event_bus_name;
}

class PartnerEventSourceAccount {
  public AccountId $account;
  public Timestamp $creation_time;
  public Timestamp $expiration_time;
  public EventSourceState $state;
}

class DescribePartnerEventSourceRequest {
  public EventSourceName $name;
}

class RunCommandTargetValue {
}

class StringList {
}

class DescribeEventSourceRequest {
  public EventSourceName $name;
}

class ActivateEventSourceRequest {
  public EventSourceName $name;
}

class EventPattern {
}

class ListEventSourcesResponse {
  public EventSourceList $event_sources;
  public NextToken $next_token;
}

class RemoveTargetsRequest {
  public RuleName $rule;
  public EventBusName $event_bus_name;
  public TargetIdList $ids;
  public boolean $force;
}

class UntagResourceResponse {
}

class Action {
}

class TargetList {
}

class PutEventsRequest {
  public PutEventsRequestEntryList $entries;
}

class RuleArn {
}

class RuleState {
}

class TargetPartitionKeyPath {
}

class Boolean {
}

class ResourceNotFoundException {
}

class PutPartnerEventsRequestEntryList {
}

class ListPartnerEventSourceAccountsResponse {
  public PartnerEventSourceAccountList $partner_event_source_accounts;
  public NextToken $next_token;
}

class TargetArn {
}

class TestEventPatternResponse {
  public boolean $result;
}

class DeleteRuleRequest {
  public boolean $force;
  public RuleName $name;
  public EventBusName $event_bus_name;
}

class InputTransformer {
  public TransformerInput $input_template;
  public TransformerPaths $input_paths_map;
}

class InvalidEventPatternException {
}

class LimitExceededException {
}

class LimitMax100 {
}

class PutPartnerEventsRequestEntry {
  public EventTime $time;
  public EventSourceName $source;
  public EventResourceList $resources;
  public string $detail_type;
  public string $detail;
}

class ResourceAlreadyExistsException {
}

class EventBusList {
}

