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

class ArrayJobDependency {
}

class ArrayJobStatusSummary {
}

class ArrayProperties {
  public int $size;
}

class ArrayPropertiesDetail {
  public int $index;
  public int $size;
  public ArrayJobStatusSummary $status_summary;
}

class ArrayPropertiesSummary {
  public int $index;
  public int $size;
}

class AttemptContainerDetail {
  public string $container_instance_arn;
  public int $exit_code;
  public string $log_stream_name;
  public NetworkInterfaceList $network_interfaces;
  public string $reason;
  public string $task_arn;
}

class AttemptDetail {
  public AttemptContainerDetail $container;
  public Long $started_at;
  public string $status_reason;
  public Long $stopped_at;
}

class AttemptDetails {
}

class Boolean {
}

class CEState {
}

class CEStatus {
}

class CEType {
}

class CRAllocationStrategy {
}

class CRType {
}

class CancelJobRequest {
  public string $job_id;
  public string $reason;
}

class CancelJobResponse {
}

class ClientException {
  public string $message;
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
}

class ComputeEnvironmentDetailList {
}

class ComputeEnvironmentOrder {
  public string $compute_environment;
  public int $order;
}

class ComputeEnvironmentOrders {
}

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
}

class ComputeResourceUpdate {
  public int $desiredv_cpus;
  public int $maxv_cpus;
  public int $minv_cpus;
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
}

class ContainerOverrides {
  public StringList $command;
  public EnvironmentVariables $environment;
  public string $instance_type;
  public int $memory;
  public ResourceRequirements $resource_requirements;
  public int $vcpus;
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
}

class ContainerSummary {
  public int $exit_code;
  public string $reason;
}

class CreateComputeEnvironmentRequest {
  public string $compute_environment_name;
  public ComputeResource $compute_resources;
  public string $service_role;
  public CEState $state;
  public CEType $type;
}

class CreateComputeEnvironmentResponse {
  public string $compute_environment_arn;
  public string $compute_environment_name;
}

class CreateJobQueueRequest {
  public ComputeEnvironmentOrders $compute_environment_order;
  public string $job_queue_name;
  public int $priority;
  public JQState $state;
}

class CreateJobQueueResponse {
  public string $job_queue_arn;
  public string $job_queue_name;
}

class DeleteComputeEnvironmentRequest {
  public string $compute_environment;
}

class DeleteComputeEnvironmentResponse {
}

class DeleteJobQueueRequest {
  public string $job_queue;
}

class DeleteJobQueueResponse {
}

class DeregisterJobDefinitionRequest {
  public string $job_definition;
}

class DeregisterJobDefinitionResponse {
}

class DescribeComputeEnvironmentsRequest {
  public StringList $compute_environments;
  public int $max_results;
  public string $next_token;
}

class DescribeComputeEnvironmentsResponse {
  public ComputeEnvironmentDetailList $compute_environments;
  public string $next_token;
}

class DescribeJobDefinitionsRequest {
  public string $job_definition_name;
  public StringList $job_definitions;
  public int $max_results;
  public string $next_token;
  public string $status;
}

class DescribeJobDefinitionsResponse {
  public JobDefinitionList $job_definitions;
  public string $next_token;
}

class DescribeJobQueuesRequest {
  public StringList $job_queues;
  public int $max_results;
  public string $next_token;
}

class DescribeJobQueuesResponse {
  public JobQueueDetailList $job_queues;
  public string $next_token;
}

class DescribeJobsRequest {
  public StringList $jobs;
}

class DescribeJobsResponse {
  public JobDetailList $jobs;
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

class EnvironmentVariables {
}

class Host {
  public string $source_path;
}

class Integer {
}

class JQState {
}

class JQStatus {
}

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
}

class JobDefinitionList {
}

class JobDefinitionType {
}

class JobDependency {
  public string $job_id;
  public ArrayJobDependency $type;
}

class JobDependencyList {
}

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
}

class JobDetailList {
}

class JobQueueDetail {
  public ComputeEnvironmentOrders $compute_environment_order;
  public string $job_queue_arn;
  public string $job_queue_name;
  public int $priority;
  public JQState $state;
  public JQStatus $status;
  public string $status_reason;
}

class JobQueueDetailList {
}

class JobStatus {
}

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
}

class JobSummaryList {
}

class JobTimeout {
  public int $attempt_duration_seconds;
}

class KeyValuePair {
  public string $name;
  public string $value;
}

class LaunchTemplateSpecification {
  public string $launch_template_id;
  public string $launch_template_name;
  public string $version;
}

class LinuxParameters {
  public DevicesList $devices;
}

class ListJobsRequest {
  public string $array_job_id;
  public string $job_queue;
  public JobStatus $job_status;
  public int $max_results;
  public string $multi_node_job_id;
  public string $next_token;
}

class ListJobsResponse {
  public JobSummaryList $job_summary_list;
  public string $next_token;
}

class Long {
}

class MountPoint {
  public string $container_path;
  public boolean $read_only;
  public string $source_volume;
}

class MountPoints {
}

class NetworkInterface {
  public string $attachment_id;
  public string $ipv_6_address;
  public string $private_ipv_4_address;
}

class NetworkInterfaceList {
}

class NodeDetails {
  public boolean $is_main_node;
  public int $node_index;
}

class NodeOverrides {
  public NodePropertyOverrides $node_property_overrides;
  public int $num_nodes;
}

class NodeProperties {
  public int $main_node;
  public NodeRangeProperties $node_range_properties;
  public int $num_nodes;
}

class NodePropertiesSummary {
  public boolean $is_main_node;
  public int $node_index;
  public int $num_nodes;
}

class NodePropertyOverride {
  public ContainerOverrides $container_overrides;
  public string $target_nodes;
}

class NodePropertyOverrides {
}

class NodeRangeProperties {
}

class NodeRangeProperty {
  public ContainerProperties $container;
  public string $target_nodes;
}

class ParametersMap {
}

class RegisterJobDefinitionRequest {
  public ContainerProperties $container_properties;
  public string $job_definition_name;
  public NodeProperties $node_properties;
  public ParametersMap $parameters;
  public RetryStrategy $retry_strategy;
  public JobTimeout $timeout;
  public JobDefinitionType $type;
}

class RegisterJobDefinitionResponse {
  public string $job_definition_arn;
  public string $job_definition_name;
  public int $revision;
}

class ResourceRequirement {
  public ResourceType $type;
  public string $value;
}

class ResourceRequirements {
}

class ResourceType {
}

class RetryStrategy {
  public int $attempts;
}

class ServerException {
  public string $message;
}

class String {
}

class StringList {
}

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
}

class SubmitJobResponse {
  public string $job_id;
  public string $job_name;
}

class TagsMap {
}

class TerminateJobRequest {
  public string $job_id;
  public string $reason;
}

class TerminateJobResponse {
}

class Ulimit {
  public int $hard_limit;
  public string $name;
  public int $soft_limit;
}

class Ulimits {
}

class UpdateComputeEnvironmentRequest {
  public string $compute_environment;
  public ComputeResourceUpdate $compute_resources;
  public string $service_role;
  public CEState $state;
}

class UpdateComputeEnvironmentResponse {
  public string $compute_environment_arn;
  public string $compute_environment_name;
}

class UpdateJobQueueRequest {
  public ComputeEnvironmentOrders $compute_environment_order;
  public string $job_queue;
  public int $priority;
  public JQState $state;
}

class UpdateJobQueueResponse {
  public string $job_queue_arn;
  public string $job_queue_name;
}

class Volume {
  public Host $host;
  public string $name;
}

class Volumes {
}

