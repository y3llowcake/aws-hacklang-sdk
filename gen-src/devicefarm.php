<?hh // strict
namespace slack\aws\devicefarm;

interface DeviceFarm {
  public function CreateDevicePool(CreateDevicePoolRequest $in): Awaitable<\Errors\Result<CreateDevicePoolResult>>;
  public function CreateInstanceProfile(CreateInstanceProfileRequest $in): Awaitable<\Errors\Result<CreateInstanceProfileResult>>;
  public function CreateNetworkProfile(CreateNetworkProfileRequest $in): Awaitable<\Errors\Result<CreateNetworkProfileResult>>;
  public function CreateProject(CreateProjectRequest $in): Awaitable<\Errors\Result<CreateProjectResult>>;
  public function CreateRemoteAccessSession(CreateRemoteAccessSessionRequest $in): Awaitable<\Errors\Result<CreateRemoteAccessSessionResult>>;
  public function CreateTestGridProject(CreateTestGridProjectRequest $in): Awaitable<\Errors\Result<CreateTestGridProjectResult>>;
  public function CreateTestGridUrl(CreateTestGridUrlRequest $in): Awaitable<\Errors\Result<CreateTestGridUrlResult>>;
  public function CreateUpload(CreateUploadRequest $in): Awaitable<\Errors\Result<CreateUploadResult>>;
  public function CreateVPCEConfiguration(CreateVPCEConfigurationRequest $in): Awaitable<\Errors\Result<CreateVPCEConfigurationResult>>;
  public function DeleteDevicePool(DeleteDevicePoolRequest $in): Awaitable<\Errors\Result<DeleteDevicePoolResult>>;
  public function DeleteInstanceProfile(DeleteInstanceProfileRequest $in): Awaitable<\Errors\Result<DeleteInstanceProfileResult>>;
  public function DeleteNetworkProfile(DeleteNetworkProfileRequest $in): Awaitable<\Errors\Result<DeleteNetworkProfileResult>>;
  public function DeleteProject(DeleteProjectRequest $in): Awaitable<\Errors\Result<DeleteProjectResult>>;
  public function DeleteRemoteAccessSession(DeleteRemoteAccessSessionRequest $in): Awaitable<\Errors\Result<DeleteRemoteAccessSessionResult>>;
  public function DeleteRun(DeleteRunRequest $in): Awaitable<\Errors\Result<DeleteRunResult>>;
  public function DeleteTestGridProject(DeleteTestGridProjectRequest $in): Awaitable<\Errors\Result<DeleteTestGridProjectResult>>;
  public function DeleteUpload(DeleteUploadRequest $in): Awaitable<\Errors\Result<DeleteUploadResult>>;
  public function DeleteVPCEConfiguration(DeleteVPCEConfigurationRequest $in): Awaitable<\Errors\Result<DeleteVPCEConfigurationResult>>;
  public function GetAccountSettings(GetAccountSettingsRequest $in): Awaitable<\Errors\Result<GetAccountSettingsResult>>;
  public function GetDevice(GetDeviceRequest $in): Awaitable<\Errors\Result<GetDeviceResult>>;
  public function GetDeviceInstance(GetDeviceInstanceRequest $in): Awaitable<\Errors\Result<GetDeviceInstanceResult>>;
  public function GetDevicePool(GetDevicePoolRequest $in): Awaitable<\Errors\Result<GetDevicePoolResult>>;
  public function GetDevicePoolCompatibility(GetDevicePoolCompatibilityRequest $in): Awaitable<\Errors\Result<GetDevicePoolCompatibilityResult>>;
  public function GetInstanceProfile(GetInstanceProfileRequest $in): Awaitable<\Errors\Result<GetInstanceProfileResult>>;
  public function GetJob(GetJobRequest $in): Awaitable<\Errors\Result<GetJobResult>>;
  public function GetNetworkProfile(GetNetworkProfileRequest $in): Awaitable<\Errors\Result<GetNetworkProfileResult>>;
  public function GetOfferingStatus(GetOfferingStatusRequest $in): Awaitable<\Errors\Result<GetOfferingStatusResult>>;
  public function GetProject(GetProjectRequest $in): Awaitable<\Errors\Result<GetProjectResult>>;
  public function GetRemoteAccessSession(GetRemoteAccessSessionRequest $in): Awaitable<\Errors\Result<GetRemoteAccessSessionResult>>;
  public function GetRun(GetRunRequest $in): Awaitable<\Errors\Result<GetRunResult>>;
  public function GetSuite(GetSuiteRequest $in): Awaitable<\Errors\Result<GetSuiteResult>>;
  public function GetTest(GetTestRequest $in): Awaitable<\Errors\Result<GetTestResult>>;
  public function GetTestGridProject(GetTestGridProjectRequest $in): Awaitable<\Errors\Result<GetTestGridProjectResult>>;
  public function GetTestGridSession(GetTestGridSessionRequest $in): Awaitable<\Errors\Result<GetTestGridSessionResult>>;
  public function GetUpload(GetUploadRequest $in): Awaitable<\Errors\Result<GetUploadResult>>;
  public function GetVPCEConfiguration(GetVPCEConfigurationRequest $in): Awaitable<\Errors\Result<GetVPCEConfigurationResult>>;
  public function InstallToRemoteAccessSession(InstallToRemoteAccessSessionRequest $in): Awaitable<\Errors\Result<InstallToRemoteAccessSessionResult>>;
  public function ListArtifacts(ListArtifactsRequest $in): Awaitable<\Errors\Result<ListArtifactsResult>>;
  public function ListDeviceInstances(ListDeviceInstancesRequest $in): Awaitable<\Errors\Result<ListDeviceInstancesResult>>;
  public function ListDevicePools(ListDevicePoolsRequest $in): Awaitable<\Errors\Result<ListDevicePoolsResult>>;
  public function ListDevices(ListDevicesRequest $in): Awaitable<\Errors\Result<ListDevicesResult>>;
  public function ListInstanceProfiles(ListInstanceProfilesRequest $in): Awaitable<\Errors\Result<ListInstanceProfilesResult>>;
  public function ListJobs(ListJobsRequest $in): Awaitable<\Errors\Result<ListJobsResult>>;
  public function ListNetworkProfiles(ListNetworkProfilesRequest $in): Awaitable<\Errors\Result<ListNetworkProfilesResult>>;
  public function ListOfferingPromotions(ListOfferingPromotionsRequest $in): Awaitable<\Errors\Result<ListOfferingPromotionsResult>>;
  public function ListOfferingTransactions(ListOfferingTransactionsRequest $in): Awaitable<\Errors\Result<ListOfferingTransactionsResult>>;
  public function ListOfferings(ListOfferingsRequest $in): Awaitable<\Errors\Result<ListOfferingsResult>>;
  public function ListProjects(ListProjectsRequest $in): Awaitable<\Errors\Result<ListProjectsResult>>;
  public function ListRemoteAccessSessions(ListRemoteAccessSessionsRequest $in): Awaitable<\Errors\Result<ListRemoteAccessSessionsResult>>;
  public function ListRuns(ListRunsRequest $in): Awaitable<\Errors\Result<ListRunsResult>>;
  public function ListSamples(ListSamplesRequest $in): Awaitable<\Errors\Result<ListSamplesResult>>;
  public function ListSuites(ListSuitesRequest $in): Awaitable<\Errors\Result<ListSuitesResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListTestGridProjects(ListTestGridProjectsRequest $in): Awaitable<\Errors\Result<ListTestGridProjectsResult>>;
  public function ListTestGridSessionActions(ListTestGridSessionActionsRequest $in): Awaitable<\Errors\Result<ListTestGridSessionActionsResult>>;
  public function ListTestGridSessionArtifacts(ListTestGridSessionArtifactsRequest $in): Awaitable<\Errors\Result<ListTestGridSessionArtifactsResult>>;
  public function ListTestGridSessions(ListTestGridSessionsRequest $in): Awaitable<\Errors\Result<ListTestGridSessionsResult>>;
  public function ListTests(ListTestsRequest $in): Awaitable<\Errors\Result<ListTestsResult>>;
  public function ListUniqueProblems(ListUniqueProblemsRequest $in): Awaitable<\Errors\Result<ListUniqueProblemsResult>>;
  public function ListUploads(ListUploadsRequest $in): Awaitable<\Errors\Result<ListUploadsResult>>;
  public function ListVPCEConfigurations(ListVPCEConfigurationsRequest $in): Awaitable<\Errors\Result<ListVPCEConfigurationsResult>>;
  public function PurchaseOffering(PurchaseOfferingRequest $in): Awaitable<\Errors\Result<PurchaseOfferingResult>>;
  public function RenewOffering(RenewOfferingRequest $in): Awaitable<\Errors\Result<RenewOfferingResult>>;
  public function ScheduleRun(ScheduleRunRequest $in): Awaitable<\Errors\Result<ScheduleRunResult>>;
  public function StopJob(StopJobRequest $in): Awaitable<\Errors\Result<StopJobResult>>;
  public function StopRemoteAccessSession(StopRemoteAccessSessionRequest $in): Awaitable<\Errors\Result<StopRemoteAccessSessionResult>>;
  public function StopRun(StopRunRequest $in): Awaitable<\Errors\Result<StopRunResult>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateDeviceInstance(UpdateDeviceInstanceRequest $in): Awaitable<\Errors\Result<UpdateDeviceInstanceResult>>;
  public function UpdateDevicePool(UpdateDevicePoolRequest $in): Awaitable<\Errors\Result<UpdateDevicePoolResult>>;
  public function UpdateInstanceProfile(UpdateInstanceProfileRequest $in): Awaitable<\Errors\Result<UpdateInstanceProfileResult>>;
  public function UpdateNetworkProfile(UpdateNetworkProfileRequest $in): Awaitable<\Errors\Result<UpdateNetworkProfileResult>>;
  public function UpdateProject(UpdateProjectRequest $in): Awaitable<\Errors\Result<UpdateProjectResult>>;
  public function UpdateTestGridProject(UpdateTestGridProjectRequest $in): Awaitable<\Errors\Result<UpdateTestGridProjectResult>>;
  public function UpdateUpload(UpdateUploadRequest $in): Awaitable<\Errors\Result<UpdateUploadResult>>;
  public function UpdateVPCEConfiguration(UpdateVPCEConfigurationRequest $in): Awaitable<\Errors\Result<UpdateVPCEConfigurationResult>>;
}

type AWSAccountNumber = string;

class AccountSettings {
  public ?AWSAccountNumber $aws_account_number;
  public ?JobTimeoutMinutes $default_job_timeout_minutes;
  public ?JobTimeoutMinutes $max_job_timeout_minutes;
  public ?MaxSlotMap $max_slots;
  public ?SkipAppResign $skip_app_resign;
  public ?TrialMinutes $trial_minutes;
  public ?PurchasedDevicesMap $unmetered_devices;
  public ?PurchasedDevicesMap $unmetered_remote_access_devices;

  public function __construct(shape(
    ?'aws_account_number' => ?AWSAccountNumber,
    ?'default_job_timeout_minutes' => ?JobTimeoutMinutes,
    ?'max_job_timeout_minutes' => ?JobTimeoutMinutes,
    ?'max_slots' => ?MaxSlotMap,
    ?'skip_app_resign' => ?SkipAppResign,
    ?'trial_minutes' => ?TrialMinutes,
    ?'unmetered_devices' => ?PurchasedDevicesMap,
    ?'unmetered_remote_access_devices' => ?PurchasedDevicesMap,
  ) $s = shape()) {
    $this->aws_account_number = $s['aws_account_number'] ?? '';
    $this->default_job_timeout_minutes = $s['default_job_timeout_minutes'] ?? 0;
    $this->max_job_timeout_minutes = $s['max_job_timeout_minutes'] ?? 0;
    $this->max_slots = $s['max_slots'] ?? dict[];
    $this->skip_app_resign = $s['skip_app_resign'] ?? false;
    $this->trial_minutes = $s['trial_minutes'] ?? null;
    $this->unmetered_devices = $s['unmetered_devices'] ?? dict[];
    $this->unmetered_remote_access_devices = $s['unmetered_remote_access_devices'] ?? dict[];
  }
}

type AccountsCleanup = bool;

type AmazonResourceName = string;

type AmazonResourceNames = vec<AmazonResourceName>;

type AndroidPaths = vec<String>;

type AppPackagesCleanup = bool;

class ArgumentException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Artifact {
  public ?AmazonResourceName $arn;
  public string $extension;
  public ?Name $name;
  public ?ArtifactType $type;
  public ?URL $url;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'extension' => string,
    ?'name' => ?Name,
    ?'type' => ?ArtifactType,
    ?'url' => ?URL,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->extension = $s['extension'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

type ArtifactCategory = string;

type ArtifactType = string;

type Artifacts = vec<Artifact>;

type BillingMethod = string;

type Boolean = bool;

class CPU {
  public string $architecture;
  public ?Double $clock;
  public string $frequency;

  public function __construct(shape(
    ?'architecture' => string,
    ?'clock' => ?Double,
    ?'frequency' => string,
  ) $s = shape()) {
    $this->architecture = $s['architecture'] ?? '';
    $this->clock = $s['clock'] ?? 0.0;
    $this->frequency = $s['frequency'] ?? '';
  }
}

class CannotDeleteException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ClientId = string;

type ContentType = string;

class Counters {
  public int $errored;
  public int $failed;
  public int $passed;
  public int $skipped;
  public int $stopped;
  public int $total;
  public int $warned;

  public function __construct(shape(
    ?'errored' => int,
    ?'failed' => int,
    ?'passed' => int,
    ?'skipped' => int,
    ?'stopped' => int,
    ?'total' => int,
    ?'warned' => int,
  ) $s = shape()) {
    $this->errored = $s['errored'] ?? 0;
    $this->failed = $s['failed'] ?? 0;
    $this->passed = $s['passed'] ?? 0;
    $this->skipped = $s['skipped'] ?? 0;
    $this->stopped = $s['stopped'] ?? 0;
    $this->total = $s['total'] ?? 0;
    $this->warned = $s['warned'] ?? 0;
  }
}

class CreateDevicePoolRequest {
  public ?Message $description;
  public int $max_devices;
  public ?Name $name;
  public ?AmazonResourceName $project_arn;
  public ?Rules $rules;

  public function __construct(shape(
    ?'description' => ?Message,
    ?'max_devices' => int,
    ?'name' => ?Name,
    ?'project_arn' => ?AmazonResourceName,
    ?'rules' => ?Rules,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->max_devices = $s['max_devices'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->project_arn = $s['project_arn'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
  }
}

class CreateDevicePoolResult {
  public ?DevicePool $device_pool;

  public function __construct(shape(
    ?'device_pool' => ?DevicePool,
  ) $s = shape()) {
    $this->device_pool = $s['device_pool'] ?? null;
  }
}

class CreateInstanceProfileRequest {
  public ?Message $description;
  public ?PackageIds $exclude_app_packages_from_cleanup;
  public ?Name $name;
  public bool $package_cleanup;
  public bool $reboot_after_use;

  public function __construct(shape(
    ?'description' => ?Message,
    ?'exclude_app_packages_from_cleanup' => ?PackageIds,
    ?'name' => ?Name,
    ?'package_cleanup' => bool,
    ?'reboot_after_use' => bool,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->exclude_app_packages_from_cleanup = $s['exclude_app_packages_from_cleanup'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->package_cleanup = $s['package_cleanup'] ?? false;
    $this->reboot_after_use = $s['reboot_after_use'] ?? false;
  }
}

class CreateInstanceProfileResult {
  public ?InstanceProfile $instance_profile;

  public function __construct(shape(
    ?'instance_profile' => ?InstanceProfile,
  ) $s = shape()) {
    $this->instance_profile = $s['instance_profile'] ?? null;
  }
}

class CreateNetworkProfileRequest {
  public ?Message $description;
  public ?Long $downlink_bandwidth_bits;
  public ?Long $downlink_delay_ms;
  public ?Long $downlink_jitter_ms;
  public ?PercentInteger $downlink_loss_percent;
  public ?Name $name;
  public ?AmazonResourceName $project_arn;
  public ?NetworkProfileType $type;
  public ?Long $uplink_bandwidth_bits;
  public ?Long $uplink_delay_ms;
  public ?Long $uplink_jitter_ms;
  public ?PercentInteger $uplink_loss_percent;

  public function __construct(shape(
    ?'description' => ?Message,
    ?'downlink_bandwidth_bits' => ?Long,
    ?'downlink_delay_ms' => ?Long,
    ?'downlink_jitter_ms' => ?Long,
    ?'downlink_loss_percent' => ?PercentInteger,
    ?'name' => ?Name,
    ?'project_arn' => ?AmazonResourceName,
    ?'type' => ?NetworkProfileType,
    ?'uplink_bandwidth_bits' => ?Long,
    ?'uplink_delay_ms' => ?Long,
    ?'uplink_jitter_ms' => ?Long,
    ?'uplink_loss_percent' => ?PercentInteger,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->downlink_bandwidth_bits = $s['downlink_bandwidth_bits'] ?? 0;
    $this->downlink_delay_ms = $s['downlink_delay_ms'] ?? 0;
    $this->downlink_jitter_ms = $s['downlink_jitter_ms'] ?? 0;
    $this->downlink_loss_percent = $s['downlink_loss_percent'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->project_arn = $s['project_arn'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->uplink_bandwidth_bits = $s['uplink_bandwidth_bits'] ?? 0;
    $this->uplink_delay_ms = $s['uplink_delay_ms'] ?? 0;
    $this->uplink_jitter_ms = $s['uplink_jitter_ms'] ?? 0;
    $this->uplink_loss_percent = $s['uplink_loss_percent'] ?? 0;
  }
}

class CreateNetworkProfileResult {
  public ?NetworkProfile $network_profile;

  public function __construct(shape(
    ?'network_profile' => ?NetworkProfile,
  ) $s = shape()) {
    $this->network_profile = $s['network_profile'] ?? null;
  }
}

class CreateProjectRequest {
  public ?JobTimeoutMinutes $default_job_timeout_minutes;
  public ?Name $name;

  public function __construct(shape(
    ?'default_job_timeout_minutes' => ?JobTimeoutMinutes,
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->default_job_timeout_minutes = $s['default_job_timeout_minutes'] ?? 0;
    $this->name = $s['name'] ?? '';
  }
}

class CreateProjectResult {
  public ?Project $project;

  public function __construct(shape(
    ?'project' => ?Project,
  ) $s = shape()) {
    $this->project = $s['project'] ?? null;
  }
}

class CreateRemoteAccessSessionConfiguration {
  public ?BillingMethod $billing_method;
  public ?AmazonResourceNames $vpce_configuration_arns;

  public function __construct(shape(
    ?'billing_method' => ?BillingMethod,
    ?'vpce_configuration_arns' => ?AmazonResourceNames,
  ) $s = shape()) {
    $this->billing_method = $s['billing_method'] ?? '';
    $this->vpce_configuration_arns = $s['vpce_configuration_arns'] ?? vec[];
  }
}

class CreateRemoteAccessSessionRequest {
  public ?ClientId $client_id;
  public ?CreateRemoteAccessSessionConfiguration $configuration;
  public ?AmazonResourceName $device_arn;
  public ?AmazonResourceName $instance_arn;
  public ?InteractionMode $interaction_mode;
  public ?Name $name;
  public ?AmazonResourceName $project_arn;
  public bool $remote_debug_enabled;
  public ?AmazonResourceName $remote_record_app_arn;
  public bool $remote_record_enabled;
  public bool $skip_app_resign;
  public ?SshPublicKey $ssh_public_key;

  public function __construct(shape(
    ?'client_id' => ?ClientId,
    ?'configuration' => ?CreateRemoteAccessSessionConfiguration,
    ?'device_arn' => ?AmazonResourceName,
    ?'instance_arn' => ?AmazonResourceName,
    ?'interaction_mode' => ?InteractionMode,
    ?'name' => ?Name,
    ?'project_arn' => ?AmazonResourceName,
    ?'remote_debug_enabled' => bool,
    ?'remote_record_app_arn' => ?AmazonResourceName,
    ?'remote_record_enabled' => bool,
    ?'skip_app_resign' => bool,
    ?'ssh_public_key' => ?SshPublicKey,
  ) $s = shape()) {
    $this->client_id = $s['client_id'] ?? '';
    $this->configuration = $s['configuration'] ?? null;
    $this->device_arn = $s['device_arn'] ?? '';
    $this->instance_arn = $s['instance_arn'] ?? '';
    $this->interaction_mode = $s['interaction_mode'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->project_arn = $s['project_arn'] ?? '';
    $this->remote_debug_enabled = $s['remote_debug_enabled'] ?? false;
    $this->remote_record_app_arn = $s['remote_record_app_arn'] ?? '';
    $this->remote_record_enabled = $s['remote_record_enabled'] ?? false;
    $this->skip_app_resign = $s['skip_app_resign'] ?? false;
    $this->ssh_public_key = $s['ssh_public_key'] ?? '';
  }
}

class CreateRemoteAccessSessionResult {
  public ?RemoteAccessSession $remote_access_session;

  public function __construct(shape(
    ?'remote_access_session' => ?RemoteAccessSession,
  ) $s = shape()) {
    $this->remote_access_session = $s['remote_access_session'] ?? null;
  }
}

class CreateTestGridProjectRequest {
  public ?ResourceDescription $description;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'description' => ?ResourceDescription,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateTestGridProjectResult {
  public ?TestGridProject $test_grid_project;

  public function __construct(shape(
    ?'test_grid_project' => ?TestGridProject,
  ) $s = shape()) {
    $this->test_grid_project = $s['test_grid_project'] ?? null;
  }
}

class CreateTestGridUrlRequest {
  public ?TestGridUrlExpiresInSecondsInput $expires_in_seconds;
  public ?DeviceFarmArn $project_arn;

  public function __construct(shape(
    ?'expires_in_seconds' => ?TestGridUrlExpiresInSecondsInput,
    ?'project_arn' => ?DeviceFarmArn,
  ) $s = shape()) {
    $this->expires_in_seconds = $s['expires_in_seconds'] ?? 0;
    $this->project_arn = $s['project_arn'] ?? '';
  }
}

class CreateTestGridUrlResult {
  public ?DateTime $expires;
  public string $url;

  public function __construct(shape(
    ?'expires' => ?DateTime,
    ?'url' => string,
  ) $s = shape()) {
    $this->expires = $s['expires'] ?? 0;
    $this->url = $s['url'] ?? '';
  }
}

class CreateUploadRequest {
  public ?ContentType $content_type;
  public ?Name $name;
  public ?AmazonResourceName $project_arn;
  public ?UploadType $type;

  public function __construct(shape(
    ?'content_type' => ?ContentType,
    ?'name' => ?Name,
    ?'project_arn' => ?AmazonResourceName,
    ?'type' => ?UploadType,
  ) $s = shape()) {
    $this->content_type = $s['content_type'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->project_arn = $s['project_arn'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class CreateUploadResult {
  public ?Upload $upload;

  public function __construct(shape(
    ?'upload' => ?Upload,
  ) $s = shape()) {
    $this->upload = $s['upload'] ?? null;
  }
}

class CreateVPCEConfigurationRequest {
  public ?ServiceDnsName $service_dns_name;
  public ?VPCEConfigurationDescription $vpce_configuration_description;
  public ?VPCEConfigurationName $vpce_configuration_name;
  public ?VPCEServiceName $vpce_service_name;

  public function __construct(shape(
    ?'service_dns_name' => ?ServiceDnsName,
    ?'vpce_configuration_description' => ?VPCEConfigurationDescription,
    ?'vpce_configuration_name' => ?VPCEConfigurationName,
    ?'vpce_service_name' => ?VPCEServiceName,
  ) $s = shape()) {
    $this->service_dns_name = $s['service_dns_name'] ?? '';
    $this->vpce_configuration_description = $s['vpce_configuration_description'] ?? '';
    $this->vpce_configuration_name = $s['vpce_configuration_name'] ?? '';
    $this->vpce_service_name = $s['vpce_service_name'] ?? '';
  }
}

class CreateVPCEConfigurationResult {
  public ?VPCEConfiguration $vpce_configuration;

  public function __construct(shape(
    ?'vpce_configuration' => ?VPCEConfiguration,
  ) $s = shape()) {
    $this->vpce_configuration = $s['vpce_configuration'] ?? null;
  }
}

type CurrencyCode = string;

class CustomerArtifactPaths {
  public ?AndroidPaths $android_paths;
  public ?DeviceHostPaths $device_host_paths;
  public ?IosPaths $ios_paths;

  public function __construct(shape(
    ?'android_paths' => ?AndroidPaths,
    ?'device_host_paths' => ?DeviceHostPaths,
    ?'ios_paths' => ?IosPaths,
  ) $s = shape()) {
    $this->android_paths = $s['android_paths'] ?? vec[];
    $this->device_host_paths = $s['device_host_paths'] ?? vec[];
    $this->ios_paths = $s['ios_paths'] ?? vec[];
  }
}

type DateTime = int;

class DeleteDevicePoolRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class DeleteDevicePoolResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteInstanceProfileRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class DeleteInstanceProfileResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteNetworkProfileRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class DeleteNetworkProfileResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteProjectRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class DeleteProjectResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRemoteAccessSessionRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class DeleteRemoteAccessSessionResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRunRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class DeleteRunResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTestGridProjectRequest {
  public ?DeviceFarmArn $project_arn;

  public function __construct(shape(
    ?'project_arn' => ?DeviceFarmArn,
  ) $s = shape()) {
    $this->project_arn = $s['project_arn'] ?? '';
  }
}

class DeleteTestGridProjectResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteUploadRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class DeleteUploadResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteVPCEConfigurationRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class DeleteVPCEConfigurationResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Device {
  public ?AmazonResourceName $arn;
  public ?DeviceAvailability $availability;
  public string $carrier;
  public ?CPU $cpu;
  public string $fleet_name;
  public string $fleet_type;
  public ?DeviceFormFactor $form_factor;
  public ?Long $heap_size;
  public string $image;
  public ?DeviceInstances $instances;
  public string $manufacturer;
  public ?Long $memory;
  public string $model;
  public string $model_id;
  public ?Name $name;
  public string $os;
  public ?DevicePlatform $platform;
  public string $radio;
  public bool $remote_access_enabled;
  public bool $remote_debug_enabled;
  public ?Resolution $resolution;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'availability' => ?DeviceAvailability,
    ?'carrier' => string,
    ?'cpu' => ?CPU,
    ?'fleet_name' => string,
    ?'fleet_type' => string,
    ?'form_factor' => ?DeviceFormFactor,
    ?'heap_size' => ?Long,
    ?'image' => string,
    ?'instances' => ?DeviceInstances,
    ?'manufacturer' => string,
    ?'memory' => ?Long,
    ?'model' => string,
    ?'model_id' => string,
    ?'name' => ?Name,
    ?'os' => string,
    ?'platform' => ?DevicePlatform,
    ?'radio' => string,
    ?'remote_access_enabled' => bool,
    ?'remote_debug_enabled' => bool,
    ?'resolution' => ?Resolution,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->availability = $s['availability'] ?? '';
    $this->carrier = $s['carrier'] ?? '';
    $this->cpu = $s['cpu'] ?? null;
    $this->fleet_name = $s['fleet_name'] ?? '';
    $this->fleet_type = $s['fleet_type'] ?? '';
    $this->form_factor = $s['form_factor'] ?? '';
    $this->heap_size = $s['heap_size'] ?? 0;
    $this->image = $s['image'] ?? '';
    $this->instances = $s['instances'] ?? vec[];
    $this->manufacturer = $s['manufacturer'] ?? '';
    $this->memory = $s['memory'] ?? 0;
    $this->model = $s['model'] ?? '';
    $this->model_id = $s['model_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->os = $s['os'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->radio = $s['radio'] ?? '';
    $this->remote_access_enabled = $s['remote_access_enabled'] ?? false;
    $this->remote_debug_enabled = $s['remote_debug_enabled'] ?? false;
    $this->resolution = $s['resolution'] ?? null;
  }
}

type DeviceAttribute = string;

type DeviceAvailability = string;

type DeviceFarmArn = string;

class DeviceFilter {
  public ?DeviceFilterAttribute $attribute;
  public ?RuleOperator $operator;
  public ?DeviceFilterValues $values;

  public function __construct(shape(
    ?'attribute' => ?DeviceFilterAttribute,
    ?'operator' => ?RuleOperator,
    ?'values' => ?DeviceFilterValues,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->operator = $s['operator'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type DeviceFilterAttribute = string;

type DeviceFilterValues = vec<String>;

type DeviceFilters = vec<DeviceFilter>;

type DeviceFormFactor = string;

type DeviceHostPaths = vec<String>;

class DeviceInstance {
  public ?AmazonResourceName $arn;
  public ?AmazonResourceName $device_arn;
  public ?InstanceProfile $instance_profile;
  public ?InstanceLabels $labels;
  public ?InstanceStatus $status;
  public string $udid;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'device_arn' => ?AmazonResourceName,
    ?'instance_profile' => ?InstanceProfile,
    ?'labels' => ?InstanceLabels,
    ?'status' => ?InstanceStatus,
    ?'udid' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->device_arn = $s['device_arn'] ?? '';
    $this->instance_profile = $s['instance_profile'] ?? null;
    $this->labels = $s['labels'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->udid = $s['udid'] ?? '';
  }
}

type DeviceInstances = vec<DeviceInstance>;

class DeviceMinutes {
  public ?Double $metered;
  public ?Double $total;
  public ?Double $unmetered;

  public function __construct(shape(
    ?'metered' => ?Double,
    ?'total' => ?Double,
    ?'unmetered' => ?Double,
  ) $s = shape()) {
    $this->metered = $s['metered'] ?? 0.0;
    $this->total = $s['total'] ?? 0.0;
    $this->unmetered = $s['unmetered'] ?? 0.0;
  }
}

type DevicePlatform = string;

class DevicePool {
  public ?AmazonResourceName $arn;
  public ?Message $description;
  public int $max_devices;
  public ?Name $name;
  public ?Rules $rules;
  public ?DevicePoolType $type;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'description' => ?Message,
    ?'max_devices' => int,
    ?'name' => ?Name,
    ?'rules' => ?Rules,
    ?'type' => ?DevicePoolType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->max_devices = $s['max_devices'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
    $this->type = $s['type'] ?? '';
  }
}

class DevicePoolCompatibilityResult {
  public bool $compatible;
  public ?Device $device;
  public ?IncompatibilityMessages $incompatibility_messages;

  public function __construct(shape(
    ?'compatible' => bool,
    ?'device' => ?Device,
    ?'incompatibility_messages' => ?IncompatibilityMessages,
  ) $s = shape()) {
    $this->compatible = $s['compatible'] ?? false;
    $this->device = $s['device'] ?? null;
    $this->incompatibility_messages = $s['incompatibility_messages'] ?? vec[];
  }
}

type DevicePoolCompatibilityResults = vec<DevicePoolCompatibilityResult>;

type DevicePoolType = string;

type DevicePools = vec<DevicePool>;

class DeviceSelectionConfiguration {
  public ?DeviceFilters $filters;
  public int $max_devices;

  public function __construct(shape(
    ?'filters' => ?DeviceFilters,
    ?'max_devices' => int,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_devices = $s['max_devices'] ?? 0;
  }
}

class DeviceSelectionResult {
  public ?DeviceFilters $filters;
  public int $matched_devices_count;
  public int $max_devices;

  public function __construct(shape(
    ?'filters' => ?DeviceFilters,
    ?'matched_devices_count' => int,
    ?'max_devices' => int,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->matched_devices_count = $s['matched_devices_count'] ?? 0;
    $this->max_devices = $s['max_devices'] ?? 0;
  }
}

type Devices = vec<Device>;

type Double = float;

type ExceptionMessage = string;

class ExecutionConfiguration {
  public ?AccountsCleanup $accounts_cleanup;
  public ?AppPackagesCleanup $app_packages_cleanup;
  public ?JobTimeoutMinutes $job_timeout_minutes;
  public ?SkipAppResign $skip_app_resign;
  public ?VideoCapture $video_capture;

  public function __construct(shape(
    ?'accounts_cleanup' => ?AccountsCleanup,
    ?'app_packages_cleanup' => ?AppPackagesCleanup,
    ?'job_timeout_minutes' => ?JobTimeoutMinutes,
    ?'skip_app_resign' => ?SkipAppResign,
    ?'video_capture' => ?VideoCapture,
  ) $s = shape()) {
    $this->accounts_cleanup = $s['accounts_cleanup'] ?? false;
    $this->app_packages_cleanup = $s['app_packages_cleanup'] ?? false;
    $this->job_timeout_minutes = $s['job_timeout_minutes'] ?? 0;
    $this->skip_app_resign = $s['skip_app_resign'] ?? false;
    $this->video_capture = $s['video_capture'] ?? false;
  }
}

type ExecutionResult = string;

type ExecutionResultCode = string;

type ExecutionStatus = string;

type Filter = string;

class GetAccountSettingsRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetAccountSettingsResult {
  public ?AccountSettings $account_settings;

  public function __construct(shape(
    ?'account_settings' => ?AccountSettings,
  ) $s = shape()) {
    $this->account_settings = $s['account_settings'] ?? null;
  }
}

class GetDeviceInstanceRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GetDeviceInstanceResult {
  public ?DeviceInstance $device_instance;

  public function __construct(shape(
    ?'device_instance' => ?DeviceInstance,
  ) $s = shape()) {
    $this->device_instance = $s['device_instance'] ?? null;
  }
}

class GetDevicePoolCompatibilityRequest {
  public ?AmazonResourceName $app_arn;
  public ?ScheduleRunConfiguration $configuration;
  public ?AmazonResourceName $device_pool_arn;
  public ?ScheduleRunTest $test;
  public ?TestType $test_type;

  public function __construct(shape(
    ?'app_arn' => ?AmazonResourceName,
    ?'configuration' => ?ScheduleRunConfiguration,
    ?'device_pool_arn' => ?AmazonResourceName,
    ?'test' => ?ScheduleRunTest,
    ?'test_type' => ?TestType,
  ) $s = shape()) {
    $this->app_arn = $s['app_arn'] ?? '';
    $this->configuration = $s['configuration'] ?? null;
    $this->device_pool_arn = $s['device_pool_arn'] ?? '';
    $this->test = $s['test'] ?? null;
    $this->test_type = $s['test_type'] ?? '';
  }
}

class GetDevicePoolCompatibilityResult {
  public ?DevicePoolCompatibilityResults $compatible_devices;
  public ?DevicePoolCompatibilityResults $incompatible_devices;

  public function __construct(shape(
    ?'compatible_devices' => ?DevicePoolCompatibilityResults,
    ?'incompatible_devices' => ?DevicePoolCompatibilityResults,
  ) $s = shape()) {
    $this->compatible_devices = $s['compatible_devices'] ?? vec[];
    $this->incompatible_devices = $s['incompatible_devices'] ?? vec[];
  }
}

class GetDevicePoolRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GetDevicePoolResult {
  public ?DevicePool $device_pool;

  public function __construct(shape(
    ?'device_pool' => ?DevicePool,
  ) $s = shape()) {
    $this->device_pool = $s['device_pool'] ?? null;
  }
}

class GetDeviceRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GetDeviceResult {
  public ?Device $device;

  public function __construct(shape(
    ?'device' => ?Device,
  ) $s = shape()) {
    $this->device = $s['device'] ?? null;
  }
}

class GetInstanceProfileRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GetInstanceProfileResult {
  public ?InstanceProfile $instance_profile;

  public function __construct(shape(
    ?'instance_profile' => ?InstanceProfile,
  ) $s = shape()) {
    $this->instance_profile = $s['instance_profile'] ?? null;
  }
}

class GetJobRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GetJobResult {
  public ?Job $job;

  public function __construct(shape(
    ?'job' => ?Job,
  ) $s = shape()) {
    $this->job = $s['job'] ?? null;
  }
}

class GetNetworkProfileRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GetNetworkProfileResult {
  public ?NetworkProfile $network_profile;

  public function __construct(shape(
    ?'network_profile' => ?NetworkProfile,
  ) $s = shape()) {
    $this->network_profile = $s['network_profile'] ?? null;
  }
}

class GetOfferingStatusRequest {
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetOfferingStatusResult {
  public ?OfferingStatusMap $current;
  public ?OfferingStatusMap $next_period;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'current' => ?OfferingStatusMap,
    ?'next_period' => ?OfferingStatusMap,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->current = $s['current'] ?? dict[];
    $this->next_period = $s['next_period'] ?? dict[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetProjectRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GetProjectResult {
  public ?Project $project;

  public function __construct(shape(
    ?'project' => ?Project,
  ) $s = shape()) {
    $this->project = $s['project'] ?? null;
  }
}

class GetRemoteAccessSessionRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GetRemoteAccessSessionResult {
  public ?RemoteAccessSession $remote_access_session;

  public function __construct(shape(
    ?'remote_access_session' => ?RemoteAccessSession,
  ) $s = shape()) {
    $this->remote_access_session = $s['remote_access_session'] ?? null;
  }
}

class GetRunRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GetRunResult {
  public ?Run $run;

  public function __construct(shape(
    ?'run' => ?Run,
  ) $s = shape()) {
    $this->run = $s['run'] ?? null;
  }
}

class GetSuiteRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GetSuiteResult {
  public ?Suite $suite;

  public function __construct(shape(
    ?'suite' => ?Suite,
  ) $s = shape()) {
    $this->suite = $s['suite'] ?? null;
  }
}

class GetTestGridProjectRequest {
  public ?DeviceFarmArn $project_arn;

  public function __construct(shape(
    ?'project_arn' => ?DeviceFarmArn,
  ) $s = shape()) {
    $this->project_arn = $s['project_arn'] ?? '';
  }
}

class GetTestGridProjectResult {
  public ?TestGridProject $test_grid_project;

  public function __construct(shape(
    ?'test_grid_project' => ?TestGridProject,
  ) $s = shape()) {
    $this->test_grid_project = $s['test_grid_project'] ?? null;
  }
}

class GetTestGridSessionRequest {
  public ?DeviceFarmArn $project_arn;
  public ?DeviceFarmArn $session_arn;
  public ?ResourceId $session_id;

  public function __construct(shape(
    ?'project_arn' => ?DeviceFarmArn,
    ?'session_arn' => ?DeviceFarmArn,
    ?'session_id' => ?ResourceId,
  ) $s = shape()) {
    $this->project_arn = $s['project_arn'] ?? '';
    $this->session_arn = $s['session_arn'] ?? '';
    $this->session_id = $s['session_id'] ?? '';
  }
}

class GetTestGridSessionResult {
  public ?TestGridSession $test_grid_session;

  public function __construct(shape(
    ?'test_grid_session' => ?TestGridSession,
  ) $s = shape()) {
    $this->test_grid_session = $s['test_grid_session'] ?? null;
  }
}

class GetTestRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GetTestResult {
  public ?Test $test;

  public function __construct(shape(
    ?'test' => ?Test,
  ) $s = shape()) {
    $this->test = $s['test'] ?? null;
  }
}

class GetUploadRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GetUploadResult {
  public ?Upload $upload;

  public function __construct(shape(
    ?'upload' => ?Upload,
  ) $s = shape()) {
    $this->upload = $s['upload'] ?? null;
  }
}

class GetVPCEConfigurationRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GetVPCEConfigurationResult {
  public ?VPCEConfiguration $vpce_configuration;

  public function __construct(shape(
    ?'vpce_configuration' => ?VPCEConfiguration,
  ) $s = shape()) {
    $this->vpce_configuration = $s['vpce_configuration'] ?? null;
  }
}

type HostAddress = string;

class IdempotencyException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class IncompatibilityMessage {
  public ?Message $message;
  public ?DeviceAttribute $type;

  public function __construct(shape(
    ?'message' => ?Message,
    ?'type' => ?DeviceAttribute,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type IncompatibilityMessages = vec<IncompatibilityMessage>;

class InstallToRemoteAccessSessionRequest {
  public ?AmazonResourceName $app_arn;
  public ?AmazonResourceName $remote_access_session_arn;

  public function __construct(shape(
    ?'app_arn' => ?AmazonResourceName,
    ?'remote_access_session_arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->app_arn = $s['app_arn'] ?? '';
    $this->remote_access_session_arn = $s['remote_access_session_arn'] ?? '';
  }
}

class InstallToRemoteAccessSessionResult {
  public ?Upload $app_upload;

  public function __construct(shape(
    ?'app_upload' => ?Upload,
  ) $s = shape()) {
    $this->app_upload = $s['app_upload'] ?? null;
  }
}

type InstanceLabels = vec<String>;

class InstanceProfile {
  public ?AmazonResourceName $arn;
  public ?Message $description;
  public ?PackageIds $exclude_app_packages_from_cleanup;
  public ?Name $name;
  public bool $package_cleanup;
  public bool $reboot_after_use;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'description' => ?Message,
    ?'exclude_app_packages_from_cleanup' => ?PackageIds,
    ?'name' => ?Name,
    ?'package_cleanup' => bool,
    ?'reboot_after_use' => bool,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->exclude_app_packages_from_cleanup = $s['exclude_app_packages_from_cleanup'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->package_cleanup = $s['package_cleanup'] ?? false;
    $this->reboot_after_use = $s['reboot_after_use'] ?? false;
  }
}

type InstanceProfiles = vec<InstanceProfile>;

type InstanceStatus = string;

type Integer = int;

type InteractionMode = string;

class InternalServiceException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidOperationException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type IosPaths = vec<String>;

class Job {
  public ?AmazonResourceName $arn;
  public ?Counters $counters;
  public ?DateTime $created;
  public ?Device $device;
  public ?DeviceMinutes $device_minutes;
  public ?AmazonResourceName $instance_arn;
  public ?Message $message;
  public ?Name $name;
  public ?ExecutionResult $result;
  public ?DateTime $started;
  public ?ExecutionStatus $status;
  public ?DateTime $stopped;
  public ?TestType $type;
  public ?VideoCapture $video_capture;
  public string $video_endpoint;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'counters' => ?Counters,
    ?'created' => ?DateTime,
    ?'device' => ?Device,
    ?'device_minutes' => ?DeviceMinutes,
    ?'instance_arn' => ?AmazonResourceName,
    ?'message' => ?Message,
    ?'name' => ?Name,
    ?'result' => ?ExecutionResult,
    ?'started' => ?DateTime,
    ?'status' => ?ExecutionStatus,
    ?'stopped' => ?DateTime,
    ?'type' => ?TestType,
    ?'video_capture' => ?VideoCapture,
    ?'video_endpoint' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->counters = $s['counters'] ?? null;
    $this->created = $s['created'] ?? 0;
    $this->device = $s['device'] ?? null;
    $this->device_minutes = $s['device_minutes'] ?? null;
    $this->instance_arn = $s['instance_arn'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->result = $s['result'] ?? '';
    $this->started = $s['started'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->stopped = $s['stopped'] ?? 0;
    $this->type = $s['type'] ?? '';
    $this->video_capture = $s['video_capture'] ?? false;
    $this->video_endpoint = $s['video_endpoint'] ?? '';
  }
}

type JobTimeoutMinutes = int;

type Jobs = vec<Job>;

class LimitExceededException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListArtifactsRequest {
  public ?AmazonResourceName $arn;
  public ?PaginationToken $next_token;
  public ?ArtifactCategory $type;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'next_token' => ?PaginationToken,
    ?'type' => ?ArtifactCategory,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ListArtifactsResult {
  public ?Artifacts $artifacts;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'artifacts' => ?Artifacts,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->artifacts = $s['artifacts'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeviceInstancesRequest {
  public int $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'max_results' => int,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeviceInstancesResult {
  public ?DeviceInstances $device_instances;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'device_instances' => ?DeviceInstances,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->device_instances = $s['device_instances'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDevicePoolsRequest {
  public ?AmazonResourceName $arn;
  public ?PaginationToken $next_token;
  public ?DevicePoolType $type;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'next_token' => ?PaginationToken,
    ?'type' => ?DevicePoolType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ListDevicePoolsResult {
  public ?DevicePools $device_pools;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'device_pools' => ?DevicePools,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->device_pools = $s['device_pools'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDevicesRequest {
  public ?AmazonResourceName $arn;
  public ?DeviceFilters $filters;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'filters' => ?DeviceFilters,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDevicesResult {
  public ?Devices $devices;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'devices' => ?Devices,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->devices = $s['devices'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListInstanceProfilesRequest {
  public int $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'max_results' => int,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListInstanceProfilesResult {
  public ?InstanceProfiles $instance_profiles;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'instance_profiles' => ?InstanceProfiles,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->instance_profiles = $s['instance_profiles'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListJobsRequest {
  public ?AmazonResourceName $arn;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListJobsResult {
  public ?Jobs $jobs;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'jobs' => ?Jobs,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->jobs = $s['jobs'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListNetworkProfilesRequest {
  public ?AmazonResourceName $arn;
  public ?PaginationToken $next_token;
  public ?NetworkProfileType $type;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'next_token' => ?PaginationToken,
    ?'type' => ?NetworkProfileType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ListNetworkProfilesResult {
  public ?NetworkProfiles $network_profiles;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'network_profiles' => ?NetworkProfiles,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->network_profiles = $s['network_profiles'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListOfferingPromotionsRequest {
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListOfferingPromotionsResult {
  public ?PaginationToken $next_token;
  public ?OfferingPromotions $offering_promotions;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'offering_promotions' => ?OfferingPromotions,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->offering_promotions = $s['offering_promotions'] ?? vec[];
  }
}

class ListOfferingTransactionsRequest {
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListOfferingTransactionsResult {
  public ?PaginationToken $next_token;
  public ?OfferingTransactions $offering_transactions;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'offering_transactions' => ?OfferingTransactions,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->offering_transactions = $s['offering_transactions'] ?? vec[];
  }
}

class ListOfferingsRequest {
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListOfferingsResult {
  public ?PaginationToken $next_token;
  public ?Offerings $offerings;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'offerings' => ?Offerings,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->offerings = $s['offerings'] ?? vec[];
  }
}

class ListProjectsRequest {
  public ?AmazonResourceName $arn;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListProjectsResult {
  public ?PaginationToken $next_token;
  public ?Projects $projects;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'projects' => ?Projects,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->projects = $s['projects'] ?? vec[];
  }
}

class ListRemoteAccessSessionsRequest {
  public ?AmazonResourceName $arn;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListRemoteAccessSessionsResult {
  public ?PaginationToken $next_token;
  public ?RemoteAccessSessions $remote_access_sessions;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'remote_access_sessions' => ?RemoteAccessSessions,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->remote_access_sessions = $s['remote_access_sessions'] ?? vec[];
  }
}

class ListRunsRequest {
  public ?AmazonResourceName $arn;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListRunsResult {
  public ?PaginationToken $next_token;
  public ?Runs $runs;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'runs' => ?Runs,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->runs = $s['runs'] ?? vec[];
  }
}

class ListSamplesRequest {
  public ?AmazonResourceName $arn;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSamplesResult {
  public ?PaginationToken $next_token;
  public ?Samples $samples;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'samples' => ?Samples,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->samples = $s['samples'] ?? vec[];
  }
}

class ListSuitesRequest {
  public ?AmazonResourceName $arn;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSuitesResult {
  public ?PaginationToken $next_token;
  public ?Suites $suites;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'suites' => ?Suites,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->suites = $s['suites'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?DeviceFarmArn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?DeviceFarmArn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagList $tags;

  public function __construct(shape(
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ListTestGridProjectsRequest {
  public ?MaxPageSize $max_result;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'max_result' => ?MaxPageSize,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->max_result = $s['max_result'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTestGridProjectsResult {
  public ?PaginationToken $next_token;
  public ?TestGridProjects $test_grid_projects;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'test_grid_projects' => ?TestGridProjects,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->test_grid_projects = $s['test_grid_projects'] ?? vec[];
  }
}

class ListTestGridSessionActionsRequest {
  public ?MaxPageSize $max_result;
  public ?PaginationToken $next_token;
  public ?DeviceFarmArn $session_arn;

  public function __construct(shape(
    ?'max_result' => ?MaxPageSize,
    ?'next_token' => ?PaginationToken,
    ?'session_arn' => ?DeviceFarmArn,
  ) $s = shape()) {
    $this->max_result = $s['max_result'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->session_arn = $s['session_arn'] ?? '';
  }
}

class ListTestGridSessionActionsResult {
  public ?TestGridSessionActions $actions;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'actions' => ?TestGridSessionActions,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTestGridSessionArtifactsRequest {
  public ?MaxPageSize $max_result;
  public ?PaginationToken $next_token;
  public ?DeviceFarmArn $session_arn;
  public ?TestGridSessionArtifactCategory $type;

  public function __construct(shape(
    ?'max_result' => ?MaxPageSize,
    ?'next_token' => ?PaginationToken,
    ?'session_arn' => ?DeviceFarmArn,
    ?'type' => ?TestGridSessionArtifactCategory,
  ) $s = shape()) {
    $this->max_result = $s['max_result'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->session_arn = $s['session_arn'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ListTestGridSessionArtifactsResult {
  public ?TestGridSessionArtifacts $artifacts;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'artifacts' => ?TestGridSessionArtifacts,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->artifacts = $s['artifacts'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTestGridSessionsRequest {
  public ?DateTime $creation_time_after;
  public ?DateTime $creation_time_before;
  public ?DateTime $end_time_after;
  public ?DateTime $end_time_before;
  public ?MaxPageSize $max_result;
  public ?PaginationToken $next_token;
  public ?DeviceFarmArn $project_arn;
  public ?TestGridSessionStatus $status;

  public function __construct(shape(
    ?'creation_time_after' => ?DateTime,
    ?'creation_time_before' => ?DateTime,
    ?'end_time_after' => ?DateTime,
    ?'end_time_before' => ?DateTime,
    ?'max_result' => ?MaxPageSize,
    ?'next_token' => ?PaginationToken,
    ?'project_arn' => ?DeviceFarmArn,
    ?'status' => ?TestGridSessionStatus,
  ) $s = shape()) {
    $this->creation_time_after = $s['creation_time_after'] ?? 0;
    $this->creation_time_before = $s['creation_time_before'] ?? 0;
    $this->end_time_after = $s['end_time_after'] ?? 0;
    $this->end_time_before = $s['end_time_before'] ?? 0;
    $this->max_result = $s['max_result'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->project_arn = $s['project_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class ListTestGridSessionsResult {
  public ?PaginationToken $next_token;
  public ?TestGridSessions $test_grid_sessions;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'test_grid_sessions' => ?TestGridSessions,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->test_grid_sessions = $s['test_grid_sessions'] ?? vec[];
  }
}

class ListTestsRequest {
  public ?AmazonResourceName $arn;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTestsResult {
  public ?PaginationToken $next_token;
  public ?Tests $tests;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'tests' => ?Tests,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tests = $s['tests'] ?? vec[];
  }
}

class ListUniqueProblemsRequest {
  public ?AmazonResourceName $arn;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListUniqueProblemsResult {
  public ?PaginationToken $next_token;
  public ?UniqueProblemsByExecutionResultMap $unique_problems;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'unique_problems' => ?UniqueProblemsByExecutionResultMap,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->unique_problems = $s['unique_problems'] ?? dict[];
  }
}

class ListUploadsRequest {
  public ?AmazonResourceName $arn;
  public ?PaginationToken $next_token;
  public ?UploadType $type;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'next_token' => ?PaginationToken,
    ?'type' => ?UploadType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ListUploadsResult {
  public ?PaginationToken $next_token;
  public ?Uploads $uploads;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'uploads' => ?Uploads,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->uploads = $s['uploads'] ?? vec[];
  }
}

class ListVPCEConfigurationsRequest {
  public int $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'max_results' => int,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListVPCEConfigurationsResult {
  public ?PaginationToken $next_token;
  public ?VPCEConfigurations $vpce_configurations;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'vpce_configurations' => ?VPCEConfigurations,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->vpce_configurations = $s['vpce_configurations'] ?? vec[];
  }
}

class Location {
  public ?Double $latitude;
  public ?Double $longitude;

  public function __construct(shape(
    ?'latitude' => ?Double,
    ?'longitude' => ?Double,
  ) $s = shape()) {
    $this->latitude = $s['latitude'] ?? 0.0;
    $this->longitude = $s['longitude'] ?? 0.0;
  }
}

type Long = int;

type MaxPageSize = int;

type MaxSlotMap = dict<String, Integer>;

type Message = string;

type Metadata = string;

class MonetaryAmount {
  public ?Double $amount;
  public ?CurrencyCode $currency_code;

  public function __construct(shape(
    ?'amount' => ?Double,
    ?'currency_code' => ?CurrencyCode,
  ) $s = shape()) {
    $this->amount = $s['amount'] ?? 0.0;
    $this->currency_code = $s['currency_code'] ?? '';
  }
}

type Name = string;

class NetworkProfile {
  public ?AmazonResourceName $arn;
  public ?Message $description;
  public ?Long $downlink_bandwidth_bits;
  public ?Long $downlink_delay_ms;
  public ?Long $downlink_jitter_ms;
  public ?PercentInteger $downlink_loss_percent;
  public ?Name $name;
  public ?NetworkProfileType $type;
  public ?Long $uplink_bandwidth_bits;
  public ?Long $uplink_delay_ms;
  public ?Long $uplink_jitter_ms;
  public ?PercentInteger $uplink_loss_percent;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'description' => ?Message,
    ?'downlink_bandwidth_bits' => ?Long,
    ?'downlink_delay_ms' => ?Long,
    ?'downlink_jitter_ms' => ?Long,
    ?'downlink_loss_percent' => ?PercentInteger,
    ?'name' => ?Name,
    ?'type' => ?NetworkProfileType,
    ?'uplink_bandwidth_bits' => ?Long,
    ?'uplink_delay_ms' => ?Long,
    ?'uplink_jitter_ms' => ?Long,
    ?'uplink_loss_percent' => ?PercentInteger,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->downlink_bandwidth_bits = $s['downlink_bandwidth_bits'] ?? 0;
    $this->downlink_delay_ms = $s['downlink_delay_ms'] ?? 0;
    $this->downlink_jitter_ms = $s['downlink_jitter_ms'] ?? 0;
    $this->downlink_loss_percent = $s['downlink_loss_percent'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->uplink_bandwidth_bits = $s['uplink_bandwidth_bits'] ?? 0;
    $this->uplink_delay_ms = $s['uplink_delay_ms'] ?? 0;
    $this->uplink_jitter_ms = $s['uplink_jitter_ms'] ?? 0;
    $this->uplink_loss_percent = $s['uplink_loss_percent'] ?? 0;
  }
}

type NetworkProfileType = string;

type NetworkProfiles = vec<NetworkProfile>;

class NotEligibleException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NotFoundException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Offering {
  public ?Message $description;
  public ?OfferingIdentifier $id;
  public ?DevicePlatform $platform;
  public ?RecurringCharges $recurring_charges;
  public ?OfferingType $type;

  public function __construct(shape(
    ?'description' => ?Message,
    ?'id' => ?OfferingIdentifier,
    ?'platform' => ?DevicePlatform,
    ?'recurring_charges' => ?RecurringCharges,
    ?'type' => ?OfferingType,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->recurring_charges = $s['recurring_charges'] ?? vec[];
    $this->type = $s['type'] ?? '';
  }
}

type OfferingIdentifier = string;

class OfferingPromotion {
  public ?Message $description;
  public ?OfferingPromotionIdentifier $id;

  public function __construct(shape(
    ?'description' => ?Message,
    ?'id' => ?OfferingPromotionIdentifier,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

type OfferingPromotionIdentifier = string;

type OfferingPromotions = vec<OfferingPromotion>;

class OfferingStatus {
  public ?DateTime $effective_on;
  public ?Offering $offering;
  public int $quantity;
  public ?OfferingTransactionType $type;

  public function __construct(shape(
    ?'effective_on' => ?DateTime,
    ?'offering' => ?Offering,
    ?'quantity' => int,
    ?'type' => ?OfferingTransactionType,
  ) $s = shape()) {
    $this->effective_on = $s['effective_on'] ?? 0;
    $this->offering = $s['offering'] ?? null;
    $this->quantity = $s['quantity'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

type OfferingStatusMap = dict<OfferingIdentifier, OfferingStatus>;

class OfferingTransaction {
  public ?MonetaryAmount $cost;
  public ?DateTime $created_on;
  public ?OfferingPromotionIdentifier $offering_promotion_id;
  public ?OfferingStatus $offering_status;
  public ?TransactionIdentifier $transaction_id;

  public function __construct(shape(
    ?'cost' => ?MonetaryAmount,
    ?'created_on' => ?DateTime,
    ?'offering_promotion_id' => ?OfferingPromotionIdentifier,
    ?'offering_status' => ?OfferingStatus,
    ?'transaction_id' => ?TransactionIdentifier,
  ) $s = shape()) {
    $this->cost = $s['cost'] ?? null;
    $this->created_on = $s['created_on'] ?? 0;
    $this->offering_promotion_id = $s['offering_promotion_id'] ?? '';
    $this->offering_status = $s['offering_status'] ?? null;
    $this->transaction_id = $s['transaction_id'] ?? '';
  }
}

type OfferingTransactionType = string;

type OfferingTransactions = vec<OfferingTransaction>;

type OfferingType = string;

type Offerings = vec<Offering>;

type PackageIds = vec<String>;

type PaginationToken = string;

type PercentInteger = int;

class Problem {
  public ?Device $device;
  public ?ProblemDetail $job;
  public ?Message $message;
  public ?ExecutionResult $result;
  public ?ProblemDetail $run;
  public ?ProblemDetail $suite;
  public ?ProblemDetail $test;

  public function __construct(shape(
    ?'device' => ?Device,
    ?'job' => ?ProblemDetail,
    ?'message' => ?Message,
    ?'result' => ?ExecutionResult,
    ?'run' => ?ProblemDetail,
    ?'suite' => ?ProblemDetail,
    ?'test' => ?ProblemDetail,
  ) $s = shape()) {
    $this->device = $s['device'] ?? null;
    $this->job = $s['job'] ?? null;
    $this->message = $s['message'] ?? '';
    $this->result = $s['result'] ?? '';
    $this->run = $s['run'] ?? null;
    $this->suite = $s['suite'] ?? null;
    $this->test = $s['test'] ?? null;
  }
}

class ProblemDetail {
  public ?AmazonResourceName $arn;
  public ?Name $name;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type Problems = vec<Problem>;

class Project {
  public ?AmazonResourceName $arn;
  public ?DateTime $created;
  public ?JobTimeoutMinutes $default_job_timeout_minutes;
  public ?Name $name;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'created' => ?DateTime,
    ?'default_job_timeout_minutes' => ?JobTimeoutMinutes,
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->default_job_timeout_minutes = $s['default_job_timeout_minutes'] ?? 0;
    $this->name = $s['name'] ?? '';
  }
}

type Projects = vec<Project>;

class PurchaseOfferingRequest {
  public ?OfferingIdentifier $offering_id;
  public ?OfferingPromotionIdentifier $offering_promotion_id;
  public int $quantity;

  public function __construct(shape(
    ?'offering_id' => ?OfferingIdentifier,
    ?'offering_promotion_id' => ?OfferingPromotionIdentifier,
    ?'quantity' => int,
  ) $s = shape()) {
    $this->offering_id = $s['offering_id'] ?? '';
    $this->offering_promotion_id = $s['offering_promotion_id'] ?? '';
    $this->quantity = $s['quantity'] ?? 0;
  }
}

class PurchaseOfferingResult {
  public ?OfferingTransaction $offering_transaction;

  public function __construct(shape(
    ?'offering_transaction' => ?OfferingTransaction,
  ) $s = shape()) {
    $this->offering_transaction = $s['offering_transaction'] ?? null;
  }
}

type PurchasedDevicesMap = dict<DevicePlatform, Integer>;

class Radios {
  public bool $bluetooth;
  public bool $gps;
  public bool $nfc;
  public bool $wifi;

  public function __construct(shape(
    ?'bluetooth' => bool,
    ?'gps' => bool,
    ?'nfc' => bool,
    ?'wifi' => bool,
  ) $s = shape()) {
    $this->bluetooth = $s['bluetooth'] ?? false;
    $this->gps = $s['gps'] ?? false;
    $this->nfc = $s['nfc'] ?? false;
    $this->wifi = $s['wifi'] ?? false;
  }
}

class RecurringCharge {
  public ?MonetaryAmount $cost;
  public ?RecurringChargeFrequency $frequency;

  public function __construct(shape(
    ?'cost' => ?MonetaryAmount,
    ?'frequency' => ?RecurringChargeFrequency,
  ) $s = shape()) {
    $this->cost = $s['cost'] ?? null;
    $this->frequency = $s['frequency'] ?? '';
  }
}

type RecurringChargeFrequency = string;

type RecurringCharges = vec<RecurringCharge>;

class RemoteAccessSession {
  public ?AmazonResourceName $arn;
  public ?BillingMethod $billing_method;
  public ?ClientId $client_id;
  public ?DateTime $created;
  public ?Device $device;
  public ?DeviceMinutes $device_minutes;
  public string $device_udid;
  public string $endpoint;
  public ?HostAddress $host_address;
  public ?AmazonResourceName $instance_arn;
  public ?InteractionMode $interaction_mode;
  public ?Message $message;
  public ?Name $name;
  public bool $remote_debug_enabled;
  public ?AmazonResourceName $remote_record_app_arn;
  public bool $remote_record_enabled;
  public ?ExecutionResult $result;
  public ?SkipAppResign $skip_app_resign;
  public ?DateTime $started;
  public ?ExecutionStatus $status;
  public ?DateTime $stopped;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'billing_method' => ?BillingMethod,
    ?'client_id' => ?ClientId,
    ?'created' => ?DateTime,
    ?'device' => ?Device,
    ?'device_minutes' => ?DeviceMinutes,
    ?'device_udid' => string,
    ?'endpoint' => string,
    ?'host_address' => ?HostAddress,
    ?'instance_arn' => ?AmazonResourceName,
    ?'interaction_mode' => ?InteractionMode,
    ?'message' => ?Message,
    ?'name' => ?Name,
    ?'remote_debug_enabled' => bool,
    ?'remote_record_app_arn' => ?AmazonResourceName,
    ?'remote_record_enabled' => bool,
    ?'result' => ?ExecutionResult,
    ?'skip_app_resign' => ?SkipAppResign,
    ?'started' => ?DateTime,
    ?'status' => ?ExecutionStatus,
    ?'stopped' => ?DateTime,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->billing_method = $s['billing_method'] ?? '';
    $this->client_id = $s['client_id'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->device = $s['device'] ?? null;
    $this->device_minutes = $s['device_minutes'] ?? null;
    $this->device_udid = $s['device_udid'] ?? '';
    $this->endpoint = $s['endpoint'] ?? '';
    $this->host_address = $s['host_address'] ?? '';
    $this->instance_arn = $s['instance_arn'] ?? '';
    $this->interaction_mode = $s['interaction_mode'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->remote_debug_enabled = $s['remote_debug_enabled'] ?? false;
    $this->remote_record_app_arn = $s['remote_record_app_arn'] ?? '';
    $this->remote_record_enabled = $s['remote_record_enabled'] ?? false;
    $this->result = $s['result'] ?? '';
    $this->skip_app_resign = $s['skip_app_resign'] ?? false;
    $this->started = $s['started'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->stopped = $s['stopped'] ?? 0;
  }
}

type RemoteAccessSessions = vec<RemoteAccessSession>;

class RenewOfferingRequest {
  public ?OfferingIdentifier $offering_id;
  public int $quantity;

  public function __construct(shape(
    ?'offering_id' => ?OfferingIdentifier,
    ?'quantity' => int,
  ) $s = shape()) {
    $this->offering_id = $s['offering_id'] ?? '';
    $this->quantity = $s['quantity'] ?? 0;
  }
}

class RenewOfferingResult {
  public ?OfferingTransaction $offering_transaction;

  public function __construct(shape(
    ?'offering_transaction' => ?OfferingTransaction,
  ) $s = shape()) {
    $this->offering_transaction = $s['offering_transaction'] ?? null;
  }
}

class Resolution {
  public int $height;
  public int $width;

  public function __construct(shape(
    ?'height' => int,
    ?'width' => int,
  ) $s = shape()) {
    $this->height = $s['height'] ?? 0;
    $this->width = $s['width'] ?? 0;
  }
}

type ResourceDescription = string;

type ResourceId = string;

type ResourceName = string;

class Rule {
  public ?DeviceAttribute $attribute;
  public ?RuleOperator $operator;
  public string $value;

  public function __construct(shape(
    ?'attribute' => ?DeviceAttribute,
    ?'operator' => ?RuleOperator,
    ?'value' => string,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->operator = $s['operator'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type RuleOperator = string;

type Rules = vec<Rule>;

class Run {
  public ?AmazonResourceName $app_upload;
  public ?AmazonResourceName $arn;
  public ?BillingMethod $billing_method;
  public int $completed_jobs;
  public ?Counters $counters;
  public ?DateTime $created;
  public ?CustomerArtifactPaths $customer_artifact_paths;
  public ?DeviceMinutes $device_minutes;
  public ?AmazonResourceName $device_pool_arn;
  public ?DeviceSelectionResult $device_selection_result;
  public int $event_count;
  public ?JobTimeoutMinutes $job_timeout_minutes;
  public string $locale;
  public ?Location $location;
  public ?Message $message;
  public ?Name $name;
  public ?NetworkProfile $network_profile;
  public string $parsing_result_url;
  public ?DevicePlatform $platform;
  public ?Radios $radios;
  public ?ExecutionResult $result;
  public ?ExecutionResultCode $result_code;
  public int $seed;
  public ?SkipAppResign $skip_app_resign;
  public ?DateTime $started;
  public ?ExecutionStatus $status;
  public ?DateTime $stopped;
  public ?AmazonResourceName $test_spec_arn;
  public int $total_jobs;
  public ?TestType $type;
  public string $web_url;

  public function __construct(shape(
    ?'app_upload' => ?AmazonResourceName,
    ?'arn' => ?AmazonResourceName,
    ?'billing_method' => ?BillingMethod,
    ?'completed_jobs' => int,
    ?'counters' => ?Counters,
    ?'created' => ?DateTime,
    ?'customer_artifact_paths' => ?CustomerArtifactPaths,
    ?'device_minutes' => ?DeviceMinutes,
    ?'device_pool_arn' => ?AmazonResourceName,
    ?'device_selection_result' => ?DeviceSelectionResult,
    ?'event_count' => int,
    ?'job_timeout_minutes' => ?JobTimeoutMinutes,
    ?'locale' => string,
    ?'location' => ?Location,
    ?'message' => ?Message,
    ?'name' => ?Name,
    ?'network_profile' => ?NetworkProfile,
    ?'parsing_result_url' => string,
    ?'platform' => ?DevicePlatform,
    ?'radios' => ?Radios,
    ?'result' => ?ExecutionResult,
    ?'result_code' => ?ExecutionResultCode,
    ?'seed' => int,
    ?'skip_app_resign' => ?SkipAppResign,
    ?'started' => ?DateTime,
    ?'status' => ?ExecutionStatus,
    ?'stopped' => ?DateTime,
    ?'test_spec_arn' => ?AmazonResourceName,
    ?'total_jobs' => int,
    ?'type' => ?TestType,
    ?'web_url' => string,
  ) $s = shape()) {
    $this->app_upload = $s['app_upload'] ?? '';
    $this->arn = $s['arn'] ?? '';
    $this->billing_method = $s['billing_method'] ?? '';
    $this->completed_jobs = $s['completed_jobs'] ?? 0;
    $this->counters = $s['counters'] ?? null;
    $this->created = $s['created'] ?? 0;
    $this->customer_artifact_paths = $s['customer_artifact_paths'] ?? null;
    $this->device_minutes = $s['device_minutes'] ?? null;
    $this->device_pool_arn = $s['device_pool_arn'] ?? '';
    $this->device_selection_result = $s['device_selection_result'] ?? null;
    $this->event_count = $s['event_count'] ?? 0;
    $this->job_timeout_minutes = $s['job_timeout_minutes'] ?? 0;
    $this->locale = $s['locale'] ?? '';
    $this->location = $s['location'] ?? null;
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->network_profile = $s['network_profile'] ?? null;
    $this->parsing_result_url = $s['parsing_result_url'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->radios = $s['radios'] ?? null;
    $this->result = $s['result'] ?? '';
    $this->result_code = $s['result_code'] ?? '';
    $this->seed = $s['seed'] ?? 0;
    $this->skip_app_resign = $s['skip_app_resign'] ?? false;
    $this->started = $s['started'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->stopped = $s['stopped'] ?? 0;
    $this->test_spec_arn = $s['test_spec_arn'] ?? '';
    $this->total_jobs = $s['total_jobs'] ?? 0;
    $this->type = $s['type'] ?? '';
    $this->web_url = $s['web_url'] ?? '';
  }
}

type Runs = vec<Run>;

class Sample {
  public ?AmazonResourceName $arn;
  public ?SampleType $type;
  public ?URL $url;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'type' => ?SampleType,
    ?'url' => ?URL,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

type SampleType = string;

type Samples = vec<Sample>;

class ScheduleRunConfiguration {
  public ?AmazonResourceNames $auxiliary_apps;
  public ?BillingMethod $billing_method;
  public ?CustomerArtifactPaths $customer_artifact_paths;
  public ?AmazonResourceName $extra_data_package_arn;
  public string $locale;
  public ?Location $location;
  public ?AmazonResourceName $network_profile_arn;
  public ?Radios $radios;
  public ?AmazonResourceNames $vpce_configuration_arns;

  public function __construct(shape(
    ?'auxiliary_apps' => ?AmazonResourceNames,
    ?'billing_method' => ?BillingMethod,
    ?'customer_artifact_paths' => ?CustomerArtifactPaths,
    ?'extra_data_package_arn' => ?AmazonResourceName,
    ?'locale' => string,
    ?'location' => ?Location,
    ?'network_profile_arn' => ?AmazonResourceName,
    ?'radios' => ?Radios,
    ?'vpce_configuration_arns' => ?AmazonResourceNames,
  ) $s = shape()) {
    $this->auxiliary_apps = $s['auxiliary_apps'] ?? vec[];
    $this->billing_method = $s['billing_method'] ?? '';
    $this->customer_artifact_paths = $s['customer_artifact_paths'] ?? null;
    $this->extra_data_package_arn = $s['extra_data_package_arn'] ?? '';
    $this->locale = $s['locale'] ?? '';
    $this->location = $s['location'] ?? null;
    $this->network_profile_arn = $s['network_profile_arn'] ?? '';
    $this->radios = $s['radios'] ?? null;
    $this->vpce_configuration_arns = $s['vpce_configuration_arns'] ?? vec[];
  }
}

class ScheduleRunRequest {
  public ?AmazonResourceName $app_arn;
  public ?ScheduleRunConfiguration $configuration;
  public ?AmazonResourceName $device_pool_arn;
  public ?DeviceSelectionConfiguration $device_selection_configuration;
  public ?ExecutionConfiguration $execution_configuration;
  public ?Name $name;
  public ?AmazonResourceName $project_arn;
  public ?ScheduleRunTest $test;

  public function __construct(shape(
    ?'app_arn' => ?AmazonResourceName,
    ?'configuration' => ?ScheduleRunConfiguration,
    ?'device_pool_arn' => ?AmazonResourceName,
    ?'device_selection_configuration' => ?DeviceSelectionConfiguration,
    ?'execution_configuration' => ?ExecutionConfiguration,
    ?'name' => ?Name,
    ?'project_arn' => ?AmazonResourceName,
    ?'test' => ?ScheduleRunTest,
  ) $s = shape()) {
    $this->app_arn = $s['app_arn'] ?? '';
    $this->configuration = $s['configuration'] ?? null;
    $this->device_pool_arn = $s['device_pool_arn'] ?? '';
    $this->device_selection_configuration = $s['device_selection_configuration'] ?? null;
    $this->execution_configuration = $s['execution_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->project_arn = $s['project_arn'] ?? '';
    $this->test = $s['test'] ?? null;
  }
}

class ScheduleRunResult {
  public ?Run $run;

  public function __construct(shape(
    ?'run' => ?Run,
  ) $s = shape()) {
    $this->run = $s['run'] ?? null;
  }
}

class ScheduleRunTest {
  public ?Filter $filter;
  public ?TestParameters $parameters;
  public ?AmazonResourceName $test_package_arn;
  public ?AmazonResourceName $test_spec_arn;
  public ?TestType $type;

  public function __construct(shape(
    ?'filter' => ?Filter,
    ?'parameters' => ?TestParameters,
    ?'test_package_arn' => ?AmazonResourceName,
    ?'test_spec_arn' => ?AmazonResourceName,
    ?'type' => ?TestType,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? '';
    $this->parameters = $s['parameters'] ?? dict[];
    $this->test_package_arn = $s['test_package_arn'] ?? '';
    $this->test_spec_arn = $s['test_spec_arn'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ServiceAccountException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ServiceDnsName = string;

type SkipAppResign = bool;

type SshPublicKey = string;

class StopJobRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class StopJobResult {
  public ?Job $job;

  public function __construct(shape(
    ?'job' => ?Job,
  ) $s = shape()) {
    $this->job = $s['job'] ?? null;
  }
}

class StopRemoteAccessSessionRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class StopRemoteAccessSessionResult {
  public ?RemoteAccessSession $remote_access_session;

  public function __construct(shape(
    ?'remote_access_session' => ?RemoteAccessSession,
  ) $s = shape()) {
    $this->remote_access_session = $s['remote_access_session'] ?? null;
  }
}

class StopRunRequest {
  public ?AmazonResourceName $arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class StopRunResult {
  public ?Run $run;

  public function __construct(shape(
    ?'run' => ?Run,
  ) $s = shape()) {
    $this->run = $s['run'] ?? null;
  }
}

type String = string;

class Suite {
  public ?AmazonResourceName $arn;
  public ?Counters $counters;
  public ?DateTime $created;
  public ?DeviceMinutes $device_minutes;
  public ?Message $message;
  public ?Name $name;
  public ?ExecutionResult $result;
  public ?DateTime $started;
  public ?ExecutionStatus $status;
  public ?DateTime $stopped;
  public ?TestType $type;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'counters' => ?Counters,
    ?'created' => ?DateTime,
    ?'device_minutes' => ?DeviceMinutes,
    ?'message' => ?Message,
    ?'name' => ?Name,
    ?'result' => ?ExecutionResult,
    ?'started' => ?DateTime,
    ?'status' => ?ExecutionStatus,
    ?'stopped' => ?DateTime,
    ?'type' => ?TestType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->counters = $s['counters'] ?? null;
    $this->created = $s['created'] ?? 0;
    $this->device_minutes = $s['device_minutes'] ?? null;
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->result = $s['result'] ?? '';
    $this->started = $s['started'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->stopped = $s['stopped'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

type Suites = vec<Suite>;

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

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagOperationException {
  public ?ExceptionMessage $message;
  public ?AmazonResourceName $resource_name;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'resource_name' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_name = $s['resource_name'] ?? '';
  }
}

class TagPolicyException {
  public ?ExceptionMessage $message;
  public ?AmazonResourceName $resource_name;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'resource_name' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_name = $s['resource_name'] ?? '';
  }
}

class TagResourceRequest {
  public ?DeviceFarmArn $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?DeviceFarmArn,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class Test {
  public ?AmazonResourceName $arn;
  public ?Counters $counters;
  public ?DateTime $created;
  public ?DeviceMinutes $device_minutes;
  public ?Message $message;
  public ?Name $name;
  public ?ExecutionResult $result;
  public ?DateTime $started;
  public ?ExecutionStatus $status;
  public ?DateTime $stopped;
  public ?TestType $type;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'counters' => ?Counters,
    ?'created' => ?DateTime,
    ?'device_minutes' => ?DeviceMinutes,
    ?'message' => ?Message,
    ?'name' => ?Name,
    ?'result' => ?ExecutionResult,
    ?'started' => ?DateTime,
    ?'status' => ?ExecutionStatus,
    ?'stopped' => ?DateTime,
    ?'type' => ?TestType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->counters = $s['counters'] ?? null;
    $this->created = $s['created'] ?? 0;
    $this->device_minutes = $s['device_minutes'] ?? null;
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->result = $s['result'] ?? '';
    $this->started = $s['started'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->stopped = $s['stopped'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

class TestGridProject {
  public ?DeviceFarmArn $arn;
  public ?DateTime $created;
  public string $description;
  public string $name;

  public function __construct(shape(
    ?'arn' => ?DeviceFarmArn,
    ?'created' => ?DateTime,
    ?'description' => string,
    ?'name' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type TestGridProjects = vec<TestGridProject>;

class TestGridSession {
  public ?DeviceFarmArn $arn;
  public ?Double $billing_minutes;
  public ?DateTime $created;
  public ?DateTime $ended;
  public string $selenium_properties;
  public ?TestGridSessionStatus $status;

  public function __construct(shape(
    ?'arn' => ?DeviceFarmArn,
    ?'billing_minutes' => ?Double,
    ?'created' => ?DateTime,
    ?'ended' => ?DateTime,
    ?'selenium_properties' => string,
    ?'status' => ?TestGridSessionStatus,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->billing_minutes = $s['billing_minutes'] ?? 0.0;
    $this->created = $s['created'] ?? 0;
    $this->ended = $s['ended'] ?? 0;
    $this->selenium_properties = $s['selenium_properties'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class TestGridSessionAction {
  public string $action;
  public ?Long $duration;
  public string $request_method;
  public ?DateTime $started;
  public string $status_code;

  public function __construct(shape(
    ?'action' => string,
    ?'duration' => ?Long,
    ?'request_method' => string,
    ?'started' => ?DateTime,
    ?'status_code' => string,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->duration = $s['duration'] ?? 0;
    $this->request_method = $s['request_method'] ?? '';
    $this->started = $s['started'] ?? 0;
    $this->status_code = $s['status_code'] ?? '';
  }
}

type TestGridSessionActions = vec<TestGridSessionAction>;

class TestGridSessionArtifact {
  public string $filename;
  public ?TestGridSessionArtifactType $type;
  public string $url;

  public function __construct(shape(
    ?'filename' => string,
    ?'type' => ?TestGridSessionArtifactType,
    ?'url' => string,
  ) $s = shape()) {
    $this->filename = $s['filename'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

type TestGridSessionArtifactCategory = string;

type TestGridSessionArtifactType = string;

type TestGridSessionArtifacts = vec<TestGridSessionArtifact>;

type TestGridSessionStatus = string;

type TestGridSessions = vec<TestGridSession>;

type TestGridUrlExpiresInSecondsInput = int;

type TestParameters = dict<String, String>;

type TestType = string;

type Tests = vec<Test>;

class TooManyTagsException {
  public ?ExceptionMessage $message;
  public ?AmazonResourceName $resource_name;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'resource_name' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_name = $s['resource_name'] ?? '';
  }
}

type TransactionIdentifier = string;

class TrialMinutes {
  public ?Double $remaining;
  public ?Double $total;

  public function __construct(shape(
    ?'remaining' => ?Double,
    ?'total' => ?Double,
  ) $s = shape()) {
    $this->remaining = $s['remaining'] ?? 0.0;
    $this->total = $s['total'] ?? 0.0;
  }
}

type URL = string;

class UniqueProblem {
  public ?Message $message;
  public ?Problems $problems;

  public function __construct(shape(
    ?'message' => ?Message,
    ?'problems' => ?Problems,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->problems = $s['problems'] ?? vec[];
  }
}

type UniqueProblems = vec<UniqueProblem>;

type UniqueProblemsByExecutionResultMap = dict<ExecutionResult, UniqueProblems>;

class UntagResourceRequest {
  public ?DeviceFarmArn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?DeviceFarmArn,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDeviceInstanceRequest {
  public ?AmazonResourceName $arn;
  public ?InstanceLabels $labels;
  public ?AmazonResourceName $profile_arn;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'labels' => ?InstanceLabels,
    ?'profile_arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->labels = $s['labels'] ?? vec[];
    $this->profile_arn = $s['profile_arn'] ?? '';
  }
}

class UpdateDeviceInstanceResult {
  public ?DeviceInstance $device_instance;

  public function __construct(shape(
    ?'device_instance' => ?DeviceInstance,
  ) $s = shape()) {
    $this->device_instance = $s['device_instance'] ?? null;
  }
}

class UpdateDevicePoolRequest {
  public ?AmazonResourceName $arn;
  public bool $clear_max_devices;
  public ?Message $description;
  public int $max_devices;
  public ?Name $name;
  public ?Rules $rules;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'clear_max_devices' => bool,
    ?'description' => ?Message,
    ?'max_devices' => int,
    ?'name' => ?Name,
    ?'rules' => ?Rules,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->clear_max_devices = $s['clear_max_devices'] ?? false;
    $this->description = $s['description'] ?? '';
    $this->max_devices = $s['max_devices'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
  }
}

class UpdateDevicePoolResult {
  public ?DevicePool $device_pool;

  public function __construct(shape(
    ?'device_pool' => ?DevicePool,
  ) $s = shape()) {
    $this->device_pool = $s['device_pool'] ?? null;
  }
}

class UpdateInstanceProfileRequest {
  public ?AmazonResourceName $arn;
  public ?Message $description;
  public ?PackageIds $exclude_app_packages_from_cleanup;
  public ?Name $name;
  public bool $package_cleanup;
  public bool $reboot_after_use;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'description' => ?Message,
    ?'exclude_app_packages_from_cleanup' => ?PackageIds,
    ?'name' => ?Name,
    ?'package_cleanup' => bool,
    ?'reboot_after_use' => bool,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->exclude_app_packages_from_cleanup = $s['exclude_app_packages_from_cleanup'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->package_cleanup = $s['package_cleanup'] ?? false;
    $this->reboot_after_use = $s['reboot_after_use'] ?? false;
  }
}

class UpdateInstanceProfileResult {
  public ?InstanceProfile $instance_profile;

  public function __construct(shape(
    ?'instance_profile' => ?InstanceProfile,
  ) $s = shape()) {
    $this->instance_profile = $s['instance_profile'] ?? null;
  }
}

class UpdateNetworkProfileRequest {
  public ?AmazonResourceName $arn;
  public ?Message $description;
  public ?Long $downlink_bandwidth_bits;
  public ?Long $downlink_delay_ms;
  public ?Long $downlink_jitter_ms;
  public ?PercentInteger $downlink_loss_percent;
  public ?Name $name;
  public ?NetworkProfileType $type;
  public ?Long $uplink_bandwidth_bits;
  public ?Long $uplink_delay_ms;
  public ?Long $uplink_jitter_ms;
  public ?PercentInteger $uplink_loss_percent;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'description' => ?Message,
    ?'downlink_bandwidth_bits' => ?Long,
    ?'downlink_delay_ms' => ?Long,
    ?'downlink_jitter_ms' => ?Long,
    ?'downlink_loss_percent' => ?PercentInteger,
    ?'name' => ?Name,
    ?'type' => ?NetworkProfileType,
    ?'uplink_bandwidth_bits' => ?Long,
    ?'uplink_delay_ms' => ?Long,
    ?'uplink_jitter_ms' => ?Long,
    ?'uplink_loss_percent' => ?PercentInteger,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->downlink_bandwidth_bits = $s['downlink_bandwidth_bits'] ?? 0;
    $this->downlink_delay_ms = $s['downlink_delay_ms'] ?? 0;
    $this->downlink_jitter_ms = $s['downlink_jitter_ms'] ?? 0;
    $this->downlink_loss_percent = $s['downlink_loss_percent'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->uplink_bandwidth_bits = $s['uplink_bandwidth_bits'] ?? 0;
    $this->uplink_delay_ms = $s['uplink_delay_ms'] ?? 0;
    $this->uplink_jitter_ms = $s['uplink_jitter_ms'] ?? 0;
    $this->uplink_loss_percent = $s['uplink_loss_percent'] ?? 0;
  }
}

class UpdateNetworkProfileResult {
  public ?NetworkProfile $network_profile;

  public function __construct(shape(
    ?'network_profile' => ?NetworkProfile,
  ) $s = shape()) {
    $this->network_profile = $s['network_profile'] ?? null;
  }
}

class UpdateProjectRequest {
  public ?AmazonResourceName $arn;
  public ?JobTimeoutMinutes $default_job_timeout_minutes;
  public ?Name $name;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'default_job_timeout_minutes' => ?JobTimeoutMinutes,
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->default_job_timeout_minutes = $s['default_job_timeout_minutes'] ?? 0;
    $this->name = $s['name'] ?? '';
  }
}

class UpdateProjectResult {
  public ?Project $project;

  public function __construct(shape(
    ?'project' => ?Project,
  ) $s = shape()) {
    $this->project = $s['project'] ?? null;
  }
}

class UpdateTestGridProjectRequest {
  public ?ResourceDescription $description;
  public ?ResourceName $name;
  public ?DeviceFarmArn $project_arn;

  public function __construct(shape(
    ?'description' => ?ResourceDescription,
    ?'name' => ?ResourceName,
    ?'project_arn' => ?DeviceFarmArn,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->project_arn = $s['project_arn'] ?? '';
  }
}

class UpdateTestGridProjectResult {
  public ?TestGridProject $test_grid_project;

  public function __construct(shape(
    ?'test_grid_project' => ?TestGridProject,
  ) $s = shape()) {
    $this->test_grid_project = $s['test_grid_project'] ?? null;
  }
}

class UpdateUploadRequest {
  public ?AmazonResourceName $arn;
  public ?ContentType $content_type;
  public bool $edit_content;
  public ?Name $name;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'content_type' => ?ContentType,
    ?'edit_content' => bool,
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->edit_content = $s['edit_content'] ?? false;
    $this->name = $s['name'] ?? '';
  }
}

class UpdateUploadResult {
  public ?Upload $upload;

  public function __construct(shape(
    ?'upload' => ?Upload,
  ) $s = shape()) {
    $this->upload = $s['upload'] ?? null;
  }
}

class UpdateVPCEConfigurationRequest {
  public ?AmazonResourceName $arn;
  public ?ServiceDnsName $service_dns_name;
  public ?VPCEConfigurationDescription $vpce_configuration_description;
  public ?VPCEConfigurationName $vpce_configuration_name;
  public ?VPCEServiceName $vpce_service_name;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'service_dns_name' => ?ServiceDnsName,
    ?'vpce_configuration_description' => ?VPCEConfigurationDescription,
    ?'vpce_configuration_name' => ?VPCEConfigurationName,
    ?'vpce_service_name' => ?VPCEServiceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->service_dns_name = $s['service_dns_name'] ?? '';
    $this->vpce_configuration_description = $s['vpce_configuration_description'] ?? '';
    $this->vpce_configuration_name = $s['vpce_configuration_name'] ?? '';
    $this->vpce_service_name = $s['vpce_service_name'] ?? '';
  }
}

class UpdateVPCEConfigurationResult {
  public ?VPCEConfiguration $vpce_configuration;

  public function __construct(shape(
    ?'vpce_configuration' => ?VPCEConfiguration,
  ) $s = shape()) {
    $this->vpce_configuration = $s['vpce_configuration'] ?? null;
  }
}

class Upload {
  public ?AmazonResourceName $arn;
  public ?UploadCategory $category;
  public ?ContentType $content_type;
  public ?DateTime $created;
  public ?Message $message;
  public ?Metadata $metadata;
  public ?Name $name;
  public ?UploadStatus $status;
  public ?UploadType $type;
  public ?URL $url;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'category' => ?UploadCategory,
    ?'content_type' => ?ContentType,
    ?'created' => ?DateTime,
    ?'message' => ?Message,
    ?'metadata' => ?Metadata,
    ?'name' => ?Name,
    ?'status' => ?UploadStatus,
    ?'type' => ?UploadType,
    ?'url' => ?URL,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->category = $s['category'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->metadata = $s['metadata'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

type UploadCategory = string;

type UploadStatus = string;

type UploadType = string;

type Uploads = vec<Upload>;

class VPCEConfiguration {
  public ?AmazonResourceName $arn;
  public ?ServiceDnsName $service_dns_name;
  public ?VPCEConfigurationDescription $vpce_configuration_description;
  public ?VPCEConfigurationName $vpce_configuration_name;
  public ?VPCEServiceName $vpce_service_name;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'service_dns_name' => ?ServiceDnsName,
    ?'vpce_configuration_description' => ?VPCEConfigurationDescription,
    ?'vpce_configuration_name' => ?VPCEConfigurationName,
    ?'vpce_service_name' => ?VPCEServiceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->service_dns_name = $s['service_dns_name'] ?? '';
    $this->vpce_configuration_description = $s['vpce_configuration_description'] ?? '';
    $this->vpce_configuration_name = $s['vpce_configuration_name'] ?? '';
    $this->vpce_service_name = $s['vpce_service_name'] ?? '';
  }
}

type VPCEConfigurationDescription = string;

type VPCEConfigurationName = string;

type VPCEConfigurations = vec<VPCEConfiguration>;

type VPCEServiceName = string;

type VideoCapture = bool;

