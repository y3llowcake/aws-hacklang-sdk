<?hh // strict
namespace slack\aws\lakeformation;

interface LakeFormation {
  public function BatchGrantPermissions(BatchGrantPermissionsRequest $in): Awaitable<\Errors\Result<BatchGrantPermissionsResponse>>;
  public function BatchRevokePermissions(BatchRevokePermissionsRequest $in): Awaitable<\Errors\Result<BatchRevokePermissionsResponse>>;
  public function DeregisterResource(DeregisterResourceRequest $in): Awaitable<\Errors\Result<DeregisterResourceResponse>>;
  public function DescribeResource(DescribeResourceRequest $in): Awaitable<\Errors\Result<DescribeResourceResponse>>;
  public function GetDataLakeSettings(GetDataLakeSettingsRequest $in): Awaitable<\Errors\Result<GetDataLakeSettingsResponse>>;
  public function GetEffectivePermissionsForPath(GetEffectivePermissionsForPathRequest $in): Awaitable<\Errors\Result<GetEffectivePermissionsForPathResponse>>;
  public function GrantPermissions(GrantPermissionsRequest $in): Awaitable<\Errors\Result<GrantPermissionsResponse>>;
  public function ListPermissions(ListPermissionsRequest $in): Awaitable<\Errors\Result<ListPermissionsResponse>>;
  public function ListResources(ListResourcesRequest $in): Awaitable<\Errors\Result<ListResourcesResponse>>;
  public function PutDataLakeSettings(PutDataLakeSettingsRequest $in): Awaitable<\Errors\Result<PutDataLakeSettingsResponse>>;
  public function RegisterResource(RegisterResourceRequest $in): Awaitable<\Errors\Result<RegisterResourceResponse>>;
  public function RevokePermissions(RevokePermissionsRequest $in): Awaitable<\Errors\Result<RevokePermissionsResponse>>;
  public function UpdateResource(UpdateResourceRequest $in): Awaitable<\Errors\Result<UpdateResourceResponse>>;
}

class AlreadyExistsException {
  public ?MessageString $message;

  public function __construct(shape(
    ?'message' => ?MessageString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class BatchGrantPermissionsRequest {
  public ?CatalogIdString $catalog_id;
  public ?BatchPermissionsRequestEntryList $entries;

  public function __construct(shape(
    ?'catalog_id' => ?CatalogIdString,
    ?'entries' => ?BatchPermissionsRequestEntryList,
  ) $s = shape()) {
    $this->catalog_id = $s['catalog_id'] ?? '';
    $this->entries = $s['entries'] ?? vec[];
  }
}

class BatchGrantPermissionsResponse {
  public ?BatchPermissionsFailureList $failures;

  public function __construct(shape(
    ?'failures' => ?BatchPermissionsFailureList,
  ) $s = shape()) {
    $this->failures = $s['failures'] ?? vec[];
  }
}

class BatchPermissionsFailureEntry {
  public ?ErrorDetail $error;
  public ?BatchPermissionsRequestEntry $request_entry;

  public function __construct(shape(
    ?'error' => ?ErrorDetail,
    ?'request_entry' => ?BatchPermissionsRequestEntry,
  ) $s = shape()) {
    $this->error = $s['error'] ?? null;
    $this->request_entry = $s['request_entry'] ?? null;
  }
}

type BatchPermissionsFailureList = vec<BatchPermissionsFailureEntry>;

class BatchPermissionsRequestEntry {
  public ?Identifier $id;
  public ?PermissionList $permissions;
  public ?PermissionList $permissions_with_grant_option;
  public ?DataLakePrincipal $principal;
  public ?Resource $resource;

  public function __construct(shape(
    ?'id' => ?Identifier,
    ?'permissions' => ?PermissionList,
    ?'permissions_with_grant_option' => ?PermissionList,
    ?'principal' => ?DataLakePrincipal,
    ?'resource' => ?Resource,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
    $this->permissions_with_grant_option = $s['permissions_with_grant_option'] ?? vec[];
    $this->principal = $s['principal'] ?? null;
    $this->resource = $s['resource'] ?? null;
  }
}

type BatchPermissionsRequestEntryList = vec<BatchPermissionsRequestEntry>;

class BatchRevokePermissionsRequest {
  public ?CatalogIdString $catalog_id;
  public ?BatchPermissionsRequestEntryList $entries;

  public function __construct(shape(
    ?'catalog_id' => ?CatalogIdString,
    ?'entries' => ?BatchPermissionsRequestEntryList,
  ) $s = shape()) {
    $this->catalog_id = $s['catalog_id'] ?? '';
    $this->entries = $s['entries'] ?? vec[];
  }
}

class BatchRevokePermissionsResponse {
  public ?BatchPermissionsFailureList $failures;

  public function __construct(shape(
    ?'failures' => ?BatchPermissionsFailureList,
  ) $s = shape()) {
    $this->failures = $s['failures'] ?? vec[];
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
  public ?ColumnNames $excluded_column_names;

  public function __construct(shape(
    ?'excluded_column_names' => ?ColumnNames,
  ) $s = shape()) {
    $this->excluded_column_names = $s['excluded_column_names'] ?? vec[];
  }
}

type ComparisonOperator = string;

class ConcurrentModificationException {
  public ?MessageString $message;

  public function __construct(shape(
    ?'message' => ?MessageString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DataLakePrincipal {
  public ?DataLakePrincipalString $data_lake_principal_identifier;

  public function __construct(shape(
    ?'data_lake_principal_identifier' => ?DataLakePrincipalString,
  ) $s = shape()) {
    $this->data_lake_principal_identifier = $s['data_lake_principal_identifier'] ?? '';
  }
}

type DataLakePrincipalList = vec<DataLakePrincipal>;

type DataLakePrincipalString = string;

type DataLakeResourceType = string;

class DataLakeSettings {
  public ?PrincipalPermissionsList $create_database_default_permissions;
  public ?PrincipalPermissionsList $create_table_default_permissions;
  public ?DataLakePrincipalList $data_lake_admins;

  public function __construct(shape(
    ?'create_database_default_permissions' => ?PrincipalPermissionsList,
    ?'create_table_default_permissions' => ?PrincipalPermissionsList,
    ?'data_lake_admins' => ?DataLakePrincipalList,
  ) $s = shape()) {
    $this->create_database_default_permissions = $s['create_database_default_permissions'] ?? vec[];
    $this->create_table_default_permissions = $s['create_table_default_permissions'] ?? vec[];
    $this->data_lake_admins = $s['data_lake_admins'] ?? vec[];
  }
}

class DataLocationResource {
  public ?ResourceArnString $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArnString,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class DatabaseResource {
  public ?NameString $name;

  public function __construct(shape(
    ?'name' => ?NameString,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DeregisterResourceRequest {
  public ?ResourceArnString $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArnString,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class DeregisterResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeResourceRequest {
  public ?ResourceArnString $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArnString,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class DescribeResourceResponse {
  public ?ResourceInfo $resource_info;

  public function __construct(shape(
    ?'resource_info' => ?ResourceInfo,
  ) $s = shape()) {
    $this->resource_info = $s['resource_info'] ?? null;
  }
}

type DescriptionString = string;

class EntityNotFoundException {
  public ?MessageString $message;

  public function __construct(shape(
    ?'message' => ?MessageString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ErrorDetail {
  public ?NameString $error_code;
  public ?DescriptionString $error_message;

  public function __construct(shape(
    ?'error_code' => ?NameString,
    ?'error_message' => ?DescriptionString,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
  }
}

type FieldNameString = string;

class FilterCondition {
  public ?ComparisonOperator $comparison_operator;
  public ?FieldNameString $field;
  public ?StringValueList $string_value_list;

  public function __construct(shape(
    ?'comparison_operator' => ?ComparisonOperator,
    ?'field' => ?FieldNameString,
    ?'string_value_list' => ?StringValueList,
  ) $s = shape()) {
    $this->comparison_operator = $s['comparison_operator'] ?? '';
    $this->field = $s['field'] ?? '';
    $this->string_value_list = $s['string_value_list'] ?? vec[];
  }
}

type FilterConditionList = vec<FilterCondition>;

class GetDataLakeSettingsRequest {
  public ?CatalogIdString $catalog_id;

  public function __construct(shape(
    ?'catalog_id' => ?CatalogIdString,
  ) $s = shape()) {
    $this->catalog_id = $s['catalog_id'] ?? '';
  }
}

class GetDataLakeSettingsResponse {
  public ?DataLakeSettings $data_lake_settings;

  public function __construct(shape(
    ?'data_lake_settings' => ?DataLakeSettings,
  ) $s = shape()) {
    $this->data_lake_settings = $s['data_lake_settings'] ?? null;
  }
}

class GetEffectivePermissionsForPathRequest {
  public ?CatalogIdString $catalog_id;
  public ?PageSize $max_results;
  public ?Token $next_token;
  public ?ResourceArnString $resource_arn;

  public function __construct(shape(
    ?'catalog_id' => ?CatalogIdString,
    ?'max_results' => ?PageSize,
    ?'next_token' => ?Token,
    ?'resource_arn' => ?ResourceArnString,
  ) $s = shape()) {
    $this->catalog_id = $s['catalog_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class GetEffectivePermissionsForPathResponse {
  public ?Token $next_token;
  public ?PrincipalResourcePermissionsList $permissions;

  public function __construct(shape(
    ?'next_token' => ?Token,
    ?'permissions' => ?PrincipalResourcePermissionsList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
  }
}

class GrantPermissionsRequest {
  public ?CatalogIdString $catalog_id;
  public ?PermissionList $permissions;
  public ?PermissionList $permissions_with_grant_option;
  public ?DataLakePrincipal $principal;
  public ?Resource $resource;

  public function __construct(shape(
    ?'catalog_id' => ?CatalogIdString,
    ?'permissions' => ?PermissionList,
    ?'permissions_with_grant_option' => ?PermissionList,
    ?'principal' => ?DataLakePrincipal,
    ?'resource' => ?Resource,
  ) $s = shape()) {
    $this->catalog_id = $s['catalog_id'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
    $this->permissions_with_grant_option = $s['permissions_with_grant_option'] ?? vec[];
    $this->principal = $s['principal'] ?? null;
    $this->resource = $s['resource'] ?? null;
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
  public ?MessageString $message;

  public function __construct(shape(
    ?'message' => ?MessageString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidInputException {
  public ?MessageString $message;

  public function __construct(shape(
    ?'message' => ?MessageString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LastModifiedTimestamp = int;

class ListPermissionsRequest {
  public ?CatalogIdString $catalog_id;
  public ?PageSize $max_results;
  public ?Token $next_token;
  public ?DataLakePrincipal $principal;
  public ?Resource $resource;
  public ?DataLakeResourceType $resource_type;

  public function __construct(shape(
    ?'catalog_id' => ?CatalogIdString,
    ?'max_results' => ?PageSize,
    ?'next_token' => ?Token,
    ?'principal' => ?DataLakePrincipal,
    ?'resource' => ?Resource,
    ?'resource_type' => ?DataLakeResourceType,
  ) $s = shape()) {
    $this->catalog_id = $s['catalog_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->principal = $s['principal'] ?? null;
    $this->resource = $s['resource'] ?? null;
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ListPermissionsResponse {
  public ?Token $next_token;
  public ?PrincipalResourcePermissionsList $principal_resource_permissions;

  public function __construct(shape(
    ?'next_token' => ?Token,
    ?'principal_resource_permissions' => ?PrincipalResourcePermissionsList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->principal_resource_permissions = $s['principal_resource_permissions'] ?? vec[];
  }
}

class ListResourcesRequest {
  public ?FilterConditionList $filter_condition_list;
  public ?PageSize $max_results;
  public ?Token $next_token;

  public function __construct(shape(
    ?'filter_condition_list' => ?FilterConditionList,
    ?'max_results' => ?PageSize,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->filter_condition_list = $s['filter_condition_list'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListResourcesResponse {
  public ?Token $next_token;
  public ?ResourceInfoList $resource_info_list;

  public function __construct(shape(
    ?'next_token' => ?Token,
    ?'resource_info_list' => ?ResourceInfoList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_info_list = $s['resource_info_list'] ?? vec[];
  }
}

type MessageString = string;

type NameString = string;

type NullableBoolean = bool;

class OperationTimeoutException {
  public ?MessageString $message;

  public function __construct(shape(
    ?'message' => ?MessageString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PageSize = int;

type Permission = string;

type PermissionList = vec<Permission>;

class PrincipalPermissions {
  public ?PermissionList $permissions;
  public ?DataLakePrincipal $principal;

  public function __construct(shape(
    ?'permissions' => ?PermissionList,
    ?'principal' => ?DataLakePrincipal,
  ) $s = shape()) {
    $this->permissions = $s['permissions'] ?? vec[];
    $this->principal = $s['principal'] ?? null;
  }
}

type PrincipalPermissionsList = vec<PrincipalPermissions>;

class PrincipalResourcePermissions {
  public ?PermissionList $permissions;
  public ?PermissionList $permissions_with_grant_option;
  public ?DataLakePrincipal $principal;
  public ?Resource $resource;

  public function __construct(shape(
    ?'permissions' => ?PermissionList,
    ?'permissions_with_grant_option' => ?PermissionList,
    ?'principal' => ?DataLakePrincipal,
    ?'resource' => ?Resource,
  ) $s = shape()) {
    $this->permissions = $s['permissions'] ?? vec[];
    $this->permissions_with_grant_option = $s['permissions_with_grant_option'] ?? vec[];
    $this->principal = $s['principal'] ?? null;
    $this->resource = $s['resource'] ?? null;
  }
}

type PrincipalResourcePermissionsList = vec<PrincipalResourcePermissions>;

class PutDataLakeSettingsRequest {
  public ?CatalogIdString $catalog_id;
  public ?DataLakeSettings $data_lake_settings;

  public function __construct(shape(
    ?'catalog_id' => ?CatalogIdString,
    ?'data_lake_settings' => ?DataLakeSettings,
  ) $s = shape()) {
    $this->catalog_id = $s['catalog_id'] ?? '';
    $this->data_lake_settings = $s['data_lake_settings'] ?? null;
  }
}

class PutDataLakeSettingsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RegisterResourceRequest {
  public ?ResourceArnString $resource_arn;
  public ?IAMRoleArn $role_arn;
  public ?NullableBoolean $use_service_linked_role;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArnString,
    ?'role_arn' => ?IAMRoleArn,
    ?'use_service_linked_role' => ?NullableBoolean,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->use_service_linked_role = $s['use_service_linked_role'] ?? false;
  }
}

class RegisterResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Resource {
  public ?CatalogResource $catalog;
  public ?DataLocationResource $data_location;
  public ?DatabaseResource $database;
  public ?TableResource $table;
  public ?TableWithColumnsResource $table_with_columns;

  public function __construct(shape(
    ?'catalog' => ?CatalogResource,
    ?'data_location' => ?DataLocationResource,
    ?'database' => ?DatabaseResource,
    ?'table' => ?TableResource,
    ?'table_with_columns' => ?TableWithColumnsResource,
  ) $s = shape()) {
    $this->catalog = $s['catalog'] ?? null;
    $this->data_location = $s['data_location'] ?? null;
    $this->database = $s['database'] ?? null;
    $this->table = $s['table'] ?? null;
    $this->table_with_columns = $s['table_with_columns'] ?? null;
  }
}

type ResourceArnString = string;

class ResourceInfo {
  public ?LastModifiedTimestamp $last_modified;
  public ?ResourceArnString $resource_arn;
  public ?IAMRoleArn $role_arn;

  public function __construct(shape(
    ?'last_modified' => ?LastModifiedTimestamp,
    ?'resource_arn' => ?ResourceArnString,
    ?'role_arn' => ?IAMRoleArn,
  ) $s = shape()) {
    $this->last_modified = $s['last_modified'] ?? 0;
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

type ResourceInfoList = vec<ResourceInfo>;

class RevokePermissionsRequest {
  public ?CatalogIdString $catalog_id;
  public ?PermissionList $permissions;
  public ?PermissionList $permissions_with_grant_option;
  public ?DataLakePrincipal $principal;
  public ?Resource $resource;

  public function __construct(shape(
    ?'catalog_id' => ?CatalogIdString,
    ?'permissions' => ?PermissionList,
    ?'permissions_with_grant_option' => ?PermissionList,
    ?'principal' => ?DataLakePrincipal,
    ?'resource' => ?Resource,
  ) $s = shape()) {
    $this->catalog_id = $s['catalog_id'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
    $this->permissions_with_grant_option = $s['permissions_with_grant_option'] ?? vec[];
    $this->principal = $s['principal'] ?? null;
    $this->resource = $s['resource'] ?? null;
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
  public ?NameString $database_name;
  public ?NameString $name;

  public function __construct(shape(
    ?'database_name' => ?NameString,
    ?'name' => ?NameString,
  ) $s = shape()) {
    $this->database_name = $s['database_name'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class TableWithColumnsResource {
  public ?ColumnNames $column_names;
  public ?ColumnWildcard $column_wildcard;
  public ?NameString $database_name;
  public ?NameString $name;

  public function __construct(shape(
    ?'column_names' => ?ColumnNames,
    ?'column_wildcard' => ?ColumnWildcard,
    ?'database_name' => ?NameString,
    ?'name' => ?NameString,
  ) $s = shape()) {
    $this->column_names = $s['column_names'] ?? vec[];
    $this->column_wildcard = $s['column_wildcard'] ?? null;
    $this->database_name = $s['database_name'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type Token = string;

class UpdateResourceRequest {
  public ?ResourceArnString $resource_arn;
  public ?IAMRoleArn $role_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArnString,
    ?'role_arn' => ?IAMRoleArn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class UpdateResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

