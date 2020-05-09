<?hh // strict
namespace slack\aws\datasync;

interface DataSync {
  public function CancelTaskExecution(CancelTaskExecutionRequest) Awaitable<Errors\Result<CancelTaskExecutionResponse>>;
  public function CreateAgent(CreateAgentRequest) Awaitable<Errors\Result<CreateAgentResponse>>;
  public function CreateLocationEfs(CreateLocationEfsRequest) Awaitable<Errors\Result<CreateLocationEfsResponse>>;
  public function CreateLocationFsxWindows(CreateLocationFsxWindowsRequest) Awaitable<Errors\Result<CreateLocationFsxWindowsResponse>>;
  public function CreateLocationNfs(CreateLocationNfsRequest) Awaitable<Errors\Result<CreateLocationNfsResponse>>;
  public function CreateLocationS3(CreateLocationS3Request) Awaitable<Errors\Result<CreateLocationS3Response>>;
  public function CreateLocationSmb(CreateLocationSmbRequest) Awaitable<Errors\Result<CreateLocationSmbResponse>>;
  public function CreateTask(CreateTaskRequest) Awaitable<Errors\Result<CreateTaskResponse>>;
  public function DeleteAgent(DeleteAgentRequest) Awaitable<Errors\Result<DeleteAgentResponse>>;
  public function DeleteLocation(DeleteLocationRequest) Awaitable<Errors\Result<DeleteLocationResponse>>;
  public function DeleteTask(DeleteTaskRequest) Awaitable<Errors\Result<DeleteTaskResponse>>;
  public function DescribeAgent(DescribeAgentRequest) Awaitable<Errors\Result<DescribeAgentResponse>>;
  public function DescribeLocationEfs(DescribeLocationEfsRequest) Awaitable<Errors\Result<DescribeLocationEfsResponse>>;
  public function DescribeLocationFsxWindows(DescribeLocationFsxWindowsRequest) Awaitable<Errors\Result<DescribeLocationFsxWindowsResponse>>;
  public function DescribeLocationNfs(DescribeLocationNfsRequest) Awaitable<Errors\Result<DescribeLocationNfsResponse>>;
  public function DescribeLocationS3(DescribeLocationS3Request) Awaitable<Errors\Result<DescribeLocationS3Response>>;
  public function DescribeLocationSmb(DescribeLocationSmbRequest) Awaitable<Errors\Result<DescribeLocationSmbResponse>>;
  public function DescribeTask(DescribeTaskRequest) Awaitable<Errors\Result<DescribeTaskResponse>>;
  public function DescribeTaskExecution(DescribeTaskExecutionRequest) Awaitable<Errors\Result<DescribeTaskExecutionResponse>>;
  public function ListAgents(ListAgentsRequest) Awaitable<Errors\Result<ListAgentsResponse>>;
  public function ListLocations(ListLocationsRequest) Awaitable<Errors\Result<ListLocationsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTaskExecutions(ListTaskExecutionsRequest) Awaitable<Errors\Result<ListTaskExecutionsResponse>>;
  public function ListTasks(ListTasksRequest) Awaitable<Errors\Result<ListTasksResponse>>;
  public function StartTaskExecution(StartTaskExecutionRequest) Awaitable<Errors\Result<StartTaskExecutionResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateAgent(UpdateAgentRequest) Awaitable<Errors\Result<UpdateAgentResponse>>;
  public function UpdateTask(UpdateTaskRequest) Awaitable<Errors\Result<UpdateTaskResponse>>;
}

class ActivationKey {
}

class AgentArn {
}

class AgentArnList {
}

class AgentList {
}

class AgentListEntry {
  public AgentArn $agent_arn;
  public TagValue $name;
  public AgentStatus $status;
}

class AgentStatus {
}

class Atime {
}

class BytesPerSecond {
}

class CancelTaskExecutionRequest {
  public TaskExecutionArn $task_execution_arn;
}

class CancelTaskExecutionResponse {
}

class CreateAgentRequest {
  public ActivationKey $activation_key;
  public TagValue $agent_name;
  public PLSecurityGroupArnList $security_group_arns;
  public PLSubnetArnList $subnet_arns;
  public TagList $tags;
  public VpcEndpointId $vpc_endpoint_id;
}

class CreateAgentResponse {
  public AgentArn $agent_arn;
}

class CreateLocationEfsRequest {
  public Ec2Config $ec_2_config;
  public EfsFilesystemArn $efs_filesystem_arn;
  public EfsSubdirectory $subdirectory;
  public TagList $tags;
}

class CreateLocationEfsResponse {
  public LocationArn $location_arn;
}

class CreateLocationFsxWindowsRequest {
  public SmbDomain $domain;
  public FsxFilesystemArn $fsx_filesystem_arn;
  public SmbPassword $password;
  public Ec2SecurityGroupArnList $security_group_arns;
  public FsxWindowsSubdirectory $subdirectory;
  public TagList $tags;
  public SmbUser $user;
}

class CreateLocationFsxWindowsResponse {
  public LocationArn $location_arn;
}

class CreateLocationNfsRequest {
  public NfsMountOptions $mount_options;
  public OnPremConfig $on_prem_config;
  public ServerHostname $server_hostname;
  public NfsSubdirectory $subdirectory;
  public TagList $tags;
}

class CreateLocationNfsResponse {
  public LocationArn $location_arn;
}

class CreateLocationS3Request {
  public S3BucketArn $s_3_bucket_arn;
  public S3Config $s_3_config;
  public S3StorageClass $s_3_storage_class;
  public S3Subdirectory $subdirectory;
  public TagList $tags;
}

class CreateLocationS3Response {
  public LocationArn $location_arn;
}

class CreateLocationSmbRequest {
  public AgentArnList $agent_arns;
  public SmbDomain $domain;
  public SmbMountOptions $mount_options;
  public SmbPassword $password;
  public ServerHostname $server_hostname;
  public SmbSubdirectory $subdirectory;
  public TagList $tags;
  public SmbUser $user;
}

class CreateLocationSmbResponse {
  public LocationArn $location_arn;
}

class CreateTaskRequest {
  public LogGroupArn $cloud_watch_log_group_arn;
  public LocationArn $destination_location_arn;
  public FilterList $excludes;
  public TagValue $name;
  public Options $options;
  public TaskSchedule $schedule;
  public LocationArn $source_location_arn;
  public TagList $tags;
}

class CreateTaskResponse {
  public TaskArn $task_arn;
}

class DeleteAgentRequest {
  public AgentArn $agent_arn;
}

class DeleteAgentResponse {
}

class DeleteLocationRequest {
  public LocationArn $location_arn;
}

class DeleteLocationResponse {
}

class DeleteTaskRequest {
  public TaskArn $task_arn;
}

class DeleteTaskResponse {
}

class DescribeAgentRequest {
  public AgentArn $agent_arn;
}

class DescribeAgentResponse {
  public AgentArn $agent_arn;
  public Time $creation_time;
  public EndpointType $endpoint_type;
  public Time $last_connection_time;
  public TagValue $name;
  public PrivateLinkConfig $private_link_config;
  public AgentStatus $status;
}

class DescribeLocationEfsRequest {
  public LocationArn $location_arn;
}

class DescribeLocationEfsResponse {
  public Time $creation_time;
  public Ec2Config $ec_2_config;
  public LocationArn $location_arn;
  public LocationUri $location_uri;
}

class DescribeLocationFsxWindowsRequest {
  public LocationArn $location_arn;
}

class DescribeLocationFsxWindowsResponse {
  public Time $creation_time;
  public SmbDomain $domain;
  public LocationArn $location_arn;
  public LocationUri $location_uri;
  public Ec2SecurityGroupArnList $security_group_arns;
  public SmbUser $user;
}

class DescribeLocationNfsRequest {
  public LocationArn $location_arn;
}

class DescribeLocationNfsResponse {
  public Time $creation_time;
  public LocationArn $location_arn;
  public LocationUri $location_uri;
  public NfsMountOptions $mount_options;
  public OnPremConfig $on_prem_config;
}

class DescribeLocationS3Request {
  public LocationArn $location_arn;
}

class DescribeLocationS3Response {
  public Time $creation_time;
  public LocationArn $location_arn;
  public LocationUri $location_uri;
  public S3Config $s_3_config;
  public S3StorageClass $s_3_storage_class;
}

class DescribeLocationSmbRequest {
  public LocationArn $location_arn;
}

class DescribeLocationSmbResponse {
  public AgentArnList $agent_arns;
  public Time $creation_time;
  public SmbDomain $domain;
  public LocationArn $location_arn;
  public LocationUri $location_uri;
  public SmbMountOptions $mount_options;
  public SmbUser $user;
}

class DescribeTaskExecutionRequest {
  public TaskExecutionArn $task_execution_arn;
}

class DescribeTaskExecutionResponse {
  public long $bytes_transferred;
  public long $bytes_written;
  public long $estimated_bytes_to_transfer;
  public long $estimated_files_to_transfer;
  public FilterList $excludes;
  public long $files_transferred;
  public FilterList $includes;
  public Options $options;
  public TaskExecutionResultDetail $result;
  public Time $start_time;
  public TaskExecutionStatus $status;
  public TaskExecutionArn $task_execution_arn;
}

class DescribeTaskRequest {
  public TaskArn $task_arn;
}

class DescribeTaskResponse {
  public LogGroupArn $cloud_watch_log_group_arn;
  public Time $creation_time;
  public TaskExecutionArn $current_task_execution_arn;
  public LocationArn $destination_location_arn;
  public DestinationNetworkInterfaceArns $destination_network_interface_arns;
  public string $error_code;
  public string $error_detail;
  public FilterList $excludes;
  public TagValue $name;
  public Options $options;
  public TaskSchedule $schedule;
  public LocationArn $source_location_arn;
  public SourceNetworkInterfaceArns $source_network_interface_arns;
  public TaskStatus $status;
  public TaskArn $task_arn;
}

class DestinationNetworkInterfaceArns {
}

class Duration {
}

class Ec2Config {
  public Ec2SecurityGroupArnList $security_group_arns;
  public Ec2SubnetArn $subnet_arn;
}

class Ec2SecurityGroupArn {
}

class Ec2SecurityGroupArnList {
}

class Ec2SubnetArn {
}

class EfsFilesystemArn {
}

class EfsSubdirectory {
}

class Endpoint {
}

class EndpointType {
}

class FilterList {
}

class FilterRule {
  public FilterType $filter_type;
  public FilterValue $value;
}

class FilterType {
}

class FilterValue {
}

class FsxFilesystemArn {
}

class FsxWindowsSubdirectory {
}

class Gid {
}

class IamRoleArn {
}

class InternalException {
  public string $error_code;
  public string $message;
}

class InvalidRequestException {
  public string $error_code;
  public string $message;
}

class ListAgentsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListAgentsResponse {
  public AgentList $agents;
  public NextToken $next_token;
}

class ListLocationsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListLocationsResponse {
  public LocationList $locations;
  public NextToken $next_token;
}

class ListTagsForResourceRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public TaggableResourceArn $resource_arn;
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public TagList $tags;
}

class ListTaskExecutionsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public TaskArn $task_arn;
}

class ListTaskExecutionsResponse {
  public NextToken $next_token;
  public TaskExecutionList $task_executions;
}

class ListTasksRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListTasksResponse {
  public NextToken $next_token;
  public TaskList $tasks;
}

class LocationArn {
}

class LocationList {
}

class LocationListEntry {
  public LocationArn $location_arn;
  public LocationUri $location_uri;
}

class LocationUri {
}

class LogGroupArn {
}

class LogLevel {
}

class MaxResults {
}

class Mtime {
}

class NetworkInterfaceArn {
}

class NextToken {
}

class NfsMountOptions {
  public NfsVersion $version;
}

class NfsSubdirectory {
}

class NfsVersion {
}

class OnPremConfig {
  public AgentArnList $agent_arns;
}

class Options {
  public Atime $atime;
  public BytesPerSecond $bytes_per_second;
  public Gid $gid;
  public LogLevel $log_level;
  public Mtime $mtime;
  public OverwriteMode $overwrite_mode;
  public PosixPermissions $posix_permissions;
  public PreserveDeletedFiles $preserve_deleted_files;
  public PreserveDevices $preserve_devices;
  public TaskQueueing $task_queueing;
  public Uid $uid;
  public VerifyMode $verify_mode;
}

class OverwriteMode {
}

class PLSecurityGroupArnList {
}

class PLSubnetArnList {
}

class PhaseStatus {
}

class PosixPermissions {
}

class PreserveDeletedFiles {
}

class PreserveDevices {
}

class PrivateLinkConfig {
  public Endpoint $private_link_endpoint;
  public PLSecurityGroupArnList $security_group_arns;
  public PLSubnetArnList $subnet_arns;
  public VpcEndpointId $vpc_endpoint_id;
}

class S3BucketArn {
}

class S3Config {
  public IamRoleArn $bucket_access_role_arn;
}

class S3StorageClass {
}

class S3Subdirectory {
}

class ScheduleExpressionCron {
}

class ServerHostname {
}

class SmbDomain {
}

class SmbMountOptions {
  public SmbVersion $version;
}

class SmbPassword {
}

class SmbSubdirectory {
}

class SmbUser {
}

class SmbVersion {
}

class SourceNetworkInterfaceArns {
}

class StartTaskExecutionRequest {
  public FilterList $includes;
  public Options $override_options;
  public TaskArn $task_arn;
}

class StartTaskExecutionResponse {
  public TaskExecutionArn $task_execution_arn;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagListEntry {
  public TagKey $key;
  public TagValue $value;
}

class TagResourceRequest {
  public TaggableResourceArn $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class TaggableResourceArn {
}

class TaskArn {
}

class TaskExecutionArn {
}

class TaskExecutionList {
}

class TaskExecutionListEntry {
  public TaskExecutionStatus $status;
  public TaskExecutionArn $task_execution_arn;
}

class TaskExecutionResultDetail {
  public string $error_code;
  public string $error_detail;
  public Duration $prepare_duration;
  public PhaseStatus $prepare_status;
  public Duration $total_duration;
  public Duration $transfer_duration;
  public PhaseStatus $transfer_status;
  public Duration $verify_duration;
  public PhaseStatus $verify_status;
}

class TaskExecutionStatus {
}

class TaskList {
}

class TaskListEntry {
  public TagValue $name;
  public TaskStatus $status;
  public TaskArn $task_arn;
}

class TaskQueueing {
}

class TaskSchedule {
  public ScheduleExpressionCron $schedule_expression;
}

class TaskStatus {
}

class Time {
}

class Uid {
}

class UntagResourceRequest {
  public TagKeyList $keys;
  public TaggableResourceArn $resource_arn;
}

class UntagResourceResponse {
}

class UpdateAgentRequest {
  public AgentArn $agent_arn;
  public TagValue $name;
}

class UpdateAgentResponse {
}

class UpdateTaskRequest {
  public LogGroupArn $cloud_watch_log_group_arn;
  public FilterList $excludes;
  public TagValue $name;
  public Options $options;
  public TaskSchedule $schedule;
  public TaskArn $task_arn;
}

class UpdateTaskResponse {
}

class VerifyMode {
}

class VpcEndpointId {
}

class long {
}

class string {
}

