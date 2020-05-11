<?hh // strict
namespace slack\aws\ecs;

interface ECS {
  public function CreateCapacityProvider(CreateCapacityProviderRequest): Awaitable<Errors\Result<CreateCapacityProviderResponse>>;
  public function CreateCluster(CreateClusterRequest): Awaitable<Errors\Result<CreateClusterResponse>>;
  public function CreateService(CreateServiceRequest): Awaitable<Errors\Result<CreateServiceResponse>>;
  public function CreateTaskSet(CreateTaskSetRequest): Awaitable<Errors\Result<CreateTaskSetResponse>>;
  public function DeleteAccountSetting(DeleteAccountSettingRequest): Awaitable<Errors\Result<DeleteAccountSettingResponse>>;
  public function DeleteAttributes(DeleteAttributesRequest): Awaitable<Errors\Result<DeleteAttributesResponse>>;
  public function DeleteCluster(DeleteClusterRequest): Awaitable<Errors\Result<DeleteClusterResponse>>;
  public function DeleteService(DeleteServiceRequest): Awaitable<Errors\Result<DeleteServiceResponse>>;
  public function DeleteTaskSet(DeleteTaskSetRequest): Awaitable<Errors\Result<DeleteTaskSetResponse>>;
  public function DeregisterContainerInstance(DeregisterContainerInstanceRequest): Awaitable<Errors\Result<DeregisterContainerInstanceResponse>>;
  public function DeregisterTaskDefinition(DeregisterTaskDefinitionRequest): Awaitable<Errors\Result<DeregisterTaskDefinitionResponse>>;
  public function DescribeCapacityProviders(DescribeCapacityProvidersRequest): Awaitable<Errors\Result<DescribeCapacityProvidersResponse>>;
  public function DescribeClusters(DescribeClustersRequest): Awaitable<Errors\Result<DescribeClustersResponse>>;
  public function DescribeContainerInstances(DescribeContainerInstancesRequest): Awaitable<Errors\Result<DescribeContainerInstancesResponse>>;
  public function DescribeServices(DescribeServicesRequest): Awaitable<Errors\Result<DescribeServicesResponse>>;
  public function DescribeTaskDefinition(DescribeTaskDefinitionRequest): Awaitable<Errors\Result<DescribeTaskDefinitionResponse>>;
  public function DescribeTaskSets(DescribeTaskSetsRequest): Awaitable<Errors\Result<DescribeTaskSetsResponse>>;
  public function DescribeTasks(DescribeTasksRequest): Awaitable<Errors\Result<DescribeTasksResponse>>;
  public function DiscoverPollEndpoint(DiscoverPollEndpointRequest): Awaitable<Errors\Result<DiscoverPollEndpointResponse>>;
  public function ListAccountSettings(ListAccountSettingsRequest): Awaitable<Errors\Result<ListAccountSettingsResponse>>;
  public function ListAttributes(ListAttributesRequest): Awaitable<Errors\Result<ListAttributesResponse>>;
  public function ListClusters(ListClustersRequest): Awaitable<Errors\Result<ListClustersResponse>>;
  public function ListContainerInstances(ListContainerInstancesRequest): Awaitable<Errors\Result<ListContainerInstancesResponse>>;
  public function ListServices(ListServicesRequest): Awaitable<Errors\Result<ListServicesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTaskDefinitionFamilies(ListTaskDefinitionFamiliesRequest): Awaitable<Errors\Result<ListTaskDefinitionFamiliesResponse>>;
  public function ListTaskDefinitions(ListTaskDefinitionsRequest): Awaitable<Errors\Result<ListTaskDefinitionsResponse>>;
  public function ListTasks(ListTasksRequest): Awaitable<Errors\Result<ListTasksResponse>>;
  public function PutAccountSetting(PutAccountSettingRequest): Awaitable<Errors\Result<PutAccountSettingResponse>>;
  public function PutAccountSettingDefault(PutAccountSettingDefaultRequest): Awaitable<Errors\Result<PutAccountSettingDefaultResponse>>;
  public function PutAttributes(PutAttributesRequest): Awaitable<Errors\Result<PutAttributesResponse>>;
  public function PutClusterCapacityProviders(PutClusterCapacityProvidersRequest): Awaitable<Errors\Result<PutClusterCapacityProvidersResponse>>;
  public function RegisterContainerInstance(RegisterContainerInstanceRequest): Awaitable<Errors\Result<RegisterContainerInstanceResponse>>;
  public function RegisterTaskDefinition(RegisterTaskDefinitionRequest): Awaitable<Errors\Result<RegisterTaskDefinitionResponse>>;
  public function RunTask(RunTaskRequest): Awaitable<Errors\Result<RunTaskResponse>>;
  public function StartTask(StartTaskRequest): Awaitable<Errors\Result<StartTaskResponse>>;
  public function StopTask(StopTaskRequest): Awaitable<Errors\Result<StopTaskResponse>>;
  public function SubmitAttachmentStateChanges(SubmitAttachmentStateChangesRequest): Awaitable<Errors\Result<SubmitAttachmentStateChangesResponse>>;
  public function SubmitContainerStateChange(SubmitContainerStateChangeRequest): Awaitable<Errors\Result<SubmitContainerStateChangeResponse>>;
  public function SubmitTaskStateChange(SubmitTaskStateChangeRequest): Awaitable<Errors\Result<SubmitTaskStateChangeResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateClusterSettings(UpdateClusterSettingsRequest): Awaitable<Errors\Result<UpdateClusterSettingsResponse>>;
  public function UpdateContainerAgent(UpdateContainerAgentRequest): Awaitable<Errors\Result<UpdateContainerAgentResponse>>;
  public function UpdateContainerInstancesState(UpdateContainerInstancesStateRequest): Awaitable<Errors\Result<UpdateContainerInstancesStateResponse>>;
  public function UpdateService(UpdateServiceRequest): Awaitable<Errors\Result<UpdateServiceResponse>>;
  public function UpdateServicePrimaryTaskSet(UpdateServicePrimaryTaskSetRequest): Awaitable<Errors\Result<UpdateServicePrimaryTaskSetResponse>>;
  public function UpdateTaskSet(UpdateTaskSetRequest): Awaitable<Errors\Result<UpdateTaskSetResponse>>;
}

class AccessDeniedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AgentUpdateStatus = string;

type AssignPublicIp = string;

class Attachment {
  public AttachmentDetails $details;
  public string $id;
  public string $status;
  public string $type;

  public function __construct(shape(
  ?'details' => AttachmentDetails,
  ?'id' => string,
  ?'status' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->details = $details ?? [];
    $this->id = $id ?? "";
    $this->status = $status ?? "";
    $this->type = $type ?? "";
  }
}

type AttachmentDetails = vec<KeyValuePair>;

class AttachmentStateChange {
  public string $attachment_arn;
  public string $status;

  public function __construct(shape(
  ?'attachment_arn' => string,
  ?'status' => string,
  ) $s = shape()) {
    $this->attachment_arn = $attachment_arn ?? "";
    $this->status = $status ?? "";
  }
}

type AttachmentStateChanges = vec<AttachmentStateChange>;

type Attachments = vec<Attachment>;

class Attribute {
  public string $name;
  public string $target_id;
  public TargetType $target_type;
  public string $value;

  public function __construct(shape(
  ?'name' => string,
  ?'target_id' => string,
  ?'target_type' => TargetType,
  ?'value' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->target_id = $target_id ?? "";
    $this->target_type = $target_type ?? "";
    $this->value = $value ?? "";
  }
}

class AttributeLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Attributes = vec<Attribute>;

class AutoScalingGroupProvider {
  public string $auto_scaling_group_arn;
  public ManagedScaling $managed_scaling;
  public ManagedTerminationProtection $managed_termination_protection;

  public function __construct(shape(
  ?'auto_scaling_group_arn' => string,
  ?'managed_scaling' => ManagedScaling,
  ?'managed_termination_protection' => ManagedTerminationProtection,
  ) $s = shape()) {
    $this->auto_scaling_group_arn = $auto_scaling_group_arn ?? "";
    $this->managed_scaling = $managed_scaling ?? null;
    $this->managed_termination_protection = $managed_termination_protection ?? "";
  }
}

class AwsVpcConfiguration {
  public AssignPublicIp $assign_public_ip;
  public StringList $security_groups;
  public StringList $subnets;

  public function __construct(shape(
  ?'assign_public_ip' => AssignPublicIp,
  ?'security_groups' => StringList,
  ?'subnets' => StringList,
  ) $s = shape()) {
    $this->assign_public_ip = $assign_public_ip ?? "";
    $this->security_groups = $security_groups ?? [];
    $this->subnets = $subnets ?? [];
  }
}

class BlockedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Boolean = bool;

type BoxedBoolean = bool;

type BoxedInteger = int;

class CapacityProvider {
  public AutoScalingGroupProvider $auto_scaling_group_provider;
  public string $capacity_provider_arn;
  public string $name;
  public CapacityProviderStatus $status;
  public Tags $tags;

  public function __construct(shape(
  ?'auto_scaling_group_provider' => AutoScalingGroupProvider,
  ?'capacity_provider_arn' => string,
  ?'name' => string,
  ?'status' => CapacityProviderStatus,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->auto_scaling_group_provider = $auto_scaling_group_provider ?? null;
    $this->capacity_provider_arn = $capacity_provider_arn ?? "";
    $this->name = $name ?? "";
    $this->status = $status ?? "";
    $this->tags = $tags ?? [];
  }
}

type CapacityProviderField = string;

type CapacityProviderFieldList = vec<CapacityProviderField>;

type CapacityProviderStatus = string;

type CapacityProviderStrategy = vec<CapacityProviderStrategyItem>;

class CapacityProviderStrategyItem {
  public CapacityProviderStrategyItemBase $base;
  public string $capacity_provider;
  public CapacityProviderStrategyItemWeight $weight;

  public function __construct(shape(
  ?'base' => CapacityProviderStrategyItemBase,
  ?'capacity_provider' => string,
  ?'weight' => CapacityProviderStrategyItemWeight,
  ) $s = shape()) {
    $this->base = $base ?? 0;
    $this->capacity_provider = $capacity_provider ?? "";
    $this->weight = $weight ?? 0;
  }
}

type CapacityProviderStrategyItemBase = int;

type CapacityProviderStrategyItemWeight = int;

type CapacityProviders = vec<CapacityProvider>;

class ClientException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'active_services_count' => int,
  ?'attachments' => Attachments,
  ?'attachments_status' => string,
  ?'capacity_providers' => StringList,
  ?'cluster_arn' => string,
  ?'cluster_name' => string,
  ?'default_capacity_provider_strategy' => CapacityProviderStrategy,
  ?'pending_tasks_count' => int,
  ?'registered_container_instances_count' => int,
  ?'running_tasks_count' => int,
  ?'settings' => ClusterSettings,
  ?'statistics' => Statistics,
  ?'status' => string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->active_services_count = $active_services_count ?? 0;
    $this->attachments = $attachments ?? [];
    $this->attachments_status = $attachments_status ?? "";
    $this->capacity_providers = $capacity_providers ?? [];
    $this->cluster_arn = $cluster_arn ?? "";
    $this->cluster_name = $cluster_name ?? "";
    $this->default_capacity_provider_strategy = $default_capacity_provider_strategy ?? [];
    $this->pending_tasks_count = $pending_tasks_count ?? 0;
    $this->registered_container_instances_count = $registered_container_instances_count ?? 0;
    $this->running_tasks_count = $running_tasks_count ?? 0;
    $this->settings = $settings ?? [];
    $this->statistics = $statistics ?? [];
    $this->status = $status ?? "";
    $this->tags = $tags ?? [];
  }
}

class ClusterContainsContainerInstancesException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterContainsServicesException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterContainsTasksException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ClusterField = string;

type ClusterFieldList = vec<ClusterField>;

class ClusterNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterSetting {
  public ClusterSettingName $name;
  public string $value;

  public function __construct(shape(
  ?'name' => ClusterSettingName,
  ?'value' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type ClusterSettingName = string;

type ClusterSettings = vec<ClusterSetting>;

type Clusters = vec<Cluster>;

type Compatibility = string;

type CompatibilityList = vec<Compatibility>;

type Connectivity = string;

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

  public function __construct(shape(
  ?'container_arn' => string,
  ?'cpu' => string,
  ?'exit_code' => BoxedInteger,
  ?'gpu_ids' => GpuIds,
  ?'health_status' => HealthStatus,
  ?'image' => string,
  ?'image_digest' => string,
  ?'last_status' => string,
  ?'memory' => string,
  ?'memory_reservation' => string,
  ?'name' => string,
  ?'network_bindings' => NetworkBindings,
  ?'network_interfaces' => NetworkInterfaces,
  ?'reason' => string,
  ?'runtime_id' => string,
  ?'task_arn' => string,
  ) $s = shape()) {
    $this->container_arn = $container_arn ?? "";
    $this->cpu = $cpu ?? "";
    $this->exit_code = $exit_code ?? 0;
    $this->gpu_ids = $gpu_ids ?? [];
    $this->health_status = $health_status ?? "";
    $this->image = $image ?? "";
    $this->image_digest = $image_digest ?? "";
    $this->last_status = $last_status ?? "";
    $this->memory = $memory ?? "";
    $this->memory_reservation = $memory_reservation ?? "";
    $this->name = $name ?? "";
    $this->network_bindings = $network_bindings ?? [];
    $this->network_interfaces = $network_interfaces ?? [];
    $this->reason = $reason ?? "";
    $this->runtime_id = $runtime_id ?? "";
    $this->task_arn = $task_arn ?? "";
  }
}

type ContainerCondition = string;

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

  public function __construct(shape(
  ?'command' => StringList,
  ?'cpu' => int,
  ?'depends_on' => ContainerDependencies,
  ?'disable_networking' => BoxedBoolean,
  ?'dns_search_domains' => StringList,
  ?'dns_servers' => StringList,
  ?'docker_labels' => DockerLabelsMap,
  ?'docker_security_options' => StringList,
  ?'entry_point' => StringList,
  ?'environment' => EnvironmentVariables,
  ?'essential' => BoxedBoolean,
  ?'extra_hosts' => HostEntryList,
  ?'firelens_configuration' => FirelensConfiguration,
  ?'health_check' => HealthCheck,
  ?'hostname' => string,
  ?'image' => string,
  ?'interactive' => BoxedBoolean,
  ?'links' => StringList,
  ?'linux_parameters' => LinuxParameters,
  ?'log_configuration' => LogConfiguration,
  ?'memory' => BoxedInteger,
  ?'memory_reservation' => BoxedInteger,
  ?'mount_points' => MountPointList,
  ?'name' => string,
  ?'port_mappings' => PortMappingList,
  ?'privileged' => BoxedBoolean,
  ?'pseudo_terminal' => BoxedBoolean,
  ?'readonly_root_filesystem' => BoxedBoolean,
  ?'repository_credentials' => RepositoryCredentials,
  ?'resource_requirements' => ResourceRequirements,
  ?'secrets' => SecretList,
  ?'start_timeout' => BoxedInteger,
  ?'stop_timeout' => BoxedInteger,
  ?'system_controls' => SystemControls,
  ?'ulimits' => UlimitList,
  ?'user' => string,
  ?'volumes_from' => VolumeFromList,
  ?'working_directory' => string,
  ) $s = shape()) {
    $this->command = $command ?? [];
    $this->cpu = $cpu ?? 0;
    $this->depends_on = $depends_on ?? [];
    $this->disable_networking = $disable_networking ?? false;
    $this->dns_search_domains = $dns_search_domains ?? [];
    $this->dns_servers = $dns_servers ?? [];
    $this->docker_labels = $docker_labels ?? [];
    $this->docker_security_options = $docker_security_options ?? [];
    $this->entry_point = $entry_point ?? [];
    $this->environment = $environment ?? [];
    $this->essential = $essential ?? false;
    $this->extra_hosts = $extra_hosts ?? [];
    $this->firelens_configuration = $firelens_configuration ?? null;
    $this->health_check = $health_check ?? null;
    $this->hostname = $hostname ?? "";
    $this->image = $image ?? "";
    $this->interactive = $interactive ?? false;
    $this->links = $links ?? [];
    $this->linux_parameters = $linux_parameters ?? null;
    $this->log_configuration = $log_configuration ?? null;
    $this->memory = $memory ?? 0;
    $this->memory_reservation = $memory_reservation ?? 0;
    $this->mount_points = $mount_points ?? [];
    $this->name = $name ?? "";
    $this->port_mappings = $port_mappings ?? [];
    $this->privileged = $privileged ?? false;
    $this->pseudo_terminal = $pseudo_terminal ?? false;
    $this->readonly_root_filesystem = $readonly_root_filesystem ?? false;
    $this->repository_credentials = $repository_credentials ?? null;
    $this->resource_requirements = $resource_requirements ?? [];
    $this->secrets = $secrets ?? [];
    $this->start_timeout = $start_timeout ?? 0;
    $this->stop_timeout = $stop_timeout ?? 0;
    $this->system_controls = $system_controls ?? [];
    $this->ulimits = $ulimits ?? [];
    $this->user = $user ?? "";
    $this->volumes_from = $volumes_from ?? [];
    $this->working_directory = $working_directory ?? "";
  }
}

type ContainerDefinitions = vec<ContainerDefinition>;

type ContainerDependencies = vec<ContainerDependency>;

class ContainerDependency {
  public ContainerCondition $condition;
  public string $container_name;

  public function __construct(shape(
  ?'condition' => ContainerCondition,
  ?'container_name' => string,
  ) $s = shape()) {
    $this->condition = $condition ?? "";
    $this->container_name = $container_name ?? "";
  }
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

  public function __construct(shape(
  ?'agent_connected' => boolean,
  ?'agent_update_status' => AgentUpdateStatus,
  ?'attachments' => Attachments,
  ?'attributes' => Attributes,
  ?'capacity_provider_name' => string,
  ?'container_instance_arn' => string,
  ?'ec_2_instance_id' => string,
  ?'pending_tasks_count' => int,
  ?'registered_at' => Timestamp,
  ?'registered_resources' => Resources,
  ?'remaining_resources' => Resources,
  ?'running_tasks_count' => int,
  ?'status' => string,
  ?'status_reason' => string,
  ?'tags' => Tags,
  ?'version' => Long,
  ?'version_info' => VersionInfo,
  ) $s = shape()) {
    $this->agent_connected = $agent_connected ?? false;
    $this->agent_update_status = $agent_update_status ?? "";
    $this->attachments = $attachments ?? [];
    $this->attributes = $attributes ?? [];
    $this->capacity_provider_name = $capacity_provider_name ?? "";
    $this->container_instance_arn = $container_instance_arn ?? "";
    $this->ec_2_instance_id = $ec_2_instance_id ?? "";
    $this->pending_tasks_count = $pending_tasks_count ?? 0;
    $this->registered_at = $registered_at ?? 0;
    $this->registered_resources = $registered_resources ?? [];
    $this->remaining_resources = $remaining_resources ?? [];
    $this->running_tasks_count = $running_tasks_count ?? 0;
    $this->status = $status ?? "";
    $this->status_reason = $status_reason ?? "";
    $this->tags = $tags ?? [];
    $this->version = $version ?? 0;
    $this->version_info = $version_info ?? null;
  }
}

type ContainerInstanceField = string;

type ContainerInstanceFieldList = vec<ContainerInstanceField>;

type ContainerInstanceStatus = string;

type ContainerInstances = vec<ContainerInstance>;

class ContainerOverride {
  public StringList $command;
  public BoxedInteger $cpu;
  public EnvironmentVariables $environment;
  public BoxedInteger $memory;
  public BoxedInteger $memory_reservation;
  public string $name;
  public ResourceRequirements $resource_requirements;

  public function __construct(shape(
  ?'command' => StringList,
  ?'cpu' => BoxedInteger,
  ?'environment' => EnvironmentVariables,
  ?'memory' => BoxedInteger,
  ?'memory_reservation' => BoxedInteger,
  ?'name' => string,
  ?'resource_requirements' => ResourceRequirements,
  ) $s = shape()) {
    $this->command = $command ?? [];
    $this->cpu = $cpu ?? 0;
    $this->environment = $environment ?? [];
    $this->memory = $memory ?? 0;
    $this->memory_reservation = $memory_reservation ?? 0;
    $this->name = $name ?? "";
    $this->resource_requirements = $resource_requirements ?? [];
  }
}

type ContainerOverrides = vec<ContainerOverride>;

class ContainerStateChange {
  public string $container_name;
  public BoxedInteger $exit_code;
  public string $image_digest;
  public NetworkBindings $network_bindings;
  public string $reason;
  public string $runtime_id;
  public string $status;

  public function __construct(shape(
  ?'container_name' => string,
  ?'exit_code' => BoxedInteger,
  ?'image_digest' => string,
  ?'network_bindings' => NetworkBindings,
  ?'reason' => string,
  ?'runtime_id' => string,
  ?'status' => string,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
    $this->exit_code = $exit_code ?? 0;
    $this->image_digest = $image_digest ?? "";
    $this->network_bindings = $network_bindings ?? [];
    $this->reason = $reason ?? "";
    $this->runtime_id = $runtime_id ?? "";
    $this->status = $status ?? "";
  }
}

type ContainerStateChanges = vec<ContainerStateChange>;

type Containers = vec<Container>;

class CreateCapacityProviderRequest {
  public AutoScalingGroupProvider $auto_scaling_group_provider;
  public string $name;
  public Tags $tags;

  public function __construct(shape(
  ?'auto_scaling_group_provider' => AutoScalingGroupProvider,
  ?'name' => string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->auto_scaling_group_provider = $auto_scaling_group_provider ?? null;
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateCapacityProviderResponse {
  public CapacityProvider $capacity_provider;

  public function __construct(shape(
  ?'capacity_provider' => CapacityProvider,
  ) $s = shape()) {
    $this->capacity_provider = $capacity_provider ?? null;
  }
}

class CreateClusterRequest {
  public StringList $capacity_providers;
  public string $cluster_name;
  public CapacityProviderStrategy $default_capacity_provider_strategy;
  public ClusterSettings $settings;
  public Tags $tags;

  public function __construct(shape(
  ?'capacity_providers' => StringList,
  ?'cluster_name' => string,
  ?'default_capacity_provider_strategy' => CapacityProviderStrategy,
  ?'settings' => ClusterSettings,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->capacity_providers = $capacity_providers ?? [];
    $this->cluster_name = $cluster_name ?? "";
    $this->default_capacity_provider_strategy = $default_capacity_provider_strategy ?? [];
    $this->settings = $settings ?? [];
    $this->tags = $tags ?? [];
  }
}

class CreateClusterResponse {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
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

  public function __construct(shape(
  ?'capacity_provider_strategy' => CapacityProviderStrategy,
  ?'client_token' => string,
  ?'cluster' => string,
  ?'deployment_configuration' => DeploymentConfiguration,
  ?'deployment_controller' => DeploymentController,
  ?'desired_count' => BoxedInteger,
  ?'enable_ecs_managed_tags' => boolean,
  ?'health_check_grace_period_seconds' => BoxedInteger,
  ?'launch_type' => LaunchType,
  ?'load_balancers' => LoadBalancers,
  ?'network_configuration' => NetworkConfiguration,
  ?'placement_constraints' => PlacementConstraints,
  ?'placement_strategy' => PlacementStrategies,
  ?'platform_version' => string,
  ?'propagate_tags' => PropagateTags,
  ?'role' => string,
  ?'scheduling_strategy' => SchedulingStrategy,
  ?'service_name' => string,
  ?'service_registries' => ServiceRegistries,
  ?'tags' => Tags,
  ?'task_definition' => string,
  ) $s = shape()) {
    $this->capacity_provider_strategy = $capacity_provider_strategy ?? [];
    $this->client_token = $client_token ?? "";
    $this->cluster = $cluster ?? "";
    $this->deployment_configuration = $deployment_configuration ?? null;
    $this->deployment_controller = $deployment_controller ?? null;
    $this->desired_count = $desired_count ?? 0;
    $this->enable_ecs_managed_tags = $enable_ecs_managed_tags ?? false;
    $this->health_check_grace_period_seconds = $health_check_grace_period_seconds ?? 0;
    $this->launch_type = $launch_type ?? "";
    $this->load_balancers = $load_balancers ?? [];
    $this->network_configuration = $network_configuration ?? null;
    $this->placement_constraints = $placement_constraints ?? [];
    $this->placement_strategy = $placement_strategy ?? [];
    $this->platform_version = $platform_version ?? "";
    $this->propagate_tags = $propagate_tags ?? "";
    $this->role = $role ?? "";
    $this->scheduling_strategy = $scheduling_strategy ?? "";
    $this->service_name = $service_name ?? "";
    $this->service_registries = $service_registries ?? [];
    $this->tags = $tags ?? [];
    $this->task_definition = $task_definition ?? "";
  }
}

class CreateServiceResponse {
  public Service $service;

  public function __construct(shape(
  ?'service' => Service,
  ) $s = shape()) {
    $this->service = $service ?? null;
  }
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

  public function __construct(shape(
  ?'capacity_provider_strategy' => CapacityProviderStrategy,
  ?'client_token' => string,
  ?'cluster' => string,
  ?'external_id' => string,
  ?'launch_type' => LaunchType,
  ?'load_balancers' => LoadBalancers,
  ?'network_configuration' => NetworkConfiguration,
  ?'platform_version' => string,
  ?'scale' => Scale,
  ?'service' => string,
  ?'service_registries' => ServiceRegistries,
  ?'tags' => Tags,
  ?'task_definition' => string,
  ) $s = shape()) {
    $this->capacity_provider_strategy = $capacity_provider_strategy ?? [];
    $this->client_token = $client_token ?? "";
    $this->cluster = $cluster ?? "";
    $this->external_id = $external_id ?? "";
    $this->launch_type = $launch_type ?? "";
    $this->load_balancers = $load_balancers ?? [];
    $this->network_configuration = $network_configuration ?? null;
    $this->platform_version = $platform_version ?? "";
    $this->scale = $scale ?? null;
    $this->service = $service ?? "";
    $this->service_registries = $service_registries ?? [];
    $this->tags = $tags ?? [];
    $this->task_definition = $task_definition ?? "";
  }
}

class CreateTaskSetResponse {
  public TaskSet $task_set;

  public function __construct(shape(
  ?'task_set' => TaskSet,
  ) $s = shape()) {
    $this->task_set = $task_set ?? null;
  }
}

class DeleteAccountSettingRequest {
  public SettingName $name;
  public string $principal_arn;

  public function __construct(shape(
  ?'name' => SettingName,
  ?'principal_arn' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->principal_arn = $principal_arn ?? "";
  }
}

class DeleteAccountSettingResponse {
  public Setting $setting;

  public function __construct(shape(
  ?'setting' => Setting,
  ) $s = shape()) {
    $this->setting = $setting ?? null;
  }
}

class DeleteAttributesRequest {
  public Attributes $attributes;
  public string $cluster;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'cluster' => string,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->cluster = $cluster ?? "";
  }
}

class DeleteAttributesResponse {
  public Attributes $attributes;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
  }
}

class DeleteClusterRequest {
  public string $cluster;

  public function __construct(shape(
  ?'cluster' => string,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
  }
}

class DeleteClusterResponse {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class DeleteServiceRequest {
  public string $cluster;
  public BoxedBoolean $force;
  public string $service;

  public function __construct(shape(
  ?'cluster' => string,
  ?'force' => BoxedBoolean,
  ?'service' => string,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->force = $force ?? false;
    $this->service = $service ?? "";
  }
}

class DeleteServiceResponse {
  public Service $service;

  public function __construct(shape(
  ?'service' => Service,
  ) $s = shape()) {
    $this->service = $service ?? null;
  }
}

class DeleteTaskSetRequest {
  public string $cluster;
  public BoxedBoolean $force;
  public string $service;
  public string $task_set;

  public function __construct(shape(
  ?'cluster' => string,
  ?'force' => BoxedBoolean,
  ?'service' => string,
  ?'task_set' => string,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->force = $force ?? false;
    $this->service = $service ?? "";
    $this->task_set = $task_set ?? "";
  }
}

class DeleteTaskSetResponse {
  public TaskSet $task_set;

  public function __construct(shape(
  ?'task_set' => TaskSet,
  ) $s = shape()) {
    $this->task_set = $task_set ?? null;
  }
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

  public function __construct(shape(
  ?'capacity_provider_strategy' => CapacityProviderStrategy,
  ?'created_at' => Timestamp,
  ?'desired_count' => int,
  ?'id' => string,
  ?'launch_type' => LaunchType,
  ?'network_configuration' => NetworkConfiguration,
  ?'pending_count' => int,
  ?'platform_version' => string,
  ?'running_count' => int,
  ?'status' => string,
  ?'task_definition' => string,
  ?'updated_at' => Timestamp,
  ) $s = shape()) {
    $this->capacity_provider_strategy = $capacity_provider_strategy ?? [];
    $this->created_at = $created_at ?? 0;
    $this->desired_count = $desired_count ?? 0;
    $this->id = $id ?? "";
    $this->launch_type = $launch_type ?? "";
    $this->network_configuration = $network_configuration ?? null;
    $this->pending_count = $pending_count ?? 0;
    $this->platform_version = $platform_version ?? "";
    $this->running_count = $running_count ?? 0;
    $this->status = $status ?? "";
    $this->task_definition = $task_definition ?? "";
    $this->updated_at = $updated_at ?? 0;
  }
}

class DeploymentConfiguration {
  public BoxedInteger $maximum_percent;
  public BoxedInteger $minimum_healthy_percent;

  public function __construct(shape(
  ?'maximum_percent' => BoxedInteger,
  ?'minimum_healthy_percent' => BoxedInteger,
  ) $s = shape()) {
    $this->maximum_percent = $maximum_percent ?? 0;
    $this->minimum_healthy_percent = $minimum_healthy_percent ?? 0;
  }
}

class DeploymentController {
  public DeploymentControllerType $type;

  public function __construct(shape(
  ?'type' => DeploymentControllerType,
  ) $s = shape()) {
    $this->type = $type ?? "";
  }
}

type DeploymentControllerType = string;

type Deployments = vec<Deployment>;

class DeregisterContainerInstanceRequest {
  public string $cluster;
  public string $container_instance;
  public BoxedBoolean $force;

  public function __construct(shape(
  ?'cluster' => string,
  ?'container_instance' => string,
  ?'force' => BoxedBoolean,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->container_instance = $container_instance ?? "";
    $this->force = $force ?? false;
  }
}

class DeregisterContainerInstanceResponse {
  public ContainerInstance $container_instance;

  public function __construct(shape(
  ?'container_instance' => ContainerInstance,
  ) $s = shape()) {
    $this->container_instance = $container_instance ?? null;
  }
}

class DeregisterTaskDefinitionRequest {
  public string $task_definition;

  public function __construct(shape(
  ?'task_definition' => string,
  ) $s = shape()) {
    $this->task_definition = $task_definition ?? "";
  }
}

class DeregisterTaskDefinitionResponse {
  public TaskDefinition $task_definition;

  public function __construct(shape(
  ?'task_definition' => TaskDefinition,
  ) $s = shape()) {
    $this->task_definition = $task_definition ?? null;
  }
}

class DescribeCapacityProvidersRequest {
  public StringList $capacity_providers;
  public CapacityProviderFieldList $include;
  public BoxedInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'capacity_providers' => StringList,
  ?'include' => CapacityProviderFieldList,
  ?'max_results' => BoxedInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->capacity_providers = $capacity_providers ?? [];
    $this->include = $include ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeCapacityProvidersResponse {
  public CapacityProviders $capacity_providers;
  public Failures $failures;
  public string $next_token;

  public function __construct(shape(
  ?'capacity_providers' => CapacityProviders,
  ?'failures' => Failures,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->capacity_providers = $capacity_providers ?? [];
    $this->failures = $failures ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeClustersRequest {
  public StringList $clusters;
  public ClusterFieldList $include;

  public function __construct(shape(
  ?'clusters' => StringList,
  ?'include' => ClusterFieldList,
  ) $s = shape()) {
    $this->clusters = $clusters ?? [];
    $this->include = $include ?? [];
  }
}

class DescribeClustersResponse {
  public Clusters $clusters;
  public Failures $failures;

  public function __construct(shape(
  ?'clusters' => Clusters,
  ?'failures' => Failures,
  ) $s = shape()) {
    $this->clusters = $clusters ?? [];
    $this->failures = $failures ?? [];
  }
}

class DescribeContainerInstancesRequest {
  public string $cluster;
  public StringList $container_instances;
  public ContainerInstanceFieldList $include;

  public function __construct(shape(
  ?'cluster' => string,
  ?'container_instances' => StringList,
  ?'include' => ContainerInstanceFieldList,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->container_instances = $container_instances ?? [];
    $this->include = $include ?? [];
  }
}

class DescribeContainerInstancesResponse {
  public ContainerInstances $container_instances;
  public Failures $failures;

  public function __construct(shape(
  ?'container_instances' => ContainerInstances,
  ?'failures' => Failures,
  ) $s = shape()) {
    $this->container_instances = $container_instances ?? [];
    $this->failures = $failures ?? [];
  }
}

class DescribeServicesRequest {
  public string $cluster;
  public ServiceFieldList $include;
  public StringList $services;

  public function __construct(shape(
  ?'cluster' => string,
  ?'include' => ServiceFieldList,
  ?'services' => StringList,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->include = $include ?? [];
    $this->services = $services ?? [];
  }
}

class DescribeServicesResponse {
  public Failures $failures;
  public Services $services;

  public function __construct(shape(
  ?'failures' => Failures,
  ?'services' => Services,
  ) $s = shape()) {
    $this->failures = $failures ?? [];
    $this->services = $services ?? [];
  }
}

class DescribeTaskDefinitionRequest {
  public TaskDefinitionFieldList $include;
  public string $task_definition;

  public function __construct(shape(
  ?'include' => TaskDefinitionFieldList,
  ?'task_definition' => string,
  ) $s = shape()) {
    $this->include = $include ?? [];
    $this->task_definition = $task_definition ?? "";
  }
}

class DescribeTaskDefinitionResponse {
  public Tags $tags;
  public TaskDefinition $task_definition;

  public function __construct(shape(
  ?'tags' => Tags,
  ?'task_definition' => TaskDefinition,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
    $this->task_definition = $task_definition ?? null;
  }
}

class DescribeTaskSetsRequest {
  public string $cluster;
  public TaskSetFieldList $include;
  public string $service;
  public StringList $task_sets;

  public function __construct(shape(
  ?'cluster' => string,
  ?'include' => TaskSetFieldList,
  ?'service' => string,
  ?'task_sets' => StringList,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->include = $include ?? [];
    $this->service = $service ?? "";
    $this->task_sets = $task_sets ?? [];
  }
}

class DescribeTaskSetsResponse {
  public Failures $failures;
  public TaskSets $task_sets;

  public function __construct(shape(
  ?'failures' => Failures,
  ?'task_sets' => TaskSets,
  ) $s = shape()) {
    $this->failures = $failures ?? [];
    $this->task_sets = $task_sets ?? [];
  }
}

class DescribeTasksRequest {
  public string $cluster;
  public TaskFieldList $include;
  public StringList $tasks;

  public function __construct(shape(
  ?'cluster' => string,
  ?'include' => TaskFieldList,
  ?'tasks' => StringList,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->include = $include ?? [];
    $this->tasks = $tasks ?? [];
  }
}

class DescribeTasksResponse {
  public Failures $failures;
  public Tasks $tasks;

  public function __construct(shape(
  ?'failures' => Failures,
  ?'tasks' => Tasks,
  ) $s = shape()) {
    $this->failures = $failures ?? [];
    $this->tasks = $tasks ?? [];
  }
}

type DesiredStatus = string;

class Device {
  public string $container_path;
  public string $host_path;
  public DeviceCgroupPermissions $permissions;

  public function __construct(shape(
  ?'container_path' => string,
  ?'host_path' => string,
  ?'permissions' => DeviceCgroupPermissions,
  ) $s = shape()) {
    $this->container_path = $container_path ?? "";
    $this->host_path = $host_path ?? "";
    $this->permissions = $permissions ?? [];
  }
}

type DeviceCgroupPermission = string;

type DeviceCgroupPermissions = vec<DeviceCgroupPermission>;

type DevicesList = vec<Device>;

class DiscoverPollEndpointRequest {
  public string $cluster;
  public string $container_instance;

  public function __construct(shape(
  ?'cluster' => string,
  ?'container_instance' => string,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->container_instance = $container_instance ?? "";
  }
}

class DiscoverPollEndpointResponse {
  public string $endpoint;
  public string $telemetry_endpoint;

  public function __construct(shape(
  ?'endpoint' => string,
  ?'telemetry_endpoint' => string,
  ) $s = shape()) {
    $this->endpoint = $endpoint ?? "";
    $this->telemetry_endpoint = $telemetry_endpoint ?? "";
  }
}

type DockerLabelsMap = dict<String, String>;

class DockerVolumeConfiguration {
  public BoxedBoolean $autoprovision;
  public string $driver;
  public StringMap $driver_opts;
  public StringMap $labels;
  public Scope $scope;

  public function __construct(shape(
  ?'autoprovision' => BoxedBoolean,
  ?'driver' => string,
  ?'driver_opts' => StringMap,
  ?'labels' => StringMap,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->autoprovision = $autoprovision ?? false;
    $this->driver = $driver ?? "";
    $this->driver_opts = $driver_opts ?? [];
    $this->labels = $labels ?? [];
    $this->scope = $scope ?? "";
  }
}

type Double = float;

class EFSAuthorizationConfig {
  public string $access_point_id;
  public EFSAuthorizationConfigIAM $iam;

  public function __construct(shape(
  ?'access_point_id' => string,
  ?'iam' => EFSAuthorizationConfigIAM,
  ) $s = shape()) {
    $this->access_point_id = $access_point_id ?? "";
    $this->iam = $iam ?? "";
  }
}

type EFSAuthorizationConfigIAM = string;

type EFSTransitEncryption = string;

class EFSVolumeConfiguration {
  public EFSAuthorizationConfig $authorization_config;
  public string $file_system_id;
  public string $root_directory;
  public EFSTransitEncryption $transit_encryption;
  public BoxedInteger $transit_encryption_port;

  public function __construct(shape(
  ?'authorization_config' => EFSAuthorizationConfig,
  ?'file_system_id' => string,
  ?'root_directory' => string,
  ?'transit_encryption' => EFSTransitEncryption,
  ?'transit_encryption_port' => BoxedInteger,
  ) $s = shape()) {
    $this->authorization_config = $authorization_config ?? null;
    $this->file_system_id = $file_system_id ?? "";
    $this->root_directory = $root_directory ?? "";
    $this->transit_encryption = $transit_encryption ?? "";
    $this->transit_encryption_port = $transit_encryption_port ?? 0;
  }
}

type EnvironmentVariables = vec<KeyValuePair>;

class Failure {
  public string $arn;
  public string $detail;
  public string $reason;

  public function __construct(shape(
  ?'arn' => string,
  ?'detail' => string,
  ?'reason' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->detail = $detail ?? "";
    $this->reason = $reason ?? "";
  }
}

type Failures = vec<Failure>;

class FirelensConfiguration {
  public FirelensConfigurationOptionsMap $options;
  public FirelensConfigurationType $type;

  public function __construct(shape(
  ?'options' => FirelensConfigurationOptionsMap,
  ?'type' => FirelensConfigurationType,
  ) $s = shape()) {
    $this->options = $options ?? [];
    $this->type = $type ?? "";
  }
}

type FirelensConfigurationOptionsMap = dict<String, String>;

type FirelensConfigurationType = string;

type GpuIds = vec<String>;

class HealthCheck {
  public StringList $command;
  public BoxedInteger $interval;
  public BoxedInteger $retries;
  public BoxedInteger $start_period;
  public BoxedInteger $timeout;

  public function __construct(shape(
  ?'command' => StringList,
  ?'interval' => BoxedInteger,
  ?'retries' => BoxedInteger,
  ?'start_period' => BoxedInteger,
  ?'timeout' => BoxedInteger,
  ) $s = shape()) {
    $this->command = $command ?? [];
    $this->interval = $interval ?? 0;
    $this->retries = $retries ?? 0;
    $this->start_period = $start_period ?? 0;
    $this->timeout = $timeout ?? 0;
  }
}

type HealthStatus = string;

class HostEntry {
  public string $hostname;
  public string $ip_address;

  public function __construct(shape(
  ?'hostname' => string,
  ?'ip_address' => string,
  ) $s = shape()) {
    $this->hostname = $hostname ?? "";
    $this->ip_address = $ip_address ?? "";
  }
}

type HostEntryList = vec<HostEntry>;

class HostVolumeProperties {
  public string $source_path;

  public function __construct(shape(
  ?'source_path' => string,
  ) $s = shape()) {
    $this->source_path = $source_path ?? "";
  }
}

class InferenceAccelerator {
  public string $device_name;
  public string $device_type;

  public function __construct(shape(
  ?'device_name' => string,
  ?'device_type' => string,
  ) $s = shape()) {
    $this->device_name = $device_name ?? "";
    $this->device_type = $device_type ?? "";
  }
}

class InferenceAcceleratorOverride {
  public string $device_name;
  public string $device_type;

  public function __construct(shape(
  ?'device_name' => string,
  ?'device_type' => string,
  ) $s = shape()) {
    $this->device_name = $device_name ?? "";
    $this->device_type = $device_type ?? "";
  }
}

type InferenceAcceleratorOverrides = vec<InferenceAcceleratorOverride>;

type InferenceAccelerators = vec<InferenceAccelerator>;

type Integer = int;

class InvalidParameterException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type IpcMode = string;

class KernelCapabilities {
  public StringList $add;
  public StringList $drop;

  public function __construct(shape(
  ?'add' => StringList,
  ?'drop' => StringList,
  ) $s = shape()) {
    $this->add = $add ?? [];
    $this->drop = $drop ?? [];
  }
}

class KeyValuePair {
  public string $name;
  public string $value;

  public function __construct(shape(
  ?'name' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type LaunchType = string;

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class LinuxParameters {
  public KernelCapabilities $capabilities;
  public DevicesList $devices;
  public BoxedBoolean $init_process_enabled;
  public BoxedInteger $max_swap;
  public BoxedInteger $shared_memory_size;
  public BoxedInteger $swappiness;
  public TmpfsList $tmpfs;

  public function __construct(shape(
  ?'capabilities' => KernelCapabilities,
  ?'devices' => DevicesList,
  ?'init_process_enabled' => BoxedBoolean,
  ?'max_swap' => BoxedInteger,
  ?'shared_memory_size' => BoxedInteger,
  ?'swappiness' => BoxedInteger,
  ?'tmpfs' => TmpfsList,
  ) $s = shape()) {
    $this->capabilities = $capabilities ?? null;
    $this->devices = $devices ?? [];
    $this->init_process_enabled = $init_process_enabled ?? false;
    $this->max_swap = $max_swap ?? 0;
    $this->shared_memory_size = $shared_memory_size ?? 0;
    $this->swappiness = $swappiness ?? 0;
    $this->tmpfs = $tmpfs ?? [];
  }
}

class ListAccountSettingsRequest {
  public boolean $effective_settings;
  public int $max_results;
  public SettingName $name;
  public string $next_token;
  public string $principal_arn;
  public string $value;

  public function __construct(shape(
  ?'effective_settings' => boolean,
  ?'max_results' => int,
  ?'name' => SettingName,
  ?'next_token' => string,
  ?'principal_arn' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->effective_settings = $effective_settings ?? false;
    $this->max_results = $max_results ?? 0;
    $this->name = $name ?? "";
    $this->next_token = $next_token ?? "";
    $this->principal_arn = $principal_arn ?? "";
    $this->value = $value ?? "";
  }
}

class ListAccountSettingsResponse {
  public string $next_token;
  public Settings $settings;

  public function __construct(shape(
  ?'next_token' => string,
  ?'settings' => Settings,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->settings = $settings ?? [];
  }
}

class ListAttributesRequest {
  public string $attribute_name;
  public string $attribute_value;
  public string $cluster;
  public BoxedInteger $max_results;
  public string $next_token;
  public TargetType $target_type;

  public function __construct(shape(
  ?'attribute_name' => string,
  ?'attribute_value' => string,
  ?'cluster' => string,
  ?'max_results' => BoxedInteger,
  ?'next_token' => string,
  ?'target_type' => TargetType,
  ) $s = shape()) {
    $this->attribute_name = $attribute_name ?? "";
    $this->attribute_value = $attribute_value ?? "";
    $this->cluster = $cluster ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->target_type = $target_type ?? "";
  }
}

class ListAttributesResponse {
  public Attributes $attributes;
  public string $next_token;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListClustersRequest {
  public BoxedInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'max_results' => BoxedInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListClustersResponse {
  public StringList $cluster_arns;
  public string $next_token;

  public function __construct(shape(
  ?'cluster_arns' => StringList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->cluster_arns = $cluster_arns ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListContainerInstancesRequest {
  public string $cluster;
  public string $filter;
  public BoxedInteger $max_results;
  public string $next_token;
  public ContainerInstanceStatus $status;

  public function __construct(shape(
  ?'cluster' => string,
  ?'filter' => string,
  ?'max_results' => BoxedInteger,
  ?'next_token' => string,
  ?'status' => ContainerInstanceStatus,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->filter = $filter ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->status = $status ?? "";
  }
}

class ListContainerInstancesResponse {
  public StringList $container_instance_arns;
  public string $next_token;

  public function __construct(shape(
  ?'container_instance_arns' => StringList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->container_instance_arns = $container_instance_arns ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListServicesRequest {
  public string $cluster;
  public LaunchType $launch_type;
  public BoxedInteger $max_results;
  public string $next_token;
  public SchedulingStrategy $scheduling_strategy;

  public function __construct(shape(
  ?'cluster' => string,
  ?'launch_type' => LaunchType,
  ?'max_results' => BoxedInteger,
  ?'next_token' => string,
  ?'scheduling_strategy' => SchedulingStrategy,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->launch_type = $launch_type ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->scheduling_strategy = $scheduling_strategy ?? "";
  }
}

class ListServicesResponse {
  public string $next_token;
  public StringList $service_arns;

  public function __construct(shape(
  ?'next_token' => string,
  ?'service_arns' => StringList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->service_arns = $service_arns ?? [];
  }
}

class ListTagsForResourceRequest {
  public string $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class ListTaskDefinitionFamiliesRequest {
  public string $family_prefix;
  public BoxedInteger $max_results;
  public string $next_token;
  public TaskDefinitionFamilyStatus $status;

  public function __construct(shape(
  ?'family_prefix' => string,
  ?'max_results' => BoxedInteger,
  ?'next_token' => string,
  ?'status' => TaskDefinitionFamilyStatus,
  ) $s = shape()) {
    $this->family_prefix = $family_prefix ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->status = $status ?? "";
  }
}

class ListTaskDefinitionFamiliesResponse {
  public StringList $families;
  public string $next_token;

  public function __construct(shape(
  ?'families' => StringList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->families = $families ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListTaskDefinitionsRequest {
  public string $family_prefix;
  public BoxedInteger $max_results;
  public string $next_token;
  public SortOrder $sort;
  public TaskDefinitionStatus $status;

  public function __construct(shape(
  ?'family_prefix' => string,
  ?'max_results' => BoxedInteger,
  ?'next_token' => string,
  ?'sort' => SortOrder,
  ?'status' => TaskDefinitionStatus,
  ) $s = shape()) {
    $this->family_prefix = $family_prefix ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort = $sort ?? "";
    $this->status = $status ?? "";
  }
}

class ListTaskDefinitionsResponse {
  public string $next_token;
  public StringList $task_definition_arns;

  public function __construct(shape(
  ?'next_token' => string,
  ?'task_definition_arns' => StringList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->task_definition_arns = $task_definition_arns ?? [];
  }
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

  public function __construct(shape(
  ?'cluster' => string,
  ?'container_instance' => string,
  ?'desired_status' => DesiredStatus,
  ?'family' => string,
  ?'launch_type' => LaunchType,
  ?'max_results' => BoxedInteger,
  ?'next_token' => string,
  ?'service_name' => string,
  ?'started_by' => string,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->container_instance = $container_instance ?? "";
    $this->desired_status = $desired_status ?? "";
    $this->family = $family ?? "";
    $this->launch_type = $launch_type ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->service_name = $service_name ?? "";
    $this->started_by = $started_by ?? "";
  }
}

class ListTasksResponse {
  public string $next_token;
  public StringList $task_arns;

  public function __construct(shape(
  ?'next_token' => string,
  ?'task_arns' => StringList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->task_arns = $task_arns ?? [];
  }
}

class LoadBalancer {
  public string $container_name;
  public BoxedInteger $container_port;
  public string $load_balancer_name;
  public string $target_group_arn;

  public function __construct(shape(
  ?'container_name' => string,
  ?'container_port' => BoxedInteger,
  ?'load_balancer_name' => string,
  ?'target_group_arn' => string,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
    $this->container_port = $container_port ?? 0;
    $this->load_balancer_name = $load_balancer_name ?? "";
    $this->target_group_arn = $target_group_arn ?? "";
  }
}

type LoadBalancers = vec<LoadBalancer>;

class LogConfiguration {
  public LogDriver $log_driver;
  public LogConfigurationOptionsMap $options;
  public SecretList $secret_options;

  public function __construct(shape(
  ?'log_driver' => LogDriver,
  ?'options' => LogConfigurationOptionsMap,
  ?'secret_options' => SecretList,
  ) $s = shape()) {
    $this->log_driver = $log_driver ?? "";
    $this->options = $options ?? [];
    $this->secret_options = $secret_options ?? [];
  }
}

type LogConfigurationOptionsMap = dict<String, String>;

type LogDriver = string;

type Long = int;

class ManagedScaling {
  public ManagedScalingStepSize $maximum_scaling_step_size;
  public ManagedScalingStepSize $minimum_scaling_step_size;
  public ManagedScalingStatus $status;
  public ManagedScalingTargetCapacity $target_capacity;

  public function __construct(shape(
  ?'maximum_scaling_step_size' => ManagedScalingStepSize,
  ?'minimum_scaling_step_size' => ManagedScalingStepSize,
  ?'status' => ManagedScalingStatus,
  ?'target_capacity' => ManagedScalingTargetCapacity,
  ) $s = shape()) {
    $this->maximum_scaling_step_size = $maximum_scaling_step_size ?? 0;
    $this->minimum_scaling_step_size = $minimum_scaling_step_size ?? 0;
    $this->status = $status ?? "";
    $this->target_capacity = $target_capacity ?? 0;
  }
}

type ManagedScalingStatus = string;

type ManagedScalingStepSize = int;

type ManagedScalingTargetCapacity = int;

type ManagedTerminationProtection = string;

class MissingVersionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MountPoint {
  public string $container_path;
  public BoxedBoolean $read_only;
  public string $source_volume;

  public function __construct(shape(
  ?'container_path' => string,
  ?'read_only' => BoxedBoolean,
  ?'source_volume' => string,
  ) $s = shape()) {
    $this->container_path = $container_path ?? "";
    $this->read_only = $read_only ?? false;
    $this->source_volume = $source_volume ?? "";
  }
}

type MountPointList = vec<MountPoint>;

class NetworkBinding {
  public string $bind_ip;
  public BoxedInteger $container_port;
  public BoxedInteger $host_port;
  public TransportProtocol $protocol;

  public function __construct(shape(
  ?'bind_ip' => string,
  ?'container_port' => BoxedInteger,
  ?'host_port' => BoxedInteger,
  ?'protocol' => TransportProtocol,
  ) $s = shape()) {
    $this->bind_ip = $bind_ip ?? "";
    $this->container_port = $container_port ?? 0;
    $this->host_port = $host_port ?? 0;
    $this->protocol = $protocol ?? "";
  }
}

type NetworkBindings = vec<NetworkBinding>;

class NetworkConfiguration {
  public AwsVpcConfiguration $awsvpc_configuration;

  public function __construct(shape(
  ?'awsvpc_configuration' => AwsVpcConfiguration,
  ) $s = shape()) {
    $this->awsvpc_configuration = $awsvpc_configuration ?? null;
  }
}

class NetworkInterface {
  public string $attachment_id;
  public string $ipv_6_address;
  public string $private_ipv_4_address;

  public function __construct(shape(
  ?'attachment_id' => string,
  ?'ipv_6_address' => string,
  ?'private_ipv_4_address' => string,
  ) $s = shape()) {
    $this->attachment_id = $attachment_id ?? "";
    $this->ipv_6_address = $ipv_6_address ?? "";
    $this->private_ipv_4_address = $private_ipv_4_address ?? "";
  }
}

type NetworkInterfaces = vec<NetworkInterface>;

type NetworkMode = string;

class NoUpdateAvailableException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type PidMode = string;

class PlacementConstraint {
  public string $expression;
  public PlacementConstraintType $type;

  public function __construct(shape(
  ?'expression' => string,
  ?'type' => PlacementConstraintType,
  ) $s = shape()) {
    $this->expression = $expression ?? "";
    $this->type = $type ?? "";
  }
}

type PlacementConstraintType = string;

type PlacementConstraints = vec<PlacementConstraint>;

type PlacementStrategies = vec<PlacementStrategy>;

class PlacementStrategy {
  public string $field;
  public PlacementStrategyType $type;

  public function __construct(shape(
  ?'field' => string,
  ?'type' => PlacementStrategyType,
  ) $s = shape()) {
    $this->field = $field ?? "";
    $this->type = $type ?? "";
  }
}

type PlacementStrategyType = string;

class PlatformDevice {
  public string $id;
  public PlatformDeviceType $type;

  public function __construct(shape(
  ?'id' => string,
  ?'type' => PlatformDeviceType,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->type = $type ?? "";
  }
}

type PlatformDeviceType = string;

type PlatformDevices = vec<PlatformDevice>;

class PlatformTaskDefinitionIncompatibilityException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PlatformUnknownException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PortMapping {
  public BoxedInteger $container_port;
  public BoxedInteger $host_port;
  public TransportProtocol $protocol;

  public function __construct(shape(
  ?'container_port' => BoxedInteger,
  ?'host_port' => BoxedInteger,
  ?'protocol' => TransportProtocol,
  ) $s = shape()) {
    $this->container_port = $container_port ?? 0;
    $this->host_port = $host_port ?? 0;
    $this->protocol = $protocol ?? "";
  }
}

type PortMappingList = vec<PortMapping>;

type PropagateTags = string;

class ProxyConfiguration {
  public string $container_name;
  public ProxyConfigurationProperties $properties;
  public ProxyConfigurationType $type;

  public function __construct(shape(
  ?'container_name' => string,
  ?'properties' => ProxyConfigurationProperties,
  ?'type' => ProxyConfigurationType,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
    $this->properties = $properties ?? [];
    $this->type = $type ?? "";
  }
}

type ProxyConfigurationProperties = vec<KeyValuePair>;

type ProxyConfigurationType = string;

class PutAccountSettingDefaultRequest {
  public SettingName $name;
  public string $value;

  public function __construct(shape(
  ?'name' => SettingName,
  ?'value' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

class PutAccountSettingDefaultResponse {
  public Setting $setting;

  public function __construct(shape(
  ?'setting' => Setting,
  ) $s = shape()) {
    $this->setting = $setting ?? null;
  }
}

class PutAccountSettingRequest {
  public SettingName $name;
  public string $principal_arn;
  public string $value;

  public function __construct(shape(
  ?'name' => SettingName,
  ?'principal_arn' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->principal_arn = $principal_arn ?? "";
    $this->value = $value ?? "";
  }
}

class PutAccountSettingResponse {
  public Setting $setting;

  public function __construct(shape(
  ?'setting' => Setting,
  ) $s = shape()) {
    $this->setting = $setting ?? null;
  }
}

class PutAttributesRequest {
  public Attributes $attributes;
  public string $cluster;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'cluster' => string,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->cluster = $cluster ?? "";
  }
}

class PutAttributesResponse {
  public Attributes $attributes;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
  }
}

class PutClusterCapacityProvidersRequest {
  public StringList $capacity_providers;
  public string $cluster;
  public CapacityProviderStrategy $default_capacity_provider_strategy;

  public function __construct(shape(
  ?'capacity_providers' => StringList,
  ?'cluster' => string,
  ?'default_capacity_provider_strategy' => CapacityProviderStrategy,
  ) $s = shape()) {
    $this->capacity_providers = $capacity_providers ?? [];
    $this->cluster = $cluster ?? "";
    $this->default_capacity_provider_strategy = $default_capacity_provider_strategy ?? [];
  }
}

class PutClusterCapacityProvidersResponse {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
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

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'cluster' => string,
  ?'container_instance_arn' => string,
  ?'instance_identity_document' => string,
  ?'instance_identity_document_signature' => string,
  ?'platform_devices' => PlatformDevices,
  ?'tags' => Tags,
  ?'total_resources' => Resources,
  ?'version_info' => VersionInfo,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->cluster = $cluster ?? "";
    $this->container_instance_arn = $container_instance_arn ?? "";
    $this->instance_identity_document = $instance_identity_document ?? "";
    $this->instance_identity_document_signature = $instance_identity_document_signature ?? "";
    $this->platform_devices = $platform_devices ?? [];
    $this->tags = $tags ?? [];
    $this->total_resources = $total_resources ?? [];
    $this->version_info = $version_info ?? null;
  }
}

class RegisterContainerInstanceResponse {
  public ContainerInstance $container_instance;

  public function __construct(shape(
  ?'container_instance' => ContainerInstance,
  ) $s = shape()) {
    $this->container_instance = $container_instance ?? null;
  }
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

  public function __construct(shape(
  ?'container_definitions' => ContainerDefinitions,
  ?'cpu' => string,
  ?'execution_role_arn' => string,
  ?'family' => string,
  ?'inference_accelerators' => InferenceAccelerators,
  ?'ipc_mode' => IpcMode,
  ?'memory' => string,
  ?'network_mode' => NetworkMode,
  ?'pid_mode' => PidMode,
  ?'placement_constraints' => TaskDefinitionPlacementConstraints,
  ?'proxy_configuration' => ProxyConfiguration,
  ?'requires_compatibilities' => CompatibilityList,
  ?'tags' => Tags,
  ?'task_role_arn' => string,
  ?'volumes' => VolumeList,
  ) $s = shape()) {
    $this->container_definitions = $container_definitions ?? [];
    $this->cpu = $cpu ?? "";
    $this->execution_role_arn = $execution_role_arn ?? "";
    $this->family = $family ?? "";
    $this->inference_accelerators = $inference_accelerators ?? [];
    $this->ipc_mode = $ipc_mode ?? "";
    $this->memory = $memory ?? "";
    $this->network_mode = $network_mode ?? "";
    $this->pid_mode = $pid_mode ?? "";
    $this->placement_constraints = $placement_constraints ?? [];
    $this->proxy_configuration = $proxy_configuration ?? null;
    $this->requires_compatibilities = $requires_compatibilities ?? [];
    $this->tags = $tags ?? [];
    $this->task_role_arn = $task_role_arn ?? "";
    $this->volumes = $volumes ?? [];
  }
}

class RegisterTaskDefinitionResponse {
  public Tags $tags;
  public TaskDefinition $task_definition;

  public function __construct(shape(
  ?'tags' => Tags,
  ?'task_definition' => TaskDefinition,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
    $this->task_definition = $task_definition ?? null;
  }
}

class RepositoryCredentials {
  public string $credentials_parameter;

  public function __construct(shape(
  ?'credentials_parameter' => string,
  ) $s = shape()) {
    $this->credentials_parameter = $credentials_parameter ?? "";
  }
}

type RequiresAttributes = vec<Attribute>;

class Resource {
  public Double $double_value;
  public int $integer_value;
  public Long $long_value;
  public string $name;
  public StringList $string_set_value;
  public string $type;

  public function __construct(shape(
  ?'double_value' => Double,
  ?'integer_value' => int,
  ?'long_value' => Long,
  ?'name' => string,
  ?'string_set_value' => StringList,
  ?'type' => string,
  ) $s = shape()) {
    $this->double_value = $double_value ?? 0.0;
    $this->integer_value = $integer_value ?? 0;
    $this->long_value = $long_value ?? 0;
    $this->name = $name ?? "";
    $this->string_set_value = $string_set_value ?? [];
    $this->type = $type ?? "";
  }
}

class ResourceInUseException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceRequirement {
  public ResourceType $type;
  public string $value;

  public function __construct(shape(
  ?'type' => ResourceType,
  ?'value' => string,
  ) $s = shape()) {
    $this->type = $type ?? "";
    $this->value = $value ?? "";
  }
}

type ResourceRequirements = vec<ResourceRequirement>;

type ResourceType = string;

type Resources = vec<Resource>;

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

  public function __construct(shape(
  ?'capacity_provider_strategy' => CapacityProviderStrategy,
  ?'cluster' => string,
  ?'count' => BoxedInteger,
  ?'enable_ecs_managed_tags' => boolean,
  ?'group' => string,
  ?'launch_type' => LaunchType,
  ?'network_configuration' => NetworkConfiguration,
  ?'overrides' => TaskOverride,
  ?'placement_constraints' => PlacementConstraints,
  ?'placement_strategy' => PlacementStrategies,
  ?'platform_version' => string,
  ?'propagate_tags' => PropagateTags,
  ?'reference_id' => string,
  ?'started_by' => string,
  ?'tags' => Tags,
  ?'task_definition' => string,
  ) $s = shape()) {
    $this->capacity_provider_strategy = $capacity_provider_strategy ?? [];
    $this->cluster = $cluster ?? "";
    $this->count = $count ?? 0;
    $this->enable_ecs_managed_tags = $enable_ecs_managed_tags ?? false;
    $this->group = $group ?? "";
    $this->launch_type = $launch_type ?? "";
    $this->network_configuration = $network_configuration ?? null;
    $this->overrides = $overrides ?? null;
    $this->placement_constraints = $placement_constraints ?? [];
    $this->placement_strategy = $placement_strategy ?? [];
    $this->platform_version = $platform_version ?? "";
    $this->propagate_tags = $propagate_tags ?? "";
    $this->reference_id = $reference_id ?? "";
    $this->started_by = $started_by ?? "";
    $this->tags = $tags ?? [];
    $this->task_definition = $task_definition ?? "";
  }
}

class RunTaskResponse {
  public Failures $failures;
  public Tasks $tasks;

  public function __construct(shape(
  ?'failures' => Failures,
  ?'tasks' => Tasks,
  ) $s = shape()) {
    $this->failures = $failures ?? [];
    $this->tasks = $tasks ?? [];
  }
}

class Scale {
  public ScaleUnit $unit;
  public Double $value;

  public function __construct(shape(
  ?'unit' => ScaleUnit,
  ?'value' => Double,
  ) $s = shape()) {
    $this->unit = $unit ?? "";
    $this->value = $value ?? 0.0;
  }
}

type ScaleUnit = string;

type SchedulingStrategy = string;

type Scope = string;

class Secret {
  public string $name;
  public string $value_from;

  public function __construct(shape(
  ?'name' => string,
  ?'value_from' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value_from = $value_from ?? "";
  }
}

type SecretList = vec<Secret>;

class ServerException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'capacity_provider_strategy' => CapacityProviderStrategy,
  ?'cluster_arn' => string,
  ?'created_at' => Timestamp,
  ?'created_by' => string,
  ?'deployment_configuration' => DeploymentConfiguration,
  ?'deployment_controller' => DeploymentController,
  ?'deployments' => Deployments,
  ?'desired_count' => int,
  ?'enable_ecs_managed_tags' => boolean,
  ?'events' => ServiceEvents,
  ?'health_check_grace_period_seconds' => BoxedInteger,
  ?'launch_type' => LaunchType,
  ?'load_balancers' => LoadBalancers,
  ?'network_configuration' => NetworkConfiguration,
  ?'pending_count' => int,
  ?'placement_constraints' => PlacementConstraints,
  ?'placement_strategy' => PlacementStrategies,
  ?'platform_version' => string,
  ?'propagate_tags' => PropagateTags,
  ?'role_arn' => string,
  ?'running_count' => int,
  ?'scheduling_strategy' => SchedulingStrategy,
  ?'service_arn' => string,
  ?'service_name' => string,
  ?'service_registries' => ServiceRegistries,
  ?'status' => string,
  ?'tags' => Tags,
  ?'task_definition' => string,
  ?'task_sets' => TaskSets,
  ) $s = shape()) {
    $this->capacity_provider_strategy = $capacity_provider_strategy ?? [];
    $this->cluster_arn = $cluster_arn ?? "";
    $this->created_at = $created_at ?? 0;
    $this->created_by = $created_by ?? "";
    $this->deployment_configuration = $deployment_configuration ?? null;
    $this->deployment_controller = $deployment_controller ?? null;
    $this->deployments = $deployments ?? [];
    $this->desired_count = $desired_count ?? 0;
    $this->enable_ecs_managed_tags = $enable_ecs_managed_tags ?? false;
    $this->events = $events ?? [];
    $this->health_check_grace_period_seconds = $health_check_grace_period_seconds ?? 0;
    $this->launch_type = $launch_type ?? "";
    $this->load_balancers = $load_balancers ?? [];
    $this->network_configuration = $network_configuration ?? null;
    $this->pending_count = $pending_count ?? 0;
    $this->placement_constraints = $placement_constraints ?? [];
    $this->placement_strategy = $placement_strategy ?? [];
    $this->platform_version = $platform_version ?? "";
    $this->propagate_tags = $propagate_tags ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->running_count = $running_count ?? 0;
    $this->scheduling_strategy = $scheduling_strategy ?? "";
    $this->service_arn = $service_arn ?? "";
    $this->service_name = $service_name ?? "";
    $this->service_registries = $service_registries ?? [];
    $this->status = $status ?? "";
    $this->tags = $tags ?? [];
    $this->task_definition = $task_definition ?? "";
    $this->task_sets = $task_sets ?? [];
  }
}

class ServiceEvent {
  public Timestamp $created_at;
  public string $id;
  public string $message;

  public function __construct(shape(
  ?'created_at' => Timestamp,
  ?'id' => string,
  ?'message' => string,
  ) $s = shape()) {
    $this->created_at = $created_at ?? 0;
    $this->id = $id ?? "";
    $this->message = $message ?? "";
  }
}

type ServiceEvents = vec<ServiceEvent>;

type ServiceField = string;

type ServiceFieldList = vec<ServiceField>;

class ServiceNotActiveException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ServiceNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ServiceRegistries = vec<ServiceRegistry>;

class ServiceRegistry {
  public string $container_name;
  public BoxedInteger $container_port;
  public BoxedInteger $port;
  public string $registry_arn;

  public function __construct(shape(
  ?'container_name' => string,
  ?'container_port' => BoxedInteger,
  ?'port' => BoxedInteger,
  ?'registry_arn' => string,
  ) $s = shape()) {
    $this->container_name = $container_name ?? "";
    $this->container_port = $container_port ?? 0;
    $this->port = $port ?? 0;
    $this->registry_arn = $registry_arn ?? "";
  }
}

type Services = vec<Service>;

class Setting {
  public SettingName $name;
  public string $principal_arn;
  public string $value;

  public function __construct(shape(
  ?'name' => SettingName,
  ?'principal_arn' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->principal_arn = $principal_arn ?? "";
    $this->value = $value ?? "";
  }
}

type SettingName = string;

type Settings = vec<Setting>;

type SortOrder = string;

type StabilityStatus = string;

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

  public function __construct(shape(
  ?'cluster' => string,
  ?'container_instances' => StringList,
  ?'enable_ecs_managed_tags' => boolean,
  ?'group' => string,
  ?'network_configuration' => NetworkConfiguration,
  ?'overrides' => TaskOverride,
  ?'propagate_tags' => PropagateTags,
  ?'reference_id' => string,
  ?'started_by' => string,
  ?'tags' => Tags,
  ?'task_definition' => string,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->container_instances = $container_instances ?? [];
    $this->enable_ecs_managed_tags = $enable_ecs_managed_tags ?? false;
    $this->group = $group ?? "";
    $this->network_configuration = $network_configuration ?? null;
    $this->overrides = $overrides ?? null;
    $this->propagate_tags = $propagate_tags ?? "";
    $this->reference_id = $reference_id ?? "";
    $this->started_by = $started_by ?? "";
    $this->tags = $tags ?? [];
    $this->task_definition = $task_definition ?? "";
  }
}

class StartTaskResponse {
  public Failures $failures;
  public Tasks $tasks;

  public function __construct(shape(
  ?'failures' => Failures,
  ?'tasks' => Tasks,
  ) $s = shape()) {
    $this->failures = $failures ?? [];
    $this->tasks = $tasks ?? [];
  }
}

type Statistics = vec<KeyValuePair>;

class StopTaskRequest {
  public string $cluster;
  public string $reason;
  public string $task;

  public function __construct(shape(
  ?'cluster' => string,
  ?'reason' => string,
  ?'task' => string,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->reason = $reason ?? "";
    $this->task = $task ?? "";
  }
}

class StopTaskResponse {
  public Task $task;

  public function __construct(shape(
  ?'task' => Task,
  ) $s = shape()) {
    $this->task = $task ?? null;
  }
}

type String = string;

type StringList = vec<String>;

type StringMap = dict<String, String>;

class SubmitAttachmentStateChangesRequest {
  public AttachmentStateChanges $attachments;
  public string $cluster;

  public function __construct(shape(
  ?'attachments' => AttachmentStateChanges,
  ?'cluster' => string,
  ) $s = shape()) {
    $this->attachments = $attachments ?? [];
    $this->cluster = $cluster ?? "";
  }
}

class SubmitAttachmentStateChangesResponse {
  public string $acknowledgment;

  public function __construct(shape(
  ?'acknowledgment' => string,
  ) $s = shape()) {
    $this->acknowledgment = $acknowledgment ?? "";
  }
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

  public function __construct(shape(
  ?'cluster' => string,
  ?'container_name' => string,
  ?'exit_code' => BoxedInteger,
  ?'network_bindings' => NetworkBindings,
  ?'reason' => string,
  ?'runtime_id' => string,
  ?'status' => string,
  ?'task' => string,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->container_name = $container_name ?? "";
    $this->exit_code = $exit_code ?? 0;
    $this->network_bindings = $network_bindings ?? [];
    $this->reason = $reason ?? "";
    $this->runtime_id = $runtime_id ?? "";
    $this->status = $status ?? "";
    $this->task = $task ?? "";
  }
}

class SubmitContainerStateChangeResponse {
  public string $acknowledgment;

  public function __construct(shape(
  ?'acknowledgment' => string,
  ) $s = shape()) {
    $this->acknowledgment = $acknowledgment ?? "";
  }
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

  public function __construct(shape(
  ?'attachments' => AttachmentStateChanges,
  ?'cluster' => string,
  ?'containers' => ContainerStateChanges,
  ?'execution_stopped_at' => Timestamp,
  ?'pull_started_at' => Timestamp,
  ?'pull_stopped_at' => Timestamp,
  ?'reason' => string,
  ?'status' => string,
  ?'task' => string,
  ) $s = shape()) {
    $this->attachments = $attachments ?? [];
    $this->cluster = $cluster ?? "";
    $this->containers = $containers ?? [];
    $this->execution_stopped_at = $execution_stopped_at ?? 0;
    $this->pull_started_at = $pull_started_at ?? 0;
    $this->pull_stopped_at = $pull_stopped_at ?? 0;
    $this->reason = $reason ?? "";
    $this->status = $status ?? "";
    $this->task = $task ?? "";
  }
}

class SubmitTaskStateChangeResponse {
  public string $acknowledgment;

  public function __construct(shape(
  ?'acknowledgment' => string,
  ) $s = shape()) {
    $this->acknowledgment = $acknowledgment ?? "";
  }
}

class SystemControl {
  public string $namespace;
  public string $value;

  public function __construct(shape(
  ?'namespace' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->namespace = $namespace ?? "";
    $this->value = $value ?? "";
  }
}

type SystemControls = vec<SystemControl>;

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

type TagKeys = vec<TagKey>;

class TagResourceRequest {
  public string $resource_arn;
  public Tags $tags;

  public function __construct(shape(
  ?'resource_arn' => string,
  ?'tags' => Tags,
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

type Tags = vec<Tag>;

class TargetNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TargetType = string;

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

  public function __construct(shape(
  ?'attachments' => Attachments,
  ?'attributes' => Attributes,
  ?'availability_zone' => string,
  ?'capacity_provider_name' => string,
  ?'cluster_arn' => string,
  ?'connectivity' => Connectivity,
  ?'connectivity_at' => Timestamp,
  ?'container_instance_arn' => string,
  ?'containers' => Containers,
  ?'cpu' => string,
  ?'created_at' => Timestamp,
  ?'desired_status' => string,
  ?'execution_stopped_at' => Timestamp,
  ?'group' => string,
  ?'health_status' => HealthStatus,
  ?'inference_accelerators' => InferenceAccelerators,
  ?'last_status' => string,
  ?'launch_type' => LaunchType,
  ?'memory' => string,
  ?'overrides' => TaskOverride,
  ?'platform_version' => string,
  ?'pull_started_at' => Timestamp,
  ?'pull_stopped_at' => Timestamp,
  ?'started_at' => Timestamp,
  ?'started_by' => string,
  ?'stop_code' => TaskStopCode,
  ?'stopped_at' => Timestamp,
  ?'stopped_reason' => string,
  ?'stopping_at' => Timestamp,
  ?'tags' => Tags,
  ?'task_arn' => string,
  ?'task_definition_arn' => string,
  ?'version' => Long,
  ) $s = shape()) {
    $this->attachments = $attachments ?? [];
    $this->attributes = $attributes ?? [];
    $this->availability_zone = $availability_zone ?? "";
    $this->capacity_provider_name = $capacity_provider_name ?? "";
    $this->cluster_arn = $cluster_arn ?? "";
    $this->connectivity = $connectivity ?? "";
    $this->connectivity_at = $connectivity_at ?? 0;
    $this->container_instance_arn = $container_instance_arn ?? "";
    $this->containers = $containers ?? [];
    $this->cpu = $cpu ?? "";
    $this->created_at = $created_at ?? 0;
    $this->desired_status = $desired_status ?? "";
    $this->execution_stopped_at = $execution_stopped_at ?? 0;
    $this->group = $group ?? "";
    $this->health_status = $health_status ?? "";
    $this->inference_accelerators = $inference_accelerators ?? [];
    $this->last_status = $last_status ?? "";
    $this->launch_type = $launch_type ?? "";
    $this->memory = $memory ?? "";
    $this->overrides = $overrides ?? null;
    $this->platform_version = $platform_version ?? "";
    $this->pull_started_at = $pull_started_at ?? 0;
    $this->pull_stopped_at = $pull_stopped_at ?? 0;
    $this->started_at = $started_at ?? 0;
    $this->started_by = $started_by ?? "";
    $this->stop_code = $stop_code ?? "";
    $this->stopped_at = $stopped_at ?? 0;
    $this->stopped_reason = $stopped_reason ?? "";
    $this->stopping_at = $stopping_at ?? 0;
    $this->tags = $tags ?? [];
    $this->task_arn = $task_arn ?? "";
    $this->task_definition_arn = $task_definition_arn ?? "";
    $this->version = $version ?? 0;
  }
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

  public function __construct(shape(
  ?'compatibilities' => CompatibilityList,
  ?'container_definitions' => ContainerDefinitions,
  ?'cpu' => string,
  ?'execution_role_arn' => string,
  ?'family' => string,
  ?'inference_accelerators' => InferenceAccelerators,
  ?'ipc_mode' => IpcMode,
  ?'memory' => string,
  ?'network_mode' => NetworkMode,
  ?'pid_mode' => PidMode,
  ?'placement_constraints' => TaskDefinitionPlacementConstraints,
  ?'proxy_configuration' => ProxyConfiguration,
  ?'requires_attributes' => RequiresAttributes,
  ?'requires_compatibilities' => CompatibilityList,
  ?'revision' => int,
  ?'status' => TaskDefinitionStatus,
  ?'task_definition_arn' => string,
  ?'task_role_arn' => string,
  ?'volumes' => VolumeList,
  ) $s = shape()) {
    $this->compatibilities = $compatibilities ?? [];
    $this->container_definitions = $container_definitions ?? [];
    $this->cpu = $cpu ?? "";
    $this->execution_role_arn = $execution_role_arn ?? "";
    $this->family = $family ?? "";
    $this->inference_accelerators = $inference_accelerators ?? [];
    $this->ipc_mode = $ipc_mode ?? "";
    $this->memory = $memory ?? "";
    $this->network_mode = $network_mode ?? "";
    $this->pid_mode = $pid_mode ?? "";
    $this->placement_constraints = $placement_constraints ?? [];
    $this->proxy_configuration = $proxy_configuration ?? null;
    $this->requires_attributes = $requires_attributes ?? [];
    $this->requires_compatibilities = $requires_compatibilities ?? [];
    $this->revision = $revision ?? 0;
    $this->status = $status ?? "";
    $this->task_definition_arn = $task_definition_arn ?? "";
    $this->task_role_arn = $task_role_arn ?? "";
    $this->volumes = $volumes ?? [];
  }
}

type TaskDefinitionFamilyStatus = string;

type TaskDefinitionField = string;

type TaskDefinitionFieldList = vec<TaskDefinitionField>;

class TaskDefinitionPlacementConstraint {
  public string $expression;
  public TaskDefinitionPlacementConstraintType $type;

  public function __construct(shape(
  ?'expression' => string,
  ?'type' => TaskDefinitionPlacementConstraintType,
  ) $s = shape()) {
    $this->expression = $expression ?? "";
    $this->type = $type ?? "";
  }
}

type TaskDefinitionPlacementConstraintType = string;

type TaskDefinitionPlacementConstraints = vec<TaskDefinitionPlacementConstraint>;

type TaskDefinitionStatus = string;

type TaskField = string;

type TaskFieldList = vec<TaskField>;

class TaskOverride {
  public ContainerOverrides $container_overrides;
  public string $cpu;
  public string $execution_role_arn;
  public InferenceAcceleratorOverrides $inference_accelerator_overrides;
  public string $memory;
  public string $task_role_arn;

  public function __construct(shape(
  ?'container_overrides' => ContainerOverrides,
  ?'cpu' => string,
  ?'execution_role_arn' => string,
  ?'inference_accelerator_overrides' => InferenceAcceleratorOverrides,
  ?'memory' => string,
  ?'task_role_arn' => string,
  ) $s = shape()) {
    $this->container_overrides = $container_overrides ?? [];
    $this->cpu = $cpu ?? "";
    $this->execution_role_arn = $execution_role_arn ?? "";
    $this->inference_accelerator_overrides = $inference_accelerator_overrides ?? [];
    $this->memory = $memory ?? "";
    $this->task_role_arn = $task_role_arn ?? "";
  }
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

  public function __construct(shape(
  ?'capacity_provider_strategy' => CapacityProviderStrategy,
  ?'cluster_arn' => string,
  ?'computed_desired_count' => int,
  ?'created_at' => Timestamp,
  ?'external_id' => string,
  ?'id' => string,
  ?'launch_type' => LaunchType,
  ?'load_balancers' => LoadBalancers,
  ?'network_configuration' => NetworkConfiguration,
  ?'pending_count' => int,
  ?'platform_version' => string,
  ?'running_count' => int,
  ?'scale' => Scale,
  ?'service_arn' => string,
  ?'service_registries' => ServiceRegistries,
  ?'stability_status' => StabilityStatus,
  ?'stability_status_at' => Timestamp,
  ?'started_by' => string,
  ?'status' => string,
  ?'tags' => Tags,
  ?'task_definition' => string,
  ?'task_set_arn' => string,
  ?'updated_at' => Timestamp,
  ) $s = shape()) {
    $this->capacity_provider_strategy = $capacity_provider_strategy ?? [];
    $this->cluster_arn = $cluster_arn ?? "";
    $this->computed_desired_count = $computed_desired_count ?? 0;
    $this->created_at = $created_at ?? 0;
    $this->external_id = $external_id ?? "";
    $this->id = $id ?? "";
    $this->launch_type = $launch_type ?? "";
    $this->load_balancers = $load_balancers ?? [];
    $this->network_configuration = $network_configuration ?? null;
    $this->pending_count = $pending_count ?? 0;
    $this->platform_version = $platform_version ?? "";
    $this->running_count = $running_count ?? 0;
    $this->scale = $scale ?? null;
    $this->service_arn = $service_arn ?? "";
    $this->service_registries = $service_registries ?? [];
    $this->stability_status = $stability_status ?? "";
    $this->stability_status_at = $stability_status_at ?? 0;
    $this->started_by = $started_by ?? "";
    $this->status = $status ?? "";
    $this->tags = $tags ?? [];
    $this->task_definition = $task_definition ?? "";
    $this->task_set_arn = $task_set_arn ?? "";
    $this->updated_at = $updated_at ?? 0;
  }
}

type TaskSetField = string;

type TaskSetFieldList = vec<TaskSetField>;

class TaskSetNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TaskSets = vec<TaskSet>;

type TaskStopCode = string;

type Tasks = vec<Task>;

type Timestamp = int;

class Tmpfs {
  public string $container_path;
  public StringList $mount_options;
  public int $size;

  public function __construct(shape(
  ?'container_path' => string,
  ?'mount_options' => StringList,
  ?'size' => int,
  ) $s = shape()) {
    $this->container_path = $container_path ?? "";
    $this->mount_options = $mount_options ?? [];
    $this->size = $size ?? 0;
  }
}

type TmpfsList = vec<Tmpfs>;

type TransportProtocol = string;

class Ulimit {
  public int $hard_limit;
  public UlimitName $name;
  public int $soft_limit;

  public function __construct(shape(
  ?'hard_limit' => int,
  ?'name' => UlimitName,
  ?'soft_limit' => int,
  ) $s = shape()) {
    $this->hard_limit = $hard_limit ?? 0;
    $this->name = $name ?? "";
    $this->soft_limit = $soft_limit ?? 0;
  }
}

type UlimitList = vec<Ulimit>;

type UlimitName = string;

class UnsupportedFeatureException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UntagResourceRequest {
  public string $resource_arn;
  public TagKeys $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => string,
  ?'tag_keys' => TagKeys,
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

class UpdateClusterSettingsRequest {
  public string $cluster;
  public ClusterSettings $settings;

  public function __construct(shape(
  ?'cluster' => string,
  ?'settings' => ClusterSettings,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->settings = $settings ?? [];
  }
}

class UpdateClusterSettingsResponse {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class UpdateContainerAgentRequest {
  public string $cluster;
  public string $container_instance;

  public function __construct(shape(
  ?'cluster' => string,
  ?'container_instance' => string,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->container_instance = $container_instance ?? "";
  }
}

class UpdateContainerAgentResponse {
  public ContainerInstance $container_instance;

  public function __construct(shape(
  ?'container_instance' => ContainerInstance,
  ) $s = shape()) {
    $this->container_instance = $container_instance ?? null;
  }
}

class UpdateContainerInstancesStateRequest {
  public string $cluster;
  public StringList $container_instances;
  public ContainerInstanceStatus $status;

  public function __construct(shape(
  ?'cluster' => string,
  ?'container_instances' => StringList,
  ?'status' => ContainerInstanceStatus,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->container_instances = $container_instances ?? [];
    $this->status = $status ?? "";
  }
}

class UpdateContainerInstancesStateResponse {
  public ContainerInstances $container_instances;
  public Failures $failures;

  public function __construct(shape(
  ?'container_instances' => ContainerInstances,
  ?'failures' => Failures,
  ) $s = shape()) {
    $this->container_instances = $container_instances ?? [];
    $this->failures = $failures ?? [];
  }
}

class UpdateInProgressException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateServicePrimaryTaskSetRequest {
  public string $cluster;
  public string $primary_task_set;
  public string $service;

  public function __construct(shape(
  ?'cluster' => string,
  ?'primary_task_set' => string,
  ?'service' => string,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->primary_task_set = $primary_task_set ?? "";
    $this->service = $service ?? "";
  }
}

class UpdateServicePrimaryTaskSetResponse {
  public TaskSet $task_set;

  public function __construct(shape(
  ?'task_set' => TaskSet,
  ) $s = shape()) {
    $this->task_set = $task_set ?? null;
  }
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

  public function __construct(shape(
  ?'capacity_provider_strategy' => CapacityProviderStrategy,
  ?'cluster' => string,
  ?'deployment_configuration' => DeploymentConfiguration,
  ?'desired_count' => BoxedInteger,
  ?'force_new_deployment' => boolean,
  ?'health_check_grace_period_seconds' => BoxedInteger,
  ?'network_configuration' => NetworkConfiguration,
  ?'placement_constraints' => PlacementConstraints,
  ?'placement_strategy' => PlacementStrategies,
  ?'platform_version' => string,
  ?'service' => string,
  ?'task_definition' => string,
  ) $s = shape()) {
    $this->capacity_provider_strategy = $capacity_provider_strategy ?? [];
    $this->cluster = $cluster ?? "";
    $this->deployment_configuration = $deployment_configuration ?? null;
    $this->desired_count = $desired_count ?? 0;
    $this->force_new_deployment = $force_new_deployment ?? false;
    $this->health_check_grace_period_seconds = $health_check_grace_period_seconds ?? 0;
    $this->network_configuration = $network_configuration ?? null;
    $this->placement_constraints = $placement_constraints ?? [];
    $this->placement_strategy = $placement_strategy ?? [];
    $this->platform_version = $platform_version ?? "";
    $this->service = $service ?? "";
    $this->task_definition = $task_definition ?? "";
  }
}

class UpdateServiceResponse {
  public Service $service;

  public function __construct(shape(
  ?'service' => Service,
  ) $s = shape()) {
    $this->service = $service ?? null;
  }
}

class UpdateTaskSetRequest {
  public string $cluster;
  public Scale $scale;
  public string $service;
  public string $task_set;

  public function __construct(shape(
  ?'cluster' => string,
  ?'scale' => Scale,
  ?'service' => string,
  ?'task_set' => string,
  ) $s = shape()) {
    $this->cluster = $cluster ?? "";
    $this->scale = $scale ?? null;
    $this->service = $service ?? "";
    $this->task_set = $task_set ?? "";
  }
}

class UpdateTaskSetResponse {
  public TaskSet $task_set;

  public function __construct(shape(
  ?'task_set' => TaskSet,
  ) $s = shape()) {
    $this->task_set = $task_set ?? null;
  }
}

class VersionInfo {
  public string $agent_hash;
  public string $agent_version;
  public string $docker_version;

  public function __construct(shape(
  ?'agent_hash' => string,
  ?'agent_version' => string,
  ?'docker_version' => string,
  ) $s = shape()) {
    $this->agent_hash = $agent_hash ?? "";
    $this->agent_version = $agent_version ?? "";
    $this->docker_version = $docker_version ?? "";
  }
}

class Volume {
  public DockerVolumeConfiguration $docker_volume_configuration;
  public EFSVolumeConfiguration $efs_volume_configuration;
  public HostVolumeProperties $host;
  public string $name;

  public function __construct(shape(
  ?'docker_volume_configuration' => DockerVolumeConfiguration,
  ?'efs_volume_configuration' => EFSVolumeConfiguration,
  ?'host' => HostVolumeProperties,
  ?'name' => string,
  ) $s = shape()) {
    $this->docker_volume_configuration = $docker_volume_configuration ?? null;
    $this->efs_volume_configuration = $efs_volume_configuration ?? null;
    $this->host = $host ?? null;
    $this->name = $name ?? "";
  }
}

class VolumeFrom {
  public BoxedBoolean $read_only;
  public string $source_container;

  public function __construct(shape(
  ?'read_only' => BoxedBoolean,
  ?'source_container' => string,
  ) $s = shape()) {
    $this->read_only = $read_only ?? false;
    $this->source_container = $source_container ?? "";
  }
}

type VolumeFromList = vec<VolumeFrom>;

type VolumeList = vec<Volume>;

