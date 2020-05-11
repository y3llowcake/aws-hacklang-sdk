<?hh // strict
namespace slack\aws\glue;

interface Glue {
  public function BatchCreatePartition(BatchCreatePartitionRequest): Awaitable<Errors\Result<BatchCreatePartitionResponse>>;
  public function BatchDeleteConnection(BatchDeleteConnectionRequest): Awaitable<Errors\Result<BatchDeleteConnectionResponse>>;
  public function BatchDeletePartition(BatchDeletePartitionRequest): Awaitable<Errors\Result<BatchDeletePartitionResponse>>;
  public function BatchDeleteTable(BatchDeleteTableRequest): Awaitable<Errors\Result<BatchDeleteTableResponse>>;
  public function BatchDeleteTableVersion(BatchDeleteTableVersionRequest): Awaitable<Errors\Result<BatchDeleteTableVersionResponse>>;
  public function BatchGetCrawlers(BatchGetCrawlersRequest): Awaitable<Errors\Result<BatchGetCrawlersResponse>>;
  public function BatchGetDevEndpoints(BatchGetDevEndpointsRequest): Awaitable<Errors\Result<BatchGetDevEndpointsResponse>>;
  public function BatchGetJobs(BatchGetJobsRequest): Awaitable<Errors\Result<BatchGetJobsResponse>>;
  public function BatchGetPartition(BatchGetPartitionRequest): Awaitable<Errors\Result<BatchGetPartitionResponse>>;
  public function BatchGetTriggers(BatchGetTriggersRequest): Awaitable<Errors\Result<BatchGetTriggersResponse>>;
  public function BatchGetWorkflows(BatchGetWorkflowsRequest): Awaitable<Errors\Result<BatchGetWorkflowsResponse>>;
  public function BatchStopJobRun(BatchStopJobRunRequest): Awaitable<Errors\Result<BatchStopJobRunResponse>>;
  public function CancelMLTaskRun(CancelMLTaskRunRequest): Awaitable<Errors\Result<CancelMLTaskRunResponse>>;
  public function CreateClassifier(CreateClassifierRequest): Awaitable<Errors\Result<CreateClassifierResponse>>;
  public function CreateConnection(CreateConnectionRequest): Awaitable<Errors\Result<CreateConnectionResponse>>;
  public function CreateCrawler(CreateCrawlerRequest): Awaitable<Errors\Result<CreateCrawlerResponse>>;
  public function CreateDatabase(CreateDatabaseRequest): Awaitable<Errors\Result<CreateDatabaseResponse>>;
  public function CreateDevEndpoint(CreateDevEndpointRequest): Awaitable<Errors\Result<CreateDevEndpointResponse>>;
  public function CreateJob(CreateJobRequest): Awaitable<Errors\Result<CreateJobResponse>>;
  public function CreateMLTransform(CreateMLTransformRequest): Awaitable<Errors\Result<CreateMLTransformResponse>>;
  public function CreatePartition(CreatePartitionRequest): Awaitable<Errors\Result<CreatePartitionResponse>>;
  public function CreateScript(CreateScriptRequest): Awaitable<Errors\Result<CreateScriptResponse>>;
  public function CreateSecurityConfiguration(CreateSecurityConfigurationRequest): Awaitable<Errors\Result<CreateSecurityConfigurationResponse>>;
  public function CreateTable(CreateTableRequest): Awaitable<Errors\Result<CreateTableResponse>>;
  public function CreateTrigger(CreateTriggerRequest): Awaitable<Errors\Result<CreateTriggerResponse>>;
  public function CreateUserDefinedFunction(CreateUserDefinedFunctionRequest): Awaitable<Errors\Result<CreateUserDefinedFunctionResponse>>;
  public function CreateWorkflow(CreateWorkflowRequest): Awaitable<Errors\Result<CreateWorkflowResponse>>;
  public function DeleteClassifier(DeleteClassifierRequest): Awaitable<Errors\Result<DeleteClassifierResponse>>;
  public function DeleteConnection(DeleteConnectionRequest): Awaitable<Errors\Result<DeleteConnectionResponse>>;
  public function DeleteCrawler(DeleteCrawlerRequest): Awaitable<Errors\Result<DeleteCrawlerResponse>>;
  public function DeleteDatabase(DeleteDatabaseRequest): Awaitable<Errors\Result<DeleteDatabaseResponse>>;
  public function DeleteDevEndpoint(DeleteDevEndpointRequest): Awaitable<Errors\Result<DeleteDevEndpointResponse>>;
  public function DeleteJob(DeleteJobRequest): Awaitable<Errors\Result<DeleteJobResponse>>;
  public function DeleteMLTransform(DeleteMLTransformRequest): Awaitable<Errors\Result<DeleteMLTransformResponse>>;
  public function DeletePartition(DeletePartitionRequest): Awaitable<Errors\Result<DeletePartitionResponse>>;
  public function DeleteResourcePolicy(DeleteResourcePolicyRequest): Awaitable<Errors\Result<DeleteResourcePolicyResponse>>;
  public function DeleteSecurityConfiguration(DeleteSecurityConfigurationRequest): Awaitable<Errors\Result<DeleteSecurityConfigurationResponse>>;
  public function DeleteTable(DeleteTableRequest): Awaitable<Errors\Result<DeleteTableResponse>>;
  public function DeleteTableVersion(DeleteTableVersionRequest): Awaitable<Errors\Result<DeleteTableVersionResponse>>;
  public function DeleteTrigger(DeleteTriggerRequest): Awaitable<Errors\Result<DeleteTriggerResponse>>;
  public function DeleteUserDefinedFunction(DeleteUserDefinedFunctionRequest): Awaitable<Errors\Result<DeleteUserDefinedFunctionResponse>>;
  public function DeleteWorkflow(DeleteWorkflowRequest): Awaitable<Errors\Result<DeleteWorkflowResponse>>;
  public function GetCatalogImportStatus(GetCatalogImportStatusRequest): Awaitable<Errors\Result<GetCatalogImportStatusResponse>>;
  public function GetClassifier(GetClassifierRequest): Awaitable<Errors\Result<GetClassifierResponse>>;
  public function GetClassifiers(GetClassifiersRequest): Awaitable<Errors\Result<GetClassifiersResponse>>;
  public function GetConnection(GetConnectionRequest): Awaitable<Errors\Result<GetConnectionResponse>>;
  public function GetConnections(GetConnectionsRequest): Awaitable<Errors\Result<GetConnectionsResponse>>;
  public function GetCrawler(GetCrawlerRequest): Awaitable<Errors\Result<GetCrawlerResponse>>;
  public function GetCrawlerMetrics(GetCrawlerMetricsRequest): Awaitable<Errors\Result<GetCrawlerMetricsResponse>>;
  public function GetCrawlers(GetCrawlersRequest): Awaitable<Errors\Result<GetCrawlersResponse>>;
  public function GetDataCatalogEncryptionSettings(GetDataCatalogEncryptionSettingsRequest): Awaitable<Errors\Result<GetDataCatalogEncryptionSettingsResponse>>;
  public function GetDatabase(GetDatabaseRequest): Awaitable<Errors\Result<GetDatabaseResponse>>;
  public function GetDatabases(GetDatabasesRequest): Awaitable<Errors\Result<GetDatabasesResponse>>;
  public function GetDataflowGraph(GetDataflowGraphRequest): Awaitable<Errors\Result<GetDataflowGraphResponse>>;
  public function GetDevEndpoint(GetDevEndpointRequest): Awaitable<Errors\Result<GetDevEndpointResponse>>;
  public function GetDevEndpoints(GetDevEndpointsRequest): Awaitable<Errors\Result<GetDevEndpointsResponse>>;
  public function GetJob(GetJobRequest): Awaitable<Errors\Result<GetJobResponse>>;
  public function GetJobBookmark(GetJobBookmarkRequest): Awaitable<Errors\Result<GetJobBookmarkResponse>>;
  public function GetJobRun(GetJobRunRequest): Awaitable<Errors\Result<GetJobRunResponse>>;
  public function GetJobRuns(GetJobRunsRequest): Awaitable<Errors\Result<GetJobRunsResponse>>;
  public function GetJobs(GetJobsRequest): Awaitable<Errors\Result<GetJobsResponse>>;
  public function GetMLTaskRun(GetMLTaskRunRequest): Awaitable<Errors\Result<GetMLTaskRunResponse>>;
  public function GetMLTaskRuns(GetMLTaskRunsRequest): Awaitable<Errors\Result<GetMLTaskRunsResponse>>;
  public function GetMLTransform(GetMLTransformRequest): Awaitable<Errors\Result<GetMLTransformResponse>>;
  public function GetMLTransforms(GetMLTransformsRequest): Awaitable<Errors\Result<GetMLTransformsResponse>>;
  public function GetMapping(GetMappingRequest): Awaitable<Errors\Result<GetMappingResponse>>;
  public function GetPartition(GetPartitionRequest): Awaitable<Errors\Result<GetPartitionResponse>>;
  public function GetPartitions(GetPartitionsRequest): Awaitable<Errors\Result<GetPartitionsResponse>>;
  public function GetPlan(GetPlanRequest): Awaitable<Errors\Result<GetPlanResponse>>;
  public function GetResourcePolicy(GetResourcePolicyRequest): Awaitable<Errors\Result<GetResourcePolicyResponse>>;
  public function GetSecurityConfiguration(GetSecurityConfigurationRequest): Awaitable<Errors\Result<GetSecurityConfigurationResponse>>;
  public function GetSecurityConfigurations(GetSecurityConfigurationsRequest): Awaitable<Errors\Result<GetSecurityConfigurationsResponse>>;
  public function GetTable(GetTableRequest): Awaitable<Errors\Result<GetTableResponse>>;
  public function GetTableVersion(GetTableVersionRequest): Awaitable<Errors\Result<GetTableVersionResponse>>;
  public function GetTableVersions(GetTableVersionsRequest): Awaitable<Errors\Result<GetTableVersionsResponse>>;
  public function GetTables(GetTablesRequest): Awaitable<Errors\Result<GetTablesResponse>>;
  public function GetTags(GetTagsRequest): Awaitable<Errors\Result<GetTagsResponse>>;
  public function GetTrigger(GetTriggerRequest): Awaitable<Errors\Result<GetTriggerResponse>>;
  public function GetTriggers(GetTriggersRequest): Awaitable<Errors\Result<GetTriggersResponse>>;
  public function GetUserDefinedFunction(GetUserDefinedFunctionRequest): Awaitable<Errors\Result<GetUserDefinedFunctionResponse>>;
  public function GetUserDefinedFunctions(GetUserDefinedFunctionsRequest): Awaitable<Errors\Result<GetUserDefinedFunctionsResponse>>;
  public function GetWorkflow(GetWorkflowRequest): Awaitable<Errors\Result<GetWorkflowResponse>>;
  public function GetWorkflowRun(GetWorkflowRunRequest): Awaitable<Errors\Result<GetWorkflowRunResponse>>;
  public function GetWorkflowRunProperties(GetWorkflowRunPropertiesRequest): Awaitable<Errors\Result<GetWorkflowRunPropertiesResponse>>;
  public function GetWorkflowRuns(GetWorkflowRunsRequest): Awaitable<Errors\Result<GetWorkflowRunsResponse>>;
  public function ImportCatalogToGlue(ImportCatalogToGlueRequest): Awaitable<Errors\Result<ImportCatalogToGlueResponse>>;
  public function ListCrawlers(ListCrawlersRequest): Awaitable<Errors\Result<ListCrawlersResponse>>;
  public function ListDevEndpoints(ListDevEndpointsRequest): Awaitable<Errors\Result<ListDevEndpointsResponse>>;
  public function ListJobs(ListJobsRequest): Awaitable<Errors\Result<ListJobsResponse>>;
  public function ListMLTransforms(ListMLTransformsRequest): Awaitable<Errors\Result<ListMLTransformsResponse>>;
  public function ListTriggers(ListTriggersRequest): Awaitable<Errors\Result<ListTriggersResponse>>;
  public function ListWorkflows(ListWorkflowsRequest): Awaitable<Errors\Result<ListWorkflowsResponse>>;
  public function PutDataCatalogEncryptionSettings(PutDataCatalogEncryptionSettingsRequest): Awaitable<Errors\Result<PutDataCatalogEncryptionSettingsResponse>>;
  public function PutResourcePolicy(PutResourcePolicyRequest): Awaitable<Errors\Result<PutResourcePolicyResponse>>;
  public function PutWorkflowRunProperties(PutWorkflowRunPropertiesRequest): Awaitable<Errors\Result<PutWorkflowRunPropertiesResponse>>;
  public function ResetJobBookmark(ResetJobBookmarkRequest): Awaitable<Errors\Result<ResetJobBookmarkResponse>>;
  public function SearchTables(SearchTablesRequest): Awaitable<Errors\Result<SearchTablesResponse>>;
  public function StartCrawler(StartCrawlerRequest): Awaitable<Errors\Result<StartCrawlerResponse>>;
  public function StartCrawlerSchedule(StartCrawlerScheduleRequest): Awaitable<Errors\Result<StartCrawlerScheduleResponse>>;
  public function StartExportLabelsTaskRun(StartExportLabelsTaskRunRequest): Awaitable<Errors\Result<StartExportLabelsTaskRunResponse>>;
  public function StartImportLabelsTaskRun(StartImportLabelsTaskRunRequest): Awaitable<Errors\Result<StartImportLabelsTaskRunResponse>>;
  public function StartJobRun(StartJobRunRequest): Awaitable<Errors\Result<StartJobRunResponse>>;
  public function StartMLEvaluationTaskRun(StartMLEvaluationTaskRunRequest): Awaitable<Errors\Result<StartMLEvaluationTaskRunResponse>>;
  public function StartMLLabelingSetGenerationTaskRun(StartMLLabelingSetGenerationTaskRunRequest): Awaitable<Errors\Result<StartMLLabelingSetGenerationTaskRunResponse>>;
  public function StartTrigger(StartTriggerRequest): Awaitable<Errors\Result<StartTriggerResponse>>;
  public function StartWorkflowRun(StartWorkflowRunRequest): Awaitable<Errors\Result<StartWorkflowRunResponse>>;
  public function StopCrawler(StopCrawlerRequest): Awaitable<Errors\Result<StopCrawlerResponse>>;
  public function StopCrawlerSchedule(StopCrawlerScheduleRequest): Awaitable<Errors\Result<StopCrawlerScheduleResponse>>;
  public function StopTrigger(StopTriggerRequest): Awaitable<Errors\Result<StopTriggerResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateClassifier(UpdateClassifierRequest): Awaitable<Errors\Result<UpdateClassifierResponse>>;
  public function UpdateConnection(UpdateConnectionRequest): Awaitable<Errors\Result<UpdateConnectionResponse>>;
  public function UpdateCrawler(UpdateCrawlerRequest): Awaitable<Errors\Result<UpdateCrawlerResponse>>;
  public function UpdateCrawlerSchedule(UpdateCrawlerScheduleRequest): Awaitable<Errors\Result<UpdateCrawlerScheduleResponse>>;
  public function UpdateDatabase(UpdateDatabaseRequest): Awaitable<Errors\Result<UpdateDatabaseResponse>>;
  public function UpdateDevEndpoint(UpdateDevEndpointRequest): Awaitable<Errors\Result<UpdateDevEndpointResponse>>;
  public function UpdateJob(UpdateJobRequest): Awaitable<Errors\Result<UpdateJobResponse>>;
  public function UpdateMLTransform(UpdateMLTransformRequest): Awaitable<Errors\Result<UpdateMLTransformResponse>>;
  public function UpdatePartition(UpdatePartitionRequest): Awaitable<Errors\Result<UpdatePartitionResponse>>;
  public function UpdateTable(UpdateTableRequest): Awaitable<Errors\Result<UpdateTableResponse>>;
  public function UpdateTrigger(UpdateTriggerRequest): Awaitable<Errors\Result<UpdateTriggerResponse>>;
  public function UpdateUserDefinedFunction(UpdateUserDefinedFunctionRequest): Awaitable<Errors\Result<UpdateUserDefinedFunctionResponse>>;
  public function UpdateWorkflow(UpdateWorkflowRequest): Awaitable<Errors\Result<UpdateWorkflowResponse>>;
}

class AccessDeniedException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Action {
  public GenericMap $arguments;
  public NameString $crawler_name;
  public NameString $job_name;
  public NotificationProperty $notification_property;
  public NameString $security_configuration;
  public Timeout $timeout;

  public function __construct(shape(
  ?'arguments' => GenericMap,
  ?'crawler_name' => NameString,
  ?'job_name' => NameString,
  ?'notification_property' => NotificationProperty,
  ?'security_configuration' => NameString,
  ?'timeout' => Timeout,
  ) $s = shape()) {
    $this->arguments = $arguments ?? [];
    $this->crawler_name = $crawler_name ?? "";
    $this->job_name = $job_name ?? "";
    $this->notification_property = $notification_property ?? null;
    $this->security_configuration = $security_configuration ?? "";
    $this->timeout = $timeout ?? 0;
  }
}

type ActionList = vec<Action>;

class AlreadyExistsException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type AttemptCount = int;

class BatchCreatePartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public PartitionInputList $partition_input_list;
  public NameString $table_name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'partition_input_list' => PartitionInputList,
  ?'table_name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->partition_input_list = $partition_input_list ?? [];
    $this->table_name = $table_name ?? "";
  }
}

class BatchCreatePartitionResponse {
  public PartitionErrors $errors;

  public function __construct(shape(
  ?'errors' => PartitionErrors,
  ) $s = shape()) {
    $this->errors = $errors ?? [];
  }
}

class BatchDeleteConnectionRequest {
  public CatalogIdString $catalog_id;
  public DeleteConnectionNameList $connection_name_list;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'connection_name_list' => DeleteConnectionNameList,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->connection_name_list = $connection_name_list ?? [];
  }
}

class BatchDeleteConnectionResponse {
  public ErrorByName $errors;
  public NameStringList $succeeded;

  public function __construct(shape(
  ?'errors' => ErrorByName,
  ?'succeeded' => NameStringList,
  ) $s = shape()) {
    $this->errors = $errors ?? [];
    $this->succeeded = $succeeded ?? [];
  }
}

class BatchDeletePartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public BatchDeletePartitionValueList $partitions_to_delete;
  public NameString $table_name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'partitions_to_delete' => BatchDeletePartitionValueList,
  ?'table_name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->partitions_to_delete = $partitions_to_delete ?? [];
    $this->table_name = $table_name ?? "";
  }
}

class BatchDeletePartitionResponse {
  public PartitionErrors $errors;

  public function __construct(shape(
  ?'errors' => PartitionErrors,
  ) $s = shape()) {
    $this->errors = $errors ?? [];
  }
}

type BatchDeletePartitionValueList = vec<PartitionValueList>;

type BatchDeleteTableNameList = vec<NameString>;

class BatchDeleteTableRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public BatchDeleteTableNameList $tables_to_delete;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'tables_to_delete' => BatchDeleteTableNameList,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->tables_to_delete = $tables_to_delete ?? [];
  }
}

class BatchDeleteTableResponse {
  public TableErrors $errors;

  public function __construct(shape(
  ?'errors' => TableErrors,
  ) $s = shape()) {
    $this->errors = $errors ?? [];
  }
}

type BatchDeleteTableVersionList = vec<VersionString>;

class BatchDeleteTableVersionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $table_name;
  public BatchDeleteTableVersionList $version_ids;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'table_name' => NameString,
  ?'version_ids' => BatchDeleteTableVersionList,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->table_name = $table_name ?? "";
    $this->version_ids = $version_ids ?? [];
  }
}

class BatchDeleteTableVersionResponse {
  public TableVersionErrors $errors;

  public function __construct(shape(
  ?'errors' => TableVersionErrors,
  ) $s = shape()) {
    $this->errors = $errors ?? [];
  }
}

class BatchGetCrawlersRequest {
  public CrawlerNameList $crawler_names;

  public function __construct(shape(
  ?'crawler_names' => CrawlerNameList,
  ) $s = shape()) {
    $this->crawler_names = $crawler_names ?? [];
  }
}

class BatchGetCrawlersResponse {
  public CrawlerList $crawlers;
  public CrawlerNameList $crawlers_not_found;

  public function __construct(shape(
  ?'crawlers' => CrawlerList,
  ?'crawlers_not_found' => CrawlerNameList,
  ) $s = shape()) {
    $this->crawlers = $crawlers ?? [];
    $this->crawlers_not_found = $crawlers_not_found ?? [];
  }
}

class BatchGetDevEndpointsRequest {
  public DevEndpointNames $dev_endpoint_names;

  public function __construct(shape(
  ?'dev_endpoint_names' => DevEndpointNames,
  ) $s = shape()) {
    $this->dev_endpoint_names = $dev_endpoint_names ?? [];
  }
}

class BatchGetDevEndpointsResponse {
  public DevEndpointList $dev_endpoints;
  public DevEndpointNames $dev_endpoints_not_found;

  public function __construct(shape(
  ?'dev_endpoints' => DevEndpointList,
  ?'dev_endpoints_not_found' => DevEndpointNames,
  ) $s = shape()) {
    $this->dev_endpoints = $dev_endpoints ?? [];
    $this->dev_endpoints_not_found = $dev_endpoints_not_found ?? [];
  }
}

class BatchGetJobsRequest {
  public JobNameList $job_names;

  public function __construct(shape(
  ?'job_names' => JobNameList,
  ) $s = shape()) {
    $this->job_names = $job_names ?? [];
  }
}

class BatchGetJobsResponse {
  public JobList $jobs;
  public JobNameList $jobs_not_found;

  public function __construct(shape(
  ?'jobs' => JobList,
  ?'jobs_not_found' => JobNameList,
  ) $s = shape()) {
    $this->jobs = $jobs ?? [];
    $this->jobs_not_found = $jobs_not_found ?? [];
  }
}

class BatchGetPartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public BatchGetPartitionValueList $partitions_to_get;
  public NameString $table_name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'partitions_to_get' => BatchGetPartitionValueList,
  ?'table_name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->partitions_to_get = $partitions_to_get ?? [];
    $this->table_name = $table_name ?? "";
  }
}

class BatchGetPartitionResponse {
  public PartitionList $partitions;
  public BatchGetPartitionValueList $unprocessed_keys;

  public function __construct(shape(
  ?'partitions' => PartitionList,
  ?'unprocessed_keys' => BatchGetPartitionValueList,
  ) $s = shape()) {
    $this->partitions = $partitions ?? [];
    $this->unprocessed_keys = $unprocessed_keys ?? [];
  }
}

type BatchGetPartitionValueList = vec<PartitionValueList>;

class BatchGetTriggersRequest {
  public TriggerNameList $trigger_names;

  public function __construct(shape(
  ?'trigger_names' => TriggerNameList,
  ) $s = shape()) {
    $this->trigger_names = $trigger_names ?? [];
  }
}

class BatchGetTriggersResponse {
  public TriggerList $triggers;
  public TriggerNameList $triggers_not_found;

  public function __construct(shape(
  ?'triggers' => TriggerList,
  ?'triggers_not_found' => TriggerNameList,
  ) $s = shape()) {
    $this->triggers = $triggers ?? [];
    $this->triggers_not_found = $triggers_not_found ?? [];
  }
}

class BatchGetWorkflowsRequest {
  public NullableBoolean $include_graph;
  public WorkflowNames $names;

  public function __construct(shape(
  ?'include_graph' => NullableBoolean,
  ?'names' => WorkflowNames,
  ) $s = shape()) {
    $this->include_graph = $include_graph ?? false;
    $this->names = $names ?? [];
  }
}

class BatchGetWorkflowsResponse {
  public WorkflowNames $missing_workflows;
  public Workflows $workflows;

  public function __construct(shape(
  ?'missing_workflows' => WorkflowNames,
  ?'workflows' => Workflows,
  ) $s = shape()) {
    $this->missing_workflows = $missing_workflows ?? [];
    $this->workflows = $workflows ?? [];
  }
}

class BatchStopJobRunError {
  public ErrorDetail $error_detail;
  public NameString $job_name;
  public IdString $job_run_id;

  public function __construct(shape(
  ?'error_detail' => ErrorDetail,
  ?'job_name' => NameString,
  ?'job_run_id' => IdString,
  ) $s = shape()) {
    $this->error_detail = $error_detail ?? null;
    $this->job_name = $job_name ?? "";
    $this->job_run_id = $job_run_id ?? "";
  }
}

type BatchStopJobRunErrorList = vec<BatchStopJobRunError>;

type BatchStopJobRunJobRunIdList = vec<IdString>;

class BatchStopJobRunRequest {
  public NameString $job_name;
  public BatchStopJobRunJobRunIdList $job_run_ids;

  public function __construct(shape(
  ?'job_name' => NameString,
  ?'job_run_ids' => BatchStopJobRunJobRunIdList,
  ) $s = shape()) {
    $this->job_name = $job_name ?? "";
    $this->job_run_ids = $job_run_ids ?? [];
  }
}

class BatchStopJobRunResponse {
  public BatchStopJobRunErrorList $errors;
  public BatchStopJobRunSuccessfulSubmissionList $successful_submissions;

  public function __construct(shape(
  ?'errors' => BatchStopJobRunErrorList,
  ?'successful_submissions' => BatchStopJobRunSuccessfulSubmissionList,
  ) $s = shape()) {
    $this->errors = $errors ?? [];
    $this->successful_submissions = $successful_submissions ?? [];
  }
}

class BatchStopJobRunSuccessfulSubmission {
  public NameString $job_name;
  public IdString $job_run_id;

  public function __construct(shape(
  ?'job_name' => NameString,
  ?'job_run_id' => IdString,
  ) $s = shape()) {
    $this->job_name = $job_name ?? "";
    $this->job_run_id = $job_run_id ?? "";
  }
}

type BatchStopJobRunSuccessfulSubmissionList = vec<BatchStopJobRunSuccessfulSubmission>;

type Boolean = bool;

type BooleanNullable = bool;

type BooleanValue = bool;

type BoundedPartitionValueList = vec<ValueString>;

class CancelMLTaskRunRequest {
  public HashString $task_run_id;
  public HashString $transform_id;

  public function __construct(shape(
  ?'task_run_id' => HashString,
  ?'transform_id' => HashString,
  ) $s = shape()) {
    $this->task_run_id = $task_run_id ?? "";
    $this->transform_id = $transform_id ?? "";
  }
}

class CancelMLTaskRunResponse {
  public TaskStatusType $status;
  public HashString $task_run_id;
  public HashString $transform_id;

  public function __construct(shape(
  ?'status' => TaskStatusType,
  ?'task_run_id' => HashString,
  ?'transform_id' => HashString,
  ) $s = shape()) {
    $this->status = $status ?? "";
    $this->task_run_id = $task_run_id ?? "";
    $this->transform_id = $transform_id ?? "";
  }
}

type CatalogEncryptionMode = string;

type CatalogEntries = vec<CatalogEntry>;

class CatalogEntry {
  public NameString $database_name;
  public NameString $table_name;

  public function __construct(shape(
  ?'database_name' => NameString,
  ?'table_name' => NameString,
  ) $s = shape()) {
    $this->database_name = $database_name ?? "";
    $this->table_name = $table_name ?? "";
  }
}

type CatalogIdString = string;

class CatalogImportStatus {
  public boolean $import_completed;
  public Timestamp $import_time;
  public NameString $imported_by;

  public function __construct(shape(
  ?'import_completed' => boolean,
  ?'import_time' => Timestamp,
  ?'imported_by' => NameString,
  ) $s = shape()) {
    $this->import_completed = $import_completed ?? false;
    $this->import_time = $import_time ?? 0;
    $this->imported_by = $imported_by ?? "";
  }
}

type CatalogTablesList = vec<NameString>;

class CatalogTarget {
  public NameString $database_name;
  public CatalogTablesList $tables;

  public function __construct(shape(
  ?'database_name' => NameString,
  ?'tables' => CatalogTablesList,
  ) $s = shape()) {
    $this->database_name = $database_name ?? "";
    $this->tables = $tables ?? [];
  }
}

type CatalogTargetList = vec<CatalogTarget>;

type Classification = string;

class Classifier {
  public CsvClassifier $csv_classifier;
  public GrokClassifier $grok_classifier;
  public JsonClassifier $json_classifier;
  public XMLClassifier $xml_classifier;

  public function __construct(shape(
  ?'csv_classifier' => CsvClassifier,
  ?'grok_classifier' => GrokClassifier,
  ?'json_classifier' => JsonClassifier,
  ?'xml_classifier' => XMLClassifier,
  ) $s = shape()) {
    $this->csv_classifier = $csv_classifier ?? null;
    $this->grok_classifier = $grok_classifier ?? null;
    $this->json_classifier = $json_classifier ?? null;
    $this->xml_classifier = $xml_classifier ?? null;
  }
}

type ClassifierList = vec<Classifier>;

type ClassifierNameList = vec<NameString>;

class CloudWatchEncryption {
  public CloudWatchEncryptionMode $cloud_watch_encryption_mode;
  public KmsKeyArn $kms_key_arn;

  public function __construct(shape(
  ?'cloud_watch_encryption_mode' => CloudWatchEncryptionMode,
  ?'kms_key_arn' => KmsKeyArn,
  ) $s = shape()) {
    $this->cloud_watch_encryption_mode = $cloud_watch_encryption_mode ?? "";
    $this->kms_key_arn = $kms_key_arn ?? "";
  }
}

type CloudWatchEncryptionMode = string;

type CodeGenArgName = string;

type CodeGenArgValue = string;

class CodeGenEdge {
  public CodeGenIdentifier $source;
  public CodeGenIdentifier $target;
  public CodeGenArgName $target_parameter;

  public function __construct(shape(
  ?'source' => CodeGenIdentifier,
  ?'target' => CodeGenIdentifier,
  ?'target_parameter' => CodeGenArgName,
  ) $s = shape()) {
    $this->source = $source ?? "";
    $this->target = $target ?? "";
    $this->target_parameter = $target_parameter ?? "";
  }
}

type CodeGenIdentifier = string;

class CodeGenNode {
  public CodeGenNodeArgs $args;
  public CodeGenIdentifier $id;
  public int $line_number;
  public CodeGenNodeType $node_type;

  public function __construct(shape(
  ?'args' => CodeGenNodeArgs,
  ?'id' => CodeGenIdentifier,
  ?'line_number' => int,
  ?'node_type' => CodeGenNodeType,
  ) $s = shape()) {
    $this->args = $args ?? [];
    $this->id = $id ?? "";
    $this->line_number = $line_number ?? 0;
    $this->node_type = $node_type ?? "";
  }
}

class CodeGenNodeArg {
  public CodeGenArgName $name;
  public boolean $param;
  public CodeGenArgValue $value;

  public function __construct(shape(
  ?'name' => CodeGenArgName,
  ?'param' => boolean,
  ?'value' => CodeGenArgValue,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->param = $param ?? false;
    $this->value = $value ?? "";
  }
}

type CodeGenNodeArgs = vec<CodeGenNodeArg>;

type CodeGenNodeType = string;

class Column {
  public CommentString $comment;
  public NameString $name;
  public ParametersMap $parameters;
  public ColumnTypeString $type;

  public function __construct(shape(
  ?'comment' => CommentString,
  ?'name' => NameString,
  ?'parameters' => ParametersMap,
  ?'type' => ColumnTypeString,
  ) $s = shape()) {
    $this->comment = $comment ?? "";
    $this->name = $name ?? "";
    $this->parameters = $parameters ?? [];
    $this->type = $type ?? "";
  }
}

type ColumnList = vec<Column>;

type ColumnNameString = string;

type ColumnTypeString = string;

type ColumnValueStringList = vec<ColumnValuesString>;

type ColumnValuesString = string;

type CommentString = string;

type Comparator = string;

class ConcurrentModificationException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ConcurrentRunsExceededException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Condition {
  public CrawlState $crawl_state;
  public NameString $crawler_name;
  public NameString $job_name;
  public LogicalOperator $logical_operator;
  public JobRunState $state;

  public function __construct(shape(
  ?'crawl_state' => CrawlState,
  ?'crawler_name' => NameString,
  ?'job_name' => NameString,
  ?'logical_operator' => LogicalOperator,
  ?'state' => JobRunState,
  ) $s = shape()) {
    $this->crawl_state = $crawl_state ?? "";
    $this->crawler_name = $crawler_name ?? "";
    $this->job_name = $job_name ?? "";
    $this->logical_operator = $logical_operator ?? "";
    $this->state = $state ?? "";
  }
}

class ConditionCheckFailureException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ConditionList = vec<Condition>;

class ConfusionMatrix {
  public RecordsCount $num_false_negatives;
  public RecordsCount $num_false_positives;
  public RecordsCount $num_true_negatives;
  public RecordsCount $num_true_positives;

  public function __construct(shape(
  ?'num_false_negatives' => RecordsCount,
  ?'num_false_positives' => RecordsCount,
  ?'num_true_negatives' => RecordsCount,
  ?'num_true_positives' => RecordsCount,
  ) $s = shape()) {
    $this->num_false_negatives = $num_false_negatives ?? 0;
    $this->num_false_positives = $num_false_positives ?? 0;
    $this->num_true_negatives = $num_true_negatives ?? 0;
    $this->num_true_positives = $num_true_positives ?? 0;
  }
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

  public function __construct(shape(
  ?'connection_properties' => ConnectionProperties,
  ?'connection_type' => ConnectionType,
  ?'creation_time' => Timestamp,
  ?'description' => DescriptionString,
  ?'last_updated_by' => NameString,
  ?'last_updated_time' => Timestamp,
  ?'match_criteria' => MatchCriteria,
  ?'name' => NameString,
  ?'physical_connection_requirements' => PhysicalConnectionRequirements,
  ) $s = shape()) {
    $this->connection_properties = $connection_properties ?? [];
    $this->connection_type = $connection_type ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->description = $description ?? "";
    $this->last_updated_by = $last_updated_by ?? "";
    $this->last_updated_time = $last_updated_time ?? 0;
    $this->match_criteria = $match_criteria ?? [];
    $this->name = $name ?? "";
    $this->physical_connection_requirements = $physical_connection_requirements ?? null;
  }
}

class ConnectionInput {
  public ConnectionProperties $connection_properties;
  public ConnectionType $connection_type;
  public DescriptionString $description;
  public MatchCriteria $match_criteria;
  public NameString $name;
  public PhysicalConnectionRequirements $physical_connection_requirements;

  public function __construct(shape(
  ?'connection_properties' => ConnectionProperties,
  ?'connection_type' => ConnectionType,
  ?'description' => DescriptionString,
  ?'match_criteria' => MatchCriteria,
  ?'name' => NameString,
  ?'physical_connection_requirements' => PhysicalConnectionRequirements,
  ) $s = shape()) {
    $this->connection_properties = $connection_properties ?? [];
    $this->connection_type = $connection_type ?? "";
    $this->description = $description ?? "";
    $this->match_criteria = $match_criteria ?? [];
    $this->name = $name ?? "";
    $this->physical_connection_requirements = $physical_connection_requirements ?? null;
  }
}

type ConnectionList = vec<Connection>;

type ConnectionName = string;

class ConnectionPasswordEncryption {
  public NameString $aws_kms_key_id;
  public boolean $return_connection_password_encrypted;

  public function __construct(shape(
  ?'aws_kms_key_id' => NameString,
  ?'return_connection_password_encrypted' => boolean,
  ) $s = shape()) {
    $this->aws_kms_key_id = $aws_kms_key_id ?? "";
    $this->return_connection_password_encrypted = $return_connection_password_encrypted ?? false;
  }
}

type ConnectionProperties = dict<ConnectionPropertyKey, ValueString>;

type ConnectionPropertyKey = string;

type ConnectionType = string;

class ConnectionsList {
  public OrchestrationStringList $connections;

  public function __construct(shape(
  ?'connections' => OrchestrationStringList,
  ) $s = shape()) {
    $this->connections = $connections ?? [];
  }
}

class Crawl {
  public TimestampValue $completed_on;
  public DescriptionString $error_message;
  public LogGroup $log_group;
  public LogStream $log_stream;
  public TimestampValue $started_on;
  public CrawlState $state;

  public function __construct(shape(
  ?'completed_on' => TimestampValue,
  ?'error_message' => DescriptionString,
  ?'log_group' => LogGroup,
  ?'log_stream' => LogStream,
  ?'started_on' => TimestampValue,
  ?'state' => CrawlState,
  ) $s = shape()) {
    $this->completed_on = $completed_on ?? 0;
    $this->error_message = $error_message ?? "";
    $this->log_group = $log_group ?? "";
    $this->log_stream = $log_stream ?? "";
    $this->started_on = $started_on ?? 0;
    $this->state = $state ?? "";
  }
}

type CrawlList = vec<Crawl>;

type CrawlState = string;

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

  public function __construct(shape(
  ?'classifiers' => ClassifierNameList,
  ?'configuration' => CrawlerConfiguration,
  ?'crawl_elapsed_time' => MillisecondsCount,
  ?'crawler_security_configuration' => CrawlerSecurityConfiguration,
  ?'creation_time' => Timestamp,
  ?'database_name' => DatabaseName,
  ?'description' => DescriptionString,
  ?'last_crawl' => LastCrawlInfo,
  ?'last_updated' => Timestamp,
  ?'name' => NameString,
  ?'role' => Role,
  ?'schedule' => Schedule,
  ?'schema_change_policy' => SchemaChangePolicy,
  ?'state' => CrawlerState,
  ?'table_prefix' => TablePrefix,
  ?'targets' => CrawlerTargets,
  ?'version' => VersionId,
  ) $s = shape()) {
    $this->classifiers = $classifiers ?? [];
    $this->configuration = $configuration ?? "";
    $this->crawl_elapsed_time = $crawl_elapsed_time ?? 0;
    $this->crawler_security_configuration = $crawler_security_configuration ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->database_name = $database_name ?? "";
    $this->description = $description ?? "";
    $this->last_crawl = $last_crawl ?? null;
    $this->last_updated = $last_updated ?? 0;
    $this->name = $name ?? "";
    $this->role = $role ?? "";
    $this->schedule = $schedule ?? null;
    $this->schema_change_policy = $schema_change_policy ?? null;
    $this->state = $state ?? "";
    $this->table_prefix = $table_prefix ?? "";
    $this->targets = $targets ?? null;
    $this->version = $version ?? 0;
  }
}

type CrawlerConfiguration = string;

type CrawlerList = vec<Crawler>;

class CrawlerMetrics {
  public NameString $crawler_name;
  public NonNegativeDouble $last_runtime_seconds;
  public NonNegativeDouble $median_runtime_seconds;
  public boolean $still_estimating;
  public NonNegativeInteger $tables_created;
  public NonNegativeInteger $tables_deleted;
  public NonNegativeInteger $tables_updated;
  public NonNegativeDouble $time_left_seconds;

  public function __construct(shape(
  ?'crawler_name' => NameString,
  ?'last_runtime_seconds' => NonNegativeDouble,
  ?'median_runtime_seconds' => NonNegativeDouble,
  ?'still_estimating' => boolean,
  ?'tables_created' => NonNegativeInteger,
  ?'tables_deleted' => NonNegativeInteger,
  ?'tables_updated' => NonNegativeInteger,
  ?'time_left_seconds' => NonNegativeDouble,
  ) $s = shape()) {
    $this->crawler_name = $crawler_name ?? "";
    $this->last_runtime_seconds = $last_runtime_seconds ?? 0.0;
    $this->median_runtime_seconds = $median_runtime_seconds ?? 0.0;
    $this->still_estimating = $still_estimating ?? false;
    $this->tables_created = $tables_created ?? 0;
    $this->tables_deleted = $tables_deleted ?? 0;
    $this->tables_updated = $tables_updated ?? 0;
    $this->time_left_seconds = $time_left_seconds ?? 0.0;
  }
}

type CrawlerMetricsList = vec<CrawlerMetrics>;

type CrawlerNameList = vec<NameString>;

class CrawlerNodeDetails {
  public CrawlList $crawls;

  public function __construct(shape(
  ?'crawls' => CrawlList,
  ) $s = shape()) {
    $this->crawls = $crawls ?? [];
  }
}

class CrawlerNotRunningException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CrawlerRunningException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type CrawlerSecurityConfiguration = string;

type CrawlerState = string;

class CrawlerStoppingException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CrawlerTargets {
  public CatalogTargetList $catalog_targets;
  public DynamoDBTargetList $dynamo_db_targets;
  public JdbcTargetList $jdbc_targets;
  public S3TargetList $s_3_targets;

  public function __construct(shape(
  ?'catalog_targets' => CatalogTargetList,
  ?'dynamo_db_targets' => DynamoDBTargetList,
  ?'jdbc_targets' => JdbcTargetList,
  ?'s_3_targets' => S3TargetList,
  ) $s = shape()) {
    $this->catalog_targets = $catalog_targets ?? [];
    $this->dynamo_db_targets = $dynamo_db_targets ?? [];
    $this->jdbc_targets = $jdbc_targets ?? [];
    $this->s_3_targets = $s_3_targets ?? [];
  }
}

class CreateClassifierRequest {
  public CreateCsvClassifierRequest $csv_classifier;
  public CreateGrokClassifierRequest $grok_classifier;
  public CreateJsonClassifierRequest $json_classifier;
  public CreateXMLClassifierRequest $xml_classifier;

  public function __construct(shape(
  ?'csv_classifier' => CreateCsvClassifierRequest,
  ?'grok_classifier' => CreateGrokClassifierRequest,
  ?'json_classifier' => CreateJsonClassifierRequest,
  ?'xml_classifier' => CreateXMLClassifierRequest,
  ) $s = shape()) {
    $this->csv_classifier = $csv_classifier ?? null;
    $this->grok_classifier = $grok_classifier ?? null;
    $this->json_classifier = $json_classifier ?? null;
    $this->xml_classifier = $xml_classifier ?? null;
  }
}

class CreateClassifierResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateConnectionRequest {
  public CatalogIdString $catalog_id;
  public ConnectionInput $connection_input;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'connection_input' => ConnectionInput,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->connection_input = $connection_input ?? null;
  }
}

class CreateConnectionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'classifiers' => ClassifierNameList,
  ?'configuration' => CrawlerConfiguration,
  ?'crawler_security_configuration' => CrawlerSecurityConfiguration,
  ?'database_name' => DatabaseName,
  ?'description' => DescriptionString,
  ?'name' => NameString,
  ?'role' => Role,
  ?'schedule' => CronExpression,
  ?'schema_change_policy' => SchemaChangePolicy,
  ?'table_prefix' => TablePrefix,
  ?'tags' => TagsMap,
  ?'targets' => CrawlerTargets,
  ) $s = shape()) {
    $this->classifiers = $classifiers ?? [];
    $this->configuration = $configuration ?? "";
    $this->crawler_security_configuration = $crawler_security_configuration ?? "";
    $this->database_name = $database_name ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->role = $role ?? "";
    $this->schedule = $schedule ?? "";
    $this->schema_change_policy = $schema_change_policy ?? null;
    $this->table_prefix = $table_prefix ?? "";
    $this->tags = $tags ?? [];
    $this->targets = $targets ?? null;
  }
}

class CreateCrawlerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateCsvClassifierRequest {
  public NullableBoolean $allow_single_column;
  public CsvHeaderOption $contains_header;
  public CsvColumnDelimiter $delimiter;
  public NullableBoolean $disable_value_trimming;
  public CsvHeader $header;
  public NameString $name;
  public CsvQuoteSymbol $quote_symbol;

  public function __construct(shape(
  ?'allow_single_column' => NullableBoolean,
  ?'contains_header' => CsvHeaderOption,
  ?'delimiter' => CsvColumnDelimiter,
  ?'disable_value_trimming' => NullableBoolean,
  ?'header' => CsvHeader,
  ?'name' => NameString,
  ?'quote_symbol' => CsvQuoteSymbol,
  ) $s = shape()) {
    $this->allow_single_column = $allow_single_column ?? false;
    $this->contains_header = $contains_header ?? "";
    $this->delimiter = $delimiter ?? "";
    $this->disable_value_trimming = $disable_value_trimming ?? false;
    $this->header = $header ?? [];
    $this->name = $name ?? "";
    $this->quote_symbol = $quote_symbol ?? "";
  }
}

class CreateDatabaseRequest {
  public CatalogIdString $catalog_id;
  public DatabaseInput $database_input;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_input' => DatabaseInput,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_input = $database_input ?? null;
  }
}

class CreateDatabaseResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'arguments' => MapValue,
  ?'endpoint_name' => GenericString,
  ?'extra_jars_s_3_path' => GenericString,
  ?'extra_python_libs_s_3_path' => GenericString,
  ?'glue_version' => GlueVersionString,
  ?'number_of_nodes' => IntegerValue,
  ?'number_of_workers' => NullableInteger,
  ?'public_key' => GenericString,
  ?'public_keys' => PublicKeysList,
  ?'role_arn' => RoleArn,
  ?'security_configuration' => NameString,
  ?'security_group_ids' => StringList,
  ?'subnet_id' => GenericString,
  ?'tags' => TagsMap,
  ?'worker_type' => WorkerType,
  ) $s = shape()) {
    $this->arguments = $arguments ?? [];
    $this->endpoint_name = $endpoint_name ?? "";
    $this->extra_jars_s_3_path = $extra_jars_s_3_path ?? "";
    $this->extra_python_libs_s_3_path = $extra_python_libs_s_3_path ?? "";
    $this->glue_version = $glue_version ?? "";
    $this->number_of_nodes = $number_of_nodes ?? 0;
    $this->number_of_workers = $number_of_workers ?? 0;
    $this->public_key = $public_key ?? "";
    $this->public_keys = $public_keys ?? [];
    $this->role_arn = $role_arn ?? "";
    $this->security_configuration = $security_configuration ?? "";
    $this->security_group_ids = $security_group_ids ?? [];
    $this->subnet_id = $subnet_id ?? "";
    $this->tags = $tags ?? [];
    $this->worker_type = $worker_type ?? "";
  }
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

  public function __construct(shape(
  ?'arguments' => MapValue,
  ?'availability_zone' => GenericString,
  ?'created_timestamp' => TimestampValue,
  ?'endpoint_name' => GenericString,
  ?'extra_jars_s_3_path' => GenericString,
  ?'extra_python_libs_s_3_path' => GenericString,
  ?'failure_reason' => GenericString,
  ?'glue_version' => GlueVersionString,
  ?'number_of_nodes' => IntegerValue,
  ?'number_of_workers' => NullableInteger,
  ?'role_arn' => RoleArn,
  ?'security_configuration' => NameString,
  ?'security_group_ids' => StringList,
  ?'status' => GenericString,
  ?'subnet_id' => GenericString,
  ?'vpc_id' => GenericString,
  ?'worker_type' => WorkerType,
  ?'yarn_endpoint_address' => GenericString,
  ?'zeppelin_remote_spark_interpreter_port' => IntegerValue,
  ) $s = shape()) {
    $this->arguments = $arguments ?? [];
    $this->availability_zone = $availability_zone ?? "";
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->endpoint_name = $endpoint_name ?? "";
    $this->extra_jars_s_3_path = $extra_jars_s_3_path ?? "";
    $this->extra_python_libs_s_3_path = $extra_python_libs_s_3_path ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->glue_version = $glue_version ?? "";
    $this->number_of_nodes = $number_of_nodes ?? 0;
    $this->number_of_workers = $number_of_workers ?? 0;
    $this->role_arn = $role_arn ?? "";
    $this->security_configuration = $security_configuration ?? "";
    $this->security_group_ids = $security_group_ids ?? [];
    $this->status = $status ?? "";
    $this->subnet_id = $subnet_id ?? "";
    $this->vpc_id = $vpc_id ?? "";
    $this->worker_type = $worker_type ?? "";
    $this->yarn_endpoint_address = $yarn_endpoint_address ?? "";
    $this->zeppelin_remote_spark_interpreter_port = $zeppelin_remote_spark_interpreter_port ?? 0;
  }
}

class CreateGrokClassifierRequest {
  public Classification $classification;
  public CustomPatterns $custom_patterns;
  public GrokPattern $grok_pattern;
  public NameString $name;

  public function __construct(shape(
  ?'classification' => Classification,
  ?'custom_patterns' => CustomPatterns,
  ?'grok_pattern' => GrokPattern,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->classification = $classification ?? "";
    $this->custom_patterns = $custom_patterns ?? "";
    $this->grok_pattern = $grok_pattern ?? "";
    $this->name = $name ?? "";
  }
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

  public function __construct(shape(
  ?'allocated_capacity' => IntegerValue,
  ?'command' => JobCommand,
  ?'connections' => ConnectionsList,
  ?'default_arguments' => GenericMap,
  ?'description' => DescriptionString,
  ?'execution_property' => ExecutionProperty,
  ?'glue_version' => GlueVersionString,
  ?'log_uri' => UriString,
  ?'max_capacity' => NullableDouble,
  ?'max_retries' => MaxRetries,
  ?'name' => NameString,
  ?'non_overridable_arguments' => GenericMap,
  ?'notification_property' => NotificationProperty,
  ?'number_of_workers' => NullableInteger,
  ?'role' => RoleString,
  ?'security_configuration' => NameString,
  ?'tags' => TagsMap,
  ?'timeout' => Timeout,
  ?'worker_type' => WorkerType,
  ) $s = shape()) {
    $this->allocated_capacity = $allocated_capacity ?? 0;
    $this->command = $command ?? null;
    $this->connections = $connections ?? null;
    $this->default_arguments = $default_arguments ?? [];
    $this->description = $description ?? "";
    $this->execution_property = $execution_property ?? null;
    $this->glue_version = $glue_version ?? "";
    $this->log_uri = $log_uri ?? "";
    $this->max_capacity = $max_capacity ?? 0.0;
    $this->max_retries = $max_retries ?? 0;
    $this->name = $name ?? "";
    $this->non_overridable_arguments = $non_overridable_arguments ?? [];
    $this->notification_property = $notification_property ?? null;
    $this->number_of_workers = $number_of_workers ?? 0;
    $this->role = $role ?? "";
    $this->security_configuration = $security_configuration ?? "";
    $this->tags = $tags ?? [];
    $this->timeout = $timeout ?? 0;
    $this->worker_type = $worker_type ?? "";
  }
}

class CreateJobResponse {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class CreateJsonClassifierRequest {
  public JsonPath $json_path;
  public NameString $name;

  public function __construct(shape(
  ?'json_path' => JsonPath,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->json_path = $json_path ?? "";
    $this->name = $name ?? "";
  }
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

  public function __construct(shape(
  ?'description' => DescriptionString,
  ?'glue_version' => GlueVersionString,
  ?'input_record_tables' => GlueTables,
  ?'max_capacity' => NullableDouble,
  ?'max_retries' => NullableInteger,
  ?'name' => NameString,
  ?'number_of_workers' => NullableInteger,
  ?'parameters' => TransformParameters,
  ?'role' => RoleString,
  ?'tags' => TagsMap,
  ?'timeout' => Timeout,
  ?'worker_type' => WorkerType,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->glue_version = $glue_version ?? "";
    $this->input_record_tables = $input_record_tables ?? [];
    $this->max_capacity = $max_capacity ?? 0.0;
    $this->max_retries = $max_retries ?? 0;
    $this->name = $name ?? "";
    $this->number_of_workers = $number_of_workers ?? 0;
    $this->parameters = $parameters ?? null;
    $this->role = $role ?? "";
    $this->tags = $tags ?? [];
    $this->timeout = $timeout ?? 0;
    $this->worker_type = $worker_type ?? "";
  }
}

class CreateMLTransformResponse {
  public HashString $transform_id;

  public function __construct(shape(
  ?'transform_id' => HashString,
  ) $s = shape()) {
    $this->transform_id = $transform_id ?? "";
  }
}

class CreatePartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public PartitionInput $partition_input;
  public NameString $table_name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'partition_input' => PartitionInput,
  ?'table_name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->partition_input = $partition_input ?? null;
    $this->table_name = $table_name ?? "";
  }
}

class CreatePartitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateScriptRequest {
  public DagEdges $dag_edges;
  public DagNodes $dag_nodes;
  public Language $language;

  public function __construct(shape(
  ?'dag_edges' => DagEdges,
  ?'dag_nodes' => DagNodes,
  ?'language' => Language,
  ) $s = shape()) {
    $this->dag_edges = $dag_edges ?? [];
    $this->dag_nodes = $dag_nodes ?? [];
    $this->language = $language ?? "";
  }
}

class CreateScriptResponse {
  public PythonScript $python_script;
  public ScalaCode $scala_code;

  public function __construct(shape(
  ?'python_script' => PythonScript,
  ?'scala_code' => ScalaCode,
  ) $s = shape()) {
    $this->python_script = $python_script ?? "";
    $this->scala_code = $scala_code ?? "";
  }
}

class CreateSecurityConfigurationRequest {
  public EncryptionConfiguration $encryption_configuration;
  public NameString $name;

  public function __construct(shape(
  ?'encryption_configuration' => EncryptionConfiguration,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->encryption_configuration = $encryption_configuration ?? null;
    $this->name = $name ?? "";
  }
}

class CreateSecurityConfigurationResponse {
  public TimestampValue $created_timestamp;
  public NameString $name;

  public function __construct(shape(
  ?'created_timestamp' => TimestampValue,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->name = $name ?? "";
  }
}

class CreateTableRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public TableInput $table_input;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'table_input' => TableInput,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->table_input = $table_input ?? null;
  }
}

class CreateTableResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'actions' => ActionList,
  ?'description' => DescriptionString,
  ?'name' => NameString,
  ?'predicate' => Predicate,
  ?'schedule' => GenericString,
  ?'start_on_creation' => BooleanValue,
  ?'tags' => TagsMap,
  ?'type' => TriggerType,
  ?'workflow_name' => NameString,
  ) $s = shape()) {
    $this->actions = $actions ?? [];
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->predicate = $predicate ?? null;
    $this->schedule = $schedule ?? "";
    $this->start_on_creation = $start_on_creation ?? false;
    $this->tags = $tags ?? [];
    $this->type = $type ?? "";
    $this->workflow_name = $workflow_name ?? "";
  }
}

class CreateTriggerResponse {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class CreateUserDefinedFunctionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public UserDefinedFunctionInput $function_input;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'function_input' => UserDefinedFunctionInput,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->function_input = $function_input ?? null;
  }
}

class CreateUserDefinedFunctionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateWorkflowRequest {
  public WorkflowRunProperties $default_run_properties;
  public GenericString $description;
  public NameString $name;
  public TagsMap $tags;

  public function __construct(shape(
  ?'default_run_properties' => WorkflowRunProperties,
  ?'description' => GenericString,
  ?'name' => NameString,
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->default_run_properties = $default_run_properties ?? [];
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateWorkflowResponse {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class CreateXMLClassifierRequest {
  public Classification $classification;
  public NameString $name;
  public RowTag $row_tag;

  public function __construct(shape(
  ?'classification' => Classification,
  ?'name' => NameString,
  ?'row_tag' => RowTag,
  ) $s = shape()) {
    $this->classification = $classification ?? "";
    $this->name = $name ?? "";
    $this->row_tag = $row_tag ?? "";
  }
}

type CronExpression = string;

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

  public function __construct(shape(
  ?'allow_single_column' => NullableBoolean,
  ?'contains_header' => CsvHeaderOption,
  ?'creation_time' => Timestamp,
  ?'delimiter' => CsvColumnDelimiter,
  ?'disable_value_trimming' => NullableBoolean,
  ?'header' => CsvHeader,
  ?'last_updated' => Timestamp,
  ?'name' => NameString,
  ?'quote_symbol' => CsvQuoteSymbol,
  ?'version' => VersionId,
  ) $s = shape()) {
    $this->allow_single_column = $allow_single_column ?? false;
    $this->contains_header = $contains_header ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->delimiter = $delimiter ?? "";
    $this->disable_value_trimming = $disable_value_trimming ?? false;
    $this->header = $header ?? [];
    $this->last_updated = $last_updated ?? 0;
    $this->name = $name ?? "";
    $this->quote_symbol = $quote_symbol ?? "";
    $this->version = $version ?? 0;
  }
}

type CsvColumnDelimiter = string;

type CsvHeader = vec<NameString>;

type CsvHeaderOption = string;

type CsvQuoteSymbol = string;

type CustomPatterns = string;

type DagEdges = vec<CodeGenEdge>;

type DagNodes = vec<CodeGenNode>;

class DataCatalogEncryptionSettings {
  public ConnectionPasswordEncryption $connection_password_encryption;
  public EncryptionAtRest $encryption_at_rest;

  public function __construct(shape(
  ?'connection_password_encryption' => ConnectionPasswordEncryption,
  ?'encryption_at_rest' => EncryptionAtRest,
  ) $s = shape()) {
    $this->connection_password_encryption = $connection_password_encryption ?? null;
    $this->encryption_at_rest = $encryption_at_rest ?? null;
  }
}

class DataLakePrincipal {
  public DataLakePrincipalString $data_lake_principal_identifier;

  public function __construct(shape(
  ?'data_lake_principal_identifier' => DataLakePrincipalString,
  ) $s = shape()) {
    $this->data_lake_principal_identifier = $data_lake_principal_identifier ?? "";
  }
}

type DataLakePrincipalString = string;

class Database {
  public PrincipalPermissionsList $create_table_default_permissions;
  public Timestamp $create_time;
  public DescriptionString $description;
  public URI $location_uri;
  public NameString $name;
  public ParametersMap $parameters;

  public function __construct(shape(
  ?'create_table_default_permissions' => PrincipalPermissionsList,
  ?'create_time' => Timestamp,
  ?'description' => DescriptionString,
  ?'location_uri' => URI,
  ?'name' => NameString,
  ?'parameters' => ParametersMap,
  ) $s = shape()) {
    $this->create_table_default_permissions = $create_table_default_permissions ?? [];
    $this->create_time = $create_time ?? 0;
    $this->description = $description ?? "";
    $this->location_uri = $location_uri ?? "";
    $this->name = $name ?? "";
    $this->parameters = $parameters ?? [];
  }
}

class DatabaseInput {
  public PrincipalPermissionsList $create_table_default_permissions;
  public DescriptionString $description;
  public URI $location_uri;
  public NameString $name;
  public ParametersMap $parameters;

  public function __construct(shape(
  ?'create_table_default_permissions' => PrincipalPermissionsList,
  ?'description' => DescriptionString,
  ?'location_uri' => URI,
  ?'name' => NameString,
  ?'parameters' => ParametersMap,
  ) $s = shape()) {
    $this->create_table_default_permissions = $create_table_default_permissions ?? [];
    $this->description = $description ?? "";
    $this->location_uri = $location_uri ?? "";
    $this->name = $name ?? "";
    $this->parameters = $parameters ?? [];
  }
}

type DatabaseList = vec<Database>;

type DatabaseName = string;

type DeleteBehavior = string;

class DeleteClassifierRequest {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteClassifierResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeleteConnectionNameList = vec<NameString>;

class DeleteConnectionRequest {
  public CatalogIdString $catalog_id;
  public NameString $connection_name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'connection_name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->connection_name = $connection_name ?? "";
  }
}

class DeleteConnectionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteCrawlerRequest {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteCrawlerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDatabaseRequest {
  public CatalogIdString $catalog_id;
  public NameString $name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->name = $name ?? "";
  }
}

class DeleteDatabaseResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDevEndpointRequest {
  public GenericString $endpoint_name;

  public function __construct(shape(
  ?'endpoint_name' => GenericString,
  ) $s = shape()) {
    $this->endpoint_name = $endpoint_name ?? "";
  }
}

class DeleteDevEndpointResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteJobRequest {
  public NameString $job_name;

  public function __construct(shape(
  ?'job_name' => NameString,
  ) $s = shape()) {
    $this->job_name = $job_name ?? "";
  }
}

class DeleteJobResponse {
  public NameString $job_name;

  public function __construct(shape(
  ?'job_name' => NameString,
  ) $s = shape()) {
    $this->job_name = $job_name ?? "";
  }
}

class DeleteMLTransformRequest {
  public HashString $transform_id;

  public function __construct(shape(
  ?'transform_id' => HashString,
  ) $s = shape()) {
    $this->transform_id = $transform_id ?? "";
  }
}

class DeleteMLTransformResponse {
  public HashString $transform_id;

  public function __construct(shape(
  ?'transform_id' => HashString,
  ) $s = shape()) {
    $this->transform_id = $transform_id ?? "";
  }
}

class DeletePartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public ValueStringList $partition_values;
  public NameString $table_name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'partition_values' => ValueStringList,
  ?'table_name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->partition_values = $partition_values ?? [];
    $this->table_name = $table_name ?? "";
  }
}

class DeletePartitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteResourcePolicyRequest {
  public HashString $policy_hash_condition;

  public function __construct(shape(
  ?'policy_hash_condition' => HashString,
  ) $s = shape()) {
    $this->policy_hash_condition = $policy_hash_condition ?? "";
  }
}

class DeleteResourcePolicyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSecurityConfigurationRequest {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteSecurityConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTableRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->name = $name ?? "";
  }
}

class DeleteTableResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTableVersionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $table_name;
  public VersionString $version_id;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'table_name' => NameString,
  ?'version_id' => VersionString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->table_name = $table_name ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class DeleteTableVersionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTriggerRequest {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteTriggerResponse {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteUserDefinedFunctionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $function_name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'function_name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->function_name = $function_name ?? "";
  }
}

class DeleteUserDefinedFunctionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteWorkflowRequest {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteWorkflowResponse {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

type DescriptionString = string;

type DescriptionStringRemovable = string;

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

  public function __construct(shape(
  ?'arguments' => MapValue,
  ?'availability_zone' => GenericString,
  ?'created_timestamp' => TimestampValue,
  ?'endpoint_name' => GenericString,
  ?'extra_jars_s_3_path' => GenericString,
  ?'extra_python_libs_s_3_path' => GenericString,
  ?'failure_reason' => GenericString,
  ?'glue_version' => GlueVersionString,
  ?'last_modified_timestamp' => TimestampValue,
  ?'last_update_status' => GenericString,
  ?'number_of_nodes' => IntegerValue,
  ?'number_of_workers' => NullableInteger,
  ?'private_address' => GenericString,
  ?'public_address' => GenericString,
  ?'public_key' => GenericString,
  ?'public_keys' => PublicKeysList,
  ?'role_arn' => RoleArn,
  ?'security_configuration' => NameString,
  ?'security_group_ids' => StringList,
  ?'status' => GenericString,
  ?'subnet_id' => GenericString,
  ?'vpc_id' => GenericString,
  ?'worker_type' => WorkerType,
  ?'yarn_endpoint_address' => GenericString,
  ?'zeppelin_remote_spark_interpreter_port' => IntegerValue,
  ) $s = shape()) {
    $this->arguments = $arguments ?? [];
    $this->availability_zone = $availability_zone ?? "";
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->endpoint_name = $endpoint_name ?? "";
    $this->extra_jars_s_3_path = $extra_jars_s_3_path ?? "";
    $this->extra_python_libs_s_3_path = $extra_python_libs_s_3_path ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->glue_version = $glue_version ?? "";
    $this->last_modified_timestamp = $last_modified_timestamp ?? 0;
    $this->last_update_status = $last_update_status ?? "";
    $this->number_of_nodes = $number_of_nodes ?? 0;
    $this->number_of_workers = $number_of_workers ?? 0;
    $this->private_address = $private_address ?? "";
    $this->public_address = $public_address ?? "";
    $this->public_key = $public_key ?? "";
    $this->public_keys = $public_keys ?? [];
    $this->role_arn = $role_arn ?? "";
    $this->security_configuration = $security_configuration ?? "";
    $this->security_group_ids = $security_group_ids ?? [];
    $this->status = $status ?? "";
    $this->subnet_id = $subnet_id ?? "";
    $this->vpc_id = $vpc_id ?? "";
    $this->worker_type = $worker_type ?? "";
    $this->yarn_endpoint_address = $yarn_endpoint_address ?? "";
    $this->zeppelin_remote_spark_interpreter_port = $zeppelin_remote_spark_interpreter_port ?? 0;
  }
}

class DevEndpointCustomLibraries {
  public GenericString $extra_jars_s_3_path;
  public GenericString $extra_python_libs_s_3_path;

  public function __construct(shape(
  ?'extra_jars_s_3_path' => GenericString,
  ?'extra_python_libs_s_3_path' => GenericString,
  ) $s = shape()) {
    $this->extra_jars_s_3_path = $extra_jars_s_3_path ?? "";
    $this->extra_python_libs_s_3_path = $extra_python_libs_s_3_path ?? "";
  }
}

type DevEndpointList = vec<DevEndpoint>;

type DevEndpointNameList = vec<NameString>;

type DevEndpointNames = vec<GenericString>;

class DynamoDBTarget {
  public Path $path;

  public function __construct(shape(
  ?'path' => Path,
  ) $s = shape()) {
    $this->path = $path ?? "";
  }
}

type DynamoDBTargetList = vec<DynamoDBTarget>;

class Edge {
  public NameString $destination_id;
  public NameString $source_id;

  public function __construct(shape(
  ?'destination_id' => NameString,
  ?'source_id' => NameString,
  ) $s = shape()) {
    $this->destination_id = $destination_id ?? "";
    $this->source_id = $source_id ?? "";
  }
}

type EdgeList = vec<Edge>;

class EncryptionAtRest {
  public CatalogEncryptionMode $catalog_encryption_mode;
  public NameString $sse_aws_kms_key_id;

  public function __construct(shape(
  ?'catalog_encryption_mode' => CatalogEncryptionMode,
  ?'sse_aws_kms_key_id' => NameString,
  ) $s = shape()) {
    $this->catalog_encryption_mode = $catalog_encryption_mode ?? "";
    $this->sse_aws_kms_key_id = $sse_aws_kms_key_id ?? "";
  }
}

class EncryptionConfiguration {
  public CloudWatchEncryption $cloud_watch_encryption;
  public JobBookmarksEncryption $job_bookmarks_encryption;
  public S3EncryptionList $s_3_encryption;

  public function __construct(shape(
  ?'cloud_watch_encryption' => CloudWatchEncryption,
  ?'job_bookmarks_encryption' => JobBookmarksEncryption,
  ?'s_3_encryption' => S3EncryptionList,
  ) $s = shape()) {
    $this->cloud_watch_encryption = $cloud_watch_encryption ?? null;
    $this->job_bookmarks_encryption = $job_bookmarks_encryption ?? null;
    $this->s_3_encryption = $s_3_encryption ?? [];
  }
}

class EntityNotFoundException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ErrorByName = dict<NameString, ErrorDetail>;

class ErrorDetail {
  public NameString $error_code;
  public DescriptionString $error_message;

  public function __construct(shape(
  ?'error_code' => NameString,
  ?'error_message' => DescriptionString,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
  }
}

type ErrorString = string;

class EvaluationMetrics {
  public FindMatchesMetrics $find_matches_metrics;
  public TransformType $transform_type;

  public function __construct(shape(
  ?'find_matches_metrics' => FindMatchesMetrics,
  ?'transform_type' => TransformType,
  ) $s = shape()) {
    $this->find_matches_metrics = $find_matches_metrics ?? null;
    $this->transform_type = $transform_type ?? "";
  }
}

class ExecutionProperty {
  public MaxConcurrentRuns $max_concurrent_runs;

  public function __construct(shape(
  ?'max_concurrent_runs' => MaxConcurrentRuns,
  ) $s = shape()) {
    $this->max_concurrent_runs = $max_concurrent_runs ?? 0;
  }
}

type ExecutionTime = int;

type ExistCondition = string;

class ExportLabelsTaskRunProperties {
  public UriString $output_s_3_path;

  public function __construct(shape(
  ?'output_s_3_path' => UriString,
  ) $s = shape()) {
    $this->output_s_3_path = $output_s_3_path ?? "";
  }
}

type FieldType = string;

type FilterString = string;

class FindMatchesMetrics {
  public GenericBoundedDouble $area_under_pr_curve;
  public ConfusionMatrix $confusion_matrix;
  public GenericBoundedDouble $f_1;
  public GenericBoundedDouble $precision;
  public GenericBoundedDouble $recall;

  public function __construct(shape(
  ?'area_under_pr_curve' => GenericBoundedDouble,
  ?'confusion_matrix' => ConfusionMatrix,
  ?'f_1' => GenericBoundedDouble,
  ?'precision' => GenericBoundedDouble,
  ?'recall' => GenericBoundedDouble,
  ) $s = shape()) {
    $this->area_under_pr_curve = $area_under_pr_curve ?? 0.0;
    $this->confusion_matrix = $confusion_matrix ?? null;
    $this->f_1 = $f_1 ?? 0.0;
    $this->precision = $precision ?? 0.0;
    $this->recall = $recall ?? 0.0;
  }
}

class FindMatchesParameters {
  public GenericBoundedDouble $accuracy_cost_tradeoff;
  public NullableBoolean $enforce_provided_labels;
  public GenericBoundedDouble $precision_recall_tradeoff;
  public ColumnNameString $primary_key_column_name;

  public function __construct(shape(
  ?'accuracy_cost_tradeoff' => GenericBoundedDouble,
  ?'enforce_provided_labels' => NullableBoolean,
  ?'precision_recall_tradeoff' => GenericBoundedDouble,
  ?'primary_key_column_name' => ColumnNameString,
  ) $s = shape()) {
    $this->accuracy_cost_tradeoff = $accuracy_cost_tradeoff ?? 0.0;
    $this->enforce_provided_labels = $enforce_provided_labels ?? false;
    $this->precision_recall_tradeoff = $precision_recall_tradeoff ?? 0.0;
    $this->primary_key_column_name = $primary_key_column_name ?? "";
  }
}

class FindMatchesTaskRunProperties {
  public HashString $job_id;
  public NameString $job_name;
  public HashString $job_run_id;

  public function __construct(shape(
  ?'job_id' => HashString,
  ?'job_name' => NameString,
  ?'job_run_id' => HashString,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->job_name = $job_name ?? "";
    $this->job_run_id = $job_run_id ?? "";
  }
}

type FormatString = string;

type GenericBoundedDouble = float;

type GenericMap = dict<GenericString, GenericString>;

type GenericString = string;

class GetCatalogImportStatusRequest {
  public CatalogIdString $catalog_id;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
  }
}

class GetCatalogImportStatusResponse {
  public CatalogImportStatus $import_status;

  public function __construct(shape(
  ?'import_status' => CatalogImportStatus,
  ) $s = shape()) {
    $this->import_status = $import_status ?? null;
  }
}

class GetClassifierRequest {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class GetClassifierResponse {
  public Classifier $classifier;

  public function __construct(shape(
  ?'classifier' => Classifier,
  ) $s = shape()) {
    $this->classifier = $classifier ?? null;
  }
}

class GetClassifiersRequest {
  public PageSize $max_results;
  public Token $next_token;

  public function __construct(shape(
  ?'max_results' => PageSize,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetClassifiersResponse {
  public ClassifierList $classifiers;
  public Token $next_token;

  public function __construct(shape(
  ?'classifiers' => ClassifierList,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->classifiers = $classifiers ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetConnectionRequest {
  public CatalogIdString $catalog_id;
  public boolean $hide_password;
  public NameString $name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'hide_password' => boolean,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->hide_password = $hide_password ?? false;
    $this->name = $name ?? "";
  }
}

class GetConnectionResponse {
  public Connection $connection;

  public function __construct(shape(
  ?'connection' => Connection,
  ) $s = shape()) {
    $this->connection = $connection ?? null;
  }
}

class GetConnectionsFilter {
  public ConnectionType $connection_type;
  public MatchCriteria $match_criteria;

  public function __construct(shape(
  ?'connection_type' => ConnectionType,
  ?'match_criteria' => MatchCriteria,
  ) $s = shape()) {
    $this->connection_type = $connection_type ?? "";
    $this->match_criteria = $match_criteria ?? [];
  }
}

class GetConnectionsRequest {
  public CatalogIdString $catalog_id;
  public GetConnectionsFilter $filter;
  public boolean $hide_password;
  public PageSize $max_results;
  public Token $next_token;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'filter' => GetConnectionsFilter,
  ?'hide_password' => boolean,
  ?'max_results' => PageSize,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->filter = $filter ?? null;
    $this->hide_password = $hide_password ?? false;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetConnectionsResponse {
  public ConnectionList $connection_list;
  public Token $next_token;

  public function __construct(shape(
  ?'connection_list' => ConnectionList,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->connection_list = $connection_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetCrawlerMetricsRequest {
  public CrawlerNameList $crawler_name_list;
  public PageSize $max_results;
  public Token $next_token;

  public function __construct(shape(
  ?'crawler_name_list' => CrawlerNameList,
  ?'max_results' => PageSize,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->crawler_name_list = $crawler_name_list ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetCrawlerMetricsResponse {
  public CrawlerMetricsList $crawler_metrics_list;
  public Token $next_token;

  public function __construct(shape(
  ?'crawler_metrics_list' => CrawlerMetricsList,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->crawler_metrics_list = $crawler_metrics_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetCrawlerRequest {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class GetCrawlerResponse {
  public Crawler $crawler;

  public function __construct(shape(
  ?'crawler' => Crawler,
  ) $s = shape()) {
    $this->crawler = $crawler ?? null;
  }
}

class GetCrawlersRequest {
  public PageSize $max_results;
  public Token $next_token;

  public function __construct(shape(
  ?'max_results' => PageSize,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetCrawlersResponse {
  public CrawlerList $crawlers;
  public Token $next_token;

  public function __construct(shape(
  ?'crawlers' => CrawlerList,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->crawlers = $crawlers ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetDataCatalogEncryptionSettingsRequest {
  public CatalogIdString $catalog_id;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
  }
}

class GetDataCatalogEncryptionSettingsResponse {
  public DataCatalogEncryptionSettings $data_catalog_encryption_settings;

  public function __construct(shape(
  ?'data_catalog_encryption_settings' => DataCatalogEncryptionSettings,
  ) $s = shape()) {
    $this->data_catalog_encryption_settings = $data_catalog_encryption_settings ?? null;
  }
}

class GetDatabaseRequest {
  public CatalogIdString $catalog_id;
  public NameString $name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->name = $name ?? "";
  }
}

class GetDatabaseResponse {
  public Database $database;

  public function __construct(shape(
  ?'database' => Database,
  ) $s = shape()) {
    $this->database = $database ?? null;
  }
}

class GetDatabasesRequest {
  public CatalogIdString $catalog_id;
  public PageSize $max_results;
  public Token $next_token;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'max_results' => PageSize,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetDatabasesResponse {
  public DatabaseList $database_list;
  public Token $next_token;

  public function __construct(shape(
  ?'database_list' => DatabaseList,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->database_list = $database_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetDataflowGraphRequest {
  public PythonScript $python_script;

  public function __construct(shape(
  ?'python_script' => PythonScript,
  ) $s = shape()) {
    $this->python_script = $python_script ?? "";
  }
}

class GetDataflowGraphResponse {
  public DagEdges $dag_edges;
  public DagNodes $dag_nodes;

  public function __construct(shape(
  ?'dag_edges' => DagEdges,
  ?'dag_nodes' => DagNodes,
  ) $s = shape()) {
    $this->dag_edges = $dag_edges ?? [];
    $this->dag_nodes = $dag_nodes ?? [];
  }
}

class GetDevEndpointRequest {
  public GenericString $endpoint_name;

  public function __construct(shape(
  ?'endpoint_name' => GenericString,
  ) $s = shape()) {
    $this->endpoint_name = $endpoint_name ?? "";
  }
}

class GetDevEndpointResponse {
  public DevEndpoint $dev_endpoint;

  public function __construct(shape(
  ?'dev_endpoint' => DevEndpoint,
  ) $s = shape()) {
    $this->dev_endpoint = $dev_endpoint ?? null;
  }
}

class GetDevEndpointsRequest {
  public PageSize $max_results;
  public GenericString $next_token;

  public function __construct(shape(
  ?'max_results' => PageSize,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetDevEndpointsResponse {
  public DevEndpointList $dev_endpoints;
  public GenericString $next_token;

  public function __construct(shape(
  ?'dev_endpoints' => DevEndpointList,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->dev_endpoints = $dev_endpoints ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetJobBookmarkRequest {
  public JobName $job_name;
  public RunId $run_id;

  public function __construct(shape(
  ?'job_name' => JobName,
  ?'run_id' => RunId,
  ) $s = shape()) {
    $this->job_name = $job_name ?? "";
    $this->run_id = $run_id ?? "";
  }
}

class GetJobBookmarkResponse {
  public JobBookmarkEntry $job_bookmark_entry;

  public function __construct(shape(
  ?'job_bookmark_entry' => JobBookmarkEntry,
  ) $s = shape()) {
    $this->job_bookmark_entry = $job_bookmark_entry ?? null;
  }
}

class GetJobRequest {
  public NameString $job_name;

  public function __construct(shape(
  ?'job_name' => NameString,
  ) $s = shape()) {
    $this->job_name = $job_name ?? "";
  }
}

class GetJobResponse {
  public Job $job;

  public function __construct(shape(
  ?'job' => Job,
  ) $s = shape()) {
    $this->job = $job ?? null;
  }
}

class GetJobRunRequest {
  public NameString $job_name;
  public BooleanValue $predecessors_included;
  public IdString $run_id;

  public function __construct(shape(
  ?'job_name' => NameString,
  ?'predecessors_included' => BooleanValue,
  ?'run_id' => IdString,
  ) $s = shape()) {
    $this->job_name = $job_name ?? "";
    $this->predecessors_included = $predecessors_included ?? false;
    $this->run_id = $run_id ?? "";
  }
}

class GetJobRunResponse {
  public JobRun $job_run;

  public function __construct(shape(
  ?'job_run' => JobRun,
  ) $s = shape()) {
    $this->job_run = $job_run ?? null;
  }
}

class GetJobRunsRequest {
  public NameString $job_name;
  public PageSize $max_results;
  public GenericString $next_token;

  public function __construct(shape(
  ?'job_name' => NameString,
  ?'max_results' => PageSize,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->job_name = $job_name ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetJobRunsResponse {
  public JobRunList $job_runs;
  public GenericString $next_token;

  public function __construct(shape(
  ?'job_runs' => JobRunList,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->job_runs = $job_runs ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetJobsRequest {
  public PageSize $max_results;
  public GenericString $next_token;

  public function __construct(shape(
  ?'max_results' => PageSize,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetJobsResponse {
  public JobList $jobs;
  public GenericString $next_token;

  public function __construct(shape(
  ?'jobs' => JobList,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->jobs = $jobs ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetMLTaskRunRequest {
  public HashString $task_run_id;
  public HashString $transform_id;

  public function __construct(shape(
  ?'task_run_id' => HashString,
  ?'transform_id' => HashString,
  ) $s = shape()) {
    $this->task_run_id = $task_run_id ?? "";
    $this->transform_id = $transform_id ?? "";
  }
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

  public function __construct(shape(
  ?'completed_on' => Timestamp,
  ?'error_string' => GenericString,
  ?'execution_time' => ExecutionTime,
  ?'last_modified_on' => Timestamp,
  ?'log_group_name' => GenericString,
  ?'properties' => TaskRunProperties,
  ?'started_on' => Timestamp,
  ?'status' => TaskStatusType,
  ?'task_run_id' => HashString,
  ?'transform_id' => HashString,
  ) $s = shape()) {
    $this->completed_on = $completed_on ?? 0;
    $this->error_string = $error_string ?? "";
    $this->execution_time = $execution_time ?? 0;
    $this->last_modified_on = $last_modified_on ?? 0;
    $this->log_group_name = $log_group_name ?? "";
    $this->properties = $properties ?? null;
    $this->started_on = $started_on ?? 0;
    $this->status = $status ?? "";
    $this->task_run_id = $task_run_id ?? "";
    $this->transform_id = $transform_id ?? "";
  }
}

class GetMLTaskRunsRequest {
  public TaskRunFilterCriteria $filter;
  public PageSize $max_results;
  public PaginationToken $next_token;
  public TaskRunSortCriteria $sort;
  public HashString $transform_id;

  public function __construct(shape(
  ?'filter' => TaskRunFilterCriteria,
  ?'max_results' => PageSize,
  ?'next_token' => PaginationToken,
  ?'sort' => TaskRunSortCriteria,
  ?'transform_id' => HashString,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort = $sort ?? null;
    $this->transform_id = $transform_id ?? "";
  }
}

class GetMLTaskRunsResponse {
  public PaginationToken $next_token;
  public TaskRunList $task_runs;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'task_runs' => TaskRunList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->task_runs = $task_runs ?? [];
  }
}

class GetMLTransformRequest {
  public HashString $transform_id;

  public function __construct(shape(
  ?'transform_id' => HashString,
  ) $s = shape()) {
    $this->transform_id = $transform_id ?? "";
  }
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

  public function __construct(shape(
  ?'created_on' => Timestamp,
  ?'description' => DescriptionString,
  ?'evaluation_metrics' => EvaluationMetrics,
  ?'glue_version' => GlueVersionString,
  ?'input_record_tables' => GlueTables,
  ?'label_count' => LabelCount,
  ?'last_modified_on' => Timestamp,
  ?'max_capacity' => NullableDouble,
  ?'max_retries' => NullableInteger,
  ?'name' => NameString,
  ?'number_of_workers' => NullableInteger,
  ?'parameters' => TransformParameters,
  ?'role' => RoleString,
  ?'schema' => TransformSchema,
  ?'status' => TransformStatusType,
  ?'timeout' => Timeout,
  ?'transform_id' => HashString,
  ?'worker_type' => WorkerType,
  ) $s = shape()) {
    $this->created_on = $created_on ?? 0;
    $this->description = $description ?? "";
    $this->evaluation_metrics = $evaluation_metrics ?? null;
    $this->glue_version = $glue_version ?? "";
    $this->input_record_tables = $input_record_tables ?? [];
    $this->label_count = $label_count ?? 0;
    $this->last_modified_on = $last_modified_on ?? 0;
    $this->max_capacity = $max_capacity ?? 0.0;
    $this->max_retries = $max_retries ?? 0;
    $this->name = $name ?? "";
    $this->number_of_workers = $number_of_workers ?? 0;
    $this->parameters = $parameters ?? null;
    $this->role = $role ?? "";
    $this->schema = $schema ?? [];
    $this->status = $status ?? "";
    $this->timeout = $timeout ?? 0;
    $this->transform_id = $transform_id ?? "";
    $this->worker_type = $worker_type ?? "";
  }
}

class GetMLTransformsRequest {
  public TransformFilterCriteria $filter;
  public PageSize $max_results;
  public PaginationToken $next_token;
  public TransformSortCriteria $sort;

  public function __construct(shape(
  ?'filter' => TransformFilterCriteria,
  ?'max_results' => PageSize,
  ?'next_token' => PaginationToken,
  ?'sort' => TransformSortCriteria,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort = $sort ?? null;
  }
}

class GetMLTransformsResponse {
  public PaginationToken $next_token;
  public TransformList $transforms;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'transforms' => TransformList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->transforms = $transforms ?? [];
  }
}

class GetMappingRequest {
  public Location $location;
  public CatalogEntries $sinks;
  public CatalogEntry $source;

  public function __construct(shape(
  ?'location' => Location,
  ?'sinks' => CatalogEntries,
  ?'source' => CatalogEntry,
  ) $s = shape()) {
    $this->location = $location ?? null;
    $this->sinks = $sinks ?? [];
    $this->source = $source ?? null;
  }
}

class GetMappingResponse {
  public MappingList $mapping;

  public function __construct(shape(
  ?'mapping' => MappingList,
  ) $s = shape()) {
    $this->mapping = $mapping ?? [];
  }
}

class GetPartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public ValueStringList $partition_values;
  public NameString $table_name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'partition_values' => ValueStringList,
  ?'table_name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->partition_values = $partition_values ?? [];
    $this->table_name = $table_name ?? "";
  }
}

class GetPartitionResponse {
  public Partition $partition;

  public function __construct(shape(
  ?'partition' => Partition,
  ) $s = shape()) {
    $this->partition = $partition ?? null;
  }
}

class GetPartitionsRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public PredicateString $expression;
  public PageSize $max_results;
  public Token $next_token;
  public Segment $segment;
  public NameString $table_name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'expression' => PredicateString,
  ?'max_results' => PageSize,
  ?'next_token' => Token,
  ?'segment' => Segment,
  ?'table_name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->expression = $expression ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->segment = $segment ?? null;
    $this->table_name = $table_name ?? "";
  }
}

class GetPartitionsResponse {
  public Token $next_token;
  public PartitionList $partitions;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'partitions' => PartitionList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->partitions = $partitions ?? [];
  }
}

class GetPlanRequest {
  public Language $language;
  public Location $location;
  public MappingList $mapping;
  public CatalogEntries $sinks;
  public CatalogEntry $source;

  public function __construct(shape(
  ?'language' => Language,
  ?'location' => Location,
  ?'mapping' => MappingList,
  ?'sinks' => CatalogEntries,
  ?'source' => CatalogEntry,
  ) $s = shape()) {
    $this->language = $language ?? "";
    $this->location = $location ?? null;
    $this->mapping = $mapping ?? [];
    $this->sinks = $sinks ?? [];
    $this->source = $source ?? null;
  }
}

class GetPlanResponse {
  public PythonScript $python_script;
  public ScalaCode $scala_code;

  public function __construct(shape(
  ?'python_script' => PythonScript,
  ?'scala_code' => ScalaCode,
  ) $s = shape()) {
    $this->python_script = $python_script ?? "";
    $this->scala_code = $scala_code ?? "";
  }
}

class GetResourcePolicyRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetResourcePolicyResponse {
  public Timestamp $create_time;
  public HashString $policy_hash;
  public PolicyJsonString $policy_in_json;
  public Timestamp $update_time;

  public function __construct(shape(
  ?'create_time' => Timestamp,
  ?'policy_hash' => HashString,
  ?'policy_in_json' => PolicyJsonString,
  ?'update_time' => Timestamp,
  ) $s = shape()) {
    $this->create_time = $create_time ?? 0;
    $this->policy_hash = $policy_hash ?? "";
    $this->policy_in_json = $policy_in_json ?? "";
    $this->update_time = $update_time ?? 0;
  }
}

class GetSecurityConfigurationRequest {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class GetSecurityConfigurationResponse {
  public SecurityConfiguration $security_configuration;

  public function __construct(shape(
  ?'security_configuration' => SecurityConfiguration,
  ) $s = shape()) {
    $this->security_configuration = $security_configuration ?? null;
  }
}

class GetSecurityConfigurationsRequest {
  public PageSize $max_results;
  public GenericString $next_token;

  public function __construct(shape(
  ?'max_results' => PageSize,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetSecurityConfigurationsResponse {
  public GenericString $next_token;
  public SecurityConfigurationList $security_configurations;

  public function __construct(shape(
  ?'next_token' => GenericString,
  ?'security_configurations' => SecurityConfigurationList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->security_configurations = $security_configurations ?? [];
  }
}

class GetTableRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->name = $name ?? "";
  }
}

class GetTableResponse {
  public Table $table;

  public function __construct(shape(
  ?'table' => Table,
  ) $s = shape()) {
    $this->table = $table ?? null;
  }
}

class GetTableVersionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $table_name;
  public VersionString $version_id;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'table_name' => NameString,
  ?'version_id' => VersionString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->table_name = $table_name ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class GetTableVersionResponse {
  public TableVersion $table_version;

  public function __construct(shape(
  ?'table_version' => TableVersion,
  ) $s = shape()) {
    $this->table_version = $table_version ?? null;
  }
}

type GetTableVersionsList = vec<TableVersion>;

class GetTableVersionsRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public PageSize $max_results;
  public Token $next_token;
  public NameString $table_name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'max_results' => PageSize,
  ?'next_token' => Token,
  ?'table_name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->table_name = $table_name ?? "";
  }
}

class GetTableVersionsResponse {
  public Token $next_token;
  public GetTableVersionsList $table_versions;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'table_versions' => GetTableVersionsList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->table_versions = $table_versions ?? [];
  }
}

class GetTablesRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public FilterString $expression;
  public PageSize $max_results;
  public Token $next_token;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'expression' => FilterString,
  ?'max_results' => PageSize,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->expression = $expression ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetTablesResponse {
  public Token $next_token;
  public TableList $table_list;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'table_list' => TableList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->table_list = $table_list ?? [];
  }
}

class GetTagsRequest {
  public GlueResourceArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => GlueResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class GetTagsResponse {
  public TagsMap $tags;

  public function __construct(shape(
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class GetTriggerRequest {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class GetTriggerResponse {
  public Trigger $trigger;

  public function __construct(shape(
  ?'trigger' => Trigger,
  ) $s = shape()) {
    $this->trigger = $trigger ?? null;
  }
}

class GetTriggersRequest {
  public NameString $dependent_job_name;
  public PageSize $max_results;
  public GenericString $next_token;

  public function __construct(shape(
  ?'dependent_job_name' => NameString,
  ?'max_results' => PageSize,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->dependent_job_name = $dependent_job_name ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class GetTriggersResponse {
  public GenericString $next_token;
  public TriggerList $triggers;

  public function __construct(shape(
  ?'next_token' => GenericString,
  ?'triggers' => TriggerList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->triggers = $triggers ?? [];
  }
}

class GetUserDefinedFunctionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public NameString $function_name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'function_name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->function_name = $function_name ?? "";
  }
}

class GetUserDefinedFunctionResponse {
  public UserDefinedFunction $user_defined_function;

  public function __construct(shape(
  ?'user_defined_function' => UserDefinedFunction,
  ) $s = shape()) {
    $this->user_defined_function = $user_defined_function ?? null;
  }
}

class GetUserDefinedFunctionsRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public PageSize $max_results;
  public Token $next_token;
  public NameString $pattern;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'max_results' => PageSize,
  ?'next_token' => Token,
  ?'pattern' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->pattern = $pattern ?? "";
  }
}

class GetUserDefinedFunctionsResponse {
  public Token $next_token;
  public UserDefinedFunctionList $user_defined_functions;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'user_defined_functions' => UserDefinedFunctionList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->user_defined_functions = $user_defined_functions ?? [];
  }
}

class GetWorkflowRequest {
  public NullableBoolean $include_graph;
  public NameString $name;

  public function __construct(shape(
  ?'include_graph' => NullableBoolean,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->include_graph = $include_graph ?? false;
    $this->name = $name ?? "";
  }
}

class GetWorkflowResponse {
  public Workflow $workflow;

  public function __construct(shape(
  ?'workflow' => Workflow,
  ) $s = shape()) {
    $this->workflow = $workflow ?? null;
  }
}

class GetWorkflowRunPropertiesRequest {
  public NameString $name;
  public IdString $run_id;

  public function __construct(shape(
  ?'name' => NameString,
  ?'run_id' => IdString,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->run_id = $run_id ?? "";
  }
}

class GetWorkflowRunPropertiesResponse {
  public WorkflowRunProperties $run_properties;

  public function __construct(shape(
  ?'run_properties' => WorkflowRunProperties,
  ) $s = shape()) {
    $this->run_properties = $run_properties ?? [];
  }
}

class GetWorkflowRunRequest {
  public NullableBoolean $include_graph;
  public NameString $name;
  public IdString $run_id;

  public function __construct(shape(
  ?'include_graph' => NullableBoolean,
  ?'name' => NameString,
  ?'run_id' => IdString,
  ) $s = shape()) {
    $this->include_graph = $include_graph ?? false;
    $this->name = $name ?? "";
    $this->run_id = $run_id ?? "";
  }
}

class GetWorkflowRunResponse {
  public WorkflowRun $run;

  public function __construct(shape(
  ?'run' => WorkflowRun,
  ) $s = shape()) {
    $this->run = $run ?? null;
  }
}

class GetWorkflowRunsRequest {
  public NullableBoolean $include_graph;
  public PageSize $max_results;
  public NameString $name;
  public GenericString $next_token;

  public function __construct(shape(
  ?'include_graph' => NullableBoolean,
  ?'max_results' => PageSize,
  ?'name' => NameString,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->include_graph = $include_graph ?? false;
    $this->max_results = $max_results ?? 0;
    $this->name = $name ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class GetWorkflowRunsResponse {
  public GenericString $next_token;
  public WorkflowRuns $runs;

  public function __construct(shape(
  ?'next_token' => GenericString,
  ?'runs' => WorkflowRuns,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->runs = $runs ?? [];
  }
}

class GlueEncryptionException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type GlueResourceArn = string;

class GlueTable {
  public NameString $catalog_id;
  public NameString $connection_name;
  public NameString $database_name;
  public NameString $table_name;

  public function __construct(shape(
  ?'catalog_id' => NameString,
  ?'connection_name' => NameString,
  ?'database_name' => NameString,
  ?'table_name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->connection_name = $connection_name ?? "";
    $this->database_name = $database_name ?? "";
    $this->table_name = $table_name ?? "";
  }
}

type GlueTables = vec<GlueTable>;

type GlueVersionString = string;

class GrokClassifier {
  public Classification $classification;
  public Timestamp $creation_time;
  public CustomPatterns $custom_patterns;
  public GrokPattern $grok_pattern;
  public Timestamp $last_updated;
  public NameString $name;
  public VersionId $version;

  public function __construct(shape(
  ?'classification' => Classification,
  ?'creation_time' => Timestamp,
  ?'custom_patterns' => CustomPatterns,
  ?'grok_pattern' => GrokPattern,
  ?'last_updated' => Timestamp,
  ?'name' => NameString,
  ?'version' => VersionId,
  ) $s = shape()) {
    $this->classification = $classification ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->custom_patterns = $custom_patterns ?? "";
    $this->grok_pattern = $grok_pattern ?? "";
    $this->last_updated = $last_updated ?? 0;
    $this->name = $name ?? "";
    $this->version = $version ?? 0;
  }
}

type GrokPattern = string;

type HashString = string;

type IdString = string;

class IdempotentParameterMismatchException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ImportCatalogToGlueRequest {
  public CatalogIdString $catalog_id;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
  }
}

class ImportCatalogToGlueResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ImportLabelsTaskRunProperties {
  public UriString $input_s_3_path;
  public ReplaceBoolean $replace;

  public function __construct(shape(
  ?'input_s_3_path' => UriString,
  ?'replace' => ReplaceBoolean,
  ) $s = shape()) {
    $this->input_s_3_path = $input_s_3_path ?? "";
    $this->replace = $replace ?? false;
  }
}

type Integer = int;

type IntegerFlag = int;

type IntegerValue = int;

class InternalServiceException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidInputException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class JdbcTarget {
  public ConnectionName $connection_name;
  public PathList $exclusions;
  public Path $path;

  public function __construct(shape(
  ?'connection_name' => ConnectionName,
  ?'exclusions' => PathList,
  ?'path' => Path,
  ) $s = shape()) {
    $this->connection_name = $connection_name ?? "";
    $this->exclusions = $exclusions ?? [];
    $this->path = $path ?? "";
  }
}

type JdbcTargetList = vec<JdbcTarget>;

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

  public function __construct(shape(
  ?'allocated_capacity' => IntegerValue,
  ?'command' => JobCommand,
  ?'connections' => ConnectionsList,
  ?'created_on' => TimestampValue,
  ?'default_arguments' => GenericMap,
  ?'description' => DescriptionString,
  ?'execution_property' => ExecutionProperty,
  ?'glue_version' => GlueVersionString,
  ?'last_modified_on' => TimestampValue,
  ?'log_uri' => UriString,
  ?'max_capacity' => NullableDouble,
  ?'max_retries' => MaxRetries,
  ?'name' => NameString,
  ?'non_overridable_arguments' => GenericMap,
  ?'notification_property' => NotificationProperty,
  ?'number_of_workers' => NullableInteger,
  ?'role' => RoleString,
  ?'security_configuration' => NameString,
  ?'timeout' => Timeout,
  ?'worker_type' => WorkerType,
  ) $s = shape()) {
    $this->allocated_capacity = $allocated_capacity ?? 0;
    $this->command = $command ?? null;
    $this->connections = $connections ?? null;
    $this->created_on = $created_on ?? 0;
    $this->default_arguments = $default_arguments ?? [];
    $this->description = $description ?? "";
    $this->execution_property = $execution_property ?? null;
    $this->glue_version = $glue_version ?? "";
    $this->last_modified_on = $last_modified_on ?? 0;
    $this->log_uri = $log_uri ?? "";
    $this->max_capacity = $max_capacity ?? 0.0;
    $this->max_retries = $max_retries ?? 0;
    $this->name = $name ?? "";
    $this->non_overridable_arguments = $non_overridable_arguments ?? [];
    $this->notification_property = $notification_property ?? null;
    $this->number_of_workers = $number_of_workers ?? 0;
    $this->role = $role ?? "";
    $this->security_configuration = $security_configuration ?? "";
    $this->timeout = $timeout ?? 0;
    $this->worker_type = $worker_type ?? "";
  }
}

class JobBookmarkEntry {
  public IntegerValue $attempt;
  public JsonValue $job_bookmark;
  public JobName $job_name;
  public RunId $previous_run_id;
  public IntegerValue $run;
  public RunId $run_id;
  public IntegerValue $version;

  public function __construct(shape(
  ?'attempt' => IntegerValue,
  ?'job_bookmark' => JsonValue,
  ?'job_name' => JobName,
  ?'previous_run_id' => RunId,
  ?'run' => IntegerValue,
  ?'run_id' => RunId,
  ?'version' => IntegerValue,
  ) $s = shape()) {
    $this->attempt = $attempt ?? 0;
    $this->job_bookmark = $job_bookmark ?? "";
    $this->job_name = $job_name ?? "";
    $this->previous_run_id = $previous_run_id ?? "";
    $this->run = $run ?? 0;
    $this->run_id = $run_id ?? "";
    $this->version = $version ?? 0;
  }
}

class JobBookmarksEncryption {
  public JobBookmarksEncryptionMode $job_bookmarks_encryption_mode;
  public KmsKeyArn $kms_key_arn;

  public function __construct(shape(
  ?'job_bookmarks_encryption_mode' => JobBookmarksEncryptionMode,
  ?'kms_key_arn' => KmsKeyArn,
  ) $s = shape()) {
    $this->job_bookmarks_encryption_mode = $job_bookmarks_encryption_mode ?? "";
    $this->kms_key_arn = $kms_key_arn ?? "";
  }
}

type JobBookmarksEncryptionMode = string;

class JobCommand {
  public GenericString $name;
  public PythonVersionString $python_version;
  public ScriptLocationString $script_location;

  public function __construct(shape(
  ?'name' => GenericString,
  ?'python_version' => PythonVersionString,
  ?'script_location' => ScriptLocationString,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->python_version = $python_version ?? "";
    $this->script_location = $script_location ?? "";
  }
}

type JobList = vec<Job>;

type JobName = string;

type JobNameList = vec<NameString>;

class JobNodeDetails {
  public JobRunList $job_runs;

  public function __construct(shape(
  ?'job_runs' => JobRunList,
  ) $s = shape()) {
    $this->job_runs = $job_runs ?? [];
  }
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

  public function __construct(shape(
  ?'allocated_capacity' => IntegerValue,
  ?'arguments' => GenericMap,
  ?'attempt' => AttemptCount,
  ?'completed_on' => TimestampValue,
  ?'error_message' => ErrorString,
  ?'execution_time' => ExecutionTime,
  ?'glue_version' => GlueVersionString,
  ?'id' => IdString,
  ?'job_name' => NameString,
  ?'job_run_state' => JobRunState,
  ?'last_modified_on' => TimestampValue,
  ?'log_group_name' => GenericString,
  ?'max_capacity' => NullableDouble,
  ?'notification_property' => NotificationProperty,
  ?'number_of_workers' => NullableInteger,
  ?'predecessor_runs' => PredecessorList,
  ?'previous_run_id' => IdString,
  ?'security_configuration' => NameString,
  ?'started_on' => TimestampValue,
  ?'timeout' => Timeout,
  ?'trigger_name' => NameString,
  ?'worker_type' => WorkerType,
  ) $s = shape()) {
    $this->allocated_capacity = $allocated_capacity ?? 0;
    $this->arguments = $arguments ?? [];
    $this->attempt = $attempt ?? 0;
    $this->completed_on = $completed_on ?? 0;
    $this->error_message = $error_message ?? "";
    $this->execution_time = $execution_time ?? 0;
    $this->glue_version = $glue_version ?? "";
    $this->id = $id ?? "";
    $this->job_name = $job_name ?? "";
    $this->job_run_state = $job_run_state ?? "";
    $this->last_modified_on = $last_modified_on ?? 0;
    $this->log_group_name = $log_group_name ?? "";
    $this->max_capacity = $max_capacity ?? 0.0;
    $this->notification_property = $notification_property ?? null;
    $this->number_of_workers = $number_of_workers ?? 0;
    $this->predecessor_runs = $predecessor_runs ?? [];
    $this->previous_run_id = $previous_run_id ?? "";
    $this->security_configuration = $security_configuration ?? "";
    $this->started_on = $started_on ?? 0;
    $this->timeout = $timeout ?? 0;
    $this->trigger_name = $trigger_name ?? "";
    $this->worker_type = $worker_type ?? "";
  }
}

type JobRunList = vec<JobRun>;

type JobRunState = string;

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

  public function __construct(shape(
  ?'allocated_capacity' => IntegerValue,
  ?'command' => JobCommand,
  ?'connections' => ConnectionsList,
  ?'default_arguments' => GenericMap,
  ?'description' => DescriptionString,
  ?'execution_property' => ExecutionProperty,
  ?'glue_version' => GlueVersionString,
  ?'log_uri' => UriString,
  ?'max_capacity' => NullableDouble,
  ?'max_retries' => MaxRetries,
  ?'non_overridable_arguments' => GenericMap,
  ?'notification_property' => NotificationProperty,
  ?'number_of_workers' => NullableInteger,
  ?'role' => RoleString,
  ?'security_configuration' => NameString,
  ?'timeout' => Timeout,
  ?'worker_type' => WorkerType,
  ) $s = shape()) {
    $this->allocated_capacity = $allocated_capacity ?? 0;
    $this->command = $command ?? null;
    $this->connections = $connections ?? null;
    $this->default_arguments = $default_arguments ?? [];
    $this->description = $description ?? "";
    $this->execution_property = $execution_property ?? null;
    $this->glue_version = $glue_version ?? "";
    $this->log_uri = $log_uri ?? "";
    $this->max_capacity = $max_capacity ?? 0.0;
    $this->max_retries = $max_retries ?? 0;
    $this->non_overridable_arguments = $non_overridable_arguments ?? [];
    $this->notification_property = $notification_property ?? null;
    $this->number_of_workers = $number_of_workers ?? 0;
    $this->role = $role ?? "";
    $this->security_configuration = $security_configuration ?? "";
    $this->timeout = $timeout ?? 0;
    $this->worker_type = $worker_type ?? "";
  }
}

class JsonClassifier {
  public Timestamp $creation_time;
  public JsonPath $json_path;
  public Timestamp $last_updated;
  public NameString $name;
  public VersionId $version;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'json_path' => JsonPath,
  ?'last_updated' => Timestamp,
  ?'name' => NameString,
  ?'version' => VersionId,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->json_path = $json_path ?? "";
    $this->last_updated = $last_updated ?? 0;
    $this->name = $name ?? "";
    $this->version = $version ?? 0;
  }
}

type JsonPath = string;

type JsonValue = string;

type KeyString = string;

type KmsKeyArn = string;

type LabelCount = int;

class LabelingSetGenerationTaskRunProperties {
  public UriString $output_s_3_path;

  public function __construct(shape(
  ?'output_s_3_path' => UriString,
  ) $s = shape()) {
    $this->output_s_3_path = $output_s_3_path ?? "";
  }
}

type Language = string;

class LastCrawlInfo {
  public DescriptionString $error_message;
  public LogGroup $log_group;
  public LogStream $log_stream;
  public MessagePrefix $message_prefix;
  public Timestamp $start_time;
  public LastCrawlStatus $status;

  public function __construct(shape(
  ?'error_message' => DescriptionString,
  ?'log_group' => LogGroup,
  ?'log_stream' => LogStream,
  ?'message_prefix' => MessagePrefix,
  ?'start_time' => Timestamp,
  ?'status' => LastCrawlStatus,
  ) $s = shape()) {
    $this->error_message = $error_message ?? "";
    $this->log_group = $log_group ?? "";
    $this->log_stream = $log_stream ?? "";
    $this->message_prefix = $message_prefix ?? "";
    $this->start_time = $start_time ?? 0;
    $this->status = $status ?? "";
  }
}

type LastCrawlStatus = string;

class ListCrawlersRequest {
  public PageSize $max_results;
  public Token $next_token;
  public TagsMap $tags;

  public function __construct(shape(
  ?'max_results' => PageSize,
  ?'next_token' => Token,
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? [];
  }
}

class ListCrawlersResponse {
  public CrawlerNameList $crawler_names;
  public Token $next_token;

  public function __construct(shape(
  ?'crawler_names' => CrawlerNameList,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->crawler_names = $crawler_names ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDevEndpointsRequest {
  public PageSize $max_results;
  public GenericString $next_token;
  public TagsMap $tags;

  public function __construct(shape(
  ?'max_results' => PageSize,
  ?'next_token' => GenericString,
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? [];
  }
}

class ListDevEndpointsResponse {
  public DevEndpointNameList $dev_endpoint_names;
  public GenericString $next_token;

  public function __construct(shape(
  ?'dev_endpoint_names' => DevEndpointNameList,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->dev_endpoint_names = $dev_endpoint_names ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListJobsRequest {
  public PageSize $max_results;
  public GenericString $next_token;
  public TagsMap $tags;

  public function __construct(shape(
  ?'max_results' => PageSize,
  ?'next_token' => GenericString,
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? [];
  }
}

class ListJobsResponse {
  public JobNameList $job_names;
  public GenericString $next_token;

  public function __construct(shape(
  ?'job_names' => JobNameList,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->job_names = $job_names ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListMLTransformsRequest {
  public TransformFilterCriteria $filter;
  public PageSize $max_results;
  public PaginationToken $next_token;
  public TransformSortCriteria $sort;
  public TagsMap $tags;

  public function __construct(shape(
  ?'filter' => TransformFilterCriteria,
  ?'max_results' => PageSize,
  ?'next_token' => PaginationToken,
  ?'sort' => TransformSortCriteria,
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort = $sort ?? null;
    $this->tags = $tags ?? [];
  }
}

class ListMLTransformsResponse {
  public PaginationToken $next_token;
  public TransformIdList $transform_ids;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'transform_ids' => TransformIdList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->transform_ids = $transform_ids ?? [];
  }
}

class ListTriggersRequest {
  public NameString $dependent_job_name;
  public PageSize $max_results;
  public GenericString $next_token;
  public TagsMap $tags;

  public function __construct(shape(
  ?'dependent_job_name' => NameString,
  ?'max_results' => PageSize,
  ?'next_token' => GenericString,
  ?'tags' => TagsMap,
  ) $s = shape()) {
    $this->dependent_job_name = $dependent_job_name ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? [];
  }
}

class ListTriggersResponse {
  public GenericString $next_token;
  public TriggerNameList $trigger_names;

  public function __construct(shape(
  ?'next_token' => GenericString,
  ?'trigger_names' => TriggerNameList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->trigger_names = $trigger_names ?? [];
  }
}

class ListWorkflowsRequest {
  public PageSize $max_results;
  public GenericString $next_token;

  public function __construct(shape(
  ?'max_results' => PageSize,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListWorkflowsResponse {
  public GenericString $next_token;
  public WorkflowNames $workflows;

  public function __construct(shape(
  ?'next_token' => GenericString,
  ?'workflows' => WorkflowNames,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->workflows = $workflows ?? [];
  }
}

class Location {
  public CodeGenNodeArgs $dynamo_db;
  public CodeGenNodeArgs $jdbc;
  public CodeGenNodeArgs $s_3;

  public function __construct(shape(
  ?'dynamo_db' => CodeGenNodeArgs,
  ?'jdbc' => CodeGenNodeArgs,
  ?'s_3' => CodeGenNodeArgs,
  ) $s = shape()) {
    $this->dynamo_db = $dynamo_db ?? [];
    $this->jdbc = $jdbc ?? [];
    $this->s_3 = $s_3 ?? [];
  }
}

type LocationMap = dict<ColumnValuesString, ColumnValuesString>;

type LocationString = string;

type LogGroup = string;

type LogStream = string;

type Logical = string;

type LogicalOperator = string;

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

  public function __construct(shape(
  ?'created_on' => Timestamp,
  ?'description' => DescriptionString,
  ?'evaluation_metrics' => EvaluationMetrics,
  ?'glue_version' => GlueVersionString,
  ?'input_record_tables' => GlueTables,
  ?'label_count' => LabelCount,
  ?'last_modified_on' => Timestamp,
  ?'max_capacity' => NullableDouble,
  ?'max_retries' => NullableInteger,
  ?'name' => NameString,
  ?'number_of_workers' => NullableInteger,
  ?'parameters' => TransformParameters,
  ?'role' => RoleString,
  ?'schema' => TransformSchema,
  ?'status' => TransformStatusType,
  ?'timeout' => Timeout,
  ?'transform_id' => HashString,
  ?'worker_type' => WorkerType,
  ) $s = shape()) {
    $this->created_on = $created_on ?? 0;
    $this->description = $description ?? "";
    $this->evaluation_metrics = $evaluation_metrics ?? null;
    $this->glue_version = $glue_version ?? "";
    $this->input_record_tables = $input_record_tables ?? [];
    $this->label_count = $label_count ?? 0;
    $this->last_modified_on = $last_modified_on ?? 0;
    $this->max_capacity = $max_capacity ?? 0.0;
    $this->max_retries = $max_retries ?? 0;
    $this->name = $name ?? "";
    $this->number_of_workers = $number_of_workers ?? 0;
    $this->parameters = $parameters ?? null;
    $this->role = $role ?? "";
    $this->schema = $schema ?? [];
    $this->status = $status ?? "";
    $this->timeout = $timeout ?? 0;
    $this->transform_id = $transform_id ?? "";
    $this->worker_type = $worker_type ?? "";
  }
}

class MLTransformNotReadyException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type MapValue = dict<GenericString, GenericString>;

class MappingEntry {
  public SchemaPathString $source_path;
  public TableName $source_table;
  public FieldType $source_type;
  public SchemaPathString $target_path;
  public TableName $target_table;
  public FieldType $target_type;

  public function __construct(shape(
  ?'source_path' => SchemaPathString,
  ?'source_table' => TableName,
  ?'source_type' => FieldType,
  ?'target_path' => SchemaPathString,
  ?'target_table' => TableName,
  ?'target_type' => FieldType,
  ) $s = shape()) {
    $this->source_path = $source_path ?? "";
    $this->source_table = $source_table ?? "";
    $this->source_type = $source_type ?? "";
    $this->target_path = $target_path ?? "";
    $this->target_table = $target_table ?? "";
    $this->target_type = $target_type ?? "";
  }
}

type MappingList = vec<MappingEntry>;

type MatchCriteria = vec<NameString>;

type MaxConcurrentRuns = int;

type MaxRetries = int;

type MessagePrefix = string;

type MessageString = string;

type MillisecondsCount = int;

type NameString = string;

type NameStringList = vec<NameString>;

class NoScheduleException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Node {
  public CrawlerNodeDetails $crawler_details;
  public JobNodeDetails $job_details;
  public NameString $name;
  public TriggerNodeDetails $trigger_details;
  public NodeType $type;
  public NameString $unique_id;

  public function __construct(shape(
  ?'crawler_details' => CrawlerNodeDetails,
  ?'job_details' => JobNodeDetails,
  ?'name' => NameString,
  ?'trigger_details' => TriggerNodeDetails,
  ?'type' => NodeType,
  ?'unique_id' => NameString,
  ) $s = shape()) {
    $this->crawler_details = $crawler_details ?? null;
    $this->job_details = $job_details ?? null;
    $this->name = $name ?? "";
    $this->trigger_details = $trigger_details ?? null;
    $this->type = $type ?? "";
    $this->unique_id = $unique_id ?? "";
  }
}

type NodeList = vec<Node>;

type NodeType = string;

type NonNegativeDouble = float;

type NonNegativeInteger = int;

class NotificationProperty {
  public NotifyDelayAfter $notify_delay_after;

  public function __construct(shape(
  ?'notify_delay_after' => NotifyDelayAfter,
  ) $s = shape()) {
    $this->notify_delay_after = $notify_delay_after ?? 0;
  }
}

type NotifyDelayAfter = int;

type NullableBoolean = bool;

type NullableDouble = float;

type NullableInteger = int;

class OperationTimeoutException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type OrchestrationStringList = vec<GenericString>;

class Order {
  public NameString $column;
  public IntegerFlag $sort_order;

  public function __construct(shape(
  ?'column' => NameString,
  ?'sort_order' => IntegerFlag,
  ) $s = shape()) {
    $this->column = $column ?? "";
    $this->sort_order = $sort_order ?? 0;
  }
}

type OrderList = vec<Order>;

type PageSize = int;

type PaginationToken = string;

type ParametersMap = dict<KeyString, ParametersMapValue>;

type ParametersMapValue = string;

class Partition {
  public Timestamp $creation_time;
  public NameString $database_name;
  public Timestamp $last_access_time;
  public Timestamp $last_analyzed_time;
  public ParametersMap $parameters;
  public StorageDescriptor $storage_descriptor;
  public NameString $table_name;
  public ValueStringList $values;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'database_name' => NameString,
  ?'last_access_time' => Timestamp,
  ?'last_analyzed_time' => Timestamp,
  ?'parameters' => ParametersMap,
  ?'storage_descriptor' => StorageDescriptor,
  ?'table_name' => NameString,
  ?'values' => ValueStringList,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->database_name = $database_name ?? "";
    $this->last_access_time = $last_access_time ?? 0;
    $this->last_analyzed_time = $last_analyzed_time ?? 0;
    $this->parameters = $parameters ?? [];
    $this->storage_descriptor = $storage_descriptor ?? null;
    $this->table_name = $table_name ?? "";
    $this->values = $values ?? [];
  }
}

class PartitionError {
  public ErrorDetail $error_detail;
  public ValueStringList $partition_values;

  public function __construct(shape(
  ?'error_detail' => ErrorDetail,
  ?'partition_values' => ValueStringList,
  ) $s = shape()) {
    $this->error_detail = $error_detail ?? null;
    $this->partition_values = $partition_values ?? [];
  }
}

type PartitionErrors = vec<PartitionError>;

class PartitionInput {
  public Timestamp $last_access_time;
  public Timestamp $last_analyzed_time;
  public ParametersMap $parameters;
  public StorageDescriptor $storage_descriptor;
  public ValueStringList $values;

  public function __construct(shape(
  ?'last_access_time' => Timestamp,
  ?'last_analyzed_time' => Timestamp,
  ?'parameters' => ParametersMap,
  ?'storage_descriptor' => StorageDescriptor,
  ?'values' => ValueStringList,
  ) $s = shape()) {
    $this->last_access_time = $last_access_time ?? 0;
    $this->last_analyzed_time = $last_analyzed_time ?? 0;
    $this->parameters = $parameters ?? [];
    $this->storage_descriptor = $storage_descriptor ?? null;
    $this->values = $values ?? [];
  }
}

type PartitionInputList = vec<PartitionInput>;

type PartitionList = vec<Partition>;

class PartitionValueList {
  public ValueStringList $values;

  public function __construct(shape(
  ?'values' => ValueStringList,
  ) $s = shape()) {
    $this->values = $values ?? [];
  }
}

type Path = string;

type PathList = vec<Path>;

type Permission = string;

type PermissionList = vec<Permission>;

class PhysicalConnectionRequirements {
  public NameString $availability_zone;
  public SecurityGroupIdList $security_group_id_list;
  public NameString $subnet_id;

  public function __construct(shape(
  ?'availability_zone' => NameString,
  ?'security_group_id_list' => SecurityGroupIdList,
  ?'subnet_id' => NameString,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? "";
    $this->security_group_id_list = $security_group_id_list ?? [];
    $this->subnet_id = $subnet_id ?? "";
  }
}

type PolicyJsonString = string;

class Predecessor {
  public NameString $job_name;
  public IdString $run_id;

  public function __construct(shape(
  ?'job_name' => NameString,
  ?'run_id' => IdString,
  ) $s = shape()) {
    $this->job_name = $job_name ?? "";
    $this->run_id = $run_id ?? "";
  }
}

type PredecessorList = vec<Predecessor>;

class Predicate {
  public ConditionList $conditions;
  public Logical $logical;

  public function __construct(shape(
  ?'conditions' => ConditionList,
  ?'logical' => Logical,
  ) $s = shape()) {
    $this->conditions = $conditions ?? [];
    $this->logical = $logical ?? "";
  }
}

type PredicateString = string;

class PrincipalPermissions {
  public PermissionList $permissions;
  public DataLakePrincipal $principal;

  public function __construct(shape(
  ?'permissions' => PermissionList,
  ?'principal' => DataLakePrincipal,
  ) $s = shape()) {
    $this->permissions = $permissions ?? [];
    $this->principal = $principal ?? null;
  }
}

type PrincipalPermissionsList = vec<PrincipalPermissions>;

type PrincipalType = string;

class PropertyPredicate {
  public Comparator $comparator;
  public ValueString $key;
  public ValueString $value;

  public function __construct(shape(
  ?'comparator' => Comparator,
  ?'key' => ValueString,
  ?'value' => ValueString,
  ) $s = shape()) {
    $this->comparator = $comparator ?? "";
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type PublicKeysList = vec<GenericString>;

class PutDataCatalogEncryptionSettingsRequest {
  public CatalogIdString $catalog_id;
  public DataCatalogEncryptionSettings $data_catalog_encryption_settings;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'data_catalog_encryption_settings' => DataCatalogEncryptionSettings,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->data_catalog_encryption_settings = $data_catalog_encryption_settings ?? null;
  }
}

class PutDataCatalogEncryptionSettingsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutResourcePolicyRequest {
  public ExistCondition $policy_exists_condition;
  public HashString $policy_hash_condition;
  public PolicyJsonString $policy_in_json;

  public function __construct(shape(
  ?'policy_exists_condition' => ExistCondition,
  ?'policy_hash_condition' => HashString,
  ?'policy_in_json' => PolicyJsonString,
  ) $s = shape()) {
    $this->policy_exists_condition = $policy_exists_condition ?? "";
    $this->policy_hash_condition = $policy_hash_condition ?? "";
    $this->policy_in_json = $policy_in_json ?? "";
  }
}

class PutResourcePolicyResponse {
  public HashString $policy_hash;

  public function __construct(shape(
  ?'policy_hash' => HashString,
  ) $s = shape()) {
    $this->policy_hash = $policy_hash ?? "";
  }
}

class PutWorkflowRunPropertiesRequest {
  public NameString $name;
  public IdString $run_id;
  public WorkflowRunProperties $run_properties;

  public function __construct(shape(
  ?'name' => NameString,
  ?'run_id' => IdString,
  ?'run_properties' => WorkflowRunProperties,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->run_id = $run_id ?? "";
    $this->run_properties = $run_properties ?? [];
  }
}

class PutWorkflowRunPropertiesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type PythonScript = string;

type PythonVersionString = string;

type RecordsCount = int;

type ReplaceBoolean = bool;

class ResetJobBookmarkRequest {
  public JobName $job_name;
  public RunId $run_id;

  public function __construct(shape(
  ?'job_name' => JobName,
  ?'run_id' => RunId,
  ) $s = shape()) {
    $this->job_name = $job_name ?? "";
    $this->run_id = $run_id ?? "";
  }
}

class ResetJobBookmarkResponse {
  public JobBookmarkEntry $job_bookmark_entry;

  public function __construct(shape(
  ?'job_bookmark_entry' => JobBookmarkEntry,
  ) $s = shape()) {
    $this->job_bookmark_entry = $job_bookmark_entry ?? null;
  }
}

class ResourceNumberLimitExceededException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResourceType = string;

class ResourceUri {
  public ResourceType $resource_type;
  public URI $uri;

  public function __construct(shape(
  ?'resource_type' => ResourceType,
  ?'uri' => URI,
  ) $s = shape()) {
    $this->resource_type = $resource_type ?? "";
    $this->uri = $uri ?? "";
  }
}

type ResourceUriList = vec<ResourceUri>;

type Role = string;

type RoleArn = string;

type RoleString = string;

type RowTag = string;

type RunId = string;

class S3Encryption {
  public KmsKeyArn $kms_key_arn;
  public S3EncryptionMode $s_3_encryption_mode;

  public function __construct(shape(
  ?'kms_key_arn' => KmsKeyArn,
  ?'s_3_encryption_mode' => S3EncryptionMode,
  ) $s = shape()) {
    $this->kms_key_arn = $kms_key_arn ?? "";
    $this->s_3_encryption_mode = $s_3_encryption_mode ?? "";
  }
}

type S3EncryptionList = vec<S3Encryption>;

type S3EncryptionMode = string;

class S3Target {
  public PathList $exclusions;
  public Path $path;

  public function __construct(shape(
  ?'exclusions' => PathList,
  ?'path' => Path,
  ) $s = shape()) {
    $this->exclusions = $exclusions ?? [];
    $this->path = $path ?? "";
  }
}

type S3TargetList = vec<S3Target>;

type ScalaCode = string;

class Schedule {
  public CronExpression $schedule_expression;
  public ScheduleState $state;

  public function __construct(shape(
  ?'schedule_expression' => CronExpression,
  ?'state' => ScheduleState,
  ) $s = shape()) {
    $this->schedule_expression = $schedule_expression ?? "";
    $this->state = $state ?? "";
  }
}

type ScheduleState = string;

class SchedulerNotRunningException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class SchedulerRunningException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class SchedulerTransitioningException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class SchemaChangePolicy {
  public DeleteBehavior $delete_behavior;
  public UpdateBehavior $update_behavior;

  public function __construct(shape(
  ?'delete_behavior' => DeleteBehavior,
  ?'update_behavior' => UpdateBehavior,
  ) $s = shape()) {
    $this->delete_behavior = $delete_behavior ?? "";
    $this->update_behavior = $update_behavior ?? "";
  }
}

class SchemaColumn {
  public ColumnTypeString $data_type;
  public ColumnNameString $name;

  public function __construct(shape(
  ?'data_type' => ColumnTypeString,
  ?'name' => ColumnNameString,
  ) $s = shape()) {
    $this->data_type = $data_type ?? "";
    $this->name = $name ?? "";
  }
}

type SchemaPathString = string;

type ScriptLocationString = string;

type SearchPropertyPredicates = vec<PropertyPredicate>;

class SearchTablesRequest {
  public CatalogIdString $catalog_id;
  public SearchPropertyPredicates $filters;
  public PageSize $max_results;
  public Token $next_token;
  public ValueString $search_text;
  public SortCriteria $sort_criteria;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'filters' => SearchPropertyPredicates,
  ?'max_results' => PageSize,
  ?'next_token' => Token,
  ?'search_text' => ValueString,
  ?'sort_criteria' => SortCriteria,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->search_text = $search_text ?? "";
    $this->sort_criteria = $sort_criteria ?? [];
  }
}

class SearchTablesResponse {
  public Token $next_token;
  public TableList $table_list;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'table_list' => TableList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->table_list = $table_list ?? [];
  }
}

class SecurityConfiguration {
  public TimestampValue $created_time_stamp;
  public EncryptionConfiguration $encryption_configuration;
  public NameString $name;

  public function __construct(shape(
  ?'created_time_stamp' => TimestampValue,
  ?'encryption_configuration' => EncryptionConfiguration,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->created_time_stamp = $created_time_stamp ?? 0;
    $this->encryption_configuration = $encryption_configuration ?? null;
    $this->name = $name ?? "";
  }
}

type SecurityConfigurationList = vec<SecurityConfiguration>;

type SecurityGroupIdList = vec<NameString>;

class Segment {
  public NonNegativeInteger $segment_number;
  public TotalSegmentsInteger $total_segments;

  public function __construct(shape(
  ?'segment_number' => NonNegativeInteger,
  ?'total_segments' => TotalSegmentsInteger,
  ) $s = shape()) {
    $this->segment_number = $segment_number ?? 0;
    $this->total_segments = $total_segments ?? 0;
  }
}

class SerDeInfo {
  public NameString $name;
  public ParametersMap $parameters;
  public NameString $serialization_library;

  public function __construct(shape(
  ?'name' => NameString,
  ?'parameters' => ParametersMap,
  ?'serialization_library' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->parameters = $parameters ?? [];
    $this->serialization_library = $serialization_library ?? "";
  }
}

class SkewedInfo {
  public NameStringList $skewed_column_names;
  public LocationMap $skewed_column_value_location_maps;
  public ColumnValueStringList $skewed_column_values;

  public function __construct(shape(
  ?'skewed_column_names' => NameStringList,
  ?'skewed_column_value_location_maps' => LocationMap,
  ?'skewed_column_values' => ColumnValueStringList,
  ) $s = shape()) {
    $this->skewed_column_names = $skewed_column_names ?? [];
    $this->skewed_column_value_location_maps = $skewed_column_value_location_maps ?? [];
    $this->skewed_column_values = $skewed_column_values ?? [];
  }
}

type Sort = string;

type SortCriteria = vec<SortCriterion>;

class SortCriterion {
  public ValueString $field_name;
  public Sort $sort;

  public function __construct(shape(
  ?'field_name' => ValueString,
  ?'sort' => Sort,
  ) $s = shape()) {
    $this->field_name = $field_name ?? "";
    $this->sort = $sort ?? "";
  }
}

type SortDirectionType = string;

class StartCrawlerRequest {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class StartCrawlerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartCrawlerScheduleRequest {
  public NameString $crawler_name;

  public function __construct(shape(
  ?'crawler_name' => NameString,
  ) $s = shape()) {
    $this->crawler_name = $crawler_name ?? "";
  }
}

class StartCrawlerScheduleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartExportLabelsTaskRunRequest {
  public UriString $output_s_3_path;
  public HashString $transform_id;

  public function __construct(shape(
  ?'output_s_3_path' => UriString,
  ?'transform_id' => HashString,
  ) $s = shape()) {
    $this->output_s_3_path = $output_s_3_path ?? "";
    $this->transform_id = $transform_id ?? "";
  }
}

class StartExportLabelsTaskRunResponse {
  public HashString $task_run_id;

  public function __construct(shape(
  ?'task_run_id' => HashString,
  ) $s = shape()) {
    $this->task_run_id = $task_run_id ?? "";
  }
}

class StartImportLabelsTaskRunRequest {
  public UriString $input_s_3_path;
  public ReplaceBoolean $replace_all_labels;
  public HashString $transform_id;

  public function __construct(shape(
  ?'input_s_3_path' => UriString,
  ?'replace_all_labels' => ReplaceBoolean,
  ?'transform_id' => HashString,
  ) $s = shape()) {
    $this->input_s_3_path = $input_s_3_path ?? "";
    $this->replace_all_labels = $replace_all_labels ?? false;
    $this->transform_id = $transform_id ?? "";
  }
}

class StartImportLabelsTaskRunResponse {
  public HashString $task_run_id;

  public function __construct(shape(
  ?'task_run_id' => HashString,
  ) $s = shape()) {
    $this->task_run_id = $task_run_id ?? "";
  }
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

  public function __construct(shape(
  ?'allocated_capacity' => IntegerValue,
  ?'arguments' => GenericMap,
  ?'job_name' => NameString,
  ?'job_run_id' => IdString,
  ?'max_capacity' => NullableDouble,
  ?'notification_property' => NotificationProperty,
  ?'number_of_workers' => NullableInteger,
  ?'security_configuration' => NameString,
  ?'timeout' => Timeout,
  ?'worker_type' => WorkerType,
  ) $s = shape()) {
    $this->allocated_capacity = $allocated_capacity ?? 0;
    $this->arguments = $arguments ?? [];
    $this->job_name = $job_name ?? "";
    $this->job_run_id = $job_run_id ?? "";
    $this->max_capacity = $max_capacity ?? 0.0;
    $this->notification_property = $notification_property ?? null;
    $this->number_of_workers = $number_of_workers ?? 0;
    $this->security_configuration = $security_configuration ?? "";
    $this->timeout = $timeout ?? 0;
    $this->worker_type = $worker_type ?? "";
  }
}

class StartJobRunResponse {
  public IdString $job_run_id;

  public function __construct(shape(
  ?'job_run_id' => IdString,
  ) $s = shape()) {
    $this->job_run_id = $job_run_id ?? "";
  }
}

class StartMLEvaluationTaskRunRequest {
  public HashString $transform_id;

  public function __construct(shape(
  ?'transform_id' => HashString,
  ) $s = shape()) {
    $this->transform_id = $transform_id ?? "";
  }
}

class StartMLEvaluationTaskRunResponse {
  public HashString $task_run_id;

  public function __construct(shape(
  ?'task_run_id' => HashString,
  ) $s = shape()) {
    $this->task_run_id = $task_run_id ?? "";
  }
}

class StartMLLabelingSetGenerationTaskRunRequest {
  public UriString $output_s_3_path;
  public HashString $transform_id;

  public function __construct(shape(
  ?'output_s_3_path' => UriString,
  ?'transform_id' => HashString,
  ) $s = shape()) {
    $this->output_s_3_path = $output_s_3_path ?? "";
    $this->transform_id = $transform_id ?? "";
  }
}

class StartMLLabelingSetGenerationTaskRunResponse {
  public HashString $task_run_id;

  public function __construct(shape(
  ?'task_run_id' => HashString,
  ) $s = shape()) {
    $this->task_run_id = $task_run_id ?? "";
  }
}

class StartTriggerRequest {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class StartTriggerResponse {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class StartWorkflowRunRequest {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class StartWorkflowRunResponse {
  public IdString $run_id;

  public function __construct(shape(
  ?'run_id' => IdString,
  ) $s = shape()) {
    $this->run_id = $run_id ?? "";
  }
}

class StopCrawlerRequest {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class StopCrawlerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StopCrawlerScheduleRequest {
  public NameString $crawler_name;

  public function __construct(shape(
  ?'crawler_name' => NameString,
  ) $s = shape()) {
    $this->crawler_name = $crawler_name ?? "";
  }
}

class StopCrawlerScheduleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StopTriggerRequest {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class StopTriggerResponse {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
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

  public function __construct(shape(
  ?'bucket_columns' => NameStringList,
  ?'columns' => ColumnList,
  ?'compressed' => boolean,
  ?'input_format' => FormatString,
  ?'location' => LocationString,
  ?'number_of_buckets' => int,
  ?'output_format' => FormatString,
  ?'parameters' => ParametersMap,
  ?'serde_info' => SerDeInfo,
  ?'skewed_info' => SkewedInfo,
  ?'sort_columns' => OrderList,
  ?'stored_as_sub_directories' => boolean,
  ) $s = shape()) {
    $this->bucket_columns = $bucket_columns ?? [];
    $this->columns = $columns ?? [];
    $this->compressed = $compressed ?? false;
    $this->input_format = $input_format ?? "";
    $this->location = $location ?? "";
    $this->number_of_buckets = $number_of_buckets ?? 0;
    $this->output_format = $output_format ?? "";
    $this->parameters = $parameters ?? [];
    $this->serde_info = $serde_info ?? null;
    $this->skewed_info = $skewed_info ?? null;
    $this->sort_columns = $sort_columns ?? [];
    $this->stored_as_sub_directories = $stored_as_sub_directories ?? false;
  }
}

type StringList = vec<GenericString>;

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

  public function __construct(shape(
  ?'create_time' => Timestamp,
  ?'created_by' => NameString,
  ?'database_name' => NameString,
  ?'description' => DescriptionString,
  ?'is_registered_with_lake_formation' => boolean,
  ?'last_access_time' => Timestamp,
  ?'last_analyzed_time' => Timestamp,
  ?'name' => NameString,
  ?'owner' => NameString,
  ?'parameters' => ParametersMap,
  ?'partition_keys' => ColumnList,
  ?'retention' => NonNegativeInteger,
  ?'storage_descriptor' => StorageDescriptor,
  ?'table_type' => TableTypeString,
  ?'update_time' => Timestamp,
  ?'view_expanded_text' => ViewTextString,
  ?'view_original_text' => ViewTextString,
  ) $s = shape()) {
    $this->create_time = $create_time ?? 0;
    $this->created_by = $created_by ?? "";
    $this->database_name = $database_name ?? "";
    $this->description = $description ?? "";
    $this->is_registered_with_lake_formation = $is_registered_with_lake_formation ?? false;
    $this->last_access_time = $last_access_time ?? 0;
    $this->last_analyzed_time = $last_analyzed_time ?? 0;
    $this->name = $name ?? "";
    $this->owner = $owner ?? "";
    $this->parameters = $parameters ?? [];
    $this->partition_keys = $partition_keys ?? [];
    $this->retention = $retention ?? 0;
    $this->storage_descriptor = $storage_descriptor ?? null;
    $this->table_type = $table_type ?? "";
    $this->update_time = $update_time ?? 0;
    $this->view_expanded_text = $view_expanded_text ?? "";
    $this->view_original_text = $view_original_text ?? "";
  }
}

class TableError {
  public ErrorDetail $error_detail;
  public NameString $table_name;

  public function __construct(shape(
  ?'error_detail' => ErrorDetail,
  ?'table_name' => NameString,
  ) $s = shape()) {
    $this->error_detail = $error_detail ?? null;
    $this->table_name = $table_name ?? "";
  }
}

type TableErrors = vec<TableError>;

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

  public function __construct(shape(
  ?'description' => DescriptionString,
  ?'last_access_time' => Timestamp,
  ?'last_analyzed_time' => Timestamp,
  ?'name' => NameString,
  ?'owner' => NameString,
  ?'parameters' => ParametersMap,
  ?'partition_keys' => ColumnList,
  ?'retention' => NonNegativeInteger,
  ?'storage_descriptor' => StorageDescriptor,
  ?'table_type' => TableTypeString,
  ?'view_expanded_text' => ViewTextString,
  ?'view_original_text' => ViewTextString,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->last_access_time = $last_access_time ?? 0;
    $this->last_analyzed_time = $last_analyzed_time ?? 0;
    $this->name = $name ?? "";
    $this->owner = $owner ?? "";
    $this->parameters = $parameters ?? [];
    $this->partition_keys = $partition_keys ?? [];
    $this->retention = $retention ?? 0;
    $this->storage_descriptor = $storage_descriptor ?? null;
    $this->table_type = $table_type ?? "";
    $this->view_expanded_text = $view_expanded_text ?? "";
    $this->view_original_text = $view_original_text ?? "";
  }
}

type TableList = vec<Table>;

type TableName = string;

type TablePrefix = string;

type TableTypeString = string;

class TableVersion {
  public Table $table;
  public VersionString $version_id;

  public function __construct(shape(
  ?'table' => Table,
  ?'version_id' => VersionString,
  ) $s = shape()) {
    $this->table = $table ?? null;
    $this->version_id = $version_id ?? "";
  }
}

class TableVersionError {
  public ErrorDetail $error_detail;
  public NameString $table_name;
  public VersionString $version_id;

  public function __construct(shape(
  ?'error_detail' => ErrorDetail,
  ?'table_name' => NameString,
  ?'version_id' => VersionString,
  ) $s = shape()) {
    $this->error_detail = $error_detail ?? null;
    $this->table_name = $table_name ?? "";
    $this->version_id = $version_id ?? "";
  }
}

type TableVersionErrors = vec<TableVersionError>;

type TagKey = string;

type TagKeysList = vec<TagKey>;

class TagResourceRequest {
  public GlueResourceArn $resource_arn;
  public TagsMap $tags_to_add;

  public function __construct(shape(
  ?'resource_arn' => GlueResourceArn,
  ?'tags_to_add' => TagsMap,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags_to_add = $tags_to_add ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type TagsMap = dict<TagKey, TagValue>;

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

  public function __construct(shape(
  ?'completed_on' => Timestamp,
  ?'error_string' => GenericString,
  ?'execution_time' => ExecutionTime,
  ?'last_modified_on' => Timestamp,
  ?'log_group_name' => GenericString,
  ?'properties' => TaskRunProperties,
  ?'started_on' => Timestamp,
  ?'status' => TaskStatusType,
  ?'task_run_id' => HashString,
  ?'transform_id' => HashString,
  ) $s = shape()) {
    $this->completed_on = $completed_on ?? 0;
    $this->error_string = $error_string ?? "";
    $this->execution_time = $execution_time ?? 0;
    $this->last_modified_on = $last_modified_on ?? 0;
    $this->log_group_name = $log_group_name ?? "";
    $this->properties = $properties ?? null;
    $this->started_on = $started_on ?? 0;
    $this->status = $status ?? "";
    $this->task_run_id = $task_run_id ?? "";
    $this->transform_id = $transform_id ?? "";
  }
}

class TaskRunFilterCriteria {
  public Timestamp $started_after;
  public Timestamp $started_before;
  public TaskStatusType $status;
  public TaskType $task_run_type;

  public function __construct(shape(
  ?'started_after' => Timestamp,
  ?'started_before' => Timestamp,
  ?'status' => TaskStatusType,
  ?'task_run_type' => TaskType,
  ) $s = shape()) {
    $this->started_after = $started_after ?? 0;
    $this->started_before = $started_before ?? 0;
    $this->status = $status ?? "";
    $this->task_run_type = $task_run_type ?? "";
  }
}

type TaskRunList = vec<TaskRun>;

class TaskRunProperties {
  public ExportLabelsTaskRunProperties $export_labels_task_run_properties;
  public FindMatchesTaskRunProperties $find_matches_task_run_properties;
  public ImportLabelsTaskRunProperties $import_labels_task_run_properties;
  public LabelingSetGenerationTaskRunProperties $labeling_set_generation_task_run_properties;
  public TaskType $task_type;

  public function __construct(shape(
  ?'export_labels_task_run_properties' => ExportLabelsTaskRunProperties,
  ?'find_matches_task_run_properties' => FindMatchesTaskRunProperties,
  ?'import_labels_task_run_properties' => ImportLabelsTaskRunProperties,
  ?'labeling_set_generation_task_run_properties' => LabelingSetGenerationTaskRunProperties,
  ?'task_type' => TaskType,
  ) $s = shape()) {
    $this->export_labels_task_run_properties = $export_labels_task_run_properties ?? null;
    $this->find_matches_task_run_properties = $find_matches_task_run_properties ?? null;
    $this->import_labels_task_run_properties = $import_labels_task_run_properties ?? null;
    $this->labeling_set_generation_task_run_properties = $labeling_set_generation_task_run_properties ?? null;
    $this->task_type = $task_type ?? "";
  }
}

type TaskRunSortColumnType = string;

class TaskRunSortCriteria {
  public TaskRunSortColumnType $column;
  public SortDirectionType $sort_direction;

  public function __construct(shape(
  ?'column' => TaskRunSortColumnType,
  ?'sort_direction' => SortDirectionType,
  ) $s = shape()) {
    $this->column = $column ?? "";
    $this->sort_direction = $sort_direction ?? "";
  }
}

type TaskStatusType = string;

type TaskType = string;

type Timeout = int;

type Timestamp = int;

type TimestampValue = int;

type Token = string;

type TotalSegmentsInteger = int;

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

  public function __construct(shape(
  ?'created_after' => Timestamp,
  ?'created_before' => Timestamp,
  ?'glue_version' => GlueVersionString,
  ?'last_modified_after' => Timestamp,
  ?'last_modified_before' => Timestamp,
  ?'name' => NameString,
  ?'schema' => TransformSchema,
  ?'status' => TransformStatusType,
  ?'transform_type' => TransformType,
  ) $s = shape()) {
    $this->created_after = $created_after ?? 0;
    $this->created_before = $created_before ?? 0;
    $this->glue_version = $glue_version ?? "";
    $this->last_modified_after = $last_modified_after ?? 0;
    $this->last_modified_before = $last_modified_before ?? 0;
    $this->name = $name ?? "";
    $this->schema = $schema ?? [];
    $this->status = $status ?? "";
    $this->transform_type = $transform_type ?? "";
  }
}

type TransformIdList = vec<HashString>;

type TransformList = vec<MLTransform>;

class TransformParameters {
  public FindMatchesParameters $find_matches_parameters;
  public TransformType $transform_type;

  public function __construct(shape(
  ?'find_matches_parameters' => FindMatchesParameters,
  ?'transform_type' => TransformType,
  ) $s = shape()) {
    $this->find_matches_parameters = $find_matches_parameters ?? null;
    $this->transform_type = $transform_type ?? "";
  }
}

type TransformSchema = vec<SchemaColumn>;

type TransformSortColumnType = string;

class TransformSortCriteria {
  public TransformSortColumnType $column;
  public SortDirectionType $sort_direction;

  public function __construct(shape(
  ?'column' => TransformSortColumnType,
  ?'sort_direction' => SortDirectionType,
  ) $s = shape()) {
    $this->column = $column ?? "";
    $this->sort_direction = $sort_direction ?? "";
  }
}

type TransformStatusType = string;

type TransformType = string;

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

  public function __construct(shape(
  ?'actions' => ActionList,
  ?'description' => DescriptionString,
  ?'id' => IdString,
  ?'name' => NameString,
  ?'predicate' => Predicate,
  ?'schedule' => GenericString,
  ?'state' => TriggerState,
  ?'type' => TriggerType,
  ?'workflow_name' => NameString,
  ) $s = shape()) {
    $this->actions = $actions ?? [];
    $this->description = $description ?? "";
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->predicate = $predicate ?? null;
    $this->schedule = $schedule ?? "";
    $this->state = $state ?? "";
    $this->type = $type ?? "";
    $this->workflow_name = $workflow_name ?? "";
  }
}

type TriggerList = vec<Trigger>;

type TriggerNameList = vec<NameString>;

class TriggerNodeDetails {
  public Trigger $trigger;

  public function __construct(shape(
  ?'trigger' => Trigger,
  ) $s = shape()) {
    $this->trigger = $trigger ?? null;
  }
}

type TriggerState = string;

type TriggerType = string;

class TriggerUpdate {
  public ActionList $actions;
  public DescriptionString $description;
  public NameString $name;
  public Predicate $predicate;
  public GenericString $schedule;

  public function __construct(shape(
  ?'actions' => ActionList,
  ?'description' => DescriptionString,
  ?'name' => NameString,
  ?'predicate' => Predicate,
  ?'schedule' => GenericString,
  ) $s = shape()) {
    $this->actions = $actions ?? [];
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->predicate = $predicate ?? null;
    $this->schedule = $schedule ?? "";
  }
}

type URI = string;

class UntagResourceRequest {
  public GlueResourceArn $resource_arn;
  public TagKeysList $tags_to_remove;

  public function __construct(shape(
  ?'resource_arn' => GlueResourceArn,
  ?'tags_to_remove' => TagKeysList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags_to_remove = $tags_to_remove ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type UpdateBehavior = string;

class UpdateClassifierRequest {
  public UpdateCsvClassifierRequest $csv_classifier;
  public UpdateGrokClassifierRequest $grok_classifier;
  public UpdateJsonClassifierRequest $json_classifier;
  public UpdateXMLClassifierRequest $xml_classifier;

  public function __construct(shape(
  ?'csv_classifier' => UpdateCsvClassifierRequest,
  ?'grok_classifier' => UpdateGrokClassifierRequest,
  ?'json_classifier' => UpdateJsonClassifierRequest,
  ?'xml_classifier' => UpdateXMLClassifierRequest,
  ) $s = shape()) {
    $this->csv_classifier = $csv_classifier ?? null;
    $this->grok_classifier = $grok_classifier ?? null;
    $this->json_classifier = $json_classifier ?? null;
    $this->xml_classifier = $xml_classifier ?? null;
  }
}

class UpdateClassifierResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateConnectionRequest {
  public CatalogIdString $catalog_id;
  public ConnectionInput $connection_input;
  public NameString $name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'connection_input' => ConnectionInput,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->connection_input = $connection_input ?? null;
    $this->name = $name ?? "";
  }
}

class UpdateConnectionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'classifiers' => ClassifierNameList,
  ?'configuration' => CrawlerConfiguration,
  ?'crawler_security_configuration' => CrawlerSecurityConfiguration,
  ?'database_name' => DatabaseName,
  ?'description' => DescriptionStringRemovable,
  ?'name' => NameString,
  ?'role' => Role,
  ?'schedule' => CronExpression,
  ?'schema_change_policy' => SchemaChangePolicy,
  ?'table_prefix' => TablePrefix,
  ?'targets' => CrawlerTargets,
  ) $s = shape()) {
    $this->classifiers = $classifiers ?? [];
    $this->configuration = $configuration ?? "";
    $this->crawler_security_configuration = $crawler_security_configuration ?? "";
    $this->database_name = $database_name ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->role = $role ?? "";
    $this->schedule = $schedule ?? "";
    $this->schema_change_policy = $schema_change_policy ?? null;
    $this->table_prefix = $table_prefix ?? "";
    $this->targets = $targets ?? null;
  }
}

class UpdateCrawlerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateCrawlerScheduleRequest {
  public NameString $crawler_name;
  public CronExpression $schedule;

  public function __construct(shape(
  ?'crawler_name' => NameString,
  ?'schedule' => CronExpression,
  ) $s = shape()) {
    $this->crawler_name = $crawler_name ?? "";
    $this->schedule = $schedule ?? "";
  }
}

class UpdateCrawlerScheduleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateCsvClassifierRequest {
  public NullableBoolean $allow_single_column;
  public CsvHeaderOption $contains_header;
  public CsvColumnDelimiter $delimiter;
  public NullableBoolean $disable_value_trimming;
  public CsvHeader $header;
  public NameString $name;
  public CsvQuoteSymbol $quote_symbol;

  public function __construct(shape(
  ?'allow_single_column' => NullableBoolean,
  ?'contains_header' => CsvHeaderOption,
  ?'delimiter' => CsvColumnDelimiter,
  ?'disable_value_trimming' => NullableBoolean,
  ?'header' => CsvHeader,
  ?'name' => NameString,
  ?'quote_symbol' => CsvQuoteSymbol,
  ) $s = shape()) {
    $this->allow_single_column = $allow_single_column ?? false;
    $this->contains_header = $contains_header ?? "";
    $this->delimiter = $delimiter ?? "";
    $this->disable_value_trimming = $disable_value_trimming ?? false;
    $this->header = $header ?? [];
    $this->name = $name ?? "";
    $this->quote_symbol = $quote_symbol ?? "";
  }
}

class UpdateDatabaseRequest {
  public CatalogIdString $catalog_id;
  public DatabaseInput $database_input;
  public NameString $name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_input' => DatabaseInput,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_input = $database_input ?? null;
    $this->name = $name ?? "";
  }
}

class UpdateDatabaseResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'add_arguments' => MapValue,
  ?'add_public_keys' => PublicKeysList,
  ?'custom_libraries' => DevEndpointCustomLibraries,
  ?'delete_arguments' => StringList,
  ?'delete_public_keys' => PublicKeysList,
  ?'endpoint_name' => GenericString,
  ?'public_key' => GenericString,
  ?'update_etl_libraries' => BooleanValue,
  ) $s = shape()) {
    $this->add_arguments = $add_arguments ?? [];
    $this->add_public_keys = $add_public_keys ?? [];
    $this->custom_libraries = $custom_libraries ?? null;
    $this->delete_arguments = $delete_arguments ?? [];
    $this->delete_public_keys = $delete_public_keys ?? [];
    $this->endpoint_name = $endpoint_name ?? "";
    $this->public_key = $public_key ?? "";
    $this->update_etl_libraries = $update_etl_libraries ?? false;
  }
}

class UpdateDevEndpointResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateGrokClassifierRequest {
  public Classification $classification;
  public CustomPatterns $custom_patterns;
  public GrokPattern $grok_pattern;
  public NameString $name;

  public function __construct(shape(
  ?'classification' => Classification,
  ?'custom_patterns' => CustomPatterns,
  ?'grok_pattern' => GrokPattern,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->classification = $classification ?? "";
    $this->custom_patterns = $custom_patterns ?? "";
    $this->grok_pattern = $grok_pattern ?? "";
    $this->name = $name ?? "";
  }
}

class UpdateJobRequest {
  public NameString $job_name;
  public JobUpdate $job_update;

  public function __construct(shape(
  ?'job_name' => NameString,
  ?'job_update' => JobUpdate,
  ) $s = shape()) {
    $this->job_name = $job_name ?? "";
    $this->job_update = $job_update ?? null;
  }
}

class UpdateJobResponse {
  public NameString $job_name;

  public function __construct(shape(
  ?'job_name' => NameString,
  ) $s = shape()) {
    $this->job_name = $job_name ?? "";
  }
}

class UpdateJsonClassifierRequest {
  public JsonPath $json_path;
  public NameString $name;

  public function __construct(shape(
  ?'json_path' => JsonPath,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->json_path = $json_path ?? "";
    $this->name = $name ?? "";
  }
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

  public function __construct(shape(
  ?'description' => DescriptionString,
  ?'glue_version' => GlueVersionString,
  ?'max_capacity' => NullableDouble,
  ?'max_retries' => NullableInteger,
  ?'name' => NameString,
  ?'number_of_workers' => NullableInteger,
  ?'parameters' => TransformParameters,
  ?'role' => RoleString,
  ?'timeout' => Timeout,
  ?'transform_id' => HashString,
  ?'worker_type' => WorkerType,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->glue_version = $glue_version ?? "";
    $this->max_capacity = $max_capacity ?? 0.0;
    $this->max_retries = $max_retries ?? 0;
    $this->name = $name ?? "";
    $this->number_of_workers = $number_of_workers ?? 0;
    $this->parameters = $parameters ?? null;
    $this->role = $role ?? "";
    $this->timeout = $timeout ?? 0;
    $this->transform_id = $transform_id ?? "";
    $this->worker_type = $worker_type ?? "";
  }
}

class UpdateMLTransformResponse {
  public HashString $transform_id;

  public function __construct(shape(
  ?'transform_id' => HashString,
  ) $s = shape()) {
    $this->transform_id = $transform_id ?? "";
  }
}

class UpdatePartitionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public PartitionInput $partition_input;
  public BoundedPartitionValueList $partition_value_list;
  public NameString $table_name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'partition_input' => PartitionInput,
  ?'partition_value_list' => BoundedPartitionValueList,
  ?'table_name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->partition_input = $partition_input ?? null;
    $this->partition_value_list = $partition_value_list ?? [];
    $this->table_name = $table_name ?? "";
  }
}

class UpdatePartitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateTableRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public BooleanNullable $skip_archive;
  public TableInput $table_input;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'skip_archive' => BooleanNullable,
  ?'table_input' => TableInput,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->skip_archive = $skip_archive ?? false;
    $this->table_input = $table_input ?? null;
  }
}

class UpdateTableResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateTriggerRequest {
  public NameString $name;
  public TriggerUpdate $trigger_update;

  public function __construct(shape(
  ?'name' => NameString,
  ?'trigger_update' => TriggerUpdate,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->trigger_update = $trigger_update ?? null;
  }
}

class UpdateTriggerResponse {
  public Trigger $trigger;

  public function __construct(shape(
  ?'trigger' => Trigger,
  ) $s = shape()) {
    $this->trigger = $trigger ?? null;
  }
}

class UpdateUserDefinedFunctionRequest {
  public CatalogIdString $catalog_id;
  public NameString $database_name;
  public UserDefinedFunctionInput $function_input;
  public NameString $function_name;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'database_name' => NameString,
  ?'function_input' => UserDefinedFunctionInput,
  ?'function_name' => NameString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? "";
    $this->database_name = $database_name ?? "";
    $this->function_input = $function_input ?? null;
    $this->function_name = $function_name ?? "";
  }
}

class UpdateUserDefinedFunctionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateWorkflowRequest {
  public WorkflowRunProperties $default_run_properties;
  public GenericString $description;
  public NameString $name;

  public function __construct(shape(
  ?'default_run_properties' => WorkflowRunProperties,
  ?'description' => GenericString,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->default_run_properties = $default_run_properties ?? [];
    $this->description = $description ?? "";
    $this->name = $name ?? "";
  }
}

class UpdateWorkflowResponse {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class UpdateXMLClassifierRequest {
  public Classification $classification;
  public NameString $name;
  public RowTag $row_tag;

  public function __construct(shape(
  ?'classification' => Classification,
  ?'name' => NameString,
  ?'row_tag' => RowTag,
  ) $s = shape()) {
    $this->classification = $classification ?? "";
    $this->name = $name ?? "";
    $this->row_tag = $row_tag ?? "";
  }
}

type UriString = string;

class UserDefinedFunction {
  public NameString $class_name;
  public Timestamp $create_time;
  public NameString $function_name;
  public NameString $owner_name;
  public PrincipalType $owner_type;
  public ResourceUriList $resource_uris;

  public function __construct(shape(
  ?'class_name' => NameString,
  ?'create_time' => Timestamp,
  ?'function_name' => NameString,
  ?'owner_name' => NameString,
  ?'owner_type' => PrincipalType,
  ?'resource_uris' => ResourceUriList,
  ) $s = shape()) {
    $this->class_name = $class_name ?? "";
    $this->create_time = $create_time ?? 0;
    $this->function_name = $function_name ?? "";
    $this->owner_name = $owner_name ?? "";
    $this->owner_type = $owner_type ?? "";
    $this->resource_uris = $resource_uris ?? [];
  }
}

class UserDefinedFunctionInput {
  public NameString $class_name;
  public NameString $function_name;
  public NameString $owner_name;
  public PrincipalType $owner_type;
  public ResourceUriList $resource_uris;

  public function __construct(shape(
  ?'class_name' => NameString,
  ?'function_name' => NameString,
  ?'owner_name' => NameString,
  ?'owner_type' => PrincipalType,
  ?'resource_uris' => ResourceUriList,
  ) $s = shape()) {
    $this->class_name = $class_name ?? "";
    $this->function_name = $function_name ?? "";
    $this->owner_name = $owner_name ?? "";
    $this->owner_type = $owner_type ?? "";
    $this->resource_uris = $resource_uris ?? [];
  }
}

type UserDefinedFunctionList = vec<UserDefinedFunction>;

class ValidationException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ValueString = string;

type ValueStringList = vec<ValueString>;

type VersionId = int;

class VersionMismatchException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type VersionString = string;

type ViewTextString = string;

type WorkerType = string;

class Workflow {
  public TimestampValue $created_on;
  public WorkflowRunProperties $default_run_properties;
  public GenericString $description;
  public WorkflowGraph $graph;
  public TimestampValue $last_modified_on;
  public WorkflowRun $last_run;
  public NameString $name;

  public function __construct(shape(
  ?'created_on' => TimestampValue,
  ?'default_run_properties' => WorkflowRunProperties,
  ?'description' => GenericString,
  ?'graph' => WorkflowGraph,
  ?'last_modified_on' => TimestampValue,
  ?'last_run' => WorkflowRun,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->created_on = $created_on ?? 0;
    $this->default_run_properties = $default_run_properties ?? [];
    $this->description = $description ?? "";
    $this->graph = $graph ?? null;
    $this->last_modified_on = $last_modified_on ?? 0;
    $this->last_run = $last_run ?? null;
    $this->name = $name ?? "";
  }
}

class WorkflowGraph {
  public EdgeList $edges;
  public NodeList $nodes;

  public function __construct(shape(
  ?'edges' => EdgeList,
  ?'nodes' => NodeList,
  ) $s = shape()) {
    $this->edges = $edges ?? [];
    $this->nodes = $nodes ?? [];
  }
}

type WorkflowNames = vec<NameString>;

class WorkflowRun {
  public TimestampValue $completed_on;
  public WorkflowGraph $graph;
  public NameString $name;
  public TimestampValue $started_on;
  public WorkflowRunStatistics $statistics;
  public WorkflowRunStatus $status;
  public IdString $workflow_run_id;
  public WorkflowRunProperties $workflow_run_properties;

  public function __construct(shape(
  ?'completed_on' => TimestampValue,
  ?'graph' => WorkflowGraph,
  ?'name' => NameString,
  ?'started_on' => TimestampValue,
  ?'statistics' => WorkflowRunStatistics,
  ?'status' => WorkflowRunStatus,
  ?'workflow_run_id' => IdString,
  ?'workflow_run_properties' => WorkflowRunProperties,
  ) $s = shape()) {
    $this->completed_on = $completed_on ?? 0;
    $this->graph = $graph ?? null;
    $this->name = $name ?? "";
    $this->started_on = $started_on ?? 0;
    $this->statistics = $statistics ?? null;
    $this->status = $status ?? "";
    $this->workflow_run_id = $workflow_run_id ?? "";
    $this->workflow_run_properties = $workflow_run_properties ?? [];
  }
}

type WorkflowRunProperties = dict<IdString, GenericString>;

class WorkflowRunStatistics {
  public IntegerValue $failed_actions;
  public IntegerValue $running_actions;
  public IntegerValue $stopped_actions;
  public IntegerValue $succeeded_actions;
  public IntegerValue $timeout_actions;
  public IntegerValue $total_actions;

  public function __construct(shape(
  ?'failed_actions' => IntegerValue,
  ?'running_actions' => IntegerValue,
  ?'stopped_actions' => IntegerValue,
  ?'succeeded_actions' => IntegerValue,
  ?'timeout_actions' => IntegerValue,
  ?'total_actions' => IntegerValue,
  ) $s = shape()) {
    $this->failed_actions = $failed_actions ?? 0;
    $this->running_actions = $running_actions ?? 0;
    $this->stopped_actions = $stopped_actions ?? 0;
    $this->succeeded_actions = $succeeded_actions ?? 0;
    $this->timeout_actions = $timeout_actions ?? 0;
    $this->total_actions = $total_actions ?? 0;
  }
}

type WorkflowRunStatus = string;

type WorkflowRuns = vec<WorkflowRun>;

type Workflows = vec<Workflow>;

class XMLClassifier {
  public Classification $classification;
  public Timestamp $creation_time;
  public Timestamp $last_updated;
  public NameString $name;
  public RowTag $row_tag;
  public VersionId $version;

  public function __construct(shape(
  ?'classification' => Classification,
  ?'creation_time' => Timestamp,
  ?'last_updated' => Timestamp,
  ?'name' => NameString,
  ?'row_tag' => RowTag,
  ?'version' => VersionId,
  ) $s = shape()) {
    $this->classification = $classification ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->last_updated = $last_updated ?? 0;
    $this->name = $name ?? "";
    $this->row_tag = $row_tag ?? "";
    $this->version = $version ?? 0;
  }
}

