<?hh // strict
namespace slack\aws\batch;

interface Batch {
  public function CreateComputeEnvironment(CreateComputeEnvironmentRequest) Awaitable<Errors\Result<CreateComputeEnvironmentResponse>>;
  public function DeregisterJobDefinition(DeregisterJobDefinitionRequest) Awaitable<Errors\Result<DeregisterJobDefinitionResponse>>;
  public function ListJobs(ListJobsRequest) Awaitable<Errors\Result<ListJobsResponse>>;
  public function TerminateJob(TerminateJobRequest) Awaitable<Errors\Result<TerminateJobResponse>>;
  public function CancelJob(CancelJobRequest) Awaitable<Errors\Result<CancelJobResponse>>;
  public function DescribeJobDefinitions(DescribeJobDefinitionsRequest) Awaitable<Errors\Result<DescribeJobDefinitionsResponse>>;
  public function DescribeJobs(DescribeJobsRequest) Awaitable<Errors\Result<DescribeJobsResponse>>;
  public function SubmitJob(SubmitJobRequest) Awaitable<Errors\Result<SubmitJobResponse>>;
  public function DescribeComputeEnvironments(DescribeComputeEnvironmentsRequest) Awaitable<Errors\Result<DescribeComputeEnvironmentsResponse>>;
  public function DescribeJobQueues(DescribeJobQueuesRequest) Awaitable<Errors\Result<DescribeJobQueuesResponse>>;
  public function RegisterJobDefinition(RegisterJobDefinitionRequest) Awaitable<Errors\Result<RegisterJobDefinitionResponse>>;
  public function UpdateComputeEnvironment(UpdateComputeEnvironmentRequest) Awaitable<Errors\Result<UpdateComputeEnvironmentResponse>>;
  public function CreateJobQueue(CreateJobQueueRequest) Awaitable<Errors\Result<CreateJobQueueResponse>>;
  public function DeleteComputeEnvironment(DeleteComputeEnvironmentRequest) Awaitable<Errors\Result<DeleteComputeEnvironmentResponse>>;
  public function DeleteJobQueue(DeleteJobQueueRequest) Awaitable<Errors\Result<DeleteJobQueueResponse>>;
  public function UpdateJobQueue(UpdateJobQueueRequest) Awaitable<Errors\Result<UpdateJobQueueResponse>>;
}

class ArrayJobStatusSummary {
}

class JobDependencyList {
}

class ComputeResourceUpdate {
  public int $minv_cpus;
  public int $maxv_cpus;
  public int $desiredv_cpus;
}

class DeleteJobQueueResponse {
}

class ComputeEnvironmentOrder {
  public int $order;
  public string $compute_environment;
}

class EnvironmentVariables {
}

class JobTimeout {
  public int $attempt_duration_seconds;
}

class RegisterJobDefinitionResponse {
  public string $job_definition_name;
  public string $job_definition_arn;
  public int $revision;
}

class TerminateJobResponse {
}

class UpdateComputeEnvironmentResponse {
  public string $compute_environment_name;
  public string $compute_environment_arn;
}

class ContainerProperties {
  public string $job_role_arn;
  public MountPoints $mount_points;
  public boolean $privileged;
  public Ulimits $ulimits;
  public int $memory;
  public StringList $command;
  public int $vcpus;
  public Volumes $volumes;
  public EnvironmentVariables $environment;
  public string $image;
  public boolean $readonly_root_filesystem;
  public string $user;
  public string $instance_type;
  public ResourceRequirements $resource_requirements;
  public LinuxParameters $linux_parameters;
}

class DescribeJobDefinitionsRequest {
  public string $status;
  public string $next_token;
  public StringList $job_definitions;
  public int $max_results;
  public string $job_definition_name;
}

class JobStatus {
}

class KeyValuePair {
  public string $name;
  public string $value;
}

class LaunchTemplateSpecification {
  public string $version;
  public string $launch_template_id;
  public string $launch_template_name;
}

class RegisterJobDefinitionRequest {
  public JobDefinitionType $type;
  public ParametersMap $parameters;
  public ContainerProperties $container_properties;
  public NodeProperties $node_properties;
  public RetryStrategy $retry_strategy;
  public JobTimeout $timeout;
  public string $job_definition_name;
}

class RetryStrategy {
  public int $attempts;
}

class UpdateJobQueueRequest {
  public ComputeEnvironmentOrders $compute_environment_order;
  public string $job_queue;
  public JQState $state;
  public int $priority;
}

class AttemptContainerDetail {
  public string $task_arn;
  public int $exit_code;
  public string $reason;
  public string $log_stream_name;
  public NetworkInterfaceList $network_interfaces;
  public string $container_instance_arn;
}

class NodePropertyOverrides {
}

class ResourceRequirement {
  public string $value;
  public ResourceType $type;
}

class DescribeComputeEnvironmentsResponse {
  public string $next_token;
  public ComputeEnvironmentDetailList $compute_environments;
}

class JobDependency {
  public string $job_id;
  public ArrayJobDependency $type;
}

class JobDetailList {
}

class DeregisterJobDefinitionRequest {
  public string $job_definition;
}

class SubmitJobResponse {
  public string $job_name;
  public string $job_id;
}

class ArrayPropertiesSummary {
  public int $size;
  public int $index;
}

class ListJobsResponse {
  public JobSummaryList $job_summary_list;
  public string $next_token;
}

class DeleteJobQueueRequest {
  public string $job_queue;
}

class ParametersMap {
}

class JQStatus {
}

class JobQueueDetail {
  public string $job_queue_name;
  public string $job_queue_arn;
  public JQState $state;
  public JQStatus $status;
  public string $status_reason;
  public int $priority;
  public ComputeEnvironmentOrders $compute_environment_order;
}

class TerminateJobRequest {
  public string $job_id;
  public string $reason;
}

class JQState {
}

class DeviceCgroupPermission {
}

class ResourceType {
}

class ArrayProperties {
  public int $size;
}

class DeregisterJobDefinitionResponse {
}

class LinuxParameters {
  public DevicesList $devices;
}

class MountPoint {
  public string $container_path;
  public boolean $read_only;
  public string $source_volume;
}

class ArrayJobDependency {
}

class ComputeEnvironmentOrders {
}

class JobSummary {
  public NodePropertiesSummary $node_properties;
  public string $job_id;
  public string $job_name;
  public Long $created_at;
  public Long $started_at;
  public Long $stopped_at;
  public ContainerSummary $container;
  public JobStatus $status;
  public string $status_reason;
  public ArrayPropertiesSummary $array_properties;
}

class DeleteComputeEnvironmentRequest {
  public string $compute_environment;
}

class Ulimit {
  public int $hard_limit;
  public string $name;
  public int $soft_limit;
}

class AttemptDetails {
}

class CRAllocationStrategy {
}

class ResourceRequirements {
}

class ComputeResource {
  public LaunchTemplateSpecification $launch_template;
  public StringList $security_group_ids;
  public string $ec_2_key_pair;
  public string $placement_group;
  public int $minv_cpus;
  public int $desiredv_cpus;
  public StringList $instance_types;
  public StringList $subnets;
  public string $instance_role;
  public TagsMap $tags;
  public CRType $type;
  public CRAllocationStrategy $allocation_strategy;
  public string $spot_iam_fleet_role;
  public int $bid_percentage;
  public int $maxv_cpus;
  public string $image_id;
}

class NodeOverrides {
  public NodePropertyOverrides $node_property_overrides;
  public int $num_nodes;
}

class CreateJobQueueRequest {
  public string $job_queue_name;
  public JQState $state;
  public int $priority;
  public ComputeEnvironmentOrders $compute_environment_order;
}

class UpdateJobQueueResponse {
  public string $job_queue_name;
  public string $job_queue_arn;
}

class DescribeJobQueuesResponse {
  public JobQueueDetailList $job_queues;
  public string $next_token;
}

class DeviceCgroupPermissions {
}

class MountPoints {
}

class String {
}

class JobDefinitionType {
}

class CEStatus {
}

class CEType {
}

class CreateComputeEnvironmentResponse {
  public string $compute_environment_name;
  public string $compute_environment_arn;
}

class Host {
  public string $source_path;
}

class CEState {
}

class DescribeJobQueuesRequest {
  public int $max_results;
  public string $next_token;
  public StringList $job_queues;
}

class ListJobsRequest {
  public string $job_queue;
  public string $array_job_id;
  public string $multi_node_job_id;
  public JobStatus $job_status;
  public int $max_results;
  public string $next_token;
}

class UpdateComputeEnvironmentRequest {
  public string $service_role;
  public string $compute_environment;
  public CEState $state;
  public ComputeResourceUpdate $compute_resources;
}

class DescribeComputeEnvironmentsRequest {
  public StringList $compute_environments;
  public int $max_results;
  public string $next_token;
}

class DescribeJobDefinitionsResponse {
  public JobDefinitionList $job_definitions;
  public string $next_token;
}

class JobDetail {
  public Long $stopped_at;
  public ParametersMap $parameters;
  public JobTimeout $timeout;
  public Long $created_at;
  public RetryStrategy $retry_strategy;
  public AttemptDetails $attempts;
  public ContainerDetail $container;
  public NodeDetails $node_details;
  public string $job_id;
  public string $job_queue;
  public string $status_reason;
  public string $job_name;
  public JobStatus $status;
  public string $job_definition;
  public NodeProperties $node_properties;
  public ArrayPropertiesDetail $array_properties;
  public Long $started_at;
  public JobDependencyList $depends_on;
}

class NodeProperties {
  public NodeRangeProperties $node_range_properties;
  public int $num_nodes;
  public int $main_node;
}

class DescribeJobsResponse {
  public JobDetailList $jobs;
}

class JobDefinition {
  public ParametersMap $parameters;
  public RetryStrategy $retry_strategy;
  public ContainerProperties $container_properties;
  public string $job_definition_name;
  public string $job_definition_arn;
  public string $type;
  public JobTimeout $timeout;
  public NodeProperties $node_properties;
  public int $revision;
  public string $status;
}

class ServerException {
  public string $message;
}

class Volumes {
}

class ArrayPropertiesDetail {
  public ArrayJobStatusSummary $status_summary;
  public int $size;
  public int $index;
}

class CRType {
}

class CreateJobQueueResponse {
  public string $job_queue_name;
  public string $job_queue_arn;
}

class NodePropertiesSummary {
  public boolean $is_main_node;
  public int $num_nodes;
  public int $node_index;
}

class NetworkInterface {
  public string $attachment_id;
  public string $ipv_6_address;
  public string $private_ipv_4_address;
}

class Volume {
  public Host $host;
  public string $name;
}

class ContainerOverrides {
  public string $instance_type;
  public EnvironmentVariables $environment;
  public ResourceRequirements $resource_requirements;
  public int $vcpus;
  public int $memory;
  public StringList $command;
}

class NetworkInterfaceList {
}

class AttemptDetail {
  public AttemptContainerDetail $container;
  public Long $started_at;
  public Long $stopped_at;
  public string $status_reason;
}

class ComputeEnvironmentDetail {
  public string $compute_environment_arn;
  public CEType $type;
  public ComputeResource $compute_resources;
  public string $status_reason;
  public string $service_role;
  public string $compute_environment_name;
  public string $ecs_cluster_arn;
  public CEState $state;
  public CEStatus $status;
}

class ContainerDetail {
  public string $image;
  public EnvironmentVariables $environment;
  public boolean $readonly_root_filesystem;
  public boolean $privileged;
  public string $instance_type;
  public ResourceRequirements $resource_requirements;
  public int $vcpus;
  public MountPoints $mount_points;
  public Ulimits $ulimits;
  public int $exit_code;
  public string $log_stream_name;
  public int $memory;
  public StringList $command;
  public string $user;
  public string $container_instance_arn;
  public string $task_arn;
  public NetworkInterfaceList $network_interfaces;
  public LinuxParameters $linux_parameters;
  public string $job_role_arn;
  public Volumes $volumes;
  public string $reason;
}

class JobSummaryList {
}

class NodeRangeProperties {
}

class Ulimits {
}

class CancelJobResponse {
}

class CreateComputeEnvironmentRequest {
  public string $compute_environment_name;
  public CEType $type;
  public CEState $state;
  public ComputeResource $compute_resources;
  public string $service_role;
}

class JobQueueDetailList {
}

class NodePropertyOverride {
  public string $target_nodes;
  public ContainerOverrides $container_overrides;
}

class CancelJobRequest {
  public string $reason;
  public string $job_id;
}

class ContainerSummary {
  public int $exit_code;
  public string $reason;
}

class NodeRangeProperty {
  public string $target_nodes;
  public ContainerProperties $container;
}

class SubmitJobRequest {
  public JobDependencyList $depends_on;
  public ContainerOverrides $container_overrides;
  public string $job_name;
  public ArrayProperties $array_properties;
  public ParametersMap $parameters;
  public NodeOverrides $node_overrides;
  public RetryStrategy $retry_strategy;
  public JobTimeout $timeout;
  public string $job_queue;
  public string $job_definition;
}

class Device {
  public string $host_path;
  public string $container_path;
  public DeviceCgroupPermissions $permissions;
}

class Integer {
}

class NodeDetails {
  public int $node_index;
  public boolean $is_main_node;
}

class JobDefinitionList {
}

class StringList {
}

class DeleteComputeEnvironmentResponse {
}

class DescribeJobsRequest {
  public StringList $jobs;
}

class TagsMap {
}

class Long {
}

class DevicesList {
}

class ComputeEnvironmentDetailList {
}

class Boolean {
}

class ClientException {
  public string $message;
}

