<?hh // strict
namespace slack\aws\athena;

interface Athena {
  public function BatchGetNamedQuery(BatchGetNamedQueryInput) Awaitable<Errors\Result<BatchGetNamedQueryOutput>>;
  public function BatchGetQueryExecution(BatchGetQueryExecutionInput) Awaitable<Errors\Result<BatchGetQueryExecutionOutput>>;
  public function CreateNamedQuery(CreateNamedQueryInput) Awaitable<Errors\Result<CreateNamedQueryOutput>>;
  public function CreateWorkGroup(CreateWorkGroupInput) Awaitable<Errors\Result<CreateWorkGroupOutput>>;
  public function DeleteNamedQuery(DeleteNamedQueryInput) Awaitable<Errors\Result<DeleteNamedQueryOutput>>;
  public function DeleteWorkGroup(DeleteWorkGroupInput) Awaitable<Errors\Result<DeleteWorkGroupOutput>>;
  public function GetNamedQuery(GetNamedQueryInput) Awaitable<Errors\Result<GetNamedQueryOutput>>;
  public function GetQueryExecution(GetQueryExecutionInput) Awaitable<Errors\Result<GetQueryExecutionOutput>>;
  public function GetQueryResults(GetQueryResultsInput) Awaitable<Errors\Result<GetQueryResultsOutput>>;
  public function GetWorkGroup(GetWorkGroupInput) Awaitable<Errors\Result<GetWorkGroupOutput>>;
  public function ListNamedQueries(ListNamedQueriesInput) Awaitable<Errors\Result<ListNamedQueriesOutput>>;
  public function ListQueryExecutions(ListQueryExecutionsInput) Awaitable<Errors\Result<ListQueryExecutionsOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput) Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function ListWorkGroups(ListWorkGroupsInput) Awaitable<Errors\Result<ListWorkGroupsOutput>>;
  public function StartQueryExecution(StartQueryExecutionInput) Awaitable<Errors\Result<StartQueryExecutionOutput>>;
  public function StopQueryExecution(StopQueryExecutionInput) Awaitable<Errors\Result<StopQueryExecutionOutput>>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Result<UntagResourceOutput>>;
  public function UpdateWorkGroup(UpdateWorkGroupInput) Awaitable<Errors\Result<UpdateWorkGroupOutput>>;
}

class AmazonResourceName {
}

class BatchGetNamedQueryInput {
  public NamedQueryIdList $named_query_ids;
}

class BatchGetNamedQueryOutput {
  public NamedQueryList $named_queries;
  public UnprocessedNamedQueryIdList $unprocessed_named_query_ids;
}

class BatchGetQueryExecutionInput {
  public QueryExecutionIdList $query_execution_ids;
}

class BatchGetQueryExecutionOutput {
  public QueryExecutionList $query_executions;
  public UnprocessedQueryExecutionIdList $unprocessed_query_execution_ids;
}

class Boolean {
}

class BoxedBoolean {
}

class BytesScannedCutoffValue {
}

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
}

class ColumnInfoList {
}

class ColumnNullable {
}

class CreateNamedQueryInput {
  public IdempotencyToken $client_request_token;
  public DatabaseString $database;
  public DescriptionString $description;
  public NameString $name;
  public QueryString $query_string;
  public WorkGroupName $work_group;
}

class CreateNamedQueryOutput {
  public NamedQueryId $named_query_id;
}

class CreateWorkGroupInput {
  public WorkGroupConfiguration $configuration;
  public WorkGroupDescriptionString $description;
  public WorkGroupName $name;
  public TagList $tags;
}

class CreateWorkGroupOutput {
}

class DatabaseString {
}

class Date {
}

class Datum {
  public datumString $var_char_value;
}

class DeleteNamedQueryInput {
  public NamedQueryId $named_query_id;
}

class DeleteNamedQueryOutput {
}

class DeleteWorkGroupInput {
  public BoxedBoolean $recursive_delete_option;
  public WorkGroupName $work_group;
}

class DeleteWorkGroupOutput {
}

class DescriptionString {
}

class EncryptionConfiguration {
  public EncryptionOption $encryption_option;
  public string $kms_key;
}

class EncryptionOption {
}

class ErrorCode {
}

class ErrorMessage {
}

class GetNamedQueryInput {
  public NamedQueryId $named_query_id;
}

class GetNamedQueryOutput {
  public NamedQuery $named_query;
}

class GetQueryExecutionInput {
  public QueryExecutionId $query_execution_id;
}

class GetQueryExecutionOutput {
  public QueryExecution $query_execution;
}

class GetQueryResultsInput {
  public MaxQueryResults $max_results;
  public Token $next_token;
  public QueryExecutionId $query_execution_id;
}

class GetQueryResultsOutput {
  public Token $next_token;
  public ResultSet $result_set;
  public Long $update_count;
}

class GetWorkGroupInput {
  public WorkGroupName $work_group;
}

class GetWorkGroupOutput {
  public WorkGroup $work_group;
}

class IdempotencyToken {
}

class Integer {
}

class InternalServerException {
  public ErrorMessage $message;
}

class InvalidRequestException {
  public ErrorCode $athena_error_code;
  public ErrorMessage $message;
}

class ListNamedQueriesInput {
  public MaxNamedQueriesCount $max_results;
  public Token $next_token;
  public WorkGroupName $work_group;
}

class ListNamedQueriesOutput {
  public NamedQueryIdList $named_query_ids;
  public Token $next_token;
}

class ListQueryExecutionsInput {
  public MaxQueryExecutionsCount $max_results;
  public Token $next_token;
  public WorkGroupName $work_group;
}

class ListQueryExecutionsOutput {
  public Token $next_token;
  public QueryExecutionIdList $query_execution_ids;
}

class ListTagsForResourceInput {
  public MaxTagsCount $max_results;
  public Token $next_token;
  public AmazonResourceName $resource_arn;
}

class ListTagsForResourceOutput {
  public Token $next_token;
  public TagList $tags;
}

class ListWorkGroupsInput {
  public MaxWorkGroupsCount $max_results;
  public Token $next_token;
}

class ListWorkGroupsOutput {
  public Token $next_token;
  public WorkGroupsList $work_groups;
}

class Long {
}

class MaxNamedQueriesCount {
}

class MaxQueryExecutionsCount {
}

class MaxQueryResults {
}

class MaxTagsCount {
}

class MaxWorkGroupsCount {
}

class NameString {
}

class NamedQuery {
  public DatabaseString $database;
  public DescriptionString $description;
  public NameString $name;
  public NamedQueryId $named_query_id;
  public QueryString $query_string;
  public WorkGroupName $work_group;
}

class NamedQueryId {
}

class NamedQueryIdList {
}

class NamedQueryList {
}

class QueryExecution {
  public QueryString $query;
  public QueryExecutionContext $query_execution_context;
  public QueryExecutionId $query_execution_id;
  public ResultConfiguration $result_configuration;
  public StatementType $statement_type;
  public QueryExecutionStatistics $statistics;
  public QueryExecutionStatus $status;
  public WorkGroupName $work_group;
}

class QueryExecutionContext {
  public DatabaseString $database;
}

class QueryExecutionId {
}

class QueryExecutionIdList {
}

class QueryExecutionList {
}

class QueryExecutionState {
}

class QueryExecutionStatistics {
  public string $data_manifest_location;
  public Long $data_scanned_in_bytes;
  public Long $engine_execution_time_in_millis;
  public Long $query_planning_time_in_millis;
  public Long $query_queue_time_in_millis;
  public Long $service_processing_time_in_millis;
  public Long $total_execution_time_in_millis;
}

class QueryExecutionStatus {
  public Date $completion_date_time;
  public QueryExecutionState $state;
  public string $state_change_reason;
  public Date $submission_date_time;
}

class QueryString {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
  public AmazonResourceName $resource_name;
}

class ResultConfiguration {
  public EncryptionConfiguration $encryption_configuration;
  public string $output_location;
}

class ResultConfigurationUpdates {
  public EncryptionConfiguration $encryption_configuration;
  public string $output_location;
  public BoxedBoolean $remove_encryption_configuration;
  public BoxedBoolean $remove_output_location;
}

class ResultSet {
  public ResultSetMetadata $result_set_metadata;
  public RowList $rows;
}

class ResultSetMetadata {
  public ColumnInfoList $column_info;
}

class Row {
  public datumList $data;
}

class RowList {
}

class StartQueryExecutionInput {
  public IdempotencyToken $client_request_token;
  public QueryExecutionContext $query_execution_context;
  public QueryString $query_string;
  public ResultConfiguration $result_configuration;
  public WorkGroupName $work_group;
}

class StartQueryExecutionOutput {
  public QueryExecutionId $query_execution_id;
}

class StatementType {
}

class StopQueryExecutionInput {
  public QueryExecutionId $query_execution_id;
}

class StopQueryExecutionOutput {
}

class String {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceInput {
  public AmazonResourceName $resource_arn;
  public TagList $tags;
}

class TagResourceOutput {
}

class TagValue {
}

class ThrottleReason {
}

class Token {
}

class TooManyRequestsException {
  public ErrorMessage $message;
  public ThrottleReason $reason;
}

class UnprocessedNamedQueryId {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public NamedQueryId $named_query_id;
}

class UnprocessedNamedQueryIdList {
}

class UnprocessedQueryExecutionId {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public QueryExecutionId $query_execution_id;
}

class UnprocessedQueryExecutionIdList {
}

class UntagResourceInput {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceOutput {
}

class UpdateWorkGroupInput {
  public WorkGroupConfigurationUpdates $configuration_updates;
  public WorkGroupDescriptionString $description;
  public WorkGroupState $state;
  public WorkGroupName $work_group;
}

class UpdateWorkGroupOutput {
}

class WorkGroup {
  public WorkGroupConfiguration $configuration;
  public Date $creation_time;
  public WorkGroupDescriptionString $description;
  public WorkGroupName $name;
  public WorkGroupState $state;
}

class WorkGroupConfiguration {
  public BytesScannedCutoffValue $bytes_scanned_cutoff_per_query;
  public BoxedBoolean $enforce_work_group_configuration;
  public BoxedBoolean $publish_cloud_watch_metrics_enabled;
  public BoxedBoolean $requester_pays_enabled;
  public ResultConfiguration $result_configuration;
}

class WorkGroupConfigurationUpdates {
  public BytesScannedCutoffValue $bytes_scanned_cutoff_per_query;
  public BoxedBoolean $enforce_work_group_configuration;
  public BoxedBoolean $publish_cloud_watch_metrics_enabled;
  public BoxedBoolean $remove_bytes_scanned_cutoff_per_query;
  public BoxedBoolean $requester_pays_enabled;
  public ResultConfigurationUpdates $result_configuration_updates;
}

class WorkGroupDescriptionString {
}

class WorkGroupName {
}

class WorkGroupState {
}

class WorkGroupSummary {
  public Date $creation_time;
  public WorkGroupDescriptionString $description;
  public WorkGroupName $name;
  public WorkGroupState $state;
}

class WorkGroupsList {
}

class datumList {
}

class datumString {
}

