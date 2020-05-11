<?hh // strict
namespace slack\aws\devicefarm;

interface Device Farm {
  public function CreateDevicePool(CreateDevicePoolRequest): Awaitable<Errors\Result<CreateDevicePoolResult>>;
  public function CreateInstanceProfile(CreateInstanceProfileRequest): Awaitable<Errors\Result<CreateInstanceProfileResult>>;
  public function CreateNetworkProfile(CreateNetworkProfileRequest): Awaitable<Errors\Result<CreateNetworkProfileResult>>;
  public function CreateProject(CreateProjectRequest): Awaitable<Errors\Result<CreateProjectResult>>;
  public function CreateRemoteAccessSession(CreateRemoteAccessSessionRequest): Awaitable<Errors\Result<CreateRemoteAccessSessionResult>>;
  public function CreateTestGridProject(CreateTestGridProjectRequest): Awaitable<Errors\Result<CreateTestGridProjectResult>>;
  public function CreateTestGridUrl(CreateTestGridUrlRequest): Awaitable<Errors\Result<CreateTestGridUrlResult>>;
  public function CreateUpload(CreateUploadRequest): Awaitable<Errors\Result<CreateUploadResult>>;
  public function CreateVPCEConfiguration(CreateVPCEConfigurationRequest): Awaitable<Errors\Result<CreateVPCEConfigurationResult>>;
  public function DeleteDevicePool(DeleteDevicePoolRequest): Awaitable<Errors\Result<DeleteDevicePoolResult>>;
  public function DeleteInstanceProfile(DeleteInstanceProfileRequest): Awaitable<Errors\Result<DeleteInstanceProfileResult>>;
  public function DeleteNetworkProfile(DeleteNetworkProfileRequest): Awaitable<Errors\Result<DeleteNetworkProfileResult>>;
  public function DeleteProject(DeleteProjectRequest): Awaitable<Errors\Result<DeleteProjectResult>>;
  public function DeleteRemoteAccessSession(DeleteRemoteAccessSessionRequest): Awaitable<Errors\Result<DeleteRemoteAccessSessionResult>>;
  public function DeleteRun(DeleteRunRequest): Awaitable<Errors\Result<DeleteRunResult>>;
  public function DeleteTestGridProject(DeleteTestGridProjectRequest): Awaitable<Errors\Result<DeleteTestGridProjectResult>>;
  public function DeleteUpload(DeleteUploadRequest): Awaitable<Errors\Result<DeleteUploadResult>>;
  public function DeleteVPCEConfiguration(DeleteVPCEConfigurationRequest): Awaitable<Errors\Result<DeleteVPCEConfigurationResult>>;
  public function GetAccountSettings(GetAccountSettingsRequest): Awaitable<Errors\Result<GetAccountSettingsResult>>;
  public function GetDevice(GetDeviceRequest): Awaitable<Errors\Result<GetDeviceResult>>;
  public function GetDeviceInstance(GetDeviceInstanceRequest): Awaitable<Errors\Result<GetDeviceInstanceResult>>;
  public function GetDevicePool(GetDevicePoolRequest): Awaitable<Errors\Result<GetDevicePoolResult>>;
  public function GetDevicePoolCompatibility(GetDevicePoolCompatibilityRequest): Awaitable<Errors\Result<GetDevicePoolCompatibilityResult>>;
  public function GetInstanceProfile(GetInstanceProfileRequest): Awaitable<Errors\Result<GetInstanceProfileResult>>;
  public function GetJob(GetJobRequest): Awaitable<Errors\Result<GetJobResult>>;
  public function GetNetworkProfile(GetNetworkProfileRequest): Awaitable<Errors\Result<GetNetworkProfileResult>>;
  public function GetOfferingStatus(GetOfferingStatusRequest): Awaitable<Errors\Result<GetOfferingStatusResult>>;
  public function GetProject(GetProjectRequest): Awaitable<Errors\Result<GetProjectResult>>;
  public function GetRemoteAccessSession(GetRemoteAccessSessionRequest): Awaitable<Errors\Result<GetRemoteAccessSessionResult>>;
  public function GetRun(GetRunRequest): Awaitable<Errors\Result<GetRunResult>>;
  public function GetSuite(GetSuiteRequest): Awaitable<Errors\Result<GetSuiteResult>>;
  public function GetTest(GetTestRequest): Awaitable<Errors\Result<GetTestResult>>;
  public function GetTestGridProject(GetTestGridProjectRequest): Awaitable<Errors\Result<GetTestGridProjectResult>>;
  public function GetTestGridSession(GetTestGridSessionRequest): Awaitable<Errors\Result<GetTestGridSessionResult>>;
  public function GetUpload(GetUploadRequest): Awaitable<Errors\Result<GetUploadResult>>;
  public function GetVPCEConfiguration(GetVPCEConfigurationRequest): Awaitable<Errors\Result<GetVPCEConfigurationResult>>;
  public function InstallToRemoteAccessSession(InstallToRemoteAccessSessionRequest): Awaitable<Errors\Result<InstallToRemoteAccessSessionResult>>;
  public function ListArtifacts(ListArtifactsRequest): Awaitable<Errors\Result<ListArtifactsResult>>;
  public function ListDeviceInstances(ListDeviceInstancesRequest): Awaitable<Errors\Result<ListDeviceInstancesResult>>;
  public function ListDevicePools(ListDevicePoolsRequest): Awaitable<Errors\Result<ListDevicePoolsResult>>;
  public function ListDevices(ListDevicesRequest): Awaitable<Errors\Result<ListDevicesResult>>;
  public function ListInstanceProfiles(ListInstanceProfilesRequest): Awaitable<Errors\Result<ListInstanceProfilesResult>>;
  public function ListJobs(ListJobsRequest): Awaitable<Errors\Result<ListJobsResult>>;
  public function ListNetworkProfiles(ListNetworkProfilesRequest): Awaitable<Errors\Result<ListNetworkProfilesResult>>;
  public function ListOfferingPromotions(ListOfferingPromotionsRequest): Awaitable<Errors\Result<ListOfferingPromotionsResult>>;
  public function ListOfferingTransactions(ListOfferingTransactionsRequest): Awaitable<Errors\Result<ListOfferingTransactionsResult>>;
  public function ListOfferings(ListOfferingsRequest): Awaitable<Errors\Result<ListOfferingsResult>>;
  public function ListProjects(ListProjectsRequest): Awaitable<Errors\Result<ListProjectsResult>>;
  public function ListRemoteAccessSessions(ListRemoteAccessSessionsRequest): Awaitable<Errors\Result<ListRemoteAccessSessionsResult>>;
  public function ListRuns(ListRunsRequest): Awaitable<Errors\Result<ListRunsResult>>;
  public function ListSamples(ListSamplesRequest): Awaitable<Errors\Result<ListSamplesResult>>;
  public function ListSuites(ListSuitesRequest): Awaitable<Errors\Result<ListSuitesResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTestGridProjects(ListTestGridProjectsRequest): Awaitable<Errors\Result<ListTestGridProjectsResult>>;
  public function ListTestGridSessionActions(ListTestGridSessionActionsRequest): Awaitable<Errors\Result<ListTestGridSessionActionsResult>>;
  public function ListTestGridSessionArtifacts(ListTestGridSessionArtifactsRequest): Awaitable<Errors\Result<ListTestGridSessionArtifactsResult>>;
  public function ListTestGridSessions(ListTestGridSessionsRequest): Awaitable<Errors\Result<ListTestGridSessionsResult>>;
  public function ListTests(ListTestsRequest): Awaitable<Errors\Result<ListTestsResult>>;
  public function ListUniqueProblems(ListUniqueProblemsRequest): Awaitable<Errors\Result<ListUniqueProblemsResult>>;
  public function ListUploads(ListUploadsRequest): Awaitable<Errors\Result<ListUploadsResult>>;
  public function ListVPCEConfigurations(ListVPCEConfigurationsRequest): Awaitable<Errors\Result<ListVPCEConfigurationsResult>>;
  public function PurchaseOffering(PurchaseOfferingRequest): Awaitable<Errors\Result<PurchaseOfferingResult>>;
  public function RenewOffering(RenewOfferingRequest): Awaitable<Errors\Result<RenewOfferingResult>>;
  public function ScheduleRun(ScheduleRunRequest): Awaitable<Errors\Result<ScheduleRunResult>>;
  public function StopJob(StopJobRequest): Awaitable<Errors\Result<StopJobResult>>;
  public function StopRemoteAccessSession(StopRemoteAccessSessionRequest): Awaitable<Errors\Result<StopRemoteAccessSessionResult>>;
  public function StopRun(StopRunRequest): Awaitable<Errors\Result<StopRunResult>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateDeviceInstance(UpdateDeviceInstanceRequest): Awaitable<Errors\Result<UpdateDeviceInstanceResult>>;
  public function UpdateDevicePool(UpdateDevicePoolRequest): Awaitable<Errors\Result<UpdateDevicePoolResult>>;
  public function UpdateInstanceProfile(UpdateInstanceProfileRequest): Awaitable<Errors\Result<UpdateInstanceProfileResult>>;
  public function UpdateNetworkProfile(UpdateNetworkProfileRequest): Awaitable<Errors\Result<UpdateNetworkProfileResult>>;
  public function UpdateProject(UpdateProjectRequest): Awaitable<Errors\Result<UpdateProjectResult>>;
  public function UpdateTestGridProject(UpdateTestGridProjectRequest): Awaitable<Errors\Result<UpdateTestGridProjectResult>>;
  public function UpdateUpload(UpdateUploadRequest): Awaitable<Errors\Result<UpdateUploadResult>>;
  public function UpdateVPCEConfiguration(UpdateVPCEConfigurationRequest): Awaitable<Errors\Result<UpdateVPCEConfigurationResult>>;
}

type AWSAccountNumber = string;

class AccountSettings {
  public AWSAccountNumber $aws_account_number;
  public JobTimeoutMinutes $default_job_timeout_minutes;
  public JobTimeoutMinutes $max_job_timeout_minutes;
  public MaxSlotMap $max_slots;
  public SkipAppResign $skip_app_resign;
  public TrialMinutes $trial_minutes;
  public PurchasedDevicesMap $unmetered_devices;
  public PurchasedDevicesMap $unmetered_remote_access_devices;

  public function __construct(shape(
  ?'aws_account_number' => AWSAccountNumber,
  ?'default_job_timeout_minutes' => JobTimeoutMinutes,
  ?'max_job_timeout_minutes' => JobTimeoutMinutes,
  ?'max_slots' => MaxSlotMap,
  ?'skip_app_resign' => SkipAppResign,
  ?'trial_minutes' => TrialMinutes,
  ?'unmetered_devices' => PurchasedDevicesMap,
  ?'unmetered_remote_access_devices' => PurchasedDevicesMap,
  ) $s = shape()) {
    $this->aws_account_number = $aws_account_number ?? "";
    $this->default_job_timeout_minutes = $default_job_timeout_minutes ?? 0;
    $this->max_job_timeout_minutes = $max_job_timeout_minutes ?? 0;
    $this->max_slots = $max_slots ?? [];
    $this->skip_app_resign = $skip_app_resign ?? false;
    $this->trial_minutes = $trial_minutes ?? null;
    $this->unmetered_devices = $unmetered_devices ?? [];
    $this->unmetered_remote_access_devices = $unmetered_remote_access_devices ?? [];
  }
}

type AccountsCleanup = bool;

type AmazonResourceName = string;

type AmazonResourceNames = vec<AmazonResourceName>;

type AndroidPaths = vec<String>;

type AppPackagesCleanup = bool;

class ArgumentException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Artifact {
  public AmazonResourceName $arn;
  public string $extension;
  public Name $name;
  public ArtifactType $type;
  public URL $url;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'extension' => string,
  ?'name' => Name,
  ?'type' => ArtifactType,
  ?'url' => URL,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->extension = $extension ?? "";
    $this->name = $name ?? "";
    $this->type = $type ?? "";
    $this->url = $url ?? "";
  }
}

type ArtifactCategory = string;

type ArtifactType = string;

type Artifacts = vec<Artifact>;

type BillingMethod = string;

type Boolean = bool;

class CPU {
  public string $architecture;
  public Double $clock;
  public string $frequency;

  public function __construct(shape(
  ?'architecture' => string,
  ?'clock' => Double,
  ?'frequency' => string,
  ) $s = shape()) {
    $this->architecture = $architecture ?? "";
    $this->clock = $clock ?? 0.0;
    $this->frequency = $frequency ?? "";
  }
}

class CannotDeleteException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
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
    $this->errored = $errored ?? 0;
    $this->failed = $failed ?? 0;
    $this->passed = $passed ?? 0;
    $this->skipped = $skipped ?? 0;
    $this->stopped = $stopped ?? 0;
    $this->total = $total ?? 0;
    $this->warned = $warned ?? 0;
  }
}

class CreateDevicePoolRequest {
  public Message $description;
  public int $max_devices;
  public Name $name;
  public AmazonResourceName $project_arn;
  public Rules $rules;

  public function __construct(shape(
  ?'description' => Message,
  ?'max_devices' => int,
  ?'name' => Name,
  ?'project_arn' => AmazonResourceName,
  ?'rules' => Rules,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->max_devices = $max_devices ?? 0;
    $this->name = $name ?? "";
    $this->project_arn = $project_arn ?? "";
    $this->rules = $rules ?? [];
  }
}

class CreateDevicePoolResult {
  public DevicePool $device_pool;

  public function __construct(shape(
  ?'device_pool' => DevicePool,
  ) $s = shape()) {
    $this->device_pool = $device_pool ?? null;
  }
}

class CreateInstanceProfileRequest {
  public Message $description;
  public PackageIds $exclude_app_packages_from_cleanup;
  public Name $name;
  public boolean $package_cleanup;
  public boolean $reboot_after_use;

  public function __construct(shape(
  ?'description' => Message,
  ?'exclude_app_packages_from_cleanup' => PackageIds,
  ?'name' => Name,
  ?'package_cleanup' => boolean,
  ?'reboot_after_use' => boolean,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->exclude_app_packages_from_cleanup = $exclude_app_packages_from_cleanup ?? [];
    $this->name = $name ?? "";
    $this->package_cleanup = $package_cleanup ?? false;
    $this->reboot_after_use = $reboot_after_use ?? false;
  }
}

class CreateInstanceProfileResult {
  public InstanceProfile $instance_profile;

  public function __construct(shape(
  ?'instance_profile' => InstanceProfile,
  ) $s = shape()) {
    $this->instance_profile = $instance_profile ?? null;
  }
}

class CreateNetworkProfileRequest {
  public Message $description;
  public Long $downlink_bandwidth_bits;
  public Long $downlink_delay_ms;
  public Long $downlink_jitter_ms;
  public PercentInteger $downlink_loss_percent;
  public Name $name;
  public AmazonResourceName $project_arn;
  public NetworkProfileType $type;
  public Long $uplink_bandwidth_bits;
  public Long $uplink_delay_ms;
  public Long $uplink_jitter_ms;
  public PercentInteger $uplink_loss_percent;

  public function __construct(shape(
  ?'description' => Message,
  ?'downlink_bandwidth_bits' => Long,
  ?'downlink_delay_ms' => Long,
  ?'downlink_jitter_ms' => Long,
  ?'downlink_loss_percent' => PercentInteger,
  ?'name' => Name,
  ?'project_arn' => AmazonResourceName,
  ?'type' => NetworkProfileType,
  ?'uplink_bandwidth_bits' => Long,
  ?'uplink_delay_ms' => Long,
  ?'uplink_jitter_ms' => Long,
  ?'uplink_loss_percent' => PercentInteger,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->downlink_bandwidth_bits = $downlink_bandwidth_bits ?? 0;
    $this->downlink_delay_ms = $downlink_delay_ms ?? 0;
    $this->downlink_jitter_ms = $downlink_jitter_ms ?? 0;
    $this->downlink_loss_percent = $downlink_loss_percent ?? 0;
    $this->name = $name ?? "";
    $this->project_arn = $project_arn ?? "";
    $this->type = $type ?? "";
    $this->uplink_bandwidth_bits = $uplink_bandwidth_bits ?? 0;
    $this->uplink_delay_ms = $uplink_delay_ms ?? 0;
    $this->uplink_jitter_ms = $uplink_jitter_ms ?? 0;
    $this->uplink_loss_percent = $uplink_loss_percent ?? 0;
  }
}

class CreateNetworkProfileResult {
  public NetworkProfile $network_profile;

  public function __construct(shape(
  ?'network_profile' => NetworkProfile,
  ) $s = shape()) {
    $this->network_profile = $network_profile ?? null;
  }
}

class CreateProjectRequest {
  public JobTimeoutMinutes $default_job_timeout_minutes;
  public Name $name;

  public function __construct(shape(
  ?'default_job_timeout_minutes' => JobTimeoutMinutes,
  ?'name' => Name,
  ) $s = shape()) {
    $this->default_job_timeout_minutes = $default_job_timeout_minutes ?? 0;
    $this->name = $name ?? "";
  }
}

class CreateProjectResult {
  public Project $project;

  public function __construct(shape(
  ?'project' => Project,
  ) $s = shape()) {
    $this->project = $project ?? null;
  }
}

class CreateRemoteAccessSessionConfiguration {
  public BillingMethod $billing_method;
  public AmazonResourceNames $vpce_configuration_arns;

  public function __construct(shape(
  ?'billing_method' => BillingMethod,
  ?'vpce_configuration_arns' => AmazonResourceNames,
  ) $s = shape()) {
    $this->billing_method = $billing_method ?? "";
    $this->vpce_configuration_arns = $vpce_configuration_arns ?? [];
  }
}

class CreateRemoteAccessSessionRequest {
  public ClientId $client_id;
  public CreateRemoteAccessSessionConfiguration $configuration;
  public AmazonResourceName $device_arn;
  public AmazonResourceName $instance_arn;
  public InteractionMode $interaction_mode;
  public Name $name;
  public AmazonResourceName $project_arn;
  public boolean $remote_debug_enabled;
  public AmazonResourceName $remote_record_app_arn;
  public boolean $remote_record_enabled;
  public boolean $skip_app_resign;
  public SshPublicKey $ssh_public_key;

  public function __construct(shape(
  ?'client_id' => ClientId,
  ?'configuration' => CreateRemoteAccessSessionConfiguration,
  ?'device_arn' => AmazonResourceName,
  ?'instance_arn' => AmazonResourceName,
  ?'interaction_mode' => InteractionMode,
  ?'name' => Name,
  ?'project_arn' => AmazonResourceName,
  ?'remote_debug_enabled' => boolean,
  ?'remote_record_app_arn' => AmazonResourceName,
  ?'remote_record_enabled' => boolean,
  ?'skip_app_resign' => boolean,
  ?'ssh_public_key' => SshPublicKey,
  ) $s = shape()) {
    $this->client_id = $client_id ?? "";
    $this->configuration = $configuration ?? null;
    $this->device_arn = $device_arn ?? "";
    $this->instance_arn = $instance_arn ?? "";
    $this->interaction_mode = $interaction_mode ?? "";
    $this->name = $name ?? "";
    $this->project_arn = $project_arn ?? "";
    $this->remote_debug_enabled = $remote_debug_enabled ?? false;
    $this->remote_record_app_arn = $remote_record_app_arn ?? "";
    $this->remote_record_enabled = $remote_record_enabled ?? false;
    $this->skip_app_resign = $skip_app_resign ?? false;
    $this->ssh_public_key = $ssh_public_key ?? "";
  }
}

class CreateRemoteAccessSessionResult {
  public RemoteAccessSession $remote_access_session;

  public function __construct(shape(
  ?'remote_access_session' => RemoteAccessSession,
  ) $s = shape()) {
    $this->remote_access_session = $remote_access_session ?? null;
  }
}

class CreateTestGridProjectRequest {
  public ResourceDescription $description;
  public ResourceName $name;

  public function __construct(shape(
  ?'description' => ResourceDescription,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->name = $name ?? "";
  }
}

class CreateTestGridProjectResult {
  public TestGridProject $test_grid_project;

  public function __construct(shape(
  ?'test_grid_project' => TestGridProject,
  ) $s = shape()) {
    $this->test_grid_project = $test_grid_project ?? null;
  }
}

class CreateTestGridUrlRequest {
  public TestGridUrlExpiresInSecondsInput $expires_in_seconds;
  public DeviceFarmArn $project_arn;

  public function __construct(shape(
  ?'expires_in_seconds' => TestGridUrlExpiresInSecondsInput,
  ?'project_arn' => DeviceFarmArn,
  ) $s = shape()) {
    $this->expires_in_seconds = $expires_in_seconds ?? 0;
    $this->project_arn = $project_arn ?? "";
  }
}

class CreateTestGridUrlResult {
  public DateTime $expires;
  public string $url;

  public function __construct(shape(
  ?'expires' => DateTime,
  ?'url' => string,
  ) $s = shape()) {
    $this->expires = $expires ?? 0;
    $this->url = $url ?? "";
  }
}

class CreateUploadRequest {
  public ContentType $content_type;
  public Name $name;
  public AmazonResourceName $project_arn;
  public UploadType $type;

  public function __construct(shape(
  ?'content_type' => ContentType,
  ?'name' => Name,
  ?'project_arn' => AmazonResourceName,
  ?'type' => UploadType,
  ) $s = shape()) {
    $this->content_type = $content_type ?? "";
    $this->name = $name ?? "";
    $this->project_arn = $project_arn ?? "";
    $this->type = $type ?? "";
  }
}

class CreateUploadResult {
  public Upload $upload;

  public function __construct(shape(
  ?'upload' => Upload,
  ) $s = shape()) {
    $this->upload = $upload ?? null;
  }
}

class CreateVPCEConfigurationRequest {
  public ServiceDnsName $service_dns_name;
  public VPCEConfigurationDescription $vpce_configuration_description;
  public VPCEConfigurationName $vpce_configuration_name;
  public VPCEServiceName $vpce_service_name;

  public function __construct(shape(
  ?'service_dns_name' => ServiceDnsName,
  ?'vpce_configuration_description' => VPCEConfigurationDescription,
  ?'vpce_configuration_name' => VPCEConfigurationName,
  ?'vpce_service_name' => VPCEServiceName,
  ) $s = shape()) {
    $this->service_dns_name = $service_dns_name ?? "";
    $this->vpce_configuration_description = $vpce_configuration_description ?? "";
    $this->vpce_configuration_name = $vpce_configuration_name ?? "";
    $this->vpce_service_name = $vpce_service_name ?? "";
  }
}

class CreateVPCEConfigurationResult {
  public VPCEConfiguration $vpce_configuration;

  public function __construct(shape(
  ?'vpce_configuration' => VPCEConfiguration,
  ) $s = shape()) {
    $this->vpce_configuration = $vpce_configuration ?? null;
  }
}

type CurrencyCode = string;

class CustomerArtifactPaths {
  public AndroidPaths $android_paths;
  public DeviceHostPaths $device_host_paths;
  public IosPaths $ios_paths;

  public function __construct(shape(
  ?'android_paths' => AndroidPaths,
  ?'device_host_paths' => DeviceHostPaths,
  ?'ios_paths' => IosPaths,
  ) $s = shape()) {
    $this->android_paths = $android_paths ?? [];
    $this->device_host_paths = $device_host_paths ?? [];
    $this->ios_paths = $ios_paths ?? [];
  }
}

type DateTime = int;

class DeleteDevicePoolRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class DeleteDevicePoolResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteInstanceProfileRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class DeleteInstanceProfileResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteNetworkProfileRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class DeleteNetworkProfileResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteProjectRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class DeleteProjectResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRemoteAccessSessionRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class DeleteRemoteAccessSessionResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRunRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class DeleteRunResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTestGridProjectRequest {
  public DeviceFarmArn $project_arn;

  public function __construct(shape(
  ?'project_arn' => DeviceFarmArn,
  ) $s = shape()) {
    $this->project_arn = $project_arn ?? "";
  }
}

class DeleteTestGridProjectResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteUploadRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class DeleteUploadResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteVPCEConfigurationRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class DeleteVPCEConfigurationResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Device {
  public AmazonResourceName $arn;
  public DeviceAvailability $availability;
  public string $carrier;
  public CPU $cpu;
  public string $fleet_name;
  public string $fleet_type;
  public DeviceFormFactor $form_factor;
  public Long $heap_size;
  public string $image;
  public DeviceInstances $instances;
  public string $manufacturer;
  public Long $memory;
  public string $model;
  public string $model_id;
  public Name $name;
  public string $os;
  public DevicePlatform $platform;
  public string $radio;
  public boolean $remote_access_enabled;
  public boolean $remote_debug_enabled;
  public Resolution $resolution;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'availability' => DeviceAvailability,
  ?'carrier' => string,
  ?'cpu' => CPU,
  ?'fleet_name' => string,
  ?'fleet_type' => string,
  ?'form_factor' => DeviceFormFactor,
  ?'heap_size' => Long,
  ?'image' => string,
  ?'instances' => DeviceInstances,
  ?'manufacturer' => string,
  ?'memory' => Long,
  ?'model' => string,
  ?'model_id' => string,
  ?'name' => Name,
  ?'os' => string,
  ?'platform' => DevicePlatform,
  ?'radio' => string,
  ?'remote_access_enabled' => boolean,
  ?'remote_debug_enabled' => boolean,
  ?'resolution' => Resolution,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->availability = $availability ?? "";
    $this->carrier = $carrier ?? "";
    $this->cpu = $cpu ?? null;
    $this->fleet_name = $fleet_name ?? "";
    $this->fleet_type = $fleet_type ?? "";
    $this->form_factor = $form_factor ?? "";
    $this->heap_size = $heap_size ?? 0;
    $this->image = $image ?? "";
    $this->instances = $instances ?? [];
    $this->manufacturer = $manufacturer ?? "";
    $this->memory = $memory ?? 0;
    $this->model = $model ?? "";
    $this->model_id = $model_id ?? "";
    $this->name = $name ?? "";
    $this->os = $os ?? "";
    $this->platform = $platform ?? "";
    $this->radio = $radio ?? "";
    $this->remote_access_enabled = $remote_access_enabled ?? false;
    $this->remote_debug_enabled = $remote_debug_enabled ?? false;
    $this->resolution = $resolution ?? null;
  }
}

type DeviceAttribute = string;

type DeviceAvailability = string;

type DeviceFarmArn = string;

class DeviceFilter {
  public DeviceFilterAttribute $attribute;
  public RuleOperator $operator;
  public DeviceFilterValues $values;

  public function __construct(shape(
  ?'attribute' => DeviceFilterAttribute,
  ?'operator' => RuleOperator,
  ?'values' => DeviceFilterValues,
  ) $s = shape()) {
    $this->attribute = $attribute ?? "";
    $this->operator = $operator ?? "";
    $this->values = $values ?? [];
  }
}

type DeviceFilterAttribute = string;

type DeviceFilterValues = vec<String>;

type DeviceFilters = vec<DeviceFilter>;

type DeviceFormFactor = string;

type DeviceHostPaths = vec<String>;

class DeviceInstance {
  public AmazonResourceName $arn;
  public AmazonResourceName $device_arn;
  public InstanceProfile $instance_profile;
  public InstanceLabels $labels;
  public InstanceStatus $status;
  public string $udid;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'device_arn' => AmazonResourceName,
  ?'instance_profile' => InstanceProfile,
  ?'labels' => InstanceLabels,
  ?'status' => InstanceStatus,
  ?'udid' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->device_arn = $device_arn ?? "";
    $this->instance_profile = $instance_profile ?? null;
    $this->labels = $labels ?? [];
    $this->status = $status ?? "";
    $this->udid = $udid ?? "";
  }
}

type DeviceInstances = vec<DeviceInstance>;

class DeviceMinutes {
  public Double $metered;
  public Double $total;
  public Double $unmetered;

  public function __construct(shape(
  ?'metered' => Double,
  ?'total' => Double,
  ?'unmetered' => Double,
  ) $s = shape()) {
    $this->metered = $metered ?? 0.0;
    $this->total = $total ?? 0.0;
    $this->unmetered = $unmetered ?? 0.0;
  }
}

type DevicePlatform = string;

class DevicePool {
  public AmazonResourceName $arn;
  public Message $description;
  public int $max_devices;
  public Name $name;
  public Rules $rules;
  public DevicePoolType $type;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'description' => Message,
  ?'max_devices' => int,
  ?'name' => Name,
  ?'rules' => Rules,
  ?'type' => DevicePoolType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->description = $description ?? "";
    $this->max_devices = $max_devices ?? 0;
    $this->name = $name ?? "";
    $this->rules = $rules ?? [];
    $this->type = $type ?? "";
  }
}

class DevicePoolCompatibilityResult {
  public boolean $compatible;
  public Device $device;
  public IncompatibilityMessages $incompatibility_messages;

  public function __construct(shape(
  ?'compatible' => boolean,
  ?'device' => Device,
  ?'incompatibility_messages' => IncompatibilityMessages,
  ) $s = shape()) {
    $this->compatible = $compatible ?? false;
    $this->device = $device ?? null;
    $this->incompatibility_messages = $incompatibility_messages ?? [];
  }
}

type DevicePoolCompatibilityResults = vec<DevicePoolCompatibilityResult>;

type DevicePoolType = string;

type DevicePools = vec<DevicePool>;

class DeviceSelectionConfiguration {
  public DeviceFilters $filters;
  public int $max_devices;

  public function __construct(shape(
  ?'filters' => DeviceFilters,
  ?'max_devices' => int,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_devices = $max_devices ?? 0;
  }
}

class DeviceSelectionResult {
  public DeviceFilters $filters;
  public int $matched_devices_count;
  public int $max_devices;

  public function __construct(shape(
  ?'filters' => DeviceFilters,
  ?'matched_devices_count' => int,
  ?'max_devices' => int,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->matched_devices_count = $matched_devices_count ?? 0;
    $this->max_devices = $max_devices ?? 0;
  }
}

type Devices = vec<Device>;

type Double = float;

type ExceptionMessage = string;

class ExecutionConfiguration {
  public AccountsCleanup $accounts_cleanup;
  public AppPackagesCleanup $app_packages_cleanup;
  public JobTimeoutMinutes $job_timeout_minutes;
  public SkipAppResign $skip_app_resign;
  public VideoCapture $video_capture;

  public function __construct(shape(
  ?'accounts_cleanup' => AccountsCleanup,
  ?'app_packages_cleanup' => AppPackagesCleanup,
  ?'job_timeout_minutes' => JobTimeoutMinutes,
  ?'skip_app_resign' => SkipAppResign,
  ?'video_capture' => VideoCapture,
  ) $s = shape()) {
    $this->accounts_cleanup = $accounts_cleanup ?? false;
    $this->app_packages_cleanup = $app_packages_cleanup ?? false;
    $this->job_timeout_minutes = $job_timeout_minutes ?? 0;
    $this->skip_app_resign = $skip_app_resign ?? false;
    $this->video_capture = $video_capture ?? false;
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
  public AccountSettings $account_settings;

  public function __construct(shape(
  ?'account_settings' => AccountSettings,
  ) $s = shape()) {
    $this->account_settings = $account_settings ?? null;
  }
}

class GetDeviceInstanceRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class GetDeviceInstanceResult {
  public DeviceInstance $device_instance;

  public function __construct(shape(
  ?'device_instance' => DeviceInstance,
  ) $s = shape()) {
    $this->device_instance = $device_instance ?? null;
  }
}

class GetDevicePoolCompatibilityRequest {
  public AmazonResourceName $app_arn;
  public ScheduleRunConfiguration $configuration;
  public AmazonResourceName $device_pool_arn;
  public ScheduleRunTest $test;
  public TestType $test_type;

  public function __construct(shape(
  ?'app_arn' => AmazonResourceName,
  ?'configuration' => ScheduleRunConfiguration,
  ?'device_pool_arn' => AmazonResourceName,
  ?'test' => ScheduleRunTest,
  ?'test_type' => TestType,
  ) $s = shape()) {
    $this->app_arn = $app_arn ?? "";
    $this->configuration = $configuration ?? null;
    $this->device_pool_arn = $device_pool_arn ?? "";
    $this->test = $test ?? null;
    $this->test_type = $test_type ?? "";
  }
}

class GetDevicePoolCompatibilityResult {
  public DevicePoolCompatibilityResults $compatible_devices;
  public DevicePoolCompatibilityResults $incompatible_devices;

  public function __construct(shape(
  ?'compatible_devices' => DevicePoolCompatibilityResults,
  ?'incompatible_devices' => DevicePoolCompatibilityResults,
  ) $s = shape()) {
    $this->compatible_devices = $compatible_devices ?? [];
    $this->incompatible_devices = $incompatible_devices ?? [];
  }
}

class GetDevicePoolRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class GetDevicePoolResult {
  public DevicePool $device_pool;

  public function __construct(shape(
  ?'device_pool' => DevicePool,
  ) $s = shape()) {
    $this->device_pool = $device_pool ?? null;
  }
}

class GetDeviceRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class GetDeviceResult {
  public Device $device;

  public function __construct(shape(
  ?'device' => Device,
  ) $s = shape()) {
    $this->device = $device ?? null;
  }
}

class GetInstanceProfileRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class GetInstanceProfileResult {
  public InstanceProfile $instance_profile;

  public function __construct(shape(
  ?'instance_profile' => InstanceProfile,
  ) $s = shape()) {
    $this->instance_profile = $instance_profile ?? null;
  }
}

class GetJobRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class GetJobResult {
  public Job $job;

  public function __construct(shape(
  ?'job' => Job,
  ) $s = shape()) {
    $this->job = $job ?? null;
  }
}

class GetNetworkProfileRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class GetNetworkProfileResult {
  public NetworkProfile $network_profile;

  public function __construct(shape(
  ?'network_profile' => NetworkProfile,
  ) $s = shape()) {
    $this->network_profile = $network_profile ?? null;
  }
}

class GetOfferingStatusRequest {
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
  }
}

class GetOfferingStatusResult {
  public OfferingStatusMap $current;
  public OfferingStatusMap $next_period;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'current' => OfferingStatusMap,
  ?'next_period' => OfferingStatusMap,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->current = $current ?? [];
    $this->next_period = $next_period ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetProjectRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class GetProjectResult {
  public Project $project;

  public function __construct(shape(
  ?'project' => Project,
  ) $s = shape()) {
    $this->project = $project ?? null;
  }
}

class GetRemoteAccessSessionRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class GetRemoteAccessSessionResult {
  public RemoteAccessSession $remote_access_session;

  public function __construct(shape(
  ?'remote_access_session' => RemoteAccessSession,
  ) $s = shape()) {
    $this->remote_access_session = $remote_access_session ?? null;
  }
}

class GetRunRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class GetRunResult {
  public Run $run;

  public function __construct(shape(
  ?'run' => Run,
  ) $s = shape()) {
    $this->run = $run ?? null;
  }
}

class GetSuiteRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class GetSuiteResult {
  public Suite $suite;

  public function __construct(shape(
  ?'suite' => Suite,
  ) $s = shape()) {
    $this->suite = $suite ?? null;
  }
}

class GetTestGridProjectRequest {
  public DeviceFarmArn $project_arn;

  public function __construct(shape(
  ?'project_arn' => DeviceFarmArn,
  ) $s = shape()) {
    $this->project_arn = $project_arn ?? "";
  }
}

class GetTestGridProjectResult {
  public TestGridProject $test_grid_project;

  public function __construct(shape(
  ?'test_grid_project' => TestGridProject,
  ) $s = shape()) {
    $this->test_grid_project = $test_grid_project ?? null;
  }
}

class GetTestGridSessionRequest {
  public DeviceFarmArn $project_arn;
  public DeviceFarmArn $session_arn;
  public ResourceId $session_id;

  public function __construct(shape(
  ?'project_arn' => DeviceFarmArn,
  ?'session_arn' => DeviceFarmArn,
  ?'session_id' => ResourceId,
  ) $s = shape()) {
    $this->project_arn = $project_arn ?? "";
    $this->session_arn = $session_arn ?? "";
    $this->session_id = $session_id ?? "";
  }
}

class GetTestGridSessionResult {
  public TestGridSession $test_grid_session;

  public function __construct(shape(
  ?'test_grid_session' => TestGridSession,
  ) $s = shape()) {
    $this->test_grid_session = $test_grid_session ?? null;
  }
}

class GetTestRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class GetTestResult {
  public Test $test;

  public function __construct(shape(
  ?'test' => Test,
  ) $s = shape()) {
    $this->test = $test ?? null;
  }
}

class GetUploadRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class GetUploadResult {
  public Upload $upload;

  public function __construct(shape(
  ?'upload' => Upload,
  ) $s = shape()) {
    $this->upload = $upload ?? null;
  }
}

class GetVPCEConfigurationRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class GetVPCEConfigurationResult {
  public VPCEConfiguration $vpce_configuration;

  public function __construct(shape(
  ?'vpce_configuration' => VPCEConfiguration,
  ) $s = shape()) {
    $this->vpce_configuration = $vpce_configuration ?? null;
  }
}

type HostAddress = string;

class IdempotencyException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class IncompatibilityMessage {
  public Message $message;
  public DeviceAttribute $type;

  public function __construct(shape(
  ?'message' => Message,
  ?'type' => DeviceAttribute,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->type = $type ?? "";
  }
}

type IncompatibilityMessages = vec<IncompatibilityMessage>;

class InstallToRemoteAccessSessionRequest {
  public AmazonResourceName $app_arn;
  public AmazonResourceName $remote_access_session_arn;

  public function __construct(shape(
  ?'app_arn' => AmazonResourceName,
  ?'remote_access_session_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->app_arn = $app_arn ?? "";
    $this->remote_access_session_arn = $remote_access_session_arn ?? "";
  }
}

class InstallToRemoteAccessSessionResult {
  public Upload $app_upload;

  public function __construct(shape(
  ?'app_upload' => Upload,
  ) $s = shape()) {
    $this->app_upload = $app_upload ?? null;
  }
}

type InstanceLabels = vec<String>;

class InstanceProfile {
  public AmazonResourceName $arn;
  public Message $description;
  public PackageIds $exclude_app_packages_from_cleanup;
  public Name $name;
  public boolean $package_cleanup;
  public boolean $reboot_after_use;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'description' => Message,
  ?'exclude_app_packages_from_cleanup' => PackageIds,
  ?'name' => Name,
  ?'package_cleanup' => boolean,
  ?'reboot_after_use' => boolean,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->description = $description ?? "";
    $this->exclude_app_packages_from_cleanup = $exclude_app_packages_from_cleanup ?? [];
    $this->name = $name ?? "";
    $this->package_cleanup = $package_cleanup ?? false;
    $this->reboot_after_use = $reboot_after_use ?? false;
  }
}

type InstanceProfiles = vec<InstanceProfile>;

type InstanceStatus = string;

type Integer = int;

type InteractionMode = string;

class InternalServiceException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidOperationException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type IosPaths = vec<String>;

class Job {
  public AmazonResourceName $arn;
  public Counters $counters;
  public DateTime $created;
  public Device $device;
  public DeviceMinutes $device_minutes;
  public AmazonResourceName $instance_arn;
  public Message $message;
  public Name $name;
  public ExecutionResult $result;
  public DateTime $started;
  public ExecutionStatus $status;
  public DateTime $stopped;
  public TestType $type;
  public VideoCapture $video_capture;
  public string $video_endpoint;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'counters' => Counters,
  ?'created' => DateTime,
  ?'device' => Device,
  ?'device_minutes' => DeviceMinutes,
  ?'instance_arn' => AmazonResourceName,
  ?'message' => Message,
  ?'name' => Name,
  ?'result' => ExecutionResult,
  ?'started' => DateTime,
  ?'status' => ExecutionStatus,
  ?'stopped' => DateTime,
  ?'type' => TestType,
  ?'video_capture' => VideoCapture,
  ?'video_endpoint' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->counters = $counters ?? null;
    $this->created = $created ?? 0;
    $this->device = $device ?? null;
    $this->device_minutes = $device_minutes ?? null;
    $this->instance_arn = $instance_arn ?? "";
    $this->message = $message ?? "";
    $this->name = $name ?? "";
    $this->result = $result ?? "";
    $this->started = $started ?? 0;
    $this->status = $status ?? "";
    $this->stopped = $stopped ?? 0;
    $this->type = $type ?? "";
    $this->video_capture = $video_capture ?? false;
    $this->video_endpoint = $video_endpoint ?? "";
  }
}

type JobTimeoutMinutes = int;

type Jobs = vec<Job>;

class LimitExceededException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListArtifactsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
  public ArtifactCategory $type;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'next_token' => PaginationToken,
  ?'type' => ArtifactCategory,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->next_token = $next_token ?? "";
    $this->type = $type ?? "";
  }
}

class ListArtifactsResult {
  public Artifacts $artifacts;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'artifacts' => Artifacts,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->artifacts = $artifacts ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDeviceInstancesRequest {
  public int $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => int,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListDeviceInstancesResult {
  public DeviceInstances $device_instances;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'device_instances' => DeviceInstances,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->device_instances = $device_instances ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDevicePoolsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
  public DevicePoolType $type;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'next_token' => PaginationToken,
  ?'type' => DevicePoolType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->next_token = $next_token ?? "";
    $this->type = $type ?? "";
  }
}

class ListDevicePoolsResult {
  public DevicePools $device_pools;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'device_pools' => DevicePools,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->device_pools = $device_pools ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDevicesRequest {
  public AmazonResourceName $arn;
  public DeviceFilters $filters;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'filters' => DeviceFilters,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->filters = $filters ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDevicesResult {
  public Devices $devices;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'devices' => Devices,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->devices = $devices ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListInstanceProfilesRequest {
  public int $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => int,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListInstanceProfilesResult {
  public InstanceProfiles $instance_profiles;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'instance_profiles' => InstanceProfiles,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->instance_profiles = $instance_profiles ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListJobsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListJobsResult {
  public Jobs $jobs;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'jobs' => Jobs,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->jobs = $jobs ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListNetworkProfilesRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
  public NetworkProfileType $type;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'next_token' => PaginationToken,
  ?'type' => NetworkProfileType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->next_token = $next_token ?? "";
    $this->type = $type ?? "";
  }
}

class ListNetworkProfilesResult {
  public NetworkProfiles $network_profiles;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'network_profiles' => NetworkProfiles,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->network_profiles = $network_profiles ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListOfferingPromotionsRequest {
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
  }
}

class ListOfferingPromotionsResult {
  public PaginationToken $next_token;
  public OfferingPromotions $offering_promotions;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'offering_promotions' => OfferingPromotions,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->offering_promotions = $offering_promotions ?? [];
  }
}

class ListOfferingTransactionsRequest {
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
  }
}

class ListOfferingTransactionsResult {
  public PaginationToken $next_token;
  public OfferingTransactions $offering_transactions;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'offering_transactions' => OfferingTransactions,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->offering_transactions = $offering_transactions ?? [];
  }
}

class ListOfferingsRequest {
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
  }
}

class ListOfferingsResult {
  public PaginationToken $next_token;
  public Offerings $offerings;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'offerings' => Offerings,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->offerings = $offerings ?? [];
  }
}

class ListProjectsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListProjectsResult {
  public PaginationToken $next_token;
  public Projects $projects;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'projects' => Projects,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->projects = $projects ?? [];
  }
}

class ListRemoteAccessSessionsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListRemoteAccessSessionsResult {
  public PaginationToken $next_token;
  public RemoteAccessSessions $remote_access_sessions;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'remote_access_sessions' => RemoteAccessSessions,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->remote_access_sessions = $remote_access_sessions ?? [];
  }
}

class ListRunsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListRunsResult {
  public PaginationToken $next_token;
  public Runs $runs;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'runs' => Runs,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->runs = $runs ?? [];
  }
}

class ListSamplesRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListSamplesResult {
  public PaginationToken $next_token;
  public Samples $samples;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'samples' => Samples,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->samples = $samples ?? [];
  }
}

class ListSuitesRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListSuitesResult {
  public PaginationToken $next_token;
  public Suites $suites;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'suites' => Suites,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->suites = $suites ?? [];
  }
}

class ListTagsForResourceRequest {
  public DeviceFarmArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => DeviceFarmArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class ListTestGridProjectsRequest {
  public MaxPageSize $max_result;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_result' => MaxPageSize,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_result = $max_result ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListTestGridProjectsResult {
  public PaginationToken $next_token;
  public TestGridProjects $test_grid_projects;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'test_grid_projects' => TestGridProjects,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->test_grid_projects = $test_grid_projects ?? [];
  }
}

class ListTestGridSessionActionsRequest {
  public MaxPageSize $max_result;
  public PaginationToken $next_token;
  public DeviceFarmArn $session_arn;

  public function __construct(shape(
  ?'max_result' => MaxPageSize,
  ?'next_token' => PaginationToken,
  ?'session_arn' => DeviceFarmArn,
  ) $s = shape()) {
    $this->max_result = $max_result ?? 0;
    $this->next_token = $next_token ?? "";
    $this->session_arn = $session_arn ?? "";
  }
}

class ListTestGridSessionActionsResult {
  public TestGridSessionActions $actions;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'actions' => TestGridSessionActions,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->actions = $actions ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListTestGridSessionArtifactsRequest {
  public MaxPageSize $max_result;
  public PaginationToken $next_token;
  public DeviceFarmArn $session_arn;
  public TestGridSessionArtifactCategory $type;

  public function __construct(shape(
  ?'max_result' => MaxPageSize,
  ?'next_token' => PaginationToken,
  ?'session_arn' => DeviceFarmArn,
  ?'type' => TestGridSessionArtifactCategory,
  ) $s = shape()) {
    $this->max_result = $max_result ?? 0;
    $this->next_token = $next_token ?? "";
    $this->session_arn = $session_arn ?? "";
    $this->type = $type ?? "";
  }
}

class ListTestGridSessionArtifactsResult {
  public TestGridSessionArtifacts $artifacts;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'artifacts' => TestGridSessionArtifacts,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->artifacts = $artifacts ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListTestGridSessionsRequest {
  public DateTime $creation_time_after;
  public DateTime $creation_time_before;
  public DateTime $end_time_after;
  public DateTime $end_time_before;
  public MaxPageSize $max_result;
  public PaginationToken $next_token;
  public DeviceFarmArn $project_arn;
  public TestGridSessionStatus $status;

  public function __construct(shape(
  ?'creation_time_after' => DateTime,
  ?'creation_time_before' => DateTime,
  ?'end_time_after' => DateTime,
  ?'end_time_before' => DateTime,
  ?'max_result' => MaxPageSize,
  ?'next_token' => PaginationToken,
  ?'project_arn' => DeviceFarmArn,
  ?'status' => TestGridSessionStatus,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? 0;
    $this->creation_time_before = $creation_time_before ?? 0;
    $this->end_time_after = $end_time_after ?? 0;
    $this->end_time_before = $end_time_before ?? 0;
    $this->max_result = $max_result ?? 0;
    $this->next_token = $next_token ?? "";
    $this->project_arn = $project_arn ?? "";
    $this->status = $status ?? "";
  }
}

class ListTestGridSessionsResult {
  public PaginationToken $next_token;
  public TestGridSessions $test_grid_sessions;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'test_grid_sessions' => TestGridSessions,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->test_grid_sessions = $test_grid_sessions ?? [];
  }
}

class ListTestsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListTestsResult {
  public PaginationToken $next_token;
  public Tests $tests;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'tests' => Tests,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tests = $tests ?? [];
  }
}

class ListUniqueProblemsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListUniqueProblemsResult {
  public PaginationToken $next_token;
  public UniqueProblemsByExecutionResultMap $unique_problems;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'unique_problems' => UniqueProblemsByExecutionResultMap,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->unique_problems = $unique_problems ?? [];
  }
}

class ListUploadsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
  public UploadType $type;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'next_token' => PaginationToken,
  ?'type' => UploadType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->next_token = $next_token ?? "";
    $this->type = $type ?? "";
  }
}

class ListUploadsResult {
  public PaginationToken $next_token;
  public Uploads $uploads;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'uploads' => Uploads,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->uploads = $uploads ?? [];
  }
}

class ListVPCEConfigurationsRequest {
  public int $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => int,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListVPCEConfigurationsResult {
  public PaginationToken $next_token;
  public VPCEConfigurations $vpce_configurations;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'vpce_configurations' => VPCEConfigurations,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->vpce_configurations = $vpce_configurations ?? [];
  }
}

class Location {
  public Double $latitude;
  public Double $longitude;

  public function __construct(shape(
  ?'latitude' => Double,
  ?'longitude' => Double,
  ) $s = shape()) {
    $this->latitude = $latitude ?? 0.0;
    $this->longitude = $longitude ?? 0.0;
  }
}

type Long = int;

type MaxPageSize = int;

type MaxSlotMap = dict<String, Integer>;

type Message = string;

type Metadata = string;

class MonetaryAmount {
  public Double $amount;
  public CurrencyCode $currency_code;

  public function __construct(shape(
  ?'amount' => Double,
  ?'currency_code' => CurrencyCode,
  ) $s = shape()) {
    $this->amount = $amount ?? 0.0;
    $this->currency_code = $currency_code ?? "";
  }
}

type Name = string;

class NetworkProfile {
  public AmazonResourceName $arn;
  public Message $description;
  public Long $downlink_bandwidth_bits;
  public Long $downlink_delay_ms;
  public Long $downlink_jitter_ms;
  public PercentInteger $downlink_loss_percent;
  public Name $name;
  public NetworkProfileType $type;
  public Long $uplink_bandwidth_bits;
  public Long $uplink_delay_ms;
  public Long $uplink_jitter_ms;
  public PercentInteger $uplink_loss_percent;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'description' => Message,
  ?'downlink_bandwidth_bits' => Long,
  ?'downlink_delay_ms' => Long,
  ?'downlink_jitter_ms' => Long,
  ?'downlink_loss_percent' => PercentInteger,
  ?'name' => Name,
  ?'type' => NetworkProfileType,
  ?'uplink_bandwidth_bits' => Long,
  ?'uplink_delay_ms' => Long,
  ?'uplink_jitter_ms' => Long,
  ?'uplink_loss_percent' => PercentInteger,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->description = $description ?? "";
    $this->downlink_bandwidth_bits = $downlink_bandwidth_bits ?? 0;
    $this->downlink_delay_ms = $downlink_delay_ms ?? 0;
    $this->downlink_jitter_ms = $downlink_jitter_ms ?? 0;
    $this->downlink_loss_percent = $downlink_loss_percent ?? 0;
    $this->name = $name ?? "";
    $this->type = $type ?? "";
    $this->uplink_bandwidth_bits = $uplink_bandwidth_bits ?? 0;
    $this->uplink_delay_ms = $uplink_delay_ms ?? 0;
    $this->uplink_jitter_ms = $uplink_jitter_ms ?? 0;
    $this->uplink_loss_percent = $uplink_loss_percent ?? 0;
  }
}

type NetworkProfileType = string;

type NetworkProfiles = vec<NetworkProfile>;

class NotEligibleException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class NotFoundException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Offering {
  public Message $description;
  public OfferingIdentifier $id;
  public DevicePlatform $platform;
  public RecurringCharges $recurring_charges;
  public OfferingType $type;

  public function __construct(shape(
  ?'description' => Message,
  ?'id' => OfferingIdentifier,
  ?'platform' => DevicePlatform,
  ?'recurring_charges' => RecurringCharges,
  ?'type' => OfferingType,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->id = $id ?? "";
    $this->platform = $platform ?? "";
    $this->recurring_charges = $recurring_charges ?? [];
    $this->type = $type ?? "";
  }
}

type OfferingIdentifier = string;

class OfferingPromotion {
  public Message $description;
  public OfferingPromotionIdentifier $id;

  public function __construct(shape(
  ?'description' => Message,
  ?'id' => OfferingPromotionIdentifier,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->id = $id ?? "";
  }
}

type OfferingPromotionIdentifier = string;

type OfferingPromotions = vec<OfferingPromotion>;

class OfferingStatus {
  public DateTime $effective_on;
  public Offering $offering;
  public int $quantity;
  public OfferingTransactionType $type;

  public function __construct(shape(
  ?'effective_on' => DateTime,
  ?'offering' => Offering,
  ?'quantity' => int,
  ?'type' => OfferingTransactionType,
  ) $s = shape()) {
    $this->effective_on = $effective_on ?? 0;
    $this->offering = $offering ?? null;
    $this->quantity = $quantity ?? 0;
    $this->type = $type ?? "";
  }
}

type OfferingStatusMap = dict<OfferingIdentifier, OfferingStatus>;

class OfferingTransaction {
  public MonetaryAmount $cost;
  public DateTime $created_on;
  public OfferingPromotionIdentifier $offering_promotion_id;
  public OfferingStatus $offering_status;
  public TransactionIdentifier $transaction_id;

  public function __construct(shape(
  ?'cost' => MonetaryAmount,
  ?'created_on' => DateTime,
  ?'offering_promotion_id' => OfferingPromotionIdentifier,
  ?'offering_status' => OfferingStatus,
  ?'transaction_id' => TransactionIdentifier,
  ) $s = shape()) {
    $this->cost = $cost ?? null;
    $this->created_on = $created_on ?? 0;
    $this->offering_promotion_id = $offering_promotion_id ?? "";
    $this->offering_status = $offering_status ?? null;
    $this->transaction_id = $transaction_id ?? "";
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
  public Device $device;
  public ProblemDetail $job;
  public Message $message;
  public ExecutionResult $result;
  public ProblemDetail $run;
  public ProblemDetail $suite;
  public ProblemDetail $test;

  public function __construct(shape(
  ?'device' => Device,
  ?'job' => ProblemDetail,
  ?'message' => Message,
  ?'result' => ExecutionResult,
  ?'run' => ProblemDetail,
  ?'suite' => ProblemDetail,
  ?'test' => ProblemDetail,
  ) $s = shape()) {
    $this->device = $device ?? null;
    $this->job = $job ?? null;
    $this->message = $message ?? "";
    $this->result = $result ?? "";
    $this->run = $run ?? null;
    $this->suite = $suite ?? null;
    $this->test = $test ?? null;
  }
}

class ProblemDetail {
  public AmazonResourceName $arn;
  public Name $name;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'name' => Name,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
  }
}

type Problems = vec<Problem>;

class Project {
  public AmazonResourceName $arn;
  public DateTime $created;
  public JobTimeoutMinutes $default_job_timeout_minutes;
  public Name $name;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'created' => DateTime,
  ?'default_job_timeout_minutes' => JobTimeoutMinutes,
  ?'name' => Name,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created = $created ?? 0;
    $this->default_job_timeout_minutes = $default_job_timeout_minutes ?? 0;
    $this->name = $name ?? "";
  }
}

type Projects = vec<Project>;

class PurchaseOfferingRequest {
  public OfferingIdentifier $offering_id;
  public OfferingPromotionIdentifier $offering_promotion_id;
  public int $quantity;

  public function __construct(shape(
  ?'offering_id' => OfferingIdentifier,
  ?'offering_promotion_id' => OfferingPromotionIdentifier,
  ?'quantity' => int,
  ) $s = shape()) {
    $this->offering_id = $offering_id ?? "";
    $this->offering_promotion_id = $offering_promotion_id ?? "";
    $this->quantity = $quantity ?? 0;
  }
}

class PurchaseOfferingResult {
  public OfferingTransaction $offering_transaction;

  public function __construct(shape(
  ?'offering_transaction' => OfferingTransaction,
  ) $s = shape()) {
    $this->offering_transaction = $offering_transaction ?? null;
  }
}

type PurchasedDevicesMap = dict<DevicePlatform, Integer>;

class Radios {
  public boolean $bluetooth;
  public boolean $gps;
  public boolean $nfc;
  public boolean $wifi;

  public function __construct(shape(
  ?'bluetooth' => boolean,
  ?'gps' => boolean,
  ?'nfc' => boolean,
  ?'wifi' => boolean,
  ) $s = shape()) {
    $this->bluetooth = $bluetooth ?? false;
    $this->gps = $gps ?? false;
    $this->nfc = $nfc ?? false;
    $this->wifi = $wifi ?? false;
  }
}

class RecurringCharge {
  public MonetaryAmount $cost;
  public RecurringChargeFrequency $frequency;

  public function __construct(shape(
  ?'cost' => MonetaryAmount,
  ?'frequency' => RecurringChargeFrequency,
  ) $s = shape()) {
    $this->cost = $cost ?? null;
    $this->frequency = $frequency ?? "";
  }
}

type RecurringChargeFrequency = string;

type RecurringCharges = vec<RecurringCharge>;

class RemoteAccessSession {
  public AmazonResourceName $arn;
  public BillingMethod $billing_method;
  public ClientId $client_id;
  public DateTime $created;
  public Device $device;
  public DeviceMinutes $device_minutes;
  public string $device_udid;
  public string $endpoint;
  public HostAddress $host_address;
  public AmazonResourceName $instance_arn;
  public InteractionMode $interaction_mode;
  public Message $message;
  public Name $name;
  public boolean $remote_debug_enabled;
  public AmazonResourceName $remote_record_app_arn;
  public boolean $remote_record_enabled;
  public ExecutionResult $result;
  public SkipAppResign $skip_app_resign;
  public DateTime $started;
  public ExecutionStatus $status;
  public DateTime $stopped;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'billing_method' => BillingMethod,
  ?'client_id' => ClientId,
  ?'created' => DateTime,
  ?'device' => Device,
  ?'device_minutes' => DeviceMinutes,
  ?'device_udid' => string,
  ?'endpoint' => string,
  ?'host_address' => HostAddress,
  ?'instance_arn' => AmazonResourceName,
  ?'interaction_mode' => InteractionMode,
  ?'message' => Message,
  ?'name' => Name,
  ?'remote_debug_enabled' => boolean,
  ?'remote_record_app_arn' => AmazonResourceName,
  ?'remote_record_enabled' => boolean,
  ?'result' => ExecutionResult,
  ?'skip_app_resign' => SkipAppResign,
  ?'started' => DateTime,
  ?'status' => ExecutionStatus,
  ?'stopped' => DateTime,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->billing_method = $billing_method ?? "";
    $this->client_id = $client_id ?? "";
    $this->created = $created ?? 0;
    $this->device = $device ?? null;
    $this->device_minutes = $device_minutes ?? null;
    $this->device_udid = $device_udid ?? "";
    $this->endpoint = $endpoint ?? "";
    $this->host_address = $host_address ?? "";
    $this->instance_arn = $instance_arn ?? "";
    $this->interaction_mode = $interaction_mode ?? "";
    $this->message = $message ?? "";
    $this->name = $name ?? "";
    $this->remote_debug_enabled = $remote_debug_enabled ?? false;
    $this->remote_record_app_arn = $remote_record_app_arn ?? "";
    $this->remote_record_enabled = $remote_record_enabled ?? false;
    $this->result = $result ?? "";
    $this->skip_app_resign = $skip_app_resign ?? false;
    $this->started = $started ?? 0;
    $this->status = $status ?? "";
    $this->stopped = $stopped ?? 0;
  }
}

type RemoteAccessSessions = vec<RemoteAccessSession>;

class RenewOfferingRequest {
  public OfferingIdentifier $offering_id;
  public int $quantity;

  public function __construct(shape(
  ?'offering_id' => OfferingIdentifier,
  ?'quantity' => int,
  ) $s = shape()) {
    $this->offering_id = $offering_id ?? "";
    $this->quantity = $quantity ?? 0;
  }
}

class RenewOfferingResult {
  public OfferingTransaction $offering_transaction;

  public function __construct(shape(
  ?'offering_transaction' => OfferingTransaction,
  ) $s = shape()) {
    $this->offering_transaction = $offering_transaction ?? null;
  }
}

class Resolution {
  public int $height;
  public int $width;

  public function __construct(shape(
  ?'height' => int,
  ?'width' => int,
  ) $s = shape()) {
    $this->height = $height ?? 0;
    $this->width = $width ?? 0;
  }
}

type ResourceDescription = string;

type ResourceId = string;

type ResourceName = string;

class Rule {
  public DeviceAttribute $attribute;
  public RuleOperator $operator;
  public string $value;

  public function __construct(shape(
  ?'attribute' => DeviceAttribute,
  ?'operator' => RuleOperator,
  ?'value' => string,
  ) $s = shape()) {
    $this->attribute = $attribute ?? "";
    $this->operator = $operator ?? "";
    $this->value = $value ?? "";
  }
}

type RuleOperator = string;

type Rules = vec<Rule>;

class Run {
  public AmazonResourceName $app_upload;
  public AmazonResourceName $arn;
  public BillingMethod $billing_method;
  public int $completed_jobs;
  public Counters $counters;
  public DateTime $created;
  public CustomerArtifactPaths $customer_artifact_paths;
  public DeviceMinutes $device_minutes;
  public AmazonResourceName $device_pool_arn;
  public DeviceSelectionResult $device_selection_result;
  public int $event_count;
  public JobTimeoutMinutes $job_timeout_minutes;
  public string $locale;
  public Location $location;
  public Message $message;
  public Name $name;
  public NetworkProfile $network_profile;
  public string $parsing_result_url;
  public DevicePlatform $platform;
  public Radios $radios;
  public ExecutionResult $result;
  public ExecutionResultCode $result_code;
  public int $seed;
  public SkipAppResign $skip_app_resign;
  public DateTime $started;
  public ExecutionStatus $status;
  public DateTime $stopped;
  public AmazonResourceName $test_spec_arn;
  public int $total_jobs;
  public TestType $type;
  public string $web_url;

  public function __construct(shape(
  ?'app_upload' => AmazonResourceName,
  ?'arn' => AmazonResourceName,
  ?'billing_method' => BillingMethod,
  ?'completed_jobs' => int,
  ?'counters' => Counters,
  ?'created' => DateTime,
  ?'customer_artifact_paths' => CustomerArtifactPaths,
  ?'device_minutes' => DeviceMinutes,
  ?'device_pool_arn' => AmazonResourceName,
  ?'device_selection_result' => DeviceSelectionResult,
  ?'event_count' => int,
  ?'job_timeout_minutes' => JobTimeoutMinutes,
  ?'locale' => string,
  ?'location' => Location,
  ?'message' => Message,
  ?'name' => Name,
  ?'network_profile' => NetworkProfile,
  ?'parsing_result_url' => string,
  ?'platform' => DevicePlatform,
  ?'radios' => Radios,
  ?'result' => ExecutionResult,
  ?'result_code' => ExecutionResultCode,
  ?'seed' => int,
  ?'skip_app_resign' => SkipAppResign,
  ?'started' => DateTime,
  ?'status' => ExecutionStatus,
  ?'stopped' => DateTime,
  ?'test_spec_arn' => AmazonResourceName,
  ?'total_jobs' => int,
  ?'type' => TestType,
  ?'web_url' => string,
  ) $s = shape()) {
    $this->app_upload = $app_upload ?? "";
    $this->arn = $arn ?? "";
    $this->billing_method = $billing_method ?? "";
    $this->completed_jobs = $completed_jobs ?? 0;
    $this->counters = $counters ?? null;
    $this->created = $created ?? 0;
    $this->customer_artifact_paths = $customer_artifact_paths ?? null;
    $this->device_minutes = $device_minutes ?? null;
    $this->device_pool_arn = $device_pool_arn ?? "";
    $this->device_selection_result = $device_selection_result ?? null;
    $this->event_count = $event_count ?? 0;
    $this->job_timeout_minutes = $job_timeout_minutes ?? 0;
    $this->locale = $locale ?? "";
    $this->location = $location ?? null;
    $this->message = $message ?? "";
    $this->name = $name ?? "";
    $this->network_profile = $network_profile ?? null;
    $this->parsing_result_url = $parsing_result_url ?? "";
    $this->platform = $platform ?? "";
    $this->radios = $radios ?? null;
    $this->result = $result ?? "";
    $this->result_code = $result_code ?? "";
    $this->seed = $seed ?? 0;
    $this->skip_app_resign = $skip_app_resign ?? false;
    $this->started = $started ?? 0;
    $this->status = $status ?? "";
    $this->stopped = $stopped ?? 0;
    $this->test_spec_arn = $test_spec_arn ?? "";
    $this->total_jobs = $total_jobs ?? 0;
    $this->type = $type ?? "";
    $this->web_url = $web_url ?? "";
  }
}

type Runs = vec<Run>;

class Sample {
  public AmazonResourceName $arn;
  public SampleType $type;
  public URL $url;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'type' => SampleType,
  ?'url' => URL,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->type = $type ?? "";
    $this->url = $url ?? "";
  }
}

type SampleType = string;

type Samples = vec<Sample>;

class ScheduleRunConfiguration {
  public AmazonResourceNames $auxiliary_apps;
  public BillingMethod $billing_method;
  public CustomerArtifactPaths $customer_artifact_paths;
  public AmazonResourceName $extra_data_package_arn;
  public string $locale;
  public Location $location;
  public AmazonResourceName $network_profile_arn;
  public Radios $radios;
  public AmazonResourceNames $vpce_configuration_arns;

  public function __construct(shape(
  ?'auxiliary_apps' => AmazonResourceNames,
  ?'billing_method' => BillingMethod,
  ?'customer_artifact_paths' => CustomerArtifactPaths,
  ?'extra_data_package_arn' => AmazonResourceName,
  ?'locale' => string,
  ?'location' => Location,
  ?'network_profile_arn' => AmazonResourceName,
  ?'radios' => Radios,
  ?'vpce_configuration_arns' => AmazonResourceNames,
  ) $s = shape()) {
    $this->auxiliary_apps = $auxiliary_apps ?? [];
    $this->billing_method = $billing_method ?? "";
    $this->customer_artifact_paths = $customer_artifact_paths ?? null;
    $this->extra_data_package_arn = $extra_data_package_arn ?? "";
    $this->locale = $locale ?? "";
    $this->location = $location ?? null;
    $this->network_profile_arn = $network_profile_arn ?? "";
    $this->radios = $radios ?? null;
    $this->vpce_configuration_arns = $vpce_configuration_arns ?? [];
  }
}

class ScheduleRunRequest {
  public AmazonResourceName $app_arn;
  public ScheduleRunConfiguration $configuration;
  public AmazonResourceName $device_pool_arn;
  public DeviceSelectionConfiguration $device_selection_configuration;
  public ExecutionConfiguration $execution_configuration;
  public Name $name;
  public AmazonResourceName $project_arn;
  public ScheduleRunTest $test;

  public function __construct(shape(
  ?'app_arn' => AmazonResourceName,
  ?'configuration' => ScheduleRunConfiguration,
  ?'device_pool_arn' => AmazonResourceName,
  ?'device_selection_configuration' => DeviceSelectionConfiguration,
  ?'execution_configuration' => ExecutionConfiguration,
  ?'name' => Name,
  ?'project_arn' => AmazonResourceName,
  ?'test' => ScheduleRunTest,
  ) $s = shape()) {
    $this->app_arn = $app_arn ?? "";
    $this->configuration = $configuration ?? null;
    $this->device_pool_arn = $device_pool_arn ?? "";
    $this->device_selection_configuration = $device_selection_configuration ?? null;
    $this->execution_configuration = $execution_configuration ?? null;
    $this->name = $name ?? "";
    $this->project_arn = $project_arn ?? "";
    $this->test = $test ?? null;
  }
}

class ScheduleRunResult {
  public Run $run;

  public function __construct(shape(
  ?'run' => Run,
  ) $s = shape()) {
    $this->run = $run ?? null;
  }
}

class ScheduleRunTest {
  public Filter $filter;
  public TestParameters $parameters;
  public AmazonResourceName $test_package_arn;
  public AmazonResourceName $test_spec_arn;
  public TestType $type;

  public function __construct(shape(
  ?'filter' => Filter,
  ?'parameters' => TestParameters,
  ?'test_package_arn' => AmazonResourceName,
  ?'test_spec_arn' => AmazonResourceName,
  ?'type' => TestType,
  ) $s = shape()) {
    $this->filter = $filter ?? "";
    $this->parameters = $parameters ?? [];
    $this->test_package_arn = $test_package_arn ?? "";
    $this->test_spec_arn = $test_spec_arn ?? "";
    $this->type = $type ?? "";
  }
}

class ServiceAccountException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ServiceDnsName = string;

type SkipAppResign = bool;

type SshPublicKey = string;

class StopJobRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class StopJobResult {
  public Job $job;

  public function __construct(shape(
  ?'job' => Job,
  ) $s = shape()) {
    $this->job = $job ?? null;
  }
}

class StopRemoteAccessSessionRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class StopRemoteAccessSessionResult {
  public RemoteAccessSession $remote_access_session;

  public function __construct(shape(
  ?'remote_access_session' => RemoteAccessSession,
  ) $s = shape()) {
    $this->remote_access_session = $remote_access_session ?? null;
  }
}

class StopRunRequest {
  public AmazonResourceName $arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class StopRunResult {
  public Run $run;

  public function __construct(shape(
  ?'run' => Run,
  ) $s = shape()) {
    $this->run = $run ?? null;
  }
}

type String = string;

class Suite {
  public AmazonResourceName $arn;
  public Counters $counters;
  public DateTime $created;
  public DeviceMinutes $device_minutes;
  public Message $message;
  public Name $name;
  public ExecutionResult $result;
  public DateTime $started;
  public ExecutionStatus $status;
  public DateTime $stopped;
  public TestType $type;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'counters' => Counters,
  ?'created' => DateTime,
  ?'device_minutes' => DeviceMinutes,
  ?'message' => Message,
  ?'name' => Name,
  ?'result' => ExecutionResult,
  ?'started' => DateTime,
  ?'status' => ExecutionStatus,
  ?'stopped' => DateTime,
  ?'type' => TestType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->counters = $counters ?? null;
    $this->created = $created ?? 0;
    $this->device_minutes = $device_minutes ?? null;
    $this->message = $message ?? "";
    $this->name = $name ?? "";
    $this->result = $result ?? "";
    $this->started = $started ?? 0;
    $this->status = $status ?? "";
    $this->stopped = $stopped ?? 0;
    $this->type = $type ?? "";
  }
}

type Suites = vec<Suite>;

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

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagOperationException {
  public ExceptionMessage $message;
  public AmazonResourceName $resource_name;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ?'resource_name' => AmazonResourceName,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource_name = $resource_name ?? "";
  }
}

class TagPolicyException {
  public ExceptionMessage $message;
  public AmazonResourceName $resource_name;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ?'resource_name' => AmazonResourceName,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource_name = $resource_name ?? "";
  }
}

class TagResourceRequest {
  public DeviceFarmArn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => DeviceFarmArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class Test {
  public AmazonResourceName $arn;
  public Counters $counters;
  public DateTime $created;
  public DeviceMinutes $device_minutes;
  public Message $message;
  public Name $name;
  public ExecutionResult $result;
  public DateTime $started;
  public ExecutionStatus $status;
  public DateTime $stopped;
  public TestType $type;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'counters' => Counters,
  ?'created' => DateTime,
  ?'device_minutes' => DeviceMinutes,
  ?'message' => Message,
  ?'name' => Name,
  ?'result' => ExecutionResult,
  ?'started' => DateTime,
  ?'status' => ExecutionStatus,
  ?'stopped' => DateTime,
  ?'type' => TestType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->counters = $counters ?? null;
    $this->created = $created ?? 0;
    $this->device_minutes = $device_minutes ?? null;
    $this->message = $message ?? "";
    $this->name = $name ?? "";
    $this->result = $result ?? "";
    $this->started = $started ?? 0;
    $this->status = $status ?? "";
    $this->stopped = $stopped ?? 0;
    $this->type = $type ?? "";
  }
}

class TestGridProject {
  public DeviceFarmArn $arn;
  public DateTime $created;
  public string $description;
  public string $name;

  public function __construct(shape(
  ?'arn' => DeviceFarmArn,
  ?'created' => DateTime,
  ?'description' => string,
  ?'name' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created = $created ?? 0;
    $this->description = $description ?? "";
    $this->name = $name ?? "";
  }
}

type TestGridProjects = vec<TestGridProject>;

class TestGridSession {
  public DeviceFarmArn $arn;
  public Double $billing_minutes;
  public DateTime $created;
  public DateTime $ended;
  public string $selenium_properties;
  public TestGridSessionStatus $status;

  public function __construct(shape(
  ?'arn' => DeviceFarmArn,
  ?'billing_minutes' => Double,
  ?'created' => DateTime,
  ?'ended' => DateTime,
  ?'selenium_properties' => string,
  ?'status' => TestGridSessionStatus,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->billing_minutes = $billing_minutes ?? 0.0;
    $this->created = $created ?? 0;
    $this->ended = $ended ?? 0;
    $this->selenium_properties = $selenium_properties ?? "";
    $this->status = $status ?? "";
  }
}

class TestGridSessionAction {
  public string $action;
  public Long $duration;
  public string $request_method;
  public DateTime $started;
  public string $status_code;

  public function __construct(shape(
  ?'action' => string,
  ?'duration' => Long,
  ?'request_method' => string,
  ?'started' => DateTime,
  ?'status_code' => string,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->duration = $duration ?? 0;
    $this->request_method = $request_method ?? "";
    $this->started = $started ?? 0;
    $this->status_code = $status_code ?? "";
  }
}

type TestGridSessionActions = vec<TestGridSessionAction>;

class TestGridSessionArtifact {
  public string $filename;
  public TestGridSessionArtifactType $type;
  public string $url;

  public function __construct(shape(
  ?'filename' => string,
  ?'type' => TestGridSessionArtifactType,
  ?'url' => string,
  ) $s = shape()) {
    $this->filename = $filename ?? "";
    $this->type = $type ?? "";
    $this->url = $url ?? "";
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
  public ExceptionMessage $message;
  public AmazonResourceName $resource_name;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ?'resource_name' => AmazonResourceName,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource_name = $resource_name ?? "";
  }
}

type TransactionIdentifier = string;

class TrialMinutes {
  public Double $remaining;
  public Double $total;

  public function __construct(shape(
  ?'remaining' => Double,
  ?'total' => Double,
  ) $s = shape()) {
    $this->remaining = $remaining ?? 0.0;
    $this->total = $total ?? 0.0;
  }
}

type URL = string;

class UniqueProblem {
  public Message $message;
  public Problems $problems;

  public function __construct(shape(
  ?'message' => Message,
  ?'problems' => Problems,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->problems = $problems ?? [];
  }
}

type UniqueProblems = vec<UniqueProblem>;

type UniqueProblemsByExecutionResultMap = dict<ExecutionResult, UniqueProblems>;

class UntagResourceRequest {
  public DeviceFarmArn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => DeviceFarmArn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDeviceInstanceRequest {
  public AmazonResourceName $arn;
  public InstanceLabels $labels;
  public AmazonResourceName $profile_arn;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'labels' => InstanceLabels,
  ?'profile_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->labels = $labels ?? [];
    $this->profile_arn = $profile_arn ?? "";
  }
}

class UpdateDeviceInstanceResult {
  public DeviceInstance $device_instance;

  public function __construct(shape(
  ?'device_instance' => DeviceInstance,
  ) $s = shape()) {
    $this->device_instance = $device_instance ?? null;
  }
}

class UpdateDevicePoolRequest {
  public AmazonResourceName $arn;
  public boolean $clear_max_devices;
  public Message $description;
  public int $max_devices;
  public Name $name;
  public Rules $rules;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'clear_max_devices' => boolean,
  ?'description' => Message,
  ?'max_devices' => int,
  ?'name' => Name,
  ?'rules' => Rules,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->clear_max_devices = $clear_max_devices ?? false;
    $this->description = $description ?? "";
    $this->max_devices = $max_devices ?? 0;
    $this->name = $name ?? "";
    $this->rules = $rules ?? [];
  }
}

class UpdateDevicePoolResult {
  public DevicePool $device_pool;

  public function __construct(shape(
  ?'device_pool' => DevicePool,
  ) $s = shape()) {
    $this->device_pool = $device_pool ?? null;
  }
}

class UpdateInstanceProfileRequest {
  public AmazonResourceName $arn;
  public Message $description;
  public PackageIds $exclude_app_packages_from_cleanup;
  public Name $name;
  public boolean $package_cleanup;
  public boolean $reboot_after_use;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'description' => Message,
  ?'exclude_app_packages_from_cleanup' => PackageIds,
  ?'name' => Name,
  ?'package_cleanup' => boolean,
  ?'reboot_after_use' => boolean,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->description = $description ?? "";
    $this->exclude_app_packages_from_cleanup = $exclude_app_packages_from_cleanup ?? [];
    $this->name = $name ?? "";
    $this->package_cleanup = $package_cleanup ?? false;
    $this->reboot_after_use = $reboot_after_use ?? false;
  }
}

class UpdateInstanceProfileResult {
  public InstanceProfile $instance_profile;

  public function __construct(shape(
  ?'instance_profile' => InstanceProfile,
  ) $s = shape()) {
    $this->instance_profile = $instance_profile ?? null;
  }
}

class UpdateNetworkProfileRequest {
  public AmazonResourceName $arn;
  public Message $description;
  public Long $downlink_bandwidth_bits;
  public Long $downlink_delay_ms;
  public Long $downlink_jitter_ms;
  public PercentInteger $downlink_loss_percent;
  public Name $name;
  public NetworkProfileType $type;
  public Long $uplink_bandwidth_bits;
  public Long $uplink_delay_ms;
  public Long $uplink_jitter_ms;
  public PercentInteger $uplink_loss_percent;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'description' => Message,
  ?'downlink_bandwidth_bits' => Long,
  ?'downlink_delay_ms' => Long,
  ?'downlink_jitter_ms' => Long,
  ?'downlink_loss_percent' => PercentInteger,
  ?'name' => Name,
  ?'type' => NetworkProfileType,
  ?'uplink_bandwidth_bits' => Long,
  ?'uplink_delay_ms' => Long,
  ?'uplink_jitter_ms' => Long,
  ?'uplink_loss_percent' => PercentInteger,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->description = $description ?? "";
    $this->downlink_bandwidth_bits = $downlink_bandwidth_bits ?? 0;
    $this->downlink_delay_ms = $downlink_delay_ms ?? 0;
    $this->downlink_jitter_ms = $downlink_jitter_ms ?? 0;
    $this->downlink_loss_percent = $downlink_loss_percent ?? 0;
    $this->name = $name ?? "";
    $this->type = $type ?? "";
    $this->uplink_bandwidth_bits = $uplink_bandwidth_bits ?? 0;
    $this->uplink_delay_ms = $uplink_delay_ms ?? 0;
    $this->uplink_jitter_ms = $uplink_jitter_ms ?? 0;
    $this->uplink_loss_percent = $uplink_loss_percent ?? 0;
  }
}

class UpdateNetworkProfileResult {
  public NetworkProfile $network_profile;

  public function __construct(shape(
  ?'network_profile' => NetworkProfile,
  ) $s = shape()) {
    $this->network_profile = $network_profile ?? null;
  }
}

class UpdateProjectRequest {
  public AmazonResourceName $arn;
  public JobTimeoutMinutes $default_job_timeout_minutes;
  public Name $name;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'default_job_timeout_minutes' => JobTimeoutMinutes,
  ?'name' => Name,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->default_job_timeout_minutes = $default_job_timeout_minutes ?? 0;
    $this->name = $name ?? "";
  }
}

class UpdateProjectResult {
  public Project $project;

  public function __construct(shape(
  ?'project' => Project,
  ) $s = shape()) {
    $this->project = $project ?? null;
  }
}

class UpdateTestGridProjectRequest {
  public ResourceDescription $description;
  public ResourceName $name;
  public DeviceFarmArn $project_arn;

  public function __construct(shape(
  ?'description' => ResourceDescription,
  ?'name' => ResourceName,
  ?'project_arn' => DeviceFarmArn,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->project_arn = $project_arn ?? "";
  }
}

class UpdateTestGridProjectResult {
  public TestGridProject $test_grid_project;

  public function __construct(shape(
  ?'test_grid_project' => TestGridProject,
  ) $s = shape()) {
    $this->test_grid_project = $test_grid_project ?? null;
  }
}

class UpdateUploadRequest {
  public AmazonResourceName $arn;
  public ContentType $content_type;
  public boolean $edit_content;
  public Name $name;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'content_type' => ContentType,
  ?'edit_content' => boolean,
  ?'name' => Name,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->content_type = $content_type ?? "";
    $this->edit_content = $edit_content ?? false;
    $this->name = $name ?? "";
  }
}

class UpdateUploadResult {
  public Upload $upload;

  public function __construct(shape(
  ?'upload' => Upload,
  ) $s = shape()) {
    $this->upload = $upload ?? null;
  }
}

class UpdateVPCEConfigurationRequest {
  public AmazonResourceName $arn;
  public ServiceDnsName $service_dns_name;
  public VPCEConfigurationDescription $vpce_configuration_description;
  public VPCEConfigurationName $vpce_configuration_name;
  public VPCEServiceName $vpce_service_name;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'service_dns_name' => ServiceDnsName,
  ?'vpce_configuration_description' => VPCEConfigurationDescription,
  ?'vpce_configuration_name' => VPCEConfigurationName,
  ?'vpce_service_name' => VPCEServiceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->service_dns_name = $service_dns_name ?? "";
    $this->vpce_configuration_description = $vpce_configuration_description ?? "";
    $this->vpce_configuration_name = $vpce_configuration_name ?? "";
    $this->vpce_service_name = $vpce_service_name ?? "";
  }
}

class UpdateVPCEConfigurationResult {
  public VPCEConfiguration $vpce_configuration;

  public function __construct(shape(
  ?'vpce_configuration' => VPCEConfiguration,
  ) $s = shape()) {
    $this->vpce_configuration = $vpce_configuration ?? null;
  }
}

class Upload {
  public AmazonResourceName $arn;
  public UploadCategory $category;
  public ContentType $content_type;
  public DateTime $created;
  public Message $message;
  public Metadata $metadata;
  public Name $name;
  public UploadStatus $status;
  public UploadType $type;
  public URL $url;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'category' => UploadCategory,
  ?'content_type' => ContentType,
  ?'created' => DateTime,
  ?'message' => Message,
  ?'metadata' => Metadata,
  ?'name' => Name,
  ?'status' => UploadStatus,
  ?'type' => UploadType,
  ?'url' => URL,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->category = $category ?? "";
    $this->content_type = $content_type ?? "";
    $this->created = $created ?? 0;
    $this->message = $message ?? "";
    $this->metadata = $metadata ?? "";
    $this->name = $name ?? "";
    $this->status = $status ?? "";
    $this->type = $type ?? "";
    $this->url = $url ?? "";
  }
}

type UploadCategory = string;

type UploadStatus = string;

type UploadType = string;

type Uploads = vec<Upload>;

class VPCEConfiguration {
  public AmazonResourceName $arn;
  public ServiceDnsName $service_dns_name;
  public VPCEConfigurationDescription $vpce_configuration_description;
  public VPCEConfigurationName $vpce_configuration_name;
  public VPCEServiceName $vpce_service_name;

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'service_dns_name' => ServiceDnsName,
  ?'vpce_configuration_description' => VPCEConfigurationDescription,
  ?'vpce_configuration_name' => VPCEConfigurationName,
  ?'vpce_service_name' => VPCEServiceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->service_dns_name = $service_dns_name ?? "";
    $this->vpce_configuration_description = $vpce_configuration_description ?? "";
    $this->vpce_configuration_name = $vpce_configuration_name ?? "";
    $this->vpce_service_name = $vpce_service_name ?? "";
  }
}

type VPCEConfigurationDescription = string;

type VPCEConfigurationName = string;

type VPCEConfigurations = vec<VPCEConfiguration>;

type VPCEServiceName = string;

type VideoCapture = bool;

