<?hh // strict
namespace slack\aws\devicefarm;

interface Device Farm {
  public function CreateDevicePool(CreateDevicePoolRequest) Awaitable<Errors\Result<CreateDevicePoolResult>>;
  public function CreateInstanceProfile(CreateInstanceProfileRequest) Awaitable<Errors\Result<CreateInstanceProfileResult>>;
  public function CreateNetworkProfile(CreateNetworkProfileRequest) Awaitable<Errors\Result<CreateNetworkProfileResult>>;
  public function CreateProject(CreateProjectRequest) Awaitable<Errors\Result<CreateProjectResult>>;
  public function CreateRemoteAccessSession(CreateRemoteAccessSessionRequest) Awaitable<Errors\Result<CreateRemoteAccessSessionResult>>;
  public function CreateTestGridProject(CreateTestGridProjectRequest) Awaitable<Errors\Result<CreateTestGridProjectResult>>;
  public function CreateTestGridUrl(CreateTestGridUrlRequest) Awaitable<Errors\Result<CreateTestGridUrlResult>>;
  public function CreateUpload(CreateUploadRequest) Awaitable<Errors\Result<CreateUploadResult>>;
  public function CreateVPCEConfiguration(CreateVPCEConfigurationRequest) Awaitable<Errors\Result<CreateVPCEConfigurationResult>>;
  public function DeleteDevicePool(DeleteDevicePoolRequest) Awaitable<Errors\Result<DeleteDevicePoolResult>>;
  public function DeleteInstanceProfile(DeleteInstanceProfileRequest) Awaitable<Errors\Result<DeleteInstanceProfileResult>>;
  public function DeleteNetworkProfile(DeleteNetworkProfileRequest) Awaitable<Errors\Result<DeleteNetworkProfileResult>>;
  public function DeleteProject(DeleteProjectRequest) Awaitable<Errors\Result<DeleteProjectResult>>;
  public function DeleteRemoteAccessSession(DeleteRemoteAccessSessionRequest) Awaitable<Errors\Result<DeleteRemoteAccessSessionResult>>;
  public function DeleteRun(DeleteRunRequest) Awaitable<Errors\Result<DeleteRunResult>>;
  public function DeleteTestGridProject(DeleteTestGridProjectRequest) Awaitable<Errors\Result<DeleteTestGridProjectResult>>;
  public function DeleteUpload(DeleteUploadRequest) Awaitable<Errors\Result<DeleteUploadResult>>;
  public function DeleteVPCEConfiguration(DeleteVPCEConfigurationRequest) Awaitable<Errors\Result<DeleteVPCEConfigurationResult>>;
  public function GetAccountSettings(GetAccountSettingsRequest) Awaitable<Errors\Result<GetAccountSettingsResult>>;
  public function GetDevice(GetDeviceRequest) Awaitable<Errors\Result<GetDeviceResult>>;
  public function GetDeviceInstance(GetDeviceInstanceRequest) Awaitable<Errors\Result<GetDeviceInstanceResult>>;
  public function GetDevicePool(GetDevicePoolRequest) Awaitable<Errors\Result<GetDevicePoolResult>>;
  public function GetDevicePoolCompatibility(GetDevicePoolCompatibilityRequest) Awaitable<Errors\Result<GetDevicePoolCompatibilityResult>>;
  public function GetInstanceProfile(GetInstanceProfileRequest) Awaitable<Errors\Result<GetInstanceProfileResult>>;
  public function GetJob(GetJobRequest) Awaitable<Errors\Result<GetJobResult>>;
  public function GetNetworkProfile(GetNetworkProfileRequest) Awaitable<Errors\Result<GetNetworkProfileResult>>;
  public function GetOfferingStatus(GetOfferingStatusRequest) Awaitable<Errors\Result<GetOfferingStatusResult>>;
  public function GetProject(GetProjectRequest) Awaitable<Errors\Result<GetProjectResult>>;
  public function GetRemoteAccessSession(GetRemoteAccessSessionRequest) Awaitable<Errors\Result<GetRemoteAccessSessionResult>>;
  public function GetRun(GetRunRequest) Awaitable<Errors\Result<GetRunResult>>;
  public function GetSuite(GetSuiteRequest) Awaitable<Errors\Result<GetSuiteResult>>;
  public function GetTest(GetTestRequest) Awaitable<Errors\Result<GetTestResult>>;
  public function GetTestGridProject(GetTestGridProjectRequest) Awaitable<Errors\Result<GetTestGridProjectResult>>;
  public function GetTestGridSession(GetTestGridSessionRequest) Awaitable<Errors\Result<GetTestGridSessionResult>>;
  public function GetUpload(GetUploadRequest) Awaitable<Errors\Result<GetUploadResult>>;
  public function GetVPCEConfiguration(GetVPCEConfigurationRequest) Awaitable<Errors\Result<GetVPCEConfigurationResult>>;
  public function InstallToRemoteAccessSession(InstallToRemoteAccessSessionRequest) Awaitable<Errors\Result<InstallToRemoteAccessSessionResult>>;
  public function ListArtifacts(ListArtifactsRequest) Awaitable<Errors\Result<ListArtifactsResult>>;
  public function ListDeviceInstances(ListDeviceInstancesRequest) Awaitable<Errors\Result<ListDeviceInstancesResult>>;
  public function ListDevicePools(ListDevicePoolsRequest) Awaitable<Errors\Result<ListDevicePoolsResult>>;
  public function ListDevices(ListDevicesRequest) Awaitable<Errors\Result<ListDevicesResult>>;
  public function ListInstanceProfiles(ListInstanceProfilesRequest) Awaitable<Errors\Result<ListInstanceProfilesResult>>;
  public function ListJobs(ListJobsRequest) Awaitable<Errors\Result<ListJobsResult>>;
  public function ListNetworkProfiles(ListNetworkProfilesRequest) Awaitable<Errors\Result<ListNetworkProfilesResult>>;
  public function ListOfferingPromotions(ListOfferingPromotionsRequest) Awaitable<Errors\Result<ListOfferingPromotionsResult>>;
  public function ListOfferingTransactions(ListOfferingTransactionsRequest) Awaitable<Errors\Result<ListOfferingTransactionsResult>>;
  public function ListOfferings(ListOfferingsRequest) Awaitable<Errors\Result<ListOfferingsResult>>;
  public function ListProjects(ListProjectsRequest) Awaitable<Errors\Result<ListProjectsResult>>;
  public function ListRemoteAccessSessions(ListRemoteAccessSessionsRequest) Awaitable<Errors\Result<ListRemoteAccessSessionsResult>>;
  public function ListRuns(ListRunsRequest) Awaitable<Errors\Result<ListRunsResult>>;
  public function ListSamples(ListSamplesRequest) Awaitable<Errors\Result<ListSamplesResult>>;
  public function ListSuites(ListSuitesRequest) Awaitable<Errors\Result<ListSuitesResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTestGridProjects(ListTestGridProjectsRequest) Awaitable<Errors\Result<ListTestGridProjectsResult>>;
  public function ListTestGridSessionActions(ListTestGridSessionActionsRequest) Awaitable<Errors\Result<ListTestGridSessionActionsResult>>;
  public function ListTestGridSessionArtifacts(ListTestGridSessionArtifactsRequest) Awaitable<Errors\Result<ListTestGridSessionArtifactsResult>>;
  public function ListTestGridSessions(ListTestGridSessionsRequest) Awaitable<Errors\Result<ListTestGridSessionsResult>>;
  public function ListTests(ListTestsRequest) Awaitable<Errors\Result<ListTestsResult>>;
  public function ListUniqueProblems(ListUniqueProblemsRequest) Awaitable<Errors\Result<ListUniqueProblemsResult>>;
  public function ListUploads(ListUploadsRequest) Awaitable<Errors\Result<ListUploadsResult>>;
  public function ListVPCEConfigurations(ListVPCEConfigurationsRequest) Awaitable<Errors\Result<ListVPCEConfigurationsResult>>;
  public function PurchaseOffering(PurchaseOfferingRequest) Awaitable<Errors\Result<PurchaseOfferingResult>>;
  public function RenewOffering(RenewOfferingRequest) Awaitable<Errors\Result<RenewOfferingResult>>;
  public function ScheduleRun(ScheduleRunRequest) Awaitable<Errors\Result<ScheduleRunResult>>;
  public function StopJob(StopJobRequest) Awaitable<Errors\Result<StopJobResult>>;
  public function StopRemoteAccessSession(StopRemoteAccessSessionRequest) Awaitable<Errors\Result<StopRemoteAccessSessionResult>>;
  public function StopRun(StopRunRequest) Awaitable<Errors\Result<StopRunResult>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateDeviceInstance(UpdateDeviceInstanceRequest) Awaitable<Errors\Result<UpdateDeviceInstanceResult>>;
  public function UpdateDevicePool(UpdateDevicePoolRequest) Awaitable<Errors\Result<UpdateDevicePoolResult>>;
  public function UpdateInstanceProfile(UpdateInstanceProfileRequest) Awaitable<Errors\Result<UpdateInstanceProfileResult>>;
  public function UpdateNetworkProfile(UpdateNetworkProfileRequest) Awaitable<Errors\Result<UpdateNetworkProfileResult>>;
  public function UpdateProject(UpdateProjectRequest) Awaitable<Errors\Result<UpdateProjectResult>>;
  public function UpdateTestGridProject(UpdateTestGridProjectRequest) Awaitable<Errors\Result<UpdateTestGridProjectResult>>;
  public function UpdateUpload(UpdateUploadRequest) Awaitable<Errors\Result<UpdateUploadResult>>;
  public function UpdateVPCEConfiguration(UpdateVPCEConfigurationRequest) Awaitable<Errors\Result<UpdateVPCEConfigurationResult>>;
}

class AWSAccountNumber {
}

class AccountSettings {
  public AWSAccountNumber $aws_account_number;
  public JobTimeoutMinutes $default_job_timeout_minutes;
  public JobTimeoutMinutes $max_job_timeout_minutes;
  public MaxSlotMap $max_slots;
  public SkipAppResign $skip_app_resign;
  public TrialMinutes $trial_minutes;
  public PurchasedDevicesMap $unmetered_devices;
  public PurchasedDevicesMap $unmetered_remote_access_devices;
}

class AccountsCleanup {
}

class AmazonResourceName {
}

class AmazonResourceNames {
}

class AndroidPaths {
}

class AppPackagesCleanup {
}

class ArgumentException {
  public Message $message;
}

class Artifact {
  public AmazonResourceName $arn;
  public string $extension;
  public Name $name;
  public ArtifactType $type;
  public URL $url;
}

class ArtifactCategory {
}

class ArtifactType {
}

class Artifacts {
}

class BillingMethod {
}

class Boolean {
}

class CPU {
  public string $architecture;
  public Double $clock;
  public string $frequency;
}

class CannotDeleteException {
  public Message $message;
}

class ClientId {
}

class ContentType {
}

class Counters {
  public int $errored;
  public int $failed;
  public int $passed;
  public int $skipped;
  public int $stopped;
  public int $total;
  public int $warned;
}

class CreateDevicePoolRequest {
  public Message $description;
  public int $max_devices;
  public Name $name;
  public AmazonResourceName $project_arn;
  public Rules $rules;
}

class CreateDevicePoolResult {
  public DevicePool $device_pool;
}

class CreateInstanceProfileRequest {
  public Message $description;
  public PackageIds $exclude_app_packages_from_cleanup;
  public Name $name;
  public boolean $package_cleanup;
  public boolean $reboot_after_use;
}

class CreateInstanceProfileResult {
  public InstanceProfile $instance_profile;
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
}

class CreateNetworkProfileResult {
  public NetworkProfile $network_profile;
}

class CreateProjectRequest {
  public JobTimeoutMinutes $default_job_timeout_minutes;
  public Name $name;
}

class CreateProjectResult {
  public Project $project;
}

class CreateRemoteAccessSessionConfiguration {
  public BillingMethod $billing_method;
  public AmazonResourceNames $vpce_configuration_arns;
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
}

class CreateRemoteAccessSessionResult {
  public RemoteAccessSession $remote_access_session;
}

class CreateTestGridProjectRequest {
  public ResourceDescription $description;
  public ResourceName $name;
}

class CreateTestGridProjectResult {
  public TestGridProject $test_grid_project;
}

class CreateTestGridUrlRequest {
  public TestGridUrlExpiresInSecondsInput $expires_in_seconds;
  public DeviceFarmArn $project_arn;
}

class CreateTestGridUrlResult {
  public DateTime $expires;
  public string $url;
}

class CreateUploadRequest {
  public ContentType $content_type;
  public Name $name;
  public AmazonResourceName $project_arn;
  public UploadType $type;
}

class CreateUploadResult {
  public Upload $upload;
}

class CreateVPCEConfigurationRequest {
  public ServiceDnsName $service_dns_name;
  public VPCEConfigurationDescription $vpce_configuration_description;
  public VPCEConfigurationName $vpce_configuration_name;
  public VPCEServiceName $vpce_service_name;
}

class CreateVPCEConfigurationResult {
  public VPCEConfiguration $vpce_configuration;
}

class CurrencyCode {
}

class CustomerArtifactPaths {
  public AndroidPaths $android_paths;
  public DeviceHostPaths $device_host_paths;
  public IosPaths $ios_paths;
}

class DateTime {
}

class DeleteDevicePoolRequest {
  public AmazonResourceName $arn;
}

class DeleteDevicePoolResult {
}

class DeleteInstanceProfileRequest {
  public AmazonResourceName $arn;
}

class DeleteInstanceProfileResult {
}

class DeleteNetworkProfileRequest {
  public AmazonResourceName $arn;
}

class DeleteNetworkProfileResult {
}

class DeleteProjectRequest {
  public AmazonResourceName $arn;
}

class DeleteProjectResult {
}

class DeleteRemoteAccessSessionRequest {
  public AmazonResourceName $arn;
}

class DeleteRemoteAccessSessionResult {
}

class DeleteRunRequest {
  public AmazonResourceName $arn;
}

class DeleteRunResult {
}

class DeleteTestGridProjectRequest {
  public DeviceFarmArn $project_arn;
}

class DeleteTestGridProjectResult {
}

class DeleteUploadRequest {
  public AmazonResourceName $arn;
}

class DeleteUploadResult {
}

class DeleteVPCEConfigurationRequest {
  public AmazonResourceName $arn;
}

class DeleteVPCEConfigurationResult {
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
}

class DeviceAttribute {
}

class DeviceAvailability {
}

class DeviceFarmArn {
}

class DeviceFilter {
  public DeviceFilterAttribute $attribute;
  public RuleOperator $operator;
  public DeviceFilterValues $values;
}

class DeviceFilterAttribute {
}

class DeviceFilterValues {
}

class DeviceFilters {
}

class DeviceFormFactor {
}

class DeviceHostPaths {
}

class DeviceInstance {
  public AmazonResourceName $arn;
  public AmazonResourceName $device_arn;
  public InstanceProfile $instance_profile;
  public InstanceLabels $labels;
  public InstanceStatus $status;
  public string $udid;
}

class DeviceInstances {
}

class DeviceMinutes {
  public Double $metered;
  public Double $total;
  public Double $unmetered;
}

class DevicePlatform {
}

class DevicePool {
  public AmazonResourceName $arn;
  public Message $description;
  public int $max_devices;
  public Name $name;
  public Rules $rules;
  public DevicePoolType $type;
}

class DevicePoolCompatibilityResult {
  public boolean $compatible;
  public Device $device;
  public IncompatibilityMessages $incompatibility_messages;
}

class DevicePoolCompatibilityResults {
}

class DevicePoolType {
}

class DevicePools {
}

class DeviceSelectionConfiguration {
  public DeviceFilters $filters;
  public int $max_devices;
}

class DeviceSelectionResult {
  public DeviceFilters $filters;
  public int $matched_devices_count;
  public int $max_devices;
}

class Devices {
}

class Double {
}

class ExceptionMessage {
}

class ExecutionConfiguration {
  public AccountsCleanup $accounts_cleanup;
  public AppPackagesCleanup $app_packages_cleanup;
  public JobTimeoutMinutes $job_timeout_minutes;
  public SkipAppResign $skip_app_resign;
  public VideoCapture $video_capture;
}

class ExecutionResult {
}

class ExecutionResultCode {
}

class ExecutionStatus {
}

class Filter {
}

class GetAccountSettingsRequest {
}

class GetAccountSettingsResult {
  public AccountSettings $account_settings;
}

class GetDeviceInstanceRequest {
  public AmazonResourceName $arn;
}

class GetDeviceInstanceResult {
  public DeviceInstance $device_instance;
}

class GetDevicePoolCompatibilityRequest {
  public AmazonResourceName $app_arn;
  public ScheduleRunConfiguration $configuration;
  public AmazonResourceName $device_pool_arn;
  public ScheduleRunTest $test;
  public TestType $test_type;
}

class GetDevicePoolCompatibilityResult {
  public DevicePoolCompatibilityResults $compatible_devices;
  public DevicePoolCompatibilityResults $incompatible_devices;
}

class GetDevicePoolRequest {
  public AmazonResourceName $arn;
}

class GetDevicePoolResult {
  public DevicePool $device_pool;
}

class GetDeviceRequest {
  public AmazonResourceName $arn;
}

class GetDeviceResult {
  public Device $device;
}

class GetInstanceProfileRequest {
  public AmazonResourceName $arn;
}

class GetInstanceProfileResult {
  public InstanceProfile $instance_profile;
}

class GetJobRequest {
  public AmazonResourceName $arn;
}

class GetJobResult {
  public Job $job;
}

class GetNetworkProfileRequest {
  public AmazonResourceName $arn;
}

class GetNetworkProfileResult {
  public NetworkProfile $network_profile;
}

class GetOfferingStatusRequest {
  public PaginationToken $next_token;
}

class GetOfferingStatusResult {
  public OfferingStatusMap $current;
  public OfferingStatusMap $next_period;
  public PaginationToken $next_token;
}

class GetProjectRequest {
  public AmazonResourceName $arn;
}

class GetProjectResult {
  public Project $project;
}

class GetRemoteAccessSessionRequest {
  public AmazonResourceName $arn;
}

class GetRemoteAccessSessionResult {
  public RemoteAccessSession $remote_access_session;
}

class GetRunRequest {
  public AmazonResourceName $arn;
}

class GetRunResult {
  public Run $run;
}

class GetSuiteRequest {
  public AmazonResourceName $arn;
}

class GetSuiteResult {
  public Suite $suite;
}

class GetTestGridProjectRequest {
  public DeviceFarmArn $project_arn;
}

class GetTestGridProjectResult {
  public TestGridProject $test_grid_project;
}

class GetTestGridSessionRequest {
  public DeviceFarmArn $project_arn;
  public DeviceFarmArn $session_arn;
  public ResourceId $session_id;
}

class GetTestGridSessionResult {
  public TestGridSession $test_grid_session;
}

class GetTestRequest {
  public AmazonResourceName $arn;
}

class GetTestResult {
  public Test $test;
}

class GetUploadRequest {
  public AmazonResourceName $arn;
}

class GetUploadResult {
  public Upload $upload;
}

class GetVPCEConfigurationRequest {
  public AmazonResourceName $arn;
}

class GetVPCEConfigurationResult {
  public VPCEConfiguration $vpce_configuration;
}

class HostAddress {
}

class IdempotencyException {
  public Message $message;
}

class IncompatibilityMessage {
  public Message $message;
  public DeviceAttribute $type;
}

class IncompatibilityMessages {
}

class InstallToRemoteAccessSessionRequest {
  public AmazonResourceName $app_arn;
  public AmazonResourceName $remote_access_session_arn;
}

class InstallToRemoteAccessSessionResult {
  public Upload $app_upload;
}

class InstanceLabels {
}

class InstanceProfile {
  public AmazonResourceName $arn;
  public Message $description;
  public PackageIds $exclude_app_packages_from_cleanup;
  public Name $name;
  public boolean $package_cleanup;
  public boolean $reboot_after_use;
}

class InstanceProfiles {
}

class InstanceStatus {
}

class Integer {
}

class InteractionMode {
}

class InternalServiceException {
  public Message $message;
}

class InvalidOperationException {
  public Message $message;
}

class IosPaths {
}

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
}

class JobTimeoutMinutes {
}

class Jobs {
}

class LimitExceededException {
  public Message $message;
}

class ListArtifactsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
  public ArtifactCategory $type;
}

class ListArtifactsResult {
  public Artifacts $artifacts;
  public PaginationToken $next_token;
}

class ListDeviceInstancesRequest {
  public int $max_results;
  public PaginationToken $next_token;
}

class ListDeviceInstancesResult {
  public DeviceInstances $device_instances;
  public PaginationToken $next_token;
}

class ListDevicePoolsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
  public DevicePoolType $type;
}

class ListDevicePoolsResult {
  public DevicePools $device_pools;
  public PaginationToken $next_token;
}

class ListDevicesRequest {
  public AmazonResourceName $arn;
  public DeviceFilters $filters;
  public PaginationToken $next_token;
}

class ListDevicesResult {
  public Devices $devices;
  public PaginationToken $next_token;
}

class ListInstanceProfilesRequest {
  public int $max_results;
  public PaginationToken $next_token;
}

class ListInstanceProfilesResult {
  public InstanceProfiles $instance_profiles;
  public PaginationToken $next_token;
}

class ListJobsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
}

class ListJobsResult {
  public Jobs $jobs;
  public PaginationToken $next_token;
}

class ListNetworkProfilesRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
  public NetworkProfileType $type;
}

class ListNetworkProfilesResult {
  public NetworkProfiles $network_profiles;
  public PaginationToken $next_token;
}

class ListOfferingPromotionsRequest {
  public PaginationToken $next_token;
}

class ListOfferingPromotionsResult {
  public PaginationToken $next_token;
  public OfferingPromotions $offering_promotions;
}

class ListOfferingTransactionsRequest {
  public PaginationToken $next_token;
}

class ListOfferingTransactionsResult {
  public PaginationToken $next_token;
  public OfferingTransactions $offering_transactions;
}

class ListOfferingsRequest {
  public PaginationToken $next_token;
}

class ListOfferingsResult {
  public PaginationToken $next_token;
  public Offerings $offerings;
}

class ListProjectsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
}

class ListProjectsResult {
  public PaginationToken $next_token;
  public Projects $projects;
}

class ListRemoteAccessSessionsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
}

class ListRemoteAccessSessionsResult {
  public PaginationToken $next_token;
  public RemoteAccessSessions $remote_access_sessions;
}

class ListRunsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
}

class ListRunsResult {
  public PaginationToken $next_token;
  public Runs $runs;
}

class ListSamplesRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
}

class ListSamplesResult {
  public PaginationToken $next_token;
  public Samples $samples;
}

class ListSuitesRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
}

class ListSuitesResult {
  public PaginationToken $next_token;
  public Suites $suites;
}

class ListTagsForResourceRequest {
  public DeviceFarmArn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class ListTestGridProjectsRequest {
  public MaxPageSize $max_result;
  public PaginationToken $next_token;
}

class ListTestGridProjectsResult {
  public PaginationToken $next_token;
  public TestGridProjects $test_grid_projects;
}

class ListTestGridSessionActionsRequest {
  public MaxPageSize $max_result;
  public PaginationToken $next_token;
  public DeviceFarmArn $session_arn;
}

class ListTestGridSessionActionsResult {
  public TestGridSessionActions $actions;
  public PaginationToken $next_token;
}

class ListTestGridSessionArtifactsRequest {
  public MaxPageSize $max_result;
  public PaginationToken $next_token;
  public DeviceFarmArn $session_arn;
  public TestGridSessionArtifactCategory $type;
}

class ListTestGridSessionArtifactsResult {
  public TestGridSessionArtifacts $artifacts;
  public PaginationToken $next_token;
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
}

class ListTestGridSessionsResult {
  public PaginationToken $next_token;
  public TestGridSessions $test_grid_sessions;
}

class ListTestsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
}

class ListTestsResult {
  public PaginationToken $next_token;
  public Tests $tests;
}

class ListUniqueProblemsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
}

class ListUniqueProblemsResult {
  public PaginationToken $next_token;
  public UniqueProblemsByExecutionResultMap $unique_problems;
}

class ListUploadsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
  public UploadType $type;
}

class ListUploadsResult {
  public PaginationToken $next_token;
  public Uploads $uploads;
}

class ListVPCEConfigurationsRequest {
  public int $max_results;
  public PaginationToken $next_token;
}

class ListVPCEConfigurationsResult {
  public PaginationToken $next_token;
  public VPCEConfigurations $vpce_configurations;
}

class Location {
  public Double $latitude;
  public Double $longitude;
}

class Long {
}

class MaxPageSize {
}

class MaxSlotMap {
}

class Message {
}

class Metadata {
}

class MonetaryAmount {
  public Double $amount;
  public CurrencyCode $currency_code;
}

class Name {
}

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
}

class NetworkProfileType {
}

class NetworkProfiles {
}

class NotEligibleException {
  public Message $message;
}

class NotFoundException {
  public Message $message;
}

class Offering {
  public Message $description;
  public OfferingIdentifier $id;
  public DevicePlatform $platform;
  public RecurringCharges $recurring_charges;
  public OfferingType $type;
}

class OfferingIdentifier {
}

class OfferingPromotion {
  public Message $description;
  public OfferingPromotionIdentifier $id;
}

class OfferingPromotionIdentifier {
}

class OfferingPromotions {
}

class OfferingStatus {
  public DateTime $effective_on;
  public Offering $offering;
  public int $quantity;
  public OfferingTransactionType $type;
}

class OfferingStatusMap {
}

class OfferingTransaction {
  public MonetaryAmount $cost;
  public DateTime $created_on;
  public OfferingPromotionIdentifier $offering_promotion_id;
  public OfferingStatus $offering_status;
  public TransactionIdentifier $transaction_id;
}

class OfferingTransactionType {
}

class OfferingTransactions {
}

class OfferingType {
}

class Offerings {
}

class PackageIds {
}

class PaginationToken {
}

class PercentInteger {
}

class Problem {
  public Device $device;
  public ProblemDetail $job;
  public Message $message;
  public ExecutionResult $result;
  public ProblemDetail $run;
  public ProblemDetail $suite;
  public ProblemDetail $test;
}

class ProblemDetail {
  public AmazonResourceName $arn;
  public Name $name;
}

class Problems {
}

class Project {
  public AmazonResourceName $arn;
  public DateTime $created;
  public JobTimeoutMinutes $default_job_timeout_minutes;
  public Name $name;
}

class Projects {
}

class PurchaseOfferingRequest {
  public OfferingIdentifier $offering_id;
  public OfferingPromotionIdentifier $offering_promotion_id;
  public int $quantity;
}

class PurchaseOfferingResult {
  public OfferingTransaction $offering_transaction;
}

class PurchasedDevicesMap {
}

class Radios {
  public boolean $bluetooth;
  public boolean $gps;
  public boolean $nfc;
  public boolean $wifi;
}

class RecurringCharge {
  public MonetaryAmount $cost;
  public RecurringChargeFrequency $frequency;
}

class RecurringChargeFrequency {
}

class RecurringCharges {
}

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
}

class RemoteAccessSessions {
}

class RenewOfferingRequest {
  public OfferingIdentifier $offering_id;
  public int $quantity;
}

class RenewOfferingResult {
  public OfferingTransaction $offering_transaction;
}

class Resolution {
  public int $height;
  public int $width;
}

class ResourceDescription {
}

class ResourceId {
}

class ResourceName {
}

class Rule {
  public DeviceAttribute $attribute;
  public RuleOperator $operator;
  public string $value;
}

class RuleOperator {
}

class Rules {
}

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
}

class Runs {
}

class Sample {
  public AmazonResourceName $arn;
  public SampleType $type;
  public URL $url;
}

class SampleType {
}

class Samples {
}

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
}

class ScheduleRunResult {
  public Run $run;
}

class ScheduleRunTest {
  public Filter $filter;
  public TestParameters $parameters;
  public AmazonResourceName $test_package_arn;
  public AmazonResourceName $test_spec_arn;
  public TestType $type;
}

class ServiceAccountException {
  public Message $message;
}

class ServiceDnsName {
}

class SkipAppResign {
}

class SshPublicKey {
}

class StopJobRequest {
  public AmazonResourceName $arn;
}

class StopJobResult {
  public Job $job;
}

class StopRemoteAccessSessionRequest {
  public AmazonResourceName $arn;
}

class StopRemoteAccessSessionResult {
  public RemoteAccessSession $remote_access_session;
}

class StopRunRequest {
  public AmazonResourceName $arn;
}

class StopRunResult {
  public Run $run;
}

class String {
}

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
}

class Suites {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagOperationException {
  public ExceptionMessage $message;
  public AmazonResourceName $resource_name;
}

class TagPolicyException {
  public ExceptionMessage $message;
  public AmazonResourceName $resource_name;
}

class TagResourceRequest {
  public DeviceFarmArn $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

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
}

class TestGridProject {
  public DeviceFarmArn $arn;
  public DateTime $created;
  public string $description;
  public string $name;
}

class TestGridProjects {
}

class TestGridSession {
  public DeviceFarmArn $arn;
  public Double $billing_minutes;
  public DateTime $created;
  public DateTime $ended;
  public string $selenium_properties;
  public TestGridSessionStatus $status;
}

class TestGridSessionAction {
  public string $action;
  public Long $duration;
  public string $request_method;
  public DateTime $started;
  public string $status_code;
}

class TestGridSessionActions {
}

class TestGridSessionArtifact {
  public string $filename;
  public TestGridSessionArtifactType $type;
  public string $url;
}

class TestGridSessionArtifactCategory {
}

class TestGridSessionArtifactType {
}

class TestGridSessionArtifacts {
}

class TestGridSessionStatus {
}

class TestGridSessions {
}

class TestGridUrlExpiresInSecondsInput {
}

class TestParameters {
}

class TestType {
}

class Tests {
}

class TooManyTagsException {
  public ExceptionMessage $message;
  public AmazonResourceName $resource_name;
}

class TransactionIdentifier {
}

class TrialMinutes {
  public Double $remaining;
  public Double $total;
}

class URL {
}

class UniqueProblem {
  public Message $message;
  public Problems $problems;
}

class UniqueProblems {
}

class UniqueProblemsByExecutionResultMap {
}

class UntagResourceRequest {
  public DeviceFarmArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateDeviceInstanceRequest {
  public AmazonResourceName $arn;
  public InstanceLabels $labels;
  public AmazonResourceName $profile_arn;
}

class UpdateDeviceInstanceResult {
  public DeviceInstance $device_instance;
}

class UpdateDevicePoolRequest {
  public AmazonResourceName $arn;
  public boolean $clear_max_devices;
  public Message $description;
  public int $max_devices;
  public Name $name;
  public Rules $rules;
}

class UpdateDevicePoolResult {
  public DevicePool $device_pool;
}

class UpdateInstanceProfileRequest {
  public AmazonResourceName $arn;
  public Message $description;
  public PackageIds $exclude_app_packages_from_cleanup;
  public Name $name;
  public boolean $package_cleanup;
  public boolean $reboot_after_use;
}

class UpdateInstanceProfileResult {
  public InstanceProfile $instance_profile;
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
}

class UpdateNetworkProfileResult {
  public NetworkProfile $network_profile;
}

class UpdateProjectRequest {
  public AmazonResourceName $arn;
  public JobTimeoutMinutes $default_job_timeout_minutes;
  public Name $name;
}

class UpdateProjectResult {
  public Project $project;
}

class UpdateTestGridProjectRequest {
  public ResourceDescription $description;
  public ResourceName $name;
  public DeviceFarmArn $project_arn;
}

class UpdateTestGridProjectResult {
  public TestGridProject $test_grid_project;
}

class UpdateUploadRequest {
  public AmazonResourceName $arn;
  public ContentType $content_type;
  public boolean $edit_content;
  public Name $name;
}

class UpdateUploadResult {
  public Upload $upload;
}

class UpdateVPCEConfigurationRequest {
  public AmazonResourceName $arn;
  public ServiceDnsName $service_dns_name;
  public VPCEConfigurationDescription $vpce_configuration_description;
  public VPCEConfigurationName $vpce_configuration_name;
  public VPCEServiceName $vpce_service_name;
}

class UpdateVPCEConfigurationResult {
  public VPCEConfiguration $vpce_configuration;
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
}

class UploadCategory {
}

class UploadStatus {
}

class UploadType {
}

class Uploads {
}

class VPCEConfiguration {
  public AmazonResourceName $arn;
  public ServiceDnsName $service_dns_name;
  public VPCEConfigurationDescription $vpce_configuration_description;
  public VPCEConfigurationName $vpce_configuration_name;
  public VPCEServiceName $vpce_service_name;
}

class VPCEConfigurationDescription {
}

class VPCEConfigurationName {
}

class VPCEConfigurations {
}

class VPCEServiceName {
}

class VideoCapture {
}

