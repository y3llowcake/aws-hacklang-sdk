<?hh // strict
namespace slack\aws\athena;

interface Athena {
  public function ListQueryExecutions(ListQueryExecutionsInput) Awaitable<Errors\Result<ListQueryExecutionsOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput) Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Result<UntagResourceOutput>>;
  public function DeleteWorkGroup(DeleteWorkGroupInput) Awaitable<Errors\Result<DeleteWorkGroupOutput>>;
  public function GetQueryExecution(GetQueryExecutionInput) Awaitable<Errors\Result<GetQueryExecutionOutput>>;
  public function DeleteNamedQuery(DeleteNamedQueryInput) Awaitable<Errors\Result<DeleteNamedQueryOutput>>;
  public function GetWorkGroup(GetWorkGroupInput) Awaitable<Errors\Result<GetWorkGroupOutput>>;
  public function UpdateWorkGroup(UpdateWorkGroupInput) Awaitable<Errors\Result<UpdateWorkGroupOutput>>;
  public function BatchGetNamedQuery(BatchGetNamedQueryInput) Awaitable<Errors\Result<BatchGetNamedQueryOutput>>;
  public function BatchGetQueryExecution(BatchGetQueryExecutionInput) Awaitable<Errors\Result<BatchGetQueryExecutionOutput>>;
  public function StartQueryExecution(StartQueryExecutionInput) Awaitable<Errors\Result<StartQueryExecutionOutput>>;
  public function StopQueryExecution(StopQueryExecutionInput) Awaitable<Errors\Result<StopQueryExecutionOutput>>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Result<TagResourceOutput>>;
  public function CreateNamedQuery(CreateNamedQueryInput) Awaitable<Errors\Result<CreateNamedQueryOutput>>;
  public function CreateWorkGroup(CreateWorkGroupInput) Awaitable<Errors\Result<CreateWorkGroupOutput>>;
  public function ListNamedQueries(ListNamedQueriesInput) Awaitable<Errors\Result<ListNamedQueriesOutput>>;
  public function ListWorkGroups(ListWorkGroupsInput) Awaitable<Errors\Result<ListWorkGroupsOutput>>;
  public function GetNamedQuery(GetNamedQueryInput) Awaitable<Errors\Result<GetNamedQueryOutput>>;
  public function GetQueryResults(GetQueryResultsInput) Awaitable<Errors\Result<GetQueryResultsOutput>>;
}

class ResultConfigurationUpdates {
  public string $output_location;
  public BoxedBoolean $remove_output_location;
  public EncryptionConfiguration $encryption_configuration;
  public BoxedBoolean $remove_encryption_configuration;
}

class UnprocessedQueryExecutionId {
  public QueryExecutionId $query_execution_id;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class GetNamedQueryInput {
  public NamedQueryId $named_query_id;
}

class StatementType {
}

class TagResourceInput {
  public AmazonResourceName $resource_arn;
  public TagList $tags;
}

class ColumnInfoList {
}

class ThrottleReason {
}

class ListNamedQueriesOutput {
  public NamedQueryIdList $named_query_ids;
  public Token $next_token;
}

class WorkGroup {
  public Date $creation_time;
  public WorkGroupName $name;
  public WorkGroupState $state;
  public WorkGroupConfiguration $configuration;
  public WorkGroupDescriptionString $description;
}

class StartQueryExecutionOutput {
  public QueryExecutionId $query_execution_id;
}

class WorkGroupSummary {
  public WorkGroupName $name;
  public WorkGroupState $state;
  public WorkGroupDescriptionString $description;
  public Date $creation_time;
}

class ColumnInfo {
  public int $precision;
  public ColumnNullable $nullable;
  public string $catalog_name;
  public string $table_name;
  public string $type;
  public int $scale;
  public boolean $case_sensitive;
  public string $schema_name;
  public string $name;
  public string $label;
}

class GetWorkGroupInput {
  public WorkGroupName $work_group;
}

class QueryExecutionStatistics {
  public Long $total_execution_time_in_millis;
  public Long $query_queue_time_in_millis;
  public Long $query_planning_time_in_millis;
  public Long $service_processing_time_in_millis;
  public Long $engine_execution_time_in_millis;
  public Long $data_scanned_in_bytes;
  public string $data_manifest_location;
}

class TagValue {
}

class NamedQueryIdList {
}

class BytesScannedCutoffValue {
}

class ListTagsForResourceOutput {
  public TagList $tags;
  public Token $next_token;
}

class Integer {
}

class RowList {
}

class TooManyRequestsException {
  public ErrorMessage $message;
  public ThrottleReason $reason;
}

class UnprocessedNamedQueryIdList {
}

class ErrorMessage {
}

class GetWorkGroupOutput {
  public WorkGroup $work_group;
}

class StopQueryExecutionOutput {
}

class AmazonResourceName {
}

class QueryExecution {
  public WorkGroupName $work_group;
  public QueryExecutionId $query_execution_id;
  public QueryString $query;
  public StatementType $statement_type;
  public ResultConfiguration $result_configuration;
  public QueryExecutionContext $query_execution_context;
  public QueryExecutionStatus $status;
  public QueryExecutionStatistics $statistics;
}

class IdempotencyToken {
}

class ListQueryExecutionsInput {
  public Token $next_token;
  public MaxQueryExecutionsCount $max_results;
  public WorkGroupName $work_group;
}

class ListQueryExecutionsOutput {
  public QueryExecutionIdList $query_execution_ids;
  public Token $next_token;
}

class StopQueryExecutionInput {
  public QueryExecutionId $query_execution_id;
}

class WorkGroupConfiguration {
  public ResultConfiguration $result_configuration;
  public BoxedBoolean $enforce_work_group_configuration;
  public BoxedBoolean $publish_cloud_watch_metrics_enabled;
  public BytesScannedCutoffValue $bytes_scanned_cutoff_per_query;
  public BoxedBoolean $requester_pays_enabled;
}

class BatchGetQueryExecutionOutput {
  public QueryExecutionList $query_executions;
  public UnprocessedQueryExecutionIdList $unprocessed_query_execution_ids;
}

class Date {
}

class DeleteWorkGroupOutput {
}

class UpdateWorkGroupInput {
  public WorkGroupName $work_group;
  public WorkGroupDescriptionString $description;
  public WorkGroupConfigurationUpdates $configuration_updates;
  public WorkGroupState $state;
}

class datumString {
}

class DescriptionString {
}

class ListTagsForResourceInput {
  public MaxTagsCount $max_results;
  public AmazonResourceName $resource_arn;
  public Token $next_token;
}

class QueryExecutionIdList {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class datumList {
}

class Boolean {
}

class ListNamedQueriesInput {
  public Token $next_token;
  public MaxNamedQueriesCount $max_results;
  public WorkGroupName $work_group;
}

class GetNamedQueryOutput {
  public NamedQuery $named_query;
}

class UpdateWorkGroupOutput {
}

class InvalidRequestException {
  public ErrorCode $athena_error_code;
  public ErrorMessage $message;
}

class ResultConfiguration {
  public string $output_location;
  public EncryptionConfiguration $encryption_configuration;
}

class CreateNamedQueryInput {
  public DescriptionString $description;
  public DatabaseString $database;
  public QueryString $query_string;
  public IdempotencyToken $client_request_token;
  public WorkGroupName $work_group;
  public NameString $name;
}

class QueryExecutionId {
}

class QueryExecutionList {
}

class WorkGroupState {
}

class BatchGetNamedQueryInput {
  public NamedQueryIdList $named_query_ids;
}

class InternalServerException {
  public ErrorMessage $message;
}

class NamedQueryId {
}

class NamedQueryList {
}

class ResultSet {
  public RowList $rows;
  public ResultSetMetadata $result_set_metadata;
}

class CreateNamedQueryOutput {
  public NamedQueryId $named_query_id;
}

class QueryExecutionContext {
  public DatabaseString $database;
}

class WorkGroupConfigurationUpdates {
  public BytesScannedCutoffValue $bytes_scanned_cutoff_per_query;
  public BoxedBoolean $remove_bytes_scanned_cutoff_per_query;
  public BoxedBoolean $requester_pays_enabled;
  public BoxedBoolean $enforce_work_group_configuration;
  public ResultConfigurationUpdates $result_configuration_updates;
  public BoxedBoolean $publish_cloud_watch_metrics_enabled;
}

class GetQueryExecutionInput {
  public QueryExecutionId $query_execution_id;
}

class TagList {
}

class Long {
}

class UntagResourceOutput {
}

class MaxQueryExecutionsCount {
}

class TagKey {
}

class WorkGroupsList {
}

class CreateWorkGroupInput {
  public TagList $tags;
  public WorkGroupName $name;
  public WorkGroupConfiguration $configuration;
  public WorkGroupDescriptionString $description;
}

class Datum {
  public datumString $var_char_value;
}

class MaxWorkGroupsCount {
}

class QueryExecutionState {
}

class QueryString {
}

class Row {
  public datumList $data;
}

class TagKeyList {
}

class TagResourceOutput {
}

class GetQueryResultsOutput {
  public ResultSet $result_set;
  public Token $next_token;
  public Long $update_count;
}

class MaxTagsCount {
}

class UnprocessedQueryExecutionIdList {
}

class WorkGroupName {
}

class MaxQueryResults {
}

class WorkGroupDescriptionString {
}

class BoxedBoolean {
}

class EncryptionOption {
}

class NamedQuery {
  public NameString $name;
  public DescriptionString $description;
  public DatabaseString $database;
  public QueryString $query_string;
  public NamedQueryId $named_query_id;
  public WorkGroupName $work_group;
}

class DeleteNamedQueryOutput {
}

class DeleteWorkGroupInput {
  public WorkGroupName $work_group;
  public BoxedBoolean $recursive_delete_option;
}

class GetQueryExecutionOutput {
  public QueryExecution $query_execution;
}

class CreateWorkGroupOutput {
}

class DeleteNamedQueryInput {
  public NamedQueryId $named_query_id;
}

class NameString {
}

class ResourceNotFoundException {
  public AmazonResourceName $resource_name;
  public ErrorMessage $message;
}

class ResultSetMetadata {
  public ColumnInfoList $column_info;
}

class ColumnNullable {
}

class ErrorCode {
}

class ListWorkGroupsOutput {
  public WorkGroupsList $work_groups;
  public Token $next_token;
}

class QueryExecutionStatus {
  public QueryExecutionState $state;
  public string $state_change_reason;
  public Date $submission_date_time;
  public Date $completion_date_time;
}

class StartQueryExecutionInput {
  public QueryString $query_string;
  public IdempotencyToken $client_request_token;
  public QueryExecutionContext $query_execution_context;
  public ResultConfiguration $result_configuration;
  public WorkGroupName $work_group;
}

class UnprocessedNamedQueryId {
  public NamedQueryId $named_query_id;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class DatabaseString {
}

class ListWorkGroupsInput {
  public Token $next_token;
  public MaxWorkGroupsCount $max_results;
}

class UntagResourceInput {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;
}

class GetQueryResultsInput {
  public QueryExecutionId $query_execution_id;
  public Token $next_token;
  public MaxQueryResults $max_results;
}

class String {
}

class Token {
}

class BatchGetNamedQueryOutput {
  public NamedQueryList $named_queries;
  public UnprocessedNamedQueryIdList $unprocessed_named_query_ids;
}

class BatchGetQueryExecutionInput {
  public QueryExecutionIdList $query_execution_ids;
}

class MaxNamedQueriesCount {
}

class EncryptionConfiguration {
  public string $kms_key;
  public EncryptionOption $encryption_option;
}

