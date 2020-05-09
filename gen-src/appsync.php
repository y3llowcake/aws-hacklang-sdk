<?hh // strict
namespace slack\aws\appsync;

interface AppSync {
  public function CreateApiCache(CreateApiCacheRequest) Awaitable<Errors\Result<CreateApiCacheResponse>>;
  public function CreateApiKey(CreateApiKeyRequest) Awaitable<Errors\Result<CreateApiKeyResponse>>;
  public function CreateDataSource(CreateDataSourceRequest) Awaitable<Errors\Result<CreateDataSourceResponse>>;
  public function CreateFunction(CreateFunctionRequest) Awaitable<Errors\Result<CreateFunctionResponse>>;
  public function CreateGraphqlApi(CreateGraphqlApiRequest) Awaitable<Errors\Result<CreateGraphqlApiResponse>>;
  public function CreateResolver(CreateResolverRequest) Awaitable<Errors\Result<CreateResolverResponse>>;
  public function CreateType(CreateTypeRequest) Awaitable<Errors\Result<CreateTypeResponse>>;
  public function DeleteApiCache(DeleteApiCacheRequest) Awaitable<Errors\Result<DeleteApiCacheResponse>>;
  public function DeleteApiKey(DeleteApiKeyRequest) Awaitable<Errors\Result<DeleteApiKeyResponse>>;
  public function DeleteDataSource(DeleteDataSourceRequest) Awaitable<Errors\Result<DeleteDataSourceResponse>>;
  public function DeleteFunction(DeleteFunctionRequest) Awaitable<Errors\Result<DeleteFunctionResponse>>;
  public function DeleteGraphqlApi(DeleteGraphqlApiRequest) Awaitable<Errors\Result<DeleteGraphqlApiResponse>>;
  public function DeleteResolver(DeleteResolverRequest) Awaitable<Errors\Result<DeleteResolverResponse>>;
  public function DeleteType(DeleteTypeRequest) Awaitable<Errors\Result<DeleteTypeResponse>>;
  public function FlushApiCache(FlushApiCacheRequest) Awaitable<Errors\Result<FlushApiCacheResponse>>;
  public function GetApiCache(GetApiCacheRequest) Awaitable<Errors\Result<GetApiCacheResponse>>;
  public function GetDataSource(GetDataSourceRequest) Awaitable<Errors\Result<GetDataSourceResponse>>;
  public function GetFunction(GetFunctionRequest) Awaitable<Errors\Result<GetFunctionResponse>>;
  public function GetGraphqlApi(GetGraphqlApiRequest) Awaitable<Errors\Result<GetGraphqlApiResponse>>;
  public function GetIntrospectionSchema(GetIntrospectionSchemaRequest) Awaitable<Errors\Result<GetIntrospectionSchemaResponse>>;
  public function GetResolver(GetResolverRequest) Awaitable<Errors\Result<GetResolverResponse>>;
  public function GetSchemaCreationStatus(GetSchemaCreationStatusRequest) Awaitable<Errors\Result<GetSchemaCreationStatusResponse>>;
  public function GetType(GetTypeRequest) Awaitable<Errors\Result<GetTypeResponse>>;
  public function ListApiKeys(ListApiKeysRequest) Awaitable<Errors\Result<ListApiKeysResponse>>;
  public function ListDataSources(ListDataSourcesRequest) Awaitable<Errors\Result<ListDataSourcesResponse>>;
  public function ListFunctions(ListFunctionsRequest) Awaitable<Errors\Result<ListFunctionsResponse>>;
  public function ListGraphqlApis(ListGraphqlApisRequest) Awaitable<Errors\Result<ListGraphqlApisResponse>>;
  public function ListResolvers(ListResolversRequest) Awaitable<Errors\Result<ListResolversResponse>>;
  public function ListResolversByFunction(ListResolversByFunctionRequest) Awaitable<Errors\Result<ListResolversByFunctionResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTypes(ListTypesRequest) Awaitable<Errors\Result<ListTypesResponse>>;
  public function StartSchemaCreation(StartSchemaCreationRequest) Awaitable<Errors\Result<StartSchemaCreationResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateApiCache(UpdateApiCacheRequest) Awaitable<Errors\Result<UpdateApiCacheResponse>>;
  public function UpdateApiKey(UpdateApiKeyRequest) Awaitable<Errors\Result<UpdateApiKeyResponse>>;
  public function UpdateDataSource(UpdateDataSourceRequest) Awaitable<Errors\Result<UpdateDataSourceResponse>>;
  public function UpdateFunction(UpdateFunctionRequest) Awaitable<Errors\Result<UpdateFunctionResponse>>;
  public function UpdateGraphqlApi(UpdateGraphqlApiRequest) Awaitable<Errors\Result<UpdateGraphqlApiResponse>>;
  public function UpdateResolver(UpdateResolverRequest) Awaitable<Errors\Result<UpdateResolverResponse>>;
  public function UpdateType(UpdateTypeRequest) Awaitable<Errors\Result<UpdateTypeResponse>>;
}

class AccessDeniedException {
  public string $message;
}

class AdditionalAuthenticationProvider {
  public AuthenticationType $authentication_type;
  public OpenIDConnectConfig $open_id_connect_config;
  public CognitoUserPoolConfig $user_pool_config;
}

class AdditionalAuthenticationProviders {
}

class ApiCache {
  public ApiCachingBehavior $api_caching_behavior;
  public boolean $at_rest_encryption_enabled;
  public ApiCacheStatus $status;
  public boolean $transit_encryption_enabled;
  public Long $ttl;
  public ApiCacheType $type;
}

class ApiCacheStatus {
}

class ApiCacheType {
}

class ApiCachingBehavior {
}

class ApiKey {
  public string $description;
  public Long $expires;
  public string $id;
}

class ApiKeyLimitExceededException {
  public string $message;
}

class ApiKeyValidityOutOfBoundsException {
  public string $message;
}

class ApiKeys {
}

class ApiLimitExceededException {
  public string $message;
}

class AuthenticationType {
}

class AuthorizationConfig {
  public AuthorizationType $authorization_type;
  public AwsIamConfig $aws_iam_config;
}

class AuthorizationType {
}

class AwsIamConfig {
  public string $signing_region;
  public string $signing_service_name;
}

class BadRequestException {
  public ErrorMessage $message;
}

class Blob {
}

class Boolean {
}

class BooleanValue {
}

class CachingConfig {
  public CachingKeys $caching_keys;
  public Long $ttl;
}

class CachingKeys {
}

class CognitoUserPoolConfig {
  public string $app_id_client_regex;
  public string $aws_region;
  public string $user_pool_id;
}

class ConcurrentModificationException {
  public ErrorMessage $message;
}

class ConflictDetectionType {
}

class ConflictHandlerType {
}

class CreateApiCacheRequest {
  public ApiCachingBehavior $api_caching_behavior;
  public string $api_id;
  public boolean $at_rest_encryption_enabled;
  public boolean $transit_encryption_enabled;
  public Long $ttl;
  public ApiCacheType $type;
}

class CreateApiCacheResponse {
  public ApiCache $api_cache;
}

class CreateApiKeyRequest {
  public string $api_id;
  public string $description;
  public Long $expires;
}

class CreateApiKeyResponse {
  public ApiKey $api_key;
}

class CreateDataSourceRequest {
  public string $api_id;
  public string $description;
  public DynamodbDataSourceConfig $dynamodb_config;
  public ElasticsearchDataSourceConfig $elasticsearch_config;
  public HttpDataSourceConfig $http_config;
  public LambdaDataSourceConfig $lambda_config;
  public ResourceName $name;
  public RelationalDatabaseDataSourceConfig $relational_database_config;
  public string $service_role_arn;
  public DataSourceType $type;
}

class CreateDataSourceResponse {
  public DataSource $data_source;
}

class CreateFunctionRequest {
  public string $api_id;
  public ResourceName $data_source_name;
  public string $description;
  public string $function_version;
  public ResourceName $name;
  public MappingTemplate $request_mapping_template;
  public MappingTemplate $response_mapping_template;
}

class CreateFunctionResponse {
  public FunctionConfiguration $function_configuration;
}

class CreateGraphqlApiRequest {
  public AdditionalAuthenticationProviders $additional_authentication_providers;
  public AuthenticationType $authentication_type;
  public LogConfig $log_config;
  public string $name;
  public OpenIDConnectConfig $open_id_connect_config;
  public TagMap $tags;
  public UserPoolConfig $user_pool_config;
  public boolean $xray_enabled;
}

class CreateGraphqlApiResponse {
  public GraphqlApi $graphql_api;
}

class CreateResolverRequest {
  public string $api_id;
  public CachingConfig $caching_config;
  public ResourceName $data_source_name;
  public ResourceName $field_name;
  public ResolverKind $kind;
  public PipelineConfig $pipeline_config;
  public MappingTemplate $request_mapping_template;
  public MappingTemplate $response_mapping_template;
  public SyncConfig $sync_config;
  public ResourceName $type_name;
}

class CreateResolverResponse {
  public Resolver $resolver;
}

class CreateTypeRequest {
  public string $api_id;
  public string $definition;
  public TypeDefinitionFormat $format;
}

class CreateTypeResponse {
  public Type $type;
}

class DataSource {
  public string $data_source_arn;
  public string $description;
  public DynamodbDataSourceConfig $dynamodb_config;
  public ElasticsearchDataSourceConfig $elasticsearch_config;
  public HttpDataSourceConfig $http_config;
  public LambdaDataSourceConfig $lambda_config;
  public ResourceName $name;
  public RelationalDatabaseDataSourceConfig $relational_database_config;
  public string $service_role_arn;
  public DataSourceType $type;
}

class DataSourceType {
}

class DataSources {
}

class DefaultAction {
}

class DeleteApiCacheRequest {
  public string $api_id;
}

class DeleteApiCacheResponse {
}

class DeleteApiKeyRequest {
  public string $api_id;
  public string $id;
}

class DeleteApiKeyResponse {
}

class DeleteDataSourceRequest {
  public string $api_id;
  public ResourceName $name;
}

class DeleteDataSourceResponse {
}

class DeleteFunctionRequest {
  public string $api_id;
  public ResourceName $function_id;
}

class DeleteFunctionResponse {
}

class DeleteGraphqlApiRequest {
  public string $api_id;
}

class DeleteGraphqlApiResponse {
}

class DeleteResolverRequest {
  public string $api_id;
  public ResourceName $field_name;
  public ResourceName $type_name;
}

class DeleteResolverResponse {
}

class DeleteTypeRequest {
  public string $api_id;
  public ResourceName $type_name;
}

class DeleteTypeResponse {
}

class DeltaSyncConfig {
  public Long $base_table_ttl;
  public string $delta_sync_table_name;
  public Long $delta_sync_table_ttl;
}

class DynamodbDataSourceConfig {
  public string $aws_region;
  public DeltaSyncConfig $delta_sync_config;
  public string $table_name;
  public boolean $use_caller_credentials;
  public boolean $versioned;
}

class ElasticsearchDataSourceConfig {
  public string $aws_region;
  public string $endpoint;
}

class ErrorMessage {
}

class FieldLogLevel {
}

class FlushApiCacheRequest {
  public string $api_id;
}

class FlushApiCacheResponse {
}

class FunctionConfiguration {
  public ResourceName $data_source_name;
  public string $description;
  public string $function_arn;
  public string $function_id;
  public string $function_version;
  public ResourceName $name;
  public MappingTemplate $request_mapping_template;
  public MappingTemplate $response_mapping_template;
}

class Functions {
}

class FunctionsIds {
}

class GetApiCacheRequest {
  public string $api_id;
}

class GetApiCacheResponse {
  public ApiCache $api_cache;
}

class GetDataSourceRequest {
  public string $api_id;
  public ResourceName $name;
}

class GetDataSourceResponse {
  public DataSource $data_source;
}

class GetFunctionRequest {
  public string $api_id;
  public ResourceName $function_id;
}

class GetFunctionResponse {
  public FunctionConfiguration $function_configuration;
}

class GetGraphqlApiRequest {
  public string $api_id;
}

class GetGraphqlApiResponse {
  public GraphqlApi $graphql_api;
}

class GetIntrospectionSchemaRequest {
  public string $api_id;
  public OutputType $format;
  public BooleanValue $include_directives;
}

class GetIntrospectionSchemaResponse {
  public Blob $schema;
}

class GetResolverRequest {
  public string $api_id;
  public ResourceName $field_name;
  public ResourceName $type_name;
}

class GetResolverResponse {
  public Resolver $resolver;
}

class GetSchemaCreationStatusRequest {
  public string $api_id;
}

class GetSchemaCreationStatusResponse {
  public string $details;
  public SchemaStatus $status;
}

class GetTypeRequest {
  public string $api_id;
  public TypeDefinitionFormat $format;
  public ResourceName $type_name;
}

class GetTypeResponse {
  public Type $type;
}

class GraphQLSchemaException {
  public ErrorMessage $message;
}

class GraphqlApi {
  public AdditionalAuthenticationProviders $additional_authentication_providers;
  public string $api_id;
  public string $arn;
  public AuthenticationType $authentication_type;
  public LogConfig $log_config;
  public ResourceName $name;
  public OpenIDConnectConfig $open_id_connect_config;
  public TagMap $tags;
  public MapOfStringToString $uris;
  public UserPoolConfig $user_pool_config;
  public boolean $xray_enabled;
}

class GraphqlApis {
}

class HttpDataSourceConfig {
  public AuthorizationConfig $authorization_config;
  public string $endpoint;
}

class InternalFailureException {
  public string $message;
}

class LambdaConflictHandlerConfig {
  public string $lambda_conflict_handler_arn;
}

class LambdaDataSourceConfig {
  public string $lambda_function_arn;
}

class LimitExceededException {
  public string $message;
}

class ListApiKeysRequest {
  public string $api_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListApiKeysResponse {
  public ApiKeys $api_keys;
  public PaginationToken $next_token;
}

class ListDataSourcesRequest {
  public string $api_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListDataSourcesResponse {
  public DataSources $data_sources;
  public PaginationToken $next_token;
}

class ListFunctionsRequest {
  public string $api_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListFunctionsResponse {
  public Functions $functions;
  public PaginationToken $next_token;
}

class ListGraphqlApisRequest {
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListGraphqlApisResponse {
  public GraphqlApis $graphql_apis;
  public PaginationToken $next_token;
}

class ListResolversByFunctionRequest {
  public string $api_id;
  public string $function_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListResolversByFunctionResponse {
  public PaginationToken $next_token;
  public Resolvers $resolvers;
}

class ListResolversRequest {
  public string $api_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public string $type_name;
}

class ListResolversResponse {
  public PaginationToken $next_token;
  public Resolvers $resolvers;
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class ListTypesRequest {
  public string $api_id;
  public TypeDefinitionFormat $format;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListTypesResponse {
  public PaginationToken $next_token;
  public TypeList $types;
}

class LogConfig {
  public string $cloud_watch_logs_role_arn;
  public boolean $exclude_verbose_content;
  public FieldLogLevel $field_log_level;
}

class Long {
}

class MapOfStringToString {
}

class MappingTemplate {
}

class MaxResults {
}

class NotFoundException {
  public string $message;
}

class OpenIDConnectConfig {
  public Long $auth_ttl;
  public string $client_id;
  public Long $iat_ttl;
  public string $issuer;
}

class OutputType {
}

class PaginationToken {
}

class PipelineConfig {
  public FunctionsIds $functions;
}

class RdsHttpEndpointConfig {
  public string $aws_region;
  public string $aws_secret_store_arn;
  public string $database_name;
  public string $db_cluster_identifier;
  public string $schema;
}

class RelationalDatabaseDataSourceConfig {
  public RdsHttpEndpointConfig $rds_http_endpoint_config;
  public RelationalDatabaseSourceType $relational_database_source_type;
}

class RelationalDatabaseSourceType {
}

class Resolver {
  public CachingConfig $caching_config;
  public ResourceName $data_source_name;
  public ResourceName $field_name;
  public ResolverKind $kind;
  public PipelineConfig $pipeline_config;
  public MappingTemplate $request_mapping_template;
  public string $resolver_arn;
  public MappingTemplate $response_mapping_template;
  public SyncConfig $sync_config;
  public ResourceName $type_name;
}

class ResolverKind {
}

class Resolvers {
}

class ResourceArn {
}

class ResourceName {
}

class SchemaStatus {
}

class StartSchemaCreationRequest {
  public string $api_id;
  public Blob $definition;
}

class StartSchemaCreationResponse {
  public SchemaStatus $status;
}

class String {
}

class SyncConfig {
  public ConflictDetectionType $conflict_detection;
  public ConflictHandlerType $conflict_handler;
  public LambdaConflictHandlerConfig $lambda_conflict_handler_config;
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagMap $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Type {
  public string $arn;
  public string $definition;
  public string $description;
  public TypeDefinitionFormat $format;
  public ResourceName $name;
}

class TypeDefinitionFormat {
}

class TypeList {
}

class UnauthorizedException {
  public string $message;
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateApiCacheRequest {
  public ApiCachingBehavior $api_caching_behavior;
  public string $api_id;
  public Long $ttl;
  public ApiCacheType $type;
}

class UpdateApiCacheResponse {
  public ApiCache $api_cache;
}

class UpdateApiKeyRequest {
  public string $api_id;
  public string $description;
  public Long $expires;
  public string $id;
}

class UpdateApiKeyResponse {
  public ApiKey $api_key;
}

class UpdateDataSourceRequest {
  public string $api_id;
  public string $description;
  public DynamodbDataSourceConfig $dynamodb_config;
  public ElasticsearchDataSourceConfig $elasticsearch_config;
  public HttpDataSourceConfig $http_config;
  public LambdaDataSourceConfig $lambda_config;
  public ResourceName $name;
  public RelationalDatabaseDataSourceConfig $relational_database_config;
  public string $service_role_arn;
  public DataSourceType $type;
}

class UpdateDataSourceResponse {
  public DataSource $data_source;
}

class UpdateFunctionRequest {
  public string $api_id;
  public ResourceName $data_source_name;
  public string $description;
  public ResourceName $function_id;
  public string $function_version;
  public ResourceName $name;
  public MappingTemplate $request_mapping_template;
  public MappingTemplate $response_mapping_template;
}

class UpdateFunctionResponse {
  public FunctionConfiguration $function_configuration;
}

class UpdateGraphqlApiRequest {
  public AdditionalAuthenticationProviders $additional_authentication_providers;
  public string $api_id;
  public AuthenticationType $authentication_type;
  public LogConfig $log_config;
  public string $name;
  public OpenIDConnectConfig $open_id_connect_config;
  public UserPoolConfig $user_pool_config;
  public boolean $xray_enabled;
}

class UpdateGraphqlApiResponse {
  public GraphqlApi $graphql_api;
}

class UpdateResolverRequest {
  public string $api_id;
  public CachingConfig $caching_config;
  public ResourceName $data_source_name;
  public ResourceName $field_name;
  public ResolverKind $kind;
  public PipelineConfig $pipeline_config;
  public MappingTemplate $request_mapping_template;
  public MappingTemplate $response_mapping_template;
  public SyncConfig $sync_config;
  public ResourceName $type_name;
}

class UpdateResolverResponse {
  public Resolver $resolver;
}

class UpdateTypeRequest {
  public string $api_id;
  public string $definition;
  public TypeDefinitionFormat $format;
  public ResourceName $type_name;
}

class UpdateTypeResponse {
  public Type $type;
}

class UserPoolConfig {
  public string $app_id_client_regex;
  public string $aws_region;
  public DefaultAction $default_action;
  public string $user_pool_id;
}

