<?hh // strict
namespace slack\aws\discovery;

interface Application Discovery Service {
  public function AssociateConfigurationItemsToApplication(AssociateConfigurationItemsToApplicationRequest) Awaitable<Errors\Result<AssociateConfigurationItemsToApplicationResponse>>;
  public function BatchDeleteImportData(BatchDeleteImportDataRequest) Awaitable<Errors\Result<BatchDeleteImportDataResponse>>;
  public function CreateApplication(CreateApplicationRequest) Awaitable<Errors\Result<CreateApplicationResponse>>;
  public function CreateTags(CreateTagsRequest) Awaitable<Errors\Result<CreateTagsResponse>>;
  public function DeleteApplications(DeleteApplicationsRequest) Awaitable<Errors\Result<DeleteApplicationsResponse>>;
  public function DeleteTags(DeleteTagsRequest) Awaitable<Errors\Result<DeleteTagsResponse>>;
  public function DescribeAgents(DescribeAgentsRequest) Awaitable<Errors\Result<DescribeAgentsResponse>>;
  public function DescribeConfigurations(DescribeConfigurationsRequest) Awaitable<Errors\Result<DescribeConfigurationsResponse>>;
  public function DescribeContinuousExports(DescribeContinuousExportsRequest) Awaitable<Errors\Result<DescribeContinuousExportsResponse>>;
  public function DescribeExportConfigurations(DescribeExportConfigurationsRequest) Awaitable<Errors\Result<DescribeExportConfigurationsResponse>>;
  public function DescribeExportTasks(DescribeExportTasksRequest) Awaitable<Errors\Result<DescribeExportTasksResponse>>;
  public function DescribeImportTasks(DescribeImportTasksRequest) Awaitable<Errors\Result<DescribeImportTasksResponse>>;
  public function DescribeTags(DescribeTagsRequest) Awaitable<Errors\Result<DescribeTagsResponse>>;
  public function DisassociateConfigurationItemsFromApplication(DisassociateConfigurationItemsFromApplicationRequest) Awaitable<Errors\Result<DisassociateConfigurationItemsFromApplicationResponse>>;
  public function ExportConfigurations() Awaitable<Errors\Result<ExportConfigurationsResponse>>;
  public function GetDiscoverySummary(GetDiscoverySummaryRequest) Awaitable<Errors\Result<GetDiscoverySummaryResponse>>;
  public function ListConfigurations(ListConfigurationsRequest) Awaitable<Errors\Result<ListConfigurationsResponse>>;
  public function ListServerNeighbors(ListServerNeighborsRequest) Awaitable<Errors\Result<ListServerNeighborsResponse>>;
  public function StartContinuousExport(StartContinuousExportRequest) Awaitable<Errors\Result<StartContinuousExportResponse>>;
  public function StartDataCollectionByAgentIds(StartDataCollectionByAgentIdsRequest) Awaitable<Errors\Result<StartDataCollectionByAgentIdsResponse>>;
  public function StartExportTask(StartExportTaskRequest) Awaitable<Errors\Result<StartExportTaskResponse>>;
  public function StartImportTask(StartImportTaskRequest) Awaitable<Errors\Result<StartImportTaskResponse>>;
  public function StopContinuousExport(StopContinuousExportRequest) Awaitable<Errors\Result<StopContinuousExportResponse>>;
  public function StopDataCollectionByAgentIds(StopDataCollectionByAgentIdsRequest) Awaitable<Errors\Result<StopDataCollectionByAgentIdsResponse>>;
  public function UpdateApplication(UpdateApplicationRequest) Awaitable<Errors\Result<UpdateApplicationResponse>>;
}

class AgentConfigurationStatus {
  public string $agent_id;
  public string $description;
  public boolean $operation_succeeded;
}

class AgentConfigurationStatusList {
}

class AgentId {
}

class AgentIds {
}

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
}

class AgentNetworkInfo {
  public string $ip_address;
  public string $mac_address;
}

class AgentNetworkInfoList {
}

class AgentStatus {
}

class AgentsInfo {
}

class ApplicationId {
}

class ApplicationIdsList {
}

class AssociateConfigurationItemsToApplicationRequest {
  public ApplicationId $application_configuration_id;
  public ConfigurationIdList $configuration_ids;
}

class AssociateConfigurationItemsToApplicationResponse {
}

class AuthorizationErrorException {
  public Message $message;
}

class BatchDeleteImportDataError {
  public BatchDeleteImportDataErrorCode $error_code;
  public BatchDeleteImportDataErrorDescription $error_description;
  public ImportTaskIdentifier $import_task_id;
}

class BatchDeleteImportDataErrorCode {
}

class BatchDeleteImportDataErrorDescription {
}

class BatchDeleteImportDataErrorList {
}

class BatchDeleteImportDataRequest {
  public ToDeleteIdentifierList $import_task_ids;
}

class BatchDeleteImportDataResponse {
  public BatchDeleteImportDataErrorList $errors;
}

class Boolean {
}

class BoxedInteger {
}

class ClientRequestToken {
}

class Condition {
}

class Configuration {
}

class ConfigurationId {
}

class ConfigurationIdList {
}

class ConfigurationItemType {
}

class ConfigurationTag {
  public ConfigurationId $configuration_id;
  public ConfigurationItemType $configuration_type;
  public TagKey $key;
  public TimeStamp $time_of_creation;
  public TagValue $value;
}

class ConfigurationTagSet {
}

class Configurations {
}

class ConfigurationsDownloadUrl {
}

class ConfigurationsExportId {
}

class ConflictErrorException {
  public Message $message;
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
}

class ContinuousExportDescriptions {
}

class ContinuousExportIds {
}

class ContinuousExportStatus {
}

class CreateApplicationRequest {
  public string $description;
  public string $name;
}

class CreateApplicationResponse {
  public string $configuration_id;
}

class CreateTagsRequest {
  public ConfigurationIdList $configuration_ids;
  public TagSet $tags;
}

class CreateTagsResponse {
}

class CustomerAgentInfo {
  public int $active_agents;
  public int $black_listed_agents;
  public int $healthy_agents;
  public int $shutdown_agents;
  public int $total_agents;
  public int $unhealthy_agents;
  public int $unknown_agents;
}

class CustomerConnectorInfo {
  public int $active_connectors;
  public int $black_listed_connectors;
  public int $healthy_connectors;
  public int $shutdown_connectors;
  public int $total_connectors;
  public int $unhealthy_connectors;
  public int $unknown_connectors;
}

class DataSource {
}

class DatabaseName {
}

class DeleteApplicationsRequest {
  public ApplicationIdsList $configuration_ids;
}

class DeleteApplicationsResponse {
}

class DeleteTagsRequest {
  public ConfigurationIdList $configuration_ids;
  public TagSet $tags;
}

class DeleteTagsResponse {
}

class DescribeAgentsRequest {
  public AgentIds $agent_ids;
  public Filters $filters;
  public int $max_results;
  public NextToken $next_token;
}

class DescribeAgentsResponse {
  public AgentsInfo $agents_info;
  public NextToken $next_token;
}

class DescribeConfigurationsAttribute {
}

class DescribeConfigurationsAttributes {
}

class DescribeConfigurationsRequest {
  public ConfigurationIdList $configuration_ids;
}

class DescribeConfigurationsResponse {
  public DescribeConfigurationsAttributes $configurations;
}

class DescribeContinuousExportsMaxResults {
}

class DescribeContinuousExportsRequest {
  public ContinuousExportIds $export_ids;
  public DescribeContinuousExportsMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeContinuousExportsResponse {
  public ContinuousExportDescriptions $descriptions;
  public NextToken $next_token;
}

class DescribeExportConfigurationsRequest {
  public ExportIds $export_ids;
  public int $max_results;
  public NextToken $next_token;
}

class DescribeExportConfigurationsResponse {
  public ExportsInfo $exports_info;
  public NextToken $next_token;
}

class DescribeExportTasksRequest {
  public ExportIds $export_ids;
  public ExportFilters $filters;
  public int $max_results;
  public NextToken $next_token;
}

class DescribeExportTasksResponse {
  public ExportsInfo $exports_info;
  public NextToken $next_token;
}

class DescribeImportTasksFilterList {
}

class DescribeImportTasksMaxResults {
}

class DescribeImportTasksRequest {
  public DescribeImportTasksFilterList $filters;
  public DescribeImportTasksMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeImportTasksResponse {
  public NextToken $next_token;
  public ImportTaskList $tasks;
}

class DescribeTagsRequest {
  public TagFilters $filters;
  public int $max_results;
  public NextToken $next_token;
}

class DescribeTagsResponse {
  public NextToken $next_token;
  public ConfigurationTagSet $tags;
}

class DisassociateConfigurationItemsFromApplicationRequest {
  public ApplicationId $application_configuration_id;
  public ConfigurationIdList $configuration_ids;
}

class DisassociateConfigurationItemsFromApplicationResponse {
}

class ExportConfigurationsResponse {
  public ConfigurationsExportId $export_id;
}

class ExportDataFormat {
}

class ExportDataFormats {
}

class ExportFilter {
  public Condition $condition;
  public FilterName $name;
  public FilterValues $values;
}

class ExportFilters {
}

class ExportIds {
}

class ExportInfo {
  public ConfigurationsDownloadUrl $configurations_download_url;
  public ConfigurationsExportId $export_id;
  public ExportRequestTime $export_request_time;
  public ExportStatus $export_status;
  public boolean $is_truncated;
  public TimeStamp $requested_end_time;
  public TimeStamp $requested_start_time;
  public ExportStatusMessage $status_message;
}

class ExportRequestTime {
}

class ExportStatus {
}

class ExportStatusMessage {
}

class ExportsInfo {
}

class Filter {
  public Condition $condition;
  public string $name;
  public FilterValues $values;
}

class FilterName {
}

class FilterValue {
}

class FilterValues {
}

class Filters {
}

class GetDiscoverySummaryRequest {
}

class GetDiscoverySummaryResponse {
  public CustomerAgentInfo $agent_summary;
  public Long $applications;
  public CustomerConnectorInfo $connector_summary;
  public Long $servers;
  public Long $servers_mapped_to_applications;
  public Long $servers_mappedto_tags;
}

class HomeRegionNotSetException {
  public Message $message;
}

class ImportStatus {
}

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
}

class ImportTaskFilter {
  public ImportTaskFilterName $name;
  public ImportTaskFilterValueList $values;
}

class ImportTaskFilterName {
}

class ImportTaskFilterValue {
}

class ImportTaskFilterValueList {
}

class ImportTaskIdentifier {
}

class ImportTaskList {
}

class ImportTaskName {
}

class ImportURL {
}

class Integer {
}

class InvalidParameterException {
  public Message $message;
}

class InvalidParameterValueException {
  public Message $message;
}

class ListConfigurationsRequest {
  public ConfigurationItemType $configuration_type;
  public Filters $filters;
  public int $max_results;
  public NextToken $next_token;
  public OrderByList $order_by;
}

class ListConfigurationsResponse {
  public Configurations $configurations;
  public NextToken $next_token;
}

class ListServerNeighborsRequest {
  public ConfigurationId $configuration_id;
  public int $max_results;
  public ConfigurationIdList $neighbor_configuration_ids;
  public string $next_token;
  public boolean $port_information_needed;
}

class ListServerNeighborsResponse {
  public Long $known_dependency_count;
  public NeighborDetailsList $neighbors;
  public string $next_token;
}

class Long {
}

class Message {
}

class NeighborConnectionDetail {
  public Long $connections_count;
  public BoxedInteger $destination_port;
  public ConfigurationId $destination_server_id;
  public ConfigurationId $source_server_id;
  public string $transport_protocol;
}

class NeighborDetailsList {
}

class NextToken {
}

class OperationNotPermittedException {
  public Message $message;
}

class OrderByElement {
  public string $field_name;
  public orderString $sort_order;
}

class OrderByList {
}

class ResourceInUseException {
  public Message $message;
}

class ResourceNotFoundException {
  public Message $message;
}

class S3Bucket {
}

class S3PresignedUrl {
}

class SchemaStorageConfig {
}

class ServerInternalErrorException {
  public Message $message;
}

class StartContinuousExportRequest {
}

class StartContinuousExportResponse {
  public DataSource $data_source;
  public ConfigurationsExportId $export_id;
  public S3Bucket $s_3_bucket;
  public SchemaStorageConfig $schema_storage_config;
  public TimeStamp $start_time;
}

class StartDataCollectionByAgentIdsRequest {
  public AgentIds $agent_ids;
}

class StartDataCollectionByAgentIdsResponse {
  public AgentConfigurationStatusList $agents_configuration_status;
}

class StartExportTaskRequest {
  public TimeStamp $end_time;
  public ExportDataFormats $export_data_format;
  public ExportFilters $filters;
  public TimeStamp $start_time;
}

class StartExportTaskResponse {
  public ConfigurationsExportId $export_id;
}

class StartImportTaskRequest {
  public ClientRequestToken $client_request_token;
  public ImportURL $import_url;
  public ImportTaskName $name;
}

class StartImportTaskResponse {
  public ImportTask $task;
}

class StopContinuousExportRequest {
  public ConfigurationsExportId $export_id;
}

class StopContinuousExportResponse {
  public TimeStamp $start_time;
  public TimeStamp $stop_time;
}

class StopDataCollectionByAgentIdsRequest {
  public AgentIds $agent_ids;
}

class StopDataCollectionByAgentIdsResponse {
  public AgentConfigurationStatusList $agents_configuration_status;
}

class String {
}

class StringMax255 {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagFilter {
  public FilterName $name;
  public FilterValues $values;
}

class TagFilters {
}

class TagKey {
}

class TagSet {
}

class TagValue {
}

class TimeStamp {
}

class ToDeleteIdentifierList {
}

class UpdateApplicationRequest {
  public ApplicationId $configuration_id;
  public string $description;
  public string $name;
}

class UpdateApplicationResponse {
}

class orderString {
}

