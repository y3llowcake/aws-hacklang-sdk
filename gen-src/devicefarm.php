<?hh // strict
namespace slack\aws\devicefarm;

interface Device Farm {
  public function CreateTestGridUrl(CreateTestGridUrlRequest) Awaitable<Errors\Result<CreateTestGridUrlResult>>;
  public function DeleteRun(DeleteRunRequest) Awaitable<Errors\Result<DeleteRunResult>>;
  public function GetDevicePool(GetDevicePoolRequest) Awaitable<Errors\Result<GetDevicePoolResult>>;
  public function ListArtifacts(ListArtifactsRequest) Awaitable<Errors\Result<ListArtifactsResult>>;
  public function ScheduleRun(ScheduleRunRequest) Awaitable<Errors\Result<ScheduleRunResult>>;
  public function UpdateUpload(UpdateUploadRequest) Awaitable<Errors\Result<UpdateUploadResult>>;
  public function GetDeviceInstance(GetDeviceInstanceRequest) Awaitable<Errors\Result<GetDeviceInstanceResult>>;
  public function GetTestGridProject(GetTestGridProjectRequest) Awaitable<Errors\Result<GetTestGridProjectResult>>;
  public function ListSuites(ListSuitesRequest) Awaitable<Errors\Result<ListSuitesResult>>;
  public function RenewOffering(RenewOfferingRequest) Awaitable<Errors\Result<RenewOfferingResult>>;
  public function DeleteProject(DeleteProjectRequest) Awaitable<Errors\Result<DeleteProjectResult>>;
  public function GetDevice(GetDeviceRequest) Awaitable<Errors\Result<GetDeviceResult>>;
  public function ListDevices(ListDevicesRequest) Awaitable<Errors\Result<ListDevicesResult>>;
  public function ListOfferings(ListOfferingsRequest) Awaitable<Errors\Result<ListOfferingsResult>>;
  public function ListTestGridSessionActions(ListTestGridSessionActionsRequest) Awaitable<Errors\Result<ListTestGridSessionActionsResult>>;
  public function ListUploads(ListUploadsRequest) Awaitable<Errors\Result<ListUploadsResult>>;
  public function UpdateNetworkProfile(UpdateNetworkProfileRequest) Awaitable<Errors\Result<UpdateNetworkProfileResult>>;
  public function CreateTestGridProject(CreateTestGridProjectRequest) Awaitable<Errors\Result<CreateTestGridProjectResult>>;
  public function GetInstanceProfile(GetInstanceProfileRequest) Awaitable<Errors\Result<GetInstanceProfileResult>>;
  public function GetSuite(GetSuiteRequest) Awaitable<Errors\Result<GetSuiteResult>>;
  public function ListDeviceInstances(ListDeviceInstancesRequest) Awaitable<Errors\Result<ListDeviceInstancesResult>>;
  public function ListSamples(ListSamplesRequest) Awaitable<Errors\Result<ListSamplesResult>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function ListDevicePools(ListDevicePoolsRequest) Awaitable<Errors\Result<ListDevicePoolsResult>>;
  public function ListTestGridProjects(ListTestGridProjectsRequest) Awaitable<Errors\Result<ListTestGridProjectsResult>>;
  public function DeleteNetworkProfile(DeleteNetworkProfileRequest) Awaitable<Errors\Result<DeleteNetworkProfileResult>>;
  public function GetNetworkProfile(GetNetworkProfileRequest) Awaitable<Errors\Result<GetNetworkProfileResult>>;
  public function InstallToRemoteAccessSession(InstallToRemoteAccessSessionRequest) Awaitable<Errors\Result<InstallToRemoteAccessSessionResult>>;
  public function ListVPCEConfigurations(ListVPCEConfigurationsRequest) Awaitable<Errors\Result<ListVPCEConfigurationsResult>>;
  public function UpdateDevicePool(UpdateDevicePoolRequest) Awaitable<Errors\Result<UpdateDevicePoolResult>>;
  public function StopJob(StopJobRequest) Awaitable<Errors\Result<StopJobResult>>;
  public function CreateDevicePool(CreateDevicePoolRequest) Awaitable<Errors\Result<CreateDevicePoolResult>>;
  public function DeleteRemoteAccessSession(DeleteRemoteAccessSessionRequest) Awaitable<Errors\Result<DeleteRemoteAccessSessionResult>>;
  public function GetTest(GetTestRequest) Awaitable<Errors\Result<GetTestResult>>;
  public function GetVPCEConfiguration(GetVPCEConfigurationRequest) Awaitable<Errors\Result<GetVPCEConfigurationResult>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function CreateUpload(CreateUploadRequest) Awaitable<Errors\Result<CreateUploadResult>>;
  public function ListOfferingPromotions(ListOfferingPromotionsRequest) Awaitable<Errors\Result<ListOfferingPromotionsResult>>;
  public function ListTestGridSessionArtifacts(ListTestGridSessionArtifactsRequest) Awaitable<Errors\Result<ListTestGridSessionArtifactsResult>>;
  public function UpdateProject(UpdateProjectRequest) Awaitable<Errors\Result<UpdateProjectResult>>;
  public function UpdateVPCEConfiguration(UpdateVPCEConfigurationRequest) Awaitable<Errors\Result<UpdateVPCEConfigurationResult>>;
  public function GetOfferingStatus(GetOfferingStatusRequest) Awaitable<Errors\Result<GetOfferingStatusResult>>;
  public function GetTestGridSession(GetTestGridSessionRequest) Awaitable<Errors\Result<GetTestGridSessionResult>>;
  public function ListNetworkProfiles(ListNetworkProfilesRequest) Awaitable<Errors\Result<ListNetworkProfilesResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function UpdateTestGridProject(UpdateTestGridProjectRequest) Awaitable<Errors\Result<UpdateTestGridProjectResult>>;
  public function CreateNetworkProfile(CreateNetworkProfileRequest) Awaitable<Errors\Result<CreateNetworkProfileResult>>;
  public function CreateProject(CreateProjectRequest) Awaitable<Errors\Result<CreateProjectResult>>;
  public function DeleteDevicePool(DeleteDevicePoolRequest) Awaitable<Errors\Result<DeleteDevicePoolResult>>;
  public function GetProject(GetProjectRequest) Awaitable<Errors\Result<GetProjectResult>>;
  public function GetRemoteAccessSession(GetRemoteAccessSessionRequest) Awaitable<Errors\Result<GetRemoteAccessSessionResult>>;
  public function ListRemoteAccessSessions(ListRemoteAccessSessionsRequest) Awaitable<Errors\Result<ListRemoteAccessSessionsResult>>;
  public function StopRemoteAccessSession(StopRemoteAccessSessionRequest) Awaitable<Errors\Result<StopRemoteAccessSessionResult>>;
  public function CreateInstanceProfile(CreateInstanceProfileRequest) Awaitable<Errors\Result<CreateInstanceProfileResult>>;
  public function DeleteInstanceProfile(DeleteInstanceProfileRequest) Awaitable<Errors\Result<DeleteInstanceProfileResult>>;
  public function ListProjects(ListProjectsRequest) Awaitable<Errors\Result<ListProjectsResult>>;
  public function ListRuns(ListRunsRequest) Awaitable<Errors\Result<ListRunsResult>>;
  public function CreateRemoteAccessSession(CreateRemoteAccessSessionRequest) Awaitable<Errors\Result<CreateRemoteAccessSessionResult>>;
  public function DeleteUpload(DeleteUploadRequest) Awaitable<Errors\Result<DeleteUploadResult>>;
  public function GetAccountSettings(GetAccountSettingsRequest) Awaitable<Errors\Result<GetAccountSettingsResult>>;
  public function PurchaseOffering(PurchaseOfferingRequest) Awaitable<Errors\Result<PurchaseOfferingResult>>;
  public function GetDevicePoolCompatibility(GetDevicePoolCompatibilityRequest) Awaitable<Errors\Result<GetDevicePoolCompatibilityResult>>;
  public function GetRun(GetRunRequest) Awaitable<Errors\Result<GetRunResult>>;
  public function ListJobs(ListJobsRequest) Awaitable<Errors\Result<ListJobsResult>>;
  public function ListOfferingTransactions(ListOfferingTransactionsRequest) Awaitable<Errors\Result<ListOfferingTransactionsResult>>;
  public function StopRun(StopRunRequest) Awaitable<Errors\Result<StopRunResult>>;
  public function CreateVPCEConfiguration(CreateVPCEConfigurationRequest) Awaitable<Errors\Result<CreateVPCEConfigurationResult>>;
  public function ListTestGridSessions(ListTestGridSessionsRequest) Awaitable<Errors\Result<ListTestGridSessionsResult>>;
  public function UpdateDeviceInstance(UpdateDeviceInstanceRequest) Awaitable<Errors\Result<UpdateDeviceInstanceResult>>;
  public function DeleteTestGridProject(DeleteTestGridProjectRequest) Awaitable<Errors\Result<DeleteTestGridProjectResult>>;
  public function DeleteVPCEConfiguration(DeleteVPCEConfigurationRequest) Awaitable<Errors\Result<DeleteVPCEConfigurationResult>>;
  public function GetJob(GetJobRequest) Awaitable<Errors\Result<GetJobResult>>;
  public function GetUpload(GetUploadRequest) Awaitable<Errors\Result<GetUploadResult>>;
  public function ListInstanceProfiles(ListInstanceProfilesRequest) Awaitable<Errors\Result<ListInstanceProfilesResult>>;
  public function ListTests(ListTestsRequest) Awaitable<Errors\Result<ListTestsResult>>;
  public function ListUniqueProblems(ListUniqueProblemsRequest) Awaitable<Errors\Result<ListUniqueProblemsResult>>;
  public function UpdateInstanceProfile(UpdateInstanceProfileRequest) Awaitable<Errors\Result<UpdateInstanceProfileResult>>;
}

class RuleOperator {
}

class DeviceAvailability {
}

class ListInstanceProfilesRequest {
  public int $max_results;
  public PaginationToken $next_token;
}

class ListTestsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
}

class RecurringCharge {
  public MonetaryAmount $cost;
  public RecurringChargeFrequency $frequency;
}

class UploadStatus {
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

class ListUploadsRequest {
  public AmazonResourceName $arn;
  public UploadType $type;
  public PaginationToken $next_token;
}

class ScheduleRunResult {
  public Run $run;
}

class UpdateUploadRequest {
  public AmazonResourceName $arn;
  public Name $name;
  public ContentType $content_type;
  public boolean $edit_content;
}

class GetJobRequest {
  public AmazonResourceName $arn;
}

class OfferingType {
}

class SkipAppResign {
}

class TestGridSession {
  public string $selenium_properties;
  public DeviceFarmArn $arn;
  public TestGridSessionStatus $status;
  public DateTime $created;
  public DateTime $ended;
  public Double $billing_minutes;
}

class CreateInstanceProfileResult {
  public InstanceProfile $instance_profile;
}

class DeleteDevicePoolResult {
}

class DeleteProjectResult {
}

class DeviceInstance {
  public AmazonResourceName $arn;
  public AmazonResourceName $device_arn;
  public InstanceLabels $labels;
  public InstanceStatus $status;
  public string $udid;
  public InstanceProfile $instance_profile;
}

class UpdateInstanceProfileResult {
  public InstanceProfile $instance_profile;
}

class GetAccountSettingsResult {
  public AccountSettings $account_settings;
}

class ScheduleRunTest {
  public TestType $type;
  public AmazonResourceName $test_package_arn;
  public AmazonResourceName $test_spec_arn;
  public Filter $filter;
  public TestParameters $parameters;
}

class TrialMinutes {
  public Double $total;
  public Double $remaining;
}

class AmazonResourceNames {
}

class DeleteTestGridProjectResult {
}

class DeleteUploadRequest {
  public AmazonResourceName $arn;
}

class ListOfferingPromotionsResult {
  public OfferingPromotions $offering_promotions;
  public PaginationToken $next_token;
}

class SampleType {
}

class TagResourceRequest {
  public DeviceFarmArn $resource_arn;
  public TagList $tags;
}

class VideoCapture {
}

class CreateRemoteAccessSessionConfiguration {
  public BillingMethod $billing_method;
  public AmazonResourceNames $vpce_configuration_arns;
}

class InstanceStatus {
}

class ListDevicesRequest {
  public DeviceFilters $filters;
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
}

class ListUniqueProblemsResult {
  public UniqueProblemsByExecutionResultMap $unique_problems;
  public PaginationToken $next_token;
}

class MaxSlotMap {
}

class DeleteDevicePoolRequest {
  public AmazonResourceName $arn;
}

class ListNetworkProfilesResult {
  public NetworkProfiles $network_profiles;
  public PaginationToken $next_token;
}

class ListRemoteAccessSessionsRequest {
  public PaginationToken $next_token;
  public AmazonResourceName $arn;
}

class ListUploadsResult {
  public Uploads $uploads;
  public PaginationToken $next_token;
}

class TestGridSessionStatus {
}

class TestGridSessionAction {
  public string $action;
  public DateTime $started;
  public Long $duration;
  public string $status_code;
  public string $request_method;
}

class DeleteRunResult {
}

class GetRemoteAccessSessionRequest {
  public AmazonResourceName $arn;
}

class ListOfferingsRequest {
  public PaginationToken $next_token;
}

class Offerings {
}

class ContentType {
}

class ListDevicesResult {
  public PaginationToken $next_token;
  public Devices $devices;
}

class CreateUploadResult {
  public Upload $upload;
}

class ListSuitesResult {
  public Suites $suites;
  public PaginationToken $next_token;
}

class TestParameters {
}

class UniqueProblemsByExecutionResultMap {
}

class UntagResourceRequest {
  public TagKeyList $tag_keys;
  public DeviceFarmArn $resource_arn;
}

class IncompatibilityMessages {
}

class ListNetworkProfilesRequest {
  public AmazonResourceName $arn;
  public NetworkProfileType $type;
  public PaginationToken $next_token;
}

class PurchasedDevicesMap {
}

class UniqueProblems {
}

class Suites {
}

class TagOperationException {
  public ExceptionMessage $message;
  public AmazonResourceName $resource_name;
}

class AndroidPaths {
}

class DevicePoolType {
}

class MonetaryAmount {
  public Double $amount;
  public CurrencyCode $currency_code;
}

class ScheduleRunRequest {
  public AmazonResourceName $app_arn;
  public AmazonResourceName $device_pool_arn;
  public DeviceSelectionConfiguration $device_selection_configuration;
  public Name $name;
  public ScheduleRunTest $test;
  public ScheduleRunConfiguration $configuration;
  public ExecutionConfiguration $execution_configuration;
  public AmazonResourceName $project_arn;
}

class Rule {
  public RuleOperator $operator;
  public string $value;
  public DeviceAttribute $attribute;
}

class UpdateNetworkProfileRequest {
  public Long $uplink_delay_ms;
  public PercentInteger $uplink_loss_percent;
  public PercentInteger $downlink_loss_percent;
  public NetworkProfileType $type;
  public Long $uplink_bandwidth_bits;
  public Message $description;
  public Long $downlink_bandwidth_bits;
  public Long $downlink_delay_ms;
  public Long $uplink_jitter_ms;
  public Long $downlink_jitter_ms;
  public AmazonResourceName $arn;
  public Name $name;
}

class AppPackagesCleanup {
}

class CreateNetworkProfileRequest {
  public Long $uplink_delay_ms;
  public Long $uplink_jitter_ms;
  public NetworkProfileType $type;
  public Long $uplink_bandwidth_bits;
  public Long $downlink_bandwidth_bits;
  public Long $downlink_delay_ms;
  public Long $downlink_jitter_ms;
  public AmazonResourceName $project_arn;
  public Name $name;
  public Message $description;
  public PercentInteger $uplink_loss_percent;
  public PercentInteger $downlink_loss_percent;
}

class DeviceSelectionResult {
  public DeviceFilters $filters;
  public int $matched_devices_count;
  public int $max_devices;
}

class NetworkProfile {
  public Long $uplink_bandwidth_bits;
  public Long $downlink_bandwidth_bits;
  public Long $uplink_delay_ms;
  public Long $downlink_delay_ms;
  public Long $uplink_jitter_ms;
  public PercentInteger $uplink_loss_percent;
  public AmazonResourceName $arn;
  public NetworkProfileType $type;
  public PercentInteger $downlink_loss_percent;
  public Long $downlink_jitter_ms;
  public Name $name;
  public Message $description;
}

class InstanceProfile {
  public AmazonResourceName $arn;
  public boolean $package_cleanup;
  public PackageIds $exclude_app_packages_from_cleanup;
  public boolean $reboot_after_use;
  public Name $name;
  public Message $description;
}

class ListTestGridSessionActionsRequest {
  public DeviceFarmArn $session_arn;
  public MaxPageSize $max_result;
  public PaginationToken $next_token;
}

class Uploads {
}

class AmazonResourceName {
}

class ArtifactType {
}

class GetAccountSettingsRequest {
}

class ListOfferingTransactionsResult {
  public OfferingTransactions $offering_transactions;
  public PaginationToken $next_token;
}

class Jobs {
}

class OfferingTransactions {
}

class TagKey {
}

class ListDevicePoolsRequest {
  public AmazonResourceName $arn;
  public DevicePoolType $type;
  public PaginationToken $next_token;
}

class ListSamplesRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
}

class ListSamplesResult {
  public Samples $samples;
  public PaginationToken $next_token;
}

class ResourceDescription {
}

class DeviceAttribute {
}

class DevicePool {
  public AmazonResourceName $arn;
  public Name $name;
  public Message $description;
  public DevicePoolType $type;
  public Rules $rules;
  public int $max_devices;
}

class IosPaths {
}

class JobTimeoutMinutes {
}

class TestGridSessionArtifacts {
}

class PaginationToken {
}

class DevicePlatform {
}

class Devices {
}

class ListOfferingsResult {
  public Offerings $offerings;
  public PaginationToken $next_token;
}

class NetworkProfileType {
}

class InvalidOperationException {
  public Message $message;
}

class Resolution {
  public int $width;
  public int $height;
}

class TestGridUrlExpiresInSecondsInput {
}

class CreateInstanceProfileRequest {
  public Name $name;
  public Message $description;
  public boolean $package_cleanup;
  public PackageIds $exclude_app_packages_from_cleanup;
  public boolean $reboot_after_use;
}

class CustomerArtifactPaths {
  public IosPaths $ios_paths;
  public AndroidPaths $android_paths;
  public DeviceHostPaths $device_host_paths;
}

class DeleteNetworkProfileResult {
}

class InstanceProfiles {
}

class GetDeviceRequest {
  public AmazonResourceName $arn;
}

class GetNetworkProfileRequest {
  public AmazonResourceName $arn;
}

class ListRunsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
}

class ListVPCEConfigurationsResult {
  public VPCEConfigurations $vpce_configurations;
  public PaginationToken $next_token;
}

class CreateVPCEConfigurationResult {
  public VPCEConfiguration $vpce_configuration;
}

class Device {
  public CPU $cpu;
  public Resolution $resolution;
  public string $fleet_name;
  public DeviceAvailability $availability;
  public AmazonResourceName $arn;
  public DeviceFormFactor $form_factor;
  public string $os;
  public boolean $remote_access_enabled;
  public DeviceInstances $instances;
  public DevicePlatform $platform;
  public Long $heap_size;
  public string $carrier;
  public string $fleet_type;
  public Name $name;
  public string $manufacturer;
  public string $model;
  public string $radio;
  public boolean $remote_debug_enabled;
  public string $model_id;
  public Long $memory;
  public string $image;
}

class ExceptionMessage {
}

class GetDeviceInstanceResult {
  public DeviceInstance $device_instance;
}

class RenewOfferingRequest {
  public OfferingIdentifier $offering_id;
  public int $quantity;
}

class TestGridProject {
  public DeviceFarmArn $arn;
  public string $name;
  public string $description;
  public DateTime $created;
}

class TestGridSessionActions {
}

class UploadType {
}

class ExecutionResultCode {
}

class GetSuiteRequest {
  public AmazonResourceName $arn;
}

class InstanceLabels {
}

class ListTestGridSessionArtifactsRequest {
  public MaxPageSize $max_result;
  public PaginationToken $next_token;
  public DeviceFarmArn $session_arn;
  public TestGridSessionArtifactCategory $type;
}

class GetVPCEConfigurationResult {
  public VPCEConfiguration $vpce_configuration;
}

class ListJobsResult {
  public PaginationToken $next_token;
  public Jobs $jobs;
}

class Samples {
}

class VPCEConfigurationName {
}

class VPCEServiceName {
}

class BillingMethod {
}

class GetTestResult {
  public Test $test;
}

class ListTagsForResourceRequest {
  public DeviceFarmArn $resource_arn;
}

class RecurringCharges {
}

class ListUniqueProblemsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
}

class OfferingPromotion {
  public OfferingPromotionIdentifier $id;
  public Message $description;
}

class DeleteInstanceProfileResult {
}

class GetTestGridSessionRequest {
  public ResourceId $session_id;
  public DeviceFarmArn $session_arn;
  public DeviceFarmArn $project_arn;
}

class GetTestRequest {
  public AmazonResourceName $arn;
}

class LimitExceededException {
  public Message $message;
}

class GetInstanceProfileResult {
  public InstanceProfile $instance_profile;
}

class GetTestGridProjectResult {
  public TestGridProject $test_grid_project;
}

class UntagResourceResponse {
}

class TestGridSessionArtifactType {
}

class UpdateTestGridProjectRequest {
  public ResourceName $name;
  public ResourceDescription $description;
  public DeviceFarmArn $project_arn;
}

class Artifact {
  public URL $url;
  public AmazonResourceName $arn;
  public Name $name;
  public ArtifactType $type;
  public string $extension;
}

class Counters {
  public int $errored;
  public int $stopped;
  public int $skipped;
  public int $total;
  public int $passed;
  public int $failed;
  public int $warned;
}

class DeviceFilterAttribute {
}

class GetTestGridProjectRequest {
  public DeviceFarmArn $project_arn;
}

class Integer {
}

class ListInstanceProfilesResult {
  public InstanceProfiles $instance_profiles;
  public PaginationToken $next_token;
}

class Radios {
  public boolean $gps;
  public boolean $wifi;
  public boolean $bluetooth;
  public boolean $nfc;
}

class RemoteAccessSession {
  public AmazonResourceName $arn;
  public boolean $remote_record_enabled;
  public HostAddress $host_address;
  public ClientId $client_id;
  public BillingMethod $billing_method;
  public InteractionMode $interaction_mode;
  public DeviceMinutes $device_minutes;
  public SkipAppResign $skip_app_resign;
  public DateTime $created;
  public ExecutionResult $result;
  public Message $message;
  public DateTime $started;
  public DateTime $stopped;
  public AmazonResourceName $remote_record_app_arn;
  public Name $name;
  public Device $device;
  public ExecutionStatus $status;
  public AmazonResourceName $instance_arn;
  public boolean $remote_debug_enabled;
  public string $endpoint;
  public string $device_udid;
}

class Boolean {
}

class DeleteProjectRequest {
  public AmazonResourceName $arn;
}

class PercentInteger {
}

class UpdateProjectResult {
  public Project $project;
}

class CreateProjectResult {
  public Project $project;
}

class DeleteUploadResult {
}

class UpdateVPCEConfigurationRequest {
  public AmazonResourceName $arn;
  public VPCEConfigurationName $vpce_configuration_name;
  public VPCEServiceName $vpce_service_name;
  public ServiceDnsName $service_dns_name;
  public VPCEConfigurationDescription $vpce_configuration_description;
}

class GetOfferingStatusRequest {
  public PaginationToken $next_token;
}

class ListArtifactsRequest {
  public AmazonResourceName $arn;
  public ArtifactCategory $type;
  public PaginationToken $next_token;
}

class ListProjectsRequest {
  public PaginationToken $next_token;
  public AmazonResourceName $arn;
}

class String {
}

class AWSAccountNumber {
}

class AccountSettings {
  public JobTimeoutMinutes $max_job_timeout_minutes;
  public TrialMinutes $trial_minutes;
  public MaxSlotMap $max_slots;
  public JobTimeoutMinutes $default_job_timeout_minutes;
  public SkipAppResign $skip_app_resign;
  public AWSAccountNumber $aws_account_number;
  public PurchasedDevicesMap $unmetered_devices;
  public PurchasedDevicesMap $unmetered_remote_access_devices;
}

class StopJobRequest {
  public AmazonResourceName $arn;
}

class StopJobResult {
  public Job $job;
}

class StopRunRequest {
  public AmazonResourceName $arn;
}

class DeviceFarmArn {
}

class DevicePoolCompatibilityResult {
  public Device $device;
  public boolean $compatible;
  public IncompatibilityMessages $incompatibility_messages;
}

class ListTestGridProjectsResult {
  public TestGridProjects $test_grid_projects;
  public PaginationToken $next_token;
}

class OfferingPromotionIdentifier {
}

class DeleteInstanceProfileRequest {
  public AmazonResourceName $arn;
}

class GetDevicePoolCompatibilityResult {
  public DevicePoolCompatibilityResults $incompatible_devices;
  public DevicePoolCompatibilityResults $compatible_devices;
}

class OfferingStatusMap {
}

class UpdateDevicePoolRequest {
  public AmazonResourceName $arn;
  public Name $name;
  public Message $description;
  public Rules $rules;
  public int $max_devices;
  public boolean $clear_max_devices;
}

class UpdateVPCEConfigurationResult {
  public VPCEConfiguration $vpce_configuration;
}

class ListTestsResult {
  public PaginationToken $next_token;
  public Tests $tests;
}

class Long {
}

class OfferingTransactionType {
}

class UpdateDeviceInstanceRequest {
  public AmazonResourceName $arn;
  public AmazonResourceName $profile_arn;
  public InstanceLabels $labels;
}

class GetRunRequest {
  public AmazonResourceName $arn;
}

class ListTestGridSessionActionsResult {
  public TestGridSessionActions $actions;
  public PaginationToken $next_token;
}

class NotEligibleException {
  public Message $message;
}

class UploadCategory {
}

class Run {
  public AmazonResourceName $arn;
  public int $completed_jobs;
  public BillingMethod $billing_method;
  public string $web_url;
  public SkipAppResign $skip_app_resign;
  public int $seed;
  public JobTimeoutMinutes $job_timeout_minutes;
  public DeviceMinutes $device_minutes;
  public ExecutionResultCode $result_code;
  public Radios $radios;
  public CustomerArtifactPaths $customer_artifact_paths;
  public DeviceSelectionResult $device_selection_result;
  public DateTime $stopped;
  public int $total_jobs;
  public int $event_count;
  public string $locale;
  public Name $name;
  public Counters $counters;
  public Message $message;
  public NetworkProfile $network_profile;
  public AmazonResourceName $app_upload;
  public Location $location;
  public DateTime $created;
  public ExecutionResult $result;
  public DateTime $started;
  public string $parsing_result_url;
  public AmazonResourceName $device_pool_arn;
  public AmazonResourceName $test_spec_arn;
  public TestType $type;
  public DevicePlatform $platform;
  public ExecutionStatus $status;
}

class Sample {
  public AmazonResourceName $arn;
  public SampleType $type;
  public URL $url;
}

class CreateTestGridUrlResult {
  public string $url;
  public DateTime $expires;
}

class DeleteNetworkProfileRequest {
  public AmazonResourceName $arn;
}

class DeviceHostPaths {
}

class Double {
}

class Problems {
}

class TagValue {
}

class ClientId {
}

class GetUploadResult {
  public Upload $upload;
}

class GetVPCEConfigurationRequest {
  public AmazonResourceName $arn;
}

class Offering {
  public OfferingIdentifier $id;
  public Message $description;
  public OfferingType $type;
  public DevicePlatform $platform;
  public RecurringCharges $recurring_charges;
}

class GetDevicePoolCompatibilityRequest {
  public ScheduleRunTest $test;
  public ScheduleRunConfiguration $configuration;
  public AmazonResourceName $device_pool_arn;
  public AmazonResourceName $app_arn;
  public TestType $test_type;
}

class GetDeviceResult {
  public Device $device;
}

class ListTestGridProjectsRequest {
  public MaxPageSize $max_result;
  public PaginationToken $next_token;
}

class TestType {
}

class ListVPCEConfigurationsRequest {
  public PaginationToken $next_token;
  public int $max_results;
}

class OfferingTransaction {
  public OfferingStatus $offering_status;
  public TransactionIdentifier $transaction_id;
  public OfferingPromotionIdentifier $offering_promotion_id;
  public DateTime $created_on;
  public MonetaryAmount $cost;
}

class Runs {
}

class StopRunResult {
  public Run $run;
}

class RecurringChargeFrequency {
}

class TagList {
}

class ArgumentException {
  public Message $message;
}

class CreateRemoteAccessSessionResult {
  public RemoteAccessSession $remote_access_session;
}

class HostAddress {
}

class Message {
}

class SshPublicKey {
}

class TestGridSessionArtifact {
  public string $filename;
  public TestGridSessionArtifactType $type;
  public string $url;
}

class ExecutionStatus {
}

class IdempotencyException {
  public Message $message;
}

class ListOfferingPromotionsRequest {
  public PaginationToken $next_token;
}

class ServiceDnsName {
}

class InternalServiceException {
  public Message $message;
}

class Problem {
  public ProblemDetail $run;
  public ProblemDetail $job;
  public ProblemDetail $suite;
  public ProblemDetail $test;
  public Device $device;
  public ExecutionResult $result;
  public Message $message;
}

class TestGridProjects {
}

class URL {
}

class GetOfferingStatusResult {
  public OfferingStatusMap $current;
  public OfferingStatusMap $next_period;
  public PaginationToken $next_token;
}

class PurchaseOfferingResult {
  public OfferingTransaction $offering_transaction;
}

class RenewOfferingResult {
  public OfferingTransaction $offering_transaction;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKeyList {
}

class AccountsCleanup {
}

class GetRunResult {
  public Run $run;
}

class ListRunsResult {
  public Runs $runs;
  public PaginationToken $next_token;
}

class PurchaseOfferingRequest {
  public int $quantity;
  public OfferingPromotionIdentifier $offering_promotion_id;
  public OfferingIdentifier $offering_id;
}

class Project {
  public AmazonResourceName $arn;
  public Name $name;
  public JobTimeoutMinutes $default_job_timeout_minutes;
  public DateTime $created;
}

class TestGridSessions {
}

class TransactionIdentifier {
}

class CreateTestGridProjectResult {
  public TestGridProject $test_grid_project;
}

class DeviceMinutes {
  public Double $unmetered;
  public Double $total;
  public Double $metered;
}

class IncompatibilityMessage {
  public Message $message;
  public DeviceAttribute $type;
}

class OfferingIdentifier {
}

class ServiceAccountException {
  public Message $message;
}

class Suite {
  public Name $name;
  public DateTime $created;
  public ExecutionStatus $status;
  public ExecutionResult $result;
  public Counters $counters;
  public AmazonResourceName $arn;
  public DateTime $started;
  public DateTime $stopped;
  public Message $message;
  public DeviceMinutes $device_minutes;
  public TestType $type;
}

class UniqueProblem {
  public Message $message;
  public Problems $problems;
}

class CreateVPCEConfigurationRequest {
  public VPCEConfigurationName $vpce_configuration_name;
  public VPCEServiceName $vpce_service_name;
  public ServiceDnsName $service_dns_name;
  public VPCEConfigurationDescription $vpce_configuration_description;
}

class DeleteVPCEConfigurationResult {
}

class InteractionMode {
}

class RemoteAccessSessions {
}

class ResourceId {
}

class CreateUploadRequest {
  public AmazonResourceName $project_arn;
  public Name $name;
  public UploadType $type;
  public ContentType $content_type;
}

class DeviceSelectionConfiguration {
  public DeviceFilters $filters;
  public int $max_devices;
}

class ExecutionConfiguration {
  public SkipAppResign $skip_app_resign;
  public JobTimeoutMinutes $job_timeout_minutes;
  public AccountsCleanup $accounts_cleanup;
  public AppPackagesCleanup $app_packages_cleanup;
  public VideoCapture $video_capture;
}

class MaxPageSize {
}

class GetProjectRequest {
  public AmazonResourceName $arn;
}

class ListArtifactsResult {
  public Artifacts $artifacts;
  public PaginationToken $next_token;
}

class Tests {
}

class DeviceFormFactor {
}

class ExecutionResult {
}

class Projects {
}

class TagPolicyException {
  public ExceptionMessage $message;
  public AmazonResourceName $resource_name;
}

class DevicePoolCompatibilityResults {
}

class InstallToRemoteAccessSessionRequest {
  public AmazonResourceName $remote_access_session_arn;
  public AmazonResourceName $app_arn;
}

class ListTestGridSessionsResult {
  public TestGridSessions $test_grid_sessions;
  public PaginationToken $next_token;
}

class VPCEConfigurationDescription {
}

class GetUploadRequest {
  public AmazonResourceName $arn;
}

class CreateDevicePoolRequest {
  public Name $name;
  public Message $description;
  public Rules $rules;
  public int $max_devices;
  public AmazonResourceName $project_arn;
}

class CreateDevicePoolResult {
  public DevicePool $device_pool;
}

class DeviceFilterValues {
}

class GetDevicePoolResult {
  public DevicePool $device_pool;
}

class Filter {
}

class GetNetworkProfileResult {
  public NetworkProfile $network_profile;
}

class UpdateTestGridProjectResult {
  public TestGridProject $test_grid_project;
}

class UpdateUploadResult {
  public Upload $upload;
}

class DeleteRunRequest {
  public AmazonResourceName $arn;
}

class ListSuitesRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
}

class ListTestGridSessionArtifactsResult {
  public PaginationToken $next_token;
  public TestGridSessionArtifacts $artifacts;
}

class NetworkProfiles {
}

class ScheduleRunConfiguration {
  public AmazonResourceName $network_profile_arn;
  public string $locale;
  public AmazonResourceNames $vpce_configuration_arns;
  public CustomerArtifactPaths $customer_artifact_paths;
  public Radios $radios;
  public AmazonResourceName $extra_data_package_arn;
  public Location $location;
  public AmazonResourceNames $auxiliary_apps;
  public BillingMethod $billing_method;
}

class UpdateDeviceInstanceResult {
  public DeviceInstance $device_instance;
}

class VPCEConfigurations {
}

class CreateNetworkProfileResult {
  public NetworkProfile $network_profile;
}

class DeviceFilters {
}

class GetRemoteAccessSessionResult {
  public RemoteAccessSession $remote_access_session;
}

class Rules {
}

class GetJobResult {
  public Job $job;
}

class Location {
  public Double $latitude;
  public Double $longitude;
}

class CPU {
  public string $frequency;
  public string $architecture;
  public Double $clock;
}

class CreateProjectRequest {
  public Name $name;
  public JobTimeoutMinutes $default_job_timeout_minutes;
}

class CurrencyCode {
}

class Test {
  public Message $message;
  public DeviceMinutes $device_minutes;
  public AmazonResourceName $arn;
  public TestType $type;
  public ExecutionResult $result;
  public DateTime $started;
  public DateTime $stopped;
  public Name $name;
  public DateTime $created;
  public ExecutionStatus $status;
  public Counters $counters;
}

class GetInstanceProfileRequest {
  public AmazonResourceName $arn;
}

class ListJobsRequest {
  public AmazonResourceName $arn;
  public PaginationToken $next_token;
}

class Metadata {
}

class UpdateDevicePoolResult {
  public DevicePool $device_pool;
}

class DeleteTestGridProjectRequest {
  public DeviceFarmArn $project_arn;
}

class DevicePools {
}

class GetDeviceInstanceRequest {
  public AmazonResourceName $arn;
}

class GetDevicePoolRequest {
  public AmazonResourceName $arn;
}

class UpdateNetworkProfileResult {
  public NetworkProfile $network_profile;
}

class ListDeviceInstancesResult {
  public DeviceInstances $device_instances;
  public PaginationToken $next_token;
}

class ListDevicePoolsResult {
  public DevicePools $device_pools;
  public PaginationToken $next_token;
}

class StopRemoteAccessSessionRequest {
  public AmazonResourceName $arn;
}

class UpdateProjectRequest {
  public AmazonResourceName $arn;
  public Name $name;
  public JobTimeoutMinutes $default_job_timeout_minutes;
}

class ArtifactCategory {
}

class CannotDeleteException {
  public Message $message;
}

class DeleteRemoteAccessSessionRequest {
  public AmazonResourceName $arn;
}

class GetProjectResult {
  public Project $project;
}

class Upload {
  public Name $name;
  public DateTime $created;
  public UploadType $type;
  public UploadStatus $status;
  public Metadata $metadata;
  public ContentType $content_type;
  public Message $message;
  public UploadCategory $category;
  public AmazonResourceName $arn;
  public URL $url;
}

class StopRemoteAccessSessionResult {
  public RemoteAccessSession $remote_access_session;
}

class DeviceInstances {
}

class GetSuiteResult {
  public Suite $suite;
}

class Name {
}

class OfferingPromotions {
}

class ListRemoteAccessSessionsResult {
  public RemoteAccessSessions $remote_access_sessions;
  public PaginationToken $next_token;
}

class TooManyTagsException {
  public ExceptionMessage $message;
  public AmazonResourceName $resource_name;
}

class UpdateInstanceProfileRequest {
  public boolean $package_cleanup;
  public PackageIds $exclude_app_packages_from_cleanup;
  public boolean $reboot_after_use;
  public AmazonResourceName $arn;
  public Name $name;
  public Message $description;
}

class CreateRemoteAccessSessionRequest {
  public AmazonResourceName $project_arn;
  public boolean $remote_debug_enabled;
  public AmazonResourceName $remote_record_app_arn;
  public Name $name;
  public boolean $skip_app_resign;
  public InteractionMode $interaction_mode;
  public AmazonResourceName $device_arn;
  public AmazonResourceName $instance_arn;
  public SshPublicKey $ssh_public_key;
  public boolean $remote_record_enabled;
  public ClientId $client_id;
  public CreateRemoteAccessSessionConfiguration $configuration;
}

class CreateTestGridUrlRequest {
  public DeviceFarmArn $project_arn;
  public TestGridUrlExpiresInSecondsInput $expires_in_seconds;
}

class DateTime {
}

class ListDeviceInstancesRequest {
  public int $max_results;
  public PaginationToken $next_token;
}

class Job {
  public Counters $counters;
  public Message $message;
  public DateTime $created;
  public AmazonResourceName $instance_arn;
  public DeviceMinutes $device_minutes;
  public string $video_endpoint;
  public VideoCapture $video_capture;
  public ExecutionResult $result;
  public DateTime $stopped;
  public TestType $type;
  public ExecutionStatus $status;
  public DateTime $started;
  public Device $device;
  public AmazonResourceName $arn;
  public Name $name;
}

class TestGridSessionArtifactCategory {
}

class DeviceFilter {
  public RuleOperator $operator;
  public DeviceFilterValues $values;
  public DeviceFilterAttribute $attribute;
}

class InstallToRemoteAccessSessionResult {
  public Upload $app_upload;
}

class ProblemDetail {
  public AmazonResourceName $arn;
  public Name $name;
}

class GetTestGridSessionResult {
  public TestGridSession $test_grid_session;
}

class ListOfferingTransactionsRequest {
  public PaginationToken $next_token;
}

class ListProjectsResult {
  public Projects $projects;
  public PaginationToken $next_token;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class Artifacts {
}

class CreateTestGridProjectRequest {
  public ResourceName $name;
  public ResourceDescription $description;
}

class DeleteRemoteAccessSessionResult {
}

class DeleteVPCEConfigurationRequest {
  public AmazonResourceName $arn;
}

class TagResourceResponse {
}

class VPCEConfiguration {
  public AmazonResourceName $arn;
  public VPCEConfigurationName $vpce_configuration_name;
  public VPCEServiceName $vpce_service_name;
  public ServiceDnsName $service_dns_name;
  public VPCEConfigurationDescription $vpce_configuration_description;
}

class NotFoundException {
  public Message $message;
}

class OfferingStatus {
  public OfferingTransactionType $type;
  public Offering $offering;
  public int $quantity;
  public DateTime $effective_on;
}

class PackageIds {
}

class ResourceName {
}

