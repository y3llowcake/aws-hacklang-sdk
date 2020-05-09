<?hh // strict
namespace slack\aws\logs;

interface CloudWatch Logs {
  public function AssociateKmsKey(AssociateKmsKeyRequest) Awaitable<Errors\Error>;
  public function CancelExportTask(CancelExportTaskRequest) Awaitable<Errors\Error>;
  public function CreateExportTask(CreateExportTaskRequest) Awaitable<Errors\Result<CreateExportTaskResponse>>;
  public function CreateLogGroup(CreateLogGroupRequest) Awaitable<Errors\Error>;
  public function CreateLogStream(CreateLogStreamRequest) Awaitable<Errors\Error>;
  public function DeleteDestination(DeleteDestinationRequest) Awaitable<Errors\Error>;
  public function DeleteLogGroup(DeleteLogGroupRequest) Awaitable<Errors\Error>;
  public function DeleteLogStream(DeleteLogStreamRequest) Awaitable<Errors\Error>;
  public function DeleteMetricFilter(DeleteMetricFilterRequest) Awaitable<Errors\Error>;
  public function DeleteResourcePolicy(DeleteResourcePolicyRequest) Awaitable<Errors\Error>;
  public function DeleteRetentionPolicy(DeleteRetentionPolicyRequest) Awaitable<Errors\Error>;
  public function DeleteSubscriptionFilter(DeleteSubscriptionFilterRequest) Awaitable<Errors\Error>;
  public function DescribeDestinations(DescribeDestinationsRequest) Awaitable<Errors\Result<DescribeDestinationsResponse>>;
  public function DescribeExportTasks(DescribeExportTasksRequest) Awaitable<Errors\Result<DescribeExportTasksResponse>>;
  public function DescribeLogGroups(DescribeLogGroupsRequest) Awaitable<Errors\Result<DescribeLogGroupsResponse>>;
  public function DescribeLogStreams(DescribeLogStreamsRequest) Awaitable<Errors\Result<DescribeLogStreamsResponse>>;
  public function DescribeMetricFilters(DescribeMetricFiltersRequest) Awaitable<Errors\Result<DescribeMetricFiltersResponse>>;
  public function DescribeQueries(DescribeQueriesRequest) Awaitable<Errors\Result<DescribeQueriesResponse>>;
  public function DescribeResourcePolicies(DescribeResourcePoliciesRequest) Awaitable<Errors\Result<DescribeResourcePoliciesResponse>>;
  public function DescribeSubscriptionFilters(DescribeSubscriptionFiltersRequest) Awaitable<Errors\Result<DescribeSubscriptionFiltersResponse>>;
  public function DisassociateKmsKey(DisassociateKmsKeyRequest) Awaitable<Errors\Error>;
  public function FilterLogEvents(FilterLogEventsRequest) Awaitable<Errors\Result<FilterLogEventsResponse>>;
  public function GetLogEvents(GetLogEventsRequest) Awaitable<Errors\Result<GetLogEventsResponse>>;
  public function GetLogGroupFields(GetLogGroupFieldsRequest) Awaitable<Errors\Result<GetLogGroupFieldsResponse>>;
  public function GetLogRecord(GetLogRecordRequest) Awaitable<Errors\Result<GetLogRecordResponse>>;
  public function GetQueryResults(GetQueryResultsRequest) Awaitable<Errors\Result<GetQueryResultsResponse>>;
  public function ListTagsLogGroup(ListTagsLogGroupRequest) Awaitable<Errors\Result<ListTagsLogGroupResponse>>;
  public function PutDestination(PutDestinationRequest) Awaitable<Errors\Result<PutDestinationResponse>>;
  public function PutDestinationPolicy(PutDestinationPolicyRequest) Awaitable<Errors\Error>;
  public function PutLogEvents(PutLogEventsRequest) Awaitable<Errors\Result<PutLogEventsResponse>>;
  public function PutMetricFilter(PutMetricFilterRequest) Awaitable<Errors\Error>;
  public function PutResourcePolicy(PutResourcePolicyRequest) Awaitable<Errors\Result<PutResourcePolicyResponse>>;
  public function PutRetentionPolicy(PutRetentionPolicyRequest) Awaitable<Errors\Error>;
  public function PutSubscriptionFilter(PutSubscriptionFilterRequest) Awaitable<Errors\Error>;
  public function StartQuery(StartQueryRequest) Awaitable<Errors\Result<StartQueryResponse>>;
  public function StopQuery(StopQueryRequest) Awaitable<Errors\Result<StopQueryResponse>>;
  public function TagLogGroup(TagLogGroupRequest) Awaitable<Errors\Error>;
  public function TestMetricFilter(TestMetricFilterRequest) Awaitable<Errors\Result<TestMetricFilterResponse>>;
  public function UntagLogGroup(UntagLogGroupRequest) Awaitable<Errors\Error>;
}

class AccessPolicy {
}

class Arn {
}

class AssociateKmsKeyRequest {
  public KmsKeyId $kms_key_id;
  public LogGroupName $log_group_name;
}

class CancelExportTaskRequest {
  public ExportTaskId $task_id;
}

class CreateExportTaskRequest {
  public ExportDestinationBucket $destination;
  public ExportDestinationPrefix $destination_prefix;
  public Timestamp $from;
  public LogGroupName $log_group_name;
  public LogStreamName $log_stream_name_prefix;
  public ExportTaskName $task_name;
  public Timestamp $to;
}

class CreateExportTaskResponse {
  public ExportTaskId $task_id;
}

class CreateLogGroupRequest {
  public KmsKeyId $kms_key_id;
  public LogGroupName $log_group_name;
  public Tags $tags;
}

class CreateLogStreamRequest {
  public LogGroupName $log_group_name;
  public LogStreamName $log_stream_name;
}

class DataAlreadyAcceptedException {
  public SequenceToken $expected_sequence_token;
}

class Days {
}

class DefaultValue {
}

class DeleteDestinationRequest {
  public DestinationName $destination_name;
}

class DeleteLogGroupRequest {
  public LogGroupName $log_group_name;
}

class DeleteLogStreamRequest {
  public LogGroupName $log_group_name;
  public LogStreamName $log_stream_name;
}

class DeleteMetricFilterRequest {
  public FilterName $filter_name;
  public LogGroupName $log_group_name;
}

class DeleteResourcePolicyRequest {
  public PolicyName $policy_name;
}

class DeleteRetentionPolicyRequest {
  public LogGroupName $log_group_name;
}

class DeleteSubscriptionFilterRequest {
  public FilterName $filter_name;
  public LogGroupName $log_group_name;
}

class Descending {
}

class DescribeDestinationsRequest {
  public DestinationName $destination_name_prefix;
  public DescribeLimit $limit;
  public NextToken $next_token;
}

class DescribeDestinationsResponse {
  public Destinations $destinations;
  public NextToken $next_token;
}

class DescribeExportTasksRequest {
  public DescribeLimit $limit;
  public NextToken $next_token;
  public ExportTaskStatusCode $status_code;
  public ExportTaskId $task_id;
}

class DescribeExportTasksResponse {
  public ExportTasks $export_tasks;
  public NextToken $next_token;
}

class DescribeLimit {
}

class DescribeLogGroupsRequest {
  public DescribeLimit $limit;
  public LogGroupName $log_group_name_prefix;
  public NextToken $next_token;
}

class DescribeLogGroupsResponse {
  public LogGroups $log_groups;
  public NextToken $next_token;
}

class DescribeLogStreamsRequest {
  public Descending $descending;
  public DescribeLimit $limit;
  public LogGroupName $log_group_name;
  public LogStreamName $log_stream_name_prefix;
  public NextToken $next_token;
  public OrderBy $order_by;
}

class DescribeLogStreamsResponse {
  public LogStreams $log_streams;
  public NextToken $next_token;
}

class DescribeMetricFiltersRequest {
  public FilterName $filter_name_prefix;
  public DescribeLimit $limit;
  public LogGroupName $log_group_name;
  public MetricName $metric_name;
  public MetricNamespace $metric_namespace;
  public NextToken $next_token;
}

class DescribeMetricFiltersResponse {
  public MetricFilters $metric_filters;
  public NextToken $next_token;
}

class DescribeQueriesMaxResults {
}

class DescribeQueriesRequest {
  public LogGroupName $log_group_name;
  public DescribeQueriesMaxResults $max_results;
  public NextToken $next_token;
  public QueryStatus $status;
}

class DescribeQueriesResponse {
  public NextToken $next_token;
  public QueryInfoList $queries;
}

class DescribeResourcePoliciesRequest {
  public DescribeLimit $limit;
  public NextToken $next_token;
}

class DescribeResourcePoliciesResponse {
  public NextToken $next_token;
  public ResourcePolicies $resource_policies;
}

class DescribeSubscriptionFiltersRequest {
  public FilterName $filter_name_prefix;
  public DescribeLimit $limit;
  public LogGroupName $log_group_name;
  public NextToken $next_token;
}

class DescribeSubscriptionFiltersResponse {
  public NextToken $next_token;
  public SubscriptionFilters $subscription_filters;
}

class Destination {
  public AccessPolicy $access_policy;
  public Arn $arn;
  public Timestamp $creation_time;
  public DestinationName $destination_name;
  public RoleArn $role_arn;
  public TargetArn $target_arn;
}

class DestinationArn {
}

class DestinationName {
}

class Destinations {
}

class DisassociateKmsKeyRequest {
  public LogGroupName $log_group_name;
}

class Distribution {
}

class EventId {
}

class EventMessage {
}

class EventNumber {
}

class EventsLimit {
}

class ExportDestinationBucket {
}

class ExportDestinationPrefix {
}

class ExportTask {
  public ExportDestinationBucket $destination;
  public ExportDestinationPrefix $destination_prefix;
  public ExportTaskExecutionInfo $execution_info;
  public Timestamp $from;
  public LogGroupName $log_group_name;
  public ExportTaskStatus $status;
  public ExportTaskId $task_id;
  public ExportTaskName $task_name;
  public Timestamp $to;
}

class ExportTaskExecutionInfo {
  public Timestamp $completion_time;
  public Timestamp $creation_time;
}

class ExportTaskId {
}

class ExportTaskName {
}

class ExportTaskStatus {
  public ExportTaskStatusCode $code;
  public ExportTaskStatusMessage $message;
}

class ExportTaskStatusCode {
}

class ExportTaskStatusMessage {
}

class ExportTasks {
}

class ExtractedValues {
}

class Field {
}

class FilterCount {
}

class FilterLogEventsRequest {
  public Timestamp $end_time;
  public FilterPattern $filter_pattern;
  public Interleaved $interleaved;
  public EventsLimit $limit;
  public LogGroupName $log_group_name;
  public LogStreamName $log_stream_name_prefix;
  public InputLogStreamNames $log_stream_names;
  public NextToken $next_token;
  public Timestamp $start_time;
}

class FilterLogEventsResponse {
  public FilteredLogEvents $events;
  public NextToken $next_token;
  public SearchedLogStreams $searched_log_streams;
}

class FilterName {
}

class FilterPattern {
}

class FilteredLogEvent {
  public EventId $event_id;
  public Timestamp $ingestion_time;
  public LogStreamName $log_stream_name;
  public EventMessage $message;
  public Timestamp $timestamp;
}

class FilteredLogEvents {
}

class GetLogEventsRequest {
  public Timestamp $end_time;
  public EventsLimit $limit;
  public LogGroupName $log_group_name;
  public LogStreamName $log_stream_name;
  public NextToken $next_token;
  public StartFromHead $start_from_head;
  public Timestamp $start_time;
}

class GetLogEventsResponse {
  public OutputLogEvents $events;
  public NextToken $next_backward_token;
  public NextToken $next_forward_token;
}

class GetLogGroupFieldsRequest {
  public LogGroupName $log_group_name;
  public Timestamp $time;
}

class GetLogGroupFieldsResponse {
  public LogGroupFieldList $log_group_fields;
}

class GetLogRecordRequest {
  public LogRecordPointer $log_record_pointer;
}

class GetLogRecordResponse {
  public LogRecord $log_record;
}

class GetQueryResultsRequest {
  public QueryId $query_id;
}

class GetQueryResultsResponse {
  public QueryResults $results;
  public QueryStatistics $statistics;
  public QueryStatus $status;
}

class InputLogEvent {
  public EventMessage $message;
  public Timestamp $timestamp;
}

class InputLogEvents {
}

class InputLogStreamNames {
}

class Interleaved {
}

class InvalidOperationException {
}

class InvalidParameterException {
}

class InvalidSequenceTokenException {
  public SequenceToken $expected_sequence_token;
}

class KmsKeyId {
}

class LimitExceededException {
}

class ListTagsLogGroupRequest {
  public LogGroupName $log_group_name;
}

class ListTagsLogGroupResponse {
  public Tags $tags;
}

class LogEventIndex {
}

class LogGroup {
  public Arn $arn;
  public Timestamp $creation_time;
  public KmsKeyId $kms_key_id;
  public LogGroupName $log_group_name;
  public FilterCount $metric_filter_count;
  public Days $retention_in_days;
  public StoredBytes $stored_bytes;
}

class LogGroupField {
  public Field $name;
  public Percentage $percent;
}

class LogGroupFieldList {
}

class LogGroupName {
}

class LogGroupNames {
}

class LogGroups {
}

class LogRecord {
}

class LogRecordPointer {
}

class LogStream {
  public Arn $arn;
  public Timestamp $creation_time;
  public Timestamp $first_event_timestamp;
  public Timestamp $last_event_timestamp;
  public Timestamp $last_ingestion_time;
  public LogStreamName $log_stream_name;
  public StoredBytes $stored_bytes;
  public SequenceToken $upload_sequence_token;
}

class LogStreamName {
}

class LogStreamSearchedCompletely {
}

class LogStreams {
}

class MalformedQueryException {
  public QueryCompileError $query_compile_error;
}

class Message {
}

class MetricFilter {
  public Timestamp $creation_time;
  public FilterName $filter_name;
  public FilterPattern $filter_pattern;
  public LogGroupName $log_group_name;
  public MetricTransformations $metric_transformations;
}

class MetricFilterMatchRecord {
  public EventMessage $event_message;
  public EventNumber $event_number;
  public ExtractedValues $extracted_values;
}

class MetricFilterMatches {
}

class MetricFilters {
}

class MetricName {
}

class MetricNamespace {
}

class MetricTransformation {
  public DefaultValue $default_value;
  public MetricName $metric_name;
  public MetricNamespace $metric_namespace;
  public MetricValue $metric_value;
}

class MetricTransformations {
}

class MetricValue {
}

class NextToken {
}

class OperationAbortedException {
}

class OrderBy {
}

class OutputLogEvent {
  public Timestamp $ingestion_time;
  public EventMessage $message;
  public Timestamp $timestamp;
}

class OutputLogEvents {
}

class Percentage {
}

class PolicyDocument {
}

class PolicyName {
}

class PutDestinationPolicyRequest {
  public AccessPolicy $access_policy;
  public DestinationName $destination_name;
}

class PutDestinationRequest {
  public DestinationName $destination_name;
  public RoleArn $role_arn;
  public TargetArn $target_arn;
}

class PutDestinationResponse {
  public Destination $destination;
}

class PutLogEventsRequest {
  public InputLogEvents $log_events;
  public LogGroupName $log_group_name;
  public LogStreamName $log_stream_name;
  public SequenceToken $sequence_token;
}

class PutLogEventsResponse {
  public SequenceToken $next_sequence_token;
  public RejectedLogEventsInfo $rejected_log_events_info;
}

class PutMetricFilterRequest {
  public FilterName $filter_name;
  public FilterPattern $filter_pattern;
  public LogGroupName $log_group_name;
  public MetricTransformations $metric_transformations;
}

class PutResourcePolicyRequest {
  public PolicyDocument $policy_document;
  public PolicyName $policy_name;
}

class PutResourcePolicyResponse {
  public ResourcePolicy $resource_policy;
}

class PutRetentionPolicyRequest {
  public LogGroupName $log_group_name;
  public Days $retention_in_days;
}

class PutSubscriptionFilterRequest {
  public DestinationArn $destination_arn;
  public Distribution $distribution;
  public FilterName $filter_name;
  public FilterPattern $filter_pattern;
  public LogGroupName $log_group_name;
  public RoleArn $role_arn;
}

class QueryCharOffset {
}

class QueryCompileError {
  public QueryCompileErrorLocation $location;
  public Message $message;
}

class QueryCompileErrorLocation {
  public QueryCharOffset $end_char_offset;
  public QueryCharOffset $start_char_offset;
}

class QueryId {
}

class QueryInfo {
  public Timestamp $create_time;
  public LogGroupName $log_group_name;
  public QueryId $query_id;
  public QueryString $query_string;
  public QueryStatus $status;
}

class QueryInfoList {
}

class QueryResults {
}

class QueryStatistics {
  public StatsValue $bytes_scanned;
  public StatsValue $records_matched;
  public StatsValue $records_scanned;
}

class QueryStatus {
}

class QueryString {
}

class RejectedLogEventsInfo {
  public LogEventIndex $expired_log_event_end_index;
  public LogEventIndex $too_new_log_event_start_index;
  public LogEventIndex $too_old_log_event_end_index;
}

class ResourceAlreadyExistsException {
}

class ResourceNotFoundException {
}

class ResourcePolicies {
}

class ResourcePolicy {
  public Timestamp $last_updated_time;
  public PolicyDocument $policy_document;
  public PolicyName $policy_name;
}

class ResultField {
  public Field $field;
  public Value $value;
}

class ResultRows {
}

class RoleArn {
}

class SearchedLogStream {
  public LogStreamName $log_stream_name;
  public LogStreamSearchedCompletely $searched_completely;
}

class SearchedLogStreams {
}

class SequenceToken {
}

class ServiceUnavailableException {
}

class StartFromHead {
}

class StartQueryRequest {
  public Timestamp $end_time;
  public EventsLimit $limit;
  public LogGroupName $log_group_name;
  public LogGroupNames $log_group_names;
  public QueryString $query_string;
  public Timestamp $start_time;
}

class StartQueryResponse {
  public QueryId $query_id;
}

class StatsValue {
}

class StopQueryRequest {
  public QueryId $query_id;
}

class StopQueryResponse {
  public Success $success;
}

class StoredBytes {
}

class SubscriptionFilter {
  public Timestamp $creation_time;
  public DestinationArn $destination_arn;
  public Distribution $distribution;
  public FilterName $filter_name;
  public FilterPattern $filter_pattern;
  public LogGroupName $log_group_name;
  public RoleArn $role_arn;
}

class SubscriptionFilters {
}

class Success {
}

class TagKey {
}

class TagList {
}

class TagLogGroupRequest {
  public LogGroupName $log_group_name;
  public Tags $tags;
}

class TagValue {
}

class Tags {
}

class TargetArn {
}

class TestEventMessages {
}

class TestMetricFilterRequest {
  public FilterPattern $filter_pattern;
  public TestEventMessages $log_event_messages;
}

class TestMetricFilterResponse {
  public MetricFilterMatches $matches;
}

class Timestamp {
}

class Token {
}

class UnrecognizedClientException {
}

class UntagLogGroupRequest {
  public LogGroupName $log_group_name;
  public TagList $tags;
}

class Value {
}

