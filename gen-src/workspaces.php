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

type ARN = string;

class AccessDeniedException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type AccessPropertyValue = string;

class AccountModification {
  public DedicatedTenancyManagementCidrRange $dedicated_tenancy_management_cidr_range;
  public DedicatedTenancySupportResultEnum $dedicated_tenancy_support;
  public WorkspaceErrorCode $error_code;
  public Description $error_message;
  public DedicatedTenancyModificationStateEnum $modification_state;
  public Timestamp $start_time;

  public function __construct(shape(
  ?'dedicated_tenancy_management_cidr_range' => DedicatedTenancyManagementCidrRange,
  ?'dedicated_tenancy_support' => DedicatedTenancySupportResultEnum,
  ?'error_code' => WorkspaceErrorCode,
  ?'error_message' => Description,
  ?'modification_state' => DedicatedTenancyModificationStateEnum,
  ?'start_time' => Timestamp,
  ) $s = shape()) {
    $this->dedicated_tenancy_management_cidr_range = $dedicated_tenancy_management_cidr_range ?? "";
    $this->dedicated_tenancy_support = $dedicated_tenancy_support ?? ;
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? ;
    $this->modification_state = $modification_state ?? null;
    $this->start_time = $start_time ?? ;
  }
}

type AccountModificationList = vec<AccountModification>;

type Alias = string;

class AssociateIpGroupsRequest {
  public DirectoryId $directory_id;
  public IpGroupIdList $group_ids;

  public function __construct(shape(
  ?'directory_id' => DirectoryId,
  ?'group_ids' => IpGroupIdList,
  ) $s = shape()) {
    $this->directory_id = $directory_id ?? "";
    $this->group_ids = $group_ids ?? ;
  }
}

class AssociateIpGroupsResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AuthorizeIpRulesRequest {
  public IpGroupId $group_id;
  public IpRuleList $user_rules;

  public function __construct(shape(
  ?'group_id' => IpGroupId,
  ?'user_rules' => IpRuleList,
  ) $s = shape()) {
    $this->group_id = $group_id ?? ;
    $this->user_rules = $user_rules ?? ;
  }
}

class AuthorizeIpRulesResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type BooleanObject = bool;

type BundleId = string;

type BundleIdList = vec<BundleId>;

type BundleList = vec<WorkspaceBundle>;

type BundleOwner = string;

class ClientProperties {
  public ReconnectEnum $reconnect_enabled;

  public function __construct(shape(
  ?'reconnect_enabled' => ReconnectEnum,
  ) $s = shape()) {
    $this->reconnect_enabled = $reconnect_enabled ?? ;
  }
}

type ClientPropertiesList = vec<ClientPropertiesResult>;

class ClientPropertiesResult {
  public ClientProperties $client_properties;
  public NonEmptyString $resource_id;

  public function __construct(shape(
  ?'client_properties' => ClientProperties,
  ?'resource_id' => NonEmptyString,
  ) $s = shape()) {
    $this->client_properties = $client_properties ?? null;
    $this->resource_id = $resource_id ?? ;
  }
}

type Compute = string;

class ComputeType {
  public Compute $name;

  public function __construct(shape(
  ?'name' => Compute,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

type ComputerName = string;

type ConnectionState = string;

class CopyWorkspaceImageRequest {
  public WorkspaceImageDescription $description;
  public WorkspaceImageName $name;
  public WorkspaceImageId $source_image_id;
  public Region $source_region;
  public TagList $tags;

  public function __construct(shape(
  ?'description' => WorkspaceImageDescription,
  ?'name' => WorkspaceImageName,
  ?'source_image_id' => WorkspaceImageId,
  ?'source_region' => Region,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->name = $name ?? ;
    $this->source_image_id = $source_image_id ?? ;
    $this->source_region = $source_region ?? ;
    $this->tags = $tags ?? ;
  }
}

class CopyWorkspaceImageResult {
  public WorkspaceImageId $image_id;

  public function __construct(shape(
  ?'image_id' => WorkspaceImageId,
  ) $s = shape()) {
    $this->image_id = $image_id ?? ;
  }
}

class CreateIpGroupRequest {
  public IpGroupDesc $group_desc;
  public IpGroupName $group_name;
  public TagList $tags;
  public IpRuleList $user_rules;

  public function __construct(shape(
  ?'group_desc' => IpGroupDesc,
  ?'group_name' => IpGroupName,
  ?'tags' => TagList,
  ?'user_rules' => IpRuleList,
  ) $s = shape()) {
    $this->group_desc = $group_desc ?? ;
    $this->group_name = $group_name ?? ;
    $this->tags = $tags ?? ;
    $this->user_rules = $user_rules ?? ;
  }
}

class CreateIpGroupResult {
  public IpGroupId $group_id;

  public function __construct(shape(
  ?'group_id' => IpGroupId,
  ) $s = shape()) {
    $this->group_id = $group_id ?? ;
  }
}

class CreateTagsRequest {
  public NonEmptyString $resource_id;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_id' => NonEmptyString,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateTagsResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateWorkspacesRequest {
  public WorkspaceRequestList $workspaces;

  public function __construct(shape(
  ?'workspaces' => WorkspaceRequestList,
  ) $s = shape()) {
    $this->workspaces = $workspaces ?? ;
  }
}

class CreateWorkspacesResult {
  public FailedCreateWorkspaceRequests $failed_requests;
  public WorkspaceList $pending_requests;

  public function __construct(shape(
  ?'failed_requests' => FailedCreateWorkspaceRequests,
  ?'pending_requests' => WorkspaceList,
  ) $s = shape()) {
    $this->failed_requests = $failed_requests ?? ;
    $this->pending_requests = $pending_requests ?? ;
  }
}

type DedicatedTenancyCidrRangeList = vec<DedicatedTenancyManagementCidrRange>;

type DedicatedTenancyManagementCidrRange = string;

type DedicatedTenancyModificationStateEnum = string;

type DedicatedTenancySupportEnum = string;

type DedicatedTenancySupportResultEnum = string;

type DefaultOu = string;

class DefaultWorkspaceCreationProperties {
  public SecurityGroupId $custom_security_group_id;
  public DefaultOu $default_ou;
  public BooleanObject $enable_internet_access;
  public BooleanObject $enable_maintenance_mode;
  public BooleanObject $enable_work_docs;
  public BooleanObject $user_enabled_as_local_administrator;

  public function __construct(shape(
  ?'custom_security_group_id' => SecurityGroupId,
  ?'default_ou' => DefaultOu,
  ?'enable_internet_access' => BooleanObject,
  ?'enable_maintenance_mode' => BooleanObject,
  ?'enable_work_docs' => BooleanObject,
  ?'user_enabled_as_local_administrator' => BooleanObject,
  ) $s = shape()) {
    $this->custom_security_group_id = $custom_security_group_id ?? ;
    $this->default_ou = $default_ou ?? "";
    $this->enable_internet_access = $enable_internet_access ?? ;
    $this->enable_maintenance_mode = $enable_maintenance_mode ?? ;
    $this->enable_work_docs = $enable_work_docs ?? ;
    $this->user_enabled_as_local_administrator = $user_enabled_as_local_administrator ?? ;
  }
}

class DeleteIpGroupRequest {
  public IpGroupId $group_id;

  public function __construct(shape(
  ?'group_id' => IpGroupId,
  ) $s = shape()) {
    $this->group_id = $group_id ?? ;
  }
}

class DeleteIpGroupResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTagsRequest {
  public NonEmptyString $resource_id;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_id' => NonEmptyString,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class DeleteTagsResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteWorkspaceImageRequest {
  public WorkspaceImageId $image_id;

  public function __construct(shape(
  ?'image_id' => WorkspaceImageId,
  ) $s = shape()) {
    $this->image_id = $image_id ?? ;
  }
}

class DeleteWorkspaceImageResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeregisterWorkspaceDirectoryRequest {
  public DirectoryId $directory_id;

  public function __construct(shape(
  ?'directory_id' => DirectoryId,
  ) $s = shape()) {
    $this->directory_id = $directory_id ?? "";
  }
}

class DeregisterWorkspaceDirectoryResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAccountModificationsRequest {
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
  }
}

class DescribeAccountModificationsResult {
  public AccountModificationList $account_modifications;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'account_modifications' => AccountModificationList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->account_modifications = $account_modifications ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeAccountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAccountResult {
  public DedicatedTenancyManagementCidrRange $dedicated_tenancy_management_cidr_range;
  public DedicatedTenancySupportResultEnum $dedicated_tenancy_support;

  public function __construct(shape(
  ?'dedicated_tenancy_management_cidr_range' => DedicatedTenancyManagementCidrRange,
  ?'dedicated_tenancy_support' => DedicatedTenancySupportResultEnum,
  ) $s = shape()) {
    $this->dedicated_tenancy_management_cidr_range = $dedicated_tenancy_management_cidr_range ?? "";
    $this->dedicated_tenancy_support = $dedicated_tenancy_support ?? ;
  }
}

class DescribeClientPropertiesRequest {
  public ResourceIdList $resource_ids;

  public function __construct(shape(
  ?'resource_ids' => ResourceIdList,
  ) $s = shape()) {
    $this->resource_ids = $resource_ids ?? ;
  }
}

class DescribeClientPropertiesResult {
  public ClientPropertiesList $client_properties_list;

  public function __construct(shape(
  ?'client_properties_list' => ClientPropertiesList,
  ) $s = shape()) {
    $this->client_properties_list = $client_properties_list ?? [];
  }
}

class DescribeIpGroupsRequest {
  public IpGroupIdList $group_ids;
  public Limit $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'group_ids' => IpGroupIdList,
  ?'max_results' => Limit,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->group_ids = $group_ids ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeIpGroupsResult {
  public PaginationToken $next_token;
  public WorkspacesIpGroupsList $result;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'result' => WorkspacesIpGroupsList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->result = $result ?? ;
  }
}

class DescribeTagsRequest {
  public NonEmptyString $resource_id;

  public function __construct(shape(
  ?'resource_id' => NonEmptyString,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? ;
  }
}

class DescribeTagsResult {
  public TagList $tag_list;

  public function __construct(shape(
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->tag_list = $tag_list ?? [];
  }
}

class DescribeWorkspaceBundlesRequest {
  public BundleIdList $bundle_ids;
  public PaginationToken $next_token;
  public BundleOwner $owner;

  public function __construct(shape(
  ?'bundle_ids' => BundleIdList,
  ?'next_token' => PaginationToken,
  ?'owner' => BundleOwner,
  ) $s = shape()) {
    $this->bundle_ids = $bundle_ids ?? ;
    $this->next_token = $next_token ?? ;
    $this->owner = $owner ?? ;
  }
}

class DescribeWorkspaceBundlesResult {
  public BundleList $bundles;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'bundles' => BundleList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->bundles = $bundles ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeWorkspaceDirectoriesRequest {
  public DirectoryIdList $directory_ids;
  public Limit $limit;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'directory_ids' => DirectoryIdList,
  ?'limit' => Limit,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->directory_ids = $directory_ids ?? ;
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeWorkspaceDirectoriesResult {
  public DirectoryList $directories;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'directories' => DirectoryList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->directories = $directories ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeWorkspaceImagesRequest {
  public WorkspaceImageIdList $image_ids;
  public Limit $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'image_ids' => WorkspaceImageIdList,
  ?'max_results' => Limit,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->image_ids = $image_ids ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeWorkspaceImagesResult {
  public WorkspaceImageList $images;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'images' => WorkspaceImageList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->images = $images ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeWorkspaceSnapshotsRequest {
  public WorkspaceId $workspace_id;

  public function __construct(shape(
  ?'workspace_id' => WorkspaceId,
  ) $s = shape()) {
    $this->workspace_id = $workspace_id ?? "";
  }
}

class DescribeWorkspaceSnapshotsResult {
  public SnapshotList $rebuild_snapshots;
  public SnapshotList $restore_snapshots;

  public function __construct(shape(
  ?'rebuild_snapshots' => SnapshotList,
  ?'restore_snapshots' => SnapshotList,
  ) $s = shape()) {
    $this->rebuild_snapshots = $rebuild_snapshots ?? ;
    $this->restore_snapshots = $restore_snapshots ?? ;
  }
}

class DescribeWorkspacesConnectionStatusRequest {
  public PaginationToken $next_token;
  public WorkspaceIdList $workspace_ids;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'workspace_ids' => WorkspaceIdList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->workspace_ids = $workspace_ids ?? ;
  }
}

class DescribeWorkspacesConnectionStatusResult {
  public PaginationToken $next_token;
  public WorkspaceConnectionStatusList $workspaces_connection_status;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'workspaces_connection_status' => WorkspaceConnectionStatusList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->workspaces_connection_status = $workspaces_connection_status ?? ;
  }
}

class DescribeWorkspacesRequest {
  public BundleId $bundle_id;
  public DirectoryId $directory_id;
  public Limit $limit;
  public PaginationToken $next_token;
  public UserName $user_name;
  public WorkspaceIdList $workspace_ids;

  public function __construct(shape(
  ?'bundle_id' => BundleId,
  ?'directory_id' => DirectoryId,
  ?'limit' => Limit,
  ?'next_token' => PaginationToken,
  ?'user_name' => UserName,
  ?'workspace_ids' => WorkspaceIdList,
  ) $s = shape()) {
    $this->bundle_id = $bundle_id ?? "";
    $this->directory_id = $directory_id ?? "";
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? ;
    $this->user_name = $user_name ?? "";
    $this->workspace_ids = $workspace_ids ?? ;
  }
}

class DescribeWorkspacesResult {
  public PaginationToken $next_token;
  public WorkspaceList $workspaces;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'workspaces' => WorkspaceList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->workspaces = $workspaces ?? ;
  }
}

type Description = string;

type DirectoryId = string;

type DirectoryIdList = vec<DirectoryId>;

type DirectoryList = vec<WorkspaceDirectory>;

type DirectoryName = string;

class DisassociateIpGroupsRequest {
  public DirectoryId $directory_id;
  public IpGroupIdList $group_ids;

  public function __construct(shape(
  ?'directory_id' => DirectoryId,
  ?'group_ids' => IpGroupIdList,
  ) $s = shape()) {
    $this->directory_id = $directory_id ?? "";
    $this->group_ids = $group_ids ?? ;
  }
}

class DisassociateIpGroupsResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DnsIpAddresses = vec<IpAddress>;

type Ec2ImageId = string;

type ErrorType = string;

type ExceptionMessage = string;

class FailedCreateWorkspaceRequest {
  public ErrorType $error_code;
  public Description $error_message;
  public WorkspaceRequest $workspace_request;

  public function __construct(shape(
  ?'error_code' => ErrorType,
  ?'error_message' => Description,
  ?'workspace_request' => WorkspaceRequest,
  ) $s = shape()) {
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? ;
    $this->workspace_request = $workspace_request ?? null;
  }
}

type FailedCreateWorkspaceRequests = vec<FailedCreateWorkspaceRequest>;

type FailedRebootWorkspaceRequests = vec<FailedWorkspaceChangeRequest>;

type FailedRebuildWorkspaceRequests = vec<FailedWorkspaceChangeRequest>;

type FailedStartWorkspaceRequests = vec<FailedWorkspaceChangeRequest>;

type FailedStopWorkspaceRequests = vec<FailedWorkspaceChangeRequest>;

type FailedTerminateWorkspaceRequests = vec<FailedWorkspaceChangeRequest>;

class FailedWorkspaceChangeRequest {
  public ErrorType $error_code;
  public Description $error_message;
  public WorkspaceId $workspace_id;

  public function __construct(shape(
  ?'error_code' => ErrorType,
  ?'error_message' => Description,
  ?'workspace_id' => WorkspaceId,
  ) $s = shape()) {
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? ;
    $this->workspace_id = $workspace_id ?? "";
  }
}

class ImportWorkspaceImageRequest {
  public Ec2ImageId $ec_2_image_id;
  public WorkspaceImageDescription $image_description;
  public WorkspaceImageName $image_name;
  public WorkspaceImageIngestionProcess $ingestion_process;
  public TagList $tags;

  public function __construct(shape(
  ?'ec_2_image_id' => Ec2ImageId,
  ?'image_description' => WorkspaceImageDescription,
  ?'image_name' => WorkspaceImageName,
  ?'ingestion_process' => WorkspaceImageIngestionProcess,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->ec_2_image_id = $ec_2_image_id ?? "";
    $this->image_description = $image_description ?? ;
    $this->image_name = $image_name ?? ;
    $this->ingestion_process = $ingestion_process ?? ;
    $this->tags = $tags ?? ;
  }
}

class ImportWorkspaceImageResult {
  public WorkspaceImageId $image_id;

  public function __construct(shape(
  ?'image_id' => WorkspaceImageId,
  ) $s = shape()) {
    $this->image_id = $image_id ?? ;
  }
}

class InvalidParameterValuesException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidResourceStateException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type IpAddress = string;

type IpGroupDesc = string;

type IpGroupId = string;

type IpGroupIdList = vec<IpGroupId>;

type IpGroupName = string;

type IpRevokedRuleList = vec<IpRule>;

type IpRule = string;

type IpRuleDesc = string;

class IpRuleItem {
  public IpRule $ip_rule;
  public IpRuleDesc $rule_desc;

  public function __construct(shape(
  ?'ip_rule' => IpRule,
  ?'rule_desc' => IpRuleDesc,
  ) $s = shape()) {
    $this->ip_rule = $ip_rule ?? ;
    $this->rule_desc = $rule_desc ?? ;
  }
}

type IpRuleList = vec<IpRuleItem>;

type Limit = int;

class ListAvailableManagementCidrRangesRequest {
  public ManagementCidrRangeConstraint $management_cidr_range_constraint;
  public ManagementCidrRangeMaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'management_cidr_range_constraint' => ManagementCidrRangeConstraint,
  ?'max_results' => ManagementCidrRangeMaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->management_cidr_range_constraint = $management_cidr_range_constraint ?? "";
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListAvailableManagementCidrRangesResult {
  public DedicatedTenancyCidrRangeList $management_cidr_ranges;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'management_cidr_ranges' => DedicatedTenancyCidrRangeList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->management_cidr_ranges = $management_cidr_ranges ?? ;
    $this->next_token = $next_token ?? ;
  }
}

type ManagementCidrRangeConstraint = string;

type ManagementCidrRangeMaxResults = int;

class MigrateWorkspaceRequest {
  public BundleId $bundle_id;
  public WorkspaceId $source_workspace_id;

  public function __construct(shape(
  ?'bundle_id' => BundleId,
  ?'source_workspace_id' => WorkspaceId,
  ) $s = shape()) {
    $this->bundle_id = $bundle_id ?? "";
    $this->source_workspace_id = $source_workspace_id ?? ;
  }
}

class MigrateWorkspaceResult {
  public WorkspaceId $source_workspace_id;
  public WorkspaceId $target_workspace_id;

  public function __construct(shape(
  ?'source_workspace_id' => WorkspaceId,
  ?'target_workspace_id' => WorkspaceId,
  ) $s = shape()) {
    $this->source_workspace_id = $source_workspace_id ?? ;
    $this->target_workspace_id = $target_workspace_id ?? ;
  }
}

type ModificationResourceEnum = string;

class ModificationState {
  public ModificationResourceEnum $resource;
  public ModificationStateEnum $state;

  public function __construct(shape(
  ?'resource' => ModificationResourceEnum,
  ?'state' => ModificationStateEnum,
  ) $s = shape()) {
    $this->resource = $resource ?? ;
    $this->state = $state ?? ;
  }
}

type ModificationStateEnum = string;

type ModificationStateList = vec<ModificationState>;

class ModifyAccountRequest {
  public DedicatedTenancyManagementCidrRange $dedicated_tenancy_management_cidr_range;
  public DedicatedTenancySupportEnum $dedicated_tenancy_support;

  public function __construct(shape(
  ?'dedicated_tenancy_management_cidr_range' => DedicatedTenancyManagementCidrRange,
  ?'dedicated_tenancy_support' => DedicatedTenancySupportEnum,
  ) $s = shape()) {
    $this->dedicated_tenancy_management_cidr_range = $dedicated_tenancy_management_cidr_range ?? "";
    $this->dedicated_tenancy_support = $dedicated_tenancy_support ?? ;
  }
}

class ModifyAccountResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ModifyClientPropertiesRequest {
  public ClientProperties $client_properties;
  public NonEmptyString $resource_id;

  public function __construct(shape(
  ?'client_properties' => ClientProperties,
  ?'resource_id' => NonEmptyString,
  ) $s = shape()) {
    $this->client_properties = $client_properties ?? null;
    $this->resource_id = $resource_id ?? ;
  }
}

class ModifyClientPropertiesResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ModifySelfservicePermissionsRequest {
  public DirectoryId $resource_id;
  public SelfservicePermissions $selfservice_permissions;

  public function __construct(shape(
  ?'resource_id' => DirectoryId,
  ?'selfservice_permissions' => SelfservicePermissions,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? ;
    $this->selfservice_permissions = $selfservice_permissions ?? null;
  }
}

class ModifySelfservicePermissionsResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ModifyWorkspaceAccessPropertiesRequest {
  public DirectoryId $resource_id;
  public WorkspaceAccessProperties $workspace_access_properties;

  public function __construct(shape(
  ?'resource_id' => DirectoryId,
  ?'workspace_access_properties' => WorkspaceAccessProperties,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? ;
    $this->workspace_access_properties = $workspace_access_properties ?? null;
  }
}

class ModifyWorkspaceAccessPropertiesResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ModifyWorkspaceCreationPropertiesRequest {
  public DirectoryId $resource_id;
  public WorkspaceCreationProperties $workspace_creation_properties;

  public function __construct(shape(
  ?'resource_id' => DirectoryId,
  ?'workspace_creation_properties' => WorkspaceCreationProperties,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? ;
    $this->workspace_creation_properties = $workspace_creation_properties ?? null;
  }
}

class ModifyWorkspaceCreationPropertiesResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ModifyWorkspacePropertiesRequest {
  public WorkspaceId $workspace_id;
  public WorkspaceProperties $workspace_properties;

  public function __construct(shape(
  ?'workspace_id' => WorkspaceId,
  ?'workspace_properties' => WorkspaceProperties,
  ) $s = shape()) {
    $this->workspace_id = $workspace_id ?? "";
    $this->workspace_properties = $workspace_properties ?? null;
  }
}

class ModifyWorkspacePropertiesResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ModifyWorkspaceStateRequest {
  public WorkspaceId $workspace_id;
  public TargetWorkspaceState $workspace_state;

  public function __construct(shape(
  ?'workspace_id' => WorkspaceId,
  ?'workspace_state' => TargetWorkspaceState,
  ) $s = shape()) {
    $this->workspace_id = $workspace_id ?? "";
    $this->workspace_state = $workspace_state ?? "";
  }
}

class ModifyWorkspaceStateResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type NonEmptyString = string;

class OperatingSystem {
  public OperatingSystemType $type;

  public function __construct(shape(
  ?'type' => OperatingSystemType,
  ) $s = shape()) {
    $this->type = $type ?? ;
  }
}

type OperatingSystemType = string;

class OperationInProgressException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class OperationNotSupportedException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type PaginationToken = string;

class RebootRequest {
  public WorkspaceId $workspace_id;

  public function __construct(shape(
  ?'workspace_id' => WorkspaceId,
  ) $s = shape()) {
    $this->workspace_id = $workspace_id ?? "";
  }
}

type RebootWorkspaceRequests = vec<RebootRequest>;

class RebootWorkspacesRequest {
  public RebootWorkspaceRequests $reboot_workspace_requests;

  public function __construct(shape(
  ?'reboot_workspace_requests' => RebootWorkspaceRequests,
  ) $s = shape()) {
    $this->reboot_workspace_requests = $reboot_workspace_requests ?? [];
  }
}

class RebootWorkspacesResult {
  public FailedRebootWorkspaceRequests $failed_requests;

  public function __construct(shape(
  ?'failed_requests' => FailedRebootWorkspaceRequests,
  ) $s = shape()) {
    $this->failed_requests = $failed_requests ?? ;
  }
}

class RebuildRequest {
  public WorkspaceId $workspace_id;

  public function __construct(shape(
  ?'workspace_id' => WorkspaceId,
  ) $s = shape()) {
    $this->workspace_id = $workspace_id ?? "";
  }
}

type RebuildWorkspaceRequests = vec<RebuildRequest>;

class RebuildWorkspacesRequest {
  public RebuildWorkspaceRequests $rebuild_workspace_requests;

  public function __construct(shape(
  ?'rebuild_workspace_requests' => RebuildWorkspaceRequests,
  ) $s = shape()) {
    $this->rebuild_workspace_requests = $rebuild_workspace_requests ?? [];
  }
}

class RebuildWorkspacesResult {
  public FailedRebuildWorkspaceRequests $failed_requests;

  public function __construct(shape(
  ?'failed_requests' => FailedRebuildWorkspaceRequests,
  ) $s = shape()) {
    $this->failed_requests = $failed_requests ?? ;
  }
}

type ReconnectEnum = string;

type Region = string;

class RegisterWorkspaceDirectoryRequest {
  public DirectoryId $directory_id;
  public BooleanObject $enable_self_service;
  public BooleanObject $enable_work_docs;
  public SubnetIds $subnet_ids;
  public TagList $tags;
  public Tenancy $tenancy;

  public function __construct(shape(
  ?'directory_id' => DirectoryId,
  ?'enable_self_service' => BooleanObject,
  ?'enable_work_docs' => BooleanObject,
  ?'subnet_ids' => SubnetIds,
  ?'tags' => TagList,
  ?'tenancy' => Tenancy,
  ) $s = shape()) {
    $this->directory_id = $directory_id ?? "";
    $this->enable_self_service = $enable_self_service ?? ;
    $this->enable_work_docs = $enable_work_docs ?? ;
    $this->subnet_ids = $subnet_ids ?? [];
    $this->tags = $tags ?? ;
    $this->tenancy = $tenancy ?? "";
  }
}

class RegisterWorkspaceDirectoryResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RegistrationCode = string;

class ResourceAlreadyExistsException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceAssociatedException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceCreationFailedException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ResourceIdList = vec<NonEmptyString>;

class ResourceLimitExceededException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceNotFoundException {
  public NonEmptyString $resource_id;
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'resource_id' => NonEmptyString,
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? ;
    $this->message = $message ?? ;
  }
}

class ResourceUnavailableException {
  public NonEmptyString $resource_id;
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'resource_id' => NonEmptyString,
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? ;
    $this->message = $message ?? ;
  }
}

class RestoreWorkspaceRequest {
  public WorkspaceId $workspace_id;

  public function __construct(shape(
  ?'workspace_id' => WorkspaceId,
  ) $s = shape()) {
    $this->workspace_id = $workspace_id ?? "";
  }
}

class RestoreWorkspaceResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RevokeIpRulesRequest {
  public IpGroupId $group_id;
  public IpRevokedRuleList $user_rules;

  public function __construct(shape(
  ?'group_id' => IpGroupId,
  ?'user_rules' => IpRevokedRuleList,
  ) $s = shape()) {
    $this->group_id = $group_id ?? ;
    $this->user_rules = $user_rules ?? ;
  }
}

class RevokeIpRulesResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RootStorage {
  public NonEmptyString $capacity;

  public function __construct(shape(
  ?'capacity' => NonEmptyString,
  ) $s = shape()) {
    $this->capacity = $capacity ?? ;
  }
}

type RootVolumeSizeGib = int;

type RunningMode = string;

type RunningModeAutoStopTimeoutInMinutes = int;

type SecurityGroupId = string;

class SelfservicePermissions {
  public ReconnectEnum $change_compute_type;
  public ReconnectEnum $increase_volume_size;
  public ReconnectEnum $rebuild_workspace;
  public ReconnectEnum $restart_workspace;
  public ReconnectEnum $switch_running_mode;

  public function __construct(shape(
  ?'change_compute_type' => ReconnectEnum,
  ?'increase_volume_size' => ReconnectEnum,
  ?'rebuild_workspace' => ReconnectEnum,
  ?'restart_workspace' => ReconnectEnum,
  ?'switch_running_mode' => ReconnectEnum,
  ) $s = shape()) {
    $this->change_compute_type = $change_compute_type ?? ;
    $this->increase_volume_size = $increase_volume_size ?? ;
    $this->rebuild_workspace = $rebuild_workspace ?? ;
    $this->restart_workspace = $restart_workspace ?? ;
    $this->switch_running_mode = $switch_running_mode ?? ;
  }
}

class Snapshot {
  public Timestamp $snapshot_time;

  public function __construct(shape(
  ?'snapshot_time' => Timestamp,
  ) $s = shape()) {
    $this->snapshot_time = $snapshot_time ?? ;
  }
}

type SnapshotList = vec<Snapshot>;

class StartRequest {
  public WorkspaceId $workspace_id;

  public function __construct(shape(
  ?'workspace_id' => WorkspaceId,
  ) $s = shape()) {
    $this->workspace_id = $workspace_id ?? "";
  }
}

type StartWorkspaceRequests = vec<StartRequest>;

class StartWorkspacesRequest {
  public StartWorkspaceRequests $start_workspace_requests;

  public function __construct(shape(
  ?'start_workspace_requests' => StartWorkspaceRequests,
  ) $s = shape()) {
    $this->start_workspace_requests = $start_workspace_requests ?? [];
  }
}

class StartWorkspacesResult {
  public FailedStartWorkspaceRequests $failed_requests;

  public function __construct(shape(
  ?'failed_requests' => FailedStartWorkspaceRequests,
  ) $s = shape()) {
    $this->failed_requests = $failed_requests ?? ;
  }
}

class StopRequest {
  public WorkspaceId $workspace_id;

  public function __construct(shape(
  ?'workspace_id' => WorkspaceId,
  ) $s = shape()) {
    $this->workspace_id = $workspace_id ?? "";
  }
}

type StopWorkspaceRequests = vec<StopRequest>;

class StopWorkspacesRequest {
  public StopWorkspaceRequests $stop_workspace_requests;

  public function __construct(shape(
  ?'stop_workspace_requests' => StopWorkspaceRequests,
  ) $s = shape()) {
    $this->stop_workspace_requests = $stop_workspace_requests ?? [];
  }
}

class StopWorkspacesResult {
  public FailedStopWorkspaceRequests $failed_requests;

  public function __construct(shape(
  ?'failed_requests' => FailedStopWorkspaceRequests,
  ) $s = shape()) {
    $this->failed_requests = $failed_requests ?? ;
  }
}

type SubnetId = string;

type SubnetIds = vec<SubnetId>;

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

type TagKeyList = vec<NonEmptyString>;

type TagList = vec<Tag>;

type TagValue = string;

type TargetWorkspaceState = string;

type Tenancy = string;

class TerminateRequest {
  public WorkspaceId $workspace_id;

  public function __construct(shape(
  ?'workspace_id' => WorkspaceId,
  ) $s = shape()) {
    $this->workspace_id = $workspace_id ?? "";
  }
}

type TerminateWorkspaceRequests = vec<TerminateRequest>;

class TerminateWorkspacesRequest {
  public TerminateWorkspaceRequests $terminate_workspace_requests;

  public function __construct(shape(
  ?'terminate_workspace_requests' => TerminateWorkspaceRequests,
  ) $s = shape()) {
    $this->terminate_workspace_requests = $terminate_workspace_requests ?? [];
  }
}

class TerminateWorkspacesResult {
  public FailedTerminateWorkspaceRequests $failed_requests;

  public function __construct(shape(
  ?'failed_requests' => FailedTerminateWorkspaceRequests,
  ) $s = shape()) {
    $this->failed_requests = $failed_requests ?? ;
  }
}

type Timestamp = int;

class UnsupportedNetworkConfigurationException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class UnsupportedWorkspaceConfigurationException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class UpdateRulesOfIpGroupRequest {
  public IpGroupId $group_id;
  public IpRuleList $user_rules;

  public function __construct(shape(
  ?'group_id' => IpGroupId,
  ?'user_rules' => IpRuleList,
  ) $s = shape()) {
    $this->group_id = $group_id ?? ;
    $this->user_rules = $user_rules ?? ;
  }
}

class UpdateRulesOfIpGroupResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type UserName = string;

class UserStorage {
  public NonEmptyString $capacity;

  public function __construct(shape(
  ?'capacity' => NonEmptyString,
  ) $s = shape()) {
    $this->capacity = $capacity ?? ;
  }
}

type UserVolumeSizeGib = int;

type VolumeEncryptionKey = string;

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

  public function __construct(shape(
  ?'bundle_id' => BundleId,
  ?'computer_name' => ComputerName,
  ?'directory_id' => DirectoryId,
  ?'error_code' => WorkspaceErrorCode,
  ?'error_message' => Description,
  ?'ip_address' => IpAddress,
  ?'modification_states' => ModificationStateList,
  ?'root_volume_encryption_enabled' => BooleanObject,
  ?'state' => WorkspaceState,
  ?'subnet_id' => SubnetId,
  ?'user_name' => UserName,
  ?'user_volume_encryption_enabled' => BooleanObject,
  ?'volume_encryption_key' => VolumeEncryptionKey,
  ?'workspace_id' => WorkspaceId,
  ?'workspace_properties' => WorkspaceProperties,
  ) $s = shape()) {
    $this->bundle_id = $bundle_id ?? "";
    $this->computer_name = $computer_name ?? "";
    $this->directory_id = $directory_id ?? "";
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? ;
    $this->ip_address = $ip_address ?? "";
    $this->modification_states = $modification_states ?? ;
    $this->root_volume_encryption_enabled = $root_volume_encryption_enabled ?? ;
    $this->state = $state ?? ;
    $this->subnet_id = $subnet_id ?? "";
    $this->user_name = $user_name ?? "";
    $this->user_volume_encryption_enabled = $user_volume_encryption_enabled ?? ;
    $this->volume_encryption_key = $volume_encryption_key ?? "";
    $this->workspace_id = $workspace_id ?? "";
    $this->workspace_properties = $workspace_properties ?? null;
  }
}

class WorkspaceAccessProperties {
  public AccessPropertyValue $device_type_android;
  public AccessPropertyValue $device_type_chrome_os;
  public AccessPropertyValue $device_type_ios;
  public AccessPropertyValue $device_type_osx;
  public AccessPropertyValue $device_type_web;
  public AccessPropertyValue $device_type_windows;
  public AccessPropertyValue $device_type_zero_client;

  public function __construct(shape(
  ?'device_type_android' => AccessPropertyValue,
  ?'device_type_chrome_os' => AccessPropertyValue,
  ?'device_type_ios' => AccessPropertyValue,
  ?'device_type_osx' => AccessPropertyValue,
  ?'device_type_web' => AccessPropertyValue,
  ?'device_type_windows' => AccessPropertyValue,
  ?'device_type_zero_client' => AccessPropertyValue,
  ) $s = shape()) {
    $this->device_type_android = $device_type_android ?? ;
    $this->device_type_chrome_os = $device_type_chrome_os ?? ;
    $this->device_type_ios = $device_type_ios ?? ;
    $this->device_type_osx = $device_type_osx ?? ;
    $this->device_type_web = $device_type_web ?? ;
    $this->device_type_windows = $device_type_windows ?? ;
    $this->device_type_zero_client = $device_type_zero_client ?? ;
  }
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

  public function __construct(shape(
  ?'bundle_id' => BundleId,
  ?'compute_type' => ComputeType,
  ?'description' => Description,
  ?'image_id' => WorkspaceImageId,
  ?'last_updated_time' => Timestamp,
  ?'name' => NonEmptyString,
  ?'owner' => BundleOwner,
  ?'root_storage' => RootStorage,
  ?'user_storage' => UserStorage,
  ) $s = shape()) {
    $this->bundle_id = $bundle_id ?? "";
    $this->compute_type = $compute_type ?? null;
    $this->description = $description ?? "";
    $this->image_id = $image_id ?? ;
    $this->last_updated_time = $last_updated_time ?? ;
    $this->name = $name ?? ;
    $this->owner = $owner ?? ;
    $this->root_storage = $root_storage ?? null;
    $this->user_storage = $user_storage ?? null;
  }
}

class WorkspaceConnectionStatus {
  public ConnectionState $connection_state;
  public Timestamp $connection_state_check_timestamp;
  public Timestamp $last_known_user_connection_timestamp;
  public WorkspaceId $workspace_id;

  public function __construct(shape(
  ?'connection_state' => ConnectionState,
  ?'connection_state_check_timestamp' => Timestamp,
  ?'last_known_user_connection_timestamp' => Timestamp,
  ?'workspace_id' => WorkspaceId,
  ) $s = shape()) {
    $this->connection_state = $connection_state ?? "";
    $this->connection_state_check_timestamp = $connection_state_check_timestamp ?? ;
    $this->last_known_user_connection_timestamp = $last_known_user_connection_timestamp ?? ;
    $this->workspace_id = $workspace_id ?? "";
  }
}

type WorkspaceConnectionStatusList = vec<WorkspaceConnectionStatus>;

class WorkspaceCreationProperties {
  public SecurityGroupId $custom_security_group_id;
  public DefaultOu $default_ou;
  public BooleanObject $enable_internet_access;
  public BooleanObject $enable_maintenance_mode;
  public BooleanObject $user_enabled_as_local_administrator;

  public function __construct(shape(
  ?'custom_security_group_id' => SecurityGroupId,
  ?'default_ou' => DefaultOu,
  ?'enable_internet_access' => BooleanObject,
  ?'enable_maintenance_mode' => BooleanObject,
  ?'user_enabled_as_local_administrator' => BooleanObject,
  ) $s = shape()) {
    $this->custom_security_group_id = $custom_security_group_id ?? ;
    $this->default_ou = $default_ou ?? "";
    $this->enable_internet_access = $enable_internet_access ?? ;
    $this->enable_maintenance_mode = $enable_maintenance_mode ?? ;
    $this->user_enabled_as_local_administrator = $user_enabled_as_local_administrator ?? ;
  }
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

  public function __construct(shape(
  ?'alias' => Alias,
  ?'customer_user_name' => UserName,
  ?'directory_id' => DirectoryId,
  ?'directory_name' => DirectoryName,
  ?'directory_type' => WorkspaceDirectoryType,
  ?'dns_ip_addresses' => DnsIpAddresses,
  ?'iam_role_id' => ARN,
  ?'registration_code' => RegistrationCode,
  ?'selfservice_permissions' => SelfservicePermissions,
  ?'state' => WorkspaceDirectoryState,
  ?'subnet_ids' => SubnetIds,
  ?'tenancy' => Tenancy,
  ?'workspace_access_properties' => WorkspaceAccessProperties,
  ?'workspace_creation_properties' => DefaultWorkspaceCreationProperties,
  ?'workspace_security_group_id' => SecurityGroupId,
  ?'ip_group_ids' => IpGroupIdList,
  ) $s = shape()) {
    $this->alias = $alias ?? "";
    $this->customer_user_name = $customer_user_name ?? ;
    $this->directory_id = $directory_id ?? "";
    $this->directory_name = $directory_name ?? "";
    $this->directory_type = $directory_type ?? ;
    $this->dns_ip_addresses = $dns_ip_addresses ?? [];
    $this->iam_role_id = $iam_role_id ?? ;
    $this->registration_code = $registration_code ?? "";
    $this->selfservice_permissions = $selfservice_permissions ?? null;
    $this->state = $state ?? ;
    $this->subnet_ids = $subnet_ids ?? [];
    $this->tenancy = $tenancy ?? "";
    $this->workspace_access_properties = $workspace_access_properties ?? null;
    $this->workspace_creation_properties = $workspace_creation_properties ?? null;
    $this->workspace_security_group_id = $workspace_security_group_id ?? ;
    $this->ip_group_ids = $ip_group_ids ?? ;
  }
}

type WorkspaceDirectoryState = string;

type WorkspaceDirectoryType = string;

type WorkspaceErrorCode = string;

type WorkspaceId = string;

type WorkspaceIdList = vec<WorkspaceId>;

class WorkspaceImage {
  public WorkspaceImageDescription $description;
  public WorkspaceImageErrorCode $error_code;
  public Description $error_message;
  public WorkspaceImageId $image_id;
  public WorkspaceImageName $name;
  public OperatingSystem $operating_system;
  public WorkspaceImageRequiredTenancy $required_tenancy;
  public WorkspaceImageState $state;

  public function __construct(shape(
  ?'description' => WorkspaceImageDescription,
  ?'error_code' => WorkspaceImageErrorCode,
  ?'error_message' => Description,
  ?'image_id' => WorkspaceImageId,
  ?'name' => WorkspaceImageName,
  ?'operating_system' => OperatingSystem,
  ?'required_tenancy' => WorkspaceImageRequiredTenancy,
  ?'state' => WorkspaceImageState,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? ;
    $this->image_id = $image_id ?? ;
    $this->name = $name ?? ;
    $this->operating_system = $operating_system ?? null;
    $this->required_tenancy = $required_tenancy ?? ;
    $this->state = $state ?? ;
  }
}

type WorkspaceImageDescription = string;

type WorkspaceImageErrorCode = string;

type WorkspaceImageId = string;

type WorkspaceImageIdList = vec<WorkspaceImageId>;

type WorkspaceImageIngestionProcess = string;

type WorkspaceImageList = vec<WorkspaceImage>;

type WorkspaceImageName = string;

type WorkspaceImageRequiredTenancy = string;

type WorkspaceImageState = string;

type WorkspaceList = vec<Workspace>;

class WorkspaceProperties {
  public Compute $compute_type_name;
  public RootVolumeSizeGib $root_volume_size_gib;
  public RunningMode $running_mode;
  public RunningModeAutoStopTimeoutInMinutes $running_mode_auto_stop_timeout_in_minutes;
  public UserVolumeSizeGib $user_volume_size_gib;

  public function __construct(shape(
  ?'compute_type_name' => Compute,
  ?'root_volume_size_gib' => RootVolumeSizeGib,
  ?'running_mode' => RunningMode,
  ?'running_mode_auto_stop_timeout_in_minutes' => RunningModeAutoStopTimeoutInMinutes,
  ?'user_volume_size_gib' => UserVolumeSizeGib,
  ) $s = shape()) {
    $this->compute_type_name = $compute_type_name ?? ;
    $this->root_volume_size_gib = $root_volume_size_gib ?? 0;
    $this->running_mode = $running_mode ?? "";
    $this->running_mode_auto_stop_timeout_in_minutes = $running_mode_auto_stop_timeout_in_minutes ?? 0;
    $this->user_volume_size_gib = $user_volume_size_gib ?? 0;
  }
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

  public function __construct(shape(
  ?'bundle_id' => BundleId,
  ?'directory_id' => DirectoryId,
  ?'root_volume_encryption_enabled' => BooleanObject,
  ?'tags' => TagList,
  ?'user_name' => UserName,
  ?'user_volume_encryption_enabled' => BooleanObject,
  ?'volume_encryption_key' => VolumeEncryptionKey,
  ?'workspace_properties' => WorkspaceProperties,
  ) $s = shape()) {
    $this->bundle_id = $bundle_id ?? "";
    $this->directory_id = $directory_id ?? "";
    $this->root_volume_encryption_enabled = $root_volume_encryption_enabled ?? ;
    $this->tags = $tags ?? ;
    $this->user_name = $user_name ?? "";
    $this->user_volume_encryption_enabled = $user_volume_encryption_enabled ?? ;
    $this->volume_encryption_key = $volume_encryption_key ?? "";
    $this->workspace_properties = $workspace_properties ?? null;
  }
}

type WorkspaceRequestList = vec<WorkspaceRequest>;

type WorkspaceState = string;

class WorkspacesDefaultRoleNotFoundException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class WorkspacesIpGroup {
  public IpGroupDesc $group_desc;
  public IpGroupId $group_id;
  public IpGroupName $group_name;
  public IpRuleList $user_rules;

  public function __construct(shape(
  ?'group_desc' => IpGroupDesc,
  ?'group_id' => IpGroupId,
  ?'group_name' => IpGroupName,
  ?'user_rules' => IpRuleList,
  ) $s = shape()) {
    $this->group_desc = $group_desc ?? ;
    $this->group_id = $group_id ?? ;
    $this->group_name = $group_name ?? ;
    $this->user_rules = $user_rules ?? ;
  }
}

type WorkspacesIpGroupsList = vec<WorkspacesIpGroup>;

