<?hh // strict
namespace slack\aws\discovery;

interface Application Discovery Service {
  public function CreateTags(CreateTagsRequest) Awaitable<Errors\Result<CreateTagsResponse>>;
  public function DeleteApplications(DeleteApplicationsRequest) Awaitable<Errors\Result<DeleteApplicationsResponse>>;
  public function DescribeConfigurations(DescribeConfigurationsRequest) Awaitable<Errors\Result<DescribeConfigurationsResponse>>;
  public function DescribeImportTasks(DescribeImportTasksRequest) Awaitable<Errors\Result<DescribeImportTasksResponse>>;
  public function GetDiscoverySummary(GetDiscoverySummaryRequest) Awaitable<Errors\Result<GetDiscoverySummaryResponse>>;
  public function UpdateApplication(UpdateApplicationRequest) Awaitable<Errors\Result<UpdateApplicationResponse>>;
  public function AssociateConfigurationItemsToApplication(AssociateConfigurationItemsToApplicationRequest) Awaitable<Errors\Result<AssociateConfigurationItemsToApplicationResponse>>;
  public function DescribeExportConfigurations(DescribeExportConfigurationsRequest) Awaitable<Errors\Result<DescribeExportConfigurationsResponse>>;
  public function StartExportTask(StartExportTaskRequest) Awaitable<Errors\Result<StartExportTaskResponse>>;
  public function StopDataCollectionByAgentIds(StopDataCollectionByAgentIdsRequest) Awaitable<Errors\Result<StopDataCollectionByAgentIdsResponse>>;
  public function BatchDeleteImportData(BatchDeleteImportDataRequest) Awaitable<Errors\Result<BatchDeleteImportDataResponse>>;
  public function CreateApplication(CreateApplicationRequest) Awaitable<Errors\Result<CreateApplicationResponse>>;
  public function DeleteTags(DeleteTagsRequest) Awaitable<Errors\Result<DeleteTagsResponse>>;
  public function DescribeContinuousExports(DescribeContinuousExportsRequest) Awaitable<Errors\Result<DescribeContinuousExportsResponse>>;
  public function DescribeExportTasks(DescribeExportTasksRequest) Awaitable<Errors\Result<DescribeExportTasksResponse>>;
  public function DisassociateConfigurationItemsFromApplication(DisassociateConfigurationItemsFromApplicationRequest) Awaitable<Errors\Result<DisassociateConfigurationItemsFromApplicationResponse>>;
  public function ExportConfigurations() Awaitable<Errors\Result<ExportConfigurationsResponse>>;
  public function ListServerNeighbors(ListServerNeighborsRequest) Awaitable<Errors\Result<ListServerNeighborsResponse>>;
  public function StartDataCollectionByAgentIds(StartDataCollectionByAgentIdsRequest) Awaitable<Errors\Result<StartDataCollectionByAgentIdsResponse>>;
  public function StartImportTask(StartImportTaskRequest) Awaitable<Errors\Result<StartImportTaskResponse>>;
  public function DescribeAgents(DescribeAgentsRequest) Awaitable<Errors\Result<DescribeAgentsResponse>>;
  public function DescribeTags(DescribeTagsRequest) Awaitable<Errors\Result<DescribeTagsResponse>>;
  public function ListConfigurations(ListConfigurationsRequest) Awaitable<Errors\Result<ListConfigurationsResponse>>;
  public function StartContinuousExport(StartContinuousExportRequest) Awaitable<Errors\Result<StartContinuousExportResponse>>;
  public function StopContinuousExport(StopContinuousExportRequest) Awaitable<Errors\Result<StopContinuousExportResponse>>;
}

class StartImportTaskRequest {
  public ClientRequestToken $client_request_token;
  public ImportTaskName $name;
  public ImportURL $import_url;
}

class StopDataCollectionByAgentIdsResponse {
  public AgentConfigurationStatusList $agents_configuration_status;
}

class AgentIds {
}

class AgentNetworkInfo {
  public string $ip_address;
  public string $mac_address;
}

class AgentsInfo {
}

class DescribeConfigurationsAttribute {
}

class ListConfigurationsResponse {
  public Configurations $configurations;
  public NextToken $next_token;
}

class StartExportTaskRequest {
  public ExportDataFormats $export_data_format;
  public ExportFilters $filters;
  public TimeStamp $start_time;
  public TimeStamp $end_time;
}

class S3PresignedUrl {
}

class StartDataCollectionByAgentIdsRequest {
  public AgentIds $agent_ids;
}

class ConfigurationItemType {
}

class ConfigurationTag {
  public TimeStamp $time_of_creation;
  public ConfigurationItemType $configuration_type;
  public ConfigurationId $configuration_id;
  public TagKey $key;
  public TagValue $value;
}

class Configurations {
}

class CustomerConnectorInfo {
  public int $unknown_connectors;
  public int $active_connectors;
  public int $healthy_connectors;
  public int $black_listed_connectors;
  public int $shutdown_connectors;
  public int $unhealthy_connectors;
  public int $total_connectors;
}

class TagFilters {
}

class BatchDeleteImportDataError {
  public ImportTaskIdentifier $import_task_id;
  public BatchDeleteImportDataErrorCode $error_code;
  public BatchDeleteImportDataErrorDescription $error_description;
}

class DisassociateConfigurationItemsFromApplicationRequest {
  public ApplicationId $application_configuration_id;
  public ConfigurationIdList $configuration_ids;
}

class StopContinuousExportRequest {
  public ConfigurationsExportId $export_id;
}

class DescribeExportConfigurationsResponse {
  public ExportsInfo $exports_info;
  public NextToken $next_token;
}

class StopDataCollectionByAgentIdsRequest {
  public AgentIds $agent_ids;
}

class ContinuousExportIds {
}

class DescribeContinuousExportsMaxResults {
}

class TagKey {
}

class ConfigurationsDownloadUrl {
}

class ConfigurationsExportId {
}

class ConflictErrorException {
  public Message $message;
}

class DeleteTagsResponse {
}

class OrderByList {
}

class ApplicationId {
}

class ContinuousExportDescription {
  public ConfigurationsExportId $export_id;
  public ContinuousExportStatus $status;
  public StringMax255 $status_detail;
  public S3Bucket $s_3_bucket;
  public TimeStamp $start_time;
  public TimeStamp $stop_time;
  public DataSource $data_source;
  public SchemaStorageConfig $schema_storage_config;
}

class DescribeImportTasksMaxResults {
}

class Long {
}

class StartDataCollectionByAgentIdsResponse {
  public AgentConfigurationStatusList $agents_configuration_status;
}

class AgentConfigurationStatus {
  public string $agent_id;
  public boolean $operation_succeeded;
  public string $description;
}

class Configuration {
}

class Message {
}

class TagSet {
}

class BatchDeleteImportDataErrorDescription {
}

class CreateApplicationResponse {
  public string $configuration_id;
}

class DescribeTagsRequest {
  public int $max_results;
  public NextToken $next_token;
  public TagFilters $filters;
}

class InvalidParameterException {
  public Message $message;
}

class ResourceNotFoundException {
  public Message $message;
}

class DeleteTagsRequest {
  public ConfigurationIdList $configuration_ids;
  public TagSet $tags;
}

class ExportRequestTime {
}

class FilterName {
}

class NeighborConnectionDetail {
  public Long $connections_count;
  public ConfigurationId $source_server_id;
  public ConfigurationId $destination_server_id;
  public BoxedInteger $destination_port;
  public string $transport_protocol;
}

class AgentId {
}

class BatchDeleteImportDataResponse {
  public BatchDeleteImportDataErrorList $errors;
}

class ContinuousExportStatus {
}

class CustomerAgentInfo {
  public int $total_agents;
  public int $unknown_agents;
  public int $active_agents;
  public int $healthy_agents;
  public int $black_listed_agents;
  public int $shutdown_agents;
  public int $unhealthy_agents;
}

class GetDiscoverySummaryResponse {
  public Long $servers;
  public Long $applications;
  public Long $servers_mapped_to_applications;
  public Long $servers_mappedto_tags;
  public CustomerAgentInfo $agent_summary;
  public CustomerConnectorInfo $connector_summary;
}

class BatchDeleteImportDataErrorCode {
}

class BatchDeleteImportDataRequest {
  public ToDeleteIdentifierList $import_task_ids;
}

class ConfigurationTagSet {
}

class DatabaseName {
}

class ExportDataFormat {
}

class StartImportTaskResponse {
  public ImportTask $task;
}

class CreateTagsResponse {
}

class DisassociateConfigurationItemsFromApplicationResponse {
}

class ExportsInfo {
}

class ImportTaskList {
}

class TimeStamp {
}

class UpdateApplicationRequest {
  public string $name;
  public string $description;
  public ApplicationId $configuration_id;
}

class InvalidParameterValueException {
  public Message $message;
}

class ContinuousExportDescriptions {
}

class ExportConfigurationsResponse {
  public ConfigurationsExportId $export_id;
}

class ImportStatus {
}

class ImportTaskFilter {
  public ImportTaskFilterName $name;
  public ImportTaskFilterValueList $values;
}

class ImportTaskIdentifier {
}

class Integer {
}

class ServerInternalErrorException {
  public Message $message;
}

class StopContinuousExportResponse {
  public TimeStamp $start_time;
  public TimeStamp $stop_time;
}

class AgentConfigurationStatusList {
}

class AgentStatus {
}

class ExportDataFormats {
}

class ExportFilter {
  public FilterName $name;
  public FilterValues $values;
  public Condition $condition;
}

class Filter {
  public string $name;
  public FilterValues $values;
  public Condition $condition;
}

class ListServerNeighborsResponse {
  public Long $known_dependency_count;
  public NeighborDetailsList $neighbors;
  public string $next_token;
}

class ConfigurationIdList {
}

class NeighborDetailsList {
}

class UpdateApplicationResponse {
}

class TagValue {
}

class Condition {
}

class DescribeExportTasksResponse {
  public ExportsInfo $exports_info;
  public NextToken $next_token;
}

class DescribeImportTasksFilterList {
}

class ExportStatusMessage {
}

class FilterValue {
}

class Filters {
}

class DescribeAgentsResponse {
  public AgentsInfo $agents_info;
  public NextToken $next_token;
}

class ListServerNeighborsRequest {
  public string $next_token;
  public ConfigurationId $configuration_id;
  public boolean $port_information_needed;
  public ConfigurationIdList $neighbor_configuration_ids;
  public int $max_results;
}

class StartContinuousExportResponse {
  public SchemaStorageConfig $schema_storage_config;
  public ConfigurationsExportId $export_id;
  public S3Bucket $s_3_bucket;
  public TimeStamp $start_time;
  public DataSource $data_source;
}

class ToDeleteIdentifierList {
}

class FilterValues {
}

class ImportTaskName {
}

class BatchDeleteImportDataErrorList {
}

class ConfigurationId {
}

class DescribeConfigurationsAttributes {
}

class DescribeConfigurationsResponse {
  public DescribeConfigurationsAttributes $configurations;
}

class DescribeExportConfigurationsRequest {
  public ExportIds $export_ids;
  public int $max_results;
  public NextToken $next_token;
}

class AgentInfo {
  public AgentStatus $health;
  public string $host_name;
  public AgentNetworkInfoList $agent_network_info_list;
  public string $connector_id;
  public string $collection_status;
  public string $agent_type;
  public string $registered_time;
  public AgentId $agent_id;
  public string $version;
  public string $last_health_ping_time;
}

class AssociateConfigurationItemsToApplicationRequest {
  public ApplicationId $application_configuration_id;
  public ConfigurationIdList $configuration_ids;
}

class CreateApplicationRequest {
  public string $name;
  public string $description;
}

class ImportTaskFilterValueList {
}

class orderString {
}

class AgentNetworkInfoList {
}

class GetDiscoverySummaryRequest {
}

class HomeRegionNotSetException {
  public Message $message;
}

class StartContinuousExportRequest {
}

class StartExportTaskResponse {
  public ConfigurationsExportId $export_id;
}

class String {
}

class CreateTagsRequest {
  public ConfigurationIdList $configuration_ids;
  public TagSet $tags;
}

class DescribeConfigurationsRequest {
  public ConfigurationIdList $configuration_ids;
}

class ImportTaskFilterValue {
}

class AssociateConfigurationItemsToApplicationResponse {
}

class DescribeContinuousExportsResponse {
  public ContinuousExportDescriptions $descriptions;
  public NextToken $next_token;
}

class DescribeImportTasksResponse {
  public NextToken $next_token;
  public ImportTaskList $tasks;
}

class OrderByElement {
  public string $field_name;
  public orderString $sort_order;
}

class ApplicationIdsList {
}

class ExportIds {
}

class ImportTaskFilterName {
}

class ListConfigurationsRequest {
  public ConfigurationItemType $configuration_type;
  public Filters $filters;
  public int $max_results;
  public NextToken $next_token;
  public OrderByList $order_by;
}

class S3Bucket {
}

class SchemaStorageConfig {
}

class BoxedInteger {
}

class ClientRequestToken {
}

class OperationNotPermittedException {
  public Message $message;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class DataSource {
}

class DescribeImportTasksRequest {
  public DescribeImportTasksFilterList $filters;
  public DescribeImportTasksMaxResults $max_results;
  public NextToken $next_token;
}

class ExportFilters {
}

class ImportURL {
}

class AuthorizationErrorException {
  public Message $message;
}

class Boolean {
}

class DescribeExportTasksRequest {
  public int $max_results;
  public NextToken $next_token;
  public ExportIds $export_ids;
  public ExportFilters $filters;
}

class DescribeTagsResponse {
  public ConfigurationTagSet $tags;
  public NextToken $next_token;
}

class ExportInfo {
  public ConfigurationsExportId $export_id;
  public ExportStatus $export_status;
  public ExportStatusMessage $status_message;
  public ConfigurationsDownloadUrl $configurations_download_url;
  public ExportRequestTime $export_request_time;
  public boolean $is_truncated;
  public TimeStamp $requested_start_time;
  public TimeStamp $requested_end_time;
}

class ImportTask {
  public ClientRequestToken $client_request_token;
  public ImportTaskName $name;
  public ImportStatus $status;
  public TimeStamp $import_request_time;
  public int $application_import_success;
  public ImportTaskIdentifier $import_task_id;
  public ImportURL $import_url;
  public TimeStamp $import_completion_time;
  public TimeStamp $import_deleted_time;
  public int $server_import_success;
  public int $server_import_failure;
  public int $application_import_failure;
  public S3PresignedUrl $errors_and_failed_entries_zip;
}

class StringMax255 {
}

class DeleteApplicationsRequest {
  public ApplicationIdsList $configuration_ids;
}

class DescribeAgentsRequest {
  public AgentIds $agent_ids;
  public Filters $filters;
  public int $max_results;
  public NextToken $next_token;
}

class DescribeContinuousExportsRequest {
  public ContinuousExportIds $export_ids;
  public DescribeContinuousExportsMaxResults $max_results;
  public NextToken $next_token;
}

class ExportStatus {
}

class NextToken {
}

class ResourceInUseException {
  public Message $message;
}

class DeleteApplicationsResponse {
}

class TagFilter {
  public FilterName $name;
  public FilterValues $values;
}

