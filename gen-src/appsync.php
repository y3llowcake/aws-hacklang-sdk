<?hh // strict
namespace slack\aws\appsync;

interface AppSync {
  public function CreateApiCache(CreateApiCacheRequest): Awaitable<Errors\Result<CreateApiCacheResponse>>;
  public function CreateApiKey(CreateApiKeyRequest): Awaitable<Errors\Result<CreateApiKeyResponse>>;
  public function CreateDataSource(CreateDataSourceRequest): Awaitable<Errors\Result<CreateDataSourceResponse>>;
  public function CreateFunction(CreateFunctionRequest): Awaitable<Errors\Result<CreateFunctionResponse>>;
  public function CreateGraphqlApi(CreateGraphqlApiRequest): Awaitable<Errors\Result<CreateGraphqlApiResponse>>;
  public function CreateResolver(CreateResolverRequest): Awaitable<Errors\Result<CreateResolverResponse>>;
  public function CreateType(CreateTypeRequest): Awaitable<Errors\Result<CreateTypeResponse>>;
  public function DeleteApiCache(DeleteApiCacheRequest): Awaitable<Errors\Result<DeleteApiCacheResponse>>;
  public function DeleteApiKey(DeleteApiKeyRequest): Awaitable<Errors\Result<DeleteApiKeyResponse>>;
  public function DeleteDataSource(DeleteDataSourceRequest): Awaitable<Errors\Result<DeleteDataSourceResponse>>;
  public function DeleteFunction(DeleteFunctionRequest): Awaitable<Errors\Result<DeleteFunctionResponse>>;
  public function DeleteGraphqlApi(DeleteGraphqlApiRequest): Awaitable<Errors\Result<DeleteGraphqlApiResponse>>;
  public function DeleteResolver(DeleteResolverRequest): Awaitable<Errors\Result<DeleteResolverResponse>>;
  public function DeleteType(DeleteTypeRequest): Awaitable<Errors\Result<DeleteTypeResponse>>;
  public function FlushApiCache(FlushApiCacheRequest): Awaitable<Errors\Result<FlushApiCacheResponse>>;
  public function GetApiCache(GetApiCacheRequest): Awaitable<Errors\Result<GetApiCacheResponse>>;
  public function GetDataSource(GetDataSourceRequest): Awaitable<Errors\Result<GetDataSourceResponse>>;
  public function GetFunction(GetFunctionRequest): Awaitable<Errors\Result<GetFunctionResponse>>;
  public function GetGraphqlApi(GetGraphqlApiRequest): Awaitable<Errors\Result<GetGraphqlApiResponse>>;
  public function GetIntrospectionSchema(GetIntrospectionSchemaRequest): Awaitable<Errors\Result<GetIntrospectionSchemaResponse>>;
  public function GetResolver(GetResolverRequest): Awaitable<Errors\Result<GetResolverResponse>>;
  public function GetSchemaCreationStatus(GetSchemaCreationStatusRequest): Awaitable<Errors\Result<GetSchemaCreationStatusResponse>>;
  public function GetType(GetTypeRequest): Awaitable<Errors\Result<GetTypeResponse>>;
  public function ListApiKeys(ListApiKeysRequest): Awaitable<Errors\Result<ListApiKeysResponse>>;
  public function ListDataSources(ListDataSourcesRequest): Awaitable<Errors\Result<ListDataSourcesResponse>>;
  public function ListFunctions(ListFunctionsRequest): Awaitable<Errors\Result<ListFunctionsResponse>>;
  public function ListGraphqlApis(ListGraphqlApisRequest): Awaitable<Errors\Result<ListGraphqlApisResponse>>;
  public function ListResolvers(ListResolversRequest): Awaitable<Errors\Result<ListResolversResponse>>;
  public function ListResolversByFunction(ListResolversByFunctionRequest): Awaitable<Errors\Result<ListResolversByFunctionResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTypes(ListTypesRequest): Awaitable<Errors\Result<ListTypesResponse>>;
  public function StartSchemaCreation(StartSchemaCreationRequest): Awaitable<Errors\Result<StartSchemaCreationResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateApiCache(UpdateApiCacheRequest): Awaitable<Errors\Result<UpdateApiCacheResponse>>;
  public function UpdateApiKey(UpdateApiKeyRequest): Awaitable<Errors\Result<UpdateApiKeyResponse>>;
  public function UpdateDataSource(UpdateDataSourceRequest): Awaitable<Errors\Result<UpdateDataSourceResponse>>;
  public function UpdateFunction(UpdateFunctionRequest): Awaitable<Errors\Result<UpdateFunctionResponse>>;
  public function UpdateGraphqlApi(UpdateGraphqlApiRequest): Awaitable<Errors\Result<UpdateGraphqlApiResponse>>;
  public function UpdateResolver(UpdateResolverRequest): Awaitable<Errors\Result<UpdateResolverResponse>>;
  public function UpdateType(UpdateTypeRequest): Awaitable<Errors\Result<UpdateTypeResponse>>;
}

class AccessDeniedException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class AdditionalAuthenticationProvider {
  public AuthenticationType $authentication_type;
  public OpenIDConnectConfig $open_id_connect_config;
  public CognitoUserPoolConfig $user_pool_config;

  public function __construct(shape(
  ?'authentication_type' => AuthenticationType,
  ?'open_id_connect_config' => OpenIDConnectConfig,
  ?'user_pool_config' => CognitoUserPoolConfig,
  ) $s = shape()) {
    $this->authentication_type = $authentication_type ?? "";
    $this->open_id_connect_config = $open_id_connect_config ?? null;
    $this->user_pool_config = $user_pool_config ?? null;
  }
}

type AdditionalAuthenticationProviders = vec<AdditionalAuthenticationProvider>;

class ApiCache {
  public ApiCachingBehavior $api_caching_behavior;
  public boolean $at_rest_encryption_enabled;
  public ApiCacheStatus $status;
  public boolean $transit_encryption_enabled;
  public Long $ttl;
  public ApiCacheType $type;

  public function __construct(shape(
  ?'api_caching_behavior' => ApiCachingBehavior,
  ?'at_rest_encryption_enabled' => boolean,
  ?'status' => ApiCacheStatus,
  ?'transit_encryption_enabled' => boolean,
  ?'ttl' => Long,
  ?'type' => ApiCacheType,
  ) $s = shape()) {
    $this->api_caching_behavior = $api_caching_behavior ?? "";
    $this->at_rest_encryption_enabled = $at_rest_encryption_enabled ?? false;
    $this->status = $status ?? "";
    $this->transit_encryption_enabled = $transit_encryption_enabled ?? false;
    $this->ttl = $ttl ?? 0;
    $this->type = $type ?? "";
  }
}

type ApiCacheStatus = string;

type ApiCacheType = string;

type ApiCachingBehavior = string;

class ApiKey {
  public string $description;
  public Long $expires;
  public string $id;

  public function __construct(shape(
  ?'description' => string,
  ?'expires' => Long,
  ?'id' => string,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->expires = $expires ?? 0;
    $this->id = $id ?? "";
  }
}

class ApiKeyLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ApiKeyValidityOutOfBoundsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ApiKeys = vec<ApiKey>;

class ApiLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type AuthenticationType = string;

class AuthorizationConfig {
  public AuthorizationType $authorization_type;
  public AwsIamConfig $aws_iam_config;

  public function __construct(shape(
  ?'authorization_type' => AuthorizationType,
  ?'aws_iam_config' => AwsIamConfig,
  ) $s = shape()) {
    $this->authorization_type = $authorization_type ?? "";
    $this->aws_iam_config = $aws_iam_config ?? null;
  }
}

type AuthorizationType = string;

class AwsIamConfig {
  public string $signing_region;
  public string $signing_service_name;

  public function __construct(shape(
  ?'signing_region' => string,
  ?'signing_service_name' => string,
  ) $s = shape()) {
    $this->signing_region = $signing_region ?? "";
    $this->signing_service_name = $signing_service_name ?? "";
  }
}

class BadRequestException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Blob = string;

type Boolean = bool;

type BooleanValue = bool;

class CachingConfig {
  public CachingKeys $caching_keys;
  public Long $ttl;

  public function __construct(shape(
  ?'caching_keys' => CachingKeys,
  ?'ttl' => Long,
  ) $s = shape()) {
    $this->caching_keys = $caching_keys ?? [];
    $this->ttl = $ttl ?? 0;
  }
}

type CachingKeys = vec<String>;

class CognitoUserPoolConfig {
  public string $app_id_client_regex;
  public string $aws_region;
  public string $user_pool_id;

  public function __construct(shape(
  ?'app_id_client_regex' => string,
  ?'aws_region' => string,
  ?'user_pool_id' => string,
  ) $s = shape()) {
    $this->app_id_client_regex = $app_id_client_regex ?? "";
    $this->aws_region = $aws_region ?? "";
    $this->user_pool_id = $user_pool_id ?? "";
  }
}

class ConcurrentModificationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ConflictDetectionType = string;

type ConflictHandlerType = string;

class CreateApiCacheRequest {
  public ApiCachingBehavior $api_caching_behavior;
  public string $api_id;
  public boolean $at_rest_encryption_enabled;
  public boolean $transit_encryption_enabled;
  public Long $ttl;
  public ApiCacheType $type;

  public function __construct(shape(
  ?'api_caching_behavior' => ApiCachingBehavior,
  ?'api_id' => string,
  ?'at_rest_encryption_enabled' => boolean,
  ?'transit_encryption_enabled' => boolean,
  ?'ttl' => Long,
  ?'type' => ApiCacheType,
  ) $s = shape()) {
    $this->api_caching_behavior = $api_caching_behavior ?? "";
    $this->api_id = $api_id ?? "";
    $this->at_rest_encryption_enabled = $at_rest_encryption_enabled ?? false;
    $this->transit_encryption_enabled = $transit_encryption_enabled ?? false;
    $this->ttl = $ttl ?? 0;
    $this->type = $type ?? "";
  }
}

class CreateApiCacheResponse {
  public ApiCache $api_cache;

  public function __construct(shape(
  ?'api_cache' => ApiCache,
  ) $s = shape()) {
    $this->api_cache = $api_cache ?? null;
  }
}

class CreateApiKeyRequest {
  public string $api_id;
  public string $description;
  public Long $expires;

  public function __construct(shape(
  ?'api_id' => string,
  ?'description' => string,
  ?'expires' => Long,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->description = $description ?? "";
    $this->expires = $expires ?? 0;
  }
}

class CreateApiKeyResponse {
  public ApiKey $api_key;

  public function __construct(shape(
  ?'api_key' => ApiKey,
  ) $s = shape()) {
    $this->api_key = $api_key ?? null;
  }
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

  public function __construct(shape(
  ?'api_id' => string,
  ?'description' => string,
  ?'dynamodb_config' => DynamodbDataSourceConfig,
  ?'elasticsearch_config' => ElasticsearchDataSourceConfig,
  ?'http_config' => HttpDataSourceConfig,
  ?'lambda_config' => LambdaDataSourceConfig,
  ?'name' => ResourceName,
  ?'relational_database_config' => RelationalDatabaseDataSourceConfig,
  ?'service_role_arn' => string,
  ?'type' => DataSourceType,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->description = $description ?? "";
    $this->dynamodb_config = $dynamodb_config ?? null;
    $this->elasticsearch_config = $elasticsearch_config ?? null;
    $this->http_config = $http_config ?? null;
    $this->lambda_config = $lambda_config ?? null;
    $this->name = $name ?? "";
    $this->relational_database_config = $relational_database_config ?? null;
    $this->service_role_arn = $service_role_arn ?? "";
    $this->type = $type ?? "";
  }
}

class CreateDataSourceResponse {
  public DataSource $data_source;

  public function __construct(shape(
  ?'data_source' => DataSource,
  ) $s = shape()) {
    $this->data_source = $data_source ?? null;
  }
}

class CreateFunctionRequest {
  public string $api_id;
  public ResourceName $data_source_name;
  public string $description;
  public string $function_version;
  public ResourceName $name;
  public MappingTemplate $request_mapping_template;
  public MappingTemplate $response_mapping_template;

  public function __construct(shape(
  ?'api_id' => string,
  ?'data_source_name' => ResourceName,
  ?'description' => string,
  ?'function_version' => string,
  ?'name' => ResourceName,
  ?'request_mapping_template' => MappingTemplate,
  ?'response_mapping_template' => MappingTemplate,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->data_source_name = $data_source_name ?? "";
    $this->description = $description ?? "";
    $this->function_version = $function_version ?? "";
    $this->name = $name ?? "";
    $this->request_mapping_template = $request_mapping_template ?? "";
    $this->response_mapping_template = $response_mapping_template ?? "";
  }
}

class CreateFunctionResponse {
  public FunctionConfiguration $function_configuration;

  public function __construct(shape(
  ?'function_configuration' => FunctionConfiguration,
  ) $s = shape()) {
    $this->function_configuration = $function_configuration ?? null;
  }
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

  public function __construct(shape(
  ?'additional_authentication_providers' => AdditionalAuthenticationProviders,
  ?'authentication_type' => AuthenticationType,
  ?'log_config' => LogConfig,
  ?'name' => string,
  ?'open_id_connect_config' => OpenIDConnectConfig,
  ?'tags' => TagMap,
  ?'user_pool_config' => UserPoolConfig,
  ?'xray_enabled' => boolean,
  ) $s = shape()) {
    $this->additional_authentication_providers = $additional_authentication_providers ?? [];
    $this->authentication_type = $authentication_type ?? "";
    $this->log_config = $log_config ?? null;
    $this->name = $name ?? "";
    $this->open_id_connect_config = $open_id_connect_config ?? null;
    $this->tags = $tags ?? [];
    $this->user_pool_config = $user_pool_config ?? null;
    $this->xray_enabled = $xray_enabled ?? false;
  }
}

class CreateGraphqlApiResponse {
  public GraphqlApi $graphql_api;

  public function __construct(shape(
  ?'graphql_api' => GraphqlApi,
  ) $s = shape()) {
    $this->graphql_api = $graphql_api ?? null;
  }
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

  public function __construct(shape(
  ?'api_id' => string,
  ?'caching_config' => CachingConfig,
  ?'data_source_name' => ResourceName,
  ?'field_name' => ResourceName,
  ?'kind' => ResolverKind,
  ?'pipeline_config' => PipelineConfig,
  ?'request_mapping_template' => MappingTemplate,
  ?'response_mapping_template' => MappingTemplate,
  ?'sync_config' => SyncConfig,
  ?'type_name' => ResourceName,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->caching_config = $caching_config ?? null;
    $this->data_source_name = $data_source_name ?? "";
    $this->field_name = $field_name ?? "";
    $this->kind = $kind ?? "";
    $this->pipeline_config = $pipeline_config ?? null;
    $this->request_mapping_template = $request_mapping_template ?? "";
    $this->response_mapping_template = $response_mapping_template ?? "";
    $this->sync_config = $sync_config ?? null;
    $this->type_name = $type_name ?? "";
  }
}

class CreateResolverResponse {
  public Resolver $resolver;

  public function __construct(shape(
  ?'resolver' => Resolver,
  ) $s = shape()) {
    $this->resolver = $resolver ?? null;
  }
}

class CreateTypeRequest {
  public string $api_id;
  public string $definition;
  public TypeDefinitionFormat $format;

  public function __construct(shape(
  ?'api_id' => string,
  ?'definition' => string,
  ?'format' => TypeDefinitionFormat,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->definition = $definition ?? "";
    $this->format = $format ?? "";
  }
}

class CreateTypeResponse {
  public Type $type;

  public function __construct(shape(
  ?'type' => Type,
  ) $s = shape()) {
    $this->type = $type ?? null;
  }
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

  public function __construct(shape(
  ?'data_source_arn' => string,
  ?'description' => string,
  ?'dynamodb_config' => DynamodbDataSourceConfig,
  ?'elasticsearch_config' => ElasticsearchDataSourceConfig,
  ?'http_config' => HttpDataSourceConfig,
  ?'lambda_config' => LambdaDataSourceConfig,
  ?'name' => ResourceName,
  ?'relational_database_config' => RelationalDatabaseDataSourceConfig,
  ?'service_role_arn' => string,
  ?'type' => DataSourceType,
  ) $s = shape()) {
    $this->data_source_arn = $data_source_arn ?? "";
    $this->description = $description ?? "";
    $this->dynamodb_config = $dynamodb_config ?? null;
    $this->elasticsearch_config = $elasticsearch_config ?? null;
    $this->http_config = $http_config ?? null;
    $this->lambda_config = $lambda_config ?? null;
    $this->name = $name ?? "";
    $this->relational_database_config = $relational_database_config ?? null;
    $this->service_role_arn = $service_role_arn ?? "";
    $this->type = $type ?? "";
  }
}

type DataSourceType = string;

type DataSources = vec<DataSource>;

type DefaultAction = string;

class DeleteApiCacheRequest {
  public string $api_id;

  public function __construct(shape(
  ?'api_id' => string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
  }
}

class DeleteApiCacheResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteApiKeyRequest {
  public string $api_id;
  public string $id;

  public function __construct(shape(
  ?'api_id' => string,
  ?'id' => string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->id = $id ?? "";
  }
}

class DeleteApiKeyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDataSourceRequest {
  public string $api_id;
  public ResourceName $name;

  public function __construct(shape(
  ?'api_id' => string,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->name = $name ?? "";
  }
}

class DeleteDataSourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteFunctionRequest {
  public string $api_id;
  public ResourceName $function_id;

  public function __construct(shape(
  ?'api_id' => string,
  ?'function_id' => ResourceName,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->function_id = $function_id ?? "";
  }
}

class DeleteFunctionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteGraphqlApiRequest {
  public string $api_id;

  public function __construct(shape(
  ?'api_id' => string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
  }
}

class DeleteGraphqlApiResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteResolverRequest {
  public string $api_id;
  public ResourceName $field_name;
  public ResourceName $type_name;

  public function __construct(shape(
  ?'api_id' => string,
  ?'field_name' => ResourceName,
  ?'type_name' => ResourceName,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->field_name = $field_name ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class DeleteResolverResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTypeRequest {
  public string $api_id;
  public ResourceName $type_name;

  public function __construct(shape(
  ?'api_id' => string,
  ?'type_name' => ResourceName,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class DeleteTypeResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeltaSyncConfig {
  public Long $base_table_ttl;
  public string $delta_sync_table_name;
  public Long $delta_sync_table_ttl;

  public function __construct(shape(
  ?'base_table_ttl' => Long,
  ?'delta_sync_table_name' => string,
  ?'delta_sync_table_ttl' => Long,
  ) $s = shape()) {
    $this->base_table_ttl = $base_table_ttl ?? 0;
    $this->delta_sync_table_name = $delta_sync_table_name ?? "";
    $this->delta_sync_table_ttl = $delta_sync_table_ttl ?? 0;
  }
}

class DynamodbDataSourceConfig {
  public string $aws_region;
  public DeltaSyncConfig $delta_sync_config;
  public string $table_name;
  public boolean $use_caller_credentials;
  public boolean $versioned;

  public function __construct(shape(
  ?'aws_region' => string,
  ?'delta_sync_config' => DeltaSyncConfig,
  ?'table_name' => string,
  ?'use_caller_credentials' => boolean,
  ?'versioned' => boolean,
  ) $s = shape()) {
    $this->aws_region = $aws_region ?? "";
    $this->delta_sync_config = $delta_sync_config ?? null;
    $this->table_name = $table_name ?? "";
    $this->use_caller_credentials = $use_caller_credentials ?? false;
    $this->versioned = $versioned ?? false;
  }
}

class ElasticsearchDataSourceConfig {
  public string $aws_region;
  public string $endpoint;

  public function __construct(shape(
  ?'aws_region' => string,
  ?'endpoint' => string,
  ) $s = shape()) {
    $this->aws_region = $aws_region ?? "";
    $this->endpoint = $endpoint ?? "";
  }
}

type ErrorMessage = string;

type FieldLogLevel = string;

class FlushApiCacheRequest {
  public string $api_id;

  public function __construct(shape(
  ?'api_id' => string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
  }
}

class FlushApiCacheResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'data_source_name' => ResourceName,
  ?'description' => string,
  ?'function_arn' => string,
  ?'function_id' => string,
  ?'function_version' => string,
  ?'name' => ResourceName,
  ?'request_mapping_template' => MappingTemplate,
  ?'response_mapping_template' => MappingTemplate,
  ) $s = shape()) {
    $this->data_source_name = $data_source_name ?? "";
    $this->description = $description ?? "";
    $this->function_arn = $function_arn ?? "";
    $this->function_id = $function_id ?? "";
    $this->function_version = $function_version ?? "";
    $this->name = $name ?? "";
    $this->request_mapping_template = $request_mapping_template ?? "";
    $this->response_mapping_template = $response_mapping_template ?? "";
  }
}

type Functions = vec<FunctionConfiguration>;

type FunctionsIds = vec<String>;

class GetApiCacheRequest {
  public string $api_id;

  public function __construct(shape(
  ?'api_id' => string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
  }
}

class GetApiCacheResponse {
  public ApiCache $api_cache;

  public function __construct(shape(
  ?'api_cache' => ApiCache,
  ) $s = shape()) {
    $this->api_cache = $api_cache ?? null;
  }
}

class GetDataSourceRequest {
  public string $api_id;
  public ResourceName $name;

  public function __construct(shape(
  ?'api_id' => string,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->name = $name ?? "";
  }
}

class GetDataSourceResponse {
  public DataSource $data_source;

  public function __construct(shape(
  ?'data_source' => DataSource,
  ) $s = shape()) {
    $this->data_source = $data_source ?? null;
  }
}

class GetFunctionRequest {
  public string $api_id;
  public ResourceName $function_id;

  public function __construct(shape(
  ?'api_id' => string,
  ?'function_id' => ResourceName,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->function_id = $function_id ?? "";
  }
}

class GetFunctionResponse {
  public FunctionConfiguration $function_configuration;

  public function __construct(shape(
  ?'function_configuration' => FunctionConfiguration,
  ) $s = shape()) {
    $this->function_configuration = $function_configuration ?? null;
  }
}

class GetGraphqlApiRequest {
  public string $api_id;

  public function __construct(shape(
  ?'api_id' => string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
  }
}

class GetGraphqlApiResponse {
  public GraphqlApi $graphql_api;

  public function __construct(shape(
  ?'graphql_api' => GraphqlApi,
  ) $s = shape()) {
    $this->graphql_api = $graphql_api ?? null;
  }
}

class GetIntrospectionSchemaRequest {
  public string $api_id;
  public OutputType $format;
  public BooleanValue $include_directives;

  public function __construct(shape(
  ?'api_id' => string,
  ?'format' => OutputType,
  ?'include_directives' => BooleanValue,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->format = $format ?? "";
    $this->include_directives = $include_directives ?? false;
  }
}

class GetIntrospectionSchemaResponse {
  public Blob $schema;

  public function __construct(shape(
  ?'schema' => Blob,
  ) $s = shape()) {
    $this->schema = $schema ?? "";
  }
}

class GetResolverRequest {
  public string $api_id;
  public ResourceName $field_name;
  public ResourceName $type_name;

  public function __construct(shape(
  ?'api_id' => string,
  ?'field_name' => ResourceName,
  ?'type_name' => ResourceName,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->field_name = $field_name ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class GetResolverResponse {
  public Resolver $resolver;

  public function __construct(shape(
  ?'resolver' => Resolver,
  ) $s = shape()) {
    $this->resolver = $resolver ?? null;
  }
}

class GetSchemaCreationStatusRequest {
  public string $api_id;

  public function __construct(shape(
  ?'api_id' => string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
  }
}

class GetSchemaCreationStatusResponse {
  public string $details;
  public SchemaStatus $status;

  public function __construct(shape(
  ?'details' => string,
  ?'status' => SchemaStatus,
  ) $s = shape()) {
    $this->details = $details ?? "";
    $this->status = $status ?? "";
  }
}

class GetTypeRequest {
  public string $api_id;
  public TypeDefinitionFormat $format;
  public ResourceName $type_name;

  public function __construct(shape(
  ?'api_id' => string,
  ?'format' => TypeDefinitionFormat,
  ?'type_name' => ResourceName,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->format = $format ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class GetTypeResponse {
  public Type $type;

  public function __construct(shape(
  ?'type' => Type,
  ) $s = shape()) {
    $this->type = $type ?? null;
  }
}

class GraphQLSchemaException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'additional_authentication_providers' => AdditionalAuthenticationProviders,
  ?'api_id' => string,
  ?'arn' => string,
  ?'authentication_type' => AuthenticationType,
  ?'log_config' => LogConfig,
  ?'name' => ResourceName,
  ?'open_id_connect_config' => OpenIDConnectConfig,
  ?'tags' => TagMap,
  ?'uris' => MapOfStringToString,
  ?'user_pool_config' => UserPoolConfig,
  ?'xray_enabled' => boolean,
  ) $s = shape()) {
    $this->additional_authentication_providers = $additional_authentication_providers ?? [];
    $this->api_id = $api_id ?? "";
    $this->arn = $arn ?? "";
    $this->authentication_type = $authentication_type ?? "";
    $this->log_config = $log_config ?? null;
    $this->name = $name ?? "";
    $this->open_id_connect_config = $open_id_connect_config ?? null;
    $this->tags = $tags ?? [];
    $this->uris = $uris ?? [];
    $this->user_pool_config = $user_pool_config ?? null;
    $this->xray_enabled = $xray_enabled ?? false;
  }
}

type GraphqlApis = vec<GraphqlApi>;

class HttpDataSourceConfig {
  public AuthorizationConfig $authorization_config;
  public string $endpoint;

  public function __construct(shape(
  ?'authorization_config' => AuthorizationConfig,
  ?'endpoint' => string,
  ) $s = shape()) {
    $this->authorization_config = $authorization_config ?? null;
    $this->endpoint = $endpoint ?? "";
  }
}

class InternalFailureException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class LambdaConflictHandlerConfig {
  public string $lambda_conflict_handler_arn;

  public function __construct(shape(
  ?'lambda_conflict_handler_arn' => string,
  ) $s = shape()) {
    $this->lambda_conflict_handler_arn = $lambda_conflict_handler_arn ?? "";
  }
}

class LambdaDataSourceConfig {
  public string $lambda_function_arn;

  public function __construct(shape(
  ?'lambda_function_arn' => string,
  ) $s = shape()) {
    $this->lambda_function_arn = $lambda_function_arn ?? "";
  }
}

class LimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListApiKeysRequest {
  public string $api_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'api_id' => string,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListApiKeysResponse {
  public ApiKeys $api_keys;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'api_keys' => ApiKeys,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->api_keys = $api_keys ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDataSourcesRequest {
  public string $api_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'api_id' => string,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListDataSourcesResponse {
  public DataSources $data_sources;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'data_sources' => DataSources,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->data_sources = $data_sources ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListFunctionsRequest {
  public string $api_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'api_id' => string,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListFunctionsResponse {
  public Functions $functions;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'functions' => Functions,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->functions = $functions ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListGraphqlApisRequest {
  public MaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListGraphqlApisResponse {
  public GraphqlApis $graphql_apis;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'graphql_apis' => GraphqlApis,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->graphql_apis = $graphql_apis ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListResolversByFunctionRequest {
  public string $api_id;
  public string $function_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'api_id' => string,
  ?'function_id' => string,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->function_id = $function_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListResolversByFunctionResponse {
  public PaginationToken $next_token;
  public Resolvers $resolvers;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'resolvers' => Resolvers,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resolvers = $resolvers ?? [];
  }
}

class ListResolversRequest {
  public string $api_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public string $type_name;

  public function __construct(shape(
  ?'api_id' => string,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ?'type_name' => string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class ListResolversResponse {
  public PaginationToken $next_token;
  public Resolvers $resolvers;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'resolvers' => Resolvers,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resolvers = $resolvers ?? [];
  }
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagMap $tags;

  public function __construct(shape(
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class ListTypesRequest {
  public string $api_id;
  public TypeDefinitionFormat $format;
  public MaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'api_id' => string,
  ?'format' => TypeDefinitionFormat,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->format = $format ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListTypesResponse {
  public PaginationToken $next_token;
  public TypeList $types;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'types' => TypeList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->types = $types ?? [];
  }
}

class LogConfig {
  public string $cloud_watch_logs_role_arn;
  public boolean $exclude_verbose_content;
  public FieldLogLevel $field_log_level;

  public function __construct(shape(
  ?'cloud_watch_logs_role_arn' => string,
  ?'exclude_verbose_content' => boolean,
  ?'field_log_level' => FieldLogLevel,
  ) $s = shape()) {
    $this->cloud_watch_logs_role_arn = $cloud_watch_logs_role_arn ?? "";
    $this->exclude_verbose_content = $exclude_verbose_content ?? false;
    $this->field_log_level = $field_log_level ?? "";
  }
}

type Long = int;

type MapOfStringToString = dict<String, String>;

type MappingTemplate = string;

type MaxResults = int;

class NotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class OpenIDConnectConfig {
  public Long $auth_ttl;
  public string $client_id;
  public Long $iat_ttl;
  public string $issuer;

  public function __construct(shape(
  ?'auth_ttl' => Long,
  ?'client_id' => string,
  ?'iat_ttl' => Long,
  ?'issuer' => string,
  ) $s = shape()) {
    $this->auth_ttl = $auth_ttl ?? 0;
    $this->client_id = $client_id ?? "";
    $this->iat_ttl = $iat_ttl ?? 0;
    $this->issuer = $issuer ?? "";
  }
}

type OutputType = string;

type PaginationToken = string;

class PipelineConfig {
  public FunctionsIds $functions;

  public function __construct(shape(
  ?'functions' => FunctionsIds,
  ) $s = shape()) {
    $this->functions = $functions ?? [];
  }
}

class RdsHttpEndpointConfig {
  public string $aws_region;
  public string $aws_secret_store_arn;
  public string $database_name;
  public string $db_cluster_identifier;
  public string $schema;

  public function __construct(shape(
  ?'aws_region' => string,
  ?'aws_secret_store_arn' => string,
  ?'database_name' => string,
  ?'db_cluster_identifier' => string,
  ?'schema' => string,
  ) $s = shape()) {
    $this->aws_region = $aws_region ?? "";
    $this->aws_secret_store_arn = $aws_secret_store_arn ?? "";
    $this->database_name = $database_name ?? "";
    $this->db_cluster_identifier = $db_cluster_identifier ?? "";
    $this->schema = $schema ?? "";
  }
}

class RelationalDatabaseDataSourceConfig {
  public RdsHttpEndpointConfig $rds_http_endpoint_config;
  public RelationalDatabaseSourceType $relational_database_source_type;

  public function __construct(shape(
  ?'rds_http_endpoint_config' => RdsHttpEndpointConfig,
  ?'relational_database_source_type' => RelationalDatabaseSourceType,
  ) $s = shape()) {
    $this->rds_http_endpoint_config = $rds_http_endpoint_config ?? null;
    $this->relational_database_source_type = $relational_database_source_type ?? "";
  }
}

type RelationalDatabaseSourceType = string;

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

  public function __construct(shape(
  ?'caching_config' => CachingConfig,
  ?'data_source_name' => ResourceName,
  ?'field_name' => ResourceName,
  ?'kind' => ResolverKind,
  ?'pipeline_config' => PipelineConfig,
  ?'request_mapping_template' => MappingTemplate,
  ?'resolver_arn' => string,
  ?'response_mapping_template' => MappingTemplate,
  ?'sync_config' => SyncConfig,
  ?'type_name' => ResourceName,
  ) $s = shape()) {
    $this->caching_config = $caching_config ?? null;
    $this->data_source_name = $data_source_name ?? "";
    $this->field_name = $field_name ?? "";
    $this->kind = $kind ?? "";
    $this->pipeline_config = $pipeline_config ?? null;
    $this->request_mapping_template = $request_mapping_template ?? "";
    $this->resolver_arn = $resolver_arn ?? "";
    $this->response_mapping_template = $response_mapping_template ?? "";
    $this->sync_config = $sync_config ?? null;
    $this->type_name = $type_name ?? "";
  }
}

type ResolverKind = string;

type Resolvers = vec<Resolver>;

type ResourceArn = string;

type ResourceName = string;

type SchemaStatus = string;

class StartSchemaCreationRequest {
  public string $api_id;
  public Blob $definition;

  public function __construct(shape(
  ?'api_id' => string,
  ?'definition' => Blob,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->definition = $definition ?? "";
  }
}

class StartSchemaCreationResponse {
  public SchemaStatus $status;

  public function __construct(shape(
  ?'status' => SchemaStatus,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

type String = string;

class SyncConfig {
  public ConflictDetectionType $conflict_detection;
  public ConflictHandlerType $conflict_handler;
  public LambdaConflictHandlerConfig $lambda_conflict_handler_config;

  public function __construct(shape(
  ?'conflict_detection' => ConflictDetectionType,
  ?'conflict_handler' => ConflictHandlerType,
  ?'lambda_conflict_handler_config' => LambdaConflictHandlerConfig,
  ) $s = shape()) {
    $this->conflict_detection = $conflict_detection ?? "";
    $this->conflict_handler = $conflict_handler ?? "";
    $this->lambda_conflict_handler_config = $lambda_conflict_handler_config ?? null;
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagMap $tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class Type {
  public string $arn;
  public string $definition;
  public string $description;
  public TypeDefinitionFormat $format;
  public ResourceName $name;

  public function __construct(shape(
  ?'arn' => string,
  ?'definition' => string,
  ?'description' => string,
  ?'format' => TypeDefinitionFormat,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->definition = $definition ?? "";
    $this->description = $description ?? "";
    $this->format = $format ?? "";
    $this->name = $name ?? "";
  }
}

type TypeDefinitionFormat = string;

type TypeList = vec<Type>;

class UnauthorizedException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateApiCacheRequest {
  public ApiCachingBehavior $api_caching_behavior;
  public string $api_id;
  public Long $ttl;
  public ApiCacheType $type;

  public function __construct(shape(
  ?'api_caching_behavior' => ApiCachingBehavior,
  ?'api_id' => string,
  ?'ttl' => Long,
  ?'type' => ApiCacheType,
  ) $s = shape()) {
    $this->api_caching_behavior = $api_caching_behavior ?? "";
    $this->api_id = $api_id ?? "";
    $this->ttl = $ttl ?? 0;
    $this->type = $type ?? "";
  }
}

class UpdateApiCacheResponse {
  public ApiCache $api_cache;

  public function __construct(shape(
  ?'api_cache' => ApiCache,
  ) $s = shape()) {
    $this->api_cache = $api_cache ?? null;
  }
}

class UpdateApiKeyRequest {
  public string $api_id;
  public string $description;
  public Long $expires;
  public string $id;

  public function __construct(shape(
  ?'api_id' => string,
  ?'description' => string,
  ?'expires' => Long,
  ?'id' => string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->description = $description ?? "";
    $this->expires = $expires ?? 0;
    $this->id = $id ?? "";
  }
}

class UpdateApiKeyResponse {
  public ApiKey $api_key;

  public function __construct(shape(
  ?'api_key' => ApiKey,
  ) $s = shape()) {
    $this->api_key = $api_key ?? null;
  }
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

  public function __construct(shape(
  ?'api_id' => string,
  ?'description' => string,
  ?'dynamodb_config' => DynamodbDataSourceConfig,
  ?'elasticsearch_config' => ElasticsearchDataSourceConfig,
  ?'http_config' => HttpDataSourceConfig,
  ?'lambda_config' => LambdaDataSourceConfig,
  ?'name' => ResourceName,
  ?'relational_database_config' => RelationalDatabaseDataSourceConfig,
  ?'service_role_arn' => string,
  ?'type' => DataSourceType,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->description = $description ?? "";
    $this->dynamodb_config = $dynamodb_config ?? null;
    $this->elasticsearch_config = $elasticsearch_config ?? null;
    $this->http_config = $http_config ?? null;
    $this->lambda_config = $lambda_config ?? null;
    $this->name = $name ?? "";
    $this->relational_database_config = $relational_database_config ?? null;
    $this->service_role_arn = $service_role_arn ?? "";
    $this->type = $type ?? "";
  }
}

class UpdateDataSourceResponse {
  public DataSource $data_source;

  public function __construct(shape(
  ?'data_source' => DataSource,
  ) $s = shape()) {
    $this->data_source = $data_source ?? null;
  }
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

  public function __construct(shape(
  ?'api_id' => string,
  ?'data_source_name' => ResourceName,
  ?'description' => string,
  ?'function_id' => ResourceName,
  ?'function_version' => string,
  ?'name' => ResourceName,
  ?'request_mapping_template' => MappingTemplate,
  ?'response_mapping_template' => MappingTemplate,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->data_source_name = $data_source_name ?? "";
    $this->description = $description ?? "";
    $this->function_id = $function_id ?? "";
    $this->function_version = $function_version ?? "";
    $this->name = $name ?? "";
    $this->request_mapping_template = $request_mapping_template ?? "";
    $this->response_mapping_template = $response_mapping_template ?? "";
  }
}

class UpdateFunctionResponse {
  public FunctionConfiguration $function_configuration;

  public function __construct(shape(
  ?'function_configuration' => FunctionConfiguration,
  ) $s = shape()) {
    $this->function_configuration = $function_configuration ?? null;
  }
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

  public function __construct(shape(
  ?'additional_authentication_providers' => AdditionalAuthenticationProviders,
  ?'api_id' => string,
  ?'authentication_type' => AuthenticationType,
  ?'log_config' => LogConfig,
  ?'name' => string,
  ?'open_id_connect_config' => OpenIDConnectConfig,
  ?'user_pool_config' => UserPoolConfig,
  ?'xray_enabled' => boolean,
  ) $s = shape()) {
    $this->additional_authentication_providers = $additional_authentication_providers ?? [];
    $this->api_id = $api_id ?? "";
    $this->authentication_type = $authentication_type ?? "";
    $this->log_config = $log_config ?? null;
    $this->name = $name ?? "";
    $this->open_id_connect_config = $open_id_connect_config ?? null;
    $this->user_pool_config = $user_pool_config ?? null;
    $this->xray_enabled = $xray_enabled ?? false;
  }
}

class UpdateGraphqlApiResponse {
  public GraphqlApi $graphql_api;

  public function __construct(shape(
  ?'graphql_api' => GraphqlApi,
  ) $s = shape()) {
    $this->graphql_api = $graphql_api ?? null;
  }
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

  public function __construct(shape(
  ?'api_id' => string,
  ?'caching_config' => CachingConfig,
  ?'data_source_name' => ResourceName,
  ?'field_name' => ResourceName,
  ?'kind' => ResolverKind,
  ?'pipeline_config' => PipelineConfig,
  ?'request_mapping_template' => MappingTemplate,
  ?'response_mapping_template' => MappingTemplate,
  ?'sync_config' => SyncConfig,
  ?'type_name' => ResourceName,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->caching_config = $caching_config ?? null;
    $this->data_source_name = $data_source_name ?? "";
    $this->field_name = $field_name ?? "";
    $this->kind = $kind ?? "";
    $this->pipeline_config = $pipeline_config ?? null;
    $this->request_mapping_template = $request_mapping_template ?? "";
    $this->response_mapping_template = $response_mapping_template ?? "";
    $this->sync_config = $sync_config ?? null;
    $this->type_name = $type_name ?? "";
  }
}

class UpdateResolverResponse {
  public Resolver $resolver;

  public function __construct(shape(
  ?'resolver' => Resolver,
  ) $s = shape()) {
    $this->resolver = $resolver ?? null;
  }
}

class UpdateTypeRequest {
  public string $api_id;
  public string $definition;
  public TypeDefinitionFormat $format;
  public ResourceName $type_name;

  public function __construct(shape(
  ?'api_id' => string,
  ?'definition' => string,
  ?'format' => TypeDefinitionFormat,
  ?'type_name' => ResourceName,
  ) $s = shape()) {
    $this->api_id = $api_id ?? "";
    $this->definition = $definition ?? "";
    $this->format = $format ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class UpdateTypeResponse {
  public Type $type;

  public function __construct(shape(
  ?'type' => Type,
  ) $s = shape()) {
    $this->type = $type ?? null;
  }
}

class UserPoolConfig {
  public string $app_id_client_regex;
  public string $aws_region;
  public DefaultAction $default_action;
  public string $user_pool_id;

  public function __construct(shape(
  ?'app_id_client_regex' => string,
  ?'aws_region' => string,
  ?'default_action' => DefaultAction,
  ?'user_pool_id' => string,
  ) $s = shape()) {
    $this->app_id_client_regex = $app_id_client_regex ?? "";
    $this->aws_region = $aws_region ?? "";
    $this->default_action = $default_action ?? "";
    $this->user_pool_id = $user_pool_id ?? "";
  }
}

