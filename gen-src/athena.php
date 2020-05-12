<?hh // strict
namespace slack\aws\athena;

interface Athena {
  public function BatchGetNamedQuery(BatchGetNamedQueryInput $in): Awaitable<\Errors\Result<BatchGetNamedQueryOutput>>;
  public function BatchGetQueryExecution(BatchGetQueryExecutionInput $in): Awaitable<\Errors\Result<BatchGetQueryExecutionOutput>>;
  public function CreateNamedQuery(CreateNamedQueryInput $in): Awaitable<\Errors\Result<CreateNamedQueryOutput>>;
  public function CreateWorkGroup(CreateWorkGroupInput $in): Awaitable<\Errors\Result<CreateWorkGroupOutput>>;
  public function DeleteNamedQuery(DeleteNamedQueryInput $in): Awaitable<\Errors\Result<DeleteNamedQueryOutput>>;
  public function DeleteWorkGroup(DeleteWorkGroupInput $in): Awaitable<\Errors\Result<DeleteWorkGroupOutput>>;
  public function GetNamedQuery(GetNamedQueryInput $in): Awaitable<\Errors\Result<GetNamedQueryOutput>>;
  public function GetQueryExecution(GetQueryExecutionInput $in): Awaitable<\Errors\Result<GetQueryExecutionOutput>>;
  public function GetQueryResults(GetQueryResultsInput $in): Awaitable<\Errors\Result<GetQueryResultsOutput>>;
  public function GetWorkGroup(GetWorkGroupInput $in): Awaitable<\Errors\Result<GetWorkGroupOutput>>;
  public function ListNamedQueries(ListNamedQueriesInput $in): Awaitable<\Errors\Result<ListNamedQueriesOutput>>;
  public function ListQueryExecutions(ListQueryExecutionsInput $in): Awaitable<\Errors\Result<ListQueryExecutionsOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput $in): Awaitable<\Errors\Result<ListTagsForResourceOutput>>;
  public function ListWorkGroups(ListWorkGroupsInput $in): Awaitable<\Errors\Result<ListWorkGroupsOutput>>;
  public function StartQueryExecution(StartQueryExecutionInput $in): Awaitable<\Errors\Result<StartQueryExecutionOutput>>;
  public function StopQueryExecution(StopQueryExecutionInput $in): Awaitable<\Errors\Result<StopQueryExecutionOutput>>;
  public function TagResource(TagResourceInput $in): Awaitable<\Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput $in): Awaitable<\Errors\Result<UntagResourceOutput>>;
  public function UpdateWorkGroup(UpdateWorkGroupInput $in): Awaitable<\Errors\Result<UpdateWorkGroupOutput>>;
}

type AmazonResourceName = string;

class BatchGetNamedQueryInput {
  public ?NamedQueryIdList $named_query_ids;

  public function __construct(shape(
    ?'named_query_ids' => ?NamedQueryIdList,
  ) $s = shape()) {
    $this->named_query_ids = $s['named_query_ids'] ?? vec[];
  }
}

class BatchGetNamedQueryOutput {
  public ?NamedQueryList $named_queries;
  public ?UnprocessedNamedQueryIdList $unprocessed_named_query_ids;

  public function __construct(shape(
    ?'named_queries' => ?NamedQueryList,
    ?'unprocessed_named_query_ids' => ?UnprocessedNamedQueryIdList,
  ) $s = shape()) {
    $this->named_queries = $s['named_queries'] ?? vec[];
    $this->unprocessed_named_query_ids = $s['unprocessed_named_query_ids'] ?? vec[];
  }
}

class BatchGetQueryExecutionInput {
  public ?QueryExecutionIdList $query_execution_ids;

  public function __construct(shape(
    ?'query_execution_ids' => ?QueryExecutionIdList,
  ) $s = shape()) {
    $this->query_execution_ids = $s['query_execution_ids'] ?? vec[];
  }
}

class BatchGetQueryExecutionOutput {
  public ?QueryExecutionList $query_executions;
  public ?UnprocessedQueryExecutionIdList $unprocessed_query_execution_ids;

  public function __construct(shape(
    ?'query_executions' => ?QueryExecutionList,
    ?'unprocessed_query_execution_ids' => ?UnprocessedQueryExecutionIdList,
  ) $s = shape()) {
    $this->query_executions = $s['query_executions'] ?? vec[];
    $this->unprocessed_query_execution_ids = $s['unprocessed_query_execution_ids'] ?? vec[];
  }
}

type Boolean = bool;

type BoxedBoolean = bool;

type BytesScannedCutoffValue = int;

class ColumnInfo {
  public bool $case_sensitive;
  public string $catalog_name;
  public string $label;
  public string $name;
  public ?ColumnNullable $nullable;
  public int $precision;
  public int $scale;
  public string $schema_name;
  public string $table_name;
  public string $type;

  public function __construct(shape(
    ?'case_sensitive' => bool,
    ?'catalog_name' => string,
    ?'label' => string,
    ?'name' => string,
    ?'nullable' => ?ColumnNullable,
    ?'precision' => int,
    ?'scale' => int,
    ?'schema_name' => string,
    ?'table_name' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->case_sensitive = $s['case_sensitive'] ?? false;
    $this->catalog_name = $s['catalog_name'] ?? '';
    $this->label = $s['label'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->nullable = $s['nullable'] ?? '';
    $this->precision = $s['precision'] ?? 0;
    $this->scale = $s['scale'] ?? 0;
    $this->schema_name = $s['schema_name'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ColumnInfoList = vec<ColumnInfo>;

type ColumnNullable = string;

class CreateNamedQueryInput {
  public ?IdempotencyToken $client_request_token;
  public ?DatabaseString $database;
  public ?DescriptionString $description;
  public ?NameString $name;
  public ?QueryString $query_string;
  public ?WorkGroupName $work_group;

  public function __construct(shape(
    ?'client_request_token' => ?IdempotencyToken,
    ?'database' => ?DatabaseString,
    ?'description' => ?DescriptionString,
    ?'name' => ?NameString,
    ?'query_string' => ?QueryString,
    ?'work_group' => ?WorkGroupName,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->database = $s['database'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->query_string = $s['query_string'] ?? '';
    $this->work_group = $s['work_group'] ?? '';
  }
}

class CreateNamedQueryOutput {
  public ?NamedQueryId $named_query_id;

  public function __construct(shape(
    ?'named_query_id' => ?NamedQueryId,
  ) $s = shape()) {
    $this->named_query_id = $s['named_query_id'] ?? '';
  }
}

class CreateWorkGroupInput {
  public ?WorkGroupConfiguration $configuration;
  public ?WorkGroupDescriptionString $description;
  public ?WorkGroupName $name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'configuration' => ?WorkGroupConfiguration,
    ?'description' => ?WorkGroupDescriptionString,
    ?'name' => ?WorkGroupName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
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
  public ?datumString $var_char_value;

  public function __construct(shape(
    ?'var_char_value' => ?datumString,
  ) $s = shape()) {
    $this->var_char_value = $s['var_char_value'] ?? '';
  }
}

class DeleteNamedQueryInput {
  public ?NamedQueryId $named_query_id;

  public function __construct(shape(
    ?'named_query_id' => ?NamedQueryId,
  ) $s = shape()) {
    $this->named_query_id = $s['named_query_id'] ?? '';
  }
}

class DeleteNamedQueryOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteWorkGroupInput {
  public ?BoxedBoolean $recursive_delete_option;
  public ?WorkGroupName $work_group;

  public function __construct(shape(
    ?'recursive_delete_option' => ?BoxedBoolean,
    ?'work_group' => ?WorkGroupName,
  ) $s = shape()) {
    $this->recursive_delete_option = $s['recursive_delete_option'] ?? false;
    $this->work_group = $s['work_group'] ?? '';
  }
}

class DeleteWorkGroupOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DescriptionString = string;

class EncryptionConfiguration {
  public ?EncryptionOption $encryption_option;
  public string $kms_key;

  public function __construct(shape(
    ?'encryption_option' => ?EncryptionOption,
    ?'kms_key' => string,
  ) $s = shape()) {
    $this->encryption_option = $s['encryption_option'] ?? '';
    $this->kms_key = $s['kms_key'] ?? '';
  }
}

type EncryptionOption = string;

type ErrorCode = string;

type ErrorMessage = string;

class GetNamedQueryInput {
  public ?NamedQueryId $named_query_id;

  public function __construct(shape(
    ?'named_query_id' => ?NamedQueryId,
  ) $s = shape()) {
    $this->named_query_id = $s['named_query_id'] ?? '';
  }
}

class GetNamedQueryOutput {
  public ?NamedQuery $named_query;

  public function __construct(shape(
    ?'named_query' => ?NamedQuery,
  ) $s = shape()) {
    $this->named_query = $s['named_query'] ?? null;
  }
}

class GetQueryExecutionInput {
  public ?QueryExecutionId $query_execution_id;

  public function __construct(shape(
    ?'query_execution_id' => ?QueryExecutionId,
  ) $s = shape()) {
    $this->query_execution_id = $s['query_execution_id'] ?? '';
  }
}

class GetQueryExecutionOutput {
  public ?QueryExecution $query_execution;

  public function __construct(shape(
    ?'query_execution' => ?QueryExecution,
  ) $s = shape()) {
    $this->query_execution = $s['query_execution'] ?? null;
  }
}

class GetQueryResultsInput {
  public ?MaxQueryResults $max_results;
  public ?Token $next_token;
  public ?QueryExecutionId $query_execution_id;

  public function __construct(shape(
    ?'max_results' => ?MaxQueryResults,
    ?'next_token' => ?Token,
    ?'query_execution_id' => ?QueryExecutionId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->query_execution_id = $s['query_execution_id'] ?? '';
  }
}

class GetQueryResultsOutput {
  public ?Token $next_token;
  public ?ResultSet $result_set;
  public ?Long $update_count;

  public function __construct(shape(
    ?'next_token' => ?Token,
    ?'result_set' => ?ResultSet,
    ?'update_count' => ?Long,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->result_set = $s['result_set'] ?? null;
    $this->update_count = $s['update_count'] ?? 0;
  }
}

class GetWorkGroupInput {
  public ?WorkGroupName $work_group;

  public function __construct(shape(
    ?'work_group' => ?WorkGroupName,
  ) $s = shape()) {
    $this->work_group = $s['work_group'] ?? '';
  }
}

class GetWorkGroupOutput {
  public ?WorkGroup $work_group;

  public function __construct(shape(
    ?'work_group' => ?WorkGroup,
  ) $s = shape()) {
    $this->work_group = $s['work_group'] ?? null;
  }
}

type IdempotencyToken = string;

type Integer = int;

class InternalServerException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRequestException {
  public ?ErrorCode $athena_error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'athena_error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->athena_error_code = $s['athena_error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class ListNamedQueriesInput {
  public ?MaxNamedQueriesCount $max_results;
  public ?Token $next_token;
  public ?WorkGroupName $work_group;

  public function __construct(shape(
    ?'max_results' => ?MaxNamedQueriesCount,
    ?'next_token' => ?Token,
    ?'work_group' => ?WorkGroupName,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->work_group = $s['work_group'] ?? '';
  }
}

class ListNamedQueriesOutput {
  public ?NamedQueryIdList $named_query_ids;
  public ?Token $next_token;

  public function __construct(shape(
    ?'named_query_ids' => ?NamedQueryIdList,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->named_query_ids = $s['named_query_ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListQueryExecutionsInput {
  public ?MaxQueryExecutionsCount $max_results;
  public ?Token $next_token;
  public ?WorkGroupName $work_group;

  public function __construct(shape(
    ?'max_results' => ?MaxQueryExecutionsCount,
    ?'next_token' => ?Token,
    ?'work_group' => ?WorkGroupName,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->work_group = $s['work_group'] ?? '';
  }
}

class ListQueryExecutionsOutput {
  public ?Token $next_token;
  public ?QueryExecutionIdList $query_execution_ids;

  public function __construct(shape(
    ?'next_token' => ?Token,
    ?'query_execution_ids' => ?QueryExecutionIdList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->query_execution_ids = $s['query_execution_ids'] ?? vec[];
  }
}

class ListTagsForResourceInput {
  public ?MaxTagsCount $max_results;
  public ?Token $next_token;
  public ?AmazonResourceName $resource_arn;

  public function __construct(shape(
    ?'max_results' => ?MaxTagsCount,
    ?'next_token' => ?Token,
    ?'resource_arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceOutput {
  public ?Token $next_token;
  public ?TagList $tags;

  public function __construct(shape(
    ?'next_token' => ?Token,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ListWorkGroupsInput {
  public ?MaxWorkGroupsCount $max_results;
  public ?Token $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxWorkGroupsCount,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListWorkGroupsOutput {
  public ?Token $next_token;
  public ?WorkGroupsList $work_groups;

  public function __construct(shape(
    ?'next_token' => ?Token,
    ?'work_groups' => ?WorkGroupsList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->work_groups = $s['work_groups'] ?? vec[];
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
  public ?DatabaseString $database;
  public ?DescriptionString $description;
  public ?NameString $name;
  public ?NamedQueryId $named_query_id;
  public ?QueryString $query_string;
  public ?WorkGroupName $work_group;

  public function __construct(shape(
    ?'database' => ?DatabaseString,
    ?'description' => ?DescriptionString,
    ?'name' => ?NameString,
    ?'named_query_id' => ?NamedQueryId,
    ?'query_string' => ?QueryString,
    ?'work_group' => ?WorkGroupName,
  ) $s = shape()) {
    $this->database = $s['database'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->named_query_id = $s['named_query_id'] ?? '';
    $this->query_string = $s['query_string'] ?? '';
    $this->work_group = $s['work_group'] ?? '';
  }
}

type NamedQueryId = string;

type NamedQueryIdList = vec<NamedQueryId>;

type NamedQueryList = vec<NamedQuery>;

class QueryExecution {
  public ?QueryString $query;
  public ?QueryExecutionContext $query_execution_context;
  public ?QueryExecutionId $query_execution_id;
  public ?ResultConfiguration $result_configuration;
  public ?StatementType $statement_type;
  public ?QueryExecutionStatistics $statistics;
  public ?QueryExecutionStatus $status;
  public ?WorkGroupName $work_group;

  public function __construct(shape(
    ?'query' => ?QueryString,
    ?'query_execution_context' => ?QueryExecutionContext,
    ?'query_execution_id' => ?QueryExecutionId,
    ?'result_configuration' => ?ResultConfiguration,
    ?'statement_type' => ?StatementType,
    ?'statistics' => ?QueryExecutionStatistics,
    ?'status' => ?QueryExecutionStatus,
    ?'work_group' => ?WorkGroupName,
  ) $s = shape()) {
    $this->query = $s['query'] ?? '';
    $this->query_execution_context = $s['query_execution_context'] ?? null;
    $this->query_execution_id = $s['query_execution_id'] ?? '';
    $this->result_configuration = $s['result_configuration'] ?? null;
    $this->statement_type = $s['statement_type'] ?? '';
    $this->statistics = $s['statistics'] ?? null;
    $this->status = $s['status'] ?? null;
    $this->work_group = $s['work_group'] ?? '';
  }
}

class QueryExecutionContext {
  public ?DatabaseString $database;

  public function __construct(shape(
    ?'database' => ?DatabaseString,
  ) $s = shape()) {
    $this->database = $s['database'] ?? '';
  }
}

type QueryExecutionId = string;

type QueryExecutionIdList = vec<QueryExecutionId>;

type QueryExecutionList = vec<QueryExecution>;

type QueryExecutionState = string;

class QueryExecutionStatistics {
  public string $data_manifest_location;
  public ?Long $data_scanned_in_bytes;
  public ?Long $engine_execution_time_in_millis;
  public ?Long $query_planning_time_in_millis;
  public ?Long $query_queue_time_in_millis;
  public ?Long $service_processing_time_in_millis;
  public ?Long $total_execution_time_in_millis;

  public function __construct(shape(
    ?'data_manifest_location' => string,
    ?'data_scanned_in_bytes' => ?Long,
    ?'engine_execution_time_in_millis' => ?Long,
    ?'query_planning_time_in_millis' => ?Long,
    ?'query_queue_time_in_millis' => ?Long,
    ?'service_processing_time_in_millis' => ?Long,
    ?'total_execution_time_in_millis' => ?Long,
  ) $s = shape()) {
    $this->data_manifest_location = $s['data_manifest_location'] ?? '';
    $this->data_scanned_in_bytes = $s['data_scanned_in_bytes'] ?? 0;
    $this->engine_execution_time_in_millis = $s['engine_execution_time_in_millis'] ?? 0;
    $this->query_planning_time_in_millis = $s['query_planning_time_in_millis'] ?? 0;
    $this->query_queue_time_in_millis = $s['query_queue_time_in_millis'] ?? 0;
    $this->service_processing_time_in_millis = $s['service_processing_time_in_millis'] ?? 0;
    $this->total_execution_time_in_millis = $s['total_execution_time_in_millis'] ?? 0;
  }
}

class QueryExecutionStatus {
  public ?Date $completion_date_time;
  public ?QueryExecutionState $state;
  public string $state_change_reason;
  public ?Date $submission_date_time;

  public function __construct(shape(
    ?'completion_date_time' => ?Date,
    ?'state' => ?QueryExecutionState,
    ?'state_change_reason' => string,
    ?'submission_date_time' => ?Date,
  ) $s = shape()) {
    $this->completion_date_time = $s['completion_date_time'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->state_change_reason = $s['state_change_reason'] ?? '';
    $this->submission_date_time = $s['submission_date_time'] ?? 0;
  }
}

type QueryString = string;

class ResourceNotFoundException {
  public ?ErrorMessage $message;
  public ?AmazonResourceName $resource_name;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
    ?'resource_name' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_name = $s['resource_name'] ?? '';
  }
}

class ResultConfiguration {
  public ?EncryptionConfiguration $encryption_configuration;
  public string $output_location;

  public function __construct(shape(
    ?'encryption_configuration' => ?EncryptionConfiguration,
    ?'output_location' => string,
  ) $s = shape()) {
    $this->encryption_configuration = $s['encryption_configuration'] ?? null;
    $this->output_location = $s['output_location'] ?? '';
  }
}

class ResultConfigurationUpdates {
  public ?EncryptionConfiguration $encryption_configuration;
  public string $output_location;
  public ?BoxedBoolean $remove_encryption_configuration;
  public ?BoxedBoolean $remove_output_location;

  public function __construct(shape(
    ?'encryption_configuration' => ?EncryptionConfiguration,
    ?'output_location' => string,
    ?'remove_encryption_configuration' => ?BoxedBoolean,
    ?'remove_output_location' => ?BoxedBoolean,
  ) $s = shape()) {
    $this->encryption_configuration = $s['encryption_configuration'] ?? null;
    $this->output_location = $s['output_location'] ?? '';
    $this->remove_encryption_configuration = $s['remove_encryption_configuration'] ?? false;
    $this->remove_output_location = $s['remove_output_location'] ?? false;
  }
}

class ResultSet {
  public ?ResultSetMetadata $result_set_metadata;
  public ?RowList $rows;

  public function __construct(shape(
    ?'result_set_metadata' => ?ResultSetMetadata,
    ?'rows' => ?RowList,
  ) $s = shape()) {
    $this->result_set_metadata = $s['result_set_metadata'] ?? null;
    $this->rows = $s['rows'] ?? vec[];
  }
}

class ResultSetMetadata {
  public ?ColumnInfoList $column_info;

  public function __construct(shape(
    ?'column_info' => ?ColumnInfoList,
  ) $s = shape()) {
    $this->column_info = $s['column_info'] ?? vec[];
  }
}

class Row {
  public ?datumList $data;

  public function __construct(shape(
    ?'data' => ?datumList,
  ) $s = shape()) {
    $this->data = $s['data'] ?? vec[];
  }
}

type RowList = vec<Row>;

class StartQueryExecutionInput {
  public ?IdempotencyToken $client_request_token;
  public ?QueryExecutionContext $query_execution_context;
  public ?QueryString $query_string;
  public ?ResultConfiguration $result_configuration;
  public ?WorkGroupName $work_group;

  public function __construct(shape(
    ?'client_request_token' => ?IdempotencyToken,
    ?'query_execution_context' => ?QueryExecutionContext,
    ?'query_string' => ?QueryString,
    ?'result_configuration' => ?ResultConfiguration,
    ?'work_group' => ?WorkGroupName,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->query_execution_context = $s['query_execution_context'] ?? null;
    $this->query_string = $s['query_string'] ?? '';
    $this->result_configuration = $s['result_configuration'] ?? null;
    $this->work_group = $s['work_group'] ?? '';
  }
}

class StartQueryExecutionOutput {
  public ?QueryExecutionId $query_execution_id;

  public function __construct(shape(
    ?'query_execution_id' => ?QueryExecutionId,
  ) $s = shape()) {
    $this->query_execution_id = $s['query_execution_id'] ?? '';
  }
}

type StatementType = string;

class StopQueryExecutionInput {
  public ?QueryExecutionId $query_execution_id;

  public function __construct(shape(
    ?'query_execution_id' => ?QueryExecutionId,
  ) $s = shape()) {
    $this->query_execution_id = $s['query_execution_id'] ?? '';
  }
}

class StopQueryExecutionOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type String = string;

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

class TagResourceInput {
  public ?AmazonResourceName $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
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
  public ?ErrorMessage $message;
  public ?ThrottleReason $reason;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
    ?'reason' => ?ThrottleReason,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

class UnprocessedNamedQueryId {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;
  public ?NamedQueryId $named_query_id;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
    ?'named_query_id' => ?NamedQueryId,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->named_query_id = $s['named_query_id'] ?? '';
  }
}

type UnprocessedNamedQueryIdList = vec<UnprocessedNamedQueryId>;

class UnprocessedQueryExecutionId {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;
  public ?QueryExecutionId $query_execution_id;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
    ?'query_execution_id' => ?QueryExecutionId,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->query_execution_id = $s['query_execution_id'] ?? '';
  }
}

type UnprocessedQueryExecutionIdList = vec<UnprocessedQueryExecutionId>;

class UntagResourceInput {
  public ?AmazonResourceName $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateWorkGroupInput {
  public ?WorkGroupConfigurationUpdates $configuration_updates;
  public ?WorkGroupDescriptionString $description;
  public ?WorkGroupState $state;
  public ?WorkGroupName $work_group;

  public function __construct(shape(
    ?'configuration_updates' => ?WorkGroupConfigurationUpdates,
    ?'description' => ?WorkGroupDescriptionString,
    ?'state' => ?WorkGroupState,
    ?'work_group' => ?WorkGroupName,
  ) $s = shape()) {
    $this->configuration_updates = $s['configuration_updates'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->work_group = $s['work_group'] ?? '';
  }
}

class UpdateWorkGroupOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class WorkGroup {
  public ?WorkGroupConfiguration $configuration;
  public ?Date $creation_time;
  public ?WorkGroupDescriptionString $description;
  public ?WorkGroupName $name;
  public ?WorkGroupState $state;

  public function __construct(shape(
    ?'configuration' => ?WorkGroupConfiguration,
    ?'creation_time' => ?Date,
    ?'description' => ?WorkGroupDescriptionString,
    ?'name' => ?WorkGroupName,
    ?'state' => ?WorkGroupState,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class WorkGroupConfiguration {
  public ?BytesScannedCutoffValue $bytes_scanned_cutoff_per_query;
  public ?BoxedBoolean $enforce_work_group_configuration;
  public ?BoxedBoolean $publish_cloud_watch_metrics_enabled;
  public ?BoxedBoolean $requester_pays_enabled;
  public ?ResultConfiguration $result_configuration;

  public function __construct(shape(
    ?'bytes_scanned_cutoff_per_query' => ?BytesScannedCutoffValue,
    ?'enforce_work_group_configuration' => ?BoxedBoolean,
    ?'publish_cloud_watch_metrics_enabled' => ?BoxedBoolean,
    ?'requester_pays_enabled' => ?BoxedBoolean,
    ?'result_configuration' => ?ResultConfiguration,
  ) $s = shape()) {
    $this->bytes_scanned_cutoff_per_query = $s['bytes_scanned_cutoff_per_query'] ?? 0;
    $this->enforce_work_group_configuration = $s['enforce_work_group_configuration'] ?? false;
    $this->publish_cloud_watch_metrics_enabled = $s['publish_cloud_watch_metrics_enabled'] ?? false;
    $this->requester_pays_enabled = $s['requester_pays_enabled'] ?? false;
    $this->result_configuration = $s['result_configuration'] ?? null;
  }
}

class WorkGroupConfigurationUpdates {
  public ?BytesScannedCutoffValue $bytes_scanned_cutoff_per_query;
  public ?BoxedBoolean $enforce_work_group_configuration;
  public ?BoxedBoolean $publish_cloud_watch_metrics_enabled;
  public ?BoxedBoolean $remove_bytes_scanned_cutoff_per_query;
  public ?BoxedBoolean $requester_pays_enabled;
  public ?ResultConfigurationUpdates $result_configuration_updates;

  public function __construct(shape(
    ?'bytes_scanned_cutoff_per_query' => ?BytesScannedCutoffValue,
    ?'enforce_work_group_configuration' => ?BoxedBoolean,
    ?'publish_cloud_watch_metrics_enabled' => ?BoxedBoolean,
    ?'remove_bytes_scanned_cutoff_per_query' => ?BoxedBoolean,
    ?'requester_pays_enabled' => ?BoxedBoolean,
    ?'result_configuration_updates' => ?ResultConfigurationUpdates,
  ) $s = shape()) {
    $this->bytes_scanned_cutoff_per_query = $s['bytes_scanned_cutoff_per_query'] ?? 0;
    $this->enforce_work_group_configuration = $s['enforce_work_group_configuration'] ?? false;
    $this->publish_cloud_watch_metrics_enabled = $s['publish_cloud_watch_metrics_enabled'] ?? false;
    $this->remove_bytes_scanned_cutoff_per_query = $s['remove_bytes_scanned_cutoff_per_query'] ?? false;
    $this->requester_pays_enabled = $s['requester_pays_enabled'] ?? false;
    $this->result_configuration_updates = $s['result_configuration_updates'] ?? null;
  }
}

type WorkGroupDescriptionString = string;

type WorkGroupName = string;

type WorkGroupState = string;

class WorkGroupSummary {
  public ?Date $creation_time;
  public ?WorkGroupDescriptionString $description;
  public ?WorkGroupName $name;
  public ?WorkGroupState $state;

  public function __construct(shape(
    ?'creation_time' => ?Date,
    ?'description' => ?WorkGroupDescriptionString,
    ?'name' => ?WorkGroupName,
    ?'state' => ?WorkGroupState,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

type WorkGroupsList = vec<WorkGroupSummary>;

type datumList = vec<Datum>;

type datumString = string;

