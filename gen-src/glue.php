<?hh // strict
namespace slack\aws\glue;

interface Glue {
  public function BatchCreatePartition(BatchCreatePartitionRequest) Awaitable<Errors\Result<BatchCreatePartitionResponse>>;
  public function BatchDeleteConnection(BatchDeleteConnectionRequest) Awaitable<Errors\Result<BatchDeleteConnectionResponse>>;
  public function BatchDeletePartition(BatchDeletePartitionRequest) Awaitable<Errors\Result<BatchDeletePartitionResponse>>;
  public function BatchDeleteTable(BatchDeleteTableRequest) Awaitable<Errors\Result<BatchDeleteTableResponse>>;
  public function BatchDeleteTableVersion(BatchDeleteTableVersionRequest) Awaitable<Errors\Result<BatchDeleteTableVersionResponse>>;
  public function BatchGetCrawlers(BatchGetCrawlersRequest) Awaitable<Errors\Result<BatchGetCrawlersResponse>>;
  public function BatchGetDevEndpoints(BatchGetDevEndpointsRequest) Awaitable<Errors\Result<BatchGetDevEndpointsResponse>>;
  public function BatchGetJobs(BatchGetJobsRequest) Awaitable<Errors\Result<BatchGetJobsResponse>>;
  public function BatchGetPartition(BatchGetPartitionRequest) Awaitable<Errors\Result<BatchGetPartitionResponse>>;
  public function BatchGetTriggers(BatchGetTriggersRequest) Awaitable<Errors\Result<BatchGetTriggersResponse>>;
  public function BatchGetWorkflows(BatchGetWorkflowsRequest) Awaitable<Errors\Result<BatchGetWorkflowsResponse>>;
  public function BatchStopJobRun(BatchStopJobRunRequest) Awaitable<Errors\Result<BatchStopJobRunResponse>>;
  public function CancelMLTaskRun(CancelMLTaskRunRequest) Awaitable<Errors\Result<CancelMLTaskRunResponse>>;
  public function CreateClassifier(CreateClassifierRequest) Awaitable<Errors\Result<CreateClassifierResponse>>;
  public function CreateConnection(CreateConnectionRequest) Awaitable<Errors\Result<CreateConnectionResponse>>;
  public function CreateCrawler(CreateCrawlerRequest) Awaitable<Errors\Result<CreateCrawlerResponse>>;
  public function CreateDatabase(CreateDatabaseRequest) Awaitable<Errors\Result<CreateDatabaseResponse>>;
  public function CreateDevEndpoint(CreateDevEndpointRequest) Awaitable<Errors\Result<CreateDevEndpointResponse>>;
  public function CreateJob(CreateJobRequest) Awaitable<Errors\Result<CreateJobResponse>>;
  public function CreateMLTransform(CreateMLTransformRequest) Awaitable<Errors\Result<CreateMLTransformResponse>>;
  public function CreatePartition(CreatePartitionRequest) Awaitable<Errors\Result<CreatePartitionResponse>>;
  public function CreateScript(CreateScriptRequest) Awaitable<Errors\Result<CreateScriptResponse>>;
  public function CreateSecurityConfiguration(CreateSecurityConfigurationRequest) Awaitable<Errors\Result<CreateSecurityConfigurationResponse>>;
  public function CreateTable(CreateTableRequest) Awaitable<Errors\Result<CreateTableResponse>>;
  public function CreateTrigger(CreateTriggerRequest) Awaitable<Errors\Result<CreateTriggerResponse>>;
  public function CreateUserDefinedFunction(CreateUserDefinedFunctionRequest) Awaitable<Errors\Result<CreateUserDefinedFunctionResponse>>;
  public function CreateWorkflow(CreateWorkflowRequest) Awaitable<Errors\Result<CreateWorkflowResponse>>;
  public function DeleteClassifier(DeleteClassifierRequest) Awaitable<Errors\Result<DeleteClassifierResponse>>;
  public function DeleteConnection(DeleteConnectionRequest) Awaitable<Errors\Result<DeleteConnectionResponse>>;
  public function DeleteCrawler(DeleteCrawlerRequest) Awaitable<Errors\Result<DeleteCrawlerResponse>>;
  public function DeleteDatabase(DeleteDatabaseRequest) Awaitable<Errors\Result<DeleteDatabaseResponse>>;
  public function DeleteDevEndpoint(DeleteDevEndpointRequest) Awaitable<Errors\Result<DeleteDevEndpointResponse>>;
  public function DeleteJob(DeleteJobRequest) Awaitable<Errors\Result<DeleteJobResponse>>;
  public function DeleteMLTransform(DeleteMLTransformRequest) Awaitable<Errors\Result<DeleteMLTransformResponse>>;
  public function DeletePartition(DeletePartitionRequest) Awaitable<Errors\Result<DeletePartitionResponse>>;
  public function DeleteResourcePolicy(DeleteResourcePolicyRequest) Awaitable<Errors\Result<DeleteResourcePolicyResponse>>;
  public function DeleteSecurityConfiguration(DeleteSecurityConfigurationRequest) Awaitable<Errors\Result<DeleteSecurityConfigurationResponse>>;
  public function DeleteTable(DeleteTableRequest) Awaitable<Errors\Result<DeleteTableResponse>>;
  public function DeleteTableVersion(DeleteTableVersionRequest) Awaitable<Errors\Result<DeleteTableVersionResponse>>;
  public function DeleteTrigger(DeleteTriggerRequest) Awaitable<Errors\Result<DeleteTriggerResponse>>;
  public function DeleteUserDefinedFunction(DeleteUserDefinedFunctionRequest) Awaitable<Errors\Result<DeleteUserDefinedFunctionResponse>>;
  public function DeleteWorkflow(DeleteWorkflowRequest) Awaitable<Errors\Result<DeleteWorkflowResponse>>;
  public function GetCatalogImportStatus(GetCatalogImportStatusRequest) Awaitable<Errors\Result<GetCatalogImportStatusResponse>>;
  public function GetClassifier(GetClassifierRequest) Awaitable<Errors\Result<GetClassifierResponse>>;
  public function GetClassifiers(GetClassifiersRequest) Awaitable<Errors\Result<GetClassifiersResponse>>;
  public function GetConnection(GetConnectionRequest) Awaitable<Errors\Result<GetConnectionResponse>>;
  public function GetConnections(GetConnectionsRequest) Awaitable<Errors\Result<GetConnectionsResponse>>;
  public function GetCrawler(GetCrawlerRequest) Awaitable<Errors\Result<GetCrawlerResponse>>;
  public function GetCrawlerMetrics(GetCrawlerMetricsRequest) Awaitable<Errors\Result<GetCrawlerMetricsResponse>>;
  public function GetCrawlers(GetCrawlersRequest) Awaitable<Errors\Result<GetCrawlersResponse>>;
  public function GetDataCatalogEncryptionSettings(GetDataCatalogEncryptionSettingsRequest) Awaitable<Errors\Result<GetDataCatalogEncryptionSettingsResponse>>;
  public function GetDatabase(GetDatabaseRequest) Awaitable<Errors\Result<GetDatabaseResponse>>;
  public function GetDatabases(GetDatabasesRequest) Awaitable<Errors\Result<GetDatabasesResponse>>;
  public function GetDataflowGraph(GetDataflowGraphRequest) Awaitable<Errors\Result<GetDataflowGraphResponse>>;
  public function GetDevEndpoint(GetDevEndpointRequest) Awaitable<Errors\Result<GetDevEndpointResponse>>;
  public function GetDevEndpoints(GetDevEndpointsRequest) Awaitable<Errors\Result<GetDevEndpointsResponse>>;
  public function GetJob(GetJobRequest) Awaitable<Errors\Result<GetJobResponse>>;
  public function GetJobBookmark(GetJobBookmarkRequest) Awaitable<Errors\Result<GetJobBookmarkResponse>>;
  public function GetJobRun(GetJobRunRequest) Awaitable<Errors\Result<GetJobRunResponse>>;
  public function GetJobRuns(GetJobRunsRequest) Awaitable<Errors\Result<GetJobRunsResponse>>;
  public function GetJobs(GetJobsRequest) Awaitable<Errors\Result<GetJobsResponse>>;
  public function GetMLTaskRun(GetMLTaskRunRequest) Awaitable<Errors\Result<GetMLTaskRunResponse>>;
  public function GetMLTaskRuns(GetMLTaskRunsRequest) Awaitable<Errors\Result<GetMLTaskRunsResponse>>;
  public function GetMLTransform(GetMLTransformRequest) Awaitable<Errors\Result<GetMLTransformResponse>>;
  public function GetMLTransforms(GetMLTransformsRequest) Awaitable<Errors\Result<GetMLTransformsResponse>>;
  public function GetMapping(GetMappingRequest) Awaitable<Errors\Result<GetMappingResponse>>;
  public function GetPartition(GetPartitionRequest) Awaitable<Errors\Result<GetPartitionResponse>>;
  public function GetPartitions(GetPartitionsRequest) Awaitable<Errors\Result<GetPartitionsResponse>>;
  public function GetPlan(GetPlanRequest) Awaitable<Errors\Result<GetPlanResponse>>;
  public function GetResourcePolicy(GetResourcePolicyRequest) Awaitable<Errors\Result<GetResourcePolicyResponse>>;
  public function GetSecurityConfiguration(GetSecurityConfigurationRequest) Awaitable<Errors\Result<GetSecurityConfigurationResponse>>;
  public function GetSecurityConfigurations(GetSecurityConfigurationsRequest) Awaitable<Errors\Result<GetSecurityConfigurationsResponse>>;
  public function GetTable(GetTableRequest) Awaitable<Errors\Result<GetTableResponse>>;
  public function GetTableVersion(GetTableVersionRequest) Awaitable<Errors\Result<GetTableVersionResponse>>;
  public function GetTableVersions(GetTableVersionsRequest) Awaitable<Errors\Result<GetTableVersionsResponse>>;
  public function GetTables(GetTablesRequest) Awaitable<Errors\Result<GetTablesResponse>>;
  public function GetTags(GetTagsRequest) Awaitable<Errors\Result<GetTagsResponse>>;
  public function GetTrigger(GetTriggerRequest) Awaitable<Errors\Result<GetTriggerResponse>>;
  public function GetTriggers(GetTriggersRequest) Awaitable<Errors\Result<GetTriggersResponse>>;
  public function GetUserDefinedFunction(GetUserDefinedFunctionRequest) Awaitable<Errors\Result<GetUserDefinedFunctionResponse>>;
  public function GetUserDefinedFunctions(GetUserDefinedFunctionsRequest) Awaitable<Errors\Result<GetUserDefinedFunctionsResponse>>;
  public function GetWorkflow(GetWorkflowRequest) Awaitable<Errors\Result<GetWorkflowResponse>>;
  public function GetWorkflowRun(GetWorkflowRunRequest) Awaitable<Errors\Result<GetWorkflowRunResponse>>;
  public function GetWorkflowRunProperties(GetWorkflowRunPropertiesRequest) Awaitable<Errors\Result<GetWorkflowRunPropertiesResponse>>;
  public function GetWorkflowRuns(GetWorkflowRunsRequest) Awaitable<Errors\Result<GetWorkflowRunsResponse>>;
  public function ImportCatalogToGlue(ImportCatalogToGlueRequest) Awaitable<Errors\Result<ImportCatalogToGlueResponse>>;
  public function ListCrawlers(ListCrawlersRequest) Awaitable<Errors\Result<ListCrawlersResponse>>;
  public function ListDevEndpoints(ListDevEndpointsRequest) Awaitable<Errors\Result<ListDevEndpointsResponse>>;
  public function ListJobs(ListJobsRequest) Awaitable<Errors\Result<ListJobsResponse>>;
  public function ListMLTransforms(ListMLTransformsRequest) Awaitable<Errors\Result<ListMLTransformsResponse>>;
  public function ListTriggers(ListTriggersRequest) Awaitable<Errors\Result<ListTriggersResponse>>;
  public function ListWorkflows(ListWorkflowsRequest) Awaitable<Errors\Result<ListWorkflowsResponse>>;
  public function PutDataCatalogEncryptionSettings(PutDataCatalogEncryptionSettingsRequest) Awaitable<Errors\Result<PutDataCatalogEncryptionSettingsResponse>>;
  public function PutResourcePolicy(PutResourcePolicyRequest) Awaitable<Errors\Result<PutResourcePolicyResponse>>;
  public function PutWorkflowRunProperties(PutWorkflowRunPropertiesRequest) Awaitable<Errors\Result<PutWorkflowRunPropertiesResponse>>;
  public function ResetJobBookmark(ResetJobBookmarkRequest) Awaitable<Errors\Result<ResetJobBookmarkResponse>>;
  public function SearchTables(SearchTablesRequest) Awaitable<Errors\Result<SearchTablesResponse>>;
  public function StartCrawler(StartCrawlerRequest) Awaitable<Errors\Result<StartCrawlerResponse>>;
  public function StartCrawlerSchedule(StartCrawlerScheduleRequest) Awaitable<Errors\Result<StartCrawlerScheduleResponse>>;
  public function StartExportLabelsTaskRun(StartExportLabelsTaskRunRequest) Awaitable<Errors\Result<StartExportLabelsTaskRunResponse>>;
  public function StartImportLabelsTaskRun(StartImportLabelsTaskRunRequest) Awaitable<Errors\Result<StartImportLabelsTaskRunResponse>>;
  public function StartJobRun(StartJobRunRequest) Awaitable<Errors\Result<StartJobRunResponse>>;
  public function StartMLEvaluationTaskRun(StartMLEvaluationTaskRunRequest) Awaitable<Errors\Result<StartMLEvaluationTaskRunResponse>>;
  public function StartMLLabelingSetGenerationTaskRun(StartMLLabelingSetGenerationTaskRunRequest) Awaitable<Errors\Result<StartMLLabelingSetGenerationTaskRunResponse>>;
  public function StartTrigger(StartTriggerRequest) Awaitable<Errors\Result<StartTriggerResponse>>;
  public function StartWorkflowRun(StartWorkflowRunRequest) Awaitable<Errors\Result<StartWorkflowRunResponse>>;
  public function StopCrawler(StopCrawlerRequest) Awaitable<Errors\Result<StopCrawlerResponse>>;
  public function StopCrawlerSchedule(StopCrawlerScheduleRequest) Awaitable<Errors\Result<StopCrawlerScheduleResponse>>;
  public function StopTrigger(StopTriggerRequest) Awaitable<Errors\Result<StopTriggerResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateClassifier(UpdateClassifierRequest) Awaitable<Errors\Result<UpdateClassifierResponse>>;
  public function UpdateConnection(UpdateConnectionRequest) Awaitable<Errors\Result<UpdateConnectionResponse>>;
  public function UpdateCrawler(UpdateCrawlerRequest) Awaitable<Errors\Result<UpdateCrawlerResponse>>;
  public function UpdateCrawlerSchedule(UpdateCrawlerScheduleRequest) Awaitable<Errors\Result<UpdateCrawlerScheduleResponse>>;
  public function UpdateDatabase(UpdateDatabaseRequest) Awaitable<Errors\Result<UpdateDatabaseResponse>>;
  public function UpdateDevEndpoint(UpdateDevEndpointRequest) Awaitable<Errors\Result<UpdateDevEndpointResponse>>;
  public function UpdateJob(UpdateJobRequest) Awaitable<Errors\Result<UpdateJobResponse>>;
  public function UpdateMLTransform(UpdateMLTransformRequest) Awaitable<Errors\Result<UpdateMLTransformResponse>>;
  public function UpdatePartition(UpdatePartitionRequest) Awaitable<Errors\Result<UpdatePartitionResponse>>;
  public function UpdateTable(UpdateTableRequest) Awaitable<Errors\Result<UpdateTableResponse>>;
  public function UpdateTrigger(UpdateTriggerRequest) Awaitable<Errors\Result<UpdateTriggerResponse>>;
  public function UpdateUserDefinedFunction(UpdateUserDefinedFunctionRequest) Awaitable<Errors\Result<UpdateUserDefinedFunctionResponse>>;
  public function UpdateWorkflow(UpdateWorkflowRequest) Awaitable<Errors\Result<UpdateWorkflowResponse>>;
}

class AccessDeniedException {
  public MessageString $message;
}

class Action {
  public GenericMap $arguments;
  public NameString $crawler_name;
  public NameString $job_name;
  public NotificationProperty $notification_property;
  public NameString $security_configuration;
  public Timeout $timeout;
}

class ActionList {
}

class AlreadyExistsException {
  public MessageString $message;
}

class AttemptCount {
}

class BatchCreatePartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public PartitionInputList $partition_input_list;
  public NameString $table_name;
}

class BatchCreatePartitionResponse {
  public PartitionErrors $errors;
}

class BatchDeleteConnectionRequest {
  public CatalogIdString $catalog_id;
  public DeleteConnectionNameList $connection_name_list;
}

class BatchDeleteConnectionResponse {
  public ErrorByName $errors;
  public NameStringList $succeeded;
}

class BatchDeletePartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public BatchDeletePartitionValueList $partitions_to_delete;
  public NameString $table_name;
}

class BatchDeletePartitionResponse {
  public PartitionErrors $errors;
}

class BatchDeletePartitionValueList {
}

class BatchDeleteTableNameList {
}

class BatchDeleteTableRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public BatchDeleteTableNameList $tables_to_delete;
}

class BatchDeleteTableResponse {
  public TableErrors $errors;
}

class BatchDeleteTableVersionList {
}

class BatchDeleteTableVersionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $table_name;
  public BatchDeleteTableVersionList $version_ids;
}

class BatchDeleteTableVersionResponse {
  public TableVersionErrors $errors;
}

class BatchGetCrawlersRequest {
  public CrawlerNameList $crawler_names;
}

class BatchGetCrawlersResponse {
  public CrawlerList $crawlers;
  public CrawlerNameList $crawlers_not_found;
}

class BatchGetDevEndpointsRequest {
  public DevEndpointNames $dev_endpoint_names;
}

class BatchGetDevEndpointsResponse {
  public DevEndpointList $dev_endpoints;
  public DevEndpointNames $dev_endpoints_not_found;
}

class BatchGetJobsRequest {
  public JobNameList $job_names;
}

class BatchGetJobsResponse {
  public JobList $jobs;
  public JobNameList $jobs_not_found;
}

class BatchGetPartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public BatchGetPartitionValueList $partitions_to_get;
  public NameString $table_name;
}

class BatchGetPartitionResponse {
  public PartitionList $partitions;
  public BatchGetPartitionValueList $unprocessed_keys;
}

class BatchGetPartitionValueList {
}

class BatchGetTriggersRequest {
  public TriggerNameList $trigger_names;
}

class BatchGetTriggersResponse {
  public TriggerList $triggers;
  public TriggerNameList $triggers_not_found;
}

class BatchGetWorkflowsRequest {
  public NullableBoolean $include_graph;
  public WorkflowNames $names;
}

class BatchGetWorkflowsResponse {
  public WorkflowNames $missing_workflows;
  public Workflows $workflows;
}

class BatchStopJobRunError {
  public ErrorDetail $error_detail;
  public NameString $job_name;
  public IdString $job_run_id;
}

class BatchStopJobRunErrorList {
}

class BatchStopJobRunJobRunIdList {
}

class BatchStopJobRunRequest {
  public NameString $job_name;
  public BatchStopJobRunJobRunIdList $job_run_ids;
}

class BatchStopJobRunResponse {
  public BatchStopJobRunErrorList $errors;
  public BatchStopJobRunSuccessfulSubmissionList $successful_submissions;
}

class BatchStopJobRunSuccessfulSubmission {
  public NameString $job_name;
  public IdString $job_run_id;
}

class BatchStopJobRunSuccessfulSubmissionList {
}

class Boolean {
}

class BooleanNullable {
}

class BooleanValue {
}

class BoundedPartitionValueList {
}

class CancelMLTaskRunRequest {
  public HashString $task_run_id;
  public HashString $transform_id;
}

class CancelMLTaskRunResponse {
  public TaskStatusType $status;
  public HashString $task_run_id;
  public HashString $transform_id;
}

class CatalogEncryptionMode {
}

class CatalogEntries {
}

class CatalogEntry {
  public NameString $database_name;
  public NameString $table_name;
}

class CatalogIdString {
}

class CatalogImportStatus {
  public boolean $import_completed;
  public Timestamp $import_time;
  public NameString $imported_by;
}

class CatalogTablesList {
}

class CatalogTarget {
  public NameString $database_name;
  public CatalogTablesList $tables;
}

class CatalogTargetList {
}

class Classification {
}

class Classifier {
  public CsvClassifier $csv_classifier;
  public GrokClassifier $grok_classifier;
  public JsonClassifier $json_classifier;
  public XMLClassifier $xml_classifier;
}

class ClassifierList {
}

class ClassifierNameList {
}

class CloudWatchEncryption {
  public CloudWatchEncryptionMode $cloud_watch_encryption_mode;
  public KmsKeyArn $kms_key_arn;
}

class CloudWatchEncryptionMode {
}

class CodeGenArgName {
}

class CodeGenArgValue {
}

class CodeGenEdge {
  public CodeGenIdentifier $source;
  public CodeGenIdentifier $target;
  public CodeGenArgName $target_parameter;
}

class CodeGenIdentifier {
}

class CodeGenNode {
  public CodeGenNodeArgs $args;
  public CodeGenIdentifier $id;
  public int $line_number;
  public CodeGenNodeType $node_type;
}

class CodeGenNodeArg {
  public CodeGenArgName $name;
  public boolean $param;
  public CodeGenArgValue $value;
}

class CodeGenNodeArgs {
}

class CodeGenNodeType {
}

class Column {
  public CommentString $comment;
  public NameString $name;
  public ParametersMap $parameters;
  public ColumnTypeString $type;
}

class ColumnList {
}

class ColumnNameString {
}

class ColumnTypeString {
}

class ColumnValueStringList {
}

class ColumnValuesString {
}

class CommentString {
}

class Comparator {
}

class ConcurrentModificationException {
  public MessageString $message;
}

class ConcurrentRunsExceededException {
  public MessageString $message;
}

class Condition {
  public CrawlState $crawl_state;
  public NameString $crawler_name;
  public NameString $job_name;
  public LogicalOperator $logical_operator;
  public JobRunState $state;
}

class ConditionCheckFailureException {
  public MessageString $message;
}

class ConditionList {
}

class ConfusionMatrix {
  public RecordsCount $num_false_negatives;
  public RecordsCount $num_false_positives;
  public RecordsCount $num_true_negatives;
  public RecordsCount $num_true_positives;
}

class Connection {
  public ConnectionProperties $connection_properties;
  public ConnectionType $connection_type;
  public Timestamp $creation_time;
  public DescriptionString $description;
  public NameString $last_updated_by;
  public Timestamp $last_updated_time;
  public MatchCriteria $match_criteria;
  public NameString $name;
  public PhysicalConnectionRequirements $physical_connection_requirements;
}

class ConnectionInput {
  public ConnectionProperties $connection_properties;
  public ConnectionType $connection_type;
  public DescriptionString $description;
  public MatchCriteria $match_criteria;
  public NameString $name;
  public PhysicalConnectionRequirements $physical_connection_requirements;
}

class ConnectionList {
}

class ConnectionName {
}

class ConnectionPasswordEncryption {
  public NameString $aws_kms_key_id;
  public boolean $return_connection_password_encrypted;
}

class ConnectionProperties {
}

class ConnectionPropertyKey {
}

class ConnectionType {
}

class ConnectionsList {
  public OrchestrationStringList $connections;
}

class Crawl {
  public TimestampValue $completed_on;
  public DescriptionString $error_message;
  public LogGroup $log_group;
  public LogStream $log_stream;
  public TimestampValue $started_on;
  public CrawlState $state;
}

class CrawlList {
}

class CrawlState {
}

class Crawler {
  public ClassifierNameList $classifiers;
  public CrawlerConfiguration $configuration;
  public MillisecondsCount $crawl_elapsed_time;
  public CrawlerSecurityConfiguration $crawler_security_configuration;
  public Timestamp $creation_time;
  public DatabaseName $database_name;
  public DescriptionString $description;
  public LastCrawlInfo $last_crawl;
  public Timestamp $last_updated;
  public NameString $name;
  public Role $role;
  public Schedule $schedule;
  public SchemaChangePolicy $schema_change_policy;
  public CrawlerState $state;
  public TablePrefix $table_prefix;
  public CrawlerTargets $targets;
  public VersionId $version;
}

class CrawlerConfiguration {
}

class CrawlerList {
}

class CrawlerMetrics {
  public NameString $crawler_name;
  public NonNegativeDouble $last_runtime_seconds;
  public NonNegativeDouble $median_runtime_seconds;
  public boolean $still_estimating;
  public NonNegativeInteger $tables_created;
  public NonNegativeInteger $tables_deleted;
  public NonNegativeInteger $tables_updated;
  public NonNegativeDouble $time_left_seconds;
}

class CrawlerMetricsList {
}

class CrawlerNameList {
}

class CrawlerNodeDetails {
  public CrawlList $crawls;
}

class CrawlerNotRunningException {
  public MessageString $message;
}

class CrawlerRunningException {
  public MessageString $message;
}

class CrawlerSecurityConfiguration {
}

class CrawlerState {
}

class CrawlerStoppingException {
  public MessageString $message;
}

class CrawlerTargets {
  public CatalogTargetList $catalog_targets;
  public DynamoDBTargetList $dynamo_db_targets;
  public JdbcTargetList $jdbc_targets;
  public S3TargetList $s_3_targets;
}

class CreateClassifierRequest {
  public CreateCsvClassifierRequest $csv_classifier;
  public CreateGrokClassifierRequest $grok_classifier;
  public CreateJsonClassifierRequest $json_classifier;
  public CreateXMLClassifierRequest $xml_classifier;
}

class CreateClassifierResponse {
}

class CreateConnectionRequest {
  public CatalogIdString $catalog_id;
  public ConnectionInput $connection_input;
}

class CreateConnectionResponse {
}

class CreateCrawlerRequest {
  public ClassifierNameList $classifiers;
  public CrawlerConfiguration $configuration;
  public CrawlerSecurityConfiguration $crawler_security_configuration;
  public DatabaseName $database_name;
  public DescriptionString $description;
  public NameString $name;
  public Role $role;
  public CronExpression $schedule;
  public SchemaChangePolicy $schema_change_policy;
  public TablePrefix $table_prefix;
  public TagsMap $tags;
  public CrawlerTargets $targets;
}

class CreateCrawlerResponse {
}

class CreateCsvClassifierRequest {
  public NullableBoolean $allow_single_column;
  public CsvHeaderOption $contains_header;
  public CsvColumnDelimiter $delimiter;
  public NullableBoolean $disable_value_trimming;
  public CsvHeader $header;
  public NameString $name;
  public CsvQuoteSymbol $quote_symbol;
}

class CreateDatabaseRequest {
  public CatalogIdString $catalog_id;
  public DatabaseInput $database_input;
}

class CreateDatabaseResponse {
}

class CreateDevEndpointRequest {
  public MapValue $arguments;
  public GenericString $endpoint_name;
  public GenericString $extra_jars_s_3_path;
  public GenericString $extra_python_libs_s_3_path;
  public GlueVersionString $glue_version;
  public IntegerValue $number_of_nodes;
  public NullableInteger $number_of_workers;
  public GenericString $public_key;
  public PublicKeysList $public_keys;
  public RoleArn $role_arn;
  public NameString $security_configuration;
  public StringList $security_group_ids;
  public GenericString $subnet_id;
  public TagsMap $tags;
  public WorkerType $worker_type;
}

class CreateDevEndpointResponse {
  public MapValue $arguments;
  public GenericString $availability_zone;
  public TimestampValue $created_timestamp;
  public GenericString $endpoint_name;
  public GenericString $extra_jars_s_3_path;
  public GenericString $extra_python_libs_s_3_path;
  public GenericString $failure_reason;
  public GlueVersionString $glue_version;
  public IntegerValue $number_of_nodes;
  public NullableInteger $number_of_workers;
  public RoleArn $role_arn;
  public NameString $security_configuration;
  public StringList $security_group_ids;
  public GenericString $status;
  public GenericString $subnet_id;
  public GenericString $vpc_id;
  public WorkerType $worker_type;
  public GenericString $yarn_endpoint_address;
  public IntegerValue $zeppelin_remote_spark_interpreter_port;
}

class CreateGrokClassifierRequest {
  public Classification $classification;
  public CustomPatterns $custom_patterns;
  public GrokPattern $grok_pattern;
  public NameString $name;
}

class CreateJobRequest {
  public IntegerValue $allocated_capacity;
  public JobCommand $command;
  public ConnectionsList $connections;
  public GenericMap $default_arguments;
  public DescriptionString $description;
  public ExecutionProperty $execution_property;
  public GlueVersionString $glue_version;
  public UriString $log_uri;
  public NullableDouble $max_capacity;
  public MaxRetries $max_retries;
  public NameString $name;
  public GenericMap $non_overridable_arguments;
  public NotificationProperty $notification_property;
  public NullableInteger $number_of_workers;
  public RoleString $role;
  public NameString $security_configuration;
  public TagsMap $tags;
  public Timeout $timeout;
  public WorkerType $worker_type;
}

class CreateJobResponse {
  public NameString $name;
}

class CreateJsonClassifierRequest {
  public JsonPath $json_path;
  public NameString $name;
}

class CreateMLTransformRequest {
  public DescriptionString $description;
  public GlueVersionString $glue_version;
  public GlueTables $input_record_tables;
  public NullableDouble $max_capacity;
  public NullableInteger $max_retries;
  public NameString $name;
  public NullableInteger $number_of_workers;
  public TransformParameters $parameters;
  public RoleString $role;
  public TagsMap $tags;
  public Timeout $timeout;
  public WorkerType $worker_type;
}

class CreateMLTransformResponse {
  public HashString $transform_id;
}

class CreatePartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public PartitionInput $partition_input;
  public NameString $table_name;
}

class CreatePartitionResponse {
}

class CreateScriptRequest {
  public DagEdges $dag_edges;
  public DagNodes $dag_nodes;
  public Language $language;
}

class CreateScriptResponse {
  public PythonScript $python_script;
  public ScalaCode $scala_code;
}

class CreateSecurityConfigurationRequest {
  public EncryptionConfiguration $encryption_configuration;
  public NameString $name;
}

class CreateSecurityConfigurationResponse {
  public TimestampValue $created_timestamp;
  public NameString $name;
}

class CreateTableRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public TableInput $table_input;
}

class CreateTableResponse {
}

class CreateTriggerRequest {
  public ActionList $actions;
  public DescriptionString $description;
  public NameString $name;
  public Predicate $predicate;
  public GenericString $schedule;
  public BooleanValue $start_on_creation;
  public TagsMap $tags;
  public TriggerType $type;
  public NameString $workflow_name;
}

class CreateTriggerResponse {
  public NameString $name;
}

class CreateUserDefinedFunctionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public UserDefinedFunctionInput $function_input;
}

class CreateUserDefinedFunctionResponse {
}

class CreateWorkflowRequest {
  public WorkflowRunProperties $default_run_properties;
  public GenericString $description;
  public NameString $name;
  public TagsMap $tags;
}

class CreateWorkflowResponse {
  public NameString $name;
}

class CreateXMLClassifierRequest {
  public Classification $classification;
  public NameString $name;
  public RowTag $row_tag;
}

class CronExpression {
}

class CsvClassifier {
  public NullableBoolean $allow_single_column;
  public CsvHeaderOption $contains_header;
  public Timestamp $creation_time;
  public CsvColumnDelimiter $delimiter;
  public NullableBoolean $disable_value_trimming;
  public CsvHeader $header;
  public Timestamp $last_updated;
  public NameString $name;
  public CsvQuoteSymbol $quote_symbol;
  public VersionId $version;
}

class CsvColumnDelimiter {
}

class CsvHeader {
}

class CsvHeaderOption {
}

class CsvQuoteSymbol {
}

class CustomPatterns {
}

class DagEdges {
}

class DagNodes {
}

class DataCatalogEncryptionSettings {
  public ConnectionPasswordEncryption $connection_password_encryption;
  public EncryptionAtRest $encryption_at_rest;
}

class DataLakePrincipal {
  public DataLakePrincipalString $data_lake_principal_identifier;
}

class DataLakePrincipalString {
}

class Database {
  public PrincipalPermissionsList $create_table_default_permissions;
  public Timestamp $create_time;
  public DescriptionString $description;
  public URI $location_uri;
  public NameString $name;
  public ParametersMap $parameters;
}

class DatabaseInput {
  public PrincipalPermissionsList $create_table_default_permissions;
  public DescriptionString $description;
  public URI $location_uri;
  public NameString $name;
  public ParametersMap $parameters;
}

class DatabaseList {
}

class DatabaseName {
}

class DeleteBehavior {
}

class DeleteClassifierRequest {
  public NameString $name;
}

class DeleteClassifierResponse {
}

class DeleteConnectionNameList {
}

class DeleteConnectionRequest {
  public CatalogIdString $catalog_id;
  public NameString $connection_name;
}

class DeleteConnectionResponse {
}

class DeleteCrawlerRequest {
  public NameString $name;
}

class DeleteCrawlerResponse {
}

class DeleteDatabaseRequest {
  public CatalogIdString $catalog_id;
  public NameString $name;
}

class DeleteDatabaseResponse {
}

class DeleteDevEndpointRequest {
  public GenericString $endpoint_name;
}

class DeleteDevEndpointResponse {
}

class DeleteJobRequest {
  public NameString $job_name;
}

class DeleteJobResponse {
  public NameString $job_name;
}

class DeleteMLTransformRequest {
  public HashString $transform_id;
}

class DeleteMLTransformResponse {
  public HashString $transform_id;
}

class DeletePartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public ValueStringList $partition_values;
  public NameString $table_name;
}

class DeletePartitionResponse {
}

class DeleteResourcePolicyRequest {
  public HashString $policy_hash_condition;
}

class DeleteResourcePolicyResponse {
}

class DeleteSecurityConfigurationRequest {
  public NameString $name;
}

class DeleteSecurityConfigurationResponse {
}

class DeleteTableRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $name;
}

class DeleteTableResponse {
}

class DeleteTableVersionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $table_name;
  public VersionString $version_id;
}

class DeleteTableVersionResponse {
}

class DeleteTriggerRequest {
  public NameString $name;
}

class DeleteTriggerResponse {
  public NameString $name;
}

class DeleteUserDefinedFunctionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $function_name;
}

class DeleteUserDefinedFunctionResponse {
}

class DeleteWorkflowRequest {
  public NameString $name;
}

class DeleteWorkflowResponse {
  public NameString $name;
}

class DescriptionString {
}

class DescriptionStringRemovable {
}

class DevEndpoint {
  public MapValue $arguments;
  public GenericString $availability_zone;
  public TimestampValue $created_timestamp;
  public GenericString $endpoint_name;
  public GenericString $extra_jars_s_3_path;
  public GenericString $extra_python_libs_s_3_path;
  public GenericString $failure_reason;
  public GlueVersionString $glue_version;
  public TimestampValue $last_modified_timestamp;
  public GenericString $last_update_status;
  public IntegerValue $number_of_nodes;
  public NullableInteger $number_of_workers;
  public GenericString $private_address;
  public GenericString $public_address;
  public GenericString $public_key;
  public PublicKeysList $public_keys;
  public RoleArn $role_arn;
  public NameString $security_configuration;
  public StringList $security_group_ids;
  public GenericString $status;
  public GenericString $subnet_id;
  public GenericString $vpc_id;
  public WorkerType $worker_type;
  public GenericString $yarn_endpoint_address;
  public IntegerValue $zeppelin_remote_spark_interpreter_port;
}

class DevEndpointCustomLibraries {
  public GenericString $extra_jars_s_3_path;
  public GenericString $extra_python_libs_s_3_path;
}

class DevEndpointList {
}

class DevEndpointNameList {
}

class DevEndpointNames {
}

class DynamoDBTarget {
  public Path $path;
}

class DynamoDBTargetList {
}

class Edge {
  public NameString $destination_id;
  public NameString $source_id;
}

class EdgeList {
}

class EncryptionAtRest {
  public CatalogEncryptionMode $catalog_encryption_mode;
  public NameString $sse_aws_kms_key_id;
}

class EncryptionConfiguration {
  public CloudWatchEncryption $cloud_watch_encryption;
  public JobBookmarksEncryption $job_bookmarks_encryption;
  public S3EncryptionList $s_3_encryption;
}

class EntityNotFoundException {
  public MessageString $message;
}

class ErrorByName {
}

class ErrorDetail {
  public NameString $error_code;
  public DescriptionString $error_message;
}

class ErrorString {
}

class EvaluationMetrics {
  public FindMatchesMetrics $find_matches_metrics;
  public TransformType $transform_type;
}

class ExecutionProperty {
  public MaxConcurrentRuns $max_concurrent_runs;
}

class ExecutionTime {
}

class ExistCondition {
}

class ExportLabelsTaskRunProperties {
  public UriString $output_s_3_path;
}

class FieldType {
}

class FilterString {
}

class FindMatchesMetrics {
  public GenericBoundedDouble $area_under_pr_curve;
  public ConfusionMatrix $confusion_matrix;
  public GenericBoundedDouble $f_1;
  public GenericBoundedDouble $precision;
  public GenericBoundedDouble $recall;
}

class FindMatchesParameters {
  public GenericBoundedDouble $accuracy_cost_tradeoff;
  public NullableBoolean $enforce_provided_labels;
  public GenericBoundedDouble $precision_recall_tradeoff;
  public ColumnNameString $primary_key_column_name;
}

class FindMatchesTaskRunProperties {
  public HashString $job_id;
  public NameString $job_name;
  public HashString $job_run_id;
}

class FormatString {
}

class GenericBoundedDouble {
}

class GenericMap {
}

class GenericString {
}

class GetCatalogImportStatusRequest {
  public CatalogIdString $catalog_id;
}

class GetCatalogImportStatusResponse {
  public CatalogImportStatus $import_status;
}

class GetClassifierRequest {
  public NameString $name;
}

class GetClassifierResponse {
  public Classifier $classifier;
}

class GetClassifiersRequest {
  public PageSize $max_results;
  public Token $next_token;
}

class GetClassifiersResponse {
  public ClassifierList $classifiers;
  public Token $next_token;
}

class GetConnectionRequest {
  public CatalogIdString $catalog_id;
  public boolean $hide_password;
  public NameString $name;
}

class GetConnectionResponse {
  public Connection $connection;
}

class GetConnectionsFilter {
  public ConnectionType $connection_type;
  public MatchCriteria $match_criteria;
}

class GetConnectionsRequest {
  public CatalogIdString $catalog_id;
  public GetConnectionsFilter $filter;
  public boolean $hide_password;
  public PageSize $max_results;
  public Token $next_token;
}

class GetConnectionsResponse {
  public ConnectionList $connection_list;
  public Token $next_token;
}

class GetCrawlerMetricsRequest {
  public CrawlerNameList $crawler_name_list;
  public PageSize $max_results;
  public Token $next_token;
}

class GetCrawlerMetricsResponse {
  public CrawlerMetricsList $crawler_metrics_list;
  public Token $next_token;
}

class GetCrawlerRequest {
  public NameString $name;
}

class GetCrawlerResponse {
  public Crawler $crawler;
}

class GetCrawlersRequest {
  public PageSize $max_results;
  public Token $next_token;
}

class GetCrawlersResponse {
  public CrawlerList $crawlers;
  public Token $next_token;
}

class GetDataCatalogEncryptionSettingsRequest {
  public CatalogIdString $catalog_id;
}

class GetDataCatalogEncryptionSettingsResponse {
  public DataCatalogEncryptionSettings $data_catalog_encryption_settings;
}

class GetDatabaseRequest {
  public CatalogIdString $catalog_id;
  public NameString $name;
}

class GetDatabaseResponse {
  public Database $database;
}

class GetDatabasesRequest {
  public CatalogIdString $catalog_id;
  public PageSize $max_results;
  public Token $next_token;
}

class GetDatabasesResponse {
  public DatabaseList $database_list;
  public Token $next_token;
}

class GetDataflowGraphRequest {
  public PythonScript $python_script;
}

class GetDataflowGraphResponse {
  public DagEdges $dag_edges;
  public DagNodes $dag_nodes;
}

class GetDevEndpointRequest {
  public GenericString $endpoint_name;
}

class GetDevEndpointResponse {
  public DevEndpoint $dev_endpoint;
}

class GetDevEndpointsRequest {
  public PageSize $max_results;
  public GenericString $next_token;
}

class GetDevEndpointsResponse {
  public DevEndpointList $dev_endpoints;
  public GenericString $next_token;
}

class GetJobBookmarkRequest {
  public JobName $job_name;
  public RunId $run_id;
}

class GetJobBookmarkResponse {
  public JobBookmarkEntry $job_bookmark_entry;
}

class GetJobRequest {
  public NameString $job_name;
}

class GetJobResponse {
  public Job $job;
}

class GetJobRunRequest {
  public NameString $job_name;
  public BooleanValue $predecessors_included;
  public IdString $run_id;
}

class GetJobRunResponse {
  public JobRun $job_run;
}

class GetJobRunsRequest {
  public NameString $job_name;
  public PageSize $max_results;
  public GenericString $next_token;
}

class GetJobRunsResponse {
  public JobRunList $job_runs;
  public GenericString $next_token;
}

class GetJobsRequest {
  public PageSize $max_results;
  public GenericString $next_token;
}

class GetJobsResponse {
  public JobList $jobs;
  public GenericString $next_token;
}

class GetMLTaskRunRequest {
  public HashString $task_run_id;
  public HashString $transform_id;
}

class GetMLTaskRunResponse {
  public Timestamp $completed_on;
  public GenericString $error_string;
  public ExecutionTime $execution_time;
  public Timestamp $last_modified_on;
  public GenericString $log_group_name;
  public TaskRunProperties $properties;
  public Timestamp $started_on;
  public TaskStatusType $status;
  public HashString $task_run_id;
  public HashString $transform_id;
}

class GetMLTaskRunsRequest {
  public TaskRunFilterCriteria $filter;
  public PageSize $max_results;
  public PaginationToken $next_token;
  public TaskRunSortCriteria $sort;
  public HashString $transform_id;
}

class GetMLTaskRunsResponse {
  public PaginationToken $next_token;
  public TaskRunList $task_runs;
}

class GetMLTransformRequest {
  public HashString $transform_id;
}

class GetMLTransformResponse {
  public Timestamp $created_on;
  public DescriptionString $description;
  public EvaluationMetrics $evaluation_metrics;
  public GlueVersionString $glue_version;
  public GlueTables $input_record_tables;
  public LabelCount $label_count;
  public Timestamp $last_modified_on;
  public NullableDouble $max_capacity;
  public NullableInteger $max_retries;
  public NameString $name;
  public NullableInteger $number_of_workers;
  public TransformParameters $parameters;
  public RoleString $role;
  public TransformSchema $schema;
  public TransformStatusType $status;
  public Timeout $timeout;
  public HashString $transform_id;
  public WorkerType $worker_type;
}

class GetMLTransformsRequest {
  public TransformFilterCriteria $filter;
  public PageSize $max_results;
  public PaginationToken $next_token;
  public TransformSortCriteria $sort;
}

class GetMLTransformsResponse {
  public PaginationToken $next_token;
  public TransformList $transforms;
}

class GetMappingRequest {
  public Location $location;
  public CatalogEntries $sinks;
  public CatalogEntry $source;
}

class GetMappingResponse {
  public MappingList $mapping;
}

class GetPartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public ValueStringList $partition_values;
  public NameString $table_name;
}

class GetPartitionResponse {
  public Partition $partition;
}

class GetPartitionsRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public PredicateString $expression;
  public PageSize $max_results;
  public Token $next_token;
  public Segment $segment;
  public NameString $table_name;
}

class GetPartitionsResponse {
  public Token $next_token;
  public PartitionList $partitions;
}

class GetPlanRequest {
  public Language $language;
  public Location $location;
  public MappingList $mapping;
  public CatalogEntries $sinks;
  public CatalogEntry $source;
}

class GetPlanResponse {
  public PythonScript $python_script;
  public ScalaCode $scala_code;
}

class GetResourcePolicyRequest {
}

class GetResourcePolicyResponse {
  public Timestamp $create_time;
  public HashString $policy_hash;
  public PolicyJsonString $policy_in_json;
  public Timestamp $update_time;
}

class GetSecurityConfigurationRequest {
  public NameString $name;
}

class GetSecurityConfigurationResponse {
  public SecurityConfiguration $security_configuration;
}

class GetSecurityConfigurationsRequest {
  public PageSize $max_results;
  public GenericString $next_token;
}

class GetSecurityConfigurationsResponse {
  public GenericString $next_token;
  public SecurityConfigurationList $security_configurations;
}

class GetTableRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $name;
}

class GetTableResponse {
  public Table $table;
}

class GetTableVersionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $table_name;
  public VersionString $version_id;
}

class GetTableVersionResponse {
  public TableVersion $table_version;
}

class GetTableVersionsList {
}

class GetTableVersionsRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public PageSize $max_results;
  public Token $next_token;
  public NameString $table_name;
}

class GetTableVersionsResponse {
  public Token $next_token;
  public GetTableVersionsList $table_versions;
}

class GetTablesRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public FilterString $expression;
  public PageSize $max_results;
  public Token $next_token;
}

class GetTablesResponse {
  public Token $next_token;
  public TableList $table_list;
}

class GetTagsRequest {
  public GlueResourceArn $resource_arn;
}

class GetTagsResponse {
  public TagsMap $tags;
}

class GetTriggerRequest {
  public NameString $name;
}

class GetTriggerResponse {
  public Trigger $trigger;
}

class GetTriggersRequest {
  public NameString $dependent_job_name;
  public PageSize $max_results;
  public GenericString $next_token;
}

class GetTriggersResponse {
  public GenericString $next_token;
  public TriggerList $triggers;
}

class GetUserDefinedFunctionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $function_name;
}

class GetUserDefinedFunctionResponse {
  public UserDefinedFunction $user_defined_function;
}

class GetUserDefinedFunctionsRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public PageSize $max_results;
  public Token $next_token;
  public NameString $pattern;
}

class GetUserDefinedFunctionsResponse {
  public Token $next_token;
  public UserDefinedFunctionList $user_defined_functions;
}

class GetWorkflowRequest {
  public NullableBoolean $include_graph;
  public NameString $name;
}

class GetWorkflowResponse {
  public Workflow $workflow;
}

class GetWorkflowRunPropertiesRequest {
  public NameString $name;
  public IdString $run_id;
}

class GetWorkflowRunPropertiesResponse {
  public WorkflowRunProperties $run_properties;
}

class GetWorkflowRunRequest {
  public NullableBoolean $include_graph;
  public NameString $name;
  public IdString $run_id;
}

class GetWorkflowRunResponse {
  public WorkflowRun $run;
}

class GetWorkflowRunsRequest {
  public NullableBoolean $include_graph;
  public PageSize $max_results;
  public NameString $name;
  public GenericString $next_token;
}

class GetWorkflowRunsResponse {
  public GenericString $next_token;
  public WorkflowRuns $runs;
}

class GlueEncryptionException {
  public MessageString $message;
}

class GlueResourceArn {
}

class GlueTable {
  public NameString $catalog_id;
  public NameString $connection_name;
  public NameString $database_name;
  public NameString $table_name;
}

class GlueTables {
}

class GlueVersionString {
}

class GrokClassifier {
  public Classification $classification;
  public Timestamp $creation_time;
  public CustomPatterns $custom_patterns;
  public GrokPattern $grok_pattern;
  public Timestamp $last_updated;
  public NameString $name;
  public VersionId $version;
}

class GrokPattern {
}

class HashString {
}

class IdString {
}

class IdempotentParameterMismatchException {
  public MessageString $message;
}

class ImportCatalogToGlueRequest {
  public CatalogIdString $catalog_id;
}

class ImportCatalogToGlueResponse {
}

class ImportLabelsTaskRunProperties {
  public UriString $input_s_3_path;
  public ReplaceBoolean $replace;
}

class Integer {
}

class IntegerFlag {
}

class IntegerValue {
}

class InternalServiceException {
  public MessageString $message;
}

class InvalidInputException {
  public MessageString $message;
}

class JdbcTarget {
  public ConnectionName $connection_name;
  public PathList $exclusions;
  public Path $path;
}

class JdbcTargetList {
}

class Job {
  public IntegerValue $allocated_capacity;
  public JobCommand $command;
  public ConnectionsList $connections;
  public TimestampValue $created_on;
  public GenericMap $default_arguments;
  public DescriptionString $description;
  public ExecutionProperty $execution_property;
  public GlueVersionString $glue_version;
  public TimestampValue $last_modified_on;
  public UriString $log_uri;
  public NullableDouble $max_capacity;
  public MaxRetries $max_retries;
  public NameString $name;
  public GenericMap $non_overridable_arguments;
  public NotificationProperty $notification_property;
  public NullableInteger $number_of_workers;
  public RoleString $role;
  public NameString $security_configuration;
  public Timeout $timeout;
  public WorkerType $worker_type;
}

class JobBookmarkEntry {
  public IntegerValue $attempt;
  public JsonValue $job_bookmark;
  public JobName $job_name;
  public RunId $previous_run_id;
  public IntegerValue $run;
  public RunId $run_id;
  public IntegerValue $version;
}

class JobBookmarksEncryption {
  public JobBookmarksEncryptionMode $job_bookmarks_encryption_mode;
  public KmsKeyArn $kms_key_arn;
}

class JobBookmarksEncryptionMode {
}

class JobCommand {
  public GenericString $name;
  public PythonVersionString $python_version;
  public ScriptLocationString $script_location;
}

class JobList {
}

class JobName {
}

class JobNameList {
}

class JobNodeDetails {
  public JobRunList $job_runs;
}

class JobRun {
  public IntegerValue $allocated_capacity;
  public GenericMap $arguments;
  public AttemptCount $attempt;
  public TimestampValue $completed_on;
  public ErrorString $error_message;
  public ExecutionTime $execution_time;
  public GlueVersionString $glue_version;
  public IdString $id;
  public NameString $job_name;
  public JobRunState $job_run_state;
  public TimestampValue $last_modified_on;
  public GenericString $log_group_name;
  public NullableDouble $max_capacity;
  public NotificationProperty $notification_property;
  public NullableInteger $number_of_workers;
  public PredecessorList $predecessor_runs;
  public IdString $previous_run_id;
  public NameString $security_configuration;
  public TimestampValue $started_on;
  public Timeout $timeout;
  public NameString $trigger_name;
  public WorkerType $worker_type;
}

class JobRunList {
}

class JobRunState {
}

class JobUpdate {
  public IntegerValue $allocated_capacity;
  public JobCommand $command;
  public ConnectionsList $connections;
  public GenericMap $default_arguments;
  public DescriptionString $description;
  public ExecutionProperty $execution_property;
  public GlueVersionString $glue_version;
  public UriString $log_uri;
  public NullableDouble $max_capacity;
  public MaxRetries $max_retries;
  public GenericMap $non_overridable_arguments;
  public NotificationProperty $notification_property;
  public NullableInteger $number_of_workers;
  public RoleString $role;
  public NameString $security_configuration;
  public Timeout $timeout;
  public WorkerType $worker_type;
}

class JsonClassifier {
  public Timestamp $creation_time;
  public JsonPath $json_path;
  public Timestamp $last_updated;
  public NameString $name;
  public VersionId $version;
}

class JsonPath {
}

class JsonValue {
}

class KeyString {
}

class KmsKeyArn {
}

class LabelCount {
}

class LabelingSetGenerationTaskRunProperties {
  public UriString $output_s_3_path;
}

class Language {
}

class LastCrawlInfo {
  public DescriptionString $error_message;
  public LogGroup $log_group;
  public LogStream $log_stream;
  public MessagePrefix $message_prefix;
  public Timestamp $start_time;
  public LastCrawlStatus $status;
}

class LastCrawlStatus {
}

class ListCrawlersRequest {
  public PageSize $max_results;
  public Token $next_token;
  public TagsMap $tags;
}

class ListCrawlersResponse {
  public CrawlerNameList $crawler_names;
  public Token $next_token;
}

class ListDevEndpointsRequest {
  public PageSize $max_results;
  public GenericString $next_token;
  public TagsMap $tags;
}

class ListDevEndpointsResponse {
  public DevEndpointNameList $dev_endpoint_names;
  public GenericString $next_token;
}

class ListJobsRequest {
  public PageSize $max_results;
  public GenericString $next_token;
  public TagsMap $tags;
}

class ListJobsResponse {
  public JobNameList $job_names;
  public GenericString $next_token;
}

class ListMLTransformsRequest {
  public TransformFilterCriteria $filter;
  public PageSize $max_results;
  public PaginationToken $next_token;
  public TransformSortCriteria $sort;
  public TagsMap $tags;
}

class ListMLTransformsResponse {
  public PaginationToken $next_token;
  public TransformIdList $transform_ids;
}

class ListTriggersRequest {
  public NameString $dependent_job_name;
  public PageSize $max_results;
  public GenericString $next_token;
  public TagsMap $tags;
}

class ListTriggersResponse {
  public GenericString $next_token;
  public TriggerNameList $trigger_names;
}

class ListWorkflowsRequest {
  public PageSize $max_results;
  public GenericString $next_token;
}

class ListWorkflowsResponse {
  public GenericString $next_token;
  public WorkflowNames $workflows;
}

class Location {
  public CodeGenNodeArgs $dynamo_db;
  public CodeGenNodeArgs $jdbc;
  public CodeGenNodeArgs $s_3;
}

class LocationMap {
}

class LocationString {
}

class LogGroup {
}

class LogStream {
}

class Logical {
}

class LogicalOperator {
}

class MLTransform {
  public Timestamp $created_on;
  public DescriptionString $description;
  public EvaluationMetrics $evaluation_metrics;
  public GlueVersionString $glue_version;
  public GlueTables $input_record_tables;
  public LabelCount $label_count;
  public Timestamp $last_modified_on;
  public NullableDouble $max_capacity;
  public NullableInteger $max_retries;
  public NameString $name;
  public NullableInteger $number_of_workers;
  public TransformParameters $parameters;
  public RoleString $role;
  public TransformSchema $schema;
  public TransformStatusType $status;
  public Timeout $timeout;
  public HashString $transform_id;
  public WorkerType $worker_type;
}

class MLTransformNotReadyException {
  public MessageString $message;
}

class MapValue {
}

class MappingEntry {
  public SchemaPathString $source_path;
  public TableName $source_table;
  public FieldType $source_type;
  public SchemaPathString $target_path;
  public TableName $target_table;
  public FieldType $target_type;
}

class MappingList {
}

class MatchCriteria {
}

class MaxConcurrentRuns {
}

class MaxRetries {
}

class MessagePrefix {
}

class MessageString {
}

class MillisecondsCount {
}

class NameString {
}

class NameStringList {
}

class NoScheduleException {
  public MessageString $message;
}

class Node {
  public CrawlerNodeDetails $crawler_details;
  public JobNodeDetails $job_details;
  public NameString $name;
  public TriggerNodeDetails $trigger_details;
  public NodeType $type;
  public NameString $unique_id;
}

class NodeList {
}

class NodeType {
}

class NonNegativeDouble {
}

class NonNegativeInteger {
}

class NotificationProperty {
  public NotifyDelayAfter $notify_delay_after;
}

class NotifyDelayAfter {
}

class NullableBoolean {
}

class NullableDouble {
}

class NullableInteger {
}

class OperationTimeoutException {
  public MessageString $message;
}

class OrchestrationStringList {
}

class Order {
  public NameString $column;
  public IntegerFlag $sort_order;
}

class OrderList {
}

class PageSize {
}

class PaginationToken {
}

class ParametersMap {
}

class ParametersMapValue {
}

class Partition {
  public Timestamp $creation_time;
  public NameString $database_name;
  public Timestamp $last_access_time;
  public Timestamp $last_analyzed_time;
  public ParametersMap $parameters;
  public StorageDescriptor $storage_descriptor;
  public NameString $table_name;
  public ValueStringList $values;
}

class PartitionError {
  public ErrorDetail $error_detail;
  public ValueStringList $partition_values;
}

class PartitionErrors {
}

class PartitionInput {
  public Timestamp $last_access_time;
  public Timestamp $last_analyzed_time;
  public ParametersMap $parameters;
  public StorageDescriptor $storage_descriptor;
  public ValueStringList $values;
}

class PartitionInputList {
}

class PartitionList {
}

class PartitionValueList {
  public ValueStringList $values;
}

class Path {
}

class PathList {
}

class Permission {
}

class PermissionList {
}

class PhysicalConnectionRequirements {
  public NameString $availability_zone;
  public SecurityGroupIdList $security_group_id_list;
  public NameString $subnet_id;
}

class PolicyJsonString {
}

class Predecessor {
  public NameString $job_name;
  public IdString $run_id;
}

class PredecessorList {
}

class Predicate {
  public ConditionList $conditions;
  public Logical $logical;
}

class PredicateString {
}

class PrincipalPermissions {
  public PermissionList $permissions;
  public DataLakePrincipal $principal;
}

class PrincipalPermissionsList {
}

class PrincipalType {
}

class PropertyPredicate {
  public Comparator $comparator;
  public ValueString $key;
  public ValueString $value;
}

class PublicKeysList {
}

class PutDataCatalogEncryptionSettingsRequest {
  public CatalogIdString $catalog_id;
  public DataCatalogEncryptionSettings $data_catalog_encryption_settings;
}

class PutDataCatalogEncryptionSettingsResponse {
}

class PutResourcePolicyRequest {
  public ExistCondition $policy_exists_condition;
  public HashString $policy_hash_condition;
  public PolicyJsonString $policy_in_json;
}

class PutResourcePolicyResponse {
  public HashString $policy_hash;
}

class PutWorkflowRunPropertiesRequest {
  public NameString $name;
  public IdString $run_id;
  public WorkflowRunProperties $run_properties;
}

class PutWorkflowRunPropertiesResponse {
}

class PythonScript {
}

class PythonVersionString {
}

class RecordsCount {
}

class ReplaceBoolean {
}

class ResetJobBookmarkRequest {
  public JobName $job_name;
  public RunId $run_id;
}

class ResetJobBookmarkResponse {
  public JobBookmarkEntry $job_bookmark_entry;
}

class ResourceNumberLimitExceededException {
  public MessageString $message;
}

class ResourceType {
}

class ResourceUri {
  public ResourceType $resource_type;
  public URI $uri;
}

class ResourceUriList {
}

class Role {
}

class RoleArn {
}

class RoleString {
}

class RowTag {
}

class RunId {
}

class S3Encryption {
  public KmsKeyArn $kms_key_arn;
  public S3EncryptionMode $s_3_encryption_mode;
}

class S3EncryptionList {
}

class S3EncryptionMode {
}

class S3Target {
  public PathList $exclusions;
  public Path $path;
}

class S3TargetList {
}

class ScalaCode {
}

class Schedule {
  public CronExpression $schedule_expression;
  public ScheduleState $state;
}

class ScheduleState {
}

class SchedulerNotRunningException {
  public MessageString $message;
}

class SchedulerRunningException {
  public MessageString $message;
}

class SchedulerTransitioningException {
  public MessageString $message;
}

class SchemaChangePolicy {
  public DeleteBehavior $delete_behavior;
  public UpdateBehavior $update_behavior;
}

class SchemaColumn {
  public ColumnTypeString $data_type;
  public ColumnNameString $name;
}

class SchemaPathString {
}

class ScriptLocationString {
}

class SearchPropertyPredicates {
}

class SearchTablesRequest {
  public CatalogIdString $catalog_id;
  public SearchPropertyPredicates $filters;
  public PageSize $max_results;
  public Token $next_token;
  public ValueString $search_text;
  public SortCriteria $sort_criteria;
}

class SearchTablesResponse {
  public Token $next_token;
  public TableList $table_list;
}

class SecurityConfiguration {
  public TimestampValue $created_time_stamp;
  public EncryptionConfiguration $encryption_configuration;
  public NameString $name;
}

class SecurityConfigurationList {
}

class SecurityGroupIdList {
}

class Segment {
  public NonNegativeInteger $segment_number;
  public TotalSegmentsInteger $total_segments;
}

class SerDeInfo {
  public NameString $name;
  public ParametersMap $parameters;
  public NameString $serialization_library;
}

class SkewedInfo {
  public NameStringList $skewed_column_names;
  public LocationMap $skewed_column_value_location_maps;
  public ColumnValueStringList $skewed_column_values;
}

class Sort {
}

class SortCriteria {
}

class SortCriterion {
  public ValueString $field_name;
  public Sort $sort;
}

class SortDirectionType {
}

class StartCrawlerRequest {
  public NameString $name;
}

class StartCrawlerResponse {
}

class StartCrawlerScheduleRequest {
  public NameString $crawler_name;
}

class StartCrawlerScheduleResponse {
}

class StartExportLabelsTaskRunRequest {
  public UriString $output_s_3_path;
  public HashString $transform_id;
}

class StartExportLabelsTaskRunResponse {
  public HashString $task_run_id;
}

class StartImportLabelsTaskRunRequest {
  public UriString $input_s_3_path;
  public ReplaceBoolean $replace_all_labels;
  public HashString $transform_id;
}

class StartImportLabelsTaskRunResponse {
  public HashString $task_run_id;
}

class StartJobRunRequest {
  public IntegerValue $allocated_capacity;
  public GenericMap $arguments;
  public NameString $job_name;
  public IdString $job_run_id;
  public NullableDouble $max_capacity;
  public NotificationProperty $notification_property;
  public NullableInteger $number_of_workers;
  public NameString $security_configuration;
  public Timeout $timeout;
  public WorkerType $worker_type;
}

class StartJobRunResponse {
  public IdString $job_run_id;
}

class StartMLEvaluationTaskRunRequest {
  public HashString $transform_id;
}

class StartMLEvaluationTaskRunResponse {
  public HashString $task_run_id;
}

class StartMLLabelingSetGenerationTaskRunRequest {
  public UriString $output_s_3_path;
  public HashString $transform_id;
}

class StartMLLabelingSetGenerationTaskRunResponse {
  public HashString $task_run_id;
}

class StartTriggerRequest {
  public NameString $name;
}

class StartTriggerResponse {
  public NameString $name;
}

class StartWorkflowRunRequest {
  public NameString $name;
}

class StartWorkflowRunResponse {
  public IdString $run_id;
}

class StopCrawlerRequest {
  public NameString $name;
}

class StopCrawlerResponse {
}

class StopCrawlerScheduleRequest {
  public NameString $crawler_name;
}

class StopCrawlerScheduleResponse {
}

class StopTriggerRequest {
  public NameString $name;
}

class StopTriggerResponse {
  public NameString $name;
}

class StorageDescriptor {
  public NameStringList $bucket_columns;
  public ColumnList $columns;
  public boolean $compressed;
  public FormatString $input_format;
  public LocationString $location;
  public int $number_of_buckets;
  public FormatString $output_format;
  public ParametersMap $parameters;
  public SerDeInfo $serde_info;
  public SkewedInfo $skewed_info;
  public OrderList $sort_columns;
  public boolean $stored_as_sub_directories;
}

class StringList {
}

class Table {
  public Timestamp $create_time;
  public NameString $created_by;
  public NameString $database_name;
  public DescriptionString $description;
  public boolean $is_registered_with_lake_formation;
  public Timestamp $last_access_time;
  public Timestamp $last_analyzed_time;
  public NameString $name;
  public NameString $owner;
  public ParametersMap $parameters;
  public ColumnList $partition_keys;
  public NonNegativeInteger $retention;
  public StorageDescriptor $storage_descriptor;
  public TableTypeString $table_type;
  public Timestamp $update_time;
  public ViewTextString $view_expanded_text;
  public ViewTextString $view_original_text;
}

class TableError {
  public ErrorDetail $error_detail;
  public NameString $table_name;
}

class TableErrors {
}

class TableInput {
  public DescriptionString $description;
  public Timestamp $last_access_time;
  public Timestamp $last_analyzed_time;
  public NameString $name;
  public NameString $owner;
  public ParametersMap $parameters;
  public ColumnList $partition_keys;
  public NonNegativeInteger $retention;
  public StorageDescriptor $storage_descriptor;
  public TableTypeString $table_type;
  public ViewTextString $view_expanded_text;
  public ViewTextString $view_original_text;
}

class TableList {
}

class TableName {
}

class TablePrefix {
}

class TableTypeString {
}

class TableVersion {
  public Table $table;
  public VersionString $version_id;
}

class TableVersionError {
  public ErrorDetail $error_detail;
  public NameString $table_name;
  public VersionString $version_id;
}

class TableVersionErrors {
}

class TagKey {
}

class TagKeysList {
}

class TagResourceRequest {
  public GlueResourceArn $resource_arn;
  public TagsMap $tags_to_add;
}

class TagResourceResponse {
}

class TagValue {
}

class TagsMap {
}

class TaskRun {
  public Timestamp $completed_on;
  public GenericString $error_string;
  public ExecutionTime $execution_time;
  public Timestamp $last_modified_on;
  public GenericString $log_group_name;
  public TaskRunProperties $properties;
  public Timestamp $started_on;
  public TaskStatusType $status;
  public HashString $task_run_id;
  public HashString $transform_id;
}

class TaskRunFilterCriteria {
  public Timestamp $started_after;
  public Timestamp $started_before;
  public TaskStatusType $status;
  public TaskType $task_run_type;
}

class TaskRunList {
}

class TaskRunProperties {
  public ExportLabelsTaskRunProperties $export_labels_task_run_properties;
  public FindMatchesTaskRunProperties $find_matches_task_run_properties;
  public ImportLabelsTaskRunProperties $import_labels_task_run_properties;
  public LabelingSetGenerationTaskRunProperties $labeling_set_generation_task_run_properties;
  public TaskType $task_type;
}

class TaskRunSortColumnType {
}

class TaskRunSortCriteria {
  public TaskRunSortColumnType $column;
  public SortDirectionType $sort_direction;
}

class TaskStatusType {
}

class TaskType {
}

class Timeout {
}

class Timestamp {
}

class TimestampValue {
}

class Token {
}

class TotalSegmentsInteger {
}

class TransformFilterCriteria {
  public Timestamp $created_after;
  public Timestamp $created_before;
  public GlueVersionString $glue_version;
  public Timestamp $last_modified_after;
  public Timestamp $last_modified_before;
  public NameString $name;
  public TransformSchema $schema;
  public TransformStatusType $status;
  public TransformType $transform_type;
}

class TransformIdList {
}

class TransformList {
}

class TransformParameters {
  public FindMatchesParameters $find_matches_parameters;
  public TransformType $transform_type;
}

class TransformSchema {
}

class TransformSortColumnType {
}

class TransformSortCriteria {
  public TransformSortColumnType $column;
  public SortDirectionType $sort_direction;
}

class TransformStatusType {
}

class TransformType {
}

class Trigger {
  public ActionList $actions;
  public DescriptionString $description;
  public IdString $id;
  public NameString $name;
  public Predicate $predicate;
  public GenericString $schedule;
  public TriggerState $state;
  public TriggerType $type;
  public NameString $workflow_name;
}

class TriggerList {
}

class TriggerNameList {
}

class TriggerNodeDetails {
  public Trigger $trigger;
}

class TriggerState {
}

class TriggerType {
}

class TriggerUpdate {
  public ActionList $actions;
  public DescriptionString $description;
  public NameString $name;
  public Predicate $predicate;
  public GenericString $schedule;
}

class URI {
}

class UntagResourceRequest {
  public GlueResourceArn $resource_arn;
  public TagKeysList $tags_to_remove;
}

class UntagResourceResponse {
}

class UpdateBehavior {
}

class UpdateClassifierRequest {
  public UpdateCsvClassifierRequest $csv_classifier;
  public UpdateGrokClassifierRequest $grok_classifier;
  public UpdateJsonClassifierRequest $json_classifier;
  public UpdateXMLClassifierRequest $xml_classifier;
}

class UpdateClassifierResponse {
}

class UpdateConnectionRequest {
  public CatalogIdString $catalog_id;
  public ConnectionInput $connection_input;
  public NameString $name;
}

class UpdateConnectionResponse {
}

class UpdateCrawlerRequest {
  public ClassifierNameList $classifiers;
  public CrawlerConfiguration $configuration;
  public CrawlerSecurityConfiguration $crawler_security_configuration;
  public DatabaseName $database_name;
  public DescriptionStringRemovable $description;
  public NameString $name;
  public Role $role;
  public CronExpression $schedule;
  public SchemaChangePolicy $schema_change_policy;
  public TablePrefix $table_prefix;
  public CrawlerTargets $targets;
}

class UpdateCrawlerResponse {
}

class UpdateCrawlerScheduleRequest {
  public NameString $crawler_name;
  public CronExpression $schedule;
}

class UpdateCrawlerScheduleResponse {
}

class UpdateCsvClassifierRequest {
  public NullableBoolean $allow_single_column;
  public CsvHeaderOption $contains_header;
  public CsvColumnDelimiter $delimiter;
  public NullableBoolean $disable_value_trimming;
  public CsvHeader $header;
  public NameString $name;
  public CsvQuoteSymbol $quote_symbol;
}

class UpdateDatabaseRequest {
  public CatalogIdString $catalog_id;
  public DatabaseInput $database_input;
  public NameString $name;
}

class UpdateDatabaseResponse {
}

class UpdateDevEndpointRequest {
  public MapValue $add_arguments;
  public PublicKeysList $add_public_keys;
  public DevEndpointCustomLibraries $custom_libraries;
  public StringList $delete_arguments;
  public PublicKeysList $delete_public_keys;
  public GenericString $endpoint_name;
  public GenericString $public_key;
  public BooleanValue $update_etl_libraries;
}

class UpdateDevEndpointResponse {
}

class UpdateGrokClassifierRequest {
  public Classification $classification;
  public CustomPatterns $custom_patterns;
  public GrokPattern $grok_pattern;
  public NameString $name;
}

class UpdateJobRequest {
  public NameString $job_name;
  public JobUpdate $job_update;
}

class UpdateJobResponse {
  public NameString $job_name;
}

class UpdateJsonClassifierRequest {
  public JsonPath $json_path;
  public NameString $name;
}

class UpdateMLTransformRequest {
  public DescriptionString $description;
  public GlueVersionString $glue_version;
  public NullableDouble $max_capacity;
  public NullableInteger $max_retries;
  public NameString $name;
  public NullableInteger $number_of_workers;
  public TransformParameters $parameters;
  public RoleString $role;
  public Timeout $timeout;
  public HashString $transform_id;
  public WorkerType $worker_type;
}

class UpdateMLTransformResponse {
  public HashString $transform_id;
}

class UpdatePartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public PartitionInput $partition_input;
  public BoundedPartitionValueList $partition_value_list;
  public NameString $table_name;
}

class UpdatePartitionResponse {
}

class UpdateTableRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public BooleanNullable $skip_archive;
  public TableInput $table_input;
}

class UpdateTableResponse {
}

class UpdateTriggerRequest {
  public NameString $name;
  public TriggerUpdate $trigger_update;
}

class UpdateTriggerResponse {
  public Trigger $trigger;
}

class UpdateUserDefinedFunctionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public UserDefinedFunctionInput $function_input;
  public NameString $function_name;
}

class UpdateUserDefinedFunctionResponse {
}

class UpdateWorkflowRequest {
  public WorkflowRunProperties $default_run_properties;
  public GenericString $description;
  public NameString $name;
}

class UpdateWorkflowResponse {
  public NameString $name;
}

class UpdateXMLClassifierRequest {
  public Classification $classification;
  public NameString $name;
  public RowTag $row_tag;
}

class UriString {
}

class UserDefinedFunction {
  public NameString $class_name;
  public Timestamp $create_time;
  public NameString $function_name;
  public NameString $owner_name;
  public PrincipalType $owner_type;
  public ResourceUriList $resource_uris;
}

class UserDefinedFunctionInput {
  public NameString $class_name;
  public NameString $function_name;
  public NameString $owner_name;
  public PrincipalType $owner_type;
  public ResourceUriList $resource_uris;
}

class UserDefinedFunctionList {
}

class ValidationException {
  public MessageString $message;
}

class ValueString {
}

class ValueStringList {
}

class VersionId {
}

class VersionMismatchException {
  public MessageString $message;
}

class VersionString {
}

class ViewTextString {
}

class WorkerType {
}

class Workflow {
  public TimestampValue $created_on;
  public WorkflowRunProperties $default_run_properties;
  public GenericString $description;
  public WorkflowGraph $graph;
  public TimestampValue $last_modified_on;
  public WorkflowRun $last_run;
  public NameString $name;
}

class WorkflowGraph {
  public EdgeList $edges;
  public NodeList $nodes;
}

class WorkflowNames {
}

class WorkflowRun {
  public TimestampValue $completed_on;
  public WorkflowGraph $graph;
  public NameString $name;
  public TimestampValue $started_on;
  public WorkflowRunStatistics $statistics;
  public WorkflowRunStatus $status;
  public IdString $workflow_run_id;
  public WorkflowRunProperties $workflow_run_properties;
}

class WorkflowRunProperties {
}

class WorkflowRunStatistics {
  public IntegerValue $failed_actions;
  public IntegerValue $running_actions;
  public IntegerValue $stopped_actions;
  public IntegerValue $succeeded_actions;
  public IntegerValue $timeout_actions;
  public IntegerValue $total_actions;
}

class WorkflowRunStatus {
}

class WorkflowRuns {
}

class Workflows {
}

class XMLClassifier {
  public Classification $classification;
  public Timestamp $creation_time;
  public Timestamp $last_updated;
  public NameString $name;
  public RowTag $row_tag;
  public VersionId $version;
}

