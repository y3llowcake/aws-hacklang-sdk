<?hh // strict
namespace slack\aws\glue;

interface Glue {
  public function CreateConnection(CreateConnectionRequest) Awaitable<Errors\Result<CreateConnectionResponse>>;
  public function GetCrawler(GetCrawlerRequest) Awaitable<Errors\Result<GetCrawlerResponse>>;
  public function GetDatabases(GetDatabasesRequest) Awaitable<Errors\Result<GetDatabasesResponse>>;
  public function GetMLTaskRun(GetMLTaskRunRequest) Awaitable<Errors\Result<GetMLTaskRunResponse>>;
  public function GetSecurityConfiguration(GetSecurityConfigurationRequest) Awaitable<Errors\Result<GetSecurityConfigurationResponse>>;
  public function ImportCatalogToGlue(ImportCatalogToGlueRequest) Awaitable<Errors\Result<ImportCatalogToGlueResponse>>;
  public function BatchGetCrawlers(BatchGetCrawlersRequest) Awaitable<Errors\Result<BatchGetCrawlersResponse>>;
  public function StopCrawler(StopCrawlerRequest) Awaitable<Errors\Result<StopCrawlerResponse>>;
  public function BatchGetDevEndpoints(BatchGetDevEndpointsRequest) Awaitable<Errors\Result<BatchGetDevEndpointsResponse>>;
  public function BatchStopJobRun(BatchStopJobRunRequest) Awaitable<Errors\Result<BatchStopJobRunResponse>>;
  public function DeleteWorkflow(DeleteWorkflowRequest) Awaitable<Errors\Result<DeleteWorkflowResponse>>;
  public function GetDataCatalogEncryptionSettings(GetDataCatalogEncryptionSettingsRequest) Awaitable<Errors\Result<GetDataCatalogEncryptionSettingsResponse>>;
  public function CreateTrigger(CreateTriggerRequest) Awaitable<Errors\Result<CreateTriggerResponse>>;
  public function DeleteTrigger(DeleteTriggerRequest) Awaitable<Errors\Result<DeleteTriggerResponse>>;
  public function DeleteUserDefinedFunction(DeleteUserDefinedFunctionRequest) Awaitable<Errors\Result<DeleteUserDefinedFunctionResponse>>;
  public function GetPartition(GetPartitionRequest) Awaitable<Errors\Result<GetPartitionResponse>>;
  public function GetCatalogImportStatus(GetCatalogImportStatusRequest) Awaitable<Errors\Result<GetCatalogImportStatusResponse>>;
  public function GetJobBookmark(GetJobBookmarkRequest) Awaitable<Errors\Result<GetJobBookmarkResponse>>;
  public function ListJobs(ListJobsRequest) Awaitable<Errors\Result<ListJobsResponse>>;
  public function BatchGetWorkflows(BatchGetWorkflowsRequest) Awaitable<Errors\Result<BatchGetWorkflowsResponse>>;
  public function DeleteDatabase(DeleteDatabaseRequest) Awaitable<Errors\Result<DeleteDatabaseResponse>>;
  public function StartExportLabelsTaskRun(StartExportLabelsTaskRunRequest) Awaitable<Errors\Result<StartExportLabelsTaskRunResponse>>;
  public function GetResourcePolicy(GetResourcePolicyRequest) Awaitable<Errors\Result<GetResourcePolicyResponse>>;
  public function GetTable(GetTableRequest) Awaitable<Errors\Result<GetTableResponse>>;
  public function DeleteMLTransform(DeleteMLTransformRequest) Awaitable<Errors\Result<DeleteMLTransformResponse>>;
  public function ResetJobBookmark(ResetJobBookmarkRequest) Awaitable<Errors\Result<ResetJobBookmarkResponse>>;
  public function StartCrawlerSchedule(StartCrawlerScheduleRequest) Awaitable<Errors\Result<StartCrawlerScheduleResponse>>;
  public function DeletePartition(DeletePartitionRequest) Awaitable<Errors\Result<DeletePartitionResponse>>;
  public function GetMLTransform(GetMLTransformRequest) Awaitable<Errors\Result<GetMLTransformResponse>>;
  public function PutResourcePolicy(PutResourcePolicyRequest) Awaitable<Errors\Result<PutResourcePolicyResponse>>;
  public function BatchDeletePartition(BatchDeletePartitionRequest) Awaitable<Errors\Result<BatchDeletePartitionResponse>>;
  public function GetCrawlers(GetCrawlersRequest) Awaitable<Errors\Result<GetCrawlersResponse>>;
  public function UpdateUserDefinedFunction(UpdateUserDefinedFunctionRequest) Awaitable<Errors\Result<UpdateUserDefinedFunctionResponse>>;
  public function GetPlan(GetPlanRequest) Awaitable<Errors\Result<GetPlanResponse>>;
  public function GetTables(GetTablesRequest) Awaitable<Errors\Result<GetTablesResponse>>;
  public function CreateUserDefinedFunction(CreateUserDefinedFunctionRequest) Awaitable<Errors\Result<CreateUserDefinedFunctionResponse>>;
  public function GetJob(GetJobRequest) Awaitable<Errors\Result<GetJobResponse>>;
  public function GetUserDefinedFunctions(GetUserDefinedFunctionsRequest) Awaitable<Errors\Result<GetUserDefinedFunctionsResponse>>;
  public function GetWorkflowRuns(GetWorkflowRunsRequest) Awaitable<Errors\Result<GetWorkflowRunsResponse>>;
  public function UpdateCrawler(UpdateCrawlerRequest) Awaitable<Errors\Result<UpdateCrawlerResponse>>;
  public function CreateSecurityConfiguration(CreateSecurityConfigurationRequest) Awaitable<Errors\Result<CreateSecurityConfigurationResponse>>;
  public function ListCrawlers(ListCrawlersRequest) Awaitable<Errors\Result<ListCrawlersResponse>>;
  public function StartMLEvaluationTaskRun(StartMLEvaluationTaskRunRequest) Awaitable<Errors\Result<StartMLEvaluationTaskRunResponse>>;
  public function UpdateMLTransform(UpdateMLTransformRequest) Awaitable<Errors\Result<UpdateMLTransformResponse>>;
  public function CancelMLTaskRun(CancelMLTaskRunRequest) Awaitable<Errors\Result<CancelMLTaskRunResponse>>;
  public function CreateScript(CreateScriptRequest) Awaitable<Errors\Result<CreateScriptResponse>>;
  public function DeleteJob(DeleteJobRequest) Awaitable<Errors\Result<DeleteJobResponse>>;
  public function GetClassifier(GetClassifierRequest) Awaitable<Errors\Result<GetClassifierResponse>>;
  public function GetClassifiers(GetClassifiersRequest) Awaitable<Errors\Result<GetClassifiersResponse>>;
  public function GetConnections(GetConnectionsRequest) Awaitable<Errors\Result<GetConnectionsResponse>>;
  public function GetTags(GetTagsRequest) Awaitable<Errors\Result<GetTagsResponse>>;
  public function StartMLLabelingSetGenerationTaskRun(StartMLLabelingSetGenerationTaskRunRequest) Awaitable<Errors\Result<StartMLLabelingSetGenerationTaskRunResponse>>;
  public function UpdatePartition(UpdatePartitionRequest) Awaitable<Errors\Result<UpdatePartitionResponse>>;
  public function CreateCrawler(CreateCrawlerRequest) Awaitable<Errors\Result<CreateCrawlerResponse>>;
  public function CreateTable(CreateTableRequest) Awaitable<Errors\Result<CreateTableResponse>>;
  public function DeleteConnection(DeleteConnectionRequest) Awaitable<Errors\Result<DeleteConnectionResponse>>;
  public function UpdateCrawlerSchedule(UpdateCrawlerScheduleRequest) Awaitable<Errors\Result<UpdateCrawlerScheduleResponse>>;
  public function BatchGetTriggers(BatchGetTriggersRequest) Awaitable<Errors\Result<BatchGetTriggersResponse>>;
  public function CreateWorkflow(CreateWorkflowRequest) Awaitable<Errors\Result<CreateWorkflowResponse>>;
  public function StartImportLabelsTaskRun(StartImportLabelsTaskRunRequest) Awaitable<Errors\Result<StartImportLabelsTaskRunResponse>>;
  public function CreatePartition(CreatePartitionRequest) Awaitable<Errors\Result<CreatePartitionResponse>>;
  public function GetCrawlerMetrics(GetCrawlerMetricsRequest) Awaitable<Errors\Result<GetCrawlerMetricsResponse>>;
  public function GetDevEndpoint(GetDevEndpointRequest) Awaitable<Errors\Result<GetDevEndpointResponse>>;
  public function GetMapping(GetMappingRequest) Awaitable<Errors\Result<GetMappingResponse>>;
  public function StartWorkflowRun(StartWorkflowRunRequest) Awaitable<Errors\Result<StartWorkflowRunResponse>>;
  public function StopCrawlerSchedule(StopCrawlerScheduleRequest) Awaitable<Errors\Result<StopCrawlerScheduleResponse>>;
  public function GetTableVersion(GetTableVersionRequest) Awaitable<Errors\Result<GetTableVersionResponse>>;
  public function GetTableVersions(GetTableVersionsRequest) Awaitable<Errors\Result<GetTableVersionsResponse>>;
  public function StartCrawler(StartCrawlerRequest) Awaitable<Errors\Result<StartCrawlerResponse>>;
  public function GetTriggers(GetTriggersRequest) Awaitable<Errors\Result<GetTriggersResponse>>;
  public function BatchDeleteTable(BatchDeleteTableRequest) Awaitable<Errors\Result<BatchDeleteTableResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function CreateClassifier(CreateClassifierRequest) Awaitable<Errors\Result<CreateClassifierResponse>>;
  public function GetUserDefinedFunction(GetUserDefinedFunctionRequest) Awaitable<Errors\Result<GetUserDefinedFunctionResponse>>;
  public function GetWorkflowRunProperties(GetWorkflowRunPropertiesRequest) Awaitable<Errors\Result<GetWorkflowRunPropertiesResponse>>;
  public function BatchDeleteConnection(BatchDeleteConnectionRequest) Awaitable<Errors\Result<BatchDeleteConnectionResponse>>;
  public function GetWorkflow(GetWorkflowRequest) Awaitable<Errors\Result<GetWorkflowResponse>>;
  public function ListMLTransforms(ListMLTransformsRequest) Awaitable<Errors\Result<ListMLTransformsResponse>>;
  public function DeleteSecurityConfiguration(DeleteSecurityConfigurationRequest) Awaitable<Errors\Result<DeleteSecurityConfigurationResponse>>;
  public function GetMLTransforms(GetMLTransformsRequest) Awaitable<Errors\Result<GetMLTransformsResponse>>;
  public function PutDataCatalogEncryptionSettings(PutDataCatalogEncryptionSettingsRequest) Awaitable<Errors\Result<PutDataCatalogEncryptionSettingsResponse>>;
  public function UpdateDevEndpoint(UpdateDevEndpointRequest) Awaitable<Errors\Result<UpdateDevEndpointResponse>>;
  public function BatchGetPartition(BatchGetPartitionRequest) Awaitable<Errors\Result<BatchGetPartitionResponse>>;
  public function DeleteCrawler(DeleteCrawlerRequest) Awaitable<Errors\Result<DeleteCrawlerResponse>>;
  public function DeleteDevEndpoint(DeleteDevEndpointRequest) Awaitable<Errors\Result<DeleteDevEndpointResponse>>;
  public function GetPartitions(GetPartitionsRequest) Awaitable<Errors\Result<GetPartitionsResponse>>;
  public function ListTriggers(ListTriggersRequest) Awaitable<Errors\Result<ListTriggersResponse>>;
  public function CreateMLTransform(CreateMLTransformRequest) Awaitable<Errors\Result<CreateMLTransformResponse>>;
  public function GetConnection(GetConnectionRequest) Awaitable<Errors\Result<GetConnectionResponse>>;
  public function GetWorkflowRun(GetWorkflowRunRequest) Awaitable<Errors\Result<GetWorkflowRunResponse>>;
  public function UpdateClassifier(UpdateClassifierRequest) Awaitable<Errors\Result<UpdateClassifierResponse>>;
  public function DeleteTableVersion(DeleteTableVersionRequest) Awaitable<Errors\Result<DeleteTableVersionResponse>>;
  public function GetDatabase(GetDatabaseRequest) Awaitable<Errors\Result<GetDatabaseResponse>>;
  public function GetJobRun(GetJobRunRequest) Awaitable<Errors\Result<GetJobRunResponse>>;
  public function GetMLTaskRuns(GetMLTaskRunsRequest) Awaitable<Errors\Result<GetMLTaskRunsResponse>>;
  public function GetSecurityConfigurations(GetSecurityConfigurationsRequest) Awaitable<Errors\Result<GetSecurityConfigurationsResponse>>;
  public function GetTrigger(GetTriggerRequest) Awaitable<Errors\Result<GetTriggerResponse>>;
  public function StartTrigger(StartTriggerRequest) Awaitable<Errors\Result<StartTriggerResponse>>;
  public function DeleteResourcePolicy(DeleteResourcePolicyRequest) Awaitable<Errors\Result<DeleteResourcePolicyResponse>>;
  public function GetDataflowGraph(GetDataflowGraphRequest) Awaitable<Errors\Result<GetDataflowGraphResponse>>;
  public function ListWorkflows(ListWorkflowsRequest) Awaitable<Errors\Result<ListWorkflowsResponse>>;
  public function PutWorkflowRunProperties(PutWorkflowRunPropertiesRequest) Awaitable<Errors\Result<PutWorkflowRunPropertiesResponse>>;
  public function StartJobRun(StartJobRunRequest) Awaitable<Errors\Result<StartJobRunResponse>>;
  public function UpdateTable(UpdateTableRequest) Awaitable<Errors\Result<UpdateTableResponse>>;
  public function UpdateTrigger(UpdateTriggerRequest) Awaitable<Errors\Result<UpdateTriggerResponse>>;
  public function UpdateWorkflow(UpdateWorkflowRequest) Awaitable<Errors\Result<UpdateWorkflowResponse>>;
  public function BatchGetJobs(BatchGetJobsRequest) Awaitable<Errors\Result<BatchGetJobsResponse>>;
  public function CreateDatabase(CreateDatabaseRequest) Awaitable<Errors\Result<CreateDatabaseResponse>>;
  public function CreateDevEndpoint(CreateDevEndpointRequest) Awaitable<Errors\Result<CreateDevEndpointResponse>>;
  public function GetJobRuns(GetJobRunsRequest) Awaitable<Errors\Result<GetJobRunsResponse>>;
  public function SearchTables(SearchTablesRequest) Awaitable<Errors\Result<SearchTablesResponse>>;
  public function StopTrigger(StopTriggerRequest) Awaitable<Errors\Result<StopTriggerResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function CreateJob(CreateJobRequest) Awaitable<Errors\Result<CreateJobResponse>>;
  public function GetJobs(GetJobsRequest) Awaitable<Errors\Result<GetJobsResponse>>;
  public function ListDevEndpoints(ListDevEndpointsRequest) Awaitable<Errors\Result<ListDevEndpointsResponse>>;
  public function UpdateDatabase(UpdateDatabaseRequest) Awaitable<Errors\Result<UpdateDatabaseResponse>>;
  public function UpdateJob(UpdateJobRequest) Awaitable<Errors\Result<UpdateJobResponse>>;
  public function BatchCreatePartition(BatchCreatePartitionRequest) Awaitable<Errors\Result<BatchCreatePartitionResponse>>;
  public function BatchDeleteTableVersion(BatchDeleteTableVersionRequest) Awaitable<Errors\Result<BatchDeleteTableVersionResponse>>;
  public function DeleteClassifier(DeleteClassifierRequest) Awaitable<Errors\Result<DeleteClassifierResponse>>;
  public function DeleteTable(DeleteTableRequest) Awaitable<Errors\Result<DeleteTableResponse>>;
  public function GetDevEndpoints(GetDevEndpointsRequest) Awaitable<Errors\Result<GetDevEndpointsResponse>>;
  public function UpdateConnection(UpdateConnectionRequest) Awaitable<Errors\Result<UpdateConnectionResponse>>;
}

class JobRunState {
}

class RecordsCount {
}

class StopCrawlerScheduleResponse {
}

class UpdateDatabaseResponse {
}

class JobName {
}

class PartitionList {
}

class GetMLTransformsResponse {
  public PaginationToken $next_token;
  public TransformList $transforms;
}

class ListCrawlersResponse {
  public CrawlerNameList $crawler_names;
  public Token $next_token;
}

class RoleString {
}

class RowTag {
}

class BatchGetCrawlersRequest {
  public CrawlerNameList $crawler_names;
}

class DeleteBehavior {
}

class DeleteJobRequest {
  public NameString $job_name;
}

class GetTableVersionsList {
}

class WorkflowRunProperties {
}

class DeleteTableVersionResponse {
}

class EdgeList {
}

class EncryptionConfiguration {
  public S3EncryptionList $s_3_encryption;
  public CloudWatchEncryption $cloud_watch_encryption;
  public JobBookmarksEncryption $job_bookmarks_encryption;
}

class FindMatchesTaskRunProperties {
  public HashString $job_id;
  public NameString $job_name;
  public HashString $job_run_id;
}

class TaskRunProperties {
  public ExportLabelsTaskRunProperties $export_labels_task_run_properties;
  public LabelingSetGenerationTaskRunProperties $labeling_set_generation_task_run_properties;
  public FindMatchesTaskRunProperties $find_matches_task_run_properties;
  public TaskType $task_type;
  public ImportLabelsTaskRunProperties $import_labels_task_run_properties;
}

class XMLClassifier {
  public NameString $name;
  public Classification $classification;
  public Timestamp $creation_time;
  public Timestamp $last_updated;
  public VersionId $version;
  public RowTag $row_tag;
}

class ConnectionList {
}

class Crawl {
  public CrawlState $state;
  public TimestampValue $started_on;
  public TimestampValue $completed_on;
  public DescriptionString $error_message;
  public LogGroup $log_group;
  public LogStream $log_stream;
}

class GetCatalogImportStatusRequest {
  public CatalogIdString $catalog_id;
}

class ListMLTransformsRequest {
  public PaginationToken $next_token;
  public PageSize $max_results;
  public TransformFilterCriteria $filter;
  public TransformSortCriteria $sort;
  public TagsMap $tags;
}

class StartCrawlerRequest {
  public NameString $name;
}

class GetMappingRequest {
  public CatalogEntry $source;
  public CatalogEntries $sinks;
  public Location $location;
}

class S3TargetList {
}

class TransformIdList {
}

class BooleanNullable {
}

class CloudWatchEncryption {
  public CloudWatchEncryptionMode $cloud_watch_encryption_mode;
  public KmsKeyArn $kms_key_arn;
}

class GetWorkflowRunPropertiesResponse {
  public WorkflowRunProperties $run_properties;
}

class GlueTable {
  public NameString $database_name;
  public NameString $table_name;
  public NameString $catalog_id;
  public NameString $connection_name;
}

class PublicKeysList {
}

class BatchGetPartitionValueList {
}

class GetSecurityConfigurationResponse {
  public SecurityConfiguration $security_configuration;
}

class ListWorkflowsResponse {
  public WorkflowNames $workflows;
  public GenericString $next_token;
}

class LocationMap {
}

class S3EncryptionMode {
}

class Workflows {
}

class GetClassifierResponse {
  public Classifier $classifier;
}

class GetDataflowGraphRequest {
  public PythonScript $python_script;
}

class PartitionErrors {
}

class PythonVersionString {
}

class BatchDeleteTableNameList {
}

class StartJobRunRequest {
  public IdString $job_run_id;
  public IntegerValue $allocated_capacity;
  public Timeout $timeout;
  public NullableInteger $number_of_workers;
  public NameString $job_name;
  public GenericMap $arguments;
  public NullableDouble $max_capacity;
  public NameString $security_configuration;
  public NotificationProperty $notification_property;
  public WorkerType $worker_type;
}

class UpdateCrawlerScheduleResponse {
}

class Workflow {
  public WorkflowRun $last_run;
  public WorkflowGraph $graph;
  public NameString $name;
  public GenericString $description;
  public WorkflowRunProperties $default_run_properties;
  public TimestampValue $created_on;
  public TimestampValue $last_modified_on;
}

class NodeList {
}

class PrincipalType {
}

class StartWorkflowRunResponse {
  public IdString $run_id;
}

class TableErrors {
}

class BatchDeleteTableVersionResponse {
  public TableVersionErrors $errors;
}

class ErrorByName {
}

class GetConnectionRequest {
  public CatalogIdString $catalog_id;
  public NameString $name;
  public boolean $hide_password;
}

class UpdateJsonClassifierRequest {
  public NameString $name;
  public JsonPath $json_path;
}

class CreateCsvClassifierRequest {
  public CsvColumnDelimiter $delimiter;
  public CsvQuoteSymbol $quote_symbol;
  public CsvHeaderOption $contains_header;
  public CsvHeader $header;
  public NullableBoolean $disable_value_trimming;
  public NullableBoolean $allow_single_column;
  public NameString $name;
}

class CreateWorkflowRequest {
  public NameString $name;
  public GenericString $description;
  public WorkflowRunProperties $default_run_properties;
  public TagsMap $tags;
}

class GetDatabasesRequest {
  public CatalogIdString $catalog_id;
  public Token $next_token;
  public PageSize $max_results;
}

class JobList {
}

class NonNegativeDouble {
}

class PartitionInputList {
}

class UpdateConnectionRequest {
  public CatalogIdString $catalog_id;
  public NameString $name;
  public ConnectionInput $connection_input;
}

class GetDevEndpointsRequest {
  public GenericString $next_token;
  public PageSize $max_results;
}

class GetSecurityConfigurationRequest {
  public NameString $name;
}

class ListTriggersResponse {
  public GenericString $next_token;
  public TriggerNameList $trigger_names;
}

class MappingList {
}

class PredecessorList {
}

class SkewedInfo {
  public NameStringList $skewed_column_names;
  public ColumnValueStringList $skewed_column_values;
  public LocationMap $skewed_column_value_location_maps;
}

class TagValue {
}

class CatalogTargetList {
}

class ConditionCheckFailureException {
  public MessageString $message;
}

class CrawlerNameList {
}

class DeleteResourcePolicyRequest {
  public HashString $policy_hash_condition;
}

class GetJobResponse {
  public Job $job;
}

class GetPartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $table_name;
  public ValueStringList $partition_values;
}

class JdbcTargetList {
}

class BatchStopJobRunErrorList {
}

class ExistCondition {
}

class ImportLabelsTaskRunProperties {
  public UriString $input_s_3_path;
  public ReplaceBoolean $replace;
}

class TriggerState {
}

class BatchGetJobsRequest {
  public JobNameList $job_names;
}

class StartTriggerResponse {
  public NameString $name;
}

class CsvQuoteSymbol {
}

class GetUserDefinedFunctionResponse {
  public UserDefinedFunction $user_defined_function;
}

class S3EncryptionList {
}

class CreateXMLClassifierRequest {
  public Classification $classification;
  public NameString $name;
  public RowTag $row_tag;
}

class CronExpression {
}

class GetSecurityConfigurationsResponse {
  public SecurityConfigurationList $security_configurations;
  public GenericString $next_token;
}

class ListDevEndpointsRequest {
  public GenericString $next_token;
  public PageSize $max_results;
  public TagsMap $tags;
}

class SchemaColumn {
  public ColumnNameString $name;
  public ColumnTypeString $data_type;
}

class TaskRunFilterCriteria {
  public TaskType $task_run_type;
  public TaskStatusType $status;
  public Timestamp $started_before;
  public Timestamp $started_after;
}

class BatchDeleteTableVersionList {
}

class BatchGetDevEndpointsResponse {
  public DevEndpointList $dev_endpoints;
  public DevEndpointNames $dev_endpoints_not_found;
}

class BatchStopJobRunError {
  public IdString $job_run_id;
  public ErrorDetail $error_detail;
  public NameString $job_name;
}

class GetSecurityConfigurationsRequest {
  public PageSize $max_results;
  public GenericString $next_token;
}

class Token {
}

class Boolean {
}

class CrawlerMetrics {
  public NonNegativeInteger $tables_created;
  public NonNegativeInteger $tables_updated;
  public NonNegativeInteger $tables_deleted;
  public NameString $crawler_name;
  public NonNegativeDouble $time_left_seconds;
  public boolean $still_estimating;
  public NonNegativeDouble $last_runtime_seconds;
  public NonNegativeDouble $median_runtime_seconds;
}

class CreateUserDefinedFunctionResponse {
}

class PutWorkflowRunPropertiesRequest {
  public NameString $name;
  public IdString $run_id;
  public WorkflowRunProperties $run_properties;
}

class StartCrawlerScheduleRequest {
  public NameString $crawler_name;
}

class TablePrefix {
}

class UntagResourceRequest {
  public GlueResourceArn $resource_arn;
  public TagKeysList $tags_to_remove;
}

class ActionList {
}

class AlreadyExistsException {
  public MessageString $message;
}

class BatchStopJobRunResponse {
  public BatchStopJobRunSuccessfulSubmissionList $successful_submissions;
  public BatchStopJobRunErrorList $errors;
}

class DeleteTriggerRequest {
  public NameString $name;
}

class GenericString {
}

class URI {
}

class IdString {
}

class LogGroup {
}

class UpdatePartitionResponse {
}

class CodeGenNodeType {
}

class ListWorkflowsRequest {
  public PageSize $max_results;
  public GenericString $next_token;
}

class PutWorkflowRunPropertiesResponse {
}

class SecurityGroupIdList {
}

class ConnectionPasswordEncryption {
  public boolean $return_connection_password_encrypted;
  public NameString $aws_kms_key_id;
}

class GetDatabaseResponse {
  public Database $database;
}

class MapValue {
}

class SortCriterion {
  public ValueString $field_name;
  public Sort $sort;
}

class TableName {
}

class TriggerUpdate {
  public NameString $name;
  public DescriptionString $description;
  public GenericString $schedule;
  public ActionList $actions;
  public Predicate $predicate;
}

class Trigger {
  public NameString $workflow_name;
  public TriggerType $type;
  public TriggerState $state;
  public ActionList $actions;
  public Predicate $predicate;
  public NameString $name;
  public IdString $id;
  public DescriptionString $description;
  public GenericString $schedule;
}

class UpdateDevEndpointResponse {
}

class BatchDeleteConnectionRequest {
  public CatalogIdString $catalog_id;
  public DeleteConnectionNameList $connection_name_list;
}

class CrawlerList {
}

class CreateUserDefinedFunctionRequest {
  public NameString $database_name;
  public UserDefinedFunctionInput $function_input;
  public CatalogIdString $catalog_id;
}

class DeleteTableRequest {
  public NameString $database_name;
  public NameString $name;
  public CatalogIdString $catalog_id;
}

class DeleteWorkflowResponse {
  public NameString $name;
}

class GlueTables {
}

class CatalogImportStatus {
  public boolean $import_completed;
  public Timestamp $import_time;
  public NameString $imported_by;
}

class CrawlerRunningException {
  public MessageString $message;
}

class GetDataCatalogEncryptionSettingsResponse {
  public DataCatalogEncryptionSettings $data_catalog_encryption_settings;
}

class Language {
}

class Table {
  public ColumnList $partition_keys;
  public ViewTextString $view_expanded_text;
  public Timestamp $last_access_time;
  public NonNegativeInteger $retention;
  public ViewTextString $view_original_text;
  public ParametersMap $parameters;
  public Timestamp $update_time;
  public TableTypeString $table_type;
  public NameString $created_by;
  public boolean $is_registered_with_lake_formation;
  public NameString $name;
  public DescriptionString $description;
  public Timestamp $create_time;
  public Timestamp $last_analyzed_time;
  public StorageDescriptor $storage_descriptor;
  public NameString $database_name;
  public NameString $owner;
}

class TagKeysList {
}

class CsvHeaderOption {
}

class NameString {
}

class StartMLLabelingSetGenerationTaskRunResponse {
  public HashString $task_run_id;
}

class TableVersionError {
  public ErrorDetail $error_detail;
  public NameString $table_name;
  public VersionString $version_id;
}

class CreateDatabaseResponse {
}

class DeleteTableVersionRequest {
  public NameString $database_name;
  public NameString $table_name;
  public VersionString $version_id;
  public CatalogIdString $catalog_id;
}

class PartitionError {
  public ValueStringList $partition_values;
  public ErrorDetail $error_detail;
}

class PhysicalConnectionRequirements {
  public NameString $availability_zone;
  public NameString $subnet_id;
  public SecurityGroupIdList $security_group_id_list;
}

class PutResourcePolicyResponse {
  public HashString $policy_hash;
}

class UpdateTriggerResponse {
  public Trigger $trigger;
}

class CodeGenNodeArg {
  public CodeGenArgName $name;
  public CodeGenArgValue $value;
  public boolean $param;
}

class CreateMLTransformResponse {
  public HashString $transform_id;
}

class DeleteConnectionRequest {
  public CatalogIdString $catalog_id;
  public NameString $connection_name;
}

class DeleteTriggerResponse {
  public NameString $name;
}

class JobRunList {
}

class Schedule {
  public CronExpression $schedule_expression;
  public ScheduleState $state;
}

class Order {
  public NameString $column;
  public IntegerFlag $sort_order;
}

class BatchDeletePartitionResponse {
  public PartitionErrors $errors;
}

class CrawlList {
}

class FieldType {
}

class FormatString {
}

class GetJobBookmarkResponse {
  public JobBookmarkEntry $job_bookmark_entry;
}

class MaxRetries {
}

class NotifyDelayAfter {
}

class SchedulerNotRunningException {
  public MessageString $message;
}

class WorkflowRunStatus {
}

class CreateWorkflowResponse {
  public NameString $name;
}

class GenericBoundedDouble {
}

class GetWorkflowRequest {
  public NameString $name;
  public NullableBoolean $include_graph;
}

class Integer {
}

class ListTriggersRequest {
  public GenericString $next_token;
  public NameString $dependent_job_name;
  public PageSize $max_results;
  public TagsMap $tags;
}

class StopCrawlerResponse {
}

class TaskRunSortCriteria {
  public TaskRunSortColumnType $column;
  public SortDirectionType $sort_direction;
}

class CreatePartitionResponse {
}

class CsvHeader {
}

class GetClassifiersResponse {
  public ClassifierList $classifiers;
  public Token $next_token;
}

class GetJobRequest {
  public NameString $job_name;
}

class GetTableVersionsResponse {
  public GetTableVersionsList $table_versions;
  public Token $next_token;
}

class MessageString {
}

class SchemaChangePolicy {
  public UpdateBehavior $update_behavior;
  public DeleteBehavior $delete_behavior;
}

class WorkerType {
}

class WorkflowRuns {
}

class CreateDevEndpointRequest {
  public NullableInteger $number_of_workers;
  public GenericString $endpoint_name;
  public GenericString $subnet_id;
  public IntegerValue $number_of_nodes;
  public WorkerType $worker_type;
  public RoleArn $role_arn;
  public GlueVersionString $glue_version;
  public PublicKeysList $public_keys;
  public NameString $security_configuration;
  public TagsMap $tags;
  public MapValue $arguments;
  public StringList $security_group_ids;
  public GenericString $public_key;
  public GenericString $extra_python_libs_s_3_path;
  public GenericString $extra_jars_s_3_path;
}

class DeleteMLTransformRequest {
  public HashString $transform_id;
}

class NullableInteger {
}

class Condition {
  public CrawlState $crawl_state;
  public LogicalOperator $logical_operator;
  public NameString $job_name;
  public JobRunState $state;
  public NameString $crawler_name;
}

class FindMatchesMetrics {
  public GenericBoundedDouble $recall;
  public GenericBoundedDouble $f_1;
  public ConfusionMatrix $confusion_matrix;
  public GenericBoundedDouble $area_under_pr_curve;
  public GenericBoundedDouble $precision;
}

class IntegerValue {
}

class TagResourceRequest {
  public GlueResourceArn $resource_arn;
  public TagsMap $tags_to_add;
}

class UpdateBehavior {
}

class GetMLTaskRunRequest {
  public HashString $transform_id;
  public HashString $task_run_id;
}

class GetTableResponse {
  public Table $table;
}

class GetWorkflowRunPropertiesRequest {
  public NameString $name;
  public IdString $run_id;
}

class PathList {
}

class Predecessor {
  public IdString $run_id;
  public NameString $job_name;
}

class UpdateJobRequest {
  public NameString $job_name;
  public JobUpdate $job_update;
}

class Classification {
}

class CreateClassifierRequest {
  public CreateCsvClassifierRequest $csv_classifier;
  public CreateGrokClassifierRequest $grok_classifier;
  public CreateXMLClassifierRequest $xml_classifier;
  public CreateJsonClassifierRequest $json_classifier;
}

class DatabaseInput {
  public NameString $name;
  public DescriptionString $description;
  public URI $location_uri;
  public ParametersMap $parameters;
  public PrincipalPermissionsList $create_table_default_permissions;
}

class DeleteDevEndpointRequest {
  public GenericString $endpoint_name;
}

class SecurityConfigurationList {
}

class UpdateDatabaseRequest {
  public CatalogIdString $catalog_id;
  public NameString $name;
  public DatabaseInput $database_input;
}

class Logical {
}

class ConcurrentRunsExceededException {
  public MessageString $message;
}

class Database {
  public DescriptionString $description;
  public URI $location_uri;
  public ParametersMap $parameters;
  public Timestamp $create_time;
  public PrincipalPermissionsList $create_table_default_permissions;
  public NameString $name;
}

class DeleteClassifierRequest {
  public NameString $name;
}

class GlueEncryptionException {
  public MessageString $message;
}

class GrokClassifier {
  public GrokPattern $grok_pattern;
  public CustomPatterns $custom_patterns;
  public NameString $name;
  public Classification $classification;
  public Timestamp $creation_time;
  public Timestamp $last_updated;
  public VersionId $version;
}

class ImportCatalogToGlueRequest {
  public CatalogIdString $catalog_id;
}

class ListDevEndpointsResponse {
  public GenericString $next_token;
  public DevEndpointNameList $dev_endpoint_names;
}

class BatchCreatePartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $table_name;
  public PartitionInputList $partition_input_list;
}

class BatchGetTriggersRequest {
  public TriggerNameList $trigger_names;
}

class CreateGrokClassifierRequest {
  public Classification $classification;
  public NameString $name;
  public GrokPattern $grok_pattern;
  public CustomPatterns $custom_patterns;
}

class DynamoDBTargetList {
}

class GlueVersionString {
}

class ErrorString {
}

class GetMLTaskRunResponse {
  public TaskRunProperties $properties;
  public Timestamp $completed_on;
  public HashString $task_run_id;
  public TaskStatusType $status;
  public GenericString $log_group_name;
  public Timestamp $last_modified_on;
  public ExecutionTime $execution_time;
  public HashString $transform_id;
  public GenericString $error_string;
  public Timestamp $started_on;
}

class IdempotentParameterMismatchException {
  public MessageString $message;
}

class KeyString {
}

class Timestamp {
}

class ConnectionPropertyKey {
}

class GetDatabasesResponse {
  public DatabaseList $database_list;
  public Token $next_token;
}

class ScriptLocationString {
}

class UpdateUserDefinedFunctionResponse {
}

class BatchDeleteTableResponse {
  public TableErrors $errors;
}

class BatchStopJobRunSuccessfulSubmission {
  public NameString $job_name;
  public IdString $job_run_id;
}

class DeleteConnectionNameList {
}

class GetDataflowGraphResponse {
  public DagNodes $dag_nodes;
  public DagEdges $dag_edges;
}

class GetJobBookmarkRequest {
  public JobName $job_name;
  public RunId $run_id;
}

class TransformSortCriteria {
  public TransformSortColumnType $column;
  public SortDirectionType $sort_direction;
}

class UserDefinedFunctionInput {
  public NameString $class_name;
  public NameString $owner_name;
  public PrincipalType $owner_type;
  public ResourceUriList $resource_uris;
  public NameString $function_name;
}

class UpdateWorkflowRequest {
  public NameString $name;
  public GenericString $description;
  public WorkflowRunProperties $default_run_properties;
}

class EncryptionAtRest {
  public CatalogEncryptionMode $catalog_encryption_mode;
  public NameString $sse_aws_kms_key_id;
}

class JobBookmarksEncryption {
  public KmsKeyArn $kms_key_arn;
  public JobBookmarksEncryptionMode $job_bookmarks_encryption_mode;
}

class JsonValue {
}

class StartWorkflowRunRequest {
  public NameString $name;
}

class TaskStatusType {
}

class ConnectionsList {
  public OrchestrationStringList $connections;
}

class GetTablesRequest {
  public Token $next_token;
  public PageSize $max_results;
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public FilterString $expression;
}

class MessagePrefix {
}

class PermissionList {
}

class PrincipalPermissionsList {
}

class ResetJobBookmarkResponse {
  public JobBookmarkEntry $job_bookmark_entry;
}

class Sort {
}

class ConcurrentModificationException {
  public MessageString $message;
}

class GetTableVersionsRequest {
  public NameString $table_name;
  public Token $next_token;
  public PageSize $max_results;
  public CatalogIdString $catalog_id;
  public NameString $database_name;
}

class MatchCriteria {
}

class PutDataCatalogEncryptionSettingsResponse {
}

class StartImportLabelsTaskRunRequest {
  public UriString $input_s_3_path;
  public ReplaceBoolean $replace_all_labels;
  public HashString $transform_id;
}

class TableError {
  public NameString $table_name;
  public ErrorDetail $error_detail;
}

class DeletePartitionResponse {
}

class GetJobsResponse {
  public JobList $jobs;
  public GenericString $next_token;
}

class GetConnectionResponse {
  public Connection $connection;
}

class GetMLTaskRunsResponse {
  public TaskRunList $task_runs;
  public PaginationToken $next_token;
}

class PolicyJsonString {
}

class ResourceNumberLimitExceededException {
  public MessageString $message;
}

class TotalSegmentsInteger {
}

class UpdateClassifierResponse {
}

class TimestampValue {
}

class CodeGenArgName {
}

class CsvClassifier {
  public CsvQuoteSymbol $quote_symbol;
  public CsvHeader $header;
  public NullableBoolean $disable_value_trimming;
  public NullableBoolean $allow_single_column;
  public NameString $name;
  public Timestamp $last_updated;
  public CsvColumnDelimiter $delimiter;
  public CsvHeaderOption $contains_header;
  public Timestamp $creation_time;
  public VersionId $version;
}

class GetDatabaseRequest {
  public CatalogIdString $catalog_id;
  public NameString $name;
}

class GetJobRunResponse {
  public JobRun $job_run;
}

class GetTriggersRequest {
  public GenericString $next_token;
  public NameString $dependent_job_name;
  public PageSize $max_results;
}

class InternalServiceException {
  public MessageString $message;
}

class RoleArn {
}

class GetWorkflowRunRequest {
  public NameString $name;
  public IdString $run_id;
  public NullableBoolean $include_graph;
}

class StopTriggerResponse {
  public NameString $name;
}

class UpdateTableRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public TableInput $table_input;
  public BooleanNullable $skip_archive;
}

class CodeGenNode {
  public CodeGenIdentifier $id;
  public CodeGenNodeType $node_type;
  public CodeGenNodeArgs $args;
  public int $line_number;
}

class JobNodeDetails {
  public JobRunList $job_runs;
}

class WorkflowRunStatistics {
  public IntegerValue $timeout_actions;
  public IntegerValue $failed_actions;
  public IntegerValue $stopped_actions;
  public IntegerValue $succeeded_actions;
  public IntegerValue $running_actions;
  public IntegerValue $total_actions;
}

class CrawlerState {
}

class CreateScriptResponse {
  public PythonScript $python_script;
  public ScalaCode $scala_code;
}

class DevEndpointCustomLibraries {
  public GenericString $extra_python_libs_s_3_path;
  public GenericString $extra_jars_s_3_path;
}

class GetCrawlerRequest {
  public NameString $name;
}

class GetMappingResponse {
  public MappingList $mapping;
}

class GetResourcePolicyRequest {
}

class GetUserDefinedFunctionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $function_name;
}

class GetClassifierRequest {
  public NameString $name;
}

class GetTableVersionResponse {
  public TableVersion $table_version;
}

class PageSize {
}

class Segment {
  public NonNegativeInteger $segment_number;
  public TotalSegmentsInteger $total_segments;
}

class DevEndpointNameList {
}

class StartMLEvaluationTaskRunRequest {
  public HashString $transform_id;
}

class CodeGenEdge {
  public CodeGenIdentifier $source;
  public CodeGenIdentifier $target;
  public CodeGenArgName $target_parameter;
}

class DeletePartitionRequest {
  public NameString $database_name;
  public NameString $table_name;
  public ValueStringList $partition_values;
  public CatalogIdString $catalog_id;
}

class StartCrawlerScheduleResponse {
}

class TagResourceResponse {
}

class BatchGetWorkflowsRequest {
  public WorkflowNames $names;
  public NullableBoolean $include_graph;
}

class GetConnectionsResponse {
  public ConnectionList $connection_list;
  public Token $next_token;
}

class JobBookmarkEntry {
  public IntegerValue $run;
  public IntegerValue $attempt;
  public RunId $previous_run_id;
  public RunId $run_id;
  public JsonValue $job_bookmark;
  public JobName $job_name;
  public IntegerValue $version;
}

class LastCrawlInfo {
  public LastCrawlStatus $status;
  public DescriptionString $error_message;
  public LogGroup $log_group;
  public LogStream $log_stream;
  public MessagePrefix $message_prefix;
  public Timestamp $start_time;
}

class ConfusionMatrix {
  public RecordsCount $num_true_positives;
  public RecordsCount $num_false_positives;
  public RecordsCount $num_true_negatives;
  public RecordsCount $num_false_negatives;
}

class GetTriggersResponse {
  public GenericString $next_token;
  public TriggerList $triggers;
}

class WorkflowRun {
  public IdString $workflow_run_id;
  public WorkflowRunProperties $workflow_run_properties;
  public TimestampValue $started_on;
  public TimestampValue $completed_on;
  public WorkflowRunStatus $status;
  public WorkflowRunStatistics $statistics;
  public WorkflowGraph $graph;
  public NameString $name;
}

class TriggerList {
}

class CatalogEncryptionMode {
}

class Comparator {
}

class DeleteDatabaseResponse {
}

class DeleteWorkflowRequest {
  public NameString $name;
}

class Job {
  public DescriptionString $description;
  public UriString $log_uri;
  public JobCommand $command;
  public GenericMap $non_overridable_arguments;
  public ConnectionsList $connections;
  public TimestampValue $last_modified_on;
  public NullableInteger $number_of_workers;
  public NotificationProperty $notification_property;
  public GlueVersionString $glue_version;
  public NameString $name;
  public ExecutionProperty $execution_property;
  public MaxRetries $max_retries;
  public IntegerValue $allocated_capacity;
  public Timeout $timeout;
  public NameString $security_configuration;
  public RoleString $role;
  public TimestampValue $created_on;
  public GenericMap $default_arguments;
  public NullableDouble $max_capacity;
  public WorkerType $worker_type;
}

class TaskType {
}

class TransformType {
}

class UpdateTableResponse {
}

class CloudWatchEncryptionMode {
}

class GetConnectionsFilter {
  public MatchCriteria $match_criteria;
  public ConnectionType $connection_type;
}

class GetJobRunRequest {
  public NameString $job_name;
  public IdString $run_id;
  public BooleanValue $predecessors_included;
}

class ListJobsRequest {
  public GenericString $next_token;
  public PageSize $max_results;
  public TagsMap $tags;
}

class StartMLEvaluationTaskRunResponse {
  public HashString $task_run_id;
}

class StorageDescriptor {
  public ParametersMap $parameters;
  public ColumnList $columns;
  public LocationString $location;
  public FormatString $input_format;
  public int $number_of_buckets;
  public SerDeInfo $serde_info;
  public boolean $stored_as_sub_directories;
  public FormatString $output_format;
  public boolean $compressed;
  public NameStringList $bucket_columns;
  public OrderList $sort_columns;
  public SkewedInfo $skewed_info;
}

class BatchDeleteConnectionResponse {
  public NameStringList $succeeded;
  public ErrorByName $errors;
}

class Crawler {
  public CrawlerSecurityConfiguration $crawler_security_configuration;
  public Role $role;
  public CrawlerTargets $targets;
  public Timestamp $last_updated;
  public VersionId $version;
  public MillisecondsCount $crawl_elapsed_time;
  public DatabaseName $database_name;
  public ClassifierNameList $classifiers;
  public SchemaChangePolicy $schema_change_policy;
  public Schedule $schedule;
  public CrawlerState $state;
  public Timestamp $creation_time;
  public CrawlerConfiguration $configuration;
  public NameString $name;
  public DescriptionString $description;
  public TablePrefix $table_prefix;
  public LastCrawlInfo $last_crawl;
}

class DeleteResourcePolicyResponse {
}

class CrawlState {
}

class ExecutionProperty {
  public MaxConcurrentRuns $max_concurrent_runs;
}

class MLTransform {
  public TransformParameters $parameters;
  public EvaluationMetrics $evaluation_metrics;
  public GlueVersionString $glue_version;
  public NullableInteger $number_of_workers;
  public HashString $transform_id;
  public Timestamp $last_modified_on;
  public NullableDouble $max_capacity;
  public Timestamp $created_on;
  public LabelCount $label_count;
  public NullableInteger $max_retries;
  public TransformStatusType $status;
  public DescriptionString $description;
  public GlueTables $input_record_tables;
  public TransformSchema $schema;
  public RoleString $role;
  public WorkerType $worker_type;
  public Timeout $timeout;
  public NameString $name;
}

class SearchPropertyPredicates {
}

class TagsMap {
}

class EntityNotFoundException {
  public MessageString $message;
}

class GetPlanResponse {
  public PythonScript $python_script;
  public ScalaCode $scala_code;
}

class GetResourcePolicyResponse {
  public Timestamp $update_time;
  public PolicyJsonString $policy_in_json;
  public HashString $policy_hash;
  public Timestamp $create_time;
}

class ListJobsResponse {
  public JobNameList $job_names;
  public GenericString $next_token;
}

class S3Target {
  public PathList $exclusions;
  public Path $path;
}

class TaskRunSortColumnType {
}

class TransformFilterCriteria {
  public TransformSchema $schema;
  public Timestamp $created_after;
  public Timestamp $last_modified_before;
  public Timestamp $last_modified_after;
  public NameString $name;
  public TransformType $transform_type;
  public TransformStatusType $status;
  public GlueVersionString $glue_version;
  public Timestamp $created_before;
}

class VersionId {
}

class AccessDeniedException {
  public MessageString $message;
}

class ConnectionType {
}

class CreateConnectionResponse {
}

class DeleteConnectionResponse {
}

class GetPartitionsRequest {
  public NameString $database_name;
  public NameString $table_name;
  public PredicateString $expression;
  public Token $next_token;
  public Segment $segment;
  public PageSize $max_results;
  public CatalogIdString $catalog_id;
}

class JobNameList {
}

class LabelingSetGenerationTaskRunProperties {
  public UriString $output_s_3_path;
}

class BatchGetDevEndpointsRequest {
  public DevEndpointNames $dev_endpoint_names;
}

class VersionString {
}

class CreateCrawlerResponse {
}

class CreateMLTransformRequest {
  public TagsMap $tags;
  public NameString $name;
  public DescriptionString $description;
  public GlueTables $input_record_tables;
  public RoleString $role;
  public WorkerType $worker_type;
  public NullableInteger $max_retries;
  public TransformParameters $parameters;
  public GlueVersionString $glue_version;
  public NullableDouble $max_capacity;
  public NullableInteger $number_of_workers;
  public Timeout $timeout;
}

class GetPlanRequest {
  public Location $location;
  public Language $language;
  public MappingList $mapping;
  public CatalogEntry $source;
  public CatalogEntries $sinks;
}

class JsonPath {
}

class UpdateConnectionResponse {
}

class ValueStringList {
}

class VersionMismatchException {
  public MessageString $message;
}

class BatchGetCrawlersResponse {
  public CrawlerList $crawlers;
  public CrawlerNameList $crawlers_not_found;
}

class BatchStopJobRunSuccessfulSubmissionList {
}

class CrawlerStoppingException {
  public MessageString $message;
}

class DatabaseList {
}

class Predicate {
  public ConditionList $conditions;
  public Logical $logical;
}

class UpdateGrokClassifierRequest {
  public NameString $name;
  public Classification $classification;
  public GrokPattern $grok_pattern;
  public CustomPatterns $custom_patterns;
}

class ColumnValuesString {
}

class DeleteCrawlerResponse {
}

class GetClassifiersRequest {
  public PageSize $max_results;
  public Token $next_token;
}

class GetTablesResponse {
  public TableList $table_list;
  public Token $next_token;
}

class TableVersionErrors {
}

class UpdateXMLClassifierRequest {
  public Classification $classification;
  public RowTag $row_tag;
  public NameString $name;
}

class HashString {
}

class OperationTimeoutException {
  public MessageString $message;
}

class UntagResourceResponse {
}

class DagEdges {
}

class DeleteUserDefinedFunctionResponse {
}

class DevEndpointNames {
}

class GetDataCatalogEncryptionSettingsRequest {
  public CatalogIdString $catalog_id;
}

class PartitionValueList {
  public ValueStringList $values;
}

class StopTriggerRequest {
  public NameString $name;
}

class CreateClassifierResponse {
}

class CreateTriggerRequest {
  public BooleanValue $start_on_creation;
  public NameString $name;
  public Predicate $predicate;
  public GenericString $schedule;
  public ActionList $actions;
  public DescriptionString $description;
  public TagsMap $tags;
  public NameString $workflow_name;
  public TriggerType $type;
}

class JsonClassifier {
  public NameString $name;
  public Timestamp $creation_time;
  public Timestamp $last_updated;
  public VersionId $version;
  public JsonPath $json_path;
}

class ListMLTransformsResponse {
  public TransformIdList $transform_ids;
  public PaginationToken $next_token;
}

class RunId {
}

class TableTypeString {
}

class BatchGetTriggersResponse {
  public TriggerList $triggers;
  public TriggerNameList $triggers_not_found;
}

class DataLakePrincipal {
  public DataLakePrincipalString $data_lake_principal_identifier;
}

class GetCrawlersRequest {
  public PageSize $max_results;
  public Token $next_token;
}

class SerDeInfo {
  public NameString $name;
  public NameString $serialization_library;
  public ParametersMap $parameters;
}

class StartImportLabelsTaskRunResponse {
  public HashString $task_run_id;
}

class TagKey {
}

class ColumnNameString {
}

class GetMLTransformsRequest {
  public PaginationToken $next_token;
  public PageSize $max_results;
  public TransformFilterCriteria $filter;
  public TransformSortCriteria $sort;
}

class PutResourcePolicyRequest {
  public HashString $policy_hash_condition;
  public ExistCondition $policy_exists_condition;
  public PolicyJsonString $policy_in_json;
}

class TransformSortColumnType {
}

class TriggerNodeDetails {
  public Trigger $trigger;
}

class WorkflowGraph {
  public EdgeList $edges;
  public NodeList $nodes;
}

class BatchGetJobsResponse {
  public JobList $jobs;
  public JobNameList $jobs_not_found;
}

class Classifier {
  public GrokClassifier $grok_classifier;
  public XMLClassifier $xml_classifier;
  public JsonClassifier $json_classifier;
  public CsvClassifier $csv_classifier;
}

class GetPartitionResponse {
  public Partition $partition;
}

class PaginationToken {
}

class ConnectionInput {
  public NameString $name;
  public DescriptionString $description;
  public ConnectionType $connection_type;
  public MatchCriteria $match_criteria;
  public ConnectionProperties $connection_properties;
  public PhysicalConnectionRequirements $physical_connection_requirements;
}

class CreateJobResponse {
  public NameString $name;
}

class FilterString {
}

class ResourceType {
}

class BatchDeleteTableVersionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $table_name;
  public BatchDeleteTableVersionList $version_ids;
}

class CatalogTarget {
  public NameString $database_name;
  public CatalogTablesList $tables;
}

class CreateSecurityConfigurationRequest {
  public NameString $name;
  public EncryptionConfiguration $encryption_configuration;
}

class ErrorDetail {
  public NameString $error_code;
  public DescriptionString $error_message;
}

class GetMLTaskRunsRequest {
  public HashString $transform_id;
  public PaginationToken $next_token;
  public PageSize $max_results;
  public TaskRunFilterCriteria $filter;
  public TaskRunSortCriteria $sort;
}

class StartCrawlerResponse {
}

class UpdateMLTransformRequest {
  public HashString $transform_id;
  public TransformParameters $parameters;
  public NullableInteger $number_of_workers;
  public NullableInteger $max_retries;
  public NameString $name;
  public DescriptionString $description;
  public RoleString $role;
  public GlueVersionString $glue_version;
  public NullableDouble $max_capacity;
  public WorkerType $worker_type;
  public Timeout $timeout;
}

class GetWorkflowRunResponse {
  public WorkflowRun $run;
}

class StartExportLabelsTaskRunRequest {
  public HashString $transform_id;
  public UriString $output_s_3_path;
}

class CrawlerConfiguration {
}

class DescriptionString {
}

class DevEndpoint {
  public IntegerValue $number_of_nodes;
  public MapValue $arguments;
  public StringList $security_group_ids;
  public GenericString $yarn_endpoint_address;
  public GenericString $extra_python_libs_s_3_path;
  public NameString $security_configuration;
  public RoleArn $role_arn;
  public GenericString $status;
  public WorkerType $worker_type;
  public GlueVersionString $glue_version;
  public GenericString $extra_jars_s_3_path;
  public TimestampValue $last_modified_timestamp;
  public GenericString $public_key;
  public PublicKeysList $public_keys;
  public GenericString $endpoint_name;
  public GenericString $private_address;
  public GenericString $public_address;
  public NullableInteger $number_of_workers;
  public GenericString $availability_zone;
  public GenericString $vpc_id;
  public GenericString $failure_reason;
  public GenericString $last_update_status;
  public GenericString $subnet_id;
  public IntegerValue $zeppelin_remote_spark_interpreter_port;
  public TimestampValue $created_timestamp;
}

class OrchestrationStringList {
}

class PythonScript {
}

class StopCrawlerScheduleRequest {
  public NameString $crawler_name;
}

class BooleanValue {
}

class GetTagsResponse {
  public TagsMap $tags;
}

class GetWorkflowRunsResponse {
  public WorkflowRuns $runs;
  public GenericString $next_token;
}

class ReplaceBoolean {
}

class TriggerType {
}

class ValueString {
}

class EvaluationMetrics {
  public TransformType $transform_type;
  public FindMatchesMetrics $find_matches_metrics;
}

class Location {
  public CodeGenNodeArgs $jdbc;
  public CodeGenNodeArgs $s_3;
  public CodeGenNodeArgs $dynamo_db;
}

class MLTransformNotReadyException {
  public MessageString $message;
}

class StartJobRunResponse {
  public IdString $job_run_id;
}

class UpdatePartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $table_name;
  public BoundedPartitionValueList $partition_value_list;
  public PartitionInput $partition_input;
}

class GetConnectionsRequest {
  public CatalogIdString $catalog_id;
  public GetConnectionsFilter $filter;
  public boolean $hide_password;
  public Token $next_token;
  public PageSize $max_results;
}

class GetJobsRequest {
  public GenericString $next_token;
  public PageSize $max_results;
}

class ParametersMapValue {
}

class BatchStopJobRunRequest {
  public NameString $job_name;
  public BatchStopJobRunJobRunIdList $job_run_ids;
}

class CrawlerNodeDetails {
  public CrawlList $crawls;
}

class GetTableVersionRequest {
  public VersionString $version_id;
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $table_name;
}

class GetWorkflowResponse {
  public Workflow $workflow;
}

class TaskRunList {
}

class CsvColumnDelimiter {
}

class GetTagsRequest {
  public GlueResourceArn $resource_arn;
}

class TableList {
}

class TransformSchema {
}

class LastCrawlStatus {
}

class CreateJobRequest {
  public TagsMap $tags;
  public GlueVersionString $glue_version;
  public NullableInteger $number_of_workers;
  public ExecutionProperty $execution_property;
  public NameString $security_configuration;
  public WorkerType $worker_type;
  public RoleString $role;
  public GenericMap $default_arguments;
  public GenericMap $non_overridable_arguments;
  public ConnectionsList $connections;
  public MaxRetries $max_retries;
  public IntegerValue $allocated_capacity;
  public Timeout $timeout;
  public NotificationProperty $notification_property;
  public DescriptionString $description;
  public UriString $log_uri;
  public JobCommand $command;
  public NullableDouble $max_capacity;
  public NameString $name;
}

class DynamoDBTarget {
  public Path $path;
}

class ExportLabelsTaskRunProperties {
  public UriString $output_s_3_path;
}

class GetTableRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $name;
}

class GlueResourceArn {
}

class S3Encryption {
  public S3EncryptionMode $s_3_encryption_mode;
  public KmsKeyArn $kms_key_arn;
}

class UpdateCrawlerResponse {
}

class CancelMLTaskRunResponse {
  public HashString $transform_id;
  public HashString $task_run_id;
  public TaskStatusType $status;
}

class CatalogTablesList {
}

class CreateConnectionRequest {
  public CatalogIdString $catalog_id;
  public ConnectionInput $connection_input;
}

class DeleteSecurityConfigurationResponse {
}

class Partition {
  public ParametersMap $parameters;
  public Timestamp $last_analyzed_time;
  public ValueStringList $values;
  public NameString $database_name;
  public NameString $table_name;
  public Timestamp $creation_time;
  public Timestamp $last_access_time;
  public StorageDescriptor $storage_descriptor;
}

class WorkflowNames {
}

class CreateJsonClassifierRequest {
  public NameString $name;
  public JsonPath $json_path;
}

class GetPartitionsResponse {
  public PartitionList $partitions;
  public Token $next_token;
}

class ListCrawlersRequest {
  public PageSize $max_results;
  public Token $next_token;
  public TagsMap $tags;
}

class PartitionInput {
  public StorageDescriptor $storage_descriptor;
  public ParametersMap $parameters;
  public Timestamp $last_analyzed_time;
  public ValueStringList $values;
  public Timestamp $last_access_time;
}

class TaskRun {
  public ExecutionTime $execution_time;
  public HashString $task_run_id;
  public TaskStatusType $status;
  public GenericString $log_group_name;
  public GenericString $error_string;
  public Timestamp $started_on;
  public Timestamp $completed_on;
  public HashString $transform_id;
  public TaskRunProperties $properties;
  public Timestamp $last_modified_on;
}

class CatalogEntry {
  public NameString $table_name;
  public NameString $database_name;
}

class CreateDatabaseRequest {
  public CatalogIdString $catalog_id;
  public DatabaseInput $database_input;
}

class ScheduleState {
}

class TransformParameters {
  public TransformType $transform_type;
  public FindMatchesParameters $find_matches_parameters;
}

class CodeGenIdentifier {
}

class CommentString {
}

class CreateDevEndpointResponse {
  public GenericString $availability_zone;
  public GenericString $vpc_id;
  public GenericString $extra_python_libs_s_3_path;
  public NameString $security_configuration;
  public GenericString $subnet_id;
  public GenericString $yarn_endpoint_address;
  public WorkerType $worker_type;
  public GlueVersionString $glue_version;
  public GenericString $extra_jars_s_3_path;
  public StringList $security_group_ids;
  public IntegerValue $zeppelin_remote_spark_interpreter_port;
  public IntegerValue $number_of_nodes;
  public NullableInteger $number_of_workers;
  public GenericString $failure_reason;
  public TimestampValue $created_timestamp;
  public GenericString $endpoint_name;
  public GenericString $status;
  public RoleArn $role_arn;
  public MapValue $arguments;
}

class NullableDouble {
}

class OrderList {
}

class Role {
}

class StopCrawlerRequest {
  public NameString $name;
}

class CatalogEntries {
}

class IntegerFlag {
}

class JobBookmarksEncryptionMode {
}

class Node {
  public NameString $unique_id;
  public TriggerNodeDetails $trigger_details;
  public JobNodeDetails $job_details;
  public CrawlerNodeDetails $crawler_details;
  public NodeType $type;
  public NameString $name;
}

class TableVersion {
  public Table $table;
  public VersionString $version_id;
}

class DeleteDatabaseRequest {
  public CatalogIdString $catalog_id;
  public NameString $name;
}

class GetCrawlerMetricsRequest {
  public PageSize $max_results;
  public Token $next_token;
  public CrawlerNameList $crawler_name_list;
}

class GetDevEndpointsResponse {
  public DevEndpointList $dev_endpoints;
  public GenericString $next_token;
}

class LocationString {
}

class Path {
}

class ResetJobBookmarkRequest {
  public JobName $job_name;
  public RunId $run_id;
}

class SortDirectionType {
}

class CreateCrawlerRequest {
  public CrawlerTargets $targets;
  public ClassifierNameList $classifiers;
  public CrawlerSecurityConfiguration $crawler_security_configuration;
  public TagsMap $tags;
  public CronExpression $schedule;
  public TablePrefix $table_prefix;
  public SchemaChangePolicy $schema_change_policy;
  public CrawlerConfiguration $configuration;
  public NameString $name;
  public Role $role;
  public DatabaseName $database_name;
  public DescriptionString $description;
}

class InvalidInputException {
  public MessageString $message;
}

class NotificationProperty {
  public NotifyDelayAfter $notify_delay_after;
}

class UpdateCrawlerRequest {
  public ClassifierNameList $classifiers;
  public CrawlerConfiguration $configuration;
  public CrawlerSecurityConfiguration $crawler_security_configuration;
  public CronExpression $schedule;
  public TablePrefix $table_prefix;
  public SchemaChangePolicy $schema_change_policy;
  public NameString $name;
  public Role $role;
  public DatabaseName $database_name;
  public DescriptionStringRemovable $description;
  public CrawlerTargets $targets;
}

class Action {
  public GenericMap $arguments;
  public Timeout $timeout;
  public NameString $security_configuration;
  public NotificationProperty $notification_property;
  public NameString $crawler_name;
  public NameString $job_name;
}

class BatchDeletePartitionRequest {
  public BatchDeletePartitionValueList $partitions_to_delete;
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $table_name;
}

class CodeGenArgValue {
}

class CreateTableRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public TableInput $table_input;
}

class CreateTableResponse {
}

class DeleteClassifierResponse {
}

class TriggerNameList {
}

class UpdateDevEndpointRequest {
  public PublicKeysList $add_public_keys;
  public PublicKeysList $delete_public_keys;
  public DevEndpointCustomLibraries $custom_libraries;
  public BooleanValue $update_etl_libraries;
  public StringList $delete_arguments;
  public MapValue $add_arguments;
  public GenericString $endpoint_name;
  public GenericString $public_key;
}

class UpdateMLTransformResponse {
  public HashString $transform_id;
}

class ColumnList {
}

class MappingEntry {
  public FieldType $source_type;
  public TableName $target_table;
  public SchemaPathString $target_path;
  public FieldType $target_type;
  public TableName $source_table;
  public SchemaPathString $source_path;
}

class NonNegativeInteger {
}

class UpdateCsvClassifierRequest {
  public NameString $name;
  public CsvColumnDelimiter $delimiter;
  public CsvQuoteSymbol $quote_symbol;
  public CsvHeaderOption $contains_header;
  public CsvHeader $header;
  public NullableBoolean $disable_value_trimming;
  public NullableBoolean $allow_single_column;
}

class ClassifierNameList {
}

class CreateTriggerResponse {
  public NameString $name;
}

class DagNodes {
}

class DataCatalogEncryptionSettings {
  public EncryptionAtRest $encryption_at_rest;
  public ConnectionPasswordEncryption $connection_password_encryption;
}

class DeleteJobResponse {
  public NameString $job_name;
}

class Edge {
  public NameString $source_id;
  public NameString $destination_id;
}

class StartMLLabelingSetGenerationTaskRunRequest {
  public HashString $transform_id;
  public UriString $output_s_3_path;
}

class CodeGenNodeArgs {
}

class DatabaseName {
}

class GetUserDefinedFunctionsResponse {
  public UserDefinedFunctionList $user_defined_functions;
  public Token $next_token;
}

class LogStream {
}

class UserDefinedFunctionList {
}

class ValidationException {
  public MessageString $message;
}

class BatchCreatePartitionResponse {
  public PartitionErrors $errors;
}

class GetMLTransformResponse {
  public TransformStatusType $status;
  public LabelCount $label_count;
  public NullableDouble $max_capacity;
  public DescriptionString $description;
  public TransformSchema $schema;
  public EvaluationMetrics $evaluation_metrics;
  public GlueVersionString $glue_version;
  public NullableInteger $number_of_workers;
  public NullableInteger $max_retries;
  public HashString $transform_id;
  public Timestamp $created_on;
  public TransformParameters $parameters;
  public RoleString $role;
  public WorkerType $worker_type;
  public Timeout $timeout;
  public NameString $name;
  public Timestamp $last_modified_on;
  public GlueTables $input_record_tables;
}

class JdbcTarget {
  public ConnectionName $connection_name;
  public Path $path;
  public PathList $exclusions;
}

class JobRun {
  public IdString $id;
  public AttemptCount $attempt;
  public GenericMap $arguments;
  public PredecessorList $predecessor_runs;
  public IntegerValue $allocated_capacity;
  public Timeout $timeout;
  public NullableDouble $max_capacity;
  public NullableInteger $number_of_workers;
  public NameString $trigger_name;
  public TimestampValue $started_on;
  public JobRunState $job_run_state;
  public ErrorString $error_message;
  public NameString $security_configuration;
  public GlueVersionString $glue_version;
  public NameString $job_name;
  public TimestampValue $last_modified_on;
  public GenericString $log_group_name;
  public IdString $previous_run_id;
  public TimestampValue $completed_on;
  public ExecutionTime $execution_time;
  public WorkerType $worker_type;
  public NotificationProperty $notification_property;
}

class KmsKeyArn {
}

class PropertyPredicate {
  public ValueString $key;
  public ValueString $value;
  public Comparator $comparator;
}

class Timeout {
}

class DeleteDevEndpointResponse {
}

class GetJobRunsResponse {
  public JobRunList $job_runs;
  public GenericString $next_token;
}

class GetUserDefinedFunctionsRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $pattern;
  public Token $next_token;
  public PageSize $max_results;
}

class NoScheduleException {
  public MessageString $message;
}

class UpdateTriggerRequest {
  public TriggerUpdate $trigger_update;
  public NameString $name;
}

class BatchGetPartitionResponse {
  public PartitionList $partitions;
  public BatchGetPartitionValueList $unprocessed_keys;
}

class ClassifierList {
}

class SearchTablesRequest {
  public CatalogIdString $catalog_id;
  public Token $next_token;
  public SearchPropertyPredicates $filters;
  public ValueString $search_text;
  public SortCriteria $sort_criteria;
  public PageSize $max_results;
}

class TransformStatusType {
}

class CancelMLTaskRunRequest {
  public HashString $transform_id;
  public HashString $task_run_id;
}

class Connection {
  public NameString $name;
  public MatchCriteria $match_criteria;
  public ConnectionProperties $connection_properties;
  public PhysicalConnectionRequirements $physical_connection_requirements;
  public Timestamp $creation_time;
  public Timestamp $last_updated_time;
  public NameString $last_updated_by;
  public DescriptionString $description;
  public ConnectionType $connection_type;
}

class BatchGetPartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $table_name;
  public BatchGetPartitionValueList $partitions_to_get;
}

class BatchGetWorkflowsResponse {
  public Workflows $workflows;
  public WorkflowNames $missing_workflows;
}

class BatchStopJobRunJobRunIdList {
}

class CrawlerTargets {
  public S3TargetList $s_3_targets;
  public JdbcTargetList $jdbc_targets;
  public DynamoDBTargetList $dynamo_db_targets;
  public CatalogTargetList $catalog_targets;
}

class JobUpdate {
  public DescriptionString $description;
  public RoleString $role;
  public NameString $security_configuration;
  public NotificationProperty $notification_property;
  public UriString $log_uri;
  public GenericMap $default_arguments;
  public GenericMap $non_overridable_arguments;
  public NullableInteger $number_of_workers;
  public JobCommand $command;
  public Timeout $timeout;
  public WorkerType $worker_type;
  public GlueVersionString $glue_version;
  public NullableDouble $max_capacity;
  public ExecutionProperty $execution_property;
  public ConnectionsList $connections;
  public MaxRetries $max_retries;
  public IntegerValue $allocated_capacity;
}

class SchemaPathString {
}

class UpdateJobResponse {
  public NameString $job_name;
}

class ColumnValueStringList {
}

class CreateSecurityConfigurationResponse {
  public NameString $name;
  public TimestampValue $created_timestamp;
}

class CustomPatterns {
}

class DeleteMLTransformResponse {
  public HashString $transform_id;
}

class FindMatchesParameters {
  public ColumnNameString $primary_key_column_name;
  public GenericBoundedDouble $precision_recall_tradeoff;
  public GenericBoundedDouble $accuracy_cost_tradeoff;
  public NullableBoolean $enforce_provided_labels;
}

class NodeType {
}

class SortCriteria {
}

class CatalogIdString {
}

class DataLakePrincipalString {
}

class PrincipalPermissions {
  public DataLakePrincipal $principal;
  public PermissionList $permissions;
}

class ResourceUriList {
}

class StartExportLabelsTaskRunResponse {
  public HashString $task_run_id;
}

class DeleteSecurityConfigurationRequest {
  public NameString $name;
}

class PutDataCatalogEncryptionSettingsRequest {
  public CatalogIdString $catalog_id;
  public DataCatalogEncryptionSettings $data_catalog_encryption_settings;
}

class Column {
  public NameString $name;
  public ColumnTypeString $type;
  public CommentString $comment;
  public ParametersMap $parameters;
}

class ConnectionName {
}

class NullableBoolean {
}

class GenericMap {
}

class GetTriggerResponse {
  public Trigger $trigger;
}

class UpdateWorkflowResponse {
  public NameString $name;
}

class UriString {
}

class ConditionList {
}

class GetMLTransformRequest {
  public HashString $transform_id;
}

class GetWorkflowRunsRequest {
  public NullableBoolean $include_graph;
  public GenericString $next_token;
  public PageSize $max_results;
  public NameString $name;
}

class MaxConcurrentRuns {
}

class Permission {
}

class StringList {
}

class BatchDeleteTableRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public BatchDeleteTableNameList $tables_to_delete;
}

class ImportCatalogToGlueResponse {
}

class JobCommand {
  public GenericString $name;
  public ScriptLocationString $script_location;
  public PythonVersionString $python_version;
}

class ScalaCode {
}

class LogicalOperator {
}

class AttemptCount {
}

class CrawlerNotRunningException {
  public MessageString $message;
}

class GetCrawlersResponse {
  public CrawlerList $crawlers;
  public Token $next_token;
}

class GetDevEndpointResponse {
  public DevEndpoint $dev_endpoint;
}

class NameStringList {
}

class ViewTextString {
}

class DeleteTableResponse {
}

class GrokPattern {
}

class UserDefinedFunction {
  public NameString $owner_name;
  public PrincipalType $owner_type;
  public Timestamp $create_time;
  public ResourceUriList $resource_uris;
  public NameString $function_name;
  public NameString $class_name;
}

class BoundedPartitionValueList {
}

class GetCrawlerResponse {
  public Crawler $crawler;
}

class GetTriggerRequest {
  public NameString $name;
}

class ResourceUri {
  public ResourceType $resource_type;
  public URI $uri;
}

class SchedulerTransitioningException {
  public MessageString $message;
}

class SearchTablesResponse {
  public Token $next_token;
  public TableList $table_list;
}

class StartTriggerRequest {
  public NameString $name;
}

class ColumnTypeString {
}

class DevEndpointList {
}

class GetDevEndpointRequest {
  public GenericString $endpoint_name;
}

class TableInput {
  public Timestamp $last_access_time;
  public Timestamp $last_analyzed_time;
  public NonNegativeInteger $retention;
  public StorageDescriptor $storage_descriptor;
  public ColumnList $partition_keys;
  public NameString $name;
  public DescriptionString $description;
  public NameString $owner;
  public ViewTextString $view_expanded_text;
  public ParametersMap $parameters;
  public ViewTextString $view_original_text;
  public TableTypeString $table_type;
}

class UpdateCrawlerScheduleRequest {
  public NameString $crawler_name;
  public CronExpression $schedule;
}

class ConnectionProperties {
}

class CrawlerSecurityConfiguration {
}

class CreatePartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $table_name;
  public PartitionInput $partition_input;
}

class DescriptionStringRemovable {
}

class ExecutionTime {
}

class LabelCount {
}

class UpdateClassifierRequest {
  public UpdateGrokClassifierRequest $grok_classifier;
  public UpdateXMLClassifierRequest $xml_classifier;
  public UpdateJsonClassifierRequest $json_classifier;
  public UpdateCsvClassifierRequest $csv_classifier;
}

class CrawlerMetricsList {
}

class DeleteUserDefinedFunctionRequest {
  public NameString $database_name;
  public NameString $function_name;
  public CatalogIdString $catalog_id;
}

class MillisecondsCount {
}

class PredicateString {
}

class CreateScriptRequest {
  public DagEdges $dag_edges;
  public Language $language;
  public DagNodes $dag_nodes;
}

class DeleteCrawlerRequest {
  public NameString $name;
}

class GetCatalogImportStatusResponse {
  public CatalogImportStatus $import_status;
}

class GetCrawlerMetricsResponse {
  public Token $next_token;
  public CrawlerMetricsList $crawler_metrics_list;
}

class ParametersMap {
}

class TransformList {
}

class BatchDeletePartitionValueList {
}

class GetJobRunsRequest {
  public NameString $job_name;
  public GenericString $next_token;
  public PageSize $max_results;
}

class SchedulerRunningException {
  public MessageString $message;
}

class SecurityConfiguration {
  public NameString $name;
  public TimestampValue $created_time_stamp;
  public EncryptionConfiguration $encryption_configuration;
}

class UpdateUserDefinedFunctionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $function_name;
  public UserDefinedFunctionInput $function_input;
}

