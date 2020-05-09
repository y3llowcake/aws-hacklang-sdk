<?hh // strict
namespace slack\aws\ecs;

interface ECS {
  public function CreateTaskSet(CreateTaskSetRequest) Awaitable<Errors\Result<CreateTaskSetResponse>>;
  public function DeleteCluster(DeleteClusterRequest) Awaitable<Errors\Result<DeleteClusterResponse>>;
  public function DescribeClusters(DescribeClustersRequest) Awaitable<Errors\Result<DescribeClustersResponse>>;
  public function ListContainerInstances(ListContainerInstancesRequest) Awaitable<Errors\Result<ListContainerInstancesResponse>>;
  public function RunTask(RunTaskRequest) Awaitable<Errors\Result<RunTaskResponse>>;
  public function UpdateClusterSettings(UpdateClusterSettingsRequest) Awaitable<Errors\Result<UpdateClusterSettingsResponse>>;
  public function CreateService(CreateServiceRequest) Awaitable<Errors\Result<CreateServiceResponse>>;
  public function ListTaskDefinitionFamilies(ListTaskDefinitionFamiliesRequest) Awaitable<Errors\Result<ListTaskDefinitionFamiliesResponse>>;
  public function RegisterContainerInstance(RegisterContainerInstanceRequest) Awaitable<Errors\Result<RegisterContainerInstanceResponse>>;
  public function RegisterTaskDefinition(RegisterTaskDefinitionRequest) Awaitable<Errors\Result<RegisterTaskDefinitionResponse>>;
  public function SubmitTaskStateChange(SubmitTaskStateChangeRequest) Awaitable<Errors\Result<SubmitTaskStateChangeResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function DescribeTaskSets(DescribeTaskSetsRequest) Awaitable<Errors\Result<DescribeTaskSetsResponse>>;
  public function PutAccountSettingDefault(PutAccountSettingDefaultRequest) Awaitable<Errors\Result<PutAccountSettingDefaultResponse>>;
  public function StopTask(StopTaskRequest) Awaitable<Errors\Result<StopTaskResponse>>;
  public function UpdateContainerInstancesState(UpdateContainerInstancesStateRequest) Awaitable<Errors\Result<UpdateContainerInstancesStateResponse>>;
  public function ListAccountSettings(ListAccountSettingsRequest) Awaitable<Errors\Result<ListAccountSettingsResponse>>;
  public function ListClusters(ListClustersRequest) Awaitable<Errors\Result<ListClustersResponse>>;
  public function ListTaskDefinitions(ListTaskDefinitionsRequest) Awaitable<Errors\Result<ListTaskDefinitionsResponse>>;
  public function ListTasks(ListTasksRequest) Awaitable<Errors\Result<ListTasksResponse>>;
  public function StartTask(StartTaskRequest) Awaitable<Errors\Result<StartTaskResponse>>;
  public function DeleteTaskSet(DeleteTaskSetRequest) Awaitable<Errors\Result<DeleteTaskSetResponse>>;
  public function DeregisterContainerInstance(DeregisterContainerInstanceRequest) Awaitable<Errors\Result<DeregisterContainerInstanceResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UpdateService(UpdateServiceRequest) Awaitable<Errors\Result<UpdateServiceResponse>>;
  public function UpdateServicePrimaryTaskSet(UpdateServicePrimaryTaskSetRequest) Awaitable<Errors\Result<UpdateServicePrimaryTaskSetResponse>>;
  public function DescribeServices(DescribeServicesRequest) Awaitable<Errors\Result<DescribeServicesResponse>>;
  public function DescribeTasks(DescribeTasksRequest) Awaitable<Errors\Result<DescribeTasksResponse>>;
  public function ListAttributes(ListAttributesRequest) Awaitable<Errors\Result<ListAttributesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutClusterCapacityProviders(PutClusterCapacityProvidersRequest) Awaitable<Errors\Result<PutClusterCapacityProvidersResponse>>;
  public function UpdateContainerAgent(UpdateContainerAgentRequest) Awaitable<Errors\Result<UpdateContainerAgentResponse>>;
  public function CreateCluster(CreateClusterRequest) Awaitable<Errors\Result<CreateClusterResponse>>;
  public function DeleteAccountSetting(DeleteAccountSettingRequest) Awaitable<Errors\Result<DeleteAccountSettingResponse>>;
  public function DeleteService(DeleteServiceRequest) Awaitable<Errors\Result<DeleteServiceResponse>>;
  public function DescribeContainerInstances(DescribeContainerInstancesRequest) Awaitable<Errors\Result<DescribeContainerInstancesResponse>>;
  public function DescribeTaskDefinition(DescribeTaskDefinitionRequest) Awaitable<Errors\Result<DescribeTaskDefinitionResponse>>;
  public function PutAccountSetting(PutAccountSettingRequest) Awaitable<Errors\Result<PutAccountSettingResponse>>;
  public function PutAttributes(PutAttributesRequest) Awaitable<Errors\Result<PutAttributesResponse>>;
  public function SubmitAttachmentStateChanges(SubmitAttachmentStateChangesRequest) Awaitable<Errors\Result<SubmitAttachmentStateChangesResponse>>;
  public function UpdateTaskSet(UpdateTaskSetRequest) Awaitable<Errors\Result<UpdateTaskSetResponse>>;
  public function CreateCapacityProvider(CreateCapacityProviderRequest) Awaitable<Errors\Result<CreateCapacityProviderResponse>>;
  public function DeleteAttributes(DeleteAttributesRequest) Awaitable<Errors\Result<DeleteAttributesResponse>>;
  public function DeregisterTaskDefinition(DeregisterTaskDefinitionRequest) Awaitable<Errors\Result<DeregisterTaskDefinitionResponse>>;
  public function DescribeCapacityProviders(DescribeCapacityProvidersRequest) Awaitable<Errors\Result<DescribeCapacityProvidersResponse>>;
  public function DiscoverPollEndpoint(DiscoverPollEndpointRequest) Awaitable<Errors\Result<DiscoverPollEndpointResponse>>;
  public function ListServices(ListServicesRequest) Awaitable<Errors\Result<ListServicesResponse>>;
  public function SubmitContainerStateChange(SubmitContainerStateChangeRequest) Awaitable<Errors\Result<SubmitContainerStateChangeResponse>>;
}

class PutClusterCapacityProvidersResponse {
  public Cluster $cluster;
}

class UpdateServiceRequest {
  public string $cluster;
  public string $service;
  public BoxedInteger $desired_count;
  public string $task_definition;
  public CapacityProviderStrategy $capacity_provider_strategy;
  public DeploymentConfiguration $deployment_configuration;
  public boolean $force_new_deployment;
  public NetworkConfiguration $network_configuration;
  public PlacementConstraints $placement_constraints;
  public PlacementStrategies $placement_strategy;
  public string $platform_version;
  public BoxedInteger $health_check_grace_period_seconds;
}

class AssignPublicIp {
}

class CreateServiceRequest {
  public Tags $tags;
  public string $cluster;
  public string $task_definition;
  public CapacityProviderStrategy $capacity_provider_strategy;
  public DeploymentConfiguration $deployment_configuration;
  public SchedulingStrategy $scheduling_strategy;
  public DeploymentController $deployment_controller;
  public BoxedInteger $health_check_grace_period_seconds;
  public boolean $enable_ecs_managed_tags;
  public ServiceRegistries $service_registries;
  public string $client_token;
  public LaunchType $launch_type;
  public PlacementConstraints $placement_constraints;
  public PlacementStrategies $placement_strategy;
  public NetworkConfiguration $network_configuration;
  public string $platform_version;
  public string $role;
  public string $service_name;
  public LoadBalancers $load_balancers;
  public BoxedInteger $desired_count;
  public PropagateTags $propagate_tags;
}

class KernelCapabilities {
  public StringList $add;
  public StringList $drop;
}

class ServiceNotFoundException {
}

class StopTaskResponse {
  public Task $task;
}

class VolumeFromList {
}

class Container {
  public string $cpu;
  public string $task_arn;
  public string $runtime_id;
  public string $last_status;
  public BoxedInteger $exit_code;
  public string $image;
  public string $memory;
  public GpuIds $gpu_ids;
  public string $reason;
  public NetworkInterfaces $network_interfaces;
  public HealthStatus $health_status;
  public string $memory_reservation;
  public string $container_arn;
  public string $name;
  public string $image_digest;
  public NetworkBindings $network_bindings;
}

class ContainerCondition {
}

class DescribeContainerInstancesRequest {
  public string $cluster;
  public StringList $container_instances;
  public ContainerInstanceFieldList $include;
}

class PutClusterCapacityProvidersRequest {
  public StringList $capacity_providers;
  public CapacityProviderStrategy $default_capacity_provider_strategy;
  public string $cluster;
}

class Resources {
}

class UnsupportedFeatureException {
}

class KeyValuePair {
  public string $name;
  public string $value;
}

class ContainerDependencies {
}

class ContainerDependency {
  public string $container_name;
  public ContainerCondition $condition;
}

class ProxyConfigurationProperties {
}

class SchedulingStrategy {
}

class DescribeServicesRequest {
  public string $cluster;
  public StringList $services;
  public ServiceFieldList $include;
}

class Tags {
}

class ContainerOverrides {
}

class CreateTaskSetRequest {
  public string $platform_version;
  public Tags $tags;
  public string $service;
  public string $cluster;
  public string $task_definition;
  public ServiceRegistries $service_registries;
  public LaunchType $launch_type;
  public string $client_token;
  public string $external_id;
  public NetworkConfiguration $network_configuration;
  public LoadBalancers $load_balancers;
  public CapacityProviderStrategy $capacity_provider_strategy;
  public Scale $scale;
}

class DeleteClusterRequest {
  public string $cluster;
}

class PortMapping {
  public TransportProtocol $protocol;
  public BoxedInteger $container_port;
  public BoxedInteger $host_port;
}

class ResourceRequirement {
  public string $value;
  public ResourceType $type;
}

class ServiceFieldList {
}

class ClusterSetting {
  public string $value;
  public ClusterSettingName $name;
}

class CreateCapacityProviderResponse {
  public CapacityProvider $capacity_provider;
}

class LimitExceededException {
}

class PlacementConstraints {
}

class SystemControl {
  public string $namespace;
  public string $value;
}

class Ulimit {
  public UlimitName $name;
  public int $soft_limit;
  public int $hard_limit;
}

class ClusterNotFoundException {
}

class DesiredStatus {
}

class HostEntryList {
}

class ManagedTerminationProtection {
}

class RegisterContainerInstanceResponse {
  public ContainerInstance $container_instance;
}

class ServiceRegistry {
  public string $registry_arn;
  public BoxedInteger $port;
  public string $container_name;
  public BoxedInteger $container_port;
}

class StringMap {
}

class AccessDeniedException {
}

class BlockedException {
}

class Resource {
  public Long $long_value;
  public int $integer_value;
  public StringList $string_set_value;
  public string $name;
  public string $type;
  public Double $double_value;
}

class DescribeTaskSetsRequest {
  public string $cluster;
  public string $service;
  public StringList $task_sets;
  public TaskSetFieldList $include;
}

class ListAccountSettingsResponse {
  public Settings $settings;
  public string $next_token;
}

class ListTasksRequest {
  public string $family;
  public string $started_by;
  public string $service_name;
  public DesiredStatus $desired_status;
  public string $cluster;
  public string $container_instance;
  public string $next_token;
  public BoxedInteger $max_results;
  public LaunchType $launch_type;
}

class LogDriver {
}

class ServerException {
  public string $message;
}

class StartTaskRequest {
  public TaskOverride $overrides;
  public string $reference_id;
  public string $started_by;
  public string $cluster;
  public NetworkConfiguration $network_configuration;
  public string $group;
  public PropagateTags $propagate_tags;
  public Tags $tags;
  public string $task_definition;
  public StringList $container_instances;
  public boolean $enable_ecs_managed_tags;
}

class Tmpfs {
  public string $container_path;
  public int $size;
  public StringList $mount_options;
}

class PutAccountSettingRequest {
  public SettingName $name;
  public string $value;
  public string $principal_arn;
}

class ResourceRequirements {
}

class RepositoryCredentials {
  public string $credentials_parameter;
}

class Clusters {
}

class ListClustersRequest {
  public string $next_token;
  public BoxedInteger $max_results;
}

class Secret {
  public string $name;
  public string $value_from;
}

class StabilityStatus {
}

class TargetType {
}

class HostEntry {
  public string $hostname;
  public string $ip_address;
}

class ListTasksResponse {
  public StringList $task_arns;
  public string $next_token;
}

class LogConfigurationOptionsMap {
}

class PlacementStrategyType {
}

class TransportProtocol {
}

class CreateClusterResponse {
  public Cluster $cluster;
}

class Deployments {
}

class SubmitTaskStateChangeResponse {
  public string $acknowledgment;
}

class TaskDefinitionPlacementConstraint {
  public TaskDefinitionPlacementConstraintType $type;
  public string $expression;
}

class VersionInfo {
  public string $agent_version;
  public string $agent_hash;
  public string $docker_version;
}

class DescribeContainerInstancesResponse {
  public ContainerInstances $container_instances;
  public Failures $failures;
}

class PutAttributesResponse {
  public Attributes $attributes;
}

class TaskFieldList {
}

class ClientException {
  public string $message;
}

class DescribeCapacityProvidersResponse {
  public CapacityProviders $capacity_providers;
  public Failures $failures;
  public string $next_token;
}

class DiscoverPollEndpointResponse {
  public string $endpoint;
  public string $telemetry_endpoint;
}

class DockerLabelsMap {
}

class Settings {
}

class TagResourceResponse {
}

class DescribeTaskDefinitionResponse {
  public TaskDefinition $task_definition;
  public Tags $tags;
}

class LaunchType {
}

class PutAccountSettingDefaultRequest {
  public SettingName $name;
  public string $value;
}

class SubmitContainerStateChangeRequest {
  public string $container_name;
  public string $runtime_id;
  public string $status;
  public BoxedInteger $exit_code;
  public string $reason;
  public NetworkBindings $network_bindings;
  public string $cluster;
  public string $task;
}

class UpdateTaskSetResponse {
  public TaskSet $task_set;
}

class VolumeFrom {
  public string $source_container;
  public BoxedBoolean $read_only;
}

class CapacityProviders {
}

class ContainerDefinitions {
}

class DeleteAttributesResponse {
  public Attributes $attributes;
}

class NetworkBinding {
  public BoxedInteger $host_port;
  public TransportProtocol $protocol;
  public string $bind_ip;
  public BoxedInteger $container_port;
}

class PlatformDeviceType {
}

class UpdateContainerAgentRequest {
  public string $cluster;
  public string $container_instance;
}

class CapacityProviderStatus {
}

class SubmitTaskStateChangeRequest {
  public ContainerStateChanges $containers;
  public Timestamp $pull_stopped_at;
  public Timestamp $execution_stopped_at;
  public string $task;
  public string $status;
  public string $reason;
  public string $cluster;
  public AttachmentStateChanges $attachments;
  public Timestamp $pull_started_at;
}

class TagResourceRequest {
  public string $resource_arn;
  public Tags $tags;
}

class UlimitName {
}

class UpdateClusterSettingsRequest {
  public string $cluster;
  public ClusterSettings $settings;
}

class UpdateContainerInstancesStateResponse {
  public ContainerInstances $container_instances;
  public Failures $failures;
}

class Boolean {
}

class DeleteTaskSetResponse {
  public TaskSet $task_set;
}

class DevicesList {
}

class InferenceAcceleratorOverride {
  public string $device_name;
  public string $device_type;
}

class ListAccountSettingsRequest {
  public SettingName $name;
  public string $value;
  public string $principal_arn;
  public boolean $effective_settings;
  public string $next_token;
  public int $max_results;
}

class SecretList {
}

class DeleteAccountSettingResponse {
  public Setting $setting;
}

class DeploymentController {
  public DeploymentControllerType $type;
}

class ListAttributesResponse {
  public Attributes $attributes;
  public string $next_token;
}

class ListTaskDefinitionsResponse {
  public StringList $task_definition_arns;
  public string $next_token;
}

class ManagedScalingStepSize {
}

class UntagResourceResponse {
}

class UpdateServiceResponse {
  public Service $service;
}

class AutoScalingGroupProvider {
  public ManagedScaling $managed_scaling;
  public ManagedTerminationProtection $managed_termination_protection;
  public string $auto_scaling_group_arn;
}

class CapacityProviderStrategyItemWeight {
}

class ClusterContainsContainerInstancesException {
}

class InferenceAccelerator {
  public string $device_name;
  public string $device_type;
}

class ListServicesRequest {
  public SchedulingStrategy $scheduling_strategy;
  public string $cluster;
  public string $next_token;
  public BoxedInteger $max_results;
  public LaunchType $launch_type;
}

class ResourceNotFoundException {
}

class ServiceEvents {
}

class TaskSet {
  public int $computed_desired_count;
  public int $running_count;
  public StabilityStatus $stability_status;
  public Timestamp $stability_status_at;
  public string $id;
  public LaunchType $launch_type;
  public CapacityProviderStrategy $capacity_provider_strategy;
  public LoadBalancers $load_balancers;
  public Timestamp $updated_at;
  public string $service_arn;
  public string $started_by;
  public string $status;
  public string $task_definition;
  public string $platform_version;
  public ServiceRegistries $service_registries;
  public Tags $tags;
  public string $task_set_arn;
  public string $external_id;
  public int $pending_count;
  public Timestamp $created_at;
  public NetworkConfiguration $network_configuration;
  public Scale $scale;
  public string $cluster_arn;
}

class UntagResourceRequest {
  public TagKeys $tag_keys;
  public string $resource_arn;
}

class Volume {
  public string $name;
  public HostVolumeProperties $host;
  public DockerVolumeConfiguration $docker_volume_configuration;
  public EFSVolumeConfiguration $efs_volume_configuration;
}

class CapacityProviderStrategyItemBase {
}

class Failures {
}

class PlatformUnknownException {
}

class TaskSetField {
}

class DescribeServicesResponse {
  public Services $services;
  public Failures $failures;
}

class PutAccountSettingResponse {
  public Setting $setting;
}

class RunTaskResponse {
  public Failures $failures;
  public Tasks $tasks;
}

class ContainerDefinition {
  public string $hostname;
  public HostEntryList $extra_hosts;
  public string $image;
  public int $cpu;
  public MountPointList $mount_points;
  public SecretList $secrets;
  public BoxedInteger $start_timeout;
  public BoxedInteger $stop_timeout;
  public StringList $docker_security_options;
  public UlimitList $ulimits;
  public HealthCheck $health_check;
  public ResourceRequirements $resource_requirements;
  public StringList $dns_servers;
  public BoxedBoolean $interactive;
  public DockerLabelsMap $docker_labels;
  public SystemControls $system_controls;
  public StringList $links;
  public StringList $dns_search_domains;
  public string $name;
  public VolumeFromList $volumes_from;
  public BoxedBoolean $pseudo_terminal;
  public BoxedInteger $memory;
  public BoxedInteger $memory_reservation;
  public EnvironmentVariables $environment;
  public ContainerDependencies $depends_on;
  public BoxedBoolean $disable_networking;
  public BoxedBoolean $readonly_root_filesystem;
  public StringList $entry_point;
  public string $user;
  public FirelensConfiguration $firelens_configuration;
  public RepositoryCredentials $repository_credentials;
  public PortMappingList $port_mappings;
  public BoxedBoolean $essential;
  public LinuxParameters $linux_parameters;
  public BoxedBoolean $privileged;
  public StringList $command;
  public string $working_directory;
  public LogConfiguration $log_configuration;
}

class CreateTaskSetResponse {
  public TaskSet $task_set;
}

class SubmitContainerStateChangeResponse {
  public string $acknowledgment;
}

class TagKey {
}

class AgentUpdateStatus {
}

class DockerVolumeConfiguration {
  public StringMap $driver_opts;
  public StringMap $labels;
  public Scope $scope;
  public BoxedBoolean $autoprovision;
  public string $driver;
}

class FirelensConfigurationOptionsMap {
}

class MountPointList {
}

class Scale {
  public Double $value;
  public ScaleUnit $unit;
}

class StopTaskRequest {
  public string $cluster;
  public string $task;
  public string $reason;
}

class TaskDefinitionPlacementConstraintType {
}

class UpdateServicePrimaryTaskSetRequest {
  public string $cluster;
  public string $service;
  public string $primary_task_set;
}

class Cluster {
  public string $status;
  public int $running_tasks_count;
  public int $pending_tasks_count;
  public ClusterSettings $settings;
  public CapacityProviderStrategy $default_capacity_provider_strategy;
  public Attachments $attachments;
  public string $attachments_status;
  public string $cluster_arn;
  public string $cluster_name;
  public int $registered_container_instances_count;
  public int $active_services_count;
  public Tags $tags;
  public Statistics $statistics;
  public StringList $capacity_providers;
}

class ContainerInstanceFieldList {
}

class DeviceCgroupPermissions {
}

class PropagateTags {
}

class ProxyConfiguration {
  public ProxyConfigurationType $type;
  public string $container_name;
  public ProxyConfigurationProperties $properties;
}

class ProxyConfigurationType {
}

class SubmitAttachmentStateChangesRequest {
  public string $cluster;
  public AttachmentStateChanges $attachments;
}

class TaskDefinition {
  public string $memory;
  public string $family;
  public TaskDefinitionStatus $status;
  public CompatibilityList $compatibilities;
  public string $cpu;
  public ProxyConfiguration $proxy_configuration;
  public int $revision;
  public RequiresAttributes $requires_attributes;
  public CompatibilityList $requires_compatibilities;
  public InferenceAccelerators $inference_accelerators;
  public VolumeList $volumes;
  public TaskDefinitionPlacementConstraints $placement_constraints;
  public PidMode $pid_mode;
  public IpcMode $ipc_mode;
  public string $task_definition_arn;
  public ContainerDefinitions $container_definitions;
  public string $task_role_arn;
  public string $execution_role_arn;
  public NetworkMode $network_mode;
}

class NetworkMode {
}

class ServiceRegistries {
}

class TargetNotFoundException {
}

class BoxedInteger {
}

class Compatibility {
}

class CreateClusterRequest {
  public Tags $tags;
  public ClusterSettings $settings;
  public StringList $capacity_providers;
  public CapacityProviderStrategy $default_capacity_provider_strategy;
  public string $cluster_name;
}

class DeviceCgroupPermission {
}

class EFSAuthorizationConfig {
  public string $access_point_id;
  public EFSAuthorizationConfigIAM $iam;
}

class FirelensConfigurationType {
}

class LoadBalancer {
  public string $target_group_arn;
  public string $load_balancer_name;
  public string $container_name;
  public BoxedInteger $container_port;
}

class CreateServiceResponse {
  public Service $service;
}

class Device {
  public string $host_path;
  public string $container_path;
  public DeviceCgroupPermissions $permissions;
}

class ListContainerInstancesRequest {
  public string $filter;
  public string $next_token;
  public BoxedInteger $max_results;
  public ContainerInstanceStatus $status;
  public string $cluster;
}

class RegisterContainerInstanceRequest {
  public Resources $total_resources;
  public Attributes $attributes;
  public PlatformDevices $platform_devices;
  public Tags $tags;
  public string $cluster;
  public string $instance_identity_document_signature;
  public string $container_instance_arn;
  public string $instance_identity_document;
  public VersionInfo $version_info;
}

class TaskDefinitionFieldList {
}

class AwsVpcConfiguration {
  public StringList $subnets;
  public StringList $security_groups;
  public AssignPublicIp $assign_public_ip;
}

class ClusterSettings {
}

class DeregisterTaskDefinitionRequest {
  public string $task_definition;
}

class LinuxParameters {
  public BoxedInteger $max_swap;
  public BoxedInteger $swappiness;
  public KernelCapabilities $capabilities;
  public DevicesList $devices;
  public BoxedBoolean $init_process_enabled;
  public BoxedInteger $shared_memory_size;
  public TmpfsList $tmpfs;
}

class Tasks {
}

class AttachmentStateChanges {
}

class DeregisterContainerInstanceRequest {
  public string $container_instance;
  public BoxedBoolean $force;
  public string $cluster;
}

class InferenceAccelerators {
}

class PutAccountSettingDefaultResponse {
  public Setting $setting;
}

class UlimitList {
}

class UpdateInProgressException {
}

class CapacityProviderStrategy {
}

class FirelensConfiguration {
  public FirelensConfigurationOptionsMap $options;
  public FirelensConfigurationType $type;
}

class PlatformDevice {
  public string $id;
  public PlatformDeviceType $type;
}

class Attachments {
}

class DeregisterTaskDefinitionResponse {
  public TaskDefinition $task_definition;
}

class Setting {
  public string $value;
  public string $principal_arn;
  public SettingName $name;
}

class Task {
  public Attachments $attachments;
  public string $started_by;
  public Long $version;
  public Timestamp $connectivity_at;
  public string $memory;
  public Timestamp $started_at;
  public string $desired_status;
  public string $group;
  public HealthStatus $health_status;
  public string $platform_version;
  public Tags $tags;
  public string $availability_zone;
  public Containers $containers;
  public Timestamp $created_at;
  public TaskStopCode $stop_code;
  public string $task_definition_arn;
  public string $capacity_provider_name;
  public Timestamp $pull_stopped_at;
  public InferenceAccelerators $inference_accelerators;
  public TaskOverride $overrides;
  public Timestamp $stopping_at;
  public string $cluster_arn;
  public string $container_instance_arn;
  public string $cpu;
  public string $stopped_reason;
  public Connectivity $connectivity;
  public string $last_status;
  public Timestamp $pull_started_at;
  public Timestamp $stopped_at;
  public string $task_arn;
  public Attributes $attributes;
  public Timestamp $execution_stopped_at;
  public LaunchType $launch_type;
}

class UpdateServicePrimaryTaskSetResponse {
  public TaskSet $task_set;
}

class PidMode {
}

class StartTaskResponse {
  public Failures $failures;
  public Tasks $tasks;
}

class String {
}

class SubmitAttachmentStateChangesResponse {
  public string $acknowledgment;
}

class TagKeys {
}

class AttributeLimitExceededException {
}

class ContainerOverride {
  public BoxedInteger $cpu;
  public BoxedInteger $memory;
  public BoxedInteger $memory_reservation;
  public ResourceRequirements $resource_requirements;
  public string $name;
  public StringList $command;
  public EnvironmentVariables $environment;
}

class PlacementStrategy {
  public PlacementStrategyType $type;
  public string $field;
}

class StringList {
}

class HealthStatus {
}

class ServiceEvent {
  public string $message;
  public string $id;
  public Timestamp $created_at;
}

class CompatibilityList {
}

class DeleteAttributesRequest {
  public string $cluster;
  public Attributes $attributes;
}

class DescribeClustersResponse {
  public Clusters $clusters;
  public Failures $failures;
}

class TaskDefinitionFamilyStatus {
}

class UpdateContainerInstancesStateRequest {
  public string $cluster;
  public StringList $container_instances;
  public ContainerInstanceStatus $status;
}

class VolumeList {
}

class DescribeCapacityProvidersRequest {
  public StringList $capacity_providers;
  public CapacityProviderFieldList $include;
  public BoxedInteger $max_results;
  public string $next_token;
}

class TaskSets {
}

class ClusterSettingName {
}

class DeregisterContainerInstanceResponse {
  public ContainerInstance $container_instance;
}

class PlacementStrategies {
}

class TagValue {
}

class UpdateClusterSettingsResponse {
  public Cluster $cluster;
}

class Deployment {
  public int $desired_count;
  public int $running_count;
  public LaunchType $launch_type;
  public string $platform_version;
  public string $status;
  public string $task_definition;
  public int $pending_count;
  public Timestamp $created_at;
  public Timestamp $updated_at;
  public CapacityProviderStrategy $capacity_provider_strategy;
  public NetworkConfiguration $network_configuration;
  public string $id;
}

class DescribeClustersRequest {
  public ClusterFieldList $include;
  public StringList $clusters;
}

class EFSAuthorizationConfigIAM {
}

class Statistics {
}

class TaskOverride {
  public string $task_role_arn;
  public ContainerOverrides $container_overrides;
  public string $cpu;
  public InferenceAcceleratorOverrides $inference_accelerator_overrides;
  public string $execution_role_arn;
  public string $memory;
}

class Integer {
}

class ListTaskDefinitionFamiliesResponse {
  public StringList $families;
  public string $next_token;
}

class Long {
}

class SortOrder {
}

class TmpfsList {
}

class CapacityProviderFieldList {
}

class DeleteServiceRequest {
  public BoxedBoolean $force;
  public string $cluster;
  public string $service;
}

class DeleteTaskSetRequest {
  public string $cluster;
  public string $service;
  public string $task_set;
  public BoxedBoolean $force;
}

class ListTaskDefinitionFamiliesRequest {
  public string $next_token;
  public BoxedInteger $max_results;
  public string $family_prefix;
  public TaskDefinitionFamilyStatus $status;
}

class ManagedScaling {
  public ManagedScalingTargetCapacity $target_capacity;
  public ManagedScalingStepSize $minimum_scaling_step_size;
  public ManagedScalingStepSize $maximum_scaling_step_size;
  public ManagedScalingStatus $status;
}

class BoxedBoolean {
}

class ClusterFieldList {
}

class ContainerInstances {
}

class DeploymentControllerType {
}

class EnvironmentVariables {
}

class Scope {
}

class UpdateContainerAgentResponse {
  public ContainerInstance $container_instance;
}

class Containers {
}

class DeleteClusterResponse {
  public Cluster $cluster;
}

class InvalidParameterException {
}

class ListContainerInstancesResponse {
  public StringList $container_instance_arns;
  public string $next_token;
}

class ListTaskDefinitionsRequest {
  public SortOrder $sort;
  public string $next_token;
  public BoxedInteger $max_results;
  public string $family_prefix;
  public TaskDefinitionStatus $status;
}

class NetworkInterface {
  public string $attachment_id;
  public string $private_ipv_4_address;
  public string $ipv_6_address;
}

class RequiresAttributes {
}

class ClusterContainsTasksException {
}

class ContainerInstance {
  public string $status_reason;
  public string $capacity_provider_name;
  public int $running_tasks_count;
  public Tags $tags;
  public string $ec_2_instance_id;
  public Long $version;
  public VersionInfo $version_info;
  public Resources $registered_resources;
  public string $status;
  public int $pending_tasks_count;
  public AgentUpdateStatus $agent_update_status;
  public Attributes $attributes;
  public string $container_instance_arn;
  public Attachments $attachments;
  public Timestamp $registered_at;
  public boolean $agent_connected;
  public Resources $remaining_resources;
}

class ContainerInstanceField {
}

class MissingVersionException {
}

class ResourceType {
}

class ContainerInstanceStatus {
}

class DescribeTasksRequest {
  public TaskFieldList $include;
  public string $cluster;
  public StringList $tasks;
}

class EFSVolumeConfiguration {
  public string $file_system_id;
  public string $root_directory;
  public EFSTransitEncryption $transit_encryption;
  public BoxedInteger $transit_encryption_port;
  public EFSAuthorizationConfig $authorization_config;
}

class ListTagsForResourceRequest {
  public string $resource_arn;
}

class Services {
}

class TaskDefinitionPlacementConstraints {
}

class Attributes {
}

class CapacityProviderField {
}

class PlacementConstraintType {
}

class PlatformDevices {
}

class GpuIds {
}

class RunTaskRequest {
  public NetworkConfiguration $network_configuration;
  public TaskOverride $overrides;
  public CapacityProviderStrategy $capacity_provider_strategy;
  public LaunchType $launch_type;
  public string $started_by;
  public BoxedInteger $count;
  public boolean $enable_ecs_managed_tags;
  public PropagateTags $propagate_tags;
  public string $reference_id;
  public Tags $tags;
  public string $cluster;
  public string $group;
  public PlacementConstraints $placement_constraints;
  public PlacementStrategies $placement_strategy;
  public string $platform_version;
  public string $task_definition;
}

class ScaleUnit {
}

class TaskDefinitionField {
}

class TaskDefinitionStatus {
}

class AttachmentDetails {
}

class AttachmentStateChange {
  public string $attachment_arn;
  public string $status;
}

class ClusterField {
}

class DeleteAccountSettingRequest {
  public SettingName $name;
  public string $principal_arn;
}

class DeploymentConfiguration {
  public BoxedInteger $maximum_percent;
  public BoxedInteger $minimum_healthy_percent;
}

class Attachment {
  public string $id;
  public string $type;
  public string $status;
  public AttachmentDetails $details;
}

class CapacityProviderStrategyItem {
  public string $capacity_provider;
  public CapacityProviderStrategyItemWeight $weight;
  public CapacityProviderStrategyItemBase $base;
}

class HostVolumeProperties {
  public string $source_path;
}

class TaskField {
}

class Attribute {
  public string $name;
  public string $value;
  public TargetType $target_type;
  public string $target_id;
}

class IpcMode {
}

class ListAttributesRequest {
  public string $cluster;
  public TargetType $target_type;
  public string $attribute_name;
  public string $attribute_value;
  public string $next_token;
  public BoxedInteger $max_results;
}

class PlatformTaskDefinitionIncompatibilityException {
}

class Service {
  public PlacementConstraints $placement_constraints;
  public SchedulingStrategy $scheduling_strategy;
  public DeploymentController $deployment_controller;
  public LaunchType $launch_type;
  public CapacityProviderStrategy $capacity_provider_strategy;
  public string $status;
  public string $platform_version;
  public string $service_arn;
  public ServiceRegistries $service_registries;
  public int $pending_count;
  public Deployments $deployments;
  public string $role_arn;
  public Timestamp $created_at;
  public Tags $tags;
  public string $created_by;
  public LoadBalancers $load_balancers;
  public int $desired_count;
  public ServiceEvents $events;
  public boolean $enable_ecs_managed_tags;
  public DeploymentConfiguration $deployment_configuration;
  public NetworkConfiguration $network_configuration;
  public string $cluster_arn;
  public TaskSets $task_sets;
  public int $running_count;
  public PropagateTags $propagate_tags;
  public PlacementStrategies $placement_strategy;
  public BoxedInteger $health_check_grace_period_seconds;
  public string $service_name;
  public string $task_definition;
}

class SettingName {
}

class Failure {
  public string $arn;
  public string $reason;
  public string $detail;
}

class MountPoint {
  public BoxedBoolean $read_only;
  public string $source_volume;
  public string $container_path;
}

class NoUpdateAvailableException {
}

class Timestamp {
}

class DiscoverPollEndpointRequest {
  public string $container_instance;
  public string $cluster;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TaskSetFieldList {
}

class TaskSetNotFoundException {
}

class CreateCapacityProviderRequest {
  public string $name;
  public AutoScalingGroupProvider $auto_scaling_group_provider;
  public Tags $tags;
}

class HealthCheck {
  public BoxedInteger $interval;
  public BoxedInteger $timeout;
  public BoxedInteger $retries;
  public BoxedInteger $start_period;
  public StringList $command;
}

class ListServicesResponse {
  public string $next_token;
  public StringList $service_arns;
}

class PlacementConstraint {
  public PlacementConstraintType $type;
  public string $expression;
}

class RegisterTaskDefinitionRequest {
  public CompatibilityList $requires_compatibilities;
  public ContainerDefinitions $container_definitions;
  public NetworkMode $network_mode;
  public TaskDefinitionPlacementConstraints $placement_constraints;
  public string $memory;
  public InferenceAccelerators $inference_accelerators;
  public string $execution_role_arn;
  public VolumeList $volumes;
  public PidMode $pid_mode;
  public IpcMode $ipc_mode;
  public string $task_role_arn;
  public string $cpu;
  public Tags $tags;
  public ProxyConfiguration $proxy_configuration;
  public string $family;
}

class ServiceField {
}

class ServiceNotActiveException {
}

class ClusterContainsServicesException {
}

class DeleteServiceResponse {
  public Service $service;
}

class Double {
}

class EFSTransitEncryption {
}

class ManagedScalingStatus {
}

class ResourceInUseException {
}

class ContainerStateChange {
  public BoxedInteger $exit_code;
  public NetworkBindings $network_bindings;
  public string $reason;
  public string $status;
  public string $container_name;
  public string $image_digest;
  public string $runtime_id;
}

class ContainerStateChanges {
}

class DescribeTaskDefinitionRequest {
  public TaskDefinitionFieldList $include;
  public string $task_definition;
}

class DescribeTasksResponse {
  public Tasks $tasks;
  public Failures $failures;
}

class LogConfiguration {
  public LogDriver $log_driver;
  public LogConfigurationOptionsMap $options;
  public SecretList $secret_options;
}

class PortMappingList {
}

class RegisterTaskDefinitionResponse {
  public TaskDefinition $task_definition;
  public Tags $tags;
}

class SystemControls {
}

class ListClustersResponse {
  public StringList $cluster_arns;
  public string $next_token;
}

class ManagedScalingTargetCapacity {
}

class NetworkBindings {
}

class TaskStopCode {
}

class UpdateTaskSetRequest {
  public string $task_set;
  public Scale $scale;
  public string $cluster;
  public string $service;
}

class CapacityProvider {
  public string $capacity_provider_arn;
  public string $name;
  public CapacityProviderStatus $status;
  public AutoScalingGroupProvider $auto_scaling_group_provider;
  public Tags $tags;
}

class Connectivity {
}

class DescribeTaskSetsResponse {
  public TaskSets $task_sets;
  public Failures $failures;
}

class InferenceAcceleratorOverrides {
}

class LoadBalancers {
}

class NetworkConfiguration {
  public AwsVpcConfiguration $awsvpc_configuration;
}

class ListTagsForResourceResponse {
  public Tags $tags;
}

class NetworkInterfaces {
}

class PutAttributesRequest {
  public string $cluster;
  public Attributes $attributes;
}

