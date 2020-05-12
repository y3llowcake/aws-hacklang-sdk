<?hh // strict
namespace slack\aws\sms;

interface SMS {
  public function CreateApp(CreateAppRequest $in): Awaitable<\Errors\Result<CreateAppResponse>>;
  public function CreateReplicationJob(CreateReplicationJobRequest $in): Awaitable<\Errors\Result<CreateReplicationJobResponse>>;
  public function DeleteApp(DeleteAppRequest $in): Awaitable<\Errors\Result<DeleteAppResponse>>;
  public function DeleteAppLaunchConfiguration(DeleteAppLaunchConfigurationRequest $in): Awaitable<\Errors\Result<DeleteAppLaunchConfigurationResponse>>;
  public function DeleteAppReplicationConfiguration(DeleteAppReplicationConfigurationRequest $in): Awaitable<\Errors\Result<DeleteAppReplicationConfigurationResponse>>;
  public function DeleteReplicationJob(DeleteReplicationJobRequest $in): Awaitable<\Errors\Result<DeleteReplicationJobResponse>>;
  public function DeleteServerCatalog(DeleteServerCatalogRequest $in): Awaitable<\Errors\Result<DeleteServerCatalogResponse>>;
  public function DisassociateConnector(DisassociateConnectorRequest $in): Awaitable<\Errors\Result<DisassociateConnectorResponse>>;
  public function GenerateChangeSet(GenerateChangeSetRequest $in): Awaitable<\Errors\Result<GenerateChangeSetResponse>>;
  public function GenerateTemplate(GenerateTemplateRequest $in): Awaitable<\Errors\Result<GenerateTemplateResponse>>;
  public function GetApp(GetAppRequest $in): Awaitable<\Errors\Result<GetAppResponse>>;
  public function GetAppLaunchConfiguration(GetAppLaunchConfigurationRequest $in): Awaitable<\Errors\Result<GetAppLaunchConfigurationResponse>>;
  public function GetAppReplicationConfiguration(GetAppReplicationConfigurationRequest $in): Awaitable<\Errors\Result<GetAppReplicationConfigurationResponse>>;
  public function GetConnectors(GetConnectorsRequest $in): Awaitable<\Errors\Result<GetConnectorsResponse>>;
  public function GetReplicationJobs(GetReplicationJobsRequest $in): Awaitable<\Errors\Result<GetReplicationJobsResponse>>;
  public function GetReplicationRuns(GetReplicationRunsRequest $in): Awaitable<\Errors\Result<GetReplicationRunsResponse>>;
  public function GetServers(GetServersRequest $in): Awaitable<\Errors\Result<GetServersResponse>>;
  public function ImportServerCatalog(ImportServerCatalogRequest $in): Awaitable<\Errors\Result<ImportServerCatalogResponse>>;
  public function LaunchApp(LaunchAppRequest $in): Awaitable<\Errors\Result<LaunchAppResponse>>;
  public function ListApps(ListAppsRequest $in): Awaitable<\Errors\Result<ListAppsResponse>>;
  public function PutAppLaunchConfiguration(PutAppLaunchConfigurationRequest $in): Awaitable<\Errors\Result<PutAppLaunchConfigurationResponse>>;
  public function PutAppReplicationConfiguration(PutAppReplicationConfigurationRequest $in): Awaitable<\Errors\Result<PutAppReplicationConfigurationResponse>>;
  public function StartAppReplication(StartAppReplicationRequest $in): Awaitable<\Errors\Result<StartAppReplicationResponse>>;
  public function StartOnDemandReplicationRun(StartOnDemandReplicationRunRequest $in): Awaitable<\Errors\Result<StartOnDemandReplicationRunResponse>>;
  public function StopAppReplication(StopAppReplicationRequest $in): Awaitable<\Errors\Result<StopAppReplicationResponse>>;
  public function TerminateApp(TerminateAppRequest $in): Awaitable<\Errors\Result<TerminateAppResponse>>;
  public function UpdateApp(UpdateAppRequest $in): Awaitable<\Errors\Result<UpdateAppResponse>>;
  public function UpdateReplicationJob(UpdateReplicationJobRequest $in): Awaitable<\Errors\Result<UpdateReplicationJobResponse>>;
}

type AmiId = string;

type AppDescription = string;

type AppId = string;

type AppIds = vec<AppId>;

type AppLaunchStatus = string;

type AppLaunchStatusMessage = string;

type AppName = string;

type AppReplicationStatus = string;

type AppReplicationStatusMessage = string;

type AppStatus = string;

type AppStatusMessage = string;

class AppSummary {
  public ?AppId $app_id;
  public ?Timestamp $creation_time;
  public ?AppDescription $description;
  public ?Timestamp $last_modified;
  public ?Timestamp $latest_replication_time;
  public ?LaunchDetails $launch_details;
  public ?AppLaunchStatus $launch_status;
  public ?AppLaunchStatusMessage $launch_status_message;
  public ?AppName $name;
  public ?AppReplicationStatus $replication_status;
  public ?AppReplicationStatusMessage $replication_status_message;
  public ?RoleName $role_name;
  public ?AppStatus $status;
  public ?AppStatusMessage $status_message;
  public ?TotalServerGroups $total_server_groups;
  public ?TotalServers $total_servers;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'creation_time' => ?Timestamp,
    ?'description' => ?AppDescription,
    ?'last_modified' => ?Timestamp,
    ?'latest_replication_time' => ?Timestamp,
    ?'launch_details' => ?LaunchDetails,
    ?'launch_status' => ?AppLaunchStatus,
    ?'launch_status_message' => ?AppLaunchStatusMessage,
    ?'name' => ?AppName,
    ?'replication_status' => ?AppReplicationStatus,
    ?'replication_status_message' => ?AppReplicationStatusMessage,
    ?'role_name' => ?RoleName,
    ?'status' => ?AppStatus,
    ?'status_message' => ?AppStatusMessage,
    ?'total_server_groups' => ?TotalServerGroups,
    ?'total_servers' => ?TotalServers,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->last_modified = $s['last_modified'] ?? 0;
    $this->latest_replication_time = $s['latest_replication_time'] ?? 0;
    $this->launch_details = $s['launch_details'] ?? null;
    $this->launch_status = $s['launch_status'] ?? '';
    $this->launch_status_message = $s['launch_status_message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->replication_status = $s['replication_status'] ?? '';
    $this->replication_status_message = $s['replication_status_message'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->total_server_groups = $s['total_server_groups'] ?? 0;
    $this->total_servers = $s['total_servers'] ?? 0;
  }
}

type Apps = vec<AppSummary>;

type AssociatePublicIpAddress = bool;

type BucketName = string;

type ClientToken = string;

class Connector {
  public ?Timestamp $associated_on;
  public ?ConnectorCapabilityList $capability_list;
  public ?ConnectorId $connector_id;
  public ?IpAddress $ip_address;
  public ?MacAddress $mac_address;
  public ?ConnectorStatus $status;
  public ?ConnectorVersion $version;
  public ?VmManagerId $vm_manager_id;
  public ?VmManagerName $vm_manager_name;
  public ?VmManagerType $vm_manager_type;

  public function __construct(shape(
    ?'associated_on' => ?Timestamp,
    ?'capability_list' => ?ConnectorCapabilityList,
    ?'connector_id' => ?ConnectorId,
    ?'ip_address' => ?IpAddress,
    ?'mac_address' => ?MacAddress,
    ?'status' => ?ConnectorStatus,
    ?'version' => ?ConnectorVersion,
    ?'vm_manager_id' => ?VmManagerId,
    ?'vm_manager_name' => ?VmManagerName,
    ?'vm_manager_type' => ?VmManagerType,
  ) $s = shape()) {
    $this->associated_on = $s['associated_on'] ?? 0;
    $this->capability_list = $s['capability_list'] ?? vec[];
    $this->connector_id = $s['connector_id'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
    $this->mac_address = $s['mac_address'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->version = $s['version'] ?? '';
    $this->vm_manager_id = $s['vm_manager_id'] ?? '';
    $this->vm_manager_name = $s['vm_manager_name'] ?? '';
    $this->vm_manager_type = $s['vm_manager_type'] ?? '';
  }
}

type ConnectorCapability = string;

type ConnectorCapabilityList = vec<ConnectorCapability>;

type ConnectorId = string;

type ConnectorList = vec<Connector>;

type ConnectorStatus = string;

type ConnectorVersion = string;

class CreateAppRequest {
  public ?ClientToken $client_token;
  public ?AppDescription $description;
  public ?AppName $name;
  public ?RoleName $role_name;
  public ?ServerGroups $server_groups;
  public ?Tags $tags;

  public function __construct(shape(
    ?'client_token' => ?ClientToken,
    ?'description' => ?AppDescription,
    ?'name' => ?AppName,
    ?'role_name' => ?RoleName,
    ?'server_groups' => ?ServerGroups,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
    $this->server_groups = $s['server_groups'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateAppResponse {
  public ?AppSummary $app_summary;
  public ?ServerGroups $server_groups;
  public ?Tags $tags;

  public function __construct(shape(
    ?'app_summary' => ?AppSummary,
    ?'server_groups' => ?ServerGroups,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->app_summary = $s['app_summary'] ?? null;
    $this->server_groups = $s['server_groups'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateReplicationJobRequest {
  public ?Description $description;
  public ?Encrypted $encrypted;
  public ?Frequency $frequency;
  public ?KmsKeyId $kms_key_id;
  public ?LicenseType $license_type;
  public ?NumberOfRecentAmisToKeep $number_of_recent_amis_to_keep;
  public ?RoleName $role_name;
  public ?RunOnce $run_once;
  public ?Timestamp $seed_replication_time;
  public ?ServerId $server_id;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'encrypted' => ?Encrypted,
    ?'frequency' => ?Frequency,
    ?'kms_key_id' => ?KmsKeyId,
    ?'license_type' => ?LicenseType,
    ?'number_of_recent_amis_to_keep' => ?NumberOfRecentAmisToKeep,
    ?'role_name' => ?RoleName,
    ?'run_once' => ?RunOnce,
    ?'seed_replication_time' => ?Timestamp,
    ?'server_id' => ?ServerId,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->frequency = $s['frequency'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->license_type = $s['license_type'] ?? '';
    $this->number_of_recent_amis_to_keep = $s['number_of_recent_amis_to_keep'] ?? 0;
    $this->role_name = $s['role_name'] ?? '';
    $this->run_once = $s['run_once'] ?? false;
    $this->seed_replication_time = $s['seed_replication_time'] ?? 0;
    $this->server_id = $s['server_id'] ?? '';
  }
}

class CreateReplicationJobResponse {
  public ?ReplicationJobId $replication_job_id;

  public function __construct(shape(
    ?'replication_job_id' => ?ReplicationJobId,
  ) $s = shape()) {
    $this->replication_job_id = $s['replication_job_id'] ?? '';
  }
}

class DeleteAppLaunchConfigurationRequest {
  public ?AppId $app_id;

  public function __construct(shape(
    ?'app_id' => ?AppId,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
  }
}

class DeleteAppLaunchConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteAppReplicationConfigurationRequest {
  public ?AppId $app_id;

  public function __construct(shape(
    ?'app_id' => ?AppId,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
  }
}

class DeleteAppReplicationConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteAppRequest {
  public ?AppId $app_id;
  public ?ForceStopAppReplication $force_stop_app_replication;
  public ?ForceTerminateApp $force_terminate_app;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'force_stop_app_replication' => ?ForceStopAppReplication,
    ?'force_terminate_app' => ?ForceTerminateApp,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->force_stop_app_replication = $s['force_stop_app_replication'] ?? false;
    $this->force_terminate_app = $s['force_terminate_app'] ?? false;
  }
}

class DeleteAppResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteReplicationJobRequest {
  public ?ReplicationJobId $replication_job_id;

  public function __construct(shape(
    ?'replication_job_id' => ?ReplicationJobId,
  ) $s = shape()) {
    $this->replication_job_id = $s['replication_job_id'] ?? '';
  }
}

class DeleteReplicationJobResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteServerCatalogRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteServerCatalogResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Description = string;

class DisassociateConnectorRequest {
  public ?ConnectorId $connector_id;

  public function __construct(shape(
    ?'connector_id' => ?ConnectorId,
  ) $s = shape()) {
    $this->connector_id = $s['connector_id'] ?? '';
  }
}

class DisassociateConnectorResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type EC2KeyName = string;

type Encrypted = bool;

type ErrorMessage = string;

type ForceStopAppReplication = bool;

type ForceTerminateApp = bool;

type Frequency = int;

class GenerateChangeSetRequest {
  public ?AppId $app_id;
  public ?OutputFormat $changeset_format;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'changeset_format' => ?OutputFormat,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->changeset_format = $s['changeset_format'] ?? '';
  }
}

class GenerateChangeSetResponse {
  public ?S3Location $s_3_location;

  public function __construct(shape(
    ?'s_3_location' => ?S3Location,
  ) $s = shape()) {
    $this->s_3_location = $s['s_3_location'] ?? null;
  }
}

class GenerateTemplateRequest {
  public ?AppId $app_id;
  public ?OutputFormat $template_format;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'template_format' => ?OutputFormat,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->template_format = $s['template_format'] ?? '';
  }
}

class GenerateTemplateResponse {
  public ?S3Location $s_3_location;

  public function __construct(shape(
    ?'s_3_location' => ?S3Location,
  ) $s = shape()) {
    $this->s_3_location = $s['s_3_location'] ?? null;
  }
}

class GetAppLaunchConfigurationRequest {
  public ?AppId $app_id;

  public function __construct(shape(
    ?'app_id' => ?AppId,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
  }
}

class GetAppLaunchConfigurationResponse {
  public ?AppId $app_id;
  public ?RoleName $role_name;
  public ?ServerGroupLaunchConfigurations $server_group_launch_configurations;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'role_name' => ?RoleName,
    ?'server_group_launch_configurations' => ?ServerGroupLaunchConfigurations,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
    $this->server_group_launch_configurations = $s['server_group_launch_configurations'] ?? vec[];
  }
}

class GetAppReplicationConfigurationRequest {
  public ?AppId $app_id;

  public function __construct(shape(
    ?'app_id' => ?AppId,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
  }
}

class GetAppReplicationConfigurationResponse {
  public ?ServerGroupReplicationConfigurations $server_group_replication_configurations;

  public function __construct(shape(
    ?'server_group_replication_configurations' => ?ServerGroupReplicationConfigurations,
  ) $s = shape()) {
    $this->server_group_replication_configurations = $s['server_group_replication_configurations'] ?? vec[];
  }
}

class GetAppRequest {
  public ?AppId $app_id;

  public function __construct(shape(
    ?'app_id' => ?AppId,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
  }
}

class GetAppResponse {
  public ?AppSummary $app_summary;
  public ?ServerGroups $server_groups;
  public ?Tags $tags;

  public function __construct(shape(
    ?'app_summary' => ?AppSummary,
    ?'server_groups' => ?ServerGroups,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->app_summary = $s['app_summary'] ?? null;
    $this->server_groups = $s['server_groups'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class GetConnectorsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetConnectorsResponse {
  public ?ConnectorList $connector_list;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'connector_list' => ?ConnectorList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->connector_list = $s['connector_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetReplicationJobsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ReplicationJobId $replication_job_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'replication_job_id' => ?ReplicationJobId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->replication_job_id = $s['replication_job_id'] ?? '';
  }
}

class GetReplicationJobsResponse {
  public ?NextToken $next_token;
  public ?ReplicationJobList $replication_job_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'replication_job_list' => ?ReplicationJobList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->replication_job_list = $s['replication_job_list'] ?? vec[];
  }
}

class GetReplicationRunsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ReplicationJobId $replication_job_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'replication_job_id' => ?ReplicationJobId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->replication_job_id = $s['replication_job_id'] ?? '';
  }
}

class GetReplicationRunsResponse {
  public ?NextToken $next_token;
  public ?ReplicationJob $replication_job;
  public ?ReplicationRunList $replication_run_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'replication_job' => ?ReplicationJob,
    ?'replication_run_list' => ?ReplicationRunList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->replication_job = $s['replication_job'] ?? null;
    $this->replication_run_list = $s['replication_run_list'] ?? vec[];
  }
}

class GetServersRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?VmServerAddressList $vm_server_address_list;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'vm_server_address_list' => ?VmServerAddressList,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->vm_server_address_list = $s['vm_server_address_list'] ?? vec[];
  }
}

class GetServersResponse {
  public ?Timestamp $last_modified_on;
  public ?NextToken $next_token;
  public ?ServerCatalogStatus $server_catalog_status;
  public ?ServerList $server_list;

  public function __construct(shape(
    ?'last_modified_on' => ?Timestamp,
    ?'next_token' => ?NextToken,
    ?'server_catalog_status' => ?ServerCatalogStatus,
    ?'server_list' => ?ServerList,
  ) $s = shape()) {
    $this->last_modified_on = $s['last_modified_on'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->server_catalog_status = $s['server_catalog_status'] ?? '';
    $this->server_list = $s['server_list'] ?? vec[];
  }
}

class ImportServerCatalogRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ImportServerCatalogResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type InstanceType = string;

class InternalError {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type IpAddress = string;

type KeyName = string;

type KmsKeyId = string;

class LaunchAppRequest {
  public ?AppId $app_id;

  public function __construct(shape(
    ?'app_id' => ?AppId,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
  }
}

class LaunchAppResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class LaunchDetails {
  public ?Timestamp $latest_launch_time;
  public ?StackId $stack_id;
  public ?StackName $stack_name;

  public function __construct(shape(
    ?'latest_launch_time' => ?Timestamp,
    ?'stack_id' => ?StackId,
    ?'stack_name' => ?StackName,
  ) $s = shape()) {
    $this->latest_launch_time = $s['latest_launch_time'] ?? 0;
    $this->stack_id = $s['stack_id'] ?? '';
    $this->stack_name = $s['stack_name'] ?? '';
  }
}

type LaunchOrder = int;

type LicenseType = string;

class ListAppsRequest {
  public ?AppIds $app_ids;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'app_ids' => ?AppIds,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->app_ids = $s['app_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAppsResponse {
  public ?Apps $apps;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'apps' => ?Apps,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->apps = $s['apps'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type LogicalId = string;

type MacAddress = string;

type MaxResults = int;

class MissingRequiredParameterException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type NextToken = string;

class NoConnectorsAvailableException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type NumberOfRecentAmisToKeep = int;

class OperationNotPermittedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type OutputFormat = string;

class PutAppLaunchConfigurationRequest {
  public ?AppId $app_id;
  public ?RoleName $role_name;
  public ?ServerGroupLaunchConfigurations $server_group_launch_configurations;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'role_name' => ?RoleName,
    ?'server_group_launch_configurations' => ?ServerGroupLaunchConfigurations,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
    $this->server_group_launch_configurations = $s['server_group_launch_configurations'] ?? vec[];
  }
}

class PutAppLaunchConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutAppReplicationConfigurationRequest {
  public ?AppId $app_id;
  public ?ServerGroupReplicationConfigurations $server_group_replication_configurations;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'server_group_replication_configurations' => ?ServerGroupReplicationConfigurations,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->server_group_replication_configurations = $s['server_group_replication_configurations'] ?? vec[];
  }
}

class PutAppReplicationConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReplicationJob {
  public ?Description $description;
  public ?Encrypted $encrypted;
  public ?Frequency $frequency;
  public ?KmsKeyId $kms_key_id;
  public ?AmiId $latest_ami_id;
  public ?LicenseType $license_type;
  public ?Timestamp $next_replication_run_start_time;
  public ?NumberOfRecentAmisToKeep $number_of_recent_amis_to_keep;
  public ?ReplicationJobId $replication_job_id;
  public ?ReplicationRunList $replication_run_list;
  public ?RoleName $role_name;
  public ?RunOnce $run_once;
  public ?Timestamp $seed_replication_time;
  public ?ServerId $server_id;
  public ?ServerType $server_type;
  public ?ReplicationJobState $state;
  public ?ReplicationJobStatusMessage $status_message;
  public ?VmServer $vm_server;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'encrypted' => ?Encrypted,
    ?'frequency' => ?Frequency,
    ?'kms_key_id' => ?KmsKeyId,
    ?'latest_ami_id' => ?AmiId,
    ?'license_type' => ?LicenseType,
    ?'next_replication_run_start_time' => ?Timestamp,
    ?'number_of_recent_amis_to_keep' => ?NumberOfRecentAmisToKeep,
    ?'replication_job_id' => ?ReplicationJobId,
    ?'replication_run_list' => ?ReplicationRunList,
    ?'role_name' => ?RoleName,
    ?'run_once' => ?RunOnce,
    ?'seed_replication_time' => ?Timestamp,
    ?'server_id' => ?ServerId,
    ?'server_type' => ?ServerType,
    ?'state' => ?ReplicationJobState,
    ?'status_message' => ?ReplicationJobStatusMessage,
    ?'vm_server' => ?VmServer,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->frequency = $s['frequency'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->latest_ami_id = $s['latest_ami_id'] ?? '';
    $this->license_type = $s['license_type'] ?? '';
    $this->next_replication_run_start_time = $s['next_replication_run_start_time'] ?? 0;
    $this->number_of_recent_amis_to_keep = $s['number_of_recent_amis_to_keep'] ?? 0;
    $this->replication_job_id = $s['replication_job_id'] ?? '';
    $this->replication_run_list = $s['replication_run_list'] ?? vec[];
    $this->role_name = $s['role_name'] ?? '';
    $this->run_once = $s['run_once'] ?? false;
    $this->seed_replication_time = $s['seed_replication_time'] ?? 0;
    $this->server_id = $s['server_id'] ?? '';
    $this->server_type = $s['server_type'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->vm_server = $s['vm_server'] ?? null;
  }
}

class ReplicationJobAlreadyExistsException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ReplicationJobId = string;

type ReplicationJobList = vec<ReplicationJob>;

class ReplicationJobNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ReplicationJobState = string;

type ReplicationJobStatusMessage = string;

type ReplicationJobTerminated = bool;

class ReplicationRun {
  public ?AmiId $ami_id;
  public ?Timestamp $completed_time;
  public ?Description $description;
  public ?Encrypted $encrypted;
  public ?KmsKeyId $kms_key_id;
  public ?ReplicationRunId $replication_run_id;
  public ?Timestamp $scheduled_start_time;
  public ?ReplicationRunStageDetails $stage_details;
  public ?ReplicationRunState $state;
  public ?ReplicationRunStatusMessage $status_message;
  public ?ReplicationRunType $type;

  public function __construct(shape(
    ?'ami_id' => ?AmiId,
    ?'completed_time' => ?Timestamp,
    ?'description' => ?Description,
    ?'encrypted' => ?Encrypted,
    ?'kms_key_id' => ?KmsKeyId,
    ?'replication_run_id' => ?ReplicationRunId,
    ?'scheduled_start_time' => ?Timestamp,
    ?'stage_details' => ?ReplicationRunStageDetails,
    ?'state' => ?ReplicationRunState,
    ?'status_message' => ?ReplicationRunStatusMessage,
    ?'type' => ?ReplicationRunType,
  ) $s = shape()) {
    $this->ami_id = $s['ami_id'] ?? '';
    $this->completed_time = $s['completed_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->replication_run_id = $s['replication_run_id'] ?? '';
    $this->scheduled_start_time = $s['scheduled_start_time'] ?? 0;
    $this->stage_details = $s['stage_details'] ?? null;
    $this->state = $s['state'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ReplicationRunId = string;

class ReplicationRunLimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ReplicationRunList = vec<ReplicationRun>;

type ReplicationRunStage = string;

class ReplicationRunStageDetails {
  public ?ReplicationRunStage $stage;
  public ?ReplicationRunStageProgress $stage_progress;

  public function __construct(shape(
    ?'stage' => ?ReplicationRunStage,
    ?'stage_progress' => ?ReplicationRunStageProgress,
  ) $s = shape()) {
    $this->stage = $s['stage'] ?? '';
    $this->stage_progress = $s['stage_progress'] ?? '';
  }
}

type ReplicationRunStageProgress = string;

type ReplicationRunState = string;

type ReplicationRunStatusMessage = string;

type ReplicationRunType = string;

type RoleName = string;

type RunOnce = bool;

class S3Location {
  public ?BucketName $bucket;
  public ?KeyName $key;

  public function __construct(shape(
    ?'bucket' => ?BucketName,
    ?'key' => ?KeyName,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->key = $s['key'] ?? '';
  }
}

type SecurityGroup = string;

class Server {
  public ?ReplicationJobId $replication_job_id;
  public ?ReplicationJobTerminated $replication_job_terminated;
  public ?ServerId $server_id;
  public ?ServerType $server_type;
  public ?VmServer $vm_server;

  public function __construct(shape(
    ?'replication_job_id' => ?ReplicationJobId,
    ?'replication_job_terminated' => ?ReplicationJobTerminated,
    ?'server_id' => ?ServerId,
    ?'server_type' => ?ServerType,
    ?'vm_server' => ?VmServer,
  ) $s = shape()) {
    $this->replication_job_id = $s['replication_job_id'] ?? '';
    $this->replication_job_terminated = $s['replication_job_terminated'] ?? false;
    $this->server_id = $s['server_id'] ?? '';
    $this->server_type = $s['server_type'] ?? '';
    $this->vm_server = $s['vm_server'] ?? null;
  }
}

class ServerCannotBeReplicatedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ServerCatalogStatus = string;

class ServerGroup {
  public ?ServerGroupName $name;
  public ?ServerGroupId $server_group_id;
  public ?ServerList $server_list;

  public function __construct(shape(
    ?'name' => ?ServerGroupName,
    ?'server_group_id' => ?ServerGroupId,
    ?'server_list' => ?ServerList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->server_group_id = $s['server_group_id'] ?? '';
    $this->server_list = $s['server_list'] ?? vec[];
  }
}

type ServerGroupId = string;

class ServerGroupLaunchConfiguration {
  public ?LaunchOrder $launch_order;
  public ?ServerGroupId $server_group_id;
  public ?ServerLaunchConfigurations $server_launch_configurations;

  public function __construct(shape(
    ?'launch_order' => ?LaunchOrder,
    ?'server_group_id' => ?ServerGroupId,
    ?'server_launch_configurations' => ?ServerLaunchConfigurations,
  ) $s = shape()) {
    $this->launch_order = $s['launch_order'] ?? 0;
    $this->server_group_id = $s['server_group_id'] ?? '';
    $this->server_launch_configurations = $s['server_launch_configurations'] ?? vec[];
  }
}

type ServerGroupLaunchConfigurations = vec<ServerGroupLaunchConfiguration>;

type ServerGroupName = string;

class ServerGroupReplicationConfiguration {
  public ?ServerGroupId $server_group_id;
  public ?ServerReplicationConfigurations $server_replication_configurations;

  public function __construct(shape(
    ?'server_group_id' => ?ServerGroupId,
    ?'server_replication_configurations' => ?ServerReplicationConfigurations,
  ) $s = shape()) {
    $this->server_group_id = $s['server_group_id'] ?? '';
    $this->server_replication_configurations = $s['server_replication_configurations'] ?? vec[];
  }
}

type ServerGroupReplicationConfigurations = vec<ServerGroupReplicationConfiguration>;

type ServerGroups = vec<ServerGroup>;

type ServerId = string;

class ServerLaunchConfiguration {
  public ?AssociatePublicIpAddress $associate_public_ip_address;
  public ?EC2KeyName $ec_2_key_name;
  public ?InstanceType $instance_type;
  public ?LogicalId $logical_id;
  public ?SecurityGroup $security_group;
  public ?Server $server;
  public ?Subnet $subnet;
  public ?UserData $user_data;
  public ?VPC $vpc;

  public function __construct(shape(
    ?'associate_public_ip_address' => ?AssociatePublicIpAddress,
    ?'ec_2_key_name' => ?EC2KeyName,
    ?'instance_type' => ?InstanceType,
    ?'logical_id' => ?LogicalId,
    ?'security_group' => ?SecurityGroup,
    ?'server' => ?Server,
    ?'subnet' => ?Subnet,
    ?'user_data' => ?UserData,
    ?'vpc' => ?VPC,
  ) $s = shape()) {
    $this->associate_public_ip_address = $s['associate_public_ip_address'] ?? false;
    $this->ec_2_key_name = $s['ec_2_key_name'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->logical_id = $s['logical_id'] ?? '';
    $this->security_group = $s['security_group'] ?? '';
    $this->server = $s['server'] ?? null;
    $this->subnet = $s['subnet'] ?? '';
    $this->user_data = $s['user_data'] ?? null;
    $this->vpc = $s['vpc'] ?? '';
  }
}

type ServerLaunchConfigurations = vec<ServerLaunchConfiguration>;

type ServerList = vec<Server>;

class ServerReplicationConfiguration {
  public ?Server $server;
  public ?ServerReplicationParameters $server_replication_parameters;

  public function __construct(shape(
    ?'server' => ?Server,
    ?'server_replication_parameters' => ?ServerReplicationParameters,
  ) $s = shape()) {
    $this->server = $s['server'] ?? null;
    $this->server_replication_parameters = $s['server_replication_parameters'] ?? null;
  }
}

type ServerReplicationConfigurations = vec<ServerReplicationConfiguration>;

class ServerReplicationParameters {
  public ?Encrypted $encrypted;
  public ?Frequency $frequency;
  public ?KmsKeyId $kms_key_id;
  public ?LicenseType $license_type;
  public ?NumberOfRecentAmisToKeep $number_of_recent_amis_to_keep;
  public ?RunOnce $run_once;
  public ?Timestamp $seed_time;

  public function __construct(shape(
    ?'encrypted' => ?Encrypted,
    ?'frequency' => ?Frequency,
    ?'kms_key_id' => ?KmsKeyId,
    ?'license_type' => ?LicenseType,
    ?'number_of_recent_amis_to_keep' => ?NumberOfRecentAmisToKeep,
    ?'run_once' => ?RunOnce,
    ?'seed_time' => ?Timestamp,
  ) $s = shape()) {
    $this->encrypted = $s['encrypted'] ?? false;
    $this->frequency = $s['frequency'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->license_type = $s['license_type'] ?? '';
    $this->number_of_recent_amis_to_keep = $s['number_of_recent_amis_to_keep'] ?? 0;
    $this->run_once = $s['run_once'] ?? false;
    $this->seed_time = $s['seed_time'] ?? 0;
  }
}

type ServerType = string;

type StackId = string;

type StackName = string;

class StartAppReplicationRequest {
  public ?AppId $app_id;

  public function __construct(shape(
    ?'app_id' => ?AppId,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
  }
}

class StartAppReplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartOnDemandReplicationRunRequest {
  public ?Description $description;
  public ?ReplicationJobId $replication_job_id;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'replication_job_id' => ?ReplicationJobId,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->replication_job_id = $s['replication_job_id'] ?? '';
  }
}

class StartOnDemandReplicationRunResponse {
  public ?ReplicationRunId $replication_run_id;

  public function __construct(shape(
    ?'replication_run_id' => ?ReplicationRunId,
  ) $s = shape()) {
    $this->replication_run_id = $s['replication_run_id'] ?? '';
  }
}

class StopAppReplicationRequest {
  public ?AppId $app_id;

  public function __construct(shape(
    ?'app_id' => ?AppId,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
  }
}

class StopAppReplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Subnet = string;

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

type TagKey = string;

type TagValue = string;

type Tags = vec<Tag>;

class TemporarilyUnavailableException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TerminateAppRequest {
  public ?AppId $app_id;

  public function __construct(shape(
    ?'app_id' => ?AppId,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
  }
}

class TerminateAppResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Timestamp = int;

type TotalServerGroups = int;

type TotalServers = int;

class UnauthorizedOperationException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UpdateAppRequest {
  public ?AppId $app_id;
  public ?AppDescription $description;
  public ?AppName $name;
  public ?RoleName $role_name;
  public ?ServerGroups $server_groups;
  public ?Tags $tags;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'description' => ?AppDescription,
    ?'name' => ?AppName,
    ?'role_name' => ?RoleName,
    ?'server_groups' => ?ServerGroups,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
    $this->server_groups = $s['server_groups'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class UpdateAppResponse {
  public ?AppSummary $app_summary;
  public ?ServerGroups $server_groups;
  public ?Tags $tags;

  public function __construct(shape(
    ?'app_summary' => ?AppSummary,
    ?'server_groups' => ?ServerGroups,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->app_summary = $s['app_summary'] ?? null;
    $this->server_groups = $s['server_groups'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class UpdateReplicationJobRequest {
  public ?Description $description;
  public ?Encrypted $encrypted;
  public ?Frequency $frequency;
  public ?KmsKeyId $kms_key_id;
  public ?LicenseType $license_type;
  public ?Timestamp $next_replication_run_start_time;
  public ?NumberOfRecentAmisToKeep $number_of_recent_amis_to_keep;
  public ?ReplicationJobId $replication_job_id;
  public ?RoleName $role_name;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'encrypted' => ?Encrypted,
    ?'frequency' => ?Frequency,
    ?'kms_key_id' => ?KmsKeyId,
    ?'license_type' => ?LicenseType,
    ?'next_replication_run_start_time' => ?Timestamp,
    ?'number_of_recent_amis_to_keep' => ?NumberOfRecentAmisToKeep,
    ?'replication_job_id' => ?ReplicationJobId,
    ?'role_name' => ?RoleName,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->frequency = $s['frequency'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->license_type = $s['license_type'] ?? '';
    $this->next_replication_run_start_time = $s['next_replication_run_start_time'] ?? 0;
    $this->number_of_recent_amis_to_keep = $s['number_of_recent_amis_to_keep'] ?? 0;
    $this->replication_job_id = $s['replication_job_id'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class UpdateReplicationJobResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UserData {
  public ?S3Location $s_3_location;

  public function __construct(shape(
    ?'s_3_location' => ?S3Location,
  ) $s = shape()) {
    $this->s_3_location = $s['s_3_location'] ?? null;
  }
}

type VPC = string;

type VmId = string;

type VmManagerId = string;

type VmManagerName = string;

type VmManagerType = string;

type VmName = string;

type VmPath = string;

class VmServer {
  public ?VmManagerName $vm_manager_name;
  public ?VmManagerType $vm_manager_type;
  public ?VmName $vm_name;
  public ?VmPath $vm_path;
  public ?VmServerAddress $vm_server_address;

  public function __construct(shape(
    ?'vm_manager_name' => ?VmManagerName,
    ?'vm_manager_type' => ?VmManagerType,
    ?'vm_name' => ?VmName,
    ?'vm_path' => ?VmPath,
    ?'vm_server_address' => ?VmServerAddress,
  ) $s = shape()) {
    $this->vm_manager_name = $s['vm_manager_name'] ?? '';
    $this->vm_manager_type = $s['vm_manager_type'] ?? '';
    $this->vm_name = $s['vm_name'] ?? '';
    $this->vm_path = $s['vm_path'] ?? '';
    $this->vm_server_address = $s['vm_server_address'] ?? null;
  }
}

class VmServerAddress {
  public ?VmId $vm_id;
  public ?VmManagerId $vm_manager_id;

  public function __construct(shape(
    ?'vm_id' => ?VmId,
    ?'vm_manager_id' => ?VmManagerId,
  ) $s = shape()) {
    $this->vm_id = $s['vm_id'] ?? '';
    $this->vm_manager_id = $s['vm_manager_id'] ?? '';
  }
}

type VmServerAddressList = vec<VmServerAddress>;

