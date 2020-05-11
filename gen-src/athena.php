<?hh // strict
namespace slack\aws\athena;

interface Athena {
  public function BatchGetNamedQuery(BatchGetNamedQueryInput): Awaitable<Errors\Result<BatchGetNamedQueryOutput>>;
  public function BatchGetQueryExecution(BatchGetQueryExecutionInput): Awaitable<Errors\Result<BatchGetQueryExecutionOutput>>;
  public function CreateNamedQuery(CreateNamedQueryInput): Awaitable<Errors\Result<CreateNamedQueryOutput>>;
  public function CreateWorkGroup(CreateWorkGroupInput): Awaitable<Errors\Result<CreateWorkGroupOutput>>;
  public function DeleteNamedQuery(DeleteNamedQueryInput): Awaitable<Errors\Result<DeleteNamedQueryOutput>>;
  public function DeleteWorkGroup(DeleteWorkGroupInput): Awaitable<Errors\Result<DeleteWorkGroupOutput>>;
  public function GetNamedQuery(GetNamedQueryInput): Awaitable<Errors\Result<GetNamedQueryOutput>>;
  public function GetQueryExecution(GetQueryExecutionInput): Awaitable<Errors\Result<GetQueryExecutionOutput>>;
  public function GetQueryResults(GetQueryResultsInput): Awaitable<Errors\Result<GetQueryResultsOutput>>;
  public function GetWorkGroup(GetWorkGroupInput): Awaitable<Errors\Result<GetWorkGroupOutput>>;
  public function ListNamedQueries(ListNamedQueriesInput): Awaitable<Errors\Result<ListNamedQueriesOutput>>;
  public function ListQueryExecutions(ListQueryExecutionsInput): Awaitable<Errors\Result<ListQueryExecutionsOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput): Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function ListWorkGroups(ListWorkGroupsInput): Awaitable<Errors\Result<ListWorkGroupsOutput>>;
  public function StartQueryExecution(StartQueryExecutionInput): Awaitable<Errors\Result<StartQueryExecutionOutput>>;
  public function StopQueryExecution(StopQueryExecutionInput): Awaitable<Errors\Result<StopQueryExecutionOutput>>;
  public function TagResource(TagResourceInput): Awaitable<Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput): Awaitable<Errors\Result<UntagResourceOutput>>;
  public function UpdateWorkGroup(UpdateWorkGroupInput): Awaitable<Errors\Result<UpdateWorkGroupOutput>>;
}

type AmazonResourceName = string;

class BatchGetNamedQueryInput {
  public NamedQueryIdList $named_query_ids;

  public function __construct(shape(
  ?'named_query_ids' => NamedQueryIdList,
  ) $s = shape()) {
    $this->named_query_ids = $named_query_ids ?? ;
  }
}

class BatchGetNamedQueryOutput {
  public NamedQueryList $named_queries;
  public UnprocessedNamedQueryIdList $unprocessed_named_query_ids;

  public function __construct(shape(
  ?'named_queries' => NamedQueryList,
  ?'unprocessed_named_query_ids' => UnprocessedNamedQueryIdList,
  ) $s = shape()) {
    $this->named_queries = $named_queries ?? ;
    $this->unprocessed_named_query_ids = $unprocessed_named_query_ids ?? ;
  }
}

class BatchGetQueryExecutionInput {
  public QueryExecutionIdList $query_execution_ids;

  public function __construct(shape(
  ?'query_execution_ids' => QueryExecutionIdList,
  ) $s = shape()) {
    $this->query_execution_ids = $query_execution_ids ?? ;
  }
}

class BatchGetQueryExecutionOutput {
  public QueryExecutionList $query_executions;
  public UnprocessedQueryExecutionIdList $unprocessed_query_execution_ids;

  public function __construct(shape(
  ?'query_executions' => QueryExecutionList,
  ?'unprocessed_query_execution_ids' => UnprocessedQueryExecutionIdList,
  ) $s = shape()) {
    $this->query_executions = $query_executions ?? ;
    $this->unprocessed_query_execution_ids = $unprocessed_query_execution_ids ?? ;
  }
}

type Boolean = bool;

type BoxedBoolean = bool;

type BytesScannedCutoffValue = int;

class ColumnInfo {
  public boolean $case_sensitive;
  public string $catalog_name;
  public string $label;
  public string $name;
  public ColumnNullable $nullable;
  public int $precision;
  public int $scale;
  public string $schema_name;
  public string $table_name;
  public string $type;

  public function __construct(shape(
  ?'case_sensitive' => boolean,
  ?'catalog_name' => string,
  ?'label' => string,
  ?'name' => string,
  ?'nullable' => ColumnNullable,
  ?'precision' => int,
  ?'scale' => int,
  ?'schema_name' => string,
  ?'table_name' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->case_sensitive = $case_sensitive ?? ;
    $this->catalog_name = $catalog_name ?? ;
    $this->label = $label ?? ;
    $this->name = $name ?? ;
    $this->nullable = $nullable ?? ;
    $this->precision = $precision ?? ;
    $this->scale = $scale ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->table_name = $table_name ?? ;
    $this->type = $type ?? ;
  }
}

type ColumnInfoList = vec<ColumnInfo>;

type ColumnNullable = string;

class CreateNamedQueryInput {
  public IdempotencyToken $client_request_token;
  public DatabaseString $database;
  public DescriptionString $description;
  public NameString $name;
  public QueryString $query_string;
  public WorkGroupName $work_group;

  public function __construct(shape(
  ?'client_request_token' => IdempotencyToken,
  ?'database' => DatabaseString,
  ?'description' => DescriptionString,
  ?'name' => NameString,
  ?'query_string' => QueryString,
  ?'work_group' => WorkGroupName,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->database = $database ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->query_string = $query_string ?? "";
    $this->work_group = $work_group ?? null;
  }
}

class CreateNamedQueryOutput {
  public NamedQueryId $named_query_id;

  public function __construct(shape(
  ?'named_query_id' => NamedQueryId,
  ) $s = shape()) {
    $this->named_query_id = $named_query_id ?? "";
  }
}

class CreateWorkGroupInput {
  public WorkGroupConfiguration $configuration;
  public WorkGroupDescriptionString $description;
  public WorkGroupName $name;
  public TagList $tags;

  public function __construct(shape(
  ?'configuration' => WorkGroupConfiguration,
  ?'description' => WorkGroupDescriptionString,
  ?'name' => WorkGroupName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->configuration = $configuration ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateWorkGroupOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DatabaseString = string;

type Date = int;

class Datum {
  public datumString $var_char_value;

  public function __construct(shape(
  ?'var_char_value' => datumString,
  ) $s = shape()) {
    $this->var_char_value = $var_char_value ?? ;
  }
}

class DeleteNamedQueryInput {
  public NamedQueryId $named_query_id;

  public function __construct(shape(
  ?'named_query_id' => NamedQueryId,
  ) $s = shape()) {
    $this->named_query_id = $named_query_id ?? "";
  }
}

class DeleteNamedQueryOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteWorkGroupInput {
  public BoxedBoolean $recursive_delete_option;
  public WorkGroupName $work_group;

  public function __construct(shape(
  ?'recursive_delete_option' => BoxedBoolean,
  ?'work_group' => WorkGroupName,
  ) $s = shape()) {
    $this->recursive_delete_option = $recursive_delete_option ?? ;
    $this->work_group = $work_group ?? null;
  }
}

class DeleteWorkGroupOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DescriptionString = string;

class EncryptionConfiguration {
  public EncryptionOption $encryption_option;
  public string $kms_key;

  public function __construct(shape(
  ?'encryption_option' => EncryptionOption,
  ?'kms_key' => string,
  ) $s = shape()) {
    $this->encryption_option = $encryption_option ?? "";
    $this->kms_key = $kms_key ?? ;
  }
}

type EncryptionOption = string;

type ErrorCode = string;

type ErrorMessage = string;

class GetNamedQueryInput {
  public NamedQueryId $named_query_id;

  public function __construct(shape(
  ?'named_query_id' => NamedQueryId,
  ) $s = shape()) {
    $this->named_query_id = $named_query_id ?? "";
  }
}

class GetNamedQueryOutput {
  public NamedQuery $named_query;

  public function __construct(shape(
  ?'named_query' => NamedQuery,
  ) $s = shape()) {
    $this->named_query = $named_query ?? null;
  }
}

class GetQueryExecutionInput {
  public QueryExecutionId $query_execution_id;

  public function __construct(shape(
  ?'query_execution_id' => QueryExecutionId,
  ) $s = shape()) {
    $this->query_execution_id = $query_execution_id ?? "";
  }
}

class GetQueryExecutionOutput {
  public QueryExecution $query_execution;

  public function __construct(shape(
  ?'query_execution' => QueryExecution,
  ) $s = shape()) {
    $this->query_execution = $query_execution ?? null;
  }
}

class GetQueryResultsInput {
  public MaxQueryResults $max_results;
  public Token $next_token;
  public QueryExecutionId $query_execution_id;

  public function __construct(shape(
  ?'max_results' => MaxQueryResults,
  ?'next_token' => Token,
  ?'query_execution_id' => QueryExecutionId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->query_execution_id = $query_execution_id ?? "";
  }
}

class GetQueryResultsOutput {
  public Token $next_token;
  public ResultSet $result_set;
  public Long $update_count;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'result_set' => ResultSet,
  ?'update_count' => Long,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->result_set = $result_set ?? null;
    $this->update_count = $update_count ?? ;
  }
}

class GetWorkGroupInput {
  public WorkGroupName $work_group;

  public function __construct(shape(
  ?'work_group' => WorkGroupName,
  ) $s = shape()) {
    $this->work_group = $work_group ?? null;
  }
}

class GetWorkGroupOutput {
  public WorkGroup $work_group;

  public function __construct(shape(
  ?'work_group' => WorkGroup,
  ) $s = shape()) {
    $this->work_group = $work_group ?? null;
  }
}

type IdempotencyToken = string;

type Integer = int;

class InternalServerException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidRequestException {
  public ErrorCode $athena_error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'athena_error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->athena_error_code = $athena_error_code ?? ;
    $this->message = $message ?? ;
  }
}

class ListNamedQueriesInput {
  public MaxNamedQueriesCount $max_results;
  public Token $next_token;
  public WorkGroupName $work_group;

  public function __construct(shape(
  ?'max_results' => MaxNamedQueriesCount,
  ?'next_token' => Token,
  ?'work_group' => WorkGroupName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->work_group = $work_group ?? null;
  }
}

class ListNamedQueriesOutput {
  public NamedQueryIdList $named_query_ids;
  public Token $next_token;

  public function __construct(shape(
  ?'named_query_ids' => NamedQueryIdList,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->named_query_ids = $named_query_ids ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListQueryExecutionsInput {
  public MaxQueryExecutionsCount $max_results;
  public Token $next_token;
  public WorkGroupName $work_group;

  public function __construct(shape(
  ?'max_results' => MaxQueryExecutionsCount,
  ?'next_token' => Token,
  ?'work_group' => WorkGroupName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->work_group = $work_group ?? null;
  }
}

class ListQueryExecutionsOutput {
  public Token $next_token;
  public QueryExecutionIdList $query_execution_ids;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'query_execution_ids' => QueryExecutionIdList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->query_execution_ids = $query_execution_ids ?? ;
  }
}

class ListTagsForResourceInput {
  public MaxTagsCount $max_results;
  public Token $next_token;
  public AmazonResourceName $resource_arn;

  public function __construct(shape(
  ?'max_results' => MaxTagsCount,
  ?'next_token' => Token,
  ?'resource_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsForResourceOutput {
  public Token $next_token;
  public TagList $tags;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->tags = $tags ?? ;
  }
}

class ListWorkGroupsInput {
  public MaxWorkGroupsCount $max_results;
  public Token $next_token;

  public function __construct(shape(
  ?'max_results' => MaxWorkGroupsCount,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListWorkGroupsOutput {
  public Token $next_token;
  public WorkGroupsList $work_groups;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'work_groups' => WorkGroupsList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->work_groups = $work_groups ?? ;
  }
}

type Long = int;

type MaxNamedQueriesCount = int;

type MaxQueryExecutionsCount = int;

type MaxQueryResults = int;

type MaxTagsCount = int;

type MaxWorkGroupsCount = int;

type NameString = string;

class NamedQuery {
  public DatabaseString $database;
  public DescriptionString $description;
  public NameString $name;
  public NamedQueryId $named_query_id;
  public QueryString $query_string;
  public WorkGroupName $work_group;

  public function __construct(shape(
  ?'database' => DatabaseString,
  ?'description' => DescriptionString,
  ?'name' => NameString,
  ?'named_query_id' => NamedQueryId,
  ?'query_string' => QueryString,
  ?'work_group' => WorkGroupName,
  ) $s = shape()) {
    $this->database = $database ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->named_query_id = $named_query_id ?? "";
    $this->query_string = $query_string ?? "";
    $this->work_group = $work_group ?? null;
  }
}

type NamedQueryId = string;

type NamedQueryIdList = vec<NamedQueryId>;

type NamedQueryList = vec<NamedQuery>;

class QueryExecution {
  public QueryString $query;
  public QueryExecutionContext $query_execution_context;
  public QueryExecutionId $query_execution_id;
  public ResultConfiguration $result_configuration;
  public StatementType $statement_type;
  public QueryExecutionStatistics $statistics;
  public QueryExecutionStatus $status;
  public WorkGroupName $work_group;

  public function __construct(shape(
  ?'query' => QueryString,
  ?'query_execution_context' => QueryExecutionContext,
  ?'query_execution_id' => QueryExecutionId,
  ?'result_configuration' => ResultConfiguration,
  ?'statement_type' => StatementType,
  ?'statistics' => QueryExecutionStatistics,
  ?'status' => QueryExecutionStatus,
  ?'work_group' => WorkGroupName,
  ) $s = shape()) {
    $this->query = $query ?? ;
    $this->query_execution_context = $query_execution_context ?? null;
    $this->query_execution_id = $query_execution_id ?? "";
    $this->result_configuration = $result_configuration ?? null;
    $this->statement_type = $statement_type ?? "";
    $this->statistics = $statistics ?? ;
    $this->status = $status ?? ;
    $this->work_group = $work_group ?? null;
  }
}

class QueryExecutionContext {
  public DatabaseString $database;

  public function __construct(shape(
  ?'database' => DatabaseString,
  ) $s = shape()) {
    $this->database = $database ?? ;
  }
}

type QueryExecutionId = string;

type QueryExecutionIdList = vec<QueryExecutionId>;

type QueryExecutionList = vec<QueryExecution>;

type QueryExecutionState = string;

class QueryExecutionStatistics {
  public string $data_manifest_location;
  public Long $data_scanned_in_bytes;
  public Long $engine_execution_time_in_millis;
  public Long $query_planning_time_in_millis;
  public Long $query_queue_time_in_millis;
  public Long $service_processing_time_in_millis;
  public Long $total_execution_time_in_millis;

  public function __construct(shape(
  ?'data_manifest_location' => string,
  ?'data_scanned_in_bytes' => Long,
  ?'engine_execution_time_in_millis' => Long,
  ?'query_planning_time_in_millis' => Long,
  ?'query_queue_time_in_millis' => Long,
  ?'service_processing_time_in_millis' => Long,
  ?'total_execution_time_in_millis' => Long,
  ) $s = shape()) {
    $this->data_manifest_location = $data_manifest_location ?? ;
    $this->data_scanned_in_bytes = $data_scanned_in_bytes ?? ;
    $this->engine_execution_time_in_millis = $engine_execution_time_in_millis ?? ;
    $this->query_planning_time_in_millis = $query_planning_time_in_millis ?? ;
    $this->query_queue_time_in_millis = $query_queue_time_in_millis ?? ;
    $this->service_processing_time_in_millis = $service_processing_time_in_millis ?? ;
    $this->total_execution_time_in_millis = $total_execution_time_in_millis ?? ;
  }
}

class QueryExecutionStatus {
  public Date $completion_date_time;
  public QueryExecutionState $state;
  public string $state_change_reason;
  public Date $submission_date_time;

  public function __construct(shape(
  ?'completion_date_time' => Date,
  ?'state' => QueryExecutionState,
  ?'state_change_reason' => string,
  ?'submission_date_time' => Date,
  ) $s = shape()) {
    $this->completion_date_time = $completion_date_time ?? ;
    $this->state = $state ?? ;
    $this->state_change_reason = $state_change_reason ?? ;
    $this->submission_date_time = $submission_date_time ?? ;
  }
}

type QueryString = string;

class ResourceNotFoundException {
  public ErrorMessage $message;
  public AmazonResourceName $resource_name;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'resource_name' => AmazonResourceName,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->resource_name = $resource_name ?? ;
  }
}

class ResultConfiguration {
  public EncryptionConfiguration $encryption_configuration;
  public string $output_location;

  public function __construct(shape(
  ?'encryption_configuration' => EncryptionConfiguration,
  ?'output_location' => string,
  ) $s = shape()) {
    $this->encryption_configuration = $encryption_configuration ?? null;
    $this->output_location = $output_location ?? ;
  }
}

class ResultConfigurationUpdates {
  public EncryptionConfiguration $encryption_configuration;
  public string $output_location;
  public BoxedBoolean $remove_encryption_configuration;
  public BoxedBoolean $remove_output_location;

  public function __construct(shape(
  ?'encryption_configuration' => EncryptionConfiguration,
  ?'output_location' => string,
  ?'remove_encryption_configuration' => BoxedBoolean,
  ?'remove_output_location' => BoxedBoolean,
  ) $s = shape()) {
    $this->encryption_configuration = $encryption_configuration ?? null;
    $this->output_location = $output_location ?? ;
    $this->remove_encryption_configuration = $remove_encryption_configuration ?? ;
    $this->remove_output_location = $remove_output_location ?? ;
  }
}

class ResultSet {
  public ResultSetMetadata $result_set_metadata;
  public RowList $rows;

  public function __construct(shape(
  ?'result_set_metadata' => ResultSetMetadata,
  ?'rows' => RowList,
  ) $s = shape()) {
    $this->result_set_metadata = $result_set_metadata ?? null;
    $this->rows = $rows ?? ;
  }
}

class ResultSetMetadata {
  public ColumnInfoList $column_info;

  public function __construct(shape(
  ?'column_info' => ColumnInfoList,
  ) $s = shape()) {
    $this->column_info = $column_info ?? null;
  }
}

class Row {
  public datumList $data;

  public function __construct(shape(
  ?'data' => datumList,
  ) $s = shape()) {
    $this->data = $data ?? ;
  }
}

type RowList = vec<Row>;

class StartQueryExecutionInput {
  public IdempotencyToken $client_request_token;
  public QueryExecutionContext $query_execution_context;
  public QueryString $query_string;
  public ResultConfiguration $result_configuration;
  public WorkGroupName $work_group;

  public function __construct(shape(
  ?'client_request_token' => IdempotencyToken,
  ?'query_execution_context' => QueryExecutionContext,
  ?'query_string' => QueryString,
  ?'result_configuration' => ResultConfiguration,
  ?'work_group' => WorkGroupName,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->query_execution_context = $query_execution_context ?? null;
    $this->query_string = $query_string ?? "";
    $this->result_configuration = $result_configuration ?? null;
    $this->work_group = $work_group ?? null;
  }
}

class StartQueryExecutionOutput {
  public QueryExecutionId $query_execution_id;

  public function __construct(shape(
  ?'query_execution_id' => QueryExecutionId,
  ) $s = shape()) {
    $this->query_execution_id = $query_execution_id ?? "";
  }
}

type StatementType = string;

class StopQueryExecutionInput {
  public QueryExecutionId $query_execution_id;

  public function __construct(shape(
  ?'query_execution_id' => QueryExecutionId,
  ) $s = shape()) {
    $this->query_execution_id = $query_execution_id ?? "";
  }
}

class StopQueryExecutionOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type String = string;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceInput {
  public AmazonResourceName $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class TagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type ThrottleReason = string;

type Token = string;

class TooManyRequestsException {
  public ErrorMessage $message;
  public ThrottleReason $reason;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'reason' => ThrottleReason,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->reason = $reason ?? ;
  }
}

class UnprocessedNamedQueryId {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public NamedQueryId $named_query_id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => ErrorMessage,
  ?'named_query_id' => NamedQueryId,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->named_query_id = $named_query_id ?? "";
  }
}

type UnprocessedNamedQueryIdList = vec<UnprocessedNamedQueryId>;

class UnprocessedQueryExecutionId {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public QueryExecutionId $query_execution_id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => ErrorMessage,
  ?'query_execution_id' => QueryExecutionId,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->query_execution_id = $query_execution_id ?? "";
  }
}

type UnprocessedQueryExecutionIdList = vec<UnprocessedQueryExecutionId>;

class UntagResourceInput {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateWorkGroupInput {
  public WorkGroupConfigurationUpdates $configuration_updates;
  public WorkGroupDescriptionString $description;
  public WorkGroupState $state;
  public WorkGroupName $work_group;

  public function __construct(shape(
  ?'configuration_updates' => WorkGroupConfigurationUpdates,
  ?'description' => WorkGroupDescriptionString,
  ?'state' => WorkGroupState,
  ?'work_group' => WorkGroupName,
  ) $s = shape()) {
    $this->configuration_updates = $configuration_updates ?? ;
    $this->description = $description ?? ;
    $this->state = $state ?? ;
    $this->work_group = $work_group ?? null;
  }
}

class UpdateWorkGroupOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class WorkGroup {
  public WorkGroupConfiguration $configuration;
  public Date $creation_time;
  public WorkGroupDescriptionString $description;
  public WorkGroupName $name;
  public WorkGroupState $state;

  public function __construct(shape(
  ?'configuration' => WorkGroupConfiguration,
  ?'creation_time' => Date,
  ?'description' => WorkGroupDescriptionString,
  ?'name' => WorkGroupName,
  ?'state' => WorkGroupState,
  ) $s = shape()) {
    $this->configuration = $configuration ?? ;
    $this->creation_time = $creation_time ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->state = $state ?? ;
  }
}

class WorkGroupConfiguration {
  public BytesScannedCutoffValue $bytes_scanned_cutoff_per_query;
  public BoxedBoolean $enforce_work_group_configuration;
  public BoxedBoolean $publish_cloud_watch_metrics_enabled;
  public BoxedBoolean $requester_pays_enabled;
  public ResultConfiguration $result_configuration;

  public function __construct(shape(
  ?'bytes_scanned_cutoff_per_query' => BytesScannedCutoffValue,
  ?'enforce_work_group_configuration' => BoxedBoolean,
  ?'publish_cloud_watch_metrics_enabled' => BoxedBoolean,
  ?'requester_pays_enabled' => BoxedBoolean,
  ?'result_configuration' => ResultConfiguration,
  ) $s = shape()) {
    $this->bytes_scanned_cutoff_per_query = $bytes_scanned_cutoff_per_query ?? ;
    $this->enforce_work_group_configuration = $enforce_work_group_configuration ?? ;
    $this->publish_cloud_watch_metrics_enabled = $publish_cloud_watch_metrics_enabled ?? ;
    $this->requester_pays_enabled = $requester_pays_enabled ?? ;
    $this->result_configuration = $result_configuration ?? null;
  }
}

class WorkGroupConfigurationUpdates {
  public BytesScannedCutoffValue $bytes_scanned_cutoff_per_query;
  public BoxedBoolean $enforce_work_group_configuration;
  public BoxedBoolean $publish_cloud_watch_metrics_enabled;
  public BoxedBoolean $remove_bytes_scanned_cutoff_per_query;
  public BoxedBoolean $requester_pays_enabled;
  public ResultConfigurationUpdates $result_configuration_updates;

  public function __construct(shape(
  ?'bytes_scanned_cutoff_per_query' => BytesScannedCutoffValue,
  ?'enforce_work_group_configuration' => BoxedBoolean,
  ?'publish_cloud_watch_metrics_enabled' => BoxedBoolean,
  ?'remove_bytes_scanned_cutoff_per_query' => BoxedBoolean,
  ?'requester_pays_enabled' => BoxedBoolean,
  ?'result_configuration_updates' => ResultConfigurationUpdates,
  ) $s = shape()) {
    $this->bytes_scanned_cutoff_per_query = $bytes_scanned_cutoff_per_query ?? ;
    $this->enforce_work_group_configuration = $enforce_work_group_configuration ?? ;
    $this->publish_cloud_watch_metrics_enabled = $publish_cloud_watch_metrics_enabled ?? ;
    $this->remove_bytes_scanned_cutoff_per_query = $remove_bytes_scanned_cutoff_per_query ?? ;
    $this->requester_pays_enabled = $requester_pays_enabled ?? ;
    $this->result_configuration_updates = $result_configuration_updates ?? null;
  }
}

type WorkGroupDescriptionString = string;

type WorkGroupName = string;

type WorkGroupState = string;

class WorkGroupSummary {
  public Date $creation_time;
  public WorkGroupDescriptionString $description;
  public WorkGroupName $name;
  public WorkGroupState $state;

  public function __construct(shape(
  ?'creation_time' => Date,
  ?'description' => WorkGroupDescriptionString,
  ?'name' => WorkGroupName,
  ?'state' => WorkGroupState,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->state = $state ?? ;
  }
}

type WorkGroupsList = vec<WorkGroupSummary>;

type datumList = vec<Datum>;

type datumString = string;

