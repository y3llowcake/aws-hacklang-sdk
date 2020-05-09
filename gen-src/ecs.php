<?hh // strict
namespace slack\aws\ecs;

interface ECS {
  public function CreateCapacityProvider(CreateCapacityProviderRequest) Awaitable<Errors\Result<CreateCapacityProviderResponse>>;
  public function CreateCluster(CreateClusterRequest) Awaitable<Errors\Result<CreateClusterResponse>>;
  public function CreateService(CreateServiceRequest) Awaitable<Errors\Result<CreateServiceResponse>>;
  public function CreateTaskSet(CreateTaskSetRequest) Awaitable<Errors\Result<CreateTaskSetResponse>>;
  public function DeleteAccountSetting(DeleteAccountSettingRequest) Awaitable<Errors\Result<DeleteAccountSettingResponse>>;
  public function DeleteAttributes(DeleteAttributesRequest) Awaitable<Errors\Result<DeleteAttributesResponse>>;
  public function DeleteCluster(DeleteClusterRequest) Awaitable<Errors\Result<DeleteClusterResponse>>;
  public function DeleteService(DeleteServiceRequest) Awaitable<Errors\Result<DeleteServiceResponse>>;
  public function DeleteTaskSet(DeleteTaskSetRequest) Awaitable<Errors\Result<DeleteTaskSetResponse>>;
  public function DeregisterContainerInstance(DeregisterContainerInstanceRequest) Awaitable<Errors\Result<DeregisterContainerInstanceResponse>>;
  public function DeregisterTaskDefinition(DeregisterTaskDefinitionRequest) Awaitable<Errors\Result<DeregisterTaskDefinitionResponse>>;
  public function DescribeCapacityProviders(DescribeCapacityProvidersRequest) Awaitable<Errors\Result<DescribeCapacityProvidersResponse>>;
  public function DescribeClusters(DescribeClustersRequest) Awaitable<Errors\Result<DescribeClustersResponse>>;
  public function DescribeContainerInstances(DescribeContainerInstancesRequest) Awaitable<Errors\Result<DescribeContainerInstancesResponse>>;
  public function DescribeServices(DescribeServicesRequest) Awaitable<Errors\Result<DescribeServicesResponse>>;
  public function DescribeTaskDefinition(DescribeTaskDefinitionRequest) Awaitable<Errors\Result<DescribeTaskDefinitionResponse>>;
  public function DescribeTaskSets(DescribeTaskSetsRequest) Awaitable<Errors\Result<DescribeTaskSetsResponse>>;
  public function DescribeTasks(DescribeTasksRequest) Awaitable<Errors\Result<DescribeTasksResponse>>;
  public function DiscoverPollEndpoint(DiscoverPollEndpointRequest) Awaitable<Errors\Result<DiscoverPollEndpointResponse>>;
  public function ListAccountSettings(ListAccountSettingsRequest) Awaitable<Errors\Result<ListAccountSettingsResponse>>;
  public function ListAttributes(ListAttributesRequest) Awaitable<Errors\Result<ListAttributesResponse>>;
  public function ListClusters(ListClustersRequest) Awaitable<Errors\Result<ListClustersResponse>>;
  public function ListContainerInstances(ListContainerInstancesRequest) Awaitable<Errors\Result<ListContainerInstancesResponse>>;
  public function ListServices(ListServicesRequest) Awaitable<Errors\Result<ListServicesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTaskDefinitionFamilies(ListTaskDefinitionFamiliesRequest) Awaitable<Errors\Result<ListTaskDefinitionFamiliesResponse>>;
  public function ListTaskDefinitions(ListTaskDefinitionsRequest) Awaitable<Errors\Result<ListTaskDefinitionsResponse>>;
  public function ListTasks(ListTasksRequest) Awaitable<Errors\Result<ListTasksResponse>>;
  public function PutAccountSetting(PutAccountSettingRequest) Awaitable<Errors\Result<PutAccountSettingResponse>>;
  public function PutAccountSettingDefault(PutAccountSettingDefaultRequest) Awaitable<Errors\Result<PutAccountSettingDefaultResponse>>;
  public function PutAttributes(PutAttributesRequest) Awaitable<Errors\Result<PutAttributesResponse>>;
  public function PutClusterCapacityProviders(PutClusterCapacityProvidersRequest) Awaitable<Errors\Result<PutClusterCapacityProvidersResponse>>;
  public function RegisterContainerInstance(RegisterContainerInstanceRequest) Awaitable<Errors\Result<RegisterContainerInstanceResponse>>;
  public function RegisterTaskDefinition(RegisterTaskDefinitionRequest) Awaitable<Errors\Result<RegisterTaskDefinitionResponse>>;
  public function RunTask(RunTaskRequest) Awaitable<Errors\Result<RunTaskResponse>>;
  public function StartTask(StartTaskRequest) Awaitable<Errors\Result<StartTaskResponse>>;
  public function StopTask(StopTaskRequest) Awaitable<Errors\Result<StopTaskResponse>>;
  public function SubmitAttachmentStateChanges(SubmitAttachmentStateChangesRequest) Awaitable<Errors\Result<SubmitAttachmentStateChangesResponse>>;
  public function SubmitContainerStateChange(SubmitContainerStateChangeRequest) Awaitable<Errors\Result<SubmitContainerStateChangeResponse>>;
  public function SubmitTaskStateChange(SubmitTaskStateChangeRequest) Awaitable<Errors\Result<SubmitTaskStateChangeResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateClusterSettings(UpdateClusterSettingsRequest) Awaitable<Errors\Result<UpdateClusterSettingsResponse>>;
  public function UpdateContainerAgent(UpdateContainerAgentRequest) Awaitable<Errors\Result<UpdateContainerAgentResponse>>;
  public function UpdateContainerInstancesState(UpdateContainerInstancesStateRequest) Awaitable<Errors\Result<UpdateContainerInstancesStateResponse>>;
  public function UpdateService(UpdateServiceRequest) Awaitable<Errors\Result<UpdateServiceResponse>>;
  public function UpdateServicePrimaryTaskSet(UpdateServicePrimaryTaskSetRequest) Awaitable<Errors\Result<UpdateServicePrimaryTaskSetResponse>>;
  public function UpdateTaskSet(UpdateTaskSetRequest) Awaitable<Errors\Result<UpdateTaskSetResponse>>;
}

class AccessDeniedException {
}

class AgentUpdateStatus {
}

class AssignPublicIp {
}

class Attachment {
  public AttachmentDetails $details;
  public string $id;
  public string $status;
  public string $type;
}

class AttachmentDetails {
}

class AttachmentStateChange {
  public string $attachment_arn;
  public string $status;
}

class AttachmentStateChanges {
}

class Attachments {
}

class Attribute {
  public string $name;
  public string $target_id;
  public TargetType $target_type;
  public string $value;
}

class AttributeLimitExceededException {
}

class Attributes {
}

class AutoScalingGroupProvider {
  public string $auto_scaling_group_arn;
  public ManagedScaling $managed_scaling;
  public ManagedTerminationProtection $managed_termination_protection;
}

class AwsVpcConfiguration {
  public AssignPublicIp $assign_public_ip;
  public StringList $security_groups;
  public StringList $subnets;
}

class BlockedException {
}

class Boolean {
}

class BoxedBoolean {
}

class BoxedInteger {
}

class CapacityProvider {
  public AutoScalingGroupProvider $auto_scaling_group_provider;
  public string $capacity_provider_arn;
  public string $name;
  public CapacityProviderStatus $status;
  public Tags $tags;
}

class CapacityProviderField {
}

class CapacityProviderFieldList {
}

class CapacityProviderStatus {
}

class CapacityProviderStrategy {
}

class CapacityProviderStrategyItem {
  public CapacityProviderStrategyItemBase $base;
  public string $capacity_provider;
  public CapacityProviderStrategyItemWeight $weight;
}

class CapacityProviderStrategyItemBase {
}

class CapacityProviderStrategyItemWeight {
}

class CapacityProviders {
}

class ClientException {
  public string $message;
}

class Cluster {
  public int $active_services_count;
  public Attachments $attachments;
  public string $attachments_status;
  public StringList $capacity_providers;
  public string $cluster_arn;
  public string $cluster_name;
  public CapacityProviderStrategy $default_capacity_provider_strategy;
  public int $pending_tasks_count;
  public int $registered_container_instances_count;
  public int $running_tasks_count;
  public ClusterSettings $settings;
  public Statistics $statistics;
  public string $status;
  public Tags $tags;
}

class ClusterContainsContainerInstancesException {
}

class ClusterContainsServicesException {
}

class ClusterContainsTasksException {
}

class ClusterField {
}

class ClusterFieldList {
}

class ClusterNotFoundException {
}

class ClusterSetting {
  public ClusterSettingName $name;
  public string $value;
}

class ClusterSettingName {
}

class ClusterSettings {
}

class Clusters {
}

class Compatibility {
}

class CompatibilityList {
}

class Connectivity {
}

class Container {
  public string $container_arn;
  public string $cpu;
  public BoxedInteger $exit_code;
  public GpuIds $gpu_ids;
  public HealthStatus $health_status;
  public string $image;
  public string $image_digest;
  public string $last_status;
  public string $memory;
  public string $memory_reservation;
  public string $name;
  public NetworkBindings $network_bindings;
  public NetworkInterfaces $network_interfaces;
  public string $reason;
  public string $runtime_id;
  public string $task_arn;
}

class ContainerCondition {
}

class ContainerDefinition {
  public StringList $command;
  public int $cpu;
  public ContainerDependencies $depends_on;
  public BoxedBoolean $disable_networking;
  public StringList $dns_search_domains;
  public StringList $dns_servers;
  public DockerLabelsMap $docker_labels;
  public StringList $docker_security_options;
  public StringList $entry_point;
  public EnvironmentVariables $environment;
  public BoxedBoolean $essential;
  public HostEntryList $extra_hosts;
  public FirelensConfiguration $firelens_configuration;
  public HealthCheck $health_check;
  public string $hostname;
  public string $image;
  public BoxedBoolean $interactive;
  public StringList $links;
  public LinuxParameters $linux_parameters;
  public LogConfiguration $log_configuration;
  public BoxedInteger $memory;
  public BoxedInteger $memory_reservation;
  public MountPointList $mount_points;
  public string $name;
  public PortMappingList $port_mappings;
  public BoxedBoolean $privileged;
  public BoxedBoolean $pseudo_terminal;
  public BoxedBoolean $readonly_root_filesystem;
  public RepositoryCredentials $repository_credentials;
  public ResourceRequirements $resource_requirements;
  public SecretList $secrets;
  public BoxedInteger $start_timeout;
  public BoxedInteger $stop_timeout;
  public SystemControls $system_controls;
  public UlimitList $ulimits;
  public string $user;
  public VolumeFromList $volumes_from;
  public string $working_directory;
}

class ContainerDefinitions {
}

class ContainerDependencies {
}

class ContainerDependency {
  public ContainerCondition $condition;
  public string $container_name;
}

class ContainerInstance {
  public boolean $agent_connected;
  public AgentUpdateStatus $agent_update_status;
  public Attachments $attachments;
  public Attributes $attributes;
  public string $capacity_provider_name;
  public string $container_instance_arn;
  public string $ec_2_instance_id;
  public int $pending_tasks_count;
  public Timestamp $registered_at;
  public Resources $registered_resources;
  public Resources $remaining_resources;
  public int $running_tasks_count;
  public string $status;
  public string $status_reason;
  public Tags $tags;
  public Long $version;
  public VersionInfo $version_info;
}

class ContainerInstanceField {
}

class ContainerInstanceFieldList {
}

class ContainerInstanceStatus {
}

class ContainerInstances {
}

class ContainerOverride {
  public StringList $command;
  public BoxedInteger $cpu;
  public EnvironmentVariables $environment;
  public BoxedInteger $memory;
  public BoxedInteger $memory_reservation;
  public string $name;
  public ResourceRequirements $resource_requirements;
}

class ContainerOverrides {
}

class ContainerStateChange {
  public string $container_name;
  public BoxedInteger $exit_code;
  public string $image_digest;
  public NetworkBindings $network_bindings;
  public string $reason;
  public string $runtime_id;
  public string $status;
}

class ContainerStateChanges {
}

class Containers {
}

class CreateCapacityProviderRequest {
  public AutoScalingGroupProvider $auto_scaling_group_provider;
  public string $name;
  public Tags $tags;
}

class CreateCapacityProviderResponse {
  public CapacityProvider $capacity_provider;
}

class CreateClusterRequest {
  public StringList $capacity_providers;
  public string $cluster_name;
  public CapacityProviderStrategy $default_capacity_provider_strategy;
  public ClusterSettings $settings;
  public Tags $tags;
}

class CreateClusterResponse {
  public Cluster $cluster;
}

class CreateServiceRequest {
  public CapacityProviderStrategy $capacity_provider_strategy;
  public string $client_token;
  public string $cluster;
  public DeploymentConfiguration $deployment_configuration;
  public DeploymentController $deployment_controller;
  public BoxedInteger $desired_count;
  public boolean $enable_ecs_managed_tags;
  public BoxedInteger $health_check_grace_period_seconds;
  public LaunchType $launch_type;
  public LoadBalancers $load_balancers;
  public NetworkConfiguration $network_configuration;
  public PlacementConstraints $placement_constraints;
  public PlacementStrategies $placement_strategy;
  public string $platform_version;
  public PropagateTags $propagate_tags;
  public string $role;
  public SchedulingStrategy $scheduling_strategy;
  public string $service_name;
  public ServiceRegistries $service_registries;
  public Tags $tags;
  public string $task_definition;
}

class CreateServiceResponse {
  public Service $service;
}

class CreateTaskSetRequest {
  public CapacityProviderStrategy $capacity_provider_strategy;
  public string $client_token;
  public string $cluster;
  public string $external_id;
  public LaunchType $launch_type;
  public LoadBalancers $load_balancers;
  public NetworkConfiguration $network_configuration;
  public string $platform_version;
  public Scale $scale;
  public string $service;
  public ServiceRegistries $service_registries;
  public Tags $tags;
  public string $task_definition;
}

class CreateTaskSetResponse {
  public TaskSet $task_set;
}

class DeleteAccountSettingRequest {
  public SettingName $name;
  public string $principal_arn;
}

class DeleteAccountSettingResponse {
  public Setting $setting;
}

class DeleteAttributesRequest {
  public Attributes $attributes;
  public string $cluster;
}

class DeleteAttributesResponse {
  public Attributes $attributes;
}

class DeleteClusterRequest {
  public string $cluster;
}

class DeleteClusterResponse {
  public Cluster $cluster;
}

class DeleteServiceRequest {
  public string $cluster;
  public BoxedBoolean $force;
  public string $service;
}

class DeleteServiceResponse {
  public Service $service;
}

class DeleteTaskSetRequest {
  public string $cluster;
  public BoxedBoolean $force;
  public string $service;
  public string $task_set;
}

class DeleteTaskSetResponse {
  public TaskSet $task_set;
}

class Deployment {
  public CapacityProviderStrategy $capacity_provider_strategy;
  public Timestamp $created_at;
  public int $desired_count;
  public string $id;
  public LaunchType $launch_type;
  public NetworkConfiguration $network_configuration;
  public int $pending_count;
  public string $platform_version;
  public int $running_count;
  public string $status;
  public string $task_definition;
  public Timestamp $updated_at;
}

class DeploymentConfiguration {
  public BoxedInteger $maximum_percent;
  public BoxedInteger $minimum_healthy_percent;
}

class DeploymentController {
  public DeploymentControllerType $type;
}

class DeploymentControllerType {
}

class Deployments {
}

class DeregisterContainerInstanceRequest {
  public string $cluster;
  public string $container_instance;
  public BoxedBoolean $force;
}

class DeregisterContainerInstanceResponse {
  public ContainerInstance $container_instance;
}

class DeregisterTaskDefinitionRequest {
  public string $task_definition;
}

class DeregisterTaskDefinitionResponse {
  public TaskDefinition $task_definition;
}

class DescribeCapacityProvidersRequest {
  public StringList $capacity_providers;
  public CapacityProviderFieldList $include;
  public BoxedInteger $max_results;
  public string $next_token;
}

class DescribeCapacityProvidersResponse {
  public CapacityProviders $capacity_providers;
  public Failures $failures;
  public string $next_token;
}

class DescribeClustersRequest {
  public StringList $clusters;
  public ClusterFieldList $include;
}

class DescribeClustersResponse {
  public Clusters $clusters;
  public Failures $failures;
}

class DescribeContainerInstancesRequest {
  public string $cluster;
  public StringList $container_instances;
  public ContainerInstanceFieldList $include;
}

class DescribeContainerInstancesResponse {
  public ContainerInstances $container_instances;
  public Failures $failures;
}

class DescribeServicesRequest {
  public string $cluster;
  public ServiceFieldList $include;
  public StringList $services;
}

class DescribeServicesResponse {
  public Failures $failures;
  public Services $services;
}

class DescribeTaskDefinitionRequest {
  public TaskDefinitionFieldList $include;
  public string $task_definition;
}

class DescribeTaskDefinitionResponse {
  public Tags $tags;
  public TaskDefinition $task_definition;
}

class DescribeTaskSetsRequest {
  public string $cluster;
  public TaskSetFieldList $include;
  public string $service;
  public StringList $task_sets;
}

class DescribeTaskSetsResponse {
  public Failures $failures;
  public TaskSets $task_sets;
}

class DescribeTasksRequest {
  public string $cluster;
  public TaskFieldList $include;
  public StringList $tasks;
}

class DescribeTasksResponse {
  public Failures $failures;
  public Tasks $tasks;
}

class DesiredStatus {
}

class Device {
  public string $container_path;
  public string $host_path;
  public DeviceCgroupPermissions $permissions;
}

class DeviceCgroupPermission {
}

class DeviceCgroupPermissions {
}

class DevicesList {
}

class DiscoverPollEndpointRequest {
  public string $cluster;
  public string $container_instance;
}

class DiscoverPollEndpointResponse {
  public string $endpoint;
  public string $telemetry_endpoint;
}

class DockerLabelsMap {
}

class DockerVolumeConfiguration {
  public BoxedBoolean $autoprovision;
  public string $driver;
  public StringMap $driver_opts;
  public StringMap $labels;
  public Scope $scope;
}

class Double {
}

class EFSAuthorizationConfig {
  public string $access_point_id;
  public EFSAuthorizationConfigIAM $iam;
}

class EFSAuthorizationConfigIAM {
}

class EFSTransitEncryption {
}

class EFSVolumeConfiguration {
  public EFSAuthorizationConfig $authorization_config;
  public string $file_system_id;
  public string $root_directory;
  public EFSTransitEncryption $transit_encryption;
  public BoxedInteger $transit_encryption_port;
}

class EnvironmentVariables {
}

class Failure {
  public string $arn;
  public string $detail;
  public string $reason;
}

class Failures {
}

class FirelensConfiguration {
  public FirelensConfigurationOptionsMap $options;
  public FirelensConfigurationType $type;
}

class FirelensConfigurationOptionsMap {
}

class FirelensConfigurationType {
}

class GpuIds {
}

class HealthCheck {
  public StringList $command;
  public BoxedInteger $interval;
  public BoxedInteger $retries;
  public BoxedInteger $start_period;
  public BoxedInteger $timeout;
}

class HealthStatus {
}

class HostEntry {
  public string $hostname;
  public string $ip_address;
}

class HostEntryList {
}

class HostVolumeProperties {
  public string $source_path;
}

class InferenceAccelerator {
  public string $device_name;
  public string $device_type;
}

class InferenceAcceleratorOverride {
  public string $device_name;
  public string $device_type;
}

class InferenceAcceleratorOverrides {
}

class InferenceAccelerators {
}

class Integer {
}

class InvalidParameterException {
}

class IpcMode {
}

class KernelCapabilities {
  public StringList $add;
  public StringList $drop;
}

class KeyValuePair {
  public string $name;
  public string $value;
}

class LaunchType {
}

class LimitExceededException {
}

class LinuxParameters {
  public KernelCapabilities $capabilities;
  public DevicesList $devices;
  public BoxedBoolean $init_process_enabled;
  public BoxedInteger $max_swap;
  public BoxedInteger $shared_memory_size;
  public BoxedInteger $swappiness;
  public TmpfsList $tmpfs;
}

class ListAccountSettingsRequest {
  public boolean $effective_settings;
  public int $max_results;
  public SettingName $name;
  public string $next_token;
  public string $principal_arn;
  public string $value;
}

class ListAccountSettingsResponse {
  public string $next_token;
  public Settings $settings;
}

class ListAttributesRequest {
  public string $attribute_name;
  public string $attribute_value;
  public string $cluster;
  public BoxedInteger $max_results;
  public string $next_token;
  public TargetType $target_type;
}

class ListAttributesResponse {
  public Attributes $attributes;
  public string $next_token;
}

class ListClustersRequest {
  public BoxedInteger $max_results;
  public string $next_token;
}

class ListClustersResponse {
  public StringList $cluster_arns;
  public string $next_token;
}

class ListContainerInstancesRequest {
  public string $cluster;
  public string $filter;
  public BoxedInteger $max_results;
  public string $next_token;
  public ContainerInstanceStatus $status;
}

class ListContainerInstancesResponse {
  public StringList $container_instance_arns;
  public string $next_token;
}

class ListServicesRequest {
  public string $cluster;
  public LaunchType $launch_type;
  public BoxedInteger $max_results;
  public string $next_token;
  public SchedulingStrategy $scheduling_strategy;
}

class ListServicesResponse {
  public string $next_token;
  public StringList $service_arns;
}

class ListTagsForResourceRequest {
  public string $resource_arn;
}

class ListTagsForResourceResponse {
  public Tags $tags;
}

class ListTaskDefinitionFamiliesRequest {
  public string $family_prefix;
  public BoxedInteger $max_results;
  public string $next_token;
  public TaskDefinitionFamilyStatus $status;
}

class ListTaskDefinitionFamiliesResponse {
  public StringList $families;
  public string $next_token;
}

class ListTaskDefinitionsRequest {
  public string $family_prefix;
  public BoxedInteger $max_results;
  public string $next_token;
  public SortOrder $sort;
  public TaskDefinitionStatus $status;
}

class ListTaskDefinitionsResponse {
  public string $next_token;
  public StringList $task_definition_arns;
}

class ListTasksRequest {
  public string $cluster;
  public string $container_instance;
  public DesiredStatus $desired_status;
  public string $family;
  public LaunchType $launch_type;
  public BoxedInteger $max_results;
  public string $next_token;
  public string $service_name;
  public string $started_by;
}

class ListTasksResponse {
  public string $next_token;
  public StringList $task_arns;
}

class LoadBalancer {
  public string $container_name;
  public BoxedInteger $container_port;
  public string $load_balancer_name;
  public string $target_group_arn;
}

class LoadBalancers {
}

class LogConfiguration {
  public LogDriver $log_driver;
  public LogConfigurationOptionsMap $options;
  public SecretList $secret_options;
}

class LogConfigurationOptionsMap {
}

class LogDriver {
}

class Long {
}

class ManagedScaling {
  public ManagedScalingStepSize $maximum_scaling_step_size;
  public ManagedScalingStepSize $minimum_scaling_step_size;
  public ManagedScalingStatus $status;
  public ManagedScalingTargetCapacity $target_capacity;
}

class ManagedScalingStatus {
}

class ManagedScalingStepSize {
}

class ManagedScalingTargetCapacity {
}

class ManagedTerminationProtection {
}

class MissingVersionException {
}

class MountPoint {
  public string $container_path;
  public BoxedBoolean $read_only;
  public string $source_volume;
}

class MountPointList {
}

class NetworkBinding {
  public string $bind_ip;
  public BoxedInteger $container_port;
  public BoxedInteger $host_port;
  public TransportProtocol $protocol;
}

class NetworkBindings {
}

class NetworkConfiguration {
  public AwsVpcConfiguration $awsvpc_configuration;
}

class NetworkInterface {
  public string $attachment_id;
  public string $ipv_6_address;
  public string $private_ipv_4_address;
}

class NetworkInterfaces {
}

class NetworkMode {
}

class NoUpdateAvailableException {
}

class PidMode {
}

class PlacementConstraint {
  public string $expression;
  public PlacementConstraintType $type;
}

class PlacementConstraintType {
}

class PlacementConstraints {
}

class PlacementStrategies {
}

class PlacementStrategy {
  public string $field;
  public PlacementStrategyType $type;
}

class PlacementStrategyType {
}

class PlatformDevice {
  public string $id;
  public PlatformDeviceType $type;
}

class PlatformDeviceType {
}

class PlatformDevices {
}

class PlatformTaskDefinitionIncompatibilityException {
}

class PlatformUnknownException {
}

class PortMapping {
  public BoxedInteger $container_port;
  public BoxedInteger $host_port;
  public TransportProtocol $protocol;
}

class PortMappingList {
}

class PropagateTags {
}

class ProxyConfiguration {
  public string $container_name;
  public ProxyConfigurationProperties $properties;
  public ProxyConfigurationType $type;
}

class ProxyConfigurationProperties {
}

class ProxyConfigurationType {
}

class PutAccountSettingDefaultRequest {
  public SettingName $name;
  public string $value;
}

class PutAccountSettingDefaultResponse {
  public Setting $setting;
}

class PutAccountSettingRequest {
  public SettingName $name;
  public string $principal_arn;
  public string $value;
}

class PutAccountSettingResponse {
  public Setting $setting;
}

class PutAttributesRequest {
  public Attributes $attributes;
  public string $cluster;
}

class PutAttributesResponse {
  public Attributes $attributes;
}

class PutClusterCapacityProvidersRequest {
  public StringList $capacity_providers;
  public string $cluster;
  public CapacityProviderStrategy $default_capacity_provider_strategy;
}

class PutClusterCapacityProvidersResponse {
  public Cluster $cluster;
}

class RegisterContainerInstanceRequest {
  public Attributes $attributes;
  public string $cluster;
  public string $container_instance_arn;
  public string $instance_identity_document;
  public string $instance_identity_document_signature;
  public PlatformDevices $platform_devices;
  public Tags $tags;
  public Resources $total_resources;
  public VersionInfo $version_info;
}

class RegisterContainerInstanceResponse {
  public ContainerInstance $container_instance;
}

class RegisterTaskDefinitionRequest {
  public ContainerDefinitions $container_definitions;
  public string $cpu;
  public string $execution_role_arn;
  public string $family;
  public InferenceAccelerators $inference_accelerators;
  public IpcMode $ipc_mode;
  public string $memory;
  public NetworkMode $network_mode;
  public PidMode $pid_mode;
  public TaskDefinitionPlacementConstraints $placement_constraints;
  public ProxyConfiguration $proxy_configuration;
  public CompatibilityList $requires_compatibilities;
  public Tags $tags;
  public string $task_role_arn;
  public VolumeList $volumes;
}

class RegisterTaskDefinitionResponse {
  public Tags $tags;
  public TaskDefinition $task_definition;
}

class RepositoryCredentials {
  public string $credentials_parameter;
}

class RequiresAttributes {
}

class Resource {
  public Double $double_value;
  public int $integer_value;
  public Long $long_value;
  public string $name;
  public StringList $string_set_value;
  public string $type;
}

class ResourceInUseException {
}

class ResourceNotFoundException {
}

class ResourceRequirement {
  public ResourceType $type;
  public string $value;
}

class ResourceRequirements {
}

class ResourceType {
}

class Resources {
}

class RunTaskRequest {
  public CapacityProviderStrategy $capacity_provider_strategy;
  public string $cluster;
  public BoxedInteger $count;
  public boolean $enable_ecs_managed_tags;
  public string $group;
  public LaunchType $launch_type;
  public NetworkConfiguration $network_configuration;
  public TaskOverride $overrides;
  public PlacementConstraints $placement_constraints;
  public PlacementStrategies $placement_strategy;
  public string $platform_version;
  public PropagateTags $propagate_tags;
  public string $reference_id;
  public string $started_by;
  public Tags $tags;
  public string $task_definition;
}

class RunTaskResponse {
  public Failures $failures;
  public Tasks $tasks;
}

class Scale {
  public ScaleUnit $unit;
  public Double $value;
}

class ScaleUnit {
}

class SchedulingStrategy {
}

class Scope {
}

class Secret {
  public string $name;
  public string $value_from;
}

class SecretList {
}

class ServerException {
  public string $message;
}

class Service {
  public CapacityProviderStrategy $capacity_provider_strategy;
  public string $cluster_arn;
  public Timestamp $created_at;
  public string $created_by;
  public DeploymentConfiguration $deployment_configuration;
  public DeploymentController $deployment_controller;
  public Deployments $deployments;
  public int $desired_count;
  public boolean $enable_ecs_managed_tags;
  public ServiceEvents $events;
  public BoxedInteger $health_check_grace_period_seconds;
  public LaunchType $launch_type;
  public LoadBalancers $load_balancers;
  public NetworkConfiguration $network_configuration;
  public int $pending_count;
  public PlacementConstraints $placement_constraints;
  public PlacementStrategies $placement_strategy;
  public string $platform_version;
  public PropagateTags $propagate_tags;
  public string $role_arn;
  public int $running_count;
  public SchedulingStrategy $scheduling_strategy;
  public string $service_arn;
  public string $service_name;
  public ServiceRegistries $service_registries;
  public string $status;
  public Tags $tags;
  public string $task_definition;
  public TaskSets $task_sets;
}

class ServiceEvent {
  public Timestamp $created_at;
  public string $id;
  public string $message;
}

class ServiceEvents {
}

class ServiceField {
}

class ServiceFieldList {
}

class ServiceNotActiveException {
}

class ServiceNotFoundException {
}

class ServiceRegistries {
}

class ServiceRegistry {
  public string $container_name;
  public BoxedInteger $container_port;
  public BoxedInteger $port;
  public string $registry_arn;
}

class Services {
}

class Setting {
  public SettingName $name;
  public string $principal_arn;
  public string $value;
}

class SettingName {
}

class Settings {
}

class SortOrder {
}

class StabilityStatus {
}

class StartTaskRequest {
  public string $cluster;
  public StringList $container_instances;
  public boolean $enable_ecs_managed_tags;
  public string $group;
  public NetworkConfiguration $network_configuration;
  public TaskOverride $overrides;
  public PropagateTags $propagate_tags;
  public string $reference_id;
  public string $started_by;
  public Tags $tags;
  public string $task_definition;
}

class StartTaskResponse {
  public Failures $failures;
  public Tasks $tasks;
}

class Statistics {
}

class StopTaskRequest {
  public string $cluster;
  public string $reason;
  public string $task;
}

class StopTaskResponse {
  public Task $task;
}

class String {
}

class StringList {
}

class StringMap {
}

class SubmitAttachmentStateChangesRequest {
  public AttachmentStateChanges $attachments;
  public string $cluster;
}

class SubmitAttachmentStateChangesResponse {
  public string $acknowledgment;
}

class SubmitContainerStateChangeRequest {
  public string $cluster;
  public string $container_name;
  public BoxedInteger $exit_code;
  public NetworkBindings $network_bindings;
  public string $reason;
  public string $runtime_id;
  public string $status;
  public string $task;
}

class SubmitContainerStateChangeResponse {
  public string $acknowledgment;
}

class SubmitTaskStateChangeRequest {
  public AttachmentStateChanges $attachments;
  public string $cluster;
  public ContainerStateChanges $containers;
  public Timestamp $execution_stopped_at;
  public Timestamp $pull_started_at;
  public Timestamp $pull_stopped_at;
  public string $reason;
  public string $status;
  public string $task;
}

class SubmitTaskStateChangeResponse {
  public string $acknowledgment;
}

class SystemControl {
  public string $namespace;
  public string $value;
}

class SystemControls {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeys {
}

class TagResourceRequest {
  public string $resource_arn;
  public Tags $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Tags {
}

class TargetNotFoundException {
}

class TargetType {
}

class Task {
  public Attachments $attachments;
  public Attributes $attributes;
  public string $availability_zone;
  public string $capacity_provider_name;
  public string $cluster_arn;
  public Connectivity $connectivity;
  public Timestamp $connectivity_at;
  public string $container_instance_arn;
  public Containers $containers;
  public string $cpu;
  public Timestamp $created_at;
  public string $desired_status;
  public Timestamp $execution_stopped_at;
  public string $group;
  public HealthStatus $health_status;
  public InferenceAccelerators $inference_accelerators;
  public string $last_status;
  public LaunchType $launch_type;
  public string $memory;
  public TaskOverride $overrides;
  public string $platform_version;
  public Timestamp $pull_started_at;
  public Timestamp $pull_stopped_at;
  public Timestamp $started_at;
  public string $started_by;
  public TaskStopCode $stop_code;
  public Timestamp $stopped_at;
  public string $stopped_reason;
  public Timestamp $stopping_at;
  public Tags $tags;
  public string $task_arn;
  public string $task_definition_arn;
  public Long $version;
}

class TaskDefinition {
  public CompatibilityList $compatibilities;
  public ContainerDefinitions $container_definitions;
  public string $cpu;
  public string $execution_role_arn;
  public string $family;
  public InferenceAccelerators $inference_accelerators;
  public IpcMode $ipc_mode;
  public string $memory;
  public NetworkMode $network_mode;
  public PidMode $pid_mode;
  public TaskDefinitionPlacementConstraints $placement_constraints;
  public ProxyConfiguration $proxy_configuration;
  public RequiresAttributes $requires_attributes;
  public CompatibilityList $requires_compatibilities;
  public int $revision;
  public TaskDefinitionStatus $status;
  public string $task_definition_arn;
  public string $task_role_arn;
  public VolumeList $volumes;
}

class TaskDefinitionFamilyStatus {
}

class TaskDefinitionField {
}

class TaskDefinitionFieldList {
}

class TaskDefinitionPlacementConstraint {
  public string $expression;
  public TaskDefinitionPlacementConstraintType $type;
}

class TaskDefinitionPlacementConstraintType {
}

class TaskDefinitionPlacementConstraints {
}

class TaskDefinitionStatus {
}

class TaskField {
}

class TaskFieldList {
}

class TaskOverride {
  public ContainerOverrides $container_overrides;
  public string $cpu;
  public string $execution_role_arn;
  public InferenceAcceleratorOverrides $inference_accelerator_overrides;
  public string $memory;
  public string $task_role_arn;
}

class TaskSet {
  public CapacityProviderStrategy $capacity_provider_strategy;
  public string $cluster_arn;
  public int $computed_desired_count;
  public Timestamp $created_at;
  public string $external_id;
  public string $id;
  public LaunchType $launch_type;
  public LoadBalancers $load_balancers;
  public NetworkConfiguration $network_configuration;
  public int $pending_count;
  public string $platform_version;
  public int $running_count;
  public Scale $scale;
  public string $service_arn;
  public ServiceRegistries $service_registries;
  public StabilityStatus $stability_status;
  public Timestamp $stability_status_at;
  public string $started_by;
  public string $status;
  public Tags $tags;
  public string $task_definition;
  public string $task_set_arn;
  public Timestamp $updated_at;
}

class TaskSetField {
}

class TaskSetFieldList {
}

class TaskSetNotFoundException {
}

class TaskSets {
}

class TaskStopCode {
}

class Tasks {
}

class Timestamp {
}

class Tmpfs {
  public string $container_path;
  public StringList $mount_options;
  public int $size;
}

class TmpfsList {
}

class TransportProtocol {
}

class Ulimit {
  public int $hard_limit;
  public UlimitName $name;
  public int $soft_limit;
}

class UlimitList {
}

class UlimitName {
}

class UnsupportedFeatureException {
}

class UntagResourceRequest {
  public string $resource_arn;
  public TagKeys $tag_keys;
}

class UntagResourceResponse {
}

class UpdateClusterSettingsRequest {
  public string $cluster;
  public ClusterSettings $settings;
}

class UpdateClusterSettingsResponse {
  public Cluster $cluster;
}

class UpdateContainerAgentRequest {
  public string $cluster;
  public string $container_instance;
}

class UpdateContainerAgentResponse {
  public ContainerInstance $container_instance;
}

class UpdateContainerInstancesStateRequest {
  public string $cluster;
  public StringList $container_instances;
  public ContainerInstanceStatus $status;
}

class UpdateContainerInstancesStateResponse {
  public ContainerInstances $container_instances;
  public Failures $failures;
}

class UpdateInProgressException {
}

class UpdateServicePrimaryTaskSetRequest {
  public string $cluster;
  public string $primary_task_set;
  public string $service;
}

class UpdateServicePrimaryTaskSetResponse {
  public TaskSet $task_set;
}

class UpdateServiceRequest {
  public CapacityProviderStrategy $capacity_provider_strategy;
  public string $cluster;
  public DeploymentConfiguration $deployment_configuration;
  public BoxedInteger $desired_count;
  public boolean $force_new_deployment;
  public BoxedInteger $health_check_grace_period_seconds;
  public NetworkConfiguration $network_configuration;
  public PlacementConstraints $placement_constraints;
  public PlacementStrategies $placement_strategy;
  public string $platform_version;
  public string $service;
  public string $task_definition;
}

class UpdateServiceResponse {
  public Service $service;
}

class UpdateTaskSetRequest {
  public string $cluster;
  public Scale $scale;
  public string $service;
  public string $task_set;
}

class UpdateTaskSetResponse {
  public TaskSet $task_set;
}

class VersionInfo {
  public string $agent_hash;
  public string $agent_version;
  public string $docker_version;
}

class Volume {
  public DockerVolumeConfiguration $docker_volume_configuration;
  public EFSVolumeConfiguration $efs_volume_configuration;
  public HostVolumeProperties $host;
  public string $name;
}

class VolumeFrom {
  public BoxedBoolean $read_only;
  public string $source_container;
}

class VolumeFromList {
}

class VolumeList {
}

