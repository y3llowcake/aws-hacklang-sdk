<?hh // strict
namespace slack\aws\datasync;

interface DataSync {
  public function CancelTaskExecution(CancelTaskExecutionRequest): Awaitable<Errors\Result<CancelTaskExecutionResponse>>;
  public function CreateAgent(CreateAgentRequest): Awaitable<Errors\Result<CreateAgentResponse>>;
  public function CreateLocationEfs(CreateLocationEfsRequest): Awaitable<Errors\Result<CreateLocationEfsResponse>>;
  public function CreateLocationFsxWindows(CreateLocationFsxWindowsRequest): Awaitable<Errors\Result<CreateLocationFsxWindowsResponse>>;
  public function CreateLocationNfs(CreateLocationNfsRequest): Awaitable<Errors\Result<CreateLocationNfsResponse>>;
  public function CreateLocationS3(CreateLocationS3Request): Awaitable<Errors\Result<CreateLocationS3Response>>;
  public function CreateLocationSmb(CreateLocationSmbRequest): Awaitable<Errors\Result<CreateLocationSmbResponse>>;
  public function CreateTask(CreateTaskRequest): Awaitable<Errors\Result<CreateTaskResponse>>;
  public function DeleteAgent(DeleteAgentRequest): Awaitable<Errors\Result<DeleteAgentResponse>>;
  public function DeleteLocation(DeleteLocationRequest): Awaitable<Errors\Result<DeleteLocationResponse>>;
  public function DeleteTask(DeleteTaskRequest): Awaitable<Errors\Result<DeleteTaskResponse>>;
  public function DescribeAgent(DescribeAgentRequest): Awaitable<Errors\Result<DescribeAgentResponse>>;
  public function DescribeLocationEfs(DescribeLocationEfsRequest): Awaitable<Errors\Result<DescribeLocationEfsResponse>>;
  public function DescribeLocationFsxWindows(DescribeLocationFsxWindowsRequest): Awaitable<Errors\Result<DescribeLocationFsxWindowsResponse>>;
  public function DescribeLocationNfs(DescribeLocationNfsRequest): Awaitable<Errors\Result<DescribeLocationNfsResponse>>;
  public function DescribeLocationS3(DescribeLocationS3Request): Awaitable<Errors\Result<DescribeLocationS3Response>>;
  public function DescribeLocationSmb(DescribeLocationSmbRequest): Awaitable<Errors\Result<DescribeLocationSmbResponse>>;
  public function DescribeTask(DescribeTaskRequest): Awaitable<Errors\Result<DescribeTaskResponse>>;
  public function DescribeTaskExecution(DescribeTaskExecutionRequest): Awaitable<Errors\Result<DescribeTaskExecutionResponse>>;
  public function ListAgents(ListAgentsRequest): Awaitable<Errors\Result<ListAgentsResponse>>;
  public function ListLocations(ListLocationsRequest): Awaitable<Errors\Result<ListLocationsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTaskExecutions(ListTaskExecutionsRequest): Awaitable<Errors\Result<ListTaskExecutionsResponse>>;
  public function ListTasks(ListTasksRequest): Awaitable<Errors\Result<ListTasksResponse>>;
  public function StartTaskExecution(StartTaskExecutionRequest): Awaitable<Errors\Result<StartTaskExecutionResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateAgent(UpdateAgentRequest): Awaitable<Errors\Result<UpdateAgentResponse>>;
  public function UpdateTask(UpdateTaskRequest): Awaitable<Errors\Result<UpdateTaskResponse>>;
}

type ActivationKey = string;

type AgentArn = string;

type AgentArnList = vec<AgentArn>;

type AgentList = vec<AgentListEntry>;

class AgentListEntry {
  public AgentArn $agent_arn;
  public TagValue $name;
  public AgentStatus $status;

  public function __construct(shape(
  ?'agent_arn' => AgentArn,
  ?'name' => TagValue,
  ?'status' => AgentStatus,
  ) $s = shape()) {
    $this->agent_arn = $agent_arn ?? "";
    $this->name = $name ?? "";
    $this->status = $status ?? "";
  }
}

type AgentStatus = string;

type Atime = string;

type BytesPerSecond = int;

class CancelTaskExecutionRequest {
  public TaskExecutionArn $task_execution_arn;

  public function __construct(shape(
  ?'task_execution_arn' => TaskExecutionArn,
  ) $s = shape()) {
    $this->task_execution_arn = $task_execution_arn ?? "";
  }
}

class CancelTaskExecutionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateAgentRequest {
  public ActivationKey $activation_key;
  public TagValue $agent_name;
  public PLSecurityGroupArnList $security_group_arns;
  public PLSubnetArnList $subnet_arns;
  public TagList $tags;
  public VpcEndpointId $vpc_endpoint_id;

  public function __construct(shape(
  ?'activation_key' => ActivationKey,
  ?'agent_name' => TagValue,
  ?'security_group_arns' => PLSecurityGroupArnList,
  ?'subnet_arns' => PLSubnetArnList,
  ?'tags' => TagList,
  ?'vpc_endpoint_id' => VpcEndpointId,
  ) $s = shape()) {
    $this->activation_key = $activation_key ?? "";
    $this->agent_name = $agent_name ?? "";
    $this->security_group_arns = $security_group_arns ?? [];
    $this->subnet_arns = $subnet_arns ?? [];
    $this->tags = $tags ?? [];
    $this->vpc_endpoint_id = $vpc_endpoint_id ?? "";
  }
}

class CreateAgentResponse {
  public AgentArn $agent_arn;

  public function __construct(shape(
  ?'agent_arn' => AgentArn,
  ) $s = shape()) {
    $this->agent_arn = $agent_arn ?? "";
  }
}

class CreateLocationEfsRequest {
  public Ec2Config $ec_2_config;
  public EfsFilesystemArn $efs_filesystem_arn;
  public EfsSubdirectory $subdirectory;
  public TagList $tags;

  public function __construct(shape(
  ?'ec_2_config' => Ec2Config,
  ?'efs_filesystem_arn' => EfsFilesystemArn,
  ?'subdirectory' => EfsSubdirectory,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->ec_2_config = $ec_2_config ?? null;
    $this->efs_filesystem_arn = $efs_filesystem_arn ?? "";
    $this->subdirectory = $subdirectory ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateLocationEfsResponse {
  public LocationArn $location_arn;

  public function __construct(shape(
  ?'location_arn' => LocationArn,
  ) $s = shape()) {
    $this->location_arn = $location_arn ?? "";
  }
}

class CreateLocationFsxWindowsRequest {
  public SmbDomain $domain;
  public FsxFilesystemArn $fsx_filesystem_arn;
  public SmbPassword $password;
  public Ec2SecurityGroupArnList $security_group_arns;
  public FsxWindowsSubdirectory $subdirectory;
  public TagList $tags;
  public SmbUser $user;

  public function __construct(shape(
  ?'domain' => SmbDomain,
  ?'fsx_filesystem_arn' => FsxFilesystemArn,
  ?'password' => SmbPassword,
  ?'security_group_arns' => Ec2SecurityGroupArnList,
  ?'subdirectory' => FsxWindowsSubdirectory,
  ?'tags' => TagList,
  ?'user' => SmbUser,
  ) $s = shape()) {
    $this->domain = $domain ?? "";
    $this->fsx_filesystem_arn = $fsx_filesystem_arn ?? "";
    $this->password = $password ?? "";
    $this->security_group_arns = $security_group_arns ?? [];
    $this->subdirectory = $subdirectory ?? "";
    $this->tags = $tags ?? [];
    $this->user = $user ?? "";
  }
}

class CreateLocationFsxWindowsResponse {
  public LocationArn $location_arn;

  public function __construct(shape(
  ?'location_arn' => LocationArn,
  ) $s = shape()) {
    $this->location_arn = $location_arn ?? "";
  }
}

class CreateLocationNfsRequest {
  public NfsMountOptions $mount_options;
  public OnPremConfig $on_prem_config;
  public ServerHostname $server_hostname;
  public NfsSubdirectory $subdirectory;
  public TagList $tags;

  public function __construct(shape(
  ?'mount_options' => NfsMountOptions,
  ?'on_prem_config' => OnPremConfig,
  ?'server_hostname' => ServerHostname,
  ?'subdirectory' => NfsSubdirectory,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->mount_options = $mount_options ?? null;
    $this->on_prem_config = $on_prem_config ?? null;
    $this->server_hostname = $server_hostname ?? "";
    $this->subdirectory = $subdirectory ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateLocationNfsResponse {
  public LocationArn $location_arn;

  public function __construct(shape(
  ?'location_arn' => LocationArn,
  ) $s = shape()) {
    $this->location_arn = $location_arn ?? "";
  }
}

class CreateLocationS3Request {
  public S3BucketArn $s_3_bucket_arn;
  public S3Config $s_3_config;
  public S3StorageClass $s_3_storage_class;
  public S3Subdirectory $subdirectory;
  public TagList $tags;

  public function __construct(shape(
  ?'s_3_bucket_arn' => S3BucketArn,
  ?'s_3_config' => S3Config,
  ?'s_3_storage_class' => S3StorageClass,
  ?'subdirectory' => S3Subdirectory,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->s_3_bucket_arn = $s_3_bucket_arn ?? "";
    $this->s_3_config = $s_3_config ?? null;
    $this->s_3_storage_class = $s_3_storage_class ?? "";
    $this->subdirectory = $subdirectory ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateLocationS3Response {
  public LocationArn $location_arn;

  public function __construct(shape(
  ?'location_arn' => LocationArn,
  ) $s = shape()) {
    $this->location_arn = $location_arn ?? "";
  }
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

  public function __construct(shape(
  ?'agent_arns' => AgentArnList,
  ?'domain' => SmbDomain,
  ?'mount_options' => SmbMountOptions,
  ?'password' => SmbPassword,
  ?'server_hostname' => ServerHostname,
  ?'subdirectory' => SmbSubdirectory,
  ?'tags' => TagList,
  ?'user' => SmbUser,
  ) $s = shape()) {
    $this->agent_arns = $agent_arns ?? [];
    $this->domain = $domain ?? "";
    $this->mount_options = $mount_options ?? null;
    $this->password = $password ?? "";
    $this->server_hostname = $server_hostname ?? "";
    $this->subdirectory = $subdirectory ?? "";
    $this->tags = $tags ?? [];
    $this->user = $user ?? "";
  }
}

class CreateLocationSmbResponse {
  public LocationArn $location_arn;

  public function __construct(shape(
  ?'location_arn' => LocationArn,
  ) $s = shape()) {
    $this->location_arn = $location_arn ?? "";
  }
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

  public function __construct(shape(
  ?'cloud_watch_log_group_arn' => LogGroupArn,
  ?'destination_location_arn' => LocationArn,
  ?'excludes' => FilterList,
  ?'name' => TagValue,
  ?'options' => Options,
  ?'schedule' => TaskSchedule,
  ?'source_location_arn' => LocationArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->cloud_watch_log_group_arn = $cloud_watch_log_group_arn ?? "";
    $this->destination_location_arn = $destination_location_arn ?? "";
    $this->excludes = $excludes ?? [];
    $this->name = $name ?? "";
    $this->options = $options ?? null;
    $this->schedule = $schedule ?? null;
    $this->source_location_arn = $source_location_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateTaskResponse {
  public TaskArn $task_arn;

  public function __construct(shape(
  ?'task_arn' => TaskArn,
  ) $s = shape()) {
    $this->task_arn = $task_arn ?? "";
  }
}

class DeleteAgentRequest {
  public AgentArn $agent_arn;

  public function __construct(shape(
  ?'agent_arn' => AgentArn,
  ) $s = shape()) {
    $this->agent_arn = $agent_arn ?? "";
  }
}

class DeleteAgentResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteLocationRequest {
  public LocationArn $location_arn;

  public function __construct(shape(
  ?'location_arn' => LocationArn,
  ) $s = shape()) {
    $this->location_arn = $location_arn ?? "";
  }
}

class DeleteLocationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTaskRequest {
  public TaskArn $task_arn;

  public function __construct(shape(
  ?'task_arn' => TaskArn,
  ) $s = shape()) {
    $this->task_arn = $task_arn ?? "";
  }
}

class DeleteTaskResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAgentRequest {
  public AgentArn $agent_arn;

  public function __construct(shape(
  ?'agent_arn' => AgentArn,
  ) $s = shape()) {
    $this->agent_arn = $agent_arn ?? "";
  }
}

class DescribeAgentResponse {
  public AgentArn $agent_arn;
  public Time $creation_time;
  public EndpointType $endpoint_type;
  public Time $last_connection_time;
  public TagValue $name;
  public PrivateLinkConfig $private_link_config;
  public AgentStatus $status;

  public function __construct(shape(
  ?'agent_arn' => AgentArn,
  ?'creation_time' => Time,
  ?'endpoint_type' => EndpointType,
  ?'last_connection_time' => Time,
  ?'name' => TagValue,
  ?'private_link_config' => PrivateLinkConfig,
  ?'status' => AgentStatus,
  ) $s = shape()) {
    $this->agent_arn = $agent_arn ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->endpoint_type = $endpoint_type ?? "";
    $this->last_connection_time = $last_connection_time ?? 0;
    $this->name = $name ?? "";
    $this->private_link_config = $private_link_config ?? null;
    $this->status = $status ?? "";
  }
}

class DescribeLocationEfsRequest {
  public LocationArn $location_arn;

  public function __construct(shape(
  ?'location_arn' => LocationArn,
  ) $s = shape()) {
    $this->location_arn = $location_arn ?? "";
  }
}

class DescribeLocationEfsResponse {
  public Time $creation_time;
  public Ec2Config $ec_2_config;
  public LocationArn $location_arn;
  public LocationUri $location_uri;

  public function __construct(shape(
  ?'creation_time' => Time,
  ?'ec_2_config' => Ec2Config,
  ?'location_arn' => LocationArn,
  ?'location_uri' => LocationUri,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->ec_2_config = $ec_2_config ?? null;
    $this->location_arn = $location_arn ?? "";
    $this->location_uri = $location_uri ?? "";
  }
}

class DescribeLocationFsxWindowsRequest {
  public LocationArn $location_arn;

  public function __construct(shape(
  ?'location_arn' => LocationArn,
  ) $s = shape()) {
    $this->location_arn = $location_arn ?? "";
  }
}

class DescribeLocationFsxWindowsResponse {
  public Time $creation_time;
  public SmbDomain $domain;
  public LocationArn $location_arn;
  public LocationUri $location_uri;
  public Ec2SecurityGroupArnList $security_group_arns;
  public SmbUser $user;

  public function __construct(shape(
  ?'creation_time' => Time,
  ?'domain' => SmbDomain,
  ?'location_arn' => LocationArn,
  ?'location_uri' => LocationUri,
  ?'security_group_arns' => Ec2SecurityGroupArnList,
  ?'user' => SmbUser,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->domain = $domain ?? "";
    $this->location_arn = $location_arn ?? "";
    $this->location_uri = $location_uri ?? "";
    $this->security_group_arns = $security_group_arns ?? [];
    $this->user = $user ?? "";
  }
}

class DescribeLocationNfsRequest {
  public LocationArn $location_arn;

  public function __construct(shape(
  ?'location_arn' => LocationArn,
  ) $s = shape()) {
    $this->location_arn = $location_arn ?? "";
  }
}

class DescribeLocationNfsResponse {
  public Time $creation_time;
  public LocationArn $location_arn;
  public LocationUri $location_uri;
  public NfsMountOptions $mount_options;
  public OnPremConfig $on_prem_config;

  public function __construct(shape(
  ?'creation_time' => Time,
  ?'location_arn' => LocationArn,
  ?'location_uri' => LocationUri,
  ?'mount_options' => NfsMountOptions,
  ?'on_prem_config' => OnPremConfig,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->location_arn = $location_arn ?? "";
    $this->location_uri = $location_uri ?? "";
    $this->mount_options = $mount_options ?? null;
    $this->on_prem_config = $on_prem_config ?? null;
  }
}

class DescribeLocationS3Request {
  public LocationArn $location_arn;

  public function __construct(shape(
  ?'location_arn' => LocationArn,
  ) $s = shape()) {
    $this->location_arn = $location_arn ?? "";
  }
}

class DescribeLocationS3Response {
  public Time $creation_time;
  public LocationArn $location_arn;
  public LocationUri $location_uri;
  public S3Config $s_3_config;
  public S3StorageClass $s_3_storage_class;

  public function __construct(shape(
  ?'creation_time' => Time,
  ?'location_arn' => LocationArn,
  ?'location_uri' => LocationUri,
  ?'s_3_config' => S3Config,
  ?'s_3_storage_class' => S3StorageClass,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->location_arn = $location_arn ?? "";
    $this->location_uri = $location_uri ?? "";
    $this->s_3_config = $s_3_config ?? null;
    $this->s_3_storage_class = $s_3_storage_class ?? "";
  }
}

class DescribeLocationSmbRequest {
  public LocationArn $location_arn;

  public function __construct(shape(
  ?'location_arn' => LocationArn,
  ) $s = shape()) {
    $this->location_arn = $location_arn ?? "";
  }
}

class DescribeLocationSmbResponse {
  public AgentArnList $agent_arns;
  public Time $creation_time;
  public SmbDomain $domain;
  public LocationArn $location_arn;
  public LocationUri $location_uri;
  public SmbMountOptions $mount_options;
  public SmbUser $user;

  public function __construct(shape(
  ?'agent_arns' => AgentArnList,
  ?'creation_time' => Time,
  ?'domain' => SmbDomain,
  ?'location_arn' => LocationArn,
  ?'location_uri' => LocationUri,
  ?'mount_options' => SmbMountOptions,
  ?'user' => SmbUser,
  ) $s = shape()) {
    $this->agent_arns = $agent_arns ?? [];
    $this->creation_time = $creation_time ?? 0;
    $this->domain = $domain ?? "";
    $this->location_arn = $location_arn ?? "";
    $this->location_uri = $location_uri ?? "";
    $this->mount_options = $mount_options ?? null;
    $this->user = $user ?? "";
  }
}

class DescribeTaskExecutionRequest {
  public TaskExecutionArn $task_execution_arn;

  public function __construct(shape(
  ?'task_execution_arn' => TaskExecutionArn,
  ) $s = shape()) {
    $this->task_execution_arn = $task_execution_arn ?? "";
  }
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

  public function __construct(shape(
  ?'bytes_transferred' => long,
  ?'bytes_written' => long,
  ?'estimated_bytes_to_transfer' => long,
  ?'estimated_files_to_transfer' => long,
  ?'excludes' => FilterList,
  ?'files_transferred' => long,
  ?'includes' => FilterList,
  ?'options' => Options,
  ?'result' => TaskExecutionResultDetail,
  ?'start_time' => Time,
  ?'status' => TaskExecutionStatus,
  ?'task_execution_arn' => TaskExecutionArn,
  ) $s = shape()) {
    $this->bytes_transferred = $bytes_transferred ?? 0;
    $this->bytes_written = $bytes_written ?? 0;
    $this->estimated_bytes_to_transfer = $estimated_bytes_to_transfer ?? 0;
    $this->estimated_files_to_transfer = $estimated_files_to_transfer ?? 0;
    $this->excludes = $excludes ?? [];
    $this->files_transferred = $files_transferred ?? 0;
    $this->includes = $includes ?? [];
    $this->options = $options ?? null;
    $this->result = $result ?? null;
    $this->start_time = $start_time ?? 0;
    $this->status = $status ?? "";
    $this->task_execution_arn = $task_execution_arn ?? "";
  }
}

class DescribeTaskRequest {
  public TaskArn $task_arn;

  public function __construct(shape(
  ?'task_arn' => TaskArn,
  ) $s = shape()) {
    $this->task_arn = $task_arn ?? "";
  }
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

  public function __construct(shape(
  ?'cloud_watch_log_group_arn' => LogGroupArn,
  ?'creation_time' => Time,
  ?'current_task_execution_arn' => TaskExecutionArn,
  ?'destination_location_arn' => LocationArn,
  ?'destination_network_interface_arns' => DestinationNetworkInterfaceArns,
  ?'error_code' => string,
  ?'error_detail' => string,
  ?'excludes' => FilterList,
  ?'name' => TagValue,
  ?'options' => Options,
  ?'schedule' => TaskSchedule,
  ?'source_location_arn' => LocationArn,
  ?'source_network_interface_arns' => SourceNetworkInterfaceArns,
  ?'status' => TaskStatus,
  ?'task_arn' => TaskArn,
  ) $s = shape()) {
    $this->cloud_watch_log_group_arn = $cloud_watch_log_group_arn ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->current_task_execution_arn = $current_task_execution_arn ?? "";
    $this->destination_location_arn = $destination_location_arn ?? "";
    $this->destination_network_interface_arns = $destination_network_interface_arns ?? [];
    $this->error_code = $error_code ?? "";
    $this->error_detail = $error_detail ?? "";
    $this->excludes = $excludes ?? [];
    $this->name = $name ?? "";
    $this->options = $options ?? null;
    $this->schedule = $schedule ?? null;
    $this->source_location_arn = $source_location_arn ?? "";
    $this->source_network_interface_arns = $source_network_interface_arns ?? [];
    $this->status = $status ?? "";
    $this->task_arn = $task_arn ?? "";
  }
}

type DestinationNetworkInterfaceArns = vec<NetworkInterfaceArn>;

type Duration = int;

class Ec2Config {
  public Ec2SecurityGroupArnList $security_group_arns;
  public Ec2SubnetArn $subnet_arn;

  public function __construct(shape(
  ?'security_group_arns' => Ec2SecurityGroupArnList,
  ?'subnet_arn' => Ec2SubnetArn,
  ) $s = shape()) {
    $this->security_group_arns = $security_group_arns ?? [];
    $this->subnet_arn = $subnet_arn ?? "";
  }
}

type Ec2SecurityGroupArn = string;

type Ec2SecurityGroupArnList = vec<Ec2SecurityGroupArn>;

type Ec2SubnetArn = string;

type EfsFilesystemArn = string;

type EfsSubdirectory = string;

type Endpoint = string;

type EndpointType = string;

type FilterList = vec<FilterRule>;

class FilterRule {
  public FilterType $filter_type;
  public FilterValue $value;

  public function __construct(shape(
  ?'filter_type' => FilterType,
  ?'value' => FilterValue,
  ) $s = shape()) {
    $this->filter_type = $filter_type ?? "";
    $this->value = $value ?? "";
  }
}

type FilterType = string;

type FilterValue = string;

type FsxFilesystemArn = string;

type FsxWindowsSubdirectory = string;

type Gid = string;

type IamRoleArn = string;

class InternalException {
  public string $error_code;
  public string $message;

  public function __construct(shape(
  ?'error_code' => string,
  ?'message' => string,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? "";
  }
}

class InvalidRequestException {
  public string $error_code;
  public string $message;

  public function __construct(shape(
  ?'error_code' => string,
  ?'message' => string,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? "";
  }
}

class ListAgentsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListAgentsResponse {
  public AgentList $agents;
  public NextToken $next_token;

  public function __construct(shape(
  ?'agents' => AgentList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->agents = $agents ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListLocationsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListLocationsResponse {
  public LocationList $locations;
  public NextToken $next_token;

  public function __construct(shape(
  ?'locations' => LocationList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->locations = $locations ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListTagsForResourceRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public TaggableResourceArn $resource_arn;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'resource_arn' => TaggableResourceArn,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public TagList $tags;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? [];
  }
}

class ListTaskExecutionsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public TaskArn $task_arn;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'task_arn' => TaskArn,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->task_arn = $task_arn ?? "";
  }
}

class ListTaskExecutionsResponse {
  public NextToken $next_token;
  public TaskExecutionList $task_executions;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'task_executions' => TaskExecutionList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->task_executions = $task_executions ?? [];
  }
}

class ListTasksRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListTasksResponse {
  public NextToken $next_token;
  public TaskList $tasks;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tasks' => TaskList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tasks = $tasks ?? [];
  }
}

type LocationArn = string;

type LocationList = vec<LocationListEntry>;

class LocationListEntry {
  public LocationArn $location_arn;
  public LocationUri $location_uri;

  public function __construct(shape(
  ?'location_arn' => LocationArn,
  ?'location_uri' => LocationUri,
  ) $s = shape()) {
    $this->location_arn = $location_arn ?? "";
    $this->location_uri = $location_uri ?? "";
  }
}

type LocationUri = string;

type LogGroupArn = string;

type LogLevel = string;

type MaxResults = int;

type Mtime = string;

type NetworkInterfaceArn = string;

type NextToken = string;

class NfsMountOptions {
  public NfsVersion $version;

  public function __construct(shape(
  ?'version' => NfsVersion,
  ) $s = shape()) {
    $this->version = $version ?? "";
  }
}

type NfsSubdirectory = string;

type NfsVersion = string;

class OnPremConfig {
  public AgentArnList $agent_arns;

  public function __construct(shape(
  ?'agent_arns' => AgentArnList,
  ) $s = shape()) {
    $this->agent_arns = $agent_arns ?? [];
  }
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

  public function __construct(shape(
  ?'atime' => Atime,
  ?'bytes_per_second' => BytesPerSecond,
  ?'gid' => Gid,
  ?'log_level' => LogLevel,
  ?'mtime' => Mtime,
  ?'overwrite_mode' => OverwriteMode,
  ?'posix_permissions' => PosixPermissions,
  ?'preserve_deleted_files' => PreserveDeletedFiles,
  ?'preserve_devices' => PreserveDevices,
  ?'task_queueing' => TaskQueueing,
  ?'uid' => Uid,
  ?'verify_mode' => VerifyMode,
  ) $s = shape()) {
    $this->atime = $atime ?? "";
    $this->bytes_per_second = $bytes_per_second ?? 0;
    $this->gid = $gid ?? "";
    $this->log_level = $log_level ?? "";
    $this->mtime = $mtime ?? "";
    $this->overwrite_mode = $overwrite_mode ?? "";
    $this->posix_permissions = $posix_permissions ?? "";
    $this->preserve_deleted_files = $preserve_deleted_files ?? "";
    $this->preserve_devices = $preserve_devices ?? "";
    $this->task_queueing = $task_queueing ?? "";
    $this->uid = $uid ?? "";
    $this->verify_mode = $verify_mode ?? "";
  }
}

type OverwriteMode = string;

type PLSecurityGroupArnList = vec<Ec2SecurityGroupArn>;

type PLSubnetArnList = vec<Ec2SubnetArn>;

type PhaseStatus = string;

type PosixPermissions = string;

type PreserveDeletedFiles = string;

type PreserveDevices = string;

class PrivateLinkConfig {
  public Endpoint $private_link_endpoint;
  public PLSecurityGroupArnList $security_group_arns;
  public PLSubnetArnList $subnet_arns;
  public VpcEndpointId $vpc_endpoint_id;

  public function __construct(shape(
  ?'private_link_endpoint' => Endpoint,
  ?'security_group_arns' => PLSecurityGroupArnList,
  ?'subnet_arns' => PLSubnetArnList,
  ?'vpc_endpoint_id' => VpcEndpointId,
  ) $s = shape()) {
    $this->private_link_endpoint = $private_link_endpoint ?? "";
    $this->security_group_arns = $security_group_arns ?? [];
    $this->subnet_arns = $subnet_arns ?? [];
    $this->vpc_endpoint_id = $vpc_endpoint_id ?? "";
  }
}

type S3BucketArn = string;

class S3Config {
  public IamRoleArn $bucket_access_role_arn;

  public function __construct(shape(
  ?'bucket_access_role_arn' => IamRoleArn,
  ) $s = shape()) {
    $this->bucket_access_role_arn = $bucket_access_role_arn ?? "";
  }
}

type S3StorageClass = string;

type S3Subdirectory = string;

type ScheduleExpressionCron = string;

type ServerHostname = string;

type SmbDomain = string;

class SmbMountOptions {
  public SmbVersion $version;

  public function __construct(shape(
  ?'version' => SmbVersion,
  ) $s = shape()) {
    $this->version = $version ?? "";
  }
}

type SmbPassword = string;

type SmbSubdirectory = string;

type SmbUser = string;

type SmbVersion = string;

type SourceNetworkInterfaceArns = vec<NetworkInterfaceArn>;

class StartTaskExecutionRequest {
  public FilterList $includes;
  public Options $override_options;
  public TaskArn $task_arn;

  public function __construct(shape(
  ?'includes' => FilterList,
  ?'override_options' => Options,
  ?'task_arn' => TaskArn,
  ) $s = shape()) {
    $this->includes = $includes ?? [];
    $this->override_options = $override_options ?? null;
    $this->task_arn = $task_arn ?? "";
  }
}

class StartTaskExecutionResponse {
  public TaskExecutionArn $task_execution_arn;

  public function __construct(shape(
  ?'task_execution_arn' => TaskExecutionArn,
  ) $s = shape()) {
    $this->task_execution_arn = $task_execution_arn ?? "";
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<TagListEntry>;

class TagListEntry {
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

class TagResourceRequest {
  public TaggableResourceArn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => TaggableResourceArn,
  ?'tags' => TagList,
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

type TaggableResourceArn = string;

type TaskArn = string;

type TaskExecutionArn = string;

type TaskExecutionList = vec<TaskExecutionListEntry>;

class TaskExecutionListEntry {
  public TaskExecutionStatus $status;
  public TaskExecutionArn $task_execution_arn;

  public function __construct(shape(
  ?'status' => TaskExecutionStatus,
  ?'task_execution_arn' => TaskExecutionArn,
  ) $s = shape()) {
    $this->status = $status ?? "";
    $this->task_execution_arn = $task_execution_arn ?? "";
  }
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

  public function __construct(shape(
  ?'error_code' => string,
  ?'error_detail' => string,
  ?'prepare_duration' => Duration,
  ?'prepare_status' => PhaseStatus,
  ?'total_duration' => Duration,
  ?'transfer_duration' => Duration,
  ?'transfer_status' => PhaseStatus,
  ?'verify_duration' => Duration,
  ?'verify_status' => PhaseStatus,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_detail = $error_detail ?? "";
    $this->prepare_duration = $prepare_duration ?? 0;
    $this->prepare_status = $prepare_status ?? "";
    $this->total_duration = $total_duration ?? 0;
    $this->transfer_duration = $transfer_duration ?? 0;
    $this->transfer_status = $transfer_status ?? "";
    $this->verify_duration = $verify_duration ?? 0;
    $this->verify_status = $verify_status ?? "";
  }
}

type TaskExecutionStatus = string;

type TaskList = vec<TaskListEntry>;

class TaskListEntry {
  public TagValue $name;
  public TaskStatus $status;
  public TaskArn $task_arn;

  public function __construct(shape(
  ?'name' => TagValue,
  ?'status' => TaskStatus,
  ?'task_arn' => TaskArn,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->status = $status ?? "";
    $this->task_arn = $task_arn ?? "";
  }
}

type TaskQueueing = string;

class TaskSchedule {
  public ScheduleExpressionCron $schedule_expression;

  public function __construct(shape(
  ?'schedule_expression' => ScheduleExpressionCron,
  ) $s = shape()) {
    $this->schedule_expression = $schedule_expression ?? "";
  }
}

type TaskStatus = string;

type Time = int;

type Uid = string;

class UntagResourceRequest {
  public TagKeyList $keys;
  public TaggableResourceArn $resource_arn;

  public function __construct(shape(
  ?'keys' => TagKeyList,
  ?'resource_arn' => TaggableResourceArn,
  ) $s = shape()) {
    $this->keys = $keys ?? [];
    $this->resource_arn = $resource_arn ?? "";
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateAgentRequest {
  public AgentArn $agent_arn;
  public TagValue $name;

  public function __construct(shape(
  ?'agent_arn' => AgentArn,
  ?'name' => TagValue,
  ) $s = shape()) {
    $this->agent_arn = $agent_arn ?? "";
    $this->name = $name ?? "";
  }
}

class UpdateAgentResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateTaskRequest {
  public LogGroupArn $cloud_watch_log_group_arn;
  public FilterList $excludes;
  public TagValue $name;
  public Options $options;
  public TaskSchedule $schedule;
  public TaskArn $task_arn;

  public function __construct(shape(
  ?'cloud_watch_log_group_arn' => LogGroupArn,
  ?'excludes' => FilterList,
  ?'name' => TagValue,
  ?'options' => Options,
  ?'schedule' => TaskSchedule,
  ?'task_arn' => TaskArn,
  ) $s = shape()) {
    $this->cloud_watch_log_group_arn = $cloud_watch_log_group_arn ?? "";
    $this->excludes = $excludes ?? [];
    $this->name = $name ?? "";
    $this->options = $options ?? null;
    $this->schedule = $schedule ?? null;
    $this->task_arn = $task_arn ?? "";
  }
}

class UpdateTaskResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type VerifyMode = string;

type VpcEndpointId = string;

type long = int;

type string = string;

