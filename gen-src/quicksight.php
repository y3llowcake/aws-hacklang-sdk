<?hh // strict
namespace slack\aws\quicksight;

interface QuickSight {
  public function CancelIngestion(CancelIngestionRequest $in): Awaitable<\Errors\Result<CancelIngestionResponse>>;
  public function CreateDashboard(CreateDashboardRequest $in): Awaitable<\Errors\Result<CreateDashboardResponse>>;
  public function CreateDataSet(CreateDataSetRequest $in): Awaitable<\Errors\Result<CreateDataSetResponse>>;
  public function CreateDataSource(CreateDataSourceRequest $in): Awaitable<\Errors\Result<CreateDataSourceResponse>>;
  public function CreateGroup(CreateGroupRequest $in): Awaitable<\Errors\Result<CreateGroupResponse>>;
  public function CreateGroupMembership(CreateGroupMembershipRequest $in): Awaitable<\Errors\Result<CreateGroupMembershipResponse>>;
  public function CreateIAMPolicyAssignment(CreateIAMPolicyAssignmentRequest $in): Awaitable<\Errors\Result<CreateIAMPolicyAssignmentResponse>>;
  public function CreateIngestion(CreateIngestionRequest $in): Awaitable<\Errors\Result<CreateIngestionResponse>>;
  public function CreateTemplate(CreateTemplateRequest $in): Awaitable<\Errors\Result<CreateTemplateResponse>>;
  public function CreateTemplateAlias(CreateTemplateAliasRequest $in): Awaitable<\Errors\Result<CreateTemplateAliasResponse>>;
  public function DeleteDashboard(DeleteDashboardRequest $in): Awaitable<\Errors\Result<DeleteDashboardResponse>>;
  public function DeleteDataSet(DeleteDataSetRequest $in): Awaitable<\Errors\Result<DeleteDataSetResponse>>;
  public function DeleteDataSource(DeleteDataSourceRequest $in): Awaitable<\Errors\Result<DeleteDataSourceResponse>>;
  public function DeleteGroup(DeleteGroupRequest $in): Awaitable<\Errors\Result<DeleteGroupResponse>>;
  public function DeleteGroupMembership(DeleteGroupMembershipRequest $in): Awaitable<\Errors\Result<DeleteGroupMembershipResponse>>;
  public function DeleteIAMPolicyAssignment(DeleteIAMPolicyAssignmentRequest $in): Awaitable<\Errors\Result<DeleteIAMPolicyAssignmentResponse>>;
  public function DeleteTemplate(DeleteTemplateRequest $in): Awaitable<\Errors\Result<DeleteTemplateResponse>>;
  public function DeleteTemplateAlias(DeleteTemplateAliasRequest $in): Awaitable<\Errors\Result<DeleteTemplateAliasResponse>>;
  public function DeleteUser(DeleteUserRequest $in): Awaitable<\Errors\Result<DeleteUserResponse>>;
  public function DeleteUserByPrincipalId(DeleteUserByPrincipalIdRequest $in): Awaitable<\Errors\Result<DeleteUserByPrincipalIdResponse>>;
  public function DescribeDashboard(DescribeDashboardRequest $in): Awaitable<\Errors\Result<DescribeDashboardResponse>>;
  public function DescribeDashboardPermissions(DescribeDashboardPermissionsRequest $in): Awaitable<\Errors\Result<DescribeDashboardPermissionsResponse>>;
  public function DescribeDataSet(DescribeDataSetRequest $in): Awaitable<\Errors\Result<DescribeDataSetResponse>>;
  public function DescribeDataSetPermissions(DescribeDataSetPermissionsRequest $in): Awaitable<\Errors\Result<DescribeDataSetPermissionsResponse>>;
  public function DescribeDataSource(DescribeDataSourceRequest $in): Awaitable<\Errors\Result<DescribeDataSourceResponse>>;
  public function DescribeDataSourcePermissions(DescribeDataSourcePermissionsRequest $in): Awaitable<\Errors\Result<DescribeDataSourcePermissionsResponse>>;
  public function DescribeGroup(DescribeGroupRequest $in): Awaitable<\Errors\Result<DescribeGroupResponse>>;
  public function DescribeIAMPolicyAssignment(DescribeIAMPolicyAssignmentRequest $in): Awaitable<\Errors\Result<DescribeIAMPolicyAssignmentResponse>>;
  public function DescribeIngestion(DescribeIngestionRequest $in): Awaitable<\Errors\Result<DescribeIngestionResponse>>;
  public function DescribeTemplate(DescribeTemplateRequest $in): Awaitable<\Errors\Result<DescribeTemplateResponse>>;
  public function DescribeTemplateAlias(DescribeTemplateAliasRequest $in): Awaitable<\Errors\Result<DescribeTemplateAliasResponse>>;
  public function DescribeTemplatePermissions(DescribeTemplatePermissionsRequest $in): Awaitable<\Errors\Result<DescribeTemplatePermissionsResponse>>;
  public function DescribeUser(DescribeUserRequest $in): Awaitable<\Errors\Result<DescribeUserResponse>>;
  public function GetDashboardEmbedUrl(GetDashboardEmbedUrlRequest $in): Awaitable<\Errors\Result<GetDashboardEmbedUrlResponse>>;
  public function ListDashboardVersions(ListDashboardVersionsRequest $in): Awaitable<\Errors\Result<ListDashboardVersionsResponse>>;
  public function ListDashboards(ListDashboardsRequest $in): Awaitable<\Errors\Result<ListDashboardsResponse>>;
  public function ListDataSets(ListDataSetsRequest $in): Awaitable<\Errors\Result<ListDataSetsResponse>>;
  public function ListDataSources(ListDataSourcesRequest $in): Awaitable<\Errors\Result<ListDataSourcesResponse>>;
  public function ListGroupMemberships(ListGroupMembershipsRequest $in): Awaitable<\Errors\Result<ListGroupMembershipsResponse>>;
  public function ListGroups(ListGroupsRequest $in): Awaitable<\Errors\Result<ListGroupsResponse>>;
  public function ListIAMPolicyAssignments(ListIAMPolicyAssignmentsRequest $in): Awaitable<\Errors\Result<ListIAMPolicyAssignmentsResponse>>;
  public function ListIAMPolicyAssignmentsForUser(ListIAMPolicyAssignmentsForUserRequest $in): Awaitable<\Errors\Result<ListIAMPolicyAssignmentsForUserResponse>>;
  public function ListIngestions(ListIngestionsRequest $in): Awaitable<\Errors\Result<ListIngestionsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListTemplateAliases(ListTemplateAliasesRequest $in): Awaitable<\Errors\Result<ListTemplateAliasesResponse>>;
  public function ListTemplateVersions(ListTemplateVersionsRequest $in): Awaitable<\Errors\Result<ListTemplateVersionsResponse>>;
  public function ListTemplates(ListTemplatesRequest $in): Awaitable<\Errors\Result<ListTemplatesResponse>>;
  public function ListUserGroups(ListUserGroupsRequest $in): Awaitable<\Errors\Result<ListUserGroupsResponse>>;
  public function ListUsers(ListUsersRequest $in): Awaitable<\Errors\Result<ListUsersResponse>>;
  public function RegisterUser(RegisterUserRequest $in): Awaitable<\Errors\Result<RegisterUserResponse>>;
  public function SearchDashboards(SearchDashboardsRequest $in): Awaitable<\Errors\Result<SearchDashboardsResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateDashboard(UpdateDashboardRequest $in): Awaitable<\Errors\Result<UpdateDashboardResponse>>;
  public function UpdateDashboardPermissions(UpdateDashboardPermissionsRequest $in): Awaitable<\Errors\Result<UpdateDashboardPermissionsResponse>>;
  public function UpdateDashboardPublishedVersion(UpdateDashboardPublishedVersionRequest $in): Awaitable<\Errors\Result<UpdateDashboardPublishedVersionResponse>>;
  public function UpdateDataSet(UpdateDataSetRequest $in): Awaitable<\Errors\Result<UpdateDataSetResponse>>;
  public function UpdateDataSetPermissions(UpdateDataSetPermissionsRequest $in): Awaitable<\Errors\Result<UpdateDataSetPermissionsResponse>>;
  public function UpdateDataSource(UpdateDataSourceRequest $in): Awaitable<\Errors\Result<UpdateDataSourceResponse>>;
  public function UpdateDataSourcePermissions(UpdateDataSourcePermissionsRequest $in): Awaitable<\Errors\Result<UpdateDataSourcePermissionsResponse>>;
  public function UpdateGroup(UpdateGroupRequest $in): Awaitable<\Errors\Result<UpdateGroupResponse>>;
  public function UpdateIAMPolicyAssignment(UpdateIAMPolicyAssignmentRequest $in): Awaitable<\Errors\Result<UpdateIAMPolicyAssignmentResponse>>;
  public function UpdateTemplate(UpdateTemplateRequest $in): Awaitable<\Errors\Result<UpdateTemplateResponse>>;
  public function UpdateTemplateAlias(UpdateTemplateAliasRequest $in): Awaitable<\Errors\Result<UpdateTemplateAliasResponse>>;
  public function UpdateTemplatePermissions(UpdateTemplatePermissionsRequest $in): Awaitable<\Errors\Result<UpdateTemplatePermissionsResponse>>;
  public function UpdateUser(UpdateUserRequest $in): Awaitable<\Errors\Result<UpdateUserResponse>>;
}

class AccessDeniedException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
    ?'message' => string,
    ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type ActionList = vec<String>;

class ActiveIAMPolicyAssignment {
  public ?IAMPolicyAssignmentName $assignment_name;
  public ?Arn $policy_arn;

  public function __construct(shape(
    ?'assignment_name' => ?IAMPolicyAssignmentName,
    ?'policy_arn' => ?Arn,
  ) $s = shape()) {
    $this->assignment_name = $s['assignment_name'] ?? '';
    $this->policy_arn = $s['policy_arn'] ?? '';
  }
}

type ActiveIAMPolicyAssignmentList = vec<ActiveIAMPolicyAssignment>;

class AdHocFilteringOption {
  public ?DashboardBehavior $availability_status;

  public function __construct(shape(
    ?'availability_status' => ?DashboardBehavior,
  ) $s = shape()) {
    $this->availability_status = $s['availability_status'] ?? '';
  }
}

type AliasName = string;

class AmazonElasticsearchParameters {
  public ?Domain $domain;

  public function __construct(shape(
    ?'domain' => ?Domain,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
  }
}

type Arn = string;

type AssignmentStatus = string;

class AthenaParameters {
  public ?WorkGroup $work_group;

  public function __construct(shape(
    ?'work_group' => ?WorkGroup,
  ) $s = shape()) {
    $this->work_group = $s['work_group'] ?? '';
  }
}

class AuroraParameters {
  public ?Database $database;
  public ?Host $host;
  public ?Port $port;

  public function __construct(shape(
    ?'database' => ?Database,
    ?'host' => ?Host,
    ?'port' => ?Port,
  ) $s = shape()) {
    $this->database = $s['database'] ?? '';
    $this->host = $s['host'] ?? '';
    $this->port = $s['port'] ?? 0;
  }
}

class AuroraPostgreSqlParameters {
  public ?Database $database;
  public ?Host $host;
  public ?Port $port;

  public function __construct(shape(
    ?'database' => ?Database,
    ?'host' => ?Host,
    ?'port' => ?Port,
  ) $s = shape()) {
    $this->database = $s['database'] ?? '';
    $this->host = $s['host'] ?? '';
    $this->port = $s['port'] ?? 0;
  }
}

type AwsAccountId = string;

class AwsIotAnalyticsParameters {
  public ?DataSetName $data_set_name;

  public function __construct(shape(
    ?'data_set_name' => ?DataSetName,
  ) $s = shape()) {
    $this->data_set_name = $s['data_set_name'] ?? '';
  }
}

type Boolean = bool;

class CalculatedColumn {
  public ?ColumnId $column_id;
  public ?ColumnName $column_name;
  public ?Expression $expression;

  public function __construct(shape(
    ?'column_id' => ?ColumnId,
    ?'column_name' => ?ColumnName,
    ?'expression' => ?Expression,
  ) $s = shape()) {
    $this->column_id = $s['column_id'] ?? '';
    $this->column_name = $s['column_name'] ?? '';
    $this->expression = $s['expression'] ?? '';
  }
}

type CalculatedColumnList = vec<CalculatedColumn>;

class CancelIngestionRequest {
  public ?AwsAccountId $aws_account_id;
  public ?string $data_set_id;
  public ?IngestionId $ingestion_id;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'data_set_id' => ?string,
    ?'ingestion_id' => ?IngestionId,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->ingestion_id = $s['ingestion_id'] ?? '';
  }
}

class CancelIngestionResponse {
  public ?Arn $arn;
  public ?IngestionId $ingestion_id;
  public ?string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'ingestion_id' => ?IngestionId,
    ?'request_id' => ?string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->ingestion_id = $s['ingestion_id'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class CastColumnTypeOperation {
  public ?ColumnName $column_name;
  public ?TypeCastFormat $format;
  public ?ColumnDataType $new_column_type;

  public function __construct(shape(
    ?'column_name' => ?ColumnName,
    ?'format' => ?TypeCastFormat,
    ?'new_column_type' => ?ColumnDataType,
  ) $s = shape()) {
    $this->column_name = $s['column_name'] ?? '';
    $this->format = $s['format'] ?? '';
    $this->new_column_type = $s['new_column_type'] ?? '';
  }
}

type Catalog = string;

type ClusterId = string;

type ColumnDataType = string;

class ColumnGroup {
  public ?GeoSpatialColumnGroup $geo_spatial_column_group;

  public function __construct(shape(
    ?'geo_spatial_column_group' => ?GeoSpatialColumnGroup,
  ) $s = shape()) {
    $this->geo_spatial_column_group = $s['geo_spatial_column_group'] ?? null;
  }
}

class ColumnGroupColumnSchema {
  public string $name;

  public function __construct(shape(
    ?'name' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

type ColumnGroupColumnSchemaList = vec<ColumnGroupColumnSchema>;

type ColumnGroupList = vec<ColumnGroup>;

type ColumnGroupName = string;

class ColumnGroupSchema {
  public ?ColumnGroupColumnSchemaList $column_group_column_schema_list;
  public string $name;

  public function __construct(shape(
    ?'column_group_column_schema_list' => ?ColumnGroupColumnSchemaList,
    ?'name' => string,
  ) $s = shape()) {
    $this->column_group_column_schema_list = $s['column_group_column_schema_list'] ?? vec[];
    $this->name = $s['name'] ?? '';
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
    $this->data_type = $s['data_type'] ?? '';
    $this->geographic_role = $s['geographic_role'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type ColumnSchemaList = vec<ColumnSchema>;

class ColumnTag {
  public ?GeoSpatialDataRole $column_geographic_role;

  public function __construct(shape(
    ?'column_geographic_role' => ?GeoSpatialDataRole,
  ) $s = shape()) {
    $this->column_geographic_role = $s['column_geographic_role'] ?? '';
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
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class ConflictException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
    ?'message' => string,
    ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class CreateColumnsOperation {
  public ?CalculatedColumnList $columns;

  public function __construct(shape(
    ?'columns' => ?CalculatedColumnList,
  ) $s = shape()) {
    $this->columns = $s['columns'] ?? vec[];
  }
}

class CreateDashboardRequest {
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $dashboard_id;
  public ?DashboardPublishOptions $dashboard_publish_options;
  public ?DashboardName $name;
  public ?Parameters $parameters;
  public ?ResourcePermissionList $permissions;
  public ?DashboardSourceEntity $source_entity;
  public ?TagList $tags;
  public ?VersionDescription $version_description;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'dashboard_publish_options' => ?DashboardPublishOptions,
    ?'name' => ?DashboardName,
    ?'parameters' => ?Parameters,
    ?'permissions' => ?ResourcePermissionList,
    ?'source_entity' => ?DashboardSourceEntity,
    ?'tags' => ?TagList,
    ?'version_description' => ?VersionDescription,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->dashboard_publish_options = $s['dashboard_publish_options'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->parameters = $s['parameters'] ?? null;
    $this->permissions = $s['permissions'] ?? vec[];
    $this->source_entity = $s['source_entity'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->version_description = $s['version_description'] ?? '';
  }
}

class CreateDashboardResponse {
  public ?Arn $arn;
  public ?ResourceStatus $creation_status;
  public ?RestrictiveResourceId $dashboard_id;
  public string $request_id;
  public ?StatusCode $status;
  public ?Arn $version_arn;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'creation_status' => ?ResourceStatus,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'version_arn' => ?Arn,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_status = $s['creation_status'] ?? '';
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->version_arn = $s['version_arn'] ?? '';
  }
}

class CreateDataSetRequest {
  public ?AwsAccountId $aws_account_id;
  public ?ColumnGroupList $column_groups;
  public ?ResourceId $data_set_id;
  public ?DataSetImportMode $import_mode;
  public ?LogicalTableMap $logical_table_map;
  public ?ResourceName $name;
  public ?ResourcePermissionList $permissions;
  public ?PhysicalTableMap $physical_table_map;
  public ?RowLevelPermissionDataSet $row_level_permission_data_set;
  public ?TagList $tags;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'column_groups' => ?ColumnGroupList,
    ?'data_set_id' => ?ResourceId,
    ?'import_mode' => ?DataSetImportMode,
    ?'logical_table_map' => ?LogicalTableMap,
    ?'name' => ?ResourceName,
    ?'permissions' => ?ResourcePermissionList,
    ?'physical_table_map' => ?PhysicalTableMap,
    ?'row_level_permission_data_set' => ?RowLevelPermissionDataSet,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->column_groups = $s['column_groups'] ?? vec[];
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->import_mode = $s['import_mode'] ?? '';
    $this->logical_table_map = $s['logical_table_map'] ?? dict[];
    $this->name = $s['name'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
    $this->physical_table_map = $s['physical_table_map'] ?? dict[];
    $this->row_level_permission_data_set = $s['row_level_permission_data_set'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateDataSetResponse {
  public ?Arn $arn;
  public ?ResourceId $data_set_id;
  public ?Arn $ingestion_arn;
  public ?ResourceId $ingestion_id;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'data_set_id' => ?ResourceId,
    ?'ingestion_arn' => ?Arn,
    ?'ingestion_id' => ?ResourceId,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->ingestion_arn = $s['ingestion_arn'] ?? '';
    $this->ingestion_id = $s['ingestion_id'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class CreateDataSourceRequest {
  public ?AwsAccountId $aws_account_id;
  public ?DataSourceCredentials $credentials;
  public ?ResourceId $data_source_id;
  public ?DataSourceParameters $data_source_parameters;
  public ?ResourceName $name;
  public ?ResourcePermissionList $permissions;
  public ?SslProperties $ssl_properties;
  public ?TagList $tags;
  public ?DataSourceType $type;
  public ?VpcConnectionProperties $vpc_connection_properties;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'credentials' => ?DataSourceCredentials,
    ?'data_source_id' => ?ResourceId,
    ?'data_source_parameters' => ?DataSourceParameters,
    ?'name' => ?ResourceName,
    ?'permissions' => ?ResourcePermissionList,
    ?'ssl_properties' => ?SslProperties,
    ?'tags' => ?TagList,
    ?'type' => ?DataSourceType,
    ?'vpc_connection_properties' => ?VpcConnectionProperties,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->credentials = $s['credentials'] ?? null;
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->data_source_parameters = $s['data_source_parameters'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
    $this->ssl_properties = $s['ssl_properties'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->type = $s['type'] ?? '';
    $this->vpc_connection_properties = $s['vpc_connection_properties'] ?? null;
  }
}

class CreateDataSourceResponse {
  public ?Arn $arn;
  public ?ResourceStatus $creation_status;
  public ?ResourceId $data_source_id;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'creation_status' => ?ResourceStatus,
    ?'data_source_id' => ?ResourceId,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_status = $s['creation_status'] ?? '';
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class CreateGroupMembershipRequest {
  public ?AwsAccountId $aws_account_id;
  public ?GroupName $group_name;
  public ?GroupMemberName $member_name;
  public ?Namespace $namespace;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'group_name' => ?GroupName,
    ?'member_name' => ?GroupMemberName,
    ?'namespace' => ?Namespace,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->member_name = $s['member_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
  }
}

class CreateGroupMembershipResponse {
  public ?GroupMember $group_member;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'group_member' => ?GroupMember,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->group_member = $s['group_member'] ?? null;
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class CreateGroupRequest {
  public ?AwsAccountId $aws_account_id;
  public ?GroupDescription $description;
  public ?GroupName $group_name;
  public ?Namespace $namespace;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'description' => ?GroupDescription,
    ?'group_name' => ?GroupName,
    ?'namespace' => ?Namespace,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
  }
}

class CreateGroupResponse {
  public ?Group $group;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'group' => ?Group,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->group = $s['group'] ?? null;
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class CreateIAMPolicyAssignmentRequest {
  public ?IAMPolicyAssignmentName $assignment_name;
  public ?AssignmentStatus $assignment_status;
  public ?AwsAccountId $aws_account_id;
  public ?IdentityMap $identities;
  public ?Namespace $namespace;
  public ?Arn $policy_arn;

  public function __construct(shape(
    ?'assignment_name' => ?IAMPolicyAssignmentName,
    ?'assignment_status' => ?AssignmentStatus,
    ?'aws_account_id' => ?AwsAccountId,
    ?'identities' => ?IdentityMap,
    ?'namespace' => ?Namespace,
    ?'policy_arn' => ?Arn,
  ) $s = shape()) {
    $this->assignment_name = $s['assignment_name'] ?? '';
    $this->assignment_status = $s['assignment_status'] ?? '';
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->identities = $s['identities'] ?? dict[];
    $this->namespace = $s['namespace'] ?? '';
    $this->policy_arn = $s['policy_arn'] ?? '';
  }
}

class CreateIAMPolicyAssignmentResponse {
  public string $assignment_id;
  public ?IAMPolicyAssignmentName $assignment_name;
  public ?AssignmentStatus $assignment_status;
  public ?IdentityMap $identities;
  public ?Arn $policy_arn;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'assignment_id' => string,
    ?'assignment_name' => ?IAMPolicyAssignmentName,
    ?'assignment_status' => ?AssignmentStatus,
    ?'identities' => ?IdentityMap,
    ?'policy_arn' => ?Arn,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->assignment_id = $s['assignment_id'] ?? '';
    $this->assignment_name = $s['assignment_name'] ?? '';
    $this->assignment_status = $s['assignment_status'] ?? '';
    $this->identities = $s['identities'] ?? dict[];
    $this->policy_arn = $s['policy_arn'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class CreateIngestionRequest {
  public ?AwsAccountId $aws_account_id;
  public ?string $data_set_id;
  public ?IngestionId $ingestion_id;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'data_set_id' => ?string,
    ?'ingestion_id' => ?IngestionId,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->ingestion_id = $s['ingestion_id'] ?? '';
  }
}

class CreateIngestionResponse {
  public ?Arn $arn;
  public ?IngestionId $ingestion_id;
  public ?IngestionStatus $ingestion_status;
  public ?string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'ingestion_id' => ?IngestionId,
    ?'ingestion_status' => ?IngestionStatus,
    ?'request_id' => ?string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->ingestion_id = $s['ingestion_id'] ?? '';
    $this->ingestion_status = $s['ingestion_status'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class CreateTemplateAliasRequest {
  public ?AliasName $alias_name;
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $template_id;
  public ?VersionNumber $template_version_number;

  public function __construct(shape(
    ?'alias_name' => ?AliasName,
    ?'aws_account_id' => ?AwsAccountId,
    ?'template_id' => ?RestrictiveResourceId,
    ?'template_version_number' => ?VersionNumber,
  ) $s = shape()) {
    $this->alias_name = $s['alias_name'] ?? '';
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->template_id = $s['template_id'] ?? '';
    $this->template_version_number = $s['template_version_number'] ?? 0;
  }
}

class CreateTemplateAliasResponse {
  public string $request_id;
  public ?StatusCode $status;
  public ?TemplateAlias $template_alias;

  public function __construct(shape(
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'template_alias' => ?TemplateAlias,
  ) $s = shape()) {
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->template_alias = $s['template_alias'] ?? null;
  }
}

class CreateTemplateRequest {
  public ?AwsAccountId $aws_account_id;
  public ?TemplateName $name;
  public ?ResourcePermissionList $permissions;
  public ?TemplateSourceEntity $source_entity;
  public ?TagList $tags;
  public ?RestrictiveResourceId $template_id;
  public ?VersionDescription $version_description;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'name' => ?TemplateName,
    ?'permissions' => ?ResourcePermissionList,
    ?'source_entity' => ?TemplateSourceEntity,
    ?'tags' => ?TagList,
    ?'template_id' => ?RestrictiveResourceId,
    ?'version_description' => ?VersionDescription,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
    $this->source_entity = $s['source_entity'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->template_id = $s['template_id'] ?? '';
    $this->version_description = $s['version_description'] ?? '';
  }
}

class CreateTemplateResponse {
  public ?Arn $arn;
  public ?ResourceStatus $creation_status;
  public string $request_id;
  public ?StatusCode $status;
  public ?RestrictiveResourceId $template_id;
  public ?Arn $version_arn;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'creation_status' => ?ResourceStatus,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'template_id' => ?RestrictiveResourceId,
    ?'version_arn' => ?Arn,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_status = $s['creation_status'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->template_id = $s['template_id'] ?? '';
    $this->version_arn = $s['version_arn'] ?? '';
  }
}

class CredentialPair {
  public ?Password $password;
  public ?Username $username;

  public function __construct(shape(
    ?'password' => ?Password,
    ?'username' => ?Username,
  ) $s = shape()) {
    $this->password = $s['password'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class CustomSql {
  public ?InputColumnList $columns;
  public ?Arn $data_source_arn;
  public ?CustomSqlName $name;
  public ?SqlQuery $sql_query;

  public function __construct(shape(
    ?'columns' => ?InputColumnList,
    ?'data_source_arn' => ?Arn,
    ?'name' => ?CustomSqlName,
    ?'sql_query' => ?SqlQuery,
  ) $s = shape()) {
    $this->columns = $s['columns'] ?? vec[];
    $this->data_source_arn = $s['data_source_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->sql_query = $s['sql_query'] ?? '';
  }
}

type CustomSqlName = string;

class Dashboard {
  public ?Arn $arn;
  public ?Timestamp $created_time;
  public ?RestrictiveResourceId $dashboard_id;
  public ?Timestamp $last_published_time;
  public ?Timestamp $last_updated_time;
  public ?DashboardName $name;
  public ?DashboardVersion $version;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_time' => ?Timestamp,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'last_published_time' => ?Timestamp,
    ?'last_updated_time' => ?Timestamp,
    ?'name' => ?DashboardName,
    ?'version' => ?DashboardVersion,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->last_published_time = $s['last_published_time'] ?? 0;
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? null;
  }
}

type DashboardBehavior = string;

class DashboardError {
  public ?NonEmptyString $message;
  public ?DashboardErrorType $type;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
    ?'type' => ?DashboardErrorType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type DashboardErrorList = vec<DashboardError>;

type DashboardErrorType = string;

type DashboardFilterAttribute = string;

type DashboardName = string;

class DashboardPublishOptions {
  public ?AdHocFilteringOption $ad_hoc_filtering_option;
  public ?ExportToCSVOption $export_to_csv_option;
  public ?SheetControlsOption $sheet_controls_option;

  public function __construct(shape(
    ?'ad_hoc_filtering_option' => ?AdHocFilteringOption,
    ?'export_to_csv_option' => ?ExportToCSVOption,
    ?'sheet_controls_option' => ?SheetControlsOption,
  ) $s = shape()) {
    $this->ad_hoc_filtering_option = $s['ad_hoc_filtering_option'] ?? null;
    $this->export_to_csv_option = $s['export_to_csv_option'] ?? null;
    $this->sheet_controls_option = $s['sheet_controls_option'] ?? null;
  }
}

class DashboardSearchFilter {
  public ?DashboardFilterAttribute $name;
  public ?FilterOperator $operator;
  public string $value;

  public function __construct(shape(
    ?'name' => ?DashboardFilterAttribute,
    ?'operator' => ?FilterOperator,
    ?'value' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->operator = $s['operator'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type DashboardSearchFilterList = vec<DashboardSearchFilter>;

class DashboardSourceEntity {
  public ?DashboardSourceTemplate $source_template;

  public function __construct(shape(
    ?'source_template' => ?DashboardSourceTemplate,
  ) $s = shape()) {
    $this->source_template = $s['source_template'] ?? null;
  }
}

class DashboardSourceTemplate {
  public ?Arn $arn;
  public ?DataSetReferenceList $data_set_references;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'data_set_references' => ?DataSetReferenceList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->data_set_references = $s['data_set_references'] ?? vec[];
  }
}

class DashboardSummary {
  public ?Arn $arn;
  public ?Timestamp $created_time;
  public ?RestrictiveResourceId $dashboard_id;
  public ?Timestamp $last_published_time;
  public ?Timestamp $last_updated_time;
  public ?DashboardName $name;
  public ?VersionNumber $published_version_number;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_time' => ?Timestamp,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'last_published_time' => ?Timestamp,
    ?'last_updated_time' => ?Timestamp,
    ?'name' => ?DashboardName,
    ?'published_version_number' => ?VersionNumber,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->last_published_time = $s['last_published_time'] ?? 0;
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->published_version_number = $s['published_version_number'] ?? 0;
  }
}

type DashboardSummaryList = vec<DashboardSummary>;

type DashboardUIState = string;

class DashboardVersion {
  public ?Arn $arn;
  public ?Timestamp $created_time;
  public ?VersionDescription $description;
  public ?DashboardErrorList $errors;
  public ?Arn $source_entity_arn;
  public ?ResourceStatus $status;
  public ?VersionNumber $version_number;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_time' => ?Timestamp,
    ?'description' => ?VersionDescription,
    ?'errors' => ?DashboardErrorList,
    ?'source_entity_arn' => ?Arn,
    ?'status' => ?ResourceStatus,
    ?'version_number' => ?VersionNumber,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->errors = $s['errors'] ?? vec[];
    $this->source_entity_arn = $s['source_entity_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

class DashboardVersionSummary {
  public ?Arn $arn;
  public ?Timestamp $created_time;
  public ?VersionDescription $description;
  public ?Arn $source_entity_arn;
  public ?ResourceStatus $status;
  public ?VersionNumber $version_number;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_time' => ?Timestamp,
    ?'description' => ?VersionDescription,
    ?'source_entity_arn' => ?Arn,
    ?'status' => ?ResourceStatus,
    ?'version_number' => ?VersionNumber,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->source_entity_arn = $s['source_entity_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

type DashboardVersionSummaryList = vec<DashboardVersionSummary>;

class DataSet {
  public ?Arn $arn;
  public ?ColumnGroupList $column_groups;
  public ?Long $consumed_spice_capacity_in_bytes;
  public ?Timestamp $created_time;
  public ?ResourceId $data_set_id;
  public ?DataSetImportMode $import_mode;
  public ?Timestamp $last_updated_time;
  public ?LogicalTableMap $logical_table_map;
  public ?ResourceName $name;
  public ?OutputColumnList $output_columns;
  public ?PhysicalTableMap $physical_table_map;
  public ?RowLevelPermissionDataSet $row_level_permission_data_set;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'column_groups' => ?ColumnGroupList,
    ?'consumed_spice_capacity_in_bytes' => ?Long,
    ?'created_time' => ?Timestamp,
    ?'data_set_id' => ?ResourceId,
    ?'import_mode' => ?DataSetImportMode,
    ?'last_updated_time' => ?Timestamp,
    ?'logical_table_map' => ?LogicalTableMap,
    ?'name' => ?ResourceName,
    ?'output_columns' => ?OutputColumnList,
    ?'physical_table_map' => ?PhysicalTableMap,
    ?'row_level_permission_data_set' => ?RowLevelPermissionDataSet,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->column_groups = $s['column_groups'] ?? vec[];
    $this->consumed_spice_capacity_in_bytes = $s['consumed_spice_capacity_in_bytes'] ?? 0;
    $this->created_time = $s['created_time'] ?? 0;
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->import_mode = $s['import_mode'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->logical_table_map = $s['logical_table_map'] ?? dict[];
    $this->name = $s['name'] ?? '';
    $this->output_columns = $s['output_columns'] ?? vec[];
    $this->physical_table_map = $s['physical_table_map'] ?? dict[];
    $this->row_level_permission_data_set = $s['row_level_permission_data_set'] ?? null;
  }
}

class DataSetConfiguration {
  public ?ColumnGroupSchemaList $column_group_schema_list;
  public ?DataSetSchema $data_set_schema;
  public string $placeholder;

  public function __construct(shape(
    ?'column_group_schema_list' => ?ColumnGroupSchemaList,
    ?'data_set_schema' => ?DataSetSchema,
    ?'placeholder' => string,
  ) $s = shape()) {
    $this->column_group_schema_list = $s['column_group_schema_list'] ?? vec[];
    $this->data_set_schema = $s['data_set_schema'] ?? null;
    $this->placeholder = $s['placeholder'] ?? '';
  }
}

type DataSetConfigurationList = vec<DataSetConfiguration>;

type DataSetImportMode = string;

type DataSetName = string;

class DataSetReference {
  public ?Arn $data_set_arn;
  public ?NonEmptyString $data_set_placeholder;

  public function __construct(shape(
    ?'data_set_arn' => ?Arn,
    ?'data_set_placeholder' => ?NonEmptyString,
  ) $s = shape()) {
    $this->data_set_arn = $s['data_set_arn'] ?? '';
    $this->data_set_placeholder = $s['data_set_placeholder'] ?? '';
  }
}

type DataSetReferenceList = vec<DataSetReference>;

class DataSetSchema {
  public ?ColumnSchemaList $column_schema_list;

  public function __construct(shape(
    ?'column_schema_list' => ?ColumnSchemaList,
  ) $s = shape()) {
    $this->column_schema_list = $s['column_schema_list'] ?? vec[];
  }
}

class DataSetSummary {
  public ?Arn $arn;
  public ?Timestamp $created_time;
  public ?ResourceId $data_set_id;
  public ?DataSetImportMode $import_mode;
  public ?Timestamp $last_updated_time;
  public ?ResourceName $name;
  public ?RowLevelPermissionDataSet $row_level_permission_data_set;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_time' => ?Timestamp,
    ?'data_set_id' => ?ResourceId,
    ?'import_mode' => ?DataSetImportMode,
    ?'last_updated_time' => ?Timestamp,
    ?'name' => ?ResourceName,
    ?'row_level_permission_data_set' => ?RowLevelPermissionDataSet,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->import_mode = $s['import_mode'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->row_level_permission_data_set = $s['row_level_permission_data_set'] ?? null;
  }
}

type DataSetSummaryList = vec<DataSetSummary>;

class DataSource {
  public ?Arn $arn;
  public ?Timestamp $created_time;
  public ?ResourceId $data_source_id;
  public ?DataSourceParameters $data_source_parameters;
  public ?DataSourceErrorInfo $error_info;
  public ?Timestamp $last_updated_time;
  public ?ResourceName $name;
  public ?SslProperties $ssl_properties;
  public ?ResourceStatus $status;
  public ?DataSourceType $type;
  public ?VpcConnectionProperties $vpc_connection_properties;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_time' => ?Timestamp,
    ?'data_source_id' => ?ResourceId,
    ?'data_source_parameters' => ?DataSourceParameters,
    ?'error_info' => ?DataSourceErrorInfo,
    ?'last_updated_time' => ?Timestamp,
    ?'name' => ?ResourceName,
    ?'ssl_properties' => ?SslProperties,
    ?'status' => ?ResourceStatus,
    ?'type' => ?DataSourceType,
    ?'vpc_connection_properties' => ?VpcConnectionProperties,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->data_source_parameters = $s['data_source_parameters'] ?? null;
    $this->error_info = $s['error_info'] ?? null;
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->ssl_properties = $s['ssl_properties'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->vpc_connection_properties = $s['vpc_connection_properties'] ?? null;
  }
}

class DataSourceCredentials {
  public ?CredentialPair $credential_pair;

  public function __construct(shape(
    ?'credential_pair' => ?CredentialPair,
  ) $s = shape()) {
    $this->credential_pair = $s['credential_pair'] ?? null;
  }
}

class DataSourceErrorInfo {
  public string $message;
  public ?DataSourceErrorInfoType $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => ?DataSourceErrorInfoType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type DataSourceErrorInfoType = string;

type DataSourceList = vec<DataSource>;

class DataSourceParameters {
  public ?AmazonElasticsearchParameters $amazon_elasticsearch_parameters;
  public ?AthenaParameters $athena_parameters;
  public ?AuroraParameters $aurora_parameters;
  public ?AuroraPostgreSqlParameters $aurora_postgre_sql_parameters;
  public ?AwsIotAnalyticsParameters $aws_iot_analytics_parameters;
  public ?JiraParameters $jira_parameters;
  public ?MariaDbParameters $maria_db_parameters;
  public ?MySqlParameters $my_sql_parameters;
  public ?PostgreSqlParameters $postgre_sql_parameters;
  public ?PrestoParameters $presto_parameters;
  public ?RdsParameters $rds_parameters;
  public ?RedshiftParameters $redshift_parameters;
  public ?S3Parameters $s_3_parameters;
  public ?ServiceNowParameters $service_now_parameters;
  public ?SnowflakeParameters $snowflake_parameters;
  public ?SparkParameters $spark_parameters;
  public ?SqlServerParameters $sql_server_parameters;
  public ?TeradataParameters $teradata_parameters;
  public ?TwitterParameters $twitter_parameters;

  public function __construct(shape(
    ?'amazon_elasticsearch_parameters' => ?AmazonElasticsearchParameters,
    ?'athena_parameters' => ?AthenaParameters,
    ?'aurora_parameters' => ?AuroraParameters,
    ?'aurora_postgre_sql_parameters' => ?AuroraPostgreSqlParameters,
    ?'aws_iot_analytics_parameters' => ?AwsIotAnalyticsParameters,
    ?'jira_parameters' => ?JiraParameters,
    ?'maria_db_parameters' => ?MariaDbParameters,
    ?'my_sql_parameters' => ?MySqlParameters,
    ?'postgre_sql_parameters' => ?PostgreSqlParameters,
    ?'presto_parameters' => ?PrestoParameters,
    ?'rds_parameters' => ?RdsParameters,
    ?'redshift_parameters' => ?RedshiftParameters,
    ?'s_3_parameters' => ?S3Parameters,
    ?'service_now_parameters' => ?ServiceNowParameters,
    ?'snowflake_parameters' => ?SnowflakeParameters,
    ?'spark_parameters' => ?SparkParameters,
    ?'sql_server_parameters' => ?SqlServerParameters,
    ?'teradata_parameters' => ?TeradataParameters,
    ?'twitter_parameters' => ?TwitterParameters,
  ) $s = shape()) {
    $this->amazon_elasticsearch_parameters = $s['amazon_elasticsearch_parameters'] ?? null;
    $this->athena_parameters = $s['athena_parameters'] ?? null;
    $this->aurora_parameters = $s['aurora_parameters'] ?? null;
    $this->aurora_postgre_sql_parameters = $s['aurora_postgre_sql_parameters'] ?? null;
    $this->aws_iot_analytics_parameters = $s['aws_iot_analytics_parameters'] ?? null;
    $this->jira_parameters = $s['jira_parameters'] ?? null;
    $this->maria_db_parameters = $s['maria_db_parameters'] ?? null;
    $this->my_sql_parameters = $s['my_sql_parameters'] ?? null;
    $this->postgre_sql_parameters = $s['postgre_sql_parameters'] ?? null;
    $this->presto_parameters = $s['presto_parameters'] ?? null;
    $this->rds_parameters = $s['rds_parameters'] ?? null;
    $this->redshift_parameters = $s['redshift_parameters'] ?? null;
    $this->s_3_parameters = $s['s_3_parameters'] ?? null;
    $this->service_now_parameters = $s['service_now_parameters'] ?? null;
    $this->snowflake_parameters = $s['snowflake_parameters'] ?? null;
    $this->spark_parameters = $s['spark_parameters'] ?? null;
    $this->sql_server_parameters = $s['sql_server_parameters'] ?? null;
    $this->teradata_parameters = $s['teradata_parameters'] ?? null;
    $this->twitter_parameters = $s['twitter_parameters'] ?? null;
  }
}

type DataSourceType = string;

type Database = string;

class DateTimeParameter {
  public ?NonEmptyString $name;
  public ?TimestampList $values;

  public function __construct(shape(
    ?'name' => ?NonEmptyString,
    ?'values' => ?TimestampList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type DateTimeParameterList = vec<DateTimeParameter>;

class DecimalParameter {
  public ?NonEmptyString $name;
  public ?DoubleList $values;

  public function __construct(shape(
    ?'name' => ?NonEmptyString,
    ?'values' => ?DoubleList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type DecimalParameterList = vec<DecimalParameter>;

class DeleteDashboardRequest {
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $dashboard_id;
  public ?VersionNumber $version_number;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'version_number' => ?VersionNumber,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

class DeleteDashboardResponse {
  public ?Arn $arn;
  public ?RestrictiveResourceId $dashboard_id;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DeleteDataSetRequest {
  public ?AwsAccountId $aws_account_id;
  public ?ResourceId $data_set_id;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'data_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
  }
}

class DeleteDataSetResponse {
  public ?Arn $arn;
  public ?ResourceId $data_set_id;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'data_set_id' => ?ResourceId,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DeleteDataSourceRequest {
  public ?AwsAccountId $aws_account_id;
  public ?ResourceId $data_source_id;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'data_source_id' => ?ResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->data_source_id = $s['data_source_id'] ?? '';
  }
}

class DeleteDataSourceResponse {
  public ?Arn $arn;
  public ?ResourceId $data_source_id;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'data_source_id' => ?ResourceId,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DeleteGroupMembershipRequest {
  public ?AwsAccountId $aws_account_id;
  public ?GroupName $group_name;
  public ?GroupMemberName $member_name;
  public ?Namespace $namespace;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'group_name' => ?GroupName,
    ?'member_name' => ?GroupMemberName,
    ?'namespace' => ?Namespace,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->member_name = $s['member_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
  }
}

class DeleteGroupMembershipResponse {
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DeleteGroupRequest {
  public ?AwsAccountId $aws_account_id;
  public ?GroupName $group_name;
  public ?Namespace $namespace;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'group_name' => ?GroupName,
    ?'namespace' => ?Namespace,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
  }
}

class DeleteGroupResponse {
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DeleteIAMPolicyAssignmentRequest {
  public ?IAMPolicyAssignmentName $assignment_name;
  public ?AwsAccountId $aws_account_id;
  public ?Namespace $namespace;

  public function __construct(shape(
    ?'assignment_name' => ?IAMPolicyAssignmentName,
    ?'aws_account_id' => ?AwsAccountId,
    ?'namespace' => ?Namespace,
  ) $s = shape()) {
    $this->assignment_name = $s['assignment_name'] ?? '';
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
  }
}

class DeleteIAMPolicyAssignmentResponse {
  public ?IAMPolicyAssignmentName $assignment_name;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'assignment_name' => ?IAMPolicyAssignmentName,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->assignment_name = $s['assignment_name'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DeleteTemplateAliasRequest {
  public ?AliasName $alias_name;
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $template_id;

  public function __construct(shape(
    ?'alias_name' => ?AliasName,
    ?'aws_account_id' => ?AwsAccountId,
    ?'template_id' => ?RestrictiveResourceId,
  ) $s = shape()) {
    $this->alias_name = $s['alias_name'] ?? '';
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->template_id = $s['template_id'] ?? '';
  }
}

class DeleteTemplateAliasResponse {
  public ?AliasName $alias_name;
  public ?Arn $arn;
  public string $request_id;
  public ?StatusCode $status;
  public ?RestrictiveResourceId $template_id;

  public function __construct(shape(
    ?'alias_name' => ?AliasName,
    ?'arn' => ?Arn,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'template_id' => ?RestrictiveResourceId,
  ) $s = shape()) {
    $this->alias_name = $s['alias_name'] ?? '';
    $this->arn = $s['arn'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->template_id = $s['template_id'] ?? '';
  }
}

class DeleteTemplateRequest {
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $template_id;
  public ?VersionNumber $version_number;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'template_id' => ?RestrictiveResourceId,
    ?'version_number' => ?VersionNumber,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->template_id = $s['template_id'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

class DeleteTemplateResponse {
  public ?Arn $arn;
  public string $request_id;
  public ?StatusCode $status;
  public ?RestrictiveResourceId $template_id;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'template_id' => ?RestrictiveResourceId,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->template_id = $s['template_id'] ?? '';
  }
}

class DeleteUserByPrincipalIdRequest {
  public ?AwsAccountId $aws_account_id;
  public ?Namespace $namespace;
  public string $principal_id;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'namespace' => ?Namespace,
    ?'principal_id' => string,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
    $this->principal_id = $s['principal_id'] ?? '';
  }
}

class DeleteUserByPrincipalIdResponse {
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DeleteUserRequest {
  public ?AwsAccountId $aws_account_id;
  public ?Namespace $namespace;
  public ?UserName $user_name;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'namespace' => ?Namespace,
    ?'user_name' => ?UserName,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class DeleteUserResponse {
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

type Delimiter = string;

class DescribeDashboardPermissionsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $dashboard_id;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'dashboard_id' => ?RestrictiveResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->dashboard_id = $s['dashboard_id'] ?? '';
  }
}

class DescribeDashboardPermissionsResponse {
  public ?Arn $dashboard_arn;
  public ?RestrictiveResourceId $dashboard_id;
  public ?ResourcePermissionList $permissions;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'dashboard_arn' => ?Arn,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'permissions' => ?ResourcePermissionList,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->dashboard_arn = $s['dashboard_arn'] ?? '';
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DescribeDashboardRequest {
  public ?AliasName $alias_name;
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $dashboard_id;
  public ?VersionNumber $version_number;

  public function __construct(shape(
    ?'alias_name' => ?AliasName,
    ?'aws_account_id' => ?AwsAccountId,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'version_number' => ?VersionNumber,
  ) $s = shape()) {
    $this->alias_name = $s['alias_name'] ?? '';
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

class DescribeDashboardResponse {
  public ?Dashboard $dashboard;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'dashboard' => ?Dashboard,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->dashboard = $s['dashboard'] ?? null;
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DescribeDataSetPermissionsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?ResourceId $data_set_id;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'data_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
  }
}

class DescribeDataSetPermissionsResponse {
  public ?Arn $data_set_arn;
  public ?ResourceId $data_set_id;
  public ?ResourcePermissionList $permissions;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'data_set_arn' => ?Arn,
    ?'data_set_id' => ?ResourceId,
    ?'permissions' => ?ResourcePermissionList,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->data_set_arn = $s['data_set_arn'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DescribeDataSetRequest {
  public ?AwsAccountId $aws_account_id;
  public ?ResourceId $data_set_id;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'data_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
  }
}

class DescribeDataSetResponse {
  public ?DataSet $data_set;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'data_set' => ?DataSet,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->data_set = $s['data_set'] ?? null;
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DescribeDataSourcePermissionsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?ResourceId $data_source_id;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'data_source_id' => ?ResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->data_source_id = $s['data_source_id'] ?? '';
  }
}

class DescribeDataSourcePermissionsResponse {
  public ?Arn $data_source_arn;
  public ?ResourceId $data_source_id;
  public ?ResourcePermissionList $permissions;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'data_source_arn' => ?Arn,
    ?'data_source_id' => ?ResourceId,
    ?'permissions' => ?ResourcePermissionList,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->data_source_arn = $s['data_source_arn'] ?? '';
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DescribeDataSourceRequest {
  public ?AwsAccountId $aws_account_id;
  public ?ResourceId $data_source_id;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'data_source_id' => ?ResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->data_source_id = $s['data_source_id'] ?? '';
  }
}

class DescribeDataSourceResponse {
  public ?DataSource $data_source;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'data_source' => ?DataSource,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->data_source = $s['data_source'] ?? null;
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DescribeGroupRequest {
  public ?AwsAccountId $aws_account_id;
  public ?GroupName $group_name;
  public ?Namespace $namespace;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'group_name' => ?GroupName,
    ?'namespace' => ?Namespace,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
  }
}

class DescribeGroupResponse {
  public ?Group $group;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'group' => ?Group,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->group = $s['group'] ?? null;
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DescribeIAMPolicyAssignmentRequest {
  public ?IAMPolicyAssignmentName $assignment_name;
  public ?AwsAccountId $aws_account_id;
  public ?Namespace $namespace;

  public function __construct(shape(
    ?'assignment_name' => ?IAMPolicyAssignmentName,
    ?'aws_account_id' => ?AwsAccountId,
    ?'namespace' => ?Namespace,
  ) $s = shape()) {
    $this->assignment_name = $s['assignment_name'] ?? '';
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
  }
}

class DescribeIAMPolicyAssignmentResponse {
  public ?IAMPolicyAssignment $iam_policy_assignment;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'iam_policy_assignment' => ?IAMPolicyAssignment,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->iam_policy_assignment = $s['iam_policy_assignment'] ?? null;
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DescribeIngestionRequest {
  public ?AwsAccountId $aws_account_id;
  public ?string $data_set_id;
  public ?IngestionId $ingestion_id;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'data_set_id' => ?string,
    ?'ingestion_id' => ?IngestionId,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->ingestion_id = $s['ingestion_id'] ?? '';
  }
}

class DescribeIngestionResponse {
  public ?Ingestion $ingestion;
  public ?string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'ingestion' => ?Ingestion,
    ?'request_id' => ?string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->ingestion = $s['ingestion'] ?? null;
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class DescribeTemplateAliasRequest {
  public ?AliasName $alias_name;
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $template_id;

  public function __construct(shape(
    ?'alias_name' => ?AliasName,
    ?'aws_account_id' => ?AwsAccountId,
    ?'template_id' => ?RestrictiveResourceId,
  ) $s = shape()) {
    $this->alias_name = $s['alias_name'] ?? '';
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->template_id = $s['template_id'] ?? '';
  }
}

class DescribeTemplateAliasResponse {
  public string $request_id;
  public ?StatusCode $status;
  public ?TemplateAlias $template_alias;

  public function __construct(shape(
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'template_alias' => ?TemplateAlias,
  ) $s = shape()) {
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->template_alias = $s['template_alias'] ?? null;
  }
}

class DescribeTemplatePermissionsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $template_id;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'template_id' => ?RestrictiveResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->template_id = $s['template_id'] ?? '';
  }
}

class DescribeTemplatePermissionsResponse {
  public ?ResourcePermissionList $permissions;
  public string $request_id;
  public ?StatusCode $status;
  public ?Arn $template_arn;
  public ?RestrictiveResourceId $template_id;

  public function __construct(shape(
    ?'permissions' => ?ResourcePermissionList,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'template_arn' => ?Arn,
    ?'template_id' => ?RestrictiveResourceId,
  ) $s = shape()) {
    $this->permissions = $s['permissions'] ?? vec[];
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->template_arn = $s['template_arn'] ?? '';
    $this->template_id = $s['template_id'] ?? '';
  }
}

class DescribeTemplateRequest {
  public ?AliasName $alias_name;
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $template_id;
  public ?VersionNumber $version_number;

  public function __construct(shape(
    ?'alias_name' => ?AliasName,
    ?'aws_account_id' => ?AwsAccountId,
    ?'template_id' => ?RestrictiveResourceId,
    ?'version_number' => ?VersionNumber,
  ) $s = shape()) {
    $this->alias_name = $s['alias_name'] ?? '';
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->template_id = $s['template_id'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

class DescribeTemplateResponse {
  public ?StatusCode $status;
  public ?Template $template;

  public function __construct(shape(
    ?'status' => ?StatusCode,
    ?'template' => ?Template,
  ) $s = shape()) {
    $this->status = $s['status'] ?? 0;
    $this->template = $s['template'] ?? null;
  }
}

class DescribeUserRequest {
  public ?AwsAccountId $aws_account_id;
  public ?Namespace $namespace;
  public ?UserName $user_name;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'namespace' => ?Namespace,
    ?'user_name' => ?UserName,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class DescribeUserResponse {
  public string $request_id;
  public ?StatusCode $status;
  public ?User $user;

  public function __construct(shape(
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'user' => ?User,
  ) $s = shape()) {
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->user = $s['user'] ?? null;
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
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type Double = float;

type DoubleList = vec<Double>;

type EmbeddingUrl = string;

class ErrorInfo {
  public ?string $message;
  public ?IngestionErrorType $type;

  public function __construct(shape(
    ?'message' => ?string,
    ?'type' => ?IngestionErrorType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ExceptionResourceType = string;

class ExportToCSVOption {
  public ?DashboardBehavior $availability_status;

  public function __construct(shape(
    ?'availability_status' => ?DashboardBehavior,
  ) $s = shape()) {
    $this->availability_status = $s['availability_status'] ?? '';
  }
}

type Expression = string;

type FileFormat = string;

class FilterOperation {
  public ?Expression $condition_expression;

  public function __construct(shape(
    ?'condition_expression' => ?Expression,
  ) $s = shape()) {
    $this->condition_expression = $s['condition_expression'] ?? '';
  }
}

type FilterOperator = string;

class GeoSpatialColumnGroup {
  public ?ColumnList $columns;
  public ?GeoSpatialCountryCode $country_code;
  public ?ColumnGroupName $name;

  public function __construct(shape(
    ?'columns' => ?ColumnList,
    ?'country_code' => ?GeoSpatialCountryCode,
    ?'name' => ?ColumnGroupName,
  ) $s = shape()) {
    $this->columns = $s['columns'] ?? vec[];
    $this->country_code = $s['country_code'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type GeoSpatialCountryCode = string;

type GeoSpatialDataRole = string;

class GetDashboardEmbedUrlRequest {
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $dashboard_id;
  public ?IdentityType $identity_type;
  public ?boolean $reset_disabled;
  public ?SessionLifetimeInMinutes $session_lifetime_in_minutes;
  public ?boolean $undo_redo_disabled;
  public ?Arn $user_arn;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'identity_type' => ?IdentityType,
    ?'reset_disabled' => ?boolean,
    ?'session_lifetime_in_minutes' => ?SessionLifetimeInMinutes,
    ?'undo_redo_disabled' => ?boolean,
    ?'user_arn' => ?Arn,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->identity_type = $s['identity_type'] ?? '';
    $this->reset_disabled = $s['reset_disabled'] ?? false;
    $this->session_lifetime_in_minutes = $s['session_lifetime_in_minutes'] ?? 0;
    $this->undo_redo_disabled = $s['undo_redo_disabled'] ?? false;
    $this->user_arn = $s['user_arn'] ?? '';
  }
}

class GetDashboardEmbedUrlResponse {
  public ?EmbeddingUrl $embed_url;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'embed_url' => ?EmbeddingUrl,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->embed_url = $s['embed_url'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class Group {
  public ?Arn $arn;
  public ?GroupDescription $description;
  public ?GroupName $group_name;
  public string $principal_id;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'description' => ?GroupDescription,
    ?'group_name' => ?GroupName,
    ?'principal_id' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->principal_id = $s['principal_id'] ?? '';
  }
}

type GroupDescription = string;

type GroupList = vec<Group>;

class GroupMember {
  public ?Arn $arn;
  public ?GroupMemberName $member_name;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'member_name' => ?GroupMemberName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->member_name = $s['member_name'] ?? '';
  }
}

type GroupMemberList = vec<GroupMember>;

type GroupMemberName = string;

type GroupName = string;

type Host = string;

class IAMPolicyAssignment {
  public string $assignment_id;
  public ?IAMPolicyAssignmentName $assignment_name;
  public ?AssignmentStatus $assignment_status;
  public ?AwsAccountId $aws_account_id;
  public ?IdentityMap $identities;
  public ?Arn $policy_arn;

  public function __construct(shape(
    ?'assignment_id' => string,
    ?'assignment_name' => ?IAMPolicyAssignmentName,
    ?'assignment_status' => ?AssignmentStatus,
    ?'aws_account_id' => ?AwsAccountId,
    ?'identities' => ?IdentityMap,
    ?'policy_arn' => ?Arn,
  ) $s = shape()) {
    $this->assignment_id = $s['assignment_id'] ?? '';
    $this->assignment_name = $s['assignment_name'] ?? '';
    $this->assignment_status = $s['assignment_status'] ?? '';
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->identities = $s['identities'] ?? dict[];
    $this->policy_arn = $s['policy_arn'] ?? '';
  }
}

type IAMPolicyAssignmentName = string;

class IAMPolicyAssignmentSummary {
  public ?IAMPolicyAssignmentName $assignment_name;
  public ?AssignmentStatus $assignment_status;

  public function __construct(shape(
    ?'assignment_name' => ?IAMPolicyAssignmentName,
    ?'assignment_status' => ?AssignmentStatus,
  ) $s = shape()) {
    $this->assignment_name = $s['assignment_name'] ?? '';
    $this->assignment_status = $s['assignment_status'] ?? '';
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
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class Ingestion {
  public ?Arn $arn;
  public ?timestamp $created_time;
  public ?ErrorInfo $error_info;
  public ?IngestionId $ingestion_id;
  public ?long $ingestion_size_in_bytes;
  public ?IngestionStatus $ingestion_status;
  public ?long $ingestion_time_in_seconds;
  public ?QueueInfo $queue_info;
  public ?IngestionRequestSource $request_source;
  public ?IngestionRequestType $request_type;
  public ?RowInfo $row_info;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_time' => ?timestamp,
    ?'error_info' => ?ErrorInfo,
    ?'ingestion_id' => ?IngestionId,
    ?'ingestion_size_in_bytes' => ?long,
    ?'ingestion_status' => ?IngestionStatus,
    ?'ingestion_time_in_seconds' => ?long,
    ?'queue_info' => ?QueueInfo,
    ?'request_source' => ?IngestionRequestSource,
    ?'request_type' => ?IngestionRequestType,
    ?'row_info' => ?RowInfo,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->error_info = $s['error_info'] ?? null;
    $this->ingestion_id = $s['ingestion_id'] ?? '';
    $this->ingestion_size_in_bytes = $s['ingestion_size_in_bytes'] ?? 0;
    $this->ingestion_status = $s['ingestion_status'] ?? '';
    $this->ingestion_time_in_seconds = $s['ingestion_time_in_seconds'] ?? 0;
    $this->queue_info = $s['queue_info'] ?? null;
    $this->request_source = $s['request_source'] ?? '';
    $this->request_type = $s['request_type'] ?? '';
    $this->row_info = $s['row_info'] ?? null;
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
  public ?ColumnName $name;
  public ?InputColumnDataType $type;

  public function __construct(shape(
    ?'name' => ?ColumnName,
    ?'type' => ?InputColumnDataType,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type InputColumnDataType = string;

type InputColumnList = vec<InputColumn>;

type InstanceId = string;

class IntegerParameter {
  public ?NonEmptyString $name;
  public ?LongList $values;

  public function __construct(shape(
    ?'name' => ?NonEmptyString,
    ?'values' => ?LongList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
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
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class InvalidNextTokenException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
    ?'message' => string,
    ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class InvalidParameterValueException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
    ?'message' => string,
    ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class JiraParameters {
  public ?SiteBaseUrl $site_base_url;

  public function __construct(shape(
    ?'site_base_url' => ?SiteBaseUrl,
  ) $s = shape()) {
    $this->site_base_url = $s['site_base_url'] ?? '';
  }
}

class JoinInstruction {
  public ?LogicalTableId $left_operand;
  public ?OnClause $on_clause;
  public ?LogicalTableId $right_operand;
  public ?JoinType $type;

  public function __construct(shape(
    ?'left_operand' => ?LogicalTableId,
    ?'on_clause' => ?OnClause,
    ?'right_operand' => ?LogicalTableId,
    ?'type' => ?JoinType,
  ) $s = shape()) {
    $this->left_operand = $s['left_operand'] ?? '';
    $this->on_clause = $s['on_clause'] ?? '';
    $this->right_operand = $s['right_operand'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type JoinType = string;

class LimitExceededException {
  public string $message;
  public string $request_id;
  public ?ExceptionResourceType $resource_type;

  public function __construct(shape(
    ?'message' => string,
    ?'request_id' => string,
    ?'resource_type' => ?ExceptionResourceType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ListDashboardVersionsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $dashboard_id;
  public ?MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDashboardVersionsResponse {
  public ?DashboardVersionSummaryList $dashboard_version_summary_list;
  public string $next_token;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'dashboard_version_summary_list' => ?DashboardVersionSummaryList,
    ?'next_token' => string,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->dashboard_version_summary_list = $s['dashboard_version_summary_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class ListDashboardsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDashboardsResponse {
  public ?DashboardSummaryList $dashboard_summary_list;
  public string $next_token;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'dashboard_summary_list' => ?DashboardSummaryList,
    ?'next_token' => string,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->dashboard_summary_list = $s['dashboard_summary_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class ListDataSetsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDataSetsResponse {
  public ?DataSetSummaryList $data_set_summaries;
  public string $next_token;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'data_set_summaries' => ?DataSetSummaryList,
    ?'next_token' => string,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->data_set_summaries = $s['data_set_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class ListDataSourcesRequest {
  public ?AwsAccountId $aws_account_id;
  public ?MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDataSourcesResponse {
  public ?DataSourceList $data_sources;
  public string $next_token;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'data_sources' => ?DataSourceList,
    ?'next_token' => string,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->data_sources = $s['data_sources'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class ListGroupMembershipsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?GroupName $group_name;
  public ?MaxResults $max_results;
  public ?Namespace $namespace;
  public string $next_token;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'group_name' => ?GroupName,
    ?'max_results' => ?MaxResults,
    ?'namespace' => ?Namespace,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->namespace = $s['namespace'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGroupMembershipsResponse {
  public ?GroupMemberList $group_member_list;
  public string $next_token;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'group_member_list' => ?GroupMemberList,
    ?'next_token' => string,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->group_member_list = $s['group_member_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class ListGroupsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?MaxResults $max_results;
  public ?Namespace $namespace;
  public string $next_token;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'max_results' => ?MaxResults,
    ?'namespace' => ?Namespace,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->namespace = $s['namespace'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGroupsResponse {
  public ?GroupList $group_list;
  public string $next_token;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'group_list' => ?GroupList,
    ?'next_token' => string,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->group_list = $s['group_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class ListIAMPolicyAssignmentsForUserRequest {
  public ?AwsAccountId $aws_account_id;
  public ?MaxResults $max_results;
  public ?Namespace $namespace;
  public string $next_token;
  public ?UserName $user_name;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'max_results' => ?MaxResults,
    ?'namespace' => ?Namespace,
    ?'next_token' => string,
    ?'user_name' => ?UserName,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->namespace = $s['namespace'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class ListIAMPolicyAssignmentsForUserResponse {
  public ?ActiveIAMPolicyAssignmentList $active_assignments;
  public string $next_token;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'active_assignments' => ?ActiveIAMPolicyAssignmentList,
    ?'next_token' => string,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->active_assignments = $s['active_assignments'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class ListIAMPolicyAssignmentsRequest {
  public ?AssignmentStatus $assignment_status;
  public ?AwsAccountId $aws_account_id;
  public ?MaxResults $max_results;
  public ?Namespace $namespace;
  public string $next_token;

  public function __construct(shape(
    ?'assignment_status' => ?AssignmentStatus,
    ?'aws_account_id' => ?AwsAccountId,
    ?'max_results' => ?MaxResults,
    ?'namespace' => ?Namespace,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->assignment_status = $s['assignment_status'] ?? '';
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->namespace = $s['namespace'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListIAMPolicyAssignmentsResponse {
  public ?IAMPolicyAssignmentSummaryList $iam_policy_assignments;
  public string $next_token;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'iam_policy_assignments' => ?IAMPolicyAssignmentSummaryList,
    ?'next_token' => string,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->iam_policy_assignments = $s['iam_policy_assignments'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class ListIngestionsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?string $data_set_id;
  public ?IngestionMaxResults $max_results;
  public ?string $next_token;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'data_set_id' => ?string,
    ?'max_results' => ?IngestionMaxResults,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListIngestionsResponse {
  public ?Ingestions $ingestions;
  public ?string $next_token;
  public ?string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'ingestions' => ?Ingestions,
    ?'next_token' => ?string,
    ?'request_id' => ?string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->ingestions = $s['ingestions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class ListTagsForResourceRequest {
  public ?Arn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public string $request_id;
  public ?StatusCode $status;
  public ?TagList $tags;

  public function __construct(shape(
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ListTemplateAliasesRequest {
  public ?AwsAccountId $aws_account_id;
  public ?MaxResults $max_results;
  public string $next_token;
  public ?RestrictiveResourceId $template_id;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
    ?'template_id' => ?RestrictiveResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->template_id = $s['template_id'] ?? '';
  }
}

class ListTemplateAliasesResponse {
  public string $next_token;
  public string $request_id;
  public ?StatusCode $status;
  public ?TemplateAliasList $template_alias_list;

  public function __construct(shape(
    ?'next_token' => string,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'template_alias_list' => ?TemplateAliasList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->template_alias_list = $s['template_alias_list'] ?? vec[];
  }
}

class ListTemplateVersionsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?MaxResults $max_results;
  public string $next_token;
  public ?RestrictiveResourceId $template_id;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
    ?'template_id' => ?RestrictiveResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->template_id = $s['template_id'] ?? '';
  }
}

class ListTemplateVersionsResponse {
  public string $next_token;
  public string $request_id;
  public ?StatusCode $status;
  public ?TemplateVersionSummaryList $template_version_summary_list;

  public function __construct(shape(
    ?'next_token' => string,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'template_version_summary_list' => ?TemplateVersionSummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->template_version_summary_list = $s['template_version_summary_list'] ?? vec[];
  }
}

class ListTemplatesRequest {
  public ?AwsAccountId $aws_account_id;
  public ?MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTemplatesResponse {
  public string $next_token;
  public string $request_id;
  public ?StatusCode $status;
  public ?TemplateSummaryList $template_summary_list;

  public function __construct(shape(
    ?'next_token' => string,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'template_summary_list' => ?TemplateSummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->template_summary_list = $s['template_summary_list'] ?? vec[];
  }
}

class ListUserGroupsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?MaxResults $max_results;
  public ?Namespace $namespace;
  public string $next_token;
  public ?UserName $user_name;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'max_results' => ?MaxResults,
    ?'namespace' => ?Namespace,
    ?'next_token' => string,
    ?'user_name' => ?UserName,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->namespace = $s['namespace'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class ListUserGroupsResponse {
  public ?GroupList $group_list;
  public string $next_token;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'group_list' => ?GroupList,
    ?'next_token' => string,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->group_list = $s['group_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class ListUsersRequest {
  public ?AwsAccountId $aws_account_id;
  public ?MaxResults $max_results;
  public ?Namespace $namespace;
  public string $next_token;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'max_results' => ?MaxResults,
    ?'namespace' => ?Namespace,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->namespace = $s['namespace'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListUsersResponse {
  public string $next_token;
  public string $request_id;
  public ?StatusCode $status;
  public ?UserList $user_list;

  public function __construct(shape(
    ?'next_token' => string,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'user_list' => ?UserList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->user_list = $s['user_list'] ?? vec[];
  }
}

class LogicalTable {
  public ?LogicalTableAlias $alias;
  public ?TransformOperationList $data_transforms;
  public ?LogicalTableSource $source;

  public function __construct(shape(
    ?'alias' => ?LogicalTableAlias,
    ?'data_transforms' => ?TransformOperationList,
    ?'source' => ?LogicalTableSource,
  ) $s = shape()) {
    $this->alias = $s['alias'] ?? '';
    $this->data_transforms = $s['data_transforms'] ?? vec[];
    $this->source = $s['source'] ?? null;
  }
}

type LogicalTableAlias = string;

type LogicalTableId = string;

type LogicalTableMap = dict<LogicalTableId, LogicalTable>;

class LogicalTableSource {
  public ?JoinInstruction $join_instruction;
  public ?PhysicalTableId $physical_table_id;

  public function __construct(shape(
    ?'join_instruction' => ?JoinInstruction,
    ?'physical_table_id' => ?PhysicalTableId,
  ) $s = shape()) {
    $this->join_instruction = $s['join_instruction'] ?? null;
    $this->physical_table_id = $s['physical_table_id'] ?? '';
  }
}

type Long = int;

type LongList = vec<Long>;

class ManifestFileLocation {
  public ?S3Bucket $bucket;
  public ?S3Key $key;

  public function __construct(shape(
    ?'bucket' => ?S3Bucket,
    ?'key' => ?S3Key,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->key = $s['key'] ?? '';
  }
}

class MariaDbParameters {
  public ?Database $database;
  public ?Host $host;
  public ?Port $port;

  public function __construct(shape(
    ?'database' => ?Database,
    ?'host' => ?Host,
    ?'port' => ?Port,
  ) $s = shape()) {
    $this->database = $s['database'] ?? '';
    $this->host = $s['host'] ?? '';
    $this->port = $s['port'] ?? 0;
  }
}

type MaxResults = int;

class MySqlParameters {
  public ?Database $database;
  public ?Host $host;
  public ?Port $port;

  public function __construct(shape(
    ?'database' => ?Database,
    ?'host' => ?Host,
    ?'port' => ?Port,
  ) $s = shape()) {
    $this->database = $s['database'] ?? '';
    $this->host = $s['host'] ?? '';
    $this->port = $s['port'] ?? 0;
  }
}

type Namespace = string;

type NonEmptyString = string;

type OnClause = string;

type OptionalPort = int;

class OutputColumn {
  public ?ColumnName $name;
  public ?ColumnDataType $type;

  public function __construct(shape(
    ?'name' => ?ColumnName,
    ?'type' => ?ColumnDataType,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type OutputColumnList = vec<OutputColumn>;

class Parameters {
  public ?DateTimeParameterList $date_time_parameters;
  public ?DecimalParameterList $decimal_parameters;
  public ?IntegerParameterList $integer_parameters;
  public ?StringParameterList $string_parameters;

  public function __construct(shape(
    ?'date_time_parameters' => ?DateTimeParameterList,
    ?'decimal_parameters' => ?DecimalParameterList,
    ?'integer_parameters' => ?IntegerParameterList,
    ?'string_parameters' => ?StringParameterList,
  ) $s = shape()) {
    $this->date_time_parameters = $s['date_time_parameters'] ?? vec[];
    $this->decimal_parameters = $s['decimal_parameters'] ?? vec[];
    $this->integer_parameters = $s['integer_parameters'] ?? vec[];
    $this->string_parameters = $s['string_parameters'] ?? vec[];
  }
}

type Password = string;

class PhysicalTable {
  public ?CustomSql $custom_sql;
  public ?RelationalTable $relational_table;
  public ?S3Source $s_3_source;

  public function __construct(shape(
    ?'custom_sql' => ?CustomSql,
    ?'relational_table' => ?RelationalTable,
    ?'s_3_source' => ?S3Source,
  ) $s = shape()) {
    $this->custom_sql = $s['custom_sql'] ?? null;
    $this->relational_table = $s['relational_table'] ?? null;
    $this->s_3_source = $s['s_3_source'] ?? null;
  }
}

type PhysicalTableId = string;

type PhysicalTableMap = dict<PhysicalTableId, PhysicalTable>;

type Port = int;

type PositiveInteger = int;

class PostgreSqlParameters {
  public ?Database $database;
  public ?Host $host;
  public ?Port $port;

  public function __construct(shape(
    ?'database' => ?Database,
    ?'host' => ?Host,
    ?'port' => ?Port,
  ) $s = shape()) {
    $this->database = $s['database'] ?? '';
    $this->host = $s['host'] ?? '';
    $this->port = $s['port'] ?? 0;
  }
}

class PreconditionNotMetException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
    ?'message' => string,
    ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class PrestoParameters {
  public ?Catalog $catalog;
  public ?Host $host;
  public ?Port $port;

  public function __construct(shape(
    ?'catalog' => ?Catalog,
    ?'host' => ?Host,
    ?'port' => ?Port,
  ) $s = shape()) {
    $this->catalog = $s['catalog'] ?? '';
    $this->host = $s['host'] ?? '';
    $this->port = $s['port'] ?? 0;
  }
}

type Principal = string;

class ProjectOperation {
  public ?ProjectedColumnList $projected_columns;

  public function __construct(shape(
    ?'projected_columns' => ?ProjectedColumnList,
  ) $s = shape()) {
    $this->projected_columns = $s['projected_columns'] ?? vec[];
  }
}

type ProjectedColumnList = vec<String>;

type Query = string;

class QueueInfo {
  public ?string $queued_ingestion;
  public ?string $waiting_on_ingestion;

  public function __construct(shape(
    ?'queued_ingestion' => ?string,
    ?'waiting_on_ingestion' => ?string,
  ) $s = shape()) {
    $this->queued_ingestion = $s['queued_ingestion'] ?? '';
    $this->waiting_on_ingestion = $s['waiting_on_ingestion'] ?? '';
  }
}

class QuickSightUserNotFoundException {
  public string $message;
  public string $request_id;

  public function __construct(shape(
    ?'message' => string,
    ?'request_id' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class RdsParameters {
  public ?Database $database;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'database' => ?Database,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->database = $s['database'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class RedshiftParameters {
  public ?ClusterId $cluster_id;
  public ?Database $database;
  public ?Host $host;
  public ?OptionalPort $port;

  public function __construct(shape(
    ?'cluster_id' => ?ClusterId,
    ?'database' => ?Database,
    ?'host' => ?Host,
    ?'port' => ?OptionalPort,
  ) $s = shape()) {
    $this->cluster_id = $s['cluster_id'] ?? '';
    $this->database = $s['database'] ?? '';
    $this->host = $s['host'] ?? '';
    $this->port = $s['port'] ?? 0;
  }
}

class RegisterUserRequest {
  public ?AwsAccountId $aws_account_id;
  public string $email;
  public string $iam_arn;
  public ?IdentityType $identity_type;
  public ?Namespace $namespace;
  public ?RoleSessionName $session_name;
  public ?UserName $user_name;
  public ?UserRole $user_role;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'email' => string,
    ?'iam_arn' => string,
    ?'identity_type' => ?IdentityType,
    ?'namespace' => ?Namespace,
    ?'session_name' => ?RoleSessionName,
    ?'user_name' => ?UserName,
    ?'user_role' => ?UserRole,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->iam_arn = $s['iam_arn'] ?? '';
    $this->identity_type = $s['identity_type'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
    $this->session_name = $s['session_name'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
    $this->user_role = $s['user_role'] ?? '';
  }
}

class RegisterUserResponse {
  public string $request_id;
  public ?StatusCode $status;
  public ?User $user;
  public string $user_invitation_url;

  public function __construct(shape(
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'user' => ?User,
    ?'user_invitation_url' => string,
  ) $s = shape()) {
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->user = $s['user'] ?? null;
    $this->user_invitation_url = $s['user_invitation_url'] ?? '';
  }
}

class RelationalTable {
  public ?Arn $data_source_arn;
  public ?InputColumnList $input_columns;
  public ?RelationalTableName $name;
  public ?RelationalTableSchema $schema;

  public function __construct(shape(
    ?'data_source_arn' => ?Arn,
    ?'input_columns' => ?InputColumnList,
    ?'name' => ?RelationalTableName,
    ?'schema' => ?RelationalTableSchema,
  ) $s = shape()) {
    $this->data_source_arn = $s['data_source_arn'] ?? '';
    $this->input_columns = $s['input_columns'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->schema = $s['schema'] ?? '';
  }
}

type RelationalTableName = string;

type RelationalTableSchema = string;

class RenameColumnOperation {
  public ?ColumnName $column_name;
  public ?ColumnName $new_column_name;

  public function __construct(shape(
    ?'column_name' => ?ColumnName,
    ?'new_column_name' => ?ColumnName,
  ) $s = shape()) {
    $this->column_name = $s['column_name'] ?? '';
    $this->new_column_name = $s['new_column_name'] ?? '';
  }
}

class ResourceExistsException {
  public string $message;
  public string $request_id;
  public ?ExceptionResourceType $resource_type;

  public function __construct(shape(
    ?'message' => string,
    ?'request_id' => string,
    ?'resource_type' => ?ExceptionResourceType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type ResourceId = string;

type ResourceName = string;

class ResourceNotFoundException {
  public string $message;
  public string $request_id;
  public ?ExceptionResourceType $resource_type;

  public function __construct(shape(
    ?'message' => string,
    ?'request_id' => string,
    ?'resource_type' => ?ExceptionResourceType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ResourcePermission {
  public ?ActionList $actions;
  public ?Principal $principal;

  public function __construct(shape(
    ?'actions' => ?ActionList,
    ?'principal' => ?Principal,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->principal = $s['principal'] ?? '';
  }
}

type ResourcePermissionList = vec<ResourcePermission>;

type ResourceStatus = string;

class ResourceUnavailableException {
  public string $message;
  public string $request_id;
  public ?ExceptionResourceType $resource_type;

  public function __construct(shape(
    ?'message' => string,
    ?'request_id' => string,
    ?'resource_type' => ?ExceptionResourceType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type RestrictiveResourceId = string;

type RoleSessionName = string;

class RowInfo {
  public ?long $rows_dropped;
  public ?long $rows_ingested;

  public function __construct(shape(
    ?'rows_dropped' => ?long,
    ?'rows_ingested' => ?long,
  ) $s = shape()) {
    $this->rows_dropped = $s['rows_dropped'] ?? 0;
    $this->rows_ingested = $s['rows_ingested'] ?? 0;
  }
}

class RowLevelPermissionDataSet {
  public ?Arn $arn;
  public ?RowLevelPermissionPolicy $permission_policy;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'permission_policy' => ?RowLevelPermissionPolicy,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->permission_policy = $s['permission_policy'] ?? '';
  }
}

type RowLevelPermissionPolicy = string;

type S3Bucket = string;

type S3Key = string;

class S3Parameters {
  public ?ManifestFileLocation $manifest_file_location;

  public function __construct(shape(
    ?'manifest_file_location' => ?ManifestFileLocation,
  ) $s = shape()) {
    $this->manifest_file_location = $s['manifest_file_location'] ?? null;
  }
}

class S3Source {
  public ?Arn $data_source_arn;
  public ?InputColumnList $input_columns;
  public ?UploadSettings $upload_settings;

  public function __construct(shape(
    ?'data_source_arn' => ?Arn,
    ?'input_columns' => ?InputColumnList,
    ?'upload_settings' => ?UploadSettings,
  ) $s = shape()) {
    $this->data_source_arn = $s['data_source_arn'] ?? '';
    $this->input_columns = $s['input_columns'] ?? vec[];
    $this->upload_settings = $s['upload_settings'] ?? null;
  }
}

class SearchDashboardsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?DashboardSearchFilterList $filters;
  public ?MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'filters' => ?DashboardSearchFilterList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class SearchDashboardsResponse {
  public ?DashboardSummaryList $dashboard_summary_list;
  public string $next_token;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'dashboard_summary_list' => ?DashboardSummaryList,
    ?'next_token' => string,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->dashboard_summary_list = $s['dashboard_summary_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class ServiceNowParameters {
  public ?SiteBaseUrl $site_base_url;

  public function __construct(shape(
    ?'site_base_url' => ?SiteBaseUrl,
  ) $s = shape()) {
    $this->site_base_url = $s['site_base_url'] ?? '';
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
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class SheetControlsOption {
  public ?DashboardUIState $visibility_state;

  public function __construct(shape(
    ?'visibility_state' => ?DashboardUIState,
  ) $s = shape()) {
    $this->visibility_state = $s['visibility_state'] ?? '';
  }
}

type SiteBaseUrl = string;

class SnowflakeParameters {
  public ?Database $database;
  public ?Host $host;
  public ?Warehouse $warehouse;

  public function __construct(shape(
    ?'database' => ?Database,
    ?'host' => ?Host,
    ?'warehouse' => ?Warehouse,
  ) $s = shape()) {
    $this->database = $s['database'] ?? '';
    $this->host = $s['host'] ?? '';
    $this->warehouse = $s['warehouse'] ?? '';
  }
}

class SparkParameters {
  public ?Host $host;
  public ?Port $port;

  public function __construct(shape(
    ?'host' => ?Host,
    ?'port' => ?Port,
  ) $s = shape()) {
    $this->host = $s['host'] ?? '';
    $this->port = $s['port'] ?? 0;
  }
}

type SqlQuery = string;

class SqlServerParameters {
  public ?Database $database;
  public ?Host $host;
  public ?Port $port;

  public function __construct(shape(
    ?'database' => ?Database,
    ?'host' => ?Host,
    ?'port' => ?Port,
  ) $s = shape()) {
    $this->database = $s['database'] ?? '';
    $this->host = $s['host'] ?? '';
    $this->port = $s['port'] ?? 0;
  }
}

class SslProperties {
  public bool $disable_ssl;

  public function __construct(shape(
    ?'disable_ssl' => bool,
  ) $s = shape()) {
    $this->disable_ssl = $s['disable_ssl'] ?? false;
  }
}

type StatusCode = int;

type String = string;

type StringList = vec<String>;

class StringParameter {
  public ?NonEmptyString $name;
  public ?StringList $values;

  public function __construct(shape(
    ?'name' => ?NonEmptyString,
    ?'values' => ?StringList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type StringParameterList = vec<StringParameter>;

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

class TagColumnOperation {
  public ?ColumnName $column_name;
  public ?ColumnTagList $tags;

  public function __construct(shape(
    ?'column_name' => ?ColumnName,
    ?'tags' => ?ColumnTagList,
  ) $s = shape()) {
    $this->column_name = $s['column_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public ?Arn $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceResponse {
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

type TagValue = string;

class Template {
  public ?Arn $arn;
  public ?Timestamp $created_time;
  public ?Timestamp $last_updated_time;
  public ?TemplateName $name;
  public ?RestrictiveResourceId $template_id;
  public ?TemplateVersion $version;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_time' => ?Timestamp,
    ?'last_updated_time' => ?Timestamp,
    ?'name' => ?TemplateName,
    ?'template_id' => ?RestrictiveResourceId,
    ?'version' => ?TemplateVersion,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->template_id = $s['template_id'] ?? '';
    $this->version = $s['version'] ?? null;
  }
}

class TemplateAlias {
  public ?AliasName $alias_name;
  public ?Arn $arn;
  public ?VersionNumber $template_version_number;

  public function __construct(shape(
    ?'alias_name' => ?AliasName,
    ?'arn' => ?Arn,
    ?'template_version_number' => ?VersionNumber,
  ) $s = shape()) {
    $this->alias_name = $s['alias_name'] ?? '';
    $this->arn = $s['arn'] ?? '';
    $this->template_version_number = $s['template_version_number'] ?? 0;
  }
}

type TemplateAliasList = vec<TemplateAlias>;

class TemplateError {
  public ?NonEmptyString $message;
  public ?TemplateErrorType $type;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
    ?'type' => ?TemplateErrorType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type TemplateErrorList = vec<TemplateError>;

type TemplateErrorType = string;

type TemplateName = string;

class TemplateSourceAnalysis {
  public ?Arn $arn;
  public ?DataSetReferenceList $data_set_references;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'data_set_references' => ?DataSetReferenceList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->data_set_references = $s['data_set_references'] ?? vec[];
  }
}

class TemplateSourceEntity {
  public ?TemplateSourceAnalysis $source_analysis;
  public ?TemplateSourceTemplate $source_template;

  public function __construct(shape(
    ?'source_analysis' => ?TemplateSourceAnalysis,
    ?'source_template' => ?TemplateSourceTemplate,
  ) $s = shape()) {
    $this->source_analysis = $s['source_analysis'] ?? null;
    $this->source_template = $s['source_template'] ?? null;
  }
}

class TemplateSourceTemplate {
  public ?Arn $arn;

  public function __construct(shape(
    ?'arn' => ?Arn,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class TemplateSummary {
  public ?Arn $arn;
  public ?Timestamp $created_time;
  public ?Timestamp $last_updated_time;
  public ?VersionNumber $latest_version_number;
  public ?TemplateName $name;
  public ?RestrictiveResourceId $template_id;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_time' => ?Timestamp,
    ?'last_updated_time' => ?Timestamp,
    ?'latest_version_number' => ?VersionNumber,
    ?'name' => ?TemplateName,
    ?'template_id' => ?RestrictiveResourceId,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->latest_version_number = $s['latest_version_number'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->template_id = $s['template_id'] ?? '';
  }
}

type TemplateSummaryList = vec<TemplateSummary>;

class TemplateVersion {
  public ?Timestamp $created_time;
  public ?DataSetConfigurationList $data_set_configurations;
  public ?VersionDescription $description;
  public ?TemplateErrorList $errors;
  public ?Arn $source_entity_arn;
  public ?ResourceStatus $status;
  public ?VersionNumber $version_number;

  public function __construct(shape(
    ?'created_time' => ?Timestamp,
    ?'data_set_configurations' => ?DataSetConfigurationList,
    ?'description' => ?VersionDescription,
    ?'errors' => ?TemplateErrorList,
    ?'source_entity_arn' => ?Arn,
    ?'status' => ?ResourceStatus,
    ?'version_number' => ?VersionNumber,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? 0;
    $this->data_set_configurations = $s['data_set_configurations'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->errors = $s['errors'] ?? vec[];
    $this->source_entity_arn = $s['source_entity_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

class TemplateVersionSummary {
  public ?Arn $arn;
  public ?Timestamp $created_time;
  public ?VersionDescription $description;
  public ?ResourceStatus $status;
  public ?VersionNumber $version_number;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_time' => ?Timestamp,
    ?'description' => ?VersionDescription,
    ?'status' => ?ResourceStatus,
    ?'version_number' => ?VersionNumber,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

type TemplateVersionSummaryList = vec<TemplateVersionSummary>;

class TeradataParameters {
  public ?Database $database;
  public ?Host $host;
  public ?Port $port;

  public function __construct(shape(
    ?'database' => ?Database,
    ?'host' => ?Host,
    ?'port' => ?Port,
  ) $s = shape()) {
    $this->database = $s['database'] ?? '';
    $this->host = $s['host'] ?? '';
    $this->port = $s['port'] ?? 0;
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
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

type Timestamp = int;

type TimestampList = vec<Timestamp>;

class TransformOperation {
  public ?CastColumnTypeOperation $cast_column_type_operation;
  public ?CreateColumnsOperation $create_columns_operation;
  public ?FilterOperation $filter_operation;
  public ?ProjectOperation $project_operation;
  public ?RenameColumnOperation $rename_column_operation;
  public ?TagColumnOperation $tag_column_operation;

  public function __construct(shape(
    ?'cast_column_type_operation' => ?CastColumnTypeOperation,
    ?'create_columns_operation' => ?CreateColumnsOperation,
    ?'filter_operation' => ?FilterOperation,
    ?'project_operation' => ?ProjectOperation,
    ?'rename_column_operation' => ?RenameColumnOperation,
    ?'tag_column_operation' => ?TagColumnOperation,
  ) $s = shape()) {
    $this->cast_column_type_operation = $s['cast_column_type_operation'] ?? null;
    $this->create_columns_operation = $s['create_columns_operation'] ?? null;
    $this->filter_operation = $s['filter_operation'] ?? null;
    $this->project_operation = $s['project_operation'] ?? null;
    $this->rename_column_operation = $s['rename_column_operation'] ?? null;
    $this->tag_column_operation = $s['tag_column_operation'] ?? null;
  }
}

type TransformOperationList = vec<TransformOperation>;

class TwitterParameters {
  public ?PositiveInteger $max_rows;
  public ?Query $query;

  public function __construct(shape(
    ?'max_rows' => ?PositiveInteger,
    ?'query' => ?Query,
  ) $s = shape()) {
    $this->max_rows = $s['max_rows'] ?? 0;
    $this->query = $s['query'] ?? '';
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
    $this->message = $s['message'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
  }
}

class UntagResourceRequest {
  public ?Arn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class UpdateDashboardPermissionsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $dashboard_id;
  public ?UpdateResourcePermissionList $grant_permissions;
  public ?UpdateResourcePermissionList $revoke_permissions;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'grant_permissions' => ?UpdateResourcePermissionList,
    ?'revoke_permissions' => ?UpdateResourcePermissionList,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->grant_permissions = $s['grant_permissions'] ?? vec[];
    $this->revoke_permissions = $s['revoke_permissions'] ?? vec[];
  }
}

class UpdateDashboardPermissionsResponse {
  public ?Arn $dashboard_arn;
  public ?RestrictiveResourceId $dashboard_id;
  public ?ResourcePermissionList $permissions;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'dashboard_arn' => ?Arn,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'permissions' => ?ResourcePermissionList,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->dashboard_arn = $s['dashboard_arn'] ?? '';
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class UpdateDashboardPublishedVersionRequest {
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $dashboard_id;
  public ?VersionNumber $version_number;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'version_number' => ?VersionNumber,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

class UpdateDashboardPublishedVersionResponse {
  public ?Arn $dashboard_arn;
  public ?RestrictiveResourceId $dashboard_id;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'dashboard_arn' => ?Arn,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->dashboard_arn = $s['dashboard_arn'] ?? '';
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class UpdateDashboardRequest {
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $dashboard_id;
  public ?DashboardPublishOptions $dashboard_publish_options;
  public ?DashboardName $name;
  public ?Parameters $parameters;
  public ?DashboardSourceEntity $source_entity;
  public ?VersionDescription $version_description;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'dashboard_publish_options' => ?DashboardPublishOptions,
    ?'name' => ?DashboardName,
    ?'parameters' => ?Parameters,
    ?'source_entity' => ?DashboardSourceEntity,
    ?'version_description' => ?VersionDescription,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->dashboard_publish_options = $s['dashboard_publish_options'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->parameters = $s['parameters'] ?? null;
    $this->source_entity = $s['source_entity'] ?? null;
    $this->version_description = $s['version_description'] ?? '';
  }
}

class UpdateDashboardResponse {
  public ?Arn $arn;
  public ?ResourceStatus $creation_status;
  public ?RestrictiveResourceId $dashboard_id;
  public string $request_id;
  public ?StatusCode $status;
  public ?Arn $version_arn;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'creation_status' => ?ResourceStatus,
    ?'dashboard_id' => ?RestrictiveResourceId,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'version_arn' => ?Arn,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_status = $s['creation_status'] ?? '';
    $this->dashboard_id = $s['dashboard_id'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->version_arn = $s['version_arn'] ?? '';
  }
}

class UpdateDataSetPermissionsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?ResourceId $data_set_id;
  public ?ResourcePermissionList $grant_permissions;
  public ?ResourcePermissionList $revoke_permissions;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'data_set_id' => ?ResourceId,
    ?'grant_permissions' => ?ResourcePermissionList,
    ?'revoke_permissions' => ?ResourcePermissionList,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->grant_permissions = $s['grant_permissions'] ?? vec[];
    $this->revoke_permissions = $s['revoke_permissions'] ?? vec[];
  }
}

class UpdateDataSetPermissionsResponse {
  public ?Arn $data_set_arn;
  public ?ResourceId $data_set_id;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'data_set_arn' => ?Arn,
    ?'data_set_id' => ?ResourceId,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->data_set_arn = $s['data_set_arn'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class UpdateDataSetRequest {
  public ?AwsAccountId $aws_account_id;
  public ?ColumnGroupList $column_groups;
  public ?ResourceId $data_set_id;
  public ?DataSetImportMode $import_mode;
  public ?LogicalTableMap $logical_table_map;
  public ?ResourceName $name;
  public ?PhysicalTableMap $physical_table_map;
  public ?RowLevelPermissionDataSet $row_level_permission_data_set;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'column_groups' => ?ColumnGroupList,
    ?'data_set_id' => ?ResourceId,
    ?'import_mode' => ?DataSetImportMode,
    ?'logical_table_map' => ?LogicalTableMap,
    ?'name' => ?ResourceName,
    ?'physical_table_map' => ?PhysicalTableMap,
    ?'row_level_permission_data_set' => ?RowLevelPermissionDataSet,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->column_groups = $s['column_groups'] ?? vec[];
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->import_mode = $s['import_mode'] ?? '';
    $this->logical_table_map = $s['logical_table_map'] ?? dict[];
    $this->name = $s['name'] ?? '';
    $this->physical_table_map = $s['physical_table_map'] ?? dict[];
    $this->row_level_permission_data_set = $s['row_level_permission_data_set'] ?? null;
  }
}

class UpdateDataSetResponse {
  public ?Arn $arn;
  public ?ResourceId $data_set_id;
  public ?Arn $ingestion_arn;
  public ?ResourceId $ingestion_id;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'data_set_id' => ?ResourceId,
    ?'ingestion_arn' => ?Arn,
    ?'ingestion_id' => ?ResourceId,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->ingestion_arn = $s['ingestion_arn'] ?? '';
    $this->ingestion_id = $s['ingestion_id'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class UpdateDataSourcePermissionsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?ResourceId $data_source_id;
  public ?ResourcePermissionList $grant_permissions;
  public ?ResourcePermissionList $revoke_permissions;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'data_source_id' => ?ResourceId,
    ?'grant_permissions' => ?ResourcePermissionList,
    ?'revoke_permissions' => ?ResourcePermissionList,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->grant_permissions = $s['grant_permissions'] ?? vec[];
    $this->revoke_permissions = $s['revoke_permissions'] ?? vec[];
  }
}

class UpdateDataSourcePermissionsResponse {
  public ?Arn $data_source_arn;
  public ?ResourceId $data_source_id;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'data_source_arn' => ?Arn,
    ?'data_source_id' => ?ResourceId,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->data_source_arn = $s['data_source_arn'] ?? '';
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class UpdateDataSourceRequest {
  public ?AwsAccountId $aws_account_id;
  public ?DataSourceCredentials $credentials;
  public ?ResourceId $data_source_id;
  public ?DataSourceParameters $data_source_parameters;
  public ?ResourceName $name;
  public ?SslProperties $ssl_properties;
  public ?VpcConnectionProperties $vpc_connection_properties;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'credentials' => ?DataSourceCredentials,
    ?'data_source_id' => ?ResourceId,
    ?'data_source_parameters' => ?DataSourceParameters,
    ?'name' => ?ResourceName,
    ?'ssl_properties' => ?SslProperties,
    ?'vpc_connection_properties' => ?VpcConnectionProperties,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->credentials = $s['credentials'] ?? null;
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->data_source_parameters = $s['data_source_parameters'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->ssl_properties = $s['ssl_properties'] ?? null;
    $this->vpc_connection_properties = $s['vpc_connection_properties'] ?? null;
  }
}

class UpdateDataSourceResponse {
  public ?Arn $arn;
  public ?ResourceId $data_source_id;
  public string $request_id;
  public ?StatusCode $status;
  public ?ResourceStatus $update_status;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'data_source_id' => ?ResourceId,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'update_status' => ?ResourceStatus,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->update_status = $s['update_status'] ?? '';
  }
}

class UpdateGroupRequest {
  public ?AwsAccountId $aws_account_id;
  public ?GroupDescription $description;
  public ?GroupName $group_name;
  public ?Namespace $namespace;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'description' => ?GroupDescription,
    ?'group_name' => ?GroupName,
    ?'namespace' => ?Namespace,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
  }
}

class UpdateGroupResponse {
  public ?Group $group;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'group' => ?Group,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->group = $s['group'] ?? null;
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class UpdateIAMPolicyAssignmentRequest {
  public ?IAMPolicyAssignmentName $assignment_name;
  public ?AssignmentStatus $assignment_status;
  public ?AwsAccountId $aws_account_id;
  public ?IdentityMap $identities;
  public ?Namespace $namespace;
  public ?Arn $policy_arn;

  public function __construct(shape(
    ?'assignment_name' => ?IAMPolicyAssignmentName,
    ?'assignment_status' => ?AssignmentStatus,
    ?'aws_account_id' => ?AwsAccountId,
    ?'identities' => ?IdentityMap,
    ?'namespace' => ?Namespace,
    ?'policy_arn' => ?Arn,
  ) $s = shape()) {
    $this->assignment_name = $s['assignment_name'] ?? '';
    $this->assignment_status = $s['assignment_status'] ?? '';
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->identities = $s['identities'] ?? dict[];
    $this->namespace = $s['namespace'] ?? '';
    $this->policy_arn = $s['policy_arn'] ?? '';
  }
}

class UpdateIAMPolicyAssignmentResponse {
  public string $assignment_id;
  public ?IAMPolicyAssignmentName $assignment_name;
  public ?AssignmentStatus $assignment_status;
  public ?IdentityMap $identities;
  public ?Arn $policy_arn;
  public string $request_id;
  public ?StatusCode $status;

  public function __construct(shape(
    ?'assignment_id' => string,
    ?'assignment_name' => ?IAMPolicyAssignmentName,
    ?'assignment_status' => ?AssignmentStatus,
    ?'identities' => ?IdentityMap,
    ?'policy_arn' => ?Arn,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
  ) $s = shape()) {
    $this->assignment_id = $s['assignment_id'] ?? '';
    $this->assignment_name = $s['assignment_name'] ?? '';
    $this->assignment_status = $s['assignment_status'] ?? '';
    $this->identities = $s['identities'] ?? dict[];
    $this->policy_arn = $s['policy_arn'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

type UpdateResourcePermissionList = vec<ResourcePermission>;

class UpdateTemplateAliasRequest {
  public ?AliasName $alias_name;
  public ?AwsAccountId $aws_account_id;
  public ?RestrictiveResourceId $template_id;
  public ?VersionNumber $template_version_number;

  public function __construct(shape(
    ?'alias_name' => ?AliasName,
    ?'aws_account_id' => ?AwsAccountId,
    ?'template_id' => ?RestrictiveResourceId,
    ?'template_version_number' => ?VersionNumber,
  ) $s = shape()) {
    $this->alias_name = $s['alias_name'] ?? '';
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->template_id = $s['template_id'] ?? '';
    $this->template_version_number = $s['template_version_number'] ?? 0;
  }
}

class UpdateTemplateAliasResponse {
  public string $request_id;
  public ?StatusCode $status;
  public ?TemplateAlias $template_alias;

  public function __construct(shape(
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'template_alias' => ?TemplateAlias,
  ) $s = shape()) {
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->template_alias = $s['template_alias'] ?? null;
  }
}

class UpdateTemplatePermissionsRequest {
  public ?AwsAccountId $aws_account_id;
  public ?UpdateResourcePermissionList $grant_permissions;
  public ?UpdateResourcePermissionList $revoke_permissions;
  public ?RestrictiveResourceId $template_id;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'grant_permissions' => ?UpdateResourcePermissionList,
    ?'revoke_permissions' => ?UpdateResourcePermissionList,
    ?'template_id' => ?RestrictiveResourceId,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->grant_permissions = $s['grant_permissions'] ?? vec[];
    $this->revoke_permissions = $s['revoke_permissions'] ?? vec[];
    $this->template_id = $s['template_id'] ?? '';
  }
}

class UpdateTemplatePermissionsResponse {
  public ?ResourcePermissionList $permissions;
  public string $request_id;
  public ?StatusCode $status;
  public ?Arn $template_arn;
  public ?RestrictiveResourceId $template_id;

  public function __construct(shape(
    ?'permissions' => ?ResourcePermissionList,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'template_arn' => ?Arn,
    ?'template_id' => ?RestrictiveResourceId,
  ) $s = shape()) {
    $this->permissions = $s['permissions'] ?? vec[];
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->template_arn = $s['template_arn'] ?? '';
    $this->template_id = $s['template_id'] ?? '';
  }
}

class UpdateTemplateRequest {
  public ?AwsAccountId $aws_account_id;
  public ?TemplateName $name;
  public ?TemplateSourceEntity $source_entity;
  public ?RestrictiveResourceId $template_id;
  public ?VersionDescription $version_description;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'name' => ?TemplateName,
    ?'source_entity' => ?TemplateSourceEntity,
    ?'template_id' => ?RestrictiveResourceId,
    ?'version_description' => ?VersionDescription,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->source_entity = $s['source_entity'] ?? null;
    $this->template_id = $s['template_id'] ?? '';
    $this->version_description = $s['version_description'] ?? '';
  }
}

class UpdateTemplateResponse {
  public ?Arn $arn;
  public ?ResourceStatus $creation_status;
  public string $request_id;
  public ?StatusCode $status;
  public ?RestrictiveResourceId $template_id;
  public ?Arn $version_arn;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'creation_status' => ?ResourceStatus,
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'template_id' => ?RestrictiveResourceId,
    ?'version_arn' => ?Arn,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_status = $s['creation_status'] ?? '';
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->template_id = $s['template_id'] ?? '';
    $this->version_arn = $s['version_arn'] ?? '';
  }
}

class UpdateUserRequest {
  public ?AwsAccountId $aws_account_id;
  public string $email;
  public ?Namespace $namespace;
  public ?UserRole $role;
  public ?UserName $user_name;

  public function __construct(shape(
    ?'aws_account_id' => ?AwsAccountId,
    ?'email' => string,
    ?'namespace' => ?Namespace,
    ?'role' => ?UserRole,
    ?'user_name' => ?UserName,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
    $this->role = $s['role'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class UpdateUserResponse {
  public string $request_id;
  public ?StatusCode $status;
  public ?User $user;

  public function __construct(shape(
    ?'request_id' => string,
    ?'status' => ?StatusCode,
    ?'user' => ?User,
  ) $s = shape()) {
    $this->request_id = $s['request_id'] ?? '';
    $this->status = $s['status'] ?? 0;
    $this->user = $s['user'] ?? null;
  }
}

class UploadSettings {
  public bool $contains_header;
  public ?Delimiter $delimiter;
  public ?FileFormat $format;
  public ?PositiveInteger $start_from_row;
  public ?TextQualifier $text_qualifier;

  public function __construct(shape(
    ?'contains_header' => bool,
    ?'delimiter' => ?Delimiter,
    ?'format' => ?FileFormat,
    ?'start_from_row' => ?PositiveInteger,
    ?'text_qualifier' => ?TextQualifier,
  ) $s = shape()) {
    $this->contains_header = $s['contains_header'] ?? false;
    $this->delimiter = $s['delimiter'] ?? '';
    $this->format = $s['format'] ?? '';
    $this->start_from_row = $s['start_from_row'] ?? 0;
    $this->text_qualifier = $s['text_qualifier'] ?? '';
  }
}

class User {
  public bool $active;
  public ?Arn $arn;
  public string $email;
  public ?IdentityType $identity_type;
  public string $principal_id;
  public ?UserRole $role;
  public ?UserName $user_name;

  public function __construct(shape(
    ?'active' => bool,
    ?'arn' => ?Arn,
    ?'email' => string,
    ?'identity_type' => ?IdentityType,
    ?'principal_id' => string,
    ?'role' => ?UserRole,
    ?'user_name' => ?UserName,
  ) $s = shape()) {
    $this->active = $s['active'] ?? false;
    $this->arn = $s['arn'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->identity_type = $s['identity_type'] ?? '';
    $this->principal_id = $s['principal_id'] ?? '';
    $this->role = $s['role'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

type UserList = vec<User>;

type UserName = string;

type UserRole = string;

type Username = string;

type VersionDescription = string;

type VersionNumber = int;

class VpcConnectionProperties {
  public ?Arn $vpc_connection_arn;

  public function __construct(shape(
    ?'vpc_connection_arn' => ?Arn,
  ) $s = shape()) {
    $this->vpc_connection_arn = $s['vpc_connection_arn'] ?? '';
  }
}

type Warehouse = string;

type WorkGroup = string;

type boolean = bool;

type long = int;

type string = string;

type timestamp = int;

