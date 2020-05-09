<?hh // strict
namespace slack\aws\elasticfilesystem;

interface EFS {
  public function CreateAccessPoint(CreateAccessPointRequest) Awaitable<Errors\Result<AccessPointDescription>>;
  public function CreateFileSystem(CreateFileSystemRequest) Awaitable<Errors\Result<FileSystemDescription>>;
  public function CreateMountTarget(CreateMountTargetRequest) Awaitable<Errors\Result<MountTargetDescription>>;
  public function CreateTags(CreateTagsRequest) Awaitable<Errors\Error>;
  public function DeleteAccessPoint(DeleteAccessPointRequest) Awaitable<Errors\Error>;
  public function DeleteFileSystem(DeleteFileSystemRequest) Awaitable<Errors\Error>;
  public function DeleteFileSystemPolicy(DeleteFileSystemPolicyRequest) Awaitable<Errors\Error>;
  public function DeleteMountTarget(DeleteMountTargetRequest) Awaitable<Errors\Error>;
  public function DeleteTags(DeleteTagsRequest) Awaitable<Errors\Error>;
  public function DescribeAccessPoints(DescribeAccessPointsRequest) Awaitable<Errors\Result<DescribeAccessPointsResponse>>;
  public function DescribeFileSystemPolicy(DescribeFileSystemPolicyRequest) Awaitable<Errors\Result<FileSystemPolicyDescription>>;
  public function DescribeFileSystems(DescribeFileSystemsRequest) Awaitable<Errors\Result<DescribeFileSystemsResponse>>;
  public function DescribeLifecycleConfiguration(DescribeLifecycleConfigurationRequest) Awaitable<Errors\Result<LifecycleConfigurationDescription>>;
  public function DescribeMountTargetSecurityGroups(DescribeMountTargetSecurityGroupsRequest) Awaitable<Errors\Result<DescribeMountTargetSecurityGroupsResponse>>;
  public function DescribeMountTargets(DescribeMountTargetsRequest) Awaitable<Errors\Result<DescribeMountTargetsResponse>>;
  public function DescribeTags(DescribeTagsRequest) Awaitable<Errors\Result<DescribeTagsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ModifyMountTargetSecurityGroups(ModifyMountTargetSecurityGroupsRequest) Awaitable<Errors\Error>;
  public function PutFileSystemPolicy(PutFileSystemPolicyRequest) Awaitable<Errors\Result<FileSystemPolicyDescription>>;
  public function PutLifecycleConfiguration(PutLifecycleConfigurationRequest) Awaitable<Errors\Result<LifecycleConfigurationDescription>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateFileSystem(UpdateFileSystemRequest) Awaitable<Errors\Result<FileSystemDescription>>;
}

class AccessPointAlreadyExists {
  public AccessPointId $access_point_id;
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class AccessPointArn {
}

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
}

class AccessPointDescriptions {
}

class AccessPointId {
}

class AccessPointLimitExceeded {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class AccessPointNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class AvailabilityZoneId {
}

class AvailabilityZoneName {
}

class AwsAccountId {
}

class BadRequest {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class BypassPolicyLockoutSafetyCheck {
}

class ClientToken {
}

class CreateAccessPointRequest {
  public ClientToken $client_token;
  public FileSystemId $file_system_id;
  public PosixUser $posix_user;
  public RootDirectory $root_directory;
  public Tags $tags;
}

class CreateFileSystemRequest {
  public CreationToken $creation_token;
  public Encrypted $encrypted;
  public KmsKeyId $kms_key_id;
  public PerformanceMode $performance_mode;
  public ProvisionedThroughputInMibps $provisioned_throughput_in_mibps;
  public Tags $tags;
  public ThroughputMode $throughput_mode;
}

class CreateMountTargetRequest {
  public FileSystemId $file_system_id;
  public IpAddress $ip_address;
  public SecurityGroups $security_groups;
  public SubnetId $subnet_id;
}

class CreateTagsRequest {
  public FileSystemId $file_system_id;
  public Tags $tags;
}

class CreationInfo {
  public OwnerGid $owner_gid;
  public OwnerUid $owner_uid;
  public Permissions $permissions;
}

class CreationToken {
}

class DeleteAccessPointRequest {
  public AccessPointId $access_point_id;
}

class DeleteFileSystemPolicyRequest {
  public FileSystemId $file_system_id;
}

class DeleteFileSystemRequest {
  public FileSystemId $file_system_id;
}

class DeleteMountTargetRequest {
  public MountTargetId $mount_target_id;
}

class DeleteTagsRequest {
  public FileSystemId $file_system_id;
  public TagKeys $tag_keys;
}

class DependencyTimeout {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class DescribeAccessPointsRequest {
  public AccessPointId $access_point_id;
  public FileSystemId $file_system_id;
  public MaxResults $max_results;
  public Token $next_token;
}

class DescribeAccessPointsResponse {
  public AccessPointDescriptions $access_points;
  public Token $next_token;
}

class DescribeFileSystemPolicyRequest {
  public FileSystemId $file_system_id;
}

class DescribeFileSystemsRequest {
  public CreationToken $creation_token;
  public FileSystemId $file_system_id;
  public Marker $marker;
  public MaxItems $max_items;
}

class DescribeFileSystemsResponse {
  public FileSystemDescriptions $file_systems;
  public Marker $marker;
  public Marker $next_marker;
}

class DescribeLifecycleConfigurationRequest {
  public FileSystemId $file_system_id;
}

class DescribeMountTargetSecurityGroupsRequest {
  public MountTargetId $mount_target_id;
}

class DescribeMountTargetSecurityGroupsResponse {
  public SecurityGroups $security_groups;
}

class DescribeMountTargetsRequest {
  public AccessPointId $access_point_id;
  public FileSystemId $file_system_id;
  public Marker $marker;
  public MaxItems $max_items;
  public MountTargetId $mount_target_id;
}

class DescribeMountTargetsResponse {
  public Marker $marker;
  public MountTargetDescriptions $mount_targets;
  public Marker $next_marker;
}

class DescribeTagsRequest {
  public FileSystemId $file_system_id;
  public Marker $marker;
  public MaxItems $max_items;
}

class DescribeTagsResponse {
  public Marker $marker;
  public Marker $next_marker;
  public Tags $tags;
}

class Encrypted {
}

class ErrorCode {
}

class ErrorMessage {
}

class FileSystemAlreadyExists {
  public ErrorCode $error_code;
  public FileSystemId $file_system_id;
  public ErrorMessage $message;
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
}

class FileSystemDescriptions {
}

class FileSystemId {
}

class FileSystemInUse {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class FileSystemLimitExceeded {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class FileSystemNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class FileSystemNullableSizeValue {
}

class FileSystemPolicyDescription {
  public FileSystemId $file_system_id;
  public Policy $policy;
}

class FileSystemSize {
  public Timestamp $timestamp;
  public FileSystemSizeValue $value;
  public FileSystemNullableSizeValue $value_in_ia;
  public FileSystemNullableSizeValue $value_in_standard;
}

class FileSystemSizeValue {
}

class Gid {
}

class IncorrectFileSystemLifeCycleState {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class IncorrectMountTargetState {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class InsufficientThroughputCapacity {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class InternalServerError {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class InvalidPolicyException {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class IpAddress {
}

class IpAddressInUse {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class KmsKeyId {
}

class LifeCycleState {
}

class LifecycleConfigurationDescription {
  public LifecyclePolicies $lifecycle_policies;
}

class LifecyclePolicies {
}

class LifecyclePolicy {
  public TransitionToIARules $transition_to_ia;
}

class ListTagsForResourceRequest {
  public MaxResults $max_results;
  public Token $next_token;
  public ResourceId $resource_id;
}

class ListTagsForResourceResponse {
  public Token $next_token;
  public Tags $tags;
}

class Marker {
}

class MaxItems {
}

class MaxResults {
}

class ModifyMountTargetSecurityGroupsRequest {
  public MountTargetId $mount_target_id;
  public SecurityGroups $security_groups;
}

class MountTargetConflict {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class MountTargetCount {
}

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
}

class MountTargetDescriptions {
}

class MountTargetId {
}

class MountTargetNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class Name {
}

class NetworkInterfaceId {
}

class NetworkInterfaceLimitExceeded {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class NoFreeAddressesInSubnet {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class OwnerGid {
}

class OwnerUid {
}

class Path {
}

class PerformanceMode {
}

class Permissions {
}

class Policy {
}

class PolicyNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class PosixUser {
  public Gid $gid;
  public SecondaryGids $secondary_gids;
  public Uid $uid;
}

class ProvisionedThroughputInMibps {
}

class PutFileSystemPolicyRequest {
  public BypassPolicyLockoutSafetyCheck $bypass_policy_lockout_safety_check;
  public FileSystemId $file_system_id;
  public Policy $policy;
}

class PutLifecycleConfigurationRequest {
  public FileSystemId $file_system_id;
  public LifecyclePolicies $lifecycle_policies;
}

class ResourceId {
}

class RootDirectory {
  public CreationInfo $creation_info;
  public Path $path;
}

class SecondaryGids {
}

class SecurityGroup {
}

class SecurityGroupLimitExceeded {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class SecurityGroupNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class SecurityGroups {
}

class SubnetId {
}

class SubnetNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeys {
}

class TagResourceRequest {
  public ResourceId $resource_id;
  public Tags $tags;
}

class TagValue {
}

class Tags {
}

class ThroughputLimitExceeded {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class ThroughputMode {
}

class Timestamp {
}

class Token {
}

class TooManyRequests {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class TransitionToIARules {
}

class Uid {
}

class UnsupportedAvailabilityZone {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class UntagResourceRequest {
  public ResourceId $resource_id;
  public TagKeys $tag_keys;
}

class UpdateFileSystemRequest {
  public FileSystemId $file_system_id;
  public ProvisionedThroughputInMibps $provisioned_throughput_in_mibps;
  public ThroughputMode $throughput_mode;
}

