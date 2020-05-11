<?hh // strict
namespace slack\aws\quicksight;

interface QuickSight {
  public function CancelIngestion(CancelIngestionRequest): Awaitable<Errors\Result<CancelIngestionResponse>>;
  public function CreateDashboard(CreateDashboardRequest): Awaitable<Errors\Result<CreateDashboardResponse>>;
  public function CreateDataSet(CreateDataSetRequest): Awaitable<Errors\Result<CreateDataSetResponse>>;
  public function CreateDataSource(CreateDataSourceRequest): Awaitable<Errors\Result<CreateDataSourceResponse>>;
  public function CreateGroup(CreateGroupRequest): Awaitable<Errors\Result<CreateGroupResponse>>;
  public function CreateGroupMembership(CreateGroupMembershipRequest): Awaitable<Errors\Result<CreateGroupMembershipResponse>>;
  public function CreateIAMPolicyAssignment(CreateIAMPolicyAssignmentRequest): Awaitable<Errors\Result<CreateIAMPolicyAssignmentResponse>>;
  public function CreateIngestion(CreateIngestionRequest): Awaitable<Errors\Result<CreateIngestionResponse>>;
  public function CreateTemplate(CreateTemplateRequest): Awaitable<Errors\Result<CreateTemplateResponse>>;
  public function CreateTemplateAlias(CreateTemplateAliasRequest): Awaitable<Errors\Result<CreateTemplateAliasResponse>>;
  public function DeleteDashboard(DeleteDashboardRequest): Awaitable<Errors\Result<DeleteDashboardResponse>>;
  public function DeleteDataSet(DeleteDataSetRequest): Awaitable<Errors\Result<DeleteDataSetResponse>>;
  public function DeleteDataSource(DeleteDataSourceRequest): Awaitable<Errors\Result<DeleteDataSourceResponse>>;
  public function DeleteGroup(DeleteGroupRequest): Awaitable<Errors\Result<DeleteGroupResponse>>;
  public function DeleteGroupMembership(DeleteGroupMembershipRequest): Awaitable<Errors\Result<DeleteGroupMembershipResponse>>;
  public function DeleteIAMPolicyAssignment(DeleteIAMPolicyAssignmentRequest): Awaitable<Errors\Result<DeleteIAMPolicyAssignmentResponse>>;
  public function DeleteTemplate(DeleteTemplateRequest): Awaitable<Errors\Result<DeleteTemplateResponse>>;
  public function DeleteTemplateAlias(DeleteTemplateAliasRequest): Awaitable<Errors\Result<DeleteTemplateAliasResponse>>;
  public function DeleteUser(DeleteUserRequest): Awaitable<Errors\Result<DeleteUserResponse>>;
  public function DeleteUserByPrincipalId(DeleteUserByPrincipalIdRequest): Awaitable<Errors\Result<DeleteUserByPrincipalIdResponse>>;
  public function DescribeDashboard(DescribeDashboardRequest): Awaitable<Errors\Result<DescribeDashboardResponse>>;
  public function DescribeDashboardPermissions(DescribeDashboardPermissionsRequest): Awaitable<Errors\Result<DescribeDashboardPermissionsResponse>>;
  public function DescribeDataSet(DescribeDataSetRequest): Awaitable<Errors\Result<DescribeDataSetResponse>>;
  public function DescribeDataSetPermissions(DescribeDataSetPermissionsRequest): Awaitable<Errors\Result<DescribeDataSetPermissionsResponse>>;
  public function DescribeDataSource(DescribeDataSourceRequest): Awaitable<Errors\Result<DescribeDataSourceResponse>>;
  public function DescribeDataSourcePermissions(DescribeDataSourcePermissionsRequest): Awaitable<Errors\Result<DescribeDataSourcePermissionsResponse>>;
  public function DescribeGroup(DescribeGroupRequest): Awaitable<Errors\Result<DescribeGroupResponse>>;
  public function DescribeIAMPolicyAssignment(DescribeIAMPolicyAssignmentRequest): Awaitable<Errors\Result<DescribeIAMPolicyAssignmentResponse>>;
  public function DescribeIngestion(DescribeIngestionRequest): Awaitable<Errors\Result<DescribeIngestionResponse>>;
  public function DescribeTemplate(DescribeTemplateRequest): Awaitable<Errors\Result<DescribeTemplateResponse>>;
  public function DescribeTemplateAlias(DescribeTemplateAliasRequest): Awaitable<Errors\Result<DescribeTemplateAliasResponse>>;
  public function DescribeTemplatePermissions(DescribeTemplatePermissionsRequest): Awaitable<Errors\Result<DescribeTemplatePermissionsResponse>>;
  public function DescribeUser(DescribeUserRequest): Awaitable<Errors\Result<DescribeUserResponse>>;
  public function GetDashboardEmbedUrl(GetDashboardEmbedUrlRequest): Awaitable<Errors\Result<GetDashboardEmbedUrlResponse>>;
  public function ListDashboardVersions(ListDashboardVersionsRequest): Awaitable<Errors\Result<ListDashboardVersionsResponse>>;
  public function ListDashboards(ListDashboardsRequest): Awaitable<Errors\Result<ListDashboardsResponse>>;
  public function ListDataSets(ListDataSetsRequest): Awaitable<Errors\Result<ListDataSetsResponse>>;
  public function ListDataSources(ListDataSourcesRequest): Awaitable<Errors\Result<ListDataSourcesResponse>>;
  public function ListGroupMemberships(ListGroupMembershipsRequest): Awaitable<Errors\Result<ListGroupMembershipsResponse>>;
  public function ListGroups(ListGroupsRequest): Awaitable<Errors\Result<ListGroupsResponse>>;
  public function ListIAMPolicyAssignments(ListIAMPolicyAssignmentsRequest): Awaitable<Errors\Result<ListIAMPolicyAssignmentsResponse>>;
  public function ListIAMPolicyAssignmentsForUser(ListIAMPolicyAssignmentsForUserRequest): Awaitable<Errors\Result<ListIAMPolicyAssignmentsForUserResponse>>;
  public function ListIngestions(ListIngestionsRequest): Awaitable<Errors\Result<ListIngestionsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTemplateAliases(ListTemplateAliasesRequest): Awaitable<Errors\Result<ListTemplateAliasesResponse>>;
  public function ListTemplateVersions(ListTemplateVersionsRequest): Awaitable<Errors\Result<ListTemplateVersionsResponse>>;
  public function ListTemplates(ListTemplatesRequest): Awaitable<Errors\Result<ListTemplatesResponse>>;
  public function ListUserGroups(ListUserGroupsRequest): Awaitable<Errors\Result<ListUserGroupsResponse>>;
  public function ListUsers(ListUsersRequest): Awaitable<Errors\Result<ListUsersResponse>>;
  public function RegisterUser(RegisterUserRequest): Awaitable<Errors\Result<RegisterUserResponse>>;
  public function SearchDashboards(SearchDashboardsRequest): Awaitable<Errors\Result<SearchDashboardsResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateDashboard(UpdateDashboardRequest): Awaitable<Errors\Result<UpdateDashboardResponse>>;
  public function UpdateDashboardPermissions(UpdateDashboardPermissionsRequest): Awaitable<Errors\Result<UpdateDashboardPermissionsResponse>>;
  public function UpdateDashboardPublishedVersion(UpdateDashboardPublishedVersionRequest): Awaitable<Errors\Result<UpdateDashboardPublishedVersionResponse>>;
  public function UpdateDataSet(UpdateDataSetRequest): Awaitable<Errors\Result<UpdateDataSetResponse>>;
  public function UpdateDataSetPermissions(UpdateDataSetPermissionsRequest): Awaitable<Errors\Result<UpdateDataSetPermissionsResponse>>;
  public function UpdateDataSource(UpdateDataSourceRequest): Awaitable<Errors\Result<UpdateDataSourceResponse>>;
  public function UpdateDataSourcePermissions(UpdateDataSourcePermissionsRequest): Awaitable<Errors\Result<UpdateDataSourcePermissionsResponse>>;
  public function UpdateGroup(UpdateGroupRequest): Awaitable<Errors\Result<UpdateGroupResponse>>;
  public function UpdateIAMPolicyAssignment(UpdateIAMPolicyAssignmentRequest): Awaitable<Errors\Result<UpdateIAMPolicyAssignmentResponse>>;
  public function UpdateTemplate(UpdateTemplateRequest): Awaitable<Errors\Result<UpdateTemplateResponse>>;
  public function UpdateTemplateAlias(UpdateTemplateAliasRequest): Awaitable<Errors\Result<UpdateTemplateAliasResponse>>;
  public function UpdateTemplatePermissions(UpdateTemplatePermissionsRequest): Awaitable<Errors\Result<UpdateTemplatePermissionsResponse>>;
  public function UpdateUser(UpdateUserRequest): Awaitable<Errors\Result<UpdateUserResponse>>;
}

class AccessDeniedException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
  }
}

type ActionList = vec<String>;

class ActiveIAMPolicyAssignment {
  public IAMPolicyAssignmentName $assignment_name;
  public Arn $policy_arn;

  public function __construct(shape(
  ?'assignment_name' => IAMPolicyAssignmentName,
  ?'policy_arn' => Arn,
  ) $s = shape()) {
    $this->assignment_name = $assignment_name ?? ;
    $this->policy_arn = $policy_arn ?? ;
  }
}

type ActiveIAMPolicyAssignmentList = vec<ActiveIAMPolicyAssignment>;

class AdHocFilteringOption {
  public DashboardBehavior $availability_status;

  public function __construct(shape(
  ?'availability_status' => DashboardBehavior,
  ) $s = shape()) {
    $this->availability_status = $availability_status ?? ;
  }
}

type AliasName = string;

class AmazonElasticsearchParameters {
  public Domain $domain;

  public function __construct(shape(
  ?'domain' => Domain,
  ) $s = shape()) {
    $this->domain = $domain ?? "";
  }
}

type Arn = string;

type AssignmentStatus = string;

class AthenaParameters {
  public WorkGroup $work_group;

  public function __construct(shape(
  ?'work_group' => WorkGroup,
  ) $s = shape()) {
    $this->work_group = $work_group ?? "";
  }
}

class AuroraParameters {
  public Database $database;
  public Host $host;
  public Port $port;

  public function __construct(shape(
  ?'database' => Database,
  ?'host' => Host,
  ?'port' => Port,
  ) $s = shape()) {
    $this->database = $database ?? "";
    $this->host = $host ?? "";
    $this->port = $port ?? 0;
  }
}

class AuroraPostgreSqlParameters {
  public Database $database;
  public Host $host;
  public Port $port;

  public function __construct(shape(
  ?'database' => Database,
  ?'host' => Host,
  ?'port' => Port,
  ) $s = shape()) {
    $this->database = $database ?? "";
    $this->host = $host ?? "";
    $this->port = $port ?? 0;
  }
}

type AwsAccountId = string;

class AwsIotAnalyticsParameters {
  public DataSetName $data_set_name;

  public function __construct(shape(
  ?'data_set_name' => DataSetName,
  ) $s = shape()) {
    $this->data_set_name = $data_set_name ?? "";
  }
}

type Boolean = bool;

class CalculatedColumn {
  public ColumnId $column_id;
  public ColumnName $column_name;
  public Expression $expression;

  public function __construct(shape(
  ?'column_id' => ColumnId,
  ?'column_name' => ColumnName,
  ?'expression' => Expression,
  ) $s = shape()) {
    $this->column_id = $column_id ?? "";
    $this->column_name = $column_name ?? "";
    $this->expression = $expression ?? "";
  }
}

type CalculatedColumnList = vec<CalculatedColumn>;

class CancelIngestionRequest {
  public AwsAccountId $aws_account_id;
  public string $data_set_id;
  public IngestionId $ingestion_id;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'data_set_id' => string,
  ?'ingestion_id' => IngestionId,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->data_set_id = $data_set_id ?? ;
    $this->ingestion_id = $ingestion_id ?? "";
  }
}

class CancelIngestionResponse {
  public Arn $arn;
  public IngestionId $ingestion_id;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'ingestion_id' => IngestionId,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->ingestion_id = $ingestion_id ?? "";
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class CastColumnTypeOperation {
  public ColumnName $column_name;
  public TypeCastFormat $format;
  public ColumnDataType $new_column_type;

  public function __construct(shape(
  ?'column_name' => ColumnName,
  ?'format' => TypeCastFormat,
  ?'new_column_type' => ColumnDataType,
  ) $s = shape()) {
    $this->column_name = $column_name ?? "";
    $this->format = $format ?? ;
    $this->new_column_type = $new_column_type ?? ;
  }
}

type Catalog = string;

type ClusterId = string;

type ColumnDataType = string;

class ColumnGroup {
  public GeoSpatialColumnGroup $geo_spatial_column_group;

  public function __construct(shape(
  ?'geo_spatial_column_group' => GeoSpatialColumnGroup,
  ) $s = shape()) {
    $this->geo_spatial_column_group = $geo_spatial_column_group ?? null;
  }
}

class ColumnGroupColumnSchema {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

type ColumnGroupColumnSchemaList = vec<ColumnGroupColumnSchema>;

type ColumnGroupList = vec<ColumnGroup>;

type ColumnGroupName = string;

class ColumnGroupSchema {
  public ColumnGroupColumnSchemaList $column_group_column_schema_list;
  public string $name;

  public function __construct(shape(
  ?'column_group_column_schema_list' => ColumnGroupColumnSchemaList,
  ?'name' => string,
  ) $s = shape()) {
    $this->column_group_column_schema_list = $column_group_column_schema_list ?? [];
    $this->name = $name ?? ;
  }
}

type ColumnGroupSchemaList = vec<ColumnGroupSchema>;

type ColumnId = string;

type ColumnList = vec<ColumnName>;

type ColumnName = string;

class ColumnSchema {
  public string $data_type;
  public string $geographic_role;
  public string $name;

  public function __construct(shape(
  ?'data_type' => string,
  ?'geographic_role' => string,
  ?'name' => string,
  ) $s = shape()) {
    $this->data_type = $data_type ?? ;
    $this->geographic_role = $geographic_role ?? ;
    $this->name = $name ?? ;
  }
}

type ColumnSchemaList = vec<ColumnSchema>;

class ColumnTag {
  public GeoSpatialDataRole $column_geographic_role;

  public function __construct(shape(
  ?'column_geographic_role' => GeoSpatialDataRole,
  ) $s = shape()) {
    $this->column_geographic_role = $column_geographic_role ?? ;
  }
}

type ColumnTagList = vec<ColumnTag>;

class ConcurrentUpdatingException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class ConflictException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class CreateColumnsOperation {
  public CalculatedColumnList $columns;

  public function __construct(shape(
  ?'columns' => CalculatedColumnList,
  ) $s = shape()) {
    $this->columns = $columns ?? ;
  }
}

class CreateDashboardRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
  public DashboardPublishOptions $dashboard_publish_options;
  public DashboardName $name;
  public Parameters $parameters;
  public ResourcePermissionList $permissions;
  public DashboardSourceEntity $source_entity;
  public TagList $tags;
  public VersionDescription $version_description;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'dashboard_publish_options' => DashboardPublishOptions,
  ?'name' => DashboardName,
  ?'parameters' => Parameters,
  ?'permissions' => ResourcePermissionList,
  ?'source_entity' => DashboardSourceEntity,
  ?'tags' => TagList,
  ?'version_description' => VersionDescription,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->dashboard_id = $dashboard_id ?? ;
    $this->dashboard_publish_options = $dashboard_publish_options ?? null;
    $this->name = $name ?? ;
    $this->parameters = $parameters ?? null;
    $this->permissions = $permissions ?? ;
    $this->source_entity = $source_entity ?? ;
    $this->tags = $tags ?? ;
    $this->version_description = $version_description ?? "";
  }
}

class CreateDashboardResponse {
  public Arn $arn;
  public ResourceStatus $creation_status;
  public RestrictiveResourceId $dashboard_id;
  public string $request_id;
  public StatusCode $status;
  public Arn $version_arn;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'creation_status' => ResourceStatus,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'version_arn' => Arn,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->creation_status = $creation_status ?? ;
    $this->dashboard_id = $dashboard_id ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->version_arn = $version_arn ?? ;
  }
}

class CreateDataSetRequest {
  public AwsAccountId $aws_account_id;
  public ColumnGroupList $column_groups;
  public ResourceId $data_set_id;
  public DataSetImportMode $import_mode;
  public LogicalTableMap $logical_table_map;
  public ResourceName $name;
  public ResourcePermissionList $permissions;
  public PhysicalTableMap $physical_table_map;
  public RowLevelPermissionDataSet $row_level_permission_data_set;
  public TagList $tags;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'column_groups' => ColumnGroupList,
  ?'data_set_id' => ResourceId,
  ?'import_mode' => DataSetImportMode,
  ?'logical_table_map' => LogicalTableMap,
  ?'name' => ResourceName,
  ?'permissions' => ResourcePermissionList,
  ?'physical_table_map' => PhysicalTableMap,
  ?'row_level_permission_data_set' => RowLevelPermissionDataSet,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->column_groups = $column_groups ?? ;
    $this->data_set_id = $data_set_id ?? ;
    $this->import_mode = $import_mode ?? ;
    $this->logical_table_map = $logical_table_map ?? [];
    $this->name = $name ?? ;
    $this->permissions = $permissions ?? ;
    $this->physical_table_map = $physical_table_map ?? [];
    $this->row_level_permission_data_set = $row_level_permission_data_set ?? null;
    $this->tags = $tags ?? ;
  }
}

class CreateDataSetResponse {
  public Arn $arn;
  public ResourceId $data_set_id;
  public Arn $ingestion_arn;
  public ResourceId $ingestion_id;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'data_set_id' => ResourceId,
  ?'ingestion_arn' => Arn,
  ?'ingestion_id' => ResourceId,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->data_set_id = $data_set_id ?? ;
    $this->ingestion_arn = $ingestion_arn ?? ;
    $this->ingestion_id = $ingestion_id ?? "";
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class CreateDataSourceRequest {
  public AwsAccountId $aws_account_id;
  public DataSourceCredentials $credentials;
  public ResourceId $data_source_id;
  public DataSourceParameters $data_source_parameters;
  public ResourceName $name;
  public ResourcePermissionList $permissions;
  public SslProperties $ssl_properties;
  public TagList $tags;
  public DataSourceType $type;
  public VpcConnectionProperties $vpc_connection_properties;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'credentials' => DataSourceCredentials,
  ?'data_source_id' => ResourceId,
  ?'data_source_parameters' => DataSourceParameters,
  ?'name' => ResourceName,
  ?'permissions' => ResourcePermissionList,
  ?'ssl_properties' => SslProperties,
  ?'tags' => TagList,
  ?'type' => DataSourceType,
  ?'vpc_connection_properties' => VpcConnectionProperties,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->credentials = $credentials ?? ;
    $this->data_source_id = $data_source_id ?? ;
    $this->data_source_parameters = $data_source_parameters ?? null;
    $this->name = $name ?? ;
    $this->permissions = $permissions ?? ;
    $this->ssl_properties = $ssl_properties ?? null;
    $this->tags = $tags ?? ;
    $this->type = $type ?? ;
    $this->vpc_connection_properties = $vpc_connection_properties ?? null;
  }
}

class CreateDataSourceResponse {
  public Arn $arn;
  public ResourceStatus $creation_status;
  public ResourceId $data_source_id;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'creation_status' => ResourceStatus,
  ?'data_source_id' => ResourceId,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->creation_status = $creation_status ?? ;
    $this->data_source_id = $data_source_id ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class CreateGroupMembershipRequest {
  public AwsAccountId $aws_account_id;
  public GroupName $group_name;
  public GroupMemberName $member_name;
  public Namespace $namespace;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'group_name' => GroupName,
  ?'member_name' => GroupMemberName,
  ?'namespace' => Namespace,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->group_name = $group_name ?? "";
    $this->member_name = $member_name ?? ;
    $this->namespace = $namespace ?? "";
  }
}

class CreateGroupMembershipResponse {
  public GroupMember $group_member;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'group_member' => GroupMember,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->group_member = $group_member ?? null;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class CreateGroupRequest {
  public AwsAccountId $aws_account_id;
  public GroupDescription $description;
  public GroupName $group_name;
  public Namespace $namespace;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'description' => GroupDescription,
  ?'group_name' => GroupName,
  ?'namespace' => Namespace,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->description = $description ?? ;
    $this->group_name = $group_name ?? "";
    $this->namespace = $namespace ?? "";
  }
}

class CreateGroupResponse {
  public Group $group;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'group' => Group,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->group = $group ?? null;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class CreateIAMPolicyAssignmentRequest {
  public IAMPolicyAssignmentName $assignment_name;
  public AssignmentStatus $assignment_status;
  public AwsAccountId $aws_account_id;
  public IdentityMap $identities;
  public Namespace $namespace;
  public Arn $policy_arn;

  public function __construct(shape(
  ?'assignment_name' => IAMPolicyAssignmentName,
  ?'assignment_status' => AssignmentStatus,
  ?'aws_account_id' => AwsAccountId,
  ?'identities' => IdentityMap,
  ?'namespace' => Namespace,
  ?'policy_arn' => Arn,
  ) $s = shape()) {
    $this->assignment_name = $assignment_name ?? ;
    $this->assignment_status = $assignment_status ?? "";
    $this->aws_account_id = $aws_account_id ?? "";
    $this->identities = $identities ?? ;
    $this->namespace = $namespace ?? "";
    $this->policy_arn = $policy_arn ?? ;
  }
}

class CreateIAMPolicyAssignmentResponse {
  public string $assignment_id;
  public IAMPolicyAssignmentName $assignment_name;
  public AssignmentStatus $assignment_status;
  public IdentityMap $identities;
  public Arn $policy_arn;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'assignment_id' => string,
  ?'assignment_name' => IAMPolicyAssignmentName,
  ?'assignment_status' => AssignmentStatus,
  ?'identities' => IdentityMap,
  ?'policy_arn' => Arn,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->assignment_id = $assignment_id ?? ;
    $this->assignment_name = $assignment_name ?? ;
    $this->assignment_status = $assignment_status ?? "";
    $this->identities = $identities ?? ;
    $this->policy_arn = $policy_arn ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class CreateIngestionRequest {
  public AwsAccountId $aws_account_id;
  public string $data_set_id;
  public IngestionId $ingestion_id;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'data_set_id' => string,
  ?'ingestion_id' => IngestionId,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->data_set_id = $data_set_id ?? ;
    $this->ingestion_id = $ingestion_id ?? "";
  }
}

class CreateIngestionResponse {
  public Arn $arn;
  public IngestionId $ingestion_id;
  public IngestionStatus $ingestion_status;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'ingestion_id' => IngestionId,
  ?'ingestion_status' => IngestionStatus,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->ingestion_id = $ingestion_id ?? "";
    $this->ingestion_status = $ingestion_status ?? "";
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class CreateTemplateAliasRequest {
  public AliasName $alias_name;
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $template_id;
  public VersionNumber $template_version_number;

  public function __construct(shape(
  ?'alias_name' => AliasName,
  ?'aws_account_id' => AwsAccountId,
  ?'template_id' => RestrictiveResourceId,
  ?'template_version_number' => VersionNumber,
  ) $s = shape()) {
    $this->alias_name = $alias_name ?? "";
    $this->aws_account_id = $aws_account_id ?? "";
    $this->template_id = $template_id ?? ;
    $this->template_version_number = $template_version_number ?? ;
  }
}

class CreateTemplateAliasResponse {
  public string $request_id;
  public StatusCode $status;
  public TemplateAlias $template_alias;

  public function __construct(shape(
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'template_alias' => TemplateAlias,
  ) $s = shape()) {
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->template_alias = $template_alias ?? null;
  }
}

class CreateTemplateRequest {
  public AwsAccountId $aws_account_id;
  public TemplateName $name;
  public ResourcePermissionList $permissions;
  public TemplateSourceEntity $source_entity;
  public TagList $tags;
  public RestrictiveResourceId $template_id;
  public VersionDescription $version_description;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'name' => TemplateName,
  ?'permissions' => ResourcePermissionList,
  ?'source_entity' => TemplateSourceEntity,
  ?'tags' => TagList,
  ?'template_id' => RestrictiveResourceId,
  ?'version_description' => VersionDescription,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->name = $name ?? ;
    $this->permissions = $permissions ?? ;
    $this->source_entity = $source_entity ?? ;
    $this->tags = $tags ?? ;
    $this->template_id = $template_id ?? ;
    $this->version_description = $version_description ?? "";
  }
}

class CreateTemplateResponse {
  public Arn $arn;
  public ResourceStatus $creation_status;
  public string $request_id;
  public StatusCode $status;
  public RestrictiveResourceId $template_id;
  public Arn $version_arn;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'creation_status' => ResourceStatus,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'template_id' => RestrictiveResourceId,
  ?'version_arn' => Arn,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->creation_status = $creation_status ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->template_id = $template_id ?? ;
    $this->version_arn = $version_arn ?? ;
  }
}

class CredentialPair {
  public Password $password;
  public Username $username;

  public function __construct(shape(
  ?'password' => Password,
  ?'username' => Username,
  ) $s = shape()) {
    $this->password = $password ?? "";
    $this->username = $username ?? "";
  }
}

class CustomSql {
  public InputColumnList $columns;
  public Arn $data_source_arn;
  public CustomSqlName $name;
  public SqlQuery $sql_query;

  public function __construct(shape(
  ?'columns' => InputColumnList,
  ?'data_source_arn' => Arn,
  ?'name' => CustomSqlName,
  ?'sql_query' => SqlQuery,
  ) $s = shape()) {
    $this->columns = $columns ?? ;
    $this->data_source_arn = $data_source_arn ?? ;
    $this->name = $name ?? ;
    $this->sql_query = $sql_query ?? "";
  }
}

type CustomSqlName = string;

class Dashboard {
  public Arn $arn;
  public Timestamp $created_time;
  public RestrictiveResourceId $dashboard_id;
  public Timestamp $last_published_time;
  public Timestamp $last_updated_time;
  public DashboardName $name;
  public DashboardVersion $version;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'created_time' => Timestamp,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'last_published_time' => Timestamp,
  ?'last_updated_time' => Timestamp,
  ?'name' => DashboardName,
  ?'version' => DashboardVersion,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_time = $created_time ?? ;
    $this->dashboard_id = $dashboard_id ?? ;
    $this->last_published_time = $last_published_time ?? ;
    $this->last_updated_time = $last_updated_time ?? ;
    $this->name = $name ?? ;
    $this->version = $version ?? ;
  }
}

type DashboardBehavior = string;

class DashboardError {
  public NonEmptyString $message;
  public DashboardErrorType $type;

  public function __construct(shape(
  ?'message' => NonEmptyString,
  ?'type' => DashboardErrorType,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->type = $type ?? ;
  }
}

type DashboardErrorList = vec<DashboardError>;

type DashboardErrorType = string;

type DashboardFilterAttribute = string;

type DashboardName = string;

class DashboardPublishOptions {
  public AdHocFilteringOption $ad_hoc_filtering_option;
  public ExportToCSVOption $export_to_csv_option;
  public SheetControlsOption $sheet_controls_option;

  public function __construct(shape(
  ?'ad_hoc_filtering_option' => AdHocFilteringOption,
  ?'export_to_csv_option' => ExportToCSVOption,
  ?'sheet_controls_option' => SheetControlsOption,
  ) $s = shape()) {
    $this->ad_hoc_filtering_option = $ad_hoc_filtering_option ?? null;
    $this->export_to_csv_option = $export_to_csv_option ?? null;
    $this->sheet_controls_option = $sheet_controls_option ?? null;
  }
}

class DashboardSearchFilter {
  public DashboardFilterAttribute $name;
  public FilterOperator $operator;
  public string $value;

  public function __construct(shape(
  ?'name' => DashboardFilterAttribute,
  ?'operator' => FilterOperator,
  ?'value' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->operator = $operator ?? ;
    $this->value = $value ?? ;
  }
}

type DashboardSearchFilterList = vec<DashboardSearchFilter>;

class DashboardSourceEntity {
  public DashboardSourceTemplate $source_template;

  public function __construct(shape(
  ?'source_template' => DashboardSourceTemplate,
  ) $s = shape()) {
    $this->source_template = $source_template ?? ;
  }
}

class DashboardSourceTemplate {
  public Arn $arn;
  public DataSetReferenceList $data_set_references;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'data_set_references' => DataSetReferenceList,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->data_set_references = $data_set_references ?? ;
  }
}

class DashboardSummary {
  public Arn $arn;
  public Timestamp $created_time;
  public RestrictiveResourceId $dashboard_id;
  public Timestamp $last_published_time;
  public Timestamp $last_updated_time;
  public DashboardName $name;
  public VersionNumber $published_version_number;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'created_time' => Timestamp,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'last_published_time' => Timestamp,
  ?'last_updated_time' => Timestamp,
  ?'name' => DashboardName,
  ?'published_version_number' => VersionNumber,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_time = $created_time ?? ;
    $this->dashboard_id = $dashboard_id ?? ;
    $this->last_published_time = $last_published_time ?? ;
    $this->last_updated_time = $last_updated_time ?? ;
    $this->name = $name ?? ;
    $this->published_version_number = $published_version_number ?? ;
  }
}

type DashboardSummaryList = vec<DashboardSummary>;

type DashboardUIState = string;

class DashboardVersion {
  public Arn $arn;
  public Timestamp $created_time;
  public VersionDescription $description;
  public DashboardErrorList $errors;
  public Arn $source_entity_arn;
  public ResourceStatus $status;
  public VersionNumber $version_number;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'created_time' => Timestamp,
  ?'description' => VersionDescription,
  ?'errors' => DashboardErrorList,
  ?'source_entity_arn' => Arn,
  ?'status' => ResourceStatus,
  ?'version_number' => VersionNumber,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_time = $created_time ?? ;
    $this->description = $description ?? ;
    $this->errors = $errors ?? ;
    $this->source_entity_arn = $source_entity_arn ?? ;
    $this->status = $status ?? ;
    $this->version_number = $version_number ?? 0;
  }
}

class DashboardVersionSummary {
  public Arn $arn;
  public Timestamp $created_time;
  public VersionDescription $description;
  public Arn $source_entity_arn;
  public ResourceStatus $status;
  public VersionNumber $version_number;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'created_time' => Timestamp,
  ?'description' => VersionDescription,
  ?'source_entity_arn' => Arn,
  ?'status' => ResourceStatus,
  ?'version_number' => VersionNumber,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_time = $created_time ?? ;
    $this->description = $description ?? ;
    $this->source_entity_arn = $source_entity_arn ?? ;
    $this->status = $status ?? ;
    $this->version_number = $version_number ?? 0;
  }
}

type DashboardVersionSummaryList = vec<DashboardVersionSummary>;

class DataSet {
  public Arn $arn;
  public ColumnGroupList $column_groups;
  public Long $consumed_spice_capacity_in_bytes;
  public Timestamp $created_time;
  public ResourceId $data_set_id;
  public DataSetImportMode $import_mode;
  public Timestamp $last_updated_time;
  public LogicalTableMap $logical_table_map;
  public ResourceName $name;
  public OutputColumnList $output_columns;
  public PhysicalTableMap $physical_table_map;
  public RowLevelPermissionDataSet $row_level_permission_data_set;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'column_groups' => ColumnGroupList,
  ?'consumed_spice_capacity_in_bytes' => Long,
  ?'created_time' => Timestamp,
  ?'data_set_id' => ResourceId,
  ?'import_mode' => DataSetImportMode,
  ?'last_updated_time' => Timestamp,
  ?'logical_table_map' => LogicalTableMap,
  ?'name' => ResourceName,
  ?'output_columns' => OutputColumnList,
  ?'physical_table_map' => PhysicalTableMap,
  ?'row_level_permission_data_set' => RowLevelPermissionDataSet,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->column_groups = $column_groups ?? ;
    $this->consumed_spice_capacity_in_bytes = $consumed_spice_capacity_in_bytes ?? ;
    $this->created_time = $created_time ?? ;
    $this->data_set_id = $data_set_id ?? ;
    $this->import_mode = $import_mode ?? ;
    $this->last_updated_time = $last_updated_time ?? ;
    $this->logical_table_map = $logical_table_map ?? [];
    $this->name = $name ?? ;
    $this->output_columns = $output_columns ?? ;
    $this->physical_table_map = $physical_table_map ?? [];
    $this->row_level_permission_data_set = $row_level_permission_data_set ?? null;
  }
}

class DataSetConfiguration {
  public ColumnGroupSchemaList $column_group_schema_list;
  public DataSetSchema $data_set_schema;
  public string $placeholder;

  public function __construct(shape(
  ?'column_group_schema_list' => ColumnGroupSchemaList,
  ?'data_set_schema' => DataSetSchema,
  ?'placeholder' => string,
  ) $s = shape()) {
    $this->column_group_schema_list = $column_group_schema_list ?? [];
    $this->data_set_schema = $data_set_schema ?? null;
    $this->placeholder = $placeholder ?? ;
  }
}

type DataSetConfigurationList = vec<DataSetConfiguration>;

type DataSetImportMode = string;

type DataSetName = string;

class DataSetReference {
  public Arn $data_set_arn;
  public NonEmptyString $data_set_placeholder;

  public function __construct(shape(
  ?'data_set_arn' => Arn,
  ?'data_set_placeholder' => NonEmptyString,
  ) $s = shape()) {
    $this->data_set_arn = $data_set_arn ?? ;
    $this->data_set_placeholder = $data_set_placeholder ?? ;
  }
}

type DataSetReferenceList = vec<DataSetReference>;

class DataSetSchema {
  public ColumnSchemaList $column_schema_list;

  public function __construct(shape(
  ?'column_schema_list' => ColumnSchemaList,
  ) $s = shape()) {
    $this->column_schema_list = $column_schema_list ?? [];
  }
}

class DataSetSummary {
  public Arn $arn;
  public Timestamp $created_time;
  public ResourceId $data_set_id;
  public DataSetImportMode $import_mode;
  public Timestamp $last_updated_time;
  public ResourceName $name;
  public RowLevelPermissionDataSet $row_level_permission_data_set;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'created_time' => Timestamp,
  ?'data_set_id' => ResourceId,
  ?'import_mode' => DataSetImportMode,
  ?'last_updated_time' => Timestamp,
  ?'name' => ResourceName,
  ?'row_level_permission_data_set' => RowLevelPermissionDataSet,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_time = $created_time ?? ;
    $this->data_set_id = $data_set_id ?? ;
    $this->import_mode = $import_mode ?? ;
    $this->last_updated_time = $last_updated_time ?? ;
    $this->name = $name ?? ;
    $this->row_level_permission_data_set = $row_level_permission_data_set ?? null;
  }
}

type DataSetSummaryList = vec<DataSetSummary>;

class DataSource {
  public Arn $arn;
  public Timestamp $created_time;
  public ResourceId $data_source_id;
  public DataSourceParameters $data_source_parameters;
  public DataSourceErrorInfo $error_info;
  public Timestamp $last_updated_time;
  public ResourceName $name;
  public SslProperties $ssl_properties;
  public ResourceStatus $status;
  public DataSourceType $type;
  public VpcConnectionProperties $vpc_connection_properties;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'created_time' => Timestamp,
  ?'data_source_id' => ResourceId,
  ?'data_source_parameters' => DataSourceParameters,
  ?'error_info' => DataSourceErrorInfo,
  ?'last_updated_time' => Timestamp,
  ?'name' => ResourceName,
  ?'ssl_properties' => SslProperties,
  ?'status' => ResourceStatus,
  ?'type' => DataSourceType,
  ?'vpc_connection_properties' => VpcConnectionProperties,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_time = $created_time ?? ;
    $this->data_source_id = $data_source_id ?? ;
    $this->data_source_parameters = $data_source_parameters ?? null;
    $this->error_info = $error_info ?? null;
    $this->last_updated_time = $last_updated_time ?? ;
    $this->name = $name ?? ;
    $this->ssl_properties = $ssl_properties ?? null;
    $this->status = $status ?? ;
    $this->type = $type ?? ;
    $this->vpc_connection_properties = $vpc_connection_properties ?? null;
  }
}

class DataSourceCredentials {
  public CredentialPair $credential_pair;

  public function __construct(shape(
  ?'credential_pair' => CredentialPair,
  ) $s = shape()) {
    $this->credential_pair = $credential_pair ?? null;
  }
}

class DataSourceErrorInfo {
  public string $message;
  public DataSourceErrorInfoType $type;

  public function __construct(shape(
  ?'message' => string,
  ?'type' => DataSourceErrorInfoType,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->type = $type ?? ;
  }
}

type DataSourceErrorInfoType = string;

type DataSourceList = vec<DataSource>;

class DataSourceParameters {
  public AmazonElasticsearchParameters $amazon_elasticsearch_parameters;
  public AthenaParameters $athena_parameters;
  public AuroraParameters $aurora_parameters;
  public AuroraPostgreSqlParameters $aurora_postgre_sql_parameters;
  public AwsIotAnalyticsParameters $aws_iot_analytics_parameters;
  public JiraParameters $jira_parameters;
  public MariaDbParameters $maria_db_parameters;
  public MySqlParameters $my_sql_parameters;
  public PostgreSqlParameters $postgre_sql_parameters;
  public PrestoParameters $presto_parameters;
  public RdsParameters $rds_parameters;
  public RedshiftParameters $redshift_parameters;
  public S3Parameters $s_3_parameters;
  public ServiceNowParameters $service_now_parameters;
  public SnowflakeParameters $snowflake_parameters;
  public SparkParameters $spark_parameters;
  public SqlServerParameters $sql_server_parameters;
  public TeradataParameters $teradata_parameters;
  public TwitterParameters $twitter_parameters;

  public function __construct(shape(
  ?'amazon_elasticsearch_parameters' => AmazonElasticsearchParameters,
  ?'athena_parameters' => AthenaParameters,
  ?'aurora_parameters' => AuroraParameters,
  ?'aurora_postgre_sql_parameters' => AuroraPostgreSqlParameters,
  ?'aws_iot_analytics_parameters' => AwsIotAnalyticsParameters,
  ?'jira_parameters' => JiraParameters,
  ?'maria_db_parameters' => MariaDbParameters,
  ?'my_sql_parameters' => MySqlParameters,
  ?'postgre_sql_parameters' => PostgreSqlParameters,
  ?'presto_parameters' => PrestoParameters,
  ?'rds_parameters' => RdsParameters,
  ?'redshift_parameters' => RedshiftParameters,
  ?'s_3_parameters' => S3Parameters,
  ?'service_now_parameters' => ServiceNowParameters,
  ?'snowflake_parameters' => SnowflakeParameters,
  ?'spark_parameters' => SparkParameters,
  ?'sql_server_parameters' => SqlServerParameters,
  ?'teradata_parameters' => TeradataParameters,
  ?'twitter_parameters' => TwitterParameters,
  ) $s = shape()) {
    $this->amazon_elasticsearch_parameters = $amazon_elasticsearch_parameters ?? null;
    $this->athena_parameters = $athena_parameters ?? null;
    $this->aurora_parameters = $aurora_parameters ?? null;
    $this->aurora_postgre_sql_parameters = $aurora_postgre_sql_parameters ?? null;
    $this->aws_iot_analytics_parameters = $aws_iot_analytics_parameters ?? null;
    $this->jira_parameters = $jira_parameters ?? null;
    $this->maria_db_parameters = $maria_db_parameters ?? null;
    $this->my_sql_parameters = $my_sql_parameters ?? null;
    $this->postgre_sql_parameters = $postgre_sql_parameters ?? null;
    $this->presto_parameters = $presto_parameters ?? null;
    $this->rds_parameters = $rds_parameters ?? null;
    $this->redshift_parameters = $redshift_parameters ?? null;
    $this->s_3_parameters = $s_3_parameters ?? null;
    $this->service_now_parameters = $service_now_parameters ?? null;
    $this->snowflake_parameters = $snowflake_parameters ?? null;
    $this->spark_parameters = $spark_parameters ?? null;
    $this->sql_server_parameters = $sql_server_parameters ?? null;
    $this->teradata_parameters = $teradata_parameters ?? null;
    $this->twitter_parameters = $twitter_parameters ?? null;
  }
}

type DataSourceType = string;

type Database = string;

class DateTimeParameter {
  public NonEmptyString $name;
  public TimestampList $values;

  public function __construct(shape(
  ?'name' => NonEmptyString,
  ?'values' => TimestampList,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->values = $values ?? ;
  }
}

type DateTimeParameterList = vec<DateTimeParameter>;

class DecimalParameter {
  public NonEmptyString $name;
  public DoubleList $values;

  public function __construct(shape(
  ?'name' => NonEmptyString,
  ?'values' => DoubleList,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->values = $values ?? ;
  }
}

type DecimalParameterList = vec<DecimalParameter>;

class DeleteDashboardRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
  public VersionNumber $version_number;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'version_number' => VersionNumber,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->dashboard_id = $dashboard_id ?? ;
    $this->version_number = $version_number ?? 0;
  }
}

class DeleteDashboardResponse {
  public Arn $arn;
  public RestrictiveResourceId $dashboard_id;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->dashboard_id = $dashboard_id ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DeleteDataSetRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_set_id;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'data_set_id' => ResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->data_set_id = $data_set_id ?? ;
  }
}

class DeleteDataSetResponse {
  public Arn $arn;
  public ResourceId $data_set_id;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'data_set_id' => ResourceId,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->data_set_id = $data_set_id ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DeleteDataSourceRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_source_id;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'data_source_id' => ResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->data_source_id = $data_source_id ?? ;
  }
}

class DeleteDataSourceResponse {
  public Arn $arn;
  public ResourceId $data_source_id;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'data_source_id' => ResourceId,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->data_source_id = $data_source_id ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DeleteGroupMembershipRequest {
  public AwsAccountId $aws_account_id;
  public GroupName $group_name;
  public GroupMemberName $member_name;
  public Namespace $namespace;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'group_name' => GroupName,
  ?'member_name' => GroupMemberName,
  ?'namespace' => Namespace,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->group_name = $group_name ?? "";
    $this->member_name = $member_name ?? ;
    $this->namespace = $namespace ?? "";
  }
}

class DeleteGroupMembershipResponse {
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DeleteGroupRequest {
  public AwsAccountId $aws_account_id;
  public GroupName $group_name;
  public Namespace $namespace;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'group_name' => GroupName,
  ?'namespace' => Namespace,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->group_name = $group_name ?? "";
    $this->namespace = $namespace ?? "";
  }
}

class DeleteGroupResponse {
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DeleteIAMPolicyAssignmentRequest {
  public IAMPolicyAssignmentName $assignment_name;
  public AwsAccountId $aws_account_id;
  public Namespace $namespace;

  public function __construct(shape(
  ?'assignment_name' => IAMPolicyAssignmentName,
  ?'aws_account_id' => AwsAccountId,
  ?'namespace' => Namespace,
  ) $s = shape()) {
    $this->assignment_name = $assignment_name ?? ;
    $this->aws_account_id = $aws_account_id ?? "";
    $this->namespace = $namespace ?? "";
  }
}

class DeleteIAMPolicyAssignmentResponse {
  public IAMPolicyAssignmentName $assignment_name;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'assignment_name' => IAMPolicyAssignmentName,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->assignment_name = $assignment_name ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DeleteTemplateAliasRequest {
  public AliasName $alias_name;
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $template_id;

  public function __construct(shape(
  ?'alias_name' => AliasName,
  ?'aws_account_id' => AwsAccountId,
  ?'template_id' => RestrictiveResourceId,
  ) $s = shape()) {
    $this->alias_name = $alias_name ?? "";
    $this->aws_account_id = $aws_account_id ?? "";
    $this->template_id = $template_id ?? ;
  }
}

class DeleteTemplateAliasResponse {
  public AliasName $alias_name;
  public Arn $arn;
  public string $request_id;
  public StatusCode $status;
  public RestrictiveResourceId $template_id;

  public function __construct(shape(
  ?'alias_name' => AliasName,
  ?'arn' => Arn,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'template_id' => RestrictiveResourceId,
  ) $s = shape()) {
    $this->alias_name = $alias_name ?? "";
    $this->arn = $arn ?? "";
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->template_id = $template_id ?? ;
  }
}

class DeleteTemplateRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $template_id;
  public VersionNumber $version_number;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'template_id' => RestrictiveResourceId,
  ?'version_number' => VersionNumber,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->template_id = $template_id ?? ;
    $this->version_number = $version_number ?? 0;
  }
}

class DeleteTemplateResponse {
  public Arn $arn;
  public string $request_id;
  public StatusCode $status;
  public RestrictiveResourceId $template_id;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'template_id' => RestrictiveResourceId,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->template_id = $template_id ?? ;
  }
}

class DeleteUserByPrincipalIdRequest {
  public AwsAccountId $aws_account_id;
  public Namespace $namespace;
  public string $principal_id;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'namespace' => Namespace,
  ?'principal_id' => string,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->namespace = $namespace ?? "";
    $this->principal_id = $principal_id ?? ;
  }
}

class DeleteUserByPrincipalIdResponse {
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DeleteUserRequest {
  public AwsAccountId $aws_account_id;
  public Namespace $namespace;
  public UserName $user_name;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'namespace' => Namespace,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->namespace = $namespace ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class DeleteUserResponse {
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

type Delimiter = string;

class DescribeDashboardPermissionsRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'dashboard_id' => RestrictiveResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->dashboard_id = $dashboard_id ?? ;
  }
}

class DescribeDashboardPermissionsResponse {
  public Arn $dashboard_arn;
  public RestrictiveResourceId $dashboard_id;
  public ResourcePermissionList $permissions;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'dashboard_arn' => Arn,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'permissions' => ResourcePermissionList,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->dashboard_arn = $dashboard_arn ?? ;
    $this->dashboard_id = $dashboard_id ?? ;
    $this->permissions = $permissions ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DescribeDashboardRequest {
  public AliasName $alias_name;
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
  public VersionNumber $version_number;

  public function __construct(shape(
  ?'alias_name' => AliasName,
  ?'aws_account_id' => AwsAccountId,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'version_number' => VersionNumber,
  ) $s = shape()) {
    $this->alias_name = $alias_name ?? "";
    $this->aws_account_id = $aws_account_id ?? "";
    $this->dashboard_id = $dashboard_id ?? ;
    $this->version_number = $version_number ?? 0;
  }
}

class DescribeDashboardResponse {
  public Dashboard $dashboard;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'dashboard' => Dashboard,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->dashboard = $dashboard ?? null;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DescribeDataSetPermissionsRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_set_id;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'data_set_id' => ResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->data_set_id = $data_set_id ?? ;
  }
}

class DescribeDataSetPermissionsResponse {
  public Arn $data_set_arn;
  public ResourceId $data_set_id;
  public ResourcePermissionList $permissions;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'data_set_arn' => Arn,
  ?'data_set_id' => ResourceId,
  ?'permissions' => ResourcePermissionList,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->data_set_arn = $data_set_arn ?? ;
    $this->data_set_id = $data_set_id ?? ;
    $this->permissions = $permissions ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DescribeDataSetRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_set_id;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'data_set_id' => ResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->data_set_id = $data_set_id ?? ;
  }
}

class DescribeDataSetResponse {
  public DataSet $data_set;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'data_set' => DataSet,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->data_set = $data_set ?? null;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DescribeDataSourcePermissionsRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_source_id;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'data_source_id' => ResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->data_source_id = $data_source_id ?? ;
  }
}

class DescribeDataSourcePermissionsResponse {
  public Arn $data_source_arn;
  public ResourceId $data_source_id;
  public ResourcePermissionList $permissions;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'data_source_arn' => Arn,
  ?'data_source_id' => ResourceId,
  ?'permissions' => ResourcePermissionList,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->data_source_arn = $data_source_arn ?? ;
    $this->data_source_id = $data_source_id ?? ;
    $this->permissions = $permissions ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DescribeDataSourceRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_source_id;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'data_source_id' => ResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->data_source_id = $data_source_id ?? ;
  }
}

class DescribeDataSourceResponse {
  public DataSource $data_source;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'data_source' => DataSource,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->data_source = $data_source ?? null;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DescribeGroupRequest {
  public AwsAccountId $aws_account_id;
  public GroupName $group_name;
  public Namespace $namespace;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'group_name' => GroupName,
  ?'namespace' => Namespace,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->group_name = $group_name ?? "";
    $this->namespace = $namespace ?? "";
  }
}

class DescribeGroupResponse {
  public Group $group;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'group' => Group,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->group = $group ?? null;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DescribeIAMPolicyAssignmentRequest {
  public IAMPolicyAssignmentName $assignment_name;
  public AwsAccountId $aws_account_id;
  public Namespace $namespace;

  public function __construct(shape(
  ?'assignment_name' => IAMPolicyAssignmentName,
  ?'aws_account_id' => AwsAccountId,
  ?'namespace' => Namespace,
  ) $s = shape()) {
    $this->assignment_name = $assignment_name ?? ;
    $this->aws_account_id = $aws_account_id ?? "";
    $this->namespace = $namespace ?? "";
  }
}

class DescribeIAMPolicyAssignmentResponse {
  public IAMPolicyAssignment $iam_policy_assignment;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'iam_policy_assignment' => IAMPolicyAssignment,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->iam_policy_assignment = $iam_policy_assignment ?? null;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DescribeIngestionRequest {
  public AwsAccountId $aws_account_id;
  public string $data_set_id;
  public IngestionId $ingestion_id;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'data_set_id' => string,
  ?'ingestion_id' => IngestionId,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->data_set_id = $data_set_id ?? ;
    $this->ingestion_id = $ingestion_id ?? "";
  }
}

class DescribeIngestionResponse {
  public Ingestion $ingestion;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'ingestion' => Ingestion,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->ingestion = $ingestion ?? null;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class DescribeTemplateAliasRequest {
  public AliasName $alias_name;
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $template_id;

  public function __construct(shape(
  ?'alias_name' => AliasName,
  ?'aws_account_id' => AwsAccountId,
  ?'template_id' => RestrictiveResourceId,
  ) $s = shape()) {
    $this->alias_name = $alias_name ?? "";
    $this->aws_account_id = $aws_account_id ?? "";
    $this->template_id = $template_id ?? ;
  }
}

class DescribeTemplateAliasResponse {
  public string $request_id;
  public StatusCode $status;
  public TemplateAlias $template_alias;

  public function __construct(shape(
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'template_alias' => TemplateAlias,
  ) $s = shape()) {
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->template_alias = $template_alias ?? null;
  }
}

class DescribeTemplatePermissionsRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $template_id;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'template_id' => RestrictiveResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->template_id = $template_id ?? ;
  }
}

class DescribeTemplatePermissionsResponse {
  public ResourcePermissionList $permissions;
  public string $request_id;
  public StatusCode $status;
  public Arn $template_arn;
  public RestrictiveResourceId $template_id;

  public function __construct(shape(
  ?'permissions' => ResourcePermissionList,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'template_arn' => Arn,
  ?'template_id' => RestrictiveResourceId,
  ) $s = shape()) {
    $this->permissions = $permissions ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->template_arn = $template_arn ?? ;
    $this->template_id = $template_id ?? ;
  }
}

class DescribeTemplateRequest {
  public AliasName $alias_name;
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $template_id;
  public VersionNumber $version_number;

  public function __construct(shape(
  ?'alias_name' => AliasName,
  ?'aws_account_id' => AwsAccountId,
  ?'template_id' => RestrictiveResourceId,
  ?'version_number' => VersionNumber,
  ) $s = shape()) {
    $this->alias_name = $alias_name ?? "";
    $this->aws_account_id = $aws_account_id ?? "";
    $this->template_id = $template_id ?? ;
    $this->version_number = $version_number ?? 0;
  }
}

class DescribeTemplateResponse {
  public StatusCode $status;
  public Template $template;

  public function __construct(shape(
  ?'status' => StatusCode,
  ?'template' => Template,
  ) $s = shape()) {
    $this->status = $status ?? ;
    $this->template = $template ?? null;
  }
}

class DescribeUserRequest {
  public AwsAccountId $aws_account_id;
  public Namespace $namespace;
  public UserName $user_name;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'namespace' => Namespace,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->namespace = $namespace ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class DescribeUserResponse {
  public string $request_id;
  public StatusCode $status;
  public User $user;

  public function __construct(shape(
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'user' => User,
  ) $s = shape()) {
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->user = $user ?? null;
  }
}

type Domain = string;

class DomainNotWhitelistedException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
  }
}

type Double = float;

type DoubleList = vec<Double>;

type EmbeddingUrl = string;

class ErrorInfo {
  public string $message;
  public IngestionErrorType $type;

  public function __construct(shape(
  ?'message' => string,
  ?'type' => IngestionErrorType,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->type = $type ?? ;
  }
}

type ExceptionResourceType = string;

class ExportToCSVOption {
  public DashboardBehavior $availability_status;

  public function __construct(shape(
  ?'availability_status' => DashboardBehavior,
  ) $s = shape()) {
    $this->availability_status = $availability_status ?? ;
  }
}

type Expression = string;

type FileFormat = string;

class FilterOperation {
  public Expression $condition_expression;

  public function __construct(shape(
  ?'condition_expression' => Expression,
  ) $s = shape()) {
    $this->condition_expression = $condition_expression ?? ;
  }
}

type FilterOperator = string;

class GeoSpatialColumnGroup {
  public ColumnList $columns;
  public GeoSpatialCountryCode $country_code;
  public ColumnGroupName $name;

  public function __construct(shape(
  ?'columns' => ColumnList,
  ?'country_code' => GeoSpatialCountryCode,
  ?'name' => ColumnGroupName,
  ) $s = shape()) {
    $this->columns = $columns ?? ;
    $this->country_code = $country_code ?? ;
    $this->name = $name ?? ;
  }
}

type GeoSpatialCountryCode = string;

type GeoSpatialDataRole = string;

class GetDashboardEmbedUrlRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
  public IdentityType $identity_type;
  public boolean $reset_disabled;
  public SessionLifetimeInMinutes $session_lifetime_in_minutes;
  public boolean $undo_redo_disabled;
  public Arn $user_arn;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'identity_type' => IdentityType,
  ?'reset_disabled' => boolean,
  ?'session_lifetime_in_minutes' => SessionLifetimeInMinutes,
  ?'undo_redo_disabled' => boolean,
  ?'user_arn' => Arn,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->dashboard_id = $dashboard_id ?? ;
    $this->identity_type = $identity_type ?? "";
    $this->reset_disabled = $reset_disabled ?? ;
    $this->session_lifetime_in_minutes = $session_lifetime_in_minutes ?? 0;
    $this->undo_redo_disabled = $undo_redo_disabled ?? ;
    $this->user_arn = $user_arn ?? ;
  }
}

class GetDashboardEmbedUrlResponse {
  public EmbeddingUrl $embed_url;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'embed_url' => EmbeddingUrl,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->embed_url = $embed_url ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class Group {
  public Arn $arn;
  public GroupDescription $description;
  public GroupName $group_name;
  public string $principal_id;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'description' => GroupDescription,
  ?'group_name' => GroupName,
  ?'principal_id' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->description = $description ?? ;
    $this->group_name = $group_name ?? "";
    $this->principal_id = $principal_id ?? ;
  }
}

type GroupDescription = string;

type GroupList = vec<Group>;

class GroupMember {
  public Arn $arn;
  public GroupMemberName $member_name;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'member_name' => GroupMemberName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->member_name = $member_name ?? ;
  }
}

type GroupMemberList = vec<GroupMember>;

type GroupMemberName = string;

type GroupName = string;

type Host = string;

class IAMPolicyAssignment {
  public string $assignment_id;
  public IAMPolicyAssignmentName $assignment_name;
  public AssignmentStatus $assignment_status;
  public AwsAccountId $aws_account_id;
  public IdentityMap $identities;
  public Arn $policy_arn;

  public function __construct(shape(
  ?'assignment_id' => string,
  ?'assignment_name' => IAMPolicyAssignmentName,
  ?'assignment_status' => AssignmentStatus,
  ?'aws_account_id' => AwsAccountId,
  ?'identities' => IdentityMap,
  ?'policy_arn' => Arn,
  ) $s = shape()) {
    $this->assignment_id = $assignment_id ?? ;
    $this->assignment_name = $assignment_name ?? ;
    $this->assignment_status = $assignment_status ?? "";
    $this->aws_account_id = $aws_account_id ?? "";
    $this->identities = $identities ?? ;
    $this->policy_arn = $policy_arn ?? ;
  }
}

type IAMPolicyAssignmentName = string;

class IAMPolicyAssignmentSummary {
  public IAMPolicyAssignmentName $assignment_name;
  public AssignmentStatus $assignment_status;

  public function __construct(shape(
  ?'assignment_name' => IAMPolicyAssignmentName,
  ?'assignment_status' => AssignmentStatus,
  ) $s = shape()) {
    $this->assignment_name = $assignment_name ?? ;
    $this->assignment_status = $assignment_status ?? "";
  }
}

type IAMPolicyAssignmentSummaryList = vec<IAMPolicyAssignmentSummary>;

type IdentityMap = dict<String, IdentityNameList>;

type IdentityName = string;

type IdentityNameList = vec<IdentityName>;

type IdentityType = string;

class IdentityTypeNotSupportedException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class Ingestion {
  public Arn $arn;
  public timestamp $created_time;
  public ErrorInfo $error_info;
  public IngestionId $ingestion_id;
  public long $ingestion_size_in_bytes;
  public IngestionStatus $ingestion_status;
  public long $ingestion_time_in_seconds;
  public QueueInfo $queue_info;
  public IngestionRequestSource $request_source;
  public IngestionRequestType $request_type;
  public RowInfo $row_info;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'created_time' => timestamp,
  ?'error_info' => ErrorInfo,
  ?'ingestion_id' => IngestionId,
  ?'ingestion_size_in_bytes' => long,
  ?'ingestion_status' => IngestionStatus,
  ?'ingestion_time_in_seconds' => long,
  ?'queue_info' => QueueInfo,
  ?'request_source' => IngestionRequestSource,
  ?'request_type' => IngestionRequestType,
  ?'row_info' => RowInfo,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_time = $created_time ?? ;
    $this->error_info = $error_info ?? null;
    $this->ingestion_id = $ingestion_id ?? "";
    $this->ingestion_size_in_bytes = $ingestion_size_in_bytes ?? ;
    $this->ingestion_status = $ingestion_status ?? "";
    $this->ingestion_time_in_seconds = $ingestion_time_in_seconds ?? ;
    $this->queue_info = $queue_info ?? null;
    $this->request_source = $request_source ?? ;
    $this->request_type = $request_type ?? ;
    $this->row_info = $row_info ?? null;
  }
}

type IngestionErrorType = string;

type IngestionId = string;

type IngestionMaxResults = int;

type IngestionRequestSource = string;

type IngestionRequestType = string;

type IngestionStatus = string;

type Ingestions = vec<Ingestion>;

class InputColumn {
  public ColumnName $name;
  public InputColumnDataType $type;

  public function __construct(shape(
  ?'name' => ColumnName,
  ?'type' => InputColumnDataType,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->type = $type ?? ;
  }
}

type InputColumnDataType = string;

type InputColumnList = vec<InputColumn>;

type InstanceId = string;

class IntegerParameter {
  public NonEmptyString $name;
  public LongList $values;

  public function __construct(shape(
  ?'name' => NonEmptyString,
  ?'values' => LongList,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->values = $values ?? ;
  }
}

type IntegerParameterList = vec<IntegerParameter>;

class InternalFailureException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class InvalidNextTokenException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class InvalidParameterValueException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class JiraParameters {
  public SiteBaseUrl $site_base_url;

  public function __construct(shape(
  ?'site_base_url' => SiteBaseUrl,
  ) $s = shape()) {
    $this->site_base_url = $site_base_url ?? "";
  }
}

class JoinInstruction {
  public LogicalTableId $left_operand;
  public OnClause $on_clause;
  public LogicalTableId $right_operand;
  public JoinType $type;

  public function __construct(shape(
  ?'left_operand' => LogicalTableId,
  ?'on_clause' => OnClause,
  ?'right_operand' => LogicalTableId,
  ?'type' => JoinType,
  ) $s = shape()) {
    $this->left_operand = $left_operand ?? ;
    $this->on_clause = $on_clause ?? "";
    $this->right_operand = $right_operand ?? ;
    $this->type = $type ?? ;
  }
}

type JoinType = string;

class LimitExceededException {
  public string $message;
  public string $request_id;
  public ExceptionResourceType $resource_type;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ?'resource_type' => ExceptionResourceType,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
    $this->resource_type = $resource_type ?? ;
  }
}

class ListDashboardVersionsRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
  public MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->dashboard_id = $dashboard_id ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListDashboardVersionsResponse {
  public DashboardVersionSummaryList $dashboard_version_summary_list;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'dashboard_version_summary_list' => DashboardVersionSummaryList,
  ?'next_token' => string,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->dashboard_version_summary_list = $dashboard_version_summary_list ?? [];
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class ListDashboardsRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListDashboardsResponse {
  public DashboardSummaryList $dashboard_summary_list;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'dashboard_summary_list' => DashboardSummaryList,
  ?'next_token' => string,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->dashboard_summary_list = $dashboard_summary_list ?? [];
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class ListDataSetsRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListDataSetsResponse {
  public DataSetSummaryList $data_set_summaries;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'data_set_summaries' => DataSetSummaryList,
  ?'next_token' => string,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->data_set_summaries = $data_set_summaries ?? ;
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class ListDataSourcesRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListDataSourcesResponse {
  public DataSourceList $data_sources;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'data_sources' => DataSourceList,
  ?'next_token' => string,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->data_sources = $data_sources ?? ;
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class ListGroupMembershipsRequest {
  public AwsAccountId $aws_account_id;
  public GroupName $group_name;
  public MaxResults $max_results;
  public Namespace $namespace;
  public string $next_token;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'group_name' => GroupName,
  ?'max_results' => MaxResults,
  ?'namespace' => Namespace,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->group_name = $group_name ?? "";
    $this->max_results = $max_results ?? 0;
    $this->namespace = $namespace ?? "";
    $this->next_token = $next_token ?? ;
  }
}

class ListGroupMembershipsResponse {
  public GroupMemberList $group_member_list;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'group_member_list' => GroupMemberList,
  ?'next_token' => string,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->group_member_list = $group_member_list ?? [];
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class ListGroupsRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public Namespace $namespace;
  public string $next_token;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'max_results' => MaxResults,
  ?'namespace' => Namespace,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->namespace = $namespace ?? "";
    $this->next_token = $next_token ?? ;
  }
}

class ListGroupsResponse {
  public GroupList $group_list;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'group_list' => GroupList,
  ?'next_token' => string,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->group_list = $group_list ?? [];
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class ListIAMPolicyAssignmentsForUserRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public Namespace $namespace;
  public string $next_token;
  public UserName $user_name;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'max_results' => MaxResults,
  ?'namespace' => Namespace,
  ?'next_token' => string,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->namespace = $namespace ?? "";
    $this->next_token = $next_token ?? ;
    $this->user_name = $user_name ?? "";
  }
}

class ListIAMPolicyAssignmentsForUserResponse {
  public ActiveIAMPolicyAssignmentList $active_assignments;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'active_assignments' => ActiveIAMPolicyAssignmentList,
  ?'next_token' => string,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->active_assignments = $active_assignments ?? ;
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class ListIAMPolicyAssignmentsRequest {
  public AssignmentStatus $assignment_status;
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public Namespace $namespace;
  public string $next_token;

  public function __construct(shape(
  ?'assignment_status' => AssignmentStatus,
  ?'aws_account_id' => AwsAccountId,
  ?'max_results' => MaxResults,
  ?'namespace' => Namespace,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->assignment_status = $assignment_status ?? "";
    $this->aws_account_id = $aws_account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->namespace = $namespace ?? "";
    $this->next_token = $next_token ?? ;
  }
}

class ListIAMPolicyAssignmentsResponse {
  public IAMPolicyAssignmentSummaryList $iam_policy_assignments;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'iam_policy_assignments' => IAMPolicyAssignmentSummaryList,
  ?'next_token' => string,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->iam_policy_assignments = $iam_policy_assignments ?? ;
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class ListIngestionsRequest {
  public AwsAccountId $aws_account_id;
  public string $data_set_id;
  public IngestionMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'data_set_id' => string,
  ?'max_results' => IngestionMaxResults,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->data_set_id = $data_set_id ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListIngestionsResponse {
  public Ingestions $ingestions;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'ingestions' => Ingestions,
  ?'next_token' => string,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->ingestions = $ingestions ?? [];
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsForResourceResponse {
  public string $request_id;
  public StatusCode $status;
  public TagList $tags;

  public function __construct(shape(
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->tags = $tags ?? ;
  }
}

class ListTemplateAliasesRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public string $next_token;
  public RestrictiveResourceId $template_id;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'template_id' => RestrictiveResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->template_id = $template_id ?? ;
  }
}

class ListTemplateAliasesResponse {
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
  public TemplateAliasList $template_alias_list;

  public function __construct(shape(
  ?'next_token' => string,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'template_alias_list' => TemplateAliasList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->template_alias_list = $template_alias_list ?? [];
  }
}

class ListTemplateVersionsRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public string $next_token;
  public RestrictiveResourceId $template_id;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'template_id' => RestrictiveResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->template_id = $template_id ?? ;
  }
}

class ListTemplateVersionsResponse {
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
  public TemplateVersionSummaryList $template_version_summary_list;

  public function __construct(shape(
  ?'next_token' => string,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'template_version_summary_list' => TemplateVersionSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->template_version_summary_list = $template_version_summary_list ?? [];
  }
}

class ListTemplatesRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListTemplatesResponse {
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
  public TemplateSummaryList $template_summary_list;

  public function __construct(shape(
  ?'next_token' => string,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'template_summary_list' => TemplateSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->template_summary_list = $template_summary_list ?? [];
  }
}

class ListUserGroupsRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public Namespace $namespace;
  public string $next_token;
  public UserName $user_name;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'max_results' => MaxResults,
  ?'namespace' => Namespace,
  ?'next_token' => string,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->namespace = $namespace ?? "";
    $this->next_token = $next_token ?? ;
    $this->user_name = $user_name ?? "";
  }
}

class ListUserGroupsResponse {
  public GroupList $group_list;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'group_list' => GroupList,
  ?'next_token' => string,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->group_list = $group_list ?? [];
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class ListUsersRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public Namespace $namespace;
  public string $next_token;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'max_results' => MaxResults,
  ?'namespace' => Namespace,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->namespace = $namespace ?? "";
    $this->next_token = $next_token ?? ;
  }
}

class ListUsersResponse {
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
  public UserList $user_list;

  public function __construct(shape(
  ?'next_token' => string,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'user_list' => UserList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->user_list = $user_list ?? [];
  }
}

class LogicalTable {
  public LogicalTableAlias $alias;
  public TransformOperationList $data_transforms;
  public LogicalTableSource $source;

  public function __construct(shape(
  ?'alias' => LogicalTableAlias,
  ?'data_transforms' => TransformOperationList,
  ?'source' => LogicalTableSource,
  ) $s = shape()) {
    $this->alias = $alias ?? ;
    $this->data_transforms = $data_transforms ?? ;
    $this->source = $source ?? ;
  }
}

type LogicalTableAlias = string;

type LogicalTableId = string;

type LogicalTableMap = dict<LogicalTableId, LogicalTable>;

class LogicalTableSource {
  public JoinInstruction $join_instruction;
  public PhysicalTableId $physical_table_id;

  public function __construct(shape(
  ?'join_instruction' => JoinInstruction,
  ?'physical_table_id' => PhysicalTableId,
  ) $s = shape()) {
    $this->join_instruction = $join_instruction ?? null;
    $this->physical_table_id = $physical_table_id ?? "";
  }
}

type Long = int;

type LongList = vec<Long>;

class ManifestFileLocation {
  public S3Bucket $bucket;
  public S3Key $key;

  public function __construct(shape(
  ?'bucket' => S3Bucket,
  ?'key' => S3Key,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->key = $key ?? ;
  }
}

class MariaDbParameters {
  public Database $database;
  public Host $host;
  public Port $port;

  public function __construct(shape(
  ?'database' => Database,
  ?'host' => Host,
  ?'port' => Port,
  ) $s = shape()) {
    $this->database = $database ?? "";
    $this->host = $host ?? "";
    $this->port = $port ?? 0;
  }
}

type MaxResults = int;

class MySqlParameters {
  public Database $database;
  public Host $host;
  public Port $port;

  public function __construct(shape(
  ?'database' => Database,
  ?'host' => Host,
  ?'port' => Port,
  ) $s = shape()) {
    $this->database = $database ?? "";
    $this->host = $host ?? "";
    $this->port = $port ?? 0;
  }
}

type Namespace = string;

type NonEmptyString = string;

type OnClause = string;

type OptionalPort = int;

class OutputColumn {
  public ColumnName $name;
  public ColumnDataType $type;

  public function __construct(shape(
  ?'name' => ColumnName,
  ?'type' => ColumnDataType,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->type = $type ?? ;
  }
}

type OutputColumnList = vec<OutputColumn>;

class Parameters {
  public DateTimeParameterList $date_time_parameters;
  public DecimalParameterList $decimal_parameters;
  public IntegerParameterList $integer_parameters;
  public StringParameterList $string_parameters;

  public function __construct(shape(
  ?'date_time_parameters' => DateTimeParameterList,
  ?'decimal_parameters' => DecimalParameterList,
  ?'integer_parameters' => IntegerParameterList,
  ?'string_parameters' => StringParameterList,
  ) $s = shape()) {
    $this->date_time_parameters = $date_time_parameters ?? ;
    $this->decimal_parameters = $decimal_parameters ?? ;
    $this->integer_parameters = $integer_parameters ?? ;
    $this->string_parameters = $string_parameters ?? ;
  }
}

type Password = string;

class PhysicalTable {
  public CustomSql $custom_sql;
  public RelationalTable $relational_table;
  public S3Source $s_3_source;

  public function __construct(shape(
  ?'custom_sql' => CustomSql,
  ?'relational_table' => RelationalTable,
  ?'s_3_source' => S3Source,
  ) $s = shape()) {
    $this->custom_sql = $custom_sql ?? null;
    $this->relational_table = $relational_table ?? null;
    $this->s_3_source = $s_3_source ?? null;
  }
}

type PhysicalTableId = string;

type PhysicalTableMap = dict<PhysicalTableId, PhysicalTable>;

type Port = int;

type PositiveInteger = int;

class PostgreSqlParameters {
  public Database $database;
  public Host $host;
  public Port $port;

  public function __construct(shape(
  ?'database' => Database,
  ?'host' => Host,
  ?'port' => Port,
  ) $s = shape()) {
    $this->database = $database ?? "";
    $this->host = $host ?? "";
    $this->port = $port ?? 0;
  }
}

class PreconditionNotMetException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class PrestoParameters {
  public Catalog $catalog;
  public Host $host;
  public Port $port;

  public function __construct(shape(
  ?'catalog' => Catalog,
  ?'host' => Host,
  ?'port' => Port,
  ) $s = shape()) {
    $this->catalog = $catalog ?? "";
    $this->host = $host ?? "";
    $this->port = $port ?? 0;
  }
}

type Principal = string;

class ProjectOperation {
  public ProjectedColumnList $projected_columns;

  public function __construct(shape(
  ?'projected_columns' => ProjectedColumnList,
  ) $s = shape()) {
    $this->projected_columns = $projected_columns ?? ;
  }
}

type ProjectedColumnList = vec<String>;

type Query = string;

class QueueInfo {
  public string $queued_ingestion;
  public string $waiting_on_ingestion;

  public function __construct(shape(
  ?'queued_ingestion' => string,
  ?'waiting_on_ingestion' => string,
  ) $s = shape()) {
    $this->queued_ingestion = $queued_ingestion ?? ;
    $this->waiting_on_ingestion = $waiting_on_ingestion ?? ;
  }
}

class QuickSightUserNotFoundException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class RdsParameters {
  public Database $database;
  public InstanceId $instance_id;

  public function __construct(shape(
  ?'database' => Database,
  ?'instance_id' => InstanceId,
  ) $s = shape()) {
    $this->database = $database ?? "";
    $this->instance_id = $instance_id ?? "";
  }
}

class RedshiftParameters {
  public ClusterId $cluster_id;
  public Database $database;
  public Host $host;
  public OptionalPort $port;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ?'database' => Database,
  ?'host' => Host,
  ?'port' => OptionalPort,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->database = $database ?? "";
    $this->host = $host ?? "";
    $this->port = $port ?? 0;
  }
}

class RegisterUserRequest {
  public AwsAccountId $aws_account_id;
  public string $email;
  public string $iam_arn;
  public IdentityType $identity_type;
  public Namespace $namespace;
  public RoleSessionName $session_name;
  public UserName $user_name;
  public UserRole $user_role;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'email' => string,
  ?'iam_arn' => string,
  ?'identity_type' => IdentityType,
  ?'namespace' => Namespace,
  ?'session_name' => RoleSessionName,
  ?'user_name' => UserName,
  ?'user_role' => UserRole,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->email = $email ?? ;
    $this->iam_arn = $iam_arn ?? ;
    $this->identity_type = $identity_type ?? "";
    $this->namespace = $namespace ?? "";
    $this->session_name = $session_name ?? ;
    $this->user_name = $user_name ?? "";
    $this->user_role = $user_role ?? "";
  }
}

class RegisterUserResponse {
  public string $request_id;
  public StatusCode $status;
  public User $user;
  public string $user_invitation_url;

  public function __construct(shape(
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'user' => User,
  ?'user_invitation_url' => string,
  ) $s = shape()) {
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->user = $user ?? null;
    $this->user_invitation_url = $user_invitation_url ?? ;
  }
}

class RelationalTable {
  public Arn $data_source_arn;
  public InputColumnList $input_columns;
  public RelationalTableName $name;
  public RelationalTableSchema $schema;

  public function __construct(shape(
  ?'data_source_arn' => Arn,
  ?'input_columns' => InputColumnList,
  ?'name' => RelationalTableName,
  ?'schema' => RelationalTableSchema,
  ) $s = shape()) {
    $this->data_source_arn = $data_source_arn ?? ;
    $this->input_columns = $input_columns ?? ;
    $this->name = $name ?? ;
    $this->schema = $schema ?? ;
  }
}

type RelationalTableName = string;

type RelationalTableSchema = string;

class RenameColumnOperation {
  public ColumnName $column_name;
  public ColumnName $new_column_name;

  public function __construct(shape(
  ?'column_name' => ColumnName,
  ?'new_column_name' => ColumnName,
  ) $s = shape()) {
    $this->column_name = $column_name ?? "";
    $this->new_column_name = $new_column_name ?? ;
  }
}

class ResourceExistsException {
  public string $message;
  public string $request_id;
  public ExceptionResourceType $resource_type;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ?'resource_type' => ExceptionResourceType,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
    $this->resource_type = $resource_type ?? ;
  }
}

type ResourceId = string;

type ResourceName = string;

class ResourceNotFoundException {
  public string $message;
  public string $request_id;
  public ExceptionResourceType $resource_type;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ?'resource_type' => ExceptionResourceType,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
    $this->resource_type = $resource_type ?? ;
  }
}

class ResourcePermission {
  public ActionList $actions;
  public Principal $principal;

  public function __construct(shape(
  ?'actions' => ActionList,
  ?'principal' => Principal,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->principal = $principal ?? "";
  }
}

type ResourcePermissionList = vec<ResourcePermission>;

type ResourceStatus = string;

class ResourceUnavailableException {
  public string $message;
  public string $request_id;
  public ExceptionResourceType $resource_type;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ?'resource_type' => ExceptionResourceType,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
    $this->resource_type = $resource_type ?? ;
  }
}

type RestrictiveResourceId = string;

type RoleSessionName = string;

class RowInfo {
  public long $rows_dropped;
  public long $rows_ingested;

  public function __construct(shape(
  ?'rows_dropped' => long,
  ?'rows_ingested' => long,
  ) $s = shape()) {
    $this->rows_dropped = $rows_dropped ?? ;
    $this->rows_ingested = $rows_ingested ?? ;
  }
}

class RowLevelPermissionDataSet {
  public Arn $arn;
  public RowLevelPermissionPolicy $permission_policy;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'permission_policy' => RowLevelPermissionPolicy,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->permission_policy = $permission_policy ?? ;
  }
}

type RowLevelPermissionPolicy = string;

type S3Bucket = string;

type S3Key = string;

class S3Parameters {
  public ManifestFileLocation $manifest_file_location;

  public function __construct(shape(
  ?'manifest_file_location' => ManifestFileLocation,
  ) $s = shape()) {
    $this->manifest_file_location = $manifest_file_location ?? null;
  }
}

class S3Source {
  public Arn $data_source_arn;
  public InputColumnList $input_columns;
  public UploadSettings $upload_settings;

  public function __construct(shape(
  ?'data_source_arn' => Arn,
  ?'input_columns' => InputColumnList,
  ?'upload_settings' => UploadSettings,
  ) $s = shape()) {
    $this->data_source_arn = $data_source_arn ?? ;
    $this->input_columns = $input_columns ?? ;
    $this->upload_settings = $upload_settings ?? null;
  }
}

class SearchDashboardsRequest {
  public AwsAccountId $aws_account_id;
  public DashboardSearchFilterList $filters;
  public MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'filters' => DashboardSearchFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class SearchDashboardsResponse {
  public DashboardSummaryList $dashboard_summary_list;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'dashboard_summary_list' => DashboardSummaryList,
  ?'next_token' => string,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->dashboard_summary_list = $dashboard_summary_list ?? [];
    $this->next_token = $next_token ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class ServiceNowParameters {
  public SiteBaseUrl $site_base_url;

  public function __construct(shape(
  ?'site_base_url' => SiteBaseUrl,
  ) $s = shape()) {
    $this->site_base_url = $site_base_url ?? "";
  }
}

type SessionLifetimeInMinutes = int;

class SessionLifetimeInMinutesInvalidException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class SheetControlsOption {
  public DashboardUIState $visibility_state;

  public function __construct(shape(
  ?'visibility_state' => DashboardUIState,
  ) $s = shape()) {
    $this->visibility_state = $visibility_state ?? ;
  }
}

type SiteBaseUrl = string;

class SnowflakeParameters {
  public Database $database;
  public Host $host;
  public Warehouse $warehouse;

  public function __construct(shape(
  ?'database' => Database,
  ?'host' => Host,
  ?'warehouse' => Warehouse,
  ) $s = shape()) {
    $this->database = $database ?? "";
    $this->host = $host ?? "";
    $this->warehouse = $warehouse ?? "";
  }
}

class SparkParameters {
  public Host $host;
  public Port $port;

  public function __construct(shape(
  ?'host' => Host,
  ?'port' => Port,
  ) $s = shape()) {
    $this->host = $host ?? "";
    $this->port = $port ?? 0;
  }
}

type SqlQuery = string;

class SqlServerParameters {
  public Database $database;
  public Host $host;
  public Port $port;

  public function __construct(shape(
  ?'database' => Database,
  ?'host' => Host,
  ?'port' => Port,
  ) $s = shape()) {
    $this->database = $database ?? "";
    $this->host = $host ?? "";
    $this->port = $port ?? 0;
  }
}

class SslProperties {
  public boolean $disable_ssl;

  public function __construct(shape(
  ?'disable_ssl' => boolean,
  ) $s = shape()) {
    $this->disable_ssl = $disable_ssl ?? ;
  }
}

type StatusCode = int;

type String = string;

type StringList = vec<String>;

class StringParameter {
  public NonEmptyString $name;
  public StringList $values;

  public function __construct(shape(
  ?'name' => NonEmptyString,
  ?'values' => StringList,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->values = $values ?? ;
  }
}

type StringParameterList = vec<StringParameter>;

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

class TagColumnOperation {
  public ColumnName $column_name;
  public ColumnTagList $tags;

  public function __construct(shape(
  ?'column_name' => ColumnName,
  ?'tags' => ColumnTagList,
  ) $s = shape()) {
    $this->column_name = $column_name ?? "";
    $this->tags = $tags ?? ;
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class TagResourceResponse {
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

type TagValue = string;

class Template {
  public Arn $arn;
  public Timestamp $created_time;
  public Timestamp $last_updated_time;
  public TemplateName $name;
  public RestrictiveResourceId $template_id;
  public TemplateVersion $version;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'created_time' => Timestamp,
  ?'last_updated_time' => Timestamp,
  ?'name' => TemplateName,
  ?'template_id' => RestrictiveResourceId,
  ?'version' => TemplateVersion,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_time = $created_time ?? ;
    $this->last_updated_time = $last_updated_time ?? ;
    $this->name = $name ?? ;
    $this->template_id = $template_id ?? ;
    $this->version = $version ?? ;
  }
}

class TemplateAlias {
  public AliasName $alias_name;
  public Arn $arn;
  public VersionNumber $template_version_number;

  public function __construct(shape(
  ?'alias_name' => AliasName,
  ?'arn' => Arn,
  ?'template_version_number' => VersionNumber,
  ) $s = shape()) {
    $this->alias_name = $alias_name ?? "";
    $this->arn = $arn ?? "";
    $this->template_version_number = $template_version_number ?? ;
  }
}

type TemplateAliasList = vec<TemplateAlias>;

class TemplateError {
  public NonEmptyString $message;
  public TemplateErrorType $type;

  public function __construct(shape(
  ?'message' => NonEmptyString,
  ?'type' => TemplateErrorType,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->type = $type ?? ;
  }
}

type TemplateErrorList = vec<TemplateError>;

type TemplateErrorType = string;

type TemplateName = string;

class TemplateSourceAnalysis {
  public Arn $arn;
  public DataSetReferenceList $data_set_references;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'data_set_references' => DataSetReferenceList,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->data_set_references = $data_set_references ?? ;
  }
}

class TemplateSourceEntity {
  public TemplateSourceAnalysis $source_analysis;
  public TemplateSourceTemplate $source_template;

  public function __construct(shape(
  ?'source_analysis' => TemplateSourceAnalysis,
  ?'source_template' => TemplateSourceTemplate,
  ) $s = shape()) {
    $this->source_analysis = $source_analysis ?? ;
    $this->source_template = $source_template ?? ;
  }
}

class TemplateSourceTemplate {
  public Arn $arn;

  public function __construct(shape(
  ?'arn' => Arn,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class TemplateSummary {
  public Arn $arn;
  public Timestamp $created_time;
  public Timestamp $last_updated_time;
  public VersionNumber $latest_version_number;
  public TemplateName $name;
  public RestrictiveResourceId $template_id;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'created_time' => Timestamp,
  ?'last_updated_time' => Timestamp,
  ?'latest_version_number' => VersionNumber,
  ?'name' => TemplateName,
  ?'template_id' => RestrictiveResourceId,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_time = $created_time ?? ;
    $this->last_updated_time = $last_updated_time ?? ;
    $this->latest_version_number = $latest_version_number ?? ;
    $this->name = $name ?? ;
    $this->template_id = $template_id ?? ;
  }
}

type TemplateSummaryList = vec<TemplateSummary>;

class TemplateVersion {
  public Timestamp $created_time;
  public DataSetConfigurationList $data_set_configurations;
  public VersionDescription $description;
  public TemplateErrorList $errors;
  public Arn $source_entity_arn;
  public ResourceStatus $status;
  public VersionNumber $version_number;

  public function __construct(shape(
  ?'created_time' => Timestamp,
  ?'data_set_configurations' => DataSetConfigurationList,
  ?'description' => VersionDescription,
  ?'errors' => TemplateErrorList,
  ?'source_entity_arn' => Arn,
  ?'status' => ResourceStatus,
  ?'version_number' => VersionNumber,
  ) $s = shape()) {
    $this->created_time = $created_time ?? ;
    $this->data_set_configurations = $data_set_configurations ?? ;
    $this->description = $description ?? ;
    $this->errors = $errors ?? ;
    $this->source_entity_arn = $source_entity_arn ?? ;
    $this->status = $status ?? ;
    $this->version_number = $version_number ?? 0;
  }
}

class TemplateVersionSummary {
  public Arn $arn;
  public Timestamp $created_time;
  public VersionDescription $description;
  public ResourceStatus $status;
  public VersionNumber $version_number;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'created_time' => Timestamp,
  ?'description' => VersionDescription,
  ?'status' => ResourceStatus,
  ?'version_number' => VersionNumber,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_time = $created_time ?? ;
    $this->description = $description ?? ;
    $this->status = $status ?? ;
    $this->version_number = $version_number ?? 0;
  }
}

type TemplateVersionSummaryList = vec<TemplateVersionSummary>;

class TeradataParameters {
  public Database $database;
  public Host $host;
  public Port $port;

  public function __construct(shape(
  ?'database' => Database,
  ?'host' => Host,
  ?'port' => Port,
  ) $s = shape()) {
    $this->database = $database ?? "";
    $this->host = $host ?? "";
    $this->port = $port ?? 0;
  }
}

type TextQualifier = string;

class ThrottlingException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
  }
}

type Timestamp = int;

type TimestampList = vec<Timestamp>;

class TransformOperation {
  public CastColumnTypeOperation $cast_column_type_operation;
  public CreateColumnsOperation $create_columns_operation;
  public FilterOperation $filter_operation;
  public ProjectOperation $project_operation;
  public RenameColumnOperation $rename_column_operation;
  public TagColumnOperation $tag_column_operation;

  public function __construct(shape(
  ?'cast_column_type_operation' => CastColumnTypeOperation,
  ?'create_columns_operation' => CreateColumnsOperation,
  ?'filter_operation' => FilterOperation,
  ?'project_operation' => ProjectOperation,
  ?'rename_column_operation' => RenameColumnOperation,
  ?'tag_column_operation' => TagColumnOperation,
  ) $s = shape()) {
    $this->cast_column_type_operation = $cast_column_type_operation ?? null;
    $this->create_columns_operation = $create_columns_operation ?? null;
    $this->filter_operation = $filter_operation ?? null;
    $this->project_operation = $project_operation ?? null;
    $this->rename_column_operation = $rename_column_operation ?? null;
    $this->tag_column_operation = $tag_column_operation ?? null;
  }
}

type TransformOperationList = vec<TransformOperation>;

class TwitterParameters {
  public PositiveInteger $max_rows;
  public Query $query;

  public function __construct(shape(
  ?'max_rows' => PositiveInteger,
  ?'query' => Query,
  ) $s = shape()) {
    $this->max_rows = $max_rows ?? ;
    $this->query = $query ?? "";
  }
}

type TypeCastFormat = string;

class UnsupportedUserEditionException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
  ?'message' => string,
  ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->request_id = $request_id ?? ;
  }
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceResponse {
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class UpdateDashboardPermissionsRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
  public UpdateResourcePermissionList $grant_permissions;
  public UpdateResourcePermissionList $revoke_permissions;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'grant_permissions' => UpdateResourcePermissionList,
  ?'revoke_permissions' => UpdateResourcePermissionList,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->dashboard_id = $dashboard_id ?? ;
    $this->grant_permissions = $grant_permissions ?? ;
    $this->revoke_permissions = $revoke_permissions ?? ;
  }
}

class UpdateDashboardPermissionsResponse {
  public Arn $dashboard_arn;
  public RestrictiveResourceId $dashboard_id;
  public ResourcePermissionList $permissions;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'dashboard_arn' => Arn,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'permissions' => ResourcePermissionList,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->dashboard_arn = $dashboard_arn ?? ;
    $this->dashboard_id = $dashboard_id ?? ;
    $this->permissions = $permissions ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class UpdateDashboardPublishedVersionRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
  public VersionNumber $version_number;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'version_number' => VersionNumber,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->dashboard_id = $dashboard_id ?? ;
    $this->version_number = $version_number ?? 0;
  }
}

class UpdateDashboardPublishedVersionResponse {
  public Arn $dashboard_arn;
  public RestrictiveResourceId $dashboard_id;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'dashboard_arn' => Arn,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->dashboard_arn = $dashboard_arn ?? ;
    $this->dashboard_id = $dashboard_id ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class UpdateDashboardRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
  public DashboardPublishOptions $dashboard_publish_options;
  public DashboardName $name;
  public Parameters $parameters;
  public DashboardSourceEntity $source_entity;
  public VersionDescription $version_description;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'dashboard_publish_options' => DashboardPublishOptions,
  ?'name' => DashboardName,
  ?'parameters' => Parameters,
  ?'source_entity' => DashboardSourceEntity,
  ?'version_description' => VersionDescription,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->dashboard_id = $dashboard_id ?? ;
    $this->dashboard_publish_options = $dashboard_publish_options ?? null;
    $this->name = $name ?? ;
    $this->parameters = $parameters ?? null;
    $this->source_entity = $source_entity ?? ;
    $this->version_description = $version_description ?? "";
  }
}

class UpdateDashboardResponse {
  public Arn $arn;
  public ResourceStatus $creation_status;
  public RestrictiveResourceId $dashboard_id;
  public string $request_id;
  public StatusCode $status;
  public Arn $version_arn;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'creation_status' => ResourceStatus,
  ?'dashboard_id' => RestrictiveResourceId,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'version_arn' => Arn,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->creation_status = $creation_status ?? ;
    $this->dashboard_id = $dashboard_id ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->version_arn = $version_arn ?? ;
  }
}

class UpdateDataSetPermissionsRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_set_id;
  public ResourcePermissionList $grant_permissions;
  public ResourcePermissionList $revoke_permissions;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'data_set_id' => ResourceId,
  ?'grant_permissions' => ResourcePermissionList,
  ?'revoke_permissions' => ResourcePermissionList,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->data_set_id = $data_set_id ?? ;
    $this->grant_permissions = $grant_permissions ?? ;
    $this->revoke_permissions = $revoke_permissions ?? ;
  }
}

class UpdateDataSetPermissionsResponse {
  public Arn $data_set_arn;
  public ResourceId $data_set_id;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'data_set_arn' => Arn,
  ?'data_set_id' => ResourceId,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->data_set_arn = $data_set_arn ?? ;
    $this->data_set_id = $data_set_id ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class UpdateDataSetRequest {
  public AwsAccountId $aws_account_id;
  public ColumnGroupList $column_groups;
  public ResourceId $data_set_id;
  public DataSetImportMode $import_mode;
  public LogicalTableMap $logical_table_map;
  public ResourceName $name;
  public PhysicalTableMap $physical_table_map;
  public RowLevelPermissionDataSet $row_level_permission_data_set;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'column_groups' => ColumnGroupList,
  ?'data_set_id' => ResourceId,
  ?'import_mode' => DataSetImportMode,
  ?'logical_table_map' => LogicalTableMap,
  ?'name' => ResourceName,
  ?'physical_table_map' => PhysicalTableMap,
  ?'row_level_permission_data_set' => RowLevelPermissionDataSet,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->column_groups = $column_groups ?? ;
    $this->data_set_id = $data_set_id ?? ;
    $this->import_mode = $import_mode ?? ;
    $this->logical_table_map = $logical_table_map ?? [];
    $this->name = $name ?? ;
    $this->physical_table_map = $physical_table_map ?? [];
    $this->row_level_permission_data_set = $row_level_permission_data_set ?? null;
  }
}

class UpdateDataSetResponse {
  public Arn $arn;
  public ResourceId $data_set_id;
  public Arn $ingestion_arn;
  public ResourceId $ingestion_id;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'data_set_id' => ResourceId,
  ?'ingestion_arn' => Arn,
  ?'ingestion_id' => ResourceId,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->data_set_id = $data_set_id ?? ;
    $this->ingestion_arn = $ingestion_arn ?? ;
    $this->ingestion_id = $ingestion_id ?? "";
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class UpdateDataSourcePermissionsRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_source_id;
  public ResourcePermissionList $grant_permissions;
  public ResourcePermissionList $revoke_permissions;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'data_source_id' => ResourceId,
  ?'grant_permissions' => ResourcePermissionList,
  ?'revoke_permissions' => ResourcePermissionList,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->data_source_id = $data_source_id ?? ;
    $this->grant_permissions = $grant_permissions ?? ;
    $this->revoke_permissions = $revoke_permissions ?? ;
  }
}

class UpdateDataSourcePermissionsResponse {
  public Arn $data_source_arn;
  public ResourceId $data_source_id;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'data_source_arn' => Arn,
  ?'data_source_id' => ResourceId,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->data_source_arn = $data_source_arn ?? ;
    $this->data_source_id = $data_source_id ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class UpdateDataSourceRequest {
  public AwsAccountId $aws_account_id;
  public DataSourceCredentials $credentials;
  public ResourceId $data_source_id;
  public DataSourceParameters $data_source_parameters;
  public ResourceName $name;
  public SslProperties $ssl_properties;
  public VpcConnectionProperties $vpc_connection_properties;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'credentials' => DataSourceCredentials,
  ?'data_source_id' => ResourceId,
  ?'data_source_parameters' => DataSourceParameters,
  ?'name' => ResourceName,
  ?'ssl_properties' => SslProperties,
  ?'vpc_connection_properties' => VpcConnectionProperties,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->credentials = $credentials ?? ;
    $this->data_source_id = $data_source_id ?? ;
    $this->data_source_parameters = $data_source_parameters ?? null;
    $this->name = $name ?? ;
    $this->ssl_properties = $ssl_properties ?? null;
    $this->vpc_connection_properties = $vpc_connection_properties ?? null;
  }
}

class UpdateDataSourceResponse {
  public Arn $arn;
  public ResourceId $data_source_id;
  public string $request_id;
  public StatusCode $status;
  public ResourceStatus $update_status;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'data_source_id' => ResourceId,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'update_status' => ResourceStatus,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->data_source_id = $data_source_id ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->update_status = $update_status ?? ;
  }
}

class UpdateGroupRequest {
  public AwsAccountId $aws_account_id;
  public GroupDescription $description;
  public GroupName $group_name;
  public Namespace $namespace;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'description' => GroupDescription,
  ?'group_name' => GroupName,
  ?'namespace' => Namespace,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->description = $description ?? ;
    $this->group_name = $group_name ?? "";
    $this->namespace = $namespace ?? "";
  }
}

class UpdateGroupResponse {
  public Group $group;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'group' => Group,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->group = $group ?? null;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

class UpdateIAMPolicyAssignmentRequest {
  public IAMPolicyAssignmentName $assignment_name;
  public AssignmentStatus $assignment_status;
  public AwsAccountId $aws_account_id;
  public IdentityMap $identities;
  public Namespace $namespace;
  public Arn $policy_arn;

  public function __construct(shape(
  ?'assignment_name' => IAMPolicyAssignmentName,
  ?'assignment_status' => AssignmentStatus,
  ?'aws_account_id' => AwsAccountId,
  ?'identities' => IdentityMap,
  ?'namespace' => Namespace,
  ?'policy_arn' => Arn,
  ) $s = shape()) {
    $this->assignment_name = $assignment_name ?? ;
    $this->assignment_status = $assignment_status ?? "";
    $this->aws_account_id = $aws_account_id ?? "";
    $this->identities = $identities ?? ;
    $this->namespace = $namespace ?? "";
    $this->policy_arn = $policy_arn ?? ;
  }
}

class UpdateIAMPolicyAssignmentResponse {
  public string $assignment_id;
  public IAMPolicyAssignmentName $assignment_name;
  public AssignmentStatus $assignment_status;
  public IdentityMap $identities;
  public Arn $policy_arn;
  public string $request_id;
  public StatusCode $status;

  public function __construct(shape(
  ?'assignment_id' => string,
  ?'assignment_name' => IAMPolicyAssignmentName,
  ?'assignment_status' => AssignmentStatus,
  ?'identities' => IdentityMap,
  ?'policy_arn' => Arn,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ) $s = shape()) {
    $this->assignment_id = $assignment_id ?? ;
    $this->assignment_name = $assignment_name ?? ;
    $this->assignment_status = $assignment_status ?? "";
    $this->identities = $identities ?? ;
    $this->policy_arn = $policy_arn ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
  }
}

type UpdateResourcePermissionList = vec<ResourcePermission>;

class UpdateTemplateAliasRequest {
  public AliasName $alias_name;
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $template_id;
  public VersionNumber $template_version_number;

  public function __construct(shape(
  ?'alias_name' => AliasName,
  ?'aws_account_id' => AwsAccountId,
  ?'template_id' => RestrictiveResourceId,
  ?'template_version_number' => VersionNumber,
  ) $s = shape()) {
    $this->alias_name = $alias_name ?? "";
    $this->aws_account_id = $aws_account_id ?? "";
    $this->template_id = $template_id ?? ;
    $this->template_version_number = $template_version_number ?? ;
  }
}

class UpdateTemplateAliasResponse {
  public string $request_id;
  public StatusCode $status;
  public TemplateAlias $template_alias;

  public function __construct(shape(
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'template_alias' => TemplateAlias,
  ) $s = shape()) {
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->template_alias = $template_alias ?? null;
  }
}

class UpdateTemplatePermissionsRequest {
  public AwsAccountId $aws_account_id;
  public UpdateResourcePermissionList $grant_permissions;
  public UpdateResourcePermissionList $revoke_permissions;
  public RestrictiveResourceId $template_id;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'grant_permissions' => UpdateResourcePermissionList,
  ?'revoke_permissions' => UpdateResourcePermissionList,
  ?'template_id' => RestrictiveResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->grant_permissions = $grant_permissions ?? ;
    $this->revoke_permissions = $revoke_permissions ?? ;
    $this->template_id = $template_id ?? ;
  }
}

class UpdateTemplatePermissionsResponse {
  public ResourcePermissionList $permissions;
  public string $request_id;
  public StatusCode $status;
  public Arn $template_arn;
  public RestrictiveResourceId $template_id;

  public function __construct(shape(
  ?'permissions' => ResourcePermissionList,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'template_arn' => Arn,
  ?'template_id' => RestrictiveResourceId,
  ) $s = shape()) {
    $this->permissions = $permissions ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->template_arn = $template_arn ?? ;
    $this->template_id = $template_id ?? ;
  }
}

class UpdateTemplateRequest {
  public AwsAccountId $aws_account_id;
  public TemplateName $name;
  public TemplateSourceEntity $source_entity;
  public RestrictiveResourceId $template_id;
  public VersionDescription $version_description;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'name' => TemplateName,
  ?'source_entity' => TemplateSourceEntity,
  ?'template_id' => RestrictiveResourceId,
  ?'version_description' => VersionDescription,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->name = $name ?? ;
    $this->source_entity = $source_entity ?? ;
    $this->template_id = $template_id ?? ;
    $this->version_description = $version_description ?? "";
  }
}

class UpdateTemplateResponse {
  public Arn $arn;
  public ResourceStatus $creation_status;
  public string $request_id;
  public StatusCode $status;
  public RestrictiveResourceId $template_id;
  public Arn $version_arn;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'creation_status' => ResourceStatus,
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'template_id' => RestrictiveResourceId,
  ?'version_arn' => Arn,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->creation_status = $creation_status ?? ;
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->template_id = $template_id ?? ;
    $this->version_arn = $version_arn ?? ;
  }
}

class UpdateUserRequest {
  public AwsAccountId $aws_account_id;
  public string $email;
  public Namespace $namespace;
  public UserRole $role;
  public UserName $user_name;

  public function __construct(shape(
  ?'aws_account_id' => AwsAccountId,
  ?'email' => string,
  ?'namespace' => Namespace,
  ?'role' => UserRole,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->email = $email ?? ;
    $this->namespace = $namespace ?? "";
    $this->role = $role ?? ;
    $this->user_name = $user_name ?? "";
  }
}

class UpdateUserResponse {
  public string $request_id;
  public StatusCode $status;
  public User $user;

  public function __construct(shape(
  ?'request_id' => string,
  ?'status' => StatusCode,
  ?'user' => User,
  ) $s = shape()) {
    $this->request_id = $request_id ?? ;
    $this->status = $status ?? ;
    $this->user = $user ?? null;
  }
}

class UploadSettings {
  public boolean $contains_header;
  public Delimiter $delimiter;
  public FileFormat $format;
  public PositiveInteger $start_from_row;
  public TextQualifier $text_qualifier;

  public function __construct(shape(
  ?'contains_header' => boolean,
  ?'delimiter' => Delimiter,
  ?'format' => FileFormat,
  ?'start_from_row' => PositiveInteger,
  ?'text_qualifier' => TextQualifier,
  ) $s = shape()) {
    $this->contains_header = $contains_header ?? ;
    $this->delimiter = $delimiter ?? "";
    $this->format = $format ?? ;
    $this->start_from_row = $start_from_row ?? ;
    $this->text_qualifier = $text_qualifier ?? "";
  }
}

class User {
  public boolean $active;
  public Arn $arn;
  public string $email;
  public IdentityType $identity_type;
  public string $principal_id;
  public UserRole $role;
  public UserName $user_name;

  public function __construct(shape(
  ?'active' => boolean,
  ?'arn' => Arn,
  ?'email' => string,
  ?'identity_type' => IdentityType,
  ?'principal_id' => string,
  ?'role' => UserRole,
  ?'user_name' => UserName,
  ) $s = shape()) {
    $this->active = $active ?? ;
    $this->arn = $arn ?? "";
    $this->email = $email ?? ;
    $this->identity_type = $identity_type ?? "";
    $this->principal_id = $principal_id ?? ;
    $this->role = $role ?? ;
    $this->user_name = $user_name ?? "";
  }
}

type UserList = vec<User>;

type UserName = string;

type UserRole = string;

type Username = string;

type VersionDescription = string;

type VersionNumber = int;

class VpcConnectionProperties {
  public Arn $vpc_connection_arn;

  public function __construct(shape(
  ?'vpc_connection_arn' => Arn,
  ) $s = shape()) {
    $this->vpc_connection_arn = $vpc_connection_arn ?? ;
  }
}

type Warehouse = string;

type WorkGroup = string;

type boolean = bool;

type long = int;

type string = string;

type timestamp = int;

