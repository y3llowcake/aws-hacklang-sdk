<?hh // strict
namespace slack\aws\discovery;

interface Application Discovery Service {
  public function AssociateConfigurationItemsToApplication(AssociateConfigurationItemsToApplicationRequest): Awaitable<Errors\Result<AssociateConfigurationItemsToApplicationResponse>>;
  public function BatchDeleteImportData(BatchDeleteImportDataRequest): Awaitable<Errors\Result<BatchDeleteImportDataResponse>>;
  public function CreateApplication(CreateApplicationRequest): Awaitable<Errors\Result<CreateApplicationResponse>>;
  public function CreateTags(CreateTagsRequest): Awaitable<Errors\Result<CreateTagsResponse>>;
  public function DeleteApplications(DeleteApplicationsRequest): Awaitable<Errors\Result<DeleteApplicationsResponse>>;
  public function DeleteTags(DeleteTagsRequest): Awaitable<Errors\Result<DeleteTagsResponse>>;
  public function DescribeAgents(DescribeAgentsRequest): Awaitable<Errors\Result<DescribeAgentsResponse>>;
  public function DescribeConfigurations(DescribeConfigurationsRequest): Awaitable<Errors\Result<DescribeConfigurationsResponse>>;
  public function DescribeContinuousExports(DescribeContinuousExportsRequest): Awaitable<Errors\Result<DescribeContinuousExportsResponse>>;
  public function DescribeExportConfigurations(DescribeExportConfigurationsRequest): Awaitable<Errors\Result<DescribeExportConfigurationsResponse>>;
  public function DescribeExportTasks(DescribeExportTasksRequest): Awaitable<Errors\Result<DescribeExportTasksResponse>>;
  public function DescribeImportTasks(DescribeImportTasksRequest): Awaitable<Errors\Result<DescribeImportTasksResponse>>;
  public function DescribeTags(DescribeTagsRequest): Awaitable<Errors\Result<DescribeTagsResponse>>;
  public function DisassociateConfigurationItemsFromApplication(DisassociateConfigurationItemsFromApplicationRequest): Awaitable<Errors\Result<DisassociateConfigurationItemsFromApplicationResponse>>;
  public function ExportConfigurations(): Awaitable<Errors\Result<ExportConfigurationsResponse>>;
  public function GetDiscoverySummary(GetDiscoverySummaryRequest): Awaitable<Errors\Result<GetDiscoverySummaryResponse>>;
  public function ListConfigurations(ListConfigurationsRequest): Awaitable<Errors\Result<ListConfigurationsResponse>>;
  public function ListServerNeighbors(ListServerNeighborsRequest): Awaitable<Errors\Result<ListServerNeighborsResponse>>;
  public function StartContinuousExport(StartContinuousExportRequest): Awaitable<Errors\Result<StartContinuousExportResponse>>;
  public function StartDataCollectionByAgentIds(StartDataCollectionByAgentIdsRequest): Awaitable<Errors\Result<StartDataCollectionByAgentIdsResponse>>;
  public function StartExportTask(StartExportTaskRequest): Awaitable<Errors\Result<StartExportTaskResponse>>;
  public function StartImportTask(StartImportTaskRequest): Awaitable<Errors\Result<StartImportTaskResponse>>;
  public function StopContinuousExport(StopContinuousExportRequest): Awaitable<Errors\Result<StopContinuousExportResponse>>;
  public function StopDataCollectionByAgentIds(StopDataCollectionByAgentIdsRequest): Awaitable<Errors\Result<StopDataCollectionByAgentIdsResponse>>;
  public function UpdateApplication(UpdateApplicationRequest): Awaitable<Errors\Result<UpdateApplicationResponse>>;
}

class AgentConfigurationStatus {
  public string $agent_id;
  public string $description;
  public boolean $operation_succeeded;

  public function __construct(shape(
  ?'agent_id' => string,
  ?'description' => string,
  ?'operation_succeeded' => boolean,
  ) $s = shape()) {
    $this->agent_id = $agent_id ?? "";
    $this->description = $description ?? "";
    $this->operation_succeeded = $operation_succeeded ?? false;
  }
}

type AgentConfigurationStatusList = vec<AgentConfigurationStatus>;

type AgentId = string;

type AgentIds = vec<AgentId>;

class AgentInfo {
  public AgentId $agent_id;
  public AgentNetworkInfoList $agent_network_info_list;
  public string $agent_type;
  public string $collection_status;
  public string $connector_id;
  public AgentStatus $health;
  public string $host_name;
  public string $last_health_ping_time;
  public string $registered_time;
  public string $version;

  public function __construct(shape(
  ?'agent_id' => AgentId,
  ?'agent_network_info_list' => AgentNetworkInfoList,
  ?'agent_type' => string,
  ?'collection_status' => string,
  ?'connector_id' => string,
  ?'health' => AgentStatus,
  ?'host_name' => string,
  ?'last_health_ping_time' => string,
  ?'registered_time' => string,
  ?'version' => string,
  ) $s = shape()) {
    $this->agent_id = $agent_id ?? "";
    $this->agent_network_info_list = $agent_network_info_list ?? [];
    $this->agent_type = $agent_type ?? "";
    $this->collection_status = $collection_status ?? "";
    $this->connector_id = $connector_id ?? "";
    $this->health = $health ?? "";
    $this->host_name = $host_name ?? "";
    $this->last_health_ping_time = $last_health_ping_time ?? "";
    $this->registered_time = $registered_time ?? "";
    $this->version = $version ?? "";
  }
}

class AgentNetworkInfo {
  public string $ip_address;
  public string $mac_address;

  public function __construct(shape(
  ?'ip_address' => string,
  ?'mac_address' => string,
  ) $s = shape()) {
    $this->ip_address = $ip_address ?? "";
    $this->mac_address = $mac_address ?? "";
  }
}

type AgentNetworkInfoList = vec<AgentNetworkInfo>;

type AgentStatus = string;

type AgentsInfo = vec<AgentInfo>;

type ApplicationId = string;

type ApplicationIdsList = vec<ApplicationId>;

class AssociateConfigurationItemsToApplicationRequest {
  public ApplicationId $application_configuration_id;
  public ConfigurationIdList $configuration_ids;

  public function __construct(shape(
  ?'application_configuration_id' => ApplicationId,
  ?'configuration_ids' => ConfigurationIdList,
  ) $s = shape()) {
    $this->application_configuration_id = $application_configuration_id ?? "";
    $this->configuration_ids = $configuration_ids ?? [];
  }
}

class AssociateConfigurationItemsToApplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AuthorizationErrorException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class BatchDeleteImportDataError {
  public BatchDeleteImportDataErrorCode $error_code;
  public BatchDeleteImportDataErrorDescription $error_description;
  public ImportTaskIdentifier $import_task_id;

  public function __construct(shape(
  ?'error_code' => BatchDeleteImportDataErrorCode,
  ?'error_description' => BatchDeleteImportDataErrorDescription,
  ?'import_task_id' => ImportTaskIdentifier,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_description = $error_description ?? "";
    $this->import_task_id = $import_task_id ?? "";
  }
}

type BatchDeleteImportDataErrorCode = string;

type BatchDeleteImportDataErrorDescription = string;

type BatchDeleteImportDataErrorList = vec<BatchDeleteImportDataError>;

class BatchDeleteImportDataRequest {
  public ToDeleteIdentifierList $import_task_ids;

  public function __construct(shape(
  ?'import_task_ids' => ToDeleteIdentifierList,
  ) $s = shape()) {
    $this->import_task_ids = $import_task_ids ?? [];
  }
}

class BatchDeleteImportDataResponse {
  public BatchDeleteImportDataErrorList $errors;

  public function __construct(shape(
  ?'errors' => BatchDeleteImportDataErrorList,
  ) $s = shape()) {
    $this->errors = $errors ?? [];
  }
}

type Boolean = bool;

type BoxedInteger = int;

type ClientRequestToken = string;

type Condition = string;

type Configuration = dict<String, String>;

type ConfigurationId = string;

type ConfigurationIdList = vec<ConfigurationId>;

type ConfigurationItemType = string;

class ConfigurationTag {
  public ConfigurationId $configuration_id;
  public ConfigurationItemType $configuration_type;
  public TagKey $key;
  public TimeStamp $time_of_creation;
  public TagValue $value;

  public function __construct(shape(
  ?'configuration_id' => ConfigurationId,
  ?'configuration_type' => ConfigurationItemType,
  ?'key' => TagKey,
  ?'time_of_creation' => TimeStamp,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->configuration_id = $configuration_id ?? "";
    $this->configuration_type = $configuration_type ?? "";
    $this->key = $key ?? "";
    $this->time_of_creation = $time_of_creation ?? 0;
    $this->value = $value ?? "";
  }
}

type ConfigurationTagSet = vec<ConfigurationTag>;

type Configurations = vec<Configuration>;

type ConfigurationsDownloadUrl = string;

type ConfigurationsExportId = string;

class ConflictErrorException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ContinuousExportDescription {
  public DataSource $data_source;
  public ConfigurationsExportId $export_id;
  public S3Bucket $s_3_bucket;
  public SchemaStorageConfig $schema_storage_config;
  public TimeStamp $start_time;
  public ContinuousExportStatus $status;
  public StringMax255 $status_detail;
  public TimeStamp $stop_time;

  public function __construct(shape(
  ?'data_source' => DataSource,
  ?'export_id' => ConfigurationsExportId,
  ?'s_3_bucket' => S3Bucket,
  ?'schema_storage_config' => SchemaStorageConfig,
  ?'start_time' => TimeStamp,
  ?'status' => ContinuousExportStatus,
  ?'status_detail' => StringMax255,
  ?'stop_time' => TimeStamp,
  ) $s = shape()) {
    $this->data_source = $data_source ?? "";
    $this->export_id = $export_id ?? "";
    $this->s_3_bucket = $s_3_bucket ?? "";
    $this->schema_storage_config = $schema_storage_config ?? [];
    $this->start_time = $start_time ?? 0;
    $this->status = $status ?? "";
    $this->status_detail = $status_detail ?? "";
    $this->stop_time = $stop_time ?? 0;
  }
}

type ContinuousExportDescriptions = vec<ContinuousExportDescription>;

type ContinuousExportIds = vec<ConfigurationsExportId>;

type ContinuousExportStatus = string;

class CreateApplicationRequest {
  public string $description;
  public string $name;

  public function __construct(shape(
  ?'description' => string,
  ?'name' => string,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->name = $name ?? "";
  }
}

class CreateApplicationResponse {
  public string $configuration_id;

  public function __construct(shape(
  ?'configuration_id' => string,
  ) $s = shape()) {
    $this->configuration_id = $configuration_id ?? "";
  }
}

class CreateTagsRequest {
  public ConfigurationIdList $configuration_ids;
  public TagSet $tags;

  public function __construct(shape(
  ?'configuration_ids' => ConfigurationIdList,
  ?'tags' => TagSet,
  ) $s = shape()) {
    $this->configuration_ids = $configuration_ids ?? [];
    $this->tags = $tags ?? [];
  }
}

class CreateTagsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CustomerAgentInfo {
  public int $active_agents;
  public int $black_listed_agents;
  public int $healthy_agents;
  public int $shutdown_agents;
  public int $total_agents;
  public int $unhealthy_agents;
  public int $unknown_agents;

  public function __construct(shape(
  ?'active_agents' => int,
  ?'black_listed_agents' => int,
  ?'healthy_agents' => int,
  ?'shutdown_agents' => int,
  ?'total_agents' => int,
  ?'unhealthy_agents' => int,
  ?'unknown_agents' => int,
  ) $s = shape()) {
    $this->active_agents = $active_agents ?? 0;
    $this->black_listed_agents = $black_listed_agents ?? 0;
    $this->healthy_agents = $healthy_agents ?? 0;
    $this->shutdown_agents = $shutdown_agents ?? 0;
    $this->total_agents = $total_agents ?? 0;
    $this->unhealthy_agents = $unhealthy_agents ?? 0;
    $this->unknown_agents = $unknown_agents ?? 0;
  }
}

class CustomerConnectorInfo {
  public int $active_connectors;
  public int $black_listed_connectors;
  public int $healthy_connectors;
  public int $shutdown_connectors;
  public int $total_connectors;
  public int $unhealthy_connectors;
  public int $unknown_connectors;

  public function __construct(shape(
  ?'active_connectors' => int,
  ?'black_listed_connectors' => int,
  ?'healthy_connectors' => int,
  ?'shutdown_connectors' => int,
  ?'total_connectors' => int,
  ?'unhealthy_connectors' => int,
  ?'unknown_connectors' => int,
  ) $s = shape()) {
    $this->active_connectors = $active_connectors ?? 0;
    $this->black_listed_connectors = $black_listed_connectors ?? 0;
    $this->healthy_connectors = $healthy_connectors ?? 0;
    $this->shutdown_connectors = $shutdown_connectors ?? 0;
    $this->total_connectors = $total_connectors ?? 0;
    $this->unhealthy_connectors = $unhealthy_connectors ?? 0;
    $this->unknown_connectors = $unknown_connectors ?? 0;
  }
}

type DataSource = string;

type DatabaseName = string;

class DeleteApplicationsRequest {
  public ApplicationIdsList $configuration_ids;

  public function __construct(shape(
  ?'configuration_ids' => ApplicationIdsList,
  ) $s = shape()) {
    $this->configuration_ids = $configuration_ids ?? [];
  }
}

class DeleteApplicationsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTagsRequest {
  public ConfigurationIdList $configuration_ids;
  public TagSet $tags;

  public function __construct(shape(
  ?'configuration_ids' => ConfigurationIdList,
  ?'tags' => TagSet,
  ) $s = shape()) {
    $this->configuration_ids = $configuration_ids ?? [];
    $this->tags = $tags ?? [];
  }
}

class DeleteTagsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAgentsRequest {
  public AgentIds $agent_ids;
  public Filters $filters;
  public int $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'agent_ids' => AgentIds,
  ?'filters' => Filters,
  ?'max_results' => int,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->agent_ids = $agent_ids ?? [];
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAgentsResponse {
  public AgentsInfo $agents_info;
  public NextToken $next_token;

  public function __construct(shape(
  ?'agents_info' => AgentsInfo,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->agents_info = $agents_info ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type DescribeConfigurationsAttribute = dict<String, String>;

type DescribeConfigurationsAttributes = vec<DescribeConfigurationsAttribute>;

class DescribeConfigurationsRequest {
  public ConfigurationIdList $configuration_ids;

  public function __construct(shape(
  ?'configuration_ids' => ConfigurationIdList,
  ) $s = shape()) {
    $this->configuration_ids = $configuration_ids ?? [];
  }
}

class DescribeConfigurationsResponse {
  public DescribeConfigurationsAttributes $configurations;

  public function __construct(shape(
  ?'configurations' => DescribeConfigurationsAttributes,
  ) $s = shape()) {
    $this->configurations = $configurations ?? [];
  }
}

type DescribeContinuousExportsMaxResults = int;

class DescribeContinuousExportsRequest {
  public ContinuousExportIds $export_ids;
  public DescribeContinuousExportsMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'export_ids' => ContinuousExportIds,
  ?'max_results' => DescribeContinuousExportsMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->export_ids = $export_ids ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeContinuousExportsResponse {
  public ContinuousExportDescriptions $descriptions;
  public NextToken $next_token;

  public function __construct(shape(
  ?'descriptions' => ContinuousExportDescriptions,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->descriptions = $descriptions ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeExportConfigurationsRequest {
  public ExportIds $export_ids;
  public int $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'export_ids' => ExportIds,
  ?'max_results' => int,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->export_ids = $export_ids ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeExportConfigurationsResponse {
  public ExportsInfo $exports_info;
  public NextToken $next_token;

  public function __construct(shape(
  ?'exports_info' => ExportsInfo,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->exports_info = $exports_info ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeExportTasksRequest {
  public ExportIds $export_ids;
  public ExportFilters $filters;
  public int $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'export_ids' => ExportIds,
  ?'filters' => ExportFilters,
  ?'max_results' => int,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->export_ids = $export_ids ?? [];
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeExportTasksResponse {
  public ExportsInfo $exports_info;
  public NextToken $next_token;

  public function __construct(shape(
  ?'exports_info' => ExportsInfo,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->exports_info = $exports_info ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type DescribeImportTasksFilterList = vec<ImportTaskFilter>;

type DescribeImportTasksMaxResults = int;

class DescribeImportTasksRequest {
  public DescribeImportTasksFilterList $filters;
  public DescribeImportTasksMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => DescribeImportTasksFilterList,
  ?'max_results' => DescribeImportTasksMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeImportTasksResponse {
  public NextToken $next_token;
  public ImportTaskList $tasks;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tasks' => ImportTaskList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tasks = $tasks ?? [];
  }
}

class DescribeTagsRequest {
  public TagFilters $filters;
  public int $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => TagFilters,
  ?'max_results' => int,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeTagsResponse {
  public NextToken $next_token;
  public ConfigurationTagSet $tags;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tags' => ConfigurationTagSet,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? [];
  }
}

class DisassociateConfigurationItemsFromApplicationRequest {
  public ApplicationId $application_configuration_id;
  public ConfigurationIdList $configuration_ids;

  public function __construct(shape(
  ?'application_configuration_id' => ApplicationId,
  ?'configuration_ids' => ConfigurationIdList,
  ) $s = shape()) {
    $this->application_configuration_id = $application_configuration_id ?? "";
    $this->configuration_ids = $configuration_ids ?? [];
  }
}

class DisassociateConfigurationItemsFromApplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ExportConfigurationsResponse {
  public ConfigurationsExportId $export_id;

  public function __construct(shape(
  ?'export_id' => ConfigurationsExportId,
  ) $s = shape()) {
    $this->export_id = $export_id ?? "";
  }
}

type ExportDataFormat = string;

type ExportDataFormats = vec<ExportDataFormat>;

class ExportFilter {
  public Condition $condition;
  public FilterName $name;
  public FilterValues $values;

  public function __construct(shape(
  ?'condition' => Condition,
  ?'name' => FilterName,
  ?'values' => FilterValues,
  ) $s = shape()) {
    $this->condition = $condition ?? "";
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type ExportFilters = vec<ExportFilter>;

type ExportIds = vec<ConfigurationsExportId>;

class ExportInfo {
  public ConfigurationsDownloadUrl $configurations_download_url;
  public ConfigurationsExportId $export_id;
  public ExportRequestTime $export_request_time;
  public ExportStatus $export_status;
  public boolean $is_truncated;
  public TimeStamp $requested_end_time;
  public TimeStamp $requested_start_time;
  public ExportStatusMessage $status_message;

  public function __construct(shape(
  ?'configurations_download_url' => ConfigurationsDownloadUrl,
  ?'export_id' => ConfigurationsExportId,
  ?'export_request_time' => ExportRequestTime,
  ?'export_status' => ExportStatus,
  ?'is_truncated' => boolean,
  ?'requested_end_time' => TimeStamp,
  ?'requested_start_time' => TimeStamp,
  ?'status_message' => ExportStatusMessage,
  ) $s = shape()) {
    $this->configurations_download_url = $configurations_download_url ?? "";
    $this->export_id = $export_id ?? "";
    $this->export_request_time = $export_request_time ?? 0;
    $this->export_status = $export_status ?? "";
    $this->is_truncated = $is_truncated ?? false;
    $this->requested_end_time = $requested_end_time ?? 0;
    $this->requested_start_time = $requested_start_time ?? 0;
    $this->status_message = $status_message ?? "";
  }
}

type ExportRequestTime = int;

type ExportStatus = string;

type ExportStatusMessage = string;

type ExportsInfo = vec<ExportInfo>;

class Filter {
  public Condition $condition;
  public string $name;
  public FilterValues $values;

  public function __construct(shape(
  ?'condition' => Condition,
  ?'name' => string,
  ?'values' => FilterValues,
  ) $s = shape()) {
    $this->condition = $condition ?? "";
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type FilterName = string;

type FilterValue = string;

type FilterValues = vec<FilterValue>;

type Filters = vec<Filter>;

class GetDiscoverySummaryRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetDiscoverySummaryResponse {
  public CustomerAgentInfo $agent_summary;
  public Long $applications;
  public CustomerConnectorInfo $connector_summary;
  public Long $servers;
  public Long $servers_mapped_to_applications;
  public Long $servers_mappedto_tags;

  public function __construct(shape(
  ?'agent_summary' => CustomerAgentInfo,
  ?'applications' => Long,
  ?'connector_summary' => CustomerConnectorInfo,
  ?'servers' => Long,
  ?'servers_mapped_to_applications' => Long,
  ?'servers_mappedto_tags' => Long,
  ) $s = shape()) {
    $this->agent_summary = $agent_summary ?? null;
    $this->applications = $applications ?? 0;
    $this->connector_summary = $connector_summary ?? null;
    $this->servers = $servers ?? 0;
    $this->servers_mapped_to_applications = $servers_mapped_to_applications ?? 0;
    $this->servers_mappedto_tags = $servers_mappedto_tags ?? 0;
  }
}

class HomeRegionNotSetException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ImportStatus = string;

class ImportTask {
  public int $application_import_failure;
  public int $application_import_success;
  public ClientRequestToken $client_request_token;
  public S3PresignedUrl $errors_and_failed_entries_zip;
  public TimeStamp $import_completion_time;
  public TimeStamp $import_deleted_time;
  public TimeStamp $import_request_time;
  public ImportTaskIdentifier $import_task_id;
  public ImportURL $import_url;
  public ImportTaskName $name;
  public int $server_import_failure;
  public int $server_import_success;
  public ImportStatus $status;

  public function __construct(shape(
  ?'application_import_failure' => int,
  ?'application_import_success' => int,
  ?'client_request_token' => ClientRequestToken,
  ?'errors_and_failed_entries_zip' => S3PresignedUrl,
  ?'import_completion_time' => TimeStamp,
  ?'import_deleted_time' => TimeStamp,
  ?'import_request_time' => TimeStamp,
  ?'import_task_id' => ImportTaskIdentifier,
  ?'import_url' => ImportURL,
  ?'name' => ImportTaskName,
  ?'server_import_failure' => int,
  ?'server_import_success' => int,
  ?'status' => ImportStatus,
  ) $s = shape()) {
    $this->application_import_failure = $application_import_failure ?? 0;
    $this->application_import_success = $application_import_success ?? 0;
    $this->client_request_token = $client_request_token ?? "";
    $this->errors_and_failed_entries_zip = $errors_and_failed_entries_zip ?? "";
    $this->import_completion_time = $import_completion_time ?? 0;
    $this->import_deleted_time = $import_deleted_time ?? 0;
    $this->import_request_time = $import_request_time ?? 0;
    $this->import_task_id = $import_task_id ?? "";
    $this->import_url = $import_url ?? "";
    $this->name = $name ?? "";
    $this->server_import_failure = $server_import_failure ?? 0;
    $this->server_import_success = $server_import_success ?? 0;
    $this->status = $status ?? "";
  }
}

class ImportTaskFilter {
  public ImportTaskFilterName $name;
  public ImportTaskFilterValueList $values;

  public function __construct(shape(
  ?'name' => ImportTaskFilterName,
  ?'values' => ImportTaskFilterValueList,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type ImportTaskFilterName = string;

type ImportTaskFilterValue = string;

type ImportTaskFilterValueList = vec<ImportTaskFilterValue>;

type ImportTaskIdentifier = string;

type ImportTaskList = vec<ImportTask>;

type ImportTaskName = string;

type ImportURL = string;

type Integer = int;

class InvalidParameterException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidParameterValueException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListConfigurationsRequest {
  public ConfigurationItemType $configuration_type;
  public Filters $filters;
  public int $max_results;
  public NextToken $next_token;
  public OrderByList $order_by;

  public function __construct(shape(
  ?'configuration_type' => ConfigurationItemType,
  ?'filters' => Filters,
  ?'max_results' => int,
  ?'next_token' => NextToken,
  ?'order_by' => OrderByList,
  ) $s = shape()) {
    $this->configuration_type = $configuration_type ?? "";
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->order_by = $order_by ?? [];
  }
}

class ListConfigurationsResponse {
  public Configurations $configurations;
  public NextToken $next_token;

  public function __construct(shape(
  ?'configurations' => Configurations,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->configurations = $configurations ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListServerNeighborsRequest {
  public ConfigurationId $configuration_id;
  public int $max_results;
  public ConfigurationIdList $neighbor_configuration_ids;
  public string $next_token;
  public boolean $port_information_needed;

  public function __construct(shape(
  ?'configuration_id' => ConfigurationId,
  ?'max_results' => int,
  ?'neighbor_configuration_ids' => ConfigurationIdList,
  ?'next_token' => string,
  ?'port_information_needed' => boolean,
  ) $s = shape()) {
    $this->configuration_id = $configuration_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->neighbor_configuration_ids = $neighbor_configuration_ids ?? [];
    $this->next_token = $next_token ?? "";
    $this->port_information_needed = $port_information_needed ?? false;
  }
}

class ListServerNeighborsResponse {
  public Long $known_dependency_count;
  public NeighborDetailsList $neighbors;
  public string $next_token;

  public function __construct(shape(
  ?'known_dependency_count' => Long,
  ?'neighbors' => NeighborDetailsList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->known_dependency_count = $known_dependency_count ?? 0;
    $this->neighbors = $neighbors ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type Long = int;

type Message = string;

class NeighborConnectionDetail {
  public Long $connections_count;
  public BoxedInteger $destination_port;
  public ConfigurationId $destination_server_id;
  public ConfigurationId $source_server_id;
  public string $transport_protocol;

  public function __construct(shape(
  ?'connections_count' => Long,
  ?'destination_port' => BoxedInteger,
  ?'destination_server_id' => ConfigurationId,
  ?'source_server_id' => ConfigurationId,
  ?'transport_protocol' => string,
  ) $s = shape()) {
    $this->connections_count = $connections_count ?? 0;
    $this->destination_port = $destination_port ?? 0;
    $this->destination_server_id = $destination_server_id ?? "";
    $this->source_server_id = $source_server_id ?? "";
    $this->transport_protocol = $transport_protocol ?? "";
  }
}

type NeighborDetailsList = vec<NeighborConnectionDetail>;

type NextToken = string;

class OperationNotPermittedException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class OrderByElement {
  public string $field_name;
  public orderString $sort_order;

  public function __construct(shape(
  ?'field_name' => string,
  ?'sort_order' => orderString,
  ) $s = shape()) {
    $this->field_name = $field_name ?? "";
    $this->sort_order = $sort_order ?? "";
  }
}

type OrderByList = vec<OrderByElement>;

class ResourceInUseException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceNotFoundException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type S3Bucket = string;

type S3PresignedUrl = string;

type SchemaStorageConfig = dict<DatabaseName, String>;

class ServerInternalErrorException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class StartContinuousExportRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartContinuousExportResponse {
  public DataSource $data_source;
  public ConfigurationsExportId $export_id;
  public S3Bucket $s_3_bucket;
  public SchemaStorageConfig $schema_storage_config;
  public TimeStamp $start_time;

  public function __construct(shape(
  ?'data_source' => DataSource,
  ?'export_id' => ConfigurationsExportId,
  ?'s_3_bucket' => S3Bucket,
  ?'schema_storage_config' => SchemaStorageConfig,
  ?'start_time' => TimeStamp,
  ) $s = shape()) {
    $this->data_source = $data_source ?? "";
    $this->export_id = $export_id ?? "";
    $this->s_3_bucket = $s_3_bucket ?? "";
    $this->schema_storage_config = $schema_storage_config ?? [];
    $this->start_time = $start_time ?? 0;
  }
}

class StartDataCollectionByAgentIdsRequest {
  public AgentIds $agent_ids;

  public function __construct(shape(
  ?'agent_ids' => AgentIds,
  ) $s = shape()) {
    $this->agent_ids = $agent_ids ?? [];
  }
}

class StartDataCollectionByAgentIdsResponse {
  public AgentConfigurationStatusList $agents_configuration_status;

  public function __construct(shape(
  ?'agents_configuration_status' => AgentConfigurationStatusList,
  ) $s = shape()) {
    $this->agents_configuration_status = $agents_configuration_status ?? [];
  }
}

class StartExportTaskRequest {
  public TimeStamp $end_time;
  public ExportDataFormats $export_data_format;
  public ExportFilters $filters;
  public TimeStamp $start_time;

  public function __construct(shape(
  ?'end_time' => TimeStamp,
  ?'export_data_format' => ExportDataFormats,
  ?'filters' => ExportFilters,
  ?'start_time' => TimeStamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->export_data_format = $export_data_format ?? [];
    $this->filters = $filters ?? [];
    $this->start_time = $start_time ?? 0;
  }
}

class StartExportTaskResponse {
  public ConfigurationsExportId $export_id;

  public function __construct(shape(
  ?'export_id' => ConfigurationsExportId,
  ) $s = shape()) {
    $this->export_id = $export_id ?? "";
  }
}

class StartImportTaskRequest {
  public ClientRequestToken $client_request_token;
  public ImportURL $import_url;
  public ImportTaskName $name;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'import_url' => ImportURL,
  ?'name' => ImportTaskName,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->import_url = $import_url ?? "";
    $this->name = $name ?? "";
  }
}

class StartImportTaskResponse {
  public ImportTask $task;

  public function __construct(shape(
  ?'task' => ImportTask,
  ) $s = shape()) {
    $this->task = $task ?? null;
  }
}

class StopContinuousExportRequest {
  public ConfigurationsExportId $export_id;

  public function __construct(shape(
  ?'export_id' => ConfigurationsExportId,
  ) $s = shape()) {
    $this->export_id = $export_id ?? "";
  }
}

class StopContinuousExportResponse {
  public TimeStamp $start_time;
  public TimeStamp $stop_time;

  public function __construct(shape(
  ?'start_time' => TimeStamp,
  ?'stop_time' => TimeStamp,
  ) $s = shape()) {
    $this->start_time = $start_time ?? 0;
    $this->stop_time = $stop_time ?? 0;
  }
}

class StopDataCollectionByAgentIdsRequest {
  public AgentIds $agent_ids;

  public function __construct(shape(
  ?'agent_ids' => AgentIds,
  ) $s = shape()) {
    $this->agent_ids = $agent_ids ?? [];
  }
}

class StopDataCollectionByAgentIdsResponse {
  public AgentConfigurationStatusList $agents_configuration_status;

  public function __construct(shape(
  ?'agents_configuration_status' => AgentConfigurationStatusList,
  ) $s = shape()) {
    $this->agents_configuration_status = $agents_configuration_status ?? [];
  }
}

type String = string;

type StringMax255 = string;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

class TagFilter {
  public FilterName $name;
  public FilterValues $values;

  public function __construct(shape(
  ?'name' => FilterName,
  ?'values' => FilterValues,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type TagFilters = vec<TagFilter>;

type TagKey = string;

type TagSet = vec<Tag>;

type TagValue = string;

type TimeStamp = int;

type ToDeleteIdentifierList = vec<ImportTaskIdentifier>;

class UpdateApplicationRequest {
  public ApplicationId $configuration_id;
  public string $description;
  public string $name;

  public function __construct(shape(
  ?'configuration_id' => ApplicationId,
  ?'description' => string,
  ?'name' => string,
  ) $s = shape()) {
    $this->configuration_id = $configuration_id ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
  }
}

class UpdateApplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type orderString = string;

