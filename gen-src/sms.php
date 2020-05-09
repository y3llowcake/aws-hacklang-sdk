<?hh // strict
namespace slack\aws\sms;

interface SMS {
  public function CreateApp(CreateAppRequest): Awaitable<Errors\Result<CreateAppResponse>>;
  public function CreateReplicationJob(CreateReplicationJobRequest): Awaitable<Errors\Result<CreateReplicationJobResponse>>;
  public function DeleteApp(DeleteAppRequest): Awaitable<Errors\Result<DeleteAppResponse>>;
  public function DeleteAppLaunchConfiguration(DeleteAppLaunchConfigurationRequest): Awaitable<Errors\Result<DeleteAppLaunchConfigurationResponse>>;
  public function DeleteAppReplicationConfiguration(DeleteAppReplicationConfigurationRequest): Awaitable<Errors\Result<DeleteAppReplicationConfigurationResponse>>;
  public function DeleteReplicationJob(DeleteReplicationJobRequest): Awaitable<Errors\Result<DeleteReplicationJobResponse>>;
  public function DeleteServerCatalog(DeleteServerCatalogRequest): Awaitable<Errors\Result<DeleteServerCatalogResponse>>;
  public function DisassociateConnector(DisassociateConnectorRequest): Awaitable<Errors\Result<DisassociateConnectorResponse>>;
  public function GenerateChangeSet(GenerateChangeSetRequest): Awaitable<Errors\Result<GenerateChangeSetResponse>>;
  public function GenerateTemplate(GenerateTemplateRequest): Awaitable<Errors\Result<GenerateTemplateResponse>>;
  public function GetApp(GetAppRequest): Awaitable<Errors\Result<GetAppResponse>>;
  public function GetAppLaunchConfiguration(GetAppLaunchConfigurationRequest): Awaitable<Errors\Result<GetAppLaunchConfigurationResponse>>;
  public function GetAppReplicationConfiguration(GetAppReplicationConfigurationRequest): Awaitable<Errors\Result<GetAppReplicationConfigurationResponse>>;
  public function GetConnectors(GetConnectorsRequest): Awaitable<Errors\Result<GetConnectorsResponse>>;
  public function GetReplicationJobs(GetReplicationJobsRequest): Awaitable<Errors\Result<GetReplicationJobsResponse>>;
  public function GetReplicationRuns(GetReplicationRunsRequest): Awaitable<Errors\Result<GetReplicationRunsResponse>>;
  public function GetServers(GetServersRequest): Awaitable<Errors\Result<GetServersResponse>>;
  public function ImportServerCatalog(ImportServerCatalogRequest): Awaitable<Errors\Result<ImportServerCatalogResponse>>;
  public function LaunchApp(LaunchAppRequest): Awaitable<Errors\Result<LaunchAppResponse>>;
  public function ListApps(ListAppsRequest): Awaitable<Errors\Result<ListAppsResponse>>;
  public function PutAppLaunchConfiguration(PutAppLaunchConfigurationRequest): Awaitable<Errors\Result<PutAppLaunchConfigurationResponse>>;
  public function PutAppReplicationConfiguration(PutAppReplicationConfigurationRequest): Awaitable<Errors\Result<PutAppReplicationConfigurationResponse>>;
  public function StartAppReplication(StartAppReplicationRequest): Awaitable<Errors\Result<StartAppReplicationResponse>>;
  public function StartOnDemandReplicationRun(StartOnDemandReplicationRunRequest): Awaitable<Errors\Result<StartOnDemandReplicationRunResponse>>;
  public function StopAppReplication(StopAppReplicationRequest): Awaitable<Errors\Result<StopAppReplicationResponse>>;
  public function TerminateApp(TerminateAppRequest): Awaitable<Errors\Result<TerminateAppResponse>>;
  public function UpdateApp(UpdateAppRequest): Awaitable<Errors\Result<UpdateAppResponse>>;
  public function UpdateReplicationJob(UpdateReplicationJobRequest): Awaitable<Errors\Result<UpdateReplicationJobResponse>>;
}

class AmiId {
}

class AppDescription {
}

class AppId {
}

class AppIds {
}

class AppLaunchStatus {
}

class AppLaunchStatusMessage {
}

class AppName {
}

class AppReplicationStatus {
}

class AppReplicationStatusMessage {
}

class AppStatus {
}

class AppStatusMessage {
}

class AppSummary {
  public AppId $app_id;
  public Timestamp $creation_time;
  public AppDescription $description;
  public Timestamp $last_modified;
  public Timestamp $latest_replication_time;
  public LaunchDetails $launch_details;
  public AppLaunchStatus $launch_status;
  public AppLaunchStatusMessage $launch_status_message;
  public AppName $name;
  public AppReplicationStatus $replication_status;
  public AppReplicationStatusMessage $replication_status_message;
  public RoleName $role_name;
  public AppStatus $status;
  public AppStatusMessage $status_message;
  public TotalServerGroups $total_server_groups;
  public TotalServers $total_servers;
}

class Apps {
}

class AssociatePublicIpAddress {
}

class BucketName {
}

class ClientToken {
}

class Connector {
  public Timestamp $associated_on;
  public ConnectorCapabilityList $capability_list;
  public ConnectorId $connector_id;
  public IpAddress $ip_address;
  public MacAddress $mac_address;
  public ConnectorStatus $status;
  public ConnectorVersion $version;
  public VmManagerId $vm_manager_id;
  public VmManagerName $vm_manager_name;
  public VmManagerType $vm_manager_type;
}

class ConnectorCapability {
}

class ConnectorCapabilityList {
}

class ConnectorId {
}

class ConnectorList {
}

class ConnectorStatus {
}

class ConnectorVersion {
}

class CreateAppRequest {
  public ClientToken $client_token;
  public AppDescription $description;
  public AppName $name;
  public RoleName $role_name;
  public ServerGroups $server_groups;
  public Tags $tags;
}

class CreateAppResponse {
  public AppSummary $app_summary;
  public ServerGroups $server_groups;
  public Tags $tags;
}

class CreateReplicationJobRequest {
  public Description $description;
  public Encrypted $encrypted;
  public Frequency $frequency;
  public KmsKeyId $kms_key_id;
  public LicenseType $license_type;
  public NumberOfRecentAmisToKeep $number_of_recent_amis_to_keep;
  public RoleName $role_name;
  public RunOnce $run_once;
  public Timestamp $seed_replication_time;
  public ServerId $server_id;
}

class CreateReplicationJobResponse {
  public ReplicationJobId $replication_job_id;
}

class DeleteAppLaunchConfigurationRequest {
  public AppId $app_id;
}

class DeleteAppLaunchConfigurationResponse {
}

class DeleteAppReplicationConfigurationRequest {
  public AppId $app_id;
}

class DeleteAppReplicationConfigurationResponse {
}

class DeleteAppRequest {
  public AppId $app_id;
  public ForceStopAppReplication $force_stop_app_replication;
  public ForceTerminateApp $force_terminate_app;
}

class DeleteAppResponse {
}

class DeleteReplicationJobRequest {
  public ReplicationJobId $replication_job_id;
}

class DeleteReplicationJobResponse {
}

class DeleteServerCatalogRequest {
}

class DeleteServerCatalogResponse {
}

class Description {
}

class DisassociateConnectorRequest {
  public ConnectorId $connector_id;
}

class DisassociateConnectorResponse {
}

class EC2KeyName {
}

class Encrypted {
}

class ErrorMessage {
}

class ForceStopAppReplication {
}

class ForceTerminateApp {
}

class Frequency {
}

class GenerateChangeSetRequest {
  public AppId $app_id;
  public OutputFormat $changeset_format;
}

class GenerateChangeSetResponse {
  public S3Location $s_3_location;
}

class GenerateTemplateRequest {
  public AppId $app_id;
  public OutputFormat $template_format;
}

class GenerateTemplateResponse {
  public S3Location $s_3_location;
}

class GetAppLaunchConfigurationRequest {
  public AppId $app_id;
}

class GetAppLaunchConfigurationResponse {
  public AppId $app_id;
  public RoleName $role_name;
  public ServerGroupLaunchConfigurations $server_group_launch_configurations;
}

class GetAppReplicationConfigurationRequest {
  public AppId $app_id;
}

class GetAppReplicationConfigurationResponse {
  public ServerGroupReplicationConfigurations $server_group_replication_configurations;
}

class GetAppRequest {
  public AppId $app_id;
}

class GetAppResponse {
  public AppSummary $app_summary;
  public ServerGroups $server_groups;
  public Tags $tags;
}

class GetConnectorsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class GetConnectorsResponse {
  public ConnectorList $connector_list;
  public NextToken $next_token;
}

class GetReplicationJobsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ReplicationJobId $replication_job_id;
}

class GetReplicationJobsResponse {
  public NextToken $next_token;
  public ReplicationJobList $replication_job_list;
}

class GetReplicationRunsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ReplicationJobId $replication_job_id;
}

class GetReplicationRunsResponse {
  public NextToken $next_token;
  public ReplicationJob $replication_job;
  public ReplicationRunList $replication_run_list;
}

class GetServersRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public VmServerAddressList $vm_server_address_list;
}

class GetServersResponse {
  public Timestamp $last_modified_on;
  public NextToken $next_token;
  public ServerCatalogStatus $server_catalog_status;
  public ServerList $server_list;
}

class ImportServerCatalogRequest {
}

class ImportServerCatalogResponse {
}

class InstanceType {
}

class InternalError {
  public ErrorMessage $message;
}

class InvalidParameterException {
  public ErrorMessage $message;
}

class IpAddress {
}

class KeyName {
}

class KmsKeyId {
}

class LaunchAppRequest {
  public AppId $app_id;
}

class LaunchAppResponse {
}

class LaunchDetails {
  public Timestamp $latest_launch_time;
  public StackId $stack_id;
  public StackName $stack_name;
}

class LaunchOrder {
}

class LicenseType {
}

class ListAppsRequest {
  public AppIds $app_ids;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListAppsResponse {
  public Apps $apps;
  public NextToken $next_token;
}

class LogicalId {
}

class MacAddress {
}

class MaxResults {
}

class MissingRequiredParameterException {
  public ErrorMessage $message;
}

class NextToken {
}

class NoConnectorsAvailableException {
  public ErrorMessage $message;
}

class NumberOfRecentAmisToKeep {
}

class OperationNotPermittedException {
  public ErrorMessage $message;
}

class OutputFormat {
}

class PutAppLaunchConfigurationRequest {
  public AppId $app_id;
  public RoleName $role_name;
  public ServerGroupLaunchConfigurations $server_group_launch_configurations;
}

class PutAppLaunchConfigurationResponse {
}

class PutAppReplicationConfigurationRequest {
  public AppId $app_id;
  public ServerGroupReplicationConfigurations $server_group_replication_configurations;
}

class PutAppReplicationConfigurationResponse {
}

class ReplicationJob {
  public Description $description;
  public Encrypted $encrypted;
  public Frequency $frequency;
  public KmsKeyId $kms_key_id;
  public AmiId $latest_ami_id;
  public LicenseType $license_type;
  public Timestamp $next_replication_run_start_time;
  public NumberOfRecentAmisToKeep $number_of_recent_amis_to_keep;
  public ReplicationJobId $replication_job_id;
  public ReplicationRunList $replication_run_list;
  public RoleName $role_name;
  public RunOnce $run_once;
  public Timestamp $seed_replication_time;
  public ServerId $server_id;
  public ServerType $server_type;
  public ReplicationJobState $state;
  public ReplicationJobStatusMessage $status_message;
  public VmServer $vm_server;
}

class ReplicationJobAlreadyExistsException {
  public ErrorMessage $message;
}

class ReplicationJobId {
}

class ReplicationJobList {
}

class ReplicationJobNotFoundException {
  public ErrorMessage $message;
}

class ReplicationJobState {
}

class ReplicationJobStatusMessage {
}

class ReplicationJobTerminated {
}

class ReplicationRun {
  public AmiId $ami_id;
  public Timestamp $completed_time;
  public Description $description;
  public Encrypted $encrypted;
  public KmsKeyId $kms_key_id;
  public ReplicationRunId $replication_run_id;
  public Timestamp $scheduled_start_time;
  public ReplicationRunStageDetails $stage_details;
  public ReplicationRunState $state;
  public ReplicationRunStatusMessage $status_message;
  public ReplicationRunType $type;
}

class ReplicationRunId {
}

class ReplicationRunLimitExceededException {
  public ErrorMessage $message;
}

class ReplicationRunList {
}

class ReplicationRunStage {
}

class ReplicationRunStageDetails {
  public ReplicationRunStage $stage;
  public ReplicationRunStageProgress $stage_progress;
}

class ReplicationRunStageProgress {
}

class ReplicationRunState {
}

class ReplicationRunStatusMessage {
}

class ReplicationRunType {
}

class RoleName {
}

class RunOnce {
}

class S3Location {
  public BucketName $bucket;
  public KeyName $key;
}

class SecurityGroup {
}

class Server {
  public ReplicationJobId $replication_job_id;
  public ReplicationJobTerminated $replication_job_terminated;
  public ServerId $server_id;
  public ServerType $server_type;
  public VmServer $vm_server;
}

class ServerCannotBeReplicatedException {
  public ErrorMessage $message;
}

class ServerCatalogStatus {
}

class ServerGroup {
  public ServerGroupName $name;
  public ServerGroupId $server_group_id;
  public ServerList $server_list;
}

class ServerGroupId {
}

class ServerGroupLaunchConfiguration {
  public LaunchOrder $launch_order;
  public ServerGroupId $server_group_id;
  public ServerLaunchConfigurations $server_launch_configurations;
}

class ServerGroupLaunchConfigurations {
}

class ServerGroupName {
}

class ServerGroupReplicationConfiguration {
  public ServerGroupId $server_group_id;
  public ServerReplicationConfigurations $server_replication_configurations;
}

class ServerGroupReplicationConfigurations {
}

class ServerGroups {
}

class ServerId {
}

class ServerLaunchConfiguration {
  public AssociatePublicIpAddress $associate_public_ip_address;
  public EC2KeyName $ec_2_key_name;
  public InstanceType $instance_type;
  public LogicalId $logical_id;
  public SecurityGroup $security_group;
  public Server $server;
  public Subnet $subnet;
  public UserData $user_data;
  public VPC $vpc;
}

class ServerLaunchConfigurations {
}

class ServerList {
}

class ServerReplicationConfiguration {
  public Server $server;
  public ServerReplicationParameters $server_replication_parameters;
}

class ServerReplicationConfigurations {
}

class ServerReplicationParameters {
  public Encrypted $encrypted;
  public Frequency $frequency;
  public KmsKeyId $kms_key_id;
  public LicenseType $license_type;
  public NumberOfRecentAmisToKeep $number_of_recent_amis_to_keep;
  public RunOnce $run_once;
  public Timestamp $seed_time;
}

class ServerType {
}

class StackId {
}

class StackName {
}

class StartAppReplicationRequest {
  public AppId $app_id;
}

class StartAppReplicationResponse {
}

class StartOnDemandReplicationRunRequest {
  public Description $description;
  public ReplicationJobId $replication_job_id;
}

class StartOnDemandReplicationRunResponse {
  public ReplicationRunId $replication_run_id;
}

class StopAppReplicationRequest {
  public AppId $app_id;
}

class StopAppReplicationResponse {
}

class Subnet {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagValue {
}

class Tags {
}

class TemporarilyUnavailableException {
}

class TerminateAppRequest {
  public AppId $app_id;
}

class TerminateAppResponse {
}

class Timestamp {
}

class TotalServerGroups {
}

class TotalServers {
}

class UnauthorizedOperationException {
  public ErrorMessage $message;
}

class UpdateAppRequest {
  public AppId $app_id;
  public AppDescription $description;
  public AppName $name;
  public RoleName $role_name;
  public ServerGroups $server_groups;
  public Tags $tags;
}

class UpdateAppResponse {
  public AppSummary $app_summary;
  public ServerGroups $server_groups;
  public Tags $tags;
}

class UpdateReplicationJobRequest {
  public Description $description;
  public Encrypted $encrypted;
  public Frequency $frequency;
  public KmsKeyId $kms_key_id;
  public LicenseType $license_type;
  public Timestamp $next_replication_run_start_time;
  public NumberOfRecentAmisToKeep $number_of_recent_amis_to_keep;
  public ReplicationJobId $replication_job_id;
  public RoleName $role_name;
}

class UpdateReplicationJobResponse {
}

class UserData {
  public S3Location $s_3_location;
}

class VPC {
}

class VmId {
}

class VmManagerId {
}

class VmManagerName {
}

class VmManagerType {
}

class VmName {
}

class VmPath {
}

class VmServer {
  public VmManagerName $vm_manager_name;
  public VmManagerType $vm_manager_type;
  public VmName $vm_name;
  public VmPath $vm_path;
  public VmServerAddress $vm_server_address;
}

class VmServerAddress {
  public VmId $vm_id;
  public VmManagerId $vm_manager_id;
}

class VmServerAddressList {
}

