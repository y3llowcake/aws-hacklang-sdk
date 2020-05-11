<?hh // strict
namespace slack\aws\batch;

interface Batch {
  public function CancelJob(CancelJobRequest): Awaitable<Errors\Result<CancelJobResponse>>;
  public function CreateComputeEnvironment(CreateComputeEnvironmentRequest): Awaitable<Errors\Result<CreateComputeEnvironmentResponse>>;
  public function CreateJobQueue(CreateJobQueueRequest): Awaitable<Errors\Result<CreateJobQueueResponse>>;
  public function DeleteComputeEnvironment(DeleteComputeEnvironmentRequest): Awaitable<Errors\Result<DeleteComputeEnvironmentResponse>>;
  public function DeleteJobQueue(DeleteJobQueueRequest): Awaitable<Errors\Result<DeleteJobQueueResponse>>;
  public function DeregisterJobDefinition(DeregisterJobDefinitionRequest): Awaitable<Errors\Result<DeregisterJobDefinitionResponse>>;
  public function DescribeComputeEnvironments(DescribeComputeEnvironmentsRequest): Awaitable<Errors\Result<DescribeComputeEnvironmentsResponse>>;
  public function DescribeJobDefinitions(DescribeJobDefinitionsRequest): Awaitable<Errors\Result<DescribeJobDefinitionsResponse>>;
  public function DescribeJobQueues(DescribeJobQueuesRequest): Awaitable<Errors\Result<DescribeJobQueuesResponse>>;
  public function DescribeJobs(DescribeJobsRequest): Awaitable<Errors\Result<DescribeJobsResponse>>;
  public function ListJobs(ListJobsRequest): Awaitable<Errors\Result<ListJobsResponse>>;
  public function RegisterJobDefinition(RegisterJobDefinitionRequest): Awaitable<Errors\Result<RegisterJobDefinitionResponse>>;
  public function SubmitJob(SubmitJobRequest): Awaitable<Errors\Result<SubmitJobResponse>>;
  public function TerminateJob(TerminateJobRequest): Awaitable<Errors\Result<TerminateJobResponse>>;
  public function UpdateComputeEnvironment(UpdateComputeEnvironmentRequest): Awaitable<Errors\Result<UpdateComputeEnvironmentResponse>>;
  public function UpdateJobQueue(UpdateJobQueueRequest): Awaitable<Errors\Result<UpdateJobQueueResponse>>;
}

type ArrayJobDependency = string;

type ArrayJobStatusSummary = dict<String, Integer>;

class ArrayProperties {
  public int $size;

  public function __construct(shape(
  ?'size' => int,
  ) $s = shape()) {
    $this->size = $size ?? ;
  }
}

class ArrayPropertiesDetail {
  public int $index;
  public int $size;
  public ArrayJobStatusSummary $status_summary;

  public function __construct(shape(
  ?'index' => int,
  ?'size' => int,
  ?'status_summary' => ArrayJobStatusSummary,
  ) $s = shape()) {
    $this->index = $index ?? ;
    $this->size = $size ?? ;
    $this->status_summary = $status_summary ?? ;
  }
}

class ArrayPropertiesSummary {
  public int $index;
  public int $size;

  public function __construct(shape(
  ?'index' => int,
  ?'size' => int,
  ) $s = shape()) {
    $this->index = $index ?? ;
    $this->size = $size ?? ;
  }
}

class AttemptContainerDetail {
  public string $container_instance_arn;
  public int $exit_code;
  public string $log_stream_name;
  public NetworkInterfaceList $network_interfaces;
  public string $reason;
  public string $task_arn;

  public function __construct(shape(
  ?'container_instance_arn' => string,
  ?'exit_code' => int,
  ?'log_stream_name' => string,
  ?'network_interfaces' => NetworkInterfaceList,
  ?'reason' => string,
  ?'task_arn' => string,
  ) $s = shape()) {
    $this->container_instance_arn = $container_instance_arn ?? ;
    $this->exit_code = $exit_code ?? ;
    $this->log_stream_name = $log_stream_name ?? ;
    $this->network_interfaces = $network_interfaces ?? ;
    $this->reason = $reason ?? ;
    $this->task_arn = $task_arn ?? ;
  }
}

class AttemptDetail {
  public AttemptContainerDetail $container;
  public Long $started_at;
  public string $status_reason;
  public Long $stopped_at;

  public function __construct(shape(
  ?'container' => AttemptContainerDetail,
  ?'started_at' => Long,
  ?'status_reason' => string,
  ?'stopped_at' => Long,
  ) $s = shape()) {
    $this->container = $container ?? ;
    $this->started_at = $started_at ?? ;
    $this->status_reason = $status_reason ?? ;
    $this->stopped_at = $stopped_at ?? ;
  }
}

type AttemptDetails = vec<AttemptDetail>;

type Boolean = bool;

type CEState = string;

type CEStatus = string;

type CEType = string;

type CRAllocationStrategy = string;

type CRType = string;

class CancelJobRequest {
  public string $job_id;
  public string $reason;

  public function __construct(shape(
  ?'job_id' => string,
  ?'reason' => string,
  ) $s = shape()) {
    $this->job_id = $job_id ?? ;
    $this->reason = $reason ?? ;
  }
}

class CancelJobResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClientException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ComputeEnvironmentDetail {
  public string $compute_environment_arn;
  public string $compute_environment_name;
  public ComputeResource $compute_resources;
  public string $ecs_cluster_arn;
  public string $service_role;
  public CEState $state;
  public CEStatus $status;
  public string $status_reason;
  public CEType $type;

  public function __construct(shape(
  ?'compute_environment_arn' => string,
  ?'compute_environment_name' => string,
  ?'compute_resources' => ComputeResource,
  ?'ecs_cluster_arn' => string,
  ?'service_role' => string,
  ?'state' => CEState,
  ?'status' => CEStatus,
  ?'status_reason' => string,
  ?'type' => CEType,
  ) $s = shape()) {
    $this->compute_environment_arn = $compute_environment_arn ?? ;
    $this->compute_environment_name = $compute_environment_name ?? ;
    $this->compute_resources = $compute_resources ?? ;
    $this->ecs_cluster_arn = $ecs_cluster_arn ?? ;
    $this->service_role = $service_role ?? ;
    $this->state = $state ?? ;
    $this->status = $status ?? ;
    $this->status_reason = $status_reason ?? ;
    $this->type = $type ?? ;
  }
}

type ComputeEnvironmentDetailList = vec<ComputeEnvironmentDetail>;

class ComputeEnvironmentOrder {
  public string $compute_environment;
  public int $order;

  public function __construct(shape(
  ?'compute_environment' => string,
  ?'order' => int,
  ) $s = shape()) {
    $this->compute_environment = $compute_environment ?? ;
    $this->order = $order ?? ;
  }
}

type ComputeEnvironmentOrders = vec<ComputeEnvironmentOrder>;

class ComputeResource {
  public CRAllocationStrategy $allocation_strategy;
  public int $bid_percentage;
  public int $desiredv_cpus;
  public string $ec_2_key_pair;
  public string $image_id;
  public string $instance_role;
  public StringList $instance_types;
  public LaunchTemplateSpecification $launch_template;
  public int $maxv_cpus;
  public int $minv_cpus;
  public string $placement_group;
  public StringList $security_group_ids;
  public string $spot_iam_fleet_role;
  public StringList $subnets;
  public TagsMap $tags;
  public CRType $type;

  public function __construct(shape(
  ?'allocation_strategy' => CRAllocationStrategy,
  ?'bid_percentage' => int,
  ?'desiredv_cpus' => int,
  ?'ec_2_key_pair' => string,
  ?'image_id' => string,
  ?'instance_role' => string,
  ?'instance_types' => StringList,
  ?'launch_template' => LaunchTemplateSpecification,
  ?'maxv_cpus' => int,
  ?'minv_cpus' => int,
  ?'placement_group' => string,
  ?'security_group_ids' => StringList,
  ?'spot_iam_fleet_role' => string,
  ?'subnets' => StringList,
  ?'tags' => TagsMap,
  ?'type' => CRType,
  ) $s = shape()) {
    $this->allocation_strategy = $allocation_strategy ?? ;
    $this->bid_percentage = $bid_percentage ?? ;
    $this->desiredv_cpus = $desiredv_cpus ?? ;
    $this->ec_2_key_pair = $ec_2_key_pair ?? ;
    $this->image_id = $image_id ?? ;
    $this->instance_role = $instance_role ?? ;
    $this->instance_types = $instance_types ?? ;
    $this->launch_template = $launch_template ?? ;
    $this->maxv_cpus = $maxv_cpus ?? ;
    $this->minv_cpus = $minv_cpus ?? ;
    $this->placement_group = $placement_group ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->spot_iam_fleet_role = $spot_iam_fleet_role ?? ;
    $this->subnets = $subnets ?? ;
    $this->tags = $tags ?? ;
    $this->type = $type ?? ;
  }
}

class ComputeResourceUpdate {
  public int $desiredv_cpus;
  public int $maxv_cpus;
  public int $minv_cpus;

  public function __construct(shape(
  ?'desiredv_cpus' => int,
  ?'maxv_cpus' => int,
  ?'minv_cpus' => int,
  ) $s = shape()) {
    $this->desiredv_cpus = $desiredv_cpus ?? ;
    $this->maxv_cpus = $maxv_cpus ?? ;
    $this->minv_cpus = $minv_cpus ?? ;
  }
}

class ContainerDetail {
  public StringList $command;
  public string $container_instance_arn;
  public EnvironmentVariables $environment;
  public int $exit_code;
  public string $image;
  public string $instance_type;
  public string $job_role_arn;
  public LinuxParameters $linux_parameters;
  public string $log_stream_name;
  public int $memory;
  public MountPoints $mount_points;
  public NetworkInterfaceList $network_interfaces;
  public boolean $privileged;
  public boolean $readonly_root_filesystem;
  public string $reason;
  public ResourceRequirements $resource_requirements;
  public string $task_arn;
  public Ulimits $ulimits;
  public string $user;
  public int $vcpus;
  public Volumes $volumes;

  public function __construct(shape(
  ?'command' => StringList,
  ?'container_instance_arn' => string,
  ?'environment' => EnvironmentVariables,
  ?'exit_code' => int,
  ?'image' => string,
  ?'instance_type' => string,
  ?'job_role_arn' => string,
  ?'linux_parameters' => LinuxParameters,
  ?'log_stream_name' => string,
  ?'memory' => int,
  ?'mount_points' => MountPoints,
  ?'network_interfaces' => NetworkInterfaceList,
  ?'privileged' => boolean,
  ?'readonly_root_filesystem' => boolean,
  ?'reason' => string,
  ?'resource_requirements' => ResourceRequirements,
  ?'task_arn' => string,
  ?'ulimits' => Ulimits,
  ?'user' => string,
  ?'vcpus' => int,
  ?'volumes' => Volumes,
  ) $s = shape()) {
    $this->command = $command ?? ;
    $this->container_instance_arn = $container_instance_arn ?? ;
    $this->environment = $environment ?? ;
    $this->exit_code = $exit_code ?? ;
    $this->image = $image ?? ;
    $this->instance_type = $instance_type ?? ;
    $this->job_role_arn = $job_role_arn ?? ;
    $this->linux_parameters = $linux_parameters ?? ;
    $this->log_stream_name = $log_stream_name ?? ;
    $this->memory = $memory ?? ;
    $this->mount_points = $mount_points ?? ;
    $this->network_interfaces = $network_interfaces ?? ;
    $this->privileged = $privileged ?? ;
    $this->readonly_root_filesystem = $readonly_root_filesystem ?? ;
    $this->reason = $reason ?? ;
    $this->resource_requirements = $resource_requirements ?? ;
    $this->task_arn = $task_arn ?? ;
    $this->ulimits = $ulimits ?? ;
    $this->user = $user ?? ;
    $this->vcpus = $vcpus ?? ;
    $this->volumes = $volumes ?? ;
  }
}

class ContainerOverrides {
  public StringList $command;
  public EnvironmentVariables $environment;
  public string $instance_type;
  public int $memory;
  public ResourceRequirements $resource_requirements;
  public int $vcpus;

  public function __construct(shape(
  ?'command' => StringList,
  ?'environment' => EnvironmentVariables,
  ?'instance_type' => string,
  ?'memory' => int,
  ?'resource_requirements' => ResourceRequirements,
  ?'vcpus' => int,
  ) $s = shape()) {
    $this->command = $command ?? ;
    $this->environment = $environment ?? ;
    $this->instance_type = $instance_type ?? ;
    $this->memory = $memory ?? ;
    $this->resource_requirements = $resource_requirements ?? ;
    $this->vcpus = $vcpus ?? ;
  }
}

class ContainerProperties {
  public StringList $command;
  public EnvironmentVariables $environment;
  public string $image;
  public string $instance_type;
  public string $job_role_arn;
  public LinuxParameters $linux_parameters;
  public int $memory;
  public MountPoints $mount_points;
  public boolean $privileged;
  public boolean $readonly_root_filesystem;
  public ResourceRequirements $resource_requirements;
  public Ulimits $ulimits;
  public string $user;
  public int $vcpus;
  public Volumes $volumes;

  public function __construct(shape(
  ?'command' => StringList,
  ?'environment' => EnvironmentVariables,
  ?'image' => string,
  ?'instance_type' => string,
  ?'job_role_arn' => string,
  ?'linux_parameters' => LinuxParameters,
  ?'memory' => int,
  ?'mount_points' => MountPoints,
  ?'privileged' => boolean,
  ?'readonly_root_filesystem' => boolean,
  ?'resource_requirements' => ResourceRequirements,
  ?'ulimits' => Ulimits,
  ?'user' => string,
  ?'vcpus' => int,
  ?'volumes' => Volumes,
  ) $s = shape()) {
    $this->command = $command ?? ;
    $this->environment = $environment ?? ;
    $this->image = $image ?? ;
    $this->instance_type = $instance_type ?? ;
    $this->job_role_arn = $job_role_arn ?? ;
    $this->linux_parameters = $linux_parameters ?? ;
    $this->memory = $memory ?? ;
    $this->mount_points = $mount_points ?? ;
    $this->privileged = $privileged ?? ;
    $this->readonly_root_filesystem = $readonly_root_filesystem ?? ;
    $this->resource_requirements = $resource_requirements ?? ;
    $this->ulimits = $ulimits ?? ;
    $this->user = $user ?? ;
    $this->vcpus = $vcpus ?? ;
    $this->volumes = $volumes ?? ;
  }
}

class ContainerSummary {
  public int $exit_code;
  public string $reason;

  public function __construct(shape(
  ?'exit_code' => int,
  ?'reason' => string,
  ) $s = shape()) {
    $this->exit_code = $exit_code ?? ;
    $this->reason = $reason ?? ;
  }
}

class CreateComputeEnvironmentRequest {
  public string $compute_environment_name;
  public ComputeResource $compute_resources;
  public string $service_role;
  public CEState $state;
  public CEType $type;

  public function __construct(shape(
  ?'compute_environment_name' => string,
  ?'compute_resources' => ComputeResource,
  ?'service_role' => string,
  ?'state' => CEState,
  ?'type' => CEType,
  ) $s = shape()) {
    $this->compute_environment_name = $compute_environment_name ?? ;
    $this->compute_resources = $compute_resources ?? ;
    $this->service_role = $service_role ?? ;
    $this->state = $state ?? ;
    $this->type = $type ?? ;
  }
}

class CreateComputeEnvironmentResponse {
  public string $compute_environment_arn;
  public string $compute_environment_name;

  public function __construct(shape(
  ?'compute_environment_arn' => string,
  ?'compute_environment_name' => string,
  ) $s = shape()) {
    $this->compute_environment_arn = $compute_environment_arn ?? ;
    $this->compute_environment_name = $compute_environment_name ?? ;
  }
}

class CreateJobQueueRequest {
  public ComputeEnvironmentOrders $compute_environment_order;
  public string $job_queue_name;
  public int $priority;
  public JQState $state;

  public function __construct(shape(
  ?'compute_environment_order' => ComputeEnvironmentOrders,
  ?'job_queue_name' => string,
  ?'priority' => int,
  ?'state' => JQState,
  ) $s = shape()) {
    $this->compute_environment_order = $compute_environment_order ?? ;
    $this->job_queue_name = $job_queue_name ?? ;
    $this->priority = $priority ?? ;
    $this->state = $state ?? ;
  }
}

class CreateJobQueueResponse {
  public string $job_queue_arn;
  public string $job_queue_name;

  public function __construct(shape(
  ?'job_queue_arn' => string,
  ?'job_queue_name' => string,
  ) $s = shape()) {
    $this->job_queue_arn = $job_queue_arn ?? ;
    $this->job_queue_name = $job_queue_name ?? ;
  }
}

class DeleteComputeEnvironmentRequest {
  public string $compute_environment;

  public function __construct(shape(
  ?'compute_environment' => string,
  ) $s = shape()) {
    $this->compute_environment = $compute_environment ?? ;
  }
}

class DeleteComputeEnvironmentResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteJobQueueRequest {
  public string $job_queue;

  public function __construct(shape(
  ?'job_queue' => string,
  ) $s = shape()) {
    $this->job_queue = $job_queue ?? ;
  }
}

class DeleteJobQueueResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeregisterJobDefinitionRequest {
  public string $job_definition;

  public function __construct(shape(
  ?'job_definition' => string,
  ) $s = shape()) {
    $this->job_definition = $job_definition ?? ;
  }
}

class DeregisterJobDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeComputeEnvironmentsRequest {
  public StringList $compute_environments;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'compute_environments' => StringList,
  ?'max_results' => int,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->compute_environments = $compute_environments ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeComputeEnvironmentsResponse {
  public ComputeEnvironmentDetailList $compute_environments;
  public string $next_token;

  public function __construct(shape(
  ?'compute_environments' => ComputeEnvironmentDetailList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->compute_environments = $compute_environments ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeJobDefinitionsRequest {
  public string $job_definition_name;
  public StringList $job_definitions;
  public int $max_results;
  public string $next_token;
  public string $status;

  public function __construct(shape(
  ?'job_definition_name' => string,
  ?'job_definitions' => StringList,
  ?'max_results' => int,
  ?'next_token' => string,
  ?'status' => string,
  ) $s = shape()) {
    $this->job_definition_name = $job_definition_name ?? ;
    $this->job_definitions = $job_definitions ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->status = $status ?? ;
  }
}

class DescribeJobDefinitionsResponse {
  public JobDefinitionList $job_definitions;
  public string $next_token;

  public function __construct(shape(
  ?'job_definitions' => JobDefinitionList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->job_definitions = $job_definitions ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeJobQueuesRequest {
  public StringList $job_queues;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'job_queues' => StringList,
  ?'max_results' => int,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->job_queues = $job_queues ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeJobQueuesResponse {
  public JobQueueDetailList $job_queues;
  public string $next_token;

  public function __construct(shape(
  ?'job_queues' => JobQueueDetailList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->job_queues = $job_queues ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeJobsRequest {
  public StringList $jobs;

  public function __construct(shape(
  ?'jobs' => StringList,
  ) $s = shape()) {
    $this->jobs = $jobs ?? ;
  }
}

class DescribeJobsResponse {
  public JobDetailList $jobs;

  public function __construct(shape(
  ?'jobs' => JobDetailList,
  ) $s = shape()) {
    $this->jobs = $jobs ?? ;
  }
}

class Device {
  public string $container_path;
  public string $host_path;
  public DeviceCgroupPermissions $permissions;

  public function __construct(shape(
  ?'container_path' => string,
  ?'host_path' => string,
  ?'permissions' => DeviceCgroupPermissions,
  ) $s = shape()) {
    $this->container_path = $container_path ?? ;
    $this->host_path = $host_path ?? ;
    $this->permissions = $permissions ?? ;
  }
}

type DeviceCgroupPermission = string;

type DeviceCgroupPermissions = vec<DeviceCgroupPermission>;

type DevicesList = vec<Device>;

type EnvironmentVariables = vec<KeyValuePair>;

class Host {
  public string $source_path;

  public function __construct(shape(
  ?'source_path' => string,
  ) $s = shape()) {
    $this->source_path = $source_path ?? ;
  }
}

type Integer = int;

type JQState = string;

type JQStatus = string;

class JobDefinition {
  public ContainerProperties $container_properties;
  public string $job_definition_arn;
  public string $job_definition_name;
  public NodeProperties $node_properties;
  public ParametersMap $parameters;
  public RetryStrategy $retry_strategy;
  public int $revision;
  public string $status;
  public JobTimeout $timeout;
  public string $type;

  public function __construct(shape(
  ?'container_properties' => ContainerProperties,
  ?'job_definition_arn' => string,
  ?'job_definition_name' => string,
  ?'node_properties' => NodeProperties,
  ?'parameters' => ParametersMap,
  ?'retry_strategy' => RetryStrategy,
  ?'revision' => int,
  ?'status' => string,
  ?'timeout' => JobTimeout,
  ?'type' => string,
  ) $s = shape()) {
    $this->container_properties = $container_properties ?? ;
    $this->job_definition_arn = $job_definition_arn ?? ;
    $this->job_definition_name = $job_definition_name ?? ;
    $this->node_properties = $node_properties ?? ;
    $this->parameters = $parameters ?? ;
    $this->retry_strategy = $retry_strategy ?? ;
    $this->revision = $revision ?? ;
    $this->status = $status ?? ;
    $this->timeout = $timeout ?? ;
    $this->type = $type ?? ;
  }
}

type JobDefinitionList = vec<JobDefinition>;

type JobDefinitionType = string;

class JobDependency {
  public string $job_id;
  public ArrayJobDependency $type;

  public function __construct(shape(
  ?'job_id' => string,
  ?'type' => ArrayJobDependency,
  ) $s = shape()) {
    $this->job_id = $job_id ?? ;
    $this->type = $type ?? ;
  }
}

type JobDependencyList = vec<JobDependency>;

class JobDetail {
  public ArrayPropertiesDetail $array_properties;
  public AttemptDetails $attempts;
  public ContainerDetail $container;
  public Long $created_at;
  public JobDependencyList $depends_on;
  public string $job_definition;
  public string $job_id;
  public string $job_name;
  public string $job_queue;
  public NodeDetails $node_details;
  public NodeProperties $node_properties;
  public ParametersMap $parameters;
  public RetryStrategy $retry_strategy;
  public Long $started_at;
  public JobStatus $status;
  public string $status_reason;
  public Long $stopped_at;
  public JobTimeout $timeout;

  public function __construct(shape(
  ?'array_properties' => ArrayPropertiesDetail,
  ?'attempts' => AttemptDetails,
  ?'container' => ContainerDetail,
  ?'created_at' => Long,
  ?'depends_on' => JobDependencyList,
  ?'job_definition' => string,
  ?'job_id' => string,
  ?'job_name' => string,
  ?'job_queue' => string,
  ?'node_details' => NodeDetails,
  ?'node_properties' => NodeProperties,
  ?'parameters' => ParametersMap,
  ?'retry_strategy' => RetryStrategy,
  ?'started_at' => Long,
  ?'status' => JobStatus,
  ?'status_reason' => string,
  ?'stopped_at' => Long,
  ?'timeout' => JobTimeout,
  ) $s = shape()) {
    $this->array_properties = $array_properties ?? ;
    $this->attempts = $attempts ?? ;
    $this->container = $container ?? ;
    $this->created_at = $created_at ?? ;
    $this->depends_on = $depends_on ?? ;
    $this->job_definition = $job_definition ?? ;
    $this->job_id = $job_id ?? ;
    $this->job_name = $job_name ?? ;
    $this->job_queue = $job_queue ?? ;
    $this->node_details = $node_details ?? ;
    $this->node_properties = $node_properties ?? ;
    $this->parameters = $parameters ?? ;
    $this->retry_strategy = $retry_strategy ?? ;
    $this->started_at = $started_at ?? ;
    $this->status = $status ?? ;
    $this->status_reason = $status_reason ?? ;
    $this->stopped_at = $stopped_at ?? ;
    $this->timeout = $timeout ?? ;
  }
}

type JobDetailList = vec<JobDetail>;

class JobQueueDetail {
  public ComputeEnvironmentOrders $compute_environment_order;
  public string $job_queue_arn;
  public string $job_queue_name;
  public int $priority;
  public JQState $state;
  public JQStatus $status;
  public string $status_reason;

  public function __construct(shape(
  ?'compute_environment_order' => ComputeEnvironmentOrders,
  ?'job_queue_arn' => string,
  ?'job_queue_name' => string,
  ?'priority' => int,
  ?'state' => JQState,
  ?'status' => JQStatus,
  ?'status_reason' => string,
  ) $s = shape()) {
    $this->compute_environment_order = $compute_environment_order ?? ;
    $this->job_queue_arn = $job_queue_arn ?? ;
    $this->job_queue_name = $job_queue_name ?? ;
    $this->priority = $priority ?? ;
    $this->state = $state ?? ;
    $this->status = $status ?? ;
    $this->status_reason = $status_reason ?? ;
  }
}

type JobQueueDetailList = vec<JobQueueDetail>;

type JobStatus = string;

class JobSummary {
  public ArrayPropertiesSummary $array_properties;
  public ContainerSummary $container;
  public Long $created_at;
  public string $job_id;
  public string $job_name;
  public NodePropertiesSummary $node_properties;
  public Long $started_at;
  public JobStatus $status;
  public string $status_reason;
  public Long $stopped_at;

  public function __construct(shape(
  ?'array_properties' => ArrayPropertiesSummary,
  ?'container' => ContainerSummary,
  ?'created_at' => Long,
  ?'job_id' => string,
  ?'job_name' => string,
  ?'node_properties' => NodePropertiesSummary,
  ?'started_at' => Long,
  ?'status' => JobStatus,
  ?'status_reason' => string,
  ?'stopped_at' => Long,
  ) $s = shape()) {
    $this->array_properties = $array_properties ?? ;
    $this->container = $container ?? ;
    $this->created_at = $created_at ?? ;
    $this->job_id = $job_id ?? ;
    $this->job_name = $job_name ?? ;
    $this->node_properties = $node_properties ?? ;
    $this->started_at = $started_at ?? ;
    $this->status = $status ?? ;
    $this->status_reason = $status_reason ?? ;
    $this->stopped_at = $stopped_at ?? ;
  }
}

type JobSummaryList = vec<JobSummary>;

class JobTimeout {
  public int $attempt_duration_seconds;

  public function __construct(shape(
  ?'attempt_duration_seconds' => int,
  ) $s = shape()) {
    $this->attempt_duration_seconds = $attempt_duration_seconds ?? ;
  }
}

class KeyValuePair {
  public string $name;
  public string $value;

  public function __construct(shape(
  ?'name' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->value = $value ?? ;
  }
}

class LaunchTemplateSpecification {
  public string $launch_template_id;
  public string $launch_template_name;
  public string $version;

  public function __construct(shape(
  ?'launch_template_id' => string,
  ?'launch_template_name' => string,
  ?'version' => string,
  ) $s = shape()) {
    $this->launch_template_id = $launch_template_id ?? ;
    $this->launch_template_name = $launch_template_name ?? ;
    $this->version = $version ?? ;
  }
}

class LinuxParameters {
  public DevicesList $devices;

  public function __construct(shape(
  ?'devices' => DevicesList,
  ) $s = shape()) {
    $this->devices = $devices ?? ;
  }
}

class ListJobsRequest {
  public string $array_job_id;
  public string $job_queue;
  public JobStatus $job_status;
  public int $max_results;
  public string $multi_node_job_id;
  public string $next_token;

  public function __construct(shape(
  ?'array_job_id' => string,
  ?'job_queue' => string,
  ?'job_status' => JobStatus,
  ?'max_results' => int,
  ?'multi_node_job_id' => string,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->array_job_id = $array_job_id ?? ;
    $this->job_queue = $job_queue ?? ;
    $this->job_status = $job_status ?? ;
    $this->max_results = $max_results ?? ;
    $this->multi_node_job_id = $multi_node_job_id ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListJobsResponse {
  public JobSummaryList $job_summary_list;
  public string $next_token;

  public function __construct(shape(
  ?'job_summary_list' => JobSummaryList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->job_summary_list = $job_summary_list ?? ;
    $this->next_token = $next_token ?? ;
  }
}

type Long = int;

class MountPoint {
  public string $container_path;
  public boolean $read_only;
  public string $source_volume;

  public function __construct(shape(
  ?'container_path' => string,
  ?'read_only' => boolean,
  ?'source_volume' => string,
  ) $s = shape()) {
    $this->container_path = $container_path ?? ;
    $this->read_only = $read_only ?? ;
    $this->source_volume = $source_volume ?? ;
  }
}

type MountPoints = vec<MountPoint>;

class NetworkInterface {
  public string $attachment_id;
  public string $ipv_6_address;
  public string $private_ipv_4_address;

  public function __construct(shape(
  ?'attachment_id' => string,
  ?'ipv_6_address' => string,
  ?'private_ipv_4_address' => string,
  ) $s = shape()) {
    $this->attachment_id = $attachment_id ?? ;
    $this->ipv_6_address = $ipv_6_address ?? ;
    $this->private_ipv_4_address = $private_ipv_4_address ?? ;
  }
}

type NetworkInterfaceList = vec<NetworkInterface>;

class NodeDetails {
  public boolean $is_main_node;
  public int $node_index;

  public function __construct(shape(
  ?'is_main_node' => boolean,
  ?'node_index' => int,
  ) $s = shape()) {
    $this->is_main_node = $is_main_node ?? ;
    $this->node_index = $node_index ?? ;
  }
}

class NodeOverrides {
  public NodePropertyOverrides $node_property_overrides;
  public int $num_nodes;

  public function __construct(shape(
  ?'node_property_overrides' => NodePropertyOverrides,
  ?'num_nodes' => int,
  ) $s = shape()) {
    $this->node_property_overrides = $node_property_overrides ?? ;
    $this->num_nodes = $num_nodes ?? ;
  }
}

class NodeProperties {
  public int $main_node;
  public NodeRangeProperties $node_range_properties;
  public int $num_nodes;

  public function __construct(shape(
  ?'main_node' => int,
  ?'node_range_properties' => NodeRangeProperties,
  ?'num_nodes' => int,
  ) $s = shape()) {
    $this->main_node = $main_node ?? ;
    $this->node_range_properties = $node_range_properties ?? ;
    $this->num_nodes = $num_nodes ?? ;
  }
}

class NodePropertiesSummary {
  public boolean $is_main_node;
  public int $node_index;
  public int $num_nodes;

  public function __construct(shape(
  ?'is_main_node' => boolean,
  ?'node_index' => int,
  ?'num_nodes' => int,
  ) $s = shape()) {
    $this->is_main_node = $is_main_node ?? ;
    $this->node_index = $node_index ?? ;
    $this->num_nodes = $num_nodes ?? ;
  }
}

class NodePropertyOverride {
  public ContainerOverrides $container_overrides;
  public string $target_nodes;

  public function __construct(shape(
  ?'container_overrides' => ContainerOverrides,
  ?'target_nodes' => string,
  ) $s = shape()) {
    $this->container_overrides = $container_overrides ?? ;
    $this->target_nodes = $target_nodes ?? ;
  }
}

type NodePropertyOverrides = vec<NodePropertyOverride>;

type NodeRangeProperties = vec<NodeRangeProperty>;

class NodeRangeProperty {
  public ContainerProperties $container;
  public string $target_nodes;

  public function __construct(shape(
  ?'container' => ContainerProperties,
  ?'target_nodes' => string,
  ) $s = shape()) {
    $this->container = $container ?? ;
    $this->target_nodes = $target_nodes ?? ;
  }
}

type ParametersMap = dict<String, String>;

class RegisterJobDefinitionRequest {
  public ContainerProperties $container_properties;
  public string $job_definition_name;
  public NodeProperties $node_properties;
  public ParametersMap $parameters;
  public RetryStrategy $retry_strategy;
  public JobTimeout $timeout;
  public JobDefinitionType $type;

  public function __construct(shape(
  ?'container_properties' => ContainerProperties,
  ?'job_definition_name' => string,
  ?'node_properties' => NodeProperties,
  ?'parameters' => ParametersMap,
  ?'retry_strategy' => RetryStrategy,
  ?'timeout' => JobTimeout,
  ?'type' => JobDefinitionType,
  ) $s = shape()) {
    $this->container_properties = $container_properties ?? ;
    $this->job_definition_name = $job_definition_name ?? ;
    $this->node_properties = $node_properties ?? ;
    $this->parameters = $parameters ?? ;
    $this->retry_strategy = $retry_strategy ?? ;
    $this->timeout = $timeout ?? ;
    $this->type = $type ?? ;
  }
}

class RegisterJobDefinitionResponse {
  public string $job_definition_arn;
  public string $job_definition_name;
  public int $revision;

  public function __construct(shape(
  ?'job_definition_arn' => string,
  ?'job_definition_name' => string,
  ?'revision' => int,
  ) $s = shape()) {
    $this->job_definition_arn = $job_definition_arn ?? ;
    $this->job_definition_name = $job_definition_name ?? ;
    $this->revision = $revision ?? ;
  }
}

class ResourceRequirement {
  public ResourceType $type;
  public string $value;

  public function __construct(shape(
  ?'type' => ResourceType,
  ?'value' => string,
  ) $s = shape()) {
    $this->type = $type ?? ;
    $this->value = $value ?? ;
  }
}

type ResourceRequirements = vec<ResourceRequirement>;

type ResourceType = string;

class RetryStrategy {
  public int $attempts;

  public function __construct(shape(
  ?'attempts' => int,
  ) $s = shape()) {
    $this->attempts = $attempts ?? ;
  }
}

class ServerException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type String = string;

type StringList = vec<String>;

class SubmitJobRequest {
  public ArrayProperties $array_properties;
  public ContainerOverrides $container_overrides;
  public JobDependencyList $depends_on;
  public string $job_definition;
  public string $job_name;
  public string $job_queue;
  public NodeOverrides $node_overrides;
  public ParametersMap $parameters;
  public RetryStrategy $retry_strategy;
  public JobTimeout $timeout;

  public function __construct(shape(
  ?'array_properties' => ArrayProperties,
  ?'container_overrides' => ContainerOverrides,
  ?'depends_on' => JobDependencyList,
  ?'job_definition' => string,
  ?'job_name' => string,
  ?'job_queue' => string,
  ?'node_overrides' => NodeOverrides,
  ?'parameters' => ParametersMap,
  ?'retry_strategy' => RetryStrategy,
  ?'timeout' => JobTimeout,
  ) $s = shape()) {
    $this->array_properties = $array_properties ?? ;
    $this->container_overrides = $container_overrides ?? ;
    $this->depends_on = $depends_on ?? ;
    $this->job_definition = $job_definition ?? ;
    $this->job_name = $job_name ?? ;
    $this->job_queue = $job_queue ?? ;
    $this->node_overrides = $node_overrides ?? ;
    $this->parameters = $parameters ?? ;
    $this->retry_strategy = $retry_strategy ?? ;
    $this->timeout = $timeout ?? ;
  }
}

class SubmitJobResponse {
  public string $job_id;
  public string $job_name;

  public function __construct(shape(
  ?'job_id' => string,
  ?'job_name' => string,
  ) $s = shape()) {
    $this->job_id = $job_id ?? ;
    $this->job_name = $job_name ?? ;
  }
}

type TagsMap = dict<String, String>;

class TerminateJobRequest {
  public string $job_id;
  public string $reason;

  public function __construct(shape(
  ?'job_id' => string,
  ?'reason' => string,
  ) $s = shape()) {
    $this->job_id = $job_id ?? ;
    $this->reason = $reason ?? ;
  }
}

class TerminateJobResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Ulimit {
  public int $hard_limit;
  public string $name;
  public int $soft_limit;

  public function __construct(shape(
  ?'hard_limit' => int,
  ?'name' => string,
  ?'soft_limit' => int,
  ) $s = shape()) {
    $this->hard_limit = $hard_limit ?? ;
    $this->name = $name ?? ;
    $this->soft_limit = $soft_limit ?? ;
  }
}

type Ulimits = vec<Ulimit>;

class UpdateComputeEnvironmentRequest {
  public string $compute_environment;
  public ComputeResourceUpdate $compute_resources;
  public string $service_role;
  public CEState $state;

  public function __construct(shape(
  ?'compute_environment' => string,
  ?'compute_resources' => ComputeResourceUpdate,
  ?'service_role' => string,
  ?'state' => CEState,
  ) $s = shape()) {
    $this->compute_environment = $compute_environment ?? ;
    $this->compute_resources = $compute_resources ?? ;
    $this->service_role = $service_role ?? ;
    $this->state = $state ?? ;
  }
}

class UpdateComputeEnvironmentResponse {
  public string $compute_environment_arn;
  public string $compute_environment_name;

  public function __construct(shape(
  ?'compute_environment_arn' => string,
  ?'compute_environment_name' => string,
  ) $s = shape()) {
    $this->compute_environment_arn = $compute_environment_arn ?? ;
    $this->compute_environment_name = $compute_environment_name ?? ;
  }
}

class UpdateJobQueueRequest {
  public ComputeEnvironmentOrders $compute_environment_order;
  public string $job_queue;
  public int $priority;
  public JQState $state;

  public function __construct(shape(
  ?'compute_environment_order' => ComputeEnvironmentOrders,
  ?'job_queue' => string,
  ?'priority' => int,
  ?'state' => JQState,
  ) $s = shape()) {
    $this->compute_environment_order = $compute_environment_order ?? ;
    $this->job_queue = $job_queue ?? ;
    $this->priority = $priority ?? ;
    $this->state = $state ?? ;
  }
}

class UpdateJobQueueResponse {
  public string $job_queue_arn;
  public string $job_queue_name;

  public function __construct(shape(
  ?'job_queue_arn' => string,
  ?'job_queue_name' => string,
  ) $s = shape()) {
    $this->job_queue_arn = $job_queue_arn ?? ;
    $this->job_queue_name = $job_queue_name ?? ;
  }
}

class Volume {
  public Host $host;
  public string $name;

  public function __construct(shape(
  ?'host' => Host,
  ?'name' => string,
  ) $s = shape()) {
    $this->host = $host ?? ;
    $this->name = $name ?? ;
  }
}

type Volumes = vec<Volume>;

