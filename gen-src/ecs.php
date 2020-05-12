<?hh // strict
namespace slack\aws\ecs;

interface ECS {
  public function CreateCapacityProvider(CreateCapacityProviderRequest $in): Awaitable<\Errors\Result<CreateCapacityProviderResponse>>;
  public function CreateCluster(CreateClusterRequest $in): Awaitable<\Errors\Result<CreateClusterResponse>>;
  public function CreateService(CreateServiceRequest $in): Awaitable<\Errors\Result<CreateServiceResponse>>;
  public function CreateTaskSet(CreateTaskSetRequest $in): Awaitable<\Errors\Result<CreateTaskSetResponse>>;
  public function DeleteAccountSetting(DeleteAccountSettingRequest $in): Awaitable<\Errors\Result<DeleteAccountSettingResponse>>;
  public function DeleteAttributes(DeleteAttributesRequest $in): Awaitable<\Errors\Result<DeleteAttributesResponse>>;
  public function DeleteCluster(DeleteClusterRequest $in): Awaitable<\Errors\Result<DeleteClusterResponse>>;
  public function DeleteService(DeleteServiceRequest $in): Awaitable<\Errors\Result<DeleteServiceResponse>>;
  public function DeleteTaskSet(DeleteTaskSetRequest $in): Awaitable<\Errors\Result<DeleteTaskSetResponse>>;
  public function DeregisterContainerInstance(DeregisterContainerInstanceRequest $in): Awaitable<\Errors\Result<DeregisterContainerInstanceResponse>>;
  public function DeregisterTaskDefinition(DeregisterTaskDefinitionRequest $in): Awaitable<\Errors\Result<DeregisterTaskDefinitionResponse>>;
  public function DescribeCapacityProviders(DescribeCapacityProvidersRequest $in): Awaitable<\Errors\Result<DescribeCapacityProvidersResponse>>;
  public function DescribeClusters(DescribeClustersRequest $in): Awaitable<\Errors\Result<DescribeClustersResponse>>;
  public function DescribeContainerInstances(DescribeContainerInstancesRequest $in): Awaitable<\Errors\Result<DescribeContainerInstancesResponse>>;
  public function DescribeServices(DescribeServicesRequest $in): Awaitable<\Errors\Result<DescribeServicesResponse>>;
  public function DescribeTaskDefinition(DescribeTaskDefinitionRequest $in): Awaitable<\Errors\Result<DescribeTaskDefinitionResponse>>;
  public function DescribeTaskSets(DescribeTaskSetsRequest $in): Awaitable<\Errors\Result<DescribeTaskSetsResponse>>;
  public function DescribeTasks(DescribeTasksRequest $in): Awaitable<\Errors\Result<DescribeTasksResponse>>;
  public function DiscoverPollEndpoint(DiscoverPollEndpointRequest $in): Awaitable<\Errors\Result<DiscoverPollEndpointResponse>>;
  public function ListAccountSettings(ListAccountSettingsRequest $in): Awaitable<\Errors\Result<ListAccountSettingsResponse>>;
  public function ListAttributes(ListAttributesRequest $in): Awaitable<\Errors\Result<ListAttributesResponse>>;
  public function ListClusters(ListClustersRequest $in): Awaitable<\Errors\Result<ListClustersResponse>>;
  public function ListContainerInstances(ListContainerInstancesRequest $in): Awaitable<\Errors\Result<ListContainerInstancesResponse>>;
  public function ListServices(ListServicesRequest $in): Awaitable<\Errors\Result<ListServicesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListTaskDefinitionFamilies(ListTaskDefinitionFamiliesRequest $in): Awaitable<\Errors\Result<ListTaskDefinitionFamiliesResponse>>;
  public function ListTaskDefinitions(ListTaskDefinitionsRequest $in): Awaitable<\Errors\Result<ListTaskDefinitionsResponse>>;
  public function ListTasks(ListTasksRequest $in): Awaitable<\Errors\Result<ListTasksResponse>>;
  public function PutAccountSetting(PutAccountSettingRequest $in): Awaitable<\Errors\Result<PutAccountSettingResponse>>;
  public function PutAccountSettingDefault(PutAccountSettingDefaultRequest $in): Awaitable<\Errors\Result<PutAccountSettingDefaultResponse>>;
  public function PutAttributes(PutAttributesRequest $in): Awaitable<\Errors\Result<PutAttributesResponse>>;
  public function PutClusterCapacityProviders(PutClusterCapacityProvidersRequest $in): Awaitable<\Errors\Result<PutClusterCapacityProvidersResponse>>;
  public function RegisterContainerInstance(RegisterContainerInstanceRequest $in): Awaitable<\Errors\Result<RegisterContainerInstanceResponse>>;
  public function RegisterTaskDefinition(RegisterTaskDefinitionRequest $in): Awaitable<\Errors\Result<RegisterTaskDefinitionResponse>>;
  public function RunTask(RunTaskRequest $in): Awaitable<\Errors\Result<RunTaskResponse>>;
  public function StartTask(StartTaskRequest $in): Awaitable<\Errors\Result<StartTaskResponse>>;
  public function StopTask(StopTaskRequest $in): Awaitable<\Errors\Result<StopTaskResponse>>;
  public function SubmitAttachmentStateChanges(SubmitAttachmentStateChangesRequest $in): Awaitable<\Errors\Result<SubmitAttachmentStateChangesResponse>>;
  public function SubmitContainerStateChange(SubmitContainerStateChangeRequest $in): Awaitable<\Errors\Result<SubmitContainerStateChangeResponse>>;
  public function SubmitTaskStateChange(SubmitTaskStateChangeRequest $in): Awaitable<\Errors\Result<SubmitTaskStateChangeResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateClusterSettings(UpdateClusterSettingsRequest $in): Awaitable<\Errors\Result<UpdateClusterSettingsResponse>>;
  public function UpdateContainerAgent(UpdateContainerAgentRequest $in): Awaitable<\Errors\Result<UpdateContainerAgentResponse>>;
  public function UpdateContainerInstancesState(UpdateContainerInstancesStateRequest $in): Awaitable<\Errors\Result<UpdateContainerInstancesStateResponse>>;
  public function UpdateService(UpdateServiceRequest $in): Awaitable<\Errors\Result<UpdateServiceResponse>>;
  public function UpdateServicePrimaryTaskSet(UpdateServicePrimaryTaskSetRequest $in): Awaitable<\Errors\Result<UpdateServicePrimaryTaskSetResponse>>;
  public function UpdateTaskSet(UpdateTaskSetRequest $in): Awaitable<\Errors\Result<UpdateTaskSetResponse>>;
}

class AccessDeniedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AgentUpdateStatus = string;

type AssignPublicIp = string;

class Attachment {
  public ?AttachmentDetails $details;
  public string $id;
  public string $status;
  public string $type;

  public function __construct(shape(
    ?'details' => ?AttachmentDetails,
    ?'id' => string,
    ?'status' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->details = $s['details'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->type = $s['type'] ?? '';
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
    $this->attachment_arn = $s['attachment_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type AttachmentStateChanges = vec<AttachmentStateChange>;

type Attachments = vec<Attachment>;

class Attribute {
  public string $name;
  public string $target_id;
  public ?TargetType $target_type;
  public string $value;

  public function __construct(shape(
    ?'name' => string,
    ?'target_id' => string,
    ?'target_type' => ?TargetType,
    ?'value' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->target_id = $s['target_id'] ?? '';
    $this->target_type = $s['target_type'] ?? '';
    $this->value = $s['value'] ?? '';
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
  public ?ManagedScaling $managed_scaling;
  public ?ManagedTerminationProtection $managed_termination_protection;

  public function __construct(shape(
    ?'auto_scaling_group_arn' => string,
    ?'managed_scaling' => ?ManagedScaling,
    ?'managed_termination_protection' => ?ManagedTerminationProtection,
  ) $s = shape()) {
    $this->auto_scaling_group_arn = $s['auto_scaling_group_arn'] ?? '';
    $this->managed_scaling = $s['managed_scaling'] ?? null;
    $this->managed_termination_protection = $s['managed_termination_protection'] ?? '';
  }
}

class AwsVpcConfiguration {
  public ?AssignPublicIp $assign_public_ip;
  public ?StringList $security_groups;
  public ?StringList $subnets;

  public function __construct(shape(
    ?'assign_public_ip' => ?AssignPublicIp,
    ?'security_groups' => ?StringList,
    ?'subnets' => ?StringList,
  ) $s = shape()) {
    $this->assign_public_ip = $s['assign_public_ip'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->subnets = $s['subnets'] ?? vec[];
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
  public ?AutoScalingGroupProvider $auto_scaling_group_provider;
  public string $capacity_provider_arn;
  public string $name;
  public ?CapacityProviderStatus $status;
  public ?Tags $tags;

  public function __construct(shape(
    ?'auto_scaling_group_provider' => ?AutoScalingGroupProvider,
    ?'capacity_provider_arn' => string,
    ?'name' => string,
    ?'status' => ?CapacityProviderStatus,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->auto_scaling_group_provider = $s['auto_scaling_group_provider'] ?? null;
    $this->capacity_provider_arn = $s['capacity_provider_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type CapacityProviderField = string;

type CapacityProviderFieldList = vec<CapacityProviderField>;

type CapacityProviderStatus = string;

type CapacityProviderStrategy = vec<CapacityProviderStrategyItem>;

class CapacityProviderStrategyItem {
  public ?CapacityProviderStrategyItemBase $base;
  public string $capacity_provider;
  public ?CapacityProviderStrategyItemWeight $weight;

  public function __construct(shape(
    ?'base' => ?CapacityProviderStrategyItemBase,
    ?'capacity_provider' => string,
    ?'weight' => ?CapacityProviderStrategyItemWeight,
  ) $s = shape()) {
    $this->base = $s['base'] ?? 0;
    $this->capacity_provider = $s['capacity_provider'] ?? '';
    $this->weight = $s['weight'] ?? 0;
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
    $this->message = $s['message'] ?? '';
  }
}

class Cluster {
  public int $active_services_count;
  public ?Attachments $attachments;
  public string $attachments_status;
  public ?StringList $capacity_providers;
  public string $cluster_arn;
  public string $cluster_name;
  public ?CapacityProviderStrategy $default_capacity_provider_strategy;
  public int $pending_tasks_count;
  public int $registered_container_instances_count;
  public int $running_tasks_count;
  public ?ClusterSettings $settings;
  public ?Statistics $statistics;
  public string $status;
  public ?Tags $tags;

  public function __construct(shape(
    ?'active_services_count' => int,
    ?'attachments' => ?Attachments,
    ?'attachments_status' => string,
    ?'capacity_providers' => ?StringList,
    ?'cluster_arn' => string,
    ?'cluster_name' => string,
    ?'default_capacity_provider_strategy' => ?CapacityProviderStrategy,
    ?'pending_tasks_count' => int,
    ?'registered_container_instances_count' => int,
    ?'running_tasks_count' => int,
    ?'settings' => ?ClusterSettings,
    ?'statistics' => ?Statistics,
    ?'status' => string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->active_services_count = $s['active_services_count'] ?? 0;
    $this->attachments = $s['attachments'] ?? vec[];
    $this->attachments_status = $s['attachments_status'] ?? '';
    $this->capacity_providers = $s['capacity_providers'] ?? vec[];
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->default_capacity_provider_strategy = $s['default_capacity_provider_strategy'] ?? vec[];
    $this->pending_tasks_count = $s['pending_tasks_count'] ?? 0;
    $this->registered_container_instances_count = $s['registered_container_instances_count'] ?? 0;
    $this->running_tasks_count = $s['running_tasks_count'] ?? 0;
    $this->settings = $s['settings'] ?? vec[];
    $this->statistics = $s['statistics'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
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
  public ?ClusterSettingName $name;
  public string $value;

  public function __construct(shape(
    ?'name' => ?ClusterSettingName,
    ?'value' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
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
  public ?BoxedInteger $exit_code;
  public ?GpuIds $gpu_ids;
  public ?HealthStatus $health_status;
  public string $image;
  public string $image_digest;
  public string $last_status;
  public string $memory;
  public string $memory_reservation;
  public string $name;
  public ?NetworkBindings $network_bindings;
  public ?NetworkInterfaces $network_interfaces;
  public string $reason;
  public string $runtime_id;
  public string $task_arn;

  public function __construct(shape(
    ?'container_arn' => string,
    ?'cpu' => string,
    ?'exit_code' => ?BoxedInteger,
    ?'gpu_ids' => ?GpuIds,
    ?'health_status' => ?HealthStatus,
    ?'image' => string,
    ?'image_digest' => string,
    ?'last_status' => string,
    ?'memory' => string,
    ?'memory_reservation' => string,
    ?'name' => string,
    ?'network_bindings' => ?NetworkBindings,
    ?'network_interfaces' => ?NetworkInterfaces,
    ?'reason' => string,
    ?'runtime_id' => string,
    ?'task_arn' => string,
  ) $s = shape()) {
    $this->container_arn = $s['container_arn'] ?? '';
    $this->cpu = $s['cpu'] ?? '';
    $this->exit_code = $s['exit_code'] ?? 0;
    $this->gpu_ids = $s['gpu_ids'] ?? vec[];
    $this->health_status = $s['health_status'] ?? '';
    $this->image = $s['image'] ?? '';
    $this->image_digest = $s['image_digest'] ?? '';
    $this->last_status = $s['last_status'] ?? '';
    $this->memory = $s['memory'] ?? '';
    $this->memory_reservation = $s['memory_reservation'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->network_bindings = $s['network_bindings'] ?? vec[];
    $this->network_interfaces = $s['network_interfaces'] ?? vec[];
    $this->reason = $s['reason'] ?? '';
    $this->runtime_id = $s['runtime_id'] ?? '';
    $this->task_arn = $s['task_arn'] ?? '';
  }
}

type ContainerCondition = string;

class ContainerDefinition {
  public ?StringList $command;
  public int $cpu;
  public ?ContainerDependencies $depends_on;
  public ?BoxedBoolean $disable_networking;
  public ?StringList $dns_search_domains;
  public ?StringList $dns_servers;
  public ?DockerLabelsMap $docker_labels;
  public ?StringList $docker_security_options;
  public ?StringList $entry_point;
  public ?EnvironmentVariables $environment;
  public ?BoxedBoolean $essential;
  public ?HostEntryList $extra_hosts;
  public ?FirelensConfiguration $firelens_configuration;
  public ?HealthCheck $health_check;
  public string $hostname;
  public string $image;
  public ?BoxedBoolean $interactive;
  public ?StringList $links;
  public ?LinuxParameters $linux_parameters;
  public ?LogConfiguration $log_configuration;
  public ?BoxedInteger $memory;
  public ?BoxedInteger $memory_reservation;
  public ?MountPointList $mount_points;
  public string $name;
  public ?PortMappingList $port_mappings;
  public ?BoxedBoolean $privileged;
  public ?BoxedBoolean $pseudo_terminal;
  public ?BoxedBoolean $readonly_root_filesystem;
  public ?RepositoryCredentials $repository_credentials;
  public ?ResourceRequirements $resource_requirements;
  public ?SecretList $secrets;
  public ?BoxedInteger $start_timeout;
  public ?BoxedInteger $stop_timeout;
  public ?SystemControls $system_controls;
  public ?UlimitList $ulimits;
  public string $user;
  public ?VolumeFromList $volumes_from;
  public string $working_directory;

  public function __construct(shape(
    ?'command' => ?StringList,
    ?'cpu' => int,
    ?'depends_on' => ?ContainerDependencies,
    ?'disable_networking' => ?BoxedBoolean,
    ?'dns_search_domains' => ?StringList,
    ?'dns_servers' => ?StringList,
    ?'docker_labels' => ?DockerLabelsMap,
    ?'docker_security_options' => ?StringList,
    ?'entry_point' => ?StringList,
    ?'environment' => ?EnvironmentVariables,
    ?'essential' => ?BoxedBoolean,
    ?'extra_hosts' => ?HostEntryList,
    ?'firelens_configuration' => ?FirelensConfiguration,
    ?'health_check' => ?HealthCheck,
    ?'hostname' => string,
    ?'image' => string,
    ?'interactive' => ?BoxedBoolean,
    ?'links' => ?StringList,
    ?'linux_parameters' => ?LinuxParameters,
    ?'log_configuration' => ?LogConfiguration,
    ?'memory' => ?BoxedInteger,
    ?'memory_reservation' => ?BoxedInteger,
    ?'mount_points' => ?MountPointList,
    ?'name' => string,
    ?'port_mappings' => ?PortMappingList,
    ?'privileged' => ?BoxedBoolean,
    ?'pseudo_terminal' => ?BoxedBoolean,
    ?'readonly_root_filesystem' => ?BoxedBoolean,
    ?'repository_credentials' => ?RepositoryCredentials,
    ?'resource_requirements' => ?ResourceRequirements,
    ?'secrets' => ?SecretList,
    ?'start_timeout' => ?BoxedInteger,
    ?'stop_timeout' => ?BoxedInteger,
    ?'system_controls' => ?SystemControls,
    ?'ulimits' => ?UlimitList,
    ?'user' => string,
    ?'volumes_from' => ?VolumeFromList,
    ?'working_directory' => string,
  ) $s = shape()) {
    $this->command = $s['command'] ?? vec[];
    $this->cpu = $s['cpu'] ?? 0;
    $this->depends_on = $s['depends_on'] ?? vec[];
    $this->disable_networking = $s['disable_networking'] ?? false;
    $this->dns_search_domains = $s['dns_search_domains'] ?? vec[];
    $this->dns_servers = $s['dns_servers'] ?? vec[];
    $this->docker_labels = $s['docker_labels'] ?? dict[];
    $this->docker_security_options = $s['docker_security_options'] ?? vec[];
    $this->entry_point = $s['entry_point'] ?? vec[];
    $this->environment = $s['environment'] ?? vec[];
    $this->essential = $s['essential'] ?? false;
    $this->extra_hosts = $s['extra_hosts'] ?? vec[];
    $this->firelens_configuration = $s['firelens_configuration'] ?? null;
    $this->health_check = $s['health_check'] ?? null;
    $this->hostname = $s['hostname'] ?? '';
    $this->image = $s['image'] ?? '';
    $this->interactive = $s['interactive'] ?? false;
    $this->links = $s['links'] ?? vec[];
    $this->linux_parameters = $s['linux_parameters'] ?? null;
    $this->log_configuration = $s['log_configuration'] ?? null;
    $this->memory = $s['memory'] ?? 0;
    $this->memory_reservation = $s['memory_reservation'] ?? 0;
    $this->mount_points = $s['mount_points'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->port_mappings = $s['port_mappings'] ?? vec[];
    $this->privileged = $s['privileged'] ?? false;
    $this->pseudo_terminal = $s['pseudo_terminal'] ?? false;
    $this->readonly_root_filesystem = $s['readonly_root_filesystem'] ?? false;
    $this->repository_credentials = $s['repository_credentials'] ?? null;
    $this->resource_requirements = $s['resource_requirements'] ?? vec[];
    $this->secrets = $s['secrets'] ?? vec[];
    $this->start_timeout = $s['start_timeout'] ?? 0;
    $this->stop_timeout = $s['stop_timeout'] ?? 0;
    $this->system_controls = $s['system_controls'] ?? vec[];
    $this->ulimits = $s['ulimits'] ?? vec[];
    $this->user = $s['user'] ?? '';
    $this->volumes_from = $s['volumes_from'] ?? vec[];
    $this->working_directory = $s['working_directory'] ?? '';
  }
}

type ContainerDefinitions = vec<ContainerDefinition>;

type ContainerDependencies = vec<ContainerDependency>;

class ContainerDependency {
  public ?ContainerCondition $condition;
  public string $container_name;

  public function __construct(shape(
    ?'condition' => ?ContainerCondition,
    ?'container_name' => string,
  ) $s = shape()) {
    $this->condition = $s['condition'] ?? '';
    $this->container_name = $s['container_name'] ?? '';
  }
}

class ContainerInstance {
  public bool $agent_connected;
  public ?AgentUpdateStatus $agent_update_status;
  public ?Attachments $attachments;
  public ?Attributes $attributes;
  public string $capacity_provider_name;
  public string $container_instance_arn;
  public string $ec_2_instance_id;
  public int $pending_tasks_count;
  public ?Timestamp $registered_at;
  public ?Resources $registered_resources;
  public ?Resources $remaining_resources;
  public int $running_tasks_count;
  public string $status;
  public string $status_reason;
  public ?Tags $tags;
  public ?Long $version;
  public ?VersionInfo $version_info;

  public function __construct(shape(
    ?'agent_connected' => bool,
    ?'agent_update_status' => ?AgentUpdateStatus,
    ?'attachments' => ?Attachments,
    ?'attributes' => ?Attributes,
    ?'capacity_provider_name' => string,
    ?'container_instance_arn' => string,
    ?'ec_2_instance_id' => string,
    ?'pending_tasks_count' => int,
    ?'registered_at' => ?Timestamp,
    ?'registered_resources' => ?Resources,
    ?'remaining_resources' => ?Resources,
    ?'running_tasks_count' => int,
    ?'status' => string,
    ?'status_reason' => string,
    ?'tags' => ?Tags,
    ?'version' => ?Long,
    ?'version_info' => ?VersionInfo,
  ) $s = shape()) {
    $this->agent_connected = $s['agent_connected'] ?? false;
    $this->agent_update_status = $s['agent_update_status'] ?? '';
    $this->attachments = $s['attachments'] ?? vec[];
    $this->attributes = $s['attributes'] ?? vec[];
    $this->capacity_provider_name = $s['capacity_provider_name'] ?? '';
    $this->container_instance_arn = $s['container_instance_arn'] ?? '';
    $this->ec_2_instance_id = $s['ec_2_instance_id'] ?? '';
    $this->pending_tasks_count = $s['pending_tasks_count'] ?? 0;
    $this->registered_at = $s['registered_at'] ?? 0;
    $this->registered_resources = $s['registered_resources'] ?? vec[];
    $this->remaining_resources = $s['remaining_resources'] ?? vec[];
    $this->running_tasks_count = $s['running_tasks_count'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->status_reason = $s['status_reason'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->version = $s['version'] ?? 0;
    $this->version_info = $s['version_info'] ?? null;
  }
}

type ContainerInstanceField = string;

type ContainerInstanceFieldList = vec<ContainerInstanceField>;

type ContainerInstanceStatus = string;

type ContainerInstances = vec<ContainerInstance>;

class ContainerOverride {
  public ?StringList $command;
  public ?BoxedInteger $cpu;
  public ?EnvironmentVariables $environment;
  public ?BoxedInteger $memory;
  public ?BoxedInteger $memory_reservation;
  public string $name;
  public ?ResourceRequirements $resource_requirements;

  public function __construct(shape(
    ?'command' => ?StringList,
    ?'cpu' => ?BoxedInteger,
    ?'environment' => ?EnvironmentVariables,
    ?'memory' => ?BoxedInteger,
    ?'memory_reservation' => ?BoxedInteger,
    ?'name' => string,
    ?'resource_requirements' => ?ResourceRequirements,
  ) $s = shape()) {
    $this->command = $s['command'] ?? vec[];
    $this->cpu = $s['cpu'] ?? 0;
    $this->environment = $s['environment'] ?? vec[];
    $this->memory = $s['memory'] ?? 0;
    $this->memory_reservation = $s['memory_reservation'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->resource_requirements = $s['resource_requirements'] ?? vec[];
  }
}

type ContainerOverrides = vec<ContainerOverride>;

class ContainerStateChange {
  public string $container_name;
  public ?BoxedInteger $exit_code;
  public string $image_digest;
  public ?NetworkBindings $network_bindings;
  public string $reason;
  public string $runtime_id;
  public string $status;

  public function __construct(shape(
    ?'container_name' => string,
    ?'exit_code' => ?BoxedInteger,
    ?'image_digest' => string,
    ?'network_bindings' => ?NetworkBindings,
    ?'reason' => string,
    ?'runtime_id' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
    $this->exit_code = $s['exit_code'] ?? 0;
    $this->image_digest = $s['image_digest'] ?? '';
    $this->network_bindings = $s['network_bindings'] ?? vec[];
    $this->reason = $s['reason'] ?? '';
    $this->runtime_id = $s['runtime_id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type ContainerStateChanges = vec<ContainerStateChange>;

type Containers = vec<Container>;

class CreateCapacityProviderRequest {
  public ?AutoScalingGroupProvider $auto_scaling_group_provider;
  public string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'auto_scaling_group_provider' => ?AutoScalingGroupProvider,
    ?'name' => string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->auto_scaling_group_provider = $s['auto_scaling_group_provider'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateCapacityProviderResponse {
  public ?CapacityProvider $capacity_provider;

  public function __construct(shape(
    ?'capacity_provider' => ?CapacityProvider,
  ) $s = shape()) {
    $this->capacity_provider = $s['capacity_provider'] ?? null;
  }
}

class CreateClusterRequest {
  public ?StringList $capacity_providers;
  public string $cluster_name;
  public ?CapacityProviderStrategy $default_capacity_provider_strategy;
  public ?ClusterSettings $settings;
  public ?Tags $tags;

  public function __construct(shape(
    ?'capacity_providers' => ?StringList,
    ?'cluster_name' => string,
    ?'default_capacity_provider_strategy' => ?CapacityProviderStrategy,
    ?'settings' => ?ClusterSettings,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->capacity_providers = $s['capacity_providers'] ?? vec[];
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->default_capacity_provider_strategy = $s['default_capacity_provider_strategy'] ?? vec[];
    $this->settings = $s['settings'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateClusterResponse {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class CreateServiceRequest {
  public ?CapacityProviderStrategy $capacity_provider_strategy;
  public string $client_token;
  public string $cluster;
  public ?DeploymentConfiguration $deployment_configuration;
  public ?DeploymentController $deployment_controller;
  public ?BoxedInteger $desired_count;
  public bool $enable_ecs_managed_tags;
  public ?BoxedInteger $health_check_grace_period_seconds;
  public ?LaunchType $launch_type;
  public ?LoadBalancers $load_balancers;
  public ?NetworkConfiguration $network_configuration;
  public ?PlacementConstraints $placement_constraints;
  public ?PlacementStrategies $placement_strategy;
  public string $platform_version;
  public ?PropagateTags $propagate_tags;
  public string $role;
  public ?SchedulingStrategy $scheduling_strategy;
  public string $service_name;
  public ?ServiceRegistries $service_registries;
  public ?Tags $tags;
  public string $task_definition;

  public function __construct(shape(
    ?'capacity_provider_strategy' => ?CapacityProviderStrategy,
    ?'client_token' => string,
    ?'cluster' => string,
    ?'deployment_configuration' => ?DeploymentConfiguration,
    ?'deployment_controller' => ?DeploymentController,
    ?'desired_count' => ?BoxedInteger,
    ?'enable_ecs_managed_tags' => bool,
    ?'health_check_grace_period_seconds' => ?BoxedInteger,
    ?'launch_type' => ?LaunchType,
    ?'load_balancers' => ?LoadBalancers,
    ?'network_configuration' => ?NetworkConfiguration,
    ?'placement_constraints' => ?PlacementConstraints,
    ?'placement_strategy' => ?PlacementStrategies,
    ?'platform_version' => string,
    ?'propagate_tags' => ?PropagateTags,
    ?'role' => string,
    ?'scheduling_strategy' => ?SchedulingStrategy,
    ?'service_name' => string,
    ?'service_registries' => ?ServiceRegistries,
    ?'tags' => ?Tags,
    ?'task_definition' => string,
  ) $s = shape()) {
    $this->capacity_provider_strategy = $s['capacity_provider_strategy'] ?? vec[];
    $this->client_token = $s['client_token'] ?? '';
    $this->cluster = $s['cluster'] ?? '';
    $this->deployment_configuration = $s['deployment_configuration'] ?? null;
    $this->deployment_controller = $s['deployment_controller'] ?? null;
    $this->desired_count = $s['desired_count'] ?? 0;
    $this->enable_ecs_managed_tags = $s['enable_ecs_managed_tags'] ?? false;
    $this->health_check_grace_period_seconds = $s['health_check_grace_period_seconds'] ?? 0;
    $this->launch_type = $s['launch_type'] ?? '';
    $this->load_balancers = $s['load_balancers'] ?? vec[];
    $this->network_configuration = $s['network_configuration'] ?? null;
    $this->placement_constraints = $s['placement_constraints'] ?? vec[];
    $this->placement_strategy = $s['placement_strategy'] ?? vec[];
    $this->platform_version = $s['platform_version'] ?? '';
    $this->propagate_tags = $s['propagate_tags'] ?? '';
    $this->role = $s['role'] ?? '';
    $this->scheduling_strategy = $s['scheduling_strategy'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
    $this->service_registries = $s['service_registries'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
    $this->task_definition = $s['task_definition'] ?? '';
  }
}

class CreateServiceResponse {
  public ?Service $service;

  public function __construct(shape(
    ?'service' => ?Service,
  ) $s = shape()) {
    $this->service = $s['service'] ?? null;
  }
}

class CreateTaskSetRequest {
  public ?CapacityProviderStrategy $capacity_provider_strategy;
  public string $client_token;
  public string $cluster;
  public string $external_id;
  public ?LaunchType $launch_type;
  public ?LoadBalancers $load_balancers;
  public ?NetworkConfiguration $network_configuration;
  public string $platform_version;
  public ?Scale $scale;
  public string $service;
  public ?ServiceRegistries $service_registries;
  public ?Tags $tags;
  public string $task_definition;

  public function __construct(shape(
    ?'capacity_provider_strategy' => ?CapacityProviderStrategy,
    ?'client_token' => string,
    ?'cluster' => string,
    ?'external_id' => string,
    ?'launch_type' => ?LaunchType,
    ?'load_balancers' => ?LoadBalancers,
    ?'network_configuration' => ?NetworkConfiguration,
    ?'platform_version' => string,
    ?'scale' => ?Scale,
    ?'service' => string,
    ?'service_registries' => ?ServiceRegistries,
    ?'tags' => ?Tags,
    ?'task_definition' => string,
  ) $s = shape()) {
    $this->capacity_provider_strategy = $s['capacity_provider_strategy'] ?? vec[];
    $this->client_token = $s['client_token'] ?? '';
    $this->cluster = $s['cluster'] ?? '';
    $this->external_id = $s['external_id'] ?? '';
    $this->launch_type = $s['launch_type'] ?? '';
    $this->load_balancers = $s['load_balancers'] ?? vec[];
    $this->network_configuration = $s['network_configuration'] ?? null;
    $this->platform_version = $s['platform_version'] ?? '';
    $this->scale = $s['scale'] ?? null;
    $this->service = $s['service'] ?? '';
    $this->service_registries = $s['service_registries'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
    $this->task_definition = $s['task_definition'] ?? '';
  }
}

class CreateTaskSetResponse {
  public ?TaskSet $task_set;

  public function __construct(shape(
    ?'task_set' => ?TaskSet,
  ) $s = shape()) {
    $this->task_set = $s['task_set'] ?? null;
  }
}

class DeleteAccountSettingRequest {
  public ?SettingName $name;
  public string $principal_arn;

  public function __construct(shape(
    ?'name' => ?SettingName,
    ?'principal_arn' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->principal_arn = $s['principal_arn'] ?? '';
  }
}

class DeleteAccountSettingResponse {
  public ?Setting $setting;

  public function __construct(shape(
    ?'setting' => ?Setting,
  ) $s = shape()) {
    $this->setting = $s['setting'] ?? null;
  }
}

class DeleteAttributesRequest {
  public ?Attributes $attributes;
  public string $cluster;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'cluster' => string,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->cluster = $s['cluster'] ?? '';
  }
}

class DeleteAttributesResponse {
  public ?Attributes $attributes;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

class DeleteClusterRequest {
  public string $cluster;

  public function __construct(shape(
    ?'cluster' => string,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
  }
}

class DeleteClusterResponse {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class DeleteServiceRequest {
  public string $cluster;
  public ?BoxedBoolean $force;
  public string $service;

  public function __construct(shape(
    ?'cluster' => string,
    ?'force' => ?BoxedBoolean,
    ?'service' => string,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->force = $s['force'] ?? false;
    $this->service = $s['service'] ?? '';
  }
}

class DeleteServiceResponse {
  public ?Service $service;

  public function __construct(shape(
    ?'service' => ?Service,
  ) $s = shape()) {
    $this->service = $s['service'] ?? null;
  }
}

class DeleteTaskSetRequest {
  public string $cluster;
  public ?BoxedBoolean $force;
  public string $service;
  public string $task_set;

  public function __construct(shape(
    ?'cluster' => string,
    ?'force' => ?BoxedBoolean,
    ?'service' => string,
    ?'task_set' => string,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->force = $s['force'] ?? false;
    $this->service = $s['service'] ?? '';
    $this->task_set = $s['task_set'] ?? '';
  }
}

class DeleteTaskSetResponse {
  public ?TaskSet $task_set;

  public function __construct(shape(
    ?'task_set' => ?TaskSet,
  ) $s = shape()) {
    $this->task_set = $s['task_set'] ?? null;
  }
}

class Deployment {
  public ?CapacityProviderStrategy $capacity_provider_strategy;
  public ?Timestamp $created_at;
  public int $desired_count;
  public string $id;
  public ?LaunchType $launch_type;
  public ?NetworkConfiguration $network_configuration;
  public int $pending_count;
  public string $platform_version;
  public int $running_count;
  public string $status;
  public string $task_definition;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'capacity_provider_strategy' => ?CapacityProviderStrategy,
    ?'created_at' => ?Timestamp,
    ?'desired_count' => int,
    ?'id' => string,
    ?'launch_type' => ?LaunchType,
    ?'network_configuration' => ?NetworkConfiguration,
    ?'pending_count' => int,
    ?'platform_version' => string,
    ?'running_count' => int,
    ?'status' => string,
    ?'task_definition' => string,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->capacity_provider_strategy = $s['capacity_provider_strategy'] ?? vec[];
    $this->created_at = $s['created_at'] ?? 0;
    $this->desired_count = $s['desired_count'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->launch_type = $s['launch_type'] ?? '';
    $this->network_configuration = $s['network_configuration'] ?? null;
    $this->pending_count = $s['pending_count'] ?? 0;
    $this->platform_version = $s['platform_version'] ?? '';
    $this->running_count = $s['running_count'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->task_definition = $s['task_definition'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class DeploymentConfiguration {
  public ?BoxedInteger $maximum_percent;
  public ?BoxedInteger $minimum_healthy_percent;

  public function __construct(shape(
    ?'maximum_percent' => ?BoxedInteger,
    ?'minimum_healthy_percent' => ?BoxedInteger,
  ) $s = shape()) {
    $this->maximum_percent = $s['maximum_percent'] ?? 0;
    $this->minimum_healthy_percent = $s['minimum_healthy_percent'] ?? 0;
  }
}

class DeploymentController {
  public ?DeploymentControllerType $type;

  public function __construct(shape(
    ?'type' => ?DeploymentControllerType,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
  }
}

type DeploymentControllerType = string;

type Deployments = vec<Deployment>;

class DeregisterContainerInstanceRequest {
  public string $cluster;
  public string $container_instance;
  public ?BoxedBoolean $force;

  public function __construct(shape(
    ?'cluster' => string,
    ?'container_instance' => string,
    ?'force' => ?BoxedBoolean,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->container_instance = $s['container_instance'] ?? '';
    $this->force = $s['force'] ?? false;
  }
}

class DeregisterContainerInstanceResponse {
  public ?ContainerInstance $container_instance;

  public function __construct(shape(
    ?'container_instance' => ?ContainerInstance,
  ) $s = shape()) {
    $this->container_instance = $s['container_instance'] ?? null;
  }
}

class DeregisterTaskDefinitionRequest {
  public string $task_definition;

  public function __construct(shape(
    ?'task_definition' => string,
  ) $s = shape()) {
    $this->task_definition = $s['task_definition'] ?? '';
  }
}

class DeregisterTaskDefinitionResponse {
  public ?TaskDefinition $task_definition;

  public function __construct(shape(
    ?'task_definition' => ?TaskDefinition,
  ) $s = shape()) {
    $this->task_definition = $s['task_definition'] ?? null;
  }
}

class DescribeCapacityProvidersRequest {
  public ?StringList $capacity_providers;
  public ?CapacityProviderFieldList $include;
  public ?BoxedInteger $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'capacity_providers' => ?StringList,
    ?'include' => ?CapacityProviderFieldList,
    ?'max_results' => ?BoxedInteger,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->capacity_providers = $s['capacity_providers'] ?? vec[];
    $this->include = $s['include'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeCapacityProvidersResponse {
  public ?CapacityProviders $capacity_providers;
  public ?Failures $failures;
  public string $next_token;

  public function __construct(shape(
    ?'capacity_providers' => ?CapacityProviders,
    ?'failures' => ?Failures,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->capacity_providers = $s['capacity_providers'] ?? vec[];
    $this->failures = $s['failures'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeClustersRequest {
  public ?StringList $clusters;
  public ?ClusterFieldList $include;

  public function __construct(shape(
    ?'clusters' => ?StringList,
    ?'include' => ?ClusterFieldList,
  ) $s = shape()) {
    $this->clusters = $s['clusters'] ?? vec[];
    $this->include = $s['include'] ?? vec[];
  }
}

class DescribeClustersResponse {
  public ?Clusters $clusters;
  public ?Failures $failures;

  public function __construct(shape(
    ?'clusters' => ?Clusters,
    ?'failures' => ?Failures,
  ) $s = shape()) {
    $this->clusters = $s['clusters'] ?? vec[];
    $this->failures = $s['failures'] ?? vec[];
  }
}

class DescribeContainerInstancesRequest {
  public string $cluster;
  public ?StringList $container_instances;
  public ?ContainerInstanceFieldList $include;

  public function __construct(shape(
    ?'cluster' => string,
    ?'container_instances' => ?StringList,
    ?'include' => ?ContainerInstanceFieldList,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->container_instances = $s['container_instances'] ?? vec[];
    $this->include = $s['include'] ?? vec[];
  }
}

class DescribeContainerInstancesResponse {
  public ?ContainerInstances $container_instances;
  public ?Failures $failures;

  public function __construct(shape(
    ?'container_instances' => ?ContainerInstances,
    ?'failures' => ?Failures,
  ) $s = shape()) {
    $this->container_instances = $s['container_instances'] ?? vec[];
    $this->failures = $s['failures'] ?? vec[];
  }
}

class DescribeServicesRequest {
  public string $cluster;
  public ?ServiceFieldList $include;
  public ?StringList $services;

  public function __construct(shape(
    ?'cluster' => string,
    ?'include' => ?ServiceFieldList,
    ?'services' => ?StringList,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->include = $s['include'] ?? vec[];
    $this->services = $s['services'] ?? vec[];
  }
}

class DescribeServicesResponse {
  public ?Failures $failures;
  public ?Services $services;

  public function __construct(shape(
    ?'failures' => ?Failures,
    ?'services' => ?Services,
  ) $s = shape()) {
    $this->failures = $s['failures'] ?? vec[];
    $this->services = $s['services'] ?? vec[];
  }
}

class DescribeTaskDefinitionRequest {
  public ?TaskDefinitionFieldList $include;
  public string $task_definition;

  public function __construct(shape(
    ?'include' => ?TaskDefinitionFieldList,
    ?'task_definition' => string,
  ) $s = shape()) {
    $this->include = $s['include'] ?? vec[];
    $this->task_definition = $s['task_definition'] ?? '';
  }
}

class DescribeTaskDefinitionResponse {
  public ?Tags $tags;
  public ?TaskDefinition $task_definition;

  public function __construct(shape(
    ?'tags' => ?Tags,
    ?'task_definition' => ?TaskDefinition,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
    $this->task_definition = $s['task_definition'] ?? null;
  }
}

class DescribeTaskSetsRequest {
  public string $cluster;
  public ?TaskSetFieldList $include;
  public string $service;
  public ?StringList $task_sets;

  public function __construct(shape(
    ?'cluster' => string,
    ?'include' => ?TaskSetFieldList,
    ?'service' => string,
    ?'task_sets' => ?StringList,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->include = $s['include'] ?? vec[];
    $this->service = $s['service'] ?? '';
    $this->task_sets = $s['task_sets'] ?? vec[];
  }
}

class DescribeTaskSetsResponse {
  public ?Failures $failures;
  public ?TaskSets $task_sets;

  public function __construct(shape(
    ?'failures' => ?Failures,
    ?'task_sets' => ?TaskSets,
  ) $s = shape()) {
    $this->failures = $s['failures'] ?? vec[];
    $this->task_sets = $s['task_sets'] ?? vec[];
  }
}

class DescribeTasksRequest {
  public string $cluster;
  public ?TaskFieldList $include;
  public ?StringList $tasks;

  public function __construct(shape(
    ?'cluster' => string,
    ?'include' => ?TaskFieldList,
    ?'tasks' => ?StringList,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->include = $s['include'] ?? vec[];
    $this->tasks = $s['tasks'] ?? vec[];
  }
}

class DescribeTasksResponse {
  public ?Failures $failures;
  public ?Tasks $tasks;

  public function __construct(shape(
    ?'failures' => ?Failures,
    ?'tasks' => ?Tasks,
  ) $s = shape()) {
    $this->failures = $s['failures'] ?? vec[];
    $this->tasks = $s['tasks'] ?? vec[];
  }
}

type DesiredStatus = string;

class Device {
  public string $container_path;
  public string $host_path;
  public ?DeviceCgroupPermissions $permissions;

  public function __construct(shape(
    ?'container_path' => string,
    ?'host_path' => string,
    ?'permissions' => ?DeviceCgroupPermissions,
  ) $s = shape()) {
    $this->container_path = $s['container_path'] ?? '';
    $this->host_path = $s['host_path'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
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
    $this->cluster = $s['cluster'] ?? '';
    $this->container_instance = $s['container_instance'] ?? '';
  }
}

class DiscoverPollEndpointResponse {
  public string $endpoint;
  public string $telemetry_endpoint;

  public function __construct(shape(
    ?'endpoint' => string,
    ?'telemetry_endpoint' => string,
  ) $s = shape()) {
    $this->endpoint = $s['endpoint'] ?? '';
    $this->telemetry_endpoint = $s['telemetry_endpoint'] ?? '';
  }
}

type DockerLabelsMap = dict<String, String>;

class DockerVolumeConfiguration {
  public ?BoxedBoolean $autoprovision;
  public string $driver;
  public ?StringMap $driver_opts;
  public ?StringMap $labels;
  public ?Scope $scope;

  public function __construct(shape(
    ?'autoprovision' => ?BoxedBoolean,
    ?'driver' => string,
    ?'driver_opts' => ?StringMap,
    ?'labels' => ?StringMap,
    ?'scope' => ?Scope,
  ) $s = shape()) {
    $this->autoprovision = $s['autoprovision'] ?? false;
    $this->driver = $s['driver'] ?? '';
    $this->driver_opts = $s['driver_opts'] ?? dict[];
    $this->labels = $s['labels'] ?? dict[];
    $this->scope = $s['scope'] ?? '';
  }
}

type Double = float;

class EFSAuthorizationConfig {
  public string $access_point_id;
  public ?EFSAuthorizationConfigIAM $iam;

  public function __construct(shape(
    ?'access_point_id' => string,
    ?'iam' => ?EFSAuthorizationConfigIAM,
  ) $s = shape()) {
    $this->access_point_id = $s['access_point_id'] ?? '';
    $this->iam = $s['iam'] ?? '';
  }
}

type EFSAuthorizationConfigIAM = string;

type EFSTransitEncryption = string;

class EFSVolumeConfiguration {
  public ?EFSAuthorizationConfig $authorization_config;
  public string $file_system_id;
  public string $root_directory;
  public ?EFSTransitEncryption $transit_encryption;
  public ?BoxedInteger $transit_encryption_port;

  public function __construct(shape(
    ?'authorization_config' => ?EFSAuthorizationConfig,
    ?'file_system_id' => string,
    ?'root_directory' => string,
    ?'transit_encryption' => ?EFSTransitEncryption,
    ?'transit_encryption_port' => ?BoxedInteger,
  ) $s = shape()) {
    $this->authorization_config = $s['authorization_config'] ?? null;
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->root_directory = $s['root_directory'] ?? '';
    $this->transit_encryption = $s['transit_encryption'] ?? '';
    $this->transit_encryption_port = $s['transit_encryption_port'] ?? 0;
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
    $this->arn = $s['arn'] ?? '';
    $this->detail = $s['detail'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

type Failures = vec<Failure>;

class FirelensConfiguration {
  public ?FirelensConfigurationOptionsMap $options;
  public ?FirelensConfigurationType $type;

  public function __construct(shape(
    ?'options' => ?FirelensConfigurationOptionsMap,
    ?'type' => ?FirelensConfigurationType,
  ) $s = shape()) {
    $this->options = $s['options'] ?? dict[];
    $this->type = $s['type'] ?? '';
  }
}

type FirelensConfigurationOptionsMap = dict<String, String>;

type FirelensConfigurationType = string;

type GpuIds = vec<String>;

class HealthCheck {
  public ?StringList $command;
  public ?BoxedInteger $interval;
  public ?BoxedInteger $retries;
  public ?BoxedInteger $start_period;
  public ?BoxedInteger $timeout;

  public function __construct(shape(
    ?'command' => ?StringList,
    ?'interval' => ?BoxedInteger,
    ?'retries' => ?BoxedInteger,
    ?'start_period' => ?BoxedInteger,
    ?'timeout' => ?BoxedInteger,
  ) $s = shape()) {
    $this->command = $s['command'] ?? vec[];
    $this->interval = $s['interval'] ?? 0;
    $this->retries = $s['retries'] ?? 0;
    $this->start_period = $s['start_period'] ?? 0;
    $this->timeout = $s['timeout'] ?? 0;
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
    $this->hostname = $s['hostname'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
  }
}

type HostEntryList = vec<HostEntry>;

class HostVolumeProperties {
  public string $source_path;

  public function __construct(shape(
    ?'source_path' => string,
  ) $s = shape()) {
    $this->source_path = $s['source_path'] ?? '';
  }
}

class InferenceAccelerator {
  public string $device_name;
  public string $device_type;

  public function __construct(shape(
    ?'device_name' => string,
    ?'device_type' => string,
  ) $s = shape()) {
    $this->device_name = $s['device_name'] ?? '';
    $this->device_type = $s['device_type'] ?? '';
  }
}

class InferenceAcceleratorOverride {
  public string $device_name;
  public string $device_type;

  public function __construct(shape(
    ?'device_name' => string,
    ?'device_type' => string,
  ) $s = shape()) {
    $this->device_name = $s['device_name'] ?? '';
    $this->device_type = $s['device_type'] ?? '';
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
  public ?StringList $add;
  public ?StringList $drop;

  public function __construct(shape(
    ?'add' => ?StringList,
    ?'drop' => ?StringList,
  ) $s = shape()) {
    $this->add = $s['add'] ?? vec[];
    $this->drop = $s['drop'] ?? vec[];
  }
}

class KeyValuePair {
  public string $name;
  public string $value;

  public function __construct(shape(
    ?'name' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type LaunchType = string;

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class LinuxParameters {
  public ?KernelCapabilities $capabilities;
  public ?DevicesList $devices;
  public ?BoxedBoolean $init_process_enabled;
  public ?BoxedInteger $max_swap;
  public ?BoxedInteger $shared_memory_size;
  public ?BoxedInteger $swappiness;
  public ?TmpfsList $tmpfs;

  public function __construct(shape(
    ?'capabilities' => ?KernelCapabilities,
    ?'devices' => ?DevicesList,
    ?'init_process_enabled' => ?BoxedBoolean,
    ?'max_swap' => ?BoxedInteger,
    ?'shared_memory_size' => ?BoxedInteger,
    ?'swappiness' => ?BoxedInteger,
    ?'tmpfs' => ?TmpfsList,
  ) $s = shape()) {
    $this->capabilities = $s['capabilities'] ?? null;
    $this->devices = $s['devices'] ?? vec[];
    $this->init_process_enabled = $s['init_process_enabled'] ?? false;
    $this->max_swap = $s['max_swap'] ?? 0;
    $this->shared_memory_size = $s['shared_memory_size'] ?? 0;
    $this->swappiness = $s['swappiness'] ?? 0;
    $this->tmpfs = $s['tmpfs'] ?? vec[];
  }
}

class ListAccountSettingsRequest {
  public bool $effective_settings;
  public int $max_results;
  public ?SettingName $name;
  public string $next_token;
  public string $principal_arn;
  public string $value;

  public function __construct(shape(
    ?'effective_settings' => bool,
    ?'max_results' => int,
    ?'name' => ?SettingName,
    ?'next_token' => string,
    ?'principal_arn' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->effective_settings = $s['effective_settings'] ?? false;
    $this->max_results = $s['max_results'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->principal_arn = $s['principal_arn'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class ListAccountSettingsResponse {
  public string $next_token;
  public ?Settings $settings;

  public function __construct(shape(
    ?'next_token' => string,
    ?'settings' => ?Settings,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->settings = $s['settings'] ?? vec[];
  }
}

class ListAttributesRequest {
  public string $attribute_name;
  public string $attribute_value;
  public string $cluster;
  public ?BoxedInteger $max_results;
  public string $next_token;
  public ?TargetType $target_type;

  public function __construct(shape(
    ?'attribute_name' => string,
    ?'attribute_value' => string,
    ?'cluster' => string,
    ?'max_results' => ?BoxedInteger,
    ?'next_token' => string,
    ?'target_type' => ?TargetType,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->attribute_value = $s['attribute_value'] ?? '';
    $this->cluster = $s['cluster'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->target_type = $s['target_type'] ?? '';
  }
}

class ListAttributesResponse {
  public ?Attributes $attributes;
  public string $next_token;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListClustersRequest {
  public ?BoxedInteger $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'max_results' => ?BoxedInteger,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListClustersResponse {
  public ?StringList $cluster_arns;
  public string $next_token;

  public function __construct(shape(
    ?'cluster_arns' => ?StringList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->cluster_arns = $s['cluster_arns'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListContainerInstancesRequest {
  public string $cluster;
  public string $filter;
  public ?BoxedInteger $max_results;
  public string $next_token;
  public ?ContainerInstanceStatus $status;

  public function __construct(shape(
    ?'cluster' => string,
    ?'filter' => string,
    ?'max_results' => ?BoxedInteger,
    ?'next_token' => string,
    ?'status' => ?ContainerInstanceStatus,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->filter = $s['filter'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class ListContainerInstancesResponse {
  public ?StringList $container_instance_arns;
  public string $next_token;

  public function __construct(shape(
    ?'container_instance_arns' => ?StringList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->container_instance_arns = $s['container_instance_arns'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListServicesRequest {
  public string $cluster;
  public ?LaunchType $launch_type;
  public ?BoxedInteger $max_results;
  public string $next_token;
  public ?SchedulingStrategy $scheduling_strategy;

  public function __construct(shape(
    ?'cluster' => string,
    ?'launch_type' => ?LaunchType,
    ?'max_results' => ?BoxedInteger,
    ?'next_token' => string,
    ?'scheduling_strategy' => ?SchedulingStrategy,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->launch_type = $s['launch_type'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->scheduling_strategy = $s['scheduling_strategy'] ?? '';
  }
}

class ListServicesResponse {
  public string $next_token;
  public ?StringList $service_arns;

  public function __construct(shape(
    ?'next_token' => string,
    ?'service_arns' => ?StringList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->service_arns = $s['service_arns'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public string $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?Tags $tags;

  public function __construct(shape(
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ListTaskDefinitionFamiliesRequest {
  public string $family_prefix;
  public ?BoxedInteger $max_results;
  public string $next_token;
  public ?TaskDefinitionFamilyStatus $status;

  public function __construct(shape(
    ?'family_prefix' => string,
    ?'max_results' => ?BoxedInteger,
    ?'next_token' => string,
    ?'status' => ?TaskDefinitionFamilyStatus,
  ) $s = shape()) {
    $this->family_prefix = $s['family_prefix'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class ListTaskDefinitionFamiliesResponse {
  public ?StringList $families;
  public string $next_token;

  public function __construct(shape(
    ?'families' => ?StringList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->families = $s['families'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTaskDefinitionsRequest {
  public string $family_prefix;
  public ?BoxedInteger $max_results;
  public string $next_token;
  public ?SortOrder $sort;
  public ?TaskDefinitionStatus $status;

  public function __construct(shape(
    ?'family_prefix' => string,
    ?'max_results' => ?BoxedInteger,
    ?'next_token' => string,
    ?'sort' => ?SortOrder,
    ?'status' => ?TaskDefinitionStatus,
  ) $s = shape()) {
    $this->family_prefix = $s['family_prefix'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort = $s['sort'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class ListTaskDefinitionsResponse {
  public string $next_token;
  public ?StringList $task_definition_arns;

  public function __construct(shape(
    ?'next_token' => string,
    ?'task_definition_arns' => ?StringList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->task_definition_arns = $s['task_definition_arns'] ?? vec[];
  }
}

class ListTasksRequest {
  public string $cluster;
  public string $container_instance;
  public ?DesiredStatus $desired_status;
  public string $family;
  public ?LaunchType $launch_type;
  public ?BoxedInteger $max_results;
  public string $next_token;
  public string $service_name;
  public string $started_by;

  public function __construct(shape(
    ?'cluster' => string,
    ?'container_instance' => string,
    ?'desired_status' => ?DesiredStatus,
    ?'family' => string,
    ?'launch_type' => ?LaunchType,
    ?'max_results' => ?BoxedInteger,
    ?'next_token' => string,
    ?'service_name' => string,
    ?'started_by' => string,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->container_instance = $s['container_instance'] ?? '';
    $this->desired_status = $s['desired_status'] ?? '';
    $this->family = $s['family'] ?? '';
    $this->launch_type = $s['launch_type'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
    $this->started_by = $s['started_by'] ?? '';
  }
}

class ListTasksResponse {
  public string $next_token;
  public ?StringList $task_arns;

  public function __construct(shape(
    ?'next_token' => string,
    ?'task_arns' => ?StringList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->task_arns = $s['task_arns'] ?? vec[];
  }
}

class LoadBalancer {
  public string $container_name;
  public ?BoxedInteger $container_port;
  public string $load_balancer_name;
  public string $target_group_arn;

  public function __construct(shape(
    ?'container_name' => string,
    ?'container_port' => ?BoxedInteger,
    ?'load_balancer_name' => string,
    ?'target_group_arn' => string,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
    $this->container_port = $s['container_port'] ?? 0;
    $this->load_balancer_name = $s['load_balancer_name'] ?? '';
    $this->target_group_arn = $s['target_group_arn'] ?? '';
  }
}

type LoadBalancers = vec<LoadBalancer>;

class LogConfiguration {
  public ?LogDriver $log_driver;
  public ?LogConfigurationOptionsMap $options;
  public ?SecretList $secret_options;

  public function __construct(shape(
    ?'log_driver' => ?LogDriver,
    ?'options' => ?LogConfigurationOptionsMap,
    ?'secret_options' => ?SecretList,
  ) $s = shape()) {
    $this->log_driver = $s['log_driver'] ?? '';
    $this->options = $s['options'] ?? dict[];
    $this->secret_options = $s['secret_options'] ?? vec[];
  }
}

type LogConfigurationOptionsMap = dict<String, String>;

type LogDriver = string;

type Long = int;

class ManagedScaling {
  public ?ManagedScalingStepSize $maximum_scaling_step_size;
  public ?ManagedScalingStepSize $minimum_scaling_step_size;
  public ?ManagedScalingStatus $status;
  public ?ManagedScalingTargetCapacity $target_capacity;

  public function __construct(shape(
    ?'maximum_scaling_step_size' => ?ManagedScalingStepSize,
    ?'minimum_scaling_step_size' => ?ManagedScalingStepSize,
    ?'status' => ?ManagedScalingStatus,
    ?'target_capacity' => ?ManagedScalingTargetCapacity,
  ) $s = shape()) {
    $this->maximum_scaling_step_size = $s['maximum_scaling_step_size'] ?? 0;
    $this->minimum_scaling_step_size = $s['minimum_scaling_step_size'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->target_capacity = $s['target_capacity'] ?? 0;
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
  public ?BoxedBoolean $read_only;
  public string $source_volume;

  public function __construct(shape(
    ?'container_path' => string,
    ?'read_only' => ?BoxedBoolean,
    ?'source_volume' => string,
  ) $s = shape()) {
    $this->container_path = $s['container_path'] ?? '';
    $this->read_only = $s['read_only'] ?? false;
    $this->source_volume = $s['source_volume'] ?? '';
  }
}

type MountPointList = vec<MountPoint>;

class NetworkBinding {
  public string $bind_ip;
  public ?BoxedInteger $container_port;
  public ?BoxedInteger $host_port;
  public ?TransportProtocol $protocol;

  public function __construct(shape(
    ?'bind_ip' => string,
    ?'container_port' => ?BoxedInteger,
    ?'host_port' => ?BoxedInteger,
    ?'protocol' => ?TransportProtocol,
  ) $s = shape()) {
    $this->bind_ip = $s['bind_ip'] ?? '';
    $this->container_port = $s['container_port'] ?? 0;
    $this->host_port = $s['host_port'] ?? 0;
    $this->protocol = $s['protocol'] ?? '';
  }
}

type NetworkBindings = vec<NetworkBinding>;

class NetworkConfiguration {
  public ?AwsVpcConfiguration $awsvpc_configuration;

  public function __construct(shape(
    ?'awsvpc_configuration' => ?AwsVpcConfiguration,
  ) $s = shape()) {
    $this->awsvpc_configuration = $s['awsvpc_configuration'] ?? null;
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
    $this->attachment_id = $s['attachment_id'] ?? '';
    $this->ipv_6_address = $s['ipv_6_address'] ?? '';
    $this->private_ipv_4_address = $s['private_ipv_4_address'] ?? '';
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
  public ?PlacementConstraintType $type;

  public function __construct(shape(
    ?'expression' => string,
    ?'type' => ?PlacementConstraintType,
  ) $s = shape()) {
    $this->expression = $s['expression'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type PlacementConstraintType = string;

type PlacementConstraints = vec<PlacementConstraint>;

type PlacementStrategies = vec<PlacementStrategy>;

class PlacementStrategy {
  public string $field;
  public ?PlacementStrategyType $type;

  public function __construct(shape(
    ?'field' => string,
    ?'type' => ?PlacementStrategyType,
  ) $s = shape()) {
    $this->field = $s['field'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type PlacementStrategyType = string;

class PlatformDevice {
  public string $id;
  public ?PlatformDeviceType $type;

  public function __construct(shape(
    ?'id' => string,
    ?'type' => ?PlatformDeviceType,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->type = $s['type'] ?? '';
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
  public ?BoxedInteger $container_port;
  public ?BoxedInteger $host_port;
  public ?TransportProtocol $protocol;

  public function __construct(shape(
    ?'container_port' => ?BoxedInteger,
    ?'host_port' => ?BoxedInteger,
    ?'protocol' => ?TransportProtocol,
  ) $s = shape()) {
    $this->container_port = $s['container_port'] ?? 0;
    $this->host_port = $s['host_port'] ?? 0;
    $this->protocol = $s['protocol'] ?? '';
  }
}

type PortMappingList = vec<PortMapping>;

type PropagateTags = string;

class ProxyConfiguration {
  public string $container_name;
  public ?ProxyConfigurationProperties $properties;
  public ?ProxyConfigurationType $type;

  public function __construct(shape(
    ?'container_name' => string,
    ?'properties' => ?ProxyConfigurationProperties,
    ?'type' => ?ProxyConfigurationType,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
    $this->properties = $s['properties'] ?? vec[];
    $this->type = $s['type'] ?? '';
  }
}

type ProxyConfigurationProperties = vec<KeyValuePair>;

type ProxyConfigurationType = string;

class PutAccountSettingDefaultRequest {
  public ?SettingName $name;
  public string $value;

  public function __construct(shape(
    ?'name' => ?SettingName,
    ?'value' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class PutAccountSettingDefaultResponse {
  public ?Setting $setting;

  public function __construct(shape(
    ?'setting' => ?Setting,
  ) $s = shape()) {
    $this->setting = $s['setting'] ?? null;
  }
}

class PutAccountSettingRequest {
  public ?SettingName $name;
  public string $principal_arn;
  public string $value;

  public function __construct(shape(
    ?'name' => ?SettingName,
    ?'principal_arn' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->principal_arn = $s['principal_arn'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class PutAccountSettingResponse {
  public ?Setting $setting;

  public function __construct(shape(
    ?'setting' => ?Setting,
  ) $s = shape()) {
    $this->setting = $s['setting'] ?? null;
  }
}

class PutAttributesRequest {
  public ?Attributes $attributes;
  public string $cluster;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'cluster' => string,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->cluster = $s['cluster'] ?? '';
  }
}

class PutAttributesResponse {
  public ?Attributes $attributes;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

class PutClusterCapacityProvidersRequest {
  public ?StringList $capacity_providers;
  public string $cluster;
  public ?CapacityProviderStrategy $default_capacity_provider_strategy;

  public function __construct(shape(
    ?'capacity_providers' => ?StringList,
    ?'cluster' => string,
    ?'default_capacity_provider_strategy' => ?CapacityProviderStrategy,
  ) $s = shape()) {
    $this->capacity_providers = $s['capacity_providers'] ?? vec[];
    $this->cluster = $s['cluster'] ?? '';
    $this->default_capacity_provider_strategy = $s['default_capacity_provider_strategy'] ?? vec[];
  }
}

class PutClusterCapacityProvidersResponse {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class RegisterContainerInstanceRequest {
  public ?Attributes $attributes;
  public string $cluster;
  public string $container_instance_arn;
  public string $instance_identity_document;
  public string $instance_identity_document_signature;
  public ?PlatformDevices $platform_devices;
  public ?Tags $tags;
  public ?Resources $total_resources;
  public ?VersionInfo $version_info;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'cluster' => string,
    ?'container_instance_arn' => string,
    ?'instance_identity_document' => string,
    ?'instance_identity_document_signature' => string,
    ?'platform_devices' => ?PlatformDevices,
    ?'tags' => ?Tags,
    ?'total_resources' => ?Resources,
    ?'version_info' => ?VersionInfo,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->cluster = $s['cluster'] ?? '';
    $this->container_instance_arn = $s['container_instance_arn'] ?? '';
    $this->instance_identity_document = $s['instance_identity_document'] ?? '';
    $this->instance_identity_document_signature = $s['instance_identity_document_signature'] ?? '';
    $this->platform_devices = $s['platform_devices'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
    $this->total_resources = $s['total_resources'] ?? vec[];
    $this->version_info = $s['version_info'] ?? null;
  }
}

class RegisterContainerInstanceResponse {
  public ?ContainerInstance $container_instance;

  public function __construct(shape(
    ?'container_instance' => ?ContainerInstance,
  ) $s = shape()) {
    $this->container_instance = $s['container_instance'] ?? null;
  }
}

class RegisterTaskDefinitionRequest {
  public ?ContainerDefinitions $container_definitions;
  public string $cpu;
  public string $execution_role_arn;
  public string $family;
  public ?InferenceAccelerators $inference_accelerators;
  public ?IpcMode $ipc_mode;
  public string $memory;
  public ?NetworkMode $network_mode;
  public ?PidMode $pid_mode;
  public ?TaskDefinitionPlacementConstraints $placement_constraints;
  public ?ProxyConfiguration $proxy_configuration;
  public ?CompatibilityList $requires_compatibilities;
  public ?Tags $tags;
  public string $task_role_arn;
  public ?VolumeList $volumes;

  public function __construct(shape(
    ?'container_definitions' => ?ContainerDefinitions,
    ?'cpu' => string,
    ?'execution_role_arn' => string,
    ?'family' => string,
    ?'inference_accelerators' => ?InferenceAccelerators,
    ?'ipc_mode' => ?IpcMode,
    ?'memory' => string,
    ?'network_mode' => ?NetworkMode,
    ?'pid_mode' => ?PidMode,
    ?'placement_constraints' => ?TaskDefinitionPlacementConstraints,
    ?'proxy_configuration' => ?ProxyConfiguration,
    ?'requires_compatibilities' => ?CompatibilityList,
    ?'tags' => ?Tags,
    ?'task_role_arn' => string,
    ?'volumes' => ?VolumeList,
  ) $s = shape()) {
    $this->container_definitions = $s['container_definitions'] ?? vec[];
    $this->cpu = $s['cpu'] ?? '';
    $this->execution_role_arn = $s['execution_role_arn'] ?? '';
    $this->family = $s['family'] ?? '';
    $this->inference_accelerators = $s['inference_accelerators'] ?? vec[];
    $this->ipc_mode = $s['ipc_mode'] ?? '';
    $this->memory = $s['memory'] ?? '';
    $this->network_mode = $s['network_mode'] ?? '';
    $this->pid_mode = $s['pid_mode'] ?? '';
    $this->placement_constraints = $s['placement_constraints'] ?? vec[];
    $this->proxy_configuration = $s['proxy_configuration'] ?? null;
    $this->requires_compatibilities = $s['requires_compatibilities'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
    $this->task_role_arn = $s['task_role_arn'] ?? '';
    $this->volumes = $s['volumes'] ?? vec[];
  }
}

class RegisterTaskDefinitionResponse {
  public ?Tags $tags;
  public ?TaskDefinition $task_definition;

  public function __construct(shape(
    ?'tags' => ?Tags,
    ?'task_definition' => ?TaskDefinition,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
    $this->task_definition = $s['task_definition'] ?? null;
  }
}

class RepositoryCredentials {
  public string $credentials_parameter;

  public function __construct(shape(
    ?'credentials_parameter' => string,
  ) $s = shape()) {
    $this->credentials_parameter = $s['credentials_parameter'] ?? '';
  }
}

type RequiresAttributes = vec<Attribute>;

class Resource {
  public ?Double $double_value;
  public int $integer_value;
  public ?Long $long_value;
  public string $name;
  public ?StringList $string_set_value;
  public string $type;

  public function __construct(shape(
    ?'double_value' => ?Double,
    ?'integer_value' => int,
    ?'long_value' => ?Long,
    ?'name' => string,
    ?'string_set_value' => ?StringList,
    ?'type' => string,
  ) $s = shape()) {
    $this->double_value = $s['double_value'] ?? 0.0;
    $this->integer_value = $s['integer_value'] ?? 0;
    $this->long_value = $s['long_value'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->string_set_value = $s['string_set_value'] ?? vec[];
    $this->type = $s['type'] ?? '';
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
  public ?ResourceType $type;
  public string $value;

  public function __construct(shape(
    ?'type' => ?ResourceType,
    ?'value' => string,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type ResourceRequirements = vec<ResourceRequirement>;

type ResourceType = string;

type Resources = vec<Resource>;

class RunTaskRequest {
  public ?CapacityProviderStrategy $capacity_provider_strategy;
  public string $cluster;
  public ?BoxedInteger $count;
  public bool $enable_ecs_managed_tags;
  public string $group;
  public ?LaunchType $launch_type;
  public ?NetworkConfiguration $network_configuration;
  public ?TaskOverride $overrides;
  public ?PlacementConstraints $placement_constraints;
  public ?PlacementStrategies $placement_strategy;
  public string $platform_version;
  public ?PropagateTags $propagate_tags;
  public string $reference_id;
  public string $started_by;
  public ?Tags $tags;
  public string $task_definition;

  public function __construct(shape(
    ?'capacity_provider_strategy' => ?CapacityProviderStrategy,
    ?'cluster' => string,
    ?'count' => ?BoxedInteger,
    ?'enable_ecs_managed_tags' => bool,
    ?'group' => string,
    ?'launch_type' => ?LaunchType,
    ?'network_configuration' => ?NetworkConfiguration,
    ?'overrides' => ?TaskOverride,
    ?'placement_constraints' => ?PlacementConstraints,
    ?'placement_strategy' => ?PlacementStrategies,
    ?'platform_version' => string,
    ?'propagate_tags' => ?PropagateTags,
    ?'reference_id' => string,
    ?'started_by' => string,
    ?'tags' => ?Tags,
    ?'task_definition' => string,
  ) $s = shape()) {
    $this->capacity_provider_strategy = $s['capacity_provider_strategy'] ?? vec[];
    $this->cluster = $s['cluster'] ?? '';
    $this->count = $s['count'] ?? 0;
    $this->enable_ecs_managed_tags = $s['enable_ecs_managed_tags'] ?? false;
    $this->group = $s['group'] ?? '';
    $this->launch_type = $s['launch_type'] ?? '';
    $this->network_configuration = $s['network_configuration'] ?? null;
    $this->overrides = $s['overrides'] ?? null;
    $this->placement_constraints = $s['placement_constraints'] ?? vec[];
    $this->placement_strategy = $s['placement_strategy'] ?? vec[];
    $this->platform_version = $s['platform_version'] ?? '';
    $this->propagate_tags = $s['propagate_tags'] ?? '';
    $this->reference_id = $s['reference_id'] ?? '';
    $this->started_by = $s['started_by'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->task_definition = $s['task_definition'] ?? '';
  }
}

class RunTaskResponse {
  public ?Failures $failures;
  public ?Tasks $tasks;

  public function __construct(shape(
    ?'failures' => ?Failures,
    ?'tasks' => ?Tasks,
  ) $s = shape()) {
    $this->failures = $s['failures'] ?? vec[];
    $this->tasks = $s['tasks'] ?? vec[];
  }
}

class Scale {
  public ?ScaleUnit $unit;
  public ?Double $value;

  public function __construct(shape(
    ?'unit' => ?ScaleUnit,
    ?'value' => ?Double,
  ) $s = shape()) {
    $this->unit = $s['unit'] ?? '';
    $this->value = $s['value'] ?? 0.0;
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
    $this->name = $s['name'] ?? '';
    $this->value_from = $s['value_from'] ?? '';
  }
}

type SecretList = vec<Secret>;

class ServerException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Service {
  public ?CapacityProviderStrategy $capacity_provider_strategy;
  public string $cluster_arn;
  public ?Timestamp $created_at;
  public string $created_by;
  public ?DeploymentConfiguration $deployment_configuration;
  public ?DeploymentController $deployment_controller;
  public ?Deployments $deployments;
  public int $desired_count;
  public bool $enable_ecs_managed_tags;
  public ?ServiceEvents $events;
  public ?BoxedInteger $health_check_grace_period_seconds;
  public ?LaunchType $launch_type;
  public ?LoadBalancers $load_balancers;
  public ?NetworkConfiguration $network_configuration;
  public int $pending_count;
  public ?PlacementConstraints $placement_constraints;
  public ?PlacementStrategies $placement_strategy;
  public string $platform_version;
  public ?PropagateTags $propagate_tags;
  public string $role_arn;
  public int $running_count;
  public ?SchedulingStrategy $scheduling_strategy;
  public string $service_arn;
  public string $service_name;
  public ?ServiceRegistries $service_registries;
  public string $status;
  public ?Tags $tags;
  public string $task_definition;
  public ?TaskSets $task_sets;

  public function __construct(shape(
    ?'capacity_provider_strategy' => ?CapacityProviderStrategy,
    ?'cluster_arn' => string,
    ?'created_at' => ?Timestamp,
    ?'created_by' => string,
    ?'deployment_configuration' => ?DeploymentConfiguration,
    ?'deployment_controller' => ?DeploymentController,
    ?'deployments' => ?Deployments,
    ?'desired_count' => int,
    ?'enable_ecs_managed_tags' => bool,
    ?'events' => ?ServiceEvents,
    ?'health_check_grace_period_seconds' => ?BoxedInteger,
    ?'launch_type' => ?LaunchType,
    ?'load_balancers' => ?LoadBalancers,
    ?'network_configuration' => ?NetworkConfiguration,
    ?'pending_count' => int,
    ?'placement_constraints' => ?PlacementConstraints,
    ?'placement_strategy' => ?PlacementStrategies,
    ?'platform_version' => string,
    ?'propagate_tags' => ?PropagateTags,
    ?'role_arn' => string,
    ?'running_count' => int,
    ?'scheduling_strategy' => ?SchedulingStrategy,
    ?'service_arn' => string,
    ?'service_name' => string,
    ?'service_registries' => ?ServiceRegistries,
    ?'status' => string,
    ?'tags' => ?Tags,
    ?'task_definition' => string,
    ?'task_sets' => ?TaskSets,
  ) $s = shape()) {
    $this->capacity_provider_strategy = $s['capacity_provider_strategy'] ?? vec[];
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->created_by = $s['created_by'] ?? '';
    $this->deployment_configuration = $s['deployment_configuration'] ?? null;
    $this->deployment_controller = $s['deployment_controller'] ?? null;
    $this->deployments = $s['deployments'] ?? vec[];
    $this->desired_count = $s['desired_count'] ?? 0;
    $this->enable_ecs_managed_tags = $s['enable_ecs_managed_tags'] ?? false;
    $this->events = $s['events'] ?? vec[];
    $this->health_check_grace_period_seconds = $s['health_check_grace_period_seconds'] ?? 0;
    $this->launch_type = $s['launch_type'] ?? '';
    $this->load_balancers = $s['load_balancers'] ?? vec[];
    $this->network_configuration = $s['network_configuration'] ?? null;
    $this->pending_count = $s['pending_count'] ?? 0;
    $this->placement_constraints = $s['placement_constraints'] ?? vec[];
    $this->placement_strategy = $s['placement_strategy'] ?? vec[];
    $this->platform_version = $s['platform_version'] ?? '';
    $this->propagate_tags = $s['propagate_tags'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->running_count = $s['running_count'] ?? 0;
    $this->scheduling_strategy = $s['scheduling_strategy'] ?? '';
    $this->service_arn = $s['service_arn'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
    $this->service_registries = $s['service_registries'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->task_definition = $s['task_definition'] ?? '';
    $this->task_sets = $s['task_sets'] ?? vec[];
  }
}

class ServiceEvent {
  public ?Timestamp $created_at;
  public string $id;
  public string $message;

  public function __construct(shape(
    ?'created_at' => ?Timestamp,
    ?'id' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->message = $s['message'] ?? '';
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
  public ?BoxedInteger $container_port;
  public ?BoxedInteger $port;
  public string $registry_arn;

  public function __construct(shape(
    ?'container_name' => string,
    ?'container_port' => ?BoxedInteger,
    ?'port' => ?BoxedInteger,
    ?'registry_arn' => string,
  ) $s = shape()) {
    $this->container_name = $s['container_name'] ?? '';
    $this->container_port = $s['container_port'] ?? 0;
    $this->port = $s['port'] ?? 0;
    $this->registry_arn = $s['registry_arn'] ?? '';
  }
}

type Services = vec<Service>;

class Setting {
  public ?SettingName $name;
  public string $principal_arn;
  public string $value;

  public function __construct(shape(
    ?'name' => ?SettingName,
    ?'principal_arn' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->principal_arn = $s['principal_arn'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type SettingName = string;

type Settings = vec<Setting>;

type SortOrder = string;

type StabilityStatus = string;

class StartTaskRequest {
  public string $cluster;
  public ?StringList $container_instances;
  public bool $enable_ecs_managed_tags;
  public string $group;
  public ?NetworkConfiguration $network_configuration;
  public ?TaskOverride $overrides;
  public ?PropagateTags $propagate_tags;
  public string $reference_id;
  public string $started_by;
  public ?Tags $tags;
  public string $task_definition;

  public function __construct(shape(
    ?'cluster' => string,
    ?'container_instances' => ?StringList,
    ?'enable_ecs_managed_tags' => bool,
    ?'group' => string,
    ?'network_configuration' => ?NetworkConfiguration,
    ?'overrides' => ?TaskOverride,
    ?'propagate_tags' => ?PropagateTags,
    ?'reference_id' => string,
    ?'started_by' => string,
    ?'tags' => ?Tags,
    ?'task_definition' => string,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->container_instances = $s['container_instances'] ?? vec[];
    $this->enable_ecs_managed_tags = $s['enable_ecs_managed_tags'] ?? false;
    $this->group = $s['group'] ?? '';
    $this->network_configuration = $s['network_configuration'] ?? null;
    $this->overrides = $s['overrides'] ?? null;
    $this->propagate_tags = $s['propagate_tags'] ?? '';
    $this->reference_id = $s['reference_id'] ?? '';
    $this->started_by = $s['started_by'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->task_definition = $s['task_definition'] ?? '';
  }
}

class StartTaskResponse {
  public ?Failures $failures;
  public ?Tasks $tasks;

  public function __construct(shape(
    ?'failures' => ?Failures,
    ?'tasks' => ?Tasks,
  ) $s = shape()) {
    $this->failures = $s['failures'] ?? vec[];
    $this->tasks = $s['tasks'] ?? vec[];
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
    $this->cluster = $s['cluster'] ?? '';
    $this->reason = $s['reason'] ?? '';
    $this->task = $s['task'] ?? '';
  }
}

class StopTaskResponse {
  public ?Task $task;

  public function __construct(shape(
    ?'task' => ?Task,
  ) $s = shape()) {
    $this->task = $s['task'] ?? null;
  }
}

type String = string;

type StringList = vec<String>;

type StringMap = dict<String, String>;

class SubmitAttachmentStateChangesRequest {
  public ?AttachmentStateChanges $attachments;
  public string $cluster;

  public function __construct(shape(
    ?'attachments' => ?AttachmentStateChanges,
    ?'cluster' => string,
  ) $s = shape()) {
    $this->attachments = $s['attachments'] ?? vec[];
    $this->cluster = $s['cluster'] ?? '';
  }
}

class SubmitAttachmentStateChangesResponse {
  public string $acknowledgment;

  public function __construct(shape(
    ?'acknowledgment' => string,
  ) $s = shape()) {
    $this->acknowledgment = $s['acknowledgment'] ?? '';
  }
}

class SubmitContainerStateChangeRequest {
  public string $cluster;
  public string $container_name;
  public ?BoxedInteger $exit_code;
  public ?NetworkBindings $network_bindings;
  public string $reason;
  public string $runtime_id;
  public string $status;
  public string $task;

  public function __construct(shape(
    ?'cluster' => string,
    ?'container_name' => string,
    ?'exit_code' => ?BoxedInteger,
    ?'network_bindings' => ?NetworkBindings,
    ?'reason' => string,
    ?'runtime_id' => string,
    ?'status' => string,
    ?'task' => string,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->container_name = $s['container_name'] ?? '';
    $this->exit_code = $s['exit_code'] ?? 0;
    $this->network_bindings = $s['network_bindings'] ?? vec[];
    $this->reason = $s['reason'] ?? '';
    $this->runtime_id = $s['runtime_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->task = $s['task'] ?? '';
  }
}

class SubmitContainerStateChangeResponse {
  public string $acknowledgment;

  public function __construct(shape(
    ?'acknowledgment' => string,
  ) $s = shape()) {
    $this->acknowledgment = $s['acknowledgment'] ?? '';
  }
}

class SubmitTaskStateChangeRequest {
  public ?AttachmentStateChanges $attachments;
  public string $cluster;
  public ?ContainerStateChanges $containers;
  public ?Timestamp $execution_stopped_at;
  public ?Timestamp $pull_started_at;
  public ?Timestamp $pull_stopped_at;
  public string $reason;
  public string $status;
  public string $task;

  public function __construct(shape(
    ?'attachments' => ?AttachmentStateChanges,
    ?'cluster' => string,
    ?'containers' => ?ContainerStateChanges,
    ?'execution_stopped_at' => ?Timestamp,
    ?'pull_started_at' => ?Timestamp,
    ?'pull_stopped_at' => ?Timestamp,
    ?'reason' => string,
    ?'status' => string,
    ?'task' => string,
  ) $s = shape()) {
    $this->attachments = $s['attachments'] ?? vec[];
    $this->cluster = $s['cluster'] ?? '';
    $this->containers = $s['containers'] ?? vec[];
    $this->execution_stopped_at = $s['execution_stopped_at'] ?? 0;
    $this->pull_started_at = $s['pull_started_at'] ?? 0;
    $this->pull_stopped_at = $s['pull_stopped_at'] ?? 0;
    $this->reason = $s['reason'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->task = $s['task'] ?? '';
  }
}

class SubmitTaskStateChangeResponse {
  public string $acknowledgment;

  public function __construct(shape(
    ?'acknowledgment' => string,
  ) $s = shape()) {
    $this->acknowledgment = $s['acknowledgment'] ?? '';
  }
}

class SystemControl {
  public string $namespace;
  public string $value;

  public function __construct(shape(
    ?'namespace' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->namespace = $s['namespace'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type SystemControls = vec<SystemControl>;

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

type TagKeys = vec<TagKey>;

class TagResourceRequest {
  public string $resource_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'resource_arn' => string,
    ?'tags' => ?Tags,
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

type Tags = vec<Tag>;

class TargetNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TargetType = string;

class Task {
  public ?Attachments $attachments;
  public ?Attributes $attributes;
  public string $availability_zone;
  public string $capacity_provider_name;
  public string $cluster_arn;
  public ?Connectivity $connectivity;
  public ?Timestamp $connectivity_at;
  public string $container_instance_arn;
  public ?Containers $containers;
  public string $cpu;
  public ?Timestamp $created_at;
  public string $desired_status;
  public ?Timestamp $execution_stopped_at;
  public string $group;
  public ?HealthStatus $health_status;
  public ?InferenceAccelerators $inference_accelerators;
  public string $last_status;
  public ?LaunchType $launch_type;
  public string $memory;
  public ?TaskOverride $overrides;
  public string $platform_version;
  public ?Timestamp $pull_started_at;
  public ?Timestamp $pull_stopped_at;
  public ?Timestamp $started_at;
  public string $started_by;
  public ?TaskStopCode $stop_code;
  public ?Timestamp $stopped_at;
  public string $stopped_reason;
  public ?Timestamp $stopping_at;
  public ?Tags $tags;
  public string $task_arn;
  public string $task_definition_arn;
  public ?Long $version;

  public function __construct(shape(
    ?'attachments' => ?Attachments,
    ?'attributes' => ?Attributes,
    ?'availability_zone' => string,
    ?'capacity_provider_name' => string,
    ?'cluster_arn' => string,
    ?'connectivity' => ?Connectivity,
    ?'connectivity_at' => ?Timestamp,
    ?'container_instance_arn' => string,
    ?'containers' => ?Containers,
    ?'cpu' => string,
    ?'created_at' => ?Timestamp,
    ?'desired_status' => string,
    ?'execution_stopped_at' => ?Timestamp,
    ?'group' => string,
    ?'health_status' => ?HealthStatus,
    ?'inference_accelerators' => ?InferenceAccelerators,
    ?'last_status' => string,
    ?'launch_type' => ?LaunchType,
    ?'memory' => string,
    ?'overrides' => ?TaskOverride,
    ?'platform_version' => string,
    ?'pull_started_at' => ?Timestamp,
    ?'pull_stopped_at' => ?Timestamp,
    ?'started_at' => ?Timestamp,
    ?'started_by' => string,
    ?'stop_code' => ?TaskStopCode,
    ?'stopped_at' => ?Timestamp,
    ?'stopped_reason' => string,
    ?'stopping_at' => ?Timestamp,
    ?'tags' => ?Tags,
    ?'task_arn' => string,
    ?'task_definition_arn' => string,
    ?'version' => ?Long,
  ) $s = shape()) {
    $this->attachments = $s['attachments'] ?? vec[];
    $this->attributes = $s['attributes'] ?? vec[];
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->capacity_provider_name = $s['capacity_provider_name'] ?? '';
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->connectivity = $s['connectivity'] ?? '';
    $this->connectivity_at = $s['connectivity_at'] ?? 0;
    $this->container_instance_arn = $s['container_instance_arn'] ?? '';
    $this->containers = $s['containers'] ?? vec[];
    $this->cpu = $s['cpu'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->desired_status = $s['desired_status'] ?? '';
    $this->execution_stopped_at = $s['execution_stopped_at'] ?? 0;
    $this->group = $s['group'] ?? '';
    $this->health_status = $s['health_status'] ?? '';
    $this->inference_accelerators = $s['inference_accelerators'] ?? vec[];
    $this->last_status = $s['last_status'] ?? '';
    $this->launch_type = $s['launch_type'] ?? '';
    $this->memory = $s['memory'] ?? '';
    $this->overrides = $s['overrides'] ?? null;
    $this->platform_version = $s['platform_version'] ?? '';
    $this->pull_started_at = $s['pull_started_at'] ?? 0;
    $this->pull_stopped_at = $s['pull_stopped_at'] ?? 0;
    $this->started_at = $s['started_at'] ?? 0;
    $this->started_by = $s['started_by'] ?? '';
    $this->stop_code = $s['stop_code'] ?? '';
    $this->stopped_at = $s['stopped_at'] ?? 0;
    $this->stopped_reason = $s['stopped_reason'] ?? '';
    $this->stopping_at = $s['stopping_at'] ?? 0;
    $this->tags = $s['tags'] ?? vec[];
    $this->task_arn = $s['task_arn'] ?? '';
    $this->task_definition_arn = $s['task_definition_arn'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class TaskDefinition {
  public ?CompatibilityList $compatibilities;
  public ?ContainerDefinitions $container_definitions;
  public string $cpu;
  public string $execution_role_arn;
  public string $family;
  public ?InferenceAccelerators $inference_accelerators;
  public ?IpcMode $ipc_mode;
  public string $memory;
  public ?NetworkMode $network_mode;
  public ?PidMode $pid_mode;
  public ?TaskDefinitionPlacementConstraints $placement_constraints;
  public ?ProxyConfiguration $proxy_configuration;
  public ?RequiresAttributes $requires_attributes;
  public ?CompatibilityList $requires_compatibilities;
  public int $revision;
  public ?TaskDefinitionStatus $status;
  public string $task_definition_arn;
  public string $task_role_arn;
  public ?VolumeList $volumes;

  public function __construct(shape(
    ?'compatibilities' => ?CompatibilityList,
    ?'container_definitions' => ?ContainerDefinitions,
    ?'cpu' => string,
    ?'execution_role_arn' => string,
    ?'family' => string,
    ?'inference_accelerators' => ?InferenceAccelerators,
    ?'ipc_mode' => ?IpcMode,
    ?'memory' => string,
    ?'network_mode' => ?NetworkMode,
    ?'pid_mode' => ?PidMode,
    ?'placement_constraints' => ?TaskDefinitionPlacementConstraints,
    ?'proxy_configuration' => ?ProxyConfiguration,
    ?'requires_attributes' => ?RequiresAttributes,
    ?'requires_compatibilities' => ?CompatibilityList,
    ?'revision' => int,
    ?'status' => ?TaskDefinitionStatus,
    ?'task_definition_arn' => string,
    ?'task_role_arn' => string,
    ?'volumes' => ?VolumeList,
  ) $s = shape()) {
    $this->compatibilities = $s['compatibilities'] ?? vec[];
    $this->container_definitions = $s['container_definitions'] ?? vec[];
    $this->cpu = $s['cpu'] ?? '';
    $this->execution_role_arn = $s['execution_role_arn'] ?? '';
    $this->family = $s['family'] ?? '';
    $this->inference_accelerators = $s['inference_accelerators'] ?? vec[];
    $this->ipc_mode = $s['ipc_mode'] ?? '';
    $this->memory = $s['memory'] ?? '';
    $this->network_mode = $s['network_mode'] ?? '';
    $this->pid_mode = $s['pid_mode'] ?? '';
    $this->placement_constraints = $s['placement_constraints'] ?? vec[];
    $this->proxy_configuration = $s['proxy_configuration'] ?? null;
    $this->requires_attributes = $s['requires_attributes'] ?? vec[];
    $this->requires_compatibilities = $s['requires_compatibilities'] ?? vec[];
    $this->revision = $s['revision'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->task_definition_arn = $s['task_definition_arn'] ?? '';
    $this->task_role_arn = $s['task_role_arn'] ?? '';
    $this->volumes = $s['volumes'] ?? vec[];
  }
}

type TaskDefinitionFamilyStatus = string;

type TaskDefinitionField = string;

type TaskDefinitionFieldList = vec<TaskDefinitionField>;

class TaskDefinitionPlacementConstraint {
  public string $expression;
  public ?TaskDefinitionPlacementConstraintType $type;

  public function __construct(shape(
    ?'expression' => string,
    ?'type' => ?TaskDefinitionPlacementConstraintType,
  ) $s = shape()) {
    $this->expression = $s['expression'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type TaskDefinitionPlacementConstraintType = string;

type TaskDefinitionPlacementConstraints = vec<TaskDefinitionPlacementConstraint>;

type TaskDefinitionStatus = string;

type TaskField = string;

type TaskFieldList = vec<TaskField>;

class TaskOverride {
  public ?ContainerOverrides $container_overrides;
  public string $cpu;
  public string $execution_role_arn;
  public ?InferenceAcceleratorOverrides $inference_accelerator_overrides;
  public string $memory;
  public string $task_role_arn;

  public function __construct(shape(
    ?'container_overrides' => ?ContainerOverrides,
    ?'cpu' => string,
    ?'execution_role_arn' => string,
    ?'inference_accelerator_overrides' => ?InferenceAcceleratorOverrides,
    ?'memory' => string,
    ?'task_role_arn' => string,
  ) $s = shape()) {
    $this->container_overrides = $s['container_overrides'] ?? vec[];
    $this->cpu = $s['cpu'] ?? '';
    $this->execution_role_arn = $s['execution_role_arn'] ?? '';
    $this->inference_accelerator_overrides = $s['inference_accelerator_overrides'] ?? vec[];
    $this->memory = $s['memory'] ?? '';
    $this->task_role_arn = $s['task_role_arn'] ?? '';
  }
}

class TaskSet {
  public ?CapacityProviderStrategy $capacity_provider_strategy;
  public string $cluster_arn;
  public int $computed_desired_count;
  public ?Timestamp $created_at;
  public string $external_id;
  public string $id;
  public ?LaunchType $launch_type;
  public ?LoadBalancers $load_balancers;
  public ?NetworkConfiguration $network_configuration;
  public int $pending_count;
  public string $platform_version;
  public int $running_count;
  public ?Scale $scale;
  public string $service_arn;
  public ?ServiceRegistries $service_registries;
  public ?StabilityStatus $stability_status;
  public ?Timestamp $stability_status_at;
  public string $started_by;
  public string $status;
  public ?Tags $tags;
  public string $task_definition;
  public string $task_set_arn;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'capacity_provider_strategy' => ?CapacityProviderStrategy,
    ?'cluster_arn' => string,
    ?'computed_desired_count' => int,
    ?'created_at' => ?Timestamp,
    ?'external_id' => string,
    ?'id' => string,
    ?'launch_type' => ?LaunchType,
    ?'load_balancers' => ?LoadBalancers,
    ?'network_configuration' => ?NetworkConfiguration,
    ?'pending_count' => int,
    ?'platform_version' => string,
    ?'running_count' => int,
    ?'scale' => ?Scale,
    ?'service_arn' => string,
    ?'service_registries' => ?ServiceRegistries,
    ?'stability_status' => ?StabilityStatus,
    ?'stability_status_at' => ?Timestamp,
    ?'started_by' => string,
    ?'status' => string,
    ?'tags' => ?Tags,
    ?'task_definition' => string,
    ?'task_set_arn' => string,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->capacity_provider_strategy = $s['capacity_provider_strategy'] ?? vec[];
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->computed_desired_count = $s['computed_desired_count'] ?? 0;
    $this->created_at = $s['created_at'] ?? 0;
    $this->external_id = $s['external_id'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->launch_type = $s['launch_type'] ?? '';
    $this->load_balancers = $s['load_balancers'] ?? vec[];
    $this->network_configuration = $s['network_configuration'] ?? null;
    $this->pending_count = $s['pending_count'] ?? 0;
    $this->platform_version = $s['platform_version'] ?? '';
    $this->running_count = $s['running_count'] ?? 0;
    $this->scale = $s['scale'] ?? null;
    $this->service_arn = $s['service_arn'] ?? '';
    $this->service_registries = $s['service_registries'] ?? vec[];
    $this->stability_status = $s['stability_status'] ?? '';
    $this->stability_status_at = $s['stability_status_at'] ?? 0;
    $this->started_by = $s['started_by'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->task_definition = $s['task_definition'] ?? '';
    $this->task_set_arn = $s['task_set_arn'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
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
  public ?StringList $mount_options;
  public int $size;

  public function __construct(shape(
    ?'container_path' => string,
    ?'mount_options' => ?StringList,
    ?'size' => int,
  ) $s = shape()) {
    $this->container_path = $s['container_path'] ?? '';
    $this->mount_options = $s['mount_options'] ?? vec[];
    $this->size = $s['size'] ?? 0;
  }
}

type TmpfsList = vec<Tmpfs>;

type TransportProtocol = string;

class Ulimit {
  public int $hard_limit;
  public ?UlimitName $name;
  public int $soft_limit;

  public function __construct(shape(
    ?'hard_limit' => int,
    ?'name' => ?UlimitName,
    ?'soft_limit' => int,
  ) $s = shape()) {
    $this->hard_limit = $s['hard_limit'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->soft_limit = $s['soft_limit'] ?? 0;
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
  public ?TagKeys $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => string,
    ?'tag_keys' => ?TagKeys,
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

class UpdateClusterSettingsRequest {
  public string $cluster;
  public ?ClusterSettings $settings;

  public function __construct(shape(
    ?'cluster' => string,
    ?'settings' => ?ClusterSettings,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->settings = $s['settings'] ?? vec[];
  }
}

class UpdateClusterSettingsResponse {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class UpdateContainerAgentRequest {
  public string $cluster;
  public string $container_instance;

  public function __construct(shape(
    ?'cluster' => string,
    ?'container_instance' => string,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->container_instance = $s['container_instance'] ?? '';
  }
}

class UpdateContainerAgentResponse {
  public ?ContainerInstance $container_instance;

  public function __construct(shape(
    ?'container_instance' => ?ContainerInstance,
  ) $s = shape()) {
    $this->container_instance = $s['container_instance'] ?? null;
  }
}

class UpdateContainerInstancesStateRequest {
  public string $cluster;
  public ?StringList $container_instances;
  public ?ContainerInstanceStatus $status;

  public function __construct(shape(
    ?'cluster' => string,
    ?'container_instances' => ?StringList,
    ?'status' => ?ContainerInstanceStatus,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->container_instances = $s['container_instances'] ?? vec[];
    $this->status = $s['status'] ?? '';
  }
}

class UpdateContainerInstancesStateResponse {
  public ?ContainerInstances $container_instances;
  public ?Failures $failures;

  public function __construct(shape(
    ?'container_instances' => ?ContainerInstances,
    ?'failures' => ?Failures,
  ) $s = shape()) {
    $this->container_instances = $s['container_instances'] ?? vec[];
    $this->failures = $s['failures'] ?? vec[];
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
    $this->cluster = $s['cluster'] ?? '';
    $this->primary_task_set = $s['primary_task_set'] ?? '';
    $this->service = $s['service'] ?? '';
  }
}

class UpdateServicePrimaryTaskSetResponse {
  public ?TaskSet $task_set;

  public function __construct(shape(
    ?'task_set' => ?TaskSet,
  ) $s = shape()) {
    $this->task_set = $s['task_set'] ?? null;
  }
}

class UpdateServiceRequest {
  public ?CapacityProviderStrategy $capacity_provider_strategy;
  public string $cluster;
  public ?DeploymentConfiguration $deployment_configuration;
  public ?BoxedInteger $desired_count;
  public bool $force_new_deployment;
  public ?BoxedInteger $health_check_grace_period_seconds;
  public ?NetworkConfiguration $network_configuration;
  public ?PlacementConstraints $placement_constraints;
  public ?PlacementStrategies $placement_strategy;
  public string $platform_version;
  public string $service;
  public string $task_definition;

  public function __construct(shape(
    ?'capacity_provider_strategy' => ?CapacityProviderStrategy,
    ?'cluster' => string,
    ?'deployment_configuration' => ?DeploymentConfiguration,
    ?'desired_count' => ?BoxedInteger,
    ?'force_new_deployment' => bool,
    ?'health_check_grace_period_seconds' => ?BoxedInteger,
    ?'network_configuration' => ?NetworkConfiguration,
    ?'placement_constraints' => ?PlacementConstraints,
    ?'placement_strategy' => ?PlacementStrategies,
    ?'platform_version' => string,
    ?'service' => string,
    ?'task_definition' => string,
  ) $s = shape()) {
    $this->capacity_provider_strategy = $s['capacity_provider_strategy'] ?? vec[];
    $this->cluster = $s['cluster'] ?? '';
    $this->deployment_configuration = $s['deployment_configuration'] ?? null;
    $this->desired_count = $s['desired_count'] ?? 0;
    $this->force_new_deployment = $s['force_new_deployment'] ?? false;
    $this->health_check_grace_period_seconds = $s['health_check_grace_period_seconds'] ?? 0;
    $this->network_configuration = $s['network_configuration'] ?? null;
    $this->placement_constraints = $s['placement_constraints'] ?? vec[];
    $this->placement_strategy = $s['placement_strategy'] ?? vec[];
    $this->platform_version = $s['platform_version'] ?? '';
    $this->service = $s['service'] ?? '';
    $this->task_definition = $s['task_definition'] ?? '';
  }
}

class UpdateServiceResponse {
  public ?Service $service;

  public function __construct(shape(
    ?'service' => ?Service,
  ) $s = shape()) {
    $this->service = $s['service'] ?? null;
  }
}

class UpdateTaskSetRequest {
  public string $cluster;
  public ?Scale $scale;
  public string $service;
  public string $task_set;

  public function __construct(shape(
    ?'cluster' => string,
    ?'scale' => ?Scale,
    ?'service' => string,
    ?'task_set' => string,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? '';
    $this->scale = $s['scale'] ?? null;
    $this->service = $s['service'] ?? '';
    $this->task_set = $s['task_set'] ?? '';
  }
}

class UpdateTaskSetResponse {
  public ?TaskSet $task_set;

  public function __construct(shape(
    ?'task_set' => ?TaskSet,
  ) $s = shape()) {
    $this->task_set = $s['task_set'] ?? null;
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
    $this->agent_hash = $s['agent_hash'] ?? '';
    $this->agent_version = $s['agent_version'] ?? '';
    $this->docker_version = $s['docker_version'] ?? '';
  }
}

class Volume {
  public ?DockerVolumeConfiguration $docker_volume_configuration;
  public ?EFSVolumeConfiguration $efs_volume_configuration;
  public ?HostVolumeProperties $host;
  public string $name;

  public function __construct(shape(
    ?'docker_volume_configuration' => ?DockerVolumeConfiguration,
    ?'efs_volume_configuration' => ?EFSVolumeConfiguration,
    ?'host' => ?HostVolumeProperties,
    ?'name' => string,
  ) $s = shape()) {
    $this->docker_volume_configuration = $s['docker_volume_configuration'] ?? null;
    $this->efs_volume_configuration = $s['efs_volume_configuration'] ?? null;
    $this->host = $s['host'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

class VolumeFrom {
  public ?BoxedBoolean $read_only;
  public string $source_container;

  public function __construct(shape(
    ?'read_only' => ?BoxedBoolean,
    ?'source_container' => string,
  ) $s = shape()) {
    $this->read_only = $s['read_only'] ?? false;
    $this->source_container = $s['source_container'] ?? '';
  }
}

type VolumeFromList = vec<VolumeFrom>;

type VolumeList = vec<Volume>;

