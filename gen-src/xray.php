<?hh // strict
namespace slack\aws\xray;

interface XRay {
  public function BatchGetTraces(BatchGetTracesRequest): Awaitable<Errors\Result<BatchGetTracesResult>>;
  public function CreateGroup(CreateGroupRequest): Awaitable<Errors\Result<CreateGroupResult>>;
  public function CreateSamplingRule(CreateSamplingRuleRequest): Awaitable<Errors\Result<CreateSamplingRuleResult>>;
  public function DeleteGroup(DeleteGroupRequest): Awaitable<Errors\Result<DeleteGroupResult>>;
  public function DeleteSamplingRule(DeleteSamplingRuleRequest): Awaitable<Errors\Result<DeleteSamplingRuleResult>>;
  public function GetEncryptionConfig(GetEncryptionConfigRequest): Awaitable<Errors\Result<GetEncryptionConfigResult>>;
  public function GetGroup(GetGroupRequest): Awaitable<Errors\Result<GetGroupResult>>;
  public function GetGroups(GetGroupsRequest): Awaitable<Errors\Result<GetGroupsResult>>;
  public function GetSamplingRules(GetSamplingRulesRequest): Awaitable<Errors\Result<GetSamplingRulesResult>>;
  public function GetSamplingStatisticSummaries(GetSamplingStatisticSummariesRequest): Awaitable<Errors\Result<GetSamplingStatisticSummariesResult>>;
  public function GetSamplingTargets(GetSamplingTargetsRequest): Awaitable<Errors\Result<GetSamplingTargetsResult>>;
  public function GetServiceGraph(GetServiceGraphRequest): Awaitable<Errors\Result<GetServiceGraphResult>>;
  public function GetTimeSeriesServiceStatistics(GetTimeSeriesServiceStatisticsRequest): Awaitable<Errors\Result<GetTimeSeriesServiceStatisticsResult>>;
  public function GetTraceGraph(GetTraceGraphRequest): Awaitable<Errors\Result<GetTraceGraphResult>>;
  public function GetTraceSummaries(GetTraceSummariesRequest): Awaitable<Errors\Result<GetTraceSummariesResult>>;
  public function PutEncryptionConfig(PutEncryptionConfigRequest): Awaitable<Errors\Result<PutEncryptionConfigResult>>;
  public function PutTelemetryRecords(PutTelemetryRecordsRequest): Awaitable<Errors\Result<PutTelemetryRecordsResult>>;
  public function PutTraceSegments(PutTraceSegmentsRequest): Awaitable<Errors\Result<PutTraceSegmentsResult>>;
  public function UpdateGroup(UpdateGroupRequest): Awaitable<Errors\Result<UpdateGroupResult>>;
  public function UpdateSamplingRule(UpdateSamplingRuleRequest): Awaitable<Errors\Result<UpdateSamplingRuleResult>>;
}

class Alias {
  public string $name;
  public AliasNames $names;
  public string $type;

  public function __construct(shape(
  ?'name' => string,
  ?'names' => AliasNames,
  ?'type' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->names = $names ?? ;
    $this->type = $type ?? ;
  }
}

type AliasList = vec<Alias>;

type AliasNames = vec<String>;

type AnnotationKey = string;

class AnnotationValue {
  public NullableBoolean $boolean_value;
  public NullableDouble $number_value;
  public string $string_value;

  public function __construct(shape(
  ?'boolean_value' => NullableBoolean,
  ?'number_value' => NullableDouble,
  ?'string_value' => string,
  ) $s = shape()) {
    $this->boolean_value = $boolean_value ?? ;
    $this->number_value = $number_value ?? ;
    $this->string_value = $string_value ?? ;
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
    $this->name = $name ?? ;
  }
}

class BackendConnectionErrors {
  public NullableInteger $connection_refused_count;
  public NullableInteger $http_code_4_xx_count;
  public NullableInteger $http_code_5_xx_count;
  public NullableInteger $other_count;
  public NullableInteger $timeout_count;
  public NullableInteger $unknown_host_count;

  public function __construct(shape(
  ?'connection_refused_count' => NullableInteger,
  ?'http_code_4_xx_count' => NullableInteger,
  ?'http_code_5_xx_count' => NullableInteger,
  ?'other_count' => NullableInteger,
  ?'timeout_count' => NullableInteger,
  ?'unknown_host_count' => NullableInteger,
  ) $s = shape()) {
    $this->connection_refused_count = $connection_refused_count ?? ;
    $this->http_code_4_xx_count = $http_code_4_xx_count ?? ;
    $this->http_code_5_xx_count = $http_code_5_xx_count ?? ;
    $this->other_count = $other_count ?? ;
    $this->timeout_count = $timeout_count ?? ;
    $this->unknown_host_count = $unknown_host_count ?? ;
  }
}

class BatchGetTracesRequest {
  public string $next_token;
  public TraceIdList $trace_ids;

  public function __construct(shape(
  ?'next_token' => string,
  ?'trace_ids' => TraceIdList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->trace_ids = $trace_ids ?? ;
  }
}

class BatchGetTracesResult {
  public string $next_token;
  public TraceList $traces;
  public UnprocessedTraceIdList $unprocessed_trace_ids;

  public function __construct(shape(
  ?'next_token' => string,
  ?'traces' => TraceList,
  ?'unprocessed_trace_ids' => UnprocessedTraceIdList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->traces = $traces ?? ;
    $this->unprocessed_trace_ids = $unprocessed_trace_ids ?? ;
  }
}

type Boolean = bool;

type BorrowCount = int;

type ClientID = string;

class CreateGroupRequest {
  public FilterExpression $filter_expression;
  public GroupName $group_name;

  public function __construct(shape(
  ?'filter_expression' => FilterExpression,
  ?'group_name' => GroupName,
  ) $s = shape()) {
    $this->filter_expression = $filter_expression ?? "";
    $this->group_name = $group_name ?? "";
  }
}

class CreateGroupResult {
  public Group $group;

  public function __construct(shape(
  ?'group' => Group,
  ) $s = shape()) {
    $this->group = $group ?? null;
  }
}

class CreateSamplingRuleRequest {
  public SamplingRule $sampling_rule;

  public function __construct(shape(
  ?'sampling_rule' => SamplingRule,
  ) $s = shape()) {
    $this->sampling_rule = $sampling_rule ?? null;
  }
}

class CreateSamplingRuleResult {
  public SamplingRuleRecord $sampling_rule_record;

  public function __construct(shape(
  ?'sampling_rule_record' => SamplingRuleRecord,
  ) $s = shape()) {
    $this->sampling_rule_record = $sampling_rule_record ?? null;
  }
}

class DeleteGroupRequest {
  public GroupARN $group_arn;
  public GroupName $group_name;

  public function __construct(shape(
  ?'group_arn' => GroupARN,
  ?'group_name' => GroupName,
  ) $s = shape()) {
    $this->group_arn = $group_arn ?? "";
    $this->group_name = $group_name ?? "";
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
    $this->rule_arn = $rule_arn ?? ;
    $this->rule_name = $rule_name ?? "";
  }
}

class DeleteSamplingRuleResult {
  public SamplingRuleRecord $sampling_rule_record;

  public function __construct(shape(
  ?'sampling_rule_record' => SamplingRuleRecord,
  ) $s = shape()) {
    $this->sampling_rule_record = $sampling_rule_record ?? null;
  }
}

type Double = float;

type EC2InstanceId = string;

class Edge {
  public AliasList $aliases;
  public Timestamp $end_time;
  public NullableInteger $reference_id;
  public Histogram $response_time_histogram;
  public Timestamp $start_time;
  public EdgeStatistics $summary_statistics;

  public function __construct(shape(
  ?'aliases' => AliasList,
  ?'end_time' => Timestamp,
  ?'reference_id' => NullableInteger,
  ?'response_time_histogram' => Histogram,
  ?'start_time' => Timestamp,
  ?'summary_statistics' => EdgeStatistics,
  ) $s = shape()) {
    $this->aliases = $aliases ?? ;
    $this->end_time = $end_time ?? ;
    $this->reference_id = $reference_id ?? ;
    $this->response_time_histogram = $response_time_histogram ?? ;
    $this->start_time = $start_time ?? ;
    $this->summary_statistics = $summary_statistics ?? ;
  }
}

type EdgeList = vec<Edge>;

class EdgeStatistics {
  public ErrorStatistics $error_statistics;
  public FaultStatistics $fault_statistics;
  public NullableLong $ok_count;
  public NullableLong $total_count;
  public NullableDouble $total_response_time;

  public function __construct(shape(
  ?'error_statistics' => ErrorStatistics,
  ?'fault_statistics' => FaultStatistics,
  ?'ok_count' => NullableLong,
  ?'total_count' => NullableLong,
  ?'total_response_time' => NullableDouble,
  ) $s = shape()) {
    $this->error_statistics = $error_statistics ?? null;
    $this->fault_statistics = $fault_statistics ?? null;
    $this->ok_count = $ok_count ?? ;
    $this->total_count = $total_count ?? ;
    $this->total_response_time = $total_response_time ?? ;
  }
}

class EncryptionConfig {
  public string $key_id;
  public EncryptionStatus $status;
  public EncryptionType $type;

  public function __construct(shape(
  ?'key_id' => string,
  ?'status' => EncryptionStatus,
  ?'type' => EncryptionType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? ;
    $this->status = $status ?? ;
    $this->type = $type ?? ;
  }
}

type EncryptionKeyId = string;

type EncryptionStatus = string;

type EncryptionType = string;

type EntitySelectorExpression = string;

type ErrorMessage = string;

class ErrorRootCause {
  public NullableBoolean $client_impacting;
  public ErrorRootCauseServices $services;

  public function __construct(shape(
  ?'client_impacting' => NullableBoolean,
  ?'services' => ErrorRootCauseServices,
  ) $s = shape()) {
    $this->client_impacting = $client_impacting ?? ;
    $this->services = $services ?? ;
  }
}

class ErrorRootCauseEntity {
  public RootCauseExceptions $exceptions;
  public string $name;
  public NullableBoolean $remote;

  public function __construct(shape(
  ?'exceptions' => RootCauseExceptions,
  ?'name' => string,
  ?'remote' => NullableBoolean,
  ) $s = shape()) {
    $this->exceptions = $exceptions ?? ;
    $this->name = $name ?? ;
    $this->remote = $remote ?? ;
  }
}

type ErrorRootCauseEntityPath = vec<ErrorRootCauseEntity>;

class ErrorRootCauseService {
  public string $account_id;
  public ErrorRootCauseEntityPath $entity_path;
  public NullableBoolean $inferred;
  public string $name;
  public ServiceNames $names;
  public string $type;

  public function __construct(shape(
  ?'account_id' => string,
  ?'entity_path' => ErrorRootCauseEntityPath,
  ?'inferred' => NullableBoolean,
  ?'name' => string,
  ?'names' => ServiceNames,
  ?'type' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->entity_path = $entity_path ?? ;
    $this->inferred = $inferred ?? ;
    $this->name = $name ?? ;
    $this->names = $names ?? ;
    $this->type = $type ?? ;
  }
}

type ErrorRootCauseServices = vec<ErrorRootCauseService>;

type ErrorRootCauses = vec<ErrorRootCause>;

class ErrorStatistics {
  public NullableLong $other_count;
  public NullableLong $throttle_count;
  public NullableLong $total_count;

  public function __construct(shape(
  ?'other_count' => NullableLong,
  ?'throttle_count' => NullableLong,
  ?'total_count' => NullableLong,
  ) $s = shape()) {
    $this->other_count = $other_count ?? ;
    $this->throttle_count = $throttle_count ?? ;
    $this->total_count = $total_count ?? ;
  }
}

class FaultRootCause {
  public NullableBoolean $client_impacting;
  public FaultRootCauseServices $services;

  public function __construct(shape(
  ?'client_impacting' => NullableBoolean,
  ?'services' => FaultRootCauseServices,
  ) $s = shape()) {
    $this->client_impacting = $client_impacting ?? ;
    $this->services = $services ?? ;
  }
}

class FaultRootCauseEntity {
  public RootCauseExceptions $exceptions;
  public string $name;
  public NullableBoolean $remote;

  public function __construct(shape(
  ?'exceptions' => RootCauseExceptions,
  ?'name' => string,
  ?'remote' => NullableBoolean,
  ) $s = shape()) {
    $this->exceptions = $exceptions ?? ;
    $this->name = $name ?? ;
    $this->remote = $remote ?? ;
  }
}

type FaultRootCauseEntityPath = vec<FaultRootCauseEntity>;

class FaultRootCauseService {
  public string $account_id;
  public FaultRootCauseEntityPath $entity_path;
  public NullableBoolean $inferred;
  public string $name;
  public ServiceNames $names;
  public string $type;

  public function __construct(shape(
  ?'account_id' => string,
  ?'entity_path' => FaultRootCauseEntityPath,
  ?'inferred' => NullableBoolean,
  ?'name' => string,
  ?'names' => ServiceNames,
  ?'type' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->entity_path = $entity_path ?? ;
    $this->inferred = $inferred ?? ;
    $this->name = $name ?? ;
    $this->names = $names ?? ;
    $this->type = $type ?? ;
  }
}

type FaultRootCauseServices = vec<FaultRootCauseService>;

type FaultRootCauses = vec<FaultRootCause>;

class FaultStatistics {
  public NullableLong $other_count;
  public NullableLong $total_count;

  public function __construct(shape(
  ?'other_count' => NullableLong,
  ?'total_count' => NullableLong,
  ) $s = shape()) {
    $this->other_count = $other_count ?? ;
    $this->total_count = $total_count ?? ;
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
  public EncryptionConfig $encryption_config;

  public function __construct(shape(
  ?'encryption_config' => EncryptionConfig,
  ) $s = shape()) {
    $this->encryption_config = $encryption_config ?? null;
  }
}

class GetGroupRequest {
  public GroupARN $group_arn;
  public GroupName $group_name;

  public function __construct(shape(
  ?'group_arn' => GroupARN,
  ?'group_name' => GroupName,
  ) $s = shape()) {
    $this->group_arn = $group_arn ?? "";
    $this->group_name = $group_name ?? "";
  }
}

class GetGroupResult {
  public Group $group;

  public function __construct(shape(
  ?'group' => Group,
  ) $s = shape()) {
    $this->group = $group ?? null;
  }
}

type GetGroupsNextToken = string;

class GetGroupsRequest {
  public GetGroupsNextToken $next_token;

  public function __construct(shape(
  ?'next_token' => GetGroupsNextToken,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
  }
}

class GetGroupsResult {
  public GroupSummaryList $groups;
  public string $next_token;

  public function __construct(shape(
  ?'groups' => GroupSummaryList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->groups = $groups ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class GetSamplingRulesRequest {
  public string $next_token;

  public function __construct(shape(
  ?'next_token' => string,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
  }
}

class GetSamplingRulesResult {
  public string $next_token;
  public SamplingRuleRecordList $sampling_rule_records;

  public function __construct(shape(
  ?'next_token' => string,
  ?'sampling_rule_records' => SamplingRuleRecordList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->sampling_rule_records = $sampling_rule_records ?? ;
  }
}

class GetSamplingStatisticSummariesRequest {
  public string $next_token;

  public function __construct(shape(
  ?'next_token' => string,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
  }
}

class GetSamplingStatisticSummariesResult {
  public string $next_token;
  public SamplingStatisticSummaryList $sampling_statistic_summaries;

  public function __construct(shape(
  ?'next_token' => string,
  ?'sampling_statistic_summaries' => SamplingStatisticSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->sampling_statistic_summaries = $sampling_statistic_summaries ?? ;
  }
}

class GetSamplingTargetsRequest {
  public SamplingStatisticsDocumentList $sampling_statistics_documents;

  public function __construct(shape(
  ?'sampling_statistics_documents' => SamplingStatisticsDocumentList,
  ) $s = shape()) {
    $this->sampling_statistics_documents = $sampling_statistics_documents ?? ;
  }
}

class GetSamplingTargetsResult {
  public Timestamp $last_rule_modification;
  public SamplingTargetDocumentList $sampling_target_documents;
  public UnprocessedStatisticsList $unprocessed_statistics;

  public function __construct(shape(
  ?'last_rule_modification' => Timestamp,
  ?'sampling_target_documents' => SamplingTargetDocumentList,
  ?'unprocessed_statistics' => UnprocessedStatisticsList,
  ) $s = shape()) {
    $this->last_rule_modification = $last_rule_modification ?? ;
    $this->sampling_target_documents = $sampling_target_documents ?? ;
    $this->unprocessed_statistics = $unprocessed_statistics ?? null;
  }
}

class GetServiceGraphRequest {
  public Timestamp $end_time;
  public GroupARN $group_arn;
  public GroupName $group_name;
  public string $next_token;
  public Timestamp $start_time;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'group_arn' => GroupARN,
  ?'group_name' => GroupName,
  ?'next_token' => string,
  ?'start_time' => Timestamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->group_arn = $group_arn ?? "";
    $this->group_name = $group_name ?? "";
    $this->next_token = $next_token ?? ;
    $this->start_time = $start_time ?? ;
  }
}

class GetServiceGraphResult {
  public boolean $contains_old_group_versions;
  public Timestamp $end_time;
  public string $next_token;
  public ServiceList $services;
  public Timestamp $start_time;

  public function __construct(shape(
  ?'contains_old_group_versions' => boolean,
  ?'end_time' => Timestamp,
  ?'next_token' => string,
  ?'services' => ServiceList,
  ?'start_time' => Timestamp,
  ) $s = shape()) {
    $this->contains_old_group_versions = $contains_old_group_versions ?? ;
    $this->end_time = $end_time ?? ;
    $this->next_token = $next_token ?? ;
    $this->services = $services ?? ;
    $this->start_time = $start_time ?? ;
  }
}

class GetTimeSeriesServiceStatisticsRequest {
  public Timestamp $end_time;
  public EntitySelectorExpression $entity_selector_expression;
  public GroupARN $group_arn;
  public GroupName $group_name;
  public string $next_token;
  public NullableInteger $period;
  public Timestamp $start_time;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'entity_selector_expression' => EntitySelectorExpression,
  ?'group_arn' => GroupARN,
  ?'group_name' => GroupName,
  ?'next_token' => string,
  ?'period' => NullableInteger,
  ?'start_time' => Timestamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->entity_selector_expression = $entity_selector_expression ?? "";
    $this->group_arn = $group_arn ?? "";
    $this->group_name = $group_name ?? "";
    $this->next_token = $next_token ?? ;
    $this->period = $period ?? ;
    $this->start_time = $start_time ?? ;
  }
}

class GetTimeSeriesServiceStatisticsResult {
  public boolean $contains_old_group_versions;
  public string $next_token;
  public TimeSeriesServiceStatisticsList $time_series_service_statistics;

  public function __construct(shape(
  ?'contains_old_group_versions' => boolean,
  ?'next_token' => string,
  ?'time_series_service_statistics' => TimeSeriesServiceStatisticsList,
  ) $s = shape()) {
    $this->contains_old_group_versions = $contains_old_group_versions ?? ;
    $this->next_token = $next_token ?? ;
    $this->time_series_service_statistics = $time_series_service_statistics ?? null;
  }
}

class GetTraceGraphRequest {
  public string $next_token;
  public TraceIdList $trace_ids;

  public function __construct(shape(
  ?'next_token' => string,
  ?'trace_ids' => TraceIdList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->trace_ids = $trace_ids ?? ;
  }
}

class GetTraceGraphResult {
  public string $next_token;
  public ServiceList $services;

  public function __construct(shape(
  ?'next_token' => string,
  ?'services' => ServiceList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->services = $services ?? ;
  }
}

class GetTraceSummariesRequest {
  public Timestamp $end_time;
  public FilterExpression $filter_expression;
  public string $next_token;
  public NullableBoolean $sampling;
  public SamplingStrategy $sampling_strategy;
  public Timestamp $start_time;
  public TimeRangeType $time_range_type;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'filter_expression' => FilterExpression,
  ?'next_token' => string,
  ?'sampling' => NullableBoolean,
  ?'sampling_strategy' => SamplingStrategy,
  ?'start_time' => Timestamp,
  ?'time_range_type' => TimeRangeType,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->filter_expression = $filter_expression ?? "";
    $this->next_token = $next_token ?? ;
    $this->sampling = $sampling ?? ;
    $this->sampling_strategy = $sampling_strategy ?? null;
    $this->start_time = $start_time ?? ;
    $this->time_range_type = $time_range_type ?? "";
  }
}

class GetTraceSummariesResult {
  public Timestamp $approximate_time;
  public string $next_token;
  public TraceSummaryList $trace_summaries;
  public NullableLong $traces_processed_count;

  public function __construct(shape(
  ?'approximate_time' => Timestamp,
  ?'next_token' => string,
  ?'trace_summaries' => TraceSummaryList,
  ?'traces_processed_count' => NullableLong,
  ) $s = shape()) {
    $this->approximate_time = $approximate_time ?? ;
    $this->next_token = $next_token ?? ;
    $this->trace_summaries = $trace_summaries ?? ;
    $this->traces_processed_count = $traces_processed_count ?? ;
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
    $this->filter_expression = $filter_expression ?? "";
    $this->group_arn = $group_arn ?? "";
    $this->group_name = $group_name ?? "";
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
    $this->filter_expression = $filter_expression ?? "";
    $this->group_arn = $group_arn ?? "";
    $this->group_name = $group_name ?? "";
  }
}

type GroupSummaryList = vec<GroupSummary>;

type HTTPMethod = string;

type Histogram = vec<HistogramEntry>;

class HistogramEntry {
  public int $count;
  public Double $value;

  public function __construct(shape(
  ?'count' => int,
  ?'value' => Double,
  ) $s = shape()) {
    $this->count = $count ?? ;
    $this->value = $value ?? ;
  }
}

type Host = string;

type Hostname = string;

class Http {
  public string $client_ip;
  public string $http_method;
  public NullableInteger $http_status;
  public string $http_url;
  public string $user_agent;

  public function __construct(shape(
  ?'client_ip' => string,
  ?'http_method' => string,
  ?'http_status' => NullableInteger,
  ?'http_url' => string,
  ?'user_agent' => string,
  ) $s = shape()) {
    $this->client_ip = $client_ip ?? ;
    $this->http_method = $http_method ?? ;
    $this->http_status = $http_status ?? ;
    $this->http_url = $http_url ?? ;
    $this->user_agent = $user_agent ?? ;
  }
}

class InstanceIdDetail {
  public string $id;

  public function __construct(shape(
  ?'id' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

type Integer = int;

class InvalidRequestException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type NullableBoolean = bool;

type NullableDouble = float;

type NullableInteger = int;

type NullableLong = int;

type Priority = int;

class PutEncryptionConfigRequest {
  public EncryptionKeyId $key_id;
  public EncryptionType $type;

  public function __construct(shape(
  ?'key_id' => EncryptionKeyId,
  ?'type' => EncryptionType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? ;
    $this->type = $type ?? ;
  }
}

class PutEncryptionConfigResult {
  public EncryptionConfig $encryption_config;

  public function __construct(shape(
  ?'encryption_config' => EncryptionConfig,
  ) $s = shape()) {
    $this->encryption_config = $encryption_config ?? null;
  }
}

class PutTelemetryRecordsRequest {
  public EC2InstanceId $ec_2_instance_id;
  public Hostname $hostname;
  public ResourceARN $resource_arn;
  public TelemetryRecordList $telemetry_records;

  public function __construct(shape(
  ?'ec_2_instance_id' => EC2InstanceId,
  ?'hostname' => Hostname,
  ?'resource_arn' => ResourceARN,
  ?'telemetry_records' => TelemetryRecordList,
  ) $s = shape()) {
    $this->ec_2_instance_id = $ec_2_instance_id ?? "";
    $this->hostname = $hostname ?? "";
    $this->resource_arn = $resource_arn ?? "";
    $this->telemetry_records = $telemetry_records ?? ;
  }
}

class PutTelemetryRecordsResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutTraceSegmentsRequest {
  public TraceSegmentDocumentList $trace_segment_documents;

  public function __construct(shape(
  ?'trace_segment_documents' => TraceSegmentDocumentList,
  ) $s = shape()) {
    $this->trace_segment_documents = $trace_segment_documents ?? ;
  }
}

class PutTraceSegmentsResult {
  public UnprocessedTraceSegmentList $unprocessed_trace_segments;

  public function __construct(shape(
  ?'unprocessed_trace_segments' => UnprocessedTraceSegmentList,
  ) $s = shape()) {
    $this->unprocessed_trace_segments = $unprocessed_trace_segments ?? ;
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
    $this->arn = $arn ?? ;
  }
}

class ResponseTimeRootCause {
  public NullableBoolean $client_impacting;
  public ResponseTimeRootCauseServices $services;

  public function __construct(shape(
  ?'client_impacting' => NullableBoolean,
  ?'services' => ResponseTimeRootCauseServices,
  ) $s = shape()) {
    $this->client_impacting = $client_impacting ?? ;
    $this->services = $services ?? ;
  }
}

class ResponseTimeRootCauseEntity {
  public NullableDouble $coverage;
  public string $name;
  public NullableBoolean $remote;

  public function __construct(shape(
  ?'coverage' => NullableDouble,
  ?'name' => string,
  ?'remote' => NullableBoolean,
  ) $s = shape()) {
    $this->coverage = $coverage ?? ;
    $this->name = $name ?? ;
    $this->remote = $remote ?? ;
  }
}

type ResponseTimeRootCauseEntityPath = vec<ResponseTimeRootCauseEntity>;

class ResponseTimeRootCauseService {
  public string $account_id;
  public ResponseTimeRootCauseEntityPath $entity_path;
  public NullableBoolean $inferred;
  public string $name;
  public ServiceNames $names;
  public string $type;

  public function __construct(shape(
  ?'account_id' => string,
  ?'entity_path' => ResponseTimeRootCauseEntityPath,
  ?'inferred' => NullableBoolean,
  ?'name' => string,
  ?'names' => ServiceNames,
  ?'type' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->entity_path = $entity_path ?? ;
    $this->inferred = $inferred ?? ;
    $this->name = $name ?? ;
    $this->names = $names ?? ;
    $this->type = $type ?? ;
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
    $this->message = $message ?? ;
    $this->name = $name ?? ;
  }
}

type RootCauseExceptions = vec<RootCauseException>;

class RuleLimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type RuleName = string;

type SampledCount = int;

class SamplingRule {
  public AttributeMap $attributes;
  public FixedRate $fixed_rate;
  public HTTPMethod $http_method;
  public Host $host;
  public Priority $priority;
  public ReservoirSize $reservoir_size;
  public ResourceARN $resource_arn;
  public string $rule_arn;
  public RuleName $rule_name;
  public ServiceName $service_name;
  public ServiceType $service_type;
  public URLPath $url_path;
  public Version $version;

  public function __construct(shape(
  ?'attributes' => AttributeMap,
  ?'fixed_rate' => FixedRate,
  ?'http_method' => HTTPMethod,
  ?'host' => Host,
  ?'priority' => Priority,
  ?'reservoir_size' => ReservoirSize,
  ?'resource_arn' => ResourceARN,
  ?'rule_arn' => string,
  ?'rule_name' => RuleName,
  ?'service_name' => ServiceName,
  ?'service_type' => ServiceType,
  ?'url_path' => URLPath,
  ?'version' => Version,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->fixed_rate = $fixed_rate ?? 0.0;
    $this->http_method = $http_method ?? "";
    $this->host = $host ?? "";
    $this->priority = $priority ?? 0;
    $this->reservoir_size = $reservoir_size ?? 0;
    $this->resource_arn = $resource_arn ?? "";
    $this->rule_arn = $rule_arn ?? ;
    $this->rule_name = $rule_name ?? "";
    $this->service_name = $service_name ?? "";
    $this->service_type = $service_type ?? "";
    $this->url_path = $url_path ?? "";
    $this->version = $version ?? 0;
  }
}

class SamplingRuleRecord {
  public Timestamp $created_at;
  public Timestamp $modified_at;
  public SamplingRule $sampling_rule;

  public function __construct(shape(
  ?'created_at' => Timestamp,
  ?'modified_at' => Timestamp,
  ?'sampling_rule' => SamplingRule,
  ) $s = shape()) {
    $this->created_at = $created_at ?? ;
    $this->modified_at = $modified_at ?? ;
    $this->sampling_rule = $sampling_rule ?? null;
  }
}

type SamplingRuleRecordList = vec<SamplingRuleRecord>;

class SamplingRuleUpdate {
  public AttributeMap $attributes;
  public NullableDouble $fixed_rate;
  public HTTPMethod $http_method;
  public Host $host;
  public NullableInteger $priority;
  public NullableInteger $reservoir_size;
  public ResourceARN $resource_arn;
  public string $rule_arn;
  public RuleName $rule_name;
  public ServiceName $service_name;
  public ServiceType $service_type;
  public URLPath $url_path;

  public function __construct(shape(
  ?'attributes' => AttributeMap,
  ?'fixed_rate' => NullableDouble,
  ?'http_method' => HTTPMethod,
  ?'host' => Host,
  ?'priority' => NullableInteger,
  ?'reservoir_size' => NullableInteger,
  ?'resource_arn' => ResourceARN,
  ?'rule_arn' => string,
  ?'rule_name' => RuleName,
  ?'service_name' => ServiceName,
  ?'service_type' => ServiceType,
  ?'url_path' => URLPath,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->fixed_rate = $fixed_rate ?? 0.0;
    $this->http_method = $http_method ?? "";
    $this->host = $host ?? "";
    $this->priority = $priority ?? 0;
    $this->reservoir_size = $reservoir_size ?? 0;
    $this->resource_arn = $resource_arn ?? "";
    $this->rule_arn = $rule_arn ?? ;
    $this->rule_name = $rule_name ?? "";
    $this->service_name = $service_name ?? "";
    $this->service_type = $service_type ?? "";
    $this->url_path = $url_path ?? "";
  }
}

class SamplingStatisticSummary {
  public int $borrow_count;
  public int $request_count;
  public string $rule_name;
  public int $sampled_count;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'borrow_count' => int,
  ?'request_count' => int,
  ?'rule_name' => string,
  ?'sampled_count' => int,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->borrow_count = $borrow_count ?? 0;
    $this->request_count = $request_count ?? 0;
    $this->rule_name = $rule_name ?? "";
    $this->sampled_count = $sampled_count ?? 0;
    $this->timestamp = $timestamp ?? 0;
  }
}

type SamplingStatisticSummaryList = vec<SamplingStatisticSummary>;

class SamplingStatisticsDocument {
  public BorrowCount $borrow_count;
  public ClientID $client_id;
  public RequestCount $request_count;
  public RuleName $rule_name;
  public SampledCount $sampled_count;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'borrow_count' => BorrowCount,
  ?'client_id' => ClientID,
  ?'request_count' => RequestCount,
  ?'rule_name' => RuleName,
  ?'sampled_count' => SampledCount,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->borrow_count = $borrow_count ?? 0;
    $this->client_id = $client_id ?? "";
    $this->request_count = $request_count ?? 0;
    $this->rule_name = $rule_name ?? "";
    $this->sampled_count = $sampled_count ?? 0;
    $this->timestamp = $timestamp ?? 0;
  }
}

type SamplingStatisticsDocumentList = vec<SamplingStatisticsDocument>;

class SamplingStrategy {
  public SamplingStrategyName $name;
  public NullableDouble $value;

  public function __construct(shape(
  ?'name' => SamplingStrategyName,
  ?'value' => NullableDouble,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->value = $value ?? ;
  }
}

type SamplingStrategyName = string;

class SamplingTargetDocument {
  public Double $fixed_rate;
  public NullableInteger $interval;
  public NullableInteger $reservoir_quota;
  public Timestamp $reservoir_quota_ttl;
  public string $rule_name;

  public function __construct(shape(
  ?'fixed_rate' => Double,
  ?'interval' => NullableInteger,
  ?'reservoir_quota' => NullableInteger,
  ?'reservoir_quota_ttl' => Timestamp,
  ?'rule_name' => string,
  ) $s = shape()) {
    $this->fixed_rate = $fixed_rate ?? 0.0;
    $this->interval = $interval ?? ;
    $this->reservoir_quota = $reservoir_quota ?? ;
    $this->reservoir_quota_ttl = $reservoir_quota_ttl ?? ;
    $this->rule_name = $rule_name ?? "";
  }
}

type SamplingTargetDocumentList = vec<SamplingTargetDocument>;

class Segment {
  public SegmentDocument $document;
  public SegmentId $id;

  public function __construct(shape(
  ?'document' => SegmentDocument,
  ?'id' => SegmentId,
  ) $s = shape()) {
    $this->document = $document ?? ;
    $this->id = $id ?? ;
  }
}

type SegmentDocument = string;

type SegmentId = string;

type SegmentList = vec<Segment>;

class Service {
  public string $account_id;
  public Histogram $duration_histogram;
  public EdgeList $edges;
  public Timestamp $end_time;
  public string $name;
  public ServiceNames $names;
  public NullableInteger $reference_id;
  public Histogram $response_time_histogram;
  public NullableBoolean $root;
  public Timestamp $start_time;
  public string $state;
  public ServiceStatistics $summary_statistics;
  public string $type;

  public function __construct(shape(
  ?'account_id' => string,
  ?'duration_histogram' => Histogram,
  ?'edges' => EdgeList,
  ?'end_time' => Timestamp,
  ?'name' => string,
  ?'names' => ServiceNames,
  ?'reference_id' => NullableInteger,
  ?'response_time_histogram' => Histogram,
  ?'root' => NullableBoolean,
  ?'start_time' => Timestamp,
  ?'state' => string,
  ?'summary_statistics' => ServiceStatistics,
  ?'type' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->duration_histogram = $duration_histogram ?? ;
    $this->edges = $edges ?? ;
    $this->end_time = $end_time ?? ;
    $this->name = $name ?? ;
    $this->names = $names ?? ;
    $this->reference_id = $reference_id ?? ;
    $this->response_time_histogram = $response_time_histogram ?? ;
    $this->root = $root ?? ;
    $this->start_time = $start_time ?? ;
    $this->state = $state ?? ;
    $this->summary_statistics = $summary_statistics ?? ;
    $this->type = $type ?? ;
  }
}

class ServiceId {
  public string $account_id;
  public string $name;
  public ServiceNames $names;
  public string $type;

  public function __construct(shape(
  ?'account_id' => string,
  ?'name' => string,
  ?'names' => ServiceNames,
  ?'type' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->name = $name ?? ;
    $this->names = $names ?? ;
    $this->type = $type ?? ;
  }
}

type ServiceIds = vec<ServiceId>;

type ServiceList = vec<Service>;

type ServiceName = string;

type ServiceNames = vec<String>;

class ServiceStatistics {
  public ErrorStatistics $error_statistics;
  public FaultStatistics $fault_statistics;
  public NullableLong $ok_count;
  public NullableLong $total_count;
  public NullableDouble $total_response_time;

  public function __construct(shape(
  ?'error_statistics' => ErrorStatistics,
  ?'fault_statistics' => FaultStatistics,
  ?'ok_count' => NullableLong,
  ?'total_count' => NullableLong,
  ?'total_response_time' => NullableDouble,
  ) $s = shape()) {
    $this->error_statistics = $error_statistics ?? null;
    $this->fault_statistics = $fault_statistics ?? null;
    $this->ok_count = $ok_count ?? ;
    $this->total_count = $total_count ?? ;
    $this->total_response_time = $total_response_time ?? ;
  }
}

type ServiceType = string;

type String = string;

class TelemetryRecord {
  public BackendConnectionErrors $backend_connection_errors;
  public NullableInteger $segments_received_count;
  public NullableInteger $segments_rejected_count;
  public NullableInteger $segments_sent_count;
  public NullableInteger $segments_spillover_count;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'backend_connection_errors' => BackendConnectionErrors,
  ?'segments_received_count' => NullableInteger,
  ?'segments_rejected_count' => NullableInteger,
  ?'segments_sent_count' => NullableInteger,
  ?'segments_spillover_count' => NullableInteger,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->backend_connection_errors = $backend_connection_errors ?? null;
    $this->segments_received_count = $segments_received_count ?? ;
    $this->segments_rejected_count = $segments_rejected_count ?? ;
    $this->segments_sent_count = $segments_sent_count ?? ;
    $this->segments_spillover_count = $segments_spillover_count ?? ;
    $this->timestamp = $timestamp ?? 0;
  }
}

type TelemetryRecordList = vec<TelemetryRecord>;

class ThrottledException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type TimeRangeType = string;

class TimeSeriesServiceStatistics {
  public EdgeStatistics $edge_summary_statistics;
  public Histogram $response_time_histogram;
  public ServiceStatistics $service_summary_statistics;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'edge_summary_statistics' => EdgeStatistics,
  ?'response_time_histogram' => Histogram,
  ?'service_summary_statistics' => ServiceStatistics,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->edge_summary_statistics = $edge_summary_statistics ?? ;
    $this->response_time_histogram = $response_time_histogram ?? ;
    $this->service_summary_statistics = $service_summary_statistics ?? ;
    $this->timestamp = $timestamp ?? 0;
  }
}

type TimeSeriesServiceStatisticsList = vec<TimeSeriesServiceStatistics>;

type Timestamp = int;

class Trace {
  public NullableDouble $duration;
  public TraceId $id;
  public SegmentList $segments;

  public function __construct(shape(
  ?'duration' => NullableDouble,
  ?'id' => TraceId,
  ?'segments' => SegmentList,
  ) $s = shape()) {
    $this->duration = $duration ?? ;
    $this->id = $id ?? ;
    $this->segments = $segments ?? ;
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
  public Annotations $annotations;
  public TraceAvailabilityZones $availability_zones;
  public NullableDouble $duration;
  public ServiceId $entry_point;
  public ErrorRootCauses $error_root_causes;
  public FaultRootCauses $fault_root_causes;
  public NullableBoolean $has_error;
  public NullableBoolean $has_fault;
  public NullableBoolean $has_throttle;
  public Http $http;
  public TraceId $id;
  public TraceInstanceIds $instance_ids;
  public NullableBoolean $is_partial;
  public Timestamp $matched_event_time;
  public TraceResourceARNs $resource_ar_ns;
  public NullableDouble $response_time;
  public ResponseTimeRootCauses $response_time_root_causes;
  public int $revision;
  public ServiceIds $service_ids;
  public TraceUsers $users;

  public function __construct(shape(
  ?'annotations' => Annotations,
  ?'availability_zones' => TraceAvailabilityZones,
  ?'duration' => NullableDouble,
  ?'entry_point' => ServiceId,
  ?'error_root_causes' => ErrorRootCauses,
  ?'fault_root_causes' => FaultRootCauses,
  ?'has_error' => NullableBoolean,
  ?'has_fault' => NullableBoolean,
  ?'has_throttle' => NullableBoolean,
  ?'http' => Http,
  ?'id' => TraceId,
  ?'instance_ids' => TraceInstanceIds,
  ?'is_partial' => NullableBoolean,
  ?'matched_event_time' => Timestamp,
  ?'resource_ar_ns' => TraceResourceARNs,
  ?'response_time' => NullableDouble,
  ?'response_time_root_causes' => ResponseTimeRootCauses,
  ?'revision' => int,
  ?'service_ids' => ServiceIds,
  ?'users' => TraceUsers,
  ) $s = shape()) {
    $this->annotations = $annotations ?? [];
    $this->availability_zones = $availability_zones ?? ;
    $this->duration = $duration ?? ;
    $this->entry_point = $entry_point ?? ;
    $this->error_root_causes = $error_root_causes ?? [];
    $this->fault_root_causes = $fault_root_causes ?? [];
    $this->has_error = $has_error ?? ;
    $this->has_fault = $has_fault ?? ;
    $this->has_throttle = $has_throttle ?? ;
    $this->http = $http ?? null;
    $this->id = $id ?? ;
    $this->instance_ids = $instance_ids ?? ;
    $this->is_partial = $is_partial ?? ;
    $this->matched_event_time = $matched_event_time ?? ;
    $this->resource_ar_ns = $resource_ar_ns ?? ;
    $this->response_time = $response_time ?? ;
    $this->response_time_root_causes = $response_time_root_causes ?? [];
    $this->revision = $revision ?? ;
    $this->service_ids = $service_ids ?? [];
    $this->users = $users ?? ;
  }
}

type TraceSummaryList = vec<TraceSummary>;

class TraceUser {
  public ServiceIds $service_ids;
  public string $user_name;

  public function __construct(shape(
  ?'service_ids' => ServiceIds,
  ?'user_name' => string,
  ) $s = shape()) {
    $this->service_ids = $service_ids ?? [];
    $this->user_name = $user_name ?? ;
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
    $this->error_code = $error_code ?? ;
    $this->message = $message ?? ;
    $this->rule_name = $rule_name ?? "";
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
    $this->error_code = $error_code ?? ;
    $this->id = $id ?? ;
    $this->message = $message ?? ;
  }
}

type UnprocessedTraceSegmentList = vec<UnprocessedTraceSegment>;

class UpdateGroupRequest {
  public FilterExpression $filter_expression;
  public GroupARN $group_arn;
  public GroupName $group_name;

  public function __construct(shape(
  ?'filter_expression' => FilterExpression,
  ?'group_arn' => GroupARN,
  ?'group_name' => GroupName,
  ) $s = shape()) {
    $this->filter_expression = $filter_expression ?? "";
    $this->group_arn = $group_arn ?? "";
    $this->group_name = $group_name ?? "";
  }
}

class UpdateGroupResult {
  public Group $group;

  public function __construct(shape(
  ?'group' => Group,
  ) $s = shape()) {
    $this->group = $group ?? null;
  }
}

class UpdateSamplingRuleRequest {
  public SamplingRuleUpdate $sampling_rule_update;

  public function __construct(shape(
  ?'sampling_rule_update' => SamplingRuleUpdate,
  ) $s = shape()) {
    $this->sampling_rule_update = $sampling_rule_update ?? null;
  }
}

class UpdateSamplingRuleResult {
  public SamplingRuleRecord $sampling_rule_record;

  public function __construct(shape(
  ?'sampling_rule_record' => SamplingRuleRecord,
  ) $s = shape()) {
    $this->sampling_rule_record = $sampling_rule_record ?? null;
  }
}

class ValueWithServiceIds {
  public AnnotationValue $annotation_value;
  public ServiceIds $service_ids;

  public function __construct(shape(
  ?'annotation_value' => AnnotationValue,
  ?'service_ids' => ServiceIds,
  ) $s = shape()) {
    $this->annotation_value = $annotation_value ?? null;
    $this->service_ids = $service_ids ?? [];
  }
}

type ValuesWithServiceIds = vec<ValueWithServiceIds>;

type Version = int;

