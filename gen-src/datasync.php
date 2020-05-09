<?hh // strict
namespace slack\aws\datasync;

interface DataSync {
  public function DeleteLocation(DeleteLocationRequest) Awaitable<Errors\Result<DeleteLocationResponse>>;
  public function DescribeLocationS3(DescribeLocationS3Request) Awaitable<Errors\Result<DescribeLocationS3Response>>;
  public function ListAgents(ListAgentsRequest) Awaitable<Errors\Result<ListAgentsResponse>>;
  public function ListTaskExecutions(ListTaskExecutionsRequest) Awaitable<Errors\Result<ListTaskExecutionsResponse>>;
  public function CancelTaskExecution(CancelTaskExecutionRequest) Awaitable<Errors\Result<CancelTaskExecutionResponse>>;
  public function CreateLocationNfs(CreateLocationNfsRequest) Awaitable<Errors\Result<CreateLocationNfsResponse>>;
  public function CreateTask(CreateTaskRequest) Awaitable<Errors\Result<CreateTaskResponse>>;
  public function DescribeLocationEfs(DescribeLocationEfsRequest) Awaitable<Errors\Result<DescribeLocationEfsResponse>>;
  public function DescribeLocationNfs(DescribeLocationNfsRequest) Awaitable<Errors\Result<DescribeLocationNfsResponse>>;
  public function ListTasks(ListTasksRequest) Awaitable<Errors\Result<ListTasksResponse>>;
  public function ListLocations(ListLocationsRequest) Awaitable<Errors\Result<ListLocationsResponse>>;
  public function CreateLocationFsxWindows(CreateLocationFsxWindowsRequest) Awaitable<Errors\Result<CreateLocationFsxWindowsResponse>>;
  public function DescribeLocationSmb(DescribeLocationSmbRequest) Awaitable<Errors\Result<DescribeLocationSmbResponse>>;
  public function StartTaskExecution(StartTaskExecutionRequest) Awaitable<Errors\Result<StartTaskExecutionResponse>>;
  public function CreateAgent(CreateAgentRequest) Awaitable<Errors\Result<CreateAgentResponse>>;
  public function CreateLocationS3(CreateLocationS3Request) Awaitable<Errors\Result<CreateLocationS3Response>>;
  public function DescribeTask(DescribeTaskRequest) Awaitable<Errors\Result<DescribeTaskResponse>>;
  public function DescribeTaskExecution(DescribeTaskExecutionRequest) Awaitable<Errors\Result<DescribeTaskExecutionResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function DescribeAgent(DescribeAgentRequest) Awaitable<Errors\Result<DescribeAgentResponse>>;
  public function DescribeLocationFsxWindows(DescribeLocationFsxWindowsRequest) Awaitable<Errors\Result<DescribeLocationFsxWindowsResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateAgent(UpdateAgentRequest) Awaitable<Errors\Result<UpdateAgentResponse>>;
  public function UpdateTask(UpdateTaskRequest) Awaitable<Errors\Result<UpdateTaskResponse>>;
  public function DeleteTask(DeleteTaskRequest) Awaitable<Errors\Result<DeleteTaskResponse>>;
  public function CreateLocationEfs(CreateLocationEfsRequest) Awaitable<Errors\Result<CreateLocationEfsResponse>>;
  public function CreateLocationSmb(CreateLocationSmbRequest) Awaitable<Errors\Result<CreateLocationSmbResponse>>;
  public function DeleteAgent(DeleteAgentRequest) Awaitable<Errors\Result<DeleteAgentResponse>>;
}

class PhaseStatus {
}

class PreserveDeletedFiles {
}

class TaskExecutionListEntry {
  public TaskExecutionArn $task_execution_arn;
  public TaskExecutionStatus $status;
}

class DescribeLocationNfsRequest {
  public LocationArn $location_arn;
}

class FsxWindowsSubdirectory {
}

class Gid {
}

class NfsMountOptions {
  public NfsVersion $version;
}

class PLSecurityGroupArnList {
}

class TaskSchedule {
  public ScheduleExpressionCron $schedule_expression;
}

class S3StorageClass {
}

class SourceNetworkInterfaceArns {
}

class AgentStatus {
}

class CreateLocationFsxWindowsResponse {
  public LocationArn $location_arn;
}

class DescribeLocationSmbResponse {
  public LocationArn $location_arn;
  public LocationUri $location_uri;
  public AgentArnList $agent_arns;
  public SmbUser $user;
  public SmbDomain $domain;
  public SmbMountOptions $mount_options;
  public Time $creation_time;
}

class InvalidRequestException {
  public string $message;
  public string $error_code;
}

class ListTaskExecutionsResponse {
  public TaskExecutionList $task_executions;
  public NextToken $next_token;
}

class AgentArnList {
}

class DescribeLocationS3Response {
  public Time $creation_time;
  public LocationArn $location_arn;
  public LocationUri $location_uri;
  public S3StorageClass $s_3_storage_class;
  public S3Config $s_3_config;
}

class Duration {
}

class LocationArn {
}

class ServerHostname {
}

class Atime {
}

class TagKeyList {
}

class Time {
}

class DescribeTaskExecutionRequest {
  public TaskExecutionArn $task_execution_arn;
}

class TagKey {
}

class UpdateTaskRequest {
  public LogGroupArn $cloud_watch_log_group_arn;
  public TaskArn $task_arn;
  public Options $options;
  public FilterList $excludes;
  public TaskSchedule $schedule;
  public TagValue $name;
}

class CancelTaskExecutionRequest {
  public TaskExecutionArn $task_execution_arn;
}

class CreateLocationNfsResponse {
  public LocationArn $location_arn;
}

class Ec2Config {
  public Ec2SubnetArn $subnet_arn;
  public Ec2SecurityGroupArnList $security_group_arns;
}

class LocationList {
}

class SmbUser {
}

class PreserveDevices {
}

class SmbPassword {
}

class string {
}

class AgentList {
}

class CreateLocationEfsResponse {
  public LocationArn $location_arn;
}

class CreateLocationS3Response {
  public LocationArn $location_arn;
}

class DeleteAgentResponse {
}

class EndpointType {
}

class LocationListEntry {
  public LocationArn $location_arn;
  public LocationUri $location_uri;
}

class NetworkInterfaceArn {
}

class TaskList {
}

class TaskExecutionStatus {
}

class CreateAgentRequest {
  public ActivationKey $activation_key;
  public TagValue $agent_name;
  public TagList $tags;
  public VpcEndpointId $vpc_endpoint_id;
  public PLSubnetArnList $subnet_arns;
  public PLSecurityGroupArnList $security_group_arns;
}

class CreateLocationSmbRequest {
  public SmbMountOptions $mount_options;
  public TagList $tags;
  public SmbSubdirectory $subdirectory;
  public ServerHostname $server_hostname;
  public SmbUser $user;
  public SmbDomain $domain;
  public SmbPassword $password;
  public AgentArnList $agent_arns;
}

class Mtime {
}

class StartTaskExecutionRequest {
  public TaskArn $task_arn;
  public Options $override_options;
  public FilterList $includes;
}

class TagListEntry {
  public TagKey $key;
  public TagValue $value;
}

class TaskExecutionResultDetail {
  public Duration $total_duration;
  public PhaseStatus $transfer_status;
  public PhaseStatus $verify_status;
  public Duration $prepare_duration;
  public PhaseStatus $prepare_status;
  public string $error_code;
  public string $error_detail;
  public Duration $transfer_duration;
  public Duration $verify_duration;
}

class TaskStatus {
}

class CancelTaskExecutionResponse {
}

class CreateAgentResponse {
  public AgentArn $agent_arn;
}

class CreateLocationFsxWindowsRequest {
  public FsxFilesystemArn $fsx_filesystem_arn;
  public Ec2SecurityGroupArnList $security_group_arns;
  public TagList $tags;
  public SmbUser $user;
  public SmbDomain $domain;
  public SmbPassword $password;
  public FsxWindowsSubdirectory $subdirectory;
}

class OnPremConfig {
  public AgentArnList $agent_arns;
}

class DescribeLocationSmbRequest {
  public LocationArn $location_arn;
}

class Ec2SecurityGroupArnList {
}

class S3Subdirectory {
}

class UpdateAgentRequest {
  public AgentArn $agent_arn;
  public TagValue $name;
}

class VerifyMode {
}

class DescribeLocationS3Request {
  public LocationArn $location_arn;
}

class FilterRule {
  public FilterType $filter_type;
  public FilterValue $value;
}

class TagValue {
}

class TaskArn {
}

class UntagResourceRequest {
  public TaggableResourceArn $resource_arn;
  public TagKeyList $keys;
}

class DescribeAgentRequest {
  public AgentArn $agent_arn;
}

class NextToken {
}

class NfsVersion {
}

class SmbMountOptions {
  public SmbVersion $version;
}

class UpdateAgentResponse {
}

class ActivationKey {
}

class CreateLocationNfsRequest {
  public NfsSubdirectory $subdirectory;
  public ServerHostname $server_hostname;
  public OnPremConfig $on_prem_config;
  public NfsMountOptions $mount_options;
  public TagList $tags;
}

class SmbVersion {
}

class VpcEndpointId {
}

class S3Config {
  public IamRoleArn $bucket_access_role_arn;
}

class CreateLocationEfsRequest {
  public EfsSubdirectory $subdirectory;
  public EfsFilesystemArn $efs_filesystem_arn;
  public Ec2Config $ec_2_config;
  public TagList $tags;
}

class CreateTaskRequest {
  public TaskSchedule $schedule;
  public TagList $tags;
  public LocationArn $source_location_arn;
  public LocationArn $destination_location_arn;
  public LogGroupArn $cloud_watch_log_group_arn;
  public TagValue $name;
  public Options $options;
  public FilterList $excludes;
}

class DeleteLocationResponse {
}

class ListLocationsResponse {
  public LocationList $locations;
  public NextToken $next_token;
}

class ListTaskExecutionsRequest {
  public TaskArn $task_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class BytesPerSecond {
}

class DescribeTaskExecutionResponse {
  public long $estimated_files_to_transfer;
  public long $files_transferred;
  public long $bytes_transferred;
  public TaskExecutionStatus $status;
  public Options $options;
  public FilterList $excludes;
  public FilterList $includes;
  public Time $start_time;
  public TaskExecutionArn $task_execution_arn;
  public long $estimated_bytes_to_transfer;
  public long $bytes_written;
  public TaskExecutionResultDetail $result;
}

class NfsSubdirectory {
}

class ScheduleExpressionCron {
}

class TagResourceResponse {
}

class DeleteLocationRequest {
  public LocationArn $location_arn;
}

class DeleteTaskRequest {
  public TaskArn $task_arn;
}

class DescribeLocationFsxWindowsRequest {
  public LocationArn $location_arn;
}

class FilterList {
}

class Ec2SecurityGroupArn {
}

class long {
}

class DeleteAgentRequest {
  public AgentArn $agent_arn;
}

class Endpoint {
}

class ListTasksRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class OverwriteMode {
}

class TaskExecutionArn {
}

class TaskListEntry {
  public TaskArn $task_arn;
  public TaskStatus $status;
  public TagValue $name;
}

class AgentArn {
}

class CreateLocationS3Request {
  public S3Subdirectory $subdirectory;
  public S3BucketArn $s_3_bucket_arn;
  public S3StorageClass $s_3_storage_class;
  public S3Config $s_3_config;
  public TagList $tags;
}

class DescribeAgentResponse {
  public PrivateLinkConfig $private_link_config;
  public AgentArn $agent_arn;
  public TagValue $name;
  public AgentStatus $status;
  public Time $last_connection_time;
  public Time $creation_time;
  public EndpointType $endpoint_type;
}

class IamRoleArn {
}

class ListTagsForResourceRequest {
  public TaggableResourceArn $resource_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class TagList {
}

class CreateTaskResponse {
  public TaskArn $task_arn;
}

class DescribeLocationNfsResponse {
  public LocationArn $location_arn;
  public LocationUri $location_uri;
  public OnPremConfig $on_prem_config;
  public NfsMountOptions $mount_options;
  public Time $creation_time;
}

class ListTagsForResourceResponse {
  public TagList $tags;
  public NextToken $next_token;
}

class S3BucketArn {
}

class SmbSubdirectory {
}

class FsxFilesystemArn {
}

class ListLocationsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class AgentListEntry {
  public TagValue $name;
  public AgentStatus $status;
  public AgentArn $agent_arn;
}

class FilterType {
}

class InternalException {
  public string $message;
  public string $error_code;
}

class ListAgentsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class TagResourceRequest {
  public TaggableResourceArn $resource_arn;
  public TagList $tags;
}

class UntagResourceResponse {
}

class UpdateTaskResponse {
}

class DescribeLocationEfsRequest {
  public LocationArn $location_arn;
}

class LogGroupArn {
}

class LogLevel {
}

class Options {
  public Uid $uid;
  public Gid $gid;
  public BytesPerSecond $bytes_per_second;
  public TaskQueueing $task_queueing;
  public OverwriteMode $overwrite_mode;
  public Atime $atime;
  public PreserveDeletedFiles $preserve_deleted_files;
  public PreserveDevices $preserve_devices;
  public PosixPermissions $posix_permissions;
  public LogLevel $log_level;
  public VerifyMode $verify_mode;
  public Mtime $mtime;
}

class PLSubnetArnList {
}

class EfsFilesystemArn {
}

class TaggableResourceArn {
}

class CreateLocationSmbResponse {
  public LocationArn $location_arn;
}

class DestinationNetworkInterfaceArns {
}

class ListAgentsResponse {
  public AgentList $agents;
  public NextToken $next_token;
}

class SmbDomain {
}

class Uid {
}

class PrivateLinkConfig {
  public VpcEndpointId $vpc_endpoint_id;
  public Endpoint $private_link_endpoint;
  public PLSubnetArnList $subnet_arns;
  public PLSecurityGroupArnList $security_group_arns;
}

class TaskExecutionList {
}

class DeleteTaskResponse {
}

class DescribeLocationEfsResponse {
  public Ec2Config $ec_2_config;
  public Time $creation_time;
  public LocationArn $location_arn;
  public LocationUri $location_uri;
}

class DescribeLocationFsxWindowsResponse {
  public Ec2SecurityGroupArnList $security_group_arns;
  public Time $creation_time;
  public SmbUser $user;
  public SmbDomain $domain;
  public LocationArn $location_arn;
  public LocationUri $location_uri;
}

class DescribeTaskRequest {
  public TaskArn $task_arn;
}

class DescribeTaskResponse {
  public TaskStatus $status;
  public SourceNetworkInterfaceArns $source_network_interface_arns;
  public FilterList $excludes;
  public string $error_detail;
  public Options $options;
  public TaskSchedule $schedule;
  public Time $creation_time;
  public TaskArn $task_arn;
  public TaskExecutionArn $current_task_execution_arn;
  public LocationArn $source_location_arn;
  public DestinationNetworkInterfaceArns $destination_network_interface_arns;
  public TagValue $name;
  public LocationArn $destination_location_arn;
  public LogGroupArn $cloud_watch_log_group_arn;
  public string $error_code;
}

class TaskQueueing {
}

class EfsSubdirectory {
}

class FilterValue {
}

class ListTasksResponse {
  public TaskList $tasks;
  public NextToken $next_token;
}

class MaxResults {
}

class StartTaskExecutionResponse {
  public TaskExecutionArn $task_execution_arn;
}

class Ec2SubnetArn {
}

class LocationUri {
}

class PosixPermissions {
}

