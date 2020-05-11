<?hh // strict
namespace slack\aws\lakeformation;

interface LakeFormation {
  public function BatchGrantPermissions(BatchGrantPermissionsRequest): Awaitable<Errors\Result<BatchGrantPermissionsResponse>>;
  public function BatchRevokePermissions(BatchRevokePermissionsRequest): Awaitable<Errors\Result<BatchRevokePermissionsResponse>>;
  public function DeregisterResource(DeregisterResourceRequest): Awaitable<Errors\Result<DeregisterResourceResponse>>;
  public function DescribeResource(DescribeResourceRequest): Awaitable<Errors\Result<DescribeResourceResponse>>;
  public function GetDataLakeSettings(GetDataLakeSettingsRequest): Awaitable<Errors\Result<GetDataLakeSettingsResponse>>;
  public function GetEffectivePermissionsForPath(GetEffectivePermissionsForPathRequest): Awaitable<Errors\Result<GetEffectivePermissionsForPathResponse>>;
  public function GrantPermissions(GrantPermissionsRequest): Awaitable<Errors\Result<GrantPermissionsResponse>>;
  public function ListPermissions(ListPermissionsRequest): Awaitable<Errors\Result<ListPermissionsResponse>>;
  public function ListResources(ListResourcesRequest): Awaitable<Errors\Result<ListResourcesResponse>>;
  public function PutDataLakeSettings(PutDataLakeSettingsRequest): Awaitable<Errors\Result<PutDataLakeSettingsResponse>>;
  public function RegisterResource(RegisterResourceRequest): Awaitable<Errors\Result<RegisterResourceResponse>>;
  public function RevokePermissions(RevokePermissionsRequest): Awaitable<Errors\Result<RevokePermissionsResponse>>;
  public function UpdateResource(UpdateResourceRequest): Awaitable<Errors\Result<UpdateResourceResponse>>;
}

class AlreadyExistsException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class BatchGrantPermissionsRequest {
  public CatalogIdString $catalog_id;
  public BatchPermissionsRequestEntryList $entries;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'entries' => BatchPermissionsRequestEntryList,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? ;
    $this->entries = $entries ?? ;
  }
}

class BatchGrantPermissionsResponse {
  public BatchPermissionsFailureList $failures;

  public function __construct(shape(
  ?'failures' => BatchPermissionsFailureList,
  ) $s = shape()) {
    $this->failures = $failures ?? ;
  }
}

class BatchPermissionsFailureEntry {
  public ErrorDetail $error;
  public BatchPermissionsRequestEntry $request_entry;

  public function __construct(shape(
  ?'error' => ErrorDetail,
  ?'request_entry' => BatchPermissionsRequestEntry,
  ) $s = shape()) {
    $this->error = $error ?? ;
    $this->request_entry = $request_entry ?? ;
  }
}

type BatchPermissionsFailureList = vec<BatchPermissionsFailureEntry>;

class BatchPermissionsRequestEntry {
  public Identifier $id;
  public PermissionList $permissions;
  public PermissionList $permissions_with_grant_option;
  public DataLakePrincipal $principal;
  public Resource $resource;

  public function __construct(shape(
  ?'id' => Identifier,
  ?'permissions' => PermissionList,
  ?'permissions_with_grant_option' => PermissionList,
  ?'principal' => DataLakePrincipal,
  ?'resource' => Resource,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->permissions = $permissions ?? ;
    $this->permissions_with_grant_option = $permissions_with_grant_option ?? ;
    $this->principal = $principal ?? ;
    $this->resource = $resource ?? null;
  }
}

type BatchPermissionsRequestEntryList = vec<BatchPermissionsRequestEntry>;

class BatchRevokePermissionsRequest {
  public CatalogIdString $catalog_id;
  public BatchPermissionsRequestEntryList $entries;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'entries' => BatchPermissionsRequestEntryList,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? ;
    $this->entries = $entries ?? ;
  }
}

class BatchRevokePermissionsResponse {
  public BatchPermissionsFailureList $failures;

  public function __construct(shape(
  ?'failures' => BatchPermissionsFailureList,
  ) $s = shape()) {
    $this->failures = $failures ?? ;
  }
}

type CatalogIdString = string;

class CatalogResource {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ColumnNames = vec<NameString>;

class ColumnWildcard {
  public ColumnNames $excluded_column_names;

  public function __construct(shape(
  ?'excluded_column_names' => ColumnNames,
  ) $s = shape()) {
    $this->excluded_column_names = $excluded_column_names ?? ;
  }
}

type ComparisonOperator = string;

class ConcurrentModificationException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class DataLakePrincipal {
  public DataLakePrincipalString $data_lake_principal_identifier;

  public function __construct(shape(
  ?'data_lake_principal_identifier' => DataLakePrincipalString,
  ) $s = shape()) {
    $this->data_lake_principal_identifier = $data_lake_principal_identifier ?? ;
  }
}

type DataLakePrincipalList = vec<DataLakePrincipal>;

type DataLakePrincipalString = string;

type DataLakeResourceType = string;

class DataLakeSettings {
  public PrincipalPermissionsList $create_database_default_permissions;
  public PrincipalPermissionsList $create_table_default_permissions;
  public DataLakePrincipalList $data_lake_admins;

  public function __construct(shape(
  ?'create_database_default_permissions' => PrincipalPermissionsList,
  ?'create_table_default_permissions' => PrincipalPermissionsList,
  ?'data_lake_admins' => DataLakePrincipalList,
  ) $s = shape()) {
    $this->create_database_default_permissions = $create_database_default_permissions ?? ;
    $this->create_table_default_permissions = $create_table_default_permissions ?? ;
    $this->data_lake_admins = $data_lake_admins ?? ;
  }
}

class DataLocationResource {
  public ResourceArnString $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArnString,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
  }
}

class DatabaseResource {
  public NameString $name;

  public function __construct(shape(
  ?'name' => NameString,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class DeregisterResourceRequest {
  public ResourceArnString $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArnString,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
  }
}

class DeregisterResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeResourceRequest {
  public ResourceArnString $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArnString,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
  }
}

class DescribeResourceResponse {
  public ResourceInfo $resource_info;

  public function __construct(shape(
  ?'resource_info' => ResourceInfo,
  ) $s = shape()) {
    $this->resource_info = $resource_info ?? null;
  }
}

type DescriptionString = string;

class EntityNotFoundException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ErrorDetail {
  public NameString $error_code;
  public DescriptionString $error_message;

  public function __construct(shape(
  ?'error_code' => NameString,
  ?'error_message' => DescriptionString,
  ) $s = shape()) {
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? ;
  }
}

type FieldNameString = string;

class FilterCondition {
  public ComparisonOperator $comparison_operator;
  public FieldNameString $field;
  public StringValueList $string_value_list;

  public function __construct(shape(
  ?'comparison_operator' => ComparisonOperator,
  ?'field' => FieldNameString,
  ?'string_value_list' => StringValueList,
  ) $s = shape()) {
    $this->comparison_operator = $comparison_operator ?? "";
    $this->field = $field ?? ;
    $this->string_value_list = $string_value_list ?? [];
  }
}

type FilterConditionList = vec<FilterCondition>;

class GetDataLakeSettingsRequest {
  public CatalogIdString $catalog_id;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? ;
  }
}

class GetDataLakeSettingsResponse {
  public DataLakeSettings $data_lake_settings;

  public function __construct(shape(
  ?'data_lake_settings' => DataLakeSettings,
  ) $s = shape()) {
    $this->data_lake_settings = $data_lake_settings ?? null;
  }
}

class GetEffectivePermissionsForPathRequest {
  public CatalogIdString $catalog_id;
  public PageSize $max_results;
  public Token $next_token;
  public ResourceArnString $resource_arn;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'max_results' => PageSize,
  ?'next_token' => Token,
  ?'resource_arn' => ResourceArnString,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->resource_arn = $resource_arn ?? ;
  }
}

class GetEffectivePermissionsForPathResponse {
  public Token $next_token;
  public PrincipalResourcePermissionsList $permissions;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'permissions' => PrincipalResourcePermissionsList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->permissions = $permissions ?? ;
  }
}

class GrantPermissionsRequest {
  public CatalogIdString $catalog_id;
  public PermissionList $permissions;
  public PermissionList $permissions_with_grant_option;
  public DataLakePrincipal $principal;
  public Resource $resource;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'permissions' => PermissionList,
  ?'permissions_with_grant_option' => PermissionList,
  ?'principal' => DataLakePrincipal,
  ?'resource' => Resource,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? ;
    $this->permissions = $permissions ?? ;
    $this->permissions_with_grant_option = $permissions_with_grant_option ?? ;
    $this->principal = $principal ?? ;
    $this->resource = $resource ?? null;
  }
}

class GrantPermissionsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type IAMRoleArn = string;

type Identifier = string;

class InternalServiceException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidInputException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type LastModifiedTimestamp = int;

class ListPermissionsRequest {
  public CatalogIdString $catalog_id;
  public PageSize $max_results;
  public Token $next_token;
  public DataLakePrincipal $principal;
  public Resource $resource;
  public DataLakeResourceType $resource_type;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'max_results' => PageSize,
  ?'next_token' => Token,
  ?'principal' => DataLakePrincipal,
  ?'resource' => Resource,
  ?'resource_type' => DataLakeResourceType,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->principal = $principal ?? ;
    $this->resource = $resource ?? null;
    $this->resource_type = $resource_type ?? ;
  }
}

class ListPermissionsResponse {
  public Token $next_token;
  public PrincipalResourcePermissionsList $principal_resource_permissions;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'principal_resource_permissions' => PrincipalResourcePermissionsList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->principal_resource_permissions = $principal_resource_permissions ?? null;
  }
}

class ListResourcesRequest {
  public FilterConditionList $filter_condition_list;
  public PageSize $max_results;
  public Token $next_token;

  public function __construct(shape(
  ?'filter_condition_list' => FilterConditionList,
  ?'max_results' => PageSize,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->filter_condition_list = $filter_condition_list ?? [];
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListResourcesResponse {
  public Token $next_token;
  public ResourceInfoList $resource_info_list;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'resource_info_list' => ResourceInfoList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->resource_info_list = $resource_info_list ?? [];
  }
}

type MessageString = string;

type NameString = string;

type NullableBoolean = bool;

class OperationTimeoutException {
  public MessageString $message;

  public function __construct(shape(
  ?'message' => MessageString,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type PageSize = int;

type Permission = string;

type PermissionList = vec<Permission>;

class PrincipalPermissions {
  public PermissionList $permissions;
  public DataLakePrincipal $principal;

  public function __construct(shape(
  ?'permissions' => PermissionList,
  ?'principal' => DataLakePrincipal,
  ) $s = shape()) {
    $this->permissions = $permissions ?? ;
    $this->principal = $principal ?? ;
  }
}

type PrincipalPermissionsList = vec<PrincipalPermissions>;

class PrincipalResourcePermissions {
  public PermissionList $permissions;
  public PermissionList $permissions_with_grant_option;
  public DataLakePrincipal $principal;
  public Resource $resource;

  public function __construct(shape(
  ?'permissions' => PermissionList,
  ?'permissions_with_grant_option' => PermissionList,
  ?'principal' => DataLakePrincipal,
  ?'resource' => Resource,
  ) $s = shape()) {
    $this->permissions = $permissions ?? ;
    $this->permissions_with_grant_option = $permissions_with_grant_option ?? ;
    $this->principal = $principal ?? ;
    $this->resource = $resource ?? null;
  }
}

type PrincipalResourcePermissionsList = vec<PrincipalResourcePermissions>;

class PutDataLakeSettingsRequest {
  public CatalogIdString $catalog_id;
  public DataLakeSettings $data_lake_settings;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'data_lake_settings' => DataLakeSettings,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? ;
    $this->data_lake_settings = $data_lake_settings ?? null;
  }
}

class PutDataLakeSettingsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RegisterResourceRequest {
  public ResourceArnString $resource_arn;
  public IAMRoleArn $role_arn;
  public NullableBoolean $use_service_linked_role;

  public function __construct(shape(
  ?'resource_arn' => ResourceArnString,
  ?'role_arn' => IAMRoleArn,
  ?'use_service_linked_role' => NullableBoolean,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->use_service_linked_role = $use_service_linked_role ?? ;
  }
}

class RegisterResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Resource {
  public CatalogResource $catalog;
  public DataLocationResource $data_location;
  public DatabaseResource $database;
  public TableResource $table;
  public TableWithColumnsResource $table_with_columns;

  public function __construct(shape(
  ?'catalog' => CatalogResource,
  ?'data_location' => DataLocationResource,
  ?'database' => DatabaseResource,
  ?'table' => TableResource,
  ?'table_with_columns' => TableWithColumnsResource,
  ) $s = shape()) {
    $this->catalog = $catalog ?? ;
    $this->data_location = $data_location ?? ;
    $this->database = $database ?? ;
    $this->table = $table ?? ;
    $this->table_with_columns = $table_with_columns ?? ;
  }
}

type ResourceArnString = string;

class ResourceInfo {
  public LastModifiedTimestamp $last_modified;
  public ResourceArnString $resource_arn;
  public IAMRoleArn $role_arn;

  public function __construct(shape(
  ?'last_modified' => LastModifiedTimestamp,
  ?'resource_arn' => ResourceArnString,
  ?'role_arn' => IAMRoleArn,
  ) $s = shape()) {
    $this->last_modified = $last_modified ?? ;
    $this->resource_arn = $resource_arn ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

type ResourceInfoList = vec<ResourceInfo>;

class RevokePermissionsRequest {
  public CatalogIdString $catalog_id;
  public PermissionList $permissions;
  public PermissionList $permissions_with_grant_option;
  public DataLakePrincipal $principal;
  public Resource $resource;

  public function __construct(shape(
  ?'catalog_id' => CatalogIdString,
  ?'permissions' => PermissionList,
  ?'permissions_with_grant_option' => PermissionList,
  ?'principal' => DataLakePrincipal,
  ?'resource' => Resource,
  ) $s = shape()) {
    $this->catalog_id = $catalog_id ?? ;
    $this->permissions = $permissions ?? ;
    $this->permissions_with_grant_option = $permissions_with_grant_option ?? ;
    $this->principal = $principal ?? ;
    $this->resource = $resource ?? null;
  }
}

class RevokePermissionsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type StringValue = string;

type StringValueList = vec<StringValue>;

class TableResource {
  public NameString $database_name;
  public NameString $name;

  public function __construct(shape(
  ?'database_name' => NameString,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->database_name = $database_name ?? ;
    $this->name = $name ?? ;
  }
}

class TableWithColumnsResource {
  public ColumnNames $column_names;
  public ColumnWildcard $column_wildcard;
  public NameString $database_name;
  public NameString $name;

  public function __construct(shape(
  ?'column_names' => ColumnNames,
  ?'column_wildcard' => ColumnWildcard,
  ?'database_name' => NameString,
  ?'name' => NameString,
  ) $s = shape()) {
    $this->column_names = $column_names ?? [];
    $this->column_wildcard = $column_wildcard ?? null;
    $this->database_name = $database_name ?? ;
    $this->name = $name ?? ;
  }
}

type Token = string;

class UpdateResourceRequest {
  public ResourceArnString $resource_arn;
  public IAMRoleArn $role_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArnString,
  ?'role_arn' => IAMRoleArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class UpdateResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

