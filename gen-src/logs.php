<?hh // strict
namespace slack\aws\logs;

interface CloudWatch Logs {
  public function AssociateKmsKey(AssociateKmsKeyRequest): Awaitable<Errors\Error>;
  public function CancelExportTask(CancelExportTaskRequest): Awaitable<Errors\Error>;
  public function CreateExportTask(CreateExportTaskRequest): Awaitable<Errors\Result<CreateExportTaskResponse>>;
  public function CreateLogGroup(CreateLogGroupRequest): Awaitable<Errors\Error>;
  public function CreateLogStream(CreateLogStreamRequest): Awaitable<Errors\Error>;
  public function DeleteDestination(DeleteDestinationRequest): Awaitable<Errors\Error>;
  public function DeleteLogGroup(DeleteLogGroupRequest): Awaitable<Errors\Error>;
  public function DeleteLogStream(DeleteLogStreamRequest): Awaitable<Errors\Error>;
  public function DeleteMetricFilter(DeleteMetricFilterRequest): Awaitable<Errors\Error>;
  public function DeleteResourcePolicy(DeleteResourcePolicyRequest): Awaitable<Errors\Error>;
  public function DeleteRetentionPolicy(DeleteRetentionPolicyRequest): Awaitable<Errors\Error>;
  public function DeleteSubscriptionFilter(DeleteSubscriptionFilterRequest): Awaitable<Errors\Error>;
  public function DescribeDestinations(DescribeDestinationsRequest): Awaitable<Errors\Result<DescribeDestinationsResponse>>;
  public function DescribeExportTasks(DescribeExportTasksRequest): Awaitable<Errors\Result<DescribeExportTasksResponse>>;
  public function DescribeLogGroups(DescribeLogGroupsRequest): Awaitable<Errors\Result<DescribeLogGroupsResponse>>;
  public function DescribeLogStreams(DescribeLogStreamsRequest): Awaitable<Errors\Result<DescribeLogStreamsResponse>>;
  public function DescribeMetricFilters(DescribeMetricFiltersRequest): Awaitable<Errors\Result<DescribeMetricFiltersResponse>>;
  public function DescribeQueries(DescribeQueriesRequest): Awaitable<Errors\Result<DescribeQueriesResponse>>;
  public function DescribeResourcePolicies(DescribeResourcePoliciesRequest): Awaitable<Errors\Result<DescribeResourcePoliciesResponse>>;
  public function DescribeSubscriptionFilters(DescribeSubscriptionFiltersRequest): Awaitable<Errors\Result<DescribeSubscriptionFiltersResponse>>;
  public function DisassociateKmsKey(DisassociateKmsKeyRequest): Awaitable<Errors\Error>;
  public function FilterLogEvents(FilterLogEventsRequest): Awaitable<Errors\Result<FilterLogEventsResponse>>;
  public function GetLogEvents(GetLogEventsRequest): Awaitable<Errors\Result<GetLogEventsResponse>>;
  public function GetLogGroupFields(GetLogGroupFieldsRequest): Awaitable<Errors\Result<GetLogGroupFieldsResponse>>;
  public function GetLogRecord(GetLogRecordRequest): Awaitable<Errors\Result<GetLogRecordResponse>>;
  public function GetQueryResults(GetQueryResultsRequest): Awaitable<Errors\Result<GetQueryResultsResponse>>;
  public function ListTagsLogGroup(ListTagsLogGroupRequest): Awaitable<Errors\Result<ListTagsLogGroupResponse>>;
  public function PutDestination(PutDestinationRequest): Awaitable<Errors\Result<PutDestinationResponse>>;
  public function PutDestinationPolicy(PutDestinationPolicyRequest): Awaitable<Errors\Error>;
  public function PutLogEvents(PutLogEventsRequest): Awaitable<Errors\Result<PutLogEventsResponse>>;
  public function PutMetricFilter(PutMetricFilterRequest): Awaitable<Errors\Error>;
  public function PutResourcePolicy(PutResourcePolicyRequest): Awaitable<Errors\Result<PutResourcePolicyResponse>>;
  public function PutRetentionPolicy(PutRetentionPolicyRequest): Awaitable<Errors\Error>;
  public function PutSubscriptionFilter(PutSubscriptionFilterRequest): Awaitable<Errors\Error>;
  public function StartQuery(StartQueryRequest): Awaitable<Errors\Result<StartQueryResponse>>;
  public function StopQuery(StopQueryRequest): Awaitable<Errors\Result<StopQueryResponse>>;
  public function TagLogGroup(TagLogGroupRequest): Awaitable<Errors\Error>;
  public function TestMetricFilter(TestMetricFilterRequest): Awaitable<Errors\Result<TestMetricFilterResponse>>;
  public function UntagLogGroup(UntagLogGroupRequest): Awaitable<Errors\Error>;
}

type AccessPolicy = string;

type Arn = string;

class AssociateKmsKeyRequest {
  public KmsKeyId $kms_key_id;
  public LogGroupName $log_group_name;

  public function __construct(shape(
  ?'kms_key_id' => KmsKeyId,
  ?'log_group_name' => LogGroupName,
  ) $s = shape()) {
    $this->kms_key_id = $kms_key_id ?? "";
    $this->log_group_name = $log_group_name ?? "";
  }
}

class CancelExportTaskRequest {
  public ExportTaskId $task_id;

  public function __construct(shape(
  ?'task_id' => ExportTaskId,
  ) $s = shape()) {
    $this->task_id = $task_id ?? "";
  }
}

class CreateExportTaskRequest {
  public ExportDestinationBucket $destination;
  public ExportDestinationPrefix $destination_prefix;
  public Timestamp $from;
  public LogGroupName $log_group_name;
  public LogStreamName $log_stream_name_prefix;
  public ExportTaskName $task_name;
  public Timestamp $to;

  public function __construct(shape(
  ?'destination' => ExportDestinationBucket,
  ?'destination_prefix' => ExportDestinationPrefix,
  ?'from' => Timestamp,
  ?'log_group_name' => LogGroupName,
  ?'log_stream_name_prefix' => LogStreamName,
  ?'task_name' => ExportTaskName,
  ?'to' => Timestamp,
  ) $s = shape()) {
    $this->destination = $destination ?? "";
    $this->destination_prefix = $destination_prefix ?? "";
    $this->from = $from ?? 0;
    $this->log_group_name = $log_group_name ?? "";
    $this->log_stream_name_prefix = $log_stream_name_prefix ?? "";
    $this->task_name = $task_name ?? "";
    $this->to = $to ?? 0;
  }
}

class CreateExportTaskResponse {
  public ExportTaskId $task_id;

  public function __construct(shape(
  ?'task_id' => ExportTaskId,
  ) $s = shape()) {
    $this->task_id = $task_id ?? "";
  }
}

class CreateLogGroupRequest {
  public KmsKeyId $kms_key_id;
  public LogGroupName $log_group_name;
  public Tags $tags;

  public function __construct(shape(
  ?'kms_key_id' => KmsKeyId,
  ?'log_group_name' => LogGroupName,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->kms_key_id = $kms_key_id ?? "";
    $this->log_group_name = $log_group_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateLogStreamRequest {
  public LogGroupName $log_group_name;
  public LogStreamName $log_stream_name;

  public function __construct(shape(
  ?'log_group_name' => LogGroupName,
  ?'log_stream_name' => LogStreamName,
  ) $s = shape()) {
    $this->log_group_name = $log_group_name ?? "";
    $this->log_stream_name = $log_stream_name ?? "";
  }
}

class DataAlreadyAcceptedException {
  public SequenceToken $expected_sequence_token;

  public function __construct(shape(
  ?'expected_sequence_token' => SequenceToken,
  ) $s = shape()) {
    $this->expected_sequence_token = $expected_sequence_token ?? "";
  }
}

type Days = int;

type DefaultValue = float;

class DeleteDestinationRequest {
  public DestinationName $destination_name;

  public function __construct(shape(
  ?'destination_name' => DestinationName,
  ) $s = shape()) {
    $this->destination_name = $destination_name ?? "";
  }
}

class DeleteLogGroupRequest {
  public LogGroupName $log_group_name;

  public function __construct(shape(
  ?'log_group_name' => LogGroupName,
  ) $s = shape()) {
    $this->log_group_name = $log_group_name ?? "";
  }
}

class DeleteLogStreamRequest {
  public LogGroupName $log_group_name;
  public LogStreamName $log_stream_name;

  public function __construct(shape(
  ?'log_group_name' => LogGroupName,
  ?'log_stream_name' => LogStreamName,
  ) $s = shape()) {
    $this->log_group_name = $log_group_name ?? "";
    $this->log_stream_name = $log_stream_name ?? "";
  }
}

class DeleteMetricFilterRequest {
  public FilterName $filter_name;
  public LogGroupName $log_group_name;

  public function __construct(shape(
  ?'filter_name' => FilterName,
  ?'log_group_name' => LogGroupName,
  ) $s = shape()) {
    $this->filter_name = $filter_name ?? "";
    $this->log_group_name = $log_group_name ?? "";
  }
}

class DeleteResourcePolicyRequest {
  public PolicyName $policy_name;

  public function __construct(shape(
  ?'policy_name' => PolicyName,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? "";
  }
}

class DeleteRetentionPolicyRequest {
  public LogGroupName $log_group_name;

  public function __construct(shape(
  ?'log_group_name' => LogGroupName,
  ) $s = shape()) {
    $this->log_group_name = $log_group_name ?? "";
  }
}

class DeleteSubscriptionFilterRequest {
  public FilterName $filter_name;
  public LogGroupName $log_group_name;

  public function __construct(shape(
  ?'filter_name' => FilterName,
  ?'log_group_name' => LogGroupName,
  ) $s = shape()) {
    $this->filter_name = $filter_name ?? "";
    $this->log_group_name = $log_group_name ?? "";
  }
}

type Descending = bool;

class DescribeDestinationsRequest {
  public DestinationName $destination_name_prefix;
  public DescribeLimit $limit;
  public NextToken $next_token;

  public function __construct(shape(
  ?'destination_name_prefix' => DestinationName,
  ?'limit' => DescribeLimit,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->destination_name_prefix = $destination_name_prefix ?? "";
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeDestinationsResponse {
  public Destinations $destinations;
  public NextToken $next_token;

  public function __construct(shape(
  ?'destinations' => Destinations,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->destinations = $destinations ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeExportTasksRequest {
  public DescribeLimit $limit;
  public NextToken $next_token;
  public ExportTaskStatusCode $status_code;
  public ExportTaskId $task_id;

  public function __construct(shape(
  ?'limit' => DescribeLimit,
  ?'next_token' => NextToken,
  ?'status_code' => ExportTaskStatusCode,
  ?'task_id' => ExportTaskId,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->status_code = $status_code ?? "";
    $this->task_id = $task_id ?? "";
  }
}

class DescribeExportTasksResponse {
  public ExportTasks $export_tasks;
  public NextToken $next_token;

  public function __construct(shape(
  ?'export_tasks' => ExportTasks,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->export_tasks = $export_tasks ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type DescribeLimit = int;

class DescribeLogGroupsRequest {
  public DescribeLimit $limit;
  public LogGroupName $log_group_name_prefix;
  public NextToken $next_token;

  public function __construct(shape(
  ?'limit' => DescribeLimit,
  ?'log_group_name_prefix' => LogGroupName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->log_group_name_prefix = $log_group_name_prefix ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class DescribeLogGroupsResponse {
  public LogGroups $log_groups;
  public NextToken $next_token;

  public function __construct(shape(
  ?'log_groups' => LogGroups,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->log_groups = $log_groups ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeLogStreamsRequest {
  public Descending $descending;
  public DescribeLimit $limit;
  public LogGroupName $log_group_name;
  public LogStreamName $log_stream_name_prefix;
  public NextToken $next_token;
  public OrderBy $order_by;

  public function __construct(shape(
  ?'descending' => Descending,
  ?'limit' => DescribeLimit,
  ?'log_group_name' => LogGroupName,
  ?'log_stream_name_prefix' => LogStreamName,
  ?'next_token' => NextToken,
  ?'order_by' => OrderBy,
  ) $s = shape()) {
    $this->descending = $descending ?? false;
    $this->limit = $limit ?? 0;
    $this->log_group_name = $log_group_name ?? "";
    $this->log_stream_name_prefix = $log_stream_name_prefix ?? "";
    $this->next_token = $next_token ?? "";
    $this->order_by = $order_by ?? "";
  }
}

class DescribeLogStreamsResponse {
  public LogStreams $log_streams;
  public NextToken $next_token;

  public function __construct(shape(
  ?'log_streams' => LogStreams,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->log_streams = $log_streams ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeMetricFiltersRequest {
  public FilterName $filter_name_prefix;
  public DescribeLimit $limit;
  public LogGroupName $log_group_name;
  public MetricName $metric_name;
  public MetricNamespace $metric_namespace;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filter_name_prefix' => FilterName,
  ?'limit' => DescribeLimit,
  ?'log_group_name' => LogGroupName,
  ?'metric_name' => MetricName,
  ?'metric_namespace' => MetricNamespace,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filter_name_prefix = $filter_name_prefix ?? "";
    $this->limit = $limit ?? 0;
    $this->log_group_name = $log_group_name ?? "";
    $this->metric_name = $metric_name ?? "";
    $this->metric_namespace = $metric_namespace ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class DescribeMetricFiltersResponse {
  public MetricFilters $metric_filters;
  public NextToken $next_token;

  public function __construct(shape(
  ?'metric_filters' => MetricFilters,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->metric_filters = $metric_filters ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type DescribeQueriesMaxResults = int;

class DescribeQueriesRequest {
  public LogGroupName $log_group_name;
  public DescribeQueriesMaxResults $max_results;
  public NextToken $next_token;
  public QueryStatus $status;

  public function __construct(shape(
  ?'log_group_name' => LogGroupName,
  ?'max_results' => DescribeQueriesMaxResults,
  ?'next_token' => NextToken,
  ?'status' => QueryStatus,
  ) $s = shape()) {
    $this->log_group_name = $log_group_name ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->status = $status ?? "";
  }
}

class DescribeQueriesResponse {
  public NextToken $next_token;
  public QueryInfoList $queries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'queries' => QueryInfoList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->queries = $queries ?? [];
  }
}

class DescribeResourcePoliciesRequest {
  public DescribeLimit $limit;
  public NextToken $next_token;

  public function __construct(shape(
  ?'limit' => DescribeLimit,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeResourcePoliciesResponse {
  public NextToken $next_token;
  public ResourcePolicies $resource_policies;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'resource_policies' => ResourcePolicies,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resource_policies = $resource_policies ?? [];
  }
}

class DescribeSubscriptionFiltersRequest {
  public FilterName $filter_name_prefix;
  public DescribeLimit $limit;
  public LogGroupName $log_group_name;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filter_name_prefix' => FilterName,
  ?'limit' => DescribeLimit,
  ?'log_group_name' => LogGroupName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filter_name_prefix = $filter_name_prefix ?? "";
    $this->limit = $limit ?? 0;
    $this->log_group_name = $log_group_name ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class DescribeSubscriptionFiltersResponse {
  public NextToken $next_token;
  public SubscriptionFilters $subscription_filters;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'subscription_filters' => SubscriptionFilters,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->subscription_filters = $subscription_filters ?? [];
  }
}

class Destination {
  public AccessPolicy $access_policy;
  public Arn $arn;
  public Timestamp $creation_time;
  public DestinationName $destination_name;
  public RoleArn $role_arn;
  public TargetArn $target_arn;

  public function __construct(shape(
  ?'access_policy' => AccessPolicy,
  ?'arn' => Arn,
  ?'creation_time' => Timestamp,
  ?'destination_name' => DestinationName,
  ?'role_arn' => RoleArn,
  ?'target_arn' => TargetArn,
  ) $s = shape()) {
    $this->access_policy = $access_policy ?? "";
    $this->arn = $arn ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->destination_name = $destination_name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->target_arn = $target_arn ?? "";
  }
}

type DestinationArn = string;

type DestinationName = string;

type Destinations = vec<Destination>;

class DisassociateKmsKeyRequest {
  public LogGroupName $log_group_name;

  public function __construct(shape(
  ?'log_group_name' => LogGroupName,
  ) $s = shape()) {
    $this->log_group_name = $log_group_name ?? "";
  }
}

type Distribution = string;

type EventId = string;

type EventMessage = string;

type EventNumber = int;

type EventsLimit = int;

type ExportDestinationBucket = string;

type ExportDestinationPrefix = string;

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

  public function __construct(shape(
  ?'destination' => ExportDestinationBucket,
  ?'destination_prefix' => ExportDestinationPrefix,
  ?'execution_info' => ExportTaskExecutionInfo,
  ?'from' => Timestamp,
  ?'log_group_name' => LogGroupName,
  ?'status' => ExportTaskStatus,
  ?'task_id' => ExportTaskId,
  ?'task_name' => ExportTaskName,
  ?'to' => Timestamp,
  ) $s = shape()) {
    $this->destination = $destination ?? "";
    $this->destination_prefix = $destination_prefix ?? "";
    $this->execution_info = $execution_info ?? null;
    $this->from = $from ?? 0;
    $this->log_group_name = $log_group_name ?? "";
    $this->status = $status ?? null;
    $this->task_id = $task_id ?? "";
    $this->task_name = $task_name ?? "";
    $this->to = $to ?? 0;
  }
}

class ExportTaskExecutionInfo {
  public Timestamp $completion_time;
  public Timestamp $creation_time;

  public function __construct(shape(
  ?'completion_time' => Timestamp,
  ?'creation_time' => Timestamp,
  ) $s = shape()) {
    $this->completion_time = $completion_time ?? 0;
    $this->creation_time = $creation_time ?? 0;
  }
}

type ExportTaskId = string;

type ExportTaskName = string;

class ExportTaskStatus {
  public ExportTaskStatusCode $code;
  public ExportTaskStatusMessage $message;

  public function __construct(shape(
  ?'code' => ExportTaskStatusCode,
  ?'message' => ExportTaskStatusMessage,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type ExportTaskStatusCode = string;

type ExportTaskStatusMessage = string;

type ExportTasks = vec<ExportTask>;

type ExtractedValues = dict<Token, Value>;

type Field = string;

type FilterCount = int;

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

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'filter_pattern' => FilterPattern,
  ?'interleaved' => Interleaved,
  ?'limit' => EventsLimit,
  ?'log_group_name' => LogGroupName,
  ?'log_stream_name_prefix' => LogStreamName,
  ?'log_stream_names' => InputLogStreamNames,
  ?'next_token' => NextToken,
  ?'start_time' => Timestamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->filter_pattern = $filter_pattern ?? "";
    $this->interleaved = $interleaved ?? false;
    $this->limit = $limit ?? 0;
    $this->log_group_name = $log_group_name ?? "";
    $this->log_stream_name_prefix = $log_stream_name_prefix ?? "";
    $this->log_stream_names = $log_stream_names ?? [];
    $this->next_token = $next_token ?? "";
    $this->start_time = $start_time ?? 0;
  }
}

class FilterLogEventsResponse {
  public FilteredLogEvents $events;
  public NextToken $next_token;
  public SearchedLogStreams $searched_log_streams;

  public function __construct(shape(
  ?'events' => FilteredLogEvents,
  ?'next_token' => NextToken,
  ?'searched_log_streams' => SearchedLogStreams,
  ) $s = shape()) {
    $this->events = $events ?? [];
    $this->next_token = $next_token ?? "";
    $this->searched_log_streams = $searched_log_streams ?? [];
  }
}

type FilterName = string;

type FilterPattern = string;

class FilteredLogEvent {
  public EventId $event_id;
  public Timestamp $ingestion_time;
  public LogStreamName $log_stream_name;
  public EventMessage $message;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'event_id' => EventId,
  ?'ingestion_time' => Timestamp,
  ?'log_stream_name' => LogStreamName,
  ?'message' => EventMessage,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->event_id = $event_id ?? "";
    $this->ingestion_time = $ingestion_time ?? 0;
    $this->log_stream_name = $log_stream_name ?? "";
    $this->message = $message ?? "";
    $this->timestamp = $timestamp ?? 0;
  }
}

type FilteredLogEvents = vec<FilteredLogEvent>;

class GetLogEventsRequest {
  public Timestamp $end_time;
  public EventsLimit $limit;
  public LogGroupName $log_group_name;
  public LogStreamName $log_stream_name;
  public NextToken $next_token;
  public StartFromHead $start_from_head;
  public Timestamp $start_time;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'limit' => EventsLimit,
  ?'log_group_name' => LogGroupName,
  ?'log_stream_name' => LogStreamName,
  ?'next_token' => NextToken,
  ?'start_from_head' => StartFromHead,
  ?'start_time' => Timestamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->limit = $limit ?? 0;
    $this->log_group_name = $log_group_name ?? "";
    $this->log_stream_name = $log_stream_name ?? "";
    $this->next_token = $next_token ?? "";
    $this->start_from_head = $start_from_head ?? false;
    $this->start_time = $start_time ?? 0;
  }
}

class GetLogEventsResponse {
  public OutputLogEvents $events;
  public NextToken $next_backward_token;
  public NextToken $next_forward_token;

  public function __construct(shape(
  ?'events' => OutputLogEvents,
  ?'next_backward_token' => NextToken,
  ?'next_forward_token' => NextToken,
  ) $s = shape()) {
    $this->events = $events ?? [];
    $this->next_backward_token = $next_backward_token ?? "";
    $this->next_forward_token = $next_forward_token ?? "";
  }
}

class GetLogGroupFieldsRequest {
  public LogGroupName $log_group_name;
  public Timestamp $time;

  public function __construct(shape(
  ?'log_group_name' => LogGroupName,
  ?'time' => Timestamp,
  ) $s = shape()) {
    $this->log_group_name = $log_group_name ?? "";
    $this->time = $time ?? 0;
  }
}

class GetLogGroupFieldsResponse {
  public LogGroupFieldList $log_group_fields;

  public function __construct(shape(
  ?'log_group_fields' => LogGroupFieldList,
  ) $s = shape()) {
    $this->log_group_fields = $log_group_fields ?? [];
  }
}

class GetLogRecordRequest {
  public LogRecordPointer $log_record_pointer;

  public function __construct(shape(
  ?'log_record_pointer' => LogRecordPointer,
  ) $s = shape()) {
    $this->log_record_pointer = $log_record_pointer ?? "";
  }
}

class GetLogRecordResponse {
  public LogRecord $log_record;

  public function __construct(shape(
  ?'log_record' => LogRecord,
  ) $s = shape()) {
    $this->log_record = $log_record ?? [];
  }
}

class GetQueryResultsRequest {
  public QueryId $query_id;

  public function __construct(shape(
  ?'query_id' => QueryId,
  ) $s = shape()) {
    $this->query_id = $query_id ?? "";
  }
}

class GetQueryResultsResponse {
  public QueryResults $results;
  public QueryStatistics $statistics;
  public QueryStatus $status;

  public function __construct(shape(
  ?'results' => QueryResults,
  ?'statistics' => QueryStatistics,
  ?'status' => QueryStatus,
  ) $s = shape()) {
    $this->results = $results ?? [];
    $this->statistics = $statistics ?? null;
    $this->status = $status ?? "";
  }
}

class InputLogEvent {
  public EventMessage $message;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'message' => EventMessage,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->timestamp = $timestamp ?? 0;
  }
}

type InputLogEvents = vec<InputLogEvent>;

type InputLogStreamNames = vec<LogStreamName>;

type Interleaved = bool;

class InvalidOperationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidParameterException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidSequenceTokenException {
  public SequenceToken $expected_sequence_token;

  public function __construct(shape(
  ?'expected_sequence_token' => SequenceToken,
  ) $s = shape()) {
    $this->expected_sequence_token = $expected_sequence_token ?? "";
  }
}

type KmsKeyId = string;

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListTagsLogGroupRequest {
  public LogGroupName $log_group_name;

  public function __construct(shape(
  ?'log_group_name' => LogGroupName,
  ) $s = shape()) {
    $this->log_group_name = $log_group_name ?? "";
  }
}

class ListTagsLogGroupResponse {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

type LogEventIndex = int;

class LogGroup {
  public Arn $arn;
  public Timestamp $creation_time;
  public KmsKeyId $kms_key_id;
  public LogGroupName $log_group_name;
  public FilterCount $metric_filter_count;
  public Days $retention_in_days;
  public StoredBytes $stored_bytes;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'creation_time' => Timestamp,
  ?'kms_key_id' => KmsKeyId,
  ?'log_group_name' => LogGroupName,
  ?'metric_filter_count' => FilterCount,
  ?'retention_in_days' => Days,
  ?'stored_bytes' => StoredBytes,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->kms_key_id = $kms_key_id ?? "";
    $this->log_group_name = $log_group_name ?? "";
    $this->metric_filter_count = $metric_filter_count ?? 0;
    $this->retention_in_days = $retention_in_days ?? 0;
    $this->stored_bytes = $stored_bytes ?? 0;
  }
}

class LogGroupField {
  public Field $name;
  public Percentage $percent;

  public function __construct(shape(
  ?'name' => Field,
  ?'percent' => Percentage,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->percent = $percent ?? 0;
  }
}

type LogGroupFieldList = vec<LogGroupField>;

type LogGroupName = string;

type LogGroupNames = vec<LogGroupName>;

type LogGroups = vec<LogGroup>;

type LogRecord = dict<Field, Value>;

type LogRecordPointer = string;

class LogStream {
  public Arn $arn;
  public Timestamp $creation_time;
  public Timestamp $first_event_timestamp;
  public Timestamp $last_event_timestamp;
  public Timestamp $last_ingestion_time;
  public LogStreamName $log_stream_name;
  public StoredBytes $stored_bytes;
  public SequenceToken $upload_sequence_token;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'creation_time' => Timestamp,
  ?'first_event_timestamp' => Timestamp,
  ?'last_event_timestamp' => Timestamp,
  ?'last_ingestion_time' => Timestamp,
  ?'log_stream_name' => LogStreamName,
  ?'stored_bytes' => StoredBytes,
  ?'upload_sequence_token' => SequenceToken,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->first_event_timestamp = $first_event_timestamp ?? 0;
    $this->last_event_timestamp = $last_event_timestamp ?? 0;
    $this->last_ingestion_time = $last_ingestion_time ?? 0;
    $this->log_stream_name = $log_stream_name ?? "";
    $this->stored_bytes = $stored_bytes ?? 0;
    $this->upload_sequence_token = $upload_sequence_token ?? "";
  }
}

type LogStreamName = string;

type LogStreamSearchedCompletely = bool;

type LogStreams = vec<LogStream>;

class MalformedQueryException {
  public QueryCompileError $query_compile_error;

  public function __construct(shape(
  ?'query_compile_error' => QueryCompileError,
  ) $s = shape()) {
    $this->query_compile_error = $query_compile_error ?? null;
  }
}

type Message = string;

class MetricFilter {
  public Timestamp $creation_time;
  public FilterName $filter_name;
  public FilterPattern $filter_pattern;
  public LogGroupName $log_group_name;
  public MetricTransformations $metric_transformations;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'filter_name' => FilterName,
  ?'filter_pattern' => FilterPattern,
  ?'log_group_name' => LogGroupName,
  ?'metric_transformations' => MetricTransformations,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->filter_name = $filter_name ?? "";
    $this->filter_pattern = $filter_pattern ?? "";
    $this->log_group_name = $log_group_name ?? "";
    $this->metric_transformations = $metric_transformations ?? [];
  }
}

class MetricFilterMatchRecord {
  public EventMessage $event_message;
  public EventNumber $event_number;
  public ExtractedValues $extracted_values;

  public function __construct(shape(
  ?'event_message' => EventMessage,
  ?'event_number' => EventNumber,
  ?'extracted_values' => ExtractedValues,
  ) $s = shape()) {
    $this->event_message = $event_message ?? "";
    $this->event_number = $event_number ?? 0;
    $this->extracted_values = $extracted_values ?? [];
  }
}

type MetricFilterMatches = vec<MetricFilterMatchRecord>;

type MetricFilters = vec<MetricFilter>;

type MetricName = string;

type MetricNamespace = string;

class MetricTransformation {
  public DefaultValue $default_value;
  public MetricName $metric_name;
  public MetricNamespace $metric_namespace;
  public MetricValue $metric_value;

  public function __construct(shape(
  ?'default_value' => DefaultValue,
  ?'metric_name' => MetricName,
  ?'metric_namespace' => MetricNamespace,
  ?'metric_value' => MetricValue,
  ) $s = shape()) {
    $this->default_value = $default_value ?? 0.0;
    $this->metric_name = $metric_name ?? "";
    $this->metric_namespace = $metric_namespace ?? "";
    $this->metric_value = $metric_value ?? "";
  }
}

type MetricTransformations = vec<MetricTransformation>;

type MetricValue = string;

type NextToken = string;

class OperationAbortedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type OrderBy = string;

class OutputLogEvent {
  public Timestamp $ingestion_time;
  public EventMessage $message;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'ingestion_time' => Timestamp,
  ?'message' => EventMessage,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->ingestion_time = $ingestion_time ?? 0;
    $this->message = $message ?? "";
    $this->timestamp = $timestamp ?? 0;
  }
}

type OutputLogEvents = vec<OutputLogEvent>;

type Percentage = int;

type PolicyDocument = string;

type PolicyName = string;

class PutDestinationPolicyRequest {
  public AccessPolicy $access_policy;
  public DestinationName $destination_name;

  public function __construct(shape(
  ?'access_policy' => AccessPolicy,
  ?'destination_name' => DestinationName,
  ) $s = shape()) {
    $this->access_policy = $access_policy ?? "";
    $this->destination_name = $destination_name ?? "";
  }
}

class PutDestinationRequest {
  public DestinationName $destination_name;
  public RoleArn $role_arn;
  public TargetArn $target_arn;

  public function __construct(shape(
  ?'destination_name' => DestinationName,
  ?'role_arn' => RoleArn,
  ?'target_arn' => TargetArn,
  ) $s = shape()) {
    $this->destination_name = $destination_name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->target_arn = $target_arn ?? "";
  }
}

class PutDestinationResponse {
  public Destination $destination;

  public function __construct(shape(
  ?'destination' => Destination,
  ) $s = shape()) {
    $this->destination = $destination ?? null;
  }
}

class PutLogEventsRequest {
  public InputLogEvents $log_events;
  public LogGroupName $log_group_name;
  public LogStreamName $log_stream_name;
  public SequenceToken $sequence_token;

  public function __construct(shape(
  ?'log_events' => InputLogEvents,
  ?'log_group_name' => LogGroupName,
  ?'log_stream_name' => LogStreamName,
  ?'sequence_token' => SequenceToken,
  ) $s = shape()) {
    $this->log_events = $log_events ?? [];
    $this->log_group_name = $log_group_name ?? "";
    $this->log_stream_name = $log_stream_name ?? "";
    $this->sequence_token = $sequence_token ?? "";
  }
}

class PutLogEventsResponse {
  public SequenceToken $next_sequence_token;
  public RejectedLogEventsInfo $rejected_log_events_info;

  public function __construct(shape(
  ?'next_sequence_token' => SequenceToken,
  ?'rejected_log_events_info' => RejectedLogEventsInfo,
  ) $s = shape()) {
    $this->next_sequence_token = $next_sequence_token ?? "";
    $this->rejected_log_events_info = $rejected_log_events_info ?? null;
  }
}

class PutMetricFilterRequest {
  public FilterName $filter_name;
  public FilterPattern $filter_pattern;
  public LogGroupName $log_group_name;
  public MetricTransformations $metric_transformations;

  public function __construct(shape(
  ?'filter_name' => FilterName,
  ?'filter_pattern' => FilterPattern,
  ?'log_group_name' => LogGroupName,
  ?'metric_transformations' => MetricTransformations,
  ) $s = shape()) {
    $this->filter_name = $filter_name ?? "";
    $this->filter_pattern = $filter_pattern ?? "";
    $this->log_group_name = $log_group_name ?? "";
    $this->metric_transformations = $metric_transformations ?? [];
  }
}

class PutResourcePolicyRequest {
  public PolicyDocument $policy_document;
  public PolicyName $policy_name;

  public function __construct(shape(
  ?'policy_document' => PolicyDocument,
  ?'policy_name' => PolicyName,
  ) $s = shape()) {
    $this->policy_document = $policy_document ?? "";
    $this->policy_name = $policy_name ?? "";
  }
}

class PutResourcePolicyResponse {
  public ResourcePolicy $resource_policy;

  public function __construct(shape(
  ?'resource_policy' => ResourcePolicy,
  ) $s = shape()) {
    $this->resource_policy = $resource_policy ?? null;
  }
}

class PutRetentionPolicyRequest {
  public LogGroupName $log_group_name;
  public Days $retention_in_days;

  public function __construct(shape(
  ?'log_group_name' => LogGroupName,
  ?'retention_in_days' => Days,
  ) $s = shape()) {
    $this->log_group_name = $log_group_name ?? "";
    $this->retention_in_days = $retention_in_days ?? 0;
  }
}

class PutSubscriptionFilterRequest {
  public DestinationArn $destination_arn;
  public Distribution $distribution;
  public FilterName $filter_name;
  public FilterPattern $filter_pattern;
  public LogGroupName $log_group_name;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'destination_arn' => DestinationArn,
  ?'distribution' => Distribution,
  ?'filter_name' => FilterName,
  ?'filter_pattern' => FilterPattern,
  ?'log_group_name' => LogGroupName,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->destination_arn = $destination_arn ?? "";
    $this->distribution = $distribution ?? "";
    $this->filter_name = $filter_name ?? "";
    $this->filter_pattern = $filter_pattern ?? "";
    $this->log_group_name = $log_group_name ?? "";
    $this->role_arn = $role_arn ?? "";
  }
}

type QueryCharOffset = int;

class QueryCompileError {
  public QueryCompileErrorLocation $location;
  public Message $message;

  public function __construct(shape(
  ?'location' => QueryCompileErrorLocation,
  ?'message' => Message,
  ) $s = shape()) {
    $this->location = $location ?? null;
    $this->message = $message ?? "";
  }
}

class QueryCompileErrorLocation {
  public QueryCharOffset $end_char_offset;
  public QueryCharOffset $start_char_offset;

  public function __construct(shape(
  ?'end_char_offset' => QueryCharOffset,
  ?'start_char_offset' => QueryCharOffset,
  ) $s = shape()) {
    $this->end_char_offset = $end_char_offset ?? 0;
    $this->start_char_offset = $start_char_offset ?? 0;
  }
}

type QueryId = string;

class QueryInfo {
  public Timestamp $create_time;
  public LogGroupName $log_group_name;
  public QueryId $query_id;
  public QueryString $query_string;
  public QueryStatus $status;

  public function __construct(shape(
  ?'create_time' => Timestamp,
  ?'log_group_name' => LogGroupName,
  ?'query_id' => QueryId,
  ?'query_string' => QueryString,
  ?'status' => QueryStatus,
  ) $s = shape()) {
    $this->create_time = $create_time ?? 0;
    $this->log_group_name = $log_group_name ?? "";
    $this->query_id = $query_id ?? "";
    $this->query_string = $query_string ?? "";
    $this->status = $status ?? "";
  }
}

type QueryInfoList = vec<QueryInfo>;

type QueryResults = vec<ResultRows>;

class QueryStatistics {
  public StatsValue $bytes_scanned;
  public StatsValue $records_matched;
  public StatsValue $records_scanned;

  public function __construct(shape(
  ?'bytes_scanned' => StatsValue,
  ?'records_matched' => StatsValue,
  ?'records_scanned' => StatsValue,
  ) $s = shape()) {
    $this->bytes_scanned = $bytes_scanned ?? 0.0;
    $this->records_matched = $records_matched ?? 0.0;
    $this->records_scanned = $records_scanned ?? 0.0;
  }
}

type QueryStatus = string;

type QueryString = string;

class RejectedLogEventsInfo {
  public LogEventIndex $expired_log_event_end_index;
  public LogEventIndex $too_new_log_event_start_index;
  public LogEventIndex $too_old_log_event_end_index;

  public function __construct(shape(
  ?'expired_log_event_end_index' => LogEventIndex,
  ?'too_new_log_event_start_index' => LogEventIndex,
  ?'too_old_log_event_end_index' => LogEventIndex,
  ) $s = shape()) {
    $this->expired_log_event_end_index = $expired_log_event_end_index ?? 0;
    $this->too_new_log_event_start_index = $too_new_log_event_start_index ?? 0;
    $this->too_old_log_event_end_index = $too_old_log_event_end_index ?? 0;
  }
}

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

type ResourcePolicies = vec<ResourcePolicy>;

class ResourcePolicy {
  public Timestamp $last_updated_time;
  public PolicyDocument $policy_document;
  public PolicyName $policy_name;

  public function __construct(shape(
  ?'last_updated_time' => Timestamp,
  ?'policy_document' => PolicyDocument,
  ?'policy_name' => PolicyName,
  ) $s = shape()) {
    $this->last_updated_time = $last_updated_time ?? 0;
    $this->policy_document = $policy_document ?? "";
    $this->policy_name = $policy_name ?? "";
  }
}

class ResultField {
  public Field $field;
  public Value $value;

  public function __construct(shape(
  ?'field' => Field,
  ?'value' => Value,
  ) $s = shape()) {
    $this->field = $field ?? "";
    $this->value = $value ?? "";
  }
}

type ResultRows = vec<ResultField>;

type RoleArn = string;

class SearchedLogStream {
  public LogStreamName $log_stream_name;
  public LogStreamSearchedCompletely $searched_completely;

  public function __construct(shape(
  ?'log_stream_name' => LogStreamName,
  ?'searched_completely' => LogStreamSearchedCompletely,
  ) $s = shape()) {
    $this->log_stream_name = $log_stream_name ?? "";
    $this->searched_completely = $searched_completely ?? false;
  }
}

type SearchedLogStreams = vec<SearchedLogStream>;

type SequenceToken = string;

class ServiceUnavailableException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type StartFromHead = bool;

class StartQueryRequest {
  public Timestamp $end_time;
  public EventsLimit $limit;
  public LogGroupName $log_group_name;
  public LogGroupNames $log_group_names;
  public QueryString $query_string;
  public Timestamp $start_time;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'limit' => EventsLimit,
  ?'log_group_name' => LogGroupName,
  ?'log_group_names' => LogGroupNames,
  ?'query_string' => QueryString,
  ?'start_time' => Timestamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->limit = $limit ?? 0;
    $this->log_group_name = $log_group_name ?? "";
    $this->log_group_names = $log_group_names ?? [];
    $this->query_string = $query_string ?? "";
    $this->start_time = $start_time ?? 0;
  }
}

class StartQueryResponse {
  public QueryId $query_id;

  public function __construct(shape(
  ?'query_id' => QueryId,
  ) $s = shape()) {
    $this->query_id = $query_id ?? "";
  }
}

type StatsValue = float;

class StopQueryRequest {
  public QueryId $query_id;

  public function __construct(shape(
  ?'query_id' => QueryId,
  ) $s = shape()) {
    $this->query_id = $query_id ?? "";
  }
}

class StopQueryResponse {
  public Success $success;

  public function __construct(shape(
  ?'success' => Success,
  ) $s = shape()) {
    $this->success = $success ?? false;
  }
}

type StoredBytes = int;

class SubscriptionFilter {
  public Timestamp $creation_time;
  public DestinationArn $destination_arn;
  public Distribution $distribution;
  public FilterName $filter_name;
  public FilterPattern $filter_pattern;
  public LogGroupName $log_group_name;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'destination_arn' => DestinationArn,
  ?'distribution' => Distribution,
  ?'filter_name' => FilterName,
  ?'filter_pattern' => FilterPattern,
  ?'log_group_name' => LogGroupName,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->destination_arn = $destination_arn ?? "";
    $this->distribution = $distribution ?? "";
    $this->filter_name = $filter_name ?? "";
    $this->filter_pattern = $filter_pattern ?? "";
    $this->log_group_name = $log_group_name ?? "";
    $this->role_arn = $role_arn ?? "";
  }
}

type SubscriptionFilters = vec<SubscriptionFilter>;

type Success = bool;

type TagKey = string;

type TagList = vec<TagKey>;

class TagLogGroupRequest {
  public LogGroupName $log_group_name;
  public Tags $tags;

  public function __construct(shape(
  ?'log_group_name' => LogGroupName,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->log_group_name = $log_group_name ?? "";
    $this->tags = $tags ?? [];
  }
}

type TagValue = string;

type Tags = dict<TagKey, TagValue>;

type TargetArn = string;

type TestEventMessages = vec<EventMessage>;

class TestMetricFilterRequest {
  public FilterPattern $filter_pattern;
  public TestEventMessages $log_event_messages;

  public function __construct(shape(
  ?'filter_pattern' => FilterPattern,
  ?'log_event_messages' => TestEventMessages,
  ) $s = shape()) {
    $this->filter_pattern = $filter_pattern ?? "";
    $this->log_event_messages = $log_event_messages ?? [];
  }
}

class TestMetricFilterResponse {
  public MetricFilterMatches $matches;

  public function __construct(shape(
  ?'matches' => MetricFilterMatches,
  ) $s = shape()) {
    $this->matches = $matches ?? [];
  }
}

type Timestamp = int;

type Token = string;

class UnrecognizedClientException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UntagLogGroupRequest {
  public LogGroupName $log_group_name;
  public TagList $tags;

  public function __construct(shape(
  ?'log_group_name' => LogGroupName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->log_group_name = $log_group_name ?? "";
    $this->tags = $tags ?? [];
  }
}

type Value = string;

