<?hh // strict
namespace slack\aws\schemas;

interface schemas {
  public function CreateDiscoverer(CreateDiscovererRequest) Awaitable<Errors\Result<CreateDiscovererResponse>>;
  public function CreateRegistry(CreateRegistryRequest) Awaitable<Errors\Result<CreateRegistryResponse>>;
  public function CreateSchema(CreateSchemaRequest) Awaitable<Errors\Result<CreateSchemaResponse>>;
  public function DeleteDiscoverer(DeleteDiscovererRequest) Awaitable<Errors\Error>;
  public function DeleteRegistry(DeleteRegistryRequest) Awaitable<Errors\Error>;
  public function DeleteSchema(DeleteSchemaRequest) Awaitable<Errors\Error>;
  public function DeleteSchemaVersion(DeleteSchemaVersionRequest) Awaitable<Errors\Error>;
  public function DescribeCodeBinding(DescribeCodeBindingRequest) Awaitable<Errors\Result<DescribeCodeBindingResponse>>;
  public function DescribeDiscoverer(DescribeDiscovererRequest) Awaitable<Errors\Result<DescribeDiscovererResponse>>;
  public function DescribeRegistry(DescribeRegistryRequest) Awaitable<Errors\Result<DescribeRegistryResponse>>;
  public function DescribeSchema(DescribeSchemaRequest) Awaitable<Errors\Result<DescribeSchemaResponse>>;
  public function GetCodeBindingSource(GetCodeBindingSourceRequest) Awaitable<Errors\Result<GetCodeBindingSourceResponse>>;
  public function GetDiscoveredSchema(GetDiscoveredSchemaRequest) Awaitable<Errors\Result<GetDiscoveredSchemaResponse>>;
  public function ListDiscoverers(ListDiscoverersRequest) Awaitable<Errors\Result<ListDiscoverersResponse>>;
  public function ListRegistries(ListRegistriesRequest) Awaitable<Errors\Result<ListRegistriesResponse>>;
  public function ListSchemaVersions(ListSchemaVersionsRequest) Awaitable<Errors\Result<ListSchemaVersionsResponse>>;
  public function ListSchemas(ListSchemasRequest) Awaitable<Errors\Result<ListSchemasResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function LockServiceLinkedRole(LockServiceLinkedRoleRequest) Awaitable<Errors\Result<LockServiceLinkedRoleResponse>>;
  public function PutCodeBinding(PutCodeBindingRequest) Awaitable<Errors\Result<PutCodeBindingResponse>>;
  public function SearchSchemas(SearchSchemasRequest) Awaitable<Errors\Result<SearchSchemasResponse>>;
  public function StartDiscoverer(StartDiscovererRequest) Awaitable<Errors\Result<StartDiscovererResponse>>;
  public function StopDiscoverer(StopDiscovererRequest) Awaitable<Errors\Result<StopDiscovererResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UnlockServiceLinkedRole(UnlockServiceLinkedRoleRequest) Awaitable<Errors\Result<UnlockServiceLinkedRoleResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateDiscoverer(UpdateDiscovererRequest) Awaitable<Errors\Result<UpdateDiscovererResponse>>;
  public function UpdateRegistry(UpdateRegistryRequest) Awaitable<Errors\Result<UpdateRegistryResponse>>;
  public function UpdateSchema(UpdateSchemaRequest) Awaitable<Errors\Result<UpdateSchemaResponse>>;
}

class BadRequestException {
  public __string $code;
  public __string $message;
}

class Body {
}

class CodeBindingOutput {
  public __timestampIso8601 $creation_date;
  public __timestampIso8601 $last_modified;
  public __string $schema_version;
  public CodeGenerationStatus $status;
}

class CodeGenerationStatus {
}

class ConflictException {
  public __string $code;
  public __string $message;
}

class CreateDiscovererInput {
  public __stringMin0Max256 $description;
  public __stringMin20Max1600 $source_arn;
  public Tags $tags;
}

class CreateDiscovererRequest {
  public __stringMin0Max256 $description;
  public __stringMin20Max1600 $source_arn;
  public Tags $tags;
}

class CreateDiscovererResponse {
  public __string $description;
  public __string $discoverer_arn;
  public __string $discoverer_id;
  public __string $source_arn;
  public DiscovererState $state;
  public Tags $tags;
}

class CreateRegistryInput {
  public __stringMin0Max256 $description;
  public Tags $tags;
}

class CreateRegistryRequest {
  public __stringMin0Max256 $description;
  public __string $registry_name;
  public Tags $tags;
}

class CreateRegistryResponse {
  public __string $description;
  public __string $registry_arn;
  public __string $registry_name;
  public Tags $tags;
}

class CreateSchemaInput {
  public __stringMin1Max100000 $content;
  public __stringMin0Max256 $description;
  public Tags $tags;
  public Type $type;
}

class CreateSchemaRequest {
  public __stringMin1Max100000 $content;
  public __stringMin0Max256 $description;
  public __string $registry_name;
  public __string $schema_name;
  public Tags $tags;
  public Type $type;
}

class CreateSchemaResponse {
  public __string $description;
  public __timestampIso8601 $last_modified;
  public __string $schema_arn;
  public __string $schema_name;
  public __string $schema_version;
  public Tags $tags;
  public __string $type;
  public __timestampIso8601 $version_created_date;
}

class DeleteDiscovererRequest {
  public __string $discoverer_id;
}

class DeleteRegistryRequest {
  public __string $registry_name;
}

class DeleteSchemaRequest {
  public __string $registry_name;
  public __string $schema_name;
}

class DeleteSchemaVersionRequest {
  public __string $registry_name;
  public __string $schema_name;
  public __string $schema_version;
}

class DescribeCodeBindingRequest {
  public __string $language;
  public __string $registry_name;
  public __string $schema_name;
  public __string $schema_version;
}

class DescribeCodeBindingResponse {
  public __timestampIso8601 $creation_date;
  public __timestampIso8601 $last_modified;
  public __string $schema_version;
  public CodeGenerationStatus $status;
}

class DescribeDiscovererRequest {
  public __string $discoverer_id;
}

class DescribeDiscovererResponse {
  public __string $description;
  public __string $discoverer_arn;
  public __string $discoverer_id;
  public __string $source_arn;
  public DiscovererState $state;
  public Tags $tags;
}

class DescribeRegistryRequest {
  public __string $registry_name;
}

class DescribeRegistryResponse {
  public __string $description;
  public __string $registry_arn;
  public __string $registry_name;
  public Tags $tags;
}

class DescribeSchemaOutput {
  public __string $content;
  public __string $description;
  public __timestampIso8601 $last_modified;
  public __string $schema_arn;
  public __string $schema_name;
  public __string $schema_version;
  public Tags $tags;
  public __string $type;
  public __timestampIso8601 $version_created_date;
}

class DescribeSchemaRequest {
  public __string $registry_name;
  public __string $schema_name;
  public __string $schema_version;
}

class DescribeSchemaResponse {
  public __string $content;
  public __string $description;
  public __timestampIso8601 $last_modified;
  public __string $schema_arn;
  public __string $schema_name;
  public __string $schema_version;
  public Tags $tags;
  public __string $type;
  public __timestampIso8601 $version_created_date;
}

class DiscovererOutput {
  public __string $description;
  public __string $discoverer_arn;
  public __string $discoverer_id;
  public __string $source_arn;
  public DiscovererState $state;
  public Tags $tags;
}

class DiscovererState {
}

class DiscovererStateOutput {
  public __string $discoverer_id;
  public DiscovererState $state;
}

class DiscovererSummary {
  public __string $discoverer_arn;
  public __string $discoverer_id;
  public __string $source_arn;
  public DiscovererState $state;
  public Tags $tags;
}

class ErrorOutput {
  public __string $code;
  public __string $message;
}

class ForbiddenException {
  public __string $code;
  public __string $message;
}

class GetCodeBindingSourceOutput {
}

class GetCodeBindingSourceRequest {
  public __string $language;
  public __string $registry_name;
  public __string $schema_name;
  public __string $schema_version;
}

class GetCodeBindingSourceResponse {
  public Body $body;
}

class GetDiscoveredSchemaInput {
  public __listOfGetDiscoveredSchemaVersionItemInput $events;
  public Type $type;
}

class GetDiscoveredSchemaOutput {
  public __string $content;
}

class GetDiscoveredSchemaRequest {
  public __listOfGetDiscoveredSchemaVersionItemInput $events;
  public Type $type;
}

class GetDiscoveredSchemaResponse {
  public __string $content;
}

class GetDiscoveredSchemaVersionItemInput {
}

class GoneException {
  public __string $code;
  public __string $message;
}

class InternalServerErrorException {
  public __string $code;
  public __string $message;
}

class Limit {
}

class ListDiscoverersOutput {
  public __listOfDiscovererSummary $discoverers;
  public __string $next_token;
}

class ListDiscoverersRequest {
  public __string $discoverer_id_prefix;
  public __integer $limit;
  public __string $next_token;
  public __string $source_arn_prefix;
}

class ListDiscoverersResponse {
  public __listOfDiscovererSummary $discoverers;
  public __string $next_token;
}

class ListRegistriesOutput {
  public __string $next_token;
  public __listOfRegistrySummary $registries;
}

class ListRegistriesRequest {
  public __integer $limit;
  public __string $next_token;
  public __string $registry_name_prefix;
  public __string $scope;
}

class ListRegistriesResponse {
  public __string $next_token;
  public __listOfRegistrySummary $registries;
}

class ListSchemaVersionsOutput {
  public __string $next_token;
  public __listOfSchemaVersionSummary $schema_versions;
}

class ListSchemaVersionsRequest {
  public __integer $limit;
  public __string $next_token;
  public __string $registry_name;
  public __string $schema_name;
}

class ListSchemaVersionsResponse {
  public __string $next_token;
  public __listOfSchemaVersionSummary $schema_versions;
}

class ListSchemasOutput {
  public __string $next_token;
  public __listOfSchemaSummary $schemas;
}

class ListSchemasRequest {
  public __integer $limit;
  public __string $next_token;
  public __string $registry_name;
  public __string $schema_name_prefix;
}

class ListSchemasResponse {
  public __string $next_token;
  public __listOfSchemaSummary $schemas;
}

class ListTagsForResourceRequest {
  public __string $resource_arn;
}

class ListTagsForResourceResponse {
  public Tags $tags;
}

class LockServiceLinkedRoleInput {
  public __stringMin1Max1600 $role_arn;
  public __integerMin1Max29000 $timeout;
}

class LockServiceLinkedRoleOutput {
  public __boolean $can_be_deleted;
  public __stringMin1Max1600 $reason_of_failure;
  public __listOfDiscovererSummary $related_resources;
}

class LockServiceLinkedRoleRequest {
  public __stringMin1Max1600 $role_arn;
  public __integerMin1Max29000 $timeout;
}

class LockServiceLinkedRoleResponse {
  public __boolean $can_be_deleted;
  public __stringMin1Max1600 $reason_of_failure;
  public __listOfDiscovererSummary $related_resources;
}

class NotFoundException {
  public __string $code;
  public __string $message;
}

class PutCodeBindingRequest {
  public __string $language;
  public __string $registry_name;
  public __string $schema_name;
  public __string $schema_version;
}

class PutCodeBindingResponse {
  public __timestampIso8601 $creation_date;
  public __timestampIso8601 $last_modified;
  public __string $schema_version;
  public CodeGenerationStatus $status;
}

class RegistryOutput {
  public __string $description;
  public __string $registry_arn;
  public __string $registry_name;
  public Tags $tags;
}

class RegistrySummary {
  public __string $registry_arn;
  public __string $registry_name;
  public Tags $tags;
}

class SchemaOutput {
  public __string $description;
  public __timestampIso8601 $last_modified;
  public __string $schema_arn;
  public __string $schema_name;
  public __string $schema_version;
  public Tags $tags;
  public __string $type;
  public __timestampIso8601 $version_created_date;
}

class SchemaSummary {
  public __timestampIso8601 $last_modified;
  public __string $schema_arn;
  public __string $schema_name;
  public Tags $tags;
  public __long $version_count;
}

class SchemaVersionSummary {
  public __string $schema_arn;
  public __string $schema_name;
  public __string $schema_version;
}

class SearchSchemaSummary {
  public __string $registry_name;
  public __string $schema_arn;
  public __string $schema_name;
  public __listOfSearchSchemaVersionSummary $schema_versions;
}

class SearchSchemaVersionSummary {
  public __timestampIso8601 $created_date;
  public __string $schema_version;
}

class SearchSchemasOutput {
  public __string $next_token;
  public __listOfSearchSchemaSummary $schemas;
}

class SearchSchemasRequest {
  public __string $keywords;
  public __integer $limit;
  public __string $next_token;
  public __string $registry_name;
}

class SearchSchemasResponse {
  public __string $next_token;
  public __listOfSearchSchemaSummary $schemas;
}

class ServiceUnavailableException {
  public __string $code;
  public __string $message;
}

class StartDiscovererRequest {
  public __string $discoverer_id;
}

class StartDiscovererResponse {
  public __string $discoverer_id;
  public DiscovererState $state;
}

class StopDiscovererRequest {
  public __string $discoverer_id;
}

class StopDiscovererResponse {
  public __string $discoverer_id;
  public DiscovererState $state;
}

class TagResourceInput {
  public Tags $tags;
}

class TagResourceRequest {
  public __string $resource_arn;
  public Tags $tags;
}

class Tags {
}

class TooManyRequestsException {
  public __string $code;
  public __string $message;
}

class Type {
}

class UnauthorizedException {
  public __string $code;
  public __string $message;
}

class UnlockServiceLinkedRoleInput {
  public __stringMin1Max1600 $role_arn;
}

class UnlockServiceLinkedRoleRequest {
  public __stringMin1Max1600 $role_arn;
}

class UnlockServiceLinkedRoleResponse {
}

class UntagResourceRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;
}

class UpdateDiscovererInput {
  public __stringMin0Max256 $description;
}

class UpdateDiscovererRequest {
  public __stringMin0Max256 $description;
  public __string $discoverer_id;
}

class UpdateDiscovererResponse {
  public __string $description;
  public __string $discoverer_arn;
  public __string $discoverer_id;
  public __string $source_arn;
  public DiscovererState $state;
  public Tags $tags;
}

class UpdateRegistryInput {
  public __stringMin0Max256 $description;
}

class UpdateRegistryRequest {
  public __stringMin0Max256 $description;
  public __string $registry_name;
}

class UpdateRegistryResponse {
  public __string $description;
  public __string $registry_arn;
  public __string $registry_name;
  public Tags $tags;
}

class UpdateSchemaInput {
  public __stringMin0Max36 $client_token_id;
  public __stringMin1Max100000 $content;
  public __stringMin0Max256 $description;
  public Type $type;
}

class UpdateSchemaRequest {
  public __stringMin0Max36 $client_token_id;
  public __stringMin1Max100000 $content;
  public __stringMin0Max256 $description;
  public __string $registry_name;
  public __string $schema_name;
  public Type $type;
}

class UpdateSchemaResponse {
  public __string $description;
  public __timestampIso8601 $last_modified;
  public __string $schema_arn;
  public __string $schema_name;
  public __string $schema_version;
  public Tags $tags;
  public __string $type;
  public __timestampIso8601 $version_created_date;
}

class __boolean {
}

class __double {
}

class __integer {
}

class __integerMin1Max29000 {
}

class __listOfDiscovererSummary {
}

class __listOfGetDiscoveredSchemaVersionItemInput {
}

class __listOfRegistrySummary {
}

class __listOfSchemaSummary {
}

class __listOfSchemaVersionSummary {
}

class __listOfSearchSchemaSummary {
}

class __listOfSearchSchemaVersionSummary {
}

class __listOf__string {
}

class __long {
}

class __string {
}

class __stringMin0Max256 {
}

class __stringMin0Max36 {
}

class __stringMin1Max100000 {
}

class __stringMin1Max1600 {
}

class __stringMin20Max1600 {
}

class __timestampIso8601 {
}

class __timestampUnix {
}

