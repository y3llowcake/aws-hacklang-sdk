<?hh // strict
namespace slack\aws\xray;

interface XRay {
  public function BatchGetTraces(BatchGetTracesRequest $in): Awaitable<\Errors\Result<BatchGetTracesResult>>;
  public function CreateGroup(CreateGroupRequest $in): Awaitable<\Errors\Result<CreateGroupResult>>;
  public function CreateSamplingRule(CreateSamplingRuleRequest $in): Awaitable<\Errors\Result<CreateSamplingRuleResult>>;
  public function DeleteGroup(DeleteGroupRequest $in): Awaitable<\Errors\Result<DeleteGroupResult>>;
  public function DeleteSamplingRule(DeleteSamplingRuleRequest $in): Awaitable<\Errors\Result<DeleteSamplingRuleResult>>;
  public function GetEncryptionConfig(GetEncryptionConfigRequest $in): Awaitable<\Errors\Result<GetEncryptionConfigResult>>;
  public function GetGroup(GetGroupRequest $in): Awaitable<\Errors\Result<GetGroupResult>>;
  public function GetGroups(GetGroupsRequest $in): Awaitable<\Errors\Result<GetGroupsResult>>;
  public function GetSamplingRules(GetSamplingRulesRequest $in): Awaitable<\Errors\Result<GetSamplingRulesResult>>;
  public function GetSamplingStatisticSummaries(GetSamplingStatisticSummariesRequest $in): Awaitable<\Errors\Result<GetSamplingStatisticSummariesResult>>;
  public function GetSamplingTargets(GetSamplingTargetsRequest $in): Awaitable<\Errors\Result<GetSamplingTargetsResult>>;
  public function GetServiceGraph(GetServiceGraphRequest $in): Awaitable<\Errors\Result<GetServiceGraphResult>>;
  public function GetTimeSeriesServiceStatistics(GetTimeSeriesServiceStatisticsRequest $in): Awaitable<\Errors\Result<GetTimeSeriesServiceStatisticsResult>>;
  public function GetTraceGraph(GetTraceGraphRequest $in): Awaitable<\Errors\Result<GetTraceGraphResult>>;
  public function GetTraceSummaries(GetTraceSummariesRequest $in): Awaitable<\Errors\Result<GetTraceSummariesResult>>;
  public function PutEncryptionConfig(PutEncryptionConfigRequest $in): Awaitable<\Errors\Result<PutEncryptionConfigResult>>;
  public function PutTelemetryRecords(PutTelemetryRecordsRequest $in): Awaitable<\Errors\Result<PutTelemetryRecordsResult>>;
  public function PutTraceSegments(PutTraceSegmentsRequest $in): Awaitable<\Errors\Result<PutTraceSegmentsResult>>;
  public function UpdateGroup(UpdateGroupRequest $in): Awaitable<\Errors\Result<UpdateGroupResult>>;
  public function UpdateSamplingRule(UpdateSamplingRuleRequest $in): Awaitable<\Errors\Result<UpdateSamplingRuleResult>>;
}

class Alias {
  public string $name;
  public ?AliasNames $names;
  public string $type;

  public function __construct(shape(
    ?'name' => string,
    ?'names' => ?AliasNames,
    ?'type' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->names = $s['names'] ?? vec[];
    $this->type = $s['type'] ?? '';
  }
}

type AliasList = vec<Alias>;

type AliasNames = vec<String>;

type AnnotationKey = string;

class AnnotationValue {
  public ?NullableBoolean $boolean_value;
  public ?NullableDouble $number_value;
  public string $string_value;

  public function __construct(shape(
    ?'boolean_value' => ?NullableBoolean,
    ?'number_value' => ?NullableDouble,
    ?'string_value' => string,
  ) $s = shape()) {
    $this->boolean_value = $s['boolean_value'] ?? false;
    $this->number_value = $s['number_value'] ?? 0.0;
    $this->string_value = $s['string_value'] ?? '';
  }
}

type Annotations = dict<AnnotationKey, ValuesWithServiceIds>;

type AttributeKey = string;

type AttributeMap = dict<AttributeKey, AttributeValue>;

type AttributeValue = string;

class AvailabilityZoneDetail {
  public string $name;

  public function __construct(shape(
    ?'name' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class BackendConnectionErrors {
  public ?NullableInteger $connection_refused_count;
  public ?NullableInteger $http_code_4_xx_count;
  public ?NullableInteger $http_code_5_xx_count;
  public ?NullableInteger $other_count;
  public ?NullableInteger $timeout_count;
  public ?NullableInteger $unknown_host_count;

  public function __construct(shape(
    ?'connection_refused_count' => ?NullableInteger,
    ?'http_code_4_xx_count' => ?NullableInteger,
    ?'http_code_5_xx_count' => ?NullableInteger,
    ?'other_count' => ?NullableInteger,
    ?'timeout_count' => ?NullableInteger,
    ?'unknown_host_count' => ?NullableInteger,
  ) $s = shape()) {
    $this->connection_refused_count = $s['connection_refused_count'] ?? 0;
    $this->http_code_4_xx_count = $s['http_code_4_xx_count'] ?? 0;
    $this->http_code_5_xx_count = $s['http_code_5_xx_count'] ?? 0;
    $this->other_count = $s['other_count'] ?? 0;
    $this->timeout_count = $s['timeout_count'] ?? 0;
    $this->unknown_host_count = $s['unknown_host_count'] ?? 0;
  }
}

class BatchGetTracesRequest {
  public string $next_token;
  public ?TraceIdList $trace_ids;

  public function __construct(shape(
    ?'next_token' => string,
    ?'trace_ids' => ?TraceIdList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->trace_ids = $s['trace_ids'] ?? vec[];
  }
}

class BatchGetTracesResult {
  public string $next_token;
  public ?TraceList $traces;
  public ?UnprocessedTraceIdList $unprocessed_trace_ids;

  public function __construct(shape(
    ?'next_token' => string,
    ?'traces' => ?TraceList,
    ?'unprocessed_trace_ids' => ?UnprocessedTraceIdList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->traces = $s['traces'] ?? vec[];
    $this->unprocessed_trace_ids = $s['unprocessed_trace_ids'] ?? vec[];
  }
}

type Boolean = bool;

type BorrowCount = int;

type ClientID = string;

class CreateGroupRequest {
  public ?FilterExpression $filter_expression;
  public ?GroupName $group_name;

  public function __construct(shape(
    ?'filter_expression' => ?FilterExpression,
    ?'group_name' => ?GroupName,
  ) $s = shape()) {
    $this->filter_expression = $s['filter_expression'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
  }
}

class CreateGroupResult {
  public ?Group $group;

  public function __construct(shape(
    ?'group' => ?Group,
  ) $s = shape()) {
    $this->group = $s['group'] ?? null;
  }
}

class CreateSamplingRuleRequest {
  public ?SamplingRule $sampling_rule;

  public function __construct(shape(
    ?'sampling_rule' => ?SamplingRule,
  ) $s = shape()) {
    $this->sampling_rule = $s['sampling_rule'] ?? null;
  }
}

class CreateSamplingRuleResult {
  public ?SamplingRuleRecord $sampling_rule_record;

  public function __construct(shape(
    ?'sampling_rule_record' => ?SamplingRuleRecord,
  ) $s = shape()) {
    $this->sampling_rule_record = $s['sampling_rule_record'] ?? null;
  }
}

class DeleteGroupRequest {
  public ?GroupARN $group_arn;
  public ?GroupName $group_name;

  public function __construct(shape(
    ?'group_arn' => ?GroupARN,
    ?'group_name' => ?GroupName,
  ) $s = shape()) {
    $this->group_arn = $s['group_arn'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
  }
}

class DeleteGroupResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSamplingRuleRequest {
  public string $rule_arn;
  public string $rule_name;

  public function __construct(shape(
    ?'rule_arn' => string,
    ?'rule_name' => string,
  ) $s = shape()) {
    $this->rule_arn = $s['rule_arn'] ?? '';
    $this->rule_name = $s['rule_name'] ?? '';
  }
}

class DeleteSamplingRuleResult {
  public ?SamplingRuleRecord $sampling_rule_record;

  public function __construct(shape(
    ?'sampling_rule_record' => ?SamplingRuleRecord,
  ) $s = shape()) {
    $this->sampling_rule_record = $s['sampling_rule_record'] ?? null;
  }
}

type Double = float;

type EC2InstanceId = string;

class Edge {
  public ?AliasList $aliases;
  public ?Timestamp $end_time;
  public ?NullableInteger $reference_id;
  public ?Histogram $response_time_histogram;
  public ?Timestamp $start_time;
  public ?EdgeStatistics $summary_statistics;

  public function __construct(shape(
    ?'aliases' => ?AliasList,
    ?'end_time' => ?Timestamp,
    ?'reference_id' => ?NullableInteger,
    ?'response_time_histogram' => ?Histogram,
    ?'start_time' => ?Timestamp,
    ?'summary_statistics' => ?EdgeStatistics,
  ) $s = shape()) {
    $this->aliases = $s['aliases'] ?? vec[];
    $this->end_time = $s['end_time'] ?? 0;
    $this->reference_id = $s['reference_id'] ?? 0;
    $this->response_time_histogram = $s['response_time_histogram'] ?? vec[];
    $this->start_time = $s['start_time'] ?? 0;
    $this->summary_statistics = $s['summary_statistics'] ?? null;
  }
}

type EdgeList = vec<Edge>;

class EdgeStatistics {
  public ?ErrorStatistics $error_statistics;
  public ?FaultStatistics $fault_statistics;
  public ?NullableLong $ok_count;
  public ?NullableLong $total_count;
  public ?NullableDouble $total_response_time;

  public function __construct(shape(
    ?'error_statistics' => ?ErrorStatistics,
    ?'fault_statistics' => ?FaultStatistics,
    ?'ok_count' => ?NullableLong,
    ?'total_count' => ?NullableLong,
    ?'total_response_time' => ?NullableDouble,
  ) $s = shape()) {
    $this->error_statistics = $s['error_statistics'] ?? null;
    $this->fault_statistics = $s['fault_statistics'] ?? null;
    $this->ok_count = $s['ok_count'] ?? 0;
    $this->total_count = $s['total_count'] ?? 0;
    $this->total_response_time = $s['total_response_time'] ?? 0.0;
  }
}

class EncryptionConfig {
  public string $key_id;
  public ?EncryptionStatus $status;
  public ?EncryptionType $type;

  public function __construct(shape(
    ?'key_id' => string,
    ?'status' => ?EncryptionStatus,
    ?'type' => ?EncryptionType,
  ) $s = shape()) {
    $this->key_id = $s['key_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type EncryptionKeyId = string;

type EncryptionStatus = string;

type EncryptionType = string;

type EntitySelectorExpression = string;

type ErrorMessage = string;

class ErrorRootCause {
  public ?NullableBoolean $client_impacting;
  public ?ErrorRootCauseServices $services;

  public function __construct(shape(
    ?'client_impacting' => ?NullableBoolean,
    ?'services' => ?ErrorRootCauseServices,
  ) $s = shape()) {
    $this->client_impacting = $s['client_impacting'] ?? false;
    $this->services = $s['services'] ?? vec[];
  }
}

class ErrorRootCauseEntity {
  public ?RootCauseExceptions $exceptions;
  public string $name;
  public ?NullableBoolean $remote;

  public function __construct(shape(
    ?'exceptions' => ?RootCauseExceptions,
    ?'name' => string,
    ?'remote' => ?NullableBoolean,
  ) $s = shape()) {
    $this->exceptions = $s['exceptions'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->remote = $s['remote'] ?? false;
  }
}

type ErrorRootCauseEntityPath = vec<ErrorRootCauseEntity>;

class ErrorRootCauseService {
  public string $account_id;
  public ?ErrorRootCauseEntityPath $entity_path;
  public ?NullableBoolean $inferred;
  public string $name;
  public ?ServiceNames $names;
  public string $type;

  public function __construct(shape(
    ?'account_id' => string,
    ?'entity_path' => ?ErrorRootCauseEntityPath,
    ?'inferred' => ?NullableBoolean,
    ?'name' => string,
    ?'names' => ?ServiceNames,
    ?'type' => string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->entity_path = $s['entity_path'] ?? vec[];
    $this->inferred = $s['inferred'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->names = $s['names'] ?? vec[];
    $this->type = $s['type'] ?? '';
  }
}

type ErrorRootCauseServices = vec<ErrorRootCauseService>;

type ErrorRootCauses = vec<ErrorRootCause>;

class ErrorStatistics {
  public ?NullableLong $other_count;
  public ?NullableLong $throttle_count;
  public ?NullableLong $total_count;

  public function __construct(shape(
    ?'other_count' => ?NullableLong,
    ?'throttle_count' => ?NullableLong,
    ?'total_count' => ?NullableLong,
  ) $s = shape()) {
    $this->other_count = $s['other_count'] ?? 0;
    $this->throttle_count = $s['throttle_count'] ?? 0;
    $this->total_count = $s['total_count'] ?? 0;
  }
}

class FaultRootCause {
  public ?NullableBoolean $client_impacting;
  public ?FaultRootCauseServices $services;

  public function __construct(shape(
    ?'client_impacting' => ?NullableBoolean,
    ?'services' => ?FaultRootCauseServices,
  ) $s = shape()) {
    $this->client_impacting = $s['client_impacting'] ?? false;
    $this->services = $s['services'] ?? vec[];
  }
}

class FaultRootCauseEntity {
  public ?RootCauseExceptions $exceptions;
  public string $name;
  public ?NullableBoolean $remote;

  public function __construct(shape(
    ?'exceptions' => ?RootCauseExceptions,
    ?'name' => string,
    ?'remote' => ?NullableBoolean,
  ) $s = shape()) {
    $this->exceptions = $s['exceptions'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->remote = $s['remote'] ?? false;
  }
}

type FaultRootCauseEntityPath = vec<FaultRootCauseEntity>;

class FaultRootCauseService {
  public string $account_id;
  public ?FaultRootCauseEntityPath $entity_path;
  public ?NullableBoolean $inferred;
  public string $name;
  public ?ServiceNames $names;
  public string $type;

  public function __construct(shape(
    ?'account_id' => string,
    ?'entity_path' => ?FaultRootCauseEntityPath,
    ?'inferred' => ?NullableBoolean,
    ?'name' => string,
    ?'names' => ?ServiceNames,
    ?'type' => string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->entity_path = $s['entity_path'] ?? vec[];
    $this->inferred = $s['inferred'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->names = $s['names'] ?? vec[];
    $this->type = $s['type'] ?? '';
  }
}

type FaultRootCauseServices = vec<FaultRootCauseService>;

type FaultRootCauses = vec<FaultRootCause>;

class FaultStatistics {
  public ?NullableLong $other_count;
  public ?NullableLong $total_count;

  public function __construct(shape(
    ?'other_count' => ?NullableLong,
    ?'total_count' => ?NullableLong,
  ) $s = shape()) {
    $this->other_count = $s['other_count'] ?? 0;
    $this->total_count = $s['total_count'] ?? 0;
  }
}

type FilterExpression = string;

type FixedRate = float;

class GetEncryptionConfigRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetEncryptionConfigResult {
  public ?EncryptionConfig $encryption_config;

  public function __construct(shape(
    ?'encryption_config' => ?EncryptionConfig,
  ) $s = shape()) {
    $this->encryption_config = $s['encryption_config'] ?? null;
  }
}

class GetGroupRequest {
  public ?GroupARN $group_arn;
  public ?GroupName $group_name;

  public function __construct(shape(
    ?'group_arn' => ?GroupARN,
    ?'group_name' => ?GroupName,
  ) $s = shape()) {
    $this->group_arn = $s['group_arn'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
  }
}

class GetGroupResult {
  public ?Group $group;

  public function __construct(shape(
    ?'group' => ?Group,
  ) $s = shape()) {
    $this->group = $s['group'] ?? null;
  }
}

type GetGroupsNextToken = string;

class GetGroupsRequest {
  public ?GetGroupsNextToken $next_token;

  public function __construct(shape(
    ?'next_token' => ?GetGroupsNextToken,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetGroupsResult {
  public ?GroupSummaryList $groups;
  public string $next_token;

  public function __construct(shape(
    ?'groups' => ?GroupSummaryList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->groups = $s['groups'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetSamplingRulesRequest {
  public string $next_token;

  public function __construct(shape(
    ?'next_token' => string,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetSamplingRulesResult {
  public string $next_token;
  public ?SamplingRuleRecordList $sampling_rule_records;

  public function __construct(shape(
    ?'next_token' => string,
    ?'sampling_rule_records' => ?SamplingRuleRecordList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->sampling_rule_records = $s['sampling_rule_records'] ?? vec[];
  }
}

class GetSamplingStatisticSummariesRequest {
  public string $next_token;

  public function __construct(shape(
    ?'next_token' => string,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetSamplingStatisticSummariesResult {
  public string $next_token;
  public ?SamplingStatisticSummaryList $sampling_statistic_summaries;

  public function __construct(shape(
    ?'next_token' => string,
    ?'sampling_statistic_summaries' => ?SamplingStatisticSummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->sampling_statistic_summaries = $s['sampling_statistic_summaries'] ?? vec[];
  }
}

class GetSamplingTargetsRequest {
  public ?SamplingStatisticsDocumentList $sampling_statistics_documents;

  public function __construct(shape(
    ?'sampling_statistics_documents' => ?SamplingStatisticsDocumentList,
  ) $s = shape()) {
    $this->sampling_statistics_documents = $s['sampling_statistics_documents'] ?? vec[];
  }
}

class GetSamplingTargetsResult {
  public ?Timestamp $last_rule_modification;
  public ?SamplingTargetDocumentList $sampling_target_documents;
  public ?UnprocessedStatisticsList $unprocessed_statistics;

  public function __construct(shape(
    ?'last_rule_modification' => ?Timestamp,
    ?'sampling_target_documents' => ?SamplingTargetDocumentList,
    ?'unprocessed_statistics' => ?UnprocessedStatisticsList,
  ) $s = shape()) {
    $this->last_rule_modification = $s['last_rule_modification'] ?? 0;
    $this->sampling_target_documents = $s['sampling_target_documents'] ?? vec[];
    $this->unprocessed_statistics = $s['unprocessed_statistics'] ?? vec[];
  }
}

class GetServiceGraphRequest {
  public ?Timestamp $end_time;
  public ?GroupARN $group_arn;
  public ?GroupName $group_name;
  public string $next_token;
  public ?Timestamp $start_time;

  public function __construct(shape(
    ?'end_time' => ?Timestamp,
    ?'group_arn' => ?GroupARN,
    ?'group_name' => ?GroupName,
    ?'next_token' => string,
    ?'start_time' => ?Timestamp,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->group_arn = $s['group_arn'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class GetServiceGraphResult {
  public bool $contains_old_group_versions;
  public ?Timestamp $end_time;
  public string $next_token;
  public ?ServiceList $services;
  public ?Timestamp $start_time;

  public function __construct(shape(
    ?'contains_old_group_versions' => bool,
    ?'end_time' => ?Timestamp,
    ?'next_token' => string,
    ?'services' => ?ServiceList,
    ?'start_time' => ?Timestamp,
  ) $s = shape()) {
    $this->contains_old_group_versions = $s['contains_old_group_versions'] ?? false;
    $this->end_time = $s['end_time'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->services = $s['services'] ?? vec[];
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class GetTimeSeriesServiceStatisticsRequest {
  public ?Timestamp $end_time;
  public ?EntitySelectorExpression $entity_selector_expression;
  public ?GroupARN $group_arn;
  public ?GroupName $group_name;
  public string $next_token;
  public ?NullableInteger $period;
  public ?Timestamp $start_time;

  public function __construct(shape(
    ?'end_time' => ?Timestamp,
    ?'entity_selector_expression' => ?EntitySelectorExpression,
    ?'group_arn' => ?GroupARN,
    ?'group_name' => ?GroupName,
    ?'next_token' => string,
    ?'period' => ?NullableInteger,
    ?'start_time' => ?Timestamp,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->entity_selector_expression = $s['entity_selector_expression'] ?? '';
    $this->group_arn = $s['group_arn'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->period = $s['period'] ?? 0;
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class GetTimeSeriesServiceStatisticsResult {
  public bool $contains_old_group_versions;
  public string $next_token;
  public ?TimeSeriesServiceStatisticsList $time_series_service_statistics;

  public function __construct(shape(
    ?'contains_old_group_versions' => bool,
    ?'next_token' => string,
    ?'time_series_service_statistics' => ?TimeSeriesServiceStatisticsList,
  ) $s = shape()) {
    $this->contains_old_group_versions = $s['contains_old_group_versions'] ?? false;
    $this->next_token = $s['next_token'] ?? '';
    $this->time_series_service_statistics = $s['time_series_service_statistics'] ?? vec[];
  }
}

class GetTraceGraphRequest {
  public string $next_token;
  public ?TraceIdList $trace_ids;

  public function __construct(shape(
    ?'next_token' => string,
    ?'trace_ids' => ?TraceIdList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->trace_ids = $s['trace_ids'] ?? vec[];
  }
}

class GetTraceGraphResult {
  public string $next_token;
  public ?ServiceList $services;

  public function __construct(shape(
    ?'next_token' => string,
    ?'services' => ?ServiceList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->services = $s['services'] ?? vec[];
  }
}

class GetTraceSummariesRequest {
  public ?Timestamp $end_time;
  public ?FilterExpression $filter_expression;
  public string $next_token;
  public ?NullableBoolean $sampling;
  public ?SamplingStrategy $sampling_strategy;
  public ?Timestamp $start_time;
  public ?TimeRangeType $time_range_type;

  public function __construct(shape(
    ?'end_time' => ?Timestamp,
    ?'filter_expression' => ?FilterExpression,
    ?'next_token' => string,
    ?'sampling' => ?NullableBoolean,
    ?'sampling_strategy' => ?SamplingStrategy,
    ?'start_time' => ?Timestamp,
    ?'time_range_type' => ?TimeRangeType,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->filter_expression = $s['filter_expression'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->sampling = $s['sampling'] ?? false;
    $this->sampling_strategy = $s['sampling_strategy'] ?? null;
    $this->start_time = $s['start_time'] ?? 0;
    $this->time_range_type = $s['time_range_type'] ?? '';
  }
}

class GetTraceSummariesResult {
  public ?Timestamp $approximate_time;
  public string $next_token;
  public ?TraceSummaryList $trace_summaries;
  public ?NullableLong $traces_processed_count;

  public function __construct(shape(
    ?'approximate_time' => ?Timestamp,
    ?'next_token' => string,
    ?'trace_summaries' => ?TraceSummaryList,
    ?'traces_processed_count' => ?NullableLong,
  ) $s = shape()) {
    $this->approximate_time = $s['approximate_time'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->trace_summaries = $s['trace_summaries'] ?? vec[];
    $this->traces_processed_count = $s['traces_processed_count'] ?? 0;
  }
}

class Group {
  public string $filter_expression;
  public string $group_arn;
  public string $group_name;

  public function __construct(shape(
    ?'filter_expression' => string,
    ?'group_arn' => string,
    ?'group_name' => string,
  ) $s = shape()) {
    $this->filter_expression = $s['filter_expression'] ?? '';
    $this->group_arn = $s['group_arn'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
  }
}

type GroupARN = string;

type GroupName = string;

class GroupSummary {
  public string $filter_expression;
  public string $group_arn;
  public string $group_name;

  public function __construct(shape(
    ?'filter_expression' => string,
    ?'group_arn' => string,
    ?'group_name' => string,
  ) $s = shape()) {
    $this->filter_expression = $s['filter_expression'] ?? '';
    $this->group_arn = $s['group_arn'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
  }
}

type GroupSummaryList = vec<GroupSummary>;

type HTTPMethod = string;

type Histogram = vec<HistogramEntry>;

class HistogramEntry {
  public int $count;
  public ?Double $value;

  public function __construct(shape(
    ?'count' => int,
    ?'value' => ?Double,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->value = $s['value'] ?? 0.0;
  }
}

type Host = string;

type Hostname = string;

class Http {
  public string $client_ip;
  public string $http_method;
  public ?NullableInteger $http_status;
  public string $http_url;
  public string $user_agent;

  public function __construct(shape(
    ?'client_ip' => string,
    ?'http_method' => string,
    ?'http_status' => ?NullableInteger,
    ?'http_url' => string,
    ?'user_agent' => string,
  ) $s = shape()) {
    $this->client_ip = $s['client_ip'] ?? '';
    $this->http_method = $s['http_method'] ?? '';
    $this->http_status = $s['http_status'] ?? 0;
    $this->http_url = $s['http_url'] ?? '';
    $this->user_agent = $s['user_agent'] ?? '';
  }
}

class InstanceIdDetail {
  public string $id;

  public function __construct(shape(
    ?'id' => string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

type Integer = int;

class InvalidRequestException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type NullableBoolean = bool;

type NullableDouble = float;

type NullableInteger = int;

type NullableLong = int;

type Priority = int;

class PutEncryptionConfigRequest {
  public ?EncryptionKeyId $key_id;
  public ?EncryptionType $type;

  public function __construct(shape(
    ?'key_id' => ?EncryptionKeyId,
    ?'type' => ?EncryptionType,
  ) $s = shape()) {
    $this->key_id = $s['key_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class PutEncryptionConfigResult {
  public ?EncryptionConfig $encryption_config;

  public function __construct(shape(
    ?'encryption_config' => ?EncryptionConfig,
  ) $s = shape()) {
    $this->encryption_config = $s['encryption_config'] ?? null;
  }
}

class PutTelemetryRecordsRequest {
  public ?EC2InstanceId $ec_2_instance_id;
  public ?Hostname $hostname;
  public ?ResourceARN $resource_arn;
  public ?TelemetryRecordList $telemetry_records;

  public function __construct(shape(
    ?'ec_2_instance_id' => ?EC2InstanceId,
    ?'hostname' => ?Hostname,
    ?'resource_arn' => ?ResourceARN,
    ?'telemetry_records' => ?TelemetryRecordList,
  ) $s = shape()) {
    $this->ec_2_instance_id = $s['ec_2_instance_id'] ?? '';
    $this->hostname = $s['hostname'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->telemetry_records = $s['telemetry_records'] ?? vec[];
  }
}

class PutTelemetryRecordsResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutTraceSegmentsRequest {
  public ?TraceSegmentDocumentList $trace_segment_documents;

  public function __construct(shape(
    ?'trace_segment_documents' => ?TraceSegmentDocumentList,
  ) $s = shape()) {
    $this->trace_segment_documents = $s['trace_segment_documents'] ?? vec[];
  }
}

class PutTraceSegmentsResult {
  public ?UnprocessedTraceSegmentList $unprocessed_trace_segments;

  public function __construct(shape(
    ?'unprocessed_trace_segments' => ?UnprocessedTraceSegmentList,
  ) $s = shape()) {
    $this->unprocessed_trace_segments = $s['unprocessed_trace_segments'] ?? vec[];
  }
}

type RequestCount = int;

type ReservoirSize = int;

type ResourceARN = string;

class ResourceARNDetail {
  public string $arn;

  public function __construct(shape(
    ?'arn' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class ResponseTimeRootCause {
  public ?NullableBoolean $client_impacting;
  public ?ResponseTimeRootCauseServices $services;

  public function __construct(shape(
    ?'client_impacting' => ?NullableBoolean,
    ?'services' => ?ResponseTimeRootCauseServices,
  ) $s = shape()) {
    $this->client_impacting = $s['client_impacting'] ?? false;
    $this->services = $s['services'] ?? vec[];
  }
}

class ResponseTimeRootCauseEntity {
  public ?NullableDouble $coverage;
  public string $name;
  public ?NullableBoolean $remote;

  public function __construct(shape(
    ?'coverage' => ?NullableDouble,
    ?'name' => string,
    ?'remote' => ?NullableBoolean,
  ) $s = shape()) {
    $this->coverage = $s['coverage'] ?? 0.0;
    $this->name = $s['name'] ?? '';
    $this->remote = $s['remote'] ?? false;
  }
}

type ResponseTimeRootCauseEntityPath = vec<ResponseTimeRootCauseEntity>;

class ResponseTimeRootCauseService {
  public string $account_id;
  public ?ResponseTimeRootCauseEntityPath $entity_path;
  public ?NullableBoolean $inferred;
  public string $name;
  public ?ServiceNames $names;
  public string $type;

  public function __construct(shape(
    ?'account_id' => string,
    ?'entity_path' => ?ResponseTimeRootCauseEntityPath,
    ?'inferred' => ?NullableBoolean,
    ?'name' => string,
    ?'names' => ?ServiceNames,
    ?'type' => string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->entity_path = $s['entity_path'] ?? vec[];
    $this->inferred = $s['inferred'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->names = $s['names'] ?? vec[];
    $this->type = $s['type'] ?? '';
  }
}

type ResponseTimeRootCauseServices = vec<ResponseTimeRootCauseService>;

type ResponseTimeRootCauses = vec<ResponseTimeRootCause>;

class RootCauseException {
  public string $message;
  public string $name;

  public function __construct(shape(
    ?'message' => string,
    ?'name' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type RootCauseExceptions = vec<RootCauseException>;

class RuleLimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type RuleName = string;

type SampledCount = int;

class SamplingRule {
  public ?AttributeMap $attributes;
  public ?FixedRate $fixed_rate;
  public ?HTTPMethod $http_method;
  public ?Host $host;
  public ?Priority $priority;
  public ?ReservoirSize $reservoir_size;
  public ?ResourceARN $resource_arn;
  public string $rule_arn;
  public ?RuleName $rule_name;
  public ?ServiceName $service_name;
  public ?ServiceType $service_type;
  public ?URLPath $url_path;
  public ?Version $version;

  public function __construct(shape(
    ?'attributes' => ?AttributeMap,
    ?'fixed_rate' => ?FixedRate,
    ?'http_method' => ?HTTPMethod,
    ?'host' => ?Host,
    ?'priority' => ?Priority,
    ?'reservoir_size' => ?ReservoirSize,
    ?'resource_arn' => ?ResourceARN,
    ?'rule_arn' => string,
    ?'rule_name' => ?RuleName,
    ?'service_name' => ?ServiceName,
    ?'service_type' => ?ServiceType,
    ?'url_path' => ?URLPath,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->fixed_rate = $s['fixed_rate'] ?? 0.0;
    $this->http_method = $s['http_method'] ?? '';
    $this->host = $s['host'] ?? '';
    $this->priority = $s['priority'] ?? 0;
    $this->reservoir_size = $s['reservoir_size'] ?? 0;
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->rule_arn = $s['rule_arn'] ?? '';
    $this->rule_name = $s['rule_name'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
    $this->service_type = $s['service_type'] ?? '';
    $this->url_path = $s['url_path'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class SamplingRuleRecord {
  public ?Timestamp $created_at;
  public ?Timestamp $modified_at;
  public ?SamplingRule $sampling_rule;

  public function __construct(shape(
    ?'created_at' => ?Timestamp,
    ?'modified_at' => ?Timestamp,
    ?'sampling_rule' => ?SamplingRule,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->modified_at = $s['modified_at'] ?? 0;
    $this->sampling_rule = $s['sampling_rule'] ?? null;
  }
}

type SamplingRuleRecordList = vec<SamplingRuleRecord>;

class SamplingRuleUpdate {
  public ?AttributeMap $attributes;
  public ?NullableDouble $fixed_rate;
  public ?HTTPMethod $http_method;
  public ?Host $host;
  public ?NullableInteger $priority;
  public ?NullableInteger $reservoir_size;
  public ?ResourceARN $resource_arn;
  public string $rule_arn;
  public ?RuleName $rule_name;
  public ?ServiceName $service_name;
  public ?ServiceType $service_type;
  public ?URLPath $url_path;

  public function __construct(shape(
    ?'attributes' => ?AttributeMap,
    ?'fixed_rate' => ?NullableDouble,
    ?'http_method' => ?HTTPMethod,
    ?'host' => ?Host,
    ?'priority' => ?NullableInteger,
    ?'reservoir_size' => ?NullableInteger,
    ?'resource_arn' => ?ResourceARN,
    ?'rule_arn' => string,
    ?'rule_name' => ?RuleName,
    ?'service_name' => ?ServiceName,
    ?'service_type' => ?ServiceType,
    ?'url_path' => ?URLPath,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->fixed_rate = $s['fixed_rate'] ?? 0.0;
    $this->http_method = $s['http_method'] ?? '';
    $this->host = $s['host'] ?? '';
    $this->priority = $s['priority'] ?? 0;
    $this->reservoir_size = $s['reservoir_size'] ?? 0;
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->rule_arn = $s['rule_arn'] ?? '';
    $this->rule_name = $s['rule_name'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
    $this->service_type = $s['service_type'] ?? '';
    $this->url_path = $s['url_path'] ?? '';
  }
}

class SamplingStatisticSummary {
  public int $borrow_count;
  public int $request_count;
  public string $rule_name;
  public int $sampled_count;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'borrow_count' => int,
    ?'request_count' => int,
    ?'rule_name' => string,
    ?'sampled_count' => int,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->borrow_count = $s['borrow_count'] ?? 0;
    $this->request_count = $s['request_count'] ?? 0;
    $this->rule_name = $s['rule_name'] ?? '';
    $this->sampled_count = $s['sampled_count'] ?? 0;
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type SamplingStatisticSummaryList = vec<SamplingStatisticSummary>;

class SamplingStatisticsDocument {
  public ?BorrowCount $borrow_count;
  public ?ClientID $client_id;
  public ?RequestCount $request_count;
  public ?RuleName $rule_name;
  public ?SampledCount $sampled_count;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'borrow_count' => ?BorrowCount,
    ?'client_id' => ?ClientID,
    ?'request_count' => ?RequestCount,
    ?'rule_name' => ?RuleName,
    ?'sampled_count' => ?SampledCount,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->borrow_count = $s['borrow_count'] ?? 0;
    $this->client_id = $s['client_id'] ?? '';
    $this->request_count = $s['request_count'] ?? 0;
    $this->rule_name = $s['rule_name'] ?? '';
    $this->sampled_count = $s['sampled_count'] ?? 0;
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type SamplingStatisticsDocumentList = vec<SamplingStatisticsDocument>;

class SamplingStrategy {
  public ?SamplingStrategyName $name;
  public ?NullableDouble $value;

  public function __construct(shape(
    ?'name' => ?SamplingStrategyName,
    ?'value' => ?NullableDouble,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? 0.0;
  }
}

type SamplingStrategyName = string;

class SamplingTargetDocument {
  public ?Double $fixed_rate;
  public ?NullableInteger $interval;
  public ?NullableInteger $reservoir_quota;
  public ?Timestamp $reservoir_quota_ttl;
  public string $rule_name;

  public function __construct(shape(
    ?'fixed_rate' => ?Double,
    ?'interval' => ?NullableInteger,
    ?'reservoir_quota' => ?NullableInteger,
    ?'reservoir_quota_ttl' => ?Timestamp,
    ?'rule_name' => string,
  ) $s = shape()) {
    $this->fixed_rate = $s['fixed_rate'] ?? 0.0;
    $this->interval = $s['interval'] ?? 0;
    $this->reservoir_quota = $s['reservoir_quota'] ?? 0;
    $this->reservoir_quota_ttl = $s['reservoir_quota_ttl'] ?? 0;
    $this->rule_name = $s['rule_name'] ?? '';
  }
}

type SamplingTargetDocumentList = vec<SamplingTargetDocument>;

class Segment {
  public ?SegmentDocument $document;
  public ?SegmentId $id;

  public function __construct(shape(
    ?'document' => ?SegmentDocument,
    ?'id' => ?SegmentId,
  ) $s = shape()) {
    $this->document = $s['document'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

type SegmentDocument = string;

type SegmentId = string;

type SegmentList = vec<Segment>;

class Service {
  public string $account_id;
  public ?Histogram $duration_histogram;
  public ?EdgeList $edges;
  public ?Timestamp $end_time;
  public string $name;
  public ?ServiceNames $names;
  public ?NullableInteger $reference_id;
  public ?Histogram $response_time_histogram;
  public ?NullableBoolean $root;
  public ?Timestamp $start_time;
  public string $state;
  public ?ServiceStatistics $summary_statistics;
  public string $type;

  public function __construct(shape(
    ?'account_id' => string,
    ?'duration_histogram' => ?Histogram,
    ?'edges' => ?EdgeList,
    ?'end_time' => ?Timestamp,
    ?'name' => string,
    ?'names' => ?ServiceNames,
    ?'reference_id' => ?NullableInteger,
    ?'response_time_histogram' => ?Histogram,
    ?'root' => ?NullableBoolean,
    ?'start_time' => ?Timestamp,
    ?'state' => string,
    ?'summary_statistics' => ?ServiceStatistics,
    ?'type' => string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->duration_histogram = $s['duration_histogram'] ?? vec[];
    $this->edges = $s['edges'] ?? vec[];
    $this->end_time = $s['end_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->names = $s['names'] ?? vec[];
    $this->reference_id = $s['reference_id'] ?? 0;
    $this->response_time_histogram = $s['response_time_histogram'] ?? vec[];
    $this->root = $s['root'] ?? false;
    $this->start_time = $s['start_time'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->summary_statistics = $s['summary_statistics'] ?? null;
    $this->type = $s['type'] ?? '';
  }
}

class ServiceId {
  public string $account_id;
  public string $name;
  public ?ServiceNames $names;
  public string $type;

  public function __construct(shape(
    ?'account_id' => string,
    ?'name' => string,
    ?'names' => ?ServiceNames,
    ?'type' => string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->names = $s['names'] ?? vec[];
    $this->type = $s['type'] ?? '';
  }
}

type ServiceIds = vec<ServiceId>;

type ServiceList = vec<Service>;

type ServiceName = string;

type ServiceNames = vec<String>;

class ServiceStatistics {
  public ?ErrorStatistics $error_statistics;
  public ?FaultStatistics $fault_statistics;
  public ?NullableLong $ok_count;
  public ?NullableLong $total_count;
  public ?NullableDouble $total_response_time;

  public function __construct(shape(
    ?'error_statistics' => ?ErrorStatistics,
    ?'fault_statistics' => ?FaultStatistics,
    ?'ok_count' => ?NullableLong,
    ?'total_count' => ?NullableLong,
    ?'total_response_time' => ?NullableDouble,
  ) $s = shape()) {
    $this->error_statistics = $s['error_statistics'] ?? null;
    $this->fault_statistics = $s['fault_statistics'] ?? null;
    $this->ok_count = $s['ok_count'] ?? 0;
    $this->total_count = $s['total_count'] ?? 0;
    $this->total_response_time = $s['total_response_time'] ?? 0.0;
  }
}

type ServiceType = string;

type String = string;

class TelemetryRecord {
  public ?BackendConnectionErrors $backend_connection_errors;
  public ?NullableInteger $segments_received_count;
  public ?NullableInteger $segments_rejected_count;
  public ?NullableInteger $segments_sent_count;
  public ?NullableInteger $segments_spillover_count;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'backend_connection_errors' => ?BackendConnectionErrors,
    ?'segments_received_count' => ?NullableInteger,
    ?'segments_rejected_count' => ?NullableInteger,
    ?'segments_sent_count' => ?NullableInteger,
    ?'segments_spillover_count' => ?NullableInteger,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->backend_connection_errors = $s['backend_connection_errors'] ?? null;
    $this->segments_received_count = $s['segments_received_count'] ?? 0;
    $this->segments_rejected_count = $s['segments_rejected_count'] ?? 0;
    $this->segments_sent_count = $s['segments_sent_count'] ?? 0;
    $this->segments_spillover_count = $s['segments_spillover_count'] ?? 0;
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type TelemetryRecordList = vec<TelemetryRecord>;

class ThrottledException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TimeRangeType = string;

class TimeSeriesServiceStatistics {
  public ?EdgeStatistics $edge_summary_statistics;
  public ?Histogram $response_time_histogram;
  public ?ServiceStatistics $service_summary_statistics;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'edge_summary_statistics' => ?EdgeStatistics,
    ?'response_time_histogram' => ?Histogram,
    ?'service_summary_statistics' => ?ServiceStatistics,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->edge_summary_statistics = $s['edge_summary_statistics'] ?? null;
    $this->response_time_histogram = $s['response_time_histogram'] ?? vec[];
    $this->service_summary_statistics = $s['service_summary_statistics'] ?? null;
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type TimeSeriesServiceStatisticsList = vec<TimeSeriesServiceStatistics>;

type Timestamp = int;

class Trace {
  public ?NullableDouble $duration;
  public ?TraceId $id;
  public ?SegmentList $segments;

  public function __construct(shape(
    ?'duration' => ?NullableDouble,
    ?'id' => ?TraceId,
    ?'segments' => ?SegmentList,
  ) $s = shape()) {
    $this->duration = $s['duration'] ?? 0.0;
    $this->id = $s['id'] ?? '';
    $this->segments = $s['segments'] ?? vec[];
  }
}

type TraceAvailabilityZones = vec<AvailabilityZoneDetail>;

type TraceId = string;

type TraceIdList = vec<TraceId>;

type TraceInstanceIds = vec<InstanceIdDetail>;

type TraceList = vec<Trace>;

type TraceResourceARNs = vec<ResourceARNDetail>;

type TraceSegmentDocument = string;

type TraceSegmentDocumentList = vec<TraceSegmentDocument>;

class TraceSummary {
  public ?Annotations $annotations;
  public ?TraceAvailabilityZones $availability_zones;
  public ?NullableDouble $duration;
  public ?ServiceId $entry_point;
  public ?ErrorRootCauses $error_root_causes;
  public ?FaultRootCauses $fault_root_causes;
  public ?NullableBoolean $has_error;
  public ?NullableBoolean $has_fault;
  public ?NullableBoolean $has_throttle;
  public ?Http $http;
  public ?TraceId $id;
  public ?TraceInstanceIds $instance_ids;
  public ?NullableBoolean $is_partial;
  public ?Timestamp $matched_event_time;
  public ?TraceResourceARNs $resource_ar_ns;
  public ?NullableDouble $response_time;
  public ?ResponseTimeRootCauses $response_time_root_causes;
  public int $revision;
  public ?ServiceIds $service_ids;
  public ?TraceUsers $users;

  public function __construct(shape(
    ?'annotations' => ?Annotations,
    ?'availability_zones' => ?TraceAvailabilityZones,
    ?'duration' => ?NullableDouble,
    ?'entry_point' => ?ServiceId,
    ?'error_root_causes' => ?ErrorRootCauses,
    ?'fault_root_causes' => ?FaultRootCauses,
    ?'has_error' => ?NullableBoolean,
    ?'has_fault' => ?NullableBoolean,
    ?'has_throttle' => ?NullableBoolean,
    ?'http' => ?Http,
    ?'id' => ?TraceId,
    ?'instance_ids' => ?TraceInstanceIds,
    ?'is_partial' => ?NullableBoolean,
    ?'matched_event_time' => ?Timestamp,
    ?'resource_ar_ns' => ?TraceResourceARNs,
    ?'response_time' => ?NullableDouble,
    ?'response_time_root_causes' => ?ResponseTimeRootCauses,
    ?'revision' => int,
    ?'service_ids' => ?ServiceIds,
    ?'users' => ?TraceUsers,
  ) $s = shape()) {
    $this->annotations = $s['annotations'] ?? dict[];
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->duration = $s['duration'] ?? 0.0;
    $this->entry_point = $s['entry_point'] ?? null;
    $this->error_root_causes = $s['error_root_causes'] ?? vec[];
    $this->fault_root_causes = $s['fault_root_causes'] ?? vec[];
    $this->has_error = $s['has_error'] ?? false;
    $this->has_fault = $s['has_fault'] ?? false;
    $this->has_throttle = $s['has_throttle'] ?? false;
    $this->http = $s['http'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->instance_ids = $s['instance_ids'] ?? vec[];
    $this->is_partial = $s['is_partial'] ?? false;
    $this->matched_event_time = $s['matched_event_time'] ?? 0;
    $this->resource_ar_ns = $s['resource_ar_ns'] ?? vec[];
    $this->response_time = $s['response_time'] ?? 0.0;
    $this->response_time_root_causes = $s['response_time_root_causes'] ?? vec[];
    $this->revision = $s['revision'] ?? 0;
    $this->service_ids = $s['service_ids'] ?? vec[];
    $this->users = $s['users'] ?? vec[];
  }
}

type TraceSummaryList = vec<TraceSummary>;

class TraceUser {
  public ?ServiceIds $service_ids;
  public string $user_name;

  public function __construct(shape(
    ?'service_ids' => ?ServiceIds,
    ?'user_name' => string,
  ) $s = shape()) {
    $this->service_ids = $s['service_ids'] ?? vec[];
    $this->user_name = $s['user_name'] ?? '';
  }
}

type TraceUsers = vec<TraceUser>;

type URLPath = string;

class UnprocessedStatistics {
  public string $error_code;
  public string $message;
  public string $rule_name;

  public function __construct(shape(
    ?'error_code' => string,
    ?'message' => string,
    ?'rule_name' => string,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->rule_name = $s['rule_name'] ?? '';
  }
}

type UnprocessedStatisticsList = vec<UnprocessedStatistics>;

type UnprocessedTraceIdList = vec<TraceId>;

class UnprocessedTraceSegment {
  public string $error_code;
  public string $id;
  public string $message;

  public function __construct(shape(
    ?'error_code' => string,
    ?'id' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type UnprocessedTraceSegmentList = vec<UnprocessedTraceSegment>;

class UpdateGroupRequest {
  public ?FilterExpression $filter_expression;
  public ?GroupARN $group_arn;
  public ?GroupName $group_name;

  public function __construct(shape(
    ?'filter_expression' => ?FilterExpression,
    ?'group_arn' => ?GroupARN,
    ?'group_name' => ?GroupName,
  ) $s = shape()) {
    $this->filter_expression = $s['filter_expression'] ?? '';
    $this->group_arn = $s['group_arn'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
  }
}

class UpdateGroupResult {
  public ?Group $group;

  public function __construct(shape(
    ?'group' => ?Group,
  ) $s = shape()) {
    $this->group = $s['group'] ?? null;
  }
}

class UpdateSamplingRuleRequest {
  public ?SamplingRuleUpdate $sampling_rule_update;

  public function __construct(shape(
    ?'sampling_rule_update' => ?SamplingRuleUpdate,
  ) $s = shape()) {
    $this->sampling_rule_update = $s['sampling_rule_update'] ?? null;
  }
}

class UpdateSamplingRuleResult {
  public ?SamplingRuleRecord $sampling_rule_record;

  public function __construct(shape(
    ?'sampling_rule_record' => ?SamplingRuleRecord,
  ) $s = shape()) {
    $this->sampling_rule_record = $s['sampling_rule_record'] ?? null;
  }
}

class ValueWithServiceIds {
  public ?AnnotationValue $annotation_value;
  public ?ServiceIds $service_ids;

  public function __construct(shape(
    ?'annotation_value' => ?AnnotationValue,
    ?'service_ids' => ?ServiceIds,
  ) $s = shape()) {
    $this->annotation_value = $s['annotation_value'] ?? null;
    $this->service_ids = $s['service_ids'] ?? vec[];
  }
}

type ValuesWithServiceIds = vec<ValueWithServiceIds>;

type Version = int;

