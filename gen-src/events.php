<?hh // strict
namespace slack\aws\events;

interface CloudWatch Events {
  public function ActivateEventSource(ActivateEventSourceRequest) Awaitable<Errors\Error>;
  public function CreateEventBus(CreateEventBusRequest) Awaitable<Errors\Result<CreateEventBusResponse>>;
  public function CreatePartnerEventSource(CreatePartnerEventSourceRequest) Awaitable<Errors\Result<CreatePartnerEventSourceResponse>>;
  public function DeactivateEventSource(DeactivateEventSourceRequest) Awaitable<Errors\Error>;
  public function DeleteEventBus(DeleteEventBusRequest) Awaitable<Errors\Error>;
  public function DeletePartnerEventSource(DeletePartnerEventSourceRequest) Awaitable<Errors\Error>;
  public function DeleteRule(DeleteRuleRequest) Awaitable<Errors\Error>;
  public function DescribeEventBus(DescribeEventBusRequest) Awaitable<Errors\Result<DescribeEventBusResponse>>;
  public function DescribeEventSource(DescribeEventSourceRequest) Awaitable<Errors\Result<DescribeEventSourceResponse>>;
  public function DescribePartnerEventSource(DescribePartnerEventSourceRequest) Awaitable<Errors\Result<DescribePartnerEventSourceResponse>>;
  public function DescribeRule(DescribeRuleRequest) Awaitable<Errors\Result<DescribeRuleResponse>>;
  public function DisableRule(DisableRuleRequest) Awaitable<Errors\Error>;
  public function EnableRule(EnableRuleRequest) Awaitable<Errors\Error>;
  public function ListEventBuses(ListEventBusesRequest) Awaitable<Errors\Result<ListEventBusesResponse>>;
  public function ListEventSources(ListEventSourcesRequest) Awaitable<Errors\Result<ListEventSourcesResponse>>;
  public function ListPartnerEventSourceAccounts(ListPartnerEventSourceAccountsRequest) Awaitable<Errors\Result<ListPartnerEventSourceAccountsResponse>>;
  public function ListPartnerEventSources(ListPartnerEventSourcesRequest) Awaitable<Errors\Result<ListPartnerEventSourcesResponse>>;
  public function ListRuleNamesByTarget(ListRuleNamesByTargetRequest) Awaitable<Errors\Result<ListRuleNamesByTargetResponse>>;
  public function ListRules(ListRulesRequest) Awaitable<Errors\Result<ListRulesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTargetsByRule(ListTargetsByRuleRequest) Awaitable<Errors\Result<ListTargetsByRuleResponse>>;
  public function PutEvents(PutEventsRequest) Awaitable<Errors\Result<PutEventsResponse>>;
  public function PutPartnerEvents(PutPartnerEventsRequest) Awaitable<Errors\Result<PutPartnerEventsResponse>>;
  public function PutPermission(PutPermissionRequest) Awaitable<Errors\Error>;
  public function PutRule(PutRuleRequest) Awaitable<Errors\Result<PutRuleResponse>>;
  public function PutTargets(PutTargetsRequest) Awaitable<Errors\Result<PutTargetsResponse>>;
  public function RemovePermission(RemovePermissionRequest) Awaitable<Errors\Error>;
  public function RemoveTargets(RemoveTargetsRequest) Awaitable<Errors\Result<RemoveTargetsResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function TestEventPattern(TestEventPatternRequest) Awaitable<Errors\Result<TestEventPatternResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
}

class AccountId {
}

class Action {
}

class ActivateEventSourceRequest {
  public EventSourceName $name;
}

class Arn {
}

class AssignPublicIp {
}

class AwsVpcConfiguration {
  public AssignPublicIp $assign_public_ip;
  public StringList $security_groups;
  public StringList $subnets;
}

class BatchArrayProperties {
  public int $size;
}

class BatchParameters {
  public BatchArrayProperties $array_properties;
  public string $job_definition;
  public string $job_name;
  public BatchRetryStrategy $retry_strategy;
}

class BatchRetryStrategy {
  public int $attempts;
}

class Boolean {
}

class ConcurrentModificationException {
}

class Condition {
  public string $key;
  public string $type;
  public string $value;
}

class CreateEventBusRequest {
  public EventSourceName $event_source_name;
  public EventBusName $name;
  public TagList $tags;
}

class CreateEventBusResponse {
  public string $event_bus_arn;
}

class CreatePartnerEventSourceRequest {
  public AccountId $account;
  public EventSourceName $name;
}

class CreatePartnerEventSourceResponse {
  public string $event_source_arn;
}

class DeactivateEventSourceRequest {
  public EventSourceName $name;
}

class DeleteEventBusRequest {
  public EventBusName $name;
}

class DeletePartnerEventSourceRequest {
  public AccountId $account;
  public EventSourceName $name;
}

class DeleteRuleRequest {
  public EventBusName $event_bus_name;
  public boolean $force;
  public RuleName $name;
}

class DescribeEventBusRequest {
  public EventBusName $name;
}

class DescribeEventBusResponse {
  public string $arn;
  public string $name;
  public string $policy;
}

class DescribeEventSourceRequest {
  public EventSourceName $name;
}

class DescribeEventSourceResponse {
  public string $arn;
  public string $created_by;
  public Timestamp $creation_time;
  public Timestamp $expiration_time;
  public string $name;
  public EventSourceState $state;
}

class DescribePartnerEventSourceRequest {
  public EventSourceName $name;
}

class DescribePartnerEventSourceResponse {
  public string $arn;
  public string $name;
}

class DescribeRuleRequest {
  public EventBusName $event_bus_name;
  public RuleName $name;
}

class DescribeRuleResponse {
  public RuleArn $arn;
  public RuleDescription $description;
  public EventBusName $event_bus_name;
  public EventPattern $event_pattern;
  public ManagedBy $managed_by;
  public RuleName $name;
  public RoleArn $role_arn;
  public ScheduleExpression $schedule_expression;
  public RuleState $state;
}

class DisableRuleRequest {
  public EventBusName $event_bus_name;
  public RuleName $name;
}

class EcsParameters {
  public string $group;
  public LaunchType $launch_type;
  public NetworkConfiguration $network_configuration;
  public string $platform_version;
  public LimitMin1 $task_count;
  public Arn $task_definition_arn;
}

class EnableRuleRequest {
  public EventBusName $event_bus_name;
  public RuleName $name;
}

class ErrorCode {
}

class ErrorMessage {
}

class EventBus {
  public string $arn;
  public string $name;
  public string $policy;
}

class EventBusList {
}

class EventBusName {
}

class EventId {
}

class EventPattern {
}

class EventResource {
}

class EventResourceList {
}

class EventSource {
  public string $arn;
  public string $created_by;
  public Timestamp $creation_time;
  public Timestamp $expiration_time;
  public string $name;
  public EventSourceState $state;
}

class EventSourceList {
}

class EventSourceName {
}

class EventSourceNamePrefix {
}

class EventSourceState {
}

class EventTime {
}

class InputTransformer {
  public TransformerPaths $input_paths_map;
  public TransformerInput $input_template;
}

class InputTransformerPathKey {
}

class Integer {
}

class InternalException {
}

class InvalidEventPatternException {
}

class InvalidStateException {
}

class KinesisParameters {
  public TargetPartitionKeyPath $partition_key_path;
}

class LaunchType {
}

class LimitExceededException {
}

class LimitMax100 {
}

class LimitMin1 {
}

class ListEventBusesRequest {
  public LimitMax100 $limit;
  public EventBusName $name_prefix;
  public NextToken $next_token;
}

class ListEventBusesResponse {
  public EventBusList $event_buses;
  public NextToken $next_token;
}

class ListEventSourcesRequest {
  public LimitMax100 $limit;
  public EventSourceNamePrefix $name_prefix;
  public NextToken $next_token;
}

class ListEventSourcesResponse {
  public EventSourceList $event_sources;
  public NextToken $next_token;
}

class ListPartnerEventSourceAccountsRequest {
  public EventSourceName $event_source_name;
  public LimitMax100 $limit;
  public NextToken $next_token;
}

class ListPartnerEventSourceAccountsResponse {
  public NextToken $next_token;
  public PartnerEventSourceAccountList $partner_event_source_accounts;
}

class ListPartnerEventSourcesRequest {
  public LimitMax100 $limit;
  public PartnerEventSourceNamePrefix $name_prefix;
  public NextToken $next_token;
}

class ListPartnerEventSourcesResponse {
  public NextToken $next_token;
  public PartnerEventSourceList $partner_event_sources;
}

class ListRuleNamesByTargetRequest {
  public EventBusName $event_bus_name;
  public LimitMax100 $limit;
  public NextToken $next_token;
  public TargetArn $target_arn;
}

class ListRuleNamesByTargetResponse {
  public NextToken $next_token;
  public RuleNameList $rule_names;
}

class ListRulesRequest {
  public EventBusName $event_bus_name;
  public LimitMax100 $limit;
  public RuleName $name_prefix;
  public NextToken $next_token;
}

class ListRulesResponse {
  public NextToken $next_token;
  public RuleResponseList $rules;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class ListTargetsByRuleRequest {
  public EventBusName $event_bus_name;
  public LimitMax100 $limit;
  public NextToken $next_token;
  public RuleName $rule;
}

class ListTargetsByRuleResponse {
  public NextToken $next_token;
  public TargetList $targets;
}

class ManagedBy {
}

class ManagedRuleException {
}

class MessageGroupId {
}

class NetworkConfiguration {
  public AwsVpcConfiguration $awsvpc_configuration;
}

class NextToken {
}

class NonPartnerEventBusName {
}

class PartnerEventSource {
  public string $arn;
  public string $name;
}

class PartnerEventSourceAccount {
  public AccountId $account;
  public Timestamp $creation_time;
  public Timestamp $expiration_time;
  public EventSourceState $state;
}

class PartnerEventSourceAccountList {
}

class PartnerEventSourceList {
}

class PartnerEventSourceNamePrefix {
}

class PolicyLengthExceededException {
}

class Principal {
}

class PutEventsRequest {
  public PutEventsRequestEntryList $entries;
}

class PutEventsRequestEntry {
  public string $detail;
  public string $detail_type;
  public NonPartnerEventBusName $event_bus_name;
  public EventResourceList $resources;
  public string $source;
  public EventTime $time;
}

class PutEventsRequestEntryList {
}

class PutEventsResponse {
  public PutEventsResultEntryList $entries;
  public int $failed_entry_count;
}

class PutEventsResultEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public EventId $event_id;
}

class PutEventsResultEntryList {
}

class PutPartnerEventsRequest {
  public PutPartnerEventsRequestEntryList $entries;
}

class PutPartnerEventsRequestEntry {
  public string $detail;
  public string $detail_type;
  public EventResourceList $resources;
  public EventSourceName $source;
  public EventTime $time;
}

class PutPartnerEventsRequestEntryList {
}

class PutPartnerEventsResponse {
  public PutPartnerEventsResultEntryList $entries;
  public int $failed_entry_count;
}

class PutPartnerEventsResultEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public EventId $event_id;
}

class PutPartnerEventsResultEntryList {
}

class PutPermissionRequest {
  public Action $action;
  public Condition $condition;
  public NonPartnerEventBusName $event_bus_name;
  public Principal $principal;
  public StatementId $statement_id;
}

class PutRuleRequest {
  public RuleDescription $description;
  public EventBusName $event_bus_name;
  public EventPattern $event_pattern;
  public RuleName $name;
  public RoleArn $role_arn;
  public ScheduleExpression $schedule_expression;
  public RuleState $state;
  public TagList $tags;
}

class PutRuleResponse {
  public RuleArn $rule_arn;
}

class PutTargetsRequest {
  public EventBusName $event_bus_name;
  public RuleName $rule;
  public TargetList $targets;
}

class PutTargetsResponse {
  public PutTargetsResultEntryList $failed_entries;
  public int $failed_entry_count;
}

class PutTargetsResultEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public TargetId $target_id;
}

class PutTargetsResultEntryList {
}

class RemovePermissionRequest {
  public NonPartnerEventBusName $event_bus_name;
  public StatementId $statement_id;
}

class RemoveTargetsRequest {
  public EventBusName $event_bus_name;
  public boolean $force;
  public TargetIdList $ids;
  public RuleName $rule;
}

class RemoveTargetsResponse {
  public RemoveTargetsResultEntryList $failed_entries;
  public int $failed_entry_count;
}

class RemoveTargetsResultEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public TargetId $target_id;
}

class RemoveTargetsResultEntryList {
}

class ResourceAlreadyExistsException {
}

class ResourceNotFoundException {
}

class RoleArn {
}

class Rule {
  public RuleArn $arn;
  public RuleDescription $description;
  public EventBusName $event_bus_name;
  public EventPattern $event_pattern;
  public ManagedBy $managed_by;
  public RuleName $name;
  public RoleArn $role_arn;
  public ScheduleExpression $schedule_expression;
  public RuleState $state;
}

class RuleArn {
}

class RuleDescription {
}

class RuleName {
}

class RuleNameList {
}

class RuleResponseList {
}

class RuleState {
}

class RunCommandParameters {
  public RunCommandTargets $run_command_targets;
}

class RunCommandTarget {
  public RunCommandTargetKey $key;
  public RunCommandTargetValues $values;
}

class RunCommandTargetKey {
}

class RunCommandTargetValue {
}

class RunCommandTargetValues {
}

class RunCommandTargets {
}

class ScheduleExpression {
}

class SqsParameters {
  public MessageGroupId $message_group_id;
}

class StatementId {
}

class String {
}

class StringList {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Target {
  public TargetArn $arn;
  public BatchParameters $batch_parameters;
  public EcsParameters $ecs_parameters;
  public TargetId $id;
  public TargetInput $input;
  public TargetInputPath $input_path;
  public InputTransformer $input_transformer;
  public KinesisParameters $kinesis_parameters;
  public RoleArn $role_arn;
  public RunCommandParameters $run_command_parameters;
  public SqsParameters $sqs_parameters;
}

class TargetArn {
}

class TargetId {
}

class TargetIdList {
}

class TargetInput {
}

class TargetInputPath {
}

class TargetList {
}

class TargetPartitionKeyPath {
}

class TestEventPatternRequest {
  public string $event;
  public EventPattern $event_pattern;
}

class TestEventPatternResponse {
  public boolean $result;
}

class Timestamp {
}

class TransformerInput {
}

class TransformerPaths {
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

