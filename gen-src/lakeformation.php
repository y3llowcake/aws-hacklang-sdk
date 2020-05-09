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
}

class BatchGrantPermissionsRequest {
  public CatalogIdString $catalog_id;
  public BatchPermissionsRequestEntryList $entries;
}

class BatchGrantPermissionsResponse {
  public BatchPermissionsFailureList $failures;
}

class BatchPermissionsFailureEntry {
  public ErrorDetail $error;
  public BatchPermissionsRequestEntry $request_entry;
}

class BatchPermissionsFailureList {
}

class BatchPermissionsRequestEntry {
  public Identifier $id;
  public PermissionList $permissions;
  public PermissionList $permissions_with_grant_option;
  public DataLakePrincipal $principal;
  public Resource $resource;
}

class BatchPermissionsRequestEntryList {
}

class BatchRevokePermissionsRequest {
  public CatalogIdString $catalog_id;
  public BatchPermissionsRequestEntryList $entries;
}

class BatchRevokePermissionsResponse {
  public BatchPermissionsFailureList $failures;
}

class CatalogIdString {
}

class CatalogResource {
}

class ColumnNames {
}

class ColumnWildcard {
  public ColumnNames $excluded_column_names;
}

class ComparisonOperator {
}

class ConcurrentModificationException {
  public MessageString $message;
}

class DataLakePrincipal {
  public DataLakePrincipalString $data_lake_principal_identifier;
}

class DataLakePrincipalList {
}

class DataLakePrincipalString {
}

class DataLakeResourceType {
}

class DataLakeSettings {
  public PrincipalPermissionsList $create_database_default_permissions;
  public PrincipalPermissionsList $create_table_default_permissions;
  public DataLakePrincipalList $data_lake_admins;
}

class DataLocationResource {
  public ResourceArnString $resource_arn;
}

class DatabaseResource {
  public NameString $name;
}

class DeregisterResourceRequest {
  public ResourceArnString $resource_arn;
}

class DeregisterResourceResponse {
}

class DescribeResourceRequest {
  public ResourceArnString $resource_arn;
}

class DescribeResourceResponse {
  public ResourceInfo $resource_info;
}

class DescriptionString {
}

class EntityNotFoundException {
  public MessageString $message;
}

class ErrorDetail {
  public NameString $error_code;
  public DescriptionString $error_message;
}

class FieldNameString {
}

class FilterCondition {
  public ComparisonOperator $comparison_operator;
  public FieldNameString $field;
  public StringValueList $string_value_list;
}

class FilterConditionList {
}

class GetDataLakeSettingsRequest {
  public CatalogIdString $catalog_id;
}

class GetDataLakeSettingsResponse {
  public DataLakeSettings $data_lake_settings;
}

class GetEffectivePermissionsForPathRequest {
  public CatalogIdString $catalog_id;
  public PageSize $max_results;
  public Token $next_token;
  public ResourceArnString $resource_arn;
}

class GetEffectivePermissionsForPathResponse {
  public Token $next_token;
  public PrincipalResourcePermissionsList $permissions;
}

class GrantPermissionsRequest {
  public CatalogIdString $catalog_id;
  public PermissionList $permissions;
  public PermissionList $permissions_with_grant_option;
  public DataLakePrincipal $principal;
  public Resource $resource;
}

class GrantPermissionsResponse {
}

class IAMRoleArn {
}

class Identifier {
}

class InternalServiceException {
  public MessageString $message;
}

class InvalidInputException {
  public MessageString $message;
}

class LastModifiedTimestamp {
}

class ListPermissionsRequest {
  public CatalogIdString $catalog_id;
  public PageSize $max_results;
  public Token $next_token;
  public DataLakePrincipal $principal;
  public Resource $resource;
  public DataLakeResourceType $resource_type;
}

class ListPermissionsResponse {
  public Token $next_token;
  public PrincipalResourcePermissionsList $principal_resource_permissions;
}

class ListResourcesRequest {
  public FilterConditionList $filter_condition_list;
  public PageSize $max_results;
  public Token $next_token;
}

class ListResourcesResponse {
  public Token $next_token;
  public ResourceInfoList $resource_info_list;
}

class MessageString {
}

class NameString {
}

class NullableBoolean {
}

class OperationTimeoutException {
  public MessageString $message;
}

class PageSize {
}

class Permission {
}

class PermissionList {
}

class PrincipalPermissions {
  public PermissionList $permissions;
  public DataLakePrincipal $principal;
}

class PrincipalPermissionsList {
}

class PrincipalResourcePermissions {
  public PermissionList $permissions;
  public PermissionList $permissions_with_grant_option;
  public DataLakePrincipal $principal;
  public Resource $resource;
}

class PrincipalResourcePermissionsList {
}

class PutDataLakeSettingsRequest {
  public CatalogIdString $catalog_id;
  public DataLakeSettings $data_lake_settings;
}

class PutDataLakeSettingsResponse {
}

class RegisterResourceRequest {
  public ResourceArnString $resource_arn;
  public IAMRoleArn $role_arn;
  public NullableBoolean $use_service_linked_role;
}

class RegisterResourceResponse {
}

class Resource {
  public CatalogResource $catalog;
  public DataLocationResource $data_location;
  public DatabaseResource $database;
  public TableResource $table;
  public TableWithColumnsResource $table_with_columns;
}

class ResourceArnString {
}

class ResourceInfo {
  public LastModifiedTimestamp $last_modified;
  public ResourceArnString $resource_arn;
  public IAMRoleArn $role_arn;
}

class ResourceInfoList {
}

class RevokePermissionsRequest {
  public CatalogIdString $catalog_id;
  public PermissionList $permissions;
  public PermissionList $permissions_with_grant_option;
  public DataLakePrincipal $principal;
  public Resource $resource;
}

class RevokePermissionsResponse {
}

class StringValue {
}

class StringValueList {
}

class TableResource {
  public NameString $database_name;
  public NameString $name;
}

class TableWithColumnsResource {
  public ColumnNames $column_names;
  public ColumnWildcard $column_wildcard;
  public NameString $database_name;
  public NameString $name;
}

class Token {
}

class UpdateResourceRequest {
  public ResourceArnString $resource_arn;
  public IAMRoleArn $role_arn;
}

class UpdateResourceResponse {
}

