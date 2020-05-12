<?hh // strict
namespace slack\aws\elasticfilesystem;

interface EFS {
  public function CreateAccessPoint(CreateAccessPointRequest $in): Awaitable<\Errors\Result<AccessPointDescription>>;
  public function CreateFileSystem(CreateFileSystemRequest $in): Awaitable<\Errors\Result<FileSystemDescription>>;
  public function CreateMountTarget(CreateMountTargetRequest $in): Awaitable<\Errors\Result<MountTargetDescription>>;
  public function CreateTags(CreateTagsRequest $in): Awaitable<\Errors\Error>;
  public function DeleteAccessPoint(DeleteAccessPointRequest $in): Awaitable<\Errors\Error>;
  public function DeleteFileSystem(DeleteFileSystemRequest $in): Awaitable<\Errors\Error>;
  public function DeleteFileSystemPolicy(DeleteFileSystemPolicyRequest $in): Awaitable<\Errors\Error>;
  public function DeleteMountTarget(DeleteMountTargetRequest $in): Awaitable<\Errors\Error>;
  public function DeleteTags(DeleteTagsRequest $in): Awaitable<\Errors\Error>;
  public function DescribeAccessPoints(DescribeAccessPointsRequest $in): Awaitable<\Errors\Result<DescribeAccessPointsResponse>>;
  public function DescribeFileSystemPolicy(DescribeFileSystemPolicyRequest $in): Awaitable<\Errors\Result<FileSystemPolicyDescription>>;
  public function DescribeFileSystems(DescribeFileSystemsRequest $in): Awaitable<\Errors\Result<DescribeFileSystemsResponse>>;
  public function DescribeLifecycleConfiguration(DescribeLifecycleConfigurationRequest $in): Awaitable<\Errors\Result<LifecycleConfigurationDescription>>;
  public function DescribeMountTargetSecurityGroups(DescribeMountTargetSecurityGroupsRequest $in): Awaitable<\Errors\Result<DescribeMountTargetSecurityGroupsResponse>>;
  public function DescribeMountTargets(DescribeMountTargetsRequest $in): Awaitable<\Errors\Result<DescribeMountTargetsResponse>>;
  public function DescribeTags(DescribeTagsRequest $in): Awaitable<\Errors\Result<DescribeTagsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ModifyMountTargetSecurityGroups(ModifyMountTargetSecurityGroupsRequest $in): Awaitable<\Errors\Error>;
  public function PutFileSystemPolicy(PutFileSystemPolicyRequest $in): Awaitable<\Errors\Result<FileSystemPolicyDescription>>;
  public function PutLifecycleConfiguration(PutLifecycleConfigurationRequest $in): Awaitable<\Errors\Result<LifecycleConfigurationDescription>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UpdateFileSystem(UpdateFileSystemRequest $in): Awaitable<\Errors\Result<FileSystemDescription>>;
}

class AccessPointAlreadyExists {
  public ?AccessPointId $access_point_id;
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'access_point_id' => ?AccessPointId,
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->access_point_id = $s['access_point_id'] ?? '';
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type AccessPointArn = string;

class AccessPointDescription {
  public ?AccessPointArn $access_point_arn;
  public ?AccessPointId $access_point_id;
  public ?ClientToken $client_token;
  public ?FileSystemId $file_system_id;
  public ?LifeCycleState $life_cycle_state;
  public ?Name $name;
  public ?AwsAccountId $owner_id;
  public ?PosixUser $posix_user;
  public ?RootDirectory $root_directory;
  public ?Tags $tags;

  public function __construct(shape(
    ?'access_point_arn' => ?AccessPointArn,
    ?'access_point_id' => ?AccessPointId,
    ?'client_token' => ?ClientToken,
    ?'file_system_id' => ?FileSystemId,
    ?'life_cycle_state' => ?LifeCycleState,
    ?'name' => ?Name,
    ?'owner_id' => ?AwsAccountId,
    ?'posix_user' => ?PosixUser,
    ?'root_directory' => ?RootDirectory,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->access_point_arn = $s['access_point_arn'] ?? '';
    $this->access_point_id = $s['access_point_id'] ?? '';
    $this->client_token = $s['client_token'] ?? '';
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->life_cycle_state = $s['life_cycle_state'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->posix_user = $s['posix_user'] ?? null;
    $this->root_directory = $s['root_directory'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
  }
}

type AccessPointDescriptions = vec<AccessPointDescription>;

type AccessPointId = string;

class AccessPointLimitExceeded {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class AccessPointNotFound {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type AvailabilityZoneId = string;

type AvailabilityZoneName = string;

type AwsAccountId = string;

class BadRequest {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type BypassPolicyLockoutSafetyCheck = bool;

type ClientToken = string;

class CreateAccessPointRequest {
  public ?ClientToken $client_token;
  public ?FileSystemId $file_system_id;
  public ?PosixUser $posix_user;
  public ?RootDirectory $root_directory;
  public ?Tags $tags;

  public function __construct(shape(
    ?'client_token' => ?ClientToken,
    ?'file_system_id' => ?FileSystemId,
    ?'posix_user' => ?PosixUser,
    ?'root_directory' => ?RootDirectory,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->posix_user = $s['posix_user'] ?? null;
    $this->root_directory = $s['root_directory'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateFileSystemRequest {
  public ?CreationToken $creation_token;
  public ?Encrypted $encrypted;
  public ?KmsKeyId $kms_key_id;
  public ?PerformanceMode $performance_mode;
  public ?ProvisionedThroughputInMibps $provisioned_throughput_in_mibps;
  public ?Tags $tags;
  public ?ThroughputMode $throughput_mode;

  public function __construct(shape(
    ?'creation_token' => ?CreationToken,
    ?'encrypted' => ?Encrypted,
    ?'kms_key_id' => ?KmsKeyId,
    ?'performance_mode' => ?PerformanceMode,
    ?'provisioned_throughput_in_mibps' => ?ProvisionedThroughputInMibps,
    ?'tags' => ?Tags,
    ?'throughput_mode' => ?ThroughputMode,
  ) $s = shape()) {
    $this->creation_token = $s['creation_token'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->performance_mode = $s['performance_mode'] ?? '';
    $this->provisioned_throughput_in_mibps = $s['provisioned_throughput_in_mibps'] ?? 0.0;
    $this->tags = $s['tags'] ?? vec[];
    $this->throughput_mode = $s['throughput_mode'] ?? '';
  }
}

class CreateMountTargetRequest {
  public ?FileSystemId $file_system_id;
  public ?IpAddress $ip_address;
  public ?SecurityGroups $security_groups;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'file_system_id' => ?FileSystemId,
    ?'ip_address' => ?IpAddress,
    ?'security_groups' => ?SecurityGroups,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

class CreateTagsRequest {
  public ?FileSystemId $file_system_id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'file_system_id' => ?FileSystemId,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreationInfo {
  public ?OwnerGid $owner_gid;
  public ?OwnerUid $owner_uid;
  public ?Permissions $permissions;

  public function __construct(shape(
    ?'owner_gid' => ?OwnerGid,
    ?'owner_uid' => ?OwnerUid,
    ?'permissions' => ?Permissions,
  ) $s = shape()) {
    $this->owner_gid = $s['owner_gid'] ?? 0;
    $this->owner_uid = $s['owner_uid'] ?? 0;
    $this->permissions = $s['permissions'] ?? '';
  }
}

type CreationToken = string;

class DeleteAccessPointRequest {
  public ?AccessPointId $access_point_id;

  public function __construct(shape(
    ?'access_point_id' => ?AccessPointId,
  ) $s = shape()) {
    $this->access_point_id = $s['access_point_id'] ?? '';
  }
}

class DeleteFileSystemPolicyRequest {
  public ?FileSystemId $file_system_id;

  public function __construct(shape(
    ?'file_system_id' => ?FileSystemId,
  ) $s = shape()) {
    $this->file_system_id = $s['file_system_id'] ?? '';
  }
}

class DeleteFileSystemRequest {
  public ?FileSystemId $file_system_id;

  public function __construct(shape(
    ?'file_system_id' => ?FileSystemId,
  ) $s = shape()) {
    $this->file_system_id = $s['file_system_id'] ?? '';
  }
}

class DeleteMountTargetRequest {
  public ?MountTargetId $mount_target_id;

  public function __construct(shape(
    ?'mount_target_id' => ?MountTargetId,
  ) $s = shape()) {
    $this->mount_target_id = $s['mount_target_id'] ?? '';
  }
}

class DeleteTagsRequest {
  public ?FileSystemId $file_system_id;
  public ?TagKeys $tag_keys;

  public function __construct(shape(
    ?'file_system_id' => ?FileSystemId,
    ?'tag_keys' => ?TagKeys,
  ) $s = shape()) {
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class DependencyTimeout {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class DescribeAccessPointsRequest {
  public ?AccessPointId $access_point_id;
  public ?FileSystemId $file_system_id;
  public ?MaxResults $max_results;
  public ?Token $next_token;

  public function __construct(shape(
    ?'access_point_id' => ?AccessPointId,
    ?'file_system_id' => ?FileSystemId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->access_point_id = $s['access_point_id'] ?? '';
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeAccessPointsResponse {
  public ?AccessPointDescriptions $access_points;
  public ?Token $next_token;

  public function __construct(shape(
    ?'access_points' => ?AccessPointDescriptions,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->access_points = $s['access_points'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeFileSystemPolicyRequest {
  public ?FileSystemId $file_system_id;

  public function __construct(shape(
    ?'file_system_id' => ?FileSystemId,
  ) $s = shape()) {
    $this->file_system_id = $s['file_system_id'] ?? '';
  }
}

class DescribeFileSystemsRequest {
  public ?CreationToken $creation_token;
  public ?FileSystemId $file_system_id;
  public ?Marker $marker;
  public ?MaxItems $max_items;

  public function __construct(shape(
    ?'creation_token' => ?CreationToken,
    ?'file_system_id' => ?FileSystemId,
    ?'marker' => ?Marker,
    ?'max_items' => ?MaxItems,
  ) $s = shape()) {
    $this->creation_token = $s['creation_token'] ?? '';
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class DescribeFileSystemsResponse {
  public ?FileSystemDescriptions $file_systems;
  public ?Marker $marker;
  public ?Marker $next_marker;

  public function __construct(shape(
    ?'file_systems' => ?FileSystemDescriptions,
    ?'marker' => ?Marker,
    ?'next_marker' => ?Marker,
  ) $s = shape()) {
    $this->file_systems = $s['file_systems'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class DescribeLifecycleConfigurationRequest {
  public ?FileSystemId $file_system_id;

  public function __construct(shape(
    ?'file_system_id' => ?FileSystemId,
  ) $s = shape()) {
    $this->file_system_id = $s['file_system_id'] ?? '';
  }
}

class DescribeMountTargetSecurityGroupsRequest {
  public ?MountTargetId $mount_target_id;

  public function __construct(shape(
    ?'mount_target_id' => ?MountTargetId,
  ) $s = shape()) {
    $this->mount_target_id = $s['mount_target_id'] ?? '';
  }
}

class DescribeMountTargetSecurityGroupsResponse {
  public ?SecurityGroups $security_groups;

  public function __construct(shape(
    ?'security_groups' => ?SecurityGroups,
  ) $s = shape()) {
    $this->security_groups = $s['security_groups'] ?? vec[];
  }
}

class DescribeMountTargetsRequest {
  public ?AccessPointId $access_point_id;
  public ?FileSystemId $file_system_id;
  public ?Marker $marker;
  public ?MaxItems $max_items;
  public ?MountTargetId $mount_target_id;

  public function __construct(shape(
    ?'access_point_id' => ?AccessPointId,
    ?'file_system_id' => ?FileSystemId,
    ?'marker' => ?Marker,
    ?'max_items' => ?MaxItems,
    ?'mount_target_id' => ?MountTargetId,
  ) $s = shape()) {
    $this->access_point_id = $s['access_point_id'] ?? '';
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->mount_target_id = $s['mount_target_id'] ?? '';
  }
}

class DescribeMountTargetsResponse {
  public ?Marker $marker;
  public ?MountTargetDescriptions $mount_targets;
  public ?Marker $next_marker;

  public function __construct(shape(
    ?'marker' => ?Marker,
    ?'mount_targets' => ?MountTargetDescriptions,
    ?'next_marker' => ?Marker,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->mount_targets = $s['mount_targets'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class DescribeTagsRequest {
  public ?FileSystemId $file_system_id;
  public ?Marker $marker;
  public ?MaxItems $max_items;

  public function __construct(shape(
    ?'file_system_id' => ?FileSystemId,
    ?'marker' => ?Marker,
    ?'max_items' => ?MaxItems,
  ) $s = shape()) {
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class DescribeTagsResponse {
  public ?Marker $marker;
  public ?Marker $next_marker;
  public ?Tags $tags;

  public function __construct(shape(
    ?'marker' => ?Marker,
    ?'next_marker' => ?Marker,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->next_marker = $s['next_marker'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type Encrypted = bool;

type ErrorCode = string;

type ErrorMessage = string;

class FileSystemAlreadyExists {
  public ?ErrorCode $error_code;
  public ?FileSystemId $file_system_id;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'file_system_id' => ?FileSystemId,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class FileSystemDescription {
  public ?Timestamp $creation_time;
  public ?CreationToken $creation_token;
  public ?Encrypted $encrypted;
  public ?FileSystemId $file_system_id;
  public ?KmsKeyId $kms_key_id;
  public ?LifeCycleState $life_cycle_state;
  public ?TagValue $name;
  public ?MountTargetCount $number_of_mount_targets;
  public ?AwsAccountId $owner_id;
  public ?PerformanceMode $performance_mode;
  public ?ProvisionedThroughputInMibps $provisioned_throughput_in_mibps;
  public ?FileSystemSize $size_in_bytes;
  public ?Tags $tags;
  public ?ThroughputMode $throughput_mode;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'creation_token' => ?CreationToken,
    ?'encrypted' => ?Encrypted,
    ?'file_system_id' => ?FileSystemId,
    ?'kms_key_id' => ?KmsKeyId,
    ?'life_cycle_state' => ?LifeCycleState,
    ?'name' => ?TagValue,
    ?'number_of_mount_targets' => ?MountTargetCount,
    ?'owner_id' => ?AwsAccountId,
    ?'performance_mode' => ?PerformanceMode,
    ?'provisioned_throughput_in_mibps' => ?ProvisionedThroughputInMibps,
    ?'size_in_bytes' => ?FileSystemSize,
    ?'tags' => ?Tags,
    ?'throughput_mode' => ?ThroughputMode,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->creation_token = $s['creation_token'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->life_cycle_state = $s['life_cycle_state'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->number_of_mount_targets = $s['number_of_mount_targets'] ?? 0;
    $this->owner_id = $s['owner_id'] ?? '';
    $this->performance_mode = $s['performance_mode'] ?? '';
    $this->provisioned_throughput_in_mibps = $s['provisioned_throughput_in_mibps'] ?? 0.0;
    $this->size_in_bytes = $s['size_in_bytes'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->throughput_mode = $s['throughput_mode'] ?? '';
  }
}

type FileSystemDescriptions = vec<FileSystemDescription>;

type FileSystemId = string;

class FileSystemInUse {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class FileSystemLimitExceeded {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class FileSystemNotFound {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type FileSystemNullableSizeValue = int;

class FileSystemPolicyDescription {
  public ?FileSystemId $file_system_id;
  public ?Policy $policy;

  public function __construct(shape(
    ?'file_system_id' => ?FileSystemId,
    ?'policy' => ?Policy,
  ) $s = shape()) {
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->policy = $s['policy'] ?? '';
  }
}

class FileSystemSize {
  public ?Timestamp $timestamp;
  public ?FileSystemSizeValue $value;
  public ?FileSystemNullableSizeValue $value_in_ia;
  public ?FileSystemNullableSizeValue $value_in_standard;

  public function __construct(shape(
    ?'timestamp' => ?Timestamp,
    ?'value' => ?FileSystemSizeValue,
    ?'value_in_ia' => ?FileSystemNullableSizeValue,
    ?'value_in_standard' => ?FileSystemNullableSizeValue,
  ) $s = shape()) {
    $this->timestamp = $s['timestamp'] ?? 0;
    $this->value = $s['value'] ?? 0;
    $this->value_in_ia = $s['value_in_ia'] ?? 0;
    $this->value_in_standard = $s['value_in_standard'] ?? 0;
  }
}

type FileSystemSizeValue = int;

type Gid = int;

class IncorrectFileSystemLifeCycleState {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class IncorrectMountTargetState {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class InsufficientThroughputCapacity {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class InternalServerError {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class InvalidPolicyException {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type IpAddress = string;

class IpAddressInUse {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type KmsKeyId = string;

type LifeCycleState = string;

class LifecycleConfigurationDescription {
  public ?LifecyclePolicies $lifecycle_policies;

  public function __construct(shape(
    ?'lifecycle_policies' => ?LifecyclePolicies,
  ) $s = shape()) {
    $this->lifecycle_policies = $s['lifecycle_policies'] ?? vec[];
  }
}

type LifecyclePolicies = vec<LifecyclePolicy>;

class LifecyclePolicy {
  public ?TransitionToIARules $transition_to_ia;

  public function __construct(shape(
    ?'transition_to_ia' => ?TransitionToIARules,
  ) $s = shape()) {
    $this->transition_to_ia = $s['transition_to_ia'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?MaxResults $max_results;
  public ?Token $next_token;
  public ?ResourceId $resource_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?Token,
    ?'resource_id' => ?ResourceId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?Token $next_token;
  public ?Tags $tags;

  public function __construct(shape(
    ?'next_token' => ?Token,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type Marker = string;

type MaxItems = int;

type MaxResults = int;

class ModifyMountTargetSecurityGroupsRequest {
  public ?MountTargetId $mount_target_id;
  public ?SecurityGroups $security_groups;

  public function __construct(shape(
    ?'mount_target_id' => ?MountTargetId,
    ?'security_groups' => ?SecurityGroups,
  ) $s = shape()) {
    $this->mount_target_id = $s['mount_target_id'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
  }
}

class MountTargetConflict {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type MountTargetCount = int;

class MountTargetDescription {
  public ?AvailabilityZoneId $availability_zone_id;
  public ?AvailabilityZoneName $availability_zone_name;
  public ?FileSystemId $file_system_id;
  public ?IpAddress $ip_address;
  public ?LifeCycleState $life_cycle_state;
  public ?MountTargetId $mount_target_id;
  public ?NetworkInterfaceId $network_interface_id;
  public ?AwsAccountId $owner_id;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'availability_zone_id' => ?AvailabilityZoneId,
    ?'availability_zone_name' => ?AvailabilityZoneName,
    ?'file_system_id' => ?FileSystemId,
    ?'ip_address' => ?IpAddress,
    ?'life_cycle_state' => ?LifeCycleState,
    ?'mount_target_id' => ?MountTargetId,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'owner_id' => ?AwsAccountId,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->availability_zone_id = $s['availability_zone_id'] ?? '';
    $this->availability_zone_name = $s['availability_zone_name'] ?? '';
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
    $this->life_cycle_state = $s['life_cycle_state'] ?? '';
    $this->mount_target_id = $s['mount_target_id'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

type MountTargetDescriptions = vec<MountTargetDescription>;

type MountTargetId = string;

class MountTargetNotFound {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type Name = string;

type NetworkInterfaceId = string;

class NetworkInterfaceLimitExceeded {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class NoFreeAddressesInSubnet {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type OwnerGid = int;

type OwnerUid = int;

type Path = string;

type PerformanceMode = string;

type Permissions = string;

type Policy = string;

class PolicyNotFound {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class PosixUser {
  public ?Gid $gid;
  public ?SecondaryGids $secondary_gids;
  public ?Uid $uid;

  public function __construct(shape(
    ?'gid' => ?Gid,
    ?'secondary_gids' => ?SecondaryGids,
    ?'uid' => ?Uid,
  ) $s = shape()) {
    $this->gid = $s['gid'] ?? 0;
    $this->secondary_gids = $s['secondary_gids'] ?? vec[];
    $this->uid = $s['uid'] ?? 0;
  }
}

type ProvisionedThroughputInMibps = float;

class PutFileSystemPolicyRequest {
  public ?BypassPolicyLockoutSafetyCheck $bypass_policy_lockout_safety_check;
  public ?FileSystemId $file_system_id;
  public ?Policy $policy;

  public function __construct(shape(
    ?'bypass_policy_lockout_safety_check' => ?BypassPolicyLockoutSafetyCheck,
    ?'file_system_id' => ?FileSystemId,
    ?'policy' => ?Policy,
  ) $s = shape()) {
    $this->bypass_policy_lockout_safety_check = $s['bypass_policy_lockout_safety_check'] ?? false;
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->policy = $s['policy'] ?? '';
  }
}

class PutLifecycleConfigurationRequest {
  public ?FileSystemId $file_system_id;
  public ?LifecyclePolicies $lifecycle_policies;

  public function __construct(shape(
    ?'file_system_id' => ?FileSystemId,
    ?'lifecycle_policies' => ?LifecyclePolicies,
  ) $s = shape()) {
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->lifecycle_policies = $s['lifecycle_policies'] ?? vec[];
  }
}

type ResourceId = string;

class RootDirectory {
  public ?CreationInfo $creation_info;
  public ?Path $path;

  public function __construct(shape(
    ?'creation_info' => ?CreationInfo,
    ?'path' => ?Path,
  ) $s = shape()) {
    $this->creation_info = $s['creation_info'] ?? null;
    $this->path = $s['path'] ?? '';
  }
}

type SecondaryGids = vec<Gid>;

type SecurityGroup = string;

class SecurityGroupLimitExceeded {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class SecurityGroupNotFound {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type SecurityGroups = vec<SecurityGroup>;

type SubnetId = string;

class SubnetNotFound {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

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
  public ?ResourceId $resource_id;
  public ?Tags $tags;

  public function __construct(shape(
    ?'resource_id' => ?ResourceId,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type TagValue = string;

type Tags = vec<Tag>;

class ThroughputLimitExceeded {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type ThroughputMode = string;

type Timestamp = int;

type Token = string;

class TooManyRequests {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type TransitionToIARules = string;

type Uid = int;

class UnsupportedAvailabilityZone {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public ?ResourceId $resource_id;
  public ?TagKeys $tag_keys;

  public function __construct(shape(
    ?'resource_id' => ?ResourceId,
    ?'tag_keys' => ?TagKeys,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UpdateFileSystemRequest {
  public ?FileSystemId $file_system_id;
  public ?ProvisionedThroughputInMibps $provisioned_throughput_in_mibps;
  public ?ThroughputMode $throughput_mode;

  public function __construct(shape(
    ?'file_system_id' => ?FileSystemId,
    ?'provisioned_throughput_in_mibps' => ?ProvisionedThroughputInMibps,
    ?'throughput_mode' => ?ThroughputMode,
  ) $s = shape()) {
    $this->file_system_id = $s['file_system_id'] ?? '';
    $this->provisioned_throughput_in_mibps = $s['provisioned_throughput_in_mibps'] ?? 0.0;
    $this->throughput_mode = $s['throughput_mode'] ?? '';
  }
}

