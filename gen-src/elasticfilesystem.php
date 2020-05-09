<?hh // strict
namespace slack\aws\elasticfilesystem;

interface EFS {
  public function DescribeAccessPoints(DescribeAccessPointsRequest) Awaitable<Errors\Result<DescribeAccessPointsResponse>>;
  public function DescribeLifecycleConfiguration(DescribeLifecycleConfigurationRequest) Awaitable<Errors\Result<LifecycleConfigurationDescription>>;
  public function DescribeMountTargets(DescribeMountTargetsRequest) Awaitable<Errors\Result<DescribeMountTargetsResponse>>;
  public function PutLifecycleConfiguration(PutLifecycleConfigurationRequest) Awaitable<Errors\Result<LifecycleConfigurationDescription>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateFileSystem(UpdateFileSystemRequest) Awaitable<Errors\Result<FileSystemDescription>>;
  public function CreateFileSystem(CreateFileSystemRequest) Awaitable<Errors\Result<FileSystemDescription>>;
  public function DeleteFileSystem(DeleteFileSystemRequest) Awaitable<Errors\Error>;
  public function DescribeTags(DescribeTagsRequest) Awaitable<Errors\Result<DescribeTagsResponse>>;
  public function DeleteFileSystemPolicy(DeleteFileSystemPolicyRequest) Awaitable<Errors\Error>;
  public function DescribeFileSystems(DescribeFileSystemsRequest) Awaitable<Errors\Result<DescribeFileSystemsResponse>>;
  public function DeleteTags(DeleteTagsRequest) Awaitable<Errors\Error>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function DeleteAccessPoint(DeleteAccessPointRequest) Awaitable<Errors\Error>;
  public function DeleteMountTarget(DeleteMountTargetRequest) Awaitable<Errors\Error>;
  public function CreateTags(CreateTagsRequest) Awaitable<Errors\Error>;
  public function DescribeFileSystemPolicy(DescribeFileSystemPolicyRequest) Awaitable<Errors\Result<FileSystemPolicyDescription>>;
  public function DescribeMountTargetSecurityGroups(DescribeMountTargetSecurityGroupsRequest) Awaitable<Errors\Result<DescribeMountTargetSecurityGroupsResponse>>;
  public function ModifyMountTargetSecurityGroups(ModifyMountTargetSecurityGroupsRequest) Awaitable<Errors\Error>;
  public function PutFileSystemPolicy(PutFileSystemPolicyRequest) Awaitable<Errors\Result<FileSystemPolicyDescription>>;
  public function CreateAccessPoint(CreateAccessPointRequest) Awaitable<Errors\Result<AccessPointDescription>>;
  public function CreateMountTarget(CreateMountTargetRequest) Awaitable<Errors\Result<MountTargetDescription>>;
}

class LifeCycleState {
}

class BypassPolicyLockoutSafetyCheck {
}

class ThroughputMode {
}

class PosixUser {
  public Uid $uid;
  public Gid $gid;
  public SecondaryGids $secondary_gids;
}

class TooManyRequests {
  public ErrorMessage $message;
  public ErrorCode $error_code;
}

class DeleteFileSystemRequest {
  public FileSystemId $file_system_id;
}

class MaxItems {
}

class ErrorMessage {
}

class SubnetNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class FileSystemPolicyDescription {
  public FileSystemId $file_system_id;
  public Policy $policy;
}

class IpAddressInUse {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class ListTagsForResourceResponse {
  public Tags $tags;
  public Token $next_token;
}

class MountTargetDescription {
  public MountTargetId $mount_target_id;
  public FileSystemId $file_system_id;
  public LifeCycleState $life_cycle_state;
  public NetworkInterfaceId $network_interface_id;
  public AvailabilityZoneId $availability_zone_id;
  public AvailabilityZoneName $availability_zone_name;
  public AwsAccountId $owner_id;
  public SubnetId $subnet_id;
  public IpAddress $ip_address;
}

class AccessPointAlreadyExists {
  public ErrorCode $error_code;
  public ErrorMessage $message;
  public AccessPointId $access_point_id;
}

class DependencyTimeout {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class ModifyMountTargetSecurityGroupsRequest {
  public MountTargetId $mount_target_id;
  public SecurityGroups $security_groups;
}

class DescribeFileSystemPolicyRequest {
  public FileSystemId $file_system_id;
}

class Encrypted {
}

class DeleteFileSystemPolicyRequest {
  public FileSystemId $file_system_id;
}

class MaxResults {
}

class AccessPointLimitExceeded {
  public ErrorMessage $message;
  public ErrorCode $error_code;
}

class CreateAccessPointRequest {
  public FileSystemId $file_system_id;
  public PosixUser $posix_user;
  public RootDirectory $root_directory;
  public ClientToken $client_token;
  public Tags $tags;
}

class IpAddress {
}

class NetworkInterfaceId {
}

class TagResourceRequest {
  public ResourceId $resource_id;
  public Tags $tags;
}

class DescribeMountTargetSecurityGroupsRequest {
  public MountTargetId $mount_target_id;
}

class FileSystemInUse {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class Name {
}

class Permissions {
}

class ProvisionedThroughputInMibps {
}

class Token {
}

class AccessPointDescription {
  public AccessPointArn $access_point_arn;
  public RootDirectory $root_directory;
  public LifeCycleState $life_cycle_state;
  public Tags $tags;
  public Name $name;
  public AccessPointId $access_point_id;
  public FileSystemId $file_system_id;
  public PosixUser $posix_user;
  public AwsAccountId $owner_id;
  public ClientToken $client_token;
}

class DeleteAccessPointRequest {
  public AccessPointId $access_point_id;
}

class AccessPointDescriptions {
}

class FileSystemDescriptions {
}

class InvalidPolicyException {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class LifecycleConfigurationDescription {
  public LifecyclePolicies $lifecycle_policies;
}

class OwnerUid {
}

class SecondaryGids {
}

class UntagResourceRequest {
  public TagKeys $tag_keys;
  public ResourceId $resource_id;
}

class ClientToken {
}

class DescribeMountTargetsRequest {
  public MaxItems $max_items;
  public Marker $marker;
  public FileSystemId $file_system_id;
  public MountTargetId $mount_target_id;
  public AccessPointId $access_point_id;
}

class AwsAccountId {
}

class Timestamp {
}

class InsufficientThroughputCapacity {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class KmsKeyId {
}

class ThroughputLimitExceeded {
  public ErrorMessage $message;
  public ErrorCode $error_code;
}

class FileSystemAlreadyExists {
  public ErrorCode $error_code;
  public ErrorMessage $message;
  public FileSystemId $file_system_id;
}

class IncorrectFileSystemLifeCycleState {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class FileSystemId {
}

class Gid {
}

class LifecyclePolicy {
  public TransitionToIARules $transition_to_ia;
}

class AccessPointArn {
}

class AvailabilityZoneName {
}

class TagKey {
}

class DescribeFileSystemsRequest {
  public MaxItems $max_items;
  public Marker $marker;
  public CreationToken $creation_token;
  public FileSystemId $file_system_id;
}

class DescribeMountTargetsResponse {
  public Marker $marker;
  public MountTargetDescriptions $mount_targets;
  public Marker $next_marker;
}

class FileSystemLimitExceeded {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class ListTagsForResourceRequest {
  public ResourceId $resource_id;
  public MaxResults $max_results;
  public Token $next_token;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class BadRequest {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class DeleteMountTargetRequest {
  public MountTargetId $mount_target_id;
}

class InternalServerError {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class MountTargetId {
}

class ResourceId {
}

class Uid {
}

class CreateTagsRequest {
  public Tags $tags;
  public FileSystemId $file_system_id;
}

class FileSystemSize {
  public FileSystemSizeValue $value;
  public Timestamp $timestamp;
  public FileSystemNullableSizeValue $value_in_ia;
  public FileSystemNullableSizeValue $value_in_standard;
}

class SubnetId {
}

class PerformanceMode {
}

class Policy {
}

class MountTargetNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class OwnerGid {
}

class PolicyNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class FileSystemNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class LifecyclePolicies {
}

class DeleteTagsRequest {
  public FileSystemId $file_system_id;
  public TagKeys $tag_keys;
}

class MountTargetDescriptions {
}

class Path {
}

class SecurityGroupLimitExceeded {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class DescribeTagsResponse {
  public Marker $marker;
  public Tags $tags;
  public Marker $next_marker;
}

class ErrorCode {
}

class Tags {
}

class CreationInfo {
  public OwnerUid $owner_uid;
  public OwnerGid $owner_gid;
  public Permissions $permissions;
}

class NoFreeAddressesInSubnet {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class DescribeLifecycleConfigurationRequest {
  public FileSystemId $file_system_id;
}

class DescribeTagsRequest {
  public FileSystemId $file_system_id;
  public MaxItems $max_items;
  public Marker $marker;
}

class SecurityGroupNotFound {
  public ErrorMessage $message;
  public ErrorCode $error_code;
}

class AvailabilityZoneId {
}

class DescribeFileSystemsResponse {
  public Marker $marker;
  public FileSystemDescriptions $file_systems;
  public Marker $next_marker;
}

class FileSystemNullableSizeValue {
}

class FileSystemSizeValue {
}

class RootDirectory {
  public Path $path;
  public CreationInfo $creation_info;
}

class CreateMountTargetRequest {
  public FileSystemId $file_system_id;
  public SubnetId $subnet_id;
  public IpAddress $ip_address;
  public SecurityGroups $security_groups;
}

class CreationToken {
}

class DescribeMountTargetSecurityGroupsResponse {
  public SecurityGroups $security_groups;
}

class TagValue {
}

class NetworkInterfaceLimitExceeded {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class SecurityGroup {
}

class UnsupportedAvailabilityZone {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class UpdateFileSystemRequest {
  public ProvisionedThroughputInMibps $provisioned_throughput_in_mibps;
  public FileSystemId $file_system_id;
  public ThroughputMode $throughput_mode;
}

class AccessPointNotFound {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class MountTargetCount {
}

class PutFileSystemPolicyRequest {
  public Policy $policy;
  public BypassPolicyLockoutSafetyCheck $bypass_policy_lockout_safety_check;
  public FileSystemId $file_system_id;
}

class SecurityGroups {
}

class TagKeys {
}

class TransitionToIARules {
}

class DescribeAccessPointsRequest {
  public FileSystemId $file_system_id;
  public MaxResults $max_results;
  public Token $next_token;
  public AccessPointId $access_point_id;
}

class IncorrectMountTargetState {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class MountTargetConflict {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class PutLifecycleConfigurationRequest {
  public FileSystemId $file_system_id;
  public LifecyclePolicies $lifecycle_policies;
}

class AccessPointId {
}

class CreateFileSystemRequest {
  public CreationToken $creation_token;
  public PerformanceMode $performance_mode;
  public Encrypted $encrypted;
  public KmsKeyId $kms_key_id;
  public ThroughputMode $throughput_mode;
  public ProvisionedThroughputInMibps $provisioned_throughput_in_mibps;
  public Tags $tags;
}

class Marker {
}

class DescribeAccessPointsResponse {
  public AccessPointDescriptions $access_points;
  public Token $next_token;
}

class FileSystemDescription {
  public ProvisionedThroughputInMibps $provisioned_throughput_in_mibps;
  public AwsAccountId $owner_id;
  public MountTargetCount $number_of_mount_targets;
  public FileSystemSize $size_in_bytes;
  public ThroughputMode $throughput_mode;
  public CreationToken $creation_token;
  public Encrypted $encrypted;
  public LifeCycleState $life_cycle_state;
  public TagValue $name;
  public PerformanceMode $performance_mode;
  public FileSystemId $file_system_id;
  public Timestamp $creation_time;
  public KmsKeyId $kms_key_id;
  public Tags $tags;
}

