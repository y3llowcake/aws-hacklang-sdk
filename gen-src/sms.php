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

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'creation_time' => Timestamp,
  ?'description' => AppDescription,
  ?'last_modified' => Timestamp,
  ?'latest_replication_time' => Timestamp,
  ?'launch_details' => LaunchDetails,
  ?'launch_status' => AppLaunchStatus,
  ?'launch_status_message' => AppLaunchStatusMessage,
  ?'name' => AppName,
  ?'replication_status' => AppReplicationStatus,
  ?'replication_status_message' => AppReplicationStatusMessage,
  ?'role_name' => RoleName,
  ?'status' => AppStatus,
  ?'status_message' => AppStatusMessage,
  ?'total_server_groups' => TotalServerGroups,
  ?'total_servers' => TotalServers,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
    $this->creation_time = $creation_time ?? ;
    $this->description = $description ?? ;
    $this->last_modified = $last_modified ?? ;
    $this->latest_replication_time = $latest_replication_time ?? ;
    $this->launch_details = $launch_details ?? ;
    $this->launch_status = $launch_status ?? ;
    $this->launch_status_message = $launch_status_message ?? ;
    $this->name = $name ?? ;
    $this->replication_status = $replication_status ?? ;
    $this->replication_status_message = $replication_status_message ?? ;
    $this->role_name = $role_name ?? ;
    $this->status = $status ?? ;
    $this->status_message = $status_message ?? ;
    $this->total_server_groups = $total_server_groups ?? ;
    $this->total_servers = $total_servers ?? ;
  }
}

type Apps = vec<AppSummary>;

type AssociatePublicIpAddress = bool;

type BucketName = string;

type ClientToken = string;

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

  public function __construct(shape(
  ?'associated_on' => Timestamp,
  ?'capability_list' => ConnectorCapabilityList,
  ?'connector_id' => ConnectorId,
  ?'ip_address' => IpAddress,
  ?'mac_address' => MacAddress,
  ?'status' => ConnectorStatus,
  ?'version' => ConnectorVersion,
  ?'vm_manager_id' => VmManagerId,
  ?'vm_manager_name' => VmManagerName,
  ?'vm_manager_type' => VmManagerType,
  ) $s = shape()) {
    $this->associated_on = $associated_on ?? ;
    $this->capability_list = $capability_list ?? ;
    $this->connector_id = $connector_id ?? ;
    $this->ip_address = $ip_address ?? ;
    $this->mac_address = $mac_address ?? ;
    $this->status = $status ?? ;
    $this->version = $version ?? ;
    $this->vm_manager_id = $vm_manager_id ?? ;
    $this->vm_manager_name = $vm_manager_name ?? ;
    $this->vm_manager_type = $vm_manager_type ?? ;
  }
}

type ConnectorCapability = string;

type ConnectorCapabilityList = vec<ConnectorCapability>;

type ConnectorId = string;

type ConnectorList = vec<Connector>;

type ConnectorStatus = string;

type ConnectorVersion = string;

class CreateAppRequest {
  public ClientToken $client_token;
  public AppDescription $description;
  public AppName $name;
  public RoleName $role_name;
  public ServerGroups $server_groups;
  public Tags $tags;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'description' => AppDescription,
  ?'name' => AppName,
  ?'role_name' => RoleName,
  ?'server_groups' => ServerGroups,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->role_name = $role_name ?? ;
    $this->server_groups = $server_groups ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateAppResponse {
  public AppSummary $app_summary;
  public ServerGroups $server_groups;
  public Tags $tags;

  public function __construct(shape(
  ?'app_summary' => AppSummary,
  ?'server_groups' => ServerGroups,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->app_summary = $app_summary ?? ;
    $this->server_groups = $server_groups ?? ;
    $this->tags = $tags ?? ;
  }
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

  public function __construct(shape(
  ?'description' => Description,
  ?'encrypted' => Encrypted,
  ?'frequency' => Frequency,
  ?'kms_key_id' => KmsKeyId,
  ?'license_type' => LicenseType,
  ?'number_of_recent_amis_to_keep' => NumberOfRecentAmisToKeep,
  ?'role_name' => RoleName,
  ?'run_once' => RunOnce,
  ?'seed_replication_time' => Timestamp,
  ?'server_id' => ServerId,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->encrypted = $encrypted ?? ;
    $this->frequency = $frequency ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->license_type = $license_type ?? ;
    $this->number_of_recent_amis_to_keep = $number_of_recent_amis_to_keep ?? ;
    $this->role_name = $role_name ?? ;
    $this->run_once = $run_once ?? ;
    $this->seed_replication_time = $seed_replication_time ?? ;
    $this->server_id = $server_id ?? ;
  }
}

class CreateReplicationJobResponse {
  public ReplicationJobId $replication_job_id;

  public function __construct(shape(
  ?'replication_job_id' => ReplicationJobId,
  ) $s = shape()) {
    $this->replication_job_id = $replication_job_id ?? ;
  }
}

class DeleteAppLaunchConfigurationRequest {
  public AppId $app_id;

  public function __construct(shape(
  ?'app_id' => AppId,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
  }
}

class DeleteAppLaunchConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteAppReplicationConfigurationRequest {
  public AppId $app_id;

  public function __construct(shape(
  ?'app_id' => AppId,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
  }
}

class DeleteAppReplicationConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteAppRequest {
  public AppId $app_id;
  public ForceStopAppReplication $force_stop_app_replication;
  public ForceTerminateApp $force_terminate_app;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'force_stop_app_replication' => ForceStopAppReplication,
  ?'force_terminate_app' => ForceTerminateApp,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
    $this->force_stop_app_replication = $force_stop_app_replication ?? ;
    $this->force_terminate_app = $force_terminate_app ?? ;
  }
}

class DeleteAppResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteReplicationJobRequest {
  public ReplicationJobId $replication_job_id;

  public function __construct(shape(
  ?'replication_job_id' => ReplicationJobId,
  ) $s = shape()) {
    $this->replication_job_id = $replication_job_id ?? ;
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
  public ConnectorId $connector_id;

  public function __construct(shape(
  ?'connector_id' => ConnectorId,
  ) $s = shape()) {
    $this->connector_id = $connector_id ?? ;
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
  public AppId $app_id;
  public OutputFormat $changeset_format;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'changeset_format' => OutputFormat,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
    $this->changeset_format = $changeset_format ?? ;
  }
}

class GenerateChangeSetResponse {
  public S3Location $s_3_location;

  public function __construct(shape(
  ?'s_3_location' => S3Location,
  ) $s = shape()) {
    $this->s_3_location = $s_3_location ?? ;
  }
}

class GenerateTemplateRequest {
  public AppId $app_id;
  public OutputFormat $template_format;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'template_format' => OutputFormat,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
    $this->template_format = $template_format ?? ;
  }
}

class GenerateTemplateResponse {
  public S3Location $s_3_location;

  public function __construct(shape(
  ?'s_3_location' => S3Location,
  ) $s = shape()) {
    $this->s_3_location = $s_3_location ?? ;
  }
}

class GetAppLaunchConfigurationRequest {
  public AppId $app_id;

  public function __construct(shape(
  ?'app_id' => AppId,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
  }
}

class GetAppLaunchConfigurationResponse {
  public AppId $app_id;
  public RoleName $role_name;
  public ServerGroupLaunchConfigurations $server_group_launch_configurations;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'role_name' => RoleName,
  ?'server_group_launch_configurations' => ServerGroupLaunchConfigurations,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
    $this->role_name = $role_name ?? ;
    $this->server_group_launch_configurations = $server_group_launch_configurations ?? ;
  }
}

class GetAppReplicationConfigurationRequest {
  public AppId $app_id;

  public function __construct(shape(
  ?'app_id' => AppId,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
  }
}

class GetAppReplicationConfigurationResponse {
  public ServerGroupReplicationConfigurations $server_group_replication_configurations;

  public function __construct(shape(
  ?'server_group_replication_configurations' => ServerGroupReplicationConfigurations,
  ) $s = shape()) {
    $this->server_group_replication_configurations = $server_group_replication_configurations ?? ;
  }
}

class GetAppRequest {
  public AppId $app_id;

  public function __construct(shape(
  ?'app_id' => AppId,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
  }
}

class GetAppResponse {
  public AppSummary $app_summary;
  public ServerGroups $server_groups;
  public Tags $tags;

  public function __construct(shape(
  ?'app_summary' => AppSummary,
  ?'server_groups' => ServerGroups,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->app_summary = $app_summary ?? ;
    $this->server_groups = $server_groups ?? ;
    $this->tags = $tags ?? ;
  }
}

class GetConnectorsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class GetConnectorsResponse {
  public ConnectorList $connector_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'connector_list' => ConnectorList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->connector_list = $connector_list ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class GetReplicationJobsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ReplicationJobId $replication_job_id;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'replication_job_id' => ReplicationJobId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->replication_job_id = $replication_job_id ?? ;
  }
}

class GetReplicationJobsResponse {
  public NextToken $next_token;
  public ReplicationJobList $replication_job_list;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'replication_job_list' => ReplicationJobList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->replication_job_list = $replication_job_list ?? ;
  }
}

class GetReplicationRunsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ReplicationJobId $replication_job_id;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'replication_job_id' => ReplicationJobId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->replication_job_id = $replication_job_id ?? ;
  }
}

class GetReplicationRunsResponse {
  public NextToken $next_token;
  public ReplicationJob $replication_job;
  public ReplicationRunList $replication_run_list;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'replication_job' => ReplicationJob,
  ?'replication_run_list' => ReplicationRunList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->replication_job = $replication_job ?? ;
    $this->replication_run_list = $replication_run_list ?? ;
  }
}

class GetServersRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public VmServerAddressList $vm_server_address_list;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'vm_server_address_list' => VmServerAddressList,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->vm_server_address_list = $vm_server_address_list ?? ;
  }
}

class GetServersResponse {
  public Timestamp $last_modified_on;
  public NextToken $next_token;
  public ServerCatalogStatus $server_catalog_status;
  public ServerList $server_list;

  public function __construct(shape(
  ?'last_modified_on' => Timestamp,
  ?'next_token' => NextToken,
  ?'server_catalog_status' => ServerCatalogStatus,
  ?'server_list' => ServerList,
  ) $s = shape()) {
    $this->last_modified_on = $last_modified_on ?? ;
    $this->next_token = $next_token ?? ;
    $this->server_catalog_status = $server_catalog_status ?? ;
    $this->server_list = $server_list ?? ;
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
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidParameterException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type IpAddress = string;

type KeyName = string;

type KmsKeyId = string;

class LaunchAppRequest {
  public AppId $app_id;

  public function __construct(shape(
  ?'app_id' => AppId,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
  }
}

class LaunchAppResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class LaunchDetails {
  public Timestamp $latest_launch_time;
  public StackId $stack_id;
  public StackName $stack_name;

  public function __construct(shape(
  ?'latest_launch_time' => Timestamp,
  ?'stack_id' => StackId,
  ?'stack_name' => StackName,
  ) $s = shape()) {
    $this->latest_launch_time = $latest_launch_time ?? ;
    $this->stack_id = $stack_id ?? ;
    $this->stack_name = $stack_name ?? ;
  }
}

type LaunchOrder = int;

type LicenseType = string;

class ListAppsRequest {
  public AppIds $app_ids;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'app_ids' => AppIds,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->app_ids = $app_ids ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListAppsResponse {
  public Apps $apps;
  public NextToken $next_token;

  public function __construct(shape(
  ?'apps' => Apps,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->apps = $apps ?? ;
    $this->next_token = $next_token ?? ;
  }
}

type LogicalId = string;

type MacAddress = string;

type MaxResults = int;

class MissingRequiredParameterException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type NextToken = string;

class NoConnectorsAvailableException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type NumberOfRecentAmisToKeep = int;

class OperationNotPermittedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type OutputFormat = string;

class PutAppLaunchConfigurationRequest {
  public AppId $app_id;
  public RoleName $role_name;
  public ServerGroupLaunchConfigurations $server_group_launch_configurations;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'role_name' => RoleName,
  ?'server_group_launch_configurations' => ServerGroupLaunchConfigurations,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
    $this->role_name = $role_name ?? ;
    $this->server_group_launch_configurations = $server_group_launch_configurations ?? ;
  }
}

class PutAppLaunchConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutAppReplicationConfigurationRequest {
  public AppId $app_id;
  public ServerGroupReplicationConfigurations $server_group_replication_configurations;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'server_group_replication_configurations' => ServerGroupReplicationConfigurations,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
    $this->server_group_replication_configurations = $server_group_replication_configurations ?? ;
  }
}

class PutAppReplicationConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'description' => Description,
  ?'encrypted' => Encrypted,
  ?'frequency' => Frequency,
  ?'kms_key_id' => KmsKeyId,
  ?'latest_ami_id' => AmiId,
  ?'license_type' => LicenseType,
  ?'next_replication_run_start_time' => Timestamp,
  ?'number_of_recent_amis_to_keep' => NumberOfRecentAmisToKeep,
  ?'replication_job_id' => ReplicationJobId,
  ?'replication_run_list' => ReplicationRunList,
  ?'role_name' => RoleName,
  ?'run_once' => RunOnce,
  ?'seed_replication_time' => Timestamp,
  ?'server_id' => ServerId,
  ?'server_type' => ServerType,
  ?'state' => ReplicationJobState,
  ?'status_message' => ReplicationJobStatusMessage,
  ?'vm_server' => VmServer,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->encrypted = $encrypted ?? ;
    $this->frequency = $frequency ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->latest_ami_id = $latest_ami_id ?? ;
    $this->license_type = $license_type ?? ;
    $this->next_replication_run_start_time = $next_replication_run_start_time ?? ;
    $this->number_of_recent_amis_to_keep = $number_of_recent_amis_to_keep ?? ;
    $this->replication_job_id = $replication_job_id ?? ;
    $this->replication_run_list = $replication_run_list ?? ;
    $this->role_name = $role_name ?? ;
    $this->run_once = $run_once ?? ;
    $this->seed_replication_time = $seed_replication_time ?? ;
    $this->server_id = $server_id ?? ;
    $this->server_type = $server_type ?? ;
    $this->state = $state ?? ;
    $this->status_message = $status_message ?? ;
    $this->vm_server = $vm_server ?? ;
  }
}

class ReplicationJobAlreadyExistsException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ReplicationJobId = string;

type ReplicationJobList = vec<ReplicationJob>;

class ReplicationJobNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ReplicationJobState = string;

type ReplicationJobStatusMessage = string;

type ReplicationJobTerminated = bool;

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

  public function __construct(shape(
  ?'ami_id' => AmiId,
  ?'completed_time' => Timestamp,
  ?'description' => Description,
  ?'encrypted' => Encrypted,
  ?'kms_key_id' => KmsKeyId,
  ?'replication_run_id' => ReplicationRunId,
  ?'scheduled_start_time' => Timestamp,
  ?'stage_details' => ReplicationRunStageDetails,
  ?'state' => ReplicationRunState,
  ?'status_message' => ReplicationRunStatusMessage,
  ?'type' => ReplicationRunType,
  ) $s = shape()) {
    $this->ami_id = $ami_id ?? ;
    $this->completed_time = $completed_time ?? ;
    $this->description = $description ?? ;
    $this->encrypted = $encrypted ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->replication_run_id = $replication_run_id ?? ;
    $this->scheduled_start_time = $scheduled_start_time ?? ;
    $this->stage_details = $stage_details ?? ;
    $this->state = $state ?? ;
    $this->status_message = $status_message ?? ;
    $this->type = $type ?? ;
  }
}

type ReplicationRunId = string;

class ReplicationRunLimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ReplicationRunList = vec<ReplicationRun>;

type ReplicationRunStage = string;

class ReplicationRunStageDetails {
  public ReplicationRunStage $stage;
  public ReplicationRunStageProgress $stage_progress;

  public function __construct(shape(
  ?'stage' => ReplicationRunStage,
  ?'stage_progress' => ReplicationRunStageProgress,
  ) $s = shape()) {
    $this->stage = $stage ?? ;
    $this->stage_progress = $stage_progress ?? ;
  }
}

type ReplicationRunStageProgress = string;

type ReplicationRunState = string;

type ReplicationRunStatusMessage = string;

type ReplicationRunType = string;

type RoleName = string;

type RunOnce = bool;

class S3Location {
  public BucketName $bucket;
  public KeyName $key;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'key' => KeyName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->key = $key ?? ;
  }
}

type SecurityGroup = string;

class Server {
  public ReplicationJobId $replication_job_id;
  public ReplicationJobTerminated $replication_job_terminated;
  public ServerId $server_id;
  public ServerType $server_type;
  public VmServer $vm_server;

  public function __construct(shape(
  ?'replication_job_id' => ReplicationJobId,
  ?'replication_job_terminated' => ReplicationJobTerminated,
  ?'server_id' => ServerId,
  ?'server_type' => ServerType,
  ?'vm_server' => VmServer,
  ) $s = shape()) {
    $this->replication_job_id = $replication_job_id ?? ;
    $this->replication_job_terminated = $replication_job_terminated ?? ;
    $this->server_id = $server_id ?? ;
    $this->server_type = $server_type ?? ;
    $this->vm_server = $vm_server ?? ;
  }
}

class ServerCannotBeReplicatedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ServerCatalogStatus = string;

class ServerGroup {
  public ServerGroupName $name;
  public ServerGroupId $server_group_id;
  public ServerList $server_list;

  public function __construct(shape(
  ?'name' => ServerGroupName,
  ?'server_group_id' => ServerGroupId,
  ?'server_list' => ServerList,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->server_group_id = $server_group_id ?? ;
    $this->server_list = $server_list ?? ;
  }
}

type ServerGroupId = string;

class ServerGroupLaunchConfiguration {
  public LaunchOrder $launch_order;
  public ServerGroupId $server_group_id;
  public ServerLaunchConfigurations $server_launch_configurations;

  public function __construct(shape(
  ?'launch_order' => LaunchOrder,
  ?'server_group_id' => ServerGroupId,
  ?'server_launch_configurations' => ServerLaunchConfigurations,
  ) $s = shape()) {
    $this->launch_order = $launch_order ?? ;
    $this->server_group_id = $server_group_id ?? ;
    $this->server_launch_configurations = $server_launch_configurations ?? ;
  }
}

type ServerGroupLaunchConfigurations = vec<ServerGroupLaunchConfiguration>;

type ServerGroupName = string;

class ServerGroupReplicationConfiguration {
  public ServerGroupId $server_group_id;
  public ServerReplicationConfigurations $server_replication_configurations;

  public function __construct(shape(
  ?'server_group_id' => ServerGroupId,
  ?'server_replication_configurations' => ServerReplicationConfigurations,
  ) $s = shape()) {
    $this->server_group_id = $server_group_id ?? ;
    $this->server_replication_configurations = $server_replication_configurations ?? ;
  }
}

type ServerGroupReplicationConfigurations = vec<ServerGroupReplicationConfiguration>;

type ServerGroups = vec<ServerGroup>;

type ServerId = string;

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

  public function __construct(shape(
  ?'associate_public_ip_address' => AssociatePublicIpAddress,
  ?'ec_2_key_name' => EC2KeyName,
  ?'instance_type' => InstanceType,
  ?'logical_id' => LogicalId,
  ?'security_group' => SecurityGroup,
  ?'server' => Server,
  ?'subnet' => Subnet,
  ?'user_data' => UserData,
  ?'vpc' => VPC,
  ) $s = shape()) {
    $this->associate_public_ip_address = $associate_public_ip_address ?? ;
    $this->ec_2_key_name = $ec_2_key_name ?? ;
    $this->instance_type = $instance_type ?? ;
    $this->logical_id = $logical_id ?? ;
    $this->security_group = $security_group ?? ;
    $this->server = $server ?? ;
    $this->subnet = $subnet ?? ;
    $this->user_data = $user_data ?? ;
    $this->vpc = $vpc ?? ;
  }
}

type ServerLaunchConfigurations = vec<ServerLaunchConfiguration>;

type ServerList = vec<Server>;

class ServerReplicationConfiguration {
  public Server $server;
  public ServerReplicationParameters $server_replication_parameters;

  public function __construct(shape(
  ?'server' => Server,
  ?'server_replication_parameters' => ServerReplicationParameters,
  ) $s = shape()) {
    $this->server = $server ?? ;
    $this->server_replication_parameters = $server_replication_parameters ?? ;
  }
}

type ServerReplicationConfigurations = vec<ServerReplicationConfiguration>;

class ServerReplicationParameters {
  public Encrypted $encrypted;
  public Frequency $frequency;
  public KmsKeyId $kms_key_id;
  public LicenseType $license_type;
  public NumberOfRecentAmisToKeep $number_of_recent_amis_to_keep;
  public RunOnce $run_once;
  public Timestamp $seed_time;

  public function __construct(shape(
  ?'encrypted' => Encrypted,
  ?'frequency' => Frequency,
  ?'kms_key_id' => KmsKeyId,
  ?'license_type' => LicenseType,
  ?'number_of_recent_amis_to_keep' => NumberOfRecentAmisToKeep,
  ?'run_once' => RunOnce,
  ?'seed_time' => Timestamp,
  ) $s = shape()) {
    $this->encrypted = $encrypted ?? ;
    $this->frequency = $frequency ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->license_type = $license_type ?? ;
    $this->number_of_recent_amis_to_keep = $number_of_recent_amis_to_keep ?? ;
    $this->run_once = $run_once ?? ;
    $this->seed_time = $seed_time ?? ;
  }
}

type ServerType = string;

type StackId = string;

type StackName = string;

class StartAppReplicationRequest {
  public AppId $app_id;

  public function __construct(shape(
  ?'app_id' => AppId,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
  }
}

class StartAppReplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartOnDemandReplicationRunRequest {
  public Description $description;
  public ReplicationJobId $replication_job_id;

  public function __construct(shape(
  ?'description' => Description,
  ?'replication_job_id' => ReplicationJobId,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->replication_job_id = $replication_job_id ?? ;
  }
}

class StartOnDemandReplicationRunResponse {
  public ReplicationRunId $replication_run_id;

  public function __construct(shape(
  ?'replication_run_id' => ReplicationRunId,
  ) $s = shape()) {
    $this->replication_run_id = $replication_run_id ?? ;
  }
}

class StopAppReplicationRequest {
  public AppId $app_id;

  public function __construct(shape(
  ?'app_id' => AppId,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
  }
}

class StopAppReplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Subnet = string;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
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
  public AppId $app_id;

  public function __construct(shape(
  ?'app_id' => AppId,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
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
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class UpdateAppRequest {
  public AppId $app_id;
  public AppDescription $description;
  public AppName $name;
  public RoleName $role_name;
  public ServerGroups $server_groups;
  public Tags $tags;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'description' => AppDescription,
  ?'name' => AppName,
  ?'role_name' => RoleName,
  ?'server_groups' => ServerGroups,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->role_name = $role_name ?? ;
    $this->server_groups = $server_groups ?? ;
    $this->tags = $tags ?? ;
  }
}

class UpdateAppResponse {
  public AppSummary $app_summary;
  public ServerGroups $server_groups;
  public Tags $tags;

  public function __construct(shape(
  ?'app_summary' => AppSummary,
  ?'server_groups' => ServerGroups,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->app_summary = $app_summary ?? ;
    $this->server_groups = $server_groups ?? ;
    $this->tags = $tags ?? ;
  }
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

  public function __construct(shape(
  ?'description' => Description,
  ?'encrypted' => Encrypted,
  ?'frequency' => Frequency,
  ?'kms_key_id' => KmsKeyId,
  ?'license_type' => LicenseType,
  ?'next_replication_run_start_time' => Timestamp,
  ?'number_of_recent_amis_to_keep' => NumberOfRecentAmisToKeep,
  ?'replication_job_id' => ReplicationJobId,
  ?'role_name' => RoleName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->encrypted = $encrypted ?? ;
    $this->frequency = $frequency ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->license_type = $license_type ?? ;
    $this->next_replication_run_start_time = $next_replication_run_start_time ?? ;
    $this->number_of_recent_amis_to_keep = $number_of_recent_amis_to_keep ?? ;
    $this->replication_job_id = $replication_job_id ?? ;
    $this->role_name = $role_name ?? ;
  }
}

class UpdateReplicationJobResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UserData {
  public S3Location $s_3_location;

  public function __construct(shape(
  ?'s_3_location' => S3Location,
  ) $s = shape()) {
    $this->s_3_location = $s_3_location ?? ;
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
  public VmManagerName $vm_manager_name;
  public VmManagerType $vm_manager_type;
  public VmName $vm_name;
  public VmPath $vm_path;
  public VmServerAddress $vm_server_address;

  public function __construct(shape(
  ?'vm_manager_name' => VmManagerName,
  ?'vm_manager_type' => VmManagerType,
  ?'vm_name' => VmName,
  ?'vm_path' => VmPath,
  ?'vm_server_address' => VmServerAddress,
  ) $s = shape()) {
    $this->vm_manager_name = $vm_manager_name ?? ;
    $this->vm_manager_type = $vm_manager_type ?? ;
    $this->vm_name = $vm_name ?? ;
    $this->vm_path = $vm_path ?? ;
    $this->vm_server_address = $vm_server_address ?? ;
  }
}

class VmServerAddress {
  public VmId $vm_id;
  public VmManagerId $vm_manager_id;

  public function __construct(shape(
  ?'vm_id' => VmId,
  ?'vm_manager_id' => VmManagerId,
  ) $s = shape()) {
    $this->vm_id = $vm_id ?? ;
    $this->vm_manager_id = $vm_manager_id ?? ;
  }
}

type VmServerAddressList = vec<VmServerAddress>;

