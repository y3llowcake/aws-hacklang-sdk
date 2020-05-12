<?hh // strict
namespace slack\aws\discovery;

interface ApplicationDiscoveryService {
  public function AssociateConfigurationItemsToApplication(AssociateConfigurationItemsToApplicationRequest $in): Awaitable<\Errors\Result<AssociateConfigurationItemsToApplicationResponse>>;
  public function BatchDeleteImportData(BatchDeleteImportDataRequest $in): Awaitable<\Errors\Result<BatchDeleteImportDataResponse>>;
  public function CreateApplication(CreateApplicationRequest $in): Awaitable<\Errors\Result<CreateApplicationResponse>>;
  public function CreateTags(CreateTagsRequest $in): Awaitable<\Errors\Result<CreateTagsResponse>>;
  public function DeleteApplications(DeleteApplicationsRequest $in): Awaitable<\Errors\Result<DeleteApplicationsResponse>>;
  public function DeleteTags(DeleteTagsRequest $in): Awaitable<\Errors\Result<DeleteTagsResponse>>;
  public function DescribeAgents(DescribeAgentsRequest $in): Awaitable<\Errors\Result<DescribeAgentsResponse>>;
  public function DescribeConfigurations(DescribeConfigurationsRequest $in): Awaitable<\Errors\Result<DescribeConfigurationsResponse>>;
  public function DescribeContinuousExports(DescribeContinuousExportsRequest $in): Awaitable<\Errors\Result<DescribeContinuousExportsResponse>>;
  public function DescribeExportConfigurations(DescribeExportConfigurationsRequest $in): Awaitable<\Errors\Result<DescribeExportConfigurationsResponse>>;
  public function DescribeExportTasks(DescribeExportTasksRequest $in): Awaitable<\Errors\Result<DescribeExportTasksResponse>>;
  public function DescribeImportTasks(DescribeImportTasksRequest $in): Awaitable<\Errors\Result<DescribeImportTasksResponse>>;
  public function DescribeTags(DescribeTagsRequest $in): Awaitable<\Errors\Result<DescribeTagsResponse>>;
  public function DisassociateConfigurationItemsFromApplication(DisassociateConfigurationItemsFromApplicationRequest $in): Awaitable<\Errors\Result<DisassociateConfigurationItemsFromApplicationResponse>>;
  public function ExportConfigurations( $in): Awaitable<\Errors\Result<ExportConfigurationsResponse>>;
  public function GetDiscoverySummary(GetDiscoverySummaryRequest $in): Awaitable<\Errors\Result<GetDiscoverySummaryResponse>>;
  public function ListConfigurations(ListConfigurationsRequest $in): Awaitable<\Errors\Result<ListConfigurationsResponse>>;
  public function ListServerNeighbors(ListServerNeighborsRequest $in): Awaitable<\Errors\Result<ListServerNeighborsResponse>>;
  public function StartContinuousExport(StartContinuousExportRequest $in): Awaitable<\Errors\Result<StartContinuousExportResponse>>;
  public function StartDataCollectionByAgentIds(StartDataCollectionByAgentIdsRequest $in): Awaitable<\Errors\Result<StartDataCollectionByAgentIdsResponse>>;
  public function StartExportTask(StartExportTaskRequest $in): Awaitable<\Errors\Result<StartExportTaskResponse>>;
  public function StartImportTask(StartImportTaskRequest $in): Awaitable<\Errors\Result<StartImportTaskResponse>>;
  public function StopContinuousExport(StopContinuousExportRequest $in): Awaitable<\Errors\Result<StopContinuousExportResponse>>;
  public function StopDataCollectionByAgentIds(StopDataCollectionByAgentIdsRequest $in): Awaitable<\Errors\Result<StopDataCollectionByAgentIdsResponse>>;
  public function UpdateApplication(UpdateApplicationRequest $in): Awaitable<\Errors\Result<UpdateApplicationResponse>>;
}

class AgentConfigurationStatus {
  public string $agent_id;
  public string $description;
  public bool $operation_succeeded;

  public function __construct(shape(
    ?'agent_id' => string,
    ?'description' => string,
    ?'operation_succeeded' => bool,
  ) $s = shape()) {
    $this->agent_id = $s['agent_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->operation_succeeded = $s['operation_succeeded'] ?? false;
  }
}

type AgentConfigurationStatusList = vec<AgentConfigurationStatus>;

type AgentId = string;

type AgentIds = vec<AgentId>;

class AgentInfo {
  public ?AgentId $agent_id;
  public ?AgentNetworkInfoList $agent_network_info_list;
  public string $agent_type;
  public string $collection_status;
  public string $connector_id;
  public ?AgentStatus $health;
  public string $host_name;
  public string $last_health_ping_time;
  public string $registered_time;
  public string $version;

  public function __construct(shape(
    ?'agent_id' => ?AgentId,
    ?'agent_network_info_list' => ?AgentNetworkInfoList,
    ?'agent_type' => string,
    ?'collection_status' => string,
    ?'connector_id' => string,
    ?'health' => ?AgentStatus,
    ?'host_name' => string,
    ?'last_health_ping_time' => string,
    ?'registered_time' => string,
    ?'version' => string,
  ) $s = shape()) {
    $this->agent_id = $s['agent_id'] ?? '';
    $this->agent_network_info_list = $s['agent_network_info_list'] ?? vec[];
    $this->agent_type = $s['agent_type'] ?? '';
    $this->collection_status = $s['collection_status'] ?? '';
    $this->connector_id = $s['connector_id'] ?? '';
    $this->health = $s['health'] ?? '';
    $this->host_name = $s['host_name'] ?? '';
    $this->last_health_ping_time = $s['last_health_ping_time'] ?? '';
    $this->registered_time = $s['registered_time'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class AgentNetworkInfo {
  public string $ip_address;
  public string $mac_address;

  public function __construct(shape(
    ?'ip_address' => string,
    ?'mac_address' => string,
  ) $s = shape()) {
    $this->ip_address = $s['ip_address'] ?? '';
    $this->mac_address = $s['mac_address'] ?? '';
  }
}

type AgentNetworkInfoList = vec<AgentNetworkInfo>;

type AgentStatus = string;

type AgentsInfo = vec<AgentInfo>;

type ApplicationId = string;

type ApplicationIdsList = vec<ApplicationId>;

class AssociateConfigurationItemsToApplicationRequest {
  public ?ApplicationId $application_configuration_id;
  public ?ConfigurationIdList $configuration_ids;

  public function __construct(shape(
    ?'application_configuration_id' => ?ApplicationId,
    ?'configuration_ids' => ?ConfigurationIdList,
  ) $s = shape()) {
    $this->application_configuration_id = $s['application_configuration_id'] ?? '';
    $this->configuration_ids = $s['configuration_ids'] ?? vec[];
  }
}

class AssociateConfigurationItemsToApplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AuthorizationErrorException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class BatchDeleteImportDataError {
  public ?BatchDeleteImportDataErrorCode $error_code;
  public ?BatchDeleteImportDataErrorDescription $error_description;
  public ?ImportTaskIdentifier $import_task_id;

  public function __construct(shape(
    ?'error_code' => ?BatchDeleteImportDataErrorCode,
    ?'error_description' => ?BatchDeleteImportDataErrorDescription,
    ?'import_task_id' => ?ImportTaskIdentifier,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_description = $s['error_description'] ?? '';
    $this->import_task_id = $s['import_task_id'] ?? '';
  }
}

type BatchDeleteImportDataErrorCode = string;

type BatchDeleteImportDataErrorDescription = string;

type BatchDeleteImportDataErrorList = vec<BatchDeleteImportDataError>;

class BatchDeleteImportDataRequest {
  public ?ToDeleteIdentifierList $import_task_ids;

  public function __construct(shape(
    ?'import_task_ids' => ?ToDeleteIdentifierList,
  ) $s = shape()) {
    $this->import_task_ids = $s['import_task_ids'] ?? vec[];
  }
}

class BatchDeleteImportDataResponse {
  public ?BatchDeleteImportDataErrorList $errors;

  public function __construct(shape(
    ?'errors' => ?BatchDeleteImportDataErrorList,
  ) $s = shape()) {
    $this->errors = $s['errors'] ?? vec[];
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
  public ?ConfigurationId $configuration_id;
  public ?ConfigurationItemType $configuration_type;
  public ?TagKey $key;
  public ?TimeStamp $time_of_creation;
  public ?TagValue $value;

  public function __construct(shape(
    ?'configuration_id' => ?ConfigurationId,
    ?'configuration_type' => ?ConfigurationItemType,
    ?'key' => ?TagKey,
    ?'time_of_creation' => ?TimeStamp,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
    $this->configuration_type = $s['configuration_type'] ?? '';
    $this->key = $s['key'] ?? '';
    $this->time_of_creation = $s['time_of_creation'] ?? 0;
    $this->value = $s['value'] ?? '';
  }
}

type ConfigurationTagSet = vec<ConfigurationTag>;

type Configurations = vec<Configuration>;

type ConfigurationsDownloadUrl = string;

type ConfigurationsExportId = string;

class ConflictErrorException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ContinuousExportDescription {
  public ?DataSource $data_source;
  public ?ConfigurationsExportId $export_id;
  public ?S3Bucket $s_3_bucket;
  public ?SchemaStorageConfig $schema_storage_config;
  public ?TimeStamp $start_time;
  public ?ContinuousExportStatus $status;
  public ?StringMax255 $status_detail;
  public ?TimeStamp $stop_time;

  public function __construct(shape(
    ?'data_source' => ?DataSource,
    ?'export_id' => ?ConfigurationsExportId,
    ?'s_3_bucket' => ?S3Bucket,
    ?'schema_storage_config' => ?SchemaStorageConfig,
    ?'start_time' => ?TimeStamp,
    ?'status' => ?ContinuousExportStatus,
    ?'status_detail' => ?StringMax255,
    ?'stop_time' => ?TimeStamp,
  ) $s = shape()) {
    $this->data_source = $s['data_source'] ?? '';
    $this->export_id = $s['export_id'] ?? '';
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->schema_storage_config = $s['schema_storage_config'] ?? dict[];
    $this->start_time = $s['start_time'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->status_detail = $s['status_detail'] ?? '';
    $this->stop_time = $s['stop_time'] ?? 0;
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
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateApplicationResponse {
  public string $configuration_id;

  public function __construct(shape(
    ?'configuration_id' => string,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
  }
}

class CreateTagsRequest {
  public ?ConfigurationIdList $configuration_ids;
  public ?TagSet $tags;

  public function __construct(shape(
    ?'configuration_ids' => ?ConfigurationIdList,
    ?'tags' => ?TagSet,
  ) $s = shape()) {
    $this->configuration_ids = $s['configuration_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
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
    $this->active_agents = $s['active_agents'] ?? 0;
    $this->black_listed_agents = $s['black_listed_agents'] ?? 0;
    $this->healthy_agents = $s['healthy_agents'] ?? 0;
    $this->shutdown_agents = $s['shutdown_agents'] ?? 0;
    $this->total_agents = $s['total_agents'] ?? 0;
    $this->unhealthy_agents = $s['unhealthy_agents'] ?? 0;
    $this->unknown_agents = $s['unknown_agents'] ?? 0;
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
    $this->active_connectors = $s['active_connectors'] ?? 0;
    $this->black_listed_connectors = $s['black_listed_connectors'] ?? 0;
    $this->healthy_connectors = $s['healthy_connectors'] ?? 0;
    $this->shutdown_connectors = $s['shutdown_connectors'] ?? 0;
    $this->total_connectors = $s['total_connectors'] ?? 0;
    $this->unhealthy_connectors = $s['unhealthy_connectors'] ?? 0;
    $this->unknown_connectors = $s['unknown_connectors'] ?? 0;
  }
}

type DataSource = string;

type DatabaseName = string;

class DeleteApplicationsRequest {
  public ?ApplicationIdsList $configuration_ids;

  public function __construct(shape(
    ?'configuration_ids' => ?ApplicationIdsList,
  ) $s = shape()) {
    $this->configuration_ids = $s['configuration_ids'] ?? vec[];
  }
}

class DeleteApplicationsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTagsRequest {
  public ?ConfigurationIdList $configuration_ids;
  public ?TagSet $tags;

  public function __construct(shape(
    ?'configuration_ids' => ?ConfigurationIdList,
    ?'tags' => ?TagSet,
  ) $s = shape()) {
    $this->configuration_ids = $s['configuration_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class DeleteTagsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAgentsRequest {
  public ?AgentIds $agent_ids;
  public ?Filters $filters;
  public int $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'agent_ids' => ?AgentIds,
    ?'filters' => ?Filters,
    ?'max_results' => int,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->agent_ids = $s['agent_ids'] ?? vec[];
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeAgentsResponse {
  public ?AgentsInfo $agents_info;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'agents_info' => ?AgentsInfo,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->agents_info = $s['agents_info'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeConfigurationsAttribute = dict<String, String>;

type DescribeConfigurationsAttributes = vec<DescribeConfigurationsAttribute>;

class DescribeConfigurationsRequest {
  public ?ConfigurationIdList $configuration_ids;

  public function __construct(shape(
    ?'configuration_ids' => ?ConfigurationIdList,
  ) $s = shape()) {
    $this->configuration_ids = $s['configuration_ids'] ?? vec[];
  }
}

class DescribeConfigurationsResponse {
  public ?DescribeConfigurationsAttributes $configurations;

  public function __construct(shape(
    ?'configurations' => ?DescribeConfigurationsAttributes,
  ) $s = shape()) {
    $this->configurations = $s['configurations'] ?? vec[];
  }
}

type DescribeContinuousExportsMaxResults = int;

class DescribeContinuousExportsRequest {
  public ?ContinuousExportIds $export_ids;
  public ?DescribeContinuousExportsMaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'export_ids' => ?ContinuousExportIds,
    ?'max_results' => ?DescribeContinuousExportsMaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->export_ids = $s['export_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeContinuousExportsResponse {
  public ?ContinuousExportDescriptions $descriptions;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'descriptions' => ?ContinuousExportDescriptions,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->descriptions = $s['descriptions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeExportConfigurationsRequest {
  public ?ExportIds $export_ids;
  public int $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'export_ids' => ?ExportIds,
    ?'max_results' => int,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->export_ids = $s['export_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeExportConfigurationsResponse {
  public ?ExportsInfo $exports_info;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'exports_info' => ?ExportsInfo,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->exports_info = $s['exports_info'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeExportTasksRequest {
  public ?ExportIds $export_ids;
  public ?ExportFilters $filters;
  public int $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'export_ids' => ?ExportIds,
    ?'filters' => ?ExportFilters,
    ?'max_results' => int,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->export_ids = $s['export_ids'] ?? vec[];
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeExportTasksResponse {
  public ?ExportsInfo $exports_info;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'exports_info' => ?ExportsInfo,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->exports_info = $s['exports_info'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeImportTasksFilterList = vec<ImportTaskFilter>;

type DescribeImportTasksMaxResults = int;

class DescribeImportTasksRequest {
  public ?DescribeImportTasksFilterList $filters;
  public ?DescribeImportTasksMaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?DescribeImportTasksFilterList,
    ?'max_results' => ?DescribeImportTasksMaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeImportTasksResponse {
  public ?NextToken $next_token;
  public ?ImportTaskList $tasks;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'tasks' => ?ImportTaskList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tasks = $s['tasks'] ?? vec[];
  }
}

class DescribeTagsRequest {
  public ?TagFilters $filters;
  public int $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?TagFilters,
    ?'max_results' => int,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeTagsResponse {
  public ?NextToken $next_token;
  public ?ConfigurationTagSet $tags;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'tags' => ?ConfigurationTagSet,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class DisassociateConfigurationItemsFromApplicationRequest {
  public ?ApplicationId $application_configuration_id;
  public ?ConfigurationIdList $configuration_ids;

  public function __construct(shape(
    ?'application_configuration_id' => ?ApplicationId,
    ?'configuration_ids' => ?ConfigurationIdList,
  ) $s = shape()) {
    $this->application_configuration_id = $s['application_configuration_id'] ?? '';
    $this->configuration_ids = $s['configuration_ids'] ?? vec[];
  }
}

class DisassociateConfigurationItemsFromApplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ExportConfigurationsResponse {
  public ?ConfigurationsExportId $export_id;

  public function __construct(shape(
    ?'export_id' => ?ConfigurationsExportId,
  ) $s = shape()) {
    $this->export_id = $s['export_id'] ?? '';
  }
}

type ExportDataFormat = string;

type ExportDataFormats = vec<ExportDataFormat>;

class ExportFilter {
  public ?Condition $condition;
  public ?FilterName $name;
  public ?FilterValues $values;

  public function __construct(shape(
    ?'condition' => ?Condition,
    ?'name' => ?FilterName,
    ?'values' => ?FilterValues,
  ) $s = shape()) {
    $this->condition = $s['condition'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type ExportFilters = vec<ExportFilter>;

type ExportIds = vec<ConfigurationsExportId>;

class ExportInfo {
  public ?ConfigurationsDownloadUrl $configurations_download_url;
  public ?ConfigurationsExportId $export_id;
  public ?ExportRequestTime $export_request_time;
  public ?ExportStatus $export_status;
  public bool $is_truncated;
  public ?TimeStamp $requested_end_time;
  public ?TimeStamp $requested_start_time;
  public ?ExportStatusMessage $status_message;

  public function __construct(shape(
    ?'configurations_download_url' => ?ConfigurationsDownloadUrl,
    ?'export_id' => ?ConfigurationsExportId,
    ?'export_request_time' => ?ExportRequestTime,
    ?'export_status' => ?ExportStatus,
    ?'is_truncated' => bool,
    ?'requested_end_time' => ?TimeStamp,
    ?'requested_start_time' => ?TimeStamp,
    ?'status_message' => ?ExportStatusMessage,
  ) $s = shape()) {
    $this->configurations_download_url = $s['configurations_download_url'] ?? '';
    $this->export_id = $s['export_id'] ?? '';
    $this->export_request_time = $s['export_request_time'] ?? 0;
    $this->export_status = $s['export_status'] ?? '';
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->requested_end_time = $s['requested_end_time'] ?? 0;
    $this->requested_start_time = $s['requested_start_time'] ?? 0;
    $this->status_message = $s['status_message'] ?? '';
  }
}

type ExportRequestTime = int;

type ExportStatus = string;

type ExportStatusMessage = string;

type ExportsInfo = vec<ExportInfo>;

class Filter {
  public ?Condition $condition;
  public string $name;
  public ?FilterValues $values;

  public function __construct(shape(
    ?'condition' => ?Condition,
    ?'name' => string,
    ?'values' => ?FilterValues,
  ) $s = shape()) {
    $this->condition = $s['condition'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
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
  public ?CustomerAgentInfo $agent_summary;
  public ?Long $applications;
  public ?CustomerConnectorInfo $connector_summary;
  public ?Long $servers;
  public ?Long $servers_mapped_to_applications;
  public ?Long $servers_mappedto_tags;

  public function __construct(shape(
    ?'agent_summary' => ?CustomerAgentInfo,
    ?'applications' => ?Long,
    ?'connector_summary' => ?CustomerConnectorInfo,
    ?'servers' => ?Long,
    ?'servers_mapped_to_applications' => ?Long,
    ?'servers_mappedto_tags' => ?Long,
  ) $s = shape()) {
    $this->agent_summary = $s['agent_summary'] ?? null;
    $this->applications = $s['applications'] ?? 0;
    $this->connector_summary = $s['connector_summary'] ?? null;
    $this->servers = $s['servers'] ?? 0;
    $this->servers_mapped_to_applications = $s['servers_mapped_to_applications'] ?? 0;
    $this->servers_mappedto_tags = $s['servers_mappedto_tags'] ?? 0;
  }
}

class HomeRegionNotSetException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ImportStatus = string;

class ImportTask {
  public int $application_import_failure;
  public int $application_import_success;
  public ?ClientRequestToken $client_request_token;
  public ?S3PresignedUrl $errors_and_failed_entries_zip;
  public ?TimeStamp $import_completion_time;
  public ?TimeStamp $import_deleted_time;
  public ?TimeStamp $import_request_time;
  public ?ImportTaskIdentifier $import_task_id;
  public ?ImportURL $import_url;
  public ?ImportTaskName $name;
  public int $server_import_failure;
  public int $server_import_success;
  public ?ImportStatus $status;

  public function __construct(shape(
    ?'application_import_failure' => int,
    ?'application_import_success' => int,
    ?'client_request_token' => ?ClientRequestToken,
    ?'errors_and_failed_entries_zip' => ?S3PresignedUrl,
    ?'import_completion_time' => ?TimeStamp,
    ?'import_deleted_time' => ?TimeStamp,
    ?'import_request_time' => ?TimeStamp,
    ?'import_task_id' => ?ImportTaskIdentifier,
    ?'import_url' => ?ImportURL,
    ?'name' => ?ImportTaskName,
    ?'server_import_failure' => int,
    ?'server_import_success' => int,
    ?'status' => ?ImportStatus,
  ) $s = shape()) {
    $this->application_import_failure = $s['application_import_failure'] ?? 0;
    $this->application_import_success = $s['application_import_success'] ?? 0;
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->errors_and_failed_entries_zip = $s['errors_and_failed_entries_zip'] ?? '';
    $this->import_completion_time = $s['import_completion_time'] ?? 0;
    $this->import_deleted_time = $s['import_deleted_time'] ?? 0;
    $this->import_request_time = $s['import_request_time'] ?? 0;
    $this->import_task_id = $s['import_task_id'] ?? '';
    $this->import_url = $s['import_url'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->server_import_failure = $s['server_import_failure'] ?? 0;
    $this->server_import_success = $s['server_import_success'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

class ImportTaskFilter {
  public ?ImportTaskFilterName $name;
  public ?ImportTaskFilterValueList $values;

  public function __construct(shape(
    ?'name' => ?ImportTaskFilterName,
    ?'values' => ?ImportTaskFilterValueList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
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
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterValueException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListConfigurationsRequest {
  public ?ConfigurationItemType $configuration_type;
  public ?Filters $filters;
  public int $max_results;
  public ?NextToken $next_token;
  public ?OrderByList $order_by;

  public function __construct(shape(
    ?'configuration_type' => ?ConfigurationItemType,
    ?'filters' => ?Filters,
    ?'max_results' => int,
    ?'next_token' => ?NextToken,
    ?'order_by' => ?OrderByList,
  ) $s = shape()) {
    $this->configuration_type = $s['configuration_type'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->order_by = $s['order_by'] ?? vec[];
  }
}

class ListConfigurationsResponse {
  public ?Configurations $configurations;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'configurations' => ?Configurations,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->configurations = $s['configurations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListServerNeighborsRequest {
  public ?ConfigurationId $configuration_id;
  public int $max_results;
  public ?ConfigurationIdList $neighbor_configuration_ids;
  public string $next_token;
  public bool $port_information_needed;

  public function __construct(shape(
    ?'configuration_id' => ?ConfigurationId,
    ?'max_results' => int,
    ?'neighbor_configuration_ids' => ?ConfigurationIdList,
    ?'next_token' => string,
    ?'port_information_needed' => bool,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->neighbor_configuration_ids = $s['neighbor_configuration_ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->port_information_needed = $s['port_information_needed'] ?? false;
  }
}

class ListServerNeighborsResponse {
  public ?Long $known_dependency_count;
  public ?NeighborDetailsList $neighbors;
  public string $next_token;

  public function __construct(shape(
    ?'known_dependency_count' => ?Long,
    ?'neighbors' => ?NeighborDetailsList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->known_dependency_count = $s['known_dependency_count'] ?? 0;
    $this->neighbors = $s['neighbors'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type Long = int;

type Message = string;

class NeighborConnectionDetail {
  public ?Long $connections_count;
  public ?BoxedInteger $destination_port;
  public ?ConfigurationId $destination_server_id;
  public ?ConfigurationId $source_server_id;
  public string $transport_protocol;

  public function __construct(shape(
    ?'connections_count' => ?Long,
    ?'destination_port' => ?BoxedInteger,
    ?'destination_server_id' => ?ConfigurationId,
    ?'source_server_id' => ?ConfigurationId,
    ?'transport_protocol' => string,
  ) $s = shape()) {
    $this->connections_count = $s['connections_count'] ?? 0;
    $this->destination_port = $s['destination_port'] ?? 0;
    $this->destination_server_id = $s['destination_server_id'] ?? '';
    $this->source_server_id = $s['source_server_id'] ?? '';
    $this->transport_protocol = $s['transport_protocol'] ?? '';
  }
}

type NeighborDetailsList = vec<NeighborConnectionDetail>;

type NextToken = string;

class OperationNotPermittedException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class OrderByElement {
  public string $field_name;
  public ?orderString $sort_order;

  public function __construct(shape(
    ?'field_name' => string,
    ?'sort_order' => ?orderString,
  ) $s = shape()) {
    $this->field_name = $s['field_name'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

type OrderByList = vec<OrderByElement>;

class ResourceInUseException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceNotFoundException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type S3Bucket = string;

type S3PresignedUrl = string;

type SchemaStorageConfig = dict<DatabaseName, String>;

class ServerInternalErrorException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class StartContinuousExportRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartContinuousExportResponse {
  public ?DataSource $data_source;
  public ?ConfigurationsExportId $export_id;
  public ?S3Bucket $s_3_bucket;
  public ?SchemaStorageConfig $schema_storage_config;
  public ?TimeStamp $start_time;

  public function __construct(shape(
    ?'data_source' => ?DataSource,
    ?'export_id' => ?ConfigurationsExportId,
    ?'s_3_bucket' => ?S3Bucket,
    ?'schema_storage_config' => ?SchemaStorageConfig,
    ?'start_time' => ?TimeStamp,
  ) $s = shape()) {
    $this->data_source = $s['data_source'] ?? '';
    $this->export_id = $s['export_id'] ?? '';
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->schema_storage_config = $s['schema_storage_config'] ?? dict[];
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class StartDataCollectionByAgentIdsRequest {
  public ?AgentIds $agent_ids;

  public function __construct(shape(
    ?'agent_ids' => ?AgentIds,
  ) $s = shape()) {
    $this->agent_ids = $s['agent_ids'] ?? vec[];
  }
}

class StartDataCollectionByAgentIdsResponse {
  public ?AgentConfigurationStatusList $agents_configuration_status;

  public function __construct(shape(
    ?'agents_configuration_status' => ?AgentConfigurationStatusList,
  ) $s = shape()) {
    $this->agents_configuration_status = $s['agents_configuration_status'] ?? vec[];
  }
}

class StartExportTaskRequest {
  public ?TimeStamp $end_time;
  public ?ExportDataFormats $export_data_format;
  public ?ExportFilters $filters;
  public ?TimeStamp $start_time;

  public function __construct(shape(
    ?'end_time' => ?TimeStamp,
    ?'export_data_format' => ?ExportDataFormats,
    ?'filters' => ?ExportFilters,
    ?'start_time' => ?TimeStamp,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->export_data_format = $s['export_data_format'] ?? vec[];
    $this->filters = $s['filters'] ?? vec[];
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class StartExportTaskResponse {
  public ?ConfigurationsExportId $export_id;

  public function __construct(shape(
    ?'export_id' => ?ConfigurationsExportId,
  ) $s = shape()) {
    $this->export_id = $s['export_id'] ?? '';
  }
}

class StartImportTaskRequest {
  public ?ClientRequestToken $client_request_token;
  public ?ImportURL $import_url;
  public ?ImportTaskName $name;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'import_url' => ?ImportURL,
    ?'name' => ?ImportTaskName,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->import_url = $s['import_url'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class StartImportTaskResponse {
  public ?ImportTask $task;

  public function __construct(shape(
    ?'task' => ?ImportTask,
  ) $s = shape()) {
    $this->task = $s['task'] ?? null;
  }
}

class StopContinuousExportRequest {
  public ?ConfigurationsExportId $export_id;

  public function __construct(shape(
    ?'export_id' => ?ConfigurationsExportId,
  ) $s = shape()) {
    $this->export_id = $s['export_id'] ?? '';
  }
}

class StopContinuousExportResponse {
  public ?TimeStamp $start_time;
  public ?TimeStamp $stop_time;

  public function __construct(shape(
    ?'start_time' => ?TimeStamp,
    ?'stop_time' => ?TimeStamp,
  ) $s = shape()) {
    $this->start_time = $s['start_time'] ?? 0;
    $this->stop_time = $s['stop_time'] ?? 0;
  }
}

class StopDataCollectionByAgentIdsRequest {
  public ?AgentIds $agent_ids;

  public function __construct(shape(
    ?'agent_ids' => ?AgentIds,
  ) $s = shape()) {
    $this->agent_ids = $s['agent_ids'] ?? vec[];
  }
}

class StopDataCollectionByAgentIdsResponse {
  public ?AgentConfigurationStatusList $agents_configuration_status;

  public function __construct(shape(
    ?'agents_configuration_status' => ?AgentConfigurationStatusList,
  ) $s = shape()) {
    $this->agents_configuration_status = $s['agents_configuration_status'] ?? vec[];
  }
}

type String = string;

type StringMax255 = string;

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

class TagFilter {
  public ?FilterName $name;
  public ?FilterValues $values;

  public function __construct(shape(
    ?'name' => ?FilterName,
    ?'values' => ?FilterValues,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type TagFilters = vec<TagFilter>;

type TagKey = string;

type TagSet = vec<Tag>;

type TagValue = string;

type TimeStamp = int;

type ToDeleteIdentifierList = vec<ImportTaskIdentifier>;

class UpdateApplicationRequest {
  public ?ApplicationId $configuration_id;
  public string $description;
  public string $name;

  public function __construct(shape(
    ?'configuration_id' => ?ApplicationId,
    ?'description' => string,
    ?'name' => string,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateApplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type orderString = string;

