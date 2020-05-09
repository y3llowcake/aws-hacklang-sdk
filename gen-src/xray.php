<?hh // strict
namespace slack\aws\xray;

interface XRay {
  public function BatchGetTraces(BatchGetTracesRequest) Awaitable<Errors\Result<BatchGetTracesResult>>;
  public function CreateGroup(CreateGroupRequest) Awaitable<Errors\Result<CreateGroupResult>>;
  public function CreateSamplingRule(CreateSamplingRuleRequest) Awaitable<Errors\Result<CreateSamplingRuleResult>>;
  public function DeleteGroup(DeleteGroupRequest) Awaitable<Errors\Result<DeleteGroupResult>>;
  public function DeleteSamplingRule(DeleteSamplingRuleRequest) Awaitable<Errors\Result<DeleteSamplingRuleResult>>;
  public function GetEncryptionConfig(GetEncryptionConfigRequest) Awaitable<Errors\Result<GetEncryptionConfigResult>>;
  public function GetGroup(GetGroupRequest) Awaitable<Errors\Result<GetGroupResult>>;
  public function GetGroups(GetGroupsRequest) Awaitable<Errors\Result<GetGroupsResult>>;
  public function GetSamplingRules(GetSamplingRulesRequest) Awaitable<Errors\Result<GetSamplingRulesResult>>;
  public function GetSamplingStatisticSummaries(GetSamplingStatisticSummariesRequest) Awaitable<Errors\Result<GetSamplingStatisticSummariesResult>>;
  public function GetSamplingTargets(GetSamplingTargetsRequest) Awaitable<Errors\Result<GetSamplingTargetsResult>>;
  public function GetServiceGraph(GetServiceGraphRequest) Awaitable<Errors\Result<GetServiceGraphResult>>;
  public function GetTimeSeriesServiceStatistics(GetTimeSeriesServiceStatisticsRequest) Awaitable<Errors\Result<GetTimeSeriesServiceStatisticsResult>>;
  public function GetTraceGraph(GetTraceGraphRequest) Awaitable<Errors\Result<GetTraceGraphResult>>;
  public function GetTraceSummaries(GetTraceSummariesRequest) Awaitable<Errors\Result<GetTraceSummariesResult>>;
  public function PutEncryptionConfig(PutEncryptionConfigRequest) Awaitable<Errors\Result<PutEncryptionConfigResult>>;
  public function PutTelemetryRecords(PutTelemetryRecordsRequest) Awaitable<Errors\Result<PutTelemetryRecordsResult>>;
  public function PutTraceSegments(PutTraceSegmentsRequest) Awaitable<Errors\Result<PutTraceSegmentsResult>>;
  public function UpdateGroup(UpdateGroupRequest) Awaitable<Errors\Result<UpdateGroupResult>>;
  public function UpdateSamplingRule(UpdateSamplingRuleRequest) Awaitable<Errors\Result<UpdateSamplingRuleResult>>;
}

class Alias {
  public string $name;
  public AliasNames $names;
  public string $type;
}

class AliasList {
}

class AliasNames {
}

class AnnotationKey {
}

class AnnotationValue {
  public NullableBoolean $boolean_value;
  public NullableDouble $number_value;
  public string $string_value;
}

class Annotations {
}

class AttributeKey {
}

class AttributeMap {
}

class AttributeValue {
}

class AvailabilityZoneDetail {
  public string $name;
}

class BackendConnectionErrors {
  public NullableInteger $connection_refused_count;
  public NullableInteger $http_code_4_xx_count;
  public NullableInteger $http_code_5_xx_count;
  public NullableInteger $other_count;
  public NullableInteger $timeout_count;
  public NullableInteger $unknown_host_count;
}

class BatchGetTracesRequest {
  public string $next_token;
  public TraceIdList $trace_ids;
}

class BatchGetTracesResult {
  public string $next_token;
  public TraceList $traces;
  public UnprocessedTraceIdList $unprocessed_trace_ids;
}

class Boolean {
}

class BorrowCount {
}

class ClientID {
}

class CreateGroupRequest {
  public FilterExpression $filter_expression;
  public GroupName $group_name;
}

class CreateGroupResult {
  public Group $group;
}

class CreateSamplingRuleRequest {
  public SamplingRule $sampling_rule;
}

class CreateSamplingRuleResult {
  public SamplingRuleRecord $sampling_rule_record;
}

class DeleteGroupRequest {
  public GroupARN $group_arn;
  public GroupName $group_name;
}

class DeleteGroupResult {
}

class DeleteSamplingRuleRequest {
  public string $rule_arn;
  public string $rule_name;
}

class DeleteSamplingRuleResult {
  public SamplingRuleRecord $sampling_rule_record;
}

class Double {
}

class EC2InstanceId {
}

class Edge {
  public AliasList $aliases;
  public Timestamp $end_time;
  public NullableInteger $reference_id;
  public Histogram $response_time_histogram;
  public Timestamp $start_time;
  public EdgeStatistics $summary_statistics;
}

class EdgeList {
}

class EdgeStatistics {
  public ErrorStatistics $error_statistics;
  public FaultStatistics $fault_statistics;
  public NullableLong $ok_count;
  public NullableLong $total_count;
  public NullableDouble $total_response_time;
}

class EncryptionConfig {
  public string $key_id;
  public EncryptionStatus $status;
  public EncryptionType $type;
}

class EncryptionKeyId {
}

class EncryptionStatus {
}

class EncryptionType {
}

class EntitySelectorExpression {
}

class ErrorMessage {
}

class ErrorRootCause {
  public NullableBoolean $client_impacting;
  public ErrorRootCauseServices $services;
}

class ErrorRootCauseEntity {
  public RootCauseExceptions $exceptions;
  public string $name;
  public NullableBoolean $remote;
}

class ErrorRootCauseEntityPath {
}

class ErrorRootCauseService {
  public string $account_id;
  public ErrorRootCauseEntityPath $entity_path;
  public NullableBoolean $inferred;
  public string $name;
  public ServiceNames $names;
  public string $type;
}

class ErrorRootCauseServices {
}

class ErrorRootCauses {
}

class ErrorStatistics {
  public NullableLong $other_count;
  public NullableLong $throttle_count;
  public NullableLong $total_count;
}

class FaultRootCause {
  public NullableBoolean $client_impacting;
  public FaultRootCauseServices $services;
}

class FaultRootCauseEntity {
  public RootCauseExceptions $exceptions;
  public string $name;
  public NullableBoolean $remote;
}

class FaultRootCauseEntityPath {
}

class FaultRootCauseService {
  public string $account_id;
  public FaultRootCauseEntityPath $entity_path;
  public NullableBoolean $inferred;
  public string $name;
  public ServiceNames $names;
  public string $type;
}

class FaultRootCauseServices {
}

class FaultRootCauses {
}

class FaultStatistics {
  public NullableLong $other_count;
  public NullableLong $total_count;
}

class FilterExpression {
}

class FixedRate {
}

class GetEncryptionConfigRequest {
}

class GetEncryptionConfigResult {
  public EncryptionConfig $encryption_config;
}

class GetGroupRequest {
  public GroupARN $group_arn;
  public GroupName $group_name;
}

class GetGroupResult {
  public Group $group;
}

class GetGroupsNextToken {
}

class GetGroupsRequest {
  public GetGroupsNextToken $next_token;
}

class GetGroupsResult {
  public GroupSummaryList $groups;
  public string $next_token;
}

class GetSamplingRulesRequest {
  public string $next_token;
}

class GetSamplingRulesResult {
  public string $next_token;
  public SamplingRuleRecordList $sampling_rule_records;
}

class GetSamplingStatisticSummariesRequest {
  public string $next_token;
}

class GetSamplingStatisticSummariesResult {
  public string $next_token;
  public SamplingStatisticSummaryList $sampling_statistic_summaries;
}

class GetSamplingTargetsRequest {
  public SamplingStatisticsDocumentList $sampling_statistics_documents;
}

class GetSamplingTargetsResult {
  public Timestamp $last_rule_modification;
  public SamplingTargetDocumentList $sampling_target_documents;
  public UnprocessedStatisticsList $unprocessed_statistics;
}

class GetServiceGraphRequest {
  public Timestamp $end_time;
  public GroupARN $group_arn;
  public GroupName $group_name;
  public string $next_token;
  public Timestamp $start_time;
}

class GetServiceGraphResult {
  public boolean $contains_old_group_versions;
  public Timestamp $end_time;
  public string $next_token;
  public ServiceList $services;
  public Timestamp $start_time;
}

class GetTimeSeriesServiceStatisticsRequest {
  public Timestamp $end_time;
  public EntitySelectorExpression $entity_selector_expression;
  public GroupARN $group_arn;
  public GroupName $group_name;
  public string $next_token;
  public NullableInteger $period;
  public Timestamp $start_time;
}

class GetTimeSeriesServiceStatisticsResult {
  public boolean $contains_old_group_versions;
  public string $next_token;
  public TimeSeriesServiceStatisticsList $time_series_service_statistics;
}

class GetTraceGraphRequest {
  public string $next_token;
  public TraceIdList $trace_ids;
}

class GetTraceGraphResult {
  public string $next_token;
  public ServiceList $services;
}

class GetTraceSummariesRequest {
  public Timestamp $end_time;
  public FilterExpression $filter_expression;
  public string $next_token;
  public NullableBoolean $sampling;
  public SamplingStrategy $sampling_strategy;
  public Timestamp $start_time;
  public TimeRangeType $time_range_type;
}

class GetTraceSummariesResult {
  public Timestamp $approximate_time;
  public string $next_token;
  public TraceSummaryList $trace_summaries;
  public NullableLong $traces_processed_count;
}

class Group {
  public string $filter_expression;
  public string $group_arn;
  public string $group_name;
}

class GroupARN {
}

class GroupName {
}

class GroupSummary {
  public string $filter_expression;
  public string $group_arn;
  public string $group_name;
}

class GroupSummaryList {
}

class HTTPMethod {
}

class Histogram {
}

class HistogramEntry {
  public int $count;
  public Double $value;
}

class Host {
}

class Hostname {
}

class Http {
  public string $client_ip;
  public string $http_method;
  public NullableInteger $http_status;
  public string $http_url;
  public string $user_agent;
}

class InstanceIdDetail {
  public string $id;
}

class Integer {
}

class InvalidRequestException {
  public ErrorMessage $message;
}

class NullableBoolean {
}

class NullableDouble {
}

class NullableInteger {
}

class NullableLong {
}

class Priority {
}

class PutEncryptionConfigRequest {
  public EncryptionKeyId $key_id;
  public EncryptionType $type;
}

class PutEncryptionConfigResult {
  public EncryptionConfig $encryption_config;
}

class PutTelemetryRecordsRequest {
  public EC2InstanceId $ec_2_instance_id;
  public Hostname $hostname;
  public ResourceARN $resource_arn;
  public TelemetryRecordList $telemetry_records;
}

class PutTelemetryRecordsResult {
}

class PutTraceSegmentsRequest {
  public TraceSegmentDocumentList $trace_segment_documents;
}

class PutTraceSegmentsResult {
  public UnprocessedTraceSegmentList $unprocessed_trace_segments;
}

class RequestCount {
}

class ReservoirSize {
}

class ResourceARN {
}

class ResourceARNDetail {
  public string $arn;
}

class ResponseTimeRootCause {
  public NullableBoolean $client_impacting;
  public ResponseTimeRootCauseServices $services;
}

class ResponseTimeRootCauseEntity {
  public NullableDouble $coverage;
  public string $name;
  public NullableBoolean $remote;
}

class ResponseTimeRootCauseEntityPath {
}

class ResponseTimeRootCauseService {
  public string $account_id;
  public ResponseTimeRootCauseEntityPath $entity_path;
  public NullableBoolean $inferred;
  public string $name;
  public ServiceNames $names;
  public string $type;
}

class ResponseTimeRootCauseServices {
}

class ResponseTimeRootCauses {
}

class RootCauseException {
  public string $message;
  public string $name;
}

class RootCauseExceptions {
}

class RuleLimitExceededException {
  public ErrorMessage $message;
}

class RuleName {
}

class SampledCount {
}

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
}

class SamplingRuleRecord {
  public Timestamp $created_at;
  public Timestamp $modified_at;
  public SamplingRule $sampling_rule;
}

class SamplingRuleRecordList {
}

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
}

class SamplingStatisticSummary {
  public int $borrow_count;
  public int $request_count;
  public string $rule_name;
  public int $sampled_count;
  public Timestamp $timestamp;
}

class SamplingStatisticSummaryList {
}

class SamplingStatisticsDocument {
  public BorrowCount $borrow_count;
  public ClientID $client_id;
  public RequestCount $request_count;
  public RuleName $rule_name;
  public SampledCount $sampled_count;
  public Timestamp $timestamp;
}

class SamplingStatisticsDocumentList {
}

class SamplingStrategy {
  public SamplingStrategyName $name;
  public NullableDouble $value;
}

class SamplingStrategyName {
}

class SamplingTargetDocument {
  public Double $fixed_rate;
  public NullableInteger $interval;
  public NullableInteger $reservoir_quota;
  public Timestamp $reservoir_quota_ttl;
  public string $rule_name;
}

class SamplingTargetDocumentList {
}

class Segment {
  public SegmentDocument $document;
  public SegmentId $id;
}

class SegmentDocument {
}

class SegmentId {
}

class SegmentList {
}

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
}

class ServiceId {
  public string $account_id;
  public string $name;
  public ServiceNames $names;
  public string $type;
}

class ServiceIds {
}

class ServiceList {
}

class ServiceName {
}

class ServiceNames {
}

class ServiceStatistics {
  public ErrorStatistics $error_statistics;
  public FaultStatistics $fault_statistics;
  public NullableLong $ok_count;
  public NullableLong $total_count;
  public NullableDouble $total_response_time;
}

class ServiceType {
}

class String {
}

class TelemetryRecord {
  public BackendConnectionErrors $backend_connection_errors;
  public NullableInteger $segments_received_count;
  public NullableInteger $segments_rejected_count;
  public NullableInteger $segments_sent_count;
  public NullableInteger $segments_spillover_count;
  public Timestamp $timestamp;
}

class TelemetryRecordList {
}

class ThrottledException {
  public ErrorMessage $message;
}

class TimeRangeType {
}

class TimeSeriesServiceStatistics {
  public EdgeStatistics $edge_summary_statistics;
  public Histogram $response_time_histogram;
  public ServiceStatistics $service_summary_statistics;
  public Timestamp $timestamp;
}

class TimeSeriesServiceStatisticsList {
}

class Timestamp {
}

class Trace {
  public NullableDouble $duration;
  public TraceId $id;
  public SegmentList $segments;
}

class TraceAvailabilityZones {
}

class TraceId {
}

class TraceIdList {
}

class TraceInstanceIds {
}

class TraceList {
}

class TraceResourceARNs {
}

class TraceSegmentDocument {
}

class TraceSegmentDocumentList {
}

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
}

class TraceSummaryList {
}

class TraceUser {
  public ServiceIds $service_ids;
  public string $user_name;
}

class TraceUsers {
}

class URLPath {
}

class UnprocessedStatistics {
  public string $error_code;
  public string $message;
  public string $rule_name;
}

class UnprocessedStatisticsList {
}

class UnprocessedTraceIdList {
}

class UnprocessedTraceSegment {
  public string $error_code;
  public string $id;
  public string $message;
}

class UnprocessedTraceSegmentList {
}

class UpdateGroupRequest {
  public FilterExpression $filter_expression;
  public GroupARN $group_arn;
  public GroupName $group_name;
}

class UpdateGroupResult {
  public Group $group;
}

class UpdateSamplingRuleRequest {
  public SamplingRuleUpdate $sampling_rule_update;
}

class UpdateSamplingRuleResult {
  public SamplingRuleRecord $sampling_rule_record;
}

class ValueWithServiceIds {
  public AnnotationValue $annotation_value;
  public ServiceIds $service_ids;
}

class ValuesWithServiceIds {
}

class Version {
}

