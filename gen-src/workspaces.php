<?hh // strict
namespace slack\aws\workspaces;

interface WorkSpaces {
  public function AssociateIpGroups(AssociateIpGroupsRequest): Awaitable<Errors\Result<AssociateIpGroupsResult>>;
  public function AuthorizeIpRules(AuthorizeIpRulesRequest): Awaitable<Errors\Result<AuthorizeIpRulesResult>>;
  public function CopyWorkspaceImage(CopyWorkspaceImageRequest): Awaitable<Errors\Result<CopyWorkspaceImageResult>>;
  public function CreateIpGroup(CreateIpGroupRequest): Awaitable<Errors\Result<CreateIpGroupResult>>;
  public function CreateTags(CreateTagsRequest): Awaitable<Errors\Result<CreateTagsResult>>;
  public function CreateWorkspaces(CreateWorkspacesRequest): Awaitable<Errors\Result<CreateWorkspacesResult>>;
  public function DeleteIpGroup(DeleteIpGroupRequest): Awaitable<Errors\Result<DeleteIpGroupResult>>;
  public function DeleteTags(DeleteTagsRequest): Awaitable<Errors\Result<DeleteTagsResult>>;
  public function DeleteWorkspaceImage(DeleteWorkspaceImageRequest): Awaitable<Errors\Result<DeleteWorkspaceImageResult>>;
  public function DeregisterWorkspaceDirectory(DeregisterWorkspaceDirectoryRequest): Awaitable<Errors\Result<DeregisterWorkspaceDirectoryResult>>;
  public function DescribeAccount(DescribeAccountRequest): Awaitable<Errors\Result<DescribeAccountResult>>;
  public function DescribeAccountModifications(DescribeAccountModificationsRequest): Awaitable<Errors\Result<DescribeAccountModificationsResult>>;
  public function DescribeClientProperties(DescribeClientPropertiesRequest): Awaitable<Errors\Result<DescribeClientPropertiesResult>>;
  public function DescribeIpGroups(DescribeIpGroupsRequest): Awaitable<Errors\Result<DescribeIpGroupsResult>>;
  public function DescribeTags(DescribeTagsRequest): Awaitable<Errors\Result<DescribeTagsResult>>;
  public function DescribeWorkspaceBundles(DescribeWorkspaceBundlesRequest): Awaitable<Errors\Result<DescribeWorkspaceBundlesResult>>;
  public function DescribeWorkspaceDirectories(DescribeWorkspaceDirectoriesRequest): Awaitable<Errors\Result<DescribeWorkspaceDirectoriesResult>>;
  public function DescribeWorkspaceImages(DescribeWorkspaceImagesRequest): Awaitable<Errors\Result<DescribeWorkspaceImagesResult>>;
  public function DescribeWorkspaceSnapshots(DescribeWorkspaceSnapshotsRequest): Awaitable<Errors\Result<DescribeWorkspaceSnapshotsResult>>;
  public function DescribeWorkspaces(DescribeWorkspacesRequest): Awaitable<Errors\Result<DescribeWorkspacesResult>>;
  public function DescribeWorkspacesConnectionStatus(DescribeWorkspacesConnectionStatusRequest): Awaitable<Errors\Result<DescribeWorkspacesConnectionStatusResult>>;
  public function DisassociateIpGroups(DisassociateIpGroupsRequest): Awaitable<Errors\Result<DisassociateIpGroupsResult>>;
  public function ImportWorkspaceImage(ImportWorkspaceImageRequest): Awaitable<Errors\Result<ImportWorkspaceImageResult>>;
  public function ListAvailableManagementCidrRanges(ListAvailableManagementCidrRangesRequest): Awaitable<Errors\Result<ListAvailableManagementCidrRangesResult>>;
  public function MigrateWorkspace(MigrateWorkspaceRequest): Awaitable<Errors\Result<MigrateWorkspaceResult>>;
  public function ModifyAccount(ModifyAccountRequest): Awaitable<Errors\Result<ModifyAccountResult>>;
  public function ModifyClientProperties(ModifyClientPropertiesRequest): Awaitable<Errors\Result<ModifyClientPropertiesResult>>;
  public function ModifySelfservicePermissions(ModifySelfservicePermissionsRequest): Awaitable<Errors\Result<ModifySelfservicePermissionsResult>>;
  public function ModifyWorkspaceAccessProperties(ModifyWorkspaceAccessPropertiesRequest): Awaitable<Errors\Result<ModifyWorkspaceAccessPropertiesResult>>;
  public function ModifyWorkspaceCreationProperties(ModifyWorkspaceCreationPropertiesRequest): Awaitable<Errors\Result<ModifyWorkspaceCreationPropertiesResult>>;
  public function ModifyWorkspaceProperties(ModifyWorkspacePropertiesRequest): Awaitable<Errors\Result<ModifyWorkspacePropertiesResult>>;
  public function ModifyWorkspaceState(ModifyWorkspaceStateRequest): Awaitable<Errors\Result<ModifyWorkspaceStateResult>>;
  public function RebootWorkspaces(RebootWorkspacesRequest): Awaitable<Errors\Result<RebootWorkspacesResult>>;
  public function RebuildWorkspaces(RebuildWorkspacesRequest): Awaitable<Errors\Result<RebuildWorkspacesResult>>;
  public function RegisterWorkspaceDirectory(RegisterWorkspaceDirectoryRequest): Awaitable<Errors\Result<RegisterWorkspaceDirectoryResult>>;
  public function RestoreWorkspace(RestoreWorkspaceRequest): Awaitable<Errors\Result<RestoreWorkspaceResult>>;
  public function RevokeIpRules(RevokeIpRulesRequest): Awaitable<Errors\Result<RevokeIpRulesResult>>;
  public function StartWorkspaces(StartWorkspacesRequest): Awaitable<Errors\Result<StartWorkspacesResult>>;
  public function StopWorkspaces(StopWorkspacesRequest): Awaitable<Errors\Result<StopWorkspacesResult>>;
  public function TerminateWorkspaces(TerminateWorkspacesRequest): Awaitable<Errors\Result<TerminateWorkspacesResult>>;
  public function UpdateRulesOfIpGroup(UpdateRulesOfIpGroupRequest): Awaitable<Errors\Result<UpdateRulesOfIpGroupResult>>;
}

class ARN {
}

class AccessDeniedException {
  public ExceptionMessage $message;
}

class AccessPropertyValue {
}

class AccountModification {
  public DedicatedTenancyManagementCidrRange $dedicated_tenancy_management_cidr_range;
  public DedicatedTenancySupportResultEnum $dedicated_tenancy_support;
  public WorkspaceErrorCode $error_code;
  public Description $error_message;
  public DedicatedTenancyModificationStateEnum $modification_state;
  public Timestamp $start_time;
}

class AccountModificationList {
}

class Alias {
}

class AssociateIpGroupsRequest {
  public DirectoryId $directory_id;
  public IpGroupIdList $group_ids;
}

class AssociateIpGroupsResult {
}

class AuthorizeIpRulesRequest {
  public IpGroupId $group_id;
  public IpRuleList $user_rules;
}

class AuthorizeIpRulesResult {
}

class BooleanObject {
}

class BundleId {
}

class BundleIdList {
}

class BundleList {
}

class BundleOwner {
}

class ClientProperties {
  public ReconnectEnum $reconnect_enabled;
}

class ClientPropertiesList {
}

class ClientPropertiesResult {
  public ClientProperties $client_properties;
  public NonEmptyString $resource_id;
}

class Compute {
}

class ComputeType {
  public Compute $name;
}

class ComputerName {
}

class ConnectionState {
}

class CopyWorkspaceImageRequest {
  public WorkspaceImageDescription $description;
  public WorkspaceImageName $name;
  public WorkspaceImageId $source_image_id;
  public Region $source_region;
  public TagList $tags;
}

class CopyWorkspaceImageResult {
  public WorkspaceImageId $image_id;
}

class CreateIpGroupRequest {
  public IpGroupDesc $group_desc;
  public IpGroupName $group_name;
  public TagList $tags;
  public IpRuleList $user_rules;
}

class CreateIpGroupResult {
  public IpGroupId $group_id;
}

class CreateTagsRequest {
  public NonEmptyString $resource_id;
  public TagList $tags;
}

class CreateTagsResult {
}

class CreateWorkspacesRequest {
  public WorkspaceRequestList $workspaces;
}

class CreateWorkspacesResult {
  public FailedCreateWorkspaceRequests $failed_requests;
  public WorkspaceList $pending_requests;
}

class DedicatedTenancyCidrRangeList {
}

class DedicatedTenancyManagementCidrRange {
}

class DedicatedTenancyModificationStateEnum {
}

class DedicatedTenancySupportEnum {
}

class DedicatedTenancySupportResultEnum {
}

class DefaultOu {
}

class DefaultWorkspaceCreationProperties {
  public SecurityGroupId $custom_security_group_id;
  public DefaultOu $default_ou;
  public BooleanObject $enable_internet_access;
  public BooleanObject $enable_maintenance_mode;
  public BooleanObject $enable_work_docs;
  public BooleanObject $user_enabled_as_local_administrator;
}

class DeleteIpGroupRequest {
  public IpGroupId $group_id;
}

class DeleteIpGroupResult {
}

class DeleteTagsRequest {
  public NonEmptyString $resource_id;
  public TagKeyList $tag_keys;
}

class DeleteTagsResult {
}

class DeleteWorkspaceImageRequest {
  public WorkspaceImageId $image_id;
}

class DeleteWorkspaceImageResult {
}

class DeregisterWorkspaceDirectoryRequest {
  public DirectoryId $directory_id;
}

class DeregisterWorkspaceDirectoryResult {
}

class DescribeAccountModificationsRequest {
  public PaginationToken $next_token;
}

class DescribeAccountModificationsResult {
  public AccountModificationList $account_modifications;
  public PaginationToken $next_token;
}

class DescribeAccountRequest {
}

class DescribeAccountResult {
  public DedicatedTenancyManagementCidrRange $dedicated_tenancy_management_cidr_range;
  public DedicatedTenancySupportResultEnum $dedicated_tenancy_support;
}

class DescribeClientPropertiesRequest {
  public ResourceIdList $resource_ids;
}

class DescribeClientPropertiesResult {
  public ClientPropertiesList $client_properties_list;
}

class DescribeIpGroupsRequest {
  public IpGroupIdList $group_ids;
  public Limit $max_results;
  public PaginationToken $next_token;
}

class DescribeIpGroupsResult {
  public PaginationToken $next_token;
  public WorkspacesIpGroupsList $result;
}

class DescribeTagsRequest {
  public NonEmptyString $resource_id;
}

class DescribeTagsResult {
  public TagList $tag_list;
}

class DescribeWorkspaceBundlesRequest {
  public BundleIdList $bundle_ids;
  public PaginationToken $next_token;
  public BundleOwner $owner;
}

class DescribeWorkspaceBundlesResult {
  public BundleList $bundles;
  public PaginationToken $next_token;
}

class DescribeWorkspaceDirectoriesRequest {
  public DirectoryIdList $directory_ids;
  public Limit $limit;
  public PaginationToken $next_token;
}

class DescribeWorkspaceDirectoriesResult {
  public DirectoryList $directories;
  public PaginationToken $next_token;
}

class DescribeWorkspaceImagesRequest {
  public WorkspaceImageIdList $image_ids;
  public Limit $max_results;
  public PaginationToken $next_token;
}

class DescribeWorkspaceImagesResult {
  public WorkspaceImageList $images;
  public PaginationToken $next_token;
}

class DescribeWorkspaceSnapshotsRequest {
  public WorkspaceId $workspace_id;
}

class DescribeWorkspaceSnapshotsResult {
  public SnapshotList $rebuild_snapshots;
  public SnapshotList $restore_snapshots;
}

class DescribeWorkspacesConnectionStatusRequest {
  public PaginationToken $next_token;
  public WorkspaceIdList $workspace_ids;
}

class DescribeWorkspacesConnectionStatusResult {
  public PaginationToken $next_token;
  public WorkspaceConnectionStatusList $workspaces_connection_status;
}

class DescribeWorkspacesRequest {
  public BundleId $bundle_id;
  public DirectoryId $directory_id;
  public Limit $limit;
  public PaginationToken $next_token;
  public UserName $user_name;
  public WorkspaceIdList $workspace_ids;
}

class DescribeWorkspacesResult {
  public PaginationToken $next_token;
  public WorkspaceList $workspaces;
}

class Description {
}

class DirectoryId {
}

class DirectoryIdList {
}

class DirectoryList {
}

class DirectoryName {
}

class DisassociateIpGroupsRequest {
  public DirectoryId $directory_id;
  public IpGroupIdList $group_ids;
}

class DisassociateIpGroupsResult {
}

class DnsIpAddresses {
}

class Ec2ImageId {
}

class ErrorType {
}

class ExceptionMessage {
}

class FailedCreateWorkspaceRequest {
  public ErrorType $error_code;
  public Description $error_message;
  public WorkspaceRequest $workspace_request;
}

class FailedCreateWorkspaceRequests {
}

class FailedRebootWorkspaceRequests {
}

class FailedRebuildWorkspaceRequests {
}

class FailedStartWorkspaceRequests {
}

class FailedStopWorkspaceRequests {
}

class FailedTerminateWorkspaceRequests {
}

class FailedWorkspaceChangeRequest {
  public ErrorType $error_code;
  public Description $error_message;
  public WorkspaceId $workspace_id;
}

class ImportWorkspaceImageRequest {
  public Ec2ImageId $ec_2_image_id;
  public WorkspaceImageDescription $image_description;
  public WorkspaceImageName $image_name;
  public WorkspaceImageIngestionProcess $ingestion_process;
  public TagList $tags;
}

class ImportWorkspaceImageResult {
  public WorkspaceImageId $image_id;
}

class InvalidParameterValuesException {
  public ExceptionMessage $message;
}

class InvalidResourceStateException {
  public ExceptionMessage $message;
}

class IpAddress {
}

class IpGroupDesc {
}

class IpGroupId {
}

class IpGroupIdList {
}

class IpGroupName {
}

class IpRevokedRuleList {
}

class IpRule {
}

class IpRuleDesc {
}

class IpRuleItem {
  public IpRule $ip_rule;
  public IpRuleDesc $rule_desc;
}

class IpRuleList {
}

class Limit {
}

class ListAvailableManagementCidrRangesRequest {
  public ManagementCidrRangeConstraint $management_cidr_range_constraint;
  public ManagementCidrRangeMaxResults $max_results;
  public PaginationToken $next_token;
}

class ListAvailableManagementCidrRangesResult {
  public DedicatedTenancyCidrRangeList $management_cidr_ranges;
  public PaginationToken $next_token;
}

class ManagementCidrRangeConstraint {
}

class ManagementCidrRangeMaxResults {
}

class MigrateWorkspaceRequest {
  public BundleId $bundle_id;
  public WorkspaceId $source_workspace_id;
}

class MigrateWorkspaceResult {
  public WorkspaceId $source_workspace_id;
  public WorkspaceId $target_workspace_id;
}

class ModificationResourceEnum {
}

class ModificationState {
  public ModificationResourceEnum $resource;
  public ModificationStateEnum $state;
}

class ModificationStateEnum {
}

class ModificationStateList {
}

class ModifyAccountRequest {
  public DedicatedTenancyManagementCidrRange $dedicated_tenancy_management_cidr_range;
  public DedicatedTenancySupportEnum $dedicated_tenancy_support;
}

class ModifyAccountResult {
}

class ModifyClientPropertiesRequest {
  public ClientProperties $client_properties;
  public NonEmptyString $resource_id;
}

class ModifyClientPropertiesResult {
}

class ModifySelfservicePermissionsRequest {
  public DirectoryId $resource_id;
  public SelfservicePermissions $selfservice_permissions;
}

class ModifySelfservicePermissionsResult {
}

class ModifyWorkspaceAccessPropertiesRequest {
  public DirectoryId $resource_id;
  public WorkspaceAccessProperties $workspace_access_properties;
}

class ModifyWorkspaceAccessPropertiesResult {
}

class ModifyWorkspaceCreationPropertiesRequest {
  public DirectoryId $resource_id;
  public WorkspaceCreationProperties $workspace_creation_properties;
}

class ModifyWorkspaceCreationPropertiesResult {
}

class ModifyWorkspacePropertiesRequest {
  public WorkspaceId $workspace_id;
  public WorkspaceProperties $workspace_properties;
}

class ModifyWorkspacePropertiesResult {
}

class ModifyWorkspaceStateRequest {
  public WorkspaceId $workspace_id;
  public TargetWorkspaceState $workspace_state;
}

class ModifyWorkspaceStateResult {
}

class NonEmptyString {
}

class OperatingSystem {
  public OperatingSystemType $type;
}

class OperatingSystemType {
}

class OperationInProgressException {
  public ExceptionMessage $message;
}

class OperationNotSupportedException {
  public ExceptionMessage $message;
}

class PaginationToken {
}

class RebootRequest {
  public WorkspaceId $workspace_id;
}

class RebootWorkspaceRequests {
}

class RebootWorkspacesRequest {
  public RebootWorkspaceRequests $reboot_workspace_requests;
}

class RebootWorkspacesResult {
  public FailedRebootWorkspaceRequests $failed_requests;
}

class RebuildRequest {
  public WorkspaceId $workspace_id;
}

class RebuildWorkspaceRequests {
}

class RebuildWorkspacesRequest {
  public RebuildWorkspaceRequests $rebuild_workspace_requests;
}

class RebuildWorkspacesResult {
  public FailedRebuildWorkspaceRequests $failed_requests;
}

class ReconnectEnum {
}

class Region {
}

class RegisterWorkspaceDirectoryRequest {
  public DirectoryId $directory_id;
  public BooleanObject $enable_self_service;
  public BooleanObject $enable_work_docs;
  public SubnetIds $subnet_ids;
  public TagList $tags;
  public Tenancy $tenancy;
}

class RegisterWorkspaceDirectoryResult {
}

class RegistrationCode {
}

class ResourceAlreadyExistsException {
  public ExceptionMessage $message;
}

class ResourceAssociatedException {
  public ExceptionMessage $message;
}

class ResourceCreationFailedException {
  public ExceptionMessage $message;
}

class ResourceIdList {
}

class ResourceLimitExceededException {
  public ExceptionMessage $message;
}

class ResourceNotFoundException {
  public NonEmptyString $resource_id;
  public ExceptionMessage $message;
}

class ResourceUnavailableException {
  public NonEmptyString $resource_id;
  public ExceptionMessage $message;
}

class RestoreWorkspaceRequest {
  public WorkspaceId $workspace_id;
}

class RestoreWorkspaceResult {
}

class RevokeIpRulesRequest {
  public IpGroupId $group_id;
  public IpRevokedRuleList $user_rules;
}

class RevokeIpRulesResult {
}

class RootStorage {
  public NonEmptyString $capacity;
}

class RootVolumeSizeGib {
}

class RunningMode {
}

class RunningModeAutoStopTimeoutInMinutes {
}

class SecurityGroupId {
}

class SelfservicePermissions {
  public ReconnectEnum $change_compute_type;
  public ReconnectEnum $increase_volume_size;
  public ReconnectEnum $rebuild_workspace;
  public ReconnectEnum $restart_workspace;
  public ReconnectEnum $switch_running_mode;
}

class Snapshot {
  public Timestamp $snapshot_time;
}

class SnapshotList {
}

class StartRequest {
  public WorkspaceId $workspace_id;
}

class StartWorkspaceRequests {
}

class StartWorkspacesRequest {
  public StartWorkspaceRequests $start_workspace_requests;
}

class StartWorkspacesResult {
  public FailedStartWorkspaceRequests $failed_requests;
}

class StopRequest {
  public WorkspaceId $workspace_id;
}

class StopWorkspaceRequests {
}

class StopWorkspacesRequest {
  public StopWorkspaceRequests $stop_workspace_requests;
}

class StopWorkspacesResult {
  public FailedStopWorkspaceRequests $failed_requests;
}

class SubnetId {
}

class SubnetIds {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagValue {
}

class TargetWorkspaceState {
}

class Tenancy {
}

class TerminateRequest {
  public WorkspaceId $workspace_id;
}

class TerminateWorkspaceRequests {
}

class TerminateWorkspacesRequest {
  public TerminateWorkspaceRequests $terminate_workspace_requests;
}

class TerminateWorkspacesResult {
  public FailedTerminateWorkspaceRequests $failed_requests;
}

class Timestamp {
}

class UnsupportedNetworkConfigurationException {
  public ExceptionMessage $message;
}

class UnsupportedWorkspaceConfigurationException {
  public ExceptionMessage $message;
}

class UpdateRulesOfIpGroupRequest {
  public IpGroupId $group_id;
  public IpRuleList $user_rules;
}

class UpdateRulesOfIpGroupResult {
}

class UserName {
}

class UserStorage {
  public NonEmptyString $capacity;
}

class UserVolumeSizeGib {
}

class VolumeEncryptionKey {
}

class Workspace {
  public BundleId $bundle_id;
  public ComputerName $computer_name;
  public DirectoryId $directory_id;
  public WorkspaceErrorCode $error_code;
  public Description $error_message;
  public IpAddress $ip_address;
  public ModificationStateList $modification_states;
  public BooleanObject $root_volume_encryption_enabled;
  public WorkspaceState $state;
  public SubnetId $subnet_id;
  public UserName $user_name;
  public BooleanObject $user_volume_encryption_enabled;
  public VolumeEncryptionKey $volume_encryption_key;
  public WorkspaceId $workspace_id;
  public WorkspaceProperties $workspace_properties;
}

class WorkspaceAccessProperties {
  public AccessPropertyValue $device_type_android;
  public AccessPropertyValue $device_type_chrome_os;
  public AccessPropertyValue $device_type_ios;
  public AccessPropertyValue $device_type_osx;
  public AccessPropertyValue $device_type_web;
  public AccessPropertyValue $device_type_windows;
  public AccessPropertyValue $device_type_zero_client;
}

class WorkspaceBundle {
  public BundleId $bundle_id;
  public ComputeType $compute_type;
  public Description $description;
  public WorkspaceImageId $image_id;
  public Timestamp $last_updated_time;
  public NonEmptyString $name;
  public BundleOwner $owner;
  public RootStorage $root_storage;
  public UserStorage $user_storage;
}

class WorkspaceConnectionStatus {
  public ConnectionState $connection_state;
  public Timestamp $connection_state_check_timestamp;
  public Timestamp $last_known_user_connection_timestamp;
  public WorkspaceId $workspace_id;
}

class WorkspaceConnectionStatusList {
}

class WorkspaceCreationProperties {
  public SecurityGroupId $custom_security_group_id;
  public DefaultOu $default_ou;
  public BooleanObject $enable_internet_access;
  public BooleanObject $enable_maintenance_mode;
  public BooleanObject $user_enabled_as_local_administrator;
}

class WorkspaceDirectory {
  public Alias $alias;
  public UserName $customer_user_name;
  public DirectoryId $directory_id;
  public DirectoryName $directory_name;
  public WorkspaceDirectoryType $directory_type;
  public DnsIpAddresses $dns_ip_addresses;
  public ARN $iam_role_id;
  public RegistrationCode $registration_code;
  public SelfservicePermissions $selfservice_permissions;
  public WorkspaceDirectoryState $state;
  public SubnetIds $subnet_ids;
  public Tenancy $tenancy;
  public WorkspaceAccessProperties $workspace_access_properties;
  public DefaultWorkspaceCreationProperties $workspace_creation_properties;
  public SecurityGroupId $workspace_security_group_id;
  public IpGroupIdList $ip_group_ids;
}

class WorkspaceDirectoryState {
}

class WorkspaceDirectoryType {
}

class WorkspaceErrorCode {
}

class WorkspaceId {
}

class WorkspaceIdList {
}

class WorkspaceImage {
  public WorkspaceImageDescription $description;
  public WorkspaceImageErrorCode $error_code;
  public Description $error_message;
  public WorkspaceImageId $image_id;
  public WorkspaceImageName $name;
  public OperatingSystem $operating_system;
  public WorkspaceImageRequiredTenancy $required_tenancy;
  public WorkspaceImageState $state;
}

class WorkspaceImageDescription {
}

class WorkspaceImageErrorCode {
}

class WorkspaceImageId {
}

class WorkspaceImageIdList {
}

class WorkspaceImageIngestionProcess {
}

class WorkspaceImageList {
}

class WorkspaceImageName {
}

class WorkspaceImageRequiredTenancy {
}

class WorkspaceImageState {
}

class WorkspaceList {
}

class WorkspaceProperties {
  public Compute $compute_type_name;
  public RootVolumeSizeGib $root_volume_size_gib;
  public RunningMode $running_mode;
  public RunningModeAutoStopTimeoutInMinutes $running_mode_auto_stop_timeout_in_minutes;
  public UserVolumeSizeGib $user_volume_size_gib;
}

class WorkspaceRequest {
  public BundleId $bundle_id;
  public DirectoryId $directory_id;
  public BooleanObject $root_volume_encryption_enabled;
  public TagList $tags;
  public UserName $user_name;
  public BooleanObject $user_volume_encryption_enabled;
  public VolumeEncryptionKey $volume_encryption_key;
  public WorkspaceProperties $workspace_properties;
}

class WorkspaceRequestList {
}

class WorkspaceState {
}

class WorkspacesDefaultRoleNotFoundException {
  public ExceptionMessage $message;
}

class WorkspacesIpGroup {
  public IpGroupDesc $group_desc;
  public IpGroupId $group_id;
  public IpGroupName $group_name;
  public IpRuleList $user_rules;
}

class WorkspacesIpGroupsList {
}

