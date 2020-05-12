<?hh // strict
namespace slack\aws\events;

interface CloudWatchEvents {
  public function ActivateEventSource(ActivateEventSourceRequest $in): Awaitable<\Errors\Error>;
  public function CreateEventBus(CreateEventBusRequest $in): Awaitable<\Errors\Result<CreateEventBusResponse>>;
  public function CreatePartnerEventSource(CreatePartnerEventSourceRequest $in): Awaitable<\Errors\Result<CreatePartnerEventSourceResponse>>;
  public function DeactivateEventSource(DeactivateEventSourceRequest $in): Awaitable<\Errors\Error>;
  public function DeleteEventBus(DeleteEventBusRequest $in): Awaitable<\Errors\Error>;
  public function DeletePartnerEventSource(DeletePartnerEventSourceRequest $in): Awaitable<\Errors\Error>;
  public function DeleteRule(DeleteRuleRequest $in): Awaitable<\Errors\Error>;
  public function DescribeEventBus(DescribeEventBusRequest $in): Awaitable<\Errors\Result<DescribeEventBusResponse>>;
  public function DescribeEventSource(DescribeEventSourceRequest $in): Awaitable<\Errors\Result<DescribeEventSourceResponse>>;
  public function DescribePartnerEventSource(DescribePartnerEventSourceRequest $in): Awaitable<\Errors\Result<DescribePartnerEventSourceResponse>>;
  public function DescribeRule(DescribeRuleRequest $in): Awaitable<\Errors\Result<DescribeRuleResponse>>;
  public function DisableRule(DisableRuleRequest $in): Awaitable<\Errors\Error>;
  public function EnableRule(EnableRuleRequest $in): Awaitable<\Errors\Error>;
  public function ListEventBuses(ListEventBusesRequest $in): Awaitable<\Errors\Result<ListEventBusesResponse>>;
  public function ListEventSources(ListEventSourcesRequest $in): Awaitable<\Errors\Result<ListEventSourcesResponse>>;
  public function ListPartnerEventSourceAccounts(ListPartnerEventSourceAccountsRequest $in): Awaitable<\Errors\Result<ListPartnerEventSourceAccountsResponse>>;
  public function ListPartnerEventSources(ListPartnerEventSourcesRequest $in): Awaitable<\Errors\Result<ListPartnerEventSourcesResponse>>;
  public function ListRuleNamesByTarget(ListRuleNamesByTargetRequest $in): Awaitable<\Errors\Result<ListRuleNamesByTargetResponse>>;
  public function ListRules(ListRulesRequest $in): Awaitable<\Errors\Result<ListRulesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListTargetsByRule(ListTargetsByRuleRequest $in): Awaitable<\Errors\Result<ListTargetsByRuleResponse>>;
  public function PutEvents(PutEventsRequest $in): Awaitable<\Errors\Result<PutEventsResponse>>;
  public function PutPartnerEvents(PutPartnerEventsRequest $in): Awaitable<\Errors\Result<PutPartnerEventsResponse>>;
  public function PutPermission(PutPermissionRequest $in): Awaitable<\Errors\Error>;
  public function PutRule(PutRuleRequest $in): Awaitable<\Errors\Result<PutRuleResponse>>;
  public function PutTargets(PutTargetsRequest $in): Awaitable<\Errors\Result<PutTargetsResponse>>;
  public function RemovePermission(RemovePermissionRequest $in): Awaitable<\Errors\Error>;
  public function RemoveTargets(RemoveTargetsRequest $in): Awaitable<\Errors\Result<RemoveTargetsResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function TestEventPattern(TestEventPatternRequest $in): Awaitable<\Errors\Result<TestEventPatternResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
}

type AccountId = string;

type Action = string;

class ActivateEventSourceRequest {
  public ?EventSourceName $name;

  public function __construct(shape(
    ?'name' => ?EventSourceName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

type Arn = string;

type AssignPublicIp = string;

class AwsVpcConfiguration {
  public ?AssignPublicIp $assign_public_ip;
  public ?StringList $security_groups;
  public ?StringList $subnets;

  public function __construct(shape(
    ?'assign_public_ip' => ?AssignPublicIp,
    ?'security_groups' => ?StringList,
    ?'subnets' => ?StringList,
  ) $s = shape()) {
    $this->assign_public_ip = $s['assign_public_ip'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->subnets = $s['subnets'] ?? vec[];
  }
}

class BatchArrayProperties {
  public int $size;

  public function __construct(shape(
    ?'size' => int,
  ) $s = shape()) {
    $this->size = $s['size'] ?? 0;
  }
}

class BatchParameters {
  public ?BatchArrayProperties $array_properties;
  public string $job_definition;
  public string $job_name;
  public ?BatchRetryStrategy $retry_strategy;

  public function __construct(shape(
    ?'array_properties' => ?BatchArrayProperties,
    ?'job_definition' => string,
    ?'job_name' => string,
    ?'retry_strategy' => ?BatchRetryStrategy,
  ) $s = shape()) {
    $this->array_properties = $s['array_properties'] ?? null;
    $this->job_definition = $s['job_definition'] ?? '';
    $this->job_name = $s['job_name'] ?? '';
    $this->retry_strategy = $s['retry_strategy'] ?? null;
  }
}

class BatchRetryStrategy {
  public int $attempts;

  public function __construct(shape(
    ?'attempts' => int,
  ) $s = shape()) {
    $this->attempts = $s['attempts'] ?? 0;
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
    $this->key = $s['key'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class CreateEventBusRequest {
  public ?EventSourceName $event_source_name;
  public ?EventBusName $name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'event_source_name' => ?EventSourceName,
    ?'name' => ?EventBusName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->event_source_name = $s['event_source_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateEventBusResponse {
  public string $event_bus_arn;

  public function __construct(shape(
    ?'event_bus_arn' => string,
  ) $s = shape()) {
    $this->event_bus_arn = $s['event_bus_arn'] ?? '';
  }
}

class CreatePartnerEventSourceRequest {
  public ?AccountId $account;
  public ?EventSourceName $name;

  public function __construct(shape(
    ?'account' => ?AccountId,
    ?'name' => ?EventSourceName,
  ) $s = shape()) {
    $this->account = $s['account'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreatePartnerEventSourceResponse {
  public string $event_source_arn;

  public function __construct(shape(
    ?'event_source_arn' => string,
  ) $s = shape()) {
    $this->event_source_arn = $s['event_source_arn'] ?? '';
  }
}

class DeactivateEventSourceRequest {
  public ?EventSourceName $name;

  public function __construct(shape(
    ?'name' => ?EventSourceName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DeleteEventBusRequest {
  public ?EventBusName $name;

  public function __construct(shape(
    ?'name' => ?EventBusName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DeletePartnerEventSourceRequest {
  public ?AccountId $account;
  public ?EventSourceName $name;

  public function __construct(shape(
    ?'account' => ?AccountId,
    ?'name' => ?EventSourceName,
  ) $s = shape()) {
    $this->account = $s['account'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class DeleteRuleRequest {
  public ?EventBusName $event_bus_name;
  public bool $force;
  public ?RuleName $name;

  public function __construct(shape(
    ?'event_bus_name' => ?EventBusName,
    ?'force' => bool,
    ?'name' => ?RuleName,
  ) $s = shape()) {
    $this->event_bus_name = $s['event_bus_name'] ?? '';
    $this->force = $s['force'] ?? false;
    $this->name = $s['name'] ?? '';
  }
}

class DescribeEventBusRequest {
  public ?EventBusName $name;

  public function __construct(shape(
    ?'name' => ?EventBusName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
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
    $this->arn = $s['arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->policy = $s['policy'] ?? '';
  }
}

class DescribeEventSourceRequest {
  public ?EventSourceName $name;

  public function __construct(shape(
    ?'name' => ?EventSourceName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DescribeEventSourceResponse {
  public string $arn;
  public string $created_by;
  public ?Timestamp $creation_time;
  public ?Timestamp $expiration_time;
  public string $name;
  public ?EventSourceState $state;

  public function __construct(shape(
    ?'arn' => string,
    ?'created_by' => string,
    ?'creation_time' => ?Timestamp,
    ?'expiration_time' => ?Timestamp,
    ?'name' => string,
    ?'state' => ?EventSourceState,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_by = $s['created_by'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->expiration_time = $s['expiration_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class DescribePartnerEventSourceRequest {
  public ?EventSourceName $name;

  public function __construct(shape(
    ?'name' => ?EventSourceName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DescribePartnerEventSourceResponse {
  public string $arn;
  public string $name;

  public function __construct(shape(
    ?'arn' => string,
    ?'name' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class DescribeRuleRequest {
  public ?EventBusName $event_bus_name;
  public ?RuleName $name;

  public function __construct(shape(
    ?'event_bus_name' => ?EventBusName,
    ?'name' => ?RuleName,
  ) $s = shape()) {
    $this->event_bus_name = $s['event_bus_name'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class DescribeRuleResponse {
  public ?RuleArn $arn;
  public ?RuleDescription $description;
  public ?EventBusName $event_bus_name;
  public ?EventPattern $event_pattern;
  public ?ManagedBy $managed_by;
  public ?RuleName $name;
  public ?RoleArn $role_arn;
  public ?ScheduleExpression $schedule_expression;
  public ?RuleState $state;

  public function __construct(shape(
    ?'arn' => ?RuleArn,
    ?'description' => ?RuleDescription,
    ?'event_bus_name' => ?EventBusName,
    ?'event_pattern' => ?EventPattern,
    ?'managed_by' => ?ManagedBy,
    ?'name' => ?RuleName,
    ?'role_arn' => ?RoleArn,
    ?'schedule_expression' => ?ScheduleExpression,
    ?'state' => ?RuleState,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->event_bus_name = $s['event_bus_name'] ?? '';
    $this->event_pattern = $s['event_pattern'] ?? '';
    $this->managed_by = $s['managed_by'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->schedule_expression = $s['schedule_expression'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class DisableRuleRequest {
  public ?EventBusName $event_bus_name;
  public ?RuleName $name;

  public function __construct(shape(
    ?'event_bus_name' => ?EventBusName,
    ?'name' => ?RuleName,
  ) $s = shape()) {
    $this->event_bus_name = $s['event_bus_name'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class EcsParameters {
  public string $group;
  public ?LaunchType $launch_type;
  public ?NetworkConfiguration $network_configuration;
  public string $platform_version;
  public ?LimitMin1 $task_count;
  public ?Arn $task_definition_arn;

  public function __construct(shape(
    ?'group' => string,
    ?'launch_type' => ?LaunchType,
    ?'network_configuration' => ?NetworkConfiguration,
    ?'platform_version' => string,
    ?'task_count' => ?LimitMin1,
    ?'task_definition_arn' => ?Arn,
  ) $s = shape()) {
    $this->group = $s['group'] ?? '';
    $this->launch_type = $s['launch_type'] ?? '';
    $this->network_configuration = $s['network_configuration'] ?? null;
    $this->platform_version = $s['platform_version'] ?? '';
    $this->task_count = $s['task_count'] ?? 0;
    $this->task_definition_arn = $s['task_definition_arn'] ?? '';
  }
}

class EnableRuleRequest {
  public ?EventBusName $event_bus_name;
  public ?RuleName $name;

  public function __construct(shape(
    ?'event_bus_name' => ?EventBusName,
    ?'name' => ?RuleName,
  ) $s = shape()) {
    $this->event_bus_name = $s['event_bus_name'] ?? '';
    $this->name = $s['name'] ?? '';
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
    $this->arn = $s['arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->policy = $s['policy'] ?? '';
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
  public ?Timestamp $creation_time;
  public ?Timestamp $expiration_time;
  public string $name;
  public ?EventSourceState $state;

  public function __construct(shape(
    ?'arn' => string,
    ?'created_by' => string,
    ?'creation_time' => ?Timestamp,
    ?'expiration_time' => ?Timestamp,
    ?'name' => string,
    ?'state' => ?EventSourceState,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_by = $s['created_by'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->expiration_time = $s['expiration_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

type EventSourceList = vec<EventSource>;

type EventSourceName = string;

type EventSourceNamePrefix = string;

type EventSourceState = string;

type EventTime = int;

class InputTransformer {
  public ?TransformerPaths $input_paths_map;
  public ?TransformerInput $input_template;

  public function __construct(shape(
    ?'input_paths_map' => ?TransformerPaths,
    ?'input_template' => ?TransformerInput,
  ) $s = shape()) {
    $this->input_paths_map = $s['input_paths_map'] ?? dict[];
    $this->input_template = $s['input_template'] ?? '';
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
  public ?TargetPartitionKeyPath $partition_key_path;

  public function __construct(shape(
    ?'partition_key_path' => ?TargetPartitionKeyPath,
  ) $s = shape()) {
    $this->partition_key_path = $s['partition_key_path'] ?? '';
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
  public ?LimitMax100 $limit;
  public ?EventBusName $name_prefix;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'limit' => ?LimitMax100,
    ?'name_prefix' => ?EventBusName,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->name_prefix = $s['name_prefix'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListEventBusesResponse {
  public ?EventBusList $event_buses;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'event_buses' => ?EventBusList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->event_buses = $s['event_buses'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListEventSourcesRequest {
  public ?LimitMax100 $limit;
  public ?EventSourceNamePrefix $name_prefix;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'limit' => ?LimitMax100,
    ?'name_prefix' => ?EventSourceNamePrefix,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->name_prefix = $s['name_prefix'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListEventSourcesResponse {
  public ?EventSourceList $event_sources;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'event_sources' => ?EventSourceList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->event_sources = $s['event_sources'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPartnerEventSourceAccountsRequest {
  public ?EventSourceName $event_source_name;
  public ?LimitMax100 $limit;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'event_source_name' => ?EventSourceName,
    ?'limit' => ?LimitMax100,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->event_source_name = $s['event_source_name'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPartnerEventSourceAccountsResponse {
  public ?NextToken $next_token;
  public ?PartnerEventSourceAccountList $partner_event_source_accounts;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'partner_event_source_accounts' => ?PartnerEventSourceAccountList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->partner_event_source_accounts = $s['partner_event_source_accounts'] ?? vec[];
  }
}

class ListPartnerEventSourcesRequest {
  public ?LimitMax100 $limit;
  public ?PartnerEventSourceNamePrefix $name_prefix;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'limit' => ?LimitMax100,
    ?'name_prefix' => ?PartnerEventSourceNamePrefix,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->name_prefix = $s['name_prefix'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPartnerEventSourcesResponse {
  public ?NextToken $next_token;
  public ?PartnerEventSourceList $partner_event_sources;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'partner_event_sources' => ?PartnerEventSourceList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->partner_event_sources = $s['partner_event_sources'] ?? vec[];
  }
}

class ListRuleNamesByTargetRequest {
  public ?EventBusName $event_bus_name;
  public ?LimitMax100 $limit;
  public ?NextToken $next_token;
  public ?TargetArn $target_arn;

  public function __construct(shape(
    ?'event_bus_name' => ?EventBusName,
    ?'limit' => ?LimitMax100,
    ?'next_token' => ?NextToken,
    ?'target_arn' => ?TargetArn,
  ) $s = shape()) {
    $this->event_bus_name = $s['event_bus_name'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->target_arn = $s['target_arn'] ?? '';
  }
}

class ListRuleNamesByTargetResponse {
  public ?NextToken $next_token;
  public ?RuleNameList $rule_names;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'rule_names' => ?RuleNameList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->rule_names = $s['rule_names'] ?? vec[];
  }
}

class ListRulesRequest {
  public ?EventBusName $event_bus_name;
  public ?LimitMax100 $limit;
  public ?RuleName $name_prefix;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'event_bus_name' => ?EventBusName,
    ?'limit' => ?LimitMax100,
    ?'name_prefix' => ?RuleName,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->event_bus_name = $s['event_bus_name'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->name_prefix = $s['name_prefix'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListRulesResponse {
  public ?NextToken $next_token;
  public ?RuleResponseList $rules;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'rules' => ?RuleResponseList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?Arn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
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

class ListTargetsByRuleRequest {
  public ?EventBusName $event_bus_name;
  public ?LimitMax100 $limit;
  public ?NextToken $next_token;
  public ?RuleName $rule;

  public function __construct(shape(
    ?'event_bus_name' => ?EventBusName,
    ?'limit' => ?LimitMax100,
    ?'next_token' => ?NextToken,
    ?'rule' => ?RuleName,
  ) $s = shape()) {
    $this->event_bus_name = $s['event_bus_name'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->rule = $s['rule'] ?? '';
  }
}

class ListTargetsByRuleResponse {
  public ?NextToken $next_token;
  public ?TargetList $targets;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'targets' => ?TargetList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->targets = $s['targets'] ?? vec[];
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
  public ?AwsVpcConfiguration $awsvpc_configuration;

  public function __construct(shape(
    ?'awsvpc_configuration' => ?AwsVpcConfiguration,
  ) $s = shape()) {
    $this->awsvpc_configuration = $s['awsvpc_configuration'] ?? null;
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
    $this->arn = $s['arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class PartnerEventSourceAccount {
  public ?AccountId $account;
  public ?Timestamp $creation_time;
  public ?Timestamp $expiration_time;
  public ?EventSourceState $state;

  public function __construct(shape(
    ?'account' => ?AccountId,
    ?'creation_time' => ?Timestamp,
    ?'expiration_time' => ?Timestamp,
    ?'state' => ?EventSourceState,
  ) $s = shape()) {
    $this->account = $s['account'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->expiration_time = $s['expiration_time'] ?? 0;
    $this->state = $s['state'] ?? '';
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
  public ?PutEventsRequestEntryList $entries;

  public function __construct(shape(
    ?'entries' => ?PutEventsRequestEntryList,
  ) $s = shape()) {
    $this->entries = $s['entries'] ?? vec[];
  }
}

class PutEventsRequestEntry {
  public string $detail;
  public string $detail_type;
  public ?NonPartnerEventBusName $event_bus_name;
  public ?EventResourceList $resources;
  public string $source;
  public ?EventTime $time;

  public function __construct(shape(
    ?'detail' => string,
    ?'detail_type' => string,
    ?'event_bus_name' => ?NonPartnerEventBusName,
    ?'resources' => ?EventResourceList,
    ?'source' => string,
    ?'time' => ?EventTime,
  ) $s = shape()) {
    $this->detail = $s['detail'] ?? '';
    $this->detail_type = $s['detail_type'] ?? '';
    $this->event_bus_name = $s['event_bus_name'] ?? '';
    $this->resources = $s['resources'] ?? vec[];
    $this->source = $s['source'] ?? '';
    $this->time = $s['time'] ?? 0;
  }
}

type PutEventsRequestEntryList = vec<PutEventsRequestEntry>;

class PutEventsResponse {
  public ?PutEventsResultEntryList $entries;
  public int $failed_entry_count;

  public function __construct(shape(
    ?'entries' => ?PutEventsResultEntryList,
    ?'failed_entry_count' => int,
  ) $s = shape()) {
    $this->entries = $s['entries'] ?? vec[];
    $this->failed_entry_count = $s['failed_entry_count'] ?? 0;
  }
}

class PutEventsResultEntry {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;
  public ?EventId $event_id;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
    ?'event_id' => ?EventId,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->event_id = $s['event_id'] ?? '';
  }
}

type PutEventsResultEntryList = vec<PutEventsResultEntry>;

class PutPartnerEventsRequest {
  public ?PutPartnerEventsRequestEntryList $entries;

  public function __construct(shape(
    ?'entries' => ?PutPartnerEventsRequestEntryList,
  ) $s = shape()) {
    $this->entries = $s['entries'] ?? vec[];
  }
}

class PutPartnerEventsRequestEntry {
  public string $detail;
  public string $detail_type;
  public ?EventResourceList $resources;
  public ?EventSourceName $source;
  public ?EventTime $time;

  public function __construct(shape(
    ?'detail' => string,
    ?'detail_type' => string,
    ?'resources' => ?EventResourceList,
    ?'source' => ?EventSourceName,
    ?'time' => ?EventTime,
  ) $s = shape()) {
    $this->detail = $s['detail'] ?? '';
    $this->detail_type = $s['detail_type'] ?? '';
    $this->resources = $s['resources'] ?? vec[];
    $this->source = $s['source'] ?? '';
    $this->time = $s['time'] ?? 0;
  }
}

type PutPartnerEventsRequestEntryList = vec<PutPartnerEventsRequestEntry>;

class PutPartnerEventsResponse {
  public ?PutPartnerEventsResultEntryList $entries;
  public int $failed_entry_count;

  public function __construct(shape(
    ?'entries' => ?PutPartnerEventsResultEntryList,
    ?'failed_entry_count' => int,
  ) $s = shape()) {
    $this->entries = $s['entries'] ?? vec[];
    $this->failed_entry_count = $s['failed_entry_count'] ?? 0;
  }
}

class PutPartnerEventsResultEntry {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;
  public ?EventId $event_id;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
    ?'event_id' => ?EventId,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->event_id = $s['event_id'] ?? '';
  }
}

type PutPartnerEventsResultEntryList = vec<PutPartnerEventsResultEntry>;

class PutPermissionRequest {
  public ?Action $action;
  public ?Condition $condition;
  public ?NonPartnerEventBusName $event_bus_name;
  public ?Principal $principal;
  public ?StatementId $statement_id;

  public function __construct(shape(
    ?'action' => ?Action,
    ?'condition' => ?Condition,
    ?'event_bus_name' => ?NonPartnerEventBusName,
    ?'principal' => ?Principal,
    ?'statement_id' => ?StatementId,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->condition = $s['condition'] ?? null;
    $this->event_bus_name = $s['event_bus_name'] ?? '';
    $this->principal = $s['principal'] ?? '';
    $this->statement_id = $s['statement_id'] ?? '';
  }
}

class PutRuleRequest {
  public ?RuleDescription $description;
  public ?EventBusName $event_bus_name;
  public ?EventPattern $event_pattern;
  public ?RuleName $name;
  public ?RoleArn $role_arn;
  public ?ScheduleExpression $schedule_expression;
  public ?RuleState $state;
  public ?TagList $tags;

  public function __construct(shape(
    ?'description' => ?RuleDescription,
    ?'event_bus_name' => ?EventBusName,
    ?'event_pattern' => ?EventPattern,
    ?'name' => ?RuleName,
    ?'role_arn' => ?RoleArn,
    ?'schedule_expression' => ?ScheduleExpression,
    ?'state' => ?RuleState,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->event_bus_name = $s['event_bus_name'] ?? '';
    $this->event_pattern = $s['event_pattern'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->schedule_expression = $s['schedule_expression'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class PutRuleResponse {
  public ?RuleArn $rule_arn;

  public function __construct(shape(
    ?'rule_arn' => ?RuleArn,
  ) $s = shape()) {
    $this->rule_arn = $s['rule_arn'] ?? '';
  }
}

class PutTargetsRequest {
  public ?EventBusName $event_bus_name;
  public ?RuleName $rule;
  public ?TargetList $targets;

  public function __construct(shape(
    ?'event_bus_name' => ?EventBusName,
    ?'rule' => ?RuleName,
    ?'targets' => ?TargetList,
  ) $s = shape()) {
    $this->event_bus_name = $s['event_bus_name'] ?? '';
    $this->rule = $s['rule'] ?? '';
    $this->targets = $s['targets'] ?? vec[];
  }
}

class PutTargetsResponse {
  public ?PutTargetsResultEntryList $failed_entries;
  public int $failed_entry_count;

  public function __construct(shape(
    ?'failed_entries' => ?PutTargetsResultEntryList,
    ?'failed_entry_count' => int,
  ) $s = shape()) {
    $this->failed_entries = $s['failed_entries'] ?? vec[];
    $this->failed_entry_count = $s['failed_entry_count'] ?? 0;
  }
}

class PutTargetsResultEntry {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;
  public ?TargetId $target_id;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
    ?'target_id' => ?TargetId,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->target_id = $s['target_id'] ?? '';
  }
}

type PutTargetsResultEntryList = vec<PutTargetsResultEntry>;

class RemovePermissionRequest {
  public ?NonPartnerEventBusName $event_bus_name;
  public ?StatementId $statement_id;

  public function __construct(shape(
    ?'event_bus_name' => ?NonPartnerEventBusName,
    ?'statement_id' => ?StatementId,
  ) $s = shape()) {
    $this->event_bus_name = $s['event_bus_name'] ?? '';
    $this->statement_id = $s['statement_id'] ?? '';
  }
}

class RemoveTargetsRequest {
  public ?EventBusName $event_bus_name;
  public bool $force;
  public ?TargetIdList $ids;
  public ?RuleName $rule;

  public function __construct(shape(
    ?'event_bus_name' => ?EventBusName,
    ?'force' => bool,
    ?'ids' => ?TargetIdList,
    ?'rule' => ?RuleName,
  ) $s = shape()) {
    $this->event_bus_name = $s['event_bus_name'] ?? '';
    $this->force = $s['force'] ?? false;
    $this->ids = $s['ids'] ?? vec[];
    $this->rule = $s['rule'] ?? '';
  }
}

class RemoveTargetsResponse {
  public ?RemoveTargetsResultEntryList $failed_entries;
  public int $failed_entry_count;

  public function __construct(shape(
    ?'failed_entries' => ?RemoveTargetsResultEntryList,
    ?'failed_entry_count' => int,
  ) $s = shape()) {
    $this->failed_entries = $s['failed_entries'] ?? vec[];
    $this->failed_entry_count = $s['failed_entry_count'] ?? 0;
  }
}

class RemoveTargetsResultEntry {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;
  public ?TargetId $target_id;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
    ?'target_id' => ?TargetId,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->target_id = $s['target_id'] ?? '';
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
  public ?RuleArn $arn;
  public ?RuleDescription $description;
  public ?EventBusName $event_bus_name;
  public ?EventPattern $event_pattern;
  public ?ManagedBy $managed_by;
  public ?RuleName $name;
  public ?RoleArn $role_arn;
  public ?ScheduleExpression $schedule_expression;
  public ?RuleState $state;

  public function __construct(shape(
    ?'arn' => ?RuleArn,
    ?'description' => ?RuleDescription,
    ?'event_bus_name' => ?EventBusName,
    ?'event_pattern' => ?EventPattern,
    ?'managed_by' => ?ManagedBy,
    ?'name' => ?RuleName,
    ?'role_arn' => ?RoleArn,
    ?'schedule_expression' => ?ScheduleExpression,
    ?'state' => ?RuleState,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->event_bus_name = $s['event_bus_name'] ?? '';
    $this->event_pattern = $s['event_pattern'] ?? '';
    $this->managed_by = $s['managed_by'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->schedule_expression = $s['schedule_expression'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

type RuleArn = string;

type RuleDescription = string;

type RuleName = string;

type RuleNameList = vec<RuleName>;

type RuleResponseList = vec<Rule>;

type RuleState = string;

class RunCommandParameters {
  public ?RunCommandTargets $run_command_targets;

  public function __construct(shape(
    ?'run_command_targets' => ?RunCommandTargets,
  ) $s = shape()) {
    $this->run_command_targets = $s['run_command_targets'] ?? vec[];
  }
}

class RunCommandTarget {
  public ?RunCommandTargetKey $key;
  public ?RunCommandTargetValues $values;

  public function __construct(shape(
    ?'key' => ?RunCommandTargetKey,
    ?'values' => ?RunCommandTargetValues,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type RunCommandTargetKey = string;

type RunCommandTargetValue = string;

type RunCommandTargetValues = vec<RunCommandTargetValue>;

type RunCommandTargets = vec<RunCommandTarget>;

type ScheduleExpression = string;

class SqsParameters {
  public ?MessageGroupId $message_group_id;

  public function __construct(shape(
    ?'message_group_id' => ?MessageGroupId,
  ) $s = shape()) {
    $this->message_group_id = $s['message_group_id'] ?? '';
  }
}

type StatementId = string;

type String = string;

type StringList = vec<String>;

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

type TagList = vec<Tag>;

class TagResourceRequest {
  public ?Arn $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
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

class Target {
  public ?TargetArn $arn;
  public ?BatchParameters $batch_parameters;
  public ?EcsParameters $ecs_parameters;
  public ?TargetId $id;
  public ?TargetInput $input;
  public ?TargetInputPath $input_path;
  public ?InputTransformer $input_transformer;
  public ?KinesisParameters $kinesis_parameters;
  public ?RoleArn $role_arn;
  public ?RunCommandParameters $run_command_parameters;
  public ?SqsParameters $sqs_parameters;

  public function __construct(shape(
    ?'arn' => ?TargetArn,
    ?'batch_parameters' => ?BatchParameters,
    ?'ecs_parameters' => ?EcsParameters,
    ?'id' => ?TargetId,
    ?'input' => ?TargetInput,
    ?'input_path' => ?TargetInputPath,
    ?'input_transformer' => ?InputTransformer,
    ?'kinesis_parameters' => ?KinesisParameters,
    ?'role_arn' => ?RoleArn,
    ?'run_command_parameters' => ?RunCommandParameters,
    ?'sqs_parameters' => ?SqsParameters,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->batch_parameters = $s['batch_parameters'] ?? null;
    $this->ecs_parameters = $s['ecs_parameters'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->input = $s['input'] ?? '';
    $this->input_path = $s['input_path'] ?? '';
    $this->input_transformer = $s['input_transformer'] ?? null;
    $this->kinesis_parameters = $s['kinesis_parameters'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->run_command_parameters = $s['run_command_parameters'] ?? null;
    $this->sqs_parameters = $s['sqs_parameters'] ?? null;
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
  public ?EventPattern $event_pattern;

  public function __construct(shape(
    ?'event' => string,
    ?'event_pattern' => ?EventPattern,
  ) $s = shape()) {
    $this->event = $s['event'] ?? '';
    $this->event_pattern = $s['event_pattern'] ?? '';
  }
}

class TestEventPatternResponse {
  public bool $result;

  public function __construct(shape(
    ?'result' => bool,
  ) $s = shape()) {
    $this->result = $s['result'] ?? false;
  }
}

type Timestamp = int;

type TransformerInput = string;

type TransformerPaths = dict<InputTransformerPathKey, TargetInputPath>;

class UntagResourceRequest {
  public ?Arn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
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

