<?hh // strict
namespace slack\aws\elasticfilesystem;

interface EFS {
  public function CreateAccessPoint(CreateAccessPointRequest): Awaitable<Errors\Result<AccessPointDescription>>;
  public function CreateFileSystem(CreateFileSystemRequest): Awaitable<Errors\Result<FileSystemDescription>>;
  public function CreateMountTarget(CreateMountTargetRequest): Awaitable<Errors\Result<MountTargetDescription>>;
  public function CreateTags(CreateTagsRequest): Awaitable<Errors\Error>;
  public function DeleteAccessPoint(DeleteAccessPointRequest): Awaitable<Errors\Error>;
  public function DeleteFileSystem(DeleteFileSystemRequest): Awaitable<Errors\Error>;
  public function DeleteFileSystemPolicy(DeleteFileSystemPolicyRequest): Awaitable<Errors\Error>;
  public function DeleteMountTarget(DeleteMountTargetRequest): Awaitable<Errors\Error>;
  public function DeleteTags(DeleteTagsRequest): Awaitable<Errors\Error>;
  public function DescribeAccessPoints(DescribeAccessPointsRequest): Awaitable<Errors\Result<DescribeAccessPointsResponse>>;
  public function DescribeFileSystemPolicy(DescribeFileSystemPolicyRequest): Awaitable<Errors\Result<FileSystemPolicyDescription>>;
  public function DescribeFileSystems(DescribeFileSystemsRequest): Awaitable<Errors\Result<DescribeFileSystemsResponse>>;
  public function DescribeLifecycleConfiguration(DescribeLifecycleConfigurationRequest): Awaitable<Errors\Result<LifecycleConfigurationDescription>>;
  public function DescribeMountTargetSecurityGroups(DescribeMountTargetSecurityGroupsRequest): Awaitable<Errors\Result<DescribeMountTargetSecurityGroupsResponse>>;
  public function DescribeMountTargets(DescribeMountTargetsRequest): Awaitable<Errors\Result<DescribeMountTargetsResponse>>;
  public function DescribeTags(DescribeTagsRequest): Awaitable<Errors\Result<DescribeTagsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ModifyMountTargetSecurityGroups(ModifyMountTargetSecurityGroupsRequest): Awaitable<Errors\Error>;
  public function PutFileSystemPolicy(PutFileSystemPolicyRequest): Awaitable<Errors\Result<FileSystemPolicyDescription>>;
  public function PutLifecycleConfiguration(PutLifecycleConfigurationRequest): Awaitable<Errors\Result<LifecycleConfigurationDescription>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateFileSystem(UpdateFileSystemRequest): Awaitable<Errors\Result<FileSystemDescription>>;
}

class AccessPointAlreadyExists {
  public AccessPointId $access_point_id;
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'access_point_id' => AccessPointId,
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->access_point_id = $access_point_id ?? "";
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

type AccessPointArn = string;

class AccessPointDescription {
  public AccessPointArn $access_point_arn;
  public AccessPointId $access_point_id;
  public ClientToken $client_token;
  public FileSystemId $file_system_id;
  public LifeCycleState $life_cycle_state;
  public Name $name;
  public AwsAccountId $owner_id;
  public PosixUser $posix_user;
  public RootDirectory $root_directory;
  public Tags $tags;

  public function __construct(shape(
  ?'access_point_arn' => AccessPointArn,
  ?'access_point_id' => AccessPointId,
  ?'client_token' => ClientToken,
  ?'file_system_id' => FileSystemId,
  ?'life_cycle_state' => LifeCycleState,
  ?'name' => Name,
  ?'owner_id' => AwsAccountId,
  ?'posix_user' => PosixUser,
  ?'root_directory' => RootDirectory,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->access_point_arn = $access_point_arn ?? "";
    $this->access_point_id = $access_point_id ?? "";
    $this->client_token = $client_token ?? "";
    $this->file_system_id = $file_system_id ?? "";
    $this->life_cycle_state = $life_cycle_state ?? "";
    $this->name = $name ?? "";
    $this->owner_id = $owner_id ?? ;
    $this->posix_user = $posix_user ?? null;
    $this->root_directory = $root_directory ?? null;
    $this->tags = $tags ?? [];
  }
}

type AccessPointDescriptions = vec<AccessPointDescription>;

type AccessPointId = string;

class AccessPointLimitExceeded {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

class AccessPointNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

type AvailabilityZoneId = string;

type AvailabilityZoneName = string;

type AwsAccountId = string;

class BadRequest {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

type BypassPolicyLockoutSafetyCheck = bool;

type ClientToken = string;

class CreateAccessPointRequest {
  public ClientToken $client_token;
  public FileSystemId $file_system_id;
  public PosixUser $posix_user;
  public RootDirectory $root_directory;
  public Tags $tags;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'file_system_id' => FileSystemId,
  ?'posix_user' => PosixUser,
  ?'root_directory' => RootDirectory,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->file_system_id = $file_system_id ?? "";
    $this->posix_user = $posix_user ?? null;
    $this->root_directory = $root_directory ?? null;
    $this->tags = $tags ?? [];
  }
}

class CreateFileSystemRequest {
  public CreationToken $creation_token;
  public Encrypted $encrypted;
  public KmsKeyId $kms_key_id;
  public PerformanceMode $performance_mode;
  public ProvisionedThroughputInMibps $provisioned_throughput_in_mibps;
  public Tags $tags;
  public ThroughputMode $throughput_mode;

  public function __construct(shape(
  ?'creation_token' => CreationToken,
  ?'encrypted' => Encrypted,
  ?'kms_key_id' => KmsKeyId,
  ?'performance_mode' => PerformanceMode,
  ?'provisioned_throughput_in_mibps' => ProvisionedThroughputInMibps,
  ?'tags' => Tags,
  ?'throughput_mode' => ThroughputMode,
  ) $s = shape()) {
    $this->creation_token = $creation_token ?? "";
    $this->encrypted = $encrypted ?? false;
    $this->kms_key_id = $kms_key_id ?? "";
    $this->performance_mode = $performance_mode ?? "";
    $this->provisioned_throughput_in_mibps = $provisioned_throughput_in_mibps ?? 0.0;
    $this->tags = $tags ?? [];
    $this->throughput_mode = $throughput_mode ?? "";
  }
}

class CreateMountTargetRequest {
  public FileSystemId $file_system_id;
  public IpAddress $ip_address;
  public SecurityGroups $security_groups;
  public SubnetId $subnet_id;

  public function __construct(shape(
  ?'file_system_id' => FileSystemId,
  ?'ip_address' => IpAddress,
  ?'security_groups' => SecurityGroups,
  ?'subnet_id' => SubnetId,
  ) $s = shape()) {
    $this->file_system_id = $file_system_id ?? "";
    $this->ip_address = $ip_address ?? "";
    $this->security_groups = $security_groups ?? [];
    $this->subnet_id = $subnet_id ?? "";
  }
}

class CreateTagsRequest {
  public FileSystemId $file_system_id;
  public Tags $tags;

  public function __construct(shape(
  ?'file_system_id' => FileSystemId,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->file_system_id = $file_system_id ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreationInfo {
  public OwnerGid $owner_gid;
  public OwnerUid $owner_uid;
  public Permissions $permissions;

  public function __construct(shape(
  ?'owner_gid' => OwnerGid,
  ?'owner_uid' => OwnerUid,
  ?'permissions' => Permissions,
  ) $s = shape()) {
    $this->owner_gid = $owner_gid ?? 0;
    $this->owner_uid = $owner_uid ?? 0;
    $this->permissions = $permissions ?? "";
  }
}

type CreationToken = string;

class DeleteAccessPointRequest {
  public AccessPointId $access_point_id;

  public function __construct(shape(
  ?'access_point_id' => AccessPointId,
  ) $s = shape()) {
    $this->access_point_id = $access_point_id ?? "";
  }
}

class DeleteFileSystemPolicyRequest {
  public FileSystemId $file_system_id;

  public function __construct(shape(
  ?'file_system_id' => FileSystemId,
  ) $s = shape()) {
    $this->file_system_id = $file_system_id ?? "";
  }
}

class DeleteFileSystemRequest {
  public FileSystemId $file_system_id;

  public function __construct(shape(
  ?'file_system_id' => FileSystemId,
  ) $s = shape()) {
    $this->file_system_id = $file_system_id ?? "";
  }
}

class DeleteMountTargetRequest {
  public MountTargetId $mount_target_id;

  public function __construct(shape(
  ?'mount_target_id' => MountTargetId,
  ) $s = shape()) {
    $this->mount_target_id = $mount_target_id ?? "";
  }
}

class DeleteTagsRequest {
  public FileSystemId $file_system_id;
  public TagKeys $tag_keys;

  public function __construct(shape(
  ?'file_system_id' => FileSystemId,
  ?'tag_keys' => TagKeys,
  ) $s = shape()) {
    $this->file_system_id = $file_system_id ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class DependencyTimeout {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

class DescribeAccessPointsRequest {
  public AccessPointId $access_point_id;
  public FileSystemId $file_system_id;
  public MaxResults $max_results;
  public Token $next_token;

  public function __construct(shape(
  ?'access_point_id' => AccessPointId,
  ?'file_system_id' => FileSystemId,
  ?'max_results' => MaxResults,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->access_point_id = $access_point_id ?? "";
    $this->file_system_id = $file_system_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeAccessPointsResponse {
  public AccessPointDescriptions $access_points;
  public Token $next_token;

  public function __construct(shape(
  ?'access_points' => AccessPointDescriptions,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->access_points = $access_points ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeFileSystemPolicyRequest {
  public FileSystemId $file_system_id;

  public function __construct(shape(
  ?'file_system_id' => FileSystemId,
  ) $s = shape()) {
    $this->file_system_id = $file_system_id ?? "";
  }
}

class DescribeFileSystemsRequest {
  public CreationToken $creation_token;
  public FileSystemId $file_system_id;
  public Marker $marker;
  public MaxItems $max_items;

  public function __construct(shape(
  ?'creation_token' => CreationToken,
  ?'file_system_id' => FileSystemId,
  ?'marker' => Marker,
  ?'max_items' => MaxItems,
  ) $s = shape()) {
    $this->creation_token = $creation_token ?? "";
    $this->file_system_id = $file_system_id ?? "";
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
  }
}

class DescribeFileSystemsResponse {
  public FileSystemDescriptions $file_systems;
  public Marker $marker;
  public Marker $next_marker;

  public function __construct(shape(
  ?'file_systems' => FileSystemDescriptions,
  ?'marker' => Marker,
  ?'next_marker' => Marker,
  ) $s = shape()) {
    $this->file_systems = $file_systems ?? ;
    $this->marker = $marker ?? "";
    $this->next_marker = $next_marker ?? ;
  }
}

class DescribeLifecycleConfigurationRequest {
  public FileSystemId $file_system_id;

  public function __construct(shape(
  ?'file_system_id' => FileSystemId,
  ) $s = shape()) {
    $this->file_system_id = $file_system_id ?? "";
  }
}

class DescribeMountTargetSecurityGroupsRequest {
  public MountTargetId $mount_target_id;

  public function __construct(shape(
  ?'mount_target_id' => MountTargetId,
  ) $s = shape()) {
    $this->mount_target_id = $mount_target_id ?? "";
  }
}

class DescribeMountTargetSecurityGroupsResponse {
  public SecurityGroups $security_groups;

  public function __construct(shape(
  ?'security_groups' => SecurityGroups,
  ) $s = shape()) {
    $this->security_groups = $security_groups ?? [];
  }
}

class DescribeMountTargetsRequest {
  public AccessPointId $access_point_id;
  public FileSystemId $file_system_id;
  public Marker $marker;
  public MaxItems $max_items;
  public MountTargetId $mount_target_id;

  public function __construct(shape(
  ?'access_point_id' => AccessPointId,
  ?'file_system_id' => FileSystemId,
  ?'marker' => Marker,
  ?'max_items' => MaxItems,
  ?'mount_target_id' => MountTargetId,
  ) $s = shape()) {
    $this->access_point_id = $access_point_id ?? "";
    $this->file_system_id = $file_system_id ?? "";
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->mount_target_id = $mount_target_id ?? "";
  }
}

class DescribeMountTargetsResponse {
  public Marker $marker;
  public MountTargetDescriptions $mount_targets;
  public Marker $next_marker;

  public function __construct(shape(
  ?'marker' => Marker,
  ?'mount_targets' => MountTargetDescriptions,
  ?'next_marker' => Marker,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->mount_targets = $mount_targets ?? ;
    $this->next_marker = $next_marker ?? ;
  }
}

class DescribeTagsRequest {
  public FileSystemId $file_system_id;
  public Marker $marker;
  public MaxItems $max_items;

  public function __construct(shape(
  ?'file_system_id' => FileSystemId,
  ?'marker' => Marker,
  ?'max_items' => MaxItems,
  ) $s = shape()) {
    $this->file_system_id = $file_system_id ?? "";
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
  }
}

class DescribeTagsResponse {
  public Marker $marker;
  public Marker $next_marker;
  public Tags $tags;

  public function __construct(shape(
  ?'marker' => Marker,
  ?'next_marker' => Marker,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->next_marker = $next_marker ?? ;
    $this->tags = $tags ?? [];
  }
}

type Encrypted = bool;

type ErrorCode = string;

type ErrorMessage = string;

class FileSystemAlreadyExists {
  public ErrorCode $error_code;
  public FileSystemId $file_system_id;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'file_system_id' => FileSystemId,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->file_system_id = $file_system_id ?? "";
    $this->message = $message ?? ;
  }
}

class FileSystemDescription {
  public Timestamp $creation_time;
  public CreationToken $creation_token;
  public Encrypted $encrypted;
  public FileSystemId $file_system_id;
  public KmsKeyId $kms_key_id;
  public LifeCycleState $life_cycle_state;
  public TagValue $name;
  public MountTargetCount $number_of_mount_targets;
  public AwsAccountId $owner_id;
  public PerformanceMode $performance_mode;
  public ProvisionedThroughputInMibps $provisioned_throughput_in_mibps;
  public FileSystemSize $size_in_bytes;
  public Tags $tags;
  public ThroughputMode $throughput_mode;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'creation_token' => CreationToken,
  ?'encrypted' => Encrypted,
  ?'file_system_id' => FileSystemId,
  ?'kms_key_id' => KmsKeyId,
  ?'life_cycle_state' => LifeCycleState,
  ?'name' => TagValue,
  ?'number_of_mount_targets' => MountTargetCount,
  ?'owner_id' => AwsAccountId,
  ?'performance_mode' => PerformanceMode,
  ?'provisioned_throughput_in_mibps' => ProvisionedThroughputInMibps,
  ?'size_in_bytes' => FileSystemSize,
  ?'tags' => Tags,
  ?'throughput_mode' => ThroughputMode,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->creation_token = $creation_token ?? "";
    $this->encrypted = $encrypted ?? false;
    $this->file_system_id = $file_system_id ?? "";
    $this->kms_key_id = $kms_key_id ?? "";
    $this->life_cycle_state = $life_cycle_state ?? "";
    $this->name = $name ?? "";
    $this->number_of_mount_targets = $number_of_mount_targets ?? ;
    $this->owner_id = $owner_id ?? ;
    $this->performance_mode = $performance_mode ?? "";
    $this->provisioned_throughput_in_mibps = $provisioned_throughput_in_mibps ?? 0.0;
    $this->size_in_bytes = $size_in_bytes ?? ;
    $this->tags = $tags ?? [];
    $this->throughput_mode = $throughput_mode ?? "";
  }
}

type FileSystemDescriptions = vec<FileSystemDescription>;

type FileSystemId = string;

class FileSystemInUse {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

class FileSystemLimitExceeded {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

class FileSystemNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

type FileSystemNullableSizeValue = int;

class FileSystemPolicyDescription {
  public FileSystemId $file_system_id;
  public Policy $policy;

  public function __construct(shape(
  ?'file_system_id' => FileSystemId,
  ?'policy' => Policy,
  ) $s = shape()) {
    $this->file_system_id = $file_system_id ?? "";
    $this->policy = $policy ?? "";
  }
}

class FileSystemSize {
  public Timestamp $timestamp;
  public FileSystemSizeValue $value;
  public FileSystemNullableSizeValue $value_in_ia;
  public FileSystemNullableSizeValue $value_in_standard;

  public function __construct(shape(
  ?'timestamp' => Timestamp,
  ?'value' => FileSystemSizeValue,
  ?'value_in_ia' => FileSystemNullableSizeValue,
  ?'value_in_standard' => FileSystemNullableSizeValue,
  ) $s = shape()) {
    $this->timestamp = $timestamp ?? 0;
    $this->value = $value ?? ;
    $this->value_in_ia = $value_in_ia ?? ;
    $this->value_in_standard = $value_in_standard ?? ;
  }
}

type FileSystemSizeValue = int;

type Gid = int;

class IncorrectFileSystemLifeCycleState {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

class IncorrectMountTargetState {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

class InsufficientThroughputCapacity {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

class InternalServerError {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

class InvalidPolicyException {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

type IpAddress = string;

class IpAddressInUse {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

type KmsKeyId = string;

type LifeCycleState = string;

class LifecycleConfigurationDescription {
  public LifecyclePolicies $lifecycle_policies;

  public function __construct(shape(
  ?'lifecycle_policies' => LifecyclePolicies,
  ) $s = shape()) {
    $this->lifecycle_policies = $lifecycle_policies ?? [];
  }
}

type LifecyclePolicies = vec<LifecyclePolicy>;

class LifecyclePolicy {
  public TransitionToIARules $transition_to_ia;

  public function __construct(shape(
  ?'transition_to_ia' => TransitionToIARules,
  ) $s = shape()) {
    $this->transition_to_ia = $transition_to_ia ?? ;
  }
}

class ListTagsForResourceRequest {
  public MaxResults $max_results;
  public Token $next_token;
  public ResourceId $resource_id;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => Token,
  ?'resource_id' => ResourceId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->resource_id = $resource_id ?? "";
  }
}

class ListTagsForResourceResponse {
  public Token $next_token;
  public Tags $tags;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->tags = $tags ?? [];
  }
}

type Marker = string;

type MaxItems = int;

type MaxResults = int;

class ModifyMountTargetSecurityGroupsRequest {
  public MountTargetId $mount_target_id;
  public SecurityGroups $security_groups;

  public function __construct(shape(
  ?'mount_target_id' => MountTargetId,
  ?'security_groups' => SecurityGroups,
  ) $s = shape()) {
    $this->mount_target_id = $mount_target_id ?? "";
    $this->security_groups = $security_groups ?? [];
  }
}

class MountTargetConflict {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

type MountTargetCount = int;

class MountTargetDescription {
  public AvailabilityZoneId $availability_zone_id;
  public AvailabilityZoneName $availability_zone_name;
  public FileSystemId $file_system_id;
  public IpAddress $ip_address;
  public LifeCycleState $life_cycle_state;
  public MountTargetId $mount_target_id;
  public NetworkInterfaceId $network_interface_id;
  public AwsAccountId $owner_id;
  public SubnetId $subnet_id;

  public function __construct(shape(
  ?'availability_zone_id' => AvailabilityZoneId,
  ?'availability_zone_name' => AvailabilityZoneName,
  ?'file_system_id' => FileSystemId,
  ?'ip_address' => IpAddress,
  ?'life_cycle_state' => LifeCycleState,
  ?'mount_target_id' => MountTargetId,
  ?'network_interface_id' => NetworkInterfaceId,
  ?'owner_id' => AwsAccountId,
  ?'subnet_id' => SubnetId,
  ) $s = shape()) {
    $this->availability_zone_id = $availability_zone_id ?? "";
    $this->availability_zone_name = $availability_zone_name ?? "";
    $this->file_system_id = $file_system_id ?? "";
    $this->ip_address = $ip_address ?? "";
    $this->life_cycle_state = $life_cycle_state ?? "";
    $this->mount_target_id = $mount_target_id ?? "";
    $this->network_interface_id = $network_interface_id ?? "";
    $this->owner_id = $owner_id ?? ;
    $this->subnet_id = $subnet_id ?? "";
  }
}

type MountTargetDescriptions = vec<MountTargetDescription>;

type MountTargetId = string;

class MountTargetNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

type Name = string;

type NetworkInterfaceId = string;

class NetworkInterfaceLimitExceeded {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

class NoFreeAddressesInSubnet {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

type OwnerGid = int;

type OwnerUid = int;

type Path = string;

type PerformanceMode = string;

type Permissions = string;

type Policy = string;

class PolicyNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

class PosixUser {
  public Gid $gid;
  public SecondaryGids $secondary_gids;
  public Uid $uid;

  public function __construct(shape(
  ?'gid' => Gid,
  ?'secondary_gids' => SecondaryGids,
  ?'uid' => Uid,
  ) $s = shape()) {
    $this->gid = $gid ?? 0;
    $this->secondary_gids = $secondary_gids ?? [];
    $this->uid = $uid ?? 0;
  }
}

type ProvisionedThroughputInMibps = float;

class PutFileSystemPolicyRequest {
  public BypassPolicyLockoutSafetyCheck $bypass_policy_lockout_safety_check;
  public FileSystemId $file_system_id;
  public Policy $policy;

  public function __construct(shape(
  ?'bypass_policy_lockout_safety_check' => BypassPolicyLockoutSafetyCheck,
  ?'file_system_id' => FileSystemId,
  ?'policy' => Policy,
  ) $s = shape()) {
    $this->bypass_policy_lockout_safety_check = $bypass_policy_lockout_safety_check ?? false;
    $this->file_system_id = $file_system_id ?? "";
    $this->policy = $policy ?? "";
  }
}

class PutLifecycleConfigurationRequest {
  public FileSystemId $file_system_id;
  public LifecyclePolicies $lifecycle_policies;

  public function __construct(shape(
  ?'file_system_id' => FileSystemId,
  ?'lifecycle_policies' => LifecyclePolicies,
  ) $s = shape()) {
    $this->file_system_id = $file_system_id ?? "";
    $this->lifecycle_policies = $lifecycle_policies ?? [];
  }
}

type ResourceId = string;

class RootDirectory {
  public CreationInfo $creation_info;
  public Path $path;

  public function __construct(shape(
  ?'creation_info' => CreationInfo,
  ?'path' => Path,
  ) $s = shape()) {
    $this->creation_info = $creation_info ?? null;
    $this->path = $path ?? "";
  }
}

type SecondaryGids = vec<Gid>;

type SecurityGroup = string;

class SecurityGroupLimitExceeded {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

class SecurityGroupNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

type SecurityGroups = vec<SecurityGroup>;

type SubnetId = string;

class SubnetNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

type TagKey = string;

type TagKeys = vec<TagKey>;

class TagResourceRequest {
  public ResourceId $resource_id;
  public Tags $tags;

  public function __construct(shape(
  ?'resource_id' => ResourceId,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->tags = $tags ?? [];
  }
}

type TagValue = string;

type Tags = vec<Tag>;

class ThroughputLimitExceeded {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

type ThroughputMode = string;

type Timestamp = int;

type Token = string;

class TooManyRequests {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

type TransitionToIARules = string;

type Uid = int;

class UnsupportedAvailabilityZone {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? ;
  }
}

class UntagResourceRequest {
  public ResourceId $resource_id;
  public TagKeys $tag_keys;

  public function __construct(shape(
  ?'resource_id' => ResourceId,
  ?'tag_keys' => TagKeys,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UpdateFileSystemRequest {
  public FileSystemId $file_system_id;
  public ProvisionedThroughputInMibps $provisioned_throughput_in_mibps;
  public ThroughputMode $throughput_mode;

  public function __construct(shape(
  ?'file_system_id' => FileSystemId,
  ?'provisioned_throughput_in_mibps' => ProvisionedThroughputInMibps,
  ?'throughput_mode' => ThroughputMode,
  ) $s = shape()) {
    $this->file_system_id = $file_system_id ?? "";
    $this->provisioned_throughput_in_mibps = $provisioned_throughput_in_mibps ?? 0.0;
    $this->throughput_mode = $throughput_mode ?? "";
  }
}

