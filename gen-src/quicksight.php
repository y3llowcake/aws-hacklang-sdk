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
}

class ActionList {
}

class ActiveIAMPolicyAssignment {
  public IAMPolicyAssignmentName $assignment_name;
  public Arn $policy_arn;
}

class ActiveIAMPolicyAssignmentList {
}

class AdHocFilteringOption {
  public DashboardBehavior $availability_status;
}

class AliasName {
}

class AmazonElasticsearchParameters {
  public Domain $domain;
}

class Arn {
}

class AssignmentStatus {
}

class AthenaParameters {
  public WorkGroup $work_group;
}

class AuroraParameters {
  public Database $database;
  public Host $host;
  public Port $port;
}

class AuroraPostgreSqlParameters {
  public Database $database;
  public Host $host;
  public Port $port;
}

class AwsAccountId {
}

class AwsIotAnalyticsParameters {
  public DataSetName $data_set_name;
}

class Boolean {
}

class CalculatedColumn {
  public ColumnId $column_id;
  public ColumnName $column_name;
  public Expression $expression;
}

class CalculatedColumnList {
}

class CancelIngestionRequest {
  public AwsAccountId $aws_account_id;
  public string $data_set_id;
  public IngestionId $ingestion_id;
}

class CancelIngestionResponse {
  public Arn $arn;
  public IngestionId $ingestion_id;
  public string $request_id;
  public StatusCode $status;
}

class CastColumnTypeOperation {
  public ColumnName $column_name;
  public TypeCastFormat $format;
  public ColumnDataType $new_column_type;
}

class Catalog {
}

class ClusterId {
}

class ColumnDataType {
}

class ColumnGroup {
  public GeoSpatialColumnGroup $geo_spatial_column_group;
}

class ColumnGroupColumnSchema {
  public string $name;
}

class ColumnGroupColumnSchemaList {
}

class ColumnGroupList {
}

class ColumnGroupName {
}

class ColumnGroupSchema {
  public ColumnGroupColumnSchemaList $column_group_column_schema_list;
  public string $name;
}

class ColumnGroupSchemaList {
}

class ColumnId {
}

class ColumnList {
}

class ColumnName {
}

class ColumnSchema {
  public string $data_type;
  public string $geographic_role;
  public string $name;
}

class ColumnSchemaList {
}

class ColumnTag {
  public GeoSpatialDataRole $column_geographic_role;
}

class ColumnTagList {
}

class ConcurrentUpdatingException {
  public string $message;
  public string $request_id;
}

class ConflictException {
  public string $message;
  public string $request_id;
}

class CreateColumnsOperation {
  public CalculatedColumnList $columns;
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
}

class CreateDashboardResponse {
  public Arn $arn;
  public ResourceStatus $creation_status;
  public RestrictiveResourceId $dashboard_id;
  public string $request_id;
  public StatusCode $status;
  public Arn $version_arn;
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
}

class CreateDataSetResponse {
  public Arn $arn;
  public ResourceId $data_set_id;
  public Arn $ingestion_arn;
  public ResourceId $ingestion_id;
  public string $request_id;
  public StatusCode $status;
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
}

class CreateDataSourceResponse {
  public Arn $arn;
  public ResourceStatus $creation_status;
  public ResourceId $data_source_id;
  public string $request_id;
  public StatusCode $status;
}

class CreateGroupMembershipRequest {
  public AwsAccountId $aws_account_id;
  public GroupName $group_name;
  public GroupMemberName $member_name;
  public Namespace $namespace;
}

class CreateGroupMembershipResponse {
  public GroupMember $group_member;
  public string $request_id;
  public StatusCode $status;
}

class CreateGroupRequest {
  public AwsAccountId $aws_account_id;
  public GroupDescription $description;
  public GroupName $group_name;
  public Namespace $namespace;
}

class CreateGroupResponse {
  public Group $group;
  public string $request_id;
  public StatusCode $status;
}

class CreateIAMPolicyAssignmentRequest {
  public IAMPolicyAssignmentName $assignment_name;
  public AssignmentStatus $assignment_status;
  public AwsAccountId $aws_account_id;
  public IdentityMap $identities;
  public Namespace $namespace;
  public Arn $policy_arn;
}

class CreateIAMPolicyAssignmentResponse {
  public string $assignment_id;
  public IAMPolicyAssignmentName $assignment_name;
  public AssignmentStatus $assignment_status;
  public IdentityMap $identities;
  public Arn $policy_arn;
  public string $request_id;
  public StatusCode $status;
}

class CreateIngestionRequest {
  public AwsAccountId $aws_account_id;
  public string $data_set_id;
  public IngestionId $ingestion_id;
}

class CreateIngestionResponse {
  public Arn $arn;
  public IngestionId $ingestion_id;
  public IngestionStatus $ingestion_status;
  public string $request_id;
  public StatusCode $status;
}

class CreateTemplateAliasRequest {
  public AliasName $alias_name;
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $template_id;
  public VersionNumber $template_version_number;
}

class CreateTemplateAliasResponse {
  public string $request_id;
  public StatusCode $status;
  public TemplateAlias $template_alias;
}

class CreateTemplateRequest {
  public AwsAccountId $aws_account_id;
  public TemplateName $name;
  public ResourcePermissionList $permissions;
  public TemplateSourceEntity $source_entity;
  public TagList $tags;
  public RestrictiveResourceId $template_id;
  public VersionDescription $version_description;
}

class CreateTemplateResponse {
  public Arn $arn;
  public ResourceStatus $creation_status;
  public string $request_id;
  public StatusCode $status;
  public RestrictiveResourceId $template_id;
  public Arn $version_arn;
}

class CredentialPair {
  public Password $password;
  public Username $username;
}

class CustomSql {
  public InputColumnList $columns;
  public Arn $data_source_arn;
  public CustomSqlName $name;
  public SqlQuery $sql_query;
}

class CustomSqlName {
}

class Dashboard {
  public Arn $arn;
  public Timestamp $created_time;
  public RestrictiveResourceId $dashboard_id;
  public Timestamp $last_published_time;
  public Timestamp $last_updated_time;
  public DashboardName $name;
  public DashboardVersion $version;
}

class DashboardBehavior {
}

class DashboardError {
  public NonEmptyString $message;
  public DashboardErrorType $type;
}

class DashboardErrorList {
}

class DashboardErrorType {
}

class DashboardFilterAttribute {
}

class DashboardName {
}

class DashboardPublishOptions {
  public AdHocFilteringOption $ad_hoc_filtering_option;
  public ExportToCSVOption $export_to_csv_option;
  public SheetControlsOption $sheet_controls_option;
}

class DashboardSearchFilter {
  public DashboardFilterAttribute $name;
  public FilterOperator $operator;
  public string $value;
}

class DashboardSearchFilterList {
}

class DashboardSourceEntity {
  public DashboardSourceTemplate $source_template;
}

class DashboardSourceTemplate {
  public Arn $arn;
  public DataSetReferenceList $data_set_references;
}

class DashboardSummary {
  public Arn $arn;
  public Timestamp $created_time;
  public RestrictiveResourceId $dashboard_id;
  public Timestamp $last_published_time;
  public Timestamp $last_updated_time;
  public DashboardName $name;
  public VersionNumber $published_version_number;
}

class DashboardSummaryList {
}

class DashboardUIState {
}

class DashboardVersion {
  public Arn $arn;
  public Timestamp $created_time;
  public VersionDescription $description;
  public DashboardErrorList $errors;
  public Arn $source_entity_arn;
  public ResourceStatus $status;
  public VersionNumber $version_number;
}

class DashboardVersionSummary {
  public Arn $arn;
  public Timestamp $created_time;
  public VersionDescription $description;
  public Arn $source_entity_arn;
  public ResourceStatus $status;
  public VersionNumber $version_number;
}

class DashboardVersionSummaryList {
}

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
}

class DataSetConfiguration {
  public ColumnGroupSchemaList $column_group_schema_list;
  public DataSetSchema $data_set_schema;
  public string $placeholder;
}

class DataSetConfigurationList {
}

class DataSetImportMode {
}

class DataSetName {
}

class DataSetReference {
  public Arn $data_set_arn;
  public NonEmptyString $data_set_placeholder;
}

class DataSetReferenceList {
}

class DataSetSchema {
  public ColumnSchemaList $column_schema_list;
}

class DataSetSummary {
  public Arn $arn;
  public Timestamp $created_time;
  public ResourceId $data_set_id;
  public DataSetImportMode $import_mode;
  public Timestamp $last_updated_time;
  public ResourceName $name;
  public RowLevelPermissionDataSet $row_level_permission_data_set;
}

class DataSetSummaryList {
}

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
}

class DataSourceCredentials {
  public CredentialPair $credential_pair;
}

class DataSourceErrorInfo {
  public string $message;
  public DataSourceErrorInfoType $type;
}

class DataSourceErrorInfoType {
}

class DataSourceList {
}

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
}

class DataSourceType {
}

class Database {
}

class DateTimeParameter {
  public NonEmptyString $name;
  public TimestampList $values;
}

class DateTimeParameterList {
}

class DecimalParameter {
  public NonEmptyString $name;
  public DoubleList $values;
}

class DecimalParameterList {
}

class DeleteDashboardRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
  public VersionNumber $version_number;
}

class DeleteDashboardResponse {
  public Arn $arn;
  public RestrictiveResourceId $dashboard_id;
  public string $request_id;
  public StatusCode $status;
}

class DeleteDataSetRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_set_id;
}

class DeleteDataSetResponse {
  public Arn $arn;
  public ResourceId $data_set_id;
  public string $request_id;
  public StatusCode $status;
}

class DeleteDataSourceRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_source_id;
}

class DeleteDataSourceResponse {
  public Arn $arn;
  public ResourceId $data_source_id;
  public string $request_id;
  public StatusCode $status;
}

class DeleteGroupMembershipRequest {
  public AwsAccountId $aws_account_id;
  public GroupName $group_name;
  public GroupMemberName $member_name;
  public Namespace $namespace;
}

class DeleteGroupMembershipResponse {
  public string $request_id;
  public StatusCode $status;
}

class DeleteGroupRequest {
  public AwsAccountId $aws_account_id;
  public GroupName $group_name;
  public Namespace $namespace;
}

class DeleteGroupResponse {
  public string $request_id;
  public StatusCode $status;
}

class DeleteIAMPolicyAssignmentRequest {
  public IAMPolicyAssignmentName $assignment_name;
  public AwsAccountId $aws_account_id;
  public Namespace $namespace;
}

class DeleteIAMPolicyAssignmentResponse {
  public IAMPolicyAssignmentName $assignment_name;
  public string $request_id;
  public StatusCode $status;
}

class DeleteTemplateAliasRequest {
  public AliasName $alias_name;
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $template_id;
}

class DeleteTemplateAliasResponse {
  public AliasName $alias_name;
  public Arn $arn;
  public string $request_id;
  public StatusCode $status;
  public RestrictiveResourceId $template_id;
}

class DeleteTemplateRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $template_id;
  public VersionNumber $version_number;
}

class DeleteTemplateResponse {
  public Arn $arn;
  public string $request_id;
  public StatusCode $status;
  public RestrictiveResourceId $template_id;
}

class DeleteUserByPrincipalIdRequest {
  public AwsAccountId $aws_account_id;
  public Namespace $namespace;
  public string $principal_id;
}

class DeleteUserByPrincipalIdResponse {
  public string $request_id;
  public StatusCode $status;
}

class DeleteUserRequest {
  public AwsAccountId $aws_account_id;
  public Namespace $namespace;
  public UserName $user_name;
}

class DeleteUserResponse {
  public string $request_id;
  public StatusCode $status;
}

class Delimiter {
}

class DescribeDashboardPermissionsRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
}

class DescribeDashboardPermissionsResponse {
  public Arn $dashboard_arn;
  public RestrictiveResourceId $dashboard_id;
  public ResourcePermissionList $permissions;
  public string $request_id;
  public StatusCode $status;
}

class DescribeDashboardRequest {
  public AliasName $alias_name;
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
  public VersionNumber $version_number;
}

class DescribeDashboardResponse {
  public Dashboard $dashboard;
  public string $request_id;
  public StatusCode $status;
}

class DescribeDataSetPermissionsRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_set_id;
}

class DescribeDataSetPermissionsResponse {
  public Arn $data_set_arn;
  public ResourceId $data_set_id;
  public ResourcePermissionList $permissions;
  public string $request_id;
  public StatusCode $status;
}

class DescribeDataSetRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_set_id;
}

class DescribeDataSetResponse {
  public DataSet $data_set;
  public string $request_id;
  public StatusCode $status;
}

class DescribeDataSourcePermissionsRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_source_id;
}

class DescribeDataSourcePermissionsResponse {
  public Arn $data_source_arn;
  public ResourceId $data_source_id;
  public ResourcePermissionList $permissions;
  public string $request_id;
  public StatusCode $status;
}

class DescribeDataSourceRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_source_id;
}

class DescribeDataSourceResponse {
  public DataSource $data_source;
  public string $request_id;
  public StatusCode $status;
}

class DescribeGroupRequest {
  public AwsAccountId $aws_account_id;
  public GroupName $group_name;
  public Namespace $namespace;
}

class DescribeGroupResponse {
  public Group $group;
  public string $request_id;
  public StatusCode $status;
}

class DescribeIAMPolicyAssignmentRequest {
  public IAMPolicyAssignmentName $assignment_name;
  public AwsAccountId $aws_account_id;
  public Namespace $namespace;
}

class DescribeIAMPolicyAssignmentResponse {
  public IAMPolicyAssignment $iam_policy_assignment;
  public string $request_id;
  public StatusCode $status;
}

class DescribeIngestionRequest {
  public AwsAccountId $aws_account_id;
  public string $data_set_id;
  public IngestionId $ingestion_id;
}

class DescribeIngestionResponse {
  public Ingestion $ingestion;
  public string $request_id;
  public StatusCode $status;
}

class DescribeTemplateAliasRequest {
  public AliasName $alias_name;
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $template_id;
}

class DescribeTemplateAliasResponse {
  public string $request_id;
  public StatusCode $status;
  public TemplateAlias $template_alias;
}

class DescribeTemplatePermissionsRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $template_id;
}

class DescribeTemplatePermissionsResponse {
  public ResourcePermissionList $permissions;
  public string $request_id;
  public StatusCode $status;
  public Arn $template_arn;
  public RestrictiveResourceId $template_id;
}

class DescribeTemplateRequest {
  public AliasName $alias_name;
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $template_id;
  public VersionNumber $version_number;
}

class DescribeTemplateResponse {
  public StatusCode $status;
  public Template $template;
}

class DescribeUserRequest {
  public AwsAccountId $aws_account_id;
  public Namespace $namespace;
  public UserName $user_name;
}

class DescribeUserResponse {
  public string $request_id;
  public StatusCode $status;
  public User $user;
}

class Domain {
}

class DomainNotWhitelistedException {
  public string $message;
  public string $request_id;
}

class Double {
}

class DoubleList {
}

class EmbeddingUrl {
}

class ErrorInfo {
  public string $message;
  public IngestionErrorType $type;
}

class ExceptionResourceType {
}

class ExportToCSVOption {
  public DashboardBehavior $availability_status;
}

class Expression {
}

class FileFormat {
}

class FilterOperation {
  public Expression $condition_expression;
}

class FilterOperator {
}

class GeoSpatialColumnGroup {
  public ColumnList $columns;
  public GeoSpatialCountryCode $country_code;
  public ColumnGroupName $name;
}

class GeoSpatialCountryCode {
}

class GeoSpatialDataRole {
}

class GetDashboardEmbedUrlRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
  public IdentityType $identity_type;
  public boolean $reset_disabled;
  public SessionLifetimeInMinutes $session_lifetime_in_minutes;
  public boolean $undo_redo_disabled;
  public Arn $user_arn;
}

class GetDashboardEmbedUrlResponse {
  public EmbeddingUrl $embed_url;
  public string $request_id;
  public StatusCode $status;
}

class Group {
  public Arn $arn;
  public GroupDescription $description;
  public GroupName $group_name;
  public string $principal_id;
}

class GroupDescription {
}

class GroupList {
}

class GroupMember {
  public Arn $arn;
  public GroupMemberName $member_name;
}

class GroupMemberList {
}

class GroupMemberName {
}

class GroupName {
}

class Host {
}

class IAMPolicyAssignment {
  public string $assignment_id;
  public IAMPolicyAssignmentName $assignment_name;
  public AssignmentStatus $assignment_status;
  public AwsAccountId $aws_account_id;
  public IdentityMap $identities;
  public Arn $policy_arn;
}

class IAMPolicyAssignmentName {
}

class IAMPolicyAssignmentSummary {
  public IAMPolicyAssignmentName $assignment_name;
  public AssignmentStatus $assignment_status;
}

class IAMPolicyAssignmentSummaryList {
}

class IdentityMap {
}

class IdentityName {
}

class IdentityNameList {
}

class IdentityType {
}

class IdentityTypeNotSupportedException {
  public string $message;
  public string $request_id;
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
}

class IngestionErrorType {
}

class IngestionId {
}

class IngestionMaxResults {
}

class IngestionRequestSource {
}

class IngestionRequestType {
}

class IngestionStatus {
}

class Ingestions {
}

class InputColumn {
  public ColumnName $name;
  public InputColumnDataType $type;
}

class InputColumnDataType {
}

class InputColumnList {
}

class InstanceId {
}

class IntegerParameter {
  public NonEmptyString $name;
  public LongList $values;
}

class IntegerParameterList {
}

class InternalFailureException {
  public string $message;
  public string $request_id;
}

class InvalidNextTokenException {
  public string $message;
  public string $request_id;
}

class InvalidParameterValueException {
  public string $message;
  public string $request_id;
}

class JiraParameters {
  public SiteBaseUrl $site_base_url;
}

class JoinInstruction {
  public LogicalTableId $left_operand;
  public OnClause $on_clause;
  public LogicalTableId $right_operand;
  public JoinType $type;
}

class JoinType {
}

class LimitExceededException {
  public string $message;
  public string $request_id;
  public ExceptionResourceType $resource_type;
}

class ListDashboardVersionsRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
  public MaxResults $max_results;
  public string $next_token;
}

class ListDashboardVersionsResponse {
  public DashboardVersionSummaryList $dashboard_version_summary_list;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
}

class ListDashboardsRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public string $next_token;
}

class ListDashboardsResponse {
  public DashboardSummaryList $dashboard_summary_list;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
}

class ListDataSetsRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public string $next_token;
}

class ListDataSetsResponse {
  public DataSetSummaryList $data_set_summaries;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
}

class ListDataSourcesRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public string $next_token;
}

class ListDataSourcesResponse {
  public DataSourceList $data_sources;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
}

class ListGroupMembershipsRequest {
  public AwsAccountId $aws_account_id;
  public GroupName $group_name;
  public MaxResults $max_results;
  public Namespace $namespace;
  public string $next_token;
}

class ListGroupMembershipsResponse {
  public GroupMemberList $group_member_list;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
}

class ListGroupsRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public Namespace $namespace;
  public string $next_token;
}

class ListGroupsResponse {
  public GroupList $group_list;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
}

class ListIAMPolicyAssignmentsForUserRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public Namespace $namespace;
  public string $next_token;
  public UserName $user_name;
}

class ListIAMPolicyAssignmentsForUserResponse {
  public ActiveIAMPolicyAssignmentList $active_assignments;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
}

class ListIAMPolicyAssignmentsRequest {
  public AssignmentStatus $assignment_status;
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public Namespace $namespace;
  public string $next_token;
}

class ListIAMPolicyAssignmentsResponse {
  public IAMPolicyAssignmentSummaryList $iam_policy_assignments;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
}

class ListIngestionsRequest {
  public AwsAccountId $aws_account_id;
  public string $data_set_id;
  public IngestionMaxResults $max_results;
  public string $next_token;
}

class ListIngestionsResponse {
  public Ingestions $ingestions;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class ListTagsForResourceResponse {
  public string $request_id;
  public StatusCode $status;
  public TagList $tags;
}

class ListTemplateAliasesRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public string $next_token;
  public RestrictiveResourceId $template_id;
}

class ListTemplateAliasesResponse {
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
  public TemplateAliasList $template_alias_list;
}

class ListTemplateVersionsRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public string $next_token;
  public RestrictiveResourceId $template_id;
}

class ListTemplateVersionsResponse {
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
  public TemplateVersionSummaryList $template_version_summary_list;
}

class ListTemplatesRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public string $next_token;
}

class ListTemplatesResponse {
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
  public TemplateSummaryList $template_summary_list;
}

class ListUserGroupsRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public Namespace $namespace;
  public string $next_token;
  public UserName $user_name;
}

class ListUserGroupsResponse {
  public GroupList $group_list;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
}

class ListUsersRequest {
  public AwsAccountId $aws_account_id;
  public MaxResults $max_results;
  public Namespace $namespace;
  public string $next_token;
}

class ListUsersResponse {
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
  public UserList $user_list;
}

class LogicalTable {
  public LogicalTableAlias $alias;
  public TransformOperationList $data_transforms;
  public LogicalTableSource $source;
}

class LogicalTableAlias {
}

class LogicalTableId {
}

class LogicalTableMap {
}

class LogicalTableSource {
  public JoinInstruction $join_instruction;
  public PhysicalTableId $physical_table_id;
}

class Long {
}

class LongList {
}

class ManifestFileLocation {
  public S3Bucket $bucket;
  public S3Key $key;
}

class MariaDbParameters {
  public Database $database;
  public Host $host;
  public Port $port;
}

class MaxResults {
}

class MySqlParameters {
  public Database $database;
  public Host $host;
  public Port $port;
}

class Namespace {
}

class NonEmptyString {
}

class OnClause {
}

class OptionalPort {
}

class OutputColumn {
  public ColumnName $name;
  public ColumnDataType $type;
}

class OutputColumnList {
}

class Parameters {
  public DateTimeParameterList $date_time_parameters;
  public DecimalParameterList $decimal_parameters;
  public IntegerParameterList $integer_parameters;
  public StringParameterList $string_parameters;
}

class Password {
}

class PhysicalTable {
  public CustomSql $custom_sql;
  public RelationalTable $relational_table;
  public S3Source $s_3_source;
}

class PhysicalTableId {
}

class PhysicalTableMap {
}

class Port {
}

class PositiveInteger {
}

class PostgreSqlParameters {
  public Database $database;
  public Host $host;
  public Port $port;
}

class PreconditionNotMetException {
  public string $message;
  public string $request_id;
}

class PrestoParameters {
  public Catalog $catalog;
  public Host $host;
  public Port $port;
}

class Principal {
}

class ProjectOperation {
  public ProjectedColumnList $projected_columns;
}

class ProjectedColumnList {
}

class Query {
}

class QueueInfo {
  public string $queued_ingestion;
  public string $waiting_on_ingestion;
}

class QuickSightUserNotFoundException {
  public string $message;
  public string $request_id;
}

class RdsParameters {
  public Database $database;
  public InstanceId $instance_id;
}

class RedshiftParameters {
  public ClusterId $cluster_id;
  public Database $database;
  public Host $host;
  public OptionalPort $port;
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
}

class RegisterUserResponse {
  public string $request_id;
  public StatusCode $status;
  public User $user;
  public string $user_invitation_url;
}

class RelationalTable {
  public Arn $data_source_arn;
  public InputColumnList $input_columns;
  public RelationalTableName $name;
  public RelationalTableSchema $schema;
}

class RelationalTableName {
}

class RelationalTableSchema {
}

class RenameColumnOperation {
  public ColumnName $column_name;
  public ColumnName $new_column_name;
}

class ResourceExistsException {
  public string $message;
  public string $request_id;
  public ExceptionResourceType $resource_type;
}

class ResourceId {
}

class ResourceName {
}

class ResourceNotFoundException {
  public string $message;
  public string $request_id;
  public ExceptionResourceType $resource_type;
}

class ResourcePermission {
  public ActionList $actions;
  public Principal $principal;
}

class ResourcePermissionList {
}

class ResourceStatus {
}

class ResourceUnavailableException {
  public string $message;
  public string $request_id;
  public ExceptionResourceType $resource_type;
}

class RestrictiveResourceId {
}

class RoleSessionName {
}

class RowInfo {
  public long $rows_dropped;
  public long $rows_ingested;
}

class RowLevelPermissionDataSet {
  public Arn $arn;
  public RowLevelPermissionPolicy $permission_policy;
}

class RowLevelPermissionPolicy {
}

class S3Bucket {
}

class S3Key {
}

class S3Parameters {
  public ManifestFileLocation $manifest_file_location;
}

class S3Source {
  public Arn $data_source_arn;
  public InputColumnList $input_columns;
  public UploadSettings $upload_settings;
}

class SearchDashboardsRequest {
  public AwsAccountId $aws_account_id;
  public DashboardSearchFilterList $filters;
  public MaxResults $max_results;
  public string $next_token;
}

class SearchDashboardsResponse {
  public DashboardSummaryList $dashboard_summary_list;
  public string $next_token;
  public string $request_id;
  public StatusCode $status;
}

class ServiceNowParameters {
  public SiteBaseUrl $site_base_url;
}

class SessionLifetimeInMinutes {
}

class SessionLifetimeInMinutesInvalidException {
  public string $message;
  public string $request_id;
}

class SheetControlsOption {
  public DashboardUIState $visibility_state;
}

class SiteBaseUrl {
}

class SnowflakeParameters {
  public Database $database;
  public Host $host;
  public Warehouse $warehouse;
}

class SparkParameters {
  public Host $host;
  public Port $port;
}

class SqlQuery {
}

class SqlServerParameters {
  public Database $database;
  public Host $host;
  public Port $port;
}

class SslProperties {
  public boolean $disable_ssl;
}

class StatusCode {
}

class String {
}

class StringList {
}

class StringParameter {
  public NonEmptyString $name;
  public StringList $values;
}

class StringParameterList {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagColumnOperation {
  public ColumnName $column_name;
  public ColumnTagList $tags;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
  public string $request_id;
  public StatusCode $status;
}

class TagValue {
}

class Template {
  public Arn $arn;
  public Timestamp $created_time;
  public Timestamp $last_updated_time;
  public TemplateName $name;
  public RestrictiveResourceId $template_id;
  public TemplateVersion $version;
}

class TemplateAlias {
  public AliasName $alias_name;
  public Arn $arn;
  public VersionNumber $template_version_number;
}

class TemplateAliasList {
}

class TemplateError {
  public NonEmptyString $message;
  public TemplateErrorType $type;
}

class TemplateErrorList {
}

class TemplateErrorType {
}

class TemplateName {
}

class TemplateSourceAnalysis {
  public Arn $arn;
  public DataSetReferenceList $data_set_references;
}

class TemplateSourceEntity {
  public TemplateSourceAnalysis $source_analysis;
  public TemplateSourceTemplate $source_template;
}

class TemplateSourceTemplate {
  public Arn $arn;
}

class TemplateSummary {
  public Arn $arn;
  public Timestamp $created_time;
  public Timestamp $last_updated_time;
  public VersionNumber $latest_version_number;
  public TemplateName $name;
  public RestrictiveResourceId $template_id;
}

class TemplateSummaryList {
}

class TemplateVersion {
  public Timestamp $created_time;
  public DataSetConfigurationList $data_set_configurations;
  public VersionDescription $description;
  public TemplateErrorList $errors;
  public Arn $source_entity_arn;
  public ResourceStatus $status;
  public VersionNumber $version_number;
}

class TemplateVersionSummary {
  public Arn $arn;
  public Timestamp $created_time;
  public VersionDescription $description;
  public ResourceStatus $status;
  public VersionNumber $version_number;
}

class TemplateVersionSummaryList {
}

class TeradataParameters {
  public Database $database;
  public Host $host;
  public Port $port;
}

class TextQualifier {
}

class ThrottlingException {
  public string $message;
  public string $request_id;
}

class Timestamp {
}

class TimestampList {
}

class TransformOperation {
  public CastColumnTypeOperation $cast_column_type_operation;
  public CreateColumnsOperation $create_columns_operation;
  public FilterOperation $filter_operation;
  public ProjectOperation $project_operation;
  public RenameColumnOperation $rename_column_operation;
  public TagColumnOperation $tag_column_operation;
}

class TransformOperationList {
}

class TwitterParameters {
  public PositiveInteger $max_rows;
  public Query $query;
}

class TypeCastFormat {
}

class UnsupportedUserEditionException {
  public string $message;
  public string $request_id;
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
  public string $request_id;
  public StatusCode $status;
}

class UpdateDashboardPermissionsRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
  public UpdateResourcePermissionList $grant_permissions;
  public UpdateResourcePermissionList $revoke_permissions;
}

class UpdateDashboardPermissionsResponse {
  public Arn $dashboard_arn;
  public RestrictiveResourceId $dashboard_id;
  public ResourcePermissionList $permissions;
  public string $request_id;
  public StatusCode $status;
}

class UpdateDashboardPublishedVersionRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
  public VersionNumber $version_number;
}

class UpdateDashboardPublishedVersionResponse {
  public Arn $dashboard_arn;
  public RestrictiveResourceId $dashboard_id;
  public string $request_id;
  public StatusCode $status;
}

class UpdateDashboardRequest {
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $dashboard_id;
  public DashboardPublishOptions $dashboard_publish_options;
  public DashboardName $name;
  public Parameters $parameters;
  public DashboardSourceEntity $source_entity;
  public VersionDescription $version_description;
}

class UpdateDashboardResponse {
  public Arn $arn;
  public ResourceStatus $creation_status;
  public RestrictiveResourceId $dashboard_id;
  public string $request_id;
  public StatusCode $status;
  public Arn $version_arn;
}

class UpdateDataSetPermissionsRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_set_id;
  public ResourcePermissionList $grant_permissions;
  public ResourcePermissionList $revoke_permissions;
}

class UpdateDataSetPermissionsResponse {
  public Arn $data_set_arn;
  public ResourceId $data_set_id;
  public string $request_id;
  public StatusCode $status;
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
}

class UpdateDataSetResponse {
  public Arn $arn;
  public ResourceId $data_set_id;
  public Arn $ingestion_arn;
  public ResourceId $ingestion_id;
  public string $request_id;
  public StatusCode $status;
}

class UpdateDataSourcePermissionsRequest {
  public AwsAccountId $aws_account_id;
  public ResourceId $data_source_id;
  public ResourcePermissionList $grant_permissions;
  public ResourcePermissionList $revoke_permissions;
}

class UpdateDataSourcePermissionsResponse {
  public Arn $data_source_arn;
  public ResourceId $data_source_id;
  public string $request_id;
  public StatusCode $status;
}

class UpdateDataSourceRequest {
  public AwsAccountId $aws_account_id;
  public DataSourceCredentials $credentials;
  public ResourceId $data_source_id;
  public DataSourceParameters $data_source_parameters;
  public ResourceName $name;
  public SslProperties $ssl_properties;
  public VpcConnectionProperties $vpc_connection_properties;
}

class UpdateDataSourceResponse {
  public Arn $arn;
  public ResourceId $data_source_id;
  public string $request_id;
  public StatusCode $status;
  public ResourceStatus $update_status;
}

class UpdateGroupRequest {
  public AwsAccountId $aws_account_id;
  public GroupDescription $description;
  public GroupName $group_name;
  public Namespace $namespace;
}

class UpdateGroupResponse {
  public Group $group;
  public string $request_id;
  public StatusCode $status;
}

class UpdateIAMPolicyAssignmentRequest {
  public IAMPolicyAssignmentName $assignment_name;
  public AssignmentStatus $assignment_status;
  public AwsAccountId $aws_account_id;
  public IdentityMap $identities;
  public Namespace $namespace;
  public Arn $policy_arn;
}

class UpdateIAMPolicyAssignmentResponse {
  public string $assignment_id;
  public IAMPolicyAssignmentName $assignment_name;
  public AssignmentStatus $assignment_status;
  public IdentityMap $identities;
  public Arn $policy_arn;
  public string $request_id;
  public StatusCode $status;
}

class UpdateResourcePermissionList {
}

class UpdateTemplateAliasRequest {
  public AliasName $alias_name;
  public AwsAccountId $aws_account_id;
  public RestrictiveResourceId $template_id;
  public VersionNumber $template_version_number;
}

class UpdateTemplateAliasResponse {
  public string $request_id;
  public StatusCode $status;
  public TemplateAlias $template_alias;
}

class UpdateTemplatePermissionsRequest {
  public AwsAccountId $aws_account_id;
  public UpdateResourcePermissionList $grant_permissions;
  public UpdateResourcePermissionList $revoke_permissions;
  public RestrictiveResourceId $template_id;
}

class UpdateTemplatePermissionsResponse {
  public ResourcePermissionList $permissions;
  public string $request_id;
  public StatusCode $status;
  public Arn $template_arn;
  public RestrictiveResourceId $template_id;
}

class UpdateTemplateRequest {
  public AwsAccountId $aws_account_id;
  public TemplateName $name;
  public TemplateSourceEntity $source_entity;
  public RestrictiveResourceId $template_id;
  public VersionDescription $version_description;
}

class UpdateTemplateResponse {
  public Arn $arn;
  public ResourceStatus $creation_status;
  public string $request_id;
  public StatusCode $status;
  public RestrictiveResourceId $template_id;
  public Arn $version_arn;
}

class UpdateUserRequest {
  public AwsAccountId $aws_account_id;
  public string $email;
  public Namespace $namespace;
  public UserRole $role;
  public UserName $user_name;
}

class UpdateUserResponse {
  public string $request_id;
  public StatusCode $status;
  public User $user;
}

class UploadSettings {
  public boolean $contains_header;
  public Delimiter $delimiter;
  public FileFormat $format;
  public PositiveInteger $start_from_row;
  public TextQualifier $text_qualifier;
}

class User {
  public boolean $active;
  public Arn $arn;
  public string $email;
  public IdentityType $identity_type;
  public string $principal_id;
  public UserRole $role;
  public UserName $user_name;
}

class UserList {
}

class UserName {
}

class UserRole {
}

class Username {
}

class VersionDescription {
}

class VersionNumber {
}

class VpcConnectionProperties {
  public Arn $vpc_connection_arn;
}

class Warehouse {
}

class WorkGroup {
}

class boolean {
}

class long {
}

class string {
}

class timestamp {
}

