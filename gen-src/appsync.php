<?hh // strict
namespace slack\aws\appsync;

interface AppSync {
  public function CreateApiKey(CreateApiKeyRequest) Awaitable<Errors\Result<CreateApiKeyResponse>>;
  public function DeleteApiCache(DeleteApiCacheRequest) Awaitable<Errors\Result<DeleteApiCacheResponse>>;
  public function ListResolversByFunction(ListResolversByFunctionRequest) Awaitable<Errors\Result<ListResolversByFunctionResponse>>;
  public function UpdateApiKey(UpdateApiKeyRequest) Awaitable<Errors\Result<UpdateApiKeyResponse>>;
  public function CreateFunction(CreateFunctionRequest) Awaitable<Errors\Result<CreateFunctionResponse>>;
  public function GetType(GetTypeRequest) Awaitable<Errors\Result<GetTypeResponse>>;
  public function ListApiKeys(ListApiKeysRequest) Awaitable<Errors\Result<ListApiKeysResponse>>;
  public function ListFunctions(ListFunctionsRequest) Awaitable<Errors\Result<ListFunctionsResponse>>;
  public function UpdateType(UpdateTypeRequest) Awaitable<Errors\Result<UpdateTypeResponse>>;
  public function CreateResolver(CreateResolverRequest) Awaitable<Errors\Result<CreateResolverResponse>>;
  public function DeleteResolver(DeleteResolverRequest) Awaitable<Errors\Result<DeleteResolverResponse>>;
  public function GetGraphqlApi(GetGraphqlApiRequest) Awaitable<Errors\Result<GetGraphqlApiResponse>>;
  public function GetResolver(GetResolverRequest) Awaitable<Errors\Result<GetResolverResponse>>;
  public function ListDataSources(ListDataSourcesRequest) Awaitable<Errors\Result<ListDataSourcesResponse>>;
  public function UpdateApiCache(UpdateApiCacheRequest) Awaitable<Errors\Result<UpdateApiCacheResponse>>;
  public function UpdateFunction(UpdateFunctionRequest) Awaitable<Errors\Result<UpdateFunctionResponse>>;
  public function CreateType(CreateTypeRequest) Awaitable<Errors\Result<CreateTypeResponse>>;
  public function GetDataSource(GetDataSourceRequest) Awaitable<Errors\Result<GetDataSourceResponse>>;
  public function ListResolvers(ListResolversRequest) Awaitable<Errors\Result<ListResolversResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateResolver(UpdateResolverRequest) Awaitable<Errors\Result<UpdateResolverResponse>>;
  public function UpdateGraphqlApi(UpdateGraphqlApiRequest) Awaitable<Errors\Result<UpdateGraphqlApiResponse>>;
  public function CreateDataSource(CreateDataSourceRequest) Awaitable<Errors\Result<CreateDataSourceResponse>>;
  public function CreateGraphqlApi(CreateGraphqlApiRequest) Awaitable<Errors\Result<CreateGraphqlApiResponse>>;
  public function DeleteApiKey(DeleteApiKeyRequest) Awaitable<Errors\Result<DeleteApiKeyResponse>>;
  public function GetApiCache(GetApiCacheRequest) Awaitable<Errors\Result<GetApiCacheResponse>>;
  public function ListGraphqlApis(ListGraphqlApisRequest) Awaitable<Errors\Result<ListGraphqlApisResponse>>;
  public function ListTypes(ListTypesRequest) Awaitable<Errors\Result<ListTypesResponse>>;
  public function UpdateDataSource(UpdateDataSourceRequest) Awaitable<Errors\Result<UpdateDataSourceResponse>>;
  public function CreateApiCache(CreateApiCacheRequest) Awaitable<Errors\Result<CreateApiCacheResponse>>;
  public function DeleteDataSource(DeleteDataSourceRequest) Awaitable<Errors\Result<DeleteDataSourceResponse>>;
  public function DeleteGraphqlApi(DeleteGraphqlApiRequest) Awaitable<Errors\Result<DeleteGraphqlApiResponse>>;
  public function DeleteType(DeleteTypeRequest) Awaitable<Errors\Result<DeleteTypeResponse>>;
  public function DeleteFunction(DeleteFunctionRequest) Awaitable<Errors\Result<DeleteFunctionResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function FlushApiCache(FlushApiCacheRequest) Awaitable<Errors\Result<FlushApiCacheResponse>>;
  public function GetFunction(GetFunctionRequest) Awaitable<Errors\Result<GetFunctionResponse>>;
  public function GetIntrospectionSchema(GetIntrospectionSchemaRequest) Awaitable<Errors\Result<GetIntrospectionSchemaResponse>>;
  public function GetSchemaCreationStatus(GetSchemaCreationStatusRequest) Awaitable<Errors\Result<GetSchemaCreationStatusResponse>>;
  public function StartSchemaCreation(StartSchemaCreationRequest) Awaitable<Errors\Result<StartSchemaCreationResponse>>;
}

class CreateApiCacheResponse {
  public ApiCache $api_cache;
}

class DeleteApiCacheRequest {
  public string $api_id;
}

class ErrorMessage {
}

class ApiCacheType {
}

class LambdaDataSourceConfig {
  public string $lambda_function_arn;
}

class MaxResults {
}

class GetGraphqlApiResponse {
  public GraphqlApi $graphql_api;
}

class InternalFailureException {
  public string $message;
}

class UpdateResolverRequest {
  public ResourceName $data_source_name;
  public PipelineConfig $pipeline_config;
  public SyncConfig $sync_config;
  public string $api_id;
  public ResourceName $field_name;
  public MappingTemplate $response_mapping_template;
  public ResolverKind $kind;
  public CachingConfig $caching_config;
  public ResourceName $type_name;
  public MappingTemplate $request_mapping_template;
}

class CreateApiCacheRequest {
  public ApiCachingBehavior $api_caching_behavior;
  public ApiCacheType $type;
  public string $api_id;
  public Long $ttl;
  public boolean $transit_encryption_enabled;
  public boolean $at_rest_encryption_enabled;
}

class MappingTemplate {
}

class StartSchemaCreationResponse {
  public SchemaStatus $status;
}

class ConflictDetectionType {
}

class FunctionsIds {
}

class GetTypeResponse {
  public Type $type;
}

class SchemaStatus {
}

class CreateDataSourceResponse {
  public DataSource $data_source;
}

class Resolvers {
}

class ListDataSourcesResponse {
  public DataSources $data_sources;
  public PaginationToken $next_token;
}

class GetDataSourceResponse {
  public DataSource $data_source;
}

class UpdateDataSourceRequest {
  public ResourceName $name;
  public DynamodbDataSourceConfig $dynamodb_config;
  public LambdaDataSourceConfig $lambda_config;
  public RelationalDatabaseDataSourceConfig $relational_database_config;
  public string $api_id;
  public string $description;
  public DataSourceType $type;
  public string $service_role_arn;
  public ElasticsearchDataSourceConfig $elasticsearch_config;
  public HttpDataSourceConfig $http_config;
}

class CreateGraphqlApiResponse {
  public GraphqlApi $graphql_api;
}

class AuthenticationType {
}

class CognitoUserPoolConfig {
  public string $user_pool_id;
  public string $aws_region;
  public string $app_id_client_regex;
}

class DeleteGraphqlApiRequest {
  public string $api_id;
}

class ResourceName {
}

class UntagResourceResponse {
}

class ApiLimitExceededException {
  public string $message;
}

class CreateTypeResponse {
  public Type $type;
}

class DeleteApiCacheResponse {
}

class GraphqlApi {
  public UserPoolConfig $user_pool_config;
  public MapOfStringToString $uris;
  public boolean $xray_enabled;
  public LogConfig $log_config;
  public OpenIDConnectConfig $open_id_connect_config;
  public string $arn;
  public TagMap $tags;
  public AdditionalAuthenticationProviders $additional_authentication_providers;
  public ResourceName $name;
  public string $api_id;
  public AuthenticationType $authentication_type;
}

class UpdateGraphqlApiResponse {
  public GraphqlApi $graphql_api;
}

class ApiCache {
  public boolean $at_rest_encryption_enabled;
  public ApiCacheType $type;
  public ApiCacheStatus $status;
  public Long $ttl;
  public ApiCachingBehavior $api_caching_behavior;
  public boolean $transit_encryption_enabled;
}

class ApiCachingBehavior {
}

class ApiKeyValidityOutOfBoundsException {
  public string $message;
}

class ConcurrentModificationException {
  public ErrorMessage $message;
}

class DeleteDataSourceRequest {
  public string $api_id;
  public ResourceName $name;
}

class LimitExceededException {
  public string $message;
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;
}

class RelationalDatabaseSourceType {
}

class ApiCacheStatus {
}

class TagKeyList {
}

class UpdateFunctionResponse {
  public FunctionConfiguration $function_configuration;
}

class SyncConfig {
  public ConflictHandlerType $conflict_handler;
  public ConflictDetectionType $conflict_detection;
  public LambdaConflictHandlerConfig $lambda_conflict_handler_config;
}

class DeleteApiKeyResponse {
}

class DeleteTypeRequest {
  public string $api_id;
  public ResourceName $type_name;
}

class GetTypeRequest {
  public ResourceName $type_name;
  public TypeDefinitionFormat $format;
  public string $api_id;
}

class Long {
}

class RdsHttpEndpointConfig {
  public string $schema;
  public string $aws_secret_store_arn;
  public string $aws_region;
  public string $db_cluster_identifier;
  public string $database_name;
}

class TagMap {
}

class AwsIamConfig {
  public string $signing_region;
  public string $signing_service_name;
}

class Boolean {
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class UpdateDataSourceResponse {
  public DataSource $data_source;
}

class ApiKeyLimitExceededException {
  public string $message;
}

class CachingKeys {
}

class CreateApiKeyRequest {
  public string $api_id;
  public string $description;
  public Long $expires;
}

class CreateResolverRequest {
  public CachingConfig $caching_config;
  public ResourceName $type_name;
  public ResourceName $data_source_name;
  public MappingTemplate $request_mapping_template;
  public MappingTemplate $response_mapping_template;
  public SyncConfig $sync_config;
  public string $api_id;
  public ResourceName $field_name;
  public ResolverKind $kind;
  public PipelineConfig $pipeline_config;
}

class DeleteFunctionResponse {
}

class GetDataSourceRequest {
  public string $api_id;
  public ResourceName $name;
}

class RelationalDatabaseDataSourceConfig {
  public RelationalDatabaseSourceType $relational_database_source_type;
  public RdsHttpEndpointConfig $rds_http_endpoint_config;
}

class TagKey {
}

class ApiKeys {
}

class DefaultAction {
}

class DeleteDataSourceResponse {
}

class PaginationToken {
}

class UpdateFunctionRequest {
  public string $description;
  public ResourceName $function_id;
  public ResourceName $data_source_name;
  public MappingTemplate $request_mapping_template;
  public MappingTemplate $response_mapping_template;
  public string $function_version;
  public string $api_id;
  public ResourceName $name;
}

class ApiKey {
  public Long $expires;
  public string $id;
  public string $description;
}

class GraphQLSchemaException {
  public ErrorMessage $message;
}

class ListApiKeysRequest {
  public string $api_id;
  public PaginationToken $next_token;
  public MaxResults $max_results;
}

class ListFunctionsRequest {
  public string $api_id;
  public PaginationToken $next_token;
  public MaxResults $max_results;
}

class ListGraphqlApisRequest {
  public PaginationToken $next_token;
  public MaxResults $max_results;
}

class UserPoolConfig {
  public string $user_pool_id;
  public string $aws_region;
  public DefaultAction $default_action;
  public string $app_id_client_regex;
}

class AuthorizationType {
}

class BadRequestException {
  public ErrorMessage $message;
}

class GetSchemaCreationStatusRequest {
  public string $api_id;
}

class MapOfStringToString {
}

class OutputType {
}

class UpdateApiCacheRequest {
  public Long $ttl;
  public ApiCachingBehavior $api_caching_behavior;
  public ApiCacheType $type;
  public string $api_id;
}

class AdditionalAuthenticationProviders {
}

class ListFunctionsResponse {
  public Functions $functions;
  public PaginationToken $next_token;
}

class GetIntrospectionSchemaResponse {
  public Blob $schema;
}

class GetResolverResponse {
  public Resolver $resolver;
}

class ListGraphqlApisResponse {
  public GraphqlApis $graphql_apis;
  public PaginationToken $next_token;
}

class NotFoundException {
  public string $message;
}

class UpdateGraphqlApiRequest {
  public string $api_id;
  public string $name;
  public LogConfig $log_config;
  public AuthenticationType $authentication_type;
  public UserPoolConfig $user_pool_config;
  public OpenIDConnectConfig $open_id_connect_config;
  public AdditionalAuthenticationProviders $additional_authentication_providers;
  public boolean $xray_enabled;
}

class CachingConfig {
  public Long $ttl;
  public CachingKeys $caching_keys;
}

class DataSources {
}

class DeleteTypeResponse {
}

class Functions {
}

class LambdaConflictHandlerConfig {
  public string $lambda_conflict_handler_arn;
}

class ListTypesRequest {
  public PaginationToken $next_token;
  public MaxResults $max_results;
  public string $api_id;
  public TypeDefinitionFormat $format;
}

class UpdateTypeRequest {
  public string $api_id;
  public ResourceName $type_name;
  public string $definition;
  public TypeDefinitionFormat $format;
}

class AccessDeniedException {
  public string $message;
}

class GetResolverRequest {
  public string $api_id;
  public ResourceName $type_name;
  public ResourceName $field_name;
}

class ListDataSourcesRequest {
  public string $api_id;
  public PaginationToken $next_token;
  public MaxResults $max_results;
}

class StartSchemaCreationRequest {
  public Blob $definition;
  public string $api_id;
}

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagMap $tags;
}

class UpdateApiCacheResponse {
  public ApiCache $api_cache;
}

class DataSource {
  public string $data_source_arn;
  public DataSourceType $type;
  public string $service_role_arn;
  public DynamodbDataSourceConfig $dynamodb_config;
  public LambdaDataSourceConfig $lambda_config;
  public HttpDataSourceConfig $http_config;
  public RelationalDatabaseDataSourceConfig $relational_database_config;
  public ResourceName $name;
  public string $description;
  public ElasticsearchDataSourceConfig $elasticsearch_config;
}

class CreateDataSourceRequest {
  public string $api_id;
  public ResourceName $name;
  public DataSourceType $type;
  public string $service_role_arn;
  public DynamodbDataSourceConfig $dynamodb_config;
  public ElasticsearchDataSourceConfig $elasticsearch_config;
  public HttpDataSourceConfig $http_config;
  public string $description;
  public LambdaDataSourceConfig $lambda_config;
  public RelationalDatabaseDataSourceConfig $relational_database_config;
}

class DynamodbDataSourceConfig {
  public string $table_name;
  public string $aws_region;
  public boolean $use_caller_credentials;
  public DeltaSyncConfig $delta_sync_config;
  public boolean $versioned;
}

class ResolverKind {
}

class Blob {
}

class GetSchemaCreationStatusResponse {
  public SchemaStatus $status;
  public string $details;
}

class ListApiKeysResponse {
  public PaginationToken $next_token;
  public ApiKeys $api_keys;
}

class OpenIDConnectConfig {
  public string $client_id;
  public Long $iat_ttl;
  public Long $auth_ttl;
  public string $issuer;
}

class DeltaSyncConfig {
  public Long $base_table_ttl;
  public string $delta_sync_table_name;
  public Long $delta_sync_table_ttl;
}

class GetFunctionRequest {
  public string $api_id;
  public ResourceName $function_id;
}

class HttpDataSourceConfig {
  public string $endpoint;
  public AuthorizationConfig $authorization_config;
}

class TagResourceResponse {
}

class TypeDefinitionFormat {
}

class CreateFunctionResponse {
  public FunctionConfiguration $function_configuration;
}

class CreateApiKeyResponse {
  public ApiKey $api_key;
}

class CreateFunctionRequest {
  public ResourceName $data_source_name;
  public MappingTemplate $request_mapping_template;
  public MappingTemplate $response_mapping_template;
  public string $function_version;
  public string $api_id;
  public ResourceName $name;
  public string $description;
}

class GetApiCacheResponse {
  public ApiCache $api_cache;
}

class GetGraphqlApiRequest {
  public string $api_id;
}

class GetIntrospectionSchemaRequest {
  public string $api_id;
  public OutputType $format;
  public BooleanValue $include_directives;
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class BooleanValue {
}

class FunctionConfiguration {
  public string $function_version;
  public string $function_id;
  public string $function_arn;
  public ResourceName $name;
  public string $description;
  public ResourceName $data_source_name;
  public MappingTemplate $request_mapping_template;
  public MappingTemplate $response_mapping_template;
}

class GetApiCacheRequest {
  public string $api_id;
}

class ResourceArn {
}

class String {
}

class TypeList {
}

class UnauthorizedException {
  public string $message;
}

class DeleteResolverResponse {
}

class CreateResolverResponse {
  public Resolver $resolver;
}

class ListResolversByFunctionRequest {
  public MaxResults $max_results;
  public string $api_id;
  public string $function_id;
  public PaginationToken $next_token;
}

class LogConfig {
  public FieldLogLevel $field_log_level;
  public string $cloud_watch_logs_role_arn;
  public boolean $exclude_verbose_content;
}

class TagValue {
}

class CreateGraphqlApiRequest {
  public LogConfig $log_config;
  public AuthenticationType $authentication_type;
  public UserPoolConfig $user_pool_config;
  public OpenIDConnectConfig $open_id_connect_config;
  public TagMap $tags;
  public AdditionalAuthenticationProviders $additional_authentication_providers;
  public boolean $xray_enabled;
  public string $name;
}

class GraphqlApis {
}

class UpdateApiKeyRequest {
  public string $api_id;
  public string $id;
  public string $description;
  public Long $expires;
}

class UpdateApiKeyResponse {
  public ApiKey $api_key;
}

class UpdateResolverResponse {
  public Resolver $resolver;
}

class FieldLogLevel {
}

class DeleteGraphqlApiResponse {
}

class FlushApiCacheResponse {
}

class ListResolversResponse {
  public Resolvers $resolvers;
  public PaginationToken $next_token;
}

class Type {
  public ResourceName $name;
  public string $description;
  public string $arn;
  public string $definition;
  public TypeDefinitionFormat $format;
}

class DeleteApiKeyRequest {
  public string $api_id;
  public string $id;
}

class CreateTypeRequest {
  public string $api_id;
  public string $definition;
  public TypeDefinitionFormat $format;
}

class DeleteFunctionRequest {
  public string $api_id;
  public ResourceName $function_id;
}

class DeleteResolverRequest {
  public ResourceName $field_name;
  public string $api_id;
  public ResourceName $type_name;
}

class ElasticsearchDataSourceConfig {
  public string $endpoint;
  public string $aws_region;
}

class GetFunctionResponse {
  public FunctionConfiguration $function_configuration;
}

class ListTypesResponse {
  public TypeList $types;
  public PaginationToken $next_token;
}

class ConflictHandlerType {
}

class DataSourceType {
}

class ListResolversByFunctionResponse {
  public Resolvers $resolvers;
  public PaginationToken $next_token;
}

class PipelineConfig {
  public FunctionsIds $functions;
}

class Resolver {
  public ResourceName $type_name;
  public string $resolver_arn;
  public MappingTemplate $response_mapping_template;
  public ResolverKind $kind;
  public PipelineConfig $pipeline_config;
  public SyncConfig $sync_config;
  public ResourceName $field_name;
  public ResourceName $data_source_name;
  public MappingTemplate $request_mapping_template;
  public CachingConfig $caching_config;
}

class AuthorizationConfig {
  public AuthorizationType $authorization_type;
  public AwsIamConfig $aws_iam_config;
}

class FlushApiCacheRequest {
  public string $api_id;
}

class ListResolversRequest {
  public string $type_name;
  public PaginationToken $next_token;
  public MaxResults $max_results;
  public string $api_id;
}

class UpdateTypeResponse {
  public Type $type;
}

class AdditionalAuthenticationProvider {
  public OpenIDConnectConfig $open_id_connect_config;
  public CognitoUserPoolConfig $user_pool_config;
  public AuthenticationType $authentication_type;
}

