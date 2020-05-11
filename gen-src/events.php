<?hh // strict
namespace slack\aws\events;

interface CloudWatch Events {
  public function ActivateEventSource(ActivateEventSourceRequest): Awaitable<Errors\Error>;
  public function CreateEventBus(CreateEventBusRequest): Awaitable<Errors\Result<CreateEventBusResponse>>;
  public function CreatePartnerEventSource(CreatePartnerEventSourceRequest): Awaitable<Errors\Result<CreatePartnerEventSourceResponse>>;
  public function DeactivateEventSource(DeactivateEventSourceRequest): Awaitable<Errors\Error>;
  public function DeleteEventBus(DeleteEventBusRequest): Awaitable<Errors\Error>;
  public function DeletePartnerEventSource(DeletePartnerEventSourceRequest): Awaitable<Errors\Error>;
  public function DeleteRule(DeleteRuleRequest): Awaitable<Errors\Error>;
  public function DescribeEventBus(DescribeEventBusRequest): Awaitable<Errors\Result<DescribeEventBusResponse>>;
  public function DescribeEventSource(DescribeEventSourceRequest): Awaitable<Errors\Result<DescribeEventSourceResponse>>;
  public function DescribePartnerEventSource(DescribePartnerEventSourceRequest): Awaitable<Errors\Result<DescribePartnerEventSourceResponse>>;
  public function DescribeRule(DescribeRuleRequest): Awaitable<Errors\Result<DescribeRuleResponse>>;
  public function DisableRule(DisableRuleRequest): Awaitable<Errors\Error>;
  public function EnableRule(EnableRuleRequest): Awaitable<Errors\Error>;
  public function ListEventBuses(ListEventBusesRequest): Awaitable<Errors\Result<ListEventBusesResponse>>;
  public function ListEventSources(ListEventSourcesRequest): Awaitable<Errors\Result<ListEventSourcesResponse>>;
  public function ListPartnerEventSourceAccounts(ListPartnerEventSourceAccountsRequest): Awaitable<Errors\Result<ListPartnerEventSourceAccountsResponse>>;
  public function ListPartnerEventSources(ListPartnerEventSourcesRequest): Awaitable<Errors\Result<ListPartnerEventSourcesResponse>>;
  public function ListRuleNamesByTarget(ListRuleNamesByTargetRequest): Awaitable<Errors\Result<ListRuleNamesByTargetResponse>>;
  public function ListRules(ListRulesRequest): Awaitable<Errors\Result<ListRulesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTargetsByRule(ListTargetsByRuleRequest): Awaitable<Errors\Result<ListTargetsByRuleResponse>>;
  public function PutEvents(PutEventsRequest): Awaitable<Errors\Result<PutEventsResponse>>;
  public function PutPartnerEvents(PutPartnerEventsRequest): Awaitable<Errors\Result<PutPartnerEventsResponse>>;
  public function PutPermission(PutPermissionRequest): Awaitable<Errors\Error>;
  public function PutRule(PutRuleRequest): Awaitable<Errors\Result<PutRuleResponse>>;
  public function PutTargets(PutTargetsRequest): Awaitable<Errors\Result<PutTargetsResponse>>;
  public function RemovePermission(RemovePermissionRequest): Awaitable<Errors\Error>;
  public function RemoveTargets(RemoveTargetsRequest): Awaitable<Errors\Result<RemoveTargetsResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function TestEventPattern(TestEventPatternRequest): Awaitable<Errors\Result<TestEventPatternResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
}

type AccountId = string;

type Action = string;

class ActivateEventSourceRequest {
  public EventSourceName $name;

  public function __construct(shape(
  ?'name' => EventSourceName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

type Arn = string;

type AssignPublicIp = string;

class AwsVpcConfiguration {
  public AssignPublicIp $assign_public_ip;
  public StringList $security_groups;
  public StringList $subnets;

  public function __construct(shape(
  ?'assign_public_ip' => AssignPublicIp,
  ?'security_groups' => StringList,
  ?'subnets' => StringList,
  ) $s = shape()) {
    $this->assign_public_ip = $assign_public_ip ?? "";
    $this->security_groups = $security_groups ?? [];
    $this->subnets = $subnets ?? [];
  }
}

class BatchArrayProperties {
  public int $size;

  public function __construct(shape(
  ?'size' => int,
  ) $s = shape()) {
    $this->size = $size ?? 0;
  }
}

class BatchParameters {
  public BatchArrayProperties $array_properties;
  public string $job_definition;
  public string $job_name;
  public BatchRetryStrategy $retry_strategy;

  public function __construct(shape(
  ?'array_properties' => BatchArrayProperties,
  ?'job_definition' => string,
  ?'job_name' => string,
  ?'retry_strategy' => BatchRetryStrategy,
  ) $s = shape()) {
    $this->array_properties = $array_properties ?? null;
    $this->job_definition = $job_definition ?? "";
    $this->job_name = $job_name ?? "";
    $this->retry_strategy = $retry_strategy ?? null;
  }
}

class BatchRetryStrategy {
  public int $attempts;

  public function __construct(shape(
  ?'attempts' => int,
  ) $s = shape()) {
    $this->attempts = $attempts ?? 0;
  }
}

type Boolean = bool;

class ConcurrentModificationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Condition {
  public string $key;
  public string $type;
  public string $value;

  public function __construct(shape(
  ?'key' => string,
  ?'type' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->type = $type ?? "";
    $this->value = $value ?? "";
  }
}

class CreateEventBusRequest {
  public EventSourceName $event_source_name;
  public EventBusName $name;
  public TagList $tags;

  public function __construct(shape(
  ?'event_source_name' => EventSourceName,
  ?'name' => EventBusName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->event_source_name = $event_source_name ?? "";
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateEventBusResponse {
  public string $event_bus_arn;

  public function __construct(shape(
  ?'event_bus_arn' => string,
  ) $s = shape()) {
    $this->event_bus_arn = $event_bus_arn ?? "";
  }
}

class CreatePartnerEventSourceRequest {
  public AccountId $account;
  public EventSourceName $name;

  public function __construct(shape(
  ?'account' => AccountId,
  ?'name' => EventSourceName,
  ) $s = shape()) {
    $this->account = $account ?? "";
    $this->name = $name ?? "";
  }
}

class CreatePartnerEventSourceResponse {
  public string $event_source_arn;

  public function __construct(shape(
  ?'event_source_arn' => string,
  ) $s = shape()) {
    $this->event_source_arn = $event_source_arn ?? "";
  }
}

class DeactivateEventSourceRequest {
  public EventSourceName $name;

  public function __construct(shape(
  ?'name' => EventSourceName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteEventBusRequest {
  public EventBusName $name;

  public function __construct(shape(
  ?'name' => EventBusName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeletePartnerEventSourceRequest {
  public AccountId $account;
  public EventSourceName $name;

  public function __construct(shape(
  ?'account' => AccountId,
  ?'name' => EventSourceName,
  ) $s = shape()) {
    $this->account = $account ?? "";
    $this->name = $name ?? "";
  }
}

class DeleteRuleRequest {
  public EventBusName $event_bus_name;
  public boolean $force;
  public RuleName $name;

  public function __construct(shape(
  ?'event_bus_name' => EventBusName,
  ?'force' => boolean,
  ?'name' => RuleName,
  ) $s = shape()) {
    $this->event_bus_name = $event_bus_name ?? "";
    $this->force = $force ?? false;
    $this->name = $name ?? "";
  }
}

class DescribeEventBusRequest {
  public EventBusName $name;

  public function __construct(shape(
  ?'name' => EventBusName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DescribeEventBusResponse {
  public string $arn;
  public string $name;
  public string $policy;

  public function __construct(shape(
  ?'arn' => string,
  ?'name' => string,
  ?'policy' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
    $this->policy = $policy ?? "";
  }
}

class DescribeEventSourceRequest {
  public EventSourceName $name;

  public function __construct(shape(
  ?'name' => EventSourceName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DescribeEventSourceResponse {
  public string $arn;
  public string $created_by;
  public Timestamp $creation_time;
  public Timestamp $expiration_time;
  public string $name;
  public EventSourceState $state;

  public function __construct(shape(
  ?'arn' => string,
  ?'created_by' => string,
  ?'creation_time' => Timestamp,
  ?'expiration_time' => Timestamp,
  ?'name' => string,
  ?'state' => EventSourceState,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_by = $created_by ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->expiration_time = $expiration_time ?? 0;
    $this->name = $name ?? "";
    $this->state = $state ?? "";
  }
}

class DescribePartnerEventSourceRequest {
  public EventSourceName $name;

  public function __construct(shape(
  ?'name' => EventSourceName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DescribePartnerEventSourceResponse {
  public string $arn;
  public string $name;

  public function __construct(shape(
  ?'arn' => string,
  ?'name' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
  }
}

class DescribeRuleRequest {
  public EventBusName $event_bus_name;
  public RuleName $name;

  public function __construct(shape(
  ?'event_bus_name' => EventBusName,
  ?'name' => RuleName,
  ) $s = shape()) {
    $this->event_bus_name = $event_bus_name ?? "";
    $this->name = $name ?? "";
  }
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

  public function __construct(shape(
  ?'arn' => RuleArn,
  ?'description' => RuleDescription,
  ?'event_bus_name' => EventBusName,
  ?'event_pattern' => EventPattern,
  ?'managed_by' => ManagedBy,
  ?'name' => RuleName,
  ?'role_arn' => RoleArn,
  ?'schedule_expression' => ScheduleExpression,
  ?'state' => RuleState,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->description = $description ?? "";
    $this->event_bus_name = $event_bus_name ?? "";
    $this->event_pattern = $event_pattern ?? "";
    $this->managed_by = $managed_by ?? "";
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->schedule_expression = $schedule_expression ?? "";
    $this->state = $state ?? "";
  }
}

class DisableRuleRequest {
  public EventBusName $event_bus_name;
  public RuleName $name;

  public function __construct(shape(
  ?'event_bus_name' => EventBusName,
  ?'name' => RuleName,
  ) $s = shape()) {
    $this->event_bus_name = $event_bus_name ?? "";
    $this->name = $name ?? "";
  }
}

class EcsParameters {
  public string $group;
  public LaunchType $launch_type;
  public NetworkConfiguration $network_configuration;
  public string $platform_version;
  public LimitMin1 $task_count;
  public Arn $task_definition_arn;

  public function __construct(shape(
  ?'group' => string,
  ?'launch_type' => LaunchType,
  ?'network_configuration' => NetworkConfiguration,
  ?'platform_version' => string,
  ?'task_count' => LimitMin1,
  ?'task_definition_arn' => Arn,
  ) $s = shape()) {
    $this->group = $group ?? "";
    $this->launch_type = $launch_type ?? "";
    $this->network_configuration = $network_configuration ?? null;
    $this->platform_version = $platform_version ?? "";
    $this->task_count = $task_count ?? 0;
    $this->task_definition_arn = $task_definition_arn ?? "";
  }
}

class EnableRuleRequest {
  public EventBusName $event_bus_name;
  public RuleName $name;

  public function __construct(shape(
  ?'event_bus_name' => EventBusName,
  ?'name' => RuleName,
  ) $s = shape()) {
    $this->event_bus_name = $event_bus_name ?? "";
    $this->name = $name ?? "";
  }
}

type ErrorCode = string;

type ErrorMessage = string;

class EventBus {
  public string $arn;
  public string $name;
  public string $policy;

  public function __construct(shape(
  ?'arn' => string,
  ?'name' => string,
  ?'policy' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
    $this->policy = $policy ?? "";
  }
}

type EventBusList = vec<EventBus>;

type EventBusName = string;

type EventId = string;

type EventPattern = string;

type EventResource = string;

type EventResourceList = vec<EventResource>;

class EventSource {
  public string $arn;
  public string $created_by;
  public Timestamp $creation_time;
  public Timestamp $expiration_time;
  public string $name;
  public EventSourceState $state;

  public function __construct(shape(
  ?'arn' => string,
  ?'created_by' => string,
  ?'creation_time' => Timestamp,
  ?'expiration_time' => Timestamp,
  ?'name' => string,
  ?'state' => EventSourceState,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_by = $created_by ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->expiration_time = $expiration_time ?? 0;
    $this->name = $name ?? "";
    $this->state = $state ?? "";
  }
}

type EventSourceList = vec<EventSource>;

type EventSourceName = string;

type EventSourceNamePrefix = string;

type EventSourceState = string;

type EventTime = int;

class InputTransformer {
  public TransformerPaths $input_paths_map;
  public TransformerInput $input_template;

  public function __construct(shape(
  ?'input_paths_map' => TransformerPaths,
  ?'input_template' => TransformerInput,
  ) $s = shape()) {
    $this->input_paths_map = $input_paths_map ?? [];
    $this->input_template = $input_template ?? "";
  }
}

type InputTransformerPathKey = string;

type Integer = int;

class InternalException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidEventPatternException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidStateException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class KinesisParameters {
  public TargetPartitionKeyPath $partition_key_path;

  public function __construct(shape(
  ?'partition_key_path' => TargetPartitionKeyPath,
  ) $s = shape()) {
    $this->partition_key_path = $partition_key_path ?? "";
  }
}

type LaunchType = string;

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type LimitMax100 = int;

type LimitMin1 = int;

class ListEventBusesRequest {
  public LimitMax100 $limit;
  public EventBusName $name_prefix;
  public NextToken $next_token;

  public function __construct(shape(
  ?'limit' => LimitMax100,
  ?'name_prefix' => EventBusName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->name_prefix = $name_prefix ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListEventBusesResponse {
  public EventBusList $event_buses;
  public NextToken $next_token;

  public function __construct(shape(
  ?'event_buses' => EventBusList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->event_buses = $event_buses ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListEventSourcesRequest {
  public LimitMax100 $limit;
  public EventSourceNamePrefix $name_prefix;
  public NextToken $next_token;

  public function __construct(shape(
  ?'limit' => LimitMax100,
  ?'name_prefix' => EventSourceNamePrefix,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->name_prefix = $name_prefix ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListEventSourcesResponse {
  public EventSourceList $event_sources;
  public NextToken $next_token;

  public function __construct(shape(
  ?'event_sources' => EventSourceList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->event_sources = $event_sources ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListPartnerEventSourceAccountsRequest {
  public EventSourceName $event_source_name;
  public LimitMax100 $limit;
  public NextToken $next_token;

  public function __construct(shape(
  ?'event_source_name' => EventSourceName,
  ?'limit' => LimitMax100,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->event_source_name = $event_source_name ?? "";
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListPartnerEventSourceAccountsResponse {
  public NextToken $next_token;
  public PartnerEventSourceAccountList $partner_event_source_accounts;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'partner_event_source_accounts' => PartnerEventSourceAccountList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->partner_event_source_accounts = $partner_event_source_accounts ?? [];
  }
}

class ListPartnerEventSourcesRequest {
  public LimitMax100 $limit;
  public PartnerEventSourceNamePrefix $name_prefix;
  public NextToken $next_token;

  public function __construct(shape(
  ?'limit' => LimitMax100,
  ?'name_prefix' => PartnerEventSourceNamePrefix,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->name_prefix = $name_prefix ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListPartnerEventSourcesResponse {
  public NextToken $next_token;
  public PartnerEventSourceList $partner_event_sources;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'partner_event_sources' => PartnerEventSourceList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->partner_event_sources = $partner_event_sources ?? [];
  }
}

class ListRuleNamesByTargetRequest {
  public EventBusName $event_bus_name;
  public LimitMax100 $limit;
  public NextToken $next_token;
  public TargetArn $target_arn;

  public function __construct(shape(
  ?'event_bus_name' => EventBusName,
  ?'limit' => LimitMax100,
  ?'next_token' => NextToken,
  ?'target_arn' => TargetArn,
  ) $s = shape()) {
    $this->event_bus_name = $event_bus_name ?? "";
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->target_arn = $target_arn ?? "";
  }
}

class ListRuleNamesByTargetResponse {
  public NextToken $next_token;
  public RuleNameList $rule_names;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'rule_names' => RuleNameList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->rule_names = $rule_names ?? [];
  }
}

class ListRulesRequest {
  public EventBusName $event_bus_name;
  public LimitMax100 $limit;
  public RuleName $name_prefix;
  public NextToken $next_token;

  public function __construct(shape(
  ?'event_bus_name' => EventBusName,
  ?'limit' => LimitMax100,
  ?'name_prefix' => RuleName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->event_bus_name = $event_bus_name ?? "";
    $this->limit = $limit ?? 0;
    $this->name_prefix = $name_prefix ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListRulesResponse {
  public NextToken $next_token;
  public RuleResponseList $rules;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'rules' => RuleResponseList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->rules = $rules ?? [];
  }
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class ListTargetsByRuleRequest {
  public EventBusName $event_bus_name;
  public LimitMax100 $limit;
  public NextToken $next_token;
  public RuleName $rule;

  public function __construct(shape(
  ?'event_bus_name' => EventBusName,
  ?'limit' => LimitMax100,
  ?'next_token' => NextToken,
  ?'rule' => RuleName,
  ) $s = shape()) {
    $this->event_bus_name = $event_bus_name ?? "";
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->rule = $rule ?? "";
  }
}

class ListTargetsByRuleResponse {
  public NextToken $next_token;
  public TargetList $targets;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'targets' => TargetList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->targets = $targets ?? [];
  }
}

type ManagedBy = string;

class ManagedRuleException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type MessageGroupId = string;

class NetworkConfiguration {
  public AwsVpcConfiguration $awsvpc_configuration;

  public function __construct(shape(
  ?'awsvpc_configuration' => AwsVpcConfiguration,
  ) $s = shape()) {
    $this->awsvpc_configuration = $awsvpc_configuration ?? null;
  }
}

type NextToken = string;

type NonPartnerEventBusName = string;

class PartnerEventSource {
  public string $arn;
  public string $name;

  public function __construct(shape(
  ?'arn' => string,
  ?'name' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
  }
}

class PartnerEventSourceAccount {
  public AccountId $account;
  public Timestamp $creation_time;
  public Timestamp $expiration_time;
  public EventSourceState $state;

  public function __construct(shape(
  ?'account' => AccountId,
  ?'creation_time' => Timestamp,
  ?'expiration_time' => Timestamp,
  ?'state' => EventSourceState,
  ) $s = shape()) {
    $this->account = $account ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->expiration_time = $expiration_time ?? 0;
    $this->state = $state ?? "";
  }
}

type PartnerEventSourceAccountList = vec<PartnerEventSourceAccount>;

type PartnerEventSourceList = vec<PartnerEventSource>;

type PartnerEventSourceNamePrefix = string;

class PolicyLengthExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Principal = string;

class PutEventsRequest {
  public PutEventsRequestEntryList $entries;

  public function __construct(shape(
  ?'entries' => PutEventsRequestEntryList,
  ) $s = shape()) {
    $this->entries = $entries ?? [];
  }
}

class PutEventsRequestEntry {
  public string $detail;
  public string $detail_type;
  public NonPartnerEventBusName $event_bus_name;
  public EventResourceList $resources;
  public string $source;
  public EventTime $time;

  public function __construct(shape(
  ?'detail' => string,
  ?'detail_type' => string,
  ?'event_bus_name' => NonPartnerEventBusName,
  ?'resources' => EventResourceList,
  ?'source' => string,
  ?'time' => EventTime,
  ) $s = shape()) {
    $this->detail = $detail ?? "";
    $this->detail_type = $detail_type ?? "";
    $this->event_bus_name = $event_bus_name ?? "";
    $this->resources = $resources ?? [];
    $this->source = $source ?? "";
    $this->time = $time ?? 0;
  }
}

type PutEventsRequestEntryList = vec<PutEventsRequestEntry>;

class PutEventsResponse {
  public PutEventsResultEntryList $entries;
  public int $failed_entry_count;

  public function __construct(shape(
  ?'entries' => PutEventsResultEntryList,
  ?'failed_entry_count' => int,
  ) $s = shape()) {
    $this->entries = $entries ?? [];
    $this->failed_entry_count = $failed_entry_count ?? 0;
  }
}

class PutEventsResultEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public EventId $event_id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => ErrorMessage,
  ?'event_id' => EventId,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->event_id = $event_id ?? "";
  }
}

type PutEventsResultEntryList = vec<PutEventsResultEntry>;

class PutPartnerEventsRequest {
  public PutPartnerEventsRequestEntryList $entries;

  public function __construct(shape(
  ?'entries' => PutPartnerEventsRequestEntryList,
  ) $s = shape()) {
    $this->entries = $entries ?? [];
  }
}

class PutPartnerEventsRequestEntry {
  public string $detail;
  public string $detail_type;
  public EventResourceList $resources;
  public EventSourceName $source;
  public EventTime $time;

  public function __construct(shape(
  ?'detail' => string,
  ?'detail_type' => string,
  ?'resources' => EventResourceList,
  ?'source' => EventSourceName,
  ?'time' => EventTime,
  ) $s = shape()) {
    $this->detail = $detail ?? "";
    $this->detail_type = $detail_type ?? "";
    $this->resources = $resources ?? [];
    $this->source = $source ?? "";
    $this->time = $time ?? 0;
  }
}

type PutPartnerEventsRequestEntryList = vec<PutPartnerEventsRequestEntry>;

class PutPartnerEventsResponse {
  public PutPartnerEventsResultEntryList $entries;
  public int $failed_entry_count;

  public function __construct(shape(
  ?'entries' => PutPartnerEventsResultEntryList,
  ?'failed_entry_count' => int,
  ) $s = shape()) {
    $this->entries = $entries ?? [];
    $this->failed_entry_count = $failed_entry_count ?? 0;
  }
}

class PutPartnerEventsResultEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public EventId $event_id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => ErrorMessage,
  ?'event_id' => EventId,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->event_id = $event_id ?? "";
  }
}

type PutPartnerEventsResultEntryList = vec<PutPartnerEventsResultEntry>;

class PutPermissionRequest {
  public Action $action;
  public Condition $condition;
  public NonPartnerEventBusName $event_bus_name;
  public Principal $principal;
  public StatementId $statement_id;

  public function __construct(shape(
  ?'action' => Action,
  ?'condition' => Condition,
  ?'event_bus_name' => NonPartnerEventBusName,
  ?'principal' => Principal,
  ?'statement_id' => StatementId,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->condition = $condition ?? null;
    $this->event_bus_name = $event_bus_name ?? "";
    $this->principal = $principal ?? "";
    $this->statement_id = $statement_id ?? "";
  }
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

  public function __construct(shape(
  ?'description' => RuleDescription,
  ?'event_bus_name' => EventBusName,
  ?'event_pattern' => EventPattern,
  ?'name' => RuleName,
  ?'role_arn' => RoleArn,
  ?'schedule_expression' => ScheduleExpression,
  ?'state' => RuleState,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->event_bus_name = $event_bus_name ?? "";
    $this->event_pattern = $event_pattern ?? "";
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->schedule_expression = $schedule_expression ?? "";
    $this->state = $state ?? "";
    $this->tags = $tags ?? [];
  }
}

class PutRuleResponse {
  public RuleArn $rule_arn;

  public function __construct(shape(
  ?'rule_arn' => RuleArn,
  ) $s = shape()) {
    $this->rule_arn = $rule_arn ?? "";
  }
}

class PutTargetsRequest {
  public EventBusName $event_bus_name;
  public RuleName $rule;
  public TargetList $targets;

  public function __construct(shape(
  ?'event_bus_name' => EventBusName,
  ?'rule' => RuleName,
  ?'targets' => TargetList,
  ) $s = shape()) {
    $this->event_bus_name = $event_bus_name ?? "";
    $this->rule = $rule ?? "";
    $this->targets = $targets ?? [];
  }
}

class PutTargetsResponse {
  public PutTargetsResultEntryList $failed_entries;
  public int $failed_entry_count;

  public function __construct(shape(
  ?'failed_entries' => PutTargetsResultEntryList,
  ?'failed_entry_count' => int,
  ) $s = shape()) {
    $this->failed_entries = $failed_entries ?? [];
    $this->failed_entry_count = $failed_entry_count ?? 0;
  }
}

class PutTargetsResultEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public TargetId $target_id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => ErrorMessage,
  ?'target_id' => TargetId,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->target_id = $target_id ?? "";
  }
}

type PutTargetsResultEntryList = vec<PutTargetsResultEntry>;

class RemovePermissionRequest {
  public NonPartnerEventBusName $event_bus_name;
  public StatementId $statement_id;

  public function __construct(shape(
  ?'event_bus_name' => NonPartnerEventBusName,
  ?'statement_id' => StatementId,
  ) $s = shape()) {
    $this->event_bus_name = $event_bus_name ?? "";
    $this->statement_id = $statement_id ?? "";
  }
}

class RemoveTargetsRequest {
  public EventBusName $event_bus_name;
  public boolean $force;
  public TargetIdList $ids;
  public RuleName $rule;

  public function __construct(shape(
  ?'event_bus_name' => EventBusName,
  ?'force' => boolean,
  ?'ids' => TargetIdList,
  ?'rule' => RuleName,
  ) $s = shape()) {
    $this->event_bus_name = $event_bus_name ?? "";
    $this->force = $force ?? false;
    $this->ids = $ids ?? [];
    $this->rule = $rule ?? "";
  }
}

class RemoveTargetsResponse {
  public RemoveTargetsResultEntryList $failed_entries;
  public int $failed_entry_count;

  public function __construct(shape(
  ?'failed_entries' => RemoveTargetsResultEntryList,
  ?'failed_entry_count' => int,
  ) $s = shape()) {
    $this->failed_entries = $failed_entries ?? [];
    $this->failed_entry_count = $failed_entry_count ?? 0;
  }
}

class RemoveTargetsResultEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public TargetId $target_id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => ErrorMessage,
  ?'target_id' => TargetId,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->target_id = $target_id ?? "";
  }
}

type RemoveTargetsResultEntryList = vec<RemoveTargetsResultEntry>;

class ResourceAlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RoleArn = string;

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

  public function __construct(shape(
  ?'arn' => RuleArn,
  ?'description' => RuleDescription,
  ?'event_bus_name' => EventBusName,
  ?'event_pattern' => EventPattern,
  ?'managed_by' => ManagedBy,
  ?'name' => RuleName,
  ?'role_arn' => RoleArn,
  ?'schedule_expression' => ScheduleExpression,
  ?'state' => RuleState,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->description = $description ?? "";
    $this->event_bus_name = $event_bus_name ?? "";
    $this->event_pattern = $event_pattern ?? "";
    $this->managed_by = $managed_by ?? "";
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->schedule_expression = $schedule_expression ?? "";
    $this->state = $state ?? "";
  }
}

type RuleArn = string;

type RuleDescription = string;

type RuleName = string;

type RuleNameList = vec<RuleName>;

type RuleResponseList = vec<Rule>;

type RuleState = string;

class RunCommandParameters {
  public RunCommandTargets $run_command_targets;

  public function __construct(shape(
  ?'run_command_targets' => RunCommandTargets,
  ) $s = shape()) {
    $this->run_command_targets = $run_command_targets ?? [];
  }
}

class RunCommandTarget {
  public RunCommandTargetKey $key;
  public RunCommandTargetValues $values;

  public function __construct(shape(
  ?'key' => RunCommandTargetKey,
  ?'values' => RunCommandTargetValues,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->values = $values ?? [];
  }
}

type RunCommandTargetKey = string;

type RunCommandTargetValue = string;

type RunCommandTargetValues = vec<RunCommandTargetValue>;

type RunCommandTargets = vec<RunCommandTarget>;

type ScheduleExpression = string;

class SqsParameters {
  public MessageGroupId $message_group_id;

  public function __construct(shape(
  ?'message_group_id' => MessageGroupId,
  ) $s = shape()) {
    $this->message_group_id = $message_group_id ?? "";
  }
}

type StatementId = string;

type String = string;

type StringList = vec<String>;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

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

  public function __construct(shape(
  ?'arn' => TargetArn,
  ?'batch_parameters' => BatchParameters,
  ?'ecs_parameters' => EcsParameters,
  ?'id' => TargetId,
  ?'input' => TargetInput,
  ?'input_path' => TargetInputPath,
  ?'input_transformer' => InputTransformer,
  ?'kinesis_parameters' => KinesisParameters,
  ?'role_arn' => RoleArn,
  ?'run_command_parameters' => RunCommandParameters,
  ?'sqs_parameters' => SqsParameters,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->batch_parameters = $batch_parameters ?? null;
    $this->ecs_parameters = $ecs_parameters ?? null;
    $this->id = $id ?? "";
    $this->input = $input ?? "";
    $this->input_path = $input_path ?? "";
    $this->input_transformer = $input_transformer ?? null;
    $this->kinesis_parameters = $kinesis_parameters ?? null;
    $this->role_arn = $role_arn ?? "";
    $this->run_command_parameters = $run_command_parameters ?? null;
    $this->sqs_parameters = $sqs_parameters ?? null;
  }
}

type TargetArn = string;

type TargetId = string;

type TargetIdList = vec<TargetId>;

type TargetInput = string;

type TargetInputPath = string;

type TargetList = vec<Target>;

type TargetPartitionKeyPath = string;

class TestEventPatternRequest {
  public string $event;
  public EventPattern $event_pattern;

  public function __construct(shape(
  ?'event' => string,
  ?'event_pattern' => EventPattern,
  ) $s = shape()) {
    $this->event = $event ?? "";
    $this->event_pattern = $event_pattern ?? "";
  }
}

class TestEventPatternResponse {
  public boolean $result;

  public function __construct(shape(
  ?'result' => boolean,
  ) $s = shape()) {
    $this->result = $result ?? false;
  }
}

type Timestamp = int;

type TransformerInput = string;

type TransformerPaths = dict<InputTransformerPathKey, TargetInputPath>;

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

